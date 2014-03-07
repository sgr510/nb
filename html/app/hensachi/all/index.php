<!DOCTYPE html>
<html lang="ja-JP">
<head>
<meta charset="utf-8">
<meta name="robots" content="noindex">
<title>就活偏差値診断｜会社なび/就職活動</title>
<meta name="viewport" content="width=device-width, user-scalable=yes, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<!-- CSS -->
<link rel="stylesheet" href="https://sk-media.kaisyanavi.jp/common/css/style.css">
<link rel="stylesheet" href="https://sk-media.kaisyanavi.jp/student/core/css/style.css">
<link rel="stylesheet" type="text/css" href="css/jquery.sidr.dark.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />

<!-- Javascript -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.sidr.min.js"></script>
<script>
$(document).ready(function() {
$('#menu').sidr();
});
</script>

<script>
$(document).ready(function(){
// hide #back-top first
$("#back-top").hide();  
// fade in #back-top
$(function () {
$(window).scroll(function () {
if ($(this).scrollTop() > 100) {
$('#back-top').fadeIn();
} else {
$('#back-top').fadeOut();
}
});
// scroll body to 0px on click
$('#back-top a').click(function () {
$('body,html').animate({
scrollTop: 0
}, 600);
return false;
});
});
});
</script>

</head>
<body style="*margin-top: 80px;">
<a name="topofpage"></a>
<!-- Header Navigation
================================================== -->
<header> <nav>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="brand" href="https://sk.kaisyanavi.jp/">
      <h1>会社なび/就職活動</h1>
      </a> </div>
  </div>
  <!-- /.navbar-inner -->
</div>
<!-- /.navbar -->
</nav> </header>

<?php
	$category = $_GET['c'];
	$category = htmlspecialchars($category);
?>

<div class="container content-wrapper" id="interview">
  <div class="row">
    <div class="span12">
      <!-- Left Navigation
      ================================================== -->
      <div class="row">
        <!-- Content Wrapper
        ================================================== -->
        <div class="span12 right-column-wrapper">
          <section>
          <div class="right-column">
            <!-- Content Title
              ================================================== -->
            <div class="right-column-header fixed" style="*margin-bottom: 10px;">
              <div class="row">
                <div class="span2">
<?php
	if(isset($category) && strlen($category) > 0 ){
                  echo '<div><a href="#sidr" id="menu" class="btn btn-small mtb15" style="margin-top:5px;"><i class="icon-arrow-left"></i> 業種を選択</a></div>';
}
?>
                </div>
              </div>
            </div>
            <!-- /.right-column-header -->
            <!-- Content
              ================================================== -->
            <div class="right-column-content">

<?php
	if(isset($category) && strlen($category) > 0 ){
// 業種を選択した際のページ
echo '	<div style="margin-bottom:20px;"><a href="http://naitei-bank.jp/"><img src="img/bnr_for_naitei-bank_350x110.png"></a></div>';
//GET値を元に中身読み込み
include "category/category-" . $category . ".php";

echo '	<hr style="margin:40px 0px 0px 0px;">';
echo '	<p style="color:#F66;">※ データはインターネットや会社なびの情報を元に作成したものであり、正確性や結果に関しては保証できかねます。あくまで参考程度に。</p>';
echo '	<div style="margin:40px 0px 40px 20px;">';
echo '	<p id="back-top">';
echo '	<a href="#top"><span>[このページの一番上に戻る]</span></a>';
echo '	</p>';
echo '	<a href="http://naitei-bank.jp/app/hensachi/all/"><span>[就活偏差値の最初に戻る]</span></a>';
echo '	</div>';
echo '	<div style="margin-bottom:20px;"><a href="http://naitei-bank.jp/"><img src="img/bnr_for_naitei-bank_350x110.png"></a></div>';

	}
	else{
// 業種を未選択（つまりトップ）ページ
include "include-top.html";
}
?>

            </div>
            <!-- /.right-column-content -->
          </div>
          <!-- /.right-column -->
          </section>
        </div>
        <!-- /.span9 -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="span12">
          <!-- Footer
          ================================================== -->
          <footer>
          <div class="footer-wrapper">
            <address>
            会社なび/就職活動 &copy;
            </address>
<!--
            <ul class="unstyled ul-horizontal float-right">
              <li><a href="http://s-cubism.jp/company/about_our_company.html" title="運営会社" target="_blank">運営会社</a></li>
              <li><a href="http://sk.kaisyanavi.jp/page/tos-enterprise/" title="利用規約">利用規約</a></li>
              <li><a href="http://www.s-cubism.jp/policy.html" title="プライバシーポリシー" target="_blank">プライバシーポリシー</a></li>
              <li><a href="https://sk.kaisyanavi.jp/contact_us/" title="お問合せ">お問合せ</a></li>
            </ul>
-->
          </div>
          </footer>
        </div>
        <!-- /.span12 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.span12 -->
  </div>
  <!-- /.row -->
</div>
<!-- /.container -->

<?php include "menu.php" ?>

</body>
</html>
