/* Tạo Cơ Sở Dữ Liệu */
CREATE DATABASE QuanLyBanHang2
GO 
USE QuanLyBanHang2
GO
CREATE TABLE HANGHOA
(
MaH Char(10) PRIMARY KEY,
TenH Varchar(100) NOT NULL,
DVT Char(10) NOT NULL,
NoiSX Varchar(20),
SoLuong Int
)
/* Tạo Bảng Khách */
CREATE TABLE KHACHHANG
(
Mak Char(10) PRIMARY KEY,
TenK Varchar(50) NOT NULL,
DiaChi Varchar(20),
SoDT Char(15)
)
/* Tạo Bảng Hóa Ðơn */
CREATE TABLE HOADON
(
SoHD Char(10) PRIMARY kEY,
Ngay DateTime NOT NULL,
MaK Char(10),
CONSTRAINT MaK_FK FOREIGN KEY (MaK) REFERENCES KHACHHANG (MaK)
)
/* Tạo Bảng Chi Tiết Hóa Đơn */
CREATE TABLE CHITIETHOADON
(
SoHD Char(10), 
MaH Char(10),
SoLuong int NOT NULL,
DonGia Money NOT NULL,
CONSTRAINT MaH_SoHD_PK PRIMARY KEY (MaH, SoHD),
CONSTRAINT MaH_FK FOREIGN KEY (MaH) REFERENCES HANGHOA (MaH),
CONSTRAINT SoHD_FK FOREIGN KEY (SoHD) REFERENCES HOADON (SoHD)
)
/* Nhập Dữ Liệu Cho Các Bảng */
INSERT INTO HANGHOA
VALUES
('MaH01','Ao Dai Cach Tan','Bo','Ha Noi','50000'),
('MaH02','Ao Dai Cong So','Bo','Thai Nguyen','50000'),
('MaH03','Ao Dai Theu','Bo','Hoa Binh','60000'),
('MaH04','AO Dai In 3D','Bo','Hai Phong','55000'),
('MaH05','Ao Dai Gam','Bo','Cao Bang','70000')
INSERT INTO KHACHHANG
VALUES
('MaK01','Nguyen Bao An','Ha Noi','0989009876'),
('MaK02','Hoang Thu Thuy','Ha Tinh','0978409876'),
('MaK03','Tran Thi Trang','Nghe An','0967679854'),
('MaK04','Vu Hong Quan','Thai Nguyen','0989076454'),
('MaK05','Ngo Van Tung','Hai Phong','0989346578')
INSERT INTO HOADON
VALUES
('HD01','09/23/2014','MaK01'),
('HD02','01/19/2014','MaK01'),
('HD03','05/01/2014','MaK03'),
('HD04','04/01/2014','MaK04'),
('HD05','04/27/2014','MaK04')
INSERT INTO CHITIETHOADON
VALUES
('HD01','MaH01','10000','30000'),
('HD02','MaH02','20000','25000'),
('HD03','MaH02','15000','50000'),
('HD04','MaH05','10000','40000'),
('HD05','MaH03','20000','60000')
