# Table Contents

- [Table Contents](#table-contents)
- [1. Seamless Wallet Overview 单一钱包概要](#1-seamless-wallet-overview-%E5%8D%95%E4%B8%80%E9%92%B1%E5%8C%85%E6%A6%82%E8%A6%81)
    - [1.1. Architecture Overview 架构概述](#11-architecture-overview-%E6%9E%B6%E6%9E%84%E6%A6%82%E8%BF%B0)
    - [1.2. Authentication 认证](#12-authentication-%E8%AE%A4%E8%AF%81)
        - [1.2.1. Generate Signature 生成签名](#121-generate-signature-%E7%94%9F%E6%88%90%E7%AD%BE%E5%90%8D)
        - [1.2.2. Java Code Example/ Java代码示例](#122-java-code-example-java%E4%BB%A3%E7%A0%81%E7%A4%BA%E4%BE%8B)
    - [1.3. Data Format 数据格式](#13-data-format-%E6%95%B0%E6%8D%AE%E6%A0%BC%E5%BC%8F)
        - [1.3.1. Common Data Format 通用数据格式](#131-common-data-format-%E9%80%9A%E7%94%A8%E6%95%B0%E6%8D%AE%E6%A0%BC%E5%BC%8F)
        - [1.3.2. Response Data Common 通用响应数据格式](#132-response-data-common-%E9%80%9A%E7%94%A8%E5%93%8D%E5%BA%94%E6%95%B0%E6%8D%AE%E6%A0%BC%E5%BC%8F)
- [2. Operator Wallet API Methods 运营商钱包的API方法](#2-operator-wallet-api-methods-%E8%BF%90%E8%90%A5%E5%95%86%E9%92%B1%E5%8C%85%E7%9A%84api%E6%96%B9%E6%B3%95)
    - [2.1. Ping 命令](#21-ping-%E5%91%BD%E4%BB%A4)
        - [2.1.1. Request Format 请求格式](#211-request-format-%E8%AF%B7%E6%B1%82%E6%A0%BC%E5%BC%8F)
        - [2.1.2. Response Format 响应格式](#212-response-format-%E5%93%8D%E5%BA%94%E6%A0%BC%E5%BC%8F)
        - [2.1.3. Possible Error Code 可能出现的错误代码](#213-possible-error-code-%E5%8F%AF%E8%83%BD%E5%87%BA%E7%8E%B0%E7%9A%84%E9%94%99%E8%AF%AF%E4%BB%A3%E7%A0%81)
    - [2.2. Get Player Balance (Optional) 获取用户余额（可选）](#22-get-player-balance-%E8%8E%B7%E5%8F%96%E7%94%A8%E6%88%B7%E4%BD%99%E9%A2%9D)
        - [2.2.1. Request Format 请求格式](#221-request-format-%E8%AF%B7%E6%B1%82%E6%A0%BC%E5%BC%8F)
        - [2.2.2. Response Format 响应格式](#222-response-format-%E5%93%8D%E5%BA%94%E6%A0%BC%E5%BC%8F)
        - [2.2.3. Possible Error Code 可能出现的错误代码](#223-possible-error-code-%E5%8F%AF%E8%83%BD%E5%87%BA%E7%8E%B0%E7%9A%84%E9%94%99%E8%AF%AF%E4%BB%A3%E7%A0%81)
    - [2.3. Debit Transaction (Optional) 扣款交易（可选）](#23-debit-transaction-optional-%E6%89%A3%E6%AC%BE%E4%BA%A4%E6%98%93%EF%BC%88%E5%8F%AF%E9%80%89%EF%BC%89)
        - [2.3.1. Request Format 请求格式](#231-request-format-%E8%AF%B7%E6%B1%82%E6%A0%BC%E5%BC%8F)
        - [2.3.2. Response Format 响应格式](#232-response-format-%E5%93%8D%E5%BA%94%E6%A0%BC%E5%BC%8F)
        - [2.3.3. Possible Error Code 可能出现的错误代码](#233-possible-error-code-%E5%8F%AF%E8%83%BD%E5%87%BA%E7%8E%B0%E7%9A%84%E9%94%99%E8%AF%AF%E4%BB%A3%E7%A0%81)
    - [2.4. Credit Transaction (Optional) 添加款项交易（可选）](#24-credit-transaction-optional-%E6%B7%BB%E5%8A%A0%E6%AC%BE%E9%A1%B9%E4%BA%A4%E6%98%93%EF%BC%88%E5%8F%AF%E9%80%89%EF%BC%89)
        - [2.4.1. Request Format 请求格式](#241-request-format-%E8%AF%B7%E6%B1%82%E6%A0%BC%E5%BC%8F)
        - [2.4.2. Response Format 响应格式](#242-response-format-%E5%93%8D%E5%BA%94%E6%A0%BC%E5%BC%8F)
        - [2.4.3. Possible Error Code 可能出现的错误代码](#243-possible-error-code-%E5%8F%AF%E8%83%BD%E5%87%BA%E7%8E%B0%E7%9A%84%E9%94%99%E8%AF%AF%E4%BB%A3%E7%A0%81)
    - [2.5. Query Transaction (Optional) 查询交易（可选）](#25-query-transaction-optional-%E6%9F%A5%E8%AF%A2%E4%BA%A4%E6%98%93%EF%BC%88%E5%8F%AF%E9%80%89%EF%BC%89)
        - [2.5.1. Request Format 请求格式](#251-request-format-%E8%AF%B7%E6%B1%82%E6%A0%BC%E5%BC%8F)
        - [2.5.2. Response Format 响应格式](#252-response-format-%E5%93%8D%E5%BA%94%E6%A0%BC%E5%BC%8F)
        - [2.5.3. Possible Error Code 可能出现的错误代码](#253-possible-error-code-%E5%8F%AF%E8%83%BD%E5%87%BA%E7%8E%B0%E7%9A%84%E9%94%99%E8%AF%AF%E4%BB%A3%E7%A0%81)
    - [2.6. Seamless Wagering 无缝下注](#26-seamless-wagering-%E6%97%A0%E7%BC%9D%E4%B8%8B%E6%B3%A8)
        - [2.6.1. BETTED Action 已下注](#261-betted-action-%E5%B7%B2%E4%B8%8B%E6%B3%A8)
        - [2.6.2. ACCEPTED Action 已接受](#262-accepted-action-%E5%B7%B2%E6%8E%A5%E5%8F%97)
        - [2.6.3. SETTLED Action 已结算](#263-settled-action-%E5%B7%B2%E7%BB%93%E7%AE%97)
        - [2.6.4. REJECTED Action 已被拒](#264-rejected-action-%E5%B7%B2%E8%A2%AB%E6%8B%92)
        - [2.6.5. CANCELLED Action 已取消](#265-cancelled-action-%E5%B7%B2%E5%8F%96%E6%B6%88)
        - [2.6.6. ROLLBACKED Actions 已返回](#266-rollbacked-actions-%E5%B7%B2%E8%BF%94%E5%9B%9E)
        - [2.6.7. UNSETTLED Action 取消结算](#267-unsettled-action-%E5%8F%96%E6%B6%88%E7%BB%93%E7%AE%97)
    - [Appendix](#appendix)
    - [References](#references)

# 1. Seamless Wallet Overview 单一钱包概要

The Sportsbook Platform needs to communicate with the Operator Wallet for the purposes of seamlessly debiting and crediting funds from the Operator Wallet when bets are placed and settled.

当注单生成和结算时，体育平台需要与运营商的钱包通讯以达到从运营商钱包里无缝存取相关款项的目的。

## 1.1. Architecture Overview 架构概述

SB Seamless Wallet API has been designed using a lightweight REST style for web service. All requests/responses use JSON format to transfer. Thus, the header of a request/response will have a parameter `ContentType: application/json`.

单一钱包API的设计使用了轻量REST的架构风格来提供网络服务。所有请求和响应都以JSON的格式传输，因此每一项请求和响应的的报头都会有一个`ContentType: application/json`. 的参数 。

## 1.2. Authentication 认证

Authentication method is the same with Pre-required integration authentication. 

认证方法与先决条件里的整合认证一样。

### 1.2.1. Generate Signature 生成签名

A token is generated from 3 properties: `agent_code`, `agent_key`, `timestamp`, `secret_key`

一个代码会从三个属性里产生，即`agent_code`, `agent_key`, `timestamp`, `secret_key`

```js
hashToken = agent_code + timestamp + agent_key;	
tokenPayload = agent_code + "|" + timestamp + "|" + hashToken
signature = encryptAES(tokenPayload, secret_key)
```

Signature is built base on `agent_code`, `agent_key` and `secrect_key`. They are provided when we receive a request switch from transfer to seamless wallet type.

签名是基于`agent_code`, `agent_key`以及 `secret_key`建立。它们会在我们收到从转账钱包转至单一钱包的申请的时候提供。

We use **AES** algorithm to encrypt and decrypt string value from the signature base on `secret_key`. The operator needs to decrypt it to verify when we call to B2B Seamless wallet.

我们使用**AES**的算法从基于`secret_key` 的签名里加密和解密字串值。当我们调取B2B单一钱包时，运营商需要解密字符串以核实。

### 1.2.2. Java Code Example/ Java代码示例

We use Java programming language to create an example code in generating a signature. A signature token is used as a signature authentication between the Betting Platform and the Operator.

我们使用Java编程语言创建一个示例代码来生成签名。一个签名代码在投注平台和运营商之间被用作为一个签名认证。

```java
private static final String ALGORITHM = "AES";
private static final String INIT_VECTOR = "RandomInitVector";

/**
 * Encode to generate signature that be used when send a request.
 * 
 * @param timestamp - current timestamp send request
 * @param agentCode - agentCode will be provided
 * @param agentKey - agentKey will be provided
 * @return String encoded to use for request
 */
public String encode(String timestamp, String agentCode, String agentKey, String aesKey) {
    String hashToken = DigestUtils.md5Hex(agentCode + timestamp + agentKey);
    String tokenPayload = String.format("%s|%s|%s", agentCode, timestamp, hashToken);
    return encryptAES(tokenPayload, aesKey);
}

/**
 * Decode string to verify signature in request.
 *
 * @param token - string value of singature.
 * @param aesKey - it is `secret_key` that will provided from platform.
 * @return Signature
 */
public static Signature decode(String token, String aesKey) {
    String tokenPayload = decryptAES(token, aesKey);
    String[] tmp = tokenPayload.split("\\|");
    Signature signature = new Signature(tmp[0], tmp[2], aesKey);
    signature.setTimestamp(tmp[1]);
    return signature;
}


/**
 * Use secrect_key to encrypt `tokenPayload` by AES algorithms.
 * 
 * @param tokenPayload - it is String that generate follow format in document.
 * @param aesKey - secrect_key be provide by platform.
 * @return String | NULL. 
 */
public String encryptAES(String tokenPayload, String aesKey) {
    try {
        SecretKeySpec secretKeySpec = new SecretKeySpec(aesKey.getBytes(), ALGORITHM);
        IvParameterSpec iv = new IvParameterSpec(INIT_VECTOR.getBytes("UTF-8"));
        Cipher cipher = Cipher.getInstance("AES/CBC/PKCS5PADDING");
        cipher.init(Cipher.ENCRYPT_MODE, secretKeySpec, iv);
        byte[] encrypted = cipher.doFinal(tokenPayload.getBytes());
        return Base64.getEncoder().encodeToString(encrypted);
    } catch (UnsupportedEncodingException | InvalidAlgorithmParameterException |
            InvalidKeyException | NoSuchAlgorithmException | BadPaddingException |
            IllegalBlockSizeException | NoSuchPaddingException ex) {
        LOGGER.log(Level.SEVERE, ex, () -> String.format("An exceptionn occurred "
                + "when encript key: %s, plain text: %s, exception %s", aesKey,              tokenPayload, ex));
    }
    return null;
}

/**
 * Descrypt String by secret_key base on ASE algorithm.
 *
 * @param encryptedText - String is return from {#link encryptAES()}
 * @param aesKey - secrect_key be provide by platform.
 * @return String | NULL.
 */
public static String decryptAES(String encryptedText, String aesKey) {
    try {
        SecretKeySpec secretKeySpec = new SecretKeySpec(aesKey.getBytes(), ALGORITHM);
        IvParameterSpec iv = new IvParameterSpec(INIT_VECTOR.getBytes("UTF-8"));
        Cipher cipher = Cipher.getInstance("AES/CBC/PKCS5PADDING");
        cipher.init(Cipher.DECRYPT_MODE, secretKeySpec, iv);
        byte[] original = cipher.doFinal(Base64.getDecoder().decode(encryptedText));
        return new String(original);
    } catch (UnsupportedEncodingException | InvalidAlgorithmParameterException | InvalidKeyException |
                NoSuchAlgorithmException | BadPaddingException | IllegalBlockSizeException | NoSuchPaddingException ex) {
        LOGGER.log(Level.INFO,
                "An exceptionn occurred when decrypt key: {0}, encryptedText: "
                + "{1}, exception {2}", new Object[]{aesKey, encryptedText, ex.toString()});

    }
    return null;
}
```

## 1.3. Data Format 数据格式

All most APIs are communicated with each other through the JSON format.

绝大多数API以JSON的格式来相互通讯


**Note: List of  truncated currencies (x1000)**
1. Vietnam Dong (VND)
2. Indonesian Rupiahs (IDR)
3. Cambodia Riel (KHR)
4. Lao KIP (LAK)
5. Myanmar Krat (MMK)

 Example: 100 IDR in system mean 100,000 IDR

### 1.3.1. Common Data Format 通用数据格式

| Parameter | Description | E.g. Type Value |
| --- | --- | --- |
| `Boolean` | Represents a Boolean logic value. | `true` / `false` |
| `Date` | All date and time are GMT-4. <br/> Using for following format: `yyyy-MM-ddTHH:mm:ss`. <br/> 所有的日期和时间都是使用GMT-4市区。格式为`yyyy-MM-ddTHH:mm:ss`. | 2018-12-20T04:05:06 |
| `Money` | All monetary amounts are to 2 decimal places or 0 decimal places. <br/> 所有金额都为两位小数点或0位小数点 | `12.05` / `10` |
| `String` | String value | `Message` |
| `Long` | Long value | `1549009111` |
| `Integer` | Integer value | `113` |
| `Decimal` | Decimal value. There is a 2-digit decimal number. | `1.09` |

All requests from Sportsbook Platform to Operator Wallet API have basic information in POST request data. (Except [Ping API](#21-ping-%E5%91%BD%E4%BB%A4), please refer to API definition)

从体育平台到运营商钱包API的所有请求在POST请求数据里都有基本信息(除了[Ping API](#21-ping-%E5%91%BD%E4%BB%A4), 请参照API定义)。

```json
{
    // other property of POST data.
    "Timestamp": "2018-01-15T15:20:14",
    "Signature": "aTFzUoIUD7Tpclf9XQ/+kuyEkNRJCUMK12XgQoVmhKuy6HGle5pj1sdZJJ\
        +FSu23MZhy+ppH02fe3kDnB5CgMw=="
}
```

| Parameter | Type | E.g. Value | Description |
| --- | --- | --- | --- |
| `Timestamp` | `Date` | 2018-01-15T15:20:14 |  |
| `Signature` | `String` |  | The signature was generated from [Authentication](#12-authentication-%E8%AE%A4%E8%AF%81) |

### 1.3.2. Response Data Common 通用响应数据格式

Data format for almost request. 大多数请求的数据格式

```json
{
    "Result": {
         //... Result Object
    },
    "ErrorCode": 0,
    "Timestamp": "2018-01-15T15:20:14"
}
```


# 2. Operator Wallet API Methods 运营商钱包的API方法

The Operator Wallet API includes the following API methods:

运营商钱包的API包括以下API方法：

## 2.1. Ping 命令

This method is used to query the Operator Wallet API to determine if the API is available. If no response is received e.g. Timeout, the Operator Wallet API will also assumed be unavailable. 

此方法被用来查询运营商钱包的API是否可被调取。如果没有响应，例如超时，运营商钱包的API将会被假定为无法调取。

### 2.1.1. Request Format 请求格式

**Endpoint 端点**

The request will be sent to following URI:

请求将被传至以下URI

```yml
URI: /v1/ping
Method: POST
```

**POST Parameters  POST参数**

The API method will send post JSON in the following format:

API方法将按以下格式传送 post JSON

```js
{    
    "Timestamp": "2018-01-15T15:20:14", // (Date)
}
```

### 2.1.2. Response Format 响应格式

API will return JSON in the following format: 

API将按以下格式返回JSON

```js
{
    "Result": {
        "Available": true   // (Boolean) wallet is available. Type: Boolean
    },
    "ErrorCode": 0,     // Refer to Possible Error Code
    "Timestamp": "2018-01-15T15:20:14"
}
```

### 2.1.3. Possible Error Code 可能出现的错误代码

| Code | Reason |
| --- | --- |
| 0 | Success <br>成功 |
| -1 | Unknown Error <br>未知错误<br>An unknown error has occurred during the API call.<br>在调取API过程中出现未知错误 |
| -6 | API Authentication failed <br>API认证失败<br>This error will be returned if the Signature is invalid or not found.<br>如果签名失效或不存在，此错误将会被返回 |

## 2.2. Get Player Balance (Optional) 获取用户余额（可选）

Get player balance that is available for betting. The balance returned is in the player’s currency. Sportsbook Platform will base on this balance to check whether a bet is allowed.

获取玩家可用以投注的余额。余额将以玩家的账户币种显示。体育平台将基于这个余额来判断投注是否被允许。

### 2.2.1. Request Format 请求格式

**Endpoint  端点**

The request will be sent to following URI:

请求将被传至以下URI

```yml
URI: /v1/{agentcode}/wallet/usercode/{usercode}/balance
Method: POST
```

| Parameter | E.g. Value | Description |
| --- | --- | --- |
| `agentcode` | `AG001` | Agent code was provided by Sportsbook Platform. |
| `usercode` | `PIN00115` | User Code was created in Create Player API. |

**Parameters**

The API method will send post JSON in the following format:

API方法将按以下格式传送 post JSON

```js
{    
    "Timestamp": "2018-01-15T15:20:14", // (Date)
    "Signature": "aTFzUoIUD7Tpclf9XQ/+kuyEkNRJCUMK12XgQoVmhKuy6HGle5pj1sdZJJ\
        +FSu23MZhy+ppH02fe3kDnB5CgMw=="
}
```

### 2.2.2. Response Format 响应格式

API will return JSON in the following format:

API将按以下格式返回JSON

```js
{
    "Result": {
        "UserCode": "PIN00115",         // (String)
        "AvailableBalance": 14.55      // (Money)
    },
    "ErrorCode": 0,             	    // Refer to Possible Error Code
    "Timestamp": "2018-01-15T15:20:15",  
}
```

### 2.2.3. Possible Error Code 可能出现的错误代码

| Code | Reason | 
| --- | --- |
| 0 | Success  <br/>成功 |
| -1 | Unknown Error  <br/>未知错误 <p/>An unknown error has occurred during the API call.  <br/>在调取API时出现未知错误 |
| -5 | Account Not Found <br/>账户不存在 |
| -6 | API Authenticated failed <br/> API认证失败 <p/> This error will be returned if the Signature is invalid or not found. <br/> 如果签名失效或不存在，此错误将会被返回 |

## 2.3. Debit Transaction (Optional) 扣款交易（可选）

This method is used to Debit funds from the Player authorized funds to the Operator Wallet. This is for debit manual adjustment. Operator wallet must deduct Amount from the player's available balance.

此方法用以从玩家认证的资金账户里取款至运营商钱包。这是为了手动调整提款。运营商钱包必须从玩家的可用余额里扣除相应金额Amount

`AvailableBalance` variable in response is balanced after subtracting `Amount` to the balance.

可用余额 `AvailableBalance` 在扣除相应金额`Amount` 至余额之后，响应变化将会平衡。

### 2.3.1. Request Format 请求格式

**Endpoint 端点**

```yml
URI:  /v1/{agentcode}/wallet/usercode/{usercode}/transactionid/{transactionid}/debit
Method: POST
```

| Parameter | E.g. Value | Description |
| --- | --- | --- |
| `agentcode` | `AG001` | Agent code was provided. |
| `usercode` | `PIN00115` | User Code was created in Create Player API. |
| `transactionid` | `154544844` |  |

**POST Parameters POST 参数**

The API method will send post JSON in the following format:

API方法将按以下格式发送 post JSON

```js
{
    "Action": {
        "Id": 4578545487,
        "Name": "adjusted",
        "Remark": "Bonus 115",
        "Transaction": {
            "TransactionId": 1654544,   // (Long)
            "TransactionType": "DEBIT",    // Refer to Transaction Type
            "TransactionDate": "2019-01-18T15:20:15", // (Date)
            "Amount": 15.55,    // (Money)
        }
    },
    "Timestamp": "2018-01-15T15:20:14", // (Date)
    "Signature": "MZmin3K1V9zt+bW/Ox+I/oY6QPq3SrkOS2MItpK5qwo="
}
```

### 2.3.2. Response Format 响应格式

```js
{
    "Result": {
        "UserCode": "PIN00115",         // String
        "AvaliableBalance": 10.02,      // (Money)
        "Action": {
            "Id": 4578545487,           // (Long)
            "TransactionId": 154544844, // (Long) TransactionId from URI
            "ErrorCode": 0              // Refer to action error code.
        }
    },
    "ErrorCode": 0,                     // refer to Error Code
    "Timestamp": "2018-01-15T15:20:15"  // (Date)  
}
```

### 2.3.3. Possible Error Code 可能出现的错误代码

**Request Error Code 错误代码请求**

| Code | Reason |
| :---: | --- |
| 0 | Success <p/>成功 |
| -1 | Unknown Error <p/>未知错误<p/>An unknown error has occurred during the API call.<br/>在调取API时出现未知错误 |
| -4 | Account Frozen <p/>账户冻结 |
| -5 | Account Not Found  <br/>账户不存在<p/>The user not found in Sportsbook Platform. <br/>玩家在体育平台不存在 |
| -6 | API Authenticated failed API<br/>认证失败<p/>This error will be returned if the Signature is invalid or not found.<br/>如果签名失效或不存在，此错误将会被返回 |

**Action Error Code 错误代码操作**

| Code | Reason |
| :---: | --- |
| 0 | Success<br/>成功 |
| -1 | Unknown Error<br/>未知错误 |
| -2 | Insufficient Funds<br/>资金不足 |

## 2.4. Credit Transaction (Optional) 添加款项交易（可选）

This method is used to Credit funds to the Player Authorized Funds from the Operator Wallet. This is for crediting manual adjustment. Operator wallet must add `Amount` to the player’s available balance. 

此方法用以从运营商钱包存款至玩家认证的资金账户。这是为了调整存款。运营商钱包必须存入相应金额`Amount`至玩家的可用余额里。

`AvailableBalance` variable in response is balanced after the process of adding `Amount` to the balance.

可用余额 `AvailableBalance` 在存入相应金额`Amount` 至余额之后，响应变化将会平衡。

### 2.4.1. Request Format 请求格式

**Endpoint 端点**

```yml
URI: /v1/{agentcode}/wallet/usercode/{usercode}/transactionid/{transactionid}/credit
Method: POST
```

| Parameter | E.g. Value | Description |
| --- | --- | --- |
| `agentcode` | `AG001` | Agent code was provided. <br/>代理代码已提供 |
| `usercode` | `PIN00115` | User Code was created in Create Player API. <br/>用户代码在Create Player API内已创建 |
| `transactionid` | `154544844` |  |

**Parameters 参数**

The API method will send post JSON in the following format:

API方法将按以下格式发送 post JSON

```js
{
    "Action": {
        "Id": 4578545487,
        "Name": " adjusted",
        "Remark": "Bonus 115",
        "Transaction": {
            "TransactionId": 1654544,   // (Long)
            "TransactionType": "CREDIT",    // Refer to Transaction Type
            "TransactionDate": "2019-01-18T15:20:15", // (Date)
            "Amount": 15.55,    // (Money)
        }
    }
    "Timestamp": "2018-01-15T15:20:14", // (Date)
    "Signature": "MZmin3K1V9zt+bW/Ox+I/oY6QPq3SrkOS2MItpK5qwo="
}
```

### 2.4.2. Response Format 响应格式

```js
{
    "Result": {
        "UserCode": "PIN00115",         // String
        "AvaliableBalance": 20.02,      // (Money)
        "Action": {
            "Id": 4578545487,           // (Long)
            "TransactionId": 154544844, // (Long) TransactionId from URI
            "ErrorCode": 0              // Refer to action error code.
        }
    },
    "ErrorCode": 0,                     // refer to Error Code
    "Timestamp": "2018-01-15T15:20:15"  // (Date)  
}
```

### 2.4.3. Possible Error Code 可能出现的错误代码

**Request Error Code 错误代码请求**

| Code | Reason |
| --- | --- |
| 0 | Success <br/>成功 |
| -1 | Unknown Error<br/>未知错误<br/>An unknown error has occurred during the API call.<br/>在调取API时出现未知错误 |
| -4 | Account Frozen <br/>冻结账户 |
| -5 | Account Not Found <br/>账户不存在<br/>The user not found in Sportsbook Platform. <br/>玩家在体育平台不存在 |
| -6 | API Authentication failed <br/>API认证失败<br/>This error will be returned if the Signature is invalid or not found.<br/>如果签名失效或不存在，此错误将会被返回 |

**Action Error Code 错误代码操作**

| Code | Reason |
| --- | --- |
| 0 | Success 成功 |
| -1 | Unknown Error 未知错误 |

## 2.5. Query Transaction (Optional) 查询交易（可选）

This method is used to query the state of a previously requested transaction by Sportsbook Platform. The method passes the TransactionId as a reference. The Operator Wallet will respond with success if the transaction was completed and the Operator owns the transactional reference.

此方法用以查询体育平台先前某请求的交易状态。此方法以TransactionID（交易ID）为参照。如果交易已完成，运营商钱包将会成功响应并且运营商拥有交易证明。

### 2.5.1. Request Format 请求格式

```yml
URI: /v1/{agentcode}/wallet/transaction/usercode/{usercode}/transactionid/{transactionid}
Method: POST
```

| Parameter | E.g. Value | Description |
| --- | --- | --- |
| `agentcode` | `AG001` | Agent code was provided. |
| `usercode` | `PIN00115` | User Code was created in Create Player API. |
| `transactionid` | `154544844` |  |

**POST Parameters POST 参数**

The API method will send post JSON in the following format:

API方法将按以下格式发送 post JSON

```js
{
    "Timestamp": "2018-01-15T15:20:14",     // (Date)
    "Signature": "MZmin3K1V9zt+bW/Ox+I/oY6QPq3SrkOS2MItpK5qwo="
}
```

### 2.5.2. Response Format 响应格式

```js
{
    "Result": { 
        "UserCode": "PIN00115",         // String
        "AvailableBalance": 25.05       // (Money)
        "Transaction": {
            "TransactionId": 154544844,   // (Long)
            "TransactionType": "CREDIT",    // Refer to Transaction Type
            "TransactionDate": "2019-01-18T15:20:15", // (Date)
            "Amount": 15.55,    // (Money)
            "Status": "completed"   // Refer to Transaction Status 
        }
    },
    "ErrorCode": 0,
    "Timestamp": "2018-01-15T15:20:12" // (Date)
}
```

### 2.5.3. Possible Error Code 可能出现的错误代码

**Request Error Code 错误代码请求**

| Code | Reason |
| --- | --- |
| 0 | Success <br/>成功 |
| -1 | Unknown Error <br/>未知错误<br/>An unknown error has occurred during the API call.<br/>在调取API时出现未知错误 |
| -6 | API Authentication Failed <br/>API认证失败<br/>This error will be returned if the Signature is invalid or not found.<br/>如果签名失效或不存在，此错误将会被返回 |
| -8 | Transaction Not Found<br/>交易不存在<br/>Debit/Credit transaction cannot be found in the Operator agent<br/>存取交易在运营商代理里不存在 |

## 2.6. Seamless Wagering 无缝下注

Seamless Wagering methods help to update the balance in the Operator wallet's account in real time. This action occurs when a player places bet, a bet is accepted, settled, rejected… These are processes that affect the balance in the Operator wallet. 

无缝下注的方法将有助于实时更新运营商钱包里的账户余额。这项操作将在玩家下注、注单被接受、被结算，被取消等时候发生，这些都是会影响运营商钱包余额的步骤。

```yml
URI: /v1/{agentcode}/wagering/usercode/{usercode}/request/{requestid}
Method: POST
```

| Parameter | E.g. Value | Description |
| --- | --- | --- |
| `agentcode` | `AG001` | Agent code is provided by Sportsbook Platform. |
| `usercode` | `PIN00115` | User Code is created in Create Player API. |
| `requestid` | `81347c9e-280d-40d6-8349-29dca7ea6bdc` | Request Id is unique in the betting platform. It is formatted based on UUID (8-4-4-4-12).<br/>Request ID在投注系统里是独一无二的。其格式是按照UUID (8-4-4-4-12) |

We have 7 Action Types for a wager: `BETTED`, `ACCEPTED`, `REJECTED`, `SETTLED`, `CANCELLED`, `ROLLBACKED` and `UNSETTLED`.

我们的每个注单会有7种操作类型，即：已下注、已接受、已被拒、已结算、已取消、已返回以及取消结算。

![Sequence Interaction](./../res/figure-1-sequence-interaction-between.png?raw=true)
 
*Figure 1 – The sequence shows the interaction between the Operator and the Sportbook Platform.*

**Bet Placement Process 下注处理步骤**:

| | Description | Wager Status | Affect Balance |
| --- | --- | --- | --- |
| `BETTED` `已下注`| Player is placing a bet <br/> 玩家正在下注 | `PENDING` 待确认 | `-` available balance 余额减少 |
| `ACCEPTED` `已接受`| Bet has been accepted<br/>注单已被接受 | `OPEN` 开放 | `+` available balance. 余额增加 |
| `ROLLBACKED` `已返回` | Error occurred when placing bet<br/>下注时出现错误 | `ERROR` (wager shall be deleted) <br/>报错（注单将被删除）| `+` available balance 余额增加 |
| `REJECTED` `已被拒` | Live Bet has been rejected<br/>即时注单被拒绝 | `CANCELLED`(Rejected) <br/>注单取消（被拒绝）| `+` available balance 余额增加 |
| `SETTLED` `已结算` | Bet has been settled<br/>注单已结算 | `SETTLED` 已结算 | `+/-` available balance 余额增减取决于注单结果 |
| `CANCELLED` `已取消` | Bet has been cancelled<br/>注单已被取消 | `CANCELLED` (Void) <br/>已取消（注单无效）| `+` available balance 余额增加 |
| `UNSETTLED` `未结算` | Bet has been unsettled and to be resettled<br/>注单未结算，将被重新结算 | `OPEN` 开放 | `+/-` available balance 余额增减 取决于注单结果 |


**Unsettled** is an action that is used for the re-settled process. Followed by **Unsettled** is **Settled** or **Cancelled** action.

取消结算会在重新结算的步骤中发生，随后的步骤是已结算或者已取消。
 
In case Bet was accepted with better odds and player chose Stake is Win stake.

假设注单以更佳的赔率确认并且玩家的下注为赢

![Wager State Diagram](../res/wager-state-diagram.png?raw=true)

### 2.6.1. BETTED Action 已下注

When player is placing a bet in player site, Sportsbook Platform send BETTED action with wager info to Operator to perform deduct player’s balance and store the wager. Available Balance response is the balance after performing a transaction.

当玩家在网站下注，体育平台将执行已下注的操作并将注单信息一起发送给运营商以扣除玩家的相应金额并保存注单。响应的可用余额为交易完成之后的余额。

**Single Wager Type: POST Data for Request 
单一注单：请求的POST数据**

```js
{
    "Timestamp": "2022-06-14T07:32:16",
    "Signature": "XKEa2UKfrWfVcDaIp/MDt62ujb8QkAx2Ja1AdkeIjcbeN65a5yzWojP4RBKxVLV9HOnEKiLYSbT0ssdc5KDVXQ==",
    "Actions": [
        {
            "Id": 1923899,
            "Name": "BETTED",
            "Transaction": {
                "TransactionId": 1177217,
                "TransactionType": "DEBIT",
                "TransactionDate": "2022-06-14T07:32:16",
                "Amount": 100
            },
            "WagerInfo": {
                "WagerId": 46739150,
                "Type": "SINGLE",
                "BetType": 99,
                "Odds": 0.043,
                "OddsFormat": 2,
                "ToWin": 4.3,
                "ToRisk": 100,
                "Stake": 100,
                "Period": 0,
                "Selection": "Kanga 1, Gravitas 0",
                "EventId": 1554522772,
                "EventName": "Correct Score",
                "EventDateFm": "2022-06-14 07:15:00",
                "LeagueId": 212168,
                "SportId": 12,
                "Sport": "E Sports",
                "Inplay": true,
                "InPlayScore": "",
                "Handicap": 0.0,
                "SelectionType": "10",
                "LeagueName": "League of Legends - LCO",
                "ParentEventName": "Kanga-vs-Gravitas"
            }
        }
    ]
}
```

**Parlay & Teaser Wager Type: POST Data for Request 
混合过关&变让分过关：请求的POST数据**

A Round Robin bet is an easy way to wager multiple parlays with a single bet. They make it easy for bettors to place parlays that consist of 3-8 lines and 2-6 teams. Bettors can cover their bases and wager all possible combinations by using a Round Robin and bet many parlays at once. The downside to these wagers is that gamblers bet too many legs or use too many selections in their parlay combinations. You can find round robin bets at just about every online sportsbook, but they’re not often used by most sports gamblers.

轮询过关投注(Round Robin投注)是一种简单快捷地在同一次投注里投注多个过关注单的玩法。。玩家可以同时选择多个过关组合选项，并在同一时间下注在3-8个赔率和2-6支队伍上的排列组合。

Operators receipt request `BETTED` action when player place bet. Round Robin will be presented through RoundRobinOptions. It’s value can be `Single`, `Parlay` (no round robin. It is only normal parlay wager), `TwoLegRoundRobin`, `ThreeLegRoundRobin`, `FourLegRoundRobin`, `FiveLegRoundRobin`, `SixLegRoundRobin`, `SixLegRoundRobin`, `SevenLegRoundRobin`, `EightLegRoundRobin`.

当玩家投注轮询过关(Round Robin bet)时，运营商会收到BETTED 的请求。轮询过关会通过RoundRobinOptions来展示。它的值可以是`Single`, `Parlay` (此种属于普通过关注单，非轮询过关), `TwoLegRoundRobin`, `ThreeLegRoundRobin`, `FourLegRoundRobin`, `FiveLegRoundRobin`, `SixLegRoundRobin`, `SixLegRoundRobin`, `SevenLegRoundRobin`, `EightLegRoundRobin`.

We have combine between picks (events/legs) and round robin options table example:
我们将投注选项（赛事/投注项）以及轮询投注的选择列表示例如下：

*Table 1 - Combine between picks (events/legs/bets) and round robin options*

| Picks <br/>(events/legs/bets)<br/>投注选择 <br/>（赛事/投注项） | Ways<br/>投注方法 | Number of Bets <br/>投注单数 |
| --- | --- | --- |
| 3 | 2 - TwoLegRoundRobin | 3 |
| 4 | 2 - TwoLegRoundRobin | 6 |
| 4 | 3 - ThreeLegRoundRobin | 4 |
| … | … | … |
| … | … | … |
| 8 | 2 - TwoLegRoundRobin | 28 |
| 8 | 3 - ThreeLegRoundRobin | 56 |
| 8 | 4 - FourLegRoundRobin  | 70 |
| 8 | 5 - FiveLegRoundRobin | 56 |
| 8 | 6 - SixLegRoundRobin | 28 |

We send to operators 1 `BETTED` action when player place bet with Round Robin Parlay. The wager in this action is *master wager*. Then we send 3 `ACCEPTED` action if player bet in 3 events (games, matches) and `RoundRobinOptions` is `TwoLegRoundRobin` (suppose player’s bet was accepted). Other actions are also same `ACCEPTED` action. `WagerMasterId` property will used to group all wagers together.

当运营商1的玩家投注在轮询过关时，我们会发送 `BETTED` 讯息。该讯息中的注单为这个轮询过关投注里的总注单 *master wager*. 随后，如果玩家在这次投注中是投注在了三场赛事上，我们会发送3个 `ACCEPTED` 讯息以及`RoundRobinOptions` is `TwoLegRoundRobin` (前提是玩家的投注被接受了). 其他的投注也同样会发送 ACCEPTED 讯息. `WagerMasterId` 属性用于将此轮询过关里的所有注单组在一。.

混合过关和变让分过关的注单赛事信息`Events` of `WagerInfo`将会以包含赛事名称的列表形式呈现。

In `BETTED` action, we try to send you number of bets that will be generated based on the `WagerNum` property in JSON request. When your bet is accepted, we will send number of `ACCEPTED` actions equals to number in `WagerNum` property. It is the same for next actions type. 

```js
{
    "Timestamp": "2022-07-15T09:50:14",
    "Signature": "NsSP2DR6VC+IM6GYDs5qXHYZFiDixcap+WwKiVVQpWYHbDzdFT2o2AVk56Naiv6W5ohoupX0WAiG9mIUOtO3Nw==",
    "Actions": [
        {
            "Id": 1929876,
            "Name": "BETTED",
            "Transaction": {
                "TransactionId": 1180518,
                "TransactionType": "DEBIT",
                "TransactionDate": "2022-07-15T09:50:14",
                "Amount": 33
            },
            "WagerInfo": {
                "WagerId": 47076606,
                "Type": "PARLAY",
                "BetType": 6,
                "Odds": "-0.143",
                "OddsFormat": 4,
                "ToWin": "230.770",
                "ToRisk": "33.000",
                "Stake": "33.000",
                "Legs": [
                    {
                        "SportId": 29,
                        "Sport": "Soccer",
                        "SportGroup": 0,
                        "League": "Canada - Premier League",
                        "BetType": 1,
                        "LeagueId": 205098,
                        "EventId": 1555400711,
                        "EventDateFm": "2022-07-15 19:30:00",
                        "SelectionType": 2,
                        "InplayScore": null,
                        "InPlay": false,
                        "Odds": "2.910",
                        "Handicap": 0.0,
                        "Period": 0,
                        "TeamType": 0,
                        "EventName": "York United FC-vs-Pacific FC",
                        "Selection": "Draw"
                    },
                    {
                        "SportId": 29,
                        "Sport": "Soccer",
                        "SportGroup": 0,
                        "League": "Club Friendlies",
                        "BetType": 2,
                        "LeagueId": 1863,
                        "EventId": 1555686630,
                        "EventDateFm": "2022-07-15 11:00:00",
                        "SelectionType": 1,
                        "InplayScore": null,
                        "InPlay": false,
                        "Odds": "0.666",
                        "Handicap": 0.25,
                        "Period": 0,
                        "TeamType": 0,
                        "EventName": "Istanbul Basaksehir FK-vs-Konyaspor Club",
                        "Selection": "Konyaspor Club"
                    },
                    {
                        "SportId": 29,
                        "Sport": "Soccer",
                        "SportGroup": 0,
                        "League": "Brazil - Serie B",
                        "BetType": 3,
                        "LeagueId": 1835,
                        "EventId": 1555400748,
                        "EventDateFm": "2022-07-15 18:00:00",
                        "SelectionType": 3,
                        "InplayScore": null,
                        "InPlay": false,
                        "Odds": "0.649",
                        "Handicap": 1.75,
                        "Period": 0,
                        "TeamType": 0,
                        "EventName": "Criciuma EC SC-vs-AA Ponte Preta SP",
                        "Selection": "Over"
                    }
                ],
                "WagerMasterId": 47076606,
                "WagerNum": 1,
                "RoundRobinOptions": [
                    "Parlay"
                ]
            }
        }
    ]
}	
```
**Manual Wager Type: POST Data for Request**
**手动投注类型：发布请求数据**

```js
{
  "Timestamp": "2021-07-02T15:22:07",
  "Signature": "ADGNbaOMwu/lNxQTnpAZFlzsMK76mvl1JehKtC9lprVvpKkDGasdez1e2P2mSr8F0czOLf4Y2fedcbaw5YO7Iw==",
  "Actions": [
    {
      "Id": 15560892634072091,
      "Name": "BETTED",
      "ManualWager": true,
      "Transaction": {
        "TransactionId": 15560892277229,
        "TransactionType": "DEBIT",
        "TransactionDate": "2021-06-30T02:04:26",
        "Amount": 642586
      },
      "WagerInfo": {
        "WagerId": 725462707,
        "BetType": 8,
        "Odds": "9.084",
        "OddsFormat": 1,
        "ToWin": "5195307.000",
        "ToRisk": "642586.000",
        "Period": 0,
        "Description": "Baseball - MLB\nMinnesota Twins vs Chicago White Sox - Over 8.5 @ -128 for Game\nArizona Diamondbacks vs St. Louis Cardinals - Over 8.5 @ -123 for Game\n\nBaseball - Korea Professional Baseball\nDoosan Bears vs Hanwha Eagles - Doosan Bears @ -162 for Game\nG2 Samsung Lions vs G2 SSG Landers - Over 8.5 @ -135 for Game\n\nOld ticket : Ref No: 00000000 / 11111111\nMember id : ABCXYZ"
      }
    }
  ]
}
```
**Response Data for Single, Parlay and Teaser, Manual cases.**

**单人、过关和预告、手动案例的响应数据**

```js
{
    "Result": {
        "UserCode": "S013000002",
        "AvailableBalance": 156.09999999999985,
        "Actions": [{
            "Id": 15560892634072091,
            "TransactionId": 15560892277229,
            "WagerId": 725462707,
            "ErrorCode": 0
        }]
    },
    "ErrorCode": 0,
    "Timestamp": "2019-05-14T19:32:57"
}
```

### 2.6.2. ACCEPTED Action 已接受

Sportsbook Platform will call to Operator to notify that the bet was **accepted**. The Operator needs to update the status of wager to OPEN and adjust balance if needed (in case better odds accepted).

体育平台将会通知运营商注单**已接受**。运营商需要更新注单状态至开放OPEN，并在有需要的时候调整余额（以防接受了更佳的赔率）。

**POST data for Request**

**请求的POST 数据**

*No Adjustment for Single Wager: Request data.*

*无需调整余额的单一注单：请求数据*

```js
{
    "Timestamp": "2019-05-14T05:39:05",
    "Signature": "vIUuEPYNPIOcRg700bxgs5dZUZXbtsB6VSxRFArB4FX/ymnSUSuhbBaMIwFXGvj\
        +YeK3SS8QlFkqtXSe57Z0XA==",
    "Actions": [{
        "Id": 15560892634071824,
        "Name": "ACCEPTED",
        "WagerInfo": {
            "WagerId": 725417673,
            "Type": "single",
            "BetType": 3,
            "Sport": "Soccer",
            "Odds": 1.909,
            "OddsFormat": 1,
            "ToWin": 20.000,
            "ToRisk": 22.000,
            "Period": 0,
            "EventId": 984812269,
            "EventName": "Oeste Itapolis-vs-Cuiaba",
            "LeagueId": 1835,
            "LeagueName": "Brazil - Serie B",
            "Inplay": false,
            "InPlayScore": "",
            "Handicap": 2.00,
            "SelectionType": "UNDER",
            "Selection": "Cuiaba"
        }
    }]
}
```

**Response Data 响应数据**

Response data when accepting bet with no adjustment balance. 

在无需调整余额的情况下，接受注单时的响应数据

```js
{
    "Result": {
        "UserCode": "SU1070000H",
        "AvailableBalance": 172.71500000000003,
        "Actions": [{
            "Id": 15560892634071824,
            "WagerId": 725417673,
            "ErrorCode": 0
        }]
    },
    "ErrorCode": 0,
    "Timestamp": "2019-05-03T00:18:27"
}
```

*Has Adjustment for Single Wager: Request data in case of better odds accepted and player chose to WIN option to place bet.*

*需要调整余额的单一注单：在接受更佳赔率以及玩家在下注时选择了独赢选项时的请求数据*

```js
{
    "Timestamp": "2019-05-03T04:18:27",
    "Signature": "w2QdXVixBhwuogVDouo08WaKrx5EzE6pNerQkaRMhHZ2ljQZ1u5gZzE\
        +/9H2FMiRJlvZz/QB0F4QlsXd4StmRA==",
    "Actions": [{
        "Id": 15560892634070383,
        "Name": "ACCEPTED",
        "Transaction": {
            "TransactionId": 15560892276043,
            "TransactionType": "CREDIT",
            "TransactionDate": "2019-05-03T08:18:26",
            "Amount": 2		// Amount need adjust
        },
        "WagerInfo": {
            "WagerId": 725417673,
            "Type": "single",
            "BetType": 3,
            "Sport": "Soccer",
            "Odds": 1.909,
            "OddsFormat": 1,
            "ToWin": 20.000,
            "ToRisk": 22.000,
            "Period": 0,
            "EventId": 984812269,
            "EventName": "Oeste Itapolis-vs-Cuiaba",
            "LeagueId": 1835,
            "LeagueName": "Brazil - Serie B",
            "Inplay": false,
            "InPlayScore": "",
            "Handicap": 2.00,
            "SelectionType": "UNDER",
            "Selection": "Cuiaba"
        }
    }]
}
```

**Response Data 响应数据**

Response data when accepting a bet with adjustment balance.

当接受需要调整余额的注单时的响应数据

```js
{
    "Result": {
        "UserCode": "SU1070000H",
        "AvailableBalance": 172.71500000000003,
        "Actions": [{
            "Id": 15560892634070383,
		"TransactionId": 15560892276043,
            "WagerId": 724816652,
            "ErrorCode": 0
        }]
    },
    "ErrorCode": 0,
    "Timestamp": "2019-05-03T00:18:27"
}
```

*No Adjustment for Parlay/ Teaser Wager: Request data.*

*无需调整余额的混合过关/变让分过关注单的请求数据*

```js
{
    "Timestamp": "2019-05-14T06:42:37",
    "Signature": "pybnPupUEeQs3JpavwTUfsbMl7ux82vwlhigjbsT0ICBw77bYE9ULDWK7cw3bQSRx0qE\
        +VLGegK6UvO/fkUNlA==",
    "Actions": [{
        "Id": 15560892634071858,
        "Name": "ACCEPTED",
        "WagerInfo": {
            "WagerId": 725428677,
            "Type": "parlay",
            "BetType": 6,
            "Odds": 3.324,
            "OddsFormat": 2,
            "ToWin": 39.890,
            "ToRisk": 12.000,
            "Legs": [{
                    "SportId": 29,
                    "Sport": "Soccer",
                    "SportGroup": 0,
                    "LeagueId": 154545454,
                    "League": "Brazil - Serie B",
                    "BetType": 1,
                    "SelectionType": 2,
                    "Selection": "DRAW",
                    "InplayScore": null,
                    "InPlay": false,
                    "Odds": 2.920,
                    "Handicap": 0.00,
                    "Period": 0,
                    "LegStatus": "ACCEPTED",
                    "TeamType": 0,
                    "EventName": "Oeste Itapolis-vs-Cuiaba"
                },
                {
                    "SportId": 29,
                    "Sport": "Soccer",
                    "SportGroup": 0,
                    "LeagueId": 154545455,
                    "League": "Brazil - Serie B",
                    "BetType": 3,
                    "SelectionType": 3,
                    "Selection": "Brasil de Pelotas",
                    "InplayScore": null,
                    "InPlay": false,
                    "Odds": 0.480,
                    "Handicap": 1.50,
                    "Period": 0,
                    "LegStatus": "ACCEPTED",
                    "TeamType": 0,
                    "EventName": "Figueirense-vs-Brasil de Pelotas"
                }
            ],
            "WagerMasterId": 725428677
        }
    }]
}
```

**Response Data**

**响应数据**

Response data when accepting bet with no adjustment balance. 

当接受无需调整余额的注单时的响应数据

```js
{
    "Result": {
        "UserCode": "S013000000",
        "AvailableBalance": 92693.40000000004,
        "Actions": [{
            "Id": 15560892634071858,
            "WagerId": 725428677,
            "ErrorCode": 0
        }]
    },
    "ErrorCode": 0,
    "Timestamp": "2019-05-14T02:42:37"
}
```

*Has Adjustment for Parlay/ Teaser Wager: Request data in case of better odds accepted and player chose to Win option to place bet.*

*需要调整余额的混合过关/变让分过关注单：在接受更佳赔率以及玩家在下注时选择了独赢选项时的请求数据*

```js
{
    "Timestamp": "2019-05-14T06:42:37",
    "Signature": "pybnPupUEeQs3JpavwTUfsbMl7ux82vwlhigjbsT0ICBw77bYE9ULDWK7cw3bQSRx0qE\
        +VLGegK6UvO/fkUNlA==",
    "Actions": [{
        "Id": 15560892634071858,
        "Name": "ACCEPTED",
        "Transaction": {
            "TransactionId": 15560892276043,
            "TransactionType": "CREDIT",
            "TransactionDate": "2019-05-03T08:18:26",
            "Amount": 2.00 // Amount need adjust
        },
        "WagerInfo": {
            "WagerId": 725428677,
            "Type": "parlay",
            "BetType": 6,
            "Odds": 3.324,
            "OddsFormat": 2,
            "ToWin": 39.890,
            "ToRisk": 12.000,
            "Legs": [{
                    "SportId": 29,
                    "Sport": "Soccer",
                    "SportGroup": 0,
                    "LeagueId": 154545454,
                    "League": "Brazil - Serie B",
                    "BetType": 1,
                    "SelectionType": 2,
                    "Selection": "Cuiaba",
                    "InplayScore": null,
                    "InPlay": false,
                    "Odds": 2.920,
                    "Handicap": 0.00,
                    "Period": 0,
                    "LegStatus": "ACCEPTED",
                    "TeamType": 0,
                    "EventName": "Oeste Itapolis-vs-Cuiaba"
                },
                {
                    "SportId": 29,
                    "Sport": "Soccer",
                    "SportGroup": 0,
                    "LeagueId": 154545455,
                    "League": "Brazil - Serie B",
                    "BetType": 3,
                    "SelectionType": 3,
                    "Selection": "Figueirense",
                    "InplayScore": null,
                    "InPlay": false,
                    "Odds": 0.480,
                    "Handicap": 1.50,
                    "Period": 0,
                    "LegStatus": "ACCEPTED",
                    "TeamType": 0,
                    "EventName": "Figueirense-vs-Brasil de Pelotas"
                }
            ],
            "WagerMasterId": 725428677
        }
    }]
}
```

**Response Data**

**响应数据**

Response data when accepting a bet with *adjustment* balance.

当接受需要调整余额的注单时的响应数据

```js
{
    "Result": {
        "UserCode": "S013000000",
        "AvailableBalance": 92693.40000000004,
        "Actions": [{
            "Id": 15560892634071858,
            "TransactionId": 15560892276043,
            "WagerId": 725428677,
            "ErrorCode": 0
        }]
    },
    "ErrorCode": 0,
    "Timestamp": "2019-05-14T02:42:37"
}
```

*Manual Wager Type: Request data.*

*手动投注类型：请求数据。*

```js
{
  "Timestamp": "2021-07-02T12:51:31",
  "Signature": "pybnPupUEeQs3JpavwTUfsbMl7ux82vwlhigjbsT0ICBw77bYE9ULDWK7cw3bQSRx0qE\
        +VLGegK6UvO/fkUNlA==",
  "Actions": [
    {
      "Id": 15560892634071824,
      "Name": "ACCEPTED",
      "WagerInfo": {
        "WagerId": 725428677,
        "BetType": 8,
        "Odds": "9.084",
        "OddsFormat": 1,
        "ToWin": "5195307.000",
        "ToRisk": "642586.000",
        "Period": 0,
        "Description": "Baseball - MLB\nMinnesota Twins vs Chicago White Sox - Over 8.5 @ -128 for Game\nArizona Diamondbacks vs St. Louis Cardinals - Over 8.5 @ -123 for Game\n\nBaseball - Korea Professional Baseball\nDoosan Bears vs Hanwha Eagles - Doosan Bears @ -162 for Game\nG2 Samsung Lions vs G2 SSG Landers - Over 8.5 @ -135 for Game\n\nOld ticket : Ref No: 00000000 / 00000000\nMember id : ABC XYZ"
      }
    }
  ]
}
```

**Response Data 响应数据**

Response data when accepting bet.

接受投注时的响应数据。

```js
{
  "Result": {
    "UserCode": "XZ10700",
    "AvailableBalance": "172.71500000000003",
    "Actions": [
      {
        "Id": 19532026,
        "WagerId": 1751348096,
        "ErrorCode": 0
      }
    ]
  },
  "ErrorCode": 0,
  "Timestamp": "2021-07-02T16:51:32"
}
```

### 2.6.3. SETTLED Action 已结算

Sportsbook platform will call to the Operator when a bet is settled. The Operator wallet needs to update the player’s wallet balance base on the Amount that Sportsbook platform sent in `SETTLED` action.

体育平台将会通知运营商注单已结算。运营商钱包需要根据体育平台在执行已结算的步骤时向其提供的Amount金额来更新玩家的钱包余额。

Note: In `settled` action, request data may have a Transaction or not. If there is a Transaction in the request wager is **WIN**, **WIN HALF** or **LOSE HALF**.

注：在已结算的步骤中，请求数据不一定有Transaction （交易）。如果请求中有Transaction （交易）信息，注单结果为赢，半赢或者半输。

**Single Wager Type: Request Data**

**单一注单：请求数据**

```js
{
    "Timestamp": "2019-05-14T04:19:40",
    "Signature": "HolXboM6LNFzni/Bh8FRJw4AqpdwmtcqrGagPDECNlxx3RuFisBLc2M8cySyJmnChSwwEPMko\
        87sUaEkcfjn4Q==",
    "Actions": [{
        "Id": 15560892634071798,
        "Name": "SETTLED",
        "Transaction": {
            "TransactionId": 15560892277038,
            "TransactionType": "CREDIT",
            "TransactionDate": "2019-05-14T04:00:00",
            "Amount": 14.840
        },
        "WagerInfo": {
            "WagerId": 725361010,
            "Type": "single",
            "BetType": 1,
            "Sport": "Baseball",
            "Odds": 2.120,
            "OddsFormat": 1,
            "ToWin": 7.840,
            "ToRisk": 7.000,
            "Period": 0,
	    "SettlementTime": "2019-05-14 06:00:00",
            "EventId": 985845048,
            "EventName": "Yokohama Bay Stars-vs-Chunichi Dragons",
            "LeagueId": 187703,
            "LeagueName": "Nippon Professional Baseball",
            "Inplay": false,
            "InPlayScore": "",
            "Handicap": 0.00,
            "SelectionType": "HOME",
            "Selection": "Yokohama Bay Stars",
            "HomePitcher": "Y. Ono",
            "AwayPitcher": "K. Azuma",
            "HomePitcherName": "Y. Ono",
            "AwayPitcherName": "K. Azuma",
            "ProfitAndLoss": 2.00,
            "Outcome": "WIN"    
        }
    }]
}
```

**Response Data**

**响应数据**

```js
{
    "Result": {
        "UserCode": "PIN00115", // (String)
        // (Money) Balance after perform transaction
        "AvaliableBalance": 1.02,
        "Actions": [{
            "Id": 15560892634071798,
            "WagerId": 725361010, // (Long)
            "TransactionId": 15560892277038, // (Long)    
            "ErrorCode": 0, // Refer to action error
        }]
    },
    "ErrorCode": 0, // Refer to Request Error Code
    "Timestamp": "2018-01-15T15:20:14" // (Date)
}
```

**Parlay/ Teaser Type: Request Data**

**混合过关/变让分过关：请求数据**

```js
{
    "Timestamp": "2019-05-21T11:59:57",
    "Signature": "9qOierMPv8iqy0fFsNO84sXxp4WJtDkGQYw13gLJzj1LSwvG6zmM6yhRb3h88ZTHVyK6cRADh1K\
        NuxeNh4CxqQ==",
    "Actions": [{
        "Id": 15560892634075535,
        "Name": "SETTLED",
        "Transaction": {
            "TransactionId": 15560892277038,
            "TransactionType": "CREDIT",
            "TransactionDate": "2019-05-14T04:00:00",
            "Amount": 50.000
        },
        "WagerInfo": {
            "WagerId": 725755355,
            "Type": "parlay",
            "BetType": 6,
            "Odds": 209.000,
            "OddsFormat": 0,
            "ToWin": 209.000,
            "ToRisk": 100.000,
            "ProfitAndLoss": -50.000,
            "Outcome": "LOSE",
	    "SettlementTime": "2019-05-14 06:00:00",
            "Legs": [{
                    "SportId": 29,
                    "Sport": "Soccer",
                    "SportGroup": 0,
                    "League": "Ukraine - Premier League",
                    "BetType": 3,
                    "LeagueId": 2650,
                    "SelectionType": 4,
                    "Selection": "Karpaty Lviv",
                    "InplayScore": null,
                    "InPlay": false,
                    "Odds": -138.000,
                    "Handicap": 1.00,
                    "Period": 1,
                    "LegStatus": "PUSH",
                    "TeamType": 0,
                    "EventName": "Chornomorets Odessa-vs-Karpaty Lviv"
                },
                {
                    "SportId": 29,
                    "Sport": "Soccer",
                    "SportGroup": 0,
                    "League": "Ukraine - Premier League",
                    "BetType": 2,
                    "LeagueId": 2650,
                    "SelectionType": 0,
                    "Selection": "Desna",
                    "InplayScore": null,
                    "InPlay": false,
                    "Odds": -126.000,
                    "Handicap": 0.00,
                    "Period": 0,
                    "LegStatus": "LOSE",
                    "TeamType": 0,
                    "EventName": "Desna-vs-Vorskla Poltava"
                }
            ],
            "WagerMasterId": 725755322
        }
    }]
}
```

**Response Data**

**响应数据**

```js
{
    "Result": {
        "UserCode": "PIN00115", // (String)
        // (Money) Balance after perform transaction
        "AvaliableBalance": 1.02,
        "Actions": [{
            "Id": 15560892634075535,
            "WagerId": 725755355, // (Long)
            "TransactionId": 15560892277038, // (Long)    
            "ErrorCode": 0, // Refer to action error
        }]
    },
    "ErrorCode": 0, // Refer to Request Error Code
    "Timestamp": "2018-01-15T15:20:14" // (Date)
}
```
**Manual Wager Type: Request Data**

**手动投注类型：请求数据**

```js
{
  "Timestamp": "2021-07-02T12:52:07",
  "Signature": "pybnPupUEeQs3JpavwTUfsbMl7ux82vwlhigjbsT0ICBw77bYE9ULDWK7cw3bQSRx0qE\
        +VLGegK6UvO/fkUNlA==",
  "Actions": [
    {
      "Id": 15560892634075535,
      "Name": "SETTLED",
      "Transaction": {
        "TransactionId": 15560892277038,
        "TransactionType": "CREDIT",
        "TransactionDate": "2021-07-02T12:51:54",
        "Amount": 5837893
      },
      "WagerInfo": {
        "WagerId": 725755355,
        "BetType": 8,
        "Odds": "9.084",
        "OddsFormat": 1,
        "ToWin": "5195307.000",
        "ToRisk": "642586.000",
        "ProfitAndLoss": "5195307.000",
        "Outcome": "WIN",
        "Period": 0,
        "SettlementTime": "2021-07-02 12:51:54",
        "Description": "Baseball - MLB\nMinnesota Twins vs Chicago White Sox - Over 8.5 @ -128 for Game\nArizona Diamondbacks vs St. Louis Cardinals - Over 8.5 @ -123 for Game\n\nBaseball - Korea Professional Baseball\nDoosan Bears vs Hanwha Eagles - Doosan Bears @ -162 for Game\nG2 Samsung Lions vs G2 SSG Landers - Over 8.5 @ -135 for Game\n\nOld ticket : Ref No: 0000000 / 00000000\nMember id : ABCXYZ"
      }
    }
  ]
}
```

**Response Data**

**响应数据**

```js
{
  "Result": {
    "UserCode": "PIN00115",
    "AvailableBalance": "2542586.95",
    "Actions": [
      {
        "Id": 15560892634075535,
        "TransactionId": 11707259,
        "WagerId": 725755355,
        "ErrorCode": 0
      }
    ]
  },
  "ErrorCode": 0,
  "Timestamp": "2021-07-02T16:52:08"
}
```
### 2.6.4. REJECTED Action 已被拒

Sportsbook platform will call to the Operator wallet to notify that the wager was 
**rejected**. The Operator wallet needs to update the status of the wager to REJECTED and return the player’s wallet balance base on the Amount in the transaction sent in data request.

体育平台将会通知运营商钱包注单已被拒。运营商钱包需要更新注单状态至REJECTED（已被拒）并根据数据请求里的交易金额返还至玩家的钱包。

**POST data for Request 发出数据请求**

```js
{
    "Timestamp": "2018-01-15T15:20:14", // (Date)
    "Signature": "w2QdXVixBhwuogVDouo08WaKrx5EzE6pNerQkaRMhHZ2ljQZ1u5gZzE\
        +/9H2FMiRJlvZz/QB0F4QlsXd4StmRA==",
    "Actions": [{
        "Id": 2445645645,
        "Name": "REJECTED",
        "WagerInfo": {
            "WagerId": 1545454 // (Long)
        },
        "Transaction": {
            "TransactionId": 123456789, // (Long)
            "TransactionType": "CREDIT", // Transaction Type
            "TransactionDate": "2019-01-18T15:20:15", // (Date)        
            "Amount": 15.55 // (Money)
        }
    }]
}
```

**Response Data 响应数据**

```js
{
    "Result": {
        "UserCode": "PIN00115",
        "AvailableBalance": 18.02,
        "Actions": [{
            "Id": 2445645645,
            "TransactionId": 123456789,
            "WagerId": 1545454,
            "ErrorCode": 0
        }]
    },
    "ErrorCode": 0,
    "Timestamp": "2019-05-03T00:18:27"
}
```

### 2.6.5. CANCELLED Action 已取消

When the bet is cancelled, Sportsbook platform will call the Operator with the `cancelled` type of transaction to refund the bet amount. 

当注单被取消，体育平台会通知运营商：`cancelled`交易已取消以返还投注金额。

**POST data for Request 发出数据请求**

```js
{
    "Timestamp": "2018-01-15T15:20:14", // (Date)
    "Signature": "w2QdXVixBhwuogVDouo08WaKrx5EzE6pNerQkaRMhHZ2ljQZ1u5gZzE\
        +/9H2FMiRJlvZz/QB0F4QlsXd4StmRA==",
    "Actions": [{
        "Id": 124457,
        "Name": "CANCELLED",
        "WagerInfo": {
            "WagerId": 1545454 // (Long)
        },
        "Transaction": {
            "TransactionId": 123456789, // (Long)
            "TransactionType": "CREDIT", // Transaction Type
            "TransactionDate": "2019-01-18T15:20:15", // (Date)        
            "Amount": 15.55 // (Money)
        }
    }]
}
```

**Response Data 响应数据**

```js
{
    "Result": {
        "UserCode": "PIN00115", // (String)
        // (Money) Balance after perform transaction
        "AvaliableBalance": 18.02,
        "Actions": [{
            "Id": 124457, // (Long)
            "WagerId": 1545454, // (Long)
            "TransactionId": 123456789, // (Long)
            "ErrorCode": 0 // Refer to action error code
        }]
    },
    "ErrorCode": 0, // Refer to Request Error Code
    "Timestamp": "2018-01-15T15:20:14" // (Date)
}
```

### 2.6.6. ROLLBACKED Actions 已返回

In case of any error occurred in the Sportsbook Platform and the bet was not accepted. Operator need to base on `TransactionId` and `WagerId` to rollback and refund `Amount` that Sportsbook Platform sent in betted action. If the Transaction and Wager are not found in Operator side, no adjustment is to be made. 

当体育平台出现错误导致注单未被接受的情况，运营商需要根据`TransactionId`交易ID和`WagerId`注单ID来返回并返还体育平台在下注的步骤中扣除的金额。如果交易和注单在运营商一方不存在，则无需做出调整。

*Note: The rollback action will be sent when there is a problem during place bet process. Request include wager information and transaction type of “rollbacked”. This request has only 1 action and does not include other actions.*

*注：在下注过程中出现问题时，将发送"已返回"请求"。该请求包含下注信息和"已返回"的交易类型。 该请求只有1个动作，不会和其他交易类型一起发送。*

In the Transaction of Rollback action, we send to B2B has ReferTransactionId property. It refers to TransactionId of the previous BETTED action. The ROLLBACKED action help to recover transactions from the BETTED action. Sometimes B2B will get this action but no previous BETTED action (there may be a problem sending BETTED actions over the network). Please ignore it and response success with ErrorCode is 0 as document.

```js
{
    "Timestamp": "2019-05-03T23:32:47",
    "Signature": "fhpsVEdPsn+BbdFw+NxTzhV6+r4TM06LCgRplAnuYfgERdrcsWljQPXR\
        /IAs9h54qXy6hXlDpXpMW/m1J37Syg==",
    "Actions": [{
        "Id": 15560892634070450,
        "Name": "ROLLBACKED",
        "Transaction": {
            "TransactionId": 15560892276088,
      "ReferTransactionId": 15560892276087,
            "TransactionType": "CREDIT",
            "TransactionDate": "2019-05-04T03:32:47",
            "Amount": 10
        },
        "WagerInfo": {
            "WagerId": 724839645
        }
    }]
}
```

**Response Data 响应数据**

```js
{
    "Result": {
        "UserCode": "SU1070000H",
        "AvailableBalance": 191.71500000000003,
        "Actions": [{
            "Id": 15560892634070450,
            "TransactionId": 15560892276088,
            "WagerId": 724839645,
            "ErrorCode": 0
        }]
    },
    "ErrorCode": 0,
    "Timestamp": "2019-05-03T19:32:47"
}
```

### 2.6.7. UNSETTLED Action 取消结算

When a bet needs to be resettled due to wrong result or any reason caused the resettlement in Sportsbook Platform. Sportsbook Platform will send unsettled action to rollback previous settle. Operator need to refund the lost amount or take back the win amount and change wager status back to OPEN.

当注单因错误结果或者其他原因需要在体育平台重新结算，体育平台会执行取消结算的步骤以返回之前的结算。运营商需要返还或扣除玩家可能的输赢金额并将注单状态改为OPEN。

*Note: The followed by Un-settled action is Cancelled or Settled action. In this request data, we usually called to Operator’s wallet 2 actions: `UNSETTLED` and `CANCELLED`/`SETTLED`.*

*注：未结算之后的步骤为已取消或者已结算。在这项请求数据中，我们通常调取运营商钱包2个步骤：取消结算以及已取消/已结算。*

**Request Data 请求数据**

```js
{
    "Timestamp": "2019-05-07T22:19:26",
    "Signature": "bgDLFBQBcU1UqOq+HUMUKTSeOAKRwnm1bu7igURAKI2ZD9updNLL\
        +pNRoJQ2CvC9EYr1DtBAYYNpPPVpnCUHKw==",
    "Actions": [{
            "Id": 15560892634071356,
            "Name": "UNSETTLED",
            "Transaction": {
                "TransactionId": 15560892276754,
                "TransactionType": "DEBIT",
                "TransactionDate": "2019-05-07T04:00:00",
                "Amount": 197
            },
            "WagerInfo": {
                "WagerId": 725057660
            }
        },
        {
            "Id": 15560892634071356,
            "Name": "CANCELLED",
            "Transaction": {
                "TransactionId": 15560892276755,
                "TransactionType": "CREDIT",
                "TransactionDate": "2019-05-07T04:00:00",
                "Amount": 100
            },
            "WagerInfo": {
                "WagerId": 725057660
            }
        }
    ]
}
```

**Response Data 响应数据**

```js
{
    "Result": {
        "UserCode": "S013000005",
        "AvailableBalance": 9900,
        "Actions": [{
                "Id": 15560892634071356,
                "TransactionId": 15560892276754,
                "WagerId": 725057660,
                "ErrorCode": 0
            },
            {
                "Id": 15560892634071356,
                "TransactionId": 15560892276755,
                "WagerId": 725057660,
                "ErrorCode": 0
            }
        ]
    },
    "ErrorCode": 0,
    "Timestamp": "2019-05-07T18:19:26"
}
```

## Appendix

1. [Appendix 1: JSON Data Request Description of Wagering API](./../appendix/appendix-1-json-data-request-description-of-wagering-api.md)

## References

1. [Java Code to verify Signature](./../codes/SignatureVerification.java)
2. [C# Code to verify Signature](./../codes/SignatureVerification.cs)
3. [PHP Code to verify Signature](./../codes/SignatureVerification.php)
