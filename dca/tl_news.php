<?php

$GLOBALS['TL_DCA']['tl_news']['palettes']['__selector__'][] = 'addTCImage';
$GLOBALS['TL_DCA']['tl_news']['palettes']['default'] .= ';{twittercards_legend:hide},addTCImage';

$GLOBALS['TL_DCA']['tl_news']['subpalettes']['addTCImage'] = 'tcSRC';

$GLOBALS['TL_DCA']['tl_news']['fields']['addTCImage'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_news']['addImage'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_news']['fields']['tcSRC'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['singleSRC'],
	'exclude'                 => true,
	'inputType'               => 'fileTree',
	'eval'                    => array('filesOnly'=>true, 'extensions'=>Config::get('validImageTypes'), 'fieldType'=>'radio', 'mandatory'=>true),
	'sql'                     => "binary(16) NULL"
);