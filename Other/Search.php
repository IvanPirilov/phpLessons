<?php
$array = [1,5, 23 ,26, 43, 65, 78, 99, 101];
echo 'This is your ';
print_r($array);
echo '<br>';
$x = $_POST['step'];
$steps = 0;
$result = 0;
$r = count($array);
$l = 0;
if(isset($x)) {
    while ($r - $l > 1) {
        $m = ($r + $l) / 2;
        if ($x < $array[$m]) {
            $r = $m;
            $steps++;
        }
        elseif ($x > $array[$m]) {
            $l = $m;
            $steps++;
        }
        else {
            $result = $m;
            $steps++;
            break;
        }
    }
    if ($array[$result] == $x) {
        echo $array[$result];
        echo '<br>';
        echo 'php find it in ' . $steps . ' steps';
    } else {
        echo 'Im dodnt find number in array!';
    }
}
?>
<form method="post">
    <input type="text" name="step">
    <input type="submit"  value="Получить ответ">
</form>
