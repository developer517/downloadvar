<?php

class News_TwoMenu_Edite_EditErrorView extends downloadvarNewsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$id = $rd->getParameter('id');
		$this->setupHtml($rd,'admin');
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('news.twomenu.edite.edit',array('id' => $id)));
		$this->setAttribute('_title', 'TwoMenu.Edite.Edit');
	}
}

?>