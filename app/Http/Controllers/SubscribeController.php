<?php

namespace App\Http\Controllers;

use App\Models\User;

class SubscribeController extends Controller
{
    public function __invoke()
    {
        /** @var User $user */
        $user = auth()->user();

        $user->createOrGetStripeCustomer();

        return $user
            ->newSubscription('default', 'price_1N1dPxA63Gkft75h0HZ9ID5P')
            ->checkout()
            ->redirect();


        return 'oi';
        // TODO: Implement __invoke() method.
    }
}
