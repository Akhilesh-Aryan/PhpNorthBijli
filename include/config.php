<?php
$connect = mysqli_connect('localhost','root','','north') or die("Error");

function insertRecord($table,$fields){
    global $connect;
    $cols= implode("," ,array_keys($fields));
    $rows = implode("','", array_values($fields));
    $query = mysqli_query($connect,"insert into $table($cols) value('$rows')");
}
function callingRecord($table){
    global $connect;
    $array = array();
    $query = mysqli_query($connect, "SELECT * FROM $table");
    while($row = mysqli_fetch_array($query)){
    $array[] = $row;
    }
    return $array;
}
function deleteData($table, $cond){
    global $connect;
    $query = mysqli_query($connect,"DELETE FROM $table where $cond");
    return $query;
}
function redirect($page){
    echo "<script>window.open('$page.php', '_self')</script>";
}
function updateData($table,$fields,$where){
    global $connect;
    $data = mysqli_query($connect,"update $table SET $fields WHERE $where");
}
function checkData($table, $cond){
    global $connect;
    $data = mysqli_query($connect, "select * from $table where $cond");
    $count = mysqli_num_rows($data);
    if($count > 0){
        return true;
    }
    else{
        return false;
    }
}
function insertBill($table,$fields){
    global $connect;
    $cols = implode("," , array_keys($fields));
    $rows = implode("','", array_values($fields));
    $query = mysqli_query($connect,"insert into $table($cols) value('$rows')");
}
function insertPayment($table,$fields){
    global $connect;
    $cols = implode("," , array_keys($fields));
    $rows = implode("','", array_values($fields));
    $query = mysqli_query($connect,"insert into $table($cols) value('$rows')");
}
?>
