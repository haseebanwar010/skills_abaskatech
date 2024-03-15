-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2018 at 10:43 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skills`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(11) NOT NULL,
  `a_email` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `google_plus` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `pak_title1` varchar(255) NOT NULL,
  `pak_loc1` varchar(255) NOT NULL,
  `pak_phone1` varchar(255) NOT NULL,
  `pak_msg1` varchar(255) NOT NULL,
  `pak_fax1` varchar(255) NOT NULL,
  `pak_website1` varchar(255) NOT NULL,
  `pak_title2` varchar(255) NOT NULL,
  `pak_loc2` varchar(255) NOT NULL,
  `pak_phone2` varchar(255) NOT NULL,
  `pak_msg2` varchar(255) NOT NULL,
  `pak_fax2` varchar(255) NOT NULL,
  `pak_website2` varchar(255) NOT NULL,
  `siri_title1` varchar(255) NOT NULL,
  `siri_loc1` varchar(255) NOT NULL,
  `siri_phone1` varchar(255) NOT NULL,
  `siri_msg1` varchar(255) NOT NULL,
  `siri_fax1` varchar(255) NOT NULL,
  `siri_title2` varchar(255) NOT NULL,
  `siri_loc2` varchar(255) NOT NULL,
  `siri_phone2` varchar(255) NOT NULL,
  `siri_msg2` varchar(255) NOT NULL,
  `siri_fax2` varchar(255) NOT NULL,
  `siri_title3` varchar(255) NOT NULL,
  `siri_loc3` varchar(255) NOT NULL,
  `siri_phone3` varchar(255) NOT NULL,
  `siri_msg3` varchar(255) NOT NULL,
  `siri_fax3` varchar(255) NOT NULL,
  `siri_title4` varchar(255) NOT NULL,
  `siri_loc4` varchar(255) NOT NULL,
  `siri_phone4` varchar(255) NOT NULL,
  `siri_msg4` varchar(255) NOT NULL,
  `siri_fax4` varchar(255) NOT NULL,
  `siri_title5` varchar(255) NOT NULL,
  `siri_loc5` varchar(255) NOT NULL,
  `siri_phone5` varchar(255) NOT NULL,
  `siri_msg5` varchar(255) NOT NULL,
  `siri_fax5` varchar(255) NOT NULL,
  `siri_title6` varchar(255) NOT NULL,
  `siri_loc6` varchar(255) NOT NULL,
  `siri_phone6` varchar(255) NOT NULL,
  `siri_msg6` varchar(255) NOT NULL,
  `siri_fax6` varchar(255) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `a_email`, `facebook`, `twitter`, `google_plus`, `instagram`, `linkedin`, `pak_title1`, `pak_loc1`, `pak_phone1`, `pak_msg1`, `pak_fax1`, `pak_website1`, `pak_title2`, `pak_loc2`, `pak_phone2`, `pak_msg2`, `pak_fax2`, `pak_website2`, `siri_title1`, `siri_loc1`, `siri_phone1`, `siri_msg1`, `siri_fax1`, `siri_title2`, `siri_loc2`, `siri_phone2`, `siri_msg2`, `siri_fax2`, `siri_title3`, `siri_loc3`, `siri_phone3`, `siri_msg3`, `siri_fax3`, `siri_title4`, `siri_loc4`, `siri_phone4`, `siri_msg4`, `siri_fax4`, `siri_title5`, `siri_loc5`, `siri_phone5`, `siri_msg5`, `siri_fax5`, `siri_title6`, `siri_loc6`, `siri_phone6`, `siri_msg6`, `siri_fax6`, `datetime`) VALUES
(1, 'ahmed.vaseer@skillsinternational.lk', 'f+', 't+', 'g+', 'Y+', 'L+', 'Skills International (Pvt) Ltd Liaison Office', 'No. 421 Block G-3, Johar Town, Yaseen Khan Watto Road, Johar Town, Lahore, Pakistan.', '(+92) 42 35310066, (+92) 42 35310166', 'info@skillsinternational.lk', '(+92) 42 35290642', 'www.skills.rozee.pk', 'Skills International (Pvt) Ltd Karachchi Office', 'No. 421 Block G-3, Johar Town, Yaseen Khan Watto Road, Johar Town, Lahore, Pakistan.', '(+92) 42 35310066, (+92) 42 35310166', 'info@skillsinternational.lk', '(+92) 42 35290642', 'www.skills.rozee.pk', 'Skills International (Pvt) Ltd - Head office', 'No. 321, Galle Road, Colombo 3, Sri Lanka.', '(+94) 11 2375270, (+94) 11 2375271', 'info@skillsinternational.lk', '(+92) 42 35290642', 'Skills College of Technology - Nugegoda', 'No. 321, Galle Road, Colombo 3, Sri Lanka.', '(+94) 11 2375270, (+94) 11 2375271', 'info@skillsinternational.lk', '(+92) 42 35290642', 'Skills College of Technology - Kandy', 'No. 321, Galle Road, Colombo 3, Sri Lanka.', '(+94) 11 2375270, (+94) 11 2375271', 'info@skillsinternational.lk', '(+92) 42 35290642', 'Skills College of Technology - Jaffna', 'No. 321, Galle Road, Colombo 3, Sri Lanka.', '(+94) 11 2375270, (+94) 11 2375271', 'info@skillsinternational.lk', '(+92) 42 35290642', 'Skills College of Technology - Kurunegala', 'No. 321, Galle Road, Colombo 3, Sri Lanka.', '(+94) 11 2375270, (+94) 11 2375271', 'info@skillsinternational.lk', '(+92) 42 35290642', 'Skills College of Technology - Matara', 'No. 321, Galle Road, Colombo 3, Sri Lanka.', '(+94) 11 2375270, (+94) 11 2375271', 'info@skillsinternational.lk', '(+92) 42 35290642', '2018-09-24 23:11:37');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `email`, `created_date`) VALUES
(1, 'admin', '40be4e59b9a2a2b5dffb918c0e86b3d7', 'haseebanwar022@gmail.com', '2018-09-19 00:30:58');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image`, `created_date`) VALUES
(15, '15379683331.jpg', '2018-09-19 02:59:25'),
(16, '15373583702.jpg', '2018-09-19 02:59:30'),
(17, '15373583753.jpg', '2018-09-19 02:59:36'),
(18, '15373583814.jpg', '2018-09-19 02:59:41'),
(19, '15373583875.jpg', '2018-09-19 02:59:47');

