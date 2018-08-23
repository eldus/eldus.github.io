<?php
if (isset($_GET['p'])){
    $myval = $_GET['p'];
} else {
    $myval = 'abc';
}
system("python 14.py $myval");
?>