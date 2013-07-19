<?php

class Context_HeaderSuccessView extends downloadvarContextBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);
		
		$this->setAttribute('_title', 'Header');
	}
}

?>