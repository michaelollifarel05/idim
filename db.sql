CREATE DATABASE `k3`;
CREATE TABLE `k3`.`hakakses`  (`idAkses` INT(8) NOT NULL AUTO_INCREMENT , `NamaAkses` VARCHAR(20) NOT NULL , `Keterangan` VARCHAR(20) NOT NULL , PRIMARY KEY (`idAkses`)) ENGINE = InnoDB;
CREATE TABLE `k3`.`pengguna`  (`idPengguna` INT(8) NOT NULL AUTO_INCREMENT , `namaPengguna` VARCHAR(20) NOT NULL , `Password` VARCHAR(20) NOT NULL , `NamaDepan` VARCHAR(20) NOT NULL , `NamaBelakang` VARCHAR(20) NOT NULL , `NoHP` VARCHAR(20) NOT NULL , `Alamat` VARCHAR(20) NOT NULL , `idAkses` INT(8) NOT NULL , PRIMARY KEY (`idPengguna`), FOREIGN KEY (`idAkses`) REFERENCES `hakakses`(`idAkses`) ) ENGINE = InnoDB;
CREATE TABLE `k3`.`barang`    (`idBarang` INT(8) NOT NULL AUTO_INCREMENT, `NamaBarang` VARCHAR(20) NOT NULL, `Keterangan` VARCHAR(20) NOT NULL, `Satuan` INT(8) NOT NULL,`idPengguna` INT(8) NOT NULL, PRIMARY KEY (`idBarang`), FOREIGN KEY (`idPengguna`) REFERENCES `pengguna`(`idPengguna`)) ENGINE = InnoDB;
CREATE TABLE `k3`.`pembelian` (`idPembelian` INT(8) NOT NULL AUTO_INCREMENT, `JumlahPembelian` INT (8) NOT NULL, `HargaBeli` VARCHAR(20) NOT NULL, `idBarang` INT(8) NOT NULL, PRIMARY KEY (`idPembelian`), FOREIGN KEY (`idBarang`) REFERENCES `barang`(`idBarang`)) ENGINE = InnoDB;
CREATE TABLE `k3`.`Penjualan` (`idPenjualan` INT(8) NOT NULL AUTO_INCREMENT, `JumlahPenjualan` INT (8) NOT NULL, `HargaJual` VARCHAR(20) NOT NULL, `idBarang` INT(8) NOT NULL, PRIMARY KEY (`idPenjualan`), FOREIGN KEY (`idBarang`) REFERENCES `barang`(`idBarang`)) ENGINE = InnoDB;

CREATE TABLE k3.Supplier ( `IdSupplier` INT(8) NOT NULL AUTO_INCREMENT, `NamaSupplier` VARCHAR(50) NOT NULL, `Alamat` VARCHAR(100) NOT NULL, `NoHp` VARCHAR(20) NOT NULL, `idPembelian` INT NOT NULL, FOREIGN KEY (`idPembelian`) REFERENCES `pembelian`(`idPembelian`), PRIMARY KEY (`IdSupplier`) ) ENGINE = InnoDB;
CREATE TABLE k3.Pelanggan ( `IdPelanggan` INT(8) NOT NULL AUTO_INCREMENT,  NamaPelanggan VARCHAR(50) NOT NULL, NoHp VARCHAR(20) NOT NULL, TanggalGabung DATE NOT NULL, idPenjualan INT NOT NULL, FOREIGN KEY (idPenjualan) REFERENCES penjualan(idPenjualan), PRIMARY KEY (`IdPelanggan`)) ENGINE = InnoDB;




