<?php

    function Return_Values($array)
    {
        return (array_values($array));
    }

    $array = array ("Jovial"=>25, "Jeremy"=>10, "Folken"=>20, "Joev");
    print_r(Return_Values($array));

?>    