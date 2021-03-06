<?php
$lang['detected'] = 'Odkrito';
$lang['docroot_leaveblank'] = 'Lahko pustite prazno, uporabi sistem privzeto';
$lang['test_xmlreader_class'] = 'Preverjanje, če XMLReader class obstaja';
$lang['test_xmlreader_failed'] = 'XMLReader class ni omogočen v va&scaron;eih php namestitvah. &Scaron;e vedno lahko uporabljate sistem, vendar ne boste mogli uporabljati katero od oddaljenih funkcij za namestitev modulov.';
$lang['test_check_xml_failed'] = 'XML podpora ni vključena v va&scaron;o namestitev PHP jezika. Sistem lahko kljub temu uporabljate, vendar ne boste mogli uporabljati nobenih modulov za oddaljeno namestitev.';
$lang['installed_module'] = 'Modul name&scaron;čen';
$lang['automatedtask_success'] = 'Avtomatizirana naloga uspe&scaron;na';
$lang['ip_addr'] = 'IP naslov';
$lang['install_admin_pwsalt_note'] = 'Če želite omogočiti dodatno kriptirana gesla, ni nobene možnosti za ponastavitev pozabljenega administratorskega gesla kot preko obrazca za pozabljeno geslo. Vsak uporabni&scaron;ki račun mora imeti nujno svoj E-mail naslov!';
$lang['admin_salt'] = 'Dodatno kriptirana gesla administratorjev';
$lang['setup_flat_urls'] = 'Flat URL ja nastavljen';
$lang['install_timezone'] = 'Nekateri strežniki s PHP 5.3 niso pravilno nastavili časovni pas. Prosimo, izberite ustrezen časovni pas iz seznama. Če to ni potrebno, na va&scaron;em strežniku, lahko izberete &quot;None&quot;. Opomba: Prosimo, izberite strežnikov časovni pas, to ni nastavitev zaslona, vendar se uporablja v aritmatični zvezi z datumi. To nastavitev lahko spremeni&scaron; po namestitvi s spremembo v config.php datoteki.';
$lang['timezone'] = 'Časovni pas';
$lang['none'] = 'Nič';
$lang['test_error_estrict'] = 'Testiranje error_reporting da se zagotovi da je E_STRICT izključen';
$lang['test_estrict_failed'] = 'E_STRICT je vključen';
$lang['info_estrict_failed'] = 'Nekatere knjižnice, ki CMSMS uporabja ne delujejo dobro z E_STRICT.  Prosimo izključite to pred nadaljevanjem';
$lang['test_error_edeprecated'] = 'Testiranje error_reporting da se zagotovi da je E_DEPRECATED izključen';
$lang['test_edeprecated_failed'] = 'E_DEPRECATED je vključen';
$lang['info_edeprecated_failed'] = 'Če je E_DEPRECATED omogočen v va&scaron;em poročanju napak, bodo uporabniki videli veliko opozorilnih sporočil, ki bi lahko vplivali na zaslonu in funkcionalnosti';
$lang['invalidemail'] = 'Vnesen E-po&scaron;tni naslov ni veljaven';
$lang['empty_query'] = 'Prazen query?? %s';
$lang['no_db_driver'] = 'Kompatibilnigonilniki baze niso najdeni';
$lang['test_check_output_buffering'] = 'Preverja output buffering';
$lang['test_check_output_buffering_failed'] = 'Output buffering je izključen. Verjetno ne boste mogli uporabljati vse funkcionalnosti, ki to zahtevajo';
$lang['phpinfo'] = 'Prikaži PHP informacije';
$lang['mod_security'] = 'Apache Mod Varnost';
$lang['test_check_tempnam'] = 'Preverjanje tempnam funkcije';
$lang['test_check_db_drivers'] = 'DB gonliniki';
$lang['test_check_db_drivers_failed'] = 'DB gonilniki niso najdeni';
$lang['test_check_register_globals'] = 'Preverja PHP register globals';
$lang['test_check_register_globals_failed'] = 'PHP register globals je aktiviran. Zaradi varnostnih razlogov bi moral biti izklopljen.';
$lang['test_check_disable_functions'] = 'Preverjanje PHP disable functions';
$lang['test_check_disable_functions_failed'] = 'Opozorilo: To je seznam funkcij onemogočenih na va&scaron;em strežniku.';
$lang['install_admin_db_port'] = 'Port baze';
$lang['install_admin_db_port_info'] = 'Če ne veste, pustite to polje prazno, da uporabite privzete nastavitve.';
$lang['install_admin_db_socket'] = 'Socket baze';
$lang['install_admin_db_socket_info'] = 'NE PODPIRA.';
$lang['install_admin_frontendlang'] = 'Privzeti jezik za frontend. To prilagaja locale uporabo za različne funkcije kot privzeto ravnanje datuma itd.';
$lang['install_default_encoding'] = 'V skoraj vseh primerih mora biti default_encoding utf-8.';
$lang['installer_done'] = '[opravljeno]';
$lang['installer_failed'] = '[ni uspelo]';
$lang['create_permission'] = 'Ustvari dovoljenja ...';
$lang['add_column_sql'] = 'Dodaja stolpec %s v tabeli ...';
$lang['update_table_sql'] = 'Posodablja tabelo %s ...';
$lang['installing_module'] = 'Namestitev modula %s ...';
$lang['updating_schema_version'] = 'Posodablja schema verzijo %s ...';
$lang['upgrade_config'] = 'Nadrgajuje config.php';
$lang['upgrade_config_info'] = 'config nadgradnja';
$lang['upgrade_failed_again'] = 'Eden ali več nadgradenj ni uspelo. Popravite problem in kliknite na gumb spodaj, da ponovno preverite.';
$lang['upgrade_cache_dirs'] = 'Či&scaron;čenje imenikov predpomnilnika';
$lang['cannot_clean_cache_dirs'] = 'Ne morem očistiti imenikov predpomnilnika!';
$lang['upgrade_schema'] = 'Nadgradi schema';
$lang['need_upgrade_schema'] = 'CMS potrebuje nadgradnjo.<br />Vi uporabljate schemo v verziji %s katera mora biti nadgrajena v verzijo %s';
$lang['schema_ok'] = 'CMS baza podatkov je posodobljena.  Uporablja schemo v verziji %s';
$lang['noneed_upgrade_schema'] = 'CMS baza podatkov je posodobljena.  Uporablja schemo v verziji %s';
$lang['upgrade_modules'] = 'Nadgradi module';
$lang['noneed_upgrade_modules'] = 'Moduli so posodobljeni';
$lang['upgrade_sql_module_from_to'] = 'Nadgrajuje SQL od &quot;%s&quot; modul iz %s v %s ...';
$lang['upgrade_event_module_from_to'] = 'Nadgrajuje dogodke v &quot;%s&quot; modul iz %s v %s ...';
$lang['sitedown_not_removed'] = 'Datoteka tmp/cache/SITEDOWN ni mogla biti odstranjena. Prosimo, odstranite datoteko ročno ali pa bo &scaron;e naprej prikazano sporočilo &quot;Site Down for Maintainence&quot; na va&scaron;i spletni strani';
$lang['upgrade_ok'] = 'Prosimo, preglejte config.php, spremenite nove nastavitve, kot je potrebno, nato pa ponovno nastavite permissions na zaklenjeno stanje. Prav tako preverite da so vsi va&scaron;i moduli obnovljeni, pojdite na Extensions -> Modules stran in i&scaron;čite vse ki so navedeni kot &quot;Potrebuje Nadgradnjo&quot;';
$lang['upgrade_complete'] = 'Postopek nadgradnje je končan';
$lang['upgrade_end'] = 'CMS je posodobljen. Prosimo, kliknite %s da pridete na va&scaron;o spletno stran CMS ali pa %s.';
$lang['here'] = 'tukaj';
$lang['go_to_admin'] = 'pojdite Administracijo';
$lang['errorfilenot'] = 'Datoteka ni bila najdena!';
$lang['errorfilenotwritable'] = 'Datoteka ni writable!';
$lang['nofiles'] = 'Ta vir ne obstaja!';
$lang['is_directory'] = 'Ta vir je imenik!';
$lang['is_readable_false'] = 'Ta vir ni readable!';
$lang['checksum_match'] = 'Checksum se ujema!';
$lang['checksum_not_match'] = 'Checksum se ne ujema!';
$lang['not_checksum'] = 'Ne more naložiti checksum!';
$lang['format_datetime'] = '%c';
$lang['upload_err_ini_size'] = 'Naložena datoteka presega upload_max_filesize nastavitev v php.ini!';
$lang['upload_err_form_size'] = 'Naložena datoteka presega MAX_FILE_SIZE nastavitev katera je bila nastavljena v HTML obrazcu.';
$lang['upload_err_partial'] = 'Naložena datoteka je bila le delno naložena.';
$lang['upload_err_no_file'] = 'Nobena datoteka ni bila naložena.';
$lang['upload_err_no_tmp_dir'] = 'Temporary mapa ne obstaja.';
$lang['upload_err_cant_write'] = 'Ni mogoče zapisati datoteke na trdi disk.';
$lang['upload_err_extension'] = 'Nalaganje datoteke je ustavljeno zaradi extension.';
$lang['upload_err_empty'] = 'Datoteka ima velikost nič';
$lang['upload_err_unknown'] = 'Neznan problem pri nalaganju datoteke.';
$lang['function_file_uploads_off'] = 'file_uploads je izključen v va&scaron;ei php konfiguraciji!';
$lang['upload_file_no_readable'] = 'Naloženo datoteko ni mogoče prebrati!';
$lang['upload_file_multiple'] = 'Večkratno nalaganje datotek ni dovoljeno!';
$lang['test_check_magic_quotes_gpc'] = 'Magic quotesza Get/Post/Cookie operacije';
$lang['test_check_magic_quotes_gpc_failed'] = 'Ko je magic_quotes aktiven, so vsi single-quote, double quote in backslash escaped samodejno. To lahko povzroči veliko težav v CMS.';
$lang['test_check_magic_quotes_runtime'] = 'Magic quotes v runtime';
$lang['test_check_magic_quotes_runtime_failed'] = 'Ko je magic_quotes vključen, večina funkcij, katere bodo vrnile podatke iz katerega koli zunanjega vira vključno z bazam podatkov in besedilne datoteke bodo imele quotes escaped in backslash. To bo povzročilo težave pri CMS-u.';
$lang['install_admin_checksum'] = 'Preverite svojo namestitev';
$lang['upgrade_admin_checksum'] = 'Preverite nadgradnjo va&scaron;ega sistema';
$lang['checksum'] = 'Checksum test';
$lang['checksum_file'] = 'Checksum datoteka';
$lang['install_test_checksum'] = 'Lahko potrdite celovitost datotek CMS s primerjavo glede na prvotni checksum CMS-a. To lahko pomaga pri iskanju težave z nalaganjem.';
$lang['checksum_passed'] = 'Vsi checksumi se ujemajo!';
$lang['checksum_failed'] = 'Checksum se ujemajo z napakami. Poglejte pomoč za več informacij';
$lang['test_check_open_basedir'] = 'Preveri prisotnost PHP Open Basedir';
$lang['test_check_open_basedir_failed'] = 'Omogočena je PHP nastavitev Open Basedir. Morda boste imeli težave z nekaterimi funkcionalnostmi dodatkov zaradi te omejitve.';
$lang['unlimited'] = 'Neomejeno';
$lang['test_open_basedir_session_save_path'] = 'Open basedir je nastavitev. Če imate težave s sejo (SESSION) in vam deluje ukaz ini_set, lahko poizkusite vklopiti session pi&scaron;kotke tako, da dodate: ini_set(&#039;session.use_only_cookies&#039;, 1);  na začetek datoteke config.php';
$lang['install_warn_db_createtables'] = 'V večini primerov mora biti ta nastavitev odkljukana ves čas. Bodite pazljivi, če onemogočite to funkcionalnost.';
$lang['install_admin_tablesnotcreated'] = 'Postopek namestitve zaključen. Postopek namestitve je bil zaključen, na va&scaron;o željo pa tabele v bazi niso bile ustvarjene. Datoteka z nastavitvami (config) je bila ponastavljena in vsi testi pred namestitvijo so bili uspe&scaron;ni. Zahvaljujemo se vam, tukaj pa je va&scaron;';
$lang['info_create_dir_and_file'] = 'Lastnik procesa HTTP (web strežnika) ne more ustvarjati datoteke znotraj mape v njegovi lasti. To najverjetneje pomeni, da je omogočen varni način delovanja. &Scaron;tevilne funkcije v CMS made simple ne bodo delovale pravilno brez te možnosti zapisovanja. Nadaljevanje ni mogoče.';
$lang['test_create_dir_and_file'] = 'Preverjanje, ali proces web strežnika (HTTP) lahko ustvarja datoteke znotraj mape, ki jo je ustvaril.';
$lang['cms_site'] = 'CMS stran';
$lang['or_greater'] = 'Ali vi&scaron;je';
$lang['sitename'] = 'Naziv strani';
$lang['warning_safe_mode'] = '<strong><em>OPOZORILO:</em></strong> PHP varni način (safe mode) je aktiviran. To lahko povzroča težave pri prenosu datotek preko spletnega brskalnika - sem sodijo slike, predloge in XML paketi modulov. Svetujemo vam, da kontaktirate administratorja strani in ga zaprosite, če lahko onemogoči varni način.';
$lang['test'] = 'Test';
$lang['results'] = 'Rezultati';
$lang['untested'] = 'Ni testirano';
$lang['owner'] = 'Lastnik';
$lang['permissions'] = 'Pravice';
$lang['off'] = 'Izklopljeno';
$lang['on'] = 'Vklopljeno';
$lang['permission_information'] = 'Informacije o pravicah';
$lang['server_os'] = 'Operacijski sistem strežnika';
$lang['server_api'] = 'API strežnika';
$lang['server_software'] = 'Programska oprema strežnika';
$lang['server_information'] = 'Informacije o strežniku';
$lang['session_save_path'] = 'Pot za shranjevanje seje';
$lang['max_execution_time'] = 'Najdalj&scaron;i čas za izvedbo';
$lang['gd_version'] = 'GD različica';
$lang['upload_max_filesize'] = 'Največja velikost za prenos datotek';
$lang['post_max_size'] = 'Največja velikost POST zahtevka';
$lang['memory_limit'] = 'PHP omejitev spomina';
$lang['server_db_type'] = 'Podatkovna baza';
$lang['server_db_version'] = 'Različica podatkovne baze';
$lang['phpversion'] = 'Trenutna različica PHP';
$lang['safe_mode'] = 'PHP varni način (safe mode)';
$lang['php_information'] = 'PHP informacije';
$lang['cms_install_information'] = 'Informacije o namestitvi CMS sistema';
$lang['cms_version'] = 'CMS različica';
$lang['systeminfo_copy_paste'] = 'Prosimo, prekopirajte označeno besedilo v va&scaron;o objavo v forumu';
$lang['help_systeminformation'] = 'Spodnje informacije so zbrane z različnih lokacij in so tu povzete zato, da lažje najdete nekatere podatke, ki so potrebni za re&scaron;evanje problema. Prav tako lahko s pomočjo teh podatkov bolj natančno zahtevate pomoč pri re&scaron;evanju težav z namestitvijo sistema CMS Made Simple.';
$lang['systeminfo'] = 'Informacije o sistemu';
$lang['systeminfodescription'] = 'Prikaži različne informacije o va&scaron;em sistemu, ki so lahko koristne pri diagnosticiranju težav';
$lang['error'] = 'Napaka';
$lang['new_version_available'] = '<em>V vednost:</em> Na voljo je nova različica sistema CMS Made Simple. Prosimo, obvestite administratorja.';
$lang['info_urlcheckversion'] = 'Če je ta URL naslov &quot;none&quot;, ne bo opravljenjo nadaljnje preverjanje.<br /> Če pustite polje prazno, bo uporabljen privzeti URL naslov.';
$lang['urlcheckversion'] = 'Preveri za posodobitve na tem URL naslovu';
$lang['read'] = 'Branje';
$lang['write'] = 'Pisanje';
$lang['execute'] = 'Izvajanje';
$lang['group'] = 'Skupina';
$lang['other'] = 'Ostali';
$lang['global_umask'] = 'Maska za nove datoteke (umask)';
$lang['errorcantcreatefile'] = 'Ne morem ustvariti datoteke (težave s pravicami?)';
$lang['add'] = 'Dodaj';
$lang['about'] = 'O programu';
$lang['action'] = 'Akcija';
$lang['actionstatus'] = 'Akcija/Status';
$lang['active'] = 'Aktivno';
$lang['cantremove'] = 'Ne morem odstraniti';
$lang['changepermissions'] = 'Sprememba pravic';
$lang['changepermissionsconfirm'] = 'POZOR!\n\nTa akcija bo poizkusila zagotoviti možnost zapisovanja spletnega strežnika v vse datoteke modula.\nSte prepričani, da želite nadaljevati?';
$lang['success'] = 'Uspe&scaron;no';
$lang['advanced'] = 'Napredno';
$lang['back'] = 'Nazaj v meni';
$lang['cancel'] = 'Prekliči';
$lang['cantchmodfiles'] = 'Ni bilo mogoče spremeniti pravic nekaterim datotekam';
$lang['cantremovefiles'] = 'Težave pri brisanju datotek (preverite pravice)';
$lang['create'] = 'Ustvari';
$lang['database'] = 'Podatkovna baza';
$lang['databaseprefix'] = 'Predpona podatkovne baze';
$lang['databasetype'] = 'Tip podatkovne baze';
$lang['date'] = 'Datum';
$lang['default'] = 'Privzeto';
$lang['delete'] = 'Izbri&scaron;i';
$lang['deleteconfirm'] = 'Ste prepričani, da želite izbrisati - %s - ?';
$lang['description'] = 'Opis';
$lang['directoryexists'] = 'Ta mapa že obstaja.';
$lang['down'] = 'Dol';
$lang['edit'] = 'Uredi';
$lang['email'] = 'E-mail naslov';
$lang['errordeletingfile'] = 'Ne morem izbrisati datoteke. Težava s pravicami?';
$lang['errordirectorynotwritable'] = 'Nimam pravic za pisanje v mapo. Do te napake lahko pride zaradi pomanjkanja pravic ali lastni&scaron;tva. Morda je aktiviran tudi varni način (safe mode).';
$lang['cachenotwritable'] = 'Mapa za datoteke predpomnilnika (cache) ni zapisljiva. Brisanje predpomnilnika ne bo delovalo. Prosimo preverite, da ima mapa tmp/cache polne pravice za pisanje/branje/izvajanje (chmod 777). Morda morate izklopiti varni način (safe mode).';
$lang['modulesnotwritable'] = 'Mapa za datoteke modulov ni zapisljiva. Če boste želeli namestiti module s prenosom XML datotek, morate poskrbeti, da bo imela mapa modules  polne pravice za pisanje/branje/izvajanje (chmod 777). Morda morate izklopiti varni način (safe mode).';
$lang['false'] = 'Neaktivno';
$lang['settrue'] = 'Nastavi True';
$lang['filename'] = 'Datoteka';
$lang['filesize'] = 'Velikost';
$lang['help'] = 'Pomoč';
$lang['language'] = 'Jezik';
$lang['lastname'] = 'Priimek';
$lang['name'] = 'Ime';
$lang['password'] = 'Geslo';
$lang['passwordagain'] = 'Ponovite geslo';
$lang['remove'] = 'Odstrani';
$lang['saveconfig'] = 'Shrani nastavitve';
$lang['true'] = 'Aktivno';
$lang['setfalse'] = 'Nastavi False';
$lang['type'] = 'Tip';
$lang['typenotvalid'] = 'Tip ni pravilen';
$lang['unknown'] = 'Neznano';
$lang['user'] = 'Uporabnik';
$lang['userdefinedtags'] = 'Ročno definirane oznake';
$lang['usermanagement'] = 'Urejanje uporabnikov';
$lang['username'] = 'Uporabni&scaron;ko ime';
$lang['usernameincorrect'] = 'Uporabni&scaron;ko ime ali geslo ni pravilno.';
$lang['version'] = 'Različica';
$lang['install_title'] = 'Namestitev CMS Made Simple (korak %s)';
$lang['install_system'] = 'Namesti sistem';
$lang['install_thanks'] = 'Zahvaljujemo se vam za namestitev CMS Made Simple';
$lang['upgrade_title'] = 'CMS Made Simple nadgradnja (step %s)';
$lang['upgrade_system'] = 'Nadgradi sistem';
$lang['upgrade_thanks'] = 'Hvala za nadgradnjo CMS Made Simpla v';
$lang['install_please_read'] = 'Prosimo, preberite dokument <a href="http://wiki.cmsmadesimple.org/index.php/User_Handbook/Installation/Troubleshooting">Težave pri namestitvi</a> v sklopu Wiki dokumentacije sistema CMS Made Simple.';
$lang['install_checking'] = 'Preverjanje pravic in PHP nastavitev';
$lang['install_test'] = 'Test';
$lang['install_result'] = 'Rezultat';
$lang['install_required_settings'] = 'Obvezne nastavitve';
$lang['install_recommended_settings'] = 'Priporočene nastavitve';
$lang['install_you_have'] = 'Imate';
$lang['install_legend'] = 'Legenda';
$lang['install_symbol'] = 'Simbol';
$lang['install_definition'] = 'Definicija';
$lang['install_value_passed'] = 'Obvezni test uspe&scaron;en';
$lang['install_value_failed'] = 'Obvezni test neuspe&scaron;en';
$lang['install_error_fragment'] = 'Info o namestitvi in odpravljanju težav';
$lang['install_value_required'] = 'Nastavitev je nižja od minimalne vrednosti';
$lang['install_value_recommended'] = 'Nastavitev je vi&scaron;ja od zahtevane vrednosti, toda nižja od priporočene vrednosti.<br />ali... Kapaciteta ki <em>bi lahko</em> bila obvezna za nekatere dodatne funkcionalnosti ni na voljo.';
$lang['install_value_exceed'] = 'Nastavitev zadostuje ali presega priporočeno vrednost.<br />ali... Kapaciteta ki <em>bi lahko</em> bila obvezna za nekatere dodatne funkcionalnosti je na voljo.';
$lang['install_test_failed'] = 'Vsaj eden izmed testov je bil neuspe&scaron;en. Sicer lahko namestite sistem, toda obstaja možnost, da nekatere funkcije ne bodo pravilno delovale. <br />Prosimo, poizkusite odpraviti težave in kliknite &quot;Poizkusi ponovno&quot;, ali pa kliknite gumb &quot;Nadaljuj&quot; za nadaljevanje.';
$lang['install_test_passed'] = 'Vsi testi so bili uspe&scaron;ni (oziroma so izpolnili minimalne zahteve). Prosimo, kliknite gumb &quot;Nadaljuj&quot;.';
$lang['install_failed_again'] = 'Vsaj eden izmed testov je bil neuspe&scaron;en. Prosimo, odpravite težave in kliknite spodnji gumb za ponovno preverjanje.';
$lang['install_try_again'] = 'Poizkusi ponovno';
$lang['install_continue'] = 'Nadaljuj';
$lang['failure'] = 'Napaka';
$lang['caution'] = 'Opozorilo';
$lang['install_admin_umask'] = 'Testiranje maske za ustvarjanje datotek';
$lang['install_test_umask'] = 'Prosimo, kliknite gumb Test za preverjanje  ...';
$lang['test_umask_text'] = 'umask je funkcija, ki v POSIX okoljih vpliva na privzeti način za ustvarjanje novih datotek in map trenutnega procesa. Nadzoruje, katere pravice bodo nastavljene na novo ustvarjenim datotekam.';
$lang['test_check_umask'] = 'Rezultati testa datoteke, ustvarjene v';
$lang['test_umask_not_given'] = 'Umask ni podan';
$lang['test_check_umask_failed'] = 'Testiranje umask neuspe&scaron;no';
$lang['test_username_not_given'] = 'Uporabni&scaron;ko ime ni podano!';
$lang['test_username_illegal'] = 'Uporabni&scaron;ko ime vsebuje nedovoljene znake!';
$lang['test_not_both_passwd'] = 'Niste vpisali obeh gesel!';
$lang['test_passwd_not_match'] = 'Obe polji z geslom se ne ujemata!';
$lang['test_email_accountinfo'] = 'Izbrali ste, da želite prejeti podatke o računu na E-mail, vendar niste vpisali E-mail naslova!';
$lang['test_database_prefix'] = 'Predpona podatkovne baze vsebuje nedovoljene znake!';
$lang['test_no_dbms'] = 'Niste izbrali sistema za podatkovno bazo!';
$lang['test_could_not_connect_db'] = 'Povezava na podatkovno bazo ni mogoča. Prosimo, preverite uporabni&scaron;ko ime in geslo ter pravice tega uporabnika za dostop do te podatkovne baze.';
$lang['test_could_not_drop_table'] = 'Ne morem izbrisati tabele. Prosimo preverite, ali ima uporabnik pravice za brisanje tabel v podani podatkovni bazi.';
$lang['test_could_not_create_table'] = 'Ne morem ustvariti tabele. Prosimo preverite, ali ima uporabnik pravice za ustvarjanje tabel v podani podatkovni bazi.';
$lang['test_check_php'] = 'Preverjanje prisotnosti PHP različice %s+';
$lang['test_min_recommend'] = '(najmanj %s, priporočljivo %s ali več)';
$lang['test_min_recommend_plus'] = '(najmanj %s, priporočljivo %s+)';
$lang['test_requires_php_version'] = 'CMS Made Simple obvezno potrebuje PHP različice 4.3 ali novej&scaron;e (va&scaron;a različica je %s). Priporočamo namestitev PHP različice %s, kar zagotavlja optimalno kompatibilnost z nekaterimi dodatki in raz&scaron;iritvami.';
$lang['test_check_md5_func'] = 'Preverjanje md5 funkcije';
$lang['test_check_safe_mode'] = 'Preverjanje varnega načina';
$lang['test_check_safe_mode_failed'] = 'PHP varni način (safe mode) lahko povzroča težave pri prenosu datotek in pri uporabi nekaterih drugih funkcij. Vse je odvisno od tega, kako striktne so nastavitve varnega načina va&scaron;ega strežnika.';
$lang['test_check_tokenizer'] = 'Preverjanje tokenizer funkcij';
$lang['test_check_tokenizer_failed'] = 'Ker nimate name&scaron;čenega tokenizer-ja se lahko strani prikažejo v celoti bele. Obvezno namestite tokenizer.';
$lang['test_check_gd'] = 'Preverjanje GD knjižnice';
$lang['test_check_gd_failed'] = 'GD knjižnica je obvezna za delovanje nekaterih modulov in funkcionalnosti';
$lang['test_check_write'] = 'Preverjanje pravic za pisanje v';
$lang['test_may_not_exist'] = 'Ta datoteka morda &scaron;e ne obstaja. Če ne obstaja, ustvarite novo prazno datoteko s tem imenom. Prav tako preverite, da je datoteka zapisljiva s strani procesa spletnega strežnika.';
$lang['could_not_retrieve_a_value'] = 'Ne morem prebrati vrednosti ... vseeno nadaljuj.';
$lang['displaying_the_value_originally'] = '<br />Prikazujem vrednost, ki je bila izvirno nastavljena v config datoteki (morda to ni točno).';
$lang['test_check_xml_func'] = 'Preverjanje osnovne XML (expat) podpore';
$lang['test_allow_url_fopen_failed'] = 'Če je možnost &quot;allow url fopen&quot; onemogočena ne boste mogli dostopati URL objektov, kot na primer datotek preko FTP ali HTTP protokola.';
$lang['test_remote_url'] = 'Test za oddaljeni URL';
$lang['test_remote_url_failed'] = 'Najverjetneje ne boste mogli odpreti datoteke na oddaljenem spletnem strežniku.';
$lang['connection_error'] = 'Odhodne povezave http-ja očitno ne delajo! Imaste firewall ali nekak ACL za zunanje priključke?. To bo vplivalo v modul managerju in morebiti tudi drugih funkcijah.';
$lang['remote_connection_timeout'] = 'Povezava Timed Out!';
$lang['search_string_find'] = 'Povezava je uspela!';
$lang['connection_failed'] = 'Povezava ni uspela!';
$lang['remote_response_ok'] = 'Remote odgovor: ok!';
$lang['remote_response_404'] = 'Remote odgovor: ni najden!';
$lang['remote_response_error'] = 'Remote odgovor: napaka!';
$lang['test_check_file_upload'] = 'Preverjanje nalaganja datotek';
$lang['test_check_file_failed'] = 'Če je nalaganje (upload) datotek onemogočeno, ne boste mogli uporabljati možnosti za nalaganje datotek v CMS Made Simple. Če je možno svetujemo, da va&scaron; administrator to možnost omogoči, saj boste le tako lahko uporabljali vse funkcionalnosti sistema. Nadaljujte pazljivo.';
$lang['test_check_memory'] = 'Preverjanje PHP omejitve pomnilnika';
$lang['test_check_memory_failed'] = 'Najverjetneje nimate dovolj pomnilnika za pravilno izvajanje sistema CMS Made Simple ali njegovih dodatkov. Prosite administratorja, če lahko poveča vrednost omejitve pomnilnika. Nadaljujte pazljivo.';
$lang['test_check_time_limit'] = 'Preverjanje PHP časovne omejitve v sekundah';
$lang['test_check_time_limit_failed'] = '&Scaron;tevilo sekund, kolikor časa se lahko izvajajo posamezne skripte. Ko je omejitev dosežena, skripta vrne napako in se ustavi.';
$lang['test_check_post_max'] = 'Preverjanje omejitve POST zahtevkov';
$lang['test_check_post_max_failed'] = 'Najverjetneje ne boste mogli po&scaron;iljati večje količine podatkov. Prosimo, zavedajte se te omejitve.';
$lang['test_check_upload_max'] = 'Preverjanje omejitve velikosti nalaganja datotek';
$lang['test_check_upload_max_failed'] = 'Najverjetneje ne boste mogli nalagati (večjih) datotek preko vključenega sistema za upravljanje z datotekami. Prosimo, zavedajte se te omejitve.';
$lang['test_check_writable'] = 'Preverjam, ali je %s zapisljiv';
$lang['test_check_upload_failed'] = 'Mapa za nalaganje datotek (uploads) ni zapisljiva. Sistem lahko namestite, vendar ne boste mogli nalagati datotek preko Administracijske plo&scaron;če.';
$lang['test_check_images_failed'] = 'Mapa za slike (images) ni zapisljiva. Sistem lahko namestite, vendar ne boste mogli nalagati in uporabljati slik preko Administracijske plo&scaron;če.';
$lang['test_check_modules_failed'] = 'Mapa za module (modules) ni zapisljiva. Sistem lahko namestite, vendar ne boste mogli nalagati in uporabljati modulov preko Administracijske plo&scaron;če.';
$lang['test_check_file_get_contents'] = 'Preverjanje file_get_contents';
$lang['test_check_file_get_contents_failed'] = 'Najverjetneje ne boste mogli uporabljati funkcionalnosti, ki uporabljajo to funkcijo';
$lang['test_check_session_save_path'] = 'Preverjanje, če je session.save_path zapisljiv';
$lang['test_empty_session_save_path'] = 'Va&scaron;a session.save_path je prazna. PHP bo uporabljal začasno mapo va&scaron;ega operacijskega sistema. Če imate težave pri sejah (sesion) in vam deluje funkcija ini_set, lahko aktivirate pi&scaron;kotke (cookies) za sejo tako, da dodate: ini_set(&#039;session.use_only_cookies&#039;, 1);  na začetek datoteke include.php';
$lang['test_check_session_save_path_failed'] = 'Va&scaron;a session.save_path mapa je &quot;%s&quot;. Ker ta mapa ni zapisljiva se morda ne boste mogli prijaviti v Administracijsko plo&scaron;čo. Prosimo, naredite to mapo zapisljivo, če imate težave pri prijavi v administracijo. Če je vklopljen varni način (safe mode), obstaja možnost, da ta test ni uspe&scaron;en, tudi če je mapa zapisljiva (glej spodaj).';
$lang['test_check_ini_set'] = 'Preverjanje delovanja ini_set';
$lang['test_check_ini_set_failed'] = 'Čeprav možnost, da povozite php.ini nastavitve, ni obvezna, nekatere funkcionalnosti (opcijske) dodatkov uporabljajo ini_set za podalj&scaron;anje časovnih omejitev, dovoljenje za nalaganje večjih datotek itd. Morda boste imeli težave z nekaterimi dodatki brez te funkcionalnosti. Če je vklopljen varni način (safe mode), obstaja možnost, da ta test ni uspe&scaron;en, tudi če je ta možnost aktivirana (glej spodaj).';
$lang['install_admin_header'] = 'Informacije o računu administratorja';
$lang['install_admin_info'] = 'Izberite uporabni&scaron;ko ime, geslo in E-mail naslov za administratorjev račun. Geslo si obvezno zapomnite, saj se brez njega ne boste mogli prijaviti v administracijo sistema CMS Made Simple.';
$lang['install_admin_email'] = 'E-mail naslov';
$lang['install_admin_email_info'] = 'Po&scaron;lji informacije o računu na E-mail';
$lang['install_admin_email_note'] = '<strong>Opozorilo:</strong> Ta funkcija uporablja PHP funkcijo mail. Če ne dobite tega sporočila to lahko pomeni, da va&scaron; strežnik ni pravilno konfiguriran in je priporočljivo, da o tem obvestite administratorja strežnika.';
$lang['install_admin_sitename'] = 'Naziv va&scaron;e strani. Uporabljen bo na različnih delih privzetih predlog, prav tako ga lahko kjerkoli vstavite z oznako {sitename}.';
$lang['install_admin_db'] = 'Informacije o podatkovni bazi';
$lang['install_admin_db_info'] = '<p>Prepričajte se, da ste ustvarili izbrano podatkovno bazo in omogočili polne pravice uporabniku za uporabo te baze.</p>
<p>Za MySQL opravite naslednji postopek:</p>
<p>Prijavite se v mysql preko terminala in zaženite naslednja ukaza:</p>
<ol>
<li>create database cms; (use whatever name you want here but make sure to remember it, you&#039;ll need to enter it on this page)</li>
<li>grant all privileges on cms.* to cms_user@localhost identified by &#039;cms_pass&#039;;</li>
</ol>';
$lang['install_admin_follow'] = 'Prosimo, izpolnite naslednja polja';
$lang['install_admin_db_type'] = 'Tip podatkovne baze';
$lang['install_admin_no_db'] = 'Va&scaron;a namestitev jezika PHP ne vsebuje veljavnih gonilnikov za podatkovno bazo. Prosimo preverite, ali imate name&scaron;čeno podporo za MySQL, MySQLi in/ali Postgres 7 in poizkusite ponovno.';
$lang['install_admin_db_host'] = 'Naslov strežnika podatkovne baze';
$lang['install_admin_db_name'] = 'Ime podatkovne baze';
$lang['install_admin_db_create'] = 'Ustvari tabele (Pozor: izbri&scaron;e obstoječe podatke)';
$lang['install_admin_db_prefix'] = 'Predpona tabel';
$lang['install_admin_db_sample'] = 'Namesti vzorčno vsebino in predloge';
$lang['retry'] = 'Ponovno';
$lang['install_admin_db_create_seq'] = 'Ustvarjanje sekvence %s tabel...';
$lang['install_admin_importing'] = 'Uvoz vzorčnih podatkov...';
$lang['invalid_query'] = 'Nepravilna poizvedba: %s';
$lang['install_creating_table'] = '<p>Ustvarjanje tabele %s ... [%s]</p>';
$lang['install_creating_index'] = '<p>Ustvarjanje indeksa tabele %s ... [%s]</p>';
$lang['done'] = 'zaključeno';
$lang['failed'] = 'neuspe&scaron;no';
$lang['install_admin_error_schema'] = 'Napaka pri pridobivanju SQL sheme';
$lang['install_admin_set_account'] = 'Nastavljanje informacij računa administratorja...';
$lang['install_admin_set_sitename'] = 'Nastavljam naziv strani...';
$lang['install_admin_setup'] = 'Sedaj lahko nadaljujete z namestitvijo va&scaron;e konfiguracijske datoteke, saj imamo že večino podatkov, ki so potrebni. Najverjetneje boste te nastavitve pustili pri miru, zato kliknite Nadaljuj, ko boste pripravljeni.';
$lang['install_admin_docroot'] = 'Zgornja mapa (root) CMS sistema (kot je viden iz spletnega strežnika)';
$lang['install_admin_docroot_path'] = 'Pot do zgornje mape (document root)';
$lang['install_admin_querystring'] = 'Niz za poizvedbo (query string - pustite pri miru, razen če imate težave; v tem primeru ročno uredite datoteko config.php)';
$lang['invalid_querys'] = '<b>OPOZORILO<b/>: Napačne poizvedbe na va&scaron;i podatkovni bazi!';
$lang['install_admin_sitedown'] = 'Napaka: Ne morem izbrisati datoteke tmp/cache/SITEDOWN. Prosimo, ročno izbri&scaron;ite to datoteko.';
$lang['install_admin_update_hierarchy'] = 'Posodobitev pozicij v hierarhiji...';
$lang['install_admin_set_core_event'] = 'Nastavljanje dogodkov jedra...';
$lang['install_admin_install_modules'] = 'Namestitev modulov...';
$lang['install_admin_index_search'] = 'Indeksiranje iskalnika...';
$lang['install_admin_clear_cache'] = 'Brisanje predpomnilnika strani (če obstaja)...';
$lang['install_admin_emailing'] = 'Po&scaron;iljanje podrobnosti o administratorjevem računu na E-mail...';
$lang['install_admin_congratulations'] = 'Čestitamo, namestitev je uspe&scaron;na - tukaj imate va&scaron;e';
$lang['could_not_connect_db'] = 'Ne morem vzpostaviti povezave na bazo. Preverite, če sta uporabni&scaron;ko ime in geslo pravilna in ali ima ta uporabnik dovoljenje za dostop do te podatkovne baze.';
$lang['cannot_write_config'] = 'Napaka: Ne morem pisati v %s.';
$lang['email_accountinfo_subject'] = 'CMS Made Simple informacije o administratorskem računu';
$lang['email_accountinfo_message'] = 'Zahvaljujemo se vam za namestitev sistema CMS Made Simple.

Podatki za prijavo v va&scaron; uporabni&scaron;ki račun so:
uporabni&scaron;ko ime: %s
                 geslo: %s

V administracijo se prijavite na naslovu: %s

';
$lang['qca'] = 'P0-1458450664-1284573084918';
$lang['utmz'] = '156861353.1339870814.1.1.utmccn=(direct)|utmcsr=(direct)|utmcmd=(none)';
$lang['utma'] = '156861353.328538414.1339870814.1339870814.1339873626.2';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353';
?>