<?php
/* $Id$ */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Sekmadienis', 'Pirmadienis', 'Antradienis', 'Trečiadienis', 'Ketvirtadienis', 'Penktadienis', 'Šeštadienis');
$month = array('Sausio', 'Vasario', 'Kovo', 'Balandžio', 'Gegužio', 'Birželio', 'Liepos', 'Rugpjūčio', 'Rugsėjo', 'Spalio', 'Lapkričio', 'Gruodžio');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = ' %Y m. %B %d d.  %H:%M';
$timespanfmt = '%s d., %s val., %s min. ir %s s.';

$strAPrimaryKey = 'Stulpeliui %s sukurtas PIRMINIS raktas';
$strAbortedClients = 'Atmestos jungtys';
$strAbsolutePathToDocSqlDir = 'Prašome nurodyti absoliutų kelią iki docSQL katalogo darbinėje stotyje';
$strAccessDenied = 'Jungtis neįmanoma';
$strAccessDeniedExplanation = 'phpMyAdmin nepavyko prisijungti prie MySQL darbinės stoties (jungtis atmesta). Patikrinkite config.inc.php byloje nurodytus duomenis (darbinės stoties adresą, prisijungimo vardą ir slaptažodį) ir įsitikinkite ar jie sutampa su duomenimis gautais iš darbinės stoties administratoriaus.';
$strAction = 'Valdymo veiksmai';
$strAddAutoIncrement = 'Pridėti AUTO_INCREMENT reikšmę';
$strAddConstraints = 'Pridėti apribojimą';
$strAddDeleteColumn = 'Įterpti/Trinti stulpelius';
$strAddDeleteRow = 'Įterpti/Trinti požymio eilutę(es)';
$strAddDropDatabase = 'Pridėti DROP DATABASE';
$strAddIntoComments = 'Pridėti į komentarus';
$strAddNewField = 'Įterpti naują laukelį(ius)';
$strAddPriv = 'Įterpti privilegiją(as)';
$strAddPrivMessage = 'Jūs įterpėte privilegijas.';
$strAddPrivilegesOnDb = 'Sukurti privilegijas šiai duombazei';
$strAddPrivilegesOnTbl = 'Sukurti privilegijas šiai lentelei';
$strAddSearchConditions = 'Įterpkite paieškos sąlygas į "where" sakinį:';
$strAddToIndex = 'Įterpti indeksui papildomus &nbsp;%s&nbsp;stulpelį(ius)';
$strAddUser = 'Sukurti naują vartotoją';
$strAddUserMessage = 'Jūs sukūrėte naują vartotoją.';
$strAddedColumnComment = 'Pridėtas stulpelio komentaras';
$strAddedColumnRelation = 'Pridėtas stulpelio sąryšis';
$strAdministration = 'Administracija';
$strAffectedRows = 'Pakeista eilučių:';
$strAfter = 'Po %s';
$strAfterInsertBack = 'Sugrįžti į buvusį puslapį';
$strAfterInsertNewInsert = 'Įterpti sekančią naują eilutę';
$strAll = 'Viską';
$strAllTableSameWidth = 'rodyti visas lenteles vienodo pločio?';
$strAlterOrderBy = 'Pakeisti lentelės rūšiavimą pagal:';
$strAnIndex = 'Indeksas sukurtas %s stulpeliui';
$strAnalyzeTable = 'Analizuoti lentelę';
$strAnd = 'IR';
$strAny = 'Bet kurį(ią)';
$strAnyColumn = 'Bet kurį stulpelį';
$strAnyDatabase = 'Bet kurią duombazę';
$strAnyHost = 'Bet kurį prisijungimo adresą';
$strAnyTable = 'Bet kurią lentelę';
$strAnyUser = 'Bet kurį vartotoją';
$strArabic = 'Arabų';
$strArmenian = 'Armėnų';
$strAscending = 'Didėjimo tvarka';
$strAtBeginningOfTable = 'Lentelės pradžioje';
$strAtEndOfTable = 'Lentelės pabaigoje';
$strAttr = 'Atributai';
$strAutodetect = 'Automatinis nustatymas';
$strAutomaticLayout = 'Automatinis išdėstymas';

$strBack = 'Atgal';
$strBaltic = 'Baltų';
$strBeginCut = 'KIRPIMO PRADŽIA';
$strBeginRaw = 'RAW PRADŽIA';
$strBinary = 'Dvejetainis';
$strBinaryDoNotEdit = 'Dvejetainis - nekeisti';
$strBookmarkAllUsers = 'Leisti kitiems vartotojams naudotis šia žyme';
$strBookmarkDeleted = 'Nuoroda ištrinta.';
$strBookmarkLabel = 'Nuorodos Antraštė';
$strBookmarkOptions = 'Žymių parinktys';
$strBookmarkQuery = 'Sukurti nuoroda SQL-užklausai';
$strBookmarkThis = 'Sukurti nuorodą';
$strBookmarkView = 'Peržiūra';
$strBrowse = 'Peržiūrėti';
$strBrowseForeignValues = 'Naršyti išorines reikšmes';
$strBulgarian = 'Bulgarų';
$strBzError = 'phpMyAdmin negalėjo suspausti lentelės struktūros atvaizdį (dump), nes šioje php versijoje neveikia Bz2 modulis. Rekomenduojame phpMyAdmin konfigūracinėje byloje <code>$cfg[\'BZipDump\']</code> direktyvą prilyginti <code>FALSE</code>. Atnaujinkite savo php versiją, jeigu norite naudotis Bz2 moduliu. Detalesnė informacija: %s.';
$strBzip = '"bzip"';

