<?php

namespace Hive\Jira\Agile;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/epic
 */
class Epic extends AbstractJira
{
    
    /**
     * Get epic
     *
     * API:
     * GET /rest/agile/1.0/epic/{epicIdOrKey}
     *
     * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/epic-getEpic
     *
     * @param string $epicIdOrKey
     * @return false|mixed|null
     */
    public function getEpic(string $epicIdOrKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/agile/1.0/epic/$epicIdOrKey";

        return $this->request->get($apiUrl);
    }

    /**
     * Partially update epic
     *
     * API:
     * POST /rest/agile/1.0/epic/{epicIdOrKey}
     *
     * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/epic-partiallyUpdateEpic
     *
     * @param string $epicIdOrKey
     * @param array $data
     * @return false|mixed|null
     */
    public function partiallyUpdateEpic(string $epicIdOrKey, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/agile/1.0/epic/$epicIdOrKey";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Get issues for epic
     *
     * API:
     * GET /rest/agile/1.0/epic/{epicIdOrKey}/issue
     *
     * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/epic-getIssuesForEpic
     *
     * @param string $epicIdOrKey
     * @return false|mixed|null
     */
    public function getIssuesForEpic(string $epicIdOrKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/agile/1.0/epic/$epicIdOrKey/issue";

        return $this->request->get($apiUrl);
    }

    /**
     * Move issues to epic
     *
     * API:
     * POST /rest/agile/1.0/epic/{epicIdOrKey}/issue
     *
     * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/epic-moveIssuesToEpic
     *
     * @param string $epicIdOrKey
     * @param array $data
     * @return false|mixed|null
     */
    public function moveIssuesToEpic(string $epicIdOrKey, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/agile/1.0/epic/$epicIdOrKey/issue";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Rank epics
     *
     * API:
     * PUT /rest/agile/1.0/epic/{epicIdOrKey}/rank
     *
     * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/epic-rankEpics
     *
     * @param string $epicIdOrKey
     * @param array $data
     * @return false|mixed|null
     */
    public function rankEpics(string $epicIdOrKey, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/agile/1.0/epic/$epicIdOrKey/rank";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Get issues without epic
     *
     * API:
     * GET /rest/agile/1.0/epic/none/issue
     *
     * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/epic-getIssuesWithoutEpic
     *
     * @return false|mixed|null
     */
    public function getIssuesWithoutEpic()
    {
        $apiUrl = $this->baseApiUrl . "/rest/agile/1.0/epic/none/issue";

        return $this->request->get($apiUrl);
    }

    /**
     * Remove issues from epic
     *
     * API:
     * POST /rest/agile/1.0/epic/none/issue
     *
     * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/epic-removeIssuesFromEpic
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function removeIssuesFromEpic(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/agile/1.0/epic/none/issue";

        return $this->request->post($apiUrl, $data);
    }
}
