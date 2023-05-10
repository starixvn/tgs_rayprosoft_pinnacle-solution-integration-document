# Appendix 1: JSON Data Request Description of Wagering API. 附录 1： 关于下注API JSON数据请求的说明.

Wagering API have 7 action types as `betted`, `accepted`, `settled`, `rollbacked`, `cancelled`, `rejected` and `unsettled`. Each action is create from 3 elements: action, wager information and transaction.

Wagering API里面有7个action种类：`betted`, `accepted`, `settled`, `rollbacked`, `cancelled`, `rejected`, `unsettled`。每个action都是由3个元素组成的：action, wager information 和 transaction。

This section will describe the meaning of each object along with their possible values. 

这个章节会介绍每个对象的意思以及它们可能的值。

**Action Object**
 
| Name 名称 | Description 说明 | Values 值 |
| --- | --- | --- | 
| ActionId | ID of action. It is unique in betting platform. <br/> 动作的ID，此ID是独一无二的。| `124434343` |
| Name <br/>名称 | This is action type. It corresponds to the wager status.<br/> Note: In JSON Post data, value may be uppercase or lowercase. |`BETTED`<br/>`ACCEPTED`<br/>`SETTLED`<br/>`ROLLBACKED`<br/>`CANCELLED`<br/>`REJECTED`<br/>`UNSETTLED` |
| WagerInfo <br/>注单信息 | This is wager information that player placed bet. It is JSON object with the properties depend action type. <br/> 此为玩家投注时的注单信息。它是JSON对象, 属性由action的种类而决定。<p> Note: only in debit/ credit API, this field can be NULL or not exist in JSON data . In wagering API, it cannot be NULL or not exist. <br/>注意：只有在debit/credit API里面，此项能为NULL或not exist；在Wagering API里面，它不能为NULL或not exist. |
| Transaction<br/>交易 | Operator base on transaction object to debit/ credit balance of wallet.<br/>运营商用transaction 对象来增/减钱包里的余额。<p>Note: It only is NULL or not exists in JSON data when its amount property equal zero. So the wagering API may be NULL or exists in some cases but the debit/ credit API is always not NULL. <br/>注意：只有在amount 属性为0时，此项可以为Null或not exist；. 也就是说，wagering API有可能为Null,， 但是debit/credit API不会为NULL。 | |


*Wager Information Object (WagerInfo)*

