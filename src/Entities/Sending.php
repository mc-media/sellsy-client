<?php

namespace Bluerock\Sellsy\Entities;

use Bluerock\Sellsy\Entities\Entity;

/**
 * The Sending Entity.
 *
 * @package bluerock/sellsy-client
 * @author Ulysse <umetra@mc-media.com>
 * @version 1.2.1
 * @access public
 */
class Sending extends Entity
{
    public string $mode;

    public ?array $recipients;

    public ?int $email_template;
}
