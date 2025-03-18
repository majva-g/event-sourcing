<?php

namespace Domain\Cart\Events;

use Carbon\Carbon;
use Spatie\EventSourcing\StoredEvents\ShouldBeStored;

class CartInitialized extends ShouldBeStored
{
    public function __construct(
        public string $cartUuid,
        public string $customerUuid,
        public Carbon $date
    ) { }
}
