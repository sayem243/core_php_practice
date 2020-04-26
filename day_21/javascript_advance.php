<h1 id="heading_one"> Hello Bangladesh</h1>

<div id="box_one">hi</div>
<button type="button" onclick="my_color();">Click Me</button>
<input type="number" id="given_number">
<script>
    var x=document.getElementById('heading_one');
    x.style.color='red';
    x.style.background='black';
    var element=document.getElementById('box_one');
    element.style.height='200px';
    element.style.width='200px';
    element.style.backgroundColor='gray';
    
    function my_color(){
        var x=document.getElementById('box_one');
        var given_number=document.getElementById('given_number').value;
        x.style.backgroundColor='pink';
      //  x.style.borderRadius='20px';
      element.style.borderRadius=given_number+'px';
     
        
    }
    

</script>