-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Okt 2020 pada 15.05
-- Versi server: 10.2.10-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(32) NOT NULL,
  `nama_petugas` varchar(150) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `aktif` tinyint(4) NOT NULL,
  `id_petugas` varchar(32) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_petugas`, `username`, `password`, `deskripsi`, `aktif`, `id_petugas`, `created_at`, `updated_at`) VALUES
('e74abb9869a14ad2863804326fe068af', 'Super Admin', 'admin', '$2y$10$gy4TpJVLNxUH6163bnHZuO61zzxZiAtNcgv7d0F88TUoJWVa1GoU.', 'Super Admin', 1, '', '2020-07-19 00:00:00', '2020-07-19 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_riwayat_pasien`
--

CREATE TABLE `log_riwayat_pasien` (
  `id_riwayat` varchar(32) NOT NULL,
  `id_status` varchar(32) NOT NULL,
  `ktp_pasien` char(16) NOT NULL,
  `tanggal` datetime NOT NULL,
  `catatan` varchar(100) NOT NULL,
  `nama_lgkp` varchar(200) NOT NULL,
  `nama_status` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log_riwayat_pasien`
--

INSERT INTO `log_riwayat_pasien` (`id_riwayat`, `id_status`, `ktp_pasien`, `tanggal`, `catatan`, `nama_lgkp`, `nama_status`) VALUES
('11b3b5ad413843818a4875282600ff43', '7d1a75f25a254960901b1a2f8a8eaadc', '2234234234', '2020-07-21 07:50:17', 'asdasd', 'Namaku', 0),
('11f8ce7d1a634f54b83f9589dc5896d9', '85f58e5cc8de44a7b5cb7361044c565d', '3573055310990001', '2020-10-04 18:10:14', '', 'DEN AYU SAKINAH', 0),
('244a3151a563430ea1ea0828dcf7c61e', '7d1a75f25a254960901b1a2f8a8eaadc', '3525146802990003', '2020-07-21 08:11:08', '', 'mun', 0),
('248905f917a044239b3c17a24cf2d8c3', 'e4c19b9f7f484ecbb73e8c1de3a16525', '3525146507830003', '2020-07-21 12:13:42', '', 'ANIK NUR KHOLIFAH', 0),
('2bf72aef15de411eae5779f08782a14f', 'e4c19b9f7f484ecbb73e8c1de3a16525', '3525146802990003', '2020-07-21 08:10:46', '', 'mun', 0),
('3082ecfa1dd449f28ecdd936ac119763', 'ff91f9d34a70445a9e91b5853835b778', '3573055310990001', '2020-10-04 20:55:26', '', 'DEN AYU SAKINAH', 0),
('352f1165eb244411b38b4d70a17800a2', '9fb2114cb5dd4ab7bb0595c708d03a82', '1111111111111', '2020-07-21 07:50:36', '', 'safsdfsdfs', 0),
('55cc4457efbc436ab1cf80af170b1aa1', 'e4c19b9f7f484ecbb73e8c1de3a16525', '3525146802990001', '2020-07-21 08:38:18', '', 'DEN AYU SAKINAH', 0),
('7ba51da5a91b4b29b16482e8b027d549', '761056b2770c41659f133d341576d91d', '35251467890', '2020-10-02 22:01:12', '', 'DEN AYU SAKINAH', 0),
('8f0eea3de08445d99b754993fa288100', 'e4c19b9f7f484ecbb73e8c1de3a16525', '1111111111111', '2020-07-21 07:49:53', '', 'safsdfsdfs', 0),
('961ee746313d407898aaf20c455cd941', '7d1a75f25a254960901b1a2f8a8eaadc', '3525146507830003', '2020-07-21 12:13:24', '', 'ANIK NUR KHOLIFAH', 0),
('a50ffc177be74a3a93b306f42d424588', 'e4c19b9f7f484ecbb73e8c1de3a16525', '3525146802990001', '2020-07-21 09:28:41', '', 'DEN AYU SAKINAH', 0),
('ac16b318828c458ebb9c67266be846d1', '761056b2770c41659f133d341576d91d', '3573055310990001', '2020-10-04 18:08:33', '', 'DEN AYU SAKINAH', 0),
('b7423a71200c4dd1aa76f549e8c38d87', 'e4c19b9f7f484ecbb73e8c1de3a16525', '35251467890', '2020-07-21 08:13:31', '', 'arip2', 0),
('b8bf16035b2c40b58dfb7796e0b8bc24', 'e4c19b9f7f484ecbb73e8c1de3a16525', '3525146507830003', '2020-07-21 12:02:03', '', 'ANIK NUR KHOLIFAH', 0),
('b9a3f3f11b9c49fca4ecc0c8d03e97f3', 'e4c19b9f7f484ecbb73e8c1de3a16525', '2234234234', '2020-07-19 20:58:37', '', 'Namaku', 0),
('bf00802a9b0e402083a5d27c6afee874', '9fb2114cb5dd4ab7bb0595c708d03a82', '2234234234', '2020-07-20 10:55:27', '', 'Namaku', 0),
('d36f154755da41a78e2466fab1ef515f', '761056b2770c41659f133d341576d91d', '35251467891', '2020-10-05 14:35:01', '', 'hilmi', 0),
('de07cd53cceb492aa325689ee7a01c3a', 'e4c19b9f7f484ecbb73e8c1de3a16525', '3525141005960001', '2020-07-21 12:06:31', '', 'JEFFRY NASRI FARUKI', 0),
('deec9f629ea44348b6168d836dd958ed', 'e4c19b9f7f484ecbb73e8c1de3a16525', '2234234234', '2020-07-20 21:37:49', 'Sakit lagi cos', 'Namaku', 0),
('e5c60e0d4e894375a16cf1d7a4a8cddf', 'e4c19b9f7f484ecbb73e8c1de3a16525', '3573055310990001', '2020-07-21 08:32:47', '', 'bambang', 0),
('fc2538d86a4c44f99f38466e77f65d7d', '7d1a75f25a254960901b1a2f8a8eaadc', '3525146802990001', '2020-07-21 08:26:52', '', 'DEN AYU SAKINAH', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `nik` char(16) NOT NULL,
  `no_kk` char(16) NOT NULL,
  `nama_lgkp` varchar(200) NOT NULL,
  `tmpt_lhr` varchar(50) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `jenis_klmin` char(1) NOT NULL,
  `gol_darah` varchar(15) NOT NULL,
  `agama` varchar(25) NOT NULL,
  `no_akta_lhr` varchar(16) NOT NULL,
  `status_kawin` varchar(25) NOT NULL,
  `no_akta_kwn` varchar(16) NOT NULL,
  `tgl_kwn` date NOT NULL,
  `hub_kel` varchar(50) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `nama_lgkp_ibu` varchar(150) NOT NULL,
  `nama_lgkp_ayah` varchar(150) NOT NULL,
  `nama_kel` varchar(50) NOT NULL,
  `nama_kec` varchar(50) NOT NULL,
  `nama_kabupaten` varchar(50) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `no_rt` varchar(5) NOT NULL,
  `no_rw` varchar(5) NOT NULL,
  `id_ruang` varchar(32) NOT NULL,
  `id_petugas` varchar(32) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` varchar(32) NOT NULL,
  `nama_petugas` varchar(150) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `aktif` tinyint(4) NOT NULL,
  `created_by` varchar(64) NOT NULL,
  `modified_by` varchar(64) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `deskripsi`, `aktif`, `created_by`, `modified_by`, `created_at`, `updated_at`) VALUES
