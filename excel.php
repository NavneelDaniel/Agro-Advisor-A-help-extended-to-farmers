<!-- <?php
// Open the file for reading
if (($h = fopen("MSP.csv", "r")) !== FALSE) 
{
  // Convert each line into the local $data variable
  while (($data = fgetcsv($h, 1000, ",")) !== FALSE) 
  {   
    // echo $data[1]."<br />\n";
    // Read the data from a single line
    if($data[1]=='Kharif'&& $data[2]=='UP')
    {
    echo $data[0]."<br />\n";
    echo "<br/>";}

  }

  // Close the file
  fclose($h);
}
?> -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>We serve our Farmers</title>
  <!-- <style type="text/css"> -->
    
    <!-- /*table {
      border-collapse: collapse;
    }        
    td {
      border: 1px solid black;
      padding: 0 0.5em;
    } */ -->


<!-- table,th

{

border-style:none;

border-width:2px;

border-color:pink;
width:300px;
height: 38px;
margin-left:auto; 
margin-right:auto;
text-align: left;

} -->
</style>


<link rel="stylesheet" href="main.css">
</head>
<body style="text-align: center;">
  <div class="filter"></div>
        <div class="container1">
           <h1 style="font-size:250%;text-align:center;">Agro Advisor</h1>

<br>
<form action="excel.php" method="post">
  <?php
    // displays tables with excel file data
    // echo $excel_data;
  $name=$_POST["name"];
 echo "<h2>";
 echo "Welcome &nbsp;&nbsp;" .$name;
 echo "</h2>";
$reg= $_POST["region"];
$seas= $_POST["season"];
// Open the file for reading
echo "<table>";
    echo "<tr>";
    echo "<th>";
    echo "Crops";
    echo"</th>";
    echo"<th>";
    echo "MSP of 2020";
    echo"</th>";
    echo "<th>";
    echo "Expected Yield";
    echo "</th>";
    echo "</tr>";
if($reg== "uttar pradesh" && $seas== "kharif")
{
if (($h = fopen("MSP.csv", "r")) !== FALSE) 
{
  // Convert each line into the local $data variable
  
  while (($data = fgetcsv($h, 1000, ",")) !== FALSE) 
  {   
    // echo $data[1]."<br />\n";
    // Read the data from a single line

    if($data[1]=='Kharif'&& $data[2]=='Uttar Pradesh')
    {
    echo "<tr>";
    echo "<td>";
    echo $data[0];
    echo"</td>";
    echo"<td>";
    echo $data[3];
    echo"</td>";
    echo "<td>";
    echo $data[4];
    echo "</td>";
    echo "</tr>";
    }

  }
  echo "</table>";

  // Close the file
  fclose($h);
}
}


if($reg== "andhra pradesh"&& $seas== "kharif")
{
if (($h = fopen("MSP.csv", "r")) !== FALSE) 
{
  // Convert each line into the local $data variable
  while (($data = fgetcsv($h, 1000, ",")) !== FALSE) 
  {   
    // echo $data[1]."<br />\n";
    // Read the data from a single line
    if($data[1]=='Kharif'&& $data[2]=='Andhra Pradesh')
    {
    echo "<tr>";
    echo "<td>";
    echo $data[0];
    echo"</td>";
    echo"<td>";
    echo $data[3];
    echo"</td>";
    echo "<td>";
    echo $data[4];
    echo "</td>";
    echo "</tr>";

  }
}

  // Close the file
  fclose($h);
}
}




if($reg== "maharashtra"&& $seas== "kharif")
{
if (($h = fopen("MSP.csv", "r")) !== FALSE) 
{
  // Convert each line into the local $data variable
  while (($data = fgetcsv($h, 1000, ",")) !== FALSE) 
  {   
    // echo $data[1]."<br />\n";
    // Read the data from a single line
    if($data[1]=='Kharif'&& $data[2]=='Maharashtra')
    {
    echo "<tr>";
    echo "<td>";
    echo $data[0];
    echo"</td>";
    echo"<td>";
    echo $data[3];
    echo"</td>";
    echo "<td>";
    echo $data[4];
    echo "</td>";
    echo "</tr>";

  }
}

  // Close the file
  fclose($h);
}
}



if($reg=="uttar pradesh"&& $seas== "rabi")
{
if (($h = fopen("MSP.csv", "r")) !== FALSE) 
{
  // Convert each line into the local $data variable
  while (($data = fgetcsv($h, 1000, ",")) !== FALSE) 
  {   
    // echo $data[1]."<br />\n";
    // Read the data from a single line
    if($data[1]=='Rabi'&& $data[2]=='Uttar Pradesh')
    {
    echo "<tr>";
    echo "<td>";
    echo $data[0];
    echo"</td>";
    echo"<td>";
    echo $data[3];
    echo"</td>";
    echo "<td>";
    echo $data[4];
    echo "</td>";
    echo "</tr>";

  }
}

  // Close the file
  fclose($h);
}
}



if($reg== "maharashtra"&& $seas== "rabi")
{
if (($h = fopen("MSP.csv", "r")) !== FALSE) 
{
  // Convert each line into the local $data variable
  while (($data = fgetcsv($h, 1000, ",")) !== FALSE) 
  {   
    // echo $data[1]."<br />\n";
    // Read the data from a single line
    if($data[1]=='Rabi'&& $data[2]=='Maharashtra')
    {
    echo "<tr>";
    echo "<td>";
    echo $data[0];
    echo"</td>";
    echo"<td>";
    echo $data[3];
    echo"</td>";
    echo "<td>";
    echo $data[4];
    echo "</td>";
    echo "</tr>";

  }
}

  // Close the file
  fclose($h);
}
}
echo "</table>";


  ?>
</div>
</body>
</html>