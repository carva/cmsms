<?php
$lang['setup_flat_urls'] = 'Flat URLs &auml;r aktiverat';
$lang['install_timezone'] = 'Vissa servrar som k&ouml;r med php 5,3 har inte r&auml;tt tidszon inst&auml;lld. V&auml;lj r&auml;tt tidszon fr&aring;n listan innan. Om detta inte &auml;r n&ouml;dv&auml;ndigt p&aring; din server kan du v&auml;lja &quot;Ingen&quot;';
$lang['timezone'] = 'Tidszon';
$lang['none'] = 'Ingen';
$lang['test_error_estrict'] = 'Testar error_reporting f&ouml;r att kontrollera att E_STRICT &auml;r deaktiverat';
$lang['test_estrict_failed'] = 'E_STRICT &auml;r aktiverat';
$lang['info_estrict_failed'] = 'Vissa paket som CMSMS anv&auml;nder fungerar inte bra med E_STRICT. Var v&auml;nlig deaktivera detta innan du forts&auml;tter.';
$lang['test_error_edeprecated'] = 'Testar error_reporting f&ouml;r att kontrollera att E_DEPRECATED &auml;r deaktiverat';
$lang['test_edeprecated_failed'] = 'E_DEPRECATED &auml;r aktiverat';
$lang['info_edeprecated_failed'] = 'Om E_DEPRECATED &auml;r aktiverat i din error reporting kommer anv&auml;ndare att se m&aring;nga varningsmeddelanden som kan p&aring;verka utseendet och funktionaliteten';
$lang['invalidemail'] = 'Den angivna e-postadressen &auml;r ogiltig';
$lang['empty_query'] = 'Empty query?? %s ';
$lang['no_db_driver'] = 'Inga kompatibla databasdrivrutiner hittades';
$lang['test_check_output_buffering'] = 'Kontrollerar ';
$lang['test_check_output_buffering_failed'] = 'Outputbuffring &auml;r inaktiverat. Du kommer antagligen inte att kunna anv&auml;nda n&aring;gon av funktionerna som kr&auml;ver detta';
$lang['phpinfo'] = 'Visa PHP-information';
$lang['mod_security'] = 'Apache ModSecurity';
$lang['test_check_tempnam'] = 'Kontrollerar tempnam-funktionen';
$lang['test_check_db_drivers'] = 'Databasdrivrutiner';
$lang['test_check_db_drivers_failed'] = 'Inga databasdrivrutiner hittades';
$lang['test_check_register_globals'] = 'Kontrollerar PHP register globals';
$lang['test_check_register_globals_failed'] = 'PHP register globals &auml;r aktiverat. Av s&auml;kerhetssk&auml;l b&ouml;r detta inaktiveras.';
$lang['test_check_disable_functions'] = 'Kontrollerar inaktiveringsfunktioner i PHP';
$lang['test_check_disable_functions_failed'] = 'Detta &auml;r en lista med funktioner som &auml;r inaktiverade p&aring; din server.';
$lang['install_admin_db_port'] = 'Databasport';
$lang['install_admin_db_port_info'] = 'Om du inte vet, l&auml;mna detta tomt f&ouml;r att anv&auml;nda standardinst&auml;llningarna.';
$lang['install_admin_db_socket'] = 'Databas-socket';
$lang['install_admin_db_socket_info'] = 'ST&Ouml;DS EJ.';
$lang['install_admin_frontendlang'] = 'Standardspr&aring;k f&ouml;r framsidan (frontend). Detta anger vilken nationell inst&auml;llning (locale) som anv&auml;nds f&ouml;r olika datumhanteringsfunktioner mm';
$lang['install_default_encoding'] = 'I de allra felsta fall ska default-encoding vara utf-8. Om du vill att denna ska vara en annan, &auml;ndra detta, men t&auml;nk p&aring; att alla spr&aring;k&ouml;vers&auml;ttningar &auml;r i UTF-8.';
$lang['installer_done'] = '[klar]';
$lang['installer_failed'] = '[misslyckades]';
$lang['create_permission'] = 'Skapa r&auml;ttighet...';
$lang['add_column_sql'] = 'L&auml;gger till kolumn i tabell %s ...';
$lang['update_table_sql'] = 'Uppdaterar tabell %s ...';
$lang['installing_module'] = 'Installerar %s modul...';
$lang['updating_schema_version'] = 'Uppdaterar schemaversion %s ...';
$lang['upgrade_config'] = 'Uppgraderar config.php';
$lang['upgrade_config_info'] = 'Konfigurationsuppgradering';
$lang['upgrade_failed_again'] = 'En eller flera uppgraderingar har misslyckats. V&auml;nligen r&auml;tta till problemet och klicka sedan p&aring; knappen nedan f&ouml;r att g&ouml;ra en ny kontroll';
$lang['upgrade_cache_dirs'] = 'Rensar cache katalog';
$lang['cannot_clean_cache_dirs'] = 'Kan inte rensa cache katalog!';
$lang['upgrade_schema'] = 'Uppgradera schema';
$lang['need_upgrade_schema'] = 'CMS beh&ouml;ver uppgraderas.<br />Du anv&auml;nder nu version %s och du beh&ouml;ver uppgradera till version %s';
$lang['schema_ok'] = 'Nu &auml;r CMS-databasen aktuell med schemaversion %s';
$lang['noneed_upgrade_schema'] = 'CMS-databasen &auml;r aktuell med schemaversion %s';
$lang['upgrade_modules'] = 'Uppgradera till&auml;gg';
$lang['noneed_upgrade_modules'] = 'K&auml;rnmodulerna &auml;r uppdaterade';
$lang['upgrade_sql_module_from_to'] = 'Uppgraderar SQL till &quot;%s&quot; modulen fr&aring;n %s till %s ...';
$lang['upgrade_event_module_from_to'] = 'Upgrading Events of &quot;%s&quot; module from %s to %s ...';
$lang['sitedown_not_removed'] = 'Kunde inte ta bort tmp/cache/SITEDOWN filen. V&auml;nligen ta bort den manuellt eller s&aring; kommer detta meddelande visas p&aring; din sida &quot;Site Down for Maintainence&quot; ';
$lang['upgrade_ok'] = 'V&auml;nligen kontrollera config.php, redigera alla nya inst&auml;llningar vid behov och &aring;terst&auml;ll filens r&auml;ttigheter till l&aring;st. Du b&ouml;r &auml;ven kontrollera att alla moduler &auml;r aktuella, g&aring; till Till&auml;gg -> Moduler och leta efter moduler m&auml;rkta &quot;Beh&ouml;ver Uppgradering&quot;';
$lang['upgrade_complete'] = 'Uppgradering klar';
$lang['upgrade_end'] = 'CMS &auml;r aktuellt. V&auml;nligen klicka %s f&ouml;r att visa din CMS sida, eller s&aring; kan du %s.';
$lang['here'] = 'h&auml;r';
$lang['go_to_admin'] = 'g&aring; till Adminpanelen';
$lang['errorfilenot'] = 'Filen hittades inte!';
$lang['errorfilenotwritable'] = 'Filen &auml;r inte skrivbar!';
$lang['nofiles'] = 'Denna resurs existerar inte!';
$lang['is_directory'] = 'Denna resurs &auml;r en katalog!';
$lang['is_readable_false'] = 'Denna resurs &auml;r inte l&auml;sbar!';
$lang['checksum_match'] = 'Checksumma matchar!';
$lang['checksum_not_match'] = 'Checksumma matchar inte!';
$lang['not_checksum'] = 'Ingen checksumma kunde h&auml;mtas!';
$lang['format_datetime'] = ' %c';
$lang['upload_err_ini_size'] = 'Filen &ouml;verstiger upload_max_filesize-direktivet i php.ini!';
$lang['upload_err_form_size'] = 'Den uppladdade filen &ouml;verstiger MAX_FILE_SIZE-direktivet som angavs i HTML-formul&auml;ret.';
$lang['upload_err_partial'] = 'Filen blev bara delvis uppladdad.';
$lang['upload_err_no_file'] = 'Ingen fil laddades upp.';
$lang['upload_err_no_tmp_dir'] = 'Saknar en temp-mapp.';
$lang['upload_err_cant_write'] = 'Det gick inte att skriva filen till h&aring;rddisken.';
$lang['upload_err_extension'] = 'Filuppladdningen stoppades av filtill&auml;gg.';
$lang['upload_err_empty'] = 'Filen har storlek noll';
$lang['upload_err_unknown'] = 'Ok&auml;nt fel uppstod med filuppladdningen.';
$lang['function_file_uploads_off'] = 'file_uploads &auml;r AV i dina php inst&auml;llningar!';
$lang['upload_file_no_readable'] = 'File upload no readable!';
$lang['upload_file_multiple'] = 'Mulituppladdning &auml;r inte till&aring;tet!';
$lang['test_check_magic_quotes_gpc'] = 'Magic quotes f&ouml;r Get/Post/Cookie-operationer ';
$lang['test_check_magic_quotes_gpc_failed'] = 'N&auml;r magic_quotes &auml;r aktiverat kommer alla enkelcitationstecken, dubbelcitationstecken och interpunktionstecken att automatiskt avslutas med ett interpunktionstecken. Du kan f&aring; problem med att spara mallar.';
$lang['test_check_magic_quotes_runtime'] = 'Magic quotes i runtime';
$lang['test_check_magic_quotes_runtime_failed'] = 'N&auml;r magic_quotes &auml;r aktiverat kommer de flesta funktioner som returnerar data fr&aring;n vilken sorts extern k&auml;lla som helst, inkl. databaser och textfiler, att ha citattecken &quot;escaped&quot; med bak&aring;tstreck. Detta kommer att orsaka problem med CMS Made Simple.';
$lang['install_admin_checksum'] = 'Kontrollera din installation';
$lang['upgrade_admin_checksum'] = 'Kontrollera din systemuppgradering';
$lang['checksum'] = 'Checksum-test';
$lang['checksum_file'] = 'Checksum-fil';
$lang['install_test_checksum'] = 'Du kan verifiera integriteten p&aring; dina CMS-filer genom att j&auml;mf&ouml;ra mot den ursprungliga kontrollsumman (checksum) av CMS. Det kan hj&auml;lpa till att finna problem med uppladdningar.';
$lang['checksum_passed'] = 'Alla kontrollsummor (checksums) matchar!';
$lang['checksum_failed'] = 'Kontrollsumma (checksum) matchar med fel. Kolla hj&auml;lpen f&ouml;r mer information.';
$lang['test_check_open_basedir'] = 'Kontrollerar PHP Open Basedir';
$lang['test_check_open_basedir_failed'] = 'Open basedir-begr&auml;nsningar &auml;r aktiva. Dessa begr&auml;nsningar kan ge dig problem med vissa till&auml;ggs funktioner.';
$lang['unlimited'] = 'O&auml;ndligt';
$lang['test_open_basedir_session_save_path'] = 'Open basedir restrictions appear to be in effect. If you have SESSION problems and ini_set works, you can try to enable session by cookies adding: ini_set(&#039;session.use_only_cookies&#039;, 1);  to top of include.php';
$lang['install_warn_db_createtables'] = 'Normalt s&aring; ska detta f&auml;lt alltid vara ikryssad.  Om du avkryssar denna s&aring; kan det uppst&aring; problem';
$lang['install_admin_tablesnotcreated'] = 'Processen f&auml;rdig. Installationen &auml;r f&auml;rdig och din &ouml;nskan om att inte skapa tabeller i databasen uppfylldes. Config-filen har blivit &aring;terst&auml;lld och alla f&ouml;rinstallationstester lyckades. Tack, och h&auml;r &auml;r din';
$lang['info_create_dir_and_file'] = 'HTTP-processens kan inte skapa en fil inne i en katalog som den &auml;ger. Detta betyder f&ouml;rmodligen att safe mode &auml;r aktiverat. M&aring;nga funktioner i  CMS Made Simple kommer inte att fungera fullt i detta l&auml;ge och en forts&auml;ttning &auml;r inte m&ouml;jlig.';
$lang['test_create_dir_and_file'] = 'Kontrollerar om httpd-processen kan skapa en fil inuti en mapp som den skapade.';
$lang['cms_site'] = 'CMS-sida';
$lang['or_greater'] = 'Eller h&ouml;gre';
$lang['sitename'] = 'Sidans namn';
$lang['warning_safe_mode'] = '<strong><em>VARNING:</em></strong> PHP Safe mode &auml;r aktiverat.  Detta kommer medf&ouml;ra problem med filer som laddas upp via webl&auml;saren, inkluderat bilder, teman och modul XML paketen.  V&auml;nligen kontakta din n&auml;tadministrat&ouml;r f&ouml;r att se om safe mode kan avaktiveras.';
$lang['test'] = 'Testa';
$lang['results'] = 'Resultat';
$lang['untested'] = 'Inte Testad';
$lang['owner'] = '&Auml;gare';
$lang['permissions'] = 'R&auml;ttigheter';
$lang['off'] = 'Av';
$lang['on'] = 'P&aring;';
$lang['permission_information'] = 'Information om r&auml;ttigheter';
$lang['server_os'] = 'Serverns operativsystem';
$lang['server_api'] = 'Server-API';
$lang['server_software'] = 'Servermjukvara';
$lang['server_information'] = 'Serverinformation';
$lang['session_save_path'] = 'Session Save-Path';
$lang['max_execution_time'] = 'Maximal Execution Time';
$lang['gd_version'] = 'GD-version';
$lang['upload_max_filesize'] = 'Maximal uppladdningsstorlek';
$lang['post_max_size'] = 'Maximal Post Size';
$lang['memory_limit'] = 'PHP-Memory Limit';
$lang['server_db_type'] = 'Serverdatabas';
$lang['server_db_version'] = 'Serverdatabasversion';
$lang['phpversion'] = 'Nuvarande PHP-version';
$lang['safe_mode'] = 'PHP-Safe Mode';
$lang['php_information'] = 'PHP-information';
$lang['cms_install_information'] = 'CMS installationsinformation';
$lang['cms_version'] = 'CMS version';
$lang['systeminfo_copy_paste'] = 'Var v&auml;nligen att kopiera denna text och klistra in den i v&aring;rt forum f&ouml;r support';
$lang['help_systeminformation'] = 'Information som visas nedanf&ouml;r &auml;r h&auml;mtad fr&aring;n olika platser och summeras h&auml;r s&aring; att du enkelt kan finna information n&auml;r du f&ouml;rs&ouml;ker hitta r&auml;tt diagnos p&aring; ett problem eller n&auml;r du s&ouml;ker hj&auml;lp med din CMS Made Simple installation.';
$lang['systeminfo'] = 'Systeminformation';
$lang['systeminfodescription'] = 'Visar olika informationsdelar som kan vara bra vid fels&ouml;kning av ditt system.';
$lang['error'] = 'Fel';
$lang['new_version_available'] = '<em>Notis:</em> En ny version av CMS Made Simple finns tillg&auml;nglig. Kontakta din administrat&ouml;r.';
$lang['info_urlcheckversion'] = 'Om denna url &auml;r satt till &amp;quot;none&amp;quot; .<br/>En blank str&auml;ng kommer resultera i att standard URLen anv&auml;nds.';
$lang['urlcheckversion'] = 'Anv&auml;nd denna l&auml;nk f&ouml;r att kontrollera om det finns nya CMS-versioner';
$lang['read'] = 'L&auml;s';
$lang['write'] = 'Skriv';
$lang['execute'] = 'Verkst&auml;ll';
$lang['group'] = 'Grupp';
$lang['other'] = 'Annan';
$lang['global_umask'] = 'File Creation Mask(umask)';
$lang['errorcantcreatefile'] = 'Kunde inte skapa en fil (r&auml;ttighets problem?)';
$lang['add'] = 'L&auml;gg till';
$lang['about'] = 'Om';
$lang['action'] = '&Aring;tg&auml;rd';
$lang['actionstatus'] = '&Aring;tg&auml;rd/Status';
$lang['active'] = 'Aktiv';
$lang['cantremove'] = 'Kan inte ta bort';
$lang['changepermissions'] = 'Byt r&auml;ttigheter';
$lang['changepermissionsconfirm'] = 'VIDTAG F&Ouml;RSIKTIGHET\n\nDen h&auml;r &aring;tg&auml;rden kommer att f&ouml;rs&ouml;ka g&ouml;ra alla modulens filer skrivbara av webbservern.\n&Auml;r du s&auml;ker p&aring;; att vill forts&auml;tta?';
$lang['success'] = 'Lyckat';
$lang['advanced'] = 'Avancerat';
$lang['back'] = 'Tillbaka till menyn';
$lang['cancel'] = 'Avbryt';
$lang['cantchmodfiles'] = 'Kunde inte &auml;ndra p&aring; r&auml;ttigheterna p&aring; n&aring;gra filer';
$lang['cantremovefiles'] = 'Kunde inte ta bort filer (r&auml;ttigheter?)';
$lang['create'] = 'Skapa';
$lang['database'] = 'Databas';
$lang['databaseprefix'] = 'Databasprefix';
$lang['databasetype'] = 'Databastyp';
$lang['date'] = 'Datum';
$lang['default'] = 'Standard ';
$lang['delete'] = 'Radera';
$lang['deleteconfirm'] = '&Auml;r du s&auml;ker p&aring; att du vill radera - %s - ?';
$lang['description'] = 'Beskrivning';
$lang['directoryexists'] = 'Denna mapp finns redan.';
$lang['down'] = 'Ner';
$lang['edit'] = 'Redigera';
$lang['email'] = 'Epost Adress';
$lang['errordeletingfile'] = 'Kunde inte radera filen. R&auml;ttighetsproblem?';
$lang['errordirectorynotwritable'] = 'Inte tillst&aring;nd att skriva i mappen. Detta kan bero p&aring; fil r&auml;ttigheter och &auml;garskap. Det kan &auml;ven bero p&aring; Safe mode. ';
$lang['cachenotwritable'] = 'Cache mappen &auml;r inte skrivbar. Att rensa cachen kommer inte att fungera. V&auml;nligen &auml;ndra mappen tmp/cache s&aring; att r&auml;ttigheterna blir l&auml;s/skriv/verkst&auml;llningsbar (chmod 777).  Kanske att du m&aring;ste st&auml;nga av safe mode.';
$lang['modulesnotwritable'] = 'Modul mappen &auml;r inte skrivbar, om du &ouml;nskar att installera moduler genom uppladdning av XML-fil s&aring; m&aring;ste du se till att mappen har l&auml;s/skriv/verkst&auml;ll (read/write/execute) r&auml;ttigheter (chmod 777).  Safe mode kan ocks&aring; vara en orsak.';
$lang['false'] = 'Falsk';
$lang['settrue'] = 'S&auml;tt till sant';
$lang['filename'] = 'Filnamn';
$lang['filesize'] = 'Filstorlek';
$lang['help'] = 'Hj&auml;lp';
$lang['language'] = 'Spr&aring;k';
$lang['lastname'] = 'Efternamn';
$lang['name'] = 'Namn';
$lang['password'] = 'L&ouml;senord';
$lang['passwordagain'] = 'L&ouml;senord (igen)';
$lang['remove'] = 'Ta bort';
$lang['saveconfig'] = 'Spara Config';
$lang['true'] = 'Sant';
$lang['setfalse'] = 'S&auml;tt till falsk';
$lang['type'] = 'Typ';
$lang['typenotvalid'] = 'Typen &auml;r inte giltig';
$lang['unknown'] = 'Ok&auml;nd';
$lang['user'] = 'Anv&auml;ndare';
$lang['userdefinedtags'] = 'Anv&auml;ndartaggar';
$lang['usermanagement'] = 'Anv&auml;ndar Administration';
$lang['username'] = 'Anv&auml;ndarnamn';
$lang['usernameincorrect'] = 'Anv&auml;ndarnamnet eller l&ouml;senordet &auml;r fel';
$lang['version'] = 'Version ';
$lang['install_title'] = 'CMS Made Simple Installation (steg %s)';
$lang['install_system'] = 'Installerar Systemet';
$lang['install_thanks'] = 'Tack f&ouml;r att du installerar CMS Made Simple';
$lang['upgrade_title'] = 'CMS Made Simple Upgradering (steg %s)';
$lang['upgrade_system'] = 'Upgradera Systemet';
$lang['upgrade_thanks'] = 'Tack f&ouml;r att du uppgraderade CMS Made Simple till';
$lang['install_please_read'] = 'V&auml;nligen l&auml;s <a href="http://wiki.cmsmadesimple.org/index.php/User_Handbook/Installation/Troubleshooting">Installation Troubleshooting</a> - sida i CMS Made Simple Documentation Wiki.';
$lang['install_checking'] = 'Testar r&auml;ttigheter och PHP inst&auml;llningar';
$lang['install_test'] = 'Testa';
$lang['install_result'] = 'Resultat';
$lang['install_required_settings'] = 'Obligatoriska inst&auml;llningar';
$lang['install_recommended_settings'] = 'Rekommenderade inst&auml;llningar';
$lang['install_you_have'] = 'Du har';
$lang['install_legend'] = 'Legend ';
$lang['install_symbol'] = 'Symbol ';
$lang['install_definition'] = 'Beskrivning';
$lang['install_value_passed'] = 'Ett obligatoriskt test lyckades';
$lang['install_value_failed'] = 'Ett obligatoriskt test misslyckades';
$lang['install_error_fragment'] = 'Info Installation Fels&ouml;kning';
$lang['install_value_required'] = 'En inst&auml;llning &auml;r l&auml;gre &auml;n vad minimum kravet &auml;r';
$lang['install_value_recommended'] = 'En inst&auml;llning &auml;r &ouml;ver det obligatoriska v&auml;rdet, men l&auml;gre &auml;n det rekommenderade v&auml;rdet<br />eller... A capability that <em>kan</em> be required for some optional functionality is unavailable';
$lang['install_value_exceed'] = 'En inst&auml;llning fyller eller &ouml;verstiger det rekommenderade kravet<br />eller... N&aring;got som <em>kan</em> vara kravet f&ouml;r att en optimal funktion ska fungera';
$lang['install_test_failed'] = 'En eller flera tester misslyckades. Du kan installera systemet men det kan finnas funktioner som inte fungerar riktigt.<br />V&auml;nligen f&ouml;rs&ouml;k att r&auml;tta till problemen och klicka sedan p&aring; &quot;F&ouml;rs&ouml;k igen&quot;, eller klicka p&aring; Forts&auml;tt.';
$lang['install_test_passed'] = 'Alla tester lyckades . V&auml;nligen klicka p&aring; Forts&auml;tta.';
$lang['install_failed_again'] = 'En eller flera tester misslyckades. V&auml;nligen r&auml;tta till problemen f&ouml;r att forts&auml;tta';
$lang['install_try_again'] = 'F&ouml;rs&ouml;k igen';
$lang['install_continue'] = 'Forts&auml;tt';
$lang['failure'] = 'Misslyckat';
$lang['caution'] = 'Obs';
$lang['install_admin_umask'] = 'Testa File Creation Mask';
$lang['install_test_umask'] = 'V&auml;nligen klicka p&aring; Testknappen f&ouml;r att kontrollera angiven umask ...';
$lang['test_umask_text'] = 'umask (som kommer ifr&aring;n user file creation mode mask) &auml;r en funktion i POSIX environments which affects the default file system mode for newly created files and directories of the current process. It controls which of the file permissions will not be set for any newly created file.';
$lang['test_check_umask'] = 'Resultat f&ouml;r test av fil skapad i';
$lang['test_umask_not_given'] = 'Umask inte angiven';
$lang['test_check_umask_failed'] = 'Testet av umask misslyckades';
$lang['test_username_not_given'] = 'Du gl&ouml;mde ange ett anv&auml;ndarnamn!';
$lang['test_username_illegal'] = 'Anv&auml;ndarnamnet inneh&aring;ller ogiltiga bokstavstecken!';
$lang['test_not_both_passwd'] = 'Du m&aring;ste ange l&ouml;senordet i tv&aring; g&aring;nger !';
$lang['test_passwd_not_match'] = 'L&ouml;senordet &ouml;verens st&auml;mmer inte!';
$lang['test_email_accountinfo'] = 'Du har valt att eposta kontoinformation, men du har inte angett en epost adress!';
$lang['test_database_prefix'] = 'Databas prefixen inneh&aring;ller ogiltiga bokstavstecken';
$lang['test_no_dbms'] = 'Ingen dbms &auml;r vald!';
$lang['test_could_not_connect_db'] = 'Kunde inte ansluta till databasen. Kontrollera att anv&auml;ndarnamnet och l&ouml;senordet &auml;r r&auml;tt, och att anv&auml;ndaren har r&auml;ttigheter till databasen.';
$lang['test_could_not_drop_table'] = 'Kunde inte ta bort tabellen. Kontroller att anv&auml;ndaren har r&auml;ttigheter att ta bort tabeller i databasen.';
$lang['test_could_not_create_table'] = 'Kunde inte skapa tabeller. Kontrollera att anv&auml;nadaren har r&auml;ttigheter f&ouml;r att skapa tabeller i databasen';
$lang['test_check_php'] = 'Kontrollerar PHP version %s+';
$lang['test_min_recommend'] = '(minimum %s, rekommenderat %s eller b&auml;ttre)';
$lang['test_min_recommend_plus'] = '(min %s, rekommenderat %s+)';
$lang['test_requires_php_version'] = 'CMS Made Simple kr&auml;ver  php version 4.3 eller b&auml;ttre (du har %s), men PHP %s eller b&auml;ttre &auml;r rekommenderat f&ouml;r maximal kompatibilitet med tredjeparts till&auml;gg (addons)';
$lang['test_check_md5_func'] = 'Kontrollerar efter md5 Function';
$lang['test_check_safe_mode'] = 'Kontrollerar safe mode';
$lang['test_check_safe_mode_failed'] = 'PHP safe mode kan skapa problem d&aring; det g&auml;ller filuppladdning eller andra funktioner. Allt beror p&aring; hur strikta dina safe mode inst&auml;llningar &auml;r p&aring; serven.';
$lang['test_check_tokenizer'] = 'Kontrollerar tokenizer functions';
$lang['test_check_tokenizer_failed'] = 'Om du inte har tokenizer kan sidorna komma att genereras helt vita. Vi rekommenderar att du har detta installerat.';
$lang['test_check_gd'] = 'Kontrollerar GD library';
$lang['test_check_gd_failed'] = 'GD biblioteket &auml;r obligatoriskt f&ouml;r vissa moduler och funktioner.';
$lang['test_check_write'] = 'Kontrollerar skrivr&auml;ttigheterna p&aring;';
$lang['test_may_not_exist'] = 'Denna fil kanske inte existerar &auml;n. Om den inte g&ouml;r s&aring; kan du skapa en tom fil med detta namnet. V&auml;nligen kontrollera &auml;ven att filen &auml;r skrivbar.';
$lang['could_not_retrieve_a_value'] = 'Kunde inte hitta ett v&auml;rde.... passerar &auml;nd&aring;.';
$lang['displaying_the_value_originally'] = '<br />Visar v&auml;rdet som ursprungligen &auml;r angivet i config-filen (detta beh&ouml;ver inte vara riktigt).';
$lang['test_check_xml_func'] = 'Kontrollerar basic XML (expat) support';
$lang['test_check_xml_failed'] = 'XML st&ouml;d saknas i din php installation. Du kan fortfarande anv&auml;nda systemet, fj&auml;rrinstallation av moduler via modulhanteraren kommer dock inte fungera.';
$lang['test_allow_url_fopen_failed'] = 'N&auml;r allow url fopen &auml;r inaktiverat kommer du inte att kunna komma &aring;t URL-objekt som fil som anv&auml;nder FTP- eller HTTP-protokollen.';
$lang['test_remote_url'] = 'Test f&ouml;r avl&auml;gsna URL';
$lang['test_remote_url_failed'] = 'Du kommer troligen inte att kunna &ouml;ppna filer p&aring; en fj&auml;rrserver';
$lang['connection_error'] = 'Utg&aring;ende http anslutningar verkar inte fungera! Det finns en brandv&auml;gg eller n&aring;gra ACL f&ouml;r yttre f&ouml;rbindelser?. Detta kommer att resultera i modul manager, och eventuellt andra funktioner kommer att saknas.';
$lang['remote_connection_timeout'] = 'Tid f&ouml;r anslutning tog slut!';
$lang['search_string_find'] = 'Anslutning ok!';
$lang['connection_failed'] = 'Anslutning misslyckades!';
$lang['remote_response_ok'] = 'Fj&auml;rrserver svarar: ok!';
$lang['remote_response_404'] = 'Fj&auml;rrserver svarar: finns inte!';
$lang['remote_response_error'] = 'Fj&auml;rrserver svarar: fel!';
$lang['test_check_file_upload'] = 'Kontrollerar filuppladdning';
$lang['test_check_file_failed'] = 'N&auml;r filuppladdningar &auml;r inaktiverade kommer du inte att kunna anv&auml;nda n&aring;gon av filuppladdningsm&ouml;jligheterna som finns i CMS Made Simple. Om m&ouml;jligt b&ouml;r denna restriktion tas bort av din systemadministrat&ouml;r f&ouml;r att kunna anv&auml;nda alla filhanteringsfunktioner i systemet. Forts&auml;tt med f&ouml;rsiktighet.';
$lang['test_check_memory'] = 'Kontrollerar PHP memory limit';
$lang['test_check_memory_failed'] = 'Du har f&ouml;rmodligen f&ouml;r lite minne f&ouml;r att CMSMS ska fungera fullt ut, eller med alla till&auml;gg. Om m&ouml;jligt, s&aring; kan du kontakta din system administrat&ouml;r och fr&aring;ga om det g&aring;r att h&ouml;ja minnesv&auml;rdet. ';
$lang['test_check_time_limit'] = 'Kontrollerar PHP time limit in second';
$lang['test_check_time_limit_failed'] = 'Antal sekunder ett skript &auml;r till&aring;tet att k&ouml;ra. Om detta &auml;r n&aring;dd kan skriptet returnera ett fatal error meddelande.';
$lang['test_check_post_max'] = 'Kontrollerar max post size';
$lang['test_check_post_max_failed'] = 'Du kommer f&ouml;rmodligen inte att kunna l&auml;mna in (st&ouml;rre) data. Var medveten om denna begr&auml;nsning.';
$lang['test_check_upload_max'] = 'Kontrollerar max upload file size';
$lang['test_check_upload_max_failed'] = 'Du kommer f&ouml;rmodligen inte att kunna ladda upp (st&ouml;rre) filer med bifogade filens ledningsuppgifter. Var medveten om denna begr&auml;nsning.';
$lang['test_check_writable'] = 'Kontrollerar om  %s &auml;r skrivbar';
$lang['test_check_upload_failed'] = 'Uppladdningsmappen kan inte skrivbar. Du kan fortfarande installera systemet, men du kommer inte att kunna ladda upp filer via Admin Panel.';
$lang['test_check_images_failed'] = 'Mappen images &auml;r inte skrivbar. Du kan fortfarande installera systemet, men du kommer inte att kunna ladda upp och anv&auml;nda bilder via Administrationspanelen.';
$lang['test_check_modules_failed'] = 'Mappen modules &auml;r inte skrivbar. Du kan fortfarande installera systemet, men du kommer inte att kunna ladda upp moduler via Administrationspanelen.';
$lang['test_check_file_get_contents'] = 'Kontrollerar efter file_get_contents';
$lang['test_check_file_get_contents_failed'] = 'Du kommer f&ouml;rmodligen inte att kunna utnyttja alla funktioner som anv&auml;nder denna funktion';
$lang['test_check_session_save_path'] = 'Kontrollerar om session.save_path &auml;r skrivbar';
$lang['test_empty_session_save_path'] = 'Din session.save_path &auml;r tom. PHP kommer att anv&auml;nda ditt operativsystems temp-mapp. Om du har SESSION-problem och ini_set fungerar kan du f&ouml;rs&ouml;ka aktivera session cookies genom att l&auml;gga till: ini_set(&#039;session.use_only_cookies&#039;, 1);  i b&ouml;rjan av include.php';
$lang['test_check_session_save_path_failed'] = 'Din session.save_path &auml;r &quot;%s&quot;. Att inte ha denna skrivbar kan g&ouml;ra att inloggning till adminpanelen inte fungerar. Du kan beh&ouml;va funderar &ouml;ver att g&ouml;ra denna s&ouml;kv&auml;g skrivbar om du har problem med att logga in i adminpanelen. Den h&auml;r testen kan misslyckas om safe_mode &auml;r aktiverat (se nedan).';
$lang['test_check_ini_set'] = 'Kontrollerar om ini_set fungerar';
$lang['test_check_ini_set_failed'] = '&Auml;ven om m&ouml;jligheten att &ouml;verskriva php ini-inst&auml;llningar inte &auml;r obligatorisk, anv&auml;nder vissa till&auml;gg (valfria) ini_set f&ouml;r att ut&ouml;ka timeouts, och f&ouml;r att till&aring;ta uppladdning av st&ouml;rre filer osv. Du kan ha sv&aring;righeter med vissa till&auml;gg utan den h&auml;r m&ouml;jligheten. Den h&auml;r testen kan misslyckas om safe_mode &auml;r aktiverat (se nedan).';
$lang['install_admin_header'] = 'Kontoinformation f&ouml;r administrat&ouml;r';
$lang['install_admin_info'] = 'V&auml;lj anv&auml;ndarnamn, l&ouml;senord och epost till ditt administrat&ouml;rskonto. Kom ih&aring;g att spara uppgifterna, d&aring; det inte finns n&aring;got annat s&auml;tt logga in p&aring; din CMS Made Simple-administration.';
$lang['install_admin_email'] = 'E-postadress';
$lang['install_admin_email_info'] = 'E-posta kontoinformation';
$lang['install_admin_email_note'] = '<strong>OBS!</strong> Denna funktion anv&auml;nder php&#039;s mail-funktion. Om du inte f&aring;r detta mail s&aring; &auml;r f&ouml;rmodligen din server inte r&auml;tt inst&auml;lld. Ta kontakt med ansvarig f&ouml;r ditt webbhotell/server och p&aring;peka felet.';
$lang['install_admin_sitename'] = 'Detta &auml;r namnet p&aring; din sida. It will be used in various places of the default templates and can be used anywhere with the	{sitename} taggen.';
$lang['install_admin_db'] = 'Databasinformation';
$lang['install_admin_db_info'] = '<p>Se till att du har skapat din databas och gett fulla r&auml;ttigheter till en anv&auml;ndare att anv&auml;nda den databasen.</p>
<p>F&ouml;r MySQL, anv&auml;nd f&ouml;ljande:</p>
<p>Logga in till mysql fr&aring;n en konsol och k&ouml;r f&ouml;ljande kommandon:</p>
<ol>
<li>create database cms; (anv&auml;nd vilket namn du vill h&auml;r, men gl&ouml;m det inte! Du kommer att beh&ouml;va ange det p&aring; den h&auml;r sidan)</li>
<li>grant all privileges on cms.* to cms_user@localhost identified by &#039;cms_pass&#039;;</li>
</ol>';
$lang['install_admin_follow'] = 'V&auml;nligen fyll i f&ouml;ljande f&auml;lt';
$lang['install_admin_db_type'] = 'Databasyyp';
$lang['install_admin_no_db'] = 'Ingen giltig databashantering verkar vara definierad i din PHP-installation. Kontrollera att du har mysql, mysqli och/eller postgres7 st&ouml;d installerat och f&ouml;rs&ouml;k igen.';
$lang['install_admin_db_host'] = 'V&auml;rdadress f&ouml;r databas';
$lang['install_admin_db_name'] = 'Databasnamn';
$lang['install_admin_db_create'] = 'Skapa Tabeller (Varning: Detta raderar existerande tabeller)';
$lang['install_admin_db_prefix'] = 'Tabellprefix';
$lang['install_admin_db_sample'] = 'Installera exempelinneh&aring;ll och mallar';
$lang['retry'] = 'F&ouml;rs&ouml;k igen';
$lang['install_admin_db_create_seq'] = 'Skapar ordningsf&ouml;ljd i %s tabell...';
$lang['install_admin_importing'] = 'Importerar exempeldata...';
$lang['invalid_query'] = 'Felaktig f&ouml;rfr&aring;gan: %s';
$lang['install_creating_table'] = '<p>Skapar %s tabell... [%s]</p>';
$lang['install_creating_index'] = '<p>Skapar index i %s tabell... [%s]</p>';
$lang['done'] = 'klar';
$lang['failed'] = 'misslyckades';
$lang['install_admin_error_schema'] = 'Fel vid h&auml;mtning av SQL schema';
$lang['install_admin_set_account'] = 'Anger adminkontoinformation...';
$lang['install_admin_set_sitename'] = 'Anger sidnamn...';
$lang['install_admin_setup'] = 'Nu forts&auml;tter vi med att skapa din konfigurationsfil, vi har redan det mesta vi beh&ouml;ver. Troligen kan du l&auml;mna alla v&auml;rden som dom &auml;r, s&aring; n&auml;r du &auml;r klar, klicka Forts&auml;tt.';
$lang['install_admin_docroot'] = 'CMS dokumentrot (sett fr&aring;n webbserver)';
$lang['install_admin_docroot_path'] = 'S&ouml;kv&auml;g till dokumentrot';
$lang['install_admin_querystring'] = 'Fr&aring;ga-str&auml;ng (l&auml;mna denna or&ouml;rd om du inte har problem, annars kan du redigera config.php manuellt)';
$lang['invalid_querys'] = '<b>VARNING<b/>: Felaktiga f&ouml;rfr&aring;gningar i din databas!';
$lang['install_admin_sitedown'] = 'Fel: Kunde inte radera tmp/cache/SITEDOWN filen. V&auml;nligen radera denna manuellt.';
$lang['install_admin_update_hierarchy'] = 'Uppdaterar hierarkipositioner...';
$lang['install_admin_set_core_event'] = 'Anger k&auml;rnh&auml;ndelser...';
$lang['install_admin_install_modules'] = 'Installerar moduler...';
$lang['install_admin_index_search'] = 'Index S&ouml;k...';
$lang['install_admin_clear_cache'] = 'Rensar sidcache (om n&aring;gon)...';
$lang['install_admin_emailing'] = 'E-postar adminkontoinformation...';
$lang['install_admin_congratulations'] = 'Gratulerar, allt &auml;r installerat - h&auml;r &auml;r din ';
$lang['could_not_connect_db'] = 'Kunde inte ansluta till databasen. Kontrollera att anv&auml;ndarnamnet och l&ouml;senordet &auml;r korrekt, och att anv&auml;ndaren har r&auml;ttigheter till den angivna databasen.';
$lang['cannot_write_config'] = 'FEL: Kan inte skriva till %s.';
$lang['email_accountinfo_subject'] = 'CMS Made Simple Admin Kontoinformation';
$lang['email_accountinfo_message'] = 'Tack f&ouml;r att du installerade CMS Made Simple.

Kontoinformation:
anv&auml;ndarnamn: %s
l&ouml;senord: %s

Logga in p&aring; adminsidorna: %s';
$lang['qca'] = 'P0-1661890032-1292100548202';
$lang['utma'] = '156861353.1934215823.1299187594.1299227132.1299275456.3';
$lang['utmc'] = '156861353';
$lang['utmz'] = '156861353.1299187594.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none)';
$lang['utmb'] = '156861353.1.10.1299275456';
?>