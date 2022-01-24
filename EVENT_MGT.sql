-- phpMyAdmin SQL Dump
-- version 5.0.4deb2~bpo10+1+bionic1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 24, 2022 at 06:03 AM
-- Server version: 5.7.36-0ubuntu0.18.04.1
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `EVENT_MGT`
--

-- --------------------------------------------------------

--
-- Table structure for table `BOOK_EVENT`
--

CREATE TABLE `BOOK_EVENT` (
  `ID` int(255) NOT NULL,
  `UNAME` varchar(20) NOT NULL,
  `UMONO` varchar(18) NOT NULL,
  `UEMAIL` varchar(25) NOT NULL,
  `TOT_MEM` varchar(20) NOT NULL,
  `ENAME` varchar(30) NOT NULL,
  `EDATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `BOOK_EVENT`
--

INSERT INTO `BOOK_EVENT` (`ID`, `UNAME`, `UMONO`, `UEMAIL`, `TOT_MEM`, `ENAME`, `EDATE`) VALUES
(1, 'Raj Patel', '9987675465', 'rajpatel111@gmail.com', '50', 'Birthday Party', '2022-01-18');

-- --------------------------------------------------------

--
-- Table structure for table `COMPONY_PROFILE`
--

CREATE TABLE `COMPONY_PROFILE` (
  `ID` int(255) NOT NULL,
  `COMP_NAME` varchar(40) NOT NULL,
  `COMP_ADD` varchar(40) NOT NULL,
  `COMP_MNO` varchar(40) NOT NULL,
  `COMP_EMAIL` varchar(40) NOT NULL,
  `COMP_IMAGE` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `COMPONY_PROFILE`
--

INSERT INTO `COMPONY_PROFILE` (`ID`, `COMP_NAME`, `COMP_ADD`, `COMP_MNO`, `COMP_EMAIL`, `COMP_IMAGE`) VALUES
(2, 'Demo Compony', 'demo123@gmail.com', 'gota cross road ahmedabad', '9987675478', '/uploads/componyimage/comp2.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `EVENT_CREATE`
--

CREATE TABLE `EVENT_CREATE` (
  `ID` int(255) NOT NULL,
  `CNAME` varchar(20) NOT NULL,
  `MONO` varchar(20) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `CADD` varchar(40) NOT NULL,
  `ENAME` varchar(40) NOT NULL,
  `ELOC` varchar(40) NOT NULL,
  `IMAGE` varchar(30) NOT NULL,
  `EDATE` date NOT NULL,
  `ETIME` time(6) NOT NULL,
  `EVENUE` varchar(30) NOT NULL,
  `APPROVE` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `EVENT_CREATE`
--

INSERT INTO `EVENT_CREATE` (`ID`, `CNAME`, `MONO`, `EMAIL`, `CADD`, `ENAME`, `ELOC`, `IMAGE`, `EDATE`, `ETIME`, `EVENUE`, `APPROVE`) VALUES
(1, 'ABC', '9987678549', 'ABC123@gmail.com', 'vadtal mandir vidhyanagar  anand ', '31st Celebration', 'Shivam Party Ploat', '/uploads/loc1.jpg', '2021-12-31', '20:00:00.000000', '31st Celebration', 'Approaved'),
(2, 'DEF', '7898654534', 'def@gmail.com', 'jamalpur ahmedabad', 'Birthday Party', 'Shivam Party Ploat', '/uploads/loc2.jpg', '2022-01-07', '19:00:00.000000', 'Birthday Party', 'Approaved'),
(3, 'smith john', '9887675434', 'smith.john@gmail.com', 'anand', 'Marriage', 'Shivam Party Ploat', '/uploads/loc3.jpg', '2022-01-08', '11:00:00.000000', 'Marriage', 'Approaved');

-- --------------------------------------------------------

--
-- Table structure for table `GUEST_MST`
--

CREATE TABLE `GUEST_MST` (
  `ID` int(255) NOT NULL,
  `GNAME` varchar(20) NOT NULL,
  `GPOST` varchar(30) NOT NULL,
  `GMONO` varchar(18) NOT NULL,
  `GEMAIL` varchar(30) NOT NULL,
  `GADD` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `GUEST_MST`
--

INSERT INTO `GUEST_MST` (`ID`, `GNAME`, `GPOST`, `GMONO`, `GEMAIL`, `GADD`) VALUES
(1, 'Amankumar Shah', 'Manager', '9898765678', 'amanshah123@gmail.com', 'gota cross road ahmedabad'),
(2, 'Rohit Patel', 'Assistant Manager', '9867546756', 'rohitpatel222@gmail.com', 'jamalpur ahmedabad');

-- --------------------------------------------------------

--
-- Table structure for table `IMAGE_ADD`
--

CREATE TABLE `IMAGE_ADD` (
  `ID` int(255) NOT NULL,
  `IMG_TITLE` varchar(20) NOT NULL,
  `IMG_LOC` varchar(50) NOT NULL,
  `IMG_DESC` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `IMAGE_ADD`
--

INSERT INTO `IMAGE_ADD` (`ID`, `IMG_TITLE`, `IMG_LOC`, `IMG_DESC`) VALUES
(1, 'Marriage', '/uploads/upload/loc1.jpg', 'Imahe Upload For Marriage'),
(2, 'Birthday Party', '/uploads/upload/loc2.jpg', 'Image For Birthday Party');

-- --------------------------------------------------------

--
-- Table structure for table `LOC_MST`
--

CREATE TABLE `LOC_MST` (
  `ID` int(255) NOT NULL,
  `LNAME` varchar(40) NOT NULL,
  `LADD` varchar(50) NOT NULL,
  `MNAME` varchar(255) NOT NULL,
  `MMNO` varchar(20) NOT NULL,
  `MEMAIL` varchar(30) NOT NULL,
  `MAXCAP` int(20) NOT NULL,
  `LTYPE` varchar(10) NOT NULL,
  `SEATAV` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `LOC_MST`
--

INSERT INTO `LOC_MST` (`ID`, `LNAME`, `LADD`, `MNAME`, `MMNO`, `MEMAIL`, `MAXCAP`, `LTYPE`, `SEATAV`) VALUES
(1, 'Dhaval Party Plot', 'Gota Cross Road Ahmedabad', 'Rohan Patel', '9878765478', 'rohanpatel123@gmail.com', 1000, 'Both', 'Both'),
(2, 'Sample Location 1', 'Ahmedabad', 'Rohan Patel', '9878765478', 'rohanpatel123@gmail.com', 1000, 'Indore', 'Both');

-- --------------------------------------------------------

--
-- Table structure for table `PACKAGE_CATEGORY`
--

CREATE TABLE `PACKAGE_CATEGORY` (
  `ID` int(255) NOT NULL,
  `CAT_NAME` varchar(30) NOT NULL,
  `CRE_DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `PACKAGE_CATEGORY`
--

INSERT INTO `PACKAGE_CATEGORY` (`ID`, `CAT_NAME`, `CRE_DATE`) VALUES
(1, '31st Celerebation', '2005-01-22'),
(2, 'Christmas', '2005-01-22'),
(3, 'Marriage', '2005-01-22'),
(4, 'Annual Day Celerebation', '2005-01-22');

-- --------------------------------------------------------

--
-- Table structure for table `PACKAGE_MST`
--

CREATE TABLE `PACKAGE_MST` (
  `ID` int(255) NOT NULL,
  `FOOD_CAT` varchar(30) NOT NULL,
  `FOOD_DESC` varchar(30) NOT NULL,
  `FOOD_ITEMS` tinytext NOT NULL,
  `CAT_FOOD` varchar(20) NOT NULL,
  `FOOD_IMG` varchar(40) NOT NULL,
  `SIZE` varchar(10) NOT NULL,
  `STATUS` varchar(20) NOT NULL,
  `SUIT_PEOPLE` varchar(30) NOT NULL,
  `PRICE` varchar(30) NOT NULL,
  `APPROVE` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `PACKAGE_MST`
--

INSERT INTO `PACKAGE_MST` (`ID`, `FOOD_CAT`, `FOOD_DESC`, `FOOD_ITEMS`, `CAT_FOOD`, `FOOD_IMG`, `SIZE`, `STATUS`, `SUIT_PEOPLE`, `PRICE`, `APPROVE`) VALUES
(1, '31st Celerebation', 'fresh Food', 'Veg Pulaw\r\nPuri\r\nPlain Rice\r\nFruit Salad\r\nCurd\r\nPapad\r\nDal Rice', 'Veg Food', '/uploads/foodimages/food1.jpeg', 'Large', 'Active', '50', '400', 'Approaved'),
(2, 'Christmas', 'New Food Dish ', 'Veg Pulaw Puri Plain Rice Fruit Salad Curd Papad Dal Rice', 'Veg Food', '/uploads/foodimages/food2.jpeg', 'Medium', 'Active', '100', '500', 'Approaved'),
(3, 'Sport Day', 'Fresh Food', 'Veg Pulaw Puri Plain Rice Fruit Salad Curd Papad Dal Rice', 'Veg Food', '/uploads/foodimages/food3.jpeg', 'Large', 'Active', '150', '450', 'Approaved');

-- --------------------------------------------------------

--
-- Table structure for table `PASSWORD_RESET`
--

CREATE TABLE `PASSWORD_RESET` (
  `ID` int(255) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `TOKEN` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `PASSWORD_RESET`
--

INSERT INTO `PASSWORD_RESET` (`ID`, `EMAIL`, `TOKEN`) VALUES
(1, 'rohanpatel123@gmail.com', '577409281');

-- --------------------------------------------------------

--
-- Table structure for table `REG_MST`
--

CREATE TABLE `REG_MST` (
  `ID` int(255) NOT NULL,
  `NAME` varchar(30) NOT NULL,
  `MONO` varchar(20) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `PASS` varchar(20) NOT NULL,
  `UADD` varchar(40) NOT NULL,
  `UTYPE` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `REG_MST`
--

INSERT INTO `REG_MST` (`ID`, `NAME`, `MONO`, `EMAIL`, `PASS`, `UADD`, `UTYPE`) VALUES
(1, 'Rohan Patel', '9987675465', 'rohanpatel123@gmail.com', 'rohan@123', 'vadtal mandir vadtal gam vidhyanagar', 'Organizer'),
(2, 'Admin', '9909786552', 'admin123@gmail.com', 'admin@123', 'ahmedabad', 'Admin'),
(3, 'Rohit Shah', '9909766345', 'rohitshah123@gmail.com', 'rohit@123', 'jamalpur ahmedabad', 'Caterer');

-- --------------------------------------------------------

--
-- Table structure for table `SERVICE_MST`
--

CREATE TABLE `SERVICE_MST` (
  `ID` int(255) NOT NULL,
  `ENAME` varchar(50) NOT NULL,
  `DEC_SER` varchar(40) NOT NULL,
  `FOOD_TYPE` varchar(40) NOT NULL,
  `FOOD_SER` varchar(40) NOT NULL,
  `SETTING_SER` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `SERVICE_MST`
--

INSERT INTO `SERVICE_MST` (`ID`, `ENAME`, `DEC_SER`, `FOOD_TYPE`, `FOOD_SER`, `SETTING_SER`) VALUES
(1, '31st Celebration', 'Stage and Hall', 'Dinner Breakfast And Lunch', 'Veg and Nonveg', 'Table and Chair'),
(2, 'Birthday Party', 'Stage and Hall', 'Dinner', 'Veg Food', 'Table and Chair'),
(3, 'Marriage', 'Stage and Hall', 'Dinner Breakfast And Lunch', 'Veg and Nonveg', 'Table Chair and Sofa');

-- --------------------------------------------------------

--
-- Table structure for table `SUBSCRIBE_MST`
--

CREATE TABLE `SUBSCRIBE_MST` (
  `ID` int(255) NOT NULL,
  `SEMAIL` varchar(30) NOT NULL,
  `SDATE` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `SUBSCRIBE_MST`
--

INSERT INTO `SUBSCRIBE_MST` (`ID`, `SEMAIL`, `SDATE`) VALUES
(1, 'rohanpatel123@gmail.com', '2022-01-05 00:00:00'),
(2, 'rohanpatel123@gmail.com', '2022-01-05 07:01:48');

-- --------------------------------------------------------

--
-- Table structure for table `TABLE_MST`
--

CREATE TABLE `TABLE_MST` (
  `ID` int(255) NOT NULL,
  `ENAME` varchar(30) NOT NULL,
  `TOT_TABLE` int(30) NOT NULL,
  `CHAIT_TABLE` int(30) NOT NULL,
  `TOT_CHAIR` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TABLE_MST`
--

INSERT INTO `TABLE_MST` (`ID`, `ENAME`, `TOT_TABLE`, `CHAIT_TABLE`, `TOT_CHAIR`) VALUES
(1, '31st Celebration', 100, 4, 400),
(2, 'Birthday Party', 60, 4, 240);

-- --------------------------------------------------------

--
-- Table structure for table `TASK`
--

CREATE TABLE `TASK` (
  `ID` int(255) NOT NULL,
  `TNAME` varchar(30) NOT NULL,
  `TTYPE` varchar(40) NOT NULL,
  `ENAME` varchar(30) NOT NULL,
  `EMPNAME` varchar(20) NOT NULL,
  `EMPMONO` varchar(18) NOT NULL,
  `EMPEMAIL` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TASK`
--

INSERT INTO `TASK` (`ID`, `TNAME`, `TTYPE`, `ENAME`, `EMPNAME`, `EMPMONO`, `EMPEMAIL`) VALUES
(1, 'Decoration', 'Stage Decoration', '31st Celerebration', 'Aman Rana', '9987678765', 'amanrana111@gmail.com'),
(2, 'Decoration', 'Hall and Stage Decoration', '31st Celerebration', 'Ronak Shah', '9986876756', 'ronakshah123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `TOTAL_COST`
--

CREATE TABLE `TOTAL_COST` (
  `ID` int(255) NOT NULL,
  `ENAME` varchar(30) NOT NULL,
  `PLOAT_PRICE` int(10) NOT NULL,
  `TOT_CHAIR` int(20) NOT NULL,
  `COST_CHAIR` int(20) NOT NULL,
  `TOT_SOFA` int(20) NOT NULL,
  `COST_SOFA` int(20) NOT NULL,
  `TOT_TABLE` int(20) NOT NULL,
  `COST_TABLE` int(20) NOT NULL,
  `COST_DEC` int(20) NOT NULL,
  `TOT_PRICE` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TOTAL_COST`
--

INSERT INTO `TOTAL_COST` (`ID`, `ENAME`, `PLOAT_PRICE`, `TOT_CHAIR`, `COST_CHAIR`, `TOT_SOFA`, `COST_SOFA`, `TOT_TABLE`, `COST_TABLE`, `COST_DEC`, `TOT_PRICE`) VALUES
(1, '31st Celebration', 3000, 100, 500, 20, 400, 50, 1250, 3000, 8150),
(3, 'Birthday Party', 4000, 150, 1500, 25, 625, 15, 450, 3000, 9575);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `BOOK_EVENT`
--
ALTER TABLE `BOOK_EVENT`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `COMPONY_PROFILE`
--
ALTER TABLE `COMPONY_PROFILE`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `EVENT_CREATE`
--
ALTER TABLE `EVENT_CREATE`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `GUEST_MST`
--
ALTER TABLE `GUEST_MST`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `IMAGE_ADD`
--
ALTER TABLE `IMAGE_ADD`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `LOC_MST`
--
ALTER TABLE `LOC_MST`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `PACKAGE_CATEGORY`
--
ALTER TABLE `PACKAGE_CATEGORY`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `PACKAGE_MST`
--
ALTER TABLE `PACKAGE_MST`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `PASSWORD_RESET`
--
ALTER TABLE `PASSWORD_RESET`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `REG_MST`
--
ALTER TABLE `REG_MST`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `SERVICE_MST`
--
ALTER TABLE `SERVICE_MST`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `SUBSCRIBE_MST`
--
ALTER TABLE `SUBSCRIBE_MST`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `TABLE_MST`
--
ALTER TABLE `TABLE_MST`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `TASK`
--
ALTER TABLE `TASK`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `TOTAL_COST`
--
ALTER TABLE `TOTAL_COST`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `BOOK_EVENT`
--
ALTER TABLE `BOOK_EVENT`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `COMPONY_PROFILE`
--
ALTER TABLE `COMPONY_PROFILE`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `EVENT_CREATE`
--
ALTER TABLE `EVENT_CREATE`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `GUEST_MST`
--
ALTER TABLE `GUEST_MST`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `IMAGE_ADD`
--
ALTER TABLE `IMAGE_ADD`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `LOC_MST`
--
ALTER TABLE `LOC_MST`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `PACKAGE_CATEGORY`
--
ALTER TABLE `PACKAGE_CATEGORY`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `PACKAGE_MST`
--
ALTER TABLE `PACKAGE_MST`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `PASSWORD_RESET`
--
ALTER TABLE `PASSWORD_RESET`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `REG_MST`
--
ALTER TABLE `REG_MST`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `SERVICE_MST`
--
ALTER TABLE `SERVICE_MST`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `SUBSCRIBE_MST`
--
ALTER TABLE `SUBSCRIBE_MST`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `TABLE_MST`
--
ALTER TABLE `TABLE_MST`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `TASK`
--
ALTER TABLE `TASK`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `TOTAL_COST`
--
ALTER TABLE `TOTAL_COST`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
