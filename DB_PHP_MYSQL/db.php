<!DOCTYPE html>
<html>
<head>
    <title>Experiment 5 - MySQL with PHP</title>
    <style>
        body { font-family: Arial; }
        table {
            border-collapse: collapse;
            width: 70%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        .box {
            width: 400px;
            border: 1px solid #999;
            padding: 15px;
        }
    </style>
</head>
<body>

<h1>Experiment 5: MySQL with PHP</h1>

<?php
/* =========================
   DATABASE CONNECTION
   ========================= */
$conn = mysqli_connect(
    "localhost",
    "root",
    "Poulami#2004",
    "student_details"
);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

echo "<b>Database connected successfully.</b><br><br>";

/* =========================
   INSERT RECORD
   ========================= */
if (isset($_POST['insert'])) {
    $name  = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO student (name, email) VALUES ('$name', '$email')";
    mysqli_query($conn, $sql);

    echo "Record inserted successfully.<br>";
}

/* =========================
   UPDATE RECORD
   ========================= */
if (isset($_POST['update'])) {
    $id    = $_POST['id'];
    $name  = $_POST['name'];
    $email = $_POST['email'];

    $sql = "UPDATE student SET name='$name', email='$email' WHERE id=$id";
    mysqli_query($conn, $sql);

    echo "Record updated successfully.<br>";
}

/* =========================
   DELETE RECORD
   ========================= */
if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM student WHERE id=$id";
    mysqli_query($conn, $sql);

    echo "Record deleted successfully.<br>";
}
?>

<hr>

<!-- FORM SECTION -->
<div class="box">
<h3>Student Form</h3>

<form method="post">
    ID (for Update/Delete): <br>
    <input type="number" name="id"><br><br>

    Name: <br>
    <input type="text" name="name"><br><br>

    Email: <br>
    <input type="email" name="email"><br><br>

    <input type="submit" name="insert" value="Insert">
    <input type="submit" name="update" value="Update">
    <input type="submit" name="delete" value="Delete">
</form>
</div>

<hr>

<!-- DISPLAY RECORDS -->
<h2>Student Records</h2>

<?php
$result = mysqli_query($conn, "SELECT * FROM student");

echo "<table>";
echo "<tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
      </tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "</tr>";
}

echo "</table>";

mysqli_close($conn);
?>

</body>
</html>