<?php
namespace HSE\HeContent\Domain\Model;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016
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
 * HeContent
 */
class HeContent extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     *
     * @var string
     */
    protected $title = '';
    
    /**
     * subtitle
     *
     * @var string
     */
    protected $subtitle = '';
    
    /**
     * description
     *
     * @var string
     */
    protected $description = '';
    
    /**
     * media
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    protected $media = null;
    
    /**
     * preview
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    protected $preview = null;
    
    /**
     * linktext
     *
     * @var string
     */
    protected $linktext = '';
    
    /**
     * link
     *
     * @var string
     */
    protected $link = '';
    
    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }
    
    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
    
    /**
     * Returns the subtitle
     *
     * @return string $subtitle
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }
    
    /**
     * Sets the subtitle
     *
     * @param string $subtitle
     * @return void
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;
    }
    
    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    /**
     * Returns the media
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $media
     */
    public function getMedia()
    {
        return $this->media;
    }
    
    /**
     * Sets the media
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $media
     * @return void
     */
    public function setMedia(\TYPO3\CMS\Extbase\Domain\Model\FileReference $media)
    {
        $this->media = $media;
    }
    
    /**
     * Returns the preview
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $preview
     */
    public function getPreview()
    {
        return $this->preview;
    }
    
    /**
     * Sets the preview
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $preview
     * @return void
     */
    public function setPreview(\TYPO3\CMS\Extbase\Domain\Model\FileReference $preview)
    {
        $this->preview = $preview;
    }
    
    /**
     * Returns the linktext
     *
     * @return string $linktext
     */
    public function getLinktext()
    {
        return $this->linktext;
    }
    
    /**
     * Sets the linktext
     *
     * @param string $linktext
     * @return void
     */
    public function setLinktext($linktext)
    {
        $this->linktext = $linktext;
    }
    
    /**
     * Returns the link
     *
     * @return string $link
     */
    public function getLink()
    {
        return $this->link;
    }
    
    /**
     * Sets the link
     *
     * @param string $link
     * @return void
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

}