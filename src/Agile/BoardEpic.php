<?php

namespace Hive\Jira\Agile;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/board/{boardId}/epic
 */
class BoardEpic extends AbstractJira
{
    
    /**
     * Get epics
     *
     * API:
     * GET /rest/agile/1.0/board/{boardId}/epic
     *
     * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/board/{boardId}/epic-getEpics
     *
     * @param int $boardId
     * @return false|mixed|null
     */
    public function getEpics(int $boardId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/agile/1.0/board/$boardId/epic";

        return $this->request->get($apiUrl);
    }

    /**
     * Get issues for epic
     *
     * API:
     * GET /rest/agile/1.0/board/{boardId}/epic/{epicId}/issue
     *
     * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/board/{boardId}/epic-getIssuesForEpic
     *
     * @param int $boardId
     * @param int $epicId
     * @return false|mixed|null
     */
    public function getIssuesForEpic(int $boardId, int $epicId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/agile/1.0/board/$boardId/epic/$epicId/issue";

        return $this->request->get($apiUrl);
    }

    /**
     * Get issues without epic
     *
     * API:
     * GET /rest/agile/1.0/board/{boardId}/epic/none/issue
     *
     * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/board/{boardId}/epic-getIssuesWithoutEpic
     *
     * @param int $boardId
     * @return false|mixed|null
     */
    public function getIssuesWithoutEpic(int $boardId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/agile/1.0/board/$boardId/epic/none/issue";

        return $this->request->get($apiUrl);
    }
}
