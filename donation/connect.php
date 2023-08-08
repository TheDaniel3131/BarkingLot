<?php 

if(isset($_POST["sub_don"])){
$FirstName = $_POST['FirstName'];
$LastName  = $_POST['LastName'];
$Gender = $_POST['Gender'];
$Address = $_POST['Address'];
$City = $_POST['City'];
$State = $_POST['State'];
$Zipcode = $_POST['Zipcode'];
$CardholderName  = $_POST['CardholderName'];
$CardNumber = $_POST['CardNumber'];
$Expirydate=$_POST['Expirydate'];
$cvv = $_POST['cvv'];
}

//Check connection
$conn = new mysqli('localhost','root','','sdp_petadoptionsys', '3306');

if($conn->connect_error){
  echo "$conn->connect_error";
  die("Connection Failed : ". $conn->connect_error);

} 
else {
  $stmt = $conn->prepare("insert into carddetails(FirstName, LastName, Gender, Address, City, State, Zipcode, CardholderName, CardNumber, Expirydate, cvv ) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("ssssssisiii", $FirstName, $LastName, $Gender, $Address, $City, $State, $Zipcode, $CardholderName, $CardNumber, $Expirydate, $cvv);
  $stmt -> execute();
  // $execval = $stmt->execute();
  // echo $execval;
  echo "<script>
  window.location.href='PaymentMethodCard.html';
  alert('Submitted Sucessfully!');
  </script>";
  // header("location:PaymentMethodCard.html");
  $stmt->close();
  $conn->close();
}
?>


