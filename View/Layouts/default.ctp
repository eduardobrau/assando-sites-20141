<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simplex Eventos</title>
    <meta name="description" content="Simplex theme is free template based on Bootstrap version 3.0.0 and it can be used for any purpose.">
    <meta name="author" content="">
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <?php echo $this->Html->css('bootstrap.min.css'); ?>
    <!-- <link href="css/templatemo_justified.css" rel="stylesheet"> -->
    <?php echo $this->Html->css('templatemo_justified.css'); ?>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]--> 
   
  </head>

  <body>

    <div id="container" class="container">
        <!--
        <a href="http://www.templatemo.com/preview/templatemo_382_simplex" rel="nofollow"><img src="images/templatemo_header.jpg" alt="Simplex Header" class="img-responsive" /></a>
        <a href="http://pt.hdstockphoto.com" title="Estoque de HD Photo from pt.hdstockphoto.com" rel="nofollow" class="container_bg" target="_blank"></a>
        -->
        <?php 
        echo $this->Html->link(	$this->Html->image('templatemo_header.jpg', array('alt' => 'Simplex Header', 'class' => 'img-responsive')),
                                    'http://www.templatemo.com/preview/templatemo_382_simplex',
                                    array('target' => '_blank', 'escape' => false)
				);
	?>
        
        <!--
        <ul class="nav nav-justified">
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="products.html">Products</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="gallery.html">Gallery</a></li>
          <li><a href="about.html">About Us</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
        -->
        <ul class="nav nav-justified">
          <li class="active">
              <?php echo $this->Html->link('Home', '/'); ?>
          </li>
          <li>
              <?php echo $this->Html->link('Sobre Nós', array('controller' => 'pages', 'action' => 'display', 'sobre-o-evento')); ?>
          </li>
          <li>
              <?php echo $this->Html->link('Localização', array('controller' => 'pages', 'action' => 'display', 'local')); ?>
          </li>
          <li>
              <?php echo $this->Html->link('Contato', array('controller' => 'pages', 'action' => 'display', 'contato')); ?>
          </li>
        </ul>
     
        <div class="row space30"> <!-- row 1 begins -->
            
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->fetch('content'); ?>
       
      </div> <!-- /row 1 -->
      
      
      <!-- Site footer -->
      <div class="footer">
        <p>Copyright © 2072 Company Name | <a href="http://www.templatemo.com/preview/templatemo_382_simplex" rel="nofollow">Simplex</a> by <a href="http://www.templatemo.com/page/1" target="_parent" rel="nofollow">templatemo</a></p>
      </div>
