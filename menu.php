<?php
    $page_title = 'Menu - The Pizza Place';
    $page_id = 'food-menu';
    require_once('./php_function_lib/function_lib.php');
    require_once('_header.php');
    require_once("./php_class_lib/pizza.php");
        
    $pizza_cajun_ing = array("Onion", "Cajun Chicken", "Fresh Tomato", "Jalapeno Peppers");
    $pizza_cajun = new pizza("Cajun Delight", $pizza_cajun_ing, 21.50, "images/pizza/pizza_cajun_delight_100.jpeg", "images/pizza/pizza_cajun_delight_250.jpeg", $id=0, $img_id=0);

    $pizza_chicken_barbie_ing = array("Chicken", "Peppers", "Onions", "Barbeque Sauce");
    $pizza_chicken_barbie = new pizza("Chicken Barbie", $pizza_chicken_barbie_ing, 25.50, "images/pizza/pizza_chicken_barbie_100.jpeg", "images/pizza/pizza_chicken_barbie_250.jpeg", $id=0, $img_id=0);

    $pizza_continental_ing = array("Spinach", "Bacon", "Fresh Tomato");
    $pizza_continental = new pizza("Continental", $pizza_continental_ing, 16.50, "images/pizza/pizza_continental_100.jpeg", "images/pizza/pizza_continental_250.jpeg", $id=0, $img_id=0);

    /******** Start of about page ***********/
    generatePageHead($page_id, 'Food Menu','','');
    echo '<ul data-role="listview" data-inset="true" data-theme="g">';
    generateListItem($pizza_cajun); 
    generateListItem($pizza_chicken_barbie); 
    generateListItem($pizza_continental); 
    echo '</ul>';
    /******** End of about page ***********/
    generatePageFoot();

    generatePageItem($pizza_cajun);
    generatePageItem($pizza_chicken_barbie);
    generatePageItem($pizza_continental);

    require_once('_footer.php');
?>