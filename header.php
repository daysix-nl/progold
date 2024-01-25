<?php 
/**
 * The template for displaying the header
 * 
 * @package Day Six theme
 */
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3KWVBTRCXB"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-3KWVBTRCXB');
</script>
<body <?php body_class( 'page-block bg-body relative' ); ?>>
<header class="z-[999] relative">
<div class="container flex justify-between pt-5">
    <a href="/" class="h-[58.5px]">
        <?php include get_template_directory() . '/img/icon/logo.php'; ?>
    </a>
    <div class="lg:flex hidden">
            <a href="/" class="mr-[30px] text-white font-light">Home</a>
            <a href="/#faq" class="mr-[30px] text-white font-light">Veelgestelde vragen</a>
            <a href="/actievoorwaarden" class="text-white font-light">Actievoorwaarden</a>
        </div>
</div>

</header>
