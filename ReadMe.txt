Hello! This is news website you can add or update or show or remove the news,

you will get a full list of news which order by the most recent publish date
you can also browse news by category (technoly, entertainment, life style, sport),
this project also support an restful api which you can request all news or specific new in json formart,

here is an instruction to run the project


This is laravel project so make sure you have laravel fully install in your computer,
and i use mysql as database

-first you may need to create a database name "news" and setup your username and password, but for faster testing i put username ="root" and password =""
-then navicagte to project directory and type in this command (php artisan migrate:refresh --seed) 
(we do this becus i have wrote database scheme and some fresh data for category without you trying to input)
-and when you successfully migrate please run this command (php artisan serve) to run website
then you are good to go !


here is url for news api:
/api/news
/api/news/id


best! good luck