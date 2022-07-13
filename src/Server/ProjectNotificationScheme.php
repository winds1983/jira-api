<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/project/{projectKeyOrId}/notificationscheme
 */
class ProjectNotificationScheme extends AbstractJira
{
    
    /**
     * Get notification scheme
     *
     * API:
     * GET /rest/api/2/project/{projectKeyOrId}/notificationscheme
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/project/{projectKeyOrId}/notificationscheme-getNotificationScheme
     *
     * @param string $projectKeyOrId
     * @return false|mixed|null
     */
    public function getNotificationScheme(string $projectKeyOrId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/project/$projectKeyOrId/notificationscheme";

        return $this->request->get($apiUrl);
    }
}
