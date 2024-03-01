<?php
# Open database connection.
require ( 'db_connection.php' ) ;

if ( isset( $_GET['id'] ) ) $id = $_GET['id'] ;
$sql = "DELETE FROM product WHERE id=$id";
if ($link->query($sql) === TRUE) {
    header("Location: admin.php");
} else {
    echo "Error deleting record: " . $link->error;
}
?>
