<?php
/*
************************************************** *******************
* LogAnalyzer - http://loganalyzer.adiscon.com
* ------------------------------------------------- ----------------
*
* Copyright (C) 2008-2010 Adiscon GmbH.
*
* Этот файл является частью LogAnalyzer.
*
* LogAnalyzer is free software: Вы можете его отредактировать и/или изменить
* Это под терминами GNU General Public License as published by
* the Free Software Foundation, ее версия 3 of the License, or
*(at your option) any later version.
*
* LogAnalyzer is distributed in hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY или FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*
* Вы должны получить у GNU General Public License
* подолгу с LogAnalyzer. If not, see <http://www.gnu.org/licenses/>.
*
* Извлечь из GPL можно найти в файле "COPYING" в этом
* distribution.
************************************************** *******************
*/
/*
Russian Translation
Sergiy Yakimchuck aka Yakim
yakim@yakim.org.ua
*/
global $content;

// Global Stuff
$content['LN_MAINTITLE'] = "Главная LogAnalyzer";
$content['LN_MAIN_SELECTSTYLE'] = "Выберите стиль";
$content['LN_GEN_LANGUAGE'] = "Выберите язык";
$content['LN_GEN_SELECTSOURCE'] = "Выберите источник";
$content['LN_GEN_MOREPAGES'] = "More than one Page available";
$content['LN_GEN_FIRSTPAGE'] = "Первая страница";
$content['LN_GEN_LASTPAGE'] = "Последняя страница";
$content['LN_GEN_NEXTPAGE'] = "Следующая страница";
$content['LN_GEN_PREVIOUSPAGE'] = "Предыдущая страница";
$content['LN_GEN_RECORDCOUNT'] = "Всего найдены записи";
$content['LN_GEN_PAGERSIZE'] = "Записи на странице";
$content['LN_GEN_PAGE'] = "Страница";
$content['LN_GEN_PREDEFINEDSEARCHES'] = "Predefined Searches";
$content['LN_GEN_SOURCE_DISK'] = "Файл на диске";
$content['LN_GEN_SOURCE_DB'] = "MYSQL Native";
$content['LN_GEN_SOURCE_PDO'] = "База данных (PDO)";
$content['LN_GEN_RECORDSPERPAGE'] = "записей на странице";
$content['LN_GEN_PRECONFIGURED'] = "Preconfigured";
$content['LN_GEN_AVAILABLESEARCHES'] = "Доступные поиски";
$content['LN_GEN_DB_MYSQL'] = "Mysql сервер";
$content['LN_GEN_DB_MSSQL'] = "Microsoft SQL сервер";
$content['LN_GEN_DB_ODBC'] = "ODBC Database Source";
$content['LN_GEN_DB_PGSQL'] = "PostgreSQL";
$content['LN_GEN_DB_OCI'] = "Oracle Call Interface";
$content['LN_GEN_DB_DB2'] = "IBM DB2";
$content['LN_GEN_DB_FIREBIRD'] = "Firebird/Interbase 6";
$content['LN_GEN_DB_INFORMIX'] = "IBM Informix Dynamic Server";
$content['LN_GEN_DB_SQLITE'] = "SQLite 2";
$content['LN_GEN_SELECTVIEW'] = "Выбрать отображение";
$content['LN_GEN_CRITERROR_UNKNOWNTYPE'] = "Тип источника '%1' еще не поддерживается LogAnalyzer. Это критическая ошибка, пожалуйста исправьте свою конфигурацию.";
$content['LN_GEN_ERRORRETURNPREV'] = "Нажмите сюда для возврата на предыдущую страницу.";
$content['LN_GEN_ERRORDETAILS'] = "Детали ошибки:";
$content['LN_SOURCES_ERROR_WITHINSOURCE'] = "Проверка источника '%1' вернула ошибку:<br>%2";
$content['LN_SOURCES_ERROR_EXTRAMSG'] = "Дополнительные сведения об ошибке:<br>%1";
$content['LN_ERROR_NORECORDS'] = "Не найдены записи syslog";
$content['LN_ERROR_FILE_NOT_FOUND'] = "Файл Syslog не найден";
$content['LN_ERROR_FILE_NOT_READABLE'] = "Файл Syslog Не доступен для чтения";
$content['LN_ERROR_UNKNOWN'] = "Случилась неизвестная ошибка (Error Code '%1')";
$content['LN_ERROR_FILE_EOF'] = "Достигаемый конец файла";
$content['LN_ERROR_FILE_BOF'] = "Достигнуто начало файла";
$content['LN_ERROR_FILE_CANT_CLOSE'] = "Невозможно закрыть файл";
$content['LN_ERROR_UNDEFINED'] = "Неопределенная ошибка";
$content['LN_ERROR_EOS'] = "Достигнут конец потока";
$content['LN_ERROR_FILTER_NOT_MATCH'] = "Фильтр не вернул результата";
$content['LN_ERROR_DB_CONNECTFAILED'] = "Ошибка соединения с сервером баз данных";
$content['LN_ERROR_DB_CANNOTSELECTDB'] = "Невозможно найти настроенную базу данных";
$content['LN_ERROR_DB_QUERYFAILED'] = "Невозможно выполнить запрос данных";
$content['LN_ERROR_DB_NOPROPERTIES'] = "Не найдено свойств базы данных";
$content['LN_ERROR_DB_INVALIDDBMAPPING'] = "Invalid datafield mappings";
$content['LN_ERROR_DB_INVALIDDBDRIVER'] = "Выбран неверный драйвер базы данных";
$content['LN_ERROR_DB_TABLENOTFOUND'] = "Нельзя find the configured table, может быть заблокирована или tablenames case sensitive";
$content['LN_ERROR_DB_DBFIELDNOTFOUND'] = "Database Field mapping for at least one field could no found.";

