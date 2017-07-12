# Teste técnico da Taller

Para acessar o demo clique [aqui](http://inclusivedigital.com.br/taller/usuario/login).

***

## Entidades

As seguintes entidades foram identificadas no protótipo:

### Usuario

**Campos:** Email, senha

**Funcionalidades:**

* Criar
* Editar o próprio perfil

### Empresa

**Campos:** Nome fantasia, CNPJ

**Funcionalidades:**

* Criar nova
* Listar

### Pedidos

**Campos:** Empresa, Produto, Quantidade

**Funcionalidades:**

* Criar
* Fechar
* Excluir
* Cancelar
* Buscar
* Listar

### Produtos

**Campos:** Nome

**Funcionalidades:**

* Listar

***

## Bd

 ![Banco de dados](https://lh5.googleusercontent.com/RqLFUlyiDee4AlX9ZJYUvy2V0tAn8qjNs8icAm6fcYajt9fsyw3ItvcWOc_Miz84b6yMHWzlegj104o=w1360-h659)


### SQL

    CREATE TABLE `empresa` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `nome` varchar(200) NOT NULL,
      `cnpj` varchar(30) NOT NULL,
      `ativo` int(11) NOT NULL DEFAULT '1',
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB;

    CREATE TABLE `item` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `quantidade` int(11) NOT NULL,
      `produto` int(11) NOT NULL,
      `pedido` int(11) NOT NULL,
      `ativo` int(11) NOT NULL DEFAULT '1',
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB;

    CREATE TABLE `pedido` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `empresa` int(11) NOT NULL,
      `ativo` int(11) NOT NULL DEFAULT '1',
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB;

    CREATE TABLE `produto` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `nome` varchar(100) NOT NULL,
      `ativo` int(11) NOT NULL DEFAULT '1',
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB;

    CREATE TABLE `usuario` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `email` varchar(200) NOT NULL,
      `senha` varchar(200) NOT NULL,
      `ativo` int(11) DEFAULT '1',
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB;

***

## Ambiente de desenvolvimento

* [Scotch box 3.0](https://box.scotch.io/)
* [Vagrant](https://www.vagrantup.com/)
* [VirtualBox](https://www.virtualbox.org/)
* [Git](https://git-scm.com)
* [Atom](https://atom.io/)
