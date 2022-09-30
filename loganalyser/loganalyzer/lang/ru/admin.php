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
global $content;

// Глобальный материал
$content['LN_ADMINMENU_HOMEPAGE'] = "Назад к просмотру событий";
$content['LN_ADMINMENU_GENOPT'] = "Настройки";
$content['LN_ADMINMENU_SOURCEOPT'] = "Источники";
$content['LN_ADMINMENU_VIEWSOPT'] = "Просмотры";
$content['LN_ADMINMENU_SEARCHOPT'] = "Поиски";
$content['LN_ADMINMENU_USEROPT'] = "Пользователи";
$content['LN_ADMINMENU_GROUPOPT'] = "Группы";
$content['LN_ADMINMENU_CHARTOPT'] = "Графики";
$content['LN_ADMINMENU_FIELDOPT'] = "Поля";
$content['LN_ADMINMENU_DBMAPPINGOPT'] = "DBMappings";
$content['LN_ADMINMENU_MSGPARSERSOPT'] = "Парсеры сообщений";
$content['LN_ADMINMENU_REEPORTSOPT'] = "Модули отчетов";
$content['LN_ADMIN_CENTER'] = "Центр администрирования";
$content['LN_ADMIN_UNKNOWNSTATE'] = "Неизвестное состояние";
$content['LN_ADMIN_ERROR_NOTALLOWED'] = "Вам не разрешен доступ к этой странице с вашим уровнем пользователя.";
$content['LN_DELETEYES'] = "Да";
$content['LN_DELETENO'] = "Нет";
$content['LN_GEN_ACTIONS'] = "Доступные действия";
$content['LN_ADMIN_SEND'] = "Отправить изменения";
$content['LN_GEN_USERONLY'] = "Только пользователь";
$content['LN_GEN_USERONLYNAME'] = "Пользователь '%1'";
$content['LN_GEN_GROUPONLY'] = "Только группа";
$content['LN_GEN_GLOBAL'] = "Глобальный";
$content['LN_GEN_USERONLY_LONG'] = "Только для меня <br>(доступно только вашему пользователю)";
$content['LN_GEN_GROUPONLY_LONG'] = "Для этой группы <br>(доступно только для выбранной группы)";
$content['LN_GEN_GROUPONLYNAME'] = "Группа '%1'";
$content['LN_ADMIN_POPUPHELP'] = "Подробнее об этой функции";
$content['LN_ADMIN_DBSTATS'] = "Показать статистику базы данных.";
$content['LN_ADMIN_CLEARDATA'] = "Если вам нужно удалить старые записи данных, используйте эту функцию.";
$content['LN_UPDATE_AVAILABLE'] = "Доступно обновление";
$content['LN_UPDATE_INSTALLEDVER'] = "Установленная версия: ";
$content['LN_UPDATE_AVAILABLEVER'] = "Доступная версия: ";
$content['LN_UPDATE_LINK'] = "Нажмите здесь, чтобы получить обновление";
$content['LN_ADMIN_RESULTREDIRECT'] = "Вы будете перенаправлены на <A HREF='%1'>эту страницу</A> через %2 секунды.";
$content['LN_ADMIN_RESULTCLICK'] = "Нажмите <A HREF='%1'>здесь</A>, чтобы продолжить.";
$content['LN_ADMIN_GOBACK'] = "Вернуться";

