<?php
function select_all_category_ifo(){
    
       $host_name='localhost';
        $user_name='root';
        $password='';
        $db_name='db_seip_php17';
        $connection=mysqli_connect($host_name, $user_name, $password);
        if($connection){
            $db_select=mysqli_select_db($connection, $db_name);
            if($db_select){
                
            }
            else {
                die('Database Selection Fail'.  mysqli_error($connection));
         }
            
        } else {
                die('Database Connection Fail'. mysqli_error($connection));
         }
         
         $sql="SELECT * FROM tbl_category";
         if(mysqli_query($connection, $sql) ){
             $resource_id=mysqli_query($connection, $sql);
             return $resource_id;
         }
 else {
         die('Query Probleml'. mysql_error($connection));
 }
    
}
$result=select_all_category_ifo();

?>
<hr/>
<a href="add_category.php">Add Category</a>
<a href="view_category.php">View Category</a>

<table border="1" width="800" align="center">
    <tr>
        <th>Category Name </th>
        <th>Category Description </th>
        <th>Category Publication Status</th>
        <th>Action</th>
    </tr>
    <?php while ($category_info= mysqli_fetch_assoc($result)) {  ?>
    <tr>
         <td><?php echo $category_info['category_name']; ?></td>
         <td><?php echo $category_info['category_description']; ?></td>
         <td><?php 
         if ($category_info['publication_status']==1){
             echo 'Published';    
         }else{
             echo 'Unpublished';
         }
     ?>    
</td>
<td><a href="edit_category.php?category_id=<?php echo $category_info['category_id']; ?>"> Edit</a> |
    <a href="#">Delete</a>
</td>
         
    </tr>
    <?php  }?>
    
</table>