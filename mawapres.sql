-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jun 2023 pada 22.42
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aksikemanusiaan`
--

CREATE TABLE `aksikemanusiaan` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `nim` int(64) NOT NULL,
  `dokumen` varchar(512) NOT NULL,
  `programstudi` varchar(64) NOT NULL,
  `status` varchar(64) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cv`
--

CREATE TABLE `cv` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `nim` int(64) NOT NULL,
  `dokumen` varchar(512) NOT NULL,
  `programstudi` varchar(64) NOT NULL,
  `status` varchar(64) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasilkarya`
--

CREATE TABLE `hasilkarya` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `nim` int(64) NOT NULL,
  `dokumen` varchar(512) NOT NULL,
  `programstudi` varchar(64) NOT NULL,
  `status` varchar(64) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `karir`
--

CREATE TABLE `karir` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `nim` int(64) NOT NULL,
  `dokumen` varchar(512) NOT NULL,
  `programstudi` varchar(64) NOT NULL,
  `status` varchar(64) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kewirausahaan`
--

CREATE TABLE `kewirausahaan` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `nim` int(64) NOT NULL,
  `dokumen` varchar(512) NOT NULL,
  `programstudi` varchar(64) NOT NULL,
  `status` varchar(64) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kompetensi`
--

CREATE TABLE `kompetensi` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `nim` int(64) NOT NULL,
  `dokumen` varchar(512) NOT NULL,
  `programstudi` varchar(64) NOT NULL,
  `status` varchar(64) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pakta`
--

CREATE TABLE `pakta` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `nim` int(64) NOT NULL,
  `dokumen` varchar(512) NOT NULL,
  `programstudi` varchar(64) NOT NULL,
  `status` varchar(64) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penghargaan`
--

CREATE TABLE `penghargaan` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `nim` int(64) NOT NULL,
  `dokumen` varchar(512) NOT NULL,
  `programstudi` varchar(64) NOT NULL,
  `status` varchar(64) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `registrasi`
--

CREATE TABLE `registrasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `nim` int(64) NOT NULL,
  `fakultas` varchar(64) NOT NULL,
  `programstudi` varchar(64) NOT NULL,
  `status` varchar(64) NOT NULL DEFAULT 'Pending',
  `semester` int(11) NOT NULL,
  `nohp` int(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `registrasi`
--

INSERT INTO `registrasi` (`id`, `nama`, `nim`, `fakultas`, `programstudi`, `status`, `semester`, `nohp`) VALUES
(1, 'Ucup', 1131213456, 'Teknik Elektro', 'Fakultas Teknik Elektro', 'Pending', 6, 14045),
(2, 'Asep', 1201213232, 'Teknik Logistik', 'Fakultas Rekayasa Industri', 'ACC', 4, 812412412),
(3, 'Putri', 921904, 'Akuntansi', 'Fakultas Ekonomi & Bisnis', 'Pending', 34, 110);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekognisi`
--

CREATE TABLE `rekognisi` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `nim` varchar(64) NOT NULL,
  `dokumen` varchar(512) NOT NULL,
  `programstudi` varchar(64) NOT NULL,
  `status` varchar(64) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `rekognisi`
--

INSERT INTO `rekognisi` (`id`, `nama`, `nim`, `dokumen`, `programstudi`, `status`) VALUES
(1, 'Test', '123456', 'asdasd', 'DKV', 'Silahkan Registrasi'),
(2, 'Mahasiswa A', '1201202222', '../fileuploads/FotoProduk.png', 'Teknik Industri', 'Pending');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekomendasi`
--

CREATE TABLE `rekomendasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `nim` int(64) NOT NULL,
  `dokumen` varchar(512) NOT NULL,
  `programstudi` varchar(64) NOT NULL,
  `status` varchar(64) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sertifikat`
--

CREATE TABLE `sertifikat` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `nim` int(64) NOT NULL,
  `dokumen` varchar(512) NOT NULL,
  `programstudi` varchar(64) NOT NULL,
  `status` varchar(64) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `suratgagasan`
--

CREATE TABLE `suratgagasan` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `nim` int(64) NOT NULL,
  `dokumen` varchar(512) NOT NULL,
  `programstudi` varchar(64) NOT NULL,
  `status` varchar(64) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(100) NOT NULL,
  `programstudi` varchar(64) NOT NULL,
  `fakultas` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `role`, `programstudi`, `fakultas`) VALUES
(1, 'ditmawa', 'e10adc3949ba59abbe56e057f20f883e', 'Ditmawa', 'rl_ditmawa', '', ''),
(2, 'mahasiswa', 'e10adc3949ba59abbe56e057f20f883e', 'Mahasiswa A', 'rl_mahasiswa', 'Teknik Industri', 'Fakultas Rekayasa Industri');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aksikemanusiaan`
--
ALTER TABLE `aksikemanusiaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hasilkarya`
--
ALTER TABLE `hasilkarya`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `karir`
--
ALTER TABLE `karir`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kewirausahaan`
--
ALTER TABLE `kewirausahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kompetensi`
--
ALTER TABLE `kompetensi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pakta`
--
ALTER TABLE `pakta`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penghargaan`
--
ALTER TABLE `penghargaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rekognisi`
--
ALTER TABLE `rekognisi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rekomendasi`
--
ALTER TABLE `rekomendasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sertifikat`
--
ALTER TABLE `sertifikat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `suratgagasan`
--
ALTER TABLE `suratgagasan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `aksikemanusiaan`
--
ALTER TABLE `aksikemanusiaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `cv`
--
ALTER TABLE `cv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `hasilkarya`
--
ALTER TABLE `hasilkarya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `karir`
--
ALTER TABLE `karir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kewirausahaan`
--
ALTER TABLE `kewirausahaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kompetensi`
--
ALTER TABLE `kompetensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pakta`
--
ALTER TABLE `pakta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `penghargaan`
--
ALTER TABLE `penghargaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `rekognisi`
--
ALTER TABLE `rekognisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `rekomendasi`
--
ALTER TABLE `rekomendasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sertifikat`
--
ALTER TABLE `sertifikat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `suratgagasan`
--
ALTER TABLE `suratgagasan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
