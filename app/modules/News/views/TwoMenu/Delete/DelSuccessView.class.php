<?php

class News_TwoMenu_Delete_DelSuccessView extends downloadvarNewsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('news.twomenu.admin.index'));
		$this->setAttribute('_title', 'TwoMenu.Delete.Del');
	}
}

?>