<?php
/*
 * vim:set softtabstop=4 shiftwidth=4 expandtab:
 *
 * LICENSE: GNU Affero General Public License, version 3 (AGPL-3.0-or-later)
 * Copyright 2001 - 2020 Ampache.org
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

namespace Ampache\Repository;

use Ampache\Model\User;

interface UserRepositoryInterface
{
    /**
     * This returns a built user from a rsstoken
     */
    public function getByRssToken(string $rssToken): ?User;

    /**
     * Lookup for a user with a certain name
     */
    public function findByUsername(string $username): ?int;

    /**
     * This returns all valid users in database.
     *
     * @return int[]
     */
    public function getValid(bool $includeDisabled = false): array;

    /**
     * This returns a built user from a email
     */
    public function findByEmail(string $email): ?User;

    /**
     * This returns users list related to a website.
     *
     * @return int[]
     *
     * @todo rework. the query limits the results to 1, so it doesn't need to return an array
     */
    public function findByWebsite(string $website): array;

    /**
     * This returns a built user from an apikey
     */
    public function findByApiKey(string $apikey): ?User;
}
