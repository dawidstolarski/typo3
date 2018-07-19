<?php
namespace SinusQuadrat\SqGoogledrive\Domain\Model;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Group
 */
class Group extends \TYPO3\CMS\Extbase\Domain\Model\FrontendUserGroup {

	/**
	 * consultantid
	 *
	 * @var integer
	 */
	protected $consultantid = 0;

	/**
	 * searchresultpage
	 *
	 * @var integer
	 */
	protected $searchresultpage = 0;

	/**
	 * googledrivesettings
	 *
	 * @var string
	 */
	protected $googledrivesettings = '';

	/**
	 * customerlogo
	 *
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $customerlogo = NULL;

	/**
	 * Returns the googledrivesettings
	 *
	 * @return string $googledrivesettings
	 */
	public function getGoogledrivesettings() {
		return $this->googledrivesettings;
	}

	/**
	 * Sets the googledrivesettings
	 *
	 * @param string $googledrivesettings
	 * @return void
	 */
	public function setGoogledrivesettings($googledrivesettings) {
		$this->googledrivesettings = $googledrivesettings;
	}

	/**
	 * Returns the consultantid
	 *
	 * @return integer $consultantid
	 */
	public function getConsultantid() {
		return $this->consultantid;
	}

	/**
	 * Sets the consultantid
	 *
	 * @param integer $consultantid
	 * @return void
	 */
	public function setConsultantid($consultantid) {
		$this->consultantid = $consultantid;
	}

	/**
	 * Returns the searchresultpage
	 *
	 * @return integer $searchresultpage
	 */
	public function getSearchresultpage() {
		return $this->searchresultpage;
	}

	/**
	 * Sets the searchresultpage
	 *
	 * @param integer $searchresultpage
	 * @return void
	 */
	public function setSearchresultpage($searchresultpage) {
		$this->searchresultpage = $searchresultpage;
	}

	/**
	 * Returns the customerlogo
	 *
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $customerlogo
	 */
	public function getCustomerlogo() {
		return $this->customerlogo;
	}

	/**
	 * Sets the customerlogo
	 *
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $customerlogo
	 * @return void
	 */
	public function setCustomerlogo(\TYPO3\CMS\Extbase\Domain\Model\FileReference $customerlogo) {
		$this->customerlogo = $customerlogo;
	}

}