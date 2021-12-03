-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2015 at 06:01 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT = @@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS = @@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION = @@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nhahang`
--
CREATE DATABASE IF NOT EXISTS `nhahang` DEFAULT CHARACTER SET utf8 COLLATE utf8_vietnamese_ci;
USE `nhahang`;

-- --------------------------------------------------------

--
-- Table structure for table `gopy`
--

CREATE TABLE IF NOT EXISTS `gopy`
(
    `id`       int(10)       NOT NULL AUTO_INCREMENT,
    `Time`     varchar(30)   NOT NULL,
    `username` varchar(15)   NOT NULL,
    `gopy`     varchar(1000) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  AUTO_INCREMENT = 11;

--
-- Dumping data for table `gopy`
--

INSERT INTO `gopy` (`id`, `Time`, `username`, `gopy`)
VALUES (9, '09/05/2015 08:16:04', 'ban1', 'abc'),
       (10, '09/05/2015 08:19:26', 'ban1', 'zyz');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE IF NOT EXISTS `hoadon`
(
    `User`  varchar(30) NOT NULL,
    `Name`  varchar(30) NOT NULL,
    `Price` int(10)     NOT NULL,
    `Qty`   int(3)      NOT NULL,
    `Money` int(10)     NOT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4 ;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu`
(
    `STT`         int(3)      NOT NULL AUTO_INCREMENT,
    `Name`        varchar(255) NOT NULL,
    `Description` text    NOT NULL,
    `Value`       int(2)      NOT NULL,
    
    PRIMARY KEY (`STT`)
) ENGINE = InnoDB
  DEFAULT CHARSET =utf8mb4
  AUTO_INCREMENT = 23;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`STT`, `Name`, `Description`, `Value`)
VALUES (2, 'Chân gà rút xương',
        'Những hương liệu dung dị nhất trộn lẫn với nhau tạo nên sự hài hòa khó cưỡng: vị chua ngọt của nước sốt được pha đủ độ, cái cay cay tê tê của sả ớt, độ dai giòn sần sật của từng miếng chân gà đã được trộn ướp cầu kì, như ẩn như hiện, như đọng lại mãi nơi đầu lưỡi.',  1),
       (3, 'Salad cá hồi NAUY', 'Một trong những yếu tố làm nên sự hấp dẫn cho món ăn này chính là hương vị đặc trưng khó cưỡng của húng quế. Kết hợp cùng nguyên liệu chính là cá hồi cùng ớt chuông, hành tây, cà chua không chỉ giúp kích thích khẩu vị mà còn khiến món ăn nhiều màu sắc bắt mắt hơn. ',  1),
       (4, 'Bò xào lúc lắc ', 'Bò lúc lắc là kết tinh của sự giao thoa giữa ẩm thực Việt Nam và nền ẩm thực trứ danh Pháp. Ngày nay, nó xuất hiện trong thực đơn của hầu hết các nhà hàng trên khắp hành tinh trong đó có VIệt Nam.', 1),
       (8, 'Lẩu gà nấm tươi','Mang cái ngọt thơm của thịt gà, ngọt thanh của nấm tươi, chứa đựng cái mộc mạc, dân dã của người Việt, lại trọn cái tinh túy của món ngon.',1) ,
       (10, 'Mực nướng muối ớt ', 'Mực tươi nướng muối ớt với cách chế biến không quá cầu kỳ, hương vị ngọt mặn chua cay hòa quyện cùng độ dai dai của mực, bùng lên mùi thơm quyến rũ kích thích mọi giác quan của người thưởng thức.', 1),
       (11, 'Ba chỉ một nắng chấm sốt thái  ', 'Miếng thịt ba rọi chiên giòn được rưới qua nước mắm chua cay đặc trưng của Thái. Vị giòn của miếng thịt hòa cùng vị chua cay mằn mặn của nước mắm, sẽ khiến bạn đã ăn thử một lần thì không bao giờ quên được hương vị đó!ức.', 1),
       (12, 'Mực xào cần tỏi', 'Món xào được nhiều người yêu thích hơn cả đặc biệt là món mực xào cần tỏi tây. Món ăn này hấp dẫn, lôi cuốn tất cả mọi người kể cả nam lẫn nữ, người lớn đến trẻ nhỏ ai ăn cũng có thể nghiền.', 1),
       (13, 'Mực trứng hấp lá nốt ', 'Mực hấp lá lốt không chỉ là món ăn ngon có cách làm đơn giản, mà còn là sự kết hợp nguyên liệu cực kì tốt cho sức khỏe. Trong đó, mực là loài hải sản chứa nhiều khoáng chất giúp hỗ trợ tích cực cho sự phát triển hệ xương, hệ miễn dịch,...', 1);


-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE IF NOT EXISTS `offer`
(
    `Time`  varchar(30) NOT NULL,
    `User`  text        NOT NULL,
    `Name`  varchar(30) NOT NULL,
    `Price` int(4)      NOT NULL,
    `Qty`   int(3)      NOT NULL,
    `Money` int(10)     NOT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user`
(
    `name`  varchar(255) NOT NULL,
    `pass`  char(50)     NOT NULL,
    `level` int(2)       NOT NULL,
    PRIMARY KEY (`name`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `pass`, `level`)
VALUES ('admin', 'admin', 1),
       ('ban1', 'ban1', 2),
       ('ban2', 'ban2', 2),
       ('ban3', 'ban3', 2),
       ('ban4', 'ban4', 2);

/*!40101 SET CHARACTER_SET_CLIENT = @OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS = @OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION = @OLD_COLLATION_CONNECTION */;
