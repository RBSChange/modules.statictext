<?php
/**
 * statictext_patch_0350
 * @package modules.statictext
 */
class statictext_patch_0350 extends patch_BasePatch
{ 
	/**
	 * Entry point of the patch execution.
	 */
	public function execute()
	{
		$filename = f_util_FileUtils::buildChangeBuildPath('modules', 'statictext', 'dataobject', 'm_statictext_doc_htmlcode.mysql.sql');
		if (!file_exists($filename))
		{
			$this->log('Compile documents...');
			$this->execChangeCommand('compile-documents');
		}
		$this->log('Compile database, blocks, editors-config and locales ...');
		$this->execChangeCommand('generate-database', array('statictext'));
		$this->execChangeCommand('compile-blocks');
		$this->execChangeCommand('compile-editors-config');
		$this->execChangeCommand('compile-locales', array('statictext'));
	}
}