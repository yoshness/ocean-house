<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta property="og:type" content="website" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<link rel="profile" href="https://gmpg.org/xfn/11">
		
		<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/style.css?v=06">

		<title>Ocean House</title>

		<link rel="shortcut icon" type="image/x-icon" href="<?php echo IMAGE_URL; ?>favicon.ico"/>
		
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<?php get_template_part( 'template-parts/header'); ?>
		<?php get_template_part( 'template-parts/menu'); ?>