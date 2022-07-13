<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/applicationrole
 */
class ApplicationRole extends AbstractJira
{
    
    /**
     * Get all
     *
     * API:
     * GET /rest/api/2/applicationrole
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/applicationrole-getAll
     *
     * @return false|mixed|null
     */
    public function getAll()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/applicationrole";

        return $this->request->get($apiUrl);
    }

    /**
     * Put bulk
     *
     * API:
     * PUT /rest/api/2/applicationrole
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/applicationrole-putBulk
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function putBulk(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/applicationrole";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Get
     *
     * API:
     * GET /rest/api/2/applicationrole/{key}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/applicationrole-get
     *
     * @param string $key
     * @return false|mixed|null
     */
    public function get(string $key)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/applicationrole/$key";

        return $this->request->get($apiUrl);
    }

    /**
     * Put
     *
     * API:
     * PUT /rest/api/2/applicationrole/{key}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/applicationrole-put
     *
     * @param string $key
     * @param array $data
     * @return false|mixed|null
     */
    public function put(string $key, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/applicationrole/$key";

        return $this->request->put($apiUrl, $data);
    }
}
