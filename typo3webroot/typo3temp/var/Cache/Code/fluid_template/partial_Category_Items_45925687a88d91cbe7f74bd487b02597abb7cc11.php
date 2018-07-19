<?php

class partial_Category_Items_45925687a88d91cbe7f74bd487b02597abb7cc11 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'n' => 
  array (
    0 => 'GeorgRinger\\News\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '<html xmlns:f="http://typo3.org/ns/TYPO3/CMS/Fluid/ViewHelpers">
<!-- categories -->

<div class="news-category news-list-category">
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output4 = '';

$output4 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$output40 = '';

$output40 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$output47 = '';

$output47 .= '
						<span itemprop="';
$array48 = array (
);
$output47 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('category.title', $array48)]);

$output47 .= '">';
$array49 = array (
);
$output47 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('category.title', $array49)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$output55 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();

$output55 .= '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return ', ';
};
$arguments58 = array();
$arguments58['if'] = NULL;

$output55 .= '';
return $output55;
};
$arguments50 = array();
$arguments50['then'] = NULL;
$arguments50['else'] = NULL;
$arguments50['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array52 = array();
$array53 = array (
);$array52['0'] = $renderingContext->getVariableProvider()->getByPath('catIterator.isLast', $array53);

$expression54 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments50['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression54(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array52)
					),
					$renderingContext
				);
$arguments50['__thenClosure'] = function() use ($renderingContext, $self) {
return NULL;
};
$arguments50['__elseClosures'][] = function() use ($renderingContext, $self) {
return ', ';
};

$output47 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output47 .= '</span>
					';
return $output47;
};
$arguments44 = array();
$arguments44['pageUid'] = NULL;
$arguments44['additionalParams'] = array (
);
$arguments44['pageType'] = 0;
$arguments44['noCache'] = false;
$arguments44['noCacheHash'] = false;
$arguments44['section'] = '';
$arguments44['linkAccessRestrictedPages'] = false;
$arguments44['absolute'] = false;
$arguments44['addQueryString'] = false;
$arguments44['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments44['addQueryStringMethod'] = NULL;
$arguments44['additionalAttributes'] = NULL;
$arguments44['data'] = NULL;
$arguments44['class'] = NULL;
$arguments44['dir'] = NULL;
$arguments44['id'] = NULL;
$arguments44['lang'] = NULL;
$arguments44['style'] = NULL;
$arguments44['title'] = NULL;
$arguments44['accesskey'] = NULL;
$arguments44['tabindex'] = NULL;
$arguments44['onclick'] = NULL;
$arguments44['target'] = NULL;
$arguments44['rel'] = NULL;
$array46 = array (
);$arguments44['pageUid'] = $renderingContext->getVariableProvider()->getByPath('category.shortcut', $array46);

$output43 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output43 .= '
				';
return $output43;
};
$arguments41 = array();

$output40 .= '';

$output40 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$output62 = '';

$output62 .= '
					<span itemprop="';
$array63 = array (
);
$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('category.title', $array63)]);

$output62 .= '">';
$array64 = array (
);
$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('category.title', $array64)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$output70 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments71 = array();

$output70 .= '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
return ', ';
};
$arguments73 = array();
$arguments73['if'] = NULL;

$output70 .= '';
return $output70;
};
$arguments65 = array();
$arguments65['then'] = NULL;
$arguments65['else'] = NULL;
$arguments65['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array67 = array();
$array68 = array (
);$array67['0'] = $renderingContext->getVariableProvider()->getByPath('catIterator.isLast', $array68);

$expression69 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments65['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression69(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array67)
					),
					$renderingContext
				);
$arguments65['__thenClosure'] = function() use ($renderingContext, $self) {
return NULL;
};
$arguments65['__elseClosures'][] = function() use ($renderingContext, $self) {
return ', ';
};

$output62 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output62 .= '</span>
				';
return $output62;
};
$arguments60 = array();
$arguments60['if'] = NULL;

$output40 .= '';