INSERT INTO `k3`.`hakakses` (NamaAkses, Keterangan) VALUES ('Admin', 'Pengecek barang'), ('Kurir', 'Pengambil barang'), ('Supervisor', 'Kepala gudang');
INSERT INTO `k3`.`pengguna` (`idPengguna`, `namaPengguna`, `Password`, `NamaDepan`, `NamaBelakang`, `NoHP`, `Alamat`, `idAkses`) VALUES (1, 'erennnnn', 'Widodo', 'Eren', 'Yaeger', '98879098', 'Wall Maria', 3), (2, 'mikasaa', 'Amiiin', 'Mikasa', 'Ackerman', '9889876', 'Wall Sina', 2), (3, 'Deidaraaaaa', 'Panjaitan', 'Deidara', 'Surbati', '6567897', 'Wall Rose', 2), (4, 'SuzumenoTojimari', 'Wati', 'Suzume', 'Iwato', '9865456', 'Tokyo', 1), (5, 'IamZlatan', 'Maharani', 'Zlatan', 'Ibrahimovic', '9456783', 'Stadion teladan', 3), (6, 'Cristiano', 'Siuuuuuuuuu', 'Cristiano', 'Siuuuuu', '9654567', 'Jalan Keselamatan', 3), (7, 'ItachiNiBoss', 'Uchiha', 'Itachi', 'Widodo', '9848567', 'Jalan Kebenaran', 1), (8, 'Hokageke7', 'SayaHokage123', 'Naruto', 'Uzumaki', '23456789', 'Dibawah patung muka', 2), (9, 'PasukanKebebasan', 'SurveiCorps', 'Levy', 'Ackerman', '65435', 'Jalan Diluar gerbang', 1), (10, 'PenjagaGerbang', 'GarrisonCorps', 'Dot', 'Pixis', '865424', 'Jalan Didalam gerbang', 1);
INSERT INTO `k3`.`barang` (`NamaBarang`, `Keterangan`, `Satuan`, `idPengguna`) VALUES ('Martil', '1 kg', 12, 1), ('Paku', '1 gr', 1000, 1), ('Bor', '2 kg', 33, 2), ('Kayu', '8 Meter', 43, 3), ('Papan', '8 Meter', 12, 7), ('Meja', '3 Kg', 242, 5), ('Kursi', '2 Kg', 566, 3), ('Xenia', '120 Kg', 9000, 6), ('Boeing', '40 Ton', 99999, 9), ('Kunai', '200 Gr', 9999999, 10);

-- tabel supplier
INSERT INTO k3.Supplier (`NamaSupplier`, `Alamat`, `NoHp`, `idPembelian`)
VALUES
('Supplier A', 'Jl. Raya No. 1', '081234567891', 1),
('Supplier B', 'Jl. Merdeka No. 2', '082345678912', 2),
('Supplier C', 'Jl. Diponegoro No. 3', '083456789123', 3),
('Supplier D', 'Jl. Sudirman No. 4', '084567891234', 4),
('Supplier E', 'Jl. Thamrin No. 5', '085678912345', 5),
('Supplier F', 'Jl. Gatot Subroto No. 6', '086789123456', 6),
('Supplier G', 'Jl. Ahmad Yani No. 7', '087891234567', 7),
('Supplier H', 'Jl. Gajah Mada No. 8', '088912345678', 8),
('Supplier I', 'Jl. Hayam Wuruk No. 9', '089123456789', 9),
('Supplier J', 'Jl. Asia Afrika No. 10', '090234567891', 10),
('Supplier K', 'Jl. Pahlawan No. 11', '091345678912', 11),
('Supplier L', 'Jl. Veteran No. 12', '092456789123', 12),
('Supplier M', 'Jl. Tanjung No. 13', '093567891234', 13),
('Supplier N', 'Jl. Gunung No. 14', '094678912345', 14),
('Supplier O', 'Jl. Raja No. 15', '095789123456', 15),
('Supplier P', 'Jl. Sultan No. 16', '096891234567', 16),
('Supplier Q', 'Jl. Agung No. 17', '097912345678', 17),
('Supplier R', 'Jl. Terang No. 18', '098123456789', 18),
('Supplier S', 'Jl. Cerah No. 19', '099234567891', 19),
('Supplier T', 'Jl. Indah No. 20', '010345678912', 20);

