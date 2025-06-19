# CRUD de Clientes em PHP

Este é um projeto simples de um sistema CRUD (Create, Read, Update, Delete) desenvolvido em PHP puro, com MySQL, HTML, CSS e JavaScript. O objetivo é realizar o cadastro de clientes com os campos: **nome, telefone e endereço**.

---

## Funcionalidades

- Cadastrar clientes
- Listar clientes cadastrados
- Editar dados de um cliente
- Excluir clientes
- Banco de dados MySQL

---

## 🛠️ Tecnologias utilizadas

- PHP
- MySQL
- HTML
- CSS
- JavaScript (leve)

---
CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    endereco VARCHAR(255) NOT NULL
);
