<a href="#">
    <strong id="following" class="stat">
        {{ count($user->followings) }}关注
    </strong>
</a>
<a href="#">
    <strong class="follower stat">
        {{ count($user->followers) }}粉丝
    </strong>
</a>
<a href="">
    <strong id="statuses" class="stat">
        {{ $user->statuses()->count() }}微博
    </strong>
</a>
