-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Mar 2020 pada 04.23
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_laracms`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_access_menu`
--

CREATE TABLE `admin_access_menu` (
  `id` int(11) NOT NULL,
  `role` varchar(20) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin_access_menu`
--

INSERT INTO `admin_access_menu` (`id`, `role`, `menu_id`) VALUES
(1, '1', 1),
(2, '1', 2),
(5, '1', 3),
(6, '1', 4),
(7, '2', 5),
(8, '1', 6),
(9, '1', 7),
(10, '2', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_menu`
--

CREATE TABLE `admin_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(50) NOT NULL,
  `access` varchar(50) NOT NULL,
  `sort` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin_menu`
--

INSERT INTO `admin_menu` (`id`, `menu`, `access`, `sort`) VALUES
(1, 'USER OPTION', 'true', 2),
(2, 'LAYOUT OPTION', 'true', 3),
(3, 'BOD MESSAGE', 'true', 4),
(4, 'INFORMATION', 'true', 5),
(5, 'PORTAL', 'secure', 8),
(6, 'MAIN', 'true', 1),
(7, 'EDUCATION', 'true', 7),
(8, 'ACCOUNT', 'secure', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_sub_menu`
--

CREATE TABLE `admin_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `url` varchar(50) NOT NULL,
  `sub_menu` varchar(100) NOT NULL,
  `icon` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin_sub_menu`
--

INSERT INTO `admin_sub_menu` (`id`, `menu_id`, `url`, `sub_menu`, `icon`) VALUES
(1, 1, '/showuser', 'User Data', 'nav-icon fas fa-user'),
(2, 2, '/opsugcom', 'Suggestion', 'nav-icon fas fa-comment-alt'),
(3, 2, '/opheader', 'Header', 'nav-icon fas fa-heading'),
(4, 2, '/footer', 'Footer', 'nav-icon fas fa-shoe-prints'),
(5, 2, '/opvideo', 'Video Post', 'nav-icon fab fa-youtube'),
(6, 2, '/opfeature', 'Feature Post', 'nav-icon fab fa-hubspot'),
(7, 3, '/opceom', 'Ceo Message', 'nav-icon fas fa-envelope'),
(8, 3, '/opmfbod', 'Message From Bod', 'nav-icon fas fa-envelope-open'),
(9, 4, '/ideprate', 'Deposit Rate', 'nav-icon fas fa-hand-holding-usd'),
(10, 4, '/ibranch', 'Branch News', 'nav-icon fas fa-project-diagram'),
(11, 4, '/idivision', 'Division News', 'nav-icon fas fa-briefcase'),
(12, 4, '/itech', 'Technology & System', 'nav-icon fas fa-mobile'),
(13, 2, '/ophot', 'Hot News', 'nav-icon fas fa-fire'),
(14, 5, '/email', 'E-Mail', 'nav-icon fas fa-at'),
(15, 6, '/admin', 'Dashboard', 'nav-icon fas ti-calendar'),
(16, 2, '/comment', 'Full Comment', 'nav-icon fas fa-comments'),
(17, 7, '/ediction', 'Dictionary', 'nav-icon fas fa-book'),
(18, 8, '/profile', 'Profile', 'nav-icon fas fa-user'),
(19, 2, '/breaking', 'Breaking News', 'nav-icon far fa-newspaper');

-- --------------------------------------------------------

--
-- Struktur dari tabel `comment_branch`
--

CREATE TABLE `comment_branch` (
  `id` int(11) NOT NULL,
  `cb_id` int(11) NOT NULL,
  `cabang` text NOT NULL,
  `author` text NOT NULL,
  `time_post` datetime NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `comment_division`
--

CREATE TABLE `comment_division` (
  `id` int(11) NOT NULL,
  `cd_id` int(11) NOT NULL,
  `divisi` text NOT NULL,
  `author` text NOT NULL,
  `time_post` datetime NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `comment_division`
--

INSERT INTO `comment_division` (`id`, `cd_id`, `divisi`, `author`, `time_post`, `comment`) VALUES
(18, 15, 'Divisi Lain', 'Citra Febiarini Susilo', '2020-02-17 04:48:59', 'tes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `comment_feature`
--

CREATE TABLE `comment_feature` (
  `id` int(11) NOT NULL,
  `cf_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `author` text NOT NULL,
  `time_post` datetime NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `comment_hotnews`
--

CREATE TABLE `comment_hotnews` (
  `id` int(11) NOT NULL,
  `ch_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `author` text NOT NULL,
  `time_post` datetime NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `comment_hotnews`
--

INSERT INTO `comment_hotnews` (`id`, `ch_id`, `title`, `author`, `time_post`, `comment`) VALUES
(3, 14, 'Keputusan', 'Retno Ayu Winarni', '2020-02-11 09:56:07', 'Coba');

-- --------------------------------------------------------

--
-- Struktur dari tabel `comment_tech`
--

CREATE TABLE `comment_tech` (
  `id` int(11) NOT NULL,
  `ct_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `author` text NOT NULL,
  `time_post` datetime NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dictionary`
--

CREATE TABLE `dictionary` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dictionary`
--

INSERT INTO `dictionary` (`id`, `title`, `image`, `description`, `updated_at`) VALUES
(4, 'Perkembangan acara', '1581565813.jpg', '<p>&nbsp;Mencoba dfjkasl fjdklas&nbsp;Mencoba dfjkasl fjdklas&nbsp;Mencoba dfjkasl fjdklas&nbsp;Mencoba dfjkasl fjdklas&nbsp;Mencoba dfjkasl fjdklas&nbsp;Mencoba dfjkasl fjdklas&nbsp;Mencoba dfjkasl fjdklas&nbsp;Mencoba dfjkasl fjdklas&nbsp;Mencoba dfjkasl fjdklas&nbsp;Mencoba dfjkasl fjdklas&nbsp;</p>', '2020-02-13 03:49:49'),
(5, 'Hay produk digital', '1581565837.jpeg', '<p>fdasjjfdsah hfdjsah hdjsahl fbhjdsaghf&nbsp;fdasjjfdsah hfdjsah hdjsahl fbhjdsaghf&nbsp;fdasjjfdsah hfdjsah hdjsahl fbhjdsaghf&nbsp;fdasjjfdsah hfdjsah hdjsahl fbhjdsaghf&nbsp;fdasjjfdsah hfdjsah hdjsahl fbhjdsaghf&nbsp;fdasjjfdsah hfdjsah hdjsahl fbhjdsaghf&nbsp;fdasjjfdsah hfdjsah hdjsahl fbhjdsaghf&nbsp;</p>', '2020-02-13 03:50:12'),
(6, 'Hay produk digital', '1581566534.jpg', '<p>&nbsp;Menciptakan sebuah ide&nbsp;Menciptakan sebuah ide&nbsp;Menciptakan sebuah ide&nbsp;Menciptakan sebuah ide&nbsp;Menciptakan sebuah ide&nbsp;Menciptakan sebuah ide&nbsp;Menciptakan sebuah ide&nbsp;Menciptakan sebuah ide&nbsp;Menciptakan sebuah ide&nbsp;Menciptakan sebuah ide&nbsp;Menciptakan sebuah ide&nbsp;</p>', '2020-02-13 04:01:44'),
(7, 'Memberikan akses apapun terhadap perusahaan', '1581566554.jpg', '<p>Membutuhkan kinerja yang baik&nbsp;Membutuhkan kinerja yang baik&nbsp;Membutuhkan kinerja yang baik&nbsp;Membutuhkan kinerja yang baik&nbsp;Membutuhkan kinerja yang baik&nbsp;Membutuhkan kinerja yang baik&nbsp;Membutuhkan kinerja yang baik&nbsp;Membutuhkan kinerja yang baik&nbsp;Membutuhkan kinerja yang baik&nbsp;Membutuhkan kinerja yang baik&nbsp;Membutuhkan kinerja yang baik&nbsp;Membutuhkan kinerja yang baik&nbsp;Membutuhkan kinerja yang baik&nbsp;Membutuhkan kinerja yang baik&nbsp;Membutuhkan kinerja yang baik&nbsp;</p>', '2020-02-13 04:02:13'),
(8, 'Memberikan akses apapun terhadap perusahaan', '1582093914.jpg', '<p>Mencoba tes aplikasi cms dms&nbsp;</p>', '2020-02-19 06:31:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ibranch`
--

CREATE TABLE `ibranch` (
  `id` int(11) NOT NULL,
  `cabang` varchar(50) NOT NULL,
  `title` text NOT NULL,
  `image` text NOT NULL,
  `image2` text NOT NULL,
  `image3` text NOT NULL,
  `description` text NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ibranch`
--

INSERT INTO `ibranch` (`id`, `cabang`, `title`, `image`, `image2`, `image3`, `description`, `updated_at`) VALUES
(10, 'Bekasi', 'Memberikan pelayanan yang maksimal sehingga dapat memenuhi kebutuhan', '1580808784.jpg', '1580808785.jpg', '1580808786.jpg', '<p>Terus support channel ini. Jangan lupa Like, Comment and Share ya teman-teman :D , agar tambah semangat bikin karyanya :)</p>', '2020-02-05 01:27:12'),
(11, 'Bandung', 'Membuat produk digital yang sesuai', '1580808770.jpg', '1580808771.jpg', '1580808772.jpg', 'Terus support channel ini. Jangan lupa Like, Comment and Share ya teman-teman :D , agar tambah semangat bikin karyanya :)', '2020-02-04 09:31:56'),
(12, 'Bandung', 'Membuat produk digital yang sesuai', '1580808816.jpg', '1580808817.jpg', '1580808818.jpg', 'Terus support channel ini. Jangan lupa Like, Comment and Share ya teman-teman :D , agar tambah semangat bikin karyanya :)', '2020-02-04 09:33:04'),
(13, 'Bekasi', 'Perkembangan acara', '1580809101.jpg', '1580809102.jpg', '1580809103.jpeg', '<p>KOMPAS.com -&nbsp;Penyebaran virus corona di Kota Wuhan, China memengaruhi berbagai aspek dari segi industri teknologi. Hal ini juga berdampak langsung kepada vendor smartphone asal Korea Selatan, Samsung yang dikabarkan mengalami kendala pasokan aksesori ponsel Galaxy S20, menjelang peluncurannya. Dihimpun KompasTekno dari Gizmo China, Rabu (5/2/2020), berbagai suplier aksesori ponsel telah mengirim surat pemberitahuan keterlambatan pengiriman aksesori Galaxy S20, karena wabah virus corona. Selain karena wabah virus corona, faktor lain yang menyebabkan penundaan adalah libur Tahun Baru Imlek yang diperpanjang oleh pemerintah China, sebagai upaya untuk mencegah penyebaran infeksi virus corona. Baca juga: Peluncuran Xiaomi Mi 10 Ditunda dan Hanya Lewat Streaming Akibat Corona Dengan kata lain, area seperti pabrik pun juga menghentikan aktivitas produksi demi mencegah penyebaran virus tersebut. Selain itu, produk-produk buatan China yang akan dijual akan melewati kontrol yang lebih ketat dan kemungkinan menunda proses pengiriman. Samsung Galaxy S20 sendiri bakal meluncur pada 11 Februari 2020 mendatang, lewat acara tahunan Galaxy Unpacked di San Francisco, AS. Pembeli Galaxy S20 diprediksi bakal kesulitan mencari aksesori seperti case maupun pelindung layar. Untuk diketahui bahwa pada pekan lalu, pemerintah China juga sudah menutup sejumlah pabrik smartphone di beberapa wilayah, termasuk Samsung dan Foxconn yang merupakan pemasok dan perakit produk-produk Apple. Baca juga: Pasokan iPhone Diprediksi Menurun gara-gara Virus Corona Tak hanya Apple, sejumlah perusahaan teknologi pun juga terkena dampak dari penyebaran virus corona ini. Contohnya Google yang harus menutup empat kantornya yang berbasis di China. Perusahaan lain seperti Facebook, LG, hingga Razer pun telah melarang karyawannya untuk bepergian ke wilayah China untuk menghindari virus tersebut. Pemerintah China juga mengimbau agar penduduknya tetap berada di dalam rumah guna menghindari dampak virus corona.<br />\r\n<br />\r\nArtikel ini telah tayang di&nbsp;<a href=\"http://kompas.com/\">Kompas.com</a>&nbsp;dengan judul &quot;Casing dan Pelindung Layar Galaxy S20 Bakal Susah Dicari?&quot;,&nbsp;<a href=\"https://tekno.kompas.com/read/2020/02/05/13390017/casing-dan-pelindung-layar-galaxy-s20-bakal-susah-dicari-\">https://tekno.kompas.com/read/2020/02/05/13390017/casing-dan-pelindung-layar-galaxy-s20-bakal-susah-dicari-</a>.<br />\r\nPenulis : Conney Stephanie<br />\r\nEditor : Reska K. Nistanto</p>', '2020-02-10 08:31:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ideprate`
--

CREATE TABLE `ideprate` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `onem` varchar(20) NOT NULL,
  `twom` varchar(20) NOT NULL,
  `threem` varchar(20) NOT NULL,
  `twelm` varchar(20) NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ideprate`
--

INSERT INTO `ideprate` (`id`, `description`, `onem`, `twom`, `threem`, `twelm`, `updated_at`) VALUES
(1, 'Deposito Berjangka', '6.75', '6.75', '6.75', '6.75', '2020-02-24 10:25:23'),
(2, 'Giro', '2.5', '2.5', '2.5', '2.5', '2020-01-21 08:41:47'),
(3, 'Tabungan', '0.5 sampai 1.5 pa', '0.5 sampai 1.5 pa', '0.5 sampai 1.5 pa', '0.5 sampai 1.5 pa', '2020-02-12 04:55:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `idivision`
--

CREATE TABLE `idivision` (
  `id` int(11) NOT NULL,
  `divisi` varchar(50) NOT NULL,
  `title` text NOT NULL,
  `image` text NOT NULL,
  `image2` text NOT NULL,
  `image3` text NOT NULL,
  `description` text NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `idivision`
--

INSERT INTO `idivision` (`id`, `divisi`, `title`, `image`, `image2`, `image3`, `description`, `updated_at`) VALUES
(13, 'Divisi apa', 'Membuat produk digital yang sesuaia', '1580801754.jpg', '1580801755.jpg', '1580801756.jpg', 'Terus support channel ini. Jangan lupa Like, Comment and Share ya teman-teman :D , agar tambah semangat bikin karyanya :)', '2020-02-04 07:38:26'),
(14, 'Divisi apao', 'Memberikan pelayanan yang maksimal sehingga dapat memenuhi kebutuhan', '1580804504.jpg', '1580804505.jpg', '1580804506.jpg', '<p>Terus support channel ini. Jangan lupa Like, Comment and Share ya teman-teman :D , agar tambah semangat bikin karyanya :)</p>', '2020-02-10 08:40:19'),
(15, 'Divisi Lain', 'Membuat produk digital yang sesuai', '1580804987.jpg', '1580804988.jpg', '1580804989.jpeg', 'Terus support channel ini. Jangan lupa Like, Comment and Share ya teman-teman :D , agar tambah semangat bikin karyanya :)', '2020-02-04 08:29:33'),
(16, 'Divisi apa', 'Memberikan pelayanan yang maksimal sehingga dapat memenuhi kebutuhan', '1580809443.jpg', '1580809444.jpg', '1580809445.jpg', '<p>KOMPAS.com -&nbsp;Penyebaran virus corona di Kota Wuhan, China memengaruhi berbagai aspek dari segi industri teknologi. Hal ini juga berdampak langsung kepada vendor smartphone asal Korea Selatan, Samsung yang dikabarkan mengalami kendala pasokan aksesori ponsel Galaxy S20, menjelang peluncurannya. Dihimpun KompasTekno dari Gizmo China, Rabu (5/2/2020), berbagai suplier aksesori ponsel telah mengirim surat pemberitahuan keterlambatan pengiriman aksesori Galaxy S20, karena wabah virus corona. Selain karena wabah virus corona, faktor lain yang menyebabkan penundaan adalah libur Tahun Baru Imlek yang diperpanjang oleh pemerintah China, sebagai upaya untuk mencegah penyebaran infeksi virus corona. Baca juga: Peluncuran Xiaomi Mi 10 Ditunda dan Hanya Lewat Streaming Akibat Corona Dengan kata lain, area seperti pabrik pun juga menghentikan aktivitas produksi demi mencegah penyebaran virus tersebut. Selain itu, produk-produk buatan China yang akan dijual akan melewati kontrol yang lebih ketat dan kemungkinan menunda proses pengiriman. Samsung Galaxy S20 sendiri bakal meluncur pada 11 Februari 2020 mendatang, lewat acara tahunan Galaxy Unpacked di San Francisco, AS. Pembeli Galaxy S20 diprediksi bakal kesulitan mencari aksesori seperti case maupun pelindung layar. Untuk diketahui bahwa pada pekan lalu, pemerintah China juga sudah menutup sejumlah pabrik smartphone di beberapa wilayah, termasuk Samsung dan Foxconn yang merupakan pemasok dan perakit produk-produk Apple. Baca juga: Pasokan iPhone Diprediksi Menurun gara-gara Virus Corona Tak hanya Apple, sejumlah perusahaan teknologi pun juga terkena dampak dari penyebaran virus corona ini. Contohnya Google yang harus menutup empat kantornya yang berbasis di China. Perusahaan lain seperti Facebook, LG, hingga Razer pun telah melarang karyawannya untuk bepergian ke wilayah China untuk menghindari virus tersebut. Pemerintah China juga mengimbau agar penduduknya tetap berada di dalam rumah guna menghindari dampak virus corona.<br />\r\n<br />\r\nArtikel ini telah tayang di&nbsp;<a href=\"http://kompas.com/\">Kompas.com</a>&nbsp;dengan judul &quot;Casing dan Pelindung Layar Galaxy S20 Bakal Susah Dicari?&quot;,&nbsp;<a href=\"https://tekno.kompas.com/read/2020/02/05/13390017/casing-dan-pelindung-layar-galaxy-s20-bakal-susah-dicari-\">https://tekno.kompas.com/read/2020/02/05/13390017/casing-dan-pelindung-layar-galaxy-s20-bakal-susah-dicari-</a>.<br />\r\nPenulis : Conney Stephanie<br />\r\nEditor : Reska K. Nistanto</p>', '2020-02-07 01:35:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `isbdk`
--

CREATE TABLE `isbdk` (
  `id` int(11) NOT NULL,
  `segmen` text DEFAULT NULL,
  `sbdk` text DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `isbdk`
--

INSERT INTO `isbdk` (`id`, `segmen`, `sbdk`, `updated_at`) VALUES
(1, 'Korporasi', '13.23', '2020-03-02 08:59:52'),
(2, 'Ritel', '13.73', '2020-03-02 08:59:55'),
(3, 'Mikro', '13.73', '2020-03-02 09:00:00'),
(4, 'Kpr', '13.23', '2020-03-02 09:00:02'),
(5, 'Non Kpr', '14.48', '2020-03-02 02:07:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `itech`
--

CREATE TABLE `itech` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `image2` text NOT NULL,
  `image3` text NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `itech`
--

INSERT INTO `itech` (`id`, `title`, `description`, `image`, `image2`, `image3`, `updated_at`) VALUES
(9, 'Membuat produk digital yang sesuai', '<p>KOMPAS.com -&nbsp;Penyebaran virus corona di Kota Wuhan, China memengaruhi berbagai aspek dari segi industri teknologi. Hal ini juga berdampak langsung kepada vendor smartphone asal Korea Selatan, Samsung yang dikabarkan mengalami kendala pasokan aksesori ponsel Galaxy S20, menjelang peluncurannya. Dihimpun KompasTekno dari Gizmo China, Rabu (5/2/2020), berbagai suplier aksesori ponsel telah mengirim surat pemberitahuan keterlambatan pengiriman aksesori Galaxy S20, karena wabah virus corona. Selain karena wabah virus corona, faktor lain yang menyebabkan penundaan adalah libur Tahun Baru Imlek yang diperpanjang oleh pemerintah China, sebagai upaya untuk mencegah penyebaran infeksi virus corona. Baca juga: Peluncuran Xiaomi Mi 10 Ditunda dan Hanya Lewat Streaming Akibat Corona Dengan kata lain, area seperti pabrik pun juga menghentikan aktivitas produksi demi mencegah penyebaran virus tersebut. Selain itu, produk-produk buatan China yang akan dijual akan melewati kontrol yang lebih ketat dan kemungkinan menunda proses pengiriman. Samsung Galaxy S20 sendiri bakal meluncur pada 11 Februari 2020 mendatang, lewat acara tahunan Galaxy Unpacked di San Francisco, AS. Pembeli Galaxy S20 diprediksi bakal kesulitan mencari aksesori seperti case maupun pelindung layar. Untuk diketahui bahwa pada pekan lalu, pemerintah China juga sudah menutup sejumlah pabrik smartphone di beberapa wilayah, termasuk Samsung dan Foxconn yang merupakan pemasok dan perakit produk-produk Apple. Baca juga: Pasokan iPhone Diprediksi Menurun gara-gara Virus Corona Tak hanya Apple, sejumlah perusahaan teknologi pun juga terkena dampak dari penyebaran virus corona ini. Contohnya Google yang harus menutup empat kantornya yang berbasis di China. Perusahaan lain seperti Facebook, LG, hingga Razer pun telah melarang karyawannya untuk bepergian ke wilayah China untuk menghindari virus tersebut. Pemerintah China juga mengimbau agar penduduknya tetap berada di dalam rumah guna menghindari dampak virus corona.<br />\r\n<br />\r\nArtikel ini telah tayang di&nbsp;<a href=\"http://kompas.com/\">Kompas.com</a>&nbsp;dengan judul &quot;Casing dan Pelindung Layar Galaxy S20 Bakal Susah Dicari?&quot;,&nbsp;<a href=\"https://tekno.kompas.com/read/2020/02/05/13390017/casing-dan-pelindung-layar-galaxy-s20-bakal-susah-dicari-\">https://tekno.kompas.com/read/2020/02/05/13390017/casing-dan-pelindung-layar-galaxy-s20-bakal-susah-dicari-</a>.<br />\r\nPenulis : Conney Stephanie<br />\r\nEditor : Reska K. Nistanto</p>', '1580810152.jpg', '1580810153.png', '1580810154.jpg', '2020-02-08 12:28:23'),
(11, 'Memberikan akses apapun terhadap perusahaan', '<p>KOMPAS.com -&nbsp;Penyebaran virus corona di Kota Wuhan, China memengaruhi berbagai aspek dari segi industri teknologi. Hal ini juga berdampak langsung kepada vendor smartphone asal Korea Selatan, Samsung yang dikabarkan mengalami kendala pasokan aksesori ponsel Galaxy S20, menjelang peluncurannya. Dihimpun KompasTekno dari Gizmo China, Rabu (5/2/2020), berbagai suplier aksesori ponsel telah mengirim surat pemberitahuan keterlambatan pengiriman aksesori Galaxy S20, karena wabah virus corona. Selain karena wabah virus corona, faktor lain yang menyebabkan penundaan adalah libur Tahun Baru Imlek yang diperpanjang oleh pemerintah China, sebagai upaya untuk mencegah penyebaran infeksi virus corona. Baca juga: Peluncuran Xiaomi Mi 10 Ditunda dan Hanya Lewat Streaming Akibat Corona Dengan kata lain, area seperti pabrik pun juga menghentikan aktivitas produksi demi mencegah penyebaran virus tersebut. Selain itu, produk-produk buatan China yang akan dijual akan melewati kontrol yang lebih ketat dan kemungkinan menunda proses pengiriman. Samsung Galaxy S20 sendiri bakal meluncur pada 11 Februari 2020 mendatang, lewat acara tahunan Galaxy Unpacked di San Francisco, AS. Pembeli Galaxy S20 diprediksi bakal kesulitan mencari aksesori seperti case maupun pelindung layar. Untuk diketahui bahwa pada pekan lalu, pemerintah China juga sudah menutup sejumlah pabrik smartphone di beberapa wilayah, termasuk Samsung dan Foxconn yang merupakan pemasok dan perakit produk-produk Apple. Baca juga: Pasokan iPhone Diprediksi Menurun gara-gara Virus Corona Tak hanya Apple, sejumlah perusahaan teknologi pun juga terkena dampak dari penyebaran virus corona ini. Contohnya Google yang harus menutup empat kantornya yang berbasis di China. Perusahaan lain seperti Facebook, LG, hingga Razer pun telah melarang karyawannya untuk bepergian ke wilayah China untuk menghindari virus tersebut. Pemerintah China juga mengimbau agar penduduknya tetap berada di dalam rumah guna menghindari dampak virus corona.<br />\r\n<br />\r\nArtikel ini telah tayang di&nbsp;<a href=\"http://kompas.com/\">Kompas.com</a>&nbsp;dengan judul &quot;Casing dan Pelindung Layar Galaxy S20 Bakal Susah Dicari?&quot;,&nbsp;<a href=\"https://tekno.kompas.com/read/2020/02/05/13390017/casing-dan-pelindung-layar-galaxy-s20-bakal-susah-dicari-\">https://tekno.kompas.com/read/2020/02/05/13390017/casing-dan-pelindung-layar-galaxy-s20-bakal-susah-dicari-</a>.<br />\r\nPenulis : Conney Stephanie<br />\r\nEditor : Reska K. Nistanto</p>', '1581164976.jpg', '1581164977.jpg', '1581164978.jpg', '2020-02-08 12:29:23'),
(12, 'Memberikan akses apapun terhadap perusahaan', '<p>KOMPAS.com -&nbsp;Penyebaran virus corona di Kota Wuhan, China memengaruhi berbagai aspek dari segi industri teknologi. Hal ini juga berdampak langsung kepada vendor smartphone asal Korea Selatan, Samsung yang dikabarkan mengalami kendala pasokan aksesori ponsel Galaxy S20, menjelang peluncurannya. Dihimpun KompasTekno dari Gizmo China, Rabu (5/2/2020), berbagai suplier aksesori ponsel telah mengirim surat pemberitahuan keterlambatan pengiriman aksesori Galaxy S20, karena wabah virus corona. Selain karena wabah virus corona, faktor lain yang menyebabkan penundaan adalah libur Tahun Baru Imlek yang diperpanjang oleh pemerintah China, sebagai upaya untuk mencegah penyebaran infeksi virus corona. Baca juga: Peluncuran Xiaomi Mi 10 Ditunda dan Hanya Lewat Streaming Akibat Corona Dengan kata lain, area seperti pabrik pun juga menghentikan aktivitas produksi demi mencegah penyebaran virus tersebut. Selain itu, produk-produk buatan China yang akan dijual akan melewati kontrol yang lebih ketat dan kemungkinan menunda proses pengiriman. Samsung Galaxy S20 sendiri bakal meluncur pada 11 Februari 2020 mendatang, lewat acara tahunan Galaxy Unpacked di San Francisco, AS. Pembeli Galaxy S20 diprediksi bakal kesulitan mencari aksesori seperti case maupun pelindung layar. Untuk diketahui bahwa pada pekan lalu, pemerintah China juga sudah menutup sejumlah pabrik smartphone di beberapa wilayah, termasuk Samsung dan Foxconn yang merupakan pemasok dan perakit produk-produk Apple. Baca juga: Pasokan iPhone Diprediksi Menurun gara-gara Virus Corona Tak hanya Apple, sejumlah perusahaan teknologi pun juga terkena dampak dari penyebaran virus corona ini. Contohnya Google yang harus menutup empat kantornya yang berbasis di China. Perusahaan lain seperti Facebook, LG, hingga Razer pun telah melarang karyawannya untuk bepergian ke wilayah China untuk menghindari virus tersebut. Pemerintah China juga mengimbau agar penduduknya tetap berada di dalam rumah guna menghindari dampak virus corona.<br />\r\n<br />\r\nArtikel ini telah tayang di&nbsp;<a href=\"http://kompas.com/\">Kompas.com</a>&nbsp;dengan judul &quot;Casing dan Pelindung Layar Galaxy S20 Bakal Susah Dicari?&quot;,&nbsp;<a href=\"https://tekno.kompas.com/read/2020/02/05/13390017/casing-dan-pelindung-layar-galaxy-s20-bakal-susah-dicari-\">https://tekno.kompas.com/read/2020/02/05/13390017/casing-dan-pelindung-layar-galaxy-s20-bakal-susah-dicari-</a>.<br />\r\nPenulis : Conney Stephanie<br />\r\nEditor : Reska K. Nistanto</p>', '1580810396.jpg', '1580810397.jpg', '1580810398.jpg', '2020-02-10 08:43:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 2),
(4, '2016_06_01_000001_create_oauth_auth_codes_table', 2),
(5, '2016_06_01_000002_create_oauth_access_tokens_table', 2),
(6, '2016_06_01_000003_create_oauth_refresh_tokens_table', 2),
(7, '2016_06_01_000004_create_oauth_clients_table', 2),
(8, '2016_06_01_000005_create_oauth_personal_access_clients_table', 2),
(9, '2019_08_19_000000_create_failed_jobs_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'QJ9YcvTCBgzmybZOuPajYx9k6YLgb9vPPebusMTO', 'http://localhost', 1, 0, 0, '2020-02-02 20:43:30', '2020-02-02 20:43:30'),
(2, NULL, 'Laravel Password Grant Client', 'T3LXlkVV70lyfui4Cb5alDbSYKCkE0ZTTNQO6ycR', 'http://localhost', 0, 1, 0, '2020-02-02 20:43:31', '2020-02-02 20:43:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-02-02 20:43:30', '2020-02-02 20:43:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `opbreaking`
--

CREATE TABLE `opbreaking` (
  `id` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `opbreaking`
--

INSERT INTO `opbreaking` (`id`, `description`, `link`, `updated_at`) VALUES
(2, 'Jangan lupa rekan-rekan frontliner untuk mengikuti tes online pukul 16:00 Wib dengan klik tulisan ini :)', 'https://www.yudhabhakti.co.id/', '2020-03-02 03:14:00'),
(3, 'Test dummy', 'https://www.yudhabhakti.co.id/', '2020-03-02 03:17:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `opceom`
--

CREATE TABLE `opceom` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `image` varchar(128) NOT NULL,
  `ceom_message` text NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `opceom`
--

INSERT INTO `opceom` (`id`, `name`, `image`, `ceom_message`, `updated_at`) VALUES
(1, 'Joni Direktur Utama', '1579666163.jpg', '\" This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. \"', '2020-02-03 04:09:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `opfeature`
--

CREATE TABLE `opfeature` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `subtitle` varchar(225) NOT NULL,
  `image` text NOT NULL,
  `image2` text NOT NULL,
  `image3` text NOT NULL,
  `description` text NOT NULL,
  `time` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `opfeature`
--

INSERT INTO `opfeature` (`id`, `title`, `subtitle`, `image`, `image2`, `image3`, `description`, `time`, `updated_at`) VALUES
(34, 'Perkembangan acara', 'Papua diberikan rejekii', '1581301072.jpg', '1581301073.jpg', '1581301074.jpg', '<p>Type here .....</p>', '2020-02-10 02:17:39', '2020-02-10 02:17:51'),
(35, 'Perkembangan acara', 'Papua diberikan rejekii', '1581308872.jpg', '1581308873.jpg', '1581308874.jpg', '<p>Type here .....</p>', '2020-02-10 04:27:32', '2020-02-10 04:27:32'),
(36, 'Perkembangan acara', 'Mendahului semua', '1581308890.jpg', '1581308891.jpg', '1581308892.jpg', '<p>Type here .....</p>', '2020-02-10 04:27:51', '2020-02-10 04:27:51'),
(37, 'Perkembangan acara', 'Mendahului semua', '1581308910.jpg', '1581308911.jpg', '1581308912.jpg', '<p>Type here .....</p>', '2020-02-10 04:28:09', '2020-02-10 04:28:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `opfooter`
--

CREATE TABLE `opfooter` (
  `id` int(11) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `opfooter`
--

INSERT INTO `opfooter` (`id`, `about`) VALUES
(1, 'Hay - Dms adalah sebuah portal berita-berita perusahaan yang didalamnya juga mempunyai fitur-fitur aplikasi lainnya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ophot`
--

CREATE TABLE `ophot` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `subtitle` text NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `image2` text NOT NULL,
  `image3` text NOT NULL,
  `image4` text NOT NULL,
  `description` text NOT NULL,
  `description2` text NOT NULL,
  `description3` text NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ophot`
--

INSERT INTO `ophot` (`id`, `title`, `subtitle`, `tipe`, `image`, `image2`, `image3`, `image4`, `description`, `description2`, `description3`, `updated_at`) VALUES
(8, 'Keputusan', 'Hak Akses', 'shn', '1581497163.jpg', '1581497164.jpg', '1581497165.jpg', '1581497166.jpg', '<p>Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja</p>', ' Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja ', '<p>Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja</p>', '2020-02-12 08:45:44'),
(9, 'Keputusan', 'Hak Akses', 'shn', '1581497183.jpg', '1581497184.png', '1581497185.jpg', '1581497186.jpg', '<p>Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja</p>', ' Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja ', '<p>Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja</p>', '2020-02-12 08:46:05'),
(10, 'Keputusan', 'Hak Akses', 'shn', '1581497205.jpg', '1581497206.jpeg', '1581497207.jpg', '1581497208.jpg', '<p>Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja</p>', ' Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja ', '<p>Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja</p>', '2020-02-12 08:46:25'),
(11, 'Keputusan', 'Hak Akses', 'shn', '13.jpg', '14.jpg', '15.jpg', '16.jpg', ' Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja ', ' Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja ', ' Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja ', '0000-00-00 00:00:00'),
(12, 'Keputusan', 'Hak Akses', 'shn', '17.jpg', '18.jpg', '19.jpg', '20.jpg', ' Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja ', ' Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja ', ' Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja ', '0000-00-00 00:00:00'),
(13, 'Keputusan', 'Hak Akses', 'shn', '21.jpg', '22.jpg', '23.jpg', '24.jpg', ' Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja ', ' Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja ', ' Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja ', '0000-00-00 00:00:00'),
(14, 'Keputusan', 'Hak Akses', 'shn', '25.jpg', '26.jpg', '27.jpg', '28.jpg', ' Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja ', ' Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja ', ' Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja Coba tes aja ', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `opmfbod`
--

CREATE TABLE `opmfbod` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(225) NOT NULL,
  `mfbod_message` text NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `opmfbod`
--

INSERT INTO `opmfbod` (`id`, `name`, `image`, `mfbod_message`, `updated_at`) VALUES
(1, 'Jaun Direktur Bisnis', '1579506049.jpg', '\" This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. \"', '2020-01-20 07:40:40'),
(2, 'Parjo Direktur Kepatuhan', '1579506059.jpg', '\" This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. \"', '2020-01-20 07:40:52'),
(3, 'Hilmi Direktur Operasi', '1579506070.jpg', '\" This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. \"', '2020-01-20 07:41:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `opvideos`
--

CREATE TABLE `opvideos` (
  `id` int(11) NOT NULL,
  `url` varchar(225) NOT NULL,
  `title` text NOT NULL,
  `image` varchar(225) NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `opvideos`
--

INSERT INTO `opvideos` (`id`, `url`, `title`, `image`, `updated_at`) VALUES
(27, 'https://www.youtube.com/watch?v=qK0m4R8C1NQ', 'Memilih aturan baru', '1.jpg', '2020-01-09 03:04:33'),
(28, 'https://www.youtube.com/watch?v=qK0m4R8C1NQ', 'memberikan masukan', '2.jpg', '2020-01-31 03:04:49'),
(29, 'https://www.youtube.com/watch?v=qK0m4R8C1NQ', 'Digitalisasi 4.0', '1581318048.jpg', '2020-02-10 07:00:43'),
(30, 'https://www.youtube.com/watch?v=qK0m4R8C1NQ', 'Memelihara teknologi', '4.jpg', '2020-01-16 03:05:20'),
(31, 'https://www.youtube.com/watch?v=qK0m4R8C1NQ', 'Dukungan akulaku', '5.jpg', '2020-01-31 03:05:32'),
(33, 'https://www.youtube.com/watch?v=qK0m4R8C1NQ', 'Perkembangan acara', '1581497115.jpg', '2020-02-12 08:45:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sugcom`
--

CREATE TABLE `sugcom` (
  `id` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `time_post` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sugcom`
--

INSERT INTO `sugcom` (`id`, `nik`, `name`, `message`, `time_post`) VALUES
(6, 309121300, 'Igna Dita Yolanda', 'Byb sangat keren terimakasih banyak ya', '2020-01-24 02:25:26'),
(7, 1711030704, 'Veronika Vena Rosalin', 'Keputusan yang sangat baik terhadap perkembangan perusahaan', '2020-01-24 03:56:09'),
(9, 311141447, 'Retno Ayu Winarni', 'Tes mengetik comment yang baik dan benar', '2020-01-31 02:47:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(100) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organisasi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` int(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `nik`, `password`, `remember_token`, `jabatan`, `organisasi`, `level`, `status`, `is_active`, `created_at`, `updated_at`) VALUES
(6, '1', 'Dimas Yogi Sugara', '1234', '$2y$10$JsA7pT9kDTj1yaMoZr9iCe/b1L71ZNwZu9ozu/qEBPuYYAljFHmyO', 'Fef8ULJrGfQOLjzGRkEoryF4YKwrtWzQEfCBsvyVqF7NzlOQpC2Vr4jQM5zq', 'Super Admin', 'Direksi Cms', 'Admin', 'Tetap', 1, '0000-00-00 00:00:00', '2020-02-23 19:07:57'),
(7, '2', 'Igna Dita Yolanda', '0309121300', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', '6CLcJ2FOBPNyLc2Uc8qmDmUDaxQArFrnd4MhjYavj86gL6jrrYEfYXA70txk', 'Sekretaris Direksi', 'Corporate Secretary', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, '2', 'Mirawati', '2310171627', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt7', 'Staf Corporate Secretary', 'Corporate Secretary', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, '2', 'Retno Ayu Winarni', '0311141447', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'Fro6zojsVPiTB7QeHQvGoyPo3uXcyp00tQddCv8Gq70BPasEqFiKCCZssS6e', 'Staf Credit Support KCP Bekasi - Corporate Secretary', 'Corporate Secretary', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '2020-02-16 21:34:49'),
(10, '2', 'Yudi Hermansyah', '0103111171', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt9', 'Staf Unit Laporan & Dokumentasi', 'Corporate Secretary', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, '2', 'Santo', '0104101106', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt10', 'Staf Credit Support KCP Dutamas - Corporate Secretary', 'Corporate Secretary', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, '2', 'Lili Halimah', '0111900083', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt11', 'Staf Credit Support KCP Kebon Jeruk - Corporate Secretary', 'Corporate Secretary', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, '2', 'Citra Febiarini Susilo', '1503181646', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 's4BwzKz1HmyfkB4wFJHaZvbGMkSYRTXJmCKLHGAYJyodTzG33RPgsUbJ2gj4', 'Staf Credit Support KPO - Corporate Secretary', 'Corporate Secretary', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, '2', 'Andre Goranico', '3010171628', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt13', 'Staf Legal & CI KC Surabaya', 'Corporate Secretary', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, '2', 'Alda Sania Utari', '2309131373', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt14', 'Staf Legal & CI KC Bandung', 'Corporate Secretary', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, '2', 'Rifana Hafsari Lestari', '0103181645', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt15', 'Staf Unit Credit Support KC Bandung', 'Corporate Secretary', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, '2', 'Asri Rahmawati', '0201141393', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt16', 'Staf Unit Credit Support KC Semarang', 'Corporate Secretary', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, '2', 'Alvin Suwardhana', '0107141434', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt17', 'Staf Unit Credit Suppor KC Medan', 'Corporate Secretary', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, '2', 'Ashri Azhari Baeha', '1004181650', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt18', 'Staf Legal & CI KC Medan', 'Corporate Secretary', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, '2', 'Linke Oktariana', '0907070926', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt19', 'Staf Unit Credit Support KC Palembang', 'Corporate Secretary', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, '2', 'Firmansyah Alkaf', '1012101154', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt20', 'Staf Legal & CI KC Palembang', 'Corporate Secretary', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, '2', 'Febri Yandri Rio Marpaung', '0107131355', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt21', 'Staf Legal & CI KC Pekanbaru', 'Corporate Secretary', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, '2', 'Munafri Mannawi', '2301171541', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt22', 'Staf Credit Support KC Makassar', 'Corporate Secretary', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, '2', 'Pranadiyan Lesmana', '0304171580', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt23', 'Staf Credit Support KCP Sier - Corporate Secretary', 'Corporate Secretary', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, '2', 'Rien Riany Anggraeny', '0412171633', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt24', 'Staf Credit Support KC Tasikmalaya', 'Corporate Secretary', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, '2', 'Dhini Azzahra', '2510191813', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt25', 'Staf Credit Support KC Cirebon', 'Corporate Secretary', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, '2', 'Yudo Yudia Saputra', '2205191756', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt26', 'Staf Credit & Support KCP Cimahi - Corporate Secretary', 'Corporate Secretary', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, '2', 'Bayu Suseno', '0208101142', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt27', 'Staf Corporate Communication', 'Corporate Secretary', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, '2', 'Wahyuni', '0106101128', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt28', 'Pjs. Kepala Unit Dealing Room', 'Dealing Room Treasury', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, '2', 'Gilang Cempaka Sari', '1907101137', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'EEOKsEH6hlKd6MvdRwEjohft5deVYnejDzeNvkISX0Pc4ivqCr2HixiRlcYY', 'Pjs. Kepala Unit Financial Institution Analsyt', 'Dealing Room Treasury', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, '2', 'Frisco Diaz Cevara', '1604010528', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt30', 'Staf Unit Pelaporan', 'Divisi Akuntansi & Pelaporan', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, '2', 'Aprilia Effendi', '0110121310', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt31', 'Staf Unit Perpajakan & Anggaran', 'Divisi Akuntansi & Pelaporan', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, '2', 'Tiara Aktobrianti', '1311131379', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt32', 'Staf Unit Fincon & Akuntansi', 'Divisi Akuntansi & Pelaporan', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, '2', 'Rahayu Lestari', '0910171621', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt33', 'Staf Unit Fincon & Akuntansi', 'Divisi Akuntansi & Pelaporan', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, '2', 'Ahyanawati', '1208131360', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt34', 'Staf Audit Support', 'Divisi Audit Intern', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, '2', 'Muhammad Rizqon Sidiq', '0601141390', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt35', 'Staf Audit Inspektorat 1', 'Divisi Audit Intern', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, '2', 'Regen T.M. Ritonga', '0311081054', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt36', 'Staf Audit Inspektorat 1', 'Divisi Audit Intern', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, '2', 'Roni Fahrudin', '1303171566', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt37', 'Staf Audit Resident KC Jember', 'Divisi Audit Intern', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, '2', 'Wahyuni', '2301171543', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt38', 'Staf Audit Resident KC Makassar', 'Divisi Audit Intern', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, '2', 'Marissa Utami', '0102121256', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt39', 'Staf Audit Resident KC Medan', 'Divisi Audit Intern', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, '2', 'Istiqomah', '0108111208', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt40', 'Staff Audit Resident KC Palembang', 'Divisi Audit Intern', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, '2', 'Irsal Yuniar', '0507191773', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt41', 'Staf Audit Inspektorat 1', 'Divisi Audit Intern', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, '2', 'Didy Iskandar', '0107191770', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt42', 'Staf Audit Investigasi', 'Divisi Audit Intern', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, '2', 'Suci Nurul Rochim', '0207141424', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt43', 'Staf Unit Kredit UMKM', 'Divisi Bisnis Komersial', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, '2', 'M.Rahadian Caesar Ilafie', '1710111221', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt44', 'Staf Unit Kredit Korporasi', 'Divisi Bisnis Komersial', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, '2', 'Randie Aulia', '1006131349', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt45', 'Staf Unit Pelaporan & Kredit Review', 'Divisi Bisnis Komersial', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, '2', 'Puji Prasetyono', '0203151459', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt46', 'Staf Unit Asuransi', 'Divisi Bisnis Konsumer & Pensiun', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, '2', 'Mardiyana', '0707081016', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt47', 'Loan Monitoring', 'Divisi Bisnis Konsumer & Pensiun', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, '2', 'Sugeng Priyatno', '1509141437', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt48', 'Loan Monitoring', 'Divisi Bisnis Konsumer & Pensiun', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, '2', 'Zuhendra', '0707081026', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt49', 'Staf Divisi Bisnis Pensiun', 'Divisi Bisnis Konsumer & Pensiun', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, '2', 'Andi Cahyo Putranto', '0411191819', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt50', 'Staf Loan Monitoring Kantor Pusat', 'Divisi Bisnis Konsumer & Pensiun', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, '2', 'Supriyanto', '0103070904', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt51', 'Staf Loan Monitoring KCP Kelapa Gading', 'Divisi Bisnis Konsumer & Pensiun', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, '2', 'Hana Pertiwi', '2503191736', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt52', 'Staf Design & Creative Art', 'Tim Digital Banking', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, '2', 'Nurul Lailani Alifah', '1902181640', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt53', 'Database Information Management', 'Tim Digital Banking', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, '2', 'Okky Wirawan', '0111191817', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt54', 'Staf Admin & Credit Support Digital Banking Kantor Pusat', 'Tim Digital Banking', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, '2', 'Sanda Riyani', '0605141416', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt55', 'Staf Unit Supervisi Operasi', 'Divisi Regional Bisnis', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, '2', 'Katy Muharyanti', '0603000371', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt56', 'Staf Unit Supervisi Kredit Konsumer & Pensiun', 'Divisi Regional Bisnis', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, '2', 'Fitria Kemala', '0111121317', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt57', 'Staf Unit Pengelolaan APU-PPT', 'Divisi Kepatuhan & Manajemen Risiko', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, '2', 'Andika Prasetya', '0810181688', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt58', 'Staf Unit Analisis & Pelaporan', 'Divisi Kepatuhan & Manajemen Risiko', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, '2', 'Aulia Retno Wulandari', '0112141454', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt59', 'Staf Unit SISDUR', 'Divisi Kepatuhan & Manajemen Risiko', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, '2', 'Crista Listiani', '1907101134', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt60', '\"Staf Unit Manajemen Risiko Kredit', ' Kepatuhan', ' Legal & Stratejik\"', 'Divisi Kepatuhan & Manajemen Risiko', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, '2', 'Fitria Dini Nuramita', '0608121295', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt61', '\"Staf Unit Manajemen Risiko Operasional', ' Likuiditas', ' Pasar & Reputasi\"', 'Divisi Kepatuhan & Manajemen Risiko', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, '2', 'Marhali', '0104940239', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt62', 'Staf Unit Pembayaran', 'Divisi Operasi', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, '2', 'Cahyadi', '0107141423', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt63', 'Staf Unit Pengembangan & Pemeliharaan Kantor', 'Divisi Operasi', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, '2', 'Jilman Khristiyanto Boy', '1811131381', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt64', 'Staf Unit Pengembangan & Pemeliharaan Kantor', 'Divisi Operasi', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, '2', 'Nurlina Dwi Rahayu', '0112141452', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt65', 'Staf Unit Pembayaran', 'Divisi Operasi', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, '2', 'Achmad Dicky Triansyah', '0304171578', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt66', 'Staf Unit Umum & Logistik', 'Divisi Operasi', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, '2', 'Elin Novitasari', '1307161488', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt67', 'Staf Unit Trops', 'Divisi Operasi', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, '2', 'Reyva Sendy Valentine', '0205141414', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt68', 'Staf Unit Settlement', 'Divisi Operasi', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, '2', 'Agung Rachmansyah', '0109050793', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt69', 'Collection', 'Divisi Special Asset Management', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, '2', 'Anis Andriani', '1204101120', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt70', 'Staf Unit Restrukturisasi', 'Divisi Special Asset Management', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, '2', 'Yosy Novianto', '0311141444', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt71', 'Staf Unit Pelaporan', 'Divisi Special Asset Management', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, '2', 'Gatot Priyono', '0411020671', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt72', '\"Staf Unit Wilayah I DKI', ' Sumatera', ' Jabar\"', 'Divisi Special Asset Management', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, '2', 'Dimas Saputra', '1903121270', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt73', 'Collection', 'Divisi Special Asset Management', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, '2', 'Bambang Wahyono', '0111161517', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt74', 'Collection', 'Divisi Special Asset Management', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, '2', 'Suhendradiningrat', '0811000441', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt75', 'Collection', 'Divisi Special Asset Management', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, '2', 'Prima Gunawan', '0204181648', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt76', 'Staff Unit SAM', 'Divisi Special Asset Management', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, '2', 'Prama Yudi', '1012101155', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt77', 'Staff Penagihan Cabang Palembang', 'Divisi Special Asset Management', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, '2', 'Muhammad Nur', '0402080994', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt78', 'Staf SAM KC Pekanbaru', 'Divisi Special Asset Management', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, '2', 'Solatun', '1608101151', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt79', 'Staf Unit Remunerasi', 'Divisi Sumber Daya Manusia', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, '2', 'Andri Suandi', '2306141421', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt80', 'Staf Unit Rekrutmen & Service', 'Divisi Sumber Daya Manusia', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, '2', 'Kms. Aan Kusworo', '0310161506', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt81', 'Kepala Unit Pelatihan & Pembinaan', 'Divisi Sumber Daya Manusia', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, '2', 'Muhammad Febryandi', '0111121313', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt82', 'Staf Unit IT Operasional & Keamanan Data', 'Divisi TSI', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, '2', 'Indri Octaviani', '0109161501', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt83', 'Staf Unit IT Pengembangan', 'Divisi TSI', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, '2', 'Nurcachyadi', '0512161526', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt84', 'Staf Unit IT Operation', 'Divisi TSI', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, '2', 'Yulina Merrys Pradipta', '1307161491', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt85', 'Staf Bagian Deposito KCU', 'KCU', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, '2', 'Topik Hidayat', '0208101140', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt86', 'Staf Bagian Transfer & Kliring KCU', 'KCU', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, '2', 'Ilma Rizki Wiyana', '1508161499', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt87', 'Staf Bagian SDM & Umum KCU', 'KCU', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, '2', 'Bertha Acca Saninova', '0108111196', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt88', 'Staf Bagian Pelaporan & Dokumentasi KCU', 'KCU', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, '2', 'Rike Mila Sarie', '1910980330', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt89', 'Staf Bagian Pelaporan & Dokumentasi KCU', 'KCU', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, '2', 'Ade Sapta Priadi', '1610171625', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt90', 'Staf Bagian Adm. Pinjaman KCU', 'KCU', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, '2', 'Seni Setyo Pratiwi', '0103030701', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt91', 'AO Farmer KCU', 'KCU', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, '2', 'Warrtono Akhpino', '0110141441', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt92', 'AO Kredit Komersial KCU', 'KCU', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, '2', 'Ratih Puspawati', '0105060853', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt93', 'AO Farmer KCU', 'KCU', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, '2', 'Ravella Ekaprasetia', '1103151462', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt94', 'AO Farmer KCU', 'KCU', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, '2', 'Yuliana Ramadhani', '1605050779', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt95', 'AO Farmer KCU', 'KCU', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, '2', 'Ranny Yuliandita', '0208101148', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt96', 'AO Farmer KCU', 'KCU', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, '2', 'Rudiyanto', '0105960259', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt97', 'Staf Bagian Deposito KCU', 'KCU', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, '2', 'Vinda Mulya Septiani', '0311141448', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt98', 'Teller KCU', 'KCU', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, '2', 'Siti Nurwahidah', '1704171587', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt99', 'Funding Officer Junior KCU', 'KCU', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, '2', 'Rangga', '2603181647', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt100', 'Staf Bagian Pelaporan & Dokumentasi KCU', 'KCU', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, '2', 'Hendra Christoffel', '0208191784', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt101', 'Funding Officer Senior KCU', 'KCU', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, '2', 'Habi Hendrawan', '0104151468', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt102', 'AO Kredit Komersial KCU', 'KCU', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, '2', 'Roy Azra\'i', '0203151460', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt103', 'AO Kredit Komersial KCU', 'KCU', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(105, '2', 'Syahrul Rama Pratama', '1709121305', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt104', 'AO Kredit Komersial KCU', 'KCU', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, '2', 'Hegar Arief Oktavianto', '1410191800', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt105', 'AO KCU', 'KCU', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(107, '2', 'Miftahruddin Fadillah', '1510191802', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt106', 'AO KCU', 'KCU', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(108, '2', 'Anrian Yunarsyah', '0205111182', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt107', 'Staf Bagian Transfer & Kliring KCU', 'KCU', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(109, '2', 'Anita Yulianingsih', '0404111174', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt108', 'Customer Service KCU', 'KCU', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(110, '2', 'Rita Silvia', '2602191725', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt109', 'AO Digital KCU', 'KCU', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(111, '2', 'Dewi Maharani', '0111191818', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt110', 'Funding Officer Senior KCU', 'KCU', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(112, '2', 'Bernat', '1311171629', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt111', 'AO Senior KCU', 'KCU', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, '2', 'Dewi Wulandari', '1402111167', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt112', 'AO Senior KCU', 'KCU', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(114, '2', 'Maya Citra Suwaryaningrum', '1811191838', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt113', 'Funding Senior Retail KCU', 'KCU', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(115, '2', 'Faurika Nidia Andini', '2511191849', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt114', 'Account Officer Senior', 'KCU', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(116, '2', 'Norita Ardiawati', '0412191862', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt115', 'Funding Officer Senior', 'KCU', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(117, '2', 'Siti Fatimah Haryati Widjaya', '0212191860', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt116', 'Account Officer KCU', 'KCU', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(118, '2', 'Anisa Diah Putriani', '0212191861', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt117', 'Account Officer KCU', 'KCU', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(119, '2', 'Arief Rofi\'i', '0704141408', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt118', 'Staff Operasi Capem Asabri', 'KCP Asabri', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(120, '2', 'Indah Deliyani', '2804141411', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt119', 'Staff Operasi Capem Asabri', 'KCP Asabri', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(121, '2', 'R. Adhika Satya Widagdho', '0112161525', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt120', 'Staff Operasi Capem Asabri', 'KCP Asabri', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(122, '2', 'Yuliani Nur', '2907990345', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt121', 'Head Teller Capem Asabri', 'KCP Asabri', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(123, '2', 'Mutia Azizah', '0603171554', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt122', 'Customer Service KCP Asabri', 'KCP Asabri', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(124, '2', 'Pitri Sari Nur Indah', '0106060862', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt123', 'Teller Capem Asabri', 'KCP Asabri', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(125, '2', 'Saskia Dian Susanti', '0209131367', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt124', 'Teller Capem Asabri', 'KCP Asabri', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(126, '2', 'Santi Sahara', '0104131341', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt125', 'Customer Service KCP Asabri', 'KCP Asabri', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(127, '2', 'Erwina Hidayati', '0703050754', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt126', 'AAO - KCP Asabri', 'KCP Asabri', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(128, '2', 'Sudarwati', '0907010570', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt127', 'Head Teller Capem Bekasi', 'KCP Bekasi', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(129, '2', 'Martha Christina Pinem', '1605050773', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt128', 'Customer Service KCP Bekasi ', 'KCP Bekasi', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(130, '2', 'Wiwit Mariawati', '0311081043', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt129', 'Teller Capem Bekasi', 'KCP Bekasi', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(131, '2', 'Liza Faurizah', '0103000361', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt130', 'AO Senior KCP Bekasi', 'KCP Bekasi', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(132, '2', 'Riza Abdul Mu\'min', '1308181669', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt131', 'AO Junior KCP Bekasi', 'KCP Bekasi', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(133, '2', 'Darmawan Primasetyo', '0804020625', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt132', 'Staff Operasi KCP BSD', 'KCP BSD', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(134, '2', 'Ana Hardiana', '2907990344', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt133', 'Head Teller Capem BSD', 'KCP BSD', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(135, '2', 'Nina Nuraeni', '0201191707', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt134', 'AO Farmer KCP BSD', 'KCP BSD', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(136, '2', 'Darsini', '2805010556', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt135', 'Teller KCP Cempaka Putih', 'KCP Cempaka Putih', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(137, '2', 'Reza Priyatna', '1009141436', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt136', 'Staf Operasi - KCP Cempaka Putih', 'KCP Cempaka Putih', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(138, '2', 'Shinta Pangestuningtyas', '0109091094', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt137', 'Customer Service KCP Cempaka Putih', 'KCP Cempaka Putih', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(139, '2', 'M. Iswahyudi', '0103070903', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt138', 'Account Assistant Capem Cibubur', 'KCP Cibubur', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(140, '2', 'Welly Susanty', '1007000401', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt139', 'SA KCP Cibubur', 'KCP Cibubur', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(141, '2', 'Nofadila Rosa', '0311081040', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt140', 'Customer Service KCP Cibubur', 'KCP Cibubur', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(142, '2', 'Ishaq Maulhaya', '0112161522', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt141', 'Staf Sundries KCP Cibubur', 'KCP Cibubur', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(143, '2', 'Yunarti Budhiningsih', '0204010525', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt142', 'Customer Service KCP Ciputat', 'KCP Ciputat', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(144, '2', 'Joni Fadriansyah', '0111121312', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt143', 'Staf Operasi KCP Ciputat', 'KCP Ciputat', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(145, '2', 'Putri Lailasari Maryam', '2804141409', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt144', 'Customer Service KCP Ciputat', 'KCP Ciputat', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(146, '2', 'Wati Irawady', '1806010561', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt145', 'Teller KCP Depok', 'KCP Depok', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(147, '2', 'Febiana Ramadhani Putri', '1202181639', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt146', 'Customer Service KCP Depok', 'KCP Depok', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(148, '2', 'Rafika Febrianti', '0104141405', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt147', 'Staf Operasi KCP Depok', 'KCP Depok', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(149, '2', 'Lia Warliani', '0105010540', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt148', 'Teller Capem Duta Mas', 'KCP Duta Mas', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(150, '2', 'Weny Indrasti', '1907171589', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt149', 'Customer Service KCP Dutamas', 'KCP Duta Mas', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(151, '2', 'Gesang Surya Indra Prastha', '1805151472', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt150', 'AAO Capem Dutamas', 'KCP Duta Mas', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(152, '2', 'Muhammad Habibullah', '1610171623', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt151', 'AAO Capem Dutamas', 'KCP Duta Mas', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(153, '2', 'Andika Agustian', '1702141399', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt152', 'Staf Sundries KCP Dutamas', 'KCP Duta Mas', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(154, '2', 'Indah Budi Zuliastanti', '0311081060', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt153', 'Funding Officer Senior KCP Dutamas', 'KCP Duta Mas', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(155, '2', 'I Ketut Wantara', '1709141438', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt154', 'AAO KCP Kebon Jeruk', 'KCP Kebon Jeruk', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(156, '2', 'Yuliani', '1811131380', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt155', 'Customer Service KCP Kebon Jeruk', 'KCP Kebon Jeruk', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(157, '2', 'Ni Putu Ayu Juwita', '0308091087', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt156', 'Teller KCP Kebon Jeruk', 'KCP Kebon Jeruk', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(158, '2', 'Tri Mulyani', '0207010568', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt157', 'Staf Operasi KCP Kebon Jeruk', 'KCP Kebon Jeruk', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(159, '2', 'Bagus Sotya Samudra', '2701141396', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt158', 'AO Junior KCP Kebon Jeruk', 'KCP Kebon Jeruk', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(160, '2', 'Yulia Indah Pertiwi', '0708121299', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt159', 'Customer Service Capem Kelapa Gading', 'KCP Kelapa Gading', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(161, '2', 'Wiwin Budiyanto', '0608181668', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt160', 'Funding Officer Senior KCP Kelapa Gading', 'KCP Kelapa Gading', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(162, '2', 'Gustian Wahyudi', '1009181681', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt161', 'Funding Officer Senior KCP Kelapa Gading', 'KCP Kelapa Gading', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(163, '2', 'Puri Adha Pertiwi', '0110121308', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt162', 'Customer Service KCP Kelapa Gading', 'KCP Kelapa Gading', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(164, '2', 'Fachrur Rozzy', '2005191754', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt163', 'Funding Officer Senior KCP Kelapa Gading', 'KCP Kelapa Gading', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(165, '2', 'Dewi Wulanyani', '2005191752', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt164', 'Funding Officer Junior KCP Kelapa Gading', 'KCP Kelapa Gading', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(166, '2', 'Eka Juni Sulistyaningsih', '0107970289', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt165', 'Teller Capem Klender', 'KCP Klender', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(167, '2', 'Prislita Oktarini', '0901121239', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt166', 'Customer Service Capem Klender ', 'KCP Klender', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(168, '2', 'Triasmaning Rahayu', '0311081042', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt167', 'Teller Kantor Kas Kwitang', 'Kantor Kas Kwitang', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(169, '2', 'Ika Purnamawati', '0108111198', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt168', 'Customer Service Kankas Kemhan', 'Kantor Kas Hankam', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(170, '2', 'Ani Djuriah', '1007000397', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt169', 'Teller KCP Pasar Minggu', 'KCP Pasar Minggu', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(171, '2', 'Angga Riksa Gumbira', '0112161523', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt170', 'AAO KC Bandung', 'KC Bandung', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(172, '2', 'Bumi Yuliana Lubis', '2204020637', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt171', 'Head Teller Cabang Bandung', 'KC Bandung', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(173, '2', 'Hidarini', '1508131365', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt172', 'Teller Cabang Bandung ', 'KC Bandung', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(174, '2', 'Riky Ariady', '1609131369', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt173', 'Staff Adm. Kredit Cabang Bandung', 'KC Bandung', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(175, '2', 'Dwi Suganto', '0109050794', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt174', 'Staf Operasi KC Bandung', 'KC Bandung', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(176, '2', 'Runib Ryanul Idris', '0102171551', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt175', 'Funding Officer Junior KC Bandung', 'KC Bandung', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(177, '2', 'Annisa Melida', '0304171583', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt176', 'Customer Service KC Bandung', 'KC Bandung', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `users` (`id`, `role`, `name`, `nik`, `password`, `remember_token`, `jabatan`, `organisasi`, `level`, `status`, `is_active`, `created_at`, `updated_at`) VALUES
(178, '2', 'Aristia Puspita Yustina', '0304171586', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt177', 'SA KC Bandung', 'KC Bandung', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(179, '2', 'Novita Sari', '2211181699', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt178', 'AO KC Bandung', 'KC Bandung', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(180, '2', 'Sri Endah Pramudiawaty', '2611181698', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt179', 'Funding Officer Senior KC Bandung', 'KC Bandung', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(181, '2', 'Muhammad Aria Putra', '0312181700', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt180', 'AO KC Bandung', 'KC Bandung', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(182, '2', 'Gessa Ardian K.', '0104191739', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt181', 'AO Buser KC Bandung', 'KC Bandung', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(183, '2', 'Asep Rukman Saleh', '2005191755', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt182', 'AO Senior KC Bandung', 'KC Bandung', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(184, '2', 'Eli Yanti', '1607121294', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt183', 'Customer Service KC Bandung', 'KC Bandung', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(185, '2', 'Ferdian Franata', '2608191792', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt184', 'AO Senior Komersial KC Bandung', 'KC Bandung', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(186, '2', 'Radhiwo Pranata Djamil', '1010191803', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt185', 'AO Senior KC Bandung', 'KC Bandung', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(187, '2', 'Reza Saleh Akbar', '0411191826', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt186', 'AO KC Bandung', 'KC Bandung', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(188, '2', 'Revi Lisnandar', '0411191827', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt187', 'AO KC Bandung', 'KC Bandung', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(189, '2', 'Mochamad Aldi Akbar', '0411191828', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt188', 'AO KC Bandung', 'KC Bandung', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(190, '2', 'Bian Bethari', '1111191840', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt189', 'AO KC Bandung', 'KC Bandung', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(191, '2', 'Fatarina Ernawati', '2611191859', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt190', 'Account Officer KC Bandung', 'KC Bandung', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(192, '2', 'Dewi Fitriani Sundari', '1811191847', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt191', 'Customer Service Kantor Kas Asabri Bandung', 'Kantor Kas Asabri Bandung', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(193, '2', 'Destiany Rahimah', '1811191848', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt192', 'Teller Kantor Kas Asabri Bandung', 'Kantor Kas Asabri Bandung', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(194, '2', 'Siti Hajar Rizkya', '0304171584', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt193', 'Customer Service KCP Cimahi', 'KCP Cimahi', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(195, '2', 'Reny Meiruri Roesi', '0103181644', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt194', 'SA KCP Cimahi', 'KCP Cimahi', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(196, '2', 'Rendri Maulana', '0104111179', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt195', 'Staf Teller KCP Cimahi', 'KCP Cimahi', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(197, '2', 'Erwan Syafrizal', '1502191723', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt196', 'AO Buser KCP Cimahi', 'KCP Cimahi', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(198, '2', 'Yudan', '2106191768', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt197', 'AO Junior KCP Cimahi', 'KCP Cimahi', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(199, '2', 'Bagus Insan Perdana', '0109141439', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt198', 'Staf Operasi & Adm. Kredit KCP Cimahi', 'KCP Cimahi', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(200, '2', 'Lina Malisita', '0208101149', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt199', 'AO KCP Cimahi', 'KCP Cimahi', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(201, '2', 'Suwito', '0410900077', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt200', 'AO KC Cirebon', 'KC Cirebon', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(202, '2', 'Dina Aprillia', '0910171612', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt201', 'Teller KC Cirebon', 'KC Cirebon', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(203, '2', 'Nur Sakinah', '0910171614', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt202', 'Customer Service KC Cirebon', 'KC Cirebon', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(204, '2', 'Jodhy Ranu Utomo', '0910171615', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt203', 'AAO KC Cirebon', 'KC Cirebon', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(205, '2', 'Asep Dadan Surachman', '0910171616', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt204', 'Staf Administrasi Kredit KC Cirebon', 'KC Cirebon', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(206, '2', 'Ipan Irmawan', '0910171617', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt205', 'Staf Akuntansi merangkap TSI KC Cirebon', 'KC Cirebon', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(207, '2', 'Mahesa Angga Dilaga', '2112181703', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt206', 'Funding Officer Senior KC Cirebon', 'KC Cirebon', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(208, '2', 'Warcono', '0910171606', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt207', 'AAO KC Cirebon', 'KC Cirebon', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(209, '2', 'Ferina Wijayanti', '0104191741', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt208', 'Funding Officer Junior KC Cirebon', 'KC Cirebon', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(210, '2', 'Christian Dwi Indra Putra', '2510191812', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt209', 'Funding Officer Junior KC Cirebon', 'KC Cirebon', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(211, '2', 'Irfan Faturohman', '2810191814', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt210', 'Staf Sundries KC Cirebon', 'KC Cirebon', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(212, '2', 'Rachmat Eka Aditya', '2510191811', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt211', 'AO Junior KC Cirebon', 'KC Cirebon', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(213, '2', 'Agus Supriyatna', '2510191809', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt212', 'AO Junior KC Cirebon', 'KC Cirebon', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(214, '2', 'Pikri Nabawi', '2510191810', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt213', 'AO Junior KC Cirebon', 'KC Cirebon', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(215, '2', 'Agung Rahmat Sukmana', '2510191808', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt214', 'AO Junior KC Cirebon', 'KC Cirebon', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(216, '2', 'Yunan Yusandi Mukhlis', '2610091097', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt215', 'AO KC Jember', 'KC Jember', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(217, '2', 'Khusnul Rofiq', '0603171562', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt216', 'AAO KC Jember', 'KC Jember', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(218, '2', 'Dian Pradhita', '1202181642', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt217', 'Customer Service KC Jember', 'KC Jember', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(219, '2', 'Risna Yumi Diana', '0603171560', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt218', 'Staf Administrasi Kredit KC Jember', 'KC Jember', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(220, '2', 'Farda Fanani', '0603171555', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt219', 'Staf Operasi KC Jember', 'KC Jember', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(221, '2', 'Chandra Gusti Panunggul', '1311181696', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt220', 'AO KC Jember', 'KC Jember', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(222, '2', 'Yulia Eka Vidiana Putri', '2106191764', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt221', 'Teller KC Jember', 'KC Jember', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(223, '2', 'Nova Anggraini', '2106191766', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt222', 'Funding Officer Senior KC Jember', 'KC Jember', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(224, '2', 'Vicky Ainur Ridho', '2106191765', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt223', 'AO Junior KC Jember', 'KC Jember', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(225, '2', 'Risdianto Setiawan', '2608191791', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt224', 'Funding Officer Junior KC Jember', 'KC Jember', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(226, '2', 'Novi Dwi Pranasari', '2110191804', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt225', 'Teller KC Jember', 'KC Jember', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(227, '2', 'Moch. Arrosyit', '2511191858', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt226', 'Staf Credit Support KC Jember', 'KC Jember', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(228, '2', 'Muhammad Yusuf Natsir', '2301171533', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt227', 'AAO KC Makassar', 'KC Makassar', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(229, '2', 'Agus', '2502191728', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt228', 'Funding Officer Senior KC Makassar', 'KC Makassar', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(230, '2', 'Khaerunnisa Baharuddin', '2301171537', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt229', 'Customer Service KC Makassar', 'KC Makassar', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(231, '2', 'Friska Hardiyanti Sumarna', '2604181654', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt230', 'AO KC Makassar', 'KC Makassar', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(232, '2', 'Anugrahnto Saranga', '2301171539', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt231', 'Staf Operasi KC Makassar', 'KC Makassar', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(233, '2', 'A. Himrah Tenriwaru', '0903171572', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt232', 'Staf Adm. Kredit KC Makassar', 'KC Makassar', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(234, '2', 'Muh. Ikhsan Suaib', '2301171544', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt233', 'Staf SDM & Umum KC Makassar', 'KC Makassar', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(235, '2', 'Annie Megawaty Ahmad', '1507191781', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt234', 'Teller KC Makassar', 'KC Makassar', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(236, '2', 'Andi Suharmin', '0111191821', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt235', 'AO Junior KC Makassar', 'KC Makassar', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(237, '2', 'Asrawati', '0111191822', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt236', 'AO Junior KC Makassar', 'KC Makassar', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(238, '2', 'Rosvita Elvayana', '0111191823', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt237', 'AO Junior KC Makassar', 'KC Makassar', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(239, '2', 'Ibrahim', '0111191824', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt238', 'AO Junior KC Makassar', 'KC Makassar', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(240, '2', 'Ade Guna Saputra', '0111191816', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt239', 'Teller KC Makassar', 'KC Makassar', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(241, '2', 'Aridayaeini Djabbar', '2506181659', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt240', 'Teller Kantor Kas KC Makassar', 'KanKas Asabri Makassar', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(242, '2', 'Siti Hardianti Surahman', '0506181658', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt241', 'Customer Service Kantor Kas Asabri Makassar', 'KanKas Asabri Makassar', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(243, '2', 'Siti Maisyarah', '0102121264', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt242', 'Staf Operasi KC Medan', 'KC Medan', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(244, '2', 'Arie Mardhika Putra', '0603191731', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt243', 'AO Senior Cabang Medan', 'KC Medan', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(245, '2', 'Femyca Octaria S. Depari', '0312121324', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt244', 'Funding Officer Junior KC Medan', 'KC Medan', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(246, '2', 'Hanafi', '1001111162', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt245', 'Funding Officer Junior KC Medan', 'KC Medan', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(247, '2', 'Siska Meutia Rahmah', '0312121327', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt246', 'Staf Administrasi Kredit KC Medan', 'KC Medan', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(248, '2', 'Horas Hutabarat', '2103010519', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt247', 'Staf Non Job', 'KC Medan', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(249, '2', 'Zairina Astri', '0611060887', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt248', 'Head Teller KC Medan', 'KC Medan', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(250, '2', 'Tengku Siti Sarah', '1710161509', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt249', 'AO KC Medan', 'KC Medan', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(251, '2', 'Canro Lumban Gaol', '1710161510', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt250', 'Teller Kankas Setia Budi Medan', 'KC Medan', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(252, '2', 'Azra\'i', '1710161511', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt251', 'Staf Umum KC Medan', 'KC Medan', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(253, '2', 'Rifkiandi', '2903101105', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt252', 'Staff Adm. Kredit Cabang Medan ', 'KC Medan', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(254, '2', 'Rabiatul Adawiyah Saragih', '0312121325', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt253', 'Teller KC Medan', 'KC Medan', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(255, '2', 'Meliana', '0102121263', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt254', 'AO KC Medan', 'KC Medan', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(256, '2', 'Ade Deskry', '1710161513', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt255', 'AO KC Medan', 'KC Medan', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(257, '2', 'Rina Ramadhani', '0611060896', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt256', 'Customer Service KC Medan', 'KC Medan', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(258, '2', 'Andrey G. Hutapea', '0307191779', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt257', 'AO Senior', 'KC Medan', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(259, '2', 'Reza Riandi', '0307191776', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt258', 'AO Junior', 'KC Medan', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(260, '2', 'Dita Tiana', '0102121261', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt259', 'AO KC Medan', 'KC Medan', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(261, '2', 'Donarita', '0907070931', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt260', 'Account Assistant Consumer Cabang Palembang', 'KC Palembang', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(262, '2', 'Muhammad Rosevel', '0201121249', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt261', 'AAO Cabang Palembang', 'KC Palembang', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(263, '2', 'Mia Ayu Mustika', '0108111207', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt262', 'AAO Cabang Palembang', 'KC Palembang', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(264, '2', 'Andhika Puspa Ningrum', '0108111201', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt263', 'AAO Cabang Palembang', 'KC Palembang', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(265, '2', 'Bayu Amanda', '1712181701', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt264', 'AAO Cabang Palembang', 'KC Palembang', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(266, '2', 'Hartono', '0907070933', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt265', 'Head Teller Cabang Palembang', 'KC Palembang', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(267, '2', 'Nurhikmah Anandya', '0108111204', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt266', 'Customer Service KC Palembang', 'KC Palembang', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(268, '2', 'Helda Novieta', '1910111229', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt267', 'Customer Service KC Palembang', 'KC Palembang', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(269, '2', 'Ki Agus Akhmad H.', '0105091067', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt268', 'Staff Adm. Kredit Cabang Palembang', 'KC Palembang', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(270, '2', 'Adi Handi', '0907070938', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt269', 'Staff Operasi Cabang Palembang', 'KC Palembang', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(271, '2', 'Prio Santoso', '1910111228', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt270', 'Staff Akuntansi Cabang Palembang', 'KC Palembang', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(272, '2', 'M. Alghifary', '0205191747', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt271', 'Funding Officer Junior KC Palembang', 'KC Palembang', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(273, '2', 'Rehandha Aulia', '0107191774', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt272', 'Funding Officer Junior KC Palembang', 'KC Palembang', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(274, '2', 'Adillah Meitry', '0107191775', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt273', 'Teller KC Palembang', 'KC Palembang', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(275, '2', 'Yunendra Prasetya Agung Herlambang', '1811191843', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt274', 'AO KC Palembang', 'KC Palembang', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(276, '2', 'Handi Herlambang', '1811191845', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt275', 'AO KC Palembang', 'KC Palembang', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(277, '2', 'Hamy Effendi', '1811191844', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt276', 'AO KC Palembang', 'KC Palembang', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(278, '2', 'Fitri Hemia', '0312121328', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt277', 'Customer Service KC Pekanbaru', 'KC Pekanbaru', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(279, '2', 'Sulis Efriani', '0901121253', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt278', 'Funding Officer Junior KC Pekanbaru', 'KC Pekanbaru', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(280, '2', 'Umarsyah Agram', '0402080981', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt279', 'Staf SDM & Umum KC Pekanbaru', 'KC Pekanbaru', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(281, '2', 'Shinta Permata Luki', '0207121293', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt280', 'Funding Officer Senior KC Pekanbaru', 'KC Pekanbaru', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(282, '2', 'Indra Saputra', '0104111180', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt281', 'Staff Akuntansi & TSI KC Pekanbaru', 'KC Pekanbaru', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(283, '2', 'Lia Leona', '0402080993', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt282', 'Funding Officer Senior KC Pekanbaru', 'KC Pekanbaru', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(284, '2', 'R. Guntur Surya Yuwana', '1012121329', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt283', 'Staf Operasi KC Pekanbaru', 'KC Pekanbaru', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(285, '2', 'Olivia Fienny P.S', '0806111192', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt284', 'Staff Adm.Kredit Cabang Pekanbaru', 'KC Pekanbaru', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(286, '2', 'Hasnal', '0402080989', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt285', 'AAO Cabang Pekanbaru', 'KC Pekanbaru', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(287, '2', 'Hidayat', '0901121255', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt286', 'AAO Cabang Pekanbaru', 'KC Pekanbaru', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(288, '2', 'Lyzza Sundery', '0111121319', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt287', 'AAO Cabang Pekanbaru', 'KC Pekanbaru', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(289, '2', 'Junius Andy Purnama', '1803101103', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt288', 'Staf Operasi KC Pekanbaru', 'KC Pekanbaru', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(290, '2', 'Afrizal Yersa Herwindya', '1907101139', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt289', 'Staff Operasi Cabang Semarang ', 'KC Semarang', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(291, '2', 'Kurdiyanto', '1912050820', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt290', 'Customer Service KC Semarang', 'KC Semarang', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(292, '2', 'Ina Wahyuningsih', '1912050825', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt291', 'Teller Cabang Semarang', 'KC Semarang', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(293, '2', 'Cintia Eka Vegustianti', '0102181635', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt292', 'Teller Cabang Semarang', 'KC Semarang', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(294, '2', 'Aris Yunita Sari', '1912050823', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt293', 'AO KC Semarang', 'KC Semarang', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(295, '2', 'Krisna Widiastuti', '1912050812', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt294', 'AO KC Semarang', 'KC Semarang', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(296, '2', 'Nugroho Al Amin', '0207121291', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt295', 'Customer Service KC Semarang', 'KC Semarang', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(297, '2', 'Meytha Miliani Anggoroningrum', '1912050822', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt296', 'AO KC Semarang', 'KC Semarang', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(298, '2', 'Diah Purwaningsih', '1912050829', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt297', 'Funding Officer Senior KC Semarang', 'KC Semarang', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(299, '2', 'Neni Oktaviani', '1006191759', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt298', 'Funding Officer Senior KC Semarang', 'KC Semarang', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(300, '2', 'Mumpuni Yulistiatri', '1912050826', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt299', 'Customer Service KC Semarang', 'KC Semarang', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(301, '2', 'Randy Christiawan H.', '0804191742', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt300', 'AO Senior KC Semarang', 'KC Semarang', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(302, '2', 'Tungga Dewi', '1912050827', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt301', 'Staf Umum KC Semarang', 'KC Semarang', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(303, '2', 'Dimas Setiawan', '1211191825', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt302', 'AO Senior KC Semarang', 'KC Semarang', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(304, '2', 'Meri Anggraeni Puspita Sari', '2511191850', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt303', 'Account Officer Junior KC Semarang', 'KC Semarang', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(305, '2', 'Prafita Ainurryah Kusuma', '0112040745', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt304', 'Staff Adm. Kredit Cabang Darmo', 'KC Surabaya', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(306, '2', 'Rindy Wirathambang Septaria', '0104151469', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt305', 'SA KC Surabaya', 'KC Surabaya', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(307, '2', 'Sania Arisnandani', '1711030705', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt306', 'Staff Operasi Cabang Darmo', 'KC Surabaya', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(308, '2', 'Dwi Agung Nugroho', '0206161485', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt307', 'Staff Operasi Cabang Darmo', 'KC Surabaya', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(309, '2', 'Frieda Dwi Anggyamurni', '1501010486', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt308', 'Head Teller Cabang Darmo', 'KC Surabaya', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(310, '2', 'Disi Wuri Mahanani', '0607040725', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt309', 'Teller Cabang Darmo', 'KC Surabaya', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(311, '2', 'Faramita Rossyana Putri', '1703101102', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt310', 'Teller Cabang Darmo ', 'KC Surabaya', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(312, '2', 'Aprilian Elfianto', '0805010494', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt311', 'AAO Cabang Darmo', 'KC Surabaya', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(313, '2', 'Sismiaji', '1303060841', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt312', 'AAO Cabang Darmo', 'KC Surabaya', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(314, '2', 'Aldy Kurniawan', '1107161492', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt313', 'AAO Cabang Darmo', 'KC Surabaya', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(315, '2', 'Arahman Suryanto', '1107161493', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt314', 'AAO Cabang Darmo', 'KC Surabaya', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(316, '2', 'Monica Gunawan', '0201010474', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt315', 'Funding Officer Junior KC Surabaya', 'KC Surabaya', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(317, '2', 'Panjoyo Efendi Hartono', '0601141389', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt316', 'AAO Cabang Darmo', 'KC Surabaya', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(318, '2', 'Ruddy Yuliansyah', '1312101156', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt317', 'Staff TSI Cabang Darmo', 'KC Surabaya', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(319, '2', 'Andhika Sthirayodha', '0602171552', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt318', 'AAO KC Surabaya', 'KC Surabaya', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(320, '2', 'Beri Khariziyah', '0304171582', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt319', 'AAO KC Surabaya', 'KC Surabaya', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(321, '2', 'Sri Mulyani Tupan', '0107191772', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt320', 'Funding Officer Senior KC Surabaya', 'KC Surabaya', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(322, '2', 'Lila Puspita Sari', '0808191787', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt321', 'Funding Officer Senior KC Surabaya', 'KC Surabaya', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(323, '2', 'Aditya Purwanto', '1811191856', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt322', 'Account Officer KC Surabaya', 'KC Surabaya', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(324, '2', 'Widadi Agung Prasodjo', '1111191855', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt323', 'Account Officer KC Surabaya', 'KC Surabaya', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(325, '2', 'Chory Imami', '0205191751', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt324', 'Funding Officer Senior KCP Ngagel', 'KCP Ngagel', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(326, '2', 'Safrudin', '0707141427', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt325', 'Staff Operasi Capem Ngagel', 'KCP Ngagel', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(327, '2', 'Rr. Nur Murdiningrum', '1812000462', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt326', 'Head Teller Capem Ngagel', 'KCP Ngagel', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(328, '2', 'Arini Evalinda Aritonang', '0805010495', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt327', 'Customer Service KCP Ngagel', 'KCP Ngagel', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(329, '2', 'Cindy Manjari Puri', '2203101104', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt328', 'Teller KCP Ngagel', 'KCP Ngagel', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(330, '2', 'David Setiawan Boediono', '1009181686', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt329', 'Funding Officer Senior KCP Ngagel', 'KCP Ngagel', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(331, '2', 'Nancy Yunita', '0309070954', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt330', 'Funding Officer Junior KCP Ngagel', 'KCP Ngagel', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(332, '2', 'Setyorini', '1010181690', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt331', 'Funding Officer Senior KCP Ngagel', 'KCP Ngagel', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(333, '2', 'Eva Amaliyah', '0511191842', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt332', 'Funding Officer Senior KCP Ngagel', 'KCP Ngagel', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(334, '2', 'Fano Bobby Octaviano', '0309070953', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt333', 'Staff Operasi Capem SIER ', 'KCP Sier', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(335, '2', 'Christine Ambarwati', '0810010596', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt334', 'Head Teller Capem SIER', 'KCP Sier', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(336, '2', 'Veronika Vena Rosalin', '1711030704', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'snilbaHA4pe82J8MVH0aEuGwR94jTmO4sjXIzJLZFQ0cCSmm7U7fau3YxIXe', 'Teller Capem SIER', 'KCP Sier', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(337, '2', 'Andy Shofiyan Johan', '0111161520', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt336', 'AAO KCP SIER', 'KCP Sier', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(338, '2', 'Muammar Michrandy', '0209191811', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt337', 'Staf SDM & Umum KC Pontianak', 'KC Pontianak', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(339, '2', 'Alberta Bella Asari', '1111191829', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt338', 'Funding Officer Junior KC Pontianak', 'KC Pontianak', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(340, '2', 'Risky Pramudia', '1111191830', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt339', 'Funding Officer Junior KC Pontianak', 'KC Pontianak', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(341, '2', 'Erick Fernando Sinaga', '1111191831', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt340', 'AO Junior KC Pontianak', 'KC Pontianak', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(342, '2', 'Ade Suryanto', '1111191832', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt341', 'AO Junior KC Pontianak', 'KC Pontianak', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(343, '2', 'Kristina', '1111191833', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt342', 'Customer Service KC Pontianak', 'KC Pontianak', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(344, '2', 'Muhammad Riyansyah', '1111191834', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt343', 'Staf Credit Support KC Pontianak', 'KC Pontianak', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(345, '2', 'Eka Setiawati', '1111191835', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt344', 'Staf Operasi KC Pontianak', 'KC Pontianak', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(346, '2', 'Jessica Theressa', '1111191836', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt345', 'Teller KC Pontianak', 'KC Pontianak', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(347, '2', 'Dini Septi Astika', '1111191837', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt346', 'Customer Service KC Pontianak', 'KC Pontianak', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(348, '2', 'Parkan', '2608191797', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt347', 'AO Junior KC Malang', 'KC Malang', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(349, '2', 'Angga Fatoni Rakhman', '0209191798', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt348', 'AO Junior KC Malang', 'KC Malang', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(350, '2', 'Dewi Permata Sari', '2608191796', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt349', 'Funding Officer Junior KC Malang', 'KC Malang', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(351, '2', 'Annisa Tri Wahyuni', '01411191851', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt350', 'Account Offiver Junior KC Malang', 'KC Malang', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(352, '2', 'Fani Dhayu Riskiar', '1111191852', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt351', 'Staf Operasi KC Malang', 'KC Malang', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(353, '2', 'Yenis Tria Kusumadhani', '1111191853', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt352', 'Frontliner KC Malang', 'KC Malang', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `users` (`id`, `role`, `name`, `nik`, `password`, `remember_token`, `jabatan`, `organisasi`, `level`, `status`, `is_active`, `created_at`, `updated_at`) VALUES
(354, '2', 'Gaza Nickyta', '1111191854', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt353', 'Staff SDM & Umum KC Malang', 'KC Malang', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(355, '2', 'Miftah Akbar Singgugu', '0910171604', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt354', 'Staf SDM & Umum KC Tasikmalaya', 'KC Tasikmalaya', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(356, '2', 'Rudi Herdiana', '0910171605', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt355', 'Staf Operasi KC Tasikmalaya', 'KC Tasikmalaya', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(357, '2', 'Nita Wahyu Nurbaeti', '0910171602', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt356', 'Teller KC Tasikmalaya', 'KC Tasikmalaya', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(358, '2', 'Septiawati', '0910171603', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt357', 'Customer Service KC Tasikmalaya', 'KC Tasikmalaya', 'Staf', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(359, '2', 'Adi Kusuma Tri C.', '1709191794', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt358', 'AO Junior KC Tasikmalaya', 'KC Tasikmalaya', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(360, '2', 'Herdian Selamet W.', '1709191795', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt359', 'AO Junior KC Tasikmalaya', 'KC Tasikmalaya', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(361, '2', 'Ilman Muhlis', '2310191805', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt360', 'AO Senior KC Tasikmalaya', 'KC Tasikmalaya', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(362, '2', 'Nunu Nugroho', '2310191806', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt361', 'AO Senior KC Tasikmalaya', 'KC Tasikmalaya', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(363, '2', 'Kandini Rizki Kurfika', '2310191807', '$2y$10$nvxW0Rltttjh9KumHINOW.Y3lcDIN5ruClb7TLDvpBAXdgejVOVyG', 'tDZFzloqIo0E8vGQSalf3EhJr7V5yg6R2aXXOfzDOFXs7l6Xn0YmPoMkVzt362', 'AO Senior KC Tasikmalaya', 'KC Tasikmalaya', 'Staf', 'Kontrak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role` varchar(50) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role`, `menu_id`) VALUES
(1, '1', 1),
(2, '1', 2),
(3, '1', 3),
(4, '1', 4),
(5, '1', 6),
(6, '2', 1),
(7, '2', 2),
(8, '2', 3),
(9, '2', 4),
(10, '2', 6),
(11, '1', 7),
(12, '2', 7),
(13, '2', 8),
(14, '1', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `url` varchar(225) NOT NULL,
  `menu` varchar(50) NOT NULL,
  `class` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `access` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `url`, `menu`, `class`, `updated_at`, `access`) VALUES
(1, '#', 'Home', 'sport', '0000-00-00 00:00:00', 'true'),
(2, '#', 'Executive Message', 'travel travel-dropdown', '2020-01-15 02:45:05', 'true'),
(3, '#', 'Information', 'tech', '2020-01-15 02:45:05', 'true'),
(4, '#', 'Forum', 'fashion', '2020-01-15 02:45:21', 'true'),
(6, '#', 'Portal', 'video', '2020-01-15 03:15:54', 'secure'),
(8, '#', 'Education', 'tech', '2020-02-12 00:00:00', 'true');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `url` varchar(128) NOT NULL,
  `sub_menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `url`, `sub_menu`) VALUES
(1, 2, '/ceom', 'CEO message'),
(2, 2, '/ceom', 'Message From BOD'),
(4, 3, '/branchnews', 'Branch Activity'),
(5, 3, '/division', 'Division News'),
(8, 3, '/tech', 'Technology & System'),
(9, 1, '/', 'All Content'),
(10, 3, '/feature', 'General Information'),
(11, 6, '/email', 'Hay - Mail (Tahap Pengembangan)'),
(12, 4, '/forum_sugcom', 'Suggestion & Comment'),
(13, 6, '#', 'Hay - Sisdur (Tahap Pengembangan)'),
(14, 8, '/dictionary', 'dictionary');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin_access_menu`
--
ALTER TABLE `admin_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `admin_menu`
--
ALTER TABLE `admin_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `admin_sub_menu`
--
ALTER TABLE `admin_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `comment_branch`
--
ALTER TABLE `comment_branch`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `comment_division`
--
ALTER TABLE `comment_division`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `comment_feature`
--
ALTER TABLE `comment_feature`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `comment_hotnews`
--
ALTER TABLE `comment_hotnews`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `comment_tech`
--
ALTER TABLE `comment_tech`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dictionary`
--
ALTER TABLE `dictionary`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ibranch`
--
ALTER TABLE `ibranch`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ideprate`
--
ALTER TABLE `ideprate`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `idivision`
--
ALTER TABLE `idivision`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `isbdk`
--
ALTER TABLE `isbdk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `itech`
--
ALTER TABLE `itech`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indeks untuk tabel `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indeks untuk tabel `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indeks untuk tabel `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `opbreaking`
--
ALTER TABLE `opbreaking`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `opceom`
--
ALTER TABLE `opceom`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `opfeature`
--
ALTER TABLE `opfeature`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `opfooter`
--
ALTER TABLE `opfooter`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ophot`
--
ALTER TABLE `ophot`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `opmfbod`
--
ALTER TABLE `opmfbod`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `opvideos`
--
ALTER TABLE `opvideos`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `sugcom`
--
ALTER TABLE `sugcom`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin_access_menu`
--
ALTER TABLE `admin_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `admin_menu`
--
ALTER TABLE `admin_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `admin_sub_menu`
--
ALTER TABLE `admin_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `comment_branch`
--
ALTER TABLE `comment_branch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `comment_division`
--
ALTER TABLE `comment_division`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `comment_feature`
--
ALTER TABLE `comment_feature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `comment_hotnews`
--
ALTER TABLE `comment_hotnews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `comment_tech`
--
ALTER TABLE `comment_tech`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `dictionary`
--
ALTER TABLE `dictionary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ibranch`
--
ALTER TABLE `ibranch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `ideprate`
--
ALTER TABLE `ideprate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `idivision`
--
ALTER TABLE `idivision`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `isbdk`
--
ALTER TABLE `isbdk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `itech`
--
ALTER TABLE `itech`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `opbreaking`
--
ALTER TABLE `opbreaking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `opceom`
--
ALTER TABLE `opceom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `opfeature`
--
ALTER TABLE `opfeature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `opfooter`
--
ALTER TABLE `opfooter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `ophot`
--
ALTER TABLE `ophot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `opmfbod`
--
ALTER TABLE `opmfbod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `opvideos`
--
ALTER TABLE `opvideos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `sugcom`
--
ALTER TABLE `sugcom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=370;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
