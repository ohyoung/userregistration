  


<!DOCTYPE html>
<html>
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# githubog: http://ogp.me/ns/fb/githubog#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>userregistration/www/newUser.php at master · OpenMOOC/userregistration · GitHub</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub" />
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub" />
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-144.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144.png" />
    <link rel="logo" type="image/svg" href="http://github-media-downloads.s3.amazonaws.com/github-logo.svg" />
    <link rel="xhr-socket" href="/_sockets" />


    <meta name="msapplication-TileImage" content="/windows-tile.png" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="selected-link" value="repo_source" data-pjax-transient />
    <meta content="collector.githubapp.com" name="octolytics-host" /><meta content="github" name="octolytics-app-id" />

    
    
    <link rel="icon" type="image/x-icon" href="/favicon.ico" />

    <meta content="authenticity_token" name="csrf-param" />
<meta content="ndo73dFBoEfDlQlct+QCgRu8gxlJeiyPEM9s9PkOx04=" name="csrf-token" />

    <link href="https://a248.e.akamai.net/assets.github.com/assets/github-5c7be408fce39b9ed9d174f787c73f1d9e497b50.css" media="all" rel="stylesheet" type="text/css" />
    <link href="https://a248.e.akamai.net/assets.github.com/assets/github2-883c2d036f95a0fb486a5d977a84cb0b91a58353.css" media="all" rel="stylesheet" type="text/css" />
    


      <script src="https://a248.e.akamai.net/assets.github.com/assets/frameworks-92d138f450f2960501e28397a2f63b0f100590f0.js" type="text/javascript"></script>
      <script src="https://a248.e.akamai.net/assets.github.com/assets/github-af722d045ae48a4eaa88da3a9a035a24422643e0.js" type="text/javascript"></script>
      
      <meta http-equiv="x-pjax-version" content="181cf070024d3da4f5793e9a2d7b98a5">

        <link data-pjax-transient rel='permalink' href='/OpenMOOC/userregistration/blob/4050ba3968f9534416dce2166a80c07f81c63850/www/newUser.php'>
    <meta property="og:title" content="userregistration"/>
    <meta property="og:type" content="githubog:gitrepository"/>
    <meta property="og:url" content="https://github.com/OpenMOOC/userregistration"/>
    <meta property="og:image" content="https://secure.gravatar.com/avatar/4bd3585de414f496977f450e2802524c?s=420&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png"/>
    <meta property="og:site_name" content="GitHub"/>
    <meta property="og:description" content="userregistration - Module for user registration in SimpleSAMLphp"/>
    <meta property="twitter:card" content="summary"/>
    <meta property="twitter:site" content="@GitHub">
    <meta property="twitter:title" content="OpenMOOC/userregistration"/>

    <meta name="description" content="userregistration - Module for user registration in SimpleSAMLphp" />


    <meta content="2060993" name="octolytics-dimension-user_id" /><meta content="5224236" name="octolytics-dimension-repository_id" />
  <link href="https://github.com/OpenMOOC/userregistration/commits/master.atom" rel="alternate" title="Recent Commits to userregistration:master" type="application/atom+xml" />

  </head>


  <body class="logged_out page-blob  vis-public env-production  ">
    <div id="wrapper">

      

      
      
      

      
      <div class="header header-logged-out">
  <div class="container clearfix">

    <a class="header-logo-wordmark" href="https://github.com/">Github</a>

    <div class="header-actions">
      <a class="button primary" href="https://github.com/signup">Sign up</a>
      <a class="button" href="https://github.com/login?return_to=%2FOpenMOOC%2Fuserregistration%2Fblob%2Fmaster%2Fwww%2FnewUser.php">Sign in</a>
    </div>

    <div class="command-bar js-command-bar  in-repository">


      <ul class="top-nav">
          <li class="explore"><a href="https://github.com/explore">Explore</a></li>
        <li class="features"><a href="https://github.com/features">Features</a></li>
          <li class="blog"><a href="https://github.com/blog">Blog</a></li>
      </ul>
        <form accept-charset="UTF-8" action="/search" class="command-bar-form" id="top_search_form" method="get">
  <a href="/search/advanced" class="advanced-search-icon tooltipped downwards command-bar-search" id="advanced_search" title="Advanced search"><span class="octicon octicon-gear "></span></a>

  <input type="text" data-hotkey="/ s" name="q" id="js-command-bar-field" placeholder="Search or type a command" tabindex="1" autocapitalize="off"
    
      data-repo="OpenMOOC/userregistration"
      data-branch="master"
      data-sha="742f8206e61cad57b0877dd904af8c89cfb5c16d"
  >

    <input type="hidden" name="nwo" value="OpenMOOC/userregistration" />

    <div class="select-menu js-menu-container js-select-menu search-context-select-menu">
      <span class="minibutton select-menu-button js-menu-target">
        <span class="js-select-button">This repository</span>
      </span>

      <div class="select-menu-modal-holder js-menu-content js-navigation-container">
        <div class="select-menu-modal">

          <div class="select-menu-item js-navigation-item selected">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" class="js-search-this-repository" name="search_target" value="repository" checked="checked" />
            <div class="select-menu-item-text js-select-button-text">This repository</div>
          </div> <!-- /.select-menu-item -->

          <div class="select-menu-item js-navigation-item">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" name="search_target" value="global" />
            <div class="select-menu-item-text js-select-button-text">All repositories</div>
          </div> <!-- /.select-menu-item -->

        </div>
      </div>
    </div>

  <span class="octicon help tooltipped downwards" title="Show command bar help">
    <span class="octicon octicon-question"></span>
  </span>


  <input type="hidden" name="ref" value="cmdform">

  <div class="divider-vertical"></div>

