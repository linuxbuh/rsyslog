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
$content['LN_ADMINMENU_HOMEPAGE'] = "Вернуться к показу событий";
$content['LN_ADMINMENU_GENOPT'] = "Настройки";
$content['LN_ADMINMENU_SOURCEOPT'] = "Источники";
$content['LN_ADMINMENU_VIEWSOPT'] = "Отражение";
$content['LN_ADMINMENU_SEARCHOPT'] = "Поиск";
$content['LN_ADMINMENU_USEROPT'] = "Пользователи";
$content['LN_ADMINMENU_GROUPOPT'] = "Группы";
$content['LN_ADMINMENU_CHARTOPT'] = "Графики";
$content['LN_ADMINMENU_FIELDOPT'] = "Поля";
$content['LN_ADMINMENU_DBMAPPINGOPT'] = "DBMappings";
$content['LN_ADMINMENU_MSGPARSERSOPT'] = "Парсер сообщений";
$content['LN_ADMINMENU_REEPORTSOPT'] = "Модули отчетов";
$content['LN_ADMIN_CENTER'] = "Центр администрирования";
$content['LN_ADMIN_UNKNOWNSTATE'] = "Неопределенное состояние";
$content['LN_ADMIN_ERROR_NOTALLOWED'] = "У Вас нет доступа к этой странице с Вашим уровнем пользователя.";
$content['LN_DELETEYES'] = "Да";
$content['LN_DELETENO'] = "Нет";
$content['LN_GEN_ACTIONS'] = "Доступные действия";
$content['LN_ADMIN_SEND'] = "Отправить изменения";
$content['LN_GEN_USERONLY'] = "Только пользователь";
$content['LN_GEN_GROUPONLY'] = "Только группа";
$content['LN_GEN_GLOBAL'] = "Глобальные";
$content['LN_GEN_USERONLY_LONG'] = "Только для меня <br>(Доступно только для вашего пользователя)";
$content['LN_GEN_GROUPONLY_LONG'] = "Для этой группы <br>(Доступно только для выбранной группы)";
$content['LN_GEN_GROUPONLYNAME'] = "Группа '%1'";
$content['LN_ADMIN_POPUPHELP'] = "Детали этой группы";
$content['LN_ADMIN_DBSTATS'] = "Показать статистику базы данных.";
$content['LN_ADMIN_CLEARDATA'] = "Если вам нужно удалить старые записи, используйте эту функцию.";
$content['LN_UPDATE_AVAILABLE'] = "Доступное обновление";
$content['LN_UPDATE_INSTALLEDVER'] = "Установленная версия: ";
$content['LN_UPDATE_AVAILABLEVER'] = "Доступная версия: ";
$content['LN_UPDATE_LINK'] = "Нажмите здесь для обновления";

// General Options
$content['LN_ADMIN_GLOBFRONTEND'] = "Глобальные настройки фронтенда";
$content['LN_ADMIN_USERFRONTEND'] = "Настройка пользовательского фронтенда";
$content['LN_ADMIN_MISC'] = "Различные настройки";
$content['LN_GEN_SHOWDEBUGMSG'] = "Показать отладочные сообщения";
$content['LN_GEN_DEBUGGRIDCOUNTER'] = "Показать отладочный Gridcounter";
$content['LN_GEN_SHOWPAGERENDERSTATS'] = "Показать статистику создания страниц";
$content['LN_GEN_ENABLEGZIP'] = "Включить GZIP-сжатие вывода";
$content['LN_GEN_DEBUGUSERLOGIN'] = "Наладочный Userlogin";
$content['LN_GEN_WEBSTYLE'] = "Выбор стиля по умолчанию";
$content['LN_GEN_SELLANGUAGE'] = "Выбор языка по умолчанию";
$content['LN_GEN_PREPENDTITLE'] = "Добавить этот срок в заголовок";
$content['LN_GEN_USETODAY'] = "Использовать Сегодня и Вчера в полях времени";
$content['LN_GEN_DETAILPOPUPS'] = "Использовать всплывающее сообщение для показа полного сообщения";
$content['LN_GEN_MSGCHARLIMIT'] = "Ограничение количества символов в сообщении в главном просмотре";
$content['LN_GEN_STRCHARLIMIT'] = "Ограничение количества символов для всех текстовых полей";
$content['LN_GEN_ENTRIESPERPAGE'] = "Количество записей на странице";
$content['LN_GEN_AUTORELOADSECONDS'] = "Включить автоматическую перезагрузку через секунды";
$content['LN_GEN_ADMINCHANGEWAITTIME'] = "Время обновления Админской панели";
$content['LN_GEN_IPADRRESOLVE'] = "Преобразование IP адресов с помощью DNS";
$content['LN_GEN_CUSTBTNCAPT'] = "Custom search caption";
$content['LN_GEN_CUSTBTNSRCH'] = "Custom search string";
$content['LN_GEN_SUCCESSFULLYSAVED'] = "Выборы параметров должны быть успешно выполнены";
$content['LN_GEN_INTERNAL'] = "Внутреннее";
$content['LN_GEN_DISABLED'] = "Функция отключена";
$content['LN_GEN_CONFIGFILE'] = "Файл конфигурации";
$content['LN_GEN_ACCESSDENIED'] = "Доступ запрещен к этой функции";
$content['LN_GEN_DEFVIEWS'] = "Выбор отображения по умолчаниюям";
$content['LN_GEN_DEFSOURCE'] = "Выбор источника по умолчанию";
$content['LN_GEN_SUPPRESSDUPMSG'] = "Удаление дублированных сообщений";
$content['LN_GEN_TREATFILTERSTRUE'] = "Треатные трубки из не основанных полей, как true";
$content['LN_GEN_INLINESEARCHICONS'] = "Show Onlinesearch icons within fields";
$content['LN_GEN_OPTIONNAME'] = "Название опции";
$content['LN_GEN_GLOBALVALUE'] = "Глобальное значение";
$content['LN_GEN_PERSONALVALUE'] = "Personal(User)value";
$content['LN_GEN_DISABLEUSEROPTIONS'] = "Нажмите здесь для отключения персональных настроек";
$content['LN_GEN_ENABLEUSEROPTIONS'] = "Нажмите здесь для включения персональных настроек";
$content['LN_ADMIN_GLOBALONLY'] = "Только глобальные настройки";
$content['LN_GEN_DEBUGTOSYSLOG'] = "Отправлять отладочные сообщения в локальный сервер syslog";
$content['LN_GEN_POPUPMENUTIMEOUT'] = "Задержка контекстного меню в миллисекундах";
$content['LN_ADMIN_SCRIPTTIMEOUT'] = "Задержка PHP скрипта в секундах";
$content['LN_GEN_INJECTHTMLHEADER'] = "Вставить этот html код в &lt;head&gt; зону.";
$content['LN_GEN_INJECTBODYHEADER'] = "Вставить этот html код в начале &lt;body&gt; зоны.";
$content['LN_GEN_INJECTBODYFOOTER'] = "Вставить этот html код в конце зоны &lt;body&gt;";
$content['LN_ADMIN_PHPLOGCON_LOGOURL'] = "Произвольная ссылка на логотип LogAnalyzer. Оставьте пустым для использования логотипа по умолчанию.";
$content['LN_ADMIN_ERROR_READONLY'] = "Это пользователь с правами READONLY, Вам не разрешены какие-либо изменения.";
$content['LN_ADMIN_ERROR_NOTALLOWEDTOEDIT'] ​​= "Вам не разрешено редактировать эту конфигурацию.";
$content['LN_ADMIN_USEPROXYSERVER'] = "Оставьте пустым, если не хотите использовать прокси-сервер! Если укажете существующий прокси-сервер (например '127.0.0.1:8080'), LogAnalyzer будет использовать его для запросов на проверку обновлений."
$content['LN_ADMIN_DEFAULTENCODING'] = "Кодировка символов по умолчанию";
$content['LN_GEN_CONTEXTLINKS'] = "Enable Contextlinks (Question marks)";

