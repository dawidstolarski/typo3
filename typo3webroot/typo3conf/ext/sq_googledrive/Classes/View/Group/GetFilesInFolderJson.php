<?php
namespace SinusQuadrat\SqGoogledrive\View\Group;

class GetFilesInFolderJson extends \TYPO3\CMS\Extbase\Mvc\View\JsonView {

    protected $configuration = array(
        'files' => array(
            '_descendAll' => array(
                //'_only' => array('property1', 'property2'),
                '_exclude' => array('pid')
            )
        )
    );

}