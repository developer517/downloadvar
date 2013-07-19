<?php

class News_ThreeMenu_Create_AddAction extends downloadvarNewsBaseAction
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
		return 'Input';
	}
	public function executeRead(AgaviRequestDataHolder $rd)
	{
		$object = SecondCategoryQuery::create()->find();
		$this->setAttribute('second_category', $object->toArray());
		return 'Input';
	}
	public function executeWrite(AgaviWebRequestDataHolder $rd)
	{
		$pname = $rd->getParameter('pname');
		$ename = $rd->getParameter('ename');
		$seccat = $rd->getParameter('seccat');
		$desc = $rd->getParameter('desc');
		$tag = $rd->getParameter('tag');
		$object = new ThirdCategory();
		$object->setPersianName($pname);
		$object->setEnglishName($ename);
		$object->setSecondCategoryId($seccat);
		$object->setDescription($desc);
		$object->setTag($tag);
		$object->save();
		return 'Success';
	}
public function isSecure()
	{
		return 'true';
	}
}

?>