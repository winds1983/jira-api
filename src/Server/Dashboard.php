<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/dashboard
 */
class Dashboard extends AbstractJira
{
    
    /**
     * List
     *
     * API:
     * GET /rest/api/2/dashboard
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/dashboard-list
     *
     * @return false|mixed|null
     */
    public function list()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/dashboard";

        return $this->request->get($apiUrl);
    }

    /**
     * Get dashboard
     *
     * API:
     * GET /rest/api/2/dashboard/{id}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/dashboard-getDashboard
     *
     * @param int $id
     * @return false|mixed|null
     */
    public function getDashboard(int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/dashboard/$id";

        return $this->request->get($apiUrl);
    }
}
