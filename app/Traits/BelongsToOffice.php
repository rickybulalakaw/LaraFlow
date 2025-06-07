<?php

namespace App\Traits;

use App\Models\core\Office;

trait BelongsToOffice {

    public function office ()
    {
        return $this->belongsTo(Office::class);
    }
}
