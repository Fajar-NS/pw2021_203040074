-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Mar 2021 pada 15.54
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040074`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `img` varchar(150) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `informasi produk` varchar(255) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `harga` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `img`, `nama`, `informasi produk`, `jenis`, `harga`) VALUES
(5, 'JS.jpg', 'JAVASCRIPT', 'Buku Pemrograman Javascript Untuk Aplikasi Web Pengarang : Betha Sidik Penerbit : Informatika Tahun : 2018 Tebal : 540 Halaman Disertai CD', 'BUKU', 70000),
(7, 'python.jpg', 'PYTHON', 'penerbit andi publisherbuku di jamin original 100% diskon silakan di order', 'BUKU', 78000),
(8, 'c++.jpg', 'C++', 'Pembahasan Buku : Program Pertama C dan C ++\r\nTipe Data, variabel, dan Operasi Perhitungan\r\nInput dan Output Data\r\nPercabangan\r\nPerulangan\r\nFunctoin\r\nArray\r\nStruct\r\nString dan Manipulasinya\r\nPointer\r\nOperasi File\r\nBuku Pemrograman C & C++ ini ditujukan un', 'BUKU', 85000),
(9, 'ruby.jpg', 'RUBY', 'Judul : Mudah Belajar RUBY Disertai : CD SorceCODE dan Program Pendukung Penulis : Budi Raharjo Penerbit : Informatika Tahun : Mei 2017', 'BUKU', 82000),
(10, 'php.jpg', 'PHP', 'Materi Pembahasan\r\nMemasang PHP Di Server Web Windows,\r\nDasar Penulisan Program PHP Sederhana,\r\nVariabel dan Tipe Data Array,\r\nStruktur Kontrol,\r\nFungsi,\r\nModularisasi,\r\nPemrosesan File,\r\nPengolahan Data dari Form,\r\nVariabel Server Web,\r\nDeklarasi Dan Mek', 'BUKU', 95000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
