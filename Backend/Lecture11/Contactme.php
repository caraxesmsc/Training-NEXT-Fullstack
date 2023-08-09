<?php



try {
if($_SERVER['REQUEST_METHOD']){
    $emailTo="omnia@gmail";
    $subject=$_POST["subject"] ;
    $body=$_POST["msg"];
    $headers="From: ".$_POST["email"];
    
      if(mail($emailTo,$subject,$body, $headers)){
        echo"your email sent successfully";}
      else{
        echo"try again later";
      } 
    }
  } catch (Exception $th) {
    echo "try again laterr";
  }
  
  

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body class=".bg-dark">
    <!--! Section 1 Nav Bar -->
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
                <!-- <p>Your time spent reviewing my portfolio is genuinely appreciated. Thank you for taking the opportunity to explore my work. If you have any inquiries, wish to collaborate, or simply want to connect, please feel free to reach out. I am eagerly looking forward to hearing from you and discussing potential opportunities or ideas we can explore together. Let's create something amazing!</p> -->
            </div>
            <div class="col-2"></div>
            <div class="col-6 behind">
              <form class="row g-3 needs-validation" novalidate>
                <div class="col-md-6">
                  <label for="validationCustom01" class="form-label">Your Name</label>
                  <input type="text" class="form-control" id="validationCustom01"  required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                
                <div class="col-md-6">
                  <label for="validationCustomUsername" class="form-label">Your Email</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text text-primary" id="inputGroupPrepend"><i class="fas fa-envelope-open-text"></i></span>
                    <input type="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                      Please provide your email.
                    </div>
                  </div>
                </div>

                <div class="col-md-12">
                    <label for="validationCustom01" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="validationCustom01"  required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="validationCustom01" class="form-label">Message</label>
                    <textarea class="form-control" aria-label="With textarea" id="validationCustom01" required></textarea>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                </div>

                <div class="col-12">
                  <button class="btn btn-primary" type="submit">Submit form</button>
                </div>  
              </form>
            <div class="col-1"><p></p></div>
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