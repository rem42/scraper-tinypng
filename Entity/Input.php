<?php

namespace Scraper\ScraperTinyPNG\Entity;

use JMS\Serializer\Annotation as Serializer;

class Input
{
	/**
	 * @var integer
	 * @Serializer\Type("integer")
	 * @Serializer\SerializedName("size")
	 */
	protected $size;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("type")
	 */
	protected $type;

	/**
	 * @return int
	 */
	public function getSize(): ?int
	{
		return $this->size;
	}

	/**
	 * @param int $size
	 *
	 * @return $this
	 */
	public function setSize(?int $size)
	{
		$this->size = $size;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getType(): ?string
	{
		return $this->type;
	}

	/**
	 * @param string $type
	 *
	 * @return $this
	 */
	public function setType(?string $type)
	{
		$this->type = $type;
		return $this;
	}
}
