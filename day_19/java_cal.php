<table>
    <tr>
        <td>First Number </td>
        <td><input type="number" id="first_number" </td>
    </tr>
     <tr>
         <td> Second  Number </td>
        <td><input type="number" id="second_number"</td>
    </tr>
    
       <tr>
         <td> Result </td>
       <td id="result"></td>
    </tr>
       <tr>
         <td> </td>
         <td>
          <input type="submit"  value="+" onclick="javascript_mini_cal('+');">
          <input type="submit"  value="-" onclick="javascript_mini_cal('-');">
         <input type="submit"  value="*"  onclick="javascript_mini_cal('*');">
         <input type="submit"  value="/"  onclick="javascript_mini_cal('/');">
         <input type="submit"  value="%" onclick="javascript_mini_cal('%');">
         </td>
    </tr>    
</table>

<script>
     
    function javascript_mini_cal(operator){
        // alert(operator);
        if(operator=='+'){
         var firstNumber =Number(document.getElementById('first_number').value) ;
        var secondNumber =Number(document.getElementById('second_number').value);
        var addition=firstNumber+secondNumber;
        //document.write(addition);
         document.getElementById('result').innerHTML=addition;
        }
        else if(operator == '-' ){
          var firstNumber =Number(document.getElementById('first_number').value) ;
        var secondNumber =Number(document.getElementById('second_number').value);
        var sub=firstNumber-secondNumber;
        //document.write(addition);
         document.getElementById('result').innerHTML=sub;
        }
         

     }
     
     
</script>