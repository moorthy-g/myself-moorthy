<?php if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 6.') !== FALSE)exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Myself Moorthy - Web Designer and UI Developer</title>
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script src="scripts/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="scripts/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="scripts/jquery.ba-hashchange.min.js" type="text/javascript"></script>
<script src="scripts/jquery.slidemi.js" type="text/javascript"></script>
<script src="scripts/jquery.boxtab.js" type="text/javascript"></script>
<script src="scripts/main.js" type="text/javascript"></script>
</head>
<body class="center-align">
<div class="main-wrapper" id="intro">
  <?php $highlight=1; ?>
  <?php include("includes/header.php"); ?>
  <div class="content-wrapper">
    <div class="wrap">
      <div class="main-content">
        <div class="special-box">
          <div class="bx-wrap">
            <h1>Recent Challenge Faced</h1>
            <ul>
              <li class="challenge">To play music without interruption while browsing through various pages of a site.</li>
              <li class="solution applied" title="Proposed and Implemented Solution">Using Iframe to load the pages and to operate the music player outside of Iframe, using javascript.</li>
              <li class="solution" title="Proposed Solution">Using Iframe to load the pages and to position the music player outside of Iframe, using javascript.</li>
            </ul>
            <a href="http://moorthy.co.cc/Bridevine/" target="_blank" class="link">Clickhere to see the solution</a> </div>
          <!--bx-wrap--> 
        </div>
        <!--special-box-->
        <h1>Professionally, Me</h1>
        <p>Hi, myself Moorthy. I am functioning as a web designer for over 5 years and got excellent UI development skills and very good Interface designing skills. I develop div based, SEO friendly, W3C standard websites. I've completed 400+ projects including 150+ complete website deliveries and learning more and more to explore and improve my ideas with ease. </p>
        <p class="quoted">Keep learning, Be creative, Take risks, Keep the world beautiful!</p>
        <div class="divider"></div>
        <h1>Skills</h1>
        <p>XHTML, HTML(5), CSS(3), Javascript, jQuery, Adobe Photoshop, Adobe Dreamweaver, Adobe Flash/Actionscript</p>
        <h2>Skill Operations</h2>
        <ol>
          <li>Webpage/UI design using Photoshop</li>
          <li>To develop designed mock-ups to XHTML/CSS/jQuery</li>
          <li>Complete Website Delivery</li>
          <li>jQuery Plugin Development</li>
          <li>Cross-Browser Testing and Fixing</li>
        </ol>
        <div id="report">
          <h1>Skill Report</h1>
          <img src="images/skill-report.png" alt="" /> </div>
        <!--report-->
        <div class="box-1">
          <h1>Plans</h1>
          <ol>
            <li>To start a blog to share my Knowledge and Ideas and Challenges about the field and to interact with the web designers world wide.</li>
            <li>To develop a jQuery plugin for highlighting a specific area of a web page with omni lighting. <span class="style-1">(Analyzing now)</span></li>
          </ol>
          <h1>Fun Stuffs</h1>
          <p>My profession is  one of my hobby as well. I do develop some fun stuffs while I'm bored. One of my favorite is <a href="http://moorthy.co.cc/female-body-shape-engine/" target="_blank">Female Body Shape Engine <span class="style-1">(with jQuery)</span></a></p>
        </div>
        <!--box-2--> 
      </div>
      <!--main-content--> 
    </div>
    <!--wrap--> 
  </div>
  <!--content-wrapper-->
  <?php include("includes/footer.php"); ?>
