# CRUD em PHP
![image](https://github.com/user-attachments/assets/f7e3a0e8-105e-4590-8b67-676b5df1860c)

Projeto feito com arquitetura *monolítica*, utilizando padrão *MVC (Model-View-Controller)* e *módulos* em `JavaScript` +  design estilo retrô :D

## Funcionalidades
- CRUD;
- Opção de três temas diferentes;
- Geração de PDF utilizando a biblioteca [html2pdf](https://cdnjs.com/libraries/html2pdf.js/0.8.0).

## Tecnologias
- HTML;
- CSS;
- JavaScript;
- PHP;
- SQL.

> [!NOTE]
> O site e o banco de dados não estão hospedados em nenhum servidor.

## Como testar?
- Simule um servidor local, caso queira baixe o [xampp](https://www.apachefriends.org/pt_br/index.html) (ele já contém o `apache` e `mysql`);
- Entre na pasta `xampp/htdocs/` pelo terminal e execute o comando para clonar o repositório:
~~~cmd
git clone https://github.com/samyGoes/crud-php.git
~~~
> Você precisa ter o [GIT](https://git-scm.com/downloads) instalado para executar o comando acima.

- Entre na pasta `xampp/mysql/bin/` e execute o comando no terminal para importar o banco:
~~~cmd
mysql -u root -p < "caminho-até-a-pasta/xampp/htdocs/crud-php/banco.sql"
~~~
- Acesse `localhost/crud-php/` no navegador :)