$output40 .= '
			';
return $output40;
};
$arguments5 = array();
$arguments5['then'] = NULL;
$arguments5['else'] = NULL;
$arguments5['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array37 = array();
$array38 = array (
);$array37['0'] = $renderingContext->getVariableProvider()->getByPath('category.shortcut', $array38);

$expression39 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments5['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression39(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array37)
					),
					$renderingContext
				);
$arguments5['__thenClosure'] = function() use ($renderingContext, $self) {
$output7 = '';

$output7 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$output11 = '';

$output11 .= '
						<span itemprop="';
$array12 = array (
);
$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('category.title', $array12)]);

$output11 .= '">';
$array13 = array (
);
$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('category.title', $array13)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$output19 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();

$output19 .= '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return ', ';
};
$arguments22 = array();
$arguments22['if'] = NULL;

$output19 .= '';
return $output19;
};
$arguments14 = array();
$arguments14['then'] = NULL;
$arguments14['else'] = NULL;
$arguments14['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array16 = array();
$array17 = array (
);$array16['0'] = $renderingContext->getVariableProvider()->getByPath('catIterator.isLast', $array17);

$expression18 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments14['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression18(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array16)
					),
					$renderingContext
				);
$arguments14['__thenClosure'] = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14['__elseClosures'][] = function() use ($renderingContext, $self) {
return ', ';
};

$output11 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output11 .= '</span>
					';
return $output11;
};
$arguments8 = array();
$arguments8['pageUid'] = NULL;
$arguments8['additionalParams'] = array (
);
$arguments8['pageType'] = 0;
$arguments8['noCache'] = false;
$arguments8['noCacheHash'] = false;
$arguments8['section'] = '';
$arguments8['linkAccessRestrictedPages'] = false;
$arguments8['absolute'] = false;
$arguments8['addQueryString'] = false;
$arguments8['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments8['addQueryStringMethod'] = NULL;
$arguments8['additionalAttributes'] = NULL;
$arguments8['data'] = NULL;
$arguments8['class'] = NULL;
$arguments8['dir'] = NULL;
$arguments8['id'] = NULL;
$arguments8['lang'] = NULL;
$arguments8['style'] = NULL;
$arguments8['title'] = NULL;
$arguments8['accesskey'] = NULL;
$arguments8['tabindex'] = NULL;
$arguments8['onclick'] = NULL;
$arguments8['target'] = NULL;
$arguments8['rel'] = NULL;
$array10 = array (
);$arguments8['pageUid'] = $renderingContext->getVariableProvider()->getByPath('category.shortcut', $array10);

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output7 .= '
				';
return $output7;
};
$arguments5['__elseClosures'][] = function() use ($renderingContext, $self) {
$output24 = '';

$output24 .= '
					<span itemprop="';
$array25 = array (
);
$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('category.title', $array25)]);

$output24 .= '">';
$array26 = array (
);
$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('category.title', $array26)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$output32 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();

$output32 .= '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return ', ';
};
$arguments35 = array();
$arguments35['if'] = NULL;

$output32 .= '';
return $output32;
};
$arguments27 = array();
$arguments27['then'] = NULL;
$arguments27['else'] = NULL;
$arguments27['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array29 = array();
$array30 = array (
);$array29['0'] = $renderingContext->getVariableProvider()->getByPath('catIterator.isLast', $array30);

$expression31 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments27['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression31(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array29)
					),
					$renderingContext
				);
$arguments27['__thenClosure'] = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27['__elseClosures'][] = function() use ($renderingContext, $self) {
return ', ';
};

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output24 .= '</span>
				';
return $output24;
};

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '
		';
return $output4;
};
$arguments1 = array();
$arguments1['each'] = NULL;
$arguments1['as'] = NULL;
$arguments1['key'] = NULL;
$arguments1['reverse'] = false;
$arguments1['iteration'] = NULL;
$array3 = array (
);$arguments1['each'] = $renderingContext->getVariableProvider()->getByPath('categories', $array3);
$arguments1['as'] = 'category';
$arguments1['iteration'] = 'catIterator';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
</div>

