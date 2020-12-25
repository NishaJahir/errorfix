<?php
/**
 * This module is used for real time processing of
 * Novalnet payment module of customers.
 * This free contribution made by request.
 * 
 * If you have found this script useful a small
 * recommendation as well as a comment on merchant form
 * would be greatly appreciated.
 *
 * @author       Novalnet AG
 * @copyright(C) Novalnet
 * All rights reserved. https://www.novalnet.de/payment-plugins/kostenlos/lizenz
 */

namespace Novalnet\Providers;

use \Plenty\Modules\Authorization\Services\AuthHelper;
use Novalnet\Services\PaymentService;

/**
 * Class NovalnetOrderConfirmationDataProvider
 * @package Novalnet\Providers
 */
class NovalnetOrderConfirmationDataProvider
{
    /**
     * Setup the Novalnet transaction comments for the requested order
     *
     * @param Arguments $arg
     */
    public function call($arg)
    {
        $paymentService = pluginApp(PaymentService::class);
        $order = $arg[0];
        if (!empty ($order['id'])) {
            $paymentService->formTransactionComments($order['id']);
        }
    }
}

    
