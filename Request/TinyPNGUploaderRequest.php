<?php

namespace Scraper\ScraperTinyPNG\Request;

use Scraper\Scraper\Annotation\UrlAnnotation;

/**
 * Class TinyPNGUploader
 * @package Scraper\ScraperTinyPNG\Request
 *
 * @UrlAnnotation(url="shrink", method="POST", contentType="JSON", protocol="CURL")
 */
class TinyPNGUploaderRequest extends TinyPNGRequest
{
	/**
	 * @var string
	 */
	protected $fileContent;

	public function getBody()
	{
		return $this->fileContent;
	}

	/**
	 * @return string
	 */
	public function getFileContent(): ?string
	{
		return $this->fileContent;
	}

	/**
	 * @param string $fileContent
	 *
	 * @return $this
	 */
	public function setFileContent(?string $fileContent)
	{
		$this->fileContent = $fileContent;
		return $this;
	}
}
