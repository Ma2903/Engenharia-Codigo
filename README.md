# Código de Engenharia

Este repositório foi desenvolvido como um exemplo prático para demonstrar os conceitos fundamentais da **Engenharia de Software**. O projeto implementa uma estrutura típica de aplicação web, incluindo o uso de **Model-View-Controller (MVC)**, um padrão arquitetural amplamente utilizado no desenvolvimento de sistemas.

## Estrutura do Projeto

O repositório está organizado em diferentes camadas de responsabilidade, seguindo o padrão **MVC**:

- **Controller**: Lida com a lógica de controle e a interação entre a View e o Model.
  - Exemplo: Arquivos PHP responsáveis por gerenciar as requisições e direcioná-las aos componentes apropriados.
  
- **Model**: Gerencia a lógica de negócios e a interação com o banco de dados.
  - Exemplo: Arquivos responsáveis por manipular os dados no banco de dados **finanpro.sql**.

- **View**: Gerencia a apresentação da interface para o usuário.
  - Exemplo: Arquivos de front-end como **index.php**, além de folhas de estilo **main.css** e **principal.css**.

## Banco de Dados

O arquivo **finanpro.sql** contém a estrutura e os dados do banco de dados para a aplicação. Esse banco de dados é utilizado para gerenciar as informações financeiras no sistema, servindo como exemplo de integração entre a camada de dados e a aplicação.

## Tecnologias Utilizadas

- **PHP**: Linguagem de back-end utilizada para implementar a lógica da aplicação.
- **HTML/CSS**: Para construção e estilização da interface de usuário.
- **SQL**: Para criação e manipulação do banco de dados relacional.

## Como Rodar o Projeto

1. Clone este repositório para sua máquina local:
   ```bash
   git clone https://github.com/Ma2903/Engenharia-Codigo.git
