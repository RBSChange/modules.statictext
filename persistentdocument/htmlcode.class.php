<?php
/**
 * Class where to put your custom methods for document statictext_persistentdocument_htmlcode
 * @package modules.statictext.persistentdocument
 */
class statictext_persistentdocument_htmlcode extends statictext_persistentdocument_htmlcodebase 
{
	public function getTextAsHtml()
	{
		$txt = $this->getText();
		if ($this->getReplaceI18nKey())
		{
			$txt = LocaleService::getInstance()->translateText($txt);
		}
		return $txt;
	}
}