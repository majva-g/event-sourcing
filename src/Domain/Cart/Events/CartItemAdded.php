<?php

namespace Domain\Cart\Events;

use Spatie\EventSourcing\StoredEvents\ShouldBeStored;

class CartItemAdded extends ShouldBeStored
{
    public function __construct(
        public string $cartUuid,
        public string $cartItemUuid,
        public string $productUuid,
        public int $quantity,
        public int $currentPrice
    ) { }
}
