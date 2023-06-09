<?php
require_once('../config/database.php');
class Sertifikat extends Database
{
	function __construct()
	{
		$this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->database);
		if (mysqli_connect_errno()) {
			echo "connection to database failed : " . mysqli_connect_error();
		}
	}

	function allSertifikat()
	{
		$data = mysqli_query($this->connection, "SELECT * FROM Sertifikat");
		return $data;
	}

	function insertSertifikat($name, $nim, $url, $programstudi)
	{
		$query = "insert into Sertifikat (nama,nim,dokumen,programstudi) values('$name','$nim','$url','$programstudi')";
		if (!$this->connection->query($query)) {
			echo ("Error description: " . $this->connection->error);
		}
	}
}
