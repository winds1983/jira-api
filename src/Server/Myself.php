<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/myself
 */
class Myself extends AbstractJira
{
    
    /**
     * Get user
     *
     * API:
     * GET /rest/api/2/myself
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/myself-getUser
     *
     * @return false|mixed|null
     */
    public function getUser()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/myself";

        return $this->request->get($apiUrl);
    }

    /**
     * Update user
     *
     * API:
     * PUT /rest/api/2/myself
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/myself-updateUser
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function updateUser(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/myself";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Change my password
     *
     * API:
     * PUT /rest/api/2/myself/password
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/myself-changeMyPassword
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function changeMyPassword(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/myself/password";

        return $this->request->put($apiUrl, $data);
    }
}
