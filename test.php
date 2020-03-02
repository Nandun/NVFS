

<!DOCTYPE html>
<html>
<body>

<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:nvfs-test.database.windows.net,1433; Database = Testing", "Nandun", "false");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "Nandun", "pwd" => "{your_password_here}", "Database" => "Testing", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:nvfs-test.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>

</body>
</html>
