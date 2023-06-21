<?php
require_once('../config/database.php');
class Rekognisi extends Database
{
	function __construct()
	{
		$this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->database);
		if (mysqli_connect_errno()) {
			echo "connection to database failed : " . mysqli_connect_error();
		}
	}

	function allRekognisi()
	{
		$data = mysqli_query($this->connection, "SELECT * FROM rekognisi");
		return $data;
	}

	function insertRekognisi($name, $nim, $url, $programstudi)
	{
		$query = "insert into Rekognisi (nama,nim,dokumen,programstudi) values('$name','$nim','$url','$programstudi')";
		if (!$this->connection->query($query)) {
			echo ("Error description: " . $this->connection->error);
		}
	}

	function editRekognisi($id, $status)
	{
		$query = mysqli_query($this->connection, "UPDATE Rekognisi SET status='$status' WHERE id=$id");
	}

	function getRekognisi($id)
	{
		$query = "SELECT * FROM Rekognisi WHERE id='$id' ";
		$data = mysqli_query($this->connection, $query);
		if (!$this->connection->query($query)) {
			echo ("Error description: " . $this->connection->error);
		}
		return mysqli_fetch_assoc($data);
	}
}
