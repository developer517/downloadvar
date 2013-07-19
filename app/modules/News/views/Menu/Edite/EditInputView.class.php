<?php

class News_Menu_Edite_EditInputView extends downloadvarNewsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		
		$this->setAttribute('_title', 'Menu.Edite.Edit');
	}
}

?>