<?php

/**
 * Module-Metadata for the marmPiwik.
 * @author Joscha Krug <krug@marmalade.de>
 * @editor BPMusic <info@bpmusic.de>
 */

$sMetadataVersion = '2.1';

$aModule = array(
        'id'                => 'marmpiwik',
        'title'                => 'marmalade :: Piwik',
        'thumbnail'        => 'marmalade.jpg',
        'url'                => 'http://www.marmalade.de',
        'version'        => '0.7.1',
        'author'        => 'marmalade GmbH',
        'email'                => 'support@marmalade.de',

        'description'        => array(
                'de'                => 'Tracking mit Matomo/Piwik',
                'en'                => 'Tracking with Matomo/Piwik'
        ),

        'controllers' => [
                'MarmPiwikConfig' => \Marm\Piwik\Controller\Admin\MarmPiwikConfigController::class
        ],

        'extend' => array(
                \OxidEsales\Eshop\Core\Output::class => \Marm\Piwik\Core\Output::class,
        ),

        'templates' => array(
                'marm_piwik_setup.tpl'        => 'marm/piwik/views/admin/tpl/marm_piwik_setup.tpl'
        )

);