$content['LN_GEN_SELECTEXPORT'] = "&gt; Выберите формат экспорта &lt;";
$content['LN_GEN_EXPORT_CVS'] = "CVS (Comma separated)";
$content['LN_GEN_EXPORT_XML'] = "XML";
$content['LN_GEN_EXPORT_PDF'] = "PDF";
$content['LN_GEN_ERROR_EXPORING'] = "Ошибка экспорта данных";
$content['LN_GEN_ERROR_INVALIDEXPORTTYPE'] = "Выбран неверный формат экспорта или неправильные другие параметры.";
$content['LN_GEN_ERROR_SOURCENOTFOUND'] = "Источник с ID '%1' не найден.";
$content['LN_GEN_MOREINFORMATION'] = "Больше информации";
$content['LN_FOOTER_PAGERENDERED'] = "Страница сгенерирована за";
$content['LN_FOOTER_DBQUERIES'] = "DB queries";
$content['LN_FOOTER_GZIPENABLED'] = "GZIP включен";
$content['LN_FOOTER_SCRIPTTIMEOUT'] = "Задержка скрипта";
$content['LN_FOOTER_SECONDS'] = "секунд";
$content['LN_WARNING_LOGSTREAMTITLE'] = "Предупреждение Logstream";
$content['LN_WARNING_LOGSTREAMDISK_TIMEOUT'] = "While reading logstream, php script timeout forced me to abort at this point. . Если вы используете систему пользователя, вы можете установить, что в центре информации.";
$content['LN_ERROR_FILE_NOMORETIME'] = "Не более времени для процесса поставки";
$content['LN_WARNING_DBUPGRADE'] = "Нужно обновление базы данных";
$content['LN_WARNING_DBUPGRADE_TEXT'] = "Версия текущей базы данных '%1'.<br>Доступно обновление до версии '%2'.";
$content['LN_ERROR_REDIRECTABORTED'] = 'Автоматическая перенаправление на <a href="%1">page</a> была отменена по причине внутренней ошибки. Пожалуйста, посмотрите детали ошибки и обратитесь к форуму поддержки, если вам нужна помощь.';
$content['LN_DEBUGLEVEL'] = "Уровень отладки (Debug)";
$content['LN_DEBUGMESSAGE'] = "Сообщение отладки (Debug)";
$content['LN_GEN_REPORT_OUTPUT_HTML'] = "HTML формат";
$content['LN_GEN_REPORT_OUTPUT_PDF'] = "PDF формат";
$content['LN_GEN_REPORT_TARGET_STDOUT'] = "Прямой вывод";
$content['LN_GEN_REPORT_TARGET_FILE'] = "Сохранить в файл";
$content['LN_GEN_REPORT_TARGET_EMAIL'] = "Отправить по почте";
$content['LN_GEN_UNKNOWN'] = "Неизвестен";

