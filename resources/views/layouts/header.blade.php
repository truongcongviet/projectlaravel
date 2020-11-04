<header class="">
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="index.html"><h2>Sixteen <em>Clothing</em></h2></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <?php
      function active($currect_page){
        $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
        $url = end($url_array);  
        if($currect_page == $url){
            echo 'active'; //class name in css 
        } 
      }
      ?>
        <ul class="navbar-nav ml-auto">
          
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('home')}}">Home
            </a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="{{ route('product')}}">Our Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('company')}}">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>