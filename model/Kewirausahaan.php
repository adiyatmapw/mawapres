<?php
require_once('../config/database.php');
class Kewirausahaan extends Database
{
	function __construct()
	{
		$this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->database);
		if (mysqli_connect_errno()) {
			echo "connection to database failed : " . mysqli_connect_error();
		}
	}

	function allKewirausahaan()
	{
		$data = mysqli_query($this->connection, "SELECT * FROM Kewirausahaan");
		return $data;
	}

	function insertKewirausahaan($name, $nim, $url, $programstudi)
	{
		$query = "insert into Kewirausahaan (nama,nim,dokumen,programstudi) values('$name','$nim','$url','$programstudi')";
		if (!$this->connection->query($query)) {
			echo ("Error description: " . $this->connection->error);
		}
	}

	function editKewirausahaan($id, $status)
	{
		$query = mysqli_query($this->connection, "UPDATE Kewirausahaan SET status='$status' WHERE id=$id");
	}

	function getKewirausahaan($id)
	{
		$query = "SELECT * FROM Kewirausahaan WHERE id='$id' ";
		$data = mysqli_query($this->connection, $query);
		if (!$this->connection->query($query)) {
			echo ("Error description: " . $this->connection->error);
		}
		return mysqli_fetch_assoc($data);
	}
}
