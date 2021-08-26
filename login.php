<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
   <title>Login page</title>    
</head>   
<body>
 <h1 id="topline">Welcome NITT student Login page!</h1>

<form method="post" id="lol" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <pre>&nbsp&nbspName:&nbsp&nbsp&nbsp&nbsp <input type="text" username="fname" id="nameid"></br>
  Password: <input type="password" name="fpass" id="passid">
  <br>&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" id="sub">Login</button>&nbsp&nbsp<button type="reset" id="sub">Reset</button><br>
 
</form>
  <style>
      body {
      background-image: url('https://imgur.com/zVgiSmu.png')
      }
      * {
        color: white;
      } 
      #topline{
       text-align: center;
       color: white;
      }
    #nameid{
    color: black;
    font-size: 20px;
    } 
    #sub{
    color: black;
    font-size: 20px;
    }
    #subi{
    color: black;
    font-size: 20px;
    }
    #passid{
    color: black;
    font-size: 20px;
    } 
    
    #lol{
      position: absolute;
      right:200px;
      top: 200px
      }

</style>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_REQUEST['fname'];
  $pass = $_REQUEST['fpass'];
  if (empty($name) || (empty($pass))) {
    echo "No credintials entered!!";
  } else {
          for($i=1;$i<=30;$i++)
          {
            if((($name="sysad$i") || ($name="webdev$i") || ($name="appdev$i")) && ($pass=="superuserpass"))
            {
              header("Location: http://localhost/hopage.php");
              break;
            }
            else
            { 
              echo "Wrong credintials";
              break;
            }        
          }
         }
}    
?>

</body>
</html>
