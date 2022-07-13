<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/notificationscheme
 */
class NotificationScheme extends AbstractJira
{
    
    /**
     * Get notification schemes
     *
     * API:
     * GET /rest/api/2/notificationscheme
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/notificationscheme-getNotificationSchemes
     *
     * @return false|mixed|null
     */
    public function getNotificationSchemes()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/notificationscheme";

        return $this->request->get($apiUrl);
    }

    /**
     * Get notification scheme
     *
     * API:
     * GET /rest/api/2/notificationscheme/{id}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/notificationscheme-getNotificationScheme
     *
     * @param int $id
     * @return false|mixed|null
     */
    public function getNotificationScheme(int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/notificationscheme/$id";

        return $this->request->get($apiUrl);
    }
}
