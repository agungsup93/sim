


--Database 		: 'sim'

CREATE TABLE `reset_password` (
  `id` int(8) NOT NULL,
  `email` text NOT NULL,
  `code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-----------------------------------------------------------------------------------------------------------------

CREATE TABLE `stock` (
  `id` int(8) NOT NULL,
  `part_no` text NOT NULL,
  `material` text NOT NULL,
  `qty` int(8) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `harga` int(8) NOT NULL,
  `lokasi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `stock` (`id`, `part_no`, `material`, `qty`, `satuan`, `harga`, `lokasi`) VALUES
(14, '4230-T110-KOCE-10A', 'MCB ETA 1P 16A', 96, 'Pcs', 10619575, 'Rack A'),
(15, '4230-T130-KOCE-63A', 'MCB ETA 3P 63A', 28, 'Pcs', 49645575, 'Rack A'),
(16, 'APC-NBRK0450', 'Netbots Monitor 450/451', 8, 'Pcs', 1599945000, 'Lt. 2'),
(17, 'ARRS-3P-C1-PH', 'ARRESTER PHC 3XFLT 35 CTRL 0,9/i+FLT', 1, 'Pcs', 286787251, 'Rack B'),
(18, 'ARRS-3P-C2-PH', 'VAL-MS 230/3+1-FM', 4, 'Pcs', 170759337, 'Rack B');
-----------------------------------------------------------------------------------------------------------------

CREATE TABLE `superadmin` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `pass` text NOT NULL,
  `level` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `superadmin` (`id`, `nama`, `email`, `password`, `pass`, `level`) VALUES
(1, 'Admin IT', 'agung.dc@globalnine-indonesia.com', 'e59cd3ce33a68f536c19fedb82a7936f', 'agungdc', '61646D696E');
-----------------------------------------------------------------------------------------------------------------

CREATE TABLE `user` (
	`id` int(11) NOT NULL,
	`nik` varchar(10) NOT NULL,
	`nm_dpn` varchar(30) NOT NULL,
	`nm_blk` varchar(30) NOT NULL,
	`password` text NOT NULL,
	`pass` text NOT NULL,
	`jbtn` varchar(20) NOT NULL,
	`email` text NOT NULL,
	`tlp` varchar(12) NOT NULL,
	`level` varchar(2) NOT NULL	
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--Keterangan 'id' semua menggunakan autoincrement
