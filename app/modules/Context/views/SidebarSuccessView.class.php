<?php

class Context_SidebarSuccessView extends downloadvarContextBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);
		
		$this->setAttribute('_title', 'Sidebar');
	}
}

?>