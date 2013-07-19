<?php

class News_Menu_Edite_EditErrorView extends downloadvarNewsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$id = $rd->getParameter('id');
		$this->setupHtml($rd,'admin');
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('news.menu.edite.edit',array('id' => $id)));
		$this->setAttribute('_title', 'Menu.Edite.Edit');
	}
}

?>