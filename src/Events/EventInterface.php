<?php

namespace ArieTimmerman\Laravel\SCIMServer\Events;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

interface EventInterface
{
    public function __construct(Model $model, bool $me, Request $request);
}