$strCSVOptions = 'CSV parinktys';
$strCannotLogin = 'Neprisijungia prie MySQL darbinės stoties';
$strCantLoad = 'negalima įkrauti %s plėtinio,<br />pasitikrinkite php parinktis';
$strCantLoadRecodeIconv = 'Nepavyko užkrauti <em>iconv</em> arba <em>recode</em> plėtinių, reikalingų koduotės kovertavimui. Suteikite PHP teises naudotis šiais išplėtimais arba išjunkite phpMyAdmin koduotės konvertavimą. ';
$strCantRenameIdxToPrimary = 'Indeksą pervadinti PIRMINIU nepavyko!';
$strCantUseRecodeIconv = 'Kraunant plėtinių pranešimus, nepavyko pasinaudoti <em>iconv</em> arba <em>libiconv</em> arba <em>recode_string</em> funkcijomis. Pasitkrinkite PHP parinktis. ';
$strCardinality = 'Elementų skaičius';
$strCarriage = 'Grįžimo į eilutės pradžią simbolis(CR): \\r';
$strCaseInsensitive = 'simbolių registras nesvarbus';
$strCaseSensitive = 'simbolių registras svarbus';
$strCentralEuropean = 'Centrinės Europos';
$strChange = 'Redaguoti';
$strChangeCopyMode = 'Sukurti naują vartotoją su tom pačiom privilegijom ir ...';
$strChangeCopyModeCopy = '... palikti seną vartotoją.';
$strChangeCopyModeDeleteAndReload = ' ... pašalinti seną vartotoją iš vartotojų lentelės ir poto perkrauti privilegijas';
$strChangeCopyModeJustDelete = ' ... pašalinti seną vartotoją iš vartotojų lentelės.';
$strChangeCopyModeRevoke = ' ... panaikinti visas privilegijas iš seno vartotojo ir poto jį pašalinti.';
$strChangeCopyUser = 'Pakeisti prisijungimo informaciją / Kopijuoti vartotojo duomenis';
$strChangeDisplay = 'Pasirinkite lauką, kurį norite peržiūrėti';
$strChangePassword = 'Pakeisti slaptažodį';
$strCharset = 'Koduotė';
$strCharsetOfFile = 'Simbolių koduotė byloje:';
$strCharsets = 'Koduotės';
$strCharsetsAndCollations = 'Simbolių rinkiniai ir Palyginimai';
$strCheckAll = 'Pažymėti viską';
$strCheckDbPriv = 'Pažymėti duombazės privilegijas';
$strCheckOverhead = 'Patikrinti perkrautus';
$strCheckPrivs = 'Patikrinti privilegijas';
$strCheckPrivsLong = 'Patikrinti duombazės &quot;%s&quot; privilegijas.';
$strCheckTable = 'Patikrinti lentelę';
$strChoosePage = 'Pasirinkite puslapį redagavimui';
$strColComFeat = 'Stulpelių komentarų išvedimas';
$strCollation = 'Palyginimas';
$strColumn = 'Stulpelis';
$strColumnNames = 'Stulpelių vardai';
$strColumnPrivileges = 'Specifinės stulpelių privilegijos';
$strCommand = 'Komanda';
$strComments = 'Komentarai';
$strCompleteInserts = 'Visiškas įterpimas';
$strCompression = 'Kompresija';
$strConfigFileError = 'phpMyAdmin negalėjo perskaityti parinkčių bylos!<br />Tai galėjo nutikti jeigu <u>php</u> rado byloje vykdymo klaidą arba visai nerando bylos.<br />Prašome kreiptis į parinkčių bylą tiesiogiai (naudojantis nuoroda žemiau) ir perskaityti gautus <u>php</u> klaidų pranešimą(us). Daugeliu atveju vienoje/keletoje eilučių truksta kabučių ir/arba kabliataškio.<br />Jeigu išvedamas tuščias naršyklės langas - viskas tvarkoje (klaidų nepastebėta).';
$strConfigureTableCoord = 'Nustatykite lentelės %s koordinates';
$strConfirm = 'Ar TIKRAI norite atlikti šį veiksmą?';
$strConnections = 'Prisijungimai';
$strConstraintsForDumped = 'Apribojimai eksportuotom lentelėm';
$strConstraintsForTable = 'Apribojimai lentelei';
$strCookiesRequired = 'Sausainėliai(Cookies) turi būti priimami.';
$strCopyTable = 'Kopijuoti lentelė į (duombazė<b>.</b>lentelė):';
$strCopyTableOK = 'Letelė %s nukopijuota į %s.';
$strCopyTableSameNames = 'Negalima kopijuoti lentelės į ją pačią!';
$strCouldNotKill = 'phpMyAdmin negalėjo išjungti %s proceso. Gali būti jog jis jau užbaigė darbą.';
$strCreate = 'Sukurti';
$strCreateIndex = 'Sukurti indeksą &nbsp;%s&nbsp;stulpeliui(iams)';
$strCreateIndexTopic = 'Sukurti naują indeksą';
$strCreateNewDatabase = 'Sukurti naują duombazę';
$strCreateNewTable = 'Sukurti naują lentelę duombazėje %s';
$strCreatePage = 'Sukurti naują puslapį';
$strCreatePdfFeat = 'PDF bylos generavimas';
$strCreationDates = 'Sukūrimo/Atnaujinimo/Peržiūros datos';
$strCriteria = 'Kriterijai';
$strCroatian = 'Kroatų';
$strCyrillic = 'Kirylica';
$strCzech = 'Čekų';
$strCzechSlovak = 'Čekų-Slovakų';

$strDBComment = 'Duombazės komantaras: ';
$strDBGContext = 'Kontekstas';
$strDBGContextID = 'Konteksto ID';
$strDBGHits = 'Užklausos';
$strDBGLine = 'Eilutė';
$strDBGMaxTimeMs = 'Max laikas, ms';
$strDBGMinTimeMs = 'Min laikas, ms';
$strDBGModule = 'Modulis';
$strDBGTimePerHitMs = 'Laikas/Užklausa, ms';
$strDBGTotalTimeMs = 'Pilnas laikas, ms';
$strDanish = 'Danų';
$strData = 'Duomenys';
$strDataDict = 'Duomenų žodynas';
$strDataOnly = 'Tik duomenys';
$strDatabase = 'Duombazė ';
$strDatabaseExportOptions = 'Duombazės eksportavimo parinktys';
$strDatabaseHasBeenDropped = 'Duombazė %s ištrinta.';
$strDatabaseNoTable = 'Ši duombazė lentelių neturi!';
$strDatabaseWildcard = 'Duombazė (galima naudoti pakaitos simbolius):';
$strDatabases = 'duombazės';
$strDatabasesDropped = 'Sėkmingai pašalintos %s duombazės.';
$strDatabasesStats = 'Duombazių statistika';
$strDatabasesStatsDisable = 'Leisti statistiką';
$strDatabasesStatsEnable = 'Neleisti statistikos';
$strDatabasesStatsHeavyTraffic = 'Pastaba: jeigu duombazės statistika įjungta - apkrovimas tarp www ir MySQL darbinių stočių, gali padidėti aukščiau normos.';
$strDbPrivileges = 'Specifinės duombazių privilegijos';
$strDbSpecific = 'priklausantis nuo duombazės tipo';
$strDefault = 'Nutylint';
$strDefaultValueHelp = 'Nenaudokite išskyrimo simbolių ar kabučiu, nurodydami reikšmę pagal nutylėjimą. Naudokitės šiuo formatu: a';
$strDelOld = 'Šis puslapis turi nuorodų į lenteles, kurios jau neegzistuoja. Ar norite pašalinti šias nuorodas?';
$strDelayedInserts = 'Naudoti užlaikytus įterpimus';
$strDelete = 'Trinti';
$strDeleteAndFlush = 'pašalinti vartotojus ir perkrauti privilegijas.';
$strDeleteAndFlushDescr = 'Tai yra švariausias būdas, bet privilegijų perkrovimas gali šiek tiek užtrukti.';
$strDeleteFailed = 'Trynimo klaida!';
$strDeleteUserMessage = 'Jūs ištynėte vartotoją %s.';
$strDeleted = 'Eilutė ištrinta';
$strDeletedRows = 'Eilutės ištrintos:';
$strDeleting = 'Šaliname: %s';
$strDescending = 'Mažėjimo tvarka';
$strDescription = 'Paaiškinimas';
$strDictionary = 'žodynas';
$strDisabled = 'Išjungta';
$strDisplay = 'Atvaizduoti';
$strDisplayFeat = 'Išvedimo sąvybės';
$strDisplayOrder = 'Atvaizdavimo tvarka:';
$strDisplayPDF = 'Rodyti PDF vaizdą';
$strDoAQuery = 'Vykdyti "užklausą pagal pavyzdį" (pakaitos simbolis: "%")';
$strDoYouReally = 'Ar TIKRAI norite ';
$strDocu = '?';
$strDrop = 'Šalinti';
$strDropDB = 'Panaikinti duombazę %s';
$strDropSelectedDatabases = 'Pašalinti pažymėtas duombazes';
$strDropTable = 'Panaikinti lentelę';
$strDropUsersDb = 'Pašalinti duombazes, turinčias tokius pačius vardus kaip ir vartotojai.';
$strDumpComments = 'Įterpti stulpelių komentarus kaip vidinius SQL komentarus';
$strDumpSaved = 'Duombazės atvaizdis išsaugotas byloje %s.';
$strDumpXRows = 'Išvesti %s eilučių pradedant nuo %s eilutės.';
$strDumpingData = 'Sukurta duomenų kopija lentelei';
$strDynamic = 'dinaminis';

