<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/reindex/request
 */
class ReindexRequest extends AbstractJira
{
    
    /**
     * Process requests
     *
     * API:
     * POST /rest/api/2/reindex/request
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/reindex/request-processRequests
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function processRequests(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/reindex/request";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Get progress
     *
     * API:
     * GET /rest/api/2/reindex/request/{requestId}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/reindex/request-getProgress
     *
     * @param int $requestId
     * @return false|mixed|null
     */
    public function getProgress(int $requestId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/reindex/request/$requestId";

        return $this->request->get($apiUrl);
    }

    /**
     * Get progress bulk
     *
     * API:
     * GET /rest/api/2/reindex/request/bulk
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/reindex/request-getProgressBulk
     *
     * @return false|mixed|null
     */
    public function getProgressBulk()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/reindex/request/bulk";

        return $this->request->get($apiUrl);
    }
}
