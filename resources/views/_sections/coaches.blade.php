<div class="member-body flat-scroll">
    @foreach ($coaches as $coach)
        <div class="member-item" attr-fullname="{{ $coach->getFullname() }}">
            <a class="member-link" href="{{ route('profile', [ 'userID' => $coach->id ]) }}">
                <div class="member-avatar-wrp">
                    @if (isset($coach->profile->main_avatar_url))
                        <img class="member-avatar" src="{{ asset('uploads/'.$coach->username.'/'.$coach->profile->main_avatar_url.'?'.time()) }}" alt="{{ $coach->getFullname() }}'s main_avatar">
                    @else
                        <div class="member-avatar">
                            <p class="first_letter">{{ $coach->getMono() }}</p>
                        </div>
                    @endif
                </div>
                <div class="member-name">{{ $coach->getFullname() }}</div>
            </a>
            <div class="option-icons-section">
                <div class="option-icon-btn comment-icon" attr-connectUserId="{{ $coach->id }}">
                    <span class="option-icon"><i class="fa fa-comment" aria-hidden="true"></i></span>
                </div>
                <div class="option-icon-btn trash-icon" attr-data="{{ $coach->id }}">
                    <span class="option-icon"><i class="fa fa-trash" aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
    @endforeach
</div>