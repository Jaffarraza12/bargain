<?php

require './../config.php';
// Check connection
$conn = mysqli_connect(DB_HOSTNAME,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
    $date = date('Y-m-d');
    mysqli_query($conn," DELETE FROM oc_product_hotbuy   WHERE date_end <='".$date."'");
    echo "Affected rows: " . mysqli_affected_rows($conn);
    mysqli_close($conn);
}