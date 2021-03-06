<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, maximum-scale=1">
  <title>Epoxy環氧樹脂專業施工 - 尚輝樹脂</title>
  <?php require_once('meta_basic.php')?>
  <?php require_once('include.php')?>
    <?php require_once('gacode.php')?>


</head>

<body>

  <?php require_once('header.php') ?>

    <!--Top_content-->
    <?php  //定義那些User Agent String屬於手機瀏覽
function check_mobile(){
    $regex_match="/(nokia|iphone|android|motorola|^mot\-|softbank|foma|docomo|kddi|up\.browser|up\.link|";
    $regex_match.="htc|dopod|blazer|netfront|helio|hosin|huawei|novarra|CoolPad|webos|techfaith|palmsource|";
    $regex_match.="blackberry|alcatel|amoi|ktouch|nexian|samsung|^sam\-|s[cg]h|^lge|ericsson|philips|sagem|wellcom|bunjalloo|maui|";
    $regex_match.="symbian|smartphone|midp|wap|phone|windows ce|iemobile|^spice|^bird|^zte\-|longcos|pantech|gionee|^sie\-|portalmmm|";
    $regex_match.="jig\s browser|hiptop|^ucweb|^benq|haier|^lct|opera\s*mobi|opera\*mini|320x320|240x320|176x220";
    $regex_match.=")/i";
    return preg_match($regex_match, strtolower($_SERVER['HTTP_USER_AGENT']));
} ?>
      <?php if( check_mobile() ) { require_once('carousel.php'); } else { ?>
          <section id="top_content" class="top_cont_outer">
            <div class="top_cont_inner">
              <div class="container">
                <div class="top_content">
                  <div class="row">
                    <div class="col-lg-7 col-sm-7">
                      <div class="top_left_cont flipInY wow animated">
                        <h1 style="color: white;">EPOXY - 專業進口、研發、設計
    <br/> 責任施工真正一元化
    </h1>
                        <br/>
                        <a href="#contact" class="learn_more2 contactus">施工洽詢</a>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                      </div>
                    </div>
                    <div class="col-lg-5 col-sm-5"> </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!--Top_content-->
          <?php }?>
            <!--Service-->
            <section id="service" style="background: radial-gradient(ellipse at center, #ffffff 0%,#c5d0dd 84%);" >
              <div class="container">
              <h2>EPOXY環氧樹脂、奈米防水塗料專家!</h2>
                <div class="row" style="text-align: center;margin-bottom: 123px;">
                公司秉持敬業導向的理念，數十年來擁有完整的技術體系，不斷的研究發展，匠心獨運，開發專業性的豐富系列產品，專業的施工群以最優良的特性工法施作，秉持良心道德觀念的信條，肯定能造就一個滿足您要求之成功地坪。 
                </div>
                <h2>我們的承諾</h2>
                <div class="service_area">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="service_block">
                        <div class="service_icon delay-03s animated wow  zoomIn">
                          <span>
<i class="fa-flash"></i>
</span>
                        </div>
                        <h3 class="animated fadeInUp wow">誠信</h3>
                        <p class="animated fadeInDown wow">堅守承諾合約精神責任施工</p>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="service_block">
                        <div class="service_icon icon2  delay-03s animated wow zoomIn">
                          <span>
<i class="fa-comments"></i>
</span>
                        </div>
                        <h3 class="animated fadeInUp wow">專業</h3>
                        <p class="animated fadeInDown wow">擁有實務特訓專業人才及經驗豐富之專業施工群</p>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="service_block">
                        <div class="service_icon icon3  delay-03s animated wow zoomIn">
                          <span>
