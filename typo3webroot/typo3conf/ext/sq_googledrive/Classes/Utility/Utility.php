<?php

namespace SinusQuadrat\SqGoogledrive\Utility;

use \TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Misc functions
 *
 * sq_googledrive
 *
 */
class Utility {
	/**
	 * groupRepository
	 *
	 * @var \SinusQuadrat\SqGoogledrive\Domain\Repository\GroupRepository
	 * @inject
	 */
	protected $groupRepository;

	/**
	 * Return current logged in fe_user's usergroup
	 *
	 * @return query object
	 */
	public function getCurrentUserGroup() {
		$objectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('\\TYPO3\\CMS\\Extbase\\Object\\ObjectManager');
		$this->groupRepository = $objectManager->get('\\SinusQuadrat\\SqGoogledrive\\Domain\\Repository\\GroupRepository');

		$usergroups = $GLOBALS['TSFE']->fe_user->groupData['uid'];
		if (count($usergroups) > 0) {
			$group = $this->groupRepository->findByUid(reset($usergroups));
		}
		return $group;
	}
}