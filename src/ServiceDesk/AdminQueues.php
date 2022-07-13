<?php

namespace Hive\Jira\ServiceDesk;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/admin/queues
 */
class AdminQueues extends AbstractJira
{
    
    /**
     * Get queue settings on project
     *
     * API:
     * GET /rest/servicedeskapi/admin/queues/{projectKey}
     *
     * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/admin/queues-getQueueSettingsOnProject
     *
     * @param string $projectKey
     * @return false|mixed|null
     */
    public function getQueueSettingsOnProject(string $projectKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/servicedeskapi/admin/queues/$projectKey";

        return $this->request->get($apiUrl);
    }

    /**
     * Set should queues use count cache on project
     *
     * API:
     * PUT /rest/servicedeskapi/admin/queues/{projectKey}/cache-count
     *
     * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/admin/queues-setShouldQueuesUseCountCacheOnProject
     *
     * @param string $projectKey
     * @param array $data
     * @return false|mixed|null
     */
    public function setShouldQueuesUseCountCacheOnProject(string $projectKey, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/servicedeskapi/admin/queues/$projectKey/cache-count";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Set should queues include count on project
     *
     * API:
     * PUT /rest/servicedeskapi/admin/queues/{projectKey}/include-count
     *
     * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/admin/queues-setShouldQueuesIncludeCountOnProject
     *
     * @param string $projectKey
     * @param array $data
     * @return false|mixed|null
     */
    public function setShouldQueuesIncludeCountOnProject(string $projectKey, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/servicedeskapi/admin/queues/$projectKey/include-count";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Set should queues use count cache globally
     *
     * API:
     * PUT /rest/servicedeskapi/admin/queues/cache-count
     *
     * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/admin/queues-setShouldQueuesUseCountCacheGlobally
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function setShouldQueuesUseCountCacheGlobally(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/servicedeskapi/admin/queues/cache-count";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Set should queues include count globally
     *
     * API:
     * PUT /rest/servicedeskapi/admin/queues/include-count
     *
     * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/admin/queues-setShouldQueuesIncludeCountGlobally
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function setShouldQueuesIncludeCountGlobally(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/servicedeskapi/admin/queues/include-count";

        return $this->request->put($apiUrl, $data);
    }
}
