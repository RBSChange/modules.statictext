<?php
/**
 * statictext_BlockHtmlcodeAction
 * @package modules.statictext.lib.blocks
 */
class statictext_BlockHtmlcodeAction extends website_BlockAction
{
	/**
	 * @see website_BlockAction::execute()
	 *
	 * @param f_mvc_Request $request
	 * @param f_mvc_Response $response
	 * @return String
	 */
	public function execute($request, $response)
	{
		if ($this->isInBackofficeEdition())
		{
			return website_BlockView::NONE;
		}
			
		$htmlcode = $this->getConfiguration()->getCmprefSafe();
		if ($htmlcode instanceof statictext_persistentdocument_htmlcode && $htmlcode->isPublished())
		{
			$request->setAttribute('htmlcode', $htmlcode);
			return website_BlockView::SUCCESS;
		}
		
		return website_BlockView::NONE;
	}
}