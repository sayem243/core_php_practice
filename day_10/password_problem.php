<?php
echo '<pre>';
print_r($_POST);

if (isset($_POST['btn'])) {

    function make_password($data) {
        $given_length = $data['given_text'];
        $random_data = array('@', '#', '$', '%', '!', ' a', 'p', 'c', '7', ' d', 's');
        $password='';
        for ($i = 1; $i <= $given_length; $i++) {
            $index = rand(0, 10);
//            echo $index;
//            echo '<br/>';
             $password.= $random_data[$index];
        }
        return $password ;
    }

    make_password($_POST);
}
?>

<form  action="" method="post">
    <table>
        <tr>
            <td>Enter your password Length</td>
            <td><input  type ="number"  name="given_text"> </input> </td>
        </tr>

        <tr>
            <td>your Password is </td>
            <td><textarea rows="5" cols="30"><?php if(isset($_POST['btn'])){    echo make_password($_POST);}  ?> </textarea> </td>

        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="SUBMIT"  </td>

        </tr>

    </table>

</form>

