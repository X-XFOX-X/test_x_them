<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
<?php
if ( is_singular() ) {
    echo get_the_title() . ' | ' . get_bloginfo('name');
} else {
    bloginfo('name');
}
?>
</title>

    <link rel="icon" href="<?= get_template_directory_uri()?>/assets/images/favicon.png">
    <link rel="apple-touch-icon" href="<?= get_template_directory_uri()?>/assets/images/favicon.png">
    <link rel="stylesheet"  href="<?= get_template_directory_uri()?>/assets/css/all.min.css"> 
    <link rel="stylesheet"  href="<?= get_template_directory_uri()?>/assets/css/bootstrap.min.css"> 
    <link rel="stylesheet"  href="<?= get_template_directory_uri()?>/assets/css/nice-select.css"> 
    <link rel="stylesheet"  href="<?= get_template_directory_uri()?>/assets/css/meanmenu.css"> 
    <link rel="stylesheet"  href="<?= get_template_directory_uri()?>/assets/css/swiper-bundle.min.css"> 
    <link rel="stylesheet"  href="<?= get_template_directory_uri()?>/assets/css/animate.min.css"> 
    <link rel="stylesheet"  href="<?= get_template_directory_uri()?>/assets/css/magnific-popup.css"> 
    <link rel="stylesheet"  href="<?= get_template_directory_uri()?>/assets/css/main.css">  

</head>

<body <?php body_class() ?> >
    
<?php get_template_part("templates/index_header") ?>
