CREATE DATABASE perpustakaan_db;
USE perpustakaan_db;
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(255)
);

INSERT INTO users (username, password) VALUES ('admin', 'admin');

CREATE TABLE buku (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(100),
    pengarang VARCHAR(100),
    tahun INT,
    penerbit VARCHAR(100),
    kategori VARCHAR(50)
);

INSERT INTO buku (judul, pengarang, tahun, penerbit, kategori) VALUES
('Belajar PHP', 'Dian', 2022, 'Informatika', 'Teknologi'),
('Novel Bumi', 'Tere Liye', 2019, 'Gramedia', 'Fiksi'),
('Pemrograman Python', 'Andi', 2021, 'Erlangga', 'Teknologi'),
('Sejarah Indonesia', 'Siti', 2018, 'Pustaka', 'Sejarah'),
('Fisika Dasar', 'Joko', 2020, 'Media Ilmu', 'Sains'),
('Matematika Diskrit', 'Rini', 2019, 'Grafindo', 'Pendidikan'),
('Kisah Inspiratif', 'Budi', 2023, 'Pena', 'Biografi'),
('Ekonomi Mikro', 'Dewi', 2021, 'Salemba', 'Ekonomi'),
('Koding untuk Pemula', 'Wawan', 2020, 'Informatika', 'Teknologi'),
('Cerita Rakyat Jawa', 'Sari', 2017, 'Gramedia', 'Fiksi'),
('Bahasa Inggris Praktis', 'Tomi', 2022, 'Lentera', 'Bahasa'),
('Manajemen Bisnis', 'Rizal', 2018, 'Erlangga', 'Bisnis'),
('Ilmu Komputer', 'Fajar', 2019, 'Salemba', 'Teknologi'),
('Novel Cinta', 'Maya', 2020, 'Karya', 'Fiksi'),
('Kimia Organik', 'Agus', 2021, 'Media Ilmu', 'Sains'),
('Fotografi Digital', 'Lina', 2019, 'Pustaka', 'Teknologi'),
('Psikologi Remaja', 'Dina', 2020, 'Grafindo', 'Psikologi'),
('Astronomi Dasar', 'Hadi', 2018, 'Salemba', 'Sains'),
('Seni Lukis Modern', 'Nina', 2023, 'Pena', 'Seni'),
('Agama dan Kehidupan', 'Rama', 2017, 'Lentera', 'Agama');