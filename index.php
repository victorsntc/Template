<?php
defined('_JEXEC') or die;
JHTML::_( 'behavior.modal' );
$app = JFactory::getApplication();
$doc = JFactory::getDocument();

// Getting params from template
$params = $app->getTemplate(true)->params;

// Add Stylesheets
$doc->addStyleSheet('templates/' . $this->template . '/css/bootstrap.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/style.css');

// Add JavaScript Frameworks
//$doc->addScript('templates/' . $this->template . '/js/jquery.min.js');
//$doc->addScript('templates/' . $this->template . '/js/jui/jquery-ui.js');
$doc->addScript('templates/' . $this->template . '/js/jquery.menuAdaptable-2.2.js');
$doc->addScript('templates/' . $this->template . '/js/scripts.js');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
	<head>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <jdoc:include type="head" />
        <link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Oswald:400,700,300" />
        <script type="text/javascript" >
			var juribase = '<?php echo JUri::base(); ?>';
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-62320024-1', 'auto');
            ga('send', 'pageview');
        </script>
	</head>
	<body>
		<div class="supercontenedor">
			<div class="contenedor">
				<!--------------------------- HEADER --------------------------->
				<header>
				<div class="links">
					<div class="centrador absolute">
						<a href="<?php echo $this->baseurl ?>/">
							<img class="main_logo" alt="Supermarches DUFOUR" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/logos/logo.png" />
							</a>
							<jdoc:include type="modules" name="botones" />
						</div>
					</div>			 
					<div class="main_menu">
						<div class="centrador absolute">
							<jdoc:include type="modules" name="menu" />
						</div>
					</div>
				</header>	  
				<!--------------------------- CONTENT --------------------------->
				<div class="com_content">
					<jdoc:include type="message" />
					<jdoc:include type="component" />
				</div>
				<jdoc:include type="modules" name="slide" />
				<jdoc:include type="modules" name="position1" />
				<jdoc:include type="modules" name="position2" />
			</div>
                <!--------------------------- FOOTER --------------------------->	
                <footer>
                	<jdoc:include type="modules" name="footer" />
                </footer>
		</div>
	</body>
</html>