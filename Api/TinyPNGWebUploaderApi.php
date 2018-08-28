<?php

namespace Scraper\ScraperTinyPNG\Api;

use JMS\Serializer\SerializerBuilder;
use Scraper\Scraper\Entity\Response;
use Scraper\Scraper\Serializer\Construction\ObjectConstructor;
use Scraper\ScraperTinyPNG\Entity\Upload;
use Scraper\ScraperTinyPNG\Request\TinyPNGWebUploaderRequest;

class TinyPNGWebUploaderApi extends TinyPNGApi
{
	/**
	 * @var TinyPNGWebUploaderRequest
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

		$response = new Response();
		$response
			->setData($this->data)
			->setObject($this->object)
			->setUrl($this->urlAnnotation)
			->setRequest($this->request)
		;

		return $response;
	}
}
