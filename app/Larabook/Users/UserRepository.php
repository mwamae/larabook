<?php namespace Larabook\Users;

class UserRepository {

    public function save(User $user){

        return $user->save();

    }

    /**
     * Generate a paginated list of our
     *
     * @param int $howMany
     * @return mixed
     */
    public function getPaginated($howMany =25)
    {
        return User::orderBy('username', 'asc')->paginate($howMany);
    }

    /**
     * Fetch a user by their username
     *
     * @param $username
     * @return mixed
     */
    public function findByUsername($username)
    {
        return User::with('statuses')->whereUsername($username)->first();
    }

    public function findById($id)
    {
        return User::findOrFail($id);
    }

    public function follow($userIdToFollow, User $user)
    {
        return $user->followedUsers()->attach($userIdToFollow);
    }

    public function unfollow($userIdToUnfollow, User $user)
    {
        return $user->followedUsers()->detach($userIdToUnfollow);
    }

}