<?php
/*
******************************************************* *******************
* LogAnalyzer — http://loganalyzer.adiscon.com
* -------------------------------------------------- ----------------
*
* Авторское право (C) 2008-2010 Adiscon GmbH.
*
* Этот файл является частью LogAnalyzer.
*
* LogAnalyzer — бесплатное программное обеспечение: вы можете распространять его и/или модифицировать
* на условиях Стандартной общественной лицензии GNU, опубликованной
* Free Software Foundation, либо версия 3 Лицензии, либо
* (на ваш выбор) любая более поздняя версия.
*
* LogAnalyzer распространяется в надежде, что он будет полезен,
* но БЕЗ КАКИХ-ЛИБО ГАРАНТИЙ; даже без подразумеваемой гарантии
* КОММЕРЧЕСКАЯ ПРИГОДНОСТЬ или ПРИГОДНОСТЬ ДЛЯ ОПРЕДЕЛЕННОЙ ЦЕЛИ. См.
* Стандартная общественная лицензия GNU для более подробной информации.
*
* Вы должны были получить копию Стандартной общественной лицензии GNU.
* вместе с LogAnalyzer. Если нет, см. <http://www.gnu.org/licenses/>.
*
* Копию GPL можно найти в файле «КОПИРОВАНИЕ» в этом
* распределение.
******************************************************* *******************
*/
глобальный $контент;

