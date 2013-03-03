<?php
require_once("./php_class_lib/pizza.php");
	
function generateListItem($pizza){
    //$pizza = new pizza($title, $ingredients, $cost, $img_thumb_src, $img_src, $id=0, $img_id=0);
    echo "\n<li>\n";
    echo '  <a href="#'.$pizza->getPageID().'">'."\n";
    echo '	<img class="splitlist-thumb" src="'.$pizza->getImg_thumb_src().'" alt="pizza" title="'.$pizza->getTitle().'"/>'."\n";
    echo '	<h1>'.$pizza->getTitle().'</h1>'."\n";
    echo '	<p>'.$pizza->getIngredientsToString().'</p>'."\n";
    echo '	<span class="ui-li-aside">&euro;&nbsp;'.$pizza->getCost().'</span>'."\n";
    echo '  </a>'."\n";
    echo "</li>\n";		
}

function generatePageItem($pizza){
    /******** Start of page ***********/
    generatePageHead($pizza->getPageID(), $pizza->getTitle(),'','');
    echo '<div class="img-menu-page-container">'."\n";
    echo '    <img class="img-menu-page" src="'.$pizza->getImg_src().'" alt="pizza" title="'.$pizza->getTitle().'" />'."\n";
    echo '</div>'."\n";
    echo '<h1>'.$pizza->getTitle().'</h1>'."\n";
    echo '<span class="ui-li-aside">&euro;&nbsp;'.$pizza->getCost().'</span>'."\n";
    echo '<p>'.$pizza->getIngredientsToString().'</p>'."\n";
    echo '<div class="ui-grid-a">'."\n";
    echo '  <div class="ui-block-a">'."\n";
    echo '      <button value="submit" data-inline="false" data-theme="g" data-icon="star" data-iconpos="right">Favourites</button>'."\n";
    echo '  </div>'."\n";
    echo '  <div class="ui-block-b">'."\n";
    echo '      <button value="submit" data-inline="false" data-theme="g" data-icon="plus" data-iconpos="right">Basket</button>'."\n";
    echo '  </div>'."\n";
    echo '</div>'."\n";

    /******** End of page ***********/
    generatePageFoot();		
}
        
function generatePageHead($mob_page_id, $mob_page_heading, $data_position, $back_btn){
	echo "\n\n".'<!-- Start of '.$mob_page_id.' page -->'."\n";
    echo '<div data-role="page" class="pages" id="'.$mob_page_id.'" data-position="fixed">'."\n";
	echo '<div data-role="header" data-theme="g">'."\n";
	echo '	<h1>'.$mob_page_heading.'</h1>'."\n";
    echo '    <a href="#" class="showMenu"><span class="icon-list large-icon" aria-hidden="true"></span>&nbsp;Menu</a>'."\n";
	echo '</div><!-- /header -->'."\n";
	echo '<div data-role="content">'."\n";
	
}
function generatePageFoot(){
	echo '    </div><!-- /content -->'."\n";
	echo '</div><!-- /page -->'."\n";
}
?>