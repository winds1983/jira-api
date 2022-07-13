<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issueLink
 */
class IssueLink extends AbstractJira
{
    
    /**
     * Link issues
     *
     * API:
     * POST /rest/api/2/issueLink
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issueLink-linkIssues
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function linkIssues(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issueLink";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Get issue link
     *
     * API:
     * GET /rest/api/2/issueLink/{linkId}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issueLink-getIssueLink
     *
     * @param int $linkId
     * @return false|mixed|null
     */
    public function getIssueLink(int $linkId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issueLink/$linkId";

        return $this->request->get($apiUrl);
    }

    /**
     * Delete issue link
     *
     * API:
     * DELETE /rest/api/2/issueLink/{linkId}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issueLink-deleteIssueLink
     *
     * @param int $linkId
     * @return false|mixed|null
     */
    public function deleteIssueLink(int $linkId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issueLink/$linkId";

        return $this->request->delete($apiUrl);
    }
}
