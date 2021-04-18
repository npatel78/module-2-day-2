<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Great PHP Work</title>
</head>

<body>
    <ul>
        <?php
        // declare array of students
        $students = ["Amy", "Stoney", "Chris", "Bruce"];
        // iterate through array one student at a time
        foreach ($students as $student) {
            // echo out the student using li tags
            echo "<li>$student" . " 😀" . "</li>";
        }
        ?>
    </ul>
</body>

</html>