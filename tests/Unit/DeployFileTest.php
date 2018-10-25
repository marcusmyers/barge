<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Barge\DeployFile;

class DeployFileTest extends TestCase
{
	protected $deploy_file;

	protected function setUp(): void
	{
		parent::setUp();
		$this->deploy_file = new DeployFile(__dir__."/../Fixtures/docker-compose.yml");
	}

  public function test_can_read_docker_compose_file_and_get_services(): void
  {
  	$this->assertEquals(2, $this->deploy_file->services()->count());
  }

  public function test_can_read_service_names(): void
  {
  	$this->assertEquals('app', $this->deploy_file->services()->keys()->first());
  }
}
