<?php

namespace Bluerock\Sellsy\Entities;

use Bluerock\Sellsy\Entities\Attributes;
use Bluerock\Sellsy\Entities\Entity;

/**
 * The Amounts Entity.
 *
 * @package bluerock/sellsy-client
 * @author Ulysse <umetra@mc-media.com>
 * @version 1.2.1
 * @access public
 */
class Amounts extends Entity
{
    public ?string $total_excl_tax;
    public ?string $total_incl_tax;
}
