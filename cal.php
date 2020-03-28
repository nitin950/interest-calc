<html>
<head>
<title>Interest Calculator</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
body{ 
    background-image: url("bg.jpg");
    background-repeat: no-repeat;
    height: 1000px;
    background-size: cover;
    position: relative;
    background-color: #cccccc;
}
input[type=text]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

h1{
  font-size: 50px;
}

label {
  padding: 24px 24px 24px 24px;
  display: inline-block;
  font-size: 24px;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background: #F5DEB3;
  opacity: 0.9;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 10px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 10px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 22px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
 .button1{
    background-color: green;
    color: white;
    border: 2px solid #4CAF50;
    border-radius: 12px;
}
.button1:hover {
  background-color: Brown;
  color: white;
  border-radius: 12px;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.button2{
    background-color: green;
    color: white;
    border: 2px solid #4CAF50;
    border-radius: 12px;
}
.button2:hover {
  background-color: Brown;
  color: white;
  border-radius: 12px;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
 #t1{
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#t1 td, #t1 th {
  border: 1px solid #ddd;
  padding: 8px;
}

#t1 tr:nth-child(even){background-color: #f2f2f2;}

#t1 tr:hover {background-color: #ddd;}

#t1 th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<h1 align="center">Interest Calculator</h1>
<div class="container">
  <form action="action.php" method="POST">
    <div class="row">
      <div class="col-25">
        <label>Amount</label>
      </div>
      <div class="col-75">
        <input type="text" name="amount" placeholder="Enter Amount">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Rate</label>
      </div>
      <div class="col-75">
        <input type="text" name="rate" placeholder="Enter Rate">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Time</label>
      </div>
      <div class="col-75">
        <input type="text" name="time" placeholder="Enter Time">
      </div>
    </div>
    <div class="container" align="center">
      <button type="submit" class="button button1">Submit</button><button class="button button2" type="reset">Clear</button>
      <br>
      <label for="result" name="result" value="<?php echo $int?>"></lable>

 </form>
</div>
<?php
     $host = "localhost";
     $user = "root";
     $password = "";
     $dbname = "test";
     $con = mysqli_connect($host, $user, $password, $dbname);
     if(!$con){
       die("Connectionn failed: " . mysqli_connect_error());
       }
     else
{
$sql = "SELECT * FROM interestcal";
$res = $con->query($sql);

if ($res->num_rows > 0)
{
    echo "<p><b><h2 font-size:45px>Previous Calculated Values</h2></b> </p>";

echo "<table id=t1>
<tr>
<th>Amount</th>
<th>Rate of Interest</th>
<th>Duration</th>
<th>Interest</th>
</tr>" ;
     while($row = $res->fetch_assoc())
     {
         echo "<tr>";
         echo "<td>" . $row['amount'] . "</td>";
         echo "<td>" . $row['rate'] . "</td>";
         echo "<td>" . $row['time'] . "</td>";
         echo "<td>" . $row['interest'] . "</td>";
         echo "</tr>";
     }
echo "</table>";

}

else{
     echo "0 results";
}

$con->close();
}

?> 
</body>
</html>

</tr>
</table>
</body>
</html>
