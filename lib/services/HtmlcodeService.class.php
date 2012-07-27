<?php
/**
 * statictext_HtmlcodeService
 * @package modules.statictext
 */
class statictext_HtmlcodeService extends f_persistentdocument_DocumentService
{
	/**
	 * @var statictext_HtmlcodeService
	 */
	private static $instance;

	/**
	 * @return statictext_HtmlcodeService
	 */
	public static function getInstance()
	{
		if (self::$instance === null)
		{
			self::$instance = self::getServiceClassInstance(get_class());
		}
		return self::$instance;
	}

	/**
	 * @return statictext_persistentdocument_htmlcode
	 */
	public function getNewDocumentInstance()
	{
		return $this->getNewDocumentInstanceByModelName('modules_statictext/htmlcode');
	}

	/**
	 * Create a query based on 'modules_statictext/htmlcode' model.
	 * Return document that are instance of modules_statictext/htmlcode,
	 * including potential children.
	 * @return f_persistentdocument_criteria_Query
	 */
	public function createQuery()
	{
		return $this->pp->createQuery('modules_statictext/htmlcode');
	}
	
	/**
	 * Create a query based on 'modules_statictext/htmlcode' model.
	 * Only documents that are strictly instance of modules_statictext/htmlcode
	 * (not children) will be retrieved
	 * @return f_persistentdocument_criteria_Query
	 */
	public function createStrictQuery()
	{
		return $this->pp->createQuery('modules_statictext/htmlcode', false);
	}
}