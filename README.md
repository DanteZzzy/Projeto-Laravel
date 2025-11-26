# Projeto Laravel - CRUD de Categorias com Docker

## 📌 Sobre o Projeto

Este projeto consiste em uma aplicação backend desenvolvida com **Laravel**, containerizada com **Docker** e integrada a um banco de dados **MySQL**, com o objetivo de gerenciar categorias através das operações básicas de um CRUD (Create, Read, Update, Delete).

O sistema foi pensado para demonstrar na prática a organização de um projeto Laravel utilizando boas práticas de desenvolvimento backend, incluindo:

* Estruturação correta de rotas
* Criação de Controllers
* Migrations e Models com Eloquent
* Views Blade simples e funcionais
* Integração completa com banco de dados MySQL via Docker

A funcionalidade principal do sistema é permitir o gerenciamento de categorias, onde o usuário pode:

* ✅ Criar novas categorias
* ✅ Visualizar todas as categorias cadastradas
* ✅ Editar categorias existentes
* ✅ Excluir categorias

Cada categoria possui os seguintes campos:

* `id` (gerado automaticamente)
* `nome` (string obrigatória)
* `descricao` (texto opcional)
* `created_at` e `updated_at`

---

## 🛠 Tecnologias Utilizadas

* PHP
* Laravel
* Docker
* Docker Compose
* MySQL
* Blade (Template Engine)

---

## 🚀 Instalação e Execução do Projeto

### 1️⃣ Clonar o repositório

```bash
git clone https://github.com/seu-usuario/seu-repositorio.git
cd seu-repositorio
```

---

### 2️⃣ Criar arquivo .env

Como o arquivo `.env` não deve ser versionado, utilize o `.env.example` como base:

```bash
cp laravel-app/.env.example laravel-app/.env
```

Depois edite o arquivo `.env` e ajuste principalmente as variáveis de banco de dados:

```
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=laravel
DB_PASSWORD=secret
```

---

### 3️⃣ Subir os containers

```bash
docker-compose up -d --build
```

---

### 4️⃣ Instalar dependências do Laravel

```bash
docker-compose exec app composer install
```

---

### 5️⃣ Gerar a chave da aplicação

```bash
docker-compose exec app php artisan key:generate
```

---

### 6️⃣ Rodar as migrations

```bash
docker-compose exec app php artisan migrate
```

Isso criará a tabela `categorias` no banco de dados com todos os campos necessários.

---

## 🌐 Acesso ao Sistema

Após subir os containers, acesse no navegador:

```
http://localhost:8080/categorias
```

Você verá a interface de gerenciamento onde será possível:

* Cadastrar novas categorias
* Listar categorias existentes
* Editar informações
* Excluir categorias

---

## 🗂 Funcionalidades Implementadas

### ➕ Criar Categoria

Permite cadastrar uma nova categoria informando nome e descrição.

### 📄 Listar Categorias

Exibe todas as categorias cadastradas em uma tabela organizada.

### ✏️ Editar Categoria

Permite alterar o nome ou descrição de uma categoria já existente.

### 🗑 Excluir Categoria

Remove permanentemente a categoria selecionada após confirmação.

---

## ✅ Boas Práticas Aplicadas

* Separação clara entre Controller, Model e Views
* Uso do Eloquent ORM
* Rotas organizadas
* Dockerização completa do ambiente
* Proteção CSRF nos formulários

---

## Captura de Tela

![alt text](<Captura de tela 2025-11-26 000946.png>)

## 👨‍💻 Autor

Projeto desenvolvido como aplicação prática de backend utilizando Laravel com Docker e MySQL.

---


