<?php

class Connective_Comment_CreateErrorView extends downloadvarConnectiveBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'connect');
		$url = $this->getContext()->getRouting();
		$id = $rd->getParameter('id');
		$this->getResponse()->setRedirect($url->gen('download.continue',array('id' => $id)));
		$this->setAttribute('_title', 'خطا');
	}
}

?>