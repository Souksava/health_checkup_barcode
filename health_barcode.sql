-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2021 at 05:37 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health_barcode`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `check_del_emp` (IN `barcode` VARCHAR(30))  NO SQL
BEGIN
SELECT * FROM register where barcode=barcode;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `check_del_package` (IN `id` VARCHAR(50))  NO SQL
BEGIN
SELECT * FROM registerdetail where pack_id=id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_emp` (IN `id` VARCHAR(30))  NO SQL
BEGIN
DELETE FROM employee WHERE barcode=id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `del_package` (IN `id` VARCHAR(50))  NO SQL
BEGIN 
DELETE FROM package WHERE pack_id=id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `del_register` (IN `id` VARCHAR(11))  NO SQL
BEGIN
DELETE FROM registerdetail WHERE reg_id=id;
DELETE FROM register WHERE reg_id=id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `del_registerdetail` (IN `ids` INT(11))  NO SQL
BEGIN
DELETE FROM registerdetail where id=ids;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `export_emp` (IN `companys` VARCHAR(100), IN `name` VARCHAR(50))  NO SQL
BEGIN
SELECT e.barcode,emp_id,emp_name,surname,dob,age,gender,company,branch,department,tel,family_stt,nation,ethnic,religion,job,house_no,village,district,province ,queue,year,date,time FROM employee e LEFT JOIN register r on e.barcode=r.barcode where company LIKE companys and (emp_id LIKE name OR emp_name LIKE name OR age LIKE name OR gender LIKE name OR department LIKE name) ORDER BY queue ASC; 
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `get_queue` (IN `datenow` DATE)  NO SQL
BEGIN
SELECT max(queue) as queue FROM register where date=datenow;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `get_reg` ()  NO SQL
BEGIN
SELECT max(reg_id) as reg_id from register; 
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_employee` (IN `barcodes` VARCHAR(30), IN `emp_ids` VARCHAR(20), IN `emp_names` VARCHAR(50), IN `surnames` VARCHAR(50), IN `dobs` DATE, IN `ages` VARCHAR(3), IN `genders` VARCHAR(10), IN `companys` VARCHAR(80), IN `branchs` VARCHAR(50), IN `departments` VARCHAR(50), IN `tels` VARCHAR(30), IN `family_stts` VARCHAR(50), IN `nations` VARCHAR(50), IN `ethnics` VARCHAR(50), IN `religions` VARCHAR(50), IN `jobs` VARCHAR(50), IN `house_nos` VARCHAR(10), IN `villages` VARCHAR(50), IN `districts` VARCHAR(50), IN `provinces` VARCHAR(50))  NO SQL
BEGIN 
INSERT INTO employee(barcode,emp_id,emp_name,surname,dob,age,gender,company,branch,department,tel,family_stt,nation,ethnic,religion,job,house_no,village,district,province) VALUES(barcodes,emp_ids,emp_names,surnames,dobs,ages,genders,companys,branchs,departments,tels,family_stts,nations,ethnics,religions,jobs,house_nos,villages,districts,provinces); END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_package` (IN `pack_id` VARCHAR(20), IN `pack_name` VARCHAR(50))  NO SQL
BEGIN
INSERT INTO package VALUES(pack_id,pack_name);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_register` (IN `reg_id` INT(11), IN `barcode` VARCHAR(30), IN `time` VARCHAR(50), IN `queue` INT(5), IN `year` INT(4), IN `date` VARCHAR(50))  NO SQL
BEGIN
INSERT INTO register values(reg_id,barcode,time,queue,year,date);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_registerdetail` (IN `reg_ids` INT(11), IN `pack_ids` VARCHAR(20))  NO SQL
BEGIN
INSERT INTO registerdetail(reg_id,pack_id) VALUES(reg_ids,pack_ids);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `max_barcode_emp` ()  NO SQL
BEGIN
SELECT max(SUBSTRING(barcode,8)) AS barcode FROM employee;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `register_print` (IN `reg_ids` VARCHAR(11))  NO SQL
BEGIN
select r.reg_id,r.barcode,emp_name,surname,queue,company,date,pack_id from register r left join employee e on r.barcode=e.barcode left join registerdetail d on r.reg_id=d.reg_id where r.reg_id=reg_ids;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `select_employee` (IN `companys` VARCHAR(100), IN `name` VARCHAR(50))  NO SQL
BEGIN
select * from employee where company LIKE companys and (emp_id LIKE name or emp_name like name or age like name or gender like name or department like name) ORDER BY emp_name asc;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `select_employee_limit` (IN `companys` VARCHAR(100), IN `name` VARCHAR(50), IN `page` INT)  NO SQL
BEGIN
select * from employee where company like companys and (emp_id like name or emp_name like name or age like name or gender like name or department like name) ORDER BY emp_name asc limit page,50;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `select_package` (IN `s` VARCHAR(50))  NO SQL
BEGIN
select * from package where pack_id like s or pack_name like s ORDER BY pack_id asc;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `select_package_limit` (IN `s` VARCHAR(50), IN `page` INT(5))  NO SQL
BEGIN
select * from package where pack_id like s or pack_name like s ORDER BY pack_id asc LIMIT page,15;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `select_register` (IN `companys` VARCHAR(100), IN `name` VARCHAR(50), IN `dates` VARCHAR(5))  NO SQL
BEGIN
select reg_id,r.barcode,emp_id,emp_name,surname,queue,age,company,year,date,time from register r left join employee e on r.barcode=e.barcode where company like companys and (emp_id like name or emp_name like name or age LIKE name or company like name) and date like dates ORDER BY queue desc;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `select_registerdetail` (IN `s` VARCHAR(11))  NO SQL
BEGIN
select id,d.reg_id,d.pack_id,pack_name from registerdetail d left join register r on d.reg_id=r.reg_id left join package p on d.pack_id=p.pack_id where d.reg_id=s;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `select_register_limit` (IN `companys` VARCHAR(50), IN `name` VARCHAR(50), IN `dates` VARCHAR(50), IN `page` INT(5))  NO SQL
BEGIN
select reg_id,r.barcode,emp_id,emp_name,surname,queue,age,company,year,date,time from register r left join employee e on r.barcode=e.barcode where company like companys and (emp_id like name or emp_name like name or age LIKE name or company like name) and date like dates ORDER BY queue desc LIMIT page,50;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `barcode` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `emp_id` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `surname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `age` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `branch` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `department` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `family_stt` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nation` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ethnic` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `religion` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `job` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `house_no` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `village` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `district` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `province` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `pack_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pack_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `reg_id` int(11) NOT NULL,
  `barcode` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `time` time NOT NULL,
  `queue` int(5) NOT NULL,
  `year` year(4) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registerdetail`
--

CREATE TABLE `registerdetail` (
  `id` int(11) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `pack_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`barcode`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`pack_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`reg_id`),
  ADD KEY `barcode` (`barcode`);

--
-- Indexes for table `registerdetail`
--
ALTER TABLE `registerdetail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pack_id` (`pack_id`),
  ADD KEY `reg_id` (`reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registerdetail`
--
ALTER TABLE `registerdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `register`
--
ALTER TABLE `register`
  ADD CONSTRAINT `register_ibfk_1` FOREIGN KEY (`barcode`) REFERENCES `employee` (`barcode`);

--
-- Constraints for table `registerdetail`
--
ALTER TABLE `registerdetail`
  ADD CONSTRAINT `registerdetail_ibfk_1` FOREIGN KEY (`pack_id`) REFERENCES `package` (`pack_id`),
  ADD CONSTRAINT `registerdetail_ibfk_2` FOREIGN KEY (`reg_id`) REFERENCES `register` (`reg_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
