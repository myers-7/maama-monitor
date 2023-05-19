
 <?php
include_once 'connection.php';
if(isset($_POST['submit']))
{
 $nationality = $_POST['nationality'];
 $travel_places = $_POST['travel_places'];
 $sur_name = $_POST['sur_name'];
 $first_name = $_POST['first_name'];
 $email = $_POST['email'];
$sql = "INSERT INTO bookings(nationality,travel_places,sur_name,first_name,email)
 VALUES ('$nationality','$travel_places','$sur_name','$first_name','$email')";
 if (mysqli_query($conn, $sql)) {

 echo "Your information has been submitted successfully !";
 header("Location: result.php");
 } else {
 echo "Error: " . $sql . ":-" . mysqli_error($conn);
 }
 mysqli_close($conn);
}
?>