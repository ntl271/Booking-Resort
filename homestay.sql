-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2023 at 03:41 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homestay`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `sdt` varchar(12) NOT NULL,
  `ten` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `username`, `pass`, `email`, `sdt`, `ten`) VALUES
(1, 'admin', 'admin', 'null', 'null', 'Người Quản Trị '),
(4, 'trang', '1234566', 'trang@gamil.com', '0378282911', 'trang'),
(5, 'hoa', '1234567', 'hoa@gamil.com', '0378282952', 'hoa1');

-- --------------------------------------------------------

--
-- Table structure for table `dat_phong`
--

CREATE TABLE `dat_phong` (
  `ma_dat_phong` varchar(50) NOT NULL,
  `thoi_gian_vao` varchar(10) NOT NULL,
  `thoi_gian_ra` varchar(10) NOT NULL,
  `ma_phong` varchar(50) NOT NULL,
  `so_luong_phong` varchar(10) NOT NULL,
  `nguoi_lon` varchar(10) NOT NULL,
  `tre_em` varchar(10) DEFAULT NULL,
  `ho_ten` text NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `sdt` varchar(12) NOT NULL,
  `ghichu` text DEFAULT NULL,
  `thoi_gian_dat` varchar(10) NOT NULL,
  `gia_tien` varchar(50) DEFAULT NULL,
  `trang_thai` int(11) DEFAULT 0,
  `thanh_toan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dat_phong`
--

INSERT INTO `dat_phong` (`ma_dat_phong`, `thoi_gian_vao`, `thoi_gian_ra`, `ma_phong`, `so_luong_phong`, `nguoi_lon`, `tre_em`, `ho_ten`, `email`, `sdt`, `ghichu`, `thoi_gian_dat`, `gia_tien`, `trang_thai`, `thanh_toan`) VALUES
('250623144352', '28/04/2023', '30/04/2023', 'room1', '2', '1', '1', 'trang', 'nguyenhientrang@gmail.com', '0378282919', 'không', '799000', '799000', 1, 'Thanh Toán Ngay'),
('250623145014', '28/05/2023', '30/05/2023', 'room1', '1', '1', '1', 'trang', 'nguyenhientrang@gmail.com', '0378282919', 'không', '799000', '799000', 1, 'Thanh Toán Ngay'),
('250623145724', '28/06/2023', '30/06/2023', 'room1', '1', '1', '1', 'trang', 'nguyenhientrang@gmail.com', '0378282919', 'không', '25/06/2023', '799000', 1, 'Thanh Toán Ngay'),
('260623211754', '30/06/2023', '03/07/2023', 'room3', '1', '2', '0', 'Nhi', 'nhi@gamil.com', '0378280021', 'No ghi chú', '26/06/2023', '499000', 1, 'Thanh Toán Ngay'),
('290623161238', '01/07/2023', '02/08/2023', 'room2', '2', '4', '1', 'Hoa', 'hoa@gamil.com', '0839291299', 'không', '619000', '619000', 1, 'Thanh Toán Ngay'),
('290623224119', '01/07/2023', '04/07/2023', 'room2', '1', '1', '0', 'Hiếu', 'hieu@gmail.com', '0378282909', 'No ghi chú', '29/06/2023', '619000', 0, 'Thanh Toán Ngay'),
('290623230724', '01/07/2023', '02/08/2023', 'room1', '2', '4', '1', 'hùng', 'No Email', '0378282978', 'No ghi chú', '29/06/2023', '1598000', 0, 'Thanh Toán Sau'),
('290623231900', '01/07/2023', '02/08/2023', 'room1', '2', '4', '1', 'hùng', 'No Email', '0378282978', 'No ghi chú', '29/06/2023', '1598000', 1, 'Thanh Toán Sau');

-- --------------------------------------------------------

--
-- Table structure for table `dich_vu`
--

CREATE TABLE `dich_vu` (
  `id_dich_vu` varchar(12) NOT NULL,
  `ma_dich_vu` varchar(50) NOT NULL,
  `tieu_de` text NOT NULL,
  `noi_dung` text DEFAULT NULL,
  `ma_thuoc_tinh` varchar(50) DEFAULT NULL,
  `ma_hinh_anh` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dich_vu`
