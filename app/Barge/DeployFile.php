<?php

namespace App\Barge;

use Symfony\Component\Yaml\Yaml;

class DeployFile
{
	protected $deploy_file;
	private $config_yaml;

	public function __construct($file='')
	{
		$this->deploy_file = $file;
	}

	public function services()
	{
		return collect($this->yaml_config_file()["services"]);
	}

	private function yaml_config_file()
	{
		return Yaml::parseFile($this->deploy_file);
	}
}
