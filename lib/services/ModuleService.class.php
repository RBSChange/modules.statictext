<?php
/**
 * @package modules.statictext.lib.services
 */
class statictext_ModuleService extends ModuleBaseService
{
	/**
	 * Singleton
	 * @var statictext_ModuleService
	 */
	private static $instance = null;

	/**
	 * @return statictext_ModuleService
	 */
	public static function getInstance()
	{
		if (is_null(self::$instance))
		{
			self::$instance = self::getServiceClassInstance(get_class());
		}
		return self::$instance;
	}
}