// Общие настройки
$content['LN_ADMIN_GLOBFRONTEND'] = "Глобальные параметры внешнего интерфейса";
$content['LN_ADMIN_USERFRONTEND'] = "Опции пользовательского интерфейса";
$content['LN_ADMIN_MISC'] = "Разные параметры";
$content['LN_GEN_SHOWDEBUGMSG'] = "Показать отладочные сообщения";
$content['LN_GEN_DEBUGGRIDCOUNTER'] = "Показать счетчик сетки отладки";
$content['LN_GEN_SHOWPAGERENDERSTATS'] = "Показать статистику Pagerender";
$content['LN_GEN_ENABLEGZIP'] = "Включить сжатый вывод GZIP";
$content['LN_GEN_DEBUGUSERLOGIN'] = "Отладка имени пользователя";
$content['LN_GEN_WEBSTYLE'] = "Выбранный по умолчанию стиль";
$content['LN_GEN_SELLLANGUAGE'] = "Язык, выбранный по умолчанию";
$content['LN_GEN_PREPENDTITLE'] = "Добавить эту строку в начало заголовка";
$content['LN_GEN_USETODAY'] = "Использовать сегодня и вчера в полях времени";
$content['LN_GEN_DETAILPOPUPS'] = "Используйте всплывающее окно для отображения полной информации о сообщении";
$content['LN_GEN_MSGCHARLIMIT'] = "Ограничение количества символов сообщения в главном окне";
$content['LN_GEN_STRCHARLIMIT'] = "Ограничение на отображение символов для всех полей строкового типа";
$content['LN_GEN_ENTRIESPERPAGE'] = "Количество записей на странице";
$content['LN_GEN_AUTORELOADSECONDS'] = "Включить автоперезагрузку через несколько секунд";
$content['LN_GEN_ADMINCHANGEWAITTIME'] = "Время перезагрузки в панели администратора";
$content['LN_GEN_IPADRRESOLVE'] = "Разрешить IP-адреса с помощью DNS";
$content['LN_GEN_CUSTBTNCAPT'] = "Заголовок пользовательского поиска";
$content['LN_GEN_CUSTBTNSRCH'] = "Строка пользовательского поиска";
$content['LN_GEN_SUCCESSFULLYSAVED'] = "Значения конфигурации успешно сохранены";
$content['LN_GEN_INTERNAL'] = "Внутренний";
$content['LN_GEN_DISABLED'] = "Функция отключена";
$content['LN_GEN_CONFIGFILE'] = "Файл конфигурации";
$content['LN_GEN_ACCESSDENIED'] = "Доступ к этой функции запрещен";
$content['LN_GEN_DEFVIEWS'] = "Выбранный вид по умолчанию";
$content['LN_GEN_DEFSOURCE'] = "Выбранный по умолчанию сурце";
$content['LN_GEN_DEFFONT'] = "Шрифт по умолчанию";
$content['LN_GEN_DEFFONTSIZE'] = "Размер шрифта по умолчанию";
$content['LN_GEN_SUPPRESSDUPMSG'] = "Подавлять повторяющиеся сообщения";
$content['LN_GEN_TREATFILTERSTRUE'] = "Считать фильтры ненайденных полей истинными";
$content['LN_GEN_INLINESEARCHICONS'] = "Показывать значки онлайн-поиска в полях";
$content['LN_GEN_OPTIONNAME'] = "Имя параметра";
$content['LN_GEN_GLOBALVALUE'] = "Глобальное значение";
$content['LN_GEN_PERSONALVALUE'] = "Личная (Пользовательская) ценность";
$content['LN_GEN_DISABLEUSEROPTIONS'] = "Нажмите здесь, чтобы отключить личные параметры";
$content['LN_GEN_ENABLEUSEROPTIONS'] = "Нажмите здесь, чтобы включить личные параметры";
$content['LN_ADMIN_GLOBALONLY'] = "Только глобальные параметры";
$content['LN_GEN_DEBUGTOSYSLOG'] = "Отправить отладку на локальный сервер системного журнала";
$content['LN_GEN_POPUPMENUTIMEOUT'] = "Время ожидания всплывающего меню в миллисекундах";
$content['LN_ADMIN_SCRIPTTIMEOUT'] = "Время ожидания сценария PHP в секундах";
$content['LN_GEN_INJECTHTMLHEADER'] = "Вставьте этот HTML-код в область &lt;head&gt;.";
$content['LN_GEN_INJECTBODYHEADER'] = "Вставьте этот HTML-код в начало области &lt;body&gt;.";
$content['LN_GEN_INJECTBODYFOOTER'] = "Вставьте этот html-код в конец области &lt;body&gt;.";
$content['LN_ADMIN_PHPLOGCON_LOGOURL'] = "Дополнительный URL-адрес логотипа LogAnalyzer. Оставьте пустым, чтобы использовать логотип по умолчанию.";
$content['LN_ADMIN_ERROR_READONLY'] = "Это пользователь ТОЛЬКО ДЛЯ ЧТЕНИЯ, вам не разрешено выполнять какие-либо операции по изменению.";
$content['LN_ADMIN_ERROR_NOTALLOWEDTOEDIT'] = "Вы не можете редактировать этот элемент конфигурации.";
$content['LN_ADMIN_USEPROXYSERVER'] = "Оставьте пустым, если вы не хотите использовать прокси-сервер! Если указано допустимое значение прокси-сервера (например, '127.0.0.1:8080'), LogAnalyzer будет использовать этот сервер для удаленных запросов, таких как функция проверки обновлений.";
$content['LN_ADMIN_DEFAULTENCODING'] = "Кодировка символов по умолчанию";
$content['LN_GEN_CONTEXTLINKS'] = "Включить контекстные ссылки (вопросительные знаки)";
$content['LN_GEN_DISABLEADMINUSERS'] = "Отключить панель администратора для обычных пользователей";

// Пользовательский центр
$content['LN_USER_CENTER'] = "Параметры пользователя";
$content['LN_USER_ID'] = "ID";
$content['LN_USER_NAME'] = "Имя пользователя";
$content['LN_USER_ADD'] = "Добавить пользователя";
$content['LN_USER_EDIT'] = "Редактировать пользователя";
$content['LN_USER_DELETE'] = "Удалить пользователя";
$content['LN_USER_PASSWORD1'] = "Пароль";
$content['LN_USER_PASSWORD2'] = "Подтвердите пароль";
$content['LN_USER_ERROR_IDNOTFOUND'] = "Ошибка, пользователь с идентификатором '%1' не найден";
$content['LN_USER_ERROR_DONOTDELURSLF'] = "Ошибка, вы не можете УДАЛИТЬ СЕБЯ!";
$content['LN_USER_ERROR_DELUSER'] = "Не удалось удалить пользователя с идентификатором '%1'!";
$content['LN_USER_ERROR_INVALIDID'] = "Ошибка, неверный идентификатор, пользователь не найден";
$content['LN_USER_ERROR_HASBEENDEL'] = "Пользователь '%1' успешно удален!";
$content['LN_USER_ERROR_USEREMPTY'] = "Ошибка, имя пользователя пусто";
$content['LN_USER_ERROR_USERNAMEMETAKEN'] = "Ошибка, это имя пользователя уже занято!";
$content['LN_USER_ERROR_PASSSHORT'] = "Ошибка, пароль слишком короткий или не совпадает";
$content['LN_USER_ERROR_HASBEENADDED'] = "Пользователь '%1' успешно добавлен";
$content['LN_USER_ERROR_HASBEENEDIT'] = "Пользователь '%1' успешно изменен";
$content['LN_USER_ISADMIN'] = "Администратор?";
$content['LN_USER_ADDEDIT'] = "Добавить/редактировать пользователя";
$content['LN_USER_WARNREMOVEADMIN'] = "Вы собираетесь отозвать свои административные привилегии. Вы действительно хотите удалить свой статус администратора?";
$content['LN_USER_WARNDELETEUSER'] = "Вы уверены, что хотите удалить пользователя '%1'? Все его личные настройки также будут удалены.";
$content['LN_USER_ERROR_INVALIDSESSIONS'] = "Недействительный сеанс пользователя.";
$content['LN_USER_ERROR_SETTINGFLAG'] = "Ошибка установки флага, неверный идентификатор или пользователь не найден";
$content['LN_USER_WARNRADYONLYADMIN'] = "Вы собираетесь сделать свою учетную запись доступной только для чтения! Это не позволит вам изменить какие-либо настройки! Вы уверены, что хотите продолжить?";
$content['LN_USER_ISREADONLY'] = "Пользователь только для чтения?";
$content['LN_USER_SETISADMIN'] = "Переключить состояние администратора";
$content['LN_USER_SETISREADONLY'] = "Переключить состояние только для чтения";

