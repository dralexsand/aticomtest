## Aticom test task

Задача: реализовать следующий функционал на свое усмотрение
Создать проект на Laravel.
Создать модель с полями, охватывающими столбцы из CSV файла.
Принимать и парсить этот файл в созданную модель одним из способов:

1. Используя страницу с формой для загрузки файла
2. Используя апи метод принимающий файл
   Вывести на отдельную страницу список выгруженных данных

Демо-файл: ./_src/demo_data.csv


```
git clone https://github.com/dralexsand/aticomtest.git 
cd aticomtest
cp .env.example .env

docker-compose up --build

docker exec aticomtest_php composer update -o

App run at the
http://127.0.0.1:8089/
```
