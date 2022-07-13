<?php

namespace Hive\Jira\Agile;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/board
 */
class Board extends AbstractJira
{
    
    /**
     * Get all boards
     *
     * API:
     * GET /rest/agile/1.0/board
     *
     * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/board-getAllBoards
     *
     * @return false|mixed|null
     */
    public function getAllBoards()
    {
        $apiUrl = $this->baseApiUrl . "/rest/agile/1.0/board";

        return $this->request->get($apiUrl);
    }

    /**
     * Create board
     *
     * API:
     * POST /rest/agile/1.0/board
     *
     * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/board-createBoard
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function createBoard(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/agile/1.0/board";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Get board
     *
     * API:
     * GET /rest/agile/1.0/board/{boardId}
     *
     * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/board-getBoard
     *
     * @param int $boardId
     * @return false|mixed|null
     */
    public function getBoard(int $boardId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/agile/1.0/board/$boardId";

        return $this->request->get($apiUrl);
    }

    /**
     * Delete board
     *
     * API:
     * DELETE /rest/agile/1.0/board/{boardId}
     *
     * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/board-deleteBoard
     *
     * @param int $boardId
     * @return false|mixed|null
     */
    public function deleteBoard(int $boardId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/agile/1.0/board/$boardId";

        return $this->request->delete($apiUrl);
    }

    /**
     * Get issues for backlog
     *
     * API:
     * GET /rest/agile/1.0/board/{boardId}/backlog
     *
     * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/board-getIssuesForBacklog
     *
     * @param int $boardId
     * @return false|mixed|null
     */
    public function getIssuesForBacklog(int $boardId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/agile/1.0/board/$boardId/backlog";

        return $this->request->get($apiUrl);
    }

    /**
     * Get configuration
     *
     * API:
     * GET /rest/agile/1.0/board/{boardId}/configuration
     *
     * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/board-getConfiguration
     *
     * @param int $boardId
     * @return false|mixed|null
     */
    public function getConfiguration(int $boardId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/agile/1.0/board/$boardId/configuration";

        return $this->request->get($apiUrl);
    }

    /**
     * Get issues for board
     *
     * API:
     * GET /rest/agile/1.0/board/{boardId}/issue
     *
     * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/board-getIssuesForBoard
     *
     * @param int $boardId
     * @return false|mixed|null
     */
    public function getIssuesForBoard(int $boardId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/agile/1.0/board/$boardId/issue";

        return $this->request->get($apiUrl);
    }
}
