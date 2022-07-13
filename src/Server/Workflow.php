<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/workflow
 */
class Workflow extends AbstractJira
{
    
    /**
     * Get all workflows
     *
     * API:
     * GET /rest/api/2/workflow
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/workflow-getAllWorkflows
     *
     * @return false|mixed|null
     */
    public function getAllWorkflows()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/workflow";

        return $this->request->get($apiUrl);
    }

    /**
     * Delete property
     *
     * API:
     * DELETE /rest/api/2/workflow/{id}/properties
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/workflow-deleteProperty
     *
     * @param int $id
     * @return false|mixed|null
     */
    public function deleteProperty(int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/workflow/$id/properties";

        return $this->request->delete($apiUrl);
    }

    /**
     * Create property
     *
     * API:
     * POST /rest/api/2/workflow/{id}/properties
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/workflow-createProperty
     *
     * @param int $id
     * @param array $data
     * @return false|mixed|null
     */
    public function createProperty(int $id, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/workflow/$id/properties";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Update property
     *
     * API:
     * PUT /rest/api/2/workflow/{id}/properties
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/workflow-updateProperty
     *
     * @param int $id
     * @param array $data
     * @return false|mixed|null
     */
    public function updateProperty(int $id, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/workflow/$id/properties";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Get properties
     *
     * API:
     * GET /rest/api/2/workflow/{id}/properties
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/workflow-getProperties
     *
     * @param int $id
     * @return false|mixed|null
     */
    public function getProperties(int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/workflow/$id/properties";

        return $this->request->get($apiUrl);
    }
}
