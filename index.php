
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exploring Basic PHP Elements</title>
</head>
<body>
    <h1>Exploring Basic PHP Elements</h1>

    <p>Johnathon Askey</p>
    <p><?php echo date("F j, Y"); ?></p>

    <?php
    $studentName = "Johnathon Askey";
    $courseNumber = 101;
    $isLearningPHP = true;

    function displayStudentInfo($name, $course) {
        return "Student: " . $name . " | Course: PHP " . $course;
    }

    echo "<h2>" . displayStudentInfo($studentName, $courseNumber) . "</h2>";

    echo "<p>JavaScript runs mainly in the web browser and makes web pages interactive. PHP runs on the web server and can generate dynamic web page content.</p>";

    if ($isLearningPHP) {
        echo "<p>I am learning the basics of PHP.</p>";
    }
    ?>
</body>
</html>
