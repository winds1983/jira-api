<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/settings
 */
class Settings extends AbstractJira
{
    
    /**
     * Set base u r l
     *
     * API:
     * PUT /rest/api/2/settings/baseUrl
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/settings-setBaseURL
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function setBaseURL(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/settings/baseUrl";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Get issue navigator default columns
     *
     * API:
     * GET /rest/api/2/settings/columns
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/settings-getIssueNavigatorDefaultColumns
     *
     * @return false|mixed|null
     */
    public function getIssueNavigatorDefaultColumns()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/settings/columns";

        return $this->request->get($apiUrl);
    }

    /**
     * Set issue navigator default columns
     *
     * API:
     * PUT /rest/api/2/settings/columns
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/settings-setIssueNavigatorDefaultColumns
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function setIssueNavigatorDefaultColumns(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/settings/columns";

        return $this->request->put($apiUrl, $data);
    }
}
