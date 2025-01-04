-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2018 at 01:07 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `hms_center`
--

CREATE TABLE `hms_center` (
  `center_name` varchar(20) NOT NULL,
  `id` int(5) NOT NULL,
  `Phone_Number` int(11) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hms_center`
--

INSERT INTO `hms_center` (`center_name`, `id`, `Phone_Number`, `created_date`) VALUES
('Kandy', 1, 711882708, '2018-09-29 20:21:14'),
('Colombo', 2, 711973199, '2018-09-29 20:21:14'),
('Matara', 3, 772127501, '2018-09-29 20:21:14'),
('Kurunegala', 4, 771683959, '2018-09-29 20:21:14'),
('Galle', 5, 777319119, '2018-09-29 20:21:14'),
('Jaffna', 6, 712805354, '2018-09-29 20:21:14'),
('Anuradhapura', 7, 783545152, '2018-09-29 20:21:14'),
('Ginigathhena ', 8, 751946259, '2018-09-29 20:21:14'),
('Maharagama', 9, 771956289, '2018-09-29 20:21:14'),
('Nittabuwa', 10, 712456893, '2018-09-29 20:21:14'),
('Digana', 11, 713620409, '2018-09-30 06:10:59'),
('galnewa', 12, 711882708, '2018-09-30 09:35:06');

-- --------------------------------------------------------

--
-- Table structure for table `hms_cost`
--

CREATE TABLE `hms_cost` (
  `id` int(5) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `amount` double(5,2) DEFAULT NULL,
  `txn_type` varchar(20) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_user` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hms_doctor`
--

CREATE TABLE `hms_doctor` (
  `id` int(5) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `nic` varchar(12) DEFAULT NULL,
  `pword` text,
  `email` varchar(50) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `degree` varchar(200) DEFAULT NULL,
  `specialist_id` int(5) DEFAULT NULL,
  `doc_fee` int(5) DEFAULT NULL,
  `slmc_no` varchar(20) DEFAULT NULL,
  `status_code` varchar(20) DEFAULT 'ACTIVE',
  `category` varchar(20) DEFAULT 'OPD',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_user` int(5) DEFAULT NULL,
  `user_role` varchar(20) DEFAULT 'DOCTOR'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hms_doctor`
--

INSERT INTO `hms_doctor` (`id`, `first_name`, `last_name`, `nic`, `pword`, `email`, `telephone`, `degree`, `specialist_id`, `doc_fee`, `slmc_no`, `status_code`, `category`, `created_date`, `created_user`, `user_role`) VALUES
(2, 'DR MAHINDA', 'DE SILVA ', '805125129V', '*E1F13E87A2AD953546FCF9284D5FFE12ED512918', 'MAHINDA80@gmail.com', '0713094789', 'M.Sc / Ph.D', 2, 1500, '0001', 'ACTIVE', 'OPD', '2018-09-26 06:40:55', 1, 'DOCTOR'),
(3, 'DR SAMANTHA ', 'PETHIYAGODA', '817358421V', '*08D1597735A5FE423BE61EFA10B58E44F2E43E3F', 'PETHIYAGODA81@gmail.com', '0713620456', 'MBBS', 3, 1400, '0002', 'ACTIVE', '', '2018-09-26 06:52:12', 1, 'DOCTOR'),
(4, 'DR J SISIRA ', 'ELWATTA', '794486327V', '*5B86ACD2013DDFB7DAC34360632F1C2C94D390BA', 'ELWATTA79@gmail.com', '0713620402', 'BMBS', 1, 1100, '002', 'ACTIVE', 'OPD', '2018-09-26 06:53:27', 1, 'DOCTOR'),
(5, 'DR LAKMINI', 'ATTANAYAKE', '925670570V', '*0BC80E0B557898A314CF5A53E544434FBF7A0EEF', 'LAKMINI92@gmail.com', '0713620445', 'MBBS', 1, 1800, '002', 'ACTIVE', '', '2018-09-26 06:57:01', 1, 'DOCTOR'),
(6, 'DR WASANTHA', ' KAPUWATTA', '684841722V', '*F3914F6057E647F15981E75338CFAC4782B90C1B', 'KAPUWATTA68@gmail.com', '0713620475', 'PhD', 1, 1650, '003', 'ACTIVE', '', '2018-09-26 06:57:01', 1, 'DOCTOR'),
(7, 'Dimuth', 'Gunawardhana', '921331380V', '*B2FE603DC0F46A8F4636515BC16EB187D7F1927D', 'pubududilshan97@gmail.com', '0713620406', 'M.Sc / Ph.D', 2, 1400, '0006', 'ACTIVE', 'OPD', '2018-09-30 05:58:12', 1, 'DOCTOR'),
(8, 'MRS.RUVINI', 'ABEYGUNARATNE', '824800160V', '*243C625FCE38371503868D25368886DEA5FD6820', 'ruvini_abey@gmail.com', '011 2260932', 'MBBS, MD, PHD', 2, 3000, '04581', 'ACTIVE', 'OPD', '2018-09-30 09:20:37', 1, 'DOCTOR');

-- --------------------------------------------------------

--
-- Table structure for table `hms_doctor_appointment`
--

CREATE TABLE `hms_doctor_appointment` (
  `id` int(5) NOT NULL,
  `doctor_id` int(5) DEFAULT NULL,
  `patient_id` int(5) DEFAULT NULL,
  `appointment_date` varchar(30) DEFAULT NULL,
  `status_code` varchar(20) DEFAULT 'OPEN',
  `doctor_comment` text,
  `doctor_fee` int(5) DEFAULT NULL,
  `hospital_fee` int(5) DEFAULT NULL,
  `fee` int(5) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_user` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hms_doctor_appointment`
--

INSERT INTO `hms_doctor_appointment` (`id`, `doctor_id`, `patient_id`, `appointment_date`, `status_code`, `doctor_comment`, `doctor_fee`, `hospital_fee`, `fee`, `created_date`, `created_user`) VALUES
(1, 5, 1, '2018-10-12', 'COMPLETE', 'When you have symptoms of a respiratory problem such as difficulty breathing, shortness of breath, or rapid breathing; when you are being treated for a lung disease', 1800, 1000, 2800, '2018-09-26 09:10:15', 1),
(2, 3, 1, '2018-10-05', 'COMPLETE', 'Good Patient', 1400, 1000, 2400, '2018-09-26 09:12:54', 1),
(3, 6, 1, '2018-10-04', 'OPEN', NULL, 1650, 1000, 2650, '2018-09-26 09:13:10', 1),
(4, 5, 3, '2018-10-03', 'COMPLETE', 'when you are older than 45 years or have risk factors for diabetes; when you have symptoms suggesting high or low blood glucose; during pregnancy; when you are diabetic, self-checks up to several times a day to monitor blood glucose levels', 1800, 1000, 2800, '2018-09-26 16:49:59', 3),
(5, 5, 5, '2018-10-21', 'COMPLETE', '', 1800, 1000, 2800, '2018-09-28 09:26:48', 5),
(6, 5, 7, '2018-10-22', 'REJECT', 'he should meet a onchology Doctor.', 1800, 1000, 2800, '2018-09-30 06:04:57', 7),
(7, 3, 2, '2018-10-26', 'OPEN', NULL, 1400, 1000, 2400, '2018-09-30 06:41:19', 2),
(8, 5, 8, '2018-11-12', 'OPEN', NULL, 1800, 1000, 2800, '2018-09-30 07:37:24', 8),
(9, 5, 9, '2018-11-10', 'OPEN', NULL, 1800, 1000, 2800, '2018-09-30 07:40:17', 9),
(10, 5, 1, '2018-10-26', 'OPEN', NULL, 1800, 1000, 2800, '2018-09-30 09:27:28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hms_doctor_availability`
--

CREATE TABLE `hms_doctor_availability` (
  `doctor_id` int(5) NOT NULL,
  `day_available` varchar(60) NOT NULL,
  `from_time` varchar(50) NOT NULL,
  `to_time` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hms_doctor_availability`
--

INSERT INTO `hms_doctor_availability` (`doctor_id`, `day_available`, `from_time`, `to_time`) VALUES
(2, 'Friday', '15:00', '18:30'),
(2, 'Saturday', '09:00', '11:00'),
(2, 'Sunday', '13:00', '17:00'),
(2, 'Wednesday', '14:00', '16:30'),
(4, 'Friday', '09:00', '11:00'),
(4, 'Monday', '14:00', '17:00'),
(5, 'Friday', '07:00', '09:00'),
(5, 'Monday', '13:00', '18:00'),
(5, 'Saturday', '09:00', '11:30');

-- --------------------------------------------------------

--
-- Table structure for table `hms_doctor_salary`
--

CREATE TABLE `hms_doctor_salary` (
  `id` int(5) NOT NULL,
  `doctor_id` int(5) DEFAULT NULL,
  `salary_month` varchar(20) DEFAULT NULL,
  `salary_amount` varbinary(10) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_user` int(5) DEFAULT NULL,
  `flag_unique` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hms_doctor_salary`
--

INSERT INTO `hms_doctor_salary` (`id`, `doctor_id`, `salary_month`, `salary_amount`, `created_date`, `created_user`, `flag_unique`) VALUES
(1, 5, '2018-10', 0x35343030, '2018-09-30 06:37:43', 3, '2018-105400'),
(2, 3, '2018-10', 0x31343030, '2018-09-30 10:40:06', 3, '2018-101400');

-- --------------------------------------------------------

--
-- Table structure for table `hms_drug`
--

CREATE TABLE `hms_drug` (
  `id` int(5) NOT NULL,
  `drug_name` varchar(50) DEFAULT NULL,
  `qty` int(5) DEFAULT NULL,
  `unit` varchar(5) DEFAULT NULL,
  `unit_price` decimal(10,2) DEFAULT NULL,
  `date_expiry` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hms_drug`
--

INSERT INTO `hms_drug` (`id`, `drug_name`, `qty`, `unit`, `unit_price`, `date_expiry`) VALUES
(1, 'Amoxeline', 154, 'boxes', '30.00', '2018-09-30'),
(2, 'Avomine', 250, 'boxes', '28.00', '2018-10-04'),
(3, 'Betterdine', 50, 'bottl', '50.00', '2025-03-12'),
(4, 'Gaviscone', 5, 'l', '80.00', '2022-06-14'),
(5, 'Omeprazole', 50, 'boxes', '25.00', '2021-12-08'),
(6, 'Panadol', 100, 'boxes', '25.00', '2020-07-16'),
(7, 'Peritol', 150, 'ml', '90.00', '2020-10-26'),
(8, 'Piriton', 50, 'boxes', '10.00', '2020-02-25'),
(9, 'Plasters', 20, 'bundl', '40.00', '2027-08-19'),
(10, 'Saline', 300, 'bottl', '200.00', '2022-05-15'),
(11, 'Spirit', 800, 'ml', '80.00', '2020-11-25'),
(12, 'Softramizine', 40, 'boxes', '160.00', '2018-10-12'),
(13, 'Enderm', 20, 'boxes', '800.00', '2018-11-15'),
(14, 'Avomine ', 10, 'boxes', '70.00', '2018-10-26');

-- --------------------------------------------------------

--
-- Table structure for table `hms_employee_salary`
--

CREATE TABLE `hms_employee_salary` (
  `id` int(5) NOT NULL,
  `user_id` int(5) DEFAULT NULL,
  `salary_month` varchar(20) DEFAULT NULL,
  `salary_amount` varbinary(10) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_user` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hms_employee_salary`
--

INSERT INTO `hms_employee_salary` (`id`, `user_id`, `salary_month`, `salary_amount`, `created_date`, `created_user`) VALUES
(1, 2, '2018-08', 0x3136303030, '2018-09-30 06:16:44', 3),
(2, 8, '2018-09', 0x3630303030, '2018-09-30 08:51:03', 3),
(4, 4, '2018-09', 0x3133303030, '2018-09-30 08:53:30', 3),
(5, 5, '2018-09', 0x313530303030, '2018-09-30 09:47:29', 3);

-- --------------------------------------------------------

--
-- Table structure for table `hms_feedback`
--

CREATE TABLE `hms_feedback` (
  `id` int(5) NOT NULL,
  `feedback` text,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_user` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hms_feedback`
--

INSERT INTO `hms_feedback` (`id`, `feedback`, `created_date`, `created_user`) VALUES
(8, '\"Outstanding service and care from start to finish.\"', '2018-09-26 15:37:25', 1),
(9, '\"Fantastic lovely staff clean rooms a really good experience thank you I would definitely come again.\"', '2018-09-26 15:37:33', 1),
(10, '\"Superb staff and very attentive, very thorough and show empathy wherever you are in the hospital.\"', '2018-09-26 15:37:39', 1),
(11, '\"Friendly and profesional staff! I definitely recommend it!\"\r\n', '2018-09-26 15:37:44', 1),
(12, '\"Great staff! Super caring. Nice and clean. Short on parking.\"', '2018-09-26 15:37:49', 1),
(13, '\"Literally laying in the ward as I write this. Utterly fantastic! Every single person genuinelly cares. ', '2018-09-26 15:37:57', 1),
(14, 'The facilities are good in this hospital !..', '2018-09-30 06:03:56', 7);

-- --------------------------------------------------------

--
-- Table structure for table `hms_inventory`
--

CREATE TABLE `hms_inventory` (
  `id` int(5) NOT NULL,
  `item_name` varchar(50) DEFAULT NULL,
  `qty` int(5) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_user` int(5) DEFAULT NULL,
  `updated_date` varchar(30) DEFAULT NULL,
  `status_code` varchar(20) DEFAULT 'PENDING'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hms_inventory`
--

INSERT INTO `hms_inventory` (`id`, `item_name`, `qty`, `created_date`, `created_user`, `updated_date`, `status_code`) VALUES
(8, 'Cancer antigen 125', 50, '2018-09-28 08:46:16', 1, NULL, 'REJECT'),
(9, 'Test Tubes', 500, '2018-09-28 08:46:28', 1, NULL, 'APPROVE'),
(10, 'Microscope', 140, '2018-09-30 06:12:16', 4, NULL, 'PENDING'),
(11, 'Lab Kit', 15, '2018-09-30 08:59:38', 4, NULL, 'PENDING'),
(12, 'Test Tubes', 12, '2018-09-30 08:59:53', 4, NULL, 'PENDING'),
(13, 'Chairs', 15, '2018-09-30 09:00:06', 4, NULL, 'PENDING'),
(14, 'Beds', 7, '2018-09-30 09:00:18', 4, NULL, 'PENDING'),
(15, 'Lab Tables', 5, '2018-09-30 09:00:30', 4, NULL, 'PENDING'),
(16, 'masks', 3, '2018-09-30 09:00:41', 4, NULL, 'PENDING'),
(17, 'Research equipment', 14, '2018-09-30 09:01:24', 4, NULL, 'PENDING'),
(18, 'Furniture', 48, '2018-09-30 09:36:13', 4, NULL, 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `hms_lab_test`
--

CREATE TABLE `hms_lab_test` (
  `id` int(5) NOT NULL,
  `lab_test` varchar(50) DEFAULT NULL,
  `center_id` int(5) DEFAULT NULL,
  `description` text,
  `test_cost` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hms_lab_test`
--

INSERT INTO `hms_lab_test` (`id`, `lab_test`, `center_id`, `description`, `test_cost`) VALUES
(1, 'Opioid Testing', 2, 'Prior to testing, you should declare any prescription or over-the-counter medications or supplements that you are taking so that test results will be correctly interpreted                                        ', '1500.00'),
(2, 'Widal Test', 5, 'None                                      ', '1700.00'),
(3, 'Hydroxyprogesterone', 1, 'None, but an early morning collection may be requested                                        ', '1200.00'),
(4, 'Herpes Testing', 1, 'None                                       ', '1600.00'),
(5, 'Arbovirus Testing', 4, 'A blood sample drawn from a vein in your arm or cerebrospinal fluid collected from a spinal tap                                        ', '1350.00'),
(6, 'Blood Gases', 3, 'Typically, none; however, if you are on oxygen therapy, the O2 may either be turned off for 20 to 30 minutes before the collection for a \"Room Air\" test                                        ', '1800.00'),
(7, 'Celiac Disease  Tests', 6, 'you should continue to eat foods that contain gluten for a time period                                        ', '1000.00'),
(8, 'Hepatitis A Testing', 8, 'None                                        ', '1200.00'),
(9, 'Protein C and Protein ', 7, 'You must wait at least 10 days after a thrombotic episode and be off oral warfarin (CoumadinÂ®) anticoagulant therapy for 2 weeks before having this test done                                        ', '1350.00'),
(10, 'Hepatitis C Testing', 10, 'You may be instructed to fast for 10 to 12 hours prior to this test.                                        ', '1450.00'),
(11, 'BLood Test', 8, '                                       sdffsdsgd ', '2000.00');

-- --------------------------------------------------------

--
-- Table structure for table `hms_opd_appointment`
--

CREATE TABLE `hms_opd_appointment` (
  `id` int(5) NOT NULL,
  `patient_id` int(5) DEFAULT NULL,
  `doctor_id` int(5) DEFAULT NULL,
  `appointment_date` varchar(30) DEFAULT NULL,
  `status_code` varchar(20) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_user` int(5) DEFAULT NULL,
  `updated_user` int(5) DEFAULT NULL,
  `fee` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hms_opd_appointment`
--

INSERT INTO `hms_opd_appointment` (`id`, `patient_id`, `doctor_id`, `appointment_date`, `status_code`, `created_date`, `created_user`, `updated_user`, `fee`) VALUES
(1, 2, 2, '2018-10-04', 'APPROVE', '2018-09-30 09:37:49', 2, 6, 1500),
(2, 1, 2, '2018-10-24', 'APPROVE', '2018-09-26 07:22:01', 1, 6, 1500),
(3, 1, 4, '2018-11-04', 'REJECT', '2018-09-30 06:13:02', 1, 6, 1100),
(4, 4, 2, '2018-11-04', 'OPEN', '2018-09-26 15:48:52', 4, NULL, 1500),
(5, 4, 4, '2018-10-19', 'OPEN', '2018-09-26 15:49:54', 4, NULL, 1100),
(6, 1, 2, '2018-10-04', 'OPEN', '2018-09-26 16:19:33', 1, NULL, 1500),
(7, 1, 4, '2018-10-05', 'APPROVE', '2018-09-26 16:24:14', 1, 6, 1100),
(8, 7, 7, '2018-10-05', 'OPEN', '2018-09-30 06:04:27', 7, NULL, 1400),
(9, 1, 2, '2018-10-24', 'OPEN', '2018-09-30 06:40:04', 1, NULL, 1500);

-- --------------------------------------------------------

--
-- Table structure for table `hms_patient`
--

CREATE TABLE `hms_patient` (
  `id` int(5) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `dob` varchar(25) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pword` text,
  `status_code` varchar(20) DEFAULT 'ACTIVE',
  `user_role` varchar(20) DEFAULT 'PATIENT',
  `created_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hms_patient`
--

INSERT INTO `hms_patient` (`id`, `first_name`, `last_name`, `telephone`, `dob`, `email`, `pword`, `status_code`, `user_role`, `created_date`) VALUES
(1, 'Pubudu', 'Dilshan', '0713620406', '1997/02/26', 'pubududilshan97@gmail.com', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 'ACTIVE', 'PATIENT', '2018-09-26 06:41:14'),
(2, 'Disna', 'Bandara', '0717020549', '1997/03/23', 'disnadanajaya@gmail.com', '*2A032F7C5BA932872F0F045E0CF6B53CF702F2C5', 'ACTIVE', 'PATIENT', '2018-09-26 15:46:24'),
(3, 'Uditha', 'Rathnayake', '0778222836', '1983/02/05', 'Uditha83@gmail.com', '*E710DC2512FCF6F18FE0D652B53290DCB11F3334', 'ACTIVE', 'PATIENT', '2018-09-26 15:47:22'),
(4, 'Manjula', 'Wickramasinghe', '0757020568', '1987/09/11', 'Manjula87@gmail.com', '*4C943D9B7E2F55066E8F7C13F8DCF8F67EEDC931', 'ACTIVE', 'PATIENT', '2018-09-26 15:48:15'),
(5, 'Chathura', 'Weerasinghe', '0772247762', '1983/02/05', 'chathurakdy.sliit@gmail.com', '*49DA781724763770869D8619EC543F0CD961518B', 'ACTIVE', 'PATIENT', '2018-09-27 19:22:26'),
(6, 'Charith', 'Nawarathne', '0713620405', '1995-04-23', 'charith@gmail.com', '*D98A27224B00906383AA6763CD46A1E563A4330F', 'ACTIVE', 'PATIENT', '2018-09-30 05:59:16'),
(7, 'Chanuka', 'Welagedara', '0717020515', '1997/02/05', 'chanuka97@gmail.com', '*34C31E4229971202F4016E74060C5F246F2D872E', 'ACTIVE', 'PATIENT', '2018-09-30 06:02:20'),
(8, 'Madushani', 'Sarathchandra', '0812423054', '1987/10/18', 'madu@gmail.com', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 'ACTIVE', 'PATIENT', '2018-09-30 07:35:28'),
(9, 'Indika', 'Dissanayake', '0711738100', '1994/4/29', 'indika@gmail.com', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 'ACTIVE', 'PATIENT', '2018-09-30 07:38:57'),
(10, 'Samantha', 'Sirithunga', '0774865352', '2018-09-12', 'samantha123@gmail.com', '*3597BDBAE399F9228333E0B541674AD5AD43B64F', 'ACTIVE', 'PATIENT', '2018-09-30 09:21:47'),
(11, 'charitha', 'Dilsha', '0713620406', '1997/02/26', 'charith97@gmail.com', '*288A7937D7A48B2C8148F1849013DBD8AA443263', 'ACTIVE', 'PATIENT', '2018-09-30 09:25:56');

-- --------------------------------------------------------

--
-- Table structure for table `hms_purchase`
--

CREATE TABLE `hms_purchase` (
  `id` int(5) NOT NULL,
  `purchasing_item` varchar(50) DEFAULT NULL,
  `qty` int(5) DEFAULT NULL,
  `status_code` varchar(20) DEFAULT 'PENDING',
  `updated_by` int(5) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_user` int(5) DEFAULT NULL,
  `amount` double(10,2) DEFAULT '0.00',
  `comment` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hms_purchase`
--

INSERT INTO `hms_purchase` (`id`, `purchasing_item`, `qty`, `status_code`, `updated_by`, `created_date`, `created_user`, `amount`, `comment`) VALUES
(1, 'Furniture', 50, 'PENDING', NULL, '2018-09-27 18:53:55', 1, 0.00, NULL),
(2, 'Chairs', 25, 'COMPLETE', 3, '2018-09-27 18:54:11', 1, 25000.00, NULL),
(3, 'Lab kit', 10, 'PENDING', NULL, '2018-09-30 06:00:04', 1, 0.00, NULL),
(4, 'Bed', 15, 'COMPLETE', 3, '2018-09-30 08:54:33', 1, 100.00, NULL),
(5, 'fan', 12, 'PENDING', NULL, '2018-09-30 08:54:44', 1, 0.00, NULL),
(6, 'syringe', 60, 'PENDING', NULL, '2018-09-30 08:55:00', 1, 0.00, NULL),
(7, 'table', 5, 'PENDING', NULL, '2018-09-30 08:55:14', 1, 0.00, NULL),
(8, 'Beekers', 5, 'REJECT', 3, '2018-09-30 08:55:53', 1, 0.00, 'no money'),
(9, 'Celine Bottles', 50, 'PENDING', NULL, '2018-09-30 08:56:07', 1, 0.00, NULL),
(10, 'Test tubes', 12, 'PENDING', NULL, '2018-09-30 08:56:54', 1, 0.00, NULL),
(11, 'Laptops', 2, 'PENDING', NULL, '2018-09-30 09:23:02', 1, 0.00, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hms_specialist`
--

CREATE TABLE `hms_specialist` (
  `id` int(5) NOT NULL,
  `specialist` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hms_specialist`
--

INSERT INTO `hms_specialist` (`id`, `specialist`) VALUES
(1, 'Addiction physicians'),
(2, 'Cardiologists'),
(3, 'Diabetologists'),
(4, 'Emergency physicians'),
(5, 'Hematologists'),
(6, 'Neurologists'),
(7, 'Pharmacologists'),
(8, 'Sports physicians'),
(9, 'Urologists'),
(10, 'Virologists');

-- --------------------------------------------------------

--
-- Table structure for table `hms_test`
--

CREATE TABLE `hms_test` (
  `id` int(5) UNSIGNED NOT NULL,
  `createddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `pword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hms_test`
--

INSERT INTO `hms_test` (`id`, `createddate`, `fname`, `lname`, `pword`) VALUES
(1, '2018-09-29 16:22:21', 'ravi', 'fernando', '123'),
(2, '2018-09-29 16:23:29', 'ravix', 'fernandox', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257');

-- --------------------------------------------------------

--
-- Table structure for table `hms_user`
--

CREATE TABLE `hms_user` (
  `id` int(5) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `nic` varchar(12) DEFAULT NULL,
  `pword` text,
  `user_role` varchar(20) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `empno` varchar(10) DEFAULT NULL,
  `status_code` varchar(20) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_user` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hms_user`
--

INSERT INTO `hms_user` (`id`, `first_name`, `last_name`, `nic`, `pword`, `user_role`, `telephone`, `email`, `empno`, `status_code`, `created_date`, `created_user`) VALUES
(1, 'Deneth', 'Perera', '950800160V', '*52274AC20006DFD7C231B12067A2D19BB98DFE8F', 'ADMIN', '0774937372', 'denethanjana@gmail.com', '0001', 'ACTIVE', '2018-07-27 15:50:34', 1),
(2, 'Dilsha', 'Sandeepani', '907390373V', '*25C7700CF6224161D1526C3D0062116AE4FCD2BE', 'PHARMACIST', '0702362480', 'dilsha.phhd@gmail.com', '0002', 'ACTIVE', '2018-09-12 08:58:48', 1),
(3, 'Akila', 'Janakantha', '971444185V', '*583C0A321CEDF011353D089C32D472C0D12FB800', 'ACCOUNTANT', '0767617305', 'akila@gmail.com', '0003', 'ACTIVE', '2018-09-12 10:58:30', 1),
(4, 'Sachintha', 'Samindika', '952353098V', '*D7CBCBC7E812DC279B3F00DD4706E0F99A8D4975', 'LAB', '0717319119', 'sachintha@gmail.com', '0004', 'ACTIVE', '2018-09-13 09:11:45', 1),
(5, 'Buwanake', 'Senevirathne', '830963510V', '*16448D465E1AE6FCE0AE0D704188B5BB1FED9715', 'TRANSPORT', '0712807171', 'buwanake83@gm.com', '0005', 'ACTIVE', '2018-09-17 06:20:27', 1),
(6, 'Ishara', 'Kumarasinghe', '960520670V', '*0BE1C4B24689B611E11618E4DC330D4B909C7FE8', 'OPD', '0778222836', 'Ishara404@gmail.com', '0006', 'ACTIVE', '2018-09-17 06:44:02', 1),
(7, 'Dimuth', 'Gunawardhana', '921331380V', '*B2FE603DC0F46A8F4636515BC16EB187D7F1927D', 'WARD', '0771140556', 'gunawardhandimuth@gmail.com', '0007', 'ACTIVE', '2018-09-17 07:33:01', 1),
(8, 'Pubudu', 'Dilshan', '970570586', '*DCDF2D0C77E2DF1C5A95B314EC411976E49F4C60', 'LAB', '0713620406', 'pubududilshan97@gmail.com', NULL, 'ACTIVE', '2018-09-30 05:56:24', 1),
(9, 'Mr.Sankalpa', 'Amarathunga', '945875250', '*B1929597C2A69EB78288CF21FCEE72ECF9B9BF8A', 'LAB', '077 4578547', 'amarathunga123@gmail.com', NULL, 'ACTIVE', '2018-09-30 09:19:07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hms_user_role`
--

CREATE TABLE `hms_user_role` (
  `user_role` varchar(20) NOT NULL,
  `description` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hms_user_role`
--

INSERT INTO `hms_user_role` (`user_role`, `description`) VALUES
('ACCOUNTANT', 'Accountant'),
('ADMIN', 'Administrator'),
('DOCTOR', 'Doctor'),
('LAB', 'LAB Inchage'),
('OPD', 'OPD User'),
('PATIENT', 'Patient'),
('PHARMACIST', 'Pharmacist'),
('TRANSPORT', 'Transport Manager'),
('WARD', 'Ward Management');

-- --------------------------------------------------------

--
-- Table structure for table `hms_vehicle`
--

CREATE TABLE `hms_vehicle` (
  `id` int(5) NOT NULL,
  `vehicle_number` varchar(30) DEFAULT NULL,
  `status_code` varchar(50) DEFAULT 'ACTIVE',
  `created_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hms_vehicle`
--

INSERT INTO `hms_vehicle` (`id`, `vehicle_number`, `status_code`, `created_date`) VALUES
(1, 'CPGR 7171', 'ACTIVE', '2018-09-29 20:36:17'),
(2, 'CATF 6974', 'ACTIVE', '2018-09-29 20:37:29'),
(3, 'JGLL 5894', 'ACTIVE', '2018-09-29 20:38:13'),
(4, 'KHTD B597', 'ACTIVE', '2018-09-29 20:38:39'),
(5, 'BNKN 8525', 'ACTIVE', '2018-09-29 20:40:04'),
(6, 'HKTY 8988', 'ACTIVE', '2018-09-29 20:40:28'),
(7, 'QWBT 1158', 'ACTIVE', '2018-09-29 20:40:57'),
(8, 'NPTY 6569', 'ACTIVE', '2018-09-29 20:43:47'),
(9, 'CDMK 5574', 'ACTIVE', '2018-09-29 20:46:39'),
(10, 'CQG H2456', 'ACTIVE', '2018-09-29 20:47:23'),
(11, 'CPKN 0609', 'DEACTIVE', '2018-09-30 06:14:52'),
(12, 'CAT-7845', 'DEACTIVE', '2018-09-30 09:42:14'),
(13, 'GLL 5894', 'ACTIVE', '2018-09-30 10:27:13');

-- --------------------------------------------------------

--
-- Table structure for table `hms_vehicle_request`
--

CREATE TABLE `hms_vehicle_request` (
  `id` int(5) NOT NULL,
  `request_by` int(5) DEFAULT NULL,
  `comment` text,
  `status_code` varchar(20) DEFAULT 'PENDING',
  `vehicle_id` int(5) DEFAULT '0',
  `created_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_user` int(5) DEFAULT NULL,
  `datetime_need` varchar(50) DEFAULT NULL,
  `driver_name` varchar(100) DEFAULT NULL,
  `flag_unique` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hms_vehicle_request`
--

INSERT INTO `hms_vehicle_request` (`id`, `request_by`, `comment`, `status_code`, `vehicle_id`, `created_time`, `created_user`, `datetime_need`, `driver_name`, `flag_unique`) VALUES
(1, 7, 'Need a ambulance as soon as possible to Matale', 'COMPLETE', 2, '2018-09-29 20:53:05', 7, '2018-10-04T13:00', 'Kumara', '2018-10-04T13:00-2'),
(2, 5, 'Immediately assist to Kandy hospital patient in need.', 'COMPLETE', 3, '2018-09-29 20:54:39', 5, '2018-10-06T14:00', 'Nuwan', '2018-10-06T14:00-3'),
(3, 6, 'Emergency  Supplies Transfer to Anuradhapura', 'REJECT', 0, '2018-09-29 20:56:33', 6, '2018-10-06T15:00', NULL, NULL),
(4, 6, 'Patient Transfer  form kandy to Colombo', 'COMPLETE', 4, '2018-09-29 20:57:19', 6, '2018-10-14T09:00', 'Charith ', '2018-10-14T09:00-4'),
(5, 5, 'Bring the Patient from colombo to Peradeniya Hospital for immediate operation ', 'COMPLETE', 1, '2018-09-29 21:04:08', 5, '2018-10-16T10:00', 'Nuwan', '2018-10-16T10:00-1'),
(6, 6, 'Patient Transfer from kandy to colombo ', 'REJECT', 0, '2018-09-30 06:13:50', 6, '2018-10-25T13:00', NULL, NULL),
(7, 7, 'Emergency Requirment for patient delivery from kegalle to kandy ', 'PENDING', 0, '2018-09-30 06:18:03', 7, '2018-11-02T15:00', NULL, NULL),
(8, 6, 'kandy to kurunegala', 'PENDING', 0, '2018-09-30 09:39:19', 6, '2018-09-30T05:30', NULL, NULL),
(9, 7, 'NAWALAPITIYA ', 'PENDING', 0, '2018-09-30 09:49:55', 7, '2018-09-30T14:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hms_ward`
--

CREATE TABLE `hms_ward` (
  `ward_no` int(5) NOT NULL,
  `ward_name` varchar(50) DEFAULT NULL,
  `doctor_incharge` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hms_ward_patient`
--

CREATE TABLE `hms_ward_patient` (
  `id` int(5) NOT NULL,
  `ward_id` int(5) DEFAULT NULL,
  `patient_id` int(5) DEFAULT NULL,
  `comment` varchar(250) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_user` int(5) DEFAULT NULL,
  `status_code` varchar(20) DEFAULT 'ADMIT'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hms_ward_staff`
--

CREATE TABLE `hms_ward_staff` (
  `ward_id` int(5) NOT NULL,
  `staff_id` int(5) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `responsibility` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hms_center`
--
ALTER TABLE `hms_center`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `NewIndex1` (`center_name`);

--
-- Indexes for table `hms_cost`
--
ALTER TABLE `hms_cost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hms_doctor`
--
ALTER TABLE `hms_doctor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `NewIndex1` (`nic`);

--
-- Indexes for table `hms_doctor_appointment`
--
ALTER TABLE `hms_doctor_appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hms_doctor_availability`
--
ALTER TABLE `hms_doctor_availability`
  ADD PRIMARY KEY (`doctor_id`,`day_available`,`from_time`);

--
-- Indexes for table `hms_doctor_salary`
--
ALTER TABLE `hms_doctor_salary`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `NewIndex1ss` (`flag_unique`);

--
-- Indexes for table `hms_drug`
--
ALTER TABLE `hms_drug`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hms_employee_salary`
--
ALTER TABLE `hms_employee_salary`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `NewIndex1` (`user_id`,`salary_month`);

--
-- Indexes for table `hms_feedback`
--
ALTER TABLE `hms_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hms_inventory`
--
ALTER TABLE `hms_inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hms_lab_test`
--
ALTER TABLE `hms_lab_test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hms_opd_appointment`
--
ALTER TABLE `hms_opd_appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hms_patient`
--
ALTER TABLE `hms_patient`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `NewIndex1_email` (`email`);

--
-- Indexes for table `hms_purchase`
--
ALTER TABLE `hms_purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hms_specialist`
--
ALTER TABLE `hms_specialist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hms_test`
--
ALTER TABLE `hms_test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hms_user`
--
ALTER TABLE `hms_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `NewIndex1` (`nic`);

--
-- Indexes for table `hms_user_role`
--
ALTER TABLE `hms_user_role`
  ADD PRIMARY KEY (`user_role`);

--
-- Indexes for table `hms_vehicle`
--
ALTER TABLE `hms_vehicle`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `NewIndex1` (`vehicle_number`);

--
-- Indexes for table `hms_vehicle_request`
--
ALTER TABLE `hms_vehicle_request`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `NewIndex1_uni` (`flag_unique`);

--
-- Indexes for table `hms_ward`
--
ALTER TABLE `hms_ward`
  ADD PRIMARY KEY (`ward_no`),
  ADD UNIQUE KEY `NewIndex1` (`ward_name`);

--
-- Indexes for table `hms_ward_patient`
--
ALTER TABLE `hms_ward_patient`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `NewIndex1` (`ward_id`,`patient_id`);

--
-- Indexes for table `hms_ward_staff`
--
ALTER TABLE `hms_ward_staff`
  ADD PRIMARY KEY (`ward_id`,`staff_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hms_center`
--
ALTER TABLE `hms_center`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `hms_cost`
--
ALTER TABLE `hms_cost`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hms_doctor`
--
ALTER TABLE `hms_doctor`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hms_doctor_appointment`
--
ALTER TABLE `hms_doctor_appointment`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `hms_doctor_salary`
--
ALTER TABLE `hms_doctor_salary`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hms_drug`
--
ALTER TABLE `hms_drug`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `hms_employee_salary`
--
ALTER TABLE `hms_employee_salary`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hms_feedback`
--
ALTER TABLE `hms_feedback`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `hms_inventory`
--
ALTER TABLE `hms_inventory`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `hms_lab_test`
--
ALTER TABLE `hms_lab_test`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hms_opd_appointment`
--
ALTER TABLE `hms_opd_appointment`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hms_patient`
--
ALTER TABLE `hms_patient`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hms_purchase`
--
ALTER TABLE `hms_purchase`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hms_specialist`
--
ALTER TABLE `hms_specialist`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `hms_test`
--
ALTER TABLE `hms_test`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hms_user`
--
ALTER TABLE `hms_user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hms_vehicle`
--
ALTER TABLE `hms_vehicle`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `hms_vehicle_request`
--
ALTER TABLE `hms_vehicle_request`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hms_ward`
--
ALTER TABLE `hms_ward`
  MODIFY `ward_no` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hms_ward_patient`
--
ALTER TABLE `hms_ward_patient`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
