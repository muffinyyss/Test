<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table, th, td{
            border:
        }
    </style>
</head>
<body>
    <table>
    <tr>
        <th>รหัสนักศึกษา</th>
        <th>ชื่อนักศึกษา</th>
        <th>ชื่อคณะที่นักศึกษาสังกัด</th>
        <th>รหัสวิชาเรียน</th>
        <th>ชื่อวิชาเรียน</th>
    </tr>
        <?php

        $conn = new PDO("mysql:host=localhost;dbname=curriculum;charset=utf8", "root", "");

        $sql = ("SELECT student.id, student.name, student.facid, subjects.id, subjects.name, faculty.name FROM student
        INNER JOIN subjects ON (student.id = subjects.student_id)
        INNER JOIN faculty ON (student.facid = faculty.id) ORDER BY student.id");
    
        $result = $conn->query($sql);

        while($row = $result->fetch()){
            echo "<tr>
                    <td> $row[0] </td>
                    <td> $row[1] </td>
                    <td> $row[5] </td>
                    <td> $row[3] </td>
                    <td> $row[4] </td>
                  </tr>";
        }
        $conn = null;
        ?>

    </table>
</body>
</html>



