create database asm1;

create table user(
id int not null,
username varchar(100),
password varchar(100),
primary key(id)
);

create table categories(
catid int not null,
catname varchar(100),
primary key(catid)
);

CREATE TABLE khachhang(
maKH int(11) NOT NULL,
tenKH varchar(50) NOT NULL,
username varchar(50) NOT NULL,
password varchar(50) NOT NULL,
soDT varchar(20) NOT NULL,
email varchar(20) NOT NULL,
diaChi varchar(50) NOT NULL,
primary key(maKH)
);


CREATE TABLE products (
productId int(11) NOT NULL,
productName varchar(100) NOT NULL,
catid int not null,
quantity int(100) NOT NULL,
price float NOT NULL,
image varchar(255) NOT NULL,
mota varchar(100),
productStatus varchar(100),
typeId int not null,
primary key(productId)
);
-- alter table products
-- add constraint fk_hd
-- foreign key(catid)
-- references categories(catid);


CREATE TABLE orders (
maHD int(11) NOT NULL,
tongTien int(11) NOT NULL,
ngayMua date NOT NULL,
ghichu varchar(50) NOT NULL,
tinhTrang int(11) NOT NULL,
maKH int(11) NOT NULL,
primary key(maHD)
) ;
-- alter table orders
-- add constraint fk_od
-- foreign key(maKH)
-- references khachhang(maKH);

CREATE TABLE orderschitiet (
maHD int(11) NOT NULL,
productId int(11) NOT NULL,
soLuong int(11) NOT NULL,
donGia int(11) NOT NULL,
phone varchar(100),
address varchar(1000),
primary key(maHD)
) ;
-- alter table  orderschitiet
-- add constraint fk_odct
-- foreign key(maHD)
-- references orders(maHD);

-- alter table  orderschitiet
-- add constraint kfk_odct
-- foreign key(productId)
-- references products(productId);

INSERT INTO categories (catid, catname) VALUES
('1', 'Apple'),('2', 'Đồng hồ'),('3', 'Điện thoại'),('4', 'Máy cũ giá rẻ'),('5', 'Máy tính'),('6', 'Phụ kiện');


INSERT INTO khachhang (maKH, tenKH, username, password, soDT, email, diaChi) VALUES
(7, 'Phong', 'admin', '123456', '0909009009', 'phong@gmail.com', 'Huế'),
(9, 'Như', 'user', '123456', '0808008008', 'nhu@gmail.com', 'Huế'),
(11, 'Phúc', 'phuc1', '123456', '0366405769', 'phuc@gmail.com', 'Thanh Phước - Huế');

INSERT INTO orders (maHD, tongTien, ngayMua, ghichu, tinhTrang, maKH) VALUES
(1, 36390000, '2020-08-11', 'Giao nhanh nha shop ', 1, 7),
(2, 36390000, '2020-08-11', 'Giao nhanh nha shop', 0, 9),
(3, 48820000, '2020-08-11', 'Giao nhanh lên ', 1, 11);

INSERT INTO products (productId, productName, catid, quantity, price, image,mota,productStatus,typeId) VALUES
(1, 'Sam Sung Galaxy A70','1' , 100, 7490000, 'a6.jpg' ,'  Điện thoại thông minh SamSung',1,1),
(2, 'Laptop S20','2', 100, 12490000, 'al.jpg','Laptop thông minh SamSung ',2,2),
(3, 'Dong ho Galaxy S20+','1', 3, 12900000, 'a12.jpg', 'Siêu phẩm SamSung xuất hiện',2,3),
(4, 'Sam Sung Galaxy S21s','2',  100, 11900000, 'a8.jpg', 'Điện thoại thông minh SamSung',1,1),
(5, 'SamSung Galaxy A50S','3', 100, 9870000, 'a7.jpg', 'Điện thoại thông minh SamSung',2,1),
(6, 'laptop Note10','1',  12, 12460000, 'lt1.jpg', 'Lap top thông minh Samsung',1,2),
(7, 'Lenovo L340','2' , 100, 18900000, 'as1.jpg', 'Siêu phẩm Laptop Lenovo',1,2),
(8, 'Lenovo S145','1',  100, 11200000, 'a4.jpg', 'Siêu phẩm Dong ho Lenovo',1,3),
(9, 'Tai nghe S340','2',  100, 16900000, 'tn.jpg', 'Siêu phẩm tai nghe Lenovo',1,4),
(10, 'Pin E490', '1', 100, 15400000, 'a17.jpg', 'Siêu phẩm pin Lenovo',1,4)
(11, 'Camera E490', '1', 500, 65400000, 'a13.jpg', 'Siêu phẩm camera Lenovo',1,4),
(12, 'Cameta C340','3', 100, 17990000, 'a2.jpg', 'Siêu phẩm camera Lenovo',1,4);

INSERT INTO orderschitiet (maHD, productId, soLuong, donGia,phone,address) VALUES
(4, 3, 1, 23900000,0363707561,'nam-hung-tien-hai');

INSERT INTO user (id, username, password) VALUES
(1, 'hieubt', '12345'),
(2, 'hieubtph', '123456');