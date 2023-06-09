<?php
require_once('../config/database.php');
class Cv extends Database
{
	function __construct()
	{
		$this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->database);
		if (mysqli_connect_errno()) {
			echo "connection to database failed : " . mysqli_connect_error();
		}
	}

	function allCv()
	{
		$data = mysqli_query($this->connection, "SELECT * FROM Cv");
		return $data;
	}

	function insertCv($name, $nim, $url, $programstudi)
	{
		$query = "insert into Cv (nama,nim,dokumen,programstudi) values('$name','$nim','$url','$programstudi')";
		if (!$this->connection->query($query)) {
			echo ("Error description: " . $this->connection->error);
		}
	}
}
