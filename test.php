<?php

// echo phpinfo();

function hairCut($type1, $type2)
{
    echo "I want to have this $type1 haircut, if not $type2 haircut";
}

class Barber 
{
    function hairCut($type1, $type2)
    {
    echo "I want to have this $type2 haircut, if not $type1 haircut";
    }
}

call_user_func_array("hairCut", ["Vogate", "Slick"]);
$obj = new Barber();
call_user_func(array($obj, "hairCut"), "Slick", "Vogaate");

echo "<pre>";
var_dump($_SERVER);
echo "</pre>";
exit;

?>