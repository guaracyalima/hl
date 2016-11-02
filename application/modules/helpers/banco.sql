

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Banco de Dados: `LinuxStok`
-- 

-- --------------------------------------------------------

-- 
-- Estrutura da tabela `categoria`
-- 

CREATE TABLE `categoria` (
  `Id` int(11) NOT NULL auto_increment,
  `Identificador` varchar(100) default NULL,
  `IdUsuario` varchar(10) default NULL,
  `Nome` varchar(255) default NULL,
  `DataCadastro` varchar(255) default NULL,
  `Status` varchar(2) default NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Extraindo dados da tabela `categoria`
-- 

INSERT INTO `categoria` (`Id`, `Identificador`, `IdUsuario`, `Nome`, `DataCadastro`, `Status`) VALUES 
(1, 'fb6902c29a87753bf80bd4f9fa300806', '1', 'Cursos 1', '2013-03-29', '0'),
(2, 'be326d6d119d42756df8c40889db5fee', '1', 'Códigos Fontes', '2013-03-29', '0');

-- --------------------------------------------------------

-- 
-- Estrutura da tabela `clientes`
-- 

CREATE TABLE `clientes` (
  `Id` int(11) NOT NULL auto_increment,
  `Identificador` varchar(100) default NULL,
  `IdUsuario` varchar(10) default NULL,
  `Nome` varchar(255) default NULL,
  `Endereco` varchar(255) default NULL,
  `Telefone` varchar(255) default NULL,
  `Celular` varchar(255) default NULL,
  `DataCadastro` varchar(255) default NULL,
  `Status` varchar(2) default NULL,
  `Rg` varchar(255) default NULL,
  `Cpf` varchar(255) default NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Extraindo dados da tabela `clientes`
-- 

INSERT INTO `clientes` (`Id`, `Identificador`, `IdUsuario`, `Nome`, `Endereco`, `Telefone`, `Celular`, `DataCadastro`, `Status`, `Rg`, `Cpf`) VALUES 
(1, '9b3fe64c18583044b021483a6cad86c7', '1', 'Daigo ADM', 'Teste', '00 0000 0000', '00 0000 0000', '2013-03-29', '0', '00000000000', '000000');

-- --------------------------------------------------------

-- 
-- Estrutura da tabela `contaspagar`
-- 

CREATE TABLE `contaspagar` (
  `Id` int(11) NOT NULL auto_increment,
  `Identificador` varchar(100) default NULL,
  `IdUsuario` varchar(255) default NULL,
  `DataCadastro` datetime default NULL,
  `DataVencimento` datetime default NULL,
  `Valor` double(10,2) default NULL,
  `Juros` varchar(255) default NULL,
  `Status` varchar(255) default NULL,
  `Fornecedor` varchar(255) default NULL,
  `Historico` text,
  `ValorPago` double(10,2) default NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Extraindo dados da tabela `contaspagar`
-- 

INSERT INTO `contaspagar` (`Id`, `Identificador`, `IdUsuario`, `DataCadastro`, `DataVencimento`, `Valor`, `Juros`, `Status`, `Fornecedor`, `Historico`, `ValorPago`) VALUES 
(1, '724bb9aef229fe336945d5df6dbde243', '1', '2013-03-30 17:57:02', '2013-04-30 17:56:42', 300.00, '2', '1', '1', 'testando o pagamento', 306.00),
(2, '47c7e84671762c73cb7f58f162583127', '1', '2013-03-31 05:19:38', '2013-03-30 05:19:22', 100.00, '10', '1', '1', 'pagamos com juros', 110.00);

-- --------------------------------------------------------

-- 
-- Estrutura da tabela `contasreceber`
-- 

CREATE TABLE `contasreceber` (
  `Id` int(11) NOT NULL auto_increment,
  `Identificador` varchar(100) default NULL,
  `IdUsuario` varchar(255) default NULL,
  `DataCadastro` datetime default NULL,
  `DataVencimento` datetime default NULL,
  `Valor` double(10,2) default NULL,
  `Juros` varchar(255) default NULL,
  `Status` varchar(255) default NULL,
  `Cliente` varchar(255) default NULL,
  `Historico` text,
  `ValorPago` double(10,2) default NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Extraindo dados da tabela `contasreceber`
-- 

INSERT INTO `contasreceber` (`Id`, `Identificador`, `IdUsuario`, `DataCadastro`, `DataVencimento`, `Valor`, `Juros`, `Status`, `Cliente`, `Historico`, `ValorPago`) VALUES 
(1, 'acaf64f0cc23d26956c063721af55268', '1', '2013-03-30 18:03:32', '2013-04-30 18:03:16', 150.00, '3', '1', '1', 'testando o recebimentyo', 150.00);

-- --------------------------------------------------------

-- 
-- Estrutura da tabela `formapagamento`
-- 

CREATE TABLE `formapagamento` (
  `Id` int(11) NOT NULL auto_increment,
  `IdUsuario` varchar(255) default NULL,
  `Identificador` varchar(100) default NULL,
  `Nome` varchar(255) default NULL,
  `DataCadastro` varchar(255) default NULL,
  `Status` varchar(255) default NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- 
-- Extraindo dados da tabela `formapagamento`
-- 

INSERT INTO `formapagamento` (`Id`, `IdUsuario`, `Identificador`, `Nome`, `DataCadastro`, `Status`) VALUES 
(2, '1', 'b32dcbed3ea38e286d24b50d1bd11894', 'Cartão', '2013-03-30', '0'),
(3, '1', '444112ea193667877ab2ad9b8119852a', 'Duplicata', '2013-03-30', '0');

-- --------------------------------------------------------

-- 
-- Estrutura da tabela `fornecedores`
-- 

CREATE TABLE `fornecedores` (
  `Id` int(11) NOT NULL auto_increment,
  `Identificador` varchar(100) default NULL,
  `IdUsuario` varchar(10) default NULL,
  `Fantasia` varchar(255) default NULL,
  `Razao` varchar(255) default NULL,
  `CNPJ` varchar(255) default NULL,
  `Telefone` varchar(255) default NULL,
  `Endereco` varchar(255) default NULL,
  `DataCadastro` varchar(255) default NULL,
  `Status` varchar(10) default NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Extraindo dados da tabela `fornecedores`
-- 

INSERT INTO `fornecedores` (`Id`, `Identificador`, `IdUsuario`, `Fantasia`, `Razao`, `CNPJ`, `Telefone`, `Endereco`, `DataCadastro`, `Status`) VALUES 
(1, '1592a9f05d1ec3a4c826eec0932d6115', '1', 'Junior 1', 'Junior', '0000000000000000000000000000000', '00 0000 0000', 'RUA DAS FLORES N.Zero', '2013-03-29', '0');

-- --------------------------------------------------------

-- 
-- Estrutura da tabela `itensvendas`
-- 

CREATE TABLE `itensvendas` (
  `Id` int(11) NOT NULL auto_increment,
  `IdentificadorVenda` varchar(100) default NULL,
  `Produtos` varchar(255) default NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

-- 
-- Extraindo dados da tabela `itensvendas`
-- 

INSERT INTO `itensvendas` (`Id`, `IdentificadorVenda`, `Produtos`) VALUES 
(8, '5', 'Sistema'),
(9, '5', ' '),
(10, '6', 'Sistema'),
(11, '6', ' '),
(12, '7', 'Sistema'),
(13, '7', ' '),
(14, '8', 'Sistema'),
(15, '8', ' '),
(16, '9', 'Sistema'),
(17, '9', ' '),
(18, '10', 'Sistema'),
(19, '10', ' '),
(20, '11', 'Sistema'),
(21, '11', ' '),
(22, '12', 'Sistema'),
(23, '12', ' ');

-- --------------------------------------------------------

-- 
-- Estrutura da tabela `os`
-- 

CREATE TABLE `os` (
  `Id` int(11) NOT NULL auto_increment,
  `Identificador` varchar(100) default NULL,
  `IdUsuario` varchar(255) default NULL,
  `Cliente` varchar(255) default NULL,
  `Tecnico` varchar(255) default NULL,
  `Referencia` varchar(255) default NULL,
  `Situacao` varchar(255) default NULL,
  `DataInicio` datetime default NULL,
  `DataFinal` datetime default NULL,
  `DefeitoRelatado` text,
  `LaudoTecnico` text,
  `ObsGerais` text,
  `Preco` double(10,2) default NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- 
-- Extraindo dados da tabela `os`
-- 

INSERT INTO `os` (`Id`, `Identificador`, `IdUsuario`, `Cliente`, `Tecnico`, `Referencia`, `Situacao`, `DataInicio`, `DataFinal`, `DefeitoRelatado`, `LaudoTecnico`, `ObsGerais`, `Preco`) VALUES 
(2, 'a5884b03675d2e8454403d88b3c2a784', '1', '1', '1', 'Referencia', 'Entrege', '2013-03-31 02:15:32', '2013-03-31 02:15:32', 'Defeito', 'Laudo', 'Obs', 100.00),
(3, 'd96b77a3bc9609fea491c02c5629c5b8', '1', '1', '1', 'Referencia', 'Entrege', '2013-03-31 05:20:45', '2013-04-10 05:20:45', 'Defeito', 'Laudo', 'Já foi feito o pagamento', 150.00);

-- --------------------------------------------------------

-- 
-- Estrutura da tabela `produtos`
-- 

CREATE TABLE `produtos` (
  `Id` int(11) NOT NULL auto_increment,
  `Identificador` varchar(255) default NULL,
  `IdUsuario` varchar(10) default NULL,
  `IdCategoria` varchar(255) default NULL,
  `Nome` varchar(255) default NULL,
  `Descricao` varchar(255) default NULL,
  `PrecoCompra` double(10,2) default NULL,
  `PrecoVenda` double(10,2) default NULL,
  `DataCadastro` varchar(255) default NULL,
  `Status` varchar(255) default NULL,
  `QtdEstoque` varchar(255) default NULL,
  `QtdVenda` varchar(255) default NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Extraindo dados da tabela `produtos`
-- 

INSERT INTO `produtos` (`Id`, `Identificador`, `IdUsuario`, `IdCategoria`, `Nome`, `Descricao`, `PrecoCompra`, `PrecoVenda`, `DataCadastro`, `Status`, `QtdEstoque`, `QtdVenda`) VALUES 
(1, '395619c16d2c2f313a18245147d50229', '1', '1', 'Controle', 'Um curso legal', 30.00, 150.00, '2013-03-29', '0', '17', '1'),
(2, 'b5b98a37e3803a213737fcaf0a6e83ee', '1', '2', 'Sistema', '', 10.00, 120.00, '2013-03-30', '0', '16', '1');

-- --------------------------------------------------------

-- 
-- Estrutura da tabela `recibos`
-- 

CREATE TABLE `recibos` (
  `Id` int(11) NOT NULL auto_increment,
  `IdUsuario` varchar(10) default NULL,
  `Identificador` varchar(255) default NULL,
  `Valor` double(10,2) default NULL,
  `Referente` varchar(255) default NULL,
  `Data` varchar(255) default NULL,
  `Cliente` varchar(255) default NULL,
  `Status` varchar(255) default NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Extraindo dados da tabela `recibos`
-- 

INSERT INTO `recibos` (`Id`, `IdUsuario`, `Identificador`, `Valor`, `Referente`, `Data`, `Cliente`, `Status`) VALUES 
(1, '1', '8f0cb34b66356f9f6cf038ef63759ffd', 128.00, 'Aluguel', '31/03/2013', 'DAIGO ADMIN 1', '0');

-- --------------------------------------------------------

-- 
-- Estrutura da tabela `tecnicos`
-- 

CREATE TABLE `tecnicos` (
  `Id` int(11) NOT NULL auto_increment,
  `Identificador` varchar(100) default NULL,
  `IdUsuario` varchar(255) default NULL,
  `Nome` varchar(255) default NULL,
  `DataCadastro` varchar(255) default NULL,
  `Status` varchar(255) default NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Extraindo dados da tabela `tecnicos`
-- 

INSERT INTO `tecnicos` (`Id`, `Identificador`, `IdUsuario`, `Nome`, `DataCadastro`, `Status`) VALUES 
(1, '8d30564124b27efd813a46a52e8e5ba8', '1', 'Junior', '2013-03-30', '0');

-- --------------------------------------------------------

-- 
-- Estrutura da tabela `usuarios`
-- 

CREATE TABLE `usuarios` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `nome` varchar(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nivel` varchar(50) default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Extraindo dados da tabela `usuarios`
-- 

INSERT INTO `usuarios` (`id`, `nome`, `usuario`, `senha`, `nivel`) VALUES 
(1, 'Marques Junior 1', 'admin', 'admin', 'admin'),
(2, 'Junior', 'cliente', 'cliente', 'cliente');

-- --------------------------------------------------------

-- 
-- Estrutura da tabela `vendas`
-- 

CREATE TABLE `vendas` (
  `Id` int(11) NOT NULL auto_increment,
  `IdUsuario` varchar(255) default NULL,
  `Identificador` varchar(100) default NULL,
  `FormaPagamento` varchar(255) default NULL,
  `TotalVenda` double(10,2) default NULL,
  `TotalPago` double(10,2) default NULL,
  `Troco` double(10,2) default NULL,
  `Cliente` varchar(255) default NULL,
  `DataVenda` varchar(255) default NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- 
-- Extraindo dados da tabela `vendas`
-- 

INSERT INTO `vendas` (`Id`, `IdUsuario`, `Identificador`, `FormaPagamento`, `TotalVenda`, `TotalPago`, `Troco`, `Cliente`, `DataVenda`) VALUES 
(1, '1', 'c45f9ca12915a153b0d9d2f9a15e0601', '2', 270.00, 270.00, 0.00, '1', '2013-03-30'),
(2, '1', '440ba0ee6c325d2588496625f3310d34', '2', 270.00, 270.00, 0.00, '1', '2013-03-30'),
(3, '1', '58303ca5623d712c53b59876628a2d83', '2', 150.00, 200.00, 50.00, '1', '2013-03-30'),
(4, '1', 'ce7537f687f09ac7d0832f1e292b1161', '2', 270.00, 300.00, 30.00, '1', '2013-03-30'),
(5, '1', '6b790bafebd04bc156e53db57d063bf9', '2', 270.00, 300.00, 30.00, '1', '2013-03-30'),
(6, '1', '0665d9012318fd95c7f5d7a48cf2fa0d', '2', 270.00, 500.00, 230.00, '1', '2013-03-30'),
(7, '1', 'e8cb3509c6edbf854f5311eca1c6a729', '2', 270.00, 500.00, 230.00, '1', '2013-03-30'),
(8, '1', '356a9c50a4d549a3455466199947325d', '2', 270.00, 500.00, 230.00, '1', '2013-03-30'),
(9, '1', '05555f690ff0a88d41d87e05c21ab553', '2', 120.00, 150.00, 30.00, '1', '2013-03-30'),
(10, '1', '90d1be4600cecde3a3d54d6b15cbc668', '2', 120.00, 120.00, 0.00, '1', '2013-03-30'),
(11, '1', 'd6c28d6371f07cf97b67a021e12a0509', '2', 120.00, 150.00, 30.00, '1', '2013-03-30'),
(12, '1', '65dddd915be587f1d54afa98a0c504e4', '2', 270.00, 270.00, 0.00, '1', '2013-03-31');
