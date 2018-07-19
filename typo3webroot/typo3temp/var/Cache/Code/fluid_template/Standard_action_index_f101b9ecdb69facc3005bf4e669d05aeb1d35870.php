<?php

class Standard_action_index_f101b9ecdb69facc3005bf4e669d05aeb1d35870 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'v' => 
  array (
    0 => 'FluidTYPO3\\Vhs\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '<header class="header">
	<div class="container clearfix">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return '
			<img src="fileadmin/templates/bigbyte2015/img/logo.png" alt="bigbyte">
		';
};
$arguments1 = array();
$arguments1['pageUid'] = NULL;
$arguments1['additionalParams'] = array (
);
$arguments1['pageType'] = 0;
$arguments1['noCache'] = false;
$arguments1['noCacheHash'] = false;
$arguments1['section'] = '';
$arguments1['linkAccessRestrictedPages'] = false;
$arguments1['absolute'] = false;
$arguments1['addQueryString'] = false;
$arguments1['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1['addQueryStringMethod'] = NULL;
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['class'] = NULL;
$arguments1['dir'] = NULL;
$arguments1['id'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['style'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$arguments1['target'] = NULL;
$arguments1['rel'] = NULL;
$array3 = array (
);$arguments1['pageUid'] = $renderingContext->getVariableProvider()->getByPath('logoPid', $array3);
$arguments1['class'] = 'logo';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['typoscriptObjectPath'] = NULL;
$arguments4['data'] = NULL;
$arguments4['currentValueKey'] = NULL;
$arguments4['table'] = '';
$arguments4['typoscriptObjectPath'] = 'lib.smallnavigation';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '


	</div>
</header>

<div class="search">

		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['typoscriptObjectPath'] = NULL;
$arguments6['data'] = NULL;
$arguments6['currentValueKey'] = NULL;
$arguments6['table'] = '';
$arguments6['typoscriptObjectPath'] = 'lib.quicksearch';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output0 .= '

	</div>


<div class="preheader">
		<div class="container clearfix">
			<nav id="dl-menu" class="mainnavigation dl-menuwrapper">
				<button class="dl-trigger">Menu</button>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['typoscriptObjectPath'] = NULL;
$arguments8['data'] = NULL;
$arguments8['currentValueKey'] = NULL;
$arguments8['table'] = '';
$arguments8['typoscriptObjectPath'] = 'lib.mainnavigation';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output0 .= '
			</nav>
		</div>
</div>

<div class="hero">
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['typoscriptObjectPath'] = NULL;
$arguments10['data'] = NULL;
$arguments10['currentValueKey'] = NULL;
$arguments10['table'] = '';
$arguments10['typoscriptObjectPath'] = 'lib.heroContent';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output0 .= '
</div>

<div class="content container">
	<!--TYPO3SEARCH_begin-->
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['typoscriptObjectPath'] = NULL;
$arguments12['data'] = NULL;
$arguments12['currentValueKey'] = NULL;
$arguments12['table'] = '';
$arguments12['typoscriptObjectPath'] = 'lib.content';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output0 .= '
	<!--TYPO3SEARCH_end-->
</div>

<footer class="footer">
	<div class="container">
		<div class="sociallinks">
			<a href="https://www.linkedin.com/pub/uwe-goehring/a/20a/176" title="bigbyte on LinkedIn"><img src="fileadmin/templates/bigbyte2015/img/linkedin.png" alt="bigbyte on LinkedIn"></a>
			<a href="https://twitter.com/uwegoe" title="bigbyte on Twitter"><img src="fileadmin/templates/bigbyte2015/img/twitter.png" alt="bigbyte on Twitter"></a>
			<a href="http://scn.sap.com/people/uwe.goehring" title="bigbyte on SAP community network"><img src="fileadmin/templates/bigbyte2015/img/scn.png" alt="bigbyte on SAP community network"></a>
		</div>
		<div class="row clearfix">
			<div class="col-2">
				<nav class="footernavigation">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['typoscriptObjectPath'] = NULL;
$arguments14['data'] = NULL;
$arguments14['currentValueKey'] = NULL;
$arguments14['table'] = '';
$arguments14['typoscriptObjectPath'] = 'lib.footernavigation';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output0 .= '
				</nav>
			</div>
			<div class="col-2 col-sm-6">
				<h4>Mailing Address:</h4>
				<address>
					<p><b>USA</b></p>
					<p>bigbyte software systems inc.<br>
						99 Reade Street, PHE<br>
						New York,<br>
						NY 10013</p>
				</address>
			</div>
			<div class="col-2 col-sm-6">
				<h4>&nbsp;</h4>
				<address>
					<p>&nbsp;</p>
					<p>bigbyte software systems inc.<br>
						2214 NW 171st Terrace<br>
						Pembroke Pines,<br>
						FL 33028</p>
				</address>
			</div>
			<div class="col-2 col-sm-6">
				<h4>&nbsp;</h4>
				<address>
					<p><b>DE</b></p>
					<p>bigbyte gmbh<br>
						Hauptstraße 7<br>
						77716 Haslach</p>
				</address>
			</div>
			<div class="col-2 col-sm-6">
				<h4>&nbsp;</h4>
				<address>
					<p><b>CH</b></p>
					<p>justRED AG | bigbyte software systems<br>
						Löwengraben 15<br>
						6004 Luzern</p>
				</address>
			</div>
			<div class="col-2 col-sm-6 phone">
				<h4>Phone Number:</h4>
				<p>US <a href="tel:+18775842454">+1 877 584 2454</a><br>
				DE <a href="tel:+4978329744044">+ 49 7832 9744 044</a></p>
			</div>
		</div>
		<div class="credits">
			<p>&copy; 2015. bigbyte software systems and the bigbyte logo are trademarks of bigbyte software systems inc.</p>
		</div>
	</div>
</footer>
';

return $output0;
}


}
#