</form>
    </div>

  </div>
</div>


      

      


            <div class="site hfeed" itemscope itemtype="http://schema.org/WebPage">
      <div class="hentry">
        
        <div class="pagehead repohead instapaper_ignore readability-menu ">
          <div class="container">
            <div class="title-actions-bar">
              

<ul class="pagehead-actions">



    <li>
      <a href="/login?return_to=%2FOpenMOOC%2Fuserregistration"
        class="minibutton js-toggler-target star-button entice tooltipped upwards"
        title="You must be signed in to use this feature" rel="nofollow">
        <span class="octicon octicon-star"></span>Star
      </a>
      <a class="social-count js-social-count" href="/OpenMOOC/userregistration/stargazers">
        4
      </a>
    </li>
    <li>
      <a href="/login?return_to=%2FOpenMOOC%2Fuserregistration"
        class="minibutton js-toggler-target fork-button entice tooltipped upwards"
        title="You must be signed in to fork a repository" rel="nofollow">
        <span class="octicon octicon-git-branch"></span>Fork
      </a>
      <a href="/OpenMOOC/userregistration/network" class="social-count">
        1
      </a>
    </li>
</ul>

              <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title public">
                <span class="repo-label"><span>public</span></span>
                <span class="mega-octicon octicon-repo"></span>
                <span class="author vcard">
                  <a href="/OpenMOOC" class="url fn" itemprop="url" rel="author">
                  <span itemprop="title">OpenMOOC</span>
                  </a></span> /
                <strong><a href="/OpenMOOC/userregistration" class="js-current-repository">userregistration</a></strong>
              </h1>
            </div>

            
  <ul class="tabs">
    <li class="pulse-nav"><a href="/OpenMOOC/userregistration/pulse" class="js-selected-navigation-item " data-selected-links="pulse /OpenMOOC/userregistration/pulse" rel="nofollow"><span class="octicon octicon-pulse"></span></a></li>
    <li><a href="/OpenMOOC/userregistration" class="js-selected-navigation-item selected" data-selected-links="repo_source repo_downloads repo_commits repo_tags repo_branches /OpenMOOC/userregistration">Code</a></li>
    <li><a href="/OpenMOOC/userregistration/network" class="js-selected-navigation-item " data-selected-links="repo_network /OpenMOOC/userregistration/network">Network</a></li>
    <li><a href="/OpenMOOC/userregistration/pulls" class="js-selected-navigation-item " data-selected-links="repo_pulls /OpenMOOC/userregistration/pulls">Pull Requests <span class='counter'>0</span></a></li>

      <li><a href="/OpenMOOC/userregistration/issues" class="js-selected-navigation-item " data-selected-links="repo_issues /OpenMOOC/userregistration/issues">Issues <span class='counter'>0</span></a></li>



    <li><a href="/OpenMOOC/userregistration/graphs" class="js-selected-navigation-item " data-selected-links="repo_graphs repo_contributors /OpenMOOC/userregistration/graphs">Graphs</a></li>


  </ul>
  
