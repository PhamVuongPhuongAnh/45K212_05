/* Tạo Cơ Sở Dữ Liệu */
CREATE DATABASE QuanLy_BanHang05
GO 
USE QuanLy_BanHang05
GO
CREATE TABLE tbl_KhoHang
(
MaH INT PRIMARY KEY NOT NULL,
TenH Varchar(100) NOT NULL,
GiaBan MONEY ,
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
MaH INT NOT NULL,
SoLuong int NOT NULL,
DonGia Money NOT NULL,
CONSTRAINT MaH_SoHD_PK PRIMARY KEY (MaH, SoHD),
CONSTRAINT MaH_FK1 FOREIGN KEY (MaH) REFERENCES tbl_KhoHang (MaH),
CONSTRAINT SoHD_FK FOREIGN KEY (SoHD) REFERENCES HOADON (SoHD)
)
Create table tbl_DatHang 
(
  id int primary key,
  id_HangDat INT,
  ghichu text,
  ngay_ban date,
  MaH INT ,
  SoLuongDat int,

  CONSTRAINT id_HangDat_FK FOREIGN KEY (id_HangDat) REFERENCES tbl_KhoHang (MaH)
)

/* Nhập Dữ Liệu Cho Các Bảng */
insert into Tbl_DatHang (id, ngay_ban, SoLuongDat)
values

(1,'2021-04-01', 9),
(3,'2021-04-01', 2),
(5,'2021-04-01', 3),
(4,'2021-04-01', 4),
(10,'2021-04-01', 5),
(9,'2021-04-01', 9),
(7,'2021-04-01', 2),
(8,'2021-04-01', 11),
(6,'2021-04-01', 12),
(2,'2021-04-01', 13)

go
INSERT INTO tbl_KhoHang
VALUES
('01','Ao Dai Cach Tan','15000','Ha Noi','50'),
('02','Ao Dai Cong So','15500','Thai Nguyen','50'),
('03','Ao Dai Theu','17000','Hoa Binh','60'),
('04','AO Dai In 3D','20000','Hai Phong','55'),
('05','Ao Dai Gam','16000','Cao Bang','70')
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
('HD01','01','10000','30000'),
('HD02','02','20000','25000'),
('HD03','02','15000','50000'),
('HD04','05','10000','40000'),
('HD05','03','20000','60000')
Go

select * from tbl_KhoHang
select * from HOADON

select tbl_KhoHang.TenH, sum(tbl_KhoHang.GiaBan * Tbl_DatHang.SoLuongDat) 'Tong'

from tbl_DatHang left join tbl_KhoHang on tbl_DatHang.id = tbl_KhoHang.MaH

group by tbl_KhoHang.TenH



/* cập nhật hàng trong kho sau khi đặt hàng hoặc cập nhật */
USE QuanLy_BanHang05
GO
CREATE TRIGGER trg_Dat_Hang ON tbl_DatHang AFTER INSERT AS 
BEGIN
	UPDATE Tbl_KhoHang
	SET SoLuong = SoLuong - (
		SELECT SoLuongDat
		FROM inserted
		WHERE MaH = Tbl_KhoHang.MaH
	)
	FROM Tbl_KhoHang
	JOIN inserted ON Tbl_KhoHang.MaH = inserted.MaH
END
GO
/* cập nhật hàng trong kho sau khi cập nhật đặt hàng */
CREATE TRIGGER trg_CapNhat_DatHang on tbl_DatHang after update AS
BEGIN
   UPDATE tbl_KhoHang SET SoLuong = SoLuong -
	   (SELECT SoLuongDat FROM inserted WHERE MaH = tbl_KhoHang.MaH) +
	   (SELECT SoLuongDat FROM deleted WHERE MaH = tbl_KhoHang.MaH)
   FROM tbl_KhoHang 
   JOIN deleted ON tbl_KhoHang.MaH = deleted.MaH
end
GO
/* cập nhật hàng trong kho sau khi hủy đặt hàng */
create TRIGGER trg_Huy_Dat_Hang ON tbl_DatHang FOR DELETE AS 
BEGIN
	UPDATE tbl_KhoHang
	SET SoLuong = SoLuong + (SELECT SoLuongDat FROM deleted WHERE MaH = tbl_KhoHang.MaH)
	FROM tbl_KhoHang 
	JOIN deleted ON tbl_KhoHang.MaH = deleted.MaH
END