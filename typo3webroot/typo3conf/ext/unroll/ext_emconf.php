<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "unroll".
 *
 * Auto generated 04-05-2018 16:24
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Enhanced TYPO3 save buttons',
  'description' => 'Adds options to TYPO3\'s save buttons, to unroll them from dropdown, just display icons and changing the order.',
  'category' => 'backend',
  'version' => '2.0.2',
  'state' => 'stable',
  'uploadfolder' => false,
  'author' => 'Markus Klein, Armin Vieweg',
  'author_email' => 'support@reelworx.at,armin@v.ieweg.de',
  'author_company' => 'Reelworx GmbH, Institute Web',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '7.6.2-8.7.99',
      'setup' => '7.6.0-8.7.99',
    ),
    'conflicts' => 
    array (
      'rx_unrollsavebuttons' => '1.0.0-1.99.99',
    ),
    'suggests' => 
    array (
    ),
  ),
  'createDirs' => NULL,
  'clearcacheonload' => false,
);

