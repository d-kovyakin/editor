<?php

namespace Kovyakin\Editor\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Headers extends Model {
    public function num() {
        return $this->belongsTo(Num::class);
    }
}
