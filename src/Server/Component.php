<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/component
 */
class Component extends AbstractJira
{
    
    /**
     * Create component
     *
     * API:
     * POST /rest/api/2/component
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/component-createComponent
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function createComponent(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/component";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Get component
     *
     * API:
     * GET /rest/api/2/component/{id}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/component-getComponent
     *
     * @param int $id
     * @return false|mixed|null
     */
    public function getComponent(int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/component/$id";

        return $this->request->get($apiUrl);
    }

    /**
     * Update component
     *
     * API:
     * PUT /rest/api/2/component/{id}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/component-updateComponent
     *
     * @param int $id
     * @param array $data
     * @return false|mixed|null
     */
    public function updateComponent(int $id, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/component/$id";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Delete
     *
     * API:
     * DELETE /rest/api/2/component/{id}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/component-delete
     *
     * @param int $id
     * @return false|mixed|null
     */
    public function delete(int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/component/$id";

        return $this->request->delete($apiUrl);
    }

    /**
     * Get component related issues
     *
     * API:
     * GET /rest/api/2/component/{id}/relatedIssueCounts
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/component-getComponentRelatedIssues
     *
     * @param int $id
     * @return false|mixed|null
     */
    public function getComponentRelatedIssues(int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/component/$id/relatedIssueCounts";

        return $this->request->get($apiUrl);
    }
}
