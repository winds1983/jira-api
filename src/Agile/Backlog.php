<?php

namespace Hive\Jira\Agile;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/backlog
 */
class Backlog extends AbstractJira
{
    
    /**
     * Move issues to backlog
     *
     * API:
     * POST /rest/agile/1.0/backlog/issue
     *
     * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/backlog-moveIssuesToBacklog
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function moveIssuesToBacklog(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/agile/1.0/backlog/issue";

        return $this->request->post($apiUrl, $data);
    }
}
