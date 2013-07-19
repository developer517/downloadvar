<?php

class Default_LoginSuccessView extends downloadvarDefaultBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
	    $this->setupHtml($rd,'log');
		$user = $this->getContext()->getUser();
    $res = $this->getResponse();
  
    // set the autologon cookie if requested
    if($rd->hasParameter('remember')) {
      $res->setCookie('autologon[username]', $rd->getParameter('username'), '+1 week');
      $res->setCookie('autologon[password]', $user->getCurrentUser()->getPassword(), '+1 week');
    }
  
    if($user->hasAttribute('redirect', 'org.agavi.downloadvar.login')) {
      $this->getResponse()->setRedirect($user->removeAttribute('redirect', 'org.agavi.downloadvar.login'));
      return;
    } else {
      $this->getResponse()->setRedirect($this->getContext()->getRouting()->gen('news.matter.admin.index'));
    }

		$this->setAttribute('_title', 'Login');
	}
}

?>