// User Center
$content['LN_USER_CENTER'] = "Опции пользователя";
$content['LN_USER_ID'] = "ID";
$content['LN_USER_NAME'] = "Пользователь";
$content['LN_USER_ADD'] = "Добавить пользователя";
$content['LN_USER_EDIT'] ​​= "Редактировать пользователя";
$content['LN_USER_DELETE'] = "Удалить пользователя";
$content['LN_USER_PASSWORD1'] = "Пароль";
$content['LN_USER_PASSWORD2'] = "Подтверждение пароля";
$content['LN_USER_ERROR_IDNOTFOUND'] = "Ошибка! Пользователь с ID '%1' , не найден";
$content['LN_USER_ERROR_DONOTDELURSLF'] = "Ошибка, вы не можете удалить сами себя!";
$content['LN_USER_ERROR_DELUSER'] = "Ошибка при удалении пользователя из id '%1' !";
$content['LN_USER_ERROR_INVALIDID'] = "Ошибка, неправильный ID, пользователь не найден";
$content['LN_USER_ERROR_HASBEENDEL'] = "Пользователь '%1' был успешно удален!";
$content['LN_USER_ERROR_USEREMPTY'] = "Ошибка, пустое имя пользователя";
$content['LN_USER_ERROR_USERNAMETAKEN'] = "Ошибка, пользователь уже существует!";
$content['LN_USER_ERROR_PASSSHORT'] = "Ошибка, пароль слишком короткий или не определен";
$content['LN_USER_ERROR_HASBEENADDED'] = "Пользователь '%1' был успешно добавлен";
$content['LN_USER_ERROR_HASBEENEDIT'] ​​= "Пользователь '%1' был успешно изменен";
$content['LN_USER_ISADMIN'] = "Админ?";
$content['LN_USER_ADDEDIT'] ​​= "Добавить/редактировать пользователя";
$content['LN_USER_WARNREMOVEADMIN'] = "Вы уверены, что хотите лишить себя администраторских привилегий?";
//"Вы можете продлить вашу собственную охрану.
$content['LN_USER_WARNDELETEUSER'] = "Вы уверены, что хотите удалить пользователя '%1'? Все его персональные настройки будут также удалены.";
$content['LN_USER_ERROR_INVALIDSESSIONS'] = "Неверная сессия пользователя.";
$content['LN_USER_ERROR_SETTINGFLAG'] = "Error setting flag, неправильный ID или пользователь не найден";
$content['LN_USER_WARNRADYONLYADMIN'] = "Те, что вы собираетесь соответствовать вам! Это будет предусматривать, что вы можете изменить! Если вы хотите, чтобы вы происходили?";
$content['LN_USER_ISREADONLY'] = "Readonly пользователь?";
$content['LN_USER_'] = "";