// Глобальный материал
$content['LN_MAINTITLE'] = "Главный LogAnalyzer";
$content['LN_MAIN_SELECTSTYLE'] = "Выберите стиль";
$content['LN_GEN_LANGUAGE'] = "Выберите язык";
$content['LN_GEN_SELECTSOURCE'] = "Выберите источник";
$content['LN_GEN_MOREPAGES'] = "Доступно более одной страницы";
$content['LN_GEN_FIRSTPAGE'] = "Первая страница";
$content['LN_GEN_LASTPAGE'] = "Последняя страница";
$content['LN_GEN_NEXTPAGE'] = "Следующая страница";
$content['LN_GEN_PREVIOUSPAGE'] = "Предыдущая страница";
$content['LN_GEN_RECORDCOUNT'] = "Всего найдено записей";
$content['LN_GEN_PAGERSIZE'] = "Количество записей на странице";
$content['LN_GEN_PAGE'] = "Страница";
$content['LN_GEN_PREDEFINEDSEARCHES'] = "Предопределенные поиски";
$content['LN_GEN_SOURCE_DISK'] = "Файл на диске";
$content['LN_GEN_SOURCE_DB'] = "Собственный MYSQL";
$content['LN_GEN_SOURCE_CLICKHOUSE'] = "БД ClickHouse";
$content['LN_GEN_SOURCE_PDO'] = "База данных (PDO)";
$content['LN_GEN_SOURCE_MONGODB'] = "MongoDB Native";
$content['LN_GEN_RECORDSPERPAGE'] = "количество записей на странице";
$content['LN_GEN_PRECONFIGURED'] = "Предварительно сконфигурировано";
$content['LN_GEN_AVAILABLESEARCHES'] = "Доступные поиски";
$content['LN_GEN_DB_MYSQL'] = "Сервер MySQL";
$content['LN_GEN_DB_MSSQL'] = "Microsoft SQL Server";
$content['LN_GEN_DB_ODBC'] = "Источник базы данных ODBC";
$content['LN_GEN_DB_PGSQL'] = "PostgreSQL";
$content['LN_GEN_DB_OCI'] = "Интерфейс вызовов Oracle";
$content['LN_GEN_DB_DB2'] = "IBM DB2";
$content['LN_GEN_DB_FIREBIRD'] = "Firebird/Interbase 6";
$content['LN_GEN_DB_INFORMIX'] = "IBM Informix Dynamic Server";
$content['LN_GEN_DB_SQLITE'] = "SQLite 2";
$content['LN_GEN_SELECTVIEW'] = "Выбрать вид";
$content['LN_GEN_CRITERROR_UNKNOWNTYPE'] = "Тип источника "%1" еще не поддерживается LogAnalyzer. Это критическая ошибка, исправьте конфигурацию.";
$content['LN_GEN_ERRORRETURNPREV'] = "Нажмите здесь, чтобы вернуться на предыдущую страницу.";
$content['LN_GEN_ERRORDETAILS'] = "Сведения об ошибке:";
$content['LN_SOURCES_ERROR_WITHINSOURCE'] = "Проверка источника "%1" завершилась с ошибкой:<br>%2";
$content['LN_SOURCES_ERROR_EXTRAMSG'] = "Дополнительные сведения об ошибке:<br>%1";
$content['LN_ERROR_NORECORDS'] = "Записи системного журнала не найдены";
$content['LN_ERROR_FILE_NOT_FOUND'] = "Не удалось найти файл системного журнала";
$content['LN_ERROR_FILE_NOT_READABLE'] = "Файл системного журнала не доступен для чтения, доступ для чтения может быть запрещен";
$content['LN_ERROR_UNKNOWN'] = "Произошла неизвестная или необработанная ошибка (код ошибки "%1")";
$content['LN_ERROR_FILE_EOF'] = "Достигнут конец файла";
$content['LN_ERROR_FILE_BOF'] = "Достигнуто начало файла";
$content['LN_ERROR_FILE_CANT_CLOSE'] = "Не удается закрыть файл";
$content['LN_ERROR_UNDEFINED'] = "Неопределенная ошибка";
$content['LN_ERROR_EOS'] = "Достигнут конец потока";
$content['LN_ERROR_FILTER_NOT_MATCH'] = "Фильтр не соответствует ни одному результату";
$content['LN_ERROR_DB_CONNECTFAILED'] = "Не удалось подключиться к серверу базы данных";
$content['LN_ERROR_DB_CANNOTSELECTDB'] = "Не удалось найти настроенную базу данных";
$content['LN_ERROR_DB_QUERYFAILED'] = "Не удалось выполнить запрос данных";
$content['LN_ERROR_DB_NOPROPERTIES'] = "Свойства базы данных не найдены";
$content['LN_ERROR_DB_INVALIDDBMAPPING'] = "Неверное сопоставление полей данных";
$content['LN_ERROR_DB_INVALIDDBDRIVER'] = "Выбран недопустимый драйвер базы данных";
$content['LN_ERROR_DB_TABLENOTFOUND'] = "Не удалось найти сконфигурированную таблицу, возможно, написана ошибка или имена таблиц чувствительны к регистру";
$content['LN_ERROR_DB_DBFIELDNOTFOUND'] = "Не удалось найти сопоставление полей базы данных хотя бы для одного поля.";
$content['LN_GEN_SELECTEXPORT'] = "&gt; Выберите формат экспорта &lt;";
$content['LN_GEN_EXPORT_CVS'] = "CSV (через запятую)";
$content['LN_GEN_EXPORT_XML'] = "XML";
$content['LN_GEN_EXPORT_PDF'] = "PDF";
$content['LN_GEN_ERROR_EXPORING'] = "Ошибка экспорта данных";
$content['LN_GEN_ERROR_INVALIDEXPORTTYPE'] = "Выбран недопустимый формат экспорта или другие параметры неверны.";
$content['LN_GEN_ERROR_SOURCENOTFOUND'] = "Не удалось найти источник с идентификатором '%1'.";
$content['LN_GEN_MOREINFORMATION'] = "Дополнительная информация";
$content['LN_FOOTER_PAGERENDERED'] = "Страница отображается в";
$content['LN_FOOTER_DBQUERIES'] = "Запросы к БД";
$content['LN_FOOTER_GZIPENABLED'] = "GZIP включен";
$content['LN_FOOTER_SCRIPTTIMEOUT'] = "Время ожидания сценария";
$content['LN_FOOTER_SECONDS'] = "секунды";
$content['LN_WARNING_LOGSTREAMTITLE'] = "Предупреждение о потоке логов";
$content['LN_WARNING_LOGSTREAMDISK_TIMEOUT'] = "При чтении логстрима тайм-аут php-скрипта вынудил меня прервать работу.<br><br> Если вы хотите избежать этого, увеличьте тайм-аут скрипта LogAnalyzer в файле config.php. . Если пользовательская система установлена, вы можете сделать это в Центре администрирования.";
$content['LN_ERROR_FILE_NOMORETIME'] = "Времени на обработку больше не осталось";
$content['LN_WARNING_DBUPGRADE'] = "Требуется обновление базы данных";
$content['LN_WARNING_DBUPGRADE_TEXT'] = "Текущая версия установленной базы данных: '%1'.<br>Доступно обновление до версии '%2'.";
$content['LN_ERROR_REDIRECTABORTED'] = 'Автоматическое перенаправление на <a href="%1">страницу</a> было прервано из-за внутренней ошибки. Пожалуйста, ознакомьтесь с информацией об ошибке выше и свяжитесь с нашими форумами поддержки, если вам нужна помощь.';
$content['LN_DEBUGLEVEL'] = "Уровень отладки";
$content['LN_DEBUGMESSAGE'] = "Отладочное сообщение";
$content['LN_GEN_REPORT_OUTPUT_HTML'] = "Формат HTML";
$content['LN_GEN_REPORT_OUTPUT_PDF'] = "Формат PDF";
$content['LN_GEN_REPORT_TARGET_STDOUT'] = "Прямой вывод";
$content['LN_GEN_REPORT_TARGET_FILE'] = "Сохранить в файл";
$content['LN_GEN_REPORT_TARGET_EMAIL'] = "Отправить по электронной почте";
$content['LN_GEN_UNKNOWN'] = "Неизвестно";
$content['LN_GEN_AUTH_INTERNAL'] = "Внутренняя аутентификация";
$content['LN_GEN_AUTH_LDAP'] = "Аутентификация LDAP";

