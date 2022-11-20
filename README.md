### Objetivo ###
Website desenvolvido para controle pessoal das informações dos projetos elétricos.

### Tecnologias ###
- MySQL;
- PHP - POO;
- Javascript;
- Bootstrap.

### Etapa 1 ###
- Estruturação do projeto.

### Etapa 2 ###
- Através do mysqli_connect a conexão com banco de dados MySQL foi criada;
- Uma classe foi criada para controle das princiais informações do projeto, no caso, a class "Projeto";
- Na class Projeto você encontra os atributos de um projeto, as principais operações de um CRUD (em forma de métodos) e o construtor, método utiizado para criar objetos da classe.

### Etapa 3 ###
- Através da página de cadastrado, a partir dos dados digitados no formulário, o método de inserção é executado.

### Etapa 4 ###
- No index.php é executada uma query de exibição;
- Através de looping, as informações armazenadas no banco de dados são expostas através de uma tabela;

### Etapa 5 ###
- Ao clicar em um dos botões "excluir", com base no id setado no link, o método de exclusão é executado;
- Ao clicar no botão editar, você é redirecionado para uma página similar a de cadastro, porém, com base no id setado no link, as informações são resgatadas. Ao finalizar a editação dos dados, após clicar em editar, as informações são alteradas.

### Etapa 5 ###
- Bootstrap para estilização das páginas;
- Incorporação do arquivo navbar.php no projeto.





