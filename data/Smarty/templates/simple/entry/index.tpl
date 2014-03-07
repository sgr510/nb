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
<!--▼CONTENTS-->
<div id="undercolumn">
    <div id="undercolumn_entry">

<h2 class="title">コンビニ決済</h2>
<div>
【コンビニ決済】を希望の方は、このページではなく<a href="https://kaisyanavi.stores.jp/#!/items/52da527b236a1e3abf000526">リンク先のサイト</a>で手続きをお願いします。<br>
この先、内定バンクでの登録は不要です、下のリンク先で買い物をし、メールの指示に従って下さい。<br>
&gt;&gt; <a href="https://kaisyanavi.stores.jp/#!/items/52da527b236a1e3abf000526">コンビニ決済 (stores.jp)</a><br>
&nbsp;<br>
お急ぎの方は「クレジットカードまたはPaypal」での決済が一番早く、即利用できるようになります。<br>
&nbsp;<br>
</div>
<!--{*
        <h2 class="title"><!--{$tpl_title|h}--></h2>
        <!--{if $smarty.const.CUSTOMER_CONFIRM_MAIL}-->
            <p>お支払い方法に銀行振込を選択されますと、仮会員として登録されます。銀行振込を確認後に本会員としてログインが可能になります。<br />
                クレジットカード、Paypalでのお申込みの場合はすぐに本会員登録が行われ、内定バンクのコンテンツをご覧いただけます。</p>
        <!--{/if}-->
 *}-->
        <h2 class="title">クレジットカード、Paypal、銀行振込</h2>
        <form name="form1" id="form1" method="post" action="?">
            <input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
            <input type="hidden" name="mode" value="confirm" />

            <table summary="会員登録フォーム">
            <!--{*<!--{include file="`$smarty.const.TEMPLATE_REALDIR`frontparts/form_personal_input.tpl" flgFields=3 emailMobile=false prefix=""}-->*}-->
            <!--{include file="`$smarty.const.TEMPLATE_REALDIR`frontparts/form_personal_input.tpl" flgFields=4 emailMobile=false prefix=""}-->
            </table>

            <div class="btn_area">
                <ul>
                    <li>
                        <input type="image" onmouseover="chgImgImageSubmit('<!--{$TPL_URLPATH}-->img/button/btn_confirm_on.jpg',this)" onmouseout="chgImgImageSubmit('<!--{$TPL_URLPATH}-->img/button/btn_confirm.jpg',this)" src="<!--{$TPL_URLPATH}-->img/button/btn_confirm.jpg" alt="確認ページへ" name="confirm" id="confirm" />
                    </li>
                </ul>
            </div>

        <div style="margin:10px;">
          <p><span class="attention">カードまたはPaypalは即時</span>、利用できるようになります。</p>
          <p>銀行振込を選択した場合は仮会員として登録され、振込を確認後に本会員となります。</p>
          <p><span class="attention">コンビニ決済</span>を希望の方は、<a href="https://kaisyanavi.stores.jp/#!/items/52da527b236a1e3abf000526">こちらのサイト</a>で手続きをお願いします。<p>
        </div>
        </form>
    </div>
</div>
<!--▲CONTENTS-->