// Записи в верхнем меню
$content['LN_MENU_SEARCH'] = "Поиск";
$content['LN_MENU_SHOWEVENTS'] = "Показать события";
$content['LN_MENU_HELP'] = "Справка";
$content['LN_MENU_DOC'] = "Документация";
$content['LN_MENU_FORUM'] = "Форум поддержки";
$content['LN_MENU_WIKI'] = "Вики LogAnalyzer";
$content['LN_MENU_PROSERVICES'] = "Профессиональные услуги";
$content['LN_MENU_SEARCHINKB'] = "Поиск в базе знаний";
$content['LN_MENU_LOGIN'] = "Войти";
$content['LN_MENU_ADMINCENTER'] = "Центр администрирования";
$content['LN_MENU_LOGOFF'] = "Выйти из системы";
$content['LN_MENU_LOGGEDINAS'] = "Вы вошли как";
$content['LN_MENU_MAXVIEW'] = "Развернуть вид";
$content['LN_MENU_NORMALVIEW'] = "Нормализация вида";
$content['LN_MENU_STATISTICS'] = "Статистика";
$content['LN_MENU_CLICKTOEXPANDMENU'] = "Нажмите на значок, чтобы отобразить меню";
$content['LN_MENU_REPORTS'] = "Отчеты";

// Основной индексный сайт
$content['LN_ERROR_INSTALLFILEREMINDER'] = "Внимание! Вы еще НЕ удалили файл install.php из основного каталога LogAnalyzer!";
$content['LN_TOP_NUM'] = "Нет.";
$content['LN_TOP_UID'] = "uID";
$content['LN_GRID_POPUPDETAILS'] = "Подробности сообщения системного журнала с идентификатором "%1"";

$content['LN_SEARCH_USETHISBLA'] = "Используйте форму ниже, и ваш расширенный поиск появится здесь";
$content['LN_SEARCH_FILTER'] = "Поиск (фильтр):";
$content['LN_SEARCH_ADVANCED'] = "Расширенный поиск";
$content['LN_SEARCH'] = "Поиск";
$content['LN_SEARCH_RESET'] = "Сбросить поиск";
$content['LN_SEARCH_PERFORMADVANCED'] = "Выполнить расширенный поиск";
$content['LN_VIEW_MESSAGECENTERED'] = "Вернуться к просмотру без фильтров с этим сообщением вверху";
$content['LN_VIEW_RELATEDMSG'] = "Просмотреть связанные сообщения системного журнала";
$content['LN_VIEW_FILTERFOR'] = "Отфильтровать сообщение для ";
$content['LN_VIEW_SEARCHFOR'] = "Искать в Интернете ";
$content['LN_VIEW_SEARCHFORGOOGLE'] = "Искать в Google ";
$content['LN_GEN_MESSAGEDETAILS'] = "Сведения о сообщении";
$content['LN_VIEW_ADDTOFILTER'] = "Добавить '%1' в набор фильтров";
$content['LN_VIEW_EXCLUDEFILTER'] = "Исключить "%1" из набора фильтров";
$content['LN_VIEW_FILTERFORONLY'] = "Фильтровать только для '%1'";
$content['LN_VIEW_SHOWALLBUT'] = "Показать все, кроме '%1'";
$content['LN_VIEW_VISITLINK'] = "Открыть ссылку "%1" в новом окне";

$content['LN_HIGHLIGHT'] = "Выделить >>";
$content['LN_HIGHLIGHT_OFF'] = "Выделить <<";
$content['LN_HIGHLIGHT_WORDS'] = "Выделить слова через запятую";

$content['LN_AUTORELOAD'] = "Установить автоматическую перезагрузку";
$content['LN_AUTORELOAD_DISABLED'] = "Автоматическая перезагрузка отключена";
$content['LN_AUTORELOAD_PRECONFIGURED'] = "Преднастроенная автоматическая перезагрузка";
$content['LN_AUTORELOAD_SECONDS'] = "секунды";
$content['LN_AUTORELOAD_MINUTES'] = "минуты";

// Параметры фильтра
$content['LN_FILTER_DATE'] = "Диапазон дат и времени";
$content['LN_FILTER_DATEMODE'] = "Выберите режим";
$content['LN_DATEMODE_ALL'] = "Все время";
$content['LN_DATEMODE_RANGE'] = "Диапазон времени";
$content['LN_DATEMODE_LASTX'] = "Время x с сегодняшнего дня";
$content['LN_FILTER_DATEFROM'] = "Диапазон дат от";
$content['LN_FILTER_DATETO'] = "Диапазон дат до";
$content['LN_FILTER_TIMEFROM'] = "Временной диапазон от";
$content['LN_FILTER_TIMETO'] = "Диапазон времени до";
$content['LN_FILTER_DATELASTX'] = "Время с";
$content['LN_FILTER_ADD2SEARCH'] = "Добавить в поиск";
$content['LN_DATE_LASTX_HOUR'] = "Последний час";
$content['LN_DATE_LASTX_12HOURS'] = "Последние 12 часов";
$content['LN_DATE_LASTX_24HOURS'] = "Последние 24 часа";
$content['LN_DATE_LASTX_7DAYS'] = "Последние 7 дней";
$content['LN_DATE_LASTX_31DAYS'] = "Последний 31 день";
$content['LN_FILTER_FACILITY'] = "Системный журнал";
$content['LN_FILTER_SEVERITY'] = "Серьезность системного журнала";
$content['LN_FILTER_OTHERS'] = "Другие фильтры";
$content['LN_FILTER_MESSAGE'] = "Сообщение системного журнала";
$content['LN_FILTER_SYSLOGTAG'] = "Тег системного журнала";
$content['LN_FILTER_SOURCE'] = "Источник (имя хоста)";
$content['LN_FILTER_MESSAGETYPE'] = "Тип сообщения";

