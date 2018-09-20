<?php 

 $title=$_POST['title'];
 $date=$_POST['date'];
 $content=$_POST['content'];

 $conn=mysqli_connect('localhost','root','');
 mysqli_select_db($conn,'liuyan');
 mysqli_query($conn,'set names utf8');
 $sql="INSERT INTO liuyans VALUES('{$title}','{$date}','{$content}')";
 $result=mysqli_query($conn,$sql);
 if($result){
 	echo 1;
 
 }else{
 	echo 0;
 }
 mysqli_close($conn);