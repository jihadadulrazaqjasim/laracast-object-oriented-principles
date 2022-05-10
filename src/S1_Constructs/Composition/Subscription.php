<?php

namespace ObjectOrientedPrinciples\S1_Constructs\Composition;

class Subscription
{
    protected Gateway $gateway;

    public function __construct(Gateway $gateway)
    {
        $this->gateway = $gateway;
    }

    public function create()
    {
        echo "I am creating";
    }

    public function cancel()
    {
        $this->gateway->findCustomer();
    }

    public function invoice()
    {
        echo "Invoicing..";
    }
}

interface Gateway
{
    public function findCustomer();
    public function findSubscriptionByCustomer();
}

class StripeGateway implements Gateway
{
    public function findCustomer()
    {
        echo "StribeGateway find customer";
    }

    public function findSubscriptionByCustomer()
    {
        echo "StribeGateway find subscription by customer";
    }
}


class BrainTreeGateway implements Gateway
{
    public function findCustomer()
    {
        echo "BrainTree find customer";
    }

    public function findSubscriptionByCustomer()
    {
        echo "BrainTree find subscription by customer";
    }
}
