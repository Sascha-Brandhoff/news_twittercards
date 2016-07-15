<?php

$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] .= ';{twittercards_legend:hide},twittercards_username';

$GLOBALS['TL_DCA']['tl_settings']['fields']['twittercards_username'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['twittercards_username'],
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>true, 'nospace'=>true, 'tl_class'=>'w50')
);
