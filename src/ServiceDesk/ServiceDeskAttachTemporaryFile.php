<?php

namespace Hive\Jira\ServiceDesk;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/servicedesk/{serviceDeskId}/attachTemporaryFile
 */
class ServiceDeskAttachTemporaryFile extends AbstractJira
{
    
    /**
     * Attach temporary file
     *
     * API:
     * POST /rest/servicedeskapi/servicedesk/{serviceDeskId}/attachTemporaryFile
     *
     * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/servicedesk/{serviceDeskId}/attachTemporaryFile-attachTemporaryFile
     *
     * @param int $serviceDeskId
     * @param array $data
     * @return false|mixed|null
     */
    public function attachTemporaryFile(int $serviceDeskId, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/servicedeskapi/servicedesk/$serviceDeskId/attachTemporaryFile";

        return $this->request->post($apiUrl, $data);
    }
}
