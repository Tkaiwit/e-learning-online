-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2019 at 12:44 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_e_learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_answer`
--

CREATE TABLE `tb_answer` (
  `answer_ID` mediumint(11) UNSIGNED NOT NULL,
  `course_ID` mediumint(11) UNSIGNED NOT NULL,
  `unit_ID` mediumint(11) UNSIGNED NOT NULL,
  `t1` tinyint(1) UNSIGNED NOT NULL,
  `t2` tinyint(1) UNSIGNED NOT NULL,
  `t3` tinyint(1) UNSIGNED NOT NULL,
  `t4` tinyint(1) UNSIGNED NOT NULL,
  `t5` tinyint(1) UNSIGNED NOT NULL,
  `t6` tinyint(1) UNSIGNED NOT NULL,
  `t7` tinyint(1) UNSIGNED NOT NULL,
  `t8` tinyint(1) UNSIGNED NOT NULL,
  `t9` tinyint(1) UNSIGNED NOT NULL,
  `t10` tinyint(1) UNSIGNED NOT NULL,
  `member_ID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_answer`
--

INSERT INTO `tb_answer` (`answer_ID`, `course_ID`, `unit_ID`, `t1`, `t2`, `t3`, `t4`, `t5`, `t6`, `t7`, `t8`, `t9`, `t10`, `member_ID`) VALUES
(1, 112622, 1, 4, 3, 2, 3, 3, 1, 4, 3, 4, 2, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_a_q`
--