// Group center
$content['LN_GROUP_CENTER'] = "Центр настройки групп";
$content['LN_GROUP_ID'] = "ID";
$content['LN_GROUP_NAME'] = "Название группы";
$content['LN_GROUP_DESCRIPTION'] = "Описание группы";
$content['LN_GROUP_TYPE'] = "Тип группы";
$content['LN_GROUP_ADD'] = "Добавить группу";
$content['LN_GROUP_EDIT'] ​​= "Редактировать группу";
$content['LN_GROUP_DELETE'] = "Удалить группу";
$content['LN_GROUP_NOGROUPS'] = "Ни одной группы не добавлено";
$content['LN_GROUP_ADDEDIT'] ​​= "Добавить/редактировать группу";
$content['LN_GROUP_ERROR_GROUPEMPTY'] = "Имя группы не может быть пустым.";
$content['LN_GROUP_ERROR_GROUPNAMETAKEN'] = "The groupname has already been taken.";
$content['LN_GROUP_HASBEENADDED'] = "Группа '%1' была успешно добавлена.";
$content['LN_GROUP_ERROR_IDNOTFOUND'] = "Группа с ID '%1' не найдена.";
$content['LN_GROUP_ERROR_HASBEENEDIT'] ​​= "Група '%1' была успешно изменена.";
$content['LN_GROUP_ERROR_INVALIDGROUP'] = "Ошибка, неверный ID, Группа не найдена";
$content['LN_GROUP_WARNDELETEGROUP'] = "Вы уверены, что хотите удалить группу '%1'? Все настройки группы будут также удалены.";
$content['LN_GROUP_ERROR_DELGROUP'] = "Ошибка при удалении группа из id '%1'!";
$content['LN_GROUP_ERROR_HASBEENDEL'] = "Группа '%1' была успешно удалена!";
$content['LN_GROUP_MEMBERS'] = "Члены группы: ";
$content['LN_GROUP_ADDUSER'] = "Добавить пользователя в группу";
$content['LN_GROUP_ERROR_USERIDMISSING'] = "ID пользователя не верен.";
$content['LN_GROUP_USERHASBEENADDEDGROUP'] = "Пользователь '%1' был успешно добавлен в группу '%2'";
$content['LN_GROUP_ERRORNOMOREUSERS'] = "Нет пользователя, которого можно добавить в группу '%1'";
$content['LN_GROUP_USER_ADD'] = "Добавить пользователя в группу";
$content['LN_GROUP_USERDELETE'] = "Удалить пользователя из группы";
$content['LN_GROUP_ERRORNOUSERSINGROUP'] = "Нет пользователей для удаления из группы '%1'";
$content['LN_GROUP_ERROR_REMUSERFROMGROUP'] = "Пользователь '%1' не может быть удален из группы '%2'";
$content['LN_GROUP_USERHASBEENREMOVED'] = "Пользователь '%1' был успешно удален из группы '%2'";
$content['LN_GROUP_'] = "";

// Custom Searches center
$content['LN_SEARCH_CENTER'] = "Нетипичный поиск";
$content['LN_SEARCH_ADD'] = "Добавить новый нетипичный поиск";
$content['LN_SEARCH_ID'] = "ID";
$content['LN_SEARCH_NAME'] = "Название поиска";
$content['LN_SEARCH_QUERY'] = "Поисковый запрос";
$content['LN_SEARCH_TYPE'] = "Назначено";
$content['LN_SEARCH_EDIT'] ​​= "Редактировать нетипичный поиск";
$content['LN_SEARCH_DELETE'] = "Удалить нетипичный поиск";
$content['LN_SEARCH_ADDEDIT'] ​​= "Добавить/редактировать нетипичный поиск";
$content['LN_SEARCH_SELGROUPENABLE'] = ">> Выберите группу для включения <<";
$content['LN_SEARCH_ERROR_DISPLAYNAMEEMPTY'] = "Имя отображения не может быть пустым.";
$content['LN_SEARCH_ERROR_SEARCHQUERYEMPTY'] = "Поисковый запрос не может быть пуст.";
$content['LN_SEARCH_HASBEENADDED'] = "Нетипичный поиск '%1' Был успешно добавлен.";
$content['LN_SEARCH_ERROR_IDNOTFOUND'] = "Невозможно найти поиск с ID '%1'.";
$content['LN_SEARCH_ERROR_INVALIDID'] = "Неверный ID поиска.";
$content['LN_SEARCH_HASBEENEDIT'] ​​= "Нетипичный поиск '%1' был успешно отредактирован.";
$content['LN_SEARCH_WARNDELETESEARCH'] = "Вы уверены, что хотите удалить нетипичный поиск '%1'? Это действие не обращено!";
$content['LN_SEARCH_ERROR_DELSEARCH'] = "Удаление нетипичного поиска из id '%1' не получилось!";
$content['LN_SEARCH_ERROR_HASBEENDEL'] = "Нетипичный поиск '%1' был успешно удален!";
$content['LN_SEARCH_'] = "";

// Custom Views center
$content['LN_VIEWS_CENTER'] = "Опции отображения";
$content['LN_VIEWS_ID'] = "ID";
$content['LN_VIEWS_NAME'] = "Название отображения";
$content['LN_VIEWS_COLUMNS'] = "Отражение столбцов";
$content['LN_VIEWS_TYPE'] = "Assigned to";
$content['LN_VIEWS_ADD'] = "Добавить новое отображение";
$content['LN_VIEWS_EDIT'] ​​= "Редактировать отображение";
$content['LN_VIEWS_ERROR_IDNOTFOUND'] = "Отображение с ID '%1' не найдено.";
$content['LN_VIEWS_ERROR_INVALIDID'] = "Отображение с ID '%1' это не корректное отображение.";
$content['LN_VIEWS_WARNDELETEVIEW'] = "Вы уверены, что хотите удалить отображение '%1'? Это необратимое действие!";
$content['LN_VIEWS_ERROR_DELSEARCH'] = "Ошибка при удалении отображения с id '%1'!";
$content['LN_VIEWS_ERROR_HASBEENDEL'] = "Отображение '%1' было успешно удалено!";
$content['LN_VIEWS_ADDEDIT'] ​​= "Добавить/редактировать отображение";
$content['LN_VIEWS_COLUMNLIST'] = "Настройка столбцов";
$content['LN_VIEWS_ADDCOLUMN'] = "Добавить столбец в список";
$content['LN_VIEWS_ERROR_DISPLAYNAMEEMPTY'] = "Название показа не может быть пустым.";
$content['LN_VIEWS_COLUMN'] = "Столбец";
$content['LN_VIEWS_COLUMN_REMOVE'] = "Удалить столбец";
$content['LN_VIEWS_HASBEENADDED'] = "Отображение '%1' было успешно добавлено.";
$content['LN_VIEWS_ERROR_NOCOLUMNS'] = "Вам нужно добавить хотя бы один столбец для того, чтобы добавить новое нетипичное отображение.";
$content['LN_VIEWS_HASBEENEDIT'] ​​= "Нетипичное отображение '%1' было успешно изменено.";
$content['LN_VIEWS_'] = "";

