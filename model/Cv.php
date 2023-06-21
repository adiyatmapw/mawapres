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
	
	function editCv($id, $status)
	{
		$query = mysqli_query($this->connection, "UPDATE Cv SET status='$status' WHERE id=$id");
	}

	function getCv($id)
	{
		$query = "SELECT * FROM Cv WHERE id='$id' ";
		$data = mysqli_query($this->connection, $query);
		if (!$this->connection->query($query)) {
			echo ("Error description: " . $this->connection->error);
		}
		return mysqli_fetch_assoc($data);
	}
}
