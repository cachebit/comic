<nav class="nav has-shadow" id="mainNav">
  <div class="container">

    <div class="nav-left">
      <a class="nav-item">
        <img src="/site/lists-up-logo.png" alt="Bulma logo">
      </a>
      <a class="nav-item is-tab is-hidden-mobile is-active" href="{{ route('home') }}">首页</a>
      <a class="nav-item is-tab is-hidden-mobile" href="{{ route('kuos.index') }}">扩列</a>
      <a class="nav-item is-tab is-hidden-mobile" href="{{ route('about') }}">关于</a>
    </div>

    <span class="nav-toggle">
      <span></span>
      <span></span>
      <span></span>
    </span>

    <div class="nav-right nav-menu">
      <a class="nav-item is-tab is-hidden-tablet is-active" href="{{ route('home') }}">首页</a>
      <a class="nav-item is-tab is-hidden-tablet" href="{{ route('kuos.index') }}">扩列</a>
      <a class="nav-item is-tab is-hidden-tablet" href="{{ route('about') }}">关于</a>
      <a class="nav-item is-tab" href="{{ route('signin') }}">登录</a>
      <a class="nav-item is-tab" href="{{ route('signup') }}">注册</a>
    </div>

  </div>
</nav>
