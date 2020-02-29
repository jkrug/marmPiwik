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

$sLangName  = "English";

// -------------------------------
// RESOURCE IDENTITFIER = STRING
// -------------------------------
$aLang = array(
	'charset'                                  			=> 'UTF-8',
	'HELP_MARM_PIWIK_CONFIG_piwik_site_id'				=> 'Site ID from Matomo. Go to matomo backend and navigate to "settings" -> "websites".',
	'HELP_MARM_PIWIK_CONFIG_piwik_url'					=> 'Url to matomo installation. e.g.: "http://piwik.shopdomain.de/" or "http://shopdomain.de/piwik/"',
	'HELP_MARM_PIWIK_CONFIG_piwik_script_name'					=> 'The filename without extension of the Matomo scripts. Usually matomo.js/matomo.php or piwik.php/piwik.js. Can be customized to partially bypass AdBlocker.',
	'HELP_MARM_PIWIK_CONFIG_tracking_method'			=> 'PHP available in pro version only',
	'HELP_MARM_PIWIK_CONFIG_searched_for_var_name'		=> 'Name for successfull search requests in matomo. Go to matomo backend and navigate to "Visitors" -> "Custom Variables".',
	'HELP_MARM_PIWIK_CONFIG_no_search_results_var_name'	=> 'Name for unsuccessfull search requests with no items found in matomo. Go to matomo backend and navigate to "Visitors" -> "Custom Variables".',
	'HELP_MARM_PIWIK_CONFIG_newsletter_var_name'		=> 'Generic term for all actions related to newsletter in matomo. Go to matomo backend and navigate to "Visitors" -> "Custom Variables".',
	'HELP_MARM_PIWIK_CONFIG_newsletter_var_subscribed'	=> 'Name for tracking the 1st step in subscribing a newsletter. Go to matomo backend and navigate to "Visitors" -> "Custom Variables -> [Value at "Newsletter variable name in Custom variables"].',
	'HELP_MARM_PIWIK_CONFIG_newsletter_var_activated'	=> 'Name for tracking the activation by clicking the link in the email. Go to matomo backend and navigate to "Visitors" -> "Custom Variables -> [Value at "Newsletter variable name in Custom variables"].',
	'HELP_MARM_PIWIK_CONFIG_newsletter_var_unsubscribed' => 'Name for tracking the unsubscribing by clicking the link in the email. Go to matomo backend and navigate to "Visitors" -> "Custom Variables -> [Value at "Newsletter variable name in Custom variables"].',
	'HELP_MARM_PIWIK_CONFIG_newsletter_var_form_showed'	=> 'Name for tracking the viewing of the subscribe email. Go to matomo backend and navigate to "Visitors" -> "Custom Variables -> [Value at "Newsletter variable name in Custom variables"].<br>Only works if the option "do not show external pictures" or similar is not set in the email client of the customer.',
);