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
            title="Forms"
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

        <x-menu-item
            title="Tables"
            icon="bi bi-grid-1x2-fill"
            :isSingle="false"
            :items="
                [
                    [
                        'title'  => 'Simple Table(Transactions)',
                        'url'    => route('transaction.index'),
                        'active' => isActive('transaction.index')
                     ],
                      [
                        'title'  => 'Advanced Table(Transactions)',
                        'url'    => route('transaction.advanced-index'),
                        'active' => isActive('transaction.advanced-index')
                     ],
                ]
            "
        />
    </ul>
</div>
<button class="sidebar-toggler btn x"><i data-feather="x"></i></button>



