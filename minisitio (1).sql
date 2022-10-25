-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2022 at 07:54 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minisitio`
--

-- --------------------------------------------------------

--
-- Table structure for table `datos_paciente`
--
-- Creation: Oct 25, 2022 at 05:42 AM
-- Last update: Oct 25, 2022 at 05:08 PM
--

CREATE TABLE `datos_paciente` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido_p` varchar(255) DEFAULT NULL,
  `curp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datos_paciente`
--

INSERT INTO `datos_paciente` (`id`, `nombre`, `apellido_p`, `curp`) VALUES
(5, 'Hermenegildo', 'Perez', 'WEEEMMVYESHLKVPW8EV'),
(6, 'Hermenegildo', 'Perez', '[izuqmv|w(Itwv?w');

-- --------------------------------------------------------

--
-- Table structure for table `paciente`
--
-- Creation: Oct 13, 2022 at 04:16 AM
--

CREATE TABLE `paciente` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `apellido_p` varchar(200) DEFAULT NULL,
  `antecedentes` varchar(500) DEFAULT NULL,
  `adiccion` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paciente`
--

INSERT INTO `paciente` (`id`, `nombre`, `apellido_p`, `antecedentes`, `adiccion`) VALUES
(22, 'pepe', 'her', 'rlZGCq4JDyBbQb4KYpDKHctcELW1yUEOA0RZAEQlCDsEXWhupmToNhAF5G7FYgzUBE/Nc3CuWpDvM6bi+6fa/46a8jdDziLN28FL5JogVm8ZA9q+3NDLXRXpXkNZ2nYmFS04mwwIgNQdTaVPi9wyJc+uFj05akbsR+p3wudeNXgH7RDNaQX7LJXrqlOml3IZ+xnE43jH4HLctyvk/7Ji3E0uc0tIxEUOHWSRjjfS08VnH49Wdad26ckI82LnFF/3011g9vf8115X/4SMopMkfHCyXr4iqI+03xDuSsDNmDT/4cKvuRfIWiJd5Y7yysPUv8xyFZfxx+xFB6u+Rf3w3g==', 'UHcjVeqshG2y4xp6i/9VQhOK8Ns39ncIuSbqusD3BhUHHWhM3qOX+TqtgcrTQAvc6KTpa64JegH4hiRfC/S0fKNoHNLp6K/WAEhaDCrVFtOYXndDRG1avMRi1Q5hbb7KjncpflcLpsZmsn2FeAyPA+7xQ8Q11ActJVu52IhhqLP7gG8aL5+A4YA8hPU3euEKsdlu+xUgh62vjyr7Eju2h3RKuHSb3cnDExf9H5gO0XRBw2k1HjR7CsPUVdDeHNty1eekMUhXbYLlGA0pCfHOXH4R39aDDU1bt2JoTpj2yGDTsiLS8vg+9V1zydMrZMi3eiU6F6SESVLsatkCDoKNMw=='),
(23, 'Zusana', 'Horia', 'WBeFeW7t4lkCOPmfwT/e5LASo4rZ4VQIVgCEWHho+ivBsI9zcx3pRHJjBKri6rmwiHMgiY1OPwTGk+n/DpLc41xvyhLjR8eNjT5mJHZbC5e5KjfYtKg8DKLuheG4MCtxFtvznHo7Jd1aNNfX+ddew0zsS6qS87d8wkHKYgcL4VJFzBE37JEr3vfvyi370ov+q1W0eXtHH48VhS1pviePIRZHYH92i4XfnxElU0LZgUgzmnXkhLGLHlqR5CWifWmRWzK3DaTBo6AJGyzYzVdAPjv8ENNm3NRk3x/CETQBvjDCO3EFgDpTayXe+qN4xMx6Yz8/OGFdshuiAxLOPBkVEA==', 'Fp+wH0Y3Sffb1pR0tCz1kPM6/hd5BFRKGkZkQD1nFSSAdPWxNGKjtMwpEnZFTv7iJpN0n+PqmqJp4s28ltW3tf5q6Oziy3tJbve668ITcDVAVp07jfQhk6erej1qffRYRyo78+SxYsJOrlFNutArRZOWD423xzI1DPrK6Tx9SWaVKr43Icfa4V/c3GRE+7CwcquNbv/x819PvUi5mjV7jpyMeSJpJtMAMajYs883s/xCWNoiFEosg+itgFg4e0x/wcrsVhYjInqnNwDQ/4zFykMQrtWdPaVjLQElZeIjOoURJIs7+KfDl/FswOAlDOf8XdoJzLt03KclyuLF3RHWGQ=='),
(25, 'Martha', 'García', 'Uxny526l6R1OFr9cRk3xliCbHQ7hTJHvyLtrUkVSqlT1KY/fy5PYj1iz7J7hjEQhVwIvf2Q77k06JJk5qy1cnuME6uEoGfOW/cFsMZPi+eO9x+HV2keSoeDT5cnn/8KlLCMMGYTYfByV/LFLtPbSX120OGjBm196Wl0vlJceLO0Fpalkbh95pj3iTiNFq+XFaFVQyk02fbCtoAWndEBhZyIntpZ/cPUYL1QtIOTGbBe+F3h/Sk5Zzwu7Ro21tgcL/0AfwTl+dW3mg077rU8FFypYxVOPHnvE4ggMRIuZ7b5XHmrSlDjhQtd+3HmWIC7KWderSzaESo6PX7qzehQrSQ==', 'NRu41sM5RE60AG5zXYWkhzpeLqga4Nn1J0EIAUq+zeIowacRh9pyhzYftgMkmuAWFI3XBOuAq1gUM6NXwQ1rYhAlzl09FdF/v0nKR46aukoaasAR/MBxIk7JJBKWNMx21OMQy3/j9Bd91gL+B9yRQMr/KXa5/fFMcI/57iiqB/by/498GkeBymW0p9FH0Orl0bIBdhqVo0ykWX0OVQVXs4zVi623VpWwsmqWKF+nAEUjIhQxM9OJEu9BncauVsvxxiFxu91fCrRoKkSN9nEw7BV404CzyZVnUqMoIjDi+W97kqEAqs/ZVDBeRdRolunblAlpXbncFrHjl2hFuVmyAw==');

-- --------------------------------------------------------

--
-- Table structure for table `pacientes_hash`
--
-- Creation: Oct 17, 2022 at 07:18 AM
--

CREATE TABLE `pacientes_hash` (
  `id` bigint(20) NOT NULL,
  `nombre_p` varchar(200) DEFAULT NULL,
  `apellido_paterno` varchar(200) DEFAULT NULL,
  `curp` varchar(200) DEFAULT NULL,
  `antecedentes` varchar(200) DEFAULT NULL,
  `adicciones` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pacientes_hash`
