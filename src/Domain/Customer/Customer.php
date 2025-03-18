<?php

namespace Domain\Customer;

use Domain\User\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Customer extends Model
{
    protected $guarded = [];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // public function activeCart(): HasOne
    // {
    //     return $this
    //         ->hasOne(Cart::class)
    //         ->where('status', CartStatus::pending());
    // }

    // public function carts(): HasMany
    // {
    //     return $this->hasMany(Cart::class);
    // }

    // public function orders(): HasMany
    // {
    //     return $this->hasMany(Order::class);
    // }
}
