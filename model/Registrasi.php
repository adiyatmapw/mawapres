<?php
require_once('../config/database.php');
class Registrasi extends Database
{
	function __construct()
	{
		$this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->database);
		if (mysqli_connect_errno()) {
			echo "connection to database failed : " . mysqli_connect_error();
		}
	}

	function allRegistrasi()
	{
		$data = mysqli_query($this->connection, "SELECT * FROM registrasi");
		return $data;
	}

	function insertRegistrasi($nama, $nim, $fakultas,$programstudi, $semester, $nohp)
	{
		$query = "insert into registrasi (nama,nim,fakultas,programstudi,semester,nohp) values('$nama','$nim','$fakultas','$programstudi','$semester','$nohp')";
		if (!$this->connection->query($query)) {
			echo ("Error description: " . $this->connection->error);
		}
	}
}
