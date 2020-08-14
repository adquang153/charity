<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{asset('images/admin/sidebar-1.jpg')}}">
    <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo"><a href="{{route('admin.index')}}" class="simple-text logo-normal">
        Admin Manager
    </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item active  ">
                <a class="nav-link" href="{{route('admin.index')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('admin.user.index')}}">
                    <i class="material-icons">person</i>
                    <p>User Profile</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('admin.campaign.index')}}">
                <i class="material-icons">payments</i>
                    <p>Campaign</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('admin.post.index')}}">
                <i class="material-icons">pageview</i>
                    <p>Post</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('admin.donate')}}">
                <i class="material-icons">local_atm</i>
                    <p>Donate</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('admin.comment')}}">
                    <i class="material-icons">speaker_notes</i>
                    <p>Comments</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('admin.category')}}">
                    <i class="material-icons">local_offer</i>
                    <p>Category</p>
                </a>
            </li>
        </ul>
    </div>
</div>