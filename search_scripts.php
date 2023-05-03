<?php
    require_once('connection.php');
    function drug_search() {
        global $conn;
        if (isset($_POST['searchdrug'])) {
            $id = $_POST['name'];
            $sql = "SELECT * FROM drug WHERE name LIKE '%$id%'";
            $result = mysqli_query($conn, $sql);
            $final = mysqli_num_rows($result);
            
            if ($final > 0) {
                $items = array();
                while ($row = mysqli_fetch_array($result)) {
                    $name = $row['name'];
                    $barcode = $row['barcode'];
                    $insured = $row['insured'];
                    $status = $row['status'];
                    $price = $row['price'];
                    $quantity = $row['quantity'];
                    $registby = $row['registered_by'];
                    $date = $row['date'];
                    
                    array_push($items, $name, $barcode, $insured, $status, $price, $quantity, $registby, $date);    

                    echo "<tr>
                        <form action='drugsearchorder.php' method='post'>
                            <td><input name='name' class='form-control' value='$name' readonly></td>
                            <td>$barcode</td>
                            <td>$insured</td>
                            <td>$status</td>
                            <td>$price/- AED</td>
                            <td><input type='submit' name='drug-order' value='Order'></td>
                        </form>
                    </tr>";

                    
                } return $items;
            } else {
                echo "<tr>
                        <td></td>
                        <td></td>
                        <td style='color:red;'>No results</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>";
                echo "<script>alert('No records found.')</script>";
            }
        }
    }
?>