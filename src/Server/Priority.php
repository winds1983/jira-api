<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/priority
 */
class Priority extends AbstractJira
{
    
    /**
     * Get priorities
     *
     * API:
     * GET /rest/api/2/priority
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/priority-getPriorities
     *
     * @return false|mixed|null
     */
    public function getPriorities()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/priority";

        return $this->request->get($apiUrl);
    }

    /**
     * Get priority
     *
     * API:
     * GET /rest/api/2/priority/{id}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/priority-getPriority
     *
     * @param int $id
     * @return false|mixed|null
     */
    public function getPriority(int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/priority/$id";

        return $this->request->get($apiUrl);
    }
}