// Custom DBMappings center
$content['LN_DBMP_CENTER'] = "Database Field Mappings Options";
$content['LN_DBMP_ID'] = "ID";
$content['LN_DBMP_NAME'] = "Database Mappingname";
$content['LN_DBMP_DBMAPPINGS'] = "Database Mappings";
$content['LN_DBMP_ADD'] = "Add new Database Mapping";
$content['LN_DBMP_EDIT'] ​​= "Edit Database Mapping";
$content['LN_DBMP_ERROR_IDNOTFOUND'] = "A Database Mapping with ID '%1' не может быть установлено.";
$content['LN_DBMP_ERROR_INVALIDID'] = "The Database Mapping with ID '%1' не valid Database Mapping.";
$content['LN_DBMP_WARNDELETEMAPPING'] = "Вы думаете, что вы хотите удалить Database Mapping '%1'?
$content['LN_DBMP_ERROR_DELSEARCH'] = "Deleting of the Database Mapping with id '%1' failed!";
$content['LN_DBMP_ERROR_HASBEENDEL'] = "The Database Mapping '%1' hasbeen successfully deleted!";
$content['LN_DBMP_ADDEDIT'] ​​= "Add / Edit Database Mapping";
$content['LN_DBMP_DBMAPPINGSLIST'] = "Configured Mappings";
$content['LN_DBMP_ADDMAPPING'] = "Add Field Mapping into list";
$content['LN_DBMP_ERROR_DISPLAYNAMEEMPTY'] = "The DisplayName cannot be empty.";
$content['LN_DBMP_MAPPING'] = "Mapping";
$content['LN_DBMP_MAPPING_REMOVE'] = "Remove Mapping";
$content['LN_DBMP_MAPPING_EDIT'] ​​= "Edit Mapping";
$content['LN_DBMP_HASBEENADDED'] = "The Custom Database Mapping '%1' has be successful added.";
$content['LN_DBMP_ERROR_NOCOLUMNS'] = "Вы нуждаетесь в том, чтобы сохранить одну columnу в соответствии с новой Custom Database Mapping.";
$content['LN_DBMP_HASBEENEDIT'] ​​= "The Custom Database Mapping '%1' был успешно edited.";
$content['LN_DBMP_ERROR_MISSINGFIELDNAME'] = "Missing mapping for the '%1' field.";
$content['LN_SOURCES_FILTERSTRING'] = "Custom Searchfilter";
$content['LN_SOURCES_FILTERSTRING_HELP'] = "Получить ту же самую syntax в поисковом поле. Для того, чтобы дать вам сообщение только по сообщениям из 'server1', используйте этот searchfilter: source:=server1";

