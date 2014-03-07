<!--{*
 * This file is part of EC-CUBE
 *
 * Copyright(c) 2000-2011 LOCKON CO.,LTD. All Rights Reserved.
 *
 * http://www.lockon.co.jp/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *}-->
<script type="text/javascript" src="<!--{$smarty.const.ROOT_URLPATH}-->js/products.js"></script>
<script type="text/javascript">//<![CDATA[
function fnSetClassCategories(form, classcat_id2_selected) {
    var $form = $(form);
    var product_id = $form.find('input[name=product_id]').val();
    var $sele1 = $form.find('select[name=classcategory_id1]');
    var $sele2 = $form.find('select[name=classcategory_id2]');
    setClassCategories($form, product_id, $sele1, $sele2, classcat_id2_selected);
}
// 並び順を変更
function fnChangeOrderby(orderby) {
    fnSetVal('orderby', orderby);
    fnSetVal('pageno', 1);
    fnSubmit();
}
// 表示件数を変更
function fnChangeDispNumber(dispNumber) {
    fnSetVal('disp_number', dispNumber);
    fnSetVal('pageno', 1);
    fnSubmit();
}
// カゴに入れる
function fnInCart(productForm) {
    var product_id = productForm["product_id"].value;
    fnChangeAction("?#product" + product_id);
    if (productForm["classcategory_id1"]) {
        fnSetVal("classcategory_id1", productForm["classcategory_id1"].value);
    }
    if (productForm["classcategory_id2"]) {
        fnSetVal("classcategory_id2", productForm["classcategory_id2"].value);
    }
    fnSetVal("quantity", productForm["quantity"].value);
    fnSetVal("product_id", productForm["product_id"].value);
    fnSetVal("product_class_id", productForm["product_class_id"].value);
    fnSubmit();
}
//]]>
</script>

<!--▼CONTENTS-->
<div id="undercolumn">
    <form name="form1" id="form1" method="get" action="?">
        <input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
        <input type="hidden" name="mode" value="<!--{$mode|h}-->" />
        <!--{* ▼検索条件 *}-->
        <input type="hidden" name="category_id" value="<!--{$arrSearchData.category_id|h}-->" />
        <input type="hidden" name="maker_id" value="<!--{$arrSearchData.maker_id|h}-->" />
        <input type="hidden" name="name" value="<!--{$arrSearchData.name|h}-->" />
        <!--{* ▲検索条件 *}-->
        <!--{* ▼ページナビ関連 *}-->
        <input type="hidden" name="orderby" value="<!--{$orderby|h}-->" />
        <input type="hidden" name="disp_number" value="<!--{$disp_number|h}-->" />
        <input type="hidden" name="pageno" value="<!--{$tpl_pageno|h}-->" />
        <!--{* ▲ページナビ関連 *}-->
        <!--{* ▼注文関連 *}-->
        <input type="hidden" name="product_id" value="" />
        <input type="hidden" name="classcategory_id1" value="" />
        <input type="hidden" name="classcategory_id2" value="" />
        <input type="hidden" name="product_class_id" value="" />
        <input type="hidden" name="quantity" value="" />
        <!--{* ▲注文関連 *}-->
        <input type="hidden" name="rnd" value="<!--{$tpl_rnd|h}-->" />
    </form>

    <!--★タイトル★-->
    <h2 class="title"><!--{$tpl_subtitle|h}--></h2>

    <!--{if $tpl_subtitle == "人事インタビュー"}-->
    <img src="<!--{$TPL_URLPATH}-->img/banner/bnr-jinji-interview.gif"><br>
   マスコミ、商社、メーカー、商社、外資系…<br>
   誰もが憧れる人気企業の人事の生の声を、就活生が聞いて来ました！某就活サイトにはない情報がここにある、就活生必見です。<br>
    <!--{/if}-->
    <!--{if $tpl_subtitle == "就活の常識"}-->
    <img src="<!--{$TPL_URLPATH}-->img/banner/bnr-ebook.gif"><br>
   「もう一度やればうまくいく」<br>
   就活を終えたどの学生も同じことを言います、だけど、就活は人生一回限り。<br>
   後悔する前に知っておこう！「就活の常識」、スマホでもタブレットでもパソコンでも、どこでも読める電子書籍です。<br>
    <!--{/if}-->
    <!--{if $tpl_subtitle == "先輩の体験談"}-->
    <img src="<!--{$TPL_URLPATH}-->img/banner/bnr-taikendan.gif"><br>
   就活の最大の敵は「不安」です。<br>
   人は未知のものに対して大きく不安を感じます。ゴールが見えない戦いは不安です。<br>
   ならば先輩たちの体験談を聞いてみませんか？ これだけの情報量はここにしかない！ 会社なび/先輩の内定獲得体験談<br>
    <!--{/if}-->
    <!--{if $tpl_subtitle == "メール文面集"}-->
    <img src="<!--{$TPL_URLPATH}-->img/banner/bnr-mail-example.gif"><br>
   ここで差がつく！<br>
   ESや面接対策をしない学生はいないのに、メールの書き方はテキトウという学生さんは本当に多いです。<br>
   ところが人事は見ています、アナタは自信を持ってメールを書けますか？<br>
    <!--{/if}-->

    <!--▼検索条件-->
    <!--{if $tpl_subtitle == "検索結果"}-->
        <ul class="pagecond_area">
            <li><strong>カテゴリー：</strong><!--{$arrSearch.category|h}--></li>
        <!--{if $arrSearch.maker|strlen >= 1}--><li><strong>メーカー：</strong><!--{$arrSearch.maker|h}--></li><!--{/if}-->
            <li><strong>キーワード：</strong><!--{$arrSearch.name|h}--></li>
        </ul>
    <!--{/if}-->
    <!--▲検索条件-->

    <!--▼ページナビ(本文)-->
    <!--{capture name=page_navi_body}-->
        <div class="pagenumber_area clearfix">
            <div class="change">
<!--{*            
                <!--{if $orderby != 'price'}-->
                    <a href="javascript:fnChangeOrderby('price');">価格順</a>
                <!--{else}-->
                    <strong>価格順</strong>
                <!--{/if}-->&nbsp;
*}-->                
                <!--{if $orderby != "date"}-->
                        <a href="javascript:fnChangeOrderby('date');">新着順</a>
                <!--{else}-->
                    <strong>新着順</strong>
                <!--{/if}-->
                表示件数
                <select name="disp_number" onchange="javascript:fnChangeDispNumber(this.value);">
                    <!--{foreach from=$arrPRODUCTLISTMAX item="dispnum" key="num"}-->
                        <!--{if $num == $disp_number}-->
                            <option value="<!--{$num}-->" selected="selected" ><!--{$dispnum}--></option>
                        <!--{else}-->
                            <option value="<!--{$num}-->" ><!--{$dispnum}--></option>
                        <!--{/if}-->
                    <!--{/foreach}-->
                </select>
            </div>
            <div class="navi"><!--{$tpl_strnavi}--></div>
        </div>
    <!--{/capture}-->
    <!--▲ページナビ(本文)-->

    <!--{foreach from=$arrProducts item=arrProduct name=arrProducts}-->

        <!--{if $smarty.foreach.arrProducts.first}-->
            <!--▼件数-->
            <div>
                <span class="attention"><!--{$tpl_linemax}-->件</span>あります。
            </div>
            <!--▲件数-->

            <!--▼ページナビ(上部)-->
            <form name="page_navi_top" id="page_navi_top" action="?">
                <input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
                <!--{if $tpl_linemax > 0}--><!--{$smarty.capture.page_navi_body|smarty:nodefaults}--><!--{/if}-->
            </form>
            <!--▲ページナビ(上部)-->
        <!--{/if}-->

        <!--{assign var=id value=$arrProduct.product_id}-->
        <!--{assign var=arrErr value=$arrProduct.arrErr}-->
        <!--▼商品-->
        <form name="product_form<!--{$id|h}-->" action="?" onsubmit="return false;">
        <input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
        <div class="list_area clearfix">
            <a name="product<!--{$id|h}-->"></a>
<!--{*            
            <div class="listphoto">
                <!--★画像★-->
                <a href="<!--{$smarty.const.P_DETAIL_URLPATH}--><!--{$arrProduct.product_id|u}-->" class="over"><!--商品写真--><img src="<!--{$smarty.const.IMAGE_SAVE_URLPATH|sfTrimURL}-->/<!--{$arrProduct.main_list_image|sfNoImageMainList|h}-->" alt="<!--{$arrProduct.name|h}-->" class="picture" /></a>
            </div>
*}-->
            <div class="listrightbloc" style="float:left; width:100%;">
                <!--▼商品ステータス-->
                <!--{if count($productStatus[$id]) > 0}-->
                    <ul class="status_icon clearfix">
                        <!--{foreach from=$productStatus[$id] item=status}--> 
                            <li>
                                <img src="<!--{$TPL_URLPATH}--><!--{$arrSTATUS_IMAGE[$status]}-->" width="60" height="17" alt="<!--{$arrSTATUS[$status]}-->" />
                            </li>
                        <!--{/foreach}-->
                    </ul>
                <!--{/if}-->
                <!--▲商品ステータス-->

                <!--★商品名★-->
                <h3>
<!--{if 0}-->
                    <a href="<!--{$smarty.const.P_DETAIL_URLPATH}--><!--{$arrProduct.product_id|u}-->"><!--{$arrProduct.name|h}--></a>
<!--{/if}-->
                    <img src="/user_data/packages/simple/img/icon/ico_arrow_03.gif">&nbsp;<a href="<!--{$smarty.const.P_DETAIL_URLPATH}--><!--{$arrProduct.product_id|u}-->"><!--{$arrProduct.name|replace:"の通過したES（エントリーシート）":"のES"}--></a>
                </h3>
                <!--★価格★-->
<!--{*                
                <div class="pricebox sale_price">
                    <!--{$smarty.const.SALE_PRICE_TITLE}-->(税込)：
                    <span class="price">
                        <span id="price02_default_<!--{$id}-->">
                            <!--{if $arrProduct.price02_min == $arrProduct.price02_max}-->
                                <!--{$arrProduct.price02_min|sfCalcIncTax:$arrSiteInfo.tax:$arrSiteInfo.tax_rule|number_format}-->
                            <!--{else}-->
                                <!--{$arrProduct.price02_min|sfCalcIncTax:$arrSiteInfo.tax:$arrSiteInfo.tax_rule|number_format}-->～<!--{$arrProduct.price02_max|sfCalcIncTax:$arrSiteInfo.tax:$arrSiteInfo.tax_rule|number_format}-->
                            <!--{/if}-->
                        </span><span id="price02_dynamic_<!--{$id}-->"></span>
                        円</span>
                </div>
*}-->
                <!--★コメント★-->
                <div class="listcomment">
<!--{if 0}-->
                	<a href="<!--{$smarty.const.P_DETAIL_URLPATH}--><!--{$arrProduct.product_id|u}-->"><!--{$arrProduct.main_list_comment|h|nl2br}--></a>
<!--{/if}-->
                	<!--{$arrProduct.main_list_comment|h|nl2br}-->
                </div>

                <!--★商品詳細を見る★-->
<!--{*                
                <div class="detail_btn">
                    <!--{assign var=name value="detail`$id`"}-->
                    <a href="<!--{$smarty.const.P_DETAIL_URLPATH}--><!--{$arrProduct.product_id|u}-->" onmouseover="chgImg('<!--{$TPL_URLPATH}-->img/button/btn_detail_on.jpg','<!--{$name}-->');" onmouseout="chgImg('<!--{$TPL_URLPATH}-->img/button/btn_detail.jpg','<!--{$name}-->');">
                    <img src="<!--{$TPL_URLPATH}-->img/button/btn_detail.jpg" alt="商品詳細を見る" name="<!--{$name}-->" id="<!--{$name}-->" /></a>
                </div>
*}-->
                <!--▼買い物かご-->
                <input type="hidden" name="product_id" value="<!--{$id|h}-->" />
                <input type="hidden" name="product_class_id" id="product_class_id<!--{$id|h}-->" value="<!--{$tpl_product_class_id[$id]}-->" />
<!--{*
                <div class="cart_area clearfix">
                    <!--{if $tpl_stock_find[$id]}-->
                        <!--{if $tpl_classcat_find1[$id]}-->
                            <div class="classlist">
                                <dl class="size01 clearfix">
                                        <!--▼規格1-->
                                        <dt><!--{$tpl_class_name1[$id]|h}-->：</dt>
                                        <dd>
                                            <select name="classcategory_id1" style="<!--{$arrErr.classcategory_id1|sfGetErrorColor}-->">
                                                <!--{html_options options=$arrClassCat1[$id] selected=$arrProduct.classcategory_id1}-->
                                            </select>
                                            <!--{if $arrErr.classcategory_id1 != ""}-->
                                                <p class="attention">※ <!--{$tpl_class_name1[$id]}-->を入力して下さい。</p>
                                            <!--{/if}-->
                                        </dd>
                                        <!--▲規格1-->
                                </dl>
                                <!--{if $tpl_classcat_find2[$id]}-->
                                    <dl class="size02 clearfix">
                                        <!--▼規格2-->
                                        <dt><!--{$tpl_class_name2[$id]|h}-->：</dt>
                                        <dd>
                                            <select name="classcategory_id2" style="<!--{$arrErr.classcategory_id2|sfGetErrorColor}-->">
                                            </select>
                                            <!--{if $arrErr.classcategory_id2 != ""}-->
                                                <p class="attention">※ <!--{$tpl_class_name2[$id]}-->を入力して下さい。</p>
                                            <!--{/if}-->
                                        </dd>
                                        <!--▲規格2-->
                                    </dl>
                                <!--{/if}-->
                            </div>
                        <!--{/if}-->
                        <div class="cartin clearfix">
                            <div class="quantity">
                                数量：<input type="text" name="quantity" class="box" value="<!--{$arrProduct.quantity|default:1|h}-->" maxlength="<!--{$smarty.const.INT_LEN}-->" style="<!--{$arrErr.quantity|sfGetErrorColor}-->" />
                                <!--{if $arrErr.quantity != ""}-->
                                    <br /><span class="attention"><!--{$arrErr.quantity}--></span>
                                <!--{/if}-->
                            </div>
                            <div class="cartin_btn">
                                <!--★カゴに入れる★-->
                                <div id="cartbtn_default_<!--{$id}-->">
                                    <input type="image" id="cart<!--{$id}-->" src="<!--{$TPL_URLPATH}-->img/button/btn_cartin.jpg" alt="カゴに入れる" onclick="fnInCart(this.form); return false;" onmouseover="chgImg('<!--{$TPL_URLPATH}-->img/button/btn_cartin_on.jpg', this);" onmouseout="chgImg('<!--{$TPL_URLPATH}-->img/button/btn_cartin.jpg', this);" />
                                </div>
                                <div class="attention" id="cartbtn_dynamic_<!--{$id}-->"></div>
                            </div>
                        </div>
                    <!--{else}-->
                        <div class="cartbtn attention">申し訳ございませんが、只今品切れ中です。</div>
                    <!--{/if}-->
                </div>
*}-->                
                <!--▲買い物かご-->
            </div>
        </div>
        </form>
        <!--▲商品-->

        <!--{if $smarty.foreach.arrProducts.last}-->
            <!--▼ページナビ(下部)-->
            <form name="page_navi_bottom" id="page_navi_bottom" action="?">
                <input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
                <!--{if $tpl_linemax > 0}--><!--{$smarty.capture.page_navi_body|smarty:nodefaults}--><!--{/if}-->
            </form>
            <!--▲ページナビ(下部)-->
        <!--{/if}-->

    <!--{foreachelse}-->
        <!--{include file="frontparts/search_zero.tpl"}-->
    <!--{/foreach}-->

</div>
<!--▲CONTENTS-->