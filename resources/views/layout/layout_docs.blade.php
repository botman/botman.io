
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{$title}} - BotMan - The PHP messaging and chatbot library</title>
  <link rel="stylesheet" type="text/css" href="/css/app.css">
  <link rel="stylesheet" type="text/css" href="/css/prism.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="icon" href="/favicon.png">
</head>
<body>
  <section class="hero has-text-centered">
    <div class="hero-head">
      <div class="container is-fluid">
        <nav class="nav">
          <div class="container is-fluid">
            <div class="nav-left">
              <a class="nav-item brand brand-docs" href="/">
                @svg('botman-head')
                <span class="is-hidden-mobile">BotMan</span>
              </a>

              <div class="nav-item search">
                <p class="search control has-icons-left">
                  <input class="input" type="text" placeholder="" id="search-input">
                  <span class="icon is-small is-left">
                    <i class="fa fa-search"></i>
                  </span>
                </p>
              </div>
            </div>
            <span class="nav-toggle">
                <span></span>
                <span></span>
                <span></span>
              </span>
            <div class="nav-right nav-menu">
              <a class="nav-item" href="https://github.com/botman/botman">
                GitHub
              </a>
              <a class="nav-item" href="https://twitter.com/botman_io">
                Twitter
              </a>
              <a class="nav-item" href="https://slack.botman.io/">
                Community
              </a>
          </div>
          </div>
        </nav>
      </div>
    </div>
  </section>
  <section id="documentation">
    @yield('content')

    <footer>
      <div class="container">
        <div class="content has-text-centered">
          <div class="columns">
            <div class="column">
              <strong>BotMan</strong> by <a href="https://twitter.com/marcelpociot">Marcel Pociot</a>.<br />
              <p class="imprint">
                <a href="/imprint">Imprint</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </section>
  <div id="ad" class="is-hidden-mobile">
    <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1673&serve=C6AILKT&placement=botmanio" id="_carbonads_js"></script>
  </div>

  <script>
      var algolia_app_id      = '<?php echo Config::get('algolia.connections.main.id', false); ?>';
      var algolia_search_key  = '<?php echo Config::get('algolia.connections.main.search_key', false); ?>';
              @if (isset($currentVersion))
      var version             = '<?php echo $currentVersion; ?>';
    @endif
  </script>

  @include('partials.algolia_template')

  <script async type="text/javascript" src="/js/app.js"></script>

  <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-75386803-2', 'auto');
      ga('send', 'pageview');
  </script>
</body>
</html>
