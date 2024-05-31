<?php
// Database connection
$servername = "localhost"; // Usually "localhost"
$username = "root"; // Database username
$password = ""; // Database password
$dbname = "student_survey"; // Database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM survey_details";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "<table border='1'><tr><th>S.No</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Mobile Number</th><th>City</th><th>District</th><th>Date of Birth</th><th>Gender</th><th>Qualification</th><th>Last Studied In</th><th>Interested In</th><th>Intersr In Programing</th><th>Aim</th><th>Comments</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["first_name"  ]."</td><td>".$row["last_name"]."</td><td>".$row["email"]."</td><td>".$row["mobile_number"]."</td><td>".$row["city"]."</td><td>".$row["district"]."</td><td>".$row["dob"]."</td><td>".$row["gender"]."</td><td>".$row["qualification"]."</td><td>".$row["lstudy"]."</td><td>".$row["interested_in"]."</td><td>".$row["interested_programing"]."</td><td>".$row["aim"]."</td><td>".$row["comments"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
