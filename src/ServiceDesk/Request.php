<?php

namespace Hive\Jira\ServiceDesk;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/request
 */
class Request extends AbstractJira
{
    
    /**
     * Create customer request
     *
     * API:
     * POST /rest/servicedeskapi/request
     *
     * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/request-createCustomerRequest
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function createCustomerRequest(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/servicedeskapi/request";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Get my customer requests
     *
     * API:
     * GET /rest/servicedeskapi/request
     *
     * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/request-getMyCustomerRequests
     *
     * @return false|mixed|null
     */
    public function getMyCustomerRequests()
    {
        $apiUrl = $this->baseApiUrl . "/rest/servicedeskapi/request";

        return $this->request->get($apiUrl);
    }

    /**
     * Get customer request by id or key
     *
     * API:
     * GET /rest/servicedeskapi/request/{issueIdOrKey}
     *
     * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/request-getCustomerRequestByIdOrKey
     *
     * @param string $issueIdOrKey
     * @return false|mixed|null
     */
    public function getCustomerRequestByIdOrKey(string $issueIdOrKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/servicedeskapi/request/$issueIdOrKey";

        return $this->request->get($apiUrl);
    }
}