('77b1df0783cf49e7af7f1ed2033b7ecb', '1', 'petugas', '$2y$10$T2KGff/TzzjHU/A14Ddh3.fD2A3ufvrsGg6vxZGzzGnAhy8kSDebK', '', 1, 'admin', 'admin', '2020-10-02 21:53:29', '2020-10-02 21:53:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruang_rawat`
--

CREATE TABLE `ruang_rawat` (
  `id_ruang` varchar(32) NOT NULL,
  `zona_ruang` varchar(50) NOT NULL,
  `keterangan_ruang` varchar(25) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ruang_rawat`
--

INSERT INTO `ruang_rawat` (`id_ruang`, `zona_ruang`, `keterangan_ruang`, `created_at`, `updated_at`) VALUES
('0322cc04f4db4d42af9af396c3d88cf1', 'Hijau', 'iki wes tk gantiii', '2020-07-19 17:36:36', '2020-09-30 12:59:28'),
('410a8dcab656481080d1050441bb2972', 'Kuning', '', '2020-07-19 17:36:31', '2020-07-19 17:36:31'),
('421322abce564b8cbb054687a803e9f9', 'Merah', '', '2020-07-19 17:36:26', '2020-07-19 17:36:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_pasien`
--

CREATE TABLE `status_pasien` (
  `id_status` varchar(32) NOT NULL,
  `nama_status` varchar(25) NOT NULL,
  `keterangan_status` varchar(500) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status_pasien`
--

INSERT INTO `status_pasien` (`id_status`, `nama_status`, `keterangan_status`, `created_at`, `updated_at`) VALUES
('2c501cce5e8f4c13a5a8dbff9bfea05f', 'Kematian', '', '2020-07-21 13:37:00', '2020-07-21 13:37:00'),
('4691748e0fdc46c0a01c5cb766b37195', ' Pelaku Perjalanan', '', '2020-07-21 13:36:18', '2020-07-21 13:36:18'),
('761056b2770c41659f133d341576d91d', ' Kontak Erat', '', '2020-07-21 13:36:03', '2020-09-30 12:06:01'),
('7d1a75f25a254960901b1a2f8a8eaadc', 'Kasus Probable', '', '2020-07-19 17:35:49', '2020-07-21 13:34:52'),
('85f58e5cc8de44a7b5cb7361044c565d', 'Discarded', '', '2020-07-21 13:36:26', '2020-07-21 13:36:26'),
('9fb2114cb5dd4ab7bb0595c708d03a82', 'Kasus Konfirmasi', '', '2020-07-19 17:36:07', '2020-07-21 13:35:48'),
('e4c19b9f7f484ecbb73e8c1de3a16525', 'Kasus Suspek', '', '2020-07-19 17:35:53', '2020-07-21 13:34:31'),
('ff91f9d34a70445a9e91b5853835b778', 'Selesai Isolasi', '', '2020-07-21 13:36:51', '2020-07-21 13:36:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tracking_status`
--

CREATE TABLE `tracking_status` (
  `id_status` varchar(32) NOT NULL,
  `ktp_pasien` char(16) NOT NULL,
  `tanggal` datetime NOT NULL,
  `catatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- Indeks untuk tabel `log_riwayat_pasien`
--
ALTER TABLE `log_riwayat_pasien`
  ADD PRIMARY KEY (`id_riwayat`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `fk_petugas` (`id_petugas`),
  ADD KEY `fk_ruang` (`id_ruang`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `ruang_rawat`
--
ALTER TABLE `ruang_rawat`
  ADD PRIMARY KEY (`id_ruang`);

--
-- Indeks untuk tabel `status_pasien`
--
ALTER TABLE `status_pasien`
  ADD PRIMARY KEY (`id_status`);

--
-- Indeks untuk tabel `tracking_status`
--
ALTER TABLE `tracking_status`
  ADD KEY `fk_pasien` (`ktp_pasien`),
  ADD KEY `fk_status` (`id_status`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD CONSTRAINT `fk_petugas` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`),
  ADD CONSTRAINT `fk_ruang` FOREIGN KEY (`id_ruang`) REFERENCES `ruang_rawat` (`id_ruang`);

--
-- Ketidakleluasaan untuk tabel `tracking_status`
--
ALTER TABLE `tracking_status`
  ADD CONSTRAINT `fk_pasien` FOREIGN KEY (`ktp_pasien`) REFERENCES `pasien` (`nik`),
  ADD CONSTRAINT `fk_status` FOREIGN KEY (`id_status`) REFERENCES `status_pasien` (`id_status`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
