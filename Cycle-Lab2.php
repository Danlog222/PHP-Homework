<?php
$nav_menu = array("Home" => "index.php",
    "About" => "about.php",
    "Contact" => "contact.html",
    "Сourses" => "courses.php");

foreach($nav_menu as $index => $value){
    echo "<a href=".$value.">".$index."</a><br/>";
}
?>