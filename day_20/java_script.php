<table>
    <tr>
        <td>Starting Number</td>
        <td> <input type="number" id="first_number"></td>
    </tr>
     <tr>
        <td>Ending Number</td>
        <td> <input type="number" id="ending_number"></td>
    </tr>
        <tr>
        <td> Result </td>
        <td><textarea id="result"> </textarea> </td>
    </tr>
     <tr>
        <td></td>
        <td> <input type="button" value="SUBMIT" onclick="my_loop();"> </td>
    </tr>
  
    
</table>

<script>
    function my_loop(){
       var first_number= Number(document.getElementById('first_number').value) ;
      // alert(first_number);
      var second_number= Number(document.getElementById('ending_number').value);
      var result=0;
      for( var i=first_number; i <=second_number ; i++){
                 
                   //document.write(i+' ');
         document.getElementById('result').innerHTML +=i+' ';
           // document.write(i+' ').innerHTML=;
           }
    }
</script>
