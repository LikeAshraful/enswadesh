<div class="list-group">
    <a href="{{ route('backend.settings.index') }}" class="list-group-item list-group-item-action {{ Route::is('backend.settings.index') ? 'active' : ''  }}">
        General
    </a>
    <a href="{{ route('backend.settings.appearance.index') }}" class="list-group-item list-group-item-action {{ Route::is('backend.settings.appearance.index') ? 'active' : ''  }}">
        Appearance
    </a>
    <a href="{{ route('backend.settings.mail.index') }}" class="list-group-item list-group-item-action {{ Route::is('backend.settings.mail.index') ? 'active' : ''  }}">
        Mail
    </a>
    <a href="{{ route('backend.settings.socialite.index') }}" class="list-group-item list-group-item-action {{ Route::is('backend.settings.socialite.index') ? 'active' : ''  }}">
        Socialite
    </a>
</div>
