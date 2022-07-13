<?php

namespace Hive\Jira\Agile;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/sprint
 */
class Sprint extends AbstractJira
{
    
    /**
     * Create sprint
     *
     * API:
     * POST /rest/agile/1.0/sprint
     *
     * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/sprint-createSprint
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function createSprint(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/agile/1.0/sprint";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Get sprint
     *
     * API:
     * GET /rest/agile/1.0/sprint/{sprintId}
     *
     * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/sprint-getSprint
     *
     * @param int $sprintId
     * @return false|mixed|null
     */
    public function getSprint(int $sprintId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/agile/1.0/sprint/$sprintId";

        return $this->request->get($apiUrl);
    }

    /**
     * Update sprint
     *
     * API:
     * PUT /rest/agile/1.0/sprint/{sprintId}
     *
     * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/sprint-updateSprint
     *
     * @param int $sprintId
     * @param array $data
     * @return false|mixed|null
     */
    public function updateSprint(int $sprintId, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/agile/1.0/sprint/$sprintId";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Partially update sprint
     *
     * API:
     * POST /rest/agile/1.0/sprint/{sprintId}
     *
     * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/sprint-partiallyUpdateSprint
     *
     * @param int $sprintId
     * @param array $data
     * @return false|mixed|null
     */
    public function partiallyUpdateSprint(int $sprintId, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/agile/1.0/sprint/$sprintId";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Delete sprint
     *
     * API:
     * DELETE /rest/agile/1.0/sprint/{sprintId}
     *
     * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/sprint-deleteSprint
     *
     * @param int $sprintId
     * @return false|mixed|null
     */
    public function deleteSprint(int $sprintId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/agile/1.0/sprint/$sprintId";

        return $this->request->delete($apiUrl);
    }

    /**
     * Move issues to sprint
     *
     * API:
     * POST /rest/agile/1.0/sprint/{sprintId}/issue
     *
     * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/sprint-moveIssuesToSprint
     *
     * @param int $sprintId
     * @param array $data
     * @return false|mixed|null
     */
    public function moveIssuesToSprint(int $sprintId, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/agile/1.0/sprint/$sprintId/issue";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Get issues for sprint
     *
     * API:
     * GET /rest/agile/1.0/sprint/{sprintId}/issue
     *
     * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/sprint-getIssuesForSprint
     *
     * @param int $sprintId
     * @return false|mixed|null
     */
    public function getIssuesForSprint(int $sprintId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/agile/1.0/sprint/$sprintId/issue";

        return $this->request->get($apiUrl);
    }

    /**
     * Swap sprint
     *
     * API:
     * POST /rest/agile/1.0/sprint/{sprintId}/swap
     *
     * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/sprint-swapSprint
     *
     * @param int $sprintId
     * @param array $data
     * @return false|mixed|null
     */
    public function swapSprint(int $sprintId, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/agile/1.0/sprint/$sprintId/swap";

        return $this->request->post($apiUrl, $data);
    }
}
