-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05-Jul-2016 às 17:34
-- Versão do servidor: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `celest`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE IF NOT EXISTS `alunos` (
  `matr` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sexo` char(1) NOT NULL,
  `dn` date NOT NULL,
  `resp` varchar(45) NOT NULL,
  `end` varchar(200) NOT NULL,
  `fone` varchar(20) NOT NULL,
  `idioma` char(1) NOT NULL,
  `login_id` int(11) NOT NULL,
  `turmas_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`matr`, `nome`, `sexo`, `dn`, `resp`, `end`, `fone`, `idioma`, `login_id`, `turmas_id`) VALUES
(1, 'Joana Silva ', 'F', '1995-05-07', 'Gesonita Silva', 'Qs 08 Sul casa 9 ', '061 98574 1092', 'I', 3, 2),
(2, 'MaurÃ­cio de Sousa Alves', 'M', '1998-11-19', 'FelÃ­cia Alves', 'Av. central cj 5 cs 10', '061 3334 2004', 'E', 7, 3),
(3, 'Bianca Lima Duarte', 'F', '1998-10-29', 'Dayene Lima Duarte', 'Quadra 8 conj 9 casa 10', '061 3334 2016', 'I', 9, 1),
(4, 'Lucas de Sousa Alves', 'M', '1998-07-10', 'Martha Alves', 'Av.Central bloco B cs 37', '061 99936 4627', 'I', 10, 1),
(5, 'Larissa Destefano da Silva', 'F', '1998-03-10', 'GregÃ³rio Destefano', 'Qs 08 Sul casa 16', '061 98571 1139', 'I', 11, 1),
(6, 'Gregory MoisÃ©s Moura da Costa ', 'M', '1998-03-10', 'Laura Moura da Costa', 'QnJ 05 cj D Sul', '061 3334 2008', 'I', 12, 4),
(7, 'Adelaide Amaral', 'F', '1999-03-18', 'Cristopher Amaral', 'Qs 4 Norte bloco C lt 17', '061 98888 1139', 'I', 13, 4),
(8, 'ChristÃ³ferson Izoton Kanheski', 'M', '1998-07-15', ' Luis Izoton  Kanheski', 'Quadra 805 conj 06 casa 27', '6195919611', 'I', 14, 4),
(9, 'Maria Isabel Moura', 'F', '1998-03-10', 'Mauro Moura', 'Qs 4 Norte bloco A  lt 20', '061 98591 2239', 'E', 15, 3),
(10, 'Bruno MÃ¡rio Couto', 'M', '1998-10-05', 'Rafael Couto', 'QnJ 10 cj 15 Sul lt 4', '061 99936 4646', 'E', 16, 3),
(11, 'JÃºlio Cesar Lima Duarte', 'M', '1998-10-29', 'Dayene Lima Duarte', 'Quadra 8 conj 9 casa 10', '061 3334 2016', 'I', 17, 2),
(12, 'Gabriela Linhares', 'F', '1999-06-18', 'NÃ­kolas Linhares', 'Rua da Oliveiras Lt 25 sul', '061 3434 2616', 'I', 18, 2),
(13, 'Fabiana Machado', 'F', '1999-06-25', 'Kleber Machado', 'Qs 4 Norte bloco A  lt 27', '061 3334 2025', 'E', 19, 3),
(14, 'Kalebe Morais', 'M', '1998-10-29', 'VinÃ­cius de Morais', 'Rua da Oliveiras Lt 14 Norte', '061 99936 4530', 'E', 20, 3),
(15, 'Gleidson Soares', 'M', '1997-12-30', 'Johana Soares', 'qd 7 Av. central lt 32', '061 99936 5050', 'I', 21, 2),
(16, 'JosÃ©  Filho Silva', 'M', '0198-04-26', 'Laurinda Silva', 'qd 10 qs3 20 Rua Rosario', '61 3786 3440', 'I', 22, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `tipo` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `nome`, `usuario`, `senha`, `tipo`) VALUES
(2, 'Mariana Pereira', 'mariana@prof', '123456', 2),
(3, 'Joana Silva ', 'joanasilva@alun', '654321', 3),
(4, 'AdÃ©lia Lima ', 'adelialima@secret', '123456', 1),
(5, 'LetÃ­cia Gomes', 'leticiagomes@secret', '123456', 1),
(6, 'LourenÃ§o GonÃ§alves', 'lourencogoncalv@prof', '123456', 2),
(7, 'MaurÃ­cio de Sousa ', 'mauriciosa@alun', '123456', 3),
(8, 'Maria Florencio', 'mariaflor@prof', '123456', 2),
(9, 'Bianca Lima', 'biancalima@alun', '123456', 3),
(10, 'Lucas Alves', 'lucassalves@alun', '123456', 3),
(11, 'Larissa Destefano', 'larissadestefan@alun', '123456', 3),
(12, 'Gregory MoisÃ©s', 'gregorymoises@alun', '123456', 3),
(13, 'Adelaide Amaral', 'adelaideamaral@alun', '123456', 3),
(14, 'ChristÃ³ferson Izoton', 'christoferson@alun', '123456', 3),
(15, 'Maria Isabel Moura', 'mariaisabelmour@alun', '123456', 3),
(16, 'Bruno Couto', 'brunocouto@alun', '654321', 3),
(17, 'JÃºlio Cesar Duarte', 'juliocesarduart@alun', '654321', 3),
(18, 'Gabriela Linhares', 'gabrielalinhar@alun', '654321', 3),
(19, 'Fabiana Machado', 'fabianamachado@alun', '123456', 3),
(20, 'Kalebe Morais', 'kalebemorais@alun', '123456', 3),
(21, 'Gleidson Soares', 'gleidsonsoares@alun', '123456', 3),
(22, 'JosÃ©  Filho', 'josefilho@alun', '123456', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `notas`
--

CREATE TABLE IF NOT EXISTS `notas` (
  `idnotas` int(11) NOT NULL,
  `bimestre1` double NOT NULL,
  `bimestre2` double NOT NULL,
  `media` double NOT NULL,
  `recup` double NOT NULL,
  `alunos_matr` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `notas`
--

INSERT INTO `notas` (`idnotas`, `bimestre1`, `bimestre2`, `media`, `recup`, `alunos_matr`) VALUES
(1, 10, 7, 8.98, 5.55, 10),
(2, 0, 0, 0, 0, 2),
(3, 9, 0, 0, 0, 9),
(4, 8.5, 10, 9.25, 0, 3),
(5, 0, 0, 0, 0, 4),
(6, 0, 0, 0, 0, 5),
(7, 0, 0, 0, 0, 6),
(8, 0, 0, 0, 0, 7),
(9, 0, 0, 0, 0, 8),
(10, 7, 7, 8, 10, 1),
(11, 0, 0, 0, 0, 11),
(12, 0, 0, 0, 0, 12),
(13, 0, 0, 0, 0, 13),
(14, 0, 0, 0, 0, 14),
(16, 0, 0, 0, 0, 15),
(17, 0, 0, 0, 0, 16),
(18, 0, 0, 0, 0, 17),
(19, 0, 0, 0, 0, 0),
(20, 0, 0, 0, 0, 0),
(21, 0, 0, 0, 0, 18);

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

CREATE TABLE IF NOT EXISTS `professores` (
  `matr` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `sexo` char(1) NOT NULL,
  `dn` date NOT NULL,
  `end` varchar(200) NOT NULL,
  `fone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `graduacao` varchar(45) NOT NULL,
  `idioma` char(1) NOT NULL,
  `login_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `professores`
--

INSERT INTO `professores` (`matr`, `nome`, `cpf`, `sexo`, `dn`, `end`, `fone`, `email`, `graduacao`, `idioma`, `login_id`) VALUES
(1, 'Maria Florencio', '055.368.906-07', 'F', '1985-03-04', 'Quadra 804 conjunto 08 casa 25', '061 99936 4627', 'mariaflor@gmail.com', 'Letras - InglÃªs', 'I', 8),
(2, 'Mariana Pereira', '055.368.906-01', 'F', '1985-02-01', 'Quadra 804 conjunto 08 casa 24', '061 99936 4526', 'marip@gmail.com', 'Letras - InglÃªs', 'I', 2),
(3, 'LourenÃ§o GonÃ§alves de Aguiar', '079.112.304-09', 'M', '1974-08-07', 'QnL 04 cj B Norte', '061 98571 1137', 'proflourencoaguiar@gmail.com', 'Letras - Espanhol', 'E', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `turmas`
--

CREATE TABLE IF NOT EXISTS `turmas` (
  `id` int(11) NOT NULL,
  `tnome` varchar(10) NOT NULL,
  `idioma` char(1) NOT NULL,
  `dias` int(2) NOT NULL,
  `turno` char(1) NOT NULL,
  `horario` int(1) NOT NULL,
  `nivel` char(1) NOT NULL,
  `serie` int(1) NOT NULL,
  `sala` int(2) NOT NULL,
  `semestre` int(1) NOT NULL,
  `ano` int(4) NOT NULL,
  `professores_matr` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `turmas`
--

INSERT INTO `turmas` (`id`, `tnome`, `idioma`, `dias`, `turno`, `horario`, `nivel`, `serie`, `sala`, `semestre`, `ano`, `professores_matr`) VALUES
(1, 'I241MA25', 'I', 24, 'M', 1, 'A', 2, 5, 1, 2016, 2),
(2, 'I35N1A408', 'I', 35, 'N', 1, 'A', 4, 8, 1, 2016, 1),
(3, 'E352VA311', 'E', 35, 'V', 2, 'A', 3, 11, 2, 2016, 3),
(4, 'I72MI29', 'I', 7, 'M', 2, 'I', 2, 9, 2, 2016, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`matr`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`idnotas`);

--
-- Indexes for table `professores`
--
ALTER TABLE `professores`
  ADD PRIMARY KEY (`matr`);

--
-- Indexes for table `turmas`
--
ALTER TABLE `turmas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alunos`
--
ALTER TABLE `alunos`
  MODIFY `matr` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `notas`
--
ALTER TABLE `notas`
  MODIFY `idnotas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `professores`
--
ALTER TABLE `professores`
  MODIFY `matr` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `turmas`
--
ALTER TABLE `turmas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
