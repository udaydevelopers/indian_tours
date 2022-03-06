<ul>
    <li><a href="{{ route('admin.dashboard') }}" role="menuitem"><i class="far fa-chart-bar"></i> Dashboard</a></li>
    <li class="slicknav_collapsed slicknav_parent {{ (request()->is('admin/users*')) ? 'active-menu' : '' }}"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style="outline: none;"><a><i class="fas fa-user"></i>Users</a>
        <span class="slicknav_arrow"></span></a><ul role="menu" class="slicknav_hidden" aria-hidden="true" style="display: none;">
            <li>
                <a href="{{ route('admin.users.index') }}" role="menuitem" tabindex="-1">User</a>
            </li>
            <li>
                <a href="{{ route('admin.users.create') }}" role="menuitem" tabindex="-1">New user</a>
            </li>
        </ul>
    </li>
    <li class="slicknav_collapsed slicknav_parent {{ (request()->is('admin/roles*')) ? 'active-menu' : '' }}">
        <a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style="outline: none;"><a><i class="fas fa-user"></i>Roles</a>
        <span class="slicknav_arrow"></span></a><ul role="menu" class="slicknav_hidden" aria-hidden="true" style="display: none;">
            <li>
                <a href="{{ route('admin.roles.index') }}" role="menuitem" tabindex="-1">Roles</a>
            </li>
            <li>
                <a href="{{ route('admin.roles.create') }}" role="menuitem" tabindex="-1">New Role</a>
            </li>
        </ul>
    </li>
    <li><a href="{{ route('admin.packages.create') }}" role="menuitem"><i class="fas fa-umbrella-beach"></i>Add Package</a></li>
    <li class="slicknav_collapsed slicknav_parent {{ (request()->is('admin/packages*')) ? 'active-menu' : '' }}">
        <a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style="outline: none;">
        <a><i class="fas fa-hotel"></i>packages</a>
        <span class="slicknav_arrow"></span></a><ul role="menu" class="slicknav_hidden" aria-hidden="true" style="display: none;">
            <li><a href="{{ route('admin.packages.index') }}" role="menuitem" tabindex="-1">Active</a></li>
            <li><a href="db-package-pending.html" role="menuitem" tabindex="-1">Pending</a></li>
            <li><a href="db-package-expired.html" role="menuitem" tabindex="-1">Expired</a></li>
        </ul>   
    </li>
    <li><a href="db-booking.html" role="menuitem"><i class="fas fa-ticket-alt"></i> Booking &amp; Enquiry</a></li>
    <li><a href="db-wishlist.html" role="menuitem"><i class="far fa-heart"></i>Wishlist</a></li>
    <li><a href="db-comment.html" role="menuitem"><i class="fas fa-comments"></i>Comments</a></li>
    <li><a href="{{ route('logout') }}"
        onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" role="menuitem"><i class="fas fa-sign-out-alt"></i> Logout</a><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form></li>
</ul>
