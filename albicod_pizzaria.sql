-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Maio-2020 às 04:04
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `albicod_pizzaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `date_register` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `about`
--

INSERT INTO `about` (`id`, `image`, `description`, `id_user`, `date_register`) VALUES
(1, '30dfee09ac32d8278f2e269fce2de711.jpeg', '<h1><em><strong>Pizzaria</strong></em></h1>\r\n\r\n<h3><strong>O lugar perfeito para aproveitar a vida e a comida.</strong></h3>\r\n\r\n<p>Fundado pela 1&ordf; gera&ccedil;&atilde;o de imigrantes da Sic&iacute;lia, este restaurante italiano tornou-se rapidamente um local b&aacute;sico.Com uma incr&iacute;vel variedade de pratos italianos de tradi&ccedil;&otilde;es cl&aacute;ssicas e modernas, come&ccedil;ando com pizzas e massas e todo o caminho at&eacute; o celuccio e o annianto, nosso menu se destaca!</p>\r\n', 1, '2020-05-17 01:52:13');

-- --------------------------------------------------------

--
-- Estrutura da tabela `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `banner`
--

INSERT INTO `banner` (`id`, `image`) VALUES
(2, '919fa732f70c405cacc0a6d23027dfcd.jpeg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carousel`
--

CREATE TABLE `carousel` (
  `id` int(11) NOT NULL,
  `text1` varchar(150) NOT NULL,
  `text2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `carousel`
--

INSERT INTO `carousel` (`id`, `text1`, `text2`) VALUES
(1, 'Parabéns você é nosso melhos cliente 1', 'Parabéns 1'),
(2, 'Parabéns você é nosso melhos cliente 2', 'Parabéns 2'),
(3, 'Parabéns você é nosso melhos cliente 3', 'Parabéns 3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `description`
--

CREATE TABLE `description` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `description`
--

INSERT INTO `description` (`id`, `image`, `texto`) VALUES
(1, 'ddd8347def65423767d82abbb5bd41a8.jpeg', '<h2>SPECIALS*</h2>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut.</p>\r\n\r\n<p>$10</p>\r\n\r\n<h3>COMBO PICCOLO</h3>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut aliquam dui.</p>\r\n\r\n<p>$20</p>\r\n\r\n<h3>COMBO MEZZO</h3>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut aliquam dui.</p>\r\n\r\n<p>$30</p>\r\n\r\n<h3>COMBO GRANDE</h3>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut aliquam dui.</p>\r\n');

-- --------------------------------------------------------

--
-- Estrutura da tabela `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `image1` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `title1` varchar(100) NOT NULL,
  `title2` varchar(100) NOT NULL,
  `button` varchar(100) NOT NULL,
  `color_button` varchar(100) NOT NULL,
  `detalhes_contato` text NOT NULL,
  `google_map` text NOT NULL,
  `link_face` varchar(150) NOT NULL,
  `link_instagram` varchar(150) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date_register` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `home`
--

INSERT INTO `home` (`id`, `image1`, `image2`, `title1`, `title2`, `button`, `color_button`, `detalhes_contato`, `google_map`, `link_face`, `link_instagram`, `id_user`, `date_register`) VALUES
(1, '2dae8ccbe68a4cb6a1a07729d9552cd3.png', '5c616e9ed839eefa0eb22e95be2b3c19.png', 'Seja Bem-vindo!', 'PIZZA É AQUI!', 'Peça Agora', '#dc3545', '<p>Pc Mario Andreazza&nbsp;- N&ordm; 130&nbsp;Centro<br />\r\nTelefone: (73) 3254-0606<br />\r\nCelular:: (73) 9 9917-9660<br />\r\nE-mail:&nbsp;<a href=\"mailto:name@example.com\">callnetba@hotmail.com</a></p>\r\n\r\n<p>Funcionamento:<br />\r\nSegunda - Sexta<br />\r\n9h &agrave;s 12h &amp; 14h &agrave;s 16h</p>\r\n', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1937.7497612433338!2d-39.49478120567461!3d-13.748722885714795!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1125b6fd20a75f36!2sAlbicod!5e0!3m2!1spt-BR!2sbr!4v1570619838140!5m2!1spt-BR!2sbr\" width=\"100%\" height=\"300\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>', '#', '#', 1, '2020-05-17 11:43:15');

-- --------------------------------------------------------

--
-- Estrutura da tabela `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `date_register` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `menu`
--

INSERT INTO `menu` (`id`, `image`, `title`, `description`, `id_user`, `date_register`) VALUES
(2, 'bf85b88c877ca5d95a8ea238bcca4145.jpeg', 'Pizza de Teste', '<blockquote>\r\n<p>123456789</p>\r\n</blockquote>\r\n', 1, '2020-05-17 10:19:39'),
(4, '300745039760f70f772c245105f18714.jpeg', 'Pizza de Teste 2', '<blockquote>\r\n<p>123456789</p>\r\n</blockquote>\r\n', 1, '2020-05-17 10:20:06'),
(6, 'b21c802da0712e48f639a88b07f82efb.jpeg', 'Pizza de Teste 4', '<p>123456789</p>\r\n', 1, '2020-05-17 12:30:18'),
(7, '2173113839974d7608c91f649c67dfc4.jpeg', 'Pizza de Teste 3', '<p>Mais uma pizza</p>\r\n', 1, '2020-05-19 22:52:49');

-- --------------------------------------------------------

--
-- Estrutura da tabela `promotions`
--

CREATE TABLE `promotions` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `promotions`
--

INSERT INTO `promotions` (`id`, `image`, `title`) VALUES
(8, 'a6d693b23405c446e81fba2a4adc4eab.jpeg', 'Teste 01'),
(9, 'c41488e32880833ebe3740e4981ea14a.jpeg', 'Teste 02'),
(10, '07ddbefda2b48cd2276ca7b4cf8d5008.jpeg', 'Teste 03'),
(11, '69e9fa3164c8cf15480ade4e643651b3.jpeg', 'Teste 04');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tracking`
--

CREATE TABLE `tracking` (
  `id` int(11) NOT NULL,
  `script` text NOT NULL,
  `verify` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tracking`
--

INSERT INTO `tracking` (`id`, `script`, `verify`) VALUES
(1, '', 1),
(2, '<!-- Global site tag (gtag.js) - Google Analytics -->\r\n<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-77263982-2\"></script>\r\n<script>\r\n  window.dataLayer = window.dataLayer || [];\r\n  function gtag(){dataLayer.push(arguments);}\r\n  gtag(\'js\', new Date());\r\n\r\n  gtag(\'config\', \'UA-77263982-2\');\r\n</script>', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `pass`) VALUES
(1, 'Administrador', 'admin@admin.com', '202cb962ac59075b964b07152d234b70');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `description`
--
ALTER TABLE `description`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tracking`
--
ALTER TABLE `tracking`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `description`
--
ALTER TABLE `description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `tracking`
--
ALTER TABLE `tracking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
