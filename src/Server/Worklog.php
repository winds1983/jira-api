<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/worklog
 */
class Worklog extends AbstractJira
{
    
    /**
     * Get ids of worklogs deleted since
     *
     * API:
     * GET /rest/api/2/worklog/deleted
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/worklog-getIdsOfWorklogsDeletedSince
     *
     * @return false|mixed|null
     */
    public function getIdsOfWorklogsDeletedSince()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/worklog/deleted";

        return $this->request->get($apiUrl);
    }

    /**
     * Get worklogs for ids
     *
     * API:
     * POST /rest/api/2/worklog/list
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/worklog-getWorklogsForIds
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function getWorklogsForIds(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/worklog/list";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Get ids of worklogs modified since
     *
     * API:
     * GET /rest/api/2/worklog/updated
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/worklog-getIdsOfWorklogsModifiedSince
     *
     * @return false|mixed|null
     */
    public function getIdsOfWorklogsModifiedSince()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/worklog/updated";

        return $this->request->get($apiUrl);
    }
}
