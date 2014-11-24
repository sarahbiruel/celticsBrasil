<?php
include_once("../../../../wp-load.php");

/**
 *
 */
class Player {

    private $id;
    private $number;
    private $name;
    private $position;

    function __construct($id) {
        $this -> id = $id;

        $this -> setNumber();
        $this -> setName();
        $this -> setPosition();

    }

    private function setNumber() {
        $this -> number = get_post_meta($this -> id, 'sp_number');
        $this -> number = $this -> number[0];
    }

    private function setName() {
        $this -> name = get_the_title($this -> id);
    }

    private function setPosition() {
        $term_list = wp_get_post_terms($this -> id, 'sp_position');
        $this -> position = array('slug' => $term_list[0] -> slug, 'name' => $term_list[0] -> name, 'description' => $term_list[0] -> description);
    }

    public function getNumber() {
        return $this -> number;
    }

    public function getName() {
        return $this -> name;
    }

    public function getPosition() {
        return $this -> position;
    }
    
    public function getJson() {
        $json = json_encode(
            array(
                "id" => $this -> id, 
                "number" => $this -> number,
                "name" => $this -> name,
                "position" => $this -> position
            )
        );
        
        return $json;
    }

}
?>