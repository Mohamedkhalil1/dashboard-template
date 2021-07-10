<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Menu</li>
        <x-menu-item
            title="Dashboard"
            icon="bi bi-grid-fill"
            url="{{ route('dashboard') }}"
            isActive="{{ isActive('dashboard') }}"
            :isSingle="true"/>

        <x-menu-item
            title="Form"
            icon="bi bi-file-earmark-medical-fill"
            :isSingle="false"
            :items="
                [
                    [
                        'title'  => 'Horizontal Form (Profile)',
                        'url'    => route('profile.show'),
                        'active' => isActive('profile.show')
                     ],
                     [
                         'title'  => 'Vertical Form (Create Product)',
                         'url'    => route('user.create'),
                         'active' => isActive('user.create')
                    ]
                ]
            "
        />

    </ul>
</div>
<button class="sidebar-toggler btn x"><i data-feather="x"></i></button>



