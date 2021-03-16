-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 20, 2021 at 08:44 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_festival`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `author` varchar(40) NOT NULL,
  `img` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `description` text NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `name`, `author`, `img`, `religion`, `price`, `status`, `description`, `created`) VALUES
(1, 'Let\'s know festival of India', 'abc', 'lets_know_festivals_of_india_idg829.jpg', '', '17.00', 1, 'From the Hindu collection in our Books category, this is Let\'s know Festivals of India.', '0000-00-00 00:00:00'),
(2, 'Christian Festivals (Celebrate) Library Binding', 'xyz', 'chistian_Festval_Thompson.jpg', '', '17.88', 1, '', '0000-00-00 00:00:00'),
(3, 'The Jewish Festivals', '', '9780805209372.jpg', '', '18.00', 1, 'Why is the Jewish New Year designated on the Jewish calendar as the first day of the seventh month, and not of the first month? Why do women cover their eyes when reciting the blessing over the Sabbath candles? How did the Seder originate? Does the Book of Esther, read on Purim, mirror any real historical events?\r\n\r\nLong considered a classic, The Jewish Festivals provides a rich and charming account of the origins, development, and symbolism of the Jewish holidays, and of the diverse rituals, prayers, ceremonial objects, and special foods that have been used throughout history and around the world to celebrate them. Drawing upon a wealth of knowledge of Jewish folkways and customs, Hayyim Schauss shows how these holidays evolved in meaning and importance, depending on the contemporary needs of those who observed them. Written with passion and warmth, this book will infuse your own experience of the holidays with extra meaning and delight.\r\n\r\n', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `festival`
--

CREATE TABLE `festival` (
  `fes_id` int(11) NOT NULL,
  `title` varchar(70) NOT NULL,
  `religion_id` int(11) NOT NULL DEFAULT 1,
  `article` text NOT NULL,
  `description` text NOT NULL,
  `top_image` varchar(60) NOT NULL,
  `bot_image` varchar(50) NOT NULL,
  `author` varchar(60) NOT NULL,
  `created_at` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `festival`
--

INSERT INTO `festival` (`fes_id`, `title`, `religion_id`, `article`, `description`, `top_image`, `bot_image`, `author`, `created_at`, `status`) VALUES
(1, 'Lễ hội Halloween là ngày nào, nguồn gốc, ý nghĩa của Halloween?', 1, 'Lễ hội Halloween hay lễ hội hóa trang diễn ra vào ngày 31/10 hàng năm. Đối với nhiều nước trên thế giới, Halloween rất được ưa chuộng với nhiều ý nghĩa về giáo dục, nhân văn phía sau những hình ảnh hóa trang ma quỷ. Xu hướng ngày lễ Halloween đến với Việt Nam cũng từ lâu và được giới trẻ rất ưa thích. Cùng khám phá tất tần tật trong bài viết này nhé!\r\n\r\nTại sao Halloween diễn ra vào ngày 31/10?\r\nLễ hội Halloween bắt nguồn từ ngày lễ “The Celtic Festival of Samhain” của dân tộc Celts sống cách đây khoảng 2.000 năm ở phần đất nay thuộc lãnh thổ nước Anh và phía Bắc nước Pháp.\r\n\r\nVào đêm ngày 31/10, buổi lễ “The Celtic Festival of Samhain” được người Celts tổ chức để tưởng nhớ và vinh danh Thánh Samhain, vị chúa tể cai quản những linh hồn người chết. Họ tin rằng Thánh Samhain cho phép các linh hồn được trở về dương thế thăm gia đình và ăn tết vào đêm 31/10 này.\r\n\r\nCuối tháng 10 cũng là dịp để người Celts dâng cúng lễ vật cảm ơn những gì thiên nhiên đã ban tặng cho họ, cầu xin cho một năm mới thịnh vượng và mùa màng bội thu. Vào lễ vinh danh Thánh Samhain, người Celts thường đốt những đống lửa lớn trên đồi để tỏ lòng tôn kính tới các vị thần và xua đuổi tà ma.', 'Lễ hội Halloween hay lễ hội hóa trang diễn ra vào ngày 31/10 hàng năm.', 'halloween1.jpg', 'y-nghia-ngay-le-halloween_1602727204.jpg', 'abc', '2021-02-20 10:02:25', 1),
(2, 'Lễ  Phục Sinh', 3, 'Lễ Phục Sinh thường được xem là một trong những ngày lễ quan trọng nhất trong năm của người theo Kitô giáo. Thường diễn ra vào tháng 3 hoặc tháng 4 mỗi năm để tưởng niệm sự kiện chết và Phục sinh của Giê-su từ cõi chết sau khi bị đóng đinh trên thập tự giá. Được người Kitô hữu tin là đã xảy ra vào khoảng năm 30 đến năm 33.', 'Lễ Phục Sinh thường được xem là một trong những ngày lễ quan trọng nhất trong năm của người theo Kitô giáo. Thường diễn ra vào tháng 3 hoặc tháng 4 mỗi năm để tưởng niệm sự kiện chết và Phục sinh của Giê-su từ cõi chết sau khi bị đóng đinh trên thập tự giá. Được người Kitô hữu tin là đã xảy ra vào khoảng năm 30 đến năm 33.', '05.jpg', '', '', '2021-02-20 11:03:22', 1),
(3, 'Lễ  Phục Sinh', 2, 'Lễ Phục Sinh thường được xem là một trong những ngày lễ quan trọng nhất trong năm của người theo Kitô giáo. Thường diễn ra vào tháng 3 hoặc tháng 4 mỗi năm để tưởng niệm sự kiện chết và Phục sinh của Giê-su từ cõi chết sau khi bị đóng đinh trên thập tự giá. Được người Kitô hữu tin là đã xảy ra vào khoảng năm 30 đến năm 33.', 'Lễ Phục Sinh thường được xem là một trong những ngày lễ quan trọng nhất trong năm của người theo Kitô giáo. Thường diễn ra vào tháng 3 hoặc tháng 4 mỗi năm để tưởng niệm sự kiện chết và Phục sinh của Giê-su từ cõi chết sau khi bị đóng đinh trên thập tự giá. Được người Kitô hữu tin là đã xảy ra vào khoảng năm 30 đến năm 33.', '05.jpg', '', '', '2021-02-20 11:03:22', 1),
(4, 'Lễ  Phục Sinh', 3, 'Lễ Phục Sinh thường được xem là một trong những ngày lễ quan trọng nhất trong năm của người theo Kitô giáo. Thường diễn ra vào tháng 3 hoặc tháng 4 mỗi năm để tưởng niệm sự kiện chết và Phục sinh của Giê-su từ cõi chết sau khi bị đóng đinh trên thập tự giá. Được người Kitô hữu tin là đã xảy ra vào khoảng năm 30 đến năm 33.', 'Lễ Phục Sinh thường được xem là một trong những ngày lễ quan trọng nhất trong năm của người theo Kitô giáo. Thường diễn ra vào tháng 3 hoặc tháng 4 mỗi năm để tưởng niệm sự kiện chết và Phục sinh của Giê-su từ cõi chết sau khi bị đóng đinh trên thập tự giá. Được người Kitô hữu tin là đã xảy ra vào khoảng năm 30 đến năm 33.', '05.jpg', '', '', '2021-02-20 11:03:22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `order_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `quantity`
--

