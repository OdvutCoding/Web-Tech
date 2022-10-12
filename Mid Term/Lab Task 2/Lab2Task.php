<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $DegreeErr = $BloodGrErr = $dobErr ="";
$name = $email = $gender = $BloodGr = $dob = "";
$values = array();
$Degree = array('SSC','HSC','BSc','MSc');
//$pattern='([a-zA-Z]+\.)([a-zA-Z]+\-){1,}([a-zA-Z]+)';

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["name"])) 
  {
    $nameErr = "Name is required";
  } 
  else 
    {
      $name = ($_POST["name"]);  
      if(!preg_match("/^[a-zA-Z'-]+[a-zA-Z'-]*$/",$name) && str_word_count($name)<2)
      {
        $nameErr = "Only letters,white space, period & dash allowed & At least 2 strings required";
      }
      else // Testing: Does not go inside here even with valid input.
      {
        $name = ($_POST["name"]);  
      }
    }
//TRIALS AND ERRORS
      
  //     if(!preg_match("/^[a-zA-Z'-]+ [a-zA-Z'-]+$/",$name))
  //     {
  //       $nameErr = "Only letters,white space, period & dash allowed & At least 2 strings required";
  //     }
  //     else
  //     {
  //       $name = ($_POST["name"]);
  //  /*     if(!preg_match("/^[a-zA-Z'-]+ [a-zA-Z'-]+$/",$name))
  //       {
  //         $nameErr = "Only letters,white space, period & dash allowed";
  //       }
  //       else
  //       {
  //         $name = ($_POST["name"]);
  //       }
  //       */
  //     }
      
  //   /*// check if name only contains letters and whitespace
  //   if (!preg_match("/^[a-zA-Z'-]+ [a-zA-Z'-]+$/",$name))
  //   {
  //     $nameErr = "Only letters,white space, period & dash allowed";
  //   }
  //   else
  //     {
  //       if(str_word_count($name)<2)
  //     {
  //         $nameErr = "At least 2 strings required";
  //     }
  //     else
  //     {
  //         $name = ($_POST["name"]);
  //     }   
  //   }*/
  // }
  //EMAIL VALIDATION
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = ($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
//GENDER VALIDATION
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = ($_POST["gender"]);
  }
//CHECKBOX VALIDATION

//THIS PART WORKS HOWEVER OUTPUT COMES OUT WITH INDEX & AT TOP

if(isset($_POST['submit']))
{
  $checkedDegree = 0;
  $values = $_POST["Degree"];
  $checkedDegree = count($values);

  if($checkedDegree < 2)
  {
    $DegreeErr = "At least 2 options must be selected";
  }
  else
  {
    echo var_dump($values);
  }
}

//TRIAL AND ERRORS
  // if(isset($_POST['submit']))
  // {
  //   if(!empty($_POST["Degree"]))
  //   {
  //     $DegreeErr = "Degree required";
  //     foreach($_POST["Degree"] as $Degree)
  //     {
  //       if(count($_POST["Degree"]<2))
  //       {
  //         $DegreeErr = "At least 2 options must be selected";
  //       }
  //       else
  //       {
  //         $Degree = ($_POST["Degree"]);
  //       }
  //     }
  //   }
  // }

    // if(isset($_POST['submit']))
    // {
    //   $checked_degree = 2;
    //   $values = $_POST['Degree'];
    //   $checked_degree = count($values);

    //   if($checked_degree < 2)
    //   {
    //     $DegreeErr = "At keast 2 degree must be selected";
    //   }
    //   else
    //   {
    //     $Degree = $_POST['Degree'];
    //   }
    // }


  //   if (empty($_POST['Degree[]'])) {
  //   $DegreeErr = "At least 2 Degree is required";
  // } else 
  // {
  //   $checcked_degree = $POST['Degree'];
  //   $count = count($chcecked_degree);

  //   if($count < 2)
  //   {
  //     $DegreeErr = "At keast 2 degree must be selected";
  //   }
  //   else
  //   {
  //   $Degree = ($_POST["Degree"]);
  //   }
  // }
//BLOOD GROUP VALIDATION
    if (empty($_POST["BloodGr"])) {
    $BloodGrErr = "Blood Group is required";
  } else {
    $BloodGr = ($_POST["BloodGr"]);
  }

     if (empty($_POST["dob"])) {
    $dobErr = "Birth Date is required";
  } else {
    $dob = ($_POST["dob"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: 
  <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  Degree:
  <input type="checkbox" name="Degree[]" value="SSC">SSC
  <input type="checkbox" name="Degree[]" value="HSC">HSC
  <input type="checkbox" name="Degree[]" value="BSc">BSc
  <input type="checkbox" name="Degree[]" value="MSc">MSc
  <span class="error">* <?php echo $DegreeErr;?></span>
  <br><br>
  Date of Birth:
  <input type="date" id="dob" name="dob">
  <span class="error">* <?php echo $dobErr;?></span>
  <br><br>
  Blood Group:
  <select id="BloodGr" name="BloodGr">
  <option value=""></option>
  <option value="AB">AB</option>
  <option value="AB+">AB+</option>
  <option value="AB-">AB-</option>
  <option value="B+">B+</option>
  <option value="B-">B-</option>
  <option value="O+">O+</option>
  <option value="O-">O-</option>
  </select>
  <span class="error">* <?php echo $BloodGrErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $gender;
echo "<br>";
echo $BloodGr;
echo "<br>";
?>


</body>
</html>
