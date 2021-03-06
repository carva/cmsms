<?php
$lang['available_updates'] = 'Modules beschikbaar voor een update';
$lang['all_modules_up_to_date'] = 'Er zijn geen nieuwere modules beschikbaar in de repository';
$lang['error_module_object'] = 'Fout: kan geen gegevens vinden van de %s module';
$lang['error_nomatchingmodules'] = 'Fout: kan geen soortgelijke modules vinden in de repository';
$lang['error_nomodules'] = 'Fout: kan geen lijst van ge&iuml;nstalleerde modules maken';
$lang['upgrade_available'] = 'Nieuwere versie beschikbaar (%s), u heeft (%s)';
$lang['newversions'] = 'Beschikbare Upgrades';
$lang['error_depends'] = 'E&eacute;n of meer afhankelijke modules zijn niet ge&iuml;nstalleerd. U moet deze modules eerst installeren!';
$lang['msg_nodependencies'] = 'Dit bestand is niet bekend met enige afhankelijkheid';
$lang['dependstxt'] = 'Afhankelijkheden';
$lang['use_at_your_own_risk'] = 'Gebruik op eigen risico';
$lang['compatibility_disclaimer'] = 'De getoonde modules zijn gemaakt door zowel CMSMS ontwikkelaars, als derde partijen. Geen garanties op werkzaamheid, testen of compatibiliteit op je systeem kan worden gedaan. Aangeraden wordt om de informatie in de help en links te lezen alvorens te installeren.';
$lang['notice'] = 'Bericht';
$lang['general_notice'] = 'De getoonde versies zijn de laatste XML-versies die in de geselecteerde softwarebron zijn opgeslagen (meestal de CMS %s).  Dit kunnen, maar hoeven niet, de laatste versies te zijn van de modules. Om te controleren of latere versies beschikbaar zijn, kan de zoekfunctie op de %s worden gebruikt, waarbij op de &quot;Files&quot; knop gedrukt kan worden.';
$lang['incompatible'] = 'Onverenigbaar';
$lang['prompt_settings'] = 'Instellingen';
$lang['prompt_otheroptions'] = 'Andere opties';
$lang['reset'] = 'Opnieuw instellen';
$lang['error_permissions'] = '<strong><em>WAARSCHUWING:</em></strong> Onvoldoende rechten op de map om modules te installeren. Het probleem kan ook zijn dat PHP Safe mode op de server aan staat. Controleer of PHP Safe mode uit staat en of u voldoende rechten heeft op de map.';
$lang['error_minimumrepository'] = 'De softwarebronversie is niet compatibel met deze Module Manager';
$lang['prompt_reseturl'] = 'Standaard URL instellen';
$lang['prompt_resetcache'] = 'Lokale softwarebron-cache vernieuwen';
$lang['prompt_dl_chunksize'] = 'Download blokgrootte (Kb)';
$lang['text_dl_chunksize'] = 'De maximale hoeveelheid data die in &eacute;&eacute;n keer wordt gedownload (bij een module installatie)';
$lang['error_nofilesize'] = 'Geen &quot;filesize&quot; parameter opgegeven';
$lang['error_nofilename'] = 'Geen &quot;filename&quot; parameter opgegeven';
$lang['error_checksum'] = 'Checksum fout. Dit wijst waarschijnlijk op een beschadigd bestand. Dit kan gebeurt zijn tijdens het uploaden door de developer naar de repository, of tijdens uw download.';
$lang['cantdownload'] = 'Kan niet downloaden';
$lang['download'] = 'Downloaden &amp; Installeren';
$lang['error_moduleinstallfailed'] = 'Moduleinstallatie mislukt';
$lang['error_connectnomodules'] = 'Ondanks dat er met succes een verbinding met de aangegeven module-softwarebron is gemaakt, lijkt het erop dat deze softwarebron nog geen modules bevat.';
$lang['submit'] = 'Verstuur';
$lang['text_repository_url'] = 'De URL moet het formaat hebben http://www.mijnsite.nl/path/soap.php?module=ModuleRepository';
$lang['prompt_repository_url'] = 'Modulebron URL:';
$lang['availmodules'] = 'Beschikbare modules';
$lang['preferences'] = 'Voorkeuren';
$lang['preferencessaved'] = 'Voorkeuren opgeslagen';
$lang['repositorycount'] = 'Modules gevonden in de softwarebron';
$lang['instcount'] = 'Ge&iuml;nstalleerde modules';
$lang['availablemodules'] = 'De huidige modulestatus beschikbaar uit de huidige softwarebron';
$lang['helptxt'] = 'Hulp';
$lang['abouttxt'] = 'Over';
$lang['xmltext'] = 'XML-bestand';
$lang['nametext'] = 'Modulenaam';
$lang['vertext'] = 'Versie';
$lang['sizetext'] = 'Grootte (Kilobytes)';
$lang['statustext'] = 'Status/Aktie';
$lang['uptodate'] = 'Ge&iuml;nstalleerd';
$lang['install'] = 'installeer';
$lang['newerversion'] = 'Nieuwere versie ge&iuml;nstalleerd';
$lang['onlynewesttext'] = 'Toon alleen de nieuwste versie';
$lang['upgrade'] = 'Bijwerken';
$lang['error_nosoapconnect'] = 'Kon geen verbinding met de SOAP server tot stand brengen';
$lang['error_soaperror'] = 'SOAP probleem';
$lang['error_norepositoryurl'] = 'De URL voor de module-bron is niet opgegeven';
$lang['friendlyname'] = 'Module Manager ';
$lang['postinstall'] = 'Module Manager is ge&iuml;nstalleerd';
$lang['postuninstall'] = 'De Module Manager is gede&iuml;nstalleerd. Gebruikers hebben niet langer de mogelijkheid om modules te installeren vanuit een externe softwarebron. Lokale installatie is nog wel mogelijk.';
$lang['really_uninstall'] = 'De Module Manager de&iuml;nstalleren? Hiermee verliest u de functionaliteit die deze module u biedt.';
$lang['uninstalled'] = 'Module gede&iuml;nstalleerd.';
$lang['installed'] = 'Moduleversie %s ge&iuml;nstalleerd.';
$lang['upgraded'] = 'Module bijgewerkt naar versie %s.';
$lang['moddescription'] = 'Een client voor de ModuleRepository. Deze module maakt het mogelijk modules te installeren zonder de noodzaak van ftp-en en uitpakken van bestanden. Module XML-bestanden worden gedownload met gebruik van SOAP, de integriteit wordt getest en het uitpakken gebeurt automatisch.';
$lang['error'] = 'Fout!';
$lang['admindescription'] = 'Een module om andere modules vanaf andere servers op te halen en te installeren.';
$lang['accessdenied'] = 'Toegang geweigerd. Controleer uw rechten.';
$lang['changelog'] = '<ul>
<li>Version 1.0. 10 January 2006. Initial Release.</li>
<li>Version 1.1. July, 2006. Released with the 1.0- beta</li>
<li>Version 1.1.1 August, 2006.  Require 1.0.1 of nuSOAP</li>
<li>Version 1.1.2 September, 2006.  Fixed a mistake that resulted in upgrade not not working at all</li>
<li>Version 1.1.3 September, 2006.
  <ul>
  <li>Bumped minimum CMS Version to 1.0</li>
  <li>Now use 1 request to get the complete list of modules from the repository</li>
  <li>Added some missing lang strings</li>
  <li>Added the ability to reset the local cache of repository information</li>
  <li>Added the ability to restore the repository url to factory defaults</li>
  </ul>
