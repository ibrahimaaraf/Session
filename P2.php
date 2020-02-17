<?php

session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php

$_SESSION["name"] = $_POST["name"];
echo "<br>";

echo $_SESSION["name"];

echo "<br>";

$_SESSION["email"] = $_POST["email"];

echo "<br>";
echo $_SESSION["email"];

echo "<br>";
$_SESSION["date"] = $_POST["d1"]."/".$_POST["d2"]."/".$_POST["d3"];
echo "<br>";

echo $_SESSION["date"];
echo "<br>";


?>

<?php
$genderErr= $degreeErr= $bloodErr="";
$gender = $degree = $date = $blood="";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  

  if (empty($_POST["degree"]))
  {
    $degreeErr = "Degree is required";
  }
  else
  {
    $degree = $_POST["degree"];
  }

  if (empty($_POST["gender"]))
  {
    $genderErr = "Gender is required";
  }
  else 
  {
    $gender = $_POST["gender"];
  }
  if (empty($_POST["blood"])) 
  {
    $bloodErr = "blood is required";
  } 
  else
  {
    $blood = $_POST["blood"];
  }
}


?>

<form method="post" action="p3.php">>
Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
   Degree:
  <input type="checkbox" name="degree" value="Bsc.">Bsc.
  <input type="checkbox" name="degree" value="SSC">SSC
  <input type="checkbox" name="degree" value="HSC">HSC
  <input type="checkbox" name="degree" value="Phd">Phd.
  
  <span class="error">* <?php echo $degreeErr;?></span>
  <br><br>
  
   BloodGroup:
   <select name="blood">
  <option value="A+">A+</option>
  <option value="B+">B+</option>
  <option value="AB+">AB+</option>
  <option value="O+">O+</option>
  <option value="A-">A-</option>
  <option value="B-">B-</option>
  <option value="AB-">AB-</option>
  <option value="O-">O-</option>
  </select>
  
  
  <span class="error">* <?php echo $bloodErr;?></span>
  <br><br>
  
  
  <input type="submit" name="submit" value="Submit">  
</form>







</body>
</html>
