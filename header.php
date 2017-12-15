<!--Header_section-->
<header id="header_outer">
  <div class="container">
    <div class="header_section">
      <div class="logo">
        <a href="javascript:void(0)">
          <img src="<?php echo root_dir ?>img/original/recruit.logo.png" alt="">
        </a>
      </div>
      <nav class="nav" id="nav">

      
        <ul class="toggle">
          <li>
            <a href="<?php echo root_dir ?>index.php">首頁</a>
          </li>
          <li>
            <a href="<?php echo root_dir ?>about.php">關於我們</a>
          </li>
          <li class="dropdown">
            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">工程簡介</a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
              <li>
                <a href="<?php echo root_dir ?>construction/index.php">工法簡介</a>
              </li>
              <li>
                <a href="<?php echo root_dir ?>construction_photo.php">施工解析圖</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="<?php echo root_dir ?>product.php">產品介紹</a>
          </li>
          <li class="dropdown">
          <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">成功案例</a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li>
              <a href="<?php echo root_dir ?>portfolio_photo.php">實績照</a>
            </li>
            <li>
              <a href="<?php echo root_dir ?>portfolio.php">實績表</a>
            </li>
          </ul>
        </li>
          <li>
            <a href="#client_outer">聯絡我們</a>
          </li>
        </ul>






        <ul class="">
          <li>
            <a href="<?php echo root_dir ?>">首頁</a>
          </li>
          <li>
          <a href="<?php echo root_dir ?>about.php">關於我們</a>
          </li>
          <li class="dropdown">
            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">工程簡介</a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li>
            <a href="<?php echo root_dir ?>construction/index.php">工法簡介</a>
          </li>
          <li>
            <a href="<?php echo root_dir ?>construction_photo.php">施工解析圖</a>
          </li>
            </ul>
          </li>
          <li>
            <a href="<?php echo root_dir ?>product.php">產品介紹</a>
          </li>
          <li class="dropdown">
            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">成功案例</a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
              <li>
                <a href="<?php echo root_dir ?>portfolio_photo.php">實績照</a>
              </li>
              <li>
                <a href="<?php echo root_dir ?>portfolio.php">實績表</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#client_outer">聯絡我們</a>
          </li>
        </ul>
      </nav>
      <a class="res-nav_click animated wobble wow" href="javascript:void(0)">
        <i class="fa-bars"></i>
      </a>
    </div>
  </div>
</header>
<!--Header_section-->

<script type="text/javascript">
    $(document).ready(function (e) {
      $('.res-nav_click').click(function () {
        $('ul.toggle').slideToggle(600)
      });

      $(document).ready(function () {
        $(window).bind('scroll', function () {
          if ($(window).scrollTop() > 0) {
            $('#header_outer').addClass('fixed');
          }
          else {
            $('#header_outer').removeClass('fixed');
          }
        });

      });


    });
    function resizeText() {
      var preferredWidth = 767;
      var displayWidth = window.innerWidth;
      var percentage = displayWidth / preferredWidth;
      var fontsizetitle = 25;
      var newFontSizeTitle = Math.floor(fontsizetitle * percentage);
      $(".divclass").css("font-size", newFontSizeTitle)
    }
    
  </script>
   <script type="text/javascript">
    $(document).ready(function (e) {
      $('#header_outer').scrollToFixed();
      $('.res-nav_click').click(function () {
        $('.main-nav').slideToggle();
        return false

      });

    });
  </script>