--

INSERT INTO `pacientes_hash` (`id`, `nombre_p`, `apellido_paterno`, `curp`, `antecedentes`, `adicciones`) VALUES
(4, 'Hermenegildo', 'Perez', '$2y$11$dThO2EobYXYkDpa4hcMw1OsxBnWG1Wt4AERXMt/9PyLKCh5hXKudW', 'd840c18b130d4c24b9db6ec7daaf6d25', '006ad3ade2bc46dafe7ea163f5ce8e4bb022388e'),
(5, 'Oscar', 'Sanchez', '$2y$11$aX27rqTDSqIm7zvUEFJcL.dljaovQ2Q43HyFPUfpeBUkpM.zQK8FO', '94a477b407328a610ee0ae9a0053c87f', '1377287eb3fbb16d1aff3d8475b49be8e751c02a');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--
-- Creation: Oct 13, 2022 at 07:58 AM
--

CREATE TABLE `usuarios` (
  `id` bigint(20) NOT NULL,
  `usuario` varchar(500) NOT NULL,
  `correo` varchar(500) NOT NULL,
  `contraseña` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `correo`, `contraseña`) VALUES
(1, 'Mario Bros', 'usuario@gmail.com', 'OXU0QlZYbUJwbmdWODVLM0xwSENqZz09'),
(2, 'Luigui', 'luigui123@gmail.com', 'K25TOGRTOFFkMFNNaVFZSXFES0xRMEgxRlhZRmVHWk1GZU9hS3VvZVdpWT0='),
(3, 'Omar', 'omar123@gmail.com', 'OVlWS3M4Q3hUVDBDdnY2d2duL2d5QT09'),
(4, 'José', 'jose712@gmail.com', 'U0tRdEZxZnZ2dGt0RzU3M2tORldpanhlam9lN0RKdHkwSWhSWlpuWGFhVT0=');

-- --------------------------------------------------------

--
-- Table structure for table `usuario_hash`
--
-- Creation: Oct 16, 2022 at 08:09 PM
--

CREATE TABLE `usuario_hash` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `correo` varchar(200) DEFAULT NULL,
  `contraseña` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuario_hash`
--

INSERT INTO `usuario_hash` (`id`, `nombre`, `correo`, `contraseña`) VALUES
(11, 'Usuario1', '$2y$10$MUUvbE/STqXok3vobhsVOO/zoj6EY.CrAQXr/CZMiN/HP9W18i1XO', '$2y$10$LBQuNXQNq8CVOLWD9XqX1.aaniab91BIt5BAeVAHMHlBcfoVJKFwy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datos_paciente`
--
ALTER TABLE `datos_paciente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pacientes_hash`
--
ALTER TABLE `pacientes_hash`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario_hash`
--
ALTER TABLE `usuario_hash`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datos_paciente`
--
ALTER TABLE `datos_paciente`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `pacientes_hash`
--
ALTER TABLE `pacientes_hash`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usuario_hash`
--
ALTER TABLE `usuario_hash`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