</html>

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$output77 = '';

$output77 .= '
<span class="news-category news-list-category">
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
$output81 = '';

$output81 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$output115 = '';

$output115 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
$output118 = '';

$output118 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
$output122 = '';

$output122 .= '
						';
$array123 = array (
);
$output122 .= $renderingContext->getVariableProvider()->getByPath('category.title', $array123);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
$output129 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments130 = array();

$output129 .= '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
return ', ';
};
$arguments132 = array();
$arguments132['if'] = NULL;

$output129 .= '';
return $output129;
};
$arguments124 = array();
$arguments124['then'] = NULL;
$arguments124['else'] = NULL;
$arguments124['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array126 = array();
$array127 = array (
);$array126['0'] = $renderingContext->getVariableProvider()->getByPath('catIterator.isLast', $array127);

$expression128 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments124['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression128(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array126)
					),
					$renderingContext
				);
$arguments124['__thenClosure'] = function() use ($renderingContext, $self) {
return NULL;
};
$arguments124['__elseClosures'][] = function() use ($renderingContext, $self) {
return ', ';
};

$output122 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);

$output122 .= '
					';
return $output122;
};
$arguments119 = array();
$arguments119['pageUid'] = NULL;
$arguments119['additionalParams'] = array (
);
$arguments119['pageType'] = 0;
$arguments119['noCache'] = false;
$arguments119['noCacheHash'] = false;
$arguments119['section'] = '';
$arguments119['linkAccessRestrictedPages'] = false;
$arguments119['absolute'] = false;
$arguments119['addQueryString'] = false;
$arguments119['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments119['addQueryStringMethod'] = NULL;
$arguments119['additionalAttributes'] = NULL;
$arguments119['data'] = NULL;
$arguments119['class'] = NULL;
$arguments119['dir'] = NULL;
$arguments119['id'] = NULL;
$arguments119['lang'] = NULL;
$arguments119['style'] = NULL;
$arguments119['title'] = NULL;
$arguments119['accesskey'] = NULL;
$arguments119['tabindex'] = NULL;
$arguments119['onclick'] = NULL;
$arguments119['target'] = NULL;
$arguments119['rel'] = NULL;
$array121 = array (
);$arguments119['pageUid'] = $renderingContext->getVariableProvider()->getByPath('category.shortcut', $array121);

$output118 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);

$output118 .= '
				';
return $output118;
};
$arguments116 = array();

$output115 .= '';

$output115 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
$output136 = '';

$output136 .= '
					';
$array137 = array (
);
$output136 .= $renderingContext->getVariableProvider()->getByPath('category.title', $array137);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
$output143 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments144 = array();

$output143 .= '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
return ', ';
};
$arguments146 = array();
$arguments146['if'] = NULL;

$output143 .= '';
return $output143;
};
$arguments138 = array();
$arguments138['then'] = NULL;
$arguments138['else'] = NULL;
$arguments138['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array140 = array();
$array141 = array (
);$array140['0'] = $renderingContext->getVariableProvider()->getByPath('catIterator.isLast', $array141);

$expression142 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments138['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression142(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array140)
					),
					$renderingContext
				);
$arguments138['__thenClosure'] = function() use ($renderingContext, $self) {
return NULL;
};
$arguments138['__elseClosures'][] = function() use ($renderingContext, $self) {
return ', ';
};

$output136 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext);

$output136 .= '
				';
return $output136;
};
$arguments134 = array();
$arguments134['if'] = NULL;

$output115 .= '';

$output115 .= '
			';
return $output115;
};
$arguments82 = array();
$arguments82['then'] = NULL;
$arguments82['else'] = NULL;
$arguments82['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array112 = array();
$array113 = array (
);$array112['0'] = $renderingContext->getVariableProvider()->getByPath('category.shortcut', $array113);

$expression114 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments82['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression114(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array112)
					),
					$renderingContext
				);
