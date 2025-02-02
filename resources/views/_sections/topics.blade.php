
<div class="member-body flat-scroll">
  <div class="accordion" id="faq">
    <div class="card">
      <div class="card-header" id="faqhead1">
        <a href="#" class="btn btn-header-link member-item collapsed" data-toggle="collapse" data-target="#faq1" aria-expanded="true" aria-controls="faq1" attr-fullname="DASHBOARD">DASHBOARD</a>
      </div>

      <div id="faq1" class="collapse" aria-labelledby="faqhead1" data-parent="#faq">
        <div class="card-body">
          <div class="">Dashboard is the navigation tool for your entire BUDDIES suite. Just click or tap on one of the dashboard icons and you will be forwarded to the requested page.</div>
          <div class="action-title my-3">Actions</div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section">
              <span class="nav-icon d-flex align-items-center" style="font-size: 20px"><iconify-icon icon="lucide:arrow-right-from-line"></iconify-icon></span>
            </div>
            <div>Logout.</div>
          </div>
          <div class="d-flex align-items-center">
            <div class="icon-section">
              <div class="new-message-icon"></div>
            </div>
            <div>You have new messages</div>
          </div>
          <div class="mt-4">
            <a class="btn btn-primary go-to-button" href="{{ route('dashboard') }}">
              {{ __('VISIT') }}
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="faqhead2">
        <a href="#" class="btn btn-header-link member-item collapsed" data-toggle="collapse" data-target="#faq2" aria-expanded="true" aria-controls="faq2" attr-fullname="PROFILE">PROFILE</a>
      </div>

      <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
        <div class="card-body">
          <div class="">Profile is your personal page to expose yourself to other community members. On this page you can write your story and upload your best images.</div>
          <div class="action-title my-3">Actions</div>
          <div class="mb-3">Click or tap EDIT to go into edit mode.</div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section">
              <span class="nav-icon active">Abc</span>
            </div>
            <div>Edit content</div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section">
              <span class="nav-icon active"><i class="fa fa-plus" aria-hidden="true"></i></span>
            </div>
            <div>Upload image</div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section">
              <span class="nav-icon active"><i class="fa fa-trash" aria-hidden="true"></i></span>
            </div>
            <div>Delete image</div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section d-flex align-items-center">
              <span class="nav-icon active small"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
              <span class="nav-icon small ml-1"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
            </div>
            <div>Profile</div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section d-flex align-items-center">
              <span class="nav-icon small"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
              <span class="nav-icon active small ml-1"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
            </div>
            <div>Smart search engine settings</div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section">
              <span class="nav-icon active"><img src="{{ asset('images/logo/LogoMenu.svg') }}" class="img-fluid w-50" alt="Buddies.zone" title="Buddies.zone" /></span>
            </div>
            <div>Dashboard</div>
          </div>
          <div class="mb-3">Click or tap SAVE to store your page.</div>
          <div class="">Select a maximum of 5 interest categories in the smart search engine. This will display in your profile. The smart search engine will match you with other community members with the same selected interests. If no interest are selected, your profile will be visible to any other community member.</div>
          <div class="mt-4">
            <a class="btn btn-primary go-to-button" href="{{ route('profile') }}">
              {{ __('VISIT') }}
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="faqhead3">
        <a href="#" class="btn btn-header-link member-item collapsed" data-toggle="collapse" data-target="#faq3" aria-expanded="true" aria-controls="faq3" attr-fullname="CONNECT">CONNECT</a>
      </div>

      <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
        <div class="card-body">
          <div class="mb-3">Connect with other community members and build your buddies list. You can simply find someone by typing their name, or let the smart search engine do the magic and find others based on the interest settings selected in your profile.</div>
          <div class="">To connect with someone, you are obliged to write and send a message first to introduce yourself. As soon as someone receives and reads your message and accepts your request to become buddies, the two of you will be connected. Your new buddy will now be visible in your buddies list.</div>
          <div class="action-title my-3">Actions</div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section">
              <span class="nav-icon"><i class="fa fa-paper-plane" aria-hidden="true"></i></span>
            </div>
            <div>Send message</div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section d-flex align-items-center">
              <span class="nav-icon active small"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
              <span class="nav-icon small ml-1"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
            </div>
            <div>Smart search engine</div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section d-flex align-items-center">
              <span class="nav-icon small"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
              <span class="nav-icon active small ml-1"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
            </div>
            <div>Smart search engine settings</div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section"><span class="nav-icon active"><img src="{{ asset('images/logo/LogoMenu.svg') }}" class="img-fluid w-50" alt="Buddies.zone" title="Buddies.zone" /></span></div>
            <div>Dashboard</div>
          </div>
          <div class="">Change Distance, Gender, Age or Interests in the smart search engine.</div>
          <div class="mt-4">
            <a class="btn btn-primary go-to-button" href="{{ route('connect.index') }}">
              {{ __('VISIT') }}
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="faqhead4">
        <a href="#" class="btn btn-header-link member-item collapsed" data-toggle="collapse" data-target="#faq4" aria-expanded="true" aria-controls="faq4" attr-fullname="CHAT">CHAT</a>
      </div>

      <div id="faq4" class="collapse" aria-labelledby="faqhead4" data-parent="#faq">
        <div class="card-body">
          <div class="mb-3">Chat with your buddies whenever you want, and from any device you want. View the active chat list, or simply type any name to find an active chat.</div>
          <div class="">To start a first or new chat with a buddy not visible in the chat list, go to your buddies list, find the buddy and click the chat icon.</div>
          <div class="action-title my-3">Actions</div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section">
              <span class="nav-icon active"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
            </div>
            <div>Online</div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section">
              <span class="nav-icon offline"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
            </div>
            <div>Offline</div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section">
              <div class="new-message-icon"></div>
            </div>
            <div>New message</div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section">
              <span class="nav-icon"><i class="fa fa-comment" aria-hidden="true"></i></span>
            </div>
            <div>Chat</div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section">
              <span class="nav-icon"><i class="fa fa-trash" aria-hidden="true"></i></span>
            </div>
            <div>Delete</div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section">
              <span class="nav-icon"><i class="fa fa-paper-plane" aria-hidden="true"></i></span>
            </div>
            <div>Send message</div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section d-flex align-items-center">
              <span class="nav-icon active small"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
              <span class="nav-icon small ml-1"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
            </div>
            <div>Chat list</div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section d-flex align-items-center">
              <span class="nav-icon small"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
              <span class="nav-icon active small ml-1"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
            </div>
            <div>Chat page</div>
          </div>
          <div class="d-flex align-items-center">
            <div class="icon-section"><span class="nav-icon active"><img src="{{ asset('images/logo/LogoMenu.svg') }}" class="img-fluid w-50" alt="Buddies.zone" title="Buddies.zone" /></span></div>
            <div>Dashboard</div>
          </div>
          <div class="mt-4">
            <a class="btn btn-primary go-to-button" href="{{ route('chat.index') }}">
              {{ __('VISIT') }}
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="faqhead5">
        <a href="#" class="btn btn-header-link member-item collapsed" data-toggle="collapse" data-target="#faq5" aria-expanded="true" aria-controls="faq5" attr-fullname="BUDDIES">FRIENDS</a>
      </div>

      <div id="faq5" class="collapse" aria-labelledby="faqhead5" data-parent="#faq">
        <div class="card-body">
          <div class="">See all your connected buddies in an alphabetical overview. Simply scroll the list or type any name in the search field to quickly find one of your buddies.</div>
          <div class="action-title my-3">Actions</div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section">
              <span class="nav-icon"><i class="fa fa-plus" aria-hidden="true"></i></span>
            </div>
            <div>Accept</div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section">
              <span class="nav-icon"><i class="fa fa-comment" aria-hidden="true"></i></span>
            </div>
            <div>Chat</div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section">
              <span class="nav-icon"><i class="fa fa-trash" aria-hidden="true"></i></span>
            </div>
            <div>Delete</div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section d-flex align-items-center">
              <span class="nav-icon active small"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
              <span class="nav-icon small ml-1"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
            </div>
            <div>Buddies list</div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section d-flex align-items-center">
              <span class="nav-icon small"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
              <span class="nav-icon active small ml-1"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
            </div>
            <div>New Requests</div>
          </div>
          <div class="d-flex align-items-center">
            <div class="icon-section"><span class="nav-icon active"><img src="{{ asset('images/logo/LogoMenu.svg') }}" class="img-fluid w-50" alt="Buddies.zone" title="Buddies.zone" /></span></div>
            <div>Dashboard</div>
          </div>
          <div class="mt-4">
            <a class="btn btn-primary go-to-button" href="{{ route('friends.index') }}">
              {{ __('VISIT') }}
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="faqhead6">
        <a href="#" class="btn btn-header-link member-item collapsed" data-toggle="collapse" data-target="#faq6" aria-expanded="true" aria-controls="faq6" attr-fullname="GROUPS">ROOMS</a>
      </div>

      <div id="faq6" class="collapse" aria-labelledby="faqhead6" data-parent="#faq">
        <div class="card-body">
          <div class="mb-3">Create connections and build a deeper sense of community. Start your own group as a dedicated space for your personal community to flourish. Groups are mostly an incubator for ideas and feedback through authentic conversations.</div>
          <div class="">Groups are only visible for added community members. To keep groups clean and to stay in line with regulations, the creator of a group is the only obliged to add or remove group members.</div>
          <div class="action-title my-3">Actions</div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section">
              <span class="nav-icon"><i class="fa fa-comment" aria-hidden="true"></i></span>
            </div>
            <div>Chat</div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section">
              <span class="nav-icon"><i class="fa fa-trash" aria-hidden="true"></i></span>
            </div>
            <div>Delete</div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section d-flex align-items-center">
              <span class="nav-icon active small"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
              <span class="nav-icon small ml-1"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
              <span class="nav-icon small ml-1"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
            </div>
            <div>All groups</div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section d-flex align-items-center">
              <span class="nav-icon small"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
              <span class="nav-icon active small ml-1"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
              <span class="nav-icon small ml-1"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
            </div>
            <div>My groups</div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section d-flex align-items-center">
              <span class="nav-icon small"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
              <span class="nav-icon small ml-1"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
              <span class="nav-icon active small ml-1"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
            </div>
            <div>Chat page</div>
          </div>
          <div class="d-flex align-items-center">
            <div class="icon-section"><span class="nav-icon active"><img src="{{ asset('images/logo/LogoMenu.svg') }}" class="img-fluid w-50" alt="Buddies.zone" title="Buddies.zone" /></span></div>
            <div>Dashboard</div>
          </div>
          <div class="mt-4">
            <a class="btn btn-primary go-to-button" href="{{ route('teams.index') }}">
              {{ __('VISIT') }}
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="faqhead7">
        <a href="#" class="btn btn-header-link member-item collapsed" data-toggle="collapse" data-target="#faq7" aria-expanded="true" aria-controls="faq7" attr-fullname="COMPANIES">COMPANIES</a>
      </div>

      <div id="faq7" class="collapse" aria-labelledby="faqhead7" data-parent="#faq">
        <div class="card-body">
          <div class="mb-3">Local shops and companies are an important part of the BUDDIES community as they offer community members special deals which can be found on the DEALS page. As a community member, you will always have an advantage on regular pricing.</div>
          <div class="mb-3">As BUDDIES we strive to create mutual-gains formula that benefits all.</div>
          <div class="mb-3">Find shops and companies by name. Visit their profile page to find out more and click the FOLLOW button to add them to your favorites list.</div>
          <div class="">Feel free to refer your favorite local shops or companies to the constantly growing BUDDIES platform.</div>
          <div class="action-title my-3">Actions</div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section">
              <span class="nav-icon active"><i class="fa fa-heart" aria-hidden="true"></i></span>
            </div>
            <div>Follow</div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section d-flex align-items-center">
              <span class="nav-icon active small"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
              <span class="nav-icon small ml-1"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
              <span class="nav-icon small ml-1"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
            </div>
            <div>Find companies</div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section d-flex align-items-center">
              <span class="nav-icon small"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
              <span class="nav-icon active small ml-1"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
              <span class="nav-icon small ml-1"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
            </div>
            <div>My favorite companies</div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section d-flex align-items-center">
              <span class="nav-icon small"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
              <span class="nav-icon small ml-1"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
              <span class="nav-icon active small ml-1"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
            </div>
            <div>Smart search engine settings</div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section"><span class="nav-icon active"><img src="{{ asset('images/logo/LogoMenu.svg') }}" class="img-fluid w-50" alt="Buddies.zone" title="Buddies.zone" /></span></div>
            <div>Dashboard</div>
          </div>
          <div>Change Distance or Category in the smart search engine.</div>
          <div class="mt-4">
            <a class="btn btn-primary go-to-button" href="{{ route('companies.index') }}">
              {{ __('VISIT') }}
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="faqhead7">
        <a href="#" class="btn btn-header-link member-item collapsed" data-toggle="collapse" data-target="#faq7" aria-expanded="true" aria-controls="faq7" attr-fullname="COMPANIES">COACHES</a>
      </div>

      <div id="faq7" class="collapse" aria-labelledby="faqhead7" data-parent="#faq">
        <div class="card-body">
          <div class="mb-3">Local shops and companies are an important part of the BUDDIES community as they offer community members special deals which can be found on the DEALS page. As a community member, you will always have an advantage on regular pricing.</div>
          <div class="mb-3">As BUDDIES we strive to create mutual-gains formula that benefits all.</div>
          <div class="mb-3">Find shops and companies by name. Visit their profile page to find out more and click the FOLLOW button to add them to your favorites list.</div>
          <div class="">Feel free to refer your favorite local shops or companies to the constantly growing BUDDIES platform.</div>
          <div class="action-title my-3">Actions</div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section">
              <span class="nav-icon active"><i class="fa fa-heart" aria-hidden="true"></i></span>
            </div>
            <div>Follow</div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section d-flex align-items-center">
              <span class="nav-icon active small"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
              <span class="nav-icon small ml-1"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
              <span class="nav-icon small ml-1"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
            </div>
            <div>Find Coaches</div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section d-flex align-items-center">
              <span class="nav-icon small"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
              <span class="nav-icon active small ml-1"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
              <span class="nav-icon small ml-1"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
            </div>
            <div>My favorite companies</div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section d-flex align-items-center">
              <span class="nav-icon small"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
              <span class="nav-icon small ml-1"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
              <span class="nav-icon active small ml-1"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
            </div>
            <div>Smart search engine settings</div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section"><span class="nav-icon active"><img src="{{ asset('images/logo/LogoMenu.svg') }}" class="img-fluid w-50" alt="Buddies.zone" title="Buddies.zone" /></span></div>
            <div>Dashboard</div>
          </div>
          <div>Change Distance or Category in the smart search engine.</div>
          <div class="mt-4">
            <a class="btn btn-primary go-to-button" href="{{ route('coaches.index') }}">
              {{ __('VISIT') }}
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="faqhead16">
        <a href="#" class="btn btn-header-link member-item collapsed" data-toggle="collapse" data-target="#faq16" aria-expanded="true" aria-controls="faq16" attr-fullname="STUDIO">STUDIO</a>
      </div>

      <div id="faq16" class="collapse" aria-labelledby="faqhead16" data-parent="#faq">
        <div class="card-body">
          <div class="mb-3">Are you a creative mind or shall we offer you a helping hand?</div>
          <div class="mb-3">As BUDDIES we always try to imagine how we can make life easier for all community members, including our local shops and companies. That’s why we have created a very simple to use creative STUDIO to let you create nice DEALS ads within a few minutes.</div>
          <div class="mb-3">Be creative and surprise the community with your next DEAL today!</div>
          <div class="">Please note: STUDIO is available for Business Accounts only.</div>
          <div class="action-title my-3">Actions</div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section d-flex align-items-center">
              <span class="nav-icon active small"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
              <span class="nav-icon small ml-1"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
            </div>
            <div>Studio</div>
          </div>
          <div class="d-flex align-items-center">
            <div class="icon-section d-flex align-items-center">
              <span class="nav-icon small"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
              <span class="nav-icon active small ml-1"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
            </div>
            <div>Share</div>
          </div>
          <div class="mt-4">
            <a class="btn btn-primary go-to-button" href="{{ route('studio.index') }}">
              {{ __('VISIT') }}
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="faqhead8">
        <a href="#" class="btn btn-header-link member-item collapsed" data-toggle="collapse" data-target="#faq8" aria-expanded="true" aria-controls="faq8" attr-fullname="STORIES">STORIES</a>
      </div>

      <div id="faq8" class="collapse" aria-labelledby="faqhead8" data-parent="#faq">
        <div class="card-body">
          <div class="mb-3">Everyone has a story. In the STORIES channel, you can read personal stories from other community members and write your own. Add a nice picture and let us know where it’s taken. Introduce yourself to the community to find new buddies. You want to do something nice next weekend and want to buddy up with someone to join?</div>
          <div class="mb-3">Don’t forget to share your experience about a great deal from the local shops or companies. This way we can say: “Thank you.” and help them grow as well.</div>
          <div class="mb-3">Make sure you don’t violate the community guidelines. Special views or opinions can be shared in one of your private groups with like-minded buddies.</div>
          <div class="mb-3">As BUDDIES we want to create a positive experience for anyone.</div>
          <div class="">If you like a story, click the heart. How many hearts will you collect today?</div>
          <div class="action-title my-3">Actions</div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section">
              <span class="nav-icon active"><i class="fa fa-heart" aria-hidden="true"></i></span>
            </div>
            <div>Like</div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section d-flex align-items-center">
              <span class="nav-icon active small"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
              <span class="nav-icon small ml-1"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
              <span class="nav-icon small ml-1"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
            </div>
            <div>All stories</div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section d-flex align-items-center">
              <span class="nav-icon small"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
              <span class="nav-icon active small ml-1"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
              <span class="nav-icon small ml-1"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
            </div>
            <div>Buddies stories</div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section d-flex align-items-center">
              <span class="nav-icon small"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
              <span class="nav-icon small ml-1"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
              <span class="nav-icon active small ml-1"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
            </div>
            <div>My stories</div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section">
              <span class="nav-icon"><i class="fa fa-pen" aria-hidden="true"></i></span>
            </div>
            <div>Edit</div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section">
              <span class="nav-icon"><i class="fa fa-trash" aria-hidden="true"></i></span>
            </div>
            <div>Delete</div>
          </div>
          <div class="d-flex align-items-center">
            <div class="icon-section"><span class="nav-icon active"><img src="{{ asset('images/logo/LogoMenu.svg') }}" class="img-fluid w-50" alt="Buddies.zone" title="Buddies.zone" /></span></div>
            <div>Dashboard</div>
          </div>
          <div class="mt-4">
            <a class="btn btn-primary go-to-button" href="{{ route('stories.index') }}">
              {{ __('VISIT') }}
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="faqhead9">
        <a href="#" class="btn btn-header-link member-item collapsed" data-toggle="collapse" data-target="#faq9" aria-expanded="true" aria-controls="faq9" attr-fullname="NEWS">NEWS</a>
      </div>

      <div id="faq9" class="collapse" aria-labelledby="faqhead9" data-parent="#faq">
        <div class="card-body">
          <div class="mb-3">Anything about technical development, updates and maintainance from your IT or Support team will be shared with you in the NEWS channel.</div>
          <div class="">Stay Tuned!</div>
          <div class="action-title my-3">Actions</div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section">
              <span class="nav-icon active"><i class="fa fa-heart" aria-hidden="true"></i></span>
            </div>
            <div>Like</div>
          </div>
          <div class="d-flex align-items-center">
            <div class="icon-section"><span class="nav-icon active"><img src="{{ asset('images/logo/LogoMenu.svg') }}" class="img-fluid w-50" alt="Buddies.zone" title="Buddies.zone" /></span></div>
            <div>Dashboard</div>
          </div>
          <div class="mt-4">
            <a class="btn btn-primary go-to-button" href="{{ route('news.index') }}">
              {{ __('VISIT') }}
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="faqhead10">
        <a href="#" class="btn btn-header-link member-item collapsed" data-toggle="collapse" data-target="#faq10" aria-expanded="true" aria-controls="faq10" attr-fullname="EVENTS">EVENTS</a>
      </div>

      <div id="faq10" class="collapse" aria-labelledby="faqhead10" data-parent="#faq">
        <div class="card-body">
          <div class="mb-3">In the near future BUDDIES plans to organize local events for community members. Why not meet as buddies in real life, share some food or have a dance?</div>
          <div class="mb-3">And ofcourse... invite some friends and family to join the party!</div>
          <div class="">Stay Tuned!</div>
          <div class="action-title my-3">Actions</div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section">
              <span class="nav-icon active"><i class="fa fa-heart" aria-hidden="true"></i></span>
            </div>
            <div>Like</div>
          </div>
          <div class="d-flex align-items-center">
            <div class="icon-section"><span class="nav-icon active"><img src="{{ asset('images/logo/LogoMenu.svg') }}" class="img-fluid w-50" alt="Buddies.zone" title="Buddies.zone" /></span></div>
            <div>Dashboard</div>
          </div>
          <div class="mt-4">
            <a class="btn btn-primary go-to-button" href="{{ route('events.company') }}">
              {{ __('VISIT') }}
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="faqhead11">
        <a href="#" class="btn btn-header-link member-item collapsed" data-toggle="collapse" data-target="#faq11" aria-expanded="true" aria-controls="faq11" attr-fullname="TRADE">BRANDS</a>
      </div>

      <div id="faq11" class="collapse" aria-labelledby="faqhead11" data-parent="#faq">
        <div class="card-body">
          <div class="mb-3">Sometimes you own things, you dont really need and sometimes you need things, you don’t own. With our beautiful planet and nature in mind, we don’t throw away things. Let’s make someone else happy and give things a 2nd life.</div>
          <div class="mb-3">TRADE is a channel to exchange something with someone else. Look at it as an environmental friendly marketplace where money doesn’t play a role.</div>
          <div class="mb-3">Maybe you have a bike you don’t use any longer. Another community member is willing to trade it for a TV. TRADE just made two people are happy and we saved the environment. TOGETHER WE ARE <b>BETTER</b></div>
          <div class="">Maybe you just want to give away something to someone...<br/>That’s appreciated as well :)</div>
          <div class="action-title my-3">Actions</div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section">
              <span class="nav-icon active"><i class="fa fa-heart" aria-hidden="true"></i></span>
            </div>
            <div>Like</div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section d-flex align-items-center">
              <span class="nav-icon active small"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
              <span class="nav-icon small ml-1"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
              <span class="nav-icon small ml-1"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
            </div>
            <div>All trades</div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section d-flex align-items-center">
              <span class="nav-icon small"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
              <span class="nav-icon active small ml-1"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
              <span class="nav-icon small ml-1"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
            </div>
            <div>Buddies trades</div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section d-flex align-items-center">
              <span class="nav-icon small"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
              <span class="nav-icon small ml-1"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
              <span class="nav-icon active small ml-1"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
            </div>
            <div>My trades</div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section">
              <span class="nav-icon"><i class="fa fa-pen" aria-hidden="true"></i></span>
            </div>
            <div>Edit</div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section">
              <span class="nav-icon"><i class="fa fa-trash" aria-hidden="true"></i></span>
            </div>
            <div>Delete</div>
          </div>
          <div class="d-flex align-items-center">
            <div class="icon-section"><span class="nav-icon active"><img src="{{ asset('images/logo/LogoMenu.svg') }}" class="img-fluid w-50" alt="Buddies.zone" title="Buddies.zone" /></span></div>
            <div>Dashboard</div>
          </div>
          <div class="mt-4">
            <a class="btn btn-primary go-to-button" href="{{ route('trades.index') }}">
              {{ __('VISIT') }}
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="faqhead14">
        <a href="#" class="btn btn-header-link member-item collapsed" data-toggle="collapse" data-target="#faq14" aria-expanded="true" aria-controls="faq14" attr-fullname="BE MORE">FILES</a>
      </div>

      <div id="faq14" class="collapse" aria-labelledby="faqhead14" data-parent="#faq">
        <div class="card-body">
          <div class="mb-3">As BUDDIES we know that the world cannot be changed at once. “If we can positively touch the lives of a few so they can positively touch the lives of a few, we are on the right path to serve the many!”</div>
          <div class="mb-3">The BUDDIES <b>BE</b> MORE project is a community driven project to provide more health, more education and more joy to local people in need.</div>
          <div class="mb-2"><b>USUAL</b> PROJECT</div>
          <div class="mb-3">Many projects have a business model attached. This makes that after paying huge salaries and large overhead costs, only a very small percentage of donations end up where they belong.</div>
          <div class="mb-2"><b>BE</b> MORE PROJECT</div>
          <div class="mb-3">BUDDIES uses a different approach. As community we stand together and we focus on local help. 100% will end up where it belongs. No matter if we provide a bag filled with healthy food or we organize a special day for kids with a termal illness, the community will always provide a helping hand and the needed funds to make things happen. No one expects a director salary in return.</div>
          <div class="">WE ARE BETTER <b>TOGETHER</b><br/>Stay tuned!</div>
          <div class="mt-4">
            <a class="btn btn-primary go-to-button" href="javascript:;">
              {{ __('VISIT') }}
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="faqhead15">
        <a href="#" class="btn btn-header-link member-item collapsed" data-toggle="collapse" data-target="#faq15" aria-expanded="true" aria-controls="faq15" attr-fullname="SHARE">SALES</a>
      </div>

      <div id="faq15" class="collapse" aria-labelledby="faqhead15" data-parent="#faq">
        <div class="card-body">
          <div class="mb-3">We love to show our enthusiasm to the world to let our amazing community grow. The more like-minded people, the more fun we all have.</div>
          <div class="mb-3">Quick question: Have you ever been watching a movie to recommended it later to a friend? The movie company paid you for promoting, right?</div>
          <div class="mb-3">At BUDDIES we think different. SHARE provides you with a personal referral link that you can share with anyone you know. When people use your link and pay for a subscription, you will be rewarded with credits as a “THANK YOU.”</div>
          <div class="mb-3">As you know, we don’t use advertising companies for promotions. We believe that the enthusiasm from a happy user has much more value.</div>
          <div class="mb-3">In SHARE, you will find a nice collection of social media ads and movies that can be shared on any social platform. Let’s give BUDDIES the right promotion. Don’t forget to place your referral link by posting, it might bring you more credits.</div>
          <div class="">Let’s show the world our real colors and let’s go viral.</div>
          <div class="mt-4">
            <a class="btn btn-primary go-to-button" href="{{ route('incentives.index') }}">
              {{ __('VISIT') }}
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="faqhead17">
        <a href="#" class="btn btn-header-link member-item collapsed" data-toggle="collapse" data-target="#faq17" aria-expanded="true" aria-controls="faq17" attr-fullname="WALLET">WALLET</a>
      </div>

      <div id="faq17" class="collapse" aria-labelledby="faqhead17" data-parent="#faq">
        <div class="card-body">
          <div class="mb-3">What’s in your wallet?</div>
          <div class="mb-3">Don’t worry, that wasn’t a real question to you directly. :)</div>
          <div class="mb-3">In your WALLET, all credits you have earned as a reward for promoting BUDDIES throught your referral link will be visible. We are developing a future system to add a real value to your credits so the can be used on the platform.</div>
          <div class="mb-3">For example. Everytime you want to pay a subscription, the system will check your wallet how much credits it contains. If the value is enough to pay your subscription, you can choose to use your credits instead of any other payment method.</div>
          <div class="">As we love transparency, you will find a list with everyone that signed up through your referral link including their status. In this overview you can follow how your collected credits are earned.</div>
          <div class="action-title my-3">Actions</div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section d-flex align-items-center">
              <span class="nav-icon active small"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
              <span class="nav-icon small ml-1"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
            </div>
            <div>Wallet</div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <div class="icon-section d-flex align-items-center">
              <span class="nav-icon small"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
              <span class="nav-icon active small ml-1"><i class="fa-solid fa-circle" aria-hidden="true"></i></span>
            </div>
            <div>Referral list</div>
          </div>
          <div class="">Now, let’s share BUDDIES, have some fun and earn some credits.</div>
          <div class="mt-4">
            <a class="btn btn-primary go-to-button" href="{{ route('wallet.index') }}">
              {{ __('VISIT') }}
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>