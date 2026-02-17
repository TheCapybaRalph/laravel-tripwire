<?php

namespace TheCapybaRalph\LaravelTripwire\Commands;

use Illuminate\Console\Command;
use TheCapybaRalph\LaravelTripwire\Checksums;
use TheCapybaRalph\LaravelTripwire\Events\IntegrityCheckPassed;
use TheCapybaRalph\LaravelTripwire\Facades\Tripwire;

class TripwireCommand extends Command
{
    public $signature = 'tripwire:check';

    public $description = 'Checks your index files if it was modified or tampered with.';

    public function handle(): int
    {
        $check = Tripwire::run();
        if($check) {
            $this->info('Integrity check passed');
            return Command::SUCCESS;
        }

        $this->error('Integrity check failed');
        return Command::FAILURE;
    }
}
