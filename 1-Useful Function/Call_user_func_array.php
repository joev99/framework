<?php

    function Box($width,$height,$depth) {
        $b = $width*$height*$depth;
        echo $b;
    }

    call_user_func_array("Box", array("width" => 10, "height"=> 20, "depth" => 30));
?>    