<?php
$array = [1,5, 23 ,26, 43, 65, 78, 99, 101];
echo 'This is your ';
print_r($array);
echo '<br>';
$searchedNumb = $_POST['step'];
$steps = 0;
$result = 0;
$right= count($array);
$left = 0;
if(isset($searchedNumb)) {
    while ($right- $left > 1) {
        $middle = ($right+ $left) / 2;
        if ($searchedNumb < $array[$middle]) {
            $right= $middle;
            $steps++;
        }
        elseif ($searchedNumb > $array[$middle]) {
            $left = $middle;
            $steps++;
        }
        else {
            $result = $middle;
            $steps++;
            break;
        }
    }
    if ($array[$result] == $searchedNumb) {
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
