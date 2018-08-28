<?php

namespace Scraper\ScraperTinyPNG\Request;

use Scraper\Scraper\Annotation\UrlAnnotation;

/**
 * Class TinyPNGUploader
 * @package Scraper\ScraperTinyPNG\Request
 *
 * @UrlAnnotation(url="shrink", method="POST", contentType="JSON", protocol="CURL")
 */
class TinyPNGWebUploaderRequest extends TinyPNGRequest
{
	/**
	 * @var string
	 */
	protected $url;

	public function getBody()
	{
		$data = [
			"source" => [
				"url" => $this->url
			]
		];
		return json_encode($data, JSON_UNESCAPED_SLASHES);
	}

	/**
	 * @return array
	 */
	public function getHeaders()
	{
		$parent = parent::getHeaders();

		$array = [
			'content-type' => 'application/json'
		];

		return array_merge($parent, $array);
	}

	/**
	 * @return string
	 */
	public function getUrl(): ?string
	{
		return $this->url;
	}

	/**
	 * @param string $url
	 *
	 * @return $this
	 */
	public function setUrl(?string $url)
	{
		$this->url = $url;
		return $this;
	}
}
