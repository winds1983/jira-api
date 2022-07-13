<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/index/summary
 */
class IndexSummary extends AbstractJira
{
    
    /**
     * Get index summary
     *
     * API:
     * GET /rest/api/2/index/summary
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/index/summary-getIndexSummary
     *
     * @return false|mixed|null
     */
    public function getIndexSummary()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/index/summary";

        return $this->request->get($apiUrl);
    }
}
