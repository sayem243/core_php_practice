<script> 
   // This is one way to declare array
    var data=new Array();
    data['0']=1;
    data['1']=11;
    data['2']=21;
    for(key in data){
        document.write(data[key]+' ');
    }
    
   // document.write(data['2']);
    
    // This is another way .
/**
    var data1=new Array(11,121,23,123,44);
      document.write(data1['2']);
      **/
  /**    
      var data2=[1,33,4,11,6,7]
       document.write(data2['2']);
     **/
    
</script>