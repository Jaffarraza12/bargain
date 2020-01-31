<?php

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'bargain_bargain');
define('DB_PASSWORD', '-KWMJu3BwJ');
define('DB_DATABASE', 'bargain_bargain');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');
error_reporting(0);

$con = mysqli_connect(DB_HOSTNAME,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
$sql = mysqli_query($con,"SELECT pd.`product_id`,pd.`name`,pd.`short_description`  FROM 
oc_product_description pd  INNER JOIN `oc_product_to_category` pc ON pc.`product_id` = pd.`product_id` 
WHERE pc.`category_id` IN (SELECT category_id FROM oc_category WHERE depart_id =1 OR depart_id=7) GROUP BY pd.product_id ") or die (mysqli_error($con));
?>
<table border="1">
    <thead>
        <th>ID</th>
        <th>NAME</th>
        <th>META DESCRIPTION</th>
    </thead>

<?php
$product = mysqli_fetch_object($sql);
echo html_entity_decode($product->short_description).'<br/>';

while($product = mysqli_fetch_object($sql)){
    $desc = explode('</li><li>',html_entity_decode(strtolower($product->short_description)));
    echo '<tbody>';
     echo '<td>'.$product->product_id.'</td>';
     echo '<td>'.$product->name.'</td>';
     if(is_array($desc)){
         echo  '<td>Shop '.ucfirst(strtolower($product->name)).' at Bargain.pk on affordable price . This product features '.str_replace('<ul><li>    ','',strip_tags($desc[0])).','.strip_tags($desc[1]).' and '.strip_tags($desc[2]).' . At Bargain we offer fast shipping, easy exchange & return and friendly customer service . Shop Now and Start Saving!.</td>';
     } else {

     }
    echo '</tbody>';

}
?>
</table>
