<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cryptography</title>
</head>
<body>
<?php
    require_once "cryptography.php";
?>
    <table border="1">
        <tr>
            <th>Code</th>
            <th>Product</th>
            <th>Action</th>
        </tr>
        <tr>
            <td>12345</td>
            <td>Sepatu A</td>
            <td><a href="received.php?code=<?= encrypt("12345")  ?>"><button>Send Code</button></a></td>
        </tr>
        <tr>
            <td>12346</td>
            <td>Sepatu B</td>
            <td><a href="received.php?code=<?= encrypt("12346")  ?>"><button>Send Code</button></a></td>
        </tr>
    </table>
</body>
</html>