-- tabel pelanggan
INSERT INTO k3.Pelanggan (`NamaPelanggan`, `NoHp`, `TanggalGabung`, `idPenjualan`)
VALUES
('Pelanggan A', '081234567891', '2023-04-30', 1),
('Pelanggan B', '082345678912', '2023-04-29', 2),
('Pelanggan C', '083456789123', '2023-04-28', 3),
('Pelanggan D', '084567891234', '2023-04-27', 4),
('Pelanggan E', '085678912345', '2023-04-26', 5),
('Pelanggan F', '086789123456', '2023-04-25', 6),
('Pelanggan G', '087891234567', '2023-04-24', 7),
('Pelanggan H', '088912345678', '2023-04-23', 8),
('Pelanggan I', '089123456789', '2023-04-22', 9),
('Pelanggan J', '090234567891', '2023-04-21', 10),
('Pelanggan K', '091345678912', '2023-04-20', 11),
('Pelanggan L', '092456789123', '2023-04-19', 12),
('Pelanggan M', '093567891234', '2023-04-18', 13),
('Pelanggan N', '094678912345', '2023-04-17', 14),
('Pelanggan O', '095789123456', '2023-04-16', 15),
('Pelanggan P', '096891234567', '2023-04-15', 16),
('Pelanggan Q', '097912345678', '2023-04-14', 17),
('Pelanggan R', '098123456789', '2023-04-13', 18),
('Pelanggan S', '099234567891', '2023-04-12', 19),
('Pelanggan T', '010345678912', '2023-04-11', 20);


INSERT INTO 
-- tabel pembelian
INSERT INTO k3.pembelian (JumlahPembelian, HargaBeli, idBarang) VALUES (10, 5000, 1), (5, 7000, 2), (24, 5000, 3), (7, 4000, 4), (5, 1000, 5), (1, 3000, 6), (6, 22000, 7), (8, 55000, 8), (4, 66000, 9), (7, 6500, 10), (9, 34000, 10), (55, 1000, 9), (8, 12000, 8), (62, 124000, 7), (58, 87000, 6), (3, 47999, 5), (5, 98999, 4), (8, 10000, 3), (4, 100000, 2), (6, 12000, 1);
-- tabel penjualan
INSERT INTO `k3`.`Penjualan` (`JumlahPenjualan`, `HargaJual`, `idBarang`) VALUES (5, 6000, 1), (4, 8000, 2), (20, 6000, 3), (5, 5000, 4), (4, 1100, 5), (1, 4000, 6), (5, 25000, 7), (8, 60000, 8), (43, 70000, 9), (4, 7000, 10), (6, 35000, 10), (50, 2000, 9), (7, 13000, 8), (60, 130000, 7), (56, 90000, 6), (2, 50000, 5), (3, 100000, 4), (5, 11000, 3), (2, 110000, 2), (6, 13000, 1);


-- Menghitung total nilai pembelian dan penjualan
SELECT SUM(JumlahPenjualan * HargaJual) - SUM(JumlahPembelian * HargaBeli) AS Keuntungan FROM gudang.Pembelian JOIN gudang.Penjualan ON Pembelian.idBarang = Penjualan.idBarang;

-- Menghitung stok
SELECT barang.NamaBarang, SUM(Pembelian.JumlahPembelian) - SUM(Penjualan.JumlahPenjualan) AS Stok FROM gudang.barang JOIN gudang.Pembelian ON barang.idBarang = Pembelian.idBarang JOIN gudang.Penjualan ON barang.idBarang = Penjualan.idBarang GROUP BY barang.idBarang;






INSERT INTO `k3`.`tb_penjualan` (`JumlahPenjualan`, `HargaJual`, `idPengguna`) VALUES ('3', '600000', '21'), ( '1', '200000', '21'), ( '1', '200000', '21'), ('54', '1', '200000', '21'), ('55', '1', '200000', '21'), ('56', '2', '400000', '21'), ('57', '1', '200000', '21'), ('58', '1', '200000', '21'), ('59', '1', '200000', '21'), ('510', '3', '600000', '21');