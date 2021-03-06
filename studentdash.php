<?php require_once( 'couch/cms.php' ); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <!--Google Analytics Tag-->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-72313310-1', 'auto');
      ga('send', 'pageview');
    </script>
  <!--End Google Analytics Tag-->

      <link rel="icon"
      type="image/png"
      href="images/favicon/baxicon.png">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Student Dashboard</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet"> <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href="css/default.css" rel="stylesheet">
    <link href="css/history.css" rel="stylesheet">
    <link href="css/jquery.fancybox.css" rel="stylesheet">

  </head>
  <body>
<!--BEGIN NAV-->
<?php include('header.html'); ?>
<!--End of Navbar-->
<section class="history">
    <h2 class="fullwidthdashboard">Student Dashboard</h2>
</section>
<div class="centerednav">
<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
        <div class="col-lg-6" id="nopad">
            <div class="col-sm-6">
              <div class="panel panel-primary">
                <div class="panel-heading text-center"><h1 id="dashheader">Events</h1></div>
                  <div class="panel-body dashpanel">
                    <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showDate=0&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=300&amp;wkst=1&amp;bgcolor=%23ECF0F1&amp;src=baxter-academy.org_n8j1pe52cu4eii2nm0dtkfpcp4%40group.calendar.google.com&amp;color=%238C500B&amp;ctz=America%2FNew_York" style="border-width:0" width="100%" height="100%" frameborder="0" scrolling="no"></iframe>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="panel panel-primary">
                  <div class="panel-heading text-center"><h1 id="dashheader">Apps</h1></div>
                  <div class="panel-body dashpanel text-center">
                        <a href="https://maine.infinitecampus.org/campus/baxter.jsp" target="_blank" class="appbutton"><button type="button" class="btn btn-ic">Infinite <br/>Campus</button></a>
                        <a href="https://classroom.google.com" target="_blank" class="appbutton"><button type="button" class="btn btn-gc">Google <br/>Classroom</button></a>
                        <a href="https://mail.google.com" target="_blank" class="appbutton"><button type="button" class="btn btn-gm">Gmail</button></a>
                        <a href="https://baxterguidance.weebly.com" target="_blank" class="appbutton"><button type="button" class="btn btn-warning" style="height:4em">Guidance</button></a>
                        <a href="http://baxterlearningcommons.weebly.com/" target="_blank" class="appbutton"><button type="button" class="btn btn-warning" style="height:4em">Baxter Learning Commons</button></a>
                </div>
                </div>
              </div>
            </div>
        <div class="col-lg-6" id="nopad">
            <div class="col-sm-6">
              <div class="panel panel-primary">
                  <div class="panel-heading text-center"><h1 id="dashheader">Lunch Form</h1></div>
                  <div class="panel-body dashpanel">
                    <cms:editable name='lunchorderform' type='richtext'>
                        <p>Hello</p>
                    </cms:editable>
                  </div>
                </div>
            </div>
            <div class="col-sm-6">
              <a class="various fancybox.iframe white" id="popout" href="opencampusmap.html">
              <div class="panel panel-primary">
                  <div class="panel-heading text-center"><h1 id="dashheader">Open Campus</h1></div>
                  <div class="panel-body dashpanel">
                    <!--iframe width="100%" height="100%" frameBorder="0" src="http://umap.openstreetmap.fr/en/map/baxter-boundaries_70733?scaleControl=false&miniMap=false&scrollWheelZoom=false&zoomControl=false&allowEdit=false&moreControl=false&datalayersControl=false&onLoadPanel=undefined&captionBar=false#14/43.6542/-70.2564"></iframe-->
                    <iframe width="100%" height="100%" frameborder="0" src="https://widgets.scribblemaps.com/sm/?d=true&z=true&lat=43.655515222619364&lng=-70.25721430778503&vz=14&type=osm_cycle&width=550&height=400&id=baxteropencampus" style="border:0" allowfullscreen></iframe>
                  </div>
                </div>
                </a>
            </div>
        </div>
    <div class="col-lg-1"></div>
