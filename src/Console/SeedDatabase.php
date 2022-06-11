<?php 
namespace Level7up\CMS\Console;

use Illuminate\Database\Seeder;
use Symfony\Component\Console\Command\Command;
use Illuminate\Database\Console\Seeds\SeedCommand;

class SeedDatabase extends SeedCommand
{
    protected $name = 'cms:seed';

    protected $description = 'Seed cms data';

    public function handle()
    {
        $this->input->setOption("class", Seeder::class);

        if (! $this->confirmToProceed()) {
            return;
        }

        // Seed
        parent::handle();

        return Command::SUCCESS;
    }
}
