<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/status
 */
class Status extends AbstractJira
{
    
    /**
     * Get statuses
     *
     * API:
     * GET /rest/api/2/status
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/status-getStatuses
     *
     * @return false|mixed|null
     */
    public function getStatuses()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/status";

        return $this->request->get($apiUrl);
    }

    /**
     * Get status
     *
     * API:
     * GET /rest/api/2/status/{idOrName}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/status-getStatus
     *
     * @param string $idOrName
     * @return false|mixed|null
     */
    public function getStatus(string $idOrName)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/status/$idOrName";

        return $this->request->get($apiUrl);
    }
}
