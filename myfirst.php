<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>THE WAY</title>
  <link rel="stylesheet" href="myfirst.css">
</head>
<?php
$insert=false;
if(isset($_POST['name'])){
$server = "localhost";
$username = "root";
$password ="";
$connection=mysqli_connect($server,$username,$password);
if(!$connection)
{
  die("soory server down or ".mysqli_connect_error());
}
$name=$_POST['name'];
$email=$_POST['email'];
$time=$_POST['time'];
$the_time = date('h:i A', strtotime($time));
$sql ="INSERT INTO `form`.`form` (`name`, `email`, `time`, `ct`) VALUES('$name', '$email', 'the_$time', current_timestamp());";
if($connection->query($sql)==True)
{
$insert=true;
}
else{
  echo " ERROR: $sql <br> $connection->error";
}}
?>
<body id="formbody">
  <div class="nav">
    <a href="#form">Top</a>
    <a href="https://sd-iitkgp.000webhostapp.com/">Home</a>
  </div>
  <h1>IIT KHARAGPUR</h1>
  <p id="msg">Lets do it this way</p>
  <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see u here.</p>";
        }
    ?>
  <div class="container" id="formdiv">
     <form action="myfirst.php" method="POST" id="form">
       <Label>Name:</Label>
       <input type="text" id="name" name="name" placeholder="Name" required><br>
       <Label>Email:</Label>
       <input type="text" id="email" name="email" placeholder="Email" required><br>
       <Label>Time:</Label>
        <input type="time" id="time" name="time"required>
       <button class="btn" >Submit</button> 
       <button class="btn" onclick="stopresubmit();">Resubmit</button>
     </form>
  </div>
  <script>
    function stopresubmit(){
      var name =document.getElementById("name");
      name.value=null;
      var name =document.getElementById("email");
      name.value=null;
      var name =document.getElementById("time");
      name.value=null;
    };
  </script>
</body>
</html>
<!-- $username = "id16501941_rca";
    $password = "Sourabh1503."; -->
    <!-- `id16501941_form`.`form` -->