@if ($rankUsers->count())
    @foreach ($rankUsers as $user)
    <div class="member-item flex-column">
        <a class="member-link" href="{{ route('incentives.teams') }}?user_id={{ $user->id }}">
            <div class="member-avatar-wrp">
                <div class="member-avatar">
                @if($user->profile->main_avatar_url)
                    <img src="{{ asset('uploads/'.$user->username.'/'.$user->profile->main_avatar_url.'?'.time()) }}">
                @else
                    <p class="first_letter">{{ $user->getMono() }}</p>
                @endif
                </div>
            </div>
            <div class="member-name">{{ $user->getFullname() }}</div>
        </a>
    </div>
    @endforeach
@else
<div class="col no-members mt-5">
    No Users found
</div>
@endif