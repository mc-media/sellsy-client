<?php

namespace Bluerock\Sellsy\Entities;

use Bluerock\Sellsy\Entities\Attributes;
use Bluerock\Sellsy\Entities\Entity;

/**
 * The ServiceDates Entity.
 *
 * @package bluerock/sellsy-client
 * @author Ulysse <umetra@mc-media.com>
 * @version 1.2.1
 * @access public
 */
class ServiceDates extends Entity
{
    /**
     * Start date for service
     */
    public ?string $start;

    /**
     * End date for service
     * End date must be greater than start date
     */
    public ?string $end;
}
