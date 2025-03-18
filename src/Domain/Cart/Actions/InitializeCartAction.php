<?php

namespace Domain\Cart\Actions;

use App\Support\Uuid;
use Domain\Cart\Events\CartInitialized;


final readonly class InitializeCartAction
{
    public function execute()
    {
        $cartUuid = Uuid::new();

        $event = new CartInitialized(
            cartUuid: $cartUuid,
           // customerUuid: auth()->id(),
            date: now()
        );
      
    }
}
