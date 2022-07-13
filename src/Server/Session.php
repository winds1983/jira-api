<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#auth/1/session
 */
class Session extends AbstractJira
{
    
    /**
     * Login
     *
     * API:
     * POST /rest/auth/1/session
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#auth/1/session-login
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function login(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/auth/1/session";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Logout
     *
     * API:
     * DELETE /rest/auth/1/session
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#auth/1/session-logout
     *
     * @return false|mixed|null
     */
    public function logout()
    {
        $apiUrl = $this->baseApiUrl . "/rest/auth/1/session";

        return $this->request->delete($apiUrl);
    }

    /**
     * Current user
     *
     * API:
     * GET /rest/auth/1/session
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#auth/1/session-currentUser
     *
     * @return false|mixed|null
     */
    public function currentUser()
    {
        $apiUrl = $this->baseApiUrl . "/rest/auth/1/session";

        return $this->request->get($apiUrl);
    }
}
