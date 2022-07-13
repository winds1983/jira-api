<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/serverInfo
 */
class ServerInfo extends AbstractJira
{
    
    /**
     * Get server info
     *
     * API:
     * GET /rest/api/2/serverInfo
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/serverInfo-getServerInfo
     *
     * @return false|mixed|null
     */
    public function getServerInfo()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/serverInfo";

        return $this->request->get($apiUrl);
    }
}