</div>
<!--main-wrapper/intro-->
<div class="main-wrapper" id="works">
  <?php $highlight=2; ?>
  <?php include("includes/header.php"); ?>
  <div class="content-wrapper">
    <div class="wrap">
      <div class="main-content">
        <h1>My Works</h1>
        <p>Here, I stacked some of my latest projects.</p>
        <div id="preview">
          <div class="image"><!--<img src="works/normal/lab-home.jpg" alt="" />--></div>
          <!--image-->
          <div class="info"> 
            <!--<a href="#" title="Fullview" class="fullscreen"></a> <a href="#" title="Live site" class="live-site"></a>
            <h1>Lab Consulting Services</h1>
            <h2>My part</h2>
            <h4>PS, XHTML/CSS, jQuery</h4>--> 
          </div>
          <!--info--> 
        </div>
        <!--preview-->
        <div class="contentcolumn-1">
          <ul id="project-stack">
            <li> <a href="works/normal/lab-home.jpg" class="image"><img src="works/thumb/lab-home.jpg" alt="" /></a>
              <div class="caption">Lab Consulting Services</div>
              <!--caption-->
              <div class="meta">
                <ul class="action">
                  <li><a href="works/large/lab-home.jpg" title="Fullview" class="fullscreen" target="_blank"></a></li>
                  <li><a href="http://www.behance.net/gallery/Lab-Consulting-services/2829555" title="View project in behance" class="view-behance" target="_blank"></a></li>
                </ul>
                <h1>Lab Consulting Services</h1>
                <h2>My part</h2>
                <h4>PS, XHTML/CSS, jQuery</h4>
              </div>
              <!--meta--> 
            </li>
            <li> <a href="works/normal/repap-home.jpg" class="image"><img src="works/thumb/repap-home.jpg" alt="" /></a>
              <div class="caption">Repap</div>
              <!--caption-->
              <div class="meta">
                <ul class="action">
                  <li><a href="works/large/repap-home.jpg" title="Fullview" class="fullscreen" target="_blank"></a></li>
                  <li><a href="http://www.repap.it" title="Live site" class="live-site" target="_blank"></a></li>
                </ul>
                <h1>Repap <span>(Single page jQuery site)</span></h1>
                <h2>My part</h2>
                <h4>XHTML/CSS, jQuery</h4>
              </div>
              <!--meta--> 
            </li>
            <li> <a href="works/normal/gok-home.jpg" class="image"><img src="works/thumb/gok-home.jpg" alt="" /></a>
              <div class="caption">Go Konsulting</div>
              <!--caption-->
              <div class="meta">
                <ul class="action">
                  <li><a href="works/large/gok-home.jpg" title="Fullview" class="fullscreen" target="_blank"></a></li>
                  <li><a href="http://www.behance.net/gallery/GO-Konsulting/2755191" title="View project in behance" class="view-behance" target="_blank"></a></li>
                </ul>
                <h1>Go Konsulting <span>(the resolution centre)</span></h1>
                <h2>My part</h2>
                <h4>PS, XHTML/CSS, jQuery</h4>
              </div>
              <!--meta--> 
            </li>
            <li> <a href="works/normal/terrion-home.jpg" class="image"><img src="works/thumb/terrion-home.jpg" alt="" /></a>
              <div class="caption">Terrion</div>
              <!--caption-->
              <div class="meta">
                <ul class="action">
                  <li><a href="works/large/terrion-home.jpg" title="Fullview" class="fullscreen" target="_blank"></a></li>
                  <li><a href="http://themeforest.net/item/terrion/full_screen_preview/217284" title="Live site" class="live-site" target="_blank"></a></li>
                </ul>
                <h1>Terrion</h1>
                <h2>My part</h2>
                <h4>XHTML/CSS, jQuery</h4>
              </div>
              <!--meta--> 
            </li>
            <li> <a href="works/normal/estyle-home.jpg" class="image"><img src="works/thumb/estyle-home.jpg" alt="" /></a>
              <div class="caption">E-Style</div>
              <!--caption-->
              <div class="meta">
                <ul class="action">
                  <li><a href="works/large/estyle-home.jpg" title="Fullview" class="fullscreen" target="_blank"></a></li>
                  <li><a href="http://estyle.showmysite.info/" title="Live site" class="live-site" target="_blank"></a></li>
                </ul>
                <h1>E-Style</h1>
                <h2>My part</h2>
                <h4>XHTML/CSS, jQuery</h4>
              </div>
              <!--meta--> 
            </li>
            <li> <a href="works/normal/broodr-home.jpg" class="image"><img src="works/thumb/broodr-home.jpg" alt="" /></a>
              <div class="caption">Broodr</div>
              <!--caption-->
              <div class="meta">
                <ul class="action">
                  <li><a href="works/large/broodr-home.jpg" title="Fullview" class="fullscreen" target="_blank"></a></li>
                </ul>
                <h1>Broodr</h1>
                <h2>My part</h2>
                <h4>PS, XHTML/CSS, jQuery</h4>
              </div>
              <!--meta--> 
            </li>
            <li> <a href="works/normal/sadaqah-home.jpg" class="image"><img src="works/thumb/sadaqah-home.jpg" alt="" /></a>
              <div class="caption">My Sadaqah</div>
              <!--caption-->
              <div class="meta">
                <ul class="action">
                  <li><a href="works/large/sadaqah-home.jpg" title="Fullview" class="fullscreen" target="_blank"></a></li>
                </ul>
                <h1>My Sadaqah</h1>
                <h2>My part</h2>
                <h4>PS, XHTML/CSS, jQuery</h4>
              </div>
              <!--meta--> 
            </li>
            <li> <a href="works/normal/eb-home.jpg" class="image"><img src="works/thumb/eb-home.jpg" alt="" /></a>
              <div class="caption">E.B Exteriors</div>
              <!--caption-->
              <div class="meta">
                <ul class="action">
                  <li><a href="works/large/eb-home.jpg" title="Fullview" class="fullscreen" target="_blank"></a></li>
                </ul>
                <h1>E.B Exteriors</h1>
                <h2>My part</h2>
                <h4>PS, XHTML/CSS, jQuery</h4>
              </div>
              <!--meta--> 
            </li>
            <li> <a href="works/normal/nuti-home.jpg" class="image"><img src="works/thumb/nuti-home.jpg" alt="" /></a>
              <div class="caption">Nautiquos</div>
              <!--caption-->
              <div class="meta">
                <ul class="action">
                  <li><a href="works/large/nuti-home.jpg" title="Fullview" class="fullscreen" target="_blank"></a></li>
                  <li><a href="http://nautiquos.com/" title="Live site" class="live-site" target="_blank"></a></li>
                </ul>
                <h1>Nautiquos</h1>
                <h2>My part</h2>
                <h4>PS, XHTML/CSS, jQuery</h4>
              </div>
              <!--meta--> 
            </li>
          </ul>
          <div id="group-details">
            <h2>More projects</h2>
            <p>Following sites and most of the sites listed in their portfolio/templates are developed by myself.(html/css/jQuery)</p>
            <a href="http://www.velvetinkmedia.com" target="_blank" class="link-1">www.velvetinkmedia.com</a><br />
            <a href="http://www.themestyle.net" target="_blank" class="link-1">www.themestyle.net</a> </div>
        </div>
        <!--contentcolumn-1-->
        <div class="clearer"></div>
      </div>
      <!--main-content--> 
    </div>
    <!--wrap--> 
  </div>
  <!--content-wrapper-->
  <?php include("includes/footer.php"); ?>
