<?php

class Connective_About_UsSuccessView extends downloadvarConnectiveBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'connect');
		
		$this->setAttribute('_title', 'درباره ما');
	}
}

?>