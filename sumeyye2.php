<!DOCTYPE html>
<html >
<head >

	<title>LOVE METER</title>
  <?php

  if (isset($_GET["submit"])) {
      echo "nameone:" . $_GET["nameone"];
      echo "<br/>";
      echo "nametow:" . $_GET["nametow"];

    $filename = "s.txt";
    $content = $_GET["nameone"] . "," . $GET["nametow"] . "\n";

    $fp = fopen($filename, '+a');
    fwrite($fp, $content);
    fclose($fp);
}
   else {

    echo"plsase sumbit the form!";
  }


  ?>
  
</head>
 
<body>
	<style type="text/css">
   * {
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif;
}                                                                                                                                                                    
body {
  background-image: url(bg-love.jpg);
  background-repeat: no-repeat;
  background-attachment: fixed; 
   background-color: #ddd;
  padding: 10px;
  height: 635px;
  background-image: url(img/bg-love.jpg);
  

}
	.table{
     text-transform: uppercase;
   
    height:400px;
        width:600px;
        margin-left:450px;
        margin-top:70px;
       padding-left:100px;
       padding-top:100px;
        background:hsla(0, 100%, 90%, 0.3);
        border-radius:20px;
        border: 3px solid black;

}
h1{
	text-align: center;
	color: balck;
}

</style>
 <h1>Love Meter Game</h1>
	<form action="sumeyye2.php" method="GET">
    <table class="table">
    	<tr>
        <td>
        	Youre Name
        </td>
        <td>
    		Name Youre LOve
    	</td>
    </tr>
    	<tr>

    	<td><input type="text" id="uname" name="nameone" ></td>
<td><input type="text" id="lname" name="nametow"></td>
   
    	
    </tr>

    <tr>
    	<td>
  		



	<script type="text/javascript">
	  
	  function percentage()
	  {
	  	var uname=document.getElementById('uname')

	  	.value;

	  	var lname=document.getElementById('lname')

	  	.value;

	  	if (uname=="") {

	  		alert("Enter Youre Name");
	  	}
	  	else if (lname==""){

	  		alert("Enter Youre Name LOve");

	  		}
	  		else{

	  			var s=Math.random()*100;
	  			s=Math.floor(s);
	  			document.getElementById('perc').
	  			  value=s+"%";
	  		

	  	}
	  }

	</script>

    	</td>
    </tr>

  
    </table>
  </form>

  <div class="lable">
      <input type="submit" name="submit"onclick="percentage()" value="Calculate" 
style="color:brown width: 50px; background-color:pink;"/>
  
<input type="text" name="" id="perc">

</body>
</html>