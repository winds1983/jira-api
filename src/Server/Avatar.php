<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/avatar
 */
class Avatar extends AbstractJira
{
    
    /**
     * Get all system avatars
     *
     * API:
     * GET /rest/api/2/avatar/{type}/system
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/avatar-getAllSystemAvatars
     *
     * @param string $type
     * @return false|mixed|null
     */
    public function getAllSystemAvatars(string $type)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/avatar/$type/system";

        return $this->request->get($apiUrl);
    }

    /**
     * Store temporary avatar
     *
     * API:
     * POST /rest/api/2/avatar/{type}/temporary
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/avatar-storeTemporaryAvatar
     *
     * @param string $type
     * @param array $data
     * @return false|mixed|null
     */
    public function storeTemporaryAvatar(string $type, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/avatar/$type/temporary";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Create avatar from temporary
     *
     * API:
     * POST /rest/api/2/avatar/{type}/temporaryCrop
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/avatar-createAvatarFromTemporary
     *
     * @param string $type
     * @param array $data
     * @return false|mixed|null
     */
    public function createAvatarFromTemporary(string $type, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/avatar/$type/temporaryCrop";

        return $this->request->post($apiUrl, $data);
    }
}
