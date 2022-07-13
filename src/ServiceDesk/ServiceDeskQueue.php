<?php

namespace Hive\Jira\ServiceDesk;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/servicedesk/{serviceDeskId}/queue
 */
class ServiceDeskQueue extends AbstractJira
{
    
    /**
     * Get queues
     *
     * API:
     * GET /rest/servicedeskapi/servicedesk/{serviceDeskId}/queue
     *
     * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/servicedesk/{serviceDeskId}/queue-getQueues
     *
     * @param int $serviceDeskId
     * @return false|mixed|null
     */
    public function getQueues(int $serviceDeskId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/servicedeskapi/servicedesk/$serviceDeskId/queue";

        return $this->request->get($apiUrl);
    }

    /**
     * Get issues in queue
     *
     * API:
     * GET /rest/servicedeskapi/servicedesk/{serviceDeskId}/queue/{queueId}/issue
     *
     * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/servicedesk/{serviceDeskId}/queue-getIssuesInQueue
     *
     * @param int $serviceDeskId
     * @param int $queueId
     * @return false|mixed|null
     */
    public function getIssuesInQueue(int $serviceDeskId, int $queueId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/servicedeskapi/servicedesk/$serviceDeskId/queue/$queueId/issue";

        return $this->request->get($apiUrl);
    }
}
