<?php

namespace Hive\Jira\ServiceDesk;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/servicedesk/{serviceDeskId}/requesttypegroup
 */
class ServiceDeskRequestTypeGroup extends AbstractJira
{
    
    /**
     * Get request type groups
     *
     * API:
     * GET /rest/servicedeskapi/servicedesk/{serviceDeskId}/requesttypegroup
     *
     * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/servicedesk/{serviceDeskId}/requesttypegroup-getRequestTypeGroups
     *
     * @param int $serviceDeskId
     * @return false|mixed|null
     */
    public function getRequestTypeGroups(int $serviceDeskId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/servicedeskapi/servicedesk/$serviceDeskId/requesttypegroup";

        return $this->request->get($apiUrl);
    }
}
