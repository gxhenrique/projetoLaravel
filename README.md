# Gerado de voz com texto

Estou usando a api do site "https://www.voicerss.org/"

Chave da api
apiKey = 2c19e0b6eb6342a996086d23ba949598

1: Clone ou baixe o projeto

2: Navegue até a pasta do projeto via cmd

#Instale algumes dependencias do projeto via cmd na pasta do projeto

3: composer install
3.1: copy .env.example .env
3.2: php artisan key:generate
3.3: php artisan serve

4: Inicie o servidor local do Laravel

php artisan serve

"http://127.0.0.1:8000"

Resoluão de algum problema com o gerador de voz

1: feche o servidor com (ctrl + c)

2: Execute o comando para criar o link de storage:

php artisan storage:link

3: Caso o CMD informe que o storage já existe, execute:

rmdir public\storage

4: Execute novamente 

php artisan storage:link

5: Execute novamente

php artisan serve







