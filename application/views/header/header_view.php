<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>fileHolder - <?php echo $title; ?></title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="<?php echo URL ?>css/custom.css" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
	 
</head>
<body>

<div id="main-container">
	<div id="navigation">
		<div class="wraper">
			<a href="<?php echo URL; ?>"><div id="logo"><div id="logo_img"></div></div></a>
			<div id="search_section">
				<div id="search_icon"></div>
				<div id="search_form">
					<form method="get" action="">
						<input type="text" placeholder="Search files and folders ..." name="search" />
					</form>
				</div>
			</div>
			<div id="nav_user">
				<div id="nav_user_pic"><img src="<?php echo URL ?>img/nav_user_pic.png" /></div>
				<div id="nav_user_name"><span><?php echo $user_info["full_name"]; ?></span></div>
				<a href=""><div id="nav_user_arrow_down"></div></a>
			</div>
			<div class="cleared"></div>
		</div>
	</div>