// Центр группы
$content['LN_GROUP_CENTER'] = "Центр группы";
$content['LN_GROUP_ID'] = "ID";
$content['LN_GROUP_NAME'] = "Имя группы";
$content['LN_GROUP_DESCRIPTION'] = "Описание группы";
$content['LN_GROUP_TYPE'] = "Тип группы";
$content['LN_GROUP_ADD'] = "Добавить группу";
$content['LN_GROUP_EDIT'] = "Редактировать группу";
$content['LN_GROUP_DELETE'] = "Удалить группу";
$content['LN_GROUP_NOGROUPS'] = "Группы еще не добавлены";
$content['LN_GROUP_ADDEDIT'] = "Добавить/редактировать группу";
$content['LN_GROUP_ERROR_GROUPEMPTY'] = "Имя группы не может быть пустым.";
$content['LN_GROUP_ERROR_GROUPNAMETAKEN'] = "Имя группы уже занято.";
$content['LN_GROUP_HASBEENADDED'] = "Группа '%1' успешно добавлена.";
$content['LN_GROUP_ERROR_IDNOTFOUND'] = "Не удалось найти группу с идентификатором '%1'.";
$content['LN_GROUP_ERROR_HASBEENEDIT'] = "Группа '%1' успешно изменена.";
$content['LN_GROUP_ERROR_INVALIDGROUP'] = "Ошибка, яневерный идентификатор, группа не найдена";
$content['LN_GROUP_WARNDELETEGROUP'] = "Вы уверены, что хотите удалить группу '%1'? Все настройки группы также будут удалены.";
$content['LN_GROUP_ERROR_DELGROUP'] = "Не удалось удалить группу с идентификатором '%1'!";
$content['LN_GROUP_ERROR_HASBEENDEL'] = "Группа '%1' успешно удалена!";
$content['LN_GROUP_MEMBERS'] = "Члены группы: ";
$content['LN_GROUP_ADDUSER'] = "Добавить пользователя в группу";
$content['LN_GROUP_ERROR_USERIDMISSING'] = "Идентификатор пользователя отсутствует.";
$content['LN_GROUP_USERHASBEENADDEDGROUP'] = "Пользователь '%1' успешно добавлен в группу '%2'";
$content['LN_GROUP_ERRORNOMOREUSERS'] = "Нет больше доступных пользователей, которых можно добавить в группу '%1'";
$content['LN_GROUP_USER_ADD'] = "Добавить пользователя в группу";
$content['LN_GROUP_USERDELETE'] = "Удалить пользователя из группы";
$content['LN_GROUP_ERRORNOUSERSINGROUP'] = "В этой группе '%1' нет пользователей для удаления";
$content['LN_GROUP_ERROR_REMUSERFROMGROUP'] = "Не удалось удалить пользователя '%1' из группы '%2'";
$content['LN_GROUP_USERHASBEENREMOVED'] = "Пользователь '%1' успешно удален из группы '%2'";
$content['LN_GROUP_'] = "";

// Центр пользовательского поиска
$content['LN_SEARCH_CENTER'] = "Пользовательский поиск";
$content['LN_SEARCH_ADD'] = "Добавить новый пользовательский поиск";
$content['LN_SEARCH_ID'] = "ID";
$content['LN_SEARCH_NAME'] = "Имя поиска";
$content['LN_SEARCH_QUERY'] = "Поисковой запрос";
$content['LN_SEARCH_TYPE'] = "Назначено";
$content['LN_SEARCH_EDIT'] = "Редактировать пользовательский поиск";
$content['LN_SEARCH_DELETE'] = "Удалить пользовательский поиск";
$content['LN_SEARCH_ADDEDIT'] = "Добавить/изменить пользовательский поиск";
$content['LN_SEARCH_SELGROUPENABLE'] = ">> Выберите группу для включения <<";
$content['LN_SEARCH_ERROR_DISPLAYNAMEEMPTY'] = "Отображаемое имя не может быть пустым.";
$content['LN_SEARCH_ERROR_SEARCHQUERYEMPTY'] = "Запрос SearchQuery не может быть пустым.";
$content['LN_SEARCH_HASBEENADDED'] = "Пользовательский поиск '%1' успешно добавлен.";
$content['LN_SEARCH_ERROR_IDNOTFOUND'] = "Не удалось найти поиск с идентификатором '%1'.";
$content['LN_SEARCH_ERROR_INVALIDID'] = "Недопустимый идентификатор поиска.";
$content['LN_SEARCH_HASBEENEDIT'] = "Пользовательский поиск '%1' успешно изменен.";
$content['LN_SEARCH_WARNDELETESEARCH'] = "Вы уверены, что хотите удалить пользовательский поиск '%1'? Это действие нельзя отменить!";
$content['LN_SEARCH_ERROR_DELSEARCH'] = "Не удалось удалить пользовательский поиск с идентификатором '%1'!";
$content['LN_SEARCH_ERROR_HASBEENDEL'] = "Пользовательский поиск '%1' успешно удален!";
$content['LN_SEARCH_'] = "";

// Центр пользовательских представлений
$content['LN_VIEWS_CENTER'] = "Параметры просмотра";
$content['LN_VIEWS_ID'] = "ID";
$content['LN_VIEWS_NAME'] = "Имя представления";
$content['LN_VIEWS_COLUMNS'] = "Просмотр столбцов";
$content['LN_VIEWS_TYPE'] = "Назначено";
$content['LN_VIEWS_ADD'] = "Добавить новый вид";
$content['LN_VIEWS_EDIT'] = "Редактировать вид";
$content['LN_VIEWS_ERROR_IDNOTFOUND'] = "Не удалось найти представление с идентификатором '%1'.";
$content['LN_VIEWS_ERROR_INVALIDID'] = "Представление с идентификатором '%1' не является допустимым представлением.";
$content['LN_VIEWS_WARNDELETEVIEW'] = "Вы уверены, что хотите удалить представление '%1'? Это действие нельзя отменить!";
$content['LN_VIEWS_ERROR_DELSEARCH'] = "Не удалось удалить представление с идентификатором '%1'!";
$content['LN_VIEWS_ERROR_HASBEENDEL'] = "Представление '%1' успешно удалено!";
$content['LN_VIEWS_ADDEDIT'] = "Добавить/редактировать представление";
$content['LN_VIEWS_COLUMNLIST'] = "Настроенные столбцы";
$content['LN_VIEWS_ADDCOLUMN'] = "Добавить столбец в список";
$content['LN_VIEWS_ERROR_DISPLAYNAMEEMPTY'] = "Отображаемое имя не может быть пустым.";
$content['LN_VIEWS_COLUMN'] = "Столбец";
$content['LN_VIEWS_COLUMN_REMOVE'] = "Удалить столбец";
$content['LN_VIEWS_HASBEENADDED'] = "Пользовательское представление '%1' успешно добавлено.";
$content['LN_VIEWS_ERROR_NOCOLUMNS'] = "Чтобы добавить новое пользовательское представление, вам нужно добавить хотя бы один столбец.";
$content['LN_VIEWS_HASBEENEDIT'] = "Пользовательское представление '%1' успешно изменено.";
$content['LN_VIEWS_'] = "";

