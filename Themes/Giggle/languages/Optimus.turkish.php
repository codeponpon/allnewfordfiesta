<?php

$txt['optimus_main'] = 'Optimus Brave';
$txt['optimus_title'] = 'Arama Motoru Optimizasyonu';

$txt['optimus_common_title'] = 'Genel ayarlar';
$txt['optimus_common_desc'] = 'Bu sayfada forum a��klamas�n� de�i�tirebilir, sayfa ba�l�klar�n�n �ablonlar�n� y�netebilirsiniz.';
$txt['optimus_verification_title'] = 'Meta etiketleri do�rulamas�';
$txt['optimus_verification_desc'] = 'Bu sayfada a�a��daki listeden herhangi bir genel veya do�rulama kodu ekleyebilirsiniz.';
$txt['optimus_robots_title'] = 'robots.txt';
$txt['optimus_robots_desc'] = 'Bu sayfada forum haritas� olu�turman�n baz� se�eneklerini de�i�tirebilirsiniz, bunun yan� s�ra �zel �reteci kullanarak bir robots.txt dosyas� de�i�tirebilirsiniz.';
$txt['optimus_terms_title'] = 'Arama terimleri';
$txt['optimus_terms_desc'] = 'Arama terimleri insanlar�n forumunuzu bulmak i�in arama motorlar�n�n arama formlar�na yazd��� kelime ve ifadelerdir.';

$txt['optimus_main_page'] = 'Anasayfa';
$txt['optimus_common_info'] = 'Peki, e�er robot bir sayfa ile bir arama sorgusunun e�le�ti�ini belirlerse a��klama etiketi i�eri�i dikkate al�nabilir.';
$txt['optimus_portal_index'] = 'Portal anasayfa ba�l���';
$txt['optimus_forum_index'] = 'Forum anasayfa ba�l���';
$txt['optimus_description'] = 'K�sa ama ilgin� bir forum yorumu<br /><span class="smalltext"><em>description</em> etiketinin i�eri�i olarak kullan�lacakt�r.</span>';
$txt['optimus_all_pages'] = 'Konu/b�l�m sayfalar�n�n ayarlar�';
$txt['optimus_tpl_info'] = 'Olas� de�i�kenler:<br/><strong>{board_name}</strong> &mdash; b�l�m ad�, <strong>{topic_name}</strong> &mdash; konu ba�l���,<br/><strong>{#}</strong> &mdash; ge�erli sayfa numaras�, <strong>{cat_name}</strong> &mdash; kategori ad�, <strong>{forum_name}</strong> &mdash; forumunuzun ad�.';
$txt['optimus_board_tpl'] = 'B�l�m sayfalar�n�n ba�l�k �ablonu';
$txt['optimus_topic_tpl'] = 'Konu sayfalar�n�n ba�l�k �ablonu';
$txt['optimus_templates'] = array(
	'board' => array('{board_name}', ' - sayfa {#} - ', '{forum_name}'),
	'topic' => array('{topic_name}', ' - sayfa {#} - ', '{board_name} - {forum_name}')
);

$txt['optimus_board_description'] = 'B�l�m a��klamas�n� meta-etikete g�nder <em>description</em>';
$txt['optimus_topic_description'] = 'Konunun ilk mesaj�n�n ilk c�mlesini meta-etikete g�nder <em>description</em>';
$txt['optimus_404_status'] = '�stenen sayfa durumuna g�re <a href="http://en.wikipedia.org/wiki/List_of_HTTP_status_codes" target="_blank">403/404 kodunu</a> getir';
$txt['optimus_404_page_title'] = '404 - Sayfa bulunamad�';
$txt['optimus_404_h2'] = 'Hata 404';
$txt['optimus_404_h3'] = '�zg�n�m, ama istenilen sayfa bulunamad�.';
$txt['optimus_403_page_title'] = '403 - Eri�im Yasak';
$txt['optimus_403_h2'] = 'Hata 403';
$txt['optimus_403_h3'] = '�zg�n�m, ancak bu sayfaya eri�im hakk�n�z yok.';

