<style>.carousel-fade .carousel-inner .item {
  -webkit-transition-property: opacity;
  transition-property: opacity;
  height:400px;
}
.carousel-fade .carousel-inner .item,
.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
  opacity: 0;
}
.carousel-fade .carousel-inner .active,
.carousel-fade .carousel-inner .next.left,
.carousel-fade .carousel-inner .prev.right {
  opacity: 1;
}
.carousel-fade .carousel-inner .next,
.carousel-fade .carousel-inner .prev,
.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
  left: 0;
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
}
.carousel-fade .carousel-control {
  z-index: 2;
}
html,
body,
.carousel,
.carousel-inner,
.carousel-inner .item {
  height: 100%;
}
.item:nth-child(1) {
  background: #fff;
}
.item:nth-child(2) {
  background: #fff;
}
.item:nth-child(3) {
  background: #fff;
}

.carousel-inner img{
    width:100%;
}

</style>

<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000" style="height:400px;">
    <!-- Carousel items -->
    <div class="carousel-inner" style="height:400px;">
        <div class="active item"><img src="/theme/design/banner_01.gif" /></div>
        <div class="item"><img src="/theme/design/banner_02.gif" /></div>
        <div class="item"><img src="/theme/design/banner_03.gif" /></div>
        <div class="item"><img src="/theme/design/banner_04.gif" /></div>
        <div class="item"><img src="/theme/design/banner_05.gif" /></div>
        <div class="item"><img src="/theme/design/banner_06.gif" /></div>
    </div>
    <!-- Carousel nav -->
</div>

<script>$(function(){
    $('.carousel').carousel();
})</script>