// Пользовательский центр DBMappings
$content['LN_DBMP_CENTER'] = "Параметры сопоставления полей базы данных";
$content['LN_DBMP_ID'] = "ID";
$content['LN_DBMP_NAME'] = "Имя сопоставления базы данных";
$content['LN_DBMP_DBMAPPINGS'] = "Сопоставления баз данных";
$content['LN_DBMP_ADD'] = "Добавить новое сопоставление базы данных";
$content['LN_DBMP_EDIT'] = "Редактировать отображение базы данных";
$content['LN_DBMP_DELETE'] = "Удалить сопоставление базы данных";
$content['LN_DBMP_ERROR_IDNOTFOUND'] = "Не удалось найти сопоставление базы данных с идентификатором '%1'.";
$content['LN_DBMP_ERROR_INVALIDID'] = "Сопоставление базы данных с идентификатором '%1' не является допустимым сопоставлением базы данных.";
$content['LN_DBMP_WARNDELETEMAPPING'] = "Вы уверены, что хотите удалить сопоставление базы данных '%1'? Это невозможно отменить!";
$content['LN_DBMP_ERROR_DELSEARCH'] = "Не удалось удалить сопоставление базы данных с идентификатором '%1'!";
$content['LN_DBMP_ERROR_HASBEENDEL'] = "Отображение базы данных '%1' успешно удалено!";
$content['LN_DBMP_ADDEDIT'] = "Добавить/редактировать сопоставление базы данных";
$content['LN_DBMP_DBMAPPINGSLIST'] = "Настроенные сопоставления";
$content['LN_DBMP_ADDMAPPING'] = "Добавить сопоставление полей в список";
$content['LN_DBMP_ERROR_DISPLAYNAMEEMPTY'] = "Отображаемое имя не может быть пустым.";
$content['LN_DBMP_MAPPING'] = "Отображение";
$content['LN_DBMP_MAPPING_REMOVE'] = "Удалить сопоставление";
$content['LN_DBMP_MAPPING_EDIT'] = "Редактировать сопоставление";
$content['LN_DBMP_MAPPING_MOVEUP'] = "Переместить сопоставление вверх";
$content['LN_DBMP_MAPPING_MOVEDOWN'] = "Переместить сопоставление вниз";
$content['LN_DBMP_HASBEENADDED'] = "Пользовательское сопоставление базы данных '%1' успешно добавлено.";
$content['LN_DBMP_ERROR_NOCOLUMNS'] = "Для добавления нового пользовательского сопоставления базы данных необходимо добавить хотя бы один столбец.";
$content['LN_DBMP_HASBEENEDIT'] = "Пользовательское сопоставление базы данных '%1' успешно изменено.";
$content['LN_DBMP_ERROR_MISSINGFIELDNAME'] = "Отсутствует сопоставление для поля '%1'.";
$content['LN_SOURCES_FILTERSTRING'] = "Пользовательский фильтр поиска";
$content['LN_SOURCES_FILTERSTRING_HELP'] = "Используйте тот же синтаксис, что и в поле поиска. Например, если вы хотите показывать только сообщения с 'server1', используйте этот поисковый фильтр: источник:=server1";

