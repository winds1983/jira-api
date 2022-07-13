<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/group
 */
class Group extends AbstractJira
{
    
    /**
     * Create group
     *
     * API:
     * POST /rest/api/2/group
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/group-createGroup
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function createGroup(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/group";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Get group
     *
     * API:
     * GET /rest/api/2/group
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/group-getGroup
     *
     * @return false|mixed|null
     */
    public function getGroup()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/group";

        return $this->request->get($apiUrl);
    }

    /**
     * Remove group
     *
     * API:
     * DELETE /rest/api/2/group
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/group-removeGroup
     *
     * @return false|mixed|null
     */
    public function removeGroup()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/group";

        return $this->request->delete($apiUrl);
    }

    /**
     * Get users from group
     *
     * API:
     * GET /rest/api/2/group/member
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/group-getUsersFromGroup
     *
     * @return false|mixed|null
     */
    public function getUsersFromGroup()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/group/member";

        return $this->request->get($apiUrl);
    }

    /**
     * Add user to group
     *
     * API:
     * POST /rest/api/2/group/user
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/group-addUserToGroup
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function addUserToGroup(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/group/user";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Remove user from group
     *
     * API:
     * DELETE /rest/api/2/group/user
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/group-removeUserFromGroup
     *
     * @return false|mixed|null
     */
    public function removeUserFromGroup()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/group/user";

        return $this->request->delete($apiUrl);
    }
}
