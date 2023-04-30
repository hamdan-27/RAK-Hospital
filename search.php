<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>
<body>
    <?php
        require('connection.php');
        function drug_search() {
            global $conn;
            if (isset($_POST['searchdrug'])) {
                $id = $_POST['name'];
                $sql = "SELECT * FROM drug WHERE name LIKE '%$id%'";
                $result = mysqli_query($conn, $sql);
                $final = mysqli_num_rows($result);
                if ($final > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                        $name = $row['name'];
                        $barcode = $row['barcode'];
                        $insured = $row['insured'];
                        $status = $row['status'];
                        $price = $row['price'];
                        $quantity = $row['quantity'];
                        $registby = $row['registered_by'];
                        $date = $row['date'];

                        echo "<tr>
                        <td>$name</td>
                        <td>$barcode</td>
                        <td>$insured</td>
                        <td>$status</td>
                        <td>$price</td>
                        <td><a href='drugorder.php'>Order</a></td>
                        </tr>";
                    }
                } else {
                    echo "<script>alert('The record cannot be found.')</script>";
                }
            }
        }
    ?>
</body>
</html>