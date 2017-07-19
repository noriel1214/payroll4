-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2017 at 06:12 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(30) NOT NULL,
  `admin_password` varchar(128) NOT NULL,
  `admin_salt` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`, `admin_salt`) VALUES
(1, 'admin', 'c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec', '$2y$11$.phSWInHPAB17yH6u3kY/eWuhfJQq/9lB1lInx98fnUb6R.2t.U6S');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `employee_name` varchar(30) NOT NULL,
  `employee_department` varchar(30) NOT NULL,
  `employee_designation` varchar(30) NOT NULL,
  `employee_phone` varchar(12) NOT NULL,
  `employee_address` text NOT NULL,
  `employee_salary` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `payment_id`, `status_id`, `employee_name`, `employee_department`, `employee_designation`, `employee_phone`, `employee_address`, `employee_salary`) VALUES
(1, 2, 1, 'Antonio Banderas', 'Art', 'Officer', '912361232737', 'Panama', 1),
(2, 2, 3, 'Nicolas Cage', 'Creative', 'Officer', '812131231942', 'USA', 1),
(3, 3, 3, 'Tom Hardy', 'Accountant', 'Director', '23912763912', 'Denmark', 1),
(4, 1, 2, 'Rafsan', 'CSE', 'Engineer', '12819238092', 'Dhaka', 1),
(5, 3, 2, 'Antonio Banderas', 'Media', 'Officer', '912361232737', 'Bolivia', 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `text` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `text`) VALUES
(1, 'This is new', 'this-is-new', 'This is the latest news that should be saved into the database'),
(2, 'Another news item', 'another-news-item', 'This is a second news item to be saved into the database'),
(3, 'My Noriel News', 'my-noriel-news', 'asdfasd  asdfasdf asdfasdf'),
(4, 'My Noriel News', 'my-noriel-news', 'asdfasd  asdfasdf asdfasdf'),
(5, 'My Noriel News', 'my-noriel-news', 'asdfasd  asdfasdf asdfasdf'),
(6, 'My Noriel News', 'my-noriel-news', 'asdfasd  asdfasdf asdfasdf'),
(7, 'wwww', 'wwww', 'wwwww'),
(8, 'Noriel', 'noriel', 'Galang');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `payment_type` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `payment_type`) VALUES
(1, 'Hourly'),
(2, 'Contractual'),
(3, 'Daily');

-- --------------------------------------------------------

--
-- Table structure for table `pr_allowance`
--

CREATE TABLE `pr_allowance` (
  `emp_id` int(11) NOT NULL,
  `pay_month` int(11) NOT NULL,
  `pay_year` int(11) NOT NULL,
  `allowance_type` varchar(100) NOT NULL,
  `allowance_amt` decimal(10,0) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pr_application`
--

