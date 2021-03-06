<?php
$lang['author'] = 'Autor';
$lang['sysdefaults'] = 'Auf Standard zurücksetzen';
$lang['restoretodefaultsmsg'] = 'Diese Operation wird den Inhalt der Templates auf den System-Standard zurücksetzen. Wollen Sie dies wirklich tun?';
$lang['addarticle'] = 'Eintrag anlegen';
$lang['addcategory'] = 'Kategorie hinzuf&uuml;gen';
$lang['addnewsitem'] = 'News-Eintrag hinzuf&uuml;gen';
$lang['allcategories'] = 'Alle Kategorien';
$lang['allentries'] = 'Alle Eintr&auml;ge';
$lang['areyousure'] = 'Wollen Sie dies wirklich l&ouml;schen?';
$lang['articles'] = 'Artikel';
$lang['cancel'] = 'Abbrechen';
$lang['category'] = 'Kategorie';
$lang['categories'] = 'Kategorien';
$lang['changelog'] = '<ul>
<li>
<p>Version: 1.0</p>
<p>This module is a hacked and extended version of <em>Ted Kulp\'s</em> News module.  I simply added another field to the database, and some more code to make that field worl.... I also re-cleaned the code a bit, so it was a little easier to read, other than that, it\'s Ted\'s code.</p>
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
<p>- Add a "start" parameter to specify a start offset for news items</p>
<p>- The template tabs now have a "reset to default" button on them</p>
<p>- Start menu item is now required, but end date is optional when useexpirydate is on, 
<p>- Change the permissions model significantly, The "Modify News" permission is only for articles and categories. "Modify Templates" permission is required to edit the templates, and "Modify Site Preferences" is required to edit the options.</p> 
<p>- Put the rss feed titile into the lang entries</p>
</li> 
<p>Version 2.0.3</p>
<p>- Added the ability to track the original author of an article</p>
<li>
</ul>
</ul> 
';
$lang['content'] = 'Inhalt';
$lang['dateformat'] = '%s ist kein g&uuml;ltiges yyyy-mm-dd hh:mm:ss Format';
$lang['delete'] = 'L&ouml;schen';
$lang['description'] = 'News-Eintr&auml;ge hinzuf&uuml;gen, bearbeiten und l&ouml;schen';
$lang['detailtemplate'] = 'Detail-Template';
$lang['displaytemplate'] = 'Template anzeigen';
$lang['edit'] = 'Bearbeiten';
$lang['enddate'] = 'Verfallsdatum';
$lang['endrequiresstart'] = 'Die Angabe eines Verfallsdatums erfordert auch die Angabe eines Startdatums.';
$lang['entries'] = '%s Eintr&auml;ge';
$lang['status'] = 'Status';
$lang['expiry'] = 'Verf&auml;llt';
$lang['filter'] = 'Filter';
$lang['more'] = 'Mehr';
$lang['moretext'] = 'Mehr-Text';
$lang['name'] = 'Name';
$lang['news'] = 'News';
$lang['news_return'] = 'Zurück';
$lang['newcategory'] = 'Neue Kategorie';
$lang['needpermission'] = 'Sie ben&ouml;tigen die Berechtigung \'%s\', um diese Funktion nutzen zu k&ouml;nnen.';
$lang['nocategorygiven'] = 'Keine Kategorie vorhanden';
$lang['nocontentgiven'] = 'Kein Inhalt vorhanden';
$lang['noitemsfound'] = '<strong>Keine</strong> Eintr&auml;ge in dieser Kategorie gefunden: %s';
$lang['nopostdategiven'] = 'Kein Erstellungsdatum vorhanden';
$lang['note'] = '<em>Hinweis:</em> Datum/Zeit muss ein g&uuml;ltiges \'yyyy-mm-dd hh:mm:ss\' Format sein.';
$lang['notitlegiven'] = 'Kein Titel eingegeben';
$lang['numbertodisplay'] = 'Anzuzeigende Anzahl (leer lassen, um alle anzuzeigen)';
$lang['print'] = 'Drucken';
$lang['postdate'] = 'Erstellt am:';
$lang['postinstall'] = 'Stellen Sie sicher, dass User, welche News administrieren d&uuml;rfen, die Berechtigung "Modify News" haben.';
$lang['rssfeedtitle'] = 'CMS Made Simple RSS-Feed';
$lang['rsstemplate'] = 'RSS-Template';
$lang['selectcategory'] = 'Kategorie ausw&auml;hlen';
$lang['showchildcategories'] = 'Unterkategorien anzeigen';
$lang['sortascending'] = 'Aufsteigend sortieren';
$lang['startdate'] = 'Anfangsdatum';
$lang['startoffset'] = 'Anzeige mit dem n-ten Eintrag beginnen';
$lang['startrequiresend'] = 'Die Eingabe eines Startdatums erfordert auch die Eingabe eines Verfallsdatums.';
$lang['submit'] = 'Speichern';
$lang['summary'] = 'Zusammenfassung';
$lang['summarytemplate'] = 'Zusammenfassungs-Template';
$lang['title'] = 'Titel';
$lang['options'] = 'Optionen';
$lang['useexpiration'] = 'Verfallsdatum verwenden';
$lang['showautodiscovery'] = 'Link bei Erkennung eines Feeds automatisch anzeigen';
$lang['autodiscoverylink'] = 'URL f&uuml;r die automatische Feed-Erkennung (leer f&uuml;r Standardeinstellung)';
$lang['helpnumber'] = 'Maximal anzuzeigende Eintr&auml;ge - ohne Parameter werden alle Eintr&auml;ge angezeigt.';
$lang['helpstart'] = 'Mit dem n-ten Eintrag beginnen -- wenn Sie dieses Feld leer lassen, wird mit dem ersten Eintrag begonnen.';
$lang['helpmakerssbutton'] = 'Erzeugt einen Button mit einem Link zum RSS-Feed der News-Eintr&auml;ge.';
$lang['helpcategory'] = 'Zeigt nur Eintr&auml;ge aus dieser Kategorie an. Um auch die Unterkategorien anzuzeigen, geben Sie nach dem Kategorienamen ein * ein. Mehrere Kategorien k&ouml;nnen angezeigt werden, wenn diese mit Komma getrennt sind. Ohne entsprechende Angabe werden alle Kategorien angezeigt.';
$lang['helpmoretext'] = 'Text, der am Ende eines News-Eintrages erscheint, wenn der Artikel l&auml;nger ist als die vorgegebene Zusammenfassungs-L&auml;nge. Standard ist "more..."';
$lang['helpsummarytemplate'] = 'Verwendet ein separates Template f&uuml;r die Anzeige der Artikel-Zusammenfassung. Das Template muss sich im Ordner modules/News/templates befinden.';
$lang['helpdetailtemplate'] = 'Verwendet ein separates Template f&uuml;r die Anzeige des Artikels. Das Template muss sich im Ordner modules/News/templates befinden.';
$lang['helpsortby'] = 'Felder, nach denen die Eintr&auml;ge sortiert werden. Folgende Optionen sind m&ouml;glich: "news_date", "summary", "news_data", "news_category", "news_title". Standard ist "news_date".';
$lang['helpsortasc'] = 'Sortiert Eintr&auml;ge in aufsteigende Folge schneller als in absteigender (nach Datum).';
$lang['helpdetailpage'] = 'Seite für die Anzeige der News-Details.  Das kann ein Seiten-Alias oder eine ID sein. Dies ermöglicht, die Details in einem vom Zusammenfassungs-Template abweichenden Template anzeigen zu lassen.';
$lang['helpdateformat'] = 'Format, mit dem Datum und Zeit des Artikels angezeigt werden. Es basiert auf der <a href="http://php.net/strftime" target="_blank">strftime</a>-Funktion und kann im Template mit $entry->formatpostdate verwendet werden.';
$lang['help'] = '	<h3>Was macht dieses Modul?</h3>
	<p>News ist ein Modul, um Neuigkeiten im Blog-&auml;hnlichem Stil auf Ihrer Seite anzuzeigen, aber mit mehr M&ouml;glichkeiten. Nach der Installation des Moduls wird dem Admin-Men&uuml; ein Link zur News-Administrationsseite hinzugef&uuml;gt, &uuml;ber welchen Sie News-Kategorien ausw&auml;hlen oder hinzuf&uuml;gen k&ouml;nnen. Wurde eine Kategorie angelegt oder ausgew&auml;hlt, wird eine Liste der vorhandenen Eintr&auml;ge dieser Kategorie angezeigt. Von hier aus k&ouml;nnen Sie f&uuml;r diese Kategorie Eintr&auml;ge hinzuf&uuml;gen, bearbeiten oder l&ouml;schen.</p>
	<h3>Sicherheit</h3>
	<p>Um News-Eintr&auml;ge hinzuf&uuml;gen, bearbeiten oder l&ouml;schen zu k&ouml;nnen, muss der User einer Gruppe angeh&ouml;ren, die die \'Modify News\'-Berechtigung besitzt.</p>
	<h3>Wie wird es eingesetzt ?</h3>
	<p>Der einfachste Weg ist der Einsatz in Verbindung mit dem cms_module-Tag. Dieser f&uuml;gt das Modul in Ihr Template oder Seite oder wo immer Sie wollen ein und zeigt die News-Eintr&auml;ge an. Der einzuf&uuml;gende Code sollte so aussehen: <code>{cms_module module="news" number="5" category="Bier"}</code></p>';
?>