<?php
$lang['author'] = 'Autor';
$lang['sysdefaults'] = 'Auf die Voreinstellungen zur&uuml;cksetzen';
$lang['restoretodefaultsmsg'] = 'Diese Funktion setzt den Inhalt der Templates auf die Systemeinstellung zur&uuml;ck. Wollen Sie wirklich fortfahren?';
$lang['addarticle'] = 'Artikel hinzuf&uuml;gen';
$lang['articleadded'] = 'Der Artikel wurde erfolgreich hinzugef&uuml;gt.';
$lang['articleupdated'] = 'Der Artikel wurde erfolgreich aktualisiert.';
$lang['articledeleted'] = 'Der Artikel wurde erfolgreich gel&ouml;scht.';
$lang['addcategory'] = 'Kategorie hinzuf&uuml;gen';
$lang['categoryadded'] = 'Die Kategorie wurde erfolgreich hinzugef&uuml;gt.';
$lang['categoryupdated'] = 'Die Kategorie wurde erfolgreich aktualisiert.';
$lang['categorydeleted'] = 'Die Kategorie wurde erfolgreich gel&ouml;scht.';
$lang['addnewsitem'] = 'News-Eintrag hinzuf&uuml;gen';
$lang['allcategories'] = 'Alle Kategorien';
$lang['allentries'] = 'Alle Eintr&auml;ge';
$lang['areyousure'] = 'Wollen Sie dies wirklich l&ouml;schen?';
$lang['articles'] = 'Artikel';
$lang['cancel'] = 'Abbrechen';
$lang['category'] = 'Kategorie';
$lang['categories'] = 'Kategorien';
$lang['default_category'] = 'Standard-Kategorie';
$lang['changelog'] = '<ul>
<li>
<p>Version: 1.0</p>
<p>This module is a hacked and extended version of <em>Ted Kulp&#039;s</em> News module.  I simply added another field to the database, and some more code to make that field worl.... I also re-cleaned the code a bit, so it was a little easier to read, other than that, it&#039;s Ted&#039;s code.</p>
</li> 
<li> 
<p>Version: 1.1</p> 
<p>Added the ability to set an automatic expiry date from a pulldown, moved the category selection, and on the main page you now filter the entries you want to see.</p> 
</li> 
<li> 
<p>Version: 1.2</p> 
<p>Added summary, no_anchor and length parameters.  In summary mode links are made to the real articles, tags are stripped, and links are insreted to the news page and the specific news item.</p> 
</li> 
<li> 
<p>Version: 1.3</p> 
<p>Minor cosmetic changes</p> 
</li> 
<li> 
<p>Version 1.5</p> 
<p>Merged into the trunk News module</p> 
</li> 
<li> 
<p>Version 1.6</p> 
<p>Added pagination, and moved the add button to the top (calguy)</p>
</li>
<li>
<p>Version 2.0</p>
<p>Re-written to use smarty templates, and several other significant improvements</p>
</li>
<li>
<p>Version 2.0.1</p>
<p>Minor tweaks to the RSS output to allow it to work correctly on different browsers, and to support non alpha numeric characters in the description.</p> 
</li> 
<li>
<p>Version 2.0.2</p>
<p>- Add a &quot;start&quot; parameter to specify a start offset for news items</p>
<p>- The template tabs now have a &quot;reset to default&quot; button on them</p>
<p>- Start menu item is now required, but end date is optional when useexpirydate is on, 
<p>- Change the permissions model significantly, The &quot;Modify News&quot; permission is only for articles and categories. &quot;Modify Templates&quot; permission is required to edit the templates, and &quot;Modify Site Preferences&quot; is required to edit the options.</p> 
<p>- Put the rss feed titile into the lang entries</p>
</li> 
<p>Version 2.0.3</p>
<p>- Added the ability to track the original author of an article</p>
</li>
<li>
<p>Version 2.2</p>
<p>- Added browsecat parameter
</li>
</ul>';
$lang['content'] = 'Inhalt';
$lang['dateformat'] = '%s ist kein g&uuml;ltiges yyyy-mm-dd hh:mm:ss Format';
$lang['delete'] = 'L&ouml;schen';
$lang['description'] = 'News-Eintr&auml;ge hinzuf&uuml;gen, bearbeiten und l&ouml;schen';
$lang['detailtemplate'] = 'Detail-Template';
$lang['detailtemplateupdated'] = 'Das aktualisierte Detail-Template wurde erfolgreich in der Datenbank gespeichert.';
$lang['displaytemplate'] = 'Template anzeigen';
$lang['edit'] = 'Bearbeiten';
$lang['enddate'] = 'Verfallsdatum';
$lang['endrequiresstart'] = 'Die Angabe eines Verfallsdatums erfordert auch die Angabe eines Startdatums.';
$lang['entries'] = '%s Eintr&auml;ge';
$lang['status'] = 'Status';
$lang['expiry'] = 'Ablauf';
$lang['filter'] = 'Filter';
$lang['more'] = 'Weiterlesen ...';
$lang['category_label'] = 'Kategorie:';
$lang['author_label'] = 'Erstellt von:';
$lang['moretext'] = 'Text f&uuml;r den Link &quot;Weiterlesen ...&quot;';
$lang['name'] = 'Name';
$lang['news'] = 'News';
$lang['news_return'] = 'Zur&uuml;ck';
$lang['newcategory'] = 'Neue Kategorie';
$lang['needpermission'] = 'Sie ben&ouml;tigen die Berechtigung &#039;%s&#039;, um diese Funktion nutzen zu k&ouml;nnen.';
$lang['nocategorygiven'] = 'Keine Kategorie vorhanden';
$lang['nocontentgiven'] = 'Kein Inhalt vorhanden';
$lang['noitemsfound'] = '<strong>Keine</strong> Eintr&auml;ge in dieser Kategorie gefunden: %s';
$lang['nopostdategiven'] = 'Kein Erstellungsdatum vorhanden';
$lang['note'] = '<em>Hinweis:</em> Datum/Zeit muss ein g&uuml;ltiges &#039;yyyy-mm-dd hh:mm:ss&#039; Format sein.';
$lang['notitlegiven'] = 'Kein Titel eingegeben';
$lang['nonamegiven'] = 'Kein Name eingegeben';
$lang['numbertodisplay'] = 'Anzuzeigende Anzahl (leer lassen, um alle anzuzeigen)';
$lang['print'] = 'Drucken';
$lang['postdate'] = 'Erstellt am:';
$lang['postinstall'] = 'Stellen Sie sicher, dass User, welche News administrieren d&uuml;rfen, die Berechtigung &quot;Modify News&quot; haben.';
$lang['rssfeedtitle'] = 'CMS made simple RSS-Feed';
$lang['rsstemplate'] = 'RSS-Template';
$lang['selectcategory'] = 'Kategorie ausw&auml;hlen';
$lang['showchildcategories'] = 'Unterkategorien anzeigen';
$lang['sortascending'] = 'Aufsteigend sortieren';
$lang['startdate'] = 'Anfangsdatum';
$lang['startoffset'] = 'Beginnt mit der Anzeige ab dem n-ten Eintrag';
$lang['startrequiresend'] = 'Die Eingabe eines Startdatums erfordert auch die Eingabe eines Verfallsdatums.';
$lang['submit'] = 'Speichern';
$lang['summary'] = 'Zusammenfassung';
$lang['summarytemplate'] = 'Zusammenfassungs-Template';
$lang['summarytemplateupdated'] = 'Das Zusammenfassungs-Template wurde erfolgreich aktualisiert.';
$lang['title'] = 'Titel';
$lang['options'] = 'Optionen';
$lang['optionsupdated'] = 'Die Einstellungen wurden erfolgreich aktualisiert.';
$lang['useexpiration'] = 'Verfallsdatum verwenden';
$lang['showautodiscovery'] = 'Link bei Erkennen eines Feeds automatisch anzeigen';
$lang['autodiscoverylink'] = 'URL f&uuml;r die automatische Feed-Erkennung (leer f&uuml;r Standardeinstellung)';
$lang['eventdesc-NewsArticleAdded'] = 'Ausf&uuml;hren, wenn ein Artikel hinzugef&uuml;gt wurde.';
$lang['eventhelp-NewsArticleAdded'] = '<p>Ausf&uuml;hren, wenn ein Artikel hinzugef&uuml;gt wurde.</p>
<h4>Parameter</h4>
<ul>
<li>\&quot;news_id\&quot; - ID eines News-Artikels</li>
<li>\&quot;category_id\&quot; - ID der Kategorie f&uuml;r diesen Artikel</li>
<li>\&quot;title\&quot; - Titel des Artikels</li>
<li>\&quot;content\&quot; - Inhalt des Artikels</li>
<li>\&quot;summary\&quot; - Zusammenfassung des Artikels</li>
<li>\&quot;status\&quot; - Status des Artikels (&quot;Entwurf/draft&quot; oder &quot;ver&ouml;ffentlicht/publish&quot;)</li>
<li>\&quot;start_time\&quot; - Datum, ab dem der Artikel angezeigt werden soll</li>
<li>\&quot;end_time\&quot; - Datum, ab dem der Artikel nicht mehr angezeigt werden soll</li>
<li>\&quot;useexp\&quot; - das Verfallsdatum soll ignoriert oder auch nicht</li>
</ul>
';
$lang['eventdesc-NewsArticleEdited'] = 'Ausf&uuml;hren, wenn ein Artikel bearbeitet wurde.';
$lang['eventhelp-NewsArticleEdited'] = '<p>Ausf&uuml;hren, wenn ein Artikel bearbeitet wurde.</p>
<h4>Parameter</h4>
<ul>
<li>\&quot;news_id\&quot; - ID eines News-Artikels</li>
<li>\&quot;category_id\&quot; - ID der Kategorie f&uuml;r diesen Artikel</li>
<li>\&quot;title\&quot; - Titel des Artikels</li>
<li>\&quot;content\&quot; - Inhalt des Artikels</li>
<li>\&quot;summary\&quot; - Zusammenfassung des Artikels</li>
<li>\&quot;status\&quot; - Status des Artikels (&quot;Entwurf/draft&quot; oder &quot;ver&ouml;ffentlicht/publish&quot;)</li>
<li>\&quot;start_time\&quot; - Datum, ab dem der Artikel angezeigt werden soll</li>
<li>\&quot;end_time\&quot; - Datum, ab dem der Artikel nicht mehr angezeigt werden soll</li>
<li>\&quot;useexp\&quot; - das Verfallsdatum soll ignoriert oder auch nicht</li>
</ul>
';
$lang['eventdesc-NewsArticleDeleted'] = 'Ausf&uuml;hren, wenn ein Artikel gel&ouml;scht wurde.';
$lang['eventhelp-NewsArticleDeleted'] = '<p>Ausf&uuml;hren, wenn ein Artikel gel&ouml;scht wurde.</p>
<h4>Parameter</h4>
<ul>
<li>\&quot;news_id\&quot; - ID des News-Artikels</li>
</ul>
';
$lang['eventdesc-NewsCategoryAdded'] = 'Ausf&uuml;hren, wenn eine Kategorie hinzugef&uuml;gt wurde.';
$lang['eventhelp-NewsCategoryAdded'] = '<p>Ausf&uuml;hren, wenn eine Kategorie hinzugef&uuml;gt wurde.</p>
<h4>Parameter</h4>
<ul>
<li>\&quot;category_id\&quot; - ID der News-Kategorie</li>
<li>\&quot;name\&quot; - Name der News-Kategorie</li>
</ul>
';
$lang['eventdesc-NewsCategoryEdited'] = 'Ausf&uuml;hren, wenn eine Kategorie bearbeitet wurde.';
$lang['eventhelp-NewsCategoryEdited'] = '<p>Ausf&uuml;hren, wenn eine Kategorie bearbeitet wurde.</p>
<h4>Parameter</h4>
<ul>
<li>\&quot;category_id\&quot; - ID der News-Kategorie</li>
<li>\&quot;name\&quot; - Name der News-Kategorie</li>
</ul>
';
$lang['eventdesc-NewsCategoryDeleted'] = 'Ausf&uuml;hren, wenn eine Kategorie gel&ouml;scht wurde.';
$lang['eventhelp-NewsCategoryDeleted'] = '<p>Ausf&uuml;hren, wenn eine Kategorie gel&ouml;scht wurde.</p>
<h4>Parameter</h4>
<ul>
<li>\&quot;category_id\&quot; - ID der News-Kategorie</li>
</ul>
';
$lang['helpnumber'] = 'Anzahl der maximal anzuzeigenden Eintr&auml;ge - ohne Parameter werden alle Eintr&auml;ge angezeigt.';
$lang['helpstart'] = 'Beginnt mit dem n-ten Eintrag -- wird das Feld leer gelassen, wird mit dem ersten Eintrag begonnen.';
$lang['helpmakerssbutton'] = 'Erzeugt einen Button mit einem Link zum RSS-Feed der News-Eintr&auml;ge.';
$lang['helpcategory'] = 'Zeigt nur Eintr&auml;ge aus dieser Kategorie an. Um auch die Unterkategorien anzuzeigen, geben Sie nach dem Kategorienamen ein * ein. Mehrere Kategorien k&ouml;nnen angezeigt werden, wenn diese mit Komma getrennt sind. Ohne entsprechende Angabe werden alle Kategorien angezeigt.';
$lang['helpmoretext'] = 'Text, der am Ende eines News-Eintrages erscheint, wenn der Artikel l&auml;nger ist als die vorgegebene Zusammenfassungs-L&auml;nge. Standard ist &quot;Weiterlesen ...&quot;';
$lang['helpsummarytemplate'] = 'Verwendet ein separates Template f&uuml;r die Anzeige der Artikel-Zusammenfassung. Das Template muss sich im Ordner modules/News/templates befinden.';
$lang['helpdetailtemplate'] = 'Verwendet ein separates Template f&uuml;r die Anzeige des Artikels. Dieses muss sich im Ordner modules/News/templates befinden.';
$lang['helpsortby'] = 'Felder, nach denen die Eintr&auml;ge sortiert werden. M&ouml;gliche Optionen: &quot;news_date&quot;, &quot;summary&quot;, &quot;news_data&quot;, &quot;news_category&quot;, &quot;news_title&quot;. Standard ist &quot;news_date&quot;.';
$lang['helpsortasc'] = 'Sortiert Eintr&auml;ge in aufsteigende Folge schneller als in absteigender (nach Datum).';
$lang['helpdetailpage'] = 'Seite, auf der die News-Details angezeigt werden.  Das kann entweder ein Seiten-Alias oder eine ID sein. Damit ist es m&ouml;glich, die News-Details in einem anderen Template als die News-Zusammenfassung anzuzeigen.';
$lang['helpdateformat'] = 'Anzeigeformat von Datum / Zeit des Artikels. Es basiert auf der <a href=&quot;http://php.net/strftime&quot; target=&quot;_blank&quot;>strftime</a>-Funktion und kann im Template mit $entry->formatpostdate verwendet werden. Standardm&auml;&szlig;ig wird es auf %x gesetzt, was der serverseitigen Voreinstellung entspricht';
$lang['helpshowarchive'] = 'Zeigt nur die abgelaufenen Artikel.';
$lang['helpbrowsecat'] = 'Richtig ist hier browsecat=&quot;1&quot;. Zeigt eine Kategorieliste zum Ansehen';
$lang['help'] = '	<h3>Was macht dieses Modul?</h3>
	<p>News ist ein Modul, um Neuigkeiten im Blog-&auml;hnlichem Stil auf Ihrer Seite anzuzeigen, aber mit mehr M&ouml;glichkeiten. Nach der Installation des Moduls wird dem Admin-Men&uuml; ein Link zur News-Administrationsseite hinzugef&uuml;gt, &uuml;ber welchen Sie News-Kategorien ausw&auml;hlen oder hinzuf&uuml;gen k&ouml;nnen. Wurde eine Kategorie angelegt oder ausgew&auml;hlt, wird eine Liste der vorhandenen Eintr&auml;ge dieser Kategorie angezeigt. Von hier aus k&ouml;nnen Sie f&uuml;r diese Kategorie Eintr&auml;ge hinzuf&uuml;gen, bearbeiten oder l&ouml;schen.</p>
        <h3>Template-Variablen</h3>
	<ul>
		<li><b>itemcount</b> - die Anzahl der maximal anzuzeigenden News-Artikel.</li>
                <li><b>entry->authorname</b> - der volle Name des Autors einschlie&szlig;lich Vor- und Nachname.</li>
	</ul>
	<h3>Sicherheit</h3>
	<p>Um News-Eintr&auml;ge hinzuf&uuml;gen, bearbeiten oder l&ouml;schen zu k&ouml;nnen, muss der User einer Gruppe angeh&ouml;ren, die die Berechtigung &#039;Modify News&#039; hat.</p>
        <p>Um die Layout-Templates zu bearbeiten, muss der User einer Gruppe angeh&ouml;ren, die die Berechtigung &#039;Modify Templates&#039; hat.</p>
        <p>Um die globalen News-Einstellungen zu &auml;ndern, muss der User einer Gruppe angeh&ouml;ren, die die Berechtigung &#039;Modify Site Preferences&#039; hat.</p>
	<h3>Wie wird es eingesetzt ?</h3>
	<p>Der einfachste Weg ist der Einsatz in Verbindung mit dem {news}-Tag. Dieser f&uuml;gt das Modul in Ihr Template oder Seite oder wo immer Sie wollen ein und zeigt die News-Eintr&auml;ge an. Der einzuf&uuml;gende Code sollte so aussehen: <code>{news number=&quot;5&quot;}</code></p>';
$lang['utmz'] = '156861353.1175195299.128.78.utmccn=(referral)|utmcsr=forum.cmsmadesimple.org|utmcct=/index.php|utmcmd=referral';
$lang['utma'] = '156861353.717462736.1147511856.1175007997.1175195299.128';
?>