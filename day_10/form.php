<?php


echo '</pre>';
print_r($_POST);
if(isset($_POST['btn'])){
    

$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
echo $fname." ". $lname;

}


?>


<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8"> 
        <title></title>
        
    </head>
    <body>
        <form action="#" method="post">
            <table align="center">
                <tr>
                    <td> First Name: </td> 
                    <td><input type="text" name="first_name"></td>
                </tr>
                  <tr>
                    <td> Last  Name: </td> 
                    <td><input type="text" name="last_name"></td>
                </tr>
                <tr>
                    <td> </td>
                    <td> <input type="submit" name="btn" value="submit"></td>
                </tr>
                
            </table>
        </form>
    </body>
    
    
</html>