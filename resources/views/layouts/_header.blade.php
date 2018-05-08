<header class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ route('home') }}">Liuweb App</a>
      <button type="button" class="navbar-toggle">
        <span class="sr-only">切换导航</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <ul class="nav navbar-nav navbar-right offcanvasMenu-dis liu-underline">
      <li><a href="{{ route('help') }}">帮助</a></li>
      <li><a href="#">登录</a></li>
    </ul>
  </div>
  <div class="container-fluid offcanvasMenu-dis">
    <ul class="nav navbar-nav liu-underline">
      <li><a href="#">最新活动</a></li>
      <li><a href="javascript:void(0)">产品</a></li>
      <li><a href="#">解决方案</a></li>
      <li><a href="#">定价</a></li>
      <li><a href="#">ET大脑</a></li>
      <li><a href="#">数据智能</a></li>
      <li><a href="#">安全</a></li>
      <li><a href="#">云市场</a></li>
      <li><a href="#">支持与服务</a></li>
      <li><a href="#">合作伙伴</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="{{ route('signup') }}" id="signup" class="btn btn-primary">开始注册</a></li>
    </ul>
  </div>
  {{--menu--}}
  <div id="offcanvas" class="collapse offcanvasMenu-shown"><ul>
      <li><a href="features.html">Features</a></li>
      <li><a href="tour.html">Tour</a></li>
      <li class="offcanvas-has-dropdown">
        <a href="#">Dropdown</a>
        <ul class="dropdown">
          <li><a href="#">Web Design</a></li>
          <li><a href="#">eCommerce</a></li>
          <li><a href="#">Branding</a></li>
          <li><a href="#">API</a></li>
        </ul>
      </li>
      <li><a href="pricing.html">Pricing</a></li>
      <li><a href="contact.html">Contact</a></li>
      <li class="btn-cta"><a href="#"><span>Get started</span></a></li>
    </ul>
  </div>
</header>
