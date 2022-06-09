<?php
$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

$check_name = strlen($name) > 3;
$at_check = strpos($mail, '@') !==false;
$dot_check = strpos($mail, '.') !== false;
$age_check =  is_numeric($age) === true;

?>
<h2>
<?php
        if ($check_name && $at_check && $dot_check && $age_check) {
            echo "Accessed";
        }
        else {
            echo "Accesse! denied";
        }
        ?>
</h2>