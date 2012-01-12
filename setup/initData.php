<?php
/**
 * @package modules.statictext.setup
 */
class statictext_Setup extends object_InitDataSetup
{
	public function install()
	{
		//$this->executeModuleScript('init.xml');
	}

	/**
	 * @return String[]
	 */
	public function getRequiredPackages()
	{
		return array();
	}
}