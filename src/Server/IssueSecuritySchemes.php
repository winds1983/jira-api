<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issuesecurityschemes
 */
class IssueSecuritySchemes extends AbstractJira
{
    
    /**
     * Get issue security schemes
     *
     * API:
     * GET /rest/api/2/issuesecurityschemes
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issuesecurityschemes-getIssueSecuritySchemes
     *
     * @return false|mixed|null
     */
    public function getIssueSecuritySchemes()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issuesecurityschemes";

        return $this->request->get($apiUrl);
    }

    /**
     * Get issue security scheme
     *
     * API:
     * GET /rest/api/2/issuesecurityschemes/{id}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issuesecurityschemes-getIssueSecurityScheme
     *
     * @param int $id
     * @return false|mixed|null
     */
    public function getIssueSecurityScheme(int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issuesecurityschemes/$id";

        return $this->request->get($apiUrl);
    }
}
