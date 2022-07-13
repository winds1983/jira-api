<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/field
 */
class Field extends AbstractJira
{
    
    /**
     * Create custom field
     *
     * API:
     * POST /rest/api/2/field
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/field-createCustomField
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function createCustomField(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/field";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Get fields
     *
     * API:
     * GET /rest/api/2/field
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/field-getFields
     *
     * @return false|mixed|null
     */
    public function getFields()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/field";

        return $this->request->get($apiUrl);
    }
}
