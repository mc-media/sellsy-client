<?php

namespace Bluerock\Sellsy\Entities;

use Bluerock\Sellsy\Entities\Entity;

/**
 * The Payment Installment Entity.
 *
 * @package bluerock/sellsy-client
 * @author Ulysse <umetra@mc-media.com>
 * @version 1.0.0
 * @access public
 */
class PaymentInstallment extends Entity
{
    /**
     * Id of payment installment
     */
    public ?int $id;

    /**
     * Status of payment installment
     * Can be 'generated', 'scheduled', 'in_progress', 'failed'
     */
    public ?string $status;

    /**
     * Id of the parent subscription
     */
    public ?int $subscription_id;

    /**
     * Date of invoice generation
     */
    public ?string $date;

    /**
     * Email sending configuration
     */
    public ?Sending $sending;

    /**
     * Document to use as a template for subscription payment installment
     */
    public ?array $model;

    /**
     * Objects linked to the subscription
     */
    public ?array $related;

    /**
     * Generated document, even if it's deleted (nullable)
     */
    public ?array $document;
}
