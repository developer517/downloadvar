<?php

class Widgets_FooterSuccessView extends downloadvarWidgetsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);
		
		$this->setAttribute('_title', 'Footer');
	}
}

?>