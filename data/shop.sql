-- phpMyAdmin SQL Dump
-- version 4.7.0-beta1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2017-07-25 07:35:32
-- 服务器版本： 5.7.10-log
-- PHP Version: 5.6.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- 表的结构 `imooc_admin`
--

CREATE TABLE `imooc_admin` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` char(32) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `imooc_admin`
--

INSERT INTO `imooc_admin` (`id`, `username`, `password`, `email`) VALUES
(1, 'king', 'b2086154f101464aab3328ba7e060deb', '382771946@qq.com'),
(2, 'admin', 'b2086154f101464aab3328ba7e060deb', '382771946@qq.com'),
(3, 'imooc123', 'cab98d9ca998b351854f959064ca4935', 'imooc123@qq.com'),
(4, 'imooc1', '00e19d92ed3f2be707e94051b92986d1', 'imooc1@qq.com'),
(5, 'imoocCCTV', '914f21eb84c6fdb2b663dd6f453f65ca', 'imoocCCTV@qq.com'),
(6, 'test', '098f6bcd4621d373cade4e832627b4f6', 'test@qq.com');

-- --------------------------------------------------------

--
-- 表的结构 `imooc_album`
--

CREATE TABLE `imooc_album` (
  `id` int(10) UNSIGNED NOT NULL,
  `pid` int(10) UNSIGNED NOT NULL,
  `albumPath` varchar(50) NOT NULL,
  `nid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `imooc_album`
--

INSERT INTO `imooc_album` (`id`, `pid`, `albumPath`, `nid`) VALUES
(50, 28, '22562557dd53b3876faeb537766ae644.jpg', 0),
(51, 29, '08887c52653cd8fc5ec405da476a20bd.jpg', 0),
(52, 30, 'fe937e882572514f48071b08f9905a89.jpg', 0),
(53, 31, '5a54e4bff672141a31d05335d26ad99e.jpg', 0),
(54, 32, '87aec2b93853c3f02eabbd47c366f41c.jpg', 0),
(55, 33, 'be222c154b0708e36c4bcc09ec52a471.jpg', 0),
(56, 0, '856f88fe8ddcccbb774b2f6cba8a28d4.jpg', 11),
(57, 0, 'c1356ce87179f93f9571c38f8a79d351.jpg', 12),
(58, 0, 'a4a9179d446cbd06ca2ab25b14a040f7.jpg', 13);

-- --------------------------------------------------------

--
-- 表的结构 `imooc_cart`
--

