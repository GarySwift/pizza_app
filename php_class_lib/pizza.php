<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pizza
 *
 * @author Gary Swift
 */
    class pizza{
        private $id = 0;
        private $img_id = 0;
        private $title = "";
        private $ingredients = array();
        private $cost = 0;
        private $img_thumb_src = "";
        private $img_src = "";
        
        function __construct($title, $ingredients, $cost, $img_thumb_src, $img_src, $id=0, $img_id=0) {
            $this->id = $id;
            $this->img_id = $img_id;
            $this->title = $title;
            $this->ingredients = $ingredients;
            $this->cost = $cost;
            $this->img_thumb_src = $img_thumb_src;
            $this->img_src = $img_src;
        }

        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getImg_id() {
            return $this->img_id;
        }

        public function setImg_id($img_id) {
            $this->img_id = $img_id;
        }

        public function getTitle() {
            return $this->title;
        }

        public function setTitle($title) {
            $this->title = $title;
        }

        public function getIngredients() {
            return $this->ingredients;
        }
        
        public function getIngredientsToString() {
            $ingredientsToString = "";
            $count = count($this->ingredients);
            for ($i = 0; $i < $count; $i++) {
               if ($i==0) {
                   $ingredientsToString = $ingredientsToString.$this->ingredients[$i];
               }
               
               else if ($i < ($count - 1)) {
                   $ingredientsToString = $ingredientsToString.", ".$this->ingredients[$i];
               }
               else{
                   $ingredientsToString = $ingredientsToString." & ".$this->ingredients[$i];
               }
            }
            return $ingredientsToString;
        }
        
        public function getPageID(){
            return "pizza_".strtolower(str_replace(" ", "_", $this->title));
            
        }

        public function setIngredients($ingredients) {
            $this->ingredients = $ingredients;
        }

        public function getCost() {
            return number_format((float)$this->cost, 2, '.', '');
        }

        public function setCost($cost) {
            $this->cost = $cost;
        }

        public function getImg_thumb_src() {
            return $this->img_thumb_src;
        }

        public function setImg_thumb_src($img_thumb_src) {
            $this->img_thumb_src = $img_thumb_src;
        }

        public function getImg_src() {
            return $this->img_src;
        }

        public function setImg_src($img_src) {
            $this->img_src = $img_src;
        }


    }

?>
