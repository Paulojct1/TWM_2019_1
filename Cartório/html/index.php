<?php

include 'db_conn.php';

$conn = OpenCon();

echo "Connected Successfully";

CloseCon($conn);

?>