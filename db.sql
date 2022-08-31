create database perpustakaan;

use perpustakaan;

create table buku(
    id int primary ket not null auto_increment,
    judul varchar(200) not null,
    harga int not null,
    penulis varchar(200) not null,
    penerbit varchar(200) not null,
    thn_terbit varchar(4) not null
);
