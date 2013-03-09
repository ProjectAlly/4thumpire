<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<?php
	$cssFiles = array('bootstrap.min','bootstrap-responsive.min','fonts/fontawesome/font-awesome','main','fileuploads/file_upload_style','fileuploads/jquery.fileupload-ui');
	$jsFiles = array('vendor/jquery-1.8.3.min','vendor/bootstrap.min','plugins','main');
?>
<head>
	<head>
		<meta charset="utf-8">
	        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>
			<?php echo $title_for_layout; ?>
		</title>
		<meta name="description" content="">
		<meta name="author" content="hardik shah">
        <meta name="viewport" content="width=device-width">

		<!-- icons -->
		<?php
		    echo $this->Html->meta('icon');
		    echo $this->Html->meta(array('rel' => 'apple-touch-icon','href'=>$this->webroot.'theme/TwitterBootstrap/apple-touch-icon.png'));
		    echo $this->Html->meta(array('rel' => 'apple-touch-icon','href'=>$this->webroot.'theme/TwitterBootstrap/apple-touch-icon-72x72-precomposed.png',  'sizes'=>'72x72'));
		    echo $this->Html->meta(array('rel' => 'apple-touch-icon','href'=>$this->webroot.'theme/TwitterBootstrap/apple-touch-icon-114x114-precomposed.png',  'sizes'=>'114x114'));
		    echo $this->Html->meta(array('rel' => 'apple-touch-icon','href'=>$this->webroot.'theme/TwitterBootstrap/apple-touch-icon-144x144-precomposed.png',  'sizes'=>'144x144'));

			echo $this->fetch('meta');
			if(configure::read('App.settings.asset.compression')=='1'){
				$this->Combinator->add_libs('css',$cssFiles); 
				echo $this->Combinator->scripts('css');
			}else{
				echo $this->Html->css($cssFiles);
			}
		?>
			<!--[if IE 7]>
		<?php
				echo $this->Html->css('fonts/fontawesome/font-awesome-ie7');
		?>
			<![endif]-->
			<!--[if lt IE 9]>
		<?php
				echo $this->Html->css('pie-ie');
		?>
			<![endif]-->
		<?php
			
			echo $this->fetch('css');
			echo $this->fetch('script');
		?>
		<?php
			echo $this->Html->script('vendor/modernizr-2.6.2-respond-1.1.0.min');
		?>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
<style>
body {
	padding-left: 20px;
	padding-right: 20px;
}
</style>

  <link rel="stylesheet" href="<?php echo Router::url('/', true) ?>file_upload/css/file_upload_style.css">
  <!--[if lt IE 7]><link rel="stylesheet" href="http://blueimp.github.com/cdn/css/bootstrap-ie6.min.css"><![endif]-->
  <link rel="stylesheet" href="http://blueimp.github.com/Bootstrap-Image-Gallery/css/bootstrap-image-gallery.min.css">
  <link rel="stylesheet" href="<?php echo Router::url('/', true) ?>file_upload/css/jquery.fileupload-ui.css">

</head>
<body>
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

<div class="container" role="main" id="main">
	    <!--[if lt IE 7]>
		    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
	    <![endif]-->
	    <header>
			<?php echo $this->element('club/header'); ?>
		</header>
		    <!-- Site content -->
	
			    <?php echo $this->Session->flash(); ?>
	
			    <?php echo $this->fetch('content'); ?>
	
		    <!-- Site content END-->
		    
		 <footer>
			<?php echo $this->element('club/footer'); ?>
		</footer>
</div> <!-- /container -->


<script>
	var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

</body>
</html>