<i class="fa-shield"></i>
</span>
                        </div>
                        <h3 class="animated fadeInUp wow">堅持</h3>
                        <p class="animated fadeInDown wow">慎選材料嚴謹施工，品質控管效用要求永遠第一</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!--Service-->

            <section id="work_outer" style="background: #3b787e radial-gradient(ellipse farthest-corner at center bottom , #a2dedf 0%, #39646a 84%) repeat scroll 0px 0px;">
              <!--main-section-start-->
              <div class="top_cont_latest">
                <div class="container">
                  <h2 style="color:#fff;">EPOXY工程 - 服務項目</h2>
                  <div class="work_section">
                    <div class="row">
                      <div class="col-lg-6 col-sm-6 wow fadeInLeft delay-05s">
                        <div class="service-list">
                          <div class="service-list-col1">
                            <i class="icon-cog"></i>
                          </div>
                          <div class="service-list-col2">
                            <h3 style="color:#fff;">Epoxy斜坡道，車道止滑地坪</h3>
                            <p>&nbsp;</p>
                          </div>
                        </div>
                        <div class="service-list">
                          <div class="service-list-col1">
                            <i class="icon-cog"></i>
                          </div>
                          <div class="service-list-col2">
                            <h3 style="color:#fff;">Epoxy步道，停車場止滑地坪</h3>
                            <p>&nbsp;</p>
                          </div>
                        </div>
                        <div class="service-list">
                          <div class="service-list-col1">
                            <i class="icon-cog"></i>
                          </div>
                          <div class="service-list-col2">
                            <h3 style="color:#fff;">Epoxy廠房，耐重壓耐磨地坪</h3>
                            <p>&nbsp;</p>
                          </div>
                        </div>
                        <div class="service-list">
                          <div class="service-list-col1">
                            <i class="icon-cog"></i>
                          </div>
                          <div class="service-list-col2">
                            <h3 style="color:#fff;">Epoxy廠房無塵室，流展地坪</h3>
                            <p>&nbsp;</p>
                          </div>
                        </div>
                        <div class="service-list">
                          <div class="service-list-col1">
                            <i class="icon-cog"></i>
                          </div>
                          <div class="service-list-col2">
                            <h3 style="color:#fff;">Epoxy導電地坪</h3>
                            <p>&nbsp;</p>
                          </div>
                        </div>
                        <div class="work_bottom">
                          <a href="#contact" class="contact_btn contactus">聯絡我們</a>
                        </div>
                      </div>
                      <figure class="top_cont_latestimg col-lg-6 col-sm-6  text-right wow fadeInUp delay-02s">
                        <img src="<?php echo root_dir ?>img/new/Epoxy-Flooring.jpg" />
                      </figure>
                    </div>
                  </div>
                </div>
                <!--<div class="work_pic"><img src="img/dashboard_pic.png" alt=""></div>-->
              </div>
            </section>
            <!--main-section-end-->

            <!--new_portfolio-->

            <!-- Portfolio -->
            <section id="Portfolio" class="content">

              <!-- Container -->
              <div class="container portfolio-title">

                <!-- Section Title -->
                <div class="section-title">
                  <h2>成功案例</h2>
                </div>
                <!--/Section Title -->

              </div>
              <!-- Container -->

              <div class="portfolio-top"></div>

              <!-- Portfolio Plus Filters -->
              <div class="portfolio">

                <!-- Portfolio Filters -->
                <div id="filters" class="sixteen columns">
                  <ul class="clearfix">
                    <li>
                      <a id="all" href="#" data-filter="*" class="active">
                        <h5>全部</h5>
                      </a>
                    </li>
                    <li>
                      <a class="" href="#" data-filter=".Epoxyfloor">
                        <h5>Epoxy耐磨地坪</h5>
                      </a>
                    </li>
                    <li>
                      <a class="" href="#" data-filter=".waterproof">
                        <h5>Epoxy防水工程</h5>
                      </a>
                    </li>
                    <li>
                      <a class="" href="#" data-filter=".Insulation">
                        <h5>Epoxy隔熱工程</h5>
                      </a>
                    </li>
                  </ul>
                </div>
                <!--/Portfolio Filters -->
            <?php
              
              require 'casestudy_name.php';
            
              function get_casestudy_url($id){
                global $project_name;
                $value = $project_name[$id];
                return "epoxy_portfolio_detail.php?project=$id&name=$value";
              }
            
            
            ?>
                <!-- Portfolio Wrap --> 
                <div class="isotope" style="position: relative; overflow: hidden; height: 480px;" id="portfolio-wrap">

                  <!-- Portfolio Item FullScreen Expander -->
                  <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 240px, 0px) scale3d(1, 1, 1); width: 337px;height:260px; opacity: 1;" class="portfolio-item Epoxyfloor">
                    <div class="portfolio-image">
                      <img src="img/upload/18/130709152747b2267.jpg" alt="南港世界貿易 - Epoxy耐磨地坪"> </div>
                      <a class="open-project" href="<?php echo get_casestudy_url(18);?>" title="Epoxy耐磨地坪">
                     <div class="project-overlay">
                      <div class="open-project-link">
                        
                      </div>
                      <div class="project-info">
                        <div class="zoom-icon"></div>
                        <h4 class="project-name">南港世界貿易</h4>
                        <p class="project-categories">Epoxy耐磨地坪</p>
                      </div>
                    </div>
                    </a>
                  </div>
                  <!--/Portfolio Item FullScreen Expander -->

                  <!-- Portfolio Item With PrettyPhoto  -->
                  <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px;height:260px; opacity: 1;" class="portfolio-item Insulation">
                    <div class="portfolio-image">
                      <img src="img/upload/10/12051519151624d8c.jpg" alt="鐵皮屋 - Epoxy隔熱工程"> </div>
                      <a rel="Epoxy隔熱工程" href="<?php echo get_casestudy_url(10);?>" title="Epoxy隔熱工程">
                      <div class="project-overlay">
                        <div class="project-info">
                          <div class="zoom-icon"></div>
                          <h4 class="project-name">鐵皮屋</h4>
                          <p class="project-categories">Epoxy隔熱工程</p>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!--/Portfolio Item With PrettyPhoto  -->

                  <!-- Portfolio Item Video Expander  -->
                  <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(337px, 0px, 0px) scale3d(1, 1, 1); width: 337px;height:260px; opacity: 1;" class="portfolio-item Epoxyfloor">
                    <div class="portfolio-image">
                      <img src="img/upload/13/120515201027d4478.jpg" alt="室內設計 - Epoxy耐磨地坪"> </div>
                      <a class="open-project" href="<?php echo get_casestudy_url(13);?>" title="Epoxy耐磨地坪" rel="Epoxy耐磨地坪">
                    <div class="project-overlay">
                      <div class="open-project-link">
                       
                      </div>
                      <div class="project-info">
                        <div class="zoom-icon"></div>
                        <h4 class="project-name">室內設計</h4>
                        <p class="project-categories">Epoxy耐磨地坪</p>
                      </div>
                    </div>
                    </a>
                  </div>
                  <!--/Portfolio Item Video Expander  -->

                  <!-- Portfolio Item Normal Expander -->
                  <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(674px, 0px, 0px) scale3d(1, 1, 1); width: 337px;height:260px; opacity: 1;" class="portfolio-item Epoxyfloor">
                    <div class="portfolio-image">
                      <img src="img/upload/16/130709153220feda4.jpg" alt="橋鴻家具 - Epoxy耐磨地坪"> </div>
                      <a class="open-project" href="<?php echo get_casestudy_url(16);?>" title="Epoxy耐磨地坪" rel="Epoxy耐磨地坪">
                    <div class="project-overlay">
                      <div class="open-project-link">
                       
                      </div>
                      <div class="project-info">
                        <div class="zoom-icon"></div>
                        <h4 class="project-name">橋鴻家具</h4>
                        <p class="project-categories">Epoxy耐磨地坪</p>
                      </div>
                    </div>
                    </a>
                  </div>
                  <!--/Portfolio Item Normal Expander -->

                  <!-- Portfolio Item FullScreen Expander -->
                  <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 0px, 0px) scale3d(1, 1, 1); width: 337px;height:260px; opacity: 1;" class="portfolio-item Epoxyfloor">
                    <div class="portfolio-image">
                      <img src="img/upload/12/1205151938282c755.jpg" alt="戀戀大直 - Epoxy耐磨地坪"> </div>
                      <a class="open-project" href="<?php echo get_casestudy_url(12);?>" title="Epoxy耐磨地坪" rel="Epoxy耐磨地坪">
                    <div class="project-overlay">
                      <div class="open-project-link">
                       
                      </div>
                      <div class="project-info">
                        <div class="zoom-icon"></div>
                        <h4 class="project-name">戀戀大直</h4>
                        <p class="project-categories">Epoxy耐磨地坪</p>
                      </div>
                    </div>
                    </a>
                  </div>
                  <!-- Portfolio Item FullScreen Expander -->


                  <!-- Portfolio Item Normal Expander -->
                  <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(337px, 240px, 0px) scale3d(1, 1, 1); width: 337px;height:260px; opacity: 1;" class="portfolio-item waterproof">
                    <div class="portfolio-image">
                      <img src="img/upload/5/1205151839456198b.jpg" alt="家樂福 - Epoxy外牆防水"> </div>
                      <a class="open-project" href="<?php echo get_casestudy_url(5);?>" title="Epoxy外牆防水" rel="Epoxy外牆防水">
                    <div class="project-overlay">
                      <div class="open-project-link">
                       
                      </div>
                      <div class="project-info">
                        <div class="zoom-icon"></div>
                        <h4 class="project-name">家樂福</h4>
                        <p class="project-categories">Epoxy外牆防水</p>
                      </div>
                    </div>
                    </a>
                  </div>
                  <!--/Portfolio Item Normal Expander -->

                  <!-- Portfolio Item External Project  -->
                  <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(674px, 240px, 0px) scale3d(1, 1, 1); width: 337px;height:260px; opacity: 1;" class="portfolio-item Epoxyfloor">
                    <div class="portfolio-image">
                      <img src="img/upload/2/1205111505262dcfb.jpg" alt="蒂芬尼 - Epoxy耐磨地坪"> </div>
                    <a href="<?php echo get_casestudy_url(2);?>" class="external" title="Epoxy耐磨地坪" rel="Epoxy耐磨地坪">
                      <div class="project-overlay">
                        <div class="project-info">
                          <div class="zoom-icon"></div>
                          <h4 class="project-name">蒂芬尼</h4>
                          <p class="project-categories">Epoxy耐磨地坪</p>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!--/Portfolio Item External Project  -->

                  <!-- Portfolio Item With PrettyPhoto  -->
                  <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 240px, 0px) scale3d(1, 1, 1); width: 337px;height:260px; opacity: 1;" class="portfolio-item Epoxyfloor">
                    <div class="portfolio-image">
                      <img src="img/upload/19/13070915261529a70.jpg" alt="新北市消防局 - Epoxy耐磨地坪"> </div>
                    <a title="Epoxy耐磨地坪" rel="Epoxy耐磨地坪" href="<?php echo get_casestudy_url(19);?>">
                      <div class="project-overlay">
                        <div class="project-info">
                          <div class="zoom-icon"></div>
                          <h4 class="project-name">新北市消防局</h4>
                          <p class="project-categories">Epoxy耐磨地坪</p>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!--/Portfolio Item With PrettyPhoto  -->

                </div>
                <!--/Portfolio Wrap -->

              </div>
              <!--/Portfolio Plus Filters -->

              <div class="portfolio-bottom" style="text-align:center;">
                <a href="epoxy_portfolio_photo.php" style="display:inline-block;background-color:#329b0c;" class="learn_more2">瀏覽更多</a>
              </div>

              <!-- Project Page Holder-->
              <div id="project-page-holder">
                <div class="clear"></div>
                <div id="project-page-data"></div>
              </div>
              <!--/Project Page Holder-->

            </section>
            <!--/Portfolio -->

            <?php require_once('footer.php')?>
              <script>
                $(function() {
                  $(".contactus").click(function() {
                    $("html, body").animate({
                      scrollTop: $(document).height()
                    }, 1000);
                  });
                })
              </script>

              <script type="text/javascript">
                $(window).load(function() {

                  $('a').bind('click', function(event) {
                    var $anchor = $(this);

                    $('html, body').stop().animate({
                      scrollTop: $($anchor.attr('href')).offset().top - 91
                    }, 1500, 'easeInOutExpo');
                    /*
                    if you don't want to use the easing effects:
                    $('html, body').stop().animate({
                    scrollTop: $($anchor.attr('href')).offset().top
                    }, 1000);
                    */
                    event.preventDefault();
                  });
                })
              </script>

              <script type="text/javascript">
                jQuery(document).ready(function($) {
                  // Portfolio Isotope
                  var container = $('#portfolio-wrap');


                  container.isotope({
                    animationEngine: 'best-available',
                    animationOptions: {
                      duration: 200,
                      queue: false
                    },
                    layoutMode: 'fitRows'
                  });

                  $('#filters a').click(function() {
                    $('#filters a').removeClass('active');
                    $(this).addClass('active');
                    var selector = $(this).attr('data-filter');
                    container.isotope({
                      filter: selector
                    });
                    setProjects();
                    return false;
                  });


                  function splitColumns() {
                    var winWidth = $(window).width(),
                      columnNumb = 1;


                    if (winWidth > 1024) {
                      columnNumb = 4;
                    } else if (winWidth > 900) {
                      columnNumb = 2;
                    } else if (winWidth > 479) {
                      columnNumb = 2;
                    } else if (winWidth < 479) {
                      columnNumb = 1;
                    }

                    return columnNumb;
                  }

                  function setColumns() {
                    var winWidth = $(window).width(),
                      columnNumb = splitColumns(),
                      postWidth = Math.floor(winWidth / columnNumb);

                    container.find('.portfolio-item').each(function() {
                      $(this).css({
                        width: postWidth + 'px'
                      });
                    });
                  }

                  function setProjects() {
                    setColumns();
                    container.isotope('reLayout');
                  }

                  container.imagesLoaded(function() {
                    setColumns();
                  });


                  $(window).bind('resize', function() {
                    setProjects();
                  });

                });
                $(window).load(function() {
                  jQuery('#all').click();
                  return false;
                });
              </script>

            </div>
          </div>
        </div>
      </div>
      <!--<div class="work_pic"><img src="img/dashboard_pic.png" alt=""></div>-->
    </div>
  </section>
  <!--main-section-end-->


  <?php require_once('footer.php')?>
