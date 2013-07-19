<?php

class Context_FooterSuccessView extends downloadvarContextBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);
		
		$this->setAttribute('_title', 'Footer');
	}
}

?>