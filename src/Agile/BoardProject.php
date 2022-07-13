<?php

namespace Hive\Jira\Agile;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/board/{boardId}/project
 */
class BoardProject extends AbstractJira
{
    
    /**
     * Get projects
     *
     * API:
     * GET /rest/agile/1.0/board/{boardId}/project
     *
     * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/board/{boardId}/project-getProjects
     *
     * @param int $boardId
     * @return false|mixed|null
     */
    public function getProjects(int $boardId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/agile/1.0/board/$boardId/project";

        return $this->request->get($apiUrl);
    }
}
