<?php
require_once('../config/database.php');
class SuratGagasan extends Database
{
	function __construct()
	{
		$this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->database);
		if (mysqli_connect_errno()) {
			echo "connection to database failed : " . mysqli_connect_error();
		}
	}

	function allSuratGagasan()
	{
		$data = mysqli_query($this->connection, "SELECT * FROM SuratGagasan");
		return $data;
	}

	function insertSuratGagasan($name, $nim, $url, $programstudi)
	{
		$query = "insert into SuratGagasan (nama,nim,dokumen,programstudi) values('$name','$nim','$url','$programstudi')";
		if (!$this->connection->query($query)) {
			echo ("Error description: " . $this->connection->error);
		}
	}

	function editSuratGagasan($id, $status)
	{
		$query = mysqli_query($this->connection, "UPDATE SuratGagasan SET status='$status' WHERE id=$id");
	}

	function getSuratGagasan($id)
	{
		$query = "SELECT * FROM SuratGagasan WHERE id='$id' ";
		$data = mysqli_query($this->connection, $query);
		if (!$this->connection->query($query)) {
			echo ("Error description: " . $this->connection->error);
		}
		return mysqli_fetch_assoc($data);
	}
}
