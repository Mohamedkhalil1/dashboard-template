@props(['menuTitle' => null , 'title' => '' , 'url' => '#' , 'status' => 0])
<li class="sidebar-title">{{$menuTitle}}</li>
<li class="sidebar-item {{ $status ?  'active' : ''}}">
    <a href="{{ $url }}" class='sidebar-link'>
        <i class="bi bi-grid-fill"></i>
        <span>{{$title}}</span>
    </a>
</li>