// Центр пользовательских источников
$content['LN_SOURCES_CENTER'] = "Параметры источников";
$content['LN_SOURCES_EDIT'] = "Редактировать источник";
$content['LN_SOURCES_DELETE'] = "Удалить источник";
$content['LN_SOURCES_ID'] = "ID";
$content['LN_SOURCES_NAME'] = "Имя источника";
$content['LN_SOURCES_TYPE'] = "Тип источника";
$content['LN_SOURCES_ASSIGNTO'] = "Кому назначено";
$content['LN_SOURCES_DISK'] = "Файл на диске";
$content['LN_SOURCES_DB'] = "База данных MySQL";
$content['LN_SOURCES_CLICKHOUSE'] = "База данных ClickHouse";
$content['LN_SOURCES_PDO'] = "Источник данных PDO";
$content['LN_SOURCES_MONGODB'] = "Источник данных MongoDB";
$content['LN_SOURCES_ADD'] = "Добавить новый источник";
$content['LN_SOURCES_ADDEDIT'] = "Добавить/редактировать источник";
$content['LN_SOURCES_TYPE'] = "Тип источника";
$content['LN_SOURCES_DISKTYPEOPTIONS'] = "Параметры, связанные с файлом диска";
$content['LN_SOURCES_ERROR_MISSINGPARAM'] = "Параметр '%1' отсутствует.";
$content['LN_SOURCES_ERROR_NOTAVALIDFILE'] = "Не удалось открыть файл системного журнала '%1'! Проверьте, существует ли файл и имеет ли LogAnalyzer достаточные права на него";
$content['LN_SOURCES_ERROR_UNKNOWNSOURCE'] = "Обнаружен неизвестный источник '%1'";
$content['LN_SOURCE_HASBEENADDED'] = "Новый источник '%1' успешно добавлен.";
$content['LN_SOURCES_EDIT'] = "Редактировать источник";
$content['LN_SOURCES_ERROR_INVALIDORNOTFOUNDID'] = "Идентификатор источника недействителен или не может быть найден.";
$content['LN_SOURCES_ERROR_IDNOTFOUND'] = "Идентификатор источника не найден в базе данных.";
$content['LN_SOURCES_HASBEENEDIT'] = "Источник '%1' успешно изменен.";
$content['LN_SOURCES_WARNDELETESEARCH'] = "Вы уверены, что хотите удалить источник '%1'? Это действие нельзя отменить!";
$content['LN_SOURCES_ERROR_DELSOURCE'] = "Не удалось удалить источник с идентификатором '%1'!";
$content['LN_SOURCES_ERROR_HASBEENDEL'] = "Источник '%1' успешно удален!";
$content['LN_SOURCES_DESCRIPTION'] = "Описание источника (необязательно)";
$content['LN_SOURCES_ERROR_INVALIDVALUE'] = "Недопустимое значение параметра '%1'.";
$content['LN_SOURCES_STATSNAME'] = "Имя";
$content['LN_SOURCES_STATSVALUE'] = "Значение";
$content['LN_SOURCES_DETAILS'] = "Подробности для этого источника потока логов";
$content['LN_SOURCES_STATSDETAILS'] = "Подробности статистики для этого источника потока журналов";
$content['LN_SOURCES_ERROR_NOSTATSDATA'] = "Не удалось найти или получить какую-либо информацию, связанную со статистикой, для этого источника потока журналов.";
$content['LN_SOURCES_ERROR_NOCLEARSUPPORT'] = "Этот источник потока журналов не поддерживает удаление данных.";
$content['LN_SOURCES_ROWCOUNT'] = "Общее количество строк";
$content['LN_SOURCES_CLEARDATA'] = "Доступны следующие параметры обслуживания базы данных";
$content['LN_SOURCES_CLEAROPTIONS'] = "Выберите способ очистки данных.";
$content['LN_SOURCES_CLEARALL'] = "Очистить (удалить) все данные.";
$content['LN_SOURCES_CLEAR_HELPTEXT'] = "Внимание! Будьте осторожны при удалении данных, любое выполненное здесь действие нельзя отменить!";
$content['LN_SOURCES_CLEARSINCE'] = "Удалить все данные старше...";
$content['LN_SOURCES_CLEARDATE'] = "Удалить все данные старше...";
$content['LN_SOURCES_CLEARDATA_SEND'] = "Очистить выбранный диапазон данных";
$content['LN_SOURCES_ERROR_INVALIDCLEANUP'] = "Недопустимый тип очистки данных";
$content['LN_SOURCES_WARNDELETEDATA'] = "Вы уверены, что хотите очистить данные журнала в источнике '%1'? Это нельзя отменить!";
$content['LN_SOURCES_ERROR_DELDATA'] = "Не удалось удалить данные в источнике '%1'";
$content['LN_SOURCES_HASBEENDELDATA'] = "Успешно удалены данные из источника '%1', затронуты строки '%2'. ";

// Обновление базы данных
$content['LN_DBUPGRADE_TITLE'] = "Обновление базы данных LogAnalyzer";
$content['LN_DBUPGRADE_DBFILENOTFOUND'] = "Файл обновления базы данных '%1' не найден во включаемой папке! Проверьте, все ли файлы успешно загружены.";
$content['LN_DBUPGRADE_DBDEFFILESHORT'] = "Файлы обновления базы данных пусты или не содержат команд SQL! Пожалуйста, проверьтеесли все файлы были успешно загружены.";
$content['LN_DBUPGRADE_WELCOME'] = "Добро пожаловать в обновление базы данных";
$content['LN_DBUPGRADE_BEFORESTART'] = "Прежде чем приступить к обновлению вашей базы данных, вы должны создать <b>ПОЛНУЮ РЕЗЕРВНУЮ КОПИИ ВАШЕЙ БАЗЫ ДАННЫХ</b>. Все остальное будет сделано автоматически сценарием обновления.";
$content['LN_DBUPGRADE_CURRENTINSTALLED'] = "Текущая версия установленной базы данных";
$content['LN_DBUPGRADE_TOBEINSTALLED'] = "Должна быть установлена версия базы данных";
$content['LN_DBUPGRADE_HASBEENDONE'] = "Обновление базы данных выполнено, см. результаты ниже";
$content['LN_DBUPGRADE_SUCCESSEXEC'] = "Успешно выполненные операторы";
$content['LN_DBUPGRADE_FAILEDEXEC'] = "Ошибочные операторы";
$content['LN_DBUPGRADE_ONESTATEMENTFAILED'] = "Ошибка по крайней мере одного оператора. Возможно, вам придется исправить эту проблему вручную. Подробнее об ошибке см. ниже";
$content['LN_DBUPGRADE_ERRMSG'] = "Сообщение об ошибке";
$content['LN_DBUPGRADE_ULTRASTATSDBVERSION'] = "Версия базы данных LogAnalyzer";

