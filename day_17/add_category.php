<?php
//echo '<pre>';
//print_r($_POST);

if(isset($_POST['btn'])){
    
    function save_category($data){
        $host_name='localhost';
        $user_name='root';
        $password='';
        $db_name='db_seip_php17';
        $connection=mysqli_connect($host_name, $user_name, $password);
        if($connection){
            $db_select=mysqli_select_db($connection, db_seip_php17);
            if($db_select){
                
            }
            else {
                die('Database Selection Fail'.  mysql_error($connection));
         }
            
        } else {
                die('Database Connection Fail'. mysql_error($connection));
         }
        
         $sql="INSERT INTO tbl_category (category_name , category_description , publication_status) VALUES ('$_POST[category_name]' ,' $_POST[category_description]','$_POST[publication_status] '  )";
         if(mysqli_query($connection, $sql)){
            $message= " Category info save successfully";
            return $message ;
         }
 else {
    die('Query Probleml'. mysql_error($connection));
 }
        
          
        
    }
    $message= save_category($_POST);
}

?>
<hr/>
<a href="add_category.php">Add Category</a>
<a href="view_category.php">View Category</a>

<form action="" method="post">
    <h1><?php if(isset($message)){ echo $message; }  ?> </h1>
    <table>
        <tr>
            <td> Category Name</td>
            <td><input type="text" name="category_name"> </td>
        </tr>
        <tr>
            <td>Category Description</td> 
            <td><textarea name="category_description" rows="7" cols="50">  </textarea> </td>
        </tr>
        
        <tr>
            <td>Public Status</td>
        <td>
            <select name="publication_status">
                <option>--Select Publication Status--</option>
                <option value="1">Published</option>
                <option value="0">Un Published</option>
            </select>
        </td>
        </tr>
        <tr>
            <td></td>
             
            <td><input type="submit" name="btn" value="Save Category"</td>
        </tr>
        
    </table>
        
</form>