<script>
  $(function(){
      $(".contactus").click(function() {
        $("html, body").animate({ scrollTop: $(document).height() }, 1000);
      });
  })
</script>

  <script type="text/javascript">
    $(window).load(function () {

      $('a').bind('click', function (event) {
        var $anchor = $(this);

        $('html, body').stop().animate({
          scrollTop: $($anchor.attr('href')).offset().top - 91
        }, 1500, 'easeInOutExpo');
        /*
        if you don't want to use the easing effects:
        $('html, body').stop().animate({
          scrollTop: $($anchor.attr('href')).offset().top
        }, 1000);
        */
        event.preventDefault();
      });
    })
  </script>

  <script type="text/javascript">


    jQuery(document).ready(function ($) {
      // Portfolio Isotope
      var container = $('#portfolio-wrap');


      container.isotope({
        animationEngine: 'best-available',
        animationOptions: {
          duration: 200,
          queue: false
        },
        layoutMode: 'fitRows'
      });

      $('#filters a').click(function () {
        $('#filters a').removeClass('active');
        $(this).addClass('active');
        var selector = $(this).attr('data-filter');
        container.isotope({ filter: selector });
        setProjects();
        return false;
      });


      function splitColumns() {
        var winWidth = $(window).width(),
          columnNumb = 1;


        if (winWidth > 1024) {
          columnNumb = 4;
        } else if (winWidth > 900) {
          columnNumb = 2;
        } else if (winWidth > 479) {
          columnNumb = 2;
        } else if (winWidth < 479) {
          columnNumb = 1;
        }

        return columnNumb;
      }

      function setColumns() {
        var winWidth = $(window).width(),
          columnNumb = splitColumns(),
          postWidth = Math.floor(winWidth / columnNumb);

        container.find('.portfolio-item').each(function () {
          $(this).css({
            width: postWidth + 'px'
          });
        });
      }

      function setProjects() {
        setColumns();
        container.isotope('reLayout');
      }

      container.imagesLoaded(function () {
        setColumns();
      });


      $(window).bind('resize', function () {
        setProjects();
      });

    });
    $(window).load(function () {
      jQuery('#all').click();
      return false;
    });
  </script>
</body>

</html>