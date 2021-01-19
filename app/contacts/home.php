<?php
function pdo_connect_mysql() {
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'admin';
    $DATABASE_PASS = 'P@ssw0rd';
    $DATABASE_NAME = 'practice';
    $DATABASE_PORT = 3306;
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!, Message : '. $exception->getMessage());
    }
}
function template_header($title) {
echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link href="http://localhost/source-code/practice/crud-php-app/app/assets/style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
    <nav class="navtop">
    	<div>
    		<h1>Website Title</h1>
            <a href="http://localhost/source-code/practice/crud-php-app/app/index.php"><i class="fas fa-home"></i>Home</a>
    		<a href="http://localhost/source-code/practice/crud-php-app/app/contacts/read.php"><i class="fas fa-address-book"></i>Contacts</a>
    	</div>
    </nav>
EOT;
}
function template_footer() {
echo <<<EOT
    </body>
</html>
EOT;
}
?>