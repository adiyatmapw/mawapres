<?php
require_once('../config/database.php');
class Rekomendasi extends Database
{
	function __construct()
	{
		$this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->database);
		if (mysqli_connect_errno()) {
			echo "connection to database failed : " . mysqli_connect_error();
		}
	}

	function allRekomendasi()
	{
		$data = mysqli_query($this->connection, "SELECT * FROM Rekomendasi");
		return $data;
	}

	function insertRekomendasi($name, $nim, $url, $programstudi)
	{
		$query = "insert into Rekomendasi (nama,nim,dokumen,programstudi) values('$name','$nim','$url','$programstudi')";
		if (!$this->connection->query($query)) {
			echo ("Error description: " . $this->connection->error);
		}
	}
}
