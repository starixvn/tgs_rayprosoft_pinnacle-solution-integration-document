<?php
// Agent Code was provided
define("AGENT_CODE", "SU107");
// Agent key was provided
define("AGENT_KEY", "b4dc8714-5d67-4798-a4eb-9478227c72ad");
// AES key was provided
define("AES_KEY", "rlpc3VsNcxXmrBXZ");

define("IV", "RandomInitVector");

class Signature {
    
    // `Timestamp` get from request body.
    public $timestamp = "2019-07-23T06:27:21";

    /**
     * encode to generate signature.
     */
    public function encode() {
        $hashToken = md5(AGENT_CODE. $this->timestamp . AGENT_KEY);
        $tokenPayload = AGENT_CODE . "|" . $this->timestamp . "|" . $hashToken;
        return $this->encrypt_aes($tokenPayload);
    }

    /**
     * decode signature get from request body.
     */
    public function decode($encryptedText) {
        return $this->decrypt_aes($encryptedText);
    }

    /**
    * encrypt with AES algorithms.
    *
    * @param $token string be generated in {@link encode()}. 
    * @return string after encryption.
    */
    private function encrypt_aes($token) {
        $size = mcrypt_get_block_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC);
        $td = mcrypt_module_open(MCRYPT_RIJNDAEL_128, '', MCRYPT_MODE_CBC, '');

        $pad = $size - (strlen($token) % $size);
        $str = $token . str_repeat(chr($pad), $pad);

        mcrypt_generic_init($td, AES_KEY, IV);

        $encrypt = mcrypt_generic($td, $str);

        mcrypt_generic_deinit($td);
        mcrypt_module_close($td);
            
        return base64_encode($encrypt);
    }

     /**
      * dencrypt with AES algorithms.
      *
      * @param $encryptedText signature from request body.
      * @return string after decryption.
      */
    private function decrypt_aes($encryptedText) {
        $size = mcrypt_get_block_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC);
        $td = mcrypt_module_open(MCRYPT_RIJNDAEL_128, '', MCRYPT_MODE_CBC, '');

        mcrypt_generic_init($td, AES_KEY, IV);
        $decrypted = mdecrypt_generic($td, base64_decode($encryptedText));

        mcrypt_generic_deinit($td);
        mcrypt_module_close($td);
        
        return trim($decrypted);
    }
}

/**
 * RUN TEST
 */
$signature = new Signature();
$encryptedSignature = $signature->encode();
echo PHP_EOL, "==========================";
echo PHP_EOL, "Singature string is: ", $encryptedSignature;

// you get it from request body.
$requestSignature = "B9Bp7loOzhvgHLLYg71A0v5yXKXTik87AjKCD8ZQSSVobuVHBkAVk8gxfwmWRglLCHm+CNaxnCa1neINbhRYMQ==";

// compare signture from request body and signature was encrypted.
if($encryptedSignature == $requestSignature) {
    echo PHP_EOL, "Your signature was verified.";
    $decode = $signature->decode($requestSignature);
    
    $info = explode("|", $decode);
    echo PHP_EOL, "Agent code: ",  $info[0];
    echo PHP_EOL, "Timestamp: ", $info[1], PHP_EOL;
}
