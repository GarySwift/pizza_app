<!DOCTYPE html> 
<html> 
	<head>
	<meta id="extViewportMeta" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />	
	<link rel="stylesheet" href="css/jquery.mobile-1.0rc2.min.css" />
	<link rel="stylesheet" href="css/main.css?v=31" />
    <link rel="stylesheet" href="css/custom.css" />
    <link rel="stylesheet" href="css/jquery.mobile.swatch.g.css" />
    <link rel="stylesheet" href="css/fonts.css" />
<!--[if lte IE 7]><script src="js/lte-ie7.js"></script><![endif]-->
	<title><?php echo $page_title?></title>
</head> 
<body> 
<div id="menu">
<h3>Menu</h3>
	<ul>
		<li <?php if ($page_id == 'index') echo 'class="active"'; ?>>
        	<a <?php if ($page_id == 'index') echo 'href="#home"'; else echo 'href="./" rel="external"'; ?> class="contentLink">
        	<span class="icon-home side-bar-icon" aria-hidden="true"></span>&nbsp;Home</a>
        </li>
        <li <?php if ($page_id == 'food-menu') echo 'class="active"'; ?>>
        	<a <?php if ($page_id == 'food-menu') echo 'href="#food-menu"'; else echo 'href="menu.php" rel="external"'; ?> class="contentLink">
        	<span class="icon-book side-bar-icon" aria-hidden="true"></span>&nbsp;Food Menu</a>
        </li>
		<li><a <?php if ($page_id == 'index') echo 'href="#login"'; else echo 'href="index.php#login" rel="external"'; ?> class="contentLink">
        	<span class="icon-enter side-bar-icon" aria-hidden="true"></span>&nbsp;Login</a>
        </li>
        <li><a <?php if ($page_id == 'index') echo 'href="#contact"'; else echo 'href="index.php#contact" rel="external"'; ?> class="contentLink">
        	<span class="icon-bubble side-bar-icon" aria-hidden="true"></span>&nbsp;Contact </a>
        </li>
        <li><a <?php if ($page_id == 'index') echo 'href="#about"'; else echo 'href="index.php#about" rel="external"'; ?> class="contentLink">
        	<span class="icon-info side-bar-icon" aria-hidden="true"></span>&nbsp;About</a>
        </li>
	</ul>
</div>