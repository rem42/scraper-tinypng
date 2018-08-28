<?php

namespace Scraper\ScraperTinyPNG\Entity;

use JMS\Serializer\Annotation as Serializer;

class Output
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
	 * @var integer
	 * @Serializer\Type("integer")
	 * @Serializer\SerializedName("width")
	 */
	protected $width;
	/**
	 * @var integer
	 * @Serializer\Type("integer")
	 * @Serializer\SerializedName("height")
	 */
	protected $height;
	/**
	 * @var float
	 * @Serializer\Type("float")
	 * @Serializer\SerializedName("ratio")
	 */
	protected $ratio;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("url")
	 */
	protected $url;

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

	/**
	 * @return int
	 */
	public function getWidth(): ?int
	{
		return $this->width;
	}

	/**
	 * @param int $width
	 *
	 * @return $this
	 */
	public function setWidth(?int $width)
	{
		$this->width = $width;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getHeight(): ?int
	{
		return $this->height;
	}

	/**
	 * @param int $height
	 *
	 * @return $this
	 */
	public function setHeight(?int $height)
	{
		$this->height = $height;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getRatio(): ?float
	{
		return $this->ratio;
	}

	/**
	 * @param float $ratio
	 *
	 * @return $this
	 */
	public function setRatio(?float $ratio)
	{
		$this->ratio = $ratio;
		return $this;
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
