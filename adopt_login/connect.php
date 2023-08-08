<?php 

$FirstName = $_POST['FirstName'];
$LastName  = $_POST['LastName'];
$Gender = $_POST['Gender'];
$Address = $_POST['Address'];
$City =$_POST['City'];
$State = $_POST['State'];
$Zipcode = $_POST['Zipcode'];
$CardholderName  = $_POST['CardholderName'];
$CardNumber = $_POST['CardNumber'];
$Expirydate=$_POST['Expirydate'];
$cvv = $_POST['cvv'];

//Check connection
$conn = new mysqli('localhost','root','','cadb1',);

if($conn->connect_error){
  echo "$conn->connect_error";
  die("Connection Failed : ". $conn->connect_error);

} 
else {
  $stmt = $conn->prepare("insert into carddetails(FirstName, LastName, Gender, Address, City, State, Zipcode, CardholderName, CardNumber, Expirydate, cvv ) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("ssssssisiii", $FirstName, $LastName, $Gender, $Address, $City, $State, $Zipcode, $CardholderName, $CardNumber, $Expirydate, $cvv);
  $stmt->execute();
  echo "<script>
  window.location.href='PaymentMethodCard.html';
  alert('Registered Sucessfully!');
  </script>";
  $stmt->close();
  $conn->close();
  }
?>


