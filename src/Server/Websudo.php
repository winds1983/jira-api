<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#auth/1/websudo
 */
class Websudo extends AbstractJira
{
    
    /**
     * Release
     *
     * API:
     * DELETE /rest/auth/1/websudo
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#auth/1/websudo-release
     *
     * @return false|mixed|null
     */
    public function release()
    {
        $apiUrl = $this->baseApiUrl . "/rest/auth/1/websudo";

        return $this->request->delete($apiUrl);
    }
}
