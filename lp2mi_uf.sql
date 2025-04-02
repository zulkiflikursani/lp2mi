-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 18 Mar 2025 pada 21.04
-- Versi server: 5.7.37-log
-- Versi PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lp2mi.uf`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_file`
--

CREATE TABLE `tb_file` (
  `id` int(11) NOT NULL,
  `nama_doc` varchar(255) DEFAULT '',
  `link_doc` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT '',
  `update_at` timestamp NULL DEFAULT NULL,
  `kat_doc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_file`
--

INSERT INTO `tb_file` (`id`, `nama_doc`, `link_doc`, `level`, `update_at`, `kat_doc`) VALUES
(1, 'SPO SDM DAN BIRO UMUM', 'https://drive.google.com/file/d/1DV4GG_6Y4oZW8MtR4PwG798HiD1NfNE_/view?usp=sharing', '1', '2022-06-05 07:46:17', '7'),
(2, 'SPO SARANA DAN PRASARANA', 'https://drive.google.com/file/d/1d6LtZXLda_fOzrZBiLzj9ZyJZ6uUngYT/view?usp=sharing', '1', '2022-06-05 07:46:17', '7'),
(3, 'SPO PERPUSTAKAAN', 'https://drive.google.com/file/d/1VIQXbFELUWPRm7c7qtmshubOjWEZdago/view?usp=sharing', '1', '2022-06-05 07:46:17', '7'),
(4, 'SPO MAHASISWA', 'https://drive.google.com/file/d/12GPvBv7mtJY0AM9aT3viSqD0_V7rTKzP/view?usp=sharing', '1', '2022-06-05 07:46:17', '7'),
(5, 'SPO LABORATORIUM', 'https://drive.google.com/file/d/1PzgnCtvQmb9hSsvMtYL3peKjXCBF4WPs/view?usp=sharing', '1', '2022-06-05 07:46:17', '7'),
(6, 'SPO KEUANGAN', 'https://drive.google.com/file/d/1RTvLDSIHqftXUZq96EIWB_UsTKQr_TK-/view?usp=sharing', '1', '2022-06-05 07:46:17', '7'),
(7, 'SPO MERDEKA BELAJAR DAN KAMPUS MERDEKA', 'https://drive.google.com/file/d/1isOUlmxVnRt0hrkTsPzZcAPQvDYGjFmJ/view?usp=sharing', '1', '2022-06-05 07:46:17', '7'),
(8, 'SPO PENETAPAN DOSEN PENGAMPUH', 'https://drive.google.com/file/d/1XaFr7nhhlCNIuhYY25Ax9JBBmGFBaYs4/view?usp=sharing', '1', '2022-06-05 07:46:17', '7'),
(9, 'SPO PELAKSANAAN MID TEST DAN FINAL TEST', 'https://drive.google.com/file/d/1141QGmGiiqIuIOBKvs3MJDaZpoP8y9fD/view?usp=sharing', '1', '2022-06-05 07:46:17', '7'),
(10, 'SPO PROGRAM SEMESETER PENDEK', 'https://drive.google.com/file/d/1nFwqeePUef2P36_NUQdOKQZ-OifG_is3/view?usp=sharing', '1', '2022-06-05 07:46:17', '7'),
(11, 'SPO PENTAPAN BIMBINGAN KP DAN KKLP', 'https://drive.google.com/file/d/1LL-WktblsSd1BoSHE96O-F0GKTBCNKEs/view?usp=sharing', '1', '2022-06-05 07:46:17', '7'),
(12, 'SPO PENTAPAN BIMBINGAN TUGAS AKHIR', 'https://drive.google.com/file/d/1b3-BcIj0NPpwmDNKuTTKIfKzyaR1TIu1/view?usp=sharing', '1', '2022-06-05 07:46:17', '7'),
(13, 'SPO PROGRAM MAGANG', 'https://drive.google.com/file/d/1N2w_xTeP_isYdVaKFS2NgKwNjsp5yYs0/view?usp=sharing', '1', '2022-06-05 07:46:17', '7'),
(14, 'Standar Pendidikan', 'https://drive.google.com/file/d/15kF8xvZJuVs39ygAjG7DvS6uIOt-nXJk/view?usp=sharing', '1', '2022-06-05 07:46:17', '7'),
(15, 'Standar Penelitian', 'https://drive.google.com/file/d/1M_s4ur7DA3bthSWpONIfM4N7DXgU3CbI/view?usp=sharing', '1', '2022-06-05 07:46:17', '7'),
(16, 'Standar PKM', 'https://drive.google.com/file/d/1cScemA5H53z3tR-NK72l24ZfkrZCsElp/view?usp=sharing', '1', '2022-06-05 07:46:17', '7'),
(17, 'Standar SDM', 'https://drive.google.com/file/d/1MSpzHXLfZ-RFbyI5RCe-fODOqcgKzWKi/view?usp=sharing', '1', '2022-06-05 07:46:17', '7'),
(18, 'Standar Lahan Sarana dan Prasarana', 'https://drive.google.com/file/d/1Y0uk54_-gAtPkYBpDYcII-LAIn53SnUX/view?usp=sharing', '1', '2022-06-05 07:46:17', '7'),
(19, 'Standar Keuangan', 'https://drive.google.com/file/d/1nc4m4efcTxVaAqUBlbGlACYClMRaYz92/view?usp=sharing', '1', '2022-06-05 07:46:17', '7'),
(20, 'Standar Administrasi dan Pengelolaan', 'https://drive.google.com/file/d/1lAMPwLqzP5e_W-gdSiz7kX8me8O9gfnV/view?usp=sharing', '1', '2022-06-05 07:46:17', '7'),
(21, '2012 PERATURAN REKTOR UNIFA TENTANG DEKSRIPSI JABARAN UNIVERSITAS FAJAR.pdf', 'https://drive.google.com/file/d/1Vd2_QYgc1IZBz-gMvL0dgYQqMMpOZzgC/view?usp=sharing', '1', '2023-04-02 19:39:35', '4'),
(22, '2012 PERATURAN REKTRO UNIFA TENTANG PEDOMAN PELAKSANAAN TRIDARMA PT UNIFA.pdf', 'https://drive.google.com/file/d/1VMqk77ct-lAKrJNpxz7a614TZ4dGvdqc/view?usp=sharing', '1', '2023-04-02 19:39:35', '4'),
(23, '2015 PERATURAN REKTOR UNIFA TENTANG DESKRIPSI JABATAN UNIFA.pdf', 'https://drive.google.com/file/d/1VZhjd-JkvFlA5zfR9mGL3IsQZWfkFgLy/view?usp=sharing', '1', '2023-04-02 19:39:36', '4'),
(24, '2015 PERATURAN REKTOR UNIFA TENTANG PEDOMAN KONVERSI MATAKULIAH.pdf', 'https://drive.google.com/file/d/1VMJaHGiAeSehpZGyfdoPXQ2jTau7PN-B/view?usp=sharing', '1', '2023-04-02 19:39:36', '4'),
(25, '2015 PERATURAN REKTOR UNIFA TENTANG PEDOMAN PELAKSANAAN MATA KULIAH KO-KORIKULER.pdf', 'https://drive.google.com/file/d/1VMIo1kZlt6UEdCLy2TvEAEG5z3VTIz5e/view?usp=sharing', '1', '2023-04-02 19:39:36', '4'),
(26, '2015 PERATURAN REKTOR UNIFA TENTANG PEDOMAN PENJABARAN VISI DAN MISI UNIVERSITAS FAJAR.pdf', 'https://drive.google.com/file/d/1VM8GBi-IcSNw6FZYK76PsOwtZrECEgaS/view?usp=sharing', '1', '2023-04-02 19:39:36', '4'),
(27, '2015 PERATURAN REKTOR UNIFA TENTANG PEDOMAN PENYELENGGARAAN PROFESI UPACARA WISUDA UNIVERSITAS FAJAR.pdf', 'https://drive.google.com/file/d/1VM4lH87vsPsTB75Gxddp7x6H6cJvabD5/view?usp=sharing', '1', '2023-04-02 19:39:36', '4'),
(28, '2015 PERATURAN REKTOR UNIFA TENTANG PEDOMAN PENYUSUNAN PERENCANAAN DAN EVALUASI PECAPAIAN SASARAN UNIVERSITAS FAJAR.pdf', 'https://drive.google.com/file/d/1VM4lH87vsPsTB75Gxddp7x6H6cJvabD5/view?usp=sharing', '1', '2023-04-02 19:39:36', '4'),
(29, '2015 PERATURAN REKTOR UNIFA TENTANG PELAYANAN KEPADA PEMANGKU KEPENTINGAN (STAKEHOLDER).pdf', 'https://drive.google.com/file/d/1VT5oqH8ZU6u-JShqrCXCqQyBtNi1JR1C/view?usp=sharing', '1', '2023-04-02 19:39:36', '4'),
(30, '2015 PERATURAN REKTOR UNIFA TENTANG PEMBENTUKAN KOMISI DISIPLIN UNIFA.pdf', 'https://drive.google.com/file/d/1VSOlgLkYVBdG7NSQf4Ndc2s2LTojn5ZQ/view?usp=sharing', '1', '2023-04-02 19:39:36', '4'),
(31, '2015 PERATURAN REKTOR UNIFA TENTANG PEMBENTUKAN PUSAT KAJIAN PEDESAAN.pdf', 'https://drive.google.com/file/d/1VR_uAl8ikYWVqp_zeMvLpulRRRbrRnG5/view?usp=sharing', '1', '2023-04-02 19:39:36', '4'),
(32, '2015 PERATURAN REKTOR UNIFA TENTANG PEMBENTUKAN PUSAT PENGEMBANGAN AKUNTANSI KEUANGAN DAERAH.pdf', 'https://drive.google.com/file/d/1VRRLBKa0jC0xRBBhM7w7o3c74PadFds6/view?usp=sharing', '1', '2023-04-02 19:39:36', '4'),
(33, '2015 PERATURAN REKTOR UNIFA TENTANG PEMBERIAN PENGHARGAAN DAN SANKSI BAGI DOSEN DAN TENAGA KEPENDIDIKAN.pdf', 'https://drive.google.com/file/d/1VQq3Un3_T57xDFuMxtdwWoYG3MTp71Lt/view?usp=sharing', '1', '2023-04-02 19:39:36', '4'),
(34, '2015 PERATURAN REKTOR UNIFA TENTANG PENGEMBANGAN PEMANFAATAN DAN PENERAPAN SISTEM INFORMASI DAN KOMUNIKASI.pdf', 'https://drive.google.com/file/d/1VQjzIONFYisQ_Sp6kPvMvWR1daUBWtwZ/view?usp=sharing', '1', '2023-04-02 19:39:36', '4'),
(35, '2015 PERATURAN REKTOR UNIFA TENTANG RENCANA INDUK PENGEMBANGAN UNIVERSITAS FAJAR TAHUN 2015-2031.pdf', 'https://drive.google.com/file/d/1VO5EVqEv89VQcLryA_YOYWtEb_bs-zi6/view?usp=sharing', '1', '2023-04-02 19:39:36', '4'),
(36, '2015 PERATURAN REKTOR UNIFA TENTANG SOP BIDANG KEMAHASISWAAN DAN ALUMNI UNIVERSITAS FAJAR.pdf', 'https://drive.google.com/file/d/1VNCOQkI-Rtq6Uca9TjMgODRf9sxy-JgI/view?usp=sharing', '1', '2023-04-02 19:39:36', '4'),
(37, '2016 PERATURAN REKTOR UNIFA TENTANG PANDUAN PENERIMAAN MAHASISWA BARU.pdf', 'https://drive.google.com/file/d/1Vj_66YLUuaIF5h0zFgiHcDEc9OuvWjnr/view?usp=sharing', '1', '2023-04-02 19:39:36', '4'),
(38, '2016 PERATURAN REKTOR UNIFA TENTANG PEDOMAN PENGELOLAAN PENELITIAN PADA UNIVERSITAS FAJAR.pdf', 'https://drive.google.com/file/d/1VpJDIdn0yxCkSP0JDJc0-xYuJxxR2BJt/view?usp=sharing', '1', '2023-04-02 19:39:36', '4'),
(39, '2016 PERATURAN REKTOR UNIFA TENTANG PENGEMBANGAN KAPASITAS KOMPETENSI KARYAWAN.pdf', 'https://drive.google.com/file/d/1VonrMjHxGt6ol-bbjIh2Xe4VQS1IdK-Z/view?usp=sharing', '1', '2023-04-02 19:39:36', '4'),
(40, '2017 PERATURAN REKTOR UNIFA TENTANG HILARKI PERATURAN YANG BERLAKU DALAM LINGKUNGAN UNIVERSITAS FAJAR.pdf', 'https://drive.google.com/file/d/1Vnr3SvRhm_Dj7fwb3wYlZbVPBEuhJfjA/view?usp=sharing', '1', '2023-04-02 19:39:36', '4'),
(41, '2017 PERATURAN REKTOR UNIFA TENTANG PEMBENTUKAN UNIT KERJASAMA DAN URUSAN LUAR NEGERI.pdf', 'https://drive.google.com/file/d/1Vnh5iMgDXO8Jrdlwk6jZwathNVvqhcTn/view?usp=sharing', '1', '2023-04-02 19:39:36', '4'),
(42, '2020 PERATURAN REKTOR UNIFA TENTANG DISIPLIN MAHASISWA.pdf', 'https://drive.google.com/file/d/1VtTk4WhXuvp6wGdkMPn72G_cVf2IpbI6/view?usp=sharing', '1', '2023-04-02 19:39:36', '4'),
(43, '2020 PERATURAN REKTOR UNIFA TENTANG KEBIJAKAN UMUM RENCANA IMPLEMENTASI PROGRAM MERDEKA BELAJAR-KAMPUS MERDEKA (MB-KM) DALAM LINGKUNGAN UNVERSITAS FAJAR.pdf', 'https://drive.google.com/file/d/1VtGh8t8zFxN7qJq27viyDtJFyuvwWnMg/view?usp=sharing', '1', '2023-04-02 19:39:36', '4'),
(44, '2020 PERATURAN REKTOR UNIFA TENTANG KETENTUAN KETERTIBAN MAHASISWA DALAM KAMPUS.pdf', 'https://drive.google.com/file/d/1VsNWu8ZKyff7PF2DC13K3TCURWChDZ7R/view?usp=sharing', '1', '2023-04-02 19:39:36', '4'),
(45, '2020 PERATURAN REKTOR UNIFA TENTANG KODE ETIK MAHASISWA UNIVERSITAS FAJAR.pdf', 'https://drive.google.com/file/d/1VrvYNyesg40QtW5g1Hn3j-uiwMxUoSjk/view?usp=sharing', '1', '2023-04-02 19:39:36', '4'),
(46, '2008 ORGANISASI DAN TATA KERJA UNIVERSITAS.pdf', 'https://drive.google.com/file/d/1VXyOayep81wHV2nCV8MBH_D6gHNUe2_f/view?usp=sharing', '2', '2023-04-02 19:44:59', '5'),
(47, '2008 PERATURAN AKADEMIK.pdf', 'https://drive.google.com/file/d/1VWHSWqktzL_AC6Lnk_elWCKO-sDx6mtW/view?usp=sharing', '2', '2023-04-02 19:44:59', '5'),
(48, '2008 STANDARD OPERATION PROCEDURES (SOP) LABORATORIUM.pdf', 'https://drive.google.com/file/d/1VY203fecLw2A9AFjUQ8tVeS3a8ON3VSQ/view?usp=sharing', '2', '2023-04-02 19:44:59', '5'),
(49, '2008 STANDARD OPERATION PROCEDURES (SOP) PERPUSTAKAAN.pdf', 'https://drive.google.com/file/d/1VaJm_zVDvgJYkUCnGmvEdz8Cjk1Xm_tF/view?usp=sharing', '2', '2023-04-02 19:44:59', '5'),
(50, '2014 PERATURAN UNIVERSITAS FAJAR TENTANG KODE ETIK MAHASISWA DAN TENAGA KEPENDIDIKAN UNIFA.pdf', 'https://drive.google.com/file/d/1Vc1nONmKk87jud-aC4nsXKNzuDVbWtQk/view?usp=sharing', '2', '2023-04-02 19:44:59', '5'),
(51, '2014 PERATURAN UNIVERSITAS FAJAR TENTANG PENYELENGGARAAN PENDIDIKAN PROGRAM PENDIDIKAN TINGGI DENGAN RAHMAT TUHAN YANG MAHA ESA REKTOR UNIFA.pdf', 'https://drive.google.com/file/d/1VbeNx-s7Az7vNkmJZp9STboYEPahqF3r/view?usp=sharing', '2', '2023-04-02 19:44:59', '5'),
(52, '2016 STANDAR PENDIDIKAN TINGGI UNIFA.pdf', 'https://drive.google.com/file/d/1VohKFO3O7I3NYyo7VHLrLh0LhWMs7-k-/view?usp=sharing', '2', '2023-04-02 19:44:59', '5'),
(53, '2019 PERATURAN UNIVERSITAS FAJAR TENTANG HIRARKI PERATURAN UNIVERSITAS FAJAR.pdf', 'https://drive.google.com/file/d/1VuMdnSu_oIixFjo2QtJml0d-kdZ33ERt/view?usp=sharing', '2', '2023-04-02 19:44:59', '5'),
(54, '2020 PERATURAN UNIVERSITAS FAJAR TENTANG PENYELENGGARAAN PROGRAM MERDEKA BELAJAR-KAMPUS MERDEKA PADA PROGRAM SARJANA.pdf', 'https://drive.google.com/file/d/1VuMdnSu_oIixFjo2QtJml0d-kdZ33ERt/view?usp=sharing', '2', '2023-04-02 19:44:59', '5'),
(55, '2021 PERATURAN UNIVERSITAS.pdf', 'https://drive.google.com/file/d/1VptL4BAXZN8P4rPPIWi-ZgVI9a4MUtBi/view?usp=sharing', '2', '2023-04-02 19:44:59', '5'),
(56, '2017 PERATURAN KEPEGAWAIAN YAYASAN PENDIDIKAN FAJAR UJUNGPANDANG.pdf', 'https://drive.google.com/file/d/1VnuENUutg1BE9HSSVLZp7rWa9vB3ZGiq/view?usp=sharing', '2', '2023-04-02 19:47:33', '3'),
(57, '2019 PERATURAN YAYASAN PENDIDIKAN FAJAR UJUNGPANDANG STATUTA UNIVERSITAS.pdf', 'https://drive.google.com/file/d/1VuIdcHt76pFELu6mEr2KcnRCZB4yo8DR/view?usp=sharing', '2', '2023-04-02 19:47:33', '3'),
(58, 'PERATURAN PRESIDEN NO. 8 TAHUN 2012', 'https://drive.google.com/file/d/16cLlEnlt0lP8tvrEEc9b6HjuYvGPUlrZ/view?usp=sharing', '1', '2023-08-31 09:51:32', '9'),
(59, 'PERATURAN PRESIDEN NO 8 TAHUN 2012 LAMPIRAN', 'https://drive.google.com/file/d/16chRoAMtkm1ZQOBScZQWckqdn7tIK25-/view?usp=sharing', '', NULL, '9'),
(60, 'PERMENRISTEK DIKTI NO 50 TAHUN 2018', 'https://drive.google.com/file/d/16PCAuiOwQJJnP_3sVN2Z5nKkNyQaLzHw/view?usp=sharing', '1', '2023-08-31 10:00:08', '9'),
(61, 'PERATURAN MENTERI PENDIDIKAN DAN KEBUDAYAAN NO 3 TAHUN 2020', 'https://drive.google.com/file/d/16hYmw7NW8RLN0dfm3JvwXguiN5tSMA3T/view?usp=sharing', '1', '2023-08-31 10:01:14', '9'),
(62, 'RENCANA STRATEGIS UNIVERSITAS FAJAR (2015-2019)', 'https://drive.google.com/file/d/1-agfoivEaq9I42RMTl3ediQFYxooSEDp/view?usp=sharing', '1', NULL, '6'),
(63, 'STATUTA UNIVERSITAS FAJAR (2019)', 'https://drive.google.com/file/d/1-V0kuwNWi-ujGM1VYjEISjikuC0glasE/view?usp=sharing', '1', NULL, '6');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kat`
--

CREATE TABLE `tb_kat` (
  `id_cat` varchar(255) DEFAULT NULL,
  `categori` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kat`
--

INSERT INTO `tb_kat` (`id_cat`, `categori`) VALUES
('1', 'Akreditasi dan Sertifikasi'),
('2', 'Asesmen Mutu'),
('3', 'LP2MI UNIFA'),
('4', 'Pengumuman'),
('5', 'Standar Mutu'),
('6', 'Unrecognize');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kat_doc`
--

CREATE TABLE `tb_kat_doc` (
  `id` int(11) NOT NULL,
  `nm_kat_file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kat_doc`
--

INSERT INTO `tb_kat_doc` (`id`, `nm_kat_file`) VALUES
(1, 'STANDAR PROSEDUR OPERASIONAL'),
(2, 'SPMI'),
(3, 'PERATURAN YAYASAN'),
(4, 'PERATURAN REKTOR'),
(5, 'PERATURAN UNIVERSITAS'),
(6, 'RENSTRA'),
(7, 'STANDAR PENDIDIKAN TINGGI'),
(8, 'SOP'),
(9, 'PERATURAN MENTERI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_postingan`
--

CREATE TABLE `tb_postingan` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(10000) DEFAULT '',
  `tgl_posting` date DEFAULT NULL,
  `penulis` varchar(255) DEFAULT NULL,
  `view` int(11) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `cat` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_postingan`
--

INSERT INTO `tb_postingan` (`id`, `judul`, `deskripsi`, `tgl_posting`, `penulis`, `view`, `create_at`, `cat`) VALUES
(0, 'Alumni Mahasiswa Unifa Sabet Juara Lomba Karya Tugas Akhir Arsitektur Se-Makassar', 'Asmin Rusli selaku alumni mahasiswa Universitas Fajar (Unifa) program studi arsitektur berhasil meraih prestasi juara 2 dalam lomba Karya Tugas Akhir Arsitektur sekota Makassar yangdiadakan oleh Ikatan Arsitektur Indonesia (IAI) pada Jumat hingga Minggu (18-20/3/22)\r\n\"Meski baru pertama kali mengikuti kompetisi desain karya tugas akhir seperti ini, saya tetap optimis untuk bisa mendapatkan hasil yang terbaik\", kata Asmin\r\n\r\nFaris Jumawan selaku dosen pendamping mengatakan bahwa meraih juara dalam kompetisi desain karya tugas akhir ini bukanlah menjadi tujuan utama, akan tetapi memberi kesempatan kepada alumni untuk mepresentasikan karya mereka didepan umum merupakan pengalaman yang sangat berarti bagi para alumni baru yang sekarang ini telah berprofesi sebagai calon arsitek.\r\n\r\n\"Tentu ajang seperti ini menjadi wadah berkarya yang baik bagi para mahasiswa, semoga kegiatan seperti ini bisa tetap berlanjut dan memacu semangat mahasiswa untuk terus berkarya\", tutup Faris\r\nBerlangsung di Nipah Mall Makassar, dalam rangkaian kegiatan Architecture Expo 1ͭ SPACE 2022, program studi Arsitektur Unifa mengirimkan 3 delegasi alumni lulusan tahun 2021 untuk mengikuti kompetis tersebut. Adapun peserta dari Unifa ialah Muhammad Nur Adhim Alam dengan judul Tugas Akhir Pusat Perbelanjaan di Kabupaten Soppeng, Asmin Rusli dengan judul Tugas Akhir Prancangan Stadion Kota Bau-bau daan Ayu Deviyanti Bachtiar dengan judul tugas akhir pengembangan Kawasan Wisata Benteng Keraton Buton.', '2022-05-26', 'zulkifli', 0, '2022-05-26 11:56:02', '1'),
(2, 'Forum Awardee BU Indonesia Timur Gelar Sosialisasi Beasiswa Unggulan Kemendibud RI di Unifa ', 'Forum Awardee Beasiswa Unggulan Indonesia Timur yang bekerjasama dengam Universitas Fajar (Unifa) adakan sosialisasi beasiswa unggulan untuk mahasiswa Unifa yang berlangsung di mini ballroom Unifa. Sabtu (30/3/2019).\r\n\r\nSosialisasi beasiswa unggulan ini merupakan agenda yang rutin dilaksanakan oleh Forum Awardee Beasiswa Unggulan dari Kementerian Pendidikan dan Kebudayaan RI.\r\n\r\nDalam kegiatan sosialisasi turut hadir sebagai pembicara yakni Ketua Forum Awardee, Andi Baso dan Rusman Hadi Takbir selaku penerima Beasiswa Unggulan untuk berbagi pengetahuan dan pengalaman tentang Beasiswa tersebut dihadapan para mahasiswa Unifa yang hadir.\r\n\r\nAndi Baso Husain menegaskan bahwa Sosialisasi ini merupakan program kerja yang rutin dilaksanakan untuk menyebarluaskan informasi tentang beasiswa unggulan.\r\n\r\nTak lupa, Ketua Forum Awardee Beasiswa Unggulan Indonesia Timur juga memberikan motivasi kepada mahasiswa Unifa untuk percaya kepada kemampuan yang dimiliki sebagai rahmat yang diberikan Tuhan yang Maha Esa.\r\n\r\n\"Semua memiliki kesempatan yang sama untuk lolos menjadi Awardee Beasiswa Unggulan\", ucap Andi Baso Husain.\r\n\r\nSementara itu Kepala Biro Kemahasiswaan Unifa, Asri Mulya Setiawan berharap semoga kedepannya mahasiswa Unifa bisa mengikuti program ini dari Kemendikbud RI.\r\n\r\n\"Semoga juga banyak mahasiswa Unifa yang bisa lolos sebagai penerima beasiswa unggulan tersebut\", tuturnya.\r\n\r\nIa menambahkan kita bantu mereka secara finansial karena program ini menanggung uang hidup bulanan, biaya buku, dan SPP sampai mereka menginjak semester 8.', '2022-05-26', 'zulkifli', 0, '2022-05-26 11:56:02', '1'),
(3, 'Unifa Launching Program Rekognisi Untuk SMK', 'Universitas Fajar resmikan program Rekognisi sebagai salah satu program unggulan dalam penerimaan mahasiswa baru (PMB) khususnya bagi alumni SMK dan dihadiri oleh kepala SMK se-Kota Makassar, Rabu (9/2/22).\r\n\r\nBerlangsung di Ballroom Sandeq Hotel Claro Makassar, acara ini dihadiri oleh 44 kepala sekolah SMK se-Kota Makassar. Program ini merupakan inovasi dalam sistem pembelajaran karena pada pengaplikasiannya, mahasiswa yang berasal dari SMK tidak perlu mengulangi matakuliah yang sudah dipelajari selama masa sekolah.\r\n\r\nDalam sambutannya, ketua PMB 2022 M. Ridwan Hasanuddin,SE., M.Si,Ak. CA,CTA mengatakan bahwa program ini juga menjadi salah satu bentuk apresiasi bagi alumni SMK yang akan melanjutkan pendidikannya ketingkat Perguruan Tinggi.\r\n\r\n“Kami melihat bahwa tamatan SMK lebih tinggi pemahamannya secara kompetensi maka dari itu dibuatlah program rekognisi,” ujar Ridwan.\r\n\r\nLebih lanjut program ini disambut dengan antusias oleh kepala SMK. Hal tersebut diutarakan oleh perwakilan kepala SMK se-kota Makassar, DR. H. Akmal umar SE MSi, kepala sekolah SMK Mutiara Ilmu.\r\n\r\n“Unifa cepat menangkap peluang, dan kami dari SMK baru pertama kali merasakan bahwa pengakuan mata pelajaran untuk disetarakan oleh karena itu lebih efisen dari waktu dan biaya,” ucap Akmal.\r\n\r\nRektor Unifa, DR. Muliyadi Hamid,SE., M.Si mengungkapkan bahwa program rekognisi ini merupakan lanjutan ide yang pernah dilaksanakan dengan format baru.\r\n\r\n“Hari ini kami mempertemukan ketua prodi yang memiliki matakuliah linear dengan mata pelajaran kompetensi SMK. Diskusi yang berlangsung dengan para kepala SMK ini untuk mengetahui berapa mata pelajaran kejuruan yang bisa di rekognisi,” jelas Muliyadi.\r\n\r\nTidak hanya penyelarasan komptensi dan relevansi nilai, nantinya calon mahasiswa baru yang merupakan alumni SMK juga akan diberikan pelatihan soft skill yang setara dengan 23sks yang akan diberikan oleh pusat karir Unifa sehingga diharapkan dapat menunjang kompetensi siswa SMK.\r\n\r\nAcara ditutup dengan kegiatan diskusi dan penjelasan mengenai tahapan program rekognisi oleh Dr. Nur Khaerat Nur. ST., MT selaku deputi rektor 1 serta penandatanganan MoU antara Unifa dengan 44 kepala SMK yang hadir.', '2022-05-26', 'penulis', 0, '2022-05-26 11:56:03', '2'),
(4, 'Alumni Mahasiswa Unifa Sabet Juara Lomba Karya Tugas Akhir Arsitektur Se-Makassar 2', 'Asmin Rusli selaku alumni mahasiswa Universitas Fajar (Unifa) program studi arsitektur berhasil meraih prestasi juara 2 dalam lomba Karya Tugas Akhir Arsitektur sekota Makassar yangdiadakan oleh Ikatan Arsitektur Indonesia (IAI) pada Jumat hingga Minggu (18-20/3/22)\r\n\"Meski baru pertama kali mengikuti kompetisi desain karya tugas akhir seperti ini, saya tetap optimis untuk bisa mendapatkan hasil yang terbaik\", kata Asmin\r\n\r\nFaris Jumawan selaku dosen pendamping mengatakan bahwa meraih juara dalam kompetisi desain karya tugas akhir ini bukanlah menjadi tujuan utama, akan tetapi memberi kesempatan kepada alumni untuk mepresentasikan karya mereka didepan umum merupakan pengalaman yang sangat berarti bagi para alumni baru yang sekarang ini telah berprofesi sebagai calon arsitek.\r\n\r\n\"Tentu ajang seperti ini menjadi wadah berkarya yang baik bagi para mahasiswa, semoga kegiatan seperti ini bisa tetap berlanjut dan memacu semangat mahasiswa untuk terus berkarya\", tutup Faris\r\nBerlangsung di Nipah Mall Makassar, dalam rangkaian kegiatan Architecture Expo 1ͭ SPACE 2022, program studi Arsitektur Unifa mengirimkan 3 delegasi alumni lulusan tahun 2021 untuk mengikuti kompetis tersebut. Adapun peserta dari Unifa ialah Muhammad Nur Adhim Alam dengan judul Tugas Akhir Pusat Perbelanjaan di Kabupaten Soppeng, Asmin Rusli dengan judul Tugas Akhir Prancangan Stadion Kota Bau-bau daan Ayu Deviyanti Bachtiar dengan judul tugas akhir pengembangan Kawasan Wisata Benteng Keraton Buton.', '2022-05-26', 'penulis 2', 0, '2022-05-26 11:56:04', '2'),
(5, 'Forum Awardee BU Indonesia Timur Gelar Sosialisasi Beasiswa Unggulan Kemendibud RI di Unifa 2', 'Asmin Rusli selaku alumni mahasiswa Universitas Fajar (Unifa) program studi arsitektur berhasil meraih prestasi juara 2 dalam lomba Karya Tugas Akhir Arsitektur sekota Makassar yangdiadakan oleh Ikatan Arsitektur Indonesia (IAI) pada Jumat hingga Minggu (18-20/3/22)\r\n\"Meski baru pertama kali mengikuti kompetisi desain karya tugas akhir seperti ini, saya tetap optimis untuk bisa mendapatkan hasil yang terbaik\", kata Asmin\r\n\r\nFaris Jumawan selaku dosen pendamping mengatakan bahwa meraih juara dalam kompetisi desain karya tugas akhir ini bukanlah menjadi tujuan utama, akan tetapi memberi kesempatan kepada alumni untuk mepresentasikan karya mereka didepan umum merupakan pengalaman yang sangat berarti bagi para alumni baru yang sekarang ini telah berprofesi sebagai calon arsitek.\r\n\r\n\"Tentu ajang seperti ini menjadi wadah berkarya yang baik bagi para mahasiswa, semoga kegiatan seperti ini bisa tetap berlanjut dan memacu semangat mahasiswa untuk terus berkarya\", tutup Faris\r\nBerlangsung di Nipah Mall Makassar, dalam rangkaian kegiatan Architecture Expo 1ͭ SPACE 2022, program studi Arsitektur Unifa mengirimkan 3 delegasi alumni lulusan tahun 2021 untuk mengikuti kompetis tersebut. Adapun peserta dari Unifa ialah Muhammad Nur Adhim Alam dengan judul Tugas Akhir Pusat Perbelanjaan di Kabupaten Soppeng, Asmin Rusli dengan judul Tugas Akhir Prancangan Stadion Kota Bau-bau daan Ayu Deviyanti Bachtiar dengan judul tugas akhir pengembangan Kawasan Wisata Benteng Keraton Buton.', '2022-05-26', 'penulis 2', 0, '2022-05-26 11:56:06', '3'),
(6, 'External Banchmarking Universitas Fajar di UNM Makassar', '', '2022-12-13', 'Penulis', 0, '2023-04-02 21:31:14', '3'),
(7, 'Pelaksanaan Audit Mutu Internal Program Studi Universitas Fajar', 'Pelaksanaan Audit Mutu Internal terhadap Program Studi yang dilakukan oleh Tim Audit Mutu internal', '2021-11-20', 'Tim SPMI', NULL, '2023-09-06 07:36:54', '3'),
(8, 'Focus Group Discussion (FGD) Pemahaman dan Penyamaan Persepsi Sitem Penjaminan Mutu MBKM Universitas Fajar', 'Lembaga Penjaminan Mutu mengadakan kegiatan Focus Group Discussion (FGD) tentang pemahaman dan penyamaan persepsi Sistem Penjaminan Mutu MBKM di Hotel Denpasar Makassar', '2022-11-16', 'Tim SPMI', NULL, '2023-09-06 07:36:57', '3'),
(9, 'WORKSHOP UPDATE KURIKULUM BERDASARKAN ANALISIS KEBUTUHAN DI SWISS BELL COURT', 'Workshop update kurikulum berdasarkan analisis kebutuhan sesuai dengan panduan penyusunan kurikulum Industri 4.0', '2023-09-06', 'Tim Lp2mi', NULL, '2023-09-06 07:43:45', '3'),
(10, 'WORKSHOP REORGANISASI KURIKULUM (Hibah PKKM 2023 Prodi Ilmu Komunikasi Universitas Fajar Makassar)', 'Memaksimalkan penggunaan dana Hibah yang diperoleh program studi ilmu komunikasi dengan mengadakan workhsop reorganisasi Kurikulum di Grand Hotel Maleo pada hari senin, 11 September 2023.\r\nAdapaun Pembicara pada kegiatan ini adalah\r\nDr. Nindi Aristi, M.Comn dan Dr. Novita Damayanti, M.Si\r\n', '2023-09-11', 'Tim Lp2mi', NULL, NULL, '3'),
(11, 'WORKSHOP PENYUSUNAN MODUL PEMBELAJARAN BERBASIS CASE STUDY & PROJECT BASE LEARNING \r\n(Hibah PKKM Ilmu Komunikasi Universitas Fajar)', 'Kegiatan Workshop Penyusunan Modul Pembelajaran Berbasis Case Strudy dan Project Base Learning dilaksanakan Prodi Komunikasi Universitas Fajar pada hari Selasa, 12 September 2023 di Hotel Grand Maleo.\r\nDengan pembicara Prof.Dr.Arsad Bahri, S.Pd, M.Pd. dan Dr.Amiruddin,S.Pd,M.Si.\r\n', '2023-09-12', 'Tim LP2MI', NULL, '2023-09-12 01:58:00', '3'),
(12, 'Sosialisasi SNI ISO 9001:2015 dan SNI ISO 21001:2018 Mendukung transformasi penjaminan Mutu untuk Pendidikan Tinggi Berkualitas di Indoseia', 'Sosialisasi SNI ISO 9001:2015 dan SNI ISO 21001:2018 Mendukung transformasi penjaminan Mutu untuk Pendidikan Tinggi Berkualitas di Indoseia. Kegiatan ini dilaksanakan oleh LLDikti Wilayah IX pada hari selasa, 12 September 2023 di Gedung Aula LLDikti Wilayah IX.', '2023-09-12', NULL, NULL, '2023-09-12 02:24:54', '3'),
(13, 'MONEV INTERNAL KEGIATAN HIBAH PKKM TAHUN ANGGARAN 2023 UNIVERSITAS FAJAR', 'Kegiatan monev internal ini dilakukan oleh Lp2mi unifa untuk memonitoring aktivitas kegiatasan Hibah PKKM yang dilaksanakan oleh 5 bagian di Universitas Fajar. Selain itu Lp2mi mengevaluasi aktivitas yang telah berlangsung terkait kendala apa yang diperoleh dan bagaiamana dalam menyelesaikan kendala tersebut.\r\nHibah PKKM ini diikuti oleh Program Studi S1 Akuntnasi, Program Studi Teknik Sipil, Program Studi Ilmu Komunikasi, Program Studi Teknik Elektro dan ISS- MBKM Universitas Fajar', '2023-09-01', 'Admin Lp2mi', NULL, '2023-09-01 08:03:59', NULL),
(14, 'MONITORING DAN EVALUASI PROGRAM KERJA PASCASARJANA UNIVERSITAS FAJAR', 'Monev dilaksanakan pada hari selasa, 21 November 2023 di ruangan Pascasarjana Universitas Fajar Makassar yang dihadiri oleh Dekan dan wakildekan serta para kaprodi, monev ini dilakukan untuk melihat progres pencapaian program kerja serta untuk melihat hambatan serta pemecahan masalah pada proker pascasarjana universitas fajar', '2023-11-21', 'Admin - Lp2mi', NULL, '2023-11-21 06:54:25', NULL),
(15, 'RAPAT KERJA UNIVERSITAS FAJAR TAHUN 2023/2024', 'Rapat Kerja Universitas Fajar merupakan rapat evaluasi dan pencapaian program kerja universitas fajar yang dilanjutkan dengan pemaparan program kerja pada periode berikutnya.', '2023-11-24', 'Tim LP2MI ', NULL, '2023-11-24 07:05:18', '3');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_file`
--
ALTER TABLE `tb_file`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kat_doc`
--
ALTER TABLE `tb_kat_doc`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_postingan`
--
ALTER TABLE `tb_postingan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_file`
--
ALTER TABLE `tb_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT untuk tabel `tb_kat_doc`
--
ALTER TABLE `tb_kat_doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_postingan`
--
ALTER TABLE `tb_postingan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
