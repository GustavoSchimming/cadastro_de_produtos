🛒 Desafio Pro: O Guardião dos Produtos (PHP & MySQL)
"Não entrará no meu banco de dados nenhum preço negativo, nem nome fantasma!" 🧙‍♂️✨

Bem-vindo(a) ao Desafio 10a! Se vieste à procura de um simples formulário, prepara-te... acabaste de assumir a missão de construir um sistema de cadastro à prova de erros, bugs e utilizadores distraídos!

🎯 A Missão
O teu objetivo nesta jornada é criar uma aplicação PHP conectada a um banco de dados MySQL que permita cadastrar novos produtos na loja — mas com regras de segurança rigorosas! 🛡️

📜 Checklist dos Requisitos:
[ ] Criar a Base de Dados: Criar a tabela produtos no banco exercicio usando o script SQL das instruções.

[ ] A Interface Visual: Exibir um formulário lindão solicitando:

📦 Nome do Produto

💰 Preço

[ ] O Leão de Chácara (Validação PHP):

❌ Nome vazio? Nem penses!

❌ Preço zero ou negativo? Aqui não! (Nada de dar produtos de graça).

[ ] Respostas do Sistema:

✅ Tudo certo: Exibir a mensagem mágica: "Produto cadastrado com sucesso!"

🛑 Deu ruim: Avisar o utilizador com elegância: "Erro: O preço deve ser um número positivo." (ou o motivo da falha).

🛠️ Tecnologias Utilizadas
PHP 🐘 (A maquinação por trás do pano)

MySQL 🐬 (Onde os teus produtos vão morar)

HTML/CSS 🎨 (Para o formulário não parecer feito em 1995)

🚀 Como Rodar o Projeto
Prepara o Terreno (MySQL):
Abre a tua ferramenta MySQL favorita (Workbench, phpMyAdmin, DBeaver, CLI...) e corre o script de criação no banco exercicio:

SQL
USE exercicio;

CREATE TABLE IF NOT EXISTS produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(250) NOT NULL,
    preco DECIMAL(10, 2) NOT NULL
);
Liga os Motores (Servidor Web):

Coloca os ficheiros na pasta do teu servidor local (htdocs do XAMPP, www do Wamp, etc.).

Inicia o Apache e o MySQL.

Hora da Ação:

Abre o teu navegador e acede a http://localhost/seu-projeto/index.php.

Tenta cadastrar uma "Coxinha" por R$ 5.00 e vê a mágica acontecer! 🥐

Tenta cadastrar nada por R$ -10.00 e assiste ao PHP a barrar a entrada com classe! 🚫

🧪 Testes de Sobrevivência (Try This!)
Teste	Entrada Esperada	Resultado Esperado
O Estudante Focado	Nome: Teclado RGB / Preço: 150.00	✅ "Produto cadastrado com sucesso!"
O Fantasma	Nome:  / Preço: 10.00	🛑 "Erro: O nome não pode estar vazio."
O Espertalhão	Nome: Mesa / Preço: -50.00	🛑 "Erro: O preço deve ser um número positivo."
🏆 Considerações Finalíssimas
Se o teu formulário não partiu, não deixou cadastrar coisas bizarras e gravou tudo bonito na base de dados... PARABÉNS! Ganhaste +100 pontos de experiência em validação no backend! 🚀🎉
