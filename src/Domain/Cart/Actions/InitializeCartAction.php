<?php

namespace Domain\Cart\Actions;

use Support\Uuid;
use Domain\Cart\Events\CartInitialized;
use Domain\Customer\Customer;
use Spatie\EventSourcing\EventHandlers\EventHandler;

final readonly class InitializeCartAction
{
    public function execute(Customer $customer)
    {
        $cartUuid = Uuid::new();

        $event = new CartInitialized(
            cartUuid: $cartUuid,
            customerUuid: (string) $customer->id,
            date: now()
        );
    
    }
}
