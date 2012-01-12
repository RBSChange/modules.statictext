<?php
/**
 * statictext_BlockTextAction
 * @package modules.statictext.lib.blocks
 */
class statictext_BlockTextAction extends website_BlockAction
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
			
		$text = $this->getConfiguration()->getCmprefSafe();
		if ($text instanceof statictext_persistentdocument_text && ($text->isPublished() || $this->isInBackoffice()))
		{
			$request->setAttribute('text', $text);
			return website_BlockView::SUCCESS;
		}
		
		return website_BlockView::NONE;
	}
}