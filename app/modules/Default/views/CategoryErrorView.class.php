<?php

class Default_CategoryErrorView extends downloadvarDefaultBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'matter');
		
		$this->setAttribute('_title', 'Category');
	}
}

?>