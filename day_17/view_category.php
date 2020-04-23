<?php

function select_all_category_ifo() {

    if (isset($_GET['status'])) {
        $category_id = $_GET['category_id'];

        function delete_category($category_id) {
            require 'db_connect.php';
            $sql = "DELETE from tbl_category WHERE category_id='$category_id' ";
            if (mysqli_query($connection, $sql)) {
                $message =" Delete";
                return $message;
            } else {

                die('Query problem' . mysqli_error($connection));
            }
        }

        $message=delete_category($category_id);
    }


    require 'db_connect.php';
    $sql = "SELECT * FROM tbl_category";
    if (mysqli_query($connection, $sql)) {
        $resource_id = mysqli_query($connection, $sql);
        return $resource_id;
    } else {
        die('Query Probleml' . mysql_error($connection));
    }
}

$result = select_all_category_ifo();
?>
<hr/>
<a href="add_category.php">Add Category</a>
<a href="view_category.php">View Category</a>

<table border="1" width="800" align="center">
    <h2> <?php if(isset($message)){ echo 'Delete ';}  ?> </h2>
    <tr>
        <th>Category Name </th>
        <th>Category Description </th>
        <th>Category Publication Status</th>
        <th>Action</th>
    </tr>
<?php while ($category_info = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $category_info['category_name']; ?></td>
            <td><?php echo $category_info['category_description']; ?></td>
            <td><?php
                if ($category_info['publication_status'] == 1) {
                    echo 'Published';
                } else {
                    echo 'Unpublished';
                }
                ?>    
            </td>
            <td><a href="edit_category.php?category_id=<?php echo $category_info['category_id']; ?>"> Edit</a> |
                <a href="?status=delete&category_id=<?php echo $category_info['category_id']; ?>">Delete</a>
            </td>

        </tr>
<?php } ?>

</table>