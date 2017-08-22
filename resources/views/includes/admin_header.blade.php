
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="myNavBar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Logo</a>
            </div>

            <div class="collapse navbar-collapse" id="myNavBar">
                <ul class="nav navbar-nav">
                    <li {{ Request::is('admin') ? 'class=active' : ''}}><a href="{{ route('admin.index') }}">Dashboard</a></li>
                    <li {{ Request::is('admin/blog/post*') ? 'class=active' : ''}}><a href="{{ route('admin.blog.index') }}">Posts</a></li>
                    <li {{ Request::is('admin/blog/categories*')|| Request::is('admin/blog/category*')? 'class=active' : ''}}><a href="{{ route('admin.blog.category') }}">Category</a></li>
                    <li {{ Request::is('admin/blog/contact/*') ? 'class=active' : ''}}><a href="#">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="fa fa-sign-out fa-fw"></span>Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
