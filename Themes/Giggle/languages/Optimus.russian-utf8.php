<?php

$txt['optimus_main'] = 'Optimus Brave';
$txt['optimus_title'] = 'Поисковая оптимизация';

$txt['optimus_common_title'] = 'Общие настройки';
$txt['optimus_common_desc'] = 'Здесь можно изменить описание форума, настроить шаблоны заголовков страниц разделов и тем.';
$txt['optimus_verification_title'] = 'Проверочные мета-теги';
$txt['optimus_verification_desc'] = 'Здесь можно добавить любые проверочные коды из доступных ниже, для подтверждения права собственности на сайт.';
$txt['optimus_robots_title'] = 'robots.txt';
$txt['optimus_robots_desc'] = 'Здесь можно изменить некоторые параметры создания карты форума, а также (самое главное!) воспользоваться генератором правил для создания собственного robots.txt.';
$txt['optimus_terms_title'] = 'Поисковые запросы';
$txt['optimus_terms_desc'] = 'Здесь можно узнать, по каким поисковым запросам посетители попадают на ваш форум.';

$txt['optimus_main_page'] = 'Главная страница';
$txt['optimus_common_info'] = 'Содержание мета-тега description может использоваться в сниппетах (описаниях сайтов на странице результатов поиска).';
$txt['optimus_portal_compat'] = 'Интеграция с порталом';
$txt['optimus_portal_compat_set'] = array('Нет','Adk Portal','Dream Portal','EzPortal','PortaMx','SimplePortal','TinyPortal');
$txt['optimus_portal_index'] = 'Заголовок главной страницы портала';
$txt['optimus_forum_index'] = 'Заголовок главной страницы форума';
$txt['optimus_description'] = 'Краткое, но интересное описание форума<br /><span class="smalltext">Будет выведено в мета-теге <em>description</em>.</span>';
$txt['optimus_all_pages'] = 'Страницы тем и разделов';
$txt['optimus_tpl_info'] = 'Доступные переменные:<br/><strong>{board_name}</strong> &mdash; название раздела, <strong>{topic_name}</strong> &mdash; название темы,<br/><strong>{#}</strong> &mdash; номер текущей страницы, <strong>{cat_name}</strong> &mdash; название категории, <strong>{forum_name}</strong> &mdash; название форума.';
$txt['optimus_board_tpl'] = 'Шаблон заголовка страниц разделов';
$txt['optimus_topic_tpl'] = 'Шаблон заголовка страниц тем';
$txt['optimus_templates'] = array(
	'board' => array('{board_name}', ' - стр. {#} - ', '{forum_name}'),
	'topic' => array('{topic_name}', ' - стр. {#} - ', '{board_name} - {forum_name}')
);

$txt['optimus_board_description'] = 'Выводить описание раздела в мета-теге <em>description</em>';
$txt['optimus_topic_description'] = 'Выводить первое предложение первого сообщения текущей страницы темы в мета-теге <em>description</em>';
$txt['optimus_404_status'] = 'Возвращать <a href="http://ru.wikipedia.org/wiki/HTTP#.D0.9A.D0.BE.D0.B4.D1.8B_.D1.81.D0.BE.D1.81.D1.82.D0.BE.D1.8F.D0.BD.D0.B8.D1.8F" target="_blank">код 403/404</a>, в зависимости от статуса запрашиваемой страницы';
$txt['optimus_404_page_title'] = '404 - Страница не найдена';
$txt['optimus_404_h2'] = 'Ошибка 404';
$txt['optimus_404_h3'] = 'Извините, но такой страницы здесь нет.';
$txt['optimus_403_page_title'] = '403 - Доступ запрещён';
$txt['optimus_403_h2'] = 'Ошибка 403';
$txt['optimus_403_h3'] = 'Извините, но у вас нет доступа к этой странице.';

$txt['optimus_codes'] = 'Проверочные мета-теги';
$txt['optimus_titles'] = 'Поисковик (Сервис)';
$txt['optimus_name'] = 'Имя тега';
$txt['optimus_content'] = 'Значение';
$txt['optimus_meta_info'] = 'Справка: <span class="error">Что такое <a href="http://support.google.com/webmasters/bin/answer.py?hl=ru&answer=35659" target="_blank">проверочный мета-тег</a>?</span><br />Пожалуйста, указывайте только значения, содержащиеся в добавляемых мета-тегах (а не теги целиком).<br />Например: <span class="smalltext">&lt;meta name="<strong>google-site-verification</strong>" content="<strong>ЗНАЧЕНИЕ, КОТОРОЕ НУЖНО ВСТАВИТЬ В ПРАВЫЙ СТОЛБЕЦ</strong>" /&gt;</span>';
$txt['optimus_search_engines'] = array(
	'Google' => array('google-site-verification','<a href="http://www.google.com/webmasters/tools" target="_blank">Инструменты веб-мастера</a>'),
	'Yandex' => array('yandex-verification','<a href="http://webmaster.yandex.ru/" target="_blank">Яндекс.Вебмастер</a>'),
	'MSN' => array('msvalidate.01','<a href="http://www.bing.com/webmaster" target="_blank">MSN Webmaster Tools</a>'),
	'Yahoo' => array('y_key','<a href="https://siteexplorer.search.yahoo.com/" target="_blank">Yahoo Site Explorer</a>'),
	'Alexa' => array('alexaVerifyID','<a href="http://www.alexa.com/siteowners" target="_blank">Alexa Site Tools</a>')
);

