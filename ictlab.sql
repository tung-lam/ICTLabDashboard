-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2016 at 08:04 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ictlab`
--

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE `calendar` (
  `calendar_id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `location` varchar(30) DEFAULT NULL,
  `speaker` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`calendar_id`, `title`, `date`, `start_time`, `end_time`, `location`, `speaker`) VALUES
(1, 'ICTLab Seminar 1', '2016-11-04', '09:00:00', '10:00:00', 'USTH Building', 'Dr. Tran Giang Son'),
(2, 'ICTLab Seminar 2', '2016-11-15', '10:00:00', '11:00:00', 'USTH Building', 'Dr. Nghiem Thi Phuong');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `title`, `content`) VALUES
(1, 'Call for internship 2016 (HealthOmics) | ICTLab', '                                <p class="date">Match 2, 2016</p>\r\n                                <h5>Description</h5>\r\n                                <p>The project Omics data analysis for human health and diseases in Vietnam (HealthOmics) is open for two interns, who may be in their second or third-year at ICT department, USTH. Candidates are expected to be interested in computational biology but not necessarily having experience in this field and will be trained where necessary.\r\n                                <br><br>\r\n                                General purpose is to build a Galaxy instance (galaxy.org) running that provides pipelines and tools for various bioinformatic analyses. The tentative tasks, to be supervised by and collaborate with project staffs, for interns tentatively are:\r\n                                <br><br>\r\n                                – Customize Galaxy user interface, for example, language (Vietnamese)<br>\r\n                                – Deploy Galaxy docker<br>\r\n                                – Find solution for data storage: MySQL/PostgreSQL<br>\r\n                                – Develop tools and workflows/pipeline for galaxy<br>\r\n                                – Document Helps and user’s guides<br>\r\n                                – Support and attend Galaxy training in class/summer school to be organized in Vietnam.</p>\r\n                                <h5>Requirement</h5>\r\n                                <p>\r\n                                The skills/expertise required includes one or more of the following:\r\n                                <br>\r\n                                – Familiar with Linux-based environment<br>\r\n                                – Python<br>\r\n                                – XML<br>\r\n                                – HTML/Javascript<br>\r\n                                </p>\r\n                                <h5>Conditions:</h5>\r\n                                <p>– Work part-time in ICT lab, estimatedly 8 hours/week (to be discussed).\r\n                                – Be aware of the project timeline and commit to the schedule once being agreed.<br>\r\n                                – Self-motivated: ready to learn new skills and domain knowledge where necessary (very basic level of molecular biology/bioinformatics).<br>\r\n                                </p>\r\n                                <h5>Compensation:</h5>\r\n                                <p>– Training new skills/expertise\r\n                                – Opportunities to use a part of the project as graduation/year-end project.<br>\r\n                                – Possible financial support (to be discussed)<br>\r\n                                </p>\r\n                                <h5>How to apply:</h5>\r\n                                <p>Please contact hobichhai@gmail.com, and possibly followed by a chat in ICT lab.\r\n                                </p>\r\n                                <h5>Deadline:</h5>\r\n                                <p>Open until filled.</p>'),
(2, 'Call for bachelor internships at ICTLab', '<p class="date">January 24, 2016</p>\r\n                                <h5>Description</h5>\r\n                                <p>In the context of the SWARMS project (see the figure) of our ICTLab of USTH, we are looking for ICT bachelor students  who prefers to do his/her final internship in the ICTLab. If you get interested, please feel free to contact the supervisors mentioned in the subjects via their email or directly at ICTLab. We will study your application and interviews will be held to select the appropriate candidates.\r\n                                <br>\r\n                                The internships will be hosted by the ICT lab of USTH. Candidates will be selected according to their academical and programming skills as well as the adequation of their profile with the subject. The selected students may get some extract supporting salary depending on the particular policy of each project.\r\n                                </p>\r\n                                <h5>The 5 internship subjects are:</h5>\r\n                                <p>Topic 1: Android application development for image, voice and text acquisitions\r\n                                <br><br>\r\n                                Topic 2: Nonparametric method for image analysis\r\n                                <br><br>\r\n                                Topic 3: Deep learning for image analysis – application to dengue fever risky sites monitoring\r\n                                <br><br>\r\n                                Topic 4: Hidden Markov Model (HMM) for automatic speech recognition (ASR) with special name entities for dengue fever risky sites monitoring\r\n                                <br><br>');

-- --------------------------------------------------------

--
-- Table structure for table `public`
--

