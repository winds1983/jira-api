<?php

namespace Hive\Jira\Agile;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/issue
 */
class Issue extends AbstractJira
{
    
    /**
     * Get issue
     *
     * API:
     * GET /rest/agile/1.0/issue/{issueIdOrKey}
     *
     * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/issue-getIssue
     *
     * @param string $issueIdOrKey
     * @return false|mixed|null
     */
    public function getIssue(string $issueIdOrKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/agile/1.0/issue/$issueIdOrKey";

        return $this->request->get($apiUrl);
    }

    /**
     * Get issue estimation for board
     *
     * API:
     * GET /rest/agile/1.0/issue/{issueIdOrKey}/estimation
     *
     * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/issue-getIssueEstimationForBoard
     *
     * @param string $issueIdOrKey
     * @return false|mixed|null
     */
    public function getIssueEstimationForBoard(string $issueIdOrKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/agile/1.0/issue/$issueIdOrKey/estimation";

        return $this->request->get($apiUrl);
    }

    /**
     * Estimate issue for board
     *
     * API:
     * PUT /rest/agile/1.0/issue/{issueIdOrKey}/estimation
     *
     * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/issue-estimateIssueForBoard
     *
     * @param string $issueIdOrKey
     * @param array $data
     * @return false|mixed|null
     */
    public function estimateIssueForBoard(string $issueIdOrKey, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/agile/1.0/issue/$issueIdOrKey/estimation";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Rank issues
     *
     * API:
     * PUT /rest/agile/1.0/issue/rank
     *
     * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/issue-rankIssues
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function rankIssues(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/agile/1.0/issue/rank";

        return $this->request->put($apiUrl, $data);
    }
}
