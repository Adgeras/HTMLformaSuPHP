<?php
if (empty($_POST['name']) or empty($_POST['age'])) {
    exit("Laukai uzpildyti nepilnai");
} else {
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
}
echo $name . " ". $age;
// sita pratestavus pereinama prie form2 - geresnes testinimo versijos

?>