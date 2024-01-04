<!-- <?php
$chars = date("yFdHisla" .uniqid() .rand(0, 999999999) ."abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789!#$%&'()*+,-./:;<=>?@");

$str = str_shuffle($chars);
// echo $str;
echo substr($str, 0, 12);
?>
<br>
<br>
<a href="./randompass.php">
    <button>Random Password</button>
</a>

<?php
$chars = date("yFdHisla" .uniqid() .rand(0, 999999999) ."abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789!#$%&'()*+,-./:;<=>?@");
$str = str_shuffle($chars);
echo substr($str, 0, 18);

?>

<br>
<br>
<a href="./randompass.php">
    <button>Random Password</button>
</a> -->


<!-- <?php
function randonPass(){
    $lowerCase = "abcdefghijklmnopqrstuvwxyz";
    $upperCase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $digites = "1234567890";
    $symbles = "!#$%&'()*+,-./:;<=>?@";


    $lowerCase = str_shuffle($lowerCase);
    $upperCase = str_shuffle($upperCase);
    $digites = str_shuffle($digites);
    $symbles = str_shuffle($symbles);

    $pass = substr($lowerCase, 0, 15);
    $pass = substr($upperCase, 0, 15);
    $pass = substr($digites, 0, 15);
    $pass = substr($symbles, 0, 15);

    return str_shuffle($pass);


}

echo randonPass();

?> -->

<?php
function randomPass(){
    $lowerCase = "abcdefghijklmnopqrstuvwxyz";
    $upperCase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $digits = "1234567890";
    $symbols = "!#$%&'()*+,-./:;<=>?@";

    $lowerCase = str_shuffle($lowerCase);
    $upperCase = str_shuffle($upperCase);
    $digits = str_shuffle($digits);
    $symbols = str_shuffle($symbols);

    $pass = substr($lowerCase, 0, 5) . substr($upperCase, 0, 5) . substr($digits, 0, 3) . substr($symbols, 0, 2);

    return str_shuffle($pass);
}

echo randomPass();
?>



<br>
<br>
<a href="./randompass.php">
    <button>Random Password</button>
</a>