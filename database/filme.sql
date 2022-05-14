-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Maio-2022 às 00:13
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `creathus`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `filme`
--

CREATE TABLE `filme` (
  `id_filme` int(11) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `imagem` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `filme`
--

INSERT INTO `filme` (`id_filme`, `autor`, `titulo`, `descricao`, `imagem`) VALUES
(1, 'Autor', 'Batman', 'Após dois anos espreitando as ruas como Batman, Bruce Wayne se encontra nas profundezas mais sombrias de Gotham City. Com poucos aliados confiáveis, o vigilante solitário se estabelece como a personificação da vingança para a população.', 'images/batman.jpg'),
(3, 'Autor', 'Sonic 2', 'O Dr. Robotnik retorna à procura de uma esmeralda mística que tem o poder de destruir civilizações. Para detê-lo, Sonic se une a seu antigo parceiro, Tails, e parte em uma jornada para encontrar a joia antes que ela caia em mãos erradas.', 'images/sonic 2.jpg'),
(4, 'Stan Lee', 'Homem Aranha', 'O Homem-Aranha precisa lidar com as consequências da sua verdadeira identidade ter sido descoberta.', 'images/HOMEM ARANHA.jpg'),
(5, 'Stan Lee', 'Doutor Estranho', 'O aguardado filme trata da jornada do Doutor Estranho rumo ao desconhecido. Além de receber ajuda de novos aliados místicos e outros já conhecidos do público, o personagem atravessa as realidades alternativas incompreensíveis e perigosas do Multiverso par', 'images/Doutor Estranho.jpg'),
(21, 'Vitor', 'Esquadrao', 'Um time dos mais perigosos e encarcerados supervilões são contratados por uma agência secreta do governo, para combater uma poderosa entidade.', 'images/Esquadrao.jpg'),
(22, 'Autor Desconhecido', 'DPA 3', 'Severino encontra um objeto em meio aos escombros de um avião, sem saber que se trata de uma das faces do Medalhão de Uzur. Ao colocá-lo no pescoço, o porteiro do Prédio Azul passa a se tornar cada vez mais malvado.', 'images/DPA 3.jpg'),
(25, 'Stan Lee', 'Homem Aranha', 'O Homem-Aranha precisa lidar com as consequências da sua verdadeira identidade ter sido descoberta.', 'images/HOMEM ARANHA.jpg'),
(26, 'Autor Desconhecido', 'DPA 3', 'Severino encontra um objeto em meio aos escombros de um avião, sem saber que se trata de uma das faces do Medalhão de Uzur. Ao colocá-lo no pescoço, o porteiro do Prédio Azul passa a se tornar cada vez mais malvado.', 'images/DPA 3.jpg'),
(66, 'Maúricio de Souza', 'Turma da Mônica', 'O Floquinho desaparece. Para encontrar seu cachorro de estimação, Cebolinha conta com os amigos Cascão, Mônica e Magali e, claro, um plano infalível.', 'images/627ecaf2bbd87.jpg'),
(67, 'Autor', 'O Hobbit', 'Como a maioria dos hobbits, Bilbo Bolseiro leva uma vida tranquila atÃ© o dia em que recebe uma missÃ£o do mago Gandalf. Acompanhado por um grupo de anÃµes, ele parte numa jornada atÃ© a Montanha SolitÃ¡ria para libertar o Reino de Erebor do dragÃ£o Smaug', 'images/627ed112d308a.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `filme`
--
ALTER TABLE `filme`
  ADD PRIMARY KEY (`id_filme`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `filme`
--
ALTER TABLE `filme`
  MODIFY `id_filme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