$arguments82['__thenClosure'] = function() use ($renderingContext, $self) {
$output84 = '';

$output84 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$output88 = '';

$output88 .= '
						';
$array89 = array (
);
$output88 .= $renderingContext->getVariableProvider()->getByPath('category.title', $array89);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$output95 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments96 = array();

$output95 .= '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
return ', ';
};
$arguments98 = array();
$arguments98['if'] = NULL;

$output95 .= '';
return $output95;
};
$arguments90 = array();
$arguments90['then'] = NULL;
$arguments90['else'] = NULL;
$arguments90['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array92 = array();
$array93 = array (
);$array92['0'] = $renderingContext->getVariableProvider()->getByPath('catIterator.isLast', $array93);

$expression94 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments90['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression94(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array92)
					),
					$renderingContext
				);
$arguments90['__thenClosure'] = function() use ($renderingContext, $self) {
return NULL;
};
$arguments90['__elseClosures'][] = function() use ($renderingContext, $self) {
return ', ';
};

$output88 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output88 .= '
					';
return $output88;
};
$arguments85 = array();
$arguments85['pageUid'] = NULL;
$arguments85['additionalParams'] = array (
);
$arguments85['pageType'] = 0;
$arguments85['noCache'] = false;
$arguments85['noCacheHash'] = false;
$arguments85['section'] = '';
$arguments85['linkAccessRestrictedPages'] = false;
$arguments85['absolute'] = false;
$arguments85['addQueryString'] = false;
$arguments85['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments85['addQueryStringMethod'] = NULL;
$arguments85['additionalAttributes'] = NULL;
$arguments85['data'] = NULL;
$arguments85['class'] = NULL;
$arguments85['dir'] = NULL;
$arguments85['id'] = NULL;
$arguments85['lang'] = NULL;
$arguments85['style'] = NULL;
$arguments85['title'] = NULL;
$arguments85['accesskey'] = NULL;
$arguments85['tabindex'] = NULL;
$arguments85['onclick'] = NULL;
$arguments85['target'] = NULL;
$arguments85['rel'] = NULL;
$array87 = array (
);$arguments85['pageUid'] = $renderingContext->getVariableProvider()->getByPath('category.shortcut', $array87);

$output84 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output84 .= '
				';
return $output84;
};
$arguments82['__elseClosures'][] = function() use ($renderingContext, $self) {
$output100 = '';

$output100 .= '
					';
$array101 = array (
);
$output100 .= $renderingContext->getVariableProvider()->getByPath('category.title', $array101);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$output107 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments108 = array();

$output107 .= '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
return ', ';
};
$arguments110 = array();
$arguments110['if'] = NULL;

$output107 .= '';
return $output107;
};
$arguments102 = array();
$arguments102['then'] = NULL;
$arguments102['else'] = NULL;
$arguments102['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array104 = array();
$array105 = array (
);$array104['0'] = $renderingContext->getVariableProvider()->getByPath('catIterator.isLast', $array105);

$expression106 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments102['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression106(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array104)
					),
					$renderingContext
				);
$arguments102['__thenClosure'] = function() use ($renderingContext, $self) {
return NULL;
};
$arguments102['__elseClosures'][] = function() use ($renderingContext, $self) {
return ', ';
};

$output100 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output100 .= '
				';
return $output100;
};

$output81 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output81 .= '
		';
return $output81;
};
$arguments78 = array();
$arguments78['each'] = NULL;
$arguments78['as'] = NULL;
$arguments78['key'] = NULL;
$arguments78['reverse'] = false;
$arguments78['iteration'] = NULL;
$array80 = array (
);$arguments78['each'] = $renderingContext->getVariableProvider()->getByPath('categories', $array80);
$arguments78['as'] = 'category';
$arguments78['iteration'] = 'catIterator';

$output77 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output77 .= '
</span>
';
return $output77;
};
$arguments75 = array();

$output0 .= NULL;

return $output0;
}


}
#