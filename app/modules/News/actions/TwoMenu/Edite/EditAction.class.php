<?php

class News_TwoMenu_Edite_EditAction extends downloadvarNewsBaseAction
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
		$id = $rd->getParameter('id');
		$object = SecondCategoryQuery::create()->findPks($id);
		$items = OneCategoryQuery::create()->find();
		$this->setAttribute('second_category', $object->toArray());
		$this->setAttribute('one_category', $items->toArray());
		return 'Input';
	}
		public function executeWrite(AgaviWebRequestDataHolder $rd)
	{
		$id = $rd->getParameter('id');
		$pname = $rd->getParameter('pname');
		$ename = $rd->getParameter('ename');
		$onecat = $rd->getParameter('onecat');
		$desc = $rd->getParameter('desc');
		$tag = $rd->getParameter('tag');
		$object = SecondCategoryQuery::create()->filterById($id)
		->update(
		array(
		'PersianName' => $pname,
		'EnglishName' => $ename,
		'OneCategoryId' => $onecat,
		'Description' => $desc,
		'Tag' => $tag
		)
		);
		return 'Success';
	}
public function isSecure()
	{
		return 'true';
	}
}

?>