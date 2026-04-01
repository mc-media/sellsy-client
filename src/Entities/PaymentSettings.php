<?php

namespace Bluerock\Sellsy\Entities;

use Bluerock\Sellsy\Entities\Attributes;
use Bluerock\Sellsy\Entities\Entity;

/**
 * The PaymentSettings Entity.
 *
 * @package bluerock/sellsy-client
 * @author Ulysse <umetra@mc-media.com>
 * @version 1.2.1
 * @access public
 */
class PaymentSettings extends Entity
{
    /**
     * Activate direct debit
     */
    public ?bool $direct_debit;

    /**
     * Required if the direct debit module on document model is GoCardless
     */
    public ?int $mandate;

    /**
     * Payment installments invoice
     * Can be 'invoice_due_date', 'invoice_generation_date'
     */
    public ?string $payment_installment_invoice;
}
