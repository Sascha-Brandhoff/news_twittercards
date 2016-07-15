<?php

ClassLoader::addNamespaces(array
(
	'Contao'
));

ClassLoader::addClasses(array
(
	'Contao\TwitterCards' => 'system/modules/news_twittercards/classes/TwitterCards.php'
));

TemplateLoader::addFiles(array
(
	'mod_news_twittercards' => 'system/modules/news_twittercards/templates/modules'
));