</div>
<!--main-wrapper/works-->
<div class="main-wrapper" id="plugins">
  <?php $highlight=3; ?>
  <?php include("includes/header.php"); ?>
  <div class="content-wrapper">
    <div class="wrap">
      <div class="main-content">
        <div class="line-2"></div>
        <h1>jQuery Plugins</h1>
        <p>I've developed some jQuery plugins. However, these type of plugins are available around the web, I developed them with my own ideas. So, I can interact and customize the plugins quickly. I applied these plugins in 100+ projects I developed.</p>
        <p><em><strong>I also developed individual plugins for site functionality regarding Ajax, Animation and Json.</strong></em></p>
        <div class="divider"></div>
        <h1>My Plugins</h1>
        <p>Here is the list of jQuery plugins I developed</p>
        <div class="row">
          <h2>1. Slide mi</h2>
          <div id="slidemi">
            <div class="panel">
              <div class="image-1"><img src="images/simage-1.gif" alt="" /></div>
              <!--image-1-->
              <h1>Title of the content</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vehicula lectus non urna tincidunt ullamcorper. Nam cursus, purus quis varius fringilla, ante sem volutpat felis, elementum dignissim magna nunc eu nisi. Sed imperdiet felis bibendum sem sagittis auctor. Suspendisse volutpat erat nec erat venenatis eget gravida leo ullamcorper. Proin a varius mauris. Donec vehicula.</p>
              <p>Enim sit amet commodo dapibus, enim nisl faucibus sem, at tempor nulla felis sollicitudin leo. Nulla sollicitudin purus vitae nunc sollicitudin suscipit. Fusce eu erat a magna eleifend feugiat. posuere, lacus mauris molestie lectus, at accumsan purus ipsum in sapien. </p>
            </div>
            <!--panel-->
            <div class="panel">
              <div class="image-2"><img src="images/simage-1.gif" alt="" /></div>
              <!--image-2-->
              <h1>Title of the content</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vehicula lectus non urna tincidunt ullamcorper. Nam cursus, purus quis varius fringilla, ante sem volutpat felis, elementum dignissim magna nunc eu nisi. Sed imperdiet felis bibendum sem sagittis auctor. Suspendisse volutpat erat nec erat venenatis eget gravida leo ullamcorper. Proin a varius mauris. Donec vehicula.</p>
              <p>Enim sit amet commodo dapibus, enim nisl faucibus sem, at tempor nulla felis sollicitudin leo. Nulla sollicitudin purus vitae nunc sollicitudin suscipit. Fusce eu erat a magna eleifend feugiat. posuere, lacus mauris molestie lectus, at accumsan purus ipsum in sapien. </p>
            </div>
            <!--panel-->
            <div class="panel">
              <div class="image-1"><img src="images/simage-1.gif" alt="" width="350" height="175" /></div>
              <!--image-1-->
              <div class="image-2"><img src="images/simage-1.gif" alt="" /></div>
              <!--image-2--> 
            </div>
            <!--panel-->
            <div class="panel">
              <h1>Title of the content</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vehicula lectus non urna tincidunt ullamcorper. Nam cursus, purus quis varius fringilla, ante sem volutpat felis, elementum dignissim magna nunc eu nisi. Sed imperdiet felis bibendum sem sagittis auctor. Suspendisse volutpat erat nec erat venenatis eget gravida leo ullamcorper. Proin a varius mauris. Donec vehicula.</p>
              <p>Enim sit amet commodo dapibus, enim nisl faucibus sem, at tempor nulla felis sollicitudin leo. Nulla sollicitudin purus vitae nunc sollicitudin suscipit. Fusce eu erat a magna eleifend feugiat. posuere, lacus mauris molestie lectus, at accumsan purus ipsum in sapien. </p>
            </div>
            <!--panel--> 
            <a href="#" class="prev"></a> <a href="#" class="next"></a>
            <ul class="slide-nav">
              <li></li>
            </ul>
          </div>
          <!--slidemi--> 
          <a href="scripts/jquery.slidemi.js" target="_blank" class="link-download">Download Slide mi plugin</a> </div>
        <!--row-->
        <div class="divider-2"></div>
        <!--divider-2-->
        <div class="row">
          <h2>2. Box tab</h2>
          <div id="boxtab">
            <ul class="tabs">
              <li><a href="#">Lorem ipsum</a></li>
              <li><a href="#">Consectetur</a></li>
              <li><a href="#">Adipiscing</a></li>
              <li><a href="#">Lectus non urna</a></li>
            </ul>
            <div class="tab-content">
              <div class="panel">
                <p><strong>Lorem ipsum dolor sit amet,</strong> consectetur adipiscing elit. Integer vehicula lectus non urna tincidunt ullamcorper. Nam cursus, purus quis varius fringilla, ante sem volutpat felis, elementum dignissim magna nunc eu nisi. Sed imperdiet felis bibendum sem sagittis auctor. </p>
                <p>Suspendisse volutpat erat nec erat venenatis eget gravida leo ullamcorper. Proin a varius mauris. Donec vehicula, enim sit amet commodo dapibus, enim nisl faucibus sem, at tempor nulla felis sollicitudin leo. </p>
              </div>
              <!--panel-->
              <div class="panel">
                <p>Suspendisse volutpat erat nec erat venenatis eget gravida leo ullamcorper. Proin a varius mauris. Donec vehicula, enim sit amet commodo dapibus, <strong>enim nisl faucibus sem,</strong> at tempor nulla felis sollicitudin leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vehicula lectus non urna tincidunt ullamcorper. Nam cursus, purus quis varius fringilla, ante sem volutpat felis, elementum dignissim magna nunc eu nisi. Sed imperdiet felis bibendum sem sagittis auctor. </p>
              </div>
              <!--panel-->
              <div class="panel">
                <p>Suspendisse volutpat erat nec erat venenatis eget gravida leo ullamcorper. Proin a varius mauris. Donec vehicula, enim sit amet commodo dapibus, enim nisl faucibus sem, at tempor nulla felis sollicitudin leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vehicula lectus non urna tincidunt ullamcorper. Nam cursus, purus quis varius fringilla, ante sem volutpat felis, elementum dignissim magna nunc eu nisi. Sed imperdiet felis bibendum sem sagittis auctor. </p>
                <p>Suspendisse volutpat erat nec erat venenatis eget gravida leo ullamcorper. Proin a varius mauris. Donec vehicula, enim sit amet commodo dapibus, enim nisl faucibus sem, at tempor nulla felis sollicitudin leo. </p>
              </div>
              <!--panel-->
              <div class="panel">
                <p><strong>Lorem ipsum dolor sit amet,</strong> consectetur adipiscing elit. Integer vehicula lectus non urna tincidunt ullamcorper. Nam cursus, purus quis varius fringilla, ante sem volutpat felis, elementum dignissim magna nunc eu nisi. Sed imperdiet felis bibendum sem sagittis auctor. </p>
                <p>Suspendisse volutpat erat nec erat venenatis eget gravida leo ullamcorper. Proin a varius mauris. Donec vehicula, enim sit amet commodo dapibus, enim nisl faucibus sem, at tempor nulla felis sollicitudin leo. Suspendisse volutpat erat nec erat venenatis eget gravida leo ullamcorper. Proin a varius mauris. Donec vehicula, enim sit amet commodo dapibus, enim nisl faucibus sem, at tempor nulla felis sollicitudin leo. </p>
              </div>
              <!--panel--> 
            </div>
            <!--tab-content--> 
          </div>
          <!--boxtab--> 
          <a href="scripts/jquery.boxtab.js" target="_blank" class="link-download">Download Box tab plugin</a> </div>
        <!--row--> 
      </div>
      <!--main-content--> 
    </div>
    <!--wrap--> 
  </div>
  <!--content-wrapper-->
  <?php include("includes/footer.php"); ?>
</div>
<!--main-wrapper/plugins-->
<div id="shutter">
  <div class="tl"></div>
  <div class="bl"></div>
  <div class="br"></div>
  <div class="tr"></div>
</div>
<!--shutter-->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-27687715-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
