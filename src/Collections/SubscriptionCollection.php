<?php

namespace Bluerock\Sellsy\Collections;

use Bluerock\Sellsy\Entities\Subscription;
use Bluerock\Sellsy\Contracts\EntityCollectionContract;
use Spatie\DataTransferObject\DataTransferObjectCollection;

/**
 * The Subscription Entity collection.
 *
 * @package bluerock/sellsy-client
 * @author Thomas <thomas@bluerocktel.com>
 * @version 1.0
 * @access public
 *
 * @method \Bluerock\Sellsy\Entities\Company current
 */
class SubscriptionCollection extends DataTransferObjectCollection implements EntityCollectionContract
{
    public static function create(array $data): SubscriptionCollection
    {
        return new static(Subscription::arrayOf($data));
    }
}
