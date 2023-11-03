-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Apr 2023 pada 09.40
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banksampah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `ID` int(55) NOT NULL,
  `ABOUT` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`ID`, `ABOUT`) VALUES
(2, 'Bank Sampah adalah sebuah inisiatif berbasis komunitas yang mendorong pemisahan dan pengelolaan sampah. Bank Sampah merupakan sistem di mana individu dan rumah tangga dapat menyetorkan sampah mereka yang dapat didaur ulang ke tempat yang disediakan. Sampah-sampah ini kemudian akan diolah dan dijual kembali untuk menjadi produk yang bernilai ekonomi. Selain memberikan manfaat lingkungan, Bank Sampah juga memberikan manfaat ekonomi dan sosial bagi masyarakat. Selain itu, Bank Sampah juga dapat mempromosikan kesadaran masyarakat tentang pentingnya pengelolaan sampah yang baik dan membantu meningkatkan partisipasi masyarakat dalam praktek-praktek pengelolaan sampah yang berkelanjutan.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aktivitas`
--

CREATE TABLE `aktivitas` (
  `ID` int(55) NOT NULL,
  `ID_USER` int(55) NOT NULL,
  `TANGGAL` date NOT NULL,
  `TYPE` varchar(255) NOT NULL,
  `JUMLAH` int(255) NOT NULL,
  `UANG` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `aktivitas`
--

INSERT INTO `aktivitas` (`ID`, `ID_USER`, `TANGGAL`, `TYPE`, `JUMLAH`, `UANG`) VALUES
(1, 1, '2023-04-09', 'ORGANIK', 2, 3600),
(2, 1, '2023-04-09', 'ANORGANIK', 1, 2600),
(3, 1, '2023-04-09', 'ORGANIK', 1, 1800),
(4, 4, '2023-04-09', 'ORGANIK', 2, 3600),
(5, 4, '2023-04-10', 'ANORGANIK', 2, 5200),
(6, 4, '2023-04-10', 'ORGANIK', 1, 1800),
(7, 4, '2023-04-10', 'ANORGANIK', 3, 7800),
(8, 1, '2023-04-27', 'ORGANIK', 3, 5400),
(9, 4, '2023-04-27', 'ANORGANIK', 5, 13000),
(10, 4, '2023-04-27', 'ORGANIK', 2, 3600),
(11, 4, '2023-04-28', 'ORGANIK', 1, 1800),
(12, 1, '2023-04-28', 'ANORGANIK', 1, 2600);

-- --------------------------------------------------------

--
-- Struktur dari tabel `aktivitasdustman`
--

CREATE TABLE `aktivitasdustman` (
  `ID` int(55) NOT NULL,
  `ID_USER` int(55) NOT NULL,
  `TANGGAL` varchar(255) NOT NULL,
  `TYPE` varchar(255) NOT NULL,
  `JUMLAH` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `aktivitasdustman`
--

INSERT INTO `aktivitasdustman` (`ID`, `ID_USER`, `TANGGAL`, `TYPE`, `JUMLAH`) VALUES
(1, 3, '2023-04-27', 'ORGANIK', 2),
(2, 3, '2023-04-27', 'ANORGANIK', 2),
(3, 5, '2023-04-27', 'ANORGANIK', 2),
(4, 3, '2023-04-28', 'ANORGANIK', 1),
(5, 3, '2023-04-28', 'ANORGANIK', 1),
(6, 5, '2023-04-28', 'ORGANIK', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `ID` int(100) NOT NULL,
  `NAMA` varchar(555) NOT NULL,
  `TANGGAL` date NOT NULL,
  `KETERANGAN` varchar(555) NOT NULL,
  `IMG` varchar(555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`ID`, `NAMA`, `TANGGAL`, `KETERANGAN`, `IMG`) VALUES
(1, 'Sosialisasi Bank Sampah Desa Pembangunan', '2023-04-08', 'Merupakan serangkaian  kegiatan sosialisasi bank sampah di desa pembangun dengan populasi sampah yang semakin meningkat setiap tahunnya. Mari tabung sampah mu bersama kami', '1.jpg'),
(2, 'Sosialisasi Bank sampah digital', '2023-04-09', 'Merupakan serangkaian kegiatan sosialisasi bank sampah digital di DKI JAKARTA yang merupakan daerah dengan populasi sampah dan manusia yang semakin meningkat setiap tahunnya. Mari tabung sampah mu bersama kami', '2.jpeg'),
(3, 'Sosialisasi Bank sampah dahlia', '2023-04-10', 'Merupakan serangkaian kegiatan sosialisasi bank sampah di dahlia dengan populasi sampah yang semakin meningkat setiap tahunnya. Mari tabung sampah mu bersama kami', '3.jpg'),
(4, 'Sosialisasi Bank Sampah di Kecamatan Grogol', '2023-04-11', 'Merupakan serangkaian kegiatan sosialisasi bank sampah di Kecamatan Grogol dengan populasi sampah yang semakin meningkat setiap tahunnya. Mari tabung sampah mu bersama kami', '4.jpg'),
(5, 'Sosialisasi Bank Sampah di kelurahan Jombang', '2023-04-12', 'Merupakan serangkaian kegiatan sosialisasi bank sampah di kelurahan Jombang dengan populasi sampah yang semakin meningkat setiap tahunnya. Mari tabung sampah mu bersama kami', '5.jpg'),
(6, 'Sosialisasi Bank Sampah Kelurahan Petamburan', '2023-04-13', 'Merupakan serangkaian kegiatan sosialisasi bank sampah di kelurahan petamburan dengan populasi sampah yang semakin meningkat setiap tahunnya. Mari tabung sampah mu bersama kami', '6.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `ID` int(100) NOT NULL,
  `TANGGAL` date NOT NULL,
  `KETERANGAN` varchar(255) NOT NULL,
  `IMG` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`ID`, `TANGGAL`, `KETERANGAN`, `IMG`) VALUES
(1, '2023-04-08', 'Merupakan kegiatan sosialisasi bank sampah di desa pembangun', '1.jpg'),
(2, '2023-04-09', 'Merupakan kegiatan sosialisasi bank sampah secara digital', '2.jpeg'),
(3, '2023-04-10', 'Merupakan kegiatan sosialisasi bank sampah dahlia', '3.jpg'),
(4, '2023-04-11', 'Merupakan kegiatan sosialisasi bank sampah di Kecamatan grogol', '4.jpg'),
(5, '2023-04-12', 'Merupakan kegiatan sosialisasi bank sampah di Kelurahan Jombang', '5.jpg'),
(6, '2023-04-13', 'Merupakan kegiatan sosialisasi bank sampah di kelurahan petamburan', '6.jpg'),
(7, '2023-04-14', 'Melakukan daru ulang sampah plastik di Kabupaten serang Banten', '7.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `ID` int(155) NOT NULL,
  `NAMA` varchar(1000) NOT NULL,
  `EMAIL` varchar(1000) NOT NULL,
  `SUBJEK` varchar(1000) NOT NULL,
  `PESAN` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`ID`, `NAMA`, `EMAIL`, `SUBJEK`, `PESAN`) VALUES
(1, 'Test', 'test@gmail.com', 'test satu', 'ini adalah sebuah test untuk mencoba'),
(2, 'Doni', 'doni@gmail.com', 'Testing', 'Apakah bisa untuk menabung sampah file-file ?');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `ID` int(100) NOT NULL,
  `NAMA` varchar(500) NOT NULL,
  `HARGA` int(255) NOT NULL,
  `IMG` varchar(500) NOT NULL,
  `STOK` varchar(555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`ID`, `NAMA`, `HARGA`, `IMG`, `STOK`) VALUES
(1, 'Tas ', 160000, 'tasplastik.jpg', 'TERSEDIA'),
(2, 'Dompet', 120000, 'dompet.png', 'TERSEDIA'),
(3, 'Tempat Pensil', 45000, 'tempatpensil.jpeg', 'TERSEDIA'),
(4, 'Multi Bucket', 85000, 'Multibucket.jpg', 'TERSEDIA'),
(5, 'Vas Bunga', 65000, 'vasbungaplastik.jpg', 'TERSEDIA'),
(6, 'Bingkai', 135000, 'bingkai.jpg', 'TERSEDIA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profiledustman`
--

CREATE TABLE `profiledustman` (
  `ID` int(55) NOT NULL,
  `ID_USER` int(55) NOT NULL,
  `NAMA` varchar(255) NOT NULL,
  `NOTELP` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `ALAMAT` varchar(255) NOT NULL,
  `JUMLAH` int(55) NOT NULL,
  `IMG` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `profiledustman`
--

INSERT INTO `profiledustman` (`ID`, `ID_USER`, `NAMA`, `NOTELP`, `EMAIL`, `ALAMAT`, `JUMLAH`, `IMG`) VALUES
(1, 3, 'dustman1', '08769876987', 'dustman1@gmail.com', 'Tangerang selatan ', 6, 'download.jpg'),
(2, 5, 'Dustman2', '085676453425', 'dustman2@gmail.com', 'Jakarta Selatan', 4, 'user.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profiletamu`
--

CREATE TABLE `profiletamu` (
  `ID` int(100) NOT NULL,
  `ID_USER` int(100) NOT NULL,
  `NAMA` varchar(555) NOT NULL,
  `NOTELP` varchar(555) NOT NULL,
  `EMAIL` varchar(555) NOT NULL,
  `ALAMAT` varchar(555) NOT NULL,
  `SALDO` int(100) NOT NULL,
  `IMG` varchar(555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `profiletamu`
--

INSERT INTO `profiletamu` (`ID`, `ID_USER`, `NAMA`, `NOTELP`, `EMAIL`, `ALAMAT`, `SALDO`, `IMG`) VALUES
(2, 1, 'test', '085688888', 'test@gmail.com', 'test', 16000, 'download.jpg'),
(3, 4, 'Doni satria setiabudI', '085658336398', 'donii@gmail.com', 'Puri Bintaro IndaH', 36800, 'sd.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sampah`
--

CREATE TABLE `sampah` (
  `ID` int(55) NOT NULL,
  `ORGANIK` float NOT NULL,
  `ANORGANIK` float NOT NULL,
  `TOTAL` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sampah`
--

INSERT INTO `sampah` (`ID`, `ORGANIK`, `ANORGANIK`, `TOTAL`) VALUES
(1, 8, 6, 14);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `ID` int(100) NOT NULL,
  `USERNAME` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`ID`, `USERNAME`, `EMAIL`, `PASSWORD`) VALUES
(1, 'Test', 'test@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'Admin1', 'admin1@gmail.com', 'e00cf25ad42683b3df678c61f42c6bda'),
(3, 'Dustman1', 'dustman1@gmail.com', '52f2e41e646a1ecdead1d7a6a1994c5e'),
(4, 'Doni satria setiabudi', 'doni@gmail.com', '2da9cd653f63c010b6d6c5a5ad73fe32'),
(5, 'dustman2', 'dustman2@gmail.com', '85864e4b0d70cb6b56bbbbbca3abd0bf');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `aktivitas`
--
ALTER TABLE `aktivitas`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_USER` (`ID_USER`);

--
-- Indeks untuk tabel `aktivitasdustman`
--
ALTER TABLE `aktivitasdustman`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_USER` (`ID_USER`);

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `profiledustman`
--
ALTER TABLE `profiledustman`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_USER` (`ID_USER`);

--
-- Indeks untuk tabel `profiletamu`
--
ALTER TABLE `profiletamu`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `profile` (`ID_USER`);

--
-- Indeks untuk tabel `sampah`
--
ALTER TABLE `sampah`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about`
--
ALTER TABLE `about`
  MODIFY `ID` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `aktivitas`
--
ALTER TABLE `aktivitas`
  MODIFY `ID` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `aktivitasdustman`
--
ALTER TABLE `aktivitasdustman`
  MODIFY `ID` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `event`
--
ALTER TABLE `event`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `ID` int(155) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `profiledustman`
--
ALTER TABLE `profiledustman`
  MODIFY `ID` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `profiletamu`
--
ALTER TABLE `profiletamu`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `sampah`
--
ALTER TABLE `sampah`
  MODIFY `ID` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `aktivitas`
--
ALTER TABLE `aktivitas`
  ADD CONSTRAINT `aktivitas_ibfk_1` FOREIGN KEY (`ID_USER`) REFERENCES `users` (`ID`);

--
-- Ketidakleluasaan untuk tabel `aktivitasdustman`
--
ALTER TABLE `aktivitasdustman`
  ADD CONSTRAINT `aktivitasdustman_ibfk_1` FOREIGN KEY (`ID_USER`) REFERENCES `users` (`ID`);

--
-- Ketidakleluasaan untuk tabel `profiledustman`
--
ALTER TABLE `profiledustman`
  ADD CONSTRAINT `profiledustman_ibfk_1` FOREIGN KEY (`ID_USER`) REFERENCES `users` (`ID`);

--
-- Ketidakleluasaan untuk tabel `profiletamu`
--
ALTER TABLE `profiletamu`
  ADD CONSTRAINT `profile` FOREIGN KEY (`ID_USER`) REFERENCES `users` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