// Страница установки
$content['LN_CFG_DBSERVER'] = "Хост базы данных";
$content['LN_CFG_DBPORT'] = "Порт базы данных";
$content['LN_CFG_DBNAME'] = "Имя базы данных";
$content['LN_CFG_DBPREF'] = "Префикс таблицы";
$content['LN_CFG_DBUSER'] = "Пользователь базы данных";
$content['LN_CFG_DBPASSWORD'] = "Пароль базы данных";
$content['LN_CFG_PARAMMISSING'] = "Отсутствовал следующий параметр: ";
$content['LN_CFG_SOURCETYPE'] = "Тип источника";
$content['LN_CFG_DISKTYPEOPTIONS'] = "Параметры типа диска";
$content['LN_CFG_LOGLINETYPE'] = "Тип логлайна";
$content['LN_CFG_SYSLOGFILE'] = "Файл системного журнала";
$content['LN_CFG_DATABASETYPEOPTIONS'] = "Параметры типа базы данных";
$content['LN_CFG_DBTABLETYPE'] = "Тип таблицы";
$content['LN_CFG_DBSTORAGEENGINE'] = "Механизм хранения базы данных";
$content['LN_CFG_DBTABLENAME'] = "Имя таблицы базы данных";
$content['LN_CFG_NAMEOFTHESOURCE'] = "Имя источника";
$content['LN_CFG_FIRSTSYSLOGSOURCE'] = "Первый источник системного журнала";
$content['LN_CFG_DBROWCOUNTING'] = "Включить подсчет строк";
$content['LN_CFG_VIEW'] = "Выбрать вид";
$content['LN_CFG_DBUSERLOGINREQUIRED'] = "Требовать входа пользователя в систему";
$content['LN_CFG_MSGPARSERS'] = "Парсеры сообщений (через запятую)";
$content['LN_CFG_NORMALIZEMSG'] = "Нормализовать сообщение в парсерах";
$content['LN_CFG_SKIPUNPARSEABLE'] = "Пропускать неразборчивые сообщения (работает, только если настроены анализаторы msgparsers!)";
$content['LN_CFG_DBRECORDSPERQUERY'] = "Счетчик записей для запросов к базе данных";
$content['LN_CFG_LDAPServer'] = "Имя хоста/IP сервера LDAP";
$content['LN_CFG_LDAPPort'] = "Порт LDAP, по умолчанию 389 (636 для SSL)";
$content['LN_CFG_LDAPBaseDN'] = "Базовое DN для поиска LDAP";
$content['LN_CFG_LDAPSearchFilter'] = "Базовый поисковый фильтр";
$content['LN_CFG_LDAPUidAttribute'] = "Атрибут имени пользователя LDAP";
$content['LN_CFG_LDAPBindDN'] = "Привилегированный пользователь, используемый для запросов LDAP";
$content['LN_CFG_LDAPBindPassword'] = "Пароль привилегированного пользователя";
$content['LN_CFG_LDAPDefaultAdminUser'] = "Имя администратора LDAP по умолчанию";
$content['LN_CFG_AUTHTYPE'] = "Метод аутентификации";
$content['LN_GEN_AUTH_LDAP_OPTIONS'] = "Параметры аутентификации LDAP";

// Страница сведений
$content['LN_DETAILS_FORSYSLOGMSG'] = "Подробности сообщений системного журнала с идентификатором";
$content['LN_DETAILS_DETAILSFORMSG'] = "Подробности для идентификатора сообщения";
$content['LN_DETAIL_BACKTOLIST'] = "Вернуться к просмотру списка";
$content['LN_DETAIL_DYNAMIC_FIELDS'] = "Динамические поля";


// Вход на сайт
$content['LN_LOGIN_DESCRIPTION'] = "Используйте эту форму для входа в LogAnalyzer.";
$content['LN_LOGIN_TITLE'] = "Войти";
$content['LN_LOGIN_USERNAME'] = "Имя пользователя";
$content['LN_LOGIN_PASSWORD'] = "Пароль";
$content['LN_LOGIN_SAVEASCOOKIE'] = "Оставаться в системе";
$content['LN_LOGIN_ERRWRONGPASSWORD'] = "Неверное имя пользователя или пароль!";
$content['LN_LOGIN_USERPASSMISSING'] = "Имя пользователя или пароль не указаны";
$content['LN_LOGIN_LDAP_USERNOTFOUND'] = "Не удалось найти пользователя "%1"";
$content['LN_LOGIN_LDAP_USERCOULDNOTLOGIN'] = "Не удалось войти в систему пользователя "%1", ошибка LDAP: %2";
$content['LN_LOGIN_LDAP_PASSWORDFAIL'] = "Пользователь "%1" не может войти с данным паролем";
$content['LN_LOGIN_LDAP_SERVERFAILED'] = "Не удалось подключиться к серверу LDAP "%1"";
$content['LN_LOGIN_LDAP_USERBINDFAILED'] = "Не удалось установить связь с DN пользователя поиска "%1"";


