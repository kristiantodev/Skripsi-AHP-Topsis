-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jul 2021 pada 13.31
-- Versi server: 5.7.21-log
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siswabermasalah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_alternatif`
--

CREATE TABLE `tbl_alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `id_periode` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_walikelas` varchar(100) NOT NULL,
  `status_isi_nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_alternatif`
--

INSERT INTO `tbl_alternatif` (`id_alternatif`, `id_periode`, `id_siswa`, `id_walikelas`, `status_isi_nilai`) VALUES
(1, 2, 1, '2', 2),
(2, 2, 2, '195806091985031012', 2),
(3, 1, 3, '3', 2),
(4, 1, 1, '2', 2),
(7, 2, 4, '195806091985031012', 1),
(8, 2, 6, '195806091985031012', 1),
(9, 2, 3, '195806091985031012', 1),
(10, 2, 7, '195806091985031012', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `id_guru` int(11) NOT NULL,
  `nip` varchar(30) CHARACTER SET latin1 NOT NULL,
  `nama_guru` varchar(40) CHARACTER SET latin1 NOT NULL,
  `jk` varchar(20) CHARACTER SET latin1 NOT NULL,
  `alamat` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_guru`
--

INSERT INTO `tbl_guru` (`id_guru`, `nip`, `nama_guru`, `jk`, `alamat`) VALUES
(1, '196501041983042001', 'Sri Mulyasih', 'Perempuan', 'Garut'),
(2, '195806091985031012', 'David Haryanto', 'Laki-laki', 'Cirebon'),
(3, '197309221996011001', 'Asep Taufik', 'Laki-laki', 'Ciamis'),
(9, '198105092010012006', 'Arin', 'Laki-laki', 'Cirebon');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `id_kelas` int(11) NOT NULL,
  `kelas` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id_kelas`, `kelas`) VALUES
(1, 'XII RPL 1'),
(2, 'XII Akuntansi 1'),
(3, 'XII Multimedia 1'),
(4, 'XII Perbankan 1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kriteria`
--

CREATE TABLE `tbl_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `kriteria` varchar(100) CHARACTER SET latin1 NOT NULL,
  `bobot` double NOT NULL,
  `id_prioritas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kriteria`
--

INSERT INTO `tbl_kriteria` (`id_kriteria`, `kriteria`, `bobot`, `id_prioritas`) VALUES
(1, 'Nilai Raport', 0.234, 1),
(2, 'Kehadiran', 0.359, 3),
(3, 'Kedisiplinan Pengumpulan Tugas', 0.234, 2),
(4, 'Pemahaman Materi', 0.172, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_level`
--

