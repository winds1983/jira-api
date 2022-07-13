<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/reindex
 */
class Reindex extends AbstractJira
{
    
    /**
     * Reindex
     *
     * API:
     * POST /rest/api/2/reindex
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/reindex-reindex
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function reindex(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/reindex";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Get reindex info
     *
     * API:
     * GET /rest/api/2/reindex
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/reindex-getReindexInfo
     *
     * @return false|mixed|null
     */
    public function getReindexInfo()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/reindex";

        return $this->request->get($apiUrl);
    }

    /**
     * Reindex issues
     *
     * API:
     * POST /rest/api/2/reindex/issue
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/reindex-reindexIssues
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function reindexIssues(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/reindex/issue";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Get reindex progress
     *
     * API:
     * GET /rest/api/2/reindex/progress
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/reindex-getReindexProgress
     *
     * @return false|mixed|null
     */
    public function getReindexProgress()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/reindex/progress";

        return $this->request->get($apiUrl);
    }
}
