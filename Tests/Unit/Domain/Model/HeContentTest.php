<?php

namespace HSE\HeContent\Tests\Unit\Domain\Model;

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
 * Test case for class \HSE\HeContent\Domain\Model\HeContent.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class HeContentTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \HSE\HeContent\Domain\Model\HeContent
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \HSE\HeContent\Domain\Model\HeContent();
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getTitleReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTitle()
		);
	}

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle()
	{
		$this->subject->setTitle('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'title',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getSubtitleReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getSubtitle()
		);
	}

	/**
	 * @test
	 */
	public function setSubtitleForStringSetsSubtitle()
	{
		$this->subject->setSubtitle('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'subtitle',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDescriptionReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getDescription()
		);
	}

	/**
	 * @test
	 */
	public function setDescriptionForStringSetsDescription()
	{
		$this->subject->setDescription('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'description',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getMediaReturnsInitialValueForFileReference()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getMedia()
		);
	}

	/**
	 * @test
	 */
	public function setMediaForFileReferenceSetsMedia()
	{
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setMedia($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'media',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPreviewReturnsInitialValueForFileReference()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getPreview()
		);
	}

	/**
	 * @test
	 */
	public function setPreviewForFileReferenceSetsPreview()
	{
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setPreview($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'preview',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getLinktextReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getLinktext()
		);
	}

	/**
	 * @test
	 */
	public function setLinktextForStringSetsLinktext()
	{
		$this->subject->setLinktext('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'linktext',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getLinkReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getLink()
		);
	}

	/**
	 * @test
	 */
	public function setLinkForStringSetsLink()
	{
		$this->subject->setLink('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'link',
			$this->subject
		);
	}
}