// Topmenu Entries
$content['LN_MENU_SEARCH'] = "Поиск";
$content['LN_MENU_SHOWEVENTS'] = "Показать события";
$content['LN_MENU_HELP'] = "Помощь";
$content['LN_MENU_DOC'] = "Документация";
$content['LN_MENU_FORUM'] = "Форум поддержки";
$content['LN_MENU_WIKI'] = "LogAnalyzer Wiki";
$content['LN_MENU_PROSERVICES'] = "Профессиональные услуги";
$content['LN_MENU_SEARCHINKB'] = "Поиск в базе знаний";
$content['LN_MENU_LOGIN'] = "Вход";
$content['LN_MENU_ADMINCENTER'] = "Центр администрирования";
$content['LN_MENU_LOGOFF'] = "Выход";
$content['LN_MENU_LOGGEDINAS'] = "Вошли как";
$content['LN_MENU_MAXVIEW'] = "Максимизировать отображение";
$content['LN_MENU_NORMALVIEW'] = "Нормализовать отображение";
$content['LN_MENU_STATISTICS'] = "Статистика";
$content['LN_MENU_CLICKTOEXPANDMENU'] = "Нажмите на иконку для отображения меню";
$content['LN_MENU_REPORTS'] = "Отчеты";

// Main Index Site
$content['LN_ERROR_INSTALLFILEREMINDER'] = "Внимание! Вы не удалили 'install.php' из главного каталога LogAnalyzer!";
$content['LN_TOP_NUM'] = "Нет.";
$content['LN_TOP_UID'] = "uID";
$content['LN_GRID_POPUPDETAILS'] = "Детали для сообщения Syslog с ID '%1'";

$content['LN_SEARCH_USETHISBLA'] = "Используйте нижеприведенную форму для расширенного поиска и его результаты здесь появятся";
$content['LN_SEARCH_FILTER'] = "Поиск (фильтр):";
$content['LN_SEARCH_ADVANCED'] = "Расширенный поиск";
$content['LN_SEARCH'] = "Поиск";
$content['LN_SEARCH_RESET'] = "Сбросить поиск";
$content['LN_SEARCH_PERFORMADVANCED'] = "Выполнить расширенный поиск";
$content['LN_VIEW_MESSAGECENTERED'] = "Вернуться к нефильтрованному виду с этим сообщением вверху";
$content['LN_VIEW_RELATEDMSG'] = "Показать зависимые сообщения syslog";
$content['LN_VIEW_FILTERFOR'] = "Фильтровать сообщение за";
$content['LN_VIEW_SEARCHFOR'] = "Искать в онлайне";
$content['LN_VIEW_SEARCHFORGOOGLE'] = "Искать в Google";
$content['LN_GEN_MESSAGEDETAILS'] = "Детали сообщения";
$content['LN_VIEW_ADDTOFILTER'] = "Добавить '%1' в фильтр";
$content['LN_VIEW_EXCLUDEFILTER'] = "Удалить '%1' из фильтра";
$content['LN_VIEW_FILTERFORONLY'] = "Фильтровать только за '%1'";
$content['LN_VIEW_SHOWALLBUT'] = "Показать все, кроме '%1'";
$content['LN_VIEW_VISITLINK'] = "Открыть ссылку '%1' в новом окне";

$content['LN_HIGHLIGHT'] = "Подсветить >>";
$content['LN_HIGHLIGHT_OFF'] = "Подсветить <<";
$content['LN_HIGHLIGHT_WORDS'] = "Подсветить words comma separated";

$content['LN_AUTORELOAD'] = "Установить автообновление";
$content['LN_AUTORELOAD_DISABLED'] = "Отключить автообновление";
$content['LN_AUTORELOAD_PRECONFIGURED'] = "Настройка автообновления";
$content['LN_AUTORELOAD_SECONDS'] = "секунд";
$content['LN_AUTORELOAD_MINUTES'] = "минут";

