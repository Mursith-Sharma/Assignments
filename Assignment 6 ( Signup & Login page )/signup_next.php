<!-- after signup open this page-->

  <?php
  include("config.php");
  if(isset($_POST['submit'])){

    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];                              // keele name il iruppathai sariyaga [''] ithatkul idavendum 
    $number = $_POST['mobile'];                                 // athil idum data inai post method valiyaga nam create panna variable $number.. etc il save aagum



    $result = mysqli_query($mysqli ,"insert into users values('', '$name','$email', '$password', '$number' )");       //database il id auto increment aavathal athai ida thevaiyillai
    if($result){
      echo "user registration succesfully, you can login now";
    }
    else{
      echo "registration failed, somthing went wrong!!";
    }
  }
