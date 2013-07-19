<?php

class News_User_Create_IndexSuccessView extends downloadvarNewsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('news.user.admin.index'));
		$this->setAttribute('_title', 'User.Create.Index');
	}
}

?>