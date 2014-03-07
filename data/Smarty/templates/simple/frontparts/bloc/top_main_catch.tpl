<!--{if $tpl_login}-->
<!-- ログイン中 は何も表示しない -->
<!--{else}-->
<!-- ログアウト中 は 説明文表示 -->
<div style="margin:5px;color:#003;">
  <ul>
  <li>ES、じぶんで書くから良いと思ってない？</li>
  <li>内定を獲得した先輩がどう書いたか、気にならない？</li>
  <li>OB訪問や面接回数などを事前に知りたくない？</li>
  </ul>
  <br>
  会社なびには人気企業から優良企業まで、圧倒的な量のESと体験談があります！<br>
  事前に知っていると知らないでは大違い！<br>
  <div>
  <br>
  <p><a rel="external" href="<!--{$smarty.const.HTTPS_URL|sfTrimURL}-->/entry/kiyaku.php" class="btn_btm" style="padding:5px;border:1px solid #333;">会社なび/内定バンクに登録して先輩の情報を見る</a></p>
  <br>
  ※ <span style="color:red;">登録には年会費3,150円が必要です</span>
  </div>
</div>
<!--{/if}-->