CREATE TABLE `public` (
  `public_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `public`
--

INSERT INTO `public` (`public_id`, `name`, `content`) VALUES
(1, 'about', '<p><br>\r\n                    ICTLab is a joint international ICT research laboratory between <a href="http://usth.edu.vn">USTH</a> and Vietnamese and French partners. It involves researchers coming from USTH, IOIT (Institute of Information Technology, Hanoï), IRD (Institut de Recherche pour le Développement) and the University of La Rochelle, France.\r\n                </p>\r\n                <br>\r\n                <h3 class="title">HISTORY</h2>\r\n                <p>\r\n                    ICTLab was created on December 1st, 2014. Its creation was supported (directly or indirectly) by USTH, the French Embassy in Vietnam, 13 French high education institutes and universities (USTH Consortium), and the ADB (Asian Development Bank).\r\n                </p>\r\n                <br>\r\n                <h3 class="title">FACILITIES</h2>\r\n                <p>\r\n                    The laboratory is located in the heart of the VAST (Vietnamese Academy of Science and Technology) complex, in the city center of Hanoï, Vietnam.<br>\r\n                    Hereafter a few pictures of our facilities.<br>\r\n                </p>\r\n                <center>\r\n                    <img class="img-responsive" src="../../img/facilities.png">\r\n                </center>'),
(2, 'research_topics', '<p><br>\r\n                    The research program we work on in the ICT laboratory of USTH targets two main applicative axes:\r\n                    <br>\r\n                    – Cultural heritage preservation and promotion <br>\r\n                    – Environmental protection and environmental risk management.\r\n                    <br><br>\r\n                    There are various problems and challenges linked to these two applicative fields, but the underlying scientific axes of research are common. The main scientific axes that we consider in this research program are:\r\n                    <ul class="ulPadding">\r\n                    <li>Modelling</li>\r\n                    <li>Image Processing and Analysis</li>\r\n                    <li>Geographical Information Systems</li>\r\n                    <li>Machine Learning</li>\r\n                    <li>Expert user interaction</li>\r\n                    <li>Information Retrieval</li>\r\n                    <li>Sensors\r\n                    </ul>\r\n                    The interactions between the applicative axes and the scientific axes of this program are presented in the figure.\r\n                </p>\r\n                <center>\r\n                    <img class="img-responsive" src="../../img/topics.png">\r\n                </center>'),
(3, 'research_projects', '<p><br>\r\n                    Together with most of the partners of this program, we are working on the two following projects.\r\n                </p>\r\n                <br>\r\n                <p>\r\n					<a href="research_projects/archives"><strong>ARCHIVES</strong> (Analysis and Reconstruction of Catastrophes in History within Interactive Virtual Environments and Simulations)</a><br>\r\n                    The goal is to support historical research on past disasters with the help of advanced document image processing and analysis, information retrieval, machine learning, Geographical Information Systems (GIS) representation, expert user interaction and agent-based computer modelling. The case study considered is the Red River floods and their impacts on Hanoi over the past centuries. \r\n				</p>\r\n				<br>\r\n				<p>\r\n					<a href="research_projects/swarms"><strong>SWARMS</strong> (Say and Watch: Automated image/sound Recognition for Mobile monitoring Systems)</a> <br>\r\n                    The objective of this project is to obtain a flexible and real-time monitoring network, which could supplement possibly existing (fixed) networks, and could then feed a decision-support system (through models and simulations of evolution scenarios) or support an advanced visualization of the phenomenon to monitor. The main idea is to study in a real context the feasibility of a smartphone-based monitoring network, where the devices are not only used as passive sensors but can also be actively used by their owners to transmit visual, voice and textual pieces of information to the monitoring system, in order to enable stakeholders to analyze and forecast information.\r\n				</p>'),
(4, 'swarms', '<p><br>\r\n                    SWARMS (Say and Watch: Automated image/sound Recognition for Mobile monitoring Systems).\r\n                </p>\r\n                <br>\r\n                <p>\r\n                    The objective of this project is to obtain a flexible and real-time monitoring network, which could supplement possibly existing (fixed) networks, and could then feed a decision-support system (through models and simulations of evolution scenarios) or support an advanced visualization of the phenomenon to monitor. <br>\r\n                </p>\r\n                <br>\r\n                <p>\r\n                    The main idea is to study in a real context the feasibility of a smartphone-based monitoring network, where the devices are not only used as passive sensors but can also be actively used by their owners to transmit visual, voice and textual pieces of information to the monitoring system, in order to enable stakeholders to analyze and forecast information. <br>\r\n                </p>\r\n				<p> <strong> Partners:</strong> </p>	\r\n				<p> \r\n					Project Investigator : Muriel Visani(1, 2)\r\n				</p>\r\n				<p> \r\n					(1) Vietnam-France ICT Lab, <a href="http://www.usth.edu.vn"> USTH</a> , Hanoï \r\n				</p>\r\n				<p>\r\n					(2) <a href=" http://l3i.univ-larochelle.fr/"> L3i, University of La Rochelle, France </a>\r\n				</p>\r\n				<p>\r\n					<a href="http://www.vietnam.ird.fr/l-ird-au-vietnam/presentation" > UMMISCO, Institut de Recherche pour le Développement</a> , France\r\n				</p>\r\n				<p> \r\n					<a href=" http://www.ioit.ac.vn/pages/index.asp?lang=1">IOIT</a>, <a href="http://www.vast.ac.vn/en">Vietnamese Academy of Science and Technology</a>, Hanoï\r\n				</p>\r\n				<p>\r\n					<a href="http://xlim-sic.labo.univ-poitiers.fr"> XLIM</a>, Poitiers, France\r\n				</p>\r\n				<p>\r\n					<a href="http://www.cuscsoft.com/index.php?outsource/EN">Can Tho University Software Center</a>, Vietnam\r\n				</p>\r\n				<p>\r\n					<a href="https://www.labri.fr"> LaBRI</a>, University of Bordeaux, France\r\n				</p>\r\n				<br>\r\n				<center>\r\n					<img alt="Swarms project" src="../../../img/image_process_swarms-1024x904.jpg" width="100%">\r\n				</center>'),
(5, 'archives', '<p><br>\r\n					<strong>ARCHIVES: </strong> Analysis and Reconstruction of Catastrophes in History within Interactive Virtual Environments and Simulations\r\n                </p>\r\n                <br>\r\n                <p>\r\n                    The goal of ARCHIVES is to support historical researches on past natural disasters with the help of advanced document image analysis, knowledge management, GIS representation and agent-based computer modeling. The idea is that, a better understanding of past events, of their impacts on the communities as well as of adaptation measures undertaken could help to improve the management and prediction of the natural hazards. The case study considered is the Red River floods and their impacts on Hanoi over the past centuries. The project is built upon the achievement of three complementary goals, which correspond to research issues, each of them involving 4 or more partners.<br>\r\n                </p>\r\n                <br>  \r\n                <p>\r\n                    These goals are undertaken by 3 work packages: <br>\r\n                </p>\r\n                <p>\r\n					<ul>\r\n						<li> <i>WP1 – Navigable corpus</i>: Build a navigable, sharable and expendable corpus from the data that document a past catastrophic event. </li>\r\n						<li> <i>WP2 – Geo-historical database</i>: Build a geo-historical GIS that supports spatial and temporal navigation within past events.</li>\r\n						<li> <i>WP3 – Geo-historical agent-based model</i>: Design agent-based models of past catastrophic events and run simulations faithful to historical accounts.</li>\r\n					</ul>\r\n				</p>\r\n				<br>\r\n				<center> \r\n					<img  src="../../../img/5blocsPoster.png" height="90%" width="90%">\r\n				</center>\r\n				<br>\r\n				<p>\r\n					Project Investigator: Alexis DROGOUL (1, 2)\r\n				</p>\r\n				<br>\r\n				<p>\r\n					(1) UMI UMMISCO 209, IRD & UPMC, France.\r\n				</p>\r\n				<p>\r\n					(2) Co-director, ICTLab, USTH, Hanoi, Vietnam\r\n				</p>\r\n				<br>\r\n				<p>\r\n					<strong>Partners: </strong>\r\n				</p>\r\n				<br>\r\n				<p>\r\n					<a href="http://www.ummisco.fr/" >UMMISCO</a>,<a href="http://www.vietnam.ird.fr/l-ird-au-vietnam/presentation"> Institut de Recherche pour le Développement</a>, France\r\n				</p>\r\n				<p>\r\n					<a href="http://l3i.univ-larochelle.fr"> L3I </a>, University of La Rochelle, France\r\n				</p>\r\n				<p>\r\n					<a href="https://www.irit.fr/?lang=en">IRIT, University of Toulouse </a>, France\r\n				</p>\r\n				<p>\r\n					<a href="http://ictlab.usth.edu.vn ">ICTLab</a>, University of Science and Technology of Hanoi, Vietnam\r\n				</p>\r\n				<p>\r\n					<a href="http://www.ioit.ac.vn/pages/index.asp?lang=1 ">IOIT</a>, Vietnamese Academy of Science and Technology, Vietnam\r\n				</p>\r\n				<p>\r\n					<a href=" https://vnsc.org.vn/en/">VNSC</a>, Vietnamese Academy of Science and Technology, Vietnam\r\n				</p>\r\n				<p>\r\n					<a href=" http://hus.vnu.edu.vn/en">VNU-HUS</a>, Vietnam National University, Vietnam\r\n				</p>\r\n				<p>\r\n					<a href="https://vnu.edu.vn/eng/?C2249/N12736/VNU-International-Center-for-Advanced-Research-on-Global-Change.htm ">VNU-ICARGC</a>, Vietnam National University, Vietnam\r\n				</p>\r\n				<p>\r\n					<a href="https://www.archives.gov/ ">National Archives</a>, Vietnam\r\n				</p>\r\n				<p>\r\n					<a href=" http://www.efeo.fr/index.php?l=EN">EFEO</a>, Vietnam\r\n				</p>'),
(6, 'members', '<h3 class="mem_title">DIRECTORS</h3>                \r\n                <br>\r\n                    <div class="mem_profile">\r\n                        <div class="logo-box">\r\n                            <img src="../../img/members/01.jpg" alt=""  />\r\n                            <div class="mem_text">\r\n                                <h4>Remy Mullot</h4>\r\n                                <p>Professor, University of La Rochelle, FrancDirector and Senior Researcher</p>\r\n                            </div>\r\n                        </div>\r\n                        <div class="logo-box">\r\n                            <img src="../../img/members/02.jpg" alt=""  />\r\n                            <div class="mem_text">\r\n                                <h4>Luong Chi Mai</h4>\r\n                                <p>Associate Professor, IOIT, VAST Co-Director & Senior Researcher</p>\r\n                            </div>\r\n                        </div>\r\n                        <div class="logo-box">\r\n                            <img src="../../img/members/03.jpg" alt=""  />\r\n                            <div class="mem_text">\r\n                                <h4>Alexis Drogoul</h4>\r\n                                <p>Research Director, IRD Co-Director & Senior Researcher</p>\r\n                            </div>\r\n                        </div>\r\n                        <div class="logo-box">\r\n                            <img src="../../img/members/04.jpg" alt=""  />\r\n                            <div class="mem_text">\r\n                                <h4>Ho Tuong Vinh</h4>\r\n                                <p>Research Director, IFI-MSI Co-Director & Senior Researcher</p>\r\n                            </div>\r\n                        </div>\r\n                        <div class="logo-box">\r\n                            <img src="../../img/members/05.jpeg" alt=""  />\r\n                            <div class="mem_text">\r\n                                <h4>Jean-Daniel Zucker</h4>\r\n                                <p>Research Director, UMI UMMISCO Senior Researcher</p>\r\n                            </div>\r\n                        </div>\r\n                        <div class="logo-box">\r\n                            <img src="../../img/members/06.jpg" alt=""  />\r\n                            <div class="mem_text">\r\n                                <h4>Muriel Visani</h4>\r\n                                <p>Associate Professor, University of La Rochelle, France Senior Researcher</p>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                <br>\r\n                <h3 class="mem_title">SECRETARIAT</h3>           \r\n                <br>\r\n                    <div class="mem_profile">\r\n                        <div class="logo-box">\r\n                            <img src="../../img/members/07.jpg" alt=""  />\r\n                            <div class="mem_text">\r\n                                <h4>Phung Thi Thanh Tu</h4>\r\n                                <p>Academic & Research Assistant</p>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                <br>    \r\n                <h3 class="mem_title">LECTURERS</h3>\r\n                <br>\r\n                    <div class="mem_profile">\r\n                        <div class="logo-box">\r\n                            <img src="../../img/members/08.jpg" alt=""  />\r\n                            <div class="mem_text">\r\n                                <h4>Doan Nhat Quang</h4>\r\n                                <p>Ph.D. in Computer Science </p>\r\n                            </div>\r\n                        </div>\r\n                        <div class="logo-box">\r\n                            <img src="../../img/members/09.png" alt=""  />\r\n                            <div class="mem_text">\r\n                                <h4>Tran Giang Son</h4>\r\n                                <p>Ph.D. in Computer Science </p>\r\n                            </div>\r\n                        </div>\r\n                        <div class="logo-box">\r\n                            <img src="../../img/members/10.jpg" alt=""  />\r\n                            <div class="mem_text">\r\n                                <h4>Nghiem Thi Phuong</h4>\r\n                                <p>Ph.D. in Computer Science </p>\r\n                            </div>\r\n                        </div>\r\n                        <div class="logo-box">\r\n                            <img src="../../img/members/11.jpg" alt=""  />\r\n                            <div class="mem_text">\r\n                                <h4>Tran Hoang Tung</h4>\r\n                                <p>Ph.D. in Computer Science </p>\r\n                            </div>\r\n                        </div>\r\n                        <div class="logo-box">\r\n                            <img src="../../img/members/12.jpg" alt=""  />\r\n                            <div class="mem_text">\r\n                                <h4>Giang Anh Tuan</h4>\r\n                                <p>Ph.D. in Computer Science </p>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                    <br>\r\n                    <h3 class="mem_title">INVITED RESEARCHERS</h3>                \r\n                    <br>\r\n                    <div class="mem_profile">\r\n                        <div class="logo-box">\r\n                            <img src="../../img/members/13.png" alt=""  />\r\n                            <div class="mem_text">\r\n                                <h4>Bruno Lescalier</h4>\r\n                                <p>Senior Researcher, Laboratory L3i, University of La Rochelle, France</p>\r\n                            </div>\r\n                        </div>\r\n                        <div class="logo-box">\r\n                            <img src="../../img/members/14.jpg" alt=""  />\r\n                            <div class="mem_text">\r\n                                <h4>Julien Mazars</h4>\r\n                                <p>Researcher, IOIT</p>\r\n                            </div>\r\n                        </div>\r\n                         <div class="logo-box">\r\n                            <img src="../../img/members/15.png" alt=""  />\r\n                            <div class="mem_text">\r\n                                <h4>Ho Bich Hai</h4>\r\n                                <p>Researcher, IOIT</p>\r\n                            </div>\r\n                        </div>\r\n                    </div>'),
(7, 'contact', '                <p>\r\n                    <h3>Address</h3>\r\n                    USTH ICTLAB Research Laboratory <br>\r\n                    5th Floor, Education and Services Building <br>\r\n                    18 Hoang Quoc Viet, Cau Giay, Hanoi\r\n                </p>\r\n                <p>\r\n                    <h3>Assistant</h3>\r\n                    Ms. Phung Thi Thanh Tu<br>\r\n                    <a href="mailto:phung-thi-thanh.tu@usth.edu.vn">phung-thi-thanh.tu@usth.edu.vn</a> <br>\r\n                </p>\r\n                <br>');

-- --------------------------------------------------------

--
-- Table structure for table `publication`
--

CREATE TABLE `publication` (
  `publication_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `publication_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publication`
--

INSERT INTO `publication` (`publication_id`, `id`, `publication_name`) VALUES
(1, 2, 'Publication 1'),
(2, 2, 'Publication 2'),
(3, 1, 'Publication 3');

-- --------------------------------------------------------

--
-- Table structure for table `research`
--

CREATE TABLE `research` (
  `research_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `research_project` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `research`
--

INSERT INTO `research` (`research_id`, `id`, `research_project`) VALUES
(1, 2, 'Project 1'),
(2, 1, 'Project 2'),
(3, 2, 'Project 3');

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

CREATE TABLE `supervisor` (
  `supervised_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `student` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supervisor`
--

INSERT INTO `supervisor` (`supervised_id`, `id`, `student`) VALUES
(1, 1, 'Student 1'),
(2, 2, 'Student 2'),
(3, 2, 'Student 3'),
(4, 1, 'Student 4'),
(5, 2, 'Student 5');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0',
  `avatar` varchar(30) DEFAULT 'default_avatar.png',
  `fullname` varchar(30) DEFAULT NULL,
  `title` varchar(30) DEFAULT NULL,
  `position` varchar(30) DEFAULT NULL,
  `affiliation` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `isAdmin`, `avatar`, `fullname`, `title`, `position`, `affiliation`) VALUES
(1, 'Quang Doan', 'admin@gmail.com', '1', 1, 'default_avatar.png', 'DOAN Nhat Quang', 'Dr.', 'Head', 'ICTLab'),
(2, 'Tung Tran', 'staff1@gmail.com', '1', 0, 'default_avatar.png', 'TRAN Hoang Tung', 'Dr.', 'Lecturer', 'USTH');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`calendar_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `public`
--
ALTER TABLE `public`
  ADD PRIMARY KEY (`public_id`);

--
-- Indexes for table `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`publication_id`);

--
-- Indexes for table `research`
--
ALTER TABLE `research`
  ADD PRIMARY KEY (`research_id`);

--
-- Indexes for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`supervised_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `calendar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `public`
--
ALTER TABLE `public`
  MODIFY `public_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `publication`
--
ALTER TABLE `publication`
  MODIFY `publication_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `research`
--
ALTER TABLE `research`
  MODIFY `research_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `supervised_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
