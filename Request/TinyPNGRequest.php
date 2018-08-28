<?php

namespace Scraper\ScraperTinyPNG\Request;

use Scraper\Scraper\Annotation\UrlAnnotation;
use Scraper\Scraper\Request\Request;

/**
 * Class TinyPNGRequest
 * @package Scraper\ScraperTinyPNG\Request
 *
 * @UrlAnnotation(baseUrl="https://tinypng.com/web/")
 */
abstract class TinyPNGRequest extends Request
{
	/**
	 * @var string
	 */
	protected $userAgent;

	public function getParameters()
	{
		return [];
	}

	public function getBody()
	{
		return [];
	}

	public function getHeaders()
	{
		return [
			'User-Agent' => $this->userAgent
		];
	}

	/**
	 * @return string
	 */
	public function getUserAgent(): ?string
	{
		return $this->userAgent;
	}

	/**
	 * @param string $userAgent
	 *
	 * @return $this
	 */
	public function setUserAgent(?string $userAgent)
	{
		$this->userAgent = $userAgent;
		return $this;
	}
}
