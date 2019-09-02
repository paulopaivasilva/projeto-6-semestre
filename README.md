# projeto-6-semestre
Projeto em PHP do 6º semestre de Ciência da Computação da UNIP

- Baixar o Xampp: https://www.apachefriends.org/xampp-files/7.1.31/xampp-windows-x64-7.1.31-2-VC14-installer.exe
- Clonar os arquivos do repositório em C:\xampp\htdocs
- Executar no painel de controle do Xampp o Apache e o MySQL
- Acessar a porta padrão ou http://localhost:80

instruçõe do sistema

tabelas:

- usuarios;
- hospedes;
- hospedagens;
- quartos;
- historico.

páginas:

- login -> usuário, senha, nome -> usuarios
- cadastro -> nome, email, senha, cpf, cartao de credito, telefone, endereco -> hospedes
- cadastrar reserva -> nome, email, cpf, cartao de credito -> hospedes && quarto, status -> quartos && quarto, checkin, checkout -> historico
- consultar reserva -> nome, email -> hospedes && quarto, status(true) -> quartos

nomenclaturas:

- feature-nome-da-coisa
- hotfix-nome-da-coisa
- bugfix-nome-da-coisa