CREATE TABLE `tb_a_q` (
  `aq_ID` mediumint(13) UNSIGNED NOT NULL,
  `course_ID` mediumint(13) UNSIGNED NOT NULL,
  `unit_ID` mediumint(13) UNSIGNED NOT NULL,
  `aq_detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_course`
--

CREATE TABLE `tb_course` (
  `course_ID` mediumint(11) NOT NULL,
  `course_Name` longtext NOT NULL,
  `member_ID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_course`
--

INSERT INTO `tb_course` (`course_ID`, `course_Name`, `member_ID`) VALUES
(112622, 'วิชาภาษาไทย', '1'),
(1143111, 'การเขียนโปรแกรมบนเว็บไซต์', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_member`
--

CREATE TABLE `tb_member` (
  `member_ID` varchar(100) NOT NULL,
  `member_Password` char(50) NOT NULL,
  `member_FName` char(120) NOT NULL,
  `member_LName` char(120) NOT NULL,
  `member_Class` tinyint(2) UNSIGNED DEFAULT NULL,
  `member_Status` tinyint(2) UNSIGNED NOT NULL,
  `member_Tel` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_member`
--

INSERT INTO `tb_member` (`member_ID`, `member_Password`, `member_FName`, `member_LName`, `member_Class`, `member_Status`, `member_Tel`) VALUES
('1', '1234', 'สมศักดิ์', 'ศรีสมัย', NULL, 1, '0978632412'),
('255', '1234', 'ธีรพงษ์', 'คงสวัสด์', 2, 2, '062345921');

-- --------------------------------------------------------

--
-- Table structure for table `tb_questions`
--

CREATE TABLE `tb_questions` (
  `question_ID` mediumint(11) NOT NULL,
  `course_ID` mediumint(11) NOT NULL,
  `unit_ID` mediumint(11) NOT NULL,
  `q1` varchar(255) NOT NULL,
  `q1_1` varchar(255) NOT NULL,
  `q1_2` varchar(255) NOT NULL,
  `q1_3` varchar(255) NOT NULL,
  `q1_4` varchar(255) NOT NULL,
  `q2` varchar(255) NOT NULL,
  `q2_1` varchar(255) NOT NULL,
  `q2_2` varchar(255) NOT NULL,
  `q2_3` varchar(255) NOT NULL,
  `q2_4` varchar(255) NOT NULL,
  `q3` varchar(255) NOT NULL,
  `q3_1` varchar(255) NOT NULL,
  `q3_2` varchar(255) NOT NULL,
  `q3_3` varchar(255) NOT NULL,
  `q3_4` varchar(255) NOT NULL,
  `q4` varchar(255) NOT NULL,
  `q4_1` varchar(255) NOT NULL,
  `q4_2` varchar(255) NOT NULL,
  `q4_3` varchar(255) NOT NULL,
  `q4_4` varchar(255) NOT NULL,
  `q5` varchar(255) NOT NULL,
  `q5_1` varchar(255) NOT NULL,
  `q5_2` varchar(255) NOT NULL,
  `q5_3` varchar(255) NOT NULL,
  `q5_4` varchar(255) NOT NULL,
  `q6` varchar(255) NOT NULL,
  `q6_1` varchar(255) NOT NULL,
  `q6_2` varchar(255) NOT NULL,
  `q6_3` varchar(255) NOT NULL,
  `q6_4` varchar(255) NOT NULL,
  `q7` varchar(255) NOT NULL,
  `q7_1` varchar(255) NOT NULL,
  `q7_2` varchar(255) NOT NULL,
  `q7_3` varchar(255) NOT NULL,
  `q7_4` varchar(255) NOT NULL,
  `q8` varchar(255) NOT NULL,
  `q8_1` varchar(255) NOT NULL,
  `q8_2` varchar(255) NOT NULL,
  `q8_3` varchar(255) NOT NULL,
  `q8_4` varchar(255) NOT NULL,
  `q9` varchar(255) NOT NULL,
  `q9_1` varchar(255) NOT NULL,
  `q9_2` varchar(255) NOT NULL,
  `q9_3` varchar(255) NOT NULL,
  `q9_4` varchar(255) NOT NULL,
  `q0` varchar(255) NOT NULL,
  `q0_1` varchar(255) NOT NULL,
  `q0_2` varchar(255) NOT NULL,
  `q0_3` varchar(255) NOT NULL,
  `q0_4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_questions`
--

INSERT INTO `tb_questions` (`question_ID`, `course_ID`, `unit_ID`, `q1`, `q1_1`, `q1_2`, `q1_3`, `q1_4`, `q2`, `q2_1`, `q2_2`, `q2_3`, `q2_4`, `q3`, `q3_1`, `q3_2`, `q3_3`, `q3_4`, `q4`, `q4_1`, `q4_2`, `q4_3`, `q4_4`, `q5`, `q5_1`, `q5_2`, `q5_3`, `q5_4`, `q6`, `q6_1`, `q6_2`, `q6_3`, `q6_4`, `q7`, `q7_1`, `q7_2`, `q7_3`, `q7_4`, `q8`, `q8_1`, `q8_2`, `q8_3`, `q8_4`, `q9`, `q9_1`, `q9_2`, `q9_3`, `q9_4`, `q0`, `q0_1`, `q0_2`, `q0_3`, `q0_4`) VALUES
(1, 112622, 1, '๑ ข้อใดคือ ความหมายของภาษาที่สมบูรณ์ที่สุด', 'ก. การใช้ภาษาที่เป็นแบบแผน และเกิดสัมฤทธิ์ผลในการสื่อสาร', 'ข. การใช้ภาษาให้เหมาะสมตามสัมพันธภาพของบุคคล โดยคำนึงถึงกาลเทศะ', 'ค. การใช้ภาษาโดยคำนึงถึงสัมพันธภาพระหว่างบุคคล โอกาส สถานที่และเกิดสัมฤทธิ์ผลในการสื่อสาร', 'ง.  การใช้คำพูดเพื่อการสื่อสาร', '๒ ถ้าหากส่งสารผิดระดับจะเกิดผลเสียในข้อใดมากที่สุด', 'ก. ความในสารไม่ชัดเจน', 'ข. การสื่อสารไม่สัมฤทธิ์ผล', 'ค. สื่อความหมายไม่ถูกต้อง', 'ง. ภาษาไม่ไพเราะ สละสลวย', '๓ หนังสือที่ใช้ติดต่อกับหน่วยงานราชการหรือติดต่อในวงการธุรกิจ ควรใช้ภาษาในระดับใด', 'ก. ภาษาระดับพิธีการ', 'ข. ภาษาระดับทางการ', 'ค. ภาษาระดับกึ่งทางการ', 'ง. ภาษาระดับไม่เป็นทางการ', '๔ การบรรยายในชั้นเรียน การประชุมในบริษัท การบรรยายข่าว นิยมใช้ภาษาระดับใด', 'ก.   ภาษาระดับกันเอง', 'ข.   ภาษาระดับไม่เป็นทางการ', 'ค.   ภาษาระดับกึ่งทางการ', 'ง.   ภาษาระดับทางการ', '๕ การเขียนจดหมายระหว่างเพื่อน การรายงายข่าว การเสนอบทความในหนังสือพิมพ์ ควรใช้ภาษาระดับใดมากที่สุด', 'ก.    ภาษาระดับกันเอง', 'ข.    ภาษาระดับกึ่งทางการ', 'ค.    ภาษาระดับไม่เป็นทางการ', 'ง.    ภาษาระดับทางการ', '๖ ภาษาที่ใช้ในวงจำกัด ใช้กันในครอบครัว หรือใช้ในสถานที่ที่เป็นส่วนตัว คือ ภาษาระดับใด', 'ก.    ภาษาระดับกันเอง', 'ข.    ภาษาระดับไม่เป็นทางการ', 'ค.    ภาษาระดับกึ่งทางการ', 'ง.    ภาษาระดับทางการ', '๗ คำหรือกลุ่มคำใด อยู่ในภาษาระดับเดียวกันทั้งหมด', 'ก.   กระผม รถประจำทาง เธอ', 'ข.    ออกลูก อิฉัน ข้าพเจ้า', 'ค.   หนังสือรับรอง ดิฉัน ตัวเอง', 'ง.    แสตมป์ พวกเรา ดิฉันเอง', '๘ ปัจจัยที่กำหนดระดับภาษาในข้อใดมีความสำคัญมากที่สุด', 'ก. สัมพันธภาพระหว่างบุคคล', 'ข. สื่อที่ใช้ส่งสาร', 'ค. โอกาสและสถานที่', 'ง. ลักษณะของเนื้อหา', '๙ ข้อใดควรจะใช้ในการสนทนากับบุคคลซึ่งไม่คุ้นเคยมากที่สุด', 'ก. สวัสดีครับ ขอสัมภาษณ์หน่อยได้ไหม', 'ข. รบกวนขอสัมภาษณ์หน่อยนะครับ', 'ค. ขอโทษค่ะ แผนกเครื่องเขียนอยู่ชั้นไหน', 'ง. ขอโทษค่ะ แผนกอุปกรณ์เครื่องเขียนอยู่ชั้นไหนคะ', '๑๐ ข้อใดกล่าวได้ถูกต้องเกี่ยวกับกับเรื่องระดับภาษา', 'ก.    ภาษาระดับพิธีการ ใช้ถ้อยคำตรงไปตรงมา มุ่งสู่จุดประสงค์ที่ต้องการโดยเร็ว', 'ข.    ภาษาระดับกึ่งทางการ ผู้ส่งสารและผู้ส่งสารอาจมีการโต้ตอบหรือแลกเปลี่ยนความคิดเห็นกันบ้าง', 'ค.    ภาษาระดับทางการ ใช้ภาษาเป็นทางการ มีความจริงจังโดยตลอด เป็นพิธีรีตอง', 'ง.    ภาษาระดับสนทนา อาจใช้คำคะนองหรือคำภาษากลุ่มในการสื่อสารระหว่างบุคคล');

-- --------------------------------------------------------

--
-- Table structure for table `tb_test`
--

CREATE TABLE `tb_test` (
  `test_ID` mediumint(11) UNSIGNED NOT NULL,
  `course_ID` mediumint(11) UNSIGNED NOT NULL,
  `unit_ID` mediumint(11) UNSIGNED NOT NULL,
  `answer_ID` mediumint(11) UNSIGNED NOT NULL,
  `ts1` tinyint(1) UNSIGNED NOT NULL,
  `ts2` tinyint(1) UNSIGNED NOT NULL,
  `ts3` tinyint(1) UNSIGNED NOT NULL,
  `ts4` tinyint(1) UNSIGNED NOT NULL,
  `ts5` tinyint(1) UNSIGNED NOT NULL,
  `ts6` tinyint(1) UNSIGNED NOT NULL,
  `ts7` tinyint(1) UNSIGNED NOT NULL,
  `ts8` tinyint(1) UNSIGNED NOT NULL,
  `ts9` tinyint(1) UNSIGNED NOT NULL,
  `ts10` tinyint(1) UNSIGNED NOT NULL,
  `test_topic` varchar(255) NOT NULL,
  `member_ID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_unit`
--

CREATE TABLE `tb_unit` (
  `unit_ID` mediumint(11) NOT NULL,
  `unit_Name` varchar(255) NOT NULL,
  `course_ID` mediumint(11) NOT NULL,
  `unit_Detail` text NOT NULL,
  `member_ID` mediumint(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_unit`
--

INSERT INTO `tb_unit` (`unit_ID`, `unit_Name`, `course_ID`, `unit_Detail`, `member_ID`) VALUES
(1, 'บทที่ 1 ความรู้ทั่วไปเกี่ยวกับภาษาไทย', 112622, 'pdf/6971.pdf', 1),
(2, 'บทที่ 2 ความรู้เกี่ยวกับการสื่อสาร', 112622, 'pdf/บทที่ 2 ความรู้เกี่ยวกับการสื่อสาร.pdf', 1),
(9, 'บทที่ 3 การใช้ภาษาไทยในการสื่อสาร', 112622, 'pdf/บทที่ 3 การใช้ภาษาไทยในการสื่อสาร.pdf', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_answer`
--
ALTER TABLE `tb_answer`
  ADD PRIMARY KEY (`answer_ID`),
  ADD KEY `member_ID` (`member_ID`);

--
-- Indexes for table `tb_a_q`
--
ALTER TABLE `tb_a_q`
  ADD PRIMARY KEY (`aq_ID`);

--
-- Indexes for table `tb_course`
--
ALTER TABLE `tb_course`
  ADD PRIMARY KEY (`course_ID`),
  ADD KEY `member_ID` (`member_ID`);

--
-- Indexes for table `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`member_ID`);

--
-- Indexes for table `tb_test`
--
ALTER TABLE `tb_test`
  ADD PRIMARY KEY (`test_ID`),
  ADD KEY `member_ID` (`member_ID`);

--
-- Indexes for table `tb_unit`
--
ALTER TABLE `tb_unit`
  ADD PRIMARY KEY (`unit_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_answer`
--
ALTER TABLE `tb_answer`
  MODIFY `answer_ID` mediumint(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_a_q`
--
ALTER TABLE `tb_a_q`
  MODIFY `aq_ID` mediumint(13) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_test`
--
ALTER TABLE `tb_test`
  MODIFY `test_ID` mediumint(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_unit`
--
ALTER TABLE `tb_unit`
  MODIFY `unit_ID` mediumint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_answer`
--
ALTER TABLE `tb_answer`
  ADD CONSTRAINT `tb_answer_ibfk_1` FOREIGN KEY (`member_ID`) REFERENCES `tb_member` (`member_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_course`
--
ALTER TABLE `tb_course`
  ADD CONSTRAINT `tb_course_ibfk_1` FOREIGN KEY (`member_ID`) REFERENCES `tb_member` (`member_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_test`
--
ALTER TABLE `tb_test`
  ADD CONSTRAINT `tb_test_ibfk_1` FOREIGN KEY (`member_ID`) REFERENCES `tb_member` (`member_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
