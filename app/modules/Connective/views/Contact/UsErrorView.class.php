<?php

class Connective_Contact_UsErrorView extends downloadvarConnectiveBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'connect');
		$this->setAttribute('_title', 'خطا');
	}
}

?>