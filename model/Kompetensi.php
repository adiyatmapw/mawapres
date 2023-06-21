<?php
require_once('../config/database.php');
class Kompetensi extends Database
{
	function __construct()
	{
		$this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->database);
		if (mysqli_connect_errno()) {
			echo "connection to database failed : " . mysqli_connect_error();
		}
	}

	function allKompetensi()
	{
		$data = mysqli_query($this->connection, "SELECT * FROM kompetensi");
		return $data;
	}

	function insertKompetensi($name, $nim, $url, $programstudi)
	{
		$query = "insert into kompetensi (nama,nim,dokumen,programstudi) values('$name','$nim','$url','$programstudi')";
		if (!$this->connection->query($query)) {
			echo ("Error description: " . $this->connection->error);
		}
	}

	function editKompetensi($id, $status)
	{
		$query = mysqli_query($this->connection, "UPDATE Kompetensi SET status='$status' WHERE id=$id");
	}

	function getKompetensi($id)
	{
		$title = "Dokumen Kompetensi";
		$query = "SELECT * FROM Kompetensi WHERE id='$id' ";
		$data = mysqli_query($this->connection, $query);
		if (!$this->connection->query($query)) {
			echo ("Error description: " . $this->connection->error);
		}
		return mysqli_fetch_assoc($data);
		return $title;
	}
}
