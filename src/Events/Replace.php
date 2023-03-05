<?php

namespace ArieTimmerman\Laravel\SCIMServer\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Replace extends AbstractEvent
{
    use SerializesModels;

    public $odlObjectArray;

    public $request;

    /**
     * Create a new event instance.
     *
     * @param  \App\Order $order
     * @return void
     */
    public function __construct(Model $model, bool $me, Request $request, $odlObjectArray = [])
    {
        $this->model = $model;
        $this->me = $me;
        $this->request = $request;
        $this->odlObjectArray = $odlObjectArray;
    }
}
