<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        font-size: 50px;
        padding: 10px;
        }

        table.center {
        margin-left: auto; 
        margin-right: auto;
        }
        tr:nth-child(even) {
        background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <ul>
        <li><a href="course.html">Courses</a> </li>
        <li><a href="student.html">Student</a> </li>
        <li><a href="gradebook.html">GradeBook</a> </li>
        <li><a href="reports.html">Reports</a> </li>
    </ul>
    <table class="center">
        <tr>
            <th>Student ID</th>
            <th>email Address</th>
            <th>Full Name</th>
            <th>Postal Address</th>
        </tr>
        <?php
            require 'db.php';
            $conn=$connection; 
            $sql = "SELECT * FROM student";
            $result = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_array($result))
            {
        ?>  
            <tr>
                <td><?php echo $row['studentid'] ?></td>
                <td><?php echo $row['emailaddress'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['postaladdress'] ?></td>
            </tr>
            <?php }  ?>
    </table>
</body>
</html>