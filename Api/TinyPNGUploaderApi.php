<?php

namespace Scraper\ScraperTinyPNG\Api;

use JMS\Serializer\SerializerBuilder;
use Scraper\Scraper\Entity\Response;
use Scraper\Scraper\Serializer\Construction\ObjectConstructor;
use Scraper\ScraperTinyPNG\Entity\Upload;
use Scraper\ScraperTinyPNG\Request\TinyPNGUploaderRequest;

class TinyPNGUploaderApi extends TinyPNGApi
{
	/**
	 * @var TinyPNGUploaderRequest
	 */
	protected $request;

	public function execute()
	{
		$data = json_encode($this->data);
		$serializer = SerializerBuilder::create()
			->setObjectConstructor(new ObjectConstructor())
			->build()
		;
		$this->object = $serializer->deserialize($data, Upload::class, 'json');

		return $this->object;
	}
}
