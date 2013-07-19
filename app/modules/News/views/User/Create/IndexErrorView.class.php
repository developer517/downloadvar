<?php

class News_User_Create_IndexErrorView extends downloadvarNewsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('news.user.create.index'));
		$this->setAttribute('_title', 'User.Create.Index');
	}
}

?>