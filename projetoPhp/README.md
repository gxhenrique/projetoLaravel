# Gerado de voz com texto

Estou usando a api do site "https://www.voicerss.org/"
Para ultiliza o app basta baixa todos os arquivos, entrar na pasta via cmd, depois disso basta
executar o comando, "php artisan serve" para iniciar o serve.

Caso o app não gera  a voz do texto, basta fechar o serve, e ultilizar o comando "php artisan storage:link", Caso o cmd registre que storage link já esta instalado, use o comando "rmdir public\storage" é depois use novamento o comando "php artisan storage:link" e inicie o serve novamente.

Chave da api
apiKey = 2c19e0b6eb6342a996086d23ba949598

1 Clone ou baixe o projeto

2 Navegue até a pasta do projeto via cmd

3 instale o compser caso precise

4 Inicie o servidor local do Laravel

php artisan serve

"http://127.0.0.1:8000"

Resoluão de algum problema com o gerador de voz

1 feche o servidor com (ctrl + c)

2 Execute o comando para criar o link de storage:

php artisan storage:link

3 Caso o CMD informe que o storage já existe, execute:

rmdir public\storage

Execute novamente 

php artisan storage:link

Execute novamente

php artisan serve







