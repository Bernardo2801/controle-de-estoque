# Gerenciador de estoques

Este repositório foi criado como parte do meu processo de aprendizado em Laravel e PHP. Aqui você encontrará um CRUD simples para exercitar conceitos básicos e aprimorar minhas habilidades de desenvolvimento web. Este projeto é um gerenciador de estoque que permite criar, editar e deletar produtos. Embora seja aplicável a qualquer ramo, foi desenvolvido especificamente para uma farmácia. Sinta-se à vontade para explorar e contribuir com sugestões de melhorias!

# Funcionalidades
Criar Produto:
Permite adicionar novos produtos ao estoque, incluindo informações como nome, descrição, quantidade, preço, data de validade e categoria.

Editar Produto:
Permite editar informações de produtos existentes no estoque.

Deletar Produto:
Permite remover produtos do estoque.

Listar Produtos:
Exibe uma lista de todos os produtos disponíveis no estoque com detalhes completos.

Exibir Produtos por Ordem de Vencimento:
Exibe os produtos do estoque ordenados pela data de validade, permitindo que o usuário veja quais produtos estão próximos do vencimento.

Exibir Produtos por Ordem de Criação:
Exibe os produtos do estoque ordenados pela data de criação, permitindo que o usuário veja os produtos adicionados mais recentemente.

# Gerenciamento de Usuários
Criar Usuário:
Permite a criação de novos usuários com informações como nome, email, senha e papel (administrador, operador, etc.).

Editar Usuário:
Permite a edição de informações de usuários existentes.

Deletar Usuário:
Permite a remoção de usuários do sistema.

# Configuração do Projeto
Siga os passos abaixo para configurar e executar o projeto em seu ambiente local.

<h1>Requisitos do Projeto</h1>
    <ul>
        <li>PHP &gt;= 7.3</li>
        <li>Composer</li>
        <li>Node.js &gt;= 12.x</li>
        <li>npm &gt;= 6.x</li>
        <li>MySQL ou outro banco de dados compatível</li>
    </ul>

# Instalação

1. Clone o repositório: `https://github.com/Bernardo2801/controle-de-estoque.git`;
2. Instale as dependências PHP: `composer install`;
3. Configure o arquivo .env com suas configurações de banco de dados. Para gerar o arquivo .env, execute: `copy .env.example .env`;
4. Execute as migrações: `php artisan migrate`;
5. Instale as dependências do projeto listadas no arquivo package.json utilizando o gerenciador de pacotes npm: `npm install`;
6. Após a instalação, inicie o processo de desenvolvimento: `npm run dev`;
7. Gere a chave necessária para a execução do sistema: `php artisan key:generate`;
8. Inicie o servidor de desenvolvimento do Laravel: `php artisan serve`;

# Estrutura do Projeto

`app/` - Contém os arquivos principais da aplicação.
`config/` - Contém os arquivos de configuração.
`database/` - Contém migrações, seeders e factories.
`public/` - Contém os arquivos públicos, como o index.php e assets.
`resources/` - Contém as views, arquivos de tradução, etc.
`routes/` - Contém os arquivos de rotas da aplicação.
`tests/` - Contém os testes automatizados.

# Dúvidas?
Qualquer dúvida ou sugestão entre em contato comigo! :) Obrigado pela atenção.
