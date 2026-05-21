<!DOCTYPE html>
<html lang="en">
<head>
	<title>Rohirrim Booking</title>
	<meta charset="utf-8">
	<meta name="description" content="Rohirrim Booking Form" >
	<meta name="keywords"    content="MiddleEarth, Tours, Rohan" >
	<meta name="author"      content="Grima Wormtongue" >

</head>


<body>
    <h1>Rohirrim Booking Form</h1>
<?php
$firstname  = isset($_POST['firstname']) ? $_POST['firstname'] : "not provided";
$lastname   = isset($_POST['lastname']) ? $_POST['lastname'] : "not provided";
$age        = isset($_POST['age']) ? $_POST['age'] : "not provided";
$species    = isset($_POST['species']) ? $_POST['species'] : "not provided";
switch ($species) {
    case "M":
        $speciesFull = "Human";
        break;
    case "D":
        $speciesFull = "Dwarf";
        break;
    case "E":
        $speciesFull = "Elf";
        break;
    case "H":
        $speciesFull = "Hobbit";
        break;
    default:
        $speciesFull = "Unknown";
}

$bookingOptions = [];

if (isset($_POST['accom'])) {
    $bookingOptions[] = "Accommodation";
}
if (isset($_POST['4day'])) {
    $bookingOptions[] = "4 Day Tour";
}
if (isset($_POST['10day'])) {
    $bookingOptions[] = "10 Day Tour";
}

$booking = empty($bookingOptions) ? "None selected" : implode(" and/or ", $bookingOptions);


$menu = isset($_POST['food']) ? $_POST['food'] : "Not provided";


$travellers = isset($_POST['partysize']) ? $_POST['partysize'] : "Not provided";

echo "<p>Welcome $firstname $lastname!</p>";
echo "<p>You are now booked on the $booking.</p>";
echo "<p>Species: $speciesFull</p>";
echo "<p>Age: $age</p>";
echo "<p>Meal Preference: $menu</p>";
echo "<p>Number of travellers: $travellers</p>";
?>
</body>
</html>