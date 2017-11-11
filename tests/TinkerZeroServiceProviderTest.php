<?php

namespace Intonate\Tests;

use Orchestra\Testbench\TestCase;
use Intonate\TinkerZero\Console\TinkerZeroCommand;
use Intonate\TinkerZero\TinkerZeroServiceProvider;

class TinkerZeroServiceProviderTest extends TestCase
{
    /**
     * @var \Intonate\TinkerZero\TinkerZeroServiceProvider
     */
    protected $provider;

    /**
     * This method is called before a test is executed.
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();

        $this->provider = new TinkerZeroServiceProvider($this->app);
    }

    /** @test */
    public function it_is_deferred()
    {
        $this->assertTrue($this->provider->isDeferred());
        $this->assertContains('command.tinker', $this->provider->provides());
    }

    /** @test */
    public function it_extends_from_tinker_service_provider()
    {
        $this->assertInstanceOf(\Laravel\Tinker\TinkerServiceProvider::class, $this->provider);
    }

    /** @test */
    public function it_registers_the_tinker_command()
    {
        $this->provider->register();

        $this->assertInstanceOf(TinkerZeroCommand::class,  $this->app['command.tinker']);
    }
}
