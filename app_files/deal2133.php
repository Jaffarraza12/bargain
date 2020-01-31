<?php

require './../config.php';
// Check connection
$conn = mysqli_connect(DB_HOSTNAME,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
    mysqli_query($conn," UPDATE `oc_product` SET `is_deal` = 0 ");
    echo "Affected rows: " . mysqli_affected_rows($conn);
    mysqli_close($conn);
}