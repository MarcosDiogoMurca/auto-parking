## Fluxo 
1) Página de formulário (front-end)
    - 1.1: Preencherá os campos como "Tipo do carro", "Cor", "Check-in" etc
    - 1.2: Apertará o botão de "Enviar"
2) Back-end
    - 1.1: Irá fazer umas validações dos dados, como por exemplo o checkin tem que ser uma data
    - 1.2: Salvará os dados no banco de dados
3) Front-end
    - 1.1: Apresentará uma página com os dados do carro preenchidos no formulário no passo 1.


## Comandos GIT:
1) git add . 
2) git commit -m "qual sua alteracao"
3) git push

---------------------------------------------------

## Aprendizado 
### 21/11/2023: Criação de migrations
criei models com o comando `php artisan make:migrate create_cars_table`


Arquivo `php.ini` excluiu ponto e virgula das linhas `extension=mysqli` e `extension=pdo_mysql`