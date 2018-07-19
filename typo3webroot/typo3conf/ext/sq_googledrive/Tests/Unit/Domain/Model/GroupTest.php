<?php

namespace SinusQuadrat\SqGoogledrive\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2016 
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class \SinusQuadrat\SqGoogledrive\Domain\Model\Group.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class GroupTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \SinusQuadrat\SqGoogledrive\Domain\Model\Group
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \SinusQuadrat\SqGoogledrive\Domain\Model\Group();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getCustomerlogoReturnsInitialValueForFileReference() {
		$this->assertEquals(
			NULL,
			$this->subject->getCustomerlogo()
		);
	}

	/**
	 * @test
	 */
	public function setCustomerlogoForFileReferenceSetsCustomerlogo() {
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setCustomerlogo($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'customerlogo',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getConsultantidReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getConsultantid()
		);
	}

	/**
	 * @test
	 */
	public function setConsultantidForIntegerSetsConsultantid() {
		$this->subject->setConsultantid(12);

		$this->assertAttributeEquals(
			12,
			'consultantid',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getSearchresultpageReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getSearchresultpage()
		);
	}

	/**
	 * @test
	 */
	public function setSearchresultpageForIntegerSetsSearchresultpage() {
		$this->subject->setSearchresultpage(12);

		$this->assertAttributeEquals(
			12,
			'searchresultpage',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getGoogledrivesettingsReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getGoogledrivesettings()
		);
	}

	/**
	 * @test
	 */
	public function setGoogledrivesettingsForStringSetsGoogledrivesettings() {
		$this->subject->setGoogledrivesettings('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'googledrivesettings',
			$this->subject
		);
	}
}
