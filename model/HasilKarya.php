<?php
require_once('../config/database.php');
class HasilKarya extends Database
{
	function __construct()
	{
		$this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->database);
		if (mysqli_connect_errno()) {
			echo "connection to database failed : " . mysqli_connect_error();
		}
	}

	function allHasilKarya()
	{
		$data = mysqli_query($this->connection, "SELECT * FROM hasilkarya");
		return $data;
	}

	function insertHasilKarya($name, $nim, $url, $programstudi)
	{
		$query = "insert into HasilKarya (nama,nim,dokumen,programstudi) values('$name','$nim','$url','$programstudi')";
		if (!$this->connection->query($query)) {
			echo ("Error description: " . $this->connection->error);
		}
	}

	function editHasilKarya($id, $status)
	{
		$query = mysqli_query($this->connection, "UPDATE HasilKarya SET status='$status' WHERE id=$id");
	}

	function getHasilKarya($id)
	{
		$query = "SELECT * FROM HasilKarya WHERE id='$id' ";
		$data = mysqli_query($this->connection, $query);
		if (!$this->connection->query($query)) {
			echo ("Error description: " . $this->connection->error);
		}
		return mysqli_fetch_assoc($data);
	}
}
