<?php

class Connective_Comment_CreateSuccessView extends downloadvarConnectiveBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'connect');
		$this->setAttribute('_title', 'با موفقیت ارسال شد');
	}
}

?>