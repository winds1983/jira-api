<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/universal_avatar
 */
class UniversalAvatar extends AbstractJira
{
    
    /**
     * Get avatars
     *
     * API:
     * GET /rest/api/2/universal_avatar/type/{type}/owner/{owningObjectId}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/universal_avatar-getAvatars
     *
     * @param string $type
     * @param int $owningObjectId
     * @return false|mixed|null
     */
    public function getAvatars(string $type, int $owningObjectId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/universal_avatar/type/$type/owner/$owningObjectId";

        return $this->request->get($apiUrl);
    }

    /**
     * Create avatar from temporary
     *
     * API:
     * POST /rest/api/2/universal_avatar/type/{type}/owner/{owningObjectId}/avatar
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/universal_avatar-createAvatarFromTemporary
     *
     * @param string $type
     * @param int $owningObjectId
     * @param array $data
     * @return false|mixed|null
     */
    public function createAvatarFromTemporary(string $type, int $owningObjectId, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/universal_avatar/type/$type/owner/$owningObjectId/avatar";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Delete avatar
     *
     * API:
     * DELETE /rest/api/2/universal_avatar/type/{type}/owner/{owningObjectId}/avatar/{id}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/universal_avatar-deleteAvatar
     *
     * @param string $type
     * @param int $owningObjectId
     * @param int $id
     * @return false|mixed|null
     */
    public function deleteAvatar(string $type, int $owningObjectId, int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/universal_avatar/type/$type/owner/$owningObjectId/avatar/$id";

        return $this->request->delete($apiUrl);
    }

    /**
     * Store temporary avatar
     *
     * API:
     * POST /rest/api/2/universal_avatar/type/{type}/owner/{owningObjectId}/temp
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/universal_avatar-storeTemporaryAvatar
     *
     * @param string $type
     * @param int $owningObjectId
     * @param array $data
     * @return false|mixed|null
     */
    public function storeTemporaryAvatar(string $type, int $owningObjectId, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/universal_avatar/type/$type/owner/$owningObjectId/temp";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Store temporary avatar using multi part
     *
     * API:
     * POST /rest/api/2/universal_avatar/type/{type}/owner/{owningObjectId}/temp
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/universal_avatar-storeTemporaryAvatarUsingMultiPart
     *
     * @param string $type
     * @param int $owningObjectId
     * @param array $data
     * @return false|mixed|null
     */
    public function storeTemporaryAvatarUsingMultiPart(string $type, int $owningObjectId, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/universal_avatar/type/$type/owner/$owningObjectId/temp";

        return $this->request->post($apiUrl, $data);
    }
}