$strEdit = 'Redaguoti';
$strEditPDFPages = 'Redaguoti PDF puslapius';
$strEditPrivileges = 'Redaguoti privilegijas';
$strEffective = 'Efektyvus';
$strEmpty = 'Išvalyti';
$strEmptyResultSet = 'MySQL gražino tuščią rezultatų rinkinį (nėra eilučių).';
$strEnabled = 'Įjungta';
$strEnd = 'Pabaiga';
$strEndCut = 'KIRPIMO PABAIGA';
$strEndRaw = 'RAW PABAIGA';
$strEnglish = 'Anglų';
$strEnglishPrivileges = ' Pastaba: MySQL privilegijų pavadinimai pateikiami anglų kalba';
$strError = 'Klaida';
$strEstonian = 'Estų'; 
$strExcelEdition = 'Excel variantas';
$strExcelOptions = 'Excel parinktys';
$strExecuteBookmarked = 'Įvykdyti išsaugotą užklausą';
$strExplain = 'Paaiškinti';
$strExport = 'Eksportuoti';
$strExportToXML = 'Išvesti XML formatu';
$strExtendedInserts = 'Išplėstinis įterpimas';
$strExtra = 'Papildomai';

$strFailedAttempts = 'Nepavykę bandymai';
$strField = 'Laukas';
$strFieldHasBeenDropped = 'Laukas %s išmestas';
$strFields = 'Lauką';
$strFieldsEmpty = ' Tuščia laukų skaičiaus reikšmė! ';
$strFieldsEnclosedBy = 'Laukų reikšmės apskliaustos  simboliais';
$strFieldsEscapedBy = 'Laukų reikšmės baigiasi simboliu';
$strFieldsTerminatedBy = 'Laukų pabaigos žymė';
$strFileAlreadyExists = 'Byla pavadinimu %s jau yra darbinėje stotyje, pakeiskite norimą pavadinimą arba pasirinkite nustatymą leidžiantį perrašyti esančias bylas.';
$strFileCouldNotBeRead = 'Negalima perskaityti bylos';
$strFileNameTemplate = 'Failo pavadinimo šablonas';
$strFileNameTemplateHelp = 'Naudokite __DB__ duombazės pavadinimui, __TABLE__ lentelės pavadinimui ir funkcijos %sstrftime%s nustatymus laiko formatui. Išplėtimas bus pridedamas automatiškai. Kitas tekstas bus atvaizduotas kaip įvesta.';
$strFileNameTemplateRemember = 'atsiminti šabloną';
$strFixed = 'fiksuotas';
$strFlushPrivilegesNote = 'Pastaba: phpMyAdmin gauna vartotojų teises tiesiai iš MySQL privilegijų lentelės. Šiose lentelėse nurodytos teisės gali skirtis nuo parinkčių bylose nurodytų teisių. Todėl %sperkraukite teises%s, jeigu norite tęsti. ';
$strFlushTable = 'Išvalyti lentelę ("FLUSH")';
$strFormEmpty = 'Trūksta reikšmės formoje !';
$strFormat = 'Formatas';
$strFullText = 'Tekstus rodyti pilnai';
$strFunction = 'Funkcija';

$strGenBy = 'Generavo:';
$strGenTime = 'Atlikimo laikas';
$strGeneralRelationFeat = 'Pagrindinės sąryšių sąvybės';
$strGeorgian = 'Gruzinų';
$strGerman = 'Vokiečių';
$strGlobal = 'globalus';
$strGlobalPrivileges = 'Globalios teisės';
$strGlobalValue = 'Globali reikšmė';
$strGo = 'Vykdyti';
$strGrantOption = 'Suteikti';
$strGrants = 'Leisti';
$strGreek = 'Graikų';
$strGzip = '"gzipped"';

$strHasBeenAltered = 'išplėsta.';
$strHasBeenCreated = 'sukurta.';
$strHaveToShow = 'Pasirinkite bent vieną stulpelį išvedimui';
$strHebrew = 'Žydų';
$strHome = 'Pradinis';
$strHomepageOfficial = 'Oficialus phpMyAdmin tinklapis';
$strHomepageSourceforge = 'Parsisiųsti phpMyAdmin iš Sourceforge tinklapio';
$strHost = 'Darbinė stotis';
$strHostEmpty = 'Tuščias prisijungimo adresas!';
$strHungarian = 'Vengrų';