// Filter Options
$content['LN_FILTER_DATE'] = "Промежуток даты и времени";
$content['LN_FILTER_DATEMODE'] = "Выбрать режим";
$content['LN_DATEMODE_ALL'] = "Все время";
$content['LN_DATEMODE_RANGE'] = "Промежуток времени";
$content['LN_DATEMODE_LASTX'] = "От времени x до сегодняшнего дня";
$content['LN_FILTER_DATEFROM'] = "От даты";
$content['LN_FILTER_DATETO'] = "К дате";
$content['LN_FILTER_TIMEFROM'] = "От времени";
$content['LN_FILTER_TIMETO'] = "До времени";
$content['LN_FILTER_DATELASTX'] = "До сих пор";
$content['LN_FILTER_ADD2SEARCH'] = "Добавить впоиске";
$content['LN_DATE_LASTX_HOUR'] = "Последний час";
$content['LN_DATE_LASTX_12HOURS'] = "Последние 12 часов";
$content['LN_DATE_LASTX_24HOURS'] = "Последние 24 часа";
$content['LN_DATE_LASTX_7DAYS'] = "Последние 7 дней";
$content['LN_DATE_LASTX_31DAYS'] = "Последние 31 дней";
$content['LN_FILTER_FACILITY'] = "Тип источника Syslog";
$content['LN_FILTER_SEVERITY'] = "Важность Syslog";
$content['LN_FILTER_OTHERS'] = "Другие фильтры";
$content['LN_FILTER_MESSAGE'] = "Сообщение Syslog";
$content['LN_FILTER_SYSLOGTAG'] = "Syslogtag";
$content['LN_FILTER_SOURCE'] = "Источник (Хост)";
$content['LN_FILTER_MESSAGETYPE'] = "Тип сообщения";

// Install Page
$content['LN_CFG_DBSERVER'] = "Хост базы данных";
$content['LN_CFG_DBPORT'] = "Порт базы данных";
$content['LN_CFG_DBNAME'] = "Название базы данных";
$content['LN_CFG_DBPREF'] = "Префикс базы данных";
$content['LN_CFG_DBUSER'] = "Пользователь базы данных";
$content['LN_CFG_DBPASSWORD'] = "Пароль базы дагих";
$content['LN_CFG_PARAMMISSING'] = "Следующие параметры не верны: ";
$content['LN_CFG_SOURCETYPE'] = "Тип источника";
$content['LN_CFG_DISKTYPEOPTIONS'] = "Опции типа диска";
$content['LN_CFG_LOGLINETYPE'] = "Тип Logline";
$content['LN_CFG_SYSLOGFILE'] = "Файл Syslog";
$content['LN_CFG_DATABASETYPEOPTIONS'] = "Опции типа базы данных";
$content['LN_CFG_DBTABLETYPE'] = "Тип таблицы";
$content['LN_CFG_DBSTORAGEENGINE'] = "Database Storage Engine";
$content['LN_CFG_DBTABLENAME'] = "Название таблицы базы данных";
$content['LN_CFG_NAMEOFTHESOURCE'] = "Название источника";
$content['LN_CFG_FIRSTSYSLOGSOURCE'] = "Первый источник Syslog";
$content['LN_CFG_DBROWCOUNTING'] = "Включить подсчет строк";
$content['LN_CFG_VIEW'] = "Выбрать отображение";
$content['LN_CFG_DBUSERLOGINREQUIRED'] = "Нужен логин пользователя";
$content['LN_CFG_MSGPARSERS'] = "Парсер сообщений (comma seperated)";
$content['LN_CFG_NORMALIZEMSG'] = "Normalize Message within Parsers";
$content['LN_CFG_SKIPUNPARSEABLE'] = "Skip unparseable messages (Только работают если msgparsers являются configured!)";
$content['LN_CFG_DBRECORDSPERQUERY'] = "Количество записей для запроса в базе данных";

// Details page
$content['LN_DETAILS_FORSYSLOGMSG'] = "Детали сообщения syslog с id";
$content['LN_DETAILS_DETAILSFORMSG'] = "Детали сообщения из id";
$content['LN_DETAIL_BACKTOLIST'] = "Вернуться к списку";

// Login Site
$content['LN_LOGIN_DESCRIPTION'] = "Воспользуйтесь этой формой для входа в LogAnalyzer.";
$content['LN_LOGIN_TITLE'] = "Вход";
$content['LN_LOGIN_USERNAME'] = "Пользователь";
$content['LN_LOGIN_PASSWORD'] = "Пароль";
$content['LN_LOGIN_SAVEASCOOKIE'] = "Остаться вложенным";
$content['LN_LOGIN_ERRWRONGPASSWORD'] = "Ошибочное имя пользователя или пароль!";
$content['LN_LOGIN_USERPASSMISSING'] = "Не введено имя пользователя или пароль";

