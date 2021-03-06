<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Enterprise Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/products/sugar-enterprise-eula.html
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
 * by SugarCRM are Copyright (C) 2004-2009 SugarCRM, Inc.; All Rights Reserved.
********************************************************************************/
/*********************************************************************************


* Description:  Defines the English language pack for the base application.
* Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
* All Rights Reserved.
* Contributor(s): ______________________________________..
********************************************************************************/

/*********************************************************************************
 * pl_pl.lang.ext.php,v for SugarCRM 4.5.1 -->>
 * Translator: Krzysztof Morawski
 * All Rights Reserved.
 * Any bugs report welcome: krzysiek<at>kmmgroup<dot>pl
 * Contributor(s): ______________________________________..
 ********************************************************************************/


$connector_strings = array (
    //licensing information shown in config screen
    'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel"><image src="' . getWebPath('modules/Connectors/connectors/sources/ext/rest/zoominfocompany/images/zoominfo.gif') . '" border="0"></td><td width="65%" valign="top" class="dataLabel">' .
                            'ZoomInfo&#169; dostarcza sporo informacji o ponad 45 milionach zatrudnionych w ponad 5 milionach przedsiębiorstw. Zobacz więcej na <a target="_blank" href="http://www.zoominfo.com/about">http://www.zoominfo.com/about</a></td></tr></table>',

    'LBL_SEARCH_FIELDS_INFO' => 'Następujące pola są wspierane przez Zoominfo&#169 Firma; API: Nazwa firmy, Miasto, Wokjewództwo (stan) i kraj.',


    //vardef labels
        'LBL_COMPANY_ID' => 'ID',
        'LBL_COMPANY_NAME' => 'Nazwa firmy',
    'LBL_STREET' => 'Ulica',
        'LBL_CITY' => 'Miasto',
        'LBL_ZIP' => 'Kod pocztowy',
        'LBL_STATE' => 'Województwo',
        'LBL_COUNTRY' => 'Kraj',
        'LBL_INDUSTRY' => 'Branża',
        'LBL_WEBSITE' => 'Strona www',
        'LBL_DESCRIPTION' => 'Opis',

        //Configuration labels
        'company_search_url' => 'Adres URL firmy',
        'company_detail_url' => 'Adres URL szczegółów o firmie',
        'api_key' => 'Klucz API',

        //Other labels
        'ERROR_LBL_CONNECTION_PROBLEM' => 'Błąd: Nie można połączyć się z serwerem Zoominfo - Company connector.',
);

?>