<?php

namespace Hive\Jira\ServiceDesk;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/organization
 */
class Organization extends AbstractJira
{
    
    /**
     * Get organizations
     *
     * API:
     * GET /rest/servicedeskapi/organization
     *
     * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/organization-getOrganizations
     *
     * @return false|mixed|null
     */
    public function getOrganizations()
    {
        $apiUrl = $this->baseApiUrl . "/rest/servicedeskapi/organization";

        return $this->request->get($apiUrl);
    }

    /**
     * Create organization
     *
     * API:
     * POST /rest/servicedeskapi/organization
     *
     * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/organization-createOrganization
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function createOrganization(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/servicedeskapi/organization";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Get organization
     *
     * API:
     * GET /rest/servicedeskapi/organization/{organizationId}
     *
     * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/organization-getOrganization
     *
     * @param int $organizationId
     * @return false|mixed|null
     */
    public function getOrganization(int $organizationId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/servicedeskapi/organization/$organizationId";

        return $this->request->get($apiUrl);
    }

    /**
     * Delete organization
     *
     * API:
     * DELETE /rest/servicedeskapi/organization/{organizationId}
     *
     * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/organization-deleteOrganization
     *
     * @param int $organizationId
     * @return false|mixed|null
     */
    public function deleteOrganization(int $organizationId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/servicedeskapi/organization/$organizationId";

        return $this->request->delete($apiUrl);
    }

    /**
     * Get users in organization
     *
     * API:
     * GET /rest/servicedeskapi/organization/{organizationId}/user
     *
     * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/organization-getUsersInOrganization
     *
     * @param int $organizationId
     * @return false|mixed|null
     */
    public function getUsersInOrganization(int $organizationId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/servicedeskapi/organization/$organizationId/user";

        return $this->request->get($apiUrl);
    }

    /**
     * Add users to organization
     *
     * API:
     * POST /rest/servicedeskapi/organization/{organizationId}/user
     *
     * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/organization-addUsersToOrganization
     *
     * @param int $organizationId
     * @param array $data
     * @return false|mixed|null
     */
    public function addUsersToOrganization(int $organizationId, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/servicedeskapi/organization/$organizationId/user";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Remove users from organization
     *
     * API:
     * DELETE /rest/servicedeskapi/organization/{organizationId}/user
     *
     * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/organization-removeUsersFromOrganization
     *
     * @param int $organizationId
     * @return false|mixed|null
     */
    public function removeUsersFromOrganization(int $organizationId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/servicedeskapi/organization/$organizationId/user";

        return $this->request->delete($apiUrl);
    }
}
