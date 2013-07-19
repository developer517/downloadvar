<?php

class News_TwoMenu_Edite_EditInputView extends downloadvarNewsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		
		$this->setAttribute('_title', 'TwoMenu.Edite.Edit');
	}
}

?>