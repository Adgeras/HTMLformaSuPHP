<?php
if (!empty($_POST)){
    if (empty($_POST['name'])) {
        $errors[] = '"Name" laukas neužpildytas';
    }
    if (empty($_POST['age'])) {
        $errors[] = '"Age" laukas neužpildytas';
    }elseif (!is_numeric($_POST['age'])) {
        $errors[] = 'Age lauke įvesti ne skaičiai';
    }
    if (!empty($errors)) {
        foreach ($errors as $err) {
            echo "<strong>$err</strong><br>";
        }
    }else{
        echo '<pre>';
        print_r($_POST);
        echo '<pre>';
    }
}
?>