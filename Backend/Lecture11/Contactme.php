<?php
//! Null Defining all variables to avoid errors
$alert_visibility=false;
$form_status=null;
$emailTo="omnia@gmail";
$id=null;
$name=null;
$email=null;
$subject=null;
$body=null;
$isMailSent=null;
$status_ReadForm=null;
//! Establishing connection with Database
$conn= mysqli_connect('localhost','root','','DatabaseL11ContactMe');

//! No Connection or Form submitted while one or more fields empty
if(!$conn || ($_SERVER['REQUEST_METHOD']=='POST'&& !( $_POST['Name']==null || $_POST['Email']==null || $_POST['Subject']==null || $_POST['Body']))){
  $status_ReadForm_error="connection error".mysqli_connect_error();
  $status_ReadForm= "Error Submitting form";
  $alert_color="Danger";
  $alert_visibility=true;
  //! Otherwise if form is submitted
}elseif($_SERVER['REQUEST_METHOD']=='POST'){
  //! Alert Styling
  $alert_visibility=true;
  $alert_color="Success";
  $status_ReadForm= "Form Submitted Successfully";
  //! Storing into variables
  $name=$_POST['Name'] ;
  $email=$_POST['Email'] ;
  $subject=$_POST['Subject'];
  $body=$_POST['Body'];
  //! Sending to Database
  $query_to_db="INSERT INTO `contactme` (`Name`,`Email`,`Subject`,`Body`) VALUES ('$name','$email','$subject','$body')";
  // $query1="SELECT * FROM `Form` WHERE 1";
  // if($result =mysqli_query($conn,$query1)){
    //     while($row=mysqli_fetch_array($result)){
      //         // echo   . $row['name']. $row['email'] .$row['password']."<br>";
      
      //         $id=$row['id'];
      //         // $name=$row['name'];
      //         // $email=$row['email'];
      //         // $pass=$row['pass'];
      //     }
      // }
    //! Perform Query
    if(mysqli_query($conn,$query_to_db)){
        $form_status="Registered succesfully";
      }else{
        $form_status="Error during Registration";
        
      }
    //! if this is true then some part of the code is wrong
    }else{
      $alert_visibility=false;
      $status_ReadForm= "Form Failed";
      $form_status="Registration Failed";
      $alert_color="dark";
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

      <!-- Bootstrap core CSS-->
  <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">




</head>
<body class="bg-dark">
    <!--Section 1 Nav Bar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark" >
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="project.html">Projects</a>
                </li>
                <li class="nav-item active" >
                    <a class="nav-link" aria-current="page" href="contactme.html">Contact me</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="card text-primary pattern" style=" margin: 100px ;padding:50px ;" >
        <div class="row">
            <div class="col-1"></div>
            <div class="col-3 behind">
                <p class="h1" >Contact me</p>
                <p>Your time spent reviewing my portfolio is genuinely appreciated. Thank you for taking the opportunity to explore my work. If you have any inquiries, wish to collaborate, or simply want to connect, please feel free to reach out. I am eagerly looking forward to hearing from you and discussing potential opportunities or ideas we can explore together. Let's create something amazing!</p>
            </div>
            <div class="col-2"></div>
            <div class="col-6 behind">
              <form class="row g-3 needs-validation" method="post" novalidate>
                <div class="col-md-6">
                  <label for="validationCustom01" class="form-label">Your Name</label>
                  <input type="text" class="form-control" id="validationCustom01" name="Name" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                
                <div class="col-md-6">
                  <label for="validationCustomUsername" class="form-label">Your Email</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text text-primary" id="inputGroupPrepend"><i class="fas fa-envelope-open-text"></i></span>
                    <input type="email"name="Email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                      Please provide your email.
                    </div>
                  </div>
                </div>

                <div class="col-md-12">
                    <label for="validationCustom01" class="form-label">Subject</label>
                    <input type="text"name="Subject" class="form-control" id="validationCustom01"  required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="validationCustom01" class="form-label">Message</label>
                    <input class="form-control" name="Body" aria-label="With textarea" id="validationCustom01" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                </div>

                <div class="col-12">
                  <input class="btn btn-primary" type="Submit">
                </div>  
              </form>
            <div class="col-1"><p></p></div>
            <div class="alert alert-<?php echo $alert_color; ?>" style="<?php echo $alert_visibility ? "display:block;" : "display:none;" ?>" role="alert">
              <?php echo $status_ReadForm ?>
              <br>
              <?php echo $form_status ?>
            </div>
        </div>
      </div>
    </div>


    <!--! Footer -->
    

    <footer class="bg-dark text-white text-center py-3" style="margin-top: 100px; position: fixed ; bottom: 0; width: 100%;">
        <div class="row">
            
        </div>
        <div class="row">
            <div class="container">
                <div class="col-sm">
                    <i class="fab fa-twitter"></i>
                
                    <i class="fab fa-instagram"></i>
                    
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <p>&copy; 2023 Mohamed Hossam. All rights reserved.</p>
            </div>
        </div>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>



</body>
</body>
</html>