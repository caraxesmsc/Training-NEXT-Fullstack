<?php
/*
1-connect database  mysqli_connect(localhost,root,password,database name)
2-check connection if(!)  mysqli_connect_error()
3-query (insert, update, select delete)
4- run query mysqli_query()

*/
$id=null;
$name=null;
$email=null;
$pass=null;
$conn= mysqli_connect('localhost','root','','DatabaseL12');

if(!$conn){
    $status="connection error".mysqli_connect_error();
}else{
    $status= "connected!";
    if($_SERVER['REQUEST_METHOD']=='POST'){
        
        $name=$_POST['name'] ;
        $email=$_POST['email'] ;
        $pass=$_POST['pass'];
    }

    $query_to_db="INSERT INTO `form` (`Name` , `Email`,`Password`) VALUES ('$name','$email','$pass')";
    $query1="SELECT * FROM `Form` WHERE 1";
    if($result =mysqli_query($conn,$query1)){
        while($row=mysqli_fetch_array($result)){
            // echo   . $row['name']. $row['email'] .$row['password']."<br>";
        
            $id=$row['id'];
            // $name=$row['name'];
            // $email=$row['email'];
            // $pass=$row['pass'];
        }
    }
    if(mysqli_query($conn,$query_to_db)){
        $form_status="Registered succesfully";
    }else{
        $form_status="Error during Registration";

    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form SQL</title>
</head>
<body>
    <h6 style="color:green;"><?php echo $status ;         ?></h6>
    <form method="post">
        <h2>Form</h2>
        <input type="text" name="name" placeholder="name">
        <input type="email"name="email"placeholder="email">
        <br>
        <input type="Password"name="pass"placeholder="password">
        <input type="Submit">
    </form>
    
    <h1>Data recieved for <?php echo $id; ?> : </h1>
    <h3>Name: <?php echo $name ;         ?></h3>
    <h3>Email: <?php echo $email;        ?></h3>
    <h3>Pass: <?php echo $pass  ;        ?></h3>

</body>
</html>