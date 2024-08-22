<?php 
// Database connection settings
$host = 'dcms-dcms.h.aivencloud.com';  // Your Aiven PostgreSQL hostname
$port = '11259';  // Port provided by Aiven
$dbname = 'defaultdb';  // Your database name
$user = 'avnadmin';  // Your PostgreSQL username
$password = 'xxxxx';  // Your PostgreSQL password

// Connection string (DSN)
$conn_string = "host=$host port=$port dbname=$dbname user=$user password=$password";
$dbconn = pg_connect($conn_string);

if (!$dbconn) {
    echo "An error occurred while connecting to the database.\n";
    exit;
}
?>
