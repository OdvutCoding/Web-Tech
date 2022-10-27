<?php
//$name = $email = $username = $pass = $cpass = $gender = $dob = '';  
if(isset($name) || isset($email) || isset($username) || isset($pass)|| isset($cpass))
{
    $name= $_POST['name'];
    $email= $_POST['email'];
    $username= $_POST['username'];
    $pass= $_POST['pass'];
    $cpass= $_POST['cpass'];
    $gender= $_POST['gender'];
    $dob= $_POST['dob'];
    
}

 $message = '';  
 $error = '';  

 if($_SERVER["REQUEST_METHOD"] == "POST")
 {
    if(isset($_POST["submit"]))
    {
        
    }  



    // if(isset($_POST["submit"]))  
    // {  
    //      if(!isset($_POST["name"])
    //      && !isset($_POST["email"]) 
    //      && !isset($_POST["username"])
    //      && !isset($_POST["pass"]) 
    //      && !isset($_POST["cpass"]) 
    //      && !isset($_POST["gender"]) 
    //      && !isset($_POST["dob"]))  
    //      {  
    //           $error = "<label>Enter Name</label>";  
    //      }     
    //      else  
    //      {  
    //        $error = "<label>Hiee</label>";
           //    if(file_exists('data.json'))  
           //    {  
           //         $current_data = file_get_contents('data.json');  
           //         $array_data = json_decode($current_data, true);  
           //         $new_data = array(  
           //              'name'               =>     $_POST['name'],  
           //              'e-mail'          =>     $_POST["email"],  
           //              'username'     =>     $_POST["un"],  
           //              'gender'     =>     $_POST["gender"],  
           //              'dob'     =>     $_POST["dob"]  
           //         );  
           //         $array_data[] = $new_data;  
           //         $final_data = json_encode($array_data);  
           //         if(file_put_contents('data.json', $final_data))  
           //         {  
           //              $message = "<label>File Appended Success fully</p>";  
           //         }  
           //    }  
           //    else  
           //    {  
           //         $error = 'JSON File not exits';  
           //    }  
        //  }  
    // }
  }  
 ///////////////////////////////////////////
//  if(isset($_POST["submit"]))  
//  {  
//       if(empty($_POST["name"]))  
//       {  
//            $error = "<label>Enter Name</label>";  
//       }
//       else if(empty($_POST["email"]))  
//       {  
//            $error = "<label>Enter an e-mail</label>";  
//       }  
//       else if(empty($_POST["username"]))  
//       {  
//            $error = "<label>Enter a username</label>";  
//       }  
//       else if(empty($_POST["pass"]))  
//       {  
//            $error = "<label >Enter a password</label>";  
//       }
//       else if(empty($_POST["cpass"]))  
//       {  
//            $error = "<label>Confirm password field cannot be empty</label>";  
//       } 
//       else if(empty($_POST["gender"]))  
//       {  
//            $error = "<label>Gender cannot be empty</label>";  
//       } 
       
//       else  
//       {  
//            if(file_exists('data.json'))  
//            {  
//                 $current_data = file_get_contents('data.json');  
//                 $array_data = json_decode($current_data, true);  
//                 $new_data = array(  
//                      'name'               =>     $_POST['name'],  
//                      'e-mail'          =>     $_POST["email"],  
//                      'username'     =>     $_POST["un"],  
//                      'gender'     =>     $_POST["gender"],  
//                      'dob'     =>     $_POST["dob"]  
//                 );  
//                 $array_data[] = $new_data;  
//                 $final_data = json_encode($array_data);  
//                 if(file_put_contents('data.json', $final_data))  
//                 {  
//                      $message = "<label>File Appended Success fully</p>";  
//                 }  
//            }  
//            else  
//            {  
//                 $error = 'JSON File not exits';  
//            }  
//       }  
//  }  
 ?>  
<!DOCTYPE html>
<html>
<head>
<style>
    .error {color: orange;}
    body {background-color:#F0F8FF;}
    div {height: 100%; width: 50%; font-family:Poppins;}
</style>
</head>
<body>

<div>

<fieldset>
  <legend style="font-size:22px"><b>REGISTRATION</b></legend>
  <table>
        <form method="POST">
            <tr>
                <td>
                    <label for="name">
                        Name
                    </label>
                </td>
                <td><input type="text" id="name" placeholder="John Smith"/>
                <!-- <label><?php echo $name;?></label> -->
                </td>
            </tr>

            <tr>
                <td><label for="email">
                        Email
                    </label>
                </td>
                <td><input type="email" id="email" placeholder="example@email.com" />
                </td>
            </tr>

            <tr>
                <td><label for="username">
                        Username
                    </label>
                </td>
                <td><input type="text" id="username"  placeholder="John123" />
                </td>
            </tr>

            <tr>
                <td><label for="pass">
                        Password
                    </label>
                </td>
                <td><input type="text" id="pass" />
                </td>
            </tr>

            <tr>
                <td><label for="cpass">
                        Confirm Password
                    </label>
                </td>
                <td><input type="text" id="cpass" />
                </td>
            </tr>

        </form>
    </table>

    <fieldset>
    <legend style="font-size:20px">Gender</legend>

    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="other">Other

    </fieldset>

    <fieldset>
    <legend style="font-size:20px">Date of Birth</legend>

    <input type="date" id ="dob" name="dob">

    </fieldset>

    <input type="submit" name="submit" value="Submit">
    <input type="reset" name="reset" value="Reset">

</fieldset>

</div>

</body>
</html>