$txt['optimus_codes'] = 'Do�rulama meta etiketleri';
$txt['optimus_titles'] = 'Arama Motoru (Ara�lar�)';
$txt['optimus_name'] = 'Ad�';
$txt['optimus_content'] = '��erik';
$txt['optimus_meta_info'] = ' L�tfen sadece <strong>content</strong> meta etiketinin parametre de�erlerini kullan�n.<br />�rne�in: <span class="smalltext">&lt;meta name="google-site-verification" content="<strong>SA� S�TUNA YAPI�TIRMANIZ GEREKEN DE�ER</strong>" /&gt;</span>';
$txt['optimus_search_engines'] = array(
	'Google' => array('google-site-verification','<a href="http://www.google.com/webmasters/tools" target="_blank">Web Y�neticisi Ara�lar�</a>'),
	'Yandex' => array('yandex-verification','<a href="http://webmaster.yandex.com/" target="_blank">Yandex.Web Y�neticisi</a>'),
	'MSN' => array('msvalidate.01','<a href="http://www.bing.com/webmaster" target="_blank">MSN Web Y�neticisi Ara�lar�</a>'),
	'Yahoo' => array('y_key','<a href="https://siteexplorer.search.yahoo.com/" target="_blank">Yahoo Site Taray�c�s�</a>'),
	'Alexa' => array('alexaVerifyID','<a href="http://www.alexa.com/siteowners" target="_blank">Alexa Site Ara�lar�</a>')
);

$txt['optimus_counters'] = 'Saya�lar';
$txt['optimus_counters_desc'] = 'Bu b�l�mde forumunuza ziyaretleri hesaplamak i�in saya� �e�itleri ekleyebilir veya de�i�tirebilirsiniz.';
$txt['optimus_stat_code'] = 'G�r�nmez saya�lar (<a href="http://www.google.com/analytics/sign_up.html" target="_blank">Google Analytics</a>, <a href="http://piwik.org/" target="_blank">Piwik</a> etc)';
$txt['optimus_count_code'] = 'G�r�n�r saya�lar (<a href="http://www.freestats.com/" target="_blank">FreeStats</a>, <a href="http://www.superstats.com/" target="_blank">SuperStats</a>, <a href="http://www.prtracker.com/FreeCounter.html" target="_blank">PRTracker</a> etc)';
$txt['optimus_ignored_actions'] = 'Yoksay�lan eylemler';

$txt['optimus_sitemap_section'] = 'Forum haritas�';
$txt['optimus_sitemap_desc'] = 'Basit bir site haritas� ister misiniz? Optimus Brave k���k forumlar i�in sitemap.xml olu�turabilir. Sadece <a href="?action=admin;area=scheduledtasks;sa=tasks" target="_blank">Zamanlanm�� G�revler</a>e gidin ve Site Haritas� Olu�turma g�revini etkinle�tirin.';

$txt['optimus_manage'] = 'Robots.txt y�net';
$txt['optimus_robots_old'] = 'Eski (y�klemeden �nceki) robots.txt i�eri�ini <a href="/old_robots.txt" target="_blank">bu ba�lant�dan</a> g�rebilirsiniz.';
$txt['optimus_links_title'] = 'Faydal� ba�lant�lar';
$txt['optimus_links'] = array(
	'.htaccess d�zenleme' => 'http://httpd.apache.org/docs/trunk/howto/htaccess.html',
	'robots.txt kullan�m�' => 'http://help.yandex.com/webmaster/?id=1113851',
	'robots.txt dosyas� kullanarak sayfalar� engelleme veya kald�rma' => 'http://www.google.com/support/webmasters/bin/answer.py?hl=en&amp;answer=156449'
);

$txt['optimus_rules'] = 'Kural olu�turucu';
$txt['optimus_rules_hint'] = 'Siz sa�daki alana bu kurallar� kopyalayabilirsiniz:';
$txt['optimus_robots_hint'] = 'Burada kendi kurallar�n�z� ekleyebilir veya mevcut olanlar� de�i�tirebilirsiniz:';
$txt['optimus_other_text'] = 'L�tfen unutmay�n';
$txt['optimus_post_scriptum'] = '<span class="alert">Bu de�i�ikli�i kendi sorumlulu�unuzda kullan�n</span>';
$txt['optimus_useful'] = '';

$txt['scheduled_task_optimus_sitemap'] = 'Forum Haritas� Olu�tur';
$txt['scheduled_task_desc_optimus_sitemap'] = '�nerilen d�zenlilik &mdash; g�nde bir defa.';
$txt['optimus_sitemap_rec'] = ' Optimus Brave dosyalar� birka� par�aya b�lemez.';
$txt['optimus_sitemap_url_limit'] = 'Site Haritas� dosyas� 50.000\'den fazla URL i�ermemelidir!';
$txt['optimus_sitemap_size_limit'] = '%1$s dosyas� 10 MB\'den b�y�k olmamal�d�r.!';

$txt['optimus_search_stats'] = 'Arama terimleri kayd�n� etkinle�tir';
$txt['optimus_chart_title'] = 'Arama terimleri - En �yi %1$s';
$txt['optimus_terms_none'] = '�statistikler mevcut de�il. Belki forumunuz hen�z indekslenmemi�tir.';
$txt['optimus_terms'] = array(
	'google' => 'q',
	'yahoo' => 'p',
	'bing' => 'q',
	'alexa' => 'q'
);

?>