$txt['optimus_counters'] = 'Счётчики';
$txt['optimus_counters_desc'] = 'В этой секции можно добавлять и изменять всевозможные счетчики для подсчета посещений вашего форума.';
$txt['optimus_head_code'] = 'Невидимые счётчики с загрузкой в секции <strong>head</strong> (<a href="http://www.google.ru/analytics/sign_up.html" target="_blank">Google Analytics</a>)';
$txt['optimus_stat_code'] = 'Другие невидимые счётчики (например, <a href="http://metrika.yandex.ru/" target="_blank">Яндекс.Метрика</a> без информера)';
$txt['optimus_count_code'] = 'Обычные счётчики (<a href="http://www.liveinternet.ru/add" target="_blank">LiveInternet</a>, <a href="http://top100.rambler.ru/top100/rules.shtml.ru" target="_blank">Rambler\'s Top100</a>, <a href="http://www.spylog.ru/" target="_blank">SpyLOG</a>, <a href="http://top.mail.ru/add" target="_blank">Mail.ru</a>, <a href="http://hotlog.ru/newreg" target="_blank">HotLog</a> и т. п.)';
$txt['optimus_ignored_actions'] = 'Игнорируемые области (actions)';
$txt['optimus_ga_note'] = 'На заметку: <a href="http://www.simplemachines.ru/index.php?topic=12304.0" target="_blank">Реальный показатель отказов в Google Analytics</a>';

$txt['optimus_sitemap_section'] = 'Карта форума';
$txt['optimus_sitemap_desc'] = 'В Optimus Brave встроена функция генерации простенькой xml-карты, для небольших форумов. Настроить запуск скрипта генерации можно в <a href="?action=admin;area=scheduledtasks;sa=tasks" target="_blank">Диспетчере задач</a>.';

$txt['optimus_manage'] = 'Настройка robots.txt';
$txt['optimus_robots_old'] = 'Резервная копия прежнего robots.txt доступна по <a href="/old_robots.txt" target="_blank">этой ссылке</a>.';
$txt['optimus_links_title'] = 'Полезные ссылки';
$txt['optimus_links'] = array(
	'Как настроить редирект' => 'http://beget.ru/art9.html?id=1361',
	'Использование robots.txt (справка Яндекса)' => 'http://help.yandex.ru/webmaster/?id=996567',
	'Проверка robots.txt' => 'http://webmaster.yandex.ru/robots.xml',
	'Блокировка и удаление страниц с помощью robots.txt' => 'http://www.google.com/support/webmasters/bin/answer.py?hl=ru&amp;answer=156449',
	'Частые ошибки в robots.txt' => 'http://robotstxt.org.ru/robotstxterrors',
	'Авторегистрация форума в каталогах Рунета' => 'http://go.1ps.ru/pr/p.php?383933&amp;http://1ps.ru/cost/',
	'Автоматическое продвижение вашего сайта' => 'http://www.webeffector.ru/?invitation=f1d58982cd75dbe8e19be3d54a6b25fe'
);
$txt['optimus_rules'] = 'Генератор правил';
$txt['optimus_rules_hint'] = 'Можете воспользоваться этими заготовками для создания своих правил в поле справа:';
$txt['optimus_robots_hint'] = 'Сюда можно вставить собственные правила или изменить существующие:';
$txt['optimus_other_text']  = 'Знаете ли вы, что...';
$txt['optimus_post_scriptum'] = 'Если форум установлен на домене типа forum.mysite.ru, то ПС видит его как сайт, отдельный от mysite.ru. Поэтому показатели ТИЦ, PR и авторитет начисляются ему отдельно и на главный домен не передаются. Если же выбран домен mysite.ru/forum, то информация о нём напрямую связана с главным доменом и происходит обмен показателями сайта и форума.';
$txt['optimus_useful'] = 'Пояснения по каждой строчке &mdash; <a href="http://dragomano.ru/page/pravilnyj-robotstxt-dlja-smf" target="_blank">здесь</a>.';

$txt['scheduled_task_optimus_sitemap'] = 'Генерация карты форума';
$txt['scheduled_task_desc_optimus_sitemap'] = 'Рекомендуемая периодичность запуска &mdash; один раз в день.';
$txt['optimus_sitemap_rec'] = ' Optimus Brave пока не умеет разбивать файлы на несколько частей.';
$txt['optimus_sitemap_url_limit'] = 'В файле sitemap должно быть не более 50 тысяч ссылок!';
$txt['optimus_sitemap_size_limit'] = 'Размер файла %1$s не должен превышать 10 МБ!';
$txt['optimus_sitemap_xml_link'] = 'Sitemap XML';

$txt['optimus_search_stats'] = 'Вести статистику поисковых запросов';
$txt['optimus_chart_title'] = 'Топ-%1$s запросов';
$txt['optimus_terms_none'] = 'Статистики пока нет. Возможно, ваш форум ещё не проиндексирован.';
$txt['optimus_terms'] = array(
	'google' => 'q',
	'yandex' => 'text',
	'nigma' => 's',
	'mail.ru' => 'q'
);

?>