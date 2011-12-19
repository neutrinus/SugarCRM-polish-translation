<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Professional Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/products/sugar-professional-eula.html
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2007 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/
/*********************************************************************************
 * pl_pl.lang.php,v for SugarCRM 4.5.1b 
 * Translator: Krzysztof Morawski
 * All Rights Reserved.
 * Any bugs report welcome: krzysiek<at>kmmgroup<dot>pl
 * Contributor(s): ______________________________________..
 ********************************************************************************/
$mod_strings = array(
'help'=>array(
	'package'=>array(
			'create'=>'Wprowadź <b>Nazwę</b> dla pakietu.  Musi ona składać się ze znaków alfanumerycznych i nie zawierać spacji. (Przykład: HR_Zarządzanie)<br/><br/> Możesz podać <b>Autora</b> i <b>Opis</b>, jako informację o pakiecie. <br/><br/>Kliknij <b>Zapisz</b> aby utworzyć pakiet.',
			'modify'=>'Właściwości i możliwe działania na <b>pakiecie</b> pojawiają się <b>tutaj</b>. Możesz zmodyfikować <b>Nazwisko</b>, <b>Autora</b> oraz  <b>Opis</b> pakietu, tak jak widok  pakietu, jak również wszystkie jego moduły.<br><br>Możesz również <b>Publikować</b> i <b>Zamieszczać</b> pakiet, jak również <b>Eksportować</b> presonalizacje w pakiecie.',		
			'name'=>'To jest <b>Nazwa</b> bieżącego modułu. <br/><br/>Nazwa, którą wprowadzasz musi być złożona ze znaków alfanumerycznych, rozpoczynać się od litery i nie zawierać spacji. (Przykład: HR_Management)',
			'author'=>'To jest określenie <b>Autora</b>, które jest wyświetlane podczas instalacji, jako podmiotu tworzącego pakiet. Autor może być zarówno osobą, jak i organizacją.',
			'description'=>'To jest <b>Opis</b> pakietu wyświetlany podczas instalacji.',
			'publishbtn'=>'Kliknij <b>Publikuj</b>, aby zapisać wszystkie zmiany i utworzyć plik .zip, który jest instalacyjną wersją pakietu.<br><br>Użyj <b>Ładowacza Modułów</b> aby załadować plik .zip i zainstalować pakiet.',
			'deploybtn'=>'Kliknij <b>Zamieść</b> aby zapisać wprowadzone dane i zainstalować pakiet, zawierający wszystkie moduły.',
			'duplicatebtn'=>'Kliknij <b>Duplikuj</b>, aby skopiować zawartość pakietu do nowego i aby wyświetlić nowy pakiet. <br/><br/>Nazwa dla nowego pakietu zostanie wygenerowana automatycznie, poprzez dodanie numeru do nazwy pakietu, z którego został utworzony. Możesz zmienić nazwę nowego pakietu przez wprowadzenie nowej <b>Nazwy</b> i kliknięcie <b>Zachowaj</b>.',			
			'exportbtn'=>'Kliknij <b>Eksport</b> aby utworzyć plik .zip, zawierający personalizacje użyte przy tworzeniu pakietu.<br><br> Wygenerowany plik zawiera kod personalizacji dla pakietu i nie jest plikiem instalacyjnym pakietu.<br><br>Użyj <b>Ładowacza Modułów</b> aby zaimportować plik zip, i umożliwić użycie personalizacji w nowych pakietach.',
			'deletebtn'=>'Kliknij <b>Usuń</b> aby usunać pakiet i wszystkie pliki powiązane z nim.',
			'savebtn'=>'Kliknij <b>Zapisz</b> aby zapisać wszystkie wprowadzone dane powiązane z pakietem.',
			'existing_module'=>'Kliknij <b>ikonę modułu</b>,aby edytować wartości i dostosować pola, zależności i wyglądy, należące do tego modułu.',
			'new_module'=>'Kliknij <b>Nowy moduł</b>, aby utworzyć nowy moduł dla tego pakietu.',
			'key'=>'Ten 5-cio literowy, alfanumeryczny <b>Klucz</b> będzie używany jako przedrostek w każdym katalogu, nazwie klasy  i tabeli, dla każdego modułu tego pakietu.<br><br>Klucz jest używany w celu osiągnięcia unikalnych nazw dla tabel.',
			'readme'=>'Możesz dodać tekst <b>Readme</b> do tego pakietu.<br><br>Będzie on dostępny podczas instalacji.',
	),
	'main'=>array(
		
	
	),
	'module'=>array(

		'create'=>'Podaj <b>Nazwę</b> nowego modułu. <b>Etykieta</b>, którą wprowadzisz pojawi się w Zakładce Nawigacyjnej. <br/><br/>Wyświetlanie Zakładki Nawigacyjnej uzyskasz przez zaznaczenie pola <b>Zakładka Nawigacyjna</b>.<br/><br/>Zaznacz pole <b>Bezpieczeństwo Zespołu</b> by uzyskać możliwość dostępu do wybranych rekordów w obrębie Zespołu. <br/><br/>Następnie wybierz typu modułu, który chcesz utworzyć. <br/><br/>Wybierz Szkic. Każdy z wzorów zawiera określony zestaw pól, takich jak predefiniowane wyglądy, używane jako wyjściowe dla modułu. <br/><br/>Kliknij <b>Zachowaj</b> aby utworzyć moduł.',




		'modify'=>'Możesz zmienić właściwości modułu lub dostosować <b>Pola</b>, <b>Zależności</b> i  <b>Wyglądy</b>, powiązane z tym modułem.',
		'importable'=>'Zaznaczenie pola <b>Importowalny</b> właczy możliwość imoportu dla tego modułu.<br><br>Link do kreatora importu pojawi się w panelu skrótów w module. Właściwości kreatora importu pozwalają wprowadzać dane z zewnętrzynch źrodeł do własnego modułu.',
		'team_security'=>'Zaznaczenie pola <b>Bezpieczeństwo zespołu</b> włączy funkcję bezpieczeństwa zespołu dla tego modułu.  <br/><br/>Jeśli funkcja bezpieczeństwa zespołów jest włączona dla tego modułu, pola wyborów dla zespołów pojawią się w widokach tego modułu.',
		'reportable'=>'Zaznaczenie tego pola umożliwi wykonanie raportów z udziałem tego modułu.',
		'assignable'=>'Zaznaczenie tego pola umożliwi przydzielanie rekordów w tym module do poszczególnych użytkowników.',
		'has_tab'=>'Zaznaczenie pola <b>Zakładka nawigacyjna</b> wyświetli zakładkę nawigacyjną w module.',
		'acl'=>'Zaznaczenie tego pola włączy funkcję kontroli dostępu w tym module, również bezpieczeństwa dla pól.',
		'studio'=>'Zaznaczenie tego pola zezwoli administratorom dostosowywać ten moduł w Studio.',
		'audit'=>'Zaznaczenie tego pola włączy logowanie zmian w tym module. Zmiany w poszczególnych polach będą rejestrowane i administratorzy będą mogli zobaczyć tę historię.',
		'viewfieldsbtn'=>'Kliknij <b>Zobacz pola</b> aby zobaczyć pola powiązane z tym modułem i w celu tworzenia lub edycji własnych pól.',
		'viewrelsbtn'=>'Kliknij <b>Zależności</b> aby zobaczyć zależności powiązane z tym modułem w celu tworzenia lub edycji zależności.',
		'viewlayoutsbtn'=>'Kliknij <b>Zobacz widoki</b> aby zobaczyć widoki modułu i ustawić własny układ pól w widokach modułu.',
		'duplicatebtn'=>'Kliknij <b>Duplikuj</b> aby skopiować właściwości modułu do nowo tworzonego modułu i wyświetlić go. <br/><br/> Nazwa dla nowego modułu jest generowana automatycznie, poprzez dodanie numeru na końcu nazwy modułu pierwotnego.<br><br>Możesz zmienić nazwę nowego modułu, wprowadzając nową <b>Nazwę</b> i klikając  <b>Zachowaj</b>.',
		'deletebtn'=>'Kliknij <b>Usuń</b>, aby usunąć ten moduł.',
		'name'=>'To jest <b>Nazwa</b> edytowanego modułu. <br/><br/>Nazwa, którą wprowadzasz musi skladać się ze znaków alfanumerycznych, zaczynać od litery i nie zawierać spacji. (Przykład: HR_Management)',
		'label'=>'To jest <b>Etykieta</b>, która pojawiać się będzie na zakładce nawigacyjnej modułu. ',
		'savebtn'=>'Kliknij <b>Zachowaj</b>, aby zachować dane powiązane z modułem.',
		'type_basic'=>'<b>Podstawowy</b> wzorzec, ma  zdefiniowane domyślnie takie nazwy pól jak nazwa, przydzielone do, zespół, data utworzenia i opis.',
		'type_company'=>'Wzorzec <b>Firma</b> zawiera pola specyfinczne dla określenia organizacji, jak np. Nazwa firmy, typ działalności, adres fakturowania.<br/><br/>Używaj tego wzorca do tworzenia modułów podobnych do modułu Klienci.',
		'type_issue'=>'Wzorzec <b>Cecha</b> zawiera pola typowe dla modułów spraw i śledzenia błędów, takie jak numer, status, priorytet, opis.<br/><br/>Używaj tego wzorca do tworzenia modułów podobnych do modułu Sprawy, lub Śledzenie błędów.',
		'type_person'=>'Wzorzec <b>Osoba</b> zawiera pola typowe dla określenia osoby, takie jak pozdrowienie, tytuł, nazwisko, adres i numer telefonu.<br/><br/>Używaj tego wzorca do tworzenia modułów podobnych do modułu kontakty, czy wizytówki.',
		'type_sale'=>'Wzorzec <b>Sprzedaż</b> zawiera pola typowe dla modułu określającego temat - szansę sprzedaży, takie jak pochodzenie wizytówki/kontaktu, poziom zaawansowania, kwotę transakcji i prawdopodobieństwo. <br/><br/>Używaj tego wzorca do tworzenia modułów podobnych do standardowego modułu Tematu.',
		'type_file'=>'Wzorzec <b>Plik</b> zawiera pola typowe dla modułu określającego pracę na dokumentach, takie jak nazwa pliku, typ dokument lub data publikacji.<br><br>Używaj tego wzorca do tworzenia modułów podobnych do modułu zarządzania dokumenty.',
	),
	'dropdowns'=>array(
		'default' => 'Wszystkie <b>listy rozwijalne</b> występujące w aplikacj są tutaj wymienione.<br><br>Listy te mogą zostać użyte do tworzenia rozwijalnych list w dowolnym module.<br><br>Aby wprowadzić zmiany w istniejącej liście, kliknij na jej nazwę.<br><br>Kliknij <b>Dodaj listę rozwijalną</b> aby utworzyć nową.',
		'editdropdown'=>'Listy rozwijalne mogą być używane dla standardowych i utworzonych własnych pól w dowolnym module.<br><br>Wprowadź <b>Nazwę</b> dla listy rozwijalnej.<br><br>Jeżeli w aplikacji są zainstalowane pakiety językowe, możesz określić <b>Język</b> elementów listy.<br><br>W polu <b>Nazwa Elementu</b> wprowadź nazwę dla opcji w liscie rozwijalnej.  Nazwa ta nie będzie widoczna na liście rozwijalnej widocznej dla użytkowników.<br><br>W polu <b>Wyświetl etykietę</b> wprowadź etykietę, która pojawi się na liście rozwijalnej.<br><br>Po wprowadzeniu nazwy elementu i etykiety, kliknij  <b>Dodaj</b>, aby dodać nowy elemnet do listy.<br><br>W celu zmiany kolejności elementów listy, przeciągnij i upuść elementy w porządanym miejscu.<br><br>Aby edytować etykietę elementu, kliknij na ikonę<b>Edytuj</b>, i wprowadź nową etykietę. Aby usunąć element z listy rozwijalnej, kliknij na ikonie <b>Usuń</b>.<br><br>Aby cofnąć zmiany wprowadzone w etykietach, kliknij <b>Cofnij</b>.  Aby przywrócić usunięte uprzednio zmiany, kliknij <b>Przywróć</b>.<br><br>Kliknij <b>Zachowaj</b> aby zatwierdzić aktualny wygląd list rozwijalnych.',

	),
	'subPanelEditor'=>array(
		'modify'	=> 'Wszystkie pola, które mogą zostać wyświetlone w <b>Subpanelach</b> pojawią się tutaj.<br><br><b>Domyślna</b> kolumna zawiera pola, które są wyświetlone w Subpanelu.<br/><br/><b>Ukryta</b> kolumna zawiera pola, które mogą zostać dodane do kolumny Domyślnej.',
		'savebtn'	=> 'Kliknij <b>Zachowaj i zamieść</b>, aby zachować zmiany wykonane przez Ciebie i uczynić je aktywnymi.',
		'historyBtn'=> 'Kliknij <b>Zobacz historię</b> jeśli chcesz przejrzeć i przywrócić poprzednio zapisany wygląd z historii.',
		'Hidden' 	=> 'Pola <b>Ukryte</b> nie pojawią się w subpanelu.',
		'Default'	=> '<b>Domyślne</b> pojawią się w subpanelu.',

	),
	'listViewEditor'=>array(
		'modify'	=> 'Wszystkie pola, które mogą zostać wyświetlone w <b>Widoku listy</b> pojawią się tutaj.<br><br>Kolumna <b>Domyślne</b> zawiera te pola, które są wyświetlone w Widoku listy domyślnie.<br/><br/>Kolumna <b>Dostępne</b> zawiera pola, które mogą zostać wybrane przez użytkownika w celu utworzenia własnego widoku listy. <br/><br/>Kolumna <b>Ukryte</b> zawiera pola, które mogą zostać dodane do kolumn Domyślne lub Dostępne.',
		'savebtn'	=> 'Kliknij <b>Zachowaj i zamieść</b> aby zapisać zmiany i uaktywnić je w module.',
		'historyBtn'=> 'Kliknij <b>Zobacz historię</b>, aby zobaczyć historię zmian, lub przywrócić porzednio zachowany widok.',
		'Hidden' 	=> 'Pola <b>Ukryte</b> nie są obecnie dostępne dla użytkowników w widoku listy.',
		'Available' => 'Pola <b>Dostępne</b> nie są widoczne domyślnie, ale mogą zostać dodane do widoku listy przez użytkowników.',
		'Default'	=> 'Pola <b>Domyślne</b>, widoczne w widoku listy nie są edytowalne przez użytkowników.'
	),
	'searchViewEditor'=>array(
		'modify'	=> 'Wszystkie pola, które mogą zostać wyświetlone w formularzu <b>Wyszukaj</b> pojawią się tutaj.<br><br>Kolumna <b>Domyślne</b> zawiera pola, które będą wyświetlone w formularzu Wyszukaj.<br/><br/>Kolumna <b>Ukryte</b> zawiera pola dostępne dla Ciebie, jako administratora do dodania do formularza Wyszukaj.',
		'savebtn'	=> 'Kliknięcie <b>Zachowaj i zamieść</b> zapisze wszystkie zmiany i uaktywni je',
		'Hidden' 	=> 'Pola <b>Ukryte</b> nie pojawią się w "Wyszukaj".',
		'historyBtn'=> 'Kliknij <b>Zobacz historię</b>, aby zobaczyć lub przywrócić poprzednio zachowany wygląd.',
		'Default'	=> 'Pola <b>Domyślne</b> pojawią się w "Wyszukaj".',
	),
	'layoutEditor'=>array(
		'defaultdetailview'=>'Obszar <b>Widoku</b> zawiera  pola, które są obecnie wyświetlone w <b>Widoku szczegółowym</b>.<br/><br/><b>Skrzynka narzędziowa</b> zawiera <b>Kosz</b>, oraz elementy widoku, które mogą zostać dodane do widoku.<br><br>Zmian w widoku dokonuje się przeciągając i upuszczając elementy i pola pomiędzy <b>Skrzynkką</b> a <b>Widokiem</b> i samym widokiem.<br><br>Aby usunąć pola z widoku, przeciągnij pola do <b>Kosza</b>. Pola będą wtedy dostępne w Skrzynce narzędziowej i możliwe do dodania do widoku.',
		'defaultquickcreate'=>'Obszar <b>Widoku</b> zawiera pola, które są obecnie wyświetlone w formularzu <b>Szybkie tworzenie</b>.<br><br>Formularz ten pojawia się w subpanelach dla modułu, gdy przycisk Utwórz jest klilknięty.<br/><br/><b>Skrzynka narzędziowa</b> zawiera <b>Kosz</b>, pola i elementy widoku, które mogą zostać dodane do widoku.<br><br>Zmian w widoku dokonuje się przeciągając i upuszczając elementy i pola pomiędzy <b>Skrzynkką</b> a <b>Widokiem</b> i samym widokiem.<br><br>Aby usunąć pola z widoku, przeciągnij pola do <b>Kosza</b>. Pola będą wtedy dostępne w Skrzynce narzędziowej i możliwe do dodania do widoku.',
		//this defualt will be used for edit view
		'default'	=> 'Obszar <b>Widoku</b> zawiera  pola, które są obecnie wyświetlone w <b>Widoku szczegółowym</b>.<br/><br/><b>Skrzynka narzędziowa</b> zawiera <b>Kosz</b>, oraz elementy widoku, które mogą zostać dodane do widoku.<br><br>Zmian w widoku dokonuje się przeciągając i upuszczając elementy i pola pomiędzy <b>Skrzynkką</b> a <b>Widokiem</b> i samym widokiem.<br><br>Aby usunąć pola z widoku, przeciągnij pola do <b>Kosza</b>. Pola będą wtedy dostępne w Skrzynce narzędziowej i możliwe do dodania do widoku.',
		'saveBtn'	=> 'Kliknij <b>Zachowaj</b>, aby zabezpieczyć zmiany dokonane w wyglądzie widoku od ostatniego zapisu.<br><br>Zmiany nie będą wyświetlone w module, dopóki nie zostaną zamieszczone.',
		'historyBtn'=> 'Kliknij <b>Zobacz historię</b>, aby zobaczyć lub przywrócić poprzednio zachowany widok.',
		'publishBtn'=> 'Kliknięcie <b>Zachowaj i zamieść</b> zapisze wszystkie zmiany od ostatniego zapisu i uaktywni je w module. Widok będzię niezwłocznie wyświetlony w module.',
		'toolbox'	=> '<b>Skrzynka narzędziowa</b> zawiera <b>Kosz</b>, dodatkowe elementy widoku i zestaw dostępnych pól do dodania do widoku.<br/><br/>Elementy widoku i pola w Skrzynce mogą  być przeciągane i upuszcznane na widoku i vice versa.<br><br>Elementami widoku są <b>Panele</b> i <b>Wiersze</b>. Dodanie nowego wiersza lub panelu do widoku wprowadza dodatkowe miejsce dla pól do widoku.<br/><br/>Przeciągnięcie i upuszczenie pól w obrębie Skrzynki lub widoku na miejscu, zajmowanym już przez inne pole, spowoduje zamianę pozycji obu pól.<br/><br/>Pole <b>Wypełniacz</b> tworzy pustą przestrzeń w widoku, tam, gdzie zostanie umieszczone.',
		'panels'	=> 'Obszar <b>Widoku</b> przedstawia podgląd tego, jak będzie wyglądał w module, gdy zmiany zostaną zapisane i zamieszczone.<br/><br/>Możesz zmienić pozycję pól, wierszy i paneli, przez przeciągnięcie ich w porządane miejsce.<br/><br/>Usuwanie elementów następuje przez przeciągnięcie i upuszczenie ich do <b>Kosza</b> w Skrzynce narzędziowej. Dodawanie elementów do widoku odbywa się w odwrotnej kolejności.',
		'delete'	=> 'Przeciągnij i upuść dowolny element, aby usunąć go z widoku',
		'property'	=> 'Edytuj etykietę, dla tego pola. <br/><b>Tab Order</b> controls in what order the tab key switches between fields.',
	),
	'fieldsEditor'=>array(
		'default'	=> 'Nazwy <b>Pól</b>, dostępnych w tym module są wymienione tutaj.<br><br>Własne pola utworzone w module są wymienione poniżej pól dostępnych domyślnie.<br><br>W celu edycji pola, kliknij <b>Nazwę pola</b>.<br/><br/>Aby utworzyć pole, kliknij <b>Dodaj pole</b>.',
		'mbDefault'=>'Nazwy <b>Pól</b>, dostępnych w tym module są wymienione tutaj.<br><br>Aby utworzyć własne pole z wzorca, kliknij na jego nazwie.<br><br>Aby utworzyć nowe, kliknij <b>Dodaj pole</b>. Etykieta inne właściwości utworzonego pola mogą być edytowane później przez kliknięcie na nazwy pola.<br><br>Gdy moduł jest już zamieszczony, pola utworzone za pomocą Budowniczego Modułów wyglądają jak pola standardowe w Studio.',
        'addField'	=> 'Wybierz <b>Typ danych</b> dla nowego pola. Typ, który wybierzesz, określa rodzaj znaków wprowadzanych do pola. Na przykład tylko liczby całkowite mogą zostać wprowadzone do pola typu integer.<br><br> Określ <b>Nazwę</b> dla pola.  Nazwa musi składać się ze znaków alfanumerycznych  i nie zawierać żadnych spacji. Podkreślenia są dozwolone.<br><br> <b>Etykieta wyświetlana</b> to etykieta widoczna w widokach modułu. <b>Etykieta systemowa</b> jest używana do określenia pola w kodzie.<br><br> Zależenie od wybranego dla pola typu danych, niektóre lub wszystkie z wymienionych właściwości mogą być określone dla pola:<br><br> <b>Tekst pomocy</b> pojawia się okresowo, gdy użytkownik przeciągnie wskaźnik nad polem.<br><br> <b>Tekst komentarza</b> jest widziany tylko w Studio &/lub w Budowniczym Modułów i może opisywać przeznaczenie pola, przydatne dla administratorów<br><br> <b>Wartość domyślna</b> jest widoczna w polu.  Użytkownicy mogą wprowadzić nową wartość, lub użyć domyślnej.<br><br> Zaznacz opcję <b>Masowa aktualizacja</b>, by móc skorzystać z funkcji masowej aktualizacji dla danego pola.<br><br>Wartość <b>Maksymalny rozmiar</b> determinuje największą ilość znaków, które mogą zostać wprowadzone do pola.<br><br> Zaznacz opcję <b>Pole wymagane</b>, aby dane pole było konieczne do wypełnienia. Wtedy trzeba będzie zawsze wprowadzić jakąś wartość dla pola, aby móc zapisać rekord zawierający to pole.<br><br> Wybierz opcję <b>Raportowalne</b> aby pole mogło być użyte w filtrach, oraz aby dane były wyświetlane w Raportach.<br><br> Wybierz opcję <b>Audytu</b>, aby móc śledzić zmiany danych pola Dzienniku zmian.<br><br>Dodatkowe właściwości mogą być określane dla poszczególnych typów danych.',
		'editField' => '<b>Etykieta wyświetlana</b> pola może być zmieniana. Inne właściwości pola - nie.<br><br>Kliknij <b>Klonuj</b>, aby utworzyć nowe pole z takimi samymi właściwościami.',
        'mbeditField' => '<b>Etykieta wyświetlana</b> pola wzorca  pola może być zmieniana. Inne właściwości pola - nie.<br><br>Kliknij <b>Klonuj</b>, aby utworzyć nowe pole z takimi samymi właściwościami.<br><br>Aby usunąć pole wzorca, tak aby nie było widoczne w module, usuń je z odpowiedniego <b>Widoku</b>.'

	),
	'exportcustom'=>array(
	    'exportHelp'=>'Zmiany własne dokonane za pomocą modułu Studio w tej instancji mogą zostać spakowane i zamieszczone w innej. <br><br>Wprować <b>Nazwę pakietu</b>.  W pakiecie możesz zamieścić informacje o <b>Autorze</b> i <b>Opis</b>.<br><br>Wybierz moduł(y),przeznaczone do eksportu,zawierające zmiany własne. Możesz wybrać tylko moduły zawierające te zmiany.)<br><br>Kliknij <b>Eksport</b>, aby stworzyć plik .zip pakietu zawierającego zmiany własne.  Plik  .zip może zostać załadowany do innej instancji za pomocą <b>Ładowacza modułów</b>.',
	    'exportCustomBtn'=>'Kliknij <b>Eksport</b>, aby utworzyć plik .zip pakietu zawierającego dostosowania, które chcesz wyeksportować.',
	    'name'=>'<b>Nazwa</b> pakietu zostanie wyświetlona w Ładowaczu modułów, po tym jak pakiet zostanie przygotowany do instalacji w Studio.',
	    'author'=>'Określenie <b>Autor</b> to nazwa podmiotu tworzącego pakiet. Autorem może być zarówno osoba jak i firma.<br><br>Autor zostanie wyświetlony w Ładowaczu Modułów, po tym, jak pakiet zostanie przygotowany do instalacji w Studio.',
	    'description'=>'<b>Opis</b> pakietu zostanie wyświetlony w Ładowaczu Modułów, po tym, jak pakiet zostanie przygotowany do instalacji w Studio.',
	),

	'studioWizard'=>array(
		'mainHelp' 	=> 'Witamy w strefie <b>Narzędzia Programisty</b1>. <br/><br/>W tej strefie możesz używać narzędzi, aby tworzyć i zarządzać standardowymi i dostosowywanymi modułami i polami.',
		'studioBtn'	=> 'Użyj <b>Studio</b> aby dostosować zainstalowane moduły, poprzez zmianę aranżacji pól, wybór, które z nich mają być dostępne i aby tworzyć własne pola danych.',
		'mbBtn'		=> 'Użyj <b>Budowniczego Modułów</b> aby tworzyć moduły.',
		'sugarPortalBtn' => 'Użyj <b>Edytora portalu Sugar</b> do zarządznia i zmieniania portalu Sugar.',
		'dropDownEditorBtn' => 'Użyj <b>Edytora list rozwijalnytch</b> aby dodać i edytować globalne listy rozwijalne.',
		'appBtn' 	=> 'Tryb aplikacji działa, gdy chcesz dostosować różne właściwości programu, takie jak np. jak dużo TPS raportów jest wyświetlanych na stronie głównej.',
		'backBtn'	=> 'Powrót do poprzedniego kroku.',
		'studioHelp'=> 'Użyj <b>Studio</b> aby określić co i jak informacje zostaną wyświetlone w modułach.',
		'moduleBtn'	=> 'Kliknij, aby edytować ten moduł.',
		'moduleHelp'=> 'Wybierz element modułu, który chcesz edytować.',
		'fieldsBtn'	=> 'Zdecyduj, które informacje są zapisywane w module, poprzez sterowanie <b>Polami</b> w module.<br/><br/>Tutaj możesz także edytować i tworzyć własne pola.',
		'labelsBtn' => 'Edytuj <b>Etykiety</b>, które są wyświetlane dla pól i innych tytułów w module.'	,
	    'relationshipsBtn' => 'Dodaj nową, lub obejrzyj istniejące <b>Zależności</b> dla modułu.' ,
		'layoutsBtn'=> 'Dostosuj <b>Wyglądy</b> modułu.  Wyglądy są innymi widokami modułu, zawierającego pola.<br><br>Możesz ustalić, które pola bedą widoczne i jak zostaną uszeregowane w każdym z wyglądów.',
		'subpanelBtn'=> 'Ustal, które pola pojawią się w  <b>Subpanelach</b> modułu.',
		'portalBtn' =>'Dostosuj <b>Wyglądy</b> modułu, które pojawią sie w <b>Portalu Sugar</b>.',
		'layoutsHelp'=> '<b>Wyglądy</b> modułu, które mogą być dostosowywane są pokazane tutaj<br><br>Wyglądy wyświetlają pola i ich zawartość<br><br>Kliknij na ikonie, aby wybrać wygląd do edycji.',
		'subpanelHelp'=> '<b>Subpanele</b> w module, które mogą być dostosowywane są widoczne tutaj.<br><br>Kliknij na ikonie, aby wybrać moduł do edycji.',
	'newPackage'=>'Kliknij <b>Nowy Pakiet</b> by utworzyć nowy pakiet.',
        'mbHelp'    => '<b>Witamy w Budowniczym Modułów.</b><br/><br/><b>Budowniczy Modułów</b> jest używany do tworzenia pakietów zawierających dostosowane przez Ciebie moduły, bazujące na standardowych, lub własnych modułach. <br/><br/>Aby rozpocząć, kliknij <b>Nowy Pakiet</b> w celu utworzenia nowego pakietu, lub wybierz pakiet do edycji.<br/><br/> <b>Pakiet</b> może być zbiorem własnych modułów, które są częścią jednego projektu. Pakiet może więc zawierać więcej niż jeden moduł własny, który może być połączony z dowolnym innym modułem w aplikacji. <br/><br/>Przykład: Możesz stworzyć pakiet, zawierający jeden moduł własny, który jest połączony ze standardowym modułem <b>Klienci</b>. lub  stworzyć kilka modułów, współpracujących ze sobą, jako projekt i będących zależnymi od modułów alikacji.',
        'exportBtn' => 'Kliknij  <b>Wyeksportuj dostosowania</b>, aby zbudować pakiet zawierający własne modyfikacje, stworzone w Studio, dla określonego modułu.',
	    'viewBtnEditView' => 'Dostosuj <b>Widok edycji</b> modułu.<br><br>Ten widok to formularz zawierający pola zbierające dane wprowadzanie przez użytkownika.',
	    'viewBtnDetailView' => 'Dostosuj <b>Widok szczegółowy</b> modułu.<br><br>Ten widok to formularz zawierający pola zbierające dane wprowadzanie przez użytkownika.',
		'viewBtnDashlet' => 'Dostosuj <b>Belki</b> modułu, zawierające belki widoku listy i wyszukiwania.<br><br> Belka będzie mogła być również dodana do strony głównej.',
	    'viewBtnListView' => 'Dostosuj <b>Widok listy</b> modułu.<br><br>Wynik wyszukiwania pojawi się w widoku listy.',
	    'searchBtn' => 'Dostosuj widok <b>Szukaj</b>.<br><br>Określ jakie pola mogą zostać użyte do filtrowania rekordów, które pojawią się w widoku listy.',
		'viewBtnQuickCreate' =>  'Dostosuj widok <b>Szybkie tworzenie</b>.<br><br>Formularz szybkiego tworzenia pojawia się w subpanelach i w module poczty.',
	    'searchHelp'=> 'Formularz <b>Szukaj</b>, który może zostać dostosowany pojawi się tutaj.<br><br>Formularz zawiera pola, służące do filtrowania rekordów.<br><br>Kliknij na ikonie, aby wybrać wygląd do edycji.',
	    'dashletHelp' =>'Wygląd <b>Belek</b>, który może zostać dostosowany pojawi się tutaj.<br><br>Belki są dostępne do dodawania na stronach modułu startowego.',
	    'DashletListViewBtn' =>'<b>Widok listy belek</b> wyświetla rekordy bazujące na filtrach wyszukiwania belek.',
	    'DashletSearchViewBtn' =>'Rekordy Filtrów widoku <b>Wyszukiwania Belek</b>.',
		'BasicSearchBtn' => 'Dostosuj formularz <b>Proste wyszukiwanie</b>, który pojawi się w zakładce "Proste wyszukiwanie" w obszarze wyszukiwania dla modułu.',
	    'AdvancedSearchBtn' => 'Dostosuj formularz <b>Wyszukiwanie zaawansowane</b>, który pojawi się w zakładce "Wyszukiwanie zaawansowane" w obszarze wyszukiwania dla modułu.',
	    'portalHelp' => 'Zarządzaj i dostosuj <b>Portal Sugar</b>.',
	    'SPUploadCSS' => 'Załaduj <b>Arkusz stylów</b> dla Portalu Sugar.',
	    'SPSync' => '<b>Synchronizuj</b> dostosowywane elementy z instancją Portalu Sugar.',
	    'Layouts' => 'Dostosuj <b>Wygląd</b> modułów portalu Sugar.',
	    'portalLayoutHelp' => 'Moduły w Portalu pojawiają się w tym obszarze.<br><br>Wybierz moduł, aby móc edytować <b>Wygląd</b>.',
		'relationshipsHelp' => 'Wszystkie <b>Zależności</b>, które istnieją pomiędzy modułami nadrzędnymi i podległymi pojawiają sie tutaj.<br><br><b>Nazwa</b> zależności jest generowana automatycznie przez system.<br><br><b>Moduł Nadrzędny</b> to moduł, do którego należa wszystkie zależności. Na przykład, wszystkie właściwości zależności, dla których moduł Klienci jest modułem nadrzędnym, są przechowywane w tabelach bazy danych dla modułu Klienci.<br><br>Kliknin wiersz w tabeli zależności, aby zobaczyć właściwości powiązane z nią.<br><br>Kliknij <b>Dodaj zależność</b> w celu utworzenia nowej zależności.<br><br>Zależności mogą być tworzone pomiędzy dowolnymi zamieszczonymi już modułami.',
        'relationshipHelp'=>'<b>Zależności</b> tworzą się pomiędzy modułem nadrzędnym i innym zamieszczonym modułem.<br><br> Zależności są przedstawione wizualnie jako subpanele i połączone pola w rekordach modułu.<br><br> Jeśli zależność już istnieje pomiędzy dwoma modułami, każda nowa zależność stworzona pomiędzy nimi nie będzie dodatkowo uwidoczniona.<br><br> Wybierz jedną z następujących zależności <b>Typ</b> dla modułu:<br><br> <b>Jeden-do-jednego</b> - oba rekordy w modułach będą zawierać połączone pola.<br><br> <b>Jeden-do-wielu</b> - Rekord modułu nadrzędnego będzie zawierał subpanel, a rekord modułu podrzędnego - połączone pole.<br><br> <b>Wielu-do-Wielu</b> - W rekordach obu modułów wyświetlą się subpanele.<br><br> Wybierz <b>Moduły połączone </b> dla zależności. <br><br> Jeżeli typ zależności jest wyrażony za pomocą subpaneli, wybierz widok subpaneli dla właściwego modułu.<br><br> Kliknij <b>Zachowaj</b>, aby utworzyć zależność. Raz utworzonej zależności nie można ani edytować ani usunąć.',
		'editDropDownBtn' => 'Edytuj globalną listę rozwijalną',
		'addDropDownBtn' => 'Dodaj nową globalną listę rozwijalną',
	),
	'fieldsHelp'=>array(
		'default'=>'<b>Pola</b> są w tym module wymienione po nazwie.<br><br>Wzorzec modułu zawiera predefiniowany zestaw pól.<br><br>Aby stworzyć nowe pole, kliknij <b>Dodaj pole</b>.<br><br>Aby edytować - kliknij <b>Nazwę pola</b>.<br/><br/>Po zamieszczeniu modułu, nowe pola utworzone w Budowniczym modułów, oraz pola wzorcowe są traktowane jako zwykłe pola w module Studio.',
	),
	'relationshipsHelp'=>array(
		'default'=>'<b>Zależności</b> stworzone pomiędzy modułami pojawią się tutaj.<br><br><b>Name</b> zależności jest generowana przez system.<br><br><b>Moduł nadrzędny </b> to moduł, do którego należą zależności. Ich właściwości są przechowywane w tabelach bazy danych, należących do modułu nadrzędnego.<br><br>Klikając na wiersz w tabeli zależności można oglądać i edytować właściwości przynależne do zależności.<br><br>Kliknij <b>Dodaj zależność</b>, aby utworzyć nową',
		'addrelbtn'=>'myszkę nad pomocą aby dodać zależność.',
		'addRelationship'=>'<b>Zależności</b> mogą być tworzone pomiędzy modułem i innym modułe dostosowywanym, lub już zamieszczonym.<br><br> Zależności są wyrażone wizualnie pomiędzy subpanelami i połączonymi polami w rekordach modułu.<br><br>Wybierz jedną z następujących <b>Typów</b> zależności dla modułu:<br><br> <b>Jeden-do-jednego</b> - Rekordy obu modułów zawierają połączone pola.<br><br> <b>Jeden-do-wielu</b> - Rekord modułu nadrzędnego będzie zawierał subpanel, a rekordy modułów połączonych - połączone pola.<br><br> <b>Wiele-do-wielu</b> - Rekordy obu modułów będą zawierały subpanele.<br><br> Wybierz <b>Połączone moduły</b> dla zależności. <br><br>Jeśli zależność jest skonstruowana z użyciem subpaneli, wybierz widok subpaneli dla właściwych modułów.<br><br> Kliknij <b>Zachowaj</b> aby utworzyć zależność.',
	),
	'labelsHelp'=>array(
		'default'=> '<b>Etykiety</b> dla pól i inne tytuły mogą być zmieniane.<br><br>Edytuj etykiety klikając na pole. Wprowadź nową etykietę i kliknij <b>Zachowaj</b>.<br><br>Jeśli w aplikacji są zainstalowane pakiety językowe, możesz wybrać <b>Język</b> dla etykiet.',
		'saveBtn'=>'Kliknij <b>Zachowaj</b>, aby zapisać wszyskie zmiany',
		'publishBtn'=>'Kliknij <b>Zachowaj i zamieść</b>, aby zapisać wszyskie zmiany i uaktywnić je',
	),
	'portalSync'=>array(
	    'default' => 'Wprowadź <b>Adres URL Portalu Sugar</b>  i kliknij <b>Dalej</b>.<br><br>Nastepnie wprowadź prawidłową nazwę użytkownika Sugar, oraz hasło i kliknij <b>Rozpocznij synchronizację</b>.<br><br>Dostosowania wprowadzone dla portalu Sugar, zawierające <b>Wyglądy</b>, wraz z <b>Arkuszami stylów</b>, jeśli zostały uprzednio załadowane, zostaną wprowadzone w określonej powyżej instancji portalu.',
	),
	'portalStyle'=>array(
	    'default' => 'Możesz dostosować wygląd portalu Sugar, korzystając z arkusza stylów.<br><br>Wybierz <b>Arkusz stylów</b> do załadowania.<br><br>Arkusz stylów zostanie zaimplementowany do Portalu Sugar, podczas następnej synchronizacji.',
	),
),
'assistantHelp'=>array(
	'package'=>array(
			//custom begin
			'nopackages'=>'Aby rozpocząć nowy projekt, kliknij <b>Nową paczkę</b>, aby stworzyć miejsce na pliki Twojego modułu. <br/><br/>Każda paczka może zawierać jeden lub więcej modułów.<br/>Dla instancji, możesz stworzyć własną paczkę, zawierającą nowy moduł połączony ze standardowym modułem Klienci. Możesz również stworzyć paczkę zawierającą kilka modułów, pracujących razem jako projekt i połączonych z modułami istniejącymi standardowo w aplikacji.',
			'somepackages'=>'<b>Paczka</b> przechowuje stworzone przez użytkownika moduły, które wszystkie są składnikami jednego projektu. Paczka może zawierać jeden lub więcej stworzonych <b>modułów</b>, które mogą być połączone razem, lub z innymi modułami aplikacji.<br/><br/>Po utworzeniu paczki, możesz tworzyć moduły od razu, lub pozostawić ją do późniejszej edycji.<br><br>Gdy projekt jest skończony, możesz <b>Zamieścić</b> paczkę, tworząc własny moduł do zainstalowania w aplikacji.',
			'afterSave'=>'Paczka powinna zawierać przynajmniej jeden moduł. Możesz stworzyć jeden lub więcej własnych modułów w obrębie jednej paczki.<br/><br/>Kliknij na <b>Nowy moduł</b>, aby utworzyć własny moduł dla tej paczki.<br/><br/> Po utworzeniu ostaniego modułu, możesz opublikować, lub zamieścić paczkę, co udostępni ją dla Twojej instancji i/lub użytkowników.<br/><br/> Aby zamieścić paczkę jednym ruchem w Twojej instancji, kliknij <b>Zamieść</b>.<br><br>Kliknij <b>Publikuj</b>, aby zapisać projekt w pliku .zip. Gdy zostanie on zachowany w Twoim systemie, użyj <b>Ładowacza modułów</b>, aby załadować i zainstalować paczkę w Twoim systemie.  <br/><br/>Możesz ją dowolnie dystrybuować pomiędzy różnymi instalacjami Sugar.',
			'create'=>'<b>Paczka</b> przechowuje stworzone przez użytkownika moduły, które wszystkie są składnikami jednego projektu. Paczka może zawierać jeden lub więcej stworzonych <b>modułów</b>, które mogą być połączone razem, lub z innymi modułami aplikacji.<br/><br/>Po utworzeniu paczki, możesz tworzyć moduły od razu, lub pozostawić ją do późniejszej edycji.',
	),	
	'main'=>array(
		'welcome'=>'Użyj <b>Narzędzi developera</b> do tworzenia i zarządzania standardowymi i własnymi modułami i polami. <br/><br/>Do zarządzania modułami w aplikacji służy stiudio <b>Studio</b>. <br/><br/>Do tworzenia własnych modułów -  <b>Budowniczy modułów</b>.',
		'studioWelcome'=>'Wszystkie zainstalowane obecnie moduły, zarówno standardowe, jak i obiekty ładowane, są edytowalne w Studio.'
	),
	'module'=>array(
		'somemodules'=>'Gdy tworzona paczka zawiera już co najmniej jeden moduł, możesz <b>Zamieścić</b> go, jako paczkę w instancji Sugar, lub <b>Publikować</b> ją jako pakiet do zainstalowania w tej, lub innej instacji, używając <b>Ładowacza modułów</b>.<br/><br/>Aby zainstalować paczkę bezpośrednio w Twojej instancji Sugar, kliknij <b>Zamieść</b>.<br><br>Aby utworzyć paczkę, możliwą do zainstalowania w różnych instancjach, za pomocą <b>Ładowacza modułów</b>, musisz stworzyć plik .zip, klikając <b>Publikuj</b>.<br/><br/> Możesz budować moduły w paczce etapami i publikować, lub zamieszczać gdy tylko zechcesz. <br/><br/>Po publikacji, lub zamieszczeniu paczki, możesz dalej dokonywać zmian i zmieniać właściwości modułów.  Potem ponownie dokonaj publikacji, lub zamieszczenia, aby zaaprobować zmiany.' ,
		'editView'=> 'Tutaj możesz edytować istniejące pola, lb w lewym panelu dodawać nowe.',
		'create'=>'Gdy wybierasz <b>Typ</b> modułu, który chcesz stworzyć, jednocześnie wybierasz typ pól, które znajdą się w module. <br/><br/>Każdy wzorzec modułu zawiera zestaw pól właściwy dla konkretnego typu modułu, określony przejego nazwę.<br/><br/><b>Podstawowy</b> - zawiera podstawowe pola, które pojawiają się w standardowych modułach. Te pola to np. Nazwa, Przydzielone do,Zespół, Data utworzenia lub Opis.<br/><br/> <b>Firma</b> - Zawiera pola typowe dla określenia organizacji, takie jak Nazwa firmy, jej adres i dane do fakturowania.  Używaj tego wzorca, do tworzenia modułów podobnych do standardowego modułu Klienci.<br/><br/> <b>Osoba</b> - Zawiera pola służące do określenia osób, takie jak Pozdrowienie, Tytuł, Imię, Adres i numer telefonu.  Używaj tego wzorca, do tworzenia modułów podobnych do standardowych modułów Kontakty i Wizytówki.<br/><br/><b>Cecha</b> - Zawiera pola specyficzne dla modułów Spraw lub do określenia błędów, takie jak numer, status, priorytet lub opis.  Używaj tego wzorca, do tworzenia modułów podobnych do standardowych modułów Spraw lub Śledzenia błędów.<br/><br/>Uwaga: Po utworzeniu modułu, możesz edytować etykiety pól wzorca, podobnie jak własnych pól, dodanych do wyglądu modułu.',
		'afterSave'=>'Tworząc moduł dostosowany do Twoich potrzeb, możesz edytować i tworzyć pola, ustalać zależności  pomiędzy innymi modułami i aranżować rozkład pól w wyglądach.<br/><br/>Aby zobaczyć pola wzorcowe w module i aranżować własne, kliknij <b>Zobacz pola</b>.<br/><br/>Aby utworzyć lub zarządzać zależnościami pomiędzy modułami, zarówno tymi, które znajdują się w aplikacji, jak i tymi, które utworzono w tej samej paczce, kliknij <b>Zobacz zależności</b>.<br/><br/>Aby edytować wyglądy, kliknij <b>Zobacz wyglądy</b>. Możesz zmieniać widok szczegółowy, widok edycji oraz widok listy dokładnie tak samo, jak edytuje się standardowe moduły w Studio.<br/><br/> Aby utworzyć moduł o takich samych właściwościach, kliknij <b>Duplikuj</b>.  Możesz dalej dostosowywać powstały w wyniku duplikacji moduł.',
		'viewfields'=>'Pola w module mogą być dowlnie edytowane.<br/><br/>Nie możesz usunąć standardowych pól, ale możesz wyłączyć je w widokach na stronie wyglądu. <br/><br/>Możesz natomiast edytować etykiety pól standardowych. Inne ich właściwości nie mogą być edytowane. Możesz poza tym szybko tworzyć nowe pola, o podobnych właściwościach poprzez kliknięcie  na nazwie pola, a następnie na przycisku <b>Klonuj</b> w formularzu <b>Właświwości</b>.  Wprowadź nowe właściwości i kliknij <b>Zachowaj</b>.<br/><br/>Jeśli dostosowujesz nowy moduł, a został on już zainstalowany, nie wszystkie z właściwości pól mogą być edytowane.  Należy określić zatem wszystkie właściwości dla pól standardowych i własnych, zanim paczka zawierająca moduł zostanie opublikowana lub zainstalowana.',
		'viewrelationships'=>'Możesz towrzyć zależności wiele-do-wielu pomiędzy bieżącym modułem, a innymi modułami w paczce i/lub pomiędzy bieżącym modułem, a modułami zainstalowanymi w aplikacji.<br><br> Aby utworzyć zależność jeden-do-wielu i jeden-do-jednego, kliknij <b>Połączenie</b> i <b>Stwórz połaczenie</b> pomiędzy polami w module.',
		'viewlayouts'=>'Możesz kontrolować, które z pól są dostępne do gromadzenia danych w <b>Widoku edycji</b>.  Możesz także kontrolować jakie dane są wyświetlane w <b>Widoku szczegółowym</b>.  Widoki nie muszą zawierać takich samych danych. <br/><br/>TFormulasz szybkiego tworzenia jest wyświetlony, gdy kalwisz <b>Utwórz</b> jest kliknięty w subapnelu modułu. Momyślnie wygląd formularza <b>Szybkiego tworzenia</b> jest taki sam, jak wygląd <b>Widoku edycji</b>. Możesz dostosowywać formularz szybkiego tworzenia tak, aby zawierał mniej lub więcej pól niż wygląd widoku edycji. <br><br>Możesz dostosować również poziom bezpieczeństwa dla wyglądu, korzystając z <b>Zarządzania rolami</b>.<br><br>',
		'existingModule' =>'Po utworzeniu i dostosowaniu modułu, możesz tworzyć następne moduły, lub <b>Publikować</b> lub <b>Zamieścić</b> paczkę.<br><br>Aby utworzyć dodatkowe moduły, kliknij <b>Duplikuj</b>, w celu stworzenia modułu o takich samych właściwościach, jak bieżący, lub cofnij się i kliknij <b>Nowy moduł</b>.<br><br> Jeśli jesteś gotowy do <b>Publikacji</b> lub <b>Zamieszczenia</b> paczki zawierającej ten moduł, cofnij się do poziomu zarządzania paczką Możesz zamieścić, lub opublikować paczkę, zawierającą co najmniej jeden moduł.',
		'labels'=> 'Etykiety pol standardowych i własnych mogą być zmieniane. Zmiana etykiet nie będzie miała wpływu na wprowadzone do nich dane.',
	),

	'listViewEditor'=>array(
		'modify'	=> 'Po lewej stronie są wyświetlone trzy kolumny. Kolumna <b>Domyślne</b> zawiera pola, które wyświetlają się domyślnie w <b>Widoku listy</b>, kolumna <b>Dostępne</b>, zawiera pola, które użytkownik może wykorzystać w trzorzeniu własnego widoku listy, a kolumna <b>Ukryte</b> - pola dostępne dla Ciebie, jako administratora, możliwe do dodania do jednej z dwóch poprzednich kolumn. Pola te stają się wtedy widoczne i dostępne dla użytkownika.',
		'savebtn'	=> 'Kliknięcie <b>Zachowaj</b> zachowa wszystkie zmiany i uaktywni je.',
		'Hidden' 	=> 'Pola ukryte to pola, które nie są obecnie dostępne dla użytkowników w widoku listy.',
		'Available' => 'Pola dostępne to pola, które nie są widoczne domyślnie, ale mogą zostać włączone przez użytkowników.',
		'Default'	=> 'Pola domyślne są wyświetlane użytkownikom, którzy nie modyifkowali widoków listy.'
	),
	'searchViewEditor'=>array(
		'modify'	=> 'Po lewej stronie są wyświetlone dwie kolumny. Kolumna <b>Domyślne</b> zawiera pola, które zostaną wyśwwietlone w widoku wyszukiwania, a kolumna <b>Ukryte</b> zawiera pola dostępne dla Ciebie, jako administratora do dodania do widoku edycji.',
		'savebtn'	=> 'Kliknięcie <b>Zachowaj i opublikuj</b> zachowa wszystkie zmiany i uaktywni je.',
		'Hidden' 	=> 'Pola ukryte nie będą wyświetlane w widoku wyszukiwania.',
		'Default'	=> 'Pola domyślne będą wyświetlane w widoku wyszukiwania.',
	),
	'layoutEditor'=>array(
		'default'	=>  'Po lewej stronie są wyświetlone dwie kolumny. Prawa, oznaczona jako <b>Widok bieżący</b> lub <b>Podgląd widoku</b>, to miejsce, którym możesz zmieniać wygląd modułu. Lewa - <b>Szkynka narzędziowa</b>, zawiera użyteczne elementy i narzędzia, przydatne w edycji wyglądu. <br/><br/>Jeśli obszar edycji jest oznaczony jako <b>Bieżący wygląd</b>, pracujesz wtedy na kopii wyświetlanego wyglądu.<br/><br/>Jeśli jest to <b>Podgląd Widoku</b>, to pracujesz na wyglądze utworzonym, za pomocą klawisza <b>Zachowaj</b>. Może to być wersja inna od tego, co widzielu użytkownicy.',
		'saveBtn'	=> 'Kliknięcie na klawisz zachowa wygląd, możesz temu zapobiec. Gdy cofniesz się, rozpoczniesz od tego zmienionego wyglądu. Twój utworzony widok, nie będzie widziany przez użytkowników modułu dopuki nie klikniesz klawisz <b>Zachowaj</b> i <b>Publikuj</b>.',
		'publishBtn'=> 'Kliknij klawisz, aby zamieścić wygląd. Oznacza to, że zostanie on niezwłocznie wyświetlony użytkoniwkom tego modułu.',
		'toolbox'	=> '<b>Skrzynka narzędziowa</b> zawiera przeróżne użyteczne funkcje, służące do edycji wyglądu, takie jak obszar kosza, zestaw dodatkowych elementów i zestaw dostępnych pól. Każdy z nich może być przeciągnięty i upuszczony na wygląd.',
		'panels'	=> 'Ten obszar pokazuje jak będzie wyglądał Twój wygląd, dla użytkowników modułu, gdy zostanie zamieszczony.<br/><br/>Możesz przemieszczać elementy, takie jak pola, wiersze i panele,używając techniki <b>przeciągnij i upuść</b>. W ten sam sposób usuwasz elementy przesuwająć je nad obszar kosza w skrzynce narzędziowej, lub dodajesz nowe, wyciągając je ze skrzynki i przesuwając na pożądaną pozycję w obszasze edycji widoku.'
	),
	'dropdownEditor'=>array(
		'default'	=> 'Po lewej stronie są wyświetlone dwie kolumny. Prawa z nich, oznaczona jako Bieżący widok, lub podgląd widoku, to ta, w której zmieniasz widok modułu. Lewa zawiera skrzynkę narzędziową, z użytecznymi elementami i narzędziami, których można użyć do edycji wyglądu. <br/><br/>Jeśli obszar wyglądu jest oznaczony jako bieżący, pracujesz na kopii bieżącego wyglądu modułu.<br/><br/>Jeśli obszar jest oznaczony jako Podgląd widoku, pracujesz na stworzonym wcześniej -po naciśnięciu klawisza Zachowaj - zatem może on być już zmieniony w stosunku do tego, co widzą Użytkownicy.', 
		'dropdownaddbtn'=> 'Kliknięcie tego przycisku spowoduje dodanie nowej pozycji do listy rozwijalnej.',
	),
	'exportcustom'=>array(
	    'exportHelp'=>'Zmiany własne dokonane za pomocą modułu Studio w tej instancji mogą zostać spakowane i zamieszczone w innej. <br><br>Wprować <b>Nazwę pakietu</b>.  W pakiecie możesz zamieścić informacje o <b>Autorze</b> i <b>Opis</b>.<br><br>Wybierz moduł(y),przeznaczone do eksportu,zawierające zmiany własne. Możesz wybrać tylko moduły zawierające te zmiany.)<br><br>Kliknij <b>Eksport</b>, aby stworzyć plik .zip pakietu zawierającego zmiany własne.  Plik  .zip może zostać załadowany do innej instancji za pomocą <b>Ładowacza modułów</b>.',
	    'exportCustomBtn'=>'Kliknij <b>Eksport</b>, aby utworzyć plik .zip pakietu zawierającego zmiany własne, które chcesz wyeksportować.',
	    'name'=>'<b>Nazwa</b> pakietu zostanie wyświetlona w Ładowaczu modułów, po tym jak pakiet zostanie przygotowany do instalacji w Studio.',
	    'author'=>'Określenie <b>Autor</b> to nazwa podmiotu tworzącego pakiet. Autorem może być zarówno osoba jak i firma.<br><br>Autor zostanie wyświetlony w Ładowaczu Modułów, po tym, jak pakiet zostanie przygotowany do instalacji w Studio.',
	    'description'=>'<b>Opis</b> pakietu zostanie wyświetlony w Ładowaczu Modułów, po tym, jak pakiet zostanie przygotowany do instalacji w Studio.',
	),


	'studioWizard'=>array(
		'mainHelp' 	=> 'Witamy w strefie <b>Narzędzia Programisty</b1>. <br/><br/>W tej strefie możesz używać narzędzi,aby tworzyć i zarządzać standardowymi i dostosowanymi modułami i polami.',
		'studioBtn'	=> 'Użyj <b>Studio</b> aby dostosować zainstalowane moduły, poprzez zmianę aranżacji pól, wybór, które z nich mają być dostępne i aby tworzyć własne pola danych.',
		'mbBtn'		=> 'Użyj <b>Budowniczego Modułów</b> aby tworzyć moduły.',
		'appBtn' 	=> 'Użyj trybu aplikacji aby dostosować różne cechy programu, takie jak np. jak dużo raportów TPS ma się pojawiać na stronie głównej',
		'backBtn'	=> 'Powrót do poprzedniego kroku.',
		'studioHelp'=> 'Użyj <b>Studio</b> aby dostosować zainstalowane moduły.',
		'moduleBtn'	=> 'Kliknij, aby edytować ten moduł.',
		'moduleHelp'=> 'Wybierz element modułu, który chcesz edytować.',
		'fieldsBtn'	=> 'Zdecyduj, które informacje są zapisywane w module, poprzez sterowanie <b>Polami</b> w module.<br/><br/>Tutaj możesz także edytować i tworzyć własne pola.',
		'labelsBtn' => 'Kliknij <b>Zachowaj</b> aby zapisać swoje własne oznaczenia etykiet.'	,
		'layoutsBtn'=> 'Dostosuj <b>Wyglądy</b> Widoków edycji, szczegółów, listy i wyszukiwania.',
		'subpanelBtn'=> 'Zdecyduj, jakie informacje mają pojawiać się w subpanelach w tym module.',
		'layoutsHelp'=> ' Wybierz <b>Wygląd do edycji</b>.<br/<br/>Aby zmienić wygląd, który zawiera pola do wprowadzania danych, kliknij <b>Edytuj widok</b>.<br/><br/>Aby zmienić wygląd, który wyświetla dane wprowadzone do pól, w Edycji Widoku, kliknij <b>Szczegóły Widoku</b>.<br/><br/>Aby zmienić kolumny, które pojawiają się domyślnie, kliknij <b>Widok listy</b>.<br/><br/>Aby zmienić Podstawowy i Zaawansowany widok formularza, kliknij <b>Szukaj</b>.',
		'subpanelHelp'=> 'Wybierz <b>Subpanel</b> to edit.',
		'searchHelp' => 'Wybierz widok do edycji klikając <b>Szukaj</b>.',
		'labelsBtn'	=> 'Edytuj <b>Etykiety</b> aby wyświetlić wartości dla tego modułu.',
        'newPackage'=>'Kliknij <b>Nowy Pakiet</b> by utworzyć nowy pakiet.',
        'mbHelp'    => '<b>Witamy w Budowniczym Modułów.</b><br/><br/><b>Budowniczy Modułów</b> jest używany do tworzenia pakietów zawierających dostosowywane moduły, bazujące na standardowych, lub własnych modułach. <br/><br/>Aby rozpocząć, kliknij <b>Nowy Pakiet</b> w celu utworzenia nowego pakietu, lub wybierz pakiet do edycji.<br/><br/> <b>Pakiet</b> może być zbiorem własnych modułów, które są częścią jednego projektu. Pakiet może więc zawierać więcej niż jeden moduł własny, który może być połączony z dowolnym innym modułem w aplikacji. <br/><br/>Przykład: Możesz stworzyć pakiet, zawierający jeden moduł własny, który jest połączony ze standardowym modułem <b>Klienci</b>. lub  stworzyć kilka modułów, współpracujących ze sobą, jako projekt i będących zależnymi od modułów aplikacji.',
        'exportBtn' => 'Kliknij  <b>Wyeksportuj dostosowania</b>, aby zbudować pakiet zawierający elementy stworzone przez Ciebie w Studio, dla określonego modułu.',
	),
	
	
),
//HOME
'LBL_HOME_EDIT_DROPDOWNS'=>'Edytuj listy rozwijalne',

//ASSISTANT
'LBL_AS_SHOW' => 'Pokaż Asystenta w przyszłości.',
'LBL_AS_IGNORE' => 'Nie pokazuj Asystenta w przyszłości.',
'LBL_AS_SAYS' => 'Asystent sugeruje:',


//STUDIO2
'LBL_MODULEBUILDER'=>'Budowniczy Modułów',
'LBL_STUDIO' => 'Studio',
'LBL_DROPDOWNEDITOR' => 'Edytor list rozwijalnych',
'LBL_EDIT_DROPDOWN'=>'Edytuj listy rozwijalne',
'LBL_DEVELOPER_TOOLS' => 'Narzędzia programisty',
'LBL_SUGARPORTAL' => 'Edytor portalu Sugar',
'LBL_SYNCPORTAL' => 'Synchronizuj portal',
'LBL_PACKAGE_LIST' => 'Lista pakietów',
'LBL_HOME' => 'Powrót do strony głównej',
'LBL_NONE'=>'-Nic-',

'LBL_ADD_FIELDS'=>'Dodaj własne pola',
'LBL_AVAILABLE_SUBPANELS'=>'Dostępne subpanele',
'LBL_ADVANCED'=>'Zaawansowane',
'LBL_ADVANCED_SEARCH'=>'Wyszukiwanie zaawansowane',
'LBL_BASIC'=>'Podstawowe',
'LBL_BASIC_SEARCH'=>'Wyszukiwanie podstawowe',
'LBL_CURRENT_LAYOUT'=>'Obecny wygląd',
'LBL_CURRENCY' => 'Waluta',
'LBL_DASHLET'=>'Belki',
'LBL_DASHLETLISTVIEW'=>'Widok listy belek Sugar',
'LBL_DASHLETSEARCH'=>'Sukaj belek Sugar',
'LBL_DASHLETSEARCHVIEW'=>'Wyszukiwanie belek Sugar',
'LBL_DISPLAY_HTML'=>'Wyświetl kod HTML',
'LBL_DETAILVIEW'=>'Widok szczegółowy',
'LBL_DROP_HERE' => '[Upuść tutaj]',
'LBL_EDIT'=>'Edytuj',
'LBL_EDIT_LAYOUT'=>'Widok edycji',
'LBL_EDIT_ROWS'=>'Edytuj wiersze',
'LBL_EDIT_COLUMNS'=>'Edytuj kolumny',
'LBL_EDIT_LABELS'=>'Edytuj etykiety',
'LBL_EDIT_FIELDS'=>'Edytuj własne pola',
'LBL_EDIT_PORTAL'=>'Edytuj portal dla ',
'LBL_EDIT_FIELDS'=>'Edytuj pola',
'LBL_EDITVIEW'=>'Widok edycji',
'LBL_FILLER'=>'(wypełniacz)',
'LBL_FIELDS'=>'Pola',
'LBL_FAILED_TO_SAVE' => 'Nie można zapisać',
'LBL_FAILED_PUBLISHED' => 'Nie można opublikować',
'LBL_HOMEPAGE_PREFIX' => 'Moja',
'LBL_LAYOUT_PREVIEW'=>'Podgląd wyglądu',
'LBL_LAYOUTS'=>'Wyglądy',
'LBL_LISTVIEW'=>'Widok listy',
'LBL_MODULES'=>'Moduły',
'LBL_MODULE_TITLE' => 'Studio',
'LBL_NEW_PACKAGE' => 'Nowy pakiet',
'LBL_NEW_PANEL'=>'Nowy panel',
'LBL_NEW_ROW'=>'Nowy wiersz',
'LBL_PUBLISHING' => 'Publikowanie ...',
'LBL_PUBLISHED' => 'Opublikowany',
'LBL_SELECT_FILE'=> 'Wybierz plik',
'LBL_SAVE_LAYOUT'=> 'Zapisz wygląd',
'LBL_SELECT_A_SUBPANEL' => 'Wybierz subpanel',
'LBL_SELECT_SUBPANEL' => 'Wybierz subpanel',
'LBL_SUBPANELS' => 'Subanele',
'LBL_SUBPANEL' => 'Subanele',
'LBL_SEARCH_FORMS' => 'Szukaj',
'LBL_SEARCH'=>'Wyszukiwanie',
'LBL_STAGING_AREA' => 'Platforma konstrukcyjna (tutaj przeciągnij i upuść elementy)',
'LBL_SUGAR_FIELDS_STAGE' => 'Pola Sugar (kliknij element, aby dodać do platformy konstrukcyjnej).',
'LBL_SUGAR_BIN_STAGE' => 'Kosz Sugar (kliknij element, aby dodać do platformy konstrukcyjnej).',
'LBL_TOOLBOX' => 'Skrzynka narzędziowa',
'LBL_VIEW_SUGAR_FIELDS' => 'Oberzyj pola Sugar',
'LBL_VIEW_SUGAR_BIN' => 'Obejrzyj kosz Sugar',
'LBL_QUICKCREATE' => 'Szybkie tworzenie',
'LBL_EDIT_DROPDOWNS' => 'Edytuj globalną listę rozwijalną',
'LBL_ADD_DROPDOWN' => 'Dodaj nową globalną listę rozwijalną',
'LBL_BLANK' => '-czysto-',
'LBL_TAB_ORDER' => 'Kolejność zakładek',

'LBL_DROPDOWN_TITLE_NAME' => 'Nazwa',
'LBL_DROPDOWN_LANGUAGE' => 'Język',
'LBL_DROPDOWN_ITEMS' => 'Lista elementów',
'LBL_DROPDOWN_ITEM_NAME' => 'Nazwa elementu',
'LBL_DROPDOWN_ITEM_LABEL' => 'Pokaż etykietę',

//RELATIONSHIPS
'LBL_MODULE' => 'Moduł',
'LBL_LHS_MODULE'=>'Moduł nadrzędny',
'LBL_CUSTOM_RELATIONSHIPS' => '* zależności tworzone w Studio lub Budowniczym Modułów',
'LBL_RELATIONSHIPS'=>'Zależności',
'LBL_RELATIONSHIPS_EDIT'=>'Edytuj zależności',
'LBL_REL_NAME' => 'Nazwa',
'LBL_REL_LABEL' => 'Etykieta',
'LBL_REL_TYPE' => 'Typ',
'LBL_RHS_MODULE'=>'Połączone moduły',
'LBL_NO_RELS' => 'Brak zależności',
'LBL_RELATIONSHIP_ROLE_ENTRIES'=>'Warunki optymalne' ,
'LBL_RELATIONSHIP_ROLE_COLUMN'=>'Kolumna',
'LBL_RELATIONSHIP_ROLE_VALUE'=>'Wartość',
'LBL_SUBPANEL_FROM'=>'Subpanel z',
'LBL_RELATIONSHIP_ONLY'=>'Nie zostaną utworzone żadne widoczne elementy dla tej zależności jeśli są już istniejące widoczne zależności dla tych dwóch modułów.',
'LBL_ONETOONE' => 'Jeden do jednego',
'LBL_ONETOMANY' => 'Jeden do wielu',
'LBL_MANYTOMANY' => 'Wielu do wielu',


//STUDIO QUESTIONS
'LBL_QUESTION_FUNCTION' => 'Wybierz funkcję, lub komponent.',
'LBL_QUESTION_MODULE1' => 'Wybierz moduł.',
'LBL_QUESTION_EDIT' => 'Wybierz moduł do edycji.',
'LBL_QUESTION_LAYOUT' => 'Wybierz wygląd do edycji.',
'LBL_QUESTION_SUBPANEL' => 'Wybierz subpanelpanel do edycji.',
'LBL_QUESTION_SEARCH' => 'Wybierz wygląd wyszukiwania do edycji.',
'LBL_QUESTION_MODULE' => 'Wybierz element modułu do edycji.',
'LBL_QUESTION_PACKAGE' => 'Wybierz pakiet do edycji, lub utwórz nowy.',
'LBL_QUESTION_EDITOR' => 'Wybierz narzędzie.',
'LBL_QUESTION_DROPDOWN' => 'Wybierz listę rozwijalną, aby edytować, lub utworzyć nową listę.',
'LBL_QUESTION_DASHLET' => 'Wybierz wygląd belki do edycji.',
//CUSTOM FIELDS
'LBL_RELATE_TO'=>'Połączony z',
'LBL_NAME'=>'Nazwa',
'LBL_LABELS'=>'Etykiety',
'LBL_MASS_UPDATE'=>'Pełna aktualizacja',
'LBL_AUDITED'=>'Sprawdzenie',
'LBL_CUSTOM_MODULE'=>'Moduł',
'LBL_DEFAULT_VALUE'=>'Wartość domyślna',
'LBL_REQUIRED'=>'Wymagane',
'LBL_DATA_TYPE'=>'Typ',
'LBL_HCUSTOM'=>'WŁASNY',
'LBL_HDEFAULT'=>'DOMYŚLNY',

'LBL_LANGUAGE'=>'Język:',


//SECTION
'LBL_SECTION_EDLABELS' => 'Edytuj panele',
'LBL_SECTION_PACKAGES' => 'Pakiety',
'LBL_SECTION_PACKAGE' => 'Pakiet',
'LBL_SECTION_MODULES' => 'Moduły',
'LBL_SECTION_PORTAL' => 'Portal',
'LBL_SECTION_DROPDOWNS' => 'Listy rozwijalne',
'LBL_SECTION_PROPERTIES' => 'Właściwości',
'LBL_SECTION_DROPDOWNED' => 'Edytor list rozwijalnych',
'LBL_SECTION_HELP' => 'Pomoc',
'LBL_SECTION_ACTION' => 'Akcja',
'LBL_SECTION_MAIN' => 'Główny',
'LBL_SECTION_EDPANELLABEL' => 'Edytuj etykiety paneli',
'LBL_SECTION_FIELDEDITOR' => 'Edytor pól',
'LBL_SECTION_DEPLOY' => 'Zamieszczanie',
'LBL_SECTION_MODULE' => 'Moduł',
//WIZARDS

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'Domyślne',
'LBL_HIDDEN'=>'Ukryte',
'LBL_AVAILABLE'=>'Dostępne',
'LBL_LISTVIEW_DESCRIPTION'=>'Poniżej są wyświetlone trzy kolumy; Kolumna <b>Domyślne</b> zawierają pola, które są wyświetlone poniżej. Kolumna <b>Dodatkowe</b> zawiera pola, których Użytkownik może użyć podczas tworzenia własnego wyglądu.  Kolumna <b>Dostępne</b> wyświetla pola, które są dostępne dla Ciebie, jako administratora, a które możesz dodać do dostępnych dla Użytkowników.', 
'LBL_LISTVIEW_EDIT'=>'Edytor wyglądu listy',

//Manager Backups History
'LBL_MB_PREVIEW'=>'Podgląd',
'LBL_MB_RESTORE'=>'Przywróć',
'LBL_MB_DELETE'=>'Usuń',
'LBL_MB_COMPARE'=>'Porównaj',

//END WIZARDS

//BUTTONS
'LBL_BTN_ADD'=>'Dodaj',
'LBL_BTN_SAVE'=>'Zachowaj',
'LBL_BTN_SAVE_CHANGES'=>'Zachowaj zmiany',
'LBL_BTN_DONT_SAVE'=>'Pomiń zmiany',
'LBL_BTN_SAVE'=>'Zapisz',
'LBL_BTN_CANCEL'=>'Anuluj',
'LBL_BTN_CLOSE'=>'Zamknij',
'LBL_BTN_UPLOAD'=>'Załaduj',
'LBL_BTN_SAVEPUBLISH'=>'Zapisz i zamieść',
'LBL_BTN_NEXT'=>'Następny',
'LBL_BTN_CLONE'=>'Klonuj',
'LBL_BTN_BACK'=>'Cofnij',
'LBL_BTN_ADDCOLS'=>'Dodaj kolumnę',
'LBL_BTN_ADDROWS'=>'Dodaj wiersz',
'LBL_BTN_ADDFIELD'=>'Dodaj pole',
'LBL_BTN_ADDDROPDOWN'=>'Dodaj listę rozwijalną',
'LBL_BTN_SORT_ASCENDING'=>'Sortuj rosnąco',
'LBL_BTN_SORT_DESCENDING'=>'Sortuj malejąco',
'LBL_BTN_EDLABELS'=>'Edytuj etykiety',
'LBL_BTN_UNDO'=>'Anuluj',
'LBL_BTN_REDO'=>'Przywróć',
'LBL_BTN_ADDCUSTOMFIELD'=>'Dodaj własne pole',
'LBL_BTN_EXPORT'=>'Wyeksportuj własne dostosowania',
'LBL_BTN_DUPLICATE'=>'Duplikuj',
'LBL_BTN_PUBLISH'=>'Publikuj',
'LBL_BTN_DEPLOY'=>'Zamieść',
'LBL_BTN_EXP'=>'Eksport',
'LBL_BTN_DELETE'=>'Usuń',
'LBL_BTN_VIEW_LAYOUTS'=>'Zobacz wyglądy',
'LBL_BTN_VIEW_FIELDS'=>'Zobacz pola',
'LBL_BTN_VIEW_RELATIONSHIPS'=>'Zobacz zależności',
'LBL_BTN_ADD_RELATIONSHIP'=>'Dodaj zależności',
//TABS


//ERRORS
'ERROR_ALREADY_EXISTS'=> 'Błąd: Pole juz istnieje',
'ERROR_INVALID_KEY_VALUE'=> "Błąd: Nieprawidłowa wartość klucza: [']",
'ERROR_NO_HISTORY' => 'Nie odnaleziono plików historii',



//SUGAR PORTAL
'LBL_PORTAL'=>'Portal',
'LBL_SYNCP_WELCOME'=>'Wprowadź adres URL do instalacji Portalu, którą chcesz poprawić.',
'LBL_SP_UPLOADSTYLE'=>'Wybierz arkusz stylów do załadowania z Twojego komputera.<br> Akrkusz stylów będzie zaimplementowany w Portalu Sugar, przy następnej synchronizacji.',
'LBL_SP_UPLOADED'=> 'Załadowano',
'ERROR_SP_UPLOADED'=>'Upewnij się, że załadowałeś akrusz stylów css.',
'LBL_SP_PREVIEW'=>'Tutaj jest podgląd, jak będzie wyglądał Twoj Portal Sugar, gdy użyjesz tego arkusza stylów.',
'LBL_PORTALSITE'=>'Adres URL Portalu Sugar: ',
'LBL_PORTAL_GO'=>'Naprzór',
'LBL_UP_STYLE_SHEET'=>'Załaduj arkusz stylów',
'LBL_QUESTION_SUGAR_PORTAL' => 'Wybierz wyglad Portalu do edycji.',
'LBL_QUESTION_PORTAL' => 'Wybierz wyglad Portalu do edycji.',
'LBL_SUGAR_PORTAL'=>'Portal Sugar',

//PORTAL PREVIEW
'LBL_CASES'=>'Sprawy',
'LBL_NEWSLETTERS'=>'Newsletters',
'LBL_BUG_TRACKER'=>'Śledzenie błędów',
'LBL_MY_ACCOUNT'=>'Moje konto',
'LBL_LOGOUT'=>'Wyloguj',
'LBL_CREATE_NEW'=>'Utwórz nowe',
'LBL_LIST'=>'Lista',
'LBL_LOW'=>'Niski',
'LBL_MEDIUM'=>'Średni',
'LBL_HIGH'=>'Wysoki',
'LBL_NUMBER'=>'Numer:',
'LBL_PRIORITY'=>'Priorytet:',
'LBL_SUBJECT'=>'Temat',
'LBL_DESCRIPTION'=>'Opis:',




//PACKAGE AND MODULE BUILDER
'LBL_PACKAGE_NAME'=>'Nazwa pakietu:',
'LBL_MODULE_NAME'=>'Nazwa modułu:',
'LBL_AUTHOR'=>'Autor:',
'LBL_DESCRIPTION'=>'Opis:',
'LBL_KEY'=>'Klucz:',
'LBL_ADD_README'=>' Readme',
'LBL_MODULES'=>'Moduły:',
'LBL_LAST_MODIFIED'=>'Ostatnio modyfikowany:',
'LBL_NEW_MODULE'=>'Nowy moduł',
'LBL_LABEL'=>'Etykieta:',
'LBL_LABEL_TITLE'=>'Etykieta',
'LBL_WIDTH'=>'Szerokość',
'LBL_PACKAGE'=>'Paczka:',
'LBL_TYPE'=>'Typ:',
'LBL_TEAM_SECURITY'=>'Zabezpieczenia zespołu',
'LBL_ASSIGNABLE'=>'Możliwy do przydzielenia',
'LBL_PERSON'=>'Osoba',
'LBL_COMPANY'=>'Firma',
'LBL_ISSUE'=>'Wydanie',
'LBL_SALE'=>'Sprzedaż',
'LBL_FILE'=>'Plik',
'LBL_NAV_TAB'=>'Zakładka nawigacyjna',
'LBL_CREATE'=>'Utwórz',
'LBL_LIST'=>'Lista',
'LBL_LIST_VIEW'=>'Widok listy',
'LBL_HISTORY'=>'Zobacz historię',
'LBL_ACTIVITIES'=>'Działania',
'LBL_SEARCH'=>'Szukaj',
'LBL_NEW'=>'Nowy',
'LBL_TYPE_BASIC'=>'podstawowy',
'LBL_TYPE_COMPANY'=>'firma',
'LBL_TYPE_PERSON'=>'osoba',
'LBL_TYPE_ISSUE'=>'wydanie',
'LBL_TYPE_SALE'=>'sprzedaż',
'LBL_TYPE_FILE'=>'plik',
'LBL_RSUB'=>'To jest subpanel, który będzie wyświetlany w Twoim module',
'LBL_MSUB'=>'To jest subpanel, który jest połączony z modułem do wyświetlenia.',
'LBL_MB_IMPORTABLE'=>'Importowanie',

//EXPORT CUSTOMS
'LBL_EC_TITLE'=>'Wyeksportuj dostosowania',
'LBL_EC_NAME'=>'Nazwa pakietu:',
'LBL_EC_AUTHOR'=>'Autor:',
'LBL_EC_DESCRIPTION'=>'Opis:',
'LBL_EC_KEY'=>'Klucz:',
'LBL_EC_CHECKERROR'=>'Wybierz moduł.',
'LBL_EC_CUSTOMFIELD'=>'pole dostosowane',
'LBL_EC_CUSTOMLAYOUT'=>'wygląd dostosowany',
'LBL_EC_NOCUSTOM'=>'Żaden moduł nie został dostosowany.',
'LBL_EC_EMPTYCUSTOM'=>'nie posiada własnych dostosowań.',
'LBL_EC_EXPORTBTN'=>'Eksport',
'LBL_MODULE_DEPLOYED' => 'Moduł został zamieszczony.',
'LBL_UNDEFINED' => 'niezidentyfikowany',

//AJAX STATUS
'LBL_AJAX_FAILED_DATA' => 'Nie można przywrócić danych',
'LBL_AJAX_TIME_DEPENDENT' => 'Operacja, której wykonanie może zająć nieco czasu własnie trwa. Poczekaj i spróbuj za chwilę',
'LBL_AJAX_LOADING' => 'Ładuję...',
'LBL_AJAX_DELETING' => 'Usuwam...',
'LBL_AJAX_BUILDPROGRESS' => 'Budowanie trwa...',
'LBL_AJAX_DEPLOYPROGRESS' => 'Zamieszczanie trwa...',

//JS
'LBL_JS_REMOVE_PACKAGE' => 'Czy na pewno chcesz usunąć ten pakiet? Spowoduje to trwałe usunięcie wszystkich plików skojarzonych z tym pakietem.',

'LBL_DEPLOY_IN_PROGRESS' => 'Zamieszczanie pakietu',
'LBL_JS_VALIDATE_NAME'=>'Nazwa - musi składać się ze znaków alfanumerycznych, bez spacji i rozpoczynać się od litery',
'LBL_JS_VALIDATE_KEY'=>'Klucz - musi składać się ze znaków alfanumerycznych, bez spacji i rozpoczynać się od litery',
'LBL_JS_VALIDATE_LABEL'=>'Wprowadź etykiete, która będzie użyta jako nazwa tego modułu',
'LBL_JS_VALIDATE_TYPE'=>'Wybierz z listy rozwijalnej typ modułu, który chcesz zbudować',
'LBL_JS_VALIDATE_REL_NAME'=>'Nazwa - musi składać się ze znaków alfanumerycznych, bez spacji',
'LBL_JS_VALIDATE_REL_LABEL'=>'Etykieta - wpisz etykietę, która będzie wyświetlana ponad subpanelem',

//CONFIRM
'LBL_CONFIRM_FIELD_DELETE'=>'Usunięcie własnego pola, usunie wszystkie dane połączone z własnym polem. Powinieneś wtedy również  usunąć te pola ze wszystkich wygladów, w krórych zostały dodane',
'LBL_CONFIRM_RELATIONSHIP_DELETE'=>'Czy na pewno chcesz usunąć tę zależność?',
'LBL_CONFIRM_RELATIONSHIP_DEPLOY'=>'To ustawi na stałe tę zależność. Czy na pewno chcesz zamieścić tę zależność?',
'LBL_CONFIRM_DONT_SAVE' => 'Zmiany, które zostały wprowadzone od ostatniego zapisywania. Czy chcesz zapisać teraz?',
'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Zachować zmiany?',

//POPUP HELP
'LBL_POPHELP_FIELD_DATA_TYPE'=>'Wybierz właściwy typ danych na podstawie tych, które zostaną wprowadzone do pól.',
'LBL_POPHELP_DUPLICATE_MERGE'=>'<b>Włączone</b>: Pola pojawią się w funkcji Scal duplikaty, ale nie będzie możliwe ich użycie dla filtra warunków w funkcji odszukiwania duplikatów.<br><b>Wyłączone</b>: Pola nie pojawią się w funkcji Scal duplikaty, ale nie będzie możliwe ich użycie dla filtra warunków w funkcji odszukiwania duplikatów.'

. '<br><b>W Filtrze</b>: Pola nie pojawią się w funkcji Scal duplikaty, ale będzie możliwe ich użycie dla filtra warunków w funkcji odszukiwania duplikatów.<br><b>Tylko filtr</b>: Pola pojawią się w funkcji Scal duplikaty, ale nie będzie możliwe ich użycie dla filtra warunków w funkcji odszukiwania duplikatów.<br><b>Domyślnie wybrany filtr</b>: Pola zostaną użyte w warunkach filtrowania w funkcji znajdź duplikaty, i będą również dostępne w funkcji Scal duplikaty.'

,

'fieldTypes' => array(
				'varchar'=>'Ciąg znaków', 
				'int'=>'Liczba', 
				'float'=>'Dziesiętne',
				'bool'=>'Pole checkbox',
				'enum'=>'Lista rozwijalna',
				'multienum' => 'Wielokrotny wybór',
                'date'=>'Data', 
                'phone' => 'Telefon', 
                'currency' => 'Waluta', 
                'html' => 'HTML', 
                'radioenum' => 'Radio',
                'relate' => 'Zależne', 
                'address' => 'Adres', 
                'text' => 'Pole tekstowe', 
                'url' => 'Link', 
                'iframe' => 'IFrame', 
                'encrypt'=>'Kodowane'
),

'parent' => 'Wybór zależności'
);