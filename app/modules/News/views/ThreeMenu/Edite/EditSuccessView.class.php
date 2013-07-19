<?php

class News_ThreeMenu_Edite_EditSuccessView extends downloadvarNewsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('news.threemenu.admin.index'));
		$this->setAttribute('_title', 'ThreeMenu.Edite.Edit');
	}
}

?>