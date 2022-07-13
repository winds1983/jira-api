<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/groupuserpicker
 */
class GroupUserPicker extends AbstractJira
{
    
    /**
     * Find users and groups
     *
     * API:
     * GET /rest/api/2/groupuserpicker
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/groupuserpicker-findUsersAndGroups
     *
     * @return false|mixed|null
     */
    public function findUsersAndGroups()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/groupuserpicker";

        return $this->request->get($apiUrl);
    }
}
