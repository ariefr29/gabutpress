<!DOCTYPE html>
<?php $dark = (get_option('set_theme_mode') == 'dark') ? 'dark' : ''; ?>
<html <?php language_attributes(); ?> class="scroll-smooth <?php echo $dark; ?>">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"> 
  <?php wp_head(); ?>
</head>

<body class="font-poppins dark:bg-slate-800 dark:text-gray-300">
<?php get_template_part( 'template-parts/navbar/nav' ) ?>