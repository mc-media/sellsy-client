<?php

namespace Bluerock\Sellsy\Collections;
use Bluerock\Sellsy\Entities\DocumentModel;
use Bluerock\Sellsy\Contracts\EntityCollectionContract;
use Spatie\DataTransferObject\DataTransferObjectCollection;

/**
 * The Document Model Entity collection.
 *
 * @package bluerock/sellsy-client
 * @author Ethan <edelbos@mc-media.com>
 * @version 1.0
 * @access public
 *
 * @method \Bluerock\Sellsy\Entities\DocumentModel current
 */
class DocumentModelCollection extends DataTransferObjectCollection implements EntityCollectionContract
{
    public static function create(array $data): DocumentModelCollection
    {
        return new static(DocumentModel::arrayOf($data));
    }
}