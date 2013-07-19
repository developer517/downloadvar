<?php

class News_Matter_Edite_EditInputView extends downloadvarNewsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		
		$this->setAttribute('_title', 'Matter.Edite.Edit');
	}
}

?>