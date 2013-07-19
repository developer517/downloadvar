<?php

class News_TwoMenu_Create_AddInputView extends downloadvarNewsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		
		$this->setAttribute('_title', 'TwoMenu.Create.Add');
	}
}

?>