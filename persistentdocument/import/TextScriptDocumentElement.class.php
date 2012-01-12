<?php
/**
 * statictext_TextScriptDocumentElement
 * @package modules.statictext.persistentdocument.import
 */
class statictext_TextScriptDocumentElement extends import_ScriptDocumentElement
{
    /**
     * @return statictext_persistentdocument_text
     */
    protected function initPersistentDocument()
    {
    	return statictext_TextService::getInstance()->getNewDocumentInstance();
    }
    
    /**
	 * @return f_persistentdocument_PersistentDocumentModel
	 */
	protected function getDocumentModel()
	{
		return f_persistentdocument_PersistentDocumentModel::getInstanceFromDocumentModelName('modules_statictext/text');
	}
}