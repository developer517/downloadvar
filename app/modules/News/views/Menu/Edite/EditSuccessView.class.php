<?php

class News_Menu_Edite_EditSuccessView extends downloadvarNewsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('news.menu.admin.index'));
		$this->setAttribute('_title', 'Menu.Edite.Edit');
	}
}

?>