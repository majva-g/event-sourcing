<?php

namespace App\Projectors;

use Domain\Cart\Events\CartInitialized;
use Domain\Cart\Projections\Cart;
use Spatie\EventSourcing\EventHandlers\Projectors\Projector;

class CartProjector extends Projector
{
    public function onCartInitialized(CartInitialized $event)
    {
        (new Cart)->writable()->create([
            'uuid' => $event->cartUuid,
            'customer_uuid' => $event->customerUuid,
            'date' => $event->date,
        ]);
    }
}
