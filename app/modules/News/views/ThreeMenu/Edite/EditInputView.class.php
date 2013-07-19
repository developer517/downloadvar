<?php

class News_ThreeMenu_Edite_EditInputView extends downloadvarNewsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		
		$this->setAttribute('_title', 'ThreeMenu.Edite.Edit');
	}
}

?>