<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/mypreferences
 */
class Mypreferences extends AbstractJira
{
    
    /**
     * Get preference
     *
     * API:
     * GET /rest/api/2/mypreferences
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/mypreferences-getPreference
     *
     * @return false|mixed|null
     */
    public function getPreference()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/mypreferences";

        return $this->request->get($apiUrl);
    }

    /**
     * Set preference
     *
     * API:
     * PUT /rest/api/2/mypreferences
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/mypreferences-setPreference
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function setPreference(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/mypreferences";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Remove preference
     *
     * API:
     * DELETE /rest/api/2/mypreferences
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/mypreferences-removePreference
     *
     * @return false|mixed|null
     */
    public function removePreference()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/mypreferences";

        return $this->request->delete($apiUrl);
    }
}
