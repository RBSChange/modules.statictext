<?php
/**
 * @method statictext_ModuleService getInstance()
 */
class statictext_TextService extends f_persistentdocument_DocumentService
{
	/**
	 * @return statictext_persistentdocument_text
	 */
	public function getNewDocumentInstance()
	{
		return $this->getNewDocumentInstanceByModelName('modules_statictext/text');
	}

	/**
	 * Create a query based on 'modules_statictext/text' model.
	 * Return document that are instance of statictext_persistentdocument_text,
	 * including potential children.
	 * @return f_persistentdocument_criteria_Query
	 */
	public function createQuery()
	{
		return $this->getPersistentProvider()->createQuery('modules_statictext/text');
	}
	
	/**
	 * Create a query based on 'modules_statictext/text' model.
	 * Only documents that are strictly instance of statictext_persistentdocument_text
	 * (not children) will be retrieved
	 * @return f_persistentdocument_criteria_Query
	 */
	public function createStrictQuery()
	{
		return $this->getPersistentProvider()->createQuery('modules_statictext/text', false);
	}
		
}