<table>
 <tr>
  <th rowspan="2">Name 名称</th> 
  <th rowspan="2">Description 说明</th> 
  <th colspan="4">Action Type 投注动作</th>
  <th colspan="3">Wager Type</th>
  <th rowspan="2">Values 值</th>
 </tr>
 <tr>
  <th>Bet 投注</th>
  <th>Accept 作实</th>
  <th>Settled 已结算</th>
  <th>rollback cancel reject unsettled 取消/退回结算</th>
  <th>Single 单注</th>
  <th>Parlay 过关</th>
  <th>Teaser 变让分过关</th>
 </tr>
 <tr>
  <td>WagerId 注单ID</td>
  <td>ID of wager in betting platform. Its type is Long.</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>725462707</td>
 </tr>
 <tr>
  <td>Type 注单种类</td>
  <td>Type of wager.  Its type is String.</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>-</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>SINGLE</br>PARLAY</br>TEASER</td>
 </tr>
 <tr>
  <td>BetType 投注种类</td>
  <td>Type of bet. It relate to wager type. Its type is Integer. <br> Bet type: 6 – parlay, 7 – teaser, other - single. 6 代表过关， 7代表变让分过关，other 代表单注</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>-</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>6</td>
 </tr>
 <tr>
  <td>Odds 赔率</td>
  <td>Value of odds that player betted. Its type is Decimal.</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>-</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>12.666</td>
 </tr>
 <tr>
  <td>OddsFormat 赔率格式</td>
  <td>Format of odds that player betted. Its type is Integer. Refer to 1.7.</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>-</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>1</td>
 <tr>
  <td>ToWin 期望彩金</td>
  <td>Estimate how much player can win. Its type is Decimal. 如注单为赢，玩家能获得的盈利</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>-</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>128.330</td>
 </tr>
 <tr>
  <td>ToRisk 下注风险额</td>
  <td>Estimate how much player can loss. Its type is Decimal. 如注单为输，玩家会输的金额。</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>-</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>11.000</td>
 </tr>
 <tr>
  <td>EventId 赛事ID</td>
  <td>ID of event in wager that player bet. Its type is Long.</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>-</td>
  <td>:heavy_check_mark:</td>
  <td>-</td>
  <td>-</td>
  <td>988939488</td>
 </tr>
 <tr>
  <td>EventName 赛事名称</td>
  <td>Name of event in wager that player bet. Its type is String.</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>-</td>
  <td>:heavy_check_mark:</td>
  <td>-</td>
  <td>-</td>
  <td>CA Independiente de La Chorrera-vs-CD Universitario Chorrillo</td>
 </tr>
 <tr>
  <td>LeagueId 联赛ID</td>
  <td>League ID of event. Its type is Long.</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>-</td>
  <td>:heavy_check_mark:</td>
  <td>-</td>
  <td>-</td>
  <td>10573</td>
 </tr>
 <tr>
  <td>Sport 运动</td>
  <td>Name of Sport. Its type is String. Refer to 1.4.<\br>Note: The value may be uppercase or lowercase. </td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>-</td>
  <td>:heavy_check_mark:</td>
  <td>-</td>
  <td>-</td>
  <td>SOCCER</td>
 </tr>
 <tr>
  <td>Inplay 滚球</td>
  <td></td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>-</td>
  <td>:heavy_check_mark:</td>
  <td>-</td>
  <td>-</td>
  <td>true</td>
 </tr>
 <tr>
  <td>InPlayScore 滚球比分</td>
  <td>Its type is String.</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>-</td>
  <td>:heavy_check_mark:</td>
  <td>-</td>
  <td>-</td>
  <td>2-0</td>
 </tr>
 <tr>
  <td>Handicap 让分盘</td>
  <td></td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>-</td>
  <td>:heavy_check_mark:</td>
  <td>-</td>
  <td>-</td>
  <td>-0.25</td>
 </tr>
 <tr>
  <td>SelectionType 投注选项</td>
  <td>Its type is String.</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>-</td>
  <td>:heavy_check_mark:</td>
  <td>-</td>
  <td>-</td>
  <td>AWAY</br>HOME</br>DRAW</br>...</td>
 </tr>
 <tr>
  <td>HomePitcher 棒球主队投球手</td>
  <td>Only use for baseball. Its type is String.</br>Note: If value is NULL, it may be not exists in JSON data.</td>
  <td>:white_check_mark:</td>
  <td>:white_check_mark:</td>
  <td>:white_check_mark:</td>
  <td>-</td>
  <td>:heavy_check_mark:</td>
  <td>-</td>
  <td>-</td>
  <td>R. Messenger</td>
 </tr>
 <tr>
  <td>AwayPitcher 棒球客队投球手</td>
  <td>Only use for baseball. Its type is String.</br>Note: If value is NULL, it may be not exists in JSON data</td>
  <td>:white_check_mark:</td>
  <td>:white_check_mark:</td>
  <td>:white_check_mark:</td>
  <td>-</td>
  <td>:heavy_check_mark:</td>
  <td>-</td>
  <td>-</td>
  <td>D. Yamai</td>
 </tr>
 <tr>
  <td>HomePitcherName 棒球主队投球手名</td>
  <td>Only use for baseball. Its type is String.</br>Note: If value is NULL, it may be not exists in JSON data.</td>
  <td>:white_check_mark:</td>
  <td>:white_check_mark:</td>
  <td>:white_check_mark:</td>
  <td>-</td>
  <td>:heavy_check_mark:</td>
  <td>-</td>
  <td>-</td>
  <td>R. Messenger</td>
 </tr>
 <tr>
  <td>AwayPitcherName棒球客队投球手名</td>
  <td>Only use for baseball. Its type is String.</br>Note: If value is NULL, it may be not exists in JSON data</td>
  <td>:white_check_mark:</td>
  <td>:white_check_mark:</td>
  <td>:white_check_mark:</td>
  <td>-</td>
  <td>:heavy_check_mark:</td>
  <td>-</td>
  <td>-</td>
  <td>D. Yamai</td>
 </tr>
 <tr>
  <td>ProfitAndLoss 输赢</td>
  <td>Profit and Loss of wager after settlement. Its type is Decimal.</td>
  <td>-</td>
  <td>-</td>
  <td>:heavy_check_mark:</td>
  <td>-</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>-6.250</td>
 </tr>
 <tr>
  <td>Outcome 注单结果</td>
  <td>Outcome is result of wager after settlement. Its String with 3 values: WIN, LOSE or DRAW. 注单结算结果，有三个值：赢，输，打和。</td>
  <td>-</td>
  <td>-</td>
  <td>:heavy_check_mark:</td>
  <td>-</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>WIN</br>LOSE</br>DRAW</td>
 </tr>
 <tr>
  <td>WagerMasterId 总注单ID</td>
  <td>Parent Id of wager when wager is parlay. Its type is Long. 过关注单的parent ID </td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>-</td>
  <td>-</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>725462707</td>
 </tr>
 <tr>
  <td>RoundRobinOptions 轮询过关选择</td>
  <td>Round Robin Types of parlay wager.</br>Note: value is string array.</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>-</td>
  <td>-</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>["Parlay", ...]</td>
 </tr>
 <tr>
  <td>Legs.SportId 注单运动类型ID</td>
  <td>ID of sport in a leg. Its type Integer.</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>-</td>
  <td>-</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>29</td>
 </tr>
 <tr>
  <td>Legs.Sport 注单的运动类型</td>
  <td>Name of sport in a leg. Its type is String. Refer to 1.4.</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>-</td>
  <td>-</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>Soccer</td>
 </tr>
 <tr>
  <td>Legs.SportGroup 注单的运动所属组</td>
  <td>ID of sport group in a leg. Its type is Integer.</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>-</td>
  <td>-</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>0</td>
 </tr>
 <tr>
  <td>Legs.LeagueId 注单联赛ID</td>
  <td>ID of league in a leg. Its type is Long.</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>-</td>
  <td>-</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>1544875</td>
 </tr>
 <tr>
  <td>Legs.League 注单联赛名</td>
  <td>Name of league in a leg. Its type is String.</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>-</td>
  <td>-</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>Finland - Ykkonen</td>
 </tr>
 <tr>
  <td>Legs.BetType 注单投注类型</td>
  <td>Type of bet in a leg. Its type is Integer.</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>-</td>
  <td>-</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>1</td>
 </tr>
 <tr>
  <td>Legs.InplayScore 注单滚球比分</td>
  <td>Score of event in a leg when it is inplay. Its type is String.</td>
  <td>:white_check_mark:</td>
  <td>:white_check_mark:</td>
  <td>:white_check_mark:</td>
  <td>-</td>
  <td>-</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>2-0</td>
 </tr>
 <tr>
  <td>Legs.InPlay 注单滚球</td>
  <td>The event of a leg is inplay or not. Its type is Boolean. 标明该注单是否在滚球时下注。</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>-</td>
  <td>-</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>true</td>
 </tr>
 <tr>
  <td>Legs.Odds 注单赔率</td>
  <td>Odds value of a leg. Its type is Decimal.</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>-</td>
  <td>-</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>7.660</td>
 </tr>
 <tr>
  <td>Legs.Handicap 注单让球</td>
  <td>Handicap of event in a leg. Its type is Decimal.</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>-</td>
  <td>-</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>0.00</td>
 </tr>
 <tr>
  <td>Legs.Period 注单投注比赛区间</td>
  <td>Period of event in a leg. Its type is Integer.</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>-</td>
  <td>-</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>0</td>
 </tr>
 <tr>
  <td>Legs.TeamType 注单队伍类型</td>
  <td>Team Type of event in a leg. Its type is Integer.</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>-</td>
  <td>-</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>0</td>
 </tr>
 <tr>
  <td>Legs.Point 注单分值</td>
  <td>Its type is Decimal.</td>
  <td>:white_check_mark:</td>
  <td>:white_check_mark:</td>
  <td>:white_check_mark:</td>
  <td>-</td>
  <td>-</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>1.004</td>
 </tr>
 <tr>
  <td>Legs.EventName 注单赛事名</td>
  <td>Name of Event in a leg. It type is String.</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>-</td>
  <td>-</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>TPS Turku-vs-Ac Kajaani</td>
 </tr>
 <tr>
  <td>Legs.HomePitcher 注单主队投手</td>
  <td>Only use for baseball. Its type is String.</br>Note: If value is NULL, it may be not exists in JSON data.</td>
  <td>:white_check_mark:</td>
  <td>:white_check_mark:</td>
  <td>:white_check_mark:</td>
  <td>-</td>
  <td>-</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>R. Messenger</td>
 </tr>
 <tr>
  <td>Legs.AwayPitcher 注单客队投手</td>
  <td>Only use for baseball. Its type is String.</br>Note: If value is NULL, it may be not exists in JSON data.</td>
  <td>:white_check_mark:</td>
  <td>:white_check_mark:</td>
  <td>:white_check_mark:</td>
  <td>-</td>
  <td>-</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>D. Yamai</td>
 </tr>
 <tr>
  <td>Legs.HomePitcherName 注单主队投手名</td>
  <td>Only use for baseball. Its type is String.</br>Note: If value is NULL, it may be not exists in JSON data.</td>
  <td>:white_check_mark:</td>
  <td>:white_check_mark:</td>
  <td>:white_check_mark:</td>
  <td>-</td>
  <td>-</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>R. Messenger</td>
 </tr>
 <tr>
  <td>Legs.AwayPitcherName 注单客队投手名</td>
  <td>Only use for baseball. Its type is String.</br>Note: If value is NULL, it may be not exists in JSON data.</td>
  <td>:white_check_mark:</td>
  <td>:white_check_mark:</td>
  <td>:white_check_mark:</td>
  <td>-</td>
  <td>-</td>
  <td>:heavy_check_mark:</td>
  <td>:heavy_check_mark:</td>
  <td>D. Yamai</td>
 </tr>
</table>
:heavy_check_mark: 	: The property is exists in JSON data.

:white_check_mark: 	: The property is not exists or NULL in JSON data.

\-	: The property is not exists or not apply for JSON data.
