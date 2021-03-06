<?php
$lang['admin']['help_function_cms_init_editor'] = '<h3> Hva gj&oslash;r denne? </ h3>
  <p> Dette programtillegget brukes til &aring; initialisere valgt WYSIWYG editor for visning n&aring;r wysiwyg funksjonalitet er n&oslash;dvendig for frontend data innlevering. Denne modulen vil finne den valgte frontend wysiwyg, avgj&oslash;re om det har blitt bedt om, og hvis s&aring; genererer den aktuelle html-kode <em>(vanligvis javascript lenker)</em> slik at wysiwyg vil starte skikkelig n&aring;r siden er lastet. Hvis ingen WYSIWYG redigerer har blitt bedt om for frontend foresp&oslash;rselen for om dette programtillegget ikke produsere noen output. </ P>
  <p><strong>Merk:</strong> Dette programtillegget vil fungere gitt at det er standardkonfigurasjonen av CMSMS. Hvis du har endret &quot;process_whole_template&quot; konfigurasjon variabelen fra sin standardverdi, m&aring; du kanskje justere parametere som er tilgjengelig for denne plugin. </p>
<h3>Hvordan bruker jeg denne?</h3>
<p>Det f&oslash;rste du m&aring; gj&oslash;re er &aring; velge frontend WYSIWYG editor &aring; bruke i de globale innstillingene side i admin konsollet. Neste Hvis du bruker frontend WYSIWYG redigerer p&aring; mange sider, kan det v&aelig;re best &aring; plassere {cms_init_editor} plugin direkte til din sidemal. Hvis du bare krever at WYSIWYG redigerer skal v&aelig;re aktivert p&aring; et begrenset antall sider kan du bare plassere den i &quot;Sidespesifikke Metadata&quot;-feltet p&aring; hver side.</p>
<h3>Hvilke parametere tid tar denne?</h3>
<ul>
<li><em>(valgfritt) wysiwyg </em> - Angi navnet p&aring; WYSIWYG redigerer-modulen &aring; initialisere. Brukes med forsiktighet. Hvis du har en annen WYSIWYG redigerer valgt i de globale innstillingene, vil dette tvinge den spesifiserte redigerer &aring; bli initialisert.</li>
<li><em>(valgfritt) force=0</em> - Vanligvis vil denne plugin ikke initialisere spesifisert (eller oppdaget) redigerer hvis den ikke har blitt merket som &quot;aktiv&quot;. Denne parameteren vil overstyre den oppf&oslash;rselen. Denne parameteren kan v&aelig;re n&oslash;dvendig i tilfelle &quot;process_whole_template&quot; konfigurasjonsvariabel er satt til ikke-standard verdi. </li>
<li><em>(valgfritt) tilordner</em> - Tilordner utdata fra innstikksmodulen til den navngitte smarty-variabelen</li>
</ Ul>';
$lang['admin']['info_pagedefaults'] = 'Dette skjemaet kan angi ulike alternativer til de opprinnelige innstillingene n&aring;r du oppretter nye innholdssider. Elementene i denne siden har ingen effekt n&aring;r du redigerer eksisterende sider';
$lang['admin']['default_contenttype'] = 'Standard innholdstype';
$lang['admin']['info_default_contenttype'] = 'Gjelder n&aring;r du legger til nye innholdsobjekter, hvor denne kontrollen spesifiserer typen som er valgt som standard. Vennligst forsikre deg at det valgte elementet ikke er en av de &quot;nektede typene&quot; nedenfor.';
$lang['admin']['error_contenttype'] = 'Innholdstypen som er knyttet til denne siden er ugyldig eller ikke tillatt';
$lang['admin']['info_disallowed_contenttypes'] = 'Velg hvilke innholdstyper &aring; fjerne fra &quot;innholdstype&quot;-dropdown n&aring;r du redigerer eller legger til innhold. Bruk CTRL+Klikk for &aring; velge, velge bort elementer. Om ingen elementer er valgt vil dette indikere at alle innholdstyper er tillatt';
$lang['admin']['disallowed_contenttypes'] = 'Innholdstyper som ikke er tillatte';
$lang['admin']['search_module'] = 'S&oslash;kemodul';
$lang['admin']['info_search_module'] = 'Velg modulen som skal benyttes for &aring; indeksere ord for s&oslash;king, og som vil gi nettstedet s&oslash;kefunksjon';
$lang['admin']['filecreatedirbadchars'] = 'Ugyldige tegn ble oppdaget i det oppgitte katalognavnet';
$lang['admin']['modulehelp_yourlang'] = 'Vis i ditt valgte spr&aring;k';
$lang['admin']['info_umask'] = 'Denne &quot;umask&quot; er en oktal verdi som brukes til &aring; angi standard tillatelse til nyopprettede filer (dette er brukt for filer i cache-katalogen, og for opplastede filer. For mer informasjon se denne <a href="http://en.wikipedia.org/wiki/umask">Wikipedia-artikkelen. </a>';
$lang['admin']['general_operation_settings'] = 'Generelle bruksinnstillinger';
$lang['admin']['info_checkversion'] = 'Om p&aring;sl&aring;tt, vil en sjekk utf&oslash;res en gang daglig etter nye versjoner av CMSMS';
$lang['admin']['checkversion'] = 'Tillat periodisk sjekk for nye versjoner';
$lang['admin']['actioncontains'] = 'Handling inneholder';
$lang['admin']['filterapplied'] = 'N&aring;v&aelig;rende filter';
$lang['admin']['automatedtask_success'] = 'Automatisk oppgave utf&oslash;rt';
$lang['admin']['siteprefsupdated'] = 'Nettsted innstillinger opdatert';
$lang['admin']['ip_addr'] = 'IP Adresse';
$lang['admin']['warn_admin_ipandcookies'] = 'Advarsel: Adminaktiviteter benytter cookies og sporer din IP adresse';
$lang['admin']['event_desc_loginfailed'] = 'Innlogging feilet';
$lang['admin']['modulehelp_english'] = 'Vis p&aring; engelsk';
$lang['admin']['nopluginabout'] = 'Ingen Om informasjon tilgjengelig for denne innstikksmodul';
$lang['admin']['nopluginhelp'] = 'Ingen Hjelp tilgjengelig for denne innstikksmodul';
$lang['admin']['moduleupgraded'] = 'Oppgradering vellykket';
$lang['admin']['added_css'] = 'La til stilark';
$lang['admin']['toggle'] = 'Veksle';
$lang['admin']['added_group'] = 'La til gruppe';
$lang['admin']['expanded_xml'] = 'Utpakket XML fil inneholder %s %s';
$lang['admin']['installed_mod'] = 'Installert versjon %s';
$lang['admin']['uninstalled_mod'] = 'Avinstallert modul %s';
$lang['admin']['upgraded_mod'] = '%s oppgradert fra versjon %s til %s';
$lang['admin']['edited_gcb'] = 'Redigert Global Innholdsblokk (Global Content Block)';
$lang['admin']['edited_content'] = 'Redigert innhold';
$lang['admin']['added_content'] = 'La til innhold';
$lang['admin']['added_css_association'] = 'La til stilark kobling';
$lang['admin']['deleted_group'] = 'Slettet gruppe';
$lang['admin']['deleted_content'] = 'Slettet innhold';
$lang['admin']['edited_user'] = 'Redigert bruker';
$lang['admin']['edited_udt'] = 'Redigert Brukerdefinert tagg (User Defined Tag)';
$lang['admin']['content_copied'] = 'Innholdselement kopiert til %s';
$lang['admin']['deleted_template'] = 'Slettet mal';
$lang['admin']['added_udt'] = 'La til Brukerdefinert tagg (User Defined Tag)';
$lang['admin']['deleted_udt'] = 'Slettet Brukerdefinert tagg (User Defined Tag)';
$lang['admin']['added_gcb'] = 'La til Global innholdsblokk (Global Content Block)';
$lang['admin']['edited_group'] = 'Redigerte gruppe';
$lang['admin']['deleted_css_association'] = 'Slettet stilark kobling';
$lang['admin']['user_logout'] = 'Bruker utlogging';
$lang['admin']['user_login'] = 'Bruker innlogging';
$lang['admin']['login_failed'] = 'Brukerinnlogging feilet';
$lang['admin']['deleted_css'] = 'Slettet stilark';
$lang['admin']['uploaded_file'] = 'Lastet opp fil';
$lang['admin']['created_directory'] = 'Opprettet katalog';
$lang['admin']['deleted_file'] = 'Slettet fil';
$lang['admin']['deleted_directory'] = 'Slettet katalog';
$lang['admin']['edited_template'] = 'Redigerte mal';
$lang['admin']['deleted_user'] = 'Slettet bruker';
$lang['admin']['deleted_module'] = 'Fjernet permanent %s';
$lang['admin']['deleted_gcb'] = 'Slettet global innholdsblokk (Global Content Block)';
$lang['admin']['added_user'] = 'La til bruker';
$lang['admin']['edited_user_preferences'] = 'Redigerte brukerinnstillinger';
$lang['admin']['added_template'] = 'La til mal';
$lang['admin']['event_desc_stylesheetpostcompile'] = 'Sendes etter at silarket er behandlet med smarty';
$lang['admin']['event_desc_stylesheetprecompile'] = 'Sendes f&oslash;r at silarket er behandlet med smarty';
$lang['admin']['confirm_uploadmodule'] = 'Er du sikker p&aring; at &oslash;nsker &aring; laste opp denne XML filen? Modulfiler som lastes opp feil kan &oslash;delegge en fungerende nettside.';
$lang['admin']['error_module_mincmsversion'] = 'Denne modulen trenger en nyere versjon av CMS Made Simple';
$lang['admin']['info_browser_cache_expiry'] = 'Spesifiser hvor lenge (i minutter) som nettlesere kan mellomlagre sider. &Aring; sette denne verdi til 0 sl&aring;r av denne funksjonen';
$lang['admin']['browser_cache_expiry'] = 'Nettleser Mellomlagrings utl&oslash;psperiode <em>(minutter)</em>';
$lang['admin']['info_browser_cache'] = 'Gjelder bare for sider som er tillatt &aring; mellomlagre, denne innstillingen indikerer at nettlesere skal f&aring; lov til &aring; mellomlagre sidene for en tid. Hvis dette er aktivert vil tilbakevendende bes&oslash;kende til nettstedet ditt kanskje ikke umiddelbart se endringer i innholdet p&aring; sidene.';
$lang['admin']['allow_browser_cache'] = 'Tillat nettleser &aring; mellomlagre sider';
$lang['admin']['server_cache_settings'] = 'Server mellomlagringsinnstillinger ';
$lang['admin']['browser_cache_settings'] = 'Nettleser mellomlagringsinnstillinger ';
$lang['admin']['help_function_browser_lang'] = '<h3>Hva gj&oslash;r denne?</h3>
  <p>Denne plugin oppdager og spytter ut det spr&aring;ket som brukerens nettleser aksepterer, og kryssrefererer det med en liste med tillatte spr&aring;k for &aring; avgj&oslash;re en spr&aring;kverdi for sesjonen.</p>
