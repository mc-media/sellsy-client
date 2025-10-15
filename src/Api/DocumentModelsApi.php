<?php

namespace Bluerock\Sellsy\Api;

use Bluerock\Sellsy\Entities\Document;
use Bluerock\Sellsy\Collections\DocumentModelCollection;
use Bluerock\Sellsy\Core\Response;
use Bluerock\Sellsy\Entities\DocumentModel;

/**
 * The API for the `document model` namespace.
 *
 * @package bluerock/sellsy-client
 * @author Ethan <edelbos@mc-media.com>
 * @version 1.2.3
 * @access public
 * @see https://docs.sellsy.com/api/v2/#tag/Document-Models
 */
class DocumentModelsApi extends AbstractApi
{
    use Concerns\CanManageContactsApi,
        Concerns\CanManageFavouriteFiltersApi;

    /**
     * @inheritdoc
     */
    public function __construct()
    {
        parent::__construct();

        $this->entity =     DocumentModel::class;
        $this->collection = DocumentModelsApi::class;
    }

    /**
     * Search for document model using filters.
     *
     * @param array $query Query parameters.
     *
     * @return \Bluerock\Sellsy\Core\Response
     * @see https://docs.sellsy.com/api/v2/#operation/search-models
     */
    public function search(array $filters = [], array $query = []): Response
    {
        $response = $this->connection
            ->request($this->appendQuery('documents/models/search', $query))
            ->post(compact('filters'));

        return $this->prepareResponse($response);
    }

    /**
     * Show a single document model by id.
     *
     * @param string $id     The subscription id to retrieve.
     * @param array  $query  Query parameters.
     *
     * @return \Bluerock\Sellsy\Core\Response
     * @see https://docs.sellsy.com/api/v2/#operation/get-model
     */
    public function show(string $id, array $query = []): Response
    {
        $reponse = $this->connection
            ->request("documents/models/{$id}")
            ->get($query);
        return $this->prepareResponse($reponse);
    }

     /**
     * List all documents/models/.
     *
     * @param array $query Query parameters.
     *
     * @return \Bluerock\Sellsy\Core\Response
     * @see https://docs.sellsy.com/api/v2/#operation/get-models
     */
    public function index(array $query = []): Response
    {
        $response = $this->connection
            ->request('documents/models')
            ->get($query);
        return $this->prepareResponse($response);
    }

}