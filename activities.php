<?php
defined( '_JEXEC' ) or die;


new position
class plgContentActivities extends JPlugin
{
	public function onContentPrepare($context, &$article, &$params, $page = 0)
	{
		$cities = array('/(activity)/i');
		$url = JRoute::_('index.php?option=com_explore&view=activities');
		$replacement = '<a href="' . $url . '">$1</a>';
		$article->text = preg_replace($cities, $replacement, $article->text);
	}
}