CREATE TABLE `quantity` (
  `book_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quantity`
--

INSERT INTO `quantity` (`book_id`, `quantity`) VALUES
(1, 10),
(2, 12),
(3, 10);

-- --------------------------------------------------------

--
-- Table structure for table `religion`
--

CREATE TABLE `religion` (
  `id` int(11) NOT NULL,
  `religion_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `religion`
--

INSERT INTO `religion` (`id`, `religion_name`) VALUES
(1, 'Phật Giáo'),
(2, 'Hindu Giáo'),
(3, 'Kitô Giáo'),
(4, 'Do Thái Giáo');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `address`, `email`, `phone`, `status`) VALUES
(1, 'tuan', 'abcd', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', 1),
(3, 'TUAN DANG MIN', 'tuandang_198', '202cb962ac59075b964b07152d234b70', '115 Nguyen Khuyen', 'tuan@gmail.com', '0968916918', 1),
(4, 'abcd', 'tuandang', 'e10adc3949ba59abbe56e057f20f883e', 'asdasd', '##@gmail.com', '658965', 1),
(6, '', 'tuandang_1989', '202cb962ac59075b964b07152d234b70', '', '', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `festival`
--
ALTER TABLE `festival`
  ADD PRIMARY KEY (`fes_id`),
  ADD KEY `fk_religion` (`religion_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `fk_oder_user_id` (`user_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD KEY `fk_order_id` (`order_id`),
  ADD KEY `fk_book_id` (`book_id`);

--
-- Indexes for table `quantity`
--
ALTER TABLE `quantity`
  ADD KEY `fk_quantity_book_id` (`book_id`);

--
-- Indexes for table `religion`
--
ALTER TABLE `religion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `festival`
--
ALTER TABLE `festival`
  MODIFY `fes_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `religion`
--
ALTER TABLE `religion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `festival`
--
ALTER TABLE `festival`
  ADD CONSTRAINT `fk_religion` FOREIGN KEY (`religion_id`) REFERENCES `religion` (`id`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `fk_oder_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `fk_book_id` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_order_id` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`) ON UPDATE CASCADE;

--
-- Constraints for table `quantity`
--
ALTER TABLE `quantity`
  ADD CONSTRAINT `fk_quantity_book_id` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
