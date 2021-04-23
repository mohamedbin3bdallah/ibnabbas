-- phpMyAdmin SQL Dump
-- version 4.3.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 16, 2015 at 10:06 AM
-- Server version: 5.6.22
-- PHP Version: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ibnabbas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `ad_id` int(11) NOT NULL,
  `ad_username` varchar(30) NOT NULL,
  `ad_password` varchar(40) NOT NULL,
  `ad_fname` varchar(30) NOT NULL,
  `ad_lname` varchar(30) NOT NULL,
  `ad_mail` varchar(30) NOT NULL,
  `ad_photo` varchar(100) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` char(1) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`ad_id`, `ad_username`, `ad_password`, `ad_fname`, `ad_lname`, `ad_mail`, `ad_photo`, `date_created`, `status`, `role_id`) VALUES
(1, 'ahmed saber', 'admin', 'ad', 'adad00121', 'admin@gmail.com', 'upload/\r\n\r\narticle-2486855-192ACC5200000578-958_964x682.jpg', '2015-04-21 13:04:17', '1', 1),
(5, 'menna', '123456', 'menna', 'lotfy', 'menna_lotfy@yahoo.com', 'upload/\r\n\r\n1118full-menna-shalabi.jpg', '2015-04-19 11:24:01', '1', 2),
(10, 'admin', 'admin', 'ahmed', 'saber', 'ahmed_saber@yahoo.com', 'upload/\r\n\r\nh2x.jpg', '2015-04-23 13:15:48', '1', 2),
(13, 'bfbfbf', '123456', 'sajshjh', 'jhjahsjh', 'menna_lotfy@yahoo.com', 'upload/\r\n\r\nh2x.jpg', '2015-04-20 10:43:45', '1', 2),
(14, 'kjdgjkdjk', 'admin', 'kjskhch', 'jhsjdhjh', 'admin@gmail.com', 'upload/\r\n\r\nDOVE.png', '2015-04-20 10:44:38', '1', 3),
(15, 'ahmed', 'admin', 'ad', 'adad 12121', 'admin@gmail.com', 'upload/\r\n\r\narticle-2486855-192ACC5200000578-958_964x682.jpg', '2015-04-20 11:47:01', '1', 1),
(16, 'bjifgeiu', '123', 'asjgahsg', 'ghagshga', 'admin@gmail.com', 'upload/\r\n\r\nAmazing_Bike_Stunt_Images.jpg', '2015-04-20 11:21:18', '1', 2),
(17, 'bjifgeiu 000', '123', 'asjgahsg', 'ghagshga', 'admin@gmail.com', 'upload/\r\n\r\nAmazing_Bike_Stunt_Images.jpg', '2015-04-20 11:46:07', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(6) NOT NULL,
  `cat_name` varchar(30) NOT NULL,
  `cat_desc` longtext NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_desc`, `time_created`) VALUES
(3, 'photo gallery', '<p>the gallery of the photos of the artist&nbsp;</p>', '2015-04-21 15:32:21'),
(4, 'video gallery', '<p>the latest show of the videos for the artist</p>', '2015-04-21 15:32:57'),
(5, 'fixed', '<p>fixed item to be displayed</p>', '2015-04-22 12:13:32'),
(6, 'loop', '<p>the item looped as it exists</p>', '2015-04-22 12:14:07');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `photo_id` int(11) NOT NULL,
  `photo_title` varchar(200) NOT NULL,
  `photo_url` varchar(100) NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`photo_id`, `photo_title`, `photo_url`, `time_created`) VALUES