// Установить сайт
$content['LN_INSTALL_TITLETOP'] = "Установка LogAnalyzer версии %1 — шаг %2";
$content['LN_INSTALL_TITLE'] = "Шаг установки %1";
$content['LN_INSTALL_ERRORINSTALLED'] = 'LogAnalyzer уже настроен!<br><br> Если вы хотите перенастроить LogAnalyzer, либо удалите текущий <B>config.php</B>, либо замените его пустым файлом.< br><br>Нажмите <A HREF="index.php">здесь</A>, чтобы вернуться на стартовую страницу pgpLogCon.';
$content['LN_INSTALL_FILEORDIRNOWRITEABLE'] = "По крайней мере один файл или каталог (или несколько) недоступны для записи, проверьте права доступа к файлу (chmod 666)!";
$content['LN_INSTALL_SAMPLECONFIGMISSING'] = "Отсутствует образец файла конфигурации "%1". Вы не полностью загрузили LogAnalyzer.";
$content['LN_INSTALL_ERRORCONNECTFAILED'] = "Не удалось подключиться к базе данных "%1"! Пожалуйста, проверьте имя сервера, порт, пользователя и пароль!";
$content['LN_INSTALL_ERRORACCESSDENIED'] = "Невозможно использовать базу данных "%1"! Если база данных не существует, создайте ее или проверьте права доступа пользователя!";
$content['LN_INSTALL_ERRORINVALIDDBFILE'] = "Ошибка, недопустимый файл определения базы данных (сокращенно!), имя файла '%1'! Проверьте, правильно ли загружен файл.";
$content['LN_INSTALL_ERRORINSQLCOMMANDS'] = "Ошибка, недопустимый файл определения базы данных (операторы sql не найдены!), имя файла '%1'!<br> Пожалуйста, проверьте, правильно ли загружен файл, или обратитесь за помощью на форумы LogAnalyzer!";
$content['LN_INSTALL_MISSINGUSERNAME'] = "Необходимо указать имя пользователя";
$content['LN_INSTALL_PASSWORDNOTMATCH'] = "Пароль не подходит или слишком короткий!";
$content['LN_INSTALL_FAILEDTOOPENSYSLOGFILE'] = "Не удалось открыть файл системного журнала "%1"! Проверьте, существует ли файл и имеет ли LogAnalyzer достаточные права на него<br>";
$content['LN_INSTALL_FAILEDCREATECFGFILE'] = "Не удалось создать файл конфигурации в "%1"! Проверьте права доступа к файлу!";
$content['LN_INSTALL_FAILEDREADINGFILE'] = "Ошибка чтения файла "%1"! Проверьте, существует ли файл!";
$content['LN_INSTALL_ERRORREADINGDBFILE'] = "Ошибка чтения файла определения базы данных по умолчанию в "%1"! Проверьте, существует ли файл!";
$content['LN_INSTALL_STEP1'] = "Шаг 1 - Предварительные условия";
$content['LN_INSTALL_STEP2'] = "Шаг 2 — Проверка прав доступа к файлу";
$content['LN_INSTALL_STEP3'] = "Шаг 3 - Базовая конфигурация";
$content['LN_INSTALL_STEP4'] = "Шаг 4. Создание таблиц";
$content['LN_INSTALL_STEP5'] = "Шаг 5. Проверка результатов SQL";
$content['LN_INSTALL_STEP6'] = "Шаг 6 - Создание основной учетной записи пользователя";
$content['LN_INSTALL_STEP7'] = "Шаг 7. Создайте первый источник сообщений системного журнала";
$content['LN_INSTALL_STEP8'] = "Шаг 8 - Готово";
$content['LN_INSTALL_STEP1_TEXT'] = 'Прежде чем вы начнете установку LogAnalyzer, программа установки должна сначала проверить несколько вещей.<br>Возможно, сначала вам придется исправить некоторые права доступа к файлам. <br><br>Нажмите <input type="submit" value="Далее">, чтобы начать тест!';
$content['LN_INSTALL_STEP2_TEXT'] = "Проверены права доступа к следующим файлам. Проверьте приведенные ниже результаты! <br>Вы можете использовать сценарий <B>configure.sh</B> из <B>contrib</B>. папку для установки разрешений для вас.";
$content['LN_INSTALL_STEP3_TEXT'] = "На этом шаге вы настраиваете базовые конфигурации для LogAnalyzer.";
$content['LN_INSTALL_STEP4_TEXT'] = 'Если вы достигли этого шага, соединение с базой данных было успешно проверено!<br><br> Следующим шагом будет создание необходимых таблиц базы данных, используемых пользовательской системой LogAnalyzer. Это может занять некоторое время!<br> <b>ВНИМАНИЕ</b>, если у вас уже есть установленный LogAnalyzer в этой базе данных с таким же префиксом таблицы, все ваши данные будут <b>ПЕРЕЗАПИСАНЫ</b>! Убедитесь, что вы используете новую базу данных или хотите перезаписать старую базу данных LogAnalyzer. <br><br><b>Нажмите <input type="submit" value="Next">, чтобы начать создание таблиц</b>';
$content['LN_INSTALL_STEP5_TEXT'] = "Таблицы созданы. Проверьте список ниже на наличие возможных ошибок";
$content['LN_INSTALL_STEP6_TEXT'] = "Теперь вы собираетесь создать начальную учетную запись пользователя LogAnalyzer.<br> Это будет первый пользователь с правами администратора, который потребуется для входа в LogAnalyzer и доступа к Центру администрирования!";
$content['LN_INSTALL_STEP8_TEXT'] = 'Поздравляем! Вы успешно установили LogAnalyzer :)! <br><br>Нажмите <a href="index.php">здесь</a>, чтобы перейти к установке.';
$content['LN_INSTALL_PROGRESS'] = "Ход установки: ";
$content['LN_INSTALL_FRONTEND'] = "Параметры внешнего интерфейса";
$content['LN_INSTALL_NUMOFSYSLOGS'] = "Количество сообщений системного журнала на странице";
$content['LN_INSTALL_MSGCHARLIMIT'] = "Ограничение количества символов сообщения для основного вида";
$content['LN_INSTALL_STRCHARLIMIT'] = "Ограничение на отображение символов для всех полей строкового типа";
$content['LN_INSTALL_SHOWDETAILPOP'] = "Показать всплывающее окно с подробностями сообщения";
$content['LN_INSTALL_AUTORESOLVIP'] = "Автоматически разрешенные IP-адреса (встроенные)";
$content['LN_INSTALL_USERDBOPTIONS'] = "Параметры пользовательской базы данных";
$content['LN_INSTALL_ENABLEUSERDB'] = "Включить базу данных пользователей";
$content['LN_INSTALL_SUCCESSSTATEMENTS'] = "Успешно выполненные операторы:";
$content['LN_INSTALL_FAILEDSTATEMENTS'] = "Ошибочные операторы:";
$content['LN_INSTALL_STEP5_TEXT_NEXT'] = "Теперь вы можете перейти к <B>следующему</B> шагу, добавив первого пользователя-администратора LogAnalyzer!";
$content['LN_INSTALL_STEP5_TEXT_FAILED'] = "Ошибка как минимум одного оператора, см. причины ошибки ниже";
$content['LN_INSTALL_ERRORMSG'] = "Сообщение об ошибке";
$content['LN_INSTALL_SQLSTATEMENT'] = "Выражение SQL";
$content['LN_INSTALL_CREATEUSER'] = "Создать учетную запись пользователя";
$content['LN_INSTALL_PASSWORD'] = "Пароль";
$content['LN_INSTALL_PASSWORDREPEAT'] = "Повторите пароль";
$content['LN_INSTALL_SUCCESSCREATED'] = "Пользователь успешно создан";
$content['LN_INSTALL_RECHECK'] = "Перепроверить";
$content['LN_INSTALL_FINISH'] = "Готово!";
$content['LN_INSTALL_LDAPCONNECTFAILED'] = "Не удалось подключиться к вашему серверу LDAP "%1".";
$content['LN_INSTALL_WARNINGMYSQL'] = "Для этой функции требуется сервер базы данных MYSQL. Другие механизмы баз данных не поддерживаются системой баз данных пользователей. Однако для источников журналов существует поддержка других систем баз данных.";
$content['LN_INSTALL_'] = "";

