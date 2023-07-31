<!DOCTYPE html>
<?php 
include("top.html"); 
include("common.php")?>

<?php
# print table
$rows = array(
  ["name"=>"Beauty Shop", "year"=>"2005"],
  ["name"=>"Magic 7", "year"=>"2005"]);

print_table("Kevin", "Bacon", $rows, "All Films");
?>

<?php include("bottom.html"); ?>