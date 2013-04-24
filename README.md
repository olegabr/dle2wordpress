dle2wordpress
=============

The DLE to Wordpress database conversion script

Скрипт преобразования базы данных [CMS DLE](http://dle-news.ru/) в базу данных [CMS Wordpress](http://wordpress.org/).
Преобразует всё: посты, комментарии, пользователей, опросы (требуется установить плагин [WP-Polls](http://wordpress.org/extend/plugins/wp-polls/)), категории, и все их связи с постами, теги, количество просмотров (требуется установить плагин [Page Views Count](http://wordpress.org/extend/plugins/page-views-count/)).

Для работы, скрипт надо распаковать в папку, доступную через web-сервер.
Перед запуском, скрипту надо настроить соединение с базами данных DLE и Wordpress. Делается это в файле `includes/configuration/configuration.inc.php`.
* `DB_CONNECTION_1` использется для подключения к DLE
* `DB_CONNECTION_2` использется для подключения к Wordpress
Кроме того, необходимо выполнить стандартную настройку [qcubed](http://qcu.be/) - указать значения для настроечных констант `__DOCROOT__` и `__SUBDIRECTORY__`

Если вы распаковали скрипт в корень web-сервера в папку `dle2wordpress`, проверить правильность установки вы можете, загрузив страницу по адресу `http://localhost/dle2wordpress/assets/_core/php/_devtools/start_page.php` (для примера). Если всё в порядке, среди прочего, там вы должны увидеть надпись `Current installation status: all OK.`

Для запуска конвертации загрузите в браузере страницу `http://localhost/dle2wordpress/convert` (для примера).
Конвертацию можно запускать повторно сколько угодно раз. Лишние записи в базе от этого не появятся.

В зависимости от размера конвертируемой базы, процесс конвертации может занимать достаточно продолжительное время. В таком случае вам может понадобиться увеличить значение настройки apache `max_execution_time`.
