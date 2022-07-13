<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2
 */
class Permission extends AbstractJira
{
    
    /**
     * Get permissions
     *
     * API:
     * GET /rest/api/2/mypermissions
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2-getPermissions
     *
     * @return false|mixed|null
     */
    public function getPermissions()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/mypermissions";

        return $this->request->get($apiUrl);
    }

    /**
     * Get all permissions
     *
     * API:
     * GET /rest/api/2/permissions
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2-getAllPermissions
     *
     * @return false|mixed|null
     */
    public function getAllPermissions()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/permissions";

        return $this->request->get($apiUrl);
    }
}
