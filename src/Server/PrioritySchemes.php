<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/priorityschemes
 */
class PrioritySchemes extends AbstractJira
{
    
    /**
     * Create priority scheme
     *
     * API:
     * POST /rest/api/2/priorityschemes
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/priorityschemes-createPriorityScheme
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function createPriorityScheme(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/priorityschemes";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Get priority schemes
     *
     * API:
     * GET /rest/api/2/priorityschemes
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/priorityschemes-getPrioritySchemes
     *
     * @return false|mixed|null
     */
    public function getPrioritySchemes()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/priorityschemes";

        return $this->request->get($apiUrl);
    }

    /**
     * Delete priority scheme
     *
     * API:
     * DELETE /rest/api/2/priorityschemes/{schemeId}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/priorityschemes-deletePriorityScheme
     *
     * @param int $schemeId
     * @return false|mixed|null
     */
    public function deletePriorityScheme(int $schemeId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/priorityschemes/$schemeId";

        return $this->request->delete($apiUrl);
    }

    /**
     * Update priority scheme
     *
     * API:
     * PUT /rest/api/2/priorityschemes/{schemeId}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/priorityschemes-updatePriorityScheme
     *
     * @param int $schemeId
     * @param array $data
     * @return false|mixed|null
     */
    public function updatePriorityScheme(int $schemeId, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/priorityschemes/$schemeId";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Get priority scheme
     *
     * API:
     * GET /rest/api/2/priorityschemes/{schemeId}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/priorityschemes-getPriorityScheme
     *
     * @param int $schemeId
     * @return false|mixed|null
     */
    public function getPriorityScheme(int $schemeId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/priorityschemes/$schemeId";

        return $this->request->get($apiUrl);
    }
}
