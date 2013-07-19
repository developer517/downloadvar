<?php

class Connective_Contact_UsSuccessView extends downloadvarConnectiveBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'connect');
		$this->setAttribute('_title', 'با موفقیت ارسال شد');
	}
}

?>