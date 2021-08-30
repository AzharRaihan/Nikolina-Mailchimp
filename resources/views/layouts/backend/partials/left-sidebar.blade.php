  <div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
      <!--- Sidemenu -->
      <div id="sidebar-menu">
        <ul>
          <li class="text-muted menu-title">Navigation</li>
          <li class="has_sub">
            <a href="{{ route('admin.dashboard') }}" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i><span> Dashboard </span> </a>
          </li>
          <li class="has_sub">
            <a href="{{ route('admin.contact.index') }}" class="waves-effect"><i class="fa fa-address-book"></i><span> Contact Us </span> </a>
          </li>
          <li class="has_sub">
            <a href="{{ route('admin.subscribers.index') }}" class="waves-effect"><i class="zmdi zmdi-email"></i><span> Subscribers </span> </a>
          </li>
          <li class="has_sub">
            <a href="{{ route('admin.lets-talk.index') }}" class="waves-effect"><i class="fa fa-users"></i><span> Lets Talk </span> </a>
          </li>
          
        </ul>
        <div class="clearfix"></div>
      </div>
      <!-- Sidebar -->
      <div class="clearfix"></div>
    </div>
  </div>