// Custom Sources center
$content['LN_SOURCES_CENTER'] = "Опции источников";
$content['LN_SOURCES_EDIT'] ​​= "Редактировать источник";
$content['LN_SOURCES_DELETE'] = "Удалить источник";
$content['LN_SOURCES_ID'] = "ID";
$content['LN_SOURCES_NAME'] = "Название источника";
$content['LN_SOURCES_TYPE'] = "Тип источника";
$content['LN_SOURCES_ASSIGNTO'] = "Assigned To";
$content['LN_SOURCES_DISK'] = "Diskfile";
$content['LN_SOURCES_DB'] = "База данных MySQL";
$content['LN_SOURCES_PDO'] = "PDO Datasource";
$content['LN_SOURCES_ADD'] = "Добавить новый источник";
$content['LN_SOURCES_ADDEDIT'] ​​= "Добавить/редактировать источник";
$content['LN_SOURCES_TYPE'] = "Тип источника";
$content['LN_SOURCES_DISKTYPEOPTIONS'] = "Diskfile related Options";
$content['LN_SOURCES_ERROR_MISSINGPARAM'] = "Параметр '%1' неверен.";
$content['LN_SOURCES_ERROR_NOTAVALIDFILE'] = "Ошибка при открытии файла syslog '%1'! Проверьте, существует ли файл и права LogAnalyzer к нему";
$content['LN_SOURCES_ERROR_UNKNOWNSOURCE'] = "Найден неизвестный источник '%1'";
$content['LN_SOURCE_HASBEENADDED'] = "Новый источник '%1' был успешно добавлен.";
$content['LN_SOURCES_EDIT'] ​​= "Редактирование источника";
$content['LN_SOURCES_ERROR_INVALIDORNOTFOUNDID'] = "Source-ID не верен, но не может быть найден.";
$content['LN_SOURCES_ERROR_IDNOTFOUND'] = "Source-ID не найден в базе данных.";
$content['LN_SOURCES_HASBEENEDIT'] ​​= "Источник '%1' был успешно изменен.";
$content['LN_SOURCES_WARNDELETESEARCH'] = "Вы уверены, что хотите удалить источник '%1'? Это действие не обращено!";
$content['LN_SOURCES_ERROR_DELSOURCE'] = "Неудача при удалении источника из id '%1'!";
$content['LN_SOURCES_ERROR_HASBEENDEL'] = "Источник '%1' был успешно удален!";
$content['LN_SOURCES_DESCRIPTION'] = "Описание источника (опционально)";
$content['LN_SOURCES_ERROR_INVALIDVALUE'] = "Неверное значение для параметра '%1'.";
$content['LN_SOURCES_STATSNAME'] = "Имя";
$content['LN_SOURCES_STATSVALUE'] = "Значение";
$content['LN_SOURCES_DETAILS'] = "Details for this logstream source";
$content['LN_SOURCES_STATSDETAILS'] = "Statistics details for this logstream source";
$content['LN_SOURCES_ERROR_NOSTATSDATA'] = "Не рекомендуется пользоваться статейами або будь-якою статистикою, що стосується інформації про цей logstream source.";
$content['LN_SOURCES_ERROR_NOCLEARSUPPORT'] = "This logstream source does no support deleting data.";
$content['LN_SOURCES_ROWCOUNT'] = "Общее количество строк";
$content['LN_SOURCES_CLEARDATA'] = "Выполняемая необходимая функция Database Options are available";
$content['LN_SOURCES_CLEAROPTIONS'] = "Выберите, как вы хотите удалить данные.";
$content['LN_SOURCES_CLEARALL'] = "Очистить (удалить) все данные.";
$content['LN_SOURCES_CLEAR_HELPTEXT'] = "Внимание! Будьте осторожны с удалением данных, Любое действие будет необращенным!";
$content['LN_SOURCES_CLEARSINCE'] = "Удалить все данные старше...";
$content['LN_SOURCES_CLEARDATE'] = "Удалить все данные, которые старше ...";
$content['LN_SOURCES_CLEARDATA_SEND'] = "Удалить данные из выбранного промежутка";
$content['LN_SOURCES_ERROR_INVALIDCLEANUP'] = "Type Invalid Data Cleanup";
$content['LN_SOURCES_WARNDELETEDATA'] = "Вы уверены, что хотите очистить данные в источнике '%1' ? Это действие не обращено!";
$content['LN_SOURCES_ERROR_DELDATA'] = "Невозможно удалить данные из источника '%1'";
$content['LN_SOURCES_HASBEENDELDATA'] = "Успешно удаленные данные из источника '%1', '%2' строк были удалены.";

// Database Upgrade
$content['LN_DBUPGRADE_TITLE'] = "Обновление базы данных LogAnalyzer";
$content['LN_DBUPGRADE_DBFILENOTFOUND'] = "Высленный файл данных '% 1' не может быть включен в соединение! Уточнил, что все файлы были успешно загружены.";
$content['LN_DBUPGRADE_DBDEFFILESHORT'] = "Выбор файлов данных, в которых empty or did no contain any SQL Command!
$content['LN_DBUPGRADE_WELCOME'] = "Добро пожаловать на обновление базы данных";
$content['LN_DBUPGRADE_BEFORESTART']= "До того, как вы начнете обновление базы данных, вы должны создать <b>ПОЛНУЮ РЕЗЕРВНУЮ КОПИЮ ВАШЕЙ БАЗЫ ДАННЫХ</b>. Все остальное будет сделано автоматически скриптом обновления.";
$content['LN_DBUPGRADE_CURRENTINSTALLED'] = "Текущая версия базы данных";
$content['LN_DBUPGRADE_TOBEINSTALLED'] = "Do be Installed Database Version";
$content['LN_DBUPGRADE_HASBEENDONE'] = "Обновление базы данных было выполнено, см. результаты ниже";
$content['LN_DBUPGRADE_SUCCESSEXEC'] = "Successfully executed statements";
$content['LN_DBUPGRADE_FAILEDEXEC'] = "Failed statements";
$content['LN_DBUPGRADE_ONESTATEMENTFAILED'] = "Небольшое количество статей failed, я должен нуждаться в правильности и fix this issue manually. More error details below";
$content['LN_DBUPGRADE_ERRMSG'] = "Уведомление об ошибке";
$content['LN_DBUPGRADE_ULTRASTATSDBVERSION'] = "Версия базы данных LogAnalyzer";

// Charts Options
$content['LN_CHARTS_CENTER'] = "Настройка диаграмм";
$content['LN_CHARTS_EDIT'] ​​= "Редактировать диаграмму";
$content['LN_CHARTS_DELETE'] = "Удалить диаграмму";
$content['LN_CHARTS_ADD'] = "Добавить новую диаграмму";
$content['LN_CHARTS_ADDEDIT'] ​​= "Добавить/редактировать диаграмму";
$content['LN_CHARTS_NAME'] = "Название диаграммы";
$content['LN_CHARTS_ENABLED'] = "Данная диаграмма";
$content['LN_CHARTS_ENABLEDONLY'] = "Доступно";
$content['LN_CHARTS_ERROR_INVALIDORNOTFOUNDID'] = "Chart-ID не верен или не может быть найден.";
$content['LN_CHARTS_WARNDELETESEARCH'] = "Вы уверены, что хотите удалить диаграмму '%1'? Это действие не обращено!";
$content['LN_CHARTS_ERROR_DELCHART'] = "Неудача при удалении диаграммы из id '%1'!";
$content['LN_CHARTS_ERROR_HASBEENDEL'] = "Диаграмма '%1' была успешно удалена!";
$content['LN_CHARTS_ERROR_MISSINGPARAM'] = "Параметр '%1' отсутствует.";
$content['LN_CHARTS_HASBEENADDED'] = "Новая диаграмма '%1' была успешно добавлена.";
$content['LN_CHARTS_ERROR_IDNOTFOUND'] = "ID диаграммы не найден в базе данных.";
$content['LN_CHARTS_HASBEENEDIT'] ​​= "Диаграмма '%1' была успешно отредактирована.";
$content['LN_CHARTS_ID'] = "ID";
$content['LN_CHARTS_ASSIGNTO'] = "Назначено";
$content['LN_CHARTS_PREVIEW'] = "Предварительный просмотр диаграммы в новом окне";
$content['LN_CHARTS_FILTERSTRING'] = "Нетипичный фильтр";
$content['LN_CHARTS_FILTERSTRING_HELP'] = "Устанавливать идентификацию как в поисковом поле. Для того, чтобы вы могли создать метку для 'server1', use this filter: source:=server1";
$content['LN_CHARTS_ERROR_CHARTIDNOTFOUND'] = "Ошибка, ChartID с ID '%1' не найдена";
$content['LN_CHARTS_ERROR_SETTINGFLAG'] = "Error setting flag, invalid ChartID or operation.";

