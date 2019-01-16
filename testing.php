<?php
$favorites = array(
    "Dave Punk" => array(
        "num" => "5689741523",
        
    ),
    "apple Punk" => array(
        "num" => "2584369721",
        
    ),
    "John Flinch" => array(
        "num" => "9875147536",
        
    )
);
$keys = array_keys($favorites);
for($i = 0; $i < count($favorites); $i++) {
    echo $keys[$i] . "\n";
    foreach($favorites[$keys[$i]] as $key => $value) {
        echo $key . " : " . $value . "\n";
    }
    echo "\n";
}
 
?>