-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Apr 2022 pada 07.53
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tunggulwulung2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_event`
--

CREATE TABLE `t_event` (
  `id_event` int(11) NOT NULL,
  `event` varchar(100) NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_event`
--

INSERT INTO `t_event` (`id_event`, `event`, `created_by`, `created_date`) VALUES
(9, 'Lomba', 'Admin Tunggul Wulung', '2022-03-07 03:04:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_panitia`
--

CREATE TABLE `t_panitia` (
  `id_panitia` int(11) NOT NULL,
  `id_subevent` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_panitia`
--

INSERT INTO `t_panitia` (`id_panitia`, `id_subevent`, `id_user`, `nama`, `created_by`, `created_date`) VALUES
(32, 15, 22, '', 'Admin Tunggul Wulung', '2022-03-07'),
(33, 15, 23, '', 'Admin Tunggul Wulung', '2022-03-07'),
(37, 19, 26, '', 'Admin Tunggul Wulung', '2022-04-04'),
(38, 19, 21, '', 'Admin Tunggul Wulung', '2022-04-27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pembelianikan`
--

CREATE TABLE `t_pembelianikan` (
  `id_pembelianikan` int(11) NOT NULL,
  `id_subevent` int(11) NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `jenis_ikan` varchar(100) NOT NULL,
  `berat_ikan` int(11) NOT NULL,
  `total_harga` varchar(100) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_pembelianikan`
--

INSERT INTO `t_pembelianikan` (`id_pembelianikan`, `id_subevent`, `id_supplier`, `jenis_ikan`, `berat_ikan`, `total_harga`, `created_date`) VALUES
(6, 15, 2, 'patin', 200, '2500000', '0000-00-00'),
(15, 19, 4, 'nila', 200, '2500000', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pengumuman`
--

CREATE TABLE `t_pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `created_date` date NOT NULL,
  `created_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_pengumuman`
--

INSERT INTO `t_pengumuman` (`id_pengumuman`, `judul`, `deskripsi`, `status`, `gambar`, `created_date`, `created_by`) VALUES
(1, 'Pengumuman 1', 'sed faucibus turpis in eu mi bibendum neque egestas congue quisque egestas diam in arcu cursus euismod quis viverra nibh cras pulvinar mattis nunc sed blandit libero volutpat sed cras ornare arcu dui vivamus arcu felis bibendum ut tristique et egestas quis ipsum suspendisse ultrices gravida dictum fusce ut placerat orci nulla pellentesque dignissim enim sit amet venenatis urna cursus', 'tampilkan', 'PENGUMUMAN.jpg', '2022-02-24', 'Admin'),
(7, 'Pengumuman 2', 'consectetur adipiscing elit ut aliquam purus sit amet luctus venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non enim praesent elementum facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum dui faucibus in ornare quam viverra orci sagittis eu volutpat odio', 'tampilkan', 'PENGUMUMAN1.jpg', '2022-03-09', 'Admin Tunggul Wulung'),
(8, 'Pengumuman 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae mi pellentesque, lobortis dolor sit amet, malesuada leo. Mauris euismod turpis a erat aliquam, quis eleifend est tempus. Sed dapibus blandit purus, at porttitor risus rhoncus sed. Duis vestibulum ipsum sem, sit amet aliquet elit tristique a. Fusce fermentum posuere odio nec accumsan. Nulla dapibus sodales est eget tincidunt. Etiam efficitur euismod ipsum sed lobortis.', 'tampilkan', 'PENGUMUMAN2.jpg', '2022-03-09', 'Admin Tunggul Wulung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pesanan`
--

CREATE TABLE `t_pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_subevent` int(11) NOT NULL,
  `gross_amount` varchar(100) NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  `transaction_time` varchar(100) NOT NULL,
  `transaction_status` varchar(100) NOT NULL,
  `status_code` varchar(10) NOT NULL,
  `status_message` varchar(100) NOT NULL,
  `bank` varchar(10) NOT NULL,
  `va_number` varchar(50) NOT NULL,
  `bill_key` varchar(50) NOT NULL,
  `biller_code` varchar(50) NOT NULL,
  `qr_url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_pesanan`
--

INSERT INTO `t_pesanan` (`id_pesanan`, `id_user`, `id_subevent`, `gross_amount`, `payment_type`, `transaction_time`, `transaction_status`, `status_code`, `status_message`, `bank`, `va_number`, `bill_key`, `biller_code`, `qr_url`) VALUES
(358477, 35, 19, '102000.00', 'qris', '2022-04-20 11:25:11', 'pending', '201', 'Success, transaction is found', '-', '-', '-', '-', 'https://api.sandbox.veritrans.co.id/v2/qris/c4a724db-c92a-4c10-830c-ef5140f93e2b/qr-code'),
(2791915, 27, 19, '102000.00', 'echannel', '2022-04-20 11:37:03', 'settlement', '201', 'Transaksi sedang diproses', '-', '-', '236317152566', '70012', ''),
(3575416, 35, 15, '122000.00', 'gopay', '2022-04-20 11:24:52', 'settlement', '201', 'Success, transaction is found', '-', '-', '-', '-', 'https://api.sandbox.veritrans.co.id/v2/gopay/50871d16-919b-4906-ba6e-dbd18cad373a/qr-code'),
(18346944, 18, 15, '122000.00', 'gopay', '2022-04-20 11:39:31', 'settlement', '201', 'Success, transaction is found', '-', '-', '-', '-', 'https://api.sandbox.veritrans.co.id/v2/gopay/1b2e086c-ce35-42db-8ba7-34addad941cf/qr-code'),
(18383954, 18, 19, '102000.00', 'bank_transfer', '2022-04-13 11:00:32', 'pending', '201', 'Transaksi sedang diproses', 'bri', '127483919279282973', '-', '-', ''),
(27179718, 27, 15, '122000.00', 'qris', '2022-04-20 11:27:16', 'pending', '201', 'Success, transaction is found', '-', '-', '-', '-', 'https://api.sandbox.veritrans.co.id/v2/qris/c4a01b4a-89b8-4c43-a5ea-f6eba91aee99/qr-code'),
(33451340, 33, 15, '122000.00', 'bank_transfer', '2022-04-13 10:56:21', 'settlement', '201', 'Transaksi sedang diproses', 'bni', '9881274895264850', '-', '-', ''),
(33595837, 33, 19, '102000.00', 'bank_transfer', '2022-04-13 10:58:16', 'pending', '201', 'Transaksi sedang diproses', 'bca', '12748246376', '-', '-', '');

--
-- Trigger `t_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesan_tiket` AFTER INSERT ON `t_pesanan` FOR EACH ROW BEGIN
	UPDATE t_subevent SET stok = stok-1
    WHERE id_subevent = NEW.id_subevent;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_subevent`
--

CREATE TABLE `t_subevent` (
  `id_subevent` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `subevent` varchar(100) NOT NULL,
  `harga` varchar(30) NOT NULL,
  `jenis_hadiah` varchar(100) DEFAULT NULL,
  `nominal` varchar(50) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `tanggal_pelaksanaan` date NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL DEFAULT current_timestamp(),
  `jumlah_lapak` int(11) NOT NULL,
  `mulai` char(100) NOT NULL,
  `akhir` char(100) NOT NULL,
  `file` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_subevent`
--

INSERT INTO `t_subevent` (`id_subevent`, `id_event`, `subevent`, `harga`, `jenis_hadiah`, `nominal`, `stok`, `tanggal_pelaksanaan`, `jam_mulai`, `jam_selesai`, `jumlah_lapak`, `mulai`, `akhir`, `file`) VALUES
(15, 9, 'Lomba Mancing HUT ke 4', '120000', 'langsung', '10000000', 109, '2022-05-01', '09:00:00', '15:00:00', 140, '2022-03-24', '2022-04-28', 'file41.jpeg'),
(19, 9, 'Lomba Menyambut Ramadhan 1943 H', '100000', 'langsung', '5000000', 84, '2022-04-24', '06:53:00', '15:53:00', 100, '2022-04-04', '2022-04-22', 'WhatsApp_Image_2022-02-24_at_11_31_41_(1)2.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_supplier`
--

CREATE TABLE `t_supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(150) NOT NULL,
  `alamat_supplier` text NOT NULL,
  `no_hp_supplier` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_supplier`
--

INSERT INTO `t_supplier` (`id_supplier`, `nama_supplier`, `alamat_supplier`, `no_hp_supplier`) VALUES
(1, 'Yitno', 'Ngabar, Siman, Ponorogo', '080194847538'),
(2, 'Nur', 'Sambit, Ponorogo', '084523761836'),
(4, 'Dandi', 'Balong, Ponorogo', '085472351726');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_tiket`
--

CREATE TABLE `t_tiket` (
  `id_tiket` varchar(20) NOT NULL,
  `id_pesanan` int(11) NOT NULL,
  `status_tiket` varchar(20) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_tiket`
--

INSERT INTO `t_tiket` (`id_tiket`, `id_pesanan`, `status_tiket`, `created_date`) VALUES
('KP.TW-181520042022', 18346944, 'belum_validasi', '2022-04-20 06:39:39'),
('KP.TW-181913042022', 18383954, 'belum_aktif', '2022-04-13 06:00:35'),
('KP.TW-271520042022', 27179718, 'belum_aktif', '2022-04-20 06:27:24'),
('KP.TW-271920042022', 2791915, 'belum_validasi', '2022-04-20 06:37:10'),
('KP.TW-331513042022', 33451340, 'belum_validasi', '2022-04-13 05:56:24'),
('KP.TW-331913042022', 33595837, 'belum_aktif', '2022-04-13 05:58:20'),
('KP.TW-351520042022', 3575416, 'belum_validasi', '2022-04-20 06:25:01'),
('KP.TW-351920042022', 358477, 'belum_aktif', '2022-04-20 06:25:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_user`
--

CREATE TABLE `t_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat` text DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `hak_akses` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_user`
--

INSERT INTO `t_user` (`id_user`, `nama`, `email`, `no_hp`, `alamat`, `password`, `hak_akses`, `status`, `foto`, `created_date`) VALUES
(1, 'Admin Tunggul Wulung', 'admin@mail.com', '08765568887', 'Kupuk, Bungkal, Ponorogo', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'aktif', NULL, '2022-02-28 14:10:31'),
(17, 'Supriono', 'supriono@mail.com', '086534253427', 'Sambit, Ponorogo', 'df20e8ad9716d28652ebebc39b6189ab', 'admin', 'aktif', NULL, '2022-02-22 09:24:39'),
(18, 'Kinung Saputra', 'kinung@mail.com', '087364527482', 'Tegalombo, Kauman, Ponorogo', '4c6b83fd2f2dca16e2ba174db0a6f124', 'pemancing', 'aktif', 'images5.jpg', '2022-03-12 05:32:55'),
(21, 'Sitro', 'sitro@mail.com', '086736253728', 'Kupuk, Bungkal, Ponorogo', 'b7c6f61a8aa1ae51be7e3d62bb479a0d', 'panitia', 'aktif', NULL, '0000-00-00 00:00:00'),
(22, 'Samsul Basirudin ', 'basir@mail.com', '087328361536', 'Kupuk, Bungkal, Ponorogo', '2f436de229cb54f9e76be816f48dca63', 'panitia', 'aktif', NULL, '2022-03-12 05:39:36'),
(23, 'Kristianto', 'kristianto@mail.com', '083723627283', 'Kupuk, Bungkal, Ponorogo', '13f68eead65a8f008165af7682ff39ca', 'panitia', 'aktif', NULL, '0000-00-00 00:00:00'),
(26, 'Wasis', 'wasis@mail.com', '082736254893', 'Kupuk, Bungkal, Ponorogo', '054d4a4653a16b49c49c49e000075d10', 'panitia', 'aktif', NULL, '0000-00-00 00:00:00'),
(27, 'Imam Sunarto', 'imam@mail.com', '084526352637', 'Turi, Jetis, Ponorogo', 'eaccb8ea6090a40a98aa28c071810371', 'pemancing', 'aktif', 'images_3.png', '0000-00-00 00:00:00'),
(32, 'Dadang Hermawan', 'dadang@mail.com', '086524351625', 'Siman, Siman, Ponorogo', '0037bb978d51e84d1ad5478e85430f26', 'pemancing', 'aktif', 'images.png', '2022-03-12 05:49:50'),
(33, 'Bebben Bojinov', 'bebben@mail.com', '085654356567', 'Kupuk, Bungkal, Ponorogo', 'e26c9c4e695ff04df9991f773b3b121d', 'pemancing', 'aktif', 'images_4.png', '2022-04-05 05:09:08'),
(35, 'Bayu Krisna', 'bayu@mail.com', '084627263517', 'Ngasinan, Sukorejo, Ponorogo', 'a430e06de5ce438d499c2e4063d60fd6', 'pemancing', 'aktif', 'images22.png', '0000-00-00 00:00:00'),
(36, 'Yanto ', 'yanto@mail.com', '084652635197', 'Kupuk, Bungkal, Ponorogo', '7849816e52e7d1596c51f3e36f21c498', 'panitia', 'aktif', 'images23.png', '2022-04-26 05:03:41'),
(37, 'Yuda Prasetya Saputra', 'yuda@mail.com', '086452413209', 'Beton, Siman, Ponorogo', 'ac9053a8bd7632586c3eb663a6cf15e4', 'pemancing', 'aktif', 'images11.png', '2022-04-27 06:34:50');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_event`
--
ALTER TABLE `t_event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indeks untuk tabel `t_panitia`
--
ALTER TABLE `t_panitia`
  ADD PRIMARY KEY (`id_panitia`),
  ADD KEY `id_subevent` (`id_subevent`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `t_pembelianikan`
--
ALTER TABLE `t_pembelianikan`
  ADD PRIMARY KEY (`id_pembelianikan`),
  ADD KEY `id_subevent` (`id_subevent`),
  ADD KEY `id_supplier` (`id_supplier`);

--
-- Indeks untuk tabel `t_pengumuman`
--
ALTER TABLE `t_pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indeks untuk tabel `t_pesanan`
--
ALTER TABLE `t_pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_subevent` (`id_subevent`);

--
-- Indeks untuk tabel `t_subevent`
--
ALTER TABLE `t_subevent`
  ADD PRIMARY KEY (`id_subevent`),
  ADD KEY `id_event` (`id_event`),
  ADD KEY `id_event_2` (`id_event`);

--
-- Indeks untuk tabel `t_supplier`
--
ALTER TABLE `t_supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indeks untuk tabel `t_tiket`
--
ALTER TABLE `t_tiket`
  ADD PRIMARY KEY (`id_tiket`),
  ADD KEY `id_pesanan` (`id_pesanan`);

--
-- Indeks untuk tabel `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_event`
--
ALTER TABLE `t_event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `t_panitia`
--
ALTER TABLE `t_panitia`
  MODIFY `id_panitia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `t_pembelianikan`
--
ALTER TABLE `t_pembelianikan`
  MODIFY `id_pembelianikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `t_pengumuman`
--
ALTER TABLE `t_pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `t_pesanan`
--
ALTER TABLE `t_pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37833200;

--
-- AUTO_INCREMENT untuk tabel `t_subevent`
--
ALTER TABLE `t_subevent`
  MODIFY `id_subevent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `t_supplier`
--
ALTER TABLE `t_supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `t_panitia`
--
ALTER TABLE `t_panitia`
  ADD CONSTRAINT `t_panitia_ibfk_1` FOREIGN KEY (`id_subevent`) REFERENCES `t_subevent` (`id_subevent`) ON DELETE CASCADE,
  ADD CONSTRAINT `t_panitia_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `t_user` (`id_user`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `t_pembelianikan`
--
ALTER TABLE `t_pembelianikan`
  ADD CONSTRAINT `t_pembelianikan_ibfk_1` FOREIGN KEY (`id_supplier`) REFERENCES `t_supplier` (`id_supplier`) ON DELETE CASCADE,
  ADD CONSTRAINT `t_pembelianikan_ibfk_2` FOREIGN KEY (`id_subevent`) REFERENCES `t_subevent` (`id_subevent`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `t_pesanan`
--
ALTER TABLE `t_pesanan`
  ADD CONSTRAINT `t_pesanan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `t_user` (`id_user`) ON DELETE CASCADE,
  ADD CONSTRAINT `t_pesanan_ibfk_2` FOREIGN KEY (`id_subevent`) REFERENCES `t_subevent` (`id_subevent`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `t_subevent`
--
ALTER TABLE `t_subevent`
  ADD CONSTRAINT `t_subevent_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `t_event` (`id_event`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `t_tiket`
--
ALTER TABLE `t_tiket`
  ADD CONSTRAINT `t_tiket_ibfk_1` FOREIGN KEY (`id_pesanan`) REFERENCES `t_pesanan` (`id_pesanan`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