// Install Site
$content['LN_INSTALL_TITLETOP'] = "Установка LogAnalyzer версии %1 - шаг %2";
$content['LN_INSTALL_TITLE'] = "Шаг установки %1";
$content['LN_INSTALL_ERRORINSTALLED'] = 'LogAnalyzer сконфигурирован!<br><br> Если вы хотите переконфигурировать LogAnalyzer, удалите текущий <B>config.php</B> или замените его пустым файлом.<br><br>Click <A HREF="index.php">here</A> Для возврата на начальную страницу pgpLogCon.';
$content['LN_INSTALL_FILEORDIRNOTWRITEABLE'] = "На большом одном файле или в directory (или более) он не запоминается, необходимо сконфигурировать файл регистраций (chmod 666)!";
$content['LN_INSTALL_SAMPLECONFIGMISSING'] = "Символ configuration file '%1' является обновленным. Вы не обновляли LogAnalyzer.";
$content['LN_INSTALL_ERRORCONNECTFAILED'] = "Ошибка соединения с базой данных '%1'! Проверьте имя сервера, порт, пользователя и пароль!";
$content['LN_INSTALL_ERRORACCESSDENIED'] = "Невозможно использовать базу данных '%1'! Если база данных не существует, создайте ее или проверьте права доступа пользователя!";
$content['LN_INSTALL_ERRORINVALIDDBFILE'] = "Ошибка, неправильный файл определения базы данных (слишком короткий!), файл '%1'! Пожалуйста, проверьте, был ли файл корректно загружен.";
$content['LN_INSTALL_ERRORINSQLCOMMANDS'] = "Ошибка, неправильный файл определения базы данных (не найден оператор sql!), файл '%1'!<br> Пожалуйста проверьте, был ли корректно загружен файл, или зайдите на форум LogAnalyzer для поддержки!";
$content['LN_INSTALL_MISSINGUSERNAME'] = "Имя пользователя должно быть задано";
$content['LN_INSTALL_PASSWORDNOTMATCH'] = "Пароли не совпадают или слишком короткие!";
$content['LN_INSTALL_FAILEDTOOPENSYSLOGFILE'] = "Ошибка открытия файла syslog '%1'! Проверьте, существует ли файл и права доступа LogAnalyzer к нему<br>";
$content['LN_INSTALL_FAILEDCREATECFGFILE'] = "Невозможно создать файл конфигурации в '%1'! Пожалуйста, проверьте права доступа!";
$content['LN_INSTALL_FAILEDREADINGFILE'] = "Ошибка чтения файла '%1'! Проверьте, существует ли файл!";
$content['LN_INSTALL_ERRORREADINGDBFILE'] = "Ошибка чтения файла определения базы данных по умолчанию в %1! Пожалуйста, проверьте, существует ли файл!";
$content['LN_INSTALL_STEP1'] = "Шаг 1 – предпосылка";
$content['LN_INSTALL_STEP2'] = "Шаг 2 - Проверка прав доступа к файлам";
$content['LN_INSTALL_STEP3'] = "Шаг 3 - Базовая конфигурация";
$content['LN_INSTALL_STEP4'] = "Шаг 4 - Создание таблиц";
$content['LN_INSTALL_STEP5'] = "Шаг 5 - Check SQL Results";
$content['LN_INSTALL_STEP6'] = "Шаг 6 - Создание главного аккаунта пользователя";
$content['LN_INSTALL_STEP7'] = "Шаг 7 - Создание первого источника для сообщений syslog";
$content['LN_INSTALL_STEP8'] = "Шаг 8 - Сделано";
$content['LN_INSTALL_STEP1_TEXT'] = 'Для того, чтобы запустить установку LogAnalyzer, Installer setup has check a this things first. <br><br>Click on <input type="submit" value="Next"> to start the Test!';
$content['LN_INSTALL_STEP2_TEXT'] = "Описанные файлы ограничений должны быть зафиксированы. Выполните результаты ниже! folder to set the permissions for you.";
$content['LN_INSTALL_STEP3_TEXT'] = "В этом положении, вы configure the basic configurations for LogAnalyzer.";
$content['LN_INSTALL_STEP4_TEXT'] = 'If you reached this step, database connection has be successfully verified! Это должно быть в то время как!<br><b>WARNING</b>, если вы имеете существующий LogAnalyzer installation in this database with same tableprefix, all your data will be <b>OVERWRITTEN</b>! Вы можете установить, что вы используете конкретный database, или вы хотите запустить вашу old LogAnalyzer database. <br><br><b>Click on <input type="submit" value="Next"> для запуска создания писем</b>';
$content['LN_INSTALL_STEP5_TEXT'] = "Tables должны быть созданы.
$content['LN_INSTALL_STEP6_TEXT'] = "Те, что сейчас для создания начального LogAnalyzer User Account.<br> Это должно быть первоначальным пользователем, которое должно быть необходимо в LoginAnalyzer and Access Admin Center!";
$content['LN_INSTALL_STEP8_TEXT'] = 'Congratulations! Вы успешно установили LogAnalyzer :)! <br><br>Click <a href="index.php">это</a> идти на вашу installation.';
$content['LN_INSTALL_PROGRESS'] = "Протек инсталляции: ";
$content['LN_INSTALL_FRONTEND'] = "Опции фронтенда";
$content['LN_INSTALL_NUMOFSYSLOGS'] = "Количество сообщений syslog на страницу";
$content['LN_INSTALL_MSGCHARLIMIT'] = "Message character limit for the main view";
$content['LN_INSTALL_STRCHARLIMIT'] = "Параметры отображения конфиденциальности для всех типов string strings";
$content['LN_INSTALL_SHOWDETAILPOP'] = "Показывать всплывающее окно с подробностями сообщения";
$content['LN_INSTALL_AUTORESOLVIP'] = "Автоматически решать IP адрес (inline)";
$content['LN_INSTALL_USERDBOPTIONS'] = "Настройка базы данных пользователей";
$content['LN_INSTALL_ENABLEUSERDB'] = "Разрешить базу данных пользователей";
$content['LN_INSTALL_SUCCESSSTATEMENTS'] = "Successfully executed statements:";
$content['LN_INSTALL_FAILEDSTATEMENTS'] = "Failed statements:";
$content['LN_INSTALL_STEP5_TEXT_NEXT'] = "Вы можете перейти на <B>следующий</B> шаг для добавления первого в LogAnalyzer пользователя с правами администратора!";
$content['LN_INSTALL_STEP5_TEXT_FAILED'] = "Небольшое количество статей failed,see error reasons below";
$content['LN_INSTALL_ERRORMSG'] = "Сообщение об ошибке";
$content['LN_INSTALL_SQLSTATEMENT'] = "SQL Statement";
$content['LN_INSTALL_CREATEUSER'] = "Создать аккаунт пользователя";
$content['LN_INSTALL_PASSWORD'] = "Пароль";
$content['LN_INSTALL_PASSWORDREPEAT'] = "Повторите пароль";
$content['LN_INSTALL_SUCCESSCREATED'] = "Пользователь успешно создан";
$content['LN_INSTALL_RECHECK'] = "Повторная проверка";
$content['LN_INSTALL_FINISH'] = "Окончание!";
$content['LN_INSTALL_'] = "";