<div class="tabnav">

  <span class="tabnav-right">
    <ul class="tabnav-tabs">
          <li><a href="/OpenMOOC/userregistration/tags" class="js-selected-navigation-item tabnav-tab" data-selected-links="repo_tags /OpenMOOC/userregistration/tags">Tags <span class="counter blank">0</span></a></li>
    </ul>
  </span>

  <div class="tabnav-widget scope">


    <div class="select-menu js-menu-container js-select-menu js-branch-menu">
      <a class="minibutton select-menu-button js-menu-target" data-hotkey="w" data-ref="master">
        <span class="octicon octicon-branch"></span>
        <i>branch:</i>
        <span class="js-select-button">master</span>
      </a>

      <div class="select-menu-modal-holder js-menu-content js-navigation-container">

        <div class="select-menu-modal">
          <div class="select-menu-header">
            <span class="select-menu-title">Switch branches/tags</span>
            <span class="octicon octicon-remove-close js-menu-close"></span>
          </div> <!-- /.select-menu-header -->

          <div class="select-menu-filters">
            <div class="select-menu-text-filter">
              <input type="text" id="commitish-filter-field" class="js-filterable-field js-navigation-enable" placeholder="Filter branches/tags">
            </div>
            <div class="select-menu-tabs">
              <ul>
                <li class="select-menu-tab">
                  <a href="#" data-tab-filter="branches" class="js-select-menu-tab">Branches</a>
                </li>
                <li class="select-menu-tab">
                  <a href="#" data-tab-filter="tags" class="js-select-menu-tab">Tags</a>
                </li>
              </ul>
            </div><!-- /.select-menu-tabs -->
          </div><!-- /.select-menu-filters -->

          <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket css-truncate" data-tab-filter="branches">

            <div data-filterable-for="commitish-filter-field" data-filterable-type="substring">

                <div class="select-menu-item js-navigation-item selected">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/OpenMOOC/userregistration/blob/master/www/newUser.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="master" rel="nofollow" title="master">master</a>
                </div> <!-- /.select-menu-item -->
            </div>

              <div class="select-menu-no-results">Nothing to show</div>
          </div> <!-- /.select-menu-list -->


          <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket css-truncate" data-tab-filter="tags">
            <div data-filterable-for="commitish-filter-field" data-filterable-type="substring">

            </div>

            <div class="select-menu-no-results">Nothing to show</div>

          </div> <!-- /.select-menu-list -->

        </div> <!-- /.select-menu-modal -->
      </div> <!-- /.select-menu-modal-holder -->
    </div> <!-- /.select-menu -->

  </div> <!-- /.scope -->

  <ul class="tabnav-tabs">
    <li><a href="/OpenMOOC/userregistration" class="selected js-selected-navigation-item tabnav-tab" data-selected-links="repo_source /OpenMOOC/userregistration">Files</a></li>
    <li><a href="/OpenMOOC/userregistration/commits/master" class="js-selected-navigation-item tabnav-tab" data-selected-links="repo_commits /OpenMOOC/userregistration/commits/master">Commits</a></li>
    <li><a href="/OpenMOOC/userregistration/branches" class="js-selected-navigation-item tabnav-tab" data-selected-links="repo_branches /OpenMOOC/userregistration/branches" rel="nofollow">Branches <span class="counter ">1</span></a></li>
  </ul>

</div>

  
  
  


            
          </div>
        </div><!-- /.repohead -->

        <div id="js-repo-pjax-container" class="container context-loader-container" data-pjax-container>
          


<!-- blob contrib key: blob_contributors:v21:ab391b4804cfb2333c9b64d5e92af196 -->
<!-- blob contrib frag key: views10/v8/blob_contributors:v21:ab391b4804cfb2333c9b64d5e92af196 -->


