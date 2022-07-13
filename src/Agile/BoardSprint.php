<?php

namespace Hive\Jira\Agile;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/board/{boardId}/sprint
 */
class BoardSprint extends AbstractJira
{
    
    /**
     * Get all sprints
     *
     * API:
     * GET /rest/agile/1.0/board/{boardId}/sprint
     *
     * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/board/{boardId}/sprint-getAllSprints
     *
     * @param int $boardId
     * @return false|mixed|null
     */
    public function getAllSprints(int $boardId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/agile/1.0/board/$boardId/sprint";

        return $this->request->get($apiUrl);
    }

    /**
     * Get issues for sprint
     *
     * API:
     * GET /rest/agile/1.0/board/{boardId}/sprint/{sprintId}/issue
     *
     * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/board/{boardId}/sprint-getIssuesForSprint
     *
     * @param int $boardId
     * @param int $sprintId
     * @return false|mixed|null
     */
    public function getIssuesForSprint(int $boardId, int $sprintId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/agile/1.0/board/$boardId/sprint/$sprintId/issue";

        return $this->request->get($apiUrl);
    }
}
