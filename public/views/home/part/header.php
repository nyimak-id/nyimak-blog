<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="<?php if(isset($author)) { echo $author; } ?>">
    <link rel="icon" href="favicon.ico">
    <title><?php if(isset($title)) { echo $title; } ?></title>
    <link href="<?php print base_url() ?>assets/css/custom.css" rel="stylesheet">
    <link href="<?php print base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php print base_url() ?>assets/css/font-awesome/css/font-awesome.css" rel="stylesheet">
</head>
<body style="background: #FAFAFA;">

<nav class="navbar-tube navbar-fixed-top navbar-default" style="background-color: #ffffff;border-color: #ffffff;">
    <div class="container">
        <div class="navbar-header" style="margin-right: -15px;margin-left: -15px;">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" style="background: #d52f36;border-color: #d52f36;margin-top: 15px">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar" style="background-color: #ffffff;"></span>
                <span class="icon-bar" style="background-color: #ffffff;"></span>
                <span class="icon-bar" style="background-color: #ffffff;"></span>
            </button>
            <a class="tube-logo-navbar" href="<?php echo base_url() ?>">
                <img class="tube-logo" src="<?php print base_url() ?>assets/images/logo.png" alt=""/>
            </a>
            <span class="green-red" style="color: #d52f36; margin-right: 50px;"><strong> BLOG </strong></span>

        </div>

        <div id="navbar" class="navbar-collapse collapse">


            <ul class="nav  navbar-left navbar-nav" style="margin-top: 6px">
                <li class="active" ><a href="#">ARTICLES <span class="sr-only">(current)</span></a></li>
                <li ><a href="#">Link</a></li>
            </ul>

            <form class="navbar-form navbar-right" style="border-color: #ffffff;margin-top: 9px;">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" style="margin-top:6px;border-radius: 0px;-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.1);-moz-box-shadow: 0 1px 2px rgba(0,0,0,.1);box-shadow: 0 1px 2px rgba(0,0,0,.1);font-size: 15px;">
                    <span class="input-group-btn">
                <button type="submit" class="btn btn-default" style="margin-top:6px;border-radius: 0px;-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.1);-moz-box-shadow: 0 1px 2px rgba(0,0,0,.1);box-shadow: 0 1px 2px rgba(0,0,0,.1);background: #ddd;"><i class="fa fa-search"></i> Search</button>
              </span>
                </div>
            </form>

        </div>
    </div>
</nav>
<!-- Strat jumbotron-->
<div class="jumbotron " style="padding-top: 100px;padding-bottom:50px; background: url(<?php base_url(); ?>assets/images/bg-artikel.png) center center no-repeat #20231E;">
    <div class="container" style="text-align: center; color: white;">
        <h1>Hallo Para Nyimak!!!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-danger btn-lg " href="#" role="button">Learn more &raquo;</a></p>
    </div>
</div>
<!-- End jumbotron-->