// Fields Options
$content['LN_FIELDS_CENTER'] = "Настройка полей";
$content['LN_FIELDS_EDIT'] ​​= "Редактировать поле";
$content['LN_FIELDS_DELETE'] = "Удалить поле";
$content['LN_FIELDS_ADD'] = "Добавить новое поле";
$content['LN_FIELDS_ID'] = "FieldID";
$content['LN_FIELDS_NAME'] = "Название поля";
$content['LN_FIELDS_DEFINE'] = "Внутренний FieldID";
$content['LN_FIELDS_DELETE_FROMDB'] = "Удалить поле из базы данных";
$content['LN_FIELDS_ADDEDIT'] ​​= "Добавить/редактировать поле";
$content['LN_FIELDS_TYPE'] = "Тип поля";
$content['LN_FIELDS_ALIGN'] = "Выравнивание списка";
$content['LN_FIELDS_SEARCHONLINE'] = "Разрешить поиск онлайн";
$content['LN_FIELDS_DEFAULTWIDTH'] = "Ширина строк в списке";
$content['LN_FIELDS_ERROR_IDNOTFOUND'] = "Field-ID не может быть найден в базе данных или среди констант по умолчанию.";
$content['LN_FIELDS_ERROR_INVALIDID'] = "Поле с ID '%1' не является правильным полем.";
$content['LN_FIELDS_SEARCHFIELD'] = "Название поискового фильтра";
$content['LN_FIELDS_WARNDELETESEARCH'] = "Вы уверены, что хотите удалить поле '%1'? Это действие не обращено!";
$content['LN_FIELDS_ERROR_DELSEARCH'] = "Field-ID не может быть найден в базе данных.";
$content['LN_FIELDS_ERROR_HASBEENDEL'] = "Поле '%1' успешно удалено!";
$content['LN_FIELDS_ERROR_FIELDCAPTIONEMPTY'] = "Поле заголовка пустое.";
$content['LN_FIELDS_ERROR_FIELDIDEMPTY'] = "ID поля пустое.";
$content['LN_FIELDS_ERROR_SEARCHFIELDEMPTY'] = "Поисковый фильтр пуст.";
$content['LN_FIELDS_ERROR_FIELDDEFINEEMPTY'] = "Внутренний FieldID пуст.";
$content['LN_FIELDS_HASBEENEDIT'] ​​= "Настройки для поля '%1' были успешно изменены.";
$content['LN_FIELDS_HASBEENADDED'] = "Настройки для поля '%1' были успешно добавлены.";
$content['LN_FIELDS_'] = "";
$content['LN_ALIGN_CENTER'] = "центр";
$content['LN_ALIGN_LEFT'] = "слева";
$content['LN_ALIGN_RIGHT'] = "справа";
$content['LN_FILTER_TYPE_STRING'] = "Строка";
$content['LN_FILTER_TYPE_NUMBER'] = "Число";
$content['LN_FILTER_TYPE_DATE'] = "Дата";

// Parser Options
$content['LN_PARSERS_EDIT'] ​​= "Редактировать парсер сообщений";
$content['LN_PARSERS_DELETE'] = "Удалить парсер сообщений";
$content['LN_PARSERS_ID'] = "ID парсера сообщений";
$content['LN_PARSERS_NAME'] = "Название парсера сообщений";
$content['LN_PARSERS_DESCRIPTION'] = "Описание парсера сообщений";
$content['LN_PARSERS_ERROR_NOPARSERS'] = "Нет действительных парсеров сообщений в вашей системе.";
$content['LN_PARSERS_HELP'] = "Помощь";
$content['LN_PARSERS_HELP_CLICK'] = "Нажмите здесь для подробного описания";
$content['LN_PARSERS_INFO'] = "Показать больше информации для этого парсера сообщений.";
$content['LN_PARSERS_INIT'] = "Настройки инициализации для этого парсера сообщений.";
$content['LN_PARSERS_REMOVE'] = "Удалить настройки для этого парсера сообщений.";
$content['LN_PARSERS_ERROR_IDNOTFOUND'] = "Нет парсера сообщений с ID '%1'.";
$content['LN_PARSERS_ERROR_INVALIDID'] = "Неверный ID парсера сообщений.";
$content['LN_PARSERS_DETAILS'] = "Детали к этому парсеру";
$content['LN_PARSERS_CUSTOMFIELDS'] = "Следующие нетипичные поля необходимы для этого парсера сообщений.";
$content['LN_PARSERS_WARNREMOVE'] = "Вы собираетесь удалить нетипичные поля, необходимые для парсера сообщений '%1' . Однако вы можете добавить эти поля еще раз, если вы измените свое мнение.";
$content['LN_PARSERS_ERROR_HASBEENREMOVED'] = "Все настройки ('%2' нетипичные поля) для парсера сообщений '%1' были удалены.";
$content['LN_PARSERS_ERROR_HASBEENADDED'] = "Все необходимые настройки ('%2' нетипичные поля) для парсера сообщений '%1' были добавлены.";
$content['LN_PARSERS_ERROR_NOFIELDS'] = "Парсер сообщений '%1' не имеет ни одного нетипичного поля для добавления.";
$content['LN_PARSERSMENU_LIST'] = "Список установленных парсеров сообщений";
$content['LN_PARSERS_ONLINELIST'] = "Все доступные парсеры";
$content['LN_PARSERS_'] = "";