// Опции графиков
$content['LN_CHARTS_CENTER'] = "Параметры диаграмм";
$content['LN_CHARTS_EDIT'] = "Редактировать диаграмму";
$content['LN_CHARTS_DELETE'] = "Удалить диаграмму";
$content['LN_CHARTS_ADD'] = "Добавить новую диаграмму";
$content['LN_CHARTS_ADDEDIT'] = "Добавить/редактировать диаграмму";
$content['LN_CHARTS_NAME'] = "Имя диаграммы";
$content['LN_CHARTS_ENABLED'] = "Диаграмма включена";
$content['LN_CHARTS_ENABLEDONLY'] = "Включено";
$content['LN_CHARTS_ERROR_INVALIDORNOTFOUNDID'] = "Идентификатор диаграммы недействителен или не может быть найден.";
$content['LN_CHARTS_WARNDELETESEARCH'] = "Вы уверены, что хотите удалить диаграмму '%1'? Это действие нельзя отменить!";
$content['LN_CHARTS_ERROR_DELCHART'] = "Не удалось удалить диаграмму с идентификатором '%1'!";
$content['LN_CHARTS_ERROR_HASBEENDEL'] = "Диаграмма '%1' успешно удалена!";
$content['LN_CHARTS_ERROR_MISSINGPARAM'] = "Параметр '%1' отсутствует.";
$content['LN_CHARTS_HASBEENADDED'] = "Новая диаграмма '%1' успешно добавлена.";
$content['LN_CHARTS_ERROR_IDNOTFOUND'] = "Идентификатор диаграммы не найден в базе данных.";
$content['LN_CHARTS_HASBEENEDIT'] = "Диаграмма '%1' успешно изменена.";
$content['LN_CHARTS_ID'] = "ID";
$content['LN_CHARTS_ASSIGNTO'] = "Кому назначено";
$content['LN_CHARTS_PREVIEW'] = "Предварительный просмотр диаграммы в новом окне";
$content['LN_CHARTS_FILTERSTRING'] = "Пользовательский фильтр";
$content['LN_CHARTS_FILTERSTRING_HELP'] = "Используйте тот же синтаксис, что и в поле поиска. Например, если вы хотите создать диаграмму для 'server1', используйте этот фильтр: источник:=server1";
$content['LN_CHARTS_ERROR_CHARTIDNOTFOUND'] = "Ошибка, ChartID с идентификатором '%1' не найден";
$content['LN_CHARTS_ERROR_SETTINGFLAG'] = "Ошибка установки флага, недопустимый идентификатор диаграммы или операция.";
$content['LN_CHARTS_SETENABLEDSTATE'] = "Переключение включено";

// Параметры полей
$content['LN_FIELDS_CENTER'] = "Параметры полей";
$content['LN_FIELDS_EDIT'] = "Редактировать поле";
$content['LN_FIELDS_DELETE'] = "Удалить поле";
$content['LN_FIELDS_ADD'] = "Добавить новое поле";
$content['LN_FIELDS_ID'] = "ID поля";
$content['LN_FIELDS_NAME'] = "Отображаемое имя";
$content['LN_FIELDS_DEFINE'] = "Внутренний идентификатор поля";
$content['LN_FIELDS_DELETE_FROMDB'] = "Удалить поле из БД";
$content['LN_FIELDS_ADDEDIT'] = "Добавить/редактировать поле";
$content['LN_FIELDS_TYPE'] = "Тип поля";
$content['LN_FIELDS_ALIGN'] = "Выравнивание списка";
$content['LN_FIELDS_SEARCHONLINE'] = "Включить онлайн-поиск";
$content['LN_FIELDS_DEFAULTWIDTH'] = "Ширина строки в Listview";
$content['LN_FIELDS_ERROR_IDNOTFOUND'] = "Идентификатор поля не найден в базе данных или в константах по умолчанию.";
$content['LN_FIELDS_ERROR_INVALIDID'] = "Поле с идентификатором '%1' не является допустимым полем.";
$content['LN_FIELDS_SEARCHFIELD'] = "Имя фильтра поиска";
$content['LN_FIELDS_WARNDELETESEARCH'] = "Вы уверены, что хотите удалить поле '%1'? Это действие нельзя отменить!";
$content['LN_FIELDS_ERROR_DELSEARCH'] = "Идентификатор поля не найден в базе данных.";
$content['LN_FIELDS_ERROR_HASBEENDEL'] = "Поле '%1' успешно удалено!";
$content['LN_FIELDS_ERROR_FIELDCAPTIONEMPTY'] = "Заголовок поля был пуст.";
$content['LN_FIELDS_ERROR_FIELDIDEMPTY'] = "Идентификатор поля был пуст.";
$content['LN_FIELDS_ERROR_SEARCHFIELDEMPTY'] = "Фильтр поиска был пуст.";
$content['LN_FIELDS_ERROR_FIELDDEFINEEMPTY'] = "Внутренний идентификатор поля был пуст.";
$content['LN_FIELDS_HASBEENEDIT'] = "Конфигурация поля '%1' успешно изменена.";
$content['LN_FIELDS_HASBEENADDED'] = "Конфигурация для поля '%1' успешно добавлена.";
$content['LN_FIELDS_'] = "";
$content['LN_ALIGN_CENTER'] = "центр";
$content['LN_ALIGN_LEFT'] = "левый";
$content['LN_ALIGN_RIGHT'] = "правильно";
$content['LN_FILTER_TYPE_STRING'] = "Строка";
$content['LN_FILTER_TYPE_NUMBER'] = "Число";
$content['LN_FILTER_TYPE_DATE'] = "Дата";

// Параметры парсера
$content['LN_PARSERS_EDIT'] = "Редактировать анализатор сообщений";
$content['LN_PARSERS_DELETE'] = "Удалить анализатор сообщений";
$content['LN_PARSERS_ID'] = "Идентификатор парсера сообщений";
$content['LN_PARSERS_NAME'] = "Имя парсера сообщений";
$content['LN_PARSERS_DESCRIPTION'] = "Описание анализатора сообщений";
$content['LN_PARSERS_ERROR_NOPARSERS'] = "В вашей установке не найдены допустимые анализаторы сообщений.";
$content['LN_PARSERS_HELP'] = "Справка";
$content['LN_PARSERS_HELP_CLICK'] = "Нажмите здесь для подробного описания";
$content['LN_PARSERS_INFO'] = "Показать дополнительную информацию для этого анализатора сообщений.";
$content['LN_PARSERS_INIT'] = "Инициализировать настройки для этого анализатора сообщений.";
$content['LN_PARSERS_REMOVE'] = "Удалить настройки для этого анализатора сообщений.";
$content['LN_PARSERS_ERROR_IDNOTFOUND'] = "Синтаксический анализатор сообщений с идентификатором '%1' не найден.";
$content['LN_PARSERS_ERROR_INVALIDID'] = "Неверный идентификатор парсера сообщений.";
$content['LN_PARSERS_DETAILS'] = "Подробности для этого парсера";
$content['LN_PARSERS_CUSTOMFIELDS'] = "Для этого анализатора сообщений необходимы следующие настраиваемые поля.";
$content['LN_PARSERS_WARNREMOVE'] = "Вы собираетесь удалить настраиваемые поля, необходимые анализатору сообщений '%1'. Однако вы можете добавить эти поля снова, если передумаете.";
$content['LN_PARSERS_ERROR_HASBEENREMOVED'] = "Все настройки (настраиваемые поля '%2') для анализатора сообщений '%1' были удалены.";
$content['LN_PARSERS_ERROR_HASBEENADDED'] = "Все необходимые настройки (настраиваемые поля '%2') для парсера сообщений '%1' добавлены.";
$content['LN_PARSERS_ERROR_NOFIELDS'] = "Синтаксический анализатор сообщений '%1' не имеет настраиваемых полей для добавления.";
$content['LN_PARSERSMENU_LIST'] = "Список установленных парсеров сообщений";
$content['LN_PARSERS_ONLINELIST'] = "Все доступные парсеры";
$content['LN_PARSERS_'] = "";

