# Turma de ADS

Este é um projeto criado para a turma de Análise e Desenvolvimento de Sistemas. O objetivo é desenvolver uma aplicação web utilizando o framework Laravel.

## Configuração

Para configurar o projeto, é necessário criar um arquivo `.env` com as variáveis de ambiente. Um exemplo de como o arquivo deve ser estruturado pode ser encontrado em `.env.example`.

## Instalação

Para instalar as dependências do projeto, execute o comando `composer install` no diretório raiz do projeto.

## Execução

Para executar o projeto, execute o comando `php artisan serve` no diretório raiz do projeto. A aplicação estará disponível em `http://127.0.0.1:8000`.

## Usuário Padrão

Para alterar o usuário padrão do sistema, você precisa modificar o arquivo de seed `database/seeders/DatabaseSeeder.php`. Por padrão, o sistema cria um usuário com as seguintes credenciais:

- Email: admin@admin.com
- Senha: 123456

Para criar um novo usuário padrão:

1. Abra o arquivo `database/seeders/DatabaseSeeder.php`
2. Modifique os dados do usuário conforme necessário
3. Execute o comando `php artisan db:seed --class=DatabaseSeeder`

## Contribuição

Se você deseja contribuir para o projeto, por favor, faça um fork do repositório e envie um pull request com suas alterações.

## Licença

Este projeto está licenciado sob a Licença MIT - veja o arquivo [LICENSE](LICENSE) para mais detalhes.