// Converter Site
$content['LN_CONVERT_TITLE'] = "Конфигурация конвертора шаг %1";
$content['LN_CONVERT_NOTALLOWED'] = "Логин";
$content['LN_CONVERT_ERRORINSTALLED'] = 'LogAnalyzer не входить в переадресованную настройку в user database. ><b>$CFG[\'UserDBConvertAllowed\'] = true;</b><br><br> Click <A HREF="index.php">here</A> to return to pgpLogCon start page.' ;
$content['LN_CONVERT_STEP1'] = "Шаг 1 - Информация";
$content['LN_CONVERT_STEP2'] = "Шаг 2 - Создание таблиц";
$content['LN_CONVERT_STEP3'] = "Шаг 3 - Проверка результатов SQL";
$content['LN_CONVERT_STEP4'] = "Шаг 4 - Создание главного аккаунта пользователя";
$content['LN_CONVERT_STEP5'] = "Шаг 5 - Импорт настроек в базу данных пользователей";
$content['LN_CONVERT_TITLETOP'] = "Конвертация настроек LogAnalyzer - Шаг";
$content['LN_CONVERT_STEP1_TEXT'] = 'Этот скрипт позволяет импортировать существующую конфигурацию из файла <b>config.php</b>. Это включает в себя настройки фронтенда, источники данных, отображения и поиски, созданные пользователями. Выполните только это преобразованиеЕсли вы установили LogAnalyzer без UserDB System. <br><br><br>ЛЮБЫЕ СУЩЕСТВУЮЩИЕ НАСТРОЙКИ USERDB БУДУТ ПЕРЕЗАПИСАНЫ!</b><br><br><input type="submit" value="Нажмите сюда"> для запуска первого шага!';
$content['LN_CONVERT_STEP2_TEXT'] = 'The database connection has be successful verified! <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> LogAnalyzer User System. Этот might take a while! <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> fresh database, или вы хотите запустить ваш old LogAnalyzer database.
$content['LN_CONVERT_STEP5_TEXT'] = '<input type="submit" value="Click here"> чтобы запустить последний финал конверсии. В этом положении, ваш существующий параметр от <b>config.php</b> will be imported into the database.';
$content['LN_CONVERT_STEP6'] = "Шаг 8 - Выполнено";
$content['LN_CONVERT_STEP6_TEXT'] = 'Поздравляем! Вы успешно конвертировали существующий LogAnalyzer :)! <br><br>Важно! Не забудьте УДАЛИТЬ ПЕРЕМЕННЫЕ <b>$CFG[\'UserDBConvertAllowed\'] = true;</b> из вашего файла config.php ! <br><br>Вы можете нажать <a href="index.php">here</a> для перехода в LogAnalyzerinstallation.';
$content['LN_CONVERT_PROCESS'] = "Протекание конвертации:";
$content['LN_CONVERT_ERROR_SOURCEIMPORT'] = "Критическая ошибка при импорте источника в базу данных, the тип источника '%1' не поддерживается этой версией LogAnalyzer.";

