<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
<link href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/assets/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet">
<!--[if lt IE 9]>
<script src="<?php bloginfo('template_url'); ?>/assets/js/html5shiv.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/respond.min.js"></script>
<![endif]-->
<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/bootstrap.min.js"></script>
</head>
<body <?php body_class(); ?>>