// Материал командной строки
$content['LN_CMD_NOOP'] = "Отсутствует параметр операции";
$content['LN_CMD_NOLOGSTREAM'] = "Отсутствует параметр источника потока логов";
$content['LN_CMD_LOGSTREAMNOTFOUND'] = "Источник потока журналов с идентификатором '%1' не найден в базе данных!";
$content['LN_CMD_COULDNOTGETROWCOUNT'] = "Не удалось получить количество строк из источника потока журнала '%1'";
$content['LN_CMD_SUBPARAM1MISSING'] = "Подпараметр 1 отсутствует, он должен быть установлен на 'все', 'с' или 'дата'. Подробнее см. в документации.";
$content['LN_CMD_WRONGSUBOPORMISSING'] = "Либо подоперация неверна, либо отсутствует другой параметр";
$content['LN_CMD_FAILEDTOCLEANDATA'] = "Не удалось очистить данные для потока журнала '%1'.";
$content['LN_CMD_CLEANINGDATAFOR'] = "Очистка данных для источника потока журналов '%1'.";
$content['LN_CMD_ROWSFOUND'] = "Успешное подключение и обнаружение '%1' строк в источнике потока логов.";
$content['LN_CMD_DELETINGOLDERTHEN'] = "Выполняется удаление записей данных старше '%1'.";
$content['LN_CMD_DELETEDROWS'] = "Успешно удалено '%1' строк в источнике потока логов.'";
$content['LN_CMD_'] = "";

