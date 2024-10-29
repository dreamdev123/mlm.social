<div class="member-body flat-scroll">
    @foreach ($companies as $company)
        <div class="member-item" attr-fullname="{{ $company->getFullname() }}">
            <a class="member-link" href="{{ route('profile', [ 'userID' => $company->id ]) }}">
                <div class="member-avatar-wrp">
                    @if (isset($company->profile->main_avatar_url))
                        <img class="member-avatar" src="{{ asset('uploads/'.$company->username.'/'.$company->profile->main_avatar_url.'?'.time()) }}" alt="{{ $company->getFullname() }}'s main_avatar">
                    @else
                        <div class="member-avatar">
                            <p class="first_letter">{{ $company->getMono() }}</p>
                        </div>
                    @endif
                </div>
                <div class="member-name">{{ $company->getFullname() }}</div>
            </a>
            <div class="option-icons-section">
                <div class="option-icon-btn heart-icon-btn" attr-data="{{ $company->profile->id }}">
                    <span class="option-icon heart-icon {{ in_array($authUser->id, explode(',', $company->profile->followers)) ? 'like' : '' }} company{{ $company->profile->id }}"><i class="fa fa-heart" aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
    @endforeach
</div>