<?php
defined('_JEXEC') or die;
if (!isset($this->error))
{
	$this->error = JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
	$this->debug = false;
}
$doc             = JFactory::getDocument();
$app             = JFactory::getApplication();
$this->language  = $doc->language;
$this->direction = $doc->direction;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Страница не найдена | «Сектор 23» - клуб пейтбола и лазертага в Лазаревском</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="shortcut icon" href="../favicon.ico" />
<style>body{margin:0;padding:0;font-family:Helvetica,sans-serif;color:#727272}.pos{text-align:center;margin-top:7%}h2{font-weight:400}.enum{font-size:15em;margin:2% 0}.pos a{background:#2B9BDB;padding:1em 1.5em;font-size:1em;text-decoration:none;color:#FFF;letter-spacing:.1em;-webkit-transition:all .4s;-moz-transition:all .4s;transition:all .4s}.pos a:hover{background:#0c242e}</style>
</head>
<body>
<div class="pos"><h2>Набранная вами страница не существует</h2><div class="enum">404</div><a href="/">Перейти на главную</a></div>
</body>
</html>