CREATE TABLE `pr_application` (
  `application_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  `application_date` date NOT NULL,
  `status_id` int(11) NOT NULL,
  `applicant_name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pr_application`
--

INSERT INTO `pr_application` (`application_id`, `position_id`, `application_date`, `status_id`, `applicant_name`) VALUES
(1, 2, '2017-07-26', 2, '111'),
(2, 19, '2017-07-26', 4, 'bnmnbvnm'),
(3, 19, '2017-07-26', 4, '0'),
(4, 19, '2017-07-26', 4, '0'),
(5, 9, '2017-08-01', 4, '0'),
(6, 3, '2017-07-26', 5, 'tytryetry'),
(7, 3, '2017-07-26', 3, 'gggggggg'),
(8, 15, '2017-08-02', 4, '0'),
(9, 15, '2017-08-02', 4, '0'),
(10, 1, '2017-07-11', 2, 'adfasdfsdf'),
(11, 1, '2017-07-11', 3, 'cccccccccc'),
(12, 1, '2017-06-27', 2, '0'),
(13, 1, '2017-06-27', 2, '0'),
(14, 1, '2017-07-27', 6, 'wwwwwwwww'),
(15, 1, '2017-07-27', 6, '0'),
(16, 1, '2017-07-19', 1, '0'),
(17, 1, '2017-07-19', 1, 'rtirm sdfgsd '),
(18, 1, '2017-07-13', 1, '0'),
(19, 1, '2017-07-26', 1, 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqq'),
(20, 1, '2017-07-13', 1, 'rqwerqwer'),
(21, 1, '2017-07-13', 1, 'rqwerqwer'),
(22, 1, '2017-07-20', 1, 'vbvbv'),
(23, 1, '2017-07-14', 1, '111'),
(24, 1, '2017-07-12', 1, 'vvvv'),
(25, 1, '2017-07-12', 1, 'vvvv'),
(26, 1, '2017-07-21', 3, 'eqer adsfga df');

-- --------------------------------------------------------

--
-- Table structure for table `pr_award`
--

CREATE TABLE `pr_award` (
  `award_id` int(11) NOT NULL,
  `award_title` varchar(100) NOT NULL,
  `gift` varchar(100) NOT NULL,
  `award_amt` decimal(10,0) NOT NULL,
  `emp_awarded` varchar(100) NOT NULL,
  `award_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pr_deduction`
--

CREATE TABLE `pr_deduction` (
  `emp_id` int(11) NOT NULL,
  `pay_month` int(11) NOT NULL,
  `pay_year` int(11) NOT NULL,
  `deduction_type` varchar(100) NOT NULL,
  `deduction_amt` decimal(10,0) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pr_department`
--

CREATE TABLE `pr_department` (
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(100) NOT NULL,
  `dept_designation` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pr_department`
--

INSERT INTO `pr_department` (`dept_id`, `dept_name`, `dept_designation`) VALUES
(1, 'rrrrrr', 'rrrrrr'),
(2, 'vvvvvvvvvv', 'vvvvvvvvvvvv'),
(3, 'gg', 'gg'),
(4, 'asdfa', 'asdfdf'),
(5, 'twertw', 'wertwert'),
(6, 'twertw', 'wertwert'),
(7, 'tttttttttttttttt', 'tttttttttttttttttttt'),
(8, 'asdfasdf', 'adfasdf'),
(9, 'fasdfasdf', 'dfasdfasdf'),
(10, 'asdf', 'asdfasg'),
(11, 'asdf', 'asdfasdf'),
(12, 'qqqq', 'qqq'),
(13, 'wwwwwwwwwwwww', 'wwwwwwwwwwwwwwww'),
(14, 'wwwwwwwwwwwww', 'wwwwwwwwwwwwwwww'),
(15, 'xxxxxxxxxx', 'xxxxxxxxxxxxxxxxxxxxx'),
(16, 'xxxxxxxxxx', 'xxxxxxxxxxxxxxxxxxxxx'),
(17, 'qq', 'qqqqqqq');

-- --------------------------------------------------------

--
-- Table structure for table `pr_employee`
--

CREATE TABLE `pr_employee` (
  `emp_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `dept_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pr_employee`
--

INSERT INTO `pr_employee` (`emp_id`, `firstname`, `lastname`, `email`, `phone`, `dept_id`) VALUES
(1, 'Noriel', 'Galang', 'crisdorschner@yahoo.com', '6094243702', 13),
(2, 'Noriel', 'Galang', 'crisdorschner@yahoo.com', '6094243702', 7),
(3, 'Noriel', 'Galang', 'crisdorschner@yahoo.com', '6094243702', 1),
(4, 'zxv', 'asdfasdf', 'noriel_galang@ml.com', '123456678', 17),
(5, 'zxv', 'asdfasdf', 'noriel1214@comcast.net', '834234234234', 10),
(6, 'Noriel', 'Galang', 'crisdorschner@yahoo.com', '6094243702', 6),
(7, 'asdfadgdf', 'fdghdhdfgh', 'noriel1214@comcast.net', '834234234234', 4),
(8, 'qqqqqqqqqqqqq', 'qqqqqqqqqqqqqqq', 'demo@shiftsystems.net', '6094243702', 2),
(9, 'Darlene', 'Galang', 'darlene@yahoo.com', '834234234234', 0),
(10, 'Darlene', 'Galang', 'darlene@yahoo.com', '834234234234', 0),
(11, 'Darlene', 'Galang', 'darlene@yahoo.com', '834234234234', 16),
(12, 'Krista', 'Galang', 'krista@gmail.com', '34750932452345', 0),
(13, 'Krista', 'Galang', 'krista@gmail.com', '34750932452345', 0),
(14, 'Krista', 'Galang', 'krista@gmail.com', '34750932452345', 0),
(15, 'Krista', 'Galang', 'krista@gmail.com', '34750932452345', 0),
(16, 'Krista', 'Galang', 'krista@gmail.com', '34750932452345', 0),
(17, 'Krista', 'Galang', 'krista@gmail.com', '34750932452345', 0),
(18, 'Krista', 'Galang', 'krista@gmail.com', '34750932452345', 0),
(19, 'Krista', 'Galang', 'krista@gmail.com', '34750932452345', 0),
(20, 'Krista', 'Galang', 'krista@gmail.com', '34750932452345', 0),
(21, 'Krista', 'Galang', 'krista@gmail.com', '34750932452345', 0),
(22, 'Krista', 'Galang', 'krista@gmail.com', '34750932452345', 0),
(23, 'Krista', 'Galang', 'krista@gmail.com', '34750932452345', 0),
(24, 'Krista', 'Galang', 'krista@gmail.com', '34750932452345', 0),
(25, 'Krista', 'Galang', 'krista@gmail.com', '34750932452345', 0),
(26, 'Krista', 'Galang', 'krista@gmail.com', '34750932452345', 0),
(27, 'Krista', 'Galang', 'krista@gmail.com', '34750932452345', 0),
(28, 'Krista', 'Galang', 'krista@gmail.com', '34750932452345', 0),
(29, 'Krista', 'Galang', 'krista@gmail.com', '34750932452345', 0),
(30, 'Krista', 'Galang', 'krista@gmail.com', '34750932452345', 0),
(31, 'Krista', 'Galang', 'krista@gmail.com', '34750932452345', 0),
(32, 'Krista', 'Galang', 'krista@gmail.com', '34750932452345', 0),
(33, 'Krista', 'Galang', 'krista@gmail.com', '34750932452345', 0),
(34, 'Krista', 'Galang', 'krista@gmail.com', '34750932452345', 0),
(35, 'Krista', 'Galang', 'krista@gmail.com', '34750932452345', 0),
(36, 'Krista', 'Galang', 'krista@gmail.com', '34750932452345', 0),
(37, 'Krista', 'Galang', 'krista@gmail.com', '34750932452345', 3),
(38, 'Noriel', 'Galang', 'noriel1214@comcast.net', '', 0),
(39, 'Noriel', 'Galang', 'noriel1214@comcast.net', '', 0),
(40, 'Noriel', 'Galang', 'norielsg1214@gmail.com', '', 0),
(41, 'Noriel', 'Galang', 'noriel_galang@ml.com', '', 0),
(42, 'Noriel', 'Galang', 'noriel_galang@ml.com', '', 0),
(43, 'Noriel', 'Galang', 'noriel1214@comcast.net', '', 0),
(44, 'Noriel', 'Galang', 'noriel1214@comcast.net', '', 0),
(45, 'Noriel', 'Galang', 'noriel1214@comcast.net', '', 0),
(46, 'Noriel', 'Galang', 'noriel1214@comcast.net', '', 0),
(47, 'asdfasdf', 'asdfasdf', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pr_expense`
--

CREATE TABLE `pr_expense` (
  `expense_id` int(11) NOT NULL,
  `expense_title` varchar(100) NOT NULL,
  `expense_desc` varchar(200) NOT NULL,
  `expense_amt` decimal(10,0) NOT NULL,
  `expense_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pr_leave`
--

CREATE TABLE `pr_leave` (
  `leave_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `leave_start_date` date NOT NULL,
  `leave_end_date` date NOT NULL,
  `leave_reason` varchar(300) NOT NULL,
  `leave_status_id` int(11) NOT NULL DEFAULT '1',
  `dept_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pr_leave`
--

INSERT INTO `pr_leave` (`leave_id`, `emp_id`, `leave_start_date`, `leave_end_date`, `leave_reason`, `leave_status_id`, `dept_id`) VALUES
(5, 1, '2017-07-28', '2017-08-01', '4545', 2, 0),
(6, 1, '2017-07-14', '2017-07-19', 'nnn', 3, 0),
(7, 1, '2017-07-27', '2017-07-25', '999', 2, 0),
(8, 1, '2017-07-27', '2017-07-25', '999', 2, 0),
(9, 1, '2017-07-27', '2017-07-25', '999', 1, 0),
(10, 1, '2017-07-27', '2017-07-25', '999', 1, 0),
(11, 1, '2017-07-27', '2017-07-25', '999', 1, 0),
(12, 1, '2017-07-27', '2017-07-25', '999', 1, 0),
(13, 1, '2017-07-27', '2017-07-25', '999', 2, 0),
(14, 1, '2017-07-27', '2017-07-25', '999', 3, 0),
(15, 1, '2017-07-27', '2017-07-25', '999', 1, 0),
(16, 1, '2017-07-27', '2017-07-25', '999', 1, 0),
(17, 1, '2017-07-27', '2017-07-25', '999', 1, 0),
(18, 1, '2017-07-27', '2017-07-25', '999', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pr_leave_status`
--

CREATE TABLE `pr_leave_status` (
  `leave_status_id` int(11) NOT NULL,
  `leave_status_name` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pr_leave_status`
--

INSERT INTO `pr_leave_status` (`leave_status_id`, `leave_status_name`) VALUES
(1, 'Pending'),
(2, 'Approved'),
(3, 'Declined');

-- --------------------------------------------------------

--
-- Table structure for table `pr_message`
--

CREATE TABLE `pr_message` (
  `msg_id` int(11) NOT NULL,
  `msg_recipient` varchar(200) NOT NULL,
  `msg_msg` varchar(500) NOT NULL,
  `msg_sender` int(11) NOT NULL,
  `msg_subject` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pr_notice`
--

CREATE TABLE `pr_notice` (
  `notice_id` int(11) NOT NULL,
  `notice_date` date NOT NULL,
  `notice_title` varchar(100) NOT NULL,
  `notice_status` int(11) NOT NULL,
  `notice_desc` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pr_payslip`
--

CREATE TABLE `pr_payslip` (
  `payslip_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `pay_month` int(11) NOT NULL,
  `pay_year` varchar(4) NOT NULL,
  `allowance_id` int(11) NOT NULL,
  `deduction_id` int(11) NOT NULL,
  `payslip_status_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pr_payslip`
--

INSERT INTO `pr_payslip` (`payslip_id`, `dept_id`, `emp_id`, `pay_month`, `pay_year`, `allowance_id`, `deduction_id`, `payslip_status_id`) VALUES
(1, 1, 3, 1, '2017', 0, 0, 0),
(2, 1, 3, 1, '2017', 0, 0, 0),
(3, 1, 3, 1, '2017', 0, 0, 0),
(4, 1, 3, 1, '2017', 0, 0, 0),
(5, 1, 3, 1, '2017', 0, 0, 0),
(6, 2, 8, 1, '2017', 0, 0, 0),
(7, 2, 8, 1, '2017', 0, 0, 0),
(8, 1, 3, 1, '2017', 0, 0, 0),
(9, 1, 3, 1, '2017', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pr_payslip_status`
--

CREATE TABLE `pr_payslip_status` (
  `payslip_status_id` int(11) NOT NULL,
  `payslip_status_name` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pr_payslip_status`
--

INSERT INTO `pr_payslip_status` (`payslip_status_id`, `payslip_status_name`) VALUES
(1, 'Unpaid'),
(2, 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `pr_settings`
--

CREATE TABLE `pr_settings` (
  `system_name` varchar(200) NOT NULL,
  `system_title` varchar(200) NOT NULL,
  `system_addr` varchar(200) NOT NULL,
  `system_phone` varchar(20) NOT NULL,
  `system_email` varchar(200) NOT NULL,
  `system_lang` varchar(100) NOT NULL,
  `system_logo` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pr_status`
--

CREATE TABLE `pr_status` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pr_status`
--

INSERT INTO `pr_status` (`status_id`, `status_name`) VALUES
(1, 'Applied'),
(2, 'On Review'),
(3, 'Interview'),
(4, 'Offered'),
(5, 'Hired'),
(6, 'Declined'),
(1, 'Applied'),
(2, 'On Review'),
(3, 'Interview'),
(4, 'Offered'),
(5, 'Hired'),
(6, 'Declined');

-- --------------------------------------------------------

--
-- Table structure for table `pr_vacancy`
--

CREATE TABLE `pr_vacancy` (
  `vacancy_id` int(11) NOT NULL,
  `position_name` varchar(100) NOT NULL,
  `num_of_vac` int(11) NOT NULL,
  `apply_last_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pr_vacancy`
--

INSERT INTO `pr_vacancy` (`vacancy_id`, `position_name`, `num_of_vac`, `apply_last_date`) VALUES
(1, 'qqqqq', 0, '2017-07-14'),
(2, 'asdf', 0, '2017-07-13'),
(3, 'afgag', 0, '2017-07-27'),
(4, 'asdf', 0, '2017-07-07'),
(5, 'rrr', 0, '0000-00-00'),
(6, 'rrr', 23, '2017-07-26'),
(7, 'zzzzzzzzzzzzzzzz', 0, '2016-09-09'),
(8, 'aaaaaaaaa', 11, '2018-09-09'),
(9, 'asdf', 0, '0000-00-00'),
(10, 'asdf', 0, '0000-00-00'),
(11, 'asdf', 111, '2017-08-04'),
(12, 'asdf', 0, '0000-00-00'),
(13, 'asdf', 0, '0000-00-00'),
(14, 'asdf', 0, '0000-00-00'),
(15, 'asdf', 0, '0000-00-00'),
(16, 'zzz', 0, '2017-06-28'),
(17, 'zzz', 0, '2017-06-28'),
(18, '1232 asdf ert  ', 0, '2017-06-28'),
(19, 'ewrt 5467 dfgj', 0, '2017-06-28'),
(20, 'zzz', 0, '2017-06-28');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `salary_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `salary_basic` varchar(10) NOT NULL,
  `salary_overtime` varchar(10) NOT NULL,
  `salary_other` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`salary_id`, `employee_id`, `salary_basic`, `salary_overtime`, `salary_other`) VALUES
(1, 1, '12500', '400', '3455'),
(2, 2, '14500', '2300', '1200'),
(3, 3, '23000', '7000', '9000'),
(4, 4, '12000', '722', '123');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `status_name`) VALUES
(1, 'Permanent'),
(2, 'Temporary'),
(3, 'Probation');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_application`
-- (See below for the actual view)
--
CREATE TABLE `vw_application` (
`application_id` int(11)
,`applicant_name` varchar(100)
,`application_date` date
,`status_id` int(11)
,`position_id` int(11)
,`status_name` varchar(30)
,`position_name` varchar(100)
);

-- --------------------------------------------------------

--
-- Structure for view `vw_application`
--
DROP TABLE IF EXISTS `vw_application`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_application`  AS  select `a`.`application_id` AS `application_id`,`a`.`applicant_name` AS `applicant_name`,`a`.`application_date` AS `application_date`,`a`.`status_id` AS `status_id`,`a`.`position_id` AS `position_id`,`b`.`status_name` AS `status_name`,`c`.`position_name` AS `position_name` from ((`pr_application` `a` left join `pr_status` `b` on((`a`.`status_id` = `b`.`status_id`))) left join `pr_vacancy` `c` on((`a`.`position_id` = `c`.`vacancy_id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`),
  ADD KEY `status_id` (`status_id`),
  ADD KEY `payment_id` (`payment_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `pr_application`
--
ALTER TABLE `pr_application`
  ADD PRIMARY KEY (`application_id`);

--
-- Indexes for table `pr_award`
--
ALTER TABLE `pr_award`
  ADD PRIMARY KEY (`award_id`);

--
-- Indexes for table `pr_department`
--
ALTER TABLE `pr_department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `pr_employee`
--
ALTER TABLE `pr_employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `pr_expense`
--
ALTER TABLE `pr_expense`
  ADD PRIMARY KEY (`expense_id`);

--
-- Indexes for table `pr_leave`
--
ALTER TABLE `pr_leave`
  ADD PRIMARY KEY (`leave_id`);

--
-- Indexes for table `pr_leave_status`
--
ALTER TABLE `pr_leave_status`
  ADD PRIMARY KEY (`leave_status_id`);

--
-- Indexes for table `pr_message`
--
ALTER TABLE `pr_message`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `pr_notice`
--
ALTER TABLE `pr_notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `pr_payslip`
--
ALTER TABLE `pr_payslip`
  ADD PRIMARY KEY (`payslip_id`);

--
-- Indexes for table `pr_payslip_status`
--
ALTER TABLE `pr_payslip_status`
  ADD PRIMARY KEY (`payslip_status_id`);

--
-- Indexes for table `pr_vacancy`
--
ALTER TABLE `pr_vacancy`
  ADD PRIMARY KEY (`vacancy_id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`salary_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pr_application`
--
ALTER TABLE `pr_application`
  MODIFY `application_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `pr_award`
--
ALTER TABLE `pr_award`
  MODIFY `award_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pr_department`
--
ALTER TABLE `pr_department`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `pr_employee`
--
ALTER TABLE `pr_employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `pr_expense`
--
ALTER TABLE `pr_expense`
  MODIFY `expense_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pr_leave`
--
ALTER TABLE `pr_leave`
  MODIFY `leave_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `pr_leave_status`
--
ALTER TABLE `pr_leave_status`
  MODIFY `leave_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pr_message`
--
ALTER TABLE `pr_message`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pr_notice`
--
ALTER TABLE `pr_notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pr_payslip`
--
ALTER TABLE `pr_payslip`
  MODIFY `payslip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pr_payslip_status`
--
ALTER TABLE `pr_payslip_status`
  MODIFY `payslip_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pr_vacancy`
--
ALTER TABLE `pr_vacancy`
  MODIFY `vacancy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `salary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `status` (`status_id`),
  ADD CONSTRAINT `employee_ibfk_2` FOREIGN KEY (`payment_id`) REFERENCES `payment` (`payment_id`);

--
-- Constraints for table `salary`
--
ALTER TABLE `salary`
  ADD CONSTRAINT `salary_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
