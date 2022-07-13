<?php

namespace Hive\Jira\Agile;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/board/{boardId}/version
 */
class BoardVersion extends AbstractJira
{
    
    /**
     * Get all versions
     *
     * API:
     * GET /rest/agile/1.0/board/{boardId}/version
     *
     * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/board/{boardId}/version-getAllVersions
     *
     * @param int $boardId
     * @return false|mixed|null
     */
    public function getAllVersions(int $boardId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/agile/1.0/board/$boardId/version";

        return $this->request->get($apiUrl);
    }
}
