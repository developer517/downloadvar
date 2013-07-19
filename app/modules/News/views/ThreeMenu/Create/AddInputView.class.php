<?php

class News_ThreeMenu_Create_AddInputView extends downloadvarNewsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		
		$this->setAttribute('_title', 'ThreeMenu.Create.Add');
	}
}

?>