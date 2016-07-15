<?php

namespace Contao;

class TwitterCards
{
	public function myParseArticles($objTemplate, $arrRow, $objModule)
	{
		if($objModule->type == 'newsreader')
		{
			$objTemplate = new \FrontendTemplate('mod_news_twittercards');

			$objTemplate->title       = htmlentities($arrRow['headline']);
			$objTemplate->description = preg_replace( "/\r|\n/", "", htmlentities(strip_tags($arrRow['teaser'])));

			if($arrRow['addTCImage'])
			{
				$objFile = \FilesModel::findByUuid($arrRow['tcSRC']);
			}
			elseif($arrRow['addImage'])
			{
				$objFile = \FilesModel::findByUuid($arrRow['singleSRC']);
			}

			if($objFile->path)
			{
				$objTemplate->image = \Environment::Get('base') . $objFile->path;
			}

			if(\Config::Get('twittercards_username'))
			{
				$objTemplate->username = \Config::Get('twittercards_username');
			}

			$GLOBALS['TL_HEAD'][] = $objTemplate->parse();		
		}
	}
}