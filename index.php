<?php
    if(isset($_post['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname="student";


    $con = mysqli_connect($server,$username,$password,$dbname);
    if(!$con){
        die("conection to this database failed due to" .mysqli_connect_error());

    }
    

      $name = ($_POST['name']);
      $gender = ($_POST['gender']);
      $age = ($_POST['age']); 
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $desc = $_POST['desc'];
      $sql="INSERT INTO `student` . `student` (`name`, `Age`, `gender`, `email`, `phone`,`desc` `dt`) VALUES ('$name' ,'$gender' ,$age, \"$email\", $phone, '$desc' ,'current_timestamp()')";
    // echo "$sql"."<br>";

    
    
    
    
    // mysqli_query($con,$sql);
    if (mysqli_query($con, $sql)) {
        // echo "New record created successfully";
        echo "Thankyou for submitting your form. We are happy to see you joining us for the online guitar class";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
      }
      
      mysqli_close($con);
    }
      

    // INSERT INTO `student` (`S.N0`, `name`, `Age`, `gender`, `email`, `phone`, `dt`) VALUES ($name ,$gender ,$age, $email, $phone , current_timestamp());
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aaiye Guitar Shikhiye</title>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Serif&family=Roboto+Mono:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bf" src="bf.jpg" alt="guitarr">
    <div class="container">
        <h1>Aaiye Guitar Shikhiye</h1>
        <p>Enter your Details to confirm your patricipation in the online guitar class</p>
        <p class="submitMsg"></p>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="number" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your Email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any more information here"></textarea>
            <button class="btn">Submit</button>
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>