CREATE TABLE `imooc_cart` (
  `id` int(20) NOT NULL,
  `Pid` int(20) NOT NULL,
  `Userid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `imooc_cate`
--

CREATE TABLE `imooc_cate` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `cName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `imooc_cate`
--

INSERT INTO `imooc_cate` (`id`, `cName`) VALUES
(1, '家用电器'),
(4, '服装专区'),
(6, '水果'),
(5, '蔬菜');

-- --------------------------------------------------------

--
-- 表的结构 `imooc_food`
--

CREATE TABLE `imooc_food` (
  `id` int(20) NOT NULL,
  `foodname` varchar(255) NOT NULL,
  `pid` int(255) NOT NULL,
  `content` text NOT NULL,
  `pubtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `imooc_food`
--

INSERT INTO `imooc_food` (`id`, `foodname`, `pid`, `content`, `pubtime`) VALUES
(11, '凉拌豆皮', 0, '131', '0000-00-00 00:00:00'),
(12, '葱炒鸡蛋', 0, '1313', '0000-00-00 00:00:00'),
(13, '酸辣土豆丝', 0, '131', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `imooc_inf`
--

CREATE TABLE `imooc_inf` (
  `id` int(20) NOT NULL,
  `iName` varchar(255) NOT NULL,
  `iPrice` int(10) NOT NULL,
  `Pid` int(20) NOT NULL,
  `icontent` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `imooc_new`
--

CREATE TABLE `imooc_new` (
  `id` int(20) NOT NULL,
  `albumpath` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `pubtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `imooc_order`
--

CREATE TABLE `imooc_order` (
  `id` int(20) NOT NULL,
  `pid` int(20) NOT NULL,
  `userid` int(20) NOT NULL,
  `mount` int(10) NOT NULL,
  `date` datetime NOT NULL,
  `adress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `imooc_order`
--

INSERT INTO `imooc_order` (`id`, `pid`, `userid`, `mount`, `date`, `adress`) VALUES
(1, 1, 1, 1, '2017-07-03 00:00:00', '二二无污染'),
(2, 2, 2, 2, '2017-07-19 00:00:00', '334任务任务而');

-- --------------------------------------------------------

--
-- 表的结构 `imooc_pro`
--

CREATE TABLE `imooc_pro` (
  `id` int(10) UNSIGNED NOT NULL,
  `pName` varchar(255) NOT NULL,
  `pSn` varchar(50) NOT NULL,
  `pNum` int(10) UNSIGNED DEFAULT '1',
  `mPrice` decimal(10,2) NOT NULL,
  `iPrice` decimal(10,2) NOT NULL,
  `pDesc` text,
  `pubTime` int(10) UNSIGNED NOT NULL,
  `isShow` tinyint(1) DEFAULT '1',
  `isHot` tinyint(1) DEFAULT '0',
  `cId` smallint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `imooc_pro`
--

INSERT INTO `imooc_pro` (`id`, `pName`, `pSn`, `pNum`, `mPrice`, `iPrice`, `pDesc`, `pubTime`, `isShow`, `isHot`, `cId`) VALUES
(28, '黄瓜', '1', 11, '111.00', '11.00', '111', 1500965866, 1, 0, 5),
(29, '土豆', '12', 2, '33.00', '33.00', '3332', 1500965885, 1, 0, 5),
(30, '榴莲', '22', 33, '33.00', '44.00', '水生生物', 1500965904, 1, 0, 6),
(31, '橘子', '2', 33, '22.00', '332.00', '上网搜索', 1500965924, 1, 0, 6),
(32, '苹果', '223', 2332, '33.00', '3232.00', '问问', 1500965946, 1, 0, 6),
(33, '茄子', '323', 33, '33.00', '332.00', '22', 1500965968, 1, 0, 5);

-- --------------------------------------------------------

--
-- 表的结构 `imooc_user`
--

CREATE TABLE `imooc_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` char(32) NOT NULL,
  `sex` enum('男','女','保密') NOT NULL DEFAULT '保密',
  `email` varchar(50) NOT NULL,
  `face` varchar(50) NOT NULL,
  `regTime` int(10) UNSIGNED NOT NULL,
  `activeFlag` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `imooc_user`
--

INSERT INTO `imooc_user` (`id`, `username`, `password`, `sex`, `email`, `face`, `regTime`, `activeFlag`) VALUES
(2, 'king', 'b2086154f101464aab3328ba7e060deb', '男', 'king@qq.com', 'af423aeab90796e3c1cd994b6c464e09.jpg', 1402583678, 0),
(3, 'queen', '72545f3f86fad045a26ed54abd2bbb9f', '保密', 'queen@sina.com', '45306f3e9e4674362731545a86b2261e.jpg', 1402584566, 0),
(4, 'test123', 'cc03e747a6afbbcbf8be7668acfebee5', '保密', 'test123@qq.com', 'c794aed26d04790517233c1d2c99c4d5.jpg', 1402585325, 0),
(5, 'test', 'c20ad4d76fe97759aa27a0c99bff6710', '男', 'test@qq.com', 'ce92c236763184aa42abf575df39b9d1.jpg', 1403009244, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imooc_admin`
--
ALTER TABLE `imooc_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `imooc_album`
--
ALTER TABLE `imooc_album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imooc_cart`
--
ALTER TABLE `imooc_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imooc_cate`
--
ALTER TABLE `imooc_cate`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cName` (`cName`);

--
-- Indexes for table `imooc_food`
--
ALTER TABLE `imooc_food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imooc_inf`
--
ALTER TABLE `imooc_inf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imooc_new`
--
ALTER TABLE `imooc_new`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imooc_order`
--
ALTER TABLE `imooc_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imooc_pro`
--
ALTER TABLE `imooc_pro`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pName` (`pName`),
  ADD UNIQUE KEY `pName_2` (`pName`);

--
-- Indexes for table `imooc_user`
--
ALTER TABLE `imooc_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `imooc_admin`
--
ALTER TABLE `imooc_admin`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- 使用表AUTO_INCREMENT `imooc_album`
--
ALTER TABLE `imooc_album`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- 使用表AUTO_INCREMENT `imooc_cart`
--
ALTER TABLE `imooc_cart`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `imooc_cate`
--
ALTER TABLE `imooc_cate`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- 使用表AUTO_INCREMENT `imooc_food`
--
ALTER TABLE `imooc_food`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- 使用表AUTO_INCREMENT `imooc_inf`
--
ALTER TABLE `imooc_inf`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `imooc_new`
--
ALTER TABLE `imooc_new`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `imooc_order`
--
ALTER TABLE `imooc_order`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `imooc_pro`
--
ALTER TABLE `imooc_pro`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- 使用表AUTO_INCREMENT `imooc_user`
--
ALTER TABLE `imooc_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
