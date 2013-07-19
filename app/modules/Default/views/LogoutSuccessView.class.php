<?php

class Default_LogoutSuccessView extends downloadvarDefaultBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'log');
		$url = $this->getContext()->getRouting()->gen('login');
		$this->getContainer()->getResponse()->setRedirect($url);
		
		$this->setAttribute('_title', 'Logout');
	}
}

?>