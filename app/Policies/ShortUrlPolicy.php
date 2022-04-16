<?php

namespace App\Policies;

use App\Models\ShortUrl;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ShortUrlPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param User $user
     * @return bool
     */
    public function viewAny(User $user): bool
    {
        // Check can take place based on role or permissions
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param User $user
     * @param ShortUrl $shortUrl
     * @return bool
     */
    public function view(User $user, ShortUrl $shortUrl): bool
    {
        // Check can take place based on role or permissions and if the user has created the short url
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param User $user
     * @return bool
     */
    public function create(User $user): bool
    {
        // Check can take place based on role or permissions
        return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param User $user
     * @param ShortUrl $shortUrl
     * @return bool
     */
    public function update(User $user, ShortUrl $shortUrl): bool
    {
        // Check can take place based on role or permissions and if the user has created the short url
        return true;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param ShortUrl $shortUrl
     * @return bool
     */
    public function delete(User $user, ShortUrl $shortUrl): bool
    {
        // Check can take place based on role or permissions and if the user has created the short url
        return true;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param User $user
     * @param ShortUrl $shortUrl
     * @return bool
     */
    public function restore(User $user, ShortUrl $shortUrl): bool
    {
        // Check can take place based on role or permissions and if the user has created the short url
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param User $user
     * @param ShortUrl $shortUrl
     * @return bool
     */
    public function forceDelete(User $user, ShortUrl $shortUrl): bool
    {
        // Check can take place based on role or permissions and if the user has created the short url
        return true;
    }
}
