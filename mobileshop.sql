-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018-11-23 16:49:27
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobileshop`
--

-- --------------------------------------------------------

--
-- 表的结构 `adminuser`
--

CREATE TABLE `adminuser` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `pwd` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `adminuser`
--

INSERT INTO `adminuser` (`id`, `name`, `pwd`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- 表的结构 `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `phonename` varchar(11) NOT NULL COMMENT '手机名称',
  `changp` varchar(50) NOT NULL COMMENT '手机内存',
  `color` varchar(20) NOT NULL COMMENT '手机颜色',
  `kucun` varchar(11) NOT NULL COMMENT '手机通信',
  `shuliang` text NOT NULL COMMENT '手机卡量',
  `jiage` varchar(11) NOT NULL COMMENT '手机价格',
  `tupian` varchar(100) NOT NULL COMMENT '手机图片',
  `weight` varchar(23) NOT NULL,
  `length` varchar(23) NOT NULL,
  `width` varchar(23) NOT NULL,
  `height` varchar(23) NOT NULL,
  `xh` varchar(30) NOT NULL,
  `hs` varchar(30) NOT NULL,
  `xs` varchar(30) NOT NULL,
  `sxtsk` varchar(30) NOT NULL,
  `wlzc` varchar(30) NOT NULL,
  `sim` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `goods`
--

INSERT INTO `goods` (`id`, `phonename`, `changp`, `color`, `kucun`, `shuliang`, `jiage`, `tupian`, `weight`, `length`, `width`, `height`, `xh`, `hs`, `xs`, `sxtsk`, `wlzc`, `sim`) VALUES
(12, 'OPPO R11', '128G', '粉红色', '4G', '双卡', '3888', './images/20181123002545huawei.jpe', '20g', '15cm', '10cm', '10cm', '高晓通', '四核', '前500，后2000', '2', '全网通', '联通'),
(11, '小米', '64G', '黄色', '4G', '200', '2000', './images/20181122203717huawei_blue.jpe', '16g', '15cm', '10cm', '10cm', '高晓通', '四核', '前500，后2000', '2', '双网通', '联通'),
(10, '三星', '64G', '黑色', '4G', '双卡', '1999', './images/20181122004002huawei_Bigblue3.jpe', '16g', '15cm', '10cm', '10cm', '高晓通', '双核', '前500，后2000', '2', '全网通', '移动'),
(9, '小米', '16G', '黑色 白色', '电信 网通', '164G', '5000', './images/20181121183414huawei_Bigblack.jpe', '0.9', '1.5', '0.8', '1.8', '324—4', '3', '80000', '2', '电信 移动 网通', 'MINU'),
(13, 'oppo', '128G', '绿色', '4G', '双卡', '2666', './images/20181123002612huawei_Biggreen.jpe', '18g', '15cm', '10cm', '10cm', '高晓通', '四核', '前500，后2000', '2', '全网通', '移动'),
(14, '华为p10', '128G', '蓝色', '4G', '双卡', '3888', './images/20181123002922huawei_blue.jpe', '18g', '15cm', '10cm', '10cm', '高晓通', '四核', '前500，后2000', '2', '全网通', '联通'),
(15, '小米M6', '64G', '蓝色', '4G', '双卡', '2000', './images/20181123003145xiaomiblue.jpg', '25', '15cm', '10cm', '10cm', '高晓通', '四核', '前500，后2000', '2', '全网通', '联通'),
(23, '小米4s', '128G', '黑色', '4G', '双卡', '2000', './images/20181123105356mixian_4.jpe', '25', '15cm', '10cm', '10cm', '高晓通', '双核', '前500，后2000', '2', '双网通', '联通'),
(17, '小米mini', '128G', '黑色', '4G', '双卡', '2000', './images/20181123003916mi.jpe', '25', '15cm', '10cm', '10cm', '高晓通', '四核', '前500，后2000', '2', '全网通', '移动'),
(22, '小米3s', '64G', '黑色', '4G', '双卡', '1666', './images/20181123105144mixian_3.jpe', '25', '15cm', '10cm', '10cm', '高晓通', '四核', '前500，后2000', '2', '全网通', '移动'),
(19, 'vivo X20', '128G', '黑色', '4G', '双卡', '2888', './images/20181123004208vivo.jpe', '25', '15cm', '10cm', '10cm', '高晓通', '四核', '前500，后2000', '2', '全网通', '联通'),
(21, '华为BigBlue', '128G', '蓝色', '4G', '双卡', '3999', './images/20181123101941huawei_Bigblue2.jpe', '25', '15cm', '10cm', '10cm', 'IPU', '四核', '前500，后2000', '2', '全网通', '移动'),
(24, 'HTC U11', '64G', '黑色', '4G', '单卡', '1555', './images/20181123105510mixian_2.jpe', '25', '15cm', '10cm', '10cm', 'IPU', '双核', '前500，后2000', '2', '全网通', '电信、联通、移动'),
(25, 'IphoneX', '128G', '红色', '4G', '单卡', '5999', './images/20181123110503iphonex.jpg', '25', '15cm', '10cm', '10cm', 'IPU', '四核', '前500，后2000', '2', '全网通', '电信、联通、移动'),
(26, '360N7', '64G', '黑色', '4G', '双卡', '1888', './images/20181123110616360n7.jpg', '25', '15cm', '10cm', '10cm', '高晓通', '四核', '前500，后2000', '2', '全网通', '电信、移动、联通'),
(27, '锤子pro2', '64G', '白色', '4G', '双卡', '1388', './images/20181123110711chuizipro2.jpg', '25', '15cm', '10cm', '10cm', '高晓通', '四核', '前500，后2000', '2', '全网通', '移动'),
(28, 'SHARP AQUOS', '64G', '白色', '4G', '单卡', '999', './images/20181123110804czr1.jpg', '25', '15cm', '10cm', '10cm', '高晓通', '双核', '前500，后2000', '2', '全网通', '电信、联通、移动');

-- --------------------------------------------------------

--
-- 表的结构 `sellout`
--

CREATE TABLE `sellout` (
  `id` int(11) NOT NULL COMMENT '商品号码',
  `name` varchar(100) NOT NULL COMMENT '用户名',
  `site` varchar(100) NOT NULL COMMENT '地址',
  `phonenumber` int(20) NOT NULL COMMENT '电话号码',
  `number` int(20) NOT NULL COMMENT '购买数量',
  `phonename` varchar(100) NOT NULL COMMENT '手机名称',
  `color` varchar(100) NOT NULL COMMENT '手机颜色',
  `price` varchar(100) NOT NULL COMMENT '手机价格'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `sellout`
--

INSERT INTO `sellout` (`id`, `name`, `site`, `phonenumber`, `number`, `phonename`, `color`, `price`) VALUES
(1, '华为', '松田学院', 10086, 3, 'P20', '白', '6000'),
(10, '', '广州大学松田学院', 10086, 6, '', '白色', '5000'),
(11, '', '3', 4, 1, '', '黄色', '2000'),
(12, '2', '3', 4, 1, 'vivo X20', '黑色', '2888'),
(13, '5', '6', 7, 3, '华为p10', '蓝色', '3888');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `name`, `pwd`) VALUES
(1, 'admin', '123'),
(2, 'asd', '456'),
(3, '456', '789'),
(4, '555', '666'),
(5, '777', '888');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminuser`
--
ALTER TABLE `adminuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellout`
--
ALTER TABLE `sellout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `adminuser`
--
ALTER TABLE `adminuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- 使用表AUTO_INCREMENT `sellout`
--
ALTER TABLE `sellout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '商品号码', AUTO_INCREMENT=14;
--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