(18, '', '_67A6305.JPG', '2015-05-06 15:06:41'),
(19, '', '_67A6338.JPG', '2015-05-06 15:06:48'),
(20, '', '_67A1218.JPG', '2015-05-06 15:06:57'),
(22, '', 'cover_youtube.jpg', '2015-05-06 15:08:07'),
(23, '', '_67A6514.JPG', '2015-05-06 15:08:13'),
(24, '', 'IMG_7252.JPG', '2015-05-06 15:08:31'),
(25, '', 'IMG_9479.JPG', '2015-05-06 15:08:59'),
(26, '', 'IMG_0585.JPG', '2015-05-06 15:09:11'),
(29, '', 'IMG_0838.JPG', '2015-05-06 15:11:19'),
(32, '', 'IMG_9470.JPG', '2015-05-06 15:55:26');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `msg_id` int(11) NOT NULL,
  `mail_from` varchar(30) NOT NULL,
  `mail_pass` varchar(40) NOT NULL,
  `mail_subj` varchar(200) NOT NULL,
  `mail_msg` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msg_id`, `mail_from`, `mail_pass`, `mail_subj`, `mail_msg`) VALUES
(1, 'admin@mediargroup.com', 'Bzfh2Hu$WIMb', 'Mediar R Group 00', '<p>we are honored to contact with us , and we will provide with the latest news and updates of mediaR. 00</p>');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `page_id` int(11) NOT NULL,
  `page_title` varchar(200) NOT NULL,
  `page_name` varchar(30) NOT NULL,
  `page_desc` varchar(300) NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `page_title`, `page_name`, `page_desc`, `time_created`) VALUES
(82, 'about the website owner and activity ', 'about me', '<p>a short brief about the website owner and activity&nbsp;</p>', '2015-04-21 15:25:53'),
(83, 'a good presentation for the events ', 'events', '<p>a good presentation for the events&nbsp;</p>', '2015-04-21 15:26:38'),
(84, 'the latest news about the artist', 'news', '<p>the latest news about the artist</p>', '2015-04-21 15:27:15'),
(85, 'the store of the products and the purchased items ', 'store', '<p>the store of the products and the purchased items&nbsp;</p>', '2015-04-21 15:28:16'),
(86, 'the contacts of the website ', 'contact me', '<p>the contacts information of the website&nbsp;</p>', '2015-04-21 15:29:45'),
(87, 'the gallery of the photos and videos ', 'gallery', '<p>the gallery of the photos and videos&nbsp;</p>', '2015-04-21 15:30:33'),
(88, 'the home page of the website ', 'home', '<p>the home page of the website&nbsp;</p>', '2015-04-21 15:31:12'),
(89, 'vsscs', 'scscscs jhjhj', '<p>ccsccsc</p>', '2015-05-06 17:23:08');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(300) NOT NULL,
  `post_desc` longtext NOT NULL,
  `post_target` varchar(100) NOT NULL,
  `post_cat` varchar(30) NOT NULL,
  `post_photo` varchar(200) NOT NULL,
  `post_order` int(11) NOT NULL,
  `post_title_ar` varchar(300) NOT NULL,
  `post_desc_ar` longtext NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_desc`, `post_target`, `post_cat`, `post_photo`, `post_order`, `post_title_ar`, `post_desc_ar`, `time_created`) VALUES