-- --------------------------------------------------------

--
-- Table structure for table `new_and_events`
--

CREATE TABLE `new_and_events` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_and_events`
--

INSERT INTO `new_and_events` (`id`, `date`, `title`, `image`, `description`, `datetime`) VALUES
(3, '2017-11-20', 'LGS Teachers Training – Teachers Training on Hospitality Qualification', '15430460441.jpg', 'Mr. Asoka Jayawardena, our sector expert from Sri Lanka, provided Training of Trainers Program to Lahore Grammar School’s (LGS) Hospitality staff, to aid their provision of City & Guilds hospitality qualification. In the snapshot above, Mr. Mr. Ahmed Vaseer and Mr. Waseem Sarwar along with the Team of LGS after the successful provision of ToT program at LGS main campus.', '2018-09-25 03:14:16'),
(4, '2018-01-30', 'SERC & RISE College visit – Discussed new possible opportunities in future', '15430460932.jpg', 'Top Tier Meeting with SERC and RISE College Officials with Skills International’s Team.\r\nSERC and RISE have been City & Guild’s valuable clients from quite some time. New prospects have been discussed with their top tier to strengthen the relationship. More efforts will be put in to get the equivalency of City & Guilds qualifications in Pakistan.', '2018-09-25 03:15:01'),
(5, '2018-02-08', 'SERC & Premier Energy', '15430461303.jpg', 'Jt. Managing Director Mr. Danesh Abeyawickrama, Mr. Ahmed Vaseer and Mr. Waseem Sarwar at a meeting with SERC and Premier Energy.\r\nPremier Energy is actively working on renewable energy resources, a great initiative taken to overcome the power shortage in Pakistan. ', '2018-09-25 03:16:20'),
(6, '2018-03-20', 'C&G Quality Training – Quality Training', '15430461704.jpg', 'Quality Training Session held at Pearl Continental Hotel, Lahore.\r\nTraining was conducted by Mr. Siva Ramasamey (Malaysia) along with Mr. Hifaz Ashrof and City & Guild’s Pakistan Team. Principals and department heads of institutes have been invited to join the training.', '2018-11-24 07:56:10'),
(7, '2018-08-02', 'Engro Chemicals & Polymer Limited – C&G Technical Qualification Approval', '15430463575.jpg', 'Skills International’s Head of Business Development & Sales Mr. Ahmed Vaseer and Business Development Manager Mr. Waseem Sarwar on their visit to Engro Polymer & Chemicals.\r\nEngro Polymer & Chemicals Limited (EPCL) is the only fully integrated Chlor-Vinyl chemical complex in Pakistan. EPCL strongly endorses its triple bottom line philosophy in true essence – People, Planet and Profit are critical and indispensable elements for its growth and success.\r\nEngro invest in their employees by giving them quality education and that’s where City&Guilds comes in, by providing them the quality of Skills education they were looking for and to start a lasting relationship beneficial for all stakeholders.', '2018-11-24 07:59:17'),
(8, '2018-09-14', 'Hashoo Hunar Foundation – exploring new horizons', '15430463876.jpg', 'Skills Team Meeting with the Director Mr. Tahir Khan and Manager Training Mr. Suleman at Hashoo Hunar Foundation Islamabad office. \r\nHashoo Foundation is striving for the best Hospitality trainings for their newly appointed staff at 4 new branches. As being a prestigious client of City & Guilds, they have their trust in City & Guilds Qualifications as always.', '2018-11-24 07:59:47'),
(9, '2018-09-24', 'Seagal Centre Support Visit – Centre Support Visit', '15430464157.jpg', 'Centre Support visit of Seagal College by Mr. Hifaz Ashrof, City & Guilds Head of Key Accounts and Partnerships, and Mr. Ahmed Vaseer from Skills International. A successful meeting with Mr. Zeeshan and Ms. Samra about ongoing badge and future prospects of more qualifications from City & Guilds.', '2018-11-24 08:00:15'),
(10, '2018-09-25', 'Infinity School of Engineering visit C&G Quality team – Support Visit ', '15430464478.jpg', 'Mr. Siva Ramasamey and Team (City & Guilds Malaysia) along with Mr. Ahmed Vaseer and Mr. Waseem Sarwar (Skills International) on their visit to Infinity School of Engineering who recently came on board with City & Guilds Technical Qualifications.\r\nInfinity Engineering required trainees to undertake a number of practical activities which enable them to acquire the desired skills. Competent workforce is the key to productivity and competitiveness, and by providing City & Guilds Qualifications, Infinity Engineering strives to provide training demanded by the Industry, not only on a national level but internationally too, so that the young trainees acquire the competence to become part of a successful workforce, thus contributing to growth of the mechanical industry worldwide and also improving their own social and economic condition in the society.', '2018-11-24 08:00:47'),
(11, '2018-10-17', 'SOHET(School of hospitality & entrepreneurship)', '15430464839.jpg', 'Jt. Managing Director of Skills International Mr. Danesh Abeyawickrama meeting with Chairman SOHET (School of hospitality & entrepreneurship) Mr Ramzan Sheikh, CEO Sikandar H Lodhi & Director Mr. Qamar Zaman at Royal Palm. Mr. Asad Warraich and Mr. Ahmad Vaseer also present in picture.', '2018-11-24 08:01:23'),
(12, '2018-10-17', 'Skills for All & Skills International MoU', '154304651710.jpg', 'MOU signing between Skills International and Skills for All. Jt. Managing Director Mr. Danesh Abeyawickrama and Mr. Sikander Hameed Lodhi signed the agreement. Mr. Asad Warraich and Mr. Ahmed Vaseer were also present at the occasion.', '2018-11-24 08:01:57'),
(13, '2018-10-18', 'PSDF – Employment Opportunities for Pakistani’s in the Gulf – Event Participation', '154304654511.jpg', 'Jt. Managing Director Mr. Danesh Abeyawickrama, Mr. Ahmed Vaseer and Mr. Waseem Sarwar represented Skills International in an event held by PSDF.\r\nThat Event was to create awareness about employment opportunities in Gulf for Pakistanis. Skills International was cordially invited by PSDF to the event having in mind the wider acceptability of City & Guilds graduates in Pakistan and Overseas. ', '2018-11-24 08:02:25'),
(14, '2018-10-19', 'Meeting at Naval Head Quarters', '154304657012.jpg', 'A greet meeting at Naval Headquarters Islamabad with Vice Admiral Abdul Aleem. Point of discussion were different modes of training that SFA starts early next year. Vice Admiral Abdul Aleem has shown great interest in SFA’s plans and want to be part of that initiative.', '2018-11-24 08:02:50'),
(15, '2018-10-24', 'LUMS – Lifetime Learning Centre – Assured Service Approval', '154304659613.jpg', 'Mr. Ahmed Vaseer & Team from Skills International had a group picture with Mr. Khizar Tehseen and their team after the webinar with Ms. Becky James (UK) at the premises of Lifetime Learning at LUMS. \r\nThe Lahore University of Management Sciences (LUMS) is a world class academic institution with a proud history of achievement, and ambitious plans for the future. At Lifetime Learning, you will experience a multitude of exciting new academic and interest-based courses, all under one roof for the first time at LUMS.\r\nTo ensure quality and international recognition at Lifetime Learning, LUMS has decided to opt for City & Guilds Assured Services for their hospitality qualification. LUMS will start their City & Guilds Assured Hospitality program on 23rd Dec’18.', '2018-11-24 08:03:16'),
(16, '2018-10-31', 'The City School – Assured Approval', '154304663814.jpg', 'A Webinar conducted by Ms. Gillian Harper (UK) and Skills International Business Development Team with Ms. Amina Chugtai & Ms. Aqsa Chaudhary.\r\nThe City School is today one of the largest private school networks in Pakistan with branches in all major cities across the country.\r\nThe City School achieve their high ranks in quality education by investing in their Teacher’s Training and they wanted to provide the best out there. They have chosen City & Guilds Assured for their Teacher’s Training Program and ILM for Leadership and Management. \r\nThe City School will be one of pioneer institutes to offer City & Guilds Assured.', '2018-11-24 08:03:58'),
(17, '2018-11-13', 'Pakistan Foundry Association – Event News ', '154304667815.jpg', 'Pakistan Foundry Association and Infinity School of Engineering jointly held an event to bridge the gap between Skilled Youth and Industries. Chief Guest Mr. Shafqat Mahmood, Minister for Federal Education and Professional Training, and Chairman Pakistan Foundry Association addressed the attendees and emphasized on the significance of skilled workforce. Skills international was cordially invited by Infinity School of Engineering to the event.', '2018-11-24 08:04:38');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `image`, `description`, `created_date`) VALUES
(2, 'What We Do', '153777175515373583651.jpg', '<p>As the authorized representative of City &amp; Guilds, Skills International (SKILLS) facilitation extends from advisory services in the Qualification Selection, assessing the infrastructure availability, layout planning, machinery and equipment requirement, training of trainers, trainer supervision to development of Teaching Learning Resource (TLR) materials amongst others.</p>\r\n\r\n<p>SKILLS is now a significant player in the TEVT sector in Pakistan with key accounts in both the public and the private sector. Its main office is located in Lahore, manned by dedicated executive staff with a representative presence in Karachi. The Pakistan office has enabled its operations to have reached key cities in Pakistan.</p>\r\n\r\n<p>SKILLS derives its technical strength from its exposure in the Sri Lankan TVET sector that leads the South Asian region in TVET standards. SKILLS has used this expertise in Pakistan and has been engaged in providing technical assistance to several milestone initiatives, both in the Public &amp; the Private Sector. Amongst these are;</p>\r\n\r\n<p><strong>Implementation of City &amp; Guilds programs &amp; assessments in 25 Technical &amp; Vocational Training Institutes managed by TEVTA- Punjab (Technical Education &amp; Vocational Training </strong></p>\r\n\r\n<p><img alt="" src="http://localhost/skills/uploads/whatwedo/1.jpg" style="height:150px; width:213px" /></p>\r\n\r\n<p><strong>Authority). Training over 300 TEVTA trainers under Training of Trainer (ToT) programme.</strong></p>\r\n\r\n<p><strong><img alt="" src="http://localhost/skills/uploads/whatwedo/2.jpg" style="height:150px; width:200px" /></strong></p>\r\n\r\n<p><strong>eveloping Teaching Learning Resource (TLR) materials for City &amp; Guilds Engineering</strong></p>\r\n\r\n<p><strong><img alt="" src="http://localhost/skills/uploads/whatwedo/3.jpg" style="height:150px; width:226px" /></strong></p>\r\n\r\n<p><strong>Qualifications. Providing turnkey solutions for the establishment of AmanTech, a state of the art Technical Training Institute in Karachi with a vision to provide training to 5000 students.</strong></p>\r\n\r\n<p><strong><img alt="" src="http://localhost/skills/uploads/whatwedo/4.jpg" /></strong></p>\r\n\r\n<p><strong>Technical Assistance to the Hunar Foundation in Karachi that provides free training in craft </strong></p>\r\n\r\n<p><strong><img alt="" src="http://localhost/skills/uploads/whatwedo/5.jpg" style="height:150px; width:200px" /></strong></p>\r\n\r\n<p><strong>level courses for employable skills. Provided training for Depilex in Hairdressing and Beauty</strong></p>\r\n\r\n<p><strong><img alt="" src="http://localhost/skills/uploads/whatwedo/6.jpg" /></strong></p>\r\n\r\n<p><strong>Therapy under City &amp; Guilds certification. Bringing Hashoo Foundation on board as City </strong></p>\r\n\r\n<p><strong><img alt="" src="http://localhost/skills/uploads/whatwedo/7.jpg" style="height:150px; width:200px" /></strong></p>\r\n\r\n<p><strong>Guilds approved centre for Hospitality Programmes. Preparation of practical question papers for City and Guilds IVQ qualifications covering Engineering, Textile, Hospitality trades.Training of Competency Standard Development for TVET staff of Pakistan in association with GIZ Islamabad, Pakistan.</strong></p>\r\n', '2018-09-23 21:49:15'),
(3, 'Our goals', '153777184115373583814.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&rsquo;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br />\r\nWhy do we use it?</p>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &lsquo;Content here, content here&rsquo;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &lsquo;lorem ipsum&rsquo; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p>Where does it come from?</p>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &ldquo;de Finibus Bonorum et Malorum&rdquo; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &ldquo;Lorem ipsum dolor sit amet..&rdquo;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &ldquo;de Finibus Bonorum et Malorum&rdquo; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n', '2018-09-23 21:50:41'),
(4, 'News & Events', '153786915715373583875.jpg', '<p>For the promotion of TVET sector in Pakistan, National Vocational and Technical Training Commission (NAVTTC) in collaboration with TEVTA (Technical Education &amp; Vocational Training Authority held a &lsquo;&rsquo;National Skills show &rsquo;&rsquo; on 29th&amp; 30th March, 2016(Tuesday &amp; Wednesday) at Expo Centre Johar Town Lahore. The centres working with NAVTTC and TEVTA has participated in this event.<br />\r\nIn this Skills Competition about 100 trainees of different TVET Institutes of Private &amp; Public sector participated and exhibited their Skills in 10 diversified trades. The trades selected for this competition were Welding, beautician, Dress Making, Fashion Designing, Textile Designing Fine Arts, Cooking etc.<br />\r\nCity &amp; Guilds student (Mr. Muhammad Qaiser - ITHM Faisalabad) stood second in cooking competition and won PKR 20,000/ Cash prize.</p>\r\n', '2018-09-25 00:52:37'),
(5, 'About Us', '', '<p>SKILLS has been involved in the Pakistan market since 2009, playing an active role in the development of the TVET sector. Headquartered in Sri Lanka, its Pakistan operations are handled through its offices in Lahore (Country Head</p>\r\n\r\n<p>Office) and Karachi (Branch Office). The offices have been established since 2010 and are staffed with executive and support staff from Pakistan - numbering over 20, who can be mobilized in any part of the country to support capacity building projects undertaken by the Company.</p>\r\n\r\n<p>The main activities of SKILLS in Pakistan have been in the areas of;</p>\r\n\r\n<p>&sect; Training in Competency Standard Development under GIZ TVET Support program for NAVTTC.</p>\r\n\r\n<p>&sect; Consultancy on establishing Technical &amp; Vocational Institutions (TVIs). ~ e.g. Amantech, Hunar Foundation</p>\r\n\r\n<p>(Karachi)</p>\r\n\r\n<p>&sect; Establishing internationally recognized qualifications in the TVIs supported by SKILLS (e.g. in 120 TVIs established throughout Punjab, Sindh &amp; the Capital Territory).</p>\r\n\r\n<p>&sect; Capacity building in the TVIs including Teacher Training, Supervision of Teaching, Institutional</p>\r\n\r\n<p>Administration (e.g. at Punjab TEVTA, Amantech, Hunar Foundation, Depilex, Hushoo Foundation, CTTS &ndash;</p>\r\n\r\n<p>Lahore, TDCP &ndash; Punjab, Tony &amp; Guy Institute etc.,)</p>\r\n\r\n<p>&sect; Development of Teaching &ndash; Learning Material (e.g. for Punjab TEVTA, Sindh TEVTA (ongoing), Amantech,</p>\r\n\r\n<p>Hunar Foundation etc.)</p>\r\n\r\n<p>With its involvement in the entire spectrum of services as described above, SKILLS has demonstrated the value it</p>\r\n\r\n<p>accrues to the Pakistan TVET sector and as a result has built up excellent relations with the TVET fraternity in Pakistan &amp; enjoys its acceptance and confidence.</p>\r\n\r\n<p>The said activities have been carried out through the mobilization of sector experts from Sri Lanka, England,</p>\r\n\r\n<p>Scotland and Pakistan. These interventions have made SKILLS a versatile service provider in the TVET sector that meets internationally accepted standards and augurs well for the requirements of this Project.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Vision</h2>\r\n\r\n<h3>To be the most preferred service provider in economic development sectors, and in tertiary education ensuring the enrichment of communities &amp; institutions.</h3>\r\n\r\n<h2>Mission</h2>\r\n\r\n<h3>To deliver our services with professionalism constantly persisting to find&nbsp;the most bespoke, cost-effective solutions that provide sustainable and environment-friendly outcomes to our clients and stakeholders.</h3>\r\n', '2018-11-23 13:12:13'),
(6, 'Projects', '', '<p><strong>Projects undertaken by Skills International in Pakistan</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><em>Trainer and Trainee Manual Development (2015)</em></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sindh Technical Education and Vocational Training Authority (STEVTA) took the initiative in implementing World</p>\r\n\r\n<p>Bank funded project Sindh Skill Development Project (SSDP) in 2015 which aimed to bring improvement, and up</p>\r\n\r\n<p>gradation of Technical Education &amp; Vocational Training in the Sindh province for greater employability of youth in</p>\r\n\r\n<p>local and international job markets. SSDP Project envisages the introduction of 70 market driven Competency Based</p>\r\n\r\n<p>Training (CBT) programs in 47 selected STEVTA Institutions. Skills International Pvt Ltd of Sri Lanka (SKILLS) provided</p>\r\n\r\n<p>services for the assignments given below;</p>\r\n\r\n<p>&sect; The development of Teaching Learning Resource / Teaching Learning Material (TLR/TLM)</p>\r\n\r\n<p>&sect; Building the capacity of lead instructors, selected Principals and STEVTA management to implement</p>\r\n\r\n<p>competency based training in STEVTA institutions.</p>\r\n\r\n<p>Out of the 33 vocational competency standards developed for Sindh, 10 vocations were selected to be focused under</p>\r\n\r\n<p>the assignment handed over to SKILLS for the provision of their aforementioned services that also included &lsquo;Dress</p>\r\n\r\n<p>Making &amp; Fashion Designing&rsquo;, a Vocation that falls within the garment sector among others.</p>\r\n\r\n<p>Under the same project, SKILLS is involved with STEVTA in delivering Capacity Building Training programs in Delivery</p>\r\n\r\n<p>&amp; Assessment of Competency Based Training (CBT) including Recognition (RPL) for STEVTA trainers, Monitoring &amp;</p>\r\n\r\n<p>Evaluation system for CBT implementation for STEVTA principals and managers. In addition, SKILLS is engaged in</p>\r\n\r\n<p>developing Trainer Manuals, Trainee Manuals and Teaching Learning Resource (TLR) materials for selected 10 trades</p>\r\n\r\n<p>including &lsquo;Dress Making &amp; Fashion Designing&rsquo;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><em>Investing in demand-driven qualifications</em></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>SKILLS was engaged by the Technical Education &amp; Vocational Training Authority (TEVTA) of Punjab to introduce</p>\r\n\r\n<p>demand-driven courses in their institutions. This was done by introducing the globally recognised City &amp; Guilds</p>\r\n\r\n<p>International Vocational Qualification (IVQ) programs in 50 TEVTA centres. The training in all the centres were</p>\r\n\r\n<p>standardized through Teaching Learning Resources (TLRs) developed by SKILLS. Further, a total of 300 permanent</p>\r\n\r\n<p>trainers were trained to deliver the City and Guilds IVQ Programs which the Punjab TEVTA implemented as a feelevying</p>\r\n\r\n<p>program scheme parallel to their regular TEVTA Courses. It has proven to be a success with enrolments</p>\r\n\r\n<p>exceeding 1000 learners.</p>\r\n\r\n<p>The quality of training is reflected in the number of distinction passes earned by students, with one receiving the</p>\r\n\r\n<p>City &amp; Guilds Medal of Excellence. Graduates of the City &amp; Guilds programmes have found employment in reputed</p>\r\n\r\n<p>firms in Pakistan and overseas. SKILLS is currently working on linking other TEVTA programmes to these employment</p>\r\n\r\n<p>channels, adding further value.</p>\r\n\r\n<p>Following on the success of the Punjab TEVTA initiative, TEVTA of the Sindh province too has come on aboard with</p>\r\n\r\n<p>nine of its centres providing City &amp; Guilds qualifications.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><em>Turnkey solutions for private sector vocational training (Since 2010)</em></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>SKILLS provided Amantech &ndash; a subsidiary of the philanthropic Aman Foundation &ndash; with a turnkey solution for a</p>\r\n\r\n<p>technical and vocational training institute in Pakistan to cater to5000 students. The solution included equipment</p>\r\n\r\n<p>layout plans, advice on procuring equipment and recruitment of teaching staff, Training of Trainers (TOT), training</p>\r\n\r\n<p>supervision, training on centre management and the production of TLR material. The programmes are geared to</p>\r\n\r\n<p>producing graduates who can meet the needs of the private sector in Pakistan and overseas. In the first two phases</p>\r\n\r\n<p>the following programmes were offered: construction industry technician and craft level trades, electrical and</p>\r\n\r\n<p>electronics, machining, welding, refrigeration and air conditioning, plumbing, carpentry, scaffolding, shuttering and</p>\r\n\r\n<p>aluminium fabrication. Four thousand students are currently being trained here.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><em>Improved assessment techniques and international certification for the Hunar Foundation (Since 2010)</em></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The Hunar Foundation, which was established and supported by Pakistan&rsquo;s largest philanthropic fund, the Citizen</p>\r\n\r\n<p>Foundation, empowers youth and supports entrepreneurship through vocational training. SKILLS assisted the</p>\r\n\r\n<p>foundation to improve its assessment techniques and procedures. Approximately 1500 students are trained annually</p>\r\n\r\n<p>at two centres in programmes such as electrical installation, machining, refrigeration and air conditioning, plumbing</p>\r\n\r\n<p>and motor vehicle engineering.</p>\r\n\r\n<p>Hunar Foundation has also recently started a separate programme to empower women by training them in the fields</p>\r\n\r\n<p>of &lsquo;hair and beauty&rsquo;, &lsquo;care givers&rsquo;, &lsquo;customer care&rsquo; and &lsquo;retailing&rsquo; so that they will be able to find employment and be</p>\r\n\r\n<p>financially secure.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><em>Empowering poor &amp; vulnerable youth from 4 impoverished districts of Punjab through technical &amp; vocational skills upgrading</em></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>SKILLS lobbied with the sponsors of the Punjab Skills Development Fund (PSDF) to include City &amp; Guilds technical &amp;</p>\r\n\r\n<p>vocational qualification programmes to be recognized under its mandate to sponsor market driven training</p>\r\n\r\n<p>opportunities for poor and vulnerable populations of the 4 poorest districts of Punjab-Pakistan to improve their</p>\r\n\r\n<p>employability.</p>\r\n\r\n<p>PSDF is a collaboration of the Punjab Government &amp; the Department for International Development (DFID) of UK.</p>\r\n\r\n<p>SKILLS&rsquo; facilitation has resulted in several private, public &amp; not-for-profit training institutions where City &amp; Guilds</p>\r\n\r\n<p>programmes have been implemented by SKILLS to receive funding from PSDF to train youth from Bahawalnagar,</p>\r\n\r\n<p>Bahawalpur, Lodhran &amp;Muzaffargarh &ndash; the 4 districts with the highest poverty headcount ratio in Punjab.</p>\r\n\r\n<p>The success of the initial phase of the PSDF programme has encouraged the sponsors to extend the programme to</p>\r\n\r\n<p>7 new districts this year, expanding further opportunities for providing impoverished youth with employable skills.</p>\r\n\r\n<p>&lsquo;SKILLS&rsquo; continues to play a vital hands-on role through advocacy, facilitation and implementation.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><em>Women&rsquo;s empowerment through vocational training (2012)</em></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Depilex is a well-known chain of training centres in Pakistan that provides training for disadvantaged women in</p>\r\n\r\n<p>hairdressing and beauty therapy as a means of livelihood. Several of the women are also burn-victims resulting from</p>\r\n\r\n<p>domestic violence and other types of abuse. This program offers them an opportunity to learn a new trade and</p>\r\n\r\n<p>provide for themselves. Depilex runs their highly sought-after programmes from 30 centres located across the</p>\r\n\r\n<p>country.</p>\r\n\r\n<p>SKILLS provided training in Sri Lanka for Depilex in new techniques that were not available in Pakistan. Following</p>\r\n\r\n<p>this, several Depilex outlets upgraded to training centres where women can pursue professional courses in</p>\r\n\r\n<p>hairdressing and beauty therapy under City &amp; Guilds certification.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><em>SKILLS support to TVET institutions as a change facilitator</em></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&lsquo;SKILLS &lsquo;continues to facilitate iconic institutions - National Institute of Science &amp; Technical Education (NISTE);</p>\r\n\r\n<p>Technical Training Institute, Dharki(an Engro subsidiary);Institute Of Tourism &amp; Hotel Management (ITHM);Hashoo</p>\r\n\r\n<p>Foundation; Institute of Rural Management (Rawalpindi); Pakistan Knitwear Training Institute, Precision System</p>\r\n\r\n<p>Training Centre of the government, Trojans International, Coca Cola, the Trade Development Authority of Pakistan</p>\r\n\r\n<p>National Logistics Cell, Vocational Education Training Development Awareness Raising Organization - VETDACO</p>\r\n\r\n<p>(NTB), Mansol and TEVTA Sindh- in the areas of: implementing demand driven international vocational qualifications,</p>\r\n\r\n<p>TOT for faculty/management on curriculum implementation, assessment techniques, standardization of academic</p>\r\n\r\n<p>processes, teaching learning resources, promotional strategies, collaborating with donor agencies and sharing of</p>\r\n\r\n<p>international best practices.</p>\r\n\r\n<p>&lsquo;SKILLS&rsquo; also facilitates these organizations in marketing and outreach into rural Pakistan to encourage youth to be</p>\r\n\r\n<p>involved in training and skills upgrading to enhance their employability.</p>\r\n', '2018-11-24 08:22:50'),
(7, 'Skills International (SKILLS) Consultancy & Projects Division', '', '<p><strong>SKILLS </strong>is a key regional player in Consultancy &amp; Research with a wide array of service offers.</p>\r\n\r\n<p>Incorporated in 2003, SKILLS works with a large pool of sector specialists who can be drawn for a variety of assignments, related to its key focus areas. Headquartered in Colombo, Sri Lanka, it has a well established representative office in Pakistan as well, with a branch in Karachi that can support &amp; manage activities there.</p>\r\n\r\n<p>Key focus areas of SKILLS:</p>\r\n\r\n<ul>\r\n	<li><strong>Infrastructure development sector</strong><br />\r\n	Feasibility Studies, Environmental Impact Assessments, Social Impact Assessments, Resettlement Action Plans</li>\r\n	<li><strong>TVET Sector</strong><br />\r\n	Infrastructure &amp; equipment planning, layout planning, training of trainers (TOT), development of teaching material</li>\r\n	<li><strong>M&amp;E / Impact Evaluation Surveys</strong><br />\r\n	Development, Social &amp; Educational sectors</li>\r\n	<li><strong>Training / Institutional capacity building </strong><br />\r\n	Development &amp; Delivery</li>\r\n	<li><strong>Preparation of specifications for machines, equipment, tools and materials needed for training in specific fields in the TVET sector</strong></li>\r\n	<li><strong>Labor Market Survey in Tourism, Information Technology/Business Processing out source and construction industry &ndash; Funding by ADB in association with Cambridge Education of Mott Mac Donald of UK</strong></li>\r\n</ul>\r\n\r\n<p><strong>SKILLS</strong> serves a wide range of local &amp; regional clients in the areas listed above and is recognized for its quality, efficiency, relevance &amp; comprehensiveness. Persistently working towards continuous improvement &amp; stretching its potential, <strong>SKILLS</strong> has successfully developed models &amp; tools that identify clients&#39; specific needs with solutions that are flexible, efficient and effective.</p>\r\n', '2018-11-24 09:18:40'),
(8, 'Success Stories', '', '<p><strong>Success Stories of AMANTECH</strong></p>\r\n\r\n<p>Rana Hashim was struggling to meet ends meet, with no decent employment prospects due to his lack of education. Through AMANTECH he was able to study Refrigeration and Air Conditioning Engineering whilst also doing odd jobs and part time work to provide for his family. He completed a one year City &amp; Guilds Diploma in this subject with flying colours, after which he was able to secure employment abroad. His education at AMANTECH proved to be a way out of his poverty stricken life.</p>\r\n\r\n<p><img alt="" src="http://localhost/skills/uploads/stories/1.jpg" /></p>\r\n\r\n<p><strong>Rana Hashim</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>At the age of 23 Naveed Ahmed decided to register for a City &amp; Guilds Diploma in Mechanical Engineering at AMANTECH when he realized that an education was essential for him to secure employment that would help alleviate his family&#39;s poverty and pay off their debts. After completing his diploma he found work in the Middle East, earning such a good income that he was able to send most of his salary home to singlehandedly supports his family.</p>\r\n\r\n<p><img alt="" src="http://localhost/skills/uploads/stories/2.jpg" /></p>\r\n\r\n<p><strong>Naveed Ahmed</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Success Stories of Hunar Foundation</strong></p>\r\n\r\n<p>Muhammad, aged 22, lives in Akhter with his parents and five siblings. He completed his matriculation in 2006 and would go to his father&#39;s workshop for training. At the same time he continued his studies in college and completed his intermediate in 2011. In order to become a proper certified technician he joined The Hunar Foundation to study to become a Mechanical Fitter in January 2011. He completed his one year vocational training successfully, obtaining good grades and earning a City &amp; Guilds (UK) Diploma. He has joined his father&#39;s Engineering shop and now earns a good salary.</p>\r\n\r\n<p><img alt="" src="http://localhost/skills/uploads/stories/3.jpg" /></p>\r\n\r\n<p><strong>Muhammad Qazzafi (C&amp;G Diploma and G III Certificate of STTB)</strong></p>\r\n', '2018-11-24 10:38:17'),
(9, 'Partners', '', '<p><img alt="" src="http://localhost/skills/uploads/partners/1.jpg" /></p>\r\n\r\n<p>City &amp; Guilds is a Royal Chartered Awarding body of UK established in 1878, certifying millions of&nbsp;candidates every year in Vocational Skills that are widely accepted as a benchmark for workplace excellence.</p>\r\n\r\n<p>SKILLS is an Approved Centre for City &amp; Guilds in Sri Lanka and is their Authorized Representative in Pakistan.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="" src="http://localhost/skills/uploads/partners/2.jpg" /></p>\r\n\r\n<p>The brand of Institute of Leadership &amp; Management (ILM), a leading awarding body in UK is a part of the City &amp; Guilds Group.</p>\r\n\r\n<p>SKILLS is the authorized to promote the ILM brand.</p>\r\n', '2018-11-24 10:43:31');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `phone2` varchar(100) NOT NULL,
  `fax` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `availability` varchar(30) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `google_plus` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `skype` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `email`, `phone`, `phone2`, `fax`, `address`, `availability`, `facebook`, `twitter`, `google_plus`, `youtube`, `linkedin`, `skype`, `created_date`) VALUES
(1, 'danish.khan@abaskatech.com', '1 900 1234 456', '855-818-4848', '+1 206 592 2559', 'Class aptent taciti other sociosqu ad.', '24/7', '#', '#', '#', '#', '#', '#', '2018-09-05 01:06:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_and_events`
--
ALTER TABLE `new_and_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `new_and_events`
--
ALTER TABLE `new_and_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