// Command Line stuff
$content['LN_CMD_NOOP'] = "Operation parameter is missing";
$content['LN_CMD_NOLOGSTREAM'] = "Logstream source parameter is missing";
$content['LN_CMD_LOGSTREAMNOTFOUND'] = "Logstream Source with ID '%1' не может быть установлен в Database!";
$content['LN_CMD_COULDNOTGETROWCOUNT'] = "Нельзя обозначать rowcount from logstream source '%1'";
$content['LN_CMD_SUBPARAM1MISSING'] = "Subparameter 1 is missing, it should be set to 'all', 'since' or 'date'. For more details see the documentation.";
$content['LN_CMD_WRONGSUBOPORMISSING'] = "Получить полученную операционную операцию, или другой параметр является посылкой";
$content['LN_CMD_FAILEDTOCLEANDATA'] = "Failed to cleandata for logstream '%1'.";
$content['LN_CMD_CLEANINGDATAFOR'] = "Cleaning data for logstream source '%1'.";
$content['LN_CMD_ROWSFOUND'] = "Совершенно подключен и подготовлен '%1' ряд в logstream source.";
$content['LN_CMD_DELETINGOLDERTHEN'] = "Performing deletion of data entries on the '%1'.";
$content['LN_CMD_DELETEDROWS'] = "Выполнено Удаленный '%1' ряд в источнике логического источника.'";
$content['LN_CMD_'] = "";