// Параметры отчета
$content['LN_REPORTS_EDIT'] = "Редактировать отчет";
$content['LN_REPORTS_DELETE'] = "Удалить отчет";
$content['LN_REPORTS_REQUIREDFIELDS'] = "Обязательные поля";
$content['LN_REPORTS_ERROR_NOREPORTS'] = "В вашей установке не найдено действительных отчетов.";
$content['LN_REPORTS_INIT'] = "Инициализировать настройки";
$content['LN_REPORTS_REMOVE'] = "Удалить настройки";
$content['LN_REPORTS_ERROR_IDNOTFOUND'] = "Отчет с идентификатором '%1' не найден.";
$content['LN_REPORTS_ERROR_INVALIDID'] = "Недопустимый идентификатор отчета.";
$content['LN_REPORTS_DETAILS'] = "Подробности для этого отчета";
$content['LN_REPORTS_WARNREMOVE'] = "Вы собираетесь удалить пользовательские настройки, необходимые для отчета '%1'. Однако вы можете добавить эти настройки снова, если передумаете.";
$content['LN_REPORTS_ERROR_HASBEENREMOVED'] = "Все настройки для отчета '%1' удалены.";
$content['LN_REPORTS_ERROR_HASBEENADDED'] = "Все необходимые настройки для отчета '%1' добавлены.";
$content['LN_REPORTS_ERROR_NOFIELDS'] = "Отчет '%1' не имеет пользовательских настроек, которые можно добавить.";
$content['LN_REPORTS_ERROR_REPORTDOESNTNEEDTOBEREMOVED'] = "Отчет '%1' не нужно удалять или инициализировать.";
$content['LN_REPORTS_REMOVESAVEDREPORT'] = "Удалить сохраненный отчет";
$content['LN_REPORTS_CUSTOMITLE'] = "Заголовок отчета";
$content['LN_REPORTS_CUSTOMCOMMENT'] = "Комментарий/Описание";
$content['LN_REPORTS_FILTERSTRING'] = "Строка фильтра";
$content['LN_REPORTS_OUTPUTFORMAT'] = "Формат вывода";
$content['LN_REPORTS_OUTPUTTARGET'] = "Цель вывода";
$content['LN_REPORTS_HASBEENADDED'] = "Сохраненный отчет '%1' успешно добавлен.";
$content['LN_REPORTS_HASBEENEDIT'] = "Сохраненный отчет '%1' успешно изменен.";
$content['LN_REPORTS_SOURCEID'] = "Источник потока журналов";
$content['LN_REPORTS_ERROR_SAVEDREPORTIDNOTFOUND'] = "Не найдено ни одного сохраненного отчета с идентификатором '%1'.";
$content['LN_REPORTS_ERROR_INVALIDSAVEDREPORTID'] = "Недопустимый идентификатор сохраненного отчета.";
$content['LN_REPORTS_WARNDELETESAVEDREPORT'] = "Вы уверены, что хотите удалить сохраненный отчет '%1'?";
$content['LN_REPORTS_ERROR_DELSAVEDREPORT'] = "Не удалось удалить сохраненный отчет с идентификатором '%1'!";
$content['LN_REPORTS_ERROR_HASBEENDEL'] = "Сохраненный отчет '%1' успешно удален!";
$content['LN_REPORTS_FILTERLIST'] = "Список фильтров";
$content['LN_REPORTS_FILTER'] = "Фильтр";
$content['LN_REPORTS_ADDFILTER'] = "Добавить фильтр";
$content['LN_REPORTS_FILTER_EDIT'] = "Редактировать фильтр";
$content['LN_REPORTS_FILTER_MOVEUP'] = "Переместить фильтр вверх";
$content['LN_REPORTS_FILTER_MOVEDOWN'] = "Переместить фильтр вниз";
$content['LN_REPORTS_FILTER_REMOVE'] = "Удалить фильтр";
$content['LN_REPORTS_FILTEREDITOR'] = "Редактор фильтров";
$content['LN_REPORTS_FILTERSTRING_ONLYEDITIF'] = "Редактируйте необработанную строку фильтра, только если знаете, что делаете! Обратите внимание, что если вы измените строку фильтра, все изменения, сделанные в редакторе фильтров, будут потеряны!";
$content['LN_REPORTS_ADVANCEDFILTERS'] = "Расширенные фильтры";
$content['LN_REPORTS_ADVANCEDFILTERLIST'] = "Список расширенных фильтров отчетов";
$content['LN_REPORTS_OUTPUTTARGET_DETAILS'] = "Параметры цели вывода";
$content['LN_REPORTS_OUTPUTTARGET_FILE'] = "Выходной путь и имя файла";
$content['LN_REPORTS_CRONCMD'] = "Команда локального отчета";
$content['LN_REPORTS_LINKS'] = "Связанные ссылки";
$content['LN_REPORTS_INSTALLED'] = "Установлено";
$content['LN_REPORTS_NOTINSTALLED'] = "Не установлено";
$content['LN_REPORTS_DOWNLOAD'] = "Ссылка для скачивания";
$content['LN_REPORTS_SAMPLELINK'] = "Образец отчета";
$content['LN_REPORTS_DETAILSFOR'] = "Подробности отчета '%1'";
$content['LN_REPORTS_PERFORMANCE_WARNING'] = "Предупреждение о производительности потока логов";
$content['LN_REPORTS_OPTIMIZE_LOGSTREAMSOURCE'] = "Да, оптимизировать источник потока логов!";
$content['LN_REPORTS_OPTIMIZE_INDEXES'] = "Источник данных '%1' не оптимизирован для этого отчета. Отсутствует по крайней мере один ИНДЕКС. Создание ИНДЕКСов ускорит создание отчета. <br><br>Вы хотите, чтобы LogAnalyzer создавал нужные ИНДЕКСЫ сейчас? Это может занять несколько минут, так что наберитесь терпения!";
$content['LN_REPORTS_ERROR_FAILED_CREATE_INDEXES'] = "Не удалось создать ИНДЕКСЫ для источника данных '%1' с кодом ошибки '%2'";
$content['LN_REPORTS_INDEX_CREATED'] = "Созданы ИНДЕКСЫ потока журналов";
$content['LN_REPORTS_INDEX_CREATED_SUCCESS'] = "Успешно созданы все ИНДЕКСЫ для источника данных '%1'.";
$content['LN_REPORTS_OPTIMIZE_TRIGGER'] = "В источнике данных '%1' не установлен TRIGGER для автоматического создания контрольной суммы сообщения при INSERT. Создание TRIGGER ускорит создание отчета. <br><br>Вы хотите, чтобы LogAnalyzer создать ТРИГГЕР сейчас?";
$content['LN_REPORTS_TRIGGER_CREATED'] = "Создан TRIGGER потока логов";
$content['LN_REPORTS_TRIGGER_CREATED_SUCCESS'] = "TRIGGER успешно создан для источника данных '%1'.";
$content['LN_REPORTS_ERROR_FAILED_CREATE_TRIGGER'] = "Не удалось создать TRIGGER для источника данных '%1' с кодом ошибки '%2'";
$content['LN_REPORTS_CHANGE_CHECKSUM'] = "Полю контрольной суммы для источника данных '%1' не присвоено значение UNSIGNED INT. Чтобы отчет работал правильно, необходимо изменить значение поля CHECKSUM на UNSIGNED INT! <br><br>Вы хотите, чтобы LogAnalyzer изменил поле КОНТРОЛЬНАЯ СУММА сейчас? Это может занять несколько минут, так что наберитесь терпения!";
$content['LN_REPORTS_ERROR_FAILED_CHANGE_CHECKSUM'] = "Не удалось изменить поле КОНТРОЛЬНАЯ СУММА для источника данных '%1' с кодом ошибки '%2'";
$content['LN_REPORTS_CHECKSUM_CHANGED'] = "Поле контрольной суммы изменено";
$content['LN_REPORTS_CHECKSUM_CHANGED_SUCCESS'] = "Успешно изменено поле контрольной суммы для источника данных '%1'.";
$content['LN_REPORTS_LOGSTREAM_WARNING'] = "Предупреждение о потоке журнала";
$content['LN_REPORTS_ADD_MISSINGFIELDS'] = "Источник данных '%1' не содержит всех необходимых полей данных. Отсутствует как минимум одно ПОЛЕ. <br><br>Вы хотите, чтобы LogAnalyzer создал отсутствующие поля данных сейчас?";
$content['LN_REPORTS_ERROR_FAILED_ADDING_FIELDS'] = "Не удалось добавить отсутствующие поля данных в источник данных '%1' с кодом ошибки '%2'";
$content['LN_REPORTS_FIELDS_CREATED'] = "Добавлены отсутствующие поля данных";
$content['LN_REPORTS_FIELDS_CREATED_SUCCESS'] = "Успешно добавлены отсутствующие поля данных для источника данных '%1'.";
$content['LN_REPORTS_RECHECKLOGSTREAMSOURCE'] = "Вы хотите еще раз проверить текущий источник потока журналов?";
$content['LN_REPORTS_ADDSAVEDREPORT'] = "Добавить сохраненный отчет и сохранить изменения";
$content['LN_REPORTS_EDITSAVEDREPORT'] = "Сохранить изменения";
$content['LN_REPORTS_ADDSAVEDREPORTANDRETURN'] = "Добавить сохраненный отчет и вернуться к списку отчетов";
$content['LN_REPORTS_EDITSAVEDREPORTANDRETURN'] = "Сохранить изменения и вернуться к списку отчетов";
$content['LN_REPORTS_SOURCE_WARNING'] = "Предупреждение об источнике потока журналов";
$content['LN_REPORTS_ERROR_FAILED_SOURCE_CHECK'] = "Не удалось проверить источник данных '%1' с ошибкой '%2'";
$content['LN_REPORTS_'] = "";


?>