<h3>Hvordan bruker jeg denne?</h3>
<p>Sett inn taggen tidlig i din sidemal <em>(den kan st&aring; overfor <head> seksjonen om du &oslash;nsker dette)</em> og sett inn i taggen navnet p&aring; standardspr&aring;ket, og de aksepterte spr&aring;kene (kun to bokstavs spr&aring;knavn er godtatt), deretter gj&oslash;r du noe med resultatet.  F.eks.:</p>
<pre><code>{browser_lang accept=de,fr,en,es default=en assign=tmp}{session_put var=lang val=$tmp}</code></pre>
<p><em>({session_put} er en annen plugin som kommer fra CGSimpleSmarty modulen)</em></p>
<h3>Hvilke parametere tar denne?</h3>
<ul>
<li><strong>accepted <em>(required)</em></strong><br/> - En kommaseparert liste med to-stavelse spr&aring;knavn som er aksepterte.</li>
<li>default<br/>- <em>(optional)</em> Et standard spr&aring;k &aring; vise om ingen aksepterte spr&aring;k var st&oslash;ttet av nettleseren.  en  - er benyttet om ingen annen verdi er oppgitt.</li>
<li>assign<br/>- <em>(optional)</em> Navnet p&aring; smarty-variabelen &aring; tilegne resultatet til. Om dette ikke er oppgitt vil resultatet av denne funksjonen blir returnert.</li>
</ul>';
$lang['admin']['info_target'] = 'Denne opsjonen kan benyttes av Menu Manager for &aring; indikere n&aring;r og hvordan nye rammer eller vinduer skal &aring;pnes. Noen menybehandlermaler vil muligens ignorere denne opsjonen.';
$lang['admin']['close'] = 'Lukk';
$lang['admin']['revert'] = 'Tilbakestill alle endringer';
$lang['admin']['autoclearcache2'] = 'Fjern mellomlagrede filer(cache) som er eldre enn det spesifiserte antall dager';
$lang['admin']['root'] = 'Rot';
$lang['admin']['info_content_autocreate_flaturls'] = 'Hvis aktivert, vil alle nettadresser bli opprettet som en kopi av side-alias (men ikke synkronisert til side-alias)';
$lang['admin']['content_autocreate_flaturls'] = 'Automatisk opprettede URL&#039;er er flate';
$lang['admin']['content_autocreate_urls'] = 'Opprett automatisk side-URL&#039;er';
$lang['admin']['content_mandatory_urls'] = 'Side URLer er p&aring;krevd';
$lang['admin']['content_imagefield_path'] = 'Sti for bildefeltet';
$lang['admin']['info_content_imagefield_path'] = 'I forhold til banene for bildeopplasting, angi et katalognavn som inneholder banene som inneholder filer for bildefeltet';
$lang['admin']['content_thumbnailfield_path'] = 'Sti for miniatyrbildefeltet';
$lang['admin']['info_content_thumbnailfield_path'] = 'I forhold til banene for bildeopplasting, angi et katalognavn som inneholder banene som inneholder filer for bildefeltet. Vanligvis vil dette v&aelig;re det samme som stien ovenfor.';
$lang['admin']['contentimage_path'] = 'Sti for {content_image}-taggen';
$lang['admin']['info_contentimage_path'] = 'I forhold til banene for opplasting, angi et katalognavn som inneholder banene som inneholder filer for  {content_image}-taggen. Denne verdien brukes som standard for dir parameteren';
$lang['admin']['editcontent_settings'] = 'Innholdsredigerings innstillinger';
$lang['admin']['help_page_url'] = 'Angi en alternativ URL (relativt til roten p&aring; ditt nettsted) som kan brukes for &aring; identifisere denne siden. i.e: sti/til/minside Sideurlen er kun nyttig n&aring;r vakre urler er p&aring;sl&aring;tt.';
$lang['admin']['help_page_alias'] = 'Aliaset brukes som et alternativ til side id for &aring; unikt identifisere en side. Det m&aring; v&aelig;re unikt p&aring; tvers av alle sidene. Aliaset brukes ogs&aring; til &aring; hjelpe &aring; bygge nettadressen til siden';
$lang['admin']['help_page_searchable'] = 'Denne innstillingen angir om innholdet p&aring; denne siden skal indekseres av s&oslash;kemotoren';
$lang['admin']['help_page_cachable'] = 'Ytelsen kan &oslash;kes ved &aring; sette s&aring; mange sider som mulig til &aring; mellomlagres(cachable). Men dette kan ikke brukes p&aring; sider der innholdet kan endres per foresp&oslash;rsel';
$lang['admin']['sitedownexcludeadmins'] = 'Ikke ta med innloggede administratorer';
$lang['admin']['your_ipaddress'] = 'Din IP-adresse er';
$lang['admin']['use_wysiwyg'] = 'Benytt WYSIWYG';
$lang['admin']['contenttype_redirlink'] = 'Omdirigeringslenke';
$lang['admin']['yes'] = 'Ja';
$lang['admin']['no'] = 'Nei';
$lang['admin']['listcontent_showalias'] = 'Vis &quot;Alias&quot; kolonnen';
$lang['admin']['listcontent_showurl'] = 'Vis &quot;URL&quot; kolonnen';
$lang['admin']['listcontent_showtitle'] = 'Vis Sidetittel eller Menytekst';
$lang['admin']['listcontent_settings'] = 'Innholdsliste innstillinger';
$lang['admin']['lctitle_page'] = 'Tittelen p&aring; eksisterende innholdselementer';
$lang['admin']['lctitle_alias'] = 'Alias p&aring; eksisterende innholdselementer. Noen innholdselementer har ikke alias';
$lang['admin']['lctitle_url'] = 'URL endelse(suffix) for innholdselementet. Om satt';
$lang['admin']['lctitle_template'] = 'Den valgte malen for innholdselementet. Noen innholdselementer har ikke maler';
$lang['admin']['lctitle_owner'] = 'Eieren av innholdselementet';
$lang['admin']['lctitle_active'] = 'Angir om innholdselementet er aktivt. Inaktive elementer kan ikke vises.';
$lang['admin']['lctitle_default'] = 'Angi hvilket innholdselement som skal vises n&aring;r rot-url ettersp&oslash;res. Bare ett element kan v&aelig;re standard';
$lang['admin']['lctitle_move'] = 'Tillater arrangering av innholdshierarkiet';
$lang['admin']['lctitle_multiselect'] = 'Velg alle/velg ingen';
$lang['admin']['invalid_url'] = 'Side URL oppgitt er ugyldig. Den b&oslash;r inneholde kun alfanumeriske tegn, eller - eller /. Det er ogs&aring; mulig at den oppgitte URL allerede er i bruk.';
$lang['admin']['page_url'] = 'Side URL';
$lang['admin']['runuserplugin'] = 'Kj&oslash;r Bruker-plugin';
$lang['admin']['output'] = 'Utdata';
$lang['admin']['run'] = 'Kj&oslash;r';
$lang['admin']['run_udt'] = 'Kj&oslash;r denne Brukerdefinerte taggen(User Defined Tag)';
$lang['admin']['stylesheetcopied'] = 'Stilark kopiert';
$lang['admin']['templatecopied'] = 'Mal kopiert';
$lang['admin']['ecommerce_desc'] = 'Moduler for &aring; tilf&oslash;re ehandel egenskaper';
$lang['admin']['ecommerce'] = 'E-Commerce ';
$lang['admin']['help_function_content_module'] = '<h3>Hva gj&oslash;r denne?</h3>
<p>Denne innholdsblokktypen tillater samhandling med forskjellige moduler for &aring; opprette forskjellige innholdsblokk typer.</p>
<p>Noen moduler kan definere innholdsblokktyper for bruk i modulmaler. F.eks.: FrontEndUsers modulen kan definere en gruppeliste-innholdsblokk type. Denne vil da indikere hvordan du kan benytte content_module taggen for &aring; benytte den blokktypen inne i dine maler.</p>
<p><strong>Merk:</strong> Denne blokktypen m&aring; bare benyttes med kompatible moduler. Du m&aring; ikke benytte denne p&aring; noen annen m&aring;te enn slik det er instruert i tilleggsmodulene.</p>';
$lang['admin']['error_parsing_content_blocks'] = 'Det oppstod en feil ved tolkning av innholdsblokker (mulig det er to eller flere like navn p&aring; blokker)';
$lang['admin']['error_no_default_content_block'] = 'Ingen standard innholdsblokk (content) ble oppdaget i denne malen. Vennligst pass p&aring; at du har en {content}-tagg i sidemalen.';
$lang['admin']['help_function_cms_stylesheet'] = '	<h3>Hva gj&oslash;r denne?</h3>
  <p>Dette er en erstatning for den gamle {stylesheet}taggen. Denne taggen tilbyr mellomlagring av stilark(css)-filer ved &aring; generere statiske filer i tmp/cache katalogen, og smartyprosessering av de individuelle malene.</p>
  <p>Dette programtillegget henter stilark informasjon fra systemet. Som standard, tar den tak i alle stilarkene knyttet til den n&aring;v&aelig;rende malen i den rekkef&oslash;lgen som er angitt av designeren, og genererer stilarktagger.</p>
  <p>Genererte stilark blir unikt navnet i henhold til siste endringsdato i databasen, og blir kun generert om stilarket er endret.</p>
  <p>Denne taggen er en erstatning for {stylesheet}-taggen.</p>
  <h3>Hvordan bruke rjeg denne?</h3>
  <p>Bare sett inn taggen i din mal/side&#039;s head seksjon som dette: <code>{cms_stylesheet}</code></p>
  <h3>Hvilke parametere tar denne?</h3>
  <ul>
  <li><em>(valgfri)</em>name - I stedet for &aring; ta alle stilark for den angitte siden, s&aring; vil den bare ta en spesifikk med oppgitt navn, uansett om stilarket er tilknyttet til n&aring;v&aelig;rende mal eller ikke.</li>
  <li><em>(valgfri)</em>media - Om navn er definert, vil denne tillate deg &aring; sette en annen media-type for det stilarket.</li>
  <li><em>(valgfri)</em>templateid - Om templateid er definert s&aring; vil dette hente stilark som er koblet til den malen i stedet for den n&aring;v&aelig;rende.</li>
  </ul>
  <h3>Smarty prosessering</h3>
  <p>N&aring;r stilarkfiler genereres vil systemet sende stilarkene som hentes fra databasen gjennom smarty. Smarty atskillerne har blitt endret fra CMSMS standard { og } til [[ og ]] henholdsvis for &aring; lette overgangen i stilarkene. Dette tillater &aring; lage smarty variabler som f.eks.: [[assign var=&#039;red&#039; value=&#039;#900&#039;]] p&aring; toppen av stilarket, og s&aring; benytte disse variablene senere i stilarket, f.eks.:</p>
<pre>
<code>
h3 .error { color: [[$red]]; }<br/>
</code>
</pre>
<p>Fordi de genererte filene blir mellomlagret i tmp/cache katalogen i CMSMS installasjonen, s&aring; er stilarkenes(CSS) relative arbeidskatalog ikke i roten p&aring; nettstedet. Derfor b&oslash;r alle bilder, eller andre tagger som krever en url benytte [[root_url]] taggen for &aring; tvinge dette til &aring; bli en absolutt url. F.eks.:</p>
<pre>
<code>
h3 .error { background: url([[root_url]]/uploads/images/error_background.gif); }<br/>
</code>
</pre>
<p><strong>Merk:</strong> P&aring; grunn av mellomlagringsegenskapen til denne programtillegget, s&aring; b&oslash;r smarty variabler plasseres p&aring; toppen av HVERT stilark som er knyttet til en mal.</p>';
$lang['admin']['pseudocron_granularity'] = 'Pseudocron korning';
$lang['admin']['info_pseudocron_granularity'] = 'Denne innstilling angir hvor ofte det vil bli fors&oslash;kt &aring; h&aring;ndtere regelmessig planlagte oppgaver';
$lang['admin']['cron_request'] = 'Hver foresp&oslash;rsel';
$lang['admin']['cron_15m'] = '15 minutter';
$lang['admin']['cron_30m'] = '30 minutter';
$lang['admin']['cron_60m'] = '1 time';
$lang['admin']['cron_120m'] = '2 timer';
$lang['admin']['cron_3h'] = '3 timer';
$lang['admin']['cron_6h'] = '6 timer';
$lang['admin']['cron_12h'] = '12 timer';
$lang['admin']['cron_24h'] = '24 timer';
$lang['admin']['adminlog_1day'] = '1 dag';
$lang['admin']['adminlog_1week'] = '1 uke';
$lang['admin']['adminlog_2weeks'] = '2 uker';
$lang['admin']['adminlog_1month'] = '1 m&aring;ned';
$lang['admin']['adminlog_3months'] = '3 m&aring;neder';
$lang['admin']['adminlog_6months'] = '6 m&aring;neder';
$lang['admin']['adminlog_manual'] = 'Manuell sletting';
$lang['admin']['adminlog_lifetime'] = 'Komplett logg';
$lang['admin']['info_adminlog_lifetime'] = 'Denne innstillingen bestemmer hvor lenge logg filene skal lagres f&oslash;r de slettes.';
$lang['admin']['filteruser'] = 'Brukernavnet er';
$lang['admin']['filtername'] = 'Hendelsesnavn inneholder';
$lang['admin']['filteraction'] = 'Handlingen inneholder';
$lang['admin']['filterapply'] = 'Bruk filter';
$lang['admin']['filterreset'] = 'Nullstill filter';
$lang['admin']['filters'] = 'Filter';
$lang['admin']['showfilters'] = 'Vis filter';
$lang['admin']['clearcache_taskdescription'] = 'Utf&oslash;res daglig, denne oppgaven vil rense mellomlagrede filer som er eldre enn alderen forh&aring;ndsinnstilt i de globale preferansene';
$lang['admin']['clearcache_taskname'] = 'Rens mellomlagrede filer';
$lang['admin']['info_autoclearcache'] = 'Angi en verdi p&aring; 0 for &aring; deaktivere automatisk mellomlager rensing';
$lang['admin']['autoclearcache'] = 'Automatisk t&oslash;mme mellomlageret hver Nte dager';
$lang['admin']['listtemplates_pagelimit'] = 'Antall rader per side ved visning av maler';
$lang['admin']['liststylesheets_pagelimit'] = 'Antall rader per side ved visning av stilark';
$lang['admin']['listgcbs_pagelimit'] = 'Antall rader per side ved visning av Globale Innholdsblokker(GCB)';
$lang['admin']['insecure'] = 'Usikker (HTTP)';
$lang['admin']['secure'] = 'Sikker (HTTPS)';
$lang['admin']['secure_page'] = 'Benytt HTTPS for denne siden';
$lang['admin']['thumbnail_width'] = 'Miniatyrbilde Bredde';
$lang['admin']['thumbnail_height'] = 'Miniatyrbilde H&oslash;yde';
$lang['admin']['E_STRICT'] = 'Er E_STRICT deaktivert i error_reporting';
$lang['admin']['test_estrict_failed'] = 'E_STRICT er aktivert i error_reporting';
$lang['admin']['info_estrict_failed'] = 'Noen biblioteker som CMS Made Simple benytter fungerer ikke godt med E-STRICT. Vennligst deaktivere denne f&oslash;r du fortsetter';
$lang['admin']['E_DEPRECATED'] = 'Er E_DEPRECATED deaktivert i error_reporting';
$lang['admin']['test_edeprecated_failed'] = 'E_DEPRECATED er aktivert';
$lang['admin']['info_edeprecated_failed'] = 'Om E_DEPRECATED er aktivert i din feilrapportering s&aring; vil brukere se mange feilmeldinger som kan ha effekt p&aring; visning og funksjonalitet';
$lang['admin']['session_use_cookies'] = 'Sesjoner tillates &aring; benytte Cookies';
$lang['admin']['errorgettingcontent'] = 'Kunne ikke finne informasjon om det spesifiserte innholdsobjektet';
$lang['admin']['errordeletingcontent'] = 'Feil ved sletting av innhold (enten har denne siden barn eller s&aring; er den standard innholdside)';
$lang['admin']['invalidemail'] = 'E-postadressen som er oppgitt er ugyldig';
$lang['admin']['info_deletepages'] = 'Merk: P&aring; grunn av tilgangsrestriksjoner s&aring; kan noen sidene du valgte for sletting v&aelig;re utelatt fra listen nedenfor';
$lang['admin']['info_pagealias'] = 'Spesifiser en unik alias for denne siden.';
$lang['admin']['info_autoalias'] = 'Om dette feltet er tomt vil en ny alias bli opprettet automatisk';
$lang['admin']['invalidparent'] = 'Du m&aring; velge en foreldreside (kontakt din administrator om du ikke ser dette valget).';
$lang['admin']['forgotpwprompt'] = 'Oppgi ditt admin brukernavn. En e-post med ny innloggingsinformasjon vil da bli sendt til den e-postadressen som er forbundet med det brukernavnet';
$lang['admin']['info_basic_attributes'] = 'Dette feltet tillater deg &aring; spesifisere hvilke innholdegenskaper som brukere uten &quot;Manage All Content&quot; rettighet har tillatelse til &aring; redigere. De valgte egenskaper vil vises i &quot;hovedfanen&quot; p&aring; rediger innhold-siden.';
$lang['admin']['basic_attributes'] = 'Grunnleggende innstillinger';
$lang['admin']['no_permission'] = 'Du har ikke rettighet til &aring; utf&oslash;re denne handling.';
$lang['admin']['bulk_success'] = 'Masseoperasjonen ble vellykket gjennomf&oslash;rt.';
$lang['admin']['no_bulk_performed'] = 'Ingen masseoperasjon ble utf&oslash;rt.';
$lang['admin']['info_preview_notice'] = 'Advarsel. Dette forh&aring;ndsvisningsvinduet oppf&oslash;rer seg mye likt et nettleservindu hvor det tillater deg &aring; surfe bort fra den opprinnelige forh&aring;ndsviste siden.
Men om du gj&oslash;r s&aring;, vil du oppleve uventet oppf&oslash;rsel. Om du navigerer bort fra den opprinnelige siden og vender tilbake s&aring; vil du du trolig ikke se det enn&aring; ikke lagrede innholdet f&oslash;r du igjen gj&oslash;r en endring p&aring; innholdet i hovedfanen og laster denne fanen p&aring; ny. Ved innlegging av innhold, om du navigerer bort fra denne siden vil du ikke kunne vende tilbake, og m&aring; oppfriske dette panelet.';
$lang['admin']['sitedownexcludes'] = 'Utelat disse adressene fra Nettsted nede meldinger';
$lang['admin']['info_sitedownexcludes'] = 'Denne parameter tillater &aring; liste opp en kommaseparert liste med ip-adresser eller nettverk som ikke skal ber&oslash;res av Nettsted nede mekanismen. Dette tillater administratorer &aring; arbeide p&aring; et nettsted mens anonyme bes&oslash;kere ser en Nettsted nede melding.<br/><br/>Adresser kan spesifiseres p&aring; f&oslash;lgende formater:<br/>
1. xxx.xxx.xxx.xxx -- (n&oslash;yaktig IP-adresse)<br/>
2. xxx.xxx.xxx.[yyy-zzz] -- (IP-adresseserien)<br/>
3. xxx.xxx.xxx.xxx/nn -- (nnn = antall bits, cisco stil.  f.eks.:  192.168.0.100/24 = hele 192.168.0 klasse C delnettet)';
$lang['admin']['setup'] = 'Avansert oppsett';
$lang['admin']['handle_404'] = 'Brukertilpasset 404-handling';
$lang['admin']['sitedown_settings'] = 'Netsted nede innstillinger';
$lang['admin']['general_settings'] = 'Generelle innstillinger';
$lang['admin']['help_function_page_attr'] = '<h3>Hva gj&oslash;r denne?</h3>
<p>page_attr taggen kan benyttes for &aring; returnere verdien for attributtene for en bestemt side.</p>
<h3>Hvordan benytter jeg denne?</h3>
<p>Sett inn taggen i din mal som dette: <code>{page_attr key=&quot;extra1&quot;}</code>.</p>
<h3>Hvilke parametere tar denne?</h3>
<ul>
  <li><strong>key [required]</strong> N&oslash;kkelen(key) som det skal returneres attributter for.</li>
</ul>';
$lang['admin']['forge'] = 'Forge ';
$lang['admin']['disable_wysiwyg'] = 'WYSIWYG ikke tillatt for denne siden';
$lang['admin']['help_function_page_image'] = '<h3>Hva gj&oslash;r denne?</h3>
<p>Denne taggen kan benyttes til &aring; returnere verdien for bilde- eller miniatyrbilde feltene p&aring; en bestemt side.</p>
<h3>Hvordan benytter jeg denne?</h3>
<p>Sett inn en tagg i din mal som dette: <code>{page_image}</code>.</p>
<h3>Hvilke parametere tar denne?</h3>
<ul>
  <li>thumbnail - Valgfritt vis verdien til thumbnail(miniatyrbilde) egenskapen i stedet for image(bilde) egenskapen.</li>
  <li><em>(valgfri)</em> assign (string) - Tilegn resultatet til en smarty variabel med dette navnet.</li>
</ul>';
$lang['admin']['pagelink_circular'] = 'En sidelenke kan ikke liste en annen sidelenke som sitt m&aring;l';
$lang['admin']['destinationnotfound'] = 'Den valgte siden ble ikke funnet eller er ikke gyldig';
$lang['admin']['help_function_dump'] = '<h3>Hva gj&oslash;r denne?</h3>
  <p>Denne taggen kan benyttes for &aring; dumpe innholdet av enhver smarty variabel til et mer lesbart format. Dette er nyttig for feils&oslash;king, og redigering av maler, for &aring; f&aring; vite formatet og type data som er tilgjengelig.</p>
<h3>Hvordan benytter jeg denne?</h3>
<p>Sett taggen inn i malen som <code>{dump item=&#039;smarty_variabelen_som_skal_dumpes&#039;}</code>.</p>
<h3>Hvilke parametere tar denne?</h3>
<ul>
<li><strong>item (required)</strong> - Smarty variabelen som det skal dumpes innhold fra.</li>
<li>maxlevel - Maksimal antall niv&aring; &aring; hente (kun gyldig om &#039;recurse&#039;(hente) ogs&aring; er benyttet. Standard verdi for denne parameter er 3</li>
<li>nomethods - Ikke vis utdata for methods fra objekter.</li>
<li>novars - Ikke vis utdata for objekt medlemmer.</li>
<li>recurse - Hent(Recurse) et maksimalt antall niv&aring; gjennom objektene ved &aring; tilby utf&oslash;rlig utdata for hver enhet inntil maksimalt antall niv&aring; er n&aring;dd.</li>
  <li><em>(valgfri)</em> assign (string) - Tilegn resultatet til en smarty variabel med dette navnet.</li>
</ul>';
$lang['admin']['sqlerror'] = 'SQL feil i %s';
$lang['admin']['image'] = 'Bilde';
$lang['admin']['thumbnail'] = 'Miniatyrbilde ';
$lang['admin']['searchable'] = 'Denne siden er s&oslash;kbar';
$lang['admin']['help_function_content_image'] = '<h3>Hva gj&oslash;r denne?</h3>
<p>Dette programtillegget tillater maldesignere &aring; be brukerne om &aring; velge en bildefil n&aring;r de redigerer innhold p&aring; en side. Den oppf&oslash;rer seg tilsvarende content programtillegget for ekstra innholdblokker.</p>
<h3>Hvordan bruker jeg denne?</h3>
<p>Bare sett taggen inn i din sidemal som dette <code>{content_image block=&#039;image1&#039;}</code>.</p>
<h3>Hvilke parametere tar denne?</h3>
<ul>
  <li><em><strong>(p&aring;krevd)</strong></em> block - Navnet p&aring; denne ekstra innholdblokken.
  <p>Eksempel:</p>
  <pre>{content_image block=&#039;image1&#039;}</pre><br/>
  </li>

  <li><em>(valgfri)</em> label - En etikett(label) eller sp&oslash;rsm&aring;l for denne innholdblokken p&aring; &#039;rediger innhold&#039;-siden. Om dette ikke er spesifisert, vil blokkens navn bli benyttet.</li>
 
  <li><em>(valgfri)</em> dir - Navnet p&aring; katalogen (relativ til uploads katalogen, for hvor bildefiler skal velges. Om dette ikke er spesifisert vil uploads katalogen bli benyttet.
  <p>Eksempel: benytt bilder fra uploads/image katalogen.</p>
  <pre>{content_image block=&#039;image1&#039; dir=&#039;images&#039;}</pre><br/>
  </li>

  <li><em>(valgfri)</em> class - css klassens navn &aring; benytte for img taggen p&aring; frontend visningen.</li>

  <li><em>(valgfri)</em> id - Id navnet som skal benyttes for img taggen p&aring; frontend visningen.</li> 

  <li><em>(valgfri)</em> name - Tagg navnet &aring; benytte for img taggen p&aring; frontend visning.</li> 

  <li><em>(valgfri)</em> width - Den &oslash;nskede bredde for bildet.</li>

  <li><em>(valgfri)</em> height - Den &oslash;nskede h&oslash;yde for bildet.</li>

  <li><em>(valgfri)</em> alt - Alternativ tekst om bildet ikke blir funnet.</li>

  <li><em>(valgfri)</em> urlonly - sender bare url til bildet, og ignorerer alle parametere som id, name, width, height, osv.</li>

  <li><em>(valgfri)</em> assign (string) - Tilegn resultatet til en smarty variabel med dette navnet.</li>

</ul>';
$lang['admin']['error_udt_name_chars'] = 'Et gyldig UDT-navn starter med en bokstav eller understrek, fulgt av ethvert antall med bokstaver, tall eller understreker.';
$lang['admin']['errorupdatetemplateallpages'] = 'Malen er ikke aktiv';
$lang['admin']['hidefrommenu'] = 'Ikke i meny';
$lang['admin']['settemplate'] = 'Sett mal';
$lang['admin']['text_settemplate'] = 'Sett valgte sider til &aring; benytte annen mal';
$lang['admin']['cachable'] = 'Kan mellomlagres';
$lang['admin']['noncachable'] = 'Mellomlagres ikke';
$lang['admin']['copy_from'] = 'Kopier fra';
$lang['admin']['copy_to'] = 'Kopier til';
$lang['admin']['copycontent'] = 'Kopier Innholdsartikkel';
$lang['admin']['md5_function'] = 'md5 funksjon';
$lang['admin']['tempnam_function'] = 'tempnam funksjon';
$lang['admin']['register_globals'] = 'PHP register_globals ';
$lang['admin']['output_buffering'] = 'PHP output_buffering ';
$lang['admin']['disable_functions'] = 'disable_functions i PHP';
$lang['admin']['xml_function'] = 'Basic XML (expat) st&oslash;tte';
$lang['admin']['magic_quotes_gpc'] = 'Magic quotes for Get/Post/Cookie ';
$lang['admin']['magic_quotes_gpc_on'] = 'apostrof(Single-quote), g&aring;se&oslash;yne(double quote) og backslash blir beskyttet automatisk. Du kan f&aring; problemer ved lagring av maler';
$lang['admin']['magic_quotes_runtime'] = 'Magic quotes er aktivert';
$lang['admin']['magic_quotes_runtime_on'] = 'De fleste funksjoner som returnerer data vill ha g&aring;se&oslash;yne beskyttet med backslash. Du kan f&aring; problemer med dette';
$lang['admin']['file_get_contents'] = 'Test file_get_contents ';
$lang['admin']['check_ini_set'] = 'Test ini_set ';
$lang['admin']['check_ini_set_off'] = 'Du kan ha problemer med noen funksjoner uten denne funksjonaliteten. Denne testen kan feile om safe_mode er aktivert';
$lang['admin']['file_uploads'] = 'Filopplasting';
$lang['admin']['test_remote_url'] = 'Test for fjern-URL';
$lang['admin']['test_remote_url_failed'] = 'Du vil trolig ikke kunne &aring;pne en fil p&aring; en annen webserver.';
$lang['admin']['test_allow_url_fopen_failed'] = 'N&aring;r allow url fopen er sl&aring;tt av vil du ikke f&aring; tilgang til URL objekt som fil ved &aring; benytte ftp eller http protokollen.';
$lang['admin']['connection_error'] = 'Utg&aring;ende http tilkoblinger ser ikke ut til &aring; virke! Er det en brannmur eller noe ACL for eksterne tilkoblinger aktivt? Dette vil resultere i at Module Manager, og potensielt annen funksjonalitet feiler.';
$lang['admin']['remote_connection_timeout'] = 'Tilkoblingen fikk tidsavbrudd!';
$lang['admin']['search_string_find'] = 'Tilkobling ok!';
$lang['admin']['connection_failed'] = 'Tilkobling feilet!';
$lang['admin']['remote_response_ok'] = 'Fjernrespons: ok!';
$lang['admin']['remote_response_404'] = 'Fjernrespons: ikke funnet!';
$lang['admin']['remote_response_error'] = 'Fjernrespons: feil!';
$lang['admin']['notifications_to_handle'] = 'Du har <b>%d</b> varsler du ikke har tatt stilling til';
$lang['admin']['notification_to_handle'] = 'Du har <b>%d</b> varsel du ikke har tatt stilling til';
$lang['admin']['notifications'] = 'Varsler';
$lang['admin']['dashboard'] = 'Vis Dashboard';
$lang['admin']['ignorenotificationsfrommodules'] = 'Ignorer varsler fra disse modulene';
$lang['admin']['admin_enablenotifications'] = 'Tillat brukere &aring; se varsler p&aring; adminsidene<br/><em>(varsler vil bli vist p&aring; alle administrasjonsider)</em>';
$lang['admin']['enablenotifications'] = 'Sl&aring; p&aring; brukervarsler i administrasjonseksjonen.';
$lang['admin']['test_check_open_basedir_failed'] = 'Open basedir restriksjoner er i effekt. Du kan f&aring;r problemer med noe tilleggfunksjonalitet med denne restriksjonen.';
$lang['admin']['config_writable'] = 'config.php er skrivbar. Det er mer sikkert om du endrer rettigheten til skirvebeskyttet';
$lang['admin']['caution'] = 'Forsiktig';
$lang['admin']['create_dir_and_file'] = 'Tester om httpd prosessen kan opprette en fil inne i katalogen den opprettet';
$lang['admin']['os_session_save_path'] = 'Ingen test p&aring; grunn av OS sti';
$lang['admin']['unlimited'] = 'Ubegrenset';
$lang['admin']['open_basedir'] = 'PHP Open Basedir ';
$lang['admin']['open_basedir_active'] = 'Ingen test da open basedir er aktiv';
$lang['admin']['invalid'] = 'Ugyldig';
$lang['admin']['checksum_passed'] = 'Alle sjekksummer passer med de i den opplastede filen';
$lang['admin']['error_retrieving_file_list'] = 'Feil ved henting av fillisten';
$lang['admin']['files_checksum_failed'] = 'Kunne ikke kj&oslash;re sjekksummer p&aring; filer';
$lang['admin']['failure'] = 'Feilet';
$lang['admin']['help_function_process_pagedata'] = '<h3>Hva gj&oslash;r denne?</h3>
<p>Denne plugin vil prosessere data i &quot;Smarty data eller logikk...&quot;(pagedata) blokken for innholdsider gjennom smarty. Dette tillater deg &aring; spesifisere sidespesifikk data til smarty uten &aring; endre malen for hver side.</p>
<h3>Hvordan benytter jeg denne?</h3>
<ol>
  <li>Sett inn smarty assign variabler og annen smarty logikk i &quot;Smarty data eller logikk...&quot;(pagedata) feltet for noen av dine innholdsider.</li>
  <li>Sett inn <code>{process_pagedata}</code> taggen helt p&aring; toppen av din sidemal.</li>
</ol>
<br/>
<h3>Hvilke parametere tar denne?</h3>
<p>Ingen n&aring;</p>';
$lang['admin']['page_metadata'] = 'Sidespesifikk Metadata';
$lang['admin']['pagedata_codeblock'] = 'Smarty data eller logikk som er spesifikk for denne siden';
$lang['admin']['error_uploadproblem'] = 'En feil oppstod under opplastingen';
$lang['admin']['error_nofileuploaded'] = 'Ingen fil har blitt lastet opp';
$lang['admin']['files_failed'] = 'Filer feilet md5sum testen';
$lang['admin']['files_not_found'] = 'Filer ble ikke funnet';
$lang['admin']['info_generate_cksum_file'] = 'Denne funksjon vil tillate deg &aring; generere en checksum fil og lagre den p&aring; din lokale datamaskin for senere gyldighetstest. Dette b&oslash;r gj&oslash;res rett f&oslash;r du ruller ut nettstedet, og/eller etter alle oppgraderinger eller st&oslash;rre endringer.';
$lang['admin']['info_validation'] = 'Denne funksjon vil sammenligne testsummer funnet i den opplastede filen med filene i n&aring;v&aelig;rende installasjon. Dette kan hjelpe med &aring; finne problemer med opplasting, eller eksakt hvilke filer som er endret om ditt system er hakket. En sjekksumfil blir generert for hver utgivelse av CMS Made simple fra versjon 1.4 og utover.';
$lang['admin']['download_cksum_file'] = 'Last ned Checksum fil';
$lang['admin']['perform_validation'] = 'Utf&oslash;r gyldighetstest';
$lang['admin']['upload_cksum_file'] = 'Last opp Checksum fil';
$lang['admin']['checksumdescription'] = 'Gyldighetstest integriteten for CMS filer ved &aring; sammenligne dem mot kjente checksums';
$lang['admin']['system_verification'] = 'System verifisering';
$lang['admin']['extra1'] = 'Ekstra sideattributt 1';
$lang['admin']['extra2'] = 'Ekstra sideattributt 2';
$lang['admin']['extra3'] = 'Ekstra sideattributt 3';
$lang['admin']['start_upgrade_process'] = 'Start oppgraderingen';
$lang['admin']['warning_upgrade'] = '<em><strong>Advarsel:</strong></em> CMSMS har behov for en oppgradering.';
$lang['admin']['warning_upgrade_info1'] = 'Du kj&oslash;rer n&aring; database skjema versjon %s. og du trenger &aring; oppgradere til versjon %s';
$lang['admin']['warning_upgrade_info2'] = 'Vennligst klikk p&aring; f&oslash;lgende lenke: %s.';
$lang['admin']['warning_mail_settings'] = 'Dine e-postinnstillinger har ikke blitt konfigurert enn&aring;. Dette kan medf&oslash;re at ditt nettsted ikke kan sende epost. Du b&oslash;r g&aring; til <a href="%s">Utvidelser >> CMSMailer</a> og konfigurere e-postinnstillingene med n&oslash;dvendig informasjon. Du b&oslash;r ha f&aring;tt dette fra din nettstedtilbyder.';
$lang['admin']['view_page'] = 'Vis denne siden i et nytt vindu';
$lang['admin']['off'] = 'Av';
$lang['admin']['on'] = 'P&aring;';
$lang['admin']['invalid_test'] = 'Ugyldig testparameter verdi!';
$lang['admin']['copy_paste_forum'] = 'Klikk her for &aring; klipp/lim inn i et foruminnlegg';
$lang['admin']['permission_information'] = 'Rettighetsinformasjon';
$lang['admin']['server_os'] = 'Servers operativsystem';
$lang['admin']['server_api'] = 'Server API ';
$lang['admin']['server_software'] = 'Server programvare';
$lang['admin']['server_information'] = 'Serverinformasjon';
$lang['admin']['session_save_path'] = 'Session Save Path ';
$lang['admin']['max_execution_time'] = 'Maximum Execution Time ';
$lang['admin']['gd_version'] = 'GD versjon';
$lang['admin']['upload_max_filesize'] = 'Maksimum &#039;Upload Size&#039;';
$lang['admin']['post_max_size'] = 'Maksimum &#039;Post Size&#039;';
$lang['admin']['memory_limit'] = 'Effektiv PHP Memory Limit ';
$lang['admin']['server_db_type'] = 'Server Database ';
$lang['admin']['server_db_version'] = 'Server Database versjon';
$lang['admin']['phpversion'] = 'N&aring;v&aelig;rende PHP versjon';
$lang['admin']['safe_mode'] = 'PHP Safe Mode ';
$lang['admin']['php_information'] = 'PHP informasjon';
$lang['admin']['cms_install_information'] = 'CMS Installasjonsinformasjon';
$lang['admin']['cms_version'] = 'CMS versjon';
$lang['admin']['installed_modules'] = 'Installerte moduler';
$lang['admin']['config_information'] = 'Konfigurasjons informasjon';
$lang['admin']['systeminfo_copy_paste'] = 'Vennligst kopier og lim inn f&oslash;lgende valgte tekst i ditt forum innlegg';
$lang['admin']['help_systeminformation'] = 'Informasjonen vist nedenfor er samlet inn fra en rekke steder og samlet her slik at du enkelt skal finne informasjonen du trenger n&aring;r du fors&oslash;ker &aring; diagnostisere et problem eller sp&oslash;r om hjelp med din CMS Made Simple&amp;trade; installasjon.';
$lang['admin']['systeminfo'] = 'System informasjon';
$lang['admin']['systeminfodescription'] = 'Vis forskjellig informasjon om ditt system som kan v&aelig;re nyttig ved diagnostisering av problemer';
$lang['admin']['welcome_user'] = 'Logget inn som';
$lang['admin']['itsbeensincelogin'] = 'Det har g&aring;tt %s siden din forrige innlogging';
$lang['admin']['days'] = 'dager';
$lang['admin']['day'] = 'dag';
$lang['admin']['hours'] = 'timer';
$lang['admin']['hour'] = 'Time';
$lang['admin']['minutes'] = 'minutter';
$lang['admin']['minute'] = 'minutt';
$lang['admin']['help_css_max_age'] = 'Denne parameter b&oslash;r settes relativt h&oslash;yt for statiske nettsted, og b&oslash;r settes til 0 under utvikling av nettstedet';
$lang['admin']['css_max_age'] = 'Maksimum tid (sekunder) stilark kan f&aring; lov &aring; bli mellomlagret i nettleseren';
$lang['admin']['error'] = 'Feil';
$lang['admin']['new_version_available'] = '<em>Obs:</em> En ny versjon av CMS Made Simple er tilgjengelig. Vennligst meld ifra til din CMS Made Simple administrator.';
$lang['admin']['master_admintheme'] = 'Standard administrasjons tema (for innloggingssiden og for nye brukerkontoer)';
$lang['admin']['contenttype_separator'] = 'Adskiller';
$lang['admin']['contenttype_sectionheader'] = 'Seksjonshode';
$lang['admin']['contenttype_content'] = 'Innhold';
$lang['admin']['contenttype_pagelink'] = 'Intern sidelenke';
$lang['admin']['nogcbwysiwyg'] = 'Ikke tillat WYSIWYG redigerer p&aring; Globale innholdsblokker(GCB)';
$lang['admin']['destination_page'] = 'M&aring;l side';
$lang['admin']['additional_params'] = 'Tilleggsparametere';
$lang['admin']['help_function_current_date'] = '        <h3 style=&quot;color: red;&quot;>Deprecated</h3>
	 <p>use <code>{$smarty.now|cms_date_format}</code></p>
<h3>Hva gj&oslash;r denne?</h3>
	<p>Skriver ut n&aring;v&aelig;rende dato og tid. Om ingen format er satt, vil formatet bli en standard omtrent som dette &#039;Jan 01, 2004&#039;.</p>
<h3>Hvordan bruker jeg denne?</h3>
	<p>Bare sett inn taggen i din mal/side som dette: <code>{current_date format=&quot;%A %d-%b-%y %T %Z&quot;}</code></p>
	<h3>Hvilke parametere tar denne?</h3>
	<ul>
		<li><em>(optional)</em>format - Dato/Tid format ved &aring; bruke parametere fra php&#039;s strftime funksjon.  Se <a href="http://php.net/strftime" target="_blank">her</a> for en liste med parametere og annen informasjon.</li>
		<li><em>(optional)</em>ucword - Om sann skriv f&oslash;rste bokstav i hvert ord som stor bokstav.</li>
  <li><em>(valgfri)</em> <tt>assign</tt> - Tilegn resultatet til en navnet smarty variabel.</li>
	</ul>';
$lang['admin']['help_function_valid_xhtml'] = '<h3>Hva gj&oslash;r denne?</h3>
<p>Returnerer en lenke til w3c HTML validator.</p>
<h3>Hvordan bruker jeg den?</h3>
<p>Sett ganske enkelt taggen inn i din mal/side slik: <code>{valid_xhtml}</code></p>
<h3>Hvilke parametrer tar denne?</h3>
    <ul>
	<li><em>(optional)</em> url         (string)     - URL&#039;en som bruke til validering, dersom ingen, brukes http://validator.w3.org/check/referer.</li>
	<li><em>(optional)</em> class       (string)     - Dersom satt, vil dette bli brukt som class attributt for link (a) elementet</li>
	<li><em>(optional)</em> target      (string)     - Dersom satt, vil dette bli brukt som target attributt for link (a) elementet</li>
	<li><em>(optional)</em> image       (true/false) - Dersom satt til false, vil en tekst lenke bli brukt i stedet for et bilde/ikon.</li>
	<li><em>(optional)</em> text        (string)     - Dersom satt, vil dette bli brukt som lenke tekst eller alt tekst for bildet. Standard verdi er &#039;Valid XHTML 1.0 Transitional&#039;.<br /> N&aring;r et bilde blir brukt, vil den oppgitte strengen ogs&aring; bli brukt for  bilde alt attributten (som standard, dette kan overstyres ved &aring; bruke &#039;alt&#039; parameteret).</li>
	<li><em>(optional)</em> image_class (string)     - Bare dersom &#039;image&#039; ikke er satt til false. Dersom satt, vil dette bli brukt som class attributt for bilde (img) elementet</li>
	<li><em>(optional)</em> src         (string)     - Bare dersom &#039;image&#039; ikke er satt til false. Ikonet som skal vises. Standard er http://www.w3.org/Icons/valid-xhtml10</li>
	<li><em>(optional)</em> width       (string)     - Bare dersom &#039;image&#039; ikke er satt til false. Bilde bredde. Standardverdi er 88 (Bredden p&aring; http://www.w3.org/Icons/valid-xhtml10)</li>
	<li><em>(optional)</em> height      (string)     - Bare dersom &#039;image&#039; ikke er satt til false. Bilde h&oslash;yde. Standardverdi er 31 (H&oslash;yden p&aring; http://www.w3.org/Icons/valid-xhtml10)</li>
	<li><em>(optional)</em> alt         (string)     - bare dersom &#039;image&#039; ikke er satt til false. Alternativ tekst (&#039;alt&#039; attributt) for bilde (element). Dersom ingen oppgis, vil lenke tekst bli brukt.</li>
  <li><em>(valgfri)</em> <tt>assign</tt> - Tilegn resultatet til en navnet smarty variabel.</li>
    </ul>';
$lang['admin']['help_function_valid_css'] = '<h3>Hva gj&oslash;r denne?</h3>
<p>Returnerer en lenke til w3c CSS validator.</p>
<h3>Hvordan bruker jeg den?</h3>
<p>Sett ganske enkelt taggen inn i din mal/side slik: <code>{valid_css}</code></p>
<h3>Hvilke parametrer tar denne?</h3>
    <ul>
        <li><em>(optional)</em> url         (string)     - URL&#039;en som bruke til validering, dresom ingen, brukes http://jigsaw.w3.org/css-validator/check/referer.</li>
	<li><em>(optional)</em> class       (string)     - Dersom satt, vil dette bli brukt som class attributt for link (a) elementet</li>
	<li><em>(optional)</em> target      (string)     - Dersom satt, vil dette bli brukt som target attributt for link (a) elementet</li>
	<li><em>(optional)</em> image       (true/false) - Dersom satt til false, vil en tekst lenke bli brukt i stedet for et bilde/ikon.</li>
	<li><em>(optional)</em> text        (string)     - Dersom satt, vil dette bli brukt som lenke tekst eller alt tekst for bildet. Standard verdi er &#039;Valid CSS 2.1&#039;.<br /> N&aring;r et bilde blir brukt, vil den oppgitte strengen ogs&aring; bli brukt for  bilde alt attributten (som standard, dette kan overstyres ved &aring; bruke &#039;alt&#039; parameteret).</li>
	<li><em>(optional)</em> image_class (string)     - Bare dersom &#039;image&#039; ikke er satt til false. Dersom satt, vil dette bli brukt som class attributt for bilde (img) elementet</li>
	<li><em>(optional)</em> src         (string)     - Bare dersom &#039;image&#039; ikke er satt til false. Ikonet som skal vises. Standard er http://jigsaw.w3.org/css-validator/images/vcss</li>
	<li><em>(optional)</em> width       (string)     - Bare dersom &#039;image&#039; ikke er satt til false. Bilde bredde. Standardverdi er 88 (Bredden p&aring; http://jigsaw.w3.org/css-validator/images/vcss)</li>
	<li><em>(optional)</em> height      (string)     - Bare dersom &#039;image&#039; ikke er satt til false. Bilde h&oslash;yde. Standardverdi er 31 (H&oslash;yden p&aring; http://jigsaw.w3.org/css-validator/images/vcss)</li>
	<li><em>(optional)</em> alt         (string)     - bare dersom &#039;image&#039; ikke er satt til false. Alternativ tekst (&#039;alt&#039; attributt) for bilde (element). Dersom ingen oppgis, vil lenke tekst bli brukt.</li>
  <li><em>(valgfri)</em> <tt>assign</tt> - Tilegn resultatet til en navnet smarty variabel.</li>
    </ul>';
$lang['admin']['help_function_title'] = '<h3>Hva gj&oslash;r denne?</h3>
	<p>Skriver tittelen for siden.</p>
<h3>Hvordan bruker jeg denne?</h3>
	<p>Bare sett inn taggen i malen/siden som dette: <code>{title}</code></p>
	<h3>Hvilke parametere tar denne?</h3>
	<p><em>(optional)</em> assign (string) - Tilegner(Assign) resultatet til en smarty variabel med dette navnet.</p>';
$lang['admin']['help_function_stylesheet'] = '<h3>Hva gj&oslash;r denne?</h3>

        <p><strong>Deprecated:</strong> This function is deprecated (from version 1.8) and will be removed in later versions of CMSMS.</p>

	<p>Henter inn stilark informasjonen fra systemet. Som standard, henter den inn alle stilarkene som er koblet til gjeldende mal.</p>
<h3>Hvordan bruker jeg denne?</h3>
	<p>Bare sett inn taggen i din mal/sides hode(head) seksjon som dette: <code>{stylesheet}</code></p>
	<h3>Hvilke parametere tar denne?</h3>
	<ul>
		<li><em>(optional)</em>name - I stedet for &aring; hente alle stilark tilknyttet gjeldende side s&aring; vil den hente kun en spesifikk etter navn, om det er tilknyttet gjeldende mal eller ikke.</li>
		<li><em>(optional)</em>media - Om navn er definert, vil denne tillate deg &aring; sette en annen media type for det stilarket.</li>
    <li><em>(optional)</em>templateid - Om templateid er definert, vil denne benytte stilark assosiert med den malen i stedet for n&aring;v&aelig;rende.</li>
  <li><em>(valgfri)</em> <tt>assign</tt> - Tilegn resultatet til en navnet smarty variabel.</li>
	</ul>
	</p>';
$lang['admin']['help_function_sitename'] = '<h3>Hva gj&oslash;r denne?</h3>
        <p>Viser nettstedets navn. Dette blir definert under installasjonen og kan endres i Globale innstillinger seksjonen i administrasjonskonsollet.</p>
<h3>Hvordan bruker jeg denne?</h3>
        <p>Bare sett inn taggen i din mal/side som dette: <code>{sitename}</code></p>
	<h3>Hvilke parametere tar denne?</h3>
	<p><em>(optional)</em> assign (string) - Tilegner(Assign) resultatet til en smarty variabel med dette navnet.</p>
';
$lang['admin']['help_function_search'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the Search module to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;Search&#039;}</code> you can now just use <code>{search}</code> to insert the module in a template.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{search}</code> in a template where you want the search input box to appear. For help about the Search module, please refer to the Search module help.';
$lang['admin']['help_function_root_url'] = '<h3>Hva gj&oslash;r denne?</h3>
	<p>Skriver root url lokasjonen for nettstedet.</p>
<h3>Hvordan bruker jeg denne?</h3>
	<p>Bare sett inn taggen i din mal/side som dette: <code>{root_url}</code></p>
	<h3>Hvilke parametere tar denne?</h3>
	<p>  <li><em>(valgfri)</em> <tt>assign</tt> - Tilegn resultatet til en navnet smarty variabel.</li></p>';
$lang['admin']['help_function_repeat'] = '  <h3>What does this do?</h3>
  <p>Repeats a specified sequence of characters, a specified number of times</p>
  <h3>How do I use it?</h3>
  <p>Insert a tag similar to the following into your template/page, like this: <code>{repeat string=&#039;repeat this &#039; times=&#039;3&#039;}</code>
  <h3>What parameters does it take?</h3>
  <ul>
  <li>string=&#039;text&#039; - The string to repeat</li>
  <li>times=&#039;num&#039; - The number of times to repeat it.</li>
  <li><em>(valgfri)</em> <tt>assign</tt> - Tilegn resultatet til en navnet smarty variabel.</li>
  </ul>';
$lang['admin']['help_function_recently_updated'] = '	<h3>Hva gj&oslash;r denne?</h3>
	<p>Gir ut en liste  over nylig oppdaterte sider.</p>
	<h3>Hvordan bruker jeg den?</h3>
	<p>Sett denen koden inn i din mal/side slik: <code>{recently_updated}</code></p>
	<h3>Hvilke parametere tar den?</h3>
	<ul>
											 <li><p><em>(optional)</em> number=&#039;10&#039; - Antall oppdaterte sider som skal vises.</p><p>Eksempel: <pre>{recently_updated number=&#039;15&#039;}</pre></p></li>
											 	<li><p><em>(optional)</em> leadin=&#039;Last changed&#039; - Tekst som skal vises til venstre for modifisert dato.</p><p>Eksempel: <pre>{recently_updated leadin=&#039;Sist Endret&#039;}</pre></p></li>
											 	<li><p><em>(optional)</em> showtitle=&#039;true&#039; - Viser tittel attributten dersom denne eksisterer (true|false).</p><p>Eksempel: <pre>{recently_updated showtitle=&#039;true&#039;}</pre></p></li>											 	
											 	<li><p><em>(optional)</em> css_class=&#039;some_name&#039; - omslutter et div element med denne class attributten rundt listen.</p><p>Eksempel: <pre>{recently_updated css_class=&#039;et_navn&#039;}</pre></p></li>											 	
											 		<li><p><em>(optional)</em> dateformat=&#039;d.m.y h:m&#039; - default is d.m.y h:m , use the format you whish (php -date- format)</p><p>Example: <pre>{recently_updated dateformat=&#039;D M j G:i:s T Y&#039;}</pre></p></li>											 	
  <li><em>(valgfri)</em> <tt>assign</tt> - Tilegn resultatet til en navnet smarty variabel.</li>
	</ul>
	<p>or combined:</p>
	<pre>{recently_updated number=&#039;15&#039; showtitle=&#039;false&#039; leadin=&#039;Last Change: &#039; css_class=&#039;my_changes&#039; dateformat=&#039;D M j G:i:s T Y&#039;}</pre>';
$lang['admin']['help_function_print'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the Printing module to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;Printing&#039;}</code> you can now just use <code>{print}</code> to insert the module on pages and templates.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{print}</code> on a page or in a template. For help about the Printing module, what parameters it takes etc., please refer to the Printing module help.';
$lang['admin']['login_info_title'] = 'Informasjon';
$lang['admin']['login_info'] = 'For at administrasjonskonsollet skal fungere godt b&oslash;r du p&aring;se -';
$lang['admin']['login_info_params'] = '<ol> 
  <li>At cookies er tillatt i din nettleser</li> 
  <li>At Javaskript er tillatt i din nettleser </li> 
  <li>At popup vinduer tillates for f&oslash;lgende adresse:</li> 
</ol>';
$lang['admin']['help_function_news'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the <a href="listmodules.php?action=showmodulehelp&amp;module=News">News module</a> to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;News&#039;}</code> you can now just use <code>{news}</code> to insert the module on pages and templates.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{news}</code> on a page or in a template. For help about the News module, what parameters it takes etc., please refer to the News module help.';
$lang['admin']['help_function_modified_date'] = '        <h3>Hva gj&oslash;r denne?</h3>
        <p>Skriver dato og tid siden siste ble oppdatert.  Dersom intet format oppgis, vil standardformat v&aelig;re slik som dette: &#039;Jan 01, 2004&#039;.</p>
        <h3>Hvordan bruker jeg denne?</h3>
        <p>Sett bare inn taggen i din mal/side slik: <code>{modified_date format=&quot;%A %d-%b-%y %T %Z&quot;}</code></p>
        <h3>Hvilke parametere tar den?</h3>
        <ul>
                <li><em>(optional)</em>format - Dato/Tid format med parametre fra php&#039;s strftime funksjon.  Se <a href="http://php.net/strftime" target="_blank">her</a> for parameterliste og informasjon.</li>
  <li><em>(valgfri)</em> <tt>assign</tt> - Tilegn resultatet til en navnet smarty variabel.</li>
        </ul>';
$lang['admin']['help_function_metadata'] = '<h3>Hva gj&oslash;r denne?</h3>
	<p>Viser metadata for denne siden. B&aring;de globale metadata fra globale innstillinger og metadata fra siden vil bli vist.</p>
<h3>Hvordan bruker jeg denne?</h3>
	<p>Bare sett inn taggen i din mal/side som dette: <code>{metadata}</code></p>
	<h3>Hvilke parametere tar denne?</h3>
	<ul>
		<li><em>(optional)</em>showbase (true/false) - Om satt til false(usann) vil ikke base taggen bli sendt til nettleseren. Standard er true(sann) om use_hierarchy er satt til true i config.php.</li>
  <li><em>(valgfri)</em> <tt>assign</tt> - Tilegn resultatet til en navnet smarty variabel.</li>
	</ul>';
$lang['admin']['help_function_menu_text'] = '	<h3>Hva gj&oslash;r denne?</h3>
	<p>Skriver menyteksten for siden.</p>
	<h3>Hvordan bruker jeg den?</h3>
	<p>Sett inn taggen i din mal/side slik: <code>{menu_text}</code></p>
	<h3>Hvilke parametre tar denne?</h3>
	<p>  <li><em>(valgfri)</em> <tt>assign</tt> - Tilegn resultatet til en navnet smarty variabel.</li></p>';
$lang['admin']['help_function_menu'] = '<h3>Hva gj&oslash;r denne?</h3>
	<p>Dette er bare en forenklet tagg for Menu Manager modulen for &aring; gj&oslash;re tagg syntaksen enklere. 
	I stedet for &aring; m&aring;tte benytte <code>{cms_module module=&#039;MenuManager&#039;}</code> kan du n&aring; ogs&aring; benytte <code>{menu}</code> for &aring; sette inn modulen i dine sider og maler.
	</p>
<h3>Hvordan bruker jeg denne?</h3>
	<p>Bare sett inn <code>{menu}</code> i en side eller i en mal. For hjelp med Meny bahandler(Menu Manager) modulen, hvilke parametere tar den osv., vennligst se i Menybehandler(Menu Manager) modulhjelpen.';
$lang['admin']['help_function_last_modified_by'] = '        <h3>What does this do?</h3>
        <p>Prints last person that edited this page.  If no format is given, it will default to a ID number of user .</p>
        <h3>How do I use it?</h3>
        <p>Just insert the tag into your template/page like: <code>{last_modified_by format=&quot;fullname&quot;}</code></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>format - id, username, fullname</li>
  <li><em>(valgfri)</em> <tt>assign</tt> - Tilegn resultatet til en navnet smarty variabel.</li>
        </ul>';
$lang['admin']['help_function_image'] = '  <h3>What does this do?</h3>
  <p>Creates an image tag to an image stored within your images directory</p>
  <h3>How do I use it?</h3>
  <p>Just insert the tag into your template/page like: <code>{image src=&quot;something.jpg&quot;}</code></p>
  <h3>What parameters does it take?</h3>
  <ul>
     <li><em>(required)</em>  <tt>src</tt> - Image filename within your images directory.</li>
     <li><em>(optional)</em>  <tt>width</tt> - Width of the image within the page. Defaults to true size.</li>
     <li><em>(optional)</em>  <tt>height</tt> - Height of the image within the page. Defaults to true size.</li>
     <li><em>(optional)</em>  <tt>alt</tt> - Alt text for the image -- needed for xhtml compliance. Defaults to filename.</li>
     <li><em>(optional)</em>  <tt>class</tt> - CSS class for the image.</li>
     <li><em>(optional)</em>  <tt>title</tt> - Mouse over text for the image. Defaults to Alt text.</li>
     <li><em>(optional)</em>  <tt>addtext</tt> - Additional text to put into the tag</li>
  <li><em>(valgfri)</em> <tt>assign</tt> - Tilegn resultatet til en navnet smarty variabel.</li>
  </ul>';
$lang['admin']['help_function_html_blob'] = '	<h3>Hva gj&oslash;r denne?</h3>
	<p>Vennligst sjekk hjelpen for global_content for en beskrivelse.</p>';
$lang['admin']['help_function_google_search'] = '	<h3>What does this do?</h3>
	<p>Search&#039;s your website using Google&#039;s search engine.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{google_search}</code><br>
	<br>
	Note: Google needs to have your website indexed for this to work. You can submit your website to google <a href="http://www.google.com/addurl.html">here</a>.</p>
	<h3>What if I want to change the look of the textbox or button?</h3>
	<p>The look of the textbox and button can be changed via css. The textbox is given an id of textSearch and the button is given an id of buttonSearch.</p>

	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em> domain - This tells google the website domain to search. This script tries to determine this automatically.</li>
		<li><em>(optional)</em> buttonText - The text you want to display on the search button. The default is &quot;Search Site&quot;.</li>
  <li><em>(valgfri)</em> <tt>assign</tt> - Tilegn resultatet til en navnet smarty variabel.</li>
	</ul>
	</p>';
$lang['admin']['help_function_global_content'] = '	<h3>Hva gj&oslash;r denne?</h3>
	<p>Setter inn en Global innholdblokk(global content block) i din mal eller side.</p>
	<h3>Hvordan bruker jeg denne?</h3>
	<p>Bare sett inn taggen i din mal/side som dette: <code>{global_content name=&#039;myblob&#039;}</code>, hvor navnet(name) er navnet p&aring; blokken n&aring;r den ble laget.</p>
	<h3>Hvilke parametere tar denne?</h3>
	<ul>
		<li>name - Navnet p&aring; den Globale innholdblokken)global content block) som skal vises.</li>
          <li><em>(optional)</em> assign - Navnet p&aring; smartyvariabelen som den globale innholdblokken skal tilegnes til.</li>
	</ul>';
$lang['admin']['help_function_get_template_vars'] = '	<h3>What does this do?</h3>
	<p>Dumps all the known smarty variables into your page</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{get_template_vars}</code></p>
	<h3>What parameters does it take?</h3>
	  <p><em>(valgfri)</em> <tt>assign</tt> - Tilegn resultatet til en navnet smarty variabel.</p>';
$lang['admin']['help_function_uploads_url'] = '	<h3>What does this do?</h3>
	<p>Prints the uploads url location for the site.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{uploads_url}</code></p>
	<h3>What parameters does it take?</h3>
	<p><em>(valgfri)</em> <tt>assign</tt> - Tilegn resultatet til en navnet smarty variabel.</p>';
$lang['admin']['help_function_embed'] = '	<h3>What does this do?</h3>
	<p>Enable inclusion (embeding) of any other application into the CMS. The most usual use could be a forum. 
	This implementation is using IFRAMES so older browsers can have problems. Sorry bu this is the only known way 
	that works without modifing the embeded application.</p>
	<h3>How do I use it?</h3>
        <ul>
        <li>a) Add <code>{embed header=true}</code> into the head section of your page template, or into the metadata section in the options tab of a content page.  This will ensure that the required javascript gets included.   If you insert this tag into the metadata section in the options tab of a content page you must ensure that <code>{metadata}</code> is in your page template.</li>
        <li>b) Add <code>{embed url=&quot;http://www.google.com&quot;}</code> into your page content or in the body of your page template.</li>
        </ul>
        <br/>
        <h4>Example to make the iframe larger</h4>
	<p>Add the following to your style sheet:</p>
        <pre>#myframe { height: 600px; }</pre>
        <br/>
        <h3>What parameters does it take?</h3>
        <ul>
            <li><em>(required)</em>url - the url to be included 
            <li><em>(required)</em>header=true - this will generate the header code for good resizing of the IFRAME.</li>
            <li>(optional)name - an optional name to use for the iframe (instead of myframe).<p>If this option is used, it must be used identically in both calls, i.e: {embed header=true name=foo} and {embed name=foo url=http://www.google.com} calls.</p>
        </ul>';
$lang['admin']['help_function_description'] = '	<h3>What does this do?</h3>
	<p>Prints the description (title attribute) of the page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{description}</code></p>
	<h3>What parameters does it take?</h3>
	<p><em>(valgfri)</em> <tt>assign</tt> - Tilegn resultatet til en navnet smarty variabel.</p>';
$lang['admin']['help_function_created_date'] = '        <h3>What does this do?</h3>
        <p>Prints the date and time the page was created.  If no format is given, it will default to a format similar to &#039;Jan 01, 2004&#039;.</p>
        <h3>How do I use it?</h3>
        <p>Just insert the tag into your template/page like: <code>{created_date format=&quot;%A %d-%b-%y %T %Z&quot;}</code></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>format - Date/Time format using parameters from php&#039;s strftime function.  See <a href="http://php.net/strftime" target="_blank">here</a> for a parameter list and information.</li>
  <li><em>(valgfri)</em> <tt>assign</tt> - Tilegn resultatet til en navnet smarty variabel.</li>
        </ul>';
$lang['admin']['help_function_content'] = '	<h3>Hva gj&oslash;r denne?</h3>
	<p>Dette er her innholdet for sidene dine vil bli vist. Den settes inn i malen og endres basert p&aring; n&aring;v&aelig;rende side som vises.</p>
	<h3>Hvordan bruker jeg denne?</h3>
	<p>Bare sett inn taggen i din mal som dette: <code>{content}</code>.</p>
	<p><strong>Standard blokken <code>{content}</code> er p&aring;krevd for at systemet skal fungere optimalt. (dvs. uten block-parameteren)</strong> For &aring; gi blokken en spesifikk etikett, benytt label-parameteren. Ekstra blokker kan legges til ved &aring; benytte block-parameteren.</p>
	<h3>Hvilke parametere tar denne?</h3>
	<ul>
		<li><em>(optional)</em> block - Tillater deg &aring; ha mer enn en innholdsblokk per side. N&aring;r flere innholdstagger settes inn i en mal, vil dette antall av redigeringsbokser bli vist n&aring;r siden redigeres.
<p>Eksempel:</p>
<pre>{content block=&quot;Second Content Block&quot;}</pre>
<p>N&aring;, n&aring;r du redigerer en side vil det vises et tekstomr&aring;de med navn &quot;Second Content Block&quot;.</li>
		<li><em>(optional)</em> wysiwyg (=&#039;true&#039;/&#039;false&#039;) - Om satt til &#039;false&#039;, vil en wysiwyg aldri bli brukt for redigering av denne blokken. Om satt &#039;true&#039; s&aring; vil den v&aelig;re p&aring; som vanlig. Kun gyldig n&aring;r block parameteren er brukt.</li>
		<li><em>(optional)</em> oneline (=&#039;true&#039;/&#039;false&#039;) - Om satt til &#039;true&#039;, vil kun en redigeringslinje bli vist n&aring;r du redigerer denne blokken. Om &#039;false&#039;, vil det v&aelig;re som normalt. Kun gyldig n&aring;r block parameteren er brukt.</li>
<li><em>(optional)</em> size - Kun gyldig n&aring;r oneline parameteren er benyttet. Denne valgfrie parameter tillater deg &aring; spesifisere st&oslash;rrelse p&aring; redigeringsfeltet. Standard verdien er 50.</li>
		<li><em>(optional)</em> default - Tillater deg &aring; spesifisere standard innhold for denne innholdblokken (gjelder kun ekstra innholdblokker).</li>
		<li><em>(optional) </em>label - Tillater &aring; spesifisere en etikett for visning p&aring; rediger innhold siden.</li>
		<li><em>(optional)</em> assign - Tilegner(Assigns) innholdet til en smarty parameter, som du s&aring; kan benytte i andre omr&aring;der p&aring; siden, eller benytte for &aring; teste om innhold eksisterer i den eller ikke.
<p>Eksempel p&aring; &aring; sende side innhold til en Brukerdefinert tagg(User Defined Tag/UDT) som en parameter:</p>
<pre>
         {content assign=pagecontent}
         {table_of_contents thepagecontent=&quot;$pagecontent&quot;}
</pre>
</li>
	</ul>';
$lang['admin']['help_function_contact_form'] = '  <h2>NOTE: This plugin is deprecated</h2>
  <h3>This plugin has been removed as of CMS made simple version 1.5</h3>
  <p>You can use the module FormBuilder instead.</p>';
$lang['admin']['help_function_cms_versionname'] = '	<h3>Hva gj&oslash;r denne?</h3>
	<p>Denne taggen blir benyttet for &aring; sette inn gjeldende versjonsnavn for CMSMS inn i din mal eller side. Den viser ikke noe annet enn versjonnavnet.</p>
	<h3>Hvordan benytter jeg denne?</h3>
	<p>Dett er kun en enkel tagg plugin. Du kan sette den inn i din mal eller side som dette: <code>{cms_versionname}</code>
	<h3>Hvilke parametere tar denne?</h3>
	<p><em>(valgfri)</em> <tt>assign</tt> - Tilegn resultatet til en navnet smarty variabel.</p>';
$lang['admin']['help_function_cms_version'] = '<h3>Hva gj&oslash;r denne?</h3>
	<p>Denne taggen benyttes for &aring; sette inn gjeldende versjonsnummer for CMSMS inn i din mal eller innhold. Denne viser ingenting ekstra foruten versjonsnummeret.</p>
<h3>Hvordan bruker jeg denne?</h3>
	<p>Dette er kun en grunnleggende tagg plugin. Du setter den inn i din mal eller innhold som dette: <code>{cms_version}</code>
	<h3>Hvilke parameter tar denne?</h3>
	<p>Denne tar ingen parametere.</p>';
$lang['admin']['about_function_cms_selflink'] = '		<p>Author: Ted Kulp <tedkulp@users.sf.net></p>
		<p>Version: 1.1</p>
		<p>Modified: Martin B. Vestergaard <mbv@nospam.dk></p>
		<p>Version: 1.41</p>
		<p>Modified: Russ Baldwin</p>
		<p>Version: 1.42</p>
		<p>Modified: Marcus Bointon <coolbru@users.sf.net></p>
		<p>Version: 1.43</p>
		<p>Modified: Tatu Wikman <tsw@backspace.fi></p>
		<p>Version: 1.44</p>
		<p>Modified: Hans Mogren <http://hans.bymarken.net/></p>
		<p>Version: 1.45</p>

		<p>
		Change History:<br/>
		1.46 - Fixes a problem with too many queries when using the dir=start option.<br/>
		1.45 - Added a new option for &quot;dir&quot;, &quot;up&quot;, for links to the parent page e.g. dir=&quot;up&quot; (Hans Mogren).<br />
		1.44 - Added new parameters &quot;ext&quot; and &quot;ext_info&quot; to allow external links with class=&quot;external&quot; and info text after the link, ugly hack but works thinking about rewriting this(Tatu Wikman)<br />
		1.43 - Added new parameters &quot;image&quot; and &quot;imageonly&quot; to allow attachment of images to be used for page links, either instead of or in addition to text links. (Marcus Bointon)<br />
		1.42 - Added new parameter &quot;anchorlink&quot; and a new option for &quot;dir&quot; namely, &quot;anchor&quot;, for internal page links. e.g. dir=&quot;anchor&quot; anchorlink=&quot;internal_link&quot;. (Russ)<br />
		1.41 - added new parameter &quot;href&quot; (LeisureLarry)<br />
		1.4 - fixed bug next/prev linking to non-content pages. (Thanks Teemu Koistinen for this fix)<br />
		1.3 - added option &quot;more&quot;<br />
		1.2 - by Martin B. Vestergaard
		<ul>
		<li>changed default text to Page Name (was Page Alias)</li>
		<li>added option dir=next/prev to display next or previous item in the hirachy - thanks to 100rk</li>
		<li>added option class to add a class= statement to the a-tag.</li>
		<li>added option menu to display menu-text in sted of Page Name</li>
		<li>added option lang to display link-labels in different languages</li>
		</ul>
		1.1 - Changed to new content system<br />
		1.0 - Initial release
		</p>';
$lang['admin']['help_function_cms_selflink'] = '		<h3>What does this do?</h3>
		<p>Creates a link to another CMSMS content page inside your template or content. Can also be used for external links with the ext parameter.</p>
		<h3>How do I use it?</h3>
		<p>Just insert the tag into your template/page like: <code>{cms_selflink page=&quot;1&quot;}</code> or  <code>{cms_selflink page=&quot;alias&quot;}</code></p>
		<h3>What parameters does it take?</h3>
		<ul>
		<li><em>(optional)</em> <tt>page</tt> - Page ID or alias to link to.</li>
		<li><em>(optional)</em> <tt>dir anchor (internal links)</tt> - New option for an internal page link. If this is used then <tt>anchorlink</tt> should be set to your link. </li> <!-- Russ - 25-04-2006 -->
		<li><em>(optional)</em> <tt>anchorlink</tt> - New paramater for an internal page link. If this is used then <tt>dir =&quot;anchor&quot;</tt> should also be set. No need to add the #, because it is added automatically.</li> <!-- Russ - 25-04-2006 -->
		<li><em>(optional)</em> <tt>urlparam</tt> - Specify additional parameters to the URL.  <strong>Do not use this in conjunction with the <em>anchorlink</em> parameter</em></strong>
		<li><em>(optional)</em> <tt>tabindex =&quot;a value&quot;</tt> - Set a tabindex for the link.</li> <!-- Russ - 22-06-2005 -->
		<li><em>(optional)</em> <tt>dir start/next/prev/up (previous)</tt> - Links to the default start page or the next or previous page, or the parent page (up). If this is used <tt>page</tt> should not be set.</li> <!-- mbv - 21-06-2005 -->
		</ul>
		<strong>Note!</strong> Only one of the above may be used in the same cms_selflink statement!!
		<ul>
		<li><em>(optional)</em> <tt>text</tt> - Text to show for the link.  If not given, the Page Name is used instead.</li>
		<li><em>(optional)</em> <tt>menu 1/0</tt> - If 1 the Menu Text is used for the link text instead of the Page Name</li> <!-- mbv - 21-06-2005 -->
		<li><em>(optional)</em> <tt>target</tt> - Optional target for the a link to point to.  Useful for frame and javascript situations.</li>
		<li><em>(optional)</em> <tt>class</tt> - Class for the &amp;lt;a&amp;gt; link. Useful for styling the link.</li> <!-- mbv - 21-06-2005 -->
		<li><em>(optional)</em> <tt>lang</tt> - Display link-labels  (&quot;Next Page&quot;/&quot;Previous Page&quot;) in different languages (0 for no label.) Danish (dk), English (en) or French (fr), for now.</li> <!-- mbv - 21-06-2005 -->
		<li><em>(optional)</em> <tt>id</tt> - Optional css_id for the &amp;lt;a&amp;gt; link.</li> <!-- mbv - 29-06-2005 -->
		<li><em>(optional)</em> <tt>more</tt> - place additional options inside the &amp;lt;a&amp;gt; link.</li> <!-- mbv - 29-06-2005 -->
		<li><em>(optional)</em> <tt>label</tt> - Label to use in with the link if applicable.</li>
		<li><em>(optional)</em> <tt>label_side left/right</tt> - Side of link to place the label (defaults to &quot;left&quot;).</li>
		<li><em>(optional)</em> <tt>title</tt> - Text to use in the title attribute.  If none is given, then the title of the page will be used for the title.</li>
		<li><em>(optional)</em> <tt>rellink 1/0</tt> - Make a relational link for accessible navigation.  Only works if the dir parameter is set and should only go in the head section of a template.</li>
		<li><em>(optional)</em> <tt>href</tt> - If href is used only the href value is generated (no other parameters possible). <strong>Example:</strong> &amp;lt;a href=&amp;quot;{cms_selflink href=&amp;quot;alias&amp;quot;}&amp;quot;&amp;gt;&amp;lt;img src=&amp;quot;&amp;quot;&amp;gt;&amp;lt;/a&amp;gt;</li>
		<li><em>(optional)</em> <tt>image</tt> - A url of an image to use in the link. <strong>Example:</strong> {cms_selflink dir=&quot;next&quot; image=&quot;next.png&quot; text=&quot;Next&quot;}</li>
		<li><em>(optional)</em> <tt>alt</tt> - Alternative text to be used with image (alt=&quot;&quot; will be used if no alt parameter is given).</li>
		<li><em>(optional)</em> <tt>imageonly</tt> - If using an image, whether to suppress display of text links. If you want no text in the link at all, also set lang=0 to suppress the label. <b>Example:</b> {cms_selflink dir=&quot;next&quot; image=&quot;next.png&quot; text=&quot;Next&quot; imageonly=1}</li>
		<li><em>(optional)</em> <tt>ext</tt> - For external links, will add class=&#039;&#039; external and info text. <strong>warning:</strong> only text, target and title parameters are compatible with this parameter</li>
		<li><em>(optional)</em> <tt>ext_info</tt> - Used together with &quot;ext&quot; defaults to (external link)</li>
		<li><em>(optional)</em> <tt>ext_info</tt> - Used together with &quot;ext&amp;&quot; defaults to (external link).</li>
        <li><em>(optional)</em> <tt>assign</tt> - Assign the results to the named smarty variable.</li>
		</ul>';
$lang['admin']['about_function_cms_module'] = '	<p>Author: Ted Kulp<tedkulp@users.sf.net></p>
	<p>Version: 1.0</p>
	<p>
	Change History:<br/>
	None
	</p>';
$lang['admin']['help_function_cms_module'] = '	<h3>What does this do?</h3>
	<p>This tag is used to insert modules into your templates and pages.  If a module is created to be used as a tag plugin (check it&#039;s help for details), then you should be able to insert it with this tag.</p>
	<h3>How do I use it?</h3>
	<p>It&#039;s just a basic tag plugin.  You would insert it into your template or page like so: <code>{cms_module module=&quot;somemodulename&quot;}</code>
	<h3>What parameters does it take?</h3>
	<p>There is only one required parameter.  All other parameters are passed on to the module.</p>
	<ul>
		<li>module - Name of the module to insert.  This is not case sensitive.</li>
	</ul>';
$lang['admin']['about_function_breadcrumbs'] = '<p>Author: Marcus Deglos <<a href="mailto:md@zioncore.com">md@zioncore.com</a>></p>
<p>Version: 1.7</p>
<p>
Change History:<br/>
1.1 - Modified to use new content rewrite (wishy)<br />
1.2 - Added parameters: delimiter, initial, and root (arl)<br />
1.3 - Added parameter: classid (tdh / perl4ever)<br />
1.4 - Added parameter currentclassid and fixed some bugs (arl)<br />
1.5 - Modified to use new hierarchy manager<br />
1.6 - Modified to skip any parents that are marked to be &quot;not shown in menu&quot; except for root<br />
1.7 - Added root_url parameter (elijahlofgren)<br />
</p>';
$lang['admin']['help_function_breadcrumbs'] = '<h3>Hva gj&oslash;r denne?</h3>
<p>Skriver en br&oslash;dsmule sti(breadcrumb trail) .</p>
<h3>Hvordan benytter jeg denne?</h3>
<p>Bare sett inn taggen i din mal/side som dette: <code>{breadcrumbs}</code></p>
<h3>Hvilke parametere tar denne?</h3>
<p>
<ul>
<li><em>(optional)</em> <tt>delimiter</tt> - Tekst for &aring; separere oppf&oslash;ringer i listen (standard er &quot;&amp;gt;&amp;gt;&quot;).</li>
<li><em>(optional)</em> <tt>initial</tt> - 1/0 Om satt til 1 startes br&oslash;dsmulene med en adskiller (standard 0).</li>
<li><em>(optional)</em> <tt>root</tt> - Side alias for en side du vil  alltid skal v&aelig;re f&oslash;rste side i listen. Kan benyttes for &aring; gj&oslash;re en side (f.eks. f&oslash;rstesiden) til &aring; synes &aring; v&aelig;re roten til alt selv om den ikke er det.</li>
<li><em>(optional)</em> <tt>root_url</tt> - Overstyr URL for rot siden. Nyttig for &aring; gj&oslash;re linken til &aring; v&aelig;re &#039;/&#039; i stedet for &#039;/home/&#039;. Dette krever at rot siden er satt som standardside.</li>
<li><em>(optional)</em> <tt>classid</tt> - CSS klasse for ikke-n&aring;v&aelig;rende(non current) side navn, f.eks. de f&oslash;rste n-1 sider i listen. Om navnet er en lenke vil den legges til &amp;lt;a href&amp;gt; taggene, ellers legges den til &amp;lt;span&amp;gt; taggene.</li>
<li><em>(optional)</em> <tt>currentclassid</tt> - CSS klasse for &amp;lt;span&amp;gt; tagg omsluttende n&aring;v&aelig;rende(current) sidenavn.</li>
<li><em>(optional)</em> <tt>starttext</tt> - Tekst som skal legges til foran br&oslash;dsmule(breadcrumbs) listen, noe lignende dette &quot;Du er n&aring; her&quot;.</li>
  <li><em>(valgfri)</em> <tt>assign</tt> - Tilegn resultatet til en navnet smarty variabel.</li>
</ul>
</p>';
$lang['admin']['about_function_anchor'] = '	<p>Author: Ted Kulp<tedkulp@users.sf.net></p>
	<p>Version: 1.1</p>
	<p>
	Change History:<br/>
	<strong>Update to version 1.1 from 1.0</strong> <em>2006/07/19</em><br/>
	Russ added the means to insert a title, a tabindex and a class for the anchor link. Westis added accesskey and changed parameter names to not include &#039;anchorlink&#039;.<br/>
	</hr>
	</p>';
$lang['admin']['help_function_anchor'] = '	<h3>What does this do?</h3>
	<p>Makes a proper anchor link.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{anchor anchor=&#039;here&#039; text=&#039;Scroll Down&#039;}</code></p>
	<h3>What parameters does it take?</h3>
	<p>
	<ul>
	<li><tt>anchor</tt> - Where we are linking to.  The part after the #.</li>
	<li><tt>text</tt> - The text to display in the link.</li>
	<li><tt>class</tt> - The class for the link, if any</li>
	<li><tt>title</tt> - The title to display for the link, if any.</li>
	<li><tt>tabindex</tt> - The numeric tabindex for the link, if any.</li>
	<li><tt>accesskey</tt> - The accesskey for the link, if any.</li>
	<li><em>(optional)</em> <tt>onlyhref</tt> - Only display the href and not the entire link. No other options will work</li>
  <li><em>(valgfri)</em> <tt>assign</tt> - Tilegn resultatet til en navnet smarty variabel.</li>
	</ul>
	</p>';
$lang['admin']['help_function_site_mapper'] = '<h3>What does this do?</h3>
  <p>This is actually just a wrapper tag for the Menu Manager module to make the tag syntax easier, and to simplify creating a sitemap.</p>
<h3>How do I use it?</h3>
  <p>Just put <code>{site_mapper}</code> on a page or in a template. For help about the Menu Manager module, what parameters it takes etc., please refer to the Menu Manager module help.</p>
  <p>By default, if no template option is specified the minimal_menu.tpl file will be used.</p>
  <p>Any parameters used in the tag are available in the menumanager template as <code>{$menuparams.paramname}</code></p>';
$lang['admin']['help_function_redirect_url'] = '<h3>Hva gj&oslash;r denne?</h3>
  <p>Denne plugin tillater deg &aring; enkelt omdirigere til en spesifikk url. Den er hendig inne i en smarty conditional logikk (for eksempel, omdiriger til en splash side om nettstedet enn&aring; ikke er oppe og kj&oslash;rer).</p>
<h3>Hvordan bruker jeg denne?</h3>
<p>Du rett og slett setter denne taggen inn i din side eller mal: <code>{redirect_url urle=&#039;www.cmsmadesimple.org&#039;}</code></p>';
$lang['admin']['help_function_redirect_page'] = '<h3>Hva gj&oslash;r denne?</h3>
 <p>Denne plugin tillater deg &aring; lett omdirigere til en annen side. Dette er nyttig inn ei en smarty conditional logikk (for eksempel: omdiriger til en innloggingside om brukeren ikke er innlogget.)</p>
<h3>Hvordan bruker jeg denne?</h3>
<p>Du setter rett og slett inn denne taggen i din side eller mal: <code>{redirect_page page=&#039;some-page-alias&#039;}</code></p>';
$lang['admin']['help_function_cms_jquery'] = '<h3>What does this do?</h3>
 <p>This plugin allows you output the javascript liberies and plugins used from the admin.</p>
<h3>How do I use it?</h3>
<p>Simply insert this tage into your page or template: <code>{cms_jquery}</code></p>

<h3>Sample</h3>
<pre><code>{cms_jquery cdn=true exclude=&#039;jquery.ui.nestedSortable-1.3.4.js&#039; append=&#039;uploads/NCleanBlue/js/ie6fix.js&#039;}</code></pre>
<h4><em>Outputs</em></h4>
<pre><code><script type=&quot;text/javascript&quot; src=&quot;https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js&quot;></script>
<script type=&quot;text/javascript&quot; src=&quot;https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.min.js&quot;></script>
<script type=&quot;text/javascript&quot; src=&quot;http://localhost/1.10.x/lib/jquery/js/jquery.json-2.2.js&quot;></script>
<script type=&quot;text/javascript&quot; src=&quot;uploads/NCleanBlue/js/ie6fix.js&quot;></script>
</code></pre>

<h3><em>Included Defaults</em></h3>
<ul>
	<li><tt>jQuery</tt><em>(1.6.2)</em> - jquery-1.6.2.min.js</li>
	<li><tt>jQuery UI</tt><em>(1.8.14)</em> - jquery-ui-1.8.14.custom.min.js</li>
	<li><tt>nestedSortable</tt>(1.3.4) - jquery.ui.nestedSortable-1.3.4.js</li>
	<li><tt>jQuery json</tt><em>(2.2)</em> - jquery/js/jquery.json-2.2.js</li>
</ul>
    
<h3>What parameters does it take?</h3>
<ul>
	<li><em>(optional) </em><tt>exclude</tt> - use comma seperated value(CSV) list of scripts you would like to exclude. <code>&#039;jquery.ui.nestedSortable.js,jquery.json-2.2.js&#039;</code></li>
	<li><em>(optional) </em><tt>append</tt> - use comma seperated value(CSV) list of script paths you would like to append. <code>&#039;/uploade/jquery.ui.nestedSortable.js,http://code.jquery.com/jquery-1.6.2.min.js&#039;</code></li>
	<li><em>(optional) </em><tt>cdn</tt> - use to save the output in a smarty assignment.</li>
	<li><em>(optional)</em> <tt>assign</tt> - Assign the results to the named smarty variable.</li>
	</ul>

';
$lang['admin']['of'] = 'av';
$lang['admin']['first'] = 'F&oslash;rste';
$lang['admin']['last'] = 'Siste';
$lang['admin']['adminspecialgroup'] = 'Advarsel: Medlemmer av denne brukergruppen har automatisk alle rettigheter';
$lang['admin']['disablesafemodewarning'] = 'Sl&aring; av Safe_mode advarsel i adminpanelet';
$lang['admin']['date_format_string'] = 'Dato formatstreng';
$lang['admin']['date_format_string_help'] = '<em>strftime</em> formattert date formatstreng. Fors&oslash;k &aring; google etter &#039;strftime&#039;';
$lang['admin']['last_modified_at'] = 'Sist endret den';
$lang['admin']['last_modified_by'] = 'Sist endret av';
$lang['admin']['read'] = 'Lese';
$lang['admin']['write'] = 'Skrive';
$lang['admin']['execute'] = 'Utf&oslash;re';
$lang['admin']['group'] = 'Gruppe';
$lang['admin']['other'] = 'Annet';
$lang['admin']['event_desc_moduleupgraded'] = 'Sendt etter en modul er oppgradert';
$lang['admin']['event_help_moduleupgraded'] = '<p>Sendt etter en module er oppgradert.</p>';
$lang['admin']['event_desc_moduleinstalled'] = 'Sendt etter en modul er installert';
$lang['admin']['event_help_moduleinstalled'] = '<p>Sendt etter en module er installert.</p>';
$lang['admin']['event_desc_moduleuninstalled'] = 'Sendt etter en modul er avinstallert';
$lang['admin']['event_help_moduleuninstalled'] = '<p>Sendt etter en modul er avinstallert.</p>';
$lang['admin']['event_desc_edituserdefinedtagpost'] = 'Sendt etter en brukerdefinert tagg er oppdatert';
$lang['admin']['event_help_edituserdefinedtagpost'] = '<p>Sendt etter en brukerdefinert tagg er oppdatert.</p>';
$lang['admin']['event_desc_edituserdefinedtagpre'] = 'Sendt f&oslash;r oppdatering av brukerdefinert tagg';
$lang['admin']['event_help_edituserdefinedtagpre'] = '<p>Sendt f&oslash;r oppdatering av brukerdefinert tagg.</p>';
$lang['admin']['event_desc_deleteuserdefinedtagpre'] = 'Sendt f&oslash;r sletting av en brukerdefinert tagg';
$lang['admin']['event_help_deleteuserdefinedtagpre'] = '<p>Sendt f&oslash;r sletting av en brukerdefinert tagg.</p>';
$lang['admin']['event_desc_deleteuserdefinedtagpost'] = 'Sendt etter en brukerdefinert tagg er slettet';
$lang['admin']['event_help_deleteuserdefinedtagpost'] = '<p>Sendt etter en brukerdefinert tagg er slettet.</p>';
$lang['admin']['event_desc_adduserdefinedtagpost'] = 'Sendt etter en brukerdefinert tagg er satt inn';
$lang['admin']['event_help_adduserdefinedtagpre'] = '<p>Sendt etter en brukerdefinert tagg er satt inn.</p>';
$lang['admin']['event_desc_adduserdefinedtagpre'] = 'Sendt f&oslash;r en brukerdefinert tagg blir satt inn';
$lang['admin']['event_help_adduserdefinedtagpost'] = '<p>Sendt f&oslash;r en brukerdefinert tagg blir satt inn.</p>';
$lang['admin']['global_umask'] = 'Fil opprettelse maske (umask)';
$lang['admin']['errorcantcreatefile'] = 'Kunne ikke opprette fil (rettighetsproblem?)';
$lang['admin']['errormoduleversionincompatible'] = 'Modulen er ikke kompatibel med denne CMS versjonen';
$lang['admin']['errormodulenotloaded'] = 'Intern feil, modulen har ikke blitt opprettet';
$lang['admin']['errormodulenotfound'] = 'Intern feil, kunne ikke finne eksemplaret av denne modulen';
$lang['admin']['errorinstallfailed'] = 'Installasjon av modulen feilet';
$lang['admin']['errormodulewontload'] = 'Problem med &aring; finne en tilgjengelig modul';
$lang['admin']['frontendlang'] = 'Standard spr&aring;k for frontend';
$lang['admin']['info_edituser_password'] = 'Endre dette feltet for &aring; endre brukerens passord';
$lang['admin']['info_edituser_passwordagain'] = 'Endre dette feltet for &aring; endre brukerens passord';
$lang['admin']['originator'] = 'Opprinnelse';
$lang['admin']['module_name'] = 'Modulnavn';
$lang['admin']['event_name'] = 'Hendelsesnavn';
$lang['admin']['event_description'] = 'Hendelsesbeskrivelse';
$lang['admin']['error_delete_default_parent'] = 'Du kan ikke slette foreldren til standardsiden.';
$lang['admin']['jsdisabled'] = 'Beklager, denne funksjonen krever at du tillater Javascript i din nettleser.';
$lang['admin']['order'] = 'Sortering';
$lang['admin']['reorderpages'] = 'Omsorter sider';
$lang['admin']['reorder'] = 'Omsorter';
$lang['admin']['page_reordered'] = 'Siden ble omsortert';
$lang['admin']['pages_reordered'] = 'Sidene ble omsortert';
$lang['admin']['sibling_duplicate_order'] = 'To s&oslash;sken-sider kan ikke ha den samme posisjon. Sidene ble ikke omsortert.';
$lang['admin']['no_orders_changed'] = 'Du valgte &aring; sortere sider p&aring; ny, men du har ikke endret rekkef&oslash;lge p&aring; dem. Sidene ble derfor ikke sortert p&aring; nytt.';
$lang['admin']['order_too_small'] = 'En sideposisjon kan ikke v&aelig;re null. Sidene ble ikke omsortert.';
$lang['admin']['order_too_large'] = 'En sideposisjon kan ikke v&aelig;re st&oslash;rre enn antall sider p&aring; samme niv&aring;. Sidene ble ikke sortert p&aring; ny.';
$lang['admin']['user_tag'] = 'Brukerdefinert tag';
$lang['admin']['add'] = 'Legg til';
$lang['admin']['CSS'] = 'CSS/stilsett';
$lang['admin']['about'] = 'Om';
$lang['admin']['action'] = 'Aktivitet';
$lang['admin']['actionstatus'] = 'Aktivitet/Status';
$lang['admin']['active'] = 'Aktiv';
$lang['admin']['addcontent'] = 'Legg til innhold';
$lang['admin']['cantremove'] = 'Kan ikke fjerne';
$lang['admin']['changepermissions'] = 'Endre rettigheter';
$lang['admin']['changepermissionsconfirm'] = 'V&AElig;R FORSIKTIG\n\nDenne handlingen vil pr&oslash;ve &aring; sikre at alle filene som utgj&oslash;r denne modulen er skrivbare for webserveren..\nEr du sikker p&aring; du vil fortsette?';
$lang['admin']['contentadded'] = 'Innholdet ble lagt til databasen.';
$lang['admin']['contentupdated'] = 'Innholdet ble oppdatert.';
$lang['admin']['contentdeleted'] = 'Innholdet ble vellykket fjernet fra databasen.';
$lang['admin']['success'] = 'Vellykket';
$lang['admin']['addcss'] = 'Legg til CSS/stilsett';
$lang['admin']['addgroup'] = 'Legg til gruppe';
$lang['admin']['additionaleditors'] = '&Oslash;vrige redigerere';
$lang['admin']['addtemplate'] = 'Legg til mal';
$lang['admin']['adduser'] = 'Legg til bruker';
$lang['admin']['addusertag'] = 'Legg til brukerdefinert tagg';
$lang['admin']['adminaccess'] = 'Tillatelse til &aring; logge inn til admin';
$lang['admin']['adminlog'] = 'Admin logg';
$lang['admin']['adminlogcleared'] = 'Admin loggen ble t&oslash;mt';
$lang['admin']['adminlogempty'] = 'Admin loggen er tom';
$lang['admin']['adminsystemtitle'] = 'CMS admin system';
$lang['admin']['adminpaneltitle'] = 'CMS Made Simple&trade; admin konsoll';
$lang['admin']['advanced'] = 'Avansert';
$lang['admin']['aliasalreadyused'] = 'Alias er allerede brukt p&aring; en annen side. Endre  &#039;Side alias&#039; i &#039;Innstillinger&#039; fanen til noe annet';
$lang['admin']['aliasmustbelettersandnumbers'] = 'Alias m&aring; kun inneholde bokstaver og tall';
$lang['admin']['aliasnotaninteger'] = 'Alias kan ikke v&aelig;re en integer';
$lang['admin']['allpagesmodified'] = 'Alle sider endret!';
$lang['admin']['assignments'] = 'Tilegne brukere';
$lang['admin']['associationexists'] = 'Denne koblingen eksisterer allerede';
$lang['admin']['autoinstallupgrade'] = 'Installer eller oppgrader automatisk';
$lang['admin']['back'] = 'G&aring; til meny';
$lang['admin']['backtoplugins'] = 'Tilbake til pluginlisten (utvidelser)';
$lang['admin']['cancel'] = 'Avbryt';
$lang['admin']['cantchmodfiles'] = 'Kunne ikke endre rettigheter p&aring; noen av filene';
$lang['admin']['cantremovefiles'] = 'Problem med &aring; fjerne filer (rettigheter?)';
$lang['admin']['confirmcancel'] = 'Er du sikker p&aring; du vil angre endringene? Klikk OK for &aring; Angre endringer. Klikk Avbryt for &aring; fortsette redigeringen.';
$lang['admin']['canceldescription'] = 'Angre endringene';
$lang['admin']['clearadminlog'] = 'Nullstill adminloggen';
$lang['admin']['code'] = 'Kode';
$lang['admin']['confirmdefault'] = 'Vil du virkelige sette - %s - som standard side for nettstedet?';
$lang['admin']['confirmdeletedir'] = 'Vil du virkelig slette denne katalogen og alt innhold?';
$lang['admin']['content'] = 'Innhold';
$lang['admin']['contentmanagement'] = 'Innholdsadministrasjon';
$lang['admin']['contenttype'] = 'Innholdstype';
$lang['admin']['copy'] = 'Kopier';
$lang['admin']['copytemplate'] = 'Kopier mal';
$lang['admin']['create'] = 'Opprett';
$lang['admin']['createnewfolder'] = 'Opprett ny katalog';
$lang['admin']['cssalreadyused'] = 'CSS navn er allerede i bruk';
$lang['admin']['cssmanagement'] = 'CSS administrasjon';
$lang['admin']['currentassociations'] = 'Gjeldende forbindelser';
$lang['admin']['currentdirectory'] = 'Gjeldende katalog';
$lang['admin']['currentgroups'] = 'Gjeldende grupper';
$lang['admin']['currentpages'] = 'Gjeldende sider';
$lang['admin']['currenttemplates'] = 'Gjeldende maler';
$lang['admin']['currentusers'] = 'Gjeldende brukere';
$lang['admin']['custom404'] = 'Egenspesifisert 404 feilmelding';
$lang['admin']['database'] = 'Database ';
$lang['admin']['databaseprefix'] = 'Database forstavelse(prefix)';
$lang['admin']['databasetype'] = 'Database type';
$lang['admin']['date'] = 'Dato';
$lang['admin']['default'] = 'Standard';
$lang['admin']['delete'] = 'Slett';
$lang['admin']['deleteconfirm'] = 'Vil du virkelig slette - %s - ?';
$lang['admin']['deleteassociationconfirm'] = 'Er du sikker p&aring; at du vil slette koblingen til - %s - ?';
$lang['admin']['deletecss'] = 'Slett CSS';
$lang['admin']['dependencies'] = 'Avhengigheter';
$lang['admin']['description'] = 'Beskrivelse';
$lang['admin']['directoryexists'] = 'Katalogen eksisterer allerede.';
$lang['admin']['down'] = 'Ned';
$lang['admin']['edit'] = 'Rediger';
$lang['admin']['editconfiguration'] = 'Rediger konfigurasjon';
$lang['admin']['editcontent'] = 'Rediger innhold';
$lang['admin']['editcss'] = 'Rediger CSS/stilark';
$lang['admin']['editcsssuccess'] = 'Stilark/CSS oppdatert';
$lang['admin']['editgroup'] = 'Rediger gruppe';
$lang['admin']['editpage'] = 'Rediger side';
$lang['admin']['edittemplate'] = 'Rediger mal';
$lang['admin']['edittemplatesuccess'] = 'Mal oppdatert';
$lang['admin']['edituser'] = 'Rediger bruker';
$lang['admin']['editusertag'] = 'Rediger brukerdefinert tagg';
$lang['admin']['usertagadded'] = 'Brukerdefinert tagg ble lagt til.';
$lang['admin']['usertagupdated'] = 'Brukerdefinert tagg ble oppdatert.';
$lang['admin']['usertagdeleted'] = 'Brukerdefinert tagg ble fjernet.';
$lang['admin']['email'] = 'Epostadresse';
$lang['admin']['errorattempteddowngrade'] = 'Installering av denne modulen ville resultere i en nedgradering. Handlingen ble avbrutt';
$lang['admin']['errorchildcontent'] = 'Denne siden har underliggende sider. Vennligst fjern dem f&oslash;rst.';
$lang['admin']['errorcopyingtemplate'] = 'Feil ved kopiering av mal';
$lang['admin']['errorcouldnotparsexml'] = 'Feil ved parsing av XML filen. Kontroller at du laster opp en .xml fil og ikke en .tar.gz eller zip fil.';
$lang['admin']['errorcreatingassociation'] = 'Feil ved opprettelse av forbindelse.';
$lang['admin']['errorcssinuse'] = 'Dette CSS stilsettet er i bruk av en mal(er) eller side(r). Vennligst fjern disse forbindelsene f&oslash;rst.';
$lang['admin']['errordefaultpage'] = 'Kan ikke slette gjeldende standard side. Vennligst velg en ny f&oslash;rst.';
$lang['admin']['errordeletingassociation'] = 'Feil ved sletting av koblingen.';
$lang['admin']['errordeletingcss'] = 'Feil ved sletting av CSS';
$lang['admin']['errordeletingdirectory'] = 'Ikke mulig &aring; slette katalogen. Tilgangsproblemer?';
$lang['admin']['errordeletingfile'] = 'Ikke mulig &aring; slette fila. Tilgangsproblemer?';
$lang['admin']['errordirectorynotwritable'] = 'Ingen rettigheter til &aring; skrive til mappe. Dette kan for&aring;rsakes av filrettigheter og eierskap. Safe-mode kan ogs&aring; v&aelig;re satt p&aring;.';
$lang['admin']['errordtdmismatch'] = 'XML filen mangler DTD versjon eller er ikke kompatibel';
$lang['admin']['errorgettingcssname'] = 'Feil ved henting av stilsett-navn';
$lang['admin']['errorgettingtemplatename'] = 'Feil ved henting av mal-navn';
$lang['admin']['errorincompletexml'] = 'XML Filen er ufullstendig eller validerer ikke';
$lang['admin']['uploadxmlfile'] = 'Installer modul via XML fil';
$lang['admin']['cachenotwritable'] = 'Cache mappa er ikke skrivbar. &Aring; t&oslash;mme cache vil ikke fungere. Vennligst gi tmp/cache mappa fulle lese/skrive/kj&oslash;re(read/write/execute) tillatelser (chmod 777). Du m&aring; muligens ogs&aring; sl&aring; av Safe-mode.';
$lang['admin']['error_nomodules'] = 'Ingen moduler er installert! Sjekk Utvidelser > Moduler';
$lang['admin']['modulesnotwritable'] = 'Modul-mappen <em>(og/eller uploads mappen)</em>er ikke skrivbar. Om du &oslash;nsker &aring; installere moduler ved &aring; laste opp XML-fil s&aring; m&aring; du forsikre deg om at disse mappen har fulle lese/skrive/kj&oslash;re(read/write/execute) rettigheter (chmod 777). Safe-mode kan ogs&aring; v&aelig;re satt p&aring;.';
$lang['admin']['noxmlfileuploaded'] = 'Ingen fil ble lastet opp. For &aring; installere en modul via XML m&aring; du finne og s&aring; laste opp en modul .xml fil fra din datamaskin.';
$lang['admin']['errorinsertingcss'] = 'Feil ved innlegging av CSS';
$lang['admin']['errorinsertinggroup'] = 'Feil ved oppretting av gruppe';
$lang['admin']['errorinsertingtag'] = 'Feil ved innlegging av brukertagg';
$lang['admin']['errorinsertingtemplate'] = 'Feil ved innlegging av mal';
$lang['admin']['errorinsertinguser'] = 'Feil ved opprettelse av bruker';
$lang['admin']['errornofilesexported'] = 'Feil ved eksport av filer til XML';
$lang['admin']['errorretrievingcss'] = 'Feil ved henting av CSS/stilsett';
$lang['admin']['errorretrievingtemplate'] = 'Feil ved henting av mal';
$lang['admin']['errortemplateinuse'] = 'Denne malen er fremdeles i bruk av en side. Vennligst fjern siden f&oslash;rst.';
$lang['admin']['errorupdatingcss'] = 'Feil ved oppdatering av CSS/stilsett';
$lang['admin']['errorupdatinggroup'] = 'Feil ved oppdatering av gruppe';
$lang['admin']['errorupdatingpages'] = 'Feil ved oppdatering av sider';
$lang['admin']['errorupdatingtemplate'] = 'Feil ved oppdatering av mal';
$lang['admin']['errorupdatinguser'] = 'Feil ved oppdatering av bruker';
$lang['admin']['errorupdatingusertag'] = 'Feil ved oppdatering av brukertagg';
$lang['admin']['erroruserinuse'] = 'Denne brukeren eier fremdeles innholdsider. Vennligst flytt eierrettighetene til en annen bruker f&oslash;r sletting.';
$lang['admin']['eventhandlers'] = 'Hendelser';
$lang['admin']['eventhandler'] = 'Hendelses behandlere';
$lang['admin']['editeventhandler'] = 'Rediger Hendelsesbehandleren(Event Handler)';
$lang['admin']['eventhandlerdescription'] = 'Samle brukerdefinert tagger med hendelser';
$lang['admin']['export'] = 'Eksporter';
$lang['admin']['event'] = 'Hendelse';
$lang['admin']['false'] = 'Usann';
$lang['admin']['settrue'] = 'Sett sann';
$lang['admin']['filecreatedirnodoubledot'] = 'Katalognavnet kan ikke innholde &#039;..&#039;.';
$lang['admin']['filecreatedirnoname'] = 'Kan ikke opprette katalog uten navn.';
$lang['admin']['filecreatedirnoslash'] = 'Katalognavnet kan ikke innholde &#039;/&#039; eller &#039;\&#039;.';
$lang['admin']['filemanagement'] = 'Filbehandling';
$lang['admin']['filename'] = 'Filnavn';
$lang['admin']['filenotuploaded'] = 'Feil ved opplasting av fil. Dette kan v&aelig;re rettighet eller Safe mode problem?';
$lang['admin']['filesize'] = 'Filst&oslash;rrelse';
$lang['admin']['firstname'] = 'Fornavn';
$lang['admin']['groupmanagement'] = 'Gruppe administrasjon';
$lang['admin']['grouppermissions'] = 'Grupperettigheter';
$lang['admin']['handler'] = 'H&aring;ndterer (brukerdefinert tag)';
$lang['admin']['headtags'] = 'Head-tagger';
$lang['admin']['help'] = 'Hjelp';
$lang['admin']['new_window'] = 'nytt vindu';
$lang['admin']['helpwithsection'] = '%s Hjelp';
$lang['admin']['helpaddtemplate'] = '<p>En mal er det som kontrollerer utseendet til din nettsides innhold.</p><p>Opprett layouten her og legg ogs&aring; til din CSS i Stilsett seksjonen for &aring; kontrollere utseendet til dine forskjellige elementer.</p>';
$lang['admin']['helplisttemplate'] = '<p>Denne siden tillater deg &aring; redigere, slette, og opprette maler.</p><p>For &aring; opprette en ny mal, klikk p&aring; <u>Legg til Ny Mal</u> knappen.</p><p>Hvis du &oslash;nsker &aring; sette det slik at alle sidene skal bruke samme malene, klikk p&aring; <u>Sett alt Innhold</u> lenken.</p><p>Hvis du &oslash;nsker &aring; kopiere en mal, klikk p&aring; <u>Kopier</u> ikonet og du vil bli bedt om &aring; navngi den nye kopien av malen.</p>';
$lang['admin']['home'] = 'Forsiden';
$lang['admin']['homepage'] = 'Hjemmeside';
$lang['admin']['hostname'] = 'Vertsnavn';
$lang['admin']['idnotvalid'] = 'Denne ID er ikke gyldig';
$lang['admin']['imagemanagement'] = 'Bildebehandler';
$lang['admin']['informationmissing'] = 'Mangler informasjon';
$lang['admin']['install'] = 'Installer';
$lang['admin']['invalidcode'] = 'Ugyldig kode oppgitt.';
$lang['admin']['illegalcharacters'] = 'Ugyldige bokstaver i felt %s.';
$lang['admin']['invalidcode_brace_missing'] = 'Ulik antall av klammer';
$lang['admin']['invalidtemplate'] = 'Malen er ikke gyldig';
$lang['admin']['itemid'] = 'Enhets-ID';
$lang['admin']['itemname'] = 'Enhetsnavn';
$lang['admin']['language'] = 'Spr&aring;k';
$lang['admin']['lastname'] = 'Etternavn';
$lang['admin']['logout'] = 'Logg ut';
$lang['admin']['loginprompt'] = 'Skriv inn brukernavn og passord for administrasjonskonsollet.';
$lang['admin']['logintitle'] = 'CMS Made Simple Admin.innlogging';
$lang['admin']['menutext'] = 'Menytekst';
$lang['admin']['missingparams'] = 'Noen parametre var utelatt eller de er ikke gyldige';
$lang['admin']['modifygroupassignments'] = 'Endre Gruppetilh&oslash;righet';
$lang['admin']['moduleabout'] = 'Om %s modulen';
$lang['admin']['modulehelp'] = 'Hjelp for %s modulen';
$lang['admin']['msg_defaultcontent'] = 'Legg til kode her som skal opptre som standard innhold for alle nye sider';
$lang['admin']['msg_defaultmetadata'] = 'Legg til kode her som skal opptre i metadata seksjonen p&aring; alle nye sider';
$lang['admin']['wikihelp'] = 'Hjelp fra fellesskapet';
$lang['admin']['moduleinstalled'] = 'Modulen er allerede installert';
$lang['admin']['moduleinterface'] = '%s Grensesnitt';
$lang['admin']['modules'] = 'Moduler';
$lang['admin']['move'] = 'Flytt';
$lang['admin']['name'] = 'Navn';
$lang['admin']['needpermissionto'] = 'Du trenger &#039;%s&#039; tillatelse for &aring; utf&oslash;re den funksjonen.';
$lang['admin']['needupgrade'] = 'Trenger oppgradering';
$lang['admin']['newtemplatename'] = 'Nytt Malnavn';
$lang['admin']['next'] = 'Neste';
$lang['admin']['noaccessto'] = 'Ingen Tilgang til %s';
$lang['admin']['nocss'] = 'Ingen CSS/stilsett';
$lang['admin']['noentries'] = 'Ingen Innlegg';
$lang['admin']['nofieldgiven'] = 'Ingen %s er gitt!';
$lang['admin']['nofiles'] = 'Ingen Filer';
$lang['admin']['nopasswordmatch'] = 'Passordene stemmer ikke overens';
$lang['admin']['norealdirectory'] = 'Ingen eksisterende katalog er oppgitt.';
$lang['admin']['norealfile'] = 'Ingen eksisterende fil er oppgitt.';
$lang['admin']['notinstalled'] = 'Ikke Installert';
$lang['admin']['overwritemodule'] = 'Overskriv eksisterende moduler';
$lang['admin']['owner'] = 'Eier';
$lang['admin']['pagealias'] = 'Side Alias';
$lang['admin']['pagedefaults'] = 'Side Standarder';
$lang['admin']['pagedefaultsdescription'] = 'Sett standardverdier for nye sider';
$lang['admin']['parent'] = 'Foreldre';
$lang['admin']['password'] = 'Passord';
$lang['admin']['passwordagain'] = 'Passord (igjen)';
$lang['admin']['permission'] = 'Tillatelse';
$lang['admin']['permissions'] = 'Tillatelser';
$lang['admin']['permissionschanged'] = 'Rettigheter har blitt oppdatert.';
$lang['admin']['pluginabout'] = 'Om %s taggen';
$lang['admin']['pluginhelp'] = 'Hjelp for %s taggen';
$lang['admin']['pluginmanagement'] = 'Pluginbehandling';
$lang['admin']['prefsupdated'] = 'Innstillinger har blitt oppdatert.';
$lang['admin']['preview'] = 'Forh&aring;ndsvisning';
$lang['admin']['previewdescription'] = 'Forh&aring;ndsvis endringene';
$lang['admin']['previous'] = 'Forrige';
$lang['admin']['remove'] = 'Fjern';
$lang['admin']['removeconfirm'] = 'Denne handling vil permanent fjerne filene som utgj&oslash;r denne modulen fra denne installasjonen.\nEr du sikker p&aring; at du vil fortsette?';
$lang['admin']['removecssassociation'] = 'Fjern CSS kobling';
$lang['admin']['saveconfig'] = 'Lagre konfig.';
$lang['admin']['send'] = 'Send ';
$lang['admin']['setallcontent'] = 'Bruk p&aring; alle sider';
$lang['admin']['setallcontentconfirm'] = 'Vil du virkelig at alle sidene skal bruke denne malen?';
$lang['admin']['showinmenu'] = 'Vis i Meny';
$lang['admin']['use_name'] = 'Benytt sidenavn fra foreldre nedtrekksmenyen ellers benytt menyteksten';
$lang['admin']['showsite'] = 'Vis nettsted';
$lang['admin']['sitedownmessage'] = 'Nettsted nede melding';
$lang['admin']['siteprefs'] = 'Globale innstillinger';
$lang['admin']['status'] = 'Status ';
$lang['admin']['stylesheet'] = 'CSS/Stilsett';
$lang['admin']['submit'] = 'Lagre';
$lang['admin']['submitdescription'] = 'Lagre endringene';
$lang['admin']['tags'] = 'Systemtagger';
$lang['admin']['template'] = 'Mal';
$lang['admin']['templateexists'] = 'Malnavnet eksisterer allerede';
$lang['admin']['templatemanagement'] = 'Mal Administrasjon';
$lang['admin']['title'] = 'Tittel';
$lang['admin']['tools'] = 'Verkt&oslash;y';
$lang['admin']['true'] = 'Sann';
$lang['admin']['setfalse'] = 'Sett usann';
$lang['admin']['type'] = 'Type ';
$lang['admin']['typenotvalid'] = 'Typen er ikke gyldig';
$lang['admin']['uninstall'] = 'Avinstaller';
$lang['admin']['uninstallconfirm'] = 'Vil du virkelig avinstallere denne modulen? Navn:';
$lang['admin']['up'] = 'Opp';
$lang['admin']['upgrade'] = 'Oppgrader';
$lang['admin']['upgradeconfirm'] = 'Vil du virkelig oppgradere denne?';
$lang['admin']['uploadfile'] = 'Last opp fil';
$lang['admin']['url'] = 'URL ';
$lang['admin']['useadvancedcss'] = 'Bruk avansert CSS/stilsett behandling';
$lang['admin']['user'] = 'Bruker';
$lang['admin']['userdefinedtags'] = 'Brukerdefinerte tagger (UDT)';
$lang['admin']['usermanagement'] = 'Brukeradministrasjon';
$lang['admin']['username'] = 'Brukernavn';
$lang['admin']['usernameincorrect'] = 'Brukernavn eller passord er feil';
$lang['admin']['userprefs'] = 'Brukerinnstillinger';
$lang['admin']['usersassignedtogroup'] = 'Brukere lagt til Gruppe %s';
$lang['admin']['usertagexists'] = 'En tagg med dette navnet eksisterer allerede. Vennligst velg annet navn.';
$lang['admin']['usewysiwyg'] = 'Bruk WYSIWYG tekstbehandler for innhold';
$lang['admin']['version'] = 'Versjon';
$lang['admin']['view'] = 'Vis';
$lang['admin']['welcomemsg'] = 'Velkommen %s';
$lang['admin']['directoryabove'] = 'katalog over gjeldende niv&aring;';
$lang['admin']['nodefault'] = 'Ingen standard valgt';
$lang['admin']['blobexists'] = 'Navn p&aring; Global innholdsblokk (GCB) er allerede i bruk';
$lang['admin']['blobmanagement'] = 'Administrasjon av Global innholdsblokk (GCB)';
$lang['admin']['errorinsertingblob'] = 'Det oppstod en feil under innlegg av Global innholdsblokk (GCB).';
$lang['admin']['addhtmlblob'] = 'Legg til Global innholdsblokk (GCB)';
$lang['admin']['edithtmlblob'] = 'Rediger Global innholdsblokk (GCB)';
$lang['admin']['edithtmlblobsuccess'] = 'Global Innholdsblokk (GCB) oppdatert';
$lang['admin']['tagtousegcb'] = 'Tagg for &aring; benytte denne Blokken';
$lang['admin']['gcb_wysiwyg'] = 'Sl&aring; p&aring; WYSIWYG for GCB';
$lang['admin']['gcb_wysiwyg_help'] = 'Sl&aring; p&aring; WYSIWYG editoren for redigering av Global Innholdsblokker (GCB)';
$lang['admin']['filemanager'] = 'Filbehandler';
$lang['admin']['imagemanager'] = 'Bildebehandler';
$lang['admin']['encoding'] = 'Encoding ';
$lang['admin']['clearcache'] = 'T&oslash;m mellomlager';
$lang['admin']['clear'] = 'T&oslash;m';
$lang['admin']['cachecleared'] = 'Mellomlager er t&oslash;mt';
$lang['admin']['apply'] = 'Bruk';
$lang['admin']['applydescription'] = 'Lagre endringer og fortsett redigering';
$lang['admin']['none'] = 'Ingen';
$lang['admin']['wysiwygtouse'] = 'Velg WYSIWYG editor som skal benyttes';
$lang['admin']['syntaxhighlightertouse'] = 'Velg syntaksuthever som skal benyttes';
$lang['admin']['hasdependents'] = 'Har bindinger';
$lang['admin']['missingdependency'] = 'Mangler avhengighet';
$lang['admin']['minimumversion'] = 'Minimum versjon';
$lang['admin']['minimumversionrequired'] = 'Minimum CMSMS versjon krevd';
$lang['admin']['maximumversion'] = 'Maksimum versjon';
$lang['admin']['maximumversionsupported'] = 'Maksimum CMSMS versjon som st&oslash;ttes';
$lang['admin']['depsformodule'] = 'Bindinger for %s modulen';
$lang['admin']['installed'] = 'Installert';
$lang['admin']['author'] = 'Forfatter';
$lang['admin']['changehistory'] = 'Endringslogg';
$lang['admin']['moduleerrormessage'] = 'Feilmelding for %s modulen';
$lang['admin']['moduleupgradeerror'] = 'Det skjedde en feil under oppgradering av modulen.';
$lang['admin']['moduleinstallmessage'] = 'Installasjonsmelding for %s Modul';
$lang['admin']['moduleuninstallmessage'] = 'Avinstallasjonsmelding for %s Modul';
$lang['admin']['admintheme'] = 'Mal for administrasjonsider';
$lang['admin']['addstylesheet'] = 'Legg til stilsett';
$lang['admin']['editstylesheet'] = 'Rediger stilsett';
$lang['admin']['addcssassociation'] = 'Legg til stilsett forbindelse';
$lang['admin']['attachstylesheet'] = 'Bruk dette stilsettet';
$lang['admin']['attachtemplate'] = 'Tilknytt til denne malen';
$lang['admin']['main'] = 'Hovedmeny';
$lang['admin']['pages'] = 'Sider';
$lang['admin']['page'] = ' Side';
$lang['admin']['files'] = 'Filer';
$lang['admin']['layout'] = 'Utseende';
$lang['admin']['usersgroups'] = 'Brukere/Grupper';
$lang['admin']['extensions'] = 'Utvidelser';
$lang['admin']['preferences'] = 'Innstillinger';
$lang['admin']['admin'] = 'Nettstedsadmin.';
$lang['admin']['viewsite'] = 'Vis nettsted';
$lang['admin']['templatecss'] = 'Knytt maler til stilsettet';
$lang['admin']['plugins'] = 'Plugin';
$lang['admin']['movecontent'] = 'Flytt sider';
$lang['admin']['module'] = 'Modul';
$lang['admin']['usertags'] = 'Brukerdefinerte tagger';
$lang['admin']['htmlblobs'] = 'Globale innholdsblokker(GCB)';
$lang['admin']['adminhome'] = 'Administrasjon Hjem';
$lang['admin']['liststylesheets'] = 'Stilsett';
$lang['admin']['preferencesdescription'] = 'Her settes systeminnstillinger som ber&oslash;rer hele nettstedet.';
$lang['admin']['adminlogdescription'] = 'Viser logg over hvem som gjorde hva i administrasjonssystemet.';
$lang['admin']['mainmenu'] = 'Hovedmeny';
$lang['admin']['users'] = 'Brukere';
$lang['admin']['usersdescription'] = 'Dette er siden hvor du administrerer brukere.';
$lang['admin']['groups'] = 'Grupper';
$lang['admin']['groupsdescription'] = 'Dette er siden hvor du administrerer grupper.';
$lang['admin']['groupassignments'] = 'Gruppetilh&oslash;righet';
$lang['admin']['groupassignmentdescription'] = 'Her kan du legge brukere til grupper.';
$lang['admin']['groupperms'] = 'Grupperettigheter';
$lang['admin']['grouppermsdescription'] = 'Sett rettigheter og tilgangsniv&aring;er for grupper.';
$lang['admin']['pagesdescription'] = 'Funksjoner for &aring; legge til, redigere og slette innhold.';
$lang['admin']['htmlblobdescription'] = 'Globale innholdblokker(GCB) er blingser med innhold som du kan plassere p&aring; dine sider eller i maler.';
$lang['admin']['templates'] = 'Maler';
$lang['admin']['templatesdescription'] = 'Dette er hvor vi legger til og endrer maler. Malene definerer hvordan sidene dine presenteres.';
$lang['admin']['stylesheets'] = 'Stilsett';
$lang['admin']['stylesheetsdescription'] = 'Administrasjon av stilsett er en avansert m&aring;te &aring; h&aring;ndtere stilsett (CSS) adskilt fra maler.';
$lang['admin']['filemanagerdescription'] = 'Last opp og administrer filer.';
$lang['admin']['imagemanagerdescription'] = 'Last opp, rediger og slett bilder.';
$lang['admin']['moduledescription'] = 'Moduler brukes til &aring; legge til all mulig funksjonalitet i CMS Made Simple&amp;trade;';
$lang['admin']['tagdescription'] = 'Systemtagger er sm&aring; programfunksjoner som kan settes inn i ditt innhold og/eller mal.';
$lang['admin']['usertagdescription'] = 'Brukerdefinerte tagger (UDT) er programfunksjoner som man kan opprette og redigere selv for &aring; utf&oslash;re spesifikke oppgaver rett fra nettleseren.';
$lang['admin']['installdirwarning'] = '<em><strong>Advarsel:</strong></em> mappen med installasjonsfiler eksisterer fremdeles. V&aelig;r vennlig &aring; slett denne helt.';
$lang['admin']['subitems'] = 'Underartikler';
$lang['admin']['extensionsdescription'] = 'Moduler, tagger, og annen kode for ekstra funksjonalitet.';
$lang['admin']['usersgroupsdescription'] = 'Bruker- og grupperelaterte funksjoner.';
$lang['admin']['layoutdescription'] = 'Nettsted layout innstillinger.';
$lang['admin']['admindescription'] = 'Nettsted administrasjons funksjoner';
$lang['admin']['contentdescription'] = 'Det er her vi legger til og endrer innhold.';
$lang['admin']['enablecustom404'] = 'Aktiver egendefinert 404 melding';
$lang['admin']['enablesitedown'] = 'Aktiver nettsted nede melding';
$lang['admin']['enablewysiwyg'] = 'Sl&aring; p&aring; WYSIWYG p&aring; Nettsted nede meldingen';
$lang['admin']['bookmarks'] = 'Bokmerker';
$lang['admin']['user_created'] = 'Personlige snarveier';
$lang['admin']['forums'] = 'Forum';
$lang['admin']['wiki'] = 'Wiki ';
$lang['admin']['irc'] = 'IRC ';
$lang['admin']['module_help'] = 'Hjelp for Modul';
$lang['admin']['managebookmarks'] = 'Ordne bokmerker';
$lang['admin']['editbookmark'] = 'Rediger bokmerke';
$lang['admin']['addbookmark'] = 'Legg til bokmerke';
$lang['admin']['recentpages'] = 'Nylig viste sider';
$lang['admin']['groupname'] = 'Gruppenavn';
$lang['admin']['selectgroup'] = 'Velg gruppe';
$lang['admin']['updateperm'] = 'Oppdater rettigheter';
$lang['admin']['admincallout'] = 'Administrative snarveier';
$lang['admin']['showbookmarks'] = 'Vis Admin bokmerker';
$lang['admin']['hide_help_links'] = 'Skjul hjelpelenker';
$lang['admin']['hide_help_links_help'] = 'Hak av i denne boksen for &aring; sl&aring; av wiki og modul-hjelp lenker i side header&#039;ene.';
$lang['admin']['showrecent'] = 'Vis nylig benyttede sider';
$lang['admin']['attachtotemplate'] = 'Knytt stilsett til mal';
$lang['admin']['attachstylesheets'] = 'Legg til stilsett';
$lang['admin']['indent'] = 'Bruk innrykk i siderlisten for &aring; fremheve hierarkiet';
$lang['admin']['adminindent'] = 'Innholdsoversikt';
$lang['admin']['contract'] = 'Skjul underliggende';
$lang['admin']['expand'] = 'Vis underliggende';
$lang['admin']['expandall'] = 'Vis alle underliggende';
$lang['admin']['contractall'] = 'Skjul alle underliggende';
$lang['admin']['menu_bookmarks'] = '[+] ';
$lang['admin']['globalconfig'] = 'Globale innstillinger';
$lang['admin']['adminpaging'] = 'Antall innholdselementer som skal vises samtidig i sideoversikten.';
$lang['admin']['nopaging'] = 'Vis alle elementer';
$lang['admin']['myprefs'] = 'Mine innstillinger';
$lang['admin']['myprefsdescription'] = 'Det er her du kan tilpasse nettsted administrasjonsomr&aring;det s&aring; det virker slik du vil.';
$lang['admin']['myaccount'] = 'Min konto';
$lang['admin']['myaccountdescription'] = 'Det er her du kan oppdatere informasjonen i din personlige konto.';
$lang['admin']['adminprefs'] = 'Bruker innstillinger';
$lang['admin']['adminprefsdescription'] = 'Konfigurer utseendet, spr&aring;k og andre innstillinger for brukergrensesnittet.';
$lang['admin']['managebookmarksdescription'] = 'Her kan du behandle administrative snarveier.';
$lang['admin']['options'] = 'Innstillinger';
$lang['admin']['langparam'] = 'Parameteren brukes til &aring; velge hvilket spr&aring;k som skal vises p&aring; frontend(for sluttbrukeren). Ikke alle moduler st&oslash;tter, eller trenger dette.';
$lang['admin']['parameters'] = 'Parametre';
$lang['admin']['mediatype'] = 'Mediatype';
$lang['admin']['mediatype_'] = 'Ingen valgt : vill innvirke overalt';
$lang['admin']['mediatype_all'] = 'alle : Passende for alle enheter.';
$lang['admin']['mediatype_aural'] = 'aural : Ment for tale synthesizere.';
$lang['admin']['mediatype_braille'] = 'braille : Ment for blindeskrift/braille taktile enheter.';
$lang['admin']['mediatype_embossed'] = 'embossed : Ment for blindeskrift/braille skrivere.';
$lang['admin']['mediatype_handheld'] = 'handheld : Ment for h&aring;ndholdte enheter.';
$lang['admin']['mediatype_print'] = 'print : Ment for sidedelt, ugjennomsiktig materiale og for dokumenter vist p&aring; skjerm i utskrift forh&aring;ndsvisning modus.';
$lang['admin']['mediatype_projection'] = 'projection : Ment for projiserte presentasjoner, for eksempel projektorer eller utskrift til lysark/transparenter.';
$lang['admin']['mediatype_screen'] = 'screen : Ment prim&aelig;rt for data fargeskjermer.';
$lang['admin']['mediatype_tty'] = 'tty : Ment for media som bruker et fiksert-pitch bokstavnett, for eksempel teletype og terminaler.';
$lang['admin']['mediatype_tv'] = 'tv : Ment for tv-lignende enheter.';
$lang['admin']['assignmentchanged'] = 'Gruppetilh&oslash;righet har blitt oppdatert.';
$lang['admin']['stylesheetexists'] = 'Stilsettet eksisterer fra f&oslash;r';
$lang['admin']['errorcopyingstylesheet'] = 'Feil ved kopiering av stilsettet';
$lang['admin']['copystylesheet'] = 'Kopier stilsett';
$lang['admin']['newstylesheetname'] = 'Nytt navn p&aring; stilsett';
$lang['admin']['target'] = 'M&aring;l';
$lang['admin']['xml'] = 'XML ';
$lang['admin']['xmlmodulerepository'] = 'URL til soap server for ModuleRepository';
$lang['admin']['metadata'] = 'Metadata ';
$lang['admin']['globalmetadata'] = 'Globale Metadata';
$lang['admin']['titleattribute'] = 'Beskrivelse (Tittelatributt)';
$lang['admin']['tabindex'] = 'Tabindex';
$lang['admin']['accesskey'] = 'Tilgangsn&oslash;kkel';
$lang['admin']['sitedownwarning'] = '<strong>Advarsel:</strong> Din nettside viser en &quot;Siden er nede for vedlikehold&quot; melding.  For &aring; rette opp dette fjerner du filen %s .';
$lang['admin']['deletecontent'] = 'Slett innhold';
$lang['admin']['deletepages'] = 'Slette disse sidene?';
$lang['admin']['selectall'] = 'Velg alle';
$lang['admin']['selecteditems'] = 'For valgte';
$lang['admin']['inactive'] = 'Inaktiv';
$lang['admin']['deletetemplates'] = 'Slett maler';
$lang['admin']['templatestodelete'] = 'Disse malene vil bli slettet';
$lang['admin']['wontdeletetemplateinuse'] = 'Disse malene er i bruk og vil ikke bli slettet';
$lang['admin']['deletetemplate'] = 'Slett stilsett';
$lang['admin']['stylesheetstodelete'] = 'Disse stilsettene vil bli slettet';
$lang['admin']['sitename'] = 'Navn p&aring; nettstedet';
$lang['admin']['siteadmin'] = 'Nettstedadmin.';
$lang['admin']['images'] = 'Bildebehandler';
$lang['admin']['blobs'] = 'Globale innholdsblokker (GCB)';
$lang['admin']['groupmembers'] = 'Grupperettigheter';
$lang['admin']['troubleshooting'] = '(Probleml&oslash;sning)';
$lang['admin']['event_desc_loginpost'] = 'Sendt etter en bruker logger seg inn p&aring; admin panelet';
$lang['admin']['event_desc_logoutpost'] = 'Sendt etter en bruker logger seg ut av admin panelet';
$lang['admin']['event_desc_adduserpre'] = 'Sendt f&oslash;r en ny bruker opprettes';
$lang['admin']['event_desc_adduserpost'] = 'Sendt etter en ny bruker ble opprettet';
$lang['admin']['event_desc_edituserpre'] = 'Sendt f&oslash;r redigering av en bruker lagres';
$lang['admin']['event_desc_edituserpost'] = 'Sendt etter redigering av en bruker er lagret';
$lang['admin']['event_desc_deleteuserpre'] = 'Sendt f&oslash;r en bruker slettes fra systemet';
$lang['admin']['event_desc_deleteuserpost'] = 'Sendt etter en bruker er slettet fra systemet';
$lang['admin']['event_desc_addgrouppre'] = 'Sendt f&oslash;r en ny gruppe opprettes';
$lang['admin']['event_desc_addgrouppost'] = 'Sendt etter en ny gruppe ble opprettet';
$lang['admin']['event_desc_changegroupassignpre'] = 'Sendt f&oslash;r gruppetildelinger lagres';
$lang['admin']['event_desc_changegroupassignpost'] = 'Sendt etter gruppetildelinger er lagret';
$lang['admin']['event_desc_editgrouppre'] = 'Sendt f&oslash;r redigering av en gruppe lagres';
$lang['admin']['event_desc_editgrouppost'] = 'Sendt etter redigering av en gruppe ble lagret';
$lang['admin']['event_desc_deletegrouppre'] = 'Sendt f&oslash;r en gruppe slettes fra systemet';
$lang['admin']['event_desc_deletegrouppost'] = 'Sendt etter en gruppe er slettet fra systemet';
$lang['admin']['event_desc_addstylesheetpre'] = 'Sendt f&oslash;r et nytt stilsett lagres';
$lang['admin']['event_desc_addstylesheetpost'] = 'Sendt etter et nytt stilsett ble lagret';
$lang['admin']['event_desc_editstylesheetpre'] = 'Sendt f&oslash;r redigering av et stilsett lagres';
$lang['admin']['event_desc_editstylesheetpost'] = 'Sendt etter redigering av et stilsett ble lagret';
$lang['admin']['event_desc_deletestylesheetpre'] = 'Sendt f&oslash;r et stilsett slettes fra systemet';
$lang['admin']['event_desc_deletestylesheetpost'] = 'Sendt etter et stilsett ble slettet fra systemet';
$lang['admin']['event_desc_addtemplatepre'] = 'Sendt f&oslash;r en ny mal opprettes';
$lang['admin']['event_desc_addtemplatepost'] = 'Sendt etter en ny mal ble opprettet';
$lang['admin']['event_desc_edittemplatepre'] = 'Sendt f&oslash;r redigering av en mal lagres';
$lang['admin']['event_desc_edittemplatepost'] = 'Sendt etter redigering av en mal ble lagret';
$lang['admin']['event_desc_deletetemplatepre'] = 'Sendt f&oslash;r en mal slettes fra systemet';
$lang['admin']['event_desc_deletetemplatepost'] = 'Sendt etter en mal er slettet fra systemet';
$lang['admin']['event_desc_templateprecompile'] = 'Sendt f&oslash;r en mal blir sendt til smarty for prosessering';
$lang['admin']['event_desc_templatepostcompile'] = 'Sendt etter en mal har blitt prosessert av smarty';
$lang['admin']['event_desc_addglobalcontentpre'] = 'Sendt f&oslash;r en ny global innholdsblokk opprettes';
$lang['admin']['event_desc_addglobalcontentpost'] = 'Sendt etter en ny global innholdsblokk ble opprettet';
$lang['admin']['event_desc_editglobalcontentpre'] = 'Sendt f&oslash;r redigering av en global innholdsblokk lagres';
$lang['admin']['event_desc_editglobalcontentpost'] = 'Sendt etter redigering av en global innholdsblokk ble lagret';
$lang['admin']['event_desc_deleteglobalcontentpre'] = 'Sendt f&oslash;r en global innholdsblokk slettes fra systemet';
$lang['admin']['event_desc_deleteglobalcontentpost'] = 'Sendt etter en global innholdsblokk ble slettet fra systemet';
$lang['admin']['event_desc_globalcontentprecompile'] = 'Sendt f&oslash;r en global innholdsblokk sendes til smarty for prosessering';
$lang['admin']['event_desc_globalcontentpostcompile'] = 'Sendt etter en global innholdsblokk har blitt prosessert av smarty';
$lang['admin']['event_desc_contenteditpre'] = 'Sendt f&oslash;r redigering av innhold lagres';
$lang['admin']['event_desc_contenteditpost'] = 'Sendt etter redigering av innhold ble lagret';
$lang['admin']['event_desc_contentdeletepre'] = 'Sendt f&oslash;r innhold slettes fra systemet';
$lang['admin']['event_desc_contentdeletepost'] = 'Sendt etter innhold er slettet fra systemet';
$lang['admin']['event_desc_contentstylesheet'] = 'Sendt f&oslash;r stilsettet sendes til nettleseren';
$lang['admin']['event_desc_contentprecompile'] = 'Sendt etter stilsettet er sendt til smarty for prosessering';
$lang['admin']['event_desc_contentpostcompile'] = 'Sendt etter innhold har blitt prosessert av smarty';
$lang['admin']['event_desc_contentpostrender'] = 'Sendt f&oslash;r innhold sendes til nettleseren';
$lang['admin']['event_desc_smartyprecompile'] = 'Sendt f&oslash;r noe sendes smarty for prosessering';
$lang['admin']['event_desc_smartypostcompile'] = 'Sendt etter noe har blitt prosessert av smarty';
$lang['admin']['event_help_loginpost'] = '<p>Sendt etter en bruker logger inn i administrasjonkonsollet.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;user&#039; - Referanse til det ber&oslash;rte bruker objektet.</li>
</ul>';
$lang['admin']['event_help_logoutpost'] = '<p>Sendt etter en bruker logger seg ut fra administrasjonskonsollet.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;user&#039; - Referanse til det ber&oslash;rte bruker objektet.</li>
</ul>';
$lang['admin']['event_help_adduserpre'] = '<p>Sendt f&oslash;r en ny bruker blir opprettet.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;user&#039; - Referanse til det ber&oslash;rte bruker objektet.</li>
</ul>';
$lang['admin']['event_help_adduserpost'] = '<p>Sendt etter en ny bruker er opprettet.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;user&#039; - Referanse til det ber&oslash;rte bruker objektet.</li>
</ul>';
$lang['admin']['event_help_edituserpre'] = '<p>Sendt f&oslash;r endring av en bruker blir lagret.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;user&#039; - Referanse til det ber&oslash;rte bruker objektet.</li>
</ul>';
$lang['admin']['event_help_edituserpost'] = '<p>Sendt etter endring av en bruker blir lagret.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;user&#039; - Referanse til det ber&oslash;rte bruker objektet.</li>
</ul>';
$lang['admin']['event_help_deleteuserpre'] = '<p>Sendt f&oslash;r en bruker blir slettet fra systemet.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;user&#039; - Referanse til det ber&oslash;rte bruker objektet.</li>
</ul>';
$lang['admin']['event_help_deleteuserpost'] = '<p>Sendt etter en bruker er slettet fra systemet.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;user&#039; - Referanse til det ber&oslash;rte bruker objektet.</li>
</ul>';
$lang['admin']['event_help_addgrouppre'] = '<p>Sendt f&oslash;r en ny gruppe blir opprettet.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;group&#039; - Referanse til det ber&oslash;rte gruppe objektet.</li>
</ul>';
$lang['admin']['event_help_addgrouppost'] = '<p>Sendt etter en ny gruppe er opprettet.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;group&#039; - Referanse til det ber&oslash;rte gruppe objektet.</li>
</ul>';
$lang['admin']['event_help_changegroupassignpre'] = '<p>Sendt etter gruppetildeling lagres.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;group&#039; - Referanse til gruppe objektet.</li>
<li>&#039;users&#039; - Utvalg av referanser til bruker objekter tilh&oslash;rende til gruppen.</li>
';
$lang['admin']['event_help_changegroupassignpost'] = '<p>Sendt etter gruppetildeling er lagret.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;group&#039; - Referanse til det affiserte gruppe objektet.</li>
<li>&#039;users&#039; - Utvalg av referanser til bruker objekter som n&aring; tilh&oslash;rer den ber&oslash;rte gruppen.</li>
';
$lang['admin']['event_help_editgrouppre'] = '<p>Sendt f&oslash;r endring av en gruppe blir lagret.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;group&#039; - Referanse til det ber&oslash;rte gruppe objektet.</li>
</ul>';
$lang['admin']['event_help_editgrouppost'] = '<p>Sendt etter endring av en gruppe er lagret.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;group&#039; - Referanse til det ber&oslash;rte gruppe objektet.</li>
</ul>';
$lang['admin']['event_help_deletegrouppre'] = '<p>Sendt f&oslash;r en gruppe blir slettet fra systemet.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;group&#039; - Referanse til det ber&oslash;rte gruppe objektet.</li>
</ul>';
$lang['admin']['event_help_deletegrouppost'] = '<p>Sendt etter en gruppe ble slettet fra systemet.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;group&#039; - Referanse til det ber&oslash;rte gruppe objektet.</li>
</ul>';
$lang['admin']['event_help_addstylesheetpre'] = '<p>Sendt f&oslash;r et nytt stilsett blir opprettet.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;stylesheet&#039; - Referanse til det ber&oslash;rte stilsett objektet.</li>
</ul>';
$lang['admin']['event_help_addstylesheetpost'] = '<p>Sendt etter et nytt stilsett er opprettet.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;stylesheet&#039; - Referanse til det ber&oslash;rte stilsett objektet.</li>
</ul>';
$lang['admin']['event_help_editstylesheetpre'] = '<p>Sendt f&oslash;r endring av et stilsett blir lagret.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;stylesheet&#039; - Referanse til det ber&oslash;rte stilsett objektet.</li>
</ul>';
$lang['admin']['event_help_editstylesheetpost'] = '<p>Sendt etter endring av et stilsett ble lagret.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;stylesheet&#039; - Referanse til det ber&oslash;rte stilsett objektet.</li>
</ul>';
$lang['admin']['event_help_deletestylesheetpre'] = '<p>Sendt f&oslash;r et stilsett blir slettet fra systemet.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;stylesheet&#039; - Referanse til det ber&oslash;rte stilsett objektet.</li>
</ul>';
$lang['admin']['event_help_deletestylesheetpost'] = '<p>Sendt etter et stilsett er slettet fra systemet.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;stylesheet&#039; - Referanse til det ber&oslash;rte stilsett objektet.</li>
</ul>';
$lang['admin']['event_help_addtemplatepre'] = '<p>Sendt f&oslash;r en ny mal blir opprettet.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;template&#039; - Referanse til det ber&oslash;rte mal objektet.</li>
</ul>';
$lang['admin']['event_help_addtemplatepost'] = '<p>Sendt etter en ny mal er opprettet.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;template&#039; - Referanse til det ber&oslash;rte mal objektet.</li>
</ul>';
$lang['admin']['event_help_edittemplatepre'] = '<p>Sendt f&oslash;r endring av en mal blir lagret.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;template&#039; - Referanse til det ber&oslash;rte mal objektet.</li>
</ul>';
$lang['admin']['event_help_edittemplatepost'] = '<p>Sendt etter endring av en mal ble lagret.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;template&#039; - Referanse til det ber&oslash;rte mal objektet.</li>
</ul>';
$lang['admin']['event_help_deletetemplatepre'] = '<p>Sendt f&oslash;r en mal blir slettet fra systemet.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;template&#039; - Referanse til det ber&oslash;rte mal objektet.</li>
</ul>';
$lang['admin']['event_help_deletetemplatepost'] = '<p>Sendt etter en mal ble slettet fra systemet.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;template&#039; - Referanse til det ber&oslash;rte mal objektet.</li>
</ul>';
$lang['admin']['event_help_templateprecompile'] = '<p>Sendt f&oslash;r en mal blir sendt til smarty for prosessering.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;template&#039; - Referanse til den ber&oslash;rte mal teksten.</li>
</ul>';
$lang['admin']['event_help_templatepostcompile'] = '<p>Sendt etter en mal har blitt prosessert av smarty.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;template&#039; - Referanse til den ber&oslash;rte mal teksten.</li>
</ul>';
$lang['admin']['event_help_addglobalcontentpre'] = '<p>Sendt f&oslash;r en ny global innholdsblokk blir opprettet.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;global_content&#039; - Referanse til det ber&oslash;rte globale  innholdsblokk objektet.</li>
</ul>';
$lang['admin']['event_help_addglobalcontentpost'] = '<p>Sendt etter en ny global innholdsblokk har blitt opprettet.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;global_content&#039; - Referanse til det ber&oslash;rte globale innholdsblokk objektet.</li>
</ul>';
$lang['admin']['event_help_editglobalcontentpre'] = '<p>Sendt f&oslash;r endring av en global innholdsblokk blir lagret.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;global_content&#039; - Referanse til det ber&oslash;rte globale innholdsblokk objektet.</li>
</ul>';
$lang['admin']['event_help_editglobalcontentpost'] = '<p>Sendt etter endring av en global innholdsblokk ble lagret.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;global_content&#039; - Referanse til det ber&oslash;rte globale innholdsblokk objektet.</li>
</ul>';
$lang['admin']['event_help_deleteglobalcontentpre'] = '<p>Sendt f&oslash;r en global innholdsblokk blir slettet fra systemet.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;global_content&#039; - Referanse til detber&oslash;rte globale innholdsblokk objektet.</li>
</ul>';
$lang['admin']['event_help_deleteglobalcontentpost'] = '<p>Sendt etter en global innholdsblokk ble slettet fra systemet.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;global_content&#039; - Referanse til det ber&oslash;rte globale innholdsblokk objektet.</li>
</ul>';
$lang['admin']['event_help_globalcontentprecompile'] = '<p>Sendt f&oslash;r en global innholdsblokk blir sendt til smarty for prosessering.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;global_content&#039; - Referanse til den ber&oslash;rte globale innholdsblokk teksten.</li>
</ul>';
$lang['admin']['event_help_globalcontentpostcompile'] = '<p>Sendt etter en global innholdsblokk har blitt prosessert av smarty.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;global_content&#039; - Referanse til den ber&oslash;rte globale innholdsblokk teksten.</li>
</ul>';
$lang['admin']['event_help_contenteditpre'] = '<p>Sendt f&oslash;r endring av innhold blir lagret.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;global_content&#039; - Referanse til det ber&oslash;rte innholdobjektet.</li>
</ul>';
$lang['admin']['event_help_contenteditpost'] = '<p>Sendt etter endring av innhold ble lagret.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;content&#039; - Referanse til det ber&oslash;rte innholdobjektet.</li>
</ul>';
$lang['admin']['event_help_contentdeletepre'] = '<p>Sendt f&oslash;r innhold blir slettet fra systemet.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;content&#039; - Referanse til det ber&oslash;rte innholdobjektet.</li>
</ul>';
$lang['admin']['event_help_contentdeletepost'] = '<p>Sendt etter innhold ble slettet fra systemet.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;content&#039; - Referanse til det ber&oslash;rte innholdobjektet.</li>
</ul>';
$lang['admin']['event_help_contentstylesheet'] = '<p>Sendt f&oslash;r et stilsett blir sendt til nettleseren.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;content&#039; - Referanse til det ber&oslash;rte stilsettobjektet.</li>
</ul>';
$lang['admin']['event_help_contentprecompile'] = '<p>Sendt f&oslash;r innhold sendes smarty for prosessering.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;content&#039; - Referanse til den ber&oslash;rte innholdteksten.</li>
</ul>';
$lang['admin']['event_help_contentpostcompile'] = '<p>Sendt etter innhold har blitt prosessert av smarty.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;content&#039; - Referanse til den ber&oslash;rte innholdteksten.</li>
</ul>';
$lang['admin']['event_help_contentpostrender'] = '<p>Sendt f&oslash;r den kombinerte html blir sendt nettleseren.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;content&#039; - Referanse til den ber&oslash;rte html teksten.</li>
</ul>';
$lang['admin']['event_help_smartyprecompile'] = '<p>Sendt f&oslash;r innhold ment for smarty blir sendt til prosessering.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;content&#039; - Referanse til den ber&oslash;rte teksten.</li>
</ul>';
$lang['admin']['event_help_smartypostcompile'] = '<p>Sendt etter at innhold ment for smarty har blitt prosessert.</p>
<h4>Parametere</h4>
<ul>
<li>&#039;content&#039; - Referanse til den ber&oslash;rte teksten.</li>
</ul>';
$lang['admin']['filterbymodule'] = 'Filtrer etter Modul';
$lang['admin']['showall'] = 'Vis alle';
$lang['admin']['core'] = 'Kjerne';
$lang['admin']['defaultpagecontent'] = 'Plassholder sideinnhold (blah blah tekst)';
$lang['admin']['file_url'] = 'Lenke til fil (i stedet for URL)';
$lang['admin']['no_file_url'] = 'Ingen (Benytt URL&#039;en ovenfor)';
$lang['admin']['defaultparentpage'] = 'Standard foreldre side';
$lang['admin']['error_udt_name_whitespace'] = 'Feil: Brukerdefinerte Tagger(UDT) kan ikke ha mellomrom i navnet.';
$lang['admin']['warning_safe_mode'] = '<strong><em>ADVARSEL:</em></strong> PHP Safe mode er sl&aring;tt p&aring;.  Dette medf&oslash;rer problemer med filer som lastes opp via nettlesergrensesnittet, inkludert bilder, tema og modul XML-pakker.  Du r&aring;des til &aring; kontakte din nettstedadministrator for &aring; h&oslash;re om safe mode kan sl&aring;s av.';
$lang['admin']['test'] = 'Test ';
$lang['admin']['results'] = 'Resultater';
$lang['admin']['untested'] = 'Ikke testet';
$lang['admin']['unknown'] = 'Ukjent';
$lang['admin']['download'] = 'Last ned';
$lang['admin']['frontendwysiwygtouse'] = 'Frontend WYSIWYG';
$lang['admin']['all_groups'] = 'Alle grupper';
$lang['admin']['error_type'] = 'Feiltype';
$lang['admin']['contenttype_errorpage'] = 'Feil-side';
$lang['admin']['errorpagealreadyinuse'] = 'Feilkode allerede i bruk';
$lang['admin']['404description'] = 'Siden ble ikke funnet';
$lang['admin']['usernotfound'] = 'Brukeren ble ikke funnet';
$lang['admin']['passwordchange'] = 'Vennligst oppgi et nytt passord';
$lang['admin']['recoveryemailsent'] = 'E-post sendt til lagret adresse. Vennligst sjekk i din innboks for videre instruksjoner.';
$lang['admin']['errorsendingemail'] = 'En feil oppstod under sending av eposten. Kontakt din nettstedsadministrator.';
$lang['admin']['passwordchangedlogin'] = 'Passordet ble endret. Vennligst logg inn ved &aring; benytte den nye p&aring;loggingsinformasjonen.';
$lang['admin']['nopasswordforrecovery'] = 'Ingen e-postadresse er satt for denne brukeren. Passordgjenoppretting er ikke mulig. Kontakt nettstedsadministratoren.';
$lang['admin']['lostpw'] = 'Har du glemt ditt passord?';
$lang['admin']['lostpwemailsubject'] = '[%s] tilbakestilling av passord';
$lang['admin']['lostpwemail'] = 'Du mottar denne e-posten fordi en foresp&oslash;rsel har blitt gjort for &aring; endre [%s] passordet knyttet til denne kontoen for brukeren (%s). Hvis du vil tilbakestille passordet for denne kontoen er det bare &aring; klikke p&aring; linken nedenfor eller lime den inn i url-feltet p&aring; din favoritt nettleser:
% s

Hvis du mener dette er feil eller du angrer, kan du trygt overse denne e-postmeldingen, og ingenting vil bli endret.';
$lang['admin']['qca'] = 'P0-536849115-1307983495210';
$lang['admin']['utma'] = '156861353.1601900021.1316967209.1316973032.1316983320.3';
$lang['admin']['utmz'] = '156861353.1316967209.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none)';
$lang['admin']['utmb'] = '156861353.3.10.1316984459';
$lang['admin']['utmc'] = '156861353';
?>