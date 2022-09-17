<ul>
    <li class="{{ (request()->is('admin/dashbard*')) ? 'active-menu' : '' }}"><a href="{{ route('admin.dashboard') }}" role="menuitem"><i class="far fa-chart-bar"></i> Dashboard</a></li>
    <li class="active-menu"><a><i class="fas fa-user"></i>Users</a>
        <ul>
            <li>
                <a href="{{ route('admin.users.index') }}"><i class="fas fa-arrow-right"></i> User</a>
            </li>
            <li>
                <a href="user-edit.html"><i class="fas fa-arrow-right"></i> User edit</a>
            </li>
            <li>
                <a href="{{ route('admin.users.create') }}">New user</a>
            </li>
        </ul>
    </li>
    <li class="active-menu"><a><i class="fas fa-user-lock"></i>Roles</a>
        <ul>
            <li>
                <a href="{{ route('admin.roles.index') }}"><i class="fas fa-arrow-right"></i> Roles</a>
            </li>
            <li>
                <a href="{{ route('admin.roles.create') }}"><i class="fas fa-arrow-right"></i> New Role</a>
            </li>
        </ul>
    </li>
    <li class="active-menu"><a><i class="fas fa-list"></i>Categories</a>
        <ul>
            <li>
                <a href="{{ route('admin.categories.index') }}"><i class="fas fa-arrow-right"></i> Categories</a>
            </li>
            <li>
                <a href="{{ route('admin.categories.create') }}"><i class="fas fa-arrow-right"></i> New Category</a>
            </li>
        </ul>
    </li>
    <li><a href="{{ route('admin.packages.create') }}"><i class="fas fa-umbrella-beach"></i>Add Package</a></li>
    <li>
        <a><i class="fas fa-hotel"></i></i>packages</a>
        <ul>
            <li><a href="{{ route('admin.packages.index') }}"><i class="fas fa-arrow-right"></i> Active</a></li>
            <li><a href="db-package-pending.html"><i class="fas fa-arrow-right"></i> Pending</a></li>
            <li><a href="db-package-expired.html"><i class="fas fa-arrow-right"></i> Expired</a></li>
        </ul>   
    </li>
    <li><a href="{{ route('admin.faqs.index') }}" role="menuitem"><i class="fa fa-question"></i> Faqs</a></li>
    <li><a href="{{ route('admin.bookings.index') }}" role="menuitem"><i class="fas fa-ticket-alt"></i> Booking &amp; Enquiry</a></li>
    <li><a href="{{ route('admin.contacts.index') }}" role="menuitem"><i class="fa fa-phone"></i>Contact &amp; Enquiry</a></li>
    <li><a href="{{ route('admin.reviews.index') }}" role="menuitem"><i class="fas fa-comments"></i>Package Reviews</a></li>
    <li>
        <a><i class="fas fa-blog"></i>Blog</a>
        <ul>
            <li><a href="{{ route('admin.posts.index') }}"><i class="fas fa-arrow-right"></i> Posts</a></li>
            <li><a href="{{ route('admin.posts.create') }}"><i class="fas fa-arrow-right"></i> New Post</a></li>
            <li><a href="{{ route('admin.tags.index') }}"><i class="fas fa-arrow-right"></i> Tags</a></li>
            <li><a href="{{ route('admin.tags.create') }}"><i class="fas fa-arrow-right"></i> New Tag</a></li>
        </ul>   
    </li>
    <li><a href="{{ route('admin.settings.index') }}" role="menuitem"><i class="fa fa-wrench"></i>Website Settings</a></li>
    <li><a href="{{ route('logout') }}"
        onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" role="menuitem"><i class="fas fa-sign-out-alt"></i> Logout</a><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form></li>
</ul>

