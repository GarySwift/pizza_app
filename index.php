<?php
	$page_title = 'Home - The Pizza Place';
	$page_id = 'index';
	require_once('./php_function_lib/function_lib.php');
    require_once('_header.php');
	

	
	/******** Start of home page ***********/
	generatePageHead('home', 'Home','','');
?>
		<p><strong>Note: You can swipe right/left to show/close menu.</strong></p>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>   
        
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
		<ul data-role="listview" data-inset="true" >
          <li><a href="choose_town.html" data-transition="slidedown"><h3> Some Sushis</h3></a></li>
          <li><a href="choose_town.html"  data-transition="slidedown"><h3> A Pizza </h3></a></li>
          <li><a href="choose_town.html"  data-transition="slidedown"><h3> A Kebap</h3></a></li>
          <li><a href="choose_town.html"  data-transition="slidedown"><h3> A Burger</h3></a></li>
          <li><a href="choose_town.html"  data-transition="slidedown"><h3> Some Nems </h3></a></li>
          <li><a href="choose_town.html"  data-transition="slidedown"><h3> Something more traditional</h3></a></li>	
        </ul>	
<?php
	/******** End of home page ***********/
	generatePageFoot();
	
	
	/******** Start of about page ***********/
	generatePageHead('about', 'About','','');
?>
		<h1>About</h1>	
<?php
	/******** End of about page ***********/
	generatePageFoot();
	
	
	/******** Start of contact page ***********/
	generatePageHead('contact', 'Contact','','');
?>
		<h1>Contact</h1>
<?php
	/******** End of contact page ***********/
	generatePageFoot();
	
/******** Start of contact page ***********/
	generatePageHead('login', 'Log In Here','','');
?>
		<h1>Login</h1>
<?php
	/******** End of contact page ***********/
	generatePageFoot();
	
	require_once('_footer.php');
?>