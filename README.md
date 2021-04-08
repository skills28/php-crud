# PHP Basic CRUD App

- PHP Version ~~**7.4.16**~~
- Mysql Version ~~**5.3.8**~~
- Bootstrap Version ~~**4**~~
- Laragon (https://laragon.org/)

> ### database table

```mysql

CREATE TABLE `post` (
	`post_id` INT(11) NOT NULL AUTO_INCREMENT,
	`title` TEXT NULL,
	`description` TEXT NULL,
	`languages` TEXT NULL,
	PRIMARY KEY (`post_id`)
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
AUTO_INCREMENT=18
;

```

> ### conn.php file

```php

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crudapp";

// Create connection
$conn = new mysqli($servername, $username, $password , $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

```

