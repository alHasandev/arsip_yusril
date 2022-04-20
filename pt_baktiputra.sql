

CREATE TABLE `adendum` (
  `nomor` varchar(1000) NOT NULL,
  `nama` varchar(1000) NOT NULL,
  `restrukturisasi` varchar(1000) NOT NULL,
  `relaksasi` varchar(1000) NOT NULL,
  `perubahan` varchar(1000) NOT NULL,
  `lain` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `adm_kredit` (
  `nomor` varchar(1000) NOT NULL,
  `nama` varchar(1000) NOT NULL,
  `foto_akad` varchar(1000) NOT NULL,
  `spk` varchar(1000) NOT NULL,
  `notaris` varchar(1000) NOT NULL,
  `kuasa` varchar(1000) NOT NULL,
  `penjamin` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `ao_kredit` (
  `nomor` varchar(1000) NOT NULL,
  `nama` varchar(1000) NOT NULL,
  `slik` varchar(1000) NOT NULL,
  `survei` varchar(1000) NOT NULL,
  `usaha` varchar(1000) NOT NULL,
  `tanah` varchar(1000) NOT NULL,
  `nilai` varchar(1000) NOT NULL,
  `analisa` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO ao_kredit VALUES
("46546546546875896","yusril","CV ADITYA DWI PRAKASA.pdf","CV ADITYA DWI PRAKASA.pdf","CV ADITYA DWI PRAKASA.pdf","CV ADITYA DWI PRAKASA.pdf","CV ADITYA DWI PRAKASA.pdf","CV ADITYA DWI PRAKASA.pdf");




CREATE TABLE `cs_intern` (
  `nomor` varchar(1000) NOT NULL,
  `nama` varchar(1000) NOT NULL,
  `suami` varchar(1000) NOT NULL,
  `istri` varchar(1000) NOT NULL,
  `pemohon` varchar(1000) NOT NULL,
  `persetujuan` varchar(1000) NOT NULL,
  `kuasa` varchar(1000) NOT NULL,
  `sk` varchar(1000) NOT NULL,
  `slip` varchar(1000) NOT NULL,
  `kk` varchar(1000) NOT NULL,
  `nikah` varchar(1000) NOT NULL,
  `npwp` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `cs_kendaraan` (
  `nomor` varchar(1000) NOT NULL,
  `nama` varchar(1000) NOT NULL,
  `suami` varchar(1000) NOT NULL,
  `istri` varchar(1000) NOT NULL,
  `permohonan` varchar(1000) NOT NULL,
  `persetujuan` varchar(1000) NOT NULL,
  `kk` varchar(1000) NOT NULL,
  `nikah` varchar(1000) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `stnk` varchar(1000) NOT NULL,
  `bpkb` varchar(1000) NOT NULL,
  `kwitansi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `cs_konsumtif` (
  `nomor` varchar(15) NOT NULL,
  `nama` varchar(1000) NOT NULL,
  `suami` varchar(1000) NOT NULL,
  `istri` varchar(1000) NOT NULL,
  `permohonan` varchar(1000) NOT NULL,
  `persetujuan` varchar(1000) NOT NULL,
  `surat_kuasa` varchar(1000) NOT NULL,
  `sk` varchar(1000) NOT NULL,
  `slip` varchar(1000) NOT NULL,
  `kk` varchar(1000) NOT NULL,
  `nikah` varchar(1000) NOT NULL,
  `kerpeg` varchar(1000) NOT NULL,
  `npwp` varchar(1000) NOT NULL,
  `tespen` varchar(1000) NOT NULL,
  `tabungan` varchar(1000) NOT NULL,
  `jaminan` varchar(1000) NOT NULL,
  PRIMARY KEY (`nomor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO cs_konsumtif VALUES
("465465465468","yusril","CV ADITYA DWI PRAKASA.pdf","CV ADITYA DWI PRAKASA.pdf","CV ADITYA DWI PRAKASA.pdf","CV ADITYA DWI PRAKASA.pdf","CV ADITYA DWI PRAKASA.pdf","CV ADITYA DWI PRAKASA.pdf","CV ADITYA DWI PRAKASA.pdf","CV ADITYA DWI PRAKASA.pdf","CV ADITYA DWI PRAKASA.pdf","","CV ADITYA DWI PRAKASA.pdf","CV ADITYA DWI PRAKASA.pdf","CV ADITYA DWI PRAKASA.pdf","CV ADITYA DWI PRAKASA.pdf"),
("8484","yusril","","","","","","","","","","","","","","");




CREATE TABLE `cs_mk_skt` (
  `nomor` varchar(1000) NOT NULL,
  `nama` varchar(1000) NOT NULL,
  `suami` varchar(1000) NOT NULL,
  `istri` varchar(1000) NOT NULL,
  `permohonan` varchar(1000) NOT NULL,
  `persetujuan` varchar(1000) NOT NULL,
  `kk` varchar(1000) NOT NULL,
  `nikah` varchar(1000) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `jaminan` varchar(1000) NOT NULL,
  `jaminan_kelurahan` varchar(1000) NOT NULL,
  `pbb` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `cs_modal` (
  `nomor` varchar(1000) NOT NULL,
  `nama` varchar(1000) NOT NULL,
  `suami` varchar(1000) NOT NULL,
  `istri` varchar(1000) NOT NULL,
  `permohonan` varchar(1000) NOT NULL,
  `persetujuan` varchar(1000) NOT NULL,
  `kk` varchar(1000) NOT NULL,
  `nikah` varchar(1000) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `jaminan` varchar(1000) NOT NULL,
  `kwitansi` varchar(1000) NOT NULL,
  `pbb` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `cs_pdam` (
  `nomor` varchar(1000) NOT NULL,
  `nama` varchar(1000) NOT NULL,
  `suami` varchar(1000) NOT NULL,
  `istri` varchar(1000) NOT NULL,
  `permohonan` varchar(1000) NOT NULL,
  `persetujuan` varchar(1000) NOT NULL,
  `kk` varchar(1000) NOT NULL,
  `nikah` varchar(1000) NOT NULL,
  `spk` varchar(1000) NOT NULL,
  `jaminan` varchar(1000) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `pbb` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `cs_pertanian` (
  `nomor` varchar(1000) NOT NULL,
  `nama` varchar(1000) NOT NULL,
  `suami` varchar(1000) NOT NULL,
  `istri` varchar(1000) NOT NULL,
  `permohonan` varchar(1000) NOT NULL,
  `persetujuan` varchar(1000) NOT NULL,
  `kk` varchar(1000) NOT NULL,
  `nikah` varchar(1000) NOT NULL,
  `usaha` varchar(1000) NOT NULL,
  `pertanian` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `cs_spk` (
  `nomor` varchar(1000) NOT NULL,
  `nama` varchar(1000) NOT NULL,
  `suami` varchar(1000) NOT NULL,
  `istri` varchar(1000) NOT NULL,
  `permohonan` varchar(1000) NOT NULL,
  `persetujuan` varchar(1000) NOT NULL,
  `kk` varchar(1000) NOT NULL,
  `nikah` varchar(1000) NOT NULL,
  `spk` varchar(1000) NOT NULL,
  `jaminan` varchar(1000) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `pbb` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `cs_talangan` (
  `nomor` varchar(1000) NOT NULL,
  `nama` varchar(1000) NOT NULL,
  `sk` varchar(1000) NOT NULL,
  `ktp` varchar(1000) NOT NULL,
  `permohonan` varchar(1000) NOT NULL,
  `spd` varchar(1000) NOT NULL,
  `kuitansi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `gaji` (
  `nip` char(11) NOT NULL,
  `bulan` varchar(20) NOT NULL,
  `tahun` varchar(20) NOT NULL,
  `masuk` int(11) NOT NULL,
  `sakit` int(11) NOT NULL,
  `izin` int(11) NOT NULL,
  `alpha` int(11) NOT NULL,
  `lembur` int(11) NOT NULL,
  `potongan` int(11) NOT NULL,
  KEY `nip` (`nip`),
  CONSTRAINT `gaji_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `pegawai` (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO gaji VALUES
("0619681368","01","2021","27","1","0","0","0","0");




CREATE TABLE `golongan` (
  `kode_golongan` char(11) NOT NULL,
  `nama_golongan` varchar(20) NOT NULL,
  `t_istrisuami` int(11) NOT NULL,
  `t_anak` int(11) NOT NULL,
  `uang_makan` int(11) NOT NULL,
  `uang_lembur` int(11) NOT NULL,
  `askes` int(11) NOT NULL,
  PRIMARY KEY (`kode_golongan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO golongan VALUES
("G001","C/01","150000","100000","50000","30000","120000"),
("G002","C/02","50000","200000","300000","100000","200000");




CREATE TABLE `jabatan` (
  `kode_jabatan` char(11) NOT NULL,
  `nama_jabatan` varchar(20) NOT NULL,
  `gaji_pokok` int(11) NOT NULL,
  `tunjangan` int(11) NOT NULL,
  PRIMARY KEY (`kode_jabatan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO jabatan VALUES
("GR01","Back End Programmer","2500000","1500000"),
("GR02","Programmer","300000","100000");




CREATE TABLE `klam_asuransi` (
  `nomor` varchar(1000) NOT NULL,
  `nama` varchar(1000) NOT NULL,
  `asuransi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `pegawai` (
  `nip` char(11) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `ttl` varchar(150) NOT NULL,
  `jenis` varchar(150) NOT NULL,
  `agama` varchar(150) NOT NULL,
  `negara` varchar(150) NOT NULL,
  `status` varchar(150) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `formal` varchar(1000) NOT NULL,
  `non_formal` varchar(1000) NOT NULL,
  `pengalaman` varchar(1000) NOT NULL,
  `jumlah_anak` int(11) NOT NULL,
  `kode_jabatan` char(11) NOT NULL,
  `kode_golongan` char(11) NOT NULL,
  `foto` varchar(1000) NOT NULL,
  PRIMARY KEY (`nip`),
  KEY `kode_jabatan` (`kode_jabatan`),
  KEY `kode_golongan` (`kode_golongan`),
  CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`kode_golongan`) REFERENCES `golongan` (`kode_golongan`),
  CONSTRAINT `pegawai_ibfk_2` FOREIGN KEY (`kode_jabatan`) REFERENCES `jabatan` (`kode_jabatan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO pegawai VALUES
("0619681368","Toni ","sukamara, 14 mei 1998","laki-laki","islam","indonesia        ","Menikah","sukamara","081250173","muhammad.yusril.mahndr@gmail.com        ","hgwhug","hufeuowhfou","fewoihoiwh","1","GR01","G001","LN 2.jpg"),
("123123","123","123","123123","123123","123123  ","Belum Menikah","124","234","sdfsdfs  ","fsdfsd","sdfsdf","sdfsdf","0","GR01","G001","19639286.jpg");




CREATE TABLE `pelunasan_kredit` (
  `nomor` varchar(1000) NOT NULL,
  `nama` varchar(1000) NOT NULL,
  `serah_terima` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `user` (
  `kode_user` char(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` varchar(15) NOT NULL,
  `foto` varchar(255) NOT NULL,
  PRIMARY KEY (`kode_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO user VALUES
("U001","admin","admin","Admin","user-lg.jpg"),
("U002","rizki","asd","Admin","LN 2.jpg");


