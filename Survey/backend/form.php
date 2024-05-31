<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $mob_num = $_POST['mob_num'];
    $city = $_POST['city'];
    $district = $_POST['district'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $qualification = $_POST['qualification'];
    $lstudy = $_POST['lstudy'];
    $interested_in = $_POST['interested'];
    $interested_programing = $_POST['interested_programing'];
    $aim = $_POST['aim'];
    $comments = $_POST['comments'];

    // Database connection
    $servername = "localhost"; // Usually "localhost"
    $username = "root"; // Database username
    $password = ""; // Database password
    $dbname = "student_survey"; // Database name

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO survey_details (first_name, last_name, email, mobile_number, city, district, dob, gender, qualification, lstudy, interested_in, interested_programing, aim, comments)
    VALUES ('$fname', '$lname', '$email', '$mob_num', '$city', '$district', '$dob', '$gender', '$qualification', '$lstudy', '$interested_in', '$interested_programing', '$aim', '$comments')";

    if ($conn->query($sql) === TRUE) {
        ?>
        <script>
            alert("Your record was added sucessfully")
            window.location="../Index.html"
        </script>
        <?
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
