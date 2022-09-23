# rsyslog
Файлы настроек rsyslog

# Внимание !
Для корректной записи логов Windows в кодировке cp1251 в базу необходимо прописать в файл конфигурации сервера Mysql или MariaDB следующие строки в разделы [server] или [mysql] или [mariadb]

# Вариант 1 (проверено на Oracle Linux 8.6, РАБОТАЕТ)

init_connect='SET collation_connection = utf8_general_ci'

init_connect='SET NAMES utf8'

character-set-server=utf8

collation-server=utf8_general_ci

skip-character-set-client-handshake

# Вариант 2

init_connect='SET collation_connection = utf8_unicode_ci'

init_connect='SET NAMES utf8'

character-set-server=utf8

collation-server=utf8_unicode_ci

skip-character-set-client-handshake 

Взято из http://gahcep.github.io/blog/2013/01/05/mysql-utf8/

# В LogAnalayzer установить кодировку utf8

# Rsyslog удаление старых записей в базе

Хранить данные нужно за последние 30 дней. Стырые нужно удалять, сделать это можно командой

mysql -u <user> -p<pass> -e 'DELETE FROM SystemEvents WHERE ReceivedAt < date_add(current_date, interval -30 day)' <Syslog-DATABASE>

Добавляем ее в cron

crontab -e

0 01 * * * mysql -u _user_ -p_pass_ -e 'DELETE FROM SystemEvents WHERE ReceivedAt < date_add(current_date, interval -30 day)' Syslog