<?php
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['realurl']=array (
  'www.bigbytesoftware.com' => 
  array (
    'init' => 
    array (
      'enableCHashCache' => true,
      'appendMissingSlash' => 'ifNotFile,redirect',
      'adminJumpToBackend' => true,
      'enableUrlDecodeCache' => true,
      'enableUrlEncodeCache' => true,
      'emptyUrlReturnValue' => '/',
    ),
    'pagePath' => 
    array (
      'type' => 'user',
      'userFunc' => 'EXT:realurl/class.tx_realurl_advanced.php:&tx_realurl_advanced->main',
      'spaceCharacter' => '-',
      'languageGetVar' => 'L',
      'rootpage_id' => '1',
    ),
    'fileName' => 
    array (
      'defaultToHTMLsuffixOnPrev' => 0,
      'acceptHTMLsuffix' => 1,
      'index' => array(
        'sitemap.xml' => array(
          'keyValues' => array(
            'type' => 841132,
          ),
        ),
      ),
    ),
    'postVarSets' => 
    array (
      '_DEFAULT' => 
      array (
        'news' => 
        array (
          0 => 
          array (
            'GETvar' => 'tx_news_pi1[news]',
            'lookUpTable' => 
            array (
              'table' => 'tx_news_domain_model_news',
              'id_field' => 'uid',
              'alias_field' => 'title',
              'useUniqueCache' => 1,
              'useUniqueCache_conf' => 
              array (
                'strtolower' => 1,
                'spaceCharacter' => '-',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'bigbytesoftware.com' => 'www.bigbytesoftware.com',
);
