<?php

namespace Hive\Jira\ServiceDesk;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/servicedesk
 */
class ServiceDesk extends AbstractJira
{
    
    /**
     * Get service desks
     *
     * API:
     * GET /rest/servicedeskapi/servicedesk
     *
     * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/servicedesk-getServiceDesks
     *
     * @return false|mixed|null
     */
    public function getServiceDesks()
    {
        $apiUrl = $this->baseApiUrl . "/rest/servicedeskapi/servicedesk";

        return $this->request->get($apiUrl);
    }

    /**
     * Get service desk by id
     *
     * API:
     * GET /rest/servicedeskapi/servicedesk/{serviceDeskId}
     *
     * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/servicedesk-getServiceDeskById
     *
     * @param int $serviceDeskId
     * @return false|mixed|null
     */
    public function getServiceDeskById(int $serviceDeskId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/servicedeskapi/servicedesk/$serviceDeskId";

        return $this->request->get($apiUrl);
    }
}