// Stats Site
$content['LN_STATS_CHARTTITLE'] = "Top %1 '%2' ориентирован на messagecount";
$content['LN_STATS_COUNTBY'] = "Количество сообщений в '%1'";
$content['LN_STATS_OTHERS'] = "Все остальные";
$content['LN_STATS_TOPRECORDS'] = "Максимальное количество записей: %1";
$content['LN_STATS_GENERATEDAT'] = "Создано: %1";
// $content['LN_STATS_COUNTBYSYSLOGTAG'] = "Messagecount by SyslogTag";
$content['LN_STATS_GRAPH'] = "График";
$content['LN_GEN_ERROR_INVALIDFIELD'] = "Неверное имя поля";
$content['LN_GEN_ERROR_MISSINGCHARTFIELD'] = "Пропущенное название поля";
$content['LN_GEN_ERROR_INVALIDTYPE'] = "Неправильный или неизвестный тип диаграммы.";
$content['LN_ERROR_CHARTS_NOTCONFIGURED'] = "Не настроен никакой диаграммы.";
$content['LN_CHART_TYPE'] = "Тип диаграммы";
$content['LN_CHART_WIDTH'] = "Ширина диаграммы";
$content['LN_CHART_FIELD'] = "Поля диаграммы";
$content['LN_CHART_MAXRECORDS'] = "Количество записей (Top records)";
$content['LN_CHART_SHOWPERCENT'] = "Показать данные в процентах";
$content['LN_CHART_TYPE_CAKE'] = "круговая диаграмма (Pie)";
$content['LN_CHART_TYPE_BARS_VERTICAL'] = "Вертикальные столбцы";
$content['LN_CHART_TYPE_BARS_HORIZONTAL'] = "Горизонтальные полоски";
$content['LN_STATS_WARNINGDISPLAY'] = "Создание графиков из больших источников данных занимает много времени. Это будет исправлено в следующих версиях. Если процесс слишком затянулся, просто прервите запрос.";

// asktheoracle site
$content['LN_ORACLE_TITLE'] = "Запрос oracle для '%1'";
$content['LN_ORACLE_HELP_FOR'] = "Теперь они служат oracle got for you";
$content['LN_ORACLE_HELP_TEXT'] = "<br><h3>Используем oracle для более подробной информации о '%1' значение '%2'.</h3>
Эти страницы находят ваши исследования для поиска множества логических источников. %3
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> |
</p>
<U align=\"left\">Для useful use case may be a hack attempt you see in a web log. Нажмите на attacker's IP, который запускает эту поисковую stránku здесь. Теперь вы можете разместить информацию о IP-адресах, как мы проверяем другие logs (e.g. firewall или mail), если они содержат информацию о attacker. We hope that this facilitates your analysis process.
</p>
";
$content['LN_ORACLE_HELP_TEXT_EXTERNAL'] = "Для того, чтобы вы могли сконфигурировать исследования по некоторым внешним databázям";
$content['LN_ORACLE_HELP_DETAIL'] = "Link matrix для '%1' значение '%2'";
$content['LN_ORACLE_SEARCH'] = "Поиск"; // in '%1' Field";
$content['LN_ORACLE_SOURCENAME'] = "Название источника";
$content['LN_ORACLE_FIELD'] = "Поле";
$content['LN_ORACLE_ONLINESEARCH'] = "Поиск онлайн";
$content['LN_ORACLE_WHOIS'] = "WHOIS Lookup for '%1' value '%2'";