// Сайт конвертера
$content['LN_CONVERT_TITLE'] = "Шаг преобразователя конфигурации %1";
$content['LN_CONVERT_NOTALLOWED'] = "Войти";
$content['LN_CONVERT_ERRORINSTALLED'] = 'LogAnalyzer не разрешено преобразовывать ваши настройки в пользовательскую базу данных.<br><br> Если вы хотите преобразовать ваши настройки, добавьте следующую переменную в ваш config.php: <br><b> $CFG[\'UserDBConvertAllowed\'] = true;</b><br><br> Нажмите <A HREF="index.php">здесь</A>, чтобы вернуться на стартовую страницу pgpLogCon.';
$content['LN_CONVERT_STEP1'] = "Шаг 1 - Информация";
$content['LN_CONVERT_STEP2'] = "Шаг 2 — Создание таблиц";
$content['LN_CONVERT_STEP3'] = "Шаг 3. Проверка результатов SQL";
$content['LN_CONVERT_STEP4'] = "Шаг 4 - Создание основной учетной записи пользователя";
$content['LN_CONVERT_STEP5'] = "Шаг 5 - Импорт настроек в UserDB";
$content['LN_CONVERT_TITLETOP'] = "Преобразование параметров конфигурации LogAnalyzer - шаг ";
$content['LN_CONVERT_STEP1_TEXT'] = 'Этот сценарий позволяет импортировать существующую конфигурацию из файла <b>config.php</b>. Сюда входят настройки внешнего интерфейса, источники данных, настраиваемые представления и настраиваемые поиски. Выполняйте это преобразование только в том случае, если вы установили LogAnalyzer без системы UserDB и решили включить ее сейчас. <br><br><b>ЛЮБОЙ СУЩЕСТВУЮЩИЙ ЭКЗЕМПЛЯР ПОЛЬЗОВАТЕЛЬСКОЙ БД БУДЕТ ПЕРЕЗАПИСАН!</b><br><br><input type="submit" value="Нажмите здесь">, чтобы начать первый шаг преобразования! ';
$content['LN_CONVERT_STEP2_TEXT'] = 'Подключение к базе данных успешно проверено! <br><br>Следующим шагом будет создание необходимых таблиц базы данных для пользовательской системы LogAnalyzer. Это может занять некоторое время! <br><b>ВНИМАНИЕ</b>, если в этой базе данных уже установлена ​​установка LogAnalyzer с таким же префиксом таблицы, все ваши данные будут <b>ПЕРЕЗАПИСАННЫ</b>!<br> Убедитесь, что вы используете новую базу данных или вы хотите перезаписать старую базу данных LogAnalyzer.<br><br><b>Нажмите <input type="submit" value="Next">, чтобы начать создание таблиц</b>';
$content['LN_CONVERT_STEP5_TEXT'] = '<input type="submit" value="Нажмите здесь">, чтобы начать последний шаг преобразования. На этом этапе ваша существующая конфигурация из <b>config.php</b> будет импортирована в базу данных.';
$content['LN_CONVERT_STEP6'] = "Шаг 8 - Готово";
$content['LN_CONVERT_STEP6_TEXT'] = 'Поздравляем! Вы успешно преобразовали существующую установку LogAnalyzer :)!<br><br>Важно! Не забудьте УДАЛИТЬ ПЕРЕМЕННЫЕ <b>$CFG[\'UserDBConvertAllowed\'] = true;</b> из вашего файла config.php! <br><br>Вы можете нажать <a href="index.php">здесь</a>, чтобы перейти к установке LogAnalyzer.';
$content['LN_CONVERT_PROCESS'] = "Ход преобразования:";
$content['LN_CONVERT_ERROR_SOURCEIMPORT'] = "Критическая ошибка при импорте источников в базу данных, тип источника "%1" не поддерживается этой версией LogAnalyzer.";

