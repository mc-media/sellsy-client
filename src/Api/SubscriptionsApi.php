<?php

namespace Bluerock\Sellsy\Api;

use Bluerock\Sellsy\Entities\Subscription;
use Bluerock\Sellsy\Entities\PaymentInstallment;
use Bluerock\Sellsy\Collections\SubscriptionCollection;
use Bluerock\Sellsy\Collections\PaymentInstallmentCollection;
use Bluerock\Sellsy\Core\Response;

/**
 * The API client for the `subscriptions` namespace.
 *
 * @package bluerock/sellsy-client
 * @author Ulysse <umetra@mc-media.com>
 * @version 1.2.3
 * @access public
 * @see https://api.sellsy.com/doc/v2/#tag/Subscriptions
 */
class SubscriptionsApi extends AbstractApi
{
    use Concerns\CanManageContactsApi,
        Concerns\CanManageFavouriteFiltersApi;

    /**
     * @inheritdoc
     */
    public function __construct()
    {
        parent::__construct();

        $this->entity     = Subscription::class;
        $this->collection = SubscriptionCollection::class;
    }

    /**
     * Search for subscriptions using filters.
     *
     * @param array $query Query parameters.
     *
     * @return \Bluerock\Sellsy\Core\Response
     * @see https://api.sellsy.com/doc/v2/#operation/search-subscriptions
     */
    public function search(array $filters = [], array $query = []): Response
    {
        $response = $this->connection
            ->request($this->appendQuery('subscriptions/search', $query))
            ->post(compact('filters'));

        return $this->prepareResponse($response);
    }

    /**
     * Show a single subscription by id.
     *
     * @param string $id     The subscription id to retrieve.
     * @param array  $query  Query parameters.
     *
     * @return \Bluerock\Sellsy\Core\Response
     * @see https://api.sellsy.com/doc/v2/#operation/get-subscription
     */
    public function show(string $id, array $query = []): Response
    {
        $response = $this->connection
            ->request("subscriptions/{$id}")
            ->get($query);

        return $this->prepareResponse($response);
    }

    /**
     * List all subscriptions.
     *
     * @param array $query Query parameters.
     *
     * @return \Bluerock\Sellsy\Core\Response
     * @see https://api.sellsy.com/doc/v2/#operation/get-subscriptions
     */
    public function index(array $query = []): Response
    {
        $response = $this->connection
            ->request('subscriptions')
            ->get($query);

        return $this->prepareResponse($response);
    }

    /**
     * Get all payment installments of subscriptions.
     *
     * @param array $query Query parameters.
     *
     * @return \Bluerock\Sellsy\Core\Response
     * @see https://api.sellsy.com/doc/v2/#operation/get-subscriptions-payment-installments
     */
    public function paymentInstallments(array $query = []): Response
    {
        $response = $this->connection
            ->request($this->appendQuery('subscriptions/payment-installments', $query))
            ->get();

        $this->entity     = PaymentInstallment::class;
        $this->collection = PaymentInstallmentCollection::class;

        return $this->prepareResponse($response);
    }
}
