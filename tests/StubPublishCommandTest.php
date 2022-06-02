<?php

namespace Morningtrain\Stubs\Tests;

use Illuminate\Support\Facades\File;

class StubPublishCommandTest extends TestCase
{
    /** @test */
    public function it_can_publish_stubs()
    {
        $targetStubsPath = $this->app->basePath('stubs');

        File::deleteDirectory($targetStubsPath);

        $this->artisan('morningtrain-stub:publish')->assertExitCode(0);

        $stubPath = __DIR__ . '/../stubs/migration.stub';

        $publishedStubPath = $targetStubsPath . '/migration.stub';

        $this->assertFileEquals($stubPath, $publishedStubPath);
    }
}
