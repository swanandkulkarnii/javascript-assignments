-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 27, 2021 at 08:48 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `shares`
--

CREATE TABLE `shares` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `body` text COLLATE utf8mb4_general_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shares`
--

INSERT INTO `shares` (`id`, `user_id`, `title`, `body`, `link`, `create_date`) VALUES
(1, 1, 'PHP Variables', 'A variable can have a short name (like x and y) or a more descriptive name (age, carname, total_volume).\r\n\r\nRules for PHP variables:\r\n\r\nA variable starts with the $ sign, followed by the name of the variable\r\nA variable name must start with a letter or the underscore character\r\nA variable name cannot start with a number\r\nA variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )\r\nVariable names are case-sensitive ($age and $AGE are two different variables)', 'https://www.w3schools.com/php/php_variables.asp', '2021-09-27 13:31:31'),
(2, 1, 'PHP Strings', 'A string is a sequence of characters, like \"Hello world!\".\r\nstrlen() - Return the Length of a String\r\nstr_word_count() - Count Words in a String\r\nstrrev() - Reverse a String\r\nstrpos() - Search For a Text Within a String', 'https://www.w3schools.com/php/php_string.asp', '2021-09-27 13:31:31'),
(3, 1, 'PHP Numbers', 'One thing to notice about PHP is that it provides automatic data type conversion.\r\n\r\nSo, if you assign an integer value to a variable, the type of that variable will automatically be an integer. Then, if you assign a string to the same variable, the type will change to a string.\r\n\r\nThis automatic conversion can sometimes break your code.', 'https://www.w3schools.com/php/php_numbers.asp', '2021-09-27 13:34:01'),
(4, 1, 'PHP Math', 'PHP has a set of math functions that allows you to perform mathematical tasks on numbers.\r\nPHP min() and max() Functions\r\nThe min() and max() functions can be used to find the lowest or highest value in a list of arguments\r\nPHP round() Function\r\nThe round() function rounds a floating-point number to its nearest integer', 'https://www.w3schools.com/php/php_math.asp', '2021-09-27 13:34:01'),
(5, 1, 'PHP Constants', 'Constants are like variables except that once they are defined they cannot be changed or undefined.\r\nCreate a PHP Constant\r\nTo create a constant, use the define() function.\r\n\r\nSyntax\r\ndefine(name, value, case-insensitive)\r\nParameters:\r\n\r\nname: Specifies the name of the constant\r\nvalue: Specifies the value of the constant\r\ncase-insensitive: Specifies whether the constant name should be case-insensitive. Default is false.', 'https://www.w3schools.com/php/php_constants.asp', '2021-09-27 13:47:53'),
(6, 1, 'PHP Arrays', 'What is an Array?\r\nAn array is a special variable, which can hold more than one value at a time\r\nIn PHP, the array() function is used to create an array:\r\n\r\narray();\r\nIn PHP, there are three types of arrays:\r\n\r\nIndexed arrays - Arrays with a numeric index\r\nAssociative arrays - Arrays with named keys\r\nMultidimensional arrays - Arrays containing one or more arrays.', 'w3schools.com/php/php_arrays.asp', '2021-09-27 14:01:28'),
(7, 2, 'PHP Global Variables - Superglobals', 'Some predefined variables in PHP are &#34;superglobals&#34;, which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.\r\n\r\nThe PHP superglobal variables are:\r\n\r\n$GLOBALS\r\n$_SERVER\r\n$_REQUEST\r\n$_POST\r\n$_GET\r\n$_FILES\r\n$_ENV\r\n$_COOKIE\r\n$_SESSION', 'https://www.w3schools.com/php/php_superglobals.asp', '2021-09-27 14:09:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `register_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `register_date`) VALUES
(1, 'Swanand Kulkarni', 'swanandkulkarni@gmail.com', '93be6d45bf9dfe98972d86a1a4637834', '2021-09-27 13:45:48'),
(2, 'Chintamani Kulkarni', 'cmk@gmail.com', '1cefb1b48af551dfe907f43826de0f37', '2021-09-27 14:00:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shares`
--
ALTER TABLE `shares`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shares`
--
ALTER TABLE `shares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
