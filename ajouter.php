<meta charset="utf-8">
<?php
 $link1 = mysqli_connect("192.168.56.102","wiam","Wiam@2000","app") or die
       ("Error " . mysqli_error($link1));
if (isset ($_POST['enre'])){
$titre=$_POST['titre'];
$prix=$_POST['prix'];
$sql2 = "INSERT INTO books VALUES(NULL,'$titre','$prix')";
//echo $sql2;
mysqli_query ($link1,$sql2);
} 
?>
