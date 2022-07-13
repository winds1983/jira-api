<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/application-properties
 */
class ApplicationProperties extends AbstractJira
{
    
    /**
     * Get property
     *
     * API:
     * GET /rest/api/2/application-properties
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/application-properties-getProperty
     *
     * @return false|mixed|null
     */
    public function properties()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/application-properties";

        return $this->request->get($apiUrl);
    }

    /**
     * Set property via restful table
     *
     * API:
     * PUT /rest/api/2/application-properties/{id}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/application-properties-setPropertyViaRestfulTable
     *
     * @param int $id
     * @param array $data
     * @return false|mixed|null
     */
    public function properties(int $id, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/application-properties/$id";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Get advanced settings
     *
     * API:
     * GET /rest/api/2/application-properties/advanced-settings
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/application-properties-getAdvancedSettings
     *
     * @return false|mixed|null
     */
    public function properties()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/application-properties/advanced-settings";

        return $this->request->get($apiUrl);
    }
}
