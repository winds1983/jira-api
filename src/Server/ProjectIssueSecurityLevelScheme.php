<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/project/{projectKeyOrId}/issuesecuritylevelscheme
 */
class ProjectIssueSecurityLevelScheme extends AbstractJira
{
    
    /**
     * Get issue security scheme
     *
     * API:
     * GET /rest/api/2/project/{projectKeyOrId}/issuesecuritylevelscheme
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/project/{projectKeyOrId}/issuesecuritylevelscheme-getIssueSecurityScheme
     *
     * @param string $projectKeyOrId
     * @return false|mixed|null
     */
    public function getIssueSecurityScheme(string $projectKeyOrId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/project/$projectKeyOrId/issuesecuritylevelscheme";

        return $this->request->get($apiUrl);
    }
}
