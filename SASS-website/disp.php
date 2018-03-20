<?php



//select db
$connect = mysqli_connect("localhost", "root", "") or die("couldn't connect to database");
mysqli_select_db($connect, "login") or die ("Couldn't find databse");

$sql="SELECT * FROM farmerdetail";

$records=mysqli_query($connect, $sql);


?>

<html>

<head>
<title>farmer details</title>


</head>

<body>
  <div align="center">
    
    <font size="30px" style="display:block"><strong>Farmer Account </strong> </font>
    
</div> 

<table width="600" border="1" cellpadding="1">
<tr>


<th>Name</th>
<th>DOB</th>

</tr>





<?php

 while($login1=mysqli_fetch_assoc($records))
 {echo "<tr>";
  echo "<td>". $login1['Name'] ."</td>";
  
  echo "<td>". $login1['DOB'] ."</td>";
 

  echo "</tr>";
  }//end while

?>
</table>
<script>
function picture() {
    document.getElementById("demo").style.display = "block";
}
</script>
<button type="button" onclick="picture()">See Your Field Here</button>
<button><a href="portfolio.html" style="text-decoration:none;">Upload Your Crop for selling</a></button>
<img id="demo" style="display:none" src="assets/img/realtime.jpeg">


</body>
</html>