(1, 'new post title ', '<p>new post description&nbsp;</p>', '1', '', 'upload/\r\n\r\n130.jpg', 12, 'عنوان المحتوى ', '<p>تفاصيل المحتوى</p>', '2015-04-21 11:08:51'),
(2, 'new post title ', '<p>new post description&nbsp;</p>', '1', '', 'upload/\r\n\r\n130.jpg', 12, 'عنوان المحتوى ', '<p>تفاصيل المحتوى</p>', '2015-04-21 11:09:44'),
(3, 'new post title ', '<p>new post description&nbsp;</p>', '1', '', 'upload/\r\n\r\n130.jpg', 12, 'عنوان المحتوى ', '<p>تفاصيل المحتوى</p>', '2015-04-21 11:10:32'),
(4, 'new post title ', '<p>new post description&nbsp;</p>', '1', '', 'upload/\r\n\r\n130.jpg', 12, 'عنوان المحتوى ', '<p>تفاصيل المحتوى 00&nbsp;</p>', '2015-04-21 11:10:56'),
(5, 'new post title ', '<p>new post description&nbsp;</p>', '1', '', 'upload/\r\n\r\n130.jpg', 12, 'عنوان المحتوى ', '<p>تفاصيل المحتوى</p>', '2015-04-21 11:31:15'),
(6, 'new post title 00 214', '<p>new post description 8989 </p>', '4', '', 'upload/\r\n\r\n130.jpg', 12, 'عنوان المحتوى 4545', '<p>تفاصيل المحتوى</p>', '2015-04-21 11:32:55'),
(12, 'about me', '<p style="text-align: center;"><span style="color: #ffcc00;"><strong>"From nobody, to somebody "</strong></span>: that''s me in one sentence!</p>\r\n<p style="text-align: left;">My early life as a young boy in my home country Sudan wasn&rsquo;t filling of&nbsp;much expectations.</p>\r\n<p style="text-align: left;">I have finished my studies in commerce and computers like anybody.<br /> But my life goals and dreams were not like anybody, they were so much bigger than a normal job with a normal salary.</p>\r\n<p style="text-align: left;">I looked so long for the right opportunity, and when I found it, I just grabbed it immediately and worked so hard, and persevered till I started to achieve my goals!<br /> I wasn&rsquo;t special or abnormal! Only I decided to pass the winding road of life by dreaming big and believing in myself and in my abilities.</p>\r\n<p style="text-align: left;">And I thank ALLAH that today I am living my life enjoying sharing my experience with thousands and thousands of people around the world, to let them know that success has no limits, hoping that my words could motivate them to achieve what they want.</p>', '82', '', '', 1, 'من انا', '<p>" من أحد، لشخص ما " : هذا لي في جملة واحدة ! حياتي في وقت مبكر كما صبي صغير في بلدي السودان لم يملأ من التوقعات بكثير. لقد انتهيت من دراستي في مجال التجارة و أجهزة الكمبيوتر مثل أي شخص . لكن أهداف حياتي والأحلام لم تكن مثل أي شخص ، وكانوا بذلك أكبر بكثير من مجرد وظيفة عادية براتب عادي. نظرت طويلا الفرصة المناسبة ، و عندما وجدت ذلك، وأنا فقط أمسك على الفور و عملت بجد و ثابر حتى بدأت في تحقيق أهدافي ! لم أكن خاصة أو غير طبيعية ! قررت فقط أن يمر الطريق المتعرج الحياة من خلال الحلم الكبير و الاعتقاد في نفسي و قدراتي . و أشكر الله أن اليوم أنا أعيش حياتي تتمتع تقاسم تجربتي مع الآلاف والآلاف من الناس في جميع أنحاء العالم ، ليعرفوا أن النجاح ليس له حدود ، على أمل أن كلامي قد تحفيزهم لتحقيق ما يريدون .</p>', '2015-04-21 15:34:12'),
(13, 'my events', '<p style="text-align: left;">Performing touchable songs on hearts is an event.</p>\r\n<p style="text-align: left;">Affect someone and help him/her to change their life is great event.</p>\r\n<p style="text-align: left;">Communicate with people and share a sincere and passion message together is extraordinary event.</p>', '83', '5', '', 1, 'MY EVENTS', '<p style="text-align: right;">أداء الأغاني ملموس على قلوبهم حدث</p>\r\n<p style="text-align: right;">. تؤثر شخص و مساعدة له / لها لتغيير حياتهم الحدث الكبير</p>\r\n<p style="text-align: right;">. التواصل مع الناس وتبادل رسالة الصادقة والعاطفة معا هو حدث غير عادي</p>', '2015-04-21 15:35:56'),
(14, 'Ibn Abbas on Mazzika', '<div><strong>in youm 7</strong></div>\r\n<div>Mazzika channel will present a clip in new year called "Dream is light".</div>\r\n<div>the song is talking about hopefulness and positive thinking in life. the song is written by Mahmoud Saber and composed by Mohamed Badrkan.</div>', '84', '', '', 1, 'ابن عباس على مزيكا ', '<p style="text-align: right;">سوف قناة مزيكا بعرض مقطع في العام الجديد يسمى "حلم خفيف " . الأغنية تتحدث عن الأمل و التفكير الإيجابي في الحياة . و الأغنية من كلمات محمود صابر وألحان محمد Badrkan .</p>', '2015-04-21 15:39:09'),
(15, 'Ibn Abbas on ONA', '<p><strong>in ONA:</strong></p>\r\n<p>Ibn Abbas, a new Sudanese talent has a special voice will present a new clip in Mother''s day called"never upset your mother" . The song was written by great author, Bahaa eldien Mohammed and composed by Mohamed Badrkan.</p>', '84', '', '', 2, 'ابن عباس على ONA', '<p style="text-align: right;">بن عباس ، موهبة السودانية الجديدة لديها صوت خاص سيقدم كليب جديد في عيد الأم بعنوان " أبدا بالضيق والدتك " . و الأغنية من كلمات الكاتب الكبير بهاء eldien محمد وألحان محمد Badrkan .</p>', '2015-04-22 09:45:21'),
(17, 'MY STORE', '<p>I''m just someone who wants to touch as many hearts as possible and to help changing as many lives as he could! And performing songs, as much as it is a childhood dream coming true, it is just another way for me to communicate with people around the world as a sincere message of passion and belief!. <a href="store.html">show all product</a></p>', '85', '5', '', 1, 'MY STORE', '<p style="text-align: right;">أنا مجرد شخص يريد أن تلمس العديد من ممكن من القلوب والمساعدة على تغيير عدد من الأرواح ما يستطيع</p>\r\n<p style="text-align: right;">! و أداء الأغاني ، بقدر ما هو حلم الطفولة الحقيقية القادمة ،<br /> انها مجرد وسيلة أخرى بالنسبة لي على التواصل مع الناس في جميع أنحاء العالم و رسالة صادقة من العاطفة والمعتقد !. عرض جميع المنتجات</p>', '2015-04-21 15:42:10'),
(18, 'event Name', '<p>text here text here text here</p>', '83', '6', 'upload/\r\n\r\nevent.png', 1, 'اسم المناسبة ', '<p>تفاصيل المحتوى</p>', '2015-04-22 09:25:18'),
(19, 'event name ', '<p>text here text here text here</p>', '83', '6', 'upload/\r\n\r\nevent.png', 2, 'عنوان المحتوى', '<p>تفاصيل المحتوى</p>', '2015-04-22 09:27:36'),
(20, 'event Name', '<p>text here text here text here</p>', '83', '6', 'upload/\r\n\r\nevent.png', 5, 'عنوان المحتوى', '<p>تفاصيل المحتوى</p>', '2015-04-22 09:29:02'),
(21, 'event Name', '<p>post description</p>', '83', '6', 'upload/\r\n\r\nevent.png', 8, 'عنوان المحتوى', '<p>تفاصيل المحتوى</p>', '2015-04-22 09:39:46'),
(22, 'event Name', '<p>post description</p>', '83', '6', 'upload/\r\n\r\nevent.png', 20, 'عنوان المحتوى', '<p>تفاصيل المحتوى</p>', '2015-04-22 09:41:36'),
(23, 'event Name', '<p>post description</p>', '83', '6', 'upload/\r\n\r\nevent.png', 20, 'عنوان المحتوى', '<p>تفاصيل المحتوى</p>', '2015-04-22 09:44:00'),
(24, 'event Name', '<p>post description</p>', '83', '6', 'upload/\r\n\r\nevent.png', 30, 'عنوان المحتوى', '<p>تفاصيل المحتوى</p>', '2015-04-22 09:45:21'),
(25, 'A product title', '<p>A wonderful serenity has taken possession of my entire soul.</p>', '85', '6', 'upload/\r\n\r\n1.jpg', 5, 'عنوان المحتوى', '<p>تفاصيل المحتوى</p>', '2015-04-22 12:47:52'),
(26, 'product title ', '<p>A wonderful serenity has taken possession of my entire soul.</p>', '85', '6', 'upload/\r\n\r\n1.jpg', 7, 'عنوان المحتوى', '<p>تفاصيل المحتوى</p>', '2015-04-22 12:49:16'),
(27, 'product title ', '<p>A wonderful serenity has taken possession of my entire soul.</p>', '85', '6', 'upload/\r\n\r\n1.jpg', 10, 'عنوان المحتوى', '<p>تفاصيل المحتوى</p>', '2015-04-22 12:50:08'),
(28, 'product title ', '<p>A wonderful serenity has taken possession of my entire soul.</p>', '', '', '', 0, 'عنوان المحتوى', '<p>تفاصيل المحتوى</p>', '2015-04-22 12:50:33'),
(29, 'product title ', '<p>A wonderful serenity has taken possession of my entire soul.</p>', '85', '6', 'upload/\r\n\r\n1.jpg', 11, 'عنوان المحتوى', '<p>تفاصيل المحتوى</p>', '2015-04-22 12:51:47');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE IF NOT EXISTS `query` (
  `msg_id` int(11) NOT NULL,
  `msg_name` varchar(30) NOT NULL,
  `msg-mail` varchar(30) NOT NULL,
  `msg_details` longtext NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE IF NOT EXISTS `quotes` (
  `quote_id` int(11) NOT NULL,
  `quote_url` varchar(100) NOT NULL,
  `quote_title` varchar(300) NOT NULL,
  `quote_title_ar` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`quote_id`, `quote_url`, `quote_title`, `quote_title_ar`) VALUES
(0, 'https://www.youtube.com/watch?v=k3y1dM2GVCo', 'make your dream possible', 'احلم وحقق حلمك'),
(0, 'https://www.youtube.com/watch?v=a2pmk3f6BW8', 'point to your goal to achive it', 'حدد هدفك واعمل للوصول اليه'),
(0, 'https://www.youtube.com/watch?v=Nr2NObIwo0Y', 'time preparing', 'تنظيم الوقت'),
(0, 'https://www.youtube.com/watch?v=-D6UkzuubRc', 'obligation', 'الالتزام'),
(0, 'https://www.youtube.com/watch?v=TNU0jrnCIHw', 'action', 'الفعل'),
(0, 'https://www.youtube.com/watch?v=hHZCj5KdaHc', 'furious desire', 'الرغبة المشتعلة'),
(0, 'https://www.youtube.com/watch?v=gryTfuGPZM0', 'motivations', 'الدوافع '),
(0, 'https://www.youtube.com/watch?v=rQvdnSzDBgk', 'external motivations', 'الدوافع الخارجية'),
(0, 'https://www.youtube.com/watch?v=Zkfu6b4qZWM', 'survival motivation', 'دوافع البقاء'),
(0, 'https://www.youtube.com/watch?v=LPOaH8UWNOQ', 'personal motivations', ' الدوافع الداخلية');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'admin'),
(2, 'editor'),
(3, 'subscriber');

