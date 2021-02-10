<?php


$test1 = 3;
$test2 = 6;


if($test1 == $test2) {
    echo "gelijk";
}
else {
    echo "<li>niet gelijk</li>";
}



if($test1 != $test2) {
    echo "";
}
else {
    echo "";
}





if($test1 === $test2) {
    echo "identiek";
}
else {
    echo "<li>ongelijk identiek</li>";
}


if($test1 > $test2) {
    echo "juist";
}
else {
    echo "<li>onjuist</li>";
}




if($test1 < $test2) {
    echo "<li>juist</li>";
}
else {
    echo "onjuist";
}



if($test1 >= $test2) {
    echo "juist";
}
else {
    echo "<li> test1 is niet groter of gelijk aan test2</li>";
}


if($test1 <= $test2) {
    echo "<li>test1 is kleiner of gelijk aan test2</li>";
}
else {
    echo "onjuist";
}



 ?>