</div>
</div>
<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
        <div class="col-lg-6" id="nopad">
            <div class="col-sm-12">
              <div class="panel panel-primary">
                <div class="panel-heading text-center"><h1 id="dashheader">Michele's Updates</h1></div>
                  <div class="panel-body dashpanel">
                    <div id="widgetmain" style="text-align:left;overflow-y:auto;overflow-x:hidden;width:100%;background-color:#transparent; border:0px solid #333333;"><div id="rsswidget" style="height:100%;"><iframe src="http://us1.rssfeedwidget.com/getrss.php?time=1463585972903&amp;x=http%3A%2F%2Fbaxterupdates.blogspot.com%2Ffeeds%2Fposts%2Fdefault%3Falt%3Drss&amp;w=100%&amp;h=100%&amp;bc=333333&amp;bw=0&amp;bgc=transparent&amp;m=20&amp;it=false&amp;t=(default)&amp;tc=333333&amp;ts=15&amp;tb=transparent&amp;il=true&amp;lc=0000FF&amp;ls=14&amp;lb=false&amp;id=true&amp;dc=333333&amp;ds=14&amp;idt=true&amp;dtc=284F2D&amp;dts=12" border="0" hspace="0" vspace="0" frameborder="no" marginwidth="0" marginheight="0" style="border:0; padding:0; margin:0; width:100%; height:225px;" id="rssOutput">Reading RSS Feed ...</iframe></div><div style="text-align:right;margin-bottom:0;border-top:0px solid #333333;" id="widgetbottom"><span style="font-size:70%"><a href="http://www.rssfeedwidget.com">rss feed widget</a>&nbsp;</span><br></div></div>
                </div>
              </div>
            </div>
        </div>
        <div class="col-lg-6" id="nopad">
            <div class="col-sm-6">
              <div class="panel panel-primary">
                  <div class="panel-heading text-center"><h1 id="dashheader">Forms</h1></div>
                  <div class="panel-body dashpanel scroll-y">
                  <cms:editable name='studentforms' type='richtext'><p>test</p></cms:editable>
                  </div>
                  <!--div class="panel-body dashpanel text-center">
                    <a href="https://docs.google.com/a/baxter-academy.org/forms/viewform?hl=en&id=1Zsbv9kRbJj1SGy1ekLSsH1XwQw8pXu6ZEE2YFY8T4CY" target="_blank"><button type="button" class="btn btn-danger">Flex Friday<br> Fundraising Form</button></a>
                </div-->
              </div>
            </div>
            <div class="col-sm-6">
              <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <div class="form-group" style="height:2em;">
                          <input style="text-align:center; font-size: 1.5em" type="text" class="form-control" id="box" placeholder="Search Teachers">
                    </div>
                  </div>
                  <div class="panel-body dashpanel" style="overflow-y: scroll">
                    <ul class=navList>
                            <li><a href="faculty.php#jamory"><p>Amory, Jon</p></a></li>
                            <li><a href="faculty.php#mbarnes"><p>Barnes, Matt </p></a></li>
                            <li><a href="faculty.php#sbuhlman"><p>Buhlman, Sarah</p></a></li>
                            <li><a href="faculty.php#hdippolito"><p>D'Ippolito, Heather</p></a></li>
                            <li><a href="faculty.php#jdoughty"><p>Doughty, Jonathan</p></a></li>
                            <li><a href="faculty.php#natdoug"><p>Edmunds, Nate </p></a></li>
                            <li><a href="faculty.php#dgagne"><p>Gagne, Debra</p></a></li>
                            <li><a href="faculty.php#agilman"><p>Gilman, Adam</p></a></li>
                            <li><a href="faculty.php#jguerette"><p>Guerette, Jordan</p></a></li>
                            <li><a href="faculty.php#whodous"><p>Hodous, Wells</p></a></li>
                            <li><a href="faculty.php#thowe"><p>Howe, Tia</p></a></li>
                            <li><a href="faculty.php#hlarsson"><p>Larsson, Halsted </p></a></li>
                            <li><a href="faculty.php#mlawrence"><p>Lawrence, Megan</p></a></li>
                            <li><a href="faculty.php#eli"><p>Li, Enyue      </p></a></li>
                            <li><a href="faculty.php#alukas"><p>Lukas, Alan</p></a></li>
                            <li><a href="faculty.php#lmedeiros"><p>Medeiros, Laurie </p></a></li>
                            <li><a href="faculty.php#pmoxhay"><p>Moxhay, Peter </p></a></li>
                            <li><a href="faculty.php#mnunez"><p>Nunez, Moises </p></a></li>
                            <li><a href="faculty.php#bolson"><p>Olson, Brian </p></a></li>
                            <li><a href="faculty.php#bolsonsparwol"><p>Parrott-Wolfe, Sean </p></a></li>
                            <li><a href="faculty.php#apfeifer"><p>Pfeifer, Alice </p></a></li>
                            <li><a href="faculty.php#drawson"><p>Rawson, David </p></a></li>
                            <li><a href="faculty.php#prawson"><p>Rawson, Pamela </p></a></li>
                            <li><a href="faculty.php#scogin"><p>Scogin, Sam </p></a></li>
                            <li><a href="faculty.php#astarr"><p>Starr, Aleah </p></a></li>
                            <li><a href="faculty.php#sstutzman"><p>Stutzman, Sunny </p></a></li>
                            <li><a href="faculty.php#ataylor"><p>Taylor, Angela </p></a></li>
                            <li><a href="faculty.php#kvirmalo"><p>Virmalo, Katelyn </p></a></li>
                            <li><a href="faculty.php#awinter"><p>Winter, Antonia </p></a></li>
                        </ul>
                </div>
              </div>
            </div>
        </div>
    </div>
    <div class="col-lg-1"></div>
</div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/plugins/jquery.capSlide.js"></script>
    <script src="js/plugins/owl.carousel.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>

<!--FancyBox-->
        <script type="text/javascript" src="source/jquery.fancybox.pack.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $(".various").fancybox({
                    modal       : false,
                    maxWidth    : 1280,
                    maxHeight    : 720,
                    fitToView    : false,
                    width        : '80%',
                    height        : '80%',
                    autoSize    : false,
                    closeClick    : false,
                    openEffect    : 'none',
                    closeEffect    : 'none',
                    closeBtn    : true
                });
            });
        </script>

</body>
</html>
<?php COUCH::invoke(); ?>
