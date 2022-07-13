<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/project/{projectKeyOrId}/priorityscheme
 */
class ProjectPriorityScheme extends AbstractJira
{
    
    /**
     * Assign priority scheme
     *
     * API:
     * PUT /rest/api/2/project/{projectKeyOrId}/priorityscheme
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/project/{projectKeyOrId}/priorityscheme-assignPriorityScheme
     *
     * @param string $projectKeyOrId
     * @param array $data
     * @return false|mixed|null
     */
    public function assignPriorityScheme(string $projectKeyOrId, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/project/$projectKeyOrId/priorityscheme";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Get assigned priority scheme
     *
     * API:
     * GET /rest/api/2/project/{projectKeyOrId}/priorityscheme
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/project/{projectKeyOrId}/priorityscheme-getAssignedPriorityScheme
     *
     * @param string $projectKeyOrId
     * @return false|mixed|null
     */
    public function getAssignedPriorityScheme(string $projectKeyOrId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/project/$projectKeyOrId/priorityscheme";

        return $this->request->get($apiUrl);
    }

    /**
     * Unassign priority scheme
     *
     * API:
     * DELETE /rest/api/2/project/{projectKeyOrId}/priorityscheme/{schemeId}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/project/{projectKeyOrId}/priorityscheme-unassignPriorityScheme
     *
     * @param string $projectKeyOrId
     * @param int $schemeId
     * @return false|mixed|null
     */
    public function unassignPriorityScheme(string $projectKeyOrId, int $schemeId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/project/$projectKeyOrId/priorityscheme/$schemeId";

        return $this->request->delete($apiUrl);
    }
}
