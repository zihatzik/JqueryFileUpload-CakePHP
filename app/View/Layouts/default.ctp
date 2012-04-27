<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>jQueryFileUpload for CakePHP 2.1.x</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width">
	<style>
	body {
	  padding-top: 60px;
	  padding-bottom: 40px;
	}
	</style>
	<?php echo $this->Html->css('bootstrap.min') ?>
	<?php echo $this->Html->css('style') ?>
  <link rel="stylesheet" href="http://blueimp.github.com/cdn/css/bootstrap.min.css">

  <?php echo $this->Html->css('file_upload_style') ?>
  <link rel="stylesheet" href="http://blueimp.github.com/cdn/css/bootstrap-responsive.min.css">
  <!--[if lt IE 7]><link rel="stylesheet" href="http://blueimp.github.com/cdn/css/bootstrap-ie6.min.css"><![endif]-->
  <link rel="stylesheet" href="http://blueimp.github.com/Bootstrap-Image-Gallery/css/bootstrap-image-gallery.min.css">
  <?php echo $this->Html->css('jquery.fileupload-ui') ?>

</head>
<body>
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <?php echo $this->Html->link('jQueryFileUpload CakePHP',"/",array('class' => 'brand')) ?>
          <div class="nav-collapse">
            <ul class="nav">
              <?php if( AuthComponent::user('id') ) { ?>
              <li class="<?php echo $this->params->controller == 'users' && $this->action == 'home' ? 'active' : '';  ?>">
                <?php echo $this->Html->link('Home','/users/home') ?>
              </li>
              <?php } ?>
              <li class="<?php echo $this->action == 'register' ? 'active' : ''; ?>">
                <?php echo $this->Html->link('Register','/users/register') ?>
              </li>
              <li class="<?php echo $this->action == 'index' && $this->params->controller == 'uploads' ? 'active' : ''; ?>">
                <?php echo $this->Html->link('Upload files','/uploads/') ?>
              </li>
              
            </ul>
            <ul class="nav pull-right">
              <?php if( AuthComponent::user('id') ) { ?>
                <li><?php echo $this->Html->link('Logout','/users/logout') ?></li>
              <?php } ?>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container" role="main" id="main">

      <?php echo $this->Session->flash('auth');?>

      
    	<?php echo $this->fetch('content'); ?>

      <hr>

      <footer>
        <p>&copy; jQueryFileUpload CakePHP 2.1.x 2012</p>
      </footer>

    </div> <!-- /container -->


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<?php echo $this->Html->script('file_upload/vendor/jquery.ui.widget.js') ?>

<script src="http://blueimp.github.com/JavaScript-Templates/tmpl.min.js"></script>
<script src="http://blueimp.github.com/JavaScript-Load-Image/load-image.min.js"></script>
<script src="http://blueimp.github.com/JavaScript-Canvas-to-Blob/canvas-to-blob.min.js"></script>
<script src="http://blueimp.github.com/cdn/js/bootstrap.min.js"></script>
<script src="http://blueimp.github.com/Bootstrap-Image-Gallery/js/bootstrap-image-gallery.min.js"></script>

<?php echo $this->Html->script('file_upload/jquery.iframe-transport.js') ?>
<?php echo $this->Html->script('file_upload/jquery.fileupload.js') ?>
<?php echo $this->Html->script('file_upload/jquery.fileupload-fp.js') ?>
<?php echo $this->Html->script('file_upload/jquery.fileupload-ui.js') ?>
<?php echo $this->Html->script('file_upload/locale.js') ?>
<?php echo $this->Html->script('file_upload/main.js') ?>


<script>
	var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

</body>
</html>
