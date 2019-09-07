<?php defined('_JEXEC') or die; ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href='https://fonts.googleapis.com/css?family=Play|Roboto|Russo+One&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/avv-sector23/css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/avv-sector23/css/style.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/mform/fancybox/jquery.fancybox.css" type="text/css" />
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js')
    -->
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<jdoc:include type="head" />
</head>
<body>
<div id="bg"></div>
<div id="counters"><jdoc:include type="modules" name="countcode" style="none" /></div>
<div id="header"><div class="header-r"><div class="header-f">
	<div class="container">
		<jdoc:include type="modules" name="header"" style="none" />
	</div>
</div></div></div>
<?php if($this->countModules('topmenu')) : ?>
<div id="topmenu">
	<div class="container">
		<jdoc:include type="modules" name="topmenu" style="none" />
	</div>
</div>
<?php endif; ?>
<?php if($this->countModules('topslider')) : ?>
<div id="topslider">
	<jdoc:include type="modules" name="topslider" style="none" />
</div>
<?php endif; ?>
<?php if($this->countModules('banner')) : ?>
<div id="banner">
	<div class="container">
		<jdoc:include type="modules" name="banner" style="none" />
	</div>
</div>
<?php endif; ?>
<div id="content">
	<div class="container">
		<jdoc:include type="message" />
		<jdoc:include type="component" />
	</div>
</div>
<div id="footer">
	<div class="container">
		<jdoc:include type="modules" name="footer" style="none" />
	</div>
</div>
</body>
<script src="<?php echo $this->baseurl ?>/templates/avv-sector23/js/bootstrap.min.js"></script>
<jdoc:include type="modules" name="scripts" style="none" />
</html>