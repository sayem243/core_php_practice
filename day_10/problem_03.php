<?php
    
echo '<pre>';
print_r($_POST);

if(isset($_POST['btn'])){
    
    $starting_number=$_POST['starting_number'];
    $ending_number=$_POST['ending_number'];
    $res='';
    if($starting_number<$ending_number){
           for( $i = $starting_number ; $i<=$ending_number; $i++ ){
        $res.= $i.' ';
    }
    }
 else {
           for( $i = $starting_number ; $i>= $ending_number; $i-- ){
        $res.= $i.' ';
    }
 
}
}

?>
        <form action="" method="post">
            <table align="center">
                <tr>
                    <td> Starting Number: </td> 
                    <td><input type="text" name="starting_number" value="<?php if(isset($_POST['starting_number'])){    echo $_POST['starting_number']; } ?>"></td>
                </tr>
                  <tr>
                    <td>Ending Number </td> 
                    <td><input type="text" name="ending_number"value="<?php if(isset($_POST['ending_number'])){ echo $_POST['ending_number'];}  ?>" ></td>
                    
                </tr>
                <tr>
                    <td>Result </td>
                    <td><textarea cols="40" rows="5"> <?php if(isset($res)) { echo $res; }  ?> </textarea></td>


            
            </tr>
                
                <tr>
                    <td></td>
                    <td>
                      
                        <input type="submit" name="btn" value="SUBMIT"</td>
                </tr>
                
            </table>
        </form>