// Report Strings
$content['LN_GEN_ERROR_INVALIDOP'] = "Неправильный или пропущенный тип оператора";
$content['LN_GEN_ERROR_INVALIDREPORTID'] = "Не правильный или пропущенный id отчет";
$content['LN_GEN_ERROR_MISSINGSAVEDREPORTID'] = "Неправильный или пропущенный savedreport id";
$content['LN_GEN_ERROR_REPORTGENFAILED'] = "Неудача при создании отчета '%1' по следующей причине ошибки: %2";
$content['LN_GEN_ERROR_WHILEREPORTGEN'] = "Error occured while generating report";
$content['LN_GEN_ERROR_REPORT_NODATA'] = "Не найдены данные для создания отчета";
$content['LN_GEN_ALL_OTHER_EVENTS'] = "Все остальные события";
$content['LN_REPORT_FOOTER_ENDERED'] = "Отчет созданза";
$content['LN_REPORT_FILTERS'] = "Список использованных фильтров";
$content['LN_REPORT_FILTERTYPE_DATE'] = "Дата";
$content['LN_REPORT_FILTERTYPE_NUMBER'] = "Число";
$content['LN_REPORT_FILTERTYPE_STRING'] = "Строка";
$content['LN_GEN_SUCCESS_WHILEREPORTGEN'] = "Отчет был успешно создан";
$content['LN_GEN_ERROR_REPORTFAILEDTOGENERATE'] = "Неудача при создании отчета, детали ошибки: %1";
$content['LN_GEN_SUCCESS_REPORTWASGENERATED_DETAILS'] = "Успешно создан отчет: %1";

$content['LN_CMD_RUNREPORT'] = "Создание сохраненного отчета '%1'";
$content['LN_CMD_REPORTIDNOTFOUND'] = "Неверный ID отчета'%1'";
$content['LN_CMD_SAVEDREPORTIDNOTFOUND'] = "Неправильно SavedReport ID '%1'";
$content['LN_CMD_NOREPORTID'] = "Пропущенный ID отчета";
$content['LN_CMD_NOSAVEDREPORTID'] = "Пропущенный SavedReport ID";
$content['LN_CMD_NOCMDPROMPT'] = "Ошибка, этот скрипт может быть запущен только из командной строки.";
$content['LN_REPORT_GENERATEDTIME'] = "Отчет создан в: ";

$content['LN_REPORT_ACTIONS'] = "Запустить создание отчета";
$content['LN_REPORTS_CAT'] = "Категория отчета";
$content['LN_REPORTS_ID'] = "ID отчета";
$content['LN_REPORTS_NAME'] = "Название отчета";
$content['LN_REPORTS_DESCRIPTION'] = "Описание отчета";
$content['LN_REPORTS_HELP'] = "Помощь";
$content['LN_REPORTS_HELP_CLICK'] = "Нажмите здесь для подробного описания отчета";
$content['LN_REPORTS_INFO'] = "Показать больше информации";
$content['LN_REPORTS_SAVEDREPORTS'] = "Сохраненные отчеты";
$content['LN_REPORTS_ADMIN'] = "Администрирование отчетов";
$content['LN_REPORTMENU_LIST'] = "Список установленных отчетов";
$content['LN_REPORTMENU_ONLINELIST'] = "Все доступные отчеты";
$content['LN_REPORTS_INFORMATION'] = "На этой странице показан список установленных и доступных отчетов, включая сохраненные настройки отчетов.
<br/>Для создания отчета нажмите кнопку справа от сохраненного отчета.
<br/>Внимание! Создание отчета может занять значительное время в зависимости от размера вашей базы данных.
";
$content['LN_REPORTS_CHECKLOGSTREAMSOURCE'] = "Проверить оптимизацию Logstream";


?>