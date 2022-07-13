<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/securitylevel
 */
class SecurityLevel extends AbstractJira
{
    
    /**
     * Get issuesecuritylevel
     *
     * API:
     * GET /rest/api/2/securitylevel/{id}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/securitylevel-getIssuesecuritylevel
     *
     * @param int $id
     * @return false|mixed|null
     */
    public function getIssuesecuritylevel(int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/securitylevel/$id";

        return $this->request->get($apiUrl);
    }
}
