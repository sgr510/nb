<!--{$arrOrder.order_name01}--> <!--{$arrOrder.order_name02}--> 様

<!--{$tpl_header}-->

************************************************
　ご請求金額
************************************************

ご注文番号：<!--{$arrOrder.order_id}-->
お支払合計：￥ <!--{$arrOrder.payment_total|number_format|default:0}-->
ご決済方法：<!--{$arrOrder.payment_method}-->
メッセージ：<!--{$Message_tmp}-->
<!--{if $arrOrder.payment_method == "銀行振込"}-->

************************************************
●お支払いについて●

銀行振込(前払い)決済をご指定いただきましたので
下記口座に[合計]の金額を3日以内にお振込み下さい｡

[振込口座] みずほ銀行　浜松町支店　普通　1382048
[口座名義] カ)エスキュービズム
[振込金額] <!--{$arrOrder.payment_total|number_format|default:0}--> (円)
※振込手数料はご負担願います。

※振込み名義がご注文者様と異なる場合は必ずご連絡下さい。
　特定が出来ず、確認が遅れる場合がございます。
<!--{/if}-->
<!--{if $arrOther.title.value}-->
************************************************
　<!--{$arrOther.title.name}-->情報
************************************************

<!--{foreach key=key item=item from=$arrOther}-->
<!--{if $key != "title"}-->
<!--{if $item.name != ""}--><!--{$item.name}-->：<!--{/if}--><!--{$item.value}-->
<!--{/if}-->
<!--{/foreach}-->
<!--{/if}-->

************************************************
　ご注文商品明細
************************************************

<!--{section name=cnt loop=$arrOrderDetail}-->
商品コード: <!--{$arrOrderDetail[cnt].product_code}-->
商品名: <!--{$arrOrderDetail[cnt].product_name}--> <!--{$arrOrderDetail[cnt].classcategory_name1}--> <!--{$arrOrderDetail[cnt].classcategory_name2}-->
単価：￥ <!--{$arrOrderDetail[cnt].price|sfCalcIncTax:$arrInfo.tax:$arrInfo.tax_rule|number_format}-->
数量：<!--{$arrOrderDetail[cnt].quantity}-->

<!--{/section}-->
-------------------------------------------------
小　計 ￥ <!--{$arrOrder.subtotal|number_format|default:0}--> (うち消費税 ￥<!--{$arrOrder.tax|number_format|default:0}-->）
値引き ￥ <!--{$arrOrder.use_point+$arrOrder.discount|number_format|default:0}-->
送　料 ￥ <!--{$arrOrder.deliv_fee|number_format|default:0}-->
手数料 ￥ <!--{$arrOrder.charge|number_format|default:0}-->
============================================
合　計 ￥ <!--{$arrOrder.payment_total|number_format|default:0}-->

************************************************
　配送情報
************************************************

<!--{foreach item=shipping name=shipping from=$arrShipping}-->
◎お届け先<!--{if count($arrShipping) > 1}--><!--{$smarty.foreach.shipping.iteration}--><!--{/if}-->

　お名前　：<!--{$shipping.shipping_name01}--> <!--{$shipping.shipping_name02}-->　様
　郵便番号：〒<!--{$shipping.shipping_zip01}-->-<!--{$shipping.shipping_zip02}-->
　住所　　：<!--{$arrPref[$shipping.shipping_pref]}--><!--{$shipping.shipping_addr01}--><!--{$shipping.shipping_addr02}-->
　電話番号：<!--{$shipping.shipping_tel01}-->-<!--{$shipping.shipping_tel02}-->-<!--{$shipping.shipping_tel03}-->
　お届け日：<!--{$shipping.shipping_date|date_format:"%Y/%m/%d"|default:"指定なし"}-->
お届け時間：<!--{$shipping.shipping_time|default:"指定なし"}-->

<!--{foreach item=item name=item from=$shipping.shipment_item}-->
商品コード: <!--{$item.product_code}-->
商品名: <!--{$item.product_name}--> <!--{$item.classcategory_name1}--> <!--{$item.classcategory_name2}-->
単価：￥ <!--{$item.price|sfCalcIncTax:$arrInfo.tax:$arrInfo.tax_rule|number_format}-->
数量：<!--{$item.quantity}-->

<!--{/foreach}-->
<!--{/foreach}-->
<!--{if $arrOrder.customer_id && $smarty.const.USE_POINT !== false}-->
============================================
<!--{* ご注文前のポイント {$tpl_user_point} pt *}-->
ご使用ポイント <!--{$arrOrder.use_point|default:0|number_format}--> pt
今回加算される加算ポイント <!--{$arrOrder.add_point|default:0|number_format}--> pt
現在の所持ポイント <!--{$arrCustomer.point|default:0|number_format}--> pt
<!--{/if}-->

このメッセージはお客様へのお知らせ専用ですので、
このメッセージへの返信いただいても回答できません。

ご質問やご不明点が有りましたら、こちらからお願いいたします。
support.sk@naitei-bank.jp

-=-=-=-=-=-=-=-
内定バンク
http://naitei-bank.jp/

運営会社
(株)エスキュービズム
http://s-cubism.jp/
-=-=-=-=-=-=-=-