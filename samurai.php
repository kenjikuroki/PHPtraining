
<?php
/*１*/
print('Hello wordl!');
?>

<?php
/*2*/
$hello = "Hello, PHP\n";
$num = 42;
print($hello);
print($num);
?>

<?php
/*3*/
$costomers = ["a","b","c"];
foreach($costomers as &$costomer) {
    print($costomer."\n");
    print($costomers[0]);
    array_push($costomers, "d");
var_dump($costomers);
}
?>


