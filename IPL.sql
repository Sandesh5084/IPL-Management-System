-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 31, 2018 at 06:25 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `management`
--

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `get_stand`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `get_stand` ()  BEGIN
SELECT rank,team_name,captain,points FROM TEAM JOIN MANAGER ON team.team_id=manager.team_id
ORDER BY rank ASC;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `dropdown_db`
--

DROP TABLE IF EXISTS `dropdown_db`;
CREATE TABLE IF NOT EXISTS `dropdown_db` (
  `rahul` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

DROP TABLE IF EXISTS `manager`;
CREATE TABLE IF NOT EXISTS `manager` (
  `manager_id` int(38) NOT NULL,
  `manager_name` varchar(40) NOT NULL,
  `team_id` int(38) NOT NULL,
  PRIMARY KEY (`manager_id`),
  KEY `fk5` (`team_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`manager_id`, `manager_name`, `team_id`) VALUES
(1, 'Daniel Vettori', 101),
(2, 'Tom Moody', 102),
(3, 'Mahela Jayawardene', 103),
(4, 'Stephen Fleming', 104),
(5, 'Paddy Upton', 105),
(6, 'Jacques Kallis', 106),
(7, 'Ricky Ponting', 107),
(8, 'Brad Hodge', 108);

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

DROP TABLE IF EXISTS `matches`;
CREATE TABLE IF NOT EXISTS `matches` (
  `match_id` int(38) NOT NULL,
  `team1_name` varchar(60) NOT NULL,
  `team2_name` varchar(60) NOT NULL,
  `date` datetime NOT NULL,
  `team_won` varchar(60) NOT NULL,
  `venue_id` int(38) NOT NULL,
  PRIMARY KEY (`match_id`,`team1_name`,`team2_name`),
  KEY `venue_id` (`venue_id`),
  KEY `fk2` (`team1_name`),
  KEY `fk3` (`team2_name`),
  KEY `venue_id_2` (`venue_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`match_id`, `team1_name`, `team2_name`, `date`, `team_won`, `venue_id`) VALUES
(10, 'RCB', 'CSK', '2019-04-08 05:00:00', 'pending', 500),
(20, 'KKR', 'KXIP', '2018-04-09 10:00:00', 'KXIP', 501),
(30, 'CSK', 'RR', '2019-04-18 02:00:00', 'pending', 502),
(40, 'RCB', 'MI', '2019-04-27 06:00:00', 'pending', 500),
(50, 'MI', 'RR', '2017-11-04 12:00:00', 'RR', 504),
(60, 'RCB', 'SRH', '2017-10-29 08:00:00', 'RCB', 500),
(70, 'KKR', 'DD', '2017-10-22 04:00:00', 'KKR', 501),
(80, 'CSK', 'RCB', '2017-10-21 09:00:00', 'RCB', 501);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `mem_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  PRIMARY KEY (`mem_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mem_id`, `username`, `password`, `fname`, `lname`, `address`, `contact`, `picture`, `gender`) VALUES
(1, 'rahul', 'bhl', 'rahul', 'bhavihal', 'dvg', '9206091318', '', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

DROP TABLE IF EXISTS `player`;
CREATE TABLE IF NOT EXISTS `player` (
  `player_id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `age` int(38) NOT NULL,
  `team_id` int(38) NOT NULL,
  PRIMARY KEY (`player_id`),
  KEY `team_id` (`team_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`player_id`, `name`, `nationality`, `age`, `team_id`) VALUES
('1', 'Lokesh Rahul', 'Indian',25 , 108),
('17', 'AB deVilliers', 'South African',33 , 101),
('18', 'Virat Kohli', 'Indian',28 , 101),
('333', 'Chris Gayle', 'Caribbean',36 , 108),
('9', 'Manish Pandey', 'Indian',26 , 102);


--
-- Triggers `player`
--
DROP TRIGGER IF EXISTS `InsertAge17 and30`;
DELIMITER $$
CREATE TRIGGER `InsertAge17 and30` AFTER INSERT ON `player` FOR EACH ROW BEGIN
IF 17>new.age OR 35<new.age THEN 
DELETE FROM player WHERE age=new.age;
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `statistics`
--

DROP TABLE IF EXISTS `statistics`;
CREATE TABLE IF NOT EXISTS `statistics` (
  `player_id` varchar(20) NOT NULL,
  `team_id` int(11) NOT NULL,
  `runs` int(38) NOT NULL,
  PRIMARY KEY (`player_id`),
  KEY `team_id` (`team_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statistics`
--

INSERT INTO `statistics` (`player_id`, `team_id`, `runs`) VALUES
('1', 108, 81),
('17', 101, 133),
('18', 101, 144),
('333', 108, 54),
('9', 102, 72);


-- --------------------------------------------------------

--
-- Table structure for table `team`
--

DROP TABLE IF EXISTS `team`;
CREATE TABLE IF NOT EXISTS `team` (
  `team_id` int(38) NOT NULL,
  `team_name` varchar(20) NOT NULL,
  `captain` varchar(40) NOT NULL,
  `location` varchar(50) NOT NULL,
  `rank` int(38) NOT NULL,
  `points` int(11) NOT NULL,
  PRIMARY KEY (`team_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `team_name`, `captain`, `location`, `rank`, `points`) VALUES
(101, 'RCB', 'Virat Kohli', 'Banglore', 1, 99),
(102, 'SRH', 'David Warner', 'Hyderabad', 3, 81),
(103, 'MI', 'Rohit Sharma', 'Mumbai', 5, 63),
(104, 'CSK', 'M.S.Dhoni', 'Chennai', 8, 36),
(105, 'RR', 'Ajinkya Rahane', 'Jaipur', 7, 45),
(106, 'KKR', 'Dinesh Karthik', 'Kolkata', 4, 72),
(107, 'DD', 'Zaheer Khan', 'New Delhi', 6, 54),
(108, 'KXIP', 'R Ashwin', 'Mohali', 2, 90);
--
-- Triggers `team`
--
DROP TRIGGER IF EXISTS `sufix_name`;
DELIMITER $$
CREATE TRIGGER `sufix_name` BEFORE INSERT ON `team` FOR EACH ROW BEGIN 
SET new.team_name=concat(new.team_name,' ','');
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

DROP TABLE IF EXISTS `venue`;
CREATE TABLE IF NOT EXISTS `venue` (
  `venue_id` int(38) NOT NULL,
  `venue_name` varchar(40) NOT NULL,
  PRIMARY KEY (`venue_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`venue_id`, `venue_name`) VALUES
(500, 'M.Chinnaswamy'),
(501, 'Eden Gardens'),
(502, 'M.A.Chidambaram'),
(503, 'Feroz Shah Quotla'),
(504, 'Wankhede'),
(505, 'Rajiv Gandhi International'),
(506, 'Greenfield International'),
(507, 'Green Park');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `manager`
--
ALTER TABLE `manager`
  ADD CONSTRAINT `fk5` FOREIGN KEY (`team_id`) REFERENCES `team` (`team_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `matches`
--
ALTER TABLE `matches`
  ADD CONSTRAINT `fk4` FOREIGN KEY (`venue_id`) REFERENCES `venue` (`venue_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `player`
--
ALTER TABLE `player`
  ADD CONSTRAINT `fk7` FOREIGN KEY (`team_id`) REFERENCES `team` (`team_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `statistics`
--
ALTER TABLE `statistics`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`player_id`) REFERENCES `player` (`player_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk8` FOREIGN KEY (`team_id`) REFERENCES `team` (`team_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
