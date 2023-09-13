<?php
$url="https://restcountries.com/v3.1/alpha/LK";
$data=file_get_contents($url);
$data=json_decode($data);
//var_dump($data);
foreach($data as $v){
    echo '<center>';
    echo '<input type="image" src="'.$v->flags->png.'">';
    echo '<h2>'.$v->name->common.'</h2>';
    echo '<li>'.$v->name->official.'</li>';
    echo '<li>'.$v->name->nativeName->sin->official.'</li>';
    echo '<li>'.$v->name->nativeName->tam->official.'</li>';
    echo '</center>';
}
?>