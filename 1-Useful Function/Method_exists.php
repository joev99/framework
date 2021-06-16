<!DOCTYPE html>
<html>
<body>
<?php

    class Fruit {

        //Properties
        public $name;
        public $color;

        //Method set name
        function set_name($name) {
            $this->name = $name;
        }
    }

        //Create object
        $obj = new Fruit();

        if(method_exists($obj, 'get_name')){
            echo 'Method exists.';
        }else{
            echo 'method not exists.';
        }
?>
</body>
</html>        