<?php

session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
class User
 {
  
  public $name;
  public $gender;
  public $blood;
  public $degree;
  public $email;
  public $date;
  
   function __construct($name,$email,$date,$gender,$degree,$blood) 
   {
	   
    $this->name = $name;
	
	$this->email = $email;
	
	$this->gender = $gender;
	
    $this->blood = $blood;
	
	$this->degree = $degree;
	
	$this->date = $date;
	
   }
  

  
  function set_name($name) {
    $this->name = $name;
  }
  
  function get_name() 
  {
    return $this->name;
  }
   function set_email($email)
   {
    $this->email = $email;
  }
  function get_email()
  {
    return $this->email;
  }
  function set_gender($gender)
  {
    $this->gender = $gender;
  }
  function get_gender()
  {
    return $this->gender;
  }
  function set_blood($blood)
  {
    $this->blood = $blood;
  }
  function get_blood() 
  {
    return $this->blood;
  }
  function set_degree($degree)
  {
    $this->degree = $degree;
  }
  function get_degree()
  {
    return $this->degree;
  }
  function set_date($date)
  {
    $this->date = $date;
  }
  function get_date()
  {
    return $this->date;
  }
  
}
?>


<?php


 $_SESSION["blood"]=$_POST["blood"];


 $_SESSION["gender"]=$_POST["gender"];

 $_SESSION["degree"]=$_POST["degree"];


?>



<?php




$user = new User( $_SESSION["name"],$_SESSION["email"],$_SESSION["date"],$_SESSION["gender"],$_SESSION["degree"],$_SESSION["blood"]);


echo $user->get_name();

echo "<br>";

echo $user->get_email();

echo "<br>";

echo $user->get_date();

echo "<br>";

echo $user->get_degree();

echo "<br>";

echo $user->get_gender();

echo "<br>";

echo $user->get_blood();
?>

<?php

$file = fopen("User Info.txt", "w") or die("Unable to open file!");

$data = $user->get_name()."\n";

fwrite($file, $data);

$data = $user->get_email()."\n";

fwrite($file, $data);

$data = $user->get_date()."\n";

fwrite($file, $data);

$data = $user->get_gender()."\n";

fwrite($file, $data);

$data = $user->get_degree()."\n";

fwrite($file, $data);

$data = $user->get_blood()."\n";

fwrite($file, $data);

fclose($file);


?>

</body>
</html>