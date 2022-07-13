<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/project/{projectKeyOrId}/securitylevel
 */
class ProjectSecurityLevel extends AbstractJira
{
    
    /**
     * Get security levels for project
     *
     * API:
     * GET /rest/api/2/project/{projectKeyOrId}/securitylevel
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/project/{projectKeyOrId}/securitylevel-getSecurityLevelsForProject
     *
     * @param string $projectKeyOrId
     * @return false|mixed|null
     */
    public function getSecurityLevelsForProject(string $projectKeyOrId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/project/$projectKeyOrId/securitylevel";

        return $this->request->get($apiUrl);
    }
}
