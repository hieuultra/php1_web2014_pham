create database quanLyDuAn;

create table phongban(
maphg varchar(20) not null,
tenphg varchar(30) not null,
primary key(maphg)
);
create table nhanvien(
manv varchar(20) not null,
tennv varchar(20) not null,
ngaysinh date,
phai varchar(10),
luong float,
maphg varchar(20) not null,
primary key(manv,maphg)
);
alter table nhanvien
add constraint fk_nv
foreign key(maphg)
references phongban(maphg);

create table dean(
maduan varchar(20) not null,
tenduan varchar(20),
maphg varchar(20) not null,
primary key(maduan,maphg)
);
alter table dean
add constraint fk_da
foreign key(maphg)
references phongban(maphg);

create table phancong(
manv varchar(20) not null,
maduan varchar(20) not null,
thoigian varchar(20),
primary key(manv,maduan)
);
alter table phancong
add constraint fk_pc
foreign key(manv)
references nhanvien(manv);

alter table phancong
add constraint kfk_pcc
foreign key(maduan)
references dean(maduan);

insert into phongban values('1','vanhoa');
insert into phongban values('2','toan');
insert into phongban values('3','dialy');
insert into phongban values('4','lichsu');
insert into phongban values('5','anh');

insert into nhanvien values('ph1','nam','2004-01-01','nam','100','1');
insert into nhanvien values('ph2','an','2004-02-01','nu','200','2');
insert into nhanvien values('ph3','hoai','2004-03-01','nam','300','3');
insert into nhanvien values('ph4','lan','2004-04-01','nu','400','1');
insert into nhanvien values('ph5','hieu','2004-05-01','nam','500','2');
insert into nhanvien values('ph6','anh','2004-06-01','nam','600','1');

insert into dean values('p1','cc','1');
insert into dean values('p2','cb','1');
insert into dean values('p3','ct','2');
insert into dean values('p4','cd','3');
insert into dean values('p5','ca','1');

insert into phancong values('ph1','p2','10');
insert into phancong values('ph2','p1','100');
insert into phancong values('ph1','p3','120');
insert into phancong values('ph3','p3','1');
insert into phancong values('ph2','p4','120');

update nhanvien set tennv="nguyen van quy" where manv='ph5';

delete from phancong where manv='ph1' and maduan='p3';

select * from phongban pb inner join nhanvien nv on pb.maphg=nv.maphg ;