// Report Options
$content['LN_REPORTS_EDIT'] ​​= "Редактировать отчет";
$content['LN_REPORTS_DELETE'] = "Удалить отчет";
$content['LN_REPORTS_REQUIREDFIELDS'] = "Необходимые поля";
$content['LN_REPORTS_ERROR_NOREPORTS'] = "Нет действительных отчетов в вашей системе.";
$content['LN_REPORTS_INIT'] = "Инициализировать настройки";
$content['LN_REPORTS_REMOVE'] = "Удалить настройки";
$content['LN_REPORTS_ERROR_IDNOTFOUND'] = "Не найдено ни одного отчета по ID '%1'.";
$content['LN_REPORTS_ERROR_INVALIDID'] = "Неверный id отчет.";
$content['LN_REPORTS_DETAILS'] = "Подробности для этого отчета";
$content['LN_REPORTS_WARNREMOVE'] = "Вы собираетесь удалить нетипичные поля, необходимые для отчета '%1'. Однако вы можете добавить эти поля еще раз, если вы измените свое мнение.";
$content['LN_REPORTS_ERROR_HASBEENREMOVED'] = "Все настройки для отчета '%1' были удалены.";
$content['LN_REPORTS_ERROR_HASBEENADDED'] = "Все необходимые настройки для отчета '%1' были добавлены.";
$content['LN_REPORTS_ERROR_NOFIELDS'] = "Отчет '% 1' не имеет никакого качества определений, которые могут быть added.";
$content['LN_REPORTS_ERROR_REPORTDOESNTNEEDTOBEREMOVED'] = "Отчет '% 1' не требуется для удаления или перехода.";
$content['LN_REPORTS_REMOVESAVEDREPORT'] = "Remove Savedreport";
$content['LN_REPORTS_CUSTOMTITLE'] = "Заголовок отчета";
$content['LN_REPORTS_CUSTOMCOMMENT'] = "Комментарий / Описание";
$content['LN_REPORTS_FILTERSTRING'] = "Срок фильтра";
$content['LN_REPORTS_OUTPUTFORMAT'] = "Формат вывода";
$content['LN_REPORTS_OUTPUTTARGET'] = "Outputtarget";
$content['LN_REPORTS_HASBEENADDED'] = "The Savedreport '%1' был успешно добавлен.";
$content['LN_REPORTS_HASBEENEDIT'] ​​= "The Savedreport '%1' был успешно изменен.";
$content['LN_REPORTS_SOURCEID'] = "Logstream source";
$content['LN_REPORTS_ERROR_SAVEDREPORTIDNOTFOUND'] = "Вы не получили отчет с ID '%1' found.";
$content['LN_REPORTS_ERROR_INVALIDSAVEDREPORTID'] = "Invalid savedreport id.";
$content['LN_REPORTS_RUNNOW'] = "Запустить создание сохраненного отчета сейчас!";
$content['LN_REPORTS_WARNDELETESAVEDREPORT'] = "Вы уверены, что хотите удалить savedreport '%1'?";
$content['LN_REPORTS_ERROR_DELSAVEDREPORT'] = "Deleting of savedreport with id '%1' failed!";
$content['LN_REPORTS_ERROR_HASBEENDEL'] = "The savedreport '%1' has be successfully deleted!";
$content['LN_REPORTS_ERROR_ERRORCHECKINGSOURCE'] = "Error при checking Savedreport Source: %1";
$content['LN_REPORTS_FILTERLIST'] = "Список фильтров";
$content['LN_REPORTS_FILTER'] = "Фильтр";
$content['LN_REPORTS_ADDFILTER'] = "Добавить фильтр";
$content['LN_REPORTS_FILTER_EDIT'] ​​= "Редактировать фильтр";
$content['LN_REPORTS_FILTER_MOVEUP'] = "Move filter up";
$content['LN_REPORTS_FILTER_MOVEDOWN'] = "Move filter down";
$content['LN_REPORTS_FILTER_REMOVE'] = "Удалить фильтр";
$content['LN_REPORTS_FILTEREDITOR'] = "Редактор фильтров";
$content['LN_REPORTS_FILTERSTRING_ONLYEDITIF'] = "Только edit row filterstring if you know what you doing! Note if you change filterstring, any changes made in the Filtereditor will be lost!";
$content['LN_REPORTS_ADVANCEDFILTERS'] = "Расширенные фильтры";
$content['LN_REPORTS_ADVANCEDFILTERLIST'] = "List of advanced report filters";
$content['LN_REPORTS_OUTPUTTARGET_DETAILS'] = "Outputtarget Options";
$content['LN_REPORTS_OUTPUTTARGET_FILE'] = "Путь и название файла вывода";
$content['LN_REPORTS_CRONCMD'] = "Local Report command";
$content['LN_REPORTS_LINKS'] = "Related Links";
$content['LN_REPORTS_INSTALLED'] = "Установлено";
$content['LN_REPORTS_NOTINSTALLED'] = "Не установлено";
$content['LN_REPORTS_DOWNLOAD'] = "Ссылка на загрузку";
$content['LN_REPORTS_SAMPLELINK'] = "Пример отчета";
$content['LN_REPORTS_DETAILSFOR'] = "Подробности для отчета '%1'";
$content['LN_REPORTS_PERFORMANCE_WARNING'] = "Logstream Performance Warning";
$content['LN_REPORTS_OPTIMIZE_LOGSTREAMSOURCE'] = "Yes, optimize logstream source!";
$content['LN_REPORTS_OPTIMIZE_INDEXES'] = "Источник данных '%1' не оптимизирован для этого отчета.Существует по крайней мере один недостающий индекс. Создание ИНДЕКСОВ ускорит генерирование отчетов. может занять более нескольких минут, поэтому запаситесь терпением!";
$content['LN_REPORTS_ERROR_FAILED_CREATE_INDEXES'] = "Ошибка создания ИНДЕКСОВ для источника данных '%1' с кодом ошибки '%2'";
$content['LN_REPORTS_INDEX_CREATED'] = "Logstream INDEXES created";
$content['LN_REPORTS_INDEX_CREATED_SUCCESS'] = "Успешно созданы все ИНДЕКСЫ для источника данных '%1'.";
$content['LN_REPORTS_OPTIMIZE_TRIGGER'] = "Источник данных '%1' не имеет установленного триггера для автоматической генерации сообщений по контрольной сумме INSERT. Создание ТРИГЕРА ускорит генерирование отчетов. <br><br>Вы хотите, чтобы LogAnalyzer создал ТРИ ;
$content['LN_REPORTS_TRIGGER_CREATED'] = "Logstream TRIGGER создан";
$content['LN_REPORTS_TRIGGER_CREATED_SUCCESS'] = "Успешно создан ТРИГЕР для источника данных '%1'.";
$content['LN_REPORTS_ERROR_FAILED_CREATE_TRIGGER'] = "Неудача при создании ТРИГЕРА для источника данных '%1' с кодом ошибки '%2'";
$content['LN_REPORTS_CHANGE_CHECKSUM'] = "Сохранение поля для данных источника '%1' не предназначено для идентификатора INT. Выполнить report work properly, change the checksum field для заданного INT является необходимой! <br><br>Do you want LogAnalyzer к изменению CHECKSUM поле теперь?
$content['LN_REPORTS_ERROR_FAILED_CHANGE_CHECKSUM'] = "Неудача при изменении поля контрольной суммы для источника данных '%1' с кодом ошибки '%2'";
$content['LN_REPORTS_CHECKSUM_CHANGED'] = "Контрольная сумма поля была изменена";
$content['LN_REPORTS_CHECKSUM_CHANGED_SUCCESS'] = "Успешно изменено поле контрольной суммы для источника данных '%1'.";
$content['LN_REPORTS_LOGSTREAM_WARNING'] = "Logstream Warning";
$content['LN_REPORTS_ADD_MISSINGFIELDS'] = "Источник данных '%1' не содержит все необходимые поля данных. Существует по крайней мере одно отсутствующее поле . <br><br>Вы хотите, чтобы LogAnalyzer создал отсутствующие поля сейчас?";
$content['LN_REPORTS_ERROR_FAILED_ADDING_FIELDS'] = "Не удалось добавить недостающие поля данных в источник данных '%1' с кодом ошибки '%2'";
$content['LN_REPORTS_FIELDS_CREATED'] = "Добавлены недостающие поля данных";
$content['LN_REPORTS_FIELDS_CREATED_SUCCESS'] = "Успешно добавлены отсутствующие поля данных для источника данных '%1'.";
$content['LN_REPORTS_RECHECKLOGSTREAMSOURCE'] = "Вы хотите проверить текущий logstream source again?";
$content['LN_REPORTS_ADDSAVEDREPORT'] = "Добавить Savedreport и сохранить изменения";
$content['LN_REPORTS_EDITSAVEDREPORT'] = "Сохранить изменения";
$content['LN_REPORTS_ADDSAVEDREPORTANDRETURN'] = "Add Savedreport and return to reportlist";
$content['LN_REPORTS_EDITSAVEDREPORTANDRETURN'] = "Совместное изменение и возврат к reportlist";
$content['LN_REPORTS_'] = "";


?>