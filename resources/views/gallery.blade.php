@extends('layouts.plantilla')

@section('title', 'galeria')

@section('content')

<style>
@charset "UTF-8";



.carousel {
  position: relative;
  left: 500px;
  display: block;
  font-size: 0;
  border-radius: 8px;
  padding: 8px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
  background: white;
  transform: translateZ(0);
  height: 500px;
  -webkit-overflow-scrolling: touch;
  /* for tablets */
}
.touch .carousel {
  overflow: auto;
}
.carousel[data-at*=left] > .wrap::before {
  opacity: 1;
  text-indent: -50px;
}
.carousel[data-at*=right] > .wrap::after {
  opacity: 1;
  text-indent: -50px;
}
.carousel::after {
  content: "";
  pointer-events: none;
  position: absolute;
  z-index: 4;
  bottom: -4px;
  left: 0;
  background: #D82B6A;
  height: 4px;
  border-radius: 4px;
  opacity: 0;
  width: var(--scrollWidth, 0);
  left: var(--scrollLleft, 0);
  transition: opacity 0.7s, bottom 0.7ms;
}
.carousel:hover::after {
  opacity: 1;
  bottom: -10px;
}
.carousel > .wrap {
  overflow: hidden;
  border-radius: 4px;
}
.carousel > .wrap::before, .carousel > .wrap::after {
  content: "‹";
  opacity: 0;
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  z-index: 2;
  width: 50px;
  font-size: 80px;
  text-indent: -30px;
  line-height: 200px;
  font-family: monospace;
  color: #555;
  font-weight: bold;
  border-radius: 8px;
  pointer-events: none;
  transition: 0.2s ease-out;
  background: linear-gradient(to right, white 20%, transparent);
}
.carousel > .wrap::after {
  transform: rotate(180deg);
  left: auto;
  right: 0;
}
.carousel > .wrap > ul {
  list-style: none;
  white-space: nowrap;
  height: 485px;
}
.carousel > .wrap > ul > li {
  display: inline-block;
  vertical-align: middle;
  height: 100%;
  margin: 0 0 0 5px;
  position: relative;
  overflow: hidden;
  transition: 0.25s ease-out;
}
.carousel > .wrap > ul > li:first-child {
  margin: 0;
}
.carousel > .wrap > ul > li > img {
  display: block;
  height: 100%;
  margin: auto;
  vertical-align: bottom;
  position: relative;
  z-index: 1;
  transition: 1s ease;
}

.carousel {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  width: 50%;
  max-width: 900px;
  min-width: 550px;
  margin: auto;
}
</style>
{{-- position: absolute; left:40vw; top:6vh; font-size: 1.8em; --}}
<h1 style="display: flex; justify-content: center; padding: 40px; font-size: 40px" >Fotos del último torneo</h1>
<div class="carousel">
    <div class="wrap">
      <ul>
        <li> <img src="{{asset('img/post/padelgallery_01.jpg')}}" alt="pista">"/></li>
        <li> <img src="{{asset('img/post/padel_03.jpg')}}" alt="pista">"/></li>
        <li> <img src="{{asset('img/post/padel_04.jpg')}}" alt="pista">"/></li>
        <li> <img src="{{asset('img/post/padel_05.jpg')}}" alt="pista">"/></li>
        <li> <img src="{{asset('img/post/padel_06.jpg')}}" alt="pista">"/></li>
        <li> <img src="{{asset('img/post/padel_02.jpg')}}" alt="pista">"/></li>
        <li> <img src="{{asset('img/post/padel_02.jpg')}}" alt="pista">"/></li>
      </ul>
    </div>
  </div>

<footer style="position: absolute; bottom: 0; left: 35%;">
    <span><small style="color: black;"> Realizado por Manuel y Javier, alumnado del IES Ruiz Gijón</small></span>
</footer>

<script>
    function HoverCarousel( elm, settings ){
  this.DOM = {
    scope: elm,
    wrap: elm.querySelector('ul').parentNode
  }

  this.containerWidth = 0;
  this.scrollWidth = 0;
  this.posFromLeft = 0;    // Stripe position from the left of the screen
  this.stripePos = 0;    // When relative mouse position inside the thumbs stripe
  this.animated = null;
  this.callbacks = {}

  this.init()
}

