-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 17, 2024 at 08:00 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lawfirm_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` varchar(75) NOT NULL,
  `title_description` varchar(75) NOT NULL,
  `details` varchar(10000) NOT NULL,
  `file` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `title_description`, `details`, `file`) VALUES
(1, 'OUR MISSION', 'To offer our clients efficient, transparent and affordable legal solutions.', 'At D.S.G Mango & Co. Advocates, our mission is to passionately advocate for justice, guided by unwavering integrity and a commitment to excellence. We strive to empower and protect our clients through expert legal representation, fostering trust through transparent communication and personalized solutions. Rooted in ethical practices and dedicated to the highest standard of professionalism, we aim to make a positive impact on the lives we touch, creating a more just and secure legal landscape for individuals and communities alike.', 'mission.jpg'),
(2, 'OUR VISION', 'To be a leading firm in upholding justice for all. ', 'At D.S.G Mango & Co. Advocates, our vision is to be a beacon of legal excellence, redefining the standard of client-centric advocacy. We aspire to be recognized as leaders in innovative legal solutions, consistently delivering outstanding results with a profound commitment to integrity and compassion. Embracing a future where justice prevails, we envision a legal landscape transformed by our unwavering dedication to excellence, ethical practices and steadfast pursuit of fairness for all.', 'vision.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(75) NOT NULL,
  `email` varchar(75) NOT NULL,
  `contact` int(10) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(12) NOT NULL,
  `date` date NOT NULL,
  `user_id` int(12) NOT NULL,
  `comment` text NOT NULL,
  `rating` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `management_staff`
--

CREATE TABLE `management_staff` (
  `id` int(11) NOT NULL,
  `name` varchar(75) NOT NULL,
  `office` varchar(75) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(75) NOT NULL,
  `details` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `our_team`
--

CREATE TABLE `our_team` (
  `id` int(11) NOT NULL,
  `position` varchar(75) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `our_team`
--

INSERT INTO `our_team` (`id`, `position`) VALUES
(1, 'Partners'),
(2, 'Associates'),
(3, 'Management Staff');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `id` int(11) NOT NULL,
  `title` varchar(75) NOT NULL,
  `title_description` varchar(100) NOT NULL,
  `details` varchar(2000) NOT NULL,
  `file` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`id`, `title`, `title_description`, `details`, `file`) VALUES
(1, 'Derek Gyidei S. Mango', 'Founder and Principal Attorney', 'Advocate Mr. Derek Gyidei S. Mango who is the sole proprietor at D.S.G. MANGO Advocates was admitted to the bar as an Advocate of the High Court of Kenya on the 5th May 1994. After being in employment for a few years and acquiring all the relevant experience, he started D.S.G. MANGO & CO. ADVOCATES in the year 2000. His passion and dedication to serving the people and providing top notch services to his clients and community at large was evident. Within the first year of starting, the firm had offered services to more than 100 clients. The numbers have continued to grow since then and the dedication and commitment to our clients has continued to grow exponentially with over 3,000 clients served to date. \r\nWe have over the years contributed positively in restoring faith in the Judicial system to the general public. ', 'owner.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `practice_area`
--

CREATE TABLE `practice_area` (
  `id` int(11) NOT NULL,
  `title` varchar(75) NOT NULL,
  `details` varchar(10000) NOT NULL,
  `file` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `practice_area`
--

INSERT INTO `practice_area` (`id`, `title`, `details`, `file`) VALUES
(1, 'CRIMINAL LAW', 'Specializing in criminal law, our team is dedicated to defending individuals facing criminal charges. From minor offenses to serious felonies, we provide strategic legal representation, protecting the rights and interests of our clients throughout the legal process.', 'criminal-law.jpg'),
(2, 'ENVIRONMENT & LAND LAW', 'Our environment and lands law practice focuses on navigating the complexities of environmental regulations, land use, and property rights. We assist clients in matters ranging from land acquisitions to environmental compliance, providing comprehensive legal solutions.', 'ELC.jpg'),
(3, 'ELECTION PETITIONS LAW', 'With a deep understanding of election laws and procedures, our team is well-equipped to handle election petition cases. We provide strategic guidance and representation for individuals seeking to address electoral disputes, ensuring a fair and transparent electoral process.', 'electionpetition.jpg'),
(4, 'EMPLOYMENT & LABOUR RELATIONS LAW', 'Our employment and labour relations practice is committed to advocating for both employers and employees. We offer legal counsel on workplace issues, employment contracts, disputes, and compliance with labour laws to ensure a fair and balanced working environment.', 'ELRC.jpg'),
(5, 'FAMILY LAW', 'Specializing in family law matters, our team provides compassionate and comprehensive legal services for issues such as divorce, child custody, spousal support, and property division. We strive to guide clients through challenging family transitions with sensitivity and expertise.', 'familylaw.jpg'),
(6, 'HUMAN RIGHTS LAW', 'Human rights are at the core of our practice. We are dedicated to protecting and promoting human rights, offering legal representation for cases involving discrimination, civil liberties, and other human rights violations.', 'Humanrights.jpg'),
(7, 'CONVEYANCE & REAL ESTATE LAW', 'Our conveyance and real estate law practice facilitates smooth and secure real estate transactions. We assist clients with property purchases, sales, leases, and related legal matters, ensuring clarity and compliance throughout the conveyancing process.', 'C&R.jpg'),
(8, 'DIVORCE & MATRIMONIAL LAW', 'Navigating the complexities of divorce and matrimonial law requires sensitivity and legal expertise. Our team assists clients in divorce proceedings, addressing issues such as spousal support, child custody, and asset division with compassion and diligence.', 'D&M.jpg'),
(9, 'CHILDREN\'S LAW', 'Children\'s law is a specialized area focusing on the legal rights and interests of minors. Our practice involves representing children in legal matters, addressing issues such as child custody, guardianship, and child protection to ensure their well-being and best interests are prioritized.', 'Childrenlaw.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(12) NOT NULL,
  `role_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'admin'),
(2, 'partner'),
(3, 'associate'),
(4, 'management staff');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `address` text NOT NULL,
  `city_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `reg_date` date NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `contact`, `gender`, `dob`, `address`, `city_id`, `area_id`, `image`, `reg_date`, `password`, `role_id`) VALUES
(1, 'Daniel Munene', 'danielmunene845@gmail.com', 794864431, 'M', '2000-01-16', 'Motwafi Road', 1, 10, '', '2024-01-11', '123456789', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `management_staff`
--
ALTER TABLE `management_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_team`
--
ALTER TABLE `our_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `practice_area`
--
ALTER TABLE `practice_area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `area_id` (`area_id`,`city_id`,`role_id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `management_staff`
--
ALTER TABLE `management_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `our_team`
--
ALTER TABLE `our_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `practice_area`
--
ALTER TABLE `practice_area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`area_id`) REFERENCES `area` (`area_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_3` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
