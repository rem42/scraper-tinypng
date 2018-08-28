<?php

namespace Scraper\ScraperTinyPNG\Entity;

use JMS\Serializer\Annotation as Serializer;

class Upload
{
	/**
	 * @var Input
	 * @Serializer\Type("Scraper\ScraperTinyPNG\Entity\Input")
	 * @Serializer\SerializedName("input")
	 */
	protected $input;
	/**
	 * @var Output
	 * @Serializer\Type("Scraper\ScraperTinyPNG\Entity\Output")
	 * @Serializer\SerializedName("output")
	 */
	protected $output;

	/**
	 * @return Input
	 */
	public function getInput(): ?Input
	{
		return $this->input;
	}

	/**
	 * @param Input $input
	 *
	 * @return $this
	 */
	public function setInput(?Input $input)
	{
		$this->input = $input;
		return $this;
	}

	/**
	 * @return Output
	 */
	public function getOutput(): ?Output
	{
		return $this->output;
	}

	/**
	 * @param Output $output
	 *
	 * @return $this
	 */
	public function setOutput(?Output $output)
	{
		$this->output = $output;
		return $this;
	}
}