HoverCarousel.prototype = {
  init(){
    this.bind()
  },

  destroy(){
    this.DOM.scope.removeEventListener('mouseenter', this.callbacks.onMouseEnter)
    this.DOM.scope.removeEventListener('mousemove', this.callbacks.onMouseMove)
  },

  bind(){
    this.callbacks.onMouseEnter = this.onMouseEnter.bind(this)
    this.callbacks.onMouseMove = e => {
      if( this.mouseMoveRAF )
        cancelAnimationFrame(this.mouseMoveRAF)

      this.mouseMoveRAF = requestAnimationFrame(this.onMouseMove.bind(this, e))
    }

    this.DOM.scope.addEventListener('mouseenter', this.callbacks.onMouseEnter)
    this.DOM.scope.addEventListener('mousemove', this.callbacks.onMouseMove)
  },

  // calculate the thumbs container width
  onMouseEnter(e){
    this.nextMore = this.prevMore = false // reset

    this.containerWidth       = this.DOM.wrap.clientWidth;
    this.scrollWidth          = this.DOM.wrap.scrollWidth;
    // padding in percentage of the area which the mouse movement affects
    this.padding              = 0.2 * this.containerWidth;
    this.posFromLeft          = this.DOM.wrap.getBoundingClientRect().left;
    var stripePos             = e.pageX - this.padding - this.posFromLeft;
    this.pos                  = stripePos / (this.containerWidth - this.padding*2);
    this.scrollPos            = (this.scrollWidth - this.containerWidth ) * this.pos;

    // temporary add smoothness to the scroll
    this.DOM.wrap.style.scrollBehavior = 'smooth';

    if( this.scrollPos < 0 )
      this.scrollPos = 0;

    if( this.scrollPos > (this.scrollWidth - this.containerWidth) )
      this.scrollPos = this.scrollWidth - this.containerWidth

    this.DOM.wrap.scrollLeft = this.scrollPos
    this.DOM.scope.style.setProperty('--scrollWidth',  (this.containerWidth / this.scrollWidth) * 100 + '%');
    this.DOM.scope.style.setProperty('--scrollLleft',  (this.scrollPos / this.scrollWidth ) * 100 + '%');

    // lock UI until mouse-enter scroll is finihsed, after aprox 200ms
    clearTimeout(this.animated)
    this.animated = setTimeout(() => {
      this.animated = null
      this.DOM.wrap.style.scrollBehavior = 'auto';
    }, 200)

    return this
  },

  // move the stripe left or right according to mouse position
  onMouseMove(e){
    // don't move anything until inital movement on 'mouseenter' has finished
    if( this.animated ) return

    this.ratio = this.scrollWidth / this.containerWidth

    // the mouse X position, "normalized" to the carousel position
    var stripePos = e.pageX - this.padding - this.posFromLeft

    if( stripePos < 0 )
        stripePos = 0

    // calculated position between 0 to 1
    this.pos = stripePos / (this.containerWidth - this.padding*2)

    // calculate the percentage of the mouse position within the carousel
    this.scrollPos = (this.scrollWidth - this.containerWidth ) * this.pos

    this.DOM.wrap.scrollLeft = this.scrollPos

    // update scrollbar
    if( this.scrollPos < (this.scrollWidth - this.containerWidth) )
      this.DOM.scope.style.setProperty('--scrollLleft',  (this.scrollPos / this.scrollWidth ) * 100 + '%');

    // check if element has reached an edge
    this.prevMore = this.DOM.wrap.scrollLeft > 0
    this.nextMore = this.scrollWidth - this.containerWidth - this.DOM.wrap.scrollLeft > 5

    this.DOM.scope.setAttribute('data-at',
      (this.prevMore  ? 'left ' : ' ')
      + (this.nextMore ? 'right' : '')
    )
  }
}

var carouselElm = document.querySelector('.carousel')
new HoverCarousel(carouselElm)
</script>

@endsection
