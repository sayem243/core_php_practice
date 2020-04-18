<?php
$category_id = $_GET['category_id'];





function select_category_info_by_category_id($category_id) {
    $host_name = 'localhost';
    $user_name = 'root';
    $password = '';
    $db_name = 'db_seip_php17';
    $connection = mysqli_connect($host_name, $user_name, $password);
    if ($connection) {
       $db_select = mysqli_select_db($connection, $db_name);
        if ($db_select) {
            
        } else {
            die('Database Selection Fail' . mysqli_error($connection));
        }
    } else {
        die('Database Connection Fail' . mysqli_error($connection));
    }
    
    $sql = "SELECT * FROM tbl_category WHERE category_id='$category_id' ";

    if (mysqli_query($connection, $sql)) {
        $resource_id = mysqli_query($connection, $sql);
        return $resource_id;
    } else {
        die('Query problem' . mysqli_error($connection));
    }
}

$resource_id = select_category_info_by_category_id($category_id);
$category_info = mysqli_fetch_assoc($resource_id);

//value store 
if(isset($_POST['btn'])) {

    function update_category_info($data) {
        $host_name = 'localhost';
        $user_name = 'root';
        $password = '';
        $db_name = 'db_seip_php17';
        $connection = mysqli_connect($host_name, $user_name, $password);
        if ($connection) {
            $db_select = mysqli_select_db($connection, $db_name);
            if ($db_select) {
                
            } else {
                die('Database Selection Fail' . mysqli_error($connection));
            }
        } else {
            die('Database Connection Fail' . mysqli_error($connection));
        }

        $sql ="UPDATE tbl_category SET category_name='$data[category_name]',category_description='$data[category_description]',publication_status='$data[publication_status]' WHERE category_id='$data[category_id]' ";
        if (mysqli_query($connection, $sql )) {
            header('Location: view_category.php');
        } else {
            die('Query problem' . mysqli_error($connection));
        }
    }

    update_category_info($_POST);
}
?>

<hr/>
<a href="add_category.php">Add Category</a>
<a href="view_category.php">View Category</a>

<form action="" method="post">
  <h1><?php
        if(isset($message)) {
            echo $message;
        }
        ?> </h1>
    <table>
        <tr>
            <td> Category Name</td>
            <td><input type="text" name="category_name" value="<?php echo $category_info['category_name']; ?>"> </td>
            <td><input type="hidden" name="category_id " value="<?php echo $category_info['category_id']; ?>"> </td>
        </tr>
        <tr>
            <td>Category Description</td> 
            <td><textarea name="category_description" rows="7" cols="50" >  <?php echo $category_info['category_description']; ?></textarea> </td>
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

            <td><input type="submit" name="btn" value="Update Category"</td>
        </tr>

    </table>

