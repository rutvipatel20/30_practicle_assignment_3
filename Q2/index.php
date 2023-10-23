<?php
$xml = simplexml_load_file('data.xml');
if ($xml === false) {
    die('Error loading XML file');
}

$conn = mysqli_connect("localhost","root","","rutvi") or die("Connection Failed");
foreach ($xml->student as $student) {
    
    $name = $student->name;
    $email = $student->email;
    $contact = $student->contact;

    echo "Name : ".$name."<br>";
    echo "Email : ".$email."<br>";
    echo "Contact : ".$contact."<hr>";
    

    $sql = "INSERT INTO students (name, email, contact) VALUES ('$name', '$email', $contact)";
    if ($conn->query($sql) !== TRUE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
echo "Data imported successfully!";
?>
