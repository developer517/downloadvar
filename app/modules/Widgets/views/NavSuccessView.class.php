<?php

class Widgets_NavSuccessView extends downloadvarWidgetsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);
		
		$this->setAttribute('_title', 'Nav');
	}
}

?>