--

INSERT INTO `dich_vu` (`id_dich_vu`, `ma_dich_vu`, `tieu_de`, `noi_dung`, `ma_thuoc_tinh`, `ma_hinh_anh`) VALUES
('121315181619', 'dichvu1', 'Bida', 'Tận hưởng giây phút thư giãn với các dịch vụ của chúng tôi', 'dv1', 'dv1'),
('141718151612', 'dv2', 'Karaoke', 'Thỏa sức ca hát với dịch vụ Karaoke của HomeStay chúng tôi không giới hạn', 'dv2', 'dv2');

-- --------------------------------------------------------

--
-- Table structure for table `hinh_anh`
--

CREATE TABLE `hinh_anh` (
  `ma_hinh_anh` varchar(50) NOT NULL,
  `tieu_de` text DEFAULT NULL,
  `image_anh` varchar(200) NOT NULL,
  `id_hinh_anh` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hinh_anh`
--

INSERT INTO `hinh_anh` (`ma_hinh_anh`, `tieu_de`, `image_anh`, `id_hinh_anh`) VALUES
('banner', 'No_titel', 'banner2.jpg', '1610648317'),
('banner', 'No_titel', 'banner3.jpg', '1610648326'),
('banner', 'No_titel', 'banner4.jpg', '1610648336'),
('banner', 'No_titel', 'banner5.jpg', '1610648345'),
('banner', 'No_titel', 'banner6.jpg', '1610648360'),
('banner', 'No_titel', 'banner7.jpg', '1610648370'),
('phong1', 'No_titel', '57262850_2851679101516457_3755024593325129728_o.jpg', '1610657035'),
('phong1', 'No_titel', '69218146_3203398616344502_3609200025445335040_o.jpg', '1610657051'),
('phong1', 'No_titel', '44344443_2469446563073048_6756504231198326784_o.jpg', '1610657076'),
('phong2', 'No_titel', '69991210_3203398406344523_5713389441028980736_o.jpg', '1610657094'),
('phong2', 'No_titel', '34093493_2204171969600510_8926761513788637184_n (1).jpg', '1610657102'),
('phong2', 'No_titel', 'banner2.jpg', '1610657117'),
('km1', 'No_titel', '1.jpg', '1610658004'),
('dv1', 'No_titel', 'bida01.jpg', '1610658372'),
('km2', 'No_titel', 'km2.jpg', '1610662145'),
('dv2', 'No_titel', 'karaok2.jpg', '1610663348'),
('dv2', 'No_titel', 'ka02.jpg', '1610663391'),
('phong3', 'No_titel', 'banner5.jpg', '1610663719'),
('phong3', 'No_titel', '3-2-696x696.png', '1610663731'),
('phong3', 'No_titel', '25158003_1776078816020962_852727154806233275_n.jpg', '1610663740');

-- --------------------------------------------------------

--
-- Table structure for table `khuyen_mai`
--

CREATE TABLE `khuyen_mai` (
  `id_khuyen_mai` varchar(12) NOT NULL,
  `ma_km` varchar(50) NOT NULL,
  `tieu_de` text NOT NULL,
  `noi_dung` text DEFAULT NULL,
  `ma_thuoc_tinh` varchar(50) DEFAULT NULL,
  `ma_hinh_anh` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khuyen_mai`
--

INSERT INTO `khuyen_mai` (`id_khuyen_mai`, `ma_km`, `tieu_de`, `noi_dung`, `ma_thuoc_tinh`, `ma_hinh_anh`) VALUES
('030723105915', '3', 'khuyến mãi 3', 'khuyến mãi', 'km2', 'km2'),
('1212456365', 'khuyenmai1', 'Sale Đậm Cuối Năm', 'Giảm giá sau cho cuối năm', 'km1', 'km1'),
('1234567895', 'khuyenmai2', 'Giảm trực tiếp 20% khi đi 3 người', 'Giảm trực tiếp 20% tổng giá dịch vụ khi đi từ 3 người trở lên. Chi tiết liên hệ để biết thêm thông tin', 'km2', 'km2');

-- --------------------------------------------------------

--
-- Table structure for table `lien_he`
--

CREATE TABLE `lien_he` (
  `ho_ten` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `sdt` varchar(12) DEFAULT NULL,
  `noi_dung` text DEFAULT NULL,
  `id_lien_he` varchar(50) NOT NULL,
  `ngay` varchar(10) NOT NULL,
  `trang_thai` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lien_he`
--

INSERT INTO `lien_he` (`ho_ten`, `email`, `sdt`, `noi_dung`, `id_lien_he`, `ngay`, `trang_thai`) VALUES
('nguyễn Hiền Trang', 'nguyenhientrang@gmail.com', '0378282919', 'Bên mình còn phòng không ạ', '150655', '26/06/2023', 1),
('hải', 'hai@gmail.com', '0378280022', 'syysysys', '160715', '03/07/2023', 1),
('Hường', 'huong@gamil.com', '0839291299', 'Bên mình còn phòng trống không ạ', '161140', '29/06/2023', 1),
('hải', 'hai@gmail.com', '0378282900', 'liên hệ với tôi ngay', '211103', '26/06/2023', 1);

-- --------------------------------------------------------

--
-- Table structure for table `phong`
--

CREATE TABLE `phong` (
  `id_phong` varchar(12) NOT NULL,
  `ma_phong` varchar(50) NOT NULL,
  `ten_phong` text NOT NULL,
  `noi_dung` text NOT NULL,
  `gia_phong` varchar(12) NOT NULL,
  `ma_hinh_anh` varchar(50) DEFAULT NULL,
  `ma_thuoc_tinh` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phong`
--

INSERT INTO `phong` (`id_phong`, `ma_phong`, `ten_phong`, `noi_dung`, `gia_phong`, `ma_hinh_anh`, `ma_thuoc_tinh`) VALUES
('124578986532', 'room1', 'Phòng Loại 1', '   Phòng cao cấp nhất của resort chúng tôi . Welcome ', '1200000', 'phong1', 'phong1'),
('124978653245', 'room3', 'Phòng Loại 3', '  Giá thành phù hợp chất lượng tương đối. Đây là phòng có diện tích phù hợp cho các bạn trẻ đam mê xê dịch', '699000', 'phong3', 'phong3'),
('134679852564', 'room2', 'Phòng loại 2', '  Phòng rộng rãi thoàng mat phù hợp cho gia đình 3 người lưu trú thuận tiện', '900000', 'phong2', 'phong2');

-- --------------------------------------------------------

--
-- Table structure for table `thuoc_tinh`
--

CREATE TABLE `thuoc_tinh` (
  `ma_thuoc_tinh` varchar(50) NOT NULL,
  `ten_thuoc_tinh` text DEFAULT NULL,
  `noi_dung` text NOT NULL,
  `id_thuoc_tinh` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thuoc_tinh`
--

INSERT INTO `thuoc_tinh` (`ma_thuoc_tinh`, `ten_thuoc_tinh`, `noi_dung`, `id_thuoc_tinh`) VALUES
('phong1', 'Diện tích', '25 m2', '1610657214'),
('km1', 'Ưu đãi khủng', 'Giảm giá cực sốc cho ngày tết', '1610658112'),
('dv1', 'Địa điểm', 'Sảnh tầng 1 khu phức hợp thể thao. Karaoke giúp con người tăng sự hưng phấn, lạc quan giải tỏa stress và quên đi những chuyện buồn trong cuộc sống.', '1610658330'),
('km2', 'Thời Gian:', 'Áp dụng đến khi hết chương trình khuyến mãi', '1610662184'),
('phong2', 'Diện tích ', '25m2', '1610662358'),
('dv2', 'Địa điểm', 'Sảnh tầng 2 khu phức hợp thể thao. Trò chơi thể thao về bộ môn Bi-A vô cùng hấp dẫn và cuốn hút trên GameVui', '1610663428'),
('phong3', 'Diện tích', '20m2 rộng rãi', '1610663764');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `sdt` (`sdt`);

--
-- Indexes for table `dat_phong`
--
ALTER TABLE `dat_phong`
  ADD PRIMARY KEY (`ma_dat_phong`),
  ADD KEY `ma_dat_phong` (`ma_dat_phong`),
  ADD KEY `ma_phong` (`ma_phong`);

--
-- Indexes for table `dich_vu`
--
ALTER TABLE `dich_vu`
  ADD PRIMARY KEY (`id_dich_vu`,`ma_dich_vu`),
  ADD KEY `ma_dich_vu` (`ma_dich_vu`,`ma_thuoc_tinh`,`ma_hinh_anh`),
  ADD KEY `kf_dv_tt` (`ma_thuoc_tinh`),
  ADD KEY `kf_dv_ha` (`ma_hinh_anh`);

--
-- Indexes for table `hinh_anh`
--
ALTER TABLE `hinh_anh`
  ADD PRIMARY KEY (`id_hinh_anh`),
  ADD KEY `ma_hinh_anh` (`ma_hinh_anh`);

--
-- Indexes for table `khuyen_mai`
--
ALTER TABLE `khuyen_mai`
  ADD PRIMARY KEY (`id_khuyen_mai`,`ma_km`),
  ADD KEY `ma_thuoc_tinh` (`ma_thuoc_tinh`,`ma_hinh_anh`),
  ADD KEY `kf_km_ha` (`ma_hinh_anh`);

--
-- Indexes for table `lien_he`
--
ALTER TABLE `lien_he`
  ADD PRIMARY KEY (`id_lien_he`);

--
-- Indexes for table `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`id_phong`,`ma_phong`),
  ADD KEY `ma_phong` (`ma_phong`,`ma_hinh_anh`,`ma_thuoc_tinh`),
  ADD KEY `kf_p_tt` (`ma_thuoc_tinh`),
  ADD KEY `kf_p_ha` (`ma_hinh_anh`);

--
-- Indexes for table `thuoc_tinh`
--
ALTER TABLE `thuoc_tinh`
  ADD PRIMARY KEY (`id_thuoc_tinh`),
  ADD KEY `ma_thuoc_tinh` (`ma_thuoc_tinh`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dat_phong`
--
ALTER TABLE `dat_phong`
  ADD CONSTRAINT `kf_dp_p` FOREIGN KEY (`ma_phong`) REFERENCES `phong` (`ma_phong`);

--
-- Constraints for table `dich_vu`
--
ALTER TABLE `dich_vu`
  ADD CONSTRAINT `kf_dv_ha` FOREIGN KEY (`ma_hinh_anh`) REFERENCES `hinh_anh` (`ma_hinh_anh`),
  ADD CONSTRAINT `kf_dv_tt` FOREIGN KEY (`ma_thuoc_tinh`) REFERENCES `thuoc_tinh` (`ma_thuoc_tinh`);

--
-- Constraints for table `khuyen_mai`
--
ALTER TABLE `khuyen_mai`
  ADD CONSTRAINT `kf_km_ha` FOREIGN KEY (`ma_hinh_anh`) REFERENCES `hinh_anh` (`ma_hinh_anh`),
  ADD CONSTRAINT `kf_km_tt` FOREIGN KEY (`ma_thuoc_tinh`) REFERENCES `thuoc_tinh` (`ma_thuoc_tinh`);

--
-- Constraints for table `phong`
--
ALTER TABLE `phong`
  ADD CONSTRAINT `kf_p_ha` FOREIGN KEY (`ma_hinh_anh`) REFERENCES `hinh_anh` (`ma_hinh_anh`),
  ADD CONSTRAINT `kf_p_tt` FOREIGN KEY (`ma_thuoc_tinh`) REFERENCES `thuoc_tinh` (`ma_thuoc_tinh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
