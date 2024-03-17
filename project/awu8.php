<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Apple Watch </title>
           <script language="javascript">
	function count(id, addOrSub)
		{
			var current_value =  document.getElementById(id).value;
			current_value = parseInt(current_value);
			var result = addOrSub ? current_value + 1 : current_value - 1;
                              if(result < 0){
                                  result = 0;
                              } 
                              else if(result >=8){
                                  result = 8;
                              }
			document.getElementById(id).value = result;
			
		}
	</script>
</head>

<body  >
          
<div style="background-color: #FF0004; color: #000000; " align="center">    <font size="+2"> <b>Apple Watch </b></font>      
 </div>

 <?php
      $link= mysqli_connect("localhost","root","","apple") or die("Error in connecting to server");
	$result=mysqli_query($link , "select* from products  where  ap_calegory='watch' ") or die("Error in getting data");
          $number_of_result= mysqli_num_rows($result);
                          $i=0;   

           while (  $number_of_result > 0)
                    {
                              $row = mysqli_fetch_array($result);
                              $image =$row["ap_image"];
                              $name = $row["ap_name"] ;
                                          $info=$row["ap_desc"]; 

                      echo '<div style="width: 50%;float: left; margin-bottom:10px;">
                    <div align="center"> <img src="'.$image.'" width="50%" height="auto"/></div>
                    <div align="center"> '.$name.' </div>
           <div align="center">color: <input type="radio" name="size" value="r"/>Red <input type="radio" name="size"  value="b" /> black <input type="radio" name="size" value="b" /> blue<input type="radio" name="size" value="g" /> green</div><div align="center"> &nbsp; <button onclick="count(\'result'.$i.'\',true)"><label id="plus" style="font-size: 20px"> + </label></button>  &nbsp; <input type="text" name="result'.$i.'" id="result'.$i.'" size=5 placeholder="Count :" value="0"  />&nbsp; <button onclick="count(\'result'.$i.'\',false)"><label id="mins" style="font-size: 20px">  -  </label></button> &nbsp; </div> </div> 

';
                                   $number_of_result=  $number_of_result -1 ; 
						$i++;

           
           }
                   
?>                 
      <img src=""
</body>
</html>