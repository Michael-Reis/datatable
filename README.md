Este é um projeto de exemplo que demonstra como utilizar o DataTable em conjunto com PHP para exibir e manipular dados em uma tabela HTML.

Requisitos
Para utilizar este projeto, é necessário ter instalado em sua máquina o servidor web Apache e o servidor de banco de dados MySQL.

Instalação
Clone este repositório em seu diretório de projetos do servidor web.
bash
Copy code
git clone https://github.com/Michael-Reis/datatable-server-side
Crie um banco de dados MySQL e importe o arquivo database.sql para criar a tabela usuarios com alguns registros de exemplo.

Edite o arquivo conexao.php com as informações de acesso ao seu banco de dados MySQL.

bash
Copy code
$host = 'localhost';
$usuario = 'seu-usuario';
$senha = 'sua-senha';
$banco = 'seu-banco-de-dados';
Abra o arquivo index.php em seu navegador e verifique se a tabela de usuários está sendo exibida corretamente.
Utilização
Este projeto utiliza a biblioteca DataTables jQuery para manipular a tabela de usuários. Você pode personalizar a tabela e suas funcionalidades alterando as opções no arquivo index.php.

Alguns exemplos de personalização são:

Adicionar novas colunas à tabela.
Utilizar diferentes tipos de ordenação.
Adicionar filtros de busca avançada.
Personalizar o layout da tabela com CSS.
Para mais informações e documentação completa, consulte o site oficial do DataTables jQuery: https://datatables.net/
