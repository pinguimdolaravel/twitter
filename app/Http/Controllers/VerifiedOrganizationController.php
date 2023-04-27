<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class VerifiedOrganizationController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        /** @var User $user */
        $user = auth()->user();

        $user->createOrGetStripeCustomer();

        if ($user->subscribed('verified-org')) {
            return $user->redirectToBillingPortal();
        }

        return $user
            ->newSubscription('verified-org', 'price_1N1eJsA63Gkft75h2yPKLWQ8')
            ->checkout()
            ->redirect();
    }
}
