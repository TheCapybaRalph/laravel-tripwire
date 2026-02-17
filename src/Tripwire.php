<?php

namespace TheCapybaRalph\LaravelTripwire;

use Illuminate\Support\Facades\File;
use TheCapybaRalph\LaravelTripwire\Events\IntegrityCheckFailed;
use TheCapybaRalph\LaravelTripwire\Events\IntegrityCheckPassed;

class Tripwire {

    public function run() {

        $publicIndex = config('tripwire.index_file_path',  public_path('index.php'));

        $checksum = hash("sha256", file_get_contents($publicIndex));

        if(! File::exists($publicIndex)) {
            event(new IntegrityCheckFailed("Index file not found at $publicIndex."));
            return false;
        }

        if($checksum != $this->getChecksum()) {
            event(new IntegrityCheckFailed("Index file checksum mismatch. Expected $checksum, got $checksum."));
            return false;
        }

        event(new IntegrityCheckPassed);

        return true;
    }

    protected function getChecksum(): string {
        if(!empty(config('tripwire.index_file_checksum'))) {
            return config('tripwire.index_file_checksum');
        }

        $appVersion = app()->version();
        return Checksums::tryFrom(explode('.', $appVersion)[0])?->value;
    }
}
