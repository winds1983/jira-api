<?php

namespace Hive\Jira\ServiceDesk;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/info
 */
class Info extends AbstractJira
{
    
    /**
     * Get info
     *
     * API:
     * GET /rest/servicedeskapi/info
     *
     * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/info-getInfo
     *
     * @return false|mixed|null
     */
    public function getInfo()
    {
        $apiUrl = $this->baseApiUrl . "/rest/servicedeskapi/info";

        return $this->request->get($apiUrl);
    }
}
