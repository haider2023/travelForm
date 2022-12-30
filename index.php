
<?php
$insert =false;
if(isset($_POST['name'])){
 $server="localhost";
 $username="root";
 $password="";
 
 $con= mysqli_connect($server,$username,$password);
 if(!$con){
    die("connection to this database failed due to".mysqli_connect());
 }
 
  $name=$_POST['name'];
  $gender=$_POST['gender'];
  $age=$_POST['age'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $desc=$_POST['desc'];

  $sql ="INSERT INTO `jmitourformdata`.`trip` ( `Name`, `Age`, `Gender`, `Email`, `Phone`, `Other`, `Date`) VALUES ( '$name','$age', '$gender', '$email', '$phone', '$desc', '2022-12-24'); ";
  
 
 
  if($con->query($sql) == true){

   $insert=true;
  }
  else
  {
    echo "Error : $sql <br> $con->error ";
  }
  $con ->close();

}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to Travel Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="formcss.css" />
    <img
      class="jmi"
      src="Jamia-Millia-Islamia-featured-image.jpg"
      alt="Jamia Millia Islamia"
    />
  </head>
  <body>
    <div class="container">
      <h1>Welcome to Jamia Millia Islamia Travel Us trip Form</h1>
      <p>
        Enter your details and submit this form to confirm your participation in
        the trip
      
      
       <form action="index.php" method="post">
        <input
          type="text"
          name="name"
          id="name"
          placeholder="Enter your name"
        />
        <input type="text" name="age" id="age" placeholder="Enter your age" />
        <input
          type="text"
          name="gender"
          id="gender"
          placeholder="Enter your gender"
        />
        <input
          type="text"
          name="email"
          id="email"
          placeholder="Enter your email"
        />
        <input
          type="text"
          name="phone"
          id="phone"
          placeholder="Enter your phone"
        />
        <textarea
          name="desc"
          id="desc"
          cols="30"
          rows="9"
          placeholder="Enter any other information here"
        ></textarea>
        <button onClick="myfunc()" class="btn"  >Submit</button>
      </form>
    </div>
    <script src="index1.js"></script>
  </body>
</html>
