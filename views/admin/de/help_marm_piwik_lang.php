<?php

/**
 * Piwik integration in OXID
 *
 * Copyright (c) 2011 Joscha Krug | marmalade.de
 * E-mail: mail@marmalade.de
 * http://www.marmalade.de
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to
 * deal in the Software without restriction, including without limitation the
 * rights to use, copy, modify, merge, publish, distribute, sublicense, and/or
 * sell copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS
 * IN THE SOFTWARE.
 */

$sLangName  = "Deutsch";

// -------------------------------
// RESOURCE IDENTITFIER = STRING
// -------------------------------
$aLang = array(
	'charset'                                  			=> 'UTF-8',
	'HELP_MARM_PIWIK_CONFIG_piwik_site_id'				=> 'Die Seiten ID aus Matomo. Zu finden im Matomo Backend unter "Einstellungen" -> "Webseiten": ID bei der zu trackenden Seite.',
	'HELP_MARM_PIWIK_CONFIG_piwik_url'					=> 'Die Url zur Matomo-Installation. z.B.: "http://piwik.shopdomain.de/" oder "http://shopdomain.de/piwik/"',
	'HELP_MARM_PIWIK_CONFIG_piwik_script_name'			=> 'Der Dateiname ohne Endung der Matomo Scripte. Normalerweise matomo.js/matomo.php oder piwik.php/piwik.js. Kann angepasst werden um AdBlocker teilweise zu umgehen.',
	'HELP_MARM_PIWIK_CONFIG_tracking_method'			=> 'PHP available in pro version only',
	'HELP_MARM_PIWIK_CONFIG_searched_for_var_name'		=> 'Mit diesem Namen werden erfolgreiche Suchanfragen in Matomo getrackt. Zu finden im Matomo Backend unter "Besucher" -> "Benutzerdefinierte Variablen".',
	'HELP_MARM_PIWIK_CONFIG_no_search_results_var_name'	=> 'Mit diesem Namen werden Suchanfragen die kein Ergebnis zurückliefern in Matomo getrackt. Zu finden im Matomo Backend unter "Besucher" -> "Benutzerdefinierte Variablen".',
	'HELP_MARM_PIWIK_CONFIG_newsletter_var_name'		=> 'Unter diesem Überbegriff sind alle Aktionen die den Newsletter betreffen in Matomo getrackt. Zu finden im Matomo Backend unter "Besucher" -> "Benutzerdefinierte Variablen".',
	'HELP_MARM_PIWIK_CONFIG_newsletter_var_subscribed'	=> 'Mit diesem Namen wird der 1. Schritt zu Anmeldung also der Versand der Opt-In Email getrackt. Zu finden im Matomo Backend unter "Besucher" -> "Benutzerdefinierte Variablen" -> [Wert bei "Variable, die Matomo für Newsletter trackt"].',
	'HELP_MARM_PIWIK_CONFIG_newsletter_var_activated'	=> 'Mit diesem Namen wird die Aktivierung also das anklicken des Links in der Email getrackt. Zu finden im Matomo Backend unter "Besucher" -> "Benutzerdefinierte Variablen" -> [Wert bei "Variable, die Matomo für Newsletter trackt"].',
	'HELP_MARM_PIWIK_CONFIG_newsletter_var_unsubscribed' => 'Mit diesem Namen wird die Abmeldung also das anklicken des Links in der Email getrackt. Zu finden im Matomo Backend unter "Besucher" -> "Benutzerdefinierte Variablen" -> [Wert bei "Variable, die Matomo für Newsletter trackt"].',
	'HELP_MARM_PIWIK_CONFIG_newsletter_var_form_showed'	=> 'Mit diesem Namen wird das Betrachten einer Email zur Anmeldung getrackt. Zu finden im Matomo Backend unter "Besucher" -> "Benutzerdefinierte Variablen" -> [Wert bei "Variable, die Matomo für Newsletter trackt"].<br>Funktioniert nur wenn die Einstellung "externe Bilder nicht anzeigen" oder ähnliches im Email Programm des Kunden nicht aktiviert ist.',
);