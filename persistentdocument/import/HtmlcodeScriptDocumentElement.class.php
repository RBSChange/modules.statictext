<?php
/**
 * statictext_HtmlcodeScriptDocumentElement
 * @package modules.statictext.persistentdocument.import
 */
class statictext_HtmlcodeScriptDocumentElement extends import_ScriptDocumentElement
{
	/**
	 * @return statictext_persistentdocument_htmlcode
	 */
	protected function initPersistentDocument()
	{
		return statictext_HtmlcodeService::getInstance()->getNewDocumentInstance();
	}
	
	/**
	 * @return f_persistentdocument_PersistentDocumentModel
	 */
	protected function getDocumentModel()
	{
		return f_persistentdocument_PersistentDocumentModel::getInstanceFromDocumentModelName('modules_statictext/htmlcode');
	}
}