<?php

namespace Hive\Jira\ServiceDesk;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/request/{issueIdOrKey}/sla
 */
class RequestSla extends AbstractJira
{
    
    /**
     * Get sla information
     *
     * API:
     * GET /rest/servicedeskapi/request/{issueIdOrKey}/sla
     *
     * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/request/{issueIdOrKey}/sla-getSlaInformation
     *
     * @param string $issueIdOrKey
     * @return false|mixed|null
     */
    public function getSlaInformation(string $issueIdOrKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/servicedeskapi/request/$issueIdOrKey/sla";

        return $this->request->get($apiUrl);
    }

    /**
     * Get sla information by id
     *
     * API:
     * GET /rest/servicedeskapi/request/{issueIdOrKey}/sla/{slaMetricId}
     *
     * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/request/{issueIdOrKey}/sla-getSlaInformationById
     *
     * @param string $issueIdOrKey
     * @param int $slaMetricId
     * @return false|mixed|null
     */
    public function getSlaInformationById(string $issueIdOrKey, int $slaMetricId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/servicedeskapi/request/$issueIdOrKey/sla/$slaMetricId";

        return $this->request->get($apiUrl);
    }
}