</li>
<li>Version 1.1.4 February, 2007.  Now handles the safe mode check, and disables upgrading or installing modules if the permissions are wrong.</li>
<li>Version 1.1.5 September, 2007. New preference to make only latest module version show. Added nice message after saving preferences</li>
</li>
<li>Version 1.1.6 May, 2008. Now show if available modules are incompatible with the current CMS_VERSION.</li>
</li>
<li>Version 1.2 June, 2008.<br/>
This version should reduce the memory requirements of this module, and trade it off for performance on the server, and mroe requests to the server.
   <ul>
    <li>Bumped Minimum CMS Version to 1.3</li>
    <li>Bumped Minimum repository version to 1.1</li>
    <li>Get rid of all of the session stuff</li>
    <li>Add support for requesting modules beginning with a prefix (usually a single letter)</li>
    <li>Add support for requestion only the newest versions of the modules</li>
   </ul>
</li>
<li>Version 1.2.1 August, 2008.<br/>
Added a warning message to the top of the admin display.
</li>
<li>Version 1.3 May, 2009.<br/>
Added dependency checking.
</li>';
$lang['help'] = '<h3>Wat doet het?</h3>
<p>Module Manager is een client voor de ModuleRepository-module en maakt het mogelijk modules te bekijken en te installeren van andere sites zonder de noodzaak te ftp-en of archieven te decomprimeren.  Module XML-bestanden worden gedownload met behulp van SOAP, de integriteit gecontroleerd en vervolgens automatisch uitgepakt.</p>
<h3>Hoe gebruik ik het?</h3>
<p>Om deze module te kunnen gebruiken heeft u &#039;Modify Modules&#039; rechten nodig en een volledige url naar een &#039;Modulebron&#039;. U kunt deze url opgeven in &#039;Websitebeheer&#039; -> &#039;Algemene instellingen&#039;.</p><br/>
<p>De interface met deze module vindt u onder &#039;Uitbreidingen&#039;. Selecteren van deze module levert een lijst met beschikbare XML-modules. Deze lijst wordt vergeleken met de huidige, ge&iuml;nstalleerde modules en het resultaat wordt getoond in een nieuw scherm. Vanaf dit scherm kunt u informatie over de modules bekijken, modules installeren of upgraden.</p>
<h3>Ondersteuning</h3>
<p>As per the GPL, this software is provided as-is. Please read the text of the license for the full disclaimer.</p>
<h3>Copyright and License</h3>
<p>Copyright &copy; 2006, calguy1000 <a href="mailto:calguy1000@hotmail.com"><calguy1000@hotmail.com></a>. All Rights Are Reserved.</p>
<p>This module has been released under the <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a>. You must agree to this license before using the module.</p>';
$lang['utma'] = '156861353.799969050.1225024056.1244555916.1244572805.339';
$lang['utmz'] = '156861353.1244550087.337.59.utmcsr=forum.cmsmadesimple.org|utmccn=(referral)|utmcmd=referral|utmcct=/index.php/topic,34493.new.html';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353';
?>