CREATE TABLE `tbl_level` (
  `id_level` int(11) NOT NULL,
  `level` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_level`
--

INSERT INTO `tbl_level` (`id_level`, `level`) VALUES
(1, 'Admin'),
(2, 'Guru Walikelas'),
(3, 'Guru BK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_nilai_kriteria`
--

CREATE TABLE `tbl_nilai_kriteria` (
  `id_nilai_kriteria` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `nis` varchar(25) CHARACTER SET latin1 NOT NULL,
  `nilai_c1` double NOT NULL,
  `nilai_c2` double NOT NULL,
  `nilai_c3` double NOT NULL,
  `nilai_c4` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_nilai_kriteria`
--

INSERT INTO `tbl_nilai_kriteria` (`id_nilai_kriteria`, `id_alternatif`, `nis`, `nilai_c1`, `nilai_c2`, `nilai_c3`, `nilai_c4`) VALUES
(1, 8, '0', 1, 1, 1, 1),
(2, 7, '0', 2, 3, 3, 5),
(3, 9, '0', 2, 2, 1, 5),
(4, 10, '0', 1, 5, 3, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_periode`
--

CREATE TABLE `tbl_periode` (
  `id_periode` int(11) NOT NULL,
  `tahun_akademik` varchar(15) CHARACTER SET latin1 NOT NULL,
  `semester` varchar(15) CHARACTER SET latin1 NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_periode`
--

INSERT INTO `tbl_periode` (`id_periode`, `tahun_akademik`, `semester`, `status`) VALUES
(1, '2020/2021', 'Ganjil', 0),
(2, '2020/2021', 'Genap', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_prioritas`
--

CREATE TABLE `tbl_prioritas` (
  `id_prioritas` int(11) NOT NULL,
  `keterangan` varchar(30) CHARACTER SET latin1 NOT NULL,
  `nilai_prioritas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_prioritas`
--

INSERT INTO `tbl_prioritas` (`id_prioritas`, `keterangan`, `nilai_prioritas`) VALUES
(1, 'Sama Penting', 1),
(2, 'Cukup Penting', 3),
(3, 'Lebih Penting', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sekolah`
--

CREATE TABLE `tbl_sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `nama_sekolah` varchar(50) CHARACTER SET latin1 NOT NULL,
  `slogan` varchar(100) CHARACTER SET latin1 NOT NULL,
  `alamat` varchar(100) CHARACTER SET latin1 NOT NULL,
  `telepon` varchar(30) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `perizinan` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_sekolah`
--

INSERT INTO `tbl_sekolah` (`id_sekolah`, `nama_sekolah`, `slogan`, `alamat`, `telepon`, `email`, `perizinan`) VALUES
(1, 'SMK NEGERI 1 KEDAWUNG', 'Be The First, Be Different, Do The Best', 'JL. Tuparev No. 12, Kedungjaya, Kec. Kedawung, Kab. Cirebon Prov. Jawa Barat', '(0231) 233020', 'kampus@smkn1-kedawung.sch.id', 'Surat Keputusan Bupati Cirebon No. 420/Kep.330 Disdik/2005');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis` varchar(30) CHARACTER SET latin1 NOT NULL,
  `nama_siswa` varchar(40) CHARACTER SET latin1 NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `jk` varchar(20) CHARACTER SET latin1 NOT NULL,
  `alamat` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id_siswa`, `nis`, `nama_siswa`, `id_kelas`, `jk`, `alamat`) VALUES
(1, '141510115', 'Imaniar Resha', 1, 'Perempuan', 'Indramayu'),
(2, '141510230', 'Faris Hakim', 1, 'Laki-laki', 'Cirebon'),
(3, '141510138', 'Syifani', 2, 'Perempuan', 'Bandung'),
(4, '141510220', 'Zahrul Insan', 2, 'Laki-laki', 'Karangsembung'),
(5, '141510067', 'Anita Alfiah', 2, 'Perempuan', 'Cirebon'),
(6, '141510079', 'Jubaedah', 2, 'Perempuan', 'Cirebon'),
(7, '141510084', 'Imron Afriandi', 2, 'Laki-laki', 'Majalengka'),
(8, '141510094', 'Septyawan Dwi', 1, 'Laki-laki', 'Cirebon'),
(9, '141510236', 'Khalifa Rahman', 1, 'Laki-laki', 'Kuningan'),
(10, '141510161', 'Imam Sukma', 1, 'Laki-laki', 'Cirebon'),
(11, '141510102', 'Ahmad Fauzi', 3, 'Laki-laki', 'Cirebon'),
(12, '141510229', 'Fazar Ikhsan', 3, 'Laki-laki', 'Majalengka'),
(13, '141510083', 'Mediana Ratna', 3, 'Perempuan', 'Cirebon'),
(14, '141510105', 'Aldi Prestyo', 3, 'Laki-laki', 'Cirebon'),
(15, '141510172', 'Rendi Fajar', 3, 'Laki-laki', 'Cirebon'),
(16, '141510173', 'Lucky', 1, 'Laki-laki', 'Cirebon');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `nama_user` varchar(30) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `image` varchar(30) CHARACTER SET latin1 NOT NULL,
  `id_level` int(11) NOT NULL,
  `active` int(1) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `nama_user`, `email`, `image`, `id_level`, `active`, `date_created`) VALUES
(9, '2017102070', '$2y$10$hpk2UoKLhWZhPVpu1uNOieOVzY.pC.AZHcQa.g4CHJJPcB57ynG36', 'Ricky Hadi K', 'rickykunc@gmail.com', '2017102070.png', 1, 1, '2021-06-18'),
(10, '195806091985031012', '$2y$10$O.Hl.h.mQpswwVgx6HNX0e.Q.bnjFI1gidJr213FVDp7ncXPLBnvy', 'David Haryanto', 'david.hrynt@gmail.com', '195806091985031012.png', 2, 1, '2021-06-20'),
(11, '196501041983042001', '$2y$10$7/KgKoZw7YyJLCTiPaGoC.Oik8YOIu89mceQlLa3RExm3UseERa6.', 'Sri Mulyasih', 'sri.mulyasih@gmail.com', '196501041983042001.png', 2, 1, '2021-06-20'),
(17, 'admin', '$2y$10$O.Hl.h.mQpswwVgx6HNX0e.Q.bnjFI1gidJr213FVDp7ncXPLBnvy', 'Adminnn', 'admin@gmail.com', 'admin.png', 1, 1, '2021-06-24'),
(20, '197309221996011001', '$2y$10$vy2HufOa6JYStLFPIlFsnewDt9paxuQae8b4WdtHcvNNpy8GmD06K', 'Asep Taufik', 'asep.taufik@gmail.com', '1973092219960110011.png', 2, 1, '2021-06-25'),
(22, '198105092010012006', '$2y$10$eaxcPWk1Ng6ysL039z/kh.jAAiGQrfTCrgTlWBNo0ylmzgK3m1C/m', 'Arin', 'arin@gmail.com', '198105092010012006.png', 3, 1, '2021-06-28'),
(23, 'ok', '$2y$10$O.Hl.h.mQpswwVgx6HNX0e.Q.bnjFI1gidJr213FVDp7ncXPLBnvy', 'ok', 'syifaulkarim@gmail.com', 'default.png', 1, 1, '2021-07-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_walikelas`
--

CREATE TABLE `tbl_walikelas` (
  `id_walikelas` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_periode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_walikelas`
--

INSERT INTO `tbl_walikelas` (`id_walikelas`, `id_kelas`, `id_guru`, `id_periode`) VALUES
(1, 3, 1, 2),
(2, 1, 2, 2),
(3, 2, 3, 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_alternatif`
--
ALTER TABLE `tbl_alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indeks untuk tabel `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `tbl_level`
--
ALTER TABLE `tbl_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indeks untuk tabel `tbl_nilai_kriteria`
--
ALTER TABLE `tbl_nilai_kriteria`
  ADD PRIMARY KEY (`id_nilai_kriteria`);

--
-- Indeks untuk tabel `tbl_periode`
--
ALTER TABLE `tbl_periode`
  ADD PRIMARY KEY (`id_periode`);

--
-- Indeks untuk tabel `tbl_prioritas`
--
ALTER TABLE `tbl_prioritas`
  ADD PRIMARY KEY (`id_prioritas`);

--
-- Indeks untuk tabel `tbl_sekolah`
--
ALTER TABLE `tbl_sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indeks untuk tabel `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tbl_walikelas`
--
ALTER TABLE `tbl_walikelas`
  ADD PRIMARY KEY (`id_walikelas`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_alternatif`
--
ALTER TABLE `tbl_alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_level`
--
ALTER TABLE `tbl_level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_nilai_kriteria`
--
ALTER TABLE `tbl_nilai_kriteria`
  MODIFY `id_nilai_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_periode`
--
ALTER TABLE `tbl_periode`
  MODIFY `id_periode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_prioritas`
--
ALTER TABLE `tbl_prioritas`
  MODIFY `id_prioritas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_sekolah`
--
ALTER TABLE `tbl_sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tbl_walikelas`
--
ALTER TABLE `tbl_walikelas`
  MODIFY `id_walikelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
