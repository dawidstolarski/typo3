<?php

class partial_List_Item_6bf51074e3aeca5726caf9979e32c1bbeecee4d4 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section previewImage
 */
public function section_925e3f9925a88476ffbadb372742d045edf4a425(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output108 = '';

$output108 .= '
		<!-- media preview element -->
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
$output111 = '';

$output111 .= '
			<div class="news-image news-img-wrap">
				';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$output117 = '';

$output117 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
$output122 = '';

$output122 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
$output128 = '';

$output128 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments129 = array();
$arguments129['additionalAttributes'] = NULL;
$arguments129['data'] = NULL;
$arguments129['class'] = NULL;
$arguments129['dir'] = NULL;
$arguments129['id'] = NULL;
$arguments129['lang'] = NULL;
$arguments129['style'] = NULL;
$arguments129['title'] = NULL;
$arguments129['accesskey'] = NULL;
$arguments129['tabindex'] = NULL;
$arguments129['onclick'] = NULL;
$arguments129['alt'] = NULL;
$arguments129['ismap'] = NULL;
$arguments129['longdesc'] = NULL;
$arguments129['usemap'] = NULL;
$arguments129['src'] = NULL;
$arguments129['treatIdAsReference'] = NULL;
$arguments129['image'] = NULL;
$arguments129['crop'] = NULL;
$arguments129['cropVariant'] = 'default';
$arguments129['width'] = NULL;
$arguments129['height'] = NULL;
$arguments129['minWidth'] = NULL;
$arguments129['minHeight'] = NULL;
$arguments129['maxWidth'] = NULL;
$arguments129['maxHeight'] = NULL;
$arguments129['absolute'] = false;
$array131 = array (
);$arguments129['image'] = $renderingContext->getVariableProvider()->getByPath('mediaElement', $array131);
$array132 = array (
);$arguments129['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array132);
$array133 = array (
);$arguments129['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array133);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments134 = array();
$arguments134['then'] = NULL;
$arguments134['else'] = NULL;
$arguments134['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array136 = array();
$array137 = array (
);$array136['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array137);

$expression138 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments134['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression138(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array136)
					),
					$renderingContext
				);
$array139 = array (
);$arguments134['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array139);
$array140 = array (
);$arguments134['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array140);
$arguments129['maxWidth'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments141 = array();
$arguments141['then'] = NULL;
$arguments141['else'] = NULL;
$arguments141['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array143 = array();
$array144 = array (
);$array143['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array144);

$expression145 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments141['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression145(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array143)
					),
					$renderingContext
				);
$array146 = array (
);$arguments141['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array146);
$array147 = array (
);$arguments141['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array147);
$arguments129['maxHeight'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);

$output128 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output128 .= '
						';
return $output128;
};
$arguments123 = array();
$arguments123['then'] = NULL;
$arguments123['else'] = NULL;
$arguments123['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array125 = array();
$array126 = array (
);$array125['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.type', $array126);
$array125['1'] = ' == 2';

$expression127 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments123['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression127(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array125)
					),
					$renderingContext
				);
$arguments123['__thenClosure'] = $renderChildrenClosure124;

$output122 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);

$output122 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
$output153 = '';

$output153 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments154 = array();
$arguments154['additionalAttributes'] = NULL;
$arguments154['data'] = NULL;
$arguments154['class'] = NULL;
$arguments154['dir'] = NULL;
$arguments154['id'] = NULL;
$arguments154['lang'] = NULL;
$arguments154['style'] = NULL;
$arguments154['title'] = NULL;
$arguments154['accesskey'] = NULL;
$arguments154['tabindex'] = NULL;
$arguments154['onclick'] = NULL;
$arguments154['alt'] = NULL;
$arguments154['ismap'] = NULL;
$arguments154['longdesc'] = NULL;
$arguments154['usemap'] = NULL;
$arguments154['src'] = NULL;
$arguments154['treatIdAsReference'] = NULL;
$arguments154['image'] = NULL;
$arguments154['crop'] = NULL;
$arguments154['cropVariant'] = 'default';
$arguments154['width'] = NULL;
$arguments154['height'] = NULL;
$arguments154['minWidth'] = NULL;
$arguments154['minHeight'] = NULL;
$arguments154['maxWidth'] = NULL;
$arguments154['maxHeight'] = NULL;
$arguments154['absolute'] = false;
$arguments154['src'] = 'fileadmin/templates/bigbyte2015/img/video_thumb.png';
$array156 = array (
);$arguments154['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.caption', $array156);
$array157 = array (
);$arguments154['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.caption', $array157);

$output153 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);

$output153 .= '
						';
return $output153;
};
$arguments148 = array();
$arguments148['then'] = NULL;
$arguments148['else'] = NULL;
$arguments148['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array150 = array();
$array151 = array (
);$array150['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.type', $array151);
$array150['1'] = ' == 4';

$expression152 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 4);};
$arguments148['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression152(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array150)
					),
					$renderingContext
				);
$arguments148['__thenClosure'] = $renderChildrenClosure149;

$output122 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext);

$output122 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
$output163 = '';

$output163 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments164 = array();
$arguments164['additionalAttributes'] = NULL;
$arguments164['data'] = NULL;
$arguments164['class'] = NULL;
$arguments164['dir'] = NULL;
$arguments164['id'] = NULL;
$arguments164['lang'] = NULL;
$arguments164['style'] = NULL;
$arguments164['title'] = NULL;
$arguments164['accesskey'] = NULL;
$arguments164['tabindex'] = NULL;
$arguments164['onclick'] = NULL;
$arguments164['alt'] = NULL;
$arguments164['ismap'] = NULL;
$arguments164['longdesc'] = NULL;
$arguments164['usemap'] = NULL;
$arguments164['src'] = NULL;
$arguments164['treatIdAsReference'] = NULL;
$arguments164['image'] = NULL;
$arguments164['crop'] = NULL;
$arguments164['cropVariant'] = 'default';
$arguments164['width'] = NULL;
$arguments164['height'] = NULL;
$arguments164['minWidth'] = NULL;
$arguments164['minHeight'] = NULL;
$arguments164['maxWidth'] = NULL;
$arguments164['maxHeight'] = NULL;
$arguments164['absolute'] = false;
$array166 = array (
);$arguments164['image'] = $renderingContext->getVariableProvider()->getByPath('mediaElement', $array166);
$array167 = array (
);$arguments164['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array167);
$array168 = array (
);$arguments164['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array168);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments169 = array();
$arguments169['then'] = NULL;
$arguments169['else'] = NULL;
$arguments169['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array171 = array();
$array172 = array (
);$array171['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array172);

$expression173 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments169['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression173(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array171)
					),
					$renderingContext
				);
$array174 = array (
);$arguments169['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array174);
$array175 = array (
);$arguments169['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array175);
$arguments164['maxWidth'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments169, $renderChildrenClosure170, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments176 = array();
$arguments176['then'] = NULL;
$arguments176['else'] = NULL;
$arguments176['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array178 = array();
$array179 = array (
);$array178['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array179);

$expression180 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments176['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression180(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array178)
					),
					$renderingContext
				);
$array181 = array (
);$arguments176['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array181);
$array182 = array (
);$arguments176['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array182);
$arguments164['maxHeight'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);

$output163 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext);

$output163 .= '
						';
return $output163;
};
$arguments158 = array();
$arguments158['then'] = NULL;
$arguments158['else'] = NULL;
$arguments158['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array160 = array();
$array161 = array (
);$array160['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.type', $array161);
$array160['1'] = ' == 5';

$expression162 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 5);};
$arguments158['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression162(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array160)
					),
					$renderingContext
				);
$arguments158['__thenClosure'] = $renderChildrenClosure159;

$output122 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext);

$output122 .= '
					';
return $output122;
};
$arguments118 = array();
$arguments118['map'] = NULL;
// Rendering Array
$array120 = array();
$array121 = array (
);$array120['mediaElement'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array121);
$arguments118['map'] = $array120;

$output117 .= TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);

$output117 .= '
				';
return $output117;
};
$arguments112 = array();
$arguments112['additionalAttributes'] = NULL;
$arguments112['data'] = NULL;
$arguments112['class'] = NULL;
$arguments112['dir'] = NULL;
$arguments112['id'] = NULL;
$arguments112['lang'] = NULL;
$arguments112['style'] = NULL;
$arguments112['title'] = NULL;
$arguments112['accesskey'] = NULL;
$arguments112['tabindex'] = NULL;
$arguments112['onclick'] = NULL;
$arguments112['newsItem'] = NULL;
$arguments112['settings'] = array (
);
$arguments112['uriOnly'] = false;
$arguments112['configuration'] = array (
);
$arguments112['content'] = '';
$arguments112['section'] = NULL;
$array114 = array (
);$arguments112['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array114);
$array115 = array (
);$arguments112['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array115);
$array116 = array (
);$arguments112['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array116);

$output111 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output111 .= '
			</div>
		';
return $output111;
};
$arguments109 = array();

$output108 .= '';

$output108 .= '
		
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
$output185 = '';

$output185 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
$output191 = '';

$output191 .= '
				<div class="news-image news-img-wrap">
					<span class="no-media-element">
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
$output197 = '';

$output197 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments198 = array();
$arguments198['additionalAttributes'] = NULL;
$arguments198['data'] = NULL;
$arguments198['class'] = NULL;
$arguments198['dir'] = NULL;
$arguments198['id'] = NULL;
$arguments198['lang'] = NULL;
$arguments198['style'] = NULL;
$arguments198['title'] = NULL;
$arguments198['accesskey'] = NULL;
$arguments198['tabindex'] = NULL;
$arguments198['onclick'] = NULL;
$arguments198['alt'] = NULL;
$arguments198['ismap'] = NULL;
$arguments198['longdesc'] = NULL;
$arguments198['usemap'] = NULL;
$arguments198['src'] = NULL;
$arguments198['treatIdAsReference'] = NULL;
$arguments198['image'] = NULL;
$arguments198['crop'] = NULL;
$arguments198['cropVariant'] = 'default';
$arguments198['width'] = NULL;
$arguments198['height'] = NULL;
$arguments198['minWidth'] = NULL;
$arguments198['minHeight'] = NULL;
$arguments198['maxWidth'] = NULL;
$arguments198['maxHeight'] = NULL;
$arguments198['absolute'] = false;
$array200 = array (
);$arguments198['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array200);
$arguments198['title'] = '';
$arguments198['alt'] = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments201 = array();
$arguments201['then'] = NULL;
$arguments201['else'] = NULL;
$arguments201['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array203 = array();
$array204 = array (
);$array203['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array204);

$expression205 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments201['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression205(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array203)
					),
					$renderingContext
				);
$array206 = array (
);$arguments201['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array206);
$array207 = array (
);$arguments201['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array207);
$arguments198['maxWidth'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments208 = array();
$arguments208['then'] = NULL;
$arguments208['else'] = NULL;
$arguments208['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array210 = array();
$array211 = array (
);$array210['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array211);

$expression212 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments208['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression212(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array210)
					),
					$renderingContext
				);
$array213 = array (
);$arguments208['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array213);
$array214 = array (
);$arguments208['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array214);
$arguments198['maxHeight'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments208, $renderChildrenClosure209, $renderingContext);

$output197 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments198, $renderChildrenClosure199, $renderingContext);

$output197 .= '
						';
return $output197;
};
$arguments192 = array();
$arguments192['additionalAttributes'] = NULL;
$arguments192['data'] = NULL;
$arguments192['class'] = NULL;
$arguments192['dir'] = NULL;
$arguments192['id'] = NULL;
$arguments192['lang'] = NULL;
$arguments192['style'] = NULL;
$arguments192['title'] = NULL;
$arguments192['accesskey'] = NULL;
$arguments192['tabindex'] = NULL;
$arguments192['onclick'] = NULL;
$arguments192['newsItem'] = NULL;
$arguments192['settings'] = array (
);
$arguments192['uriOnly'] = false;
$arguments192['configuration'] = array (
);
$arguments192['content'] = '';
$arguments192['section'] = NULL;
$array194 = array (
);$arguments192['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array194);
$array195 = array (
);$arguments192['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array195);
$array196 = array (
);$arguments192['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array196);

$output191 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments192, $renderChildrenClosure193, $renderingContext);

$output191 .= '
					</span>
				</div>
			';
return $output191;
};
$arguments186 = array();
$arguments186['then'] = NULL;
$arguments186['else'] = NULL;
$arguments186['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array188 = array();
$array189 = array (
);$array188['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array189);

$expression190 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments186['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression190(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array188)
					),
					$renderingContext
				);
$arguments186['__thenClosure'] = $renderChildrenClosure187;

$output185 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments186, $renderChildrenClosure187, $renderingContext);

$output185 .= '
		';
return $output185;
};
$arguments183 = array();
$arguments183['if'] = NULL;

$output108 .= '';

$output108 .= '
	';
return $output108;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array105 = array();
$array106 = array (
);$array105['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array106);

$expression107 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression107(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array105)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
			<div class="news-image news-img-wrap">
				';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output14 = '';

$output14 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$output20 = '';

$output20 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['additionalAttributes'] = NULL;
$arguments21['data'] = NULL;
$arguments21['class'] = NULL;
$arguments21['dir'] = NULL;
$arguments21['id'] = NULL;
$arguments21['lang'] = NULL;
$arguments21['style'] = NULL;
$arguments21['title'] = NULL;
$arguments21['accesskey'] = NULL;
$arguments21['tabindex'] = NULL;
$arguments21['onclick'] = NULL;
$arguments21['alt'] = NULL;
$arguments21['ismap'] = NULL;
$arguments21['longdesc'] = NULL;
$arguments21['usemap'] = NULL;
$arguments21['src'] = NULL;
$arguments21['treatIdAsReference'] = NULL;
$arguments21['image'] = NULL;
$arguments21['crop'] = NULL;
$arguments21['cropVariant'] = 'default';
$arguments21['width'] = NULL;
$arguments21['height'] = NULL;
$arguments21['minWidth'] = NULL;
$arguments21['minHeight'] = NULL;
$arguments21['maxWidth'] = NULL;
$arguments21['maxHeight'] = NULL;
$arguments21['absolute'] = false;
$array23 = array (
);$arguments21['image'] = $renderingContext->getVariableProvider()->getByPath('mediaElement', $array23);
$array24 = array (
);$arguments21['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array24);
$array25 = array (
);$arguments21['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array25);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['then'] = NULL;
$arguments26['else'] = NULL;
$arguments26['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array28 = array();
$array29 = array (
);$array28['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array29);

$expression30 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments26['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression30(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)
					),
					$renderingContext
				);
$array31 = array (
);$arguments26['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array31);
$array32 = array (
);$arguments26['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array32);
$arguments21['maxWidth'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['then'] = NULL;
$arguments33['else'] = NULL;
$arguments33['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array35 = array();
$array36 = array (
);$array35['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array36);

$expression37 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments33['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression37(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array35)
					),
					$renderingContext
				);
$array38 = array (
);$arguments33['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array38);
$array39 = array (
);$arguments33['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array39);
$arguments21['maxHeight'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output20 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output20 .= '
						';
return $output20;
};
$arguments15 = array();
$arguments15['then'] = NULL;
$arguments15['else'] = NULL;
$arguments15['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array17 = array();
$array18 = array (
);$array17['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.type', $array18);
$array17['1'] = ' == 2';

$expression19 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments15['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression19(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array17)
					),
					$renderingContext
				);
$arguments15['__thenClosure'] = $renderChildrenClosure16;

$output14 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output14 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$output45 = '';

$output45 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments46 = array();
$arguments46['additionalAttributes'] = NULL;
$arguments46['data'] = NULL;
$arguments46['class'] = NULL;
$arguments46['dir'] = NULL;
$arguments46['id'] = NULL;
$arguments46['lang'] = NULL;
$arguments46['style'] = NULL;
$arguments46['title'] = NULL;
$arguments46['accesskey'] = NULL;
$arguments46['tabindex'] = NULL;
$arguments46['onclick'] = NULL;
$arguments46['alt'] = NULL;
$arguments46['ismap'] = NULL;
$arguments46['longdesc'] = NULL;
$arguments46['usemap'] = NULL;
$arguments46['src'] = NULL;
$arguments46['treatIdAsReference'] = NULL;
$arguments46['image'] = NULL;
$arguments46['crop'] = NULL;
$arguments46['cropVariant'] = 'default';
$arguments46['width'] = NULL;
$arguments46['height'] = NULL;
$arguments46['minWidth'] = NULL;
$arguments46['minHeight'] = NULL;
$arguments46['maxWidth'] = NULL;
$arguments46['maxHeight'] = NULL;
$arguments46['absolute'] = false;
$arguments46['src'] = 'fileadmin/templates/bigbyte2015/img/video_thumb.png';
$array48 = array (
);$arguments46['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.caption', $array48);
$array49 = array (
);$arguments46['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.caption', $array49);

$output45 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output45 .= '
						';
return $output45;
};
$arguments40 = array();
$arguments40['then'] = NULL;
$arguments40['else'] = NULL;
$arguments40['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array42 = array();
$array43 = array (
);$array42['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.type', $array43);
$array42['1'] = ' == 4';

$expression44 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 4);};
$arguments40['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression44(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array42)
					),
					$renderingContext
				);
$arguments40['__thenClosure'] = $renderChildrenClosure41;

$output14 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output14 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['additionalAttributes'] = NULL;
$arguments56['data'] = NULL;
$arguments56['class'] = NULL;
$arguments56['dir'] = NULL;
$arguments56['id'] = NULL;
$arguments56['lang'] = NULL;
$arguments56['style'] = NULL;
$arguments56['title'] = NULL;
$arguments56['accesskey'] = NULL;
$arguments56['tabindex'] = NULL;
$arguments56['onclick'] = NULL;
$arguments56['alt'] = NULL;
$arguments56['ismap'] = NULL;
$arguments56['longdesc'] = NULL;
$arguments56['usemap'] = NULL;
$arguments56['src'] = NULL;
$arguments56['treatIdAsReference'] = NULL;
$arguments56['image'] = NULL;
$arguments56['crop'] = NULL;
$arguments56['cropVariant'] = 'default';
$arguments56['width'] = NULL;
$arguments56['height'] = NULL;
$arguments56['minWidth'] = NULL;
$arguments56['minHeight'] = NULL;
$arguments56['maxWidth'] = NULL;
$arguments56['maxHeight'] = NULL;
$arguments56['absolute'] = false;
$array58 = array (
);$arguments56['image'] = $renderingContext->getVariableProvider()->getByPath('mediaElement', $array58);
$array59 = array (
);$arguments56['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array59);
$array60 = array (
);$arguments56['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array60);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments61 = array();
$arguments61['then'] = NULL;
$arguments61['else'] = NULL;
$arguments61['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array63 = array();
$array64 = array (
);$array63['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array64);

$expression65 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments61['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression65(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array63)
					),
					$renderingContext
				);
$array66 = array (
);$arguments61['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array66);
$array67 = array (
);$arguments61['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array67);
$arguments56['maxWidth'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments68 = array();
$arguments68['then'] = NULL;
$arguments68['else'] = NULL;
$arguments68['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array70 = array();
$array71 = array (
);$array70['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array71);

$expression72 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments68['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression72(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array70)
					),
					$renderingContext
				);
$array73 = array (
);$arguments68['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array73);
$array74 = array (
);$arguments68['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array74);
$arguments56['maxHeight'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output55 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output55 .= '
						';
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
);$array52['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.type', $array53);
$array52['1'] = ' == 5';

$expression54 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 5);};
$arguments50['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression54(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array52)
					),
					$renderingContext
				);
$arguments50['__thenClosure'] = $renderChildrenClosure51;

$output14 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output14 .= '
					';
return $output14;
};
$arguments10 = array();
$arguments10['map'] = NULL;
// Rendering Array
$array12 = array();
$array13 = array (
);$array12['mediaElement'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array13);
$arguments10['map'] = $array12;

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
				';
return $output9;
};
$arguments4 = array();
$arguments4['additionalAttributes'] = NULL;
$arguments4['data'] = NULL;
$arguments4['class'] = NULL;
$arguments4['dir'] = NULL;
$arguments4['id'] = NULL;
$arguments4['lang'] = NULL;
$arguments4['style'] = NULL;
$arguments4['title'] = NULL;
$arguments4['accesskey'] = NULL;
$arguments4['tabindex'] = NULL;
$arguments4['onclick'] = NULL;
$arguments4['newsItem'] = NULL;
$arguments4['settings'] = array (
);
$arguments4['uriOnly'] = false;
$arguments4['configuration'] = array (
);
$arguments4['content'] = '';
$arguments4['section'] = NULL;
$array6 = array (
);$arguments4['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array6);
$array7 = array (
);$arguments4['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array7);
$array8 = array (
);$arguments4['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array8);

$output3 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
			</div>
		';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
$output75 = '';

$output75 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$output81 = '';

$output81 .= '
				<div class="news-image news-img-wrap">
					<span class="no-media-element">
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$output87 = '';

$output87 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments88 = array();
$arguments88['additionalAttributes'] = NULL;
$arguments88['data'] = NULL;
$arguments88['class'] = NULL;
$arguments88['dir'] = NULL;
$arguments88['id'] = NULL;
$arguments88['lang'] = NULL;
$arguments88['style'] = NULL;
$arguments88['title'] = NULL;
$arguments88['accesskey'] = NULL;
$arguments88['tabindex'] = NULL;
$arguments88['onclick'] = NULL;
$arguments88['alt'] = NULL;
$arguments88['ismap'] = NULL;
$arguments88['longdesc'] = NULL;
$arguments88['usemap'] = NULL;
$arguments88['src'] = NULL;
$arguments88['treatIdAsReference'] = NULL;
$arguments88['image'] = NULL;
$arguments88['crop'] = NULL;
$arguments88['cropVariant'] = 'default';
$arguments88['width'] = NULL;
$arguments88['height'] = NULL;
$arguments88['minWidth'] = NULL;
$arguments88['minHeight'] = NULL;
$arguments88['maxWidth'] = NULL;
$arguments88['maxHeight'] = NULL;
$arguments88['absolute'] = false;
$array90 = array (
);$arguments88['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array90);
$arguments88['title'] = '';
$arguments88['alt'] = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments91 = array();
$arguments91['then'] = NULL;
$arguments91['else'] = NULL;
$arguments91['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array93 = array();
$array94 = array (
);$array93['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array94);

$expression95 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments91['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression95(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array93)
					),
					$renderingContext
				);
$array96 = array (
);$arguments91['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array96);
$array97 = array (
);$arguments91['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array97);
$arguments88['maxWidth'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments98 = array();
$arguments98['then'] = NULL;
$arguments98['else'] = NULL;
$arguments98['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array100 = array();
$array101 = array (
);$array100['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array101);

$expression102 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments98['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression102(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array100)
					),
					$renderingContext
				);
$array103 = array (
);$arguments98['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array103);
$array104 = array (
);$arguments98['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array104);
$arguments88['maxHeight'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output87 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output87 .= '
						';
return $output87;
};
$arguments82 = array();
$arguments82['additionalAttributes'] = NULL;
$arguments82['data'] = NULL;
$arguments82['class'] = NULL;
$arguments82['dir'] = NULL;
$arguments82['id'] = NULL;
$arguments82['lang'] = NULL;
$arguments82['style'] = NULL;
$arguments82['title'] = NULL;
$arguments82['accesskey'] = NULL;
$arguments82['tabindex'] = NULL;
$arguments82['onclick'] = NULL;
$arguments82['newsItem'] = NULL;
$arguments82['settings'] = array (
);
$arguments82['uriOnly'] = false;
$arguments82['configuration'] = array (
);
$arguments82['content'] = '';
$arguments82['section'] = NULL;
$array84 = array (
);$arguments82['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array84);
$array85 = array (
);$arguments82['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array85);
$array86 = array (
);$arguments82['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array86);

$output81 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output81 .= '
					</span>
				</div>
			';
return $output81;
};
$arguments76 = array();
$arguments76['then'] = NULL;
$arguments76['else'] = NULL;
$arguments76['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array78 = array();
$array79 = array (
);$array78['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array79);

$expression80 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments76['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression80(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array78)
					),
					$renderingContext
				);
$arguments76['__thenClosure'] = $renderChildrenClosure77;

$output75 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output75 .= '
		';
return $output75;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output215 = '';

$output215 .= '
<!--
	=====================
		Partials/List/Item.html
-->

<!--
	<div class="news-item clearfix article articletype-';
$array216 = array (
);
$output215 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.type', $array216)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments217 = array();
$arguments217['then'] = NULL;
$arguments217['else'] = NULL;
$arguments217['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array219 = array();
$array220 = array (
);$array219['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.istopnews', $array220);

$expression221 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments217['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression221(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array219)
					),
					$renderingContext
				);
$arguments217['then'] = ' topnews';

$output215 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext);

$output215 .= ' box box-news';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure223 = function() use ($renderingContext, $self) {
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Format\PrependViewHelper
$renderChildrenClosure226 = function() use ($renderingContext, $self) {
$array227 = array (
);return $renderingContext->getVariableProvider()->getByPath('category.description', $array227);
};
$arguments225 = array();
$arguments225['subject'] = NULL;
$arguments225['add'] = NULL;
$arguments225['add'] = ' ';
$renderChildrenClosure226 = ($arguments225['subject'] !== null) ? function() use ($arguments225) { return $arguments225['subject']; } : $renderChildrenClosure226;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [FluidTYPO3\Vhs\ViewHelpers\Format\PrependViewHelper::renderStatic($arguments225, $renderChildrenClosure226, $renderingContext)]);
};
$arguments222 = array();
$arguments222['each'] = NULL;
$arguments222['as'] = NULL;
$arguments222['key'] = NULL;
$arguments222['reverse'] = false;
$arguments222['iteration'] = NULL;
$array224 = array (
);$arguments222['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.categories', $array224);
$arguments222['as'] = 'category';

$output215 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments222, $renderChildrenClosure223, $renderingContext);

$output215 .= '" data-cat-class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure229 = function() use ($renderingContext, $self) {
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Format\PrependViewHelper
$renderChildrenClosure232 = function() use ($renderingContext, $self) {
$array233 = array (
);return $renderingContext->getVariableProvider()->getByPath('category.description', $array233);
};
$arguments231 = array();
$arguments231['subject'] = NULL;
$arguments231['add'] = NULL;
$arguments231['add'] = ',';
$renderChildrenClosure232 = ($arguments231['subject'] !== null) ? function() use ($arguments231) { return $arguments231['subject']; } : $renderChildrenClosure232;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [FluidTYPO3\Vhs\ViewHelpers\Format\PrependViewHelper::renderStatic($arguments231, $renderChildrenClosure232, $renderingContext)]);
};
$arguments228 = array();
$arguments228['each'] = NULL;
$arguments228['as'] = NULL;
$arguments228['key'] = NULL;
$arguments228['reverse'] = false;
$arguments228['iteration'] = NULL;
$array230 = array (
);$arguments228['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.categories', $array230);
$arguments228['as'] = 'category';

$output215 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments228, $renderChildrenClosure229, $renderingContext);

$output215 .= '" data-cat-name="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure235 = function() use ($renderingContext, $self) {
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Format\PrependViewHelper
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
$array239 = array (
);return $renderingContext->getVariableProvider()->getByPath('category.title', $array239);
};
$arguments237 = array();
$arguments237['subject'] = NULL;
$arguments237['add'] = NULL;
$arguments237['add'] = ',';
$renderChildrenClosure238 = ($arguments237['subject'] !== null) ? function() use ($arguments237) { return $arguments237['subject']; } : $renderChildrenClosure238;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [FluidTYPO3\Vhs\ViewHelpers\Format\PrependViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext)]);
};
$arguments234 = array();
$arguments234['each'] = NULL;
$arguments234['as'] = NULL;
$arguments234['key'] = NULL;
$arguments234['reverse'] = false;
$arguments234['iteration'] = NULL;
$array236 = array (
);$arguments234['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.categories', $array236);
$arguments234['as'] = 'category';

$output215 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments234, $renderChildrenClosure235, $renderingContext);

$output215 .= '">
<div class="news-item clearfix article articletype-';
$array240 = array (
);
$output215 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.type', $array240)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments241 = array();
$arguments241['then'] = NULL;
$arguments241['else'] = NULL;
$arguments241['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array243 = array();
$array244 = array (
);$array243['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.istopnews', $array244);

$expression245 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments241['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression245(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array243)
					),
					$renderingContext
				);
$arguments241['then'] = ' topnews';

$output215 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext);

$output215 .= '" itemscope="itemscope" itemtype="http://schema.org/Article">
-->

<div class="news-item clearfix article articletype-';
$array246 = array (
);
$output215 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.type', $array246)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure248 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments247 = array();
$arguments247['then'] = NULL;
$arguments247['else'] = NULL;
$arguments247['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array249 = array();
$array250 = array (
);$array249['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.istopnews', $array250);

$expression251 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments247['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression251(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array249)
					),
					$renderingContext
				);
$arguments247['then'] = ' topnews';

$output215 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments247, $renderChildrenClosure248, $renderingContext);

$output215 .= ' box box-news';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure253 = function() use ($renderingContext, $self) {
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Format\PrependViewHelper
$renderChildrenClosure256 = function() use ($renderingContext, $self) {
$array257 = array (
);return $renderingContext->getVariableProvider()->getByPath('category.description', $array257);
};
$arguments255 = array();
$arguments255['subject'] = NULL;
$arguments255['add'] = NULL;
$arguments255['add'] = ' ';
$renderChildrenClosure256 = ($arguments255['subject'] !== null) ? function() use ($arguments255) { return $arguments255['subject']; } : $renderChildrenClosure256;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [FluidTYPO3\Vhs\ViewHelpers\Format\PrependViewHelper::renderStatic($arguments255, $renderChildrenClosure256, $renderingContext)]);
};
$arguments252 = array();
$arguments252['each'] = NULL;
$arguments252['as'] = NULL;
$arguments252['key'] = NULL;
$arguments252['reverse'] = false;
$arguments252['iteration'] = NULL;
$array254 = array (
);$arguments252['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.categories', $array254);
$arguments252['as'] = 'category';

$output215 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments252, $renderChildrenClosure253, $renderingContext);

$output215 .= '" data-cat-class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure259 = function() use ($renderingContext, $self) {
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Format\PrependViewHelper
$renderChildrenClosure262 = function() use ($renderingContext, $self) {
$array263 = array (
);return $renderingContext->getVariableProvider()->getByPath('category.description', $array263);
};
$arguments261 = array();
$arguments261['subject'] = NULL;
$arguments261['add'] = NULL;
$arguments261['add'] = ',';
$renderChildrenClosure262 = ($arguments261['subject'] !== null) ? function() use ($arguments261) { return $arguments261['subject']; } : $renderChildrenClosure262;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [FluidTYPO3\Vhs\ViewHelpers\Format\PrependViewHelper::renderStatic($arguments261, $renderChildrenClosure262, $renderingContext)]);
};
$arguments258 = array();
$arguments258['each'] = NULL;
$arguments258['as'] = NULL;
$arguments258['key'] = NULL;
$arguments258['reverse'] = false;
$arguments258['iteration'] = NULL;
$array260 = array (
);$arguments258['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.categories', $array260);
$arguments258['as'] = 'category';

$output215 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments258, $renderChildrenClosure259, $renderingContext);

$output215 .= '" data-cat-name="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure265 = function() use ($renderingContext, $self) {
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Format\PrependViewHelper
$renderChildrenClosure268 = function() use ($renderingContext, $self) {
$array269 = array (
);return $renderingContext->getVariableProvider()->getByPath('category.title', $array269);
};
$arguments267 = array();
$arguments267['subject'] = NULL;
$arguments267['add'] = NULL;
$arguments267['add'] = '';
$renderChildrenClosure268 = ($arguments267['subject'] !== null) ? function() use ($arguments267) { return $arguments267['subject']; } : $renderChildrenClosure268;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [FluidTYPO3\Vhs\ViewHelpers\Format\PrependViewHelper::renderStatic($arguments267, $renderChildrenClosure268, $renderingContext)]);
};
$arguments264 = array();
$arguments264['each'] = NULL;
$arguments264['as'] = NULL;
$arguments264['key'] = NULL;
$arguments264['reverse'] = false;
$arguments264['iteration'] = NULL;
$array266 = array (
);$arguments264['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.categories', $array266);
$arguments264['as'] = 'category';

$output215 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments264, $renderChildrenClosure265, $renderingContext);

$output215 .= '">
	';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\ExcludeDisplayedNewsViewHelper
$renderChildrenClosure271 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments270 = array();
$arguments270['newsItem'] = NULL;
$array272 = array (
);$arguments270['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array272);

$output215 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\ExcludeDisplayedNewsViewHelper::renderStatic($arguments270, $renderChildrenClosure271, $renderingContext)]);

$output215 .= '

	<!-- media -->

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure274 = function() use ($renderingContext, $self) {
$output356 = '';

$output356 .= '
			
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure358 = function() use ($renderingContext, $self) {
$output359 = '';

$output359 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure361 = function() use ($renderingContext, $self) {
$output363 = '';

$output363 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure365 = function() use ($renderingContext, $self) {
$output369 = '';

$output369 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure371 = function() use ($renderingContext, $self) {
$output401 = '';

$output401 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure403 = function() use ($renderingContext, $self) {
$output404 = '';

$output404 .= '
								<div class="news-image news-img-wrap">
									';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure406 = function() use ($renderingContext, $self) {
$output410 = '';

$output410 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper
$renderChildrenClosure412 = function() use ($renderingContext, $self) {
$output415 = '';

$output415 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure417 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments416 = array();
$arguments416['additionalAttributes'] = NULL;
$arguments416['data'] = NULL;
$arguments416['class'] = NULL;
$arguments416['dir'] = NULL;
$arguments416['id'] = NULL;
$arguments416['lang'] = NULL;
$arguments416['style'] = NULL;
$arguments416['title'] = NULL;
$arguments416['accesskey'] = NULL;
$arguments416['tabindex'] = NULL;
$arguments416['onclick'] = NULL;
$arguments416['alt'] = NULL;
$arguments416['ismap'] = NULL;
$arguments416['longdesc'] = NULL;
$arguments416['usemap'] = NULL;
$arguments416['src'] = NULL;
$arguments416['treatIdAsReference'] = NULL;
$arguments416['image'] = NULL;
$arguments416['crop'] = NULL;
$arguments416['cropVariant'] = 'default';
$arguments416['width'] = NULL;
$arguments416['height'] = NULL;
$arguments416['minWidth'] = NULL;
$arguments416['minHeight'] = NULL;
$arguments416['maxWidth'] = NULL;
$arguments416['maxHeight'] = NULL;
$arguments416['absolute'] = false;
$array418 = array (
);$arguments416['src'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.uid', $array418);
// Rendering Boolean node
// Rendering Array
$array419 = array();
$array419['0'] = 1;

$expression420 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments416['treatIdAsReference'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression420(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array419)
					),
					$renderingContext
				);
$array421 = array (
);$arguments416['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array421);
$array422 = array (
);$arguments416['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array422);
$array423 = array (
);$arguments416['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array423);
$array424 = array (
);$arguments416['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array424);

$output415 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments416, $renderChildrenClosure417, $renderingContext);

$output415 .= '
										';
return $output415;
};
$arguments411 = array();
$arguments411['map'] = NULL;
// Rendering Array
$array413 = array();
$array414 = array (
);$array413['mediaElement'] = $renderingContext->getVariableProvider()->getByPath('category.images.0', $array414);
$arguments411['map'] = $array413;

$output410 .= TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments411, $renderChildrenClosure412, $renderingContext);

$output410 .= '
									';
return $output410;
};
$arguments405 = array();
$arguments405['additionalAttributes'] = NULL;
$arguments405['data'] = NULL;
$arguments405['class'] = NULL;
$arguments405['dir'] = NULL;
$arguments405['id'] = NULL;
$arguments405['lang'] = NULL;
$arguments405['style'] = NULL;
$arguments405['title'] = NULL;
$arguments405['accesskey'] = NULL;
$arguments405['tabindex'] = NULL;
$arguments405['onclick'] = NULL;
$arguments405['newsItem'] = NULL;
$arguments405['settings'] = array (
);
$arguments405['uriOnly'] = false;
$arguments405['configuration'] = array (
);
$arguments405['content'] = '';
$arguments405['section'] = NULL;
$array407 = array (
);$arguments405['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array407);
$array408 = array (
);$arguments405['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array408);
$array409 = array (
);$arguments405['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array409);

$output404 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments405, $renderChildrenClosure406, $renderingContext);

$output404 .= '
								</div>
							';
return $output404;
};
$arguments402 = array();

$output401 .= '';

$output401 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure426 = function() use ($renderingContext, $self) {
$output427 = '';

$output427 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure429 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments428 = array();
$arguments428['section'] = NULL;
$arguments428['partial'] = NULL;
$arguments428['delegate'] = NULL;
$arguments428['renderable'] = NULL;
$arguments428['arguments'] = array (
);
$arguments428['optional'] = false;
$arguments428['default'] = NULL;
$arguments428['contentAs'] = NULL;
$arguments428['section'] = 'previewImage';
// Rendering Array
$array430 = array();
$array431 = array (
);$array430['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array431);
$arguments428['arguments'] = $array430;

$output427 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments428, $renderChildrenClosure429, $renderingContext);

$output427 .= '
							';
return $output427;
};
$arguments425 = array();
$arguments425['if'] = NULL;

$output401 .= '';

$output401 .= '
						';
return $output401;
};
$arguments370 = array();
$arguments370['then'] = NULL;
$arguments370['else'] = NULL;
$arguments370['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array398 = array();
$array399 = array (
);$array398['0'] = $renderingContext->getVariableProvider()->getByPath('category.images', $array399);

$expression400 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments370['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression400(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array398)
					),
					$renderingContext
				);
$arguments370['__thenClosure'] = function() use ($renderingContext, $self) {
$output372 = '';

$output372 .= '
								<div class="news-image news-img-wrap">
									';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure374 = function() use ($renderingContext, $self) {
$output378 = '';

$output378 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper
$renderChildrenClosure380 = function() use ($renderingContext, $self) {
$output383 = '';

$output383 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure385 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments384 = array();
$arguments384['additionalAttributes'] = NULL;
$arguments384['data'] = NULL;
$arguments384['class'] = NULL;
$arguments384['dir'] = NULL;
$arguments384['id'] = NULL;
$arguments384['lang'] = NULL;
$arguments384['style'] = NULL;
$arguments384['title'] = NULL;
$arguments384['accesskey'] = NULL;
$arguments384['tabindex'] = NULL;
$arguments384['onclick'] = NULL;
$arguments384['alt'] = NULL;
$arguments384['ismap'] = NULL;
$arguments384['longdesc'] = NULL;
$arguments384['usemap'] = NULL;
$arguments384['src'] = NULL;
$arguments384['treatIdAsReference'] = NULL;
$arguments384['image'] = NULL;
$arguments384['crop'] = NULL;
$arguments384['cropVariant'] = 'default';
$arguments384['width'] = NULL;
$arguments384['height'] = NULL;
$arguments384['minWidth'] = NULL;
$arguments384['minHeight'] = NULL;
$arguments384['maxWidth'] = NULL;
$arguments384['maxHeight'] = NULL;
$arguments384['absolute'] = false;
$array386 = array (
);$arguments384['src'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.uid', $array386);
// Rendering Boolean node
// Rendering Array
$array387 = array();
$array387['0'] = 1;

$expression388 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments384['treatIdAsReference'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression388(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array387)
					),
					$renderingContext
				);
$array389 = array (
);$arguments384['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array389);
$array390 = array (
);$arguments384['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array390);
$array391 = array (
);$arguments384['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array391);
$array392 = array (
);$arguments384['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array392);

$output383 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments384, $renderChildrenClosure385, $renderingContext);

$output383 .= '
										';
return $output383;
};
$arguments379 = array();
$arguments379['map'] = NULL;
// Rendering Array
$array381 = array();
$array382 = array (
);$array381['mediaElement'] = $renderingContext->getVariableProvider()->getByPath('category.images.0', $array382);
$arguments379['map'] = $array381;

$output378 .= TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments379, $renderChildrenClosure380, $renderingContext);

$output378 .= '
									';
return $output378;
};
$arguments373 = array();
$arguments373['additionalAttributes'] = NULL;
$arguments373['data'] = NULL;
$arguments373['class'] = NULL;
$arguments373['dir'] = NULL;
$arguments373['id'] = NULL;
$arguments373['lang'] = NULL;
$arguments373['style'] = NULL;
$arguments373['title'] = NULL;
$arguments373['accesskey'] = NULL;
$arguments373['tabindex'] = NULL;
$arguments373['onclick'] = NULL;
$arguments373['newsItem'] = NULL;
$arguments373['settings'] = array (
);
$arguments373['uriOnly'] = false;
$arguments373['configuration'] = array (
);
$arguments373['content'] = '';
$arguments373['section'] = NULL;
$array375 = array (
);$arguments373['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array375);
$array376 = array (
);$arguments373['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array376);
$array377 = array (
);$arguments373['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array377);

$output372 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments373, $renderChildrenClosure374, $renderingContext);

$output372 .= '
								</div>
							';
return $output372;
};
$arguments370['__elseClosures'][] = function() use ($renderingContext, $self) {
$output393 = '';

$output393 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure395 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments394 = array();
$arguments394['section'] = NULL;
$arguments394['partial'] = NULL;
$arguments394['delegate'] = NULL;
$arguments394['renderable'] = NULL;
$arguments394['arguments'] = array (
);
$arguments394['optional'] = false;
$arguments394['default'] = NULL;
$arguments394['contentAs'] = NULL;
$arguments394['section'] = 'previewImage';
// Rendering Array
$array396 = array();
$array397 = array (
);$array396['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array397);
$arguments394['arguments'] = $array396;

$output393 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments394, $renderChildrenClosure395, $renderingContext);

$output393 .= '
							';
return $output393;
};

$output369 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments370, $renderChildrenClosure371, $renderingContext);

$output369 .= '
					';
return $output369;
};
$arguments364 = array();
$arguments364['then'] = NULL;
$arguments364['else'] = NULL;
$arguments364['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array366 = array();
$array367 = array (
);$array366['0'] = $renderingContext->getVariableProvider()->getByPath('catIterator.isFirst', $array367);

$expression368 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments364['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression368(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array366)
					),
					$renderingContext
				);
$arguments364['__thenClosure'] = $renderChildrenClosure365;

$output363 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments364, $renderChildrenClosure365, $renderingContext);

$output363 .= '
				';
return $output363;
};
$arguments360 = array();
$arguments360['each'] = NULL;
$arguments360['as'] = NULL;
$arguments360['key'] = NULL;
$arguments360['reverse'] = false;
$arguments360['iteration'] = NULL;
$array362 = array (
);$arguments360['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.categories', $array362);
$arguments360['as'] = 'category';
$arguments360['iteration'] = 'catIterator';

$output359 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments360, $renderChildrenClosure361, $renderingContext);

$output359 .= '
			';
return $output359;
};
$arguments357 = array();

$output356 .= '';

$output356 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure433 = function() use ($renderingContext, $self) {
$output434 = '';

$output434 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure436 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments435 = array();
$arguments435['section'] = NULL;
$arguments435['partial'] = NULL;
$arguments435['delegate'] = NULL;
$arguments435['renderable'] = NULL;
$arguments435['arguments'] = array (
);
$arguments435['optional'] = false;
$arguments435['default'] = NULL;
$arguments435['contentAs'] = NULL;
$arguments435['section'] = 'previewImage';
// Rendering Array
$array437 = array();
$array438 = array (
);$array437['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array438);
$arguments435['arguments'] = $array437;

$output434 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments435, $renderChildrenClosure436, $renderingContext);

$output434 .= '
			';
return $output434;
};
$arguments432 = array();
$arguments432['if'] = NULL;

$output356 .= '';

$output356 .= '
	';
return $output356;
};
$arguments273 = array();
$arguments273['then'] = NULL;
$arguments273['else'] = NULL;
$arguments273['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array353 = array();
$array354 = array (
);$array353['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.categories', $array354);

$expression355 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments273['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression355(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array353)
					),
					$renderingContext
				);
$arguments273['__thenClosure'] = function() use ($renderingContext, $self) {
$output275 = '';

$output275 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure277 = function() use ($renderingContext, $self) {
$output279 = '';

$output279 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure281 = function() use ($renderingContext, $self) {
$output285 = '';

$output285 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure287 = function() use ($renderingContext, $self) {
$output317 = '';

$output317 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure319 = function() use ($renderingContext, $self) {
$output320 = '';

$output320 .= '
								<div class="news-image news-img-wrap">
									';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure322 = function() use ($renderingContext, $self) {
$output326 = '';

$output326 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper
$renderChildrenClosure328 = function() use ($renderingContext, $self) {
$output331 = '';

$output331 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure333 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments332 = array();
$arguments332['additionalAttributes'] = NULL;
$arguments332['data'] = NULL;
$arguments332['class'] = NULL;
$arguments332['dir'] = NULL;
$arguments332['id'] = NULL;
$arguments332['lang'] = NULL;
$arguments332['style'] = NULL;
$arguments332['title'] = NULL;
$arguments332['accesskey'] = NULL;
$arguments332['tabindex'] = NULL;
$arguments332['onclick'] = NULL;
$arguments332['alt'] = NULL;
$arguments332['ismap'] = NULL;
$arguments332['longdesc'] = NULL;
$arguments332['usemap'] = NULL;
$arguments332['src'] = NULL;
$arguments332['treatIdAsReference'] = NULL;
$arguments332['image'] = NULL;
$arguments332['crop'] = NULL;
$arguments332['cropVariant'] = 'default';
$arguments332['width'] = NULL;
$arguments332['height'] = NULL;
$arguments332['minWidth'] = NULL;
$arguments332['minHeight'] = NULL;
$arguments332['maxWidth'] = NULL;
$arguments332['maxHeight'] = NULL;
$arguments332['absolute'] = false;
$array334 = array (
);$arguments332['src'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.uid', $array334);
// Rendering Boolean node
// Rendering Array
$array335 = array();
$array335['0'] = 1;

$expression336 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments332['treatIdAsReference'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression336(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array335)
					),
					$renderingContext
				);
$array337 = array (
);$arguments332['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array337);
$array338 = array (
);$arguments332['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array338);
$array339 = array (
);$arguments332['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array339);
$array340 = array (
);$arguments332['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array340);

$output331 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments332, $renderChildrenClosure333, $renderingContext);

$output331 .= '
										';
return $output331;
};
$arguments327 = array();
$arguments327['map'] = NULL;
// Rendering Array
$array329 = array();
$array330 = array (
);$array329['mediaElement'] = $renderingContext->getVariableProvider()->getByPath('category.images.0', $array330);
$arguments327['map'] = $array329;

$output326 .= TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments327, $renderChildrenClosure328, $renderingContext);

$output326 .= '
									';
return $output326;
};
$arguments321 = array();
$arguments321['additionalAttributes'] = NULL;
$arguments321['data'] = NULL;
$arguments321['class'] = NULL;
$arguments321['dir'] = NULL;
$arguments321['id'] = NULL;
$arguments321['lang'] = NULL;
$arguments321['style'] = NULL;
$arguments321['title'] = NULL;
$arguments321['accesskey'] = NULL;
$arguments321['tabindex'] = NULL;
$arguments321['onclick'] = NULL;
$arguments321['newsItem'] = NULL;
$arguments321['settings'] = array (
);
$arguments321['uriOnly'] = false;
$arguments321['configuration'] = array (
);
$arguments321['content'] = '';
$arguments321['section'] = NULL;
$array323 = array (
);$arguments321['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array323);
$array324 = array (
);$arguments321['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array324);
$array325 = array (
);$arguments321['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array325);

$output320 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments321, $renderChildrenClosure322, $renderingContext);

$output320 .= '
								</div>
							';
return $output320;
};
$arguments318 = array();

$output317 .= '';

$output317 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure342 = function() use ($renderingContext, $self) {
$output343 = '';

$output343 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure345 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments344 = array();
$arguments344['section'] = NULL;
$arguments344['partial'] = NULL;
$arguments344['delegate'] = NULL;
$arguments344['renderable'] = NULL;
$arguments344['arguments'] = array (
);
$arguments344['optional'] = false;
$arguments344['default'] = NULL;
$arguments344['contentAs'] = NULL;
$arguments344['section'] = 'previewImage';
// Rendering Array
$array346 = array();
$array347 = array (
);$array346['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array347);
$arguments344['arguments'] = $array346;

$output343 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments344, $renderChildrenClosure345, $renderingContext);

$output343 .= '
							';
return $output343;
};
$arguments341 = array();
$arguments341['if'] = NULL;

$output317 .= '';

$output317 .= '
						';
return $output317;
};
$arguments286 = array();
$arguments286['then'] = NULL;
$arguments286['else'] = NULL;
$arguments286['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array314 = array();
$array315 = array (
);$array314['0'] = $renderingContext->getVariableProvider()->getByPath('category.images', $array315);

$expression316 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments286['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression316(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array314)
					),
					$renderingContext
				);
$arguments286['__thenClosure'] = function() use ($renderingContext, $self) {
$output288 = '';

$output288 .= '
								<div class="news-image news-img-wrap">
									';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure290 = function() use ($renderingContext, $self) {
$output294 = '';

$output294 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper
$renderChildrenClosure296 = function() use ($renderingContext, $self) {
$output299 = '';

$output299 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure301 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments300 = array();
$arguments300['additionalAttributes'] = NULL;
$arguments300['data'] = NULL;
$arguments300['class'] = NULL;
$arguments300['dir'] = NULL;
$arguments300['id'] = NULL;
$arguments300['lang'] = NULL;
$arguments300['style'] = NULL;
$arguments300['title'] = NULL;
$arguments300['accesskey'] = NULL;
$arguments300['tabindex'] = NULL;
$arguments300['onclick'] = NULL;
$arguments300['alt'] = NULL;
$arguments300['ismap'] = NULL;
$arguments300['longdesc'] = NULL;
$arguments300['usemap'] = NULL;
$arguments300['src'] = NULL;
$arguments300['treatIdAsReference'] = NULL;
$arguments300['image'] = NULL;
$arguments300['crop'] = NULL;
$arguments300['cropVariant'] = 'default';
$arguments300['width'] = NULL;
$arguments300['height'] = NULL;
$arguments300['minWidth'] = NULL;
$arguments300['minHeight'] = NULL;
$arguments300['maxWidth'] = NULL;
$arguments300['maxHeight'] = NULL;
$arguments300['absolute'] = false;
$array302 = array (
);$arguments300['src'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.uid', $array302);
// Rendering Boolean node
// Rendering Array
$array303 = array();
$array303['0'] = 1;

$expression304 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments300['treatIdAsReference'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression304(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array303)
					),
					$renderingContext
				);
$array305 = array (
);$arguments300['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array305);
$array306 = array (
);$arguments300['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array306);
$array307 = array (
);$arguments300['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array307);
$array308 = array (
);$arguments300['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array308);

$output299 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments300, $renderChildrenClosure301, $renderingContext);

$output299 .= '
										';
return $output299;
};
$arguments295 = array();
$arguments295['map'] = NULL;
// Rendering Array
$array297 = array();
$array298 = array (
);$array297['mediaElement'] = $renderingContext->getVariableProvider()->getByPath('category.images.0', $array298);
$arguments295['map'] = $array297;

$output294 .= TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments295, $renderChildrenClosure296, $renderingContext);

$output294 .= '
									';
return $output294;
};
$arguments289 = array();
$arguments289['additionalAttributes'] = NULL;
$arguments289['data'] = NULL;
$arguments289['class'] = NULL;
$arguments289['dir'] = NULL;
$arguments289['id'] = NULL;
$arguments289['lang'] = NULL;
$arguments289['style'] = NULL;
$arguments289['title'] = NULL;
$arguments289['accesskey'] = NULL;
$arguments289['tabindex'] = NULL;
$arguments289['onclick'] = NULL;
$arguments289['newsItem'] = NULL;
$arguments289['settings'] = array (
);
$arguments289['uriOnly'] = false;
$arguments289['configuration'] = array (
);
$arguments289['content'] = '';
$arguments289['section'] = NULL;
$array291 = array (
);$arguments289['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array291);
$array292 = array (
);$arguments289['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array292);
$array293 = array (
);$arguments289['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array293);

$output288 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments289, $renderChildrenClosure290, $renderingContext);

$output288 .= '
								</div>
							';
return $output288;
};
$arguments286['__elseClosures'][] = function() use ($renderingContext, $self) {
$output309 = '';

$output309 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure311 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments310 = array();
$arguments310['section'] = NULL;
$arguments310['partial'] = NULL;
$arguments310['delegate'] = NULL;
$arguments310['renderable'] = NULL;
$arguments310['arguments'] = array (
);
$arguments310['optional'] = false;
$arguments310['default'] = NULL;
$arguments310['contentAs'] = NULL;
$arguments310['section'] = 'previewImage';
// Rendering Array
$array312 = array();
$array313 = array (
);$array312['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array313);
$arguments310['arguments'] = $array312;

$output309 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments310, $renderChildrenClosure311, $renderingContext);

$output309 .= '
							';
return $output309;
};

$output285 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments286, $renderChildrenClosure287, $renderingContext);

$output285 .= '
					';
return $output285;
};
$arguments280 = array();
$arguments280['then'] = NULL;
$arguments280['else'] = NULL;
$arguments280['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array282 = array();
$array283 = array (
);$array282['0'] = $renderingContext->getVariableProvider()->getByPath('catIterator.isFirst', $array283);

$expression284 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments280['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression284(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array282)
					),
					$renderingContext
				);
$arguments280['__thenClosure'] = $renderChildrenClosure281;

$output279 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments280, $renderChildrenClosure281, $renderingContext);

$output279 .= '
				';
return $output279;
};
$arguments276 = array();
$arguments276['each'] = NULL;
$arguments276['as'] = NULL;
$arguments276['key'] = NULL;
$arguments276['reverse'] = false;
$arguments276['iteration'] = NULL;
$array278 = array (
);$arguments276['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.categories', $array278);
$arguments276['as'] = 'category';
$arguments276['iteration'] = 'catIterator';

$output275 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments276, $renderChildrenClosure277, $renderingContext);

$output275 .= '
			';
return $output275;
};
$arguments273['__elseClosures'][] = function() use ($renderingContext, $self) {
$output348 = '';

$output348 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure350 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments349 = array();
$arguments349['section'] = NULL;
$arguments349['partial'] = NULL;
$arguments349['delegate'] = NULL;
$arguments349['renderable'] = NULL;
$arguments349['arguments'] = array (
);
$arguments349['optional'] = false;
$arguments349['default'] = NULL;
$arguments349['contentAs'] = NULL;
$arguments349['section'] = 'previewImage';
// Rendering Array
$array351 = array();
$array352 = array (
);$array351['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array352);
$arguments349['arguments'] = $array351;

$output348 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments349, $renderChildrenClosure350, $renderingContext);

$output348 .= '
			';
return $output348;
};

$output215 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments273, $renderChildrenClosure274, $renderingContext);

$output215 .= '
	
	<!-- header -->
	<div class="news-meta clearfix">
		
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure440 = function() use ($renderingContext, $self) {
$output441 = '';

$output441 .= '
		<h3>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure443 = function() use ($renderingContext, $self) {
$output451 = '';

$output451 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure453 = function() use ($renderingContext, $self) {
$output454 = '';

$output454 .= '
						';
$array455 = array (
);
$output454 .= $renderingContext->getVariableProvider()->getByPath('newsItem.firstCategory.parentcategory.title', $array455);

$output454 .= '
					';
return $output454;
};
$arguments452 = array();

$output451 .= '';

$output451 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure457 = function() use ($renderingContext, $self) {
$output458 = '';

$output458 .= '
						';
$array459 = array (
);
$output458 .= $renderingContext->getVariableProvider()->getByPath('newsItem.firstCategory.title', $array459);

$output458 .= '
					';
return $output458;
};
$arguments456 = array();
$arguments456['if'] = NULL;

$output451 .= '';

$output451 .= '
			';
return $output451;
};
$arguments442 = array();
$arguments442['then'] = NULL;
$arguments442['else'] = NULL;
$arguments442['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array448 = array();
$array449 = array (
);$array448['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.firstCategory.parentcategory', $array449);

$expression450 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments442['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression450(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array448)
					),
					$renderingContext
				);
$arguments442['__thenClosure'] = function() use ($renderingContext, $self) {
$output444 = '';

$output444 .= '
						';
$array445 = array (
);
$output444 .= $renderingContext->getVariableProvider()->getByPath('newsItem.firstCategory.parentcategory.title', $array445);

$output444 .= '
					';
return $output444;
};
$arguments442['__elseClosures'][] = function() use ($renderingContext, $self) {
$output446 = '';

$output446 .= '
						';
$array447 = array (
);
$output446 .= $renderingContext->getVariableProvider()->getByPath('newsItem.firstCategory.title', $array447);

$output446 .= '
					';
return $output446;
};

$output441 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments442, $renderChildrenClosure443, $renderingContext);

$output441 .= '
		</h3>
		';
return $output441;
};
$arguments439 = array();

$output215 .= NULL;

$output215 .= '
	
		<span class="news-date news-list-date">
			<time itemprop="datePublished" datetime="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure461 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments460 = array();
$arguments460['date'] = NULL;
$arguments460['format'] = '';
$arguments460['base'] = NULL;
$array462 = array (
);$arguments460['date'] = $renderingContext->getVariableProvider()->getByPath('newsItem.datetime', $array462);
$arguments460['format'] = 'Y-m-d';
$renderChildrenClosure461 = ($arguments460['date'] !== null) ? function() use ($arguments460) { return $arguments460['date']; } : $renderChildrenClosure461;
$output215 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments460, $renderChildrenClosure461, $renderingContext)]);

$output215 .= '">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure464 = function() use ($renderingContext, $self) {
$array467 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.datetime', $array467);
};
$arguments463 = array();
$arguments463['date'] = NULL;
$arguments463['format'] = '';
$arguments463['base'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure466 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments465 = array();
$arguments465['key'] = NULL;
$arguments465['id'] = NULL;
$arguments465['default'] = NULL;
$arguments465['htmlEscape'] = NULL;
$arguments465['arguments'] = NULL;
$arguments465['extensionName'] = NULL;
$arguments465['key'] = 'dateFormat';
$arguments463['format'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments465, $renderChildrenClosure466, $renderingContext);
$renderChildrenClosure464 = ($arguments463['date'] !== null) ? function() use ($arguments463) { return $arguments463['date']; } : $renderChildrenClosure464;
$output215 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments463, $renderChildrenClosure464, $renderingContext)]);

$output215 .= '
			</time>
		</span>

		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure469 = function() use ($renderingContext, $self) {
$output473 = '';

$output473 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure475 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments474 = array();
$arguments474['section'] = NULL;
$arguments474['partial'] = NULL;
$arguments474['delegate'] = NULL;
$arguments474['renderable'] = NULL;
$arguments474['arguments'] = array (
);
$arguments474['optional'] = false;
$arguments474['default'] = NULL;
$arguments474['contentAs'] = NULL;
$arguments474['partial'] = 'Category/Items';
// Rendering Array
$array476 = array();
$array477 = array (
);$array476['categories'] = $renderingContext->getVariableProvider()->getByPath('newsItem.categories', $array477);
$array478 = array (
);$array476['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array478);
$arguments474['arguments'] = $array476;

$output473 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments474, $renderChildrenClosure475, $renderingContext);

$output473 .= '
		';
return $output473;
};
$arguments468 = array();
$arguments468['then'] = NULL;
$arguments468['else'] = NULL;
$arguments468['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array470 = array();
$array471 = array (
);$array470['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.categories', $array471);

$expression472 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments468['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression472(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array470)
					),
					$renderingContext
				);
$arguments468['__thenClosure'] = $renderChildrenClosure469;

$output215 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments468, $renderChildrenClosure469, $renderingContext);

$output215 .= '
	</div>

	<div class="news-content">
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure480 = function() use ($renderingContext, $self) {
$output481 = '';

$output481 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure483 = function() use ($renderingContext, $self) {
$output489 = '';

$output489 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure491 = function() use ($renderingContext, $self) {
$output495 = '';

$output495 .= '
				<h3><span itemprop="headline">';
$array496 = array (
);
$output495 .= $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array496);

$output495 .= '</span></h3>
			';
return $output495;
};
$arguments490 = array();
$arguments490['then'] = NULL;
$arguments490['else'] = NULL;
$arguments490['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array492 = array();
$array493 = array (
);$array492['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array493);

$expression494 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments490['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression494(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array492)
					),
					$renderingContext
				);
$arguments490['__thenClosure'] = $renderChildrenClosure491;

$output489 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments490, $renderChildrenClosure491, $renderingContext);

$output489 .= '	
		';
return $output489;
};
$arguments482 = array();
$arguments482['then'] = NULL;
$arguments482['else'] = NULL;
$arguments482['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array484 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure486 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments485 = array();
$arguments485['subject'] = NULL;
$array487 = array (
);$arguments485['subject'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array487);
$renderChildrenClosure486 = ($arguments485['subject'] !== null) ? function() use ($arguments485) { return $arguments485['subject']; } : $renderChildrenClosure486;$array484['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments485, $renderChildrenClosure486, $renderingContext);
$array484['1'] = ' == 0';

$expression488 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments482['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression488(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array484)
					),
					$renderingContext
				);
$arguments482['__thenClosure'] = $renderChildrenClosure483;

$output481 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments482, $renderChildrenClosure483, $renderingContext);

$output481 .= '
		';
return $output481;
};
$arguments479 = array();

$output215 .= NULL;

$output215 .= '

		<h3><span itemprop="headline">';
$array497 = array (
);
$output215 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array497)]);

$output215 .= '</span></h3>

			<!-- teaser -->
			<div class="teaser-text">
					';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\RemoveMediaTagsViewHelper
$renderChildrenClosure499 = function() use ($renderingContext, $self) {
$output500 = '';

$output500 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure502 = function() use ($renderingContext, $self) {
$output508 = '';

$output508 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure510 = function() use ($renderingContext, $self) {
$output523 = '';

$output523 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure525 = function() use ($renderingContext, $self) {
$output526 = '';

$output526 .= '
								<div itemprop="description">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure528 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure530 = function() use ($renderingContext, $self) {
$array534 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array534);
};
$arguments529 = array();
$arguments529['maxCharacters'] = NULL;
$arguments529['append'] = '...';
$arguments529['respectWordBoundaries'] = true;
$arguments529['respectHtml'] = true;
$array531 = array (
);$arguments529['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array531);
// Rendering Boolean node
// Rendering Array
$array532 = array();
$array532['0'] = 1;

$expression533 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments529['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression533(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array532)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments529, $renderChildrenClosure530, $renderingContext);
};
$arguments527 = array();
$arguments527['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output526 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments527, $renderChildrenClosure528, $renderingContext);

$output526 .= '</div>
							';
return $output526;
};
$arguments524 = array();

$output523 .= '';

$output523 .= '
						';
return $output523;
};
$arguments509 = array();
$arguments509['then'] = NULL;
$arguments509['else'] = NULL;
$arguments509['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array520 = array();
$array521 = array (
);$array520['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array521);

$expression522 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments509['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression522(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array520)
					),
					$renderingContext
				);
$arguments509['__thenClosure'] = function() use ($renderingContext, $self) {
$output511 = '';

$output511 .= '
								<div itemprop="description">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure513 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure515 = function() use ($renderingContext, $self) {
$array519 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array519);
};
$arguments514 = array();
$arguments514['maxCharacters'] = NULL;
$arguments514['append'] = '...';
$arguments514['respectWordBoundaries'] = true;
$arguments514['respectHtml'] = true;
$array516 = array (
);$arguments514['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array516);
// Rendering Boolean node
// Rendering Array
$array517 = array();
$array517['0'] = 1;

$expression518 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments514['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression518(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array517)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments514, $renderChildrenClosure515, $renderingContext);
};
$arguments512 = array();
$arguments512['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output511 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments512, $renderChildrenClosure513, $renderingContext);

$output511 .= '</div>
							';
return $output511;
};

$output508 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments509, $renderChildrenClosure510, $renderingContext);

$output508 .= '
					';
return $output508;
};
$arguments501 = array();
$arguments501['then'] = NULL;
$arguments501['else'] = NULL;
$arguments501['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array503 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure505 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments504 = array();
$arguments504['subject'] = NULL;
$array506 = array (
);$arguments504['subject'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array506);
$renderChildrenClosure505 = ($arguments504['subject'] !== null) ? function() use ($arguments504) { return $arguments504['subject']; } : $renderChildrenClosure505;$array503['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments504, $renderChildrenClosure505, $renderingContext);
$array503['1'] = ' == 0';

$expression507 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments501['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression507(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array503)
					),
					$renderingContext
				);
$arguments501['__thenClosure'] = $renderChildrenClosure502;

$output500 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments501, $renderChildrenClosure502, $renderingContext);

$output500 .= '
					';
return $output500;
};
$arguments498 = array();

$output215 .= GeorgRinger\News\ViewHelpers\RemoveMediaTagsViewHelper::renderStatic($arguments498, $renderChildrenClosure499, $renderingContext);

$output215 .= '
			</div>
			';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure536 = function() use ($renderingContext, $self) {
$output540 = '';

$output540 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure542 = function() use ($renderingContext, $self) {
$output549 = '';

$output549 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure551 = function() use ($renderingContext, $self) {
return '
							Watch video
						';
};
$arguments550 = array();

$output549 .= '';

$output549 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure553 = function() use ($renderingContext, $self) {
$output554 = '';

$output554 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure556 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments555 = array();
$arguments555['key'] = NULL;
$arguments555['id'] = NULL;
$arguments555['default'] = NULL;
$arguments555['htmlEscape'] = NULL;
$arguments555['arguments'] = NULL;
$arguments555['extensionName'] = NULL;
$arguments555['key'] = 'more-link';

$output554 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments555, $renderChildrenClosure556, $renderingContext)]);

$output554 .= '
						';
return $output554;
};
$arguments552 = array();
$arguments552['if'] = NULL;

$output549 .= '';

$output549 .= '
					';
return $output549;
};
$arguments541 = array();
$arguments541['then'] = NULL;
$arguments541['else'] = NULL;
$arguments541['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array546 = array();
$array547 = array (
);$array546['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0.originalResource.type', $array547);
$array546['1'] = ' == 4';

$expression548 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 4);};
$arguments541['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression548(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array546)
					),
					$renderingContext
				);
$arguments541['__thenClosure'] = function() use ($renderingContext, $self) {
return '
							Watch video
						';
};
$arguments541['__elseClosures'][] = function() use ($renderingContext, $self) {
$output543 = '';

$output543 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure545 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments544 = array();
$arguments544['key'] = NULL;
$arguments544['id'] = NULL;
$arguments544['default'] = NULL;
$arguments544['htmlEscape'] = NULL;
$arguments544['arguments'] = NULL;
$arguments544['extensionName'] = NULL;
$arguments544['key'] = 'more-link';

$output543 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments544, $renderChildrenClosure545, $renderingContext)]);

$output543 .= '
						';
return $output543;
};

$output540 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments541, $renderChildrenClosure542, $renderingContext);

$output540 .= '
					<i class="icon-arrow-readmore"></i>
			';
return $output540;
};
$arguments535 = array();
$arguments535['additionalAttributes'] = NULL;
$arguments535['data'] = NULL;
$arguments535['class'] = NULL;
$arguments535['dir'] = NULL;
$arguments535['id'] = NULL;
$arguments535['lang'] = NULL;
$arguments535['style'] = NULL;
$arguments535['title'] = NULL;
$arguments535['accesskey'] = NULL;
$arguments535['tabindex'] = NULL;
$arguments535['onclick'] = NULL;
$arguments535['newsItem'] = NULL;
$arguments535['settings'] = array (
);
$arguments535['uriOnly'] = false;
$arguments535['configuration'] = array (
);
$arguments535['content'] = '';
$arguments535['section'] = NULL;
$array537 = array (
);$arguments535['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array537);
$array538 = array (
);$arguments535['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array538);
$arguments535['class'] = 'readmore';
$array539 = array (
);$arguments535['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array539);

$output215 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments535, $renderChildrenClosure536, $renderingContext);

$output215 .= '
	</div>
</div>

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure558 = function() use ($renderingContext, $self) {
$output559 = '';

$output559 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure561 = function() use ($renderingContext, $self) {
$output667 = '';

$output667 .= '
		<!-- media preview element -->
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure669 = function() use ($renderingContext, $self) {
$output670 = '';

$output670 .= '
			<div class="news-image news-img-wrap">
				';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure672 = function() use ($renderingContext, $self) {
$output676 = '';

$output676 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper
$renderChildrenClosure678 = function() use ($renderingContext, $self) {
$output681 = '';

$output681 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure683 = function() use ($renderingContext, $self) {
$output687 = '';

$output687 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure689 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments688 = array();
$arguments688['additionalAttributes'] = NULL;
$arguments688['data'] = NULL;
$arguments688['class'] = NULL;
$arguments688['dir'] = NULL;
$arguments688['id'] = NULL;
$arguments688['lang'] = NULL;
$arguments688['style'] = NULL;
$arguments688['title'] = NULL;
$arguments688['accesskey'] = NULL;
$arguments688['tabindex'] = NULL;
$arguments688['onclick'] = NULL;
$arguments688['alt'] = NULL;
$arguments688['ismap'] = NULL;
$arguments688['longdesc'] = NULL;
$arguments688['usemap'] = NULL;
$arguments688['src'] = NULL;
$arguments688['treatIdAsReference'] = NULL;
$arguments688['image'] = NULL;
$arguments688['crop'] = NULL;
$arguments688['cropVariant'] = 'default';
$arguments688['width'] = NULL;
$arguments688['height'] = NULL;
$arguments688['minWidth'] = NULL;
$arguments688['minHeight'] = NULL;
$arguments688['maxWidth'] = NULL;
$arguments688['maxHeight'] = NULL;
$arguments688['absolute'] = false;
$array690 = array (
);$arguments688['image'] = $renderingContext->getVariableProvider()->getByPath('mediaElement', $array690);
$array691 = array (
);$arguments688['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array691);
$array692 = array (
);$arguments688['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array692);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure694 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments693 = array();
$arguments693['then'] = NULL;
$arguments693['else'] = NULL;
$arguments693['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array695 = array();
$array696 = array (
);$array695['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array696);

$expression697 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments693['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression697(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array695)
					),
					$renderingContext
				);
$array698 = array (
);$arguments693['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array698);
$array699 = array (
);$arguments693['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array699);
$arguments688['maxWidth'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments693, $renderChildrenClosure694, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure701 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments700 = array();
$arguments700['then'] = NULL;
$arguments700['else'] = NULL;
$arguments700['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array702 = array();
$array703 = array (
);$array702['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array703);

$expression704 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments700['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression704(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array702)
					),
					$renderingContext
				);
$array705 = array (
);$arguments700['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array705);
$array706 = array (
);$arguments700['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array706);
$arguments688['maxHeight'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments700, $renderChildrenClosure701, $renderingContext);

$output687 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments688, $renderChildrenClosure689, $renderingContext);

$output687 .= '
						';
return $output687;
};
$arguments682 = array();
$arguments682['then'] = NULL;
$arguments682['else'] = NULL;
$arguments682['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array684 = array();
$array685 = array (
);$array684['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.type', $array685);
$array684['1'] = ' == 2';

$expression686 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments682['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression686(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array684)
					),
					$renderingContext
				);
$arguments682['__thenClosure'] = $renderChildrenClosure683;

$output681 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments682, $renderChildrenClosure683, $renderingContext);

$output681 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure708 = function() use ($renderingContext, $self) {
$output712 = '';

$output712 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure714 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments713 = array();
$arguments713['additionalAttributes'] = NULL;
$arguments713['data'] = NULL;
$arguments713['class'] = NULL;
$arguments713['dir'] = NULL;
$arguments713['id'] = NULL;
$arguments713['lang'] = NULL;
$arguments713['style'] = NULL;
$arguments713['title'] = NULL;
$arguments713['accesskey'] = NULL;
$arguments713['tabindex'] = NULL;
$arguments713['onclick'] = NULL;
$arguments713['alt'] = NULL;
$arguments713['ismap'] = NULL;
$arguments713['longdesc'] = NULL;
$arguments713['usemap'] = NULL;
$arguments713['src'] = NULL;
$arguments713['treatIdAsReference'] = NULL;
$arguments713['image'] = NULL;
$arguments713['crop'] = NULL;
$arguments713['cropVariant'] = 'default';
$arguments713['width'] = NULL;
$arguments713['height'] = NULL;
$arguments713['minWidth'] = NULL;
$arguments713['minHeight'] = NULL;
$arguments713['maxWidth'] = NULL;
$arguments713['maxHeight'] = NULL;
$arguments713['absolute'] = false;
$arguments713['src'] = 'fileadmin/templates/bigbyte2015/img/video_thumb.png';
$array715 = array (
);$arguments713['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.caption', $array715);
$array716 = array (
);$arguments713['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.caption', $array716);

$output712 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments713, $renderChildrenClosure714, $renderingContext);

$output712 .= '
						';
return $output712;
};
$arguments707 = array();
$arguments707['then'] = NULL;
$arguments707['else'] = NULL;
$arguments707['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array709 = array();
$array710 = array (
);$array709['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.type', $array710);
$array709['1'] = ' == 4';

$expression711 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 4);};
$arguments707['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression711(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array709)
					),
					$renderingContext
				);
$arguments707['__thenClosure'] = $renderChildrenClosure708;

$output681 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments707, $renderChildrenClosure708, $renderingContext);

$output681 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure718 = function() use ($renderingContext, $self) {
$output722 = '';

$output722 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure724 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments723 = array();
$arguments723['additionalAttributes'] = NULL;
$arguments723['data'] = NULL;
$arguments723['class'] = NULL;
$arguments723['dir'] = NULL;
$arguments723['id'] = NULL;
$arguments723['lang'] = NULL;
$arguments723['style'] = NULL;
$arguments723['title'] = NULL;
$arguments723['accesskey'] = NULL;
$arguments723['tabindex'] = NULL;
$arguments723['onclick'] = NULL;
$arguments723['alt'] = NULL;
$arguments723['ismap'] = NULL;
$arguments723['longdesc'] = NULL;
$arguments723['usemap'] = NULL;
$arguments723['src'] = NULL;
$arguments723['treatIdAsReference'] = NULL;
$arguments723['image'] = NULL;
$arguments723['crop'] = NULL;
$arguments723['cropVariant'] = 'default';
$arguments723['width'] = NULL;
$arguments723['height'] = NULL;
$arguments723['minWidth'] = NULL;
$arguments723['minHeight'] = NULL;
$arguments723['maxWidth'] = NULL;
$arguments723['maxHeight'] = NULL;
$arguments723['absolute'] = false;
$array725 = array (
);$arguments723['image'] = $renderingContext->getVariableProvider()->getByPath('mediaElement', $array725);
$array726 = array (
);$arguments723['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array726);
$array727 = array (
);$arguments723['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array727);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure729 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments728 = array();
$arguments728['then'] = NULL;
$arguments728['else'] = NULL;
$arguments728['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array730 = array();
$array731 = array (
);$array730['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array731);

$expression732 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments728['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression732(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array730)
					),
					$renderingContext
				);
$array733 = array (
);$arguments728['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array733);
$array734 = array (
);$arguments728['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array734);
$arguments723['maxWidth'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments728, $renderChildrenClosure729, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure736 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments735 = array();
$arguments735['then'] = NULL;
$arguments735['else'] = NULL;
$arguments735['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array737 = array();
$array738 = array (
);$array737['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array738);

$expression739 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments735['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression739(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array737)
					),
					$renderingContext
				);
$array740 = array (
);$arguments735['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array740);
$array741 = array (
);$arguments735['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array741);
$arguments723['maxHeight'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments735, $renderChildrenClosure736, $renderingContext);

$output722 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments723, $renderChildrenClosure724, $renderingContext);

$output722 .= '
						';
return $output722;
};
$arguments717 = array();
$arguments717['then'] = NULL;
$arguments717['else'] = NULL;
$arguments717['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array719 = array();
$array720 = array (
);$array719['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.type', $array720);
$array719['1'] = ' == 5';

$expression721 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 5);};
$arguments717['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression721(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array719)
					),
					$renderingContext
				);
$arguments717['__thenClosure'] = $renderChildrenClosure718;

$output681 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments717, $renderChildrenClosure718, $renderingContext);

$output681 .= '
					';
return $output681;
};
$arguments677 = array();
$arguments677['map'] = NULL;
// Rendering Array
$array679 = array();
$array680 = array (
);$array679['mediaElement'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array680);
$arguments677['map'] = $array679;

$output676 .= TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments677, $renderChildrenClosure678, $renderingContext);

$output676 .= '
				';
return $output676;
};
$arguments671 = array();
$arguments671['additionalAttributes'] = NULL;
$arguments671['data'] = NULL;
$arguments671['class'] = NULL;
$arguments671['dir'] = NULL;
$arguments671['id'] = NULL;
$arguments671['lang'] = NULL;
$arguments671['style'] = NULL;
$arguments671['title'] = NULL;
$arguments671['accesskey'] = NULL;
$arguments671['tabindex'] = NULL;
$arguments671['onclick'] = NULL;
$arguments671['newsItem'] = NULL;
$arguments671['settings'] = array (
);
$arguments671['uriOnly'] = false;
$arguments671['configuration'] = array (
);
$arguments671['content'] = '';
$arguments671['section'] = NULL;
$array673 = array (
);$arguments671['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array673);
$array674 = array (
);$arguments671['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array674);
$array675 = array (
);$arguments671['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array675);

$output670 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments671, $renderChildrenClosure672, $renderingContext);

$output670 .= '
			</div>
		';
return $output670;
};
$arguments668 = array();

$output667 .= '';

$output667 .= '
		
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure743 = function() use ($renderingContext, $self) {
$output744 = '';

$output744 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure746 = function() use ($renderingContext, $self) {
$output750 = '';

$output750 .= '
				<div class="news-image news-img-wrap">
					<span class="no-media-element">
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure752 = function() use ($renderingContext, $self) {
$output756 = '';

$output756 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure758 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments757 = array();
$arguments757['additionalAttributes'] = NULL;
$arguments757['data'] = NULL;
$arguments757['class'] = NULL;
$arguments757['dir'] = NULL;
$arguments757['id'] = NULL;
$arguments757['lang'] = NULL;
$arguments757['style'] = NULL;
$arguments757['title'] = NULL;
$arguments757['accesskey'] = NULL;
$arguments757['tabindex'] = NULL;
$arguments757['onclick'] = NULL;
$arguments757['alt'] = NULL;
$arguments757['ismap'] = NULL;
$arguments757['longdesc'] = NULL;
$arguments757['usemap'] = NULL;
$arguments757['src'] = NULL;
$arguments757['treatIdAsReference'] = NULL;
$arguments757['image'] = NULL;
$arguments757['crop'] = NULL;
$arguments757['cropVariant'] = 'default';
$arguments757['width'] = NULL;
$arguments757['height'] = NULL;
$arguments757['minWidth'] = NULL;
$arguments757['minHeight'] = NULL;
$arguments757['maxWidth'] = NULL;
$arguments757['maxHeight'] = NULL;
$arguments757['absolute'] = false;
$array759 = array (
);$arguments757['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array759);
$arguments757['title'] = '';
$arguments757['alt'] = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure761 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments760 = array();
$arguments760['then'] = NULL;
$arguments760['else'] = NULL;
$arguments760['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array762 = array();
$array763 = array (
);$array762['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array763);

$expression764 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments760['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression764(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array762)
					),
					$renderingContext
				);
$array765 = array (
);$arguments760['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array765);
$array766 = array (
);$arguments760['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array766);
$arguments757['maxWidth'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments760, $renderChildrenClosure761, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure768 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments767 = array();
$arguments767['then'] = NULL;
$arguments767['else'] = NULL;
$arguments767['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array769 = array();
$array770 = array (
);$array769['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array770);

$expression771 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments767['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression771(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array769)
					),
					$renderingContext
				);
$array772 = array (
);$arguments767['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array772);
$array773 = array (
);$arguments767['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array773);
$arguments757['maxHeight'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments767, $renderChildrenClosure768, $renderingContext);

$output756 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments757, $renderChildrenClosure758, $renderingContext);

$output756 .= '
						';
return $output756;
};
$arguments751 = array();
$arguments751['additionalAttributes'] = NULL;
$arguments751['data'] = NULL;
$arguments751['class'] = NULL;
$arguments751['dir'] = NULL;
$arguments751['id'] = NULL;
$arguments751['lang'] = NULL;
$arguments751['style'] = NULL;
$arguments751['title'] = NULL;
$arguments751['accesskey'] = NULL;
$arguments751['tabindex'] = NULL;
$arguments751['onclick'] = NULL;
$arguments751['newsItem'] = NULL;
$arguments751['settings'] = array (
);
$arguments751['uriOnly'] = false;
$arguments751['configuration'] = array (
);
$arguments751['content'] = '';
$arguments751['section'] = NULL;
$array753 = array (
);$arguments751['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array753);
$array754 = array (
);$arguments751['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array754);
$array755 = array (
);$arguments751['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array755);

$output750 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments751, $renderChildrenClosure752, $renderingContext);

$output750 .= '
					</span>
				</div>
			';
return $output750;
};
$arguments745 = array();
$arguments745['then'] = NULL;
$arguments745['else'] = NULL;
$arguments745['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array747 = array();
$array748 = array (
);$array747['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array748);

$expression749 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments745['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression749(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array747)
					),
					$renderingContext
				);
$arguments745['__thenClosure'] = $renderChildrenClosure746;

$output744 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments745, $renderChildrenClosure746, $renderingContext);

$output744 .= '
		';
return $output744;
};
$arguments742 = array();
$arguments742['if'] = NULL;

$output667 .= '';

$output667 .= '
	';
return $output667;
};
$arguments560 = array();
$arguments560['then'] = NULL;
$arguments560['else'] = NULL;
$arguments560['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array664 = array();
$array665 = array (
);$array664['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array665);

$expression666 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments560['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression666(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array664)
					),
					$renderingContext
				);
$arguments560['__thenClosure'] = function() use ($renderingContext, $self) {
$output562 = '';

$output562 .= '
			<div class="news-image news-img-wrap">
				';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure564 = function() use ($renderingContext, $self) {
$output568 = '';

$output568 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper
$renderChildrenClosure570 = function() use ($renderingContext, $self) {
$output573 = '';

$output573 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure575 = function() use ($renderingContext, $self) {
$output579 = '';

$output579 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure581 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments580 = array();
$arguments580['additionalAttributes'] = NULL;
$arguments580['data'] = NULL;
$arguments580['class'] = NULL;
$arguments580['dir'] = NULL;
$arguments580['id'] = NULL;
$arguments580['lang'] = NULL;
$arguments580['style'] = NULL;
$arguments580['title'] = NULL;
$arguments580['accesskey'] = NULL;
$arguments580['tabindex'] = NULL;
$arguments580['onclick'] = NULL;
$arguments580['alt'] = NULL;
$arguments580['ismap'] = NULL;
$arguments580['longdesc'] = NULL;
$arguments580['usemap'] = NULL;
$arguments580['src'] = NULL;
$arguments580['treatIdAsReference'] = NULL;
$arguments580['image'] = NULL;
$arguments580['crop'] = NULL;
$arguments580['cropVariant'] = 'default';
$arguments580['width'] = NULL;
$arguments580['height'] = NULL;
$arguments580['minWidth'] = NULL;
$arguments580['minHeight'] = NULL;
$arguments580['maxWidth'] = NULL;
$arguments580['maxHeight'] = NULL;
$arguments580['absolute'] = false;
$array582 = array (
);$arguments580['image'] = $renderingContext->getVariableProvider()->getByPath('mediaElement', $array582);
$array583 = array (
);$arguments580['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array583);
$array584 = array (
);$arguments580['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array584);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure586 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments585 = array();
$arguments585['then'] = NULL;
$arguments585['else'] = NULL;
$arguments585['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array587 = array();
$array588 = array (
);$array587['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array588);

$expression589 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments585['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression589(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array587)
					),
					$renderingContext
				);
$array590 = array (
);$arguments585['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array590);
$array591 = array (
);$arguments585['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array591);
$arguments580['maxWidth'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments585, $renderChildrenClosure586, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure593 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments592 = array();
$arguments592['then'] = NULL;
$arguments592['else'] = NULL;
$arguments592['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array594 = array();
$array595 = array (
);$array594['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array595);

$expression596 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments592['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression596(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array594)
					),
					$renderingContext
				);
$array597 = array (
);$arguments592['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array597);
$array598 = array (
);$arguments592['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array598);
$arguments580['maxHeight'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments592, $renderChildrenClosure593, $renderingContext);

$output579 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments580, $renderChildrenClosure581, $renderingContext);

$output579 .= '
						';
return $output579;
};
$arguments574 = array();
$arguments574['then'] = NULL;
$arguments574['else'] = NULL;
$arguments574['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array576 = array();
$array577 = array (
);$array576['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.type', $array577);
$array576['1'] = ' == 2';

$expression578 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments574['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression578(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array576)
					),
					$renderingContext
				);
$arguments574['__thenClosure'] = $renderChildrenClosure575;

$output573 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments574, $renderChildrenClosure575, $renderingContext);

$output573 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure600 = function() use ($renderingContext, $self) {
$output604 = '';

$output604 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure606 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments605 = array();
$arguments605['additionalAttributes'] = NULL;
$arguments605['data'] = NULL;
$arguments605['class'] = NULL;
$arguments605['dir'] = NULL;
$arguments605['id'] = NULL;
$arguments605['lang'] = NULL;
$arguments605['style'] = NULL;
$arguments605['title'] = NULL;
$arguments605['accesskey'] = NULL;
$arguments605['tabindex'] = NULL;
$arguments605['onclick'] = NULL;
$arguments605['alt'] = NULL;
$arguments605['ismap'] = NULL;
$arguments605['longdesc'] = NULL;
$arguments605['usemap'] = NULL;
$arguments605['src'] = NULL;
$arguments605['treatIdAsReference'] = NULL;
$arguments605['image'] = NULL;
$arguments605['crop'] = NULL;
$arguments605['cropVariant'] = 'default';
$arguments605['width'] = NULL;
$arguments605['height'] = NULL;
$arguments605['minWidth'] = NULL;
$arguments605['minHeight'] = NULL;
$arguments605['maxWidth'] = NULL;
$arguments605['maxHeight'] = NULL;
$arguments605['absolute'] = false;
$arguments605['src'] = 'fileadmin/templates/bigbyte2015/img/video_thumb.png';
$array607 = array (
);$arguments605['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.caption', $array607);
$array608 = array (
);$arguments605['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.caption', $array608);

$output604 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments605, $renderChildrenClosure606, $renderingContext);

$output604 .= '
						';
return $output604;
};
$arguments599 = array();
$arguments599['then'] = NULL;
$arguments599['else'] = NULL;
$arguments599['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array601 = array();
$array602 = array (
);$array601['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.type', $array602);
$array601['1'] = ' == 4';

$expression603 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 4);};
$arguments599['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression603(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array601)
					),
					$renderingContext
				);
$arguments599['__thenClosure'] = $renderChildrenClosure600;

$output573 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments599, $renderChildrenClosure600, $renderingContext);

$output573 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure610 = function() use ($renderingContext, $self) {
$output614 = '';

$output614 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure616 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments615 = array();
$arguments615['additionalAttributes'] = NULL;
$arguments615['data'] = NULL;
$arguments615['class'] = NULL;
$arguments615['dir'] = NULL;
$arguments615['id'] = NULL;
$arguments615['lang'] = NULL;
$arguments615['style'] = NULL;
$arguments615['title'] = NULL;
$arguments615['accesskey'] = NULL;
$arguments615['tabindex'] = NULL;
$arguments615['onclick'] = NULL;
$arguments615['alt'] = NULL;
$arguments615['ismap'] = NULL;
$arguments615['longdesc'] = NULL;
$arguments615['usemap'] = NULL;
$arguments615['src'] = NULL;
$arguments615['treatIdAsReference'] = NULL;
$arguments615['image'] = NULL;
$arguments615['crop'] = NULL;
$arguments615['cropVariant'] = 'default';
$arguments615['width'] = NULL;
$arguments615['height'] = NULL;
$arguments615['minWidth'] = NULL;
$arguments615['minHeight'] = NULL;
$arguments615['maxWidth'] = NULL;
$arguments615['maxHeight'] = NULL;
$arguments615['absolute'] = false;
$array617 = array (
);$arguments615['image'] = $renderingContext->getVariableProvider()->getByPath('mediaElement', $array617);
$array618 = array (
);$arguments615['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array618);
$array619 = array (
);$arguments615['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array619);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure621 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments620 = array();
$arguments620['then'] = NULL;
$arguments620['else'] = NULL;
$arguments620['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array622 = array();
$array623 = array (
);$array622['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array623);

$expression624 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments620['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression624(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array622)
					),
					$renderingContext
				);
$array625 = array (
);$arguments620['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array625);
$array626 = array (
);$arguments620['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array626);
$arguments615['maxWidth'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments620, $renderChildrenClosure621, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure628 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments627 = array();
$arguments627['then'] = NULL;
$arguments627['else'] = NULL;
$arguments627['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array629 = array();
$array630 = array (
);$array629['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array630);

$expression631 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments627['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression631(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array629)
					),
					$renderingContext
				);
$array632 = array (
);$arguments627['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array632);
$array633 = array (
);$arguments627['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array633);
$arguments615['maxHeight'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments627, $renderChildrenClosure628, $renderingContext);

$output614 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments615, $renderChildrenClosure616, $renderingContext);

$output614 .= '
						';
return $output614;
};
$arguments609 = array();
$arguments609['then'] = NULL;
$arguments609['else'] = NULL;
$arguments609['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array611 = array();
$array612 = array (
);$array611['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.type', $array612);
$array611['1'] = ' == 5';

$expression613 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 5);};
$arguments609['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression613(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array611)
					),
					$renderingContext
				);
$arguments609['__thenClosure'] = $renderChildrenClosure610;

$output573 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments609, $renderChildrenClosure610, $renderingContext);

$output573 .= '
					';
return $output573;
};
$arguments569 = array();
$arguments569['map'] = NULL;
// Rendering Array
$array571 = array();
$array572 = array (
);$array571['mediaElement'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array572);
$arguments569['map'] = $array571;

$output568 .= TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments569, $renderChildrenClosure570, $renderingContext);

$output568 .= '
				';
return $output568;
};
$arguments563 = array();
$arguments563['additionalAttributes'] = NULL;
$arguments563['data'] = NULL;
$arguments563['class'] = NULL;
$arguments563['dir'] = NULL;
$arguments563['id'] = NULL;
$arguments563['lang'] = NULL;
$arguments563['style'] = NULL;
$arguments563['title'] = NULL;
$arguments563['accesskey'] = NULL;
$arguments563['tabindex'] = NULL;
$arguments563['onclick'] = NULL;
$arguments563['newsItem'] = NULL;
$arguments563['settings'] = array (
);
$arguments563['uriOnly'] = false;
$arguments563['configuration'] = array (
);
$arguments563['content'] = '';
$arguments563['section'] = NULL;
$array565 = array (
);$arguments563['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array565);
$array566 = array (
);$arguments563['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array566);
$array567 = array (
);$arguments563['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array567);

$output562 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments563, $renderChildrenClosure564, $renderingContext);

$output562 .= '
			</div>
		';
return $output562;
};
$arguments560['__elseClosures'][] = function() use ($renderingContext, $self) {
$output634 = '';

$output634 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure636 = function() use ($renderingContext, $self) {
$output640 = '';

$output640 .= '
				<div class="news-image news-img-wrap">
					<span class="no-media-element">
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure642 = function() use ($renderingContext, $self) {
$output646 = '';

$output646 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure648 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments647 = array();
$arguments647['additionalAttributes'] = NULL;
$arguments647['data'] = NULL;
$arguments647['class'] = NULL;
$arguments647['dir'] = NULL;
$arguments647['id'] = NULL;
$arguments647['lang'] = NULL;
$arguments647['style'] = NULL;
$arguments647['title'] = NULL;
$arguments647['accesskey'] = NULL;
$arguments647['tabindex'] = NULL;
$arguments647['onclick'] = NULL;
$arguments647['alt'] = NULL;
$arguments647['ismap'] = NULL;
$arguments647['longdesc'] = NULL;
$arguments647['usemap'] = NULL;
$arguments647['src'] = NULL;
$arguments647['treatIdAsReference'] = NULL;
$arguments647['image'] = NULL;
$arguments647['crop'] = NULL;
$arguments647['cropVariant'] = 'default';
$arguments647['width'] = NULL;
$arguments647['height'] = NULL;
$arguments647['minWidth'] = NULL;
$arguments647['minHeight'] = NULL;
$arguments647['maxWidth'] = NULL;
$arguments647['maxHeight'] = NULL;
$arguments647['absolute'] = false;
$array649 = array (
);$arguments647['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array649);
$arguments647['title'] = '';
$arguments647['alt'] = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure651 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments650 = array();
$arguments650['then'] = NULL;
$arguments650['else'] = NULL;
$arguments650['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array652 = array();
$array653 = array (
);$array652['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array653);

$expression654 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments650['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression654(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array652)
					),
					$renderingContext
				);
$array655 = array (
);$arguments650['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array655);
$array656 = array (
);$arguments650['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array656);
$arguments647['maxWidth'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments650, $renderChildrenClosure651, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure658 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments657 = array();
$arguments657['then'] = NULL;
$arguments657['else'] = NULL;
$arguments657['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array659 = array();
$array660 = array (
);$array659['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array660);

$expression661 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments657['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression661(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array659)
					),
					$renderingContext
				);
$array662 = array (
);$arguments657['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array662);
$array663 = array (
);$arguments657['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array663);
$arguments647['maxHeight'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments657, $renderChildrenClosure658, $renderingContext);

$output646 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments647, $renderChildrenClosure648, $renderingContext);

$output646 .= '
						';
return $output646;
};
$arguments641 = array();
$arguments641['additionalAttributes'] = NULL;
$arguments641['data'] = NULL;
$arguments641['class'] = NULL;
$arguments641['dir'] = NULL;
$arguments641['id'] = NULL;
$arguments641['lang'] = NULL;
$arguments641['style'] = NULL;
$arguments641['title'] = NULL;
$arguments641['accesskey'] = NULL;
$arguments641['tabindex'] = NULL;
$arguments641['onclick'] = NULL;
$arguments641['newsItem'] = NULL;
$arguments641['settings'] = array (
);
$arguments641['uriOnly'] = false;
$arguments641['configuration'] = array (
);
$arguments641['content'] = '';
$arguments641['section'] = NULL;
$array643 = array (
);$arguments641['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array643);
$array644 = array (
);$arguments641['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array644);
$array645 = array (
);$arguments641['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array645);

$output640 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments641, $renderChildrenClosure642, $renderingContext);

$output640 .= '
					</span>
				</div>
			';
return $output640;
};
$arguments635 = array();
$arguments635['then'] = NULL;
$arguments635['else'] = NULL;
$arguments635['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array637 = array();
$array638 = array (
);$array637['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array638);

$expression639 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments635['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression639(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array637)
					),
					$renderingContext
				);
$arguments635['__thenClosure'] = $renderChildrenClosure636;

$output634 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments635, $renderChildrenClosure636, $renderingContext);

$output634 .= '
		';
return $output634;
};

$output559 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments560, $renderChildrenClosure561, $renderingContext);

$output559 .= '
';
return $output559;
};
$arguments557 = array();
$arguments557['name'] = NULL;
$arguments557['name'] = 'previewImage';

$output215 .= NULL;

$output215 .= '
';

return $output215;
}


}
#