$strId = 'ID';
$strIdxFulltext = 'Fulltext';
$strIfYouWish = 'Jei pageidaujate pakrauti keletą lentelės stulpelių, sudarykite laukų sąrašą atskirtą kabliataškiais.';
$strIgnore = 'Ignoruoti';
$strIgnoringFile = 'Ignoruojama byla %s';
$strImportDocSQL = 'Importuoti docSQL bylas';
$strImportFiles = 'Importuoti bylas';
$strImportFinished = 'Importavimas baigtas';
$strInUse = 'šiuo metu naudojama';
$strIndex = 'Indeksas';
$strIndexHasBeenDropped = 'Indeksas %s panaikintas';
$strIndexName = 'Indekso vardas&nbsp;:';
$strIndexType = 'Indekso tipas&nbsp;:';
$strIndexes = 'Indeksai';
$strInnodbStat = 'InnoDB būsena';
$strInsecureMySQL = 'Jūsų parinkčių byloje yra nurodyti standartiniai nustatymai (pvz: root vartotojas be slaptažožio). Taip sutinkinta MySQL darbinė stotis yra nesaugi, bei gali būti atvira įsilaužimams, todėl rekomenduojame pakeisti šias parinktis.';
$strInsert = 'Įterpti';
$strInsertAsNewRow = 'Įterpti naują įrašą';
$strInsertNewRow = 'Įterpti naują eilutę';
$strInsertTextfiles = 'Įterpti duomenis iš tekstinio failo į lentelę';
$strInsertedRowId = 'Įterptos eilutės id:';
$strInsertedRows = 'Įterptą eilučių:';
$strInstructions = 'Instrukcijos';
$strInternalNotNecessary = '* Galite nenaudoti vidinių sąryšių, jeigu jie jau apibrėžti InnoDB.';
$strInternalRelations = 'Vidiniai sąryšiai';
$strInvalidName = '"%s" rezervuotas žodis, Jūs negalite šio žodžio naudoti kaip duombazės, lentelės arba laukelio vardo.';

$strJapanese = 'Japonų';
$strJumpToDB = 'Pereiti į &quot;%s&quot; duombazę.';
$strJustDelete = 'tik pašalinti vartotojus iš privilegijų lentelės.';
$strJustDeleteDescr = 'Kol nėra perkrautos privilegijos, &quot;pašalinti&quot; vartotojai gali prisijungti prie MySQL darbinės stoties.';

$strKeepPass = 'Nekeisti slaptažodžio';
$strKeyname = 'Raktinis žodis';
$strKill = 'Stabdyti procesą';
$strKorean = 'Korėjiečių';

$strLaTeX = 'LaTeX';
$strLaTeXOptions = 'LaTeX nustatymai';
$strLandscape = 'Peizažinis';
$strLatexCaption = 'Lentelės antraštė';
$strLatexContent = 'Lentelės __TABLE__ turinys';
$strLatexContinued = '(tęsinys)';
$strLatexContinuedCaption = 'Lentelės antraštė (tęsinys)';
$strLatexIncludeCaption = 'Įterpti lentelės antraštę';
$strLatexLabel = 'Pavadinimo raktas';
$strLatexStructure = 'Lentelės __TABLE__ struktūra';
$strLength = 'Ilgis';
$strLengthSet = 'Ilgis/reikšmės*';
$strLimitNumRows = 'Eilučių skaičius puslapyje';
$strLineFeed = 'Eilutės: \\n';
$strLines = 'Eilučių';
$strLinesTerminatedBy = 'Eilutės pabaigos žymė';
$strLinkNotFound = 'Sąryšis nerastas';
$strLinksTo = 'Sąryšis su';
$strLithuanian = 'Lietuvių';
$strLoadExplanation = 'Geriausias metodas yra parinktas pagal nutylėjimą, tačiau jį galite pasikeisti, jeigu metodas pagal nutylėjimą neveikia.';
$strLoadMethod = 'LOAD metodas';
$strLocalhost = 'Lokali darbinė stotis';
$strLocationTextfile = 'Tekstiniai SQL užklausų failai';
$strLogPassword = 'Slaptažodis:';
$strLogServer = 'Darbinė stotis';
$strLogUsername = 'Vartotojo vardas:';
$strLogin = 'Įsiregistruoti';
$strLoginInformation = 'Prisijungimo informacija';
$strLogout = 'Išsiregistruoti';

$strMIME_MIMEtype = 'MIME tipai';
$strMIME_available_mime = 'Galimi MIME-tipai';
$strMIME_available_transform = 'Galimos transformacijos';
$strMIME_description = 'Paaiškinimas';
$strMIME_file = 'Bylos pavadinimas';
$strMIME_nodescription = 'Ši transformacija neturi paaiškinimo.<br />Klauskite autoriaus ką %s daro.';
$strMIME_transformation = 'Naršyklės transformacija';
$strMIME_transformation_note = 'Norėdami gauti pilną sąrašą galimų transformacijų ir jų MIME tipų transformacijų, spauskite %stransformacijos paaiškinimą%s';
$strMIME_transformation_options = 'Transformacijos nustatymai';
$strMIME_transformation_options_note = 'Prašome įvesti transformacijos nustatymų reikšmes naudodami tokį įvedimo formatą: \'a\',\'b\',\'c\'...<br />Jeigu tarp šių reikšmių prisireiks panaudoti viršutinį vertikalų pasvirą brūkšnį ("\") arba viengubą kabutę ("\'"), naudokite viršutinį vertikalų pasvirą brūkšnį prieš šiuos simbolius (pvz: \'\\\\xyz\' ar \'a\\\'b\').';
$strMIME_without = 'MIME tipai atspausdinti pasvirusiu šriftu neturi atskirų transformacijos funkcijos.';
$strMaximumSize = 'Didžiausias dydis: %s%s';
$strMissingBracket = 'Trūksta skliausto(ų)';
$strModifications = 'Pakeitimai išsaugoti';
$strModify = 'Keisti';
$strModifyIndexTopic = 'Keisti indeksą';
$strMoreStatusVars = 'Daugiau būsenos kintamųjų';
$strMoveTable = 'Perkelti lentelė į (duombazė<b>.</b>lentelė):';
$strMoveTableOK = 'Lentelė %s perkelta į %s.';
$strMoveTableSameNames = 'Negalima perkelti lentelės į ją pačią!';
$strMultilingual = 'daugiakalbis';
$strMustSelectFile = 'Pasirinkite bylą, kurią norite įterpti.';
$strMySQLCharset = 'MySQL koduotė';
$strMySQLReloaded = 'MySQL procesas perkrautas.';
$strMySQLSaid = 'MySQL atsakymas: ';
$strMySQLServerProcess = 'MySQL %pma_s1% procesas darbinėje stotyje %pma_s2%. Įregistruotas vartotojas %pma_s3%';
$strMySQLShowProcess = 'Rodyti procesus';
$strMySQLShowStatus = 'Rodyti MySQL aplinkos būseną';
$strMySQLShowVars = 'Rodyti MySQL sistemos kintamuosius';

