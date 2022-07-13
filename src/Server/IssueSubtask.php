<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue/{issueIdOrKey}/subtask
 */
class IssueSubtask extends AbstractJira
{
    
    /**
     * Get sub tasks
     *
     * API:
     * GET /rest/api/2/issue/{issueIdOrKey}/subtask
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue/{issueIdOrKey}/subtask-getSubTasks
     *
     * @param string $issueIdOrKey
     * @return false|mixed|null
     */
    public function getSubTasks(string $issueIdOrKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issue/$issueIdOrKey/subtask";

        return $this->request->get($apiUrl);
    }

    /**
     * Can move sub task
     *
     * API:
     * GET /rest/api/2/issue/{issueIdOrKey}/subtask/move
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue/{issueIdOrKey}/subtask-canMoveSubTask
     *
     * @param string $issueIdOrKey
     * @return false|mixed|null
     */
    public function canMoveSubTask(string $issueIdOrKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issue/$issueIdOrKey/subtask/move";

        return $this->request->get($apiUrl);
    }

    /**
     * Move sub tasks
     *
     * API:
     * POST /rest/api/2/issue/{issueIdOrKey}/subtask/move
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue/{issueIdOrKey}/subtask-moveSubTasks
     *
     * @param string $issueIdOrKey
     * @param array $data
     * @return false|mixed|null
     */
    public function moveSubTasks(string $issueIdOrKey, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issue/$issueIdOrKey/subtask/move";

        return $this->request->post($apiUrl, $data);
    }
}
