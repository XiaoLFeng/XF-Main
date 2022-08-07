<?php 
/*
 * XF-Main 个人主页
 * 由筱锋个人开发，依据作者所需进行开发
 * 禁止商用！
 * 尊重作者的权益
 */

// 载入组件
include('./module/head-check.php');

// 页面ID
$menu_id = 1;
?>
<!doctype html>
<html lang="zh">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?PHP echo $normal['data']['web_title']['vaule']; ?> | <?PHP echo $normal['data']['web_subtitle']['vaule']; ?></title>
        <meta name="keywords" content="<?PHP echo $normal['data']['web_keywords']['vaule']; ?>">
        <meta name="description" content="<?PHP echo $normal['data']['web_subtitle']['vaule']; ?>">
        <link rel="shortcut icon" href="<?PHP echo $normal['data']['web_icon']['vaule']; ?>" type="image/x-icon">
        <!-- CSS -->
        <link href="<? echo mirrors(); ?>bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<? echo mirrors(); ?>bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    </head>
<body>
<!-- 菜单 -->
<header>
<?PHP include($_SERVER['DOCUMENT_ROOT'].'/module/header.php') ?>
</header>
<!-- 内容 -->
<div id="main" class="container placeholder-glow mt-5">
    <div class="row">
        <div class="col-9">
            <span class="placeholder col-8"></span>
            <span class="placeholder col-5"></span>
            <span class="placeholder col-8"></span>
            <span class="placeholder col-5"></span>
            <span class="placeholder col-8"></span>
            <span class="placeholder col-5"></span>
            <span class="placeholder col-8"></span>
            <span class="placeholder col-5"></span>
            <span class="placeholder col-8"></span>
            <span class="placeholder col-5"></span>
            <span class="placeholder col-8"></span>
            <span class="placeholder col-5"></span>
        </div>
        <div class="col-3">
            <span class="placeholder col-9"></span>
            <span class="placeholder col-5"></span>
            <span class="placeholder col-9"></span>
            <span class="placeholder col-5"></span>
            <span class="placeholder col-9"></span>
            <span class="placeholder col-5"></span>
        </div>
    </div>
</div>
<!-- 页尾 -->
<?PHP include($_SERVER['DOCUMENT_ROOT'].'/module/footer.php') ?>
</body>
<!-- JavaScript -->
<script src="<? echo mirrors(); ?>/static/js/bootstrap.min.js"></script>
<script src="<? echo mirrors(); ?>/jquery@3.2.1/dist/jquery.min.js"></script>
<script>
    $("#main").fadeOut();
    setTimeout(function(){$.ajax({url:"/components/main.php",async:true,success:function(result) {
			$("#main").html(result).fadeIn(500);
		}})}, 500);
</script>
</html>
