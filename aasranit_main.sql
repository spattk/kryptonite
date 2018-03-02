-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 02, 2018 at 02:47 PM
-- Server version: 5.5.56-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aasranit_main`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `about_id` int(11) NOT NULL,
  `about_text` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_id`, `about_text`) VALUES
(1, '<p>AASRA is a social service group which is autonomously run by us, the students of NIT Rourkela, under the mentorship of faculties and a very wide alumni base. We help the weaker sections of society in and around Rourkela, a city in Odisha, and presently work at seven workplaces where we visit regularly and assist poor kids in their education, as the quality of education in their schools is very low. We also implement projects and campaigns to create awareness in communities where we serve with our primary objective: upliftment of the society, both economically and socially. We\'ve been serving the society for more than a decade, and  we\'ve grown to be a group with hundreds of members on campus reaching out to 500+ families.</p><p>&nbsp;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `album_id` int(20) NOT NULL,
  `album_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `album_slug` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `album_pictures` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'JSON of pictures'' names',
  `album_cover_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`album_id`, `album_name`, `album_slug`, `album_pictures`, `album_cover_image`) VALUES
(3, '12th Foundation Day', '12th-foundation-day', '[\"12th-Foundation 1.jpg\",\"12th-Foundation 2.jpg\",\"12th-Foundation 3.jpg\",\"12th-Foundation 4.jpg\",\"12th-Foundation 5.jpg\",\"12th-Foundation 6.jpg\",\"12th-Foundation 7.jpg\",\"12th-Foundation 8.jpg\",\"12th-Foundation 9.jpg\",\"12th-Foundation 10.jpg\",\"12th-Foundation 11.jpg\",\"12th-Foundation 12.jpg\",\"12th-Foundation 13.jpg\",\"12th-Foundation 14.jpg\",\"12th-Foundation 15.jpg\",\"12th-Foundation 16.jpg\",\"12th-Foundation 17.jpg\",\"12th-Foundation 18.jpg\",\"12th-Foundation 19.jpg\",\"12th-Foundation 20.jpg\",\"12th-Foundation 21.jpg\",\"12th-Foundation 22.jpg\",\"12th-Foundation 23.jpg\",\"12th-Foundation 24.jpg\",\"12th-Foundation 25.jpg\",\"12th-Foundation 26.jpg\",\"12th-Foundation 27.jpg\",\"12th-Foundation 28.jpg\",\"12th-Foundation 29.jpg\",\"12th-Foundation 30.jpg\",\"12th-Foundation 31.jpg\",\"12th-Foundation 32.jpg\",\"12th-Foundation 33.jpg\",\"12th-Foundation 34.jpg\",\"12th-Foundation 36.jpg\",\"12th-Foundation 37.jpg\",\"12th-Foundation 38.jpg\",\"12th-Foundation 39.jpg\",\"12th-Foundation 41.jpg\",\"12th-Foundation 42.jpg\",\"12th-Foundation 43.jpg\",\"12th-Foundation 44.jpg\",\"12th-Foundation 45.jpg\",\"12th-Foundation 46.jpg\",\"12th-Foundation 47.jpg\",\"12th-Foundation 48.jpg\",\"12th-Foundation 49.jpg\",\"12th-Foundation 50.jpg\",\"12th-Foundation 51.jpg\",\"12th-Foundation 52.jpg\",\"12th-Foundation 53.jpg\",\"12th-Foundation 54.jpg\",\"12th-Foundation 55.jpg\",\"12th-Foundation 56.jpg\",\"12th-Foundation 57.jpg\",\"12th-Foundation 58.jpg\",\"12th-Foundation 59.jpg\",\"12th-Foundation 60.jpg\",\"12th-Foundation 61.jpg\",\"12th-Foundation 62.jpg\",\"12th-Foundation 63.jpg\",\"12th-Foundation 64.jpg\",\"12th-Foundation 65.jpg\",\"12th-Foundation 66.jpg\",\"12th-Foundation 67.jpg\",\"12th-Foundation 68.jpg\",\"12th-Foundation 69.jpg\",\"12th-Foundation 70.jpg\",\"12th-Foundation 71.jpg\",\"12th-Foundation 72.jpg\",\"12th-Foundation 73.jpg\",\"12th-Foundation 74.jpg\",\"12th-Foundation 75.jpg\",\"12th-Foundation 76.jpg\",\"12th-Foundation 77.jpg\",\"12th-Foundation 78.jpg\",\"12th-Foundation 79.jpg\",\"12th-Foundation 80.jpg\",\"12th-Foundation 81.jpg\",\"12th-Foundation 82.jpg\",\"12th-Foundation 83.jpg\",\"12th-Foundation 84.jpg\",\"12th-Foundation 85.jpg\",\"12th-Foundation 86.jpg\",\"12th-Foundation 87.jpg\",\"12th-Foundation 88.jpg\",\"12th-Foundation 90.jpg\",\"12th-Foundation 91.jpg\",\"12th-Foundation 92.jpg\",\"12th-Foundation 93.jpg\",\"12th-Foundation 94.jpg\",\"12th-Foundation 95.jpg\",\"12th-Foundation 96.jpg\",\"12th-Foundation 97.jpg\",\"12th-Foundation 98.jpg\",\"12th-Foundation 99.jpg\",\"12th-Foundation 100.jpg\",\"12th-Foundation 101.jpg\",\"12th-Foundation 102.jpg\",\"12th-Foundation 103.jpg\",\"12th-Foundation 104.jpg\",\"12th-Foundation 105.jpg\",\"12th-Foundation 106.jpg\",\"12th-Foundation 107.jpg\",\"12th-Foundation 108.jpg\",\"12th-Foundation 109.jpg\",\"12th-Foundation 110.jpg\",\"12th-Foundation 111.jpg\",\"12th-Foundation 112.jpg\",\"12th-Foundation 113.jpg\",\"12th-Foundation 114.jpg\",\"12th-Foundation 115.jpg\"]', '12th-Foundation 101.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_link` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_link`) VALUES
(1, '');

-- --------------------------------------------------------

--
-- Table structure for table `collaborators`
--

CREATE TABLE `collaborators` (
  `collaborator_id` int(11) NOT NULL,
  `collaborator_name` varchar(100) NOT NULL,
  `collaborator_website` text NOT NULL,
  `collaborator_trash` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collaborators`
--

INSERT INTO `collaborators` (`collaborator_id`, `collaborator_name`, `collaborator_website`, `collaborator_trash`) VALUES
(1, 'Goonj ', 'www.goonj.com/example', 1),
(2, 'Kalyan NGO', '', 0),
(3, 'asdgdfh', 'ghfgh', 1),
(4, '243524356', 'kiuhkjj', 1),
(5, 'Bookfount', 'bookfount.com', 1),
(6, 'Goonj', 'http://goonj.org/', 0),
(7, 'Monday Morning', 'http://mondaymorning.nitrkl.ac.in/', 0);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_slug` varchar(255) NOT NULL,
  `event_start_date` date NOT NULL,
  `event_end_date` date NOT NULL,
  `event_start_time` time DEFAULT NULL,
  `event_end_time` time DEFAULT NULL,
  `event_venue` varchar(250) NOT NULL,
  `event_blog_link` varchar(500) NOT NULL,
  `event_trash` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `event_slug`, `event_start_date`, `event_end_date`, `event_start_time`, `event_end_time`, `event_venue`, `event_blog_link`, `event_trash`) VALUES
(9, 'Saraswati Puja', '', '2018-01-22', '2018-01-22', '00:00:00', '00:00:00', 'Workplace', '', 0),
(11, '13th Foundation Day', '', '2018-01-26', '2018-01-26', NULL, NULL, 'NITR', '', 0),
(12, 'Holi', '', '2018-03-02', '2018-03-02', NULL, NULL, 'Workplace', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `people_id` int(11) NOT NULL,
  `people_name` varchar(50) NOT NULL,
  `people_desg` varchar(100) NOT NULL,
  `people_avatar` varchar(100) NOT NULL,
  `people_speech` text NOT NULL,
  `people_trash` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`people_id`, `people_name`, `people_desg`, `people_avatar`, `people_speech`, `people_trash`) VALUES
(1, 'S K Sarangi', 'Ex Director', 'S-K-Sarangi.jpg', '<p>Because of dedicated&nbsp;efforts of the members of the AASRA club over the years, many underprivileged children are getting not only a reasonable education&nbsp;but also the company of friendly and qualified Brothers and Sisters.</p>', 0);

-- --------------------------------------------------------

--
-- Table structure for table `post_holders`
--

CREATE TABLE `post_holders` (
  `post_holder_id` int(11) NOT NULL,
  `post_holder_name` varchar(100) NOT NULL,
  `post_holder_avatar` varchar(100) NOT NULL,
  `post_holder_post` varchar(50) NOT NULL,
  `post_holder_phone` varchar(20) NOT NULL,
  `post_holder_fb` varchar(100) NOT NULL,
  `post_holder_gmail` varchar(100) NOT NULL,
  `post_holder_trash` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_holders`
--

INSERT INTO `post_holders` (`post_holder_id`, `post_holder_name`, `post_holder_avatar`, `post_holder_post`, `post_holder_phone`, `post_holder_fb`, `post_holder_gmail`, `post_holder_trash`) VALUES
(5, 'Md Abu Talha', 'Abu.jpg', 'Treasurer', '126549847', 'https://www.facebook.com/mdtalhabu?fref=ts', 'mdtalhabu@gmail.com', 1),
(4, 'Abhipsa Nayak', 'Abhipsa.jpg', 'General Secretary', '56487861465', 'https://www.facebook.com/profile.php?id=100006567707896&fref=ts', 'abhipsa.nayak20@gmail.com', 1),
(3, 'Subarna Mohanty', 'Subarna.jpg', 'General Secretary', '121564646', 'https://www.facebook.com/profile.php?id=100008395771992&fref=ts', 'subarnamohanty03@gmail.com', 1),
(1, 'Atul Kumar', 'Atul.jpg', 'President', '9656456456', 'https://www.facebook.com/punkuser?fref=ts', 'atulkumar24x7@gmail.com', 1),
(2, 'Sidharth Patra', 'Sidharth.jpg', 'President', '9864143456', 'https://www.facebook.com/mercurysidharth?fref=ts', 'mercury.sidharth@gmail.com', 0),
(6, 'Sitesh Pattanaik', 'Sitesh.jpg', 'Technical Secretary', '9040655124', 'https://www.facebook.com/profile.php?id=100008379319496', 'siteshpattanaik001@gmail.com', 1),
(33, 'Surabhi Seth', 'surabhi.jpg', 'General Secretary', '9776809807', 'https://www.facebook.com/profile.php?id=100009685937457', 'surabhiseth3@gmail.com', 0),
(32, 'Divyajyoti Mishra', 'dj.jpg', 'Treasurer', '7008858228', 'https://www.facebook.com/djms17', 'Jyotivy4@gmail.com', 0),
(31, 'Sudha Priyadarshini', 'sudha.jpg', 'Technical Secretary', '9437938401', 'https://www.facebook.com/priyadarshini.sudha', 'priyadarshini.sudha3@gmail.com', 0),
(30, 'Shibani Biswal', 'shibani.jpg', 'General Secretary', '9439930654', 'https://www.facebook.com/profile.php?id=100010330298621', 'shibanibiswal123@gmail.com', 0),
(29, 'Samir Kumar Nayak', 'Samircool3.jpg', 'Vice President', '9040845498', 'https://www.facebook.com/samirkumar.nayak.96', 'samircool1996@gmail.com', 0),
(28, 'sfsdkjkj', 'Water_Nature.jpg', 'askjdfhkj', '6787789789', 'skdfjklsj', 'sdkgjsadk;l', 1);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(11) NOT NULL,
  `project_title` varchar(250) NOT NULL,
  `project_slug` varchar(100) NOT NULL,
  `project_avatar` varchar(100) NOT NULL,
  `project_desc` text NOT NULL,
  `project_gallery_link` varchar(250) NOT NULL COMMENT 'This is required to link to gallery final one',
  `project_trash` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `project_title`, `project_slug`, `project_avatar`, `project_desc`, `project_gallery_link`, `project_trash`) VALUES
(1, 'Diya Project', '', 'Diya.jpg', 'Undertaken during Diwali every year, this project aims at providing a seasonal source of income for the community members of many workplaces, especially women. We at AASRA provide women with diyas and raw materials for decoration. They hand decorate them and have a great time out of it as well. We sell those diyas to the students and professors of NIT Rourkela. With huge profits being made every year and the delicate, beautiful diyas being a huge favourite with the students and professors, Diya Project is one of the most successful projects AASRA conducts every year, and every AASRAite take immense pride in walking around the NIT campus, selling these diyas.\r\n', 'welcome.to.diwali.guys.com', 0),
(2, 'Little\'s Science Yard', '', 'Science Exhibition.jpg', 'Little\'s Science Yard is the annual science exhibition that AASRA organises in NIT Rourkela during Innovison, the annual techno-management fest of NIT Rourkela. This acts as a platform for the kids of our workplaces to showcase their interest in science. With our help, they enthusiastically make innovative science project, which help them improve their interest in science. Appreciation from the students and professors in the institute works as a huge motivating factor for the kids. Little\'s Science Yard stands very well to fulfill its objective of encouraging kids into taking Science as a field of interest during their professional career.', 'welcom.to.holi.festival.com', 0),
(3, 'First-Aid Awareness', '', 'First-Aid.jpg', 'This project was aimed at awaring the workplace community about first-aid. Skits were performed with the aim of teaching them about the various methods of first-aid in cases of different types of injury. First-aid boxes were prepared and filled with necessary equipment in front of them and were installed in the workplaces. This initiative got positive response from the community members who appreciated AASRA’s efforts and later, put into action what they had learnt in the awareness programme. The workplaces we visit are devoid of basic needs, and AASRA plans on mitigating these losses over the years to come.', 'welcome.to.raksha.bandhan.of.nitr.aasra.com', 0),
(4, 'Cleanliness Campaign', '', 'Cleanliness Campaign.jpg', 'This campaign aimed at educating community members about the importance of surrounding, personal cleanliness and hygiene. Skits were performed for the people, to teach them about ways how they can maintain cleanliness in their surroundings. The result of the campaign was evident from the changes that were made by the community members in their locality, in terms of regular cleaning and dustbin usage, amongst other things.', '', 0),
(5, 'Library Setup', '', 'Library.jpg', 'To ensure that the kids in our workplaces have full time access to the basic books that they need for their studies as well as their all-round development, libraries have been set up in the workplaces. Books including textbooks, atlases, dictionaries and storybooks have been kept there, and other books deemed essential for mental growth and development of these kids. The kids have hugely benefitted from this, as they have started regularly borrowing and reading books from there. After all, education is the key to success!', 'data.koala.com', 0),
(6, 'Skill Developement', '', 'PMKVY.jpg', 'Our world is filled with talented kids devoid of opportunities. There are hundreds of kids in Rourkela itself, who couldn\'t pursue dreams or secure themselves a stable future due to lack of money and other resources.\r\nWe at AASRA recognized a few of them, and got them enrolled under the PMKVY scheme(Pradhan Mantri Kaushal Vikas Yojana), a skill development course. You\'ll be more than happy to know that two of the six kids enrolled have already been placed, with one boy named ASHOK of OSAP colony getting a job in Barbeque nation, BBSR and a girl named PADMINI of sector 21 in Raipur. We expect the other four kids to be placed any time now. AASRA thanks every volunteer involved who made this a grand success and helped underprivileged kids secure a bright future.', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `report_id` int(11) NOT NULL,
  `report_date` date NOT NULL,
  `report_sector_name` varchar(25) NOT NULL,
  `report_sector_slug` varchar(20) NOT NULL,
  `report_name_of_member` varchar(50) NOT NULL,
  `report_mode_of_transport` varchar(10) NOT NULL,
  `report_no_of_students` int(11) NOT NULL,
  `report_duration_of_stay` varchar(5) NOT NULL,
  `report_member_details` text NOT NULL,
  `report_problem_faced` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`report_id`, `report_date`, `report_sector_name`, `report_sector_slug`, `report_name_of_member`, `report_mode_of_transport`, `report_no_of_students`, `report_duration_of_stay`, `report_member_details`, `report_problem_faced`) VALUES
(10, '2017-01-23', 'osap', 'osap', 'Debasis', 'auto', 0, '', '[{\"name\":\"Subarna\",\"year\":\"3\",\"teaching\":{\"sname\":[\"askdfh\"],\"sclass\":[\"4\"],\"schapter\":[\"slkfj\"],\"ssubject\":[\"sfdjl\"],\"sremark\":[\"\"]}}]', ''),
(9, '2017-01-20', 'Sector - 2', 'sector-2', 'Hello', 'auto', 24, '2', '[{\"name\":\"Pragyan\",\"year\":\"3\",\"teaching\":{\"sname\":[\"Aman\",\"Piyush\"],\"sclass\":[\"4\",\"5\"],\"schapter\":[\"Indices\",\"surds\"],\"ssubject\":[\"Maths\",\"Algo\"],\"sremark\":[\"People are facing much problem in doing simple calculation.\",\"No problem\"]}},{\"name\":\"Sankalp\",\"year\":\"5\",\"teaching\":{\"sname\":[\"Mamta\"],\"sclass\":[\"8\"],\"schapter\":[\"Rhymes\"],\"ssubject\":[\"Science\"],\"sremark\":[\"She should be given coaching.\"]}}]', 'Current goes away many times. Need inverter or battery backup.'),
(8, '2017-01-20', 'Sector - 21', 'sector-21', 'Hello', 'auto', 24, '2', '[{\"name\":\"Pragyan\",\"year\":\"3\",\"teaching\":{\"sname\":[\"Aman\",\"Piyush\"],\"sclass\":[\"4\",\"5\"],\"schapter\":[\"Indices\",\"surds\"],\"ssubject\":[\"Maths\",\"Algo\"],\"sremark\":[\"People are facing much problem in doing simple calculation.\",\"No problem\"]}},{\"name\":\"Sankalp\",\"year\":\"5\",\"teaching\":{\"sname\":[\"Mamta\"],\"sclass\":[\"8\"],\"schapter\":[\"Rhymes\"],\"ssubject\":[\"Science\"],\"sremark\":[\"She should be given coaching.\"]}}]', 'Current goes away many times. Need inverter or battery backup.');

-- --------------------------------------------------------

--
-- Table structure for table `sectors`
--

CREATE TABLE `sectors` (
  `sector_id` int(11) NOT NULL,
  `sector_name` varchar(50) NOT NULL,
  `sector_slug` varchar(50) NOT NULL,
  `sector_avatar` varchar(100) NOT NULL,
  `sector_captain_name` varchar(50) NOT NULL,
  `sector_captain_phone` varchar(20) NOT NULL,
  `sector_captain_fb` varchar(100) NOT NULL,
  `sector_vc_name` varchar(50) NOT NULL,
  `sector_vc_phone` varchar(20) NOT NULL,
  `sector_vc_fb` varchar(100) NOT NULL,
  `sector_details` text NOT NULL,
  `sector_total_student` int(11) NOT NULL,
  `sector_location` varchar(50) NOT NULL,
  `sector_distance` int(11) NOT NULL,
  `sector_achievements` text NOT NULL,
  `sector_trash` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sectors`
--

INSERT INTO `sectors` (`sector_id`, `sector_name`, `sector_slug`, `sector_avatar`, `sector_captain_name`, `sector_captain_phone`, `sector_captain_fb`, `sector_vc_name`, `sector_vc_phone`, `sector_vc_fb`, `sector_details`, `sector_total_student`, `sector_location`, `sector_distance`, `sector_achievements`, `sector_trash`) VALUES
(1, 'Sector - 2', 'sector-2', 'sector-2.jpg', 'Chinmaya Behera', '8337956632', '', 'Piyush Mathur', '8386830134', '', '<p>The marvellous journey of sector-2, the workplace nearest to the institute, started in the year 2014. In the initial period, it faced a lot of issues from the community; but the passion and enthusiasm of the members have helped to pave a bright futures for more than 30 kids till date, and the number\'s increasing by the day.</p>', 30, 'Sector-2', 2, '', 0),
(2, 'Sector - 5', 'sector-5', 'sector-5.jpg', 'Sanareddy Lokesh', '9437725005', '', 'Dhanush Pai', '8280040955', '', '<p>AASRA stretched its helping hand for the slum in Sector 5, Rourkela in the year 2011. Our achievements here range from helping out local kids with their academic requirements, and also helping the communities here maintain and healthy environment. Sector 5 family of  35 members, with their passionate work have achieved growth in social as well as individual improvement of no less than 60 children. There has been a very significant improvement in Sector 5’s conditions after our arrival, and we hope to continue to do so.</p>', 30, '', 5, '', 0),
(3, 'Sector - 6', 'sector-6', 'sector-6.jpg', 'Subrat Sahoo', '8895237502', '', 'Ayu Jain', '9755300688', '', '<p>&lsquo;Jagannath Ashram&rsquo;, located in Sector 6, Rourkela is also one of AASRA&rsquo;s workplaces. AASRA extends its help to around 35 families, living in Sector 6 by helping 25 kids with their studies. The Sector 6 AASRA family aims to instill hope into the lives of children who never thought of dreaming big, and turning their lives around. The sector has seen massive improvement in terms of quality of education amongst other things by our help.</p>', 20, '', 6, '', 0),
(4, 'Sector - 21', 'sector-21', 'sector-21.jpg', 'Kartikey Dharendra', '7978708477', '', 'Sagar Chand Soren', '8895125419', '', '<p>The leprosy colony in Sector 21, happens to be one of the workplaces of AASRA. Having been subjected to discrimination because their forefathers were leprosy patients, the people of this slum have been deprived of the various facilities that they as humans are entitled for. AASRA extends its help to around 30 families living here by helping in the education of their kids and making them self-sufficient.</p>', 29, 'Sector 21', 10, '', 0),
(5, 'Khalsa', 'khalsa', 'khalsa.jpg', 'Bhanu Prakash Reddy', '9949643237', '', 'Devendra Patil ', '', '', '<p>This workplace runs as a tie-up with Guru Nanak Public School(GNPS), Rourkela. The children of the school who fail to get quality education, receive Aasra’s help. This is a relatively new workplace adopted by AASRA. Many poor kids from slums around GNPS come here to study, as we take regular classes which act as remedial classes for the students around the area. Recently, GNPS gave us access to various other resources such as a whole school with classrooms and projectors. AASRA is currently taking regular classes there, and working on study material to help out the children who come there for quality education, for free.</p>', 30, '', 0, '', 0),
(41, 'OSAP', 'osap', 'osap.jpg', 'Chinmayee Mahapatra', '9438336009', '', 'Sainandan Mohanty ', '8908221789', '', '<p>OSAP is the farthest and one of the oldest workplaces of AASRA. This too is a leprosy colony. Situated at the bottom of OSAP hill, it is enriched with natural beauty. AASRA helps around 20 families here, and maintains a cordial relationship with the community and works towards improving their lives. OSAP is one of AASRA’s greatest success stories, and we take immense pride in it.</p>', 35, 'OSAP near Nayabazar, Rourkela , odisha', 6, 'Arakhit Rana selected in merit basis to get admission in Government Diploma Engineering college in Electronics and telecommunications branch<br>Awareness on education, cleanliness, good habits , other social financial problems through Parents-children-community people meetings<br>Awareness against girl child marriage and School drop outs<br>Rajkishore Swain got employed as a professional auto driver', 0),
(42, 'Jagda', 'jagda', 'Jagda Group_1.jpg', 'Siddharth', '8456884409', '-', '-', '-', '-', 'Service to Humanity Foundation, Jagda is basically an Orphanage (AASHRAM). AASRA extends its compassion to this organization. Here children are recognized as right holders and they are treated equally irrespective of their gender, social status, ethnicity, religions and languages they speak. The prime motive of this organization is to inculcate “Scientific Revolution” among the children and to make them self-dependent. But most importantly, AASRA works to never let them feel like orphans. AASRA tries to be the family they deserved to have', 26, 'Jagda, Manavseva Marf, Sarna Chowk', 2, '-', 0);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(200) NOT NULL,
  `student_sector` varchar(20) NOT NULL,
  `student_class` varchar(50) NOT NULL,
  `student_class_year` varchar(4) NOT NULL,
  `student_dob` date NOT NULL DEFAULT '2000-10-10',
  `student_school` varchar(200) NOT NULL,
  `student_bloodgroup` varchar(11) NOT NULL,
  `student_fname` varchar(200) NOT NULL,
  `student_foccupation` varchar(200) NOT NULL,
  `student_mname` varchar(200) NOT NULL,
  `student_moccupation` varchar(200) NOT NULL,
  `student_income` varchar(11) NOT NULL,
  `student_category` varchar(20) NOT NULL,
  `student_category_certificate` varchar(5) NOT NULL,
  `student_aadhar` varchar(5) NOT NULL,
  `student_sibling_details` text NOT NULL,
  `student_major_health_issues` text NOT NULL,
  `student_aspire` text NOT NULL,
  `student_contact` varchar(50) NOT NULL,
  `student_voc_courses` text NOT NULL,
  `student_other_talents` text NOT NULL,
  `student_hobbies` text NOT NULL,
  `student_any_help_req` text NOT NULL,
  `student_performance` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `student_name`, `student_sector`, `student_class`, `student_class_year`, `student_dob`, `student_school`, `student_bloodgroup`, `student_fname`, `student_foccupation`, `student_mname`, `student_moccupation`, `student_income`, `student_category`, `student_category_certificate`, `student_aadhar`, `student_sibling_details`, `student_major_health_issues`, `student_aspire`, `student_contact`, `student_voc_courses`, `student_other_talents`, `student_hobbies`, `student_any_help_req`, `student_performance`) VALUES
(17, 'Arup Kumar Nag', 'sector-6', 'BA IIIrd yr', '2017', '1993-03-23', 'Kalyani Ray(Degree) College', 'O+', 'Jayalal Nag', 'Raj Mistri', 'Bijaya Nag', 'Housewife', 'BPL', '', '', 'Yes', 'Kailash Nag:10th ', 'No', 'Good Job', '8984563334', 'I.T.I', 'Good Cricketer, Know Basic English', 'Playing Cricket', 'If Job can be provided', ''),
(16, 'priyanka kandulna', 'sector-2', '8', '2017', '2003-12-28', 'st.joseph convent school', 'A+', 'joachim kandulna', 'RSP', 'salmi kandulna', 'house wife', 'apl', 'st ', 'no', 'yes', 'pratima kandulna :12thpassed, arti kandulna :10', 'eyes problem', 'scientist', '9937580176, 8280106610', '', 'animated drawing', 'basketball', '', ''),
(15, 'rohit ray', 'sector-2', '6', '2017', '2004-08-02', 'desouza school', '', 'bharat ray', 'milkman', 'shraddha devi', 'house wife', 'bpl', 'obc', 'no', 'yes', 'rahul ray:12, niki ray : 8th dropped, ranju ray : 10th dropped,priyanka ray : 10', '', 'footballer', '9040714005', '', 'running', 'singing', '', '50.00%'),
(14, 'vishal singh', 'sector-2', '8', '2017', '2004-11-23', 'nac st high school', '', 'krishna singh', 'decorator', 'janki singh', 'daily work', 'apl', 'gen', 'no', 'yes', '', '', 'engineer', '8984203556', '', 'dancing, running, rangoli, singing,', '', '', '79.00%'),
(13, 'rakhi gupta', 'sector-2', '8', '2017', '2004-10-05', 'nac st up school', '', 'pintu gupta', 'shop', 'usha devi', 'house wife', 'bpl', '', '', 'yes', 'suraj gupta: iti, madhuri gupta: 10, mili gupta: 5', '', 'police', '8093653594', '', '', 'games,skipping,badminton, singing', '', '6:40%'),
(12, 'priya barua', 'sector-2', '8', '2017', '2003-12-03', 'binaba shishu up school', '', 'anil barua', 'Late', 'sunamuni barua', 'house wife', 'bpl', '', '', 'yes', 'rajni barua: +2', '', 'dancer', '', '', '', 'dance, games, skipping , music chair', '', ''),
(11, 'mamta ray', 'sector-2', '10', '2017', '2002-07-04', 'nac st high school', 'b+', 'gorakh ray', 'electrical', 'anarpati devi', 'house wife', 'bpl', 'obc', 'no', 'yes', 'manu ray: class 9 , sonu ray : iti ', 'eyes not visible properly', 'teacher', '9777005978,', '', '', 'drawing,book studying', '', '8:51%'),
(10, 'shajahan khatoon', 'sector-2', '10', '2017', '2004-05-21', 'nac st up  school', 'O+', 'md kalam', 'shop', 'rehana begum', 'house wife', 'bpl', 'obc', 'no', 'yes', 'Gulaz begum:8, Md. zahir: iti, noorjahan khatoon: 7,Md.  Sameer:4, Md. Sohaib: 3 ', 'eyes (water drops)', 'teacher', '9040714006', '', '', 'household work, study, games', '', '5:34%'),
(9, 'sangeeta kumari', 'sector-2', '10', '2017', '2002-09-18', 'nac st high school', '', 'bulu ray', 'electrical (Late)', 'rita devi', 'daily work', 'bpl', '', '', 'yes', 'Anjali kumari: 6, sonia kumari: 3, kajal kumari : 1 , krishna kumar: 2', '', 'teacher', '9934707206', '', '', 'painting, dance, badminton', '', '8:41%'),
(8, 'anjali kumari', 'sector-2', '7', '2017', '2005-03-21', 'nac st up  school', '', 'bulu ray', 'electrical (Late)', 'rita devi', 'daily work', 'bpl', '', '', 'yes', 'Sangeeta kumari: 9, sonia kumari: 3, kajal kumari : 1 , krishna kumar: 2', '', 'police', '9937407206', '', '', 'running, top, football, hockey', '', '5:34%'),
(7, 'sumit prasad', 'sector-2', '6', '2017', '2004-01-27', 'vivekananda sikhya sadan', 'A+', 'raju prasad', 'coloring and painting', 'nirmala prasad', 'house wife', 'bpl', 'sc', 'no', 'yes', 'rakhi  prasad: 7, amit  prasad: 1, neha prasad: 9', '', 'cricketer', '9040464959', '', '', 'drama, dance, acting', '', ''),
(6, 'laxmi ekka', 'sector-2\n', '10', '2017', '2000-01-08', 'rec campus high school', 'A+', 'gamha ekka', 'in village', 'indo ekka', 'sail', 'bpl', 'st ', 'yes', 'yes', '', 'eyes (water drops)', 'doctor', '9090797830', '', '', 'dance ,acting, comedy,social service', '', ''),
(3, 'neha prasad', 'sector-2', '10', '2017', '2002-01-14', 'nac st high school', '', 'raju prasad', 'coloring and painting', 'nirmala prasad', 'house wife', 'bpl', 'sc', 'no', 'yes', 'amit prasad: 1, sumit prasad: 5, rakhi prasad: 7', '', 'doctor', '9040464959', '', 'dancing, running, rangoli, singing,', 'shayeri,dance', '', '8:34%, '),
(4, 'rakhi prasad', 'sector-2', '8', '2017', '2003-08-17', 'nac st up school', '', 'raju prasad', 'coloring and painting', 'nirmala prasad', 'house wife', 'bpl', 'sc', 'no', 'yes', 'amit prasad: 1, sumit prasad: 5, neha prasad: 9', '', 'dancer', '9040464959', '', 'dancing, running, rangoli, singing,', 'dance, singing, music chair, skipping', '', '6:40%'),
(5, 'priti singh', 'sector-2', '10', '2017', '2001-04-11', 'rec campus high school', 'o+', 'krishna singh', 'decorator', 'janki singh', 'daily work', 'apl', 'gen', 'no', 'yes', 'vicky singh:iti, vishal singh: 7, pooja singh: 12, aman singh: 3', '', 'dancer', '8984203556', '', 'painting, comedy', 'dance ', '', ''),
(2, 'tanu nayak', 'sector-2', '10', '2017', '2000-02-29', 'guru nanak khalsa high school', '', 'amit nayak', 'mason', 'nisha nayak', 'house wife', 'apl', 'sc', 'no', 'yes', 'rahul nayak: 6, roshni nayak:5', 'tumor in hand to be operated open', 'pilot', '8658603022,', '', 'dancing, running, rangoli, singing,', 'dance,study', '', '9: 33%, 8: 33%'),
(1, 'manu ray', 'sector-2', '6', '2017', '2004-11-11', 'desouza school', 'o+', 'gorakh ray', 'electrical', 'anarpati devi', 'house wife', 'bpl', 'obc', 'no', 'yes', 'mamata kumari ray : class 9 , sonu ray : iti ', '', 'air force', '9777005978,', '', '', 'mountain climbing,football', '', '5 : 50%'),
(18, 'Soudamini  Raban', 'sector-6', 'BA IIIrd yr', '2017', '1992-01-01', 'Rourkela Degree College', '', 'Dutiya Raban', 'Daily Worker', 'Neto Raban', 'Housewife', 'BPL', '', '', '', 'Ajay Raban:10th Pass', 'No', '', '8984993591', 'Had a training in Customer Call centre', 'Know Basic English, Had worked in a private firms before', 'Dancing', 'If Job can be provided', ''),
(19, 'Satya Bariha', 'sector-6', '12th Pass', '2017', '1998-06-13', 'Kalyani Ray Mahavidyalaya', '', 'Suren Bariha', 'Daily Worker', 'Sumitra Bariha', 'Housewife', 'BPL', '', '', 'Yes', 'Susmita Bariha: 10 , Santosini Bariha:4', 'No', 'Cricketer', '', '', 'Very Good Cricketer', 'Sports', 'Cricket Kit', ''),
(20, 'Monoroma Gadua', 'sector-6', '11th Pass', '2017', '1995-09-03', 'Rourkela Junior College', 'O+', 'Bishikesan Gadua', 'Daily Worker', 'Subhasini Gadua', 'Housewife', 'BPL', '', '', 'Yes', '', 'No', '', '7789882884', '', 'Very Good Manager', 'Dancing, Painting', 'Good Looking Clothes', ''),
(21, 'Kailash Nag', 'sector-6', '10', '2017', '1997-10-19', 'NAC(S.T) High School', 'O+', 'Jayalal Nag', 'Raj Mistri', 'Bijaya Nag', 'Housewife', 'BPL', '', '', 'Yes', 'Arup Kumar Nag:+3 2nd yr', 'No', 'Mechanic', '8984563334', '', 'Very Good Cricketer', 'Playing Cricket', 'If Job can be provided', ''),
(22, 'Gobardhan Bhukta', 'sector-6', '10th Pass', '2017', '1999-12-08', 'Kalyani Ray Mahavidyalaya', 'O+', 'Dutiyananda Bhukta', 'UnEmployed', 'Bijaya Bhukta', 'Housewife', 'BPL', '', '', 'No', 'Gautam Bhukta:Worker', 'No', 'Cricketer', '8455048799', '', 'Good Grasping Power', 'Playing Cricket', 'If Job can be provided', ''),
(23, 'Ajay Raban', 'sector-6', '10th Pass', '2017', '2000-06-05', 'Kalyani Ray Mahavidyalaya', 'O+', 'Dutiya Raban', 'Daily Worker', 'Neto Raban', 'Housewife', 'BPL', '', '', 'Yes', 'Soudamini Raban:+3 2nd yr', 'No', 'Painter', '8984993591', '', 'Awesome Painter', 'Playing Cricket', 'If Job can be provided', ''),
(24, 'Jugeswar Rout', 'sector-6', '10', '2017', '2002-01-07', 'NAC(S.T) High School', '', 'Rabi Rout', 'UnEmployed', 'Kaushalya Rout', 'Housewife', 'BPL', '', '', 'Yes', 'Kalpana Rout: Unemployed', 'No', '', '', '', '', '', 'If Job can be provided', ''),
(25, 'Susmita Bariha', 'sector-6', '10', '2017', '2002-08-17', 'NAC(S.T) High School', '', 'Suren Bariha', 'Daily Worker', 'Sumitra Bariha', 'Housewife', 'BPL', '', '', 'Yes', 'Satya Bariha: 12 Pass , Santosini Bariha:4', 'No', 'Dancer', '', '', 'Intelligent', 'Dancing', 'English Classes ', ''),
(26, 'Abhisekh Sahoo', 'sector-6', '10', '2017', '2002-01-01', 'NAC(S.T) High School', '', 'Rabi Sahoo', 'Municipality Worker', 'Kuni Sahoo', 'Housewife', 'BPL', '', '', 'Yes', 'Prahlad Sahoo, Dasrath Sahoo:Worker  Hemobati Sahoo', 'No', 'Cricketer', '', '', '', 'Playing Cricket', '', ''),
(27, 'Om Kumar Rana', 'sector-6', '10', '2017', '2003-01-17', 'NAC(S.T) High School', '', 'Kanhaiya Kumar rana', 'Daily Worker', 'Rekha Rana', 'Housewife', 'BPL', '', '', 'Yes', 'Anand Kumar Rana:Worker, Chandini Rana:married', 'No', 'Cricketer', '', '', '', 'Playing Cricket', 'If Job can be provided', ''),
(28, 'Gayitri Salma', 'sector-6', '10', '2017', '2002-09-19', 'NAC(S.T) High School', '', 'Sonu Salma', 'Daily Worker', 'Bidesni Salma', 'Housewife', 'BPL', '', '', 'Yes', 'Sabitri Salma:7', 'No', '', '', '', 'Strong in Odia', 'Dancing', '', ''),
(29, 'Seema Amat', 'sector-6', '10', '2017', '2003-04-11', 'NAC(S.T) High School', '', 'Bhabani Amat', 'Farmer', 'Sanju Amat', 'Housewife', 'BPL', '', '', 'Yes', 'Suprabha Amat, Swagatika Amat, Sasmita Amat: Small Kid', 'No', '', '', '', 'Strong in Odia', '', '', ''),
(30, 'Hemant Kumar Pradhan', 'sector-6', '9', '2017', '2002-01-01', 'Saraswati Vidya Mandir', 'AB+', 'Raju Pradhan', 'Raj Mistri', 'Rukmani Pradhan', 'Housewife', 'N-BPL', '', '', 'Yes', 'Anant Kumar Pradhan:4', 'No', 'Engineer', '', '', 'Good In Studies', 'Playing Cricket', 'If Job can be provided', ''),
(31, 'Meera Gohir', 'sector-6', '8', '2017', '2005-08-08', 'NAC(S.T) UP School', '', '', 'Centering Mistri', 'Subasini Gohir', 'Housewife', 'BPL', '', '', 'Yes', '', 'No', 'Sports athelete', '', '', 'Athelete', 'Playing Sports', '', ''),
(32, 'Rakesh Baghar', 'sector-6', '8', '2017', '2005-06-26', 'NAC(S.T) UP School', '', 'Anand Baghar', 'Daily Worker', 'Kumo Baghar', 'Housewife', 'BPL', '', '', 'Yes', 'Mansi Baghar:1', 'No', '', '', '', 'Athelete', 'Playing Cricket', '', ''),
(33, 'Sabitri Salma', 'sector-6', '8', '2017', '2005-01-05', 'NAC(S.T) UP School', '', 'Sonu Salma', 'Daily Worker', 'Bidesni Salma', 'Housewife', 'BPL', '', '', 'Yes', 'Gayitri Salma:10', 'No', '', '', '', 'Athelete', '', '', ''),
(34, 'Subham Kumar Dash', 'sector-6', '8', '2017', '2006-01-21', 'Saraswati Vidya Mandir', '', 'Ajit Kumar Dash', 'Priest', 'Mamuni Panigrahi', 'Housewife', 'N-BPL', '', '', 'Yes', '', 'No', '', '', '', '', '', '', ''),
(35, 'Nuadei Meswa', 'sector-6', '6', '2017', '2007-05-02', 'NAC(S.T) UP School', '', 'Surendra Meswa', 'Daily Worker', 'Santi Meswa', 'Housewife', 'BPL', '', '', 'Yes', 'Manoj Meswa:Small Kid', 'No', '', '', '', '', '', '', ''),
(36, 'Khirod Bhoi', 'sector-6', '5', '2017', '2007-11-14', 'Vidyanagari Primary School', '', 'Subal bhoi', 'Daily Worker', 'Gapo Bhoi', 'Housewife', 'BPL', '', '', 'Yes', '', 'No', '', '', '', '', '', '', ''),
(37, 'Anant Pradhan', 'sector-6', '5', '2017', '2007-01-05', 'Mahima Vidya Mandir', '', 'Raju Pradhan', 'Raj Mistri', 'Rukmani Pradhan', 'Housewife', 'N-BPL', '', '', 'Yes', 'Hemanta Pradhan:8', 'No', '', '', '', 'Good In doing stunts', 'Playing Cricket,Dance', '', ''),
(38, 'Pradip Deep', 'sector-6', '5', '2017', '2007-01-01', 'Vidyanagari Primary School', '', 'Late Mahadev Deep', '', 'Bundei Deep', 'Housewife', 'BPL', '', '', 'Yes', 'Padmini Deep:12th Pass', 'No', '', '', '', '', '', '', ''),
(39, 'Kabita Bhoi', 'sector-6', '4', '2017', '2008-12-17', 'Vidyanagari Primary School', '', 'Ashok Bhoi', 'Daily Worker', 'Hemalato Bhoi', 'Housewife', 'BPL', '', '', 'Yes', 'Manju Bhoi: Small Kid', 'No', '', '', '', '', '', '', ''),
(40, 'Anjali Pradhan', 'sector-6', '4', '2017', '2009-02-27', 'Vidyanagari Primary School', '', 'Surbabu Pradhan', 'Daily Worker', 'Banita Pradhan', 'Housewife', 'BPL', '', '', 'Yes', 'Anjana Pradhan, Alekho Pradhan: Small Kid', 'No', '', '', '', '', '', '', ''),
(41, 'Rasmita bhoi', 'sector-6', '2', '2017', '2011-05-16', 'Vidyanagari Primary School', '', 'Shiba Prasad Bhoi', 'Daily Worker', 'Lobha Bhoi', 'Housewife', 'BPL', '', '', 'Yes', 'Gajanan, Tushar bhoi: Small Kid', 'No', '', '', '', '', '', '', ''),
(81, 'Satya', 'sector 6', '12', '2016', '2000-10-10', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Cricket', '', 'He is currently working in a private company anf focusing in cricket as he is a good player'),
(82, 'Bishal Behera', 'Sector 2', '+2 Commerce', '1st', '2000-10-10', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(43, 'ARJUN DHARUA', 'sector-21', '10', '2017', '2003-08-30', 'GOVT.NAYABAZAR MUNICIPAL HIGHSCHOOL', '', 'LATE.RAM DHARUA', '', 'TULASA DHARUA', 'HOUSE WIFE', 'BPL', '', '', '', '', '', 'ARMY OFFICER', '9658370400;7682946510', '', '', 'SINGING', '', '8:25%'),
(44, 'RANJAN SAHOO', 'sector-21', '10', '2017', '2003-03-04', 'GOVT.NAYABAZAR MUNICIPAL HIGHSCHOOL', '', 'SUDAM SAHOO', 'COMPOUNDER IN HOSPITAL', 'KAMALINI SAHOO', 'HOUSE WIFE', 'BPL', 'GENERAL', '', '', 'RAKESH SAHOO-3', '', 'DOCTOR', '8658388070;9438501249', '', '', 'READING', '', '8:43%'),
(45, 'SUJATA NAYAK', 'sector-21', '10', '2017', '2003-08-15', 'GOVT.NAYABAZAR MUNICIPAL HIGHSCHOOL', '', 'TANGRU NAYAK', 'WORKER IN MUNICIPALITY', 'SAVITRI NAYAK', 'HOUSE WIFE', 'BPL', 'GENERAL', '', '', 'SUDAM NAYAK-WORKER,SUMAN NAYAK-MARRIED', '', 'NURSE', '9938744382', '', '', 'SINGING', '', ''),
(46, 'PUSHPANJALI SETH', 'sector-21', '10', '2017', '2003-03-15', 'GOVT.NAYABAZAR MUNICIPAL HIGHSCHOOL', '', 'DUJODHANA SETH', 'FARMER', 'SATYABHAMA SETH', 'HOUSEWIFE', 'BPL', '', '', '', 'DEEPANJALI SETH-7,RAJESH SETH-3', '', 'NURSE', '9668542843', '', '', 'PAINTING', '', ''),
(47, 'BISWAJEET SAHOO', 'sector-21', '8', '2017', '2005-07-04', 'GOVT.NAYABAZAR MUNICIPAL U.P SCHOOL', '', 'SANAT SAHOO', 'DAILY WAGE WORKER', 'SUMITRA SAHOO', 'HOUSEWIFE', 'BPL', '', '', '', 'JITEN SAHOO-5', '', 'PAINTING ARTIST', '9078932668', '', '', 'PAINTING', '', ''),
(48, 'SHRADHANJALI THAPA', 'sector-21', '8', '2017', '2005-07-02', 'GOVT.NAYABAZAR MUNICIPAL U.P SCHOOL', '', 'CHAITANYA THAPA', '', 'SATYABHAMA THAPA', 'HOUSEWIFE', 'BPL', '', '', '', '', '', 'BEAUTICIAN', '7894624044;9668494558', '', '', 'SINGINING', '', ''),
(49, 'RAGHUNATH GARIA', 'sector-21', '6', '2017', '2006-06-04', 'GOVT.NAYABAZAR MUNICIPAL U.P SCHOOL', '', 'KUNJBIHARI GARIA', 'DAILY WAGE WORKER', 'AHALYA GARIA', 'HOUSEWIFE', 'BPL', '', '', '', 'ANJALI GARIA-3', '', 'ARMY OFFICER', '9040601858', '', '', 'DANCING', '', '5:89%'),
(50, 'JITEN SAHOO', 'sector-21', '6', '2017', '2007-08-20', 'GOVT.NAYABAZAR PRIMARY SCHOOL', '', 'SANATH SAHOO', 'DAILY WAGE WORKER', 'SUMITRA SAHOO', 'HOUSEWIFE', 'BPL', '', '', '', 'BISWAJEET SAHOO-7', '', 'POLICE OFFICER', '9078932668', '', '', 'READING,PLAYING', '', ''),
(51, 'SUCHITRA GURU', 'sector-21', '5', '2017', '2006-10-30', 'GOVT.NAYABAZAR  PRIMARY SCHOOL', '', 'ASHOK GURU', 'MUNICIPALITY EMPLOYEE', 'SEVATI GURU', 'HOUSEWIFE', 'BPL', '', '', '', 'SANJAY-12', '', 'TEACHER', '7077321185', '', '', 'DANCING,SINGING,READING', '', ''),
(52, 'ISHWARI GURU', 'sector-21', '5', '2017', '2008-07-29', 'GOVT.NAYABAZAR PRIMARY SCHOOL', '', 'DAYA GURU', 'ELECTRICIAN', 'GAURI  GURU', 'HOUSEWIFE', 'BPL', '', '', '', 'GANESH-CHILD', '', 'TEACHER', '9090545846', '', '', 'DRAWING', '', ''),
(53, 'NEHA BISWAL', 'sector-21', '5', '2017', '2008-01-09', 'GOVT.NAYABAZAR PRIMARY SCHOOL', '', 'PABITRA BISWAL', 'WORKER IN MUNICIPALITY', 'PADMINI BISWAL', 'HOUSEWIFE', 'BPL', '', '', '', 'NAVYA BISWAL-CHILD', '', 'TEACHER', '9861725439', '', '', 'READING,DANCING', '', ''),
(54, 'SUBHASHREE BAHIDAR', 'sector-21', '5', '2017', '2008-02-13', 'GOVT.NAYABAZAR PRIMARY SCHOOL', '', 'GOURANG BAHIDAR', 'ELECTRICIAN', 'KUNDANTI BAHIDAR', 'HOUSEWIFE', 'BPL', '', '', '', 'SUSHMA BAHIDAR-2', '', 'TEACHER', '8270683581;8270195591', '', '', 'DRAWING,DANCING', '', ''),
(55, 'RAKESH SAHOO', 'sector-21', '4', '2017', '2009-09-20', 'GOVT.NAYABAZAR PRIMARY SCHOOL', '', 'SUDAM SAHOO', 'COMPOUNDER IN HOSPITAL', 'KAMALINI SAHOO', 'HOUSE WIFE', 'BPL', '', '', '', 'RANJAN SAHOO-9', '', 'ACTOR', '8658388070;9438501249', '', '', 'DRAWING', '', ''),
(56, 'KARTIK NAG', 'sector-21', '4', '2017', '2008-11-04', 'GOVT.NAYABAZAR PRIMARY SCHOOL', '', 'KISHOR NAG', 'PAINTER', 'MANDAKINI NAG', 'HOUSEWIFE', 'BPL', '', '', '', 'ABINASH NAG-1', '', 'POLICE OFFICER', '9178196555', '', '', 'PLAYING,DRAWING,STUNT', '', ''),
(57, 'ANJALI GARIA', 'sector-21', '4', '2017', '2008-05-12', 'GOVT.NAYABAZAR PRIMARY SCHOOL', '', 'KUNJBIHARI GARIA', 'DAILY WAGE WORKER', 'AHALYA GARIA', 'HOUSEWIFE', 'BPL', '', '', '', 'RAGHUNATH GARIA-6', '', 'DOCTOR', '9040601858', '', '', 'READING,WRITING,PLAYING', '', ''),
(58, 'ABHINASH NAG', 'sector-21', '2', '2017', '2011-09-18', 'GOVT.NAYABAZAR PRIMARY SCHOOL', '', 'KISHOR NAG', 'DAILY WAGE WORKER', 'MANDAKINI NAG', 'HOUSEWIFE', 'BPL', '', '', '', 'KARTTIK NAG-3', '', 'STUNTMAN', '9178196555', '', '', 'PLAYING,DANCING,STUNT', '', ''),
(59, 'SURAJ KANT KHETI', 'sector-21', '2', '2017', '2011-08-17', 'GOVT.NAYABAZAR PRIMARY SCHOOL', '', 'BANMALI KHETI', 'DAILY WORKER', 'BHAGWATI KHETI', 'HOUSEWIFE', 'BPL', '', '', '', '', '', 'STUNTMAN', '9090791105;7381675256', '', '', 'DANCING', '', ''),
(60, 'SNEHA MAJHI', 'sector-21', 'KG-2', '2017', '2011-06-20', 'BEGINNER\'S ACADEMY SCHOOL', '', 'ANGAD MAJHI', 'ENGINEER', 'PRABHASINI MAJHI', 'HOUSEWIFE', 'BPL', '', '', '', '', '', 'TEACHER', '917456256', '', '', 'DANCING', '', ''),
(61, 'SAMANTA BHOI', 'osap', '10', '2017', '2001-01-22', 'NAYABAZAR MUNICIPAL HIGHSCHOOL', 'NA', 'DHAJRAJ BHOI', 'NO', 'SHANTI BHOI', 'HOUSE WIFE', 'YES', 'OBC', 'YES', 'YES', 'HEMANTA BHOI:BA 2ND YR , GHANASHYAM BHOI:4', 'NO', 'TRAIN DRIVER', '8908980604', 'NO', 'SINGING, DRAWING', 'CRICKET, TV', 'STUDY', '9: 38.33%'),
(62, 'ARAKHIT RANA', 'osap', '10', '2017', '2000-01-01', 'NAYABAZAR MUNICIPAL HIGHSCHOOL', 'NA', 'KUNU RANA', 'DEAD', 'SURUNANI RANA', 'DAILY LABOURER', 'YES', 'SC', 'NO', 'YES', 'DROUPADI:9', 'NO', 'ENGINEER', '8280997005', 'NO', '', '', '', '9: 75.21%'),
(63, 'ANUPAMA BAGARTI', 'osap', '10', '2017', '2000-10-11', 'NAC ST GOVT HIGHSCHOOL SEC-6', 'B+', 'JOGENDRA BAGARTI', 'DAILY LABOURER', 'SUMITRA BAGARTI', 'HOUSEWIFE', 'YES', 'ST ', 'NO', 'YES', 'SATYABHAMA:NO, RAMA: 3', 'NO', 'TRAFFIC POLICE', '8018418485', 'NO', 'DANCE', 'TV AND GAME', 'STUDY', '9: 42.33%'),
(64, 'ARATI BARAD', 'osap', '10', '2017', '1999-11-14', 'NAYABAZAR MUNICIPAL HIGHSCHOOL', 'NA', 'KABIBARAD', 'DAILY LABOURER', 'SUBHASINI BARAD', 'HOUSE WIFE', 'NO', 'GENERAL', 'NO', 'YES', 'ASHOK: BCOM 2, BIJAY: BCOM 2', 'NO', 'NURSE', '9778089882', 'NO', 'NA', 'TV', 'STUDY', '9: 28.5%'),
(65, 'MINA MUKHI', 'osap', '10', '2017', '2000-10-22', 'NAYABAZAR MUNICIPAL HIGHSCHOOL', 'NA', 'MOHAN MUKHI', 'DAILY LABOURER', 'INDIRA MUKHI', 'HOUSE WIFE', 'YES', 'SC', 'NO', 'YES', 'BANITA: 9, ANITA : 4', 'NO', 'DOCTER', '7735888775', 'NO', 'PAINTING', 'SONG', 'STUDY', '9: 34.67%'),
(66, 'SARITA PRADHAN', 'osap', '10', '2017', '2000-10-22', 'NAYABAZAR MUNICIPAL HIGHSCHOOL', 'NA', 'SIMHA PRADHAN', 'DEAD', 'BETIKHAI BAG', 'DAILY LABOURER', 'YES', 'SC', 'NO', 'YES', 'SANKAR : 9, SHABHU: 3', 'NO', '', 'NA', '', '', '', '', 'NA'),
(67, 'DRAUPADI RANA', 'osap', '10', '2017', '2001-01-05', 'NAYABAZAR MUNICIPAL HIGHSCHOOL', '', 'KUNU RANA', '', 'SURUNANI RANA', 'HOUSEWIFE', 'YES', 'SC', 'NO', 'YES', 'ARIKHIT RANA:10', 'NO', 'NURSE', '8280997005', 'NO', 'SINGING, JHOTI MAKING', 'TV', 'STUDY', '8: 74.57%'),
(68, 'JAMINI BHOI', 'osap', '10', '2017', '2002-10-06', 'NAYABAZAR MUNICIPAL HIGHSCHOOL', '', 'MAINU BHOI', 'DAILY LABOURER', 'JANGYESENI BHOI', 'HOUSEWIFE', 'YES', 'SC', 'NO', 'YES', 'KAMINI BHOI: 7', 'NO', 'TRAFFIC POLICE', '7809199026', 'NO', 'DANCE', 'TV', 'STUDY', '8: 56%'),
(69, 'DEBAKI BHOI', 'osap', '10', '2017', '2001-11-14', 'OSAP HIGHSCHOOL', '', 'CHATURBHUJA BHOI', 'DAILY LABOURER', 'SABITA BHOI', 'HOUSEWIFE', 'YES', 'SC', 'NO', 'YES', 'ADARSHA BHOI:7 , AKASH BHOI:4', 'NO', 'PAINTER', '9178789716', 'NO', 'DRAWING, SINGING', 'TV', '', '8: 33.17%'),
(70, 'SANKAR PRADHAN', 'osap', '10', '2017', '2002-07-03', 'NAYABAZAR MUNICIPAL HIGHSCHOOL', 'NA', 'SIMHA PRADHAN', 'DEAD', 'BETIKHAI BAG', 'DAILY LABOURER', 'YES', 'SC', 'NO', 'YES', 'SARITA: 10, SHAMBHU : 3 (NOT STYDYING', 'NO', 'DANCER', 'NA', 'NO', 'DANCE, DRAWING', 'FOOTBALL, CRICKET', 'MONETARY', '8: 36.28%'),
(71, 'JYOTI BAGHAR ', 'osap', '10', '2017', '2002-07-03', 'OSAP HIGHSCHOOL', 'NA', '', '', 'SOROJINI BAGHAR', 'ANGANWADI WORKER', 'YES', 'SC', 'NO', 'YES', 'RAJESH:+2 ', 'NO', 'NA', 'NA', 'NO', 'NA', 'NA', 'NA', 'NA'),
(72, 'BANITA MUKHI', 'osap', '10', '2017', '2003-11-12', 'OSAP HIGHSCHOOL', 'NA', 'MOHAN MUKHI', 'DAILY LABOURER', 'INDIRA MUKHI', 'HOUSE WIFE', 'YES', 'SC', 'NO', 'NO', 'MINA :10:ANITA:4', 'NO', 'DANCER', '7735888775', 'NO', 'SONG', 'TV', 'STUDY', '8:38.%'),
(73, 'RAHUL PANDY', 'osap', '9', '2017', '2003-11-12', '', '', '', '', '', '', '', 'SC', '', '', '', '', '', '', '', '', '', '', 'NA'),
(74, 'KAMINI BHOI', 'osap', '8', '2017', '2003-12-24', 'OMP NODAL UP SCHOOL', '', 'MAINU BHOI', '', '', '', '', 'SC', '', '', '', '', 'NURSE', '', '', 'DRAWING', 'TV, BADMINTON', 'STUDY', '6: 85.43%'),
(75, 'RANJAN SWAIN ', 'osap', '8', '2017', '2004-06-25', 'OMP NODAL UP SCHOOL', '', 'RABI SWAIN', 'DAILY LABOUR', 'SARASWATI SWAIN', 'HOUSEWIFE', 'YES', 'SC', 'NO', 'YES', 'RAJKISHORE SWAIN : AUTO DRIVE', 'NO', 'ENGINEER', '9338762985', 'NO', 'DRAWING', 'FOOTBALL', 'STUDY', '6: 37.71%'),
(76, 'MAMATA BARIHA', 'osap', '6', '2017', '2005-08-17', 'OMP NODAL UP SCHOOL', '', 'ASHOK BARIHA', 'DAILY LABOUR', 'DAMAYANTI BARIHA', 'COOK IN HOSPITAL', 'YES', 'SC', 'NO', 'YES', 'MANOJ BARIHA : 3, SAROJ BARIHA: 2', 'NO', 'TEACHER', '', 'NO', 'JHOTI MAKING', 'TV ', 'STUDY', 'NA'),
(77, 'SUNDRA BHOSAGAR', 'osap', '5', '2017', '2005-04-19', 'NANDAPADA MODEL SCHOOL', 'NA', 'CHAKRA BHOSAGAR', 'LABOURER', 'ROJONI BHOSAGAR', 'PEON', 'YES', 'SC', 'NO', 'YES', 'HEMOBANTI:5,SUNENA:1', 'NO', '', '', 'NO', '', '', 'STUDY', 'NA'),
(78, 'HEMABANTI BHOGAAR', 'osap', '5', '2017', '2006-09-17', 'NANDAPADA MODEL SCHOOL', 'NA', 'CHAKRA BHOSAGAR', 'DAILY LABOUR', 'ROJONI BHOSAGAR', 'PEON', 'YES', 'SC', 'NO', 'YES', 'SUREANDAR:5,SUNENA;1', 'NO', 'DOCTER', '', 'NO', 'SONG DANCE', 'TV', 'STUDY', 'NA'),
(79, 'ANITA MUKHIA', 'osap', '4', '2017', '2004-02-10', 'NANDAPADA MODEL SCHOOL', 'NA', 'MOHAN MUKHIA', ' DAILY LABOURER', 'INDIRA MUKHI', 'HOUSE WIFE', 'YES', 'ST', 'NO', 'YES', 'MINA:10,BANITA MUKHI:9', 'NO', 'DOCTER', '7735888775', 'NO', 'S0NG,DANCE', 'TV', 'STUDY', 'NA'),
(80, 'AKASH BHOI', 'osap', '4', '2017', '2008-02-18', 'NANDAPADA MODEL SCHOOL', 'NA', 'CHATURBHUJA BHOI', 'DAILY LABOURER', 'SABITA BHOI', 'HOUSEWIFE', 'YES', 'SC', 'NO', 'YES', 'DEBAKI:9, ADARSH:7', 'NO', 'ENGINEER', '9178789716', 'NO', '', '', 'STUDY', 'NA'),
(83, 'Monalisa Hembram', 'sector 2', '+2 Commece', '1st', '2000-10-10', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(84, 'Priti Singh ', 'sector 2', '+2 commerce ', '1st', '2000-10-10', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(85, 'Laxmi Ekka', 'sector 2', '+2 Commerce', '1st', '2000-10-10', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(86, 'Tanu Nayak', 'Sector 2', '+2 arts', '1st', '2000-10-10', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(1, 'admin', 'pokharacity');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`album_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `collaborators`
--
ALTER TABLE `collaborators`
  ADD PRIMARY KEY (`collaborator_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`people_id`);

--
-- Indexes for table `post_holders`
--
ALTER TABLE `post_holders`
  ADD PRIMARY KEY (`post_holder_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `sectors`
--
ALTER TABLE `sectors`
  ADD PRIMARY KEY (`sector_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `album_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `collaborators`
--
ALTER TABLE `collaborators`
  MODIFY `collaborator_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `people_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `post_holders`
--
ALTER TABLE `post_holders`
  MODIFY `post_holder_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `sectors`
--
ALTER TABLE `sectors`
  MODIFY `sector_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
