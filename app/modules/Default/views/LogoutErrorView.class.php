<?php

class Default_LogoutErrorView extends downloadvarDefaultBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'log');
		$url = $this->getContext()->getRouting()->gen('news.first.admin');
		$this->getContainer()->getResponse()->setRedirect($url);
		$this->setAttribute('_title', 'Logout');
	}
}

?>