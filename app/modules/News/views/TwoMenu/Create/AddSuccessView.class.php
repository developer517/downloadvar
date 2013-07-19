<?php

class News_TwoMenu_Create_AddSuccessView extends downloadvarNewsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('news.threemenu.create.add'));
		$this->setAttribute('_title', 'TwoMenu.Create.Add');
	}
}

?>