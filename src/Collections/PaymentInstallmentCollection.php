<?php

namespace Bluerock\Sellsy\Collections;

use Bluerock\Sellsy\Entities\PaymentInstallment;
use Bluerock\Sellsy\Contracts\EntityCollectionContract;
use Spatie\DataTransferObject\DataTransferObjectCollection;

/**
 * The Payment Installment Entity collection.
 *
 * @package bluerock/sellsy-client
 * @author Ulysse <umetra@mc-media.com>
 * @version 1.0.0
 * @access public
 *
 * @method \Bluerock\Sellsy\Entities\PaymentInstallment current
 */
class PaymentInstallmentCollection extends DataTransferObjectCollection implements EntityCollectionContract
{
    public static function create(array $data): PaymentInstallmentCollection
    {
        return new static(PaymentInstallment::arrayOf($data));
    }
}
