<?php require 'corrected_list.php';

if (isset($_GET['length'])) {

    $length = $_GET['length'];

    $i = 0;
    $pwd_keys = array();
    $results = array();

    while ($i++ < $length)
    {
        $pass = rand(0, 92);
        $pwd_keys[$i] = $pass;
    }
    // print_r($pwd_keys)."<br>";

    foreach($pwd_keys as $key => $key_value)
    {
        $item = $keys[$key_value];
        while ($i++ < $length)
            $results[$i] = $item;
        echo ($item);
        // echo ($results[$key_value]);

    } 
}
?>

