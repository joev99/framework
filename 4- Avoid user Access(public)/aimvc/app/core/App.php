<?php
    
    //Create a class
    class App{
        //PHP Construct
        public function __construct(){

        // display structured information (type and value)
        $url = $this -> parseURL();
        var_dump($url);

        }

        public function parseURL(){
            if(isset($_GET['url'])){
                $url = $_GET['url'];
                return $url;
            }
        }

    }
?>    