<div id="slider">
    <div class="frame-meta">

      <p title="This is a placeholder element" class="js-history-link-replace hidden"></p>

        <div class="breadcrumb">
          <span class='bold'><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/OpenMOOC/userregistration" class="js-slide-to" data-branch="master" data-direction="back" itemscope="url"><span itemprop="title">userregistration</span></a></span></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/OpenMOOC/userregistration/tree/master/www" class="js-slide-to" data-branch="master" data-direction="back" itemscope="url"><span itemprop="title">www</span></a></span><span class="separator"> / </span><strong class="final-path">newUser.php</strong> <span class="js-zeroclipboard zeroclipboard-button" data-clipboard-text="www/newUser.php" data-copied-hint="copied!" title="copy to clipboard"><span class="octicon octicon-clippy"></span></span>
        </div>

      <a href="/OpenMOOC/userregistration/find/master" class="js-slide-to" data-hotkey="t" style="display:none">Show File Finder</a>


        
  <div class="commit file-history-tease">
    <img class="main-avatar" height="24" src="https://secure.gravatar.com/avatar/461cf4340f8d716a8abf85faa99ea60d?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="24" />
    <span class="author"><a href="/adobo" rel="author">adobo</a></span>
    <time class="js-relative-date" datetime="2013-05-17T11:29:32-07:00" title="2013-05-17 11:29:32">May 17, 2013</time>
    <div class="commit-title">
        <a href="/OpenMOOC/userregistration/commit/8922dc4532e605846edbec3c0e9d33bf2bf2c2a4" class="message">Refactor the user registration process</a>
    </div>

    <div class="participation">
      <p class="quickstat"><a href="#blob_contributors_box" rel="facebox"><strong>2</strong> contributors</a></p>
          <a class="avatar tooltipped downwards" title="adobo" href="/OpenMOOC/userregistration/commits/master/www/newUser.php?author=adobo"><img height="20" src="https://secure.gravatar.com/avatar/461cf4340f8d716a8abf85faa99ea60d?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="20" /></a>
    <a class="avatar tooltipped downwards" title="pitbulk" href="/OpenMOOC/userregistration/commits/master/www/newUser.php?author=pitbulk"><img height="20" src="https://secure.gravatar.com/avatar/a06aa6c3c98df1bee3a5871ed117f3df?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="20" /></a>


    </div>
    <div id="blob_contributors_box" style="display:none">
      <h2>Users on GitHub who have contributed to this file</h2>
      <ul class="facebox-user-list">
        <li>
          <img height="24" src="https://secure.gravatar.com/avatar/461cf4340f8d716a8abf85faa99ea60d?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="24" />
          <a href="/adobo">adobo</a>
        </li>
        <li>
          <img height="24" src="https://secure.gravatar.com/avatar/a06aa6c3c98df1bee3a5871ed117f3df?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="24" />
          <a href="/pitbulk">pitbulk</a>
        </li>
      </ul>
    </div>
  </div>


    </div><!-- ./.frame-meta -->

    <div class="frames">
      <div class="frame" data-permalink-url="/OpenMOOC/userregistration/blob/4050ba3968f9534416dce2166a80c07f81c63850/www/newUser.php" data-title="userregistration/www/newUser.php at master · OpenMOOC/userregistration · GitHub" data-type="blob">

        <div id="files" class="bubble">
          <div class="file">
            <div class="meta">
              <div class="info">
                <span class="icon"><b class="octicon octicon-file-text"></b></span>
                <span class="mode" title="File Mode">file</span>
                  <span>64 lines (48 sloc)</span>
                <span>2.078 kb</span>
              </div>
              <div class="actions">
                <div class="button-group">
                      <a class="minibutton js-entice" href=""
                         data-entice="You must be signed in and on a branch to make or propose changes">Edit</a>
                  <a href="/OpenMOOC/userregistration/raw/master/www/newUser.php" class="button minibutton " id="raw-url">Raw</a>
                    <a href="/OpenMOOC/userregistration/blame/master/www/newUser.php" class="button minibutton ">Blame</a>
                  <a href="/OpenMOOC/userregistration/commits/master/www/newUser.php" class="button minibutton " rel="nofollow">History</a>
                </div><!-- /.button-group -->
              </div><!-- /.actions -->

            </div>
                <div class="blob-wrapper data type-php js-blob-data">
      <table class="file-code file-diff">
        <tr class="file-code-line">
          <td class="blob-line-nums">
            <span id="L1" rel="#L1">1</span>
