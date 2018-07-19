<?php
namespace SinusQuadrat\SqGoogledrive\Tests\Unit\Controller;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2016 
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
 * Test case for class SinusQuadrat\SqGoogledrive\Controller\GroupController.
 *
 */
class GroupControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \SinusQuadrat\SqGoogledrive\Controller\GroupController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('SinusQuadrat\\SqGoogledrive\\Controller\\GroupController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllGroupsFromRepositoryAndAssignsThemToView() {

		$allGroups = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$groupRepository = $this->getMock('SinusQuadrat\\SqGoogledrive\\Domain\\Repository\\GroupRepository', array('findAll'), array(), '', FALSE);
		$groupRepository->expects($this->once())->method('findAll')->will($this->returnValue($allGroups));
		$this->inject($this->subject, 'groupRepository', $groupRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('groups', $allGroups);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}
}