$strName = 'Pavadinimas';
$strNext = 'Sekantis';
$strNo = 'Ne';
$strNoDatabases = 'Nėra duombazių';
$strNoDatabasesSelected = 'Nepažymėjote duombazės.';
$strNoDescription = 'Aprašymo nėra';
$strNoDropDatabases = '"DROP DATABASE" komandos įvykdyti negalima.';
$strNoExplain = 'Praleisti SQL užklausos aiškinimą';
$strNoFrames = 'phpMyAdmin draugiškesnis su <b>rėmelius</b> palaikančiomis naršyklėmis.';
$strNoIndex = 'Neaprašyti indeksai!';
$strNoIndexPartsDefined = 'Neaprašytos indekso dalys!';
$strNoModification = 'Nėra pakeitimų';
$strNoOptions = 'Šis formatas neturi nustatymų';
$strNoPassword = 'Nėra slaptažodžio';
$strNoPermission = 'Nėra teisių išsaugoti bylai %s.';
$strNoPhp = 'be PHP kodo';
$strNoPrivileges = 'Nėra privilegijų';
$strNoQuery = 'Nėra SQL užklausos!';
$strNoRights = 'Neturite pakankamai teisių';
$strNoSpace = 'Nėra pakankamai vietos išsaugoti bylai %s.';
$strNoTablesFound = 'Duombazėje nerasta lentelių.';
$strNoUsersFound = 'Nerasta vartotojo(ų).';
$strNoUsersSelected = 'Nepasirinkote vartotojo.';
$strNoValidateSQL = 'Praleisti SQL užklausos tikrinimą';
$strNone = 'Nėra';
$strNotNumber = 'Įveskite skaičių!';
$strNotOK = 'Negerai';
$strNotSet = 'Lentelė <b>%s</b> nerasta arba nenurodyta %s byloje';
$strNotValidNumber = ' netinkamas eilutės numeris!';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s atitikmuo(enys) lentelėje <i>%s</i>';
$strNumSearchResultsTotal = '<b>Viso:</b> <i>%s</i> atitikmuo(enys)';
$strNumTables = 'Lentelės';

$strOK = 'Gerai';
$strOftenQuotation = 'Dažnai kartojasi kabutės. Pasirinktinai reiškia, kad tik  char ir varchar laukai yra uždaryti kabutėmis.';
$strOperations = 'Veiksmai';
$strOptimizeTable = 'Optimizuoti';
$strOptionalControls = 'Pasirinktinai. Kontroliuojama kaip skaitoma, rašoma specialiuosius simbolius.';
$strOptionally = 'Pasirinktinai';
$strOptions = 'Parinktys';
$strOr = 'Arba';
$strOverhead = 'Perteklius';
$strOverwriteExisting = 'Perrašyti esančias bylas';

$strPHP40203 = 'Jūs naudojate PHP 4.2.3 versiją, kurioje yra rimta klaida, susiijusi su daugiabaičiais stringais (mbstring). Daugiau informacijos rasite PHP klaidų pranešime Nr.19404. <strong>NEREKOMENDUOJAME naudoti šios PHP versijos su phpMyAdmin</strong>.';
$strPHPVersion = 'PHP versija';
$strPageNumber = 'Puslapis:';
$strPaperSize = 'Lapo dydis';
$strPartialText = 'Tekstus rodyti dalinai';
$strPassword = 'Slaptažodis';
$strPasswordChanged = 'Vartotojo %s slaptažodis sėkmingai pakeistas.';
$strPasswordEmpty = 'Tuščias slaptažodis!';
$strPasswordNotSame = 'Slaptažodžiai nesutampa!';
$strPdfDbSchema = 'Duombazės "%s" schema - %s puslapis';
$strPdfInvalidPageNum = 'Nenurodytas PDF puslapio numeris!';
$strPdfInvalidTblName = 'Lentelė "%s" neegzistuoja!';
$strPdfNoTables = 'No tables';
$strPerHour = 'per valandą';
$strPerMinute = 'per minutę';
$strPerSecond = 'per sekundę';
$strPhoneBook = 'telefonų knyga';
$strPhp = 'PHP kodas';
$strPmaDocumentation = 'phpMyAdmin\'o dokumentacija';
$strPmaUriError = 'Reikia parinkčių byloje įrašyti <tt>$cfg[\'PmaAbsoluteUri\']</tt> reikšmę!';
$strPortrait = 'Portretinis';
$strPos1 = 'Pradžia';
$strPrevious = 'Praėjęs';
$strPrimary = 'Pirminis';
$strPrimaryKey = 'Pirminis raktas';
$strPrimaryKeyHasBeenDropped = 'Panaikintas pirminis raktas';
$strPrimaryKeyName = 'Pirminio rakto pavadinimas turi būti "PRIMARY"!';
$strPrimaryKeyWarning = '("PRIMARY" <b>yra vienintelis</b> pirminio rakto tipas!)';
$strPrint = 'Spausdinti';
$strPrintView = 'Spausdinti struktūrą';
$strPrintViewFull = 'Spausdinti vaizdą (su pilnai tekstais)';
$strPrivDescAllPrivileges = 'Įtraukti visas teises, išskyrus GRANT.';
$strPrivDescAlter = 'Leisti keisti jau egzistuojančių lenetelių struktūrą.';
$strPrivDescCreateDb = 'Leisti kurti naujas duombazes ir lenteles.';
$strPrivDescCreateTbl = 'Leisti kurti naujas lenteles.';
$strPrivDescCreateTmpTable = 'Leisti kurti laikinas lenteles.';
$strPrivDescDelete = 'Leisti šalinti duomenis.';
$strPrivDescDropDb = 'Leisti šalinti duombazes ir lenteles.';
$strPrivDescDropTbl = 'Leisti šalinti lenteles.';
$strPrivDescExecute = 'Leisti vykdyti išsaugotas procedūras; Negalioja šioje MySQL versijoje.';
$strPrivDescFile = 'Leisti įterpti ir eksportuoti duomenis iš bylų.';
$strPrivDescGrant = 'Leisti įterpti naujus vartotojus, bei prisikirti privilegijas, neperkraunant privilegijų lentelės.';
$strPrivDescIndex = 'Leisti įterpti ir modifikuoti indeksus.';
$strPrivDescInsert = 'Leisti įterpti ir modifikuoti duomenis.';
$strPrivDescLockTables = 'Leisti užrakinti lenteles procesų metu.';
$strPrivDescMaxConnections = 'Riboti prisijungimų kiekį per valandą.';
$strPrivDescMaxQuestions = 'Riboti užklausų kiekį per valandą';
$strPrivDescMaxUpdates = 'Riboti komandų (kurios vienaip ar kitaip modifikuoja lenteles ar duombazes) kiekį per valandą.';
$strPrivDescProcess3 = 'Leisti išjungti kitų vartotojų procesus.';
$strPrivDescProcess4 = 'Leisti peržiūrėti procesų sąraše pilną užklausų sąrašą.';
$strPrivDescReferences = ' Negalioja šioje MySQL versijoje.';
$strPrivDescReload = 'Leisti perkrauti darbinę stotį, bei išvalyti laikinąją atmintį (cache).';
$strPrivDescReplClient = 'Leisti vartotojo užklausas dėl atstatymo master / slave darbinių stočių.';
$strPrivDescReplSlave = 'Reikalinga atstatyti slave darbinei stočiai';
$strPrivDescSelect = 'Leisti skaityti duomenis.';
$strPrivDescShowDb = 'Suteikti prieigą prie visų duombazių.';
$strPrivDescShutdown = 'Leisti išjungti serverį.';
$strPrivDescSuper = 'Leisti prisijungti, kai viršytas prisijungimų kiekis; Reikalinga daugumai administratoriaus darbų, tokių kaip globalių reikšmių modifikavimui ar vartotojų atjungimui.';
$strPrivDescUpdate = 'Leisti modifikuoti duomenis.';
$strPrivDescUsage = 'Be teisių.';
$strPrivileges = 'Privilegijos';
$strPrivilegesReloaded = 'Teisės sėkmingai perkrautos.';
$strProcesslist = 'Procesų sąrašas';
$strProperties = 'Nustatymai';
$strPutColNames = 'Stulpelių pavadinimus įrašyti pirmoje eilutėje';

