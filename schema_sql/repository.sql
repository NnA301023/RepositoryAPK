-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Des 2022 pada 04.28
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `repository`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `post`
--

CREATE TABLE `post` (
  `id` int(9) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `kontributor` varchar(255) NOT NULL,
  `jenis` int(2) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `subjek` varchar(255) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `staf_input` varchar(255) NOT NULL,
  `tgl_input` date NOT NULL,
  `path` varchar(255) NOT NULL,
  `abstrak` text NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `post`
--

INSERT INTO `post` (`id`, `judul`, `penulis`, `kontributor`, `jenis`, `penerbit`, `subjek`, `keyword`, `staf_input`, `tgl_input`, `path`, `abstrak`, `status`) VALUES
(4, 'Sulistio', 'asassss', '3', 3, '', 'sasa', 'lij', 'lhu', '2022-02-23', '0109-04-005.pdf', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 0),
(7, 'Implementasi YOLO (You Only Look Once)  Algorithm untuk Pendeteksian Jarak Kendaraan Sebagai Speed limiter Sepeda  Listrik Sulistio', 'Resi Sujiwo Bijokangko, S.T', '1', 2, '', 'Computer Vision', 'resiko kecelakaan, speed limiter, deteksi objek, prediksi jarak', 'System Admin', '2022-10-23', 'Skripsi Bijo.pdf', 'Sebagai upaya dalam mengurangi resiko kecelakaan yang dapat dialami pengendara maka keselamatan berkendara merupakan hal esensial yang memerlukan perhatian oleh setiap pengendara. Pada penelitian ini penulis melakukan perancangan dan implementasi sistem speed limiter sebagai fungsi pembatas kecepatan sepeda listrik SULISTIO dengan prediksi jarak terhadap objek mobil, sepeda motor, serta pejalan kaki di area depan sepeda untuk mengurangi resiko kecelakaan oleh pengemudi. Citra hasil tangkapan modul kamera kemudian diolah pada Raspberry Pi dengan program speed limiter untuk mendeteksi objek di depan sepeda listrik dan memprediksi jaraknya terhadap sepeda. Ketika objek yang dideteksi memiliki jarak kurang dari 3 meter maka sistem akan mengaktifkan Relay yang terhubung pada pin GPIO 4 Raspberry Pi untuk memutus jakur tegangan pada throtle. Berdasarkan hasil pengujian sistem, sistem ini dapat mendeteksi objek dengan kelas manusia, motor, dan mobil dengan baik dengan tingkat F1-Score sebesar 0,914926, IoU sebesar 66,14%, dan nilai mAP pada treshold 0,5 sebesar 97,58%. Hasil model prediksi jarak pada sistem speed limitersangatlah baik dengan nilai akurasi 97,31% pada kelas Manusia, 94,92% pada kelas Motor, serta 97,97% pada kelas Mobil dengan akurasi keseluruhan kelas sebesar 97%.', 1),
(8, 'ewwo', 'ewwo', '2', 2, 'ewwo', 'ewwo', 'ewwo', 'ewwo', '2022-10-23', 'Skripsi Bijo print.pdf', '      ewwo                  ', 2),
(10, 'Implementasi YOLO (You Only Look Once)  Algorithm untuk Pendeteksian Jarak Kendaraan Sebagai Speed limiter Sepeda  Listrik Sulistio', 'Resi Sujiwo Bijokangko, S.T, Muhamad Nurul Fikri, S.T, dan UIjang Cakra Buana, S.T', '', 1, 'jghv', 'Dokeng', 'air to ground', 'Kaprodi', '2022-11-17', '2197-6290-1-PB.pdf', '                        sssaasasda', 1),
(11, 'Sepeda listrik dengan Smart Transportation System dan Speed Limiter menggunakan Mikrokontroler', 'Resi Sujiwo Bijokangko, S.T, Muhamad Nurul Fikri, S.T, dan UIjang Cakra Buana, S.T', '', 2, 'test', 'Dokeng', 'Smart Transportation System, Speed Limiter, Mikrokontroler', 'Mahasiswa', '2022-11-28', 'Rekomendasi_Kosong.pdf', '                        asasas', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `proposal`
--

CREATE TABLE `proposal` (
  `id` int(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` text NOT NULL,
  `pembimbing` text NOT NULL,
  `abstrak` text NOT NULL,
  `keyword` text NOT NULL,
  `status` int(3) NOT NULL,
  `tgl_input` date NOT NULL,
  `id_input` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `proposal`
--

INSERT INTO `proposal` (`id`, `judul`, `penulis`, `pembimbing`, `abstrak`, `keyword`, `status`, `tgl_input`, `id_input`) VALUES
(1, 'Rancang Bangung Sepeda listrik dengan Smart Transportation System dan Speed Limiter menggunakan Mikrokontroler', 'resi', '2', 'lorem ipsum', 'www', 0, '2022-11-15', 3),
(2, 'Artikel hipo satu', 'Resi', '4', 'The hippocampus is a major component of the brains of humans and other vertebrates. It belongs to the limbic system and plays important roles in the consolidation of information from short-term memory to long-term memory and spatial navigation. Humans and other mammals have two hippocampi, one in each side of the brain. The hippocampus is a part of the cerebral cortex; and in primates it is located in the medial temporal lobe, underneath the cortical surface. It contains two main interlocking parts: Ammon\'s horn and the dentate gyrus.', 'hipo, tatamus', 0, '2022-11-16', 3),
(3, 'Hippocamus', 'Mukhlis', '2', 'An important part of the brains of humans and other vertebrates is the hippocampus. It\'s part of the limbic system and moves information from short-term to long-term memory. It also helps us move around. Humans and other mammals have two hippocampi, one on each side. The hippocampus is a part of the cerebral cortex; and in primates it is found in the medial temporal lobe, beneathe the cortical surface. It has two main interlocking parts: Ammon\'s horn and the dentate gyrus', 'human, memory', 2, '2022-11-16', 2),
(7, 'memet gacor', 'memet', '2', 'asasasasazzzasad', 'test', 2, '2022-11-27', 0),
(9, 'Sepeda listrik dengan Smart Transportation System dan Speed Limiter menggunakan Mikrokontroler', 'memet', '1', 'mememememememet', 'memet', 0, '2022-11-28', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(9) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` int(2) NOT NULL,
  `address` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `role` int(2) NOT NULL,
  `NID` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `gender`, `address`, `path`, `role`, `NID`) VALUES
(1, 'System Admin', 'admin@unsika.ac.id', '12345', 1, 'Telukjambe, Karawang Timur, Karawang', 'profil1.jpg', 1, '0'),
(2, 'Dosen', 'dosen@unsika.ac.id', '1234', 1, 'Karawang', '', 2, '0'),
(3, 'Mahasiswa', 'mahasiswa@unsika.ac.id', '1234', 0, 'Semarang', '', 3, '1810631160119'),
(4, 'Arnisa Stefanie, ST, MT.', 'arnisa@unsika.ac.id', '1234', 2, 'Karawang', '', 2, '0029128501'),
(5, 'Dian Budhi Santoso, S.T., M.Eng.', 'dian@unsika.ac.id', '1234', 1, 'Karawang', '', 2, '0020069102'),
(6, 'Dr. Ir. Yuliarman Saragih, MT.', 'yuliarman@unsika.ac.id', '1234', 1, 'Bekasi', '', 2, '0301077101'),
(7, 'Ibrahim, ST, MT.', 'ibrahim@unsika.ac.id', '1234', 2, 'Karawang', '', 2, '0306127206'),
(8, 'Insani Abdi Bangsa, ST., M.Sc', 'insani@unsika.ac.id', '1234', 2, 'Karawang', '', 2, '0021079301'),
(9, 'Ir. Lela Nurpulaela, MT.', 'lela@unsika.ac.id', '1234', 2, 'Karawang', '', 2, '0425086501'),
(10, 'Rahmat Hidayat, A.Md.T, S.Pd., M.Pd', 'rahmat@unsika.ac.id', '1234', 1, 'Karawang', '', 2, '0019038902'),
(11, 'Reni Rahmadewi, ST, MT.', 'reni@unsika.ac.id', '1234', 2, 'Karawang', '', 2, '0001068301'),
(12, 'Ulinnuha Latifa, S.T., M.T.', 'ulinnuha@unsika.ac.id', '1234', 2, 'Karawang', '', 2, '0011099102');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `proposal`
--
ALTER TABLE `proposal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `post`
--
ALTER TABLE `post`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `proposal`
--
ALTER TABLE `proposal`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;