-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2023 at 10:46 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `htqlcaycanh`
--

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_don_dat_hang`
--

CREATE TABLE `chi_tiet_don_dat_hang` (
  `SP_MA` int(11) NOT NULL,
  `DDH_MA` int(11) NOT NULL,
  `SOLUONG` int(11) DEFAULT NULL,
  `DONGIA` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_gio_hang`
--

CREATE TABLE `chi_tiet_gio_hang` (
  `GH_MA` int(11) NOT NULL,
  `SP_MA` int(11) NOT NULL,
  `SOLUONG` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_phieu_nhap`
--

CREATE TABLE `chi_tiet_phieu_nhap` (
  `PN_MA` int(11) NOT NULL,
  `SP_MA` int(11) NOT NULL,
  `SOLUONG` int(11) NOT NULL,
  `DONGIA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_phieu_xuat`
--

CREATE TABLE `chi_tiet_phieu_xuat` (
  `SP_MA` int(11) NOT NULL,
  `PX_MA` int(11) NOT NULL,
  `SOLUONG` int(11) NOT NULL,
  `DONGIA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_thuoc_tinh`
--

CREATE TABLE `chi_tiet_thuoc_tinh` (
  `TTINH_MA` int(11) NOT NULL,
  `SP_MA` int(11) NOT NULL,
  `ATTRIBUTE_57` char(10) DEFAULT NULL,
  `ATTRIBUTE_58` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_trang_thai`
--

CREATE TABLE `chi_tiet_trang_thai` (
  `DDH_MA` int(11) NOT NULL,
  `TT_MA` int(11) NOT NULL,
  `NGAYCAPNHAT` char(10) DEFAULT NULL,
  `GHICHU` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `codiachigiaohang`
--

CREATE TABLE `codiachigiaohang` (
  `KH_MA` int(11) NOT NULL,
  `DCGH_MA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dia_chi_giao_hang`
--

CREATE TABLE `dia_chi_giao_hang` (
  `DCGH_MA` int(11) NOT NULL,
  `H_MA` int(11) NOT NULL,
  `KH_MA` int(11) NOT NULL,
  `DCGH_TENNGUOIDAT` varchar(30) DEFAULT NULL,
  `DCGH_SONHA` char(20) DEFAULT NULL,
  `DCGH_GHICHU` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `don_dat_hang`
--

CREATE TABLE `don_dat_hang` (
  `DDH_MA` int(11) NOT NULL,
  `KH_MA` int(11) NOT NULL,
  `DCGH_MA` int(11) NOT NULL,
  `NV_MA` int(11) NOT NULL,
  `DDH_PHIGIAOHANG` float DEFAULT NULL,
  `DDH_NGAYDAT` date DEFAULT NULL,
  `DDH_TONGTIEN` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gio_hang`
--

CREATE TABLE `gio_hang` (
  `GH_MA` int(11) NOT NULL,
  `GH_NGAYCAPNHAT` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `huyen`
--

CREATE TABLE `huyen` (
  `H_MA` int(11) NOT NULL,
  `T_MA` int(11) NOT NULL,
  `H_TEN` varchar(20) DEFAULT NULL,
  `DDH_PHIGIAOHANG` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `KH_MA` int(11) NOT NULL,
  `KH_TEN` varchar(50) DEFAULT NULL,
  `KH_SDT` decimal(8,0) DEFAULT NULL,
  `KH_DIACHI` varchar(100) DEFAULT NULL,
  `KH_NGAYSINH` date DEFAULT NULL,
  `KH_EMAIL` varchar(50) DEFAULT NULL,
  `KH_TAIKHOAN` varchar(30) DEFAULT NULL,
  `KH_MATKHAU` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `L_MA` int(11) NOT NULL,
  `L_TEN` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`L_MA`, `L_TEN`) VALUES
(1, 'Cây abc'),
(2, 'Cây Phong thủy'),
(3, 'Cây sân vườn'),
(4, 'Cây văn phòng');

-- --------------------------------------------------------

--
-- Table structure for table `nhan_vien`
--

CREATE TABLE `nhan_vien` (
  `NV_MA` int(11) NOT NULL,
  `VT_MA` int(11) NOT NULL,
  `NV_TEN` varchar(50) DEFAULT NULL,
  `ATTRIBUTE_51` decimal(8,0) DEFAULT NULL,
  `ATTRIBUTE_52` varchar(50) DEFAULT NULL,
  `ATTRIBUTE_53` varchar(50) DEFAULT NULL,
  `ATTRIBUTE_54` varchar(20) DEFAULT NULL,
  `ATTRIBUTE_55` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nha_cung_cap`
--

CREATE TABLE `nha_cung_cap` (
  `NCC_MA` int(11) NOT NULL,
  `NCC_TEN` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phieu_nhap`
--

CREATE TABLE `phieu_nhap` (
  `PN_MA` int(11) NOT NULL,
  `NCC_MA` int(11) NOT NULL,
  `PN_NGAYNHAP` date DEFAULT NULL,
  `PN_NOIDUNG` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phieu_xuat`
--

CREATE TABLE `phieu_xuat` (
  `PX_MA` int(11) NOT NULL,
  `PX_NGAYXUAT` date DEFAULT NULL,
  `PX_NOIDUNG` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE `san_pham` (
  `SP_MA` int(11) NOT NULL,
  `L_MA` int(11) NOT NULL,
  `SP_TEN` varchar(50) DEFAULT NULL,
  `SP_MOTA` varchar(50) DEFAULT NULL,
  `SP_HinhAnh` varchar(100) DEFAULT NULL,
  `SP_SoLuong` int(11) DEFAULT NULL,
  `SP_Gia` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`SP_MA`, `L_MA`, `SP_TEN`, `SP_MOTA`, `SP_HinhAnh`, `SP_SoLuong`, `SP_Gia`) VALUES
(14, 3, 'Mai tứ quý', 'Đây là cây mai tứ quý', 'img_6537f7d14aa32.jpg', 2, 3000000),
(15, 3, 'Mai chấn thủy', 'Đây là cây mai chấn thủy', 'img_6537f807d51c1.jpg', 2, 2500000);

-- --------------------------------------------------------

--
-- Table structure for table `thuoc_tinh`
--

CREATE TABLE `thuoc_tinh` (
  `TTINH_MA` int(11) NOT NULL,
  `TTINH_TEN` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tinh_thanhpho`
--

CREATE TABLE `tinh_thanhpho` (
  `T_MA` int(11) NOT NULL,
  `T_TEN` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trang_thai`
--

CREATE TABLE `trang_thai` (
  `TT_MA` int(11) NOT NULL,
  `TT_TEN` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vai_tro`
--

CREATE TABLE `vai_tro` (
  `VT_MA` int(11) NOT NULL,
  `VT_TEN` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chi_tiet_don_dat_hang`
--
ALTER TABLE `chi_tiet_don_dat_hang`
  ADD PRIMARY KEY (`SP_MA`,`DDH_MA`),
  ADD KEY `FK_DONDATHANG_CHITIETDONDATHANG` (`DDH_MA`);

--
-- Indexes for table `chi_tiet_gio_hang`
--
ALTER TABLE `chi_tiet_gio_hang`
  ADD PRIMARY KEY (`GH_MA`,`SP_MA`),
  ADD KEY `SP_MA` (`SP_MA`);

--
-- Indexes for table `chi_tiet_phieu_nhap`
--
ALTER TABLE `chi_tiet_phieu_nhap`
  ADD PRIMARY KEY (`PN_MA`,`SP_MA`),
  ADD KEY `SP_MA` (`SP_MA`);

--
-- Indexes for table `chi_tiet_phieu_xuat`
--
ALTER TABLE `chi_tiet_phieu_xuat`
  ADD PRIMARY KEY (`SP_MA`,`PX_MA`),
  ADD KEY `FK_PHIEUXUAT_CHITIETPHIEUXUAT` (`PX_MA`);

--
-- Indexes for table `chi_tiet_thuoc_tinh`
--
ALTER TABLE `chi_tiet_thuoc_tinh`
  ADD PRIMARY KEY (`TTINH_MA`,`SP_MA`),
  ADD KEY `SP_MA` (`SP_MA`);

--
-- Indexes for table `chi_tiet_trang_thai`
--
ALTER TABLE `chi_tiet_trang_thai`
  ADD PRIMARY KEY (`DDH_MA`,`TT_MA`),
  ADD KEY `FK_TRANGTHAI_CHITIETTRANGTHAI` (`TT_MA`);

--
-- Indexes for table `codiachigiaohang`
--
ALTER TABLE `codiachigiaohang`
  ADD PRIMARY KEY (`KH_MA`,`DCGH_MA`);

--
-- Indexes for table `dia_chi_giao_hang`
--
ALTER TABLE `dia_chi_giao_hang`
  ADD PRIMARY KEY (`DCGH_MA`),
  ADD KEY `FK_CODIACHIGIAOHANG` (`KH_MA`),
  ADD KEY `FK_HUYEN_DIACHIGIAOHANG` (`H_MA`);

--
-- Indexes for table `don_dat_hang`
--
ALTER TABLE `don_dat_hang`
  ADD PRIMARY KEY (`DDH_MA`),
  ADD KEY `FK_DIACHIGIAOHANG_DONDATHANG` (`DCGH_MA`),
  ADD KEY `FK_KHACHHANG_DONDATHANG` (`KH_MA`),
  ADD KEY `FK_NHANVIEN_DONDATHANG` (`NV_MA`);

--
-- Indexes for table `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD PRIMARY KEY (`GH_MA`);

--
-- Indexes for table `huyen`
--
ALTER TABLE `huyen`
  ADD PRIMARY KEY (`H_MA`),
  ADD KEY `FK_HUYEN_THANHPHO` (`T_MA`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`KH_MA`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`L_MA`);

--
-- Indexes for table `nhan_vien`
--
ALTER TABLE `nhan_vien`
  ADD PRIMARY KEY (`NV_MA`),
  ADD KEY `FK_VAITRO_NHANVIEN` (`VT_MA`);

--
-- Indexes for table `nha_cung_cap`
--
ALTER TABLE `nha_cung_cap`
  ADD PRIMARY KEY (`NCC_MA`);

--
-- Indexes for table `phieu_nhap`
--
ALTER TABLE `phieu_nhap`
  ADD PRIMARY KEY (`PN_MA`),
  ADD KEY `FK_PHIEUNHAP_NHACUNGCAP` (`NCC_MA`);

--
-- Indexes for table `phieu_xuat`
--
ALTER TABLE `phieu_xuat`
  ADD PRIMARY KEY (`PX_MA`);

--
-- Indexes for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`SP_MA`),
  ADD KEY `L_MA` (`L_MA`);

--
-- Indexes for table `thuoc_tinh`
--
ALTER TABLE `thuoc_tinh`
  ADD PRIMARY KEY (`TTINH_MA`);

--
-- Indexes for table `tinh_thanhpho`
--
ALTER TABLE `tinh_thanhpho`
  ADD PRIMARY KEY (`T_MA`);

--
-- Indexes for table `trang_thai`
--
ALTER TABLE `trang_thai`
  ADD PRIMARY KEY (`TT_MA`);

--
-- Indexes for table `vai_tro`
--
ALTER TABLE `vai_tro`
  ADD PRIMARY KEY (`VT_MA`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loai`
--
ALTER TABLE `loai`
  MODIFY `L_MA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `SP_MA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chi_tiet_don_dat_hang`
--
ALTER TABLE `chi_tiet_don_dat_hang`
  ADD CONSTRAINT `FK_DONDATHANG_CHITIETDONDATHANG` FOREIGN KEY (`DDH_MA`) REFERENCES `don_dat_hang` (`DDH_MA`),
  ADD CONSTRAINT `chi_tiet_don_dat_hang_ibfk_1` FOREIGN KEY (`SP_MA`) REFERENCES `san_pham` (`SP_MA`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chi_tiet_gio_hang`
--
ALTER TABLE `chi_tiet_gio_hang`
  ADD CONSTRAINT `FK_GIOHANG_CHITIETGIOHANG` FOREIGN KEY (`GH_MA`) REFERENCES `gio_hang` (`GH_MA`),
  ADD CONSTRAINT `chi_tiet_gio_hang_ibfk_1` FOREIGN KEY (`SP_MA`) REFERENCES `san_pham` (`SP_MA`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chi_tiet_phieu_nhap`
--
ALTER TABLE `chi_tiet_phieu_nhap`
  ADD CONSTRAINT `FK_CHITIETPHIEUNHAP_PHIEUNHAP` FOREIGN KEY (`PN_MA`) REFERENCES `phieu_nhap` (`PN_MA`),
  ADD CONSTRAINT `chi_tiet_phieu_nhap_ibfk_1` FOREIGN KEY (`SP_MA`) REFERENCES `san_pham` (`SP_MA`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chi_tiet_phieu_xuat`
--
ALTER TABLE `chi_tiet_phieu_xuat`
  ADD CONSTRAINT `FK_PHIEUXUAT_CHITIETPHIEUXUAT` FOREIGN KEY (`PX_MA`) REFERENCES `phieu_xuat` (`PX_MA`),
  ADD CONSTRAINT `chi_tiet_phieu_xuat_ibfk_1` FOREIGN KEY (`SP_MA`) REFERENCES `san_pham` (`SP_MA`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chi_tiet_thuoc_tinh`
--
ALTER TABLE `chi_tiet_thuoc_tinh`
  ADD CONSTRAINT `FK_CHITIETTHUOCTINH_THUOCTINH` FOREIGN KEY (`TTINH_MA`) REFERENCES `thuoc_tinh` (`TTINH_MA`),
  ADD CONSTRAINT `chi_tiet_thuoc_tinh_ibfk_1` FOREIGN KEY (`SP_MA`) REFERENCES `san_pham` (`SP_MA`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chi_tiet_trang_thai`
--
ALTER TABLE `chi_tiet_trang_thai`
  ADD CONSTRAINT `FK_DONDATHANG_CHITIETTRANGTHAI` FOREIGN KEY (`DDH_MA`) REFERENCES `don_dat_hang` (`DDH_MA`),
  ADD CONSTRAINT `FK_TRANGTHAI_CHITIETTRANGTHAI` FOREIGN KEY (`TT_MA`) REFERENCES `trang_thai` (`TT_MA`);

--
-- Constraints for table `dia_chi_giao_hang`
--
ALTER TABLE `dia_chi_giao_hang`
  ADD CONSTRAINT `FK_CODIACHIGIAOHANG` FOREIGN KEY (`KH_MA`) REFERENCES `khach_hang` (`KH_MA`),
  ADD CONSTRAINT `FK_HUYEN_DIACHIGIAOHANG` FOREIGN KEY (`H_MA`) REFERENCES `huyen` (`H_MA`);

--
-- Constraints for table `don_dat_hang`
--
ALTER TABLE `don_dat_hang`
  ADD CONSTRAINT `FK_DIACHIGIAOHANG_DONDATHANG` FOREIGN KEY (`DCGH_MA`) REFERENCES `dia_chi_giao_hang` (`DCGH_MA`),
  ADD CONSTRAINT `FK_KHACHHANG_DONDATHANG` FOREIGN KEY (`KH_MA`) REFERENCES `khach_hang` (`KH_MA`),
  ADD CONSTRAINT `FK_NHANVIEN_DONDATHANG` FOREIGN KEY (`NV_MA`) REFERENCES `nhan_vien` (`NV_MA`);

--
-- Constraints for table `huyen`
--
ALTER TABLE `huyen`
  ADD CONSTRAINT `FK_HUYEN_THANHPHO` FOREIGN KEY (`T_MA`) REFERENCES `tinh_thanhpho` (`T_MA`);

--
-- Constraints for table `nhan_vien`
--
ALTER TABLE `nhan_vien`
  ADD CONSTRAINT `FK_VAITRO_NHANVIEN` FOREIGN KEY (`VT_MA`) REFERENCES `vai_tro` (`VT_MA`);

--
-- Constraints for table `phieu_nhap`
--
ALTER TABLE `phieu_nhap`
  ADD CONSTRAINT `FK_PHIEUNHAP_NHACUNGCAP` FOREIGN KEY (`NCC_MA`) REFERENCES `nha_cung_cap` (`NCC_MA`);

--
-- Constraints for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `san_pham_ibfk_1` FOREIGN KEY (`L_MA`) REFERENCES `loai` (`L_MA`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
