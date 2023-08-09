<?php 
$name1= "Mohamed";
$name2= " Hossam";
// echo $name1.$name2;

if($name1.$name2=="Mohamed Hossam"){
    $check = "yes";
}else{
    $check= "no";
}


$family=array("ahmed","mohamed","lara");
echo $family[2]."\n";

foreach($family as $member){
    echo $member." <br>" ;
}


class Car{
    public $color;
    public $model;
    public $price;

    public function __construct($color,$model,$price){
        $this->color = $color;
        $this->model = $model;
        $this->price = $price;
    }

    public function print(){
        return "car deets: <br>"."color: ".$this->color."<br>model: ".$this->model."<br>price: ".$this->price."<br><br>"; 
    }
}
    $car1= new Car("red","lancer","400000");
    echo $car1->print();
    $car2= new Car("yellow","elentra","1000000");
    echo $car2->print();
    

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lec 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    
</head>
<body>
    <h2>Hello World in PHP</h2>
    <h2>this is <?php echo $name1.$name2;?> Speaking</h2>
    <h3>Are You the Pilot? </h3>
    <h4 style="color:green;"><?php echo $check; ?></h4>

    <div class="card">
        <div class="row">
            <div class="col">
                <form action="process_form.php" method="post">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">@</span>
                        <input type="text" class="form-control" name="username" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Pass</span>
                        <input type="password" class="form-control" name="password" placeholder="Password" aria-label="Password" aria-describedby="addon-wrapping">
                    </div>
                    <button type="submit" class="btn btn-outline-danger">Submit</button>
                </form>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>


</body>
</html>