<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/project/{projectKeyOrId}/permissionscheme
 */
class ProjectPermissionScheme extends AbstractJira
{
    
    /**
     * Assign permission scheme
     *
     * API:
     * PUT /rest/api/2/project/{projectKeyOrId}/permissionscheme
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/project/{projectKeyOrId}/permissionscheme-assignPermissionScheme
     *
     * @param string $projectKeyOrId
     * @param array $data
     * @return false|mixed|null
     */
    public function assignPermissionScheme(string $projectKeyOrId, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/project/$projectKeyOrId/permissionscheme";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Get assigned permission scheme
     *
     * API:
     * GET /rest/api/2/project/{projectKeyOrId}/permissionscheme
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/project/{projectKeyOrId}/permissionscheme-getAssignedPermissionScheme
     *
     * @param string $projectKeyOrId
     * @return false|mixed|null
     */
    public function getAssignedPermissionScheme(string $projectKeyOrId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/project/$projectKeyOrId/permissionscheme";

        return $this->request->get($apiUrl);
    }
}