<span id="L2" rel="#L2">2</span>
<span id="L3" rel="#L3">3</span>
<span id="L4" rel="#L4">4</span>
<span id="L5" rel="#L5">5</span>
<span id="L6" rel="#L6">6</span>
<span id="L7" rel="#L7">7</span>
<span id="L8" rel="#L8">8</span>
<span id="L9" rel="#L9">9</span>
<span id="L10" rel="#L10">10</span>
<span id="L11" rel="#L11">11</span>
<span id="L12" rel="#L12">12</span>
<span id="L13" rel="#L13">13</span>
<span id="L14" rel="#L14">14</span>
<span id="L15" rel="#L15">15</span>
<span id="L16" rel="#L16">16</span>
<span id="L17" rel="#L17">17</span>
<span id="L18" rel="#L18">18</span>
<span id="L19" rel="#L19">19</span>
<span id="L20" rel="#L20">20</span>
<span id="L21" rel="#L21">21</span>
<span id="L22" rel="#L22">22</span>
<span id="L23" rel="#L23">23</span>
<span id="L24" rel="#L24">24</span>
<span id="L25" rel="#L25">25</span>
<span id="L26" rel="#L26">26</span>
<span id="L27" rel="#L27">27</span>
<span id="L28" rel="#L28">28</span>
<span id="L29" rel="#L29">29</span>
<span id="L30" rel="#L30">30</span>
<span id="L31" rel="#L31">31</span>
<span id="L32" rel="#L32">32</span>
<span id="L33" rel="#L33">33</span>
<span id="L34" rel="#L34">34</span>
<span id="L35" rel="#L35">35</span>
<span id="L36" rel="#L36">36</span>
<span id="L37" rel="#L37">37</span>
<span id="L38" rel="#L38">38</span>
<span id="L39" rel="#L39">39</span>
<span id="L40" rel="#L40">40</span>
<span id="L41" rel="#L41">41</span>
<span id="L42" rel="#L42">42</span>
<span id="L43" rel="#L43">43</span>
<span id="L44" rel="#L44">44</span>
<span id="L45" rel="#L45">45</span>
<span id="L46" rel="#L46">46</span>
<span id="L47" rel="#L47">47</span>
<span id="L48" rel="#L48">48</span>
<span id="L49" rel="#L49">49</span>
<span id="L50" rel="#L50">50</span>
<span id="L51" rel="#L51">51</span>
<span id="L52" rel="#L52">52</span>
<span id="L53" rel="#L53">53</span>
<span id="L54" rel="#L54">54</span>
<span id="L55" rel="#L55">55</span>
<span id="L56" rel="#L56">56</span>
<span id="L57" rel="#L57">57</span>
<span id="L58" rel="#L58">58</span>
<span id="L59" rel="#L59">59</span>
<span id="L60" rel="#L60">60</span>
<span id="L61" rel="#L61">61</span>
<span id="L62" rel="#L62">62</span>
<span id="L63" rel="#L63">63</span>

          </td>
          <td class="blob-line-code">
                  <div class="highlight"><pre><div class='line' id='LC1'><span class="o">&lt;?</span><span class="nx">php</span></div><div class='line' id='LC2'><br/></div><div class='line' id='LC3'><span class="nv">$config</span> <span class="o">=</span> <span class="nx">SimpleSAML_Configuration</span><span class="o">::</span><span class="na">getInstance</span><span class="p">();</span></div><div class='line' id='LC4'><span class="nv">$uregconf</span> <span class="o">=</span> <span class="nx">SimpleSAML_Configuration</span><span class="o">::</span><span class="na">getConfig</span><span class="p">(</span><span class="s1">&#39;module_userregistration.php&#39;</span><span class="p">);</span></div><div class='line' id='LC5'><span class="nv">$mailoptions</span> <span class="o">=</span> <span class="nv">$uregconf</span><span class="o">-&gt;</span><span class="na">getArray</span><span class="p">(</span><span class="s1">&#39;mail&#39;</span><span class="p">);</span></div><div class='line' id='LC6'><span class="nv">$attributes</span> <span class="o">=</span> <span class="nv">$uregconf</span><span class="o">-&gt;</span><span class="na">getArray</span><span class="p">(</span><span class="s1">&#39;attributes&#39;</span><span class="p">);</span></div><div class='line' id='LC7'><span class="nv">$formFields</span> <span class="o">=</span> <span class="nv">$uregconf</span><span class="o">-&gt;</span><span class="na">getArray</span><span class="p">(</span><span class="s1">&#39;formFields&#39;</span><span class="p">);</span></div><div class='line' id='LC8'><span class="nv">$known_email_providers</span> <span class="o">=</span> <span class="nv">$uregconf</span><span class="o">-&gt;</span><span class="na">getArray</span><span class="p">(</span><span class="s1">&#39;known.email.providers&#39;</span><span class="p">);</span></div><div class='line' id='LC9'><span class="nv">$eppnRealm</span> <span class="o">=</span> <span class="nv">$uregconf</span><span class="o">-&gt;</span><span class="na">getString</span><span class="p">(</span><span class="s1">&#39;user.realm&#39;</span><span class="p">);</span></div><div class='line' id='LC10'><span class="nv">$tos</span> <span class="o">=</span> <span class="nv">$uregconf</span><span class="o">-&gt;</span><span class="na">getString</span><span class="p">(</span><span class="s1">&#39;tos&#39;</span><span class="p">,</span> <span class="s1">&#39;&#39;</span><span class="p">);</span></div><div class='line' id='LC11'><span class="nv">$customNavigation</span> <span class="o">=</span> <span class="nv">$uregconf</span><span class="o">-&gt;</span><span class="na">getBoolean</span><span class="p">(</span><span class="s1">&#39;custom.navigation&#39;</span><span class="p">,</span> <span class="k">TRUE</span><span class="p">);</span></div><div class='line' id='LC12'><br/></div><div class='line' id='LC13'><span class="nv">$steps</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">sspmod_userregistration_XHTML_Steps</span><span class="p">();</span></div><div class='line' id='LC14'><br/></div><div class='line' id='LC15'><br/></div><div class='line' id='LC16'><span class="nv">$systemName</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span><span class="s1">&#39;%SNAME%&#39;</span> <span class="o">=&gt;</span> <span class="nv">$uregconf</span><span class="o">-&gt;</span><span class="na">getString</span><span class="p">(</span><span class="s1">&#39;system.name&#39;</span><span class="p">)</span> <span class="p">);</span></div><div class='line' id='LC17'><span class="nv">$store</span> <span class="o">=</span> <span class="nx">sspmod_userregistration_Storage_UserCatalogue</span><span class="o">::</span><span class="na">instantiateStorage</span><span class="p">();</span></div><div class='line' id='LC18'><br/></div><div class='line' id='LC19'><br/></div><div class='line' id='LC20'><span class="nv">$registration</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">sspmod_userregistration_Registration</span><span class="p">(</span><span class="nv">$config</span><span class="p">);</span></div><div class='line' id='LC21'><span class="nv">$registration</span><span class="o">-&gt;</span><span class="na">setFormFields</span><span class="p">(</span><span class="nv">$formFields</span><span class="p">);</span></div><div class='line' id='LC22'><span class="nv">$registration</span><span class="o">-&gt;</span><span class="na">setTOS</span><span class="p">(</span><span class="nv">$tos</span><span class="p">);</span></div><div class='line' id='LC23'><span class="nv">$registration</span><span class="o">-&gt;</span><span class="na">setSystemName</span><span class="p">(</span><span class="nv">$systemName</span><span class="p">);</span></div><div class='line' id='LC24'><span class="nv">$registration</span><span class="o">-&gt;</span><span class="na">setAttributes</span><span class="p">(</span><span class="nv">$attributes</span><span class="p">);</span></div><div class='line' id='LC25'><span class="nv">$registration</span><span class="o">-&gt;</span><span class="na">setMailOptions</span><span class="p">(</span><span class="nv">$mailoptions</span><span class="p">);</span></div><div class='line' id='LC26'><span class="nv">$registration</span><span class="o">-&gt;</span><span class="na">setKnownEmailProviders</span><span class="p">(</span><span class="nv">$known_email_providers</span><span class="p">);</span></div><div class='line' id='LC27'><span class="nv">$registration</span><span class="o">-&gt;</span><span class="na">setCustomNavigation</span><span class="p">(</span><span class="nv">$customNavigation</span><span class="p">);</span></div><div class='line' id='LC28'><br/></div><div class='line' id='LC29'><span class="k">if</span> <span class="p">(</span><span class="nb">array_key_exists</span><span class="p">(</span><span class="s1">&#39;savepw&#39;</span><span class="p">,</span> <span class="nv">$_REQUEST</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC30'>	<span class="c1">// Stage 4: Registration completed</span></div><div class='line' id='LC31'>	<span class="nv">$result_step_4</span> <span class="o">=</span> <span class="nv">$registration</span><span class="o">-&gt;</span><span class="na">step4</span><span class="p">();</span></div><div class='line' id='LC32'><br/></div><div class='line' id='LC33'>	<span class="k">if</span> <span class="p">(</span><span class="nb">is_a</span><span class="p">(</span><span class="nv">$result_step_4</span><span class="p">,</span> <span class="s1">&#39;Exception&#39;</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC34'>		<span class="nv">$email</span> <span class="o">=</span> <span class="nv">$_REQUEST</span><span class="p">[</span><span class="s1">&#39;email&#39;</span><span class="p">];</span></div><div class='line' id='LC35'>		<span class="nv">$registration</span><span class="o">-&gt;</span><span class="na">step3</span><span class="p">(</span><span class="nv">$result_step_4</span><span class="p">,</span> <span class="nv">$email</span><span class="p">);</span></div><div class='line' id='LC36'>	<span class="p">}</span></div><div class='line' id='LC37'><br/></div><div class='line' id='LC38'><span class="p">}</span> <span class="k">elseif</span><span class="p">(</span><span class="nb">array_key_exists</span><span class="p">(</span><span class="s1">&#39;email&#39;</span><span class="p">,</span> <span class="nv">$_REQUEST</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="nb">array_key_exists</span><span class="p">(</span><span class="s1">&#39;token&#39;</span><span class="p">,</span> <span class="nv">$_REQUEST</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="o">!</span><span class="nb">array_key_exists</span><span class="p">(</span><span class="s1">&#39;refreshtoken&#39;</span><span class="p">,</span> <span class="nv">$_REQUEST</span><span class="p">)){</span></div><div class='line' id='LC39'>	<span class="c1">// Stage 3: User access page from url in e-mail</span></div><div class='line' id='LC40'>	<span class="nv">$result_step_3</span> <span class="o">=</span> <span class="nv">$registration</span><span class="o">-&gt;</span><span class="na">step3</span><span class="p">();</span></div><div class='line' id='LC41'><br/></div><div class='line' id='LC42'>	<span class="k">if</span> <span class="p">(</span><span class="nb">is_a</span><span class="p">(</span><span class="nv">$result_step_3</span><span class="p">,</span> <span class="s1">&#39;Exception&#39;</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC43'>		<span class="nv">$registration</span><span class="o">-&gt;</span><span class="na">step3</span><span class="p">(</span><span class="nv">$result_step_3</span><span class="p">);</span></div><div class='line' id='LC44'>	<span class="p">}</span></div><div class='line' id='LC45'><br/></div><div class='line' id='LC46'><span class="p">}</span> <span class="k">elseif</span><span class="p">(</span><span class="nb">array_key_exists</span><span class="p">(</span><span class="s1">&#39;refreshtoken&#39;</span><span class="p">,</span> <span class="nv">$_POST</span><span class="p">)){</span></div><div class='line' id='LC47'>	<span class="c1">// Stage 2 (b): Resend email token</span></div><div class='line' id='LC48'>	<span class="nv">$registration</span><span class="o">-&gt;</span><span class="na">step2</span><span class="p">(</span><span class="k">TRUE</span><span class="p">);</span></div><div class='line' id='LC49'><br/></div><div class='line' id='LC50'><span class="p">}</span> <span class="k">elseif</span><span class="p">(</span><span class="nb">array_key_exists</span><span class="p">(</span><span class="s1">&#39;sender&#39;</span><span class="p">,</span> <span class="nv">$_POST</span><span class="p">)){</span></div><div class='line' id='LC51'>	<span class="c1">// Stage 2 (a): Send verification email</span></div><div class='line' id='LC52'>	<span class="nv">$result_step_2</span> <span class="o">=</span> <span class="nv">$registration</span><span class="o">-&gt;</span><span class="na">step2</span><span class="p">();</span></div><div class='line' id='LC53'><br/></div><div class='line' id='LC54'>	<span class="k">if</span> <span class="p">(</span><span class="nb">is_a</span><span class="p">(</span><span class="nv">$result_step_2</span><span class="p">,</span> <span class="s1">&#39;Exception&#39;</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC55'>		<span class="nv">$registration</span><span class="o">-&gt;</span><span class="na">step1</span><span class="p">(</span><span class="nv">$result_step_2</span><span class="p">);</span></div><div class='line' id='LC56'>	<span class="p">}</span></div><div class='line' id='LC57'><br/></div><div class='line' id='LC58'><span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC59'>	<span class="c1">// Stage 1: New user clean access</span></div><div class='line' id='LC60'>	<span class="nv">$registration</span><span class="o">-&gt;</span><span class="na">step1</span><span class="p">();</span></div><div class='line' id='LC61'><span class="p">}</span></div><div class='line' id='LC62'><br/></div><div class='line' id='LC63'><span class="cp">?&gt;</span><span class="x"></span></div></pre></div>
          </td>
        </tr>
      </table>
  </div>

          </div>
        </div>

        <a href="#jump-to-line" rel="facebox" data-hotkey="l" class="js-jump-to-line" style="display:none">Jump to Line</a>
        <div id="jump-to-line" style="display:none">
          <h2>Jump to Line</h2>
          <form accept-charset="UTF-8" class="js-jump-to-line-form">
            <input class="textfield js-jump-to-line-field" type="text">
            <div class="full-button">
              <button type="submit" class="button">Go</button>
            </div>
          </form>
        </div>

      </div>
    </div>
</div>

<div id="js-frame-loading-template" class="frame frame-loading large-loading-area" style="display:none;">
  <img class="js-frame-loading-spinner" src="https://a248.e.akamai.net/assets.github.com/images/spinners/octocat-spinner-128.gif?1360648843" height="64" width="64">
</div>


        </div>
      </div>
      <div class="modal-backdrop"></div>
    </div>

      <div id="footer-push"></div><!-- hack for sticky footer -->
    </div><!-- end of wrapper - hack for sticky footer -->

      <!-- footer -->
      <div id="footer">
  <div class="container clearfix">

      <dl class="footer_nav">
        <dt>GitHub</dt>
        <dd><a href="https://github.com/about">About us</a></dd>
        <dd><a href="https://github.com/blog">Blog</a></dd>
        <dd><a href="https://github.com/contact">Contact &amp; support</a></dd>
        <dd><a href="http://enterprise.github.com/">GitHub Enterprise</a></dd>
        <dd><a href="http://status.github.com/">Site status</a></dd>
      </dl>

      <dl class="footer_nav">
        <dt>Applications</dt>
        <dd><a href="http://mac.github.com/">GitHub for Mac</a></dd>
        <dd><a href="http://windows.github.com/">GitHub for Windows</a></dd>
        <dd><a href="http://eclipse.github.com/">GitHub for Eclipse</a></dd>
        <dd><a href="http://mobile.github.com/">GitHub mobile apps</a></dd>
      </dl>

      <dl class="footer_nav">
        <dt>Services</dt>
        <dd><a href="http://get.gaug.es/">Gauges: Web analytics</a></dd>
        <dd><a href="http://speakerdeck.com">Speaker Deck: Presentations</a></dd>
        <dd><a href="https://gist.github.com">Gist: Code snippets</a></dd>
        <dd><a href="http://jobs.github.com/">Job board</a></dd>
      </dl>

      <dl class="footer_nav">
        <dt>Documentation</dt>
        <dd><a href="http://help.github.com/">GitHub Help</a></dd>
        <dd><a href="http://developer.github.com/">Developer API</a></dd>
        <dd><a href="http://github.github.com/github-flavored-markdown/">GitHub Flavored Markdown</a></dd>
        <dd><a href="http://pages.github.com/">GitHub Pages</a></dd>
      </dl>

      <dl class="footer_nav">
        <dt>More</dt>
        <dd><a href="http://training.github.com/">Training</a></dd>
        <dd><a href="https://github.com/edu">Students &amp; teachers</a></dd>
        <dd><a href="http://shop.github.com">The Shop</a></dd>
        <dd><a href="https://github.com/plans">Plans &amp; pricing</a></dd>
        <dd><a href="http://octodex.github.com/">The Octodex</a></dd>
      </dl>

      <hr class="footer-divider">


    <p class="right">&copy; 2013 <span title="0.05103s from fe3.rs.github.com">GitHub</span>, Inc. All rights reserved.</p>
    <a class="left" href="https://github.com/">
      <span class="mega-octicon octicon-mark-github"></span>
    </a>
    <ul id="legal">
        <li><a href="https://github.com/site/terms">Terms of Service</a></li>
        <li><a href="https://github.com/site/privacy">Privacy</a></li>
        <li><a href="https://github.com/security">Security</a></li>
    </ul>

  </div><!-- /.container -->

</div><!-- /.#footer -->


    <div class="fullscreen-overlay js-fullscreen-overlay" id="fullscreen_overlay">
  <div class="fullscreen-container js-fullscreen-container">
    <div class="textarea-wrap">
      <textarea name="fullscreen-contents" id="fullscreen-contents" class="js-fullscreen-contents" placeholder="" data-suggester="fullscreen_suggester"></textarea>
          <div class="suggester-container">
              <div class="suggester fullscreen-suggester js-navigation-container" id="fullscreen_suggester"
                 data-url="/OpenMOOC/userregistration/suggestions/commit">
              </div>
          </div>
    </div>
  </div>
  <div class="fullscreen-sidebar">
    <a href="#" class="exit-fullscreen js-exit-fullscreen tooltipped leftwards" title="Exit Zen Mode">
      <span class="mega-octicon octicon-screen-normal"></span>
    </a>
    <a href="#" class="theme-switcher js-theme-switcher tooltipped leftwards"
      title="Switch themes">
      <span class="octicon octicon-color-mode"></span>
    </a>
  </div>
</div>



    <div id="ajax-error-message" class="flash flash-error">
      <span class="octicon octicon-alert"></span>
      Something went wrong with that request. Please try again.
      <a href="#" class="octicon octicon-remove-close ajax-error-dismiss"></a>
    </div>

    
    
    <span id='server_response_time' data-time='0.05155' data-host='fe3'></span>
    
  </body>
</html>