$strQBE = 'SQL&nbsp;užklausa';
$strQBEDel = 'Pakeičiant';
$strQBEIns = 'Įterpiant';
$strQueryFrame = 'Užklausų langas';
$strQueryFrameDebug = 'Klaidų tikrinimo informacija';
$strQueryFrameDebugBox = 'Aktyvūs užklausų formos kintamieji:\nDuombazė: %s\nLentelė: %s\nStotis: %s\n\nDabar naudojami užklausų formos kintamieji:\nDuombazė: %s\nLentelė: %s\nStotis: %s\n\nAtidariusio lango adresas: %s\nFreimseto adresas: %s.';
$strQueryOnDb = 'SQL-užklausa duombazėje <b>%s</b>:';
$strQuerySQLHistory = 'SQL užklausų istorija';
$strQueryStatistics = '<b>Užklausų statistika</b>: nuo paleidimo dienos buvo išsiųsta %s užklausų į serverį.';
$strQueryTime = 'Užklausa užtruko %01.4f sek.';
$strQueryType = 'Užklausos tipas';
$strQueryWindowLock = 'Nekeisti šios užklausos už aktyvaus lango ribų.';

$strReType = 'Įveskite dar kartą';
$strReceived = 'Gauta';
$strRecords = 'Viso įrašų:';
$strReferentialIntegrity = 'Patikrinti sąryšių vientisumą:';
$strRelationNotWorking = 'Nėra PMA lentelių, kurios leidžia dirbti su jungtinėmis MySQL lentelėmis. %sPaaiškinimas%s.';
$strRelationView = 'Peržiūrėti sąryšius';
$strRelationalSchema = 'Ryšių schema';
$strRelations = 'Sąryšiai';
$strReloadFailed = 'MySQL procesą perkrauti nepavyko.';
$strReloadMySQL = 'Perkrauti MySQL procesą';
$strReloadingThePrivileges = 'Perkraunamos privilegijos';
$strRememberReload = 'Neužmirškite perkrauti serverį.';
$strRemoveSelectedUsers = 'Pašalinti pažymėtus vartotojus';
$strRenameTable = 'Pervadinti lentelę į';
$strRenameTableOK = 'Lentelė %s pervadinta į %s';
$strRepairTable = 'Redaguoti';
$strReplace = 'Pakeisti';
$strReplaceNULLBy = 'Pakeisti NULL į';
$strReplaceTable = 'Pakeisti lentelės turinį failo duomenimis ';
$strReset = 'Atstatyti į pradinę būseną';
$strResourceLimits = 'Išteklių apribojimai';
$strRevoke = 'Panaikinti';
$strRevokeAndDelete = 'Panaikinti visas aktyvias vartotojų privilegijas ir pašalinti vartotojus.';
$strRevokeAndDeleteDescr = 'Kol nėra perkrautos privilegijos, vartotojai dar turės privilegiją USAGE.';
$strRevokeGrant = 'Panaikinti GRANT privilegiją';
$strRevokeGrantMessage = 'Jūs panaikinote GRANT privilegiją %s';
$strRevokeMessage = 'Jūs panaikinote privilegijas %s';
$strRevokePriv = 'Panaikinti privilegijas';
$strRowLength = 'Eilutės ilgis';
$strRowSize = 'Eilutės dydis';
$strRows = 'Eilutės';
$strRowsFrom = 'eilučių pradedant nuo';
$strRowsModeFlippedHorizontal = 'horizontalūs (pasukti pavadinimai)';
$strRowsModeHorizontal = 'horizontaliai';
$strRowsModeOptions = 'išdėstant  %s pakartoti antraštes kas %s įrašų';
$strRowsModeVertical = 'vertikaliai';
$strRowsStatistic = 'Eilučių statistika';
$strRunQuery = 'Vykdyti užklausą';
$strRunSQLQuery = 'Vykdyti SQL sakinius duombazėje <strong>%s</strong>';
$strRunning = 'adresu %s';
$strRussian = 'Rusų';

