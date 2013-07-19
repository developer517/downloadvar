<?php

class Connective_About_UsErrorView extends downloadvarConnectiveBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'connect');
		
		$this->setAttribute('_title', 'About.Us');
	}
}

?>