// Статистика сайта
$content['LN_STATS_CHARTTITLE'] = "Лучшие %1 '%2', отсортированные по количеству сообщений";
$content['LN_STATS_COUNTBY'] = "Счетчик сообщений на "%1"";
$content['LN_STATS_OTHERS'] = "Все остальные";
$content['LN_STATS_TOPRECORDS'] = "Максимальное количество записей: %1";
$content['LN_STATS_GENERATEDAT'] = "Создано: %1";
// $content['LN_STATS_COUNTBYSYSLOGTAG'] = "Счетчик сообщений по SyslogTag";
$content['LN_STATS_GRAPH'] = "График";
$content['LN_GEN_ERROR_INVALIDFIELD'] = "Недопустимое имя поля";
$content['LN_GEN_ERROR_MISSINGCHARTFIELD'] = "Отсутствует имя поля";
$content['LN_GEN_ERROR_INVALIDTYPE'] = "Неверный или неизвестный тип диаграммы.";
$content['LN_ERROR_CHARTS_NOTCONFIGURED'] = "Диаграммы вообще не настроены.";
$content['LN_CHART_TYPE'] = "Тип диаграммы";
$content['LN_CHART_WIDTH'] = "Ширина диаграммы";
$content['LN_CHART_FIELD'] = "Поле диаграммы";
$content['LN_CHART_MAXRECORDS'] = "Счетчик лучших записей";
$content['LN_CHART_SHOWPERCENT'] = "Показать процентные данные";
$content['LN_CHART_TYPE_CAKE'] = "Торт (пирог)";
$content['LN_CHART_TYPE_BARS_VERTICAL'] = "Вертикальные бары";
$content['LN_CHART_TYPE_BARS_HORIZONTAL'] = "Полосы горизонтальные";
$content['LN_STATS_WARNINGDISPLAY'] = "Создание графики на больших источниках данных в настоящее время требует очень много времени. Это будет исправлено в более поздних версиях. Если обработка занимает слишком много времени, просто отмените запрос.";

// сайт asktheoracle
$content['LN_ORACLE_TITLE'] = "Запрашиваем у оракула "%1"";
$content['LN_ORACLE_HELP_FOR'] = "Это ссылки, которые оракул получил для вас";
$content['LN_ORACLE_HELP_TEXT'] = "<br><h3>Вы запросили у оракула дополнительную информацию о значении '%1' '%2'.</h3>
<p align=\"left\">Эта страница позволяет выполнять поиск по нескольким источникам журналов. %3
<br>Общая идея состоит в том, чтобы упростить поиск информации по конкретной теме во всех местах, где она может существовать.
</p>
<p align=\"left\">Полезным вариантом использования может быть попытка взлома, которую вы видите в веб-журнале. Нажмите на IP-адрес злоумышленника, чтобы открыть эту страницу поиска. Теперь вы можете как искать информацию о диапазоне IP-адресов, так и проверять другие журналы (например, брандмауэра или почты), если они содержат информацию о злоумышленнике. Мы надеемся, что это облегчит вам процесс анализа.
</p>
";
$content['LN_ORACLE_HELP_TEXT_EXTERNAL'] = "Он также позволяет выполнять постоянный поиск в некоторых внешних базах данных";
$content['LN_ORACLE_HELP_DETAIL'] = "Матрица ссылок для значения '%1' '%2'";
$content['LN_ORACLE_SEARCH'] = "Поиск"; // в поле '%1'";
$content['LN_ORACLE_SOURCENAME'] = "Имя источника";
$content['LN_ORACLE_FIELD'] = "Поле";
$content['LN_ORACLE_ONLINESEARCH'] = "Поиск в Интернете";
$content['LN_ORACLE_WHOIS'] = "Поиск в WHOIS значения '%1' '%2'";

