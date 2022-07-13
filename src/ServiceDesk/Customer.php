<?php

namespace Hive\Jira\ServiceDesk;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/customer
 */
class Customer extends AbstractJira
{
    
    /**
     * Create customer
     *
     * API:
     * POST /rest/servicedeskapi/customer
     *
     * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/customer-createCustomer
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function createCustomer(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/servicedeskapi/customer";

        return $this->request->post($apiUrl, $data);
    }
}
