<?php

namespace Bluerock\Sellsy\Entities;

use Bluerock\Sellsy\Entities\Entity;

/**
 * The Subscription Entity.
 *
 * @package bluerock/sellsy-client
 * @author Ethan <edelbos@mc-media.com>
 * @version 1.2.1
 * @access public
*/
class DocumentModel extends Entity
{
    /**
     * Id the document Model
     */
    public ?int $id;

    /**
     * Name of model
     */
    public ?string $number;

    /**
     * Subject of model
     */
    public ?string $subject;

    /**
     * Link to the pdf of document
     */
    public ?string $pdf_link;
}