$strSQL = 'SQL';
$strSQLExportType = 'Eksporto tipas';
$strSQLOptions = 'SQL nustatymai';
$strSQLParserBugMessage = 'Klaidą SQL interpretatoriuje. Prašome patikrinti  ar SQL užklausoje teisingai naudojamos kabutės. Kita, galima klaida, jog Jūs bandote atsiųsti dvejetainius (binary) duomenis neapskliaustus kabutėmis. Taip pat Jūs galite pabandyti įvykdyti savo užklausą iš MySQL konsolės. MySQL serverio išvesta informacija apie klaidą (jeigu tokių bus) gali padėti Jums nustatyti klaidos priežastį. Jeigu užklausa sėkmingai įvykdoma konsolėje, o SQL interpretatorius vistiek išveda pranešimus apie klaidas, prašome supaprastinite savo SQL užklausą ir perduodamų duomenų kiekį užklausoje ir praneškite apie klaidą programos kūrėjams su žemiau pateikiama informacija:';
$strSQLParserUserError = 'Klaida SQL užklausoje. Žemiau išvestas MySQL serverio pranešimas (jeigu toks yra), turėtų padėti Jums nustatyti klaidos priežastį';
$strSQLQuery = 'SQL užklausa';
$strSQLResult = 'SQL rezultatas';
$strSQPBugInvalidIdentifer = 'Klaidingas vardas';
$strSQPBugUnclosedQuote = 'Trūksta uždaromosios kabutės';
$strSQPBugUnknownPunctuation = 'Klaidinga skyryba';
$strSave = 'Išsaugoti';
$strSaveOnServer = 'Išsaugoti serveryje, kataloge pavadinimu %s';
$strScaleFactorSmall = 'Dydžio matas yra per mažas norint sutalpinti vaizdą viename lape.';
$strSearch = 'Paieška';
$strSearchFormTitle = 'Paieška duombazėje';
$strSearchInTables = 'Lentelės(ių) viduje:';
$strSearchNeedle = 'Paieškos žodis(iai) arba reikšmė(ės) (pakaitos simbolis: "%"):';
$strSearchOption1 = 'bent vienas iš žodžių';
$strSearchOption2 = 'visi žodžiai';
$strSearchOption3 = 'ištisa frazė';
$strSearchOption4 = 'kaip reguliarųjį išsireiškimą';
$strSearchResultsFor = 'Paieškos rezultatai frazei "<i>%s</i>" %s:';
$strSearchType = 'Rasti:';
$strSecretRequired = 'Nustatymų byloje nurodykite slaptą frazę (blowfish_secret).';
$strSelect = 'Išrinkti';
$strSelectADb = 'Pasirinkite duombazę';
$strSelectAll = 'Išrinkti visas(us)';
$strSelectFields = 'Pasirinkti laukus (nors vieną)';
$strSelectNumRows = 'užklausą vykdoma';
$strSelectTables = 'Pasirinkite lenteles';
$strSend = 'Išsaugoti į failą';
$strSent = 'Siųsta';
$strServer = 'Serveris %s';
$strServerChoice = 'Pasirinkti serverį';
$strServerStatus = 'Veikimo informacija';
$strServerStatusUptime = 'MySQL serverio veikimo trukmė: %s. Serveris pradėjo veikti: %s.';
$strServerTabProcesslist = 'Procesai';
$strServerTabVariables = 'Kintamieji';
$strServerTrafficNotes = '<b>Serverio apkrovimas</b>: šiose lentelėse saugoma statistinė informacija apie MySQL serverio apkrovimą nuo paleidimo dienos.';
$strServerVars = 'Serverio kintamieji ir nustatymai';
$strServerVersion = 'Serverio versija';
$strSessionValue = 'Sesijos reikšmė';
$strSetEnumVal = 'Jeigu laukelio tipas yra "enum" arba "set", tuomet duomenų reikšmes reikia įvesti naudojant šį formatą: \'a\',\'b\',\'c\'...<br />. Jeigu jums reikia įrašyti dešininį įžambųjį brūkšnį ("\") arba kabutes("\'"), tuomet prieš šios simbolius reikia papildomo dešininio įžambaus brūkšnio (pavyzdžiui: \'\\\\xyz\' or \'a\\\'b\').';
$strShow = 'Rodyti';
$strShowAll = 'Rodyti viską';
$strShowColor = 'Rodyti spalvą';
$strShowCols = 'Rodyti stulpelius';
$strShowDatadictAs = 'Duomenų žodyno formatas';
$strShowFullQueries = 'Rodyti pilnas užklausas';
$strShowGrid = 'Rodyti tinklelį';
$strShowPHPInfo = 'Rodyti PHP informaciją';
$strShowTableDimension = 'Rodyti lentelių dydžius';
$strShowTables = 'Rodyti lentelės';
$strShowThisQuery = ' Rodyti šią užklausą vėl ';
$strShowingRecords = 'Rodomi įrašai';
$strSimplifiedChinese = 'Supaprastinta Kiniečių';
$strSingly = '(pavieniui)';
$strSize = 'Dydis';
$strSort = 'Rūšiuoti';
$strSortByKey = 'Rūšiuoti pagal raktą';
$strSpaceUsage = 'Vietos naudojimas';
$strSplitWordsWithSpace = 'Žodžiai atskirti tarpo simboliu (" ").';
$strStatCheckTime = 'Paskutinis patikrinimas';
$strStatCreateTime = 'Sukurta';
$strStatUpdateTime = 'Paskutinis atnaujinimas';
$strStatement = 'Parametrai';
$strStatus = 'Statusas';
$strStrucCSV = 'Duomenys CSV formatu';
$strStrucData = 'Struktūra ir duomenys';
$strStrucDrop = 'Panaikinti-įterpti lentelę';
$strStrucExcelCSV = 'Duomenys ekselio CSV formatu';
$strStrucOnly = 'Tik struktūrą';
$strStructPropose = 'Analizuoti lentelės struktūrą';
$strStructure = 'Struktūra';
$strSubmit = 'Siųsti';
$strSuccess = 'Jūsų SQL užklausa sėkmingai įvykdyta';
$strSum = 'Sumos';
$strSwedish = 'Švedų';
$strSwitchToTable = 'Pereiti į lentelės kopiją';

