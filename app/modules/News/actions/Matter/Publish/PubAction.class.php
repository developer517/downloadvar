<?php

class News_Matter_Publish_PubAction extends downloadvarNewsBaseAction
{
	/**
	 * Returns the default view if the action does not serve the request
	 * method used.
	 *
	 * @return     mixed <ul>
	 *                     <li>A string containing the view name associated
	 *                     with this action; or</li>
	 *                     <li>An array with two indices: the parent module
	 *                     of the view to be executed and the view to be
	 *                     executed.</li>
	 *                   </ul>
	 */
	public function getDefaultViewName()
	{
		return 'Success';
	}
	public function executeRead(AgaviRequestDataHolder $rd)
	{
		$id = $rd->getParameter('id');
		$object = MatterQuery::create()->findOneById($id);
		if ($object->getPublisher() == '1')
		$object->setPublisher(0);
		else 
		$object->setPublisher(1);
		$object->save();
		return 'Success';
	}
public function isSecure()
	{
		return 'true';
	}
}

?>