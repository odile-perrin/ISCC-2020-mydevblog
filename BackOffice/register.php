<?php
$base = mysqli_connect("localhost", "root", "", "blog-odile");
$loginn=$_POST['loginn'];
$passwordd =$_POST['passwordd'];
$users = "utilisateurs";


function isLoginUsed($login)
{
   global $base;
   global $users;
   $handler = mysqli_query($base, "SELECT * FROM $users WHERE login = '$login'");
   if($handler == false) return 0;
   return(mysqli_num_rows($handler) == 0);
   echo 'Login déja utilisé';
}

function create_id(){
$handler = mysqli_query($base, "SELECT id FROM utilisateurs ORDER BY id DESC LIMIT 1");
$data = mysqli_fetch_assoc($handler);
$id = $data['id'];
$id = intval($id) + 1;
}

function add_login(){
$query="INSERT INTO utilisateurs(id, loginn, passwordd) VALUES('$id','$loginn','$passwordd')";
mysqli_query($base, $query);
}
?> 