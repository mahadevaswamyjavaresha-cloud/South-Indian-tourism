<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

if ($_SESSION['role'] != "admin") {
    die("Access Denied! Only Admin can view this page.");
}

require_once "db.php";

$result = mysqli_query($conn, "SELECT * FROM users");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registered Users</title>
    <style>
        table{
            border-collapse: collapse;
            width:80%;
            margin:20px auto;
        }
        th,td{
            border:1px solid black;
            padding:10px;
            text-align:center;
        }
        th{
            background:#2e8b57;
            color:white;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Registered Users</h2>

<table>
<tr>
    <th>ID</th>
    <th>Username</th>
    <th>Email</th>
    <th>Password</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?= $row['id']; ?></td>
    <td><?= $row['username']; ?></td>
    <td><?= $row['email']; ?></td>
    <td><?= $row['password']; ?></td>
</tr>
<?php } ?>

</table>

</body>
</html>