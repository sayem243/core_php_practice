<?php
    
echo '<pre>';
print_r($_POST);
//var_dump($_POST);
$connection=mysqli_connect('localhost','root','');
if($connection){
    $db_select=mysqli_select_db($connection, 'db_seip_php17');
    
    if($db_select){
        echo 'Databse server is connected';
    }
    else{
         die('Connection Failed'.mysqli_errno($connection));
    }
    
//    echo 'Databasae Serever is Connected ';
}
 else {
     die('Connection Failed'.mysqli_errno($connection));
}


$sql="INSERT INTO tbl_student (student_name , email_address , phone_number) VALUES ('$_POST[student_name]' ,' $_POST[email_address]','$_POST[phone_number] '  )";
mysqli_query($connection, $sql);
?>
<form action="" method="Post">
    <table>
        <tr>
            <td>Student Name </td>
            <td><input type="text" name="student_name"></td>
        </tr>
        <tr>
            <td>Email Address</td>
            <td><input type="text" name="email_address"> </td>
        </tr>
        <tr>
            <td>Mobile Number  </td>
            <td><input type="number" name="phone_number"> </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Save Student"></td>
        </tr>
    </table>
</form>
