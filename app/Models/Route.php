<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Route
{
    public string $text;
    public string $name;

    public function __construct(string $name, string $text) {
        $this->name = $name;
        $this->text = $text;
    }
}
