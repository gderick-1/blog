
     <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
         <div class="container">
             <div class="navbar-header">
                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="myNavBar">
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                 </button>
                 <a class="navbar-brand" href="#">Logo</a>
             </div>

             <div class="collapse navbar-collapse" id="frontEnd">
                 <ul class="nav navbar-nav">
                     <li><a href="{{route('blog.index')}}">Blog</a></li>
                     {{--<li><a href="#">Articles</a></li>
                     <li><a href="#">Innovation</a></li>--}}
                     <li><a href="#">education</a></li>
                     <li><a href="#">Forum</a></li>
                     <li><a href="{{route('contact')}}">Contact</a></li>
                     <li><a href="{{route('about')}}">About</a></li>

                 </ul>
                 <ul class="nav navbar-nav navbar-right">
                     <li><a href="#"><span class="fa fa-sign-in fa-fw"></span>login</a></li>
                 </ul>
             </div>

         </div>
     </nav>


