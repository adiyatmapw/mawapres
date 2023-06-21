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

	function allRegistrasi($nim)
	{
		$data = mysqli_query($this->connection, "SELECT * FROM registrasi WHERE nim='$nim'");
		return $data;
	}

	function insertRegistrasi($nama, $nim, $fakultas,$programstudi, $semester, $nohp)
	{
		$query = "insert into registrasi (nama,nim,fakultas,programstudi,semester,nohp) values('$nama','$nim','$fakultas','$programstudi','$semester','$nohp')";
		if (!$this->connection->query($query)) {
			echo ("Error description: " . $this->connection->error);
		}
	}

	function getKompetensi($nim)
	{
		$data = mysqli_query($this->connection, "SELECT * FROM Kompetensi WHERE nim='$nim'");
		return $data;
	}

	function getRekognisi($nim)
	{
		$data = mysqli_query($this->connection, "SELECT * FROM Rekognisi WHERE nim='$nim'");
		return $data;
	}

	function getPenghargaan($nim)
	{
		$data = mysqli_query($this->connection, "SELECT * FROM Penghargaan WHERE nim='$nim'");
		return $data;
	}

	function getKarirOrganisasi($nim)
	{
		$data = mysqli_query($this->connection, "SELECT * FROM Karir WHERE nim='$nim'");
		return $data;
	}

	function getHasilKarya($nim)
	{
		$data = mysqli_query($this->connection, "SELECT * FROM HasilKarya WHERE nim='$nim'");
		return $data;
	}

	function getAksiKemanusiaan($nim)
	{
		$data = mysqli_query($this->connection, "SELECT * FROM AksiKemanusiaan WHERE nim='$nim'");
		return $data;
	}

	function getKewirausahaan($nim)
	{
		$data = mysqli_query($this->connection, "SELECT * FROM Kewirausahaan WHERE nim='$nim'");
		return $data;
	}

	function getSuratRekomendasi($nim)
	{
		$data = mysqli_query($this->connection, "SELECT * FROM Rekomendasi WHERE nim='$nim'");
		return $data;
	}

	function getSuratGagasan($nim)
	{
		$data = mysqli_query($this->connection, "SELECT * FROM SuratGagasan WHERE nim='$nim'");
		return $data;
	}

	function getCv($nim)
	{
		$data = mysqli_query($this->connection, "SELECT * FROM Cv WHERE nim='$nim'");
		return $data;
	}

	function getPakta($nim)
	{
		$data = mysqli_query($this->connection, "SELECT * FROM Pakta WHERE nim='$nim'");
		return $data;
	}

	function getSertifikat($nim)
	{
		$data = mysqli_query($this->connection, "SELECT * FROM Sertifikat WHERE nim='$nim'");
		return $data;
	}


}
