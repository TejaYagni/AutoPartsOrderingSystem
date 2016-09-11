--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `charges`
--

CREATE TABLE `charges` (
  `index_num` int(11) NOT NULL,
  `taxes` double DEFAULT NULL,
  `shipping` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `charges`
--

INSERT INTO `charges` (`index_num`, `taxes`, `shipping`) VALUES
(1, 25, 13);

-- --------------------------------------------------------

--
-- Table structure for table `custinf`
--

CREATE TABLE `custinf` (
  `fullName` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(6) NOT NULL,
  `emailId` varchar(50) NOT NULL,
  `phoneNumber` int(11) DEFAULT NULL,
  `billingAddress` varchar(100) NOT NULL,
  `billingCity` varchar(20) NOT NULL,
  `billingState` varchar(10) NOT NULL,
  `billingZipCode` int(11) NOT NULL,
  `shippingAddress` varchar(100) NOT NULL,
  `shippingCity` varchar(20) NOT NULL,
  `shippingState` varchar(10) NOT NULL,
  `shippingZipCode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ship_address` varchar(100) DEFAULT NULL,
  `status_of_order` tinyint(4) DEFAULT NULL,
  `cust_id` varchar(50) DEFAULT NULL,
  `prod_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `orderId` int(11) DEFAULT NULL,
  `cust_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ship_address`, `status_of_order`, `cust_id`, `prod_id`, `quantity`, `price`, `orderId`, `cust_name`) VALUES
('Andheri Road, Mumbai', 1, '111', 2, 10, 120, 123, 'Dharma'),
('Andheri Road, Mumbai', 1, '111', 31, 10, 1200, 123, 'Dharma'),
('Andheri Road, Mumbai', 1, '111', 45, 100, 364.23, 123, 'Dharma'),
('Hyderabad', 1, '456', 12, 10, 12228, 789, 'Anana'),
('Hyderabad', 1, '456', 10, 10, 1234, 789, 'Anana'),
('Hyderabad', 1, '456', 26, 100, 18, 789, 'Anana'),
('abhi abhi 3232 abhi abhi', 1, 'abhi@manyu.com', 789, 0, 0, 790, 'abhminayu'),
('papapapappaap', 1, 'cruise@dv.com', 16, 12, 19.2, 791, 'tom'),
('papapapappaap', 1, 'cruise@dv.com', 19, 10, 296.1, 791, 'tom'),
('fanlkfnanan', 0, 'gmail', 5, 1, 368.5, 792, 'tingar'),
('fanlkfnanan', 0, 'gmail', 6, 1, 207.37, 792, 'tingar');

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

CREATE TABLE `parts` (
  `number` int(11) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  `price` float(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `partsquantity`
--

CREATE TABLE `partsquantity` (
  `number` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partsquantity`
--

INSERT INTO `partsquantity` (`number`, `quantity`) VALUES
(1, 50),
(2, 50),
(3, 50),
(4, 50),
(5, 500),
(6, 50),
(7, 50),
(8, 50),
(9, 50),
(10, 50),
(11, 50),
(12, 62),
(13, 50),
(14, 50),
(15, 50),
(16, 50),
(17, 50),
(18, 50),
(19, 50),
(20, 50),
(21, 50),
(22, 50),
(23, 50),
(24, 50),
(25, 50),
(26, 50),
(27, 50),
(28, 50),
(29, 50),
(30, 50),
(31, 50),
(32, 50),
(33, 50),
(34, 50),
(35, 50),
(36, 50),
(37, 50),
(38, 50),
(39, 50),
(40, 50),
(41, 50),
(42, 50),
(43, 50),
(44, 50),
(45, 50),
(46, 50),
(47, 50),
(48, 50),
(49, 50),
(50, 250),
(51, 50),
(52, 50),
(53, 50),
(54, 50),
(55, 50),
(56, 50),
(57, 50),
(58, 50),
(59, 50),
(60, 50),
(61, 50),
(62, 50),
(63, 50),
(64, 50),
(65, 50),
(66, 50),
(67, 50),
(68, 50),
(69, 50),
(70, 50),
(71, 50),
(72, 50),
(73, 50),
(74, 50),
(75, 50),
(76, 50),
(77, 50),
(78, 50),
(79, 50),
(80, 50),
(81, 50),
(82, 50),
(83, 50),
(84, 50),
(85, 50),
(86, 50),
(87, 50),
(88, 50),
(89, 50),
(90, 50),
(91, 50),
(92, 50),
(93, 50),
(94, 50),
(95, 50),
(96, 50),
(97, 50),
(98, 50),
(99, 50),
(100, 50),
(101, 50),
(102, 50),
(103, 50),
(104, 50),
(105, 50),
(106, 50),
(107, 50),
(108, 50),
(109, 50),
(110, 50),
(111, 50),
(112, 50),
(113, 50),
(114, 50),
(115, 50),
(116, 50),
(117, 50),
(118, 50),
(119, 50),
(120, 50),
(121, 50),
(122, 50),
(123, 50),
(124, 50),
(125, 50),
(126, 50),
(127, 50),
(128, 50),
(129, 50),
(130, 50),
(131, 50),
(132, 50),
(133, 50),
(134, 50),
(135, 50),
(136, 50),
(137, 50),
(138, 50),
(139, 50),
(140, 50),
(141, 50),
(142, 50),
(143, 50),
(144, 50),
(145, 50),
(146, 50),
(147, 50),
(148, 50),
(149, 50),
(150, 50);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `title` varchar(6) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `gen` varchar(30) NOT NULL,
  `id` varchar(50) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `add` varchar(300) NOT NULL,
  `city` varchar(30) NOT NULL,
  `coun` varchar(30) NOT NULL,
  `dob` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`title`, `fname`, `lname`, `gen`, `id`, `pass`, `phone`, `add`, `city`, `coun`, `dob`) VALUES
('Mr.', 'Hank', 'Moody', 'male', 'abc@gmail.com', 'hahahaha', '3127228228', '324 ythid gub', 'Dekalb', 'Illinois', '24-11-89'),
('Mr.', 'Abhi', 'king', 'male', 'abhir1802@gmail.com', 'kiiiiii', '3127228228', 'Athidhi devo bhava', 'dindin', 'kinkin', '12-34-56'),
('Mr.', 'Abhi', 'king', 'male', 'abhir180@gmail.com', 'aaaaaa', '3127228228', 'Athidhi devo bhava', 'dindin', 'kinkin', '12-34-56'),
('Mr.', 'Harvey', 'Moody', 'male', 'haaaaa@abc.com', 'ranjhannaa', '9874561230', 'nkuyny nyhbr', 'mkbmw', 'mveve', '11-11-11'),
('Mr.', 'Harvey', 'Spectar', 'male', 'harvey@spectar.com', 'harvey', '9885772420', 'hahaha hahaha', 'Hyderabad', 'India', '02-18-1994'),
('Mr.', 'Mike', 'Ross', 'male', 'mike@ross.com', 'micheal', '9985299864', '345 Andheri road', 'mumbai', 'India', '02-18-94');

-- --------------------------------------------------------

--
-- Table structure for table `temp_order`
--

CREATE TABLE `temp_order` (
  `productId` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `pricetotal` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `charges`
--
ALTER TABLE `charges`
  ADD PRIMARY KEY (`index_num`);

--
-- Indexes for table `custinf`
--
ALTER TABLE `custinf`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`number`);

--
-- Indexes for table `partsquantity`
--
ALTER TABLE `partsquantity`
  ADD PRIMARY KEY (`number`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `charges`
--
ALTER TABLE `charges`
  MODIFY `index_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `parts`
--
ALTER TABLE `parts`
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `partsquantity`
--
ALTER TABLE `partsquantity`
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
