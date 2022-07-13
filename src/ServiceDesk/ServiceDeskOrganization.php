<?php

namespace Hive\Jira\ServiceDesk;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/servicedesk/{serviceDeskId}/organization
 */
class ServiceDeskOrganization extends AbstractJira
{
    
    /**
     * Get organizations
     *
     * API:
     * GET /rest/servicedeskapi/servicedesk/{serviceDeskId}/organization
     *
     * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/servicedesk/{serviceDeskId}/organization-getOrganizations
     *
     * @param int $serviceDeskId
     * @return false|mixed|null
     */
    public function getOrganizations(int $serviceDeskId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/servicedeskapi/servicedesk/$serviceDeskId/organization";

        return $this->request->get($apiUrl);
    }

    /**
     * Add organization
     *
     * API:
     * POST /rest/servicedeskapi/servicedesk/{serviceDeskId}/organization
     *
     * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/servicedesk/{serviceDeskId}/organization-addOrganization
     *
     * @param int $serviceDeskId
     * @param array $data
     * @return false|mixed|null
     */
    public function addOrganization(int $serviceDeskId, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/servicedeskapi/servicedesk/$serviceDeskId/organization";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Remove organization
     *
     * API:
     * DELETE /rest/servicedeskapi/servicedesk/{serviceDeskId}/organization
     *
     * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/servicedesk/{serviceDeskId}/organization-removeOrganization
     *
     * @param int $serviceDeskId
     * @return false|mixed|null
     */
    public function removeOrganization(int $serviceDeskId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/servicedeskapi/servicedesk/$serviceDeskId/organization";

        return $this->request->delete($apiUrl);
    }
}
