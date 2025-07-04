<div class="navigation-menu-group">
    <div class="open" id="dashboards">
        <ul>
         <li class="navigation-divider">Dashboard</li>
         <li>
            <a  href="{{route('admin.index')}}" data-toggle="tooltip" data-placement="right" title="Dashboard"
           data-nav-target="#dashboards">
           <i class="fa fa-home"></i> &nbsp;Dashboard</a>
        </li>

        <li class="navigation-divider">Website Menus</li>
        <li>
            <a  href="" data-toggle="tooltip" data-placement="right" title="Manage Menus"
           data-nav-target="#dashboards">
            <i class="fa fa-bars"></i>&nbsp; Manage Menu</a>
            <ul>
                <li><a href="{{route('admin.menu.index')}}"> Manage Menu</a></li>
            </ul>
        </li>
        <li class="navigation-divider">Website Pages</li>
               <li>
               <a  href="" data-toggle="tooltip" data-placement="right" title="Manage Pages"
               data-nav-target="#dashboards">
                <i class="fa fa-file"></i> &nbsp; Manage Pages
                </a>
                <ul>
                    <li><a href="{{route('admin.manage.pages')}}">Manage Pages</a></li>
                    <li><a href="{{route('admin.Pages.Create')}}">Create Page</a></li>
              </ul>
        </li>
        <li>
            <a  href="" data-toggle="tooltip" data-placement="right" title="Manage FAQ"
               data-nav-target="#dashboards">
                <i class=" fa fa-question-circle"></i>&nbsp; Manage FAQ</a>
                <ul>
                    <li><a href="{{route('admin.faqCreate')}}">Create FAQ</a></li>
                    <li><a href="{{route('admin.faq.index')}}">Manage FAQ</a></li>
                </ul>
            </li>
      
         <li>
            <a  href="" data-toggle="tooltip" data-placement="right" title="Manage Blogs"
               data-nav-target="#dashboards">
                <i class="fa fa-newspaper-o"></i>&nbsp; Manage Blog</a>
                <ul>
                      <li><a href="{{route('admin.BlogsCreate')}}">Post Blog</a></li>
                      <li><a href="{{route('admin.blogs.index')}}">Manage Blog</a></li>
                </ul>
        </li>  
        
        <li>
            <a  href="" data-toggle="tooltip" data-placement="right" title="Manage Jobs"
               data-nav-target="#dashboards">
                <i class="fa fa-tasks"></i>&nbsp; Manage Jobs</a>
                <ul>
                      <li><a href="{{route('admin.JobsCreate')}}">Post Jobs</a></li>
                      <li><a href="{{route('admin.Jobs.index')}}">Manage Jobs</a></li>
                      <li><a href="{{route('admin.category.index')}}">Manage Industry</a></li>
                </ul>
        </li> 
        
        
        <li class="navigation-divider">Settings</li>
        <li>
            <a  href="" data-toggle="tooltip" data-placement="right" title="Manage Settings"
               data-nav-target="#dashboards">
                <i class="fa fa-globe"></i>&nbsp; Wesbite Settings</a>
                <ul>
                      <li><a href="{{route('admin.settings.index')}}">Manage Contents</a></li>
                </ul>
        </li> 
        <li>
            <a  href="" data-toggle="tooltip" data-placement="right" title="Manage Admin"
               data-nav-target="#dashboards">
                <i class="fa fa-users"></i>&nbsp; Manage Admin</a>
                <ul>
                      <li><a href="{{route('admin.userAccount')}}">Manage Admin</a></li>
                </ul>
        </li>  

         
        </ul>
    </div>
</div>