-- --------------------------------------------------------

--
-- Table structure for table `sender`
--

CREATE TABLE IF NOT EXISTS `sender` (
  `sender_id` int(11) NOT NULL,
  `sender_mail` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sender`
--

INSERT INTO `sender` (`sender_id`, `sender_mail`) VALUES
(1, 'mediaregypt@gmail.com'),
(2, 'info@mediargroup,com'),
(4, 'samohero12@yahoo.com'),
(5, 'info@mediargroup.com'),
(6, 'info@mediargroup.com'),
(7, 'info@mediargroup.com');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_url` varchar(100) DEFAULT NULL,
  `slider_desc` varchar(300) DEFAULT NULL,
  `slider_desc_ar` varchar(300) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_url`, `slider_desc`, `slider_desc_ar`) VALUES
(43, 'slide121.jpg', 'Welcome To IBN ABBASS'' Official Website', 'أهلاً بكم فى الموقع الرسمى لابن عباس '),
(45, 'slide22.jpg', 'Welcome To IBN ABBASS'' Official Website', 'أهلاً بكم فى الموقع الرسمى لابن عباس ');

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE IF NOT EXISTS `social` (
  `social_id` int(11) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `youtube` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `google` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `soundcloud` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`social_id`, `facebook`, `twitter`, `youtube`, `instagram`, `google`, `linkedin`, `soundcloud`) VALUES
(1, 'https://www.facebook.com/IbnAbbassofficial', 'https://twitter.com/IbnAbbass', 'http://www.youtube.com/c/Ibnabbassofficial ', 'http://instagram.com/ibnabbassofficial/', 'https://plus.google.com/', 'https://www.linkedin.com/', 'https://soundcloud.com/ibnabbassofficial');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `video_id` int(11) NOT NULL,
  `video_title` varchar(100) NOT NULL,
  `video_url` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`video_id`, `video_title`, `video_url`) VALUES
(2, '', 'https://www.youtube.com/watch?v=aNit5AVw_gU'),
(3, '', 'https://www.youtube.com/watch?v=sP_KOFDGsEY');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`ad_id`), ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `sender`
--
ALTER TABLE `sender`
  ADD PRIMARY KEY (`sender_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`social_id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sender`
--
ALTER TABLE `sender`
  MODIFY `sender_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `social_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
ADD CONSTRAINT `admins_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
