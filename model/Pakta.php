<?php
require_once('../config/database.php');
class Pakta extends Database
{
	function __construct()
	{
		$this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->database);
		if (mysqli_connect_errno()) {
			echo "connection to database failed : " . mysqli_connect_error();
		}
	}

	function allPakta()
	{
		$data = mysqli_query($this->connection, "SELECT * FROM Pakta");
		return $data;
	}

	function insertPakta($name, $nim, $url, $programstudi)
	{
		$query = "insert into Pakta (nama,nim,dokumen,programstudi) values('$name','$nim','$url','$programstudi')";
		if (!$this->connection->query($query)) {
			echo ("Error description: " . $this->connection->error);
		}
	}

	function editPakta($id, $status)
	{
		$query = mysqli_query($this->connection, "UPDATE Pakta SET status='$status' WHERE id=$id");
	}

	function getPakta($id)
	{
		$query = "SELECT * FROM Pakta WHERE id='$id' ";
		$data = mysqli_query($this->connection, $query);
		if (!$this->connection->query($query)) {
			echo ("Error description: " . $this->connection->error);
		}
		return mysqli_fetch_assoc($data);
	}
}
