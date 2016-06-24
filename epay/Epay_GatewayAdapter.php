<?php
namespace Commerce\Gateways\Omnipay;

use Commerce\Gateways\OffsiteGatewayAdapter;

class Epay_GatewayAdapter extends OffsiteGatewayAdapter
{
    public function handle()
    {
        return "Epay";
    }
}