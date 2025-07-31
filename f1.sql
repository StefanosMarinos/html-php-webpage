-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Εξυπηρετητής: 127.0.0.1
-- Χρόνος δημιουργίας: 04 Ιαν 2025 στις 13:50:15
-- Έκδοση διακομιστή: 10.4.32-MariaDB
-- Έκδοση PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `personal`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `f1`
--

CREATE TABLE `f1` (
  `id` int(11) NOT NULL,
  `onoma` text NOT NULL,
  `eponymo` text NOT NULL,
  `fylo` varchar(10) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `category` text DEFAULT NULL,
  `color` text DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Άδειασμα δεδομένων του πίνακα `f1`
--

INSERT INTO `f1` (`id`, `onoma`, `eponymo`, `fylo`, `birthday`, `category`, `color`, `quantity`, `email`) VALUES
(45, 'στεφ', 'μαρ', 'male', '2006-02-10', 'clothing', 'red', 90, 'despotov@hotmail.com'),
(46, 'Δεσποινα', 'Καθ', 'female', '2001-03-12', 'clothing', 'μπλε', 3, 'sotstefb@gmail.com'),
(47, 'Γιαννης', 'καθα', 'male', '2004-03-24', 'clothing', 'μωβ', 15, 'katharosporis.giannis@gmail.com'),
(48, 'Σονια', 'Καρκα', 'male', '2000-02-10', 'shoes', 'κοκκινο', 2, 'sonia@gmail.com');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `f1`
--
ALTER TABLE `f1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `f1`
--
ALTER TABLE `f1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