$strTable = 'Lentelė';
$strTableComments = 'Lentelės komentarai';
$strTableEmpty = 'Tuščias lentelės vardas!';
$strTableHasBeenDropped = 'Lentelė %s panaikinta';
$strTableHasBeenEmptied = 'Lentelės reikšmės %s ištuštintos';
$strTableHasBeenFlushed = 'Lentelės buferis  %s išvalytas';
$strTableMaintenance = 'Lentelės diagnostika';
$strTableOfContents = 'Turinys';
$strTableOptions = 'Lentelės parinktys';
$strTableStructure = 'Sukurta duomenų struktūra lentelei';
$strTableType = 'Lentelės tipas';
$strTables = '%s lentelė(s)';
$strTblPrivileges = 'Specifinės lentelių privilegijos';
$strTextAreaLength = ' Tai yra jo ilgis,<br /> šis laukelis neredaguojamas ';
$strThai = 'Tailando';
$strTheContent = 'Jūsų failo turinys įterptas.';
$strTheContents = 'Failo turinys įterpus panaikina išrinktos lentelės ar stulpelio turinį, bet išlieka unikalūs ir pirminiai indeksai.';
$strTheTerminator = 'Laukų pabaigos žymė.';
$strThisHost = 'Dabartinis serveris';
$strThisNotDirectory = 'Tai ne katalogas';
$strThreadSuccessfullyKilled = '%s buvo sėkmingai išjungtas.';
$strTime = 'Laikas';
$strToggleScratchboard = 'įjungti scratchboard';
$strTotal = ' iš viso ';
$strTotalUC = 'Viso';
$strTraditionalChinese = 'Tradicinė Kiniečių';
$strTraffic = 'Apkrovimas';
$strTransformation_application_octetstream__download = 'Įšvesti nuorodą dvejetainių lauko duomenų atsisiuntimui. Pirmas parametras - dvejetainių lauko duomenų bylos pavadinimas. Antras parametras - galimas lentelės eilutės lauko turinčio bylą pavadinimas. Jeigu pateiksite antrą parametrą, ištrinkite pirmojo parametro reikšmę.';
$strTransformation_image_jpeg__inline = 'Parodo aktyvų mažinį; nustatymai: plotis,aukštis pikseliais (išsaugo originalų santykį)';
$strTransformation_image_jpeg__link = 'Išvedama nuoroda į šį paveikslėlį (tiesioginis blob atsisiuntimas ir pan.).';
$strTransformation_image_png__inline = 'Žr. image/jpeg: vidų';
$strTransformation_text_plain__dateformat = 'Pasiima TIME, TIMESTAMP arba DATETIME laukų reikšmes ir apipavidalina jas pagal naudojamą lokalų datos formatą. Pirmas parametras reikšmė valandomis, kuri bus pridėta prie laiko žymės (nutylint: 0). Antras parametras tai kitoks datos apipavidalinimo formatas pateiktas pagal strftime() fukciją.';
$strTransformation_text_plain__external = 'LINUX VARTOTOJAMS: Paleidžiama išorinė aplikacija ir duomenys imami iš standartinio įvedimo. Išvedama iš aplikacijos gauta informacija. Nutylint: bus Tidy korektiškam HTML kodo išvedimui. Saugumo sumetimais Jūs turite paredaguoti libraries/transformations/text_plain__external.inc.php bylą ir įvesti tas aplikacijas, kurias naudosite. Pirmas parametras yra leidžiamų aplikacijų kiekis, kurias naudosite. Antras parametras yra specifiniai aplikacijų raktai. Jeigu trečias parametras lygus 1, tai išvedama informacija bus apdorota su htmlspecialchars() (nutylint: reikšmė lygi 1). Jeigu ketvirtas parametras lygus 1, tai išvedimo lentelės celė turės atributą NOWRAP, tam kad išvedama būtų atvaizduota be perkėlimų į kitas eilutes (nutylint: reikšmė lygi 1).';
$strTransformation_text_plain__formatted = 'Išsaugo originalų lauko apipavidalinimą. Nevykdomas išvengimas.';
$strTransformation_text_plain__imagelink = 'Gražinamas paveikslėlis ir nuoroda į įvedimo lauke įrašytą bylos pavadinimą; argumentai: prefiksas (pvz "http://domain.com/"), plotis (pikseliais), aukštis (pikseliais).';
$strTransformation_text_plain__link = 'Gražinama nuoroda į įvedimo lauke įrašytą bylos pavadinimą; argumentai: prefiksas (pvz "http://domain.com/"), nuorodos pavadinimas.';
$strTransformation_text_plain__substr = 'Rodoma tik dalis teksto. Pirmas parametras nurodo išvedamo teksto pradžią (nutylint: 0). Antrasis parametras nurodo išvedamo teksto kiekį. Jeigu antras parametras nenurodytas tai bus išvestas visas tekstas. Trečiasis parametras nurodo kurios raidės bus prijungtos prie išvedimo teksto (nutylint: ...).';
$strTransformation_text_plain__unformatted = 'Rodo HTML kodą kaip HTML esybes. Nerodomas HTML apipavidalinimas.';
$strTruncateQueries = 'Trumpinti rodomas užklausas';
$strTurkish = 'Turkų';
$strType = 'Tipas';

$strUkrainian = 'Ukrainiečių';
$strUncheckAll = 'Nepažymėti visus(as)';
$strUnicode = 'Unicodas';
$strUnique = 'Unikalus';
$strUnknown = 'nežinoma';
$strUnselectAll = 'Nepažymėti visus(as)';
$strUpdComTab = 'Informaciją, kaip atnaujinti Column_comments lentelę, galite rasti dokumentacijoje.';
$strUpdatePrivMessage = 'Jūs pakeitėte privilegijas  %s.';
$strUpdateProfile = 'Papildyti profilį:';
$strUpdateProfileMessage = 'Profilis papildytas.';
$strUpdateQuery = 'Atnaujinti užklausą';
$strUpgrade = 'Rekomenduojame atnaujint %s iki %s ar vėlesnės versijos.';
$strUsage = 'Išnaudota';
$strUseBackquotes = 'Lentelių ir laukų vardams naudoti šias kabutes ` `';
$strUseHostTable = 'Naudoti Host lentelę';
$strUseTables = 'Naudoti lenteles';
$strUseTextField = 'Naudokite teksto įvedimo lauką';
$strUseThisValue = 'Naudokite šią reikšmę';
$strUser = 'Vartotojas';
$strUserAlreadyExists = 'Vartotojas %s jau yra!';
$strUserEmpty = 'Tuščias vartotojo vardas!';
$strUserName = 'Vartotojo vardas';
$strUserNotFound = 'Privilegijų lentelėje pasirinktas vartotojas nerastas.';
$strUserOverview = 'Vartotojų peržiūra';
$strUsers = 'Vartotojai';
$strUsersDeleted = 'Pažymėti vartotojai sėkmingai pašalinti.';
$strUsersHavingAccessToDb = 'Vartotojai turintys priėjimą prie &quot;%s&quot;';

$strValidateSQL = 'Patikrinti SQL užklausą';
$strValidatorError = 'Neveikia SQL interpretatorius. Prašome patikrinkite ar yra suinstaliuoti visi privalomi php moduliai, nurodyti %sdokumentacijoje%s.';
$strValue = 'Reikšmė';
$strVar = 'Kintamasis';
$strViewDump = 'Peržiūrėti lentelės struktūros atvaizdį';
$strViewDumpDB = 'Sukurti, peržiūrėti duombazės atvaizdį';
$strViewDumpDatabases = 'Peržiūrėti duombazių išrašą';

$strWebServerUploadDirectory = 'web serverio katalogas atsiuntimams';
$strWebServerUploadDirectoryError = 'Nepasiekimas nurodytas www-serverio katalogas atsiuntimams.';
$strWelcome = 'Jūs naudojate %s';
$strWestEuropean = 'Vakarų Europos';
$strWildcard = 'pakaitos simbolis';
$strWindowNotFound = 'Tikslo langas neatnaujintas. Galbūt Jūs uždarėte pagrindinį langą arba Jūsų naršyklė blokuoja atnaujinimus tarp langų dėl nustatyto saugumo.';
$strWithChecked = 'Pasirinktas lenteles:';
$strWritingCommentNotPossible = 'Negalimas komentavimas';
$strWritingRelationNotPossible = 'Negalimas sąryšis';
$strWrongUser = 'Neteisingas vartotojo vardas arba slaptažodis. Priėjimas uždraustas.';

$strXML = 'XML';

$strYes = 'Taip';

$strZeroRemovesTheLimit = 'Pastaba: nėra jokių apribojimų jeigu reikšmė nurodyta lygi 0 (nuliui).';
$strZip = '"zip"';

 = 'Cannot connect: invalid settings.';  //to translate
$strDropDatabaseStrongWarning = 'You are about to DESTROY a complete database!';  //to translate
$strAddHeaderComment = 'Add custom comment into header (\\n splits lines)';  //to translate
$strNeedPrimaryKey = 'You should define a primary key for this table.';  //to translate
$strIgnoreInserts = 'Use ignore inserts';  //to translate
?>
