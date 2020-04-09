<?php
echo '<pre>';
print_r($_POST);

if (isset($_POST['btn'])) {

    function word_char_count($data) {
        $given_text = $data['given_text'];
        $rdata = array();
        $rdata['number_of_word']= str_word_count($given_text);
        $rdata['number_of_character']= strlen($given_text);
        return $rdata;
    }

    $adata = word_char_count($_POST);
//    echo $adata['number_of_word'];
//    echo $adata['number_of_character'];
}
?>

<form  action="" method="post">
    <table>
        <tr>
            <td>Enter Our String</td>
            <td><textarea name="given_text" rows="7" cols="50"> </textarea> </td>
        </tr>
        <tr>
            <td>Total number of words</td>
            <td><input type="number" value="<?php echo $adata['number_of_word']; ?>" > </td>

        </tr>
        <tr>
            <td>Total number of Characters </td>
            <td><input type="number" value="<?php echo $adata['number_of_character']; ?>"  ></td>

        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="SUBMIT"  </td>

        </tr>

    </table>

</form>
