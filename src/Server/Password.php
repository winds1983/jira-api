<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/password
 */
class Password extends AbstractJira
{
    
    /**
     * Get password policy
     *
     * API:
     * GET /rest/api/2/password/policy
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/password-getPasswordPolicy
     *
     * @return false|mixed|null
     */
    public function getPasswordPolicy()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/password/policy";

        return $this->request->get($apiUrl);
    }

    /**
     * Policy check create user
     *
     * API:
     * POST /rest/api/2/password/policy/createUser
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/password-policyCheckCreateUser
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function policyCheckCreateUser(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/password/policy/createUser";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Policy check update user
     *
     * API:
     * POST /rest/api/2/password/policy/updateUser
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/password-policyCheckUpdateUser
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function policyCheckUpdateUser(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/password/policy/updateUser";

        return $this->request->post($apiUrl, $data);
    }
}
