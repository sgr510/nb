<?php /* Smarty version 2.6.26, created on 2014-01-30 10:18:49
         compiled from /var/www/html/naitei-bank/html/../data/Smarty/templates/simple/frontparts/bloc/login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', '/var/www/html/naitei-bank/html/../data/Smarty/templates/simple/frontparts/bloc/login.tpl', 22, false),array('modifier', 'sfTrimURL', '/var/www/html/naitei-bank/html/../data/Smarty/templates/simple/frontparts/bloc/login.tpl', 89, false),array('modifier', 'h', '/var/www/html/naitei-bank/html/../data/Smarty/templates/simple/frontparts/bloc/login.tpl', 101, false),array('modifier', 'number_format', '/var/www/html/naitei-bank/html/../data/Smarty/templates/simple/frontparts/bloc/login.tpl', 113, false),array('modifier', 'default', '/var/www/html/naitei-bank/html/../data/Smarty/templates/simple/frontparts/bloc/login.tpl', 113, false),array('modifier', 'sfGetChecked', '/var/www/html/naitei-bank/html/../data/Smarty/templates/simple/frontparts/bloc/login.tpl', 128, false),)), $this); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['tpl_login'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
<!-- ログイン中 は何も表示しない -->
<?php else: ?>
<!-- ログアウト中 は 説明文表示 -->

<div class="landing-page-body">
<img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/landing-page/big-catch-01-students.jpg" class="landing-page"><br>
<div class="landing-page-t1">
会社なびには人気企業から優良企業まで、圧倒的な量のESと体験談があります！<br>
一度登録すれば、<span style="color:red;">先輩のES、内定体験談、就活の常識が</span><span style="color:red;font-weight:bold;">すべて見放題</span>です<br>
事前に知っていると知らないでは大違い！ 短期一発勝負です「あの時、ああしておけば...」と後悔しない就活を！<br>
</div>
&nbsp;<br>
&nbsp;<br>

<img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/landing-page/big-catch-02-interview.jpg" class="landing-page"><br>
<div class="landing-page-t1">
就活の最大の敵は「不安」です。<br>
人は<span style="color:red;font-weight:bold;">未知のものに対して大きく不安</span>を感じます。ゴールが見えない戦いは不安です。<br>
ならば<span style="color:red;">先輩たちの体験談</span>を聞いてみませんか？ これだけの情報量はここにしかない！<br>
&nbsp;<br>
会員登録すると利用できるコンテンツを紹介します！<br>
</div>

<img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/landing-page/title-01-taikendan.png" class="landing-page-title"><br>
<img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/landing-page/catch-01-taikendan.png" class="landing-page"><br>
<div class="landing-page-t1">
電通、三菱商事、ワコール、三井住友銀行、野村證券、JR東日本、パナソニック:技術、NTTデータ、ANA:客室乗務、リクルート、NTTドコモ:技術、中部電力、NTT西日本、アビームコンサル、三菱UFJモルスタ、コーエーテクモ...<br>
人気企業から内定を勝ち取った先輩達の「内定獲得体験談」です。<br>
選考は何があるのか、面接では何を聞かれるのか、何が決め手になって勝ち取ったのか、リアルの声が集まっています。<br>
</div>

<img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/landing-page/title-02-es.png" class="landing-page-title"><br>
<img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/landing-page/catch-02-es.png" class="landing-page"><br>
<div class="landing-page-t1">
選考を通過した、圧倒的な量の先輩のエントリーシート。<br>
内容が同じでも表現方法を変えるだけで見違えるようになるのが ES です。<br>
どれほどその企業に対して想いや熱意があっても、<span style="color:red;font-weight:bold;">ESで落ちたらそれを伝えるチャンスすらありません</span>！<br>
</div>


<img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/landing-page/title-03-mail-example.png" class="landing-page-title"><br>
<img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/landing-page/catch-03-mail-example.png" class="landing-page"><br>
<div class="landing-page-t1">
ここで差がつく！<br>
ESや面接対策をしない学生はいないのに、メールの書き方はテキトウという学生さんは本当に多いです。<br>
ところが人事は見ています、アナタは<span style="color:red;font-weight:bold;">自信を持ってメールを書けますか？</span><br>
</div>

<img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/landing-page/title-04-ebook.png" class="landing-page-title"><br>
<img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/landing-page/catch-04-ebook.png" class="landing-page"><br>
<div class="landing-page-t1">
「もう一度やればうまくいく」<br>
就活を終えたどの学生も同じことを言います、だけど、就活は人生一回限り。<br>
<span style="color:red;font-weight:bold;">後悔する前に知っておこう！</span>「就活の常識」、スマホでもタブレットでもパソコンでも、どこでも読める電子書籍です。<br>
</div>

<img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/landing-page/title-05-interview.png" class="landing-page-title"><br>
<img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/landing-page/catch-05-interview.png" class="landing-page"><br>
<div class="landing-page-t1">
マスコミ、商社、メーカー、商社、外資系…<br>
誰もが憧れる人気企業の人事の生の声を、就活生が聞いて来ました！<span style="color:red;font-weight:bold;">某就活サイトにはない情報</span>がここにある、就活生必見です。<br>
</div>

<br>
※ <span style="color:red;">登録には年会費が必要です</span><br>（自動更新にはならないのでご安心ください）
<img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/landing-page/title-06-special.png"><br>
<a href="<?php echo ((is_array($_tmp=((is_array($_tmp=@HTTPS_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfTrimURL', true, $_tmp) : SC_Utils_Ex::sfTrimURL($_tmp)); ?>
/entry/kiyaku.php"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/landing-page/big-special-takada.jpg"></a><br>

</div>

<?php endif; ?>

<div class="bloc_outer">
    <div id="login_area">
        <h2><span class="square">■</span>ログイン</h2>
        <form name="login_form" id="login_form" method="post" action="<?php echo ((is_array($_tmp=@HTTPS_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
frontparts/login_check.php" onsubmit="return fnCheckLogin('login_form')">
            <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
            <input type="hidden" name="mode" value="login" />
            <input type="hidden" name="url" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$_SERVER['PHP_SELF'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
            <div class="bloc_body">
                <?php if (((is_array($_tmp=$this->_tpl_vars['tpl_login'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                    <p>
                        <span class="user_name"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_name1'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
 <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_name2'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
 様</span>のアカウントでログイン中です<br />
                        気になる先輩のESや体験談は「お気に入り」に登録することができ、右上のMYページから確認できます<br />
                        <p style="margin:20px;"><a href="/mypage/login.php"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/button/btn_bloc_mypage.jpg" border="0"></a></p>
                        <?php if (((is_array($_tmp=@USE_POINT)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) !== false): ?>
                            所持ポイント：<span class="point"> <?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_user_point'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
 pt</span>
                        <?php endif; ?>
                    </p>
                    <?php if (! ((is_array($_tmp=$this->_tpl_vars['tpl_disable_logout'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                        <p class="btn">
                            <input type="image" onmouseover="chgImgImageSubmit('<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/button/btn_bloc_logout_on.jpg',this)" onmouseout="chgImgImageSubmit('<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/button/btn_bloc_logout.jpg',this)" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/button/btn_bloc_logout.jpg" onclick="fnFormModeSubmit('login_form', 'logout', '', ''); return false;" alt="ログアウト" />
                        </p>
                    <?php endif; ?>
                <?php else: ?>
                    <dl class="formlist">
                        <dt>メールアドレス</dt>
                        <dd>
                            <input type="text" name="login_email" class="box140" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_login_email'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" style="ime-mode: disabled;" />
                        </dd>
                        <dd class="mini">
                            <input type="checkbox" name="login_memory" id="login_memory" value="1" <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_login_memory'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetChecked', true, $_tmp, 1) : SC_Utils_Ex::sfGetChecked($_tmp, 1)); ?>
 />
                            <label for="login_memory"><span>コンピューターに記憶</span></label>
                        </dd>
                    </dl>
                    <dl class="formlist">
                        <dt class="password">パスワード</dt>
                        <dd><input type="password" name="login_pass" class="box140" /></dd>
                        <dd class="mini">
                        <a href="<?php echo ((is_array($_tmp=((is_array($_tmp=@HTTPS_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfTrimURL', true, $_tmp) : SC_Utils_Ex::sfTrimURL($_tmp)); ?>
/forgot/<?php echo ((is_array($_tmp=@DIR_INDEX_PATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" onclick="win01('<?php echo ((is_array($_tmp=((is_array($_tmp=@HTTPS_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfTrimURL', true, $_tmp) : SC_Utils_Ex::sfTrimURL($_tmp)); ?>
/forgot/<?php echo ((is_array($_tmp=@DIR_INDEX_PATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
','forget','600','400'); return false;" target="_blank">※ 忘れた方はこちら</a>
                        </dd>
                    </dl>

                    <p class="btn">
                        <input type="image" onmouseover="chgImgImageSubmit('<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/button/btn_bloc_login_on.jpg',this)" onmouseout="chgImgImageSubmit('<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/button/btn_bloc_login.jpg',this)" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/button/btn_bloc_login.jpg" alt="ログイン" />
                    </p>

                <?php endif; ?>
            </div>
        </form>
    </div>
</div>