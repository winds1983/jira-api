<?php

namespace Hive\Jira\ServiceDesk;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/servicedesk/{serviceDeskId}/customer
 */
class ServiceDeskCustomer extends AbstractJira
{
    
    /**
     * Add customers
     *
     * API:
     * POST /rest/servicedeskapi/servicedesk/{serviceDeskId}/customer
     *
     * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/servicedesk/{serviceDeskId}/customer-addCustomers
     *
     * @param int $serviceDeskId
     * @param array $data
     * @return false|mixed|null
     */
    public function addCustomers(int $serviceDeskId, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/servicedeskapi/servicedesk/$serviceDeskId/customer";

        return $this->request->post($apiUrl, $data);
    }
}
