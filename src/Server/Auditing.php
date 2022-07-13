<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/auditing
 */
class Auditing extends AbstractJira
{
    
    /**
     * Get records
     *
     * API:
     * GET /rest/api/2/auditing/record
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/auditing-getRecords
     *
     * @return false|mixed|null
     */
    public function getRecords()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/auditing/record";

        return $this->request->get($apiUrl);
    }

    /**
     * Add record
     *
     * API:
     * POST /rest/api/2/auditing/record
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/auditing-addRecord
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function addRecord(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/auditing/record";

        return $this->request->post($apiUrl, $data);
    }
}