// Строки отчета
$content['LN_GEN_ERROR_INVALIDOP'] = "Неверный или отсутствующий тип операции";
$content['LN_GEN_ERROR_INVALIDREPORTID'] = "Недействительный или отсутствующий идентификатор отчета";
$content['LN_GEN_ERROR_MISSINGSAVEDREPORTID'] = "Недопустимый или отсутствующий идентификатор сохраненного отчета";
$content['LN_GEN_ERROR_REPORTGENFAILED'] = "Не удалось создать отчет "%1" по следующей причине: %2";
$content['LN_GEN_ERROR_WHILEREPORTGEN'] = "Произошла ошибка при формировании отчета";
$content['LN_GEN_ERROR_REPORT_NODATA'] = "Данные для создания отчета не найдены";
$content['LN_GEN_ALL_OTHER_EVENTS'] = "Все остальные события";
$content['LN_REPORT_FOOTER_ENDERED'] = "Отчет обработан в";
$content['LN_REPORT_FILTERS'] = "Список используемых фильтров";
$content['LN_REPORT_FILTERTYPE_DATE'] = "Дата";
$content['LN_REPORT_FILTERTYPE_NUMBER'] = "Число";
$content['LN_REPORT_FILTERTYPE_STRING'] = "Строка";
$content['LN_GEN_SUCCESS_WHILEREPORTGEN'] = "Отчет успешно создан";
$content['LN_GEN_ERROR_REPORTFAILEDTOGENERATE'] = "Не удалось создать отчет, сведения об ошибке: %1";
$content['LN_GEN_SUCCESS_REPORTWASGENERATED_DETAILS'] = "Успешно создан отчет: %1";
$content['LN_ERROR_PATH_NOT_ALLOWED'] = "Файл не находится в списке разрешенных каталогов (по умолчанию разрешен только /var/log).";
$content['LN_ERROR_PATH_NOT_ALLOWED_EXTRA'] = "Файл '%1' не находится ни в одном из следующих каталогов: '%2'";

$content['LN_CMD_RUNREPORT'] = "Создание сохраненного отчета "%1"";
$content['LN_CMD_REPORTIDNOTFOUND'] = "Неверный идентификатор отчета "%1"";
$content['LN_CMD_SAVEDREPORTIDNOTFOUND'] = "Неверный идентификатор сохраненного отчета "%1"";
$content['LN_CMD_NOREPORTID'] = "Отсутствует идентификатор отчета";
$content['LN_CMD_NOSAVEDREPORTID'] = "Отсутствует идентификатор сохраненного отчета";
$content['LN_CMD_NOCMDPROMPT'] = "Ошибка, этот скрипт можно запустить только из командной строки.";
$content['LN_REPORT_GENERATEDTIME'] = "Отчет создан в: ";

$content['LN_REPORT_ACTIONS'] = "Выполнить действия с отчетом";
$content['LN_REPORTS_CAT'] = "Категория отчета";
$content['LN_REPORTS_ID'] = "Идентификатор отчета";
$content['LN_REPORTS_NAME'] = "Имя отчета";
$content['LN_REPORTS_DESCRIPTION'] = "Описание отчета";
$content['LN_REPORTS_HELP'] = "Справка";
$content['LN_REPORTS_HELP_CLICK'] = "Нажмите здесь, чтобы просмотреть подробное описание отчета";
$content['LN_REPORTS_INFO'] = "Показать дополнительную информацию";
$content['LN_REPORTS_SAVEDREPORTS'] = "Сохраненные отчеты";
$content['LN_REPORTS_ADMIN'] = "Администрирование отчетов";
$content['LN_REPORTMENU_LIST'] = "Список установленных отчетов";
$content['LN_REPORTMENU_ONLINELIST'] = "Все доступные отчеты";
$content['LN_REPORTS_INFORMATION'] = "На этой странице показан список установленных и доступных отчетов, включая сохраненные конфигурации отчетов.
<br/>Чтобы запустить отчет, нажмите на кнопки справа от сохраненных отчетов.
<br/>Внимание! Создание отчетов может занять очень много времени в зависимости от размера вашей базы данных.
";
$content['LN_REPORTS_CHECKLOGSTREAMSOURCE'] = "Проверить оптимизацию потока логов";
$content['LN_REPORTS_RUNNOW'] = "Запустить сохраненный отчет сейчас!";
$content['LN_REPORTS_ERROR_ERRORCHECKINGSOURCE'] = "Ошибка при проверке источника сохраненного отчета: %1";

?>