<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ilistrator</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
  <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script> -->
</head>

<?php
  if(is_front_page()):
    $ilistrator_classes = array('ilistrator-class', 'my-class');
  else:
    $ilistrator_classes = array('no-ilistrator-class');
  endif;
?>

<body <?php body_class($ilistrator_classes); ?>>
  <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
    
