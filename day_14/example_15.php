<?php
 echo '<pre>';
 print_r($_POST);
 if(isset($_POST['btn'])){
     
     require_once './function_defination.php';
    
     
//     function even_sum($value){
//     
//     $starting_number=$_POST['starting_number'];
//     $ending_number=$_POST['ending_number'];
//     $sum=0;
//     for($i=$starting_number;$i<=$ending_number;$i++){
//         if($i % 2==0)
//             $sum=$sum+$i;
//             
//     }
//     return $sum;
//     
// }
   
  // echo even_sum($_POST);
 
 }
 

?>

<form  action="" method="post">
    <table>
        <tr>
            <td>Enter starting Number </td>
            <td><input  type ="number"  name="starting_number"> </input> </td>
        </tr>
          <tr>
            <td>Enter Ending  Number </td>
            <td><input  type ="number"  name="ending_number"> </input> </td>
        </tr>


        <tr>
            <td>Result </td>
            <td><input type="text" value="<?php  if(isset($_POST['btn'])){  echo even_sum($_POST);}  ?>">   </td>

        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="SUBMIT"  </td>

        </tr>

    </table>

</form>

