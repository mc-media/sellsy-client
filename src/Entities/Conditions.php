<?php

namespace Bluerock\Sellsy\Entities;

use Bluerock\Sellsy\Entities\Attributes;
use Bluerock\Sellsy\Entities\Entity;

/**
 * The Conditions Entity.
 *
 * @package bluerock/sellsy-client
 * @author Ulysse <umetra@mc-media.com>
 * @version 1.2.1
 * @access public
 */
class Conditions extends Entity
{
    /**
     * Interval for subscription payment installments
     */
    public ?Interval $interval;
}
