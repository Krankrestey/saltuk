	<html>
	<head>
		<link rel="shortcut icon" href="/~saltuk/favicon.ico" type="image/x-icon">
		<meta charset="utf-8">
		<script type="text/javascript" src="fancybox/jquery-1.9.0.min.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
 
        var $menu = $("#menu");
 
        $(window).scroll(function(){
            if ( $(this).scrollTop() > 118 && $menu.hasClass("default") ){
                $menu.removeClass("default").addClass("fixed");
            } else if($(this).scrollTop() <= 118 && $menu.hasClass("fixed")) {
                $menu.removeClass("fixed").addClass("default");
            }
        });
		});
		</script>
		<style>
			body{padding: 0; margin:0 } 
			@font-face {
  			  font-family: Segoeu UI;
  			  src: url(fonts/segoeuil.ttf);
			 }
			h1,h4 {
				font-family: Segoeu UI, 'Segoeu UL Light';
				color: #0664F1;
				font-weight: 1000;
				font-size: 17;
				line-height: 0;
			}
			h1{font-size: 50; font-weight: 300; line-height: 0.5}
			#menu {
				z-index:2;
				position:absolute;
				width: 100%;
				text-align: center;
				line-height: 32px;
				background: #1E9AB0;
			}
			  #menu ul {
				padding:0;
				margin:0;
			  }
			  #menu li{
				font-family: Segoeu UI, 'Segoeu UL Light';
				color:#fff;
				font-weight: bolder;
			    cursor:pointer;
				padding-right:4%;
				padding-left:4%;
				display: inline-block;
				list-style:none;
				margin:0;
				height:33px;
			  }
			  #menu li:hover{
				background: #fff;
				color: #1E9AB0;
				
	  		 }
			 #menu.default {
			 top:118px;
			 left:0;
			}
			#menu.fixed {
				position:fixed;
				top:0; left:0;
			}
		</style>
		<style type="text/css">
			p{
			text-align: center;
			}
			.block,.el,.comment {
			font-family: "Segoe UI", "Helvetica Neue", Helvetica, sans-serif;
			position: relative;
			width: 60%;
			min-width: 700px;
			overflow: hidden;
			background: #ffffff;
			margin: 0 auto;
			margin-top: 20px;
			border: solid 1px #cccccc;
			border-radius:10px; 
			-webkit-border-radius:10px; 
			-moz-border-radius:10px; 
			-khtml-border-radius: 10px;
			}
			.block{
			height:300;
			}
			.el{
			min-width:0;
			}
			.fulln{
			position:absolute;
			line-height:28px;
			font-family: "Segoe UI", "Helvetica Neue", Helvetica, sans-serif;
			color: #FFF;
			width:386px;
			background: url(images/line.png); 
			-webkit-border-radius:0 0 0 10px; 
			-khtml-border-radius: 0 0 0 10px;
			-o-border-radius:0 0 0 10px;
			left:0;
			bottom:0; 
			padding: 0 0 0 14px;
			}
			.button
			{
			background-color: #3db6cd;
			color: #fff;
			display: block;
			margin: 0 auto;
			padding: 4px 0;	
			min-width:150px;
			}
			input{
			font-family: "Varela Round", Arial, Helvetica, sans-serif;
			font-weight: 500;
			font-size:17px;
			border: 1px solid #3db6cd;
			-webkit-border-radius: 4px;
			-moz-border-radius: 4px;
			border-radius: 4px;
			background-color: #eee;
			color: #777;
			padding: 4px 10px;
			width: 328px;
			-webkit-appearance: none;	
			font-family: "Segoe UI", "Helvetica Neue", Helvetica, sans-serif;
			}
			.commenttext,.helper{
			display: inline-block;
			vertical-align: middle;
			}
			.commenttext{
			padding-left: 180px;
			padding-right: 15px;
			font-size: 17px;
			}
			.helper{
			height:100%;
			width:0;
			}
			.newim, .avatar, .avatarcom{
			width: 400;
			height: 300;
			margin-left: 0;
			float: left;
			padding-right: 25;
			}
			.avatar{
			width:300;
			}
			.avatarcom{
			position:absolute;
			width:150px;
			height:150px;
			}
			.zagolovok,.content,.zagolovokn{
			font-family: "Segoe UI", "Helvetica Neue", Helvetica, Tahoma, Arial;
			font-size: 25;
			text-align: justify;
			color: black;
			padding-right: 25px;
			margin-bottom: 0;
			margin-top: 10;
			float:bottom;
			} 
			.zagolovok
			{
			-moz-column-gap: 35px;
			-webkit-column-gap: 35px;
			columh-gap: 35px;
			-webkit-column-width: 10000px;
			-moz-column-width: 10000px;
			column-width: 10000px;
			max-height:60px;
			overflow: hidden;
			font-weight:bold;
			text-align:left;
			line-height: 1.2;
			}
			.zagolovokn
			{
			font-size: 30px;;
			font-weight:bold;
			text-align:left;
			line-height: 1.2;
			marginn:0;
			margin-top:-15px;
			}
			.mask{
			position:absolute;
			right:25px;
			bottom:0px;
			height: 23px;
			width: 145px;
			background: -webkit-linear-gradient(left, rgba(255,255,255,0.2),rgba(255,255,255,0.7), rgba(255,255,255,1));
			background: -moz-linear-gradient(left, rgba(255,255,255,0.2),rgba(255,255,255,0.7), rgba(255,255,255,1));
			background: linear-gradient(to right, rgba(255,255,255,0.2),rgba(255,255,255,0.7), rgba(255,255,255,1));
			}
			.content{
			position: relative;
			-moz-column-gap: 35px;
			-webkit-column-gap: 35px;
			column-gap: 35px;
			font-size: 15;
			-webkit-column-width: 10000px;
			-moz-column-width: 10000px;
			column-width: 10000px;
			height: 200px;
			}
		</style>	
		<!--<script src='https://www.google.com/recaptcha/api.js'></script>-->
        </head>
	<body style="height:100%;" link="ffffff" vlink="#ffffff"  alink="#ffffff" bgcolor="ffffff" background="images/fon.jpg">
		<style href>a {text-decoration: none} </style>
		<div style="width:100%; min-height:100%; height:auto !important;">
		<table  border="0" cellpadding="0" cellspacing="0" width=100% height=150px>
			<tr><td colspan="2" background="images/header.jpg">
					<h1 align="center"><br>Добро пожаловать</h1>
					<h4 align="center"><?php 
						$base_c="base_c";
						$base_c=file($base_c);
						foreach($base_c as $value){
							$infile=explode("|",$value);
							if (md5($_COOKIE['hash'])==$infile[0]){
								$login=$infile[1];
								echo $infile[1]; if ($infile[1]=="admin") {$isadmin=1; echo'<a href="make_new.php" style="color: #0664F1"> [Добавить новость] </a>';}; echo'<a href="logout.php?redirect='.$_SERVER['REQUEST_URI'].'" style="color: #0664F1"> [Выйти]</a>'; echo'<a href="lc.php" style="color: #0664F1"> [Личный кабинет]</a>'; $is=1;break;}}
	       						if($is!=1){echo '<font color="0664f1">Вы ещё не вошли</font> <a href="auth.php?redirect='.$_SERVER['REQUEST_URI'].'" style="color: #0664F1"> [Вход] </a>'; echo'<a href="reg.php" style="color: #0664F1"> [Регистрация]</a>';}?></h4></td>
			</tr>
			<tr height=32px>
			</tr>
		</table>
		<div id="menu" class="default">
		<ul>
		<li onClick="document.location='index.php'">Главная</li>
		<li onClick="document.location='talks.php'">Домашка</li>
		<li onClick="document.location='presentation.php'">Презентация</li>
		<li onClick="document.location='hobby.php'">Хобби</li>
		<li onClick="document.location='info.php'">О сайте</li>
		</ul>
		</div>
