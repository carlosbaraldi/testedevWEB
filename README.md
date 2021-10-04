# Aplicação para Teste de Desenvolvedor WEB em CodeIgniter 4

## Dados para acesso na aplicação WEB

https://carlostesteweb.000webhostapp.com

email = teste@teste.com
senha = devweb


# Criação Banco de Dados

### Criação Banco de Dados
CREATE SCHEMA `teste_dev` DEFAULT CHARACTER SET utf8mb4 ;

### Criação Tabela Usuarios
CREATE TABLE `tbUsuarios` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `admin` int(1) DEFAULT '0',
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `deleted_at` timestamp(6) NULL DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbUsuarios` VALUES (1,'Carlos Eduardo Baraldi','teste@teste.com','$2y$10$9U301uauu0ohM1WREGqjS.M304.vQgEFq/bYpww1Iv80d946OUE6m',0,NULL,NULL,NULL);




### Criação Tabela Enquetes
CREATE TABLE `tbEnquetes` (
  `idEnquete` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) NOT NULL,
  `tituloEnquete` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perguntaEnquete` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `deleted_at` timestamp(6) NULL DEFAULT NULL,
  PRIMARY KEY (`idEnquete`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




#### Criação Tabela Respostas
CREATE TABLE `tbRespostas` (
  `idResposta` int(11) NOT NULL AUTO_INCREMENT,
  `enquete_id` int(11) NOT NULL DEFAULT '0',
  `resposta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qtdVotos` int(11) DEFAULT '0',
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `deleted_at` timestamp(6) NULL DEFAULT NULL,
  PRIMARY KEY (`idResposta`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
