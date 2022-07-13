<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/groups
 */
class Groups extends AbstractJira
{
    
    /**
     * Find groups
     *
     * API:
     * GET /rest/api/2/groups/picker
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/groups-findGroups
     *
     * @return false|mixed|null
     */
    public function findGroups()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/groups/picker";

        return $this->request->get($apiUrl);
    }
}
