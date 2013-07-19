<?php

class Connective_Contact_UsAction extends downloadvarConnectiveBaseAction
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
		$tik = TiketQuery::create()->find();
		$this->setAttribute('tiket', $tik->toArray());
		return 'Input';
	}

	public function executeWrite(AgaviWebRequestDataHolder $rd)
	{
		$tik = TiketQuery::create()->find();
		$this->setAttribute('tiket', $tik->toArray());
		$counter = 1000 -  count($tik) ;
		$shamsi = new jDateTime();
		$name= $rd->getParameter('name');
		$cat = $rd->getParameter('category');
		$email  = $rd->getParameter('email');
		$desc = $rd->getParameter('desc');
		$order = $rd->getParameter('order');
		$tiket = new Tiket();
		$tiket->setName($name);
		$tiket->setCategory($cat);
		$tiket->setOrder($order);
		$tiket->setDesc($desc);
		$tiket->setEmail($email);
		$tiket->setAction(0);
		$tiket->setIncrease($counter);
		$tiket->setDate($shamsi->date('d M Y',time()));
		$tiket->save();
		return 'Success';
	}
}

?>