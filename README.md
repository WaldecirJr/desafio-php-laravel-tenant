## 📌 Projeto - Sistema de Transações
**📖 Sobre o projeto**

Este é um sistema CRUD/módulo básico de uma transação financeira, desenvolvido em Laravel, com foco no desafio para aplicações PHP backend + Tenant.

O objetivo da aplicação é permitir que o usuário autenticado realize o login, visualize suas transações, cadastre novas, edite ou exclua (soft delete) as existentes.

## ⚙️ Funcionalidades
**🔐 Login**

- Autenticação simples via email e senha.

- Usuários já pré-cadastrados no banco de dados.

- Exibe mensagens de erro caso o login seja inválido.

**📑 Lista de Transações**

- Página inicial após o login.

- Lista em duas colunas com as informações principais de cada transação:

  - Data e hora da criação.

  - Valor da transação.

- Ações disponíveis em cada transação:

  - Ver → Abre a página (ou modal) de detalhes.

  - Editar → Abre a tela de cadastro com os dados preenchidos.

  - Excluir → Confirmação de exclusão (soft delete).

**📝 Cadastro de Transações**

- Formulário para registrar uma nova transação.

- Ao salvar, o sistema redireciona para a lista de transações já atualizada.

## 🛠️ Tecnologias utilizadas
  **- Laravel 12**
  
  **- Blade Templates**
  
  **- MySQL/PostgreSQL (compatível com ambos, basta configurar no .env)**
  
  **- TailwindCSS (para estilização das telas)**
