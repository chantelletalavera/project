-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2019 at 12:37 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.1.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lumed`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department`
--

CREATE TABLE `tbl_department` (
  `fld_departmentid` int(11) NOT NULL,
  `fld_department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_department`
--

INSERT INTO `tbl_department` (`fld_departmentid`, `fld_department`) VALUES
(3, 'Operating Room'),
(4, 'Emergency Room'),
(5, 'Laboratory'),
(6, 'Medical Records'),
(7, 'Nurse Station'),
(8, 'Nurse Station I'),
(9, 'Pharmacy'),
(10, 'X-RAY'),
(11, 'Information Desk');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_diagnosis`
--

CREATE TABLE `tbl_diagnosis` (
  `fld_diagnosisid` int(11) NOT NULL,
  `fld_patientID` varchar(255) NOT NULL,
  `fld_patientfname` varchar(255) NOT NULL,
  `fld_patientmname` varchar(255) NOT NULL,
  `fld_patientlname` varchar(255) NOT NULL,
  `fld_date` date NOT NULL,
  `fld_casenumber` varchar(255) NOT NULL,
  `fld_complaint` varchar(255) NOT NULL,
  `fld_primary` varchar(255) NOT NULL,
  `fld_med` varchar(255) NOT NULL,
  `fld_doctorname` varchar(255) NOT NULL,
  `fld_status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_diagnosis`
--

INSERT INTO `tbl_diagnosis` (`fld_diagnosisid`, `fld_patientID`, `fld_patientfname`, `fld_patientmname`, `fld_patientlname`, `fld_date`, `fld_casenumber`, `fld_complaint`, `fld_primary`, `fld_med`, `fld_doctorname`, `fld_status`) VALUES
(68, 'P-230419153', 'Edmar Isam', 'Cardenas', 'Ellorico', '2019-05-15', 'C-15051968', 'Migraine', 'Brain Tumor', 'Paracetamol', 'DR. MANZO, MARIA ZITA P.', '1'),
(69, 'P-020519158', 'Chantelle Julea', 'Viluan', 'Talavera', '2019-05-15', 'C-15051969', 'Migraine', 'Brain Tumor', 'Paracetamol', 'DR. MANZO, MARIA ZITA P.', '1'),
(70, 'P-020519157', 'Claiza Jharie', 'Tuson', 'Hufano', '2019-05-15', 'C-15051970', 'Migraine', 'Brain Tumor', 'Paracetamol', 'DR. ASUNCION, RALPH A.', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doctors`
--

CREATE TABLE `tbl_doctors` (
  `id` int(11) NOT NULL,
  `fld_doctor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_doctors`
--

INSERT INTO `tbl_doctors` (`id`, `fld_doctor`) VALUES
(1, 'DR. MANZO, MARIA ZITA P.'),
(2, 'DR. ASUNCION, RALPH A.'),
(3, 'DR. MEDENILLA, LOUIE V.'),
(4, 'DR. MADAYAG, EVAMARIE D.'),
(5, 'DR. ASPIRAS, GUILVIC TIRSO S.'),
(6, 'DR. DACAYANAN, ANNA RHEA S.'),
(9, 'DR. DELA CRUZ, SHERWIN H.'),
(10, 'DR. DIZON, ROSELLA L.'),
(11, 'DR. FUSILERO, MARCELYN A.'),
(12, 'DR. GAGTAN-DE LEON, APRILYN'),
(13, 'DR. INSTRELLA, RONILLO'),
(14, 'DR. RECAIDO, SHERLYN L.'),
(15, 'DR. ZABAT, JOHNSON'),
(16, 'DR. GALIMBA, JOSPEH MANIX'),
(17, 'DR. DE GUZMAN, ELAINE RUTH D.'),
(18, 'DR. DAG-O, CHERRYL'),
(19, 'DR. RAMOS, RODERICO V.'),
(20, 'DR. SORIANO, MARY ANN'),
(21, 'DR. SANTOS, HAZEL RAE C.'),
(22, 'DR. ORTEGA, KATRINA ROSE R.'),
(23, 'DR. NUVAL, ARDILYN A.'),
(24, 'DR. GARCIA, DAISY EVANGELINE C.'),
(25, 'DR. GAMIAO, JENNIFER C.'),
(26, 'DR. DIAZ, MELISSA I.'),
(27, 'DR. ACOSTA, GERRY B.'),
(28, 'DR. PISCAWEN, ERIC'),
(29, 'DR. NOSCAL, ARVIN'),
(30, 'DR. ONG, CARLOS'),
(31, 'DR. GALVAN, ARLEEN U.'),
(32, 'DR. DURAN, MARIA FATIMA'),
(33, 'DR. ASUNCION, ANNALYN B.'),
(34, 'DR. LUBIANO, CELIA L.'),
(35, 'DR. GARCIA, GERARDO C.'),
(36, 'DR. CHAN, JUDITH O.'),
(37, 'DR. BALANON, SHARON C.'),
(38, 'DR. VALDEZ, DANTE CECILIO REY S.'),
(39, 'DR. MASON, KAREN FRANCES B.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lab`
--

CREATE TABLE `tbl_lab` (
  `fld_labid` int(11) NOT NULL,
  `fld_patienID` varchar(255) NOT NULL,
  `fld_patietfname` varchar(255) NOT NULL,
  `fld_patientmname` varchar(255) NOT NULL,
  `fld_patientlname` varchar(255) NOT NULL,
  `fld_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_med`
--

CREATE TABLE `tbl_med` (
  `fld_medID` int(10) NOT NULL,
  `fld_genericname` varchar(50) DEFAULT NULL,
  `fld_brandname` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_med`
--

INSERT INTO `tbl_med` (`fld_medID`, `fld_genericname`, `fld_brandname`) VALUES
(1, 'IVABRADINE', 'CORLAN 7.5MG'),
(2, 'ACECLOFENAC', 'DOLOWIN 100MG TAB'),
(3, 'ACECLOFENAC', 'MOBENAC 100MG TAB'),
(4, 'CELECOXIB', 'C-FLAM 200MG CAPSULE'),
(5, 'CELECOXIB', 'CELECOXIB 200MG TAB'),
(6, 'CELECOXIB', 'CELECOXIB 400MG TAB'),
(7, 'CHAMOMILE EXTRACT, ESSENTIAL C', 'KAMILLOSAN M SPRAY 15ML'),
(8, 'DICLOFENEC', 'LOFENAG 25MG AMP'),
(9, 'IBUPRUFEN', 'ADVIL LIQUIGEL 200MG CAP'),
(10, 'MELOXICAM', 'BEXXAM 15MG TAB'),
(11, 'PARACETAMOL + TRAMADOL', 'PARACETRAM TAB'),
(12, 'SUMATRIPAN', 'IMIGRAN 50MG TAB'),
(13, 'TRAMADOL', 'TDL TRAMADOL 50 MG CAP'),
(14, 'TRAMADOL', 'TDL TRAMADOL AMP'),
(15, 'TRAMADOL', 'TRAMADOL 50MG/ML AMP'),
(16, 'TRAMADOL', 'TRAMAL 100MG CAP'),
(17, 'TRAMADOL + PARACETAMOL', 'ALGESIA 37.5MG/325MG TAB'),
(18, 'TRAMADOL + PARACETAMOL ', 'PRADOL 37.5MG/325MG TAB'),
(19, 'TRAMADOL + PARACETAMOL', 'PYREDOL TAB'),
(20, 'TRAMADOL HYDROCHLORIDE', 'TRAMAL AMP'),
(21, 'TRAMADOL + PARACETAMOL', 'CETODOL 37.5MG/325MG TAB'),
(22, 'TEMPRA', 'TEMPRA 325MG TAB'),
(23, 'IBUPRUFEN', 'DOLAN 100MG/2.5ML DROPS 15ML'),
(24, 'IBUPRUFEN', 'DOLAN FP 100MG/5ML SUSP 60ML'),
(25, 'IBUPRUFEN', 'IBUPRUFEN 400MG TAB'),
(26, 'PARACETAMOL', 'AEKNIL AMP'),
(27, 'PARACETAMOL ', 'BIOGESIC 100MG/ML DROPS 15ML'),
(28, 'PARACETAMOL', 'BIOGESIC 325MG'),
(29, 'PARACETAMOL', 'PARACETAMOL 500MG TAB'),
(30, 'LIDOCAINE', 'LIDOCAINE 2% 20ML'),
(31, 'LIDOCAINE', 'XYLOCAINE SPRAY 50ML'),
(32, 'ALUMINUM HYDROXIDE + MAGNESIUM', 'MAALOX PLUS SUSP 60ML'),
(33, 'ALUMINUM MAGNESIUM HYDROXIDE', 'ALUMINUM MAGNESIUM HYDROXIDE TAB'),
(34, 'ALUMINUM MG HYDROXIDE ', 'MAALOX PLUS TAB'),
(35, 'OMEPRAZOLE ', 'OMEPRAZOLE 20MG CAP'),
(36, 'OMEPRAZOLE ', 'ZEVAR 40MG IV'),
(37, 'PANTOPRAZOLE ', 'VEXPRAZOLE '),
(38, 'REBEPRAZOLE', 'PARIET 20MG TAB'),
(39, 'CETIRIZINE', 'CETIRIZINE 10MG TAB'),
(40, 'CETIRIZINE', 'CETIRIZINE 5MG/5ML SYRUP'),
(41, 'CETIRIZINE', 'RM CETIRIZINE 10MG'),
(42, 'CETIRIZINE', 'H-NE TABLET 10MG'),
(43, 'DIPHENHYDRAMINE', 'BENADRYL 25MG CAP'),
(44, 'DIPHENHYDRAMINE', 'BENADRYL SYRUP 120ML'),
(45, 'HYDROCORTISONE', 'HYDROCORT100MG IV'),
(46, 'HYDROXYZINE', 'ITERAX 2MG 100ML'),
(47, 'HYDROXYZINE', 'ITERAX 2MG 60ML SYR'),
(48, 'HYDROXYZINE DIHYDROCHLORIDE', 'ITERAX 10MG TAB'),
(49, 'LORATADINE', 'ALLERTA 100MG TAB'),
(50, 'LORATADINE', 'ALLERTA 5MG/5ML SYR 60ML'),
(51, 'LORATADINE', 'RM LORATADINE 10MG TAB'),
(52, 'LORATADINE + BETAMETHASONE', 'CLARICORT 5MG/250MG TAB'),
(53, 'ANORO', 'ANORO 62.5/25MCG MDI'),
(54, 'FLUTIFORM', 'FLUTIFORM 125/5 INHALER'),
(55, 'AMBROXOL', 'RM AMBROXOL  15MG/ML SYRUP 60ML'),
(56, 'AMBROXOL', 'RM AMBROXOL 30MG TAB'),
(57, 'AMBROXOL', 'RM AMBROXOL 30MG/ML SYRUP 60ML'),
(58, 'BAMBUTEROL', 'LEVARE 10MG'),
(59, 'BUDESONIDE', 'BUDECORT 500MCG RESPULSE'),
(60, 'BUDESONIDE + FORMOTEROL', 'SYMBICORT 320/90MCG'),
(61, 'BUDESONIDE,FORMOTEROL FUMARATE', 'SYMBICORT 160MG/4.5MG TURBUHALER'),
(62, 'DOXOFLLINE', 'ANSIMAR 200MG TAB'),
(63, 'DOXOFYLLINE', 'ANSIMAR 400MG TAB'),
(64, 'INDACATEROL + GLYCOPYRRONIU', 'ULTIBRO BREEZEHALER'),
(65, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_patientpersonalrecords`
--

CREATE TABLE `tbl_patientpersonalrecords` (
  `fld_id` int(11) NOT NULL,
  `fld_patientID` varchar(100) NOT NULL,
  `fld_patientimage` varchar(500) NOT NULL,
  `fld_patientfname` varchar(100) NOT NULL,
  `fld_patientmname` varchar(100) NOT NULL,
  `fld_patientlname` varchar(100) NOT NULL,
  `fld_patientaddress` varchar(300) NOT NULL,
  `fld_patientage` varchar(3) NOT NULL,
  `fld_patientdob` varchar(20) NOT NULL,
  `fld_patientreligion` varchar(20) NOT NULL,
  `fld_patientnationality` varchar(20) NOT NULL,
  `fld_patientstatus` varchar(20) NOT NULL,
  `fld_patientgender` varchar(6) NOT NULL,
  `fld_patientoccupation` varchar(30) NOT NULL,
  `fld_patientnumber` varchar(15) NOT NULL,
  `fld_patientfather` varchar(100) NOT NULL,
  `fld_patientmother` varchar(100) NOT NULL,
  `fld_patientspouse` varchar(100) NOT NULL,
  `fld_patientspouseaddress` varchar(100) NOT NULL,
  `fld_patientservice` varchar(50) NOT NULL,
  `fld_patientcompany` varchar(100) NOT NULL,
  `fld_patientcase` varchar(50) NOT NULL,
  `fld_patientseniorID` varchar(50) NOT NULL,
  `fld_patienthmo` varchar(50) NOT NULL,
  `fld_patientphilhealth` varchar(50) NOT NULL,
  `fld_patientbp` varchar(20) NOT NULL,
  `fld_patienttemperature` varchar(20) NOT NULL,
  `fld_patientweight` varchar(55) NOT NULL,
  `fld_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_patientpersonalrecords`
--

INSERT INTO `tbl_patientpersonalrecords` (`fld_id`, `fld_patientID`, `fld_patientimage`, `fld_patientfname`, `fld_patientmname`, `fld_patientlname`, `fld_patientaddress`, `fld_patientage`, `fld_patientdob`, `fld_patientreligion`, `fld_patientnationality`, `fld_patientstatus`, `fld_patientgender`, `fld_patientoccupation`, `fld_patientnumber`, `fld_patientfather`, `fld_patientmother`, `fld_patientspouse`, `fld_patientspouseaddress`, `fld_patientservice`, `fld_patientcompany`, `fld_patientcase`, `fld_patientseniorID`, `fld_patienthmo`, `fld_patientphilhealth`, `fld_patientbp`, `fld_patienttemperature`, `fld_patientweight`, `fld_created`) VALUES
(153, 'P-230419153', '', 'Edmar Isam', 'Cardenas', 'Ellorico', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-04-23 21:01:19'),
(154, 'P-240419154', '', 'ISAM', 'ISAM', 'ISAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-04-24 00:19:44'),
(157, 'P-020519157', '', 'Claiza Jharie', 'Tuson', 'Hufano', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-05-02 16:29:48'),
(158, 'P-020519158', '', 'Chantelle Julea', 'Viluan', 'Talavera', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-05-02 16:30:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pharmacy`
--

CREATE TABLE `tbl_pharmacy` (
  `fld_pharmacyid` int(11) NOT NULL,
  `fld_patientID` varchar(255) NOT NULL,
  `fld_patietfname` varchar(255) NOT NULL,
  `fld_patientmname` varchar(255) NOT NULL,
  `fld_patientlname` varchar(255) NOT NULL,
  `fld_date` date NOT NULL,
  `fld_purchase` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_timerecord`
--

CREATE TABLE `tbl_timerecord` (
  `fld_timeid` int(11) NOT NULL,
  `fld_patientID` varchar(50) NOT NULL,
  `fld_date` date NOT NULL,
  `fld_timein` time NOT NULL,
  `fld_timeout` time NOT NULL,
  `fld_stayed` varchar(255) NOT NULL,
  `fld_userlevel` varchar(255) NOT NULL,
  `fld_doctor` varchar(2553) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_timerecord`
--

INSERT INTO `tbl_timerecord` (`fld_timeid`, `fld_patientID`, `fld_date`, `fld_timein`, `fld_timeout`, `fld_stayed`, `fld_userlevel`, `fld_doctor`) VALUES
(36, 'P-230419153', '2019-05-15', '15:11:30', '15:11:33', '', 'Secretary', 'DR. MANZO, MARIA ZITA P.'),
(37, 'P-020519158', '2019-05-15', '15:11:38', '15:11:41', '', 'Secretary', 'DR. MANZO, MARIA ZITA P.'),
(38, 'P-020519157', '2019-05-15', '15:11:56', '15:11:59', '', 'Secretary', 'DR. ASUNCION, RALPH A.'),
(39, 'P-020519158', '2019-05-15', '15:13:26', '15:13:30', '', 'DR. MANZO, MARIA ZITA P.', ''),
(40, 'P-230419153', '2019-05-15', '15:13:49', '15:13:53', '', 'DR. MANZO, MARIA ZITA P.', ''),
(41, 'P-020519157', '2019-05-15', '15:16:19', '15:16:41', '', 'DR. ASUNCION, RALPH A.', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `fld_id` int(11) NOT NULL,
  `fld_username` varchar(30) NOT NULL,
  `fld_password` varchar(20) NOT NULL,
  `fld_doctorname` varchar(255) NOT NULL,
  `fld_fname` varchar(60) NOT NULL,
  `fld_mname` varchar(60) NOT NULL,
  `fld_lname` varchar(60) NOT NULL,
  `fld_userlevel` varchar(20) NOT NULL,
  `fld_doctor` varchar(255) NOT NULL,
  `fld_department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`fld_id`, `fld_username`, `fld_password`, `fld_doctorname`, `fld_fname`, `fld_mname`, `fld_lname`, `fld_userlevel`, `fld_doctor`, `fld_department`) VALUES
(5, 'admin', '€9$ó7Rö}', '', 'Edmar Isam', 'Cardenas', 'Ellorico', 'Admin', '', ''),
(40, 'xray', '€mƒ[ÃÚ\Z', '', 'Test', 'test', 'test', 'Staff', '', 'X-RAY'),
(44, 'info', '€s6@iÒÁ', '', 'Info', 'Info ', 'Info', 'Staff', '', 'Information Desk'),
(45, 'doc', '€G’ìKÑ', 'DR. MANZO, MARIA ZITA P.', '', '', '', 'Doctor', '', ''),
(46, 'sec', '€°ÉÜÓíW', '', 'sec', 'sec', 'sec', 'Secretary', 'DR. MANZO, MARIA ZITA P.', ''),
(47, 'lab', '€~Èù…²`›c', '', 'lab', 'lab', 'lab', 'Staff', '', 'Laboratory'),
(48, 'phar', '€\ZU`ù©zb', '', 'phar', 'phar', 'phar', 'Staff', '', 'Pharmacy'),
(49, 'sec2', '€á_uR›3', '', 'sec2', 'sec2', 'sec2', 'Secretary', 'DR. ASUNCION, RALPH A.', ''),
(50, 'doc2', '€vX6¤j.Ôâ', 'DR. ASUNCION, RALPH A.', '', '', '', 'Doctor', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_xray`
--

CREATE TABLE `tbl_xray` (
  `fld_xrayid` int(11) NOT NULL,
  `fld_patientID` varchar(255) NOT NULL,
  `fld_patientfname` varchar(255) NOT NULL,
  `fld_patientmname` varchar(255) NOT NULL,
  `fld_patientlname` varchar(255) NOT NULL,
  `fld_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_xray`
--

INSERT INTO `tbl_xray` (`fld_xrayid`, `fld_patientID`, `fld_patientfname`, `fld_patientmname`, `fld_patientlname`, `fld_date`) VALUES
(1, 'P-230419153', 'Edmar Isam', 'Cardenas', 'Ellorico', '2019-05-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_department`
--
ALTER TABLE `tbl_department`
  ADD PRIMARY KEY (`fld_departmentid`);

--
-- Indexes for table `tbl_diagnosis`
--
ALTER TABLE `tbl_diagnosis`
  ADD PRIMARY KEY (`fld_diagnosisid`);

--
-- Indexes for table `tbl_doctors`
--
ALTER TABLE `tbl_doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_lab`
--
ALTER TABLE `tbl_lab`
  ADD PRIMARY KEY (`fld_labid`);

--
-- Indexes for table `tbl_med`
--
ALTER TABLE `tbl_med`
  ADD PRIMARY KEY (`fld_medID`);

--
-- Indexes for table `tbl_patientpersonalrecords`
--
ALTER TABLE `tbl_patientpersonalrecords`
  ADD PRIMARY KEY (`fld_id`);

--
-- Indexes for table `tbl_pharmacy`
--
ALTER TABLE `tbl_pharmacy`
  ADD PRIMARY KEY (`fld_pharmacyid`);

--
-- Indexes for table `tbl_timerecord`
--
ALTER TABLE `tbl_timerecord`
  ADD PRIMARY KEY (`fld_timeid`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`fld_id`);

--
-- Indexes for table `tbl_xray`
--
ALTER TABLE `tbl_xray`
  ADD PRIMARY KEY (`fld_xrayid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_department`
--
ALTER TABLE `tbl_department`
  MODIFY `fld_departmentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_diagnosis`
--
ALTER TABLE `tbl_diagnosis`
  MODIFY `fld_diagnosisid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `tbl_doctors`
--
ALTER TABLE `tbl_doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tbl_lab`
--
ALTER TABLE `tbl_lab`
  MODIFY `fld_labid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_med`
--
ALTER TABLE `tbl_med`
  MODIFY `fld_medID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `tbl_patientpersonalrecords`
--
ALTER TABLE `tbl_patientpersonalrecords`
  MODIFY `fld_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `tbl_pharmacy`
--
ALTER TABLE `tbl_pharmacy`
  MODIFY `fld_pharmacyid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_timerecord`
--
ALTER TABLE `tbl_timerecord`
  MODIFY `fld_timeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `fld_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tbl_xray`
--
ALTER TABLE `tbl_xray`
  MODIFY `fld_xrayid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
