<?php

namespace Kovyakin\Editor\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Num extends Model {
    protected $table = 'number';

    public function headers() {
        return $this->hasMany(Headers::class);
    }
}
