<?php

class Default_LoginErrorView extends downloadvarDefaultBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'log');
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('login'));
		$this->setAttribute('_title', 'Login');
	}
}

?>