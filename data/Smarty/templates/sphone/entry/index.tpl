<!--{*
 * This file is part of EC-CUBE
 *
 * Copyright(c) 2000-2013 LOCKON CO.,LTD. All Rights Reserved.
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

<section id="undercolumn">
<!--{*
    <h2 class="title"><!--{$tpl_title|h}--></h2>
    <div class="intro">
    	<p>お支払い方法に銀行振込を選択されますと、仮会員として登録されます。銀行振込を確認後に本会員としてログインが可能になります。<br/>
    	クレジットカード、Paypalでのお申込みの場合はすぐに本会員登録が行われ、内定バンクのコンテンツをご覧いただけます。</p>
 *}-->
<h2 class="title">コンビニ決済</h2>
<div>
【コンビニ決済】を希望の方は、このページではなく<a href="https://kaisyanavi.stores.jp/#!/items/52da527b236a1e3abf000526">リンク先のサイト</a>で手続きして下さい。<br>
この先、内定バンクでの登録は不要です、下のリンク先で買い物をしメールの指示に従って下さい。<br>
&gt;&gt; <a href="https://kaisyanavi.stores.jp/#!/items/52da527b236a1e3abf000526">コンビニ決済 (stores.jp)</a><br>
&nbsp;<br>
お急ぎの方は「クレジットカードまたはPaypal」での決済が一番早く利用できます。<br>
&nbsp;<br>
</div>

    <h2 class="title">カード、Paypal、銀行振込</h2>
    <div class="intro">
        <p style="font-size:90%;"><span class="attention">iPhone</span>をお使いの方は標準ブラウザでご登録ください。</p>
        <p style="font-size:90%;"><span class="attention">※</span>は必須入力項目</p>
    </div>

    <form name="form1" id="form1" method="post" action="?">
        <input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
        <input type="hidden" name="mode" value="confirm" />

        <dl class="form_entry">
            <!--{include file="`$smarty.const.SMARTPHONE_TEMPLATE_REALDIR`frontparts/form_personal_input.tpl" flgFields=4 emailMobile=false prefix=""}-->
        </dl>

        <div class="btn_area">
            <p><input type="submit" value="確認ページへ" class="btn data-role-none" alt="確認ページへ" name="confirm" id="confirm" /></p>
        </div>

        <div style="margin:10px;">
          <p><span class="attention">カードまたはPaypalは即時</span>、利用できるようになります。</p>
          <p>銀行振込を選択した場合は仮会員として登録され、振込を確認後に本会員となります。</p>
          <p><span class="attention">コンビニ決済</span>を希望の方は、<a href="https://kaisyanavi.stores.jp/#!/items/52da527b236a1e3abf000526">こちらのサイト</a>で手続きをお願いします。<p>
        </div>
    </form>
</section>

<!--▼検索バー -->
<section id="search_area">
    <form method="get" action="<!--{$smarty.const.ROOT_URLPATH}-->products/list.php">
        <input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
        <input type="hidden" name="mode" value="search" />
        <input type="search" name="name" id="search" value="" placeholder="キーワードを入力" class="searchbox" >
    </form>
</section>
<!--▲検索バー -->