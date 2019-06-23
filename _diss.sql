-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 07 Ιουν 2019 στις 11:24:32
-- Έκδοση διακομιστή: 10.1.30-MariaDB
-- Έκδοση PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `diss`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `club`
--

CREATE TABLE `club` (
  `id` int(11) NOT NULL,
  `clubName` varchar(255) NOT NULL,
  `staff_fk` int(255) NOT NULL,
  `textarea` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `club`
--

INSERT INTO `club` (`id`, `clubName`, `staff_fk`, `textarea`) VALUES
(135, 'Arificial Intelligence Club', 3, '			<br>\r\n			<p>Specify the rules:&nbsp;</p><p><ol><li>fgrtgw</li><li>gtrghetk</li><li>grtgwtrgwgw&nbsp;&nbsp;<br></li></ol>Specify the goals:&nbsp;</p><p><ul><li>ftgtgtrge</li><li>grgtrwgtr</li><li>vfvrtbgrw&nbsp;&nbsp;<br></li></ul>Specify the outcomes:\r\n            \r\n \r\n            </p><p><ul><li>gtrgwe</li><li>hyhyethe</li><li>vgtrhtrhrtw</li></ul></p>\r\n            		\r\n        '),
(137, 'Enviromental Society', 16, '			<br>\r\n			<p>Specify the rules:&nbsp;</p><p><ol><li>Weekly Meetings</li><li>Join the team on CoL&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</li></ol>Specify the goals:&nbsp;</p><p><ol><li>Make trips in nature</li><li>Make charities&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</li></ol>Specify the outcomes:\r\n            \r\n \r\n            </p><p><ol><li>Meet new people</li><li>Join nice trips&nbsp;</li></ol></p>\r\n            		\r\n        '),
(139, 'Robotics Club', 3, '			<br>\r\n			<p>Specify the rules: gtrgtgthgyethe<br>\r\n            Specify the goals: frwfgwrgtrwgtrwg<br>\r\n            Specify the outcomes: regwrtwggwtrgtrw</p>\r\n            		\r\n        '),
(140, 'Business Club', 14, '<p>Specify the rules:</p><p><ol><li>rule 1</li><li>rule 2</li><li>rule 3&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</li></ol>Specify the goals:&nbsp;</p><p><ol><li>goal 1</li><li>goal 2</li></ol></p><p>Specify the outcomes: Lorem ipsum doro sit amet</p>\r\n            		\r\n        '),
(142, 'Marvel', 3, '			<br>\r\n			<p>Specify the rules:\r\n            <br>\r\n            Specify the goals:\r\n            <br>\r\n            Specify the outcomes:\r\n            \r\n \r\n            </p>\r\n            		\r\n        ');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `enroll`
--

CREATE TABLE `enroll` (
  `enroll_id` int(255) NOT NULL,
  `user_fk` int(255) NOT NULL,
  `club_fk` int(255) NOT NULL,
  `enrolled` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `enroll`
--

INSERT INTO `enroll` (`enroll_id`, `user_fk`, `club_fk`, `enrolled`) VALUES
(56, 7, 135, 1),
(57, 6, 135, 1),
(64, 7, 137, 1),
(65, 6, 137, 1),
(67, 9, 135, 1),
(68, 19, 135, 1),
(69, 8, 137, 1),
(77, 19, 137, 1),
(78, 6, 139, 1);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `message`
--

CREATE TABLE `message` (
  `id` int(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `message`
--

INSERT INTO `message` (`id`, `text`, `date`, `type`) VALUES
(1, 'fcgfhfc', '2018-12-15', 'Arificial Intelligence Club'),
(2, ' vfbgfbgf', '2018-12-16', 'Arificial Intelligence Club'),
(3, 'test test', '2018-12-17', 'Robotics Club'),
(4, 'fre', '2018-12-17', 'Arificial Intelligence Club'),
(5, '<font color=\"#666633\" style=\"background-color: rgb(0, 0, 51);\">gre</font>', '2018-12-17', 'Arificial Intelligence Club'),
(6, 'freq', '2018-12-17', 'Java Cafe'),
(7, 'tgtwtr', '2018-12-19', 'English Club'),
(8, 'fregfw', '2018-12-22', 'Test Club'),
(9, 'fre', '2018-12-23', 'Java Cafe'),
(10, 'test', '2018-12-23', 'general'),
(11, 'another test message', '2019-01-04', 'general'),
(12, 'gtgtghy5h53', '2019-01-04', 'Marketing Club'),
(14, 'cd', '2019-03-02', 'Arificial Intelligence Club'),
(15, 'test', '2019-03-09', 'general'),
(16, 'Hello, this is the first message from the club. Be at Lecture Room 3 at 13:00', '2019-03-10', 'Enviromental Society'),
(17, 'Ok I will be there!', '2019-03-10', 'Enviromental Society'),
(18, 'Everyone can communicate from this chat', '2019-03-11', 'general'),
(19, 'fdgdf', '2019-03-12', 'Arificial Intelligence Club'),
(20, 'aaaaaaa', '2019-03-12', 'Arificial Intelligence Club'),
(21, 'fe', '2019-03-12', 'Arificial Intelligence Club'),
(22, 'vc', '2019-03-12', 'Arificial Intelligence Club'),
(23, 'bn', '2019-03-12', 'Arificial Intelligence Club'),
(24, 'zx', '2019-03-12', 'general'),
(25, 'fg', '2019-03-12', 'general'),
(26, 'SADF', '2019-04-04', 'Arificial Intelligence Club'),
(27, 'can i join your club?', '2019-04-22', 'Enviromental Society'),
(28, 'uy', '2019-05-27', 'general'),
(29, 'hi how can i be member of the club?', '2019-06-06', 'Robotics Club'),
(30, 'message simple', '2019-06-06', 'Marvel');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `club_fk` int(11) NOT NULL,
  `enroll_fk` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `posts`
--

INSERT INTO `posts` (`post_id`, `club_fk`, `enroll_fk`, `date`, `title`, `text`) VALUES
(33, 135, 57, '2019-02-23 13:35:04', 'gththbterb', 'trhbtrwhbtrbhtrbtghtreghtrhtr<div>hthyt</div><div>jytjn</div><div>yetjnyetshntagtbgsf</div>'),
(38, 135, 57, '2019-03-08 18:31:54', 'cx', '			 			 			 <img src=\"https://ichef.bbci.co.uk/news/660/cpsprodpb/1999/production/_92935560_robot976.jpg\" alt=\"robot\" align=\"none\">&nbsp;<div>image testing from web!</div>        \r\n		'),
(43, 137, 64, '2019-03-10 11:31:32', 'Enviromental Society article', '			 			 			 <div style=\"text-align: left;\">A really good article that I found about the enviroment and the society! You can find it here: <a href=\"http://www.environmentandsociety.org/\" title=\"Link\" target=\"\">Link</a></div><div style=\"text-align: left;\"><br></div><div style=\"text-align: left;\"><br></div>                \r\n		        \r\n		        \r\n		'),
(44, 137, 65, '2019-03-10 11:39:43', 'Website for Enviromental Society', '<div style=\"text-align: left;\">I found also a good website about our club:&nbsp;<a href=\"http://www.environmentandsociety.org/\" title=\"\" target=\"\">http://www.environmentandsociety.org/</a></div>'),
(47, 135, 57, '2019-05-15 10:15:17', 'bomb', '<div style=\"text-align: left;\">I am putting a bomo in your office</div>        '),
(55, 137, 69, '2019-06-07 10:33:11', 'Another post for E.S.', '<div style=\"text-align: left;\">This is another text for environmental society club.&nbsp;</div>        ');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(100) NOT NULL,
  `ProfilePicture` varchar(100) NOT NULL,
  `upload` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `staff`
--

INSERT INTO `staff` (`id`, `username`, `fname`, `lname`, `password`, `role`, `ProfilePicture`, `upload`) VALUES
(2, 'ABCD', 'AB', 'CD', '827ccb0eea8a706c4c34a16891f84e7b', 'admin', '', ''),
(3, 'CSSTAFF', 'John', 'Dimitriadis', '827ccb0eea8a706c4c34a16891f84e7b', 'staff', '', 'Arificial Intelligence Club'),
(13, 'MIKE', 'mike', 'tripolitsiotis', '827ccb0eea8a706c4c34a16891f84e7b', 'admin', '', '...'),
(14, 'BSSTAFF', 'Tasos', 'Diamantidis', '827ccb0eea8a706c4c34a16891f84e7b', 'staff', '122_0301_2003Tuono_Wheeliezoom+2003_Aprilia_Tuono_R+Front_Wheelie_View.jpg', 'Pressentations/Talks'),
(15, 'ESSTAFF', 'Vicky', 'Papachristou', '827ccb0eea8a706c4c34a16891f84e7b', 'staff', '', '...'),
(16, 'PSSTAFF', 'George', 'Pavlidis', '827ccb0eea8a706c4c34a16891f84e7b', 'staff', '', 'Enviromental Society'),
(17, 'dpap', 'dimitris', 'papadopoulos', '827ccb0eea8a706c4c34a16891f84e7b', 'staff', '', 'Company Visits'),
(18, 'stsp', 'st', 'sp', '827ccb0eea8a706c4c34a16891f84e7b', 'staff', '', '...'),
(20, 'bookstaff', 'book', 'staff', '827ccb0eea8a706c4c34a16891f84e7b', 'staff', '', '...'),
(21, 'TestStaff', 'Test', 'LTest', '827ccb0eea8a706c4c34a16891f84e7b', 'staff', '', '...'),
(22, 'Admin', 'fname', 'lname', '827ccb0eea8a706c4c34a16891f84e7b', 'admin', '', ''),
(23, 'dum', 'd', 'm', '827ccb0eea8a706c4c34a16891f84e7b', 'staff', '', '');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `staff_message`
--

CREATE TABLE `staff_message` (
  `staff_id` int(255) NOT NULL,
  `m_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `staff_message`
--

INSERT INTO `staff_message` (`staff_id`, `m_id`) VALUES
(2, 1),
(2, 6),
(3, 10),
(16, 16),
(2, 18),
(2, 21),
(2, 22),
(2, 23),
(2, 24),
(2, 25),
(3, 26),
(3, 28);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `student`
--

CREATE TABLE `student` (
  `studentid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `regnum` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ProfilePicture` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `student`
--

INSERT INTO `student` (`studentid`, `username`, `fname`, `lname`, `password`, `regnum`, `email`, `ProfilePicture`, `role`) VALUES
(6, 'csstudent', 'cs', 'st', '827ccb0eea8a706c4c34a16891f84e7b', 'CS15021', '', '', 'csstudent'),
(7, 'bsstudent', 'fname', 'lname', '827ccb0eea8a706c4c34a16891f84e7b', '', '', '', 'bsstudent'),
(8, 'psstudent', 'ps', 'tre', '827ccb0eea8a706c4c34a16891f84e7b', 'PS324508', '', 'souza.jpg', 'psstudent'),
(9, 'enstudent', 'en', 'st', '827ccb0eea8a706c4c34a16891f84e7b', '', '', '', 'esstudent'),
(12, 'atripolitsiotis', 'ASTERIOS', 'TRIPOLITSIOTIS', 'e6542dbf4327dbf5f6f4691eb14b0266', 'BS16094', 'atripolitsiotis@citycollege.sheffield.eu', '', 'bsstudent'),
(13, 'onikoli', 'olga ', 'nikoli', '827ccb0eea8a706c4c34a16891f84e7b', 'BS16132', 'onikoli@citycollege.sheffield.eu', '', 'bsstudent'),
(14, 'comscistud', 'fname', 'lname', '827ccb0eea8a706c4c34a16891f84e7b', 'CS19043', 'fnamelname@gmail.com', '', 'csstudent'),
(18, 'mixalist', 'michalis', 'trip', '928d765cf040c581f08d0ef6e7570f26', 'MS12345', 'michalistripolitsiotis@gmail.com', '', 'csstudent'),
(19, 'tasos', 'anastasis', 'doufas', '9716c1eb3d041fb68d24c5057b140e76', '1234', 'adoufas@gmail.com', '', 'esstudent'),
(22, 'teststudent', 'fname', 'lname', '827ccb0eea8a706c4c34a16891f84e7b', 'EG123456', 'tstudent@gmail.com', '', 'bsstudent'),
(23, 'uname', 'fname', 'lname', '827ccb0eea8a706c4c34a16891f84e7b', 'BS12345', 'flname@gmail.com', '', 'psstudent');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `stu_message`
--

CREATE TABLE `stu_message` (
  `stu_id` int(255) NOT NULL,
  `mid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `stu_message`
--

INSERT INTO `stu_message` (`stu_id`, `mid`) VALUES
(8, 2),
(6, 3),
(6, 4),
(6, 5),
(9, 7),
(6, 8),
(6, 9),
(6, 11),
(7, 12),
(8, 14),
(8, 15),
(7, 17),
(8, 19),
(8, 20),
(9, 27),
(7, 29),
(7, 30);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `texts`
--

CREATE TABLE `texts` (
  `id` int(255) NOT NULL,
  `title` varchar(100) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `myTextArea` longtext CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `tag` varchar(40) NOT NULL,
  `date` datetime NOT NULL,
  `program` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `level` varchar(40) NOT NULL,
  `user_fk` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `texts`
--

INSERT INTO `texts` (`id`, `title`, `myTextArea`, `tag`, `date`, `program`, `department`, `level`, `user_fk`) VALUES
(93, 'J', '			 			 <div>tsts</div>	\r\n	-----------------------------<br>\r\n					<div id=\"imageattributes\"><br></div>\r\n                \r\n		        \r\n		', 'home', '2018-09-05 11:09:14', 'Bachelor', 'Computer Science', 'Level 1', 2),
(95, 'Football', '			 			 <div>Football match 2</div>	\r\n	-----------------------------<br>\r\n					<div id=\"imageattributes\"><br></div>\r\n                \r\n		        \r\n		', 'Sports Club', '2018-09-05 13:27:00', 'Bachelor', 'General', 'General', 2),
(99, 'wer', '			 			 <div>regwegwr</div>	\r\n	-----------------------------', 'home', '2018-09-06 12:51:19', 'Master', 'MBA', 'General', 2),
(100, 'Sheffield', '			 			 <div>visit sheffiled trip</div><div><br></div><div><img src=\"https://i.imgur.com/djfb3lU.jpg\" width=\"532\"><br></div><br>', 'home', '2018-09-06 13:06:55', 'Master', 'MBA', 'General', 13),
(102, 'test', '	cv<br>\r\n	-----------------------------<br>\r\n					<div id=\"imageattributes\">\r\n				<img src=\"images/knowledge.png\" style=\"width:20%; height:20%; \">\r\n                <img src=\"images/ct.png\" style=\"width:20%; height:20%; \">\r\n                \r\n			</div>\r\n        ', 'Company Visits', '2018-09-07 10:11:08', 'Bachelor', 'Computer Science', 'Level 1', 2),
(103, 'PROF', 'Seminar for psychologists<br>\r\n	-----------------------------<br>\r\n					<div id=\"imageattributes\">\r\n				<img src=\"images/knowledge.png\" style=\"width:20%; height:20%; \">\r\n                <img src=\"images/ct.png\" style=\"width:20%; height:20%; \">\r\n                \r\n			</div>\r\n        ', 'Professional Seminars', '2018-09-07 12:27:49', 'Bachelor', 'Psychology Department', 'Level 1', 13),
(104, 'pressentation', '			 	Pressentation from Dr. Ketikidis<br>\r\n	-----------------------------<br>\r\n					<div id=\"imageattributes\">\r\n				<img src=\"images/knowledge.png\" style=\"width:20%; height:20%; \">\r\n                <img src=\"images/ct.png\" style=\"width:20%; height:20%; \">\r\n                \r\n			</div>\r\n                \r\n		', 'Pressentations/Talks', '2018-09-07 12:32:52', 'Master', 'Business Administration & Economics', 'Level 1', 2),
(105, 'CSU Meeting', '	meeting<br>\r\n	-----------------------------<br>\r\n					<div id=\"imageattributes\">\r\n				<img src=\"images/knowledge.png\" style=\"width:20%; height:20%; \">\r\n                <img src=\"images/ct.png\" style=\"width:20%; height:20%; \">\r\n                \r\n			</div>\r\n        ', 'C.S.U.', '2018-09-07 12:41:10', 'Bachelor', 'General', 'General', 2),
(106, 'carreer day', '	carreer day<br>\r\n	-----------------------------<br>\r\n					<div id=\"imageattributes\">\r\n				<img src=\"images/knowledge.png\" style=\"width:20%; height:20%; \">\r\n                <img src=\"images/ct.png\" style=\"width:20%; height:20%; \">\r\n                \r\n			</div>\r\n        ', 'Carreer Day', '2018-09-07 12:45:20', 'Bachelor', 'General', 'General', 2),
(108, 'Basketball in Posidonio', '			 			 	Basketball game between the lecturers and the students<br>\r\n	-----------------------------<br>\r\n					<div id=\"imageattributes\"><br></div>\r\n                \r\n		        \r\n		', 'Sports Club', '2018-09-07 19:48:54', 'Bachelor', 'General', 'General', 2),
(110, 'res', 'prof sem', 'Professional Seminars', '2018-09-09 13:17:11', 'Master', 'English Studies', 'General', 2),
(112, '3ds company lvl 2', '			 3ds        \r\n		', 'Company Visits', '2018-09-09 13:20:01', 'Bachelor', 'Computer Science', 'Level 1 Year 2', 2),
(113, '3ds company', '3ds', 'Company Visits', '2018-09-09 13:20:50', 'Bachelor', 'Computer Science', 'Level 2', 2),
(116, 'alex talk', 'alex pressentation', 'Pressentations/Talks', '2018-09-09 13:29:13', 'Master', 'Business Administration & Economics', 'Level 1', 2),
(118, 'Carreer day on march', 'carreer day', 'Carreer Day', '2018-09-09 13:34:56', 'Bachelor', 'General', 'General', 2),
(122, 'LVL 3', '			 			 ffgrfbrbgrbs', 'Pressentations/Talks', '2018-09-12 12:30:04', 'Bachelor', 'English Studies', 'Level 3', 2),
(128, 'Company Visit', '			 			 			 drgrdgrdgfxgf        \r\n		<div>lkuhkuh</div><div>dcscdscdsvdfvfd</div>        \r\n		        \r\n		', 'Company Visits', '2018-09-23 16:40:40', 'Bachelor', 'Business Administration & Economics', 'Level 1 Year 2', 2),
(129, 'Test', 'Test', 'Company Visits', '2018-10-15 12:21:48', 'Bachelor', 'Business Administration & Economics', 'Level 2', 2),
(130, 'company visit for level 3 psychology dep ', 'vfvvrgtgrwgtwrgtrgtrwgtrbftb', 'Company Visits', '2018-10-19 20:36:37', 'Bachelor', 'Psychology Department', 'Level 3', 2),
(132, 'Seminar Business', 'fgreqgrewa', 'Professional Seminars', '2018-10-20 12:29:36', 'Bachelor', 'Business Administration & Economics', 'Level 1 Year 1', 2),
(133, 'cv', 'freqfqfrfrv', 'Company Visits', '2018-10-20 12:49:02', 'Bachelor', 'English Studies', 'Level 2', 2),
(134, 'badges', '			 			<h3 style=\"text-align: center;\"><font face=\"times new roman\" size=\"5\">badges of uni!</font></h3><div><font face=\"times new roman\" size=\"5\" color=\"#33cc99\" style=\"background-color: rgb(204, 0, 0);\">all the badges of the university</font></div><div><font face=\"times new roman\" size=\"5\" color=\"#33cc99\" style=\"background-color: rgb(204, 0, 0);\"><br></font></div><div><img src=\"https://i.imgur.com/hiFArCj.jpg\" width=\"532\"><br></div>\r\n			<p><br>\r\n            <img src=\"badges/image1.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image2.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image4.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image5.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image6.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image7.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image8.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image9.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image10.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image11.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image12.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image13.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image14.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image15.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image16.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image17.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image18.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image19.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image20.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image21.png\" style=\"height:70px; width:70px;\">\r\n            \r\n            </p>\r\n            		\r\n                \r\n		', 'home', '2018-10-26 19:31:29', 'Bachelor', 'General', 'General', 2),
(139, 'as', '			fwer<br>\r\n			<p><br>\r\n            <img src=\"badges/image1.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image2.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image4.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image5.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image6.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image7.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image8.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image9.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image10.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image11.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image12.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image13.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image14.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image15.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image16.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image17.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image18.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image19.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image20.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image21.png\" style=\"height:70px; width:70px;\">\r\n            \r\n            </p>\r\n            		\r\n        ', 'Company Visits', '2018-10-30 18:52:50', 'Bachelor', 'Computer Science', 'Select one:', 2),
(148, 'gt', '			er<br>\r\n			<p><br>\r\n            <img src=\"badges/image1.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image2.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image4.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image5.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image6.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image7.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image8.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image9.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image10.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image11.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image12.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image13.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image14.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image15.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image16.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image17.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image18.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image19.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image20.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image21.png\" style=\"height:70px; width:70px;\">\r\n            \r\n            </p>\r\n	\r\n        ', 'Sports Club', '2018-11-02 17:33:40', 'Bachelor', 'General', 'General', 18),
(149, 'sc', '			fd<br>\r\n			<p><br>\r\n            <img src=\"badges/image1.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image2.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image4.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image5.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image6.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image7.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image8.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image9.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image10.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image11.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image12.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image13.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image14.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image15.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image16.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image17.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image18.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image19.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image20.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image21.png\" style=\"height:70px; width:70px;\">\r\n            \r\n            </p>\r\n	\r\n        ', 'Sports Club', '2018-11-02 17:38:40', 'Master', 'General', 'General', 18),
(150, 'Football Tournament at YMCA', '			 			<font color=\"#ff0000\">Football</font> tournament 5th &amp; 12th of November<div><br></div><div><b>Time: </b><i style=\"\">21:15 - 23:00</i><br>\r\n			<p><br>\r\n            <img src=\"badges/image1.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image2.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image4.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image5.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image6.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image7.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image8.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image9.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image10.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image11.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image12.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image13.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image14.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image15.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image16.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image17.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image18.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image19.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image20.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image21.png\" style=\"height:70px; width:70px;\">\r\n            \r\n            </p>\r\n	\r\n        </div>        \r\n		', 'Sports Club', '2018-11-02 17:51:50', 'Bachelor', 'General', 'General', 18),
(169, 'Christmas Brake', '			 			 			 			 			 			 			 			<font color=\"#336666\" style=\"background-color: rgb(204, 0, 0);\"><br>\r\n			</font><p style=\"text-align: center;\"><font style=\"background-color: rgb(51, 102, 51);\" color=\"#ffffff\">Christmas Brake!</font></p><p style=\"text-align: center;\"><font style=\"\" color=\"#ffffff\"><b style=\"background-color: rgb(255, 0, 0);\">Happy new year to all the academic staff &amp; the students!</b></font></p><p style=\"text-align: center;\"><b style=\"font-size: xx-large;\"><span class=\"emoji\" style=\"background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(51, 153, 0);\" apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" \"noto=\"\" \"android=\"\" emojisymbols,=\"\" \"emojione=\"\" mozilla\",=\"\" \"twemoji=\"\" symbol\";=\"\" color:=\"\" rgb(0,=\"\" 0,=\"\" 0);=\"\" text-align:=\"\" left;\"=\"\">???„</span></b></p><p style=\"text-align: left;\"><br></p>\r\n            		\r\n                \r\n		        \r\n		        \r\n		        \r\n		        \r\n		        \r\n		        \r\n		', 'home', '2018-12-14 12:22:56', 'General', 'General', 'General', 2),
(173, 'Status from the Admin', '			 			 			This is a <font color=\"#ff0000\">text </font><font color=\"#ffffcc\">from the administrator</font><br>\r\n			<p><br>\r\n            <img src=\"badges/image1.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image2.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image4.png\" style=\"height:70px; width:70px;\">&nbsp;<img src=\"badges/image7.png\" style=\"font-size: 1rem; height: 70px; width: 70px;\"><span style=\"font-size: 1rem;\">\r\n           </span><img src=\"badges/image8.png\" style=\"font-size: 1rem; height: 70px; width: 70px;\"><span style=\"font-size: 1rem;\">\r\n           </span><img src=\"badges/image9.png\" style=\"font-size: 1rem; height: 70px; width: 70px;\"><span style=\"font-size: 1rem;\">\r\n           </span><img src=\"badges/image10.png\" style=\"font-size: 1rem; height: 70px; width: 70px;\"><span style=\"font-size: 1rem;\">\r\n           </span><img src=\"badges/image11.png\" style=\"font-size: 1rem; height: 70px; width: 70px;\"><span style=\"font-size: 1rem;\">\r\n           </span><img src=\"badges/image12.png\" style=\"font-size: 1rem; height: 70px; width: 70px;\"><span style=\"font-size: 1rem;\">\r\n           </span><img src=\"badges/image13.png\" style=\"font-size: 1rem; height: 70px; width: 70px;\"><span style=\"font-size: 1rem;\">\r\n           </span><img src=\"badges/image14.png\" style=\"font-size: 1rem; height: 70px; width: 70px;\"><span style=\"font-size: 1rem;\">\r\n           </span><img src=\"badges/image15.png\" style=\"font-size: 1rem; height: 70px; width: 70px;\"><span style=\"font-size: 1rem;\">\r\n           </span><img src=\"badges/image16.png\" style=\"font-size: 1rem; height: 70px; width: 70px;\"><span style=\"font-size: 1rem;\">\r\n           </span><img src=\"badges/image17.png\" style=\"font-size: 1rem; height: 70px; width: 70px;\"><span style=\"font-size: 1rem;\">\r\n           </span><img src=\"badges/image18.png\" style=\"font-size: 1rem; height: 70px; width: 70px;\"><span style=\"font-size: 1rem;\">\r\n           </span><img src=\"badges/image19.png\" style=\"font-size: 1rem; height: 70px; width: 70px;\"><span style=\"font-size: 1rem;\">\r\n           </span><img src=\"badges/image20.png\" style=\"font-size: 1rem; height: 70px; width: 70px;\"><span style=\"font-size: 1rem;\">\r\n           </span><img src=\"badges/image21.png\" style=\"font-size: 1rem; height: 70px; width: 70px;\"></p>\r\n            		\r\n                \r\n		        \r\n		', 'Enviromental Society', '2019-03-10 11:04:17', 'General', 'General', 'General', 2),
(174, '1st status from staff', '			This is a <font color=\"#ff0000\">text</font> from the coordinator of the club<br>\r\n			<p><br><img src=\"data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxIQEhUQEhIWFhUWFRUYFRgVFRUVGhcYGBgXGhYYGBYYHSggGhooGxUVITEhJSorLi4uGB8zODMsNygtLisBCgoKDg0OGhAQGy0eICUrLS0tMC0tLS0vLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAOEA4QMBIgACEQEDEQH/xAAcAAEAAgMBAQEAAAAAAAAAAAAABgcDBAUBAgj/xAA+EAACAQIEAwQIBQMDBAMBAAABAgADEQQFEiEGMUETIlFhBzJCUnGBkaEUI3KxwSSC0TOy4mJzosJjZJMV/8QAGQEBAAMBAQAAAAAAAAAAAAAAAAIDBAEF/8QAJhEBAAICAgIBAwUBAAAAAAAAAAECAxEEIRIxQRMiUTJSYYGhFP/aAAwDAQACEQMRAD8AvGIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgInl4vA9ieXnw1ZRzYD4kCc2MkTGtdTyYH4EGfd42PYnl57OhERAREQEREBERAREQEREBERAREQEREBETwmB7eY61ZUBZmCgcySAPqZw8/wCJ6eHui2ep4X2X9R/jnIHmOZ1cQ2qo5PgOQHwEzZeTWnUdyqvliqZ5jxnRS4pKah8fVX6nc/SR3GcWYqpyYIPBFH7m5/acOdHAZHiK26Ujb3m7o+Nzz+V5htny5Oo/xTN7W9NWvjKj+vUdv1Mx/czBYSV4fgeqfXqov6QX/e03U4FTrWf5Ko/zEcbNb4Pp3lBrTPQxdRPUqOv6WYfsZMm4Fp9Kz/NVM08RwNUHqVVbyYFfuLx/zZo9R/p9O8Ofg+K8VT5uHHg4H7ixkiy7jSk+1VTTPj6y/bcfSRPH5DiKO70jb3l7w+3L52nNiM2XHOp/0i96rioV1cBlYMDyIII+syyo8vzKrh21U3I8RzB+I6ydZBxRTxFkeyVPDo36T4+R+824uTW/U9SupliUiieAz2alpERAREQEREBERAREQEREBETwwBkN4o4oIJoUDvydx08Qp8fOZuMc/wCzH4eme+R3yPZB6DzP7fGQWYOVyNfZVRlyfEBnVybIauKN1GlOrty+Q6mdPhjhntrVqwITmq8i/mfBf3k8p0woAAAA2AGwAleDi+X3XRpi33Lk5Vw3Qw9iF1v7z2Jv5DkJ2LT2J6NaxWNQ0RER6IiJJ0nkXnsDy05Ga8O0MRcldLH2k2Pz6H5zsRI2rFo1MOTET7VdnXD9XC7kak6OvL+4dD9pyZclRARYi4PMHrINxPwx2d61Adzmye75jy8uk8/PxfH7qM98Wu4Z+F+JzcUK7eSOf2Y/z9ZNAZTMnHBufl7Yeqe8P9Nj7QHsnzEnxuRv7bJYsm+pS+J4DPZvXkREBERAREQEREBERATm59mYw1FqnXkg8WPL5dflOiZXPGmY9rXNMHu0+7/d7R/j5SnkZfp02hkt41cKrULsWY3JJJJ6k853+Esi/EN2tQflqeXvt4fAdfpONluDavUWkvNj9B1PyEtbBYVaSLTQWVRYf5+Mw8bD528p9KMVNzuWZRafURPUaiY6tZUsWYLcgC5AuTyG/WfZkU9I+MSlhQzu6d8aNNLtVZxuquu21xt3l3A3nLTqNuTOmbEceZfTYKcQpuCbr3gLc1a26t5ECafEvHWFp4RqtGuGeojCjoGo67GxIIsLG1wfpKIxCsHYPcNqOrULNe5vcdDe8+NRtpubXva+1+V7eNpjnk2/CvzlOso9KuNpH84JWBa5JGhgLAWXRYdCdwecufK8emIpJXpm6VFDLfwPj5z8u2kk4Z42xWAICt2lMC3ZvfSBz7pHqm/1nMWeYnVnK317fomJGuEOMaOYrZAVqKitUWxIUsSLBrDVy6eIkkBm2JiY3C6J29nhE9idFe8X5D2DdtTH5bHcD2WP8GRym5UhgbEEEEdCORlv4vDrURkYXVhYyqM0wJw9VqTeydj4jofpPL5WHwnyr6ZctNTuFk8PZoMTRD+0NnHgw/g851JWvB2Y9jXCk9yp3T8fZP12+cskTbx8vnTfyvx28oexES9MiIgIiICIiAiIgaebYvsaL1fdUkfHoPraVKzEm53J3Pxk+4+xOmgqe+4v8F3/AH0yATzOZfd/FmzT3pNeAMvsHxBHM6F+A3Y/Ww+UmM0slwnY0KdPqFF/1HdvuTN6bsNPCkQvrGo0T5dgBcmwn1NfG4VKyGnUUOjWurC4NiCL/MCWpNDNM1U0KjUMRRFQBtDM6FNY9lu8Oux32vPzvnGb4jFPqxFVqjDYXIIH6QO78xJpneS0aGIxNFquCpo6IOz1FGpqNDFlHZEK9tgFFyGv0JMUxuZUBS7GhQAJUK9Vt3Y6wxtuQF7tvG3hMOa8z76U2nblkvUYk6nY3J5sxPMk9TPgTcpZk1Kp2uHvROnTs2o2sA1y3O9t+m80xM6BM9DBVKis6LcILtYrcCxN9N7kbHcTBFoHRweZvhlBw1aolR1Iq2CqLX7qq1yT4k7S6fRnxI2Nw2l1IeiFQuW1doQvreN+V7+POULLK9F/E2DoN2Jw7JWqlED0w9XX4A3JK73NgLddpfgvq3tOk9rjifOqfU3riRDj7AXRa4G6nS3wPL7/ALyXzTzbC9tRqU/eUgfHp97SvLTzpMI3ruNKkBtuOctnJsZ21GnU6lRf4jY/cGVNaTzgDEaqT0/ce4+DD/IMwcO2r+P5Z8M6nSVxET02oiIgIiICIiAnhnsQIL6Q6t6lJPBGP1IH/rI1ltLXWpp71RAfgWF53ePz/Ur/ANpf9zzl8OD+qo/rE8jL3n/tkv3daons8ns9drfDOBzPwlPceekZ6jilgaj01RjrcADWRbYBhcAEH4/DnY/GHeoGn2DVi50rpUMEexKVG3BChgNwdpWmf+jivToLiUAqViydpQpJdFB56bklt+fxMozTbWqoX38IJTw9fEdpVAep2ahqrkltK8gWYnwG3wmXG4Lsgoq0qlJtCnfvB9R1Bt7aO4RsL8uk7mcYjMcH3a/dYq6FwbsELna4NkU2uosLje0+MBkFTMzowj1X7ILcYqoq6Fb1dAUk6dj06TJ4/Hyq05Gd4XD0n04esaw3JbTYWudIHW9rXuBvyvMFHLar02rBe4vMllHLnpBPeIuLgbi4n1jcqrUHFOtTamSxVS4KqxDaTpY7EA9RLU4o4VTDZQ2imi1Fp0mq6bsHKkamB2u+5s1uVxFcc23LsV2qKhRaowpoCzMbKo5k+A85tYjKK1MMWAGg2Ya0LDYG+kG9rMN+VzbnJlRq4BadPsbinSpo+IOirVWpX0iykEFVAu12Fjci17bx7O8DTap22GcaeyFVgw7FqZvbSAx7zE2I07G+wtE01DmnLSkiBWc6jq71Lvo2nxLlbC/lcxVx1qvbUF7CxBQI7d0gAbMTfff6zDi65qO1Q82JJ3Y8/NiT9TMQEr24kicZYmnXXEpUL1BSCsaoLAt3tR06vFmtawFzYCWtwj6QMNikVa1RaVa4XS7qNZsO8vIAE32lU5Jwk9ek2JdilFSQzInbMpAv3qaHUOl7jYbyN1BzHMfvL65b07lKLTD9WgwZzOGdf4Sh2jF3NJCzFdFyQD6pAI8Nx0nTM3R3C9UmbUtFeqnhUf6XNvtO/wCj6rarUXxQH6H/AJTk8Tj+qrfq/gTe4DP9Sf8Att+6zycfWf8Atkr+tYsRE9drIiICIiAiIgIiIEA9ICfno3jTA+jN/mcXIqmnE0T/APIg+pt/Mk/pDobUqngWU/OxH+0yF03KkMOYII+I3E8nP9ubbJk6uuUT2YsPVDqrjkwBHwIuJkJnrQ1loIkb4y4pXAUDVWzsKiJpBBtc3YNY906A1vO0imael2kFIw9BmJBsahC2NtiVF7i/S45Su2StZ1MuTaIdHNMgzB8ZWrLUp08OUCgatWoKGK3R1YCzO2wsD85HMFl+PYouIp4mzmqFdFKMaZF71Vo11A7xTu2333PKQ4cW4wuHqVmqAVBUKVCSjMvq6lFrgWFhyvvLbXNMecF+KqpToVgndDkt2m19PZAizNY2Gq42EorNbz1tXExLJljv2Aw9PDUWphVU4eozCou/fFU1d2v3iDp3J38ZCeOc+q4XtcupsexqLY0qwu9AXBAp1Ae8jLyBLadxtaTrLqNPNaAdqlUPTe2o0adKpSqra+i6m1jsbEjYg3kW9IN6SVqOKq0qrVEU0HZFFT8vfSQnqtdms1tLd4HTteeTfj0lb0i3COYO1J8IEpgAmquIdb/hjbdrhTzFxvbmTfaY6fDtfFMuHw9FnK3Z6zgKrAnSjI7KD2dl2U3tvbzmHouyvDnDCviKoYa30UmcCmmjcuyXszd0m7XsBtJhgaisqnAUAVFgKrk00dRqsFaxeoovcG2nwMrpj8qxtGK7jtW+a+j+hTIIxTpqNlp1KDNUGn/UYhbXQe8ARuN5wstrYvL8ZUo4NtVS+jZFcOBuCNQ2532tLlq8LriSXxVaq7lbFadR6KKD7KrTIJW993LHn8JDcb6LqdGnUcCrWYd5QjqpsN9IUodTW+vl1XwzHdYJr+Ed4lzvE49Afw9VKyMadVqVRzTfQLlezBsGBI8ZH8gyRsZUNFXVDb2wx3uABZQT87bSdUMwrUqb1Go1BiEtrWh2IKoQpU1KIRXFwy3Zb9d15Tm8OZtgSAWo1MPaoDUq08aVZtwQWUkNUFy3IbDruZCaxNo3KOtz2tzhzJRg6XZCrVqktqLVqhqG9gLLfku3KdUz5psCAQbg7gjcEdCDFVwoLHkASflN0aiF6rOIn1Yqsf8ArI+m38TqcApfEMfCmfuVkexFXWzOfaYn6m8l3o8of6tT9Kj7k/xPJw/dm3/LJTu6axET12siIgIiICIiAiIgcTi7CdrhntzWzj+3n9rys5crqCCDyIsZUub4I0Kz0j0O3mp3U/SedzadxZnzx8p7wZje0wyr1pkofgN1+xA+U62Y42nQpvWqtpRBdmsTYeNhK+4PzPsK4Vj3KllPkfZP12+csapTDgqwBUixBFwR1BB5iaeNk8scflZjtuqh+MsIuYY96mXo9ZXFM1HRWZdZ7twbbLYL9DJLlnofGg/iMSdZtbsl7oF+9u+7G3LYW85adKiqAKoCgbAAAAD4CZJKMFdzM9u+EIBlvoqwtFtfb1maxG60CtiLEFHpsDsZIhktamnZ0cWygCyh6NF1XwsFVdh0F53ZE+PeLjlqU9NE1GqMQt7hRaxIJHNiL2HlJeNaR+EtRDBWrnLqj4zFp3H0q1Wi9Q01JsNTYZj3SzAbpqO+5kP4m4ewdWhicdTrVXfeqGe6CzMSFCFbkb2vsOW43kzwFD/+xRp4iulSgFctRVKm9rCzlgN+u3Kcfi3hsYDAV+xapUpkMXSo9yjMbdpTawtue8vJgT867xuP4Rn0jPox4aoV/wCpxLHSKgRKZHcqMLHvkizC5Fl8RLsVbbCQL0NMGy9l8K1QH5hT/MmuXYIUE7NWdlHq6zqKgclBtcj43PnJYaxFY07WOmnm2S9u6VFr1qL0wwBostmDWuHR1ZWGw5idKihCgFixAF2NrnzNgBf4ATJEt0kw0sMiliqgFiWYgAEkgAk+dlX6CR/L+BcDRc1ey7RyzsWqd6+s3IK+qQOm20k0RNYn2aeATh8YY3ssMw6v3B8+f2vO4ZXPGeZdtW0Ke7T2+Le0f4+Up5GTwpKvJbVUfllcHYTs8MhPN7ufny+wEr/K8Ea9VKQ9o7+Q5sfpeW1SQKAo5AAD4CZeFTubK8Md7fcRE9FoIiICIiAiIgIiICRPjrK9aDEKO8mz+aePyP7mSyfNRAQQRcEWIPWQyUi9ZrKNo3GlNSxuEs6/EU+zc/mILH/qHRv8yH8SZOcLUsL9m26H/wBT5ic/BYt6Liohsy8v5B8p5eO84cmpZq2mlu1wxOVkWcpikuNmHrr1H+R5zqCetW0WjcNUTuNvZ8sgPy5eU+onXXJyTJBhXrsjuVrVDUCMbrTJ3fSOl2JPzmj6Rq2jLcSbE3p6dhf1iBc+QveSSR/j5Scuxdjb8lzyvsBcj5gW+cjaPtlyfSMehB/6SstuVe9/ElE6eVh9ZYwla+hWuqYStqZV/qLbkC5NNLDfr5Sy5DD+iHKeiIiWpEGJzM7zdMKmpt2Pqr1Y/wADznLWisblyZ13LU4szkYenpU/mOLL5Dq0raZ8djHrOajm7H7eAHlN7h3Jziqun2F3c+XgPMzyct5zX1DLa03t0kfAmV6VOIYbtsnkvU/M/tJfPilTCgKBYAWAHQCfc9PFSKVisNNa+MaIiJYkREQEREBERAREQEREDUzPL0xFM03FweR6g9CPOVjm+VvhnKONvZbow8R/iWzNTMcBTroadRbjp4g+IPQzPnwRkj+VeTH5KpwmKek4qIxVhyI/Y+I8pPci4qp1rJUslT/xb4HofIyKZ7w/Uwp1etT6MBy8mHQ/aceefTJkwTqVEWtSVzAz2VhlXElfD93VrX3X3t8DzE7z8e01W5w9Rj4IUP0LMJvpysdvfS+uWspjONxkt8Bih/8AXq/7DIrX9KtFPWweJHxCAfXVOVnnpVw9fD1qC4eqDUpugJKWBZSLmx85Oc2OY9uzev5ZPQdh1KYioVBYPTCkgEjukmx6c5akoj0b8Z0st7VKyOy1ChBQKSCAQbgkdCPpLFw3pJwVT1RX/wDxY/cXkMOSkUiJkraNJlPLyMYjjWgFuiux8CNP1JkazTiavX7t9C+6m31bmYvysdfnblstYSzPeKKdC6JZ6ngOS/qP8CQDG4t6zmpUbUx+3kB0EwTrZJkFXFG4Gmn1c/so6mYL5Mma2oZ7WtedNXKstfEuKaD9R6KPEyzsry5MPTFNBsOZ6sepMZZl1PDoEpiw6nqT4k9Zuzfg48Y43Ptox4/EiImlYREQEREBERAREQEREBEReAiIgfLKDsRcHnIxm/B1OpdqJ7Nvd5ofl7Py+klMSF8dbxq0I2rFvap8wyevQ/1KZt7w3X6j+ZoS5SJzMZw/hqu7Ulv4r3T9pivwv2ypnB+FWz5amDzAPyEn1fgiifVqOvx0t/E1G4FPSuPmn/KUTxcsfCH0rIYtMDkAPgBPqTFeBT1rj5J/ym1R4HpD16jt8NK/5iOLln4PpWQSb2X5RWrn8umSPeOy/Uyw8Hw9hqW60gT4t3j951AtpfThfulOuD8otlHBtNLNWPaH3Rso+PvSUU6YUAAAAbADYAT7ibaY60jVYXVrFfRERJpEREBERAREQEREBERAREQOPn2ZdgaQaslFXLAs4BGy3AFyN+f0mPG5hUoNSuRUQrVaqwWxCL2dnUC97a7kdRe1yADuZjQqF6dSmFJTXcOxUEMLbEK3h4TxMPUapTquFUqtVSFYt65pkEEqPcN9usj3txrUMyc1ypKmmajU1IHtdjSqpvfkQav/AI/PUr5rWYroZVFRjoOnVZBWp01O53uGZv7h4TM2QlaNelSYIXq9pRO57MhadhY9AVI0jYKQPKfeOyUsaQptoWmqqLW1ALUpMLXBHKmRv4znZ2UswrVCKC6BVBqCo9iUCoV7yre92DrYE93vXJ074szxtfCoxZ1qA06uhtGllqJTeoAwGzKQjb7WIA3vtmw+U1KS0yjKalPtAS17VVdtRLkcnJCsWANjq2sbT5zDLa2JVhV0JZKopqrM4DvTanrZyo2AdhYDqTvtZ2NfMs7qrSXQqisHKOjHYMELAavcawIa3I8r7TLV4gIek2m1IpV7e/rUWRqa3Ye6C5DHwIblMuc5L2706i2DLsSSd16AgcyDyJ5XbxM2Tla/iPxAA71Jkcb94koVNuXJSCeZGkdI1J2w57mXYGkDWSirlgWcAjZbgC5Av/iY8bmFSg1K5FRGWo9VgukhF7OzqBztruR1F7bgA+JltakUFPQyUy3Zh2ZSEZbBCQrX0kWB8LA7i53Ew9VqlOq4RSi1VIVi3rmnYglR7h6dRO9jnYzF1m7RqdYKEr0qYsitqWoKG9z1/Nbl5TZzHHvh+xW+slx2hIC/l3Cs9hts1Sn8rz5o5J2aVKaWCtiKdVRcnSqmiSvl/psABsBpHIT3MsmbENUJrOivS7IBNHqnVrJLKSCSRyI9UR2N7AVy5q39mqVHwCqf5M8zeu9Okz0xdhp9ktZSwDtpG7aVLNYc7TXy2hiKbNrFMh21MwdrglFBspS3rKevIzdxZqADs1VjffW5QW+IVt534dc1cVVqFaVKqjXQVGraQQEYkJoUGzFrNvew08jcCeV8fUwt+2PaJodldUs96a6mQqDZiVBIItyItyJ8w+V1aVqlNk7QmprUgrTYO7OFBFypUsbNY31Ncb7ZKuWviCTiNIXQ6KlNmIGsaWYuQCW03AsBa5532j241M1x+Jw9LtXamGbX3QpK09NCtUtqJu51ItztcDkJu5fWNZWanilqCxUMiLZW8eZBt4TVzDK8RWpikzoSuvS+6l9VGrTBdQLA3dSbbHfYcp1MK1cn8xKai22iozm/wKLt853vY5eFr4haVSs1XtND1Bp7NVutKoQ1tPtFFNvMidLC4s1KrBSDTVVFx1dhq5+AQof7/KfeX4Y01ZTY3qVX28HdmHzs0xZJl/4ekKe2zVDtfkzsVG/gpUfKOx0IiJJ0iIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiIH/2Q==\" alt=\"\" align=\"none\"><br></p>\r\n	\r\n        ', 'Enviromental Society', '2019-03-10 11:07:07', 'Bachelor', 'General', 'General', 16),
(175, 'test', '			gthytets<br>\r\n			<p><br>\r\n            <img src=\"badges/image1.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image2.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image4.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image5.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image6.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image7.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image8.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image9.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image10.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image11.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image12.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image13.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image14.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image15.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image16.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image17.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image18.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image19.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image20.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image21.png\" style=\"height:70px; width:70px;\">\r\n            \r\n            </p>\r\n	\r\n        ', 'Company Visits', '2019-03-15 11:27:32', 'Bachelor', 'Computer Science', 'Level 2', 14),
(176, 'test', '			fdrfeq<br>\r\n			<p><br>\r\n            <img src=\"badges/image1.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image2.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image4.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image5.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image6.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image7.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image8.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image9.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image10.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image11.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image12.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image13.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image14.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image15.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image16.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image17.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image18.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image19.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image20.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image21.png\" style=\"height:70px; width:70px;\">\r\n            \r\n            </p>\r\n	\r\n        ', 'Professional Seminars', '2019-03-15 11:31:41', 'Bachelor', 'Computer Science', 'Level 2', 14),
(177, 'fre', '			freq<br>\r\n			<p><br>\r\n            <img src=\"badges/image1.png\" style=\"height:70px; width:70px;\">&nbsp;</p>\r\n	\r\n        ', 'Pressentations/Talks', '2019-03-15 11:32:08', 'Bachelor', 'Computer Science', 'Level 1 Year 2', 14),
(179, 'Talk from Dr. Kefalas', '			Lorem ipsum<br>\r\n			<p><br>\r\n            <img src=\"badges/image1.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image2.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image4.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image5.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image6.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image7.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image8.png\" style=\"height:70px; width:70px;\"></p>\r\n	\r\n        ', 'Pressentations/Talks', '2019-03-29 10:56:44', 'Bachelor', 'Computer Science', 'Level 3', 3),
(180, 'Carreer Day on March', '			Different companies from Greece will come to visit...<br>\r\n			<p><br><br></p>\r\n	\r\n        ', 'Carreer Day', '2019-03-29 10:59:06', 'Select one:', 'Select one:', 'Select one:', 3),
(181, 'Test for CSU', 'LOREM IPSUM DONOR SIT AMNES', 'C.S.U.', '2019-03-29 11:08:47', 'Bachelor', 'General', 'General', 3),
(182, 'Professional Seminar S.E.O.', '			Search Engine Optimization for the C.S. Department<br>\r\n			<p><br>\r\n            <img src=\"badges/image1.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image2.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image4.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image5.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image6.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image7.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image8.png\" style=\"height:70px; width:70px;\"></p>\r\n	\r\n        ', 'Professional Seminars', '2019-03-29 11:10:27', 'Bachelor', 'Computer Science', 'Level 3', 3),
(183, 'SCS', '			 			SDGSFGDFGDFGaa<br>\r\n			<p><br>&nbsp;&nbsp; <img src=\"badges/image5.png\" style=\"height:70px; width:70px;\">&nbsp;\r\n           <img src=\"badges/image15.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image16.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image17.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image18.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image19.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image20.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image21.png\" style=\"height:70px; width:70px;\">\r\n            \r\n            </p>\r\n	\r\n                \r\n		', 'Arificial Intelligence Club', '2019-04-04 14:27:39', 'Bachelor', 'Computer Science', 'General', 3),
(184, 'test', '			 			 			 			 			<span style=\"background-color: rgb(255, 255, 255);\" mercury=\"\" ssm=\"\" a\",=\"\" \"mercury=\"\" b\",=\"\" georgia,=\"\" times,=\"\" \"times=\"\" new=\"\" roman\",=\"\" \"microsoft=\"\" yahei=\"\" new\",=\"\" yahei\",=\"\" ??®?½??›…?»‘,=\"\" ?®‹?½“,=\"\" simsun,=\"\" stxihei,=\"\" ???–‡?»†?»‘,=\"\" serif;=\"\" font-size:=\"\" 26px;=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);\"=\"\"><font color=\"#000000\" style=\"\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</font></span><br>\r\n			<p><br>\r\n            <img src=\"badges/image1.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image2.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image4.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image5.png\" style=\"height:70px; width:70px;\">\r\n<img src=\"badges/image9.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image10.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image11.png\" style=\"height:70px; width:70px;\"><img src=\"badges/image12.png\" style=\"height: 70px; width: 70px;\">&nbsp;&nbsp;<img src=\"badges/image13.png\" style=\"height: 70px; width: 70px;\">\r\n           <img src=\"badges/image14.png\" style=\"height: 70px; width: 70px;\">\r\n           <img src=\"badges/image15.png\" style=\"height: 70px; width: 70px;\">\r\n           <img src=\"badges/image16.png\" style=\"height: 70px; width: 70px;\">\r\n           <img src=\"badges/image17.png\" style=\"height: 70px; width: 70px;\">&nbsp;</p>\r\n            		\r\n                \r\n		        \r\n		        \r\n		        \r\n		', 'home', '2019-04-08 17:35:32', 'General', 'General', 'General', 2),
(187, 'car day cs', '			Dummy text!<br>\r\n			<p><br>\r\n            <img src=\"badges/image1.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image2.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image4.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image5.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image6.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image7.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image8.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image9.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image10.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image11.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image12.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image13.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image14.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image15.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image16.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image17.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image18.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image19.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image20.png\" style=\"height:70px; width:70px;\">\r\n           <img src=\"badges/image21.png\" style=\"height:70px; width:70px;\">\r\n            \r\n            </p>\r\n	\r\n        ', 'Carreer Day', '2019-06-01 12:52:01', 'Bachelor', 'Computer Science', 'Level 3', 3),
(191, 'Submission of the disseration', '			 			 <p>This is just a reminder that the <font style=\"background-color: rgb(0, 204, 255);\" color=\"#ffff33\">dissertations</font> for the <span style=\"background-color: rgb(0, 0, 0);\"><font color=\"#66ffff\">Computer Science</font> </span>Department will be submitted on <font color=\"#ff0000\">Friday 7</font> of June until <font color=\"#6666cc\">16:00</font>.</p>\r\n            		\r\n                \r\n		        \r\n		', 'home', '2019-06-06 18:23:37', 'Bachelor', 'Computer Science', 'Level 3', 22);

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userclub_fk` (`staff_fk`);

--
-- Ευρετήρια για πίνακα `enroll`
--
ALTER TABLE `enroll`
  ADD PRIMARY KEY (`enroll_id`),
  ADD KEY `studenten_fk` (`user_fk`),
  ADD KEY `cluben_fk` (`club_fk`);

--
-- Ευρετήρια για πίνακα `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `enrollfk` (`enroll_fk`),
  ADD KEY `club_fk` (`club_fk`);

--
-- Ευρετήρια για πίνακα `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `staff_message`
--
ALTER TABLE `staff_message`
  ADD KEY `staff_fk` (`staff_id`),
  ADD KEY `message_fk` (`m_id`);

--
-- Ευρετήρια για πίνακα `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentid`);

--
-- Ευρετήρια για πίνακα `stu_message`
--
ALTER TABLE `stu_message`
  ADD KEY `student_fk` (`stu_id`),
  ADD KEY `message_fk2` (`mid`);

--
-- Ευρετήρια για πίνακα `texts`
--
ALTER TABLE `texts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_fk` (`user_fk`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `club`
--
ALTER TABLE `club`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT για πίνακα `enroll`
--
ALTER TABLE `enroll`
  MODIFY `enroll_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT για πίνακα `message`
--
ALTER TABLE `message`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT για πίνακα `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT για πίνακα `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT για πίνακα `student`
--
ALTER TABLE `student`
  MODIFY `studentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT για πίνακα `texts`
--
ALTER TABLE `texts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

--
-- Περιορισμοί για άχρηστους πίνακες
--

--
-- Περιορισμοί για πίνακα `club`
--
ALTER TABLE `club`
  ADD CONSTRAINT `userclub_fk` FOREIGN KEY (`staff_fk`) REFERENCES `staff` (`id`);

--
-- Περιορισμοί για πίνακα `enroll`
--
ALTER TABLE `enroll`
  ADD CONSTRAINT `cluben_fk` FOREIGN KEY (`club_fk`) REFERENCES `club` (`id`),
  ADD CONSTRAINT `studenten_fk` FOREIGN KEY (`user_fk`) REFERENCES `student` (`studentid`);

--
-- Περιορισμοί για πίνακα `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `club_fk` FOREIGN KEY (`club_fk`) REFERENCES `club` (`id`),
  ADD CONSTRAINT `enrollfk` FOREIGN KEY (`enroll_fk`) REFERENCES `enroll` (`enroll_id`);

--
-- Περιορισμοί για πίνακα `staff_message`
--
ALTER TABLE `staff_message`
  ADD CONSTRAINT `message_fk` FOREIGN KEY (`m_id`) REFERENCES `message` (`id`),
  ADD CONSTRAINT `staff_fk` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`);

--
-- Περιορισμοί για πίνακα `stu_message`
--
ALTER TABLE `stu_message`
  ADD CONSTRAINT `message_fk2` FOREIGN KEY (`mid`) REFERENCES `message` (`id`),
  ADD CONSTRAINT `student_fk` FOREIGN KEY (`stu_id`) REFERENCES `student` (`studentid`);

--
-- Περιορισμοί για πίνακα `texts`
--
ALTER TABLE `texts`
  ADD CONSTRAINT `user_fk` FOREIGN KEY (`user_fk`) REFERENCES `staff` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
