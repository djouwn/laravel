<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <title> Admin Panel</title>
</head>

<body>
@extends('layouts.app')

@section('content')   
<!--Container -->
<div class="mx-auto bg-grey-lightest">
    <!--Screen-->
    <div class="min-h-screen flex flex-col">
        <!--Header Section Starts Here-->
        <header class="bg-nav">
            <div class="flex justify-between">
                <div class="p-1 mx-3 inline-flex items-center">
                    <i class="fas fa-bars pr-2 text-white" onclick="sidebarToggle()"></i>
                    <h1 class="text-white p-2">Logo</h1>
                </div>
                <div class="p-1 flex flex-row items-center">
                    <div id="ProfileDropDown" class="rounded hidden shadow-md bg-white absolute pin-t mt-12 mr-1 pin-r">
                        <ul class="list-reset">
                          <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">My account</a></li>
                          <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Notifications</a></li>
                          <li><hr class="border-t mx-2 border-grey-ligght"></li>
                          <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!--/Header-->

        <div class="flex flex-1">
            <!--Sidebar-->
            <aside id="sidebar" class="bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block">
                <div class="flex">

                </div>
                <ul class="list-reset flex flex-col">
                    <li class=" w-full h-full py-3 px-2 border-b border-light-border ">
                        <a href="index.html"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fas fa-tachometer-alt float-left mx-2"></i>
                            Dashboard
                            <span><i class="fas fa-angle-right float-right"></i></span>
                        </a>
</li>
                 

            </aside>
            <!--/Sidebar-->
            <!--Main-->
            <main class="bg-white-500 flex-1 p-3 overflow-hidden">

                
                    <!-- /Cards Section Ends Here -->

                    <!--Grid Form-->

                    <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
                        <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                               All Users
                            </div>
                            <div class="p-3">
                                <table class="table-responsive w-full rounded">
                                    <thead>
                                      <tr>
                                        <th class="border w-1/4 px-4 py-2">Username</th>
                                        <th class="border w-1/6 px-4 py-2">User email</th>
                                        <th class="border w-1/6 px-4 py-2">User role</th>
                                     
                                      </tr>
                                    </thead>
                                    <tbody>
                                    <tbody>
    @foreach($users as $user)
        <tr>
            <td class="border px-4 py-2">{{ $user->name }}</td>
            <td class="border px-4 py-2">{{ $user->email }}</td>
            <td class="border px-4 py-2">{{ $user->role }}</td>
        </tr>
    @endforeach
</tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--/Grid Form-->
                </div>
            </main>
            <!--/Main-->
        </div>
        <!--Footer-->
        <footer class="bg-grey-darkest text-white p-2">
            <div class="flex flex-1 mx-auto">&copy; Road Star</div>
        </footer>
        <!--/footer-->

    </div>

</div>
<style>
    /*!
 * Font Awesome Free 5.2.0 by @fontawesome - https://fontawesome.com
 * License - https://fontawesome.com/license (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License)
 */
.fa,
.fas,
.far,
.fal,
.fab {
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  display: inline-block;
  font-style: normal;
  font-variant: normal;
  text-rendering: auto;
  line-height: 1; }

.fa-lg {
  font-size: 1.33333em;
  line-height: 0.75em;
  vertical-align: -.0667em; }

.fa-xs {
  font-size: .75em; }

.fa-sm {
  font-size: .875em; }

.fa-1x {
  font-size: 1em; }

.fa-2x {
  font-size: 2em; }

.fa-3x {
  font-size: 3em; }

.fa-4x {
  font-size: 4em; }

.fa-5x {
  font-size: 5em; }

.fa-6x {
  font-size: 6em; }

.fa-7x {
  font-size: 7em; }

.fa-8x {
  font-size: 8em; }

.fa-9x {
  font-size: 9em; }

.fa-10x {
  font-size: 10em; }

.fa-fw {
  text-align: center;
  width: 1.25em; }

.fa-ul {
  list-style-type: none;
  margin-left: 2.5em;
  padding-left: 0; }
  .fa-ul > li {
    position: relative; }

.fa-li {
  left: -2em;
  position: absolute;
  text-align: center;
  width: 2em;
  line-height: inherit; }

.fa-border {
  border: solid 0.08em #eee;
  border-radius: .1em;
  padding: .2em .25em .15em; }

.fa-pull-left {
  float: left; }

.fa-pull-right {
  float: right; }

.fa.fa-pull-left,
.fas.fa-pull-left,
.far.fa-pull-left,
.fal.fa-pull-left,
.fab.fa-pull-left {
  margin-right: .3em; }

.fa.fa-pull-right,
.fas.fa-pull-right,
.far.fa-pull-right,
.fal.fa-pull-right,
.fab.fa-pull-right {
  margin-left: .3em; }

.fa-spin {
  -webkit-animation: fa-spin 2s infinite linear;
          animation: fa-spin 2s infinite linear; }

.fa-pulse {
  -webkit-animation: fa-spin 1s infinite steps(8);
          animation: fa-spin 1s infinite steps(8); }

@-webkit-keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg); }
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg); } }

@keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg); }
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg); } }

.fa-rotate-90 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
  -webkit-transform: rotate(90deg);
          transform: rotate(90deg); }

.fa-rotate-180 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
  -webkit-transform: rotate(180deg);
          transform: rotate(180deg); }

.fa-rotate-270 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
  -webkit-transform: rotate(270deg);
          transform: rotate(270deg); }

.fa-flip-horizontal {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
  -webkit-transform: scale(-1, 1);
          transform: scale(-1, 1); }

.fa-flip-vertical {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
  -webkit-transform: scale(1, -1);
          transform: scale(1, -1); }

.fa-flip-horizontal.fa-flip-vertical {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
  -webkit-transform: scale(-1, -1);
          transform: scale(-1, -1); }

:root .fa-rotate-90,
:root .fa-rotate-180,
:root .fa-rotate-270,
:root .fa-flip-horizontal,
:root .fa-flip-vertical {
  -webkit-filter: none;
          filter: none; }

.fa-stack {
  display: inline-block;
  height: 2em;
  line-height: 2em;
  position: relative;
  vertical-align: middle;
  width: 2em; }

.fa-stack-1x,
.fa-stack-2x {
  left: 0;
  position: absolute;
  text-align: center;
  width: 100%; }

.fa-stack-1x {
  line-height: inherit; }

.fa-stack-2x {
  font-size: 2em; }

.fa-inverse {
  color: #fff; }

/* Font Awesome uses the Unicode Private Use Area (PUA) to ensure screen
readers do not read off random characters that represent icons */
.fa-500px:before {
  content: "\f26e"; }

.fa-accessible-icon:before {
  content: "\f368"; }

.fa-accusoft:before {
  content: "\f369"; }

.fa-address-book:before {
  content: "\f2b9"; }

.fa-address-card:before {
  content: "\f2bb"; }

.fa-adjust:before {
  content: "\f042"; }

.fa-adn:before {
  content: "\f170"; }

.fa-adversal:before {
  content: "\f36a"; }

.fa-affiliatetheme:before {
  content: "\f36b"; }

.fa-air-freshener:before {
  content: "\f5d0"; }

.fa-algolia:before {
  content: "\f36c"; }

.fa-align-center:before {
  content: "\f037"; }

.fa-align-justify:before {
  content: "\f039"; }

.fa-align-left:before {
  content: "\f036"; }

.fa-align-right:before {
  content: "\f038"; }

.fa-allergies:before {
  content: "\f461"; }

.fa-amazon:before {
  content: "\f270"; }

.fa-amazon-pay:before {
  content: "\f42c"; }

.fa-ambulance:before {
  content: "\f0f9"; }

.fa-american-sign-language-interpreting:before {
  content: "\f2a3"; }

.fa-amilia:before {
  content: "\f36d"; }

.fa-anchor:before {
  content: "\f13d"; }

.fa-android:before {
  content: "\f17b"; }

.fa-angellist:before {
  content: "\f209"; }

.fa-angle-double-down:before {
  content: "\f103"; }

.fa-angle-double-left:before {
  content: "\f100"; }

.fa-angle-double-right:before {
  content: "\f101"; }

.fa-angle-double-up:before {
  content: "\f102"; }

.fa-angle-down:before {
  content: "\f107"; }

.fa-angle-left:before {
  content: "\f104"; }

.fa-angle-right:before {
  content: "\f105"; }

.fa-angle-up:before {
  content: "\f106"; }

.fa-angry:before {
  content: "\f556"; }

.fa-angrycreative:before {
  content: "\f36e"; }

.fa-angular:before {
  content: "\f420"; }

.fa-app-store:before {
  content: "\f36f"; }

.fa-app-store-ios:before {
  content: "\f370"; }

.fa-apper:before {
  content: "\f371"; }

.fa-apple:before {
  content: "\f179"; }

.fa-apple-alt:before {
  content: "\f5d1"; }

.fa-apple-pay:before {
  content: "\f415"; }

.fa-archive:before {
  content: "\f187"; }

.fa-archway:before {
  content: "\f557"; }

.fa-arrow-alt-circle-down:before {
  content: "\f358"; }

.fa-arrow-alt-circle-left:before {
  content: "\f359"; }

.fa-arrow-alt-circle-right:before {
  content: "\f35a"; }

.fa-arrow-alt-circle-up:before {
  content: "\f35b"; }

.fa-arrow-circle-down:before {
  content: "\f0ab"; }

.fa-arrow-circle-left:before {
  content: "\f0a8"; }

.fa-arrow-circle-right:before {
  content: "\f0a9"; }

.fa-arrow-circle-up:before {
  content: "\f0aa"; }

.fa-arrow-down:before {
  content: "\f063"; }

.fa-arrow-left:before {
  content: "\f060"; }

.fa-arrow-right:before {
  content: "\f061"; }

.fa-arrow-up:before {
  content: "\f062"; }

.fa-arrows-alt:before {
  content: "\f0b2"; }

.fa-arrows-alt-h:before {
  content: "\f337"; }

.fa-arrows-alt-v:before {
  content: "\f338"; }

.fa-assistive-listening-systems:before {
  content: "\f2a2"; }

.fa-asterisk:before {
  content: "\f069"; }

.fa-asymmetrik:before {
  content: "\f372"; }

.fa-at:before {
  content: "\f1fa"; }

.fa-atlas:before {
  content: "\f558"; }

.fa-atom:before {
  content: "\f5d2"; }

.fa-audible:before {
  content: "\f373"; }

.fa-audio-description:before {
  content: "\f29e"; }

.fa-autoprefixer:before {
  content: "\f41c"; }

.fa-avianex:before {
  content: "\f374"; }

.fa-aviato:before {
  content: "\f421"; }

.fa-award:before {
  content: "\f559"; }

.fa-aws:before {
  content: "\f375"; }

.fa-backspace:before {
  content: "\f55a"; }

.fa-backward:before {
  content: "\f04a"; }

.fa-balance-scale:before {
  content: "\f24e"; }

.fa-ban:before {
  content: "\f05e"; }

.fa-band-aid:before {
  content: "\f462"; }

.fa-bandcamp:before {
  content: "\f2d5"; }

.fa-barcode:before {
  content: "\f02a"; }

.fa-bars:before {
  content: "\f0c9"; }

.fa-baseball-ball:before {
  content: "\f433"; }

.fa-basketball-ball:before {
  content: "\f434"; }

.fa-bath:before {
  content: "\f2cd"; }

.fa-battery-empty:before {
  content: "\f244"; }

.fa-battery-full:before {
  content: "\f240"; }

.fa-battery-half:before {
  content: "\f242"; }

.fa-battery-quarter:before {
  content: "\f243"; }

.fa-battery-three-quarters:before {
  content: "\f241"; }

.fa-bed:before {
  content: "\f236"; }

.fa-beer:before {
  content: "\f0fc"; }

.fa-behance:before {
  content: "\f1b4"; }

.fa-behance-square:before {
  content: "\f1b5"; }

.fa-bell:before {
  content: "\f0f3"; }

.fa-bell-slash:before {
  content: "\f1f6"; }

.fa-bezier-curve:before {
  content: "\f55b"; }

.fa-bicycle:before {
  content: "\f206"; }

.fa-bimobject:before {
  content: "\f378"; }

.fa-binoculars:before {
  content: "\f1e5"; }

.fa-birthday-cake:before {
  content: "\f1fd"; }

.fa-bitbucket:before {
  content: "\f171"; }

.fa-bitcoin:before {
  content: "\f379"; }

.fa-bity:before {
  content: "\f37a"; }

.fa-black-tie:before {
  content: "\f27e"; }

.fa-blackberry:before {
  content: "\f37b"; }

.fa-blender:before {
  content: "\f517"; }

.fa-blind:before {
  content: "\f29d"; }

.fa-blogger:before {
  content: "\f37c"; }

.fa-blogger-b:before {
  content: "\f37d"; }

.fa-bluetooth:before {
  content: "\f293"; }

.fa-bluetooth-b:before {
  content: "\f294"; }

.fa-bold:before {
  content: "\f032"; }

.fa-bolt:before {
  content: "\f0e7"; }

.fa-bomb:before {
  content: "\f1e2"; }

.fa-bone:before {
  content: "\f5d7"; }

.fa-bong:before {
  content: "\f55c"; }

.fa-book:before {
  content: "\f02d"; }

.fa-book-open:before {
  content: "\f518"; }

.fa-book-reader:before {
  content: "\f5da"; }

.fa-bookmark:before {
  content: "\f02e"; }

.fa-bowling-ball:before {
  content: "\f436"; }

.fa-box:before {
  content: "\f466"; }

.fa-box-open:before {
  content: "\f49e"; }

.fa-boxes:before {
  content: "\f468"; }

.fa-braille:before {
  content: "\f2a1"; }

.fa-brain:before {
  content: "\f5dc"; }

.fa-briefcase:before {
  content: "\f0b1"; }

.fa-briefcase-medical:before {
  content: "\f469"; }

.fa-broadcast-tower:before {
  content: "\f519"; }

.fa-broom:before {
  content: "\f51a"; }

.fa-brush:before {
  content: "\f55d"; }

.fa-btc:before {
  content: "\f15a"; }

.fa-bug:before {
  content: "\f188"; }

.fa-building:before {
  content: "\f1ad"; }

.fa-bullhorn:before {
  content: "\f0a1"; }

.fa-bullseye:before {
  content: "\f140"; }

.fa-burn:before {
  content: "\f46a"; }

.fa-buromobelexperte:before {
  content: "\f37f"; }

.fa-bus:before {
  content: "\f207"; }

.fa-bus-alt:before {
  content: "\f55e"; }

.fa-buysellads:before {
  content: "\f20d"; }

.fa-calculator:before {
  content: "\f1ec"; }

.fa-calendar:before {
  content: "\f133"; }

.fa-calendar-alt:before {
  content: "\f073"; }

.fa-calendar-check:before {
  content: "\f274"; }

.fa-calendar-minus:before {
  content: "\f272"; }

.fa-calendar-plus:before {
  content: "\f271"; }

.fa-calendar-times:before {
  content: "\f273"; }

.fa-camera:before {
  content: "\f030"; }

.fa-camera-retro:before {
  content: "\f083"; }

.fa-cannabis:before {
  content: "\f55f"; }

.fa-capsules:before {
  content: "\f46b"; }

.fa-car:before {
  content: "\f1b9"; }

.fa-car-alt:before {
  content: "\f5de"; }

.fa-car-battery:before {
  content: "\f5df"; }

.fa-car-crash:before {
  content: "\f5e1"; }

.fa-car-side:before {
  content: "\f5e4"; }

.fa-caret-down:before {
  content: "\f0d7"; }

.fa-caret-left:before {
  content: "\f0d9"; }

.fa-caret-right:before {
  content: "\f0da"; }

.fa-caret-square-down:before {
  content: "\f150"; }

.fa-caret-square-left:before {
  content: "\f191"; }

.fa-caret-square-right:before {
  content: "\f152"; }

.fa-caret-square-up:before {
  content: "\f151"; }

.fa-caret-up:before {
  content: "\f0d8"; }

.fa-cart-arrow-down:before {
  content: "\f218"; }

.fa-cart-plus:before {
  content: "\f217"; }

.fa-cc-amazon-pay:before {
  content: "\f42d"; }

.fa-cc-amex:before {
  content: "\f1f3"; }

.fa-cc-apple-pay:before {
  content: "\f416"; }

.fa-cc-diners-club:before {
  content: "\f24c"; }

.fa-cc-discover:before {
  content: "\f1f2"; }

.fa-cc-jcb:before {
  content: "\f24b"; }

.fa-cc-mastercard:before {
  content: "\f1f1"; }

.fa-cc-paypal:before {
  content: "\f1f4"; }

.fa-cc-stripe:before {
  content: "\f1f5"; }

.fa-cc-visa:before {
  content: "\f1f0"; }

.fa-centercode:before {
  content: "\f380"; }

.fa-certificate:before {
  content: "\f0a3"; }

.fa-chalkboard:before {
  content: "\f51b"; }

.fa-chalkboard-teacher:before {
  content: "\f51c"; }

.fa-charging-station:before {
  content: "\f5e7"; }

.fa-chart-area:before {
  content: "\f1fe"; }

.fa-chart-bar:before {
  content: "\f080"; }

.fa-chart-line:before {
  content: "\f201"; }

.fa-chart-pie:before {
  content: "\f200"; }

.fa-check:before {
  content: "\f00c"; }

.fa-check-circle:before {
  content: "\f058"; }

.fa-check-double:before {
  content: "\f560"; }

.fa-check-square:before {
  content: "\f14a"; }

.fa-chess:before {
  content: "\f439"; }

.fa-chess-bishop:before {
  content: "\f43a"; }

.fa-chess-board:before {
  content: "\f43c"; }

.fa-chess-king:before {
  content: "\f43f"; }

.fa-chess-knight:before {
  content: "\f441"; }

.fa-chess-pawn:before {
  content: "\f443"; }

.fa-chess-queen:before {
  content: "\f445"; }

.fa-chess-rook:before {
  content: "\f447"; }

.fa-chevron-circle-down:before {
  content: "\f13a"; }

.fa-chevron-circle-left:before {
  content: "\f137"; }

.fa-chevron-circle-right:before {
  content: "\f138"; }

.fa-chevron-circle-up:before {
  content: "\f139"; }

.fa-chevron-down:before {
  content: "\f078"; }

.fa-chevron-left:before {
  content: "\f053"; }

.fa-chevron-right:before {
  content: "\f054"; }

.fa-chevron-up:before {
  content: "\f077"; }

.fa-child:before {
  content: "\f1ae"; }

.fa-chrome:before {
  content: "\f268"; }

.fa-church:before {
  content: "\f51d"; }

.fa-circle:before {
  content: "\f111"; }

.fa-circle-notch:before {
  content: "\f1ce"; }

.fa-clipboard:before {
  content: "\f328"; }

.fa-clipboard-check:before {
  content: "\f46c"; }

.fa-clipboard-list:before {
  content: "\f46d"; }

.fa-clock:before {
  content: "\f017"; }

.fa-clone:before {
  content: "\f24d"; }

.fa-closed-captioning:before {
  content: "\f20a"; }

.fa-cloud:before {
  content: "\f0c2"; }

.fa-cloud-download-alt:before {
  content: "\f381"; }

.fa-cloud-upload-alt:before {
  content: "\f382"; }

.fa-cloudscale:before {
  content: "\f383"; }

.fa-cloudsmith:before {
  content: "\f384"; }

.fa-cloudversify:before {
  content: "\f385"; }

.fa-cocktail:before {
  content: "\f561"; }

.fa-code:before {
  content: "\f121"; }

.fa-code-branch:before {
  content: "\f126"; }

.fa-codepen:before {
  content: "\f1cb"; }

.fa-codiepie:before {
  content: "\f284"; }

.fa-coffee:before {
  content: "\f0f4"; }

.fa-cog:before {
  content: "\f013"; }

.fa-cogs:before {
  content: "\f085"; }

.fa-coins:before {
  content: "\f51e"; }

.fa-columns:before {
  content: "\f0db"; }

.fa-comment:before {
  content: "\f075"; }

.fa-comment-alt:before {
  content: "\f27a"; }

.fa-comment-dots:before {
  content: "\f4ad"; }

.fa-comment-slash:before {
  content: "\f4b3"; }

.fa-comments:before {
  content: "\f086"; }

.fa-compact-disc:before {
  content: "\f51f"; }

.fa-compass:before {
  content: "\f14e"; }

.fa-compress:before {
  content: "\f066"; }

.fa-concierge-bell:before {
  content: "\f562"; }

.fa-connectdevelop:before {
  content: "\f20e"; }

.fa-contao:before {
  content: "\f26d"; }

.fa-cookie:before {
  content: "\f563"; }

.fa-cookie-bite:before {
  content: "\f564"; }

.fa-copy:before {
  content: "\f0c5"; }

.fa-copyright:before {
  content: "\f1f9"; }

.fa-couch:before {
  content: "\f4b8"; }

.fa-cpanel:before {
  content: "\f388"; }

.fa-creative-commons:before {
  content: "\f25e"; }

.fa-creative-commons-by:before {
  content: "\f4e7"; }

.fa-creative-commons-nc:before {
  content: "\f4e8"; }

.fa-creative-commons-nc-eu:before {
  content: "\f4e9"; }

.fa-creative-commons-nc-jp:before {
  content: "\f4ea"; }

.fa-creative-commons-nd:before {
  content: "\f4eb"; }

.fa-creative-commons-pd:before {
  content: "\f4ec"; }

.fa-creative-commons-pd-alt:before {
  content: "\f4ed"; }

.fa-creative-commons-remix:before {
  content: "\f4ee"; }

.fa-creative-commons-sa:before {
  content: "\f4ef"; }

.fa-creative-commons-sampling:before {
  content: "\f4f0"; }

.fa-creative-commons-sampling-plus:before {
  content: "\f4f1"; }

.fa-creative-commons-share:before {
  content: "\f4f2"; }

.fa-credit-card:before {
  content: "\f09d"; }

.fa-crop:before {
  content: "\f125"; }

.fa-crop-alt:before {
  content: "\f565"; }

.fa-crosshairs:before {
  content: "\f05b"; }

.fa-crow:before {
  content: "\f520"; }

.fa-crown:before {
  content: "\f521"; }

.fa-css3:before {
  content: "\f13c"; }

.fa-css3-alt:before {
  content: "\f38b"; }

.fa-cube:before {
  content: "\f1b2"; }

.fa-cubes:before {
  content: "\f1b3"; }

.fa-cut:before {
  content: "\f0c4"; }

.fa-cuttlefish:before {
  content: "\f38c"; }

.fa-d-and-d:before {
  content: "\f38d"; }

.fa-dashcube:before {
  content: "\f210"; }

.fa-database:before {
  content: "\f1c0"; }

.fa-deaf:before {
  content: "\f2a4"; }

.fa-delicious:before {
  content: "\f1a5"; }

.fa-deploydog:before {
  content: "\f38e"; }

.fa-deskpro:before {
  content: "\f38f"; }

.fa-desktop:before {
  content: "\f108"; }

.fa-deviantart:before {
  content: "\f1bd"; }

.fa-diagnoses:before {
  content: "\f470"; }

.fa-dice:before {
  content: "\f522"; }

.fa-dice-five:before {
  content: "\f523"; }

.fa-dice-four:before {
  content: "\f524"; }

.fa-dice-one:before {
  content: "\f525"; }

.fa-dice-six:before {
  content: "\f526"; }

.fa-dice-three:before {
  content: "\f527"; }

.fa-dice-two:before {
  content: "\f528"; }

.fa-digg:before {
  content: "\f1a6"; }

.fa-digital-ocean:before {
  content: "\f391"; }

.fa-digital-tachograph:before {
  content: "\f566"; }

.fa-directions:before {
  content: "\f5eb"; }

.fa-discord:before {
  content: "\f392"; }

.fa-discourse:before {
  content: "\f393"; }

.fa-divide:before {
  content: "\f529"; }

.fa-dizzy:before {
  content: "\f567"; }

.fa-dna:before {
  content: "\f471"; }

.fa-dochub:before {
  content: "\f394"; }

.fa-docker:before {
  content: "\f395"; }

.fa-dollar-sign:before {
  content: "\f155"; }

.fa-dolly:before {
  content: "\f472"; }

.fa-dolly-flatbed:before {
  content: "\f474"; }

.fa-donate:before {
  content: "\f4b9"; }

.fa-door-closed:before {
  content: "\f52a"; }

.fa-door-open:before {
  content: "\f52b"; }

.fa-dot-circle:before {
  content: "\f192"; }

.fa-dove:before {
  content: "\f4ba"; }

.fa-download:before {
  content: "\f019"; }

.fa-draft2digital:before {
  content: "\f396"; }

.fa-drafting-compass:before {
  content: "\f568"; }

.fa-draw-polygon:before {
  content: "\f5ee"; }

.fa-dribbble:before {
  content: "\f17d"; }

.fa-dribbble-square:before {
  content: "\f397"; }

.fa-dropbox:before {
  content: "\f16b"; }

.fa-drum:before {
  content: "\f569"; }

.fa-drum-steelpan:before {
  content: "\f56a"; }

.fa-drupal:before {
  content: "\f1a9"; }

.fa-dumbbell:before {
  content: "\f44b"; }

.fa-dyalog:before {
  content: "\f399"; }

.fa-earlybirds:before {
  content: "\f39a"; }

.fa-ebay:before {
  content: "\f4f4"; }

.fa-edge:before {
  content: "\f282"; }

.fa-edit:before {
  content: "\f044"; }

.fa-eject:before {
  content: "\f052"; }

.fa-elementor:before {
  content: "\f430"; }

.fa-ellipsis-h:before {
  content: "\f141"; }

.fa-ellipsis-v:before {
  content: "\f142"; }

.fa-ello:before {
  content: "\f5f1"; }

.fa-ember:before {
  content: "\f423"; }

.fa-empire:before {
  content: "\f1d1"; }

.fa-envelope:before {
  content: "\f0e0"; }

.fa-envelope-open:before {
  content: "\f2b6"; }

.fa-envelope-square:before {
  content: "\f199"; }

.fa-envira:before {
  content: "\f299"; }

.fa-equals:before {
  content: "\f52c"; }

.fa-eraser:before {
  content: "\f12d"; }

.fa-erlang:before {
  content: "\f39d"; }

.fa-ethereum:before {
  content: "\f42e"; }

.fa-etsy:before {
  content: "\f2d7"; }

.fa-euro-sign:before {
  content: "\f153"; }

.fa-exchange-alt:before {
  content: "\f362"; }

.fa-exclamation:before {
  content: "\f12a"; }

.fa-exclamation-circle:before {
  content: "\f06a"; }

.fa-exclamation-triangle:before {
  content: "\f071"; }

.fa-expand:before {
  content: "\f065"; }

.fa-expand-arrows-alt:before {
  content: "\f31e"; }

.fa-expeditedssl:before {
  content: "\f23e"; }

.fa-external-link-alt:before {
  content: "\f35d"; }

.fa-external-link-square-alt:before {
  content: "\f360"; }

.fa-eye:before {
  content: "\f06e"; }

.fa-eye-dropper:before {
  content: "\f1fb"; }

.fa-eye-slash:before {
  content: "\f070"; }

.fa-facebook:before {
  content: "\f09a"; }

.fa-facebook-f:before {
  content: "\f39e"; }

.fa-facebook-messenger:before {
  content: "\f39f"; }

.fa-facebook-square:before {
  content: "\f082"; }

.fa-fast-backward:before {
  content: "\f049"; }

.fa-fast-forward:before {
  content: "\f050"; }

.fa-fax:before {
  content: "\f1ac"; }

.fa-feather:before {
  content: "\f52d"; }

.fa-feather-alt:before {
  content: "\f56b"; }

.fa-female:before {
  content: "\f182"; }

.fa-fighter-jet:before {
  content: "\f0fb"; }

.fa-file:before {
  content: "\f15b"; }

.fa-file-alt:before {
  content: "\f15c"; }

.fa-file-archive:before {
  content: "\f1c6"; }

.fa-file-audio:before {
  content: "\f1c7"; }

.fa-file-code:before {
  content: "\f1c9"; }

.fa-file-contract:before {
  content: "\f56c"; }

.fa-file-download:before {
  content: "\f56d"; }

.fa-file-excel:before {
  content: "\f1c3"; }

.fa-file-export:before {
  content: "\f56e"; }

.fa-file-image:before {
  content: "\f1c5"; }

.fa-file-import:before {
  content: "\f56f"; }

.fa-file-invoice:before {
  content: "\f570"; }

.fa-file-invoice-dollar:before {
  content: "\f571"; }

.fa-file-medical:before {
  content: "\f477"; }

.fa-file-medical-alt:before {
  content: "\f478"; }

.fa-file-pdf:before {
  content: "\f1c1"; }

.fa-file-powerpoint:before {
  content: "\f1c4"; }

.fa-file-prescription:before {
  content: "\f572"; }

.fa-file-signature:before {
  content: "\f573"; }

.fa-file-upload:before {
  content: "\f574"; }

.fa-file-video:before {
  content: "\f1c8"; }

.fa-file-word:before {
  content: "\f1c2"; }

.fa-fill:before {
  content: "\f575"; }

.fa-fill-drip:before {
  content: "\f576"; }

.fa-film:before {
  content: "\f008"; }

.fa-filter:before {
  content: "\f0b0"; }

.fa-fingerprint:before {
  content: "\f577"; }

.fa-fire:before {
  content: "\f06d"; }

.fa-fire-extinguisher:before {
  content: "\f134"; }

.fa-firefox:before {
  content: "\f269"; }

.fa-first-aid:before {
  content: "\f479"; }

.fa-first-order:before {
  content: "\f2b0"; }

.fa-first-order-alt:before {
  content: "\f50a"; }

.fa-firstdraft:before {
  content: "\f3a1"; }

.fa-fish:before {
  content: "\f578"; }

.fa-flag:before {
  content: "\f024"; }

.fa-flag-checkered:before {
  content: "\f11e"; }

.fa-flask:before {
  content: "\f0c3"; }

.fa-flickr:before {
  content: "\f16e"; }

.fa-flipboard:before {
  content: "\f44d"; }

.fa-flushed:before {
  content: "\f579"; }

.fa-fly:before {
  content: "\f417"; }

.fa-folder:before {
  content: "\f07b"; }

.fa-folder-open:before {
  content: "\f07c"; }

.fa-font:before {
  content: "\f031"; }

.fa-font-awesome:before {
  content: "\f2b4"; }

.fa-font-awesome-alt:before {
  content: "\f35c"; }

.fa-font-awesome-flag:before {
  content: "\f425"; }

.fa-font-awesome-logo-full:before {
  content: "\f4e6"; }

.fa-fonticons:before {
  content: "\f280"; }

.fa-fonticons-fi:before {
  content: "\f3a2"; }

.fa-football-ball:before {
  content: "\f44e"; }

.fa-fort-awesome:before {
  content: "\f286"; }

.fa-fort-awesome-alt:before {
  content: "\f3a3"; }

.fa-forumbee:before {
  content: "\f211"; }

.fa-forward:before {
  content: "\f04e"; }

.fa-foursquare:before {
  content: "\f180"; }

.fa-free-code-camp:before {
  content: "\f2c5"; }

.fa-freebsd:before {
  content: "\f3a4"; }

.fa-frog:before {
  content: "\f52e"; }

.fa-frown:before {
  content: "\f119"; }

.fa-frown-open:before {
  content: "\f57a"; }

.fa-fulcrum:before {
  content: "\f50b"; }

.fa-futbol:before {
  content: "\f1e3"; }

.fa-galactic-republic:before {
  content: "\f50c"; }

.fa-galactic-senate:before {
  content: "\f50d"; }

.fa-gamepad:before {
  content: "\f11b"; }

.fa-gas-pump:before {
  content: "\f52f"; }

.fa-gavel:before {
  content: "\f0e3"; }

.fa-gem:before {
  content: "\f3a5"; }

.fa-genderless:before {
  content: "\f22d"; }

.fa-get-pocket:before {
  content: "\f265"; }

.fa-gg:before {
  content: "\f260"; }

.fa-gg-circle:before {
  content: "\f261"; }

.fa-gift:before {
  content: "\f06b"; }

.fa-git:before {
  content: "\f1d3"; }

.fa-git-square:before {
  content: "\f1d2"; }

.fa-github:before {
  content: "\f09b"; }

.fa-github-alt:before {
  content: "\f113"; }

.fa-github-square:before {
  content: "\f092"; }

.fa-gitkraken:before {
  content: "\f3a6"; }

.fa-gitlab:before {
  content: "\f296"; }

.fa-gitter:before {
  content: "\f426"; }

.fa-glass-martini:before {
  content: "\f000"; }

.fa-glass-martini-alt:before {
  content: "\f57b"; }

.fa-glasses:before {
  content: "\f530"; }

.fa-glide:before {
  content: "\f2a5"; }

.fa-glide-g:before {
  content: "\f2a6"; }

.fa-globe:before {
  content: "\f0ac"; }

.fa-globe-africa:before {
  content: "\f57c"; }

.fa-globe-americas:before {
  content: "\f57d"; }

.fa-globe-asia:before {
  content: "\f57e"; }

.fa-gofore:before {
  content: "\f3a7"; }

.fa-golf-ball:before {
  content: "\f450"; }

.fa-goodreads:before {
  content: "\f3a8"; }

.fa-goodreads-g:before {
  content: "\f3a9"; }

.fa-google:before {
  content: "\f1a0"; }

.fa-google-drive:before {
  content: "\f3aa"; }

.fa-google-play:before {
  content: "\f3ab"; }

.fa-google-plus:before {
  content: "\f2b3"; }

.fa-google-plus-g:before {
  content: "\f0d5"; }

.fa-google-plus-square:before {
  content: "\f0d4"; }

.fa-google-wallet:before {
  content: "\f1ee"; }

.fa-graduation-cap:before {
  content: "\f19d"; }

.fa-gratipay:before {
  content: "\f184"; }

.fa-grav:before {
  content: "\f2d6"; }

.fa-greater-than:before {
  content: "\f531"; }

.fa-greater-than-equal:before {
  content: "\f532"; }

.fa-grimace:before {
  content: "\f57f"; }

.fa-grin:before {
  content: "\f580"; }

.fa-grin-alt:before {
  content: "\f581"; }

.fa-grin-beam:before {
  content: "\f582"; }

.fa-grin-beam-sweat:before {
  content: "\f583"; }

.fa-grin-hearts:before {
  content: "\f584"; }

.fa-grin-squint:before {
  content: "\f585"; }

.fa-grin-squint-tears:before {
  content: "\f586"; }

.fa-grin-stars:before {
  content: "\f587"; }

.fa-grin-tears:before {
  content: "\f588"; }

.fa-grin-tongue:before {
  content: "\f589"; }

.fa-grin-tongue-squint:before {
  content: "\f58a"; }

.fa-grin-tongue-wink:before {
  content: "\f58b"; }

.fa-grin-wink:before {
  content: "\f58c"; }

.fa-grip-horizontal:before {
  content: "\f58d"; }

.fa-grip-vertical:before {
  content: "\f58e"; }

.fa-gripfire:before {
  content: "\f3ac"; }

.fa-grunt:before {
  content: "\f3ad"; }

.fa-gulp:before {
  content: "\f3ae"; }

.fa-h-square:before {
  content: "\f0fd"; }

.fa-hacker-news:before {
  content: "\f1d4"; }

.fa-hacker-news-square:before {
  content: "\f3af"; }

.fa-hackerrank:before {
  content: "\f5f7"; }

.fa-hand-holding:before {
  content: "\f4bd"; }

.fa-hand-holding-heart:before {
  content: "\f4be"; }

.fa-hand-holding-usd:before {
  content: "\f4c0"; }

.fa-hand-lizard:before {
  content: "\f258"; }

.fa-hand-paper:before {
  content: "\f256"; }

.fa-hand-peace:before {
  content: "\f25b"; }

.fa-hand-point-down:before {
  content: "\f0a7"; }

.fa-hand-point-left:before {
  content: "\f0a5"; }

.fa-hand-point-right:before {
  content: "\f0a4"; }

.fa-hand-point-up:before {
  content: "\f0a6"; }

.fa-hand-pointer:before {
  content: "\f25a"; }

.fa-hand-rock:before {
  content: "\f255"; }

.fa-hand-scissors:before {
  content: "\f257"; }

.fa-hand-spock:before {
  content: "\f259"; }

.fa-hands:before {
  content: "\f4c2"; }

.fa-hands-helping:before {
  content: "\f4c4"; }

.fa-handshake:before {
  content: "\f2b5"; }

.fa-hashtag:before {
  content: "\f292"; }

.fa-hdd:before {
  content: "\f0a0"; }

.fa-heading:before {
  content: "\f1dc"; }

.fa-headphones:before {
  content: "\f025"; }

.fa-headphones-alt:before {
  content: "\f58f"; }

.fa-headset:before {
  content: "\f590"; }

.fa-heart:before {
  content: "\f004"; }

.fa-heartbeat:before {
  content: "\f21e"; }

.fa-helicopter:before {
  content: "\f533"; }

.fa-highlighter:before {
  content: "\f591"; }

.fa-hips:before {
  content: "\f452"; }

.fa-hire-a-helper:before {
  content: "\f3b0"; }

.fa-history:before {
  content: "\f1da"; }

.fa-hockey-puck:before {
  content: "\f453"; }

.fa-home:before {
  content: "\f015"; }

.fa-hooli:before {
  content: "\f427"; }

.fa-hornbill:before {
  content: "\f592"; }

.fa-hospital:before {
  content: "\f0f8"; }

.fa-hospital-alt:before {
  content: "\f47d"; }

.fa-hospital-symbol:before {
  content: "\f47e"; }

.fa-hot-tub:before {
  content: "\f593"; }

.fa-hotel:before {
  content: "\f594"; }

.fa-hotjar:before {
  content: "\f3b1"; }

.fa-hourglass:before {
  content: "\f254"; }

.fa-hourglass-end:before {
  content: "\f253"; }

.fa-hourglass-half:before {
  content: "\f252"; }

.fa-hourglass-start:before {
  content: "\f251"; }

.fa-houzz:before {
  content: "\f27c"; }

.fa-html5:before {
  content: "\f13b"; }

.fa-hubspot:before {
  content: "\f3b2"; }

.fa-i-cursor:before {
  content: "\f246"; }

.fa-id-badge:before {
  content: "\f2c1"; }

.fa-id-card:before {
  content: "\f2c2"; }

.fa-id-card-alt:before {
  content: "\f47f"; }

.fa-image:before {
  content: "\f03e"; }

.fa-images:before {
  content: "\f302"; }

.fa-imdb:before {
  content: "\f2d8"; }

.fa-inbox:before {
  content: "\f01c"; }

.fa-indent:before {
  content: "\f03c"; }

.fa-industry:before {
  content: "\f275"; }

.fa-infinity:before {
  content: "\f534"; }

.fa-info:before {
  content: "\f129"; }

.fa-info-circle:before {
  content: "\f05a"; }

.fa-instagram:before {
  content: "\f16d"; }

.fa-internet-explorer:before {
  content: "\f26b"; }

.fa-ioxhost:before {
  content: "\f208"; }

.fa-italic:before {
  content: "\f033"; }

.fa-itunes:before {
  content: "\f3b4"; }

.fa-itunes-note:before {
  content: "\f3b5"; }

.fa-java:before {
  content: "\f4e4"; }

.fa-jedi-order:before {
  content: "\f50e"; }

.fa-jenkins:before {
  content: "\f3b6"; }

.fa-joget:before {
  content: "\f3b7"; }

.fa-joint:before {
  content: "\f595"; }

.fa-joomla:before {
  content: "\f1aa"; }

.fa-js:before {
  content: "\f3b8"; }

.fa-js-square:before {
  content: "\f3b9"; }

.fa-jsfiddle:before {
  content: "\f1cc"; }

.fa-kaggle:before {
  content: "\f5fa"; }

.fa-key:before {
  content: "\f084"; }

.fa-keybase:before {
  content: "\f4f5"; }

.fa-keyboard:before {
  content: "\f11c"; }

.fa-keycdn:before {
  content: "\f3ba"; }

.fa-kickstarter:before {
  content: "\f3bb"; }

.fa-kickstarter-k:before {
  content: "\f3bc"; }

.fa-kiss:before {
  content: "\f596"; }

.fa-kiss-beam:before {
  content: "\f597"; }

.fa-kiss-wink-heart:before {
  content: "\f598"; }

.fa-kiwi-bird:before {
  content: "\f535"; }

.fa-korvue:before {
  content: "\f42f"; }

.fa-language:before {
  content: "\f1ab"; }

.fa-laptop:before {
  content: "\f109"; }

.fa-laptop-code:before {
  content: "\f5fc"; }

.fa-laravel:before {
  content: "\f3bd"; }

.fa-lastfm:before {
  content: "\f202"; }

.fa-lastfm-square:before {
  content: "\f203"; }

.fa-laugh:before {
  content: "\f599"; }

.fa-laugh-beam:before {
  content: "\f59a"; }

.fa-laugh-squint:before {
  content: "\f59b"; }

.fa-laugh-wink:before {
  content: "\f59c"; }

.fa-layer-group:before {
  content: "\f5fd"; }

.fa-leaf:before {
  content: "\f06c"; }

.fa-leanpub:before {
  content: "\f212"; }

.fa-lemon:before {
  content: "\f094"; }

.fa-less:before {
  content: "\f41d"; }

.fa-less-than:before {
  content: "\f536"; }

.fa-less-than-equal:before {
  content: "\f537"; }

.fa-level-down-alt:before {
  content: "\f3be"; }

.fa-level-up-alt:before {
  content: "\f3bf"; }

.fa-life-ring:before {
  content: "\f1cd"; }

.fa-lightbulb:before {
  content: "\f0eb"; }

.fa-line:before {
  content: "\f3c0"; }

.fa-link:before {
  content: "\f0c1"; }

.fa-linkedin:before {
  content: "\f08c"; }

.fa-linkedin-in:before {
  content: "\f0e1"; }

.fa-linode:before {
  content: "\f2b8"; }

.fa-linux:before {
  content: "\f17c"; }

.fa-lira-sign:before {
  content: "\f195"; }

.fa-list:before {
  content: "\f03a"; }

.fa-list-alt:before {
  content: "\f022"; }

.fa-list-ol:before {
  content: "\f0cb"; }

.fa-list-ul:before {
  content: "\f0ca"; }

.fa-location-arrow:before {
  content: "\f124"; }

.fa-lock:before {
  content: "\f023"; }

.fa-lock-open:before {
  content: "\f3c1"; }

.fa-long-arrow-alt-down:before {
  content: "\f309"; }

.fa-long-arrow-alt-left:before {
  content: "\f30a"; }

.fa-long-arrow-alt-right:before {
  content: "\f30b"; }

.fa-long-arrow-alt-up:before {
  content: "\f30c"; }

.fa-low-vision:before {
  content: "\f2a8"; }

.fa-luggage-cart:before {
  content: "\f59d"; }

.fa-lyft:before {
  content: "\f3c3"; }

.fa-magento:before {
  content: "\f3c4"; }

.fa-magic:before {
  content: "\f0d0"; }

.fa-magnet:before {
  content: "\f076"; }

.fa-mailchimp:before {
  content: "\f59e"; }

.fa-male:before {
  content: "\f183"; }

.fa-mandalorian:before {
  content: "\f50f"; }

.fa-map:before {
  content: "\f279"; }

.fa-map-marked:before {
  content: "\f59f"; }

.fa-map-marked-alt:before {
  content: "\f5a0"; }

.fa-map-marker:before {
  content: "\f041"; }

.fa-map-marker-alt:before {
  content: "\f3c5"; }

.fa-map-pin:before {
  content: "\f276"; }

.fa-map-signs:before {
  content: "\f277"; }

.fa-markdown:before {
  content: "\f60f"; }

.fa-marker:before {
  content: "\f5a1"; }

.fa-mars:before {
  content: "\f222"; }

.fa-mars-double:before {
  content: "\f227"; }

.fa-mars-stroke:before {
  content: "\f229"; }

.fa-mars-stroke-h:before {
  content: "\f22b"; }

.fa-mars-stroke-v:before {
  content: "\f22a"; }

.fa-mastodon:before {
  content: "\f4f6"; }

.fa-maxcdn:before {
  content: "\f136"; }

.fa-medal:before {
  content: "\f5a2"; }

.fa-medapps:before {
  content: "\f3c6"; }

.fa-medium:before {
  content: "\f23a"; }

.fa-medium-m:before {
  content: "\f3c7"; }

.fa-medkit:before {
  content: "\f0fa"; }

.fa-medrt:before {
  content: "\f3c8"; }

.fa-meetup:before {
  content: "\f2e0"; }

.fa-megaport:before {
  content: "\f5a3"; }

.fa-meh:before {
  content: "\f11a"; }

.fa-meh-blank:before {
  content: "\f5a4"; }

.fa-meh-rolling-eyes:before {
  content: "\f5a5"; }

.fa-memory:before {
  content: "\f538"; }

.fa-mercury:before {
  content: "\f223"; }

.fa-microchip:before {
  content: "\f2db"; }

.fa-microphone:before {
  content: "\f130"; }

.fa-microphone-alt:before {
  content: "\f3c9"; }

.fa-microphone-alt-slash:before {
  content: "\f539"; }

.fa-microphone-slash:before {
  content: "\f131"; }

.fa-microscope:before {
  content: "\f610"; }

.fa-microsoft:before {
  content: "\f3ca"; }

.fa-minus:before {
  content: "\f068"; }

.fa-minus-circle:before {
  content: "\f056"; }

.fa-minus-square:before {
  content: "\f146"; }

.fa-mix:before {
  content: "\f3cb"; }

.fa-mixcloud:before {
  content: "\f289"; }

.fa-mizuni:before {
  content: "\f3cc"; }

.fa-mobile:before {
  content: "\f10b"; }

.fa-mobile-alt:before {
  content: "\f3cd"; }

.fa-modx:before {
  content: "\f285"; }

.fa-monero:before {
  content: "\f3d0"; }

.fa-money-bill:before {
  content: "\f0d6"; }

.fa-money-bill-alt:before {
  content: "\f3d1"; }

.fa-money-bill-wave:before {
  content: "\f53a"; }

.fa-money-bill-wave-alt:before {
  content: "\f53b"; }

.fa-money-check:before {
  content: "\f53c"; }

.fa-money-check-alt:before {
  content: "\f53d"; }

.fa-monument:before {
  content: "\f5a6"; }

.fa-moon:before {
  content: "\f186"; }

.fa-mortar-pestle:before {
  content: "\f5a7"; }

.fa-motorcycle:before {
  content: "\f21c"; }

.fa-mouse-pointer:before {
  content: "\f245"; }

.fa-music:before {
  content: "\f001"; }

.fa-napster:before {
  content: "\f3d2"; }

.fa-neos:before {
  content: "\f612"; }

.fa-neuter:before {
  content: "\f22c"; }

.fa-newspaper:before {
  content: "\f1ea"; }

.fa-nimblr:before {
  content: "\f5a8"; }

.fa-nintendo-switch:before {
  content: "\f418"; }

.fa-node:before {
  content: "\f419"; }

.fa-node-js:before {
  content: "\f3d3"; }

.fa-not-equal:before {
  content: "\f53e"; }

.fa-notes-medical:before {
  content: "\f481"; }

.fa-npm:before {
  content: "\f3d4"; }

.fa-ns8:before {
  content: "\f3d5"; }

.fa-nutritionix:before {
  content: "\f3d6"; }

.fa-object-group:before {
  content: "\f247"; }

.fa-object-ungroup:before {
  content: "\f248"; }

.fa-odnoklassniki:before {
  content: "\f263"; }

.fa-odnoklassniki-square:before {
  content: "\f264"; }

.fa-oil-can:before {
  content: "\f613"; }

.fa-old-republic:before {
  content: "\f510"; }

.fa-opencart:before {
  content: "\f23d"; }

.fa-openid:before {
  content: "\f19b"; }

.fa-opera:before {
  content: "\f26a"; }

.fa-optin-monster:before {
  content: "\f23c"; }

.fa-osi:before {
  content: "\f41a"; }

.fa-outdent:before {
  content: "\f03b"; }

.fa-page4:before {
  content: "\f3d7"; }

.fa-pagelines:before {
  content: "\f18c"; }

.fa-paint-brush:before {
  content: "\f1fc"; }

.fa-paint-roller:before {
  content: "\f5aa"; }

.fa-palette:before {
  content: "\f53f"; }

.fa-palfed:before {
  content: "\f3d8"; }

.fa-pallet:before {
  content: "\f482"; }

.fa-paper-plane:before {
  content: "\f1d8"; }

.fa-paperclip:before {
  content: "\f0c6"; }

.fa-parachute-box:before {
  content: "\f4cd"; }

.fa-paragraph:before {
  content: "\f1dd"; }

.fa-parking:before {
  content: "\f540"; }

.fa-passport:before {
  content: "\f5ab"; }

.fa-paste:before {
  content: "\f0ea"; }

.fa-patreon:before {
  content: "\f3d9"; }

.fa-pause:before {
  content: "\f04c"; }

.fa-pause-circle:before {
  content: "\f28b"; }

.fa-paw:before {
  content: "\f1b0"; }

.fa-paypal:before {
  content: "\f1ed"; }

.fa-pen:before {
  content: "\f304"; }

.fa-pen-alt:before {
  content: "\f305"; }

.fa-pen-fancy:before {
  content: "\f5ac"; }

.fa-pen-nib:before {
  content: "\f5ad"; }

.fa-pen-square:before {
  content: "\f14b"; }

.fa-pencil-alt:before {
  content: "\f303"; }

.fa-pencil-ruler:before {
  content: "\f5ae"; }

.fa-people-carry:before {
  content: "\f4ce"; }

.fa-percent:before {
  content: "\f295"; }

.fa-percentage:before {
  content: "\f541"; }

.fa-periscope:before {
  content: "\f3da"; }

.fa-phabricator:before {
  content: "\f3db"; }

.fa-phoenix-framework:before {
  content: "\f3dc"; }

.fa-phoenix-squadron:before {
  content: "\f511"; }

.fa-phone:before {
  content: "\f095"; }

.fa-phone-slash:before {
  content: "\f3dd"; }

.fa-phone-square:before {
  content: "\f098"; }

.fa-phone-volume:before {
  content: "\f2a0"; }

.fa-php:before {
  content: "\f457"; }

.fa-pied-piper:before {
  content: "\f2ae"; }

.fa-pied-piper-alt:before {
  content: "\f1a8"; }

.fa-pied-piper-hat:before {
  content: "\f4e5"; }

.fa-pied-piper-pp:before {
  content: "\f1a7"; }

.fa-piggy-bank:before {
  content: "\f4d3"; }

.fa-pills:before {
  content: "\f484"; }

.fa-pinterest:before {
  content: "\f0d2"; }

.fa-pinterest-p:before {
  content: "\f231"; }

.fa-pinterest-square:before {
  content: "\f0d3"; }

.fa-plane:before {
  content: "\f072"; }

.fa-plane-arrival:before {
  content: "\f5af"; }

.fa-plane-departure:before {
  content: "\f5b0"; }

.fa-play:before {
  content: "\f04b"; }

.fa-play-circle:before {
  content: "\f144"; }

.fa-playstation:before {
  content: "\f3df"; }

.fa-plug:before {
  content: "\f1e6"; }

.fa-plus:before {
  content: "\f067"; }

.fa-plus-circle:before {
  content: "\f055"; }

.fa-plus-square:before {
  content: "\f0fe"; }

.fa-podcast:before {
  content: "\f2ce"; }

.fa-poo:before {
  content: "\f2fe"; }

.fa-poop:before {
  content: "\f619"; }

.fa-portrait:before {
  content: "\f3e0"; }

.fa-pound-sign:before {
  content: "\f154"; }

.fa-power-off:before {
  content: "\f011"; }

.fa-prescription:before {
  content: "\f5b1"; }

.fa-prescription-bottle:before {
  content: "\f485"; }

.fa-prescription-bottle-alt:before {
  content: "\f486"; }

.fa-print:before {
  content: "\f02f"; }

.fa-procedures:before {
  content: "\f487"; }

.fa-product-hunt:before {
  content: "\f288"; }

.fa-project-diagram:before {
  content: "\f542"; }

.fa-pushed:before {
  content: "\f3e1"; }

.fa-puzzle-piece:before {
  content: "\f12e"; }

.fa-python:before {
  content: "\f3e2"; }

.fa-qq:before {
  content: "\f1d6"; }

.fa-qrcode:before {
  content: "\f029"; }

.fa-question:before {
  content: "\f128"; }

.fa-question-circle:before {
  content: "\f059"; }

.fa-quidditch:before {
  content: "\f458"; }

.fa-quinscape:before {
  content: "\f459"; }

.fa-quora:before {
  content: "\f2c4"; }

.fa-quote-left:before {
  content: "\f10d"; }

.fa-quote-right:before {
  content: "\f10e"; }

.fa-r-project:before {
  content: "\f4f7"; }

.fa-random:before {
  content: "\f074"; }

.fa-ravelry:before {
  content: "\f2d9"; }

.fa-react:before {
  content: "\f41b"; }

.fa-readme:before {
  content: "\f4d5"; }

.fa-rebel:before {
  content: "\f1d0"; }

.fa-receipt:before {
  content: "\f543"; }

.fa-recycle:before {
  content: "\f1b8"; }

.fa-red-river:before {
  content: "\f3e3"; }

.fa-reddit:before {
  content: "\f1a1"; }

.fa-reddit-alien:before {
  content: "\f281"; }

.fa-reddit-square:before {
  content: "\f1a2"; }

.fa-redo:before {
  content: "\f01e"; }

.fa-redo-alt:before {
  content: "\f2f9"; }

.fa-registered:before {
  content: "\f25d"; }

.fa-rendact:before {
  content: "\f3e4"; }

.fa-renren:before {
  content: "\f18b"; }

.fa-reply:before {
  content: "\f3e5"; }

.fa-reply-all:before {
  content: "\f122"; }

.fa-replyd:before {
  content: "\f3e6"; }

.fa-researchgate:before {
  content: "\f4f8"; }

.fa-resolving:before {
  content: "\f3e7"; }

.fa-retweet:before {
  content: "\f079"; }

.fa-rev:before {
  content: "\f5b2"; }

.fa-ribbon:before {
  content: "\f4d6"; }

.fa-road:before {
  content: "\f018"; }

.fa-robot:before {
  content: "\f544"; }

.fa-rocket:before {
  content: "\f135"; }

.fa-rocketchat:before {
  content: "\f3e8"; }

.fa-rockrms:before {
  content: "\f3e9"; }

.fa-route:before {
  content: "\f4d7"; }

.fa-rss:before {
  content: "\f09e"; }

.fa-rss-square:before {
  content: "\f143"; }

.fa-ruble-sign:before {
  content: "\f158"; }

.fa-ruler:before {
  content: "\f545"; }

.fa-ruler-combined:before {
  content: "\f546"; }

.fa-ruler-horizontal:before {
  content: "\f547"; }

.fa-ruler-vertical:before {
  content: "\f548"; }

.fa-rupee-sign:before {
  content: "\f156"; }

.fa-sad-cry:before {
  content: "\f5b3"; }

.fa-sad-tear:before {
  content: "\f5b4"; }

.fa-safari:before {
  content: "\f267"; }

.fa-sass:before {
  content: "\f41e"; }

.fa-save:before {
  content: "\f0c7"; }

.fa-schlix:before {
  content: "\f3ea"; }

.fa-school:before {
  content: "\f549"; }

.fa-screwdriver:before {
  content: "\f54a"; }

.fa-scribd:before {
  content: "\f28a"; }

.fa-search:before {
  content: "\f002"; }

.fa-search-minus:before {
  content: "\f010"; }

.fa-search-plus:before {
  content: "\f00e"; }

.fa-searchengin:before {
  content: "\f3eb"; }

.fa-seedling:before {
  content: "\f4d8"; }

.fa-sellcast:before {
  content: "\f2da"; }

.fa-sellsy:before {
  content: "\f213"; }

.fa-server:before {
  content: "\f233"; }

.fa-servicestack:before {
  content: "\f3ec"; }

.fa-shapes:before {
  content: "\f61f"; }

.fa-share:before {
  content: "\f064"; }

.fa-share-alt:before {
  content: "\f1e0"; }

.fa-share-alt-square:before {
  content: "\f1e1"; }

.fa-share-square:before {
  content: "\f14d"; }

.fa-shekel-sign:before {
  content: "\f20b"; }

.fa-shield-alt:before {
  content: "\f3ed"; }

.fa-ship:before {
  content: "\f21a"; }

.fa-shipping-fast:before {
  content: "\f48b"; }

.fa-shirtsinbulk:before {
  content: "\f214"; }

.fa-shoe-prints:before {
  content: "\f54b"; }

.fa-shopping-bag:before {
  content: "\f290"; }

.fa-shopping-basket:before {
  content: "\f291"; }

.fa-shopping-cart:before {
  content: "\f07a"; }

.fa-shopware:before {
  content: "\f5b5"; }

.fa-shower:before {
  content: "\f2cc"; }

.fa-shuttle-van:before {
  content: "\f5b6"; }

.fa-sign:before {
  content: "\f4d9"; }

.fa-sign-in-alt:before {
  content: "\f2f6"; }

.fa-sign-language:before {
  content: "\f2a7"; }

.fa-sign-out-alt:before {
  content: "\f2f5"; }

.fa-signal:before {
  content: "\f012"; }

.fa-signature:before {
  content: "\f5b7"; }

.fa-simplybuilt:before {
  content: "\f215"; }

.fa-sistrix:before {
  content: "\f3ee"; }

.fa-sitemap:before {
  content: "\f0e8"; }

.fa-sith:before {
  content: "\f512"; }

.fa-skull:before {
  content: "\f54c"; }

.fa-skyatlas:before {
  content: "\f216"; }

.fa-skype:before {
  content: "\f17e"; }

.fa-slack:before {
  content: "\f198"; }

.fa-slack-hash:before {
  content: "\f3ef"; }

.fa-sliders-h:before {
  content: "\f1de"; }

.fa-slideshare:before {
  content: "\f1e7"; }

.fa-smile:before {
  content: "\f118"; }

.fa-smile-beam:before {
  content: "\f5b8"; }

.fa-smile-wink:before {
  content: "\f4da"; }

.fa-smoking:before {
  content: "\f48d"; }

.fa-smoking-ban:before {
  content: "\f54d"; }

.fa-snapchat:before {
  content: "\f2ab"; }

.fa-snapchat-ghost:before {
  content: "\f2ac"; }

.fa-snapchat-square:before {
  content: "\f2ad"; }

.fa-snowflake:before {
  content: "\f2dc"; }

.fa-solar-panel:before {
  content: "\f5ba"; }

.fa-sort:before {
  content: "\f0dc"; }

.fa-sort-alpha-down:before {
  content: "\f15d"; }

.fa-sort-alpha-up:before {
  content: "\f15e"; }

.fa-sort-amount-down:before {
  content: "\f160"; }

.fa-sort-amount-up:before {
  content: "\f161"; }

.fa-sort-down:before {
  content: "\f0dd"; }

.fa-sort-numeric-down:before {
  content: "\f162"; }

.fa-sort-numeric-up:before {
  content: "\f163"; }

.fa-sort-up:before {
  content: "\f0de"; }

.fa-soundcloud:before {
  content: "\f1be"; }

.fa-spa:before {
  content: "\f5bb"; }

.fa-space-shuttle:before {
  content: "\f197"; }

.fa-speakap:before {
  content: "\f3f3"; }

.fa-spinner:before {
  content: "\f110"; }

.fa-splotch:before {
  content: "\f5bc"; }

.fa-spotify:before {
  content: "\f1bc"; }

.fa-spray-can:before {
  content: "\f5bd"; }

.fa-square:before {
  content: "\f0c8"; }

.fa-square-full:before {
  content: "\f45c"; }

.fa-squarespace:before {
  content: "\f5be"; }

.fa-stack-exchange:before {
  content: "\f18d"; }

.fa-stack-overflow:before {
  content: "\f16c"; }

.fa-stamp:before {
  content: "\f5bf"; }

.fa-star:before {
  content: "\f005"; }

.fa-star-half:before {
  content: "\f089"; }

.fa-star-half-alt:before {
  content: "\f5c0"; }

.fa-star-of-life:before {
  content: "\f621"; }

.fa-staylinked:before {
  content: "\f3f5"; }

.fa-steam:before {
  content: "\f1b6"; }

.fa-steam-square:before {
  content: "\f1b7"; }

.fa-steam-symbol:before {
  content: "\f3f6"; }

.fa-step-backward:before {
  content: "\f048"; }

.fa-step-forward:before {
  content: "\f051"; }

.fa-stethoscope:before {
  content: "\f0f1"; }

.fa-sticker-mule:before {
  content: "\f3f7"; }

.fa-sticky-note:before {
  content: "\f249"; }

.fa-stop:before {
  content: "\f04d"; }

.fa-stop-circle:before {
  content: "\f28d"; }

.fa-stopwatch:before {
  content: "\f2f2"; }

.fa-store:before {
  content: "\f54e"; }

.fa-store-alt:before {
  content: "\f54f"; }

.fa-strava:before {
  content: "\f428"; }

.fa-stream:before {
  content: "\f550"; }

.fa-street-view:before {
  content: "\f21d"; }

.fa-strikethrough:before {
  content: "\f0cc"; }

.fa-stripe:before {
  content: "\f429"; }

.fa-stripe-s:before {
  content: "\f42a"; }

.fa-stroopwafel:before {
  content: "\f551"; }

.fa-studiovinari:before {
  content: "\f3f8"; }

.fa-stumbleupon:before {
  content: "\f1a4"; }

.fa-stumbleupon-circle:before {
  content: "\f1a3"; }

.fa-subscript:before {
  content: "\f12c"; }

.fa-subway:before {
  content: "\f239"; }

.fa-suitcase:before {
  content: "\f0f2"; }

.fa-suitcase-rolling:before {
  content: "\f5c1"; }

.fa-sun:before {
  content: "\f185"; }

.fa-superpowers:before {
  content: "\f2dd"; }

.fa-superscript:before {
  content: "\f12b"; }

.fa-supple:before {
  content: "\f3f9"; }

.fa-surprise:before {
  content: "\f5c2"; }

.fa-swatchbook:before {
  content: "\f5c3"; }

.fa-swimmer:before {
  content: "\f5c4"; }

.fa-swimming-pool:before {
  content: "\f5c5"; }

.fa-sync:before {
  content: "\f021"; }

.fa-sync-alt:before {
  content: "\f2f1"; }

.fa-syringe:before {
  content: "\f48e"; }

.fa-table:before {
  content: "\f0ce"; }

.fa-table-tennis:before {
  content: "\f45d"; }

.fa-tablet:before {
  content: "\f10a"; }

.fa-tablet-alt:before {
  content: "\f3fa"; }

.fa-tablets:before {
  content: "\f490"; }

.fa-tachometer-alt:before {
  content: "\f3fd"; }

.fa-tag:before {
  content: "\f02b"; }

.fa-tags:before {
  content: "\f02c"; }

.fa-tape:before {
  content: "\f4db"; }

.fa-tasks:before {
  content: "\f0ae"; }

.fa-taxi:before {
  content: "\f1ba"; }

.fa-teamspeak:before {
  content: "\f4f9"; }

.fa-teeth:before {
  content: "\f62e"; }

.fa-teeth-open:before {
  content: "\f62f"; }

.fa-telegram:before {
  content: "\f2c6"; }

.fa-telegram-plane:before {
  content: "\f3fe"; }

.fa-tencent-weibo:before {
  content: "\f1d5"; }

.fa-terminal:before {
  content: "\f120"; }

.fa-text-height:before {
  content: "\f034"; }

.fa-text-width:before {
  content: "\f035"; }

.fa-th:before {
  content: "\f00a"; }

.fa-th-large:before {
  content: "\f009"; }

.fa-th-list:before {
  content: "\f00b"; }

.fa-theater-masks:before {
  content: "\f630"; }

.fa-themeco:before {
  content: "\f5c6"; }

.fa-themeisle:before {
  content: "\f2b2"; }

.fa-thermometer:before {
  content: "\f491"; }

.fa-thermometer-empty:before {
  content: "\f2cb"; }

.fa-thermometer-full:before {
  content: "\f2c7"; }

.fa-thermometer-half:before {
  content: "\f2c9"; }

.fa-thermometer-quarter:before {
  content: "\f2ca"; }

.fa-thermometer-three-quarters:before {
  content: "\f2c8"; }

.fa-thumbs-down:before {
  content: "\f165"; }

.fa-thumbs-up:before {
  content: "\f164"; }

.fa-thumbtack:before {
  content: "\f08d"; }

.fa-ticket-alt:before {
  content: "\f3ff"; }

.fa-times:before {
  content: "\f00d"; }

.fa-times-circle:before {
  content: "\f057"; }

.fa-tint:before {
  content: "\f043"; }

.fa-tint-slash:before {
  content: "\f5c7"; }

.fa-tired:before {
  content: "\f5c8"; }

.fa-toggle-off:before {
  content: "\f204"; }

.fa-toggle-on:before {
  content: "\f205"; }

.fa-toolbox:before {
  content: "\f552"; }

.fa-tooth:before {
  content: "\f5c9"; }

.fa-trade-federation:before {
  content: "\f513"; }

.fa-trademark:before {
  content: "\f25c"; }

.fa-traffic-light:before {
  content: "\f637"; }

.fa-train:before {
  content: "\f238"; }

.fa-transgender:before {
  content: "\f224"; }

.fa-transgender-alt:before {
  content: "\f225"; }

.fa-trash:before {
  content: "\f1f8"; }

.fa-trash-alt:before {
  content: "\f2ed"; }

.fa-tree:before {
  content: "\f1bb"; }

.fa-trello:before {
  content: "\f181"; }

.fa-tripadvisor:before {
  content: "\f262"; }

.fa-trophy:before {
  content: "\f091"; }

.fa-truck:before {
  content: "\f0d1"; }

.fa-truck-loading:before {
  content: "\f4de"; }

.fa-truck-monster:before {
  content: "\f63b"; }

.fa-truck-moving:before {
  content: "\f4df"; }

.fa-truck-pickup:before {
  content: "\f63c"; }

.fa-tshirt:before {
  content: "\f553"; }

.fa-tty:before {
  content: "\f1e4"; }

.fa-tumblr:before {
  content: "\f173"; }

.fa-tumblr-square:before {
  content: "\f174"; }

.fa-tv:before {
  content: "\f26c"; }

.fa-twitch:before {
  content: "\f1e8"; }

.fa-twitter:before {
  content: "\f099"; }

.fa-twitter-square:before {
  content: "\f081"; }

.fa-typo3:before {
  content: "\f42b"; }

.fa-uber:before {
  content: "\f402"; }

.fa-uikit:before {
  content: "\f403"; }

.fa-umbrella:before {
  content: "\f0e9"; }

.fa-umbrella-beach:before {
  content: "\f5ca"; }

.fa-underline:before {
  content: "\f0cd"; }

.fa-undo:before {
  content: "\f0e2"; }

.fa-undo-alt:before {
  content: "\f2ea"; }

.fa-uniregistry:before {
  content: "\f404"; }

.fa-universal-access:before {
  content: "\f29a"; }

.fa-university:before {
  content: "\f19c"; }

.fa-unlink:before {
  content: "\f127"; }

.fa-unlock:before {
  content: "\f09c"; }

.fa-unlock-alt:before {
  content: "\f13e"; }

.fa-untappd:before {
  content: "\f405"; }

.fa-upload:before {
  content: "\f093"; }

.fa-usb:before {
  content: "\f287"; }

.fa-user:before {
  content: "\f007"; }

.fa-user-alt:before {
  content: "\f406"; }

.fa-user-alt-slash:before {
  content: "\f4fa"; }

.fa-user-astronaut:before {
  content: "\f4fb"; }

.fa-user-check:before {
  content: "\f4fc"; }

.fa-user-circle:before {
  content: "\f2bd"; }

.fa-user-clock:before {
  content: "\f4fd"; }

.fa-user-cog:before {
  content: "\f4fe"; }

.fa-user-edit:before {
  content: "\f4ff"; }

.fa-user-friends:before {
  content: "\f500"; }

.fa-user-graduate:before {
  content: "\f501"; }

.fa-user-lock:before {
  content: "\f502"; }

.fa-user-md:before {
  content: "\f0f0"; }

.fa-user-minus:before {
  content: "\f503"; }

.fa-user-ninja:before {
  content: "\f504"; }

.fa-user-plus:before {
  content: "\f234"; }

.fa-user-secret:before {
  content: "\f21b"; }

.fa-user-shield:before {
  content: "\f505"; }

.fa-user-slash:before {
  content: "\f506"; }

.fa-user-tag:before {
  content: "\f507"; }

.fa-user-tie:before {
  content: "\f508"; }

.fa-user-times:before {
  content: "\f235"; }

.fa-users:before {
  content: "\f0c0"; }

.fa-users-cog:before {
  content: "\f509"; }

.fa-ussunnah:before {
  content: "\f407"; }

.fa-utensil-spoon:before {
  content: "\f2e5"; }

.fa-utensils:before {
  content: "\f2e7"; }

.fa-vaadin:before {
  content: "\f408"; }

.fa-vector-square:before {
  content: "\f5cb"; }

.fa-venus:before {
  content: "\f221"; }

.fa-venus-double:before {
  content: "\f226"; }

.fa-venus-mars:before {
  content: "\f228"; }

.fa-viacoin:before {
  content: "\f237"; }

.fa-viadeo:before {
  content: "\f2a9"; }

.fa-viadeo-square:before {
  content: "\f2aa"; }

.fa-vial:before {
  content: "\f492"; }

.fa-vials:before {
  content: "\f493"; }

.fa-viber:before {
  content: "\f409"; }

.fa-video:before {
  content: "\f03d"; }

.fa-video-slash:before {
  content: "\f4e2"; }

.fa-vimeo:before {
  content: "\f40a"; }

.fa-vimeo-square:before {
  content: "\f194"; }

.fa-vimeo-v:before {
  content: "\f27d"; }

.fa-vine:before {
  content: "\f1ca"; }

.fa-vk:before {
  content: "\f189"; }

.fa-vnv:before {
  content: "\f40b"; }

.fa-volleyball-ball:before {
  content: "\f45f"; }

.fa-volume-down:before {
  content: "\f027"; }

.fa-volume-off:before {
  content: "\f026"; }

.fa-volume-up:before {
  content: "\f028"; }

.fa-vuejs:before {
  content: "\f41f"; }

.fa-walking:before {
  content: "\f554"; }

.fa-wallet:before {
  content: "\f555"; }

.fa-warehouse:before {
  content: "\f494"; }

.fa-weebly:before {
  content: "\f5cc"; }

.fa-weibo:before {
  content: "\f18a"; }

.fa-weight:before {
  content: "\f496"; }

.fa-weight-hanging:before {
  content: "\f5cd"; }

.fa-weixin:before {
  content: "\f1d7"; }

.fa-whatsapp:before {
  content: "\f232"; }

.fa-whatsapp-square:before {
  content: "\f40c"; }

.fa-wheelchair:before {
  content: "\f193"; }

.fa-whmcs:before {
  content: "\f40d"; }

.fa-wifi:before {
  content: "\f1eb"; }

.fa-wikipedia-w:before {
  content: "\f266"; }

.fa-window-close:before {
  content: "\f410"; }

.fa-window-maximize:before {
  content: "\f2d0"; }

.fa-window-minimize:before {
  content: "\f2d1"; }

.fa-window-restore:before {
  content: "\f2d2"; }

.fa-windows:before {
  content: "\f17a"; }

.fa-wine-glass:before {
  content: "\f4e3"; }

.fa-wine-glass-alt:before {
  content: "\f5ce"; }

.fa-wix:before {
  content: "\f5cf"; }

.fa-wolf-pack-battalion:before {
  content: "\f514"; }

.fa-won-sign:before {
  content: "\f159"; }

.fa-wordpress:before {
  content: "\f19a"; }

.fa-wordpress-simple:before {
  content: "\f411"; }

.fa-wpbeginner:before {
  content: "\f297"; }

.fa-wpexplorer:before {
  content: "\f2de"; }

.fa-wpforms:before {
  content: "\f298"; }

.fa-wrench:before {
  content: "\f0ad"; }

.fa-x-ray:before {
  content: "\f497"; }

.fa-xbox:before {
  content: "\f412"; }

.fa-xing:before {
  content: "\f168"; }

.fa-xing-square:before {
  content: "\f169"; }

.fa-y-combinator:before {
  content: "\f23b"; }

.fa-yahoo:before {
  content: "\f19e"; }

.fa-yandex:before {
  content: "\f413"; }

.fa-yandex-international:before {
  content: "\f414"; }

.fa-yelp:before {
  content: "\f1e9"; }

.fa-yen-sign:before {
  content: "\f157"; }

.fa-yoast:before {
  content: "\f2b1"; }

.fa-youtube:before {
  content: "\f167"; }

.fa-youtube-square:before {
  content: "\f431"; }

.fa-zhihu:before {
  content: "\f63f"; }

.sr-only {
  border: 0;
  clip: rect(0, 0, 0, 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px; }

.sr-only-focusable:active, .sr-only-focusable:focus {
  clip: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  position: static;
  width: auto; }
@font-face {
  font-family: 'Font Awesome 5 Brands';
  font-style: normal;
  font-weight: normal;
  src: url("../webfonts/fa-brands-400.eot");
  src: url("../webfonts/fa-brands-400.eot?#iefix") format("embedded-opentype"), url("../webfonts/fa-brands-400.woff2") format("woff2"), url("../webfonts/fa-brands-400.woff") format("woff"), url("../webfonts/fa-brands-400.ttf") format("truetype"), url("../webfonts/fa-brands-400.svg#fontawesome") format("svg"); }

.fab {
  font-family: 'Font Awesome 5 Brands'; }
@font-face {
  font-family: 'Font Awesome 5 Free';
  font-style: normal;
  font-weight: 400;
  src: url("../webfonts/fa-regular-400.eot");
  src: url("../webfonts/fa-regular-400.eot?#iefix") format("embedded-opentype"), url("../webfonts/fa-regular-400.woff2") format("woff2"), url("../webfonts/fa-regular-400.woff") format("woff"), url("../webfonts/fa-regular-400.ttf") format("truetype"), url("../webfonts/fa-regular-400.svg#fontawesome") format("svg"); }

.far {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }
@font-face {
  font-family: 'Font Awesome 5 Free';
  font-style: normal;
  font-weight: 900;
  src: url("../webfonts/fa-solid-900.eot");
  src: url("../webfonts/fa-solid-900.eot?#iefix") format("embedded-opentype"), url("../webfonts/fa-solid-900.woff2") format("woff2"), url("../webfonts/fa-solid-900.woff") format("woff"), url("../webfonts/fa-solid-900.ttf") format("truetype"), url("../webfonts/fa-solid-900.svg#fontawesome") format("svg"); }

.fa,
.fas {
  font-family: 'Font Awesome 5 Free';
  font-weight: 900; }
/*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */

/* Document
   ========================================================================== */

/**
 * 1. Correct the line height in all browsers.
 * 2. Prevent adjustments of font size after orientation changes in iOS.
 */

html {
  line-height: 1.15; /* 1 */
  -webkit-text-size-adjust: 100%; /* 2 */
}

/* Sections
   ========================================================================== */

/**
 * Remove the margin in all browsers.
 */

body {
  margin: 0;
}

/**
 * Render the `main` element consistently in IE.
 */

main {
  display: block;
}

/**
 * Correct the font size and margin on `h1` elements within `section` and
 * `article` contexts in Chrome, Firefox, and Safari.
 */

h1 {
  font-size: 2em;
  margin: 0.67em 0;
}

/* Grouping content
   ========================================================================== */

/**
 * 1. Add the correct box sizing in Firefox.
 * 2. Show the overflow in Edge and IE.
 */

hr {
  box-sizing: content-box; /* 1 */
  height: 0; /* 1 */
  overflow: visible; /* 2 */
}

/**
 * 1. Correct the inheritance and scaling of font size in all browsers.
 * 2. Correct the odd `em` font sizing in all browsers.
 */

pre {
  font-family: monospace, monospace; /* 1 */
  font-size: 1em; /* 2 */
}

/* Text-level semantics
   ========================================================================== */

/**
 * Remove the gray background on active links in IE 10.
 */

a {
  background-color: transparent;
}

/**
 * 1. Remove the bottom border in Chrome 57-
 * 2. Add the correct text decoration in Chrome, Edge, IE, Opera, and Safari.
 */

abbr[title] {
  border-bottom: none; /* 1 */
  text-decoration: underline; /* 2 */
  text-decoration: underline dotted; /* 2 */
}

/**
 * Add the correct font weight in Chrome, Edge, and Safari.
 */

b,
strong {
  font-weight: bolder;
}

/**
 * 1. Correct the inheritance and scaling of font size in all browsers.
 * 2. Correct the odd `em` font sizing in all browsers.
 */

code,
kbd,
samp {
  font-family: monospace, monospace; /* 1 */
  font-size: 1em; /* 2 */
}

/**
 * Add the correct font size in all browsers.
 */

small {
  font-size: 80%;
}

/**
 * Prevent `sub` and `sup` elements from affecting the line height in
 * all browsers.
 */

sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}

sub {
  bottom: -0.25em;
}

sup {
  top: -0.5em;
}

/* Embedded content
   ========================================================================== */

/**
 * Remove the border on images inside links in IE 10.
 */

img {
  border-style: none;
}

/* Forms
   ========================================================================== */

/**
 * 1. Change the font styles in all browsers.
 * 2. Remove the margin in Firefox and Safari.
 */

button,
input,
optgroup,
select,
textarea {
  font-family: inherit; /* 1 */
  font-size: 100%; /* 1 */
  line-height: 1.15; /* 1 */
  margin: 0; /* 2 */
}

/**
 * Show the overflow in IE.
 * 1. Show the overflow in Edge.
 */

button,
input { /* 1 */
  overflow: visible;
}

/**
 * Remove the inheritance of text transform in Edge, Firefox, and IE.
 * 1. Remove the inheritance of text transform in Firefox.
 */

button,
select { /* 1 */
  text-transform: none;
}

/**
 * Correct the inability to style clickable types in iOS and Safari.
 */

button,
[type="button"],
[type="reset"],
[type="submit"] {
  -webkit-appearance: button;
}

/**
 * Remove the inner border and padding in Firefox.
 */

button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
  border-style: none;
  padding: 0;
}

/**
 * Restore the focus styles unset by the previous rule.
 */

button:-moz-focusring,
[type="button"]:-moz-focusring,
[type="reset"]:-moz-focusring,
[type="submit"]:-moz-focusring {
  outline: 1px dotted ButtonText;
}

/**
 * Correct the padding in Firefox.
 */

fieldset {
  padding: 0.35em 0.75em 0.625em;
}

/**
 * 1. Correct the text wrapping in Edge and IE.
 * 2. Correct the color inheritance from `fieldset` elements in IE.
 * 3. Remove the padding so developers are not caught out when they zero out
 *    `fieldset` elements in all browsers.
 */

legend {
  box-sizing: border-box; /* 1 */
  color: inherit; /* 2 */
  display: table; /* 1 */
  max-width: 100%; /* 1 */
  padding: 0; /* 3 */
  white-space: normal; /* 1 */
}

/**
 * Add the correct vertical alignment in Chrome, Firefox, and Opera.
 */

progress {
  vertical-align: baseline;
}

/**
 * Remove the default vertical scrollbar in IE 10+.
 */

textarea {
  overflow: auto;
}

/**
 * 1. Add the correct box sizing in IE 10.
 * 2. Remove the padding in IE 10.
 */

[type="checkbox"],
[type="radio"] {
  box-sizing: border-box; /* 1 */
  padding: 0; /* 2 */
}

/**
 * Correct the cursor style of increment and decrement buttons in Chrome.
 */

[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
  height: auto;
}

/**
 * 1. Correct the odd appearance in Chrome and Safari.
 * 2. Correct the outline style in Safari.
 */

[type="search"] {
  -webkit-appearance: textfield; /* 1 */
  outline-offset: -2px; /* 2 */
}

/**
 * Remove the inner padding in Chrome and Safari on macOS.
 */

[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}

/**
 * 1. Correct the inability to style clickable types in iOS and Safari.
 * 2. Change font properties to `inherit` in Safari.
 */

::-webkit-file-upload-button {
  -webkit-appearance: button; /* 1 */
  font: inherit; /* 2 */
}

/* Interactive
   ========================================================================== */

/*
 * Add the correct display in Edge, IE 10+, and Firefox.
 */

details {
  display: block;
}

/*
 * Add the correct display in all browsers.
 */

summary {
  display: list-item;
}

/* Misc
   ========================================================================== */

/**
 * Add the correct display in IE 10+.
 */

template {
  display: none;
}

/**
 * Add the correct display in IE 10.
 */

[hidden] {
  display: none;
}

/**
 * Manually forked from SUIT CSS Base: https://github.com/suitcss/base
 * A thin layer on top of normalize.css that provides a starting point more
 * suitable for web applications.
 */

/**
 * 1. Prevent padding and border from affecting element width
 * https://goo.gl/pYtbK7
 * 2. Change the default font family in all browsers (opinionated)
 */

html {
  box-sizing: border-box; /* 1 */
  font-family: sans-serif; /* 2 */
}

*,
*::before,
*::after {
  box-sizing: inherit;
}

/**
 * Removes the default spacing and border for appropriate elements.
 */

blockquote,
dl,
dd,
h1,
h2,
h3,
h4,
h5,
h6,
hr,
figure,
p,
pre {
  margin: 0;
}

button {
  background: transparent;
  padding: 0;
}

/**
 * Work around a Firefox/IE bug where the transparent `button` background
 * results in a loss of the default `button` focus styles.
 */

button:focus {
  outline: 1px dotted;
  outline: 5px auto -webkit-focus-ring-color;
}

fieldset {
  margin: 0;
  padding: 0;
}

ol,
ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

/**
 * Tailwind custom reset styles
 */

/**
 * 1. Use the system font stack as a sane default.
 * 2. Use Tailwind's default "normal" line-height so the user isn't forced
 * to override it to ensure consistency even when using the default theme.
 */

html {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"; /* 1 */
  line-height: 1.5; /* 2 */
}

/**
 * Allow adding a border to an element by just adding a border-width.
 *
 * By default, the way the browser specifies that an element should have no
 * border is by setting it's border-style to `none` in the user-agent
 * stylesheet.
 *
 * In order to easily add borders to elements by just setting the `border-width`
 * property, we change the default border-style for all elements to `solid`, and
 * use border-width to hide them instead. This way our `border` utilities only
 * need to set the `border-width` property instead of the entire `border`
 * shorthand, making our border utilities much more straightforward to compose.
 *
 * https://github.com/tailwindcss/tailwindcss/pull/116
 */

*,
*::before,
*::after {
  border-width: 0;
  border-style: solid;
  border-color: #e2e8f0;
}

/*
 * Ensure horizontal rules are visible by default
 */

hr {
  border-top-width: 1px;
}

/**
 * Undo the `border-style: none` reset that Normalize applies to images so that
 * our `border-{width}` utilities have the expected effect.
 *
 * The Normalize reset is unnecessary for us since we default the border-width
 * to 0 on all elements.
 *
 * https://github.com/tailwindcss/tailwindcss/issues/362
 */

img {
  border-style: solid;
}

textarea {
  resize: vertical;
}

input::placeholder,
textarea::placeholder {
  color: #a0aec0;
}

button,
[role="button"] {
  cursor: pointer;
}

table {
  border-collapse: collapse;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-size: inherit;
  font-weight: inherit;
}

/**
 * Reset links to optimize for opt-in styling instead of
 * opt-out.
 */

a {
  color: inherit;
  text-decoration: inherit;
}

/**
 * Reset form element properties that are easy to forget to
 * style explicitly so you don't inadvertently introduce
 * styles that deviate from your design system. These styles
 * supplement a partial reset that is already applied by
 * normalize.css.
 */

button,
input,
optgroup,
select,
textarea {
  padding: 0;
  line-height: inherit;
  color: inherit;
}

/**
 * Use the configured 'mono' font family for elements that
 * are expected to be rendered with a monospace font, falling
 * back to the system monospace stack if there is no configured
 * 'mono' font family.
 */

pre,
code,
kbd,
samp {
  font-family: Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
}

/**
 * Make replaced elements `display: block` by default as that's
 * the behavior you want almost all of the time. Inspired by
 * CSS Remedy, with `svg` added as well.
 *
 * https://github.com/mozdevs/cssremedy/issues/14
 */

img,
svg,
video,
canvas,
audio,
iframe,
embed,
object {
  display: block;
  vertical-align: middle;
}

/**
 * Constrain images and videos to the parent width and preserve
 * their instrinsic aspect ratio.
 *
 * https://github.com/mozdevs/cssremedy/issues/14
 */

img,
video {
  max-width: 100%;
  height: auto;
}

.container {
  width: 100%;
}

@media (min-width: 640px) {
  .container {
    max-width: 640px;
  }
}

@media (min-width: 768px) {
  .container {
    max-width: 768px;
  }
}

@media (min-width: 1024px) {
  .container {
    max-width: 1024px;
  }
}

@media (min-width: 1280px) {
  .container {
    max-width: 1280px;
  }
}

table {
  border-collapse: collapse;
}

caption {
  padding-top: .75rem;
  padding-bottom: .75rem;
  color: #6c757d;
  text-align: left;
  caption-side: bottom;
}

th {
  text-align: inherit;
}

.table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 1rem;
  background-color: transparent;
}

.table td,.table th {
  padding: .75rem;
  vertical-align: top;
  border-top: 1px solid #dee2e6;
}

.table td {
  border-top: 1px solid #dee2e6;
}

.table thead th {
  vertical-align: bottom;
  border-bottom: 2px solid #dee2e6;
}

.table tbody+tbody {
  border-top: 2px solid #dee2e6;
}

.table .table {
  background-color: #fff;
}

.table-sm td,.table-sm th {
  padding: .3rem;
}

.table-bordered {
  border: 1px solid #dee2e6;
}

.table-bordered td,.table-bordered th {
  border: 1px solid #dee2e6;
}

.table-bordered thead td,.table-bordered thead th {
  border-bottom-width: 2px;
}

.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgba(0,0,0,.05);
}

.table-hover tbody tr:hover {
  background-color: rgba(0,0,0,.075);
}

.table-primary,.table-primary>td,.table-primary>th {
  background-color: #b8daff;
}

.table-hover .table-primary:hover {
  background-color: #9fcdff;
}

.table-hover .table-primary:hover>td,.table-hover .table-primary:hover>th {
  background-color: #9fcdff;
}

.table-secondary,.table-secondary>td,.table-secondary>th {
  background-color: #d6d8db;
}

.table-hover .table-secondary:hover {
  background-color: #c8cbcf;
}

.table-hover .table-secondary:hover>td,.table-hover .table-secondary:hover>th {
  background-color: #c8cbcf;
}

.table-success,.table-success>td,.table-success>th {
  background-color: #c3e6cb;
}

.table-hover .table-success:hover {
  background-color: #b1dfbb;
}

.table-hover .table-success:hover>td,.table-hover .table-success:hover>th {
  background-color: #b1dfbb;
}

.table-info,.table-info>td,.table-info>th {
  background-color: #bee5eb;
}

.table-hover .table-info:hover {
  background-color: #abdde5;
}

.table-hover .table-info:hover>td,.table-hover .table-info:hover>th {
  background-color: #abdde5;
}

.table-warning,.table-warning>td,.table-warning>th {
  background-color: #ffeeba;
}

.table-hover .table-warning:hover {
  background-color: #ffe8a1;
}

.table-hover .table-warning:hover>td,.table-hover .table-warning:hover>th {
  background-color: #ffe8a1;
}

.table-danger,.table-danger>td,.table-danger>th {
  background-color: #f5c6cb;
}

.table-hover .table-danger:hover {
  background-color: #f1b0b7;
}

.table-hover .table-danger:hover>td,.table-hover .table-danger:hover>th {
  background-color: #f1b0b7;
}

.table-light,.table-light>td,.table-light>th {
  background-color: #fdfdfe;
}

.table-hover .table-light:hover {
  background-color: #ececf6;
}

.table-hover .table-light:hover>td,.table-hover .table-light:hover>th {
  background-color: #ececf6;
}

.table-dark,.table-dark>td,.table-dark>th {
  background-color: #c6c8ca;
}

.table-hover .table-dark:hover {
  background-color: #b9bbbe;
}

.table-hover .table-dark:hover>td,.table-hover .table-dark:hover>th {
  background-color: #b9bbbe;
}

.table-active,.table-active>td,.table-active>th {
  background-color: rgba(0,0,0,.075);
}

.table-hover .table-active:hover {
  background-color: rgba(0,0,0,.075);
}

.table-hover .table-active:hover>td,.table-hover .table-active:hover>th {
  background-color: rgba(0,0,0,.075);
}

.table .thead-dark th {
  color: #fff;
  background-color: #212529;
  border-color: #32383e;
}

.table .thead-light th {
  color: #495057;
  background-color: #e9ecef;
  border-color: #dee2e6;
}

.table-dark {
  color: #fff;
  background-color: #212529;
}

.table-dark td,.table-dark th,.table-dark thead th {
  border-color: #32383e;
}

.table-dark.table-bordered {
  border: 0;
}

.table-dark.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgba(255,255,255,.05);
}

.table-dark.table-hover tbody tr:hover {
  background-color: rgba(255,255,255,.075);
}

.table-responsive {
  display: block;
  width: 100%;
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
  -ms-overflow-style: -ms-autohiding-scrollbar;
}

.table-responsive>.table-bordered {
  border: 0;
}

@media (max-width:575.98px) {
  .table-responsive-sm {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
  }

  .table-responsive-sm>.table-bordered {
    border: 0;
  }
}

@media (max-width:767.98px) {
  .table-responsive-md {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
  }

  .table-responsive-sm>.table-bordered {
    border: 0;
  }
}

@media (max-width:991.98px) {
  .table-responsive-lg {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
  }

  .table-responsive-sm>.table-bordered {
    border: 0;
  }
}

@media (max-width:1199.98px) {
  .table-responsive-xl {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
  }

  .table-responsive-sm>.table-bordered {
    border: 0;
  }
}

.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border-width: 0;
}

.not-sr-only {
  position: static;
  width: auto;
  height: auto;
  padding: 0;
  margin: 0;
  overflow: visible;
  clip: auto;
  white-space: normal;
}

.focus\:sr-only:focus {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border-width: 0;
}

.focus\:not-sr-only:focus {
  position: static;
  width: auto;
  height: auto;
  padding: 0;
  margin: 0;
  overflow: visible;
  clip: auto;
  white-space: normal;
}

.appearance-none {
  appearance: none;
}

.bg-fixed {
  background-attachment: fixed;
}

.bg-local {
  background-attachment: local;
}

.bg-scroll {
  background-attachment: scroll;
}

.bg-grey-darkest {
  background-color: #3d4852;
}

.bg-grey-darker {
  background-color: #606f7b;
}

.bg-grey-dark {
  background-color: #8795a1;
}

.bg-grey {
  background-color: #b8c2cc;
}

.bg-grey-light {
  background-color: #dae1e7;
}

.bg-grey-lighter {
  background-color: #f1f5f8;
}

.bg-grey-lightest {
  background-color: #f8fafc;
}

.bg-grey-mid-light {
  background-color: #f3f3f4;
}

.bg-white-lightest {
  background-color: #f4f4f4;
}

.bg-red-darkest {
  background-color: #3b0d0c;
}

.bg-red-darker {
  background-color: #621b18;
}

.bg-red-dark {
  background-color: #cc1f1a;
}

.bg-red-light {
  background-color: #ef5753;
}

.bg-red-lighter {
  background-color: #f9acaa;
}

.bg-red-lightest {
  background-color: #fcebea;
}

.bg-orange-darkest {
  background-color: #462a16;
}

.bg-orange-darker {
  background-color: #613b1f;
}

.bg-orange-dark {
  background-color: #de751f;
}

.bg-orange-light {
  background-color: #faad63;
}

.bg-orange-lighter {
  background-color: #fcd9b6;
}

.bg-orange-lightest {
  background-color: #fff5eb;
}

.bg-yellow-darkest {
  background-color: #453411;
}

.bg-yellow-darker {
  background-color: #684f1d;
}

.bg-yellow-dark {
  background-color: #f2d024;
}

.bg-yellow-light {
  background-color: #fff382;
}

.bg-yellow-lighter {
  background-color: #fff9c2;
}

.bg-yellow-lightest {
  background-color: #fcfbeb;
}

.bg-green-darkest {
  background-color: #0f2f21;
}

.bg-green-darker {
  background-color: #1a4731;
}

.bg-green-dark {
  background-color: #1f9d55;
}

.bg-green-light {
  background-color: #51d88a;
}

.bg-green-lighter {
  background-color: #a2f5bf;
}

.bg-green-lightest {
  background-color: #e3fcec;
}

.bg-teal-darkest {
  background-color: #0d3331;
}

.bg-teal-darker {
  background-color: #20504f;
}

.bg-teal-dark {
  background-color: #38a89d;
}

.bg-teal-light {
  background-color: #64d5ca;
}

.bg-teal-lighter {
  background-color: #a0f0ed;
}

.bg-teal-lightest {
  background-color: #e8fffe;
}

.bg-blue-darkest {
  background-color: #12283a;
}

.bg-blue-darker {
  background-color: #1c3d5a;
}

.bg-blue-dark {
  background-color: #2779bd;
}

.bg-blue-light {
  background-color: #6cb2eb;
}

.bg-blue-lighter {
  background-color: #bcdefa;
}

.bg-blue-lightest {
  background-color: #eff8ff;
}

.bg-indigo-darkest {
  background-color: #191e38;
}

.bg-indigo-darker {
  background-color: #2f365f;
}

.bg-indigo-dark {
  background-color: #5661b3;
}

.bg-indigo-light {
  background-color: #7886d7;
}

.bg-indigo-lighter {
  background-color: #b2b7ff;
}

.bg-indigo-lightest {
  background-color: #e6e8ff;
}

.bg-purple-darkest {
  background-color: #21183c;
}

.bg-purple-darker {
  background-color: #382b5f;
}

.bg-purple-dark {
  background-color: #794acf;
}

.bg-purple-light {
  background-color: #a779e9;
}

.bg-purple-lighter {
  background-color: #d6bbfc;
}

.bg-purple-lightest {
  background-color: #f3ebff;
}

.bg-pink-darkest {
  background-color: #451225;
}

.bg-pink-darker {
  background-color: #6f213f;
}

.bg-pink-dark {
  background-color: #eb5286;
}

.bg-pink-light {
  background-color: #fa7ea8;
}

.bg-pink-lighter {
  background-color: #ffbbca;
}

.bg-pink-lightest {
  background-color: #ffebef;
}

.bg-nav {
  background-color: #3F495E;
}

.bg-side-nav {
  background-color: #ECF0F1;
}

.bg-nav-item {
  background-color: #626b7a;
}

.bg-light-border {
  background-color: #dfe4e6;
}

.bg-white-medium {
  background-color: #FAFAFA;
}

.bg-white-medium-dark {
  background-color: #E5E9EB;
}

.bg-red-vibrant {
  background-color: #e46050;
}

.bg-red-vibrant-dark {
  background-color: #d64230;
}

.bg-primary {
  background-color: #51BE99;
}

.bg-primary-dark {
  background-color: #0e5f43;
}

.bg-warning {
  background-color: #f4ab43;
}

.bg-warning-dark {
  background-color: #c37c16;
}

.bg-black-dark {
  background-color: #272634;
}

.bg-black-darkest {
  background-color: #141418;
}

.bg-info {
  background-color: #52bcdc;
}

.bg-info-dark {
  background-color: #2cadd4;
}

.bg-success {
  background-color: #72b159;
}

.bg-success-dark {
  background-color: #5D9547;
}

.bg-transparent {
  background-color: transparent;
}

.bg-black {
  background-color: #000;
}

.bg-white {
  background-color: #fff;
}

.bg-gray-100 {
  background-color: #f7fafc;
}

.bg-gray-200 {
  background-color: #edf2f7;
}

.bg-gray-300 {
  background-color: #e2e8f0;
}

.bg-gray-400 {
  background-color: #cbd5e0;
}

.bg-gray-500 {
  background-color: #a0aec0;
}

.bg-gray-600 {
  background-color: #718096;
}

.bg-gray-700 {
  background-color: #4a5568;
}

.bg-gray-800 {
  background-color: #2d3748;
}

.bg-gray-900 {
  background-color: #1a202c;
}

.bg-red-100 {
  background-color: #fff5f5;
}

.bg-red-200 {
  background-color: #fed7d7;
}

.bg-red-300 {
  background-color: #feb2b2;
}

.bg-red-400 {
  background-color: #fc8181;
}

.bg-red-500 {
  background-color: #f56565;
}

.bg-red-600 {
  background-color: #e53e3e;
}

.bg-red-700 {
  background-color: #c53030;
}

.bg-red-800 {
  background-color: #9b2c2c;
}

.bg-red-900 {
  background-color: #742a2a;
}

.bg-orange-100 {
  background-color: #fffaf0;
}

.bg-orange-200 {
  background-color: #feebc8;
}

.bg-orange-300 {
  background-color: #fbd38d;
}

.bg-orange-400 {
  background-color: #f6ad55;
}

.bg-orange-500 {
  background-color: #ed8936;
}

.bg-orange-600 {
  background-color: #dd6b20;
}

.bg-orange-700 {
  background-color: #c05621;
}

.bg-orange-800 {
  background-color: #9c4221;
}

.bg-orange-900 {
  background-color: #7b341e;
}

.bg-yellow-100 {
  background-color: #fffff0;
}

.bg-yellow-200 {
  background-color: #fefcbf;
}

.bg-yellow-300 {
  background-color: #faf089;
}

.bg-yellow-400 {
  background-color: #f6e05e;
}

.bg-yellow-500 {
  background-color: #ecc94b;
}

.bg-yellow-600 {
  background-color: #d69e2e;
}

.bg-yellow-700 {
  background-color: #b7791f;
}

.bg-yellow-800 {
  background-color: #975a16;
}

.bg-yellow-900 {
  background-color: #744210;
}

.bg-green-100 {
  background-color: #f0fff4;
}

.bg-green-200 {
  background-color: #c6f6d5;
}

.bg-green-300 {
  background-color: #9ae6b4;
}

.bg-green-400 {
  background-color: #68d391;
}

.bg-green-500 {
  background-color: #48bb78;
}

.bg-green-600 {
  background-color: #38a169;
}

.bg-green-700 {
  background-color: #2f855a;
}

.bg-green-800 {
  background-color: #276749;
}

.bg-green-900 {
  background-color: #22543d;
}

.bg-teal-100 {
  background-color: #e6fffa;
}

.bg-teal-200 {
  background-color: #b2f5ea;
}

.bg-teal-300 {
  background-color: #81e6d9;
}

.bg-teal-400 {
  background-color: #4fd1c5;
}

.bg-teal-500 {
  background-color: #38b2ac;
}

.bg-teal-600 {
  background-color: #319795;
}

.bg-teal-700 {
  background-color: #2c7a7b;
}

.bg-teal-800 {
  background-color: #285e61;
}

.bg-teal-900 {
  background-color: #234e52;
}

.bg-blue-100 {
  background-color: #ebf8ff;
}

.bg-blue-200 {
  background-color: #bee3f8;
}

.bg-blue-300 {
  background-color: #90cdf4;
}

.bg-blue-400 {
  background-color: #63b3ed;
}

.bg-blue-500 {
  background-color: #4299e1;
}

.bg-blue-600 {
  background-color: #3182ce;
}

.bg-blue-700 {
  background-color: #2b6cb0;
}

.bg-blue-800 {
  background-color: #2c5282;
}

.bg-blue-900 {
  background-color: #2a4365;
}

.bg-indigo-100 {
  background-color: #ebf4ff;
}

.bg-indigo-200 {
  background-color: #c3dafe;
}

.bg-indigo-300 {
  background-color: #a3bffa;
}

.bg-indigo-400 {
  background-color: #7f9cf5;
}

.bg-indigo-500 {
  background-color: #667eea;
}

.bg-indigo-600 {
  background-color: #5a67d8;
}

.bg-indigo-700 {
  background-color: #4c51bf;
}

.bg-indigo-800 {
  background-color: #434190;
}

.bg-indigo-900 {
  background-color: #3c366b;
}

.bg-purple-100 {
  background-color: #faf5ff;
}

.bg-purple-200 {
  background-color: #e9d8fd;
}

.bg-purple-300 {
  background-color: #d6bcfa;
}

.bg-purple-400 {
  background-color: #b794f4;
}

.bg-purple-500 {
  background-color: #9f7aea;
}

.bg-purple-600 {
  background-color: #805ad5;
}

.bg-purple-700 {
  background-color: #6b46c1;
}

.bg-purple-800 {
  background-color: #553c9a;
}

.bg-purple-900 {
  background-color: #44337a;
}

.bg-pink-100 {
  background-color: #fff5f7;
}

.bg-pink-200 {
  background-color: #fed7e2;
}

.bg-pink-300 {
  background-color: #fbb6ce;
}

.bg-pink-400 {
  background-color: #f687b3;
}

.bg-pink-500 {
  background-color: #ed64a6;
}

.bg-pink-600 {
  background-color: #d53f8c;
}

.bg-pink-700 {
  background-color: #b83280;
}

.bg-pink-800 {
  background-color: #97266d;
}

.bg-pink-900 {
  background-color: #702459;
}

.hover\:bg-grey-darkest:hover {
  background-color: #3d4852;
}

.hover\:bg-grey-darker:hover {
  background-color: #606f7b;
}

.hover\:bg-grey-dark:hover {
  background-color: #8795a1;
}

.hover\:bg-grey:hover {
  background-color: #b8c2cc;
}

.hover\:bg-grey-light:hover {
  background-color: #dae1e7;
}

.hover\:bg-grey-lighter:hover {
  background-color: #f1f5f8;
}

.hover\:bg-grey-lightest:hover {
  background-color: #f8fafc;
}

.hover\:bg-grey-mid-light:hover {
  background-color: #f3f3f4;
}

.hover\:bg-white-lightest:hover {
  background-color: #f4f4f4;
}

.hover\:bg-red-darkest:hover {
  background-color: #3b0d0c;
}

.hover\:bg-red-darker:hover {
  background-color: #621b18;
}

.hover\:bg-red-dark:hover {
  background-color: #cc1f1a;
}

.hover\:bg-red-light:hover {
  background-color: #ef5753;
}

.hover\:bg-red-lighter:hover {
  background-color: #f9acaa;
}

.hover\:bg-red-lightest:hover {
  background-color: #fcebea;
}

.hover\:bg-orange-darkest:hover {
  background-color: #462a16;
}

.hover\:bg-orange-darker:hover {
  background-color: #613b1f;
}

.hover\:bg-orange-dark:hover {
  background-color: #de751f;
}

.hover\:bg-orange-light:hover {
  background-color: #faad63;
}

.hover\:bg-orange-lighter:hover {
  background-color: #fcd9b6;
}

.hover\:bg-orange-lightest:hover {
  background-color: #fff5eb;
}

.hover\:bg-yellow-darkest:hover {
  background-color: #453411;
}

.hover\:bg-yellow-darker:hover {
  background-color: #684f1d;
}

.hover\:bg-yellow-dark:hover {
  background-color: #f2d024;
}

.hover\:bg-yellow-light:hover {
  background-color: #fff382;
}

.hover\:bg-yellow-lighter:hover {
  background-color: #fff9c2;
}

.hover\:bg-yellow-lightest:hover {
  background-color: #fcfbeb;
}

.hover\:bg-green-darkest:hover {
  background-color: #0f2f21;
}

.hover\:bg-green-darker:hover {
  background-color: #1a4731;
}

.hover\:bg-green-dark:hover {
  background-color: #1f9d55;
}

.hover\:bg-green-light:hover {
  background-color: #51d88a;
}

.hover\:bg-green-lighter:hover {
  background-color: #a2f5bf;
}

.hover\:bg-green-lightest:hover {
  background-color: #e3fcec;
}

.hover\:bg-teal-darkest:hover {
  background-color: #0d3331;
}

.hover\:bg-teal-darker:hover {
  background-color: #20504f;
}

.hover\:bg-teal-dark:hover {
  background-color: #38a89d;
}

.hover\:bg-teal-light:hover {
  background-color: #64d5ca;
}

.hover\:bg-teal-lighter:hover {
  background-color: #a0f0ed;
}

.hover\:bg-teal-lightest:hover {
  background-color: #e8fffe;
}

.hover\:bg-blue-darkest:hover {
  background-color: #12283a;
}

.hover\:bg-blue-darker:hover {
  background-color: #1c3d5a;
}

.hover\:bg-blue-dark:hover {
  background-color: #2779bd;
}

.hover\:bg-blue-light:hover {
  background-color: #6cb2eb;
}

.hover\:bg-blue-lighter:hover {
  background-color: #bcdefa;
}

.hover\:bg-blue-lightest:hover {
  background-color: #eff8ff;
}

.hover\:bg-indigo-darkest:hover {
  background-color: #191e38;
}

.hover\:bg-indigo-darker:hover {
  background-color: #2f365f;
}

.hover\:bg-indigo-dark:hover {
  background-color: #5661b3;
}

.hover\:bg-indigo-light:hover {
  background-color: #7886d7;
}

.hover\:bg-indigo-lighter:hover {
  background-color: #b2b7ff;
}

.hover\:bg-indigo-lightest:hover {
  background-color: #e6e8ff;
}

.hover\:bg-purple-darkest:hover {
  background-color: #21183c;
}

.hover\:bg-purple-darker:hover {
  background-color: #382b5f;
}

.hover\:bg-purple-dark:hover {
  background-color: #794acf;
}

.hover\:bg-purple-light:hover {
  background-color: #a779e9;
}

.hover\:bg-purple-lighter:hover {
  background-color: #d6bbfc;
}

.hover\:bg-purple-lightest:hover {
  background-color: #f3ebff;
}

.hover\:bg-pink-darkest:hover {
  background-color: #451225;
}

.hover\:bg-pink-darker:hover {
  background-color: #6f213f;
}

.hover\:bg-pink-dark:hover {
  background-color: #eb5286;
}

.hover\:bg-pink-light:hover {
  background-color: #fa7ea8;
}

.hover\:bg-pink-lighter:hover {
  background-color: #ffbbca;
}

.hover\:bg-pink-lightest:hover {
  background-color: #ffebef;
}

.hover\:bg-nav:hover {
  background-color: #3F495E;
}

.hover\:bg-side-nav:hover {
  background-color: #ECF0F1;
}

.hover\:bg-nav-item:hover {
  background-color: #626b7a;
}

.hover\:bg-light-border:hover {
  background-color: #dfe4e6;
}

.hover\:bg-white-medium:hover {
  background-color: #FAFAFA;
}

.hover\:bg-white-medium-dark:hover {
  background-color: #E5E9EB;
}

.hover\:bg-red-vibrant:hover {
  background-color: #e46050;
}

.hover\:bg-red-vibrant-dark:hover {
  background-color: #d64230;
}

.hover\:bg-primary:hover {
  background-color: #51BE99;
}

.hover\:bg-primary-dark:hover {
  background-color: #0e5f43;
}

.hover\:bg-warning:hover {
  background-color: #f4ab43;
}

.hover\:bg-warning-dark:hover {
  background-color: #c37c16;
}

.hover\:bg-black-dark:hover {
  background-color: #272634;
}

.hover\:bg-black-darkest:hover {
  background-color: #141418;
}

.hover\:bg-info:hover {
  background-color: #52bcdc;
}

.hover\:bg-info-dark:hover {
  background-color: #2cadd4;
}

.hover\:bg-success:hover {
  background-color: #72b159;
}

.hover\:bg-success-dark:hover {
  background-color: #5D9547;
}

.hover\:bg-transparent:hover {
  background-color: transparent;
}

.hover\:bg-black:hover {
  background-color: #000;
}

.hover\:bg-white:hover {
  background-color: #fff;
}

.hover\:bg-gray-100:hover {
  background-color: #f7fafc;
}

.hover\:bg-gray-200:hover {
  background-color: #edf2f7;
}

.hover\:bg-gray-300:hover {
  background-color: #e2e8f0;
}

.hover\:bg-gray-400:hover {
  background-color: #cbd5e0;
}

.hover\:bg-gray-500:hover {
  background-color: #a0aec0;
}

.hover\:bg-gray-600:hover {
  background-color: #718096;
}

.hover\:bg-gray-700:hover {
  background-color: #4a5568;
}

.hover\:bg-gray-800:hover {
  background-color: #2d3748;
}

.hover\:bg-gray-900:hover {
  background-color: #1a202c;
}

.hover\:bg-red-100:hover {
  background-color: #fff5f5;
}

.hover\:bg-red-200:hover {
  background-color: #fed7d7;
}

.hover\:bg-red-300:hover {
  background-color: #feb2b2;
}

.hover\:bg-red-400:hover {
  background-color: #fc8181;
}

.hover\:bg-red-500:hover {
  background-color: #f56565;
}

.hover\:bg-red-600:hover {
  background-color: #e53e3e;
}

.hover\:bg-red-700:hover {
  background-color: #c53030;
}

.hover\:bg-red-800:hover {
  background-color: #9b2c2c;
}

.hover\:bg-red-900:hover {
  background-color: #742a2a;
}

.hover\:bg-orange-100:hover {
  background-color: #fffaf0;
}

.hover\:bg-orange-200:hover {
  background-color: #feebc8;
}

.hover\:bg-orange-300:hover {
  background-color: #fbd38d;
}

.hover\:bg-orange-400:hover {
  background-color: #f6ad55;
}

.hover\:bg-orange-500:hover {
  background-color: #ed8936;
}

.hover\:bg-orange-600:hover {
  background-color: #dd6b20;
}

.hover\:bg-orange-700:hover {
  background-color: #c05621;
}

.hover\:bg-orange-800:hover {
  background-color: #9c4221;
}

.hover\:bg-orange-900:hover {
  background-color: #7b341e;
}

.hover\:bg-yellow-100:hover {
  background-color: #fffff0;
}

.hover\:bg-yellow-200:hover {
  background-color: #fefcbf;
}

.hover\:bg-yellow-300:hover {
  background-color: #faf089;
}

.hover\:bg-yellow-400:hover {
  background-color: #f6e05e;
}

.hover\:bg-yellow-500:hover {
  background-color: #ecc94b;
}

.hover\:bg-yellow-600:hover {
  background-color: #d69e2e;
}

.hover\:bg-yellow-700:hover {
  background-color: #b7791f;
}

.hover\:bg-yellow-800:hover {
  background-color: #975a16;
}

.hover\:bg-yellow-900:hover {
  background-color: #744210;
}

.hover\:bg-green-100:hover {
  background-color: #f0fff4;
}

.hover\:bg-green-200:hover {
  background-color: #c6f6d5;
}

.hover\:bg-green-300:hover {
  background-color: #9ae6b4;
}

.hover\:bg-green-400:hover {
  background-color: #68d391;
}

.hover\:bg-green-500:hover {
  background-color: #48bb78;
}

.hover\:bg-green-600:hover {
  background-color: #38a169;
}

.hover\:bg-green-700:hover {
  background-color: #2f855a;
}

.hover\:bg-green-800:hover {
  background-color: #276749;
}

.hover\:bg-green-900:hover {
  background-color: #22543d;
}

.hover\:bg-teal-100:hover {
  background-color: #e6fffa;
}

.hover\:bg-teal-200:hover {
  background-color: #b2f5ea;
}

.hover\:bg-teal-300:hover {
  background-color: #81e6d9;
}

.hover\:bg-teal-400:hover {
  background-color: #4fd1c5;
}

.hover\:bg-teal-500:hover {
  background-color: #38b2ac;
}

.hover\:bg-teal-600:hover {
  background-color: #319795;
}

.hover\:bg-teal-700:hover {
  background-color: #2c7a7b;
}

.hover\:bg-teal-800:hover {
  background-color: #285e61;
}

.hover\:bg-teal-900:hover {
  background-color: #234e52;
}

.hover\:bg-blue-100:hover {
  background-color: #ebf8ff;
}

.hover\:bg-blue-200:hover {
  background-color: #bee3f8;
}

.hover\:bg-blue-300:hover {
  background-color: #90cdf4;
}

.hover\:bg-blue-400:hover {
  background-color: #63b3ed;
}

.hover\:bg-blue-500:hover {
  background-color: #4299e1;
}

.hover\:bg-blue-600:hover {
  background-color: #3182ce;
}

.hover\:bg-blue-700:hover {
  background-color: #2b6cb0;
}

.hover\:bg-blue-800:hover {
  background-color: #2c5282;
}

.hover\:bg-blue-900:hover {
  background-color: #2a4365;
}

.hover\:bg-indigo-100:hover {
  background-color: #ebf4ff;
}

.hover\:bg-indigo-200:hover {
  background-color: #c3dafe;
}

.hover\:bg-indigo-300:hover {
  background-color: #a3bffa;
}

.hover\:bg-indigo-400:hover {
  background-color: #7f9cf5;
}

.hover\:bg-indigo-500:hover {
  background-color: #667eea;
}

.hover\:bg-indigo-600:hover {
  background-color: #5a67d8;
}

.hover\:bg-indigo-700:hover {
  background-color: #4c51bf;
}

.hover\:bg-indigo-800:hover {
  background-color: #434190;
}

.hover\:bg-indigo-900:hover {
  background-color: #3c366b;
}

.hover\:bg-purple-100:hover {
  background-color: #faf5ff;
}

.hover\:bg-purple-200:hover {
  background-color: #e9d8fd;
}

.hover\:bg-purple-300:hover {
  background-color: #d6bcfa;
}

.hover\:bg-purple-400:hover {
  background-color: #b794f4;
}

.hover\:bg-purple-500:hover {
  background-color: #9f7aea;
}

.hover\:bg-purple-600:hover {
  background-color: #805ad5;
}

.hover\:bg-purple-700:hover {
  background-color: #6b46c1;
}

.hover\:bg-purple-800:hover {
  background-color: #553c9a;
}

.hover\:bg-purple-900:hover {
  background-color: #44337a;
}

.hover\:bg-pink-100:hover {
  background-color: #fff5f7;
}

.hover\:bg-pink-200:hover {
  background-color: #fed7e2;
}

.hover\:bg-pink-300:hover {
  background-color: #fbb6ce;
}

.hover\:bg-pink-400:hover {
  background-color: #f687b3;
}

.hover\:bg-pink-500:hover {
  background-color: #ed64a6;
}

.hover\:bg-pink-600:hover {
  background-color: #d53f8c;
}

.hover\:bg-pink-700:hover {
  background-color: #b83280;
}

.hover\:bg-pink-800:hover {
  background-color: #97266d;
}

.hover\:bg-pink-900:hover {
  background-color: #702459;
}

.focus\:bg-grey-darkest:focus {
  background-color: #3d4852;
}

.focus\:bg-grey-darker:focus {
  background-color: #606f7b;
}

.focus\:bg-grey-dark:focus {
  background-color: #8795a1;
}

.focus\:bg-grey:focus {
  background-color: #b8c2cc;
}

.focus\:bg-grey-light:focus {
  background-color: #dae1e7;
}

.focus\:bg-grey-lighter:focus {
  background-color: #f1f5f8;
}

.focus\:bg-grey-lightest:focus {
  background-color: #f8fafc;
}

.focus\:bg-grey-mid-light:focus {
  background-color: #f3f3f4;
}

.focus\:bg-white-lightest:focus {
  background-color: #f4f4f4;
}

.focus\:bg-red-darkest:focus {
  background-color: #3b0d0c;
}

.focus\:bg-red-darker:focus {
  background-color: #621b18;
}

.focus\:bg-red-dark:focus {
  background-color: #cc1f1a;
}

.focus\:bg-red-light:focus {
  background-color: #ef5753;
}

.focus\:bg-red-lighter:focus {
  background-color: #f9acaa;
}

.focus\:bg-red-lightest:focus {
  background-color: #fcebea;
}

.focus\:bg-orange-darkest:focus {
  background-color: #462a16;
}

.focus\:bg-orange-darker:focus {
  background-color: #613b1f;
}

.focus\:bg-orange-dark:focus {
  background-color: #de751f;
}

.focus\:bg-orange-light:focus {
  background-color: #faad63;
}

.focus\:bg-orange-lighter:focus {
  background-color: #fcd9b6;
}

.focus\:bg-orange-lightest:focus {
  background-color: #fff5eb;
}

.focus\:bg-yellow-darkest:focus {
  background-color: #453411;
}

.focus\:bg-yellow-darker:focus {
  background-color: #684f1d;
}

.focus\:bg-yellow-dark:focus {
  background-color: #f2d024;
}

.focus\:bg-yellow-light:focus {
  background-color: #fff382;
}

.focus\:bg-yellow-lighter:focus {
  background-color: #fff9c2;
}

.focus\:bg-yellow-lightest:focus {
  background-color: #fcfbeb;
}

.focus\:bg-green-darkest:focus {
  background-color: #0f2f21;
}

.focus\:bg-green-darker:focus {
  background-color: #1a4731;
}

.focus\:bg-green-dark:focus {
  background-color: #1f9d55;
}

.focus\:bg-green-light:focus {
  background-color: #51d88a;
}

.focus\:bg-green-lighter:focus {
  background-color: #a2f5bf;
}

.focus\:bg-green-lightest:focus {
  background-color: #e3fcec;
}

.focus\:bg-teal-darkest:focus {
  background-color: #0d3331;
}

.focus\:bg-teal-darker:focus {
  background-color: #20504f;
}

.focus\:bg-teal-dark:focus {
  background-color: #38a89d;
}

.focus\:bg-teal-light:focus {
  background-color: #64d5ca;
}

.focus\:bg-teal-lighter:focus {
  background-color: #a0f0ed;
}

.focus\:bg-teal-lightest:focus {
  background-color: #e8fffe;
}

.focus\:bg-blue-darkest:focus {
  background-color: #12283a;
}

.focus\:bg-blue-darker:focus {
  background-color: #1c3d5a;
}

.focus\:bg-blue-dark:focus {
  background-color: #2779bd;
}

.focus\:bg-blue-light:focus {
  background-color: #6cb2eb;
}

.focus\:bg-blue-lighter:focus {
  background-color: #bcdefa;
}

.focus\:bg-blue-lightest:focus {
  background-color: #eff8ff;
}

.focus\:bg-indigo-darkest:focus {
  background-color: #191e38;
}

.focus\:bg-indigo-darker:focus {
  background-color: #2f365f;
}

.focus\:bg-indigo-dark:focus {
  background-color: #5661b3;
}

.focus\:bg-indigo-light:focus {
  background-color: #7886d7;
}

.focus\:bg-indigo-lighter:focus {
  background-color: #b2b7ff;
}

.focus\:bg-indigo-lightest:focus {
  background-color: #e6e8ff;
}

.focus\:bg-purple-darkest:focus {
  background-color: #21183c;
}

.focus\:bg-purple-darker:focus {
  background-color: #382b5f;
}

.focus\:bg-purple-dark:focus {
  background-color: #794acf;
}

.focus\:bg-purple-light:focus {
  background-color: #a779e9;
}

.focus\:bg-purple-lighter:focus {
  background-color: #d6bbfc;
}

.focus\:bg-purple-lightest:focus {
  background-color: #f3ebff;
}

.focus\:bg-pink-darkest:focus {
  background-color: #451225;
}

.focus\:bg-pink-darker:focus {
  background-color: #6f213f;
}

.focus\:bg-pink-dark:focus {
  background-color: #eb5286;
}

.focus\:bg-pink-light:focus {
  background-color: #fa7ea8;
}

.focus\:bg-pink-lighter:focus {
  background-color: #ffbbca;
}

.focus\:bg-pink-lightest:focus {
  background-color: #ffebef;
}

.focus\:bg-nav:focus {
  background-color: #3F495E;
}

.focus\:bg-side-nav:focus {
  background-color: #ECF0F1;
}

.focus\:bg-nav-item:focus {
  background-color: #626b7a;
}

.focus\:bg-light-border:focus {
  background-color: #dfe4e6;
}

.focus\:bg-white-medium:focus {
  background-color: #FAFAFA;
}

.focus\:bg-white-medium-dark:focus {
  background-color: #E5E9EB;
}

.focus\:bg-red-vibrant:focus {
  background-color: #e46050;
}

.focus\:bg-red-vibrant-dark:focus {
  background-color: #d64230;
}

.focus\:bg-primary:focus {
  background-color: #51BE99;
}

.focus\:bg-primary-dark:focus {
  background-color: #0e5f43;
}

.focus\:bg-warning:focus {
  background-color: #f4ab43;
}

.focus\:bg-warning-dark:focus {
  background-color: #c37c16;
}

.focus\:bg-black-dark:focus {
  background-color: #272634;
}

.focus\:bg-black-darkest:focus {
  background-color: #141418;
}

.focus\:bg-info:focus {
  background-color: #52bcdc;
}

.focus\:bg-info-dark:focus {
  background-color: #2cadd4;
}

.focus\:bg-success:focus {
  background-color: #72b159;
}

.focus\:bg-success-dark:focus {
  background-color: #5D9547;
}

.focus\:bg-transparent:focus {
  background-color: transparent;
}

.focus\:bg-black:focus {
  background-color: #000;
}

.focus\:bg-white:focus {
  background-color: #fff;
}

.focus\:bg-gray-100:focus {
  background-color: #f7fafc;
}

.focus\:bg-gray-200:focus {
  background-color: #edf2f7;
}

.focus\:bg-gray-300:focus {
  background-color: #e2e8f0;
}

.focus\:bg-gray-400:focus {
  background-color: #cbd5e0;
}

.focus\:bg-gray-500:focus {
  background-color: #a0aec0;
}

.focus\:bg-gray-600:focus {
  background-color: #718096;
}

.focus\:bg-gray-700:focus {
  background-color: #4a5568;
}

.focus\:bg-gray-800:focus {
  background-color: #2d3748;
}

.focus\:bg-gray-900:focus {
  background-color: #1a202c;
}

.focus\:bg-red-100:focus {
  background-color: #fff5f5;
}

.focus\:bg-red-200:focus {
  background-color: #fed7d7;
}

.focus\:bg-red-300:focus {
  background-color: #feb2b2;
}

.focus\:bg-red-400:focus {
  background-color: #fc8181;
}

.focus\:bg-red-500:focus {
  background-color: #f56565;
}

.focus\:bg-red-600:focus {
  background-color: #e53e3e;
}

.focus\:bg-red-700:focus {
  background-color: #c53030;
}

.focus\:bg-red-800:focus {
  background-color: #9b2c2c;
}

.focus\:bg-red-900:focus {
  background-color: #742a2a;
}

.focus\:bg-orange-100:focus {
  background-color: #fffaf0;
}

.focus\:bg-orange-200:focus {
  background-color: #feebc8;
}

.focus\:bg-orange-300:focus {
  background-color: #fbd38d;
}

.focus\:bg-orange-400:focus {
  background-color: #f6ad55;
}

.focus\:bg-orange-500:focus {
  background-color: #ed8936;
}

.focus\:bg-orange-600:focus {
  background-color: #dd6b20;
}

.focus\:bg-orange-700:focus {
  background-color: #c05621;
}

.focus\:bg-orange-800:focus {
  background-color: #9c4221;
}

.focus\:bg-orange-900:focus {
  background-color: #7b341e;
}

.focus\:bg-yellow-100:focus {
  background-color: #fffff0;
}

.focus\:bg-yellow-200:focus {
  background-color: #fefcbf;
}

.focus\:bg-yellow-300:focus {
  background-color: #faf089;
}

.focus\:bg-yellow-400:focus {
  background-color: #f6e05e;
}

.focus\:bg-yellow-500:focus {
  background-color: #ecc94b;
}

.focus\:bg-yellow-600:focus {
  background-color: #d69e2e;
}

.focus\:bg-yellow-700:focus {
  background-color: #b7791f;
}

.focus\:bg-yellow-800:focus {
  background-color: #975a16;
}

.focus\:bg-yellow-900:focus {
  background-color: #744210;
}

.focus\:bg-green-100:focus {
  background-color: #f0fff4;
}

.focus\:bg-green-200:focus {
  background-color: #c6f6d5;
}

.focus\:bg-green-300:focus {
  background-color: #9ae6b4;
}

.focus\:bg-green-400:focus {
  background-color: #68d391;
}

.focus\:bg-green-500:focus {
  background-color: #48bb78;
}

.focus\:bg-green-600:focus {
  background-color: #38a169;
}

.focus\:bg-green-700:focus {
  background-color: #2f855a;
}

.focus\:bg-green-800:focus {
  background-color: #276749;
}

.focus\:bg-green-900:focus {
  background-color: #22543d;
}

.focus\:bg-teal-100:focus {
  background-color: #e6fffa;
}

.focus\:bg-teal-200:focus {
  background-color: #b2f5ea;
}

.focus\:bg-teal-300:focus {
  background-color: #81e6d9;
}

.focus\:bg-teal-400:focus {
  background-color: #4fd1c5;
}

.focus\:bg-teal-500:focus {
  background-color: #38b2ac;
}

.focus\:bg-teal-600:focus {
  background-color: #319795;
}

.focus\:bg-teal-700:focus {
  background-color: #2c7a7b;
}

.focus\:bg-teal-800:focus {
  background-color: #285e61;
}

.focus\:bg-teal-900:focus {
  background-color: #234e52;
}

.focus\:bg-blue-100:focus {
  background-color: #ebf8ff;
}

.focus\:bg-blue-200:focus {
  background-color: #bee3f8;
}

.focus\:bg-blue-300:focus {
  background-color: #90cdf4;
}

.focus\:bg-blue-400:focus {
  background-color: #63b3ed;
}

.focus\:bg-blue-500:focus {
  background-color: #4299e1;
}

.focus\:bg-blue-600:focus {
  background-color: #3182ce;
}

.focus\:bg-blue-700:focus {
  background-color: #2b6cb0;
}

.focus\:bg-blue-800:focus {
  background-color: #2c5282;
}

.focus\:bg-blue-900:focus {
  background-color: #2a4365;
}

.focus\:bg-indigo-100:focus {
  background-color: #ebf4ff;
}

.focus\:bg-indigo-200:focus {
  background-color: #c3dafe;
}

.focus\:bg-indigo-300:focus {
  background-color: #a3bffa;
}

.focus\:bg-indigo-400:focus {
  background-color: #7f9cf5;
}

.focus\:bg-indigo-500:focus {
  background-color: #667eea;
}

.focus\:bg-indigo-600:focus {
  background-color: #5a67d8;
}

.focus\:bg-indigo-700:focus {
  background-color: #4c51bf;
}

.focus\:bg-indigo-800:focus {
  background-color: #434190;
}

.focus\:bg-indigo-900:focus {
  background-color: #3c366b;
}

.focus\:bg-purple-100:focus {
  background-color: #faf5ff;
}

.focus\:bg-purple-200:focus {
  background-color: #e9d8fd;
}

.focus\:bg-purple-300:focus {
  background-color: #d6bcfa;
}

.focus\:bg-purple-400:focus {
  background-color: #b794f4;
}

.focus\:bg-purple-500:focus {
  background-color: #9f7aea;
}

.focus\:bg-purple-600:focus {
  background-color: #805ad5;
}

.focus\:bg-purple-700:focus {
  background-color: #6b46c1;
}

.focus\:bg-purple-800:focus {
  background-color: #553c9a;
}

.focus\:bg-purple-900:focus {
  background-color: #44337a;
}

.focus\:bg-pink-100:focus {
  background-color: #fff5f7;
}

.focus\:bg-pink-200:focus {
  background-color: #fed7e2;
}

.focus\:bg-pink-300:focus {
  background-color: #fbb6ce;
}

.focus\:bg-pink-400:focus {
  background-color: #f687b3;
}

.focus\:bg-pink-500:focus {
  background-color: #ed64a6;
}

.focus\:bg-pink-600:focus {
  background-color: #d53f8c;
}

.focus\:bg-pink-700:focus {
  background-color: #b83280;
}

.focus\:bg-pink-800:focus {
  background-color: #97266d;
}

.focus\:bg-pink-900:focus {
  background-color: #702459;
}

.bg-bottom {
  background-position: bottom;
}

.bg-center {
  background-position: center;
}

.bg-left {
  background-position: left;
}

.bg-left-bottom {
  background-position: left bottom;
}

.bg-left-top {
  background-position: left top;
}

.bg-right {
  background-position: right;
}

.bg-right-bottom {
  background-position: right bottom;
}

.bg-right-top {
  background-position: right top;
}

.bg-top {
  background-position: top;
}

.bg-repeat {
  background-repeat: repeat;
}

.bg-no-repeat {
  background-repeat: no-repeat;
}

.bg-repeat-x {
  background-repeat: repeat-x;
}

.bg-repeat-y {
  background-repeat: repeat-y;
}

.bg-repeat-round {
  background-repeat: round;
}

.bg-repeat-space {
  background-repeat: space;
}

.bg-auto {
  background-size: auto;
}

.bg-cover {
  background-size: cover;
}

.bg-contain {
  background-size: contain;
}

.border-collapse {
  border-collapse: collapse;
}

.border-separate {
  border-collapse: separate;
}

.border-grey-darkest {
  border-color: #3d4852;
}

.border-grey-darker {
  border-color: #606f7b;
}

.border-grey-dark {
  border-color: #8795a1;
}

.border-grey {
  border-color: #b8c2cc;
}

.border-grey-light {
  border-color: #dae1e7;
}

.border-grey-lighter {
  border-color: #f1f5f8;
}

.border-grey-lightest {
  border-color: #f8fafc;
}

.border-grey-mid-light {
  border-color: #f3f3f4;
}

.border-white-lightest {
  border-color: #f4f4f4;
}

.border-red-darkest {
  border-color: #3b0d0c;
}

.border-red-darker {
  border-color: #621b18;
}

.border-red-dark {
  border-color: #cc1f1a;
}

.border-red-light {
  border-color: #ef5753;
}

.border-red-lighter {
  border-color: #f9acaa;
}

.border-red-lightest {
  border-color: #fcebea;
}

.border-orange-darkest {
  border-color: #462a16;
}

.border-orange-darker {
  border-color: #613b1f;
}

.border-orange-dark {
  border-color: #de751f;
}

.border-orange-light {
  border-color: #faad63;
}

.border-orange-lighter {
  border-color: #fcd9b6;
}

.border-orange-lightest {
  border-color: #fff5eb;
}

.border-yellow-darkest {
  border-color: #453411;
}

.border-yellow-darker {
  border-color: #684f1d;
}

.border-yellow-dark {
  border-color: #f2d024;
}

.border-yellow-light {
  border-color: #fff382;
}

.border-yellow-lighter {
  border-color: #fff9c2;
}

.border-yellow-lightest {
  border-color: #fcfbeb;
}

.border-green-darkest {
  border-color: #0f2f21;
}

.border-green-darker {
  border-color: #1a4731;
}

.border-green-dark {
  border-color: #1f9d55;
}

.border-green-light {
  border-color: #51d88a;
}

.border-green-lighter {
  border-color: #a2f5bf;
}

.border-green-lightest {
  border-color: #e3fcec;
}

.border-teal-darkest {
  border-color: #0d3331;
}

.border-teal-darker {
  border-color: #20504f;
}

.border-teal-dark {
  border-color: #38a89d;
}

.border-teal-light {
  border-color: #64d5ca;
}

.border-teal-lighter {
  border-color: #a0f0ed;
}

.border-teal-lightest {
  border-color: #e8fffe;
}

.border-blue-darkest {
  border-color: #12283a;
}

.border-blue-darker {
  border-color: #1c3d5a;
}

.border-blue-dark {
  border-color: #2779bd;
}

.border-blue-light {
  border-color: #6cb2eb;
}

.border-blue-lighter {
  border-color: #bcdefa;
}

.border-blue-lightest {
  border-color: #eff8ff;
}

.border-indigo-darkest {
  border-color: #191e38;
}

.border-indigo-darker {
  border-color: #2f365f;
}

.border-indigo-dark {
  border-color: #5661b3;
}

.border-indigo-light {
  border-color: #7886d7;
}

.border-indigo-lighter {
  border-color: #b2b7ff;
}

.border-indigo-lightest {
  border-color: #e6e8ff;
}

.border-purple-darkest {
  border-color: #21183c;
}

.border-purple-darker {
  border-color: #382b5f;
}

.border-purple-dark {
  border-color: #794acf;
}

.border-purple-light {
  border-color: #a779e9;
}

.border-purple-lighter {
  border-color: #d6bbfc;
}

.border-purple-lightest {
  border-color: #f3ebff;
}

.border-pink-darkest {
  border-color: #451225;
}

.border-pink-darker {
  border-color: #6f213f;
}

.border-pink-dark {
  border-color: #eb5286;
}

.border-pink-light {
  border-color: #fa7ea8;
}

.border-pink-lighter {
  border-color: #ffbbca;
}

.border-pink-lightest {
  border-color: #ffebef;
}

.border-nav {
  border-color: #3F495E;
}

.border-side-nav {
  border-color: #ECF0F1;
}

.border-nav-item {
  border-color: #626b7a;
}

.border-light-border {
  border-color: #dfe4e6;
}

.border-white-medium {
  border-color: #FAFAFA;
}

.border-white-medium-dark {
  border-color: #E5E9EB;
}

.border-red-vibrant {
  border-color: #e46050;
}

.border-red-vibrant-dark {
  border-color: #d64230;
}

.border-primary {
  border-color: #51BE99;
}

.border-primary-dark {
  border-color: #0e5f43;
}

.border-warning {
  border-color: #f4ab43;
}

.border-warning-dark {
  border-color: #c37c16;
}

.border-black-dark {
  border-color: #272634;
}

.border-black-darkest {
  border-color: #141418;
}

.border-info {
  border-color: #52bcdc;
}

.border-info-dark {
  border-color: #2cadd4;
}

.border-success {
  border-color: #72b159;
}

.border-success-dark {
  border-color: #5D9547;
}

.border-transparent {
  border-color: transparent;
}

.border-black {
  border-color: #000;
}

.border-white {
  border-color: #fff;
}

.border-gray-100 {
  border-color: #f7fafc;
}

.border-gray-200 {
  border-color: #edf2f7;
}

.border-gray-300 {
  border-color: #e2e8f0;
}

.border-gray-400 {
  border-color: #cbd5e0;
}

.border-gray-500 {
  border-color: #a0aec0;
}

.border-gray-600 {
  border-color: #718096;
}

.border-gray-700 {
  border-color: #4a5568;
}

.border-gray-800 {
  border-color: #2d3748;
}

.border-gray-900 {
  border-color: #1a202c;
}

.border-red-100 {
  border-color: #fff5f5;
}

.border-red-200 {
  border-color: #fed7d7;
}

.border-red-300 {
  border-color: #feb2b2;
}

.border-red-400 {
  border-color: #fc8181;
}

.border-red-500 {
  border-color: #f56565;
}

.border-red-600 {
  border-color: #e53e3e;
}

.border-red-700 {
  border-color: #c53030;
}

.border-red-800 {
  border-color: #9b2c2c;
}

.border-red-900 {
  border-color: #742a2a;
}

.border-orange-100 {
  border-color: #fffaf0;
}

.border-orange-200 {
  border-color: #feebc8;
}

.border-orange-300 {
  border-color: #fbd38d;
}

.border-orange-400 {
  border-color: #f6ad55;
}

.border-orange-500 {
  border-color: #ed8936;
}

.border-orange-600 {
  border-color: #dd6b20;
}

.border-orange-700 {
  border-color: #c05621;
}

.border-orange-800 {
  border-color: #9c4221;
}

.border-orange-900 {
  border-color: #7b341e;
}

.border-yellow-100 {
  border-color: #fffff0;
}

.border-yellow-200 {
  border-color: #fefcbf;
}

.border-yellow-300 {
  border-color: #faf089;
}

.border-yellow-400 {
  border-color: #f6e05e;
}

.border-yellow-500 {
  border-color: #ecc94b;
}

.border-yellow-600 {
  border-color: #d69e2e;
}

.border-yellow-700 {
  border-color: #b7791f;
}

.border-yellow-800 {
  border-color: #975a16;
}

.border-yellow-900 {
  border-color: #744210;
}

.border-green-100 {
  border-color: #f0fff4;
}

.border-green-200 {
  border-color: #c6f6d5;
}

.border-green-300 {
  border-color: #9ae6b4;
}

.border-green-400 {
  border-color: #68d391;
}

.border-green-500 {
  border-color: #48bb78;
}

.border-green-600 {
  border-color: #38a169;
}

.border-green-700 {
  border-color: #2f855a;
}

.border-green-800 {
  border-color: #276749;
}

.border-green-900 {
  border-color: #22543d;
}

.border-teal-100 {
  border-color: #e6fffa;
}

.border-teal-200 {
  border-color: #b2f5ea;
}

.border-teal-300 {
  border-color: #81e6d9;
}

.border-teal-400 {
  border-color: #4fd1c5;
}

.border-teal-500 {
  border-color: #38b2ac;
}

.border-teal-600 {
  border-color: #319795;
}

.border-teal-700 {
  border-color: #2c7a7b;
}

.border-teal-800 {
  border-color: #285e61;
}

.border-teal-900 {
  border-color: #234e52;
}

.border-blue-100 {
  border-color: #ebf8ff;
}

.border-blue-200 {
  border-color: #bee3f8;
}

.border-blue-300 {
  border-color: #90cdf4;
}

.border-blue-400 {
  border-color: #63b3ed;
}

.border-blue-500 {
  border-color: #4299e1;
}

.border-blue-600 {
  border-color: #3182ce;
}

.border-blue-700 {
  border-color: #2b6cb0;
}

.border-blue-800 {
  border-color: #2c5282;
}

.border-blue-900 {
  border-color: #2a4365;
}

.border-indigo-100 {
  border-color: #ebf4ff;
}

.border-indigo-200 {
  border-color: #c3dafe;
}

.border-indigo-300 {
  border-color: #a3bffa;
}

.border-indigo-400 {
  border-color: #7f9cf5;
}

.border-indigo-500 {
  border-color: #667eea;
}

.border-indigo-600 {
  border-color: #5a67d8;
}

.border-indigo-700 {
  border-color: #4c51bf;
}

.border-indigo-800 {
  border-color: #434190;
}

.border-indigo-900 {
  border-color: #3c366b;
}

.border-purple-100 {
  border-color: #faf5ff;
}

.border-purple-200 {
  border-color: #e9d8fd;
}

.border-purple-300 {
  border-color: #d6bcfa;
}

.border-purple-400 {
  border-color: #b794f4;
}

.border-purple-500 {
  border-color: #9f7aea;
}

.border-purple-600 {
  border-color: #805ad5;
}

.border-purple-700 {
  border-color: #6b46c1;
}

.border-purple-800 {
  border-color: #553c9a;
}

.border-purple-900 {
  border-color: #44337a;
}

.border-pink-100 {
  border-color: #fff5f7;
}

.border-pink-200 {
  border-color: #fed7e2;
}

.border-pink-300 {
  border-color: #fbb6ce;
}

.border-pink-400 {
  border-color: #f687b3;
}

.border-pink-500 {
  border-color: #ed64a6;
}

.border-pink-600 {
  border-color: #d53f8c;
}

.border-pink-700 {
  border-color: #b83280;
}

.border-pink-800 {
  border-color: #97266d;
}

.border-pink-900 {
  border-color: #702459;
}

.hover\:border-grey-darkest:hover {
  border-color: #3d4852;
}

.hover\:border-grey-darker:hover {
  border-color: #606f7b;
}

.hover\:border-grey-dark:hover {
  border-color: #8795a1;
}

.hover\:border-grey:hover {
  border-color: #b8c2cc;
}

.hover\:border-grey-light:hover {
  border-color: #dae1e7;
}

.hover\:border-grey-lighter:hover {
  border-color: #f1f5f8;
}

.hover\:border-grey-lightest:hover {
  border-color: #f8fafc;
}

.hover\:border-grey-mid-light:hover {
  border-color: #f3f3f4;
}

.hover\:border-white-lightest:hover {
  border-color: #f4f4f4;
}

.hover\:border-red-darkest:hover {
  border-color: #3b0d0c;
}

.hover\:border-red-darker:hover {
  border-color: #621b18;
}

.hover\:border-red-dark:hover {
  border-color: #cc1f1a;
}

.hover\:border-red-light:hover {
  border-color: #ef5753;
}

.hover\:border-red-lighter:hover {
  border-color: #f9acaa;
}

.hover\:border-red-lightest:hover {
  border-color: #fcebea;
}

.hover\:border-orange-darkest:hover {
  border-color: #462a16;
}

.hover\:border-orange-darker:hover {
  border-color: #613b1f;
}

.hover\:border-orange-dark:hover {
  border-color: #de751f;
}

.hover\:border-orange-light:hover {
  border-color: #faad63;
}

.hover\:border-orange-lighter:hover {
  border-color: #fcd9b6;
}

.hover\:border-orange-lightest:hover {
  border-color: #fff5eb;
}

.hover\:border-yellow-darkest:hover {
  border-color: #453411;
}

.hover\:border-yellow-darker:hover {
  border-color: #684f1d;
}

.hover\:border-yellow-dark:hover {
  border-color: #f2d024;
}

.hover\:border-yellow-light:hover {
  border-color: #fff382;
}

.hover\:border-yellow-lighter:hover {
  border-color: #fff9c2;
}

.hover\:border-yellow-lightest:hover {
  border-color: #fcfbeb;
}

.hover\:border-green-darkest:hover {
  border-color: #0f2f21;
}

.hover\:border-green-darker:hover {
  border-color: #1a4731;
}

.hover\:border-green-dark:hover {
  border-color: #1f9d55;
}

.hover\:border-green-light:hover {
  border-color: #51d88a;
}

.hover\:border-green-lighter:hover {
  border-color: #a2f5bf;
}

.hover\:border-green-lightest:hover {
  border-color: #e3fcec;
}

.hover\:border-teal-darkest:hover {
  border-color: #0d3331;
}

.hover\:border-teal-darker:hover {
  border-color: #20504f;
}

.hover\:border-teal-dark:hover {
  border-color: #38a89d;
}

.hover\:border-teal-light:hover {
  border-color: #64d5ca;
}

.hover\:border-teal-lighter:hover {
  border-color: #a0f0ed;
}

.hover\:border-teal-lightest:hover {
  border-color: #e8fffe;
}

.hover\:border-blue-darkest:hover {
  border-color: #12283a;
}

.hover\:border-blue-darker:hover {
  border-color: #1c3d5a;
}

.hover\:border-blue-dark:hover {
  border-color: #2779bd;
}

.hover\:border-blue-light:hover {
  border-color: #6cb2eb;
}

.hover\:border-blue-lighter:hover {
  border-color: #bcdefa;
}

.hover\:border-blue-lightest:hover {
  border-color: #eff8ff;
}

.hover\:border-indigo-darkest:hover {
  border-color: #191e38;
}

.hover\:border-indigo-darker:hover {
  border-color: #2f365f;
}

.hover\:border-indigo-dark:hover {
  border-color: #5661b3;
}

.hover\:border-indigo-light:hover {
  border-color: #7886d7;
}

.hover\:border-indigo-lighter:hover {
  border-color: #b2b7ff;
}

.hover\:border-indigo-lightest:hover {
  border-color: #e6e8ff;
}

.hover\:border-purple-darkest:hover {
  border-color: #21183c;
}

.hover\:border-purple-darker:hover {
  border-color: #382b5f;
}

.hover\:border-purple-dark:hover {
  border-color: #794acf;
}

.hover\:border-purple-light:hover {
  border-color: #a779e9;
}

.hover\:border-purple-lighter:hover {
  border-color: #d6bbfc;
}

.hover\:border-purple-lightest:hover {
  border-color: #f3ebff;
}

.hover\:border-pink-darkest:hover {
  border-color: #451225;
}

.hover\:border-pink-darker:hover {
  border-color: #6f213f;
}

.hover\:border-pink-dark:hover {
  border-color: #eb5286;
}

.hover\:border-pink-light:hover {
  border-color: #fa7ea8;
}

.hover\:border-pink-lighter:hover {
  border-color: #ffbbca;
}

.hover\:border-pink-lightest:hover {
  border-color: #ffebef;
}

.hover\:border-nav:hover {
  border-color: #3F495E;
}

.hover\:border-side-nav:hover {
  border-color: #ECF0F1;
}

.hover\:border-nav-item:hover {
  border-color: #626b7a;
}

.hover\:border-light-border:hover {
  border-color: #dfe4e6;
}

.hover\:border-white-medium:hover {
  border-color: #FAFAFA;
}

.hover\:border-white-medium-dark:hover {
  border-color: #E5E9EB;
}

.hover\:border-red-vibrant:hover {
  border-color: #e46050;
}

.hover\:border-red-vibrant-dark:hover {
  border-color: #d64230;
}

.hover\:border-primary:hover {
  border-color: #51BE99;
}

.hover\:border-primary-dark:hover {
  border-color: #0e5f43;
}

.hover\:border-warning:hover {
  border-color: #f4ab43;
}

.hover\:border-warning-dark:hover {
  border-color: #c37c16;
}

.hover\:border-black-dark:hover {
  border-color: #272634;
}

.hover\:border-black-darkest:hover {
  border-color: #141418;
}

.hover\:border-info:hover {
  border-color: #52bcdc;
}

.hover\:border-info-dark:hover {
  border-color: #2cadd4;
}

.hover\:border-success:hover {
  border-color: #72b159;
}

.hover\:border-success-dark:hover {
  border-color: #5D9547;
}

.hover\:border-transparent:hover {
  border-color: transparent;
}

.hover\:border-black:hover {
  border-color: #000;
}

.hover\:border-white:hover {
  border-color: #fff;
}

.hover\:border-gray-100:hover {
  border-color: #f7fafc;
}

.hover\:border-gray-200:hover {
  border-color: #edf2f7;
}

.hover\:border-gray-300:hover {
  border-color: #e2e8f0;
}

.hover\:border-gray-400:hover {
  border-color: #cbd5e0;
}

.hover\:border-gray-500:hover {
  border-color: #a0aec0;
}

.hover\:border-gray-600:hover {
  border-color: #718096;
}

.hover\:border-gray-700:hover {
  border-color: #4a5568;
}

.hover\:border-gray-800:hover {
  border-color: #2d3748;
}

.hover\:border-gray-900:hover {
  border-color: #1a202c;
}

.hover\:border-red-100:hover {
  border-color: #fff5f5;
}

.hover\:border-red-200:hover {
  border-color: #fed7d7;
}

.hover\:border-red-300:hover {
  border-color: #feb2b2;
}

.hover\:border-red-400:hover {
  border-color: #fc8181;
}

.hover\:border-red-500:hover {
  border-color: #f56565;
}

.hover\:border-red-600:hover {
  border-color: #e53e3e;
}

.hover\:border-red-700:hover {
  border-color: #c53030;
}

.hover\:border-red-800:hover {
  border-color: #9b2c2c;
}

.hover\:border-red-900:hover {
  border-color: #742a2a;
}

.hover\:border-orange-100:hover {
  border-color: #fffaf0;
}

.hover\:border-orange-200:hover {
  border-color: #feebc8;
}

.hover\:border-orange-300:hover {
  border-color: #fbd38d;
}

.hover\:border-orange-400:hover {
  border-color: #f6ad55;
}

.hover\:border-orange-500:hover {
  border-color: #ed8936;
}

.hover\:border-orange-600:hover {
  border-color: #dd6b20;
}

.hover\:border-orange-700:hover {
  border-color: #c05621;
}

.hover\:border-orange-800:hover {
  border-color: #9c4221;
}

.hover\:border-orange-900:hover {
  border-color: #7b341e;
}

.hover\:border-yellow-100:hover {
  border-color: #fffff0;
}

.hover\:border-yellow-200:hover {
  border-color: #fefcbf;
}

.hover\:border-yellow-300:hover {
  border-color: #faf089;
}

.hover\:border-yellow-400:hover {
  border-color: #f6e05e;
}

.hover\:border-yellow-500:hover {
  border-color: #ecc94b;
}

.hover\:border-yellow-600:hover {
  border-color: #d69e2e;
}

.hover\:border-yellow-700:hover {
  border-color: #b7791f;
}

.hover\:border-yellow-800:hover {
  border-color: #975a16;
}

.hover\:border-yellow-900:hover {
  border-color: #744210;
}

.hover\:border-green-100:hover {
  border-color: #f0fff4;
}

.hover\:border-green-200:hover {
  border-color: #c6f6d5;
}

.hover\:border-green-300:hover {
  border-color: #9ae6b4;
}

.hover\:border-green-400:hover {
  border-color: #68d391;
}

.hover\:border-green-500:hover {
  border-color: #48bb78;
}

.hover\:border-green-600:hover {
  border-color: #38a169;
}

.hover\:border-green-700:hover {
  border-color: #2f855a;
}

.hover\:border-green-800:hover {
  border-color: #276749;
}

.hover\:border-green-900:hover {
  border-color: #22543d;
}

.hover\:border-teal-100:hover {
  border-color: #e6fffa;
}

.hover\:border-teal-200:hover {
  border-color: #b2f5ea;
}

.hover\:border-teal-300:hover {
  border-color: #81e6d9;
}

.hover\:border-teal-400:hover {
  border-color: #4fd1c5;
}

.hover\:border-teal-500:hover {
  border-color: #38b2ac;
}

.hover\:border-teal-600:hover {
  border-color: #319795;
}

.hover\:border-teal-700:hover {
  border-color: #2c7a7b;
}

.hover\:border-teal-800:hover {
  border-color: #285e61;
}

.hover\:border-teal-900:hover {
  border-color: #234e52;
}

.hover\:border-blue-100:hover {
  border-color: #ebf8ff;
}

.hover\:border-blue-200:hover {
  border-color: #bee3f8;
}

.hover\:border-blue-300:hover {
  border-color: #90cdf4;
}

.hover\:border-blue-400:hover {
  border-color: #63b3ed;
}

.hover\:border-blue-500:hover {
  border-color: #4299e1;
}

.hover\:border-blue-600:hover {
  border-color: #3182ce;
}

.hover\:border-blue-700:hover {
  border-color: #2b6cb0;
}

.hover\:border-blue-800:hover {
  border-color: #2c5282;
}

.hover\:border-blue-900:hover {
  border-color: #2a4365;
}

.hover\:border-indigo-100:hover {
  border-color: #ebf4ff;
}

.hover\:border-indigo-200:hover {
  border-color: #c3dafe;
}

.hover\:border-indigo-300:hover {
  border-color: #a3bffa;
}

.hover\:border-indigo-400:hover {
  border-color: #7f9cf5;
}

.hover\:border-indigo-500:hover {
  border-color: #667eea;
}

.hover\:border-indigo-600:hover {
  border-color: #5a67d8;
}

.hover\:border-indigo-700:hover {
  border-color: #4c51bf;
}

.hover\:border-indigo-800:hover {
  border-color: #434190;
}

.hover\:border-indigo-900:hover {
  border-color: #3c366b;
}

.hover\:border-purple-100:hover {
  border-color: #faf5ff;
}

.hover\:border-purple-200:hover {
  border-color: #e9d8fd;
}

.hover\:border-purple-300:hover {
  border-color: #d6bcfa;
}

.hover\:border-purple-400:hover {
  border-color: #b794f4;
}

.hover\:border-purple-500:hover {
  border-color: #9f7aea;
}

.hover\:border-purple-600:hover {
  border-color: #805ad5;
}

.hover\:border-purple-700:hover {
  border-color: #6b46c1;
}

.hover\:border-purple-800:hover {
  border-color: #553c9a;
}

.hover\:border-purple-900:hover {
  border-color: #44337a;
}

.hover\:border-pink-100:hover {
  border-color: #fff5f7;
}

.hover\:border-pink-200:hover {
  border-color: #fed7e2;
}

.hover\:border-pink-300:hover {
  border-color: #fbb6ce;
}

.hover\:border-pink-400:hover {
  border-color: #f687b3;
}

.hover\:border-pink-500:hover {
  border-color: #ed64a6;
}

.hover\:border-pink-600:hover {
  border-color: #d53f8c;
}

.hover\:border-pink-700:hover {
  border-color: #b83280;
}

.hover\:border-pink-800:hover {
  border-color: #97266d;
}

.hover\:border-pink-900:hover {
  border-color: #702459;
}

.focus\:border-grey-darkest:focus {
  border-color: #3d4852;
}

.focus\:border-grey-darker:focus {
  border-color: #606f7b;
}

.focus\:border-grey-dark:focus {
  border-color: #8795a1;
}

.focus\:border-grey:focus {
  border-color: #b8c2cc;
}

.focus\:border-grey-light:focus {
  border-color: #dae1e7;
}

.focus\:border-grey-lighter:focus {
  border-color: #f1f5f8;
}

.focus\:border-grey-lightest:focus {
  border-color: #f8fafc;
}

.focus\:border-grey-mid-light:focus {
  border-color: #f3f3f4;
}

.focus\:border-white-lightest:focus {
  border-color: #f4f4f4;
}

.focus\:border-red-darkest:focus {
  border-color: #3b0d0c;
}

.focus\:border-red-darker:focus {
  border-color: #621b18;
}

.focus\:border-red-dark:focus {
  border-color: #cc1f1a;
}

.focus\:border-red-light:focus {
  border-color: #ef5753;
}

.focus\:border-red-lighter:focus {
  border-color: #f9acaa;
}

.focus\:border-red-lightest:focus {
  border-color: #fcebea;
}

.focus\:border-orange-darkest:focus {
  border-color: #462a16;
}

.focus\:border-orange-darker:focus {
  border-color: #613b1f;
}

.focus\:border-orange-dark:focus {
  border-color: #de751f;
}

.focus\:border-orange-light:focus {
  border-color: #faad63;
}

.focus\:border-orange-lighter:focus {
  border-color: #fcd9b6;
}

.focus\:border-orange-lightest:focus {
  border-color: #fff5eb;
}

.focus\:border-yellow-darkest:focus {
  border-color: #453411;
}

.focus\:border-yellow-darker:focus {
  border-color: #684f1d;
}

.focus\:border-yellow-dark:focus {
  border-color: #f2d024;
}

.focus\:border-yellow-light:focus {
  border-color: #fff382;
}

.focus\:border-yellow-lighter:focus {
  border-color: #fff9c2;
}

.focus\:border-yellow-lightest:focus {
  border-color: #fcfbeb;
}

.focus\:border-green-darkest:focus {
  border-color: #0f2f21;
}

.focus\:border-green-darker:focus {
  border-color: #1a4731;
}

.focus\:border-green-dark:focus {
  border-color: #1f9d55;
}

.focus\:border-green-light:focus {
  border-color: #51d88a;
}

.focus\:border-green-lighter:focus {
  border-color: #a2f5bf;
}

.focus\:border-green-lightest:focus {
  border-color: #e3fcec;
}

.focus\:border-teal-darkest:focus {
  border-color: #0d3331;
}

.focus\:border-teal-darker:focus {
  border-color: #20504f;
}

.focus\:border-teal-dark:focus {
  border-color: #38a89d;
}

.focus\:border-teal-light:focus {
  border-color: #64d5ca;
}

.focus\:border-teal-lighter:focus {
  border-color: #a0f0ed;
}

.focus\:border-teal-lightest:focus {
  border-color: #e8fffe;
}

.focus\:border-blue-darkest:focus {
  border-color: #12283a;
}

.focus\:border-blue-darker:focus {
  border-color: #1c3d5a;
}

.focus\:border-blue-dark:focus {
  border-color: #2779bd;
}

.focus\:border-blue-light:focus {
  border-color: #6cb2eb;
}

.focus\:border-blue-lighter:focus {
  border-color: #bcdefa;
}

.focus\:border-blue-lightest:focus {
  border-color: #eff8ff;
}

.focus\:border-indigo-darkest:focus {
  border-color: #191e38;
}

.focus\:border-indigo-darker:focus {
  border-color: #2f365f;
}

.focus\:border-indigo-dark:focus {
  border-color: #5661b3;
}

.focus\:border-indigo-light:focus {
  border-color: #7886d7;
}

.focus\:border-indigo-lighter:focus {
  border-color: #b2b7ff;
}

.focus\:border-indigo-lightest:focus {
  border-color: #e6e8ff;
}

.focus\:border-purple-darkest:focus {
  border-color: #21183c;
}

.focus\:border-purple-darker:focus {
  border-color: #382b5f;
}

.focus\:border-purple-dark:focus {
  border-color: #794acf;
}

.focus\:border-purple-light:focus {
  border-color: #a779e9;
}

.focus\:border-purple-lighter:focus {
  border-color: #d6bbfc;
}

.focus\:border-purple-lightest:focus {
  border-color: #f3ebff;
}

.focus\:border-pink-darkest:focus {
  border-color: #451225;
}

.focus\:border-pink-darker:focus {
  border-color: #6f213f;
}

.focus\:border-pink-dark:focus {
  border-color: #eb5286;
}

.focus\:border-pink-light:focus {
  border-color: #fa7ea8;
}

.focus\:border-pink-lighter:focus {
  border-color: #ffbbca;
}

.focus\:border-pink-lightest:focus {
  border-color: #ffebef;
}

.focus\:border-nav:focus {
  border-color: #3F495E;
}

.focus\:border-side-nav:focus {
  border-color: #ECF0F1;
}

.focus\:border-nav-item:focus {
  border-color: #626b7a;
}

.focus\:border-light-border:focus {
  border-color: #dfe4e6;
}

.focus\:border-white-medium:focus {
  border-color: #FAFAFA;
}

.focus\:border-white-medium-dark:focus {
  border-color: #E5E9EB;
}

.focus\:border-red-vibrant:focus {
  border-color: #e46050;
}

.focus\:border-red-vibrant-dark:focus {
  border-color: #d64230;
}

.focus\:border-primary:focus {
  border-color: #51BE99;
}

.focus\:border-primary-dark:focus {
  border-color: #0e5f43;
}

.focus\:border-warning:focus {
  border-color: #f4ab43;
}

.focus\:border-warning-dark:focus {
  border-color: #c37c16;
}

.focus\:border-black-dark:focus {
  border-color: #272634;
}

.focus\:border-black-darkest:focus {
  border-color: #141418;
}

.focus\:border-info:focus {
  border-color: #52bcdc;
}

.focus\:border-info-dark:focus {
  border-color: #2cadd4;
}

.focus\:border-success:focus {
  border-color: #72b159;
}

.focus\:border-success-dark:focus {
  border-color: #5D9547;
}

.focus\:border-transparent:focus {
  border-color: transparent;
}

.focus\:border-black:focus {
  border-color: #000;
}

.focus\:border-white:focus {
  border-color: #fff;
}

.focus\:border-gray-100:focus {
  border-color: #f7fafc;
}

.focus\:border-gray-200:focus {
  border-color: #edf2f7;
}

.focus\:border-gray-300:focus {
  border-color: #e2e8f0;
}

.focus\:border-gray-400:focus {
  border-color: #cbd5e0;
}

.focus\:border-gray-500:focus {
  border-color: #a0aec0;
}

.focus\:border-gray-600:focus {
  border-color: #718096;
}

.focus\:border-gray-700:focus {
  border-color: #4a5568;
}

.focus\:border-gray-800:focus {
  border-color: #2d3748;
}

.focus\:border-gray-900:focus {
  border-color: #1a202c;
}

.focus\:border-red-100:focus {
  border-color: #fff5f5;
}

.focus\:border-red-200:focus {
  border-color: #fed7d7;
}

.focus\:border-red-300:focus {
  border-color: #feb2b2;
}

.focus\:border-red-400:focus {
  border-color: #fc8181;
}

.focus\:border-red-500:focus {
  border-color: #f56565;
}

.focus\:border-red-600:focus {
  border-color: #e53e3e;
}

.focus\:border-red-700:focus {
  border-color: #c53030;
}

.focus\:border-red-800:focus {
  border-color: #9b2c2c;
}

.focus\:border-red-900:focus {
  border-color: #742a2a;
}

.focus\:border-orange-100:focus {
  border-color: #fffaf0;
}

.focus\:border-orange-200:focus {
  border-color: #feebc8;
}

.focus\:border-orange-300:focus {
  border-color: #fbd38d;
}

.focus\:border-orange-400:focus {
  border-color: #f6ad55;
}

.focus\:border-orange-500:focus {
  border-color: #ed8936;
}

.focus\:border-orange-600:focus {
  border-color: #dd6b20;
}

.focus\:border-orange-700:focus {
  border-color: #c05621;
}

.focus\:border-orange-800:focus {
  border-color: #9c4221;
}

.focus\:border-orange-900:focus {
  border-color: #7b341e;
}

.focus\:border-yellow-100:focus {
  border-color: #fffff0;
}

.focus\:border-yellow-200:focus {
  border-color: #fefcbf;
}

.focus\:border-yellow-300:focus {
  border-color: #faf089;
}

.focus\:border-yellow-400:focus {
  border-color: #f6e05e;
}

.focus\:border-yellow-500:focus {
  border-color: #ecc94b;
}

.focus\:border-yellow-600:focus {
  border-color: #d69e2e;
}

.focus\:border-yellow-700:focus {
  border-color: #b7791f;
}

.focus\:border-yellow-800:focus {
  border-color: #975a16;
}

.focus\:border-yellow-900:focus {
  border-color: #744210;
}

.focus\:border-green-100:focus {
  border-color: #f0fff4;
}

.focus\:border-green-200:focus {
  border-color: #c6f6d5;
}

.focus\:border-green-300:focus {
  border-color: #9ae6b4;
}

.focus\:border-green-400:focus {
  border-color: #68d391;
}

.focus\:border-green-500:focus {
  border-color: #48bb78;
}

.focus\:border-green-600:focus {
  border-color: #38a169;
}

.focus\:border-green-700:focus {
  border-color: #2f855a;
}

.focus\:border-green-800:focus {
  border-color: #276749;
}

.focus\:border-green-900:focus {
  border-color: #22543d;
}

.focus\:border-teal-100:focus {
  border-color: #e6fffa;
}

.focus\:border-teal-200:focus {
  border-color: #b2f5ea;
}

.focus\:border-teal-300:focus {
  border-color: #81e6d9;
}

.focus\:border-teal-400:focus {
  border-color: #4fd1c5;
}

.focus\:border-teal-500:focus {
  border-color: #38b2ac;
}

.focus\:border-teal-600:focus {
  border-color: #319795;
}

.focus\:border-teal-700:focus {
  border-color: #2c7a7b;
}

.focus\:border-teal-800:focus {
  border-color: #285e61;
}

.focus\:border-teal-900:focus {
  border-color: #234e52;
}

.focus\:border-blue-100:focus {
  border-color: #ebf8ff;
}

.focus\:border-blue-200:focus {
  border-color: #bee3f8;
}

.focus\:border-blue-300:focus {
  border-color: #90cdf4;
}

.focus\:border-blue-400:focus {
  border-color: #63b3ed;
}

.focus\:border-blue-500:focus {
  border-color: #4299e1;
}

.focus\:border-blue-600:focus {
  border-color: #3182ce;
}

.focus\:border-blue-700:focus {
  border-color: #2b6cb0;
}

.focus\:border-blue-800:focus {
  border-color: #2c5282;
}

.focus\:border-blue-900:focus {
  border-color: #2a4365;
}

.focus\:border-indigo-100:focus {
  border-color: #ebf4ff;
}

.focus\:border-indigo-200:focus {
  border-color: #c3dafe;
}

.focus\:border-indigo-300:focus {
  border-color: #a3bffa;
}

.focus\:border-indigo-400:focus {
  border-color: #7f9cf5;
}

.focus\:border-indigo-500:focus {
  border-color: #667eea;
}

.focus\:border-indigo-600:focus {
  border-color: #5a67d8;
}

.focus\:border-indigo-700:focus {
  border-color: #4c51bf;
}

.focus\:border-indigo-800:focus {
  border-color: #434190;
}

.focus\:border-indigo-900:focus {
  border-color: #3c366b;
}

.focus\:border-purple-100:focus {
  border-color: #faf5ff;
}

.focus\:border-purple-200:focus {
  border-color: #e9d8fd;
}

.focus\:border-purple-300:focus {
  border-color: #d6bcfa;
}

.focus\:border-purple-400:focus {
  border-color: #b794f4;
}

.focus\:border-purple-500:focus {
  border-color: #9f7aea;
}

.focus\:border-purple-600:focus {
  border-color: #805ad5;
}

.focus\:border-purple-700:focus {
  border-color: #6b46c1;
}

.focus\:border-purple-800:focus {
  border-color: #553c9a;
}

.focus\:border-purple-900:focus {
  border-color: #44337a;
}

.focus\:border-pink-100:focus {
  border-color: #fff5f7;
}

.focus\:border-pink-200:focus {
  border-color: #fed7e2;
}

.focus\:border-pink-300:focus {
  border-color: #fbb6ce;
}

.focus\:border-pink-400:focus {
  border-color: #f687b3;
}

.focus\:border-pink-500:focus {
  border-color: #ed64a6;
}

.focus\:border-pink-600:focus {
  border-color: #d53f8c;
}

.focus\:border-pink-700:focus {
  border-color: #b83280;
}

.focus\:border-pink-800:focus {
  border-color: #97266d;
}

.focus\:border-pink-900:focus {
  border-color: #702459;
}

.rounded-none {
  border-radius: 0;
}

.rounded-sm {
  border-radius: 0.125rem;
}

.rounded {
  border-radius: 0.25rem;
}

.rounded-lg {
  border-radius: 0.5rem;
}

.rounded-full {
  border-radius: 9999px;
}

.rounded-t-none {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.rounded-r-none {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.rounded-b-none {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.rounded-l-none {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.rounded-t-sm {
  border-top-left-radius: 0.125rem;
  border-top-right-radius: 0.125rem;
}

.rounded-r-sm {
  border-top-right-radius: 0.125rem;
  border-bottom-right-radius: 0.125rem;
}

.rounded-b-sm {
  border-bottom-right-radius: 0.125rem;
  border-bottom-left-radius: 0.125rem;
}

.rounded-l-sm {
  border-top-left-radius: 0.125rem;
  border-bottom-left-radius: 0.125rem;
}

.rounded-t {
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
}

.rounded-r {
  border-top-right-radius: 0.25rem;
  border-bottom-right-radius: 0.25rem;
}

.rounded-b {
  border-bottom-right-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}

.rounded-l {
  border-top-left-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}

.rounded-t-lg {
  border-top-left-radius: 0.5rem;
  border-top-right-radius: 0.5rem;
}

.rounded-r-lg {
  border-top-right-radius: 0.5rem;
  border-bottom-right-radius: 0.5rem;
}

.rounded-b-lg {
  border-bottom-right-radius: 0.5rem;
  border-bottom-left-radius: 0.5rem;
}

.rounded-l-lg {
  border-top-left-radius: 0.5rem;
  border-bottom-left-radius: 0.5rem;
}

.rounded-t-full {
  border-top-left-radius: 9999px;
  border-top-right-radius: 9999px;
}

.rounded-r-full {
  border-top-right-radius: 9999px;
  border-bottom-right-radius: 9999px;
}

.rounded-b-full {
  border-bottom-right-radius: 9999px;
  border-bottom-left-radius: 9999px;
}

.rounded-l-full {
  border-top-left-radius: 9999px;
  border-bottom-left-radius: 9999px;
}

.rounded-tl-none {
  border-top-left-radius: 0;
}

.rounded-tr-none {
  border-top-right-radius: 0;
}

.rounded-br-none {
  border-bottom-right-radius: 0;
}

.rounded-bl-none {
  border-bottom-left-radius: 0;
}

.rounded-tl-sm {
  border-top-left-radius: 0.125rem;
}

.rounded-tr-sm {
  border-top-right-radius: 0.125rem;
}

.rounded-br-sm {
  border-bottom-right-radius: 0.125rem;
}

.rounded-bl-sm {
  border-bottom-left-radius: 0.125rem;
}

.rounded-tl {
  border-top-left-radius: 0.25rem;
}

.rounded-tr {
  border-top-right-radius: 0.25rem;
}

.rounded-br {
  border-bottom-right-radius: 0.25rem;
}

.rounded-bl {
  border-bottom-left-radius: 0.25rem;
}

.rounded-tl-lg {
  border-top-left-radius: 0.5rem;
}

.rounded-tr-lg {
  border-top-right-radius: 0.5rem;
}

.rounded-br-lg {
  border-bottom-right-radius: 0.5rem;
}

.rounded-bl-lg {
  border-bottom-left-radius: 0.5rem;
}

.rounded-tl-full {
  border-top-left-radius: 9999px;
}

.rounded-tr-full {
  border-top-right-radius: 9999px;
}

.rounded-br-full {
  border-bottom-right-radius: 9999px;
}

.rounded-bl-full {
  border-bottom-left-radius: 9999px;
}

.border-solid {
  border-style: solid;
}

.border-dashed {
  border-style: dashed;
}

.border-dotted {
  border-style: dotted;
}

.border-double {
  border-style: double;
}

.border-none {
  border-style: none;
}

.border-0 {
  border-width: 0;
}

.border-2 {
  border-width: 2px;
}

.border-4 {
  border-width: 4px;
}

.border-8 {
  border-width: 8px;
}

.border {
  border-width: 1px;
}

.border-t-0 {
  border-top-width: 0;
}

.border-r-0 {
  border-right-width: 0;
}

.border-b-0 {
  border-bottom-width: 0;
}

.border-l-0 {
  border-left-width: 0;
}

.border-t-2 {
  border-top-width: 2px;
}

.border-r-2 {
  border-right-width: 2px;
}

.border-b-2 {
  border-bottom-width: 2px;
}

.border-l-2 {
  border-left-width: 2px;
}

.border-t-4 {
  border-top-width: 4px;
}

.border-r-4 {
  border-right-width: 4px;
}

.border-b-4 {
  border-bottom-width: 4px;
}

.border-l-4 {
  border-left-width: 4px;
}

.border-t-8 {
  border-top-width: 8px;
}

.border-r-8 {
  border-right-width: 8px;
}

.border-b-8 {
  border-bottom-width: 8px;
}

.border-l-8 {
  border-left-width: 8px;
}

.border-t {
  border-top-width: 1px;
}

.border-r {
  border-right-width: 1px;
}

.border-b {
  border-bottom-width: 1px;
}

.border-l {
  border-left-width: 1px;
}

.cursor-auto {
  cursor: auto;
}

.cursor-default {
  cursor: default;
}

.cursor-pointer {
  cursor: pointer;
}

.cursor-wait {
  cursor: wait;
}

.cursor-text {
  cursor: text;
}

.cursor-move {
  cursor: move;
}

.cursor-not-allowed {
  cursor: not-allowed;
}

.block {
  display: block;
}

.inline-block {
  display: inline-block;
}

.inline {
  display: inline;
}

.flex {
  display: flex;
}

.inline-flex {
  display: inline-flex;
}

.table {
  display: table;
}

.table-row {
  display: table-row;
}

.table-cell {
  display: table-cell;
}

.hidden {
  display: none;
}

.flex-row {
  flex-direction: row;
}

.flex-row-reverse {
  flex-direction: row-reverse;
}

.flex-col {
  flex-direction: column;
}

.flex-col-reverse {
  flex-direction: column-reverse;
}

.flex-wrap {
  flex-wrap: wrap;
}

.flex-wrap-reverse {
  flex-wrap: wrap-reverse;
}

.flex-no-wrap {
  flex-wrap: nowrap;
}

.items-start {
  align-items: flex-start;
}

.items-end {
  align-items: flex-end;
}

.items-center {
  align-items: center;
}

.items-baseline {
  align-items: baseline;
}

.items-stretch {
  align-items: stretch;
}

.self-auto {
  align-self: auto;
}

.self-start {
  align-self: flex-start;
}

.self-end {
  align-self: flex-end;
}

.self-center {
  align-self: center;
}

.self-stretch {
  align-self: stretch;
}

.justify-start {
  justify-content: flex-start;
}

.justify-end {
  justify-content: flex-end;
}

.justify-center {
  justify-content: center;
}

.justify-between {
  justify-content: space-between;
}

.justify-around {
  justify-content: space-around;
}

.content-center {
  align-content: center;
}

.content-start {
  align-content: flex-start;
}

.content-end {
  align-content: flex-end;
}

.content-between {
  align-content: space-between;
}

.content-around {
  align-content: space-around;
}

.flex-1 {
  flex: 1 1 0%;
}

.flex-auto {
  flex: 1 1 auto;
}

.flex-initial {
  flex: 0 1 auto;
}

.flex-none {
  flex: none;
}

.flex-grow-0 {
  flex-grow: 0;
}

.flex-grow {
  flex-grow: 1;
}

.flex-shrink-0 {
  flex-shrink: 0;
}

.flex-shrink {
  flex-shrink: 1;
}

.order-1 {
  order: 1;
}

.order-2 {
  order: 2;
}

.order-3 {
  order: 3;
}

.order-4 {
  order: 4;
}

.order-5 {
  order: 5;
}

.order-6 {
  order: 6;
}

.order-7 {
  order: 7;
}

.order-8 {
  order: 8;
}

.order-9 {
  order: 9;
}

.order-10 {
  order: 10;
}

.order-11 {
  order: 11;
}

.order-12 {
  order: 12;
}

.order-first {
  order: -9999;
}

.order-last {
  order: 9999;
}

.order-none {
  order: 0;
}

.float-right {
  float: right;
}

.float-left {
  float: left;
}

.float-none {
  float: none;
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

.font-sans {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}

.font-serif {
  font-family: Georgia, Cambria, "Times New Roman", Times, serif;
}

.font-mono {
  font-family: Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
}

.font-hairline {
  font-weight: 100;
}

.font-thin {
  font-weight: 200;
}

.font-light {
  font-weight: 300;
}

.font-normal {
  font-weight: 400;
}

.font-medium {
  font-weight: 500;
}

.font-semibold {
  font-weight: 600;
}

.font-bold {
  font-weight: 700;
}

.font-extrabold {
  font-weight: 800;
}

.font-black {
  font-weight: 900;
}

.hover\:font-hairline:hover {
  font-weight: 100;
}

.hover\:font-thin:hover {
  font-weight: 200;
}

.hover\:font-light:hover {
  font-weight: 300;
}

.hover\:font-normal:hover {
  font-weight: 400;
}

.hover\:font-medium:hover {
  font-weight: 500;
}

.hover\:font-semibold:hover {
  font-weight: 600;
}

.hover\:font-bold:hover {
  font-weight: 700;
}

.hover\:font-extrabold:hover {
  font-weight: 800;
}

.hover\:font-black:hover {
  font-weight: 900;
}

.focus\:font-hairline:focus {
  font-weight: 100;
}

.focus\:font-thin:focus {
  font-weight: 200;
}

.focus\:font-light:focus {
  font-weight: 300;
}

.focus\:font-normal:focus {
  font-weight: 400;
}

.focus\:font-medium:focus {
  font-weight: 500;
}

.focus\:font-semibold:focus {
  font-weight: 600;
}

.focus\:font-bold:focus {
  font-weight: 700;
}

.focus\:font-extrabold:focus {
  font-weight: 800;
}

.focus\:font-black:focus {
  font-weight: 900;
}

.h-0 {
  height: 0;
}

.h-1 {
  height: 0.25rem;
}

.h-2 {
  height: 0.5rem;
}

.h-3 {
  height: 0.75rem;
}

.h-4 {
  height: 1rem;
}

.h-5 {
  height: 1.25rem;
}

.h-6 {
  height: 1.5rem;
}

.h-8 {
  height: 2rem;
}

.h-10 {
  height: 2.5rem;
}

.h-12 {
  height: 3rem;
}

.h-16 {
  height: 4rem;
}

.h-20 {
  height: 5rem;
}

.h-24 {
  height: 6rem;
}

.h-32 {
  height: 8rem;
}

.h-40 {
  height: 10rem;
}

.h-48 {
  height: 12rem;
}

.h-56 {
  height: 14rem;
}

.h-64 {
  height: 16rem;
}

.h-auto {
  height: auto;
}

.h-px {
  height: 1px;
}

.h-full {
  height: 100%;
}

.h-screen {
  height: 100vh;
}

.leading-none {
  line-height: 1;
}

.leading-tight {
  line-height: 1.25;
}

.leading-snug {
  line-height: 1.375;
}

.leading-normal {
  line-height: 1.5;
}

.leading-relaxed {
  line-height: 1.625;
}

.leading-loose {
  line-height: 2;
}

.list-inside {
  list-style-position: inside;
}

.list-outside {
  list-style-position: outside;
}

.list-none {
  list-style-type: none;
}

.list-disc {
  list-style-type: disc;
}

.list-decimal {
  list-style-type: decimal;
}

.m-0 {
  margin: 0;
}

.m-1 {
  margin: 0.25rem;
}

.m-2 {
  margin: 0.5rem;
}

.m-3 {
  margin: 0.75rem;
}

.m-4 {
  margin: 1rem;
}

.m-5 {
  margin: 1.25rem;
}

.m-6 {
  margin: 1.5rem;
}

.m-8 {
  margin: 2rem;
}

.m-10 {
  margin: 2.5rem;
}

.m-12 {
  margin: 3rem;
}

.m-16 {
  margin: 4rem;
}

.m-20 {
  margin: 5rem;
}

.m-24 {
  margin: 6rem;
}

.m-32 {
  margin: 8rem;
}

.m-auto {
  margin: auto;
}

.m-px {
  margin: 1px;
}

.-m-px {
  margin: -1px;
}

.-m-1 {
  margin: -0.25rem;
}

.-m-2 {
  margin: -0.5rem;
}

.-m-3 {
  margin: -0.75rem;
}

.-m-4 {
  margin: -1rem;
}

.-m-5 {
  margin: -1.25rem;
}

.-m-6 {
  margin: -1.5rem;
}

.-m-8 {
  margin: -2rem;
}

.-m-10 {
  margin: -2.5rem;
}

.-m-12 {
  margin: -3rem;
}

.-m-16 {
  margin: -4rem;
}

.-m-20 {
  margin: -5rem;
}

.-m-24 {
  margin: -6rem;
}

.-m-32 {
  margin: -8rem;
}

.my-0 {
  margin-top: 0;
  margin-bottom: 0;
}

.mx-0 {
  margin-left: 0;
  margin-right: 0;
}

.my-1 {
  margin-top: 0.25rem;
  margin-bottom: 0.25rem;
}

.mx-1 {
  margin-left: 0.25rem;
  margin-right: 0.25rem;
}

.my-2 {
  margin-top: 0.5rem;
  margin-bottom: 0.5rem;
}

.mx-2 {
  margin-left: 0.5rem;
  margin-right: 0.5rem;
}

.my-3 {
  margin-top: 0.75rem;
  margin-bottom: 0.75rem;
}

.mx-3 {
  margin-left: 0.75rem;
  margin-right: 0.75rem;
}

.my-4 {
  margin-top: 1rem;
  margin-bottom: 1rem;
}

.mx-4 {
  margin-left: 1rem;
  margin-right: 1rem;
}

.my-5 {
  margin-top: 1.25rem;
  margin-bottom: 1.25rem;
}

.mx-5 {
  margin-left: 1.25rem;
  margin-right: 1.25rem;
}

.my-6 {
  margin-top: 1.5rem;
  margin-bottom: 1.5rem;
}

.mx-6 {
  margin-left: 1.5rem;
  margin-right: 1.5rem;
}

.my-8 {
  margin-top: 2rem;
  margin-bottom: 2rem;
}

.mx-8 {
  margin-left: 2rem;
  margin-right: 2rem;
}

.my-10 {
  margin-top: 2.5rem;
  margin-bottom: 2.5rem;
}

.mx-10 {
  margin-left: 2.5rem;
  margin-right: 2.5rem;
}

.my-12 {
  margin-top: 3rem;
  margin-bottom: 3rem;
}

.mx-12 {
  margin-left: 3rem;
  margin-right: 3rem;
}

.my-16 {
  margin-top: 4rem;
  margin-bottom: 4rem;
}

.mx-16 {
  margin-left: 4rem;
  margin-right: 4rem;
}

.my-20 {
  margin-top: 5rem;
  margin-bottom: 5rem;
}

.mx-20 {
  margin-left: 5rem;
  margin-right: 5rem;
}

.my-24 {
  margin-top: 6rem;
  margin-bottom: 6rem;
}

.mx-24 {
  margin-left: 6rem;
  margin-right: 6rem;
}

.my-32 {
  margin-top: 8rem;
  margin-bottom: 8rem;
}

.mx-32 {
  margin-left: 8rem;
  margin-right: 8rem;
}

.my-auto {
  margin-top: auto;
  margin-bottom: auto;
}

.mx-auto {
  margin-left: auto;
  margin-right: auto;
}

.my-px {
  margin-top: 1px;
  margin-bottom: 1px;
}

.mx-px {
  margin-left: 1px;
  margin-right: 1px;
}

.-my-px {
  margin-top: -1px;
  margin-bottom: -1px;
}

.-mx-px {
  margin-left: -1px;
  margin-right: -1px;
}

.-my-1 {
  margin-top: -0.25rem;
  margin-bottom: -0.25rem;
}

.-mx-1 {
  margin-left: -0.25rem;
  margin-right: -0.25rem;
}

.-my-2 {
  margin-top: -0.5rem;
  margin-bottom: -0.5rem;
}

.-mx-2 {
  margin-left: -0.5rem;
  margin-right: -0.5rem;
}

.-my-3 {
  margin-top: -0.75rem;
  margin-bottom: -0.75rem;
}

.-mx-3 {
  margin-left: -0.75rem;
  margin-right: -0.75rem;
}

.-my-4 {
  margin-top: -1rem;
  margin-bottom: -1rem;
}

.-mx-4 {
  margin-left: -1rem;
  margin-right: -1rem;
}

.-my-5 {
  margin-top: -1.25rem;
  margin-bottom: -1.25rem;
}

.-mx-5 {
  margin-left: -1.25rem;
  margin-right: -1.25rem;
}

.-my-6 {
  margin-top: -1.5rem;
  margin-bottom: -1.5rem;
}

.-mx-6 {
  margin-left: -1.5rem;
  margin-right: -1.5rem;
}

.-my-8 {
  margin-top: -2rem;
  margin-bottom: -2rem;
}

.-mx-8 {
  margin-left: -2rem;
  margin-right: -2rem;
}

.-my-10 {
  margin-top: -2.5rem;
  margin-bottom: -2.5rem;
}

.-mx-10 {
  margin-left: -2.5rem;
  margin-right: -2.5rem;
}

.-my-12 {
  margin-top: -3rem;
  margin-bottom: -3rem;
}

.-mx-12 {
  margin-left: -3rem;
  margin-right: -3rem;
}

.-my-16 {
  margin-top: -4rem;
  margin-bottom: -4rem;
}

.-mx-16 {
  margin-left: -4rem;
  margin-right: -4rem;
}

.-my-20 {
  margin-top: -5rem;
  margin-bottom: -5rem;
}

.-mx-20 {
  margin-left: -5rem;
  margin-right: -5rem;
}

.-my-24 {
  margin-top: -6rem;
  margin-bottom: -6rem;
}

.-mx-24 {
  margin-left: -6rem;
  margin-right: -6rem;
}

.-my-32 {
  margin-top: -8rem;
  margin-bottom: -8rem;
}

.-mx-32 {
  margin-left: -8rem;
  margin-right: -8rem;
}

.mt-0 {
  margin-top: 0;
}

.mr-0 {
  margin-right: 0;
}

.mb-0 {
  margin-bottom: 0;
}

.ml-0 {
  margin-left: 0;
}

.mt-1 {
  margin-top: 0.25rem;
}

.mr-1 {
  margin-right: 0.25rem;
}

.mb-1 {
  margin-bottom: 0.25rem;
}

.ml-1 {
  margin-left: 0.25rem;
}

.mt-2 {
  margin-top: 0.5rem;
}

.mr-2 {
  margin-right: 0.5rem;
}

.mb-2 {
  margin-bottom: 0.5rem;
}

.ml-2 {
  margin-left: 0.5rem;
}

.mt-3 {
  margin-top: 0.75rem;
}

.mr-3 {
  margin-right: 0.75rem;
}

.mb-3 {
  margin-bottom: 0.75rem;
}

.ml-3 {
  margin-left: 0.75rem;
}

.mt-4 {
  margin-top: 1rem;
}

.mr-4 {
  margin-right: 1rem;
}

.mb-4 {
  margin-bottom: 1rem;
}

.ml-4 {
  margin-left: 1rem;
}

.mt-5 {
  margin-top: 1.25rem;
}

.mr-5 {
  margin-right: 1.25rem;
}

.mb-5 {
  margin-bottom: 1.25rem;
}

.ml-5 {
  margin-left: 1.25rem;
}

.mt-6 {
  margin-top: 1.5rem;
}

.mr-6 {
  margin-right: 1.5rem;
}

.mb-6 {
  margin-bottom: 1.5rem;
}

.ml-6 {
  margin-left: 1.5rem;
}

.mt-8 {
  margin-top: 2rem;
}

.mr-8 {
  margin-right: 2rem;
}

.mb-8 {
  margin-bottom: 2rem;
}

.ml-8 {
  margin-left: 2rem;
}

.mt-10 {
  margin-top: 2.5rem;
}

.mr-10 {
  margin-right: 2.5rem;
}

.mb-10 {
  margin-bottom: 2.5rem;
}

.ml-10 {
  margin-left: 2.5rem;
}

.mt-12 {
  margin-top: 3rem;
}

.mr-12 {
  margin-right: 3rem;
}

.mb-12 {
  margin-bottom: 3rem;
}

.ml-12 {
  margin-left: 3rem;
}

.mt-16 {
  margin-top: 4rem;
}

.mr-16 {
  margin-right: 4rem;
}

.mb-16 {
  margin-bottom: 4rem;
}

.ml-16 {
  margin-left: 4rem;
}

.mt-20 {
  margin-top: 5rem;
}

.mr-20 {
  margin-right: 5rem;
}

.mb-20 {
  margin-bottom: 5rem;
}

.ml-20 {
  margin-left: 5rem;
}

.mt-24 {
  margin-top: 6rem;
}

.mr-24 {
  margin-right: 6rem;
}

.mb-24 {
  margin-bottom: 6rem;
}

.ml-24 {
  margin-left: 6rem;
}

.mt-32 {
  margin-top: 8rem;
}

.mr-32 {
  margin-right: 8rem;
}

.mb-32 {
  margin-bottom: 8rem;
}

.ml-32 {
  margin-left: 8rem;
}

.mt-auto {
  margin-top: auto;
}

.mr-auto {
  margin-right: auto;
}

.mb-auto {
  margin-bottom: auto;
}

.ml-auto {
  margin-left: auto;
}

.mt-px {
  margin-top: 1px;
}

.mr-px {
  margin-right: 1px;
}

.mb-px {
  margin-bottom: 1px;
}

.ml-px {
  margin-left: 1px;
}

.-mt-px {
  margin-top: -1px;
}

.-mr-px {
  margin-right: -1px;
}

.-mb-px {
  margin-bottom: -1px;
}

.-ml-px {
  margin-left: -1px;
}

.-mt-1 {
  margin-top: -0.25rem;
}

.-mr-1 {
  margin-right: -0.25rem;
}

.-mb-1 {
  margin-bottom: -0.25rem;
}

.-ml-1 {
  margin-left: -0.25rem;
}

.-mt-2 {
  margin-top: -0.5rem;
}

.-mr-2 {
  margin-right: -0.5rem;
}

.-mb-2 {
  margin-bottom: -0.5rem;
}

.-ml-2 {
  margin-left: -0.5rem;
}

.-mt-3 {
  margin-top: -0.75rem;
}

.-mr-3 {
  margin-right: -0.75rem;
}

.-mb-3 {
  margin-bottom: -0.75rem;
}

.-ml-3 {
  margin-left: -0.75rem;
}

.-mt-4 {
  margin-top: -1rem;
}

.-mr-4 {
  margin-right: -1rem;
}

.-mb-4 {
  margin-bottom: -1rem;
}

.-ml-4 {
  margin-left: -1rem;
}

.-mt-5 {
  margin-top: -1.25rem;
}

.-mr-5 {
  margin-right: -1.25rem;
}

.-mb-5 {
  margin-bottom: -1.25rem;
}

.-ml-5 {
  margin-left: -1.25rem;
}

.-mt-6 {
  margin-top: -1.5rem;
}

.-mr-6 {
  margin-right: -1.5rem;
}

.-mb-6 {
  margin-bottom: -1.5rem;
}

.-ml-6 {
  margin-left: -1.5rem;
}

.-mt-8 {
  margin-top: -2rem;
}

.-mr-8 {
  margin-right: -2rem;
}

.-mb-8 {
  margin-bottom: -2rem;
}

.-ml-8 {
  margin-left: -2rem;
}

.-mt-10 {
  margin-top: -2.5rem;
}

.-mr-10 {
  margin-right: -2.5rem;
}

.-mb-10 {
  margin-bottom: -2.5rem;
}

.-ml-10 {
  margin-left: -2.5rem;
}

.-mt-12 {
  margin-top: -3rem;
}

.-mr-12 {
  margin-right: -3rem;
}

.-mb-12 {
  margin-bottom: -3rem;
}

.-ml-12 {
  margin-left: -3rem;
}

.-mt-16 {
  margin-top: -4rem;
}

.-mr-16 {
  margin-right: -4rem;
}

.-mb-16 {
  margin-bottom: -4rem;
}

.-ml-16 {
  margin-left: -4rem;
}

.-mt-20 {
  margin-top: -5rem;
}

.-mr-20 {
  margin-right: -5rem;
}

.-mb-20 {
  margin-bottom: -5rem;
}

.-ml-20 {
  margin-left: -5rem;
}

.-mt-24 {
  margin-top: -6rem;
}

.-mr-24 {
  margin-right: -6rem;
}

.-mb-24 {
  margin-bottom: -6rem;
}

.-ml-24 {
  margin-left: -6rem;
}

.-mt-32 {
  margin-top: -8rem;
}

.-mr-32 {
  margin-right: -8rem;
}

.-mb-32 {
  margin-bottom: -8rem;
}

.-ml-32 {
  margin-left: -8rem;
}

.max-h-full {
  max-height: 100%;
}

.max-h-screen {
  max-height: 100vh;
}

.max-w-xs {
  max-width: 20rem;
}

.max-w-sm {
  max-width: 24rem;
}

.max-w-md {
  max-width: 28rem;
}

.max-w-lg {
  max-width: 32rem;
}

.max-w-xl {
  max-width: 36rem;
}

.max-w-2xl {
  max-width: 42rem;
}

.max-w-3xl {
  max-width: 48rem;
}

.max-w-4xl {
  max-width: 56rem;
}

.max-w-5xl {
  max-width: 64rem;
}

.max-w-6xl {
  max-width: 72rem;
}

.max-w-full {
  max-width: 100%;
}

.min-h-0 {
  min-height: 0;
}

.min-h-full {
  min-height: 100%;
}

.min-h-screen {
  min-height: 100vh;
}

.min-w-0 {
  min-width: 0;
}

.min-w-full {
  min-width: 100%;
}

.object-contain {
  object-fit: contain;
}

.object-cover {
  object-fit: cover;
}

.object-fill {
  object-fit: fill;
}

.object-none {
  object-fit: none;
}

.object-scale-down {
  object-fit: scale-down;
}

.object-bottom {
  object-position: bottom;
}

.object-center {
  object-position: center;
}

.object-left {
  object-position: left;
}

.object-left-bottom {
  object-position: left bottom;
}

.object-left-top {
  object-position: left top;
}

.object-right {
  object-position: right;
}

.object-right-bottom {
  object-position: right bottom;
}

.object-right-top {
  object-position: right top;
}

.object-top {
  object-position: top;
}

.opacity-0 {
  opacity: 0;
}

.opacity-25 {
  opacity: 0.25;
}

.opacity-50 {
  opacity: 0.5;
}

.opacity-75 {
  opacity: 0.75;
}

.opacity-100 {
  opacity: 1;
}

.hover\:opacity-0:hover {
  opacity: 0;
}

.hover\:opacity-25:hover {
  opacity: 0.25;
}

.hover\:opacity-50:hover {
  opacity: 0.5;
}

.hover\:opacity-75:hover {
  opacity: 0.75;
}

.hover\:opacity-100:hover {
  opacity: 1;
}

.focus\:opacity-0:focus {
  opacity: 0;
}

.focus\:opacity-25:focus {
  opacity: 0.25;
}

.focus\:opacity-50:focus {
  opacity: 0.5;
}

.focus\:opacity-75:focus {
  opacity: 0.75;
}

.focus\:opacity-100:focus {
  opacity: 1;
}

.outline-none {
  outline: 0;
}

.focus\:outline-none:focus {
  outline: 0;
}

.overflow-auto {
  overflow: auto;
}

.overflow-hidden {
  overflow: hidden;
}

.overflow-visible {
  overflow: visible;
}

.overflow-scroll {
  overflow: scroll;
}

.overflow-x-auto {
  overflow-x: auto;
}

.overflow-y-auto {
  overflow-y: auto;
}

.overflow-x-hidden {
  overflow-x: hidden;
}

.overflow-y-hidden {
  overflow-y: hidden;
}

.overflow-x-visible {
  overflow-x: visible;
}

.overflow-y-visible {
  overflow-y: visible;
}

.overflow-x-scroll {
  overflow-x: scroll;
}

.overflow-y-scroll {
  overflow-y: scroll;
}

.scrolling-touch {
  -webkit-overflow-scrolling: touch;
}

.scrolling-auto {
  -webkit-overflow-scrolling: auto;
}

.p-0 {
  padding: 0;
}

.p-1 {
  padding: 0.25rem;
}

.p-2 {
  padding: 0.5rem;
}

.p-3 {
  padding: 0.75rem;
}

.p-4 {
  padding: 1rem;
}

.p-5 {
  padding: 1.25rem;
}

.p-6 {
  padding: 1.5rem;
}

.p-8 {
  padding: 2rem;
}

.p-10 {
  padding: 2.5rem;
}

.p-12 {
  padding: 3rem;
}

.p-16 {
  padding: 4rem;
}

.p-20 {
  padding: 5rem;
}

.p-24 {
  padding: 6rem;
}

.p-32 {
  padding: 8rem;
}

.p-40 {
  padding: 10rem;
}

.p-48 {
  padding: 12rem;
}

.p-56 {
  padding: 14rem;
}

.p-64 {
  padding: 16rem;
}

.p-px {
  padding: 1px;
}

.py-0 {
  padding-top: 0;
  padding-bottom: 0;
}

.px-0 {
  padding-left: 0;
  padding-right: 0;
}

.py-1 {
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
}

.px-1 {
  padding-left: 0.25rem;
  padding-right: 0.25rem;
}

.py-2 {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}

.px-2 {
  padding-left: 0.5rem;
  padding-right: 0.5rem;
}

.py-3 {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
}

.px-3 {
  padding-left: 0.75rem;
  padding-right: 0.75rem;
}

.py-4 {
  padding-top: 1rem;
  padding-bottom: 1rem;
}

.px-4 {
  padding-left: 1rem;
  padding-right: 1rem;
}

.py-5 {
  padding-top: 1.25rem;
  padding-bottom: 1.25rem;
}

.px-5 {
  padding-left: 1.25rem;
  padding-right: 1.25rem;
}

.py-6 {
  padding-top: 1.5rem;
  padding-bottom: 1.5rem;
}

.px-6 {
  padding-left: 1.5rem;
  padding-right: 1.5rem;
}

.py-8 {
  padding-top: 2rem;
  padding-bottom: 2rem;
}

.px-8 {
  padding-left: 2rem;
  padding-right: 2rem;
}

.py-10 {
  padding-top: 2.5rem;
  padding-bottom: 2.5rem;
}

.px-10 {
  padding-left: 2.5rem;
  padding-right: 2.5rem;
}

.py-12 {
  padding-top: 3rem;
  padding-bottom: 3rem;
}

.px-12 {
  padding-left: 3rem;
  padding-right: 3rem;
}

.py-16 {
  padding-top: 4rem;
  padding-bottom: 4rem;
}

.px-16 {
  padding-left: 4rem;
  padding-right: 4rem;
}

.py-20 {
  padding-top: 5rem;
  padding-bottom: 5rem;
}

.px-20 {
  padding-left: 5rem;
  padding-right: 5rem;
}

.py-24 {
  padding-top: 6rem;
  padding-bottom: 6rem;
}

.px-24 {
  padding-left: 6rem;
  padding-right: 6rem;
}

.py-32 {
  padding-top: 8rem;
  padding-bottom: 8rem;
}

.px-32 {
  padding-left: 8rem;
  padding-right: 8rem;
}

.py-40 {
  padding-top: 10rem;
  padding-bottom: 10rem;
}

.px-40 {
  padding-left: 10rem;
  padding-right: 10rem;
}

.py-48 {
  padding-top: 12rem;
  padding-bottom: 12rem;
}

.px-48 {
  padding-left: 12rem;
  padding-right: 12rem;
}

.py-56 {
  padding-top: 14rem;
  padding-bottom: 14rem;
}

.px-56 {
  padding-left: 14rem;
  padding-right: 14rem;
}

.py-64 {
  padding-top: 16rem;
  padding-bottom: 16rem;
}

.px-64 {
  padding-left: 16rem;
  padding-right: 16rem;
}

.py-px {
  padding-top: 1px;
  padding-bottom: 1px;
}

.px-px {
  padding-left: 1px;
  padding-right: 1px;
}

.pt-0 {
  padding-top: 0;
}

.pr-0 {
  padding-right: 0;
}

.pb-0 {
  padding-bottom: 0;
}

.pl-0 {
  padding-left: 0;
}

.pt-1 {
  padding-top: 0.25rem;
}

.pr-1 {
  padding-right: 0.25rem;
}

.pb-1 {
  padding-bottom: 0.25rem;
}

.pl-1 {
  padding-left: 0.25rem;
}

.pt-2 {
  padding-top: 0.5rem;
}

.pr-2 {
  padding-right: 0.5rem;
}

.pb-2 {
  padding-bottom: 0.5rem;
}

.pl-2 {
  padding-left: 0.5rem;
}

.pt-3 {
  padding-top: 0.75rem;
}

.pr-3 {
  padding-right: 0.75rem;
}

.pb-3 {
  padding-bottom: 0.75rem;
}

.pl-3 {
  padding-left: 0.75rem;
}

.pt-4 {
  padding-top: 1rem;
}

.pr-4 {
  padding-right: 1rem;
}

.pb-4 {
  padding-bottom: 1rem;
}

.pl-4 {
  padding-left: 1rem;
}

.pt-5 {
  padding-top: 1.25rem;
}

.pr-5 {
  padding-right: 1.25rem;
}

.pb-5 {
  padding-bottom: 1.25rem;
}

.pl-5 {
  padding-left: 1.25rem;
}

.pt-6 {
  padding-top: 1.5rem;
}

.pr-6 {
  padding-right: 1.5rem;
}

.pb-6 {
  padding-bottom: 1.5rem;
}

.pl-6 {
  padding-left: 1.5rem;
}

.pt-8 {
  padding-top: 2rem;
}

.pr-8 {
  padding-right: 2rem;
}

.pb-8 {
  padding-bottom: 2rem;
}

.pl-8 {
  padding-left: 2rem;
}

.pt-10 {
  padding-top: 2.5rem;
}

.pr-10 {
  padding-right: 2.5rem;
}

.pb-10 {
  padding-bottom: 2.5rem;
}

.pl-10 {
  padding-left: 2.5rem;
}

.pt-12 {
  padding-top: 3rem;
}

.pr-12 {
  padding-right: 3rem;
}

.pb-12 {
  padding-bottom: 3rem;
}

.pl-12 {
  padding-left: 3rem;
}

.pt-16 {
  padding-top: 4rem;
}

.pr-16 {
  padding-right: 4rem;
}

.pb-16 {
  padding-bottom: 4rem;
}

.pl-16 {
  padding-left: 4rem;
}

.pt-20 {
  padding-top: 5rem;
}

.pr-20 {
  padding-right: 5rem;
}

.pb-20 {
  padding-bottom: 5rem;
}

.pl-20 {
  padding-left: 5rem;
}

.pt-24 {
  padding-top: 6rem;
}

.pr-24 {
  padding-right: 6rem;
}

.pb-24 {
  padding-bottom: 6rem;
}

.pl-24 {
  padding-left: 6rem;
}

.pt-32 {
  padding-top: 8rem;
}

.pr-32 {
  padding-right: 8rem;
}

.pb-32 {
  padding-bottom: 8rem;
}

.pl-32 {
  padding-left: 8rem;
}

.pt-40 {
  padding-top: 10rem;
}

.pr-40 {
  padding-right: 10rem;
}

.pb-40 {
  padding-bottom: 10rem;
}

.pl-40 {
  padding-left: 10rem;
}

.pt-48 {
  padding-top: 12rem;
}

.pr-48 {
  padding-right: 12rem;
}

.pb-48 {
  padding-bottom: 12rem;
}

.pl-48 {
  padding-left: 12rem;
}

.pt-56 {
  padding-top: 14rem;
}

.pr-56 {
  padding-right: 14rem;
}

.pb-56 {
  padding-bottom: 14rem;
}

.pl-56 {
  padding-left: 14rem;
}

.pt-64 {
  padding-top: 16rem;
}

.pr-64 {
  padding-right: 16rem;
}

.pb-64 {
  padding-bottom: 16rem;
}

.pl-64 {
  padding-left: 16rem;
}

.pt-px {
  padding-top: 1px;
}

.pr-px {
  padding-right: 1px;
}

.pb-px {
  padding-bottom: 1px;
}

.pl-px {
  padding-left: 1px;
}

.placeholder-grey-darkest::placeholder {
  color: #3d4852;
}

.placeholder-grey-darker::placeholder {
  color: #606f7b;
}

.placeholder-grey-dark::placeholder {
  color: #8795a1;
}

.placeholder-grey::placeholder {
  color: #b8c2cc;
}

.placeholder-grey-light::placeholder {
  color: #dae1e7;
}

.placeholder-grey-lighter::placeholder {
  color: #f1f5f8;
}

.placeholder-grey-lightest::placeholder {
  color: #f8fafc;
}

.placeholder-grey-mid-light::placeholder {
  color: #f3f3f4;
}

.placeholder-white-lightest::placeholder {
  color: #f4f4f4;
}

.placeholder-red-darkest::placeholder {
  color: #3b0d0c;
}

.placeholder-red-darker::placeholder {
  color: #621b18;
}

.placeholder-red-dark::placeholder {
  color: #cc1f1a;
}

.placeholder-red-light::placeholder {
  color: #ef5753;
}

.placeholder-red-lighter::placeholder {
  color: #f9acaa;
}

.placeholder-red-lightest::placeholder {
  color: #fcebea;
}

.placeholder-orange-darkest::placeholder {
  color: #462a16;
}

.placeholder-orange-darker::placeholder {
  color: #613b1f;
}

.placeholder-orange-dark::placeholder {
  color: #de751f;
}

.placeholder-orange-light::placeholder {
  color: #faad63;
}

.placeholder-orange-lighter::placeholder {
  color: #fcd9b6;
}

.placeholder-orange-lightest::placeholder {
  color: #fff5eb;
}

.placeholder-yellow-darkest::placeholder {
  color: #453411;
}

.placeholder-yellow-darker::placeholder {
  color: #684f1d;
}

.placeholder-yellow-dark::placeholder {
  color: #f2d024;
}

.placeholder-yellow-light::placeholder {
  color: #fff382;
}

.placeholder-yellow-lighter::placeholder {
  color: #fff9c2;
}

.placeholder-yellow-lightest::placeholder {
  color: #fcfbeb;
}

.placeholder-green-darkest::placeholder {
  color: #0f2f21;
}

.placeholder-green-darker::placeholder {
  color: #1a4731;
}

.placeholder-green-dark::placeholder {
  color: #1f9d55;
}

.placeholder-green-light::placeholder {
  color: #51d88a;
}

.placeholder-green-lighter::placeholder {
  color: #a2f5bf;
}

.placeholder-green-lightest::placeholder {
  color: #e3fcec;
}

.placeholder-teal-darkest::placeholder {
  color: #0d3331;
}

.placeholder-teal-darker::placeholder {
  color: #20504f;
}

.placeholder-teal-dark::placeholder {
  color: #38a89d;
}

.placeholder-teal-light::placeholder {
  color: #64d5ca;
}

.placeholder-teal-lighter::placeholder {
  color: #a0f0ed;
}

.placeholder-teal-lightest::placeholder {
  color: #e8fffe;
}

.placeholder-blue-darkest::placeholder {
  color: #12283a;
}

.placeholder-blue-darker::placeholder {
  color: #1c3d5a;
}

.placeholder-blue-dark::placeholder {
  color: #2779bd;
}

.placeholder-blue-light::placeholder {
  color: #6cb2eb;
}

.placeholder-blue-lighter::placeholder {
  color: #bcdefa;
}

.placeholder-blue-lightest::placeholder {
  color: #eff8ff;
}

.placeholder-indigo-darkest::placeholder {
  color: #191e38;
}

.placeholder-indigo-darker::placeholder {
  color: #2f365f;
}

.placeholder-indigo-dark::placeholder {
  color: #5661b3;
}

.placeholder-indigo-light::placeholder {
  color: #7886d7;
}

.placeholder-indigo-lighter::placeholder {
  color: #b2b7ff;
}

.placeholder-indigo-lightest::placeholder {
  color: #e6e8ff;
}

.placeholder-purple-darkest::placeholder {
  color: #21183c;
}

.placeholder-purple-darker::placeholder {
  color: #382b5f;
}

.placeholder-purple-dark::placeholder {
  color: #794acf;
}

.placeholder-purple-light::placeholder {
  color: #a779e9;
}

.placeholder-purple-lighter::placeholder {
  color: #d6bbfc;
}

.placeholder-purple-lightest::placeholder {
  color: #f3ebff;
}

.placeholder-pink-darkest::placeholder {
  color: #451225;
}

.placeholder-pink-darker::placeholder {
  color: #6f213f;
}

.placeholder-pink-dark::placeholder {
  color: #eb5286;
}

.placeholder-pink-light::placeholder {
  color: #fa7ea8;
}

.placeholder-pink-lighter::placeholder {
  color: #ffbbca;
}

.placeholder-pink-lightest::placeholder {
  color: #ffebef;
}

.placeholder-nav::placeholder {
  color: #3F495E;
}

.placeholder-side-nav::placeholder {
  color: #ECF0F1;
}

.placeholder-nav-item::placeholder {
  color: #626b7a;
}

.placeholder-light-border::placeholder {
  color: #dfe4e6;
}

.placeholder-white-medium::placeholder {
  color: #FAFAFA;
}

.placeholder-white-medium-dark::placeholder {
  color: #E5E9EB;
}

.placeholder-red-vibrant::placeholder {
  color: #e46050;
}

.placeholder-red-vibrant-dark::placeholder {
  color: #d64230;
}

.placeholder-primary::placeholder {
  color: #51BE99;
}

.placeholder-primary-dark::placeholder {
  color: #0e5f43;
}

.placeholder-warning::placeholder {
  color: #f4ab43;
}

.placeholder-warning-dark::placeholder {
  color: #c37c16;
}

.placeholder-black-dark::placeholder {
  color: #272634;
}

.placeholder-black-darkest::placeholder {
  color: #141418;
}

.placeholder-info::placeholder {
  color: #52bcdc;
}

.placeholder-info-dark::placeholder {
  color: #2cadd4;
}

.placeholder-success::placeholder {
  color: #72b159;
}

.placeholder-success-dark::placeholder {
  color: #5D9547;
}

.placeholder-transparent::placeholder {
  color: transparent;
}

.placeholder-black::placeholder {
  color: #000;
}

.placeholder-white::placeholder {
  color: #fff;
}

.placeholder-gray-100::placeholder {
  color: #f7fafc;
}

.placeholder-gray-200::placeholder {
  color: #edf2f7;
}

.placeholder-gray-300::placeholder {
  color: #e2e8f0;
}

.placeholder-gray-400::placeholder {
  color: #cbd5e0;
}

.placeholder-gray-500::placeholder {
  color: #a0aec0;
}

.placeholder-gray-600::placeholder {
  color: #718096;
}

.placeholder-gray-700::placeholder {
  color: #4a5568;
}

.placeholder-gray-800::placeholder {
  color: #2d3748;
}

.placeholder-gray-900::placeholder {
  color: #1a202c;
}

.placeholder-red-100::placeholder {
  color: #fff5f5;
}

.placeholder-red-200::placeholder {
  color: #fed7d7;
}

.placeholder-red-300::placeholder {
  color: #feb2b2;
}

.placeholder-red-400::placeholder {
  color: #fc8181;
}

.placeholder-red-500::placeholder {
  color: #f56565;
}

.placeholder-red-600::placeholder {
  color: #e53e3e;
}

.placeholder-red-700::placeholder {
  color: #c53030;
}

.placeholder-red-800::placeholder {
  color: #9b2c2c;
}

.placeholder-red-900::placeholder {
  color: #742a2a;
}

.placeholder-orange-100::placeholder {
  color: #fffaf0;
}

.placeholder-orange-200::placeholder {
  color: #feebc8;
}

.placeholder-orange-300::placeholder {
  color: #fbd38d;
}

.placeholder-orange-400::placeholder {
  color: #f6ad55;
}

.placeholder-orange-500::placeholder {
  color: #ed8936;
}

.placeholder-orange-600::placeholder {
  color: #dd6b20;
}

.placeholder-orange-700::placeholder {
  color: #c05621;
}

.placeholder-orange-800::placeholder {
  color: #9c4221;
}

.placeholder-orange-900::placeholder {
  color: #7b341e;
}

.placeholder-yellow-100::placeholder {
  color: #fffff0;
}

.placeholder-yellow-200::placeholder {
  color: #fefcbf;
}

.placeholder-yellow-300::placeholder {
  color: #faf089;
}

.placeholder-yellow-400::placeholder {
  color: #f6e05e;
}

.placeholder-yellow-500::placeholder {
  color: #ecc94b;
}

.placeholder-yellow-600::placeholder {
  color: #d69e2e;
}

.placeholder-yellow-700::placeholder {
  color: #b7791f;
}

.placeholder-yellow-800::placeholder {
  color: #975a16;
}

.placeholder-yellow-900::placeholder {
  color: #744210;
}

.placeholder-green-100::placeholder {
  color: #f0fff4;
}

.placeholder-green-200::placeholder {
  color: #c6f6d5;
}

.placeholder-green-300::placeholder {
  color: #9ae6b4;
}

.placeholder-green-400::placeholder {
  color: #68d391;
}

.placeholder-green-500::placeholder {
  color: #48bb78;
}

.placeholder-green-600::placeholder {
  color: #38a169;
}

.placeholder-green-700::placeholder {
  color: #2f855a;
}

.placeholder-green-800::placeholder {
  color: #276749;
}

.placeholder-green-900::placeholder {
  color: #22543d;
}

.placeholder-teal-100::placeholder {
  color: #e6fffa;
}

.placeholder-teal-200::placeholder {
  color: #b2f5ea;
}

.placeholder-teal-300::placeholder {
  color: #81e6d9;
}

.placeholder-teal-400::placeholder {
  color: #4fd1c5;
}

.placeholder-teal-500::placeholder {
  color: #38b2ac;
}

.placeholder-teal-600::placeholder {
  color: #319795;
}

.placeholder-teal-700::placeholder {
  color: #2c7a7b;
}

.placeholder-teal-800::placeholder {
  color: #285e61;
}

.placeholder-teal-900::placeholder {
  color: #234e52;
}

.placeholder-blue-100::placeholder {
  color: #ebf8ff;
}

.placeholder-blue-200::placeholder {
  color: #bee3f8;
}

.placeholder-blue-300::placeholder {
  color: #90cdf4;
}

.placeholder-blue-400::placeholder {
  color: #63b3ed;
}

.placeholder-blue-500::placeholder {
  color: #4299e1;
}

.placeholder-blue-600::placeholder {
  color: #3182ce;
}

.placeholder-blue-700::placeholder {
  color: #2b6cb0;
}

.placeholder-blue-800::placeholder {
  color: #2c5282;
}

.placeholder-blue-900::placeholder {
  color: #2a4365;
}

.placeholder-indigo-100::placeholder {
  color: #ebf4ff;
}

.placeholder-indigo-200::placeholder {
  color: #c3dafe;
}

.placeholder-indigo-300::placeholder {
  color: #a3bffa;
}

.placeholder-indigo-400::placeholder {
  color: #7f9cf5;
}

.placeholder-indigo-500::placeholder {
  color: #667eea;
}

.placeholder-indigo-600::placeholder {
  color: #5a67d8;
}

.placeholder-indigo-700::placeholder {
  color: #4c51bf;
}

.placeholder-indigo-800::placeholder {
  color: #434190;
}

.placeholder-indigo-900::placeholder {
  color: #3c366b;
}

.placeholder-purple-100::placeholder {
  color: #faf5ff;
}

.placeholder-purple-200::placeholder {
  color: #e9d8fd;
}

.placeholder-purple-300::placeholder {
  color: #d6bcfa;
}

.placeholder-purple-400::placeholder {
  color: #b794f4;
}

.placeholder-purple-500::placeholder {
  color: #9f7aea;
}

.placeholder-purple-600::placeholder {
  color: #805ad5;
}

.placeholder-purple-700::placeholder {
  color: #6b46c1;
}

.placeholder-purple-800::placeholder {
  color: #553c9a;
}

.placeholder-purple-900::placeholder {
  color: #44337a;
}

.placeholder-pink-100::placeholder {
  color: #fff5f7;
}

.placeholder-pink-200::placeholder {
  color: #fed7e2;
}

.placeholder-pink-300::placeholder {
  color: #fbb6ce;
}

.placeholder-pink-400::placeholder {
  color: #f687b3;
}

.placeholder-pink-500::placeholder {
  color: #ed64a6;
}

.placeholder-pink-600::placeholder {
  color: #d53f8c;
}

.placeholder-pink-700::placeholder {
  color: #b83280;
}

.placeholder-pink-800::placeholder {
  color: #97266d;
}

.placeholder-pink-900::placeholder {
  color: #702459;
}

.focus\:placeholder-grey-darkest:focus::placeholder {
  color: #3d4852;
}

.focus\:placeholder-grey-darker:focus::placeholder {
  color: #606f7b;
}

.focus\:placeholder-grey-dark:focus::placeholder {
  color: #8795a1;
}

.focus\:placeholder-grey:focus::placeholder {
  color: #b8c2cc;
}

.focus\:placeholder-grey-light:focus::placeholder {
  color: #dae1e7;
}

.focus\:placeholder-grey-lighter:focus::placeholder {
  color: #f1f5f8;
}

.focus\:placeholder-grey-lightest:focus::placeholder {
  color: #f8fafc;
}

.focus\:placeholder-grey-mid-light:focus::placeholder {
  color: #f3f3f4;
}

.focus\:placeholder-white-lightest:focus::placeholder {
  color: #f4f4f4;
}

.focus\:placeholder-red-darkest:focus::placeholder {
  color: #3b0d0c;
}

.focus\:placeholder-red-darker:focus::placeholder {
  color: #621b18;
}

.focus\:placeholder-red-dark:focus::placeholder {
  color: #cc1f1a;
}

.focus\:placeholder-red-light:focus::placeholder {
  color: #ef5753;
}

.focus\:placeholder-red-lighter:focus::placeholder {
  color: #f9acaa;
}

.focus\:placeholder-red-lightest:focus::placeholder {
  color: #fcebea;
}

.focus\:placeholder-orange-darkest:focus::placeholder {
  color: #462a16;
}

.focus\:placeholder-orange-darker:focus::placeholder {
  color: #613b1f;
}

.focus\:placeholder-orange-dark:focus::placeholder {
  color: #de751f;
}

.focus\:placeholder-orange-light:focus::placeholder {
  color: #faad63;
}

.focus\:placeholder-orange-lighter:focus::placeholder {
  color: #fcd9b6;
}

.focus\:placeholder-orange-lightest:focus::placeholder {
  color: #fff5eb;
}

.focus\:placeholder-yellow-darkest:focus::placeholder {
  color: #453411;
}

.focus\:placeholder-yellow-darker:focus::placeholder {
  color: #684f1d;
}

.focus\:placeholder-yellow-dark:focus::placeholder {
  color: #f2d024;
}

.focus\:placeholder-yellow-light:focus::placeholder {
  color: #fff382;
}

.focus\:placeholder-yellow-lighter:focus::placeholder {
  color: #fff9c2;
}

.focus\:placeholder-yellow-lightest:focus::placeholder {
  color: #fcfbeb;
}

.focus\:placeholder-green-darkest:focus::placeholder {
  color: #0f2f21;
}

.focus\:placeholder-green-darker:focus::placeholder {
  color: #1a4731;
}

.focus\:placeholder-green-dark:focus::placeholder {
  color: #1f9d55;
}

.focus\:placeholder-green-light:focus::placeholder {
  color: #51d88a;
}

.focus\:placeholder-green-lighter:focus::placeholder {
  color: #a2f5bf;
}

.focus\:placeholder-green-lightest:focus::placeholder {
  color: #e3fcec;
}

.focus\:placeholder-teal-darkest:focus::placeholder {
  color: #0d3331;
}

.focus\:placeholder-teal-darker:focus::placeholder {
  color: #20504f;
}

.focus\:placeholder-teal-dark:focus::placeholder {
  color: #38a89d;
}

.focus\:placeholder-teal-light:focus::placeholder {
  color: #64d5ca;
}

.focus\:placeholder-teal-lighter:focus::placeholder {
  color: #a0f0ed;
}

.focus\:placeholder-teal-lightest:focus::placeholder {
  color: #e8fffe;
}

.focus\:placeholder-blue-darkest:focus::placeholder {
  color: #12283a;
}

.focus\:placeholder-blue-darker:focus::placeholder {
  color: #1c3d5a;
}

.focus\:placeholder-blue-dark:focus::placeholder {
  color: #2779bd;
}

.focus\:placeholder-blue-light:focus::placeholder {
  color: #6cb2eb;
}

.focus\:placeholder-blue-lighter:focus::placeholder {
  color: #bcdefa;
}

.focus\:placeholder-blue-lightest:focus::placeholder {
  color: #eff8ff;
}

.focus\:placeholder-indigo-darkest:focus::placeholder {
  color: #191e38;
}

.focus\:placeholder-indigo-darker:focus::placeholder {
  color: #2f365f;
}

.focus\:placeholder-indigo-dark:focus::placeholder {
  color: #5661b3;
}

.focus\:placeholder-indigo-light:focus::placeholder {
  color: #7886d7;
}

.focus\:placeholder-indigo-lighter:focus::placeholder {
  color: #b2b7ff;
}

.focus\:placeholder-indigo-lightest:focus::placeholder {
  color: #e6e8ff;
}

.focus\:placeholder-purple-darkest:focus::placeholder {
  color: #21183c;
}

.focus\:placeholder-purple-darker:focus::placeholder {
  color: #382b5f;
}

.focus\:placeholder-purple-dark:focus::placeholder {
  color: #794acf;
}

.focus\:placeholder-purple-light:focus::placeholder {
  color: #a779e9;
}

.focus\:placeholder-purple-lighter:focus::placeholder {
  color: #d6bbfc;
}

.focus\:placeholder-purple-lightest:focus::placeholder {
  color: #f3ebff;
}

.focus\:placeholder-pink-darkest:focus::placeholder {
  color: #451225;
}

.focus\:placeholder-pink-darker:focus::placeholder {
  color: #6f213f;
}

.focus\:placeholder-pink-dark:focus::placeholder {
  color: #eb5286;
}

.focus\:placeholder-pink-light:focus::placeholder {
  color: #fa7ea8;
}

.focus\:placeholder-pink-lighter:focus::placeholder {
  color: #ffbbca;
}

.focus\:placeholder-pink-lightest:focus::placeholder {
  color: #ffebef;
}

.focus\:placeholder-nav:focus::placeholder {
  color: #3F495E;
}

.focus\:placeholder-side-nav:focus::placeholder {
  color: #ECF0F1;
}

.focus\:placeholder-nav-item:focus::placeholder {
  color: #626b7a;
}

.focus\:placeholder-light-border:focus::placeholder {
  color: #dfe4e6;
}

.focus\:placeholder-white-medium:focus::placeholder {
  color: #FAFAFA;
}

.focus\:placeholder-white-medium-dark:focus::placeholder {
  color: #E5E9EB;
}

.focus\:placeholder-red-vibrant:focus::placeholder {
  color: #e46050;
}

.focus\:placeholder-red-vibrant-dark:focus::placeholder {
  color: #d64230;
}

.focus\:placeholder-primary:focus::placeholder {
  color: #51BE99;
}

.focus\:placeholder-primary-dark:focus::placeholder {
  color: #0e5f43;
}

.focus\:placeholder-warning:focus::placeholder {
  color: #f4ab43;
}

.focus\:placeholder-warning-dark:focus::placeholder {
  color: #c37c16;
}

.focus\:placeholder-black-dark:focus::placeholder {
  color: #272634;
}

.focus\:placeholder-black-darkest:focus::placeholder {
  color: #141418;
}

.focus\:placeholder-info:focus::placeholder {
  color: #52bcdc;
}

.focus\:placeholder-info-dark:focus::placeholder {
  color: #2cadd4;
}

.focus\:placeholder-success:focus::placeholder {
  color: #72b159;
}

.focus\:placeholder-success-dark:focus::placeholder {
  color: #5D9547;
}

.focus\:placeholder-transparent:focus::placeholder {
  color: transparent;
}

.focus\:placeholder-black:focus::placeholder {
  color: #000;
}

.focus\:placeholder-white:focus::placeholder {
  color: #fff;
}

.focus\:placeholder-gray-100:focus::placeholder {
  color: #f7fafc;
}

.focus\:placeholder-gray-200:focus::placeholder {
  color: #edf2f7;
}

.focus\:placeholder-gray-300:focus::placeholder {
  color: #e2e8f0;
}

.focus\:placeholder-gray-400:focus::placeholder {
  color: #cbd5e0;
}

.focus\:placeholder-gray-500:focus::placeholder {
  color: #a0aec0;
}

.focus\:placeholder-gray-600:focus::placeholder {
  color: #718096;
}

.focus\:placeholder-gray-700:focus::placeholder {
  color: #4a5568;
}

.focus\:placeholder-gray-800:focus::placeholder {
  color: #2d3748;
}

.focus\:placeholder-gray-900:focus::placeholder {
  color: #1a202c;
}

.focus\:placeholder-red-100:focus::placeholder {
  color: #fff5f5;
}

.focus\:placeholder-red-200:focus::placeholder {
  color: #fed7d7;
}

.focus\:placeholder-red-300:focus::placeholder {
  color: #feb2b2;
}

.focus\:placeholder-red-400:focus::placeholder {
  color: #fc8181;
}

.focus\:placeholder-red-500:focus::placeholder {
  color: #f56565;
}

.focus\:placeholder-red-600:focus::placeholder {
  color: #e53e3e;
}

.focus\:placeholder-red-700:focus::placeholder {
  color: #c53030;
}

.focus\:placeholder-red-800:focus::placeholder {
  color: #9b2c2c;
}

.focus\:placeholder-red-900:focus::placeholder {
  color: #742a2a;
}

.focus\:placeholder-orange-100:focus::placeholder {
  color: #fffaf0;
}

.focus\:placeholder-orange-200:focus::placeholder {
  color: #feebc8;
}

.focus\:placeholder-orange-300:focus::placeholder {
  color: #fbd38d;
}

.focus\:placeholder-orange-400:focus::placeholder {
  color: #f6ad55;
}

.focus\:placeholder-orange-500:focus::placeholder {
  color: #ed8936;
}

.focus\:placeholder-orange-600:focus::placeholder {
  color: #dd6b20;
}

.focus\:placeholder-orange-700:focus::placeholder {
  color: #c05621;
}

.focus\:placeholder-orange-800:focus::placeholder {
  color: #9c4221;
}

.focus\:placeholder-orange-900:focus::placeholder {
  color: #7b341e;
}

.focus\:placeholder-yellow-100:focus::placeholder {
  color: #fffff0;
}

.focus\:placeholder-yellow-200:focus::placeholder {
  color: #fefcbf;
}

.focus\:placeholder-yellow-300:focus::placeholder {
  color: #faf089;
}

.focus\:placeholder-yellow-400:focus::placeholder {
  color: #f6e05e;
}

.focus\:placeholder-yellow-500:focus::placeholder {
  color: #ecc94b;
}

.focus\:placeholder-yellow-600:focus::placeholder {
  color: #d69e2e;
}

.focus\:placeholder-yellow-700:focus::placeholder {
  color: #b7791f;
}

.focus\:placeholder-yellow-800:focus::placeholder {
  color: #975a16;
}

.focus\:placeholder-yellow-900:focus::placeholder {
  color: #744210;
}

.focus\:placeholder-green-100:focus::placeholder {
  color: #f0fff4;
}

.focus\:placeholder-green-200:focus::placeholder {
  color: #c6f6d5;
}

.focus\:placeholder-green-300:focus::placeholder {
  color: #9ae6b4;
}

.focus\:placeholder-green-400:focus::placeholder {
  color: #68d391;
}

.focus\:placeholder-green-500:focus::placeholder {
  color: #48bb78;
}

.focus\:placeholder-green-600:focus::placeholder {
  color: #38a169;
}

.focus\:placeholder-green-700:focus::placeholder {
  color: #2f855a;
}

.focus\:placeholder-green-800:focus::placeholder {
  color: #276749;
}

.focus\:placeholder-green-900:focus::placeholder {
  color: #22543d;
}

.focus\:placeholder-teal-100:focus::placeholder {
  color: #e6fffa;
}

.focus\:placeholder-teal-200:focus::placeholder {
  color: #b2f5ea;
}

.focus\:placeholder-teal-300:focus::placeholder {
  color: #81e6d9;
}

.focus\:placeholder-teal-400:focus::placeholder {
  color: #4fd1c5;
}

.focus\:placeholder-teal-500:focus::placeholder {
  color: #38b2ac;
}

.focus\:placeholder-teal-600:focus::placeholder {
  color: #319795;
}

.focus\:placeholder-teal-700:focus::placeholder {
  color: #2c7a7b;
}

.focus\:placeholder-teal-800:focus::placeholder {
  color: #285e61;
}

.focus\:placeholder-teal-900:focus::placeholder {
  color: #234e52;
}

.focus\:placeholder-blue-100:focus::placeholder {
  color: #ebf8ff;
}

.focus\:placeholder-blue-200:focus::placeholder {
  color: #bee3f8;
}

.focus\:placeholder-blue-300:focus::placeholder {
  color: #90cdf4;
}

.focus\:placeholder-blue-400:focus::placeholder {
  color: #63b3ed;
}

.focus\:placeholder-blue-500:focus::placeholder {
  color: #4299e1;
}

.focus\:placeholder-blue-600:focus::placeholder {
  color: #3182ce;
}

.focus\:placeholder-blue-700:focus::placeholder {
  color: #2b6cb0;
}

.focus\:placeholder-blue-800:focus::placeholder {
  color: #2c5282;
}

.focus\:placeholder-blue-900:focus::placeholder {
  color: #2a4365;
}

.focus\:placeholder-indigo-100:focus::placeholder {
  color: #ebf4ff;
}

.focus\:placeholder-indigo-200:focus::placeholder {
  color: #c3dafe;
}

.focus\:placeholder-indigo-300:focus::placeholder {
  color: #a3bffa;
}

.focus\:placeholder-indigo-400:focus::placeholder {
  color: #7f9cf5;
}

.focus\:placeholder-indigo-500:focus::placeholder {
  color: #667eea;
}

.focus\:placeholder-indigo-600:focus::placeholder {
  color: #5a67d8;
}

.focus\:placeholder-indigo-700:focus::placeholder {
  color: #4c51bf;
}

.focus\:placeholder-indigo-800:focus::placeholder {
  color: #434190;
}

.focus\:placeholder-indigo-900:focus::placeholder {
  color: #3c366b;
}

.focus\:placeholder-purple-100:focus::placeholder {
  color: #faf5ff;
}

.focus\:placeholder-purple-200:focus::placeholder {
  color: #e9d8fd;
}

.focus\:placeholder-purple-300:focus::placeholder {
  color: #d6bcfa;
}

.focus\:placeholder-purple-400:focus::placeholder {
  color: #b794f4;
}

.focus\:placeholder-purple-500:focus::placeholder {
  color: #9f7aea;
}

.focus\:placeholder-purple-600:focus::placeholder {
  color: #805ad5;
}

.focus\:placeholder-purple-700:focus::placeholder {
  color: #6b46c1;
}

.focus\:placeholder-purple-800:focus::placeholder {
  color: #553c9a;
}

.focus\:placeholder-purple-900:focus::placeholder {
  color: #44337a;
}

.focus\:placeholder-pink-100:focus::placeholder {
  color: #fff5f7;
}

.focus\:placeholder-pink-200:focus::placeholder {
  color: #fed7e2;
}

.focus\:placeholder-pink-300:focus::placeholder {
  color: #fbb6ce;
}

.focus\:placeholder-pink-400:focus::placeholder {
  color: #f687b3;
}

.focus\:placeholder-pink-500:focus::placeholder {
  color: #ed64a6;
}

.focus\:placeholder-pink-600:focus::placeholder {
  color: #d53f8c;
}

.focus\:placeholder-pink-700:focus::placeholder {
  color: #b83280;
}

.focus\:placeholder-pink-800:focus::placeholder {
  color: #97266d;
}

.focus\:placeholder-pink-900:focus::placeholder {
  color: #702459;
}

.pointer-events-none {
  pointer-events: none;
}

.pointer-events-auto {
  pointer-events: auto;
}

.static {
  position: static;
}

.fixed {
  position: fixed;
}

.absolute {
  position: absolute;
}

.relative {
  position: relative;
}

.sticky {
  position: sticky;
}

.inset-0 {
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
}

.inset-auto {
  top: auto;
  right: auto;
  bottom: auto;
  left: auto;
}

.inset-y-0 {
  top: 0;
  bottom: 0;
}

.inset-x-0 {
  right: 0;
  left: 0;
}

.inset-y-auto {
  top: auto;
  bottom: auto;
}

.inset-x-auto {
  right: auto;
  left: auto;
}

.top-0 {
  top: 0;
}

.right-0 {
  right: 0;
}

.bottom-0 {
  bottom: 0;
}

.left-0 {
  left: 0;
}

.top-auto {
  top: auto;
}

.right-auto {
  right: auto;
}

.bottom-auto {
  bottom: auto;
}

.left-auto {
  left: auto;
}

.resize-none {
  resize: none;
}

.resize-y {
  resize: vertical;
}

.resize-x {
  resize: horizontal;
}

.resize {
  resize: both;
}

.shadow {
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
}

.shadow-md {
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
}

.shadow-lg {
  box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
}

.shadow-xl {
  box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
}

.shadow-2xl {
  box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
}

.shadow-inner {
  box-shadow: inset 0 2px 4px 0 rgba(0, 0, 0, 0.06);
}

.shadow-outline {
  box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.5);
}

.shadow-none {
  box-shadow: none;
}

.hover\:shadow:hover {
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
}

.hover\:shadow-md:hover {
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
}

.hover\:shadow-lg:hover {
  box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
}

.hover\:shadow-xl:hover {
  box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
}

.hover\:shadow-2xl:hover {
  box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
}

.hover\:shadow-inner:hover {
  box-shadow: inset 0 2px 4px 0 rgba(0, 0, 0, 0.06);
}

.hover\:shadow-outline:hover {
  box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.5);
}

.hover\:shadow-none:hover {
  box-shadow: none;
}

.focus\:shadow:focus {
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
}

.focus\:shadow-md:focus {
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
}

.focus\:shadow-lg:focus {
  box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
}

.focus\:shadow-xl:focus {
  box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
}

.focus\:shadow-2xl:focus {
  box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
}

.focus\:shadow-inner:focus {
  box-shadow: inset 0 2px 4px 0 rgba(0, 0, 0, 0.06);
}

.focus\:shadow-outline:focus {
  box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.5);
}

.focus\:shadow-none:focus {
  box-shadow: none;
}

.fill-current {
  fill: currentColor;
}

.stroke-current {
  stroke: currentColor;
}

.table-auto {
  table-layout: auto;
}

.table-fixed {
  table-layout: fixed;
}

.text-left {
  text-align: left;
}

.text-center {
  text-align: center;
}

.text-right {
  text-align: right;
}

.text-justify {
  text-align: justify;
}

.text-grey-darkest {
  color: #3d4852;
}

.text-grey-darker {
  color: #606f7b;
}

.text-grey-dark {
  color: #8795a1;
}

.text-grey {
  color: #b8c2cc;
}

.text-grey-light {
  color: #dae1e7;
}

.text-grey-lighter {
  color: #f1f5f8;
}

.text-grey-lightest {
  color: #f8fafc;
}

.text-grey-mid-light {
  color: #f3f3f4;
}

.text-white-lightest {
  color: #f4f4f4;
}

.text-red-darkest {
  color: #3b0d0c;
}

.text-red-darker {
  color: #621b18;
}

.text-red-dark {
  color: #cc1f1a;
}

.text-red-light {
  color: #ef5753;
}

.text-red-lighter {
  color: #f9acaa;
}

.text-red-lightest {
  color: #fcebea;
}

.text-orange-darkest {
  color: #462a16;
}

.text-orange-darker {
  color: #613b1f;
}

.text-orange-dark {
  color: #de751f;
}

.text-orange-light {
  color: #faad63;
}

.text-orange-lighter {
  color: #fcd9b6;
}

.text-orange-lightest {
  color: #fff5eb;
}

.text-yellow-darkest {
  color: #453411;
}

.text-yellow-darker {
  color: #684f1d;
}

.text-yellow-dark {
  color: #f2d024;
}

.text-yellow-light {
  color: #fff382;
}

.text-yellow-lighter {
  color: #fff9c2;
}

.text-yellow-lightest {
  color: #fcfbeb;
}

.text-green-darkest {
  color: #0f2f21;
}

.text-green-darker {
  color: #1a4731;
}

.text-green-dark {
  color: #1f9d55;
}

.text-green-light {
  color: #51d88a;
}

.text-green-lighter {
  color: #a2f5bf;
}

.text-green-lightest {
  color: #e3fcec;
}

.text-teal-darkest {
  color: #0d3331;
}

.text-teal-darker {
  color: #20504f;
}

.text-teal-dark {
  color: #38a89d;
}

.text-teal-light {
  color: #64d5ca;
}

.text-teal-lighter {
  color: #a0f0ed;
}

.text-teal-lightest {
  color: #e8fffe;
}

.text-blue-darkest {
  color: #12283a;
}

.text-blue-darker {
  color: #1c3d5a;
}

.text-blue-dark {
  color: #2779bd;
}

.text-blue-light {
  color: #6cb2eb;
}

.text-blue-lighter {
  color: #bcdefa;
}

.text-blue-lightest {
  color: #eff8ff;
}

.text-indigo-darkest {
  color: #191e38;
}

.text-indigo-darker {
  color: #2f365f;
}

.text-indigo-dark {
  color: #5661b3;
}

.text-indigo-light {
  color: #7886d7;
}

.text-indigo-lighter {
  color: #b2b7ff;
}

.text-indigo-lightest {
  color: #e6e8ff;
}

.text-purple-darkest {
  color: #21183c;
}

.text-purple-darker {
  color: #382b5f;
}

.text-purple-dark {
  color: #794acf;
}

.text-purple-light {
  color: #a779e9;
}

.text-purple-lighter {
  color: #d6bbfc;
}

.text-purple-lightest {
  color: #f3ebff;
}

.text-pink-darkest {
  color: #451225;
}

.text-pink-darker {
  color: #6f213f;
}

.text-pink-dark {
  color: #eb5286;
}

.text-pink-light {
  color: #fa7ea8;
}

.text-pink-lighter {
  color: #ffbbca;
}

.text-pink-lightest {
  color: #ffebef;
}

.text-nav {
  color: #3F495E;
}

.text-side-nav {
  color: #ECF0F1;
}

.text-nav-item {
  color: #626b7a;
}

.text-light-border {
  color: #dfe4e6;
}

.text-white-medium {
  color: #FAFAFA;
}

.text-white-medium-dark {
  color: #E5E9EB;
}

.text-red-vibrant {
  color: #e46050;
}

.text-red-vibrant-dark {
  color: #d64230;
}

.text-primary {
  color: #51BE99;
}

.text-primary-dark {
  color: #0e5f43;
}

.text-warning {
  color: #f4ab43;
}

.text-warning-dark {
  color: #c37c16;
}

.text-black-dark {
  color: #272634;
}

.text-black-darkest {
  color: #141418;
}

.text-info {
  color: #52bcdc;
}

.text-info-dark {
  color: #2cadd4;
}

.text-success {
  color: #72b159;
}

.text-success-dark {
  color: #5D9547;
}

.text-transparent {
  color: transparent;
}

.text-black {
  color: #000;
}

.text-white {
  color: #fff;
}

.text-gray-100 {
  color: #f7fafc;
}

.text-gray-200 {
  color: #edf2f7;
}

.text-gray-300 {
  color: #e2e8f0;
}

.text-gray-400 {
  color: #cbd5e0;
}

.text-gray-500 {
  color: #a0aec0;
}

.text-gray-600 {
  color: #718096;
}

.text-gray-700 {
  color: #4a5568;
}

.text-gray-800 {
  color: #2d3748;
}

.text-gray-900 {
  color: #1a202c;
}

.text-red-100 {
  color: #fff5f5;
}

.text-red-200 {
  color: #fed7d7;
}

.text-red-300 {
  color: #feb2b2;
}

.text-red-400 {
  color: #fc8181;
}

.text-red-500 {
  color: #f56565;
}

.text-red-600 {
  color: #e53e3e;
}

.text-red-700 {
  color: #c53030;
}

.text-red-800 {
  color: #9b2c2c;
}

.text-red-900 {
  color: #742a2a;
}

.text-orange-100 {
  color: #fffaf0;
}

.text-orange-200 {
  color: #feebc8;
}

.text-orange-300 {
  color: #fbd38d;
}

.text-orange-400 {
  color: #f6ad55;
}

.text-orange-500 {
  color: #ed8936;
}

.text-orange-600 {
  color: #dd6b20;
}

.text-orange-700 {
  color: #c05621;
}

.text-orange-800 {
  color: #9c4221;
}

.text-orange-900 {
  color: #7b341e;
}

.text-yellow-100 {
  color: #fffff0;
}

.text-yellow-200 {
  color: #fefcbf;
}

.text-yellow-300 {
  color: #faf089;
}

.text-yellow-400 {
  color: #f6e05e;
}

.text-yellow-500 {
  color: #ecc94b;
}

.text-yellow-600 {
  color: #d69e2e;
}

.text-yellow-700 {
  color: #b7791f;
}

.text-yellow-800 {
  color: #975a16;
}

.text-yellow-900 {
  color: #744210;
}

.text-green-100 {
  color: #f0fff4;
}

.text-green-200 {
  color: #c6f6d5;
}

.text-green-300 {
  color: #9ae6b4;
}

.text-green-400 {
  color: #68d391;
}

.text-green-500 {
  color: #48bb78;
}

.text-green-600 {
  color: #38a169;
}

.text-green-700 {
  color: #2f855a;
}

.text-green-800 {
  color: #276749;
}

.text-green-900 {
  color: #22543d;
}

.text-teal-100 {
  color: #e6fffa;
}

.text-teal-200 {
  color: #b2f5ea;
}

.text-teal-300 {
  color: #81e6d9;
}

.text-teal-400 {
  color: #4fd1c5;
}

.text-teal-500 {
  color: #38b2ac;
}

.text-teal-600 {
  color: #319795;
}

.text-teal-700 {
  color: #2c7a7b;
}

.text-teal-800 {
  color: #285e61;
}

.text-teal-900 {
  color: #234e52;
}

.text-blue-100 {
  color: #ebf8ff;
}

.text-blue-200 {
  color: #bee3f8;
}

.text-blue-300 {
  color: #90cdf4;
}

.text-blue-400 {
  color: #63b3ed;
}

.text-blue-500 {
  color: #4299e1;
}

.text-blue-600 {
  color: #3182ce;
}

.text-blue-700 {
  color: #2b6cb0;
}

.text-blue-800 {
  color: #2c5282;
}

.text-blue-900 {
  color: #2a4365;
}

.text-indigo-100 {
  color: #ebf4ff;
}

.text-indigo-200 {
  color: #c3dafe;
}

.text-indigo-300 {
  color: #a3bffa;
}

.text-indigo-400 {
  color: #7f9cf5;
}

.text-indigo-500 {
  color: #667eea;
}

.text-indigo-600 {
  color: #5a67d8;
}

.text-indigo-700 {
  color: #4c51bf;
}

.text-indigo-800 {
  color: #434190;
}

.text-indigo-900 {
  color: #3c366b;
}

.text-purple-100 {
  color: #faf5ff;
}

.text-purple-200 {
  color: #e9d8fd;
}

.text-purple-300 {
  color: #d6bcfa;
}

.text-purple-400 {
  color: #b794f4;
}

.text-purple-500 {
  color: #9f7aea;
}

.text-purple-600 {
  color: #805ad5;
}

.text-purple-700 {
  color: #6b46c1;
}

.text-purple-800 {
  color: #553c9a;
}

.text-purple-900 {
  color: #44337a;
}

.text-pink-100 {
  color: #fff5f7;
}

.text-pink-200 {
  color: #fed7e2;
}

.text-pink-300 {
  color: #fbb6ce;
}

.text-pink-400 {
  color: #f687b3;
}

.text-pink-500 {
  color: #ed64a6;
}

.text-pink-600 {
  color: #d53f8c;
}

.text-pink-700 {
  color: #b83280;
}

.text-pink-800 {
  color: #97266d;
}

.text-pink-900 {
  color: #702459;
}

.hover\:text-grey-darkest:hover {
  color: #3d4852;
}

.hover\:text-grey-darker:hover {
  color: #606f7b;
}

.hover\:text-grey-dark:hover {
  color: #8795a1;
}

.hover\:text-grey:hover {
  color: #b8c2cc;
}

.hover\:text-grey-light:hover {
  color: #dae1e7;
}

.hover\:text-grey-lighter:hover {
  color: #f1f5f8;
}

.hover\:text-grey-lightest:hover {
  color: #f8fafc;
}

.hover\:text-grey-mid-light:hover {
  color: #f3f3f4;
}

.hover\:text-white-lightest:hover {
  color: #f4f4f4;
}

.hover\:text-red-darkest:hover {
  color: #3b0d0c;
}

.hover\:text-red-darker:hover {
  color: #621b18;
}

.hover\:text-red-dark:hover {
  color: #cc1f1a;
}

.hover\:text-red-light:hover {
  color: #ef5753;
}

.hover\:text-red-lighter:hover {
  color: #f9acaa;
}

.hover\:text-red-lightest:hover {
  color: #fcebea;
}

.hover\:text-orange-darkest:hover {
  color: #462a16;
}

.hover\:text-orange-darker:hover {
  color: #613b1f;
}

.hover\:text-orange-dark:hover {
  color: #de751f;
}

.hover\:text-orange-light:hover {
  color: #faad63;
}

.hover\:text-orange-lighter:hover {
  color: #fcd9b6;
}

.hover\:text-orange-lightest:hover {
  color: #fff5eb;
}

.hover\:text-yellow-darkest:hover {
  color: #453411;
}

.hover\:text-yellow-darker:hover {
  color: #684f1d;
}

.hover\:text-yellow-dark:hover {
  color: #f2d024;
}

.hover\:text-yellow-light:hover {
  color: #fff382;
}

.hover\:text-yellow-lighter:hover {
  color: #fff9c2;
}

.hover\:text-yellow-lightest:hover {
  color: #fcfbeb;
}

.hover\:text-green-darkest:hover {
  color: #0f2f21;
}

.hover\:text-green-darker:hover {
  color: #1a4731;
}

.hover\:text-green-dark:hover {
  color: #1f9d55;
}

.hover\:text-green-light:hover {
  color: #51d88a;
}

.hover\:text-green-lighter:hover {
  color: #a2f5bf;
}

.hover\:text-green-lightest:hover {
  color: #e3fcec;
}

.hover\:text-teal-darkest:hover {
  color: #0d3331;
}

.hover\:text-teal-darker:hover {
  color: #20504f;
}

.hover\:text-teal-dark:hover {
  color: #38a89d;
}

.hover\:text-teal-light:hover {
  color: #64d5ca;
}

.hover\:text-teal-lighter:hover {
  color: #a0f0ed;
}

.hover\:text-teal-lightest:hover {
  color: #e8fffe;
}

.hover\:text-blue-darkest:hover {
  color: #12283a;
}

.hover\:text-blue-darker:hover {
  color: #1c3d5a;
}

.hover\:text-blue-dark:hover {
  color: #2779bd;
}

.hover\:text-blue-light:hover {
  color: #6cb2eb;
}

.hover\:text-blue-lighter:hover {
  color: #bcdefa;
}

.hover\:text-blue-lightest:hover {
  color: #eff8ff;
}

.hover\:text-indigo-darkest:hover {
  color: #191e38;
}

.hover\:text-indigo-darker:hover {
  color: #2f365f;
}

.hover\:text-indigo-dark:hover {
  color: #5661b3;
}

.hover\:text-indigo-light:hover {
  color: #7886d7;
}

.hover\:text-indigo-lighter:hover {
  color: #b2b7ff;
}

.hover\:text-indigo-lightest:hover {
  color: #e6e8ff;
}

.hover\:text-purple-darkest:hover {
  color: #21183c;
}

.hover\:text-purple-darker:hover {
  color: #382b5f;
}

.hover\:text-purple-dark:hover {
  color: #794acf;
}

.hover\:text-purple-light:hover {
  color: #a779e9;
}

.hover\:text-purple-lighter:hover {
  color: #d6bbfc;
}

.hover\:text-purple-lightest:hover {
  color: #f3ebff;
}

.hover\:text-pink-darkest:hover {
  color: #451225;
}

.hover\:text-pink-darker:hover {
  color: #6f213f;
}

.hover\:text-pink-dark:hover {
  color: #eb5286;
}

.hover\:text-pink-light:hover {
  color: #fa7ea8;
}

.hover\:text-pink-lighter:hover {
  color: #ffbbca;
}

.hover\:text-pink-lightest:hover {
  color: #ffebef;
}

.hover\:text-nav:hover {
  color: #3F495E;
}

.hover\:text-side-nav:hover {
  color: #ECF0F1;
}

.hover\:text-nav-item:hover {
  color: #626b7a;
}

.hover\:text-light-border:hover {
  color: #dfe4e6;
}

.hover\:text-white-medium:hover {
  color: #FAFAFA;
}

.hover\:text-white-medium-dark:hover {
  color: #E5E9EB;
}

.hover\:text-red-vibrant:hover {
  color: #e46050;
}

.hover\:text-red-vibrant-dark:hover {
  color: #d64230;
}

.hover\:text-primary:hover {
  color: #51BE99;
}

.hover\:text-primary-dark:hover {
  color: #0e5f43;
}

.hover\:text-warning:hover {
  color: #f4ab43;
}

.hover\:text-warning-dark:hover {
  color: #c37c16;
}

.hover\:text-black-dark:hover {
  color: #272634;
}

.hover\:text-black-darkest:hover {
  color: #141418;
}

.hover\:text-info:hover {
  color: #52bcdc;
}

.hover\:text-info-dark:hover {
  color: #2cadd4;
}

.hover\:text-success:hover {
  color: #72b159;
}

.hover\:text-success-dark:hover {
  color: #5D9547;
}

.hover\:text-transparent:hover {
  color: transparent;
}

.hover\:text-black:hover {
  color: #000;
}

.hover\:text-white:hover {
  color: #fff;
}

.hover\:text-gray-100:hover {
  color: #f7fafc;
}

.hover\:text-gray-200:hover {
  color: #edf2f7;
}

.hover\:text-gray-300:hover {
  color: #e2e8f0;
}

.hover\:text-gray-400:hover {
  color: #cbd5e0;
}

.hover\:text-gray-500:hover {
  color: #a0aec0;
}

.hover\:text-gray-600:hover {
  color: #718096;
}

.hover\:text-gray-700:hover {
  color: #4a5568;
}

.hover\:text-gray-800:hover {
  color: #2d3748;
}

.hover\:text-gray-900:hover {
  color: #1a202c;
}

.hover\:text-red-100:hover {
  color: #fff5f5;
}

.hover\:text-red-200:hover {
  color: #fed7d7;
}

.hover\:text-red-300:hover {
  color: #feb2b2;
}

.hover\:text-red-400:hover {
  color: #fc8181;
}

.hover\:text-red-500:hover {
  color: #f56565;
}

.hover\:text-red-600:hover {
  color: #e53e3e;
}

.hover\:text-red-700:hover {
  color: #c53030;
}

.hover\:text-red-800:hover {
  color: #9b2c2c;
}

.hover\:text-red-900:hover {
  color: #742a2a;
}

.hover\:text-orange-100:hover {
  color: #fffaf0;
}

.hover\:text-orange-200:hover {
  color: #feebc8;
}

.hover\:text-orange-300:hover {
  color: #fbd38d;
}

.hover\:text-orange-400:hover {
  color: #f6ad55;
}

.hover\:text-orange-500:hover {
  color: #ed8936;
}

.hover\:text-orange-600:hover {
  color: #dd6b20;
}

.hover\:text-orange-700:hover {
  color: #c05621;
}

.hover\:text-orange-800:hover {
  color: #9c4221;
}

.hover\:text-orange-900:hover {
  color: #7b341e;
}

.hover\:text-yellow-100:hover {
  color: #fffff0;
}

.hover\:text-yellow-200:hover {
  color: #fefcbf;
}

.hover\:text-yellow-300:hover {
  color: #faf089;
}

.hover\:text-yellow-400:hover {
  color: #f6e05e;
}

.hover\:text-yellow-500:hover {
  color: #ecc94b;
}

.hover\:text-yellow-600:hover {
  color: #d69e2e;
}

.hover\:text-yellow-700:hover {
  color: #b7791f;
}

.hover\:text-yellow-800:hover {
  color: #975a16;
}

.hover\:text-yellow-900:hover {
  color: #744210;
}

.hover\:text-green-100:hover {
  color: #f0fff4;
}

.hover\:text-green-200:hover {
  color: #c6f6d5;
}

.hover\:text-green-300:hover {
  color: #9ae6b4;
}

.hover\:text-green-400:hover {
  color: #68d391;
}

.hover\:text-green-500:hover {
  color: #48bb78;
}

.hover\:text-green-600:hover {
  color: #38a169;
}

.hover\:text-green-700:hover {
  color: #2f855a;
}

.hover\:text-green-800:hover {
  color: #276749;
}

.hover\:text-green-900:hover {
  color: #22543d;
}

.hover\:text-teal-100:hover {
  color: #e6fffa;
}

.hover\:text-teal-200:hover {
  color: #b2f5ea;
}

.hover\:text-teal-300:hover {
  color: #81e6d9;
}

.hover\:text-teal-400:hover {
  color: #4fd1c5;
}

.hover\:text-teal-500:hover {
  color: #38b2ac;
}

.hover\:text-teal-600:hover {
  color: #319795;
}

.hover\:text-teal-700:hover {
  color: #2c7a7b;
}

.hover\:text-teal-800:hover {
  color: #285e61;
}

.hover\:text-teal-900:hover {
  color: #234e52;
}

.hover\:text-blue-100:hover {
  color: #ebf8ff;
}

.hover\:text-blue-200:hover {
  color: #bee3f8;
}

.hover\:text-blue-300:hover {
  color: #90cdf4;
}

.hover\:text-blue-400:hover {
  color: #63b3ed;
}

.hover\:text-blue-500:hover {
  color: #4299e1;
}

.hover\:text-blue-600:hover {
  color: #3182ce;
}

.hover\:text-blue-700:hover {
  color: #2b6cb0;
}

.hover\:text-blue-800:hover {
  color: #2c5282;
}

.hover\:text-blue-900:hover {
  color: #2a4365;
}

.hover\:text-indigo-100:hover {
  color: #ebf4ff;
}

.hover\:text-indigo-200:hover {
  color: #c3dafe;
}

.hover\:text-indigo-300:hover {
  color: #a3bffa;
}

.hover\:text-indigo-400:hover {
  color: #7f9cf5;
}

.hover\:text-indigo-500:hover {
  color: #667eea;
}

.hover\:text-indigo-600:hover {
  color: #5a67d8;
}

.hover\:text-indigo-700:hover {
  color: #4c51bf;
}

.hover\:text-indigo-800:hover {
  color: #434190;
}

.hover\:text-indigo-900:hover {
  color: #3c366b;
}

.hover\:text-purple-100:hover {
  color: #faf5ff;
}

.hover\:text-purple-200:hover {
  color: #e9d8fd;
}

.hover\:text-purple-300:hover {
  color: #d6bcfa;
}

.hover\:text-purple-400:hover {
  color: #b794f4;
}

.hover\:text-purple-500:hover {
  color: #9f7aea;
}

.hover\:text-purple-600:hover {
  color: #805ad5;
}

.hover\:text-purple-700:hover {
  color: #6b46c1;
}

.hover\:text-purple-800:hover {
  color: #553c9a;
}

.hover\:text-purple-900:hover {
  color: #44337a;
}

.hover\:text-pink-100:hover {
  color: #fff5f7;
}

.hover\:text-pink-200:hover {
  color: #fed7e2;
}

.hover\:text-pink-300:hover {
  color: #fbb6ce;
}

.hover\:text-pink-400:hover {
  color: #f687b3;
}

.hover\:text-pink-500:hover {
  color: #ed64a6;
}

.hover\:text-pink-600:hover {
  color: #d53f8c;
}

.hover\:text-pink-700:hover {
  color: #b83280;
}

.hover\:text-pink-800:hover {
  color: #97266d;
}

.hover\:text-pink-900:hover {
  color: #702459;
}

.focus\:text-grey-darkest:focus {
  color: #3d4852;
}

.focus\:text-grey-darker:focus {
  color: #606f7b;
}

.focus\:text-grey-dark:focus {
  color: #8795a1;
}

.focus\:text-grey:focus {
  color: #b8c2cc;
}

.focus\:text-grey-light:focus {
  color: #dae1e7;
}

.focus\:text-grey-lighter:focus {
  color: #f1f5f8;
}

.focus\:text-grey-lightest:focus {
  color: #f8fafc;
}

.focus\:text-grey-mid-light:focus {
  color: #f3f3f4;
}

.focus\:text-white-lightest:focus {
  color: #f4f4f4;
}

.focus\:text-red-darkest:focus {
  color: #3b0d0c;
}

.focus\:text-red-darker:focus {
  color: #621b18;
}

.focus\:text-red-dark:focus {
  color: #cc1f1a;
}

.focus\:text-red-light:focus {
  color: #ef5753;
}

.focus\:text-red-lighter:focus {
  color: #f9acaa;
}

.focus\:text-red-lightest:focus {
  color: #fcebea;
}

.focus\:text-orange-darkest:focus {
  color: #462a16;
}

.focus\:text-orange-darker:focus {
  color: #613b1f;
}

.focus\:text-orange-dark:focus {
  color: #de751f;
}

.focus\:text-orange-light:focus {
  color: #faad63;
}

.focus\:text-orange-lighter:focus {
  color: #fcd9b6;
}

.focus\:text-orange-lightest:focus {
  color: #fff5eb;
}

.focus\:text-yellow-darkest:focus {
  color: #453411;
}

.focus\:text-yellow-darker:focus {
  color: #684f1d;
}

.focus\:text-yellow-dark:focus {
  color: #f2d024;
}

.focus\:text-yellow-light:focus {
  color: #fff382;
}

.focus\:text-yellow-lighter:focus {
  color: #fff9c2;
}

.focus\:text-yellow-lightest:focus {
  color: #fcfbeb;
}

.focus\:text-green-darkest:focus {
  color: #0f2f21;
}

.focus\:text-green-darker:focus {
  color: #1a4731;
}

.focus\:text-green-dark:focus {
  color: #1f9d55;
}

.focus\:text-green-light:focus {
  color: #51d88a;
}

.focus\:text-green-lighter:focus {
  color: #a2f5bf;
}

.focus\:text-green-lightest:focus {
  color: #e3fcec;
}

.focus\:text-teal-darkest:focus {
  color: #0d3331;
}

.focus\:text-teal-darker:focus {
  color: #20504f;
}

.focus\:text-teal-dark:focus {
  color: #38a89d;
}

.focus\:text-teal-light:focus {
  color: #64d5ca;
}

.focus\:text-teal-lighter:focus {
  color: #a0f0ed;
}

.focus\:text-teal-lightest:focus {
  color: #e8fffe;
}

.focus\:text-blue-darkest:focus {
  color: #12283a;
}

.focus\:text-blue-darker:focus {
  color: #1c3d5a;
}

.focus\:text-blue-dark:focus {
  color: #2779bd;
}

.focus\:text-blue-light:focus {
  color: #6cb2eb;
}

.focus\:text-blue-lighter:focus {
  color: #bcdefa;
}

.focus\:text-blue-lightest:focus {
  color: #eff8ff;
}

.focus\:text-indigo-darkest:focus {
  color: #191e38;
}

.focus\:text-indigo-darker:focus {
  color: #2f365f;
}

.focus\:text-indigo-dark:focus {
  color: #5661b3;
}

.focus\:text-indigo-light:focus {
  color: #7886d7;
}

.focus\:text-indigo-lighter:focus {
  color: #b2b7ff;
}

.focus\:text-indigo-lightest:focus {
  color: #e6e8ff;
}

.focus\:text-purple-darkest:focus {
  color: #21183c;
}

.focus\:text-purple-darker:focus {
  color: #382b5f;
}

.focus\:text-purple-dark:focus {
  color: #794acf;
}

.focus\:text-purple-light:focus {
  color: #a779e9;
}

.focus\:text-purple-lighter:focus {
  color: #d6bbfc;
}

.focus\:text-purple-lightest:focus {
  color: #f3ebff;
}

.focus\:text-pink-darkest:focus {
  color: #451225;
}

.focus\:text-pink-darker:focus {
  color: #6f213f;
}

.focus\:text-pink-dark:focus {
  color: #eb5286;
}

.focus\:text-pink-light:focus {
  color: #fa7ea8;
}

.focus\:text-pink-lighter:focus {
  color: #ffbbca;
}

.focus\:text-pink-lightest:focus {
  color: #ffebef;
}

.focus\:text-nav:focus {
  color: #3F495E;
}

.focus\:text-side-nav:focus {
  color: #ECF0F1;
}

.focus\:text-nav-item:focus {
  color: #626b7a;
}

.focus\:text-light-border:focus {
  color: #dfe4e6;
}

.focus\:text-white-medium:focus {
  color: #FAFAFA;
}

.focus\:text-white-medium-dark:focus {
  color: #E5E9EB;
}

.focus\:text-red-vibrant:focus {
  color: #e46050;
}

.focus\:text-red-vibrant-dark:focus {
  color: #d64230;
}

.focus\:text-primary:focus {
  color: #51BE99;
}

.focus\:text-primary-dark:focus {
  color: #0e5f43;
}

.focus\:text-warning:focus {
  color: #f4ab43;
}

.focus\:text-warning-dark:focus {
  color: #c37c16;
}

.focus\:text-black-dark:focus {
  color: #272634;
}

.focus\:text-black-darkest:focus {
  color: #141418;
}

.focus\:text-info:focus {
  color: #52bcdc;
}

.focus\:text-info-dark:focus {
  color: #2cadd4;
}

.focus\:text-success:focus {
  color: #72b159;
}

.focus\:text-success-dark:focus {
  color: #5D9547;
}

.focus\:text-transparent:focus {
  color: transparent;
}

.focus\:text-black:focus {
  color: #000;
}

.focus\:text-white:focus {
  color: #fff;
}

.focus\:text-gray-100:focus {
  color: #f7fafc;
}

.focus\:text-gray-200:focus {
  color: #edf2f7;
}

.focus\:text-gray-300:focus {
  color: #e2e8f0;
}

.focus\:text-gray-400:focus {
  color: #cbd5e0;
}

.focus\:text-gray-500:focus {
  color: #a0aec0;
}

.focus\:text-gray-600:focus {
  color: #718096;
}

.focus\:text-gray-700:focus {
  color: #4a5568;
}

.focus\:text-gray-800:focus {
  color: #2d3748;
}

.focus\:text-gray-900:focus {
  color: #1a202c;
}

.focus\:text-red-100:focus {
  color: #fff5f5;
}

.focus\:text-red-200:focus {
  color: #fed7d7;
}

.focus\:text-red-300:focus {
  color: #feb2b2;
}

.focus\:text-red-400:focus {
  color: #fc8181;
}

.focus\:text-red-500:focus {
  color: #f56565;
}

.focus\:text-red-600:focus {
  color: #e53e3e;
}

.focus\:text-red-700:focus {
  color: #c53030;
}

.focus\:text-red-800:focus {
  color: #9b2c2c;
}

.focus\:text-red-900:focus {
  color: #742a2a;
}

.focus\:text-orange-100:focus {
  color: #fffaf0;
}

.focus\:text-orange-200:focus {
  color: #feebc8;
}

.focus\:text-orange-300:focus {
  color: #fbd38d;
}

.focus\:text-orange-400:focus {
  color: #f6ad55;
}

.focus\:text-orange-500:focus {
  color: #ed8936;
}

.focus\:text-orange-600:focus {
  color: #dd6b20;
}

.focus\:text-orange-700:focus {
  color: #c05621;
}

.focus\:text-orange-800:focus {
  color: #9c4221;
}

.focus\:text-orange-900:focus {
  color: #7b341e;
}

.focus\:text-yellow-100:focus {
  color: #fffff0;
}

.focus\:text-yellow-200:focus {
  color: #fefcbf;
}

.focus\:text-yellow-300:focus {
  color: #faf089;
}

.focus\:text-yellow-400:focus {
  color: #f6e05e;
}

.focus\:text-yellow-500:focus {
  color: #ecc94b;
}

.focus\:text-yellow-600:focus {
  color: #d69e2e;
}

.focus\:text-yellow-700:focus {
  color: #b7791f;
}

.focus\:text-yellow-800:focus {
  color: #975a16;
}

.focus\:text-yellow-900:focus {
  color: #744210;
}

.focus\:text-green-100:focus {
  color: #f0fff4;
}

.focus\:text-green-200:focus {
  color: #c6f6d5;
}

.focus\:text-green-300:focus {
  color: #9ae6b4;
}

.focus\:text-green-400:focus {
  color: #68d391;
}

.focus\:text-green-500:focus {
  color: #48bb78;
}

.focus\:text-green-600:focus {
  color: #38a169;
}

.focus\:text-green-700:focus {
  color: #2f855a;
}

.focus\:text-green-800:focus {
  color: #276749;
}

.focus\:text-green-900:focus {
  color: #22543d;
}

.focus\:text-teal-100:focus {
  color: #e6fffa;
}

.focus\:text-teal-200:focus {
  color: #b2f5ea;
}

.focus\:text-teal-300:focus {
  color: #81e6d9;
}

.focus\:text-teal-400:focus {
  color: #4fd1c5;
}

.focus\:text-teal-500:focus {
  color: #38b2ac;
}

.focus\:text-teal-600:focus {
  color: #319795;
}

.focus\:text-teal-700:focus {
  color: #2c7a7b;
}

.focus\:text-teal-800:focus {
  color: #285e61;
}

.focus\:text-teal-900:focus {
  color: #234e52;
}

.focus\:text-blue-100:focus {
  color: #ebf8ff;
}

.focus\:text-blue-200:focus {
  color: #bee3f8;
}

.focus\:text-blue-300:focus {
  color: #90cdf4;
}

.focus\:text-blue-400:focus {
  color: #63b3ed;
}

.focus\:text-blue-500:focus {
  color: #4299e1;
}

.focus\:text-blue-600:focus {
  color: #3182ce;
}

.focus\:text-blue-700:focus {
  color: #2b6cb0;
}

.focus\:text-blue-800:focus {
  color: #2c5282;
}

.focus\:text-blue-900:focus {
  color: #2a4365;
}

.focus\:text-indigo-100:focus {
  color: #ebf4ff;
}

.focus\:text-indigo-200:focus {
  color: #c3dafe;
}

.focus\:text-indigo-300:focus {
  color: #a3bffa;
}

.focus\:text-indigo-400:focus {
  color: #7f9cf5;
}

.focus\:text-indigo-500:focus {
  color: #667eea;
}

.focus\:text-indigo-600:focus {
  color: #5a67d8;
}

.focus\:text-indigo-700:focus {
  color: #4c51bf;
}

.focus\:text-indigo-800:focus {
  color: #434190;
}

.focus\:text-indigo-900:focus {
  color: #3c366b;
}

.focus\:text-purple-100:focus {
  color: #faf5ff;
}

.focus\:text-purple-200:focus {
  color: #e9d8fd;
}

.focus\:text-purple-300:focus {
  color: #d6bcfa;
}

.focus\:text-purple-400:focus {
  color: #b794f4;
}

.focus\:text-purple-500:focus {
  color: #9f7aea;
}

.focus\:text-purple-600:focus {
  color: #805ad5;
}

.focus\:text-purple-700:focus {
  color: #6b46c1;
}

.focus\:text-purple-800:focus {
  color: #553c9a;
}

.focus\:text-purple-900:focus {
  color: #44337a;
}

.focus\:text-pink-100:focus {
  color: #fff5f7;
}

.focus\:text-pink-200:focus {
  color: #fed7e2;
}

.focus\:text-pink-300:focus {
  color: #fbb6ce;
}

.focus\:text-pink-400:focus {
  color: #f687b3;
}

.focus\:text-pink-500:focus {
  color: #ed64a6;
}

.focus\:text-pink-600:focus {
  color: #d53f8c;
}

.focus\:text-pink-700:focus {
  color: #b83280;
}

.focus\:text-pink-800:focus {
  color: #97266d;
}

.focus\:text-pink-900:focus {
  color: #702459;
}

.text-xs {
  font-size: 0.75rem;
}

.text-sm {
  font-size: 0.875rem;
}

.text-base {
  font-size: 1rem;
}

.text-lg {
  font-size: 1.125rem;
}

.text-xl {
  font-size: 1.25rem;
}

.text-2xl {
  font-size: 1.5rem;
}

.text-3xl {
  font-size: 1.875rem;
}

.text-4xl {
  font-size: 2.25rem;
}

.text-5xl {
  font-size: 3rem;
}

.text-6xl {
  font-size: 4rem;
}

.italic {
  font-style: italic;
}

.not-italic {
  font-style: normal;
}

.uppercase {
  text-transform: uppercase;
}

.lowercase {
  text-transform: lowercase;
}

.capitalize {
  text-transform: capitalize;
}

.normal-case {
  text-transform: none;
}

.underline {
  text-decoration: underline;
}

.line-through {
  text-decoration: line-through;
}

.no-underline {
  text-decoration: none;
}

.hover\:underline:hover {
  text-decoration: underline;
}

.hover\:line-through:hover {
  text-decoration: line-through;
}

.hover\:no-underline:hover {
  text-decoration: none;
}

.focus\:underline:focus {
  text-decoration: underline;
}

.focus\:line-through:focus {
  text-decoration: line-through;
}

.focus\:no-underline:focus {
  text-decoration: none;
}

.antialiased {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.subpixel-antialiased {
  -webkit-font-smoothing: auto;
  -moz-osx-font-smoothing: auto;
}

.tracking-tighter {
  letter-spacing: -0.05em;
}

.tracking-tight {
  letter-spacing: -0.025em;
}

.tracking-normal {
  letter-spacing: 0;
}

.tracking-wide {
  letter-spacing: 0.025em;
}

.tracking-wider {
  letter-spacing: 0.05em;
}

.tracking-widest {
  letter-spacing: 0.1em;
}

.select-none {
  user-select: none;
}

.select-text {
  user-select: text;
}

.select-all {
  user-select: all;
}

.select-auto {
  user-select: auto;
}

.align-baseline {
  vertical-align: baseline;
}

.align-top {
  vertical-align: top;
}

.align-middle {
  vertical-align: middle;
}

.align-bottom {
  vertical-align: bottom;
}

.align-text-top {
  vertical-align: text-top;
}

.align-text-bottom {
  vertical-align: text-bottom;
}

.visible {
  visibility: visible;
}

.invisible {
  visibility: hidden;
}

.whitespace-normal {
  white-space: normal;
}

.whitespace-no-wrap {
  white-space: nowrap;
}

.whitespace-pre {
  white-space: pre;
}

.whitespace-pre-line {
  white-space: pre-line;
}

.whitespace-pre-wrap {
  white-space: pre-wrap;
}

.break-normal {
  overflow-wrap: normal;
  word-break: normal;
}

.break-words {
  overflow-wrap: break-word;
}

.break-all {
  word-break: break-all;
}

.truncate {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.w-0 {
  width: 0;
}

.w-1 {
  width: 0.25rem;
}

.w-2 {
  width: 0.5rem;
}

.w-3 {
  width: 0.75rem;
}

.w-4 {
  width: 1rem;
}

.w-5 {
  width: 1.25rem;
}

.w-6 {
  width: 1.5rem;
}

.w-8 {
  width: 2rem;
}

.w-10 {
  width: 2.5rem;
}

.w-12 {
  width: 3rem;
}

.w-16 {
  width: 4rem;
}

.w-20 {
  width: 5rem;
}

.w-24 {
  width: 6rem;
}

.w-32 {
  width: 8rem;
}

.w-40 {
  width: 10rem;
}

.w-48 {
  width: 12rem;
}

.w-56 {
  width: 14rem;
}

.w-64 {
  width: 16rem;
}

.w-auto {
  width: auto;
}

.w-px {
  width: 1px;
}

.w-1\/2 {
  width: 50%;
}

.w-1\/3 {
  width: 33.333333%;
}

.w-2\/3 {
  width: 66.666667%;
}

.w-1\/4 {
  width: 25%;
}

.w-2\/4 {
  width: 50%;
}

.w-3\/4 {
  width: 75%;
}

.w-1\/5 {
  width: 20%;
}

.w-2\/5 {
  width: 40%;
}

.w-3\/5 {
  width: 60%;
}

.w-4\/5 {
  width: 80%;
}

.w-1\/6 {
  width: 16.666667%;
}

.w-2\/6 {
  width: 33.333333%;
}

.w-3\/6 {
  width: 50%;
}

.w-4\/6 {
  width: 66.666667%;
}

.w-5\/6 {
  width: 83.333333%;
}

.w-1\/12 {
  width: 8.333333%;
}

.w-2\/12 {
  width: 16.666667%;
}

.w-3\/12 {
  width: 25%;
}

.w-4\/12 {
  width: 33.333333%;
}

.w-5\/12 {
  width: 41.666667%;
}

.w-6\/12 {
  width: 50%;
}

.w-7\/12 {
  width: 58.333333%;
}

.w-8\/12 {
  width: 66.666667%;
}

.w-9\/12 {
  width: 75%;
}

.w-10\/12 {
  width: 83.333333%;
}

.w-11\/12 {
  width: 91.666667%;
}

.w-full {
  width: 100%;
}

.w-screen {
  width: 100vw;
}

.z-0 {
  z-index: 0;
}

.z-10 {
  z-index: 10;
}

.z-20 {
  z-index: 20;
}

.z-30 {
  z-index: 30;
}

.z-40 {
  z-index: 40;
}

.z-50 {
  z-index: 50;
}

.z-auto {
  z-index: auto;
}

.main-nav {
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
  background-color: #3d4852;
  padding: 1rem;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
}

.main-logo {
  display: block;
  display: flex;
  align-items: center;
  flex-shrink: 0;
  color: #fff;
}

.menu-item {
  text-decoration: none;
  display: block;
  padding: 1rem;
  color: #606f7b;
}

html{
  line-height: normal;
}

h1{
  font-size: 1.25rem;
  font-weight: 600;
}

/* ###### Modal ###### */

.modal-wrapper {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1050;
  visibility: hidden;
  opacity: 0;
  overflow-x: hidden;
  overflow-y: auto;
  outline: 0;
  -webkit-transition: opacity 400ms;
  transition: opacity 400ms;
}

.modal {
  position: relative;
  width: auto;
  margin: .5rem;
  pointer-events: none;
  -webkit-transform: translateY(-20%);
  -o-transform: translateY(-20%);
  transform: translateY(-20%);
  -webkit-transition: 300ms;
  transition: 300ms;
}

.modal-wrapper .overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0,0,0,0.5);
  z-index: -1;
}

.modal-is-open{
  visibility: visible;
  opacity: 1;
}

.modal-is-open > .modal{
  -webkit-transform: translateY(0);
  -o-transform: translateY(0);
  transform: translateY(0)
}

.modal-centered {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  min-height: calc(100% - (.5rem * 2));
}

@media (min-width: 576px){
  .modal{
    max-width: 500px;
    margin: 1.75rem auto;
  }

  .modal.modal-lg{ max-width: 800px !important
  }

  .modal-centered { min-height: calc(100% - (1.75rem * 2))
  }
}

.modal-content {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  width: 100%;
  pointer-events: auto;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0,0,0,.2);
  border-radius: .3rem;
  outline: 0;
}

@media (min-width: 640px) {
  .sm\:sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border-width: 0;
  }

  .sm\:not-sr-only {
    position: static;
    width: auto;
    height: auto;
    padding: 0;
    margin: 0;
    overflow: visible;
    clip: auto;
    white-space: normal;
  }

  .sm\:focus\:sr-only:focus {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border-width: 0;
  }

  .sm\:focus\:not-sr-only:focus {
    position: static;
    width: auto;
    height: auto;
    padding: 0;
    margin: 0;
    overflow: visible;
    clip: auto;
    white-space: normal;
  }

  .sm\:appearance-none {
    appearance: none;
  }

  .sm\:bg-fixed {
    background-attachment: fixed;
  }

  .sm\:bg-local {
    background-attachment: local;
  }

  .sm\:bg-scroll {
    background-attachment: scroll;
  }

  .sm\:bg-grey-darkest {
    background-color: #3d4852;
  }

  .sm\:bg-grey-darker {
    background-color: #606f7b;
  }

  .sm\:bg-grey-dark {
    background-color: #8795a1;
  }

  .sm\:bg-grey {
    background-color: #b8c2cc;
  }

  .sm\:bg-grey-light {
    background-color: #dae1e7;
  }

  .sm\:bg-grey-lighter {
    background-color: #f1f5f8;
  }

  .sm\:bg-grey-lightest {
    background-color: #f8fafc;
  }

  .sm\:bg-grey-mid-light {
    background-color: #f3f3f4;
  }

  .sm\:bg-white-lightest {
    background-color: #f4f4f4;
  }

  .sm\:bg-red-darkest {
    background-color: #3b0d0c;
  }

  .sm\:bg-red-darker {
    background-color: #621b18;
  }

  .sm\:bg-red-dark {
    background-color: #cc1f1a;
  }

  .sm\:bg-red-light {
    background-color: #ef5753;
  }

  .sm\:bg-red-lighter {
    background-color: #f9acaa;
  }

  .sm\:bg-red-lightest {
    background-color: #fcebea;
  }

  .sm\:bg-orange-darkest {
    background-color: #462a16;
  }

  .sm\:bg-orange-darker {
    background-color: #613b1f;
  }

  .sm\:bg-orange-dark {
    background-color: #de751f;
  }

  .sm\:bg-orange-light {
    background-color: #faad63;
  }

  .sm\:bg-orange-lighter {
    background-color: #fcd9b6;
  }

  .sm\:bg-orange-lightest {
    background-color: #fff5eb;
  }

  .sm\:bg-yellow-darkest {
    background-color: #453411;
  }

  .sm\:bg-yellow-darker {
    background-color: #684f1d;
  }

  .sm\:bg-yellow-dark {
    background-color: #f2d024;
  }

  .sm\:bg-yellow-light {
    background-color: #fff382;
  }

  .sm\:bg-yellow-lighter {
    background-color: #fff9c2;
  }

  .sm\:bg-yellow-lightest {
    background-color: #fcfbeb;
  }

  .sm\:bg-green-darkest {
    background-color: #0f2f21;
  }

  .sm\:bg-green-darker {
    background-color: #1a4731;
  }

  .sm\:bg-green-dark {
    background-color: #1f9d55;
  }

  .sm\:bg-green-light {
    background-color: #51d88a;
  }

  .sm\:bg-green-lighter {
    background-color: #a2f5bf;
  }

  .sm\:bg-green-lightest {
    background-color: #e3fcec;
  }

  .sm\:bg-teal-darkest {
    background-color: #0d3331;
  }

  .sm\:bg-teal-darker {
    background-color: #20504f;
  }

  .sm\:bg-teal-dark {
    background-color: #38a89d;
  }

  .sm\:bg-teal-light {
    background-color: #64d5ca;
  }

  .sm\:bg-teal-lighter {
    background-color: #a0f0ed;
  }

  .sm\:bg-teal-lightest {
    background-color: #e8fffe;
  }

  .sm\:bg-blue-darkest {
    background-color: #12283a;
  }

  .sm\:bg-blue-darker {
    background-color: #1c3d5a;
  }

  .sm\:bg-blue-dark {
    background-color: #2779bd;
  }

  .sm\:bg-blue-light {
    background-color: #6cb2eb;
  }

  .sm\:bg-blue-lighter {
    background-color: #bcdefa;
  }

  .sm\:bg-blue-lightest {
    background-color: #eff8ff;
  }

  .sm\:bg-indigo-darkest {
    background-color: #191e38;
  }

  .sm\:bg-indigo-darker {
    background-color: #2f365f;
  }

  .sm\:bg-indigo-dark {
    background-color: #5661b3;
  }

  .sm\:bg-indigo-light {
    background-color: #7886d7;
  }

  .sm\:bg-indigo-lighter {
    background-color: #b2b7ff;
  }

  .sm\:bg-indigo-lightest {
    background-color: #e6e8ff;
  }

  .sm\:bg-purple-darkest {
    background-color: #21183c;
  }

  .sm\:bg-purple-darker {
    background-color: #382b5f;
  }

  .sm\:bg-purple-dark {
    background-color: #794acf;
  }

  .sm\:bg-purple-light {
    background-color: #a779e9;
  }

  .sm\:bg-purple-lighter {
    background-color: #d6bbfc;
  }

  .sm\:bg-purple-lightest {
    background-color: #f3ebff;
  }

  .sm\:bg-pink-darkest {
    background-color: #451225;
  }

  .sm\:bg-pink-darker {
    background-color: #6f213f;
  }

  .sm\:bg-pink-dark {
    background-color: #eb5286;
  }

  .sm\:bg-pink-light {
    background-color: #fa7ea8;
  }

  .sm\:bg-pink-lighter {
    background-color: #ffbbca;
  }

  .sm\:bg-pink-lightest {
    background-color: #ffebef;
  }

  .sm\:bg-nav {
    background-color: #3F495E;
  }

  .sm\:bg-side-nav {
    background-color: #ECF0F1;
  }

  .sm\:bg-nav-item {
    background-color: #626b7a;
  }

  .sm\:bg-light-border {
    background-color: #dfe4e6;
  }

  .sm\:bg-white-medium {
    background-color: #FAFAFA;
  }

  .sm\:bg-white-medium-dark {
    background-color: #E5E9EB;
  }

  .sm\:bg-red-vibrant {
    background-color: #e46050;
  }

  .sm\:bg-red-vibrant-dark {
    background-color: #d64230;
  }

  .sm\:bg-primary {
    background-color: #51BE99;
  }

  .sm\:bg-primary-dark {
    background-color: #0e5f43;
  }

  .sm\:bg-warning {
    background-color: #f4ab43;
  }

  .sm\:bg-warning-dark {
    background-color: #c37c16;
  }

  .sm\:bg-black-dark {
    background-color: #272634;
  }

  .sm\:bg-black-darkest {
    background-color: #141418;
  }

  .sm\:bg-info {
    background-color: #52bcdc;
  }

  .sm\:bg-info-dark {
    background-color: #2cadd4;
  }

  .sm\:bg-success {
    background-color: #72b159;
  }

  .sm\:bg-success-dark {
    background-color: #5D9547;
  }

  .sm\:bg-transparent {
    background-color: transparent;
  }

  .sm\:bg-black {
    background-color: #000;
  }

  .sm\:bg-white {
    background-color: #fff;
  }

  .sm\:bg-gray-100 {
    background-color: #f7fafc;
  }

  .sm\:bg-gray-200 {
    background-color: #edf2f7;
  }

  .sm\:bg-gray-300 {
    background-color: #e2e8f0;
  }

  .sm\:bg-gray-400 {
    background-color: #cbd5e0;
  }

  .sm\:bg-gray-500 {
    background-color: #a0aec0;
  }

  .sm\:bg-gray-600 {
    background-color: #718096;
  }

  .sm\:bg-gray-700 {
    background-color: #4a5568;
  }

  .sm\:bg-gray-800 {
    background-color: #2d3748;
  }

  .sm\:bg-gray-900 {
    background-color: #1a202c;
  }

  .sm\:bg-red-100 {
    background-color: #fff5f5;
  }

  .sm\:bg-red-200 {
    background-color: #fed7d7;
  }

  .sm\:bg-red-300 {
    background-color: #feb2b2;
  }

  .sm\:bg-red-400 {
    background-color: #fc8181;
  }

  .sm\:bg-red-500 {
    background-color: #f56565;
  }

  .sm\:bg-red-600 {
    background-color: #e53e3e;
  }

  .sm\:bg-red-700 {
    background-color: #c53030;
  }

  .sm\:bg-red-800 {
    background-color: #9b2c2c;
  }

  .sm\:bg-red-900 {
    background-color: #742a2a;
  }

  .sm\:bg-orange-100 {
    background-color: #fffaf0;
  }

  .sm\:bg-orange-200 {
    background-color: #feebc8;
  }

  .sm\:bg-orange-300 {
    background-color: #fbd38d;
  }

  .sm\:bg-orange-400 {
    background-color: #f6ad55;
  }

  .sm\:bg-orange-500 {
    background-color: #ed8936;
  }

  .sm\:bg-orange-600 {
    background-color: #dd6b20;
  }

  .sm\:bg-orange-700 {
    background-color: #c05621;
  }

  .sm\:bg-orange-800 {
    background-color: #9c4221;
  }

  .sm\:bg-orange-900 {
    background-color: #7b341e;
  }

  .sm\:bg-yellow-100 {
    background-color: #fffff0;
  }

  .sm\:bg-yellow-200 {
    background-color: #fefcbf;
  }

  .sm\:bg-yellow-300 {
    background-color: #faf089;
  }

  .sm\:bg-yellow-400 {
    background-color: #f6e05e;
  }

  .sm\:bg-yellow-500 {
    background-color: #ecc94b;
  }

  .sm\:bg-yellow-600 {
    background-color: #d69e2e;
  }

  .sm\:bg-yellow-700 {
    background-color: #b7791f;
  }

  .sm\:bg-yellow-800 {
    background-color: #975a16;
  }

  .sm\:bg-yellow-900 {
    background-color: #744210;
  }

  .sm\:bg-green-100 {
    background-color: #f0fff4;
  }

  .sm\:bg-green-200 {
    background-color: #c6f6d5;
  }

  .sm\:bg-green-300 {
    background-color: #9ae6b4;
  }

  .sm\:bg-green-400 {
    background-color: #68d391;
  }

  .sm\:bg-green-500 {
    background-color: #48bb78;
  }

  .sm\:bg-green-600 {
    background-color: #38a169;
  }

  .sm\:bg-green-700 {
    background-color: #2f855a;
  }

  .sm\:bg-green-800 {
    background-color: #276749;
  }

  .sm\:bg-green-900 {
    background-color: #22543d;
  }

  .sm\:bg-teal-100 {
    background-color: #e6fffa;
  }

  .sm\:bg-teal-200 {
    background-color: #b2f5ea;
  }

  .sm\:bg-teal-300 {
    background-color: #81e6d9;
  }

  .sm\:bg-teal-400 {
    background-color: #4fd1c5;
  }

  .sm\:bg-teal-500 {
    background-color: #38b2ac;
  }

  .sm\:bg-teal-600 {
    background-color: #319795;
  }

  .sm\:bg-teal-700 {
    background-color: #2c7a7b;
  }

  .sm\:bg-teal-800 {
    background-color: #285e61;
  }

  .sm\:bg-teal-900 {
    background-color: #234e52;
  }

  .sm\:bg-blue-100 {
    background-color: #ebf8ff;
  }

  .sm\:bg-blue-200 {
    background-color: #bee3f8;
  }

  .sm\:bg-blue-300 {
    background-color: #90cdf4;
  }

  .sm\:bg-blue-400 {
    background-color: #63b3ed;
  }

  .sm\:bg-blue-500 {
    background-color: #4299e1;
  }

  .sm\:bg-blue-600 {
    background-color: #3182ce;
  }

  .sm\:bg-blue-700 {
    background-color: #2b6cb0;
  }

  .sm\:bg-blue-800 {
    background-color: #2c5282;
  }

  .sm\:bg-blue-900 {
    background-color: #2a4365;
  }

  .sm\:bg-indigo-100 {
    background-color: #ebf4ff;
  }

  .sm\:bg-indigo-200 {
    background-color: #c3dafe;
  }

  .sm\:bg-indigo-300 {
    background-color: #a3bffa;
  }

  .sm\:bg-indigo-400 {
    background-color: #7f9cf5;
  }

  .sm\:bg-indigo-500 {
    background-color: #667eea;
  }

  .sm\:bg-indigo-600 {
    background-color: #5a67d8;
  }

  .sm\:bg-indigo-700 {
    background-color: #4c51bf;
  }

  .sm\:bg-indigo-800 {
    background-color: #434190;
  }

  .sm\:bg-indigo-900 {
    background-color: #3c366b;
  }

  .sm\:bg-purple-100 {
    background-color: #faf5ff;
  }

  .sm\:bg-purple-200 {
    background-color: #e9d8fd;
  }

  .sm\:bg-purple-300 {
    background-color: #d6bcfa;
  }

  .sm\:bg-purple-400 {
    background-color: #b794f4;
  }

  .sm\:bg-purple-500 {
    background-color: #9f7aea;
  }

  .sm\:bg-purple-600 {
    background-color: #805ad5;
  }

  .sm\:bg-purple-700 {
    background-color: #6b46c1;
  }

  .sm\:bg-purple-800 {
    background-color: #553c9a;
  }

  .sm\:bg-purple-900 {
    background-color: #44337a;
  }

  .sm\:bg-pink-100 {
    background-color: #fff5f7;
  }

  .sm\:bg-pink-200 {
    background-color: #fed7e2;
  }

  .sm\:bg-pink-300 {
    background-color: #fbb6ce;
  }

  .sm\:bg-pink-400 {
    background-color: #f687b3;
  }

  .sm\:bg-pink-500 {
    background-color: #ed64a6;
  }

  .sm\:bg-pink-600 {
    background-color: #d53f8c;
  }

  .sm\:bg-pink-700 {
    background-color: #b83280;
  }

  .sm\:bg-pink-800 {
    background-color: #97266d;
  }

  .sm\:bg-pink-900 {
    background-color: #702459;
  }

  .sm\:hover\:bg-grey-darkest:hover {
    background-color: #3d4852;
  }

  .sm\:hover\:bg-grey-darker:hover {
    background-color: #606f7b;
  }

  .sm\:hover\:bg-grey-dark:hover {
    background-color: #8795a1;
  }

  .sm\:hover\:bg-grey:hover {
    background-color: #b8c2cc;
  }

  .sm\:hover\:bg-grey-light:hover {
    background-color: #dae1e7;
  }

  .sm\:hover\:bg-grey-lighter:hover {
    background-color: #f1f5f8;
  }

  .sm\:hover\:bg-grey-lightest:hover {
    background-color: #f8fafc;
  }

  .sm\:hover\:bg-grey-mid-light:hover {
    background-color: #f3f3f4;
  }

  .sm\:hover\:bg-white-lightest:hover {
    background-color: #f4f4f4;
  }

  .sm\:hover\:bg-red-darkest:hover {
    background-color: #3b0d0c;
  }

  .sm\:hover\:bg-red-darker:hover {
    background-color: #621b18;
  }

  .sm\:hover\:bg-red-dark:hover {
    background-color: #cc1f1a;
  }

  .sm\:hover\:bg-red-light:hover {
    background-color: #ef5753;
  }

  .sm\:hover\:bg-red-lighter:hover {
    background-color: #f9acaa;
  }

  .sm\:hover\:bg-red-lightest:hover {
    background-color: #fcebea;
  }

  .sm\:hover\:bg-orange-darkest:hover {
    background-color: #462a16;
  }

  .sm\:hover\:bg-orange-darker:hover {
    background-color: #613b1f;
  }

  .sm\:hover\:bg-orange-dark:hover {
    background-color: #de751f;
  }

  .sm\:hover\:bg-orange-light:hover {
    background-color: #faad63;
  }

  .sm\:hover\:bg-orange-lighter:hover {
    background-color: #fcd9b6;
  }

  .sm\:hover\:bg-orange-lightest:hover {
    background-color: #fff5eb;
  }

  .sm\:hover\:bg-yellow-darkest:hover {
    background-color: #453411;
  }

  .sm\:hover\:bg-yellow-darker:hover {
    background-color: #684f1d;
  }

  .sm\:hover\:bg-yellow-dark:hover {
    background-color: #f2d024;
  }

  .sm\:hover\:bg-yellow-light:hover {
    background-color: #fff382;
  }

  .sm\:hover\:bg-yellow-lighter:hover {
    background-color: #fff9c2;
  }

  .sm\:hover\:bg-yellow-lightest:hover {
    background-color: #fcfbeb;
  }

  .sm\:hover\:bg-green-darkest:hover {
    background-color: #0f2f21;
  }

  .sm\:hover\:bg-green-darker:hover {
    background-color: #1a4731;
  }

  .sm\:hover\:bg-green-dark:hover {
    background-color: #1f9d55;
  }

  .sm\:hover\:bg-green-light:hover {
    background-color: #51d88a;
  }

  .sm\:hover\:bg-green-lighter:hover {
    background-color: #a2f5bf;
  }

  .sm\:hover\:bg-green-lightest:hover {
    background-color: #e3fcec;
  }

  .sm\:hover\:bg-teal-darkest:hover {
    background-color: #0d3331;
  }

  .sm\:hover\:bg-teal-darker:hover {
    background-color: #20504f;
  }

  .sm\:hover\:bg-teal-dark:hover {
    background-color: #38a89d;
  }

  .sm\:hover\:bg-teal-light:hover {
    background-color: #64d5ca;
  }

  .sm\:hover\:bg-teal-lighter:hover {
    background-color: #a0f0ed;
  }

  .sm\:hover\:bg-teal-lightest:hover {
    background-color: #e8fffe;
  }

  .sm\:hover\:bg-blue-darkest:hover {
    background-color: #12283a;
  }

  .sm\:hover\:bg-blue-darker:hover {
    background-color: #1c3d5a;
  }

  .sm\:hover\:bg-blue-dark:hover {
    background-color: #2779bd;
  }

  .sm\:hover\:bg-blue-light:hover {
    background-color: #6cb2eb;
  }

  .sm\:hover\:bg-blue-lighter:hover {
    background-color: #bcdefa;
  }

  .sm\:hover\:bg-blue-lightest:hover {
    background-color: #eff8ff;
  }

  .sm\:hover\:bg-indigo-darkest:hover {
    background-color: #191e38;
  }

  .sm\:hover\:bg-indigo-darker:hover {
    background-color: #2f365f;
  }

  .sm\:hover\:bg-indigo-dark:hover {
    background-color: #5661b3;
  }

  .sm\:hover\:bg-indigo-light:hover {
    background-color: #7886d7;
  }

  .sm\:hover\:bg-indigo-lighter:hover {
    background-color: #b2b7ff;
  }

  .sm\:hover\:bg-indigo-lightest:hover {
    background-color: #e6e8ff;
  }

  .sm\:hover\:bg-purple-darkest:hover {
    background-color: #21183c;
  }

  .sm\:hover\:bg-purple-darker:hover {
    background-color: #382b5f;
  }

  .sm\:hover\:bg-purple-dark:hover {
    background-color: #794acf;
  }

  .sm\:hover\:bg-purple-light:hover {
    background-color: #a779e9;
  }

  .sm\:hover\:bg-purple-lighter:hover {
    background-color: #d6bbfc;
  }

  .sm\:hover\:bg-purple-lightest:hover {
    background-color: #f3ebff;
  }

  .sm\:hover\:bg-pink-darkest:hover {
    background-color: #451225;
  }

  .sm\:hover\:bg-pink-darker:hover {
    background-color: #6f213f;
  }

  .sm\:hover\:bg-pink-dark:hover {
    background-color: #eb5286;
  }

  .sm\:hover\:bg-pink-light:hover {
    background-color: #fa7ea8;
  }

  .sm\:hover\:bg-pink-lighter:hover {
    background-color: #ffbbca;
  }

  .sm\:hover\:bg-pink-lightest:hover {
    background-color: #ffebef;
  }

  .sm\:hover\:bg-nav:hover {
    background-color: #3F495E;
  }

  .sm\:hover\:bg-side-nav:hover {
    background-color: #ECF0F1;
  }

  .sm\:hover\:bg-nav-item:hover {
    background-color: #626b7a;
  }

  .sm\:hover\:bg-light-border:hover {
    background-color: #dfe4e6;
  }

  .sm\:hover\:bg-white-medium:hover {
    background-color: #FAFAFA;
  }

  .sm\:hover\:bg-white-medium-dark:hover {
    background-color: #E5E9EB;
  }

  .sm\:hover\:bg-red-vibrant:hover {
    background-color: #e46050;
  }

  .sm\:hover\:bg-red-vibrant-dark:hover {
    background-color: #d64230;
  }

  .sm\:hover\:bg-primary:hover {
    background-color: #51BE99;
  }

  .sm\:hover\:bg-primary-dark:hover {
    background-color: #0e5f43;
  }

  .sm\:hover\:bg-warning:hover {
    background-color: #f4ab43;
  }

  .sm\:hover\:bg-warning-dark:hover {
    background-color: #c37c16;
  }

  .sm\:hover\:bg-black-dark:hover {
    background-color: #272634;
  }

  .sm\:hover\:bg-black-darkest:hover {
    background-color: #141418;
  }

  .sm\:hover\:bg-info:hover {
    background-color: #52bcdc;
  }

  .sm\:hover\:bg-info-dark:hover {
    background-color: #2cadd4;
  }

  .sm\:hover\:bg-success:hover {
    background-color: #72b159;
  }

  .sm\:hover\:bg-success-dark:hover {
    background-color: #5D9547;
  }

  .sm\:hover\:bg-transparent:hover {
    background-color: transparent;
  }

  .sm\:hover\:bg-black:hover {
    background-color: #000;
  }

  .sm\:hover\:bg-white:hover {
    background-color: #fff;
  }

  .sm\:hover\:bg-gray-100:hover {
    background-color: #f7fafc;
  }

  .sm\:hover\:bg-gray-200:hover {
    background-color: #edf2f7;
  }

  .sm\:hover\:bg-gray-300:hover {
    background-color: #e2e8f0;
  }

  .sm\:hover\:bg-gray-400:hover {
    background-color: #cbd5e0;
  }

  .sm\:hover\:bg-gray-500:hover {
    background-color: #a0aec0;
  }

  .sm\:hover\:bg-gray-600:hover {
    background-color: #718096;
  }

  .sm\:hover\:bg-gray-700:hover {
    background-color: #4a5568;
  }

  .sm\:hover\:bg-gray-800:hover {
    background-color: #2d3748;
  }

  .sm\:hover\:bg-gray-900:hover {
    background-color: #1a202c;
  }

  .sm\:hover\:bg-red-100:hover {
    background-color: #fff5f5;
  }

  .sm\:hover\:bg-red-200:hover {
    background-color: #fed7d7;
  }

  .sm\:hover\:bg-red-300:hover {
    background-color: #feb2b2;
  }

  .sm\:hover\:bg-red-400:hover {
    background-color: #fc8181;
  }

  .sm\:hover\:bg-red-500:hover {
    background-color: #f56565;
  }

  .sm\:hover\:bg-red-600:hover {
    background-color: #e53e3e;
  }

  .sm\:hover\:bg-red-700:hover {
    background-color: #c53030;
  }

  .sm\:hover\:bg-red-800:hover {
    background-color: #9b2c2c;
  }

  .sm\:hover\:bg-red-900:hover {
    background-color: #742a2a;
  }

  .sm\:hover\:bg-orange-100:hover {
    background-color: #fffaf0;
  }

  .sm\:hover\:bg-orange-200:hover {
    background-color: #feebc8;
  }

  .sm\:hover\:bg-orange-300:hover {
    background-color: #fbd38d;
  }

  .sm\:hover\:bg-orange-400:hover {
    background-color: #f6ad55;
  }

  .sm\:hover\:bg-orange-500:hover {
    background-color: #ed8936;
  }

  .sm\:hover\:bg-orange-600:hover {
    background-color: #dd6b20;
  }

  .sm\:hover\:bg-orange-700:hover {
    background-color: #c05621;
  }

  .sm\:hover\:bg-orange-800:hover {
    background-color: #9c4221;
  }

  .sm\:hover\:bg-orange-900:hover {
    background-color: #7b341e;
  }

  .sm\:hover\:bg-yellow-100:hover {
    background-color: #fffff0;
  }

  .sm\:hover\:bg-yellow-200:hover {
    background-color: #fefcbf;
  }

  .sm\:hover\:bg-yellow-300:hover {
    background-color: #faf089;
  }

  .sm\:hover\:bg-yellow-400:hover {
    background-color: #f6e05e;
  }

  .sm\:hover\:bg-yellow-500:hover {
    background-color: #ecc94b;
  }

  .sm\:hover\:bg-yellow-600:hover {
    background-color: #d69e2e;
  }

  .sm\:hover\:bg-yellow-700:hover {
    background-color: #b7791f;
  }

  .sm\:hover\:bg-yellow-800:hover {
    background-color: #975a16;
  }

  .sm\:hover\:bg-yellow-900:hover {
    background-color: #744210;
  }

  .sm\:hover\:bg-green-100:hover {
    background-color: #f0fff4;
  }

  .sm\:hover\:bg-green-200:hover {
    background-color: #c6f6d5;
  }

  .sm\:hover\:bg-green-300:hover {
    background-color: #9ae6b4;
  }

  .sm\:hover\:bg-green-400:hover {
    background-color: #68d391;
  }

  .sm\:hover\:bg-green-500:hover {
    background-color: #48bb78;
  }

  .sm\:hover\:bg-green-600:hover {
    background-color: #38a169;
  }

  .sm\:hover\:bg-green-700:hover {
    background-color: #2f855a;
  }

  .sm\:hover\:bg-green-800:hover {
    background-color: #276749;
  }

  .sm\:hover\:bg-green-900:hover {
    background-color: #22543d;
  }

  .sm\:hover\:bg-teal-100:hover {
    background-color: #e6fffa;
  }

  .sm\:hover\:bg-teal-200:hover {
    background-color: #b2f5ea;
  }

  .sm\:hover\:bg-teal-300:hover {
    background-color: #81e6d9;
  }

  .sm\:hover\:bg-teal-400:hover {
    background-color: #4fd1c5;
  }

  .sm\:hover\:bg-teal-500:hover {
    background-color: #38b2ac;
  }

  .sm\:hover\:bg-teal-600:hover {
    background-color: #319795;
  }

  .sm\:hover\:bg-teal-700:hover {
    background-color: #2c7a7b;
  }

  .sm\:hover\:bg-teal-800:hover {
    background-color: #285e61;
  }

  .sm\:hover\:bg-teal-900:hover {
    background-color: #234e52;
  }

  .sm\:hover\:bg-blue-100:hover {
    background-color: #ebf8ff;
  }

  .sm\:hover\:bg-blue-200:hover {
    background-color: #bee3f8;
  }

  .sm\:hover\:bg-blue-300:hover {
    background-color: #90cdf4;
  }

  .sm\:hover\:bg-blue-400:hover {
    background-color: #63b3ed;
  }

  .sm\:hover\:bg-blue-500:hover {
    background-color: #4299e1;
  }

  .sm\:hover\:bg-blue-600:hover {
    background-color: #3182ce;
  }

  .sm\:hover\:bg-blue-700:hover {
    background-color: #2b6cb0;
  }

  .sm\:hover\:bg-blue-800:hover {
    background-color: #2c5282;
  }

  .sm\:hover\:bg-blue-900:hover {
    background-color: #2a4365;
  }

  .sm\:hover\:bg-indigo-100:hover {
    background-color: #ebf4ff;
  }

  .sm\:hover\:bg-indigo-200:hover {
    background-color: #c3dafe;
  }

  .sm\:hover\:bg-indigo-300:hover {
    background-color: #a3bffa;
  }

  .sm\:hover\:bg-indigo-400:hover {
    background-color: #7f9cf5;
  }

  .sm\:hover\:bg-indigo-500:hover {
    background-color: #667eea;
  }

  .sm\:hover\:bg-indigo-600:hover {
    background-color: #5a67d8;
  }

  .sm\:hover\:bg-indigo-700:hover {
    background-color: #4c51bf;
  }

  .sm\:hover\:bg-indigo-800:hover {
    background-color: #434190;
  }

  .sm\:hover\:bg-indigo-900:hover {
    background-color: #3c366b;
  }

  .sm\:hover\:bg-purple-100:hover {
    background-color: #faf5ff;
  }

  .sm\:hover\:bg-purple-200:hover {
    background-color: #e9d8fd;
  }

  .sm\:hover\:bg-purple-300:hover {
    background-color: #d6bcfa;
  }

  .sm\:hover\:bg-purple-400:hover {
    background-color: #b794f4;
  }

  .sm\:hover\:bg-purple-500:hover {
    background-color: #9f7aea;
  }

  .sm\:hover\:bg-purple-600:hover {
    background-color: #805ad5;
  }

  .sm\:hover\:bg-purple-700:hover {
    background-color: #6b46c1;
  }

  .sm\:hover\:bg-purple-800:hover {
    background-color: #553c9a;
  }

  .sm\:hover\:bg-purple-900:hover {
    background-color: #44337a;
  }

  .sm\:hover\:bg-pink-100:hover {
    background-color: #fff5f7;
  }

  .sm\:hover\:bg-pink-200:hover {
    background-color: #fed7e2;
  }

  .sm\:hover\:bg-pink-300:hover {
    background-color: #fbb6ce;
  }

  .sm\:hover\:bg-pink-400:hover {
    background-color: #f687b3;
  }

  .sm\:hover\:bg-pink-500:hover {
    background-color: #ed64a6;
  }

  .sm\:hover\:bg-pink-600:hover {
    background-color: #d53f8c;
  }

  .sm\:hover\:bg-pink-700:hover {
    background-color: #b83280;
  }

  .sm\:hover\:bg-pink-800:hover {
    background-color: #97266d;
  }

  .sm\:hover\:bg-pink-900:hover {
    background-color: #702459;
  }

  .sm\:focus\:bg-grey-darkest:focus {
    background-color: #3d4852;
  }

  .sm\:focus\:bg-grey-darker:focus {
    background-color: #606f7b;
  }

  .sm\:focus\:bg-grey-dark:focus {
    background-color: #8795a1;
  }

  .sm\:focus\:bg-grey:focus {
    background-color: #b8c2cc;
  }

  .sm\:focus\:bg-grey-light:focus {
    background-color: #dae1e7;
  }

  .sm\:focus\:bg-grey-lighter:focus {
    background-color: #f1f5f8;
  }

  .sm\:focus\:bg-grey-lightest:focus {
    background-color: #f8fafc;
  }

  .sm\:focus\:bg-grey-mid-light:focus {
    background-color: #f3f3f4;
  }

  .sm\:focus\:bg-white-lightest:focus {
    background-color: #f4f4f4;
  }

  .sm\:focus\:bg-red-darkest:focus {
    background-color: #3b0d0c;
  }

  .sm\:focus\:bg-red-darker:focus {
    background-color: #621b18;
  }

  .sm\:focus\:bg-red-dark:focus {
    background-color: #cc1f1a;
  }

  .sm\:focus\:bg-red-light:focus {
    background-color: #ef5753;
  }

  .sm\:focus\:bg-red-lighter:focus {
    background-color: #f9acaa;
  }

  .sm\:focus\:bg-red-lightest:focus {
    background-color: #fcebea;
  }

  .sm\:focus\:bg-orange-darkest:focus {
    background-color: #462a16;
  }

  .sm\:focus\:bg-orange-darker:focus {
    background-color: #613b1f;
  }

  .sm\:focus\:bg-orange-dark:focus {
    background-color: #de751f;
  }

  .sm\:focus\:bg-orange-light:focus {
    background-color: #faad63;
  }

  .sm\:focus\:bg-orange-lighter:focus {
    background-color: #fcd9b6;
  }

  .sm\:focus\:bg-orange-lightest:focus {
    background-color: #fff5eb;
  }

  .sm\:focus\:bg-yellow-darkest:focus {
    background-color: #453411;
  }

  .sm\:focus\:bg-yellow-darker:focus {
    background-color: #684f1d;
  }

  .sm\:focus\:bg-yellow-dark:focus {
    background-color: #f2d024;
  }

  .sm\:focus\:bg-yellow-light:focus {
    background-color: #fff382;
  }

  .sm\:focus\:bg-yellow-lighter:focus {
    background-color: #fff9c2;
  }

  .sm\:focus\:bg-yellow-lightest:focus {
    background-color: #fcfbeb;
  }

  .sm\:focus\:bg-green-darkest:focus {
    background-color: #0f2f21;
  }

  .sm\:focus\:bg-green-darker:focus {
    background-color: #1a4731;
  }

  .sm\:focus\:bg-green-dark:focus {
    background-color: #1f9d55;
  }

  .sm\:focus\:bg-green-light:focus {
    background-color: #51d88a;
  }

  .sm\:focus\:bg-green-lighter:focus {
    background-color: #a2f5bf;
  }

  .sm\:focus\:bg-green-lightest:focus {
    background-color: #e3fcec;
  }

  .sm\:focus\:bg-teal-darkest:focus {
    background-color: #0d3331;
  }

  .sm\:focus\:bg-teal-darker:focus {
    background-color: #20504f;
  }

  .sm\:focus\:bg-teal-dark:focus {
    background-color: #38a89d;
  }

  .sm\:focus\:bg-teal-light:focus {
    background-color: #64d5ca;
  }

  .sm\:focus\:bg-teal-lighter:focus {
    background-color: #a0f0ed;
  }

  .sm\:focus\:bg-teal-lightest:focus {
    background-color: #e8fffe;
  }

  .sm\:focus\:bg-blue-darkest:focus {
    background-color: #12283a;
  }

  .sm\:focus\:bg-blue-darker:focus {
    background-color: #1c3d5a;
  }

  .sm\:focus\:bg-blue-dark:focus {
    background-color: #2779bd;
  }

  .sm\:focus\:bg-blue-light:focus {
    background-color: #6cb2eb;
  }

  .sm\:focus\:bg-blue-lighter:focus {
    background-color: #bcdefa;
  }

  .sm\:focus\:bg-blue-lightest:focus {
    background-color: #eff8ff;
  }

  .sm\:focus\:bg-indigo-darkest:focus {
    background-color: #191e38;
  }

  .sm\:focus\:bg-indigo-darker:focus {
    background-color: #2f365f;
  }

  .sm\:focus\:bg-indigo-dark:focus {
    background-color: #5661b3;
  }

  .sm\:focus\:bg-indigo-light:focus {
    background-color: #7886d7;
  }

  .sm\:focus\:bg-indigo-lighter:focus {
    background-color: #b2b7ff;
  }

  .sm\:focus\:bg-indigo-lightest:focus {
    background-color: #e6e8ff;
  }

  .sm\:focus\:bg-purple-darkest:focus {
    background-color: #21183c;
  }

  .sm\:focus\:bg-purple-darker:focus {
    background-color: #382b5f;
  }

  .sm\:focus\:bg-purple-dark:focus {
    background-color: #794acf;
  }

  .sm\:focus\:bg-purple-light:focus {
    background-color: #a779e9;
  }

  .sm\:focus\:bg-purple-lighter:focus {
    background-color: #d6bbfc;
  }

  .sm\:focus\:bg-purple-lightest:focus {
    background-color: #f3ebff;
  }

  .sm\:focus\:bg-pink-darkest:focus {
    background-color: #451225;
  }

  .sm\:focus\:bg-pink-darker:focus {
    background-color: #6f213f;
  }

  .sm\:focus\:bg-pink-dark:focus {
    background-color: #eb5286;
  }

  .sm\:focus\:bg-pink-light:focus {
    background-color: #fa7ea8;
  }

  .sm\:focus\:bg-pink-lighter:focus {
    background-color: #ffbbca;
  }

  .sm\:focus\:bg-pink-lightest:focus {
    background-color: #ffebef;
  }

  .sm\:focus\:bg-nav:focus {
    background-color: #3F495E;
  }

  .sm\:focus\:bg-side-nav:focus {
    background-color: #ECF0F1;
  }

  .sm\:focus\:bg-nav-item:focus {
    background-color: #626b7a;
  }

  .sm\:focus\:bg-light-border:focus {
    background-color: #dfe4e6;
  }

  .sm\:focus\:bg-white-medium:focus {
    background-color: #FAFAFA;
  }

  .sm\:focus\:bg-white-medium-dark:focus {
    background-color: #E5E9EB;
  }

  .sm\:focus\:bg-red-vibrant:focus {
    background-color: #e46050;
  }

  .sm\:focus\:bg-red-vibrant-dark:focus {
    background-color: #d64230;
  }

  .sm\:focus\:bg-primary:focus {
    background-color: #51BE99;
  }

  .sm\:focus\:bg-primary-dark:focus {
    background-color: #0e5f43;
  }

  .sm\:focus\:bg-warning:focus {
    background-color: #f4ab43;
  }

  .sm\:focus\:bg-warning-dark:focus {
    background-color: #c37c16;
  }

  .sm\:focus\:bg-black-dark:focus {
    background-color: #272634;
  }

  .sm\:focus\:bg-black-darkest:focus {
    background-color: #141418;
  }

  .sm\:focus\:bg-info:focus {
    background-color: #52bcdc;
  }

  .sm\:focus\:bg-info-dark:focus {
    background-color: #2cadd4;
  }

  .sm\:focus\:bg-success:focus {
    background-color: #72b159;
  }

  .sm\:focus\:bg-success-dark:focus {
    background-color: #5D9547;
  }

  .sm\:focus\:bg-transparent:focus {
    background-color: transparent;
  }

  .sm\:focus\:bg-black:focus {
    background-color: #000;
  }

  .sm\:focus\:bg-white:focus {
    background-color: #fff;
  }

  .sm\:focus\:bg-gray-100:focus {
    background-color: #f7fafc;
  }

  .sm\:focus\:bg-gray-200:focus {
    background-color: #edf2f7;
  }

  .sm\:focus\:bg-gray-300:focus {
    background-color: #e2e8f0;
  }

  .sm\:focus\:bg-gray-400:focus {
    background-color: #cbd5e0;
  }

  .sm\:focus\:bg-gray-500:focus {
    background-color: #a0aec0;
  }

  .sm\:focus\:bg-gray-600:focus {
    background-color: #718096;
  }

  .sm\:focus\:bg-gray-700:focus {
    background-color: #4a5568;
  }

  .sm\:focus\:bg-gray-800:focus {
    background-color: #2d3748;
  }

  .sm\:focus\:bg-gray-900:focus {
    background-color: #1a202c;
  }

  .sm\:focus\:bg-red-100:focus {
    background-color: #fff5f5;
  }

  .sm\:focus\:bg-red-200:focus {
    background-color: #fed7d7;
  }

  .sm\:focus\:bg-red-300:focus {
    background-color: #feb2b2;
  }

  .sm\:focus\:bg-red-400:focus {
    background-color: #fc8181;
  }

  .sm\:focus\:bg-red-500:focus {
    background-color: #f56565;
  }

  .sm\:focus\:bg-red-600:focus {
    background-color: #e53e3e;
  }

  .sm\:focus\:bg-red-700:focus {
    background-color: #c53030;
  }

  .sm\:focus\:bg-red-800:focus {
    background-color: #9b2c2c;
  }

  .sm\:focus\:bg-red-900:focus {
    background-color: #742a2a;
  }

  .sm\:focus\:bg-orange-100:focus {
    background-color: #fffaf0;
  }

  .sm\:focus\:bg-orange-200:focus {
    background-color: #feebc8;
  }

  .sm\:focus\:bg-orange-300:focus {
    background-color: #fbd38d;
  }

  .sm\:focus\:bg-orange-400:focus {
    background-color: #f6ad55;
  }

  .sm\:focus\:bg-orange-500:focus {
    background-color: #ed8936;
  }

  .sm\:focus\:bg-orange-600:focus {
    background-color: #dd6b20;
  }

  .sm\:focus\:bg-orange-700:focus {
    background-color: #c05621;
  }

  .sm\:focus\:bg-orange-800:focus {
    background-color: #9c4221;
  }

  .sm\:focus\:bg-orange-900:focus {
    background-color: #7b341e;
  }

  .sm\:focus\:bg-yellow-100:focus {
    background-color: #fffff0;
  }

  .sm\:focus\:bg-yellow-200:focus {
    background-color: #fefcbf;
  }

  .sm\:focus\:bg-yellow-300:focus {
    background-color: #faf089;
  }

  .sm\:focus\:bg-yellow-400:focus {
    background-color: #f6e05e;
  }

  .sm\:focus\:bg-yellow-500:focus {
    background-color: #ecc94b;
  }

  .sm\:focus\:bg-yellow-600:focus {
    background-color: #d69e2e;
  }

  .sm\:focus\:bg-yellow-700:focus {
    background-color: #b7791f;
  }

  .sm\:focus\:bg-yellow-800:focus {
    background-color: #975a16;
  }

  .sm\:focus\:bg-yellow-900:focus {
    background-color: #744210;
  }

  .sm\:focus\:bg-green-100:focus {
    background-color: #f0fff4;
  }

  .sm\:focus\:bg-green-200:focus {
    background-color: #c6f6d5;
  }

  .sm\:focus\:bg-green-300:focus {
    background-color: #9ae6b4;
  }

  .sm\:focus\:bg-green-400:focus {
    background-color: #68d391;
  }

  .sm\:focus\:bg-green-500:focus {
    background-color: #48bb78;
  }

  .sm\:focus\:bg-green-600:focus {
    background-color: #38a169;
  }

  .sm\:focus\:bg-green-700:focus {
    background-color: #2f855a;
  }

  .sm\:focus\:bg-green-800:focus {
    background-color: #276749;
  }

  .sm\:focus\:bg-green-900:focus {
    background-color: #22543d;
  }

  .sm\:focus\:bg-teal-100:focus {
    background-color: #e6fffa;
  }

  .sm\:focus\:bg-teal-200:focus {
    background-color: #b2f5ea;
  }

  .sm\:focus\:bg-teal-300:focus {
    background-color: #81e6d9;
  }

  .sm\:focus\:bg-teal-400:focus {
    background-color: #4fd1c5;
  }

  .sm\:focus\:bg-teal-500:focus {
    background-color: #38b2ac;
  }

  .sm\:focus\:bg-teal-600:focus {
    background-color: #319795;
  }

  .sm\:focus\:bg-teal-700:focus {
    background-color: #2c7a7b;
  }

  .sm\:focus\:bg-teal-800:focus {
    background-color: #285e61;
  }

  .sm\:focus\:bg-teal-900:focus {
    background-color: #234e52;
  }

  .sm\:focus\:bg-blue-100:focus {
    background-color: #ebf8ff;
  }

  .sm\:focus\:bg-blue-200:focus {
    background-color: #bee3f8;
  }

  .sm\:focus\:bg-blue-300:focus {
    background-color: #90cdf4;
  }

  .sm\:focus\:bg-blue-400:focus {
    background-color: #63b3ed;
  }

  .sm\:focus\:bg-blue-500:focus {
    background-color: #4299e1;
  }

  .sm\:focus\:bg-blue-600:focus {
    background-color: #3182ce;
  }

  .sm\:focus\:bg-blue-700:focus {
    background-color: #2b6cb0;
  }

  .sm\:focus\:bg-blue-800:focus {
    background-color: #2c5282;
  }

  .sm\:focus\:bg-blue-900:focus {
    background-color: #2a4365;
  }

  .sm\:focus\:bg-indigo-100:focus {
    background-color: #ebf4ff;
  }

  .sm\:focus\:bg-indigo-200:focus {
    background-color: #c3dafe;
  }

  .sm\:focus\:bg-indigo-300:focus {
    background-color: #a3bffa;
  }

  .sm\:focus\:bg-indigo-400:focus {
    background-color: #7f9cf5;
  }

  .sm\:focus\:bg-indigo-500:focus {
    background-color: #667eea;
  }

  .sm\:focus\:bg-indigo-600:focus {
    background-color: #5a67d8;
  }

  .sm\:focus\:bg-indigo-700:focus {
    background-color: #4c51bf;
  }

  .sm\:focus\:bg-indigo-800:focus {
    background-color: #434190;
  }

  .sm\:focus\:bg-indigo-900:focus {
    background-color: #3c366b;
  }

  .sm\:focus\:bg-purple-100:focus {
    background-color: #faf5ff;
  }

  .sm\:focus\:bg-purple-200:focus {
    background-color: #e9d8fd;
  }

  .sm\:focus\:bg-purple-300:focus {
    background-color: #d6bcfa;
  }

  .sm\:focus\:bg-purple-400:focus {
    background-color: #b794f4;
  }

  .sm\:focus\:bg-purple-500:focus {
    background-color: #9f7aea;
  }

  .sm\:focus\:bg-purple-600:focus {
    background-color: #805ad5;
  }

  .sm\:focus\:bg-purple-700:focus {
    background-color: #6b46c1;
  }

  .sm\:focus\:bg-purple-800:focus {
    background-color: #553c9a;
  }

  .sm\:focus\:bg-purple-900:focus {
    background-color: #44337a;
  }

  .sm\:focus\:bg-pink-100:focus {
    background-color: #fff5f7;
  }

  .sm\:focus\:bg-pink-200:focus {
    background-color: #fed7e2;
  }

  .sm\:focus\:bg-pink-300:focus {
    background-color: #fbb6ce;
  }

  .sm\:focus\:bg-pink-400:focus {
    background-color: #f687b3;
  }

  .sm\:focus\:bg-pink-500:focus {
    background-color: #ed64a6;
  }

  .sm\:focus\:bg-pink-600:focus {
    background-color: #d53f8c;
  }

  .sm\:focus\:bg-pink-700:focus {
    background-color: #b83280;
  }

  .sm\:focus\:bg-pink-800:focus {
    background-color: #97266d;
  }

  .sm\:focus\:bg-pink-900:focus {
    background-color: #702459;
  }

  .sm\:bg-bottom {
    background-position: bottom;
  }

  .sm\:bg-center {
    background-position: center;
  }

  .sm\:bg-left {
    background-position: left;
  }

  .sm\:bg-left-bottom {
    background-position: left bottom;
  }

  .sm\:bg-left-top {
    background-position: left top;
  }

  .sm\:bg-right {
    background-position: right;
  }

  .sm\:bg-right-bottom {
    background-position: right bottom;
  }

  .sm\:bg-right-top {
    background-position: right top;
  }

  .sm\:bg-top {
    background-position: top;
  }

  .sm\:bg-repeat {
    background-repeat: repeat;
  }

  .sm\:bg-no-repeat {
    background-repeat: no-repeat;
  }

  .sm\:bg-repeat-x {
    background-repeat: repeat-x;
  }

  .sm\:bg-repeat-y {
    background-repeat: repeat-y;
  }

  .sm\:bg-repeat-round {
    background-repeat: round;
  }

  .sm\:bg-repeat-space {
    background-repeat: space;
  }

  .sm\:bg-auto {
    background-size: auto;
  }

  .sm\:bg-cover {
    background-size: cover;
  }

  .sm\:bg-contain {
    background-size: contain;
  }

  .sm\:border-collapse {
    border-collapse: collapse;
  }

  .sm\:border-separate {
    border-collapse: separate;
  }

  .sm\:border-grey-darkest {
    border-color: #3d4852;
  }

  .sm\:border-grey-darker {
    border-color: #606f7b;
  }

  .sm\:border-grey-dark {
    border-color: #8795a1;
  }

  .sm\:border-grey {
    border-color: #b8c2cc;
  }

  .sm\:border-grey-light {
    border-color: #dae1e7;
  }

  .sm\:border-grey-lighter {
    border-color: #f1f5f8;
  }

  .sm\:border-grey-lightest {
    border-color: #f8fafc;
  }

  .sm\:border-grey-mid-light {
    border-color: #f3f3f4;
  }

  .sm\:border-white-lightest {
    border-color: #f4f4f4;
  }

  .sm\:border-red-darkest {
    border-color: #3b0d0c;
  }

  .sm\:border-red-darker {
    border-color: #621b18;
  }

  .sm\:border-red-dark {
    border-color: #cc1f1a;
  }

  .sm\:border-red-light {
    border-color: #ef5753;
  }

  .sm\:border-red-lighter {
    border-color: #f9acaa;
  }

  .sm\:border-red-lightest {
    border-color: #fcebea;
  }

  .sm\:border-orange-darkest {
    border-color: #462a16;
  }

  .sm\:border-orange-darker {
    border-color: #613b1f;
  }

  .sm\:border-orange-dark {
    border-color: #de751f;
  }

  .sm\:border-orange-light {
    border-color: #faad63;
  }

  .sm\:border-orange-lighter {
    border-color: #fcd9b6;
  }

  .sm\:border-orange-lightest {
    border-color: #fff5eb;
  }

  .sm\:border-yellow-darkest {
    border-color: #453411;
  }

  .sm\:border-yellow-darker {
    border-color: #684f1d;
  }

  .sm\:border-yellow-dark {
    border-color: #f2d024;
  }

  .sm\:border-yellow-light {
    border-color: #fff382;
  }

  .sm\:border-yellow-lighter {
    border-color: #fff9c2;
  }

  .sm\:border-yellow-lightest {
    border-color: #fcfbeb;
  }

  .sm\:border-green-darkest {
    border-color: #0f2f21;
  }

  .sm\:border-green-darker {
    border-color: #1a4731;
  }

  .sm\:border-green-dark {
    border-color: #1f9d55;
  }

  .sm\:border-green-light {
    border-color: #51d88a;
  }

  .sm\:border-green-lighter {
    border-color: #a2f5bf;
  }

  .sm\:border-green-lightest {
    border-color: #e3fcec;
  }

  .sm\:border-teal-darkest {
    border-color: #0d3331;
  }

  .sm\:border-teal-darker {
    border-color: #20504f;
  }

  .sm\:border-teal-dark {
    border-color: #38a89d;
  }

  .sm\:border-teal-light {
    border-color: #64d5ca;
  }

  .sm\:border-teal-lighter {
    border-color: #a0f0ed;
  }

  .sm\:border-teal-lightest {
    border-color: #e8fffe;
  }

  .sm\:border-blue-darkest {
    border-color: #12283a;
  }

  .sm\:border-blue-darker {
    border-color: #1c3d5a;
  }

  .sm\:border-blue-dark {
    border-color: #2779bd;
  }

  .sm\:border-blue-light {
    border-color: #6cb2eb;
  }

  .sm\:border-blue-lighter {
    border-color: #bcdefa;
  }

  .sm\:border-blue-lightest {
    border-color: #eff8ff;
  }

  .sm\:border-indigo-darkest {
    border-color: #191e38;
  }

  .sm\:border-indigo-darker {
    border-color: #2f365f;
  }

  .sm\:border-indigo-dark {
    border-color: #5661b3;
  }

  .sm\:border-indigo-light {
    border-color: #7886d7;
  }

  .sm\:border-indigo-lighter {
    border-color: #b2b7ff;
  }

  .sm\:border-indigo-lightest {
    border-color: #e6e8ff;
  }

  .sm\:border-purple-darkest {
    border-color: #21183c;
  }

  .sm\:border-purple-darker {
    border-color: #382b5f;
  }

  .sm\:border-purple-dark {
    border-color: #794acf;
  }

  .sm\:border-purple-light {
    border-color: #a779e9;
  }

  .sm\:border-purple-lighter {
    border-color: #d6bbfc;
  }

  .sm\:border-purple-lightest {
    border-color: #f3ebff;
  }

  .sm\:border-pink-darkest {
    border-color: #451225;
  }

  .sm\:border-pink-darker {
    border-color: #6f213f;
  }

  .sm\:border-pink-dark {
    border-color: #eb5286;
  }

  .sm\:border-pink-light {
    border-color: #fa7ea8;
  }

  .sm\:border-pink-lighter {
    border-color: #ffbbca;
  }

  .sm\:border-pink-lightest {
    border-color: #ffebef;
  }

  .sm\:border-nav {
    border-color: #3F495E;
  }

  .sm\:border-side-nav {
    border-color: #ECF0F1;
  }

  .sm\:border-nav-item {
    border-color: #626b7a;
  }

  .sm\:border-light-border {
    border-color: #dfe4e6;
  }

  .sm\:border-white-medium {
    border-color: #FAFAFA;
  }

  .sm\:border-white-medium-dark {
    border-color: #E5E9EB;
  }

  .sm\:border-red-vibrant {
    border-color: #e46050;
  }

  .sm\:border-red-vibrant-dark {
    border-color: #d64230;
  }

  .sm\:border-primary {
    border-color: #51BE99;
  }

  .sm\:border-primary-dark {
    border-color: #0e5f43;
  }

  .sm\:border-warning {
    border-color: #f4ab43;
  }

  .sm\:border-warning-dark {
    border-color: #c37c16;
  }

  .sm\:border-black-dark {
    border-color: #272634;
  }

  .sm\:border-black-darkest {
    border-color: #141418;
  }

  .sm\:border-info {
    border-color: #52bcdc;
  }

  .sm\:border-info-dark {
    border-color: #2cadd4;
  }

  .sm\:border-success {
    border-color: #72b159;
  }

  .sm\:border-success-dark {
    border-color: #5D9547;
  }

  .sm\:border-transparent {
    border-color: transparent;
  }

  .sm\:border-black {
    border-color: #000;
  }

  .sm\:border-white {
    border-color: #fff;
  }

  .sm\:border-gray-100 {
    border-color: #f7fafc;
  }

  .sm\:border-gray-200 {
    border-color: #edf2f7;
  }

  .sm\:border-gray-300 {
    border-color: #e2e8f0;
  }

  .sm\:border-gray-400 {
    border-color: #cbd5e0;
  }

  .sm\:border-gray-500 {
    border-color: #a0aec0;
  }

  .sm\:border-gray-600 {
    border-color: #718096;
  }

  .sm\:border-gray-700 {
    border-color: #4a5568;
  }

  .sm\:border-gray-800 {
    border-color: #2d3748;
  }

  .sm\:border-gray-900 {
    border-color: #1a202c;
  }

  .sm\:border-red-100 {
    border-color: #fff5f5;
  }

  .sm\:border-red-200 {
    border-color: #fed7d7;
  }

  .sm\:border-red-300 {
    border-color: #feb2b2;
  }

  .sm\:border-red-400 {
    border-color: #fc8181;
  }

  .sm\:border-red-500 {
    border-color: #f56565;
  }

  .sm\:border-red-600 {
    border-color: #e53e3e;
  }

  .sm\:border-red-700 {
    border-color: #c53030;
  }

  .sm\:border-red-800 {
    border-color: #9b2c2c;
  }

  .sm\:border-red-900 {
    border-color: #742a2a;
  }

  .sm\:border-orange-100 {
    border-color: #fffaf0;
  }

  .sm\:border-orange-200 {
    border-color: #feebc8;
  }

  .sm\:border-orange-300 {
    border-color: #fbd38d;
  }

  .sm\:border-orange-400 {
    border-color: #f6ad55;
  }

  .sm\:border-orange-500 {
    border-color: #ed8936;
  }

  .sm\:border-orange-600 {
    border-color: #dd6b20;
  }

  .sm\:border-orange-700 {
    border-color: #c05621;
  }

  .sm\:border-orange-800 {
    border-color: #9c4221;
  }

  .sm\:border-orange-900 {
    border-color: #7b341e;
  }

  .sm\:border-yellow-100 {
    border-color: #fffff0;
  }

  .sm\:border-yellow-200 {
    border-color: #fefcbf;
  }

  .sm\:border-yellow-300 {
    border-color: #faf089;
  }

  .sm\:border-yellow-400 {
    border-color: #f6e05e;
  }

  .sm\:border-yellow-500 {
    border-color: #ecc94b;
  }

  .sm\:border-yellow-600 {
    border-color: #d69e2e;
  }

  .sm\:border-yellow-700 {
    border-color: #b7791f;
  }

  .sm\:border-yellow-800 {
    border-color: #975a16;
  }

  .sm\:border-yellow-900 {
    border-color: #744210;
  }

  .sm\:border-green-100 {
    border-color: #f0fff4;
  }

  .sm\:border-green-200 {
    border-color: #c6f6d5;
  }

  .sm\:border-green-300 {
    border-color: #9ae6b4;
  }

  .sm\:border-green-400 {
    border-color: #68d391;
  }

  .sm\:border-green-500 {
    border-color: #48bb78;
  }

  .sm\:border-green-600 {
    border-color: #38a169;
  }

  .sm\:border-green-700 {
    border-color: #2f855a;
  }

  .sm\:border-green-800 {
    border-color: #276749;
  }

  .sm\:border-green-900 {
    border-color: #22543d;
  }

  .sm\:border-teal-100 {
    border-color: #e6fffa;
  }

  .sm\:border-teal-200 {
    border-color: #b2f5ea;
  }

  .sm\:border-teal-300 {
    border-color: #81e6d9;
  }

  .sm\:border-teal-400 {
    border-color: #4fd1c5;
  }

  .sm\:border-teal-500 {
    border-color: #38b2ac;
  }

  .sm\:border-teal-600 {
    border-color: #319795;
  }

  .sm\:border-teal-700 {
    border-color: #2c7a7b;
  }

  .sm\:border-teal-800 {
    border-color: #285e61;
  }

  .sm\:border-teal-900 {
    border-color: #234e52;
  }

  .sm\:border-blue-100 {
    border-color: #ebf8ff;
  }

  .sm\:border-blue-200 {
    border-color: #bee3f8;
  }

  .sm\:border-blue-300 {
    border-color: #90cdf4;
  }

  .sm\:border-blue-400 {
    border-color: #63b3ed;
  }

  .sm\:border-blue-500 {
    border-color: #4299e1;
  }

  .sm\:border-blue-600 {
    border-color: #3182ce;
  }

  .sm\:border-blue-700 {
    border-color: #2b6cb0;
  }

  .sm\:border-blue-800 {
    border-color: #2c5282;
  }

  .sm\:border-blue-900 {
    border-color: #2a4365;
  }

  .sm\:border-indigo-100 {
    border-color: #ebf4ff;
  }

  .sm\:border-indigo-200 {
    border-color: #c3dafe;
  }

  .sm\:border-indigo-300 {
    border-color: #a3bffa;
  }

  .sm\:border-indigo-400 {
    border-color: #7f9cf5;
  }

  .sm\:border-indigo-500 {
    border-color: #667eea;
  }

  .sm\:border-indigo-600 {
    border-color: #5a67d8;
  }

  .sm\:border-indigo-700 {
    border-color: #4c51bf;
  }

  .sm\:border-indigo-800 {
    border-color: #434190;
  }

  .sm\:border-indigo-900 {
    border-color: #3c366b;
  }

  .sm\:border-purple-100 {
    border-color: #faf5ff;
  }

  .sm\:border-purple-200 {
    border-color: #e9d8fd;
  }

  .sm\:border-purple-300 {
    border-color: #d6bcfa;
  }

  .sm\:border-purple-400 {
    border-color: #b794f4;
  }

  .sm\:border-purple-500 {
    border-color: #9f7aea;
  }

  .sm\:border-purple-600 {
    border-color: #805ad5;
  }

  .sm\:border-purple-700 {
    border-color: #6b46c1;
  }

  .sm\:border-purple-800 {
    border-color: #553c9a;
  }

  .sm\:border-purple-900 {
    border-color: #44337a;
  }

  .sm\:border-pink-100 {
    border-color: #fff5f7;
  }

  .sm\:border-pink-200 {
    border-color: #fed7e2;
  }

  .sm\:border-pink-300 {
    border-color: #fbb6ce;
  }

  .sm\:border-pink-400 {
    border-color: #f687b3;
  }

  .sm\:border-pink-500 {
    border-color: #ed64a6;
  }

  .sm\:border-pink-600 {
    border-color: #d53f8c;
  }

  .sm\:border-pink-700 {
    border-color: #b83280;
  }

  .sm\:border-pink-800 {
    border-color: #97266d;
  }

  .sm\:border-pink-900 {
    border-color: #702459;
  }

  .sm\:hover\:border-grey-darkest:hover {
    border-color: #3d4852;
  }

  .sm\:hover\:border-grey-darker:hover {
    border-color: #606f7b;
  }

  .sm\:hover\:border-grey-dark:hover {
    border-color: #8795a1;
  }

  .sm\:hover\:border-grey:hover {
    border-color: #b8c2cc;
  }

  .sm\:hover\:border-grey-light:hover {
    border-color: #dae1e7;
  }

  .sm\:hover\:border-grey-lighter:hover {
    border-color: #f1f5f8;
  }

  .sm\:hover\:border-grey-lightest:hover {
    border-color: #f8fafc;
  }

  .sm\:hover\:border-grey-mid-light:hover {
    border-color: #f3f3f4;
  }

  .sm\:hover\:border-white-lightest:hover {
    border-color: #f4f4f4;
  }

  .sm\:hover\:border-red-darkest:hover {
    border-color: #3b0d0c;
  }

  .sm\:hover\:border-red-darker:hover {
    border-color: #621b18;
  }

  .sm\:hover\:border-red-dark:hover {
    border-color: #cc1f1a;
  }

  .sm\:hover\:border-red-light:hover {
    border-color: #ef5753;
  }

  .sm\:hover\:border-red-lighter:hover {
    border-color: #f9acaa;
  }

  .sm\:hover\:border-red-lightest:hover {
    border-color: #fcebea;
  }

  .sm\:hover\:border-orange-darkest:hover {
    border-color: #462a16;
  }

  .sm\:hover\:border-orange-darker:hover {
    border-color: #613b1f;
  }

  .sm\:hover\:border-orange-dark:hover {
    border-color: #de751f;
  }

  .sm\:hover\:border-orange-light:hover {
    border-color: #faad63;
  }

  .sm\:hover\:border-orange-lighter:hover {
    border-color: #fcd9b6;
  }

  .sm\:hover\:border-orange-lightest:hover {
    border-color: #fff5eb;
  }

  .sm\:hover\:border-yellow-darkest:hover {
    border-color: #453411;
  }

  .sm\:hover\:border-yellow-darker:hover {
    border-color: #684f1d;
  }

  .sm\:hover\:border-yellow-dark:hover {
    border-color: #f2d024;
  }

  .sm\:hover\:border-yellow-light:hover {
    border-color: #fff382;
  }

  .sm\:hover\:border-yellow-lighter:hover {
    border-color: #fff9c2;
  }

  .sm\:hover\:border-yellow-lightest:hover {
    border-color: #fcfbeb;
  }

  .sm\:hover\:border-green-darkest:hover {
    border-color: #0f2f21;
  }

  .sm\:hover\:border-green-darker:hover {
    border-color: #1a4731;
  }

  .sm\:hover\:border-green-dark:hover {
    border-color: #1f9d55;
  }

  .sm\:hover\:border-green-light:hover {
    border-color: #51d88a;
  }

  .sm\:hover\:border-green-lighter:hover {
    border-color: #a2f5bf;
  }

  .sm\:hover\:border-green-lightest:hover {
    border-color: #e3fcec;
  }

  .sm\:hover\:border-teal-darkest:hover {
    border-color: #0d3331;
  }

  .sm\:hover\:border-teal-darker:hover {
    border-color: #20504f;
  }

  .sm\:hover\:border-teal-dark:hover {
    border-color: #38a89d;
  }

  .sm\:hover\:border-teal-light:hover {
    border-color: #64d5ca;
  }

  .sm\:hover\:border-teal-lighter:hover {
    border-color: #a0f0ed;
  }

  .sm\:hover\:border-teal-lightest:hover {
    border-color: #e8fffe;
  }

  .sm\:hover\:border-blue-darkest:hover {
    border-color: #12283a;
  }

  .sm\:hover\:border-blue-darker:hover {
    border-color: #1c3d5a;
  }

  .sm\:hover\:border-blue-dark:hover {
    border-color: #2779bd;
  }

  .sm\:hover\:border-blue-light:hover {
    border-color: #6cb2eb;
  }

  .sm\:hover\:border-blue-lighter:hover {
    border-color: #bcdefa;
  }

  .sm\:hover\:border-blue-lightest:hover {
    border-color: #eff8ff;
  }

  .sm\:hover\:border-indigo-darkest:hover {
    border-color: #191e38;
  }

  .sm\:hover\:border-indigo-darker:hover {
    border-color: #2f365f;
  }

  .sm\:hover\:border-indigo-dark:hover {
    border-color: #5661b3;
  }

  .sm\:hover\:border-indigo-light:hover {
    border-color: #7886d7;
  }

  .sm\:hover\:border-indigo-lighter:hover {
    border-color: #b2b7ff;
  }

  .sm\:hover\:border-indigo-lightest:hover {
    border-color: #e6e8ff;
  }

  .sm\:hover\:border-purple-darkest:hover {
    border-color: #21183c;
  }

  .sm\:hover\:border-purple-darker:hover {
    border-color: #382b5f;
  }

  .sm\:hover\:border-purple-dark:hover {
    border-color: #794acf;
  }

  .sm\:hover\:border-purple-light:hover {
    border-color: #a779e9;
  }

  .sm\:hover\:border-purple-lighter:hover {
    border-color: #d6bbfc;
  }

  .sm\:hover\:border-purple-lightest:hover {
    border-color: #f3ebff;
  }

  .sm\:hover\:border-pink-darkest:hover {
    border-color: #451225;
  }

  .sm\:hover\:border-pink-darker:hover {
    border-color: #6f213f;
  }

  .sm\:hover\:border-pink-dark:hover {
    border-color: #eb5286;
  }

  .sm\:hover\:border-pink-light:hover {
    border-color: #fa7ea8;
  }

  .sm\:hover\:border-pink-lighter:hover {
    border-color: #ffbbca;
  }

  .sm\:hover\:border-pink-lightest:hover {
    border-color: #ffebef;
  }

  .sm\:hover\:border-nav:hover {
    border-color: #3F495E;
  }

  .sm\:hover\:border-side-nav:hover {
    border-color: #ECF0F1;
  }

  .sm\:hover\:border-nav-item:hover {
    border-color: #626b7a;
  }

  .sm\:hover\:border-light-border:hover {
    border-color: #dfe4e6;
  }

  .sm\:hover\:border-white-medium:hover {
    border-color: #FAFAFA;
  }

  .sm\:hover\:border-white-medium-dark:hover {
    border-color: #E5E9EB;
  }

  .sm\:hover\:border-red-vibrant:hover {
    border-color: #e46050;
  }

  .sm\:hover\:border-red-vibrant-dark:hover {
    border-color: #d64230;
  }

  .sm\:hover\:border-primary:hover {
    border-color: #51BE99;
  }

  .sm\:hover\:border-primary-dark:hover {
    border-color: #0e5f43;
  }

  .sm\:hover\:border-warning:hover {
    border-color: #f4ab43;
  }

  .sm\:hover\:border-warning-dark:hover {
    border-color: #c37c16;
  }

  .sm\:hover\:border-black-dark:hover {
    border-color: #272634;
  }

  .sm\:hover\:border-black-darkest:hover {
    border-color: #141418;
  }

  .sm\:hover\:border-info:hover {
    border-color: #52bcdc;
  }

  .sm\:hover\:border-info-dark:hover {
    border-color: #2cadd4;
  }

  .sm\:hover\:border-success:hover {
    border-color: #72b159;
  }

  .sm\:hover\:border-success-dark:hover {
    border-color: #5D9547;
  }

  .sm\:hover\:border-transparent:hover {
    border-color: transparent;
  }

  .sm\:hover\:border-black:hover {
    border-color: #000;
  }

  .sm\:hover\:border-white:hover {
    border-color: #fff;
  }

  .sm\:hover\:border-gray-100:hover {
    border-color: #f7fafc;
  }

  .sm\:hover\:border-gray-200:hover {
    border-color: #edf2f7;
  }

  .sm\:hover\:border-gray-300:hover {
    border-color: #e2e8f0;
  }

  .sm\:hover\:border-gray-400:hover {
    border-color: #cbd5e0;
  }

  .sm\:hover\:border-gray-500:hover {
    border-color: #a0aec0;
  }

  .sm\:hover\:border-gray-600:hover {
    border-color: #718096;
  }

  .sm\:hover\:border-gray-700:hover {
    border-color: #4a5568;
  }

  .sm\:hover\:border-gray-800:hover {
    border-color: #2d3748;
  }

  .sm\:hover\:border-gray-900:hover {
    border-color: #1a202c;
  }

  .sm\:hover\:border-red-100:hover {
    border-color: #fff5f5;
  }

  .sm\:hover\:border-red-200:hover {
    border-color: #fed7d7;
  }

  .sm\:hover\:border-red-300:hover {
    border-color: #feb2b2;
  }

  .sm\:hover\:border-red-400:hover {
    border-color: #fc8181;
  }

  .sm\:hover\:border-red-500:hover {
    border-color: #f56565;
  }

  .sm\:hover\:border-red-600:hover {
    border-color: #e53e3e;
  }

  .sm\:hover\:border-red-700:hover {
    border-color: #c53030;
  }

  .sm\:hover\:border-red-800:hover {
    border-color: #9b2c2c;
  }

  .sm\:hover\:border-red-900:hover {
    border-color: #742a2a;
  }

  .sm\:hover\:border-orange-100:hover {
    border-color: #fffaf0;
  }

  .sm\:hover\:border-orange-200:hover {
    border-color: #feebc8;
  }

  .sm\:hover\:border-orange-300:hover {
    border-color: #fbd38d;
  }

  .sm\:hover\:border-orange-400:hover {
    border-color: #f6ad55;
  }

  .sm\:hover\:border-orange-500:hover {
    border-color: #ed8936;
  }

  .sm\:hover\:border-orange-600:hover {
    border-color: #dd6b20;
  }

  .sm\:hover\:border-orange-700:hover {
    border-color: #c05621;
  }

  .sm\:hover\:border-orange-800:hover {
    border-color: #9c4221;
  }

  .sm\:hover\:border-orange-900:hover {
    border-color: #7b341e;
  }

  .sm\:hover\:border-yellow-100:hover {
    border-color: #fffff0;
  }

  .sm\:hover\:border-yellow-200:hover {
    border-color: #fefcbf;
  }

  .sm\:hover\:border-yellow-300:hover {
    border-color: #faf089;
  }

  .sm\:hover\:border-yellow-400:hover {
    border-color: #f6e05e;
  }

  .sm\:hover\:border-yellow-500:hover {
    border-color: #ecc94b;
  }

  .sm\:hover\:border-yellow-600:hover {
    border-color: #d69e2e;
  }

  .sm\:hover\:border-yellow-700:hover {
    border-color: #b7791f;
  }

  .sm\:hover\:border-yellow-800:hover {
    border-color: #975a16;
  }

  .sm\:hover\:border-yellow-900:hover {
    border-color: #744210;
  }

  .sm\:hover\:border-green-100:hover {
    border-color: #f0fff4;
  }

  .sm\:hover\:border-green-200:hover {
    border-color: #c6f6d5;
  }

  .sm\:hover\:border-green-300:hover {
    border-color: #9ae6b4;
  }

  .sm\:hover\:border-green-400:hover {
    border-color: #68d391;
  }

  .sm\:hover\:border-green-500:hover {
    border-color: #48bb78;
  }

  .sm\:hover\:border-green-600:hover {
    border-color: #38a169;
  }

  .sm\:hover\:border-green-700:hover {
    border-color: #2f855a;
  }

  .sm\:hover\:border-green-800:hover {
    border-color: #276749;
  }

  .sm\:hover\:border-green-900:hover {
    border-color: #22543d;
  }

  .sm\:hover\:border-teal-100:hover {
    border-color: #e6fffa;
  }

  .sm\:hover\:border-teal-200:hover {
    border-color: #b2f5ea;
  }

  .sm\:hover\:border-teal-300:hover {
    border-color: #81e6d9;
  }

  .sm\:hover\:border-teal-400:hover {
    border-color: #4fd1c5;
  }

  .sm\:hover\:border-teal-500:hover {
    border-color: #38b2ac;
  }

  .sm\:hover\:border-teal-600:hover {
    border-color: #319795;
  }

  .sm\:hover\:border-teal-700:hover {
    border-color: #2c7a7b;
  }

  .sm\:hover\:border-teal-800:hover {
    border-color: #285e61;
  }

  .sm\:hover\:border-teal-900:hover {
    border-color: #234e52;
  }

  .sm\:hover\:border-blue-100:hover {
    border-color: #ebf8ff;
  }

  .sm\:hover\:border-blue-200:hover {
    border-color: #bee3f8;
  }

  .sm\:hover\:border-blue-300:hover {
    border-color: #90cdf4;
  }

  .sm\:hover\:border-blue-400:hover {
    border-color: #63b3ed;
  }

  .sm\:hover\:border-blue-500:hover {
    border-color: #4299e1;
  }

  .sm\:hover\:border-blue-600:hover {
    border-color: #3182ce;
  }

  .sm\:hover\:border-blue-700:hover {
    border-color: #2b6cb0;
  }

  .sm\:hover\:border-blue-800:hover {
    border-color: #2c5282;
  }

  .sm\:hover\:border-blue-900:hover {
    border-color: #2a4365;
  }

  .sm\:hover\:border-indigo-100:hover {
    border-color: #ebf4ff;
  }

  .sm\:hover\:border-indigo-200:hover {
    border-color: #c3dafe;
  }

  .sm\:hover\:border-indigo-300:hover {
    border-color: #a3bffa;
  }

  .sm\:hover\:border-indigo-400:hover {
    border-color: #7f9cf5;
  }

  .sm\:hover\:border-indigo-500:hover {
    border-color: #667eea;
  }

  .sm\:hover\:border-indigo-600:hover {
    border-color: #5a67d8;
  }

  .sm\:hover\:border-indigo-700:hover {
    border-color: #4c51bf;
  }

  .sm\:hover\:border-indigo-800:hover {
    border-color: #434190;
  }

  .sm\:hover\:border-indigo-900:hover {
    border-color: #3c366b;
  }

  .sm\:hover\:border-purple-100:hover {
    border-color: #faf5ff;
  }

  .sm\:hover\:border-purple-200:hover {
    border-color: #e9d8fd;
  }

  .sm\:hover\:border-purple-300:hover {
    border-color: #d6bcfa;
  }

  .sm\:hover\:border-purple-400:hover {
    border-color: #b794f4;
  }

  .sm\:hover\:border-purple-500:hover {
    border-color: #9f7aea;
  }

  .sm\:hover\:border-purple-600:hover {
    border-color: #805ad5;
  }

  .sm\:hover\:border-purple-700:hover {
    border-color: #6b46c1;
  }

  .sm\:hover\:border-purple-800:hover {
    border-color: #553c9a;
  }

  .sm\:hover\:border-purple-900:hover {
    border-color: #44337a;
  }

  .sm\:hover\:border-pink-100:hover {
    border-color: #fff5f7;
  }

  .sm\:hover\:border-pink-200:hover {
    border-color: #fed7e2;
  }

  .sm\:hover\:border-pink-300:hover {
    border-color: #fbb6ce;
  }

  .sm\:hover\:border-pink-400:hover {
    border-color: #f687b3;
  }

  .sm\:hover\:border-pink-500:hover {
    border-color: #ed64a6;
  }

  .sm\:hover\:border-pink-600:hover {
    border-color: #d53f8c;
  }

  .sm\:hover\:border-pink-700:hover {
    border-color: #b83280;
  }

  .sm\:hover\:border-pink-800:hover {
    border-color: #97266d;
  }

  .sm\:hover\:border-pink-900:hover {
    border-color: #702459;
  }

  .sm\:focus\:border-grey-darkest:focus {
    border-color: #3d4852;
  }

  .sm\:focus\:border-grey-darker:focus {
    border-color: #606f7b;
  }

  .sm\:focus\:border-grey-dark:focus {
    border-color: #8795a1;
  }

  .sm\:focus\:border-grey:focus {
    border-color: #b8c2cc;
  }

  .sm\:focus\:border-grey-light:focus {
    border-color: #dae1e7;
  }

  .sm\:focus\:border-grey-lighter:focus {
    border-color: #f1f5f8;
  }

  .sm\:focus\:border-grey-lightest:focus {
    border-color: #f8fafc;
  }

  .sm\:focus\:border-grey-mid-light:focus {
    border-color: #f3f3f4;
  }

  .sm\:focus\:border-white-lightest:focus {
    border-color: #f4f4f4;
  }

  .sm\:focus\:border-red-darkest:focus {
    border-color: #3b0d0c;
  }

  .sm\:focus\:border-red-darker:focus {
    border-color: #621b18;
  }

  .sm\:focus\:border-red-dark:focus {
    border-color: #cc1f1a;
  }

  .sm\:focus\:border-red-light:focus {
    border-color: #ef5753;
  }

  .sm\:focus\:border-red-lighter:focus {
    border-color: #f9acaa;
  }

  .sm\:focus\:border-red-lightest:focus {
    border-color: #fcebea;
  }

  .sm\:focus\:border-orange-darkest:focus {
    border-color: #462a16;
  }

  .sm\:focus\:border-orange-darker:focus {
    border-color: #613b1f;
  }

  .sm\:focus\:border-orange-dark:focus {
    border-color: #de751f;
  }

  .sm\:focus\:border-orange-light:focus {
    border-color: #faad63;
  }

  .sm\:focus\:border-orange-lighter:focus {
    border-color: #fcd9b6;
  }

  .sm\:focus\:border-orange-lightest:focus {
    border-color: #fff5eb;
  }

  .sm\:focus\:border-yellow-darkest:focus {
    border-color: #453411;
  }

  .sm\:focus\:border-yellow-darker:focus {
    border-color: #684f1d;
  }

  .sm\:focus\:border-yellow-dark:focus {
    border-color: #f2d024;
  }

  .sm\:focus\:border-yellow-light:focus {
    border-color: #fff382;
  }

  .sm\:focus\:border-yellow-lighter:focus {
    border-color: #fff9c2;
  }

  .sm\:focus\:border-yellow-lightest:focus {
    border-color: #fcfbeb;
  }

  .sm\:focus\:border-green-darkest:focus {
    border-color: #0f2f21;
  }

  .sm\:focus\:border-green-darker:focus {
    border-color: #1a4731;
  }

  .sm\:focus\:border-green-dark:focus {
    border-color: #1f9d55;
  }

  .sm\:focus\:border-green-light:focus {
    border-color: #51d88a;
  }

  .sm\:focus\:border-green-lighter:focus {
    border-color: #a2f5bf;
  }

  .sm\:focus\:border-green-lightest:focus {
    border-color: #e3fcec;
  }

  .sm\:focus\:border-teal-darkest:focus {
    border-color: #0d3331;
  }

  .sm\:focus\:border-teal-darker:focus {
    border-color: #20504f;
  }

  .sm\:focus\:border-teal-dark:focus {
    border-color: #38a89d;
  }

  .sm\:focus\:border-teal-light:focus {
    border-color: #64d5ca;
  }

  .sm\:focus\:border-teal-lighter:focus {
    border-color: #a0f0ed;
  }

  .sm\:focus\:border-teal-lightest:focus {
    border-color: #e8fffe;
  }

  .sm\:focus\:border-blue-darkest:focus {
    border-color: #12283a;
  }

  .sm\:focus\:border-blue-darker:focus {
    border-color: #1c3d5a;
  }

  .sm\:focus\:border-blue-dark:focus {
    border-color: #2779bd;
  }

  .sm\:focus\:border-blue-light:focus {
    border-color: #6cb2eb;
  }

  .sm\:focus\:border-blue-lighter:focus {
    border-color: #bcdefa;
  }

  .sm\:focus\:border-blue-lightest:focus {
    border-color: #eff8ff;
  }

  .sm\:focus\:border-indigo-darkest:focus {
    border-color: #191e38;
  }

  .sm\:focus\:border-indigo-darker:focus {
    border-color: #2f365f;
  }

  .sm\:focus\:border-indigo-dark:focus {
    border-color: #5661b3;
  }

  .sm\:focus\:border-indigo-light:focus {
    border-color: #7886d7;
  }

  .sm\:focus\:border-indigo-lighter:focus {
    border-color: #b2b7ff;
  }

  .sm\:focus\:border-indigo-lightest:focus {
    border-color: #e6e8ff;
  }

  .sm\:focus\:border-purple-darkest:focus {
    border-color: #21183c;
  }

  .sm\:focus\:border-purple-darker:focus {
    border-color: #382b5f;
  }

  .sm\:focus\:border-purple-dark:focus {
    border-color: #794acf;
  }

  .sm\:focus\:border-purple-light:focus {
    border-color: #a779e9;
  }

  .sm\:focus\:border-purple-lighter:focus {
    border-color: #d6bbfc;
  }

  .sm\:focus\:border-purple-lightest:focus {
    border-color: #f3ebff;
  }

  .sm\:focus\:border-pink-darkest:focus {
    border-color: #451225;
  }

  .sm\:focus\:border-pink-darker:focus {
    border-color: #6f213f;
  }

  .sm\:focus\:border-pink-dark:focus {
    border-color: #eb5286;
  }

  .sm\:focus\:border-pink-light:focus {
    border-color: #fa7ea8;
  }

  .sm\:focus\:border-pink-lighter:focus {
    border-color: #ffbbca;
  }

  .sm\:focus\:border-pink-lightest:focus {
    border-color: #ffebef;
  }

  .sm\:focus\:border-nav:focus {
    border-color: #3F495E;
  }

  .sm\:focus\:border-side-nav:focus {
    border-color: #ECF0F1;
  }

  .sm\:focus\:border-nav-item:focus {
    border-color: #626b7a;
  }

  .sm\:focus\:border-light-border:focus {
    border-color: #dfe4e6;
  }

  .sm\:focus\:border-white-medium:focus {
    border-color: #FAFAFA;
  }

  .sm\:focus\:border-white-medium-dark:focus {
    border-color: #E5E9EB;
  }

  .sm\:focus\:border-red-vibrant:focus {
    border-color: #e46050;
  }

  .sm\:focus\:border-red-vibrant-dark:focus {
    border-color: #d64230;
  }

  .sm\:focus\:border-primary:focus {
    border-color: #51BE99;
  }

  .sm\:focus\:border-primary-dark:focus {
    border-color: #0e5f43;
  }

  .sm\:focus\:border-warning:focus {
    border-color: #f4ab43;
  }

  .sm\:focus\:border-warning-dark:focus {
    border-color: #c37c16;
  }

  .sm\:focus\:border-black-dark:focus {
    border-color: #272634;
  }

  .sm\:focus\:border-black-darkest:focus {
    border-color: #141418;
  }

  .sm\:focus\:border-info:focus {
    border-color: #52bcdc;
  }

  .sm\:focus\:border-info-dark:focus {
    border-color: #2cadd4;
  }

  .sm\:focus\:border-success:focus {
    border-color: #72b159;
  }

  .sm\:focus\:border-success-dark:focus {
    border-color: #5D9547;
  }

  .sm\:focus\:border-transparent:focus {
    border-color: transparent;
  }

  .sm\:focus\:border-black:focus {
    border-color: #000;
  }

  .sm\:focus\:border-white:focus {
    border-color: #fff;
  }

  .sm\:focus\:border-gray-100:focus {
    border-color: #f7fafc;
  }

  .sm\:focus\:border-gray-200:focus {
    border-color: #edf2f7;
  }

  .sm\:focus\:border-gray-300:focus {
    border-color: #e2e8f0;
  }

  .sm\:focus\:border-gray-400:focus {
    border-color: #cbd5e0;
  }

  .sm\:focus\:border-gray-500:focus {
    border-color: #a0aec0;
  }

  .sm\:focus\:border-gray-600:focus {
    border-color: #718096;
  }

  .sm\:focus\:border-gray-700:focus {
    border-color: #4a5568;
  }

  .sm\:focus\:border-gray-800:focus {
    border-color: #2d3748;
  }

  .sm\:focus\:border-gray-900:focus {
    border-color: #1a202c;
  }

  .sm\:focus\:border-red-100:focus {
    border-color: #fff5f5;
  }

  .sm\:focus\:border-red-200:focus {
    border-color: #fed7d7;
  }

  .sm\:focus\:border-red-300:focus {
    border-color: #feb2b2;
  }

  .sm\:focus\:border-red-400:focus {
    border-color: #fc8181;
  }

  .sm\:focus\:border-red-500:focus {
    border-color: #f56565;
  }

  .sm\:focus\:border-red-600:focus {
    border-color: #e53e3e;
  }

  .sm\:focus\:border-red-700:focus {
    border-color: #c53030;
  }

  .sm\:focus\:border-red-800:focus {
    border-color: #9b2c2c;
  }

  .sm\:focus\:border-red-900:focus {
    border-color: #742a2a;
  }

  .sm\:focus\:border-orange-100:focus {
    border-color: #fffaf0;
  }

  .sm\:focus\:border-orange-200:focus {
    border-color: #feebc8;
  }

  .sm\:focus\:border-orange-300:focus {
    border-color: #fbd38d;
  }

  .sm\:focus\:border-orange-400:focus {
    border-color: #f6ad55;
  }

  .sm\:focus\:border-orange-500:focus {
    border-color: #ed8936;
  }

  .sm\:focus\:border-orange-600:focus {
    border-color: #dd6b20;
  }

  .sm\:focus\:border-orange-700:focus {
    border-color: #c05621;
  }

  .sm\:focus\:border-orange-800:focus {
    border-color: #9c4221;
  }

  .sm\:focus\:border-orange-900:focus {
    border-color: #7b341e;
  }

  .sm\:focus\:border-yellow-100:focus {
    border-color: #fffff0;
  }

  .sm\:focus\:border-yellow-200:focus {
    border-color: #fefcbf;
  }

  .sm\:focus\:border-yellow-300:focus {
    border-color: #faf089;
  }

  .sm\:focus\:border-yellow-400:focus {
    border-color: #f6e05e;
  }

  .sm\:focus\:border-yellow-500:focus {
    border-color: #ecc94b;
  }

  .sm\:focus\:border-yellow-600:focus {
    border-color: #d69e2e;
  }

  .sm\:focus\:border-yellow-700:focus {
    border-color: #b7791f;
  }

  .sm\:focus\:border-yellow-800:focus {
    border-color: #975a16;
  }

  .sm\:focus\:border-yellow-900:focus {
    border-color: #744210;
  }

  .sm\:focus\:border-green-100:focus {
    border-color: #f0fff4;
  }

  .sm\:focus\:border-green-200:focus {
    border-color: #c6f6d5;
  }

  .sm\:focus\:border-green-300:focus {
    border-color: #9ae6b4;
  }

  .sm\:focus\:border-green-400:focus {
    border-color: #68d391;
  }

  .sm\:focus\:border-green-500:focus {
    border-color: #48bb78;
  }

  .sm\:focus\:border-green-600:focus {
    border-color: #38a169;
  }

  .sm\:focus\:border-green-700:focus {
    border-color: #2f855a;
  }

  .sm\:focus\:border-green-800:focus {
    border-color: #276749;
  }

  .sm\:focus\:border-green-900:focus {
    border-color: #22543d;
  }

  .sm\:focus\:border-teal-100:focus {
    border-color: #e6fffa;
  }

  .sm\:focus\:border-teal-200:focus {
    border-color: #b2f5ea;
  }

  .sm\:focus\:border-teal-300:focus {
    border-color: #81e6d9;
  }

  .sm\:focus\:border-teal-400:focus {
    border-color: #4fd1c5;
  }

  .sm\:focus\:border-teal-500:focus {
    border-color: #38b2ac;
  }

  .sm\:focus\:border-teal-600:focus {
    border-color: #319795;
  }

  .sm\:focus\:border-teal-700:focus {
    border-color: #2c7a7b;
  }

  .sm\:focus\:border-teal-800:focus {
    border-color: #285e61;
  }

  .sm\:focus\:border-teal-900:focus {
    border-color: #234e52;
  }

  .sm\:focus\:border-blue-100:focus {
    border-color: #ebf8ff;
  }

  .sm\:focus\:border-blue-200:focus {
    border-color: #bee3f8;
  }

  .sm\:focus\:border-blue-300:focus {
    border-color: #90cdf4;
  }

  .sm\:focus\:border-blue-400:focus {
    border-color: #63b3ed;
  }

  .sm\:focus\:border-blue-500:focus {
    border-color: #4299e1;
  }

  .sm\:focus\:border-blue-600:focus {
    border-color: #3182ce;
  }

  .sm\:focus\:border-blue-700:focus {
    border-color: #2b6cb0;
  }

  .sm\:focus\:border-blue-800:focus {
    border-color: #2c5282;
  }

  .sm\:focus\:border-blue-900:focus {
    border-color: #2a4365;
  }

  .sm\:focus\:border-indigo-100:focus {
    border-color: #ebf4ff;
  }

  .sm\:focus\:border-indigo-200:focus {
    border-color: #c3dafe;
  }

  .sm\:focus\:border-indigo-300:focus {
    border-color: #a3bffa;
  }

  .sm\:focus\:border-indigo-400:focus {
    border-color: #7f9cf5;
  }

  .sm\:focus\:border-indigo-500:focus {
    border-color: #667eea;
  }

  .sm\:focus\:border-indigo-600:focus {
    border-color: #5a67d8;
  }

  .sm\:focus\:border-indigo-700:focus {
    border-color: #4c51bf;
  }

  .sm\:focus\:border-indigo-800:focus {
    border-color: #434190;
  }

  .sm\:focus\:border-indigo-900:focus {
    border-color: #3c366b;
  }

  .sm\:focus\:border-purple-100:focus {
    border-color: #faf5ff;
  }

  .sm\:focus\:border-purple-200:focus {
    border-color: #e9d8fd;
  }

  .sm\:focus\:border-purple-300:focus {
    border-color: #d6bcfa;
  }

  .sm\:focus\:border-purple-400:focus {
    border-color: #b794f4;
  }

  .sm\:focus\:border-purple-500:focus {
    border-color: #9f7aea;
  }

  .sm\:focus\:border-purple-600:focus {
    border-color: #805ad5;
  }

  .sm\:focus\:border-purple-700:focus {
    border-color: #6b46c1;
  }

  .sm\:focus\:border-purple-800:focus {
    border-color: #553c9a;
  }

  .sm\:focus\:border-purple-900:focus {
    border-color: #44337a;
  }

  .sm\:focus\:border-pink-100:focus {
    border-color: #fff5f7;
  }

  .sm\:focus\:border-pink-200:focus {
    border-color: #fed7e2;
  }

  .sm\:focus\:border-pink-300:focus {
    border-color: #fbb6ce;
  }

  .sm\:focus\:border-pink-400:focus {
    border-color: #f687b3;
  }

  .sm\:focus\:border-pink-500:focus {
    border-color: #ed64a6;
  }

  .sm\:focus\:border-pink-600:focus {
    border-color: #d53f8c;
  }

  .sm\:focus\:border-pink-700:focus {
    border-color: #b83280;
  }

  .sm\:focus\:border-pink-800:focus {
    border-color: #97266d;
  }

  .sm\:focus\:border-pink-900:focus {
    border-color: #702459;
  }

  .sm\:rounded-none {
    border-radius: 0;
  }

  .sm\:rounded-sm {
    border-radius: 0.125rem;
  }

  .sm\:rounded {
    border-radius: 0.25rem;
  }

  .sm\:rounded-lg {
    border-radius: 0.5rem;
  }

  .sm\:rounded-full {
    border-radius: 9999px;
  }

  .sm\:rounded-t-none {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }

  .sm\:rounded-r-none {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }

  .sm\:rounded-b-none {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }

  .sm\:rounded-l-none {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }

  .sm\:rounded-t-sm {
    border-top-left-radius: 0.125rem;
    border-top-right-radius: 0.125rem;
  }

  .sm\:rounded-r-sm {
    border-top-right-radius: 0.125rem;
    border-bottom-right-radius: 0.125rem;
  }

  .sm\:rounded-b-sm {
    border-bottom-right-radius: 0.125rem;
    border-bottom-left-radius: 0.125rem;
  }

  .sm\:rounded-l-sm {
    border-top-left-radius: 0.125rem;
    border-bottom-left-radius: 0.125rem;
  }

  .sm\:rounded-t {
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem;
  }

  .sm\:rounded-r {
    border-top-right-radius: 0.25rem;
    border-bottom-right-radius: 0.25rem;
  }

  .sm\:rounded-b {
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
  }

  .sm\:rounded-l {
    border-top-left-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
  }

  .sm\:rounded-t-lg {
    border-top-left-radius: 0.5rem;
    border-top-right-radius: 0.5rem;
  }

  .sm\:rounded-r-lg {
    border-top-right-radius: 0.5rem;
    border-bottom-right-radius: 0.5rem;
  }

  .sm\:rounded-b-lg {
    border-bottom-right-radius: 0.5rem;
    border-bottom-left-radius: 0.5rem;
  }

  .sm\:rounded-l-lg {
    border-top-left-radius: 0.5rem;
    border-bottom-left-radius: 0.5rem;
  }

  .sm\:rounded-t-full {
    border-top-left-radius: 9999px;
    border-top-right-radius: 9999px;
  }

  .sm\:rounded-r-full {
    border-top-right-radius: 9999px;
    border-bottom-right-radius: 9999px;
  }

  .sm\:rounded-b-full {
    border-bottom-right-radius: 9999px;
    border-bottom-left-radius: 9999px;
  }

  .sm\:rounded-l-full {
    border-top-left-radius: 9999px;
    border-bottom-left-radius: 9999px;
  }

  .sm\:rounded-tl-none {
    border-top-left-radius: 0;
  }

  .sm\:rounded-tr-none {
    border-top-right-radius: 0;
  }

  .sm\:rounded-br-none {
    border-bottom-right-radius: 0;
  }

  .sm\:rounded-bl-none {
    border-bottom-left-radius: 0;
  }

  .sm\:rounded-tl-sm {
    border-top-left-radius: 0.125rem;
  }

  .sm\:rounded-tr-sm {
    border-top-right-radius: 0.125rem;
  }

  .sm\:rounded-br-sm {
    border-bottom-right-radius: 0.125rem;
  }

  .sm\:rounded-bl-sm {
    border-bottom-left-radius: 0.125rem;
  }

  .sm\:rounded-tl {
    border-top-left-radius: 0.25rem;
  }

  .sm\:rounded-tr {
    border-top-right-radius: 0.25rem;
  }

  .sm\:rounded-br {
    border-bottom-right-radius: 0.25rem;
  }

  .sm\:rounded-bl {
    border-bottom-left-radius: 0.25rem;
  }

  .sm\:rounded-tl-lg {
    border-top-left-radius: 0.5rem;
  }

  .sm\:rounded-tr-lg {
    border-top-right-radius: 0.5rem;
  }

  .sm\:rounded-br-lg {
    border-bottom-right-radius: 0.5rem;
  }

  .sm\:rounded-bl-lg {
    border-bottom-left-radius: 0.5rem;
  }

  .sm\:rounded-tl-full {
    border-top-left-radius: 9999px;
  }

  .sm\:rounded-tr-full {
    border-top-right-radius: 9999px;
  }

  .sm\:rounded-br-full {
    border-bottom-right-radius: 9999px;
  }

  .sm\:rounded-bl-full {
    border-bottom-left-radius: 9999px;
  }

  .sm\:border-solid {
    border-style: solid;
  }

  .sm\:border-dashed {
    border-style: dashed;
  }

  .sm\:border-dotted {
    border-style: dotted;
  }

  .sm\:border-double {
    border-style: double;
  }

  .sm\:border-none {
    border-style: none;
  }

  .sm\:border-0 {
    border-width: 0;
  }

  .sm\:border-2 {
    border-width: 2px;
  }

  .sm\:border-4 {
    border-width: 4px;
  }

  .sm\:border-8 {
    border-width: 8px;
  }

  .sm\:border {
    border-width: 1px;
  }

  .sm\:border-t-0 {
    border-top-width: 0;
  }

  .sm\:border-r-0 {
    border-right-width: 0;
  }

  .sm\:border-b-0 {
    border-bottom-width: 0;
  }

  .sm\:border-l-0 {
    border-left-width: 0;
  }

  .sm\:border-t-2 {
    border-top-width: 2px;
  }

  .sm\:border-r-2 {
    border-right-width: 2px;
  }

  .sm\:border-b-2 {
    border-bottom-width: 2px;
  }

  .sm\:border-l-2 {
    border-left-width: 2px;
  }

  .sm\:border-t-4 {
    border-top-width: 4px;
  }

  .sm\:border-r-4 {
    border-right-width: 4px;
  }

  .sm\:border-b-4 {
    border-bottom-width: 4px;
  }

  .sm\:border-l-4 {
    border-left-width: 4px;
  }

  .sm\:border-t-8 {
    border-top-width: 8px;
  }

  .sm\:border-r-8 {
    border-right-width: 8px;
  }

  .sm\:border-b-8 {
    border-bottom-width: 8px;
  }

  .sm\:border-l-8 {
    border-left-width: 8px;
  }

  .sm\:border-t {
    border-top-width: 1px;
  }

  .sm\:border-r {
    border-right-width: 1px;
  }

  .sm\:border-b {
    border-bottom-width: 1px;
  }

  .sm\:border-l {
    border-left-width: 1px;
  }

  .sm\:cursor-auto {
    cursor: auto;
  }

  .sm\:cursor-default {
    cursor: default;
  }

  .sm\:cursor-pointer {
    cursor: pointer;
  }

  .sm\:cursor-wait {
    cursor: wait;
  }

  .sm\:cursor-text {
    cursor: text;
  }

  .sm\:cursor-move {
    cursor: move;
  }

  .sm\:cursor-not-allowed {
    cursor: not-allowed;
  }

  .sm\:block {
    display: block;
  }

  .sm\:inline-block {
    display: inline-block;
  }

  .sm\:inline {
    display: inline;
  }

  .sm\:flex {
    display: flex;
  }

  .sm\:inline-flex {
    display: inline-flex;
  }

  .sm\:table {
    display: table;
  }

  .sm\:table-row {
    display: table-row;
  }

  .sm\:table-cell {
    display: table-cell;
  }

  .sm\:hidden {
    display: none;
  }

  .sm\:flex-row {
    flex-direction: row;
  }

  .sm\:flex-row-reverse {
    flex-direction: row-reverse;
  }

  .sm\:flex-col {
    flex-direction: column;
  }

  .sm\:flex-col-reverse {
    flex-direction: column-reverse;
  }

  .sm\:flex-wrap {
    flex-wrap: wrap;
  }

  .sm\:flex-wrap-reverse {
    flex-wrap: wrap-reverse;
  }

  .sm\:flex-no-wrap {
    flex-wrap: nowrap;
  }

  .sm\:items-start {
    align-items: flex-start;
  }

  .sm\:items-end {
    align-items: flex-end;
  }

  .sm\:items-center {
    align-items: center;
  }

  .sm\:items-baseline {
    align-items: baseline;
  }

  .sm\:items-stretch {
    align-items: stretch;
  }

  .sm\:self-auto {
    align-self: auto;
  }

  .sm\:self-start {
    align-self: flex-start;
  }

  .sm\:self-end {
    align-self: flex-end;
  }

  .sm\:self-center {
    align-self: center;
  }

  .sm\:self-stretch {
    align-self: stretch;
  }

  .sm\:justify-start {
    justify-content: flex-start;
  }

  .sm\:justify-end {
    justify-content: flex-end;
  }

  .sm\:justify-center {
    justify-content: center;
  }

  .sm\:justify-between {
    justify-content: space-between;
  }

  .sm\:justify-around {
    justify-content: space-around;
  }

  .sm\:content-center {
    align-content: center;
  }

  .sm\:content-start {
    align-content: flex-start;
  }

  .sm\:content-end {
    align-content: flex-end;
  }

  .sm\:content-between {
    align-content: space-between;
  }

  .sm\:content-around {
    align-content: space-around;
  }

  .sm\:flex-1 {
    flex: 1 1 0%;
  }

  .sm\:flex-auto {
    flex: 1 1 auto;
  }

  .sm\:flex-initial {
    flex: 0 1 auto;
  }

  .sm\:flex-none {
    flex: none;
  }

  .sm\:flex-grow-0 {
    flex-grow: 0;
  }

  .sm\:flex-grow {
    flex-grow: 1;
  }

  .sm\:flex-shrink-0 {
    flex-shrink: 0;
  }

  .sm\:flex-shrink {
    flex-shrink: 1;
  }

  .sm\:order-1 {
    order: 1;
  }

  .sm\:order-2 {
    order: 2;
  }

  .sm\:order-3 {
    order: 3;
  }

  .sm\:order-4 {
    order: 4;
  }

  .sm\:order-5 {
    order: 5;
  }

  .sm\:order-6 {
    order: 6;
  }

  .sm\:order-7 {
    order: 7;
  }

  .sm\:order-8 {
    order: 8;
  }

  .sm\:order-9 {
    order: 9;
  }

  .sm\:order-10 {
    order: 10;
  }

  .sm\:order-11 {
    order: 11;
  }

  .sm\:order-12 {
    order: 12;
  }

  .sm\:order-first {
    order: -9999;
  }

  .sm\:order-last {
    order: 9999;
  }

  .sm\:order-none {
    order: 0;
  }

  .sm\:float-right {
    float: right;
  }

  .sm\:float-left {
    float: left;
  }

  .sm\:float-none {
    float: none;
  }

  .sm\:clearfix:after {
    content: "";
    display: table;
    clear: both;
  }

  .sm\:font-sans {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  }

  .sm\:font-serif {
    font-family: Georgia, Cambria, "Times New Roman", Times, serif;
  }

  .sm\:font-mono {
    font-family: Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  }

  .sm\:font-hairline {
    font-weight: 100;
  }

  .sm\:font-thin {
    font-weight: 200;
  }

  .sm\:font-light {
    font-weight: 300;
  }

  .sm\:font-normal {
    font-weight: 400;
  }

  .sm\:font-medium {
    font-weight: 500;
  }

  .sm\:font-semibold {
    font-weight: 600;
  }

  .sm\:font-bold {
    font-weight: 700;
  }

  .sm\:font-extrabold {
    font-weight: 800;
  }

  .sm\:font-black {
    font-weight: 900;
  }

  .sm\:hover\:font-hairline:hover {
    font-weight: 100;
  }

  .sm\:hover\:font-thin:hover {
    font-weight: 200;
  }

  .sm\:hover\:font-light:hover {
    font-weight: 300;
  }

  .sm\:hover\:font-normal:hover {
    font-weight: 400;
  }

  .sm\:hover\:font-medium:hover {
    font-weight: 500;
  }

  .sm\:hover\:font-semibold:hover {
    font-weight: 600;
  }

  .sm\:hover\:font-bold:hover {
    font-weight: 700;
  }

  .sm\:hover\:font-extrabold:hover {
    font-weight: 800;
  }

  .sm\:hover\:font-black:hover {
    font-weight: 900;
  }

  .sm\:focus\:font-hairline:focus {
    font-weight: 100;
  }

  .sm\:focus\:font-thin:focus {
    font-weight: 200;
  }

  .sm\:focus\:font-light:focus {
    font-weight: 300;
  }

  .sm\:focus\:font-normal:focus {
    font-weight: 400;
  }

  .sm\:focus\:font-medium:focus {
    font-weight: 500;
  }

  .sm\:focus\:font-semibold:focus {
    font-weight: 600;
  }

  .sm\:focus\:font-bold:focus {
    font-weight: 700;
  }

  .sm\:focus\:font-extrabold:focus {
    font-weight: 800;
  }

  .sm\:focus\:font-black:focus {
    font-weight: 900;
  }

  .sm\:h-0 {
    height: 0;
  }

  .sm\:h-1 {
    height: 0.25rem;
  }

  .sm\:h-2 {
    height: 0.5rem;
  }

  .sm\:h-3 {
    height: 0.75rem;
  }

  .sm\:h-4 {
    height: 1rem;
  }

  .sm\:h-5 {
    height: 1.25rem;
  }

  .sm\:h-6 {
    height: 1.5rem;
  }

  .sm\:h-8 {
    height: 2rem;
  }

  .sm\:h-10 {
    height: 2.5rem;
  }

  .sm\:h-12 {
    height: 3rem;
  }

  .sm\:h-16 {
    height: 4rem;
  }

  .sm\:h-20 {
    height: 5rem;
  }

  .sm\:h-24 {
    height: 6rem;
  }

  .sm\:h-32 {
    height: 8rem;
  }

  .sm\:h-40 {
    height: 10rem;
  }

  .sm\:h-48 {
    height: 12rem;
  }

  .sm\:h-56 {
    height: 14rem;
  }

  .sm\:h-64 {
    height: 16rem;
  }

  .sm\:h-auto {
    height: auto;
  }

  .sm\:h-px {
    height: 1px;
  }

  .sm\:h-full {
    height: 100%;
  }

  .sm\:h-screen {
    height: 100vh;
  }

  .sm\:leading-none {
    line-height: 1;
  }

  .sm\:leading-tight {
    line-height: 1.25;
  }

  .sm\:leading-snug {
    line-height: 1.375;
  }

  .sm\:leading-normal {
    line-height: 1.5;
  }

  .sm\:leading-relaxed {
    line-height: 1.625;
  }

  .sm\:leading-loose {
    line-height: 2;
  }

  .sm\:list-inside {
    list-style-position: inside;
  }

  .sm\:list-outside {
    list-style-position: outside;
  }

  .sm\:list-none {
    list-style-type: none;
  }

  .sm\:list-disc {
    list-style-type: disc;
  }

  .sm\:list-decimal {
    list-style-type: decimal;
  }

  .sm\:m-0 {
    margin: 0;
  }

  .sm\:m-1 {
    margin: 0.25rem;
  }

  .sm\:m-2 {
    margin: 0.5rem;
  }

  .sm\:m-3 {
    margin: 0.75rem;
  }

  .sm\:m-4 {
    margin: 1rem;
  }

  .sm\:m-5 {
    margin: 1.25rem;
  }

  .sm\:m-6 {
    margin: 1.5rem;
  }

  .sm\:m-8 {
    margin: 2rem;
  }

  .sm\:m-10 {
    margin: 2.5rem;
  }

  .sm\:m-12 {
    margin: 3rem;
  }

  .sm\:m-16 {
    margin: 4rem;
  }

  .sm\:m-20 {
    margin: 5rem;
  }

  .sm\:m-24 {
    margin: 6rem;
  }

  .sm\:m-32 {
    margin: 8rem;
  }

  .sm\:m-auto {
    margin: auto;
  }

  .sm\:m-px {
    margin: 1px;
  }

  .sm\:-m-px {
    margin: -1px;
  }

  .sm\:-m-1 {
    margin: -0.25rem;
  }

  .sm\:-m-2 {
    margin: -0.5rem;
  }

  .sm\:-m-3 {
    margin: -0.75rem;
  }

  .sm\:-m-4 {
    margin: -1rem;
  }

  .sm\:-m-5 {
    margin: -1.25rem;
  }

  .sm\:-m-6 {
    margin: -1.5rem;
  }

  .sm\:-m-8 {
    margin: -2rem;
  }

  .sm\:-m-10 {
    margin: -2.5rem;
  }

  .sm\:-m-12 {
    margin: -3rem;
  }

  .sm\:-m-16 {
    margin: -4rem;
  }

  .sm\:-m-20 {
    margin: -5rem;
  }

  .sm\:-m-24 {
    margin: -6rem;
  }

  .sm\:-m-32 {
    margin: -8rem;
  }

  .sm\:my-0 {
    margin-top: 0;
    margin-bottom: 0;
  }

  .sm\:mx-0 {
    margin-left: 0;
    margin-right: 0;
  }

  .sm\:my-1 {
    margin-top: 0.25rem;
    margin-bottom: 0.25rem;
  }

  .sm\:mx-1 {
    margin-left: 0.25rem;
    margin-right: 0.25rem;
  }

  .sm\:my-2 {
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
  }

  .sm\:mx-2 {
    margin-left: 0.5rem;
    margin-right: 0.5rem;
  }

  .sm\:my-3 {
    margin-top: 0.75rem;
    margin-bottom: 0.75rem;
  }

  .sm\:mx-3 {
    margin-left: 0.75rem;
    margin-right: 0.75rem;
  }

  .sm\:my-4 {
    margin-top: 1rem;
    margin-bottom: 1rem;
  }

  .sm\:mx-4 {
    margin-left: 1rem;
    margin-right: 1rem;
  }

  .sm\:my-5 {
    margin-top: 1.25rem;
    margin-bottom: 1.25rem;
  }

  .sm\:mx-5 {
    margin-left: 1.25rem;
    margin-right: 1.25rem;
  }

  .sm\:my-6 {
    margin-top: 1.5rem;
    margin-bottom: 1.5rem;
  }

  .sm\:mx-6 {
    margin-left: 1.5rem;
    margin-right: 1.5rem;
  }

  .sm\:my-8 {
    margin-top: 2rem;
    margin-bottom: 2rem;
  }

  .sm\:mx-8 {
    margin-left: 2rem;
    margin-right: 2rem;
  }

  .sm\:my-10 {
    margin-top: 2.5rem;
    margin-bottom: 2.5rem;
  }

  .sm\:mx-10 {
    margin-left: 2.5rem;
    margin-right: 2.5rem;
  }

  .sm\:my-12 {
    margin-top: 3rem;
    margin-bottom: 3rem;
  }

  .sm\:mx-12 {
    margin-left: 3rem;
    margin-right: 3rem;
  }

  .sm\:my-16 {
    margin-top: 4rem;
    margin-bottom: 4rem;
  }

  .sm\:mx-16 {
    margin-left: 4rem;
    margin-right: 4rem;
  }

  .sm\:my-20 {
    margin-top: 5rem;
    margin-bottom: 5rem;
  }

  .sm\:mx-20 {
    margin-left: 5rem;
    margin-right: 5rem;
  }

  .sm\:my-24 {
    margin-top: 6rem;
    margin-bottom: 6rem;
  }

  .sm\:mx-24 {
    margin-left: 6rem;
    margin-right: 6rem;
  }

  .sm\:my-32 {
    margin-top: 8rem;
    margin-bottom: 8rem;
  }

  .sm\:mx-32 {
    margin-left: 8rem;
    margin-right: 8rem;
  }

  .sm\:my-auto {
    margin-top: auto;
    margin-bottom: auto;
  }

  .sm\:mx-auto {
    margin-left: auto;
    margin-right: auto;
  }

  .sm\:my-px {
    margin-top: 1px;
    margin-bottom: 1px;
  }

  .sm\:mx-px {
    margin-left: 1px;
    margin-right: 1px;
  }

  .sm\:-my-px {
    margin-top: -1px;
    margin-bottom: -1px;
  }

  .sm\:-mx-px {
    margin-left: -1px;
    margin-right: -1px;
  }

  .sm\:-my-1 {
    margin-top: -0.25rem;
    margin-bottom: -0.25rem;
  }

  .sm\:-mx-1 {
    margin-left: -0.25rem;
    margin-right: -0.25rem;
  }

  .sm\:-my-2 {
    margin-top: -0.5rem;
    margin-bottom: -0.5rem;
  }

  .sm\:-mx-2 {
    margin-left: -0.5rem;
    margin-right: -0.5rem;
  }

  .sm\:-my-3 {
    margin-top: -0.75rem;
    margin-bottom: -0.75rem;
  }

  .sm\:-mx-3 {
    margin-left: -0.75rem;
    margin-right: -0.75rem;
  }

  .sm\:-my-4 {
    margin-top: -1rem;
    margin-bottom: -1rem;
  }

  .sm\:-mx-4 {
    margin-left: -1rem;
    margin-right: -1rem;
  }

  .sm\:-my-5 {
    margin-top: -1.25rem;
    margin-bottom: -1.25rem;
  }

  .sm\:-mx-5 {
    margin-left: -1.25rem;
    margin-right: -1.25rem;
  }

  .sm\:-my-6 {
    margin-top: -1.5rem;
    margin-bottom: -1.5rem;
  }

  .sm\:-mx-6 {
    margin-left: -1.5rem;
    margin-right: -1.5rem;
  }

  .sm\:-my-8 {
    margin-top: -2rem;
    margin-bottom: -2rem;
  }

  .sm\:-mx-8 {
    margin-left: -2rem;
    margin-right: -2rem;
  }

  .sm\:-my-10 {
    margin-top: -2.5rem;
    margin-bottom: -2.5rem;
  }

  .sm\:-mx-10 {
    margin-left: -2.5rem;
    margin-right: -2.5rem;
  }

  .sm\:-my-12 {
    margin-top: -3rem;
    margin-bottom: -3rem;
  }

  .sm\:-mx-12 {
    margin-left: -3rem;
    margin-right: -3rem;
  }

  .sm\:-my-16 {
    margin-top: -4rem;
    margin-bottom: -4rem;
  }

  .sm\:-mx-16 {
    margin-left: -4rem;
    margin-right: -4rem;
  }

  .sm\:-my-20 {
    margin-top: -5rem;
    margin-bottom: -5rem;
  }

  .sm\:-mx-20 {
    margin-left: -5rem;
    margin-right: -5rem;
  }

  .sm\:-my-24 {
    margin-top: -6rem;
    margin-bottom: -6rem;
  }

  .sm\:-mx-24 {
    margin-left: -6rem;
    margin-right: -6rem;
  }

  .sm\:-my-32 {
    margin-top: -8rem;
    margin-bottom: -8rem;
  }

  .sm\:-mx-32 {
    margin-left: -8rem;
    margin-right: -8rem;
  }

  .sm\:mt-0 {
    margin-top: 0;
  }

  .sm\:mr-0 {
    margin-right: 0;
  }

  .sm\:mb-0 {
    margin-bottom: 0;
  }

  .sm\:ml-0 {
    margin-left: 0;
  }

  .sm\:mt-1 {
    margin-top: 0.25rem;
  }

  .sm\:mr-1 {
    margin-right: 0.25rem;
  }

  .sm\:mb-1 {
    margin-bottom: 0.25rem;
  }

  .sm\:ml-1 {
    margin-left: 0.25rem;
  }

  .sm\:mt-2 {
    margin-top: 0.5rem;
  }

  .sm\:mr-2 {
    margin-right: 0.5rem;
  }

  .sm\:mb-2 {
    margin-bottom: 0.5rem;
  }

  .sm\:ml-2 {
    margin-left: 0.5rem;
  }

  .sm\:mt-3 {
    margin-top: 0.75rem;
  }

  .sm\:mr-3 {
    margin-right: 0.75rem;
  }

  .sm\:mb-3 {
    margin-bottom: 0.75rem;
  }

  .sm\:ml-3 {
    margin-left: 0.75rem;
  }

  .sm\:mt-4 {
    margin-top: 1rem;
  }

  .sm\:mr-4 {
    margin-right: 1rem;
  }

  .sm\:mb-4 {
    margin-bottom: 1rem;
  }

  .sm\:ml-4 {
    margin-left: 1rem;
  }

  .sm\:mt-5 {
    margin-top: 1.25rem;
  }

  .sm\:mr-5 {
    margin-right: 1.25rem;
  }

  .sm\:mb-5 {
    margin-bottom: 1.25rem;
  }

  .sm\:ml-5 {
    margin-left: 1.25rem;
  }

  .sm\:mt-6 {
    margin-top: 1.5rem;
  }

  .sm\:mr-6 {
    margin-right: 1.5rem;
  }

  .sm\:mb-6 {
    margin-bottom: 1.5rem;
  }

  .sm\:ml-6 {
    margin-left: 1.5rem;
  }

  .sm\:mt-8 {
    margin-top: 2rem;
  }

  .sm\:mr-8 {
    margin-right: 2rem;
  }

  .sm\:mb-8 {
    margin-bottom: 2rem;
  }

  .sm\:ml-8 {
    margin-left: 2rem;
  }

  .sm\:mt-10 {
    margin-top: 2.5rem;
  }

  .sm\:mr-10 {
    margin-right: 2.5rem;
  }

  .sm\:mb-10 {
    margin-bottom: 2.5rem;
  }

  .sm\:ml-10 {
    margin-left: 2.5rem;
  }

  .sm\:mt-12 {
    margin-top: 3rem;
  }

  .sm\:mr-12 {
    margin-right: 3rem;
  }

  .sm\:mb-12 {
    margin-bottom: 3rem;
  }

  .sm\:ml-12 {
    margin-left: 3rem;
  }

  .sm\:mt-16 {
    margin-top: 4rem;
  }

  .sm\:mr-16 {
    margin-right: 4rem;
  }

  .sm\:mb-16 {
    margin-bottom: 4rem;
  }

  .sm\:ml-16 {
    margin-left: 4rem;
  }

  .sm\:mt-20 {
    margin-top: 5rem;
  }

  .sm\:mr-20 {
    margin-right: 5rem;
  }

  .sm\:mb-20 {
    margin-bottom: 5rem;
  }

  .sm\:ml-20 {
    margin-left: 5rem;
  }

  .sm\:mt-24 {
    margin-top: 6rem;
  }

  .sm\:mr-24 {
    margin-right: 6rem;
  }

  .sm\:mb-24 {
    margin-bottom: 6rem;
  }

  .sm\:ml-24 {
    margin-left: 6rem;
  }

  .sm\:mt-32 {
    margin-top: 8rem;
  }

  .sm\:mr-32 {
    margin-right: 8rem;
  }

  .sm\:mb-32 {
    margin-bottom: 8rem;
  }

  .sm\:ml-32 {
    margin-left: 8rem;
  }

  .sm\:mt-auto {
    margin-top: auto;
  }

  .sm\:mr-auto {
    margin-right: auto;
  }

  .sm\:mb-auto {
    margin-bottom: auto;
  }

  .sm\:ml-auto {
    margin-left: auto;
  }

  .sm\:mt-px {
    margin-top: 1px;
  }

  .sm\:mr-px {
    margin-right: 1px;
  }

  .sm\:mb-px {
    margin-bottom: 1px;
  }

  .sm\:ml-px {
    margin-left: 1px;
  }

  .sm\:-mt-px {
    margin-top: -1px;
  }

  .sm\:-mr-px {
    margin-right: -1px;
  }

  .sm\:-mb-px {
    margin-bottom: -1px;
  }

  .sm\:-ml-px {
    margin-left: -1px;
  }

  .sm\:-mt-1 {
    margin-top: -0.25rem;
  }

  .sm\:-mr-1 {
    margin-right: -0.25rem;
  }

  .sm\:-mb-1 {
    margin-bottom: -0.25rem;
  }

  .sm\:-ml-1 {
    margin-left: -0.25rem;
  }

  .sm\:-mt-2 {
    margin-top: -0.5rem;
  }

  .sm\:-mr-2 {
    margin-right: -0.5rem;
  }

  .sm\:-mb-2 {
    margin-bottom: -0.5rem;
  }

  .sm\:-ml-2 {
    margin-left: -0.5rem;
  }

  .sm\:-mt-3 {
    margin-top: -0.75rem;
  }

  .sm\:-mr-3 {
    margin-right: -0.75rem;
  }

  .sm\:-mb-3 {
    margin-bottom: -0.75rem;
  }

  .sm\:-ml-3 {
    margin-left: -0.75rem;
  }

  .sm\:-mt-4 {
    margin-top: -1rem;
  }

  .sm\:-mr-4 {
    margin-right: -1rem;
  }

  .sm\:-mb-4 {
    margin-bottom: -1rem;
  }

  .sm\:-ml-4 {
    margin-left: -1rem;
  }

  .sm\:-mt-5 {
    margin-top: -1.25rem;
  }

  .sm\:-mr-5 {
    margin-right: -1.25rem;
  }

  .sm\:-mb-5 {
    margin-bottom: -1.25rem;
  }

  .sm\:-ml-5 {
    margin-left: -1.25rem;
  }

  .sm\:-mt-6 {
    margin-top: -1.5rem;
  }

  .sm\:-mr-6 {
    margin-right: -1.5rem;
  }

  .sm\:-mb-6 {
    margin-bottom: -1.5rem;
  }

  .sm\:-ml-6 {
    margin-left: -1.5rem;
  }

  .sm\:-mt-8 {
    margin-top: -2rem;
  }

  .sm\:-mr-8 {
    margin-right: -2rem;
  }

  .sm\:-mb-8 {
    margin-bottom: -2rem;
  }

  .sm\:-ml-8 {
    margin-left: -2rem;
  }

  .sm\:-mt-10 {
    margin-top: -2.5rem;
  }

  .sm\:-mr-10 {
    margin-right: -2.5rem;
  }

  .sm\:-mb-10 {
    margin-bottom: -2.5rem;
  }

  .sm\:-ml-10 {
    margin-left: -2.5rem;
  }

  .sm\:-mt-12 {
    margin-top: -3rem;
  }

  .sm\:-mr-12 {
    margin-right: -3rem;
  }

  .sm\:-mb-12 {
    margin-bottom: -3rem;
  }

  .sm\:-ml-12 {
    margin-left: -3rem;
  }

  .sm\:-mt-16 {
    margin-top: -4rem;
  }

  .sm\:-mr-16 {
    margin-right: -4rem;
  }

  .sm\:-mb-16 {
    margin-bottom: -4rem;
  }

  .sm\:-ml-16 {
    margin-left: -4rem;
  }

  .sm\:-mt-20 {
    margin-top: -5rem;
  }

  .sm\:-mr-20 {
    margin-right: -5rem;
  }

  .sm\:-mb-20 {
    margin-bottom: -5rem;
  }

  .sm\:-ml-20 {
    margin-left: -5rem;
  }

  .sm\:-mt-24 {
    margin-top: -6rem;
  }

  .sm\:-mr-24 {
    margin-right: -6rem;
  }

  .sm\:-mb-24 {
    margin-bottom: -6rem;
  }

  .sm\:-ml-24 {
    margin-left: -6rem;
  }

  .sm\:-mt-32 {
    margin-top: -8rem;
  }

  .sm\:-mr-32 {
    margin-right: -8rem;
  }

  .sm\:-mb-32 {
    margin-bottom: -8rem;
  }

  .sm\:-ml-32 {
    margin-left: -8rem;
  }

  .sm\:max-h-full {
    max-height: 100%;
  }

  .sm\:max-h-screen {
    max-height: 100vh;
  }

  .sm\:max-w-xs {
    max-width: 20rem;
  }

  .sm\:max-w-sm {
    max-width: 24rem;
  }

  .sm\:max-w-md {
    max-width: 28rem;
  }

  .sm\:max-w-lg {
    max-width: 32rem;
  }

  .sm\:max-w-xl {
    max-width: 36rem;
  }

  .sm\:max-w-2xl {
    max-width: 42rem;
  }

  .sm\:max-w-3xl {
    max-width: 48rem;
  }

  .sm\:max-w-4xl {
    max-width: 56rem;
  }

  .sm\:max-w-5xl {
    max-width: 64rem;
  }

  .sm\:max-w-6xl {
    max-width: 72rem;
  }

  .sm\:max-w-full {
    max-width: 100%;
  }

  .sm\:min-h-0 {
    min-height: 0;
  }

  .sm\:min-h-full {
    min-height: 100%;
  }

  .sm\:min-h-screen {
    min-height: 100vh;
  }

  .sm\:min-w-0 {
    min-width: 0;
  }

  .sm\:min-w-full {
    min-width: 100%;
  }

  .sm\:object-contain {
    object-fit: contain;
  }

  .sm\:object-cover {
    object-fit: cover;
  }

  .sm\:object-fill {
    object-fit: fill;
  }

  .sm\:object-none {
    object-fit: none;
  }

  .sm\:object-scale-down {
    object-fit: scale-down;
  }

  .sm\:object-bottom {
    object-position: bottom;
  }

  .sm\:object-center {
    object-position: center;
  }

  .sm\:object-left {
    object-position: left;
  }

  .sm\:object-left-bottom {
    object-position: left bottom;
  }

  .sm\:object-left-top {
    object-position: left top;
  }

  .sm\:object-right {
    object-position: right;
  }

  .sm\:object-right-bottom {
    object-position: right bottom;
  }

  .sm\:object-right-top {
    object-position: right top;
  }

  .sm\:object-top {
    object-position: top;
  }

  .sm\:opacity-0 {
    opacity: 0;
  }

  .sm\:opacity-25 {
    opacity: 0.25;
  }

  .sm\:opacity-50 {
    opacity: 0.5;
  }

  .sm\:opacity-75 {
    opacity: 0.75;
  }

  .sm\:opacity-100 {
    opacity: 1;
  }

  .sm\:hover\:opacity-0:hover {
    opacity: 0;
  }

  .sm\:hover\:opacity-25:hover {
    opacity: 0.25;
  }

  .sm\:hover\:opacity-50:hover {
    opacity: 0.5;
  }

  .sm\:hover\:opacity-75:hover {
    opacity: 0.75;
  }

  .sm\:hover\:opacity-100:hover {
    opacity: 1;
  }

  .sm\:focus\:opacity-0:focus {
    opacity: 0;
  }

  .sm\:focus\:opacity-25:focus {
    opacity: 0.25;
  }

  .sm\:focus\:opacity-50:focus {
    opacity: 0.5;
  }

  .sm\:focus\:opacity-75:focus {
    opacity: 0.75;
  }

  .sm\:focus\:opacity-100:focus {
    opacity: 1;
  }

  .sm\:outline-none {
    outline: 0;
  }

  .sm\:focus\:outline-none:focus {
    outline: 0;
  }

  .sm\:overflow-auto {
    overflow: auto;
  }

  .sm\:overflow-hidden {
    overflow: hidden;
  }

  .sm\:overflow-visible {
    overflow: visible;
  }

  .sm\:overflow-scroll {
    overflow: scroll;
  }

  .sm\:overflow-x-auto {
    overflow-x: auto;
  }

  .sm\:overflow-y-auto {
    overflow-y: auto;
  }

  .sm\:overflow-x-hidden {
    overflow-x: hidden;
  }

  .sm\:overflow-y-hidden {
    overflow-y: hidden;
  }

  .sm\:overflow-x-visible {
    overflow-x: visible;
  }

  .sm\:overflow-y-visible {
    overflow-y: visible;
  }

  .sm\:overflow-x-scroll {
    overflow-x: scroll;
  }

  .sm\:overflow-y-scroll {
    overflow-y: scroll;
  }

  .sm\:scrolling-touch {
    -webkit-overflow-scrolling: touch;
  }

  .sm\:scrolling-auto {
    -webkit-overflow-scrolling: auto;
  }

  .sm\:p-0 {
    padding: 0;
  }

  .sm\:p-1 {
    padding: 0.25rem;
  }

  .sm\:p-2 {
    padding: 0.5rem;
  }

  .sm\:p-3 {
    padding: 0.75rem;
  }

  .sm\:p-4 {
    padding: 1rem;
  }

  .sm\:p-5 {
    padding: 1.25rem;
  }

  .sm\:p-6 {
    padding: 1.5rem;
  }

  .sm\:p-8 {
    padding: 2rem;
  }

  .sm\:p-10 {
    padding: 2.5rem;
  }

  .sm\:p-12 {
    padding: 3rem;
  }

  .sm\:p-16 {
    padding: 4rem;
  }

  .sm\:p-20 {
    padding: 5rem;
  }

  .sm\:p-24 {
    padding: 6rem;
  }

  .sm\:p-32 {
    padding: 8rem;
  }

  .sm\:p-40 {
    padding: 10rem;
  }

  .sm\:p-48 {
    padding: 12rem;
  }

  .sm\:p-56 {
    padding: 14rem;
  }

  .sm\:p-64 {
    padding: 16rem;
  }

  .sm\:p-px {
    padding: 1px;
  }

  .sm\:py-0 {
    padding-top: 0;
    padding-bottom: 0;
  }

  .sm\:px-0 {
    padding-left: 0;
    padding-right: 0;
  }

  .sm\:py-1 {
    padding-top: 0.25rem;
    padding-bottom: 0.25rem;
  }

  .sm\:px-1 {
    padding-left: 0.25rem;
    padding-right: 0.25rem;
  }

  .sm\:py-2 {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
  }

  .sm\:px-2 {
    padding-left: 0.5rem;
    padding-right: 0.5rem;
  }

  .sm\:py-3 {
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
  }

  .sm\:px-3 {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }

  .sm\:py-4 {
    padding-top: 1rem;
    padding-bottom: 1rem;
  }

  .sm\:px-4 {
    padding-left: 1rem;
    padding-right: 1rem;
  }

  .sm\:py-5 {
    padding-top: 1.25rem;
    padding-bottom: 1.25rem;
  }

  .sm\:px-5 {
    padding-left: 1.25rem;
    padding-right: 1.25rem;
  }

  .sm\:py-6 {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
  }

  .sm\:px-6 {
    padding-left: 1.5rem;
    padding-right: 1.5rem;
  }

  .sm\:py-8 {
    padding-top: 2rem;
    padding-bottom: 2rem;
  }

  .sm\:px-8 {
    padding-left: 2rem;
    padding-right: 2rem;
  }

  .sm\:py-10 {
    padding-top: 2.5rem;
    padding-bottom: 2.5rem;
  }

  .sm\:px-10 {
    padding-left: 2.5rem;
    padding-right: 2.5rem;
  }

  .sm\:py-12 {
    padding-top: 3rem;
    padding-bottom: 3rem;
  }

  .sm\:px-12 {
    padding-left: 3rem;
    padding-right: 3rem;
  }

  .sm\:py-16 {
    padding-top: 4rem;
    padding-bottom: 4rem;
  }

  .sm\:px-16 {
    padding-left: 4rem;
    padding-right: 4rem;
  }

  .sm\:py-20 {
    padding-top: 5rem;
    padding-bottom: 5rem;
  }

  .sm\:px-20 {
    padding-left: 5rem;
    padding-right: 5rem;
  }

  .sm\:py-24 {
    padding-top: 6rem;
    padding-bottom: 6rem;
  }

  .sm\:px-24 {
    padding-left: 6rem;
    padding-right: 6rem;
  }

  .sm\:py-32 {
    padding-top: 8rem;
    padding-bottom: 8rem;
  }

  .sm\:px-32 {
    padding-left: 8rem;
    padding-right: 8rem;
  }

  .sm\:py-40 {
    padding-top: 10rem;
    padding-bottom: 10rem;
  }

  .sm\:px-40 {
    padding-left: 10rem;
    padding-right: 10rem;
  }

  .sm\:py-48 {
    padding-top: 12rem;
    padding-bottom: 12rem;
  }

  .sm\:px-48 {
    padding-left: 12rem;
    padding-right: 12rem;
  }

  .sm\:py-56 {
    padding-top: 14rem;
    padding-bottom: 14rem;
  }

  .sm\:px-56 {
    padding-left: 14rem;
    padding-right: 14rem;
  }

  .sm\:py-64 {
    padding-top: 16rem;
    padding-bottom: 16rem;
  }

  .sm\:px-64 {
    padding-left: 16rem;
    padding-right: 16rem;
  }

  .sm\:py-px {
    padding-top: 1px;
    padding-bottom: 1px;
  }

  .sm\:px-px {
    padding-left: 1px;
    padding-right: 1px;
  }

  .sm\:pt-0 {
    padding-top: 0;
  }

  .sm\:pr-0 {
    padding-right: 0;
  }

  .sm\:pb-0 {
    padding-bottom: 0;
  }

  .sm\:pl-0 {
    padding-left: 0;
  }

  .sm\:pt-1 {
    padding-top: 0.25rem;
  }

  .sm\:pr-1 {
    padding-right: 0.25rem;
  }

  .sm\:pb-1 {
    padding-bottom: 0.25rem;
  }

  .sm\:pl-1 {
    padding-left: 0.25rem;
  }

  .sm\:pt-2 {
    padding-top: 0.5rem;
  }

  .sm\:pr-2 {
    padding-right: 0.5rem;
  }

  .sm\:pb-2 {
    padding-bottom: 0.5rem;
  }

  .sm\:pl-2 {
    padding-left: 0.5rem;
  }

  .sm\:pt-3 {
    padding-top: 0.75rem;
  }

  .sm\:pr-3 {
    padding-right: 0.75rem;
  }

  .sm\:pb-3 {
    padding-bottom: 0.75rem;
  }

  .sm\:pl-3 {
    padding-left: 0.75rem;
  }

  .sm\:pt-4 {
    padding-top: 1rem;
  }

  .sm\:pr-4 {
    padding-right: 1rem;
  }

  .sm\:pb-4 {
    padding-bottom: 1rem;
  }

  .sm\:pl-4 {
    padding-left: 1rem;
  }

  .sm\:pt-5 {
    padding-top: 1.25rem;
  }

  .sm\:pr-5 {
    padding-right: 1.25rem;
  }

  .sm\:pb-5 {
    padding-bottom: 1.25rem;
  }

  .sm\:pl-5 {
    padding-left: 1.25rem;
  }

  .sm\:pt-6 {
    padding-top: 1.5rem;
  }

  .sm\:pr-6 {
    padding-right: 1.5rem;
  }

  .sm\:pb-6 {
    padding-bottom: 1.5rem;
  }

  .sm\:pl-6 {
    padding-left: 1.5rem;
  }

  .sm\:pt-8 {
    padding-top: 2rem;
  }

  .sm\:pr-8 {
    padding-right: 2rem;
  }

  .sm\:pb-8 {
    padding-bottom: 2rem;
  }

  .sm\:pl-8 {
    padding-left: 2rem;
  }

  .sm\:pt-10 {
    padding-top: 2.5rem;
  }

  .sm\:pr-10 {
    padding-right: 2.5rem;
  }

  .sm\:pb-10 {
    padding-bottom: 2.5rem;
  }

  .sm\:pl-10 {
    padding-left: 2.5rem;
  }

  .sm\:pt-12 {
    padding-top: 3rem;
  }

  .sm\:pr-12 {
    padding-right: 3rem;
  }

  .sm\:pb-12 {
    padding-bottom: 3rem;
  }

  .sm\:pl-12 {
    padding-left: 3rem;
  }

  .sm\:pt-16 {
    padding-top: 4rem;
  }

  .sm\:pr-16 {
    padding-right: 4rem;
  }

  .sm\:pb-16 {
    padding-bottom: 4rem;
  }

  .sm\:pl-16 {
    padding-left: 4rem;
  }

  .sm\:pt-20 {
    padding-top: 5rem;
  }

  .sm\:pr-20 {
    padding-right: 5rem;
  }

  .sm\:pb-20 {
    padding-bottom: 5rem;
  }

  .sm\:pl-20 {
    padding-left: 5rem;
  }

  .sm\:pt-24 {
    padding-top: 6rem;
  }

  .sm\:pr-24 {
    padding-right: 6rem;
  }

  .sm\:pb-24 {
    padding-bottom: 6rem;
  }

  .sm\:pl-24 {
    padding-left: 6rem;
  }

  .sm\:pt-32 {
    padding-top: 8rem;
  }

  .sm\:pr-32 {
    padding-right: 8rem;
  }

  .sm\:pb-32 {
    padding-bottom: 8rem;
  }

  .sm\:pl-32 {
    padding-left: 8rem;
  }

  .sm\:pt-40 {
    padding-top: 10rem;
  }

  .sm\:pr-40 {
    padding-right: 10rem;
  }

  .sm\:pb-40 {
    padding-bottom: 10rem;
  }

  .sm\:pl-40 {
    padding-left: 10rem;
  }

  .sm\:pt-48 {
    padding-top: 12rem;
  }

  .sm\:pr-48 {
    padding-right: 12rem;
  }

  .sm\:pb-48 {
    padding-bottom: 12rem;
  }

  .sm\:pl-48 {
    padding-left: 12rem;
  }

  .sm\:pt-56 {
    padding-top: 14rem;
  }

  .sm\:pr-56 {
    padding-right: 14rem;
  }

  .sm\:pb-56 {
    padding-bottom: 14rem;
  }

  .sm\:pl-56 {
    padding-left: 14rem;
  }

  .sm\:pt-64 {
    padding-top: 16rem;
  }

  .sm\:pr-64 {
    padding-right: 16rem;
  }

  .sm\:pb-64 {
    padding-bottom: 16rem;
  }

  .sm\:pl-64 {
    padding-left: 16rem;
  }

  .sm\:pt-px {
    padding-top: 1px;
  }

  .sm\:pr-px {
    padding-right: 1px;
  }

  .sm\:pb-px {
    padding-bottom: 1px;
  }

  .sm\:pl-px {
    padding-left: 1px;
  }

  .sm\:placeholder-grey-darkest::placeholder {
    color: #3d4852;
  }

  .sm\:placeholder-grey-darker::placeholder {
    color: #606f7b;
  }

  .sm\:placeholder-grey-dark::placeholder {
    color: #8795a1;
  }

  .sm\:placeholder-grey::placeholder {
    color: #b8c2cc;
  }

  .sm\:placeholder-grey-light::placeholder {
    color: #dae1e7;
  }

  .sm\:placeholder-grey-lighter::placeholder {
    color: #f1f5f8;
  }

  .sm\:placeholder-grey-lightest::placeholder {
    color: #f8fafc;
  }

  .sm\:placeholder-grey-mid-light::placeholder {
    color: #f3f3f4;
  }

  .sm\:placeholder-white-lightest::placeholder {
    color: #f4f4f4;
  }

  .sm\:placeholder-red-darkest::placeholder {
    color: #3b0d0c;
  }

  .sm\:placeholder-red-darker::placeholder {
    color: #621b18;
  }

  .sm\:placeholder-red-dark::placeholder {
    color: #cc1f1a;
  }

  .sm\:placeholder-red-light::placeholder {
    color: #ef5753;
  }

  .sm\:placeholder-red-lighter::placeholder {
    color: #f9acaa;
  }

  .sm\:placeholder-red-lightest::placeholder {
    color: #fcebea;
  }

  .sm\:placeholder-orange-darkest::placeholder {
    color: #462a16;
  }

  .sm\:placeholder-orange-darker::placeholder {
    color: #613b1f;
  }

  .sm\:placeholder-orange-dark::placeholder {
    color: #de751f;
  }

  .sm\:placeholder-orange-light::placeholder {
    color: #faad63;
  }

  .sm\:placeholder-orange-lighter::placeholder {
    color: #fcd9b6;
  }

  .sm\:placeholder-orange-lightest::placeholder {
    color: #fff5eb;
  }

  .sm\:placeholder-yellow-darkest::placeholder {
    color: #453411;
  }

  .sm\:placeholder-yellow-darker::placeholder {
    color: #684f1d;
  }

  .sm\:placeholder-yellow-dark::placeholder {
    color: #f2d024;
  }

  .sm\:placeholder-yellow-light::placeholder {
    color: #fff382;
  }

  .sm\:placeholder-yellow-lighter::placeholder {
    color: #fff9c2;
  }

  .sm\:placeholder-yellow-lightest::placeholder {
    color: #fcfbeb;
  }

  .sm\:placeholder-green-darkest::placeholder {
    color: #0f2f21;
  }

  .sm\:placeholder-green-darker::placeholder {
    color: #1a4731;
  }

  .sm\:placeholder-green-dark::placeholder {
    color: #1f9d55;
  }

  .sm\:placeholder-green-light::placeholder {
    color: #51d88a;
  }

  .sm\:placeholder-green-lighter::placeholder {
    color: #a2f5bf;
  }

  .sm\:placeholder-green-lightest::placeholder {
    color: #e3fcec;
  }

  .sm\:placeholder-teal-darkest::placeholder {
    color: #0d3331;
  }

  .sm\:placeholder-teal-darker::placeholder {
    color: #20504f;
  }

  .sm\:placeholder-teal-dark::placeholder {
    color: #38a89d;
  }

  .sm\:placeholder-teal-light::placeholder {
    color: #64d5ca;
  }

  .sm\:placeholder-teal-lighter::placeholder {
    color: #a0f0ed;
  }

  .sm\:placeholder-teal-lightest::placeholder {
    color: #e8fffe;
  }

  .sm\:placeholder-blue-darkest::placeholder {
    color: #12283a;
  }

  .sm\:placeholder-blue-darker::placeholder {
    color: #1c3d5a;
  }

  .sm\:placeholder-blue-dark::placeholder {
    color: #2779bd;
  }

  .sm\:placeholder-blue-light::placeholder {
    color: #6cb2eb;
  }

  .sm\:placeholder-blue-lighter::placeholder {
    color: #bcdefa;
  }

  .sm\:placeholder-blue-lightest::placeholder {
    color: #eff8ff;
  }

  .sm\:placeholder-indigo-darkest::placeholder {
    color: #191e38;
  }

  .sm\:placeholder-indigo-darker::placeholder {
    color: #2f365f;
  }

  .sm\:placeholder-indigo-dark::placeholder {
    color: #5661b3;
  }

  .sm\:placeholder-indigo-light::placeholder {
    color: #7886d7;
  }

  .sm\:placeholder-indigo-lighter::placeholder {
    color: #b2b7ff;
  }

  .sm\:placeholder-indigo-lightest::placeholder {
    color: #e6e8ff;
  }

  .sm\:placeholder-purple-darkest::placeholder {
    color: #21183c;
  }

  .sm\:placeholder-purple-darker::placeholder {
    color: #382b5f;
  }

  .sm\:placeholder-purple-dark::placeholder {
    color: #794acf;
  }

  .sm\:placeholder-purple-light::placeholder {
    color: #a779e9;
  }

  .sm\:placeholder-purple-lighter::placeholder {
    color: #d6bbfc;
  }

  .sm\:placeholder-purple-lightest::placeholder {
    color: #f3ebff;
  }

  .sm\:placeholder-pink-darkest::placeholder {
    color: #451225;
  }

  .sm\:placeholder-pink-darker::placeholder {
    color: #6f213f;
  }

  .sm\:placeholder-pink-dark::placeholder {
    color: #eb5286;
  }

  .sm\:placeholder-pink-light::placeholder {
    color: #fa7ea8;
  }

  .sm\:placeholder-pink-lighter::placeholder {
    color: #ffbbca;
  }

  .sm\:placeholder-pink-lightest::placeholder {
    color: #ffebef;
  }

  .sm\:placeholder-nav::placeholder {
    color: #3F495E;
  }

  .sm\:placeholder-side-nav::placeholder {
    color: #ECF0F1;
  }

  .sm\:placeholder-nav-item::placeholder {
    color: #626b7a;
  }

  .sm\:placeholder-light-border::placeholder {
    color: #dfe4e6;
  }

  .sm\:placeholder-white-medium::placeholder {
    color: #FAFAFA;
  }

  .sm\:placeholder-white-medium-dark::placeholder {
    color: #E5E9EB;
  }

  .sm\:placeholder-red-vibrant::placeholder {
    color: #e46050;
  }

  .sm\:placeholder-red-vibrant-dark::placeholder {
    color: #d64230;
  }

  .sm\:placeholder-primary::placeholder {
    color: #51BE99;
  }

  .sm\:placeholder-primary-dark::placeholder {
    color: #0e5f43;
  }

  .sm\:placeholder-warning::placeholder {
    color: #f4ab43;
  }

  .sm\:placeholder-warning-dark::placeholder {
    color: #c37c16;
  }

  .sm\:placeholder-black-dark::placeholder {
    color: #272634;
  }

  .sm\:placeholder-black-darkest::placeholder {
    color: #141418;
  }

  .sm\:placeholder-info::placeholder {
    color: #52bcdc;
  }

  .sm\:placeholder-info-dark::placeholder {
    color: #2cadd4;
  }

  .sm\:placeholder-success::placeholder {
    color: #72b159;
  }

  .sm\:placeholder-success-dark::placeholder {
    color: #5D9547;
  }

  .sm\:placeholder-transparent::placeholder {
    color: transparent;
  }

  .sm\:placeholder-black::placeholder {
    color: #000;
  }

  .sm\:placeholder-white::placeholder {
    color: #fff;
  }

  .sm\:placeholder-gray-100::placeholder {
    color: #f7fafc;
  }

  .sm\:placeholder-gray-200::placeholder {
    color: #edf2f7;
  }

  .sm\:placeholder-gray-300::placeholder {
    color: #e2e8f0;
  }

  .sm\:placeholder-gray-400::placeholder {
    color: #cbd5e0;
  }

  .sm\:placeholder-gray-500::placeholder {
    color: #a0aec0;
  }

  .sm\:placeholder-gray-600::placeholder {
    color: #718096;
  }

  .sm\:placeholder-gray-700::placeholder {
    color: #4a5568;
  }

  .sm\:placeholder-gray-800::placeholder {
    color: #2d3748;
  }

  .sm\:placeholder-gray-900::placeholder {
    color: #1a202c;
  }

  .sm\:placeholder-red-100::placeholder {
    color: #fff5f5;
  }

  .sm\:placeholder-red-200::placeholder {
    color: #fed7d7;
  }

  .sm\:placeholder-red-300::placeholder {
    color: #feb2b2;
  }

  .sm\:placeholder-red-400::placeholder {
    color: #fc8181;
  }

  .sm\:placeholder-red-500::placeholder {
    color: #f56565;
  }

  .sm\:placeholder-red-600::placeholder {
    color: #e53e3e;
  }

  .sm\:placeholder-red-700::placeholder {
    color: #c53030;
  }

  .sm\:placeholder-red-800::placeholder {
    color: #9b2c2c;
  }

  .sm\:placeholder-red-900::placeholder {
    color: #742a2a;
  }

  .sm\:placeholder-orange-100::placeholder {
    color: #fffaf0;
  }

  .sm\:placeholder-orange-200::placeholder {
    color: #feebc8;
  }

  .sm\:placeholder-orange-300::placeholder {
    color: #fbd38d;
  }

  .sm\:placeholder-orange-400::placeholder {
    color: #f6ad55;
  }

  .sm\:placeholder-orange-500::placeholder {
    color: #ed8936;
  }

  .sm\:placeholder-orange-600::placeholder {
    color: #dd6b20;
  }

  .sm\:placeholder-orange-700::placeholder {
    color: #c05621;
  }

  .sm\:placeholder-orange-800::placeholder {
    color: #9c4221;
  }

  .sm\:placeholder-orange-900::placeholder {
    color: #7b341e;
  }

  .sm\:placeholder-yellow-100::placeholder {
    color: #fffff0;
  }

  .sm\:placeholder-yellow-200::placeholder {
    color: #fefcbf;
  }

  .sm\:placeholder-yellow-300::placeholder {
    color: #faf089;
  }

  .sm\:placeholder-yellow-400::placeholder {
    color: #f6e05e;
  }

  .sm\:placeholder-yellow-500::placeholder {
    color: #ecc94b;
  }

  .sm\:placeholder-yellow-600::placeholder {
    color: #d69e2e;
  }

  .sm\:placeholder-yellow-700::placeholder {
    color: #b7791f;
  }

  .sm\:placeholder-yellow-800::placeholder {
    color: #975a16;
  }

  .sm\:placeholder-yellow-900::placeholder {
    color: #744210;
  }

  .sm\:placeholder-green-100::placeholder {
    color: #f0fff4;
  }

  .sm\:placeholder-green-200::placeholder {
    color: #c6f6d5;
  }

  .sm\:placeholder-green-300::placeholder {
    color: #9ae6b4;
  }

  .sm\:placeholder-green-400::placeholder {
    color: #68d391;
  }

  .sm\:placeholder-green-500::placeholder {
    color: #48bb78;
  }

  .sm\:placeholder-green-600::placeholder {
    color: #38a169;
  }

  .sm\:placeholder-green-700::placeholder {
    color: #2f855a;
  }

  .sm\:placeholder-green-800::placeholder {
    color: #276749;
  }

  .sm\:placeholder-green-900::placeholder {
    color: #22543d;
  }

  .sm\:placeholder-teal-100::placeholder {
    color: #e6fffa;
  }

  .sm\:placeholder-teal-200::placeholder {
    color: #b2f5ea;
  }

  .sm\:placeholder-teal-300::placeholder {
    color: #81e6d9;
  }

  .sm\:placeholder-teal-400::placeholder {
    color: #4fd1c5;
  }

  .sm\:placeholder-teal-500::placeholder {
    color: #38b2ac;
  }

  .sm\:placeholder-teal-600::placeholder {
    color: #319795;
  }

  .sm\:placeholder-teal-700::placeholder {
    color: #2c7a7b;
  }

  .sm\:placeholder-teal-800::placeholder {
    color: #285e61;
  }

  .sm\:placeholder-teal-900::placeholder {
    color: #234e52;
  }

  .sm\:placeholder-blue-100::placeholder {
    color: #ebf8ff;
  }

  .sm\:placeholder-blue-200::placeholder {
    color: #bee3f8;
  }

  .sm\:placeholder-blue-300::placeholder {
    color: #90cdf4;
  }

  .sm\:placeholder-blue-400::placeholder {
    color: #63b3ed;
  }

  .sm\:placeholder-blue-500::placeholder {
    color: #4299e1;
  }

  .sm\:placeholder-blue-600::placeholder {
    color: #3182ce;
  }

  .sm\:placeholder-blue-700::placeholder {
    color: #2b6cb0;
  }

  .sm\:placeholder-blue-800::placeholder {
    color: #2c5282;
  }

  .sm\:placeholder-blue-900::placeholder {
    color: #2a4365;
  }

  .sm\:placeholder-indigo-100::placeholder {
    color: #ebf4ff;
  }

  .sm\:placeholder-indigo-200::placeholder {
    color: #c3dafe;
  }

  .sm\:placeholder-indigo-300::placeholder {
    color: #a3bffa;
  }

  .sm\:placeholder-indigo-400::placeholder {
    color: #7f9cf5;
  }

  .sm\:placeholder-indigo-500::placeholder {
    color: #667eea;
  }

  .sm\:placeholder-indigo-600::placeholder {
    color: #5a67d8;
  }

  .sm\:placeholder-indigo-700::placeholder {
    color: #4c51bf;
  }

  .sm\:placeholder-indigo-800::placeholder {
    color: #434190;
  }

  .sm\:placeholder-indigo-900::placeholder {
    color: #3c366b;
  }

  .sm\:placeholder-purple-100::placeholder {
    color: #faf5ff;
  }

  .sm\:placeholder-purple-200::placeholder {
    color: #e9d8fd;
  }

  .sm\:placeholder-purple-300::placeholder {
    color: #d6bcfa;
  }

  .sm\:placeholder-purple-400::placeholder {
    color: #b794f4;
  }

  .sm\:placeholder-purple-500::placeholder {
    color: #9f7aea;
  }

  .sm\:placeholder-purple-600::placeholder {
    color: #805ad5;
  }

  .sm\:placeholder-purple-700::placeholder {
    color: #6b46c1;
  }

  .sm\:placeholder-purple-800::placeholder {
    color: #553c9a;
  }

  .sm\:placeholder-purple-900::placeholder {
    color: #44337a;
  }

  .sm\:placeholder-pink-100::placeholder {
    color: #fff5f7;
  }

  .sm\:placeholder-pink-200::placeholder {
    color: #fed7e2;
  }

  .sm\:placeholder-pink-300::placeholder {
    color: #fbb6ce;
  }

  .sm\:placeholder-pink-400::placeholder {
    color: #f687b3;
  }

  .sm\:placeholder-pink-500::placeholder {
    color: #ed64a6;
  }

  .sm\:placeholder-pink-600::placeholder {
    color: #d53f8c;
  }

  .sm\:placeholder-pink-700::placeholder {
    color: #b83280;
  }

  .sm\:placeholder-pink-800::placeholder {
    color: #97266d;
  }

  .sm\:placeholder-pink-900::placeholder {
    color: #702459;
  }

  .sm\:focus\:placeholder-grey-darkest:focus::placeholder {
    color: #3d4852;
  }

  .sm\:focus\:placeholder-grey-darker:focus::placeholder {
    color: #606f7b;
  }

  .sm\:focus\:placeholder-grey-dark:focus::placeholder {
    color: #8795a1;
  }

  .sm\:focus\:placeholder-grey:focus::placeholder {
    color: #b8c2cc;
  }

  .sm\:focus\:placeholder-grey-light:focus::placeholder {
    color: #dae1e7;
  }

  .sm\:focus\:placeholder-grey-lighter:focus::placeholder {
    color: #f1f5f8;
  }

  .sm\:focus\:placeholder-grey-lightest:focus::placeholder {
    color: #f8fafc;
  }

  .sm\:focus\:placeholder-grey-mid-light:focus::placeholder {
    color: #f3f3f4;
  }

  .sm\:focus\:placeholder-white-lightest:focus::placeholder {
    color: #f4f4f4;
  }

  .sm\:focus\:placeholder-red-darkest:focus::placeholder {
    color: #3b0d0c;
  }

  .sm\:focus\:placeholder-red-darker:focus::placeholder {
    color: #621b18;
  }

  .sm\:focus\:placeholder-red-dark:focus::placeholder {
    color: #cc1f1a;
  }

  .sm\:focus\:placeholder-red-light:focus::placeholder {
    color: #ef5753;
  }

  .sm\:focus\:placeholder-red-lighter:focus::placeholder {
    color: #f9acaa;
  }

  .sm\:focus\:placeholder-red-lightest:focus::placeholder {
    color: #fcebea;
  }

  .sm\:focus\:placeholder-orange-darkest:focus::placeholder {
    color: #462a16;
  }

  .sm\:focus\:placeholder-orange-darker:focus::placeholder {
    color: #613b1f;
  }

  .sm\:focus\:placeholder-orange-dark:focus::placeholder {
    color: #de751f;
  }

  .sm\:focus\:placeholder-orange-light:focus::placeholder {
    color: #faad63;
  }

  .sm\:focus\:placeholder-orange-lighter:focus::placeholder {
    color: #fcd9b6;
  }

  .sm\:focus\:placeholder-orange-lightest:focus::placeholder {
    color: #fff5eb;
  }

  .sm\:focus\:placeholder-yellow-darkest:focus::placeholder {
    color: #453411;
  }

  .sm\:focus\:placeholder-yellow-darker:focus::placeholder {
    color: #684f1d;
  }

  .sm\:focus\:placeholder-yellow-dark:focus::placeholder {
    color: #f2d024;
  }

  .sm\:focus\:placeholder-yellow-light:focus::placeholder {
    color: #fff382;
  }

  .sm\:focus\:placeholder-yellow-lighter:focus::placeholder {
    color: #fff9c2;
  }

  .sm\:focus\:placeholder-yellow-lightest:focus::placeholder {
    color: #fcfbeb;
  }

  .sm\:focus\:placeholder-green-darkest:focus::placeholder {
    color: #0f2f21;
  }

  .sm\:focus\:placeholder-green-darker:focus::placeholder {
    color: #1a4731;
  }

  .sm\:focus\:placeholder-green-dark:focus::placeholder {
    color: #1f9d55;
  }

  .sm\:focus\:placeholder-green-light:focus::placeholder {
    color: #51d88a;
  }

  .sm\:focus\:placeholder-green-lighter:focus::placeholder {
    color: #a2f5bf;
  }

  .sm\:focus\:placeholder-green-lightest:focus::placeholder {
    color: #e3fcec;
  }

  .sm\:focus\:placeholder-teal-darkest:focus::placeholder {
    color: #0d3331;
  }

  .sm\:focus\:placeholder-teal-darker:focus::placeholder {
    color: #20504f;
  }

  .sm\:focus\:placeholder-teal-dark:focus::placeholder {
    color: #38a89d;
  }

  .sm\:focus\:placeholder-teal-light:focus::placeholder {
    color: #64d5ca;
  }

  .sm\:focus\:placeholder-teal-lighter:focus::placeholder {
    color: #a0f0ed;
  }

  .sm\:focus\:placeholder-teal-lightest:focus::placeholder {
    color: #e8fffe;
  }

  .sm\:focus\:placeholder-blue-darkest:focus::placeholder {
    color: #12283a;
  }

  .sm\:focus\:placeholder-blue-darker:focus::placeholder {
    color: #1c3d5a;
  }

  .sm\:focus\:placeholder-blue-dark:focus::placeholder {
    color: #2779bd;
  }

  .sm\:focus\:placeholder-blue-light:focus::placeholder {
    color: #6cb2eb;
  }

  .sm\:focus\:placeholder-blue-lighter:focus::placeholder {
    color: #bcdefa;
  }

  .sm\:focus\:placeholder-blue-lightest:focus::placeholder {
    color: #eff8ff;
  }

  .sm\:focus\:placeholder-indigo-darkest:focus::placeholder {
    color: #191e38;
  }

  .sm\:focus\:placeholder-indigo-darker:focus::placeholder {
    color: #2f365f;
  }

  .sm\:focus\:placeholder-indigo-dark:focus::placeholder {
    color: #5661b3;
  }

  .sm\:focus\:placeholder-indigo-light:focus::placeholder {
    color: #7886d7;
  }

  .sm\:focus\:placeholder-indigo-lighter:focus::placeholder {
    color: #b2b7ff;
  }

  .sm\:focus\:placeholder-indigo-lightest:focus::placeholder {
    color: #e6e8ff;
  }

  .sm\:focus\:placeholder-purple-darkest:focus::placeholder {
    color: #21183c;
  }

  .sm\:focus\:placeholder-purple-darker:focus::placeholder {
    color: #382b5f;
  }

  .sm\:focus\:placeholder-purple-dark:focus::placeholder {
    color: #794acf;
  }

  .sm\:focus\:placeholder-purple-light:focus::placeholder {
    color: #a779e9;
  }

  .sm\:focus\:placeholder-purple-lighter:focus::placeholder {
    color: #d6bbfc;
  }

  .sm\:focus\:placeholder-purple-lightest:focus::placeholder {
    color: #f3ebff;
  }

  .sm\:focus\:placeholder-pink-darkest:focus::placeholder {
    color: #451225;
  }

  .sm\:focus\:placeholder-pink-darker:focus::placeholder {
    color: #6f213f;
  }

  .sm\:focus\:placeholder-pink-dark:focus::placeholder {
    color: #eb5286;
  }

  .sm\:focus\:placeholder-pink-light:focus::placeholder {
    color: #fa7ea8;
  }

  .sm\:focus\:placeholder-pink-lighter:focus::placeholder {
    color: #ffbbca;
  }

  .sm\:focus\:placeholder-pink-lightest:focus::placeholder {
    color: #ffebef;
  }

  .sm\:focus\:placeholder-nav:focus::placeholder {
    color: #3F495E;
  }

  .sm\:focus\:placeholder-side-nav:focus::placeholder {
    color: #ECF0F1;
  }

  .sm\:focus\:placeholder-nav-item:focus::placeholder {
    color: #626b7a;
  }

  .sm\:focus\:placeholder-light-border:focus::placeholder {
    color: #dfe4e6;
  }

  .sm\:focus\:placeholder-white-medium:focus::placeholder {
    color: #FAFAFA;
  }

  .sm\:focus\:placeholder-white-medium-dark:focus::placeholder {
    color: #E5E9EB;
  }

  .sm\:focus\:placeholder-red-vibrant:focus::placeholder {
    color: #e46050;
  }

  .sm\:focus\:placeholder-red-vibrant-dark:focus::placeholder {
    color: #d64230;
  }

  .sm\:focus\:placeholder-primary:focus::placeholder {
    color: #51BE99;
  }

  .sm\:focus\:placeholder-primary-dark:focus::placeholder {
    color: #0e5f43;
  }

  .sm\:focus\:placeholder-warning:focus::placeholder {
    color: #f4ab43;
  }

  .sm\:focus\:placeholder-warning-dark:focus::placeholder {
    color: #c37c16;
  }

  .sm\:focus\:placeholder-black-dark:focus::placeholder {
    color: #272634;
  }

  .sm\:focus\:placeholder-black-darkest:focus::placeholder {
    color: #141418;
  }

  .sm\:focus\:placeholder-info:focus::placeholder {
    color: #52bcdc;
  }

  .sm\:focus\:placeholder-info-dark:focus::placeholder {
    color: #2cadd4;
  }

  .sm\:focus\:placeholder-success:focus::placeholder {
    color: #72b159;
  }

  .sm\:focus\:placeholder-success-dark:focus::placeholder {
    color: #5D9547;
  }

  .sm\:focus\:placeholder-transparent:focus::placeholder {
    color: transparent;
  }

  .sm\:focus\:placeholder-black:focus::placeholder {
    color: #000;
  }

  .sm\:focus\:placeholder-white:focus::placeholder {
    color: #fff;
  }

  .sm\:focus\:placeholder-gray-100:focus::placeholder {
    color: #f7fafc;
  }

  .sm\:focus\:placeholder-gray-200:focus::placeholder {
    color: #edf2f7;
  }

  .sm\:focus\:placeholder-gray-300:focus::placeholder {
    color: #e2e8f0;
  }

  .sm\:focus\:placeholder-gray-400:focus::placeholder {
    color: #cbd5e0;
  }

  .sm\:focus\:placeholder-gray-500:focus::placeholder {
    color: #a0aec0;
  }

  .sm\:focus\:placeholder-gray-600:focus::placeholder {
    color: #718096;
  }

  .sm\:focus\:placeholder-gray-700:focus::placeholder {
    color: #4a5568;
  }

  .sm\:focus\:placeholder-gray-800:focus::placeholder {
    color: #2d3748;
  }

  .sm\:focus\:placeholder-gray-900:focus::placeholder {
    color: #1a202c;
  }

  .sm\:focus\:placeholder-red-100:focus::placeholder {
    color: #fff5f5;
  }

  .sm\:focus\:placeholder-red-200:focus::placeholder {
    color: #fed7d7;
  }

  .sm\:focus\:placeholder-red-300:focus::placeholder {
    color: #feb2b2;
  }

  .sm\:focus\:placeholder-red-400:focus::placeholder {
    color: #fc8181;
  }

  .sm\:focus\:placeholder-red-500:focus::placeholder {
    color: #f56565;
  }

  .sm\:focus\:placeholder-red-600:focus::placeholder {
    color: #e53e3e;
  }

  .sm\:focus\:placeholder-red-700:focus::placeholder {
    color: #c53030;
  }

  .sm\:focus\:placeholder-red-800:focus::placeholder {
    color: #9b2c2c;
  }

  .sm\:focus\:placeholder-red-900:focus::placeholder {
    color: #742a2a;
  }

  .sm\:focus\:placeholder-orange-100:focus::placeholder {
    color: #fffaf0;
  }

  .sm\:focus\:placeholder-orange-200:focus::placeholder {
    color: #feebc8;
  }

  .sm\:focus\:placeholder-orange-300:focus::placeholder {
    color: #fbd38d;
  }

  .sm\:focus\:placeholder-orange-400:focus::placeholder {
    color: #f6ad55;
  }

  .sm\:focus\:placeholder-orange-500:focus::placeholder {
    color: #ed8936;
  }

  .sm\:focus\:placeholder-orange-600:focus::placeholder {
    color: #dd6b20;
  }

  .sm\:focus\:placeholder-orange-700:focus::placeholder {
    color: #c05621;
  }

  .sm\:focus\:placeholder-orange-800:focus::placeholder {
    color: #9c4221;
  }

  .sm\:focus\:placeholder-orange-900:focus::placeholder {
    color: #7b341e;
  }

  .sm\:focus\:placeholder-yellow-100:focus::placeholder {
    color: #fffff0;
  }

  .sm\:focus\:placeholder-yellow-200:focus::placeholder {
    color: #fefcbf;
  }

  .sm\:focus\:placeholder-yellow-300:focus::placeholder {
    color: #faf089;
  }

  .sm\:focus\:placeholder-yellow-400:focus::placeholder {
    color: #f6e05e;
  }

  .sm\:focus\:placeholder-yellow-500:focus::placeholder {
    color: #ecc94b;
  }

  .sm\:focus\:placeholder-yellow-600:focus::placeholder {
    color: #d69e2e;
  }

  .sm\:focus\:placeholder-yellow-700:focus::placeholder {
    color: #b7791f;
  }

  .sm\:focus\:placeholder-yellow-800:focus::placeholder {
    color: #975a16;
  }

  .sm\:focus\:placeholder-yellow-900:focus::placeholder {
    color: #744210;
  }

  .sm\:focus\:placeholder-green-100:focus::placeholder {
    color: #f0fff4;
  }

  .sm\:focus\:placeholder-green-200:focus::placeholder {
    color: #c6f6d5;
  }

  .sm\:focus\:placeholder-green-300:focus::placeholder {
    color: #9ae6b4;
  }

  .sm\:focus\:placeholder-green-400:focus::placeholder {
    color: #68d391;
  }

  .sm\:focus\:placeholder-green-500:focus::placeholder {
    color: #48bb78;
  }

  .sm\:focus\:placeholder-green-600:focus::placeholder {
    color: #38a169;
  }

  .sm\:focus\:placeholder-green-700:focus::placeholder {
    color: #2f855a;
  }

  .sm\:focus\:placeholder-green-800:focus::placeholder {
    color: #276749;
  }

  .sm\:focus\:placeholder-green-900:focus::placeholder {
    color: #22543d;
  }

  .sm\:focus\:placeholder-teal-100:focus::placeholder {
    color: #e6fffa;
  }

  .sm\:focus\:placeholder-teal-200:focus::placeholder {
    color: #b2f5ea;
  }

  .sm\:focus\:placeholder-teal-300:focus::placeholder {
    color: #81e6d9;
  }

  .sm\:focus\:placeholder-teal-400:focus::placeholder {
    color: #4fd1c5;
  }

  .sm\:focus\:placeholder-teal-500:focus::placeholder {
    color: #38b2ac;
  }

  .sm\:focus\:placeholder-teal-600:focus::placeholder {
    color: #319795;
  }

  .sm\:focus\:placeholder-teal-700:focus::placeholder {
    color: #2c7a7b;
  }

  .sm\:focus\:placeholder-teal-800:focus::placeholder {
    color: #285e61;
  }

  .sm\:focus\:placeholder-teal-900:focus::placeholder {
    color: #234e52;
  }

  .sm\:focus\:placeholder-blue-100:focus::placeholder {
    color: #ebf8ff;
  }

  .sm\:focus\:placeholder-blue-200:focus::placeholder {
    color: #bee3f8;
  }

  .sm\:focus\:placeholder-blue-300:focus::placeholder {
    color: #90cdf4;
  }

  .sm\:focus\:placeholder-blue-400:focus::placeholder {
    color: #63b3ed;
  }

  .sm\:focus\:placeholder-blue-500:focus::placeholder {
    color: #4299e1;
  }

  .sm\:focus\:placeholder-blue-600:focus::placeholder {
    color: #3182ce;
  }

  .sm\:focus\:placeholder-blue-700:focus::placeholder {
    color: #2b6cb0;
  }

  .sm\:focus\:placeholder-blue-800:focus::placeholder {
    color: #2c5282;
  }

  .sm\:focus\:placeholder-blue-900:focus::placeholder {
    color: #2a4365;
  }

  .sm\:focus\:placeholder-indigo-100:focus::placeholder {
    color: #ebf4ff;
  }

  .sm\:focus\:placeholder-indigo-200:focus::placeholder {
    color: #c3dafe;
  }

  .sm\:focus\:placeholder-indigo-300:focus::placeholder {
    color: #a3bffa;
  }

  .sm\:focus\:placeholder-indigo-400:focus::placeholder {
    color: #7f9cf5;
  }

  .sm\:focus\:placeholder-indigo-500:focus::placeholder {
    color: #667eea;
  }

  .sm\:focus\:placeholder-indigo-600:focus::placeholder {
    color: #5a67d8;
  }

  .sm\:focus\:placeholder-indigo-700:focus::placeholder {
    color: #4c51bf;
  }

  .sm\:focus\:placeholder-indigo-800:focus::placeholder {
    color: #434190;
  }

  .sm\:focus\:placeholder-indigo-900:focus::placeholder {
    color: #3c366b;
  }

  .sm\:focus\:placeholder-purple-100:focus::placeholder {
    color: #faf5ff;
  }

  .sm\:focus\:placeholder-purple-200:focus::placeholder {
    color: #e9d8fd;
  }

  .sm\:focus\:placeholder-purple-300:focus::placeholder {
    color: #d6bcfa;
  }

  .sm\:focus\:placeholder-purple-400:focus::placeholder {
    color: #b794f4;
  }

  .sm\:focus\:placeholder-purple-500:focus::placeholder {
    color: #9f7aea;
  }

  .sm\:focus\:placeholder-purple-600:focus::placeholder {
    color: #805ad5;
  }

  .sm\:focus\:placeholder-purple-700:focus::placeholder {
    color: #6b46c1;
  }

  .sm\:focus\:placeholder-purple-800:focus::placeholder {
    color: #553c9a;
  }

  .sm\:focus\:placeholder-purple-900:focus::placeholder {
    color: #44337a;
  }

  .sm\:focus\:placeholder-pink-100:focus::placeholder {
    color: #fff5f7;
  }

  .sm\:focus\:placeholder-pink-200:focus::placeholder {
    color: #fed7e2;
  }

  .sm\:focus\:placeholder-pink-300:focus::placeholder {
    color: #fbb6ce;
  }

  .sm\:focus\:placeholder-pink-400:focus::placeholder {
    color: #f687b3;
  }

  .sm\:focus\:placeholder-pink-500:focus::placeholder {
    color: #ed64a6;
  }

  .sm\:focus\:placeholder-pink-600:focus::placeholder {
    color: #d53f8c;
  }

  .sm\:focus\:placeholder-pink-700:focus::placeholder {
    color: #b83280;
  }

  .sm\:focus\:placeholder-pink-800:focus::placeholder {
    color: #97266d;
  }

  .sm\:focus\:placeholder-pink-900:focus::placeholder {
    color: #702459;
  }

  .sm\:pointer-events-none {
    pointer-events: none;
  }

  .sm\:pointer-events-auto {
    pointer-events: auto;
  }

  .sm\:static {
    position: static;
  }

  .sm\:fixed {
    position: fixed;
  }

  .sm\:absolute {
    position: absolute;
  }

  .sm\:relative {
    position: relative;
  }

  .sm\:sticky {
    position: sticky;
  }

  .sm\:inset-0 {
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
  }

  .sm\:inset-auto {
    top: auto;
    right: auto;
    bottom: auto;
    left: auto;
  }

  .sm\:inset-y-0 {
    top: 0;
    bottom: 0;
  }

  .sm\:inset-x-0 {
    right: 0;
    left: 0;
  }

  .sm\:inset-y-auto {
    top: auto;
    bottom: auto;
  }

  .sm\:inset-x-auto {
    right: auto;
    left: auto;
  }

  .sm\:top-0 {
    top: 0;
  }

  .sm\:right-0 {
    right: 0;
  }

  .sm\:bottom-0 {
    bottom: 0;
  }

  .sm\:left-0 {
    left: 0;
  }

  .sm\:top-auto {
    top: auto;
  }

  .sm\:right-auto {
    right: auto;
  }

  .sm\:bottom-auto {
    bottom: auto;
  }

  .sm\:left-auto {
    left: auto;
  }

  .sm\:resize-none {
    resize: none;
  }

  .sm\:resize-y {
    resize: vertical;
  }

  .sm\:resize-x {
    resize: horizontal;
  }

  .sm\:resize {
    resize: both;
  }

  .sm\:shadow {
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
  }

  .sm\:shadow-md {
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
  }

  .sm\:shadow-lg {
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
  }

  .sm\:shadow-xl {
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
  }

  .sm\:shadow-2xl {
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
  }

  .sm\:shadow-inner {
    box-shadow: inset 0 2px 4px 0 rgba(0, 0, 0, 0.06);
  }

  .sm\:shadow-outline {
    box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.5);
  }

  .sm\:shadow-none {
    box-shadow: none;
  }

  .sm\:hover\:shadow:hover {
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
  }

  .sm\:hover\:shadow-md:hover {
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
  }

  .sm\:hover\:shadow-lg:hover {
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
  }

  .sm\:hover\:shadow-xl:hover {
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
  }

  .sm\:hover\:shadow-2xl:hover {
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
  }

  .sm\:hover\:shadow-inner:hover {
    box-shadow: inset 0 2px 4px 0 rgba(0, 0, 0, 0.06);
  }

  .sm\:hover\:shadow-outline:hover {
    box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.5);
  }

  .sm\:hover\:shadow-none:hover {
    box-shadow: none;
  }

  .sm\:focus\:shadow:focus {
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
  }

  .sm\:focus\:shadow-md:focus {
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
  }

  .sm\:focus\:shadow-lg:focus {
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
  }

  .sm\:focus\:shadow-xl:focus {
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
  }

  .sm\:focus\:shadow-2xl:focus {
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
  }

  .sm\:focus\:shadow-inner:focus {
    box-shadow: inset 0 2px 4px 0 rgba(0, 0, 0, 0.06);
  }

  .sm\:focus\:shadow-outline:focus {
    box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.5);
  }

  .sm\:focus\:shadow-none:focus {
    box-shadow: none;
  }

  .sm\:fill-current {
    fill: currentColor;
  }

  .sm\:stroke-current {
    stroke: currentColor;
  }

  .sm\:table-auto {
    table-layout: auto;
  }

  .sm\:table-fixed {
    table-layout: fixed;
  }

  .sm\:text-left {
    text-align: left;
  }

  .sm\:text-center {
    text-align: center;
  }

  .sm\:text-right {
    text-align: right;
  }

  .sm\:text-justify {
    text-align: justify;
  }

  .sm\:text-grey-darkest {
    color: #3d4852;
  }

  .sm\:text-grey-darker {
    color: #606f7b;
  }

  .sm\:text-grey-dark {
    color: #8795a1;
  }

  .sm\:text-grey {
    color: #b8c2cc;
  }

  .sm\:text-grey-light {
    color: #dae1e7;
  }

  .sm\:text-grey-lighter {
    color: #f1f5f8;
  }

  .sm\:text-grey-lightest {
    color: #f8fafc;
  }

  .sm\:text-grey-mid-light {
    color: #f3f3f4;
  }

  .sm\:text-white-lightest {
    color: #f4f4f4;
  }

  .sm\:text-red-darkest {
    color: #3b0d0c;
  }

  .sm\:text-red-darker {
    color: #621b18;
  }

  .sm\:text-red-dark {
    color: #cc1f1a;
  }

  .sm\:text-red-light {
    color: #ef5753;
  }

  .sm\:text-red-lighter {
    color: #f9acaa;
  }

  .sm\:text-red-lightest {
    color: #fcebea;
  }

  .sm\:text-orange-darkest {
    color: #462a16;
  }

  .sm\:text-orange-darker {
    color: #613b1f;
  }

  .sm\:text-orange-dark {
    color: #de751f;
  }

  .sm\:text-orange-light {
    color: #faad63;
  }

  .sm\:text-orange-lighter {
    color: #fcd9b6;
  }

  .sm\:text-orange-lightest {
    color: #fff5eb;
  }

  .sm\:text-yellow-darkest {
    color: #453411;
  }

  .sm\:text-yellow-darker {
    color: #684f1d;
  }

  .sm\:text-yellow-dark {
    color: #f2d024;
  }

  .sm\:text-yellow-light {
    color: #fff382;
  }

  .sm\:text-yellow-lighter {
    color: #fff9c2;
  }

  .sm\:text-yellow-lightest {
    color: #fcfbeb;
  }

  .sm\:text-green-darkest {
    color: #0f2f21;
  }

  .sm\:text-green-darker {
    color: #1a4731;
  }

  .sm\:text-green-dark {
    color: #1f9d55;
  }

  .sm\:text-green-light {
    color: #51d88a;
  }

  .sm\:text-green-lighter {
    color: #a2f5bf;
  }

  .sm\:text-green-lightest {
    color: #e3fcec;
  }

  .sm\:text-teal-darkest {
    color: #0d3331;
  }

  .sm\:text-teal-darker {
    color: #20504f;
  }

  .sm\:text-teal-dark {
    color: #38a89d;
  }

  .sm\:text-teal-light {
    color: #64d5ca;
  }

  .sm\:text-teal-lighter {
    color: #a0f0ed;
  }

  .sm\:text-teal-lightest {
    color: #e8fffe;
  }

  .sm\:text-blue-darkest {
    color: #12283a;
  }

  .sm\:text-blue-darker {
    color: #1c3d5a;
  }

  .sm\:text-blue-dark {
    color: #2779bd;
  }

  .sm\:text-blue-light {
    color: #6cb2eb;
  }

  .sm\:text-blue-lighter {
    color: #bcdefa;
  }

  .sm\:text-blue-lightest {
    color: #eff8ff;
  }

  .sm\:text-indigo-darkest {
    color: #191e38;
  }

  .sm\:text-indigo-darker {
    color: #2f365f;
  }

  .sm\:text-indigo-dark {
    color: #5661b3;
  }

  .sm\:text-indigo-light {
    color: #7886d7;
  }

  .sm\:text-indigo-lighter {
    color: #b2b7ff;
  }

  .sm\:text-indigo-lightest {
    color: #e6e8ff;
  }

  .sm\:text-purple-darkest {
    color: #21183c;
  }

  .sm\:text-purple-darker {
    color: #382b5f;
  }

  .sm\:text-purple-dark {
    color: #794acf;
  }

  .sm\:text-purple-light {
    color: #a779e9;
  }

  .sm\:text-purple-lighter {
    color: #d6bbfc;
  }

  .sm\:text-purple-lightest {
    color: #f3ebff;
  }

  .sm\:text-pink-darkest {
    color: #451225;
  }

  .sm\:text-pink-darker {
    color: #6f213f;
  }

  .sm\:text-pink-dark {
    color: #eb5286;
  }

  .sm\:text-pink-light {
    color: #fa7ea8;
  }

  .sm\:text-pink-lighter {
    color: #ffbbca;
  }

  .sm\:text-pink-lightest {
    color: #ffebef;
  }

  .sm\:text-nav {
    color: #3F495E;
  }

  .sm\:text-side-nav {
    color: #ECF0F1;
  }

  .sm\:text-nav-item {
    color: #626b7a;
  }

  .sm\:text-light-border {
    color: #dfe4e6;
  }

  .sm\:text-white-medium {
    color: #FAFAFA;
  }

  .sm\:text-white-medium-dark {
    color: #E5E9EB;
  }

  .sm\:text-red-vibrant {
    color: #e46050;
  }

  .sm\:text-red-vibrant-dark {
    color: #d64230;
  }

  .sm\:text-primary {
    color: #51BE99;
  }

  .sm\:text-primary-dark {
    color: #0e5f43;
  }

  .sm\:text-warning {
    color: #f4ab43;
  }

  .sm\:text-warning-dark {
    color: #c37c16;
  }

  .sm\:text-black-dark {
    color: #272634;
  }

  .sm\:text-black-darkest {
    color: #141418;
  }

  .sm\:text-info {
    color: #52bcdc;
  }

  .sm\:text-info-dark {
    color: #2cadd4;
  }

  .sm\:text-success {
    color: #72b159;
  }

  .sm\:text-success-dark {
    color: #5D9547;
  }

  .sm\:text-transparent {
    color: transparent;
  }

  .sm\:text-black {
    color: #000;
  }

  .sm\:text-white {
    color: #fff;
  }

  .sm\:text-gray-100 {
    color: #f7fafc;
  }

  .sm\:text-gray-200 {
    color: #edf2f7;
  }

  .sm\:text-gray-300 {
    color: #e2e8f0;
  }

  .sm\:text-gray-400 {
    color: #cbd5e0;
  }

  .sm\:text-gray-500 {
    color: #a0aec0;
  }

  .sm\:text-gray-600 {
    color: #718096;
  }

  .sm\:text-gray-700 {
    color: #4a5568;
  }

  .sm\:text-gray-800 {
    color: #2d3748;
  }

  .sm\:text-gray-900 {
    color: #1a202c;
  }

  .sm\:text-red-100 {
    color: #fff5f5;
  }

  .sm\:text-red-200 {
    color: #fed7d7;
  }

  .sm\:text-red-300 {
    color: #feb2b2;
  }

  .sm\:text-red-400 {
    color: #fc8181;
  }

  .sm\:text-red-500 {
    color: #f56565;
  }

  .sm\:text-red-600 {
    color: #e53e3e;
  }

  .sm\:text-red-700 {
    color: #c53030;
  }

  .sm\:text-red-800 {
    color: #9b2c2c;
  }

  .sm\:text-red-900 {
    color: #742a2a;
  }

  .sm\:text-orange-100 {
    color: #fffaf0;
  }

  .sm\:text-orange-200 {
    color: #feebc8;
  }

  .sm\:text-orange-300 {
    color: #fbd38d;
  }

  .sm\:text-orange-400 {
    color: #f6ad55;
  }

  .sm\:text-orange-500 {
    color: #ed8936;
  }

  .sm\:text-orange-600 {
    color: #dd6b20;
  }

  .sm\:text-orange-700 {
    color: #c05621;
  }

  .sm\:text-orange-800 {
    color: #9c4221;
  }

  .sm\:text-orange-900 {
    color: #7b341e;
  }

  .sm\:text-yellow-100 {
    color: #fffff0;
  }

  .sm\:text-yellow-200 {
    color: #fefcbf;
  }

  .sm\:text-yellow-300 {
    color: #faf089;
  }

  .sm\:text-yellow-400 {
    color: #f6e05e;
  }

  .sm\:text-yellow-500 {
    color: #ecc94b;
  }

  .sm\:text-yellow-600 {
    color: #d69e2e;
  }

  .sm\:text-yellow-700 {
    color: #b7791f;
  }

  .sm\:text-yellow-800 {
    color: #975a16;
  }

  .sm\:text-yellow-900 {
    color: #744210;
  }

  .sm\:text-green-100 {
    color: #f0fff4;
  }

  .sm\:text-green-200 {
    color: #c6f6d5;
  }

  .sm\:text-green-300 {
    color: #9ae6b4;
  }

  .sm\:text-green-400 {
    color: #68d391;
  }

  .sm\:text-green-500 {
    color: #48bb78;
  }

  .sm\:text-green-600 {
    color: #38a169;
  }

  .sm\:text-green-700 {
    color: #2f855a;
  }

  .sm\:text-green-800 {
    color: #276749;
  }

  .sm\:text-green-900 {
    color: #22543d;
  }

  .sm\:text-teal-100 {
    color: #e6fffa;
  }

  .sm\:text-teal-200 {
    color: #b2f5ea;
  }

  .sm\:text-teal-300 {
    color: #81e6d9;
  }

  .sm\:text-teal-400 {
    color: #4fd1c5;
  }

  .sm\:text-teal-500 {
    color: #38b2ac;
  }

  .sm\:text-teal-600 {
    color: #319795;
  }

  .sm\:text-teal-700 {
    color: #2c7a7b;
  }

  .sm\:text-teal-800 {
    color: #285e61;
  }

  .sm\:text-teal-900 {
    color: #234e52;
  }

  .sm\:text-blue-100 {
    color: #ebf8ff;
  }

  .sm\:text-blue-200 {
    color: #bee3f8;
  }

  .sm\:text-blue-300 {
    color: #90cdf4;
  }

  .sm\:text-blue-400 {
    color: #63b3ed;
  }

  .sm\:text-blue-500 {
    color: #4299e1;
  }

  .sm\:text-blue-600 {
    color: #3182ce;
  }

  .sm\:text-blue-700 {
    color: #2b6cb0;
  }

  .sm\:text-blue-800 {
    color: #2c5282;
  }

  .sm\:text-blue-900 {
    color: #2a4365;
  }

  .sm\:text-indigo-100 {
    color: #ebf4ff;
  }

  .sm\:text-indigo-200 {
    color: #c3dafe;
  }

  .sm\:text-indigo-300 {
    color: #a3bffa;
  }

  .sm\:text-indigo-400 {
    color: #7f9cf5;
  }

  .sm\:text-indigo-500 {
    color: #667eea;
  }

  .sm\:text-indigo-600 {
    color: #5a67d8;
  }

  .sm\:text-indigo-700 {
    color: #4c51bf;
  }

  .sm\:text-indigo-800 {
    color: #434190;
  }

  .sm\:text-indigo-900 {
    color: #3c366b;
  }

  .sm\:text-purple-100 {
    color: #faf5ff;
  }

  .sm\:text-purple-200 {
    color: #e9d8fd;
  }

  .sm\:text-purple-300 {
    color: #d6bcfa;
  }

  .sm\:text-purple-400 {
    color: #b794f4;
  }

  .sm\:text-purple-500 {
    color: #9f7aea;
  }

  .sm\:text-purple-600 {
    color: #805ad5;
  }

  .sm\:text-purple-700 {
    color: #6b46c1;
  }

  .sm\:text-purple-800 {
    color: #553c9a;
  }

  .sm\:text-purple-900 {
    color: #44337a;
  }

  .sm\:text-pink-100 {
    color: #fff5f7;
  }

  .sm\:text-pink-200 {
    color: #fed7e2;
  }

  .sm\:text-pink-300 {
    color: #fbb6ce;
  }

  .sm\:text-pink-400 {
    color: #f687b3;
  }

  .sm\:text-pink-500 {
    color: #ed64a6;
  }

  .sm\:text-pink-600 {
    color: #d53f8c;
  }

  .sm\:text-pink-700 {
    color: #b83280;
  }

  .sm\:text-pink-800 {
    color: #97266d;
  }

  .sm\:text-pink-900 {
    color: #702459;
  }

  .sm\:hover\:text-grey-darkest:hover {
    color: #3d4852;
  }

  .sm\:hover\:text-grey-darker:hover {
    color: #606f7b;
  }

  .sm\:hover\:text-grey-dark:hover {
    color: #8795a1;
  }

  .sm\:hover\:text-grey:hover {
    color: #b8c2cc;
  }

  .sm\:hover\:text-grey-light:hover {
    color: #dae1e7;
  }

  .sm\:hover\:text-grey-lighter:hover {
    color: #f1f5f8;
  }

  .sm\:hover\:text-grey-lightest:hover {
    color: #f8fafc;
  }

  .sm\:hover\:text-grey-mid-light:hover {
    color: #f3f3f4;
  }

  .sm\:hover\:text-white-lightest:hover {
    color: #f4f4f4;
  }

  .sm\:hover\:text-red-darkest:hover {
    color: #3b0d0c;
  }

  .sm\:hover\:text-red-darker:hover {
    color: #621b18;
  }

  .sm\:hover\:text-red-dark:hover {
    color: #cc1f1a;
  }

  .sm\:hover\:text-red-light:hover {
    color: #ef5753;
  }

  .sm\:hover\:text-red-lighter:hover {
    color: #f9acaa;
  }

  .sm\:hover\:text-red-lightest:hover {
    color: #fcebea;
  }

  .sm\:hover\:text-orange-darkest:hover {
    color: #462a16;
  }

  .sm\:hover\:text-orange-darker:hover {
    color: #613b1f;
  }

  .sm\:hover\:text-orange-dark:hover {
    color: #de751f;
  }

  .sm\:hover\:text-orange-light:hover {
    color: #faad63;
  }

  .sm\:hover\:text-orange-lighter:hover {
    color: #fcd9b6;
  }

  .sm\:hover\:text-orange-lightest:hover {
    color: #fff5eb;
  }

  .sm\:hover\:text-yellow-darkest:hover {
    color: #453411;
  }

  .sm\:hover\:text-yellow-darker:hover {
    color: #684f1d;
  }

  .sm\:hover\:text-yellow-dark:hover {
    color: #f2d024;
  }

  .sm\:hover\:text-yellow-light:hover {
    color: #fff382;
  }

  .sm\:hover\:text-yellow-lighter:hover {
    color: #fff9c2;
  }

  .sm\:hover\:text-yellow-lightest:hover {
    color: #fcfbeb;
  }

  .sm\:hover\:text-green-darkest:hover {
    color: #0f2f21;
  }

  .sm\:hover\:text-green-darker:hover {
    color: #1a4731;
  }

  .sm\:hover\:text-green-dark:hover {
    color: #1f9d55;
  }

  .sm\:hover\:text-green-light:hover {
    color: #51d88a;
  }

  .sm\:hover\:text-green-lighter:hover {
    color: #a2f5bf;
  }

  .sm\:hover\:text-green-lightest:hover {
    color: #e3fcec;
  }

  .sm\:hover\:text-teal-darkest:hover {
    color: #0d3331;
  }

  .sm\:hover\:text-teal-darker:hover {
    color: #20504f;
  }

  .sm\:hover\:text-teal-dark:hover {
    color: #38a89d;
  }

  .sm\:hover\:text-teal-light:hover {
    color: #64d5ca;
  }

  .sm\:hover\:text-teal-lighter:hover {
    color: #a0f0ed;
  }

  .sm\:hover\:text-teal-lightest:hover {
    color: #e8fffe;
  }

  .sm\:hover\:text-blue-darkest:hover {
    color: #12283a;
  }

  .sm\:hover\:text-blue-darker:hover {
    color: #1c3d5a;
  }

  .sm\:hover\:text-blue-dark:hover {
    color: #2779bd;
  }

  .sm\:hover\:text-blue-light:hover {
    color: #6cb2eb;
  }

  .sm\:hover\:text-blue-lighter:hover {
    color: #bcdefa;
  }

  .sm\:hover\:text-blue-lightest:hover {
    color: #eff8ff;
  }

  .sm\:hover\:text-indigo-darkest:hover {
    color: #191e38;
  }

  .sm\:hover\:text-indigo-darker:hover {
    color: #2f365f;
  }

  .sm\:hover\:text-indigo-dark:hover {
    color: #5661b3;
  }

  .sm\:hover\:text-indigo-light:hover {
    color: #7886d7;
  }

  .sm\:hover\:text-indigo-lighter:hover {
    color: #b2b7ff;
  }

  .sm\:hover\:text-indigo-lightest:hover {
    color: #e6e8ff;
  }

  .sm\:hover\:text-purple-darkest:hover {
    color: #21183c;
  }

  .sm\:hover\:text-purple-darker:hover {
    color: #382b5f;
  }

  .sm\:hover\:text-purple-dark:hover {
    color: #794acf;
  }

  .sm\:hover\:text-purple-light:hover {
    color: #a779e9;
  }

  .sm\:hover\:text-purple-lighter:hover {
    color: #d6bbfc;
  }

  .sm\:hover\:text-purple-lightest:hover {
    color: #f3ebff;
  }

  .sm\:hover\:text-pink-darkest:hover {
    color: #451225;
  }

  .sm\:hover\:text-pink-darker:hover {
    color: #6f213f;
  }

  .sm\:hover\:text-pink-dark:hover {
    color: #eb5286;
  }

  .sm\:hover\:text-pink-light:hover {
    color: #fa7ea8;
  }

  .sm\:hover\:text-pink-lighter:hover {
    color: #ffbbca;
  }

  .sm\:hover\:text-pink-lightest:hover {
    color: #ffebef;
  }

  .sm\:hover\:text-nav:hover {
    color: #3F495E;
  }

  .sm\:hover\:text-side-nav:hover {
    color: #ECF0F1;
  }

  .sm\:hover\:text-nav-item:hover {
    color: #626b7a;
  }

  .sm\:hover\:text-light-border:hover {
    color: #dfe4e6;
  }

  .sm\:hover\:text-white-medium:hover {
    color: #FAFAFA;
  }

  .sm\:hover\:text-white-medium-dark:hover {
    color: #E5E9EB;
  }

  .sm\:hover\:text-red-vibrant:hover {
    color: #e46050;
  }

  .sm\:hover\:text-red-vibrant-dark:hover {
    color: #d64230;
  }

  .sm\:hover\:text-primary:hover {
    color: #51BE99;
  }

  .sm\:hover\:text-primary-dark:hover {
    color: #0e5f43;
  }

  .sm\:hover\:text-warning:hover {
    color: #f4ab43;
  }

  .sm\:hover\:text-warning-dark:hover {
    color: #c37c16;
  }

  .sm\:hover\:text-black-dark:hover {
    color: #272634;
  }

  .sm\:hover\:text-black-darkest:hover {
    color: #141418;
  }

  .sm\:hover\:text-info:hover {
    color: #52bcdc;
  }

  .sm\:hover\:text-info-dark:hover {
    color: #2cadd4;
  }

  .sm\:hover\:text-success:hover {
    color: #72b159;
  }

  .sm\:hover\:text-success-dark:hover {
    color: #5D9547;
  }

  .sm\:hover\:text-transparent:hover {
    color: transparent;
  }

  .sm\:hover\:text-black:hover {
    color: #000;
  }

  .sm\:hover\:text-white:hover {
    color: #fff;
  }

  .sm\:hover\:text-gray-100:hover {
    color: #f7fafc;
  }

  .sm\:hover\:text-gray-200:hover {
    color: #edf2f7;
  }

  .sm\:hover\:text-gray-300:hover {
    color: #e2e8f0;
  }

  .sm\:hover\:text-gray-400:hover {
    color: #cbd5e0;
  }

  .sm\:hover\:text-gray-500:hover {
    color: #a0aec0;
  }

  .sm\:hover\:text-gray-600:hover {
    color: #718096;
  }

  .sm\:hover\:text-gray-700:hover {
    color: #4a5568;
  }

  .sm\:hover\:text-gray-800:hover {
    color: #2d3748;
  }

  .sm\:hover\:text-gray-900:hover {
    color: #1a202c;
  }

  .sm\:hover\:text-red-100:hover {
    color: #fff5f5;
  }

  .sm\:hover\:text-red-200:hover {
    color: #fed7d7;
  }

  .sm\:hover\:text-red-300:hover {
    color: #feb2b2;
  }

  .sm\:hover\:text-red-400:hover {
    color: #fc8181;
  }

  .sm\:hover\:text-red-500:hover {
    color: #f56565;
  }

  .sm\:hover\:text-red-600:hover {
    color: #e53e3e;
  }

  .sm\:hover\:text-red-700:hover {
    color: #c53030;
  }

  .sm\:hover\:text-red-800:hover {
    color: #9b2c2c;
  }

  .sm\:hover\:text-red-900:hover {
    color: #742a2a;
  }

  .sm\:hover\:text-orange-100:hover {
    color: #fffaf0;
  }

  .sm\:hover\:text-orange-200:hover {
    color: #feebc8;
  }

  .sm\:hover\:text-orange-300:hover {
    color: #fbd38d;
  }

  .sm\:hover\:text-orange-400:hover {
    color: #f6ad55;
  }

  .sm\:hover\:text-orange-500:hover {
    color: #ed8936;
  }

  .sm\:hover\:text-orange-600:hover {
    color: #dd6b20;
  }

  .sm\:hover\:text-orange-700:hover {
    color: #c05621;
  }

  .sm\:hover\:text-orange-800:hover {
    color: #9c4221;
  }

  .sm\:hover\:text-orange-900:hover {
    color: #7b341e;
  }

  .sm\:hover\:text-yellow-100:hover {
    color: #fffff0;
  }

  .sm\:hover\:text-yellow-200:hover {
    color: #fefcbf;
  }

  .sm\:hover\:text-yellow-300:hover {
    color: #faf089;
  }

  .sm\:hover\:text-yellow-400:hover {
    color: #f6e05e;
  }

  .sm\:hover\:text-yellow-500:hover {
    color: #ecc94b;
  }

  .sm\:hover\:text-yellow-600:hover {
    color: #d69e2e;
  }

  .sm\:hover\:text-yellow-700:hover {
    color: #b7791f;
  }

  .sm\:hover\:text-yellow-800:hover {
    color: #975a16;
  }

  .sm\:hover\:text-yellow-900:hover {
    color: #744210;
  }

  .sm\:hover\:text-green-100:hover {
    color: #f0fff4;
  }

  .sm\:hover\:text-green-200:hover {
    color: #c6f6d5;
  }

  .sm\:hover\:text-green-300:hover {
    color: #9ae6b4;
  }

  .sm\:hover\:text-green-400:hover {
    color: #68d391;
  }

  .sm\:hover\:text-green-500:hover {
    color: #48bb78;
  }

  .sm\:hover\:text-green-600:hover {
    color: #38a169;
  }

  .sm\:hover\:text-green-700:hover {
    color: #2f855a;
  }

  .sm\:hover\:text-green-800:hover {
    color: #276749;
  }

  .sm\:hover\:text-green-900:hover {
    color: #22543d;
  }

  .sm\:hover\:text-teal-100:hover {
    color: #e6fffa;
  }

  .sm\:hover\:text-teal-200:hover {
    color: #b2f5ea;
  }

  .sm\:hover\:text-teal-300:hover {
    color: #81e6d9;
  }

  .sm\:hover\:text-teal-400:hover {
    color: #4fd1c5;
  }

  .sm\:hover\:text-teal-500:hover {
    color: #38b2ac;
  }

  .sm\:hover\:text-teal-600:hover {
    color: #319795;
  }

  .sm\:hover\:text-teal-700:hover {
    color: #2c7a7b;
  }

  .sm\:hover\:text-teal-800:hover {
    color: #285e61;
  }

  .sm\:hover\:text-teal-900:hover {
    color: #234e52;
  }

  .sm\:hover\:text-blue-100:hover {
    color: #ebf8ff;
  }

  .sm\:hover\:text-blue-200:hover {
    color: #bee3f8;
  }

  .sm\:hover\:text-blue-300:hover {
    color: #90cdf4;
  }

  .sm\:hover\:text-blue-400:hover {
    color: #63b3ed;
  }

  .sm\:hover\:text-blue-500:hover {
    color: #4299e1;
  }

  .sm\:hover\:text-blue-600:hover {
    color: #3182ce;
  }

  .sm\:hover\:text-blue-700:hover {
    color: #2b6cb0;
  }

  .sm\:hover\:text-blue-800:hover {
    color: #2c5282;
  }

  .sm\:hover\:text-blue-900:hover {
    color: #2a4365;
  }

  .sm\:hover\:text-indigo-100:hover {
    color: #ebf4ff;
  }

  .sm\:hover\:text-indigo-200:hover {
    color: #c3dafe;
  }

  .sm\:hover\:text-indigo-300:hover {
    color: #a3bffa;
  }

  .sm\:hover\:text-indigo-400:hover {
    color: #7f9cf5;
  }

  .sm\:hover\:text-indigo-500:hover {
    color: #667eea;
  }

  .sm\:hover\:text-indigo-600:hover {
    color: #5a67d8;
  }

  .sm\:hover\:text-indigo-700:hover {
    color: #4c51bf;
  }

  .sm\:hover\:text-indigo-800:hover {
    color: #434190;
  }

  .sm\:hover\:text-indigo-900:hover {
    color: #3c366b;
  }

  .sm\:hover\:text-purple-100:hover {
    color: #faf5ff;
  }

  .sm\:hover\:text-purple-200:hover {
    color: #e9d8fd;
  }

  .sm\:hover\:text-purple-300:hover {
    color: #d6bcfa;
  }

  .sm\:hover\:text-purple-400:hover {
    color: #b794f4;
  }

  .sm\:hover\:text-purple-500:hover {
    color: #9f7aea;
  }

  .sm\:hover\:text-purple-600:hover {
    color: #805ad5;
  }

  .sm\:hover\:text-purple-700:hover {
    color: #6b46c1;
  }

  .sm\:hover\:text-purple-800:hover {
    color: #553c9a;
  }

  .sm\:hover\:text-purple-900:hover {
    color: #44337a;
  }

  .sm\:hover\:text-pink-100:hover {
    color: #fff5f7;
  }

  .sm\:hover\:text-pink-200:hover {
    color: #fed7e2;
  }

  .sm\:hover\:text-pink-300:hover {
    color: #fbb6ce;
  }

  .sm\:hover\:text-pink-400:hover {
    color: #f687b3;
  }

  .sm\:hover\:text-pink-500:hover {
    color: #ed64a6;
  }

  .sm\:hover\:text-pink-600:hover {
    color: #d53f8c;
  }

  .sm\:hover\:text-pink-700:hover {
    color: #b83280;
  }

  .sm\:hover\:text-pink-800:hover {
    color: #97266d;
  }

  .sm\:hover\:text-pink-900:hover {
    color: #702459;
  }

  .sm\:focus\:text-grey-darkest:focus {
    color: #3d4852;
  }

  .sm\:focus\:text-grey-darker:focus {
    color: #606f7b;
  }

  .sm\:focus\:text-grey-dark:focus {
    color: #8795a1;
  }

  .sm\:focus\:text-grey:focus {
    color: #b8c2cc;
  }

  .sm\:focus\:text-grey-light:focus {
    color: #dae1e7;
  }

  .sm\:focus\:text-grey-lighter:focus {
    color: #f1f5f8;
  }

  .sm\:focus\:text-grey-lightest:focus {
    color: #f8fafc;
  }

  .sm\:focus\:text-grey-mid-light:focus {
    color: #f3f3f4;
  }

  .sm\:focus\:text-white-lightest:focus {
    color: #f4f4f4;
  }

  .sm\:focus\:text-red-darkest:focus {
    color: #3b0d0c;
  }

  .sm\:focus\:text-red-darker:focus {
    color: #621b18;
  }

  .sm\:focus\:text-red-dark:focus {
    color: #cc1f1a;
  }

  .sm\:focus\:text-red-light:focus {
    color: #ef5753;
  }

  .sm\:focus\:text-red-lighter:focus {
    color: #f9acaa;
  }

  .sm\:focus\:text-red-lightest:focus {
    color: #fcebea;
  }

  .sm\:focus\:text-orange-darkest:focus {
    color: #462a16;
  }

  .sm\:focus\:text-orange-darker:focus {
    color: #613b1f;
  }

  .sm\:focus\:text-orange-dark:focus {
    color: #de751f;
  }

  .sm\:focus\:text-orange-light:focus {
    color: #faad63;
  }

  .sm\:focus\:text-orange-lighter:focus {
    color: #fcd9b6;
  }

  .sm\:focus\:text-orange-lightest:focus {
    color: #fff5eb;
  }

  .sm\:focus\:text-yellow-darkest:focus {
    color: #453411;
  }

  .sm\:focus\:text-yellow-darker:focus {
    color: #684f1d;
  }

  .sm\:focus\:text-yellow-dark:focus {
    color: #f2d024;
  }

  .sm\:focus\:text-yellow-light:focus {
    color: #fff382;
  }

  .sm\:focus\:text-yellow-lighter:focus {
    color: #fff9c2;
  }

  .sm\:focus\:text-yellow-lightest:focus {
    color: #fcfbeb;
  }

  .sm\:focus\:text-green-darkest:focus {
    color: #0f2f21;
  }

  .sm\:focus\:text-green-darker:focus {
    color: #1a4731;
  }

  .sm\:focus\:text-green-dark:focus {
    color: #1f9d55;
  }

  .sm\:focus\:text-green-light:focus {
    color: #51d88a;
  }

  .sm\:focus\:text-green-lighter:focus {
    color: #a2f5bf;
  }

  .sm\:focus\:text-green-lightest:focus {
    color: #e3fcec;
  }

  .sm\:focus\:text-teal-darkest:focus {
    color: #0d3331;
  }

  .sm\:focus\:text-teal-darker:focus {
    color: #20504f;
  }

  .sm\:focus\:text-teal-dark:focus {
    color: #38a89d;
  }

  .sm\:focus\:text-teal-light:focus {
    color: #64d5ca;
  }

  .sm\:focus\:text-teal-lighter:focus {
    color: #a0f0ed;
  }

  .sm\:focus\:text-teal-lightest:focus {
    color: #e8fffe;
  }

  .sm\:focus\:text-blue-darkest:focus {
    color: #12283a;
  }

  .sm\:focus\:text-blue-darker:focus {
    color: #1c3d5a;
  }

  .sm\:focus\:text-blue-dark:focus {
    color: #2779bd;
  }

  .sm\:focus\:text-blue-light:focus {
    color: #6cb2eb;
  }

  .sm\:focus\:text-blue-lighter:focus {
    color: #bcdefa;
  }

  .sm\:focus\:text-blue-lightest:focus {
    color: #eff8ff;
  }

  .sm\:focus\:text-indigo-darkest:focus {
    color: #191e38;
  }

  .sm\:focus\:text-indigo-darker:focus {
    color: #2f365f;
  }

  .sm\:focus\:text-indigo-dark:focus {
    color: #5661b3;
  }

  .sm\:focus\:text-indigo-light:focus {
    color: #7886d7;
  }

  .sm\:focus\:text-indigo-lighter:focus {
    color: #b2b7ff;
  }

  .sm\:focus\:text-indigo-lightest:focus {
    color: #e6e8ff;
  }

  .sm\:focus\:text-purple-darkest:focus {
    color: #21183c;
  }

  .sm\:focus\:text-purple-darker:focus {
    color: #382b5f;
  }

  .sm\:focus\:text-purple-dark:focus {
    color: #794acf;
  }

  .sm\:focus\:text-purple-light:focus {
    color: #a779e9;
  }

  .sm\:focus\:text-purple-lighter:focus {
    color: #d6bbfc;
  }

  .sm\:focus\:text-purple-lightest:focus {
    color: #f3ebff;
  }

  .sm\:focus\:text-pink-darkest:focus {
    color: #451225;
  }

  .sm\:focus\:text-pink-darker:focus {
    color: #6f213f;
  }

  .sm\:focus\:text-pink-dark:focus {
    color: #eb5286;
  }

  .sm\:focus\:text-pink-light:focus {
    color: #fa7ea8;
  }

  .sm\:focus\:text-pink-lighter:focus {
    color: #ffbbca;
  }

  .sm\:focus\:text-pink-lightest:focus {
    color: #ffebef;
  }

  .sm\:focus\:text-nav:focus {
    color: #3F495E;
  }

  .sm\:focus\:text-side-nav:focus {
    color: #ECF0F1;
  }

  .sm\:focus\:text-nav-item:focus {
    color: #626b7a;
  }

  .sm\:focus\:text-light-border:focus {
    color: #dfe4e6;
  }

  .sm\:focus\:text-white-medium:focus {
    color: #FAFAFA;
  }

  .sm\:focus\:text-white-medium-dark:focus {
    color: #E5E9EB;
  }

  .sm\:focus\:text-red-vibrant:focus {
    color: #e46050;
  }

  .sm\:focus\:text-red-vibrant-dark:focus {
    color: #d64230;
  }

  .sm\:focus\:text-primary:focus {
    color: #51BE99;
  }

  .sm\:focus\:text-primary-dark:focus {
    color: #0e5f43;
  }

  .sm\:focus\:text-warning:focus {
    color: #f4ab43;
  }

  .sm\:focus\:text-warning-dark:focus {
    color: #c37c16;
  }

  .sm\:focus\:text-black-dark:focus {
    color: #272634;
  }

  .sm\:focus\:text-black-darkest:focus {
    color: #141418;
  }

  .sm\:focus\:text-info:focus {
    color: #52bcdc;
  }

  .sm\:focus\:text-info-dark:focus {
    color: #2cadd4;
  }

  .sm\:focus\:text-success:focus {
    color: #72b159;
  }

  .sm\:focus\:text-success-dark:focus {
    color: #5D9547;
  }

  .sm\:focus\:text-transparent:focus {
    color: transparent;
  }

  .sm\:focus\:text-black:focus {
    color: #000;
  }

  .sm\:focus\:text-white:focus {
    color: #fff;
  }

  .sm\:focus\:text-gray-100:focus {
    color: #f7fafc;
  }

  .sm\:focus\:text-gray-200:focus {
    color: #edf2f7;
  }

  .sm\:focus\:text-gray-300:focus {
    color: #e2e8f0;
  }

  .sm\:focus\:text-gray-400:focus {
    color: #cbd5e0;
  }

  .sm\:focus\:text-gray-500:focus {
    color: #a0aec0;
  }

  .sm\:focus\:text-gray-600:focus {
    color: #718096;
  }

  .sm\:focus\:text-gray-700:focus {
    color: #4a5568;
  }

  .sm\:focus\:text-gray-800:focus {
    color: #2d3748;
  }

  .sm\:focus\:text-gray-900:focus {
    color: #1a202c;
  }

  .sm\:focus\:text-red-100:focus {
    color: #fff5f5;
  }

  .sm\:focus\:text-red-200:focus {
    color: #fed7d7;
  }

  .sm\:focus\:text-red-300:focus {
    color: #feb2b2;
  }

  .sm\:focus\:text-red-400:focus {
    color: #fc8181;
  }

  .sm\:focus\:text-red-500:focus {
    color: #f56565;
  }

  .sm\:focus\:text-red-600:focus {
    color: #e53e3e;
  }

  .sm\:focus\:text-red-700:focus {
    color: #c53030;
  }

  .sm\:focus\:text-red-800:focus {
    color: #9b2c2c;
  }

  .sm\:focus\:text-red-900:focus {
    color: #742a2a;
  }

  .sm\:focus\:text-orange-100:focus {
    color: #fffaf0;
  }

  .sm\:focus\:text-orange-200:focus {
    color: #feebc8;
  }

  .sm\:focus\:text-orange-300:focus {
    color: #fbd38d;
  }

  .sm\:focus\:text-orange-400:focus {
    color: #f6ad55;
  }

  .sm\:focus\:text-orange-500:focus {
    color: #ed8936;
  }

  .sm\:focus\:text-orange-600:focus {
    color: #dd6b20;
  }

  .sm\:focus\:text-orange-700:focus {
    color: #c05621;
  }

  .sm\:focus\:text-orange-800:focus {
    color: #9c4221;
  }

  .sm\:focus\:text-orange-900:focus {
    color: #7b341e;
  }

  .sm\:focus\:text-yellow-100:focus {
    color: #fffff0;
  }

  .sm\:focus\:text-yellow-200:focus {
    color: #fefcbf;
  }

  .sm\:focus\:text-yellow-300:focus {
    color: #faf089;
  }

  .sm\:focus\:text-yellow-400:focus {
    color: #f6e05e;
  }

  .sm\:focus\:text-yellow-500:focus {
    color: #ecc94b;
  }

  .sm\:focus\:text-yellow-600:focus {
    color: #d69e2e;
  }

  .sm\:focus\:text-yellow-700:focus {
    color: #b7791f;
  }

  .sm\:focus\:text-yellow-800:focus {
    color: #975a16;
  }

  .sm\:focus\:text-yellow-900:focus {
    color: #744210;
  }

  .sm\:focus\:text-green-100:focus {
    color: #f0fff4;
  }

  .sm\:focus\:text-green-200:focus {
    color: #c6f6d5;
  }

  .sm\:focus\:text-green-300:focus {
    color: #9ae6b4;
  }

  .sm\:focus\:text-green-400:focus {
    color: #68d391;
  }

  .sm\:focus\:text-green-500:focus {
    color: #48bb78;
  }

  .sm\:focus\:text-green-600:focus {
    color: #38a169;
  }

  .sm\:focus\:text-green-700:focus {
    color: #2f855a;
  }

  .sm\:focus\:text-green-800:focus {
    color: #276749;
  }

  .sm\:focus\:text-green-900:focus {
    color: #22543d;
  }

  .sm\:focus\:text-teal-100:focus {
    color: #e6fffa;
  }

  .sm\:focus\:text-teal-200:focus {
    color: #b2f5ea;
  }

  .sm\:focus\:text-teal-300:focus {
    color: #81e6d9;
  }

  .sm\:focus\:text-teal-400:focus {
    color: #4fd1c5;
  }

  .sm\:focus\:text-teal-500:focus {
    color: #38b2ac;
  }

  .sm\:focus\:text-teal-600:focus {
    color: #319795;
  }

  .sm\:focus\:text-teal-700:focus {
    color: #2c7a7b;
  }

  .sm\:focus\:text-teal-800:focus {
    color: #285e61;
  }

  .sm\:focus\:text-teal-900:focus {
    color: #234e52;
  }

  .sm\:focus\:text-blue-100:focus {
    color: #ebf8ff;
  }

  .sm\:focus\:text-blue-200:focus {
    color: #bee3f8;
  }

  .sm\:focus\:text-blue-300:focus {
    color: #90cdf4;
  }

  .sm\:focus\:text-blue-400:focus {
    color: #63b3ed;
  }

  .sm\:focus\:text-blue-500:focus {
    color: #4299e1;
  }

  .sm\:focus\:text-blue-600:focus {
    color: #3182ce;
  }

  .sm\:focus\:text-blue-700:focus {
    color: #2b6cb0;
  }

  .sm\:focus\:text-blue-800:focus {
    color: #2c5282;
  }

  .sm\:focus\:text-blue-900:focus {
    color: #2a4365;
  }

  .sm\:focus\:text-indigo-100:focus {
    color: #ebf4ff;
  }

  .sm\:focus\:text-indigo-200:focus {
    color: #c3dafe;
  }

  .sm\:focus\:text-indigo-300:focus {
    color: #a3bffa;
  }

  .sm\:focus\:text-indigo-400:focus {
    color: #7f9cf5;
  }

  .sm\:focus\:text-indigo-500:focus {
    color: #667eea;
  }

  .sm\:focus\:text-indigo-600:focus {
    color: #5a67d8;
  }

  .sm\:focus\:text-indigo-700:focus {
    color: #4c51bf;
  }

  .sm\:focus\:text-indigo-800:focus {
    color: #434190;
  }

  .sm\:focus\:text-indigo-900:focus {
    color: #3c366b;
  }

  .sm\:focus\:text-purple-100:focus {
    color: #faf5ff;
  }

  .sm\:focus\:text-purple-200:focus {
    color: #e9d8fd;
  }

  .sm\:focus\:text-purple-300:focus {
    color: #d6bcfa;
  }

  .sm\:focus\:text-purple-400:focus {
    color: #b794f4;
  }

  .sm\:focus\:text-purple-500:focus {
    color: #9f7aea;
  }

  .sm\:focus\:text-purple-600:focus {
    color: #805ad5;
  }

  .sm\:focus\:text-purple-700:focus {
    color: #6b46c1;
  }

  .sm\:focus\:text-purple-800:focus {
    color: #553c9a;
  }

  .sm\:focus\:text-purple-900:focus {
    color: #44337a;
  }

  .sm\:focus\:text-pink-100:focus {
    color: #fff5f7;
  }

  .sm\:focus\:text-pink-200:focus {
    color: #fed7e2;
  }

  .sm\:focus\:text-pink-300:focus {
    color: #fbb6ce;
  }

  .sm\:focus\:text-pink-400:focus {
    color: #f687b3;
  }

  .sm\:focus\:text-pink-500:focus {
    color: #ed64a6;
  }

  .sm\:focus\:text-pink-600:focus {
    color: #d53f8c;
  }

  .sm\:focus\:text-pink-700:focus {
    color: #b83280;
  }

  .sm\:focus\:text-pink-800:focus {
    color: #97266d;
  }

  .sm\:focus\:text-pink-900:focus {
    color: #702459;
  }

  .sm\:text-xs {
    font-size: 0.75rem;
  }

  .sm\:text-sm {
    font-size: 0.875rem;
  }

  .sm\:text-base {
    font-size: 1rem;
  }

  .sm\:text-lg {
    font-size: 1.125rem;
  }

  .sm\:text-xl {
    font-size: 1.25rem;
  }

  .sm\:text-2xl {
    font-size: 1.5rem;
  }

  .sm\:text-3xl {
    font-size: 1.875rem;
  }

  .sm\:text-4xl {
    font-size: 2.25rem;
  }

  .sm\:text-5xl {
    font-size: 3rem;
  }

  .sm\:text-6xl {
    font-size: 4rem;
  }

  .sm\:italic {
    font-style: italic;
  }

  .sm\:not-italic {
    font-style: normal;
  }

  .sm\:uppercase {
    text-transform: uppercase;
  }

  .sm\:lowercase {
    text-transform: lowercase;
  }

  .sm\:capitalize {
    text-transform: capitalize;
  }

  .sm\:normal-case {
    text-transform: none;
  }

  .sm\:underline {
    text-decoration: underline;
  }

  .sm\:line-through {
    text-decoration: line-through;
  }

  .sm\:no-underline {
    text-decoration: none;
  }

  .sm\:hover\:underline:hover {
    text-decoration: underline;
  }

  .sm\:hover\:line-through:hover {
    text-decoration: line-through;
  }

  .sm\:hover\:no-underline:hover {
    text-decoration: none;
  }

  .sm\:focus\:underline:focus {
    text-decoration: underline;
  }

  .sm\:focus\:line-through:focus {
    text-decoration: line-through;
  }

  .sm\:focus\:no-underline:focus {
    text-decoration: none;
  }

  .sm\:antialiased {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }

  .sm\:subpixel-antialiased {
    -webkit-font-smoothing: auto;
    -moz-osx-font-smoothing: auto;
  }

  .sm\:tracking-tighter {
    letter-spacing: -0.05em;
  }

  .sm\:tracking-tight {
    letter-spacing: -0.025em;
  }

  .sm\:tracking-normal {
    letter-spacing: 0;
  }

  .sm\:tracking-wide {
    letter-spacing: 0.025em;
  }

  .sm\:tracking-wider {
    letter-spacing: 0.05em;
  }

  .sm\:tracking-widest {
    letter-spacing: 0.1em;
  }

  .sm\:select-none {
    user-select: none;
  }

  .sm\:select-text {
    user-select: text;
  }

  .sm\:select-all {
    user-select: all;
  }

  .sm\:select-auto {
    user-select: auto;
  }

  .sm\:align-baseline {
    vertical-align: baseline;
  }

  .sm\:align-top {
    vertical-align: top;
  }

  .sm\:align-middle {
    vertical-align: middle;
  }

  .sm\:align-bottom {
    vertical-align: bottom;
  }

  .sm\:align-text-top {
    vertical-align: text-top;
  }

  .sm\:align-text-bottom {
    vertical-align: text-bottom;
  }

  .sm\:visible {
    visibility: visible;
  }

  .sm\:invisible {
    visibility: hidden;
  }

  .sm\:whitespace-normal {
    white-space: normal;
  }

  .sm\:whitespace-no-wrap {
    white-space: nowrap;
  }

  .sm\:whitespace-pre {
    white-space: pre;
  }

  .sm\:whitespace-pre-line {
    white-space: pre-line;
  }

  .sm\:whitespace-pre-wrap {
    white-space: pre-wrap;
  }

  .sm\:break-normal {
    overflow-wrap: normal;
    word-break: normal;
  }

  .sm\:break-words {
    overflow-wrap: break-word;
  }

  .sm\:break-all {
    word-break: break-all;
  }

  .sm\:truncate {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
  }

  .sm\:w-0 {
    width: 0;
  }

  .sm\:w-1 {
    width: 0.25rem;
  }

  .sm\:w-2 {
    width: 0.5rem;
  }

  .sm\:w-3 {
    width: 0.75rem;
  }

  .sm\:w-4 {
    width: 1rem;
  }

  .sm\:w-5 {
    width: 1.25rem;
  }

  .sm\:w-6 {
    width: 1.5rem;
  }

  .sm\:w-8 {
    width: 2rem;
  }

  .sm\:w-10 {
    width: 2.5rem;
  }

  .sm\:w-12 {
    width: 3rem;
  }

  .sm\:w-16 {
    width: 4rem;
  }

  .sm\:w-20 {
    width: 5rem;
  }

  .sm\:w-24 {
    width: 6rem;
  }

  .sm\:w-32 {
    width: 8rem;
  }

  .sm\:w-40 {
    width: 10rem;
  }

  .sm\:w-48 {
    width: 12rem;
  }

  .sm\:w-56 {
    width: 14rem;
  }

  .sm\:w-64 {
    width: 16rem;
  }

  .sm\:w-auto {
    width: auto;
  }

  .sm\:w-px {
    width: 1px;
  }

  .sm\:w-1\/2 {
    width: 50%;
  }

  .sm\:w-1\/3 {
    width: 33.333333%;
  }

  .sm\:w-2\/3 {
    width: 66.666667%;
  }

  .sm\:w-1\/4 {
    width: 25%;
  }

  .sm\:w-2\/4 {
    width: 50%;
  }

  .sm\:w-3\/4 {
    width: 75%;
  }

  .sm\:w-1\/5 {
    width: 20%;
  }

  .sm\:w-2\/5 {
    width: 40%;
  }

  .sm\:w-3\/5 {
    width: 60%;
  }

  .sm\:w-4\/5 {
    width: 80%;
  }

  .sm\:w-1\/6 {
    width: 16.666667%;
  }

  .sm\:w-2\/6 {
    width: 33.333333%;
  }

  .sm\:w-3\/6 {
    width: 50%;
  }

  .sm\:w-4\/6 {
    width: 66.666667%;
  }

  .sm\:w-5\/6 {
    width: 83.333333%;
  }

  .sm\:w-1\/12 {
    width: 8.333333%;
  }

  .sm\:w-2\/12 {
    width: 16.666667%;
  }

  .sm\:w-3\/12 {
    width: 25%;
  }

  .sm\:w-4\/12 {
    width: 33.333333%;
  }

  .sm\:w-5\/12 {
    width: 41.666667%;
  }

  .sm\:w-6\/12 {
    width: 50%;
  }

  .sm\:w-7\/12 {
    width: 58.333333%;
  }

  .sm\:w-8\/12 {
    width: 66.666667%;
  }

  .sm\:w-9\/12 {
    width: 75%;
  }

  .sm\:w-10\/12 {
    width: 83.333333%;
  }

  .sm\:w-11\/12 {
    width: 91.666667%;
  }

  .sm\:w-full {
    width: 100%;
  }

  .sm\:w-screen {
    width: 100vw;
  }

  .sm\:z-0 {
    z-index: 0;
  }

  .sm\:z-10 {
    z-index: 10;
  }

  .sm\:z-20 {
    z-index: 20;
  }

  .sm\:z-30 {
    z-index: 30;
  }

  .sm\:z-40 {
    z-index: 40;
  }

  .sm\:z-50 {
    z-index: 50;
  }

  .sm\:z-auto {
    z-index: auto;
  }
}

@media (min-width: 768px) {
  .md\:sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border-width: 0;
  }

  .md\:not-sr-only {
    position: static;
    width: auto;
    height: auto;
    padding: 0;
    margin: 0;
    overflow: visible;
    clip: auto;
    white-space: normal;
  }

  .md\:focus\:sr-only:focus {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border-width: 0;
  }

  .md\:focus\:not-sr-only:focus {
    position: static;
    width: auto;
    height: auto;
    padding: 0;
    margin: 0;
    overflow: visible;
    clip: auto;
    white-space: normal;
  }

  .md\:appearance-none {
    appearance: none;
  }

  .md\:bg-fixed {
    background-attachment: fixed;
  }

  .md\:bg-local {
    background-attachment: local;
  }

  .md\:bg-scroll {
    background-attachment: scroll;
  }

  .md\:bg-grey-darkest {
    background-color: #3d4852;
  }

  .md\:bg-grey-darker {
    background-color: #606f7b;
  }

  .md\:bg-grey-dark {
    background-color: #8795a1;
  }

  .md\:bg-grey {
    background-color: #b8c2cc;
  }

  .md\:bg-grey-light {
    background-color: #dae1e7;
  }

  .md\:bg-grey-lighter {
    background-color: #f1f5f8;
  }

  .md\:bg-grey-lightest {
    background-color: #f8fafc;
  }

  .md\:bg-grey-mid-light {
    background-color: #f3f3f4;
  }

  .md\:bg-white-lightest {
    background-color: #f4f4f4;
  }

  .md\:bg-red-darkest {
    background-color: #3b0d0c;
  }

  .md\:bg-red-darker {
    background-color: #621b18;
  }

  .md\:bg-red-dark {
    background-color: #cc1f1a;
  }

  .md\:bg-red-light {
    background-color: #ef5753;
  }

  .md\:bg-red-lighter {
    background-color: #f9acaa;
  }

  .md\:bg-red-lightest {
    background-color: #fcebea;
  }

  .md\:bg-orange-darkest {
    background-color: #462a16;
  }

  .md\:bg-orange-darker {
    background-color: #613b1f;
  }

  .md\:bg-orange-dark {
    background-color: #de751f;
  }

  .md\:bg-orange-light {
    background-color: #faad63;
  }

  .md\:bg-orange-lighter {
    background-color: #fcd9b6;
  }

  .md\:bg-orange-lightest {
    background-color: #fff5eb;
  }

  .md\:bg-yellow-darkest {
    background-color: #453411;
  }

  .md\:bg-yellow-darker {
    background-color: #684f1d;
  }

  .md\:bg-yellow-dark {
    background-color: #f2d024;
  }

  .md\:bg-yellow-light {
    background-color: #fff382;
  }

  .md\:bg-yellow-lighter {
    background-color: #fff9c2;
  }

  .md\:bg-yellow-lightest {
    background-color: #fcfbeb;
  }

  .md\:bg-green-darkest {
    background-color: #0f2f21;
  }

  .md\:bg-green-darker {
    background-color: #1a4731;
  }

  .md\:bg-green-dark {
    background-color: #1f9d55;
  }

  .md\:bg-green-light {
    background-color: #51d88a;
  }

  .md\:bg-green-lighter {
    background-color: #a2f5bf;
  }

  .md\:bg-green-lightest {
    background-color: #e3fcec;
  }

  .md\:bg-teal-darkest {
    background-color: #0d3331;
  }

  .md\:bg-teal-darker {
    background-color: #20504f;
  }

  .md\:bg-teal-dark {
    background-color: #38a89d;
  }

  .md\:bg-teal-light {
    background-color: #64d5ca;
  }

  .md\:bg-teal-lighter {
    background-color: #a0f0ed;
  }

  .md\:bg-teal-lightest {
    background-color: #e8fffe;
  }

  .md\:bg-blue-darkest {
    background-color: #12283a;
  }

  .md\:bg-blue-darker {
    background-color: #1c3d5a;
  }

  .md\:bg-blue-dark {
    background-color: #2779bd;
  }

  .md\:bg-blue-light {
    background-color: #6cb2eb;
  }

  .md\:bg-blue-lighter {
    background-color: #bcdefa;
  }

  .md\:bg-blue-lightest {
    background-color: #eff8ff;
  }

  .md\:bg-indigo-darkest {
    background-color: #191e38;
  }

  .md\:bg-indigo-darker {
    background-color: #2f365f;
  }

  .md\:bg-indigo-dark {
    background-color: #5661b3;
  }

  .md\:bg-indigo-light {
    background-color: #7886d7;
  }

  .md\:bg-indigo-lighter {
    background-color: #b2b7ff;
  }

  .md\:bg-indigo-lightest {
    background-color: #e6e8ff;
  }

  .md\:bg-purple-darkest {
    background-color: #21183c;
  }

  .md\:bg-purple-darker {
    background-color: #382b5f;
  }

  .md\:bg-purple-dark {
    background-color: #794acf;
  }

  .md\:bg-purple-light {
    background-color: #a779e9;
  }

  .md\:bg-purple-lighter {
    background-color: #d6bbfc;
  }

  .md\:bg-purple-lightest {
    background-color: #f3ebff;
  }

  .md\:bg-pink-darkest {
    background-color: #451225;
  }

  .md\:bg-pink-darker {
    background-color: #6f213f;
  }

  .md\:bg-pink-dark {
    background-color: #eb5286;
  }

  .md\:bg-pink-light {
    background-color: #fa7ea8;
  }

  .md\:bg-pink-lighter {
    background-color: #ffbbca;
  }

  .md\:bg-pink-lightest {
    background-color: #ffebef;
  }

  .md\:bg-nav {
    background-color: #3F495E;
  }

  .md\:bg-side-nav {
    background-color: #ECF0F1;
  }

  .md\:bg-nav-item {
    background-color: #626b7a;
  }

  .md\:bg-light-border {
    background-color: #dfe4e6;
  }

  .md\:bg-white-medium {
    background-color: #FAFAFA;
  }

  .md\:bg-white-medium-dark {
    background-color: #E5E9EB;
  }

  .md\:bg-red-vibrant {
    background-color: #e46050;
  }

  .md\:bg-red-vibrant-dark {
    background-color: #d64230;
  }

  .md\:bg-primary {
    background-color: #51BE99;
  }

  .md\:bg-primary-dark {
    background-color: #0e5f43;
  }

  .md\:bg-warning {
    background-color: #f4ab43;
  }

  .md\:bg-warning-dark {
    background-color: #c37c16;
  }

  .md\:bg-black-dark {
    background-color: #272634;
  }

  .md\:bg-black-darkest {
    background-color: #141418;
  }

  .md\:bg-info {
    background-color: #52bcdc;
  }

  .md\:bg-info-dark {
    background-color: #2cadd4;
  }

  .md\:bg-success {
    background-color: #72b159;
  }

  .md\:bg-success-dark {
    background-color: #5D9547;
  }

  .md\:bg-transparent {
    background-color: transparent;
  }

  .md\:bg-black {
    background-color: #000;
  }

  .md\:bg-white {
    background-color: #fff;
  }

  .md\:bg-gray-100 {
    background-color: #f7fafc;
  }

  .md\:bg-gray-200 {
    background-color: #edf2f7;
  }

  .md\:bg-gray-300 {
    background-color: #e2e8f0;
  }

  .md\:bg-gray-400 {
    background-color: #cbd5e0;
  }

  .md\:bg-gray-500 {
    background-color: #a0aec0;
  }

  .md\:bg-gray-600 {
    background-color: #718096;
  }

  .md\:bg-gray-700 {
    background-color: #4a5568;
  }

  .md\:bg-gray-800 {
    background-color: #2d3748;
  }

  .md\:bg-gray-900 {
    background-color: #1a202c;
  }

  .md\:bg-red-100 {
    background-color: #fff5f5;
  }

  .md\:bg-red-200 {
    background-color: #fed7d7;
  }

  .md\:bg-red-300 {
    background-color: #feb2b2;
  }

  .md\:bg-red-400 {
    background-color: #fc8181;
  }

  .md\:bg-red-500 {
    background-color: #f56565;
  }

  .md\:bg-red-600 {
    background-color: #e53e3e;
  }

  .md\:bg-red-700 {
    background-color: #c53030;
  }

  .md\:bg-red-800 {
    background-color: #9b2c2c;
  }

  .md\:bg-red-900 {
    background-color: #742a2a;
  }

  .md\:bg-orange-100 {
    background-color: #fffaf0;
  }

  .md\:bg-orange-200 {
    background-color: #feebc8;
  }

  .md\:bg-orange-300 {
    background-color: #fbd38d;
  }

  .md\:bg-orange-400 {
    background-color: #f6ad55;
  }

  .md\:bg-orange-500 {
    background-color: #ed8936;
  }

  .md\:bg-orange-600 {
    background-color: #dd6b20;
  }

  .md\:bg-orange-700 {
    background-color: #c05621;
  }

  .md\:bg-orange-800 {
    background-color: #9c4221;
  }

  .md\:bg-orange-900 {
    background-color: #7b341e;
  }

  .md\:bg-yellow-100 {
    background-color: #fffff0;
  }

  .md\:bg-yellow-200 {
    background-color: #fefcbf;
  }

  .md\:bg-yellow-300 {
    background-color: #faf089;
  }

  .md\:bg-yellow-400 {
    background-color: #f6e05e;
  }

  .md\:bg-yellow-500 {
    background-color: #ecc94b;
  }

  .md\:bg-yellow-600 {
    background-color: #d69e2e;
  }

  .md\:bg-yellow-700 {
    background-color: #b7791f;
  }

  .md\:bg-yellow-800 {
    background-color: #975a16;
  }

  .md\:bg-yellow-900 {
    background-color: #744210;
  }

  .md\:bg-green-100 {
    background-color: #f0fff4;
  }

  .md\:bg-green-200 {
    background-color: #c6f6d5;
  }

  .md\:bg-green-300 {
    background-color: #9ae6b4;
  }

  .md\:bg-green-400 {
    background-color: #68d391;
  }

  .md\:bg-green-500 {
    background-color: #48bb78;
  }

  .md\:bg-green-600 {
    background-color: #38a169;
  }

  .md\:bg-green-700 {
    background-color: #2f855a;
  }

  .md\:bg-green-800 {
    background-color: #276749;
  }

  .md\:bg-green-900 {
    background-color: #22543d;
  }

  .md\:bg-teal-100 {
    background-color: #e6fffa;
  }

  .md\:bg-teal-200 {
    background-color: #b2f5ea;
  }

  .md\:bg-teal-300 {
    background-color: #81e6d9;
  }

  .md\:bg-teal-400 {
    background-color: #4fd1c5;
  }

  .md\:bg-teal-500 {
    background-color: #38b2ac;
  }

  .md\:bg-teal-600 {
    background-color: #319795;
  }

  .md\:bg-teal-700 {
    background-color: #2c7a7b;
  }

  .md\:bg-teal-800 {
    background-color: #285e61;
  }

  .md\:bg-teal-900 {
    background-color: #234e52;
  }

  .md\:bg-blue-100 {
    background-color: #ebf8ff;
  }

  .md\:bg-blue-200 {
    background-color: #bee3f8;
  }

  .md\:bg-blue-300 {
    background-color: #90cdf4;
  }

  .md\:bg-blue-400 {
    background-color: #63b3ed;
  }

  .md\:bg-blue-500 {
    background-color: #4299e1;
  }

  .md\:bg-blue-600 {
    background-color: #3182ce;
  }

  .md\:bg-blue-700 {
    background-color: #2b6cb0;
  }

  .md\:bg-blue-800 {
    background-color: #2c5282;
  }

  .md\:bg-blue-900 {
    background-color: #2a4365;
  }

  .md\:bg-indigo-100 {
    background-color: #ebf4ff;
  }

  .md\:bg-indigo-200 {
    background-color: #c3dafe;
  }

  .md\:bg-indigo-300 {
    background-color: #a3bffa;
  }

  .md\:bg-indigo-400 {
    background-color: #7f9cf5;
  }

  .md\:bg-indigo-500 {
    background-color: #667eea;
  }

  .md\:bg-indigo-600 {
    background-color: #5a67d8;
  }

  .md\:bg-indigo-700 {
    background-color: #4c51bf;
  }

  .md\:bg-indigo-800 {
    background-color: #434190;
  }

  .md\:bg-indigo-900 {
    background-color: #3c366b;
  }

  .md\:bg-purple-100 {
    background-color: #faf5ff;
  }

  .md\:bg-purple-200 {
    background-color: #e9d8fd;
  }

  .md\:bg-purple-300 {
    background-color: #d6bcfa;
  }

  .md\:bg-purple-400 {
    background-color: #b794f4;
  }

  .md\:bg-purple-500 {
    background-color: #9f7aea;
  }

  .md\:bg-purple-600 {
    background-color: #805ad5;
  }

  .md\:bg-purple-700 {
    background-color: #6b46c1;
  }

  .md\:bg-purple-800 {
    background-color: #553c9a;
  }

  .md\:bg-purple-900 {
    background-color: #44337a;
  }

  .md\:bg-pink-100 {
    background-color: #fff5f7;
  }

  .md\:bg-pink-200 {
    background-color: #fed7e2;
  }

  .md\:bg-pink-300 {
    background-color: #fbb6ce;
  }

  .md\:bg-pink-400 {
    background-color: #f687b3;
  }

  .md\:bg-pink-500 {
    background-color: #ed64a6;
  }

  .md\:bg-pink-600 {
    background-color: #d53f8c;
  }

  .md\:bg-pink-700 {
    background-color: #b83280;
  }

  .md\:bg-pink-800 {
    background-color: #97266d;
  }

  .md\:bg-pink-900 {
    background-color: #702459;
  }

  .md\:hover\:bg-grey-darkest:hover {
    background-color: #3d4852;
  }

  .md\:hover\:bg-grey-darker:hover {
    background-color: #606f7b;
  }

  .md\:hover\:bg-grey-dark:hover {
    background-color: #8795a1;
  }

  .md\:hover\:bg-grey:hover {
    background-color: #b8c2cc;
  }

  .md\:hover\:bg-grey-light:hover {
    background-color: #dae1e7;
  }

  .md\:hover\:bg-grey-lighter:hover {
    background-color: #f1f5f8;
  }

  .md\:hover\:bg-grey-lightest:hover {
    background-color: #f8fafc;
  }

  .md\:hover\:bg-grey-mid-light:hover {
    background-color: #f3f3f4;
  }

  .md\:hover\:bg-white-lightest:hover {
    background-color: #f4f4f4;
  }

  .md\:hover\:bg-red-darkest:hover {
    background-color: #3b0d0c;
  }

  .md\:hover\:bg-red-darker:hover {
    background-color: #621b18;
  }

  .md\:hover\:bg-red-dark:hover {
    background-color: #cc1f1a;
  }

  .md\:hover\:bg-red-light:hover {
    background-color: #ef5753;
  }

  .md\:hover\:bg-red-lighter:hover {
    background-color: #f9acaa;
  }

  .md\:hover\:bg-red-lightest:hover {
    background-color: #fcebea;
  }

  .md\:hover\:bg-orange-darkest:hover {
    background-color: #462a16;
  }

  .md\:hover\:bg-orange-darker:hover {
    background-color: #613b1f;
  }

  .md\:hover\:bg-orange-dark:hover {
    background-color: #de751f;
  }

  .md\:hover\:bg-orange-light:hover {
    background-color: #faad63;
  }

  .md\:hover\:bg-orange-lighter:hover {
    background-color: #fcd9b6;
  }

  .md\:hover\:bg-orange-lightest:hover {
    background-color: #fff5eb;
  }

  .md\:hover\:bg-yellow-darkest:hover {
    background-color: #453411;
  }

  .md\:hover\:bg-yellow-darker:hover {
    background-color: #684f1d;
  }

  .md\:hover\:bg-yellow-dark:hover {
    background-color: #f2d024;
  }

  .md\:hover\:bg-yellow-light:hover {
    background-color: #fff382;
  }

  .md\:hover\:bg-yellow-lighter:hover {
    background-color: #fff9c2;
  }

  .md\:hover\:bg-yellow-lightest:hover {
    background-color: #fcfbeb;
  }

  .md\:hover\:bg-green-darkest:hover {
    background-color: #0f2f21;
  }

  .md\:hover\:bg-green-darker:hover {
    background-color: #1a4731;
  }

  .md\:hover\:bg-green-dark:hover {
    background-color: #1f9d55;
  }

  .md\:hover\:bg-green-light:hover {
    background-color: #51d88a;
  }

  .md\:hover\:bg-green-lighter:hover {
    background-color: #a2f5bf;
  }

  .md\:hover\:bg-green-lightest:hover {
    background-color: #e3fcec;
  }

  .md\:hover\:bg-teal-darkest:hover {
    background-color: #0d3331;
  }

  .md\:hover\:bg-teal-darker:hover {
    background-color: #20504f;
  }

  .md\:hover\:bg-teal-dark:hover {
    background-color: #38a89d;
  }

  .md\:hover\:bg-teal-light:hover {
    background-color: #64d5ca;
  }

  .md\:hover\:bg-teal-lighter:hover {
    background-color: #a0f0ed;
  }

  .md\:hover\:bg-teal-lightest:hover {
    background-color: #e8fffe;
  }

  .md\:hover\:bg-blue-darkest:hover {
    background-color: #12283a;
  }

  .md\:hover\:bg-blue-darker:hover {
    background-color: #1c3d5a;
  }

  .md\:hover\:bg-blue-dark:hover {
    background-color: #2779bd;
  }

  .md\:hover\:bg-blue-light:hover {
    background-color: #6cb2eb;
  }

  .md\:hover\:bg-blue-lighter:hover {
    background-color: #bcdefa;
  }

  .md\:hover\:bg-blue-lightest:hover {
    background-color: #eff8ff;
  }

  .md\:hover\:bg-indigo-darkest:hover {
    background-color: #191e38;
  }

  .md\:hover\:bg-indigo-darker:hover {
    background-color: #2f365f;
  }

  .md\:hover\:bg-indigo-dark:hover {
    background-color: #5661b3;
  }

  .md\:hover\:bg-indigo-light:hover {
    background-color: #7886d7;
  }

  .md\:hover\:bg-indigo-lighter:hover {
    background-color: #b2b7ff;
  }

  .md\:hover\:bg-indigo-lightest:hover {
    background-color: #e6e8ff;
  }

  .md\:hover\:bg-purple-darkest:hover {
    background-color: #21183c;
  }

  .md\:hover\:bg-purple-darker:hover {
    background-color: #382b5f;
  }

  .md\:hover\:bg-purple-dark:hover {
    background-color: #794acf;
  }

  .md\:hover\:bg-purple-light:hover {
    background-color: #a779e9;
  }

  .md\:hover\:bg-purple-lighter:hover {
    background-color: #d6bbfc;
  }

  .md\:hover\:bg-purple-lightest:hover {
    background-color: #f3ebff;
  }

  .md\:hover\:bg-pink-darkest:hover {
    background-color: #451225;
  }

  .md\:hover\:bg-pink-darker:hover {
    background-color: #6f213f;
  }

  .md\:hover\:bg-pink-dark:hover {
    background-color: #eb5286;
  }

  .md\:hover\:bg-pink-light:hover {
    background-color: #fa7ea8;
  }

  .md\:hover\:bg-pink-lighter:hover {
    background-color: #ffbbca;
  }

  .md\:hover\:bg-pink-lightest:hover {
    background-color: #ffebef;
  }

  .md\:hover\:bg-nav:hover {
    background-color: #3F495E;
  }

  .md\:hover\:bg-side-nav:hover {
    background-color: #ECF0F1;
  }

  .md\:hover\:bg-nav-item:hover {
    background-color: #626b7a;
  }

  .md\:hover\:bg-light-border:hover {
    background-color: #dfe4e6;
  }

  .md\:hover\:bg-white-medium:hover {
    background-color: #FAFAFA;
  }

  .md\:hover\:bg-white-medium-dark:hover {
    background-color: #E5E9EB;
  }

  .md\:hover\:bg-red-vibrant:hover {
    background-color: #e46050;
  }

  .md\:hover\:bg-red-vibrant-dark:hover {
    background-color: #d64230;
  }

  .md\:hover\:bg-primary:hover {
    background-color: #51BE99;
  }

  .md\:hover\:bg-primary-dark:hover {
    background-color: #0e5f43;
  }

  .md\:hover\:bg-warning:hover {
    background-color: #f4ab43;
  }

  .md\:hover\:bg-warning-dark:hover {
    background-color: #c37c16;
  }

  .md\:hover\:bg-black-dark:hover {
    background-color: #272634;
  }

  .md\:hover\:bg-black-darkest:hover {
    background-color: #141418;
  }

  .md\:hover\:bg-info:hover {
    background-color: #52bcdc;
  }

  .md\:hover\:bg-info-dark:hover {
    background-color: #2cadd4;
  }

  .md\:hover\:bg-success:hover {
    background-color: #72b159;
  }

  .md\:hover\:bg-success-dark:hover {
    background-color: #5D9547;
  }

  .md\:hover\:bg-transparent:hover {
    background-color: transparent;
  }

  .md\:hover\:bg-black:hover {
    background-color: #000;
  }

  .md\:hover\:bg-white:hover {
    background-color: #fff;
  }

  .md\:hover\:bg-gray-100:hover {
    background-color: #f7fafc;
  }

  .md\:hover\:bg-gray-200:hover {
    background-color: #edf2f7;
  }

  .md\:hover\:bg-gray-300:hover {
    background-color: #e2e8f0;
  }

  .md\:hover\:bg-gray-400:hover {
    background-color: #cbd5e0;
  }

  .md\:hover\:bg-gray-500:hover {
    background-color: #a0aec0;
  }

  .md\:hover\:bg-gray-600:hover {
    background-color: #718096;
  }

  .md\:hover\:bg-gray-700:hover {
    background-color: #4a5568;
  }

  .md\:hover\:bg-gray-800:hover {
    background-color: #2d3748;
  }

  .md\:hover\:bg-gray-900:hover {
    background-color: #1a202c;
  }

  .md\:hover\:bg-red-100:hover {
    background-color: #fff5f5;
  }

  .md\:hover\:bg-red-200:hover {
    background-color: #fed7d7;
  }

  .md\:hover\:bg-red-300:hover {
    background-color: #feb2b2;
  }

  .md\:hover\:bg-red-400:hover {
    background-color: #fc8181;
  }

  .md\:hover\:bg-red-500:hover {
    background-color: #f56565;
  }

  .md\:hover\:bg-red-600:hover {
    background-color: #e53e3e;
  }

  .md\:hover\:bg-red-700:hover {
    background-color: #c53030;
  }

  .md\:hover\:bg-red-800:hover {
    background-color: #9b2c2c;
  }

  .md\:hover\:bg-red-900:hover {
    background-color: #742a2a;
  }

  .md\:hover\:bg-orange-100:hover {
    background-color: #fffaf0;
  }

  .md\:hover\:bg-orange-200:hover {
    background-color: #feebc8;
  }

  .md\:hover\:bg-orange-300:hover {
    background-color: #fbd38d;
  }

  .md\:hover\:bg-orange-400:hover {
    background-color: #f6ad55;
  }

  .md\:hover\:bg-orange-500:hover {
    background-color: #ed8936;
  }

  .md\:hover\:bg-orange-600:hover {
    background-color: #dd6b20;
  }

  .md\:hover\:bg-orange-700:hover {
    background-color: #c05621;
  }

  .md\:hover\:bg-orange-800:hover {
    background-color: #9c4221;
  }

  .md\:hover\:bg-orange-900:hover {
    background-color: #7b341e;
  }

  .md\:hover\:bg-yellow-100:hover {
    background-color: #fffff0;
  }

  .md\:hover\:bg-yellow-200:hover {
    background-color: #fefcbf;
  }

  .md\:hover\:bg-yellow-300:hover {
    background-color: #faf089;
  }

  .md\:hover\:bg-yellow-400:hover {
    background-color: #f6e05e;
  }

  .md\:hover\:bg-yellow-500:hover {
    background-color: #ecc94b;
  }

  .md\:hover\:bg-yellow-600:hover {
    background-color: #d69e2e;
  }

  .md\:hover\:bg-yellow-700:hover {
    background-color: #b7791f;
  }

  .md\:hover\:bg-yellow-800:hover {
    background-color: #975a16;
  }

  .md\:hover\:bg-yellow-900:hover {
    background-color: #744210;
  }

  .md\:hover\:bg-green-100:hover {
    background-color: #f0fff4;
  }

  .md\:hover\:bg-green-200:hover {
    background-color: #c6f6d5;
  }

  .md\:hover\:bg-green-300:hover {
    background-color: #9ae6b4;
  }

  .md\:hover\:bg-green-400:hover {
    background-color: #68d391;
  }

  .md\:hover\:bg-green-500:hover {
    background-color: #48bb78;
  }

  .md\:hover\:bg-green-600:hover {
    background-color: #38a169;
  }

  .md\:hover\:bg-green-700:hover {
    background-color: #2f855a;
  }

  .md\:hover\:bg-green-800:hover {
    background-color: #276749;
  }

  .md\:hover\:bg-green-900:hover {
    background-color: #22543d;
  }

  .md\:hover\:bg-teal-100:hover {
    background-color: #e6fffa;
  }

  .md\:hover\:bg-teal-200:hover {
    background-color: #b2f5ea;
  }

  .md\:hover\:bg-teal-300:hover {
    background-color: #81e6d9;
  }

  .md\:hover\:bg-teal-400:hover {
    background-color: #4fd1c5;
  }

  .md\:hover\:bg-teal-500:hover {
    background-color: #38b2ac;
  }

  .md\:hover\:bg-teal-600:hover {
    background-color: #319795;
  }

  .md\:hover\:bg-teal-700:hover {
    background-color: #2c7a7b;
  }

  .md\:hover\:bg-teal-800:hover {
    background-color: #285e61;
  }

  .md\:hover\:bg-teal-900:hover {
    background-color: #234e52;
  }

  .md\:hover\:bg-blue-100:hover {
    background-color: #ebf8ff;
  }

  .md\:hover\:bg-blue-200:hover {
    background-color: #bee3f8;
  }

  .md\:hover\:bg-blue-300:hover {
    background-color: #90cdf4;
  }

  .md\:hover\:bg-blue-400:hover {
    background-color: #63b3ed;
  }

  .md\:hover\:bg-blue-500:hover {
    background-color: #4299e1;
  }

  .md\:hover\:bg-blue-600:hover {
    background-color: #3182ce;
  }

  .md\:hover\:bg-blue-700:hover {
    background-color: #2b6cb0;
  }

  .md\:hover\:bg-blue-800:hover {
    background-color: #2c5282;
  }

  .md\:hover\:bg-blue-900:hover {
    background-color: #2a4365;
  }

  .md\:hover\:bg-indigo-100:hover {
    background-color: #ebf4ff;
  }

  .md\:hover\:bg-indigo-200:hover {
    background-color: #c3dafe;
  }

  .md\:hover\:bg-indigo-300:hover {
    background-color: #a3bffa;
  }

  .md\:hover\:bg-indigo-400:hover {
    background-color: #7f9cf5;
  }

  .md\:hover\:bg-indigo-500:hover {
    background-color: #667eea;
  }

  .md\:hover\:bg-indigo-600:hover {
    background-color: #5a67d8;
  }

  .md\:hover\:bg-indigo-700:hover {
    background-color: #4c51bf;
  }

  .md\:hover\:bg-indigo-800:hover {
    background-color: #434190;
  }

  .md\:hover\:bg-indigo-900:hover {
    background-color: #3c366b;
  }

  .md\:hover\:bg-purple-100:hover {
    background-color: #faf5ff;
  }

  .md\:hover\:bg-purple-200:hover {
    background-color: #e9d8fd;
  }

  .md\:hover\:bg-purple-300:hover {
    background-color: #d6bcfa;
  }

  .md\:hover\:bg-purple-400:hover {
    background-color: #b794f4;
  }

  .md\:hover\:bg-purple-500:hover {
    background-color: #9f7aea;
  }

  .md\:hover\:bg-purple-600:hover {
    background-color: #805ad5;
  }

  .md\:hover\:bg-purple-700:hover {
    background-color: #6b46c1;
  }

  .md\:hover\:bg-purple-800:hover {
    background-color: #553c9a;
  }

  .md\:hover\:bg-purple-900:hover {
    background-color: #44337a;
  }

  .md\:hover\:bg-pink-100:hover {
    background-color: #fff5f7;
  }

  .md\:hover\:bg-pink-200:hover {
    background-color: #fed7e2;
  }

  .md\:hover\:bg-pink-300:hover {
    background-color: #fbb6ce;
  }

  .md\:hover\:bg-pink-400:hover {
    background-color: #f687b3;
  }

  .md\:hover\:bg-pink-500:hover {
    background-color: #ed64a6;
  }

  .md\:hover\:bg-pink-600:hover {
    background-color: #d53f8c;
  }

  .md\:hover\:bg-pink-700:hover {
    background-color: #b83280;
  }

  .md\:hover\:bg-pink-800:hover {
    background-color: #97266d;
  }

  .md\:hover\:bg-pink-900:hover {
    background-color: #702459;
  }

  .md\:focus\:bg-grey-darkest:focus {
    background-color: #3d4852;
  }

  .md\:focus\:bg-grey-darker:focus {
    background-color: #606f7b;
  }

  .md\:focus\:bg-grey-dark:focus {
    background-color: #8795a1;
  }

  .md\:focus\:bg-grey:focus {
    background-color: #b8c2cc;
  }

  .md\:focus\:bg-grey-light:focus {
    background-color: #dae1e7;
  }

  .md\:focus\:bg-grey-lighter:focus {
    background-color: #f1f5f8;
  }

  .md\:focus\:bg-grey-lightest:focus {
    background-color: #f8fafc;
  }

  .md\:focus\:bg-grey-mid-light:focus {
    background-color: #f3f3f4;
  }

  .md\:focus\:bg-white-lightest:focus {
    background-color: #f4f4f4;
  }

  .md\:focus\:bg-red-darkest:focus {
    background-color: #3b0d0c;
  }

  .md\:focus\:bg-red-darker:focus {
    background-color: #621b18;
  }

  .md\:focus\:bg-red-dark:focus {
    background-color: #cc1f1a;
  }

  .md\:focus\:bg-red-light:focus {
    background-color: #ef5753;
  }

  .md\:focus\:bg-red-lighter:focus {
    background-color: #f9acaa;
  }

  .md\:focus\:bg-red-lightest:focus {
    background-color: #fcebea;
  }

  .md\:focus\:bg-orange-darkest:focus {
    background-color: #462a16;
  }

  .md\:focus\:bg-orange-darker:focus {
    background-color: #613b1f;
  }

  .md\:focus\:bg-orange-dark:focus {
    background-color: #de751f;
  }

  .md\:focus\:bg-orange-light:focus {
    background-color: #faad63;
  }

  .md\:focus\:bg-orange-lighter:focus {
    background-color: #fcd9b6;
  }

  .md\:focus\:bg-orange-lightest:focus {
    background-color: #fff5eb;
  }

  .md\:focus\:bg-yellow-darkest:focus {
    background-color: #453411;
  }

  .md\:focus\:bg-yellow-darker:focus {
    background-color: #684f1d;
  }

  .md\:focus\:bg-yellow-dark:focus {
    background-color: #f2d024;
  }

  .md\:focus\:bg-yellow-light:focus {
    background-color: #fff382;
  }

  .md\:focus\:bg-yellow-lighter:focus {
    background-color: #fff9c2;
  }

  .md\:focus\:bg-yellow-lightest:focus {
    background-color: #fcfbeb;
  }

  .md\:focus\:bg-green-darkest:focus {
    background-color: #0f2f21;
  }

  .md\:focus\:bg-green-darker:focus {
    background-color: #1a4731;
  }

  .md\:focus\:bg-green-dark:focus {
    background-color: #1f9d55;
  }

  .md\:focus\:bg-green-light:focus {
    background-color: #51d88a;
  }

  .md\:focus\:bg-green-lighter:focus {
    background-color: #a2f5bf;
  }

  .md\:focus\:bg-green-lightest:focus {
    background-color: #e3fcec;
  }

  .md\:focus\:bg-teal-darkest:focus {
    background-color: #0d3331;
  }

  .md\:focus\:bg-teal-darker:focus {
    background-color: #20504f;
  }

  .md\:focus\:bg-teal-dark:focus {
    background-color: #38a89d;
  }

  .md\:focus\:bg-teal-light:focus {
    background-color: #64d5ca;
  }

  .md\:focus\:bg-teal-lighter:focus {
    background-color: #a0f0ed;
  }

  .md\:focus\:bg-teal-lightest:focus {
    background-color: #e8fffe;
  }

  .md\:focus\:bg-blue-darkest:focus {
    background-color: #12283a;
  }

  .md\:focus\:bg-blue-darker:focus {
    background-color: #1c3d5a;
  }

  .md\:focus\:bg-blue-dark:focus {
    background-color: #2779bd;
  }

  .md\:focus\:bg-blue-light:focus {
    background-color: #6cb2eb;
  }

  .md\:focus\:bg-blue-lighter:focus {
    background-color: #bcdefa;
  }

  .md\:focus\:bg-blue-lightest:focus {
    background-color: #eff8ff;
  }

  .md\:focus\:bg-indigo-darkest:focus {
    background-color: #191e38;
  }

  .md\:focus\:bg-indigo-darker:focus {
    background-color: #2f365f;
  }

  .md\:focus\:bg-indigo-dark:focus {
    background-color: #5661b3;
  }

  .md\:focus\:bg-indigo-light:focus {
    background-color: #7886d7;
  }

  .md\:focus\:bg-indigo-lighter:focus {
    background-color: #b2b7ff;
  }

  .md\:focus\:bg-indigo-lightest:focus {
    background-color: #e6e8ff;
  }

  .md\:focus\:bg-purple-darkest:focus {
    background-color: #21183c;
  }

  .md\:focus\:bg-purple-darker:focus {
    background-color: #382b5f;
  }

  .md\:focus\:bg-purple-dark:focus {
    background-color: #794acf;
  }

  .md\:focus\:bg-purple-light:focus {
    background-color: #a779e9;
  }

  .md\:focus\:bg-purple-lighter:focus {
    background-color: #d6bbfc;
  }

  .md\:focus\:bg-purple-lightest:focus {
    background-color: #f3ebff;
  }

  .md\:focus\:bg-pink-darkest:focus {
    background-color: #451225;
  }

  .md\:focus\:bg-pink-darker:focus {
    background-color: #6f213f;
  }

  .md\:focus\:bg-pink-dark:focus {
    background-color: #eb5286;
  }

  .md\:focus\:bg-pink-light:focus {
    background-color: #fa7ea8;
  }

  .md\:focus\:bg-pink-lighter:focus {
    background-color: #ffbbca;
  }

  .md\:focus\:bg-pink-lightest:focus {
    background-color: #ffebef;
  }

  .md\:focus\:bg-nav:focus {
    background-color: #3F495E;
  }

  .md\:focus\:bg-side-nav:focus {
    background-color: #ECF0F1;
  }

  .md\:focus\:bg-nav-item:focus {
    background-color: #626b7a;
  }

  .md\:focus\:bg-light-border:focus {
    background-color: #dfe4e6;
  }

  .md\:focus\:bg-white-medium:focus {
    background-color: #FAFAFA;
  }

  .md\:focus\:bg-white-medium-dark:focus {
    background-color: #E5E9EB;
  }

  .md\:focus\:bg-red-vibrant:focus {
    background-color: #e46050;
  }

  .md\:focus\:bg-red-vibrant-dark:focus {
    background-color: #d64230;
  }

  .md\:focus\:bg-primary:focus {
    background-color: #51BE99;
  }

  .md\:focus\:bg-primary-dark:focus {
    background-color: #0e5f43;
  }

  .md\:focus\:bg-warning:focus {
    background-color: #f4ab43;
  }

  .md\:focus\:bg-warning-dark:focus {
    background-color: #c37c16;
  }

  .md\:focus\:bg-black-dark:focus {
    background-color: #272634;
  }

  .md\:focus\:bg-black-darkest:focus {
    background-color: #141418;
  }

  .md\:focus\:bg-info:focus {
    background-color: #52bcdc;
  }

  .md\:focus\:bg-info-dark:focus {
    background-color: #2cadd4;
  }

  .md\:focus\:bg-success:focus {
    background-color: #72b159;
  }

  .md\:focus\:bg-success-dark:focus {
    background-color: #5D9547;
  }

  .md\:focus\:bg-transparent:focus {
    background-color: transparent;
  }

  .md\:focus\:bg-black:focus {
    background-color: #000;
  }

  .md\:focus\:bg-white:focus {
    background-color: #fff;
  }

  .md\:focus\:bg-gray-100:focus {
    background-color: #f7fafc;
  }

  .md\:focus\:bg-gray-200:focus {
    background-color: #edf2f7;
  }

  .md\:focus\:bg-gray-300:focus {
    background-color: #e2e8f0;
  }

  .md\:focus\:bg-gray-400:focus {
    background-color: #cbd5e0;
  }

  .md\:focus\:bg-gray-500:focus {
    background-color: #a0aec0;
  }

  .md\:focus\:bg-gray-600:focus {
    background-color: #718096;
  }

  .md\:focus\:bg-gray-700:focus {
    background-color: #4a5568;
  }

  .md\:focus\:bg-gray-800:focus {
    background-color: #2d3748;
  }

  .md\:focus\:bg-gray-900:focus {
    background-color: #1a202c;
  }

  .md\:focus\:bg-red-100:focus {
    background-color: #fff5f5;
  }

  .md\:focus\:bg-red-200:focus {
    background-color: #fed7d7;
  }

  .md\:focus\:bg-red-300:focus {
    background-color: #feb2b2;
  }

  .md\:focus\:bg-red-400:focus {
    background-color: #fc8181;
  }

  .md\:focus\:bg-red-500:focus {
    background-color: #f56565;
  }

  .md\:focus\:bg-red-600:focus {
    background-color: #e53e3e;
  }

  .md\:focus\:bg-red-700:focus {
    background-color: #c53030;
  }

  .md\:focus\:bg-red-800:focus {
    background-color: #9b2c2c;
  }

  .md\:focus\:bg-red-900:focus {
    background-color: #742a2a;
  }

  .md\:focus\:bg-orange-100:focus {
    background-color: #fffaf0;
  }

  .md\:focus\:bg-orange-200:focus {
    background-color: #feebc8;
  }

  .md\:focus\:bg-orange-300:focus {
    background-color: #fbd38d;
  }

  .md\:focus\:bg-orange-400:focus {
    background-color: #f6ad55;
  }

  .md\:focus\:bg-orange-500:focus {
    background-color: #ed8936;
  }

  .md\:focus\:bg-orange-600:focus {
    background-color: #dd6b20;
  }

  .md\:focus\:bg-orange-700:focus {
    background-color: #c05621;
  }

  .md\:focus\:bg-orange-800:focus {
    background-color: #9c4221;
  }

  .md\:focus\:bg-orange-900:focus {
    background-color: #7b341e;
  }

  .md\:focus\:bg-yellow-100:focus {
    background-color: #fffff0;
  }

  .md\:focus\:bg-yellow-200:focus {
    background-color: #fefcbf;
  }

  .md\:focus\:bg-yellow-300:focus {
    background-color: #faf089;
  }

  .md\:focus\:bg-yellow-400:focus {
    background-color: #f6e05e;
  }

  .md\:focus\:bg-yellow-500:focus {
    background-color: #ecc94b;
  }

  .md\:focus\:bg-yellow-600:focus {
    background-color: #d69e2e;
  }

  .md\:focus\:bg-yellow-700:focus {
    background-color: #b7791f;
  }

  .md\:focus\:bg-yellow-800:focus {
    background-color: #975a16;
  }

  .md\:focus\:bg-yellow-900:focus {
    background-color: #744210;
  }

  .md\:focus\:bg-green-100:focus {
    background-color: #f0fff4;
  }

  .md\:focus\:bg-green-200:focus {
    background-color: #c6f6d5;
  }

  .md\:focus\:bg-green-300:focus {
    background-color: #9ae6b4;
  }

  .md\:focus\:bg-green-400:focus {
    background-color: #68d391;
  }

  .md\:focus\:bg-green-500:focus {
    background-color: #48bb78;
  }

  .md\:focus\:bg-green-600:focus {
    background-color: #38a169;
  }

  .md\:focus\:bg-green-700:focus {
    background-color: #2f855a;
  }

  .md\:focus\:bg-green-800:focus {
    background-color: #276749;
  }

  .md\:focus\:bg-green-900:focus {
    background-color: #22543d;
  }

  .md\:focus\:bg-teal-100:focus {
    background-color: #e6fffa;
  }

  .md\:focus\:bg-teal-200:focus {
    background-color: #b2f5ea;
  }

  .md\:focus\:bg-teal-300:focus {
    background-color: #81e6d9;
  }

  .md\:focus\:bg-teal-400:focus {
    background-color: #4fd1c5;
  }

  .md\:focus\:bg-teal-500:focus {
    background-color: #38b2ac;
  }

  .md\:focus\:bg-teal-600:focus {
    background-color: #319795;
  }

  .md\:focus\:bg-teal-700:focus {
    background-color: #2c7a7b;
  }

  .md\:focus\:bg-teal-800:focus {
    background-color: #285e61;
  }

  .md\:focus\:bg-teal-900:focus {
    background-color: #234e52;
  }

  .md\:focus\:bg-blue-100:focus {
    background-color: #ebf8ff;
  }

  .md\:focus\:bg-blue-200:focus {
    background-color: #bee3f8;
  }

  .md\:focus\:bg-blue-300:focus {
    background-color: #90cdf4;
  }

  .md\:focus\:bg-blue-400:focus {
    background-color: #63b3ed;
  }

  .md\:focus\:bg-blue-500:focus {
    background-color: #4299e1;
  }

  .md\:focus\:bg-blue-600:focus {
    background-color: #3182ce;
  }

  .md\:focus\:bg-blue-700:focus {
    background-color: #2b6cb0;
  }

  .md\:focus\:bg-blue-800:focus {
    background-color: #2c5282;
  }

  .md\:focus\:bg-blue-900:focus {
    background-color: #2a4365;
  }

  .md\:focus\:bg-indigo-100:focus {
    background-color: #ebf4ff;
  }

  .md\:focus\:bg-indigo-200:focus {
    background-color: #c3dafe;
  }

  .md\:focus\:bg-indigo-300:focus {
    background-color: #a3bffa;
  }

  .md\:focus\:bg-indigo-400:focus {
    background-color: #7f9cf5;
  }

  .md\:focus\:bg-indigo-500:focus {
    background-color: #667eea;
  }

  .md\:focus\:bg-indigo-600:focus {
    background-color: #5a67d8;
  }

  .md\:focus\:bg-indigo-700:focus {
    background-color: #4c51bf;
  }

  .md\:focus\:bg-indigo-800:focus {
    background-color: #434190;
  }

  .md\:focus\:bg-indigo-900:focus {
    background-color: #3c366b;
  }

  .md\:focus\:bg-purple-100:focus {
    background-color: #faf5ff;
  }

  .md\:focus\:bg-purple-200:focus {
    background-color: #e9d8fd;
  }

  .md\:focus\:bg-purple-300:focus {
    background-color: #d6bcfa;
  }

  .md\:focus\:bg-purple-400:focus {
    background-color: #b794f4;
  }

  .md\:focus\:bg-purple-500:focus {
    background-color: #9f7aea;
  }

  .md\:focus\:bg-purple-600:focus {
    background-color: #805ad5;
  }

  .md\:focus\:bg-purple-700:focus {
    background-color: #6b46c1;
  }

  .md\:focus\:bg-purple-800:focus {
    background-color: #553c9a;
  }

  .md\:focus\:bg-purple-900:focus {
    background-color: #44337a;
  }

  .md\:focus\:bg-pink-100:focus {
    background-color: #fff5f7;
  }

  .md\:focus\:bg-pink-200:focus {
    background-color: #fed7e2;
  }

  .md\:focus\:bg-pink-300:focus {
    background-color: #fbb6ce;
  }

  .md\:focus\:bg-pink-400:focus {
    background-color: #f687b3;
  }

  .md\:focus\:bg-pink-500:focus {
    background-color: #ed64a6;
  }

  .md\:focus\:bg-pink-600:focus {
    background-color: #d53f8c;
  }

  .md\:focus\:bg-pink-700:focus {
    background-color: #b83280;
  }

  .md\:focus\:bg-pink-800:focus {
    background-color: #97266d;
  }

  .md\:focus\:bg-pink-900:focus {
    background-color: #702459;
  }

  .md\:bg-bottom {
    background-position: bottom;
  }

  .md\:bg-center {
    background-position: center;
  }

  .md\:bg-left {
    background-position: left;
  }

  .md\:bg-left-bottom {
    background-position: left bottom;
  }

  .md\:bg-left-top {
    background-position: left top;
  }

  .md\:bg-right {
    background-position: right;
  }

  .md\:bg-right-bottom {
    background-position: right bottom;
  }

  .md\:bg-right-top {
    background-position: right top;
  }

  .md\:bg-top {
    background-position: top;
  }

  .md\:bg-repeat {
    background-repeat: repeat;
  }

  .md\:bg-no-repeat {
    background-repeat: no-repeat;
  }

  .md\:bg-repeat-x {
    background-repeat: repeat-x;
  }

  .md\:bg-repeat-y {
    background-repeat: repeat-y;
  }

  .md\:bg-repeat-round {
    background-repeat: round;
  }

  .md\:bg-repeat-space {
    background-repeat: space;
  }

  .md\:bg-auto {
    background-size: auto;
  }

  .md\:bg-cover {
    background-size: cover;
  }

  .md\:bg-contain {
    background-size: contain;
  }

  .md\:border-collapse {
    border-collapse: collapse;
  }

  .md\:border-separate {
    border-collapse: separate;
  }

  .md\:border-grey-darkest {
    border-color: #3d4852;
  }

  .md\:border-grey-darker {
    border-color: #606f7b;
  }

  .md\:border-grey-dark {
    border-color: #8795a1;
  }

  .md\:border-grey {
    border-color: #b8c2cc;
  }

  .md\:border-grey-light {
    border-color: #dae1e7;
  }

  .md\:border-grey-lighter {
    border-color: #f1f5f8;
  }

  .md\:border-grey-lightest {
    border-color: #f8fafc;
  }

  .md\:border-grey-mid-light {
    border-color: #f3f3f4;
  }

  .md\:border-white-lightest {
    border-color: #f4f4f4;
  }

  .md\:border-red-darkest {
    border-color: #3b0d0c;
  }

  .md\:border-red-darker {
    border-color: #621b18;
  }

  .md\:border-red-dark {
    border-color: #cc1f1a;
  }

  .md\:border-red-light {
    border-color: #ef5753;
  }

  .md\:border-red-lighter {
    border-color: #f9acaa;
  }

  .md\:border-red-lightest {
    border-color: #fcebea;
  }

  .md\:border-orange-darkest {
    border-color: #462a16;
  }

  .md\:border-orange-darker {
    border-color: #613b1f;
  }

  .md\:border-orange-dark {
    border-color: #de751f;
  }

  .md\:border-orange-light {
    border-color: #faad63;
  }

  .md\:border-orange-lighter {
    border-color: #fcd9b6;
  }

  .md\:border-orange-lightest {
    border-color: #fff5eb;
  }

  .md\:border-yellow-darkest {
    border-color: #453411;
  }

  .md\:border-yellow-darker {
    border-color: #684f1d;
  }

  .md\:border-yellow-dark {
    border-color: #f2d024;
  }

  .md\:border-yellow-light {
    border-color: #fff382;
  }

  .md\:border-yellow-lighter {
    border-color: #fff9c2;
  }

  .md\:border-yellow-lightest {
    border-color: #fcfbeb;
  }

  .md\:border-green-darkest {
    border-color: #0f2f21;
  }

  .md\:border-green-darker {
    border-color: #1a4731;
  }

  .md\:border-green-dark {
    border-color: #1f9d55;
  }

  .md\:border-green-light {
    border-color: #51d88a;
  }

  .md\:border-green-lighter {
    border-color: #a2f5bf;
  }

  .md\:border-green-lightest {
    border-color: #e3fcec;
  }

  .md\:border-teal-darkest {
    border-color: #0d3331;
  }

  .md\:border-teal-darker {
    border-color: #20504f;
  }

  .md\:border-teal-dark {
    border-color: #38a89d;
  }

  .md\:border-teal-light {
    border-color: #64d5ca;
  }

  .md\:border-teal-lighter {
    border-color: #a0f0ed;
  }

  .md\:border-teal-lightest {
    border-color: #e8fffe;
  }

  .md\:border-blue-darkest {
    border-color: #12283a;
  }

  .md\:border-blue-darker {
    border-color: #1c3d5a;
  }

  .md\:border-blue-dark {
    border-color: #2779bd;
  }

  .md\:border-blue-light {
    border-color: #6cb2eb;
  }

  .md\:border-blue-lighter {
    border-color: #bcdefa;
  }

  .md\:border-blue-lightest {
    border-color: #eff8ff;
  }

  .md\:border-indigo-darkest {
    border-color: #191e38;
  }

  .md\:border-indigo-darker {
    border-color: #2f365f;
  }

  .md\:border-indigo-dark {
    border-color: #5661b3;
  }

  .md\:border-indigo-light {
    border-color: #7886d7;
  }

  .md\:border-indigo-lighter {
    border-color: #b2b7ff;
  }

  .md\:border-indigo-lightest {
    border-color: #e6e8ff;
  }

  .md\:border-purple-darkest {
    border-color: #21183c;
  }

  .md\:border-purple-darker {
    border-color: #382b5f;
  }

  .md\:border-purple-dark {
    border-color: #794acf;
  }

  .md\:border-purple-light {
    border-color: #a779e9;
  }

  .md\:border-purple-lighter {
    border-color: #d6bbfc;
  }

  .md\:border-purple-lightest {
    border-color: #f3ebff;
  }

  .md\:border-pink-darkest {
    border-color: #451225;
  }

  .md\:border-pink-darker {
    border-color: #6f213f;
  }

  .md\:border-pink-dark {
    border-color: #eb5286;
  }

  .md\:border-pink-light {
    border-color: #fa7ea8;
  }

  .md\:border-pink-lighter {
    border-color: #ffbbca;
  }

  .md\:border-pink-lightest {
    border-color: #ffebef;
  }

  .md\:border-nav {
    border-color: #3F495E;
  }

  .md\:border-side-nav {
    border-color: #ECF0F1;
  }

  .md\:border-nav-item {
    border-color: #626b7a;
  }

  .md\:border-light-border {
    border-color: #dfe4e6;
  }

  .md\:border-white-medium {
    border-color: #FAFAFA;
  }

  .md\:border-white-medium-dark {
    border-color: #E5E9EB;
  }

  .md\:border-red-vibrant {
    border-color: #e46050;
  }

  .md\:border-red-vibrant-dark {
    border-color: #d64230;
  }

  .md\:border-primary {
    border-color: #51BE99;
  }

  .md\:border-primary-dark {
    border-color: #0e5f43;
  }

  .md\:border-warning {
    border-color: #f4ab43;
  }

  .md\:border-warning-dark {
    border-color: #c37c16;
  }

  .md\:border-black-dark {
    border-color: #272634;
  }

  .md\:border-black-darkest {
    border-color: #141418;
  }

  .md\:border-info {
    border-color: #52bcdc;
  }

  .md\:border-info-dark {
    border-color: #2cadd4;
  }

  .md\:border-success {
    border-color: #72b159;
  }

  .md\:border-success-dark {
    border-color: #5D9547;
  }

  .md\:border-transparent {
    border-color: transparent;
  }

  .md\:border-black {
    border-color: #000;
  }

  .md\:border-white {
    border-color: #fff;
  }

  .md\:border-gray-100 {
    border-color: #f7fafc;
  }

  .md\:border-gray-200 {
    border-color: #edf2f7;
  }

  .md\:border-gray-300 {
    border-color: #e2e8f0;
  }

  .md\:border-gray-400 {
    border-color: #cbd5e0;
  }

  .md\:border-gray-500 {
    border-color: #a0aec0;
  }

  .md\:border-gray-600 {
    border-color: #718096;
  }

  .md\:border-gray-700 {
    border-color: #4a5568;
  }

  .md\:border-gray-800 {
    border-color: #2d3748;
  }

  .md\:border-gray-900 {
    border-color: #1a202c;
  }

  .md\:border-red-100 {
    border-color: #fff5f5;
  }

  .md\:border-red-200 {
    border-color: #fed7d7;
  }

  .md\:border-red-300 {
    border-color: #feb2b2;
  }

  .md\:border-red-400 {
    border-color: #fc8181;
  }

  .md\:border-red-500 {
    border-color: #f56565;
  }

  .md\:border-red-600 {
    border-color: #e53e3e;
  }

  .md\:border-red-700 {
    border-color: #c53030;
  }

  .md\:border-red-800 {
    border-color: #9b2c2c;
  }

  .md\:border-red-900 {
    border-color: #742a2a;
  }

  .md\:border-orange-100 {
    border-color: #fffaf0;
  }

  .md\:border-orange-200 {
    border-color: #feebc8;
  }

  .md\:border-orange-300 {
    border-color: #fbd38d;
  }

  .md\:border-orange-400 {
    border-color: #f6ad55;
  }

  .md\:border-orange-500 {
    border-color: #ed8936;
  }

  .md\:border-orange-600 {
    border-color: #dd6b20;
  }

  .md\:border-orange-700 {
    border-color: #c05621;
  }

  .md\:border-orange-800 {
    border-color: #9c4221;
  }

  .md\:border-orange-900 {
    border-color: #7b341e;
  }

  .md\:border-yellow-100 {
    border-color: #fffff0;
  }

  .md\:border-yellow-200 {
    border-color: #fefcbf;
  }

  .md\:border-yellow-300 {
    border-color: #faf089;
  }

  .md\:border-yellow-400 {
    border-color: #f6e05e;
  }

  .md\:border-yellow-500 {
    border-color: #ecc94b;
  }

  .md\:border-yellow-600 {
    border-color: #d69e2e;
  }

  .md\:border-yellow-700 {
    border-color: #b7791f;
  }

  .md\:border-yellow-800 {
    border-color: #975a16;
  }

  .md\:border-yellow-900 {
    border-color: #744210;
  }

  .md\:border-green-100 {
    border-color: #f0fff4;
  }

  .md\:border-green-200 {
    border-color: #c6f6d5;
  }

  .md\:border-green-300 {
    border-color: #9ae6b4;
  }

  .md\:border-green-400 {
    border-color: #68d391;
  }

  .md\:border-green-500 {
    border-color: #48bb78;
  }

  .md\:border-green-600 {
    border-color: #38a169;
  }

  .md\:border-green-700 {
    border-color: #2f855a;
  }

  .md\:border-green-800 {
    border-color: #276749;
  }

  .md\:border-green-900 {
    border-color: #22543d;
  }

  .md\:border-teal-100 {
    border-color: #e6fffa;
  }

  .md\:border-teal-200 {
    border-color: #b2f5ea;
  }

  .md\:border-teal-300 {
    border-color: #81e6d9;
  }

  .md\:border-teal-400 {
    border-color: #4fd1c5;
  }

  .md\:border-teal-500 {
    border-color: #38b2ac;
  }

  .md\:border-teal-600 {
    border-color: #319795;
  }

  .md\:border-teal-700 {
    border-color: #2c7a7b;
  }

  .md\:border-teal-800 {
    border-color: #285e61;
  }

  .md\:border-teal-900 {
    border-color: #234e52;
  }

  .md\:border-blue-100 {
    border-color: #ebf8ff;
  }

  .md\:border-blue-200 {
    border-color: #bee3f8;
  }

  .md\:border-blue-300 {
    border-color: #90cdf4;
  }

  .md\:border-blue-400 {
    border-color: #63b3ed;
  }

  .md\:border-blue-500 {
    border-color: #4299e1;
  }

  .md\:border-blue-600 {
    border-color: #3182ce;
  }

  .md\:border-blue-700 {
    border-color: #2b6cb0;
  }

  .md\:border-blue-800 {
    border-color: #2c5282;
  }

  .md\:border-blue-900 {
    border-color: #2a4365;
  }

  .md\:border-indigo-100 {
    border-color: #ebf4ff;
  }

  .md\:border-indigo-200 {
    border-color: #c3dafe;
  }

  .md\:border-indigo-300 {
    border-color: #a3bffa;
  }

  .md\:border-indigo-400 {
    border-color: #7f9cf5;
  }

  .md\:border-indigo-500 {
    border-color: #667eea;
  }

  .md\:border-indigo-600 {
    border-color: #5a67d8;
  }

  .md\:border-indigo-700 {
    border-color: #4c51bf;
  }

  .md\:border-indigo-800 {
    border-color: #434190;
  }

  .md\:border-indigo-900 {
    border-color: #3c366b;
  }

  .md\:border-purple-100 {
    border-color: #faf5ff;
  }

  .md\:border-purple-200 {
    border-color: #e9d8fd;
  }

  .md\:border-purple-300 {
    border-color: #d6bcfa;
  }

  .md\:border-purple-400 {
    border-color: #b794f4;
  }

  .md\:border-purple-500 {
    border-color: #9f7aea;
  }

  .md\:border-purple-600 {
    border-color: #805ad5;
  }

  .md\:border-purple-700 {
    border-color: #6b46c1;
  }

  .md\:border-purple-800 {
    border-color: #553c9a;
  }

  .md\:border-purple-900 {
    border-color: #44337a;
  }

  .md\:border-pink-100 {
    border-color: #fff5f7;
  }

  .md\:border-pink-200 {
    border-color: #fed7e2;
  }

  .md\:border-pink-300 {
    border-color: #fbb6ce;
  }

  .md\:border-pink-400 {
    border-color: #f687b3;
  }

  .md\:border-pink-500 {
    border-color: #ed64a6;
  }

  .md\:border-pink-600 {
    border-color: #d53f8c;
  }

  .md\:border-pink-700 {
    border-color: #b83280;
  }

  .md\:border-pink-800 {
    border-color: #97266d;
  }

  .md\:border-pink-900 {
    border-color: #702459;
  }

  .md\:hover\:border-grey-darkest:hover {
    border-color: #3d4852;
  }

  .md\:hover\:border-grey-darker:hover {
    border-color: #606f7b;
  }

  .md\:hover\:border-grey-dark:hover {
    border-color: #8795a1;
  }

  .md\:hover\:border-grey:hover {
    border-color: #b8c2cc;
  }

  .md\:hover\:border-grey-light:hover {
    border-color: #dae1e7;
  }

  .md\:hover\:border-grey-lighter:hover {
    border-color: #f1f5f8;
  }

  .md\:hover\:border-grey-lightest:hover {
    border-color: #f8fafc;
  }

  .md\:hover\:border-grey-mid-light:hover {
    border-color: #f3f3f4;
  }

  .md\:hover\:border-white-lightest:hover {
    border-color: #f4f4f4;
  }

  .md\:hover\:border-red-darkest:hover {
    border-color: #3b0d0c;
  }

  .md\:hover\:border-red-darker:hover {
    border-color: #621b18;
  }

  .md\:hover\:border-red-dark:hover {
    border-color: #cc1f1a;
  }

  .md\:hover\:border-red-light:hover {
    border-color: #ef5753;
  }

  .md\:hover\:border-red-lighter:hover {
    border-color: #f9acaa;
  }

  .md\:hover\:border-red-lightest:hover {
    border-color: #fcebea;
  }

  .md\:hover\:border-orange-darkest:hover {
    border-color: #462a16;
  }

  .md\:hover\:border-orange-darker:hover {
    border-color: #613b1f;
  }

  .md\:hover\:border-orange-dark:hover {
    border-color: #de751f;
  }

  .md\:hover\:border-orange-light:hover {
    border-color: #faad63;
  }

  .md\:hover\:border-orange-lighter:hover {
    border-color: #fcd9b6;
  }

  .md\:hover\:border-orange-lightest:hover {
    border-color: #fff5eb;
  }

  .md\:hover\:border-yellow-darkest:hover {
    border-color: #453411;
  }

  .md\:hover\:border-yellow-darker:hover {
    border-color: #684f1d;
  }

  .md\:hover\:border-yellow-dark:hover {
    border-color: #f2d024;
  }

  .md\:hover\:border-yellow-light:hover {
    border-color: #fff382;
  }

  .md\:hover\:border-yellow-lighter:hover {
    border-color: #fff9c2;
  }

  .md\:hover\:border-yellow-lightest:hover {
    border-color: #fcfbeb;
  }

  .md\:hover\:border-green-darkest:hover {
    border-color: #0f2f21;
  }

  .md\:hover\:border-green-darker:hover {
    border-color: #1a4731;
  }

  .md\:hover\:border-green-dark:hover {
    border-color: #1f9d55;
  }

  .md\:hover\:border-green-light:hover {
    border-color: #51d88a;
  }

  .md\:hover\:border-green-lighter:hover {
    border-color: #a2f5bf;
  }

  .md\:hover\:border-green-lightest:hover {
    border-color: #e3fcec;
  }

  .md\:hover\:border-teal-darkest:hover {
    border-color: #0d3331;
  }

  .md\:hover\:border-teal-darker:hover {
    border-color: #20504f;
  }

  .md\:hover\:border-teal-dark:hover {
    border-color: #38a89d;
  }

  .md\:hover\:border-teal-light:hover {
    border-color: #64d5ca;
  }

  .md\:hover\:border-teal-lighter:hover {
    border-color: #a0f0ed;
  }

  .md\:hover\:border-teal-lightest:hover {
    border-color: #e8fffe;
  }

  .md\:hover\:border-blue-darkest:hover {
    border-color: #12283a;
  }

  .md\:hover\:border-blue-darker:hover {
    border-color: #1c3d5a;
  }

  .md\:hover\:border-blue-dark:hover {
    border-color: #2779bd;
  }

  .md\:hover\:border-blue-light:hover {
    border-color: #6cb2eb;
  }

  .md\:hover\:border-blue-lighter:hover {
    border-color: #bcdefa;
  }

  .md\:hover\:border-blue-lightest:hover {
    border-color: #eff8ff;
  }

  .md\:hover\:border-indigo-darkest:hover {
    border-color: #191e38;
  }

  .md\:hover\:border-indigo-darker:hover {
    border-color: #2f365f;
  }

  .md\:hover\:border-indigo-dark:hover {
    border-color: #5661b3;
  }

  .md\:hover\:border-indigo-light:hover {
    border-color: #7886d7;
  }

  .md\:hover\:border-indigo-lighter:hover {
    border-color: #b2b7ff;
  }

  .md\:hover\:border-indigo-lightest:hover {
    border-color: #e6e8ff;
  }

  .md\:hover\:border-purple-darkest:hover {
    border-color: #21183c;
  }

  .md\:hover\:border-purple-darker:hover {
    border-color: #382b5f;
  }

  .md\:hover\:border-purple-dark:hover {
    border-color: #794acf;
  }

  .md\:hover\:border-purple-light:hover {
    border-color: #a779e9;
  }

  .md\:hover\:border-purple-lighter:hover {
    border-color: #d6bbfc;
  }

  .md\:hover\:border-purple-lightest:hover {
    border-color: #f3ebff;
  }

  .md\:hover\:border-pink-darkest:hover {
    border-color: #451225;
  }

  .md\:hover\:border-pink-darker:hover {
    border-color: #6f213f;
  }

  .md\:hover\:border-pink-dark:hover {
    border-color: #eb5286;
  }

  .md\:hover\:border-pink-light:hover {
    border-color: #fa7ea8;
  }

  .md\:hover\:border-pink-lighter:hover {
    border-color: #ffbbca;
  }

  .md\:hover\:border-pink-lightest:hover {
    border-color: #ffebef;
  }

  .md\:hover\:border-nav:hover {
    border-color: #3F495E;
  }

  .md\:hover\:border-side-nav:hover {
    border-color: #ECF0F1;
  }

  .md\:hover\:border-nav-item:hover {
    border-color: #626b7a;
  }

  .md\:hover\:border-light-border:hover {
    border-color: #dfe4e6;
  }

  .md\:hover\:border-white-medium:hover {
    border-color: #FAFAFA;
  }

  .md\:hover\:border-white-medium-dark:hover {
    border-color: #E5E9EB;
  }

  .md\:hover\:border-red-vibrant:hover {
    border-color: #e46050;
  }

  .md\:hover\:border-red-vibrant-dark:hover {
    border-color: #d64230;
  }

  .md\:hover\:border-primary:hover {
    border-color: #51BE99;
  }

  .md\:hover\:border-primary-dark:hover {
    border-color: #0e5f43;
  }

  .md\:hover\:border-warning:hover {
    border-color: #f4ab43;
  }

  .md\:hover\:border-warning-dark:hover {
    border-color: #c37c16;
  }

  .md\:hover\:border-black-dark:hover {
    border-color: #272634;
  }

  .md\:hover\:border-black-darkest:hover {
    border-color: #141418;
  }

  .md\:hover\:border-info:hover {
    border-color: #52bcdc;
  }

  .md\:hover\:border-info-dark:hover {
    border-color: #2cadd4;
  }

  .md\:hover\:border-success:hover {
    border-color: #72b159;
  }

  .md\:hover\:border-success-dark:hover {
    border-color: #5D9547;
  }

  .md\:hover\:border-transparent:hover {
    border-color: transparent;
  }

  .md\:hover\:border-black:hover {
    border-color: #000;
  }

  .md\:hover\:border-white:hover {
    border-color: #fff;
  }

  .md\:hover\:border-gray-100:hover {
    border-color: #f7fafc;
  }

  .md\:hover\:border-gray-200:hover {
    border-color: #edf2f7;
  }

  .md\:hover\:border-gray-300:hover {
    border-color: #e2e8f0;
  }

  .md\:hover\:border-gray-400:hover {
    border-color: #cbd5e0;
  }

  .md\:hover\:border-gray-500:hover {
    border-color: #a0aec0;
  }

  .md\:hover\:border-gray-600:hover {
    border-color: #718096;
  }

  .md\:hover\:border-gray-700:hover {
    border-color: #4a5568;
  }

  .md\:hover\:border-gray-800:hover {
    border-color: #2d3748;
  }

  .md\:hover\:border-gray-900:hover {
    border-color: #1a202c;
  }

  .md\:hover\:border-red-100:hover {
    border-color: #fff5f5;
  }

  .md\:hover\:border-red-200:hover {
    border-color: #fed7d7;
  }

  .md\:hover\:border-red-300:hover {
    border-color: #feb2b2;
  }

  .md\:hover\:border-red-400:hover {
    border-color: #fc8181;
  }

  .md\:hover\:border-red-500:hover {
    border-color: #f56565;
  }

  .md\:hover\:border-red-600:hover {
    border-color: #e53e3e;
  }

  .md\:hover\:border-red-700:hover {
    border-color: #c53030;
  }

  .md\:hover\:border-red-800:hover {
    border-color: #9b2c2c;
  }

  .md\:hover\:border-red-900:hover {
    border-color: #742a2a;
  }

  .md\:hover\:border-orange-100:hover {
    border-color: #fffaf0;
  }

  .md\:hover\:border-orange-200:hover {
    border-color: #feebc8;
  }

  .md\:hover\:border-orange-300:hover {
    border-color: #fbd38d;
  }

  .md\:hover\:border-orange-400:hover {
    border-color: #f6ad55;
  }

  .md\:hover\:border-orange-500:hover {
    border-color: #ed8936;
  }

  .md\:hover\:border-orange-600:hover {
    border-color: #dd6b20;
  }

  .md\:hover\:border-orange-700:hover {
    border-color: #c05621;
  }

  .md\:hover\:border-orange-800:hover {
    border-color: #9c4221;
  }

  .md\:hover\:border-orange-900:hover {
    border-color: #7b341e;
  }

  .md\:hover\:border-yellow-100:hover {
    border-color: #fffff0;
  }

  .md\:hover\:border-yellow-200:hover {
    border-color: #fefcbf;
  }

  .md\:hover\:border-yellow-300:hover {
    border-color: #faf089;
  }

  .md\:hover\:border-yellow-400:hover {
    border-color: #f6e05e;
  }

  .md\:hover\:border-yellow-500:hover {
    border-color: #ecc94b;
  }

  .md\:hover\:border-yellow-600:hover {
    border-color: #d69e2e;
  }

  .md\:hover\:border-yellow-700:hover {
    border-color: #b7791f;
  }

  .md\:hover\:border-yellow-800:hover {
    border-color: #975a16;
  }

  .md\:hover\:border-yellow-900:hover {
    border-color: #744210;
  }

  .md\:hover\:border-green-100:hover {
    border-color: #f0fff4;
  }

  .md\:hover\:border-green-200:hover {
    border-color: #c6f6d5;
  }

  .md\:hover\:border-green-300:hover {
    border-color: #9ae6b4;
  }

  .md\:hover\:border-green-400:hover {
    border-color: #68d391;
  }

  .md\:hover\:border-green-500:hover {
    border-color: #48bb78;
  }

  .md\:hover\:border-green-600:hover {
    border-color: #38a169;
  }

  .md\:hover\:border-green-700:hover {
    border-color: #2f855a;
  }

  .md\:hover\:border-green-800:hover {
    border-color: #276749;
  }

  .md\:hover\:border-green-900:hover {
    border-color: #22543d;
  }

  .md\:hover\:border-teal-100:hover {
    border-color: #e6fffa;
  }

  .md\:hover\:border-teal-200:hover {
    border-color: #b2f5ea;
  }

  .md\:hover\:border-teal-300:hover {
    border-color: #81e6d9;
  }

  .md\:hover\:border-teal-400:hover {
    border-color: #4fd1c5;
  }

  .md\:hover\:border-teal-500:hover {
    border-color: #38b2ac;
  }

  .md\:hover\:border-teal-600:hover {
    border-color: #319795;
  }

  .md\:hover\:border-teal-700:hover {
    border-color: #2c7a7b;
  }

  .md\:hover\:border-teal-800:hover {
    border-color: #285e61;
  }

  .md\:hover\:border-teal-900:hover {
    border-color: #234e52;
  }

  .md\:hover\:border-blue-100:hover {
    border-color: #ebf8ff;
  }

  .md\:hover\:border-blue-200:hover {
    border-color: #bee3f8;
  }

  .md\:hover\:border-blue-300:hover {
    border-color: #90cdf4;
  }

  .md\:hover\:border-blue-400:hover {
    border-color: #63b3ed;
  }

  .md\:hover\:border-blue-500:hover {
    border-color: #4299e1;
  }

  .md\:hover\:border-blue-600:hover {
    border-color: #3182ce;
  }

  .md\:hover\:border-blue-700:hover {
    border-color: #2b6cb0;
  }

  .md\:hover\:border-blue-800:hover {
    border-color: #2c5282;
  }

  .md\:hover\:border-blue-900:hover {
    border-color: #2a4365;
  }

  .md\:hover\:border-indigo-100:hover {
    border-color: #ebf4ff;
  }

  .md\:hover\:border-indigo-200:hover {
    border-color: #c3dafe;
  }

  .md\:hover\:border-indigo-300:hover {
    border-color: #a3bffa;
  }

  .md\:hover\:border-indigo-400:hover {
    border-color: #7f9cf5;
  }

  .md\:hover\:border-indigo-500:hover {
    border-color: #667eea;
  }

  .md\:hover\:border-indigo-600:hover {
    border-color: #5a67d8;
  }

  .md\:hover\:border-indigo-700:hover {
    border-color: #4c51bf;
  }

  .md\:hover\:border-indigo-800:hover {
    border-color: #434190;
  }

  .md\:hover\:border-indigo-900:hover {
    border-color: #3c366b;
  }

  .md\:hover\:border-purple-100:hover {
    border-color: #faf5ff;
  }

  .md\:hover\:border-purple-200:hover {
    border-color: #e9d8fd;
  }

  .md\:hover\:border-purple-300:hover {
    border-color: #d6bcfa;
  }

  .md\:hover\:border-purple-400:hover {
    border-color: #b794f4;
  }

  .md\:hover\:border-purple-500:hover {
    border-color: #9f7aea;
  }

  .md\:hover\:border-purple-600:hover {
    border-color: #805ad5;
  }

  .md\:hover\:border-purple-700:hover {
    border-color: #6b46c1;
  }

  .md\:hover\:border-purple-800:hover {
    border-color: #553c9a;
  }

  .md\:hover\:border-purple-900:hover {
    border-color: #44337a;
  }

  .md\:hover\:border-pink-100:hover {
    border-color: #fff5f7;
  }

  .md\:hover\:border-pink-200:hover {
    border-color: #fed7e2;
  }

  .md\:hover\:border-pink-300:hover {
    border-color: #fbb6ce;
  }

  .md\:hover\:border-pink-400:hover {
    border-color: #f687b3;
  }

  .md\:hover\:border-pink-500:hover {
    border-color: #ed64a6;
  }

  .md\:hover\:border-pink-600:hover {
    border-color: #d53f8c;
  }

  .md\:hover\:border-pink-700:hover {
    border-color: #b83280;
  }

  .md\:hover\:border-pink-800:hover {
    border-color: #97266d;
  }

  .md\:hover\:border-pink-900:hover {
    border-color: #702459;
  }

  .md\:focus\:border-grey-darkest:focus {
    border-color: #3d4852;
  }

  .md\:focus\:border-grey-darker:focus {
    border-color: #606f7b;
  }

  .md\:focus\:border-grey-dark:focus {
    border-color: #8795a1;
  }

  .md\:focus\:border-grey:focus {
    border-color: #b8c2cc;
  }

  .md\:focus\:border-grey-light:focus {
    border-color: #dae1e7;
  }

  .md\:focus\:border-grey-lighter:focus {
    border-color: #f1f5f8;
  }

  .md\:focus\:border-grey-lightest:focus {
    border-color: #f8fafc;
  }

  .md\:focus\:border-grey-mid-light:focus {
    border-color: #f3f3f4;
  }

  .md\:focus\:border-white-lightest:focus {
    border-color: #f4f4f4;
  }

  .md\:focus\:border-red-darkest:focus {
    border-color: #3b0d0c;
  }

  .md\:focus\:border-red-darker:focus {
    border-color: #621b18;
  }

  .md\:focus\:border-red-dark:focus {
    border-color: #cc1f1a;
  }

  .md\:focus\:border-red-light:focus {
    border-color: #ef5753;
  }

  .md\:focus\:border-red-lighter:focus {
    border-color: #f9acaa;
  }

  .md\:focus\:border-red-lightest:focus {
    border-color: #fcebea;
  }

  .md\:focus\:border-orange-darkest:focus {
    border-color: #462a16;
  }

  .md\:focus\:border-orange-darker:focus {
    border-color: #613b1f;
  }

  .md\:focus\:border-orange-dark:focus {
    border-color: #de751f;
  }

  .md\:focus\:border-orange-light:focus {
    border-color: #faad63;
  }

  .md\:focus\:border-orange-lighter:focus {
    border-color: #fcd9b6;
  }

  .md\:focus\:border-orange-lightest:focus {
    border-color: #fff5eb;
  }

  .md\:focus\:border-yellow-darkest:focus {
    border-color: #453411;
  }

  .md\:focus\:border-yellow-darker:focus {
    border-color: #684f1d;
  }

  .md\:focus\:border-yellow-dark:focus {
    border-color: #f2d024;
  }

  .md\:focus\:border-yellow-light:focus {
    border-color: #fff382;
  }

  .md\:focus\:border-yellow-lighter:focus {
    border-color: #fff9c2;
  }

  .md\:focus\:border-yellow-lightest:focus {
    border-color: #fcfbeb;
  }

  .md\:focus\:border-green-darkest:focus {
    border-color: #0f2f21;
  }

  .md\:focus\:border-green-darker:focus {
    border-color: #1a4731;
  }

  .md\:focus\:border-green-dark:focus {
    border-color: #1f9d55;
  }

  .md\:focus\:border-green-light:focus {
    border-color: #51d88a;
  }

  .md\:focus\:border-green-lighter:focus {
    border-color: #a2f5bf;
  }

  .md\:focus\:border-green-lightest:focus {
    border-color: #e3fcec;
  }

  .md\:focus\:border-teal-darkest:focus {
    border-color: #0d3331;
  }

  .md\:focus\:border-teal-darker:focus {
    border-color: #20504f;
  }

  .md\:focus\:border-teal-dark:focus {
    border-color: #38a89d;
  }

  .md\:focus\:border-teal-light:focus {
    border-color: #64d5ca;
  }

  .md\:focus\:border-teal-lighter:focus {
    border-color: #a0f0ed;
  }

  .md\:focus\:border-teal-lightest:focus {
    border-color: #e8fffe;
  }

  .md\:focus\:border-blue-darkest:focus {
    border-color: #12283a;
  }

  .md\:focus\:border-blue-darker:focus {
    border-color: #1c3d5a;
  }

  .md\:focus\:border-blue-dark:focus {
    border-color: #2779bd;
  }

  .md\:focus\:border-blue-light:focus {
    border-color: #6cb2eb;
  }

  .md\:focus\:border-blue-lighter:focus {
    border-color: #bcdefa;
  }

  .md\:focus\:border-blue-lightest:focus {
    border-color: #eff8ff;
  }

  .md\:focus\:border-indigo-darkest:focus {
    border-color: #191e38;
  }

  .md\:focus\:border-indigo-darker:focus {
    border-color: #2f365f;
  }

  .md\:focus\:border-indigo-dark:focus {
    border-color: #5661b3;
  }

  .md\:focus\:border-indigo-light:focus {
    border-color: #7886d7;
  }

  .md\:focus\:border-indigo-lighter:focus {
    border-color: #b2b7ff;
  }

  .md\:focus\:border-indigo-lightest:focus {
    border-color: #e6e8ff;
  }

  .md\:focus\:border-purple-darkest:focus {
    border-color: #21183c;
  }

  .md\:focus\:border-purple-darker:focus {
    border-color: #382b5f;
  }

  .md\:focus\:border-purple-dark:focus {
    border-color: #794acf;
  }

  .md\:focus\:border-purple-light:focus {
    border-color: #a779e9;
  }

  .md\:focus\:border-purple-lighter:focus {
    border-color: #d6bbfc;
  }

  .md\:focus\:border-purple-lightest:focus {
    border-color: #f3ebff;
  }

  .md\:focus\:border-pink-darkest:focus {
    border-color: #451225;
  }

  .md\:focus\:border-pink-darker:focus {
    border-color: #6f213f;
  }

  .md\:focus\:border-pink-dark:focus {
    border-color: #eb5286;
  }

  .md\:focus\:border-pink-light:focus {
    border-color: #fa7ea8;
  }

  .md\:focus\:border-pink-lighter:focus {
    border-color: #ffbbca;
  }

  .md\:focus\:border-pink-lightest:focus {
    border-color: #ffebef;
  }

  .md\:focus\:border-nav:focus {
    border-color: #3F495E;
  }

  .md\:focus\:border-side-nav:focus {
    border-color: #ECF0F1;
  }

  .md\:focus\:border-nav-item:focus {
    border-color: #626b7a;
  }

  .md\:focus\:border-light-border:focus {
    border-color: #dfe4e6;
  }

  .md\:focus\:border-white-medium:focus {
    border-color: #FAFAFA;
  }

  .md\:focus\:border-white-medium-dark:focus {
    border-color: #E5E9EB;
  }

  .md\:focus\:border-red-vibrant:focus {
    border-color: #e46050;
  }

  .md\:focus\:border-red-vibrant-dark:focus {
    border-color: #d64230;
  }

  .md\:focus\:border-primary:focus {
    border-color: #51BE99;
  }

  .md\:focus\:border-primary-dark:focus {
    border-color: #0e5f43;
  }

  .md\:focus\:border-warning:focus {
    border-color: #f4ab43;
  }

  .md\:focus\:border-warning-dark:focus {
    border-color: #c37c16;
  }

  .md\:focus\:border-black-dark:focus {
    border-color: #272634;
  }

  .md\:focus\:border-black-darkest:focus {
    border-color: #141418;
  }

  .md\:focus\:border-info:focus {
    border-color: #52bcdc;
  }

  .md\:focus\:border-info-dark:focus {
    border-color: #2cadd4;
  }

  .md\:focus\:border-success:focus {
    border-color: #72b159;
  }

  .md\:focus\:border-success-dark:focus {
    border-color: #5D9547;
  }

  .md\:focus\:border-transparent:focus {
    border-color: transparent;
  }

  .md\:focus\:border-black:focus {
    border-color: #000;
  }

  .md\:focus\:border-white:focus {
    border-color: #fff;
  }

  .md\:focus\:border-gray-100:focus {
    border-color: #f7fafc;
  }

  .md\:focus\:border-gray-200:focus {
    border-color: #edf2f7;
  }

  .md\:focus\:border-gray-300:focus {
    border-color: #e2e8f0;
  }

  .md\:focus\:border-gray-400:focus {
    border-color: #cbd5e0;
  }

  .md\:focus\:border-gray-500:focus {
    border-color: #a0aec0;
  }

  .md\:focus\:border-gray-600:focus {
    border-color: #718096;
  }

  .md\:focus\:border-gray-700:focus {
    border-color: #4a5568;
  }

  .md\:focus\:border-gray-800:focus {
    border-color: #2d3748;
  }

  .md\:focus\:border-gray-900:focus {
    border-color: #1a202c;
  }

  .md\:focus\:border-red-100:focus {
    border-color: #fff5f5;
  }

  .md\:focus\:border-red-200:focus {
    border-color: #fed7d7;
  }

  .md\:focus\:border-red-300:focus {
    border-color: #feb2b2;
  }

  .md\:focus\:border-red-400:focus {
    border-color: #fc8181;
  }

  .md\:focus\:border-red-500:focus {
    border-color: #f56565;
  }

  .md\:focus\:border-red-600:focus {
    border-color: #e53e3e;
  }

  .md\:focus\:border-red-700:focus {
    border-color: #c53030;
  }

  .md\:focus\:border-red-800:focus {
    border-color: #9b2c2c;
  }

  .md\:focus\:border-red-900:focus {
    border-color: #742a2a;
  }

  .md\:focus\:border-orange-100:focus {
    border-color: #fffaf0;
  }

  .md\:focus\:border-orange-200:focus {
    border-color: #feebc8;
  }

  .md\:focus\:border-orange-300:focus {
    border-color: #fbd38d;
  }

  .md\:focus\:border-orange-400:focus {
    border-color: #f6ad55;
  }

  .md\:focus\:border-orange-500:focus {
    border-color: #ed8936;
  }

  .md\:focus\:border-orange-600:focus {
    border-color: #dd6b20;
  }

  .md\:focus\:border-orange-700:focus {
    border-color: #c05621;
  }

  .md\:focus\:border-orange-800:focus {
    border-color: #9c4221;
  }

  .md\:focus\:border-orange-900:focus {
    border-color: #7b341e;
  }

  .md\:focus\:border-yellow-100:focus {
    border-color: #fffff0;
  }

  .md\:focus\:border-yellow-200:focus {
    border-color: #fefcbf;
  }

  .md\:focus\:border-yellow-300:focus {
    border-color: #faf089;
  }

  .md\:focus\:border-yellow-400:focus {
    border-color: #f6e05e;
  }

  .md\:focus\:border-yellow-500:focus {
    border-color: #ecc94b;
  }

  .md\:focus\:border-yellow-600:focus {
    border-color: #d69e2e;
  }

  .md\:focus\:border-yellow-700:focus {
    border-color: #b7791f;
  }

  .md\:focus\:border-yellow-800:focus {
    border-color: #975a16;
  }

  .md\:focus\:border-yellow-900:focus {
    border-color: #744210;
  }

  .md\:focus\:border-green-100:focus {
    border-color: #f0fff4;
  }

  .md\:focus\:border-green-200:focus {
    border-color: #c6f6d5;
  }

  .md\:focus\:border-green-300:focus {
    border-color: #9ae6b4;
  }

  .md\:focus\:border-green-400:focus {
    border-color: #68d391;
  }

  .md\:focus\:border-green-500:focus {
    border-color: #48bb78;
  }

  .md\:focus\:border-green-600:focus {
    border-color: #38a169;
  }

  .md\:focus\:border-green-700:focus {
    border-color: #2f855a;
  }

  .md\:focus\:border-green-800:focus {
    border-color: #276749;
  }

  .md\:focus\:border-green-900:focus {
    border-color: #22543d;
  }

  .md\:focus\:border-teal-100:focus {
    border-color: #e6fffa;
  }

  .md\:focus\:border-teal-200:focus {
    border-color: #b2f5ea;
  }

  .md\:focus\:border-teal-300:focus {
    border-color: #81e6d9;
  }

  .md\:focus\:border-teal-400:focus {
    border-color: #4fd1c5;
  }

  .md\:focus\:border-teal-500:focus {
    border-color: #38b2ac;
  }

  .md\:focus\:border-teal-600:focus {
    border-color: #319795;
  }

  .md\:focus\:border-teal-700:focus {
    border-color: #2c7a7b;
  }

  .md\:focus\:border-teal-800:focus {
    border-color: #285e61;
  }

  .md\:focus\:border-teal-900:focus {
    border-color: #234e52;
  }

  .md\:focus\:border-blue-100:focus {
    border-color: #ebf8ff;
  }

  .md\:focus\:border-blue-200:focus {
    border-color: #bee3f8;
  }

  .md\:focus\:border-blue-300:focus {
    border-color: #90cdf4;
  }

  .md\:focus\:border-blue-400:focus {
    border-color: #63b3ed;
  }

  .md\:focus\:border-blue-500:focus {
    border-color: #4299e1;
  }

  .md\:focus\:border-blue-600:focus {
    border-color: #3182ce;
  }

  .md\:focus\:border-blue-700:focus {
    border-color: #2b6cb0;
  }

  .md\:focus\:border-blue-800:focus {
    border-color: #2c5282;
  }

  .md\:focus\:border-blue-900:focus {
    border-color: #2a4365;
  }

  .md\:focus\:border-indigo-100:focus {
    border-color: #ebf4ff;
  }

  .md\:focus\:border-indigo-200:focus {
    border-color: #c3dafe;
  }

  .md\:focus\:border-indigo-300:focus {
    border-color: #a3bffa;
  }

  .md\:focus\:border-indigo-400:focus {
    border-color: #7f9cf5;
  }

  .md\:focus\:border-indigo-500:focus {
    border-color: #667eea;
  }

  .md\:focus\:border-indigo-600:focus {
    border-color: #5a67d8;
  }

  .md\:focus\:border-indigo-700:focus {
    border-color: #4c51bf;
  }

  .md\:focus\:border-indigo-800:focus {
    border-color: #434190;
  }

  .md\:focus\:border-indigo-900:focus {
    border-color: #3c366b;
  }

  .md\:focus\:border-purple-100:focus {
    border-color: #faf5ff;
  }

  .md\:focus\:border-purple-200:focus {
    border-color: #e9d8fd;
  }

  .md\:focus\:border-purple-300:focus {
    border-color: #d6bcfa;
  }

  .md\:focus\:border-purple-400:focus {
    border-color: #b794f4;
  }

  .md\:focus\:border-purple-500:focus {
    border-color: #9f7aea;
  }

  .md\:focus\:border-purple-600:focus {
    border-color: #805ad5;
  }

  .md\:focus\:border-purple-700:focus {
    border-color: #6b46c1;
  }

  .md\:focus\:border-purple-800:focus {
    border-color: #553c9a;
  }

  .md\:focus\:border-purple-900:focus {
    border-color: #44337a;
  }

  .md\:focus\:border-pink-100:focus {
    border-color: #fff5f7;
  }

  .md\:focus\:border-pink-200:focus {
    border-color: #fed7e2;
  }

  .md\:focus\:border-pink-300:focus {
    border-color: #fbb6ce;
  }

  .md\:focus\:border-pink-400:focus {
    border-color: #f687b3;
  }

  .md\:focus\:border-pink-500:focus {
    border-color: #ed64a6;
  }

  .md\:focus\:border-pink-600:focus {
    border-color: #d53f8c;
  }

  .md\:focus\:border-pink-700:focus {
    border-color: #b83280;
  }

  .md\:focus\:border-pink-800:focus {
    border-color: #97266d;
  }

  .md\:focus\:border-pink-900:focus {
    border-color: #702459;
  }

  .md\:rounded-none {
    border-radius: 0;
  }

  .md\:rounded-sm {
    border-radius: 0.125rem;
  }

  .md\:rounded {
    border-radius: 0.25rem;
  }

  .md\:rounded-lg {
    border-radius: 0.5rem;
  }

  .md\:rounded-full {
    border-radius: 9999px;
  }

  .md\:rounded-t-none {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }

  .md\:rounded-r-none {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }

  .md\:rounded-b-none {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }

  .md\:rounded-l-none {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }

  .md\:rounded-t-sm {
    border-top-left-radius: 0.125rem;
    border-top-right-radius: 0.125rem;
  }

  .md\:rounded-r-sm {
    border-top-right-radius: 0.125rem;
    border-bottom-right-radius: 0.125rem;
  }

  .md\:rounded-b-sm {
    border-bottom-right-radius: 0.125rem;
    border-bottom-left-radius: 0.125rem;
  }

  .md\:rounded-l-sm {
    border-top-left-radius: 0.125rem;
    border-bottom-left-radius: 0.125rem;
  }

  .md\:rounded-t {
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem;
  }

  .md\:rounded-r {
    border-top-right-radius: 0.25rem;
    border-bottom-right-radius: 0.25rem;
  }

  .md\:rounded-b {
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
  }

  .md\:rounded-l {
    border-top-left-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
  }

  .md\:rounded-t-lg {
    border-top-left-radius: 0.5rem;
    border-top-right-radius: 0.5rem;
  }

  .md\:rounded-r-lg {
    border-top-right-radius: 0.5rem;
    border-bottom-right-radius: 0.5rem;
  }

  .md\:rounded-b-lg {
    border-bottom-right-radius: 0.5rem;
    border-bottom-left-radius: 0.5rem;
  }

  .md\:rounded-l-lg {
    border-top-left-radius: 0.5rem;
    border-bottom-left-radius: 0.5rem;
  }

  .md\:rounded-t-full {
    border-top-left-radius: 9999px;
    border-top-right-radius: 9999px;
  }

  .md\:rounded-r-full {
    border-top-right-radius: 9999px;
    border-bottom-right-radius: 9999px;
  }

  .md\:rounded-b-full {
    border-bottom-right-radius: 9999px;
    border-bottom-left-radius: 9999px;
  }

  .md\:rounded-l-full {
    border-top-left-radius: 9999px;
    border-bottom-left-radius: 9999px;
  }

  .md\:rounded-tl-none {
    border-top-left-radius: 0;
  }

  .md\:rounded-tr-none {
    border-top-right-radius: 0;
  }

  .md\:rounded-br-none {
    border-bottom-right-radius: 0;
  }

  .md\:rounded-bl-none {
    border-bottom-left-radius: 0;
  }

  .md\:rounded-tl-sm {
    border-top-left-radius: 0.125rem;
  }

  .md\:rounded-tr-sm {
    border-top-right-radius: 0.125rem;
  }

  .md\:rounded-br-sm {
    border-bottom-right-radius: 0.125rem;
  }

  .md\:rounded-bl-sm {
    border-bottom-left-radius: 0.125rem;
  }

  .md\:rounded-tl {
    border-top-left-radius: 0.25rem;
  }

  .md\:rounded-tr {
    border-top-right-radius: 0.25rem;
  }

  .md\:rounded-br {
    border-bottom-right-radius: 0.25rem;
  }

  .md\:rounded-bl {
    border-bottom-left-radius: 0.25rem;
  }

  .md\:rounded-tl-lg {
    border-top-left-radius: 0.5rem;
  }

  .md\:rounded-tr-lg {
    border-top-right-radius: 0.5rem;
  }

  .md\:rounded-br-lg {
    border-bottom-right-radius: 0.5rem;
  }

  .md\:rounded-bl-lg {
    border-bottom-left-radius: 0.5rem;
  }

  .md\:rounded-tl-full {
    border-top-left-radius: 9999px;
  }

  .md\:rounded-tr-full {
    border-top-right-radius: 9999px;
  }

  .md\:rounded-br-full {
    border-bottom-right-radius: 9999px;
  }

  .md\:rounded-bl-full {
    border-bottom-left-radius: 9999px;
  }

  .md\:border-solid {
    border-style: solid;
  }

  .md\:border-dashed {
    border-style: dashed;
  }

  .md\:border-dotted {
    border-style: dotted;
  }

  .md\:border-double {
    border-style: double;
  }

  .md\:border-none {
    border-style: none;
  }

  .md\:border-0 {
    border-width: 0;
  }

  .md\:border-2 {
    border-width: 2px;
  }

  .md\:border-4 {
    border-width: 4px;
  }

  .md\:border-8 {
    border-width: 8px;
  }

  .md\:border {
    border-width: 1px;
  }

  .md\:border-t-0 {
    border-top-width: 0;
  }

  .md\:border-r-0 {
    border-right-width: 0;
  }

  .md\:border-b-0 {
    border-bottom-width: 0;
  }

  .md\:border-l-0 {
    border-left-width: 0;
  }

  .md\:border-t-2 {
    border-top-width: 2px;
  }

  .md\:border-r-2 {
    border-right-width: 2px;
  }

  .md\:border-b-2 {
    border-bottom-width: 2px;
  }

  .md\:border-l-2 {
    border-left-width: 2px;
  }

  .md\:border-t-4 {
    border-top-width: 4px;
  }

  .md\:border-r-4 {
    border-right-width: 4px;
  }

  .md\:border-b-4 {
    border-bottom-width: 4px;
  }

  .md\:border-l-4 {
    border-left-width: 4px;
  }

  .md\:border-t-8 {
    border-top-width: 8px;
  }

  .md\:border-r-8 {
    border-right-width: 8px;
  }

  .md\:border-b-8 {
    border-bottom-width: 8px;
  }

  .md\:border-l-8 {
    border-left-width: 8px;
  }

  .md\:border-t {
    border-top-width: 1px;
  }

  .md\:border-r {
    border-right-width: 1px;
  }

  .md\:border-b {
    border-bottom-width: 1px;
  }

  .md\:border-l {
    border-left-width: 1px;
  }

  .md\:cursor-auto {
    cursor: auto;
  }

  .md\:cursor-default {
    cursor: default;
  }

  .md\:cursor-pointer {
    cursor: pointer;
  }

  .md\:cursor-wait {
    cursor: wait;
  }

  .md\:cursor-text {
    cursor: text;
  }

  .md\:cursor-move {
    cursor: move;
  }

  .md\:cursor-not-allowed {
    cursor: not-allowed;
  }

  .md\:block {
    display: block;
  }

  .md\:inline-block {
    display: inline-block;
  }

  .md\:inline {
    display: inline;
  }

  .md\:flex {
    display: flex;
  }

  .md\:inline-flex {
    display: inline-flex;
  }

  .md\:table {
    display: table;
  }

  .md\:table-row {
    display: table-row;
  }

  .md\:table-cell {
    display: table-cell;
  }

  .md\:hidden {
    display: none;
  }

  .md\:flex-row {
    flex-direction: row;
  }

  .md\:flex-row-reverse {
    flex-direction: row-reverse;
  }

  .md\:flex-col {
    flex-direction: column;
  }

  .md\:flex-col-reverse {
    flex-direction: column-reverse;
  }

  .md\:flex-wrap {
    flex-wrap: wrap;
  }

  .md\:flex-wrap-reverse {
    flex-wrap: wrap-reverse;
  }

  .md\:flex-no-wrap {
    flex-wrap: nowrap;
  }

  .md\:items-start {
    align-items: flex-start;
  }

  .md\:items-end {
    align-items: flex-end;
  }

  .md\:items-center {
    align-items: center;
  }

  .md\:items-baseline {
    align-items: baseline;
  }

  .md\:items-stretch {
    align-items: stretch;
  }

  .md\:self-auto {
    align-self: auto;
  }

  .md\:self-start {
    align-self: flex-start;
  }

  .md\:self-end {
    align-self: flex-end;
  }

  .md\:self-center {
    align-self: center;
  }

  .md\:self-stretch {
    align-self: stretch;
  }

  .md\:justify-start {
    justify-content: flex-start;
  }

  .md\:justify-end {
    justify-content: flex-end;
  }

  .md\:justify-center {
    justify-content: center;
  }

  .md\:justify-between {
    justify-content: space-between;
  }

  .md\:justify-around {
    justify-content: space-around;
  }

  .md\:content-center {
    align-content: center;
  }

  .md\:content-start {
    align-content: flex-start;
  }

  .md\:content-end {
    align-content: flex-end;
  }

  .md\:content-between {
    align-content: space-between;
  }

  .md\:content-around {
    align-content: space-around;
  }

  .md\:flex-1 {
    flex: 1 1 0%;
  }

  .md\:flex-auto {
    flex: 1 1 auto;
  }

  .md\:flex-initial {
    flex: 0 1 auto;
  }

  .md\:flex-none {
    flex: none;
  }

  .md\:flex-grow-0 {
    flex-grow: 0;
  }

  .md\:flex-grow {
    flex-grow: 1;
  }

  .md\:flex-shrink-0 {
    flex-shrink: 0;
  }

  .md\:flex-shrink {
    flex-shrink: 1;
  }

  .md\:order-1 {
    order: 1;
  }

  .md\:order-2 {
    order: 2;
  }

  .md\:order-3 {
    order: 3;
  }

  .md\:order-4 {
    order: 4;
  }

  .md\:order-5 {
    order: 5;
  }

  .md\:order-6 {
    order: 6;
  }

  .md\:order-7 {
    order: 7;
  }

  .md\:order-8 {
    order: 8;
  }

  .md\:order-9 {
    order: 9;
  }

  .md\:order-10 {
    order: 10;
  }

  .md\:order-11 {
    order: 11;
  }

  .md\:order-12 {
    order: 12;
  }

  .md\:order-first {
    order: -9999;
  }

  .md\:order-last {
    order: 9999;
  }

  .md\:order-none {
    order: 0;
  }

  .md\:float-right {
    float: right;
  }

  .md\:float-left {
    float: left;
  }

  .md\:float-none {
    float: none;
  }

  .md\:clearfix:after {
    content: "";
    display: table;
    clear: both;
  }

  .md\:font-sans {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  }

  .md\:font-serif {
    font-family: Georgia, Cambria, "Times New Roman", Times, serif;
  }

  .md\:font-mono {
    font-family: Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  }

  .md\:font-hairline {
    font-weight: 100;
  }

  .md\:font-thin {
    font-weight: 200;
  }

  .md\:font-light {
    font-weight: 300;
  }

  .md\:font-normal {
    font-weight: 400;
  }

  .md\:font-medium {
    font-weight: 500;
  }

  .md\:font-semibold {
    font-weight: 600;
  }

  .md\:font-bold {
    font-weight: 700;
  }

  .md\:font-extrabold {
    font-weight: 800;
  }

  .md\:font-black {
    font-weight: 900;
  }

  .md\:hover\:font-hairline:hover {
    font-weight: 100;
  }

  .md\:hover\:font-thin:hover {
    font-weight: 200;
  }

  .md\:hover\:font-light:hover {
    font-weight: 300;
  }

  .md\:hover\:font-normal:hover {
    font-weight: 400;
  }

  .md\:hover\:font-medium:hover {
    font-weight: 500;
  }

  .md\:hover\:font-semibold:hover {
    font-weight: 600;
  }

  .md\:hover\:font-bold:hover {
    font-weight: 700;
  }

  .md\:hover\:font-extrabold:hover {
    font-weight: 800;
  }

  .md\:hover\:font-black:hover {
    font-weight: 900;
  }

  .md\:focus\:font-hairline:focus {
    font-weight: 100;
  }

  .md\:focus\:font-thin:focus {
    font-weight: 200;
  }

  .md\:focus\:font-light:focus {
    font-weight: 300;
  }

  .md\:focus\:font-normal:focus {
    font-weight: 400;
  }

  .md\:focus\:font-medium:focus {
    font-weight: 500;
  }

  .md\:focus\:font-semibold:focus {
    font-weight: 600;
  }

  .md\:focus\:font-bold:focus {
    font-weight: 700;
  }

  .md\:focus\:font-extrabold:focus {
    font-weight: 800;
  }

  .md\:focus\:font-black:focus {
    font-weight: 900;
  }

  .md\:h-0 {
    height: 0;
  }

  .md\:h-1 {
    height: 0.25rem;
  }

  .md\:h-2 {
    height: 0.5rem;
  }

  .md\:h-3 {
    height: 0.75rem;
  }

  .md\:h-4 {
    height: 1rem;
  }

  .md\:h-5 {
    height: 1.25rem;
  }

  .md\:h-6 {
    height: 1.5rem;
  }

  .md\:h-8 {
    height: 2rem;
  }

  .md\:h-10 {
    height: 2.5rem;
  }

  .md\:h-12 {
    height: 3rem;
  }

  .md\:h-16 {
    height: 4rem;
  }

  .md\:h-20 {
    height: 5rem;
  }

  .md\:h-24 {
    height: 6rem;
  }

  .md\:h-32 {
    height: 8rem;
  }

  .md\:h-40 {
    height: 10rem;
  }

  .md\:h-48 {
    height: 12rem;
  }

  .md\:h-56 {
    height: 14rem;
  }

  .md\:h-64 {
    height: 16rem;
  }

  .md\:h-auto {
    height: auto;
  }

  .md\:h-px {
    height: 1px;
  }

  .md\:h-full {
    height: 100%;
  }

  .md\:h-screen {
    height: 100vh;
  }

  .md\:leading-none {
    line-height: 1;
  }

  .md\:leading-tight {
    line-height: 1.25;
  }

  .md\:leading-snug {
    line-height: 1.375;
  }

  .md\:leading-normal {
    line-height: 1.5;
  }

  .md\:leading-relaxed {
    line-height: 1.625;
  }

  .md\:leading-loose {
    line-height: 2;
  }

  .md\:list-inside {
    list-style-position: inside;
  }

  .md\:list-outside {
    list-style-position: outside;
  }

  .md\:list-none {
    list-style-type: none;
  }

  .md\:list-disc {
    list-style-type: disc;
  }

  .md\:list-decimal {
    list-style-type: decimal;
  }

  .md\:m-0 {
    margin: 0;
  }

  .md\:m-1 {
    margin: 0.25rem;
  }

  .md\:m-2 {
    margin: 0.5rem;
  }

  .md\:m-3 {
    margin: 0.75rem;
  }

  .md\:m-4 {
    margin: 1rem;
  }

  .md\:m-5 {
    margin: 1.25rem;
  }

  .md\:m-6 {
    margin: 1.5rem;
  }

  .md\:m-8 {
    margin: 2rem;
  }

  .md\:m-10 {
    margin: 2.5rem;
  }

  .md\:m-12 {
    margin: 3rem;
  }

  .md\:m-16 {
    margin: 4rem;
  }

  .md\:m-20 {
    margin: 5rem;
  }

  .md\:m-24 {
    margin: 6rem;
  }

  .md\:m-32 {
    margin: 8rem;
  }

  .md\:m-auto {
    margin: auto;
  }

  .md\:m-px {
    margin: 1px;
  }

  .md\:-m-px {
    margin: -1px;
  }

  .md\:-m-1 {
    margin: -0.25rem;
  }

  .md\:-m-2 {
    margin: -0.5rem;
  }

  .md\:-m-3 {
    margin: -0.75rem;
  }

  .md\:-m-4 {
    margin: -1rem;
  }

  .md\:-m-5 {
    margin: -1.25rem;
  }

  .md\:-m-6 {
    margin: -1.5rem;
  }

  .md\:-m-8 {
    margin: -2rem;
  }

  .md\:-m-10 {
    margin: -2.5rem;
  }

  .md\:-m-12 {
    margin: -3rem;
  }

  .md\:-m-16 {
    margin: -4rem;
  }

  .md\:-m-20 {
    margin: -5rem;
  }

  .md\:-m-24 {
    margin: -6rem;
  }

  .md\:-m-32 {
    margin: -8rem;
  }

  .md\:my-0 {
    margin-top: 0;
    margin-bottom: 0;
  }

  .md\:mx-0 {
    margin-left: 0;
    margin-right: 0;
  }

  .md\:my-1 {
    margin-top: 0.25rem;
    margin-bottom: 0.25rem;
  }

  .md\:mx-1 {
    margin-left: 0.25rem;
    margin-right: 0.25rem;
  }

  .md\:my-2 {
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
  }

  .md\:mx-2 {
    margin-left: 0.5rem;
    margin-right: 0.5rem;
  }

  .md\:my-3 {
    margin-top: 0.75rem;
    margin-bottom: 0.75rem;
  }

  .md\:mx-3 {
    margin-left: 0.75rem;
    margin-right: 0.75rem;
  }

  .md\:my-4 {
    margin-top: 1rem;
    margin-bottom: 1rem;
  }

  .md\:mx-4 {
    margin-left: 1rem;
    margin-right: 1rem;
  }

  .md\:my-5 {
    margin-top: 1.25rem;
    margin-bottom: 1.25rem;
  }

  .md\:mx-5 {
    margin-left: 1.25rem;
    margin-right: 1.25rem;
  }

  .md\:my-6 {
    margin-top: 1.5rem;
    margin-bottom: 1.5rem;
  }

  .md\:mx-6 {
    margin-left: 1.5rem;
    margin-right: 1.5rem;
  }

  .md\:my-8 {
    margin-top: 2rem;
    margin-bottom: 2rem;
  }

  .md\:mx-8 {
    margin-left: 2rem;
    margin-right: 2rem;
  }

  .md\:my-10 {
    margin-top: 2.5rem;
    margin-bottom: 2.5rem;
  }

  .md\:mx-10 {
    margin-left: 2.5rem;
    margin-right: 2.5rem;
  }

  .md\:my-12 {
    margin-top: 3rem;
    margin-bottom: 3rem;
  }

  .md\:mx-12 {
    margin-left: 3rem;
    margin-right: 3rem;
  }

  .md\:my-16 {
    margin-top: 4rem;
    margin-bottom: 4rem;
  }

  .md\:mx-16 {
    margin-left: 4rem;
    margin-right: 4rem;
  }

  .md\:my-20 {
    margin-top: 5rem;
    margin-bottom: 5rem;
  }

  .md\:mx-20 {
    margin-left: 5rem;
    margin-right: 5rem;
  }

  .md\:my-24 {
    margin-top: 6rem;
    margin-bottom: 6rem;
  }

  .md\:mx-24 {
    margin-left: 6rem;
    margin-right: 6rem;
  }

  .md\:my-32 {
    margin-top: 8rem;
    margin-bottom: 8rem;
  }

  .md\:mx-32 {
    margin-left: 8rem;
    margin-right: 8rem;
  }

  .md\:my-auto {
    margin-top: auto;
    margin-bottom: auto;
  }

  .md\:mx-auto {
    margin-left: auto;
    margin-right: auto;
  }

  .md\:my-px {
    margin-top: 1px;
    margin-bottom: 1px;
  }

  .md\:mx-px {
    margin-left: 1px;
    margin-right: 1px;
  }

  .md\:-my-px {
    margin-top: -1px;
    margin-bottom: -1px;
  }

  .md\:-mx-px {
    margin-left: -1px;
    margin-right: -1px;
  }

  .md\:-my-1 {
    margin-top: -0.25rem;
    margin-bottom: -0.25rem;
  }

  .md\:-mx-1 {
    margin-left: -0.25rem;
    margin-right: -0.25rem;
  }

  .md\:-my-2 {
    margin-top: -0.5rem;
    margin-bottom: -0.5rem;
  }

  .md\:-mx-2 {
    margin-left: -0.5rem;
    margin-right: -0.5rem;
  }

  .md\:-my-3 {
    margin-top: -0.75rem;
    margin-bottom: -0.75rem;
  }

  .md\:-mx-3 {
    margin-left: -0.75rem;
    margin-right: -0.75rem;
  }

  .md\:-my-4 {
    margin-top: -1rem;
    margin-bottom: -1rem;
  }

  .md\:-mx-4 {
    margin-left: -1rem;
    margin-right: -1rem;
  }

  .md\:-my-5 {
    margin-top: -1.25rem;
    margin-bottom: -1.25rem;
  }

  .md\:-mx-5 {
    margin-left: -1.25rem;
    margin-right: -1.25rem;
  }

  .md\:-my-6 {
    margin-top: -1.5rem;
    margin-bottom: -1.5rem;
  }

  .md\:-mx-6 {
    margin-left: -1.5rem;
    margin-right: -1.5rem;
  }

  .md\:-my-8 {
    margin-top: -2rem;
    margin-bottom: -2rem;
  }

  .md\:-mx-8 {
    margin-left: -2rem;
    margin-right: -2rem;
  }

  .md\:-my-10 {
    margin-top: -2.5rem;
    margin-bottom: -2.5rem;
  }

  .md\:-mx-10 {
    margin-left: -2.5rem;
    margin-right: -2.5rem;
  }

  .md\:-my-12 {
    margin-top: -3rem;
    margin-bottom: -3rem;
  }

  .md\:-mx-12 {
    margin-left: -3rem;
    margin-right: -3rem;
  }

  .md\:-my-16 {
    margin-top: -4rem;
    margin-bottom: -4rem;
  }

  .md\:-mx-16 {
    margin-left: -4rem;
    margin-right: -4rem;
  }

  .md\:-my-20 {
    margin-top: -5rem;
    margin-bottom: -5rem;
  }

  .md\:-mx-20 {
    margin-left: -5rem;
    margin-right: -5rem;
  }

  .md\:-my-24 {
    margin-top: -6rem;
    margin-bottom: -6rem;
  }

  .md\:-mx-24 {
    margin-left: -6rem;
    margin-right: -6rem;
  }

  .md\:-my-32 {
    margin-top: -8rem;
    margin-bottom: -8rem;
  }

  .md\:-mx-32 {
    margin-left: -8rem;
    margin-right: -8rem;
  }

  .md\:mt-0 {
    margin-top: 0;
  }

  .md\:mr-0 {
    margin-right: 0;
  }

  .md\:mb-0 {
    margin-bottom: 0;
  }

  .md\:ml-0 {
    margin-left: 0;
  }

  .md\:mt-1 {
    margin-top: 0.25rem;
  }

  .md\:mr-1 {
    margin-right: 0.25rem;
  }

  .md\:mb-1 {
    margin-bottom: 0.25rem;
  }

  .md\:ml-1 {
    margin-left: 0.25rem;
  }

  .md\:mt-2 {
    margin-top: 0.5rem;
  }

  .md\:mr-2 {
    margin-right: 0.5rem;
  }

  .md\:mb-2 {
    margin-bottom: 0.5rem;
  }

  .md\:ml-2 {
    margin-left: 0.5rem;
  }

  .md\:mt-3 {
    margin-top: 0.75rem;
  }

  .md\:mr-3 {
    margin-right: 0.75rem;
  }

  .md\:mb-3 {
    margin-bottom: 0.75rem;
  }

  .md\:ml-3 {
    margin-left: 0.75rem;
  }

  .md\:mt-4 {
    margin-top: 1rem;
  }

  .md\:mr-4 {
    margin-right: 1rem;
  }

  .md\:mb-4 {
    margin-bottom: 1rem;
  }

  .md\:ml-4 {
    margin-left: 1rem;
  }

  .md\:mt-5 {
    margin-top: 1.25rem;
  }

  .md\:mr-5 {
    margin-right: 1.25rem;
  }

  .md\:mb-5 {
    margin-bottom: 1.25rem;
  }

  .md\:ml-5 {
    margin-left: 1.25rem;
  }

  .md\:mt-6 {
    margin-top: 1.5rem;
  }

  .md\:mr-6 {
    margin-right: 1.5rem;
  }

  .md\:mb-6 {
    margin-bottom: 1.5rem;
  }

  .md\:ml-6 {
    margin-left: 1.5rem;
  }

  .md\:mt-8 {
    margin-top: 2rem;
  }

  .md\:mr-8 {
    margin-right: 2rem;
  }

  .md\:mb-8 {
    margin-bottom: 2rem;
  }

  .md\:ml-8 {
    margin-left: 2rem;
  }

  .md\:mt-10 {
    margin-top: 2.5rem;
  }

  .md\:mr-10 {
    margin-right: 2.5rem;
  }

  .md\:mb-10 {
    margin-bottom: 2.5rem;
  }

  .md\:ml-10 {
    margin-left: 2.5rem;
  }

  .md\:mt-12 {
    margin-top: 3rem;
  }

  .md\:mr-12 {
    margin-right: 3rem;
  }

  .md\:mb-12 {
    margin-bottom: 3rem;
  }

  .md\:ml-12 {
    margin-left: 3rem;
  }

  .md\:mt-16 {
    margin-top: 4rem;
  }

  .md\:mr-16 {
    margin-right: 4rem;
  }

  .md\:mb-16 {
    margin-bottom: 4rem;
  }

  .md\:ml-16 {
    margin-left: 4rem;
  }

  .md\:mt-20 {
    margin-top: 5rem;
  }

  .md\:mr-20 {
    margin-right: 5rem;
  }

  .md\:mb-20 {
    margin-bottom: 5rem;
  }

  .md\:ml-20 {
    margin-left: 5rem;
  }

  .md\:mt-24 {
    margin-top: 6rem;
  }

  .md\:mr-24 {
    margin-right: 6rem;
  }

  .md\:mb-24 {
    margin-bottom: 6rem;
  }

  .md\:ml-24 {
    margin-left: 6rem;
  }

  .md\:mt-32 {
    margin-top: 8rem;
  }

  .md\:mr-32 {
    margin-right: 8rem;
  }

  .md\:mb-32 {
    margin-bottom: 8rem;
  }

  .md\:ml-32 {
    margin-left: 8rem;
  }

  .md\:mt-auto {
    margin-top: auto;
  }

  .md\:mr-auto {
    margin-right: auto;
  }

  .md\:mb-auto {
    margin-bottom: auto;
  }

  .md\:ml-auto {
    margin-left: auto;
  }

  .md\:mt-px {
    margin-top: 1px;
  }

  .md\:mr-px {
    margin-right: 1px;
  }

  .md\:mb-px {
    margin-bottom: 1px;
  }

  .md\:ml-px {
    margin-left: 1px;
  }

  .md\:-mt-px {
    margin-top: -1px;
  }

  .md\:-mr-px {
    margin-right: -1px;
  }

  .md\:-mb-px {
    margin-bottom: -1px;
  }

  .md\:-ml-px {
    margin-left: -1px;
  }

  .md\:-mt-1 {
    margin-top: -0.25rem;
  }

  .md\:-mr-1 {
    margin-right: -0.25rem;
  }

  .md\:-mb-1 {
    margin-bottom: -0.25rem;
  }

  .md\:-ml-1 {
    margin-left: -0.25rem;
  }

  .md\:-mt-2 {
    margin-top: -0.5rem;
  }

  .md\:-mr-2 {
    margin-right: -0.5rem;
  }

  .md\:-mb-2 {
    margin-bottom: -0.5rem;
  }

  .md\:-ml-2 {
    margin-left: -0.5rem;
  }

  .md\:-mt-3 {
    margin-top: -0.75rem;
  }

  .md\:-mr-3 {
    margin-right: -0.75rem;
  }

  .md\:-mb-3 {
    margin-bottom: -0.75rem;
  }

  .md\:-ml-3 {
    margin-left: -0.75rem;
  }

  .md\:-mt-4 {
    margin-top: -1rem;
  }

  .md\:-mr-4 {
    margin-right: -1rem;
  }

  .md\:-mb-4 {
    margin-bottom: -1rem;
  }

  .md\:-ml-4 {
    margin-left: -1rem;
  }

  .md\:-mt-5 {
    margin-top: -1.25rem;
  }

  .md\:-mr-5 {
    margin-right: -1.25rem;
  }

  .md\:-mb-5 {
    margin-bottom: -1.25rem;
  }

  .md\:-ml-5 {
    margin-left: -1.25rem;
  }

  .md\:-mt-6 {
    margin-top: -1.5rem;
  }

  .md\:-mr-6 {
    margin-right: -1.5rem;
  }

  .md\:-mb-6 {
    margin-bottom: -1.5rem;
  }

  .md\:-ml-6 {
    margin-left: -1.5rem;
  }

  .md\:-mt-8 {
    margin-top: -2rem;
  }

  .md\:-mr-8 {
    margin-right: -2rem;
  }

  .md\:-mb-8 {
    margin-bottom: -2rem;
  }

  .md\:-ml-8 {
    margin-left: -2rem;
  }

  .md\:-mt-10 {
    margin-top: -2.5rem;
  }

  .md\:-mr-10 {
    margin-right: -2.5rem;
  }

  .md\:-mb-10 {
    margin-bottom: -2.5rem;
  }

  .md\:-ml-10 {
    margin-left: -2.5rem;
  }

  .md\:-mt-12 {
    margin-top: -3rem;
  }

  .md\:-mr-12 {
    margin-right: -3rem;
  }

  .md\:-mb-12 {
    margin-bottom: -3rem;
  }

  .md\:-ml-12 {
    margin-left: -3rem;
  }

  .md\:-mt-16 {
    margin-top: -4rem;
  }

  .md\:-mr-16 {
    margin-right: -4rem;
  }

  .md\:-mb-16 {
    margin-bottom: -4rem;
  }

  .md\:-ml-16 {
    margin-left: -4rem;
  }

  .md\:-mt-20 {
    margin-top: -5rem;
  }

  .md\:-mr-20 {
    margin-right: -5rem;
  }

  .md\:-mb-20 {
    margin-bottom: -5rem;
  }

  .md\:-ml-20 {
    margin-left: -5rem;
  }

  .md\:-mt-24 {
    margin-top: -6rem;
  }

  .md\:-mr-24 {
    margin-right: -6rem;
  }

  .md\:-mb-24 {
    margin-bottom: -6rem;
  }

  .md\:-ml-24 {
    margin-left: -6rem;
  }

  .md\:-mt-32 {
    margin-top: -8rem;
  }

  .md\:-mr-32 {
    margin-right: -8rem;
  }

  .md\:-mb-32 {
    margin-bottom: -8rem;
  }

  .md\:-ml-32 {
    margin-left: -8rem;
  }

  .md\:max-h-full {
    max-height: 100%;
  }

  .md\:max-h-screen {
    max-height: 100vh;
  }

  .md\:max-w-xs {
    max-width: 20rem;
  }

  .md\:max-w-sm {
    max-width: 24rem;
  }

  .md\:max-w-md {
    max-width: 28rem;
  }

  .md\:max-w-lg {
    max-width: 32rem;
  }

  .md\:max-w-xl {
    max-width: 36rem;
  }

  .md\:max-w-2xl {
    max-width: 42rem;
  }

  .md\:max-w-3xl {
    max-width: 48rem;
  }

  .md\:max-w-4xl {
    max-width: 56rem;
  }

  .md\:max-w-5xl {
    max-width: 64rem;
  }

  .md\:max-w-6xl {
    max-width: 72rem;
  }

  .md\:max-w-full {
    max-width: 100%;
  }

  .md\:min-h-0 {
    min-height: 0;
  }

  .md\:min-h-full {
    min-height: 100%;
  }

  .md\:min-h-screen {
    min-height: 100vh;
  }

  .md\:min-w-0 {
    min-width: 0;
  }

  .md\:min-w-full {
    min-width: 100%;
  }

  .md\:object-contain {
    object-fit: contain;
  }

  .md\:object-cover {
    object-fit: cover;
  }

  .md\:object-fill {
    object-fit: fill;
  }

  .md\:object-none {
    object-fit: none;
  }

  .md\:object-scale-down {
    object-fit: scale-down;
  }

  .md\:object-bottom {
    object-position: bottom;
  }

  .md\:object-center {
    object-position: center;
  }

  .md\:object-left {
    object-position: left;
  }

  .md\:object-left-bottom {
    object-position: left bottom;
  }

  .md\:object-left-top {
    object-position: left top;
  }

  .md\:object-right {
    object-position: right;
  }

  .md\:object-right-bottom {
    object-position: right bottom;
  }

  .md\:object-right-top {
    object-position: right top;
  }

  .md\:object-top {
    object-position: top;
  }

  .md\:opacity-0 {
    opacity: 0;
  }

  .md\:opacity-25 {
    opacity: 0.25;
  }

  .md\:opacity-50 {
    opacity: 0.5;
  }

  .md\:opacity-75 {
    opacity: 0.75;
  }

  .md\:opacity-100 {
    opacity: 1;
  }

  .md\:hover\:opacity-0:hover {
    opacity: 0;
  }

  .md\:hover\:opacity-25:hover {
    opacity: 0.25;
  }

  .md\:hover\:opacity-50:hover {
    opacity: 0.5;
  }

  .md\:hover\:opacity-75:hover {
    opacity: 0.75;
  }

  .md\:hover\:opacity-100:hover {
    opacity: 1;
  }

  .md\:focus\:opacity-0:focus {
    opacity: 0;
  }

  .md\:focus\:opacity-25:focus {
    opacity: 0.25;
  }

  .md\:focus\:opacity-50:focus {
    opacity: 0.5;
  }

  .md\:focus\:opacity-75:focus {
    opacity: 0.75;
  }

  .md\:focus\:opacity-100:focus {
    opacity: 1;
  }

  .md\:outline-none {
    outline: 0;
  }

  .md\:focus\:outline-none:focus {
    outline: 0;
  }

  .md\:overflow-auto {
    overflow: auto;
  }

  .md\:overflow-hidden {
    overflow: hidden;
  }

  .md\:overflow-visible {
    overflow: visible;
  }

  .md\:overflow-scroll {
    overflow: scroll;
  }

  .md\:overflow-x-auto {
    overflow-x: auto;
  }

  .md\:overflow-y-auto {
    overflow-y: auto;
  }

  .md\:overflow-x-hidden {
    overflow-x: hidden;
  }

  .md\:overflow-y-hidden {
    overflow-y: hidden;
  }

  .md\:overflow-x-visible {
    overflow-x: visible;
  }

  .md\:overflow-y-visible {
    overflow-y: visible;
  }

  .md\:overflow-x-scroll {
    overflow-x: scroll;
  }

  .md\:overflow-y-scroll {
    overflow-y: scroll;
  }

  .md\:scrolling-touch {
    -webkit-overflow-scrolling: touch;
  }

  .md\:scrolling-auto {
    -webkit-overflow-scrolling: auto;
  }

  .md\:p-0 {
    padding: 0;
  }

  .md\:p-1 {
    padding: 0.25rem;
  }

  .md\:p-2 {
    padding: 0.5rem;
  }

  .md\:p-3 {
    padding: 0.75rem;
  }

  .md\:p-4 {
    padding: 1rem;
  }

  .md\:p-5 {
    padding: 1.25rem;
  }

  .md\:p-6 {
    padding: 1.5rem;
  }

  .md\:p-8 {
    padding: 2rem;
  }

  .md\:p-10 {
    padding: 2.5rem;
  }

  .md\:p-12 {
    padding: 3rem;
  }

  .md\:p-16 {
    padding: 4rem;
  }

  .md\:p-20 {
    padding: 5rem;
  }

  .md\:p-24 {
    padding: 6rem;
  }

  .md\:p-32 {
    padding: 8rem;
  }

  .md\:p-40 {
    padding: 10rem;
  }

  .md\:p-48 {
    padding: 12rem;
  }

  .md\:p-56 {
    padding: 14rem;
  }

  .md\:p-64 {
    padding: 16rem;
  }

  .md\:p-px {
    padding: 1px;
  }

  .md\:py-0 {
    padding-top: 0;
    padding-bottom: 0;
  }

  .md\:px-0 {
    padding-left: 0;
    padding-right: 0;
  }

  .md\:py-1 {
    padding-top: 0.25rem;
    padding-bottom: 0.25rem;
  }

  .md\:px-1 {
    padding-left: 0.25rem;
    padding-right: 0.25rem;
  }

  .md\:py-2 {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
  }

  .md\:px-2 {
    padding-left: 0.5rem;
    padding-right: 0.5rem;
  }

  .md\:py-3 {
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
  }

  .md\:px-3 {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }

  .md\:py-4 {
    padding-top: 1rem;
    padding-bottom: 1rem;
  }

  .md\:px-4 {
    padding-left: 1rem;
    padding-right: 1rem;
  }

  .md\:py-5 {
    padding-top: 1.25rem;
    padding-bottom: 1.25rem;
  }

  .md\:px-5 {
    padding-left: 1.25rem;
    padding-right: 1.25rem;
  }

  .md\:py-6 {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
  }

  .md\:px-6 {
    padding-left: 1.5rem;
    padding-right: 1.5rem;
  }

  .md\:py-8 {
    padding-top: 2rem;
    padding-bottom: 2rem;
  }

  .md\:px-8 {
    padding-left: 2rem;
    padding-right: 2rem;
  }

  .md\:py-10 {
    padding-top: 2.5rem;
    padding-bottom: 2.5rem;
  }

  .md\:px-10 {
    padding-left: 2.5rem;
    padding-right: 2.5rem;
  }

  .md\:py-12 {
    padding-top: 3rem;
    padding-bottom: 3rem;
  }

  .md\:px-12 {
    padding-left: 3rem;
    padding-right: 3rem;
  }

  .md\:py-16 {
    padding-top: 4rem;
    padding-bottom: 4rem;
  }

  .md\:px-16 {
    padding-left: 4rem;
    padding-right: 4rem;
  }

  .md\:py-20 {
    padding-top: 5rem;
    padding-bottom: 5rem;
  }

  .md\:px-20 {
    padding-left: 5rem;
    padding-right: 5rem;
  }

  .md\:py-24 {
    padding-top: 6rem;
    padding-bottom: 6rem;
  }

  .md\:px-24 {
    padding-left: 6rem;
    padding-right: 6rem;
  }

  .md\:py-32 {
    padding-top: 8rem;
    padding-bottom: 8rem;
  }

  .md\:px-32 {
    padding-left: 8rem;
    padding-right: 8rem;
  }

  .md\:py-40 {
    padding-top: 10rem;
    padding-bottom: 10rem;
  }

  .md\:px-40 {
    padding-left: 10rem;
    padding-right: 10rem;
  }

  .md\:py-48 {
    padding-top: 12rem;
    padding-bottom: 12rem;
  }

  .md\:px-48 {
    padding-left: 12rem;
    padding-right: 12rem;
  }

  .md\:py-56 {
    padding-top: 14rem;
    padding-bottom: 14rem;
  }

  .md\:px-56 {
    padding-left: 14rem;
    padding-right: 14rem;
  }

  .md\:py-64 {
    padding-top: 16rem;
    padding-bottom: 16rem;
  }

  .md\:px-64 {
    padding-left: 16rem;
    padding-right: 16rem;
  }

  .md\:py-px {
    padding-top: 1px;
    padding-bottom: 1px;
  }

  .md\:px-px {
    padding-left: 1px;
    padding-right: 1px;
  }

  .md\:pt-0 {
    padding-top: 0;
  }

  .md\:pr-0 {
    padding-right: 0;
  }

  .md\:pb-0 {
    padding-bottom: 0;
  }

  .md\:pl-0 {
    padding-left: 0;
  }

  .md\:pt-1 {
    padding-top: 0.25rem;
  }

  .md\:pr-1 {
    padding-right: 0.25rem;
  }

  .md\:pb-1 {
    padding-bottom: 0.25rem;
  }

  .md\:pl-1 {
    padding-left: 0.25rem;
  }

  .md\:pt-2 {
    padding-top: 0.5rem;
  }

  .md\:pr-2 {
    padding-right: 0.5rem;
  }

  .md\:pb-2 {
    padding-bottom: 0.5rem;
  }

  .md\:pl-2 {
    padding-left: 0.5rem;
  }

  .md\:pt-3 {
    padding-top: 0.75rem;
  }

  .md\:pr-3 {
    padding-right: 0.75rem;
  }

  .md\:pb-3 {
    padding-bottom: 0.75rem;
  }

  .md\:pl-3 {
    padding-left: 0.75rem;
  }

  .md\:pt-4 {
    padding-top: 1rem;
  }

  .md\:pr-4 {
    padding-right: 1rem;
  }

  .md\:pb-4 {
    padding-bottom: 1rem;
  }

  .md\:pl-4 {
    padding-left: 1rem;
  }

  .md\:pt-5 {
    padding-top: 1.25rem;
  }

  .md\:pr-5 {
    padding-right: 1.25rem;
  }

  .md\:pb-5 {
    padding-bottom: 1.25rem;
  }

  .md\:pl-5 {
    padding-left: 1.25rem;
  }

  .md\:pt-6 {
    padding-top: 1.5rem;
  }

  .md\:pr-6 {
    padding-right: 1.5rem;
  }

  .md\:pb-6 {
    padding-bottom: 1.5rem;
  }

  .md\:pl-6 {
    padding-left: 1.5rem;
  }

  .md\:pt-8 {
    padding-top: 2rem;
  }

  .md\:pr-8 {
    padding-right: 2rem;
  }

  .md\:pb-8 {
    padding-bottom: 2rem;
  }

  .md\:pl-8 {
    padding-left: 2rem;
  }

  .md\:pt-10 {
    padding-top: 2.5rem;
  }

  .md\:pr-10 {
    padding-right: 2.5rem;
  }

  .md\:pb-10 {
    padding-bottom: 2.5rem;
  }

  .md\:pl-10 {
    padding-left: 2.5rem;
  }

  .md\:pt-12 {
    padding-top: 3rem;
  }

  .md\:pr-12 {
    padding-right: 3rem;
  }

  .md\:pb-12 {
    padding-bottom: 3rem;
  }

  .md\:pl-12 {
    padding-left: 3rem;
  }

  .md\:pt-16 {
    padding-top: 4rem;
  }

  .md\:pr-16 {
    padding-right: 4rem;
  }

  .md\:pb-16 {
    padding-bottom: 4rem;
  }

  .md\:pl-16 {
    padding-left: 4rem;
  }

  .md\:pt-20 {
    padding-top: 5rem;
  }

  .md\:pr-20 {
    padding-right: 5rem;
  }

  .md\:pb-20 {
    padding-bottom: 5rem;
  }

  .md\:pl-20 {
    padding-left: 5rem;
  }

  .md\:pt-24 {
    padding-top: 6rem;
  }

  .md\:pr-24 {
    padding-right: 6rem;
  }

  .md\:pb-24 {
    padding-bottom: 6rem;
  }

  .md\:pl-24 {
    padding-left: 6rem;
  }

  .md\:pt-32 {
    padding-top: 8rem;
  }

  .md\:pr-32 {
    padding-right: 8rem;
  }

  .md\:pb-32 {
    padding-bottom: 8rem;
  }

  .md\:pl-32 {
    padding-left: 8rem;
  }

  .md\:pt-40 {
    padding-top: 10rem;
  }

  .md\:pr-40 {
    padding-right: 10rem;
  }

  .md\:pb-40 {
    padding-bottom: 10rem;
  }

  .md\:pl-40 {
    padding-left: 10rem;
  }

  .md\:pt-48 {
    padding-top: 12rem;
  }

  .md\:pr-48 {
    padding-right: 12rem;
  }

  .md\:pb-48 {
    padding-bottom: 12rem;
  }

  .md\:pl-48 {
    padding-left: 12rem;
  }

  .md\:pt-56 {
    padding-top: 14rem;
  }

  .md\:pr-56 {
    padding-right: 14rem;
  }

  .md\:pb-56 {
    padding-bottom: 14rem;
  }

  .md\:pl-56 {
    padding-left: 14rem;
  }

  .md\:pt-64 {
    padding-top: 16rem;
  }

  .md\:pr-64 {
    padding-right: 16rem;
  }

  .md\:pb-64 {
    padding-bottom: 16rem;
  }

  .md\:pl-64 {
    padding-left: 16rem;
  }

  .md\:pt-px {
    padding-top: 1px;
  }

  .md\:pr-px {
    padding-right: 1px;
  }

  .md\:pb-px {
    padding-bottom: 1px;
  }

  .md\:pl-px {
    padding-left: 1px;
  }

  .md\:placeholder-grey-darkest::placeholder {
    color: #3d4852;
  }

  .md\:placeholder-grey-darker::placeholder {
    color: #606f7b;
  }

  .md\:placeholder-grey-dark::placeholder {
    color: #8795a1;
  }

  .md\:placeholder-grey::placeholder {
    color: #b8c2cc;
  }

  .md\:placeholder-grey-light::placeholder {
    color: #dae1e7;
  }

  .md\:placeholder-grey-lighter::placeholder {
    color: #f1f5f8;
  }

  .md\:placeholder-grey-lightest::placeholder {
    color: #f8fafc;
  }

  .md\:placeholder-grey-mid-light::placeholder {
    color: #f3f3f4;
  }

  .md\:placeholder-white-lightest::placeholder {
    color: #f4f4f4;
  }

  .md\:placeholder-red-darkest::placeholder {
    color: #3b0d0c;
  }

  .md\:placeholder-red-darker::placeholder {
    color: #621b18;
  }

  .md\:placeholder-red-dark::placeholder {
    color: #cc1f1a;
  }

  .md\:placeholder-red-light::placeholder {
    color: #ef5753;
  }

  .md\:placeholder-red-lighter::placeholder {
    color: #f9acaa;
  }

  .md\:placeholder-red-lightest::placeholder {
    color: #fcebea;
  }

  .md\:placeholder-orange-darkest::placeholder {
    color: #462a16;
  }

  .md\:placeholder-orange-darker::placeholder {
    color: #613b1f;
  }

  .md\:placeholder-orange-dark::placeholder {
    color: #de751f;
  }

  .md\:placeholder-orange-light::placeholder {
    color: #faad63;
  }

  .md\:placeholder-orange-lighter::placeholder {
    color: #fcd9b6;
  }

  .md\:placeholder-orange-lightest::placeholder {
    color: #fff5eb;
  }

  .md\:placeholder-yellow-darkest::placeholder {
    color: #453411;
  }

  .md\:placeholder-yellow-darker::placeholder {
    color: #684f1d;
  }

  .md\:placeholder-yellow-dark::placeholder {
    color: #f2d024;
  }

  .md\:placeholder-yellow-light::placeholder {
    color: #fff382;
  }

  .md\:placeholder-yellow-lighter::placeholder {
    color: #fff9c2;
  }

  .md\:placeholder-yellow-lightest::placeholder {
    color: #fcfbeb;
  }

  .md\:placeholder-green-darkest::placeholder {
    color: #0f2f21;
  }

  .md\:placeholder-green-darker::placeholder {
    color: #1a4731;
  }

  .md\:placeholder-green-dark::placeholder {
    color: #1f9d55;
  }

  .md\:placeholder-green-light::placeholder {
    color: #51d88a;
  }

  .md\:placeholder-green-lighter::placeholder {
    color: #a2f5bf;
  }

  .md\:placeholder-green-lightest::placeholder {
    color: #e3fcec;
  }

  .md\:placeholder-teal-darkest::placeholder {
    color: #0d3331;
  }

  .md\:placeholder-teal-darker::placeholder {
    color: #20504f;
  }

  .md\:placeholder-teal-dark::placeholder {
    color: #38a89d;
  }

  .md\:placeholder-teal-light::placeholder {
    color: #64d5ca;
  }

  .md\:placeholder-teal-lighter::placeholder {
    color: #a0f0ed;
  }

  .md\:placeholder-teal-lightest::placeholder {
    color: #e8fffe;
  }

  .md\:placeholder-blue-darkest::placeholder {
    color: #12283a;
  }

  .md\:placeholder-blue-darker::placeholder {
    color: #1c3d5a;
  }

  .md\:placeholder-blue-dark::placeholder {
    color: #2779bd;
  }

  .md\:placeholder-blue-light::placeholder {
    color: #6cb2eb;
  }

  .md\:placeholder-blue-lighter::placeholder {
    color: #bcdefa;
  }

  .md\:placeholder-blue-lightest::placeholder {
    color: #eff8ff;
  }

  .md\:placeholder-indigo-darkest::placeholder {
    color: #191e38;
  }

  .md\:placeholder-indigo-darker::placeholder {
    color: #2f365f;
  }

  .md\:placeholder-indigo-dark::placeholder {
    color: #5661b3;
  }

  .md\:placeholder-indigo-light::placeholder {
    color: #7886d7;
  }

  .md\:placeholder-indigo-lighter::placeholder {
    color: #b2b7ff;
  }

  .md\:placeholder-indigo-lightest::placeholder {
    color: #e6e8ff;
  }

  .md\:placeholder-purple-darkest::placeholder {
    color: #21183c;
  }

  .md\:placeholder-purple-darker::placeholder {
    color: #382b5f;
  }

  .md\:placeholder-purple-dark::placeholder {
    color: #794acf;
  }

  .md\:placeholder-purple-light::placeholder {
    color: #a779e9;
  }

  .md\:placeholder-purple-lighter::placeholder {
    color: #d6bbfc;
  }

  .md\:placeholder-purple-lightest::placeholder {
    color: #f3ebff;
  }

  .md\:placeholder-pink-darkest::placeholder {
    color: #451225;
  }

  .md\:placeholder-pink-darker::placeholder {
    color: #6f213f;
  }

  .md\:placeholder-pink-dark::placeholder {
    color: #eb5286;
  }

  .md\:placeholder-pink-light::placeholder {
    color: #fa7ea8;
  }

  .md\:placeholder-pink-lighter::placeholder {
    color: #ffbbca;
  }

  .md\:placeholder-pink-lightest::placeholder {
    color: #ffebef;
  }

  .md\:placeholder-nav::placeholder {
    color: #3F495E;
  }

  .md\:placeholder-side-nav::placeholder {
    color: #ECF0F1;
  }

  .md\:placeholder-nav-item::placeholder {
    color: #626b7a;
  }

  .md\:placeholder-light-border::placeholder {
    color: #dfe4e6;
  }

  .md\:placeholder-white-medium::placeholder {
    color: #FAFAFA;
  }

  .md\:placeholder-white-medium-dark::placeholder {
    color: #E5E9EB;
  }

  .md\:placeholder-red-vibrant::placeholder {
    color: #e46050;
  }

  .md\:placeholder-red-vibrant-dark::placeholder {
    color: #d64230;
  }

  .md\:placeholder-primary::placeholder {
    color: #51BE99;
  }

  .md\:placeholder-primary-dark::placeholder {
    color: #0e5f43;
  }

  .md\:placeholder-warning::placeholder {
    color: #f4ab43;
  }

  .md\:placeholder-warning-dark::placeholder {
    color: #c37c16;
  }

  .md\:placeholder-black-dark::placeholder {
    color: #272634;
  }

  .md\:placeholder-black-darkest::placeholder {
    color: #141418;
  }

  .md\:placeholder-info::placeholder {
    color: #52bcdc;
  }

  .md\:placeholder-info-dark::placeholder {
    color: #2cadd4;
  }

  .md\:placeholder-success::placeholder {
    color: #72b159;
  }

  .md\:placeholder-success-dark::placeholder {
    color: #5D9547;
  }

  .md\:placeholder-transparent::placeholder {
    color: transparent;
  }

  .md\:placeholder-black::placeholder {
    color: #000;
  }

  .md\:placeholder-white::placeholder {
    color: #fff;
  }

  .md\:placeholder-gray-100::placeholder {
    color: #f7fafc;
  }

  .md\:placeholder-gray-200::placeholder {
    color: #edf2f7;
  }

  .md\:placeholder-gray-300::placeholder {
    color: #e2e8f0;
  }

  .md\:placeholder-gray-400::placeholder {
    color: #cbd5e0;
  }

  .md\:placeholder-gray-500::placeholder {
    color: #a0aec0;
  }

  .md\:placeholder-gray-600::placeholder {
    color: #718096;
  }

  .md\:placeholder-gray-700::placeholder {
    color: #4a5568;
  }

  .md\:placeholder-gray-800::placeholder {
    color: #2d3748;
  }

  .md\:placeholder-gray-900::placeholder {
    color: #1a202c;
  }

  .md\:placeholder-red-100::placeholder {
    color: #fff5f5;
  }

  .md\:placeholder-red-200::placeholder {
    color: #fed7d7;
  }

  .md\:placeholder-red-300::placeholder {
    color: #feb2b2;
  }

  .md\:placeholder-red-400::placeholder {
    color: #fc8181;
  }

  .md\:placeholder-red-500::placeholder {
    color: #f56565;
  }

  .md\:placeholder-red-600::placeholder {
    color: #e53e3e;
  }

  .md\:placeholder-red-700::placeholder {
    color: #c53030;
  }

  .md\:placeholder-red-800::placeholder {
    color: #9b2c2c;
  }

  .md\:placeholder-red-900::placeholder {
    color: #742a2a;
  }

  .md\:placeholder-orange-100::placeholder {
    color: #fffaf0;
  }

  .md\:placeholder-orange-200::placeholder {
    color: #feebc8;
  }

  .md\:placeholder-orange-300::placeholder {
    color: #fbd38d;
  }

  .md\:placeholder-orange-400::placeholder {
    color: #f6ad55;
  }

  .md\:placeholder-orange-500::placeholder {
    color: #ed8936;
  }

  .md\:placeholder-orange-600::placeholder {
    color: #dd6b20;
  }

  .md\:placeholder-orange-700::placeholder {
    color: #c05621;
  }

  .md\:placeholder-orange-800::placeholder {
    color: #9c4221;
  }

  .md\:placeholder-orange-900::placeholder {
    color: #7b341e;
  }

  .md\:placeholder-yellow-100::placeholder {
    color: #fffff0;
  }

  .md\:placeholder-yellow-200::placeholder {
    color: #fefcbf;
  }

  .md\:placeholder-yellow-300::placeholder {
    color: #faf089;
  }

  .md\:placeholder-yellow-400::placeholder {
    color: #f6e05e;
  }

  .md\:placeholder-yellow-500::placeholder {
    color: #ecc94b;
  }

  .md\:placeholder-yellow-600::placeholder {
    color: #d69e2e;
  }

  .md\:placeholder-yellow-700::placeholder {
    color: #b7791f;
  }

  .md\:placeholder-yellow-800::placeholder {
    color: #975a16;
  }

  .md\:placeholder-yellow-900::placeholder {
    color: #744210;
  }

  .md\:placeholder-green-100::placeholder {
    color: #f0fff4;
  }

  .md\:placeholder-green-200::placeholder {
    color: #c6f6d5;
  }

  .md\:placeholder-green-300::placeholder {
    color: #9ae6b4;
  }

  .md\:placeholder-green-400::placeholder {
    color: #68d391;
  }

  .md\:placeholder-green-500::placeholder {
    color: #48bb78;
  }

  .md\:placeholder-green-600::placeholder {
    color: #38a169;
  }

  .md\:placeholder-green-700::placeholder {
    color: #2f855a;
  }

  .md\:placeholder-green-800::placeholder {
    color: #276749;
  }

  .md\:placeholder-green-900::placeholder {
    color: #22543d;
  }

  .md\:placeholder-teal-100::placeholder {
    color: #e6fffa;
  }

  .md\:placeholder-teal-200::placeholder {
    color: #b2f5ea;
  }

  .md\:placeholder-teal-300::placeholder {
    color: #81e6d9;
  }

  .md\:placeholder-teal-400::placeholder {
    color: #4fd1c5;
  }

  .md\:placeholder-teal-500::placeholder {
    color: #38b2ac;
  }

  .md\:placeholder-teal-600::placeholder {
    color: #319795;
  }

  .md\:placeholder-teal-700::placeholder {
    color: #2c7a7b;
  }

  .md\:placeholder-teal-800::placeholder {
    color: #285e61;
  }

  .md\:placeholder-teal-900::placeholder {
    color: #234e52;
  }

  .md\:placeholder-blue-100::placeholder {
    color: #ebf8ff;
  }

  .md\:placeholder-blue-200::placeholder {
    color: #bee3f8;
  }

  .md\:placeholder-blue-300::placeholder {
    color: #90cdf4;
  }

  .md\:placeholder-blue-400::placeholder {
    color: #63b3ed;
  }

  .md\:placeholder-blue-500::placeholder {
    color: #4299e1;
  }

  .md\:placeholder-blue-600::placeholder {
    color: #3182ce;
  }

  .md\:placeholder-blue-700::placeholder {
    color: #2b6cb0;
  }

  .md\:placeholder-blue-800::placeholder {
    color: #2c5282;
  }

  .md\:placeholder-blue-900::placeholder {
    color: #2a4365;
  }

  .md\:placeholder-indigo-100::placeholder {
    color: #ebf4ff;
  }

  .md\:placeholder-indigo-200::placeholder {
    color: #c3dafe;
  }

  .md\:placeholder-indigo-300::placeholder {
    color: #a3bffa;
  }

  .md\:placeholder-indigo-400::placeholder {
    color: #7f9cf5;
  }

  .md\:placeholder-indigo-500::placeholder {
    color: #667eea;
  }

  .md\:placeholder-indigo-600::placeholder {
    color: #5a67d8;
  }

  .md\:placeholder-indigo-700::placeholder {
    color: #4c51bf;
  }

  .md\:placeholder-indigo-800::placeholder {
    color: #434190;
  }

  .md\:placeholder-indigo-900::placeholder {
    color: #3c366b;
  }

  .md\:placeholder-purple-100::placeholder {
    color: #faf5ff;
  }

  .md\:placeholder-purple-200::placeholder {
    color: #e9d8fd;
  }

  .md\:placeholder-purple-300::placeholder {
    color: #d6bcfa;
  }

  .md\:placeholder-purple-400::placeholder {
    color: #b794f4;
  }

  .md\:placeholder-purple-500::placeholder {
    color: #9f7aea;
  }

  .md\:placeholder-purple-600::placeholder {
    color: #805ad5;
  }

  .md\:placeholder-purple-700::placeholder {
    color: #6b46c1;
  }

  .md\:placeholder-purple-800::placeholder {
    color: #553c9a;
  }

  .md\:placeholder-purple-900::placeholder {
    color: #44337a;
  }

  .md\:placeholder-pink-100::placeholder {
    color: #fff5f7;
  }

  .md\:placeholder-pink-200::placeholder {
    color: #fed7e2;
  }

  .md\:placeholder-pink-300::placeholder {
    color: #fbb6ce;
  }

  .md\:placeholder-pink-400::placeholder {
    color: #f687b3;
  }

  .md\:placeholder-pink-500::placeholder {
    color: #ed64a6;
  }

  .md\:placeholder-pink-600::placeholder {
    color: #d53f8c;
  }

  .md\:placeholder-pink-700::placeholder {
    color: #b83280;
  }

  .md\:placeholder-pink-800::placeholder {
    color: #97266d;
  }

  .md\:placeholder-pink-900::placeholder {
    color: #702459;
  }

  .md\:focus\:placeholder-grey-darkest:focus::placeholder {
    color: #3d4852;
  }

  .md\:focus\:placeholder-grey-darker:focus::placeholder {
    color: #606f7b;
  }

  .md\:focus\:placeholder-grey-dark:focus::placeholder {
    color: #8795a1;
  }

  .md\:focus\:placeholder-grey:focus::placeholder {
    color: #b8c2cc;
  }

  .md\:focus\:placeholder-grey-light:focus::placeholder {
    color: #dae1e7;
  }

  .md\:focus\:placeholder-grey-lighter:focus::placeholder {
    color: #f1f5f8;
  }

  .md\:focus\:placeholder-grey-lightest:focus::placeholder {
    color: #f8fafc;
  }

  .md\:focus\:placeholder-grey-mid-light:focus::placeholder {
    color: #f3f3f4;
  }

  .md\:focus\:placeholder-white-lightest:focus::placeholder {
    color: #f4f4f4;
  }

  .md\:focus\:placeholder-red-darkest:focus::placeholder {
    color: #3b0d0c;
  }

  .md\:focus\:placeholder-red-darker:focus::placeholder {
    color: #621b18;
  }

  .md\:focus\:placeholder-red-dark:focus::placeholder {
    color: #cc1f1a;
  }

  .md\:focus\:placeholder-red-light:focus::placeholder {
    color: #ef5753;
  }

  .md\:focus\:placeholder-red-lighter:focus::placeholder {
    color: #f9acaa;
  }

  .md\:focus\:placeholder-red-lightest:focus::placeholder {
    color: #fcebea;
  }

  .md\:focus\:placeholder-orange-darkest:focus::placeholder {
    color: #462a16;
  }

  .md\:focus\:placeholder-orange-darker:focus::placeholder {
    color: #613b1f;
  }

  .md\:focus\:placeholder-orange-dark:focus::placeholder {
    color: #de751f;
  }

  .md\:focus\:placeholder-orange-light:focus::placeholder {
    color: #faad63;
  }

  .md\:focus\:placeholder-orange-lighter:focus::placeholder {
    color: #fcd9b6;
  }

  .md\:focus\:placeholder-orange-lightest:focus::placeholder {
    color: #fff5eb;
  }

  .md\:focus\:placeholder-yellow-darkest:focus::placeholder {
    color: #453411;
  }

  .md\:focus\:placeholder-yellow-darker:focus::placeholder {
    color: #684f1d;
  }

  .md\:focus\:placeholder-yellow-dark:focus::placeholder {
    color: #f2d024;
  }

  .md\:focus\:placeholder-yellow-light:focus::placeholder {
    color: #fff382;
  }

  .md\:focus\:placeholder-yellow-lighter:focus::placeholder {
    color: #fff9c2;
  }

  .md\:focus\:placeholder-yellow-lightest:focus::placeholder {
    color: #fcfbeb;
  }

  .md\:focus\:placeholder-green-darkest:focus::placeholder {
    color: #0f2f21;
  }

  .md\:focus\:placeholder-green-darker:focus::placeholder {
    color: #1a4731;
  }

  .md\:focus\:placeholder-green-dark:focus::placeholder {
    color: #1f9d55;
  }

  .md\:focus\:placeholder-green-light:focus::placeholder {
    color: #51d88a;
  }

  .md\:focus\:placeholder-green-lighter:focus::placeholder {
    color: #a2f5bf;
  }

  .md\:focus\:placeholder-green-lightest:focus::placeholder {
    color: #e3fcec;
  }

  .md\:focus\:placeholder-teal-darkest:focus::placeholder {
    color: #0d3331;
  }

  .md\:focus\:placeholder-teal-darker:focus::placeholder {
    color: #20504f;
  }

  .md\:focus\:placeholder-teal-dark:focus::placeholder {
    color: #38a89d;
  }

  .md\:focus\:placeholder-teal-light:focus::placeholder {
    color: #64d5ca;
  }

  .md\:focus\:placeholder-teal-lighter:focus::placeholder {
    color: #a0f0ed;
  }

  .md\:focus\:placeholder-teal-lightest:focus::placeholder {
    color: #e8fffe;
  }

  .md\:focus\:placeholder-blue-darkest:focus::placeholder {
    color: #12283a;
  }

  .md\:focus\:placeholder-blue-darker:focus::placeholder {
    color: #1c3d5a;
  }

  .md\:focus\:placeholder-blue-dark:focus::placeholder {
    color: #2779bd;
  }

  .md\:focus\:placeholder-blue-light:focus::placeholder {
    color: #6cb2eb;
  }

  .md\:focus\:placeholder-blue-lighter:focus::placeholder {
    color: #bcdefa;
  }

  .md\:focus\:placeholder-blue-lightest:focus::placeholder {
    color: #eff8ff;
  }

  .md\:focus\:placeholder-indigo-darkest:focus::placeholder {
    color: #191e38;
  }

  .md\:focus\:placeholder-indigo-darker:focus::placeholder {
    color: #2f365f;
  }

  .md\:focus\:placeholder-indigo-dark:focus::placeholder {
    color: #5661b3;
  }

  .md\:focus\:placeholder-indigo-light:focus::placeholder {
    color: #7886d7;
  }

  .md\:focus\:placeholder-indigo-lighter:focus::placeholder {
    color: #b2b7ff;
  }

  .md\:focus\:placeholder-indigo-lightest:focus::placeholder {
    color: #e6e8ff;
  }

  .md\:focus\:placeholder-purple-darkest:focus::placeholder {
    color: #21183c;
  }

  .md\:focus\:placeholder-purple-darker:focus::placeholder {
    color: #382b5f;
  }

  .md\:focus\:placeholder-purple-dark:focus::placeholder {
    color: #794acf;
  }

  .md\:focus\:placeholder-purple-light:focus::placeholder {
    color: #a779e9;
  }

  .md\:focus\:placeholder-purple-lighter:focus::placeholder {
    color: #d6bbfc;
  }

  .md\:focus\:placeholder-purple-lightest:focus::placeholder {
    color: #f3ebff;
  }

  .md\:focus\:placeholder-pink-darkest:focus::placeholder {
    color: #451225;
  }

  .md\:focus\:placeholder-pink-darker:focus::placeholder {
    color: #6f213f;
  }

  .md\:focus\:placeholder-pink-dark:focus::placeholder {
    color: #eb5286;
  }

  .md\:focus\:placeholder-pink-light:focus::placeholder {
    color: #fa7ea8;
  }

  .md\:focus\:placeholder-pink-lighter:focus::placeholder {
    color: #ffbbca;
  }

  .md\:focus\:placeholder-pink-lightest:focus::placeholder {
    color: #ffebef;
  }

  .md\:focus\:placeholder-nav:focus::placeholder {
    color: #3F495E;
  }

  .md\:focus\:placeholder-side-nav:focus::placeholder {
    color: #ECF0F1;
  }

  .md\:focus\:placeholder-nav-item:focus::placeholder {
    color: #626b7a;
  }

  .md\:focus\:placeholder-light-border:focus::placeholder {
    color: #dfe4e6;
  }

  .md\:focus\:placeholder-white-medium:focus::placeholder {
    color: #FAFAFA;
  }

  .md\:focus\:placeholder-white-medium-dark:focus::placeholder {
    color: #E5E9EB;
  }

  .md\:focus\:placeholder-red-vibrant:focus::placeholder {
    color: #e46050;
  }

  .md\:focus\:placeholder-red-vibrant-dark:focus::placeholder {
    color: #d64230;
  }

  .md\:focus\:placeholder-primary:focus::placeholder {
    color: #51BE99;
  }

  .md\:focus\:placeholder-primary-dark:focus::placeholder {
    color: #0e5f43;
  }

  .md\:focus\:placeholder-warning:focus::placeholder {
    color: #f4ab43;
  }

  .md\:focus\:placeholder-warning-dark:focus::placeholder {
    color: #c37c16;
  }

  .md\:focus\:placeholder-black-dark:focus::placeholder {
    color: #272634;
  }

  .md\:focus\:placeholder-black-darkest:focus::placeholder {
    color: #141418;
  }

  .md\:focus\:placeholder-info:focus::placeholder {
    color: #52bcdc;
  }

  .md\:focus\:placeholder-info-dark:focus::placeholder {
    color: #2cadd4;
  }

  .md\:focus\:placeholder-success:focus::placeholder {
    color: #72b159;
  }

  .md\:focus\:placeholder-success-dark:focus::placeholder {
    color: #5D9547;
  }

  .md\:focus\:placeholder-transparent:focus::placeholder {
    color: transparent;
  }

  .md\:focus\:placeholder-black:focus::placeholder {
    color: #000;
  }

  .md\:focus\:placeholder-white:focus::placeholder {
    color: #fff;
  }

  .md\:focus\:placeholder-gray-100:focus::placeholder {
    color: #f7fafc;
  }

  .md\:focus\:placeholder-gray-200:focus::placeholder {
    color: #edf2f7;
  }

  .md\:focus\:placeholder-gray-300:focus::placeholder {
    color: #e2e8f0;
  }

  .md\:focus\:placeholder-gray-400:focus::placeholder {
    color: #cbd5e0;
  }

  .md\:focus\:placeholder-gray-500:focus::placeholder {
    color: #a0aec0;
  }

  .md\:focus\:placeholder-gray-600:focus::placeholder {
    color: #718096;
  }

  .md\:focus\:placeholder-gray-700:focus::placeholder {
    color: #4a5568;
  }

  .md\:focus\:placeholder-gray-800:focus::placeholder {
    color: #2d3748;
  }

  .md\:focus\:placeholder-gray-900:focus::placeholder {
    color: #1a202c;
  }

  .md\:focus\:placeholder-red-100:focus::placeholder {
    color: #fff5f5;
  }

  .md\:focus\:placeholder-red-200:focus::placeholder {
    color: #fed7d7;
  }

  .md\:focus\:placeholder-red-300:focus::placeholder {
    color: #feb2b2;
  }

  .md\:focus\:placeholder-red-400:focus::placeholder {
    color: #fc8181;
  }

  .md\:focus\:placeholder-red-500:focus::placeholder {
    color: #f56565;
  }

  .md\:focus\:placeholder-red-600:focus::placeholder {
    color: #e53e3e;
  }

  .md\:focus\:placeholder-red-700:focus::placeholder {
    color: #c53030;
  }

  .md\:focus\:placeholder-red-800:focus::placeholder {
    color: #9b2c2c;
  }

  .md\:focus\:placeholder-red-900:focus::placeholder {
    color: #742a2a;
  }

  .md\:focus\:placeholder-orange-100:focus::placeholder {
    color: #fffaf0;
  }

  .md\:focus\:placeholder-orange-200:focus::placeholder {
    color: #feebc8;
  }

  .md\:focus\:placeholder-orange-300:focus::placeholder {
    color: #fbd38d;
  }

  .md\:focus\:placeholder-orange-400:focus::placeholder {
    color: #f6ad55;
  }

  .md\:focus\:placeholder-orange-500:focus::placeholder {
    color: #ed8936;
  }

  .md\:focus\:placeholder-orange-600:focus::placeholder {
    color: #dd6b20;
  }

  .md\:focus\:placeholder-orange-700:focus::placeholder {
    color: #c05621;
  }

  .md\:focus\:placeholder-orange-800:focus::placeholder {
    color: #9c4221;
  }

  .md\:focus\:placeholder-orange-900:focus::placeholder {
    color: #7b341e;
  }

  .md\:focus\:placeholder-yellow-100:focus::placeholder {
    color: #fffff0;
  }

  .md\:focus\:placeholder-yellow-200:focus::placeholder {
    color: #fefcbf;
  }

  .md\:focus\:placeholder-yellow-300:focus::placeholder {
    color: #faf089;
  }

  .md\:focus\:placeholder-yellow-400:focus::placeholder {
    color: #f6e05e;
  }

  .md\:focus\:placeholder-yellow-500:focus::placeholder {
    color: #ecc94b;
  }

  .md\:focus\:placeholder-yellow-600:focus::placeholder {
    color: #d69e2e;
  }

  .md\:focus\:placeholder-yellow-700:focus::placeholder {
    color: #b7791f;
  }

  .md\:focus\:placeholder-yellow-800:focus::placeholder {
    color: #975a16;
  }

  .md\:focus\:placeholder-yellow-900:focus::placeholder {
    color: #744210;
  }

  .md\:focus\:placeholder-green-100:focus::placeholder {
    color: #f0fff4;
  }

  .md\:focus\:placeholder-green-200:focus::placeholder {
    color: #c6f6d5;
  }

  .md\:focus\:placeholder-green-300:focus::placeholder {
    color: #9ae6b4;
  }

  .md\:focus\:placeholder-green-400:focus::placeholder {
    color: #68d391;
  }

  .md\:focus\:placeholder-green-500:focus::placeholder {
    color: #48bb78;
  }

  .md\:focus\:placeholder-green-600:focus::placeholder {
    color: #38a169;
  }

  .md\:focus\:placeholder-green-700:focus::placeholder {
    color: #2f855a;
  }

  .md\:focus\:placeholder-green-800:focus::placeholder {
    color: #276749;
  }

  .md\:focus\:placeholder-green-900:focus::placeholder {
    color: #22543d;
  }

  .md\:focus\:placeholder-teal-100:focus::placeholder {
    color: #e6fffa;
  }

  .md\:focus\:placeholder-teal-200:focus::placeholder {
    color: #b2f5ea;
  }

  .md\:focus\:placeholder-teal-300:focus::placeholder {
    color: #81e6d9;
  }

  .md\:focus\:placeholder-teal-400:focus::placeholder {
    color: #4fd1c5;
  }

  .md\:focus\:placeholder-teal-500:focus::placeholder {
    color: #38b2ac;
  }

  .md\:focus\:placeholder-teal-600:focus::placeholder {
    color: #319795;
  }

  .md\:focus\:placeholder-teal-700:focus::placeholder {
    color: #2c7a7b;
  }

  .md\:focus\:placeholder-teal-800:focus::placeholder {
    color: #285e61;
  }

  .md\:focus\:placeholder-teal-900:focus::placeholder {
    color: #234e52;
  }

  .md\:focus\:placeholder-blue-100:focus::placeholder {
    color: #ebf8ff;
  }

  .md\:focus\:placeholder-blue-200:focus::placeholder {
    color: #bee3f8;
  }

  .md\:focus\:placeholder-blue-300:focus::placeholder {
    color: #90cdf4;
  }

  .md\:focus\:placeholder-blue-400:focus::placeholder {
    color: #63b3ed;
  }

  .md\:focus\:placeholder-blue-500:focus::placeholder {
    color: #4299e1;
  }

  .md\:focus\:placeholder-blue-600:focus::placeholder {
    color: #3182ce;
  }

  .md\:focus\:placeholder-blue-700:focus::placeholder {
    color: #2b6cb0;
  }

  .md\:focus\:placeholder-blue-800:focus::placeholder {
    color: #2c5282;
  }

  .md\:focus\:placeholder-blue-900:focus::placeholder {
    color: #2a4365;
  }

  .md\:focus\:placeholder-indigo-100:focus::placeholder {
    color: #ebf4ff;
  }

  .md\:focus\:placeholder-indigo-200:focus::placeholder {
    color: #c3dafe;
  }

  .md\:focus\:placeholder-indigo-300:focus::placeholder {
    color: #a3bffa;
  }

  .md\:focus\:placeholder-indigo-400:focus::placeholder {
    color: #7f9cf5;
  }

  .md\:focus\:placeholder-indigo-500:focus::placeholder {
    color: #667eea;
  }

  .md\:focus\:placeholder-indigo-600:focus::placeholder {
    color: #5a67d8;
  }

  .md\:focus\:placeholder-indigo-700:focus::placeholder {
    color: #4c51bf;
  }

  .md\:focus\:placeholder-indigo-800:focus::placeholder {
    color: #434190;
  }

  .md\:focus\:placeholder-indigo-900:focus::placeholder {
    color: #3c366b;
  }

  .md\:focus\:placeholder-purple-100:focus::placeholder {
    color: #faf5ff;
  }

  .md\:focus\:placeholder-purple-200:focus::placeholder {
    color: #e9d8fd;
  }

  .md\:focus\:placeholder-purple-300:focus::placeholder {
    color: #d6bcfa;
  }

  .md\:focus\:placeholder-purple-400:focus::placeholder {
    color: #b794f4;
  }

  .md\:focus\:placeholder-purple-500:focus::placeholder {
    color: #9f7aea;
  }

  .md\:focus\:placeholder-purple-600:focus::placeholder {
    color: #805ad5;
  }

  .md\:focus\:placeholder-purple-700:focus::placeholder {
    color: #6b46c1;
  }

  .md\:focus\:placeholder-purple-800:focus::placeholder {
    color: #553c9a;
  }

  .md\:focus\:placeholder-purple-900:focus::placeholder {
    color: #44337a;
  }

  .md\:focus\:placeholder-pink-100:focus::placeholder {
    color: #fff5f7;
  }

  .md\:focus\:placeholder-pink-200:focus::placeholder {
    color: #fed7e2;
  }

  .md\:focus\:placeholder-pink-300:focus::placeholder {
    color: #fbb6ce;
  }

  .md\:focus\:placeholder-pink-400:focus::placeholder {
    color: #f687b3;
  }

  .md\:focus\:placeholder-pink-500:focus::placeholder {
    color: #ed64a6;
  }

  .md\:focus\:placeholder-pink-600:focus::placeholder {
    color: #d53f8c;
  }

  .md\:focus\:placeholder-pink-700:focus::placeholder {
    color: #b83280;
  }

  .md\:focus\:placeholder-pink-800:focus::placeholder {
    color: #97266d;
  }

  .md\:focus\:placeholder-pink-900:focus::placeholder {
    color: #702459;
  }

  .md\:pointer-events-none {
    pointer-events: none;
  }

  .md\:pointer-events-auto {
    pointer-events: auto;
  }

  .md\:static {
    position: static;
  }

  .md\:fixed {
    position: fixed;
  }

  .md\:absolute {
    position: absolute;
  }

  .md\:relative {
    position: relative;
  }

  .md\:sticky {
    position: sticky;
  }

  .md\:inset-0 {
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
  }

  .md\:inset-auto {
    top: auto;
    right: auto;
    bottom: auto;
    left: auto;
  }

  .md\:inset-y-0 {
    top: 0;
    bottom: 0;
  }

  .md\:inset-x-0 {
    right: 0;
    left: 0;
  }

  .md\:inset-y-auto {
    top: auto;
    bottom: auto;
  }

  .md\:inset-x-auto {
    right: auto;
    left: auto;
  }

  .md\:top-0 {
    top: 0;
  }

  .md\:right-0 {
    right: 0;
  }

  .md\:bottom-0 {
    bottom: 0;
  }

  .md\:left-0 {
    left: 0;
  }

  .md\:top-auto {
    top: auto;
  }

  .md\:right-auto {
    right: auto;
  }

  .md\:bottom-auto {
    bottom: auto;
  }

  .md\:left-auto {
    left: auto;
  }

  .md\:resize-none {
    resize: none;
  }

  .md\:resize-y {
    resize: vertical;
  }

  .md\:resize-x {
    resize: horizontal;
  }

  .md\:resize {
    resize: both;
  }

  .md\:shadow {
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
  }

  .md\:shadow-md {
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
  }

  .md\:shadow-lg {
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
  }

  .md\:shadow-xl {
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
  }

  .md\:shadow-2xl {
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
  }

  .md\:shadow-inner {
    box-shadow: inset 0 2px 4px 0 rgba(0, 0, 0, 0.06);
  }

  .md\:shadow-outline {
    box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.5);
  }

  .md\:shadow-none {
    box-shadow: none;
  }

  .md\:hover\:shadow:hover {
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
  }

  .md\:hover\:shadow-md:hover {
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
  }

  .md\:hover\:shadow-lg:hover {
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
  }

  .md\:hover\:shadow-xl:hover {
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
  }

  .md\:hover\:shadow-2xl:hover {
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
  }

  .md\:hover\:shadow-inner:hover {
    box-shadow: inset 0 2px 4px 0 rgba(0, 0, 0, 0.06);
  }

  .md\:hover\:shadow-outline:hover {
    box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.5);
  }

  .md\:hover\:shadow-none:hover {
    box-shadow: none;
  }

  .md\:focus\:shadow:focus {
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
  }

  .md\:focus\:shadow-md:focus {
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
  }

  .md\:focus\:shadow-lg:focus {
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
  }

  .md\:focus\:shadow-xl:focus {
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
  }

  .md\:focus\:shadow-2xl:focus {
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
  }

  .md\:focus\:shadow-inner:focus {
    box-shadow: inset 0 2px 4px 0 rgba(0, 0, 0, 0.06);
  }

  .md\:focus\:shadow-outline:focus {
    box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.5);
  }

  .md\:focus\:shadow-none:focus {
    box-shadow: none;
  }

  .md\:fill-current {
    fill: currentColor;
  }

  .md\:stroke-current {
    stroke: currentColor;
  }

  .md\:table-auto {
    table-layout: auto;
  }

  .md\:table-fixed {
    table-layout: fixed;
  }

  .md\:text-left {
    text-align: left;
  }

  .md\:text-center {
    text-align: center;
  }

  .md\:text-right {
    text-align: right;
  }

  .md\:text-justify {
    text-align: justify;
  }

  .md\:text-grey-darkest {
    color: #3d4852;
  }

  .md\:text-grey-darker {
    color: #606f7b;
  }

  .md\:text-grey-dark {
    color: #8795a1;
  }

  .md\:text-grey {
    color: #b8c2cc;
  }

  .md\:text-grey-light {
    color: #dae1e7;
  }

  .md\:text-grey-lighter {
    color: #f1f5f8;
  }

  .md\:text-grey-lightest {
    color: #f8fafc;
  }

  .md\:text-grey-mid-light {
    color: #f3f3f4;
  }

  .md\:text-white-lightest {
    color: #f4f4f4;
  }

  .md\:text-red-darkest {
    color: #3b0d0c;
  }

  .md\:text-red-darker {
    color: #621b18;
  }

  .md\:text-red-dark {
    color: #cc1f1a;
  }

  .md\:text-red-light {
    color: #ef5753;
  }

  .md\:text-red-lighter {
    color: #f9acaa;
  }

  .md\:text-red-lightest {
    color: #fcebea;
  }

  .md\:text-orange-darkest {
    color: #462a16;
  }

  .md\:text-orange-darker {
    color: #613b1f;
  }

  .md\:text-orange-dark {
    color: #de751f;
  }

  .md\:text-orange-light {
    color: #faad63;
  }

  .md\:text-orange-lighter {
    color: #fcd9b6;
  }

  .md\:text-orange-lightest {
    color: #fff5eb;
  }

  .md\:text-yellow-darkest {
    color: #453411;
  }

  .md\:text-yellow-darker {
    color: #684f1d;
  }

  .md\:text-yellow-dark {
    color: #f2d024;
  }

  .md\:text-yellow-light {
    color: #fff382;
  }

  .md\:text-yellow-lighter {
    color: #fff9c2;
  }

  .md\:text-yellow-lightest {
    color: #fcfbeb;
  }

  .md\:text-green-darkest {
    color: #0f2f21;
  }

  .md\:text-green-darker {
    color: #1a4731;
  }

  .md\:text-green-dark {
    color: #1f9d55;
  }

  .md\:text-green-light {
    color: #51d88a;
  }

  .md\:text-green-lighter {
    color: #a2f5bf;
  }

  .md\:text-green-lightest {
    color: #e3fcec;
  }

  .md\:text-teal-darkest {
    color: #0d3331;
  }

  .md\:text-teal-darker {
    color: #20504f;
  }

  .md\:text-teal-dark {
    color: #38a89d;
  }

  .md\:text-teal-light {
    color: #64d5ca;
  }

  .md\:text-teal-lighter {
    color: #a0f0ed;
  }

  .md\:text-teal-lightest {
    color: #e8fffe;
  }

  .md\:text-blue-darkest {
    color: #12283a;
  }

  .md\:text-blue-darker {
    color: #1c3d5a;
  }

  .md\:text-blue-dark {
    color: #2779bd;
  }

  .md\:text-blue-light {
    color: #6cb2eb;
  }

  .md\:text-blue-lighter {
    color: #bcdefa;
  }

  .md\:text-blue-lightest {
    color: #eff8ff;
  }

  .md\:text-indigo-darkest {
    color: #191e38;
  }

  .md\:text-indigo-darker {
    color: #2f365f;
  }

  .md\:text-indigo-dark {
    color: #5661b3;
  }

  .md\:text-indigo-light {
    color: #7886d7;
  }

  .md\:text-indigo-lighter {
    color: #b2b7ff;
  }

  .md\:text-indigo-lightest {
    color: #e6e8ff;
  }

  .md\:text-purple-darkest {
    color: #21183c;
  }

  .md\:text-purple-darker {
    color: #382b5f;
  }

  .md\:text-purple-dark {
    color: #794acf;
  }

  .md\:text-purple-light {
    color: #a779e9;
  }

  .md\:text-purple-lighter {
    color: #d6bbfc;
  }

  .md\:text-purple-lightest {
    color: #f3ebff;
  }

  .md\:text-pink-darkest {
    color: #451225;
  }

  .md\:text-pink-darker {
    color: #6f213f;
  }

  .md\:text-pink-dark {
    color: #eb5286;
  }

  .md\:text-pink-light {
    color: #fa7ea8;
  }

  .md\:text-pink-lighter {
    color: #ffbbca;
  }

  .md\:text-pink-lightest {
    color: #ffebef;
  }

  .md\:text-nav {
    color: #3F495E;
  }

  .md\:text-side-nav {
    color: #ECF0F1;
  }

  .md\:text-nav-item {
    color: #626b7a;
  }

  .md\:text-light-border {
    color: #dfe4e6;
  }

  .md\:text-white-medium {
    color: #FAFAFA;
  }

  .md\:text-white-medium-dark {
    color: #E5E9EB;
  }

  .md\:text-red-vibrant {
    color: #e46050;
  }

  .md\:text-red-vibrant-dark {
    color: #d64230;
  }

  .md\:text-primary {
    color: #51BE99;
  }

  .md\:text-primary-dark {
    color: #0e5f43;
  }

  .md\:text-warning {
    color: #f4ab43;
  }

  .md\:text-warning-dark {
    color: #c37c16;
  }

  .md\:text-black-dark {
    color: #272634;
  }

  .md\:text-black-darkest {
    color: #141418;
  }

  .md\:text-info {
    color: #52bcdc;
  }

  .md\:text-info-dark {
    color: #2cadd4;
  }

  .md\:text-success {
    color: #72b159;
  }

  .md\:text-success-dark {
    color: #5D9547;
  }

  .md\:text-transparent {
    color: transparent;
  }

  .md\:text-black {
    color: #000;
  }

  .md\:text-white {
    color: #fff;
  }

  .md\:text-gray-100 {
    color: #f7fafc;
  }

  .md\:text-gray-200 {
    color: #edf2f7;
  }

  .md\:text-gray-300 {
    color: #e2e8f0;
  }

  .md\:text-gray-400 {
    color: #cbd5e0;
  }

  .md\:text-gray-500 {
    color: #a0aec0;
  }

  .md\:text-gray-600 {
    color: #718096;
  }

  .md\:text-gray-700 {
    color: #4a5568;
  }

  .md\:text-gray-800 {
    color: #2d3748;
  }

  .md\:text-gray-900 {
    color: #1a202c;
  }

  .md\:text-red-100 {
    color: #fff5f5;
  }

  .md\:text-red-200 {
    color: #fed7d7;
  }

  .md\:text-red-300 {
    color: #feb2b2;
  }

  .md\:text-red-400 {
    color: #fc8181;
  }

  .md\:text-red-500 {
    color: #f56565;
  }

  .md\:text-red-600 {
    color: #e53e3e;
  }

  .md\:text-red-700 {
    color: #c53030;
  }

  .md\:text-red-800 {
    color: #9b2c2c;
  }

  .md\:text-red-900 {
    color: #742a2a;
  }

  .md\:text-orange-100 {
    color: #fffaf0;
  }

  .md\:text-orange-200 {
    color: #feebc8;
  }

  .md\:text-orange-300 {
    color: #fbd38d;
  }

  .md\:text-orange-400 {
    color: #f6ad55;
  }

  .md\:text-orange-500 {
    color: #ed8936;
  }

  .md\:text-orange-600 {
    color: #dd6b20;
  }

  .md\:text-orange-700 {
    color: #c05621;
  }

  .md\:text-orange-800 {
    color: #9c4221;
  }

  .md\:text-orange-900 {
    color: #7b341e;
  }

  .md\:text-yellow-100 {
    color: #fffff0;
  }

  .md\:text-yellow-200 {
    color: #fefcbf;
  }

  .md\:text-yellow-300 {
    color: #faf089;
  }

  .md\:text-yellow-400 {
    color: #f6e05e;
  }

  .md\:text-yellow-500 {
    color: #ecc94b;
  }

  .md\:text-yellow-600 {
    color: #d69e2e;
  }

  .md\:text-yellow-700 {
    color: #b7791f;
  }

  .md\:text-yellow-800 {
    color: #975a16;
  }

  .md\:text-yellow-900 {
    color: #744210;
  }

  .md\:text-green-100 {
    color: #f0fff4;
  }

  .md\:text-green-200 {
    color: #c6f6d5;
  }

  .md\:text-green-300 {
    color: #9ae6b4;
  }

  .md\:text-green-400 {
    color: #68d391;
  }

  .md\:text-green-500 {
    color: #48bb78;
  }

  .md\:text-green-600 {
    color: #38a169;
  }

  .md\:text-green-700 {
    color: #2f855a;
  }

  .md\:text-green-800 {
    color: #276749;
  }

  .md\:text-green-900 {
    color: #22543d;
  }

  .md\:text-teal-100 {
    color: #e6fffa;
  }

  .md\:text-teal-200 {
    color: #b2f5ea;
  }

  .md\:text-teal-300 {
    color: #81e6d9;
  }

  .md\:text-teal-400 {
    color: #4fd1c5;
  }

  .md\:text-teal-500 {
    color: #38b2ac;
  }

  .md\:text-teal-600 {
    color: #319795;
  }

  .md\:text-teal-700 {
    color: #2c7a7b;
  }

  .md\:text-teal-800 {
    color: #285e61;
  }

  .md\:text-teal-900 {
    color: #234e52;
  }

  .md\:text-blue-100 {
    color: #ebf8ff;
  }

  .md\:text-blue-200 {
    color: #bee3f8;
  }

  .md\:text-blue-300 {
    color: #90cdf4;
  }

  .md\:text-blue-400 {
    color: #63b3ed;
  }

  .md\:text-blue-500 {
    color: #4299e1;
  }

  .md\:text-blue-600 {
    color: #3182ce;
  }

  .md\:text-blue-700 {
    color: #2b6cb0;
  }

  .md\:text-blue-800 {
    color: #2c5282;
  }

  .md\:text-blue-900 {
    color: #2a4365;
  }

  .md\:text-indigo-100 {
    color: #ebf4ff;
  }

  .md\:text-indigo-200 {
    color: #c3dafe;
  }

  .md\:text-indigo-300 {
    color: #a3bffa;
  }

  .md\:text-indigo-400 {
    color: #7f9cf5;
  }

  .md\:text-indigo-500 {
    color: #667eea;
  }

  .md\:text-indigo-600 {
    color: #5a67d8;
  }

  .md\:text-indigo-700 {
    color: #4c51bf;
  }

  .md\:text-indigo-800 {
    color: #434190;
  }

  .md\:text-indigo-900 {
    color: #3c366b;
  }

  .md\:text-purple-100 {
    color: #faf5ff;
  }

  .md\:text-purple-200 {
    color: #e9d8fd;
  }

  .md\:text-purple-300 {
    color: #d6bcfa;
  }

  .md\:text-purple-400 {
    color: #b794f4;
  }

  .md\:text-purple-500 {
    color: #9f7aea;
  }

  .md\:text-purple-600 {
    color: #805ad5;
  }

  .md\:text-purple-700 {
    color: #6b46c1;
  }

  .md\:text-purple-800 {
    color: #553c9a;
  }

  .md\:text-purple-900 {
    color: #44337a;
  }

  .md\:text-pink-100 {
    color: #fff5f7;
  }

  .md\:text-pink-200 {
    color: #fed7e2;
  }

  .md\:text-pink-300 {
    color: #fbb6ce;
  }

  .md\:text-pink-400 {
    color: #f687b3;
  }

  .md\:text-pink-500 {
    color: #ed64a6;
  }

  .md\:text-pink-600 {
    color: #d53f8c;
  }

  .md\:text-pink-700 {
    color: #b83280;
  }

  .md\:text-pink-800 {
    color: #97266d;
  }

  .md\:text-pink-900 {
    color: #702459;
  }

  .md\:hover\:text-grey-darkest:hover {
    color: #3d4852;
  }

  .md\:hover\:text-grey-darker:hover {
    color: #606f7b;
  }

  .md\:hover\:text-grey-dark:hover {
    color: #8795a1;
  }

  .md\:hover\:text-grey:hover {
    color: #b8c2cc;
  }

  .md\:hover\:text-grey-light:hover {
    color: #dae1e7;
  }

  .md\:hover\:text-grey-lighter:hover {
    color: #f1f5f8;
  }

  .md\:hover\:text-grey-lightest:hover {
    color: #f8fafc;
  }

  .md\:hover\:text-grey-mid-light:hover {
    color: #f3f3f4;
  }

  .md\:hover\:text-white-lightest:hover {
    color: #f4f4f4;
  }

  .md\:hover\:text-red-darkest:hover {
    color: #3b0d0c;
  }

  .md\:hover\:text-red-darker:hover {
    color: #621b18;
  }

  .md\:hover\:text-red-dark:hover {
    color: #cc1f1a;
  }

  .md\:hover\:text-red-light:hover {
    color: #ef5753;
  }

  .md\:hover\:text-red-lighter:hover {
    color: #f9acaa;
  }

  .md\:hover\:text-red-lightest:hover {
    color: #fcebea;
  }

  .md\:hover\:text-orange-darkest:hover {
    color: #462a16;
  }

  .md\:hover\:text-orange-darker:hover {
    color: #613b1f;
  }

  .md\:hover\:text-orange-dark:hover {
    color: #de751f;
  }

  .md\:hover\:text-orange-light:hover {
    color: #faad63;
  }

  .md\:hover\:text-orange-lighter:hover {
    color: #fcd9b6;
  }

  .md\:hover\:text-orange-lightest:hover {
    color: #fff5eb;
  }

  .md\:hover\:text-yellow-darkest:hover {
    color: #453411;
  }

  .md\:hover\:text-yellow-darker:hover {
    color: #684f1d;
  }

  .md\:hover\:text-yellow-dark:hover {
    color: #f2d024;
  }

  .md\:hover\:text-yellow-light:hover {
    color: #fff382;
  }

  .md\:hover\:text-yellow-lighter:hover {
    color: #fff9c2;
  }

  .md\:hover\:text-yellow-lightest:hover {
    color: #fcfbeb;
  }

  .md\:hover\:text-green-darkest:hover {
    color: #0f2f21;
  }

  .md\:hover\:text-green-darker:hover {
    color: #1a4731;
  }

  .md\:hover\:text-green-dark:hover {
    color: #1f9d55;
  }

  .md\:hover\:text-green-light:hover {
    color: #51d88a;
  }

  .md\:hover\:text-green-lighter:hover {
    color: #a2f5bf;
  }

  .md\:hover\:text-green-lightest:hover {
    color: #e3fcec;
  }

  .md\:hover\:text-teal-darkest:hover {
    color: #0d3331;
  }

  .md\:hover\:text-teal-darker:hover {
    color: #20504f;
  }

  .md\:hover\:text-teal-dark:hover {
    color: #38a89d;
  }

  .md\:hover\:text-teal-light:hover {
    color: #64d5ca;
  }

  .md\:hover\:text-teal-lighter:hover {
    color: #a0f0ed;
  }

  .md\:hover\:text-teal-lightest:hover {
    color: #e8fffe;
  }

  .md\:hover\:text-blue-darkest:hover {
    color: #12283a;
  }

  .md\:hover\:text-blue-darker:hover {
    color: #1c3d5a;
  }

  .md\:hover\:text-blue-dark:hover {
    color: #2779bd;
  }

  .md\:hover\:text-blue-light:hover {
    color: #6cb2eb;
  }

  .md\:hover\:text-blue-lighter:hover {
    color: #bcdefa;
  }

  .md\:hover\:text-blue-lightest:hover {
    color: #eff8ff;
  }

  .md\:hover\:text-indigo-darkest:hover {
    color: #191e38;
  }

  .md\:hover\:text-indigo-darker:hover {
    color: #2f365f;
  }

  .md\:hover\:text-indigo-dark:hover {
    color: #5661b3;
  }

  .md\:hover\:text-indigo-light:hover {
    color: #7886d7;
  }

  .md\:hover\:text-indigo-lighter:hover {
    color: #b2b7ff;
  }

  .md\:hover\:text-indigo-lightest:hover {
    color: #e6e8ff;
  }

  .md\:hover\:text-purple-darkest:hover {
    color: #21183c;
  }

  .md\:hover\:text-purple-darker:hover {
    color: #382b5f;
  }

  .md\:hover\:text-purple-dark:hover {
    color: #794acf;
  }

  .md\:hover\:text-purple-light:hover {
    color: #a779e9;
  }

  .md\:hover\:text-purple-lighter:hover {
    color: #d6bbfc;
  }

  .md\:hover\:text-purple-lightest:hover {
    color: #f3ebff;
  }

  .md\:hover\:text-pink-darkest:hover {
    color: #451225;
  }

  .md\:hover\:text-pink-darker:hover {
    color: #6f213f;
  }

  .md\:hover\:text-pink-dark:hover {
    color: #eb5286;
  }

  .md\:hover\:text-pink-light:hover {
    color: #fa7ea8;
  }

  .md\:hover\:text-pink-lighter:hover {
    color: #ffbbca;
  }

  .md\:hover\:text-pink-lightest:hover {
    color: #ffebef;
  }

  .md\:hover\:text-nav:hover {
    color: #3F495E;
  }

  .md\:hover\:text-side-nav:hover {
    color: #ECF0F1;
  }

  .md\:hover\:text-nav-item:hover {
    color: #626b7a;
  }

  .md\:hover\:text-light-border:hover {
    color: #dfe4e6;
  }

  .md\:hover\:text-white-medium:hover {
    color: #FAFAFA;
  }

  .md\:hover\:text-white-medium-dark:hover {
    color: #E5E9EB;
  }

  .md\:hover\:text-red-vibrant:hover {
    color: #e46050;
  }

  .md\:hover\:text-red-vibrant-dark:hover {
    color: #d64230;
  }

  .md\:hover\:text-primary:hover {
    color: #51BE99;
  }

  .md\:hover\:text-primary-dark:hover {
    color: #0e5f43;
  }

  .md\:hover\:text-warning:hover {
    color: #f4ab43;
  }

  .md\:hover\:text-warning-dark:hover {
    color: #c37c16;
  }

  .md\:hover\:text-black-dark:hover {
    color: #272634;
  }

  .md\:hover\:text-black-darkest:hover {
    color: #141418;
  }

  .md\:hover\:text-info:hover {
    color: #52bcdc;
  }

  .md\:hover\:text-info-dark:hover {
    color: #2cadd4;
  }

  .md\:hover\:text-success:hover {
    color: #72b159;
  }

  .md\:hover\:text-success-dark:hover {
    color: #5D9547;
  }

  .md\:hover\:text-transparent:hover {
    color: transparent;
  }

  .md\:hover\:text-black:hover {
    color: #000;
  }

  .md\:hover\:text-white:hover {
    color: #fff;
  }

  .md\:hover\:text-gray-100:hover {
    color: #f7fafc;
  }

  .md\:hover\:text-gray-200:hover {
    color: #edf2f7;
  }

  .md\:hover\:text-gray-300:hover {
    color: #e2e8f0;
  }

  .md\:hover\:text-gray-400:hover {
    color: #cbd5e0;
  }

  .md\:hover\:text-gray-500:hover {
    color: #a0aec0;
  }

  .md\:hover\:text-gray-600:hover {
    color: #718096;
  }

  .md\:hover\:text-gray-700:hover {
    color: #4a5568;
  }

  .md\:hover\:text-gray-800:hover {
    color: #2d3748;
  }

  .md\:hover\:text-gray-900:hover {
    color: #1a202c;
  }

  .md\:hover\:text-red-100:hover {
    color: #fff5f5;
  }

  .md\:hover\:text-red-200:hover {
    color: #fed7d7;
  }

  .md\:hover\:text-red-300:hover {
    color: #feb2b2;
  }

  .md\:hover\:text-red-400:hover {
    color: #fc8181;
  }

  .md\:hover\:text-red-500:hover {
    color: #f56565;
  }

  .md\:hover\:text-red-600:hover {
    color: #e53e3e;
  }

  .md\:hover\:text-red-700:hover {
    color: #c53030;
  }

  .md\:hover\:text-red-800:hover {
    color: #9b2c2c;
  }

  .md\:hover\:text-red-900:hover {
    color: #742a2a;
  }

  .md\:hover\:text-orange-100:hover {
    color: #fffaf0;
  }

  .md\:hover\:text-orange-200:hover {
    color: #feebc8;
  }

  .md\:hover\:text-orange-300:hover {
    color: #fbd38d;
  }

  .md\:hover\:text-orange-400:hover {
    color: #f6ad55;
  }

  .md\:hover\:text-orange-500:hover {
    color: #ed8936;
  }

  .md\:hover\:text-orange-600:hover {
    color: #dd6b20;
  }

  .md\:hover\:text-orange-700:hover {
    color: #c05621;
  }

  .md\:hover\:text-orange-800:hover {
    color: #9c4221;
  }

  .md\:hover\:text-orange-900:hover {
    color: #7b341e;
  }

  .md\:hover\:text-yellow-100:hover {
    color: #fffff0;
  }

  .md\:hover\:text-yellow-200:hover {
    color: #fefcbf;
  }

  .md\:hover\:text-yellow-300:hover {
    color: #faf089;
  }

  .md\:hover\:text-yellow-400:hover {
    color: #f6e05e;
  }

  .md\:hover\:text-yellow-500:hover {
    color: #ecc94b;
  }

  .md\:hover\:text-yellow-600:hover {
    color: #d69e2e;
  }

  .md\:hover\:text-yellow-700:hover {
    color: #b7791f;
  }

  .md\:hover\:text-yellow-800:hover {
    color: #975a16;
  }

  .md\:hover\:text-yellow-900:hover {
    color: #744210;
  }

  .md\:hover\:text-green-100:hover {
    color: #f0fff4;
  }

  .md\:hover\:text-green-200:hover {
    color: #c6f6d5;
  }

  .md\:hover\:text-green-300:hover {
    color: #9ae6b4;
  }

  .md\:hover\:text-green-400:hover {
    color: #68d391;
  }

  .md\:hover\:text-green-500:hover {
    color: #48bb78;
  }

  .md\:hover\:text-green-600:hover {
    color: #38a169;
  }

  .md\:hover\:text-green-700:hover {
    color: #2f855a;
  }

  .md\:hover\:text-green-800:hover {
    color: #276749;
  }

  .md\:hover\:text-green-900:hover {
    color: #22543d;
  }

  .md\:hover\:text-teal-100:hover {
    color: #e6fffa;
  }

  .md\:hover\:text-teal-200:hover {
    color: #b2f5ea;
  }

  .md\:hover\:text-teal-300:hover {
    color: #81e6d9;
  }

  .md\:hover\:text-teal-400:hover {
    color: #4fd1c5;
  }

  .md\:hover\:text-teal-500:hover {
    color: #38b2ac;
  }

  .md\:hover\:text-teal-600:hover {
    color: #319795;
  }

  .md\:hover\:text-teal-700:hover {
    color: #2c7a7b;
  }

  .md\:hover\:text-teal-800:hover {
    color: #285e61;
  }

  .md\:hover\:text-teal-900:hover {
    color: #234e52;
  }

  .md\:hover\:text-blue-100:hover {
    color: #ebf8ff;
  }

  .md\:hover\:text-blue-200:hover {
    color: #bee3f8;
  }

  .md\:hover\:text-blue-300:hover {
    color: #90cdf4;
  }

  .md\:hover\:text-blue-400:hover {
    color: #63b3ed;
  }

  .md\:hover\:text-blue-500:hover {
    color: #4299e1;
  }

  .md\:hover\:text-blue-600:hover {
    color: #3182ce;
  }

  .md\:hover\:text-blue-700:hover {
    color: #2b6cb0;
  }

  .md\:hover\:text-blue-800:hover {
    color: #2c5282;
  }

  .md\:hover\:text-blue-900:hover {
    color: #2a4365;
  }

  .md\:hover\:text-indigo-100:hover {
    color: #ebf4ff;
  }

  .md\:hover\:text-indigo-200:hover {
    color: #c3dafe;
  }

  .md\:hover\:text-indigo-300:hover {
    color: #a3bffa;
  }

  .md\:hover\:text-indigo-400:hover {
    color: #7f9cf5;
  }

  .md\:hover\:text-indigo-500:hover {
    color: #667eea;
  }

  .md\:hover\:text-indigo-600:hover {
    color: #5a67d8;
  }

  .md\:hover\:text-indigo-700:hover {
    color: #4c51bf;
  }

  .md\:hover\:text-indigo-800:hover {
    color: #434190;
  }

  .md\:hover\:text-indigo-900:hover {
    color: #3c366b;
  }

  .md\:hover\:text-purple-100:hover {
    color: #faf5ff;
  }

  .md\:hover\:text-purple-200:hover {
    color: #e9d8fd;
  }

  .md\:hover\:text-purple-300:hover {
    color: #d6bcfa;
  }

  .md\:hover\:text-purple-400:hover {
    color: #b794f4;
  }

  .md\:hover\:text-purple-500:hover {
    color: #9f7aea;
  }

  .md\:hover\:text-purple-600:hover {
    color: #805ad5;
  }

  .md\:hover\:text-purple-700:hover {
    color: #6b46c1;
  }

  .md\:hover\:text-purple-800:hover {
    color: #553c9a;
  }

  .md\:hover\:text-purple-900:hover {
    color: #44337a;
  }

  .md\:hover\:text-pink-100:hover {
    color: #fff5f7;
  }

  .md\:hover\:text-pink-200:hover {
    color: #fed7e2;
  }

  .md\:hover\:text-pink-300:hover {
    color: #fbb6ce;
  }

  .md\:hover\:text-pink-400:hover {
    color: #f687b3;
  }

  .md\:hover\:text-pink-500:hover {
    color: #ed64a6;
  }

  .md\:hover\:text-pink-600:hover {
    color: #d53f8c;
  }

  .md\:hover\:text-pink-700:hover {
    color: #b83280;
  }

  .md\:hover\:text-pink-800:hover {
    color: #97266d;
  }

  .md\:hover\:text-pink-900:hover {
    color: #702459;
  }

  .md\:focus\:text-grey-darkest:focus {
    color: #3d4852;
  }

  .md\:focus\:text-grey-darker:focus {
    color: #606f7b;
  }

  .md\:focus\:text-grey-dark:focus {
    color: #8795a1;
  }

  .md\:focus\:text-grey:focus {
    color: #b8c2cc;
  }

  .md\:focus\:text-grey-light:focus {
    color: #dae1e7;
  }

  .md\:focus\:text-grey-lighter:focus {
    color: #f1f5f8;
  }

  .md\:focus\:text-grey-lightest:focus {
    color: #f8fafc;
  }

  .md\:focus\:text-grey-mid-light:focus {
    color: #f3f3f4;
  }

  .md\:focus\:text-white-lightest:focus {
    color: #f4f4f4;
  }

  .md\:focus\:text-red-darkest:focus {
    color: #3b0d0c;
  }

  .md\:focus\:text-red-darker:focus {
    color: #621b18;
  }

  .md\:focus\:text-red-dark:focus {
    color: #cc1f1a;
  }

  .md\:focus\:text-red-light:focus {
    color: #ef5753;
  }

  .md\:focus\:text-red-lighter:focus {
    color: #f9acaa;
  }

  .md\:focus\:text-red-lightest:focus {
    color: #fcebea;
  }

  .md\:focus\:text-orange-darkest:focus {
    color: #462a16;
  }

  .md\:focus\:text-orange-darker:focus {
    color: #613b1f;
  }

  .md\:focus\:text-orange-dark:focus {
    color: #de751f;
  }

  .md\:focus\:text-orange-light:focus {
    color: #faad63;
  }

  .md\:focus\:text-orange-lighter:focus {
    color: #fcd9b6;
  }

  .md\:focus\:text-orange-lightest:focus {
    color: #fff5eb;
  }

  .md\:focus\:text-yellow-darkest:focus {
    color: #453411;
  }

  .md\:focus\:text-yellow-darker:focus {
    color: #684f1d;
  }

  .md\:focus\:text-yellow-dark:focus {
    color: #f2d024;
  }

  .md\:focus\:text-yellow-light:focus {
    color: #fff382;
  }

  .md\:focus\:text-yellow-lighter:focus {
    color: #fff9c2;
  }

  .md\:focus\:text-yellow-lightest:focus {
    color: #fcfbeb;
  }

  .md\:focus\:text-green-darkest:focus {
    color: #0f2f21;
  }

  .md\:focus\:text-green-darker:focus {
    color: #1a4731;
  }

  .md\:focus\:text-green-dark:focus {
    color: #1f9d55;
  }

  .md\:focus\:text-green-light:focus {
    color: #51d88a;
  }

  .md\:focus\:text-green-lighter:focus {
    color: #a2f5bf;
  }

  .md\:focus\:text-green-lightest:focus {
    color: #e3fcec;
  }

  .md\:focus\:text-teal-darkest:focus {
    color: #0d3331;
  }

  .md\:focus\:text-teal-darker:focus {
    color: #20504f;
  }

  .md\:focus\:text-teal-dark:focus {
    color: #38a89d;
  }

  .md\:focus\:text-teal-light:focus {
    color: #64d5ca;
  }

  .md\:focus\:text-teal-lighter:focus {
    color: #a0f0ed;
  }

  .md\:focus\:text-teal-lightest:focus {
    color: #e8fffe;
  }

  .md\:focus\:text-blue-darkest:focus {
    color: #12283a;
  }

  .md\:focus\:text-blue-darker:focus {
    color: #1c3d5a;
  }

  .md\:focus\:text-blue-dark:focus {
    color: #2779bd;
  }

  .md\:focus\:text-blue-light:focus {
    color: #6cb2eb;
  }

  .md\:focus\:text-blue-lighter:focus {
    color: #bcdefa;
  }

  .md\:focus\:text-blue-lightest:focus {
    color: #eff8ff;
  }

  .md\:focus\:text-indigo-darkest:focus {
    color: #191e38;
  }

  .md\:focus\:text-indigo-darker:focus {
    color: #2f365f;
  }

  .md\:focus\:text-indigo-dark:focus {
    color: #5661b3;
  }

  .md\:focus\:text-indigo-light:focus {
    color: #7886d7;
  }

  .md\:focus\:text-indigo-lighter:focus {
    color: #b2b7ff;
  }

  .md\:focus\:text-indigo-lightest:focus {
    color: #e6e8ff;
  }

  .md\:focus\:text-purple-darkest:focus {
    color: #21183c;
  }

  .md\:focus\:text-purple-darker:focus {
    color: #382b5f;
  }

  .md\:focus\:text-purple-dark:focus {
    color: #794acf;
  }

  .md\:focus\:text-purple-light:focus {
    color: #a779e9;
  }

  .md\:focus\:text-purple-lighter:focus {
    color: #d6bbfc;
  }

  .md\:focus\:text-purple-lightest:focus {
    color: #f3ebff;
  }

  .md\:focus\:text-pink-darkest:focus {
    color: #451225;
  }

  .md\:focus\:text-pink-darker:focus {
    color: #6f213f;
  }

  .md\:focus\:text-pink-dark:focus {
    color: #eb5286;
  }

  .md\:focus\:text-pink-light:focus {
    color: #fa7ea8;
  }

  .md\:focus\:text-pink-lighter:focus {
    color: #ffbbca;
  }

  .md\:focus\:text-pink-lightest:focus {
    color: #ffebef;
  }

  .md\:focus\:text-nav:focus {
    color: #3F495E;
  }

  .md\:focus\:text-side-nav:focus {
    color: #ECF0F1;
  }

  .md\:focus\:text-nav-item:focus {
    color: #626b7a;
  }

  .md\:focus\:text-light-border:focus {
    color: #dfe4e6;
  }

  .md\:focus\:text-white-medium:focus {
    color: #FAFAFA;
  }

  .md\:focus\:text-white-medium-dark:focus {
    color: #E5E9EB;
  }

  .md\:focus\:text-red-vibrant:focus {
    color: #e46050;
  }

  .md\:focus\:text-red-vibrant-dark:focus {
    color: #d64230;
  }

  .md\:focus\:text-primary:focus {
    color: #51BE99;
  }

  .md\:focus\:text-primary-dark:focus {
    color: #0e5f43;
  }

  .md\:focus\:text-warning:focus {
    color: #f4ab43;
  }

  .md\:focus\:text-warning-dark:focus {
    color: #c37c16;
  }

  .md\:focus\:text-black-dark:focus {
    color: #272634;
  }

  .md\:focus\:text-black-darkest:focus {
    color: #141418;
  }

  .md\:focus\:text-info:focus {
    color: #52bcdc;
  }

  .md\:focus\:text-info-dark:focus {
    color: #2cadd4;
  }

  .md\:focus\:text-success:focus {
    color: #72b159;
  }

  .md\:focus\:text-success-dark:focus {
    color: #5D9547;
  }

  .md\:focus\:text-transparent:focus {
    color: transparent;
  }

  .md\:focus\:text-black:focus {
    color: #000;
  }

  .md\:focus\:text-white:focus {
    color: #fff;
  }

  .md\:focus\:text-gray-100:focus {
    color: #f7fafc;
  }

  .md\:focus\:text-gray-200:focus {
    color: #edf2f7;
  }

  .md\:focus\:text-gray-300:focus {
    color: #e2e8f0;
  }

  .md\:focus\:text-gray-400:focus {
    color: #cbd5e0;
  }

  .md\:focus\:text-gray-500:focus {
    color: #a0aec0;
  }

  .md\:focus\:text-gray-600:focus {
    color: #718096;
  }

  .md\:focus\:text-gray-700:focus {
    color: #4a5568;
  }

  .md\:focus\:text-gray-800:focus {
    color: #2d3748;
  }

  .md\:focus\:text-gray-900:focus {
    color: #1a202c;
  }

  .md\:focus\:text-red-100:focus {
    color: #fff5f5;
  }

  .md\:focus\:text-red-200:focus {
    color: #fed7d7;
  }

  .md\:focus\:text-red-300:focus {
    color: #feb2b2;
  }

  .md\:focus\:text-red-400:focus {
    color: #fc8181;
  }

  .md\:focus\:text-red-500:focus {
    color: #f56565;
  }

  .md\:focus\:text-red-600:focus {
    color: #e53e3e;
  }

  .md\:focus\:text-red-700:focus {
    color: #c53030;
  }

  .md\:focus\:text-red-800:focus {
    color: #9b2c2c;
  }

  .md\:focus\:text-red-900:focus {
    color: #742a2a;
  }

  .md\:focus\:text-orange-100:focus {
    color: #fffaf0;
  }

  .md\:focus\:text-orange-200:focus {
    color: #feebc8;
  }

  .md\:focus\:text-orange-300:focus {
    color: #fbd38d;
  }

  .md\:focus\:text-orange-400:focus {
    color: #f6ad55;
  }

  .md\:focus\:text-orange-500:focus {
    color: #ed8936;
  }

  .md\:focus\:text-orange-600:focus {
    color: #dd6b20;
  }

  .md\:focus\:text-orange-700:focus {
    color: #c05621;
  }

  .md\:focus\:text-orange-800:focus {
    color: #9c4221;
  }

  .md\:focus\:text-orange-900:focus {
    color: #7b341e;
  }

  .md\:focus\:text-yellow-100:focus {
    color: #fffff0;
  }

  .md\:focus\:text-yellow-200:focus {
    color: #fefcbf;
  }

  .md\:focus\:text-yellow-300:focus {
    color: #faf089;
  }

  .md\:focus\:text-yellow-400:focus {
    color: #f6e05e;
  }

  .md\:focus\:text-yellow-500:focus {
    color: #ecc94b;
  }

  .md\:focus\:text-yellow-600:focus {
    color: #d69e2e;
  }

  .md\:focus\:text-yellow-700:focus {
    color: #b7791f;
  }

  .md\:focus\:text-yellow-800:focus {
    color: #975a16;
  }

  .md\:focus\:text-yellow-900:focus {
    color: #744210;
  }

  .md\:focus\:text-green-100:focus {
    color: #f0fff4;
  }

  .md\:focus\:text-green-200:focus {
    color: #c6f6d5;
  }

  .md\:focus\:text-green-300:focus {
    color: #9ae6b4;
  }

  .md\:focus\:text-green-400:focus {
    color: #68d391;
  }

  .md\:focus\:text-green-500:focus {
    color: #48bb78;
  }

  .md\:focus\:text-green-600:focus {
    color: #38a169;
  }

  .md\:focus\:text-green-700:focus {
    color: #2f855a;
  }

  .md\:focus\:text-green-800:focus {
    color: #276749;
  }

  .md\:focus\:text-green-900:focus {
    color: #22543d;
  }

  .md\:focus\:text-teal-100:focus {
    color: #e6fffa;
  }

  .md\:focus\:text-teal-200:focus {
    color: #b2f5ea;
  }

  .md\:focus\:text-teal-300:focus {
    color: #81e6d9;
  }

  .md\:focus\:text-teal-400:focus {
    color: #4fd1c5;
  }

  .md\:focus\:text-teal-500:focus {
    color: #38b2ac;
  }

  .md\:focus\:text-teal-600:focus {
    color: #319795;
  }

  .md\:focus\:text-teal-700:focus {
    color: #2c7a7b;
  }

  .md\:focus\:text-teal-800:focus {
    color: #285e61;
  }

  .md\:focus\:text-teal-900:focus {
    color: #234e52;
  }

  .md\:focus\:text-blue-100:focus {
    color: #ebf8ff;
  }

  .md\:focus\:text-blue-200:focus {
    color: #bee3f8;
  }

  .md\:focus\:text-blue-300:focus {
    color: #90cdf4;
  }

  .md\:focus\:text-blue-400:focus {
    color: #63b3ed;
  }

  .md\:focus\:text-blue-500:focus {
    color: #4299e1;
  }

  .md\:focus\:text-blue-600:focus {
    color: #3182ce;
  }

  .md\:focus\:text-blue-700:focus {
    color: #2b6cb0;
  }

  .md\:focus\:text-blue-800:focus {
    color: #2c5282;
  }

  .md\:focus\:text-blue-900:focus {
    color: #2a4365;
  }

  .md\:focus\:text-indigo-100:focus {
    color: #ebf4ff;
  }

  .md\:focus\:text-indigo-200:focus {
    color: #c3dafe;
  }

  .md\:focus\:text-indigo-300:focus {
    color: #a3bffa;
  }

  .md\:focus\:text-indigo-400:focus {
    color: #7f9cf5;
  }

  .md\:focus\:text-indigo-500:focus {
    color: #667eea;
  }

  .md\:focus\:text-indigo-600:focus {
    color: #5a67d8;
  }

  .md\:focus\:text-indigo-700:focus {
    color: #4c51bf;
  }

  .md\:focus\:text-indigo-800:focus {
    color: #434190;
  }

  .md\:focus\:text-indigo-900:focus {
    color: #3c366b;
  }

  .md\:focus\:text-purple-100:focus {
    color: #faf5ff;
  }

  .md\:focus\:text-purple-200:focus {
    color: #e9d8fd;
  }

  .md\:focus\:text-purple-300:focus {
    color: #d6bcfa;
  }

  .md\:focus\:text-purple-400:focus {
    color: #b794f4;
  }

  .md\:focus\:text-purple-500:focus {
    color: #9f7aea;
  }

  .md\:focus\:text-purple-600:focus {
    color: #805ad5;
  }

  .md\:focus\:text-purple-700:focus {
    color: #6b46c1;
  }

  .md\:focus\:text-purple-800:focus {
    color: #553c9a;
  }

  .md\:focus\:text-purple-900:focus {
    color: #44337a;
  }

  .md\:focus\:text-pink-100:focus {
    color: #fff5f7;
  }

  .md\:focus\:text-pink-200:focus {
    color: #fed7e2;
  }

  .md\:focus\:text-pink-300:focus {
    color: #fbb6ce;
  }

  .md\:focus\:text-pink-400:focus {
    color: #f687b3;
  }

  .md\:focus\:text-pink-500:focus {
    color: #ed64a6;
  }

  .md\:focus\:text-pink-600:focus {
    color: #d53f8c;
  }

  .md\:focus\:text-pink-700:focus {
    color: #b83280;
  }

  .md\:focus\:text-pink-800:focus {
    color: #97266d;
  }

  .md\:focus\:text-pink-900:focus {
    color: #702459;
  }

  .md\:text-xs {
    font-size: 0.75rem;
  }

  .md\:text-sm {
    font-size: 0.875rem;
  }

  .md\:text-base {
    font-size: 1rem;
  }

  .md\:text-lg {
    font-size: 1.125rem;
  }

  .md\:text-xl {
    font-size: 1.25rem;
  }

  .md\:text-2xl {
    font-size: 1.5rem;
  }

  .md\:text-3xl {
    font-size: 1.875rem;
  }

  .md\:text-4xl {
    font-size: 2.25rem;
  }

  .md\:text-5xl {
    font-size: 3rem;
  }

  .md\:text-6xl {
    font-size: 4rem;
  }

  .md\:italic {
    font-style: italic;
  }

  .md\:not-italic {
    font-style: normal;
  }

  .md\:uppercase {
    text-transform: uppercase;
  }

  .md\:lowercase {
    text-transform: lowercase;
  }

  .md\:capitalize {
    text-transform: capitalize;
  }

  .md\:normal-case {
    text-transform: none;
  }

  .md\:underline {
    text-decoration: underline;
  }

  .md\:line-through {
    text-decoration: line-through;
  }

  .md\:no-underline {
    text-decoration: none;
  }

  .md\:hover\:underline:hover {
    text-decoration: underline;
  }

  .md\:hover\:line-through:hover {
    text-decoration: line-through;
  }

  .md\:hover\:no-underline:hover {
    text-decoration: none;
  }

  .md\:focus\:underline:focus {
    text-decoration: underline;
  }

  .md\:focus\:line-through:focus {
    text-decoration: line-through;
  }

  .md\:focus\:no-underline:focus {
    text-decoration: none;
  }

  .md\:antialiased {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }

  .md\:subpixel-antialiased {
    -webkit-font-smoothing: auto;
    -moz-osx-font-smoothing: auto;
  }

  .md\:tracking-tighter {
    letter-spacing: -0.05em;
  }

  .md\:tracking-tight {
    letter-spacing: -0.025em;
  }

  .md\:tracking-normal {
    letter-spacing: 0;
  }

  .md\:tracking-wide {
    letter-spacing: 0.025em;
  }

  .md\:tracking-wider {
    letter-spacing: 0.05em;
  }

  .md\:tracking-widest {
    letter-spacing: 0.1em;
  }

  .md\:select-none {
    user-select: none;
  }

  .md\:select-text {
    user-select: text;
  }

  .md\:select-all {
    user-select: all;
  }

  .md\:select-auto {
    user-select: auto;
  }

  .md\:align-baseline {
    vertical-align: baseline;
  }

  .md\:align-top {
    vertical-align: top;
  }

  .md\:align-middle {
    vertical-align: middle;
  }

  .md\:align-bottom {
    vertical-align: bottom;
  }

  .md\:align-text-top {
    vertical-align: text-top;
  }

  .md\:align-text-bottom {
    vertical-align: text-bottom;
  }

  .md\:visible {
    visibility: visible;
  }

  .md\:invisible {
    visibility: hidden;
  }

  .md\:whitespace-normal {
    white-space: normal;
  }

  .md\:whitespace-no-wrap {
    white-space: nowrap;
  }

  .md\:whitespace-pre {
    white-space: pre;
  }

  .md\:whitespace-pre-line {
    white-space: pre-line;
  }

  .md\:whitespace-pre-wrap {
    white-space: pre-wrap;
  }

  .md\:break-normal {
    overflow-wrap: normal;
    word-break: normal;
  }

  .md\:break-words {
    overflow-wrap: break-word;
  }

  .md\:break-all {
    word-break: break-all;
  }

  .md\:truncate {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
  }

  .md\:w-0 {
    width: 0;
  }

  .md\:w-1 {
    width: 0.25rem;
  }

  .md\:w-2 {
    width: 0.5rem;
  }

  .md\:w-3 {
    width: 0.75rem;
  }

  .md\:w-4 {
    width: 1rem;
  }

  .md\:w-5 {
    width: 1.25rem;
  }

  .md\:w-6 {
    width: 1.5rem;
  }

  .md\:w-8 {
    width: 2rem;
  }

  .md\:w-10 {
    width: 2.5rem;
  }

  .md\:w-12 {
    width: 3rem;
  }

  .md\:w-16 {
    width: 4rem;
  }

  .md\:w-20 {
    width: 5rem;
  }

  .md\:w-24 {
    width: 6rem;
  }

  .md\:w-32 {
    width: 8rem;
  }

  .md\:w-40 {
    width: 10rem;
  }

  .md\:w-48 {
    width: 12rem;
  }

  .md\:w-56 {
    width: 14rem;
  }

  .md\:w-64 {
    width: 16rem;
  }

  .md\:w-auto {
    width: auto;
  }

  .md\:w-px {
    width: 1px;
  }

  .md\:w-1\/2 {
    width: 50%;
  }

  .md\:w-1\/3 {
    width: 33.333333%;
  }

  .md\:w-2\/3 {
    width: 66.666667%;
  }

  .md\:w-1\/4 {
    width: 25%;
  }

  .md\:w-2\/4 {
    width: 50%;
  }

  .md\:w-3\/4 {
    width: 75%;
  }

  .md\:w-1\/5 {
    width: 20%;
  }

  .md\:w-2\/5 {
    width: 40%;
  }

  .md\:w-3\/5 {
    width: 60%;
  }

  .md\:w-4\/5 {
    width: 80%;
  }

  .md\:w-1\/6 {
    width: 16.666667%;
  }

  .md\:w-2\/6 {
    width: 33.333333%;
  }

  .md\:w-3\/6 {
    width: 50%;
  }

  .md\:w-4\/6 {
    width: 66.666667%;
  }

  .md\:w-5\/6 {
    width: 83.333333%;
  }

  .md\:w-1\/12 {
    width: 8.333333%;
  }

  .md\:w-2\/12 {
    width: 16.666667%;
  }

  .md\:w-3\/12 {
    width: 25%;
  }

  .md\:w-4\/12 {
    width: 33.333333%;
  }

  .md\:w-5\/12 {
    width: 41.666667%;
  }

  .md\:w-6\/12 {
    width: 50%;
  }

  .md\:w-7\/12 {
    width: 58.333333%;
  }

  .md\:w-8\/12 {
    width: 66.666667%;
  }

  .md\:w-9\/12 {
    width: 75%;
  }

  .md\:w-10\/12 {
    width: 83.333333%;
  }

  .md\:w-11\/12 {
    width: 91.666667%;
  }

  .md\:w-full {
    width: 100%;
  }

  .md\:w-screen {
    width: 100vw;
  }

  .md\:z-0 {
    z-index: 0;
  }

  .md\:z-10 {
    z-index: 10;
  }

  .md\:z-20 {
    z-index: 20;
  }

  .md\:z-30 {
    z-index: 30;
  }

  .md\:z-40 {
    z-index: 40;
  }

  .md\:z-50 {
    z-index: 50;
  }

  .md\:z-auto {
    z-index: auto;
  }
}

@media (min-width: 1024px) {
  .lg\:sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border-width: 0;
  }

  .lg\:not-sr-only {
    position: static;
    width: auto;
    height: auto;
    padding: 0;
    margin: 0;
    overflow: visible;
    clip: auto;
    white-space: normal;
  }

  .lg\:focus\:sr-only:focus {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border-width: 0;
  }

  .lg\:focus\:not-sr-only:focus {
    position: static;
    width: auto;
    height: auto;
    padding: 0;
    margin: 0;
    overflow: visible;
    clip: auto;
    white-space: normal;
  }

  .lg\:appearance-none {
    appearance: none;
  }

  .lg\:bg-fixed {
    background-attachment: fixed;
  }

  .lg\:bg-local {
    background-attachment: local;
  }

  .lg\:bg-scroll {
    background-attachment: scroll;
  }

  .lg\:bg-grey-darkest {
    background-color: #3d4852;
  }

  .lg\:bg-grey-darker {
    background-color: #606f7b;
  }

  .lg\:bg-grey-dark {
    background-color: #8795a1;
  }

  .lg\:bg-grey {
    background-color: #b8c2cc;
  }

  .lg\:bg-grey-light {
    background-color: #dae1e7;
  }

  .lg\:bg-grey-lighter {
    background-color: #f1f5f8;
  }

  .lg\:bg-grey-lightest {
    background-color: #f8fafc;
  }

  .lg\:bg-grey-mid-light {
    background-color: #f3f3f4;
  }

  .lg\:bg-white-lightest {
    background-color: #f4f4f4;
  }

  .lg\:bg-red-darkest {
    background-color: #3b0d0c;
  }

  .lg\:bg-red-darker {
    background-color: #621b18;
  }

  .lg\:bg-red-dark {
    background-color: #cc1f1a;
  }

  .lg\:bg-red-light {
    background-color: #ef5753;
  }

  .lg\:bg-red-lighter {
    background-color: #f9acaa;
  }

  .lg\:bg-red-lightest {
    background-color: #fcebea;
  }

  .lg\:bg-orange-darkest {
    background-color: #462a16;
  }

  .lg\:bg-orange-darker {
    background-color: #613b1f;
  }

  .lg\:bg-orange-dark {
    background-color: #de751f;
  }

  .lg\:bg-orange-light {
    background-color: #faad63;
  }

  .lg\:bg-orange-lighter {
    background-color: #fcd9b6;
  }

  .lg\:bg-orange-lightest {
    background-color: #fff5eb;
  }

  .lg\:bg-yellow-darkest {
    background-color: #453411;
  }

  .lg\:bg-yellow-darker {
    background-color: #684f1d;
  }

  .lg\:bg-yellow-dark {
    background-color: #f2d024;
  }

  .lg\:bg-yellow-light {
    background-color: #fff382;
  }

  .lg\:bg-yellow-lighter {
    background-color: #fff9c2;
  }

  .lg\:bg-yellow-lightest {
    background-color: #fcfbeb;
  }

  .lg\:bg-green-darkest {
    background-color: #0f2f21;
  }

  .lg\:bg-green-darker {
    background-color: #1a4731;
  }

  .lg\:bg-green-dark {
    background-color: #1f9d55;
  }

  .lg\:bg-green-light {
    background-color: #51d88a;
  }

  .lg\:bg-green-lighter {
    background-color: #a2f5bf;
  }

  .lg\:bg-green-lightest {
    background-color: #e3fcec;
  }

  .lg\:bg-teal-darkest {
    background-color: #0d3331;
  }

  .lg\:bg-teal-darker {
    background-color: #20504f;
  }

  .lg\:bg-teal-dark {
    background-color: #38a89d;
  }

  .lg\:bg-teal-light {
    background-color: #64d5ca;
  }

  .lg\:bg-teal-lighter {
    background-color: #a0f0ed;
  }

  .lg\:bg-teal-lightest {
    background-color: #e8fffe;
  }

  .lg\:bg-blue-darkest {
    background-color: #12283a;
  }

  .lg\:bg-blue-darker {
    background-color: #1c3d5a;
  }

  .lg\:bg-blue-dark {
    background-color: #2779bd;
  }

  .lg\:bg-blue-light {
    background-color: #6cb2eb;
  }

  .lg\:bg-blue-lighter {
    background-color: #bcdefa;
  }

  .lg\:bg-blue-lightest {
    background-color: #eff8ff;
  }

  .lg\:bg-indigo-darkest {
    background-color: #191e38;
  }

  .lg\:bg-indigo-darker {
    background-color: #2f365f;
  }

  .lg\:bg-indigo-dark {
    background-color: #5661b3;
  }

  .lg\:bg-indigo-light {
    background-color: #7886d7;
  }

  .lg\:bg-indigo-lighter {
    background-color: #b2b7ff;
  }

  .lg\:bg-indigo-lightest {
    background-color: #e6e8ff;
  }

  .lg\:bg-purple-darkest {
    background-color: #21183c;
  }

  .lg\:bg-purple-darker {
    background-color: #382b5f;
  }

  .lg\:bg-purple-dark {
    background-color: #794acf;
  }

  .lg\:bg-purple-light {
    background-color: #a779e9;
  }

  .lg\:bg-purple-lighter {
    background-color: #d6bbfc;
  }

  .lg\:bg-purple-lightest {
    background-color: #f3ebff;
  }

  .lg\:bg-pink-darkest {
    background-color: #451225;
  }

  .lg\:bg-pink-darker {
    background-color: #6f213f;
  }

  .lg\:bg-pink-dark {
    background-color: #eb5286;
  }

  .lg\:bg-pink-light {
    background-color: #fa7ea8;
  }

  .lg\:bg-pink-lighter {
    background-color: #ffbbca;
  }

  .lg\:bg-pink-lightest {
    background-color: #ffebef;
  }

  .lg\:bg-nav {
    background-color: #3F495E;
  }

  .lg\:bg-side-nav {
    background-color: #ECF0F1;
  }

  .lg\:bg-nav-item {
    background-color: #626b7a;
  }

  .lg\:bg-light-border {
    background-color: #dfe4e6;
  }

  .lg\:bg-white-medium {
    background-color: #FAFAFA;
  }

  .lg\:bg-white-medium-dark {
    background-color: #E5E9EB;
  }

  .lg\:bg-red-vibrant {
    background-color: #e46050;
  }

  .lg\:bg-red-vibrant-dark {
    background-color: #d64230;
  }

  .lg\:bg-primary {
    background-color: #51BE99;
  }

  .lg\:bg-primary-dark {
    background-color: #0e5f43;
  }

  .lg\:bg-warning {
    background-color: #f4ab43;
  }

  .lg\:bg-warning-dark {
    background-color: #c37c16;
  }

  .lg\:bg-black-dark {
    background-color: #272634;
  }

  .lg\:bg-black-darkest {
    background-color: #141418;
  }

  .lg\:bg-info {
    background-color: #52bcdc;
  }

  .lg\:bg-info-dark {
    background-color: #2cadd4;
  }

  .lg\:bg-success {
    background-color: #72b159;
  }

  .lg\:bg-success-dark {
    background-color: #5D9547;
  }

  .lg\:bg-transparent {
    background-color: transparent;
  }

  .lg\:bg-black {
    background-color: #000;
  }

  .lg\:bg-white {
    background-color: #fff;
  }

  .lg\:bg-gray-100 {
    background-color: #f7fafc;
  }

  .lg\:bg-gray-200 {
    background-color: #edf2f7;
  }

  .lg\:bg-gray-300 {
    background-color: #e2e8f0;
  }

  .lg\:bg-gray-400 {
    background-color: #cbd5e0;
  }

  .lg\:bg-gray-500 {
    background-color: #a0aec0;
  }

  .lg\:bg-gray-600 {
    background-color: #718096;
  }

  .lg\:bg-gray-700 {
    background-color: #4a5568;
  }

  .lg\:bg-gray-800 {
    background-color: #2d3748;
  }

  .lg\:bg-gray-900 {
    background-color: #1a202c;
  }

  .lg\:bg-red-100 {
    background-color: #fff5f5;
  }

  .lg\:bg-red-200 {
    background-color: #fed7d7;
  }

  .lg\:bg-red-300 {
    background-color: #feb2b2;
  }

  .lg\:bg-red-400 {
    background-color: #fc8181;
  }

  .lg\:bg-red-500 {
    background-color: #f56565;
  }

  .lg\:bg-red-600 {
    background-color: #e53e3e;
  }

  .lg\:bg-red-700 {
    background-color: #c53030;
  }

  .lg\:bg-red-800 {
    background-color: #9b2c2c;
  }

  .lg\:bg-red-900 {
    background-color: #742a2a;
  }

  .lg\:bg-orange-100 {
    background-color: #fffaf0;
  }

  .lg\:bg-orange-200 {
    background-color: #feebc8;
  }

  .lg\:bg-orange-300 {
    background-color: #fbd38d;
  }

  .lg\:bg-orange-400 {
    background-color: #f6ad55;
  }

  .lg\:bg-orange-500 {
    background-color: #ed8936;
  }

  .lg\:bg-orange-600 {
    background-color: #dd6b20;
  }

  .lg\:bg-orange-700 {
    background-color: #c05621;
  }

  .lg\:bg-orange-800 {
    background-color: #9c4221;
  }

  .lg\:bg-orange-900 {
    background-color: #7b341e;
  }

  .lg\:bg-yellow-100 {
    background-color: #fffff0;
  }

  .lg\:bg-yellow-200 {
    background-color: #fefcbf;
  }

  .lg\:bg-yellow-300 {
    background-color: #faf089;
  }

  .lg\:bg-yellow-400 {
    background-color: #f6e05e;
  }

  .lg\:bg-yellow-500 {
    background-color: #ecc94b;
  }

  .lg\:bg-yellow-600 {
    background-color: #d69e2e;
  }

  .lg\:bg-yellow-700 {
    background-color: #b7791f;
  }

  .lg\:bg-yellow-800 {
    background-color: #975a16;
  }

  .lg\:bg-yellow-900 {
    background-color: #744210;
  }

  .lg\:bg-green-100 {
    background-color: #f0fff4;
  }

  .lg\:bg-green-200 {
    background-color: #c6f6d5;
  }

  .lg\:bg-green-300 {
    background-color: #9ae6b4;
  }

  .lg\:bg-green-400 {
    background-color: #68d391;
  }

  .lg\:bg-green-500 {
    background-color: #48bb78;
  }

  .lg\:bg-green-600 {
    background-color: #38a169;
  }

  .lg\:bg-green-700 {
    background-color: #2f855a;
  }

  .lg\:bg-green-800 {
    background-color: #276749;
  }

  .lg\:bg-green-900 {
    background-color: #22543d;
  }

  .lg\:bg-teal-100 {
    background-color: #e6fffa;
  }

  .lg\:bg-teal-200 {
    background-color: #b2f5ea;
  }

  .lg\:bg-teal-300 {
    background-color: #81e6d9;
  }

  .lg\:bg-teal-400 {
    background-color: #4fd1c5;
  }

  .lg\:bg-teal-500 {
    background-color: #38b2ac;
  }

  .lg\:bg-teal-600 {
    background-color: #319795;
  }

  .lg\:bg-teal-700 {
    background-color: #2c7a7b;
  }

  .lg\:bg-teal-800 {
    background-color: #285e61;
  }

  .lg\:bg-teal-900 {
    background-color: #234e52;
  }

  .lg\:bg-blue-100 {
    background-color: #ebf8ff;
  }

  .lg\:bg-blue-200 {
    background-color: #bee3f8;
  }

  .lg\:bg-blue-300 {
    background-color: #90cdf4;
  }

  .lg\:bg-blue-400 {
    background-color: #63b3ed;
  }

  .lg\:bg-blue-500 {
    background-color: #4299e1;
  }

  .lg\:bg-blue-600 {
    background-color: #3182ce;
  }

  .lg\:bg-blue-700 {
    background-color: #2b6cb0;
  }

  .lg\:bg-blue-800 {
    background-color: #2c5282;
  }

  .lg\:bg-blue-900 {
    background-color: #2a4365;
  }

  .lg\:bg-indigo-100 {
    background-color: #ebf4ff;
  }

  .lg\:bg-indigo-200 {
    background-color: #c3dafe;
  }

  .lg\:bg-indigo-300 {
    background-color: #a3bffa;
  }

  .lg\:bg-indigo-400 {
    background-color: #7f9cf5;
  }

  .lg\:bg-indigo-500 {
    background-color: #667eea;
  }

  .lg\:bg-indigo-600 {
    background-color: #5a67d8;
  }

  .lg\:bg-indigo-700 {
    background-color: #4c51bf;
  }

  .lg\:bg-indigo-800 {
    background-color: #434190;
  }

  .lg\:bg-indigo-900 {
    background-color: #3c366b;
  }

  .lg\:bg-purple-100 {
    background-color: #faf5ff;
  }

  .lg\:bg-purple-200 {
    background-color: #e9d8fd;
  }

  .lg\:bg-purple-300 {
    background-color: #d6bcfa;
  }

  .lg\:bg-purple-400 {
    background-color: #b794f4;
  }

  .lg\:bg-purple-500 {
    background-color: #9f7aea;
  }

  .lg\:bg-purple-600 {
    background-color: #805ad5;
  }

  .lg\:bg-purple-700 {
    background-color: #6b46c1;
  }

  .lg\:bg-purple-800 {
    background-color: #553c9a;
  }

  .lg\:bg-purple-900 {
    background-color: #44337a;
  }

  .lg\:bg-pink-100 {
    background-color: #fff5f7;
  }

  .lg\:bg-pink-200 {
    background-color: #fed7e2;
  }

  .lg\:bg-pink-300 {
    background-color: #fbb6ce;
  }

  .lg\:bg-pink-400 {
    background-color: #f687b3;
  }

  .lg\:bg-pink-500 {
    background-color: #ed64a6;
  }

  .lg\:bg-pink-600 {
    background-color: #d53f8c;
  }

  .lg\:bg-pink-700 {
    background-color: #b83280;
  }

  .lg\:bg-pink-800 {
    background-color: #97266d;
  }

  .lg\:bg-pink-900 {
    background-color: #702459;
  }

  .lg\:hover\:bg-grey-darkest:hover {
    background-color: #3d4852;
  }

  .lg\:hover\:bg-grey-darker:hover {
    background-color: #606f7b;
  }

  .lg\:hover\:bg-grey-dark:hover {
    background-color: #8795a1;
  }

  .lg\:hover\:bg-grey:hover {
    background-color: #b8c2cc;
  }

  .lg\:hover\:bg-grey-light:hover {
    background-color: #dae1e7;
  }

  .lg\:hover\:bg-grey-lighter:hover {
    background-color: #f1f5f8;
  }

  .lg\:hover\:bg-grey-lightest:hover {
    background-color: #f8fafc;
  }

  .lg\:hover\:bg-grey-mid-light:hover {
    background-color: #f3f3f4;
  }

  .lg\:hover\:bg-white-lightest:hover {
    background-color: #f4f4f4;
  }

  .lg\:hover\:bg-red-darkest:hover {
    background-color: #3b0d0c;
  }

  .lg\:hover\:bg-red-darker:hover {
    background-color: #621b18;
  }

  .lg\:hover\:bg-red-dark:hover {
    background-color: #cc1f1a;
  }

  .lg\:hover\:bg-red-light:hover {
    background-color: #ef5753;
  }

  .lg\:hover\:bg-red-lighter:hover {
    background-color: #f9acaa;
  }

  .lg\:hover\:bg-red-lightest:hover {
    background-color: #fcebea;
  }

  .lg\:hover\:bg-orange-darkest:hover {
    background-color: #462a16;
  }

  .lg\:hover\:bg-orange-darker:hover {
    background-color: #613b1f;
  }

  .lg\:hover\:bg-orange-dark:hover {
    background-color: #de751f;
  }

  .lg\:hover\:bg-orange-light:hover {
    background-color: #faad63;
  }

  .lg\:hover\:bg-orange-lighter:hover {
    background-color: #fcd9b6;
  }

  .lg\:hover\:bg-orange-lightest:hover {
    background-color: #fff5eb;
  }

  .lg\:hover\:bg-yellow-darkest:hover {
    background-color: #453411;
  }

  .lg\:hover\:bg-yellow-darker:hover {
    background-color: #684f1d;
  }

  .lg\:hover\:bg-yellow-dark:hover {
    background-color: #f2d024;
  }

  .lg\:hover\:bg-yellow-light:hover {
    background-color: #fff382;
  }

  .lg\:hover\:bg-yellow-lighter:hover {
    background-color: #fff9c2;
  }

  .lg\:hover\:bg-yellow-lightest:hover {
    background-color: #fcfbeb;
  }

  .lg\:hover\:bg-green-darkest:hover {
    background-color: #0f2f21;
  }

  .lg\:hover\:bg-green-darker:hover {
    background-color: #1a4731;
  }

  .lg\:hover\:bg-green-dark:hover {
    background-color: #1f9d55;
  }

  .lg\:hover\:bg-green-light:hover {
    background-color: #51d88a;
  }

  .lg\:hover\:bg-green-lighter:hover {
    background-color: #a2f5bf;
  }

  .lg\:hover\:bg-green-lightest:hover {
    background-color: #e3fcec;
  }

  .lg\:hover\:bg-teal-darkest:hover {
    background-color: #0d3331;
  }

  .lg\:hover\:bg-teal-darker:hover {
    background-color: #20504f;
  }

  .lg\:hover\:bg-teal-dark:hover {
    background-color: #38a89d;
  }

  .lg\:hover\:bg-teal-light:hover {
    background-color: #64d5ca;
  }

  .lg\:hover\:bg-teal-lighter:hover {
    background-color: #a0f0ed;
  }

  .lg\:hover\:bg-teal-lightest:hover {
    background-color: #e8fffe;
  }

  .lg\:hover\:bg-blue-darkest:hover {
    background-color: #12283a;
  }

  .lg\:hover\:bg-blue-darker:hover {
    background-color: #1c3d5a;
  }

  .lg\:hover\:bg-blue-dark:hover {
    background-color: #2779bd;
  }

  .lg\:hover\:bg-blue-light:hover {
    background-color: #6cb2eb;
  }

  .lg\:hover\:bg-blue-lighter:hover {
    background-color: #bcdefa;
  }

  .lg\:hover\:bg-blue-lightest:hover {
    background-color: #eff8ff;
  }

  .lg\:hover\:bg-indigo-darkest:hover {
    background-color: #191e38;
  }

  .lg\:hover\:bg-indigo-darker:hover {
    background-color: #2f365f;
  }

  .lg\:hover\:bg-indigo-dark:hover {
    background-color: #5661b3;
  }

  .lg\:hover\:bg-indigo-light:hover {
    background-color: #7886d7;
  }

  .lg\:hover\:bg-indigo-lighter:hover {
    background-color: #b2b7ff;
  }

  .lg\:hover\:bg-indigo-lightest:hover {
    background-color: #e6e8ff;
  }

  .lg\:hover\:bg-purple-darkest:hover {
    background-color: #21183c;
  }

  .lg\:hover\:bg-purple-darker:hover {
    background-color: #382b5f;
  }

  .lg\:hover\:bg-purple-dark:hover {
    background-color: #794acf;
  }

  .lg\:hover\:bg-purple-light:hover {
    background-color: #a779e9;
  }

  .lg\:hover\:bg-purple-lighter:hover {
    background-color: #d6bbfc;
  }

  .lg\:hover\:bg-purple-lightest:hover {
    background-color: #f3ebff;
  }

  .lg\:hover\:bg-pink-darkest:hover {
    background-color: #451225;
  }

  .lg\:hover\:bg-pink-darker:hover {
    background-color: #6f213f;
  }

  .lg\:hover\:bg-pink-dark:hover {
    background-color: #eb5286;
  }

  .lg\:hover\:bg-pink-light:hover {
    background-color: #fa7ea8;
  }

  .lg\:hover\:bg-pink-lighter:hover {
    background-color: #ffbbca;
  }

  .lg\:hover\:bg-pink-lightest:hover {
    background-color: #ffebef;
  }

  .lg\:hover\:bg-nav:hover {
    background-color: #3F495E;
  }

  .lg\:hover\:bg-side-nav:hover {
    background-color: #ECF0F1;
  }

  .lg\:hover\:bg-nav-item:hover {
    background-color: #626b7a;
  }

  .lg\:hover\:bg-light-border:hover {
    background-color: #dfe4e6;
  }

  .lg\:hover\:bg-white-medium:hover {
    background-color: #FAFAFA;
  }

  .lg\:hover\:bg-white-medium-dark:hover {
    background-color: #E5E9EB;
  }

  .lg\:hover\:bg-red-vibrant:hover {
    background-color: #e46050;
  }

  .lg\:hover\:bg-red-vibrant-dark:hover {
    background-color: #d64230;
  }

  .lg\:hover\:bg-primary:hover {
    background-color: #51BE99;
  }

  .lg\:hover\:bg-primary-dark:hover {
    background-color: #0e5f43;
  }

  .lg\:hover\:bg-warning:hover {
    background-color: #f4ab43;
  }

  .lg\:hover\:bg-warning-dark:hover {
    background-color: #c37c16;
  }

  .lg\:hover\:bg-black-dark:hover {
    background-color: #272634;
  }

  .lg\:hover\:bg-black-darkest:hover {
    background-color: #141418;
  }

  .lg\:hover\:bg-info:hover {
    background-color: #52bcdc;
  }

  .lg\:hover\:bg-info-dark:hover {
    background-color: #2cadd4;
  }

  .lg\:hover\:bg-success:hover {
    background-color: #72b159;
  }

  .lg\:hover\:bg-success-dark:hover {
    background-color: #5D9547;
  }

  .lg\:hover\:bg-transparent:hover {
    background-color: transparent;
  }

  .lg\:hover\:bg-black:hover {
    background-color: #000;
  }

  .lg\:hover\:bg-white:hover {
    background-color: #fff;
  }

  .lg\:hover\:bg-gray-100:hover {
    background-color: #f7fafc;
  }

  .lg\:hover\:bg-gray-200:hover {
    background-color: #edf2f7;
  }

  .lg\:hover\:bg-gray-300:hover {
    background-color: #e2e8f0;
  }

  .lg\:hover\:bg-gray-400:hover {
    background-color: #cbd5e0;
  }

  .lg\:hover\:bg-gray-500:hover {
    background-color: #a0aec0;
  }

  .lg\:hover\:bg-gray-600:hover {
    background-color: #718096;
  }

  .lg\:hover\:bg-gray-700:hover {
    background-color: #4a5568;
  }

  .lg\:hover\:bg-gray-800:hover {
    background-color: #2d3748;
  }

  .lg\:hover\:bg-gray-900:hover {
    background-color: #1a202c;
  }

  .lg\:hover\:bg-red-100:hover {
    background-color: #fff5f5;
  }

  .lg\:hover\:bg-red-200:hover {
    background-color: #fed7d7;
  }

  .lg\:hover\:bg-red-300:hover {
    background-color: #feb2b2;
  }

  .lg\:hover\:bg-red-400:hover {
    background-color: #fc8181;
  }

  .lg\:hover\:bg-red-500:hover {
    background-color: #f56565;
  }

  .lg\:hover\:bg-red-600:hover {
    background-color: #e53e3e;
  }

  .lg\:hover\:bg-red-700:hover {
    background-color: #c53030;
  }

  .lg\:hover\:bg-red-800:hover {
    background-color: #9b2c2c;
  }

  .lg\:hover\:bg-red-900:hover {
    background-color: #742a2a;
  }

  .lg\:hover\:bg-orange-100:hover {
    background-color: #fffaf0;
  }

  .lg\:hover\:bg-orange-200:hover {
    background-color: #feebc8;
  }

  .lg\:hover\:bg-orange-300:hover {
    background-color: #fbd38d;
  }

  .lg\:hover\:bg-orange-400:hover {
    background-color: #f6ad55;
  }

  .lg\:hover\:bg-orange-500:hover {
    background-color: #ed8936;
  }

  .lg\:hover\:bg-orange-600:hover {
    background-color: #dd6b20;
  }

  .lg\:hover\:bg-orange-700:hover {
    background-color: #c05621;
  }

  .lg\:hover\:bg-orange-800:hover {
    background-color: #9c4221;
  }

  .lg\:hover\:bg-orange-900:hover {
    background-color: #7b341e;
  }

  .lg\:hover\:bg-yellow-100:hover {
    background-color: #fffff0;
  }

  .lg\:hover\:bg-yellow-200:hover {
    background-color: #fefcbf;
  }

  .lg\:hover\:bg-yellow-300:hover {
    background-color: #faf089;
  }

  .lg\:hover\:bg-yellow-400:hover {
    background-color: #f6e05e;
  }

  .lg\:hover\:bg-yellow-500:hover {
    background-color: #ecc94b;
  }

  .lg\:hover\:bg-yellow-600:hover {
    background-color: #d69e2e;
  }

  .lg\:hover\:bg-yellow-700:hover {
    background-color: #b7791f;
  }

  .lg\:hover\:bg-yellow-800:hover {
    background-color: #975a16;
  }

  .lg\:hover\:bg-yellow-900:hover {
    background-color: #744210;
  }

  .lg\:hover\:bg-green-100:hover {
    background-color: #f0fff4;
  }

  .lg\:hover\:bg-green-200:hover {
    background-color: #c6f6d5;
  }

  .lg\:hover\:bg-green-300:hover {
    background-color: #9ae6b4;
  }

  .lg\:hover\:bg-green-400:hover {
    background-color: #68d391;
  }

  .lg\:hover\:bg-green-500:hover {
    background-color: #48bb78;
  }

  .lg\:hover\:bg-green-600:hover {
    background-color: #38a169;
  }

  .lg\:hover\:bg-green-700:hover {
    background-color: #2f855a;
  }

  .lg\:hover\:bg-green-800:hover {
    background-color: #276749;
  }

  .lg\:hover\:bg-green-900:hover {
    background-color: #22543d;
  }

  .lg\:hover\:bg-teal-100:hover {
    background-color: #e6fffa;
  }

  .lg\:hover\:bg-teal-200:hover {
    background-color: #b2f5ea;
  }

  .lg\:hover\:bg-teal-300:hover {
    background-color: #81e6d9;
  }

  .lg\:hover\:bg-teal-400:hover {
    background-color: #4fd1c5;
  }

  .lg\:hover\:bg-teal-500:hover {
    background-color: #38b2ac;
  }

  .lg\:hover\:bg-teal-600:hover {
    background-color: #319795;
  }

  .lg\:hover\:bg-teal-700:hover {
    background-color: #2c7a7b;
  }

  .lg\:hover\:bg-teal-800:hover {
    background-color: #285e61;
  }

  .lg\:hover\:bg-teal-900:hover {
    background-color: #234e52;
  }

  .lg\:hover\:bg-blue-100:hover {
    background-color: #ebf8ff;
  }

  .lg\:hover\:bg-blue-200:hover {
    background-color: #bee3f8;
  }

  .lg\:hover\:bg-blue-300:hover {
    background-color: #90cdf4;
  }

  .lg\:hover\:bg-blue-400:hover {
    background-color: #63b3ed;
  }

  .lg\:hover\:bg-blue-500:hover {
    background-color: #4299e1;
  }

  .lg\:hover\:bg-blue-600:hover {
    background-color: #3182ce;
  }

  .lg\:hover\:bg-blue-700:hover {
    background-color: #2b6cb0;
  }

  .lg\:hover\:bg-blue-800:hover {
    background-color: #2c5282;
  }

  .lg\:hover\:bg-blue-900:hover {
    background-color: #2a4365;
  }

  .lg\:hover\:bg-indigo-100:hover {
    background-color: #ebf4ff;
  }

  .lg\:hover\:bg-indigo-200:hover {
    background-color: #c3dafe;
  }

  .lg\:hover\:bg-indigo-300:hover {
    background-color: #a3bffa;
  }

  .lg\:hover\:bg-indigo-400:hover {
    background-color: #7f9cf5;
  }

  .lg\:hover\:bg-indigo-500:hover {
    background-color: #667eea;
  }

  .lg\:hover\:bg-indigo-600:hover {
    background-color: #5a67d8;
  }

  .lg\:hover\:bg-indigo-700:hover {
    background-color: #4c51bf;
  }

  .lg\:hover\:bg-indigo-800:hover {
    background-color: #434190;
  }

  .lg\:hover\:bg-indigo-900:hover {
    background-color: #3c366b;
  }

  .lg\:hover\:bg-purple-100:hover {
    background-color: #faf5ff;
  }

  .lg\:hover\:bg-purple-200:hover {
    background-color: #e9d8fd;
  }

  .lg\:hover\:bg-purple-300:hover {
    background-color: #d6bcfa;
  }

  .lg\:hover\:bg-purple-400:hover {
    background-color: #b794f4;
  }

  .lg\:hover\:bg-purple-500:hover {
    background-color: #9f7aea;
  }

  .lg\:hover\:bg-purple-600:hover {
    background-color: #805ad5;
  }

  .lg\:hover\:bg-purple-700:hover {
    background-color: #6b46c1;
  }

  .lg\:hover\:bg-purple-800:hover {
    background-color: #553c9a;
  }

  .lg\:hover\:bg-purple-900:hover {
    background-color: #44337a;
  }

  .lg\:hover\:bg-pink-100:hover {
    background-color: #fff5f7;
  }

  .lg\:hover\:bg-pink-200:hover {
    background-color: #fed7e2;
  }

  .lg\:hover\:bg-pink-300:hover {
    background-color: #fbb6ce;
  }

  .lg\:hover\:bg-pink-400:hover {
    background-color: #f687b3;
  }

  .lg\:hover\:bg-pink-500:hover {
    background-color: #ed64a6;
  }

  .lg\:hover\:bg-pink-600:hover {
    background-color: #d53f8c;
  }

  .lg\:hover\:bg-pink-700:hover {
    background-color: #b83280;
  }

  .lg\:hover\:bg-pink-800:hover {
    background-color: #97266d;
  }

  .lg\:hover\:bg-pink-900:hover {
    background-color: #702459;
  }

  .lg\:focus\:bg-grey-darkest:focus {
    background-color: #3d4852;
  }

  .lg\:focus\:bg-grey-darker:focus {
    background-color: #606f7b;
  }

  .lg\:focus\:bg-grey-dark:focus {
    background-color: #8795a1;
  }

  .lg\:focus\:bg-grey:focus {
    background-color: #b8c2cc;
  }

  .lg\:focus\:bg-grey-light:focus {
    background-color: #dae1e7;
  }

  .lg\:focus\:bg-grey-lighter:focus {
    background-color: #f1f5f8;
  }

  .lg\:focus\:bg-grey-lightest:focus {
    background-color: #f8fafc;
  }

  .lg\:focus\:bg-grey-mid-light:focus {
    background-color: #f3f3f4;
  }

  .lg\:focus\:bg-white-lightest:focus {
    background-color: #f4f4f4;
  }

  .lg\:focus\:bg-red-darkest:focus {
    background-color: #3b0d0c;
  }

  .lg\:focus\:bg-red-darker:focus {
    background-color: #621b18;
  }

  .lg\:focus\:bg-red-dark:focus {
    background-color: #cc1f1a;
  }

  .lg\:focus\:bg-red-light:focus {
    background-color: #ef5753;
  }

  .lg\:focus\:bg-red-lighter:focus {
    background-color: #f9acaa;
  }

  .lg\:focus\:bg-red-lightest:focus {
    background-color: #fcebea;
  }

  .lg\:focus\:bg-orange-darkest:focus {
    background-color: #462a16;
  }

  .lg\:focus\:bg-orange-darker:focus {
    background-color: #613b1f;
  }

  .lg\:focus\:bg-orange-dark:focus {
    background-color: #de751f;
  }

  .lg\:focus\:bg-orange-light:focus {
    background-color: #faad63;
  }

  .lg\:focus\:bg-orange-lighter:focus {
    background-color: #fcd9b6;
  }

  .lg\:focus\:bg-orange-lightest:focus {
    background-color: #fff5eb;
  }

  .lg\:focus\:bg-yellow-darkest:focus {
    background-color: #453411;
  }

  .lg\:focus\:bg-yellow-darker:focus {
    background-color: #684f1d;
  }

  .lg\:focus\:bg-yellow-dark:focus {
    background-color: #f2d024;
  }

  .lg\:focus\:bg-yellow-light:focus {
    background-color: #fff382;
  }

  .lg\:focus\:bg-yellow-lighter:focus {
    background-color: #fff9c2;
  }

  .lg\:focus\:bg-yellow-lightest:focus {
    background-color: #fcfbeb;
  }

  .lg\:focus\:bg-green-darkest:focus {
    background-color: #0f2f21;
  }

  .lg\:focus\:bg-green-darker:focus {
    background-color: #1a4731;
  }

  .lg\:focus\:bg-green-dark:focus {
    background-color: #1f9d55;
  }

  .lg\:focus\:bg-green-light:focus {
    background-color: #51d88a;
  }

  .lg\:focus\:bg-green-lighter:focus {
    background-color: #a2f5bf;
  }

  .lg\:focus\:bg-green-lightest:focus {
    background-color: #e3fcec;
  }

  .lg\:focus\:bg-teal-darkest:focus {
    background-color: #0d3331;
  }

  .lg\:focus\:bg-teal-darker:focus {
    background-color: #20504f;
  }

  .lg\:focus\:bg-teal-dark:focus {
    background-color: #38a89d;
  }

  .lg\:focus\:bg-teal-light:focus {
    background-color: #64d5ca;
  }

  .lg\:focus\:bg-teal-lighter:focus {
    background-color: #a0f0ed;
  }

  .lg\:focus\:bg-teal-lightest:focus {
    background-color: #e8fffe;
  }

  .lg\:focus\:bg-blue-darkest:focus {
    background-color: #12283a;
  }

  .lg\:focus\:bg-blue-darker:focus {
    background-color: #1c3d5a;
  }

  .lg\:focus\:bg-blue-dark:focus {
    background-color: #2779bd;
  }

  .lg\:focus\:bg-blue-light:focus {
    background-color: #6cb2eb;
  }

  .lg\:focus\:bg-blue-lighter:focus {
    background-color: #bcdefa;
  }

  .lg\:focus\:bg-blue-lightest:focus {
    background-color: #eff8ff;
  }

  .lg\:focus\:bg-indigo-darkest:focus {
    background-color: #191e38;
  }

  .lg\:focus\:bg-indigo-darker:focus {
    background-color: #2f365f;
  }

  .lg\:focus\:bg-indigo-dark:focus {
    background-color: #5661b3;
  }

  .lg\:focus\:bg-indigo-light:focus {
    background-color: #7886d7;
  }

  .lg\:focus\:bg-indigo-lighter:focus {
    background-color: #b2b7ff;
  }

  .lg\:focus\:bg-indigo-lightest:focus {
    background-color: #e6e8ff;
  }

  .lg\:focus\:bg-purple-darkest:focus {
    background-color: #21183c;
  }

  .lg\:focus\:bg-purple-darker:focus {
    background-color: #382b5f;
  }

  .lg\:focus\:bg-purple-dark:focus {
    background-color: #794acf;
  }

  .lg\:focus\:bg-purple-light:focus {
    background-color: #a779e9;
  }

  .lg\:focus\:bg-purple-lighter:focus {
    background-color: #d6bbfc;
  }

  .lg\:focus\:bg-purple-lightest:focus {
    background-color: #f3ebff;
  }

  .lg\:focus\:bg-pink-darkest:focus {
    background-color: #451225;
  }

  .lg\:focus\:bg-pink-darker:focus {
    background-color: #6f213f;
  }

  .lg\:focus\:bg-pink-dark:focus {
    background-color: #eb5286;
  }

  .lg\:focus\:bg-pink-light:focus {
    background-color: #fa7ea8;
  }

  .lg\:focus\:bg-pink-lighter:focus {
    background-color: #ffbbca;
  }

  .lg\:focus\:bg-pink-lightest:focus {
    background-color: #ffebef;
  }

  .lg\:focus\:bg-nav:focus {
    background-color: #3F495E;
  }

  .lg\:focus\:bg-side-nav:focus {
    background-color: #ECF0F1;
  }

  .lg\:focus\:bg-nav-item:focus {
    background-color: #626b7a;
  }

  .lg\:focus\:bg-light-border:focus {
    background-color: #dfe4e6;
  }

  .lg\:focus\:bg-white-medium:focus {
    background-color: #FAFAFA;
  }

  .lg\:focus\:bg-white-medium-dark:focus {
    background-color: #E5E9EB;
  }

  .lg\:focus\:bg-red-vibrant:focus {
    background-color: #e46050;
  }

  .lg\:focus\:bg-red-vibrant-dark:focus {
    background-color: #d64230;
  }

  .lg\:focus\:bg-primary:focus {
    background-color: #51BE99;
  }

  .lg\:focus\:bg-primary-dark:focus {
    background-color: #0e5f43;
  }

  .lg\:focus\:bg-warning:focus {
    background-color: #f4ab43;
  }

  .lg\:focus\:bg-warning-dark:focus {
    background-color: #c37c16;
  }

  .lg\:focus\:bg-black-dark:focus {
    background-color: #272634;
  }

  .lg\:focus\:bg-black-darkest:focus {
    background-color: #141418;
  }

  .lg\:focus\:bg-info:focus {
    background-color: #52bcdc;
  }

  .lg\:focus\:bg-info-dark:focus {
    background-color: #2cadd4;
  }

  .lg\:focus\:bg-success:focus {
    background-color: #72b159;
  }

  .lg\:focus\:bg-success-dark:focus {
    background-color: #5D9547;
  }

  .lg\:focus\:bg-transparent:focus {
    background-color: transparent;
  }

  .lg\:focus\:bg-black:focus {
    background-color: #000;
  }

  .lg\:focus\:bg-white:focus {
    background-color: #fff;
  }

  .lg\:focus\:bg-gray-100:focus {
    background-color: #f7fafc;
  }

  .lg\:focus\:bg-gray-200:focus {
    background-color: #edf2f7;
  }

  .lg\:focus\:bg-gray-300:focus {
    background-color: #e2e8f0;
  }

  .lg\:focus\:bg-gray-400:focus {
    background-color: #cbd5e0;
  }

  .lg\:focus\:bg-gray-500:focus {
    background-color: #a0aec0;
  }

  .lg\:focus\:bg-gray-600:focus {
    background-color: #718096;
  }

  .lg\:focus\:bg-gray-700:focus {
    background-color: #4a5568;
  }

  .lg\:focus\:bg-gray-800:focus {
    background-color: #2d3748;
  }

  .lg\:focus\:bg-gray-900:focus {
    background-color: #1a202c;
  }

  .lg\:focus\:bg-red-100:focus {
    background-color: #fff5f5;
  }

  .lg\:focus\:bg-red-200:focus {
    background-color: #fed7d7;
  }

  .lg\:focus\:bg-red-300:focus {
    background-color: #feb2b2;
  }

  .lg\:focus\:bg-red-400:focus {
    background-color: #fc8181;
  }

  .lg\:focus\:bg-red-500:focus {
    background-color: #f56565;
  }

  .lg\:focus\:bg-red-600:focus {
    background-color: #e53e3e;
  }

  .lg\:focus\:bg-red-700:focus {
    background-color: #c53030;
  }

  .lg\:focus\:bg-red-800:focus {
    background-color: #9b2c2c;
  }

  .lg\:focus\:bg-red-900:focus {
    background-color: #742a2a;
  }

  .lg\:focus\:bg-orange-100:focus {
    background-color: #fffaf0;
  }

  .lg\:focus\:bg-orange-200:focus {
    background-color: #feebc8;
  }

  .lg\:focus\:bg-orange-300:focus {
    background-color: #fbd38d;
  }

  .lg\:focus\:bg-orange-400:focus {
    background-color: #f6ad55;
  }

  .lg\:focus\:bg-orange-500:focus {
    background-color: #ed8936;
  }

  .lg\:focus\:bg-orange-600:focus {
    background-color: #dd6b20;
  }

  .lg\:focus\:bg-orange-700:focus {
    background-color: #c05621;
  }

  .lg\:focus\:bg-orange-800:focus {
    background-color: #9c4221;
  }

  .lg\:focus\:bg-orange-900:focus {
    background-color: #7b341e;
  }

  .lg\:focus\:bg-yellow-100:focus {
    background-color: #fffff0;
  }

  .lg\:focus\:bg-yellow-200:focus {
    background-color: #fefcbf;
  }

  .lg\:focus\:bg-yellow-300:focus {
    background-color: #faf089;
  }

  .lg\:focus\:bg-yellow-400:focus {
    background-color: #f6e05e;
  }

  .lg\:focus\:bg-yellow-500:focus {
    background-color: #ecc94b;
  }

  .lg\:focus\:bg-yellow-600:focus {
    background-color: #d69e2e;
  }

  .lg\:focus\:bg-yellow-700:focus {
    background-color: #b7791f;
  }

  .lg\:focus\:bg-yellow-800:focus {
    background-color: #975a16;
  }

  .lg\:focus\:bg-yellow-900:focus {
    background-color: #744210;
  }

  .lg\:focus\:bg-green-100:focus {
    background-color: #f0fff4;
  }

  .lg\:focus\:bg-green-200:focus {
    background-color: #c6f6d5;
  }

  .lg\:focus\:bg-green-300:focus {
    background-color: #9ae6b4;
  }

  .lg\:focus\:bg-green-400:focus {
    background-color: #68d391;
  }

  .lg\:focus\:bg-green-500:focus {
    background-color: #48bb78;
  }

  .lg\:focus\:bg-green-600:focus {
    background-color: #38a169;
  }

  .lg\:focus\:bg-green-700:focus {
    background-color: #2f855a;
  }

  .lg\:focus\:bg-green-800:focus {
    background-color: #276749;
  }

  .lg\:focus\:bg-green-900:focus {
    background-color: #22543d;
  }

  .lg\:focus\:bg-teal-100:focus {
    background-color: #e6fffa;
  }

  .lg\:focus\:bg-teal-200:focus {
    background-color: #b2f5ea;
  }

  .lg\:focus\:bg-teal-300:focus {
    background-color: #81e6d9;
  }

  .lg\:focus\:bg-teal-400:focus {
    background-color: #4fd1c5;
  }

  .lg\:focus\:bg-teal-500:focus {
    background-color: #38b2ac;
  }

  .lg\:focus\:bg-teal-600:focus {
    background-color: #319795;
  }

  .lg\:focus\:bg-teal-700:focus {
    background-color: #2c7a7b;
  }

  .lg\:focus\:bg-teal-800:focus {
    background-color: #285e61;
  }

  .lg\:focus\:bg-teal-900:focus {
    background-color: #234e52;
  }

  .lg\:focus\:bg-blue-100:focus {
    background-color: #ebf8ff;
  }

  .lg\:focus\:bg-blue-200:focus {
    background-color: #bee3f8;
  }

  .lg\:focus\:bg-blue-300:focus {
    background-color: #90cdf4;
  }

  .lg\:focus\:bg-blue-400:focus {
    background-color: #63b3ed;
  }

  .lg\:focus\:bg-blue-500:focus {
    background-color: #4299e1;
  }

  .lg\:focus\:bg-blue-600:focus {
    background-color: #3182ce;
  }

  .lg\:focus\:bg-blue-700:focus {
    background-color: #2b6cb0;
  }

  .lg\:focus\:bg-blue-800:focus {
    background-color: #2c5282;
  }

  .lg\:focus\:bg-blue-900:focus {
    background-color: #2a4365;
  }

  .lg\:focus\:bg-indigo-100:focus {
    background-color: #ebf4ff;
  }

  .lg\:focus\:bg-indigo-200:focus {
    background-color: #c3dafe;
  }

  .lg\:focus\:bg-indigo-300:focus {
    background-color: #a3bffa;
  }

  .lg\:focus\:bg-indigo-400:focus {
    background-color: #7f9cf5;
  }

  .lg\:focus\:bg-indigo-500:focus {
    background-color: #667eea;
  }

  .lg\:focus\:bg-indigo-600:focus {
    background-color: #5a67d8;
  }

  .lg\:focus\:bg-indigo-700:focus {
    background-color: #4c51bf;
  }

  .lg\:focus\:bg-indigo-800:focus {
    background-color: #434190;
  }

  .lg\:focus\:bg-indigo-900:focus {
    background-color: #3c366b;
  }

  .lg\:focus\:bg-purple-100:focus {
    background-color: #faf5ff;
  }

  .lg\:focus\:bg-purple-200:focus {
    background-color: #e9d8fd;
  }

  .lg\:focus\:bg-purple-300:focus {
    background-color: #d6bcfa;
  }

  .lg\:focus\:bg-purple-400:focus {
    background-color: #b794f4;
  }

  .lg\:focus\:bg-purple-500:focus {
    background-color: #9f7aea;
  }

  .lg\:focus\:bg-purple-600:focus {
    background-color: #805ad5;
  }

  .lg\:focus\:bg-purple-700:focus {
    background-color: #6b46c1;
  }

  .lg\:focus\:bg-purple-800:focus {
    background-color: #553c9a;
  }

  .lg\:focus\:bg-purple-900:focus {
    background-color: #44337a;
  }

  .lg\:focus\:bg-pink-100:focus {
    background-color: #fff5f7;
  }

  .lg\:focus\:bg-pink-200:focus {
    background-color: #fed7e2;
  }

  .lg\:focus\:bg-pink-300:focus {
    background-color: #fbb6ce;
  }

  .lg\:focus\:bg-pink-400:focus {
    background-color: #f687b3;
  }

  .lg\:focus\:bg-pink-500:focus {
    background-color: #ed64a6;
  }

  .lg\:focus\:bg-pink-600:focus {
    background-color: #d53f8c;
  }

  .lg\:focus\:bg-pink-700:focus {
    background-color: #b83280;
  }

  .lg\:focus\:bg-pink-800:focus {
    background-color: #97266d;
  }

  .lg\:focus\:bg-pink-900:focus {
    background-color: #702459;
  }

  .lg\:bg-bottom {
    background-position: bottom;
  }

  .lg\:bg-center {
    background-position: center;
  }

  .lg\:bg-left {
    background-position: left;
  }

  .lg\:bg-left-bottom {
    background-position: left bottom;
  }

  .lg\:bg-left-top {
    background-position: left top;
  }

  .lg\:bg-right {
    background-position: right;
  }

  .lg\:bg-right-bottom {
    background-position: right bottom;
  }

  .lg\:bg-right-top {
    background-position: right top;
  }

  .lg\:bg-top {
    background-position: top;
  }

  .lg\:bg-repeat {
    background-repeat: repeat;
  }

  .lg\:bg-no-repeat {
    background-repeat: no-repeat;
  }

  .lg\:bg-repeat-x {
    background-repeat: repeat-x;
  }

  .lg\:bg-repeat-y {
    background-repeat: repeat-y;
  }

  .lg\:bg-repeat-round {
    background-repeat: round;
  }

  .lg\:bg-repeat-space {
    background-repeat: space;
  }

  .lg\:bg-auto {
    background-size: auto;
  }

  .lg\:bg-cover {
    background-size: cover;
  }

  .lg\:bg-contain {
    background-size: contain;
  }

  .lg\:border-collapse {
    border-collapse: collapse;
  }

  .lg\:border-separate {
    border-collapse: separate;
  }

  .lg\:border-grey-darkest {
    border-color: #3d4852;
  }

  .lg\:border-grey-darker {
    border-color: #606f7b;
  }

  .lg\:border-grey-dark {
    border-color: #8795a1;
  }

  .lg\:border-grey {
    border-color: #b8c2cc;
  }

  .lg\:border-grey-light {
    border-color: #dae1e7;
  }

  .lg\:border-grey-lighter {
    border-color: #f1f5f8;
  }

  .lg\:border-grey-lightest {
    border-color: #f8fafc;
  }

  .lg\:border-grey-mid-light {
    border-color: #f3f3f4;
  }

  .lg\:border-white-lightest {
    border-color: #f4f4f4;
  }

  .lg\:border-red-darkest {
    border-color: #3b0d0c;
  }

  .lg\:border-red-darker {
    border-color: #621b18;
  }

  .lg\:border-red-dark {
    border-color: #cc1f1a;
  }

  .lg\:border-red-light {
    border-color: #ef5753;
  }

  .lg\:border-red-lighter {
    border-color: #f9acaa;
  }

  .lg\:border-red-lightest {
    border-color: #fcebea;
  }

  .lg\:border-orange-darkest {
    border-color: #462a16;
  }

  .lg\:border-orange-darker {
    border-color: #613b1f;
  }

  .lg\:border-orange-dark {
    border-color: #de751f;
  }

  .lg\:border-orange-light {
    border-color: #faad63;
  }

  .lg\:border-orange-lighter {
    border-color: #fcd9b6;
  }

  .lg\:border-orange-lightest {
    border-color: #fff5eb;
  }

  .lg\:border-yellow-darkest {
    border-color: #453411;
  }

  .lg\:border-yellow-darker {
    border-color: #684f1d;
  }

  .lg\:border-yellow-dark {
    border-color: #f2d024;
  }

  .lg\:border-yellow-light {
    border-color: #fff382;
  }

  .lg\:border-yellow-lighter {
    border-color: #fff9c2;
  }

  .lg\:border-yellow-lightest {
    border-color: #fcfbeb;
  }

  .lg\:border-green-darkest {
    border-color: #0f2f21;
  }

  .lg\:border-green-darker {
    border-color: #1a4731;
  }

  .lg\:border-green-dark {
    border-color: #1f9d55;
  }

  .lg\:border-green-light {
    border-color: #51d88a;
  }

  .lg\:border-green-lighter {
    border-color: #a2f5bf;
  }

  .lg\:border-green-lightest {
    border-color: #e3fcec;
  }

  .lg\:border-teal-darkest {
    border-color: #0d3331;
  }

  .lg\:border-teal-darker {
    border-color: #20504f;
  }

  .lg\:border-teal-dark {
    border-color: #38a89d;
  }

  .lg\:border-teal-light {
    border-color: #64d5ca;
  }

  .lg\:border-teal-lighter {
    border-color: #a0f0ed;
  }

  .lg\:border-teal-lightest {
    border-color: #e8fffe;
  }

  .lg\:border-blue-darkest {
    border-color: #12283a;
  }

  .lg\:border-blue-darker {
    border-color: #1c3d5a;
  }

  .lg\:border-blue-dark {
    border-color: #2779bd;
  }

  .lg\:border-blue-light {
    border-color: #6cb2eb;
  }

  .lg\:border-blue-lighter {
    border-color: #bcdefa;
  }

  .lg\:border-blue-lightest {
    border-color: #eff8ff;
  }

  .lg\:border-indigo-darkest {
    border-color: #191e38;
  }

  .lg\:border-indigo-darker {
    border-color: #2f365f;
  }

  .lg\:border-indigo-dark {
    border-color: #5661b3;
  }

  .lg\:border-indigo-light {
    border-color: #7886d7;
  }

  .lg\:border-indigo-lighter {
    border-color: #b2b7ff;
  }

  .lg\:border-indigo-lightest {
    border-color: #e6e8ff;
  }

  .lg\:border-purple-darkest {
    border-color: #21183c;
  }

  .lg\:border-purple-darker {
    border-color: #382b5f;
  }

  .lg\:border-purple-dark {
    border-color: #794acf;
  }

  .lg\:border-purple-light {
    border-color: #a779e9;
  }

  .lg\:border-purple-lighter {
    border-color: #d6bbfc;
  }

  .lg\:border-purple-lightest {
    border-color: #f3ebff;
  }

  .lg\:border-pink-darkest {
    border-color: #451225;
  }

  .lg\:border-pink-darker {
    border-color: #6f213f;
  }

  .lg\:border-pink-dark {
    border-color: #eb5286;
  }

  .lg\:border-pink-light {
    border-color: #fa7ea8;
  }

  .lg\:border-pink-lighter {
    border-color: #ffbbca;
  }

  .lg\:border-pink-lightest {
    border-color: #ffebef;
  }

  .lg\:border-nav {
    border-color: #3F495E;
  }

  .lg\:border-side-nav {
    border-color: #ECF0F1;
  }

  .lg\:border-nav-item {
    border-color: #626b7a;
  }

  .lg\:border-light-border {
    border-color: #dfe4e6;
  }

  .lg\:border-white-medium {
    border-color: #FAFAFA;
  }

  .lg\:border-white-medium-dark {
    border-color: #E5E9EB;
  }

  .lg\:border-red-vibrant {
    border-color: #e46050;
  }

  .lg\:border-red-vibrant-dark {
    border-color: #d64230;
  }

  .lg\:border-primary {
    border-color: #51BE99;
  }

  .lg\:border-primary-dark {
    border-color: #0e5f43;
  }

  .lg\:border-warning {
    border-color: #f4ab43;
  }

  .lg\:border-warning-dark {
    border-color: #c37c16;
  }

  .lg\:border-black-dark {
    border-color: #272634;
  }

  .lg\:border-black-darkest {
    border-color: #141418;
  }

  .lg\:border-info {
    border-color: #52bcdc;
  }

  .lg\:border-info-dark {
    border-color: #2cadd4;
  }

  .lg\:border-success {
    border-color: #72b159;
  }

  .lg\:border-success-dark {
    border-color: #5D9547;
  }

  .lg\:border-transparent {
    border-color: transparent;
  }

  .lg\:border-black {
    border-color: #000;
  }

  .lg\:border-white {
    border-color: #fff;
  }

  .lg\:border-gray-100 {
    border-color: #f7fafc;
  }

  .lg\:border-gray-200 {
    border-color: #edf2f7;
  }

  .lg\:border-gray-300 {
    border-color: #e2e8f0;
  }

  .lg\:border-gray-400 {
    border-color: #cbd5e0;
  }

  .lg\:border-gray-500 {
    border-color: #a0aec0;
  }

  .lg\:border-gray-600 {
    border-color: #718096;
  }

  .lg\:border-gray-700 {
    border-color: #4a5568;
  }

  .lg\:border-gray-800 {
    border-color: #2d3748;
  }

  .lg\:border-gray-900 {
    border-color: #1a202c;
  }

  .lg\:border-red-100 {
    border-color: #fff5f5;
  }

  .lg\:border-red-200 {
    border-color: #fed7d7;
  }

  .lg\:border-red-300 {
    border-color: #feb2b2;
  }

  .lg\:border-red-400 {
    border-color: #fc8181;
  }

  .lg\:border-red-500 {
    border-color: #f56565;
  }

  .lg\:border-red-600 {
    border-color: #e53e3e;
  }

  .lg\:border-red-700 {
    border-color: #c53030;
  }

  .lg\:border-red-800 {
    border-color: #9b2c2c;
  }

  .lg\:border-red-900 {
    border-color: #742a2a;
  }

  .lg\:border-orange-100 {
    border-color: #fffaf0;
  }

  .lg\:border-orange-200 {
    border-color: #feebc8;
  }

  .lg\:border-orange-300 {
    border-color: #fbd38d;
  }

  .lg\:border-orange-400 {
    border-color: #f6ad55;
  }

  .lg\:border-orange-500 {
    border-color: #ed8936;
  }

  .lg\:border-orange-600 {
    border-color: #dd6b20;
  }

  .lg\:border-orange-700 {
    border-color: #c05621;
  }

  .lg\:border-orange-800 {
    border-color: #9c4221;
  }

  .lg\:border-orange-900 {
    border-color: #7b341e;
  }

  .lg\:border-yellow-100 {
    border-color: #fffff0;
  }

  .lg\:border-yellow-200 {
    border-color: #fefcbf;
  }

  .lg\:border-yellow-300 {
    border-color: #faf089;
  }

  .lg\:border-yellow-400 {
    border-color: #f6e05e;
  }

  .lg\:border-yellow-500 {
    border-color: #ecc94b;
  }

  .lg\:border-yellow-600 {
    border-color: #d69e2e;
  }

  .lg\:border-yellow-700 {
    border-color: #b7791f;
  }

  .lg\:border-yellow-800 {
    border-color: #975a16;
  }

  .lg\:border-yellow-900 {
    border-color: #744210;
  }

  .lg\:border-green-100 {
    border-color: #f0fff4;
  }

  .lg\:border-green-200 {
    border-color: #c6f6d5;
  }

  .lg\:border-green-300 {
    border-color: #9ae6b4;
  }

  .lg\:border-green-400 {
    border-color: #68d391;
  }

  .lg\:border-green-500 {
    border-color: #48bb78;
  }

  .lg\:border-green-600 {
    border-color: #38a169;
  }

  .lg\:border-green-700 {
    border-color: #2f855a;
  }

  .lg\:border-green-800 {
    border-color: #276749;
  }

  .lg\:border-green-900 {
    border-color: #22543d;
  }

  .lg\:border-teal-100 {
    border-color: #e6fffa;
  }

  .lg\:border-teal-200 {
    border-color: #b2f5ea;
  }

  .lg\:border-teal-300 {
    border-color: #81e6d9;
  }

  .lg\:border-teal-400 {
    border-color: #4fd1c5;
  }

  .lg\:border-teal-500 {
    border-color: #38b2ac;
  }

  .lg\:border-teal-600 {
    border-color: #319795;
  }

  .lg\:border-teal-700 {
    border-color: #2c7a7b;
  }

  .lg\:border-teal-800 {
    border-color: #285e61;
  }

  .lg\:border-teal-900 {
    border-color: #234e52;
  }

  .lg\:border-blue-100 {
    border-color: #ebf8ff;
  }

  .lg\:border-blue-200 {
    border-color: #bee3f8;
  }

  .lg\:border-blue-300 {
    border-color: #90cdf4;
  }

  .lg\:border-blue-400 {
    border-color: #63b3ed;
  }

  .lg\:border-blue-500 {
    border-color: #4299e1;
  }

  .lg\:border-blue-600 {
    border-color: #3182ce;
  }

  .lg\:border-blue-700 {
    border-color: #2b6cb0;
  }

  .lg\:border-blue-800 {
    border-color: #2c5282;
  }

  .lg\:border-blue-900 {
    border-color: #2a4365;
  }

  .lg\:border-indigo-100 {
    border-color: #ebf4ff;
  }

  .lg\:border-indigo-200 {
    border-color: #c3dafe;
  }

  .lg\:border-indigo-300 {
    border-color: #a3bffa;
  }

  .lg\:border-indigo-400 {
    border-color: #7f9cf5;
  }

  .lg\:border-indigo-500 {
    border-color: #667eea;
  }

  .lg\:border-indigo-600 {
    border-color: #5a67d8;
  }

  .lg\:border-indigo-700 {
    border-color: #4c51bf;
  }

  .lg\:border-indigo-800 {
    border-color: #434190;
  }

  .lg\:border-indigo-900 {
    border-color: #3c366b;
  }

  .lg\:border-purple-100 {
    border-color: #faf5ff;
  }

  .lg\:border-purple-200 {
    border-color: #e9d8fd;
  }

  .lg\:border-purple-300 {
    border-color: #d6bcfa;
  }

  .lg\:border-purple-400 {
    border-color: #b794f4;
  }

  .lg\:border-purple-500 {
    border-color: #9f7aea;
  }

  .lg\:border-purple-600 {
    border-color: #805ad5;
  }

  .lg\:border-purple-700 {
    border-color: #6b46c1;
  }

  .lg\:border-purple-800 {
    border-color: #553c9a;
  }

  .lg\:border-purple-900 {
    border-color: #44337a;
  }

  .lg\:border-pink-100 {
    border-color: #fff5f7;
  }

  .lg\:border-pink-200 {
    border-color: #fed7e2;
  }

  .lg\:border-pink-300 {
    border-color: #fbb6ce;
  }

  .lg\:border-pink-400 {
    border-color: #f687b3;
  }

  .lg\:border-pink-500 {
    border-color: #ed64a6;
  }

  .lg\:border-pink-600 {
    border-color: #d53f8c;
  }

  .lg\:border-pink-700 {
    border-color: #b83280;
  }

  .lg\:border-pink-800 {
    border-color: #97266d;
  }

  .lg\:border-pink-900 {
    border-color: #702459;
  }

  .lg\:hover\:border-grey-darkest:hover {
    border-color: #3d4852;
  }

  .lg\:hover\:border-grey-darker:hover {
    border-color: #606f7b;
  }

  .lg\:hover\:border-grey-dark:hover {
    border-color: #8795a1;
  }

  .lg\:hover\:border-grey:hover {
    border-color: #b8c2cc;
  }

  .lg\:hover\:border-grey-light:hover {
    border-color: #dae1e7;
  }

  .lg\:hover\:border-grey-lighter:hover {
    border-color: #f1f5f8;
  }

  .lg\:hover\:border-grey-lightest:hover {
    border-color: #f8fafc;
  }

  .lg\:hover\:border-grey-mid-light:hover {
    border-color: #f3f3f4;
  }

  .lg\:hover\:border-white-lightest:hover {
    border-color: #f4f4f4;
  }

  .lg\:hover\:border-red-darkest:hover {
    border-color: #3b0d0c;
  }

  .lg\:hover\:border-red-darker:hover {
    border-color: #621b18;
  }

  .lg\:hover\:border-red-dark:hover {
    border-color: #cc1f1a;
  }

  .lg\:hover\:border-red-light:hover {
    border-color: #ef5753;
  }

  .lg\:hover\:border-red-lighter:hover {
    border-color: #f9acaa;
  }

  .lg\:hover\:border-red-lightest:hover {
    border-color: #fcebea;
  }

  .lg\:hover\:border-orange-darkest:hover {
    border-color: #462a16;
  }

  .lg\:hover\:border-orange-darker:hover {
    border-color: #613b1f;
  }

  .lg\:hover\:border-orange-dark:hover {
    border-color: #de751f;
  }

  .lg\:hover\:border-orange-light:hover {
    border-color: #faad63;
  }

  .lg\:hover\:border-orange-lighter:hover {
    border-color: #fcd9b6;
  }

  .lg\:hover\:border-orange-lightest:hover {
    border-color: #fff5eb;
  }

  .lg\:hover\:border-yellow-darkest:hover {
    border-color: #453411;
  }

  .lg\:hover\:border-yellow-darker:hover {
    border-color: #684f1d;
  }

  .lg\:hover\:border-yellow-dark:hover {
    border-color: #f2d024;
  }

  .lg\:hover\:border-yellow-light:hover {
    border-color: #fff382;
  }

  .lg\:hover\:border-yellow-lighter:hover {
    border-color: #fff9c2;
  }

  .lg\:hover\:border-yellow-lightest:hover {
    border-color: #fcfbeb;
  }

  .lg\:hover\:border-green-darkest:hover {
    border-color: #0f2f21;
  }

  .lg\:hover\:border-green-darker:hover {
    border-color: #1a4731;
  }

  .lg\:hover\:border-green-dark:hover {
    border-color: #1f9d55;
  }

  .lg\:hover\:border-green-light:hover {
    border-color: #51d88a;
  }

  .lg\:hover\:border-green-lighter:hover {
    border-color: #a2f5bf;
  }

  .lg\:hover\:border-green-lightest:hover {
    border-color: #e3fcec;
  }

  .lg\:hover\:border-teal-darkest:hover {
    border-color: #0d3331;
  }

  .lg\:hover\:border-teal-darker:hover {
    border-color: #20504f;
  }

  .lg\:hover\:border-teal-dark:hover {
    border-color: #38a89d;
  }

  .lg\:hover\:border-teal-light:hover {
    border-color: #64d5ca;
  }

  .lg\:hover\:border-teal-lighter:hover {
    border-color: #a0f0ed;
  }

  .lg\:hover\:border-teal-lightest:hover {
    border-color: #e8fffe;
  }

  .lg\:hover\:border-blue-darkest:hover {
    border-color: #12283a;
  }

  .lg\:hover\:border-blue-darker:hover {
    border-color: #1c3d5a;
  }

  .lg\:hover\:border-blue-dark:hover {
    border-color: #2779bd;
  }

  .lg\:hover\:border-blue-light:hover {
    border-color: #6cb2eb;
  }

  .lg\:hover\:border-blue-lighter:hover {
    border-color: #bcdefa;
  }

  .lg\:hover\:border-blue-lightest:hover {
    border-color: #eff8ff;
  }

  .lg\:hover\:border-indigo-darkest:hover {
    border-color: #191e38;
  }

  .lg\:hover\:border-indigo-darker:hover {
    border-color: #2f365f;
  }

  .lg\:hover\:border-indigo-dark:hover {
    border-color: #5661b3;
  }

  .lg\:hover\:border-indigo-light:hover {
    border-color: #7886d7;
  }

  .lg\:hover\:border-indigo-lighter:hover {
    border-color: #b2b7ff;
  }

  .lg\:hover\:border-indigo-lightest:hover {
    border-color: #e6e8ff;
  }

  .lg\:hover\:border-purple-darkest:hover {
    border-color: #21183c;
  }

  .lg\:hover\:border-purple-darker:hover {
    border-color: #382b5f;
  }

  .lg\:hover\:border-purple-dark:hover {
    border-color: #794acf;
  }

  .lg\:hover\:border-purple-light:hover {
    border-color: #a779e9;
  }

  .lg\:hover\:border-purple-lighter:hover {
    border-color: #d6bbfc;
  }

  .lg\:hover\:border-purple-lightest:hover {
    border-color: #f3ebff;
  }

  .lg\:hover\:border-pink-darkest:hover {
    border-color: #451225;
  }

  .lg\:hover\:border-pink-darker:hover {
    border-color: #6f213f;
  }

  .lg\:hover\:border-pink-dark:hover {
    border-color: #eb5286;
  }

  .lg\:hover\:border-pink-light:hover {
    border-color: #fa7ea8;
  }

  .lg\:hover\:border-pink-lighter:hover {
    border-color: #ffbbca;
  }

  .lg\:hover\:border-pink-lightest:hover {
    border-color: #ffebef;
  }

  .lg\:hover\:border-nav:hover {
    border-color: #3F495E;
  }

  .lg\:hover\:border-side-nav:hover {
    border-color: #ECF0F1;
  }

  .lg\:hover\:border-nav-item:hover {
    border-color: #626b7a;
  }

  .lg\:hover\:border-light-border:hover {
    border-color: #dfe4e6;
  }

  .lg\:hover\:border-white-medium:hover {
    border-color: #FAFAFA;
  }

  .lg\:hover\:border-white-medium-dark:hover {
    border-color: #E5E9EB;
  }

  .lg\:hover\:border-red-vibrant:hover {
    border-color: #e46050;
  }

  .lg\:hover\:border-red-vibrant-dark:hover {
    border-color: #d64230;
  }

  .lg\:hover\:border-primary:hover {
    border-color: #51BE99;
  }

  .lg\:hover\:border-primary-dark:hover {
    border-color: #0e5f43;
  }

  .lg\:hover\:border-warning:hover {
    border-color: #f4ab43;
  }

  .lg\:hover\:border-warning-dark:hover {
    border-color: #c37c16;
  }

  .lg\:hover\:border-black-dark:hover {
    border-color: #272634;
  }

  .lg\:hover\:border-black-darkest:hover {
    border-color: #141418;
  }

  .lg\:hover\:border-info:hover {
    border-color: #52bcdc;
  }

  .lg\:hover\:border-info-dark:hover {
    border-color: #2cadd4;
  }

  .lg\:hover\:border-success:hover {
    border-color: #72b159;
  }

  .lg\:hover\:border-success-dark:hover {
    border-color: #5D9547;
  }

  .lg\:hover\:border-transparent:hover {
    border-color: transparent;
  }

  .lg\:hover\:border-black:hover {
    border-color: #000;
  }

  .lg\:hover\:border-white:hover {
    border-color: #fff;
  }

  .lg\:hover\:border-gray-100:hover {
    border-color: #f7fafc;
  }

  .lg\:hover\:border-gray-200:hover {
    border-color: #edf2f7;
  }

  .lg\:hover\:border-gray-300:hover {
    border-color: #e2e8f0;
  }

  .lg\:hover\:border-gray-400:hover {
    border-color: #cbd5e0;
  }

  .lg\:hover\:border-gray-500:hover {
    border-color: #a0aec0;
  }

  .lg\:hover\:border-gray-600:hover {
    border-color: #718096;
  }

  .lg\:hover\:border-gray-700:hover {
    border-color: #4a5568;
  }

  .lg\:hover\:border-gray-800:hover {
    border-color: #2d3748;
  }

  .lg\:hover\:border-gray-900:hover {
    border-color: #1a202c;
  }

  .lg\:hover\:border-red-100:hover {
    border-color: #fff5f5;
  }

  .lg\:hover\:border-red-200:hover {
    border-color: #fed7d7;
  }

  .lg\:hover\:border-red-300:hover {
    border-color: #feb2b2;
  }

  .lg\:hover\:border-red-400:hover {
    border-color: #fc8181;
  }

  .lg\:hover\:border-red-500:hover {
    border-color: #f56565;
  }

  .lg\:hover\:border-red-600:hover {
    border-color: #e53e3e;
  }

  .lg\:hover\:border-red-700:hover {
    border-color: #c53030;
  }

  .lg\:hover\:border-red-800:hover {
    border-color: #9b2c2c;
  }

  .lg\:hover\:border-red-900:hover {
    border-color: #742a2a;
  }

  .lg\:hover\:border-orange-100:hover {
    border-color: #fffaf0;
  }

  .lg\:hover\:border-orange-200:hover {
    border-color: #feebc8;
  }

  .lg\:hover\:border-orange-300:hover {
    border-color: #fbd38d;
  }

  .lg\:hover\:border-orange-400:hover {
    border-color: #f6ad55;
  }

  .lg\:hover\:border-orange-500:hover {
    border-color: #ed8936;
  }

  .lg\:hover\:border-orange-600:hover {
    border-color: #dd6b20;
  }

  .lg\:hover\:border-orange-700:hover {
    border-color: #c05621;
  }

  .lg\:hover\:border-orange-800:hover {
    border-color: #9c4221;
  }

  .lg\:hover\:border-orange-900:hover {
    border-color: #7b341e;
  }

  .lg\:hover\:border-yellow-100:hover {
    border-color: #fffff0;
  }

  .lg\:hover\:border-yellow-200:hover {
    border-color: #fefcbf;
  }

  .lg\:hover\:border-yellow-300:hover {
    border-color: #faf089;
  }

  .lg\:hover\:border-yellow-400:hover {
    border-color: #f6e05e;
  }

  .lg\:hover\:border-yellow-500:hover {
    border-color: #ecc94b;
  }

  .lg\:hover\:border-yellow-600:hover {
    border-color: #d69e2e;
  }

  .lg\:hover\:border-yellow-700:hover {
    border-color: #b7791f;
  }

  .lg\:hover\:border-yellow-800:hover {
    border-color: #975a16;
  }

  .lg\:hover\:border-yellow-900:hover {
    border-color: #744210;
  }

  .lg\:hover\:border-green-100:hover {
    border-color: #f0fff4;
  }

  .lg\:hover\:border-green-200:hover {
    border-color: #c6f6d5;
  }

  .lg\:hover\:border-green-300:hover {
    border-color: #9ae6b4;
  }

  .lg\:hover\:border-green-400:hover {
    border-color: #68d391;
  }

  .lg\:hover\:border-green-500:hover {
    border-color: #48bb78;
  }

  .lg\:hover\:border-green-600:hover {
    border-color: #38a169;
  }

  .lg\:hover\:border-green-700:hover {
    border-color: #2f855a;
  }

  .lg\:hover\:border-green-800:hover {
    border-color: #276749;
  }

  .lg\:hover\:border-green-900:hover {
    border-color: #22543d;
  }

  .lg\:hover\:border-teal-100:hover {
    border-color: #e6fffa;
  }

  .lg\:hover\:border-teal-200:hover {
    border-color: #b2f5ea;
  }

  .lg\:hover\:border-teal-300:hover {
    border-color: #81e6d9;
  }

  .lg\:hover\:border-teal-400:hover {
    border-color: #4fd1c5;
  }

  .lg\:hover\:border-teal-500:hover {
    border-color: #38b2ac;
  }

  .lg\:hover\:border-teal-600:hover {
    border-color: #319795;
  }

  .lg\:hover\:border-teal-700:hover {
    border-color: #2c7a7b;
  }

  .lg\:hover\:border-teal-800:hover {
    border-color: #285e61;
  }

  .lg\:hover\:border-teal-900:hover {
    border-color: #234e52;
  }

  .lg\:hover\:border-blue-100:hover {
    border-color: #ebf8ff;
  }

  .lg\:hover\:border-blue-200:hover {
    border-color: #bee3f8;
  }

  .lg\:hover\:border-blue-300:hover {
    border-color: #90cdf4;
  }

  .lg\:hover\:border-blue-400:hover {
    border-color: #63b3ed;
  }

  .lg\:hover\:border-blue-500:hover {
    border-color: #4299e1;
  }

  .lg\:hover\:border-blue-600:hover {
    border-color: #3182ce;
  }

  .lg\:hover\:border-blue-700:hover {
    border-color: #2b6cb0;
  }

  .lg\:hover\:border-blue-800:hover {
    border-color: #2c5282;
  }

  .lg\:hover\:border-blue-900:hover {
    border-color: #2a4365;
  }

  .lg\:hover\:border-indigo-100:hover {
    border-color: #ebf4ff;
  }

  .lg\:hover\:border-indigo-200:hover {
    border-color: #c3dafe;
  }

  .lg\:hover\:border-indigo-300:hover {
    border-color: #a3bffa;
  }

  .lg\:hover\:border-indigo-400:hover {
    border-color: #7f9cf5;
  }

  .lg\:hover\:border-indigo-500:hover {
    border-color: #667eea;
  }

  .lg\:hover\:border-indigo-600:hover {
    border-color: #5a67d8;
  }

  .lg\:hover\:border-indigo-700:hover {
    border-color: #4c51bf;
  }

  .lg\:hover\:border-indigo-800:hover {
    border-color: #434190;
  }

  .lg\:hover\:border-indigo-900:hover {
    border-color: #3c366b;
  }

  .lg\:hover\:border-purple-100:hover {
    border-color: #faf5ff;
  }

  .lg\:hover\:border-purple-200:hover {
    border-color: #e9d8fd;
  }

  .lg\:hover\:border-purple-300:hover {
    border-color: #d6bcfa;
  }

  .lg\:hover\:border-purple-400:hover {
    border-color: #b794f4;
  }

  .lg\:hover\:border-purple-500:hover {
    border-color: #9f7aea;
  }

  .lg\:hover\:border-purple-600:hover {
    border-color: #805ad5;
  }

  .lg\:hover\:border-purple-700:hover {
    border-color: #6b46c1;
  }

  .lg\:hover\:border-purple-800:hover {
    border-color: #553c9a;
  }

  .lg\:hover\:border-purple-900:hover {
    border-color: #44337a;
  }

  .lg\:hover\:border-pink-100:hover {
    border-color: #fff5f7;
  }

  .lg\:hover\:border-pink-200:hover {
    border-color: #fed7e2;
  }

  .lg\:hover\:border-pink-300:hover {
    border-color: #fbb6ce;
  }

  .lg\:hover\:border-pink-400:hover {
    border-color: #f687b3;
  }

  .lg\:hover\:border-pink-500:hover {
    border-color: #ed64a6;
  }

  .lg\:hover\:border-pink-600:hover {
    border-color: #d53f8c;
  }

  .lg\:hover\:border-pink-700:hover {
    border-color: #b83280;
  }

  .lg\:hover\:border-pink-800:hover {
    border-color: #97266d;
  }

  .lg\:hover\:border-pink-900:hover {
    border-color: #702459;
  }

  .lg\:focus\:border-grey-darkest:focus {
    border-color: #3d4852;
  }

  .lg\:focus\:border-grey-darker:focus {
    border-color: #606f7b;
  }

  .lg\:focus\:border-grey-dark:focus {
    border-color: #8795a1;
  }

  .lg\:focus\:border-grey:focus {
    border-color: #b8c2cc;
  }

  .lg\:focus\:border-grey-light:focus {
    border-color: #dae1e7;
  }

  .lg\:focus\:border-grey-lighter:focus {
    border-color: #f1f5f8;
  }

  .lg\:focus\:border-grey-lightest:focus {
    border-color: #f8fafc;
  }

  .lg\:focus\:border-grey-mid-light:focus {
    border-color: #f3f3f4;
  }

  .lg\:focus\:border-white-lightest:focus {
    border-color: #f4f4f4;
  }

  .lg\:focus\:border-red-darkest:focus {
    border-color: #3b0d0c;
  }

  .lg\:focus\:border-red-darker:focus {
    border-color: #621b18;
  }

  .lg\:focus\:border-red-dark:focus {
    border-color: #cc1f1a;
  }

  .lg\:focus\:border-red-light:focus {
    border-color: #ef5753;
  }

  .lg\:focus\:border-red-lighter:focus {
    border-color: #f9acaa;
  }

  .lg\:focus\:border-red-lightest:focus {
    border-color: #fcebea;
  }

  .lg\:focus\:border-orange-darkest:focus {
    border-color: #462a16;
  }

  .lg\:focus\:border-orange-darker:focus {
    border-color: #613b1f;
  }

  .lg\:focus\:border-orange-dark:focus {
    border-color: #de751f;
  }

  .lg\:focus\:border-orange-light:focus {
    border-color: #faad63;
  }

  .lg\:focus\:border-orange-lighter:focus {
    border-color: #fcd9b6;
  }

  .lg\:focus\:border-orange-lightest:focus {
    border-color: #fff5eb;
  }

  .lg\:focus\:border-yellow-darkest:focus {
    border-color: #453411;
  }

  .lg\:focus\:border-yellow-darker:focus {
    border-color: #684f1d;
  }

  .lg\:focus\:border-yellow-dark:focus {
    border-color: #f2d024;
  }

  .lg\:focus\:border-yellow-light:focus {
    border-color: #fff382;
  }

  .lg\:focus\:border-yellow-lighter:focus {
    border-color: #fff9c2;
  }

  .lg\:focus\:border-yellow-lightest:focus {
    border-color: #fcfbeb;
  }

  .lg\:focus\:border-green-darkest:focus {
    border-color: #0f2f21;
  }

  .lg\:focus\:border-green-darker:focus {
    border-color: #1a4731;
  }

  .lg\:focus\:border-green-dark:focus {
    border-color: #1f9d55;
  }

  .lg\:focus\:border-green-light:focus {
    border-color: #51d88a;
  }

  .lg\:focus\:border-green-lighter:focus {
    border-color: #a2f5bf;
  }

  .lg\:focus\:border-green-lightest:focus {
    border-color: #e3fcec;
  }

  .lg\:focus\:border-teal-darkest:focus {
    border-color: #0d3331;
  }

  .lg\:focus\:border-teal-darker:focus {
    border-color: #20504f;
  }

  .lg\:focus\:border-teal-dark:focus {
    border-color: #38a89d;
  }

  .lg\:focus\:border-teal-light:focus {
    border-color: #64d5ca;
  }

  .lg\:focus\:border-teal-lighter:focus {
    border-color: #a0f0ed;
  }

  .lg\:focus\:border-teal-lightest:focus {
    border-color: #e8fffe;
  }

  .lg\:focus\:border-blue-darkest:focus {
    border-color: #12283a;
  }

  .lg\:focus\:border-blue-darker:focus {
    border-color: #1c3d5a;
  }

  .lg\:focus\:border-blue-dark:focus {
    border-color: #2779bd;
  }

  .lg\:focus\:border-blue-light:focus {
    border-color: #6cb2eb;
  }

  .lg\:focus\:border-blue-lighter:focus {
    border-color: #bcdefa;
  }

  .lg\:focus\:border-blue-lightest:focus {
    border-color: #eff8ff;
  }

  .lg\:focus\:border-indigo-darkest:focus {
    border-color: #191e38;
  }

  .lg\:focus\:border-indigo-darker:focus {
    border-color: #2f365f;
  }

  .lg\:focus\:border-indigo-dark:focus {
    border-color: #5661b3;
  }

  .lg\:focus\:border-indigo-light:focus {
    border-color: #7886d7;
  }

  .lg\:focus\:border-indigo-lighter:focus {
    border-color: #b2b7ff;
  }

  .lg\:focus\:border-indigo-lightest:focus {
    border-color: #e6e8ff;
  }

  .lg\:focus\:border-purple-darkest:focus {
    border-color: #21183c;
  }

  .lg\:focus\:border-purple-darker:focus {
    border-color: #382b5f;
  }

  .lg\:focus\:border-purple-dark:focus {
    border-color: #794acf;
  }

  .lg\:focus\:border-purple-light:focus {
    border-color: #a779e9;
  }

  .lg\:focus\:border-purple-lighter:focus {
    border-color: #d6bbfc;
  }

  .lg\:focus\:border-purple-lightest:focus {
    border-color: #f3ebff;
  }

  .lg\:focus\:border-pink-darkest:focus {
    border-color: #451225;
  }

  .lg\:focus\:border-pink-darker:focus {
    border-color: #6f213f;
  }

  .lg\:focus\:border-pink-dark:focus {
    border-color: #eb5286;
  }

  .lg\:focus\:border-pink-light:focus {
    border-color: #fa7ea8;
  }

  .lg\:focus\:border-pink-lighter:focus {
    border-color: #ffbbca;
  }

  .lg\:focus\:border-pink-lightest:focus {
    border-color: #ffebef;
  }

  .lg\:focus\:border-nav:focus {
    border-color: #3F495E;
  }

  .lg\:focus\:border-side-nav:focus {
    border-color: #ECF0F1;
  }

  .lg\:focus\:border-nav-item:focus {
    border-color: #626b7a;
  }

  .lg\:focus\:border-light-border:focus {
    border-color: #dfe4e6;
  }

  .lg\:focus\:border-white-medium:focus {
    border-color: #FAFAFA;
  }

  .lg\:focus\:border-white-medium-dark:focus {
    border-color: #E5E9EB;
  }

  .lg\:focus\:border-red-vibrant:focus {
    border-color: #e46050;
  }

  .lg\:focus\:border-red-vibrant-dark:focus {
    border-color: #d64230;
  }

  .lg\:focus\:border-primary:focus {
    border-color: #51BE99;
  }

  .lg\:focus\:border-primary-dark:focus {
    border-color: #0e5f43;
  }

  .lg\:focus\:border-warning:focus {
    border-color: #f4ab43;
  }

  .lg\:focus\:border-warning-dark:focus {
    border-color: #c37c16;
  }

  .lg\:focus\:border-black-dark:focus {
    border-color: #272634;
  }

  .lg\:focus\:border-black-darkest:focus {
    border-color: #141418;
  }

  .lg\:focus\:border-info:focus {
    border-color: #52bcdc;
  }

  .lg\:focus\:border-info-dark:focus {
    border-color: #2cadd4;
  }

  .lg\:focus\:border-success:focus {
    border-color: #72b159;
  }

  .lg\:focus\:border-success-dark:focus {
    border-color: #5D9547;
  }

  .lg\:focus\:border-transparent:focus {
    border-color: transparent;
  }

  .lg\:focus\:border-black:focus {
    border-color: #000;
  }

  .lg\:focus\:border-white:focus {
    border-color: #fff;
  }

  .lg\:focus\:border-gray-100:focus {
    border-color: #f7fafc;
  }

  .lg\:focus\:border-gray-200:focus {
    border-color: #edf2f7;
  }

  .lg\:focus\:border-gray-300:focus {
    border-color: #e2e8f0;
  }

  .lg\:focus\:border-gray-400:focus {
    border-color: #cbd5e0;
  }

  .lg\:focus\:border-gray-500:focus {
    border-color: #a0aec0;
  }

  .lg\:focus\:border-gray-600:focus {
    border-color: #718096;
  }

  .lg\:focus\:border-gray-700:focus {
    border-color: #4a5568;
  }

  .lg\:focus\:border-gray-800:focus {
    border-color: #2d3748;
  }

  .lg\:focus\:border-gray-900:focus {
    border-color: #1a202c;
  }

  .lg\:focus\:border-red-100:focus {
    border-color: #fff5f5;
  }

  .lg\:focus\:border-red-200:focus {
    border-color: #fed7d7;
  }

  .lg\:focus\:border-red-300:focus {
    border-color: #feb2b2;
  }

  .lg\:focus\:border-red-400:focus {
    border-color: #fc8181;
  }

  .lg\:focus\:border-red-500:focus {
    border-color: #f56565;
  }

  .lg\:focus\:border-red-600:focus {
    border-color: #e53e3e;
  }

  .lg\:focus\:border-red-700:focus {
    border-color: #c53030;
  }

  .lg\:focus\:border-red-800:focus {
    border-color: #9b2c2c;
  }

  .lg\:focus\:border-red-900:focus {
    border-color: #742a2a;
  }

  .lg\:focus\:border-orange-100:focus {
    border-color: #fffaf0;
  }

  .lg\:focus\:border-orange-200:focus {
    border-color: #feebc8;
  }

  .lg\:focus\:border-orange-300:focus {
    border-color: #fbd38d;
  }

  .lg\:focus\:border-orange-400:focus {
    border-color: #f6ad55;
  }

  .lg\:focus\:border-orange-500:focus {
    border-color: #ed8936;
  }

  .lg\:focus\:border-orange-600:focus {
    border-color: #dd6b20;
  }

  .lg\:focus\:border-orange-700:focus {
    border-color: #c05621;
  }

  .lg\:focus\:border-orange-800:focus {
    border-color: #9c4221;
  }

  .lg\:focus\:border-orange-900:focus {
    border-color: #7b341e;
  }

  .lg\:focus\:border-yellow-100:focus {
    border-color: #fffff0;
  }

  .lg\:focus\:border-yellow-200:focus {
    border-color: #fefcbf;
  }

  .lg\:focus\:border-yellow-300:focus {
    border-color: #faf089;
  }

  .lg\:focus\:border-yellow-400:focus {
    border-color: #f6e05e;
  }

  .lg\:focus\:border-yellow-500:focus {
    border-color: #ecc94b;
  }

  .lg\:focus\:border-yellow-600:focus {
    border-color: #d69e2e;
  }

  .lg\:focus\:border-yellow-700:focus {
    border-color: #b7791f;
  }

  .lg\:focus\:border-yellow-800:focus {
    border-color: #975a16;
  }

  .lg\:focus\:border-yellow-900:focus {
    border-color: #744210;
  }

  .lg\:focus\:border-green-100:focus {
    border-color: #f0fff4;
  }

  .lg\:focus\:border-green-200:focus {
    border-color: #c6f6d5;
  }

  .lg\:focus\:border-green-300:focus {
    border-color: #9ae6b4;
  }

  .lg\:focus\:border-green-400:focus {
    border-color: #68d391;
  }

  .lg\:focus\:border-green-500:focus {
    border-color: #48bb78;
  }

  .lg\:focus\:border-green-600:focus {
    border-color: #38a169;
  }

  .lg\:focus\:border-green-700:focus {
    border-color: #2f855a;
  }

  .lg\:focus\:border-green-800:focus {
    border-color: #276749;
  }

  .lg\:focus\:border-green-900:focus {
    border-color: #22543d;
  }

  .lg\:focus\:border-teal-100:focus {
    border-color: #e6fffa;
  }

  .lg\:focus\:border-teal-200:focus {
    border-color: #b2f5ea;
  }

  .lg\:focus\:border-teal-300:focus {
    border-color: #81e6d9;
  }

  .lg\:focus\:border-teal-400:focus {
    border-color: #4fd1c5;
  }

  .lg\:focus\:border-teal-500:focus {
    border-color: #38b2ac;
  }

  .lg\:focus\:border-teal-600:focus {
    border-color: #319795;
  }

  .lg\:focus\:border-teal-700:focus {
    border-color: #2c7a7b;
  }

  .lg\:focus\:border-teal-800:focus {
    border-color: #285e61;
  }

  .lg\:focus\:border-teal-900:focus {
    border-color: #234e52;
  }

  .lg\:focus\:border-blue-100:focus {
    border-color: #ebf8ff;
  }

  .lg\:focus\:border-blue-200:focus {
    border-color: #bee3f8;
  }

  .lg\:focus\:border-blue-300:focus {
    border-color: #90cdf4;
  }

  .lg\:focus\:border-blue-400:focus {
    border-color: #63b3ed;
  }

  .lg\:focus\:border-blue-500:focus {
    border-color: #4299e1;
  }

  .lg\:focus\:border-blue-600:focus {
    border-color: #3182ce;
  }

  .lg\:focus\:border-blue-700:focus {
    border-color: #2b6cb0;
  }

  .lg\:focus\:border-blue-800:focus {
    border-color: #2c5282;
  }

  .lg\:focus\:border-blue-900:focus {
    border-color: #2a4365;
  }

  .lg\:focus\:border-indigo-100:focus {
    border-color: #ebf4ff;
  }

  .lg\:focus\:border-indigo-200:focus {
    border-color: #c3dafe;
  }

  .lg\:focus\:border-indigo-300:focus {
    border-color: #a3bffa;
  }

  .lg\:focus\:border-indigo-400:focus {
    border-color: #7f9cf5;
  }

  .lg\:focus\:border-indigo-500:focus {
    border-color: #667eea;
  }

  .lg\:focus\:border-indigo-600:focus {
    border-color: #5a67d8;
  }

  .lg\:focus\:border-indigo-700:focus {
    border-color: #4c51bf;
  }

  .lg\:focus\:border-indigo-800:focus {
    border-color: #434190;
  }

  .lg\:focus\:border-indigo-900:focus {
    border-color: #3c366b;
  }

  .lg\:focus\:border-purple-100:focus {
    border-color: #faf5ff;
  }

  .lg\:focus\:border-purple-200:focus {
    border-color: #e9d8fd;
  }

  .lg\:focus\:border-purple-300:focus {
    border-color: #d6bcfa;
  }

  .lg\:focus\:border-purple-400:focus {
    border-color: #b794f4;
  }

  .lg\:focus\:border-purple-500:focus {
    border-color: #9f7aea;
  }

  .lg\:focus\:border-purple-600:focus {
    border-color: #805ad5;
  }

  .lg\:focus\:border-purple-700:focus {
    border-color: #6b46c1;
  }

  .lg\:focus\:border-purple-800:focus {
    border-color: #553c9a;
  }

  .lg\:focus\:border-purple-900:focus {
    border-color: #44337a;
  }

  .lg\:focus\:border-pink-100:focus {
    border-color: #fff5f7;
  }

  .lg\:focus\:border-pink-200:focus {
    border-color: #fed7e2;
  }

  .lg\:focus\:border-pink-300:focus {
    border-color: #fbb6ce;
  }

  .lg\:focus\:border-pink-400:focus {
    border-color: #f687b3;
  }

  .lg\:focus\:border-pink-500:focus {
    border-color: #ed64a6;
  }

  .lg\:focus\:border-pink-600:focus {
    border-color: #d53f8c;
  }

  .lg\:focus\:border-pink-700:focus {
    border-color: #b83280;
  }

  .lg\:focus\:border-pink-800:focus {
    border-color: #97266d;
  }

  .lg\:focus\:border-pink-900:focus {
    border-color: #702459;
  }

  .lg\:rounded-none {
    border-radius: 0;
  }

  .lg\:rounded-sm {
    border-radius: 0.125rem;
  }

  .lg\:rounded {
    border-radius: 0.25rem;
  }

  .lg\:rounded-lg {
    border-radius: 0.5rem;
  }

  .lg\:rounded-full {
    border-radius: 9999px;
  }

  .lg\:rounded-t-none {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }

  .lg\:rounded-r-none {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }

  .lg\:rounded-b-none {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }

  .lg\:rounded-l-none {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }

  .lg\:rounded-t-sm {
    border-top-left-radius: 0.125rem;
    border-top-right-radius: 0.125rem;
  }

  .lg\:rounded-r-sm {
    border-top-right-radius: 0.125rem;
    border-bottom-right-radius: 0.125rem;
  }

  .lg\:rounded-b-sm {
    border-bottom-right-radius: 0.125rem;
    border-bottom-left-radius: 0.125rem;
  }

  .lg\:rounded-l-sm {
    border-top-left-radius: 0.125rem;
    border-bottom-left-radius: 0.125rem;
  }

  .lg\:rounded-t {
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem;
  }

  .lg\:rounded-r {
    border-top-right-radius: 0.25rem;
    border-bottom-right-radius: 0.25rem;
  }

  .lg\:rounded-b {
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
  }

  .lg\:rounded-l {
    border-top-left-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
  }

  .lg\:rounded-t-lg {
    border-top-left-radius: 0.5rem;
    border-top-right-radius: 0.5rem;
  }

  .lg\:rounded-r-lg {
    border-top-right-radius: 0.5rem;
    border-bottom-right-radius: 0.5rem;
  }

  .lg\:rounded-b-lg {
    border-bottom-right-radius: 0.5rem;
    border-bottom-left-radius: 0.5rem;
  }

  .lg\:rounded-l-lg {
    border-top-left-radius: 0.5rem;
    border-bottom-left-radius: 0.5rem;
  }

  .lg\:rounded-t-full {
    border-top-left-radius: 9999px;
    border-top-right-radius: 9999px;
  }

  .lg\:rounded-r-full {
    border-top-right-radius: 9999px;
    border-bottom-right-radius: 9999px;
  }

  .lg\:rounded-b-full {
    border-bottom-right-radius: 9999px;
    border-bottom-left-radius: 9999px;
  }

  .lg\:rounded-l-full {
    border-top-left-radius: 9999px;
    border-bottom-left-radius: 9999px;
  }

  .lg\:rounded-tl-none {
    border-top-left-radius: 0;
  }

  .lg\:rounded-tr-none {
    border-top-right-radius: 0;
  }

  .lg\:rounded-br-none {
    border-bottom-right-radius: 0;
  }

  .lg\:rounded-bl-none {
    border-bottom-left-radius: 0;
  }

  .lg\:rounded-tl-sm {
    border-top-left-radius: 0.125rem;
  }

  .lg\:rounded-tr-sm {
    border-top-right-radius: 0.125rem;
  }

  .lg\:rounded-br-sm {
    border-bottom-right-radius: 0.125rem;
  }

  .lg\:rounded-bl-sm {
    border-bottom-left-radius: 0.125rem;
  }

  .lg\:rounded-tl {
    border-top-left-radius: 0.25rem;
  }

  .lg\:rounded-tr {
    border-top-right-radius: 0.25rem;
  }

  .lg\:rounded-br {
    border-bottom-right-radius: 0.25rem;
  }

  .lg\:rounded-bl {
    border-bottom-left-radius: 0.25rem;
  }

  .lg\:rounded-tl-lg {
    border-top-left-radius: 0.5rem;
  }

  .lg\:rounded-tr-lg {
    border-top-right-radius: 0.5rem;
  }

  .lg\:rounded-br-lg {
    border-bottom-right-radius: 0.5rem;
  }

  .lg\:rounded-bl-lg {
    border-bottom-left-radius: 0.5rem;
  }

  .lg\:rounded-tl-full {
    border-top-left-radius: 9999px;
  }

  .lg\:rounded-tr-full {
    border-top-right-radius: 9999px;
  }

  .lg\:rounded-br-full {
    border-bottom-right-radius: 9999px;
  }

  .lg\:rounded-bl-full {
    border-bottom-left-radius: 9999px;
  }

  .lg\:border-solid {
    border-style: solid;
  }

  .lg\:border-dashed {
    border-style: dashed;
  }

  .lg\:border-dotted {
    border-style: dotted;
  }

  .lg\:border-double {
    border-style: double;
  }

  .lg\:border-none {
    border-style: none;
  }

  .lg\:border-0 {
    border-width: 0;
  }

  .lg\:border-2 {
    border-width: 2px;
  }

  .lg\:border-4 {
    border-width: 4px;
  }

  .lg\:border-8 {
    border-width: 8px;
  }

  .lg\:border {
    border-width: 1px;
  }

  .lg\:border-t-0 {
    border-top-width: 0;
  }

  .lg\:border-r-0 {
    border-right-width: 0;
  }

  .lg\:border-b-0 {
    border-bottom-width: 0;
  }

  .lg\:border-l-0 {
    border-left-width: 0;
  }

  .lg\:border-t-2 {
    border-top-width: 2px;
  }

  .lg\:border-r-2 {
    border-right-width: 2px;
  }

  .lg\:border-b-2 {
    border-bottom-width: 2px;
  }

  .lg\:border-l-2 {
    border-left-width: 2px;
  }

  .lg\:border-t-4 {
    border-top-width: 4px;
  }

  .lg\:border-r-4 {
    border-right-width: 4px;
  }

  .lg\:border-b-4 {
    border-bottom-width: 4px;
  }

  .lg\:border-l-4 {
    border-left-width: 4px;
  }

  .lg\:border-t-8 {
    border-top-width: 8px;
  }

  .lg\:border-r-8 {
    border-right-width: 8px;
  }

  .lg\:border-b-8 {
    border-bottom-width: 8px;
  }

  .lg\:border-l-8 {
    border-left-width: 8px;
  }

  .lg\:border-t {
    border-top-width: 1px;
  }

  .lg\:border-r {
    border-right-width: 1px;
  }

  .lg\:border-b {
    border-bottom-width: 1px;
  }

  .lg\:border-l {
    border-left-width: 1px;
  }

  .lg\:cursor-auto {
    cursor: auto;
  }

  .lg\:cursor-default {
    cursor: default;
  }

  .lg\:cursor-pointer {
    cursor: pointer;
  }

  .lg\:cursor-wait {
    cursor: wait;
  }

  .lg\:cursor-text {
    cursor: text;
  }

  .lg\:cursor-move {
    cursor: move;
  }

  .lg\:cursor-not-allowed {
    cursor: not-allowed;
  }

  .lg\:block {
    display: block;
  }

  .lg\:inline-block {
    display: inline-block;
  }

  .lg\:inline {
    display: inline;
  }

  .lg\:flex {
    display: flex;
  }

  .lg\:inline-flex {
    display: inline-flex;
  }

  .lg\:table {
    display: table;
  }

  .lg\:table-row {
    display: table-row;
  }

  .lg\:table-cell {
    display: table-cell;
  }

  .lg\:hidden {
    display: none;
  }

  .lg\:flex-row {
    flex-direction: row;
  }

  .lg\:flex-row-reverse {
    flex-direction: row-reverse;
  }

  .lg\:flex-col {
    flex-direction: column;
  }

  .lg\:flex-col-reverse {
    flex-direction: column-reverse;
  }

  .lg\:flex-wrap {
    flex-wrap: wrap;
  }

  .lg\:flex-wrap-reverse {
    flex-wrap: wrap-reverse;
  }

  .lg\:flex-no-wrap {
    flex-wrap: nowrap;
  }

  .lg\:items-start {
    align-items: flex-start;
  }

  .lg\:items-end {
    align-items: flex-end;
  }

  .lg\:items-center {
    align-items: center;
  }

  .lg\:items-baseline {
    align-items: baseline;
  }

  .lg\:items-stretch {
    align-items: stretch;
  }

  .lg\:self-auto {
    align-self: auto;
  }

  .lg\:self-start {
    align-self: flex-start;
  }

  .lg\:self-end {
    align-self: flex-end;
  }

  .lg\:self-center {
    align-self: center;
  }

  .lg\:self-stretch {
    align-self: stretch;
  }

  .lg\:justify-start {
    justify-content: flex-start;
  }

  .lg\:justify-end {
    justify-content: flex-end;
  }

  .lg\:justify-center {
    justify-content: center;
  }

  .lg\:justify-between {
    justify-content: space-between;
  }

  .lg\:justify-around {
    justify-content: space-around;
  }

  .lg\:content-center {
    align-content: center;
  }

  .lg\:content-start {
    align-content: flex-start;
  }

  .lg\:content-end {
    align-content: flex-end;
  }

  .lg\:content-between {
    align-content: space-between;
  }

  .lg\:content-around {
    align-content: space-around;
  }

  .lg\:flex-1 {
    flex: 1 1 0%;
  }

  .lg\:flex-auto {
    flex: 1 1 auto;
  }

  .lg\:flex-initial {
    flex: 0 1 auto;
  }

  .lg\:flex-none {
    flex: none;
  }

  .lg\:flex-grow-0 {
    flex-grow: 0;
  }

  .lg\:flex-grow {
    flex-grow: 1;
  }

  .lg\:flex-shrink-0 {
    flex-shrink: 0;
  }

  .lg\:flex-shrink {
    flex-shrink: 1;
  }

  .lg\:order-1 {
    order: 1;
  }

  .lg\:order-2 {
    order: 2;
  }

  .lg\:order-3 {
    order: 3;
  }

  .lg\:order-4 {
    order: 4;
  }

  .lg\:order-5 {
    order: 5;
  }

  .lg\:order-6 {
    order: 6;
  }

  .lg\:order-7 {
    order: 7;
  }

  .lg\:order-8 {
    order: 8;
  }

  .lg\:order-9 {
    order: 9;
  }

  .lg\:order-10 {
    order: 10;
  }

  .lg\:order-11 {
    order: 11;
  }

  .lg\:order-12 {
    order: 12;
  }

  .lg\:order-first {
    order: -9999;
  }

  .lg\:order-last {
    order: 9999;
  }

  .lg\:order-none {
    order: 0;
  }

  .lg\:float-right {
    float: right;
  }

  .lg\:float-left {
    float: left;
  }

  .lg\:float-none {
    float: none;
  }

  .lg\:clearfix:after {
    content: "";
    display: table;
    clear: both;
  }

  .lg\:font-sans {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  }

  .lg\:font-serif {
    font-family: Georgia, Cambria, "Times New Roman", Times, serif;
  }

  .lg\:font-mono {
    font-family: Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  }

  .lg\:font-hairline {
    font-weight: 100;
  }

  .lg\:font-thin {
    font-weight: 200;
  }

  .lg\:font-light {
    font-weight: 300;
  }

  .lg\:font-normal {
    font-weight: 400;
  }

  .lg\:font-medium {
    font-weight: 500;
  }

  .lg\:font-semibold {
    font-weight: 600;
  }

  .lg\:font-bold {
    font-weight: 700;
  }

  .lg\:font-extrabold {
    font-weight: 800;
  }

  .lg\:font-black {
    font-weight: 900;
  }

  .lg\:hover\:font-hairline:hover {
    font-weight: 100;
  }

  .lg\:hover\:font-thin:hover {
    font-weight: 200;
  }

  .lg\:hover\:font-light:hover {
    font-weight: 300;
  }

  .lg\:hover\:font-normal:hover {
    font-weight: 400;
  }

  .lg\:hover\:font-medium:hover {
    font-weight: 500;
  }

  .lg\:hover\:font-semibold:hover {
    font-weight: 600;
  }

  .lg\:hover\:font-bold:hover {
    font-weight: 700;
  }

  .lg\:hover\:font-extrabold:hover {
    font-weight: 800;
  }

  .lg\:hover\:font-black:hover {
    font-weight: 900;
  }

  .lg\:focus\:font-hairline:focus {
    font-weight: 100;
  }

  .lg\:focus\:font-thin:focus {
    font-weight: 200;
  }

  .lg\:focus\:font-light:focus {
    font-weight: 300;
  }

  .lg\:focus\:font-normal:focus {
    font-weight: 400;
  }

  .lg\:focus\:font-medium:focus {
    font-weight: 500;
  }

  .lg\:focus\:font-semibold:focus {
    font-weight: 600;
  }

  .lg\:focus\:font-bold:focus {
    font-weight: 700;
  }

  .lg\:focus\:font-extrabold:focus {
    font-weight: 800;
  }

  .lg\:focus\:font-black:focus {
    font-weight: 900;
  }

  .lg\:h-0 {
    height: 0;
  }

  .lg\:h-1 {
    height: 0.25rem;
  }

  .lg\:h-2 {
    height: 0.5rem;
  }

  .lg\:h-3 {
    height: 0.75rem;
  }

  .lg\:h-4 {
    height: 1rem;
  }

  .lg\:h-5 {
    height: 1.25rem;
  }

  .lg\:h-6 {
    height: 1.5rem;
  }

  .lg\:h-8 {
    height: 2rem;
  }

  .lg\:h-10 {
    height: 2.5rem;
  }

  .lg\:h-12 {
    height: 3rem;
  }

  .lg\:h-16 {
    height: 4rem;
  }

  .lg\:h-20 {
    height: 5rem;
  }

  .lg\:h-24 {
    height: 6rem;
  }

  .lg\:h-32 {
    height: 8rem;
  }

  .lg\:h-40 {
    height: 10rem;
  }

  .lg\:h-48 {
    height: 12rem;
  }

  .lg\:h-56 {
    height: 14rem;
  }

  .lg\:h-64 {
    height: 16rem;
  }

  .lg\:h-auto {
    height: auto;
  }

  .lg\:h-px {
    height: 1px;
  }

  .lg\:h-full {
    height: 100%;
  }

  .lg\:h-screen {
    height: 100vh;
  }

  .lg\:leading-none {
    line-height: 1;
  }

  .lg\:leading-tight {
    line-height: 1.25;
  }

  .lg\:leading-snug {
    line-height: 1.375;
  }

  .lg\:leading-normal {
    line-height: 1.5;
  }

  .lg\:leading-relaxed {
    line-height: 1.625;
  }

  .lg\:leading-loose {
    line-height: 2;
  }

  .lg\:list-inside {
    list-style-position: inside;
  }

  .lg\:list-outside {
    list-style-position: outside;
  }

  .lg\:list-none {
    list-style-type: none;
  }

  .lg\:list-disc {
    list-style-type: disc;
  }

  .lg\:list-decimal {
    list-style-type: decimal;
  }

  .lg\:m-0 {
    margin: 0;
  }

  .lg\:m-1 {
    margin: 0.25rem;
  }

  .lg\:m-2 {
    margin: 0.5rem;
  }

  .lg\:m-3 {
    margin: 0.75rem;
  }

  .lg\:m-4 {
    margin: 1rem;
  }

  .lg\:m-5 {
    margin: 1.25rem;
  }

  .lg\:m-6 {
    margin: 1.5rem;
  }

  .lg\:m-8 {
    margin: 2rem;
  }

  .lg\:m-10 {
    margin: 2.5rem;
  }

  .lg\:m-12 {
    margin: 3rem;
  }

  .lg\:m-16 {
    margin: 4rem;
  }

  .lg\:m-20 {
    margin: 5rem;
  }

  .lg\:m-24 {
    margin: 6rem;
  }

  .lg\:m-32 {
    margin: 8rem;
  }

  .lg\:m-auto {
    margin: auto;
  }

  .lg\:m-px {
    margin: 1px;
  }

  .lg\:-m-px {
    margin: -1px;
  }

  .lg\:-m-1 {
    margin: -0.25rem;
  }

  .lg\:-m-2 {
    margin: -0.5rem;
  }

  .lg\:-m-3 {
    margin: -0.75rem;
  }

  .lg\:-m-4 {
    margin: -1rem;
  }

  .lg\:-m-5 {
    margin: -1.25rem;
  }

  .lg\:-m-6 {
    margin: -1.5rem;
  }

  .lg\:-m-8 {
    margin: -2rem;
  }

  .lg\:-m-10 {
    margin: -2.5rem;
  }

  .lg\:-m-12 {
    margin: -3rem;
  }

  .lg\:-m-16 {
    margin: -4rem;
  }

  .lg\:-m-20 {
    margin: -5rem;
  }

  .lg\:-m-24 {
    margin: -6rem;
  }

  .lg\:-m-32 {
    margin: -8rem;
  }

  .lg\:my-0 {
    margin-top: 0;
    margin-bottom: 0;
  }

  .lg\:mx-0 {
    margin-left: 0;
    margin-right: 0;
  }

  .lg\:my-1 {
    margin-top: 0.25rem;
    margin-bottom: 0.25rem;
  }

  .lg\:mx-1 {
    margin-left: 0.25rem;
    margin-right: 0.25rem;
  }

  .lg\:my-2 {
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
  }

  .lg\:mx-2 {
    margin-left: 0.5rem;
    margin-right: 0.5rem;
  }

  .lg\:my-3 {
    margin-top: 0.75rem;
    margin-bottom: 0.75rem;
  }

  .lg\:mx-3 {
    margin-left: 0.75rem;
    margin-right: 0.75rem;
  }

  .lg\:my-4 {
    margin-top: 1rem;
    margin-bottom: 1rem;
  }

  .lg\:mx-4 {
    margin-left: 1rem;
    margin-right: 1rem;
  }

  .lg\:my-5 {
    margin-top: 1.25rem;
    margin-bottom: 1.25rem;
  }

  .lg\:mx-5 {
    margin-left: 1.25rem;
    margin-right: 1.25rem;
  }

  .lg\:my-6 {
    margin-top: 1.5rem;
    margin-bottom: 1.5rem;
  }

  .lg\:mx-6 {
    margin-left: 1.5rem;
    margin-right: 1.5rem;
  }

  .lg\:my-8 {
    margin-top: 2rem;
    margin-bottom: 2rem;
  }

  .lg\:mx-8 {
    margin-left: 2rem;
    margin-right: 2rem;
  }

  .lg\:my-10 {
    margin-top: 2.5rem;
    margin-bottom: 2.5rem;
  }

  .lg\:mx-10 {
    margin-left: 2.5rem;
    margin-right: 2.5rem;
  }

  .lg\:my-12 {
    margin-top: 3rem;
    margin-bottom: 3rem;
  }

  .lg\:mx-12 {
    margin-left: 3rem;
    margin-right: 3rem;
  }

  .lg\:my-16 {
    margin-top: 4rem;
    margin-bottom: 4rem;
  }

  .lg\:mx-16 {
    margin-left: 4rem;
    margin-right: 4rem;
  }

  .lg\:my-20 {
    margin-top: 5rem;
    margin-bottom: 5rem;
  }

  .lg\:mx-20 {
    margin-left: 5rem;
    margin-right: 5rem;
  }

  .lg\:my-24 {
    margin-top: 6rem;
    margin-bottom: 6rem;
  }

  .lg\:mx-24 {
    margin-left: 6rem;
    margin-right: 6rem;
  }

  .lg\:my-32 {
    margin-top: 8rem;
    margin-bottom: 8rem;
  }

  .lg\:mx-32 {
    margin-left: 8rem;
    margin-right: 8rem;
  }

  .lg\:my-auto {
    margin-top: auto;
    margin-bottom: auto;
  }

  .lg\:mx-auto {
    margin-left: auto;
    margin-right: auto;
  }

  .lg\:my-px {
    margin-top: 1px;
    margin-bottom: 1px;
  }

  .lg\:mx-px {
    margin-left: 1px;
    margin-right: 1px;
  }

  .lg\:-my-px {
    margin-top: -1px;
    margin-bottom: -1px;
  }

  .lg\:-mx-px {
    margin-left: -1px;
    margin-right: -1px;
  }

  .lg\:-my-1 {
    margin-top: -0.25rem;
    margin-bottom: -0.25rem;
  }

  .lg\:-mx-1 {
    margin-left: -0.25rem;
    margin-right: -0.25rem;
  }

  .lg\:-my-2 {
    margin-top: -0.5rem;
    margin-bottom: -0.5rem;
  }

  .lg\:-mx-2 {
    margin-left: -0.5rem;
    margin-right: -0.5rem;
  }

  .lg\:-my-3 {
    margin-top: -0.75rem;
    margin-bottom: -0.75rem;
  }

  .lg\:-mx-3 {
    margin-left: -0.75rem;
    margin-right: -0.75rem;
  }

  .lg\:-my-4 {
    margin-top: -1rem;
    margin-bottom: -1rem;
  }

  .lg\:-mx-4 {
    margin-left: -1rem;
    margin-right: -1rem;
  }

  .lg\:-my-5 {
    margin-top: -1.25rem;
    margin-bottom: -1.25rem;
  }

  .lg\:-mx-5 {
    margin-left: -1.25rem;
    margin-right: -1.25rem;
  }

  .lg\:-my-6 {
    margin-top: -1.5rem;
    margin-bottom: -1.5rem;
  }

  .lg\:-mx-6 {
    margin-left: -1.5rem;
    margin-right: -1.5rem;
  }

  .lg\:-my-8 {
    margin-top: -2rem;
    margin-bottom: -2rem;
  }

  .lg\:-mx-8 {
    margin-left: -2rem;
    margin-right: -2rem;
  }

  .lg\:-my-10 {
    margin-top: -2.5rem;
    margin-bottom: -2.5rem;
  }

  .lg\:-mx-10 {
    margin-left: -2.5rem;
    margin-right: -2.5rem;
  }

  .lg\:-my-12 {
    margin-top: -3rem;
    margin-bottom: -3rem;
  }

  .lg\:-mx-12 {
    margin-left: -3rem;
    margin-right: -3rem;
  }

  .lg\:-my-16 {
    margin-top: -4rem;
    margin-bottom: -4rem;
  }

  .lg\:-mx-16 {
    margin-left: -4rem;
    margin-right: -4rem;
  }

  .lg\:-my-20 {
    margin-top: -5rem;
    margin-bottom: -5rem;
  }

  .lg\:-mx-20 {
    margin-left: -5rem;
    margin-right: -5rem;
  }

  .lg\:-my-24 {
    margin-top: -6rem;
    margin-bottom: -6rem;
  }

  .lg\:-mx-24 {
    margin-left: -6rem;
    margin-right: -6rem;
  }

  .lg\:-my-32 {
    margin-top: -8rem;
    margin-bottom: -8rem;
  }

  .lg\:-mx-32 {
    margin-left: -8rem;
    margin-right: -8rem;
  }

  .lg\:mt-0 {
    margin-top: 0;
  }

  .lg\:mr-0 {
    margin-right: 0;
  }

  .lg\:mb-0 {
    margin-bottom: 0;
  }

  .lg\:ml-0 {
    margin-left: 0;
  }

  .lg\:mt-1 {
    margin-top: 0.25rem;
  }

  .lg\:mr-1 {
    margin-right: 0.25rem;
  }

  .lg\:mb-1 {
    margin-bottom: 0.25rem;
  }

  .lg\:ml-1 {
    margin-left: 0.25rem;
  }

  .lg\:mt-2 {
    margin-top: 0.5rem;
  }

  .lg\:mr-2 {
    margin-right: 0.5rem;
  }

  .lg\:mb-2 {
    margin-bottom: 0.5rem;
  }

  .lg\:ml-2 {
    margin-left: 0.5rem;
  }

  .lg\:mt-3 {
    margin-top: 0.75rem;
  }

  .lg\:mr-3 {
    margin-right: 0.75rem;
  }

  .lg\:mb-3 {
    margin-bottom: 0.75rem;
  }

  .lg\:ml-3 {
    margin-left: 0.75rem;
  }

  .lg\:mt-4 {
    margin-top: 1rem;
  }

  .lg\:mr-4 {
    margin-right: 1rem;
  }

  .lg\:mb-4 {
    margin-bottom: 1rem;
  }

  .lg\:ml-4 {
    margin-left: 1rem;
  }

  .lg\:mt-5 {
    margin-top: 1.25rem;
  }

  .lg\:mr-5 {
    margin-right: 1.25rem;
  }

  .lg\:mb-5 {
    margin-bottom: 1.25rem;
  }

  .lg\:ml-5 {
    margin-left: 1.25rem;
  }

  .lg\:mt-6 {
    margin-top: 1.5rem;
  }

  .lg\:mr-6 {
    margin-right: 1.5rem;
  }

  .lg\:mb-6 {
    margin-bottom: 1.5rem;
  }

  .lg\:ml-6 {
    margin-left: 1.5rem;
  }

  .lg\:mt-8 {
    margin-top: 2rem;
  }

  .lg\:mr-8 {
    margin-right: 2rem;
  }

  .lg\:mb-8 {
    margin-bottom: 2rem;
  }

  .lg\:ml-8 {
    margin-left: 2rem;
  }

  .lg\:mt-10 {
    margin-top: 2.5rem;
  }

  .lg\:mr-10 {
    margin-right: 2.5rem;
  }

  .lg\:mb-10 {
    margin-bottom: 2.5rem;
  }

  .lg\:ml-10 {
    margin-left: 2.5rem;
  }

  .lg\:mt-12 {
    margin-top: 3rem;
  }

  .lg\:mr-12 {
    margin-right: 3rem;
  }

  .lg\:mb-12 {
    margin-bottom: 3rem;
  }

  .lg\:ml-12 {
    margin-left: 3rem;
  }

  .lg\:mt-16 {
    margin-top: 4rem;
  }

  .lg\:mr-16 {
    margin-right: 4rem;
  }

  .lg\:mb-16 {
    margin-bottom: 4rem;
  }

  .lg\:ml-16 {
    margin-left: 4rem;
  }

  .lg\:mt-20 {
    margin-top: 5rem;
  }

  .lg\:mr-20 {
    margin-right: 5rem;
  }

  .lg\:mb-20 {
    margin-bottom: 5rem;
  }

  .lg\:ml-20 {
    margin-left: 5rem;
  }

  .lg\:mt-24 {
    margin-top: 6rem;
  }

  .lg\:mr-24 {
    margin-right: 6rem;
  }

  .lg\:mb-24 {
    margin-bottom: 6rem;
  }

  .lg\:ml-24 {
    margin-left: 6rem;
  }

  .lg\:mt-32 {
    margin-top: 8rem;
  }

  .lg\:mr-32 {
    margin-right: 8rem;
  }

  .lg\:mb-32 {
    margin-bottom: 8rem;
  }

  .lg\:ml-32 {
    margin-left: 8rem;
  }

  .lg\:mt-auto {
    margin-top: auto;
  }

  .lg\:mr-auto {
    margin-right: auto;
  }

  .lg\:mb-auto {
    margin-bottom: auto;
  }

  .lg\:ml-auto {
    margin-left: auto;
  }

  .lg\:mt-px {
    margin-top: 1px;
  }

  .lg\:mr-px {
    margin-right: 1px;
  }

  .lg\:mb-px {
    margin-bottom: 1px;
  }

  .lg\:ml-px {
    margin-left: 1px;
  }

  .lg\:-mt-px {
    margin-top: -1px;
  }

  .lg\:-mr-px {
    margin-right: -1px;
  }

  .lg\:-mb-px {
    margin-bottom: -1px;
  }

  .lg\:-ml-px {
    margin-left: -1px;
  }

  .lg\:-mt-1 {
    margin-top: -0.25rem;
  }

  .lg\:-mr-1 {
    margin-right: -0.25rem;
  }

  .lg\:-mb-1 {
    margin-bottom: -0.25rem;
  }

  .lg\:-ml-1 {
    margin-left: -0.25rem;
  }

  .lg\:-mt-2 {
    margin-top: -0.5rem;
  }

  .lg\:-mr-2 {
    margin-right: -0.5rem;
  }

  .lg\:-mb-2 {
    margin-bottom: -0.5rem;
  }

  .lg\:-ml-2 {
    margin-left: -0.5rem;
  }

  .lg\:-mt-3 {
    margin-top: -0.75rem;
  }

  .lg\:-mr-3 {
    margin-right: -0.75rem;
  }

  .lg\:-mb-3 {
    margin-bottom: -0.75rem;
  }

  .lg\:-ml-3 {
    margin-left: -0.75rem;
  }

  .lg\:-mt-4 {
    margin-top: -1rem;
  }

  .lg\:-mr-4 {
    margin-right: -1rem;
  }

  .lg\:-mb-4 {
    margin-bottom: -1rem;
  }

  .lg\:-ml-4 {
    margin-left: -1rem;
  }

  .lg\:-mt-5 {
    margin-top: -1.25rem;
  }

  .lg\:-mr-5 {
    margin-right: -1.25rem;
  }

  .lg\:-mb-5 {
    margin-bottom: -1.25rem;
  }

  .lg\:-ml-5 {
    margin-left: -1.25rem;
  }

  .lg\:-mt-6 {
    margin-top: -1.5rem;
  }

  .lg\:-mr-6 {
    margin-right: -1.5rem;
  }

  .lg\:-mb-6 {
    margin-bottom: -1.5rem;
  }

  .lg\:-ml-6 {
    margin-left: -1.5rem;
  }

  .lg\:-mt-8 {
    margin-top: -2rem;
  }

  .lg\:-mr-8 {
    margin-right: -2rem;
  }

  .lg\:-mb-8 {
    margin-bottom: -2rem;
  }

  .lg\:-ml-8 {
    margin-left: -2rem;
  }

  .lg\:-mt-10 {
    margin-top: -2.5rem;
  }

  .lg\:-mr-10 {
    margin-right: -2.5rem;
  }

  .lg\:-mb-10 {
    margin-bottom: -2.5rem;
  }

  .lg\:-ml-10 {
    margin-left: -2.5rem;
  }

  .lg\:-mt-12 {
    margin-top: -3rem;
  }

  .lg\:-mr-12 {
    margin-right: -3rem;
  }

  .lg\:-mb-12 {
    margin-bottom: -3rem;
  }

  .lg\:-ml-12 {
    margin-left: -3rem;
  }

  .lg\:-mt-16 {
    margin-top: -4rem;
  }

  .lg\:-mr-16 {
    margin-right: -4rem;
  }

  .lg\:-mb-16 {
    margin-bottom: -4rem;
  }

  .lg\:-ml-16 {
    margin-left: -4rem;
  }

  .lg\:-mt-20 {
    margin-top: -5rem;
  }

  .lg\:-mr-20 {
    margin-right: -5rem;
  }

  .lg\:-mb-20 {
    margin-bottom: -5rem;
  }

  .lg\:-ml-20 {
    margin-left: -5rem;
  }

  .lg\:-mt-24 {
    margin-top: -6rem;
  }

  .lg\:-mr-24 {
    margin-right: -6rem;
  }

  .lg\:-mb-24 {
    margin-bottom: -6rem;
  }

  .lg\:-ml-24 {
    margin-left: -6rem;
  }

  .lg\:-mt-32 {
    margin-top: -8rem;
  }

  .lg\:-mr-32 {
    margin-right: -8rem;
  }

  .lg\:-mb-32 {
    margin-bottom: -8rem;
  }

  .lg\:-ml-32 {
    margin-left: -8rem;
  }

  .lg\:max-h-full {
    max-height: 100%;
  }

  .lg\:max-h-screen {
    max-height: 100vh;
  }

  .lg\:max-w-xs {
    max-width: 20rem;
  }

  .lg\:max-w-sm {
    max-width: 24rem;
  }

  .lg\:max-w-md {
    max-width: 28rem;
  }

  .lg\:max-w-lg {
    max-width: 32rem;
  }

  .lg\:max-w-xl {
    max-width: 36rem;
  }

  .lg\:max-w-2xl {
    max-width: 42rem;
  }

  .lg\:max-w-3xl {
    max-width: 48rem;
  }

  .lg\:max-w-4xl {
    max-width: 56rem;
  }

  .lg\:max-w-5xl {
    max-width: 64rem;
  }

  .lg\:max-w-6xl {
    max-width: 72rem;
  }

  .lg\:max-w-full {
    max-width: 100%;
  }

  .lg\:min-h-0 {
    min-height: 0;
  }

  .lg\:min-h-full {
    min-height: 100%;
  }

  .lg\:min-h-screen {
    min-height: 100vh;
  }

  .lg\:min-w-0 {
    min-width: 0;
  }

  .lg\:min-w-full {
    min-width: 100%;
  }

  .lg\:object-contain {
    object-fit: contain;
  }

  .lg\:object-cover {
    object-fit: cover;
  }

  .lg\:object-fill {
    object-fit: fill;
  }

  .lg\:object-none {
    object-fit: none;
  }

  .lg\:object-scale-down {
    object-fit: scale-down;
  }

  .lg\:object-bottom {
    object-position: bottom;
  }

  .lg\:object-center {
    object-position: center;
  }

  .lg\:object-left {
    object-position: left;
  }

  .lg\:object-left-bottom {
    object-position: left bottom;
  }

  .lg\:object-left-top {
    object-position: left top;
  }

  .lg\:object-right {
    object-position: right;
  }

  .lg\:object-right-bottom {
    object-position: right bottom;
  }

  .lg\:object-right-top {
    object-position: right top;
  }

  .lg\:object-top {
    object-position: top;
  }

  .lg\:opacity-0 {
    opacity: 0;
  }

  .lg\:opacity-25 {
    opacity: 0.25;
  }

  .lg\:opacity-50 {
    opacity: 0.5;
  }

  .lg\:opacity-75 {
    opacity: 0.75;
  }

  .lg\:opacity-100 {
    opacity: 1;
  }

  .lg\:hover\:opacity-0:hover {
    opacity: 0;
  }

  .lg\:hover\:opacity-25:hover {
    opacity: 0.25;
  }

  .lg\:hover\:opacity-50:hover {
    opacity: 0.5;
  }

  .lg\:hover\:opacity-75:hover {
    opacity: 0.75;
  }

  .lg\:hover\:opacity-100:hover {
    opacity: 1;
  }

  .lg\:focus\:opacity-0:focus {
    opacity: 0;
  }

  .lg\:focus\:opacity-25:focus {
    opacity: 0.25;
  }

  .lg\:focus\:opacity-50:focus {
    opacity: 0.5;
  }

  .lg\:focus\:opacity-75:focus {
    opacity: 0.75;
  }

  .lg\:focus\:opacity-100:focus {
    opacity: 1;
  }

  .lg\:outline-none {
    outline: 0;
  }

  .lg\:focus\:outline-none:focus {
    outline: 0;
  }

  .lg\:overflow-auto {
    overflow: auto;
  }

  .lg\:overflow-hidden {
    overflow: hidden;
  }

  .lg\:overflow-visible {
    overflow: visible;
  }

  .lg\:overflow-scroll {
    overflow: scroll;
  }

  .lg\:overflow-x-auto {
    overflow-x: auto;
  }

  .lg\:overflow-y-auto {
    overflow-y: auto;
  }

  .lg\:overflow-x-hidden {
    overflow-x: hidden;
  }

  .lg\:overflow-y-hidden {
    overflow-y: hidden;
  }

  .lg\:overflow-x-visible {
    overflow-x: visible;
  }

  .lg\:overflow-y-visible {
    overflow-y: visible;
  }

  .lg\:overflow-x-scroll {
    overflow-x: scroll;
  }

  .lg\:overflow-y-scroll {
    overflow-y: scroll;
  }

  .lg\:scrolling-touch {
    -webkit-overflow-scrolling: touch;
  }

  .lg\:scrolling-auto {
    -webkit-overflow-scrolling: auto;
  }

  .lg\:p-0 {
    padding: 0;
  }

  .lg\:p-1 {
    padding: 0.25rem;
  }

  .lg\:p-2 {
    padding: 0.5rem;
  }

  .lg\:p-3 {
    padding: 0.75rem;
  }

  .lg\:p-4 {
    padding: 1rem;
  }

  .lg\:p-5 {
    padding: 1.25rem;
  }

  .lg\:p-6 {
    padding: 1.5rem;
  }

  .lg\:p-8 {
    padding: 2rem;
  }

  .lg\:p-10 {
    padding: 2.5rem;
  }

  .lg\:p-12 {
    padding: 3rem;
  }

  .lg\:p-16 {
    padding: 4rem;
  }

  .lg\:p-20 {
    padding: 5rem;
  }

  .lg\:p-24 {
    padding: 6rem;
  }

  .lg\:p-32 {
    padding: 8rem;
  }

  .lg\:p-40 {
    padding: 10rem;
  }

  .lg\:p-48 {
    padding: 12rem;
  }

  .lg\:p-56 {
    padding: 14rem;
  }

  .lg\:p-64 {
    padding: 16rem;
  }

  .lg\:p-px {
    padding: 1px;
  }

  .lg\:py-0 {
    padding-top: 0;
    padding-bottom: 0;
  }

  .lg\:px-0 {
    padding-left: 0;
    padding-right: 0;
  }

  .lg\:py-1 {
    padding-top: 0.25rem;
    padding-bottom: 0.25rem;
  }

  .lg\:px-1 {
    padding-left: 0.25rem;
    padding-right: 0.25rem;
  }

  .lg\:py-2 {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
  }

  .lg\:px-2 {
    padding-left: 0.5rem;
    padding-right: 0.5rem;
  }

  .lg\:py-3 {
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
  }

  .lg\:px-3 {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }

  .lg\:py-4 {
    padding-top: 1rem;
    padding-bottom: 1rem;
  }

  .lg\:px-4 {
    padding-left: 1rem;
    padding-right: 1rem;
  }

  .lg\:py-5 {
    padding-top: 1.25rem;
    padding-bottom: 1.25rem;
  }

  .lg\:px-5 {
    padding-left: 1.25rem;
    padding-right: 1.25rem;
  }

  .lg\:py-6 {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
  }

  .lg\:px-6 {
    padding-left: 1.5rem;
    padding-right: 1.5rem;
  }

  .lg\:py-8 {
    padding-top: 2rem;
    padding-bottom: 2rem;
  }

  .lg\:px-8 {
    padding-left: 2rem;
    padding-right: 2rem;
  }

  .lg\:py-10 {
    padding-top: 2.5rem;
    padding-bottom: 2.5rem;
  }

  .lg\:px-10 {
    padding-left: 2.5rem;
    padding-right: 2.5rem;
  }

  .lg\:py-12 {
    padding-top: 3rem;
    padding-bottom: 3rem;
  }

  .lg\:px-12 {
    padding-left: 3rem;
    padding-right: 3rem;
  }

  .lg\:py-16 {
    padding-top: 4rem;
    padding-bottom: 4rem;
  }

  .lg\:px-16 {
    padding-left: 4rem;
    padding-right: 4rem;
  }

  .lg\:py-20 {
    padding-top: 5rem;
    padding-bottom: 5rem;
  }

  .lg\:px-20 {
    padding-left: 5rem;
    padding-right: 5rem;
  }

  .lg\:py-24 {
    padding-top: 6rem;
    padding-bottom: 6rem;
  }

  .lg\:px-24 {
    padding-left: 6rem;
    padding-right: 6rem;
  }

  .lg\:py-32 {
    padding-top: 8rem;
    padding-bottom: 8rem;
  }

  .lg\:px-32 {
    padding-left: 8rem;
    padding-right: 8rem;
  }

  .lg\:py-40 {
    padding-top: 10rem;
    padding-bottom: 10rem;
  }

  .lg\:px-40 {
    padding-left: 10rem;
    padding-right: 10rem;
  }

  .lg\:py-48 {
    padding-top: 12rem;
    padding-bottom: 12rem;
  }

  .lg\:px-48 {
    padding-left: 12rem;
    padding-right: 12rem;
  }

  .lg\:py-56 {
    padding-top: 14rem;
    padding-bottom: 14rem;
  }

  .lg\:px-56 {
    padding-left: 14rem;
    padding-right: 14rem;
  }

  .lg\:py-64 {
    padding-top: 16rem;
    padding-bottom: 16rem;
  }

  .lg\:px-64 {
    padding-left: 16rem;
    padding-right: 16rem;
  }

  .lg\:py-px {
    padding-top: 1px;
    padding-bottom: 1px;
  }

  .lg\:px-px {
    padding-left: 1px;
    padding-right: 1px;
  }

  .lg\:pt-0 {
    padding-top: 0;
  }

  .lg\:pr-0 {
    padding-right: 0;
  }

  .lg\:pb-0 {
    padding-bottom: 0;
  }

  .lg\:pl-0 {
    padding-left: 0;
  }

  .lg\:pt-1 {
    padding-top: 0.25rem;
  }

  .lg\:pr-1 {
    padding-right: 0.25rem;
  }

  .lg\:pb-1 {
    padding-bottom: 0.25rem;
  }

  .lg\:pl-1 {
    padding-left: 0.25rem;
  }

  .lg\:pt-2 {
    padding-top: 0.5rem;
  }

  .lg\:pr-2 {
    padding-right: 0.5rem;
  }

  .lg\:pb-2 {
    padding-bottom: 0.5rem;
  }

  .lg\:pl-2 {
    padding-left: 0.5rem;
  }

  .lg\:pt-3 {
    padding-top: 0.75rem;
  }

  .lg\:pr-3 {
    padding-right: 0.75rem;
  }

  .lg\:pb-3 {
    padding-bottom: 0.75rem;
  }

  .lg\:pl-3 {
    padding-left: 0.75rem;
  }

  .lg\:pt-4 {
    padding-top: 1rem;
  }

  .lg\:pr-4 {
    padding-right: 1rem;
  }

  .lg\:pb-4 {
    padding-bottom: 1rem;
  }

  .lg\:pl-4 {
    padding-left: 1rem;
  }

  .lg\:pt-5 {
    padding-top: 1.25rem;
  }

  .lg\:pr-5 {
    padding-right: 1.25rem;
  }

  .lg\:pb-5 {
    padding-bottom: 1.25rem;
  }

  .lg\:pl-5 {
    padding-left: 1.25rem;
  }

  .lg\:pt-6 {
    padding-top: 1.5rem;
  }

  .lg\:pr-6 {
    padding-right: 1.5rem;
  }

  .lg\:pb-6 {
    padding-bottom: 1.5rem;
  }

  .lg\:pl-6 {
    padding-left: 1.5rem;
  }

  .lg\:pt-8 {
    padding-top: 2rem;
  }

  .lg\:pr-8 {
    padding-right: 2rem;
  }

  .lg\:pb-8 {
    padding-bottom: 2rem;
  }

  .lg\:pl-8 {
    padding-left: 2rem;
  }

  .lg\:pt-10 {
    padding-top: 2.5rem;
  }

  .lg\:pr-10 {
    padding-right: 2.5rem;
  }

  .lg\:pb-10 {
    padding-bottom: 2.5rem;
  }

  .lg\:pl-10 {
    padding-left: 2.5rem;
  }

  .lg\:pt-12 {
    padding-top: 3rem;
  }

  .lg\:pr-12 {
    padding-right: 3rem;
  }

  .lg\:pb-12 {
    padding-bottom: 3rem;
  }

  .lg\:pl-12 {
    padding-left: 3rem;
  }

  .lg\:pt-16 {
    padding-top: 4rem;
  }

  .lg\:pr-16 {
    padding-right: 4rem;
  }

  .lg\:pb-16 {
    padding-bottom: 4rem;
  }

  .lg\:pl-16 {
    padding-left: 4rem;
  }

  .lg\:pt-20 {
    padding-top: 5rem;
  }

  .lg\:pr-20 {
    padding-right: 5rem;
  }

  .lg\:pb-20 {
    padding-bottom: 5rem;
  }

  .lg\:pl-20 {
    padding-left: 5rem;
  }

  .lg\:pt-24 {
    padding-top: 6rem;
  }

  .lg\:pr-24 {
    padding-right: 6rem;
  }

  .lg\:pb-24 {
    padding-bottom: 6rem;
  }

  .lg\:pl-24 {
    padding-left: 6rem;
  }

  .lg\:pt-32 {
    padding-top: 8rem;
  }

  .lg\:pr-32 {
    padding-right: 8rem;
  }

  .lg\:pb-32 {
    padding-bottom: 8rem;
  }

  .lg\:pl-32 {
    padding-left: 8rem;
  }

  .lg\:pt-40 {
    padding-top: 10rem;
  }

  .lg\:pr-40 {
    padding-right: 10rem;
  }

  .lg\:pb-40 {
    padding-bottom: 10rem;
  }

  .lg\:pl-40 {
    padding-left: 10rem;
  }

  .lg\:pt-48 {
    padding-top: 12rem;
  }

  .lg\:pr-48 {
    padding-right: 12rem;
  }

  .lg\:pb-48 {
    padding-bottom: 12rem;
  }

  .lg\:pl-48 {
    padding-left: 12rem;
  }

  .lg\:pt-56 {
    padding-top: 14rem;
  }

  .lg\:pr-56 {
    padding-right: 14rem;
  }

  .lg\:pb-56 {
    padding-bottom: 14rem;
  }

  .lg\:pl-56 {
    padding-left: 14rem;
  }

  .lg\:pt-64 {
    padding-top: 16rem;
  }

  .lg\:pr-64 {
    padding-right: 16rem;
  }

  .lg\:pb-64 {
    padding-bottom: 16rem;
  }

  .lg\:pl-64 {
    padding-left: 16rem;
  }

  .lg\:pt-px {
    padding-top: 1px;
  }

  .lg\:pr-px {
    padding-right: 1px;
  }

  .lg\:pb-px {
    padding-bottom: 1px;
  }

  .lg\:pl-px {
    padding-left: 1px;
  }

  .lg\:placeholder-grey-darkest::placeholder {
    color: #3d4852;
  }

  .lg\:placeholder-grey-darker::placeholder {
    color: #606f7b;
  }

  .lg\:placeholder-grey-dark::placeholder {
    color: #8795a1;
  }

  .lg\:placeholder-grey::placeholder {
    color: #b8c2cc;
  }

  .lg\:placeholder-grey-light::placeholder {
    color: #dae1e7;
  }

  .lg\:placeholder-grey-lighter::placeholder {
    color: #f1f5f8;
  }

  .lg\:placeholder-grey-lightest::placeholder {
    color: #f8fafc;
  }

  .lg\:placeholder-grey-mid-light::placeholder {
    color: #f3f3f4;
  }

  .lg\:placeholder-white-lightest::placeholder {
    color: #f4f4f4;
  }

  .lg\:placeholder-red-darkest::placeholder {
    color: #3b0d0c;
  }

  .lg\:placeholder-red-darker::placeholder {
    color: #621b18;
  }

  .lg\:placeholder-red-dark::placeholder {
    color: #cc1f1a;
  }

  .lg\:placeholder-red-light::placeholder {
    color: #ef5753;
  }

  .lg\:placeholder-red-lighter::placeholder {
    color: #f9acaa;
  }

  .lg\:placeholder-red-lightest::placeholder {
    color: #fcebea;
  }

  .lg\:placeholder-orange-darkest::placeholder {
    color: #462a16;
  }

  .lg\:placeholder-orange-darker::placeholder {
    color: #613b1f;
  }

  .lg\:placeholder-orange-dark::placeholder {
    color: #de751f;
  }

  .lg\:placeholder-orange-light::placeholder {
    color: #faad63;
  }

  .lg\:placeholder-orange-lighter::placeholder {
    color: #fcd9b6;
  }

  .lg\:placeholder-orange-lightest::placeholder {
    color: #fff5eb;
  }

  .lg\:placeholder-yellow-darkest::placeholder {
    color: #453411;
  }

  .lg\:placeholder-yellow-darker::placeholder {
    color: #684f1d;
  }

  .lg\:placeholder-yellow-dark::placeholder {
    color: #f2d024;
  }

  .lg\:placeholder-yellow-light::placeholder {
    color: #fff382;
  }

  .lg\:placeholder-yellow-lighter::placeholder {
    color: #fff9c2;
  }

  .lg\:placeholder-yellow-lightest::placeholder {
    color: #fcfbeb;
  }

  .lg\:placeholder-green-darkest::placeholder {
    color: #0f2f21;
  }

  .lg\:placeholder-green-darker::placeholder {
    color: #1a4731;
  }

  .lg\:placeholder-green-dark::placeholder {
    color: #1f9d55;
  }

  .lg\:placeholder-green-light::placeholder {
    color: #51d88a;
  }

  .lg\:placeholder-green-lighter::placeholder {
    color: #a2f5bf;
  }

  .lg\:placeholder-green-lightest::placeholder {
    color: #e3fcec;
  }

  .lg\:placeholder-teal-darkest::placeholder {
    color: #0d3331;
  }

  .lg\:placeholder-teal-darker::placeholder {
    color: #20504f;
  }

  .lg\:placeholder-teal-dark::placeholder {
    color: #38a89d;
  }

  .lg\:placeholder-teal-light::placeholder {
    color: #64d5ca;
  }

  .lg\:placeholder-teal-lighter::placeholder {
    color: #a0f0ed;
  }

  .lg\:placeholder-teal-lightest::placeholder {
    color: #e8fffe;
  }

  .lg\:placeholder-blue-darkest::placeholder {
    color: #12283a;
  }

  .lg\:placeholder-blue-darker::placeholder {
    color: #1c3d5a;
  }

  .lg\:placeholder-blue-dark::placeholder {
    color: #2779bd;
  }

  .lg\:placeholder-blue-light::placeholder {
    color: #6cb2eb;
  }

  .lg\:placeholder-blue-lighter::placeholder {
    color: #bcdefa;
  }

  .lg\:placeholder-blue-lightest::placeholder {
    color: #eff8ff;
  }

  .lg\:placeholder-indigo-darkest::placeholder {
    color: #191e38;
  }

  .lg\:placeholder-indigo-darker::placeholder {
    color: #2f365f;
  }

  .lg\:placeholder-indigo-dark::placeholder {
    color: #5661b3;
  }

  .lg\:placeholder-indigo-light::placeholder {
    color: #7886d7;
  }

  .lg\:placeholder-indigo-lighter::placeholder {
    color: #b2b7ff;
  }

  .lg\:placeholder-indigo-lightest::placeholder {
    color: #e6e8ff;
  }

  .lg\:placeholder-purple-darkest::placeholder {
    color: #21183c;
  }

  .lg\:placeholder-purple-darker::placeholder {
    color: #382b5f;
  }

  .lg\:placeholder-purple-dark::placeholder {
    color: #794acf;
  }

  .lg\:placeholder-purple-light::placeholder {
    color: #a779e9;
  }

  .lg\:placeholder-purple-lighter::placeholder {
    color: #d6bbfc;
  }

  .lg\:placeholder-purple-lightest::placeholder {
    color: #f3ebff;
  }

  .lg\:placeholder-pink-darkest::placeholder {
    color: #451225;
  }

  .lg\:placeholder-pink-darker::placeholder {
    color: #6f213f;
  }

  .lg\:placeholder-pink-dark::placeholder {
    color: #eb5286;
  }

  .lg\:placeholder-pink-light::placeholder {
    color: #fa7ea8;
  }

  .lg\:placeholder-pink-lighter::placeholder {
    color: #ffbbca;
  }

  .lg\:placeholder-pink-lightest::placeholder {
    color: #ffebef;
  }

  .lg\:placeholder-nav::placeholder {
    color: #3F495E;
  }

  .lg\:placeholder-side-nav::placeholder {
    color: #ECF0F1;
  }

  .lg\:placeholder-nav-item::placeholder {
    color: #626b7a;
  }

  .lg\:placeholder-light-border::placeholder {
    color: #dfe4e6;
  }

  .lg\:placeholder-white-medium::placeholder {
    color: #FAFAFA;
  }

  .lg\:placeholder-white-medium-dark::placeholder {
    color: #E5E9EB;
  }

  .lg\:placeholder-red-vibrant::placeholder {
    color: #e46050;
  }

  .lg\:placeholder-red-vibrant-dark::placeholder {
    color: #d64230;
  }

  .lg\:placeholder-primary::placeholder {
    color: #51BE99;
  }

  .lg\:placeholder-primary-dark::placeholder {
    color: #0e5f43;
  }

  .lg\:placeholder-warning::placeholder {
    color: #f4ab43;
  }

  .lg\:placeholder-warning-dark::placeholder {
    color: #c37c16;
  }

  .lg\:placeholder-black-dark::placeholder {
    color: #272634;
  }

  .lg\:placeholder-black-darkest::placeholder {
    color: #141418;
  }

  .lg\:placeholder-info::placeholder {
    color: #52bcdc;
  }

  .lg\:placeholder-info-dark::placeholder {
    color: #2cadd4;
  }

  .lg\:placeholder-success::placeholder {
    color: #72b159;
  }

  .lg\:placeholder-success-dark::placeholder {
    color: #5D9547;
  }

  .lg\:placeholder-transparent::placeholder {
    color: transparent;
  }

  .lg\:placeholder-black::placeholder {
    color: #000;
  }

  .lg\:placeholder-white::placeholder {
    color: #fff;
  }

  .lg\:placeholder-gray-100::placeholder {
    color: #f7fafc;
  }

  .lg\:placeholder-gray-200::placeholder {
    color: #edf2f7;
  }

  .lg\:placeholder-gray-300::placeholder {
    color: #e2e8f0;
  }

  .lg\:placeholder-gray-400::placeholder {
    color: #cbd5e0;
  }

  .lg\:placeholder-gray-500::placeholder {
    color: #a0aec0;
  }

  .lg\:placeholder-gray-600::placeholder {
    color: #718096;
  }

  .lg\:placeholder-gray-700::placeholder {
    color: #4a5568;
  }

  .lg\:placeholder-gray-800::placeholder {
    color: #2d3748;
  }

  .lg\:placeholder-gray-900::placeholder {
    color: #1a202c;
  }

  .lg\:placeholder-red-100::placeholder {
    color: #fff5f5;
  }

  .lg\:placeholder-red-200::placeholder {
    color: #fed7d7;
  }

  .lg\:placeholder-red-300::placeholder {
    color: #feb2b2;
  }

  .lg\:placeholder-red-400::placeholder {
    color: #fc8181;
  }

  .lg\:placeholder-red-500::placeholder {
    color: #f56565;
  }

  .lg\:placeholder-red-600::placeholder {
    color: #e53e3e;
  }

  .lg\:placeholder-red-700::placeholder {
    color: #c53030;
  }

  .lg\:placeholder-red-800::placeholder {
    color: #9b2c2c;
  }

  .lg\:placeholder-red-900::placeholder {
    color: #742a2a;
  }

  .lg\:placeholder-orange-100::placeholder {
    color: #fffaf0;
  }

  .lg\:placeholder-orange-200::placeholder {
    color: #feebc8;
  }

  .lg\:placeholder-orange-300::placeholder {
    color: #fbd38d;
  }

  .lg\:placeholder-orange-400::placeholder {
    color: #f6ad55;
  }

  .lg\:placeholder-orange-500::placeholder {
    color: #ed8936;
  }

  .lg\:placeholder-orange-600::placeholder {
    color: #dd6b20;
  }

  .lg\:placeholder-orange-700::placeholder {
    color: #c05621;
  }

  .lg\:placeholder-orange-800::placeholder {
    color: #9c4221;
  }

  .lg\:placeholder-orange-900::placeholder {
    color: #7b341e;
  }

  .lg\:placeholder-yellow-100::placeholder {
    color: #fffff0;
  }

  .lg\:placeholder-yellow-200::placeholder {
    color: #fefcbf;
  }

  .lg\:placeholder-yellow-300::placeholder {
    color: #faf089;
  }

  .lg\:placeholder-yellow-400::placeholder {
    color: #f6e05e;
  }

  .lg\:placeholder-yellow-500::placeholder {
    color: #ecc94b;
  }

  .lg\:placeholder-yellow-600::placeholder {
    color: #d69e2e;
  }

  .lg\:placeholder-yellow-700::placeholder {
    color: #b7791f;
  }

  .lg\:placeholder-yellow-800::placeholder {
    color: #975a16;
  }

  .lg\:placeholder-yellow-900::placeholder {
    color: #744210;
  }

  .lg\:placeholder-green-100::placeholder {
    color: #f0fff4;
  }

  .lg\:placeholder-green-200::placeholder {
    color: #c6f6d5;
  }

  .lg\:placeholder-green-300::placeholder {
    color: #9ae6b4;
  }

  .lg\:placeholder-green-400::placeholder {
    color: #68d391;
  }

  .lg\:placeholder-green-500::placeholder {
    color: #48bb78;
  }

  .lg\:placeholder-green-600::placeholder {
    color: #38a169;
  }

  .lg\:placeholder-green-700::placeholder {
    color: #2f855a;
  }

  .lg\:placeholder-green-800::placeholder {
    color: #276749;
  }

  .lg\:placeholder-green-900::placeholder {
    color: #22543d;
  }

  .lg\:placeholder-teal-100::placeholder {
    color: #e6fffa;
  }

  .lg\:placeholder-teal-200::placeholder {
    color: #b2f5ea;
  }

  .lg\:placeholder-teal-300::placeholder {
    color: #81e6d9;
  }

  .lg\:placeholder-teal-400::placeholder {
    color: #4fd1c5;
  }

  .lg\:placeholder-teal-500::placeholder {
    color: #38b2ac;
  }

  .lg\:placeholder-teal-600::placeholder {
    color: #319795;
  }

  .lg\:placeholder-teal-700::placeholder {
    color: #2c7a7b;
  }

  .lg\:placeholder-teal-800::placeholder {
    color: #285e61;
  }

  .lg\:placeholder-teal-900::placeholder {
    color: #234e52;
  }

  .lg\:placeholder-blue-100::placeholder {
    color: #ebf8ff;
  }

  .lg\:placeholder-blue-200::placeholder {
    color: #bee3f8;
  }

  .lg\:placeholder-blue-300::placeholder {
    color: #90cdf4;
  }

  .lg\:placeholder-blue-400::placeholder {
    color: #63b3ed;
  }

  .lg\:placeholder-blue-500::placeholder {
    color: #4299e1;
  }

  .lg\:placeholder-blue-600::placeholder {
    color: #3182ce;
  }

  .lg\:placeholder-blue-700::placeholder {
    color: #2b6cb0;
  }

  .lg\:placeholder-blue-800::placeholder {
    color: #2c5282;
  }

  .lg\:placeholder-blue-900::placeholder {
    color: #2a4365;
  }

  .lg\:placeholder-indigo-100::placeholder {
    color: #ebf4ff;
  }

  .lg\:placeholder-indigo-200::placeholder {
    color: #c3dafe;
  }

  .lg\:placeholder-indigo-300::placeholder {
    color: #a3bffa;
  }

  .lg\:placeholder-indigo-400::placeholder {
    color: #7f9cf5;
  }

  .lg\:placeholder-indigo-500::placeholder {
    color: #667eea;
  }

  .lg\:placeholder-indigo-600::placeholder {
    color: #5a67d8;
  }

  .lg\:placeholder-indigo-700::placeholder {
    color: #4c51bf;
  }

  .lg\:placeholder-indigo-800::placeholder {
    color: #434190;
  }

  .lg\:placeholder-indigo-900::placeholder {
    color: #3c366b;
  }

  .lg\:placeholder-purple-100::placeholder {
    color: #faf5ff;
  }

  .lg\:placeholder-purple-200::placeholder {
    color: #e9d8fd;
  }

  .lg\:placeholder-purple-300::placeholder {
    color: #d6bcfa;
  }

  .lg\:placeholder-purple-400::placeholder {
    color: #b794f4;
  }

  .lg\:placeholder-purple-500::placeholder {
    color: #9f7aea;
  }

  .lg\:placeholder-purple-600::placeholder {
    color: #805ad5;
  }

  .lg\:placeholder-purple-700::placeholder {
    color: #6b46c1;
  }

  .lg\:placeholder-purple-800::placeholder {
    color: #553c9a;
  }

  .lg\:placeholder-purple-900::placeholder {
    color: #44337a;
  }

  .lg\:placeholder-pink-100::placeholder {
    color: #fff5f7;
  }

  .lg\:placeholder-pink-200::placeholder {
    color: #fed7e2;
  }

  .lg\:placeholder-pink-300::placeholder {
    color: #fbb6ce;
  }

  .lg\:placeholder-pink-400::placeholder {
    color: #f687b3;
  }

  .lg\:placeholder-pink-500::placeholder {
    color: #ed64a6;
  }

  .lg\:placeholder-pink-600::placeholder {
    color: #d53f8c;
  }

  .lg\:placeholder-pink-700::placeholder {
    color: #b83280;
  }

  .lg\:placeholder-pink-800::placeholder {
    color: #97266d;
  }

  .lg\:placeholder-pink-900::placeholder {
    color: #702459;
  }

  .lg\:focus\:placeholder-grey-darkest:focus::placeholder {
    color: #3d4852;
  }

  .lg\:focus\:placeholder-grey-darker:focus::placeholder {
    color: #606f7b;
  }

  .lg\:focus\:placeholder-grey-dark:focus::placeholder {
    color: #8795a1;
  }

  .lg\:focus\:placeholder-grey:focus::placeholder {
    color: #b8c2cc;
  }

  .lg\:focus\:placeholder-grey-light:focus::placeholder {
    color: #dae1e7;
  }

  .lg\:focus\:placeholder-grey-lighter:focus::placeholder {
    color: #f1f5f8;
  }

  .lg\:focus\:placeholder-grey-lightest:focus::placeholder {
    color: #f8fafc;
  }

  .lg\:focus\:placeholder-grey-mid-light:focus::placeholder {
    color: #f3f3f4;
  }

  .lg\:focus\:placeholder-white-lightest:focus::placeholder {
    color: #f4f4f4;
  }

  .lg\:focus\:placeholder-red-darkest:focus::placeholder {
    color: #3b0d0c;
  }

  .lg\:focus\:placeholder-red-darker:focus::placeholder {
    color: #621b18;
  }

  .lg\:focus\:placeholder-red-dark:focus::placeholder {
    color: #cc1f1a;
  }

  .lg\:focus\:placeholder-red-light:focus::placeholder {
    color: #ef5753;
  }

  .lg\:focus\:placeholder-red-lighter:focus::placeholder {
    color: #f9acaa;
  }

  .lg\:focus\:placeholder-red-lightest:focus::placeholder {
    color: #fcebea;
  }

  .lg\:focus\:placeholder-orange-darkest:focus::placeholder {
    color: #462a16;
  }

  .lg\:focus\:placeholder-orange-darker:focus::placeholder {
    color: #613b1f;
  }

  .lg\:focus\:placeholder-orange-dark:focus::placeholder {
    color: #de751f;
  }

  .lg\:focus\:placeholder-orange-light:focus::placeholder {
    color: #faad63;
  }

  .lg\:focus\:placeholder-orange-lighter:focus::placeholder {
    color: #fcd9b6;
  }

  .lg\:focus\:placeholder-orange-lightest:focus::placeholder {
    color: #fff5eb;
  }

  .lg\:focus\:placeholder-yellow-darkest:focus::placeholder {
    color: #453411;
  }

  .lg\:focus\:placeholder-yellow-darker:focus::placeholder {
    color: #684f1d;
  }

  .lg\:focus\:placeholder-yellow-dark:focus::placeholder {
    color: #f2d024;
  }

  .lg\:focus\:placeholder-yellow-light:focus::placeholder {
    color: #fff382;
  }

  .lg\:focus\:placeholder-yellow-lighter:focus::placeholder {
    color: #fff9c2;
  }

  .lg\:focus\:placeholder-yellow-lightest:focus::placeholder {
    color: #fcfbeb;
  }

  .lg\:focus\:placeholder-green-darkest:focus::placeholder {
    color: #0f2f21;
  }

  .lg\:focus\:placeholder-green-darker:focus::placeholder {
    color: #1a4731;
  }

  .lg\:focus\:placeholder-green-dark:focus::placeholder {
    color: #1f9d55;
  }

  .lg\:focus\:placeholder-green-light:focus::placeholder {
    color: #51d88a;
  }

  .lg\:focus\:placeholder-green-lighter:focus::placeholder {
    color: #a2f5bf;
  }

  .lg\:focus\:placeholder-green-lightest:focus::placeholder {
    color: #e3fcec;
  }

  .lg\:focus\:placeholder-teal-darkest:focus::placeholder {
    color: #0d3331;
  }

  .lg\:focus\:placeholder-teal-darker:focus::placeholder {
    color: #20504f;
  }

  .lg\:focus\:placeholder-teal-dark:focus::placeholder {
    color: #38a89d;
  }

  .lg\:focus\:placeholder-teal-light:focus::placeholder {
    color: #64d5ca;
  }

  .lg\:focus\:placeholder-teal-lighter:focus::placeholder {
    color: #a0f0ed;
  }

  .lg\:focus\:placeholder-teal-lightest:focus::placeholder {
    color: #e8fffe;
  }

  .lg\:focus\:placeholder-blue-darkest:focus::placeholder {
    color: #12283a;
  }

  .lg\:focus\:placeholder-blue-darker:focus::placeholder {
    color: #1c3d5a;
  }

  .lg\:focus\:placeholder-blue-dark:focus::placeholder {
    color: #2779bd;
  }

  .lg\:focus\:placeholder-blue-light:focus::placeholder {
    color: #6cb2eb;
  }

  .lg\:focus\:placeholder-blue-lighter:focus::placeholder {
    color: #bcdefa;
  }

  .lg\:focus\:placeholder-blue-lightest:focus::placeholder {
    color: #eff8ff;
  }

  .lg\:focus\:placeholder-indigo-darkest:focus::placeholder {
    color: #191e38;
  }

  .lg\:focus\:placeholder-indigo-darker:focus::placeholder {
    color: #2f365f;
  }

  .lg\:focus\:placeholder-indigo-dark:focus::placeholder {
    color: #5661b3;
  }

  .lg\:focus\:placeholder-indigo-light:focus::placeholder {
    color: #7886d7;
  }

  .lg\:focus\:placeholder-indigo-lighter:focus::placeholder {
    color: #b2b7ff;
  }

  .lg\:focus\:placeholder-indigo-lightest:focus::placeholder {
    color: #e6e8ff;
  }

  .lg\:focus\:placeholder-purple-darkest:focus::placeholder {
    color: #21183c;
  }

  .lg\:focus\:placeholder-purple-darker:focus::placeholder {
    color: #382b5f;
  }

  .lg\:focus\:placeholder-purple-dark:focus::placeholder {
    color: #794acf;
  }

  .lg\:focus\:placeholder-purple-light:focus::placeholder {
    color: #a779e9;
  }

  .lg\:focus\:placeholder-purple-lighter:focus::placeholder {
    color: #d6bbfc;
  }

  .lg\:focus\:placeholder-purple-lightest:focus::placeholder {
    color: #f3ebff;
  }

  .lg\:focus\:placeholder-pink-darkest:focus::placeholder {
    color: #451225;
  }

  .lg\:focus\:placeholder-pink-darker:focus::placeholder {
    color: #6f213f;
  }

  .lg\:focus\:placeholder-pink-dark:focus::placeholder {
    color: #eb5286;
  }

  .lg\:focus\:placeholder-pink-light:focus::placeholder {
    color: #fa7ea8;
  }

  .lg\:focus\:placeholder-pink-lighter:focus::placeholder {
    color: #ffbbca;
  }

  .lg\:focus\:placeholder-pink-lightest:focus::placeholder {
    color: #ffebef;
  }

  .lg\:focus\:placeholder-nav:focus::placeholder {
    color: #3F495E;
  }

  .lg\:focus\:placeholder-side-nav:focus::placeholder {
    color: #ECF0F1;
  }

  .lg\:focus\:placeholder-nav-item:focus::placeholder {
    color: #626b7a;
  }

  .lg\:focus\:placeholder-light-border:focus::placeholder {
    color: #dfe4e6;
  }

  .lg\:focus\:placeholder-white-medium:focus::placeholder {
    color: #FAFAFA;
  }

  .lg\:focus\:placeholder-white-medium-dark:focus::placeholder {
    color: #E5E9EB;
  }

  .lg\:focus\:placeholder-red-vibrant:focus::placeholder {
    color: #e46050;
  }

  .lg\:focus\:placeholder-red-vibrant-dark:focus::placeholder {
    color: #d64230;
  }

  .lg\:focus\:placeholder-primary:focus::placeholder {
    color: #51BE99;
  }

  .lg\:focus\:placeholder-primary-dark:focus::placeholder {
    color: #0e5f43;
  }

  .lg\:focus\:placeholder-warning:focus::placeholder {
    color: #f4ab43;
  }

  .lg\:focus\:placeholder-warning-dark:focus::placeholder {
    color: #c37c16;
  }

  .lg\:focus\:placeholder-black-dark:focus::placeholder {
    color: #272634;
  }

  .lg\:focus\:placeholder-black-darkest:focus::placeholder {
    color: #141418;
  }

  .lg\:focus\:placeholder-info:focus::placeholder {
    color: #52bcdc;
  }

  .lg\:focus\:placeholder-info-dark:focus::placeholder {
    color: #2cadd4;
  }

  .lg\:focus\:placeholder-success:focus::placeholder {
    color: #72b159;
  }

  .lg\:focus\:placeholder-success-dark:focus::placeholder {
    color: #5D9547;
  }

  .lg\:focus\:placeholder-transparent:focus::placeholder {
    color: transparent;
  }

  .lg\:focus\:placeholder-black:focus::placeholder {
    color: #000;
  }

  .lg\:focus\:placeholder-white:focus::placeholder {
    color: #fff;
  }

  .lg\:focus\:placeholder-gray-100:focus::placeholder {
    color: #f7fafc;
  }

  .lg\:focus\:placeholder-gray-200:focus::placeholder {
    color: #edf2f7;
  }

  .lg\:focus\:placeholder-gray-300:focus::placeholder {
    color: #e2e8f0;
  }

  .lg\:focus\:placeholder-gray-400:focus::placeholder {
    color: #cbd5e0;
  }

  .lg\:focus\:placeholder-gray-500:focus::placeholder {
    color: #a0aec0;
  }

  .lg\:focus\:placeholder-gray-600:focus::placeholder {
    color: #718096;
  }

  .lg\:focus\:placeholder-gray-700:focus::placeholder {
    color: #4a5568;
  }

  .lg\:focus\:placeholder-gray-800:focus::placeholder {
    color: #2d3748;
  }

  .lg\:focus\:placeholder-gray-900:focus::placeholder {
    color: #1a202c;
  }

  .lg\:focus\:placeholder-red-100:focus::placeholder {
    color: #fff5f5;
  }

  .lg\:focus\:placeholder-red-200:focus::placeholder {
    color: #fed7d7;
  }

  .lg\:focus\:placeholder-red-300:focus::placeholder {
    color: #feb2b2;
  }

  .lg\:focus\:placeholder-red-400:focus::placeholder {
    color: #fc8181;
  }

  .lg\:focus\:placeholder-red-500:focus::placeholder {
    color: #f56565;
  }

  .lg\:focus\:placeholder-red-600:focus::placeholder {
    color: #e53e3e;
  }

  .lg\:focus\:placeholder-red-700:focus::placeholder {
    color: #c53030;
  }

  .lg\:focus\:placeholder-red-800:focus::placeholder {
    color: #9b2c2c;
  }

  .lg\:focus\:placeholder-red-900:focus::placeholder {
    color: #742a2a;
  }

  .lg\:focus\:placeholder-orange-100:focus::placeholder {
    color: #fffaf0;
  }

  .lg\:focus\:placeholder-orange-200:focus::placeholder {
    color: #feebc8;
  }

  .lg\:focus\:placeholder-orange-300:focus::placeholder {
    color: #fbd38d;
  }

  .lg\:focus\:placeholder-orange-400:focus::placeholder {
    color: #f6ad55;
  }

  .lg\:focus\:placeholder-orange-500:focus::placeholder {
    color: #ed8936;
  }

  .lg\:focus\:placeholder-orange-600:focus::placeholder {
    color: #dd6b20;
  }

  .lg\:focus\:placeholder-orange-700:focus::placeholder {
    color: #c05621;
  }

  .lg\:focus\:placeholder-orange-800:focus::placeholder {
    color: #9c4221;
  }

  .lg\:focus\:placeholder-orange-900:focus::placeholder {
    color: #7b341e;
  }

  .lg\:focus\:placeholder-yellow-100:focus::placeholder {
    color: #fffff0;
  }

  .lg\:focus\:placeholder-yellow-200:focus::placeholder {
    color: #fefcbf;
  }

  .lg\:focus\:placeholder-yellow-300:focus::placeholder {
    color: #faf089;
  }

  .lg\:focus\:placeholder-yellow-400:focus::placeholder {
    color: #f6e05e;
  }

  .lg\:focus\:placeholder-yellow-500:focus::placeholder {
    color: #ecc94b;
  }

  .lg\:focus\:placeholder-yellow-600:focus::placeholder {
    color: #d69e2e;
  }

  .lg\:focus\:placeholder-yellow-700:focus::placeholder {
    color: #b7791f;
  }

  .lg\:focus\:placeholder-yellow-800:focus::placeholder {
    color: #975a16;
  }

  .lg\:focus\:placeholder-yellow-900:focus::placeholder {
    color: #744210;
  }

  .lg\:focus\:placeholder-green-100:focus::placeholder {
    color: #f0fff4;
  }

  .lg\:focus\:placeholder-green-200:focus::placeholder {
    color: #c6f6d5;
  }

  .lg\:focus\:placeholder-green-300:focus::placeholder {
    color: #9ae6b4;
  }

  .lg\:focus\:placeholder-green-400:focus::placeholder {
    color: #68d391;
  }

  .lg\:focus\:placeholder-green-500:focus::placeholder {
    color: #48bb78;
  }

  .lg\:focus\:placeholder-green-600:focus::placeholder {
    color: #38a169;
  }

  .lg\:focus\:placeholder-green-700:focus::placeholder {
    color: #2f855a;
  }

  .lg\:focus\:placeholder-green-800:focus::placeholder {
    color: #276749;
  }

  .lg\:focus\:placeholder-green-900:focus::placeholder {
    color: #22543d;
  }

  .lg\:focus\:placeholder-teal-100:focus::placeholder {
    color: #e6fffa;
  }

  .lg\:focus\:placeholder-teal-200:focus::placeholder {
    color: #b2f5ea;
  }

  .lg\:focus\:placeholder-teal-300:focus::placeholder {
    color: #81e6d9;
  }

  .lg\:focus\:placeholder-teal-400:focus::placeholder {
    color: #4fd1c5;
  }

  .lg\:focus\:placeholder-teal-500:focus::placeholder {
    color: #38b2ac;
  }

  .lg\:focus\:placeholder-teal-600:focus::placeholder {
    color: #319795;
  }

  .lg\:focus\:placeholder-teal-700:focus::placeholder {
    color: #2c7a7b;
  }

  .lg\:focus\:placeholder-teal-800:focus::placeholder {
    color: #285e61;
  }

  .lg\:focus\:placeholder-teal-900:focus::placeholder {
    color: #234e52;
  }

  .lg\:focus\:placeholder-blue-100:focus::placeholder {
    color: #ebf8ff;
  }

  .lg\:focus\:placeholder-blue-200:focus::placeholder {
    color: #bee3f8;
  }

  .lg\:focus\:placeholder-blue-300:focus::placeholder {
    color: #90cdf4;
  }

  .lg\:focus\:placeholder-blue-400:focus::placeholder {
    color: #63b3ed;
  }

  .lg\:focus\:placeholder-blue-500:focus::placeholder {
    color: #4299e1;
  }

  .lg\:focus\:placeholder-blue-600:focus::placeholder {
    color: #3182ce;
  }

  .lg\:focus\:placeholder-blue-700:focus::placeholder {
    color: #2b6cb0;
  }

  .lg\:focus\:placeholder-blue-800:focus::placeholder {
    color: #2c5282;
  }

  .lg\:focus\:placeholder-blue-900:focus::placeholder {
    color: #2a4365;
  }

  .lg\:focus\:placeholder-indigo-100:focus::placeholder {
    color: #ebf4ff;
  }

  .lg\:focus\:placeholder-indigo-200:focus::placeholder {
    color: #c3dafe;
  }

  .lg\:focus\:placeholder-indigo-300:focus::placeholder {
    color: #a3bffa;
  }

  .lg\:focus\:placeholder-indigo-400:focus::placeholder {
    color: #7f9cf5;
  }

  .lg\:focus\:placeholder-indigo-500:focus::placeholder {
    color: #667eea;
  }

  .lg\:focus\:placeholder-indigo-600:focus::placeholder {
    color: #5a67d8;
  }

  .lg\:focus\:placeholder-indigo-700:focus::placeholder {
    color: #4c51bf;
  }

  .lg\:focus\:placeholder-indigo-800:focus::placeholder {
    color: #434190;
  }

  .lg\:focus\:placeholder-indigo-900:focus::placeholder {
    color: #3c366b;
  }

  .lg\:focus\:placeholder-purple-100:focus::placeholder {
    color: #faf5ff;
  }

  .lg\:focus\:placeholder-purple-200:focus::placeholder {
    color: #e9d8fd;
  }

  .lg\:focus\:placeholder-purple-300:focus::placeholder {
    color: #d6bcfa;
  }

  .lg\:focus\:placeholder-purple-400:focus::placeholder {
    color: #b794f4;
  }

  .lg\:focus\:placeholder-purple-500:focus::placeholder {
    color: #9f7aea;
  }

  .lg\:focus\:placeholder-purple-600:focus::placeholder {
    color: #805ad5;
  }

  .lg\:focus\:placeholder-purple-700:focus::placeholder {
    color: #6b46c1;
  }

  .lg\:focus\:placeholder-purple-800:focus::placeholder {
    color: #553c9a;
  }

  .lg\:focus\:placeholder-purple-900:focus::placeholder {
    color: #44337a;
  }

  .lg\:focus\:placeholder-pink-100:focus::placeholder {
    color: #fff5f7;
  }

  .lg\:focus\:placeholder-pink-200:focus::placeholder {
    color: #fed7e2;
  }

  .lg\:focus\:placeholder-pink-300:focus::placeholder {
    color: #fbb6ce;
  }

  .lg\:focus\:placeholder-pink-400:focus::placeholder {
    color: #f687b3;
  }

  .lg\:focus\:placeholder-pink-500:focus::placeholder {
    color: #ed64a6;
  }

  .lg\:focus\:placeholder-pink-600:focus::placeholder {
    color: #d53f8c;
  }

  .lg\:focus\:placeholder-pink-700:focus::placeholder {
    color: #b83280;
  }

  .lg\:focus\:placeholder-pink-800:focus::placeholder {
    color: #97266d;
  }

  .lg\:focus\:placeholder-pink-900:focus::placeholder {
    color: #702459;
  }

  .lg\:pointer-events-none {
    pointer-events: none;
  }

  .lg\:pointer-events-auto {
    pointer-events: auto;
  }

  .lg\:static {
    position: static;
  }

  .lg\:fixed {
    position: fixed;
  }

  .lg\:absolute {
    position: absolute;
  }

  .lg\:relative {
    position: relative;
  }

  .lg\:sticky {
    position: sticky;
  }

  .lg\:inset-0 {
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
  }

  .lg\:inset-auto {
    top: auto;
    right: auto;
    bottom: auto;
    left: auto;
  }

  .lg\:inset-y-0 {
    top: 0;
    bottom: 0;
  }

  .lg\:inset-x-0 {
    right: 0;
    left: 0;
  }

  .lg\:inset-y-auto {
    top: auto;
    bottom: auto;
  }

  .lg\:inset-x-auto {
    right: auto;
    left: auto;
  }

  .lg\:top-0 {
    top: 0;
  }

  .lg\:right-0 {
    right: 0;
  }

  .lg\:bottom-0 {
    bottom: 0;
  }

  .lg\:left-0 {
    left: 0;
  }

  .lg\:top-auto {
    top: auto;
  }

  .lg\:right-auto {
    right: auto;
  }

  .lg\:bottom-auto {
    bottom: auto;
  }

  .lg\:left-auto {
    left: auto;
  }

  .lg\:resize-none {
    resize: none;
  }

  .lg\:resize-y {
    resize: vertical;
  }

  .lg\:resize-x {
    resize: horizontal;
  }

  .lg\:resize {
    resize: both;
  }

  .lg\:shadow {
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
  }

  .lg\:shadow-md {
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
  }

  .lg\:shadow-lg {
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
  }

  .lg\:shadow-xl {
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
  }

  .lg\:shadow-2xl {
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
  }

  .lg\:shadow-inner {
    box-shadow: inset 0 2px 4px 0 rgba(0, 0, 0, 0.06);
  }

  .lg\:shadow-outline {
    box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.5);
  }

  .lg\:shadow-none {
    box-shadow: none;
  }

  .lg\:hover\:shadow:hover {
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
  }

  .lg\:hover\:shadow-md:hover {
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
  }

  .lg\:hover\:shadow-lg:hover {
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
  }

  .lg\:hover\:shadow-xl:hover {
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
  }

  .lg\:hover\:shadow-2xl:hover {
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
  }

  .lg\:hover\:shadow-inner:hover {
    box-shadow: inset 0 2px 4px 0 rgba(0, 0, 0, 0.06);
  }

  .lg\:hover\:shadow-outline:hover {
    box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.5);
  }

  .lg\:hover\:shadow-none:hover {
    box-shadow: none;
  }

  .lg\:focus\:shadow:focus {
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
  }

  .lg\:focus\:shadow-md:focus {
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
  }

  .lg\:focus\:shadow-lg:focus {
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
  }

  .lg\:focus\:shadow-xl:focus {
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
  }

  .lg\:focus\:shadow-2xl:focus {
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
  }

  .lg\:focus\:shadow-inner:focus {
    box-shadow: inset 0 2px 4px 0 rgba(0, 0, 0, 0.06);
  }

  .lg\:focus\:shadow-outline:focus {
    box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.5);
  }

  .lg\:focus\:shadow-none:focus {
    box-shadow: none;
  }

  .lg\:fill-current {
    fill: currentColor;
  }

  .lg\:stroke-current {
    stroke: currentColor;
  }

  .lg\:table-auto {
    table-layout: auto;
  }

  .lg\:table-fixed {
    table-layout: fixed;
  }

  .lg\:text-left {
    text-align: left;
  }

  .lg\:text-center {
    text-align: center;
  }

  .lg\:text-right {
    text-align: right;
  }

  .lg\:text-justify {
    text-align: justify;
  }

  .lg\:text-grey-darkest {
    color: #3d4852;
  }

  .lg\:text-grey-darker {
    color: #606f7b;
  }

  .lg\:text-grey-dark {
    color: #8795a1;
  }

  .lg\:text-grey {
    color: #b8c2cc;
  }

  .lg\:text-grey-light {
    color: #dae1e7;
  }

  .lg\:text-grey-lighter {
    color: #f1f5f8;
  }

  .lg\:text-grey-lightest {
    color: #f8fafc;
  }

  .lg\:text-grey-mid-light {
    color: #f3f3f4;
  }

  .lg\:text-white-lightest {
    color: #f4f4f4;
  }

  .lg\:text-red-darkest {
    color: #3b0d0c;
  }

  .lg\:text-red-darker {
    color: #621b18;
  }

  .lg\:text-red-dark {
    color: #cc1f1a;
  }

  .lg\:text-red-light {
    color: #ef5753;
  }

  .lg\:text-red-lighter {
    color: #f9acaa;
  }

  .lg\:text-red-lightest {
    color: #fcebea;
  }

  .lg\:text-orange-darkest {
    color: #462a16;
  }

  .lg\:text-orange-darker {
    color: #613b1f;
  }

  .lg\:text-orange-dark {
    color: #de751f;
  }

  .lg\:text-orange-light {
    color: #faad63;
  }

  .lg\:text-orange-lighter {
    color: #fcd9b6;
  }

  .lg\:text-orange-lightest {
    color: #fff5eb;
  }

  .lg\:text-yellow-darkest {
    color: #453411;
  }

  .lg\:text-yellow-darker {
    color: #684f1d;
  }

  .lg\:text-yellow-dark {
    color: #f2d024;
  }

  .lg\:text-yellow-light {
    color: #fff382;
  }

  .lg\:text-yellow-lighter {
    color: #fff9c2;
  }

  .lg\:text-yellow-lightest {
    color: #fcfbeb;
  }

  .lg\:text-green-darkest {
    color: #0f2f21;
  }

  .lg\:text-green-darker {
    color: #1a4731;
  }

  .lg\:text-green-dark {
    color: #1f9d55;
  }

  .lg\:text-green-light {
    color: #51d88a;
  }

  .lg\:text-green-lighter {
    color: #a2f5bf;
  }

  .lg\:text-green-lightest {
    color: #e3fcec;
  }

  .lg\:text-teal-darkest {
    color: #0d3331;
  }

  .lg\:text-teal-darker {
    color: #20504f;
  }

  .lg\:text-teal-dark {
    color: #38a89d;
  }

  .lg\:text-teal-light {
    color: #64d5ca;
  }

  .lg\:text-teal-lighter {
    color: #a0f0ed;
  }

  .lg\:text-teal-lightest {
    color: #e8fffe;
  }

  .lg\:text-blue-darkest {
    color: #12283a;
  }

  .lg\:text-blue-darker {
    color: #1c3d5a;
  }

  .lg\:text-blue-dark {
    color: #2779bd;
  }

  .lg\:text-blue-light {
    color: #6cb2eb;
  }

  .lg\:text-blue-lighter {
    color: #bcdefa;
  }

  .lg\:text-blue-lightest {
    color: #eff8ff;
  }

  .lg\:text-indigo-darkest {
    color: #191e38;
  }

  .lg\:text-indigo-darker {
    color: #2f365f;
  }

  .lg\:text-indigo-dark {
    color: #5661b3;
  }

  .lg\:text-indigo-light {
    color: #7886d7;
  }

  .lg\:text-indigo-lighter {
    color: #b2b7ff;
  }

  .lg\:text-indigo-lightest {
    color: #e6e8ff;
  }

  .lg\:text-purple-darkest {
    color: #21183c;
  }

  .lg\:text-purple-darker {
    color: #382b5f;
  }

  .lg\:text-purple-dark {
    color: #794acf;
  }

  .lg\:text-purple-light {
    color: #a779e9;
  }

  .lg\:text-purple-lighter {
    color: #d6bbfc;
  }

  .lg\:text-purple-lightest {
    color: #f3ebff;
  }

  .lg\:text-pink-darkest {
    color: #451225;
  }

  .lg\:text-pink-darker {
    color: #6f213f;
  }

  .lg\:text-pink-dark {
    color: #eb5286;
  }

  .lg\:text-pink-light {
    color: #fa7ea8;
  }

  .lg\:text-pink-lighter {
    color: #ffbbca;
  }

  .lg\:text-pink-lightest {
    color: #ffebef;
  }

  .lg\:text-nav {
    color: #3F495E;
  }

  .lg\:text-side-nav {
    color: #ECF0F1;
  }

  .lg\:text-nav-item {
    color: #626b7a;
  }

  .lg\:text-light-border {
    color: #dfe4e6;
  }

  .lg\:text-white-medium {
    color: #FAFAFA;
  }

  .lg\:text-white-medium-dark {
    color: #E5E9EB;
  }

  .lg\:text-red-vibrant {
    color: #e46050;
  }

  .lg\:text-red-vibrant-dark {
    color: #d64230;
  }

  .lg\:text-primary {
    color: #51BE99;
  }

  .lg\:text-primary-dark {
    color: #0e5f43;
  }

  .lg\:text-warning {
    color: #f4ab43;
  }

  .lg\:text-warning-dark {
    color: #c37c16;
  }

  .lg\:text-black-dark {
    color: #272634;
  }

  .lg\:text-black-darkest {
    color: #141418;
  }

  .lg\:text-info {
    color: #52bcdc;
  }

  .lg\:text-info-dark {
    color: #2cadd4;
  }

  .lg\:text-success {
    color: #72b159;
  }

  .lg\:text-success-dark {
    color: #5D9547;
  }

  .lg\:text-transparent {
    color: transparent;
  }

  .lg\:text-black {
    color: #000;
  }

  .lg\:text-white {
    color: #fff;
  }

  .lg\:text-gray-100 {
    color: #f7fafc;
  }

  .lg\:text-gray-200 {
    color: #edf2f7;
  }

  .lg\:text-gray-300 {
    color: #e2e8f0;
  }

  .lg\:text-gray-400 {
    color: #cbd5e0;
  }

  .lg\:text-gray-500 {
    color: #a0aec0;
  }

  .lg\:text-gray-600 {
    color: #718096;
  }

  .lg\:text-gray-700 {
    color: #4a5568;
  }

  .lg\:text-gray-800 {
    color: #2d3748;
  }

  .lg\:text-gray-900 {
    color: #1a202c;
  }

  .lg\:text-red-100 {
    color: #fff5f5;
  }

  .lg\:text-red-200 {
    color: #fed7d7;
  }

  .lg\:text-red-300 {
    color: #feb2b2;
  }

  .lg\:text-red-400 {
    color: #fc8181;
  }

  .lg\:text-red-500 {
    color: #f56565;
  }

  .lg\:text-red-600 {
    color: #e53e3e;
  }

  .lg\:text-red-700 {
    color: #c53030;
  }

  .lg\:text-red-800 {
    color: #9b2c2c;
  }

  .lg\:text-red-900 {
    color: #742a2a;
  }

  .lg\:text-orange-100 {
    color: #fffaf0;
  }

  .lg\:text-orange-200 {
    color: #feebc8;
  }

  .lg\:text-orange-300 {
    color: #fbd38d;
  }

  .lg\:text-orange-400 {
    color: #f6ad55;
  }

  .lg\:text-orange-500 {
    color: #ed8936;
  }

  .lg\:text-orange-600 {
    color: #dd6b20;
  }

  .lg\:text-orange-700 {
    color: #c05621;
  }

  .lg\:text-orange-800 {
    color: #9c4221;
  }

  .lg\:text-orange-900 {
    color: #7b341e;
  }

  .lg\:text-yellow-100 {
    color: #fffff0;
  }

  .lg\:text-yellow-200 {
    color: #fefcbf;
  }

  .lg\:text-yellow-300 {
    color: #faf089;
  }

  .lg\:text-yellow-400 {
    color: #f6e05e;
  }

  .lg\:text-yellow-500 {
    color: #ecc94b;
  }

  .lg\:text-yellow-600 {
    color: #d69e2e;
  }

  .lg\:text-yellow-700 {
    color: #b7791f;
  }

  .lg\:text-yellow-800 {
    color: #975a16;
  }

  .lg\:text-yellow-900 {
    color: #744210;
  }

  .lg\:text-green-100 {
    color: #f0fff4;
  }

  .lg\:text-green-200 {
    color: #c6f6d5;
  }

  .lg\:text-green-300 {
    color: #9ae6b4;
  }

  .lg\:text-green-400 {
    color: #68d391;
  }

  .lg\:text-green-500 {
    color: #48bb78;
  }

  .lg\:text-green-600 {
    color: #38a169;
  }

  .lg\:text-green-700 {
    color: #2f855a;
  }

  .lg\:text-green-800 {
    color: #276749;
  }

  .lg\:text-green-900 {
    color: #22543d;
  }

  .lg\:text-teal-100 {
    color: #e6fffa;
  }

  .lg\:text-teal-200 {
    color: #b2f5ea;
  }

  .lg\:text-teal-300 {
    color: #81e6d9;
  }

  .lg\:text-teal-400 {
    color: #4fd1c5;
  }

  .lg\:text-teal-500 {
    color: #38b2ac;
  }

  .lg\:text-teal-600 {
    color: #319795;
  }

  .lg\:text-teal-700 {
    color: #2c7a7b;
  }

  .lg\:text-teal-800 {
    color: #285e61;
  }

  .lg\:text-teal-900 {
    color: #234e52;
  }

  .lg\:text-blue-100 {
    color: #ebf8ff;
  }

  .lg\:text-blue-200 {
    color: #bee3f8;
  }

  .lg\:text-blue-300 {
    color: #90cdf4;
  }

  .lg\:text-blue-400 {
    color: #63b3ed;
  }

  .lg\:text-blue-500 {
    color: #4299e1;
  }

  .lg\:text-blue-600 {
    color: #3182ce;
  }

  .lg\:text-blue-700 {
    color: #2b6cb0;
  }

  .lg\:text-blue-800 {
    color: #2c5282;
  }

  .lg\:text-blue-900 {
    color: #2a4365;
  }

  .lg\:text-indigo-100 {
    color: #ebf4ff;
  }

  .lg\:text-indigo-200 {
    color: #c3dafe;
  }

  .lg\:text-indigo-300 {
    color: #a3bffa;
  }

  .lg\:text-indigo-400 {
    color: #7f9cf5;
  }

  .lg\:text-indigo-500 {
    color: #667eea;
  }

  .lg\:text-indigo-600 {
    color: #5a67d8;
  }

  .lg\:text-indigo-700 {
    color: #4c51bf;
  }

  .lg\:text-indigo-800 {
    color: #434190;
  }

  .lg\:text-indigo-900 {
    color: #3c366b;
  }

  .lg\:text-purple-100 {
    color: #faf5ff;
  }

  .lg\:text-purple-200 {
    color: #e9d8fd;
  }

  .lg\:text-purple-300 {
    color: #d6bcfa;
  }

  .lg\:text-purple-400 {
    color: #b794f4;
  }

  .lg\:text-purple-500 {
    color: #9f7aea;
  }

  .lg\:text-purple-600 {
    color: #805ad5;
  }

  .lg\:text-purple-700 {
    color: #6b46c1;
  }

  .lg\:text-purple-800 {
    color: #553c9a;
  }

  .lg\:text-purple-900 {
    color: #44337a;
  }

  .lg\:text-pink-100 {
    color: #fff5f7;
  }

  .lg\:text-pink-200 {
    color: #fed7e2;
  }

  .lg\:text-pink-300 {
    color: #fbb6ce;
  }

  .lg\:text-pink-400 {
    color: #f687b3;
  }

  .lg\:text-pink-500 {
    color: #ed64a6;
  }

  .lg\:text-pink-600 {
    color: #d53f8c;
  }

  .lg\:text-pink-700 {
    color: #b83280;
  }

  .lg\:text-pink-800 {
    color: #97266d;
  }

  .lg\:text-pink-900 {
    color: #702459;
  }

  .lg\:hover\:text-grey-darkest:hover {
    color: #3d4852;
  }

  .lg\:hover\:text-grey-darker:hover {
    color: #606f7b;
  }

  .lg\:hover\:text-grey-dark:hover {
    color: #8795a1;
  }

  .lg\:hover\:text-grey:hover {
    color: #b8c2cc;
  }

  .lg\:hover\:text-grey-light:hover {
    color: #dae1e7;
  }

  .lg\:hover\:text-grey-lighter:hover {
    color: #f1f5f8;
  }

  .lg\:hover\:text-grey-lightest:hover {
    color: #f8fafc;
  }

  .lg\:hover\:text-grey-mid-light:hover {
    color: #f3f3f4;
  }

  .lg\:hover\:text-white-lightest:hover {
    color: #f4f4f4;
  }

  .lg\:hover\:text-red-darkest:hover {
    color: #3b0d0c;
  }

  .lg\:hover\:text-red-darker:hover {
    color: #621b18;
  }

  .lg\:hover\:text-red-dark:hover {
    color: #cc1f1a;
  }

  .lg\:hover\:text-red-light:hover {
    color: #ef5753;
  }

  .lg\:hover\:text-red-lighter:hover {
    color: #f9acaa;
  }

  .lg\:hover\:text-red-lightest:hover {
    color: #fcebea;
  }

  .lg\:hover\:text-orange-darkest:hover {
    color: #462a16;
  }

  .lg\:hover\:text-orange-darker:hover {
    color: #613b1f;
  }

  .lg\:hover\:text-orange-dark:hover {
    color: #de751f;
  }

  .lg\:hover\:text-orange-light:hover {
    color: #faad63;
  }

  .lg\:hover\:text-orange-lighter:hover {
    color: #fcd9b6;
  }

  .lg\:hover\:text-orange-lightest:hover {
    color: #fff5eb;
  }

  .lg\:hover\:text-yellow-darkest:hover {
    color: #453411;
  }

  .lg\:hover\:text-yellow-darker:hover {
    color: #684f1d;
  }

  .lg\:hover\:text-yellow-dark:hover {
    color: #f2d024;
  }

  .lg\:hover\:text-yellow-light:hover {
    color: #fff382;
  }

  .lg\:hover\:text-yellow-lighter:hover {
    color: #fff9c2;
  }

  .lg\:hover\:text-yellow-lightest:hover {
    color: #fcfbeb;
  }

  .lg\:hover\:text-green-darkest:hover {
    color: #0f2f21;
  }

  .lg\:hover\:text-green-darker:hover {
    color: #1a4731;
  }

  .lg\:hover\:text-green-dark:hover {
    color: #1f9d55;
  }

  .lg\:hover\:text-green-light:hover {
    color: #51d88a;
  }

  .lg\:hover\:text-green-lighter:hover {
    color: #a2f5bf;
  }

  .lg\:hover\:text-green-lightest:hover {
    color: #e3fcec;
  }

  .lg\:hover\:text-teal-darkest:hover {
    color: #0d3331;
  }

  .lg\:hover\:text-teal-darker:hover {
    color: #20504f;
  }

  .lg\:hover\:text-teal-dark:hover {
    color: #38a89d;
  }

  .lg\:hover\:text-teal-light:hover {
    color: #64d5ca;
  }

  .lg\:hover\:text-teal-lighter:hover {
    color: #a0f0ed;
  }

  .lg\:hover\:text-teal-lightest:hover {
    color: #e8fffe;
  }

  .lg\:hover\:text-blue-darkest:hover {
    color: #12283a;
  }

  .lg\:hover\:text-blue-darker:hover {
    color: #1c3d5a;
  }

  .lg\:hover\:text-blue-dark:hover {
    color: #2779bd;
  }

  .lg\:hover\:text-blue-light:hover {
    color: #6cb2eb;
  }

  .lg\:hover\:text-blue-lighter:hover {
    color: #bcdefa;
  }

  .lg\:hover\:text-blue-lightest:hover {
    color: #eff8ff;
  }

  .lg\:hover\:text-indigo-darkest:hover {
    color: #191e38;
  }

  .lg\:hover\:text-indigo-darker:hover {
    color: #2f365f;
  }

  .lg\:hover\:text-indigo-dark:hover {
    color: #5661b3;
  }

  .lg\:hover\:text-indigo-light:hover {
    color: #7886d7;
  }

  .lg\:hover\:text-indigo-lighter:hover {
    color: #b2b7ff;
  }

  .lg\:hover\:text-indigo-lightest:hover {
    color: #e6e8ff;
  }

  .lg\:hover\:text-purple-darkest:hover {
    color: #21183c;
  }

  .lg\:hover\:text-purple-darker:hover {
    color: #382b5f;
  }

  .lg\:hover\:text-purple-dark:hover {
    color: #794acf;
  }

  .lg\:hover\:text-purple-light:hover {
    color: #a779e9;
  }

  .lg\:hover\:text-purple-lighter:hover {
    color: #d6bbfc;
  }

  .lg\:hover\:text-purple-lightest:hover {
    color: #f3ebff;
  }

  .lg\:hover\:text-pink-darkest:hover {
    color: #451225;
  }

  .lg\:hover\:text-pink-darker:hover {
    color: #6f213f;
  }

  .lg\:hover\:text-pink-dark:hover {
    color: #eb5286;
  }

  .lg\:hover\:text-pink-light:hover {
    color: #fa7ea8;
  }

  .lg\:hover\:text-pink-lighter:hover {
    color: #ffbbca;
  }

  .lg\:hover\:text-pink-lightest:hover {
    color: #ffebef;
  }

  .lg\:hover\:text-nav:hover {
    color: #3F495E;
  }

  .lg\:hover\:text-side-nav:hover {
    color: #ECF0F1;
  }

  .lg\:hover\:text-nav-item:hover {
    color: #626b7a;
  }

  .lg\:hover\:text-light-border:hover {
    color: #dfe4e6;
  }

  .lg\:hover\:text-white-medium:hover {
    color: #FAFAFA;
  }

  .lg\:hover\:text-white-medium-dark:hover {
    color: #E5E9EB;
  }

  .lg\:hover\:text-red-vibrant:hover {
    color: #e46050;
  }

  .lg\:hover\:text-red-vibrant-dark:hover {
    color: #d64230;
  }

  .lg\:hover\:text-primary:hover {
    color: #51BE99;
  }

  .lg\:hover\:text-primary-dark:hover {
    color: #0e5f43;
  }

  .lg\:hover\:text-warning:hover {
    color: #f4ab43;
  }

  .lg\:hover\:text-warning-dark:hover {
    color: #c37c16;
  }

  .lg\:hover\:text-black-dark:hover {
    color: #272634;
  }

  .lg\:hover\:text-black-darkest:hover {
    color: #141418;
  }

  .lg\:hover\:text-info:hover {
    color: #52bcdc;
  }

  .lg\:hover\:text-info-dark:hover {
    color: #2cadd4;
  }

  .lg\:hover\:text-success:hover {
    color: #72b159;
  }

  .lg\:hover\:text-success-dark:hover {
    color: #5D9547;
  }

  .lg\:hover\:text-transparent:hover {
    color: transparent;
  }

  .lg\:hover\:text-black:hover {
    color: #000;
  }

  .lg\:hover\:text-white:hover {
    color: #fff;
  }

  .lg\:hover\:text-gray-100:hover {
    color: #f7fafc;
  }

  .lg\:hover\:text-gray-200:hover {
    color: #edf2f7;
  }

  .lg\:hover\:text-gray-300:hover {
    color: #e2e8f0;
  }

  .lg\:hover\:text-gray-400:hover {
    color: #cbd5e0;
  }

  .lg\:hover\:text-gray-500:hover {
    color: #a0aec0;
  }

  .lg\:hover\:text-gray-600:hover {
    color: #718096;
  }

  .lg\:hover\:text-gray-700:hover {
    color: #4a5568;
  }

  .lg\:hover\:text-gray-800:hover {
    color: #2d3748;
  }

  .lg\:hover\:text-gray-900:hover {
    color: #1a202c;
  }

  .lg\:hover\:text-red-100:hover {
    color: #fff5f5;
  }

  .lg\:hover\:text-red-200:hover {
    color: #fed7d7;
  }

  .lg\:hover\:text-red-300:hover {
    color: #feb2b2;
  }

  .lg\:hover\:text-red-400:hover {
    color: #fc8181;
  }

  .lg\:hover\:text-red-500:hover {
    color: #f56565;
  }

  .lg\:hover\:text-red-600:hover {
    color: #e53e3e;
  }

  .lg\:hover\:text-red-700:hover {
    color: #c53030;
  }

  .lg\:hover\:text-red-800:hover {
    color: #9b2c2c;
  }

  .lg\:hover\:text-red-900:hover {
    color: #742a2a;
  }

  .lg\:hover\:text-orange-100:hover {
    color: #fffaf0;
  }

  .lg\:hover\:text-orange-200:hover {
    color: #feebc8;
  }

  .lg\:hover\:text-orange-300:hover {
    color: #fbd38d;
  }

  .lg\:hover\:text-orange-400:hover {
    color: #f6ad55;
  }

  .lg\:hover\:text-orange-500:hover {
    color: #ed8936;
  }

  .lg\:hover\:text-orange-600:hover {
    color: #dd6b20;
  }

  .lg\:hover\:text-orange-700:hover {
    color: #c05621;
  }

  .lg\:hover\:text-orange-800:hover {
    color: #9c4221;
  }

  .lg\:hover\:text-orange-900:hover {
    color: #7b341e;
  }

  .lg\:hover\:text-yellow-100:hover {
    color: #fffff0;
  }

  .lg\:hover\:text-yellow-200:hover {
    color: #fefcbf;
  }

  .lg\:hover\:text-yellow-300:hover {
    color: #faf089;
  }

  .lg\:hover\:text-yellow-400:hover {
    color: #f6e05e;
  }

  .lg\:hover\:text-yellow-500:hover {
    color: #ecc94b;
  }

  .lg\:hover\:text-yellow-600:hover {
    color: #d69e2e;
  }

  .lg\:hover\:text-yellow-700:hover {
    color: #b7791f;
  }

  .lg\:hover\:text-yellow-800:hover {
    color: #975a16;
  }

  .lg\:hover\:text-yellow-900:hover {
    color: #744210;
  }

  .lg\:hover\:text-green-100:hover {
    color: #f0fff4;
  }

  .lg\:hover\:text-green-200:hover {
    color: #c6f6d5;
  }

  .lg\:hover\:text-green-300:hover {
    color: #9ae6b4;
  }

  .lg\:hover\:text-green-400:hover {
    color: #68d391;
  }

  .lg\:hover\:text-green-500:hover {
    color: #48bb78;
  }

  .lg\:hover\:text-green-600:hover {
    color: #38a169;
  }

  .lg\:hover\:text-green-700:hover {
    color: #2f855a;
  }

  .lg\:hover\:text-green-800:hover {
    color: #276749;
  }

  .lg\:hover\:text-green-900:hover {
    color: #22543d;
  }

  .lg\:hover\:text-teal-100:hover {
    color: #e6fffa;
  }

  .lg\:hover\:text-teal-200:hover {
    color: #b2f5ea;
  }

  .lg\:hover\:text-teal-300:hover {
    color: #81e6d9;
  }

  .lg\:hover\:text-teal-400:hover {
    color: #4fd1c5;
  }

  .lg\:hover\:text-teal-500:hover {
    color: #38b2ac;
  }

  .lg\:hover\:text-teal-600:hover {
    color: #319795;
  }

  .lg\:hover\:text-teal-700:hover {
    color: #2c7a7b;
  }

  .lg\:hover\:text-teal-800:hover {
    color: #285e61;
  }

  .lg\:hover\:text-teal-900:hover {
    color: #234e52;
  }

  .lg\:hover\:text-blue-100:hover {
    color: #ebf8ff;
  }

  .lg\:hover\:text-blue-200:hover {
    color: #bee3f8;
  }

  .lg\:hover\:text-blue-300:hover {
    color: #90cdf4;
  }

  .lg\:hover\:text-blue-400:hover {
    color: #63b3ed;
  }

  .lg\:hover\:text-blue-500:hover {
    color: #4299e1;
  }

  .lg\:hover\:text-blue-600:hover {
    color: #3182ce;
  }

  .lg\:hover\:text-blue-700:hover {
    color: #2b6cb0;
  }

  .lg\:hover\:text-blue-800:hover {
    color: #2c5282;
  }

  .lg\:hover\:text-blue-900:hover {
    color: #2a4365;
  }

  .lg\:hover\:text-indigo-100:hover {
    color: #ebf4ff;
  }

  .lg\:hover\:text-indigo-200:hover {
    color: #c3dafe;
  }

  .lg\:hover\:text-indigo-300:hover {
    color: #a3bffa;
  }

  .lg\:hover\:text-indigo-400:hover {
    color: #7f9cf5;
  }

  .lg\:hover\:text-indigo-500:hover {
    color: #667eea;
  }

  .lg\:hover\:text-indigo-600:hover {
    color: #5a67d8;
  }

  .lg\:hover\:text-indigo-700:hover {
    color: #4c51bf;
  }

  .lg\:hover\:text-indigo-800:hover {
    color: #434190;
  }

  .lg\:hover\:text-indigo-900:hover {
    color: #3c366b;
  }

  .lg\:hover\:text-purple-100:hover {
    color: #faf5ff;
  }

  .lg\:hover\:text-purple-200:hover {
    color: #e9d8fd;
  }

  .lg\:hover\:text-purple-300:hover {
    color: #d6bcfa;
  }

  .lg\:hover\:text-purple-400:hover {
    color: #b794f4;
  }

  .lg\:hover\:text-purple-500:hover {
    color: #9f7aea;
  }

  .lg\:hover\:text-purple-600:hover {
    color: #805ad5;
  }

  .lg\:hover\:text-purple-700:hover {
    color: #6b46c1;
  }

  .lg\:hover\:text-purple-800:hover {
    color: #553c9a;
  }

  .lg\:hover\:text-purple-900:hover {
    color: #44337a;
  }

  .lg\:hover\:text-pink-100:hover {
    color: #fff5f7;
  }

  .lg\:hover\:text-pink-200:hover {
    color: #fed7e2;
  }

  .lg\:hover\:text-pink-300:hover {
    color: #fbb6ce;
  }

  .lg\:hover\:text-pink-400:hover {
    color: #f687b3;
  }

  .lg\:hover\:text-pink-500:hover {
    color: #ed64a6;
  }

  .lg\:hover\:text-pink-600:hover {
    color: #d53f8c;
  }

  .lg\:hover\:text-pink-700:hover {
    color: #b83280;
  }

  .lg\:hover\:text-pink-800:hover {
    color: #97266d;
  }

  .lg\:hover\:text-pink-900:hover {
    color: #702459;
  }

  .lg\:focus\:text-grey-darkest:focus {
    color: #3d4852;
  }

  .lg\:focus\:text-grey-darker:focus {
    color: #606f7b;
  }

  .lg\:focus\:text-grey-dark:focus {
    color: #8795a1;
  }

  .lg\:focus\:text-grey:focus {
    color: #b8c2cc;
  }

  .lg\:focus\:text-grey-light:focus {
    color: #dae1e7;
  }

  .lg\:focus\:text-grey-lighter:focus {
    color: #f1f5f8;
  }

  .lg\:focus\:text-grey-lightest:focus {
    color: #f8fafc;
  }

  .lg\:focus\:text-grey-mid-light:focus {
    color: #f3f3f4;
  }

  .lg\:focus\:text-white-lightest:focus {
    color: #f4f4f4;
  }

  .lg\:focus\:text-red-darkest:focus {
    color: #3b0d0c;
  }

  .lg\:focus\:text-red-darker:focus {
    color: #621b18;
  }

  .lg\:focus\:text-red-dark:focus {
    color: #cc1f1a;
  }

  .lg\:focus\:text-red-light:focus {
    color: #ef5753;
  }

  .lg\:focus\:text-red-lighter:focus {
    color: #f9acaa;
  }

  .lg\:focus\:text-red-lightest:focus {
    color: #fcebea;
  }

  .lg\:focus\:text-orange-darkest:focus {
    color: #462a16;
  }

  .lg\:focus\:text-orange-darker:focus {
    color: #613b1f;
  }

  .lg\:focus\:text-orange-dark:focus {
    color: #de751f;
  }

  .lg\:focus\:text-orange-light:focus {
    color: #faad63;
  }

  .lg\:focus\:text-orange-lighter:focus {
    color: #fcd9b6;
  }

  .lg\:focus\:text-orange-lightest:focus {
    color: #fff5eb;
  }

  .lg\:focus\:text-yellow-darkest:focus {
    color: #453411;
  }

  .lg\:focus\:text-yellow-darker:focus {
    color: #684f1d;
  }

  .lg\:focus\:text-yellow-dark:focus {
    color: #f2d024;
  }

  .lg\:focus\:text-yellow-light:focus {
    color: #fff382;
  }

  .lg\:focus\:text-yellow-lighter:focus {
    color: #fff9c2;
  }

  .lg\:focus\:text-yellow-lightest:focus {
    color: #fcfbeb;
  }

  .lg\:focus\:text-green-darkest:focus {
    color: #0f2f21;
  }

  .lg\:focus\:text-green-darker:focus {
    color: #1a4731;
  }

  .lg\:focus\:text-green-dark:focus {
    color: #1f9d55;
  }

  .lg\:focus\:text-green-light:focus {
    color: #51d88a;
  }

  .lg\:focus\:text-green-lighter:focus {
    color: #a2f5bf;
  }

  .lg\:focus\:text-green-lightest:focus {
    color: #e3fcec;
  }

  .lg\:focus\:text-teal-darkest:focus {
    color: #0d3331;
  }

  .lg\:focus\:text-teal-darker:focus {
    color: #20504f;
  }

  .lg\:focus\:text-teal-dark:focus {
    color: #38a89d;
  }

  .lg\:focus\:text-teal-light:focus {
    color: #64d5ca;
  }

  .lg\:focus\:text-teal-lighter:focus {
    color: #a0f0ed;
  }

  .lg\:focus\:text-teal-lightest:focus {
    color: #e8fffe;
  }

  .lg\:focus\:text-blue-darkest:focus {
    color: #12283a;
  }

  .lg\:focus\:text-blue-darker:focus {
    color: #1c3d5a;
  }

  .lg\:focus\:text-blue-dark:focus {
    color: #2779bd;
  }

  .lg\:focus\:text-blue-light:focus {
    color: #6cb2eb;
  }

  .lg\:focus\:text-blue-lighter:focus {
    color: #bcdefa;
  }

  .lg\:focus\:text-blue-lightest:focus {
    color: #eff8ff;
  }

  .lg\:focus\:text-indigo-darkest:focus {
    color: #191e38;
  }

  .lg\:focus\:text-indigo-darker:focus {
    color: #2f365f;
  }

  .lg\:focus\:text-indigo-dark:focus {
    color: #5661b3;
  }

  .lg\:focus\:text-indigo-light:focus {
    color: #7886d7;
  }

  .lg\:focus\:text-indigo-lighter:focus {
    color: #b2b7ff;
  }

  .lg\:focus\:text-indigo-lightest:focus {
    color: #e6e8ff;
  }

  .lg\:focus\:text-purple-darkest:focus {
    color: #21183c;
  }

  .lg\:focus\:text-purple-darker:focus {
    color: #382b5f;
  }

  .lg\:focus\:text-purple-dark:focus {
    color: #794acf;
  }

  .lg\:focus\:text-purple-light:focus {
    color: #a779e9;
  }

  .lg\:focus\:text-purple-lighter:focus {
    color: #d6bbfc;
  }

  .lg\:focus\:text-purple-lightest:focus {
    color: #f3ebff;
  }

  .lg\:focus\:text-pink-darkest:focus {
    color: #451225;
  }

  .lg\:focus\:text-pink-darker:focus {
    color: #6f213f;
  }

  .lg\:focus\:text-pink-dark:focus {
    color: #eb5286;
  }

  .lg\:focus\:text-pink-light:focus {
    color: #fa7ea8;
  }

  .lg\:focus\:text-pink-lighter:focus {
    color: #ffbbca;
  }

  .lg\:focus\:text-pink-lightest:focus {
    color: #ffebef;
  }

  .lg\:focus\:text-nav:focus {
    color: #3F495E;
  }

  .lg\:focus\:text-side-nav:focus {
    color: #ECF0F1;
  }

  .lg\:focus\:text-nav-item:focus {
    color: #626b7a;
  }

  .lg\:focus\:text-light-border:focus {
    color: #dfe4e6;
  }

  .lg\:focus\:text-white-medium:focus {
    color: #FAFAFA;
  }

  .lg\:focus\:text-white-medium-dark:focus {
    color: #E5E9EB;
  }

  .lg\:focus\:text-red-vibrant:focus {
    color: #e46050;
  }

  .lg\:focus\:text-red-vibrant-dark:focus {
    color: #d64230;
  }

  .lg\:focus\:text-primary:focus {
    color: #51BE99;
  }

  .lg\:focus\:text-primary-dark:focus {
    color: #0e5f43;
  }

  .lg\:focus\:text-warning:focus {
    color: #f4ab43;
  }

  .lg\:focus\:text-warning-dark:focus {
    color: #c37c16;
  }

  .lg\:focus\:text-black-dark:focus {
    color: #272634;
  }

  .lg\:focus\:text-black-darkest:focus {
    color: #141418;
  }

  .lg\:focus\:text-info:focus {
    color: #52bcdc;
  }

  .lg\:focus\:text-info-dark:focus {
    color: #2cadd4;
  }

  .lg\:focus\:text-success:focus {
    color: #72b159;
  }

  .lg\:focus\:text-success-dark:focus {
    color: #5D9547;
  }

  .lg\:focus\:text-transparent:focus {
    color: transparent;
  }

  .lg\:focus\:text-black:focus {
    color: #000;
  }

  .lg\:focus\:text-white:focus {
    color: #fff;
  }

  .lg\:focus\:text-gray-100:focus {
    color: #f7fafc;
  }

  .lg\:focus\:text-gray-200:focus {
    color: #edf2f7;
  }

  .lg\:focus\:text-gray-300:focus {
    color: #e2e8f0;
  }

  .lg\:focus\:text-gray-400:focus {
    color: #cbd5e0;
  }

  .lg\:focus\:text-gray-500:focus {
    color: #a0aec0;
  }

  .lg\:focus\:text-gray-600:focus {
    color: #718096;
  }

  .lg\:focus\:text-gray-700:focus {
    color: #4a5568;
  }

  .lg\:focus\:text-gray-800:focus {
    color: #2d3748;
  }

  .lg\:focus\:text-gray-900:focus {
    color: #1a202c;
  }

  .lg\:focus\:text-red-100:focus {
    color: #fff5f5;
  }

  .lg\:focus\:text-red-200:focus {
    color: #fed7d7;
  }

  .lg\:focus\:text-red-300:focus {
    color: #feb2b2;
  }

  .lg\:focus\:text-red-400:focus {
    color: #fc8181;
  }

  .lg\:focus\:text-red-500:focus {
    color: #f56565;
  }

  .lg\:focus\:text-red-600:focus {
    color: #e53e3e;
  }

  .lg\:focus\:text-red-700:focus {
    color: #c53030;
  }

  .lg\:focus\:text-red-800:focus {
    color: #9b2c2c;
  }

  .lg\:focus\:text-red-900:focus {
    color: #742a2a;
  }

  .lg\:focus\:text-orange-100:focus {
    color: #fffaf0;
  }

  .lg\:focus\:text-orange-200:focus {
    color: #feebc8;
  }

  .lg\:focus\:text-orange-300:focus {
    color: #fbd38d;
  }

  .lg\:focus\:text-orange-400:focus {
    color: #f6ad55;
  }

  .lg\:focus\:text-orange-500:focus {
    color: #ed8936;
  }

  .lg\:focus\:text-orange-600:focus {
    color: #dd6b20;
  }

  .lg\:focus\:text-orange-700:focus {
    color: #c05621;
  }

  .lg\:focus\:text-orange-800:focus {
    color: #9c4221;
  }

  .lg\:focus\:text-orange-900:focus {
    color: #7b341e;
  }

  .lg\:focus\:text-yellow-100:focus {
    color: #fffff0;
  }

  .lg\:focus\:text-yellow-200:focus {
    color: #fefcbf;
  }

  .lg\:focus\:text-yellow-300:focus {
    color: #faf089;
  }

  .lg\:focus\:text-yellow-400:focus {
    color: #f6e05e;
  }

  .lg\:focus\:text-yellow-500:focus {
    color: #ecc94b;
  }

  .lg\:focus\:text-yellow-600:focus {
    color: #d69e2e;
  }

  .lg\:focus\:text-yellow-700:focus {
    color: #b7791f;
  }

  .lg\:focus\:text-yellow-800:focus {
    color: #975a16;
  }

  .lg\:focus\:text-yellow-900:focus {
    color: #744210;
  }

  .lg\:focus\:text-green-100:focus {
    color: #f0fff4;
  }

  .lg\:focus\:text-green-200:focus {
    color: #c6f6d5;
  }

  .lg\:focus\:text-green-300:focus {
    color: #9ae6b4;
  }

  .lg\:focus\:text-green-400:focus {
    color: #68d391;
  }

  .lg\:focus\:text-green-500:focus {
    color: #48bb78;
  }

  .lg\:focus\:text-green-600:focus {
    color: #38a169;
  }

  .lg\:focus\:text-green-700:focus {
    color: #2f855a;
  }

  .lg\:focus\:text-green-800:focus {
    color: #276749;
  }

  .lg\:focus\:text-green-900:focus {
    color: #22543d;
  }

  .lg\:focus\:text-teal-100:focus {
    color: #e6fffa;
  }

  .lg\:focus\:text-teal-200:focus {
    color: #b2f5ea;
  }

  .lg\:focus\:text-teal-300:focus {
    color: #81e6d9;
  }

  .lg\:focus\:text-teal-400:focus {
    color: #4fd1c5;
  }

  .lg\:focus\:text-teal-500:focus {
    color: #38b2ac;
  }

  .lg\:focus\:text-teal-600:focus {
    color: #319795;
  }

  .lg\:focus\:text-teal-700:focus {
    color: #2c7a7b;
  }

  .lg\:focus\:text-teal-800:focus {
    color: #285e61;
  }

  .lg\:focus\:text-teal-900:focus {
    color: #234e52;
  }

  .lg\:focus\:text-blue-100:focus {
    color: #ebf8ff;
  }

  .lg\:focus\:text-blue-200:focus {
    color: #bee3f8;
  }

  .lg\:focus\:text-blue-300:focus {
    color: #90cdf4;
  }

  .lg\:focus\:text-blue-400:focus {
    color: #63b3ed;
  }

  .lg\:focus\:text-blue-500:focus {
    color: #4299e1;
  }

  .lg\:focus\:text-blue-600:focus {
    color: #3182ce;
  }

  .lg\:focus\:text-blue-700:focus {
    color: #2b6cb0;
  }

  .lg\:focus\:text-blue-800:focus {
    color: #2c5282;
  }

  .lg\:focus\:text-blue-900:focus {
    color: #2a4365;
  }

  .lg\:focus\:text-indigo-100:focus {
    color: #ebf4ff;
  }

  .lg\:focus\:text-indigo-200:focus {
    color: #c3dafe;
  }

  .lg\:focus\:text-indigo-300:focus {
    color: #a3bffa;
  }

  .lg\:focus\:text-indigo-400:focus {
    color: #7f9cf5;
  }

  .lg\:focus\:text-indigo-500:focus {
    color: #667eea;
  }

  .lg\:focus\:text-indigo-600:focus {
    color: #5a67d8;
  }

  .lg\:focus\:text-indigo-700:focus {
    color: #4c51bf;
  }

  .lg\:focus\:text-indigo-800:focus {
    color: #434190;
  }

  .lg\:focus\:text-indigo-900:focus {
    color: #3c366b;
  }

  .lg\:focus\:text-purple-100:focus {
    color: #faf5ff;
  }

  .lg\:focus\:text-purple-200:focus {
    color: #e9d8fd;
  }

  .lg\:focus\:text-purple-300:focus {
    color: #d6bcfa;
  }

  .lg\:focus\:text-purple-400:focus {
    color: #b794f4;
  }

  .lg\:focus\:text-purple-500:focus {
    color: #9f7aea;
  }

  .lg\:focus\:text-purple-600:focus {
    color: #805ad5;
  }

  .lg\:focus\:text-purple-700:focus {
    color: #6b46c1;
  }

  .lg\:focus\:text-purple-800:focus {
    color: #553c9a;
  }

  .lg\:focus\:text-purple-900:focus {
    color: #44337a;
  }

  .lg\:focus\:text-pink-100:focus {
    color: #fff5f7;
  }

  .lg\:focus\:text-pink-200:focus {
    color: #fed7e2;
  }

  .lg\:focus\:text-pink-300:focus {
    color: #fbb6ce;
  }

  .lg\:focus\:text-pink-400:focus {
    color: #f687b3;
  }

  .lg\:focus\:text-pink-500:focus {
    color: #ed64a6;
  }

  .lg\:focus\:text-pink-600:focus {
    color: #d53f8c;
  }

  .lg\:focus\:text-pink-700:focus {
    color: #b83280;
  }

  .lg\:focus\:text-pink-800:focus {
    color: #97266d;
  }

  .lg\:focus\:text-pink-900:focus {
    color: #702459;
  }

  .lg\:text-xs {
    font-size: 0.75rem;
  }

  .lg\:text-sm {
    font-size: 0.875rem;
  }

  .lg\:text-base {
    font-size: 1rem;
  }

  .lg\:text-lg {
    font-size: 1.125rem;
  }

  .lg\:text-xl {
    font-size: 1.25rem;
  }

  .lg\:text-2xl {
    font-size: 1.5rem;
  }

  .lg\:text-3xl {
    font-size: 1.875rem;
  }

  .lg\:text-4xl {
    font-size: 2.25rem;
  }

  .lg\:text-5xl {
    font-size: 3rem;
  }

  .lg\:text-6xl {
    font-size: 4rem;
  }

  .lg\:italic {
    font-style: italic;
  }

  .lg\:not-italic {
    font-style: normal;
  }

  .lg\:uppercase {
    text-transform: uppercase;
  }

  .lg\:lowercase {
    text-transform: lowercase;
  }

  .lg\:capitalize {
    text-transform: capitalize;
  }

  .lg\:normal-case {
    text-transform: none;
  }

  .lg\:underline {
    text-decoration: underline;
  }

  .lg\:line-through {
    text-decoration: line-through;
  }

  .lg\:no-underline {
    text-decoration: none;
  }

  .lg\:hover\:underline:hover {
    text-decoration: underline;
  }

  .lg\:hover\:line-through:hover {
    text-decoration: line-through;
  }

  .lg\:hover\:no-underline:hover {
    text-decoration: none;
  }

  .lg\:focus\:underline:focus {
    text-decoration: underline;
  }

  .lg\:focus\:line-through:focus {
    text-decoration: line-through;
  }

  .lg\:focus\:no-underline:focus {
    text-decoration: none;
  }

  .lg\:antialiased {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }

  .lg\:subpixel-antialiased {
    -webkit-font-smoothing: auto;
    -moz-osx-font-smoothing: auto;
  }

  .lg\:tracking-tighter {
    letter-spacing: -0.05em;
  }

  .lg\:tracking-tight {
    letter-spacing: -0.025em;
  }

  .lg\:tracking-normal {
    letter-spacing: 0;
  }

  .lg\:tracking-wide {
    letter-spacing: 0.025em;
  }

  .lg\:tracking-wider {
    letter-spacing: 0.05em;
  }

  .lg\:tracking-widest {
    letter-spacing: 0.1em;
  }

  .lg\:select-none {
    user-select: none;
  }

  .lg\:select-text {
    user-select: text;
  }

  .lg\:select-all {
    user-select: all;
  }

  .lg\:select-auto {
    user-select: auto;
  }

  .lg\:align-baseline {
    vertical-align: baseline;
  }

  .lg\:align-top {
    vertical-align: top;
  }

  .lg\:align-middle {
    vertical-align: middle;
  }

  .lg\:align-bottom {
    vertical-align: bottom;
  }

  .lg\:align-text-top {
    vertical-align: text-top;
  }

  .lg\:align-text-bottom {
    vertical-align: text-bottom;
  }

  .lg\:visible {
    visibility: visible;
  }

  .lg\:invisible {
    visibility: hidden;
  }

  .lg\:whitespace-normal {
    white-space: normal;
  }

  .lg\:whitespace-no-wrap {
    white-space: nowrap;
  }

  .lg\:whitespace-pre {
    white-space: pre;
  }

  .lg\:whitespace-pre-line {
    white-space: pre-line;
  }

  .lg\:whitespace-pre-wrap {
    white-space: pre-wrap;
  }

  .lg\:break-normal {
    overflow-wrap: normal;
    word-break: normal;
  }

  .lg\:break-words {
    overflow-wrap: break-word;
  }

  .lg\:break-all {
    word-break: break-all;
  }

  .lg\:truncate {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
  }

  .lg\:w-0 {
    width: 0;
  }

  .lg\:w-1 {
    width: 0.25rem;
  }

  .lg\:w-2 {
    width: 0.5rem;
  }

  .lg\:w-3 {
    width: 0.75rem;
  }

  .lg\:w-4 {
    width: 1rem;
  }

  .lg\:w-5 {
    width: 1.25rem;
  }

  .lg\:w-6 {
    width: 1.5rem;
  }

  .lg\:w-8 {
    width: 2rem;
  }

  .lg\:w-10 {
    width: 2.5rem;
  }

  .lg\:w-12 {
    width: 3rem;
  }

  .lg\:w-16 {
    width: 4rem;
  }

  .lg\:w-20 {
    width: 5rem;
  }

  .lg\:w-24 {
    width: 6rem;
  }

  .lg\:w-32 {
    width: 8rem;
  }

  .lg\:w-40 {
    width: 10rem;
  }

  .lg\:w-48 {
    width: 12rem;
  }

  .lg\:w-56 {
    width: 14rem;
  }

  .lg\:w-64 {
    width: 16rem;
  }

  .lg\:w-auto {
    width: auto;
  }

  .lg\:w-px {
    width: 1px;
  }

  .lg\:w-1\/2 {
    width: 50%;
  }

  .lg\:w-1\/3 {
    width: 33.333333%;
  }

  .lg\:w-2\/3 {
    width: 66.666667%;
  }

  .lg\:w-1\/4 {
    width: 25%;
  }

  .lg\:w-2\/4 {
    width: 50%;
  }

  .lg\:w-3\/4 {
    width: 75%;
  }

  .lg\:w-1\/5 {
    width: 20%;
  }

  .lg\:w-2\/5 {
    width: 40%;
  }

  .lg\:w-3\/5 {
    width: 60%;
  }

  .lg\:w-4\/5 {
    width: 80%;
  }

  .lg\:w-1\/6 {
    width: 16.666667%;
  }

  .lg\:w-2\/6 {
    width: 33.333333%;
  }

  .lg\:w-3\/6 {
    width: 50%;
  }

  .lg\:w-4\/6 {
    width: 66.666667%;
  }

  .lg\:w-5\/6 {
    width: 83.333333%;
  }

  .lg\:w-1\/12 {
    width: 8.333333%;
  }

  .lg\:w-2\/12 {
    width: 16.666667%;
  }

  .lg\:w-3\/12 {
    width: 25%;
  }

  .lg\:w-4\/12 {
    width: 33.333333%;
  }

  .lg\:w-5\/12 {
    width: 41.666667%;
  }

  .lg\:w-6\/12 {
    width: 50%;
  }

  .lg\:w-7\/12 {
    width: 58.333333%;
  }

  .lg\:w-8\/12 {
    width: 66.666667%;
  }

  .lg\:w-9\/12 {
    width: 75%;
  }

  .lg\:w-10\/12 {
    width: 83.333333%;
  }

  .lg\:w-11\/12 {
    width: 91.666667%;
  }

  .lg\:w-full {
    width: 100%;
  }

  .lg\:w-screen {
    width: 100vw;
  }

  .lg\:z-0 {
    z-index: 0;
  }

  .lg\:z-10 {
    z-index: 10;
  }

  .lg\:z-20 {
    z-index: 20;
  }

  .lg\:z-30 {
    z-index: 30;
  }

  .lg\:z-40 {
    z-index: 40;
  }

  .lg\:z-50 {
    z-index: 50;
  }

  .lg\:z-auto {
    z-index: auto;
  }
}

@media (min-width: 1280px) {
  .xl\:sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border-width: 0;
  }

  .xl\:not-sr-only {
    position: static;
    width: auto;
    height: auto;
    padding: 0;
    margin: 0;
    overflow: visible;
    clip: auto;
    white-space: normal;
  }

  .xl\:focus\:sr-only:focus {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border-width: 0;
  }

  .xl\:focus\:not-sr-only:focus {
    position: static;
    width: auto;
    height: auto;
    padding: 0;
    margin: 0;
    overflow: visible;
    clip: auto;
    white-space: normal;
  }

  .xl\:appearance-none {
    appearance: none;
  }

  .xl\:bg-fixed {
    background-attachment: fixed;
  }

  .xl\:bg-local {
    background-attachment: local;
  }

  .xl\:bg-scroll {
    background-attachment: scroll;
  }

  .xl\:bg-grey-darkest {
    background-color: #3d4852;
  }

  .xl\:bg-grey-darker {
    background-color: #606f7b;
  }

  .xl\:bg-grey-dark {
    background-color: #8795a1;
  }

  .xl\:bg-grey {
    background-color: #b8c2cc;
  }

  .xl\:bg-grey-light {
    background-color: #dae1e7;
  }

  .xl\:bg-grey-lighter {
    background-color: #f1f5f8;
  }

  .xl\:bg-grey-lightest {
    background-color: #f8fafc;
  }

  .xl\:bg-grey-mid-light {
    background-color: #f3f3f4;
  }

  .xl\:bg-white-lightest {
    background-color: #f4f4f4;
  }

  .xl\:bg-red-darkest {
    background-color: #3b0d0c;
  }

  .xl\:bg-red-darker {
    background-color: #621b18;
  }

  .xl\:bg-red-dark {
    background-color: #cc1f1a;
  }

  .xl\:bg-red-light {
    background-color: #ef5753;
  }

  .xl\:bg-red-lighter {
    background-color: #f9acaa;
  }

  .xl\:bg-red-lightest {
    background-color: #fcebea;
  }

  .xl\:bg-orange-darkest {
    background-color: #462a16;
  }

  .xl\:bg-orange-darker {
    background-color: #613b1f;
  }

  .xl\:bg-orange-dark {
    background-color: #de751f;
  }

  .xl\:bg-orange-light {
    background-color: #faad63;
  }

  .xl\:bg-orange-lighter {
    background-color: #fcd9b6;
  }

  .xl\:bg-orange-lightest {
    background-color: #fff5eb;
  }

  .xl\:bg-yellow-darkest {
    background-color: #453411;
  }

  .xl\:bg-yellow-darker {
    background-color: #684f1d;
  }

  .xl\:bg-yellow-dark {
    background-color: #f2d024;
  }

  .xl\:bg-yellow-light {
    background-color: #fff382;
  }

  .xl\:bg-yellow-lighter {
    background-color: #fff9c2;
  }

  .xl\:bg-yellow-lightest {
    background-color: #fcfbeb;
  }

  .xl\:bg-green-darkest {
    background-color: #0f2f21;
  }

  .xl\:bg-green-darker {
    background-color: #1a4731;
  }

  .xl\:bg-green-dark {
    background-color: #1f9d55;
  }

  .xl\:bg-green-light {
    background-color: #51d88a;
  }

  .xl\:bg-green-lighter {
    background-color: #a2f5bf;
  }

  .xl\:bg-green-lightest {
    background-color: #e3fcec;
  }

  .xl\:bg-teal-darkest {
    background-color: #0d3331;
  }

  .xl\:bg-teal-darker {
    background-color: #20504f;
  }

  .xl\:bg-teal-dark {
    background-color: #38a89d;
  }

  .xl\:bg-teal-light {
    background-color: #64d5ca;
  }

  .xl\:bg-teal-lighter {
    background-color: #a0f0ed;
  }

  .xl\:bg-teal-lightest {
    background-color: #e8fffe;
  }

  .xl\:bg-blue-darkest {
    background-color: #12283a;
  }

  .xl\:bg-blue-darker {
    background-color: #1c3d5a;
  }

  .xl\:bg-blue-dark {
    background-color: #2779bd;
  }

  .xl\:bg-blue-light {
    background-color: #6cb2eb;
  }

  .xl\:bg-blue-lighter {
    background-color: #bcdefa;
  }

  .xl\:bg-blue-lightest {
    background-color: #eff8ff;
  }

  .xl\:bg-indigo-darkest {
    background-color: #191e38;
  }

  .xl\:bg-indigo-darker {
    background-color: #2f365f;
  }

  .xl\:bg-indigo-dark {
    background-color: #5661b3;
  }

  .xl\:bg-indigo-light {
    background-color: #7886d7;
  }

  .xl\:bg-indigo-lighter {
    background-color: #b2b7ff;
  }

  .xl\:bg-indigo-lightest {
    background-color: #e6e8ff;
  }

  .xl\:bg-purple-darkest {
    background-color: #21183c;
  }

  .xl\:bg-purple-darker {
    background-color: #382b5f;
  }

  .xl\:bg-purple-dark {
    background-color: #794acf;
  }

  .xl\:bg-purple-light {
    background-color: #a779e9;
  }

  .xl\:bg-purple-lighter {
    background-color: #d6bbfc;
  }

  .xl\:bg-purple-lightest {
    background-color: #f3ebff;
  }

  .xl\:bg-pink-darkest {
    background-color: #451225;
  }

  .xl\:bg-pink-darker {
    background-color: #6f213f;
  }

  .xl\:bg-pink-dark {
    background-color: #eb5286;
  }

  .xl\:bg-pink-light {
    background-color: #fa7ea8;
  }

  .xl\:bg-pink-lighter {
    background-color: #ffbbca;
  }

  .xl\:bg-pink-lightest {
    background-color: #ffebef;
  }

  .xl\:bg-nav {
    background-color: #3F495E;
  }

  .xl\:bg-side-nav {
    background-color: #ECF0F1;
  }

  .xl\:bg-nav-item {
    background-color: #626b7a;
  }

  .xl\:bg-light-border {
    background-color: #dfe4e6;
  }

  .xl\:bg-white-medium {
    background-color: #FAFAFA;
  }

  .xl\:bg-white-medium-dark {
    background-color: #E5E9EB;
  }

  .xl\:bg-red-vibrant {
    background-color: #e46050;
  }

  .xl\:bg-red-vibrant-dark {
    background-color: #d64230;
  }

  .xl\:bg-primary {
    background-color: #51BE99;
  }

  .xl\:bg-primary-dark {
    background-color: #0e5f43;
  }

  .xl\:bg-warning {
    background-color: #f4ab43;
  }

  .xl\:bg-warning-dark {
    background-color: #c37c16;
  }

  .xl\:bg-black-dark {
    background-color: #272634;
  }

  .xl\:bg-black-darkest {
    background-color: #141418;
  }

  .xl\:bg-info {
    background-color: #52bcdc;
  }

  .xl\:bg-info-dark {
    background-color: #2cadd4;
  }

  .xl\:bg-success {
    background-color: #72b159;
  }

  .xl\:bg-success-dark {
    background-color: #5D9547;
  }

  .xl\:bg-transparent {
    background-color: transparent;
  }

  .xl\:bg-black {
    background-color: #000;
  }

  .xl\:bg-white {
    background-color: #fff;
  }

  .xl\:bg-gray-100 {
    background-color: #f7fafc;
  }

  .xl\:bg-gray-200 {
    background-color: #edf2f7;
  }

  .xl\:bg-gray-300 {
    background-color: #e2e8f0;
  }

  .xl\:bg-gray-400 {
    background-color: #cbd5e0;
  }

  .xl\:bg-gray-500 {
    background-color: #a0aec0;
  }

  .xl\:bg-gray-600 {
    background-color: #718096;
  }

  .xl\:bg-gray-700 {
    background-color: #4a5568;
  }

  .xl\:bg-gray-800 {
    background-color: #2d3748;
  }

  .xl\:bg-gray-900 {
    background-color: #1a202c;
  }

  .xl\:bg-red-100 {
    background-color: #fff5f5;
  }

  .xl\:bg-red-200 {
    background-color: #fed7d7;
  }

  .xl\:bg-red-300 {
    background-color: #feb2b2;
  }

  .xl\:bg-red-400 {
    background-color: #fc8181;
  }

  .xl\:bg-red-500 {
    background-color: #f56565;
  }

  .xl\:bg-red-600 {
    background-color: #e53e3e;
  }

  .xl\:bg-red-700 {
    background-color: #c53030;
  }

  .xl\:bg-red-800 {
    background-color: #9b2c2c;
  }

  .xl\:bg-red-900 {
    background-color: #742a2a;
  }

  .xl\:bg-orange-100 {
    background-color: #fffaf0;
  }

  .xl\:bg-orange-200 {
    background-color: #feebc8;
  }

  .xl\:bg-orange-300 {
    background-color: #fbd38d;
  }

  .xl\:bg-orange-400 {
    background-color: #f6ad55;
  }

  .xl\:bg-orange-500 {
    background-color: #ed8936;
  }

  .xl\:bg-orange-600 {
    background-color: #dd6b20;
  }

  .xl\:bg-orange-700 {
    background-color: #c05621;
  }

  .xl\:bg-orange-800 {
    background-color: #9c4221;
  }

  .xl\:bg-orange-900 {
    background-color: #7b341e;
  }

  .xl\:bg-yellow-100 {
    background-color: #fffff0;
  }

  .xl\:bg-yellow-200 {
    background-color: #fefcbf;
  }

  .xl\:bg-yellow-300 {
    background-color: #faf089;
  }

  .xl\:bg-yellow-400 {
    background-color: #f6e05e;
  }

  .xl\:bg-yellow-500 {
    background-color: #ecc94b;
  }

  .xl\:bg-yellow-600 {
    background-color: #d69e2e;
  }

  .xl\:bg-yellow-700 {
    background-color: #b7791f;
  }

  .xl\:bg-yellow-800 {
    background-color: #975a16;
  }

  .xl\:bg-yellow-900 {
    background-color: #744210;
  }

  .xl\:bg-green-100 {
    background-color: #f0fff4;
  }

  .xl\:bg-green-200 {
    background-color: #c6f6d5;
  }

  .xl\:bg-green-300 {
    background-color: #9ae6b4;
  }

  .xl\:bg-green-400 {
    background-color: #68d391;
  }

  .xl\:bg-green-500 {
    background-color: #48bb78;
  }

  .xl\:bg-green-600 {
    background-color: #38a169;
  }

  .xl\:bg-green-700 {
    background-color: #2f855a;
  }

  .xl\:bg-green-800 {
    background-color: #276749;
  }

  .xl\:bg-green-900 {
    background-color: #22543d;
  }

  .xl\:bg-teal-100 {
    background-color: #e6fffa;
  }

  .xl\:bg-teal-200 {
    background-color: #b2f5ea;
  }

  .xl\:bg-teal-300 {
    background-color: #81e6d9;
  }

  .xl\:bg-teal-400 {
    background-color: #4fd1c5;
  }

  .xl\:bg-teal-500 {
    background-color: #38b2ac;
  }

  .xl\:bg-teal-600 {
    background-color: #319795;
  }

  .xl\:bg-teal-700 {
    background-color: #2c7a7b;
  }

  .xl\:bg-teal-800 {
    background-color: #285e61;
  }

  .xl\:bg-teal-900 {
    background-color: #234e52;
  }

  .xl\:bg-blue-100 {
    background-color: #ebf8ff;
  }

  .xl\:bg-blue-200 {
    background-color: #bee3f8;
  }

  .xl\:bg-blue-300 {
    background-color: #90cdf4;
  }

  .xl\:bg-blue-400 {
    background-color: #63b3ed;
  }

  .xl\:bg-blue-500 {
    background-color: #4299e1;
  }

  .xl\:bg-blue-600 {
    background-color: #3182ce;
  }

  .xl\:bg-blue-700 {
    background-color: #2b6cb0;
  }

  .xl\:bg-blue-800 {
    background-color: #2c5282;
  }

  .xl\:bg-blue-900 {
    background-color: #2a4365;
  }

  .xl\:bg-indigo-100 {
    background-color: #ebf4ff;
  }

  .xl\:bg-indigo-200 {
    background-color: #c3dafe;
  }

  .xl\:bg-indigo-300 {
    background-color: #a3bffa;
  }

  .xl\:bg-indigo-400 {
    background-color: #7f9cf5;
  }

  .xl\:bg-indigo-500 {
    background-color: #667eea;
  }

  .xl\:bg-indigo-600 {
    background-color: #5a67d8;
  }

  .xl\:bg-indigo-700 {
    background-color: #4c51bf;
  }

  .xl\:bg-indigo-800 {
    background-color: #434190;
  }

  .xl\:bg-indigo-900 {
    background-color: #3c366b;
  }

  .xl\:bg-purple-100 {
    background-color: #faf5ff;
  }

  .xl\:bg-purple-200 {
    background-color: #e9d8fd;
  }

  .xl\:bg-purple-300 {
    background-color: #d6bcfa;
  }

  .xl\:bg-purple-400 {
    background-color: #b794f4;
  }

  .xl\:bg-purple-500 {
    background-color: #9f7aea;
  }

  .xl\:bg-purple-600 {
    background-color: #805ad5;
  }

  .xl\:bg-purple-700 {
    background-color: #6b46c1;
  }

  .xl\:bg-purple-800 {
    background-color: #553c9a;
  }

  .xl\:bg-purple-900 {
    background-color: #44337a;
  }

  .xl\:bg-pink-100 {
    background-color: #fff5f7;
  }

  .xl\:bg-pink-200 {
    background-color: #fed7e2;
  }

  .xl\:bg-pink-300 {
    background-color: #fbb6ce;
  }

  .xl\:bg-pink-400 {
    background-color: #f687b3;
  }

  .xl\:bg-pink-500 {
    background-color: #ed64a6;
  }

  .xl\:bg-pink-600 {
    background-color: #d53f8c;
  }

  .xl\:bg-pink-700 {
    background-color: #b83280;
  }

  .xl\:bg-pink-800 {
    background-color: #97266d;
  }

  .xl\:bg-pink-900 {
    background-color: #702459;
  }

  .xl\:hover\:bg-grey-darkest:hover {
    background-color: #3d4852;
  }

  .xl\:hover\:bg-grey-darker:hover {
    background-color: #606f7b;
  }

  .xl\:hover\:bg-grey-dark:hover {
    background-color: #8795a1;
  }

  .xl\:hover\:bg-grey:hover {
    background-color: #b8c2cc;
  }

  .xl\:hover\:bg-grey-light:hover {
    background-color: #dae1e7;
  }

  .xl\:hover\:bg-grey-lighter:hover {
    background-color: #f1f5f8;
  }

  .xl\:hover\:bg-grey-lightest:hover {
    background-color: #f8fafc;
  }

  .xl\:hover\:bg-grey-mid-light:hover {
    background-color: #f3f3f4;
  }

  .xl\:hover\:bg-white-lightest:hover {
    background-color: #f4f4f4;
  }

  .xl\:hover\:bg-red-darkest:hover {
    background-color: #3b0d0c;
  }

  .xl\:hover\:bg-red-darker:hover {
    background-color: #621b18;
  }

  .xl\:hover\:bg-red-dark:hover {
    background-color: #cc1f1a;
  }

  .xl\:hover\:bg-red-light:hover {
    background-color: #ef5753;
  }

  .xl\:hover\:bg-red-lighter:hover {
    background-color: #f9acaa;
  }

  .xl\:hover\:bg-red-lightest:hover {
    background-color: #fcebea;
  }

  .xl\:hover\:bg-orange-darkest:hover {
    background-color: #462a16;
  }

  .xl\:hover\:bg-orange-darker:hover {
    background-color: #613b1f;
  }

  .xl\:hover\:bg-orange-dark:hover {
    background-color: #de751f;
  }

  .xl\:hover\:bg-orange-light:hover {
    background-color: #faad63;
  }

  .xl\:hover\:bg-orange-lighter:hover {
    background-color: #fcd9b6;
  }

  .xl\:hover\:bg-orange-lightest:hover {
    background-color: #fff5eb;
  }

  .xl\:hover\:bg-yellow-darkest:hover {
    background-color: #453411;
  }

  .xl\:hover\:bg-yellow-darker:hover {
    background-color: #684f1d;
  }

  .xl\:hover\:bg-yellow-dark:hover {
    background-color: #f2d024;
  }

  .xl\:hover\:bg-yellow-light:hover {
    background-color: #fff382;
  }

  .xl\:hover\:bg-yellow-lighter:hover {
    background-color: #fff9c2;
  }

  .xl\:hover\:bg-yellow-lightest:hover {
    background-color: #fcfbeb;
  }

  .xl\:hover\:bg-green-darkest:hover {
    background-color: #0f2f21;
  }

  .xl\:hover\:bg-green-darker:hover {
    background-color: #1a4731;
  }

  .xl\:hover\:bg-green-dark:hover {
    background-color: #1f9d55;
  }

  .xl\:hover\:bg-green-light:hover {
    background-color: #51d88a;
  }

  .xl\:hover\:bg-green-lighter:hover {
    background-color: #a2f5bf;
  }

  .xl\:hover\:bg-green-lightest:hover {
    background-color: #e3fcec;
  }

  .xl\:hover\:bg-teal-darkest:hover {
    background-color: #0d3331;
  }

  .xl\:hover\:bg-teal-darker:hover {
    background-color: #20504f;
  }

  .xl\:hover\:bg-teal-dark:hover {
    background-color: #38a89d;
  }

  .xl\:hover\:bg-teal-light:hover {
    background-color: #64d5ca;
  }

  .xl\:hover\:bg-teal-lighter:hover {
    background-color: #a0f0ed;
  }

  .xl\:hover\:bg-teal-lightest:hover {
    background-color: #e8fffe;
  }

  .xl\:hover\:bg-blue-darkest:hover {
    background-color: #12283a;
  }

  .xl\:hover\:bg-blue-darker:hover {
    background-color: #1c3d5a;
  }

  .xl\:hover\:bg-blue-dark:hover {
    background-color: #2779bd;
  }

  .xl\:hover\:bg-blue-light:hover {
    background-color: #6cb2eb;
  }

  .xl\:hover\:bg-blue-lighter:hover {
    background-color: #bcdefa;
  }

  .xl\:hover\:bg-blue-lightest:hover {
    background-color: #eff8ff;
  }

  .xl\:hover\:bg-indigo-darkest:hover {
    background-color: #191e38;
  }

  .xl\:hover\:bg-indigo-darker:hover {
    background-color: #2f365f;
  }

  .xl\:hover\:bg-indigo-dark:hover {
    background-color: #5661b3;
  }

  .xl\:hover\:bg-indigo-light:hover {
    background-color: #7886d7;
  }

  .xl\:hover\:bg-indigo-lighter:hover {
    background-color: #b2b7ff;
  }

  .xl\:hover\:bg-indigo-lightest:hover {
    background-color: #e6e8ff;
  }

  .xl\:hover\:bg-purple-darkest:hover {
    background-color: #21183c;
  }

  .xl\:hover\:bg-purple-darker:hover {
    background-color: #382b5f;
  }

  .xl\:hover\:bg-purple-dark:hover {
    background-color: #794acf;
  }

  .xl\:hover\:bg-purple-light:hover {
    background-color: #a779e9;
  }

  .xl\:hover\:bg-purple-lighter:hover {
    background-color: #d6bbfc;
  }

  .xl\:hover\:bg-purple-lightest:hover {
    background-color: #f3ebff;
  }

  .xl\:hover\:bg-pink-darkest:hover {
    background-color: #451225;
  }

  .xl\:hover\:bg-pink-darker:hover {
    background-color: #6f213f;
  }

  .xl\:hover\:bg-pink-dark:hover {
    background-color: #eb5286;
  }

  .xl\:hover\:bg-pink-light:hover {
    background-color: #fa7ea8;
  }

  .xl\:hover\:bg-pink-lighter:hover {
    background-color: #ffbbca;
  }

  .xl\:hover\:bg-pink-lightest:hover {
    background-color: #ffebef;
  }

  .xl\:hover\:bg-nav:hover {
    background-color: #3F495E;
  }

  .xl\:hover\:bg-side-nav:hover {
    background-color: #ECF0F1;
  }

  .xl\:hover\:bg-nav-item:hover {
    background-color: #626b7a;
  }

  .xl\:hover\:bg-light-border:hover {
    background-color: #dfe4e6;
  }

  .xl\:hover\:bg-white-medium:hover {
    background-color: #FAFAFA;
  }

  .xl\:hover\:bg-white-medium-dark:hover {
    background-color: #E5E9EB;
  }

  .xl\:hover\:bg-red-vibrant:hover {
    background-color: #e46050;
  }

  .xl\:hover\:bg-red-vibrant-dark:hover {
    background-color: #d64230;
  }

  .xl\:hover\:bg-primary:hover {
    background-color: #51BE99;
  }

  .xl\:hover\:bg-primary-dark:hover {
    background-color: #0e5f43;
  }

  .xl\:hover\:bg-warning:hover {
    background-color: #f4ab43;
  }

  .xl\:hover\:bg-warning-dark:hover {
    background-color: #c37c16;
  }

  .xl\:hover\:bg-black-dark:hover {
    background-color: #272634;
  }

  .xl\:hover\:bg-black-darkest:hover {
    background-color: #141418;
  }

  .xl\:hover\:bg-info:hover {
    background-color: #52bcdc;
  }

  .xl\:hover\:bg-info-dark:hover {
    background-color: #2cadd4;
  }

  .xl\:hover\:bg-success:hover {
    background-color: #72b159;
  }

  .xl\:hover\:bg-success-dark:hover {
    background-color: #5D9547;
  }

  .xl\:hover\:bg-transparent:hover {
    background-color: transparent;
  }

  .xl\:hover\:bg-black:hover {
    background-color: #000;
  }

  .xl\:hover\:bg-white:hover {
    background-color: #fff;
  }

  .xl\:hover\:bg-gray-100:hover {
    background-color: #f7fafc;
  }

  .xl\:hover\:bg-gray-200:hover {
    background-color: #edf2f7;
  }

  .xl\:hover\:bg-gray-300:hover {
    background-color: #e2e8f0;
  }

  .xl\:hover\:bg-gray-400:hover {
    background-color: #cbd5e0;
  }

  .xl\:hover\:bg-gray-500:hover {
    background-color: #a0aec0;
  }

  .xl\:hover\:bg-gray-600:hover {
    background-color: #718096;
  }

  .xl\:hover\:bg-gray-700:hover {
    background-color: #4a5568;
  }

  .xl\:hover\:bg-gray-800:hover {
    background-color: #2d3748;
  }

  .xl\:hover\:bg-gray-900:hover {
    background-color: #1a202c;
  }

  .xl\:hover\:bg-red-100:hover {
    background-color: #fff5f5;
  }

  .xl\:hover\:bg-red-200:hover {
    background-color: #fed7d7;
  }

  .xl\:hover\:bg-red-300:hover {
    background-color: #feb2b2;
  }

  .xl\:hover\:bg-red-400:hover {
    background-color: #fc8181;
  }

  .xl\:hover\:bg-red-500:hover {
    background-color: #f56565;
  }

  .xl\:hover\:bg-red-600:hover {
    background-color: #e53e3e;
  }

  .xl\:hover\:bg-red-700:hover {
    background-color: #c53030;
  }

  .xl\:hover\:bg-red-800:hover {
    background-color: #9b2c2c;
  }

  .xl\:hover\:bg-red-900:hover {
    background-color: #742a2a;
  }

  .xl\:hover\:bg-orange-100:hover {
    background-color: #fffaf0;
  }

  .xl\:hover\:bg-orange-200:hover {
    background-color: #feebc8;
  }

  .xl\:hover\:bg-orange-300:hover {
    background-color: #fbd38d;
  }

  .xl\:hover\:bg-orange-400:hover {
    background-color: #f6ad55;
  }

  .xl\:hover\:bg-orange-500:hover {
    background-color: #ed8936;
  }

  .xl\:hover\:bg-orange-600:hover {
    background-color: #dd6b20;
  }

  .xl\:hover\:bg-orange-700:hover {
    background-color: #c05621;
  }

  .xl\:hover\:bg-orange-800:hover {
    background-color: #9c4221;
  }

  .xl\:hover\:bg-orange-900:hover {
    background-color: #7b341e;
  }

  .xl\:hover\:bg-yellow-100:hover {
    background-color: #fffff0;
  }

  .xl\:hover\:bg-yellow-200:hover {
    background-color: #fefcbf;
  }

  .xl\:hover\:bg-yellow-300:hover {
    background-color: #faf089;
  }

  .xl\:hover\:bg-yellow-400:hover {
    background-color: #f6e05e;
  }

  .xl\:hover\:bg-yellow-500:hover {
    background-color: #ecc94b;
  }

  .xl\:hover\:bg-yellow-600:hover {
    background-color: #d69e2e;
  }

  .xl\:hover\:bg-yellow-700:hover {
    background-color: #b7791f;
  }

  .xl\:hover\:bg-yellow-800:hover {
    background-color: #975a16;
  }

  .xl\:hover\:bg-yellow-900:hover {
    background-color: #744210;
  }

  .xl\:hover\:bg-green-100:hover {
    background-color: #f0fff4;
  }

  .xl\:hover\:bg-green-200:hover {
    background-color: #c6f6d5;
  }

  .xl\:hover\:bg-green-300:hover {
    background-color: #9ae6b4;
  }

  .xl\:hover\:bg-green-400:hover {
    background-color: #68d391;
  }

  .xl\:hover\:bg-green-500:hover {
    background-color: #48bb78;
  }

  .xl\:hover\:bg-green-600:hover {
    background-color: #38a169;
  }

  .xl\:hover\:bg-green-700:hover {
    background-color: #2f855a;
  }

  .xl\:hover\:bg-green-800:hover {
    background-color: #276749;
  }

  .xl\:hover\:bg-green-900:hover {
    background-color: #22543d;
  }

  .xl\:hover\:bg-teal-100:hover {
    background-color: #e6fffa;
  }

  .xl\:hover\:bg-teal-200:hover {
    background-color: #b2f5ea;
  }

  .xl\:hover\:bg-teal-300:hover {
    background-color: #81e6d9;
  }

  .xl\:hover\:bg-teal-400:hover {
    background-color: #4fd1c5;
  }

  .xl\:hover\:bg-teal-500:hover {
    background-color: #38b2ac;
  }

  .xl\:hover\:bg-teal-600:hover {
    background-color: #319795;
  }

  .xl\:hover\:bg-teal-700:hover {
    background-color: #2c7a7b;
  }

  .xl\:hover\:bg-teal-800:hover {
    background-color: #285e61;
  }

  .xl\:hover\:bg-teal-900:hover {
    background-color: #234e52;
  }

  .xl\:hover\:bg-blue-100:hover {
    background-color: #ebf8ff;
  }

  .xl\:hover\:bg-blue-200:hover {
    background-color: #bee3f8;
  }

  .xl\:hover\:bg-blue-300:hover {
    background-color: #90cdf4;
  }

  .xl\:hover\:bg-blue-400:hover {
    background-color: #63b3ed;
  }

  .xl\:hover\:bg-blue-500:hover {
    background-color: #4299e1;
  }

  .xl\:hover\:bg-blue-600:hover {
    background-color: #3182ce;
  }

  .xl\:hover\:bg-blue-700:hover {
    background-color: #2b6cb0;
  }

  .xl\:hover\:bg-blue-800:hover {
    background-color: #2c5282;
  }

  .xl\:hover\:bg-blue-900:hover {
    background-color: #2a4365;
  }

  .xl\:hover\:bg-indigo-100:hover {
    background-color: #ebf4ff;
  }

  .xl\:hover\:bg-indigo-200:hover {
    background-color: #c3dafe;
  }

  .xl\:hover\:bg-indigo-300:hover {
    background-color: #a3bffa;
  }

  .xl\:hover\:bg-indigo-400:hover {
    background-color: #7f9cf5;
  }

  .xl\:hover\:bg-indigo-500:hover {
    background-color: #667eea;
  }

  .xl\:hover\:bg-indigo-600:hover {
    background-color: #5a67d8;
  }

  .xl\:hover\:bg-indigo-700:hover {
    background-color: #4c51bf;
  }

  .xl\:hover\:bg-indigo-800:hover {
    background-color: #434190;
  }

  .xl\:hover\:bg-indigo-900:hover {
    background-color: #3c366b;
  }

  .xl\:hover\:bg-purple-100:hover {
    background-color: #faf5ff;
  }

  .xl\:hover\:bg-purple-200:hover {
    background-color: #e9d8fd;
  }

  .xl\:hover\:bg-purple-300:hover {
    background-color: #d6bcfa;
  }

  .xl\:hover\:bg-purple-400:hover {
    background-color: #b794f4;
  }

  .xl\:hover\:bg-purple-500:hover {
    background-color: #9f7aea;
  }

  .xl\:hover\:bg-purple-600:hover {
    background-color: #805ad5;
  }

  .xl\:hover\:bg-purple-700:hover {
    background-color: #6b46c1;
  }

  .xl\:hover\:bg-purple-800:hover {
    background-color: #553c9a;
  }

  .xl\:hover\:bg-purple-900:hover {
    background-color: #44337a;
  }

  .xl\:hover\:bg-pink-100:hover {
    background-color: #fff5f7;
  }

  .xl\:hover\:bg-pink-200:hover {
    background-color: #fed7e2;
  }

  .xl\:hover\:bg-pink-300:hover {
    background-color: #fbb6ce;
  }

  .xl\:hover\:bg-pink-400:hover {
    background-color: #f687b3;
  }

  .xl\:hover\:bg-pink-500:hover {
    background-color: #ed64a6;
  }

  .xl\:hover\:bg-pink-600:hover {
    background-color: #d53f8c;
  }

  .xl\:hover\:bg-pink-700:hover {
    background-color: #b83280;
  }

  .xl\:hover\:bg-pink-800:hover {
    background-color: #97266d;
  }

  .xl\:hover\:bg-pink-900:hover {
    background-color: #702459;
  }

  .xl\:focus\:bg-grey-darkest:focus {
    background-color: #3d4852;
  }

  .xl\:focus\:bg-grey-darker:focus {
    background-color: #606f7b;
  }

  .xl\:focus\:bg-grey-dark:focus {
    background-color: #8795a1;
  }

  .xl\:focus\:bg-grey:focus {
    background-color: #b8c2cc;
  }

  .xl\:focus\:bg-grey-light:focus {
    background-color: #dae1e7;
  }

  .xl\:focus\:bg-grey-lighter:focus {
    background-color: #f1f5f8;
  }

  .xl\:focus\:bg-grey-lightest:focus {
    background-color: #f8fafc;
  }

  .xl\:focus\:bg-grey-mid-light:focus {
    background-color: #f3f3f4;
  }

  .xl\:focus\:bg-white-lightest:focus {
    background-color: #f4f4f4;
  }

  .xl\:focus\:bg-red-darkest:focus {
    background-color: #3b0d0c;
  }

  .xl\:focus\:bg-red-darker:focus {
    background-color: #621b18;
  }

  .xl\:focus\:bg-red-dark:focus {
    background-color: #cc1f1a;
  }

  .xl\:focus\:bg-red-light:focus {
    background-color: #ef5753;
  }

  .xl\:focus\:bg-red-lighter:focus {
    background-color: #f9acaa;
  }

  .xl\:focus\:bg-red-lightest:focus {
    background-color: #fcebea;
  }

  .xl\:focus\:bg-orange-darkest:focus {
    background-color: #462a16;
  }

  .xl\:focus\:bg-orange-darker:focus {
    background-color: #613b1f;
  }

  .xl\:focus\:bg-orange-dark:focus {
    background-color: #de751f;
  }

  .xl\:focus\:bg-orange-light:focus {
    background-color: #faad63;
  }

  .xl\:focus\:bg-orange-lighter:focus {
    background-color: #fcd9b6;
  }

  .xl\:focus\:bg-orange-lightest:focus {
    background-color: #fff5eb;
  }

  .xl\:focus\:bg-yellow-darkest:focus {
    background-color: #453411;
  }

  .xl\:focus\:bg-yellow-darker:focus {
    background-color: #684f1d;
  }

  .xl\:focus\:bg-yellow-dark:focus {
    background-color: #f2d024;
  }

  .xl\:focus\:bg-yellow-light:focus {
    background-color: #fff382;
  }

  .xl\:focus\:bg-yellow-lighter:focus {
    background-color: #fff9c2;
  }

  .xl\:focus\:bg-yellow-lightest:focus {
    background-color: #fcfbeb;
  }

  .xl\:focus\:bg-green-darkest:focus {
    background-color: #0f2f21;
  }

  .xl\:focus\:bg-green-darker:focus {
    background-color: #1a4731;
  }

  .xl\:focus\:bg-green-dark:focus {
    background-color: #1f9d55;
  }

  .xl\:focus\:bg-green-light:focus {
    background-color: #51d88a;
  }

  .xl\:focus\:bg-green-lighter:focus {
    background-color: #a2f5bf;
  }

  .xl\:focus\:bg-green-lightest:focus {
    background-color: #e3fcec;
  }

  .xl\:focus\:bg-teal-darkest:focus {
    background-color: #0d3331;
  }

  .xl\:focus\:bg-teal-darker:focus {
    background-color: #20504f;
  }

  .xl\:focus\:bg-teal-dark:focus {
    background-color: #38a89d;
  }

  .xl\:focus\:bg-teal-light:focus {
    background-color: #64d5ca;
  }

  .xl\:focus\:bg-teal-lighter:focus {
    background-color: #a0f0ed;
  }

  .xl\:focus\:bg-teal-lightest:focus {
    background-color: #e8fffe;
  }

  .xl\:focus\:bg-blue-darkest:focus {
    background-color: #12283a;
  }

  .xl\:focus\:bg-blue-darker:focus {
    background-color: #1c3d5a;
  }

  .xl\:focus\:bg-blue-dark:focus {
    background-color: #2779bd;
  }

  .xl\:focus\:bg-blue-light:focus {
    background-color: #6cb2eb;
  }

  .xl\:focus\:bg-blue-lighter:focus {
    background-color: #bcdefa;
  }

  .xl\:focus\:bg-blue-lightest:focus {
    background-color: #eff8ff;
  }

  .xl\:focus\:bg-indigo-darkest:focus {
    background-color: #191e38;
  }

  .xl\:focus\:bg-indigo-darker:focus {
    background-color: #2f365f;
  }

  .xl\:focus\:bg-indigo-dark:focus {
    background-color: #5661b3;
  }

  .xl\:focus\:bg-indigo-light:focus {
    background-color: #7886d7;
  }

  .xl\:focus\:bg-indigo-lighter:focus {
    background-color: #b2b7ff;
  }

  .xl\:focus\:bg-indigo-lightest:focus {
    background-color: #e6e8ff;
  }

  .xl\:focus\:bg-purple-darkest:focus {
    background-color: #21183c;
  }

  .xl\:focus\:bg-purple-darker:focus {
    background-color: #382b5f;
  }

  .xl\:focus\:bg-purple-dark:focus {
    background-color: #794acf;
  }

  .xl\:focus\:bg-purple-light:focus {
    background-color: #a779e9;
  }

  .xl\:focus\:bg-purple-lighter:focus {
    background-color: #d6bbfc;
  }

  .xl\:focus\:bg-purple-lightest:focus {
    background-color: #f3ebff;
  }

  .xl\:focus\:bg-pink-darkest:focus {
    background-color: #451225;
  }

  .xl\:focus\:bg-pink-darker:focus {
    background-color: #6f213f;
  }

  .xl\:focus\:bg-pink-dark:focus {
    background-color: #eb5286;
  }

  .xl\:focus\:bg-pink-light:focus {
    background-color: #fa7ea8;
  }

  .xl\:focus\:bg-pink-lighter:focus {
    background-color: #ffbbca;
  }

  .xl\:focus\:bg-pink-lightest:focus {
    background-color: #ffebef;
  }

  .xl\:focus\:bg-nav:focus {
    background-color: #3F495E;
  }

  .xl\:focus\:bg-side-nav:focus {
    background-color: #ECF0F1;
  }

  .xl\:focus\:bg-nav-item:focus {
    background-color: #626b7a;
  }

  .xl\:focus\:bg-light-border:focus {
    background-color: #dfe4e6;
  }

  .xl\:focus\:bg-white-medium:focus {
    background-color: #FAFAFA;
  }

  .xl\:focus\:bg-white-medium-dark:focus {
    background-color: #E5E9EB;
  }

  .xl\:focus\:bg-red-vibrant:focus {
    background-color: #e46050;
  }

  .xl\:focus\:bg-red-vibrant-dark:focus {
    background-color: #d64230;
  }

  .xl\:focus\:bg-primary:focus {
    background-color: #51BE99;
  }

  .xl\:focus\:bg-primary-dark:focus {
    background-color: #0e5f43;
  }

  .xl\:focus\:bg-warning:focus {
    background-color: #f4ab43;
  }

  .xl\:focus\:bg-warning-dark:focus {
    background-color: #c37c16;
  }

  .xl\:focus\:bg-black-dark:focus {
    background-color: #272634;
  }

  .xl\:focus\:bg-black-darkest:focus {
    background-color: #141418;
  }

  .xl\:focus\:bg-info:focus {
    background-color: #52bcdc;
  }

  .xl\:focus\:bg-info-dark:focus {
    background-color: #2cadd4;
  }

  .xl\:focus\:bg-success:focus {
    background-color: #72b159;
  }

  .xl\:focus\:bg-success-dark:focus {
    background-color: #5D9547;
  }

  .xl\:focus\:bg-transparent:focus {
    background-color: transparent;
  }

  .xl\:focus\:bg-black:focus {
    background-color: #000;
  }

  .xl\:focus\:bg-white:focus {
    background-color: #fff;
  }

  .xl\:focus\:bg-gray-100:focus {
    background-color: #f7fafc;
  }

  .xl\:focus\:bg-gray-200:focus {
    background-color: #edf2f7;
  }

  .xl\:focus\:bg-gray-300:focus {
    background-color: #e2e8f0;
  }

  .xl\:focus\:bg-gray-400:focus {
    background-color: #cbd5e0;
  }

  .xl\:focus\:bg-gray-500:focus {
    background-color: #a0aec0;
  }

  .xl\:focus\:bg-gray-600:focus {
    background-color: #718096;
  }

  .xl\:focus\:bg-gray-700:focus {
    background-color: #4a5568;
  }

  .xl\:focus\:bg-gray-800:focus {
    background-color: #2d3748;
  }

  .xl\:focus\:bg-gray-900:focus {
    background-color: #1a202c;
  }

  .xl\:focus\:bg-red-100:focus {
    background-color: #fff5f5;
  }

  .xl\:focus\:bg-red-200:focus {
    background-color: #fed7d7;
  }

  .xl\:focus\:bg-red-300:focus {
    background-color: #feb2b2;
  }

  .xl\:focus\:bg-red-400:focus {
    background-color: #fc8181;
  }

  .xl\:focus\:bg-red-500:focus {
    background-color: #f56565;
  }

  .xl\:focus\:bg-red-600:focus {
    background-color: #e53e3e;
  }

  .xl\:focus\:bg-red-700:focus {
    background-color: #c53030;
  }

  .xl\:focus\:bg-red-800:focus {
    background-color: #9b2c2c;
  }

  .xl\:focus\:bg-red-900:focus {
    background-color: #742a2a;
  }

  .xl\:focus\:bg-orange-100:focus {
    background-color: #fffaf0;
  }

  .xl\:focus\:bg-orange-200:focus {
    background-color: #feebc8;
  }

  .xl\:focus\:bg-orange-300:focus {
    background-color: #fbd38d;
  }

  .xl\:focus\:bg-orange-400:focus {
    background-color: #f6ad55;
  }

  .xl\:focus\:bg-orange-500:focus {
    background-color: #ed8936;
  }

  .xl\:focus\:bg-orange-600:focus {
    background-color: #dd6b20;
  }

  .xl\:focus\:bg-orange-700:focus {
    background-color: #c05621;
  }

  .xl\:focus\:bg-orange-800:focus {
    background-color: #9c4221;
  }

  .xl\:focus\:bg-orange-900:focus {
    background-color: #7b341e;
  }

  .xl\:focus\:bg-yellow-100:focus {
    background-color: #fffff0;
  }

  .xl\:focus\:bg-yellow-200:focus {
    background-color: #fefcbf;
  }

  .xl\:focus\:bg-yellow-300:focus {
    background-color: #faf089;
  }

  .xl\:focus\:bg-yellow-400:focus {
    background-color: #f6e05e;
  }

  .xl\:focus\:bg-yellow-500:focus {
    background-color: #ecc94b;
  }

  .xl\:focus\:bg-yellow-600:focus {
    background-color: #d69e2e;
  }

  .xl\:focus\:bg-yellow-700:focus {
    background-color: #b7791f;
  }

  .xl\:focus\:bg-yellow-800:focus {
    background-color: #975a16;
  }

  .xl\:focus\:bg-yellow-900:focus {
    background-color: #744210;
  }

  .xl\:focus\:bg-green-100:focus {
    background-color: #f0fff4;
  }

  .xl\:focus\:bg-green-200:focus {
    background-color: #c6f6d5;
  }

  .xl\:focus\:bg-green-300:focus {
    background-color: #9ae6b4;
  }

  .xl\:focus\:bg-green-400:focus {
    background-color: #68d391;
  }

  .xl\:focus\:bg-green-500:focus {
    background-color: #48bb78;
  }

  .xl\:focus\:bg-green-600:focus {
    background-color: #38a169;
  }

  .xl\:focus\:bg-green-700:focus {
    background-color: #2f855a;
  }

  .xl\:focus\:bg-green-800:focus {
    background-color: #276749;
  }

  .xl\:focus\:bg-green-900:focus {
    background-color: #22543d;
  }

  .xl\:focus\:bg-teal-100:focus {
    background-color: #e6fffa;
  }

  .xl\:focus\:bg-teal-200:focus {
    background-color: #b2f5ea;
  }

  .xl\:focus\:bg-teal-300:focus {
    background-color: #81e6d9;
  }

  .xl\:focus\:bg-teal-400:focus {
    background-color: #4fd1c5;
  }

  .xl\:focus\:bg-teal-500:focus {
    background-color: #38b2ac;
  }

  .xl\:focus\:bg-teal-600:focus {
    background-color: #319795;
  }

  .xl\:focus\:bg-teal-700:focus {
    background-color: #2c7a7b;
  }

  .xl\:focus\:bg-teal-800:focus {
    background-color: #285e61;
  }

  .xl\:focus\:bg-teal-900:focus {
    background-color: #234e52;
  }

  .xl\:focus\:bg-blue-100:focus {
    background-color: #ebf8ff;
  }

  .xl\:focus\:bg-blue-200:focus {
    background-color: #bee3f8;
  }

  .xl\:focus\:bg-blue-300:focus {
    background-color: #90cdf4;
  }

  .xl\:focus\:bg-blue-400:focus {
    background-color: #63b3ed;
  }

  .xl\:focus\:bg-blue-500:focus {
    background-color: #4299e1;
  }

  .xl\:focus\:bg-blue-600:focus {
    background-color: #3182ce;
  }

  .xl\:focus\:bg-blue-700:focus {
    background-color: #2b6cb0;
  }

  .xl\:focus\:bg-blue-800:focus {
    background-color: #2c5282;
  }

  .xl\:focus\:bg-blue-900:focus {
    background-color: #2a4365;
  }

  .xl\:focus\:bg-indigo-100:focus {
    background-color: #ebf4ff;
  }

  .xl\:focus\:bg-indigo-200:focus {
    background-color: #c3dafe;
  }

  .xl\:focus\:bg-indigo-300:focus {
    background-color: #a3bffa;
  }

  .xl\:focus\:bg-indigo-400:focus {
    background-color: #7f9cf5;
  }

  .xl\:focus\:bg-indigo-500:focus {
    background-color: #667eea;
  }

  .xl\:focus\:bg-indigo-600:focus {
    background-color: #5a67d8;
  }

  .xl\:focus\:bg-indigo-700:focus {
    background-color: #4c51bf;
  }

  .xl\:focus\:bg-indigo-800:focus {
    background-color: #434190;
  }

  .xl\:focus\:bg-indigo-900:focus {
    background-color: #3c366b;
  }

  .xl\:focus\:bg-purple-100:focus {
    background-color: #faf5ff;
  }

  .xl\:focus\:bg-purple-200:focus {
    background-color: #e9d8fd;
  }

  .xl\:focus\:bg-purple-300:focus {
    background-color: #d6bcfa;
  }

  .xl\:focus\:bg-purple-400:focus {
    background-color: #b794f4;
  }

  .xl\:focus\:bg-purple-500:focus {
    background-color: #9f7aea;
  }

  .xl\:focus\:bg-purple-600:focus {
    background-color: #805ad5;
  }

  .xl\:focus\:bg-purple-700:focus {
    background-color: #6b46c1;
  }

  .xl\:focus\:bg-purple-800:focus {
    background-color: #553c9a;
  }

  .xl\:focus\:bg-purple-900:focus {
    background-color: #44337a;
  }

  .xl\:focus\:bg-pink-100:focus {
    background-color: #fff5f7;
  }

  .xl\:focus\:bg-pink-200:focus {
    background-color: #fed7e2;
  }

  .xl\:focus\:bg-pink-300:focus {
    background-color: #fbb6ce;
  }

  .xl\:focus\:bg-pink-400:focus {
    background-color: #f687b3;
  }

  .xl\:focus\:bg-pink-500:focus {
    background-color: #ed64a6;
  }

  .xl\:focus\:bg-pink-600:focus {
    background-color: #d53f8c;
  }

  .xl\:focus\:bg-pink-700:focus {
    background-color: #b83280;
  }

  .xl\:focus\:bg-pink-800:focus {
    background-color: #97266d;
  }

  .xl\:focus\:bg-pink-900:focus {
    background-color: #702459;
  }

  .xl\:bg-bottom {
    background-position: bottom;
  }

  .xl\:bg-center {
    background-position: center;
  }

  .xl\:bg-left {
    background-position: left;
  }

  .xl\:bg-left-bottom {
    background-position: left bottom;
  }

  .xl\:bg-left-top {
    background-position: left top;
  }

  .xl\:bg-right {
    background-position: right;
  }

  .xl\:bg-right-bottom {
    background-position: right bottom;
  }

  .xl\:bg-right-top {
    background-position: right top;
  }

  .xl\:bg-top {
    background-position: top;
  }

  .xl\:bg-repeat {
    background-repeat: repeat;
  }

  .xl\:bg-no-repeat {
    background-repeat: no-repeat;
  }

  .xl\:bg-repeat-x {
    background-repeat: repeat-x;
  }

  .xl\:bg-repeat-y {
    background-repeat: repeat-y;
  }

  .xl\:bg-repeat-round {
    background-repeat: round;
  }

  .xl\:bg-repeat-space {
    background-repeat: space;
  }

  .xl\:bg-auto {
    background-size: auto;
  }

  .xl\:bg-cover {
    background-size: cover;
  }

  .xl\:bg-contain {
    background-size: contain;
  }

  .xl\:border-collapse {
    border-collapse: collapse;
  }

  .xl\:border-separate {
    border-collapse: separate;
  }

  .xl\:border-grey-darkest {
    border-color: #3d4852;
  }

  .xl\:border-grey-darker {
    border-color: #606f7b;
  }

  .xl\:border-grey-dark {
    border-color: #8795a1;
  }

  .xl\:border-grey {
    border-color: #b8c2cc;
  }

  .xl\:border-grey-light {
    border-color: #dae1e7;
  }

  .xl\:border-grey-lighter {
    border-color: #f1f5f8;
  }

  .xl\:border-grey-lightest {
    border-color: #f8fafc;
  }

  .xl\:border-grey-mid-light {
    border-color: #f3f3f4;
  }

  .xl\:border-white-lightest {
    border-color: #f4f4f4;
  }

  .xl\:border-red-darkest {
    border-color: #3b0d0c;
  }

  .xl\:border-red-darker {
    border-color: #621b18;
  }

  .xl\:border-red-dark {
    border-color: #cc1f1a;
  }

  .xl\:border-red-light {
    border-color: #ef5753;
  }

  .xl\:border-red-lighter {
    border-color: #f9acaa;
  }

  .xl\:border-red-lightest {
    border-color: #fcebea;
  }

  .xl\:border-orange-darkest {
    border-color: #462a16;
  }

  .xl\:border-orange-darker {
    border-color: #613b1f;
  }

  .xl\:border-orange-dark {
    border-color: #de751f;
  }

  .xl\:border-orange-light {
    border-color: #faad63;
  }

  .xl\:border-orange-lighter {
    border-color: #fcd9b6;
  }

  .xl\:border-orange-lightest {
    border-color: #fff5eb;
  }

  .xl\:border-yellow-darkest {
    border-color: #453411;
  }

  .xl\:border-yellow-darker {
    border-color: #684f1d;
  }

  .xl\:border-yellow-dark {
    border-color: #f2d024;
  }

  .xl\:border-yellow-light {
    border-color: #fff382;
  }

  .xl\:border-yellow-lighter {
    border-color: #fff9c2;
  }

  .xl\:border-yellow-lightest {
    border-color: #fcfbeb;
  }

  .xl\:border-green-darkest {
    border-color: #0f2f21;
  }

  .xl\:border-green-darker {
    border-color: #1a4731;
  }

  .xl\:border-green-dark {
    border-color: #1f9d55;
  }

  .xl\:border-green-light {
    border-color: #51d88a;
  }

  .xl\:border-green-lighter {
    border-color: #a2f5bf;
  }

  .xl\:border-green-lightest {
    border-color: #e3fcec;
  }

  .xl\:border-teal-darkest {
    border-color: #0d3331;
  }

  .xl\:border-teal-darker {
    border-color: #20504f;
  }

  .xl\:border-teal-dark {
    border-color: #38a89d;
  }

  .xl\:border-teal-light {
    border-color: #64d5ca;
  }

  .xl\:border-teal-lighter {
    border-color: #a0f0ed;
  }

  .xl\:border-teal-lightest {
    border-color: #e8fffe;
  }

  .xl\:border-blue-darkest {
    border-color: #12283a;
  }

  .xl\:border-blue-darker {
    border-color: #1c3d5a;
  }

  .xl\:border-blue-dark {
    border-color: #2779bd;
  }

  .xl\:border-blue-light {
    border-color: #6cb2eb;
  }

  .xl\:border-blue-lighter {
    border-color: #bcdefa;
  }

  .xl\:border-blue-lightest {
    border-color: #eff8ff;
  }

  .xl\:border-indigo-darkest {
    border-color: #191e38;
  }

  .xl\:border-indigo-darker {
    border-color: #2f365f;
  }

  .xl\:border-indigo-dark {
    border-color: #5661b3;
  }

  .xl\:border-indigo-light {
    border-color: #7886d7;
  }

  .xl\:border-indigo-lighter {
    border-color: #b2b7ff;
  }

  .xl\:border-indigo-lightest {
    border-color: #e6e8ff;
  }

  .xl\:border-purple-darkest {
    border-color: #21183c;
  }

  .xl\:border-purple-darker {
    border-color: #382b5f;
  }

  .xl\:border-purple-dark {
    border-color: #794acf;
  }

  .xl\:border-purple-light {
    border-color: #a779e9;
  }

  .xl\:border-purple-lighter {
    border-color: #d6bbfc;
  }

  .xl\:border-purple-lightest {
    border-color: #f3ebff;
  }

  .xl\:border-pink-darkest {
    border-color: #451225;
  }

  .xl\:border-pink-darker {
    border-color: #6f213f;
  }

  .xl\:border-pink-dark {
    border-color: #eb5286;
  }

  .xl\:border-pink-light {
    border-color: #fa7ea8;
  }

  .xl\:border-pink-lighter {
    border-color: #ffbbca;
  }

  .xl\:border-pink-lightest {
    border-color: #ffebef;
  }

  .xl\:border-nav {
    border-color: #3F495E;
  }

  .xl\:border-side-nav {
    border-color: #ECF0F1;
  }

  .xl\:border-nav-item {
    border-color: #626b7a;
  }

  .xl\:border-light-border {
    border-color: #dfe4e6;
  }

  .xl\:border-white-medium {
    border-color: #FAFAFA;
  }

  .xl\:border-white-medium-dark {
    border-color: #E5E9EB;
  }

  .xl\:border-red-vibrant {
    border-color: #e46050;
  }

  .xl\:border-red-vibrant-dark {
    border-color: #d64230;
  }

  .xl\:border-primary {
    border-color: #51BE99;
  }

  .xl\:border-primary-dark {
    border-color: #0e5f43;
  }

  .xl\:border-warning {
    border-color: #f4ab43;
  }

  .xl\:border-warning-dark {
    border-color: #c37c16;
  }

  .xl\:border-black-dark {
    border-color: #272634;
  }

  .xl\:border-black-darkest {
    border-color: #141418;
  }

  .xl\:border-info {
    border-color: #52bcdc;
  }

  .xl\:border-info-dark {
    border-color: #2cadd4;
  }

  .xl\:border-success {
    border-color: #72b159;
  }

  .xl\:border-success-dark {
    border-color: #5D9547;
  }

  .xl\:border-transparent {
    border-color: transparent;
  }

  .xl\:border-black {
    border-color: #000;
  }

  .xl\:border-white {
    border-color: #fff;
  }

  .xl\:border-gray-100 {
    border-color: #f7fafc;
  }

  .xl\:border-gray-200 {
    border-color: #edf2f7;
  }

  .xl\:border-gray-300 {
    border-color: #e2e8f0;
  }

  .xl\:border-gray-400 {
    border-color: #cbd5e0;
  }

  .xl\:border-gray-500 {
    border-color: #a0aec0;
  }

  .xl\:border-gray-600 {
    border-color: #718096;
  }

  .xl\:border-gray-700 {
    border-color: #4a5568;
  }

  .xl\:border-gray-800 {
    border-color: #2d3748;
  }

  .xl\:border-gray-900 {
    border-color: #1a202c;
  }

  .xl\:border-red-100 {
    border-color: #fff5f5;
  }

  .xl\:border-red-200 {
    border-color: #fed7d7;
  }

  .xl\:border-red-300 {
    border-color: #feb2b2;
  }

  .xl\:border-red-400 {
    border-color: #fc8181;
  }

  .xl\:border-red-500 {
    border-color: #f56565;
  }

  .xl\:border-red-600 {
    border-color: #e53e3e;
  }

  .xl\:border-red-700 {
    border-color: #c53030;
  }

  .xl\:border-red-800 {
    border-color: #9b2c2c;
  }

  .xl\:border-red-900 {
    border-color: #742a2a;
  }

  .xl\:border-orange-100 {
    border-color: #fffaf0;
  }

  .xl\:border-orange-200 {
    border-color: #feebc8;
  }

  .xl\:border-orange-300 {
    border-color: #fbd38d;
  }

  .xl\:border-orange-400 {
    border-color: #f6ad55;
  }

  .xl\:border-orange-500 {
    border-color: #ed8936;
  }

  .xl\:border-orange-600 {
    border-color: #dd6b20;
  }

  .xl\:border-orange-700 {
    border-color: #c05621;
  }

  .xl\:border-orange-800 {
    border-color: #9c4221;
  }

  .xl\:border-orange-900 {
    border-color: #7b341e;
  }

  .xl\:border-yellow-100 {
    border-color: #fffff0;
  }

  .xl\:border-yellow-200 {
    border-color: #fefcbf;
  }

  .xl\:border-yellow-300 {
    border-color: #faf089;
  }

  .xl\:border-yellow-400 {
    border-color: #f6e05e;
  }

  .xl\:border-yellow-500 {
    border-color: #ecc94b;
  }

  .xl\:border-yellow-600 {
    border-color: #d69e2e;
  }

  .xl\:border-yellow-700 {
    border-color: #b7791f;
  }

  .xl\:border-yellow-800 {
    border-color: #975a16;
  }

  .xl\:border-yellow-900 {
    border-color: #744210;
  }

  .xl\:border-green-100 {
    border-color: #f0fff4;
  }

  .xl\:border-green-200 {
    border-color: #c6f6d5;
  }

  .xl\:border-green-300 {
    border-color: #9ae6b4;
  }

  .xl\:border-green-400 {
    border-color: #68d391;
  }

  .xl\:border-green-500 {
    border-color: #48bb78;
  }

  .xl\:border-green-600 {
    border-color: #38a169;
  }

  .xl\:border-green-700 {
    border-color: #2f855a;
  }

  .xl\:border-green-800 {
    border-color: #276749;
  }

  .xl\:border-green-900 {
    border-color: #22543d;
  }

  .xl\:border-teal-100 {
    border-color: #e6fffa;
  }

  .xl\:border-teal-200 {
    border-color: #b2f5ea;
  }

  .xl\:border-teal-300 {
    border-color: #81e6d9;
  }

  .xl\:border-teal-400 {
    border-color: #4fd1c5;
  }

  .xl\:border-teal-500 {
    border-color: #38b2ac;
  }

  .xl\:border-teal-600 {
    border-color: #319795;
  }

  .xl\:border-teal-700 {
    border-color: #2c7a7b;
  }

  .xl\:border-teal-800 {
    border-color: #285e61;
  }

  .xl\:border-teal-900 {
    border-color: #234e52;
  }

  .xl\:border-blue-100 {
    border-color: #ebf8ff;
  }

  .xl\:border-blue-200 {
    border-color: #bee3f8;
  }

  .xl\:border-blue-300 {
    border-color: #90cdf4;
  }

  .xl\:border-blue-400 {
    border-color: #63b3ed;
  }

  .xl\:border-blue-500 {
    border-color: #4299e1;
  }

  .xl\:border-blue-600 {
    border-color: #3182ce;
  }

  .xl\:border-blue-700 {
    border-color: #2b6cb0;
  }

  .xl\:border-blue-800 {
    border-color: #2c5282;
  }

  .xl\:border-blue-900 {
    border-color: #2a4365;
  }

  .xl\:border-indigo-100 {
    border-color: #ebf4ff;
  }

  .xl\:border-indigo-200 {
    border-color: #c3dafe;
  }

  .xl\:border-indigo-300 {
    border-color: #a3bffa;
  }

  .xl\:border-indigo-400 {
    border-color: #7f9cf5;
  }

  .xl\:border-indigo-500 {
    border-color: #667eea;
  }

  .xl\:border-indigo-600 {
    border-color: #5a67d8;
  }

  .xl\:border-indigo-700 {
    border-color: #4c51bf;
  }

  .xl\:border-indigo-800 {
    border-color: #434190;
  }

  .xl\:border-indigo-900 {
    border-color: #3c366b;
  }

  .xl\:border-purple-100 {
    border-color: #faf5ff;
  }

  .xl\:border-purple-200 {
    border-color: #e9d8fd;
  }

  .xl\:border-purple-300 {
    border-color: #d6bcfa;
  }

  .xl\:border-purple-400 {
    border-color: #b794f4;
  }

  .xl\:border-purple-500 {
    border-color: #9f7aea;
  }

  .xl\:border-purple-600 {
    border-color: #805ad5;
  }

  .xl\:border-purple-700 {
    border-color: #6b46c1;
  }

  .xl\:border-purple-800 {
    border-color: #553c9a;
  }

  .xl\:border-purple-900 {
    border-color: #44337a;
  }

  .xl\:border-pink-100 {
    border-color: #fff5f7;
  }

  .xl\:border-pink-200 {
    border-color: #fed7e2;
  }

  .xl\:border-pink-300 {
    border-color: #fbb6ce;
  }

  .xl\:border-pink-400 {
    border-color: #f687b3;
  }

  .xl\:border-pink-500 {
    border-color: #ed64a6;
  }

  .xl\:border-pink-600 {
    border-color: #d53f8c;
  }

  .xl\:border-pink-700 {
    border-color: #b83280;
  }

  .xl\:border-pink-800 {
    border-color: #97266d;
  }

  .xl\:border-pink-900 {
    border-color: #702459;
  }

  .xl\:hover\:border-grey-darkest:hover {
    border-color: #3d4852;
  }

  .xl\:hover\:border-grey-darker:hover {
    border-color: #606f7b;
  }

  .xl\:hover\:border-grey-dark:hover {
    border-color: #8795a1;
  }

  .xl\:hover\:border-grey:hover {
    border-color: #b8c2cc;
  }

  .xl\:hover\:border-grey-light:hover {
    border-color: #dae1e7;
  }

  .xl\:hover\:border-grey-lighter:hover {
    border-color: #f1f5f8;
  }

  .xl\:hover\:border-grey-lightest:hover {
    border-color: #f8fafc;
  }

  .xl\:hover\:border-grey-mid-light:hover {
    border-color: #f3f3f4;
  }

  .xl\:hover\:border-white-lightest:hover {
    border-color: #f4f4f4;
  }

  .xl\:hover\:border-red-darkest:hover {
    border-color: #3b0d0c;
  }

  .xl\:hover\:border-red-darker:hover {
    border-color: #621b18;
  }

  .xl\:hover\:border-red-dark:hover {
    border-color: #cc1f1a;
  }

  .xl\:hover\:border-red-light:hover {
    border-color: #ef5753;
  }

  .xl\:hover\:border-red-lighter:hover {
    border-color: #f9acaa;
  }

  .xl\:hover\:border-red-lightest:hover {
    border-color: #fcebea;
  }

  .xl\:hover\:border-orange-darkest:hover {
    border-color: #462a16;
  }

  .xl\:hover\:border-orange-darker:hover {
    border-color: #613b1f;
  }

  .xl\:hover\:border-orange-dark:hover {
    border-color: #de751f;
  }

  .xl\:hover\:border-orange-light:hover {
    border-color: #faad63;
  }

  .xl\:hover\:border-orange-lighter:hover {
    border-color: #fcd9b6;
  }

  .xl\:hover\:border-orange-lightest:hover {
    border-color: #fff5eb;
  }

  .xl\:hover\:border-yellow-darkest:hover {
    border-color: #453411;
  }

  .xl\:hover\:border-yellow-darker:hover {
    border-color: #684f1d;
  }

  .xl\:hover\:border-yellow-dark:hover {
    border-color: #f2d024;
  }

  .xl\:hover\:border-yellow-light:hover {
    border-color: #fff382;
  }

  .xl\:hover\:border-yellow-lighter:hover {
    border-color: #fff9c2;
  }

  .xl\:hover\:border-yellow-lightest:hover {
    border-color: #fcfbeb;
  }

  .xl\:hover\:border-green-darkest:hover {
    border-color: #0f2f21;
  }

  .xl\:hover\:border-green-darker:hover {
    border-color: #1a4731;
  }

  .xl\:hover\:border-green-dark:hover {
    border-color: #1f9d55;
  }

  .xl\:hover\:border-green-light:hover {
    border-color: #51d88a;
  }

  .xl\:hover\:border-green-lighter:hover {
    border-color: #a2f5bf;
  }

  .xl\:hover\:border-green-lightest:hover {
    border-color: #e3fcec;
  }

  .xl\:hover\:border-teal-darkest:hover {
    border-color: #0d3331;
  }

  .xl\:hover\:border-teal-darker:hover {
    border-color: #20504f;
  }

  .xl\:hover\:border-teal-dark:hover {
    border-color: #38a89d;
  }

  .xl\:hover\:border-teal-light:hover {
    border-color: #64d5ca;
  }

  .xl\:hover\:border-teal-lighter:hover {
    border-color: #a0f0ed;
  }

  .xl\:hover\:border-teal-lightest:hover {
    border-color: #e8fffe;
  }

  .xl\:hover\:border-blue-darkest:hover {
    border-color: #12283a;
  }

  .xl\:hover\:border-blue-darker:hover {
    border-color: #1c3d5a;
  }

  .xl\:hover\:border-blue-dark:hover {
    border-color: #2779bd;
  }

  .xl\:hover\:border-blue-light:hover {
    border-color: #6cb2eb;
  }

  .xl\:hover\:border-blue-lighter:hover {
    border-color: #bcdefa;
  }

  .xl\:hover\:border-blue-lightest:hover {
    border-color: #eff8ff;
  }

  .xl\:hover\:border-indigo-darkest:hover {
    border-color: #191e38;
  }

  .xl\:hover\:border-indigo-darker:hover {
    border-color: #2f365f;
  }

  .xl\:hover\:border-indigo-dark:hover {
    border-color: #5661b3;
  }

  .xl\:hover\:border-indigo-light:hover {
    border-color: #7886d7;
  }

  .xl\:hover\:border-indigo-lighter:hover {
    border-color: #b2b7ff;
  }

  .xl\:hover\:border-indigo-lightest:hover {
    border-color: #e6e8ff;
  }

  .xl\:hover\:border-purple-darkest:hover {
    border-color: #21183c;
  }

  .xl\:hover\:border-purple-darker:hover {
    border-color: #382b5f;
  }

  .xl\:hover\:border-purple-dark:hover {
    border-color: #794acf;
  }

  .xl\:hover\:border-purple-light:hover {
    border-color: #a779e9;
  }

  .xl\:hover\:border-purple-lighter:hover {
    border-color: #d6bbfc;
  }

  .xl\:hover\:border-purple-lightest:hover {
    border-color: #f3ebff;
  }

  .xl\:hover\:border-pink-darkest:hover {
    border-color: #451225;
  }

  .xl\:hover\:border-pink-darker:hover {
    border-color: #6f213f;
  }

  .xl\:hover\:border-pink-dark:hover {
    border-color: #eb5286;
  }

  .xl\:hover\:border-pink-light:hover {
    border-color: #fa7ea8;
  }

  .xl\:hover\:border-pink-lighter:hover {
    border-color: #ffbbca;
  }

  .xl\:hover\:border-pink-lightest:hover {
    border-color: #ffebef;
  }

  .xl\:hover\:border-nav:hover {
    border-color: #3F495E;
  }

  .xl\:hover\:border-side-nav:hover {
    border-color: #ECF0F1;
  }

  .xl\:hover\:border-nav-item:hover {
    border-color: #626b7a;
  }

  .xl\:hover\:border-light-border:hover {
    border-color: #dfe4e6;
  }

  .xl\:hover\:border-white-medium:hover {
    border-color: #FAFAFA;
  }

  .xl\:hover\:border-white-medium-dark:hover {
    border-color: #E5E9EB;
  }

  .xl\:hover\:border-red-vibrant:hover {
    border-color: #e46050;
  }

  .xl\:hover\:border-red-vibrant-dark:hover {
    border-color: #d64230;
  }

  .xl\:hover\:border-primary:hover {
    border-color: #51BE99;
  }

  .xl\:hover\:border-primary-dark:hover {
    border-color: #0e5f43;
  }

  .xl\:hover\:border-warning:hover {
    border-color: #f4ab43;
  }

  .xl\:hover\:border-warning-dark:hover {
    border-color: #c37c16;
  }

  .xl\:hover\:border-black-dark:hover {
    border-color: #272634;
  }

  .xl\:hover\:border-black-darkest:hover {
    border-color: #141418;
  }

  .xl\:hover\:border-info:hover {
    border-color: #52bcdc;
  }

  .xl\:hover\:border-info-dark:hover {
    border-color: #2cadd4;
  }

  .xl\:hover\:border-success:hover {
    border-color: #72b159;
  }

  .xl\:hover\:border-success-dark:hover {
    border-color: #5D9547;
  }

  .xl\:hover\:border-transparent:hover {
    border-color: transparent;
  }

  .xl\:hover\:border-black:hover {
    border-color: #000;
  }

  .xl\:hover\:border-white:hover {
    border-color: #fff;
  }

  .xl\:hover\:border-gray-100:hover {
    border-color: #f7fafc;
  }

  .xl\:hover\:border-gray-200:hover {
    border-color: #edf2f7;
  }

  .xl\:hover\:border-gray-300:hover {
    border-color: #e2e8f0;
  }

  .xl\:hover\:border-gray-400:hover {
    border-color: #cbd5e0;
  }

  .xl\:hover\:border-gray-500:hover {
    border-color: #a0aec0;
  }

  .xl\:hover\:border-gray-600:hover {
    border-color: #718096;
  }

  .xl\:hover\:border-gray-700:hover {
    border-color: #4a5568;
  }

  .xl\:hover\:border-gray-800:hover {
    border-color: #2d3748;
  }

  .xl\:hover\:border-gray-900:hover {
    border-color: #1a202c;
  }

  .xl\:hover\:border-red-100:hover {
    border-color: #fff5f5;
  }

  .xl\:hover\:border-red-200:hover {
    border-color: #fed7d7;
  }

  .xl\:hover\:border-red-300:hover {
    border-color: #feb2b2;
  }

  .xl\:hover\:border-red-400:hover {
    border-color: #fc8181;
  }

  .xl\:hover\:border-red-500:hover {
    border-color: #f56565;
  }

  .xl\:hover\:border-red-600:hover {
    border-color: #e53e3e;
  }

  .xl\:hover\:border-red-700:hover {
    border-color: #c53030;
  }

  .xl\:hover\:border-red-800:hover {
    border-color: #9b2c2c;
  }

  .xl\:hover\:border-red-900:hover {
    border-color: #742a2a;
  }

  .xl\:hover\:border-orange-100:hover {
    border-color: #fffaf0;
  }

  .xl\:hover\:border-orange-200:hover {
    border-color: #feebc8;
  }

  .xl\:hover\:border-orange-300:hover {
    border-color: #fbd38d;
  }

  .xl\:hover\:border-orange-400:hover {
    border-color: #f6ad55;
  }

  .xl\:hover\:border-orange-500:hover {
    border-color: #ed8936;
  }

  .xl\:hover\:border-orange-600:hover {
    border-color: #dd6b20;
  }

  .xl\:hover\:border-orange-700:hover {
    border-color: #c05621;
  }

  .xl\:hover\:border-orange-800:hover {
    border-color: #9c4221;
  }

  .xl\:hover\:border-orange-900:hover {
    border-color: #7b341e;
  }

  .xl\:hover\:border-yellow-100:hover {
    border-color: #fffff0;
  }

  .xl\:hover\:border-yellow-200:hover {
    border-color: #fefcbf;
  }

  .xl\:hover\:border-yellow-300:hover {
    border-color: #faf089;
  }

  .xl\:hover\:border-yellow-400:hover {
    border-color: #f6e05e;
  }

  .xl\:hover\:border-yellow-500:hover {
    border-color: #ecc94b;
  }

  .xl\:hover\:border-yellow-600:hover {
    border-color: #d69e2e;
  }

  .xl\:hover\:border-yellow-700:hover {
    border-color: #b7791f;
  }

  .xl\:hover\:border-yellow-800:hover {
    border-color: #975a16;
  }

  .xl\:hover\:border-yellow-900:hover {
    border-color: #744210;
  }

  .xl\:hover\:border-green-100:hover {
    border-color: #f0fff4;
  }

  .xl\:hover\:border-green-200:hover {
    border-color: #c6f6d5;
  }

  .xl\:hover\:border-green-300:hover {
    border-color: #9ae6b4;
  }

  .xl\:hover\:border-green-400:hover {
    border-color: #68d391;
  }

  .xl\:hover\:border-green-500:hover {
    border-color: #48bb78;
  }

  .xl\:hover\:border-green-600:hover {
    border-color: #38a169;
  }

  .xl\:hover\:border-green-700:hover {
    border-color: #2f855a;
  }

  .xl\:hover\:border-green-800:hover {
    border-color: #276749;
  }

  .xl\:hover\:border-green-900:hover {
    border-color: #22543d;
  }

  .xl\:hover\:border-teal-100:hover {
    border-color: #e6fffa;
  }

  .xl\:hover\:border-teal-200:hover {
    border-color: #b2f5ea;
  }

  .xl\:hover\:border-teal-300:hover {
    border-color: #81e6d9;
  }

  .xl\:hover\:border-teal-400:hover {
    border-color: #4fd1c5;
  }

  .xl\:hover\:border-teal-500:hover {
    border-color: #38b2ac;
  }

  .xl\:hover\:border-teal-600:hover {
    border-color: #319795;
  }

  .xl\:hover\:border-teal-700:hover {
    border-color: #2c7a7b;
  }

  .xl\:hover\:border-teal-800:hover {
    border-color: #285e61;
  }

  .xl\:hover\:border-teal-900:hover {
    border-color: #234e52;
  }

  .xl\:hover\:border-blue-100:hover {
    border-color: #ebf8ff;
  }

  .xl\:hover\:border-blue-200:hover {
    border-color: #bee3f8;
  }

  .xl\:hover\:border-blue-300:hover {
    border-color: #90cdf4;
  }

  .xl\:hover\:border-blue-400:hover {
    border-color: #63b3ed;
  }

  .xl\:hover\:border-blue-500:hover {
    border-color: #4299e1;
  }

  .xl\:hover\:border-blue-600:hover {
    border-color: #3182ce;
  }

  .xl\:hover\:border-blue-700:hover {
    border-color: #2b6cb0;
  }

  .xl\:hover\:border-blue-800:hover {
    border-color: #2c5282;
  }

  .xl\:hover\:border-blue-900:hover {
    border-color: #2a4365;
  }

  .xl\:hover\:border-indigo-100:hover {
    border-color: #ebf4ff;
  }

  .xl\:hover\:border-indigo-200:hover {
    border-color: #c3dafe;
  }

  .xl\:hover\:border-indigo-300:hover {
    border-color: #a3bffa;
  }

  .xl\:hover\:border-indigo-400:hover {
    border-color: #7f9cf5;
  }

  .xl\:hover\:border-indigo-500:hover {
    border-color: #667eea;
  }

  .xl\:hover\:border-indigo-600:hover {
    border-color: #5a67d8;
  }

  .xl\:hover\:border-indigo-700:hover {
    border-color: #4c51bf;
  }

  .xl\:hover\:border-indigo-800:hover {
    border-color: #434190;
  }

  .xl\:hover\:border-indigo-900:hover {
    border-color: #3c366b;
  }

  .xl\:hover\:border-purple-100:hover {
    border-color: #faf5ff;
  }

  .xl\:hover\:border-purple-200:hover {
    border-color: #e9d8fd;
  }

  .xl\:hover\:border-purple-300:hover {
    border-color: #d6bcfa;
  }

  .xl\:hover\:border-purple-400:hover {
    border-color: #b794f4;
  }

  .xl\:hover\:border-purple-500:hover {
    border-color: #9f7aea;
  }

  .xl\:hover\:border-purple-600:hover {
    border-color: #805ad5;
  }

  .xl\:hover\:border-purple-700:hover {
    border-color: #6b46c1;
  }

  .xl\:hover\:border-purple-800:hover {
    border-color: #553c9a;
  }

  .xl\:hover\:border-purple-900:hover {
    border-color: #44337a;
  }

  .xl\:hover\:border-pink-100:hover {
    border-color: #fff5f7;
  }

  .xl\:hover\:border-pink-200:hover {
    border-color: #fed7e2;
  }

  .xl\:hover\:border-pink-300:hover {
    border-color: #fbb6ce;
  }

  .xl\:hover\:border-pink-400:hover {
    border-color: #f687b3;
  }

  .xl\:hover\:border-pink-500:hover {
    border-color: #ed64a6;
  }

  .xl\:hover\:border-pink-600:hover {
    border-color: #d53f8c;
  }

  .xl\:hover\:border-pink-700:hover {
    border-color: #b83280;
  }

  .xl\:hover\:border-pink-800:hover {
    border-color: #97266d;
  }

  .xl\:hover\:border-pink-900:hover {
    border-color: #702459;
  }

  .xl\:focus\:border-grey-darkest:focus {
    border-color: #3d4852;
  }

  .xl\:focus\:border-grey-darker:focus {
    border-color: #606f7b;
  }

  .xl\:focus\:border-grey-dark:focus {
    border-color: #8795a1;
  }

  .xl\:focus\:border-grey:focus {
    border-color: #b8c2cc;
  }

  .xl\:focus\:border-grey-light:focus {
    border-color: #dae1e7;
  }

  .xl\:focus\:border-grey-lighter:focus {
    border-color: #f1f5f8;
  }

  .xl\:focus\:border-grey-lightest:focus {
    border-color: #f8fafc;
  }

  .xl\:focus\:border-grey-mid-light:focus {
    border-color: #f3f3f4;
  }

  .xl\:focus\:border-white-lightest:focus {
    border-color: #f4f4f4;
  }

  .xl\:focus\:border-red-darkest:focus {
    border-color: #3b0d0c;
  }

  .xl\:focus\:border-red-darker:focus {
    border-color: #621b18;
  }

  .xl\:focus\:border-red-dark:focus {
    border-color: #cc1f1a;
  }

  .xl\:focus\:border-red-light:focus {
    border-color: #ef5753;
  }

  .xl\:focus\:border-red-lighter:focus {
    border-color: #f9acaa;
  }

  .xl\:focus\:border-red-lightest:focus {
    border-color: #fcebea;
  }

  .xl\:focus\:border-orange-darkest:focus {
    border-color: #462a16;
  }

  .xl\:focus\:border-orange-darker:focus {
    border-color: #613b1f;
  }

  .xl\:focus\:border-orange-dark:focus {
    border-color: #de751f;
  }

  .xl\:focus\:border-orange-light:focus {
    border-color: #faad63;
  }

  .xl\:focus\:border-orange-lighter:focus {
    border-color: #fcd9b6;
  }

  .xl\:focus\:border-orange-lightest:focus {
    border-color: #fff5eb;
  }

  .xl\:focus\:border-yellow-darkest:focus {
    border-color: #453411;
  }

  .xl\:focus\:border-yellow-darker:focus {
    border-color: #684f1d;
  }

  .xl\:focus\:border-yellow-dark:focus {
    border-color: #f2d024;
  }

  .xl\:focus\:border-yellow-light:focus {
    border-color: #fff382;
  }

  .xl\:focus\:border-yellow-lighter:focus {
    border-color: #fff9c2;
  }

  .xl\:focus\:border-yellow-lightest:focus {
    border-color: #fcfbeb;
  }

  .xl\:focus\:border-green-darkest:focus {
    border-color: #0f2f21;
  }

  .xl\:focus\:border-green-darker:focus {
    border-color: #1a4731;
  }

  .xl\:focus\:border-green-dark:focus {
    border-color: #1f9d55;
  }

  .xl\:focus\:border-green-light:focus {
    border-color: #51d88a;
  }

  .xl\:focus\:border-green-lighter:focus {
    border-color: #a2f5bf;
  }

  .xl\:focus\:border-green-lightest:focus {
    border-color: #e3fcec;
  }

  .xl\:focus\:border-teal-darkest:focus {
    border-color: #0d3331;
  }

  .xl\:focus\:border-teal-darker:focus {
    border-color: #20504f;
  }

  .xl\:focus\:border-teal-dark:focus {
    border-color: #38a89d;
  }

  .xl\:focus\:border-teal-light:focus {
    border-color: #64d5ca;
  }

  .xl\:focus\:border-teal-lighter:focus {
    border-color: #a0f0ed;
  }

  .xl\:focus\:border-teal-lightest:focus {
    border-color: #e8fffe;
  }

  .xl\:focus\:border-blue-darkest:focus {
    border-color: #12283a;
  }

  .xl\:focus\:border-blue-darker:focus {
    border-color: #1c3d5a;
  }

  .xl\:focus\:border-blue-dark:focus {
    border-color: #2779bd;
  }

  .xl\:focus\:border-blue-light:focus {
    border-color: #6cb2eb;
  }

  .xl\:focus\:border-blue-lighter:focus {
    border-color: #bcdefa;
  }

  .xl\:focus\:border-blue-lightest:focus {
    border-color: #eff8ff;
  }

  .xl\:focus\:border-indigo-darkest:focus {
    border-color: #191e38;
  }

  .xl\:focus\:border-indigo-darker:focus {
    border-color: #2f365f;
  }

  .xl\:focus\:border-indigo-dark:focus {
    border-color: #5661b3;
  }

  .xl\:focus\:border-indigo-light:focus {
    border-color: #7886d7;
  }

  .xl\:focus\:border-indigo-lighter:focus {
    border-color: #b2b7ff;
  }

  .xl\:focus\:border-indigo-lightest:focus {
    border-color: #e6e8ff;
  }

  .xl\:focus\:border-purple-darkest:focus {
    border-color: #21183c;
  }

  .xl\:focus\:border-purple-darker:focus {
    border-color: #382b5f;
  }

  .xl\:focus\:border-purple-dark:focus {
    border-color: #794acf;
  }

  .xl\:focus\:border-purple-light:focus {
    border-color: #a779e9;
  }

  .xl\:focus\:border-purple-lighter:focus {
    border-color: #d6bbfc;
  }

  .xl\:focus\:border-purple-lightest:focus {
    border-color: #f3ebff;
  }

  .xl\:focus\:border-pink-darkest:focus {
    border-color: #451225;
  }

  .xl\:focus\:border-pink-darker:focus {
    border-color: #6f213f;
  }

  .xl\:focus\:border-pink-dark:focus {
    border-color: #eb5286;
  }

  .xl\:focus\:border-pink-light:focus {
    border-color: #fa7ea8;
  }

  .xl\:focus\:border-pink-lighter:focus {
    border-color: #ffbbca;
  }

  .xl\:focus\:border-pink-lightest:focus {
    border-color: #ffebef;
  }

  .xl\:focus\:border-nav:focus {
    border-color: #3F495E;
  }

  .xl\:focus\:border-side-nav:focus {
    border-color: #ECF0F1;
  }

  .xl\:focus\:border-nav-item:focus {
    border-color: #626b7a;
  }

  .xl\:focus\:border-light-border:focus {
    border-color: #dfe4e6;
  }

  .xl\:focus\:border-white-medium:focus {
    border-color: #FAFAFA;
  }

  .xl\:focus\:border-white-medium-dark:focus {
    border-color: #E5E9EB;
  }

  .xl\:focus\:border-red-vibrant:focus {
    border-color: #e46050;
  }

  .xl\:focus\:border-red-vibrant-dark:focus {
    border-color: #d64230;
  }

  .xl\:focus\:border-primary:focus {
    border-color: #51BE99;
  }

  .xl\:focus\:border-primary-dark:focus {
    border-color: #0e5f43;
  }

  .xl\:focus\:border-warning:focus {
    border-color: #f4ab43;
  }

  .xl\:focus\:border-warning-dark:focus {
    border-color: #c37c16;
  }

  .xl\:focus\:border-black-dark:focus {
    border-color: #272634;
  }

  .xl\:focus\:border-black-darkest:focus {
    border-color: #141418;
  }

  .xl\:focus\:border-info:focus {
    border-color: #52bcdc;
  }

  .xl\:focus\:border-info-dark:focus {
    border-color: #2cadd4;
  }

  .xl\:focus\:border-success:focus {
    border-color: #72b159;
  }

  .xl\:focus\:border-success-dark:focus {
    border-color: #5D9547;
  }

  .xl\:focus\:border-transparent:focus {
    border-color: transparent;
  }

  .xl\:focus\:border-black:focus {
    border-color: #000;
  }

  .xl\:focus\:border-white:focus {
    border-color: #fff;
  }

  .xl\:focus\:border-gray-100:focus {
    border-color: #f7fafc;
  }

  .xl\:focus\:border-gray-200:focus {
    border-color: #edf2f7;
  }

  .xl\:focus\:border-gray-300:focus {
    border-color: #e2e8f0;
  }

  .xl\:focus\:border-gray-400:focus {
    border-color: #cbd5e0;
  }

  .xl\:focus\:border-gray-500:focus {
    border-color: #a0aec0;
  }

  .xl\:focus\:border-gray-600:focus {
    border-color: #718096;
  }

  .xl\:focus\:border-gray-700:focus {
    border-color: #4a5568;
  }

  .xl\:focus\:border-gray-800:focus {
    border-color: #2d3748;
  }

  .xl\:focus\:border-gray-900:focus {
    border-color: #1a202c;
  }

  .xl\:focus\:border-red-100:focus {
    border-color: #fff5f5;
  }

  .xl\:focus\:border-red-200:focus {
    border-color: #fed7d7;
  }

  .xl\:focus\:border-red-300:focus {
    border-color: #feb2b2;
  }

  .xl\:focus\:border-red-400:focus {
    border-color: #fc8181;
  }

  .xl\:focus\:border-red-500:focus {
    border-color: #f56565;
  }

  .xl\:focus\:border-red-600:focus {
    border-color: #e53e3e;
  }

  .xl\:focus\:border-red-700:focus {
    border-color: #c53030;
  }

  .xl\:focus\:border-red-800:focus {
    border-color: #9b2c2c;
  }

  .xl\:focus\:border-red-900:focus {
    border-color: #742a2a;
  }

  .xl\:focus\:border-orange-100:focus {
    border-color: #fffaf0;
  }

  .xl\:focus\:border-orange-200:focus {
    border-color: #feebc8;
  }

  .xl\:focus\:border-orange-300:focus {
    border-color: #fbd38d;
  }

  .xl\:focus\:border-orange-400:focus {
    border-color: #f6ad55;
  }

  .xl\:focus\:border-orange-500:focus {
    border-color: #ed8936;
  }

  .xl\:focus\:border-orange-600:focus {
    border-color: #dd6b20;
  }

  .xl\:focus\:border-orange-700:focus {
    border-color: #c05621;
  }

  .xl\:focus\:border-orange-800:focus {
    border-color: #9c4221;
  }

  .xl\:focus\:border-orange-900:focus {
    border-color: #7b341e;
  }

  .xl\:focus\:border-yellow-100:focus {
    border-color: #fffff0;
  }

  .xl\:focus\:border-yellow-200:focus {
    border-color: #fefcbf;
  }

  .xl\:focus\:border-yellow-300:focus {
    border-color: #faf089;
  }

  .xl\:focus\:border-yellow-400:focus {
    border-color: #f6e05e;
  }

  .xl\:focus\:border-yellow-500:focus {
    border-color: #ecc94b;
  }

  .xl\:focus\:border-yellow-600:focus {
    border-color: #d69e2e;
  }

  .xl\:focus\:border-yellow-700:focus {
    border-color: #b7791f;
  }

  .xl\:focus\:border-yellow-800:focus {
    border-color: #975a16;
  }

  .xl\:focus\:border-yellow-900:focus {
    border-color: #744210;
  }

  .xl\:focus\:border-green-100:focus {
    border-color: #f0fff4;
  }

  .xl\:focus\:border-green-200:focus {
    border-color: #c6f6d5;
  }

  .xl\:focus\:border-green-300:focus {
    border-color: #9ae6b4;
  }

  .xl\:focus\:border-green-400:focus {
    border-color: #68d391;
  }

  .xl\:focus\:border-green-500:focus {
    border-color: #48bb78;
  }

  .xl\:focus\:border-green-600:focus {
    border-color: #38a169;
  }

  .xl\:focus\:border-green-700:focus {
    border-color: #2f855a;
  }

  .xl\:focus\:border-green-800:focus {
    border-color: #276749;
  }

  .xl\:focus\:border-green-900:focus {
    border-color: #22543d;
  }

  .xl\:focus\:border-teal-100:focus {
    border-color: #e6fffa;
  }

  .xl\:focus\:border-teal-200:focus {
    border-color: #b2f5ea;
  }

  .xl\:focus\:border-teal-300:focus {
    border-color: #81e6d9;
  }

  .xl\:focus\:border-teal-400:focus {
    border-color: #4fd1c5;
  }

  .xl\:focus\:border-teal-500:focus {
    border-color: #38b2ac;
  }

  .xl\:focus\:border-teal-600:focus {
    border-color: #319795;
  }

  .xl\:focus\:border-teal-700:focus {
    border-color: #2c7a7b;
  }

  .xl\:focus\:border-teal-800:focus {
    border-color: #285e61;
  }

  .xl\:focus\:border-teal-900:focus {
    border-color: #234e52;
  }

  .xl\:focus\:border-blue-100:focus {
    border-color: #ebf8ff;
  }

  .xl\:focus\:border-blue-200:focus {
    border-color: #bee3f8;
  }

  .xl\:focus\:border-blue-300:focus {
    border-color: #90cdf4;
  }

  .xl\:focus\:border-blue-400:focus {
    border-color: #63b3ed;
  }

  .xl\:focus\:border-blue-500:focus {
    border-color: #4299e1;
  }

  .xl\:focus\:border-blue-600:focus {
    border-color: #3182ce;
  }

  .xl\:focus\:border-blue-700:focus {
    border-color: #2b6cb0;
  }

  .xl\:focus\:border-blue-800:focus {
    border-color: #2c5282;
  }

  .xl\:focus\:border-blue-900:focus {
    border-color: #2a4365;
  }

  .xl\:focus\:border-indigo-100:focus {
    border-color: #ebf4ff;
  }

  .xl\:focus\:border-indigo-200:focus {
    border-color: #c3dafe;
  }

  .xl\:focus\:border-indigo-300:focus {
    border-color: #a3bffa;
  }

  .xl\:focus\:border-indigo-400:focus {
    border-color: #7f9cf5;
  }

  .xl\:focus\:border-indigo-500:focus {
    border-color: #667eea;
  }

  .xl\:focus\:border-indigo-600:focus {
    border-color: #5a67d8;
  }

  .xl\:focus\:border-indigo-700:focus {
    border-color: #4c51bf;
  }

  .xl\:focus\:border-indigo-800:focus {
    border-color: #434190;
  }

  .xl\:focus\:border-indigo-900:focus {
    border-color: #3c366b;
  }

  .xl\:focus\:border-purple-100:focus {
    border-color: #faf5ff;
  }

  .xl\:focus\:border-purple-200:focus {
    border-color: #e9d8fd;
  }

  .xl\:focus\:border-purple-300:focus {
    border-color: #d6bcfa;
  }

  .xl\:focus\:border-purple-400:focus {
    border-color: #b794f4;
  }

  .xl\:focus\:border-purple-500:focus {
    border-color: #9f7aea;
  }

  .xl\:focus\:border-purple-600:focus {
    border-color: #805ad5;
  }

  .xl\:focus\:border-purple-700:focus {
    border-color: #6b46c1;
  }

  .xl\:focus\:border-purple-800:focus {
    border-color: #553c9a;
  }

  .xl\:focus\:border-purple-900:focus {
    border-color: #44337a;
  }

  .xl\:focus\:border-pink-100:focus {
    border-color: #fff5f7;
  }

  .xl\:focus\:border-pink-200:focus {
    border-color: #fed7e2;
  }

  .xl\:focus\:border-pink-300:focus {
    border-color: #fbb6ce;
  }

  .xl\:focus\:border-pink-400:focus {
    border-color: #f687b3;
  }

  .xl\:focus\:border-pink-500:focus {
    border-color: #ed64a6;
  }

  .xl\:focus\:border-pink-600:focus {
    border-color: #d53f8c;
  }

  .xl\:focus\:border-pink-700:focus {
    border-color: #b83280;
  }

  .xl\:focus\:border-pink-800:focus {
    border-color: #97266d;
  }

  .xl\:focus\:border-pink-900:focus {
    border-color: #702459;
  }

  .xl\:rounded-none {
    border-radius: 0;
  }

  .xl\:rounded-sm {
    border-radius: 0.125rem;
  }

  .xl\:rounded {
    border-radius: 0.25rem;
  }

  .xl\:rounded-lg {
    border-radius: 0.5rem;
  }

  .xl\:rounded-full {
    border-radius: 9999px;
  }

  .xl\:rounded-t-none {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }

  .xl\:rounded-r-none {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }

  .xl\:rounded-b-none {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }

  .xl\:rounded-l-none {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }

  .xl\:rounded-t-sm {
    border-top-left-radius: 0.125rem;
    border-top-right-radius: 0.125rem;
  }

  .xl\:rounded-r-sm {
    border-top-right-radius: 0.125rem;
    border-bottom-right-radius: 0.125rem;
  }

  .xl\:rounded-b-sm {
    border-bottom-right-radius: 0.125rem;
    border-bottom-left-radius: 0.125rem;
  }

  .xl\:rounded-l-sm {
    border-top-left-radius: 0.125rem;
    border-bottom-left-radius: 0.125rem;
  }

  .xl\:rounded-t {
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem;
  }

  .xl\:rounded-r {
    border-top-right-radius: 0.25rem;
    border-bottom-right-radius: 0.25rem;
  }

  .xl\:rounded-b {
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
  }

  .xl\:rounded-l {
    border-top-left-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
  }

  .xl\:rounded-t-lg {
    border-top-left-radius: 0.5rem;
    border-top-right-radius: 0.5rem;
  }

  .xl\:rounded-r-lg {
    border-top-right-radius: 0.5rem;
    border-bottom-right-radius: 0.5rem;
  }

  .xl\:rounded-b-lg {
    border-bottom-right-radius: 0.5rem;
    border-bottom-left-radius: 0.5rem;
  }

  .xl\:rounded-l-lg {
    border-top-left-radius: 0.5rem;
    border-bottom-left-radius: 0.5rem;
  }

  .xl\:rounded-t-full {
    border-top-left-radius: 9999px;
    border-top-right-radius: 9999px;
  }

  .xl\:rounded-r-full {
    border-top-right-radius: 9999px;
    border-bottom-right-radius: 9999px;
  }

  .xl\:rounded-b-full {
    border-bottom-right-radius: 9999px;
    border-bottom-left-radius: 9999px;
  }

  .xl\:rounded-l-full {
    border-top-left-radius: 9999px;
    border-bottom-left-radius: 9999px;
  }

  .xl\:rounded-tl-none {
    border-top-left-radius: 0;
  }

  .xl\:rounded-tr-none {
    border-top-right-radius: 0;
  }

  .xl\:rounded-br-none {
    border-bottom-right-radius: 0;
  }

  .xl\:rounded-bl-none {
    border-bottom-left-radius: 0;
  }

  .xl\:rounded-tl-sm {
    border-top-left-radius: 0.125rem;
  }

  .xl\:rounded-tr-sm {
    border-top-right-radius: 0.125rem;
  }

  .xl\:rounded-br-sm {
    border-bottom-right-radius: 0.125rem;
  }

  .xl\:rounded-bl-sm {
    border-bottom-left-radius: 0.125rem;
  }

  .xl\:rounded-tl {
    border-top-left-radius: 0.25rem;
  }

  .xl\:rounded-tr {
    border-top-right-radius: 0.25rem;
  }

  .xl\:rounded-br {
    border-bottom-right-radius: 0.25rem;
  }

  .xl\:rounded-bl {
    border-bottom-left-radius: 0.25rem;
  }

  .xl\:rounded-tl-lg {
    border-top-left-radius: 0.5rem;
  }

  .xl\:rounded-tr-lg {
    border-top-right-radius: 0.5rem;
  }

  .xl\:rounded-br-lg {
    border-bottom-right-radius: 0.5rem;
  }

  .xl\:rounded-bl-lg {
    border-bottom-left-radius: 0.5rem;
  }

  .xl\:rounded-tl-full {
    border-top-left-radius: 9999px;
  }

  .xl\:rounded-tr-full {
    border-top-right-radius: 9999px;
  }

  .xl\:rounded-br-full {
    border-bottom-right-radius: 9999px;
  }

  .xl\:rounded-bl-full {
    border-bottom-left-radius: 9999px;
  }

  .xl\:border-solid {
    border-style: solid;
  }

  .xl\:border-dashed {
    border-style: dashed;
  }

  .xl\:border-dotted {
    border-style: dotted;
  }

  .xl\:border-double {
    border-style: double;
  }

  .xl\:border-none {
    border-style: none;
  }

  .xl\:border-0 {
    border-width: 0;
  }

  .xl\:border-2 {
    border-width: 2px;
  }

  .xl\:border-4 {
    border-width: 4px;
  }

  .xl\:border-8 {
    border-width: 8px;
  }

  .xl\:border {
    border-width: 1px;
  }

  .xl\:border-t-0 {
    border-top-width: 0;
  }

  .xl\:border-r-0 {
    border-right-width: 0;
  }

  .xl\:border-b-0 {
    border-bottom-width: 0;
  }

  .xl\:border-l-0 {
    border-left-width: 0;
  }

  .xl\:border-t-2 {
    border-top-width: 2px;
  }

  .xl\:border-r-2 {
    border-right-width: 2px;
  }

  .xl\:border-b-2 {
    border-bottom-width: 2px;
  }

  .xl\:border-l-2 {
    border-left-width: 2px;
  }

  .xl\:border-t-4 {
    border-top-width: 4px;
  }

  .xl\:border-r-4 {
    border-right-width: 4px;
  }

  .xl\:border-b-4 {
    border-bottom-width: 4px;
  }

  .xl\:border-l-4 {
    border-left-width: 4px;
  }

  .xl\:border-t-8 {
    border-top-width: 8px;
  }

  .xl\:border-r-8 {
    border-right-width: 8px;
  }

  .xl\:border-b-8 {
    border-bottom-width: 8px;
  }

  .xl\:border-l-8 {
    border-left-width: 8px;
  }

  .xl\:border-t {
    border-top-width: 1px;
  }

  .xl\:border-r {
    border-right-width: 1px;
  }

  .xl\:border-b {
    border-bottom-width: 1px;
  }

  .xl\:border-l {
    border-left-width: 1px;
  }

  .xl\:cursor-auto {
    cursor: auto;
  }

  .xl\:cursor-default {
    cursor: default;
  }

  .xl\:cursor-pointer {
    cursor: pointer;
  }

  .xl\:cursor-wait {
    cursor: wait;
  }

  .xl\:cursor-text {
    cursor: text;
  }

  .xl\:cursor-move {
    cursor: move;
  }

  .xl\:cursor-not-allowed {
    cursor: not-allowed;
  }

  .xl\:block {
    display: block;
  }

  .xl\:inline-block {
    display: inline-block;
  }

  .xl\:inline {
    display: inline;
  }

  .xl\:flex {
    display: flex;
  }

  .xl\:inline-flex {
    display: inline-flex;
  }

  .xl\:table {
    display: table;
  }

  .xl\:table-row {
    display: table-row;
  }

  .xl\:table-cell {
    display: table-cell;
  }

  .xl\:hidden {
    display: none;
  }

  .xl\:flex-row {
    flex-direction: row;
  }

  .xl\:flex-row-reverse {
    flex-direction: row-reverse;
  }

  .xl\:flex-col {
    flex-direction: column;
  }

  .xl\:flex-col-reverse {
    flex-direction: column-reverse;
  }

  .xl\:flex-wrap {
    flex-wrap: wrap;
  }

  .xl\:flex-wrap-reverse {
    flex-wrap: wrap-reverse;
  }

  .xl\:flex-no-wrap {
    flex-wrap: nowrap;
  }

  .xl\:items-start {
    align-items: flex-start;
  }

  .xl\:items-end {
    align-items: flex-end;
  }

  .xl\:items-center {
    align-items: center;
  }

  .xl\:items-baseline {
    align-items: baseline;
  }

  .xl\:items-stretch {
    align-items: stretch;
  }

  .xl\:self-auto {
    align-self: auto;
  }

  .xl\:self-start {
    align-self: flex-start;
  }

  .xl\:self-end {
    align-self: flex-end;
  }

  .xl\:self-center {
    align-self: center;
  }

  .xl\:self-stretch {
    align-self: stretch;
  }

  .xl\:justify-start {
    justify-content: flex-start;
  }

  .xl\:justify-end {
    justify-content: flex-end;
  }

  .xl\:justify-center {
    justify-content: center;
  }

  .xl\:justify-between {
    justify-content: space-between;
  }

  .xl\:justify-around {
    justify-content: space-around;
  }

  .xl\:content-center {
    align-content: center;
  }

  .xl\:content-start {
    align-content: flex-start;
  }

  .xl\:content-end {
    align-content: flex-end;
  }

  .xl\:content-between {
    align-content: space-between;
  }

  .xl\:content-around {
    align-content: space-around;
  }

  .xl\:flex-1 {
    flex: 1 1 0%;
  }

  .xl\:flex-auto {
    flex: 1 1 auto;
  }

  .xl\:flex-initial {
    flex: 0 1 auto;
  }

  .xl\:flex-none {
    flex: none;
  }

  .xl\:flex-grow-0 {
    flex-grow: 0;
  }

  .xl\:flex-grow {
    flex-grow: 1;
  }

  .xl\:flex-shrink-0 {
    flex-shrink: 0;
  }

  .xl\:flex-shrink {
    flex-shrink: 1;
  }

  .xl\:order-1 {
    order: 1;
  }

  .xl\:order-2 {
    order: 2;
  }

  .xl\:order-3 {
    order: 3;
  }

  .xl\:order-4 {
    order: 4;
  }

  .xl\:order-5 {
    order: 5;
  }

  .xl\:order-6 {
    order: 6;
  }

  .xl\:order-7 {
    order: 7;
  }

  .xl\:order-8 {
    order: 8;
  }

  .xl\:order-9 {
    order: 9;
  }

  .xl\:order-10 {
    order: 10;
  }

  .xl\:order-11 {
    order: 11;
  }

  .xl\:order-12 {
    order: 12;
  }

  .xl\:order-first {
    order: -9999;
  }

  .xl\:order-last {
    order: 9999;
  }

  .xl\:order-none {
    order: 0;
  }

  .xl\:float-right {
    float: right;
  }

  .xl\:float-left {
    float: left;
  }

  .xl\:float-none {
    float: none;
  }

  .xl\:clearfix:after {
    content: "";
    display: table;
    clear: both;
  }

  .xl\:font-sans {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  }

  .xl\:font-serif {
    font-family: Georgia, Cambria, "Times New Roman", Times, serif;
  }

  .xl\:font-mono {
    font-family: Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  }

  .xl\:font-hairline {
    font-weight: 100;
  }

  .xl\:font-thin {
    font-weight: 200;
  }

  .xl\:font-light {
    font-weight: 300;
  }

  .xl\:font-normal {
    font-weight: 400;
  }

  .xl\:font-medium {
    font-weight: 500;
  }

  .xl\:font-semibold {
    font-weight: 600;
  }

  .xl\:font-bold {
    font-weight: 700;
  }

  .xl\:font-extrabold {
    font-weight: 800;
  }

  .xl\:font-black {
    font-weight: 900;
  }

  .xl\:hover\:font-hairline:hover {
    font-weight: 100;
  }

  .xl\:hover\:font-thin:hover {
    font-weight: 200;
  }

  .xl\:hover\:font-light:hover {
    font-weight: 300;
  }

  .xl\:hover\:font-normal:hover {
    font-weight: 400;
  }

  .xl\:hover\:font-medium:hover {
    font-weight: 500;
  }

  .xl\:hover\:font-semibold:hover {
    font-weight: 600;
  }

  .xl\:hover\:font-bold:hover {
    font-weight: 700;
  }

  .xl\:hover\:font-extrabold:hover {
    font-weight: 800;
  }

  .xl\:hover\:font-black:hover {
    font-weight: 900;
  }

  .xl\:focus\:font-hairline:focus {
    font-weight: 100;
  }

  .xl\:focus\:font-thin:focus {
    font-weight: 200;
  }

  .xl\:focus\:font-light:focus {
    font-weight: 300;
  }

  .xl\:focus\:font-normal:focus {
    font-weight: 400;
  }

  .xl\:focus\:font-medium:focus {
    font-weight: 500;
  }

  .xl\:focus\:font-semibold:focus {
    font-weight: 600;
  }

  .xl\:focus\:font-bold:focus {
    font-weight: 700;
  }

  .xl\:focus\:font-extrabold:focus {
    font-weight: 800;
  }

  .xl\:focus\:font-black:focus {
    font-weight: 900;
  }

  .xl\:h-0 {
    height: 0;
  }

  .xl\:h-1 {
    height: 0.25rem;
  }

  .xl\:h-2 {
    height: 0.5rem;
  }

  .xl\:h-3 {
    height: 0.75rem;
  }

  .xl\:h-4 {
    height: 1rem;
  }

  .xl\:h-5 {
    height: 1.25rem;
  }

  .xl\:h-6 {
    height: 1.5rem;
  }

  .xl\:h-8 {
    height: 2rem;
  }

  .xl\:h-10 {
    height: 2.5rem;
  }

  .xl\:h-12 {
    height: 3rem;
  }

  .xl\:h-16 {
    height: 4rem;
  }

  .xl\:h-20 {
    height: 5rem;
  }

  .xl\:h-24 {
    height: 6rem;
  }

  .xl\:h-32 {
    height: 8rem;
  }

  .xl\:h-40 {
    height: 10rem;
  }

  .xl\:h-48 {
    height: 12rem;
  }

  .xl\:h-56 {
    height: 14rem;
  }

  .xl\:h-64 {
    height: 16rem;
  }

  .xl\:h-auto {
    height: auto;
  }

  .xl\:h-px {
    height: 1px;
  }

  .xl\:h-full {
    height: 100%;
  }

  .xl\:h-screen {
    height: 100vh;
  }

  .xl\:leading-none {
    line-height: 1;
  }

  .xl\:leading-tight {
    line-height: 1.25;
  }

  .xl\:leading-snug {
    line-height: 1.375;
  }

  .xl\:leading-normal {
    line-height: 1.5;
  }

  .xl\:leading-relaxed {
    line-height: 1.625;
  }

  .xl\:leading-loose {
    line-height: 2;
  }

  .xl\:list-inside {
    list-style-position: inside;
  }

  .xl\:list-outside {
    list-style-position: outside;
  }

  .xl\:list-none {
    list-style-type: none;
  }

  .xl\:list-disc {
    list-style-type: disc;
  }

  .xl\:list-decimal {
    list-style-type: decimal;
  }

  .xl\:m-0 {
    margin: 0;
  }

  .xl\:m-1 {
    margin: 0.25rem;
  }

  .xl\:m-2 {
    margin: 0.5rem;
  }

  .xl\:m-3 {
    margin: 0.75rem;
  }

  .xl\:m-4 {
    margin: 1rem;
  }

  .xl\:m-5 {
    margin: 1.25rem;
  }

  .xl\:m-6 {
    margin: 1.5rem;
  }

  .xl\:m-8 {
    margin: 2rem;
  }

  .xl\:m-10 {
    margin: 2.5rem;
  }

  .xl\:m-12 {
    margin: 3rem;
  }

  .xl\:m-16 {
    margin: 4rem;
  }

  .xl\:m-20 {
    margin: 5rem;
  }

  .xl\:m-24 {
    margin: 6rem;
  }

  .xl\:m-32 {
    margin: 8rem;
  }

  .xl\:m-auto {
    margin: auto;
  }

  .xl\:m-px {
    margin: 1px;
  }

  .xl\:-m-px {
    margin: -1px;
  }

  .xl\:-m-1 {
    margin: -0.25rem;
  }

  .xl\:-m-2 {
    margin: -0.5rem;
  }

  .xl\:-m-3 {
    margin: -0.75rem;
  }

  .xl\:-m-4 {
    margin: -1rem;
  }

  .xl\:-m-5 {
    margin: -1.25rem;
  }

  .xl\:-m-6 {
    margin: -1.5rem;
  }

  .xl\:-m-8 {
    margin: -2rem;
  }

  .xl\:-m-10 {
    margin: -2.5rem;
  }

  .xl\:-m-12 {
    margin: -3rem;
  }

  .xl\:-m-16 {
    margin: -4rem;
  }

  .xl\:-m-20 {
    margin: -5rem;
  }

  .xl\:-m-24 {
    margin: -6rem;
  }

  .xl\:-m-32 {
    margin: -8rem;
  }

  .xl\:my-0 {
    margin-top: 0;
    margin-bottom: 0;
  }

  .xl\:mx-0 {
    margin-left: 0;
    margin-right: 0;
  }

  .xl\:my-1 {
    margin-top: 0.25rem;
    margin-bottom: 0.25rem;
  }

  .xl\:mx-1 {
    margin-left: 0.25rem;
    margin-right: 0.25rem;
  }

  .xl\:my-2 {
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
  }

  .xl\:mx-2 {
    margin-left: 0.5rem;
    margin-right: 0.5rem;
  }

  .xl\:my-3 {
    margin-top: 0.75rem;
    margin-bottom: 0.75rem;
  }

  .xl\:mx-3 {
    margin-left: 0.75rem;
    margin-right: 0.75rem;
  }

  .xl\:my-4 {
    margin-top: 1rem;
    margin-bottom: 1rem;
  }

  .xl\:mx-4 {
    margin-left: 1rem;
    margin-right: 1rem;
  }

  .xl\:my-5 {
    margin-top: 1.25rem;
    margin-bottom: 1.25rem;
  }

  .xl\:mx-5 {
    margin-left: 1.25rem;
    margin-right: 1.25rem;
  }

  .xl\:my-6 {
    margin-top: 1.5rem;
    margin-bottom: 1.5rem;
  }

  .xl\:mx-6 {
    margin-left: 1.5rem;
    margin-right: 1.5rem;
  }

  .xl\:my-8 {
    margin-top: 2rem;
    margin-bottom: 2rem;
  }

  .xl\:mx-8 {
    margin-left: 2rem;
    margin-right: 2rem;
  }

  .xl\:my-10 {
    margin-top: 2.5rem;
    margin-bottom: 2.5rem;
  }

  .xl\:mx-10 {
    margin-left: 2.5rem;
    margin-right: 2.5rem;
  }

  .xl\:my-12 {
    margin-top: 3rem;
    margin-bottom: 3rem;
  }

  .xl\:mx-12 {
    margin-left: 3rem;
    margin-right: 3rem;
  }

  .xl\:my-16 {
    margin-top: 4rem;
    margin-bottom: 4rem;
  }

  .xl\:mx-16 {
    margin-left: 4rem;
    margin-right: 4rem;
  }

  .xl\:my-20 {
    margin-top: 5rem;
    margin-bottom: 5rem;
  }

  .xl\:mx-20 {
    margin-left: 5rem;
    margin-right: 5rem;
  }

  .xl\:my-24 {
    margin-top: 6rem;
    margin-bottom: 6rem;
  }

  .xl\:mx-24 {
    margin-left: 6rem;
    margin-right: 6rem;
  }

  .xl\:my-32 {
    margin-top: 8rem;
    margin-bottom: 8rem;
  }

  .xl\:mx-32 {
    margin-left: 8rem;
    margin-right: 8rem;
  }

  .xl\:my-auto {
    margin-top: auto;
    margin-bottom: auto;
  }

  .xl\:mx-auto {
    margin-left: auto;
    margin-right: auto;
  }

  .xl\:my-px {
    margin-top: 1px;
    margin-bottom: 1px;
  }

  .xl\:mx-px {
    margin-left: 1px;
    margin-right: 1px;
  }

  .xl\:-my-px {
    margin-top: -1px;
    margin-bottom: -1px;
  }

  .xl\:-mx-px {
    margin-left: -1px;
    margin-right: -1px;
  }

  .xl\:-my-1 {
    margin-top: -0.25rem;
    margin-bottom: -0.25rem;
  }

  .xl\:-mx-1 {
    margin-left: -0.25rem;
    margin-right: -0.25rem;
  }

  .xl\:-my-2 {
    margin-top: -0.5rem;
    margin-bottom: -0.5rem;
  }

  .xl\:-mx-2 {
    margin-left: -0.5rem;
    margin-right: -0.5rem;
  }

  .xl\:-my-3 {
    margin-top: -0.75rem;
    margin-bottom: -0.75rem;
  }

  .xl\:-mx-3 {
    margin-left: -0.75rem;
    margin-right: -0.75rem;
  }

  .xl\:-my-4 {
    margin-top: -1rem;
    margin-bottom: -1rem;
  }

  .xl\:-mx-4 {
    margin-left: -1rem;
    margin-right: -1rem;
  }

  .xl\:-my-5 {
    margin-top: -1.25rem;
    margin-bottom: -1.25rem;
  }

  .xl\:-mx-5 {
    margin-left: -1.25rem;
    margin-right: -1.25rem;
  }

  .xl\:-my-6 {
    margin-top: -1.5rem;
    margin-bottom: -1.5rem;
  }

  .xl\:-mx-6 {
    margin-left: -1.5rem;
    margin-right: -1.5rem;
  }

  .xl\:-my-8 {
    margin-top: -2rem;
    margin-bottom: -2rem;
  }

  .xl\:-mx-8 {
    margin-left: -2rem;
    margin-right: -2rem;
  }

  .xl\:-my-10 {
    margin-top: -2.5rem;
    margin-bottom: -2.5rem;
  }

  .xl\:-mx-10 {
    margin-left: -2.5rem;
    margin-right: -2.5rem;
  }

  .xl\:-my-12 {
    margin-top: -3rem;
    margin-bottom: -3rem;
  }

  .xl\:-mx-12 {
    margin-left: -3rem;
    margin-right: -3rem;
  }

  .xl\:-my-16 {
    margin-top: -4rem;
    margin-bottom: -4rem;
  }

  .xl\:-mx-16 {
    margin-left: -4rem;
    margin-right: -4rem;
  }

  .xl\:-my-20 {
    margin-top: -5rem;
    margin-bottom: -5rem;
  }

  .xl\:-mx-20 {
    margin-left: -5rem;
    margin-right: -5rem;
  }

  .xl\:-my-24 {
    margin-top: -6rem;
    margin-bottom: -6rem;
  }

  .xl\:-mx-24 {
    margin-left: -6rem;
    margin-right: -6rem;
  }

  .xl\:-my-32 {
    margin-top: -8rem;
    margin-bottom: -8rem;
  }

  .xl\:-mx-32 {
    margin-left: -8rem;
    margin-right: -8rem;
  }

  .xl\:mt-0 {
    margin-top: 0;
  }

  .xl\:mr-0 {
    margin-right: 0;
  }

  .xl\:mb-0 {
    margin-bottom: 0;
  }

  .xl\:ml-0 {
    margin-left: 0;
  }

  .xl\:mt-1 {
    margin-top: 0.25rem;
  }

  .xl\:mr-1 {
    margin-right: 0.25rem;
  }

  .xl\:mb-1 {
    margin-bottom: 0.25rem;
  }

  .xl\:ml-1 {
    margin-left: 0.25rem;
  }

  .xl\:mt-2 {
    margin-top: 0.5rem;
  }

  .xl\:mr-2 {
    margin-right: 0.5rem;
  }

  .xl\:mb-2 {
    margin-bottom: 0.5rem;
  }

  .xl\:ml-2 {
    margin-left: 0.5rem;
  }

  .xl\:mt-3 {
    margin-top: 0.75rem;
  }

  .xl\:mr-3 {
    margin-right: 0.75rem;
  }

  .xl\:mb-3 {
    margin-bottom: 0.75rem;
  }

  .xl\:ml-3 {
    margin-left: 0.75rem;
  }

  .xl\:mt-4 {
    margin-top: 1rem;
  }

  .xl\:mr-4 {
    margin-right: 1rem;
  }

  .xl\:mb-4 {
    margin-bottom: 1rem;
  }

  .xl\:ml-4 {
    margin-left: 1rem;
  }

  .xl\:mt-5 {
    margin-top: 1.25rem;
  }

  .xl\:mr-5 {
    margin-right: 1.25rem;
  }

  .xl\:mb-5 {
    margin-bottom: 1.25rem;
  }

  .xl\:ml-5 {
    margin-left: 1.25rem;
  }

  .xl\:mt-6 {
    margin-top: 1.5rem;
  }

  .xl\:mr-6 {
    margin-right: 1.5rem;
  }

  .xl\:mb-6 {
    margin-bottom: 1.5rem;
  }

  .xl\:ml-6 {
    margin-left: 1.5rem;
  }

  .xl\:mt-8 {
    margin-top: 2rem;
  }

  .xl\:mr-8 {
    margin-right: 2rem;
  }

  .xl\:mb-8 {
    margin-bottom: 2rem;
  }

  .xl\:ml-8 {
    margin-left: 2rem;
  }

  .xl\:mt-10 {
    margin-top: 2.5rem;
  }

  .xl\:mr-10 {
    margin-right: 2.5rem;
  }

  .xl\:mb-10 {
    margin-bottom: 2.5rem;
  }

  .xl\:ml-10 {
    margin-left: 2.5rem;
  }

  .xl\:mt-12 {
    margin-top: 3rem;
  }

  .xl\:mr-12 {
    margin-right: 3rem;
  }

  .xl\:mb-12 {
    margin-bottom: 3rem;
  }

  .xl\:ml-12 {
    margin-left: 3rem;
  }

  .xl\:mt-16 {
    margin-top: 4rem;
  }

  .xl\:mr-16 {
    margin-right: 4rem;
  }

  .xl\:mb-16 {
    margin-bottom: 4rem;
  }

  .xl\:ml-16 {
    margin-left: 4rem;
  }

  .xl\:mt-20 {
    margin-top: 5rem;
  }

  .xl\:mr-20 {
    margin-right: 5rem;
  }

  .xl\:mb-20 {
    margin-bottom: 5rem;
  }

  .xl\:ml-20 {
    margin-left: 5rem;
  }

  .xl\:mt-24 {
    margin-top: 6rem;
  }

  .xl\:mr-24 {
    margin-right: 6rem;
  }

  .xl\:mb-24 {
    margin-bottom: 6rem;
  }

  .xl\:ml-24 {
    margin-left: 6rem;
  }

  .xl\:mt-32 {
    margin-top: 8rem;
  }

  .xl\:mr-32 {
    margin-right: 8rem;
  }

  .xl\:mb-32 {
    margin-bottom: 8rem;
  }

  .xl\:ml-32 {
    margin-left: 8rem;
  }

  .xl\:mt-auto {
    margin-top: auto;
  }

  .xl\:mr-auto {
    margin-right: auto;
  }

  .xl\:mb-auto {
    margin-bottom: auto;
  }

  .xl\:ml-auto {
    margin-left: auto;
  }

  .xl\:mt-px {
    margin-top: 1px;
  }

  .xl\:mr-px {
    margin-right: 1px;
  }

  .xl\:mb-px {
    margin-bottom: 1px;
  }

  .xl\:ml-px {
    margin-left: 1px;
  }

  .xl\:-mt-px {
    margin-top: -1px;
  }

  .xl\:-mr-px {
    margin-right: -1px;
  }

  .xl\:-mb-px {
    margin-bottom: -1px;
  }

  .xl\:-ml-px {
    margin-left: -1px;
  }

  .xl\:-mt-1 {
    margin-top: -0.25rem;
  }

  .xl\:-mr-1 {
    margin-right: -0.25rem;
  }

  .xl\:-mb-1 {
    margin-bottom: -0.25rem;
  }

  .xl\:-ml-1 {
    margin-left: -0.25rem;
  }

  .xl\:-mt-2 {
    margin-top: -0.5rem;
  }

  .xl\:-mr-2 {
    margin-right: -0.5rem;
  }

  .xl\:-mb-2 {
    margin-bottom: -0.5rem;
  }

  .xl\:-ml-2 {
    margin-left: -0.5rem;
  }

  .xl\:-mt-3 {
    margin-top: -0.75rem;
  }

  .xl\:-mr-3 {
    margin-right: -0.75rem;
  }

  .xl\:-mb-3 {
    margin-bottom: -0.75rem;
  }

  .xl\:-ml-3 {
    margin-left: -0.75rem;
  }

  .xl\:-mt-4 {
    margin-top: -1rem;
  }

  .xl\:-mr-4 {
    margin-right: -1rem;
  }

  .xl\:-mb-4 {
    margin-bottom: -1rem;
  }

  .xl\:-ml-4 {
    margin-left: -1rem;
  }

  .xl\:-mt-5 {
    margin-top: -1.25rem;
  }

  .xl\:-mr-5 {
    margin-right: -1.25rem;
  }

  .xl\:-mb-5 {
    margin-bottom: -1.25rem;
  }

  .xl\:-ml-5 {
    margin-left: -1.25rem;
  }

  .xl\:-mt-6 {
    margin-top: -1.5rem;
  }

  .xl\:-mr-6 {
    margin-right: -1.5rem;
  }

  .xl\:-mb-6 {
    margin-bottom: -1.5rem;
  }

  .xl\:-ml-6 {
    margin-left: -1.5rem;
  }

  .xl\:-mt-8 {
    margin-top: -2rem;
  }

  .xl\:-mr-8 {
    margin-right: -2rem;
  }

  .xl\:-mb-8 {
    margin-bottom: -2rem;
  }

  .xl\:-ml-8 {
    margin-left: -2rem;
  }

  .xl\:-mt-10 {
    margin-top: -2.5rem;
  }

  .xl\:-mr-10 {
    margin-right: -2.5rem;
  }

  .xl\:-mb-10 {
    margin-bottom: -2.5rem;
  }

  .xl\:-ml-10 {
    margin-left: -2.5rem;
  }

  .xl\:-mt-12 {
    margin-top: -3rem;
  }

  .xl\:-mr-12 {
    margin-right: -3rem;
  }

  .xl\:-mb-12 {
    margin-bottom: -3rem;
  }

  .xl\:-ml-12 {
    margin-left: -3rem;
  }

  .xl\:-mt-16 {
    margin-top: -4rem;
  }

  .xl\:-mr-16 {
    margin-right: -4rem;
  }

  .xl\:-mb-16 {
    margin-bottom: -4rem;
  }

  .xl\:-ml-16 {
    margin-left: -4rem;
  }

  .xl\:-mt-20 {
    margin-top: -5rem;
  }

  .xl\:-mr-20 {
    margin-right: -5rem;
  }

  .xl\:-mb-20 {
    margin-bottom: -5rem;
  }

  .xl\:-ml-20 {
    margin-left: -5rem;
  }

  .xl\:-mt-24 {
    margin-top: -6rem;
  }

  .xl\:-mr-24 {
    margin-right: -6rem;
  }

  .xl\:-mb-24 {
    margin-bottom: -6rem;
  }

  .xl\:-ml-24 {
    margin-left: -6rem;
  }

  .xl\:-mt-32 {
    margin-top: -8rem;
  }

  .xl\:-mr-32 {
    margin-right: -8rem;
  }

  .xl\:-mb-32 {
    margin-bottom: -8rem;
  }

  .xl\:-ml-32 {
    margin-left: -8rem;
  }

  .xl\:max-h-full {
    max-height: 100%;
  }

  .xl\:max-h-screen {
    max-height: 100vh;
  }

  .xl\:max-w-xs {
    max-width: 20rem;
  }

  .xl\:max-w-sm {
    max-width: 24rem;
  }

  .xl\:max-w-md {
    max-width: 28rem;
  }

  .xl\:max-w-lg {
    max-width: 32rem;
  }

  .xl\:max-w-xl {
    max-width: 36rem;
  }

  .xl\:max-w-2xl {
    max-width: 42rem;
  }

  .xl\:max-w-3xl {
    max-width: 48rem;
  }

  .xl\:max-w-4xl {
    max-width: 56rem;
  }

  .xl\:max-w-5xl {
    max-width: 64rem;
  }

  .xl\:max-w-6xl {
    max-width: 72rem;
  }

  .xl\:max-w-full {
    max-width: 100%;
  }

  .xl\:min-h-0 {
    min-height: 0;
  }

  .xl\:min-h-full {
    min-height: 100%;
  }

  .xl\:min-h-screen {
    min-height: 100vh;
  }

  .xl\:min-w-0 {
    min-width: 0;
  }

  .xl\:min-w-full {
    min-width: 100%;
  }

  .xl\:object-contain {
    object-fit: contain;
  }

  .xl\:object-cover {
    object-fit: cover;
  }

  .xl\:object-fill {
    object-fit: fill;
  }

  .xl\:object-none {
    object-fit: none;
  }

  .xl\:object-scale-down {
    object-fit: scale-down;
  }

  .xl\:object-bottom {
    object-position: bottom;
  }

  .xl\:object-center {
    object-position: center;
  }

  .xl\:object-left {
    object-position: left;
  }

  .xl\:object-left-bottom {
    object-position: left bottom;
  }

  .xl\:object-left-top {
    object-position: left top;
  }

  .xl\:object-right {
    object-position: right;
  }

  .xl\:object-right-bottom {
    object-position: right bottom;
  }

  .xl\:object-right-top {
    object-position: right top;
  }

  .xl\:object-top {
    object-position: top;
  }

  .xl\:opacity-0 {
    opacity: 0;
  }

  .xl\:opacity-25 {
    opacity: 0.25;
  }

  .xl\:opacity-50 {
    opacity: 0.5;
  }

  .xl\:opacity-75 {
    opacity: 0.75;
  }

  .xl\:opacity-100 {
    opacity: 1;
  }

  .xl\:hover\:opacity-0:hover {
    opacity: 0;
  }

  .xl\:hover\:opacity-25:hover {
    opacity: 0.25;
  }

  .xl\:hover\:opacity-50:hover {
    opacity: 0.5;
  }

  .xl\:hover\:opacity-75:hover {
    opacity: 0.75;
  }

  .xl\:hover\:opacity-100:hover {
    opacity: 1;
  }

  .xl\:focus\:opacity-0:focus {
    opacity: 0;
  }

  .xl\:focus\:opacity-25:focus {
    opacity: 0.25;
  }

  .xl\:focus\:opacity-50:focus {
    opacity: 0.5;
  }

  .xl\:focus\:opacity-75:focus {
    opacity: 0.75;
  }

  .xl\:focus\:opacity-100:focus {
    opacity: 1;
  }

  .xl\:outline-none {
    outline: 0;
  }

  .xl\:focus\:outline-none:focus {
    outline: 0;
  }

  .xl\:overflow-auto {
    overflow: auto;
  }

  .xl\:overflow-hidden {
    overflow: hidden;
  }

  .xl\:overflow-visible {
    overflow: visible;
  }

  .xl\:overflow-scroll {
    overflow: scroll;
  }

  .xl\:overflow-x-auto {
    overflow-x: auto;
  }

  .xl\:overflow-y-auto {
    overflow-y: auto;
  }

  .xl\:overflow-x-hidden {
    overflow-x: hidden;
  }

  .xl\:overflow-y-hidden {
    overflow-y: hidden;
  }

  .xl\:overflow-x-visible {
    overflow-x: visible;
  }

  .xl\:overflow-y-visible {
    overflow-y: visible;
  }

  .xl\:overflow-x-scroll {
    overflow-x: scroll;
  }

  .xl\:overflow-y-scroll {
    overflow-y: scroll;
  }

  .xl\:scrolling-touch {
    -webkit-overflow-scrolling: touch;
  }

  .xl\:scrolling-auto {
    -webkit-overflow-scrolling: auto;
  }

  .xl\:p-0 {
    padding: 0;
  }

  .xl\:p-1 {
    padding: 0.25rem;
  }

  .xl\:p-2 {
    padding: 0.5rem;
  }

  .xl\:p-3 {
    padding: 0.75rem;
  }

  .xl\:p-4 {
    padding: 1rem;
  }

  .xl\:p-5 {
    padding: 1.25rem;
  }

  .xl\:p-6 {
    padding: 1.5rem;
  }

  .xl\:p-8 {
    padding: 2rem;
  }

  .xl\:p-10 {
    padding: 2.5rem;
  }

  .xl\:p-12 {
    padding: 3rem;
  }

  .xl\:p-16 {
    padding: 4rem;
  }

  .xl\:p-20 {
    padding: 5rem;
  }

  .xl\:p-24 {
    padding: 6rem;
  }

  .xl\:p-32 {
    padding: 8rem;
  }

  .xl\:p-40 {
    padding: 10rem;
  }

  .xl\:p-48 {
    padding: 12rem;
  }

  .xl\:p-56 {
    padding: 14rem;
  }

  .xl\:p-64 {
    padding: 16rem;
  }

  .xl\:p-px {
    padding: 1px;
  }

  .xl\:py-0 {
    padding-top: 0;
    padding-bottom: 0;
  }

  .xl\:px-0 {
    padding-left: 0;
    padding-right: 0;
  }

  .xl\:py-1 {
    padding-top: 0.25rem;
    padding-bottom: 0.25rem;
  }

  .xl\:px-1 {
    padding-left: 0.25rem;
    padding-right: 0.25rem;
  }

  .xl\:py-2 {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
  }

  .xl\:px-2 {
    padding-left: 0.5rem;
    padding-right: 0.5rem;
  }

  .xl\:py-3 {
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
  }

  .xl\:px-3 {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }

  .xl\:py-4 {
    padding-top: 1rem;
    padding-bottom: 1rem;
  }

  .xl\:px-4 {
    padding-left: 1rem;
    padding-right: 1rem;
  }

  .xl\:py-5 {
    padding-top: 1.25rem;
    padding-bottom: 1.25rem;
  }

  .xl\:px-5 {
    padding-left: 1.25rem;
    padding-right: 1.25rem;
  }

  .xl\:py-6 {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
  }

  .xl\:px-6 {
    padding-left: 1.5rem;
    padding-right: 1.5rem;
  }

  .xl\:py-8 {
    padding-top: 2rem;
    padding-bottom: 2rem;
  }

  .xl\:px-8 {
    padding-left: 2rem;
    padding-right: 2rem;
  }

  .xl\:py-10 {
    padding-top: 2.5rem;
    padding-bottom: 2.5rem;
  }

  .xl\:px-10 {
    padding-left: 2.5rem;
    padding-right: 2.5rem;
  }

  .xl\:py-12 {
    padding-top: 3rem;
    padding-bottom: 3rem;
  }

  .xl\:px-12 {
    padding-left: 3rem;
    padding-right: 3rem;
  }

  .xl\:py-16 {
    padding-top: 4rem;
    padding-bottom: 4rem;
  }

  .xl\:px-16 {
    padding-left: 4rem;
    padding-right: 4rem;
  }

  .xl\:py-20 {
    padding-top: 5rem;
    padding-bottom: 5rem;
  }

  .xl\:px-20 {
    padding-left: 5rem;
    padding-right: 5rem;
  }

  .xl\:py-24 {
    padding-top: 6rem;
    padding-bottom: 6rem;
  }

  .xl\:px-24 {
    padding-left: 6rem;
    padding-right: 6rem;
  }

  .xl\:py-32 {
    padding-top: 8rem;
    padding-bottom: 8rem;
  }

  .xl\:px-32 {
    padding-left: 8rem;
    padding-right: 8rem;
  }

  .xl\:py-40 {
    padding-top: 10rem;
    padding-bottom: 10rem;
  }

  .xl\:px-40 {
    padding-left: 10rem;
    padding-right: 10rem;
  }

  .xl\:py-48 {
    padding-top: 12rem;
    padding-bottom: 12rem;
  }

  .xl\:px-48 {
    padding-left: 12rem;
    padding-right: 12rem;
  }

  .xl\:py-56 {
    padding-top: 14rem;
    padding-bottom: 14rem;
  }

  .xl\:px-56 {
    padding-left: 14rem;
    padding-right: 14rem;
  }

  .xl\:py-64 {
    padding-top: 16rem;
    padding-bottom: 16rem;
  }

  .xl\:px-64 {
    padding-left: 16rem;
    padding-right: 16rem;
  }

  .xl\:py-px {
    padding-top: 1px;
    padding-bottom: 1px;
  }

  .xl\:px-px {
    padding-left: 1px;
    padding-right: 1px;
  }

  .xl\:pt-0 {
    padding-top: 0;
  }

  .xl\:pr-0 {
    padding-right: 0;
  }

  .xl\:pb-0 {
    padding-bottom: 0;
  }

  .xl\:pl-0 {
    padding-left: 0;
  }

  .xl\:pt-1 {
    padding-top: 0.25rem;
  }

  .xl\:pr-1 {
    padding-right: 0.25rem;
  }

  .xl\:pb-1 {
    padding-bottom: 0.25rem;
  }

  .xl\:pl-1 {
    padding-left: 0.25rem;
  }

  .xl\:pt-2 {
    padding-top: 0.5rem;
  }

  .xl\:pr-2 {
    padding-right: 0.5rem;
  }

  .xl\:pb-2 {
    padding-bottom: 0.5rem;
  }

  .xl\:pl-2 {
    padding-left: 0.5rem;
  }

  .xl\:pt-3 {
    padding-top: 0.75rem;
  }

  .xl\:pr-3 {
    padding-right: 0.75rem;
  }

  .xl\:pb-3 {
    padding-bottom: 0.75rem;
  }

  .xl\:pl-3 {
    padding-left: 0.75rem;
  }

  .xl\:pt-4 {
    padding-top: 1rem;
  }

  .xl\:pr-4 {
    padding-right: 1rem;
  }

  .xl\:pb-4 {
    padding-bottom: 1rem;
  }

  .xl\:pl-4 {
    padding-left: 1rem;
  }

  .xl\:pt-5 {
    padding-top: 1.25rem;
  }

  .xl\:pr-5 {
    padding-right: 1.25rem;
  }

  .xl\:pb-5 {
    padding-bottom: 1.25rem;
  }

  .xl\:pl-5 {
    padding-left: 1.25rem;
  }

  .xl\:pt-6 {
    padding-top: 1.5rem;
  }

  .xl\:pr-6 {
    padding-right: 1.5rem;
  }

  .xl\:pb-6 {
    padding-bottom: 1.5rem;
  }

  .xl\:pl-6 {
    padding-left: 1.5rem;
  }

  .xl\:pt-8 {
    padding-top: 2rem;
  }

  .xl\:pr-8 {
    padding-right: 2rem;
  }

  .xl\:pb-8 {
    padding-bottom: 2rem;
  }

  .xl\:pl-8 {
    padding-left: 2rem;
  }

  .xl\:pt-10 {
    padding-top: 2.5rem;
  }

  .xl\:pr-10 {
    padding-right: 2.5rem;
  }

  .xl\:pb-10 {
    padding-bottom: 2.5rem;
  }

  .xl\:pl-10 {
    padding-left: 2.5rem;
  }

  .xl\:pt-12 {
    padding-top: 3rem;
  }

  .xl\:pr-12 {
    padding-right: 3rem;
  }

  .xl\:pb-12 {
    padding-bottom: 3rem;
  }

  .xl\:pl-12 {
    padding-left: 3rem;
  }

  .xl\:pt-16 {
    padding-top: 4rem;
  }

  .xl\:pr-16 {
    padding-right: 4rem;
  }

  .xl\:pb-16 {
    padding-bottom: 4rem;
  }

  .xl\:pl-16 {
    padding-left: 4rem;
  }

  .xl\:pt-20 {
    padding-top: 5rem;
  }

  .xl\:pr-20 {
    padding-right: 5rem;
  }

  .xl\:pb-20 {
    padding-bottom: 5rem;
  }

  .xl\:pl-20 {
    padding-left: 5rem;
  }

  .xl\:pt-24 {
    padding-top: 6rem;
  }

  .xl\:pr-24 {
    padding-right: 6rem;
  }

  .xl\:pb-24 {
    padding-bottom: 6rem;
  }

  .xl\:pl-24 {
    padding-left: 6rem;
  }

  .xl\:pt-32 {
    padding-top: 8rem;
  }

  .xl\:pr-32 {
    padding-right: 8rem;
  }

  .xl\:pb-32 {
    padding-bottom: 8rem;
  }

  .xl\:pl-32 {
    padding-left: 8rem;
  }

  .xl\:pt-40 {
    padding-top: 10rem;
  }

  .xl\:pr-40 {
    padding-right: 10rem;
  }

  .xl\:pb-40 {
    padding-bottom: 10rem;
  }

  .xl\:pl-40 {
    padding-left: 10rem;
  }

  .xl\:pt-48 {
    padding-top: 12rem;
  }

  .xl\:pr-48 {
    padding-right: 12rem;
  }

  .xl\:pb-48 {
    padding-bottom: 12rem;
  }

  .xl\:pl-48 {
    padding-left: 12rem;
  }

  .xl\:pt-56 {
    padding-top: 14rem;
  }

  .xl\:pr-56 {
    padding-right: 14rem;
  }

  .xl\:pb-56 {
    padding-bottom: 14rem;
  }

  .xl\:pl-56 {
    padding-left: 14rem;
  }

  .xl\:pt-64 {
    padding-top: 16rem;
  }

  .xl\:pr-64 {
    padding-right: 16rem;
  }

  .xl\:pb-64 {
    padding-bottom: 16rem;
  }

  .xl\:pl-64 {
    padding-left: 16rem;
  }

  .xl\:pt-px {
    padding-top: 1px;
  }

  .xl\:pr-px {
    padding-right: 1px;
  }

  .xl\:pb-px {
    padding-bottom: 1px;
  }

  .xl\:pl-px {
    padding-left: 1px;
  }

  .xl\:placeholder-grey-darkest::placeholder {
    color: #3d4852;
  }

  .xl\:placeholder-grey-darker::placeholder {
    color: #606f7b;
  }

  .xl\:placeholder-grey-dark::placeholder {
    color: #8795a1;
  }

  .xl\:placeholder-grey::placeholder {
    color: #b8c2cc;
  }

  .xl\:placeholder-grey-light::placeholder {
    color: #dae1e7;
  }

  .xl\:placeholder-grey-lighter::placeholder {
    color: #f1f5f8;
  }

  .xl\:placeholder-grey-lightest::placeholder {
    color: #f8fafc;
  }

  .xl\:placeholder-grey-mid-light::placeholder {
    color: #f3f3f4;
  }

  .xl\:placeholder-white-lightest::placeholder {
    color: #f4f4f4;
  }

  .xl\:placeholder-red-darkest::placeholder {
    color: #3b0d0c;
  }

  .xl\:placeholder-red-darker::placeholder {
    color: #621b18;
  }

  .xl\:placeholder-red-dark::placeholder {
    color: #cc1f1a;
  }

  .xl\:placeholder-red-light::placeholder {
    color: #ef5753;
  }

  .xl\:placeholder-red-lighter::placeholder {
    color: #f9acaa;
  }

  .xl\:placeholder-red-lightest::placeholder {
    color: #fcebea;
  }

  .xl\:placeholder-orange-darkest::placeholder {
    color: #462a16;
  }

  .xl\:placeholder-orange-darker::placeholder {
    color: #613b1f;
  }

  .xl\:placeholder-orange-dark::placeholder {
    color: #de751f;
  }

  .xl\:placeholder-orange-light::placeholder {
    color: #faad63;
  }

  .xl\:placeholder-orange-lighter::placeholder {
    color: #fcd9b6;
  }

  .xl\:placeholder-orange-lightest::placeholder {
    color: #fff5eb;
  }

  .xl\:placeholder-yellow-darkest::placeholder {
    color: #453411;
  }

  .xl\:placeholder-yellow-darker::placeholder {
    color: #684f1d;
  }

  .xl\:placeholder-yellow-dark::placeholder {
    color: #f2d024;
  }

  .xl\:placeholder-yellow-light::placeholder {
    color: #fff382;
  }

  .xl\:placeholder-yellow-lighter::placeholder {
    color: #fff9c2;
  }

  .xl\:placeholder-yellow-lightest::placeholder {
    color: #fcfbeb;
  }

  .xl\:placeholder-green-darkest::placeholder {
    color: #0f2f21;
  }

  .xl\:placeholder-green-darker::placeholder {
    color: #1a4731;
  }

  .xl\:placeholder-green-dark::placeholder {
    color: #1f9d55;
  }

  .xl\:placeholder-green-light::placeholder {
    color: #51d88a;
  }

  .xl\:placeholder-green-lighter::placeholder {
    color: #a2f5bf;
  }

  .xl\:placeholder-green-lightest::placeholder {
    color: #e3fcec;
  }

  .xl\:placeholder-teal-darkest::placeholder {
    color: #0d3331;
  }

  .xl\:placeholder-teal-darker::placeholder {
    color: #20504f;
  }

  .xl\:placeholder-teal-dark::placeholder {
    color: #38a89d;
  }

  .xl\:placeholder-teal-light::placeholder {
    color: #64d5ca;
  }

  .xl\:placeholder-teal-lighter::placeholder {
    color: #a0f0ed;
  }

  .xl\:placeholder-teal-lightest::placeholder {
    color: #e8fffe;
  }

  .xl\:placeholder-blue-darkest::placeholder {
    color: #12283a;
  }

  .xl\:placeholder-blue-darker::placeholder {
    color: #1c3d5a;
  }

  .xl\:placeholder-blue-dark::placeholder {
    color: #2779bd;
  }

  .xl\:placeholder-blue-light::placeholder {
    color: #6cb2eb;
  }

  .xl\:placeholder-blue-lighter::placeholder {
    color: #bcdefa;
  }

  .xl\:placeholder-blue-lightest::placeholder {
    color: #eff8ff;
  }

  .xl\:placeholder-indigo-darkest::placeholder {
    color: #191e38;
  }

  .xl\:placeholder-indigo-darker::placeholder {
    color: #2f365f;
  }

  .xl\:placeholder-indigo-dark::placeholder {
    color: #5661b3;
  }

  .xl\:placeholder-indigo-light::placeholder {
    color: #7886d7;
  }

  .xl\:placeholder-indigo-lighter::placeholder {
    color: #b2b7ff;
  }

  .xl\:placeholder-indigo-lightest::placeholder {
    color: #e6e8ff;
  }

  .xl\:placeholder-purple-darkest::placeholder {
    color: #21183c;
  }

  .xl\:placeholder-purple-darker::placeholder {
    color: #382b5f;
  }

  .xl\:placeholder-purple-dark::placeholder {
    color: #794acf;
  }

  .xl\:placeholder-purple-light::placeholder {
    color: #a779e9;
  }

  .xl\:placeholder-purple-lighter::placeholder {
    color: #d6bbfc;
  }

  .xl\:placeholder-purple-lightest::placeholder {
    color: #f3ebff;
  }

  .xl\:placeholder-pink-darkest::placeholder {
    color: #451225;
  }

  .xl\:placeholder-pink-darker::placeholder {
    color: #6f213f;
  }

  .xl\:placeholder-pink-dark::placeholder {
    color: #eb5286;
  }

  .xl\:placeholder-pink-light::placeholder {
    color: #fa7ea8;
  }

  .xl\:placeholder-pink-lighter::placeholder {
    color: #ffbbca;
  }

  .xl\:placeholder-pink-lightest::placeholder {
    color: #ffebef;
  }

  .xl\:placeholder-nav::placeholder {
    color: #3F495E;
  }

  .xl\:placeholder-side-nav::placeholder {
    color: #ECF0F1;
  }

  .xl\:placeholder-nav-item::placeholder {
    color: #626b7a;
  }

  .xl\:placeholder-light-border::placeholder {
    color: #dfe4e6;
  }

  .xl\:placeholder-white-medium::placeholder {
    color: #FAFAFA;
  }

  .xl\:placeholder-white-medium-dark::placeholder {
    color: #E5E9EB;
  }

  .xl\:placeholder-red-vibrant::placeholder {
    color: #e46050;
  }

  .xl\:placeholder-red-vibrant-dark::placeholder {
    color: #d64230;
  }

  .xl\:placeholder-primary::placeholder {
    color: #51BE99;
  }

  .xl\:placeholder-primary-dark::placeholder {
    color: #0e5f43;
  }

  .xl\:placeholder-warning::placeholder {
    color: #f4ab43;
  }

  .xl\:placeholder-warning-dark::placeholder {
    color: #c37c16;
  }

  .xl\:placeholder-black-dark::placeholder {
    color: #272634;
  }

  .xl\:placeholder-black-darkest::placeholder {
    color: #141418;
  }

  .xl\:placeholder-info::placeholder {
    color: #52bcdc;
  }

  .xl\:placeholder-info-dark::placeholder {
    color: #2cadd4;
  }

  .xl\:placeholder-success::placeholder {
    color: #72b159;
  }

  .xl\:placeholder-success-dark::placeholder {
    color: #5D9547;
  }

  .xl\:placeholder-transparent::placeholder {
    color: transparent;
  }

  .xl\:placeholder-black::placeholder {
    color: #000;
  }

  .xl\:placeholder-white::placeholder {
    color: #fff;
  }

  .xl\:placeholder-gray-100::placeholder {
    color: #f7fafc;
  }

  .xl\:placeholder-gray-200::placeholder {
    color: #edf2f7;
  }

  .xl\:placeholder-gray-300::placeholder {
    color: #e2e8f0;
  }

  .xl\:placeholder-gray-400::placeholder {
    color: #cbd5e0;
  }

  .xl\:placeholder-gray-500::placeholder {
    color: #a0aec0;
  }

  .xl\:placeholder-gray-600::placeholder {
    color: #718096;
  }

  .xl\:placeholder-gray-700::placeholder {
    color: #4a5568;
  }

  .xl\:placeholder-gray-800::placeholder {
    color: #2d3748;
  }

  .xl\:placeholder-gray-900::placeholder {
    color: #1a202c;
  }

  .xl\:placeholder-red-100::placeholder {
    color: #fff5f5;
  }

  .xl\:placeholder-red-200::placeholder {
    color: #fed7d7;
  }

  .xl\:placeholder-red-300::placeholder {
    color: #feb2b2;
  }

  .xl\:placeholder-red-400::placeholder {
    color: #fc8181;
  }

  .xl\:placeholder-red-500::placeholder {
    color: #f56565;
  }

  .xl\:placeholder-red-600::placeholder {
    color: #e53e3e;
  }

  .xl\:placeholder-red-700::placeholder {
    color: #c53030;
  }

  .xl\:placeholder-red-800::placeholder {
    color: #9b2c2c;
  }

  .xl\:placeholder-red-900::placeholder {
    color: #742a2a;
  }

  .xl\:placeholder-orange-100::placeholder {
    color: #fffaf0;
  }

  .xl\:placeholder-orange-200::placeholder {
    color: #feebc8;
  }

  .xl\:placeholder-orange-300::placeholder {
    color: #fbd38d;
  }

  .xl\:placeholder-orange-400::placeholder {
    color: #f6ad55;
  }

  .xl\:placeholder-orange-500::placeholder {
    color: #ed8936;
  }

  .xl\:placeholder-orange-600::placeholder {
    color: #dd6b20;
  }

  .xl\:placeholder-orange-700::placeholder {
    color: #c05621;
  }

  .xl\:placeholder-orange-800::placeholder {
    color: #9c4221;
  }

  .xl\:placeholder-orange-900::placeholder {
    color: #7b341e;
  }

  .xl\:placeholder-yellow-100::placeholder {
    color: #fffff0;
  }

  .xl\:placeholder-yellow-200::placeholder {
    color: #fefcbf;
  }

  .xl\:placeholder-yellow-300::placeholder {
    color: #faf089;
  }

  .xl\:placeholder-yellow-400::placeholder {
    color: #f6e05e;
  }

  .xl\:placeholder-yellow-500::placeholder {
    color: #ecc94b;
  }

  .xl\:placeholder-yellow-600::placeholder {
    color: #d69e2e;
  }

  .xl\:placeholder-yellow-700::placeholder {
    color: #b7791f;
  }

  .xl\:placeholder-yellow-800::placeholder {
    color: #975a16;
  }

  .xl\:placeholder-yellow-900::placeholder {
    color: #744210;
  }

  .xl\:placeholder-green-100::placeholder {
    color: #f0fff4;
  }

  .xl\:placeholder-green-200::placeholder {
    color: #c6f6d5;
  }

  .xl\:placeholder-green-300::placeholder {
    color: #9ae6b4;
  }

  .xl\:placeholder-green-400::placeholder {
    color: #68d391;
  }

  .xl\:placeholder-green-500::placeholder {
    color: #48bb78;
  }

  .xl\:placeholder-green-600::placeholder {
    color: #38a169;
  }

  .xl\:placeholder-green-700::placeholder {
    color: #2f855a;
  }

  .xl\:placeholder-green-800::placeholder {
    color: #276749;
  }

  .xl\:placeholder-green-900::placeholder {
    color: #22543d;
  }

  .xl\:placeholder-teal-100::placeholder {
    color: #e6fffa;
  }

  .xl\:placeholder-teal-200::placeholder {
    color: #b2f5ea;
  }

  .xl\:placeholder-teal-300::placeholder {
    color: #81e6d9;
  }

  .xl\:placeholder-teal-400::placeholder {
    color: #4fd1c5;
  }

  .xl\:placeholder-teal-500::placeholder {
    color: #38b2ac;
  }

  .xl\:placeholder-teal-600::placeholder {
    color: #319795;
  }

  .xl\:placeholder-teal-700::placeholder {
    color: #2c7a7b;
  }

  .xl\:placeholder-teal-800::placeholder {
    color: #285e61;
  }

  .xl\:placeholder-teal-900::placeholder {
    color: #234e52;
  }

  .xl\:placeholder-blue-100::placeholder {
    color: #ebf8ff;
  }

  .xl\:placeholder-blue-200::placeholder {
    color: #bee3f8;
  }

  .xl\:placeholder-blue-300::placeholder {
    color: #90cdf4;
  }

  .xl\:placeholder-blue-400::placeholder {
    color: #63b3ed;
  }

  .xl\:placeholder-blue-500::placeholder {
    color: #4299e1;
  }

  .xl\:placeholder-blue-600::placeholder {
    color: #3182ce;
  }

  .xl\:placeholder-blue-700::placeholder {
    color: #2b6cb0;
  }

  .xl\:placeholder-blue-800::placeholder {
    color: #2c5282;
  }

  .xl\:placeholder-blue-900::placeholder {
    color: #2a4365;
  }

  .xl\:placeholder-indigo-100::placeholder {
    color: #ebf4ff;
  }

  .xl\:placeholder-indigo-200::placeholder {
    color: #c3dafe;
  }

  .xl\:placeholder-indigo-300::placeholder {
    color: #a3bffa;
  }

  .xl\:placeholder-indigo-400::placeholder {
    color: #7f9cf5;
  }

  .xl\:placeholder-indigo-500::placeholder {
    color: #667eea;
  }

  .xl\:placeholder-indigo-600::placeholder {
    color: #5a67d8;
  }

  .xl\:placeholder-indigo-700::placeholder {
    color: #4c51bf;
  }

  .xl\:placeholder-indigo-800::placeholder {
    color: #434190;
  }

  .xl\:placeholder-indigo-900::placeholder {
    color: #3c366b;
  }

  .xl\:placeholder-purple-100::placeholder {
    color: #faf5ff;
  }

  .xl\:placeholder-purple-200::placeholder {
    color: #e9d8fd;
  }

  .xl\:placeholder-purple-300::placeholder {
    color: #d6bcfa;
  }

  .xl\:placeholder-purple-400::placeholder {
    color: #b794f4;
  }

  .xl\:placeholder-purple-500::placeholder {
    color: #9f7aea;
  }

  .xl\:placeholder-purple-600::placeholder {
    color: #805ad5;
  }

  .xl\:placeholder-purple-700::placeholder {
    color: #6b46c1;
  }

  .xl\:placeholder-purple-800::placeholder {
    color: #553c9a;
  }

  .xl\:placeholder-purple-900::placeholder {
    color: #44337a;
  }

  .xl\:placeholder-pink-100::placeholder {
    color: #fff5f7;
  }

  .xl\:placeholder-pink-200::placeholder {
    color: #fed7e2;
  }

  .xl\:placeholder-pink-300::placeholder {
    color: #fbb6ce;
  }

  .xl\:placeholder-pink-400::placeholder {
    color: #f687b3;
  }

  .xl\:placeholder-pink-500::placeholder {
    color: #ed64a6;
  }

  .xl\:placeholder-pink-600::placeholder {
    color: #d53f8c;
  }

  .xl\:placeholder-pink-700::placeholder {
    color: #b83280;
  }

  .xl\:placeholder-pink-800::placeholder {
    color: #97266d;
  }

  .xl\:placeholder-pink-900::placeholder {
    color: #702459;
  }

  .xl\:focus\:placeholder-grey-darkest:focus::placeholder {
    color: #3d4852;
  }

  .xl\:focus\:placeholder-grey-darker:focus::placeholder {
    color: #606f7b;
  }

  .xl\:focus\:placeholder-grey-dark:focus::placeholder {
    color: #8795a1;
  }

  .xl\:focus\:placeholder-grey:focus::placeholder {
    color: #b8c2cc;
  }

  .xl\:focus\:placeholder-grey-light:focus::placeholder {
    color: #dae1e7;
  }

  .xl\:focus\:placeholder-grey-lighter:focus::placeholder {
    color: #f1f5f8;
  }

  .xl\:focus\:placeholder-grey-lightest:focus::placeholder {
    color: #f8fafc;
  }

  .xl\:focus\:placeholder-grey-mid-light:focus::placeholder {
    color: #f3f3f4;
  }

  .xl\:focus\:placeholder-white-lightest:focus::placeholder {
    color: #f4f4f4;
  }

  .xl\:focus\:placeholder-red-darkest:focus::placeholder {
    color: #3b0d0c;
  }

  .xl\:focus\:placeholder-red-darker:focus::placeholder {
    color: #621b18;
  }

  .xl\:focus\:placeholder-red-dark:focus::placeholder {
    color: #cc1f1a;
  }

  .xl\:focus\:placeholder-red-light:focus::placeholder {
    color: #ef5753;
  }

  .xl\:focus\:placeholder-red-lighter:focus::placeholder {
    color: #f9acaa;
  }

  .xl\:focus\:placeholder-red-lightest:focus::placeholder {
    color: #fcebea;
  }

  .xl\:focus\:placeholder-orange-darkest:focus::placeholder {
    color: #462a16;
  }

  .xl\:focus\:placeholder-orange-darker:focus::placeholder {
    color: #613b1f;
  }

  .xl\:focus\:placeholder-orange-dark:focus::placeholder {
    color: #de751f;
  }

  .xl\:focus\:placeholder-orange-light:focus::placeholder {
    color: #faad63;
  }

  .xl\:focus\:placeholder-orange-lighter:focus::placeholder {
    color: #fcd9b6;
  }

  .xl\:focus\:placeholder-orange-lightest:focus::placeholder {
    color: #fff5eb;
  }

  .xl\:focus\:placeholder-yellow-darkest:focus::placeholder {
    color: #453411;
  }

  .xl\:focus\:placeholder-yellow-darker:focus::placeholder {
    color: #684f1d;
  }

  .xl\:focus\:placeholder-yellow-dark:focus::placeholder {
    color: #f2d024;
  }

  .xl\:focus\:placeholder-yellow-light:focus::placeholder {
    color: #fff382;
  }

  .xl\:focus\:placeholder-yellow-lighter:focus::placeholder {
    color: #fff9c2;
  }

  .xl\:focus\:placeholder-yellow-lightest:focus::placeholder {
    color: #fcfbeb;
  }

  .xl\:focus\:placeholder-green-darkest:focus::placeholder {
    color: #0f2f21;
  }

  .xl\:focus\:placeholder-green-darker:focus::placeholder {
    color: #1a4731;
  }

  .xl\:focus\:placeholder-green-dark:focus::placeholder {
    color: #1f9d55;
  }

  .xl\:focus\:placeholder-green-light:focus::placeholder {
    color: #51d88a;
  }

  .xl\:focus\:placeholder-green-lighter:focus::placeholder {
    color: #a2f5bf;
  }

  .xl\:focus\:placeholder-green-lightest:focus::placeholder {
    color: #e3fcec;
  }

  .xl\:focus\:placeholder-teal-darkest:focus::placeholder {
    color: #0d3331;
  }

  .xl\:focus\:placeholder-teal-darker:focus::placeholder {
    color: #20504f;
  }

  .xl\:focus\:placeholder-teal-dark:focus::placeholder {
    color: #38a89d;
  }

  .xl\:focus\:placeholder-teal-light:focus::placeholder {
    color: #64d5ca;
  }

  .xl\:focus\:placeholder-teal-lighter:focus::placeholder {
    color: #a0f0ed;
  }

  .xl\:focus\:placeholder-teal-lightest:focus::placeholder {
    color: #e8fffe;
  }

  .xl\:focus\:placeholder-blue-darkest:focus::placeholder {
    color: #12283a;
  }

  .xl\:focus\:placeholder-blue-darker:focus::placeholder {
    color: #1c3d5a;
  }

  .xl\:focus\:placeholder-blue-dark:focus::placeholder {
    color: #2779bd;
  }

  .xl\:focus\:placeholder-blue-light:focus::placeholder {
    color: #6cb2eb;
  }

  .xl\:focus\:placeholder-blue-lighter:focus::placeholder {
    color: #bcdefa;
  }

  .xl\:focus\:placeholder-blue-lightest:focus::placeholder {
    color: #eff8ff;
  }

  .xl\:focus\:placeholder-indigo-darkest:focus::placeholder {
    color: #191e38;
  }

  .xl\:focus\:placeholder-indigo-darker:focus::placeholder {
    color: #2f365f;
  }

  .xl\:focus\:placeholder-indigo-dark:focus::placeholder {
    color: #5661b3;
  }

  .xl\:focus\:placeholder-indigo-light:focus::placeholder {
    color: #7886d7;
  }

  .xl\:focus\:placeholder-indigo-lighter:focus::placeholder {
    color: #b2b7ff;
  }

  .xl\:focus\:placeholder-indigo-lightest:focus::placeholder {
    color: #e6e8ff;
  }

  .xl\:focus\:placeholder-purple-darkest:focus::placeholder {
    color: #21183c;
  }

  .xl\:focus\:placeholder-purple-darker:focus::placeholder {
    color: #382b5f;
  }

  .xl\:focus\:placeholder-purple-dark:focus::placeholder {
    color: #794acf;
  }

  .xl\:focus\:placeholder-purple-light:focus::placeholder {
    color: #a779e9;
  }

  .xl\:focus\:placeholder-purple-lighter:focus::placeholder {
    color: #d6bbfc;
  }

  .xl\:focus\:placeholder-purple-lightest:focus::placeholder {
    color: #f3ebff;
  }

  .xl\:focus\:placeholder-pink-darkest:focus::placeholder {
    color: #451225;
  }

  .xl\:focus\:placeholder-pink-darker:focus::placeholder {
    color: #6f213f;
  }

  .xl\:focus\:placeholder-pink-dark:focus::placeholder {
    color: #eb5286;
  }

  .xl\:focus\:placeholder-pink-light:focus::placeholder {
    color: #fa7ea8;
  }

  .xl\:focus\:placeholder-pink-lighter:focus::placeholder {
    color: #ffbbca;
  }

  .xl\:focus\:placeholder-pink-lightest:focus::placeholder {
    color: #ffebef;
  }

  .xl\:focus\:placeholder-nav:focus::placeholder {
    color: #3F495E;
  }

  .xl\:focus\:placeholder-side-nav:focus::placeholder {
    color: #ECF0F1;
  }

  .xl\:focus\:placeholder-nav-item:focus::placeholder {
    color: #626b7a;
  }

  .xl\:focus\:placeholder-light-border:focus::placeholder {
    color: #dfe4e6;
  }

  .xl\:focus\:placeholder-white-medium:focus::placeholder {
    color: #FAFAFA;
  }

  .xl\:focus\:placeholder-white-medium-dark:focus::placeholder {
    color: #E5E9EB;
  }

  .xl\:focus\:placeholder-red-vibrant:focus::placeholder {
    color: #e46050;
  }

  .xl\:focus\:placeholder-red-vibrant-dark:focus::placeholder {
    color: #d64230;
  }

  .xl\:focus\:placeholder-primary:focus::placeholder {
    color: #51BE99;
  }

  .xl\:focus\:placeholder-primary-dark:focus::placeholder {
    color: #0e5f43;
  }

  .xl\:focus\:placeholder-warning:focus::placeholder {
    color: #f4ab43;
  }

  .xl\:focus\:placeholder-warning-dark:focus::placeholder {
    color: #c37c16;
  }

  .xl\:focus\:placeholder-black-dark:focus::placeholder {
    color: #272634;
  }

  .xl\:focus\:placeholder-black-darkest:focus::placeholder {
    color: #141418;
  }

  .xl\:focus\:placeholder-info:focus::placeholder {
    color: #52bcdc;
  }

  .xl\:focus\:placeholder-info-dark:focus::placeholder {
    color: #2cadd4;
  }

  .xl\:focus\:placeholder-success:focus::placeholder {
    color: #72b159;
  }

  .xl\:focus\:placeholder-success-dark:focus::placeholder {
    color: #5D9547;
  }

  .xl\:focus\:placeholder-transparent:focus::placeholder {
    color: transparent;
  }

  .xl\:focus\:placeholder-black:focus::placeholder {
    color: #000;
  }

  .xl\:focus\:placeholder-white:focus::placeholder {
    color: #fff;
  }

  .xl\:focus\:placeholder-gray-100:focus::placeholder {
    color: #f7fafc;
  }

  .xl\:focus\:placeholder-gray-200:focus::placeholder {
    color: #edf2f7;
  }

  .xl\:focus\:placeholder-gray-300:focus::placeholder {
    color: #e2e8f0;
  }

  .xl\:focus\:placeholder-gray-400:focus::placeholder {
    color: #cbd5e0;
  }

  .xl\:focus\:placeholder-gray-500:focus::placeholder {
    color: #a0aec0;
  }

  .xl\:focus\:placeholder-gray-600:focus::placeholder {
    color: #718096;
  }

  .xl\:focus\:placeholder-gray-700:focus::placeholder {
    color: #4a5568;
  }

  .xl\:focus\:placeholder-gray-800:focus::placeholder {
    color: #2d3748;
  }

  .xl\:focus\:placeholder-gray-900:focus::placeholder {
    color: #1a202c;
  }

  .xl\:focus\:placeholder-red-100:focus::placeholder {
    color: #fff5f5;
  }

  .xl\:focus\:placeholder-red-200:focus::placeholder {
    color: #fed7d7;
  }

  .xl\:focus\:placeholder-red-300:focus::placeholder {
    color: #feb2b2;
  }

  .xl\:focus\:placeholder-red-400:focus::placeholder {
    color: #fc8181;
  }

  .xl\:focus\:placeholder-red-500:focus::placeholder {
    color: #f56565;
  }

  .xl\:focus\:placeholder-red-600:focus::placeholder {
    color: #e53e3e;
  }

  .xl\:focus\:placeholder-red-700:focus::placeholder {
    color: #c53030;
  }

  .xl\:focus\:placeholder-red-800:focus::placeholder {
    color: #9b2c2c;
  }

  .xl\:focus\:placeholder-red-900:focus::placeholder {
    color: #742a2a;
  }

  .xl\:focus\:placeholder-orange-100:focus::placeholder {
    color: #fffaf0;
  }

  .xl\:focus\:placeholder-orange-200:focus::placeholder {
    color: #feebc8;
  }

  .xl\:focus\:placeholder-orange-300:focus::placeholder {
    color: #fbd38d;
  }

  .xl\:focus\:placeholder-orange-400:focus::placeholder {
    color: #f6ad55;
  }

  .xl\:focus\:placeholder-orange-500:focus::placeholder {
    color: #ed8936;
  }

  .xl\:focus\:placeholder-orange-600:focus::placeholder {
    color: #dd6b20;
  }

  .xl\:focus\:placeholder-orange-700:focus::placeholder {
    color: #c05621;
  }

  .xl\:focus\:placeholder-orange-800:focus::placeholder {
    color: #9c4221;
  }

  .xl\:focus\:placeholder-orange-900:focus::placeholder {
    color: #7b341e;
  }

  .xl\:focus\:placeholder-yellow-100:focus::placeholder {
    color: #fffff0;
  }

  .xl\:focus\:placeholder-yellow-200:focus::placeholder {
    color: #fefcbf;
  }

  .xl\:focus\:placeholder-yellow-300:focus::placeholder {
    color: #faf089;
  }

  .xl\:focus\:placeholder-yellow-400:focus::placeholder {
    color: #f6e05e;
  }

  .xl\:focus\:placeholder-yellow-500:focus::placeholder {
    color: #ecc94b;
  }

  .xl\:focus\:placeholder-yellow-600:focus::placeholder {
    color: #d69e2e;
  }

  .xl\:focus\:placeholder-yellow-700:focus::placeholder {
    color: #b7791f;
  }

  .xl\:focus\:placeholder-yellow-800:focus::placeholder {
    color: #975a16;
  }

  .xl\:focus\:placeholder-yellow-900:focus::placeholder {
    color: #744210;
  }

  .xl\:focus\:placeholder-green-100:focus::placeholder {
    color: #f0fff4;
  }

  .xl\:focus\:placeholder-green-200:focus::placeholder {
    color: #c6f6d5;
  }

  .xl\:focus\:placeholder-green-300:focus::placeholder {
    color: #9ae6b4;
  }

  .xl\:focus\:placeholder-green-400:focus::placeholder {
    color: #68d391;
  }

  .xl\:focus\:placeholder-green-500:focus::placeholder {
    color: #48bb78;
  }

  .xl\:focus\:placeholder-green-600:focus::placeholder {
    color: #38a169;
  }

  .xl\:focus\:placeholder-green-700:focus::placeholder {
    color: #2f855a;
  }

  .xl\:focus\:placeholder-green-800:focus::placeholder {
    color: #276749;
  }

  .xl\:focus\:placeholder-green-900:focus::placeholder {
    color: #22543d;
  }

  .xl\:focus\:placeholder-teal-100:focus::placeholder {
    color: #e6fffa;
  }

  .xl\:focus\:placeholder-teal-200:focus::placeholder {
    color: #b2f5ea;
  }

  .xl\:focus\:placeholder-teal-300:focus::placeholder {
    color: #81e6d9;
  }

  .xl\:focus\:placeholder-teal-400:focus::placeholder {
    color: #4fd1c5;
  }

  .xl\:focus\:placeholder-teal-500:focus::placeholder {
    color: #38b2ac;
  }

  .xl\:focus\:placeholder-teal-600:focus::placeholder {
    color: #319795;
  }

  .xl\:focus\:placeholder-teal-700:focus::placeholder {
    color: #2c7a7b;
  }

  .xl\:focus\:placeholder-teal-800:focus::placeholder {
    color: #285e61;
  }

  .xl\:focus\:placeholder-teal-900:focus::placeholder {
    color: #234e52;
  }

  .xl\:focus\:placeholder-blue-100:focus::placeholder {
    color: #ebf8ff;
  }

  .xl\:focus\:placeholder-blue-200:focus::placeholder {
    color: #bee3f8;
  }

  .xl\:focus\:placeholder-blue-300:focus::placeholder {
    color: #90cdf4;
  }

  .xl\:focus\:placeholder-blue-400:focus::placeholder {
    color: #63b3ed;
  }

  .xl\:focus\:placeholder-blue-500:focus::placeholder {
    color: #4299e1;
  }

  .xl\:focus\:placeholder-blue-600:focus::placeholder {
    color: #3182ce;
  }

  .xl\:focus\:placeholder-blue-700:focus::placeholder {
    color: #2b6cb0;
  }

  .xl\:focus\:placeholder-blue-800:focus::placeholder {
    color: #2c5282;
  }

  .xl\:focus\:placeholder-blue-900:focus::placeholder {
    color: #2a4365;
  }

  .xl\:focus\:placeholder-indigo-100:focus::placeholder {
    color: #ebf4ff;
  }

  .xl\:focus\:placeholder-indigo-200:focus::placeholder {
    color: #c3dafe;
  }

  .xl\:focus\:placeholder-indigo-300:focus::placeholder {
    color: #a3bffa;
  }

  .xl\:focus\:placeholder-indigo-400:focus::placeholder {
    color: #7f9cf5;
  }

  .xl\:focus\:placeholder-indigo-500:focus::placeholder {
    color: #667eea;
  }

  .xl\:focus\:placeholder-indigo-600:focus::placeholder {
    color: #5a67d8;
  }

  .xl\:focus\:placeholder-indigo-700:focus::placeholder {
    color: #4c51bf;
  }

  .xl\:focus\:placeholder-indigo-800:focus::placeholder {
    color: #434190;
  }

  .xl\:focus\:placeholder-indigo-900:focus::placeholder {
    color: #3c366b;
  }

  .xl\:focus\:placeholder-purple-100:focus::placeholder {
    color: #faf5ff;
  }

  .xl\:focus\:placeholder-purple-200:focus::placeholder {
    color: #e9d8fd;
  }

  .xl\:focus\:placeholder-purple-300:focus::placeholder {
    color: #d6bcfa;
  }

  .xl\:focus\:placeholder-purple-400:focus::placeholder {
    color: #b794f4;
  }

  .xl\:focus\:placeholder-purple-500:focus::placeholder {
    color: #9f7aea;
  }

  .xl\:focus\:placeholder-purple-600:focus::placeholder {
    color: #805ad5;
  }

  .xl\:focus\:placeholder-purple-700:focus::placeholder {
    color: #6b46c1;
  }

  .xl\:focus\:placeholder-purple-800:focus::placeholder {
    color: #553c9a;
  }

  .xl\:focus\:placeholder-purple-900:focus::placeholder {
    color: #44337a;
  }

  .xl\:focus\:placeholder-pink-100:focus::placeholder {
    color: #fff5f7;
  }

  .xl\:focus\:placeholder-pink-200:focus::placeholder {
    color: #fed7e2;
  }

  .xl\:focus\:placeholder-pink-300:focus::placeholder {
    color: #fbb6ce;
  }

  .xl\:focus\:placeholder-pink-400:focus::placeholder {
    color: #f687b3;
  }

  .xl\:focus\:placeholder-pink-500:focus::placeholder {
    color: #ed64a6;
  }

  .xl\:focus\:placeholder-pink-600:focus::placeholder {
    color: #d53f8c;
  }

  .xl\:focus\:placeholder-pink-700:focus::placeholder {
    color: #b83280;
  }

  .xl\:focus\:placeholder-pink-800:focus::placeholder {
    color: #97266d;
  }

  .xl\:focus\:placeholder-pink-900:focus::placeholder {
    color: #702459;
  }

  .xl\:pointer-events-none {
    pointer-events: none;
  }

  .xl\:pointer-events-auto {
    pointer-events: auto;
  }

  .xl\:static {
    position: static;
  }

  .xl\:fixed {
    position: fixed;
  }

  .xl\:absolute {
    position: absolute;
  }

  .xl\:relative {
    position: relative;
  }

  .xl\:sticky {
    position: sticky;
  }

  .xl\:inset-0 {
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
  }

  .xl\:inset-auto {
    top: auto;
    right: auto;
    bottom: auto;
    left: auto;
  }

  .xl\:inset-y-0 {
    top: 0;
    bottom: 0;
  }

  .xl\:inset-x-0 {
    right: 0;
    left: 0;
  }

  .xl\:inset-y-auto {
    top: auto;
    bottom: auto;
  }

  .xl\:inset-x-auto {
    right: auto;
    left: auto;
  }

  .xl\:top-0 {
    top: 0;
  }

  .xl\:right-0 {
    right: 0;
  }

  .xl\:bottom-0 {
    bottom: 0;
  }

  .xl\:left-0 {
    left: 0;
  }

  .xl\:top-auto {
    top: auto;
  }

  .xl\:right-auto {
    right: auto;
  }

  .xl\:bottom-auto {
    bottom: auto;
  }

  .xl\:left-auto {
    left: auto;
  }

  .xl\:resize-none {
    resize: none;
  }

  .xl\:resize-y {
    resize: vertical;
  }

  .xl\:resize-x {
    resize: horizontal;
  }

  .xl\:resize {
    resize: both;
  }

  .xl\:shadow {
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
  }

  .xl\:shadow-md {
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
  }

  .xl\:shadow-lg {
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
  }

  .xl\:shadow-xl {
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
  }

  .xl\:shadow-2xl {
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
  }

  .xl\:shadow-inner {
    box-shadow: inset 0 2px 4px 0 rgba(0, 0, 0, 0.06);
  }

  .xl\:shadow-outline {
    box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.5);
  }

  .xl\:shadow-none {
    box-shadow: none;
  }

  .xl\:hover\:shadow:hover {
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
  }

  .xl\:hover\:shadow-md:hover {
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
  }

  .xl\:hover\:shadow-lg:hover {
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
  }

  .xl\:hover\:shadow-xl:hover {
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
  }

  .xl\:hover\:shadow-2xl:hover {
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
  }

  .xl\:hover\:shadow-inner:hover {
    box-shadow: inset 0 2px 4px 0 rgba(0, 0, 0, 0.06);
  }

  .xl\:hover\:shadow-outline:hover {
    box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.5);
  }

  .xl\:hover\:shadow-none:hover {
    box-shadow: none;
  }

  .xl\:focus\:shadow:focus {
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
  }

  .xl\:focus\:shadow-md:focus {
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
  }

  .xl\:focus\:shadow-lg:focus {
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
  }

  .xl\:focus\:shadow-xl:focus {
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
  }

  .xl\:focus\:shadow-2xl:focus {
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
  }

  .xl\:focus\:shadow-inner:focus {
    box-shadow: inset 0 2px 4px 0 rgba(0, 0, 0, 0.06);
  }

  .xl\:focus\:shadow-outline:focus {
    box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.5);
  }

  .xl\:focus\:shadow-none:focus {
    box-shadow: none;
  }

  .xl\:fill-current {
    fill: currentColor;
  }

  .xl\:stroke-current {
    stroke: currentColor;
  }

  .xl\:table-auto {
    table-layout: auto;
  }

  .xl\:table-fixed {
    table-layout: fixed;
  }

  .xl\:text-left {
    text-align: left;
  }

  .xl\:text-center {
    text-align: center;
  }

  .xl\:text-right {
    text-align: right;
  }

  .xl\:text-justify {
    text-align: justify;
  }

  .xl\:text-grey-darkest {
    color: #3d4852;
  }

  .xl\:text-grey-darker {
    color: #606f7b;
  }

  .xl\:text-grey-dark {
    color: #8795a1;
  }

  .xl\:text-grey {
    color: #b8c2cc;
  }

  .xl\:text-grey-light {
    color: #dae1e7;
  }

  .xl\:text-grey-lighter {
    color: #f1f5f8;
  }

  .xl\:text-grey-lightest {
    color: #f8fafc;
  }

  .xl\:text-grey-mid-light {
    color: #f3f3f4;
  }

  .xl\:text-white-lightest {
    color: #f4f4f4;
  }

  .xl\:text-red-darkest {
    color: #3b0d0c;
  }

  .xl\:text-red-darker {
    color: #621b18;
  }

  .xl\:text-red-dark {
    color: #cc1f1a;
  }

  .xl\:text-red-light {
    color: #ef5753;
  }

  .xl\:text-red-lighter {
    color: #f9acaa;
  }

  .xl\:text-red-lightest {
    color: #fcebea;
  }

  .xl\:text-orange-darkest {
    color: #462a16;
  }

  .xl\:text-orange-darker {
    color: #613b1f;
  }

  .xl\:text-orange-dark {
    color: #de751f;
  }

  .xl\:text-orange-light {
    color: #faad63;
  }

  .xl\:text-orange-lighter {
    color: #fcd9b6;
  }

  .xl\:text-orange-lightest {
    color: #fff5eb;
  }

  .xl\:text-yellow-darkest {
    color: #453411;
  }

  .xl\:text-yellow-darker {
    color: #684f1d;
  }

  .xl\:text-yellow-dark {
    color: #f2d024;
  }

  .xl\:text-yellow-light {
    color: #fff382;
  }

  .xl\:text-yellow-lighter {
    color: #fff9c2;
  }

  .xl\:text-yellow-lightest {
    color: #fcfbeb;
  }

  .xl\:text-green-darkest {
    color: #0f2f21;
  }

  .xl\:text-green-darker {
    color: #1a4731;
  }

  .xl\:text-green-dark {
    color: #1f9d55;
  }

  .xl\:text-green-light {
    color: #51d88a;
  }

  .xl\:text-green-lighter {
    color: #a2f5bf;
  }

  .xl\:text-green-lightest {
    color: #e3fcec;
  }

  .xl\:text-teal-darkest {
    color: #0d3331;
  }

  .xl\:text-teal-darker {
    color: #20504f;
  }

  .xl\:text-teal-dark {
    color: #38a89d;
  }

  .xl\:text-teal-light {
    color: #64d5ca;
  }

  .xl\:text-teal-lighter {
    color: #a0f0ed;
  }

  .xl\:text-teal-lightest {
    color: #e8fffe;
  }

  .xl\:text-blue-darkest {
    color: #12283a;
  }

  .xl\:text-blue-darker {
    color: #1c3d5a;
  }

  .xl\:text-blue-dark {
    color: #2779bd;
  }

  .xl\:text-blue-light {
    color: #6cb2eb;
  }

  .xl\:text-blue-lighter {
    color: #bcdefa;
  }

  .xl\:text-blue-lightest {
    color: #eff8ff;
  }

  .xl\:text-indigo-darkest {
    color: #191e38;
  }

  .xl\:text-indigo-darker {
    color: #2f365f;
  }

  .xl\:text-indigo-dark {
    color: #5661b3;
  }

  .xl\:text-indigo-light {
    color: #7886d7;
  }

  .xl\:text-indigo-lighter {
    color: #b2b7ff;
  }

  .xl\:text-indigo-lightest {
    color: #e6e8ff;
  }

  .xl\:text-purple-darkest {
    color: #21183c;
  }

  .xl\:text-purple-darker {
    color: #382b5f;
  }

  .xl\:text-purple-dark {
    color: #794acf;
  }

  .xl\:text-purple-light {
    color: #a779e9;
  }

  .xl\:text-purple-lighter {
    color: #d6bbfc;
  }

  .xl\:text-purple-lightest {
    color: #f3ebff;
  }

  .xl\:text-pink-darkest {
    color: #451225;
  }

  .xl\:text-pink-darker {
    color: #6f213f;
  }

  .xl\:text-pink-dark {
    color: #eb5286;
  }

  .xl\:text-pink-light {
    color: #fa7ea8;
  }

  .xl\:text-pink-lighter {
    color: #ffbbca;
  }

  .xl\:text-pink-lightest {
    color: #ffebef;
  }

  .xl\:text-nav {
    color: #3F495E;
  }

  .xl\:text-side-nav {
    color: #ECF0F1;
  }

  .xl\:text-nav-item {
    color: #626b7a;
  }

  .xl\:text-light-border {
    color: #dfe4e6;
  }

  .xl\:text-white-medium {
    color: #FAFAFA;
  }

  .xl\:text-white-medium-dark {
    color: #E5E9EB;
  }

  .xl\:text-red-vibrant {
    color: #e46050;
  }

  .xl\:text-red-vibrant-dark {
    color: #d64230;
  }

  .xl\:text-primary {
    color: #51BE99;
  }

  .xl\:text-primary-dark {
    color: #0e5f43;
  }

  .xl\:text-warning {
    color: #f4ab43;
  }

  .xl\:text-warning-dark {
    color: #c37c16;
  }

  .xl\:text-black-dark {
    color: #272634;
  }

  .xl\:text-black-darkest {
    color: #141418;
  }

  .xl\:text-info {
    color: #52bcdc;
  }

  .xl\:text-info-dark {
    color: #2cadd4;
  }

  .xl\:text-success {
    color: #72b159;
  }

  .xl\:text-success-dark {
    color: #5D9547;
  }

  .xl\:text-transparent {
    color: transparent;
  }

  .xl\:text-black {
    color: #000;
  }

  .xl\:text-white {
    color: #fff;
  }

  .xl\:text-gray-100 {
    color: #f7fafc;
  }

  .xl\:text-gray-200 {
    color: #edf2f7;
  }

  .xl\:text-gray-300 {
    color: #e2e8f0;
  }

  .xl\:text-gray-400 {
    color: #cbd5e0;
  }

  .xl\:text-gray-500 {
    color: #a0aec0;
  }

  .xl\:text-gray-600 {
    color: #718096;
  }

  .xl\:text-gray-700 {
    color: #4a5568;
  }

  .xl\:text-gray-800 {
    color: #2d3748;
  }

  .xl\:text-gray-900 {
    color: #1a202c;
  }

  .xl\:text-red-100 {
    color: #fff5f5;
  }

  .xl\:text-red-200 {
    color: #fed7d7;
  }

  .xl\:text-red-300 {
    color: #feb2b2;
  }

  .xl\:text-red-400 {
    color: #fc8181;
  }

  .xl\:text-red-500 {
    color: #f56565;
  }

  .xl\:text-red-600 {
    color: #e53e3e;
  }

  .xl\:text-red-700 {
    color: #c53030;
  }

  .xl\:text-red-800 {
    color: #9b2c2c;
  }

  .xl\:text-red-900 {
    color: #742a2a;
  }

  .xl\:text-orange-100 {
    color: #fffaf0;
  }

  .xl\:text-orange-200 {
    color: #feebc8;
  }

  .xl\:text-orange-300 {
    color: #fbd38d;
  }

  .xl\:text-orange-400 {
    color: #f6ad55;
  }

  .xl\:text-orange-500 {
    color: #ed8936;
  }

  .xl\:text-orange-600 {
    color: #dd6b20;
  }

  .xl\:text-orange-700 {
    color: #c05621;
  }

  .xl\:text-orange-800 {
    color: #9c4221;
  }

  .xl\:text-orange-900 {
    color: #7b341e;
  }

  .xl\:text-yellow-100 {
    color: #fffff0;
  }

  .xl\:text-yellow-200 {
    color: #fefcbf;
  }

  .xl\:text-yellow-300 {
    color: #faf089;
  }

  .xl\:text-yellow-400 {
    color: #f6e05e;
  }

  .xl\:text-yellow-500 {
    color: #ecc94b;
  }

  .xl\:text-yellow-600 {
    color: #d69e2e;
  }

  .xl\:text-yellow-700 {
    color: #b7791f;
  }

  .xl\:text-yellow-800 {
    color: #975a16;
  }

  .xl\:text-yellow-900 {
    color: #744210;
  }

  .xl\:text-green-100 {
    color: #f0fff4;
  }

  .xl\:text-green-200 {
    color: #c6f6d5;
  }

  .xl\:text-green-300 {
    color: #9ae6b4;
  }

  .xl\:text-green-400 {
    color: #68d391;
  }

  .xl\:text-green-500 {
    color: #48bb78;
  }

  .xl\:text-green-600 {
    color: #38a169;
  }

  .xl\:text-green-700 {
    color: #2f855a;
  }

  .xl\:text-green-800 {
    color: #276749;
  }

  .xl\:text-green-900 {
    color: #22543d;
  }

  .xl\:text-teal-100 {
    color: #e6fffa;
  }

  .xl\:text-teal-200 {
    color: #b2f5ea;
  }

  .xl\:text-teal-300 {
    color: #81e6d9;
  }

  .xl\:text-teal-400 {
    color: #4fd1c5;
  }

  .xl\:text-teal-500 {
    color: #38b2ac;
  }

  .xl\:text-teal-600 {
    color: #319795;
  }

  .xl\:text-teal-700 {
    color: #2c7a7b;
  }

  .xl\:text-teal-800 {
    color: #285e61;
  }

  .xl\:text-teal-900 {
    color: #234e52;
  }

  .xl\:text-blue-100 {
    color: #ebf8ff;
  }

  .xl\:text-blue-200 {
    color: #bee3f8;
  }

  .xl\:text-blue-300 {
    color: #90cdf4;
  }

  .xl\:text-blue-400 {
    color: #63b3ed;
  }

  .xl\:text-blue-500 {
    color: #4299e1;
  }

  .xl\:text-blue-600 {
    color: #3182ce;
  }

  .xl\:text-blue-700 {
    color: #2b6cb0;
  }

  .xl\:text-blue-800 {
    color: #2c5282;
  }

  .xl\:text-blue-900 {
    color: #2a4365;
  }

  .xl\:text-indigo-100 {
    color: #ebf4ff;
  }

  .xl\:text-indigo-200 {
    color: #c3dafe;
  }

  .xl\:text-indigo-300 {
    color: #a3bffa;
  }

  .xl\:text-indigo-400 {
    color: #7f9cf5;
  }

  .xl\:text-indigo-500 {
    color: #667eea;
  }

  .xl\:text-indigo-600 {
    color: #5a67d8;
  }

  .xl\:text-indigo-700 {
    color: #4c51bf;
  }

  .xl\:text-indigo-800 {
    color: #434190;
  }

  .xl\:text-indigo-900 {
    color: #3c366b;
  }

  .xl\:text-purple-100 {
    color: #faf5ff;
  }

  .xl\:text-purple-200 {
    color: #e9d8fd;
  }

  .xl\:text-purple-300 {
    color: #d6bcfa;
  }

  .xl\:text-purple-400 {
    color: #b794f4;
  }

  .xl\:text-purple-500 {
    color: #9f7aea;
  }

  .xl\:text-purple-600 {
    color: #805ad5;
  }

  .xl\:text-purple-700 {
    color: #6b46c1;
  }

  .xl\:text-purple-800 {
    color: #553c9a;
  }

  .xl\:text-purple-900 {
    color: #44337a;
  }

  .xl\:text-pink-100 {
    color: #fff5f7;
  }

  .xl\:text-pink-200 {
    color: #fed7e2;
  }

  .xl\:text-pink-300 {
    color: #fbb6ce;
  }

  .xl\:text-pink-400 {
    color: #f687b3;
  }

  .xl\:text-pink-500 {
    color: #ed64a6;
  }

  .xl\:text-pink-600 {
    color: #d53f8c;
  }

  .xl\:text-pink-700 {
    color: #b83280;
  }

  .xl\:text-pink-800 {
    color: #97266d;
  }

  .xl\:text-pink-900 {
    color: #702459;
  }

  .xl\:hover\:text-grey-darkest:hover {
    color: #3d4852;
  }

  .xl\:hover\:text-grey-darker:hover {
    color: #606f7b;
  }

  .xl\:hover\:text-grey-dark:hover {
    color: #8795a1;
  }

  .xl\:hover\:text-grey:hover {
    color: #b8c2cc;
  }

  .xl\:hover\:text-grey-light:hover {
    color: #dae1e7;
  }

  .xl\:hover\:text-grey-lighter:hover {
    color: #f1f5f8;
  }

  .xl\:hover\:text-grey-lightest:hover {
    color: #f8fafc;
  }

  .xl\:hover\:text-grey-mid-light:hover {
    color: #f3f3f4;
  }

  .xl\:hover\:text-white-lightest:hover {
    color: #f4f4f4;
  }

  .xl\:hover\:text-red-darkest:hover {
    color: #3b0d0c;
  }

  .xl\:hover\:text-red-darker:hover {
    color: #621b18;
  }

  .xl\:hover\:text-red-dark:hover {
    color: #cc1f1a;
  }

  .xl\:hover\:text-red-light:hover {
    color: #ef5753;
  }

  .xl\:hover\:text-red-lighter:hover {
    color: #f9acaa;
  }

  .xl\:hover\:text-red-lightest:hover {
    color: #fcebea;
  }

  .xl\:hover\:text-orange-darkest:hover {
    color: #462a16;
  }

  .xl\:hover\:text-orange-darker:hover {
    color: #613b1f;
  }

  .xl\:hover\:text-orange-dark:hover {
    color: #de751f;
  }

  .xl\:hover\:text-orange-light:hover {
    color: #faad63;
  }

  .xl\:hover\:text-orange-lighter:hover {
    color: #fcd9b6;
  }

  .xl\:hover\:text-orange-lightest:hover {
    color: #fff5eb;
  }

  .xl\:hover\:text-yellow-darkest:hover {
    color: #453411;
  }

  .xl\:hover\:text-yellow-darker:hover {
    color: #684f1d;
  }

  .xl\:hover\:text-yellow-dark:hover {
    color: #f2d024;
  }

  .xl\:hover\:text-yellow-light:hover {
    color: #fff382;
  }

  .xl\:hover\:text-yellow-lighter:hover {
    color: #fff9c2;
  }

  .xl\:hover\:text-yellow-lightest:hover {
    color: #fcfbeb;
  }

  .xl\:hover\:text-green-darkest:hover {
    color: #0f2f21;
  }

  .xl\:hover\:text-green-darker:hover {
    color: #1a4731;
  }

  .xl\:hover\:text-green-dark:hover {
    color: #1f9d55;
  }

  .xl\:hover\:text-green-light:hover {
    color: #51d88a;
  }

  .xl\:hover\:text-green-lighter:hover {
    color: #a2f5bf;
  }

  .xl\:hover\:text-green-lightest:hover {
    color: #e3fcec;
  }

  .xl\:hover\:text-teal-darkest:hover {
    color: #0d3331;
  }

  .xl\:hover\:text-teal-darker:hover {
    color: #20504f;
  }

  .xl\:hover\:text-teal-dark:hover {
    color: #38a89d;
  }

  .xl\:hover\:text-teal-light:hover {
    color: #64d5ca;
  }

  .xl\:hover\:text-teal-lighter:hover {
    color: #a0f0ed;
  }

  .xl\:hover\:text-teal-lightest:hover {
    color: #e8fffe;
  }

  .xl\:hover\:text-blue-darkest:hover {
    color: #12283a;
  }

  .xl\:hover\:text-blue-darker:hover {
    color: #1c3d5a;
  }

  .xl\:hover\:text-blue-dark:hover {
    color: #2779bd;
  }

  .xl\:hover\:text-blue-light:hover {
    color: #6cb2eb;
  }

  .xl\:hover\:text-blue-lighter:hover {
    color: #bcdefa;
  }

  .xl\:hover\:text-blue-lightest:hover {
    color: #eff8ff;
  }

  .xl\:hover\:text-indigo-darkest:hover {
    color: #191e38;
  }

  .xl\:hover\:text-indigo-darker:hover {
    color: #2f365f;
  }

  .xl\:hover\:text-indigo-dark:hover {
    color: #5661b3;
  }

  .xl\:hover\:text-indigo-light:hover {
    color: #7886d7;
  }

  .xl\:hover\:text-indigo-lighter:hover {
    color: #b2b7ff;
  }

  .xl\:hover\:text-indigo-lightest:hover {
    color: #e6e8ff;
  }

  .xl\:hover\:text-purple-darkest:hover {
    color: #21183c;
  }

  .xl\:hover\:text-purple-darker:hover {
    color: #382b5f;
  }

  .xl\:hover\:text-purple-dark:hover {
    color: #794acf;
  }

  .xl\:hover\:text-purple-light:hover {
    color: #a779e9;
  }

  .xl\:hover\:text-purple-lighter:hover {
    color: #d6bbfc;
  }

  .xl\:hover\:text-purple-lightest:hover {
    color: #f3ebff;
  }

  .xl\:hover\:text-pink-darkest:hover {
    color: #451225;
  }

  .xl\:hover\:text-pink-darker:hover {
    color: #6f213f;
  }

  .xl\:hover\:text-pink-dark:hover {
    color: #eb5286;
  }

  .xl\:hover\:text-pink-light:hover {
    color: #fa7ea8;
  }

  .xl\:hover\:text-pink-lighter:hover {
    color: #ffbbca;
  }

  .xl\:hover\:text-pink-lightest:hover {
    color: #ffebef;
  }

  .xl\:hover\:text-nav:hover {
    color: #3F495E;
  }

  .xl\:hover\:text-side-nav:hover {
    color: #ECF0F1;
  }

  .xl\:hover\:text-nav-item:hover {
    color: #626b7a;
  }

  .xl\:hover\:text-light-border:hover {
    color: #dfe4e6;
  }

  .xl\:hover\:text-white-medium:hover {
    color: #FAFAFA;
  }

  .xl\:hover\:text-white-medium-dark:hover {
    color: #E5E9EB;
  }

  .xl\:hover\:text-red-vibrant:hover {
    color: #e46050;
  }

  .xl\:hover\:text-red-vibrant-dark:hover {
    color: #d64230;
  }

  .xl\:hover\:text-primary:hover {
    color: #51BE99;
  }

  .xl\:hover\:text-primary-dark:hover {
    color: #0e5f43;
  }

  .xl\:hover\:text-warning:hover {
    color: #f4ab43;
  }

  .xl\:hover\:text-warning-dark:hover {
    color: #c37c16;
  }

  .xl\:hover\:text-black-dark:hover {
    color: #272634;
  }

  .xl\:hover\:text-black-darkest:hover {
    color: #141418;
  }

  .xl\:hover\:text-info:hover {
    color: #52bcdc;
  }

  .xl\:hover\:text-info-dark:hover {
    color: #2cadd4;
  }

  .xl\:hover\:text-success:hover {
    color: #72b159;
  }

  .xl\:hover\:text-success-dark:hover {
    color: #5D9547;
  }

  .xl\:hover\:text-transparent:hover {
    color: transparent;
  }

  .xl\:hover\:text-black:hover {
    color: #000;
  }

  .xl\:hover\:text-white:hover {
    color: #fff;
  }

  .xl\:hover\:text-gray-100:hover {
    color: #f7fafc;
  }

  .xl\:hover\:text-gray-200:hover {
    color: #edf2f7;
  }

  .xl\:hover\:text-gray-300:hover {
    color: #e2e8f0;
  }

  .xl\:hover\:text-gray-400:hover {
    color: #cbd5e0;
  }

  .xl\:hover\:text-gray-500:hover {
    color: #a0aec0;
  }

  .xl\:hover\:text-gray-600:hover {
    color: #718096;
  }

  .xl\:hover\:text-gray-700:hover {
    color: #4a5568;
  }

  .xl\:hover\:text-gray-800:hover {
    color: #2d3748;
  }

  .xl\:hover\:text-gray-900:hover {
    color: #1a202c;
  }

  .xl\:hover\:text-red-100:hover {
    color: #fff5f5;
  }

  .xl\:hover\:text-red-200:hover {
    color: #fed7d7;
  }

  .xl\:hover\:text-red-300:hover {
    color: #feb2b2;
  }

  .xl\:hover\:text-red-400:hover {
    color: #fc8181;
  }

  .xl\:hover\:text-red-500:hover {
    color: #f56565;
  }

  .xl\:hover\:text-red-600:hover {
    color: #e53e3e;
  }

  .xl\:hover\:text-red-700:hover {
    color: #c53030;
  }

  .xl\:hover\:text-red-800:hover {
    color: #9b2c2c;
  }

  .xl\:hover\:text-red-900:hover {
    color: #742a2a;
  }

  .xl\:hover\:text-orange-100:hover {
    color: #fffaf0;
  }

  .xl\:hover\:text-orange-200:hover {
    color: #feebc8;
  }

  .xl\:hover\:text-orange-300:hover {
    color: #fbd38d;
  }

  .xl\:hover\:text-orange-400:hover {
    color: #f6ad55;
  }

  .xl\:hover\:text-orange-500:hover {
    color: #ed8936;
  }

  .xl\:hover\:text-orange-600:hover {
    color: #dd6b20;
  }

  .xl\:hover\:text-orange-700:hover {
    color: #c05621;
  }

  .xl\:hover\:text-orange-800:hover {
    color: #9c4221;
  }

  .xl\:hover\:text-orange-900:hover {
    color: #7b341e;
  }

  .xl\:hover\:text-yellow-100:hover {
    color: #fffff0;
  }

  .xl\:hover\:text-yellow-200:hover {
    color: #fefcbf;
  }

  .xl\:hover\:text-yellow-300:hover {
    color: #faf089;
  }

  .xl\:hover\:text-yellow-400:hover {
    color: #f6e05e;
  }

  .xl\:hover\:text-yellow-500:hover {
    color: #ecc94b;
  }

  .xl\:hover\:text-yellow-600:hover {
    color: #d69e2e;
  }

  .xl\:hover\:text-yellow-700:hover {
    color: #b7791f;
  }

  .xl\:hover\:text-yellow-800:hover {
    color: #975a16;
  }

  .xl\:hover\:text-yellow-900:hover {
    color: #744210;
  }

  .xl\:hover\:text-green-100:hover {
    color: #f0fff4;
  }

  .xl\:hover\:text-green-200:hover {
    color: #c6f6d5;
  }

  .xl\:hover\:text-green-300:hover {
    color: #9ae6b4;
  }

  .xl\:hover\:text-green-400:hover {
    color: #68d391;
  }

  .xl\:hover\:text-green-500:hover {
    color: #48bb78;
  }

  .xl\:hover\:text-green-600:hover {
    color: #38a169;
  }

  .xl\:hover\:text-green-700:hover {
    color: #2f855a;
  }

  .xl\:hover\:text-green-800:hover {
    color: #276749;
  }

  .xl\:hover\:text-green-900:hover {
    color: #22543d;
  }

  .xl\:hover\:text-teal-100:hover {
    color: #e6fffa;
  }

  .xl\:hover\:text-teal-200:hover {
    color: #b2f5ea;
  }

  .xl\:hover\:text-teal-300:hover {
    color: #81e6d9;
  }

  .xl\:hover\:text-teal-400:hover {
    color: #4fd1c5;
  }

  .xl\:hover\:text-teal-500:hover {
    color: #38b2ac;
  }

  .xl\:hover\:text-teal-600:hover {
    color: #319795;
  }

  .xl\:hover\:text-teal-700:hover {
    color: #2c7a7b;
  }

  .xl\:hover\:text-teal-800:hover {
    color: #285e61;
  }

  .xl\:hover\:text-teal-900:hover {
    color: #234e52;
  }

  .xl\:hover\:text-blue-100:hover {
    color: #ebf8ff;
  }

  .xl\:hover\:text-blue-200:hover {
    color: #bee3f8;
  }

  .xl\:hover\:text-blue-300:hover {
    color: #90cdf4;
  }

  .xl\:hover\:text-blue-400:hover {
    color: #63b3ed;
  }

  .xl\:hover\:text-blue-500:hover {
    color: #4299e1;
  }

  .xl\:hover\:text-blue-600:hover {
    color: #3182ce;
  }

  .xl\:hover\:text-blue-700:hover {
    color: #2b6cb0;
  }

  .xl\:hover\:text-blue-800:hover {
    color: #2c5282;
  }

  .xl\:hover\:text-blue-900:hover {
    color: #2a4365;
  }

  .xl\:hover\:text-indigo-100:hover {
    color: #ebf4ff;
  }

  .xl\:hover\:text-indigo-200:hover {
    color: #c3dafe;
  }

  .xl\:hover\:text-indigo-300:hover {
    color: #a3bffa;
  }

  .xl\:hover\:text-indigo-400:hover {
    color: #7f9cf5;
  }

  .xl\:hover\:text-indigo-500:hover {
    color: #667eea;
  }

  .xl\:hover\:text-indigo-600:hover {
    color: #5a67d8;
  }

  .xl\:hover\:text-indigo-700:hover {
    color: #4c51bf;
  }

  .xl\:hover\:text-indigo-800:hover {
    color: #434190;
  }

  .xl\:hover\:text-indigo-900:hover {
    color: #3c366b;
  }

  .xl\:hover\:text-purple-100:hover {
    color: #faf5ff;
  }

  .xl\:hover\:text-purple-200:hover {
    color: #e9d8fd;
  }

  .xl\:hover\:text-purple-300:hover {
    color: #d6bcfa;
  }

  .xl\:hover\:text-purple-400:hover {
    color: #b794f4;
  }

  .xl\:hover\:text-purple-500:hover {
    color: #9f7aea;
  }

  .xl\:hover\:text-purple-600:hover {
    color: #805ad5;
  }

  .xl\:hover\:text-purple-700:hover {
    color: #6b46c1;
  }

  .xl\:hover\:text-purple-800:hover {
    color: #553c9a;
  }

  .xl\:hover\:text-purple-900:hover {
    color: #44337a;
  }

  .xl\:hover\:text-pink-100:hover {
    color: #fff5f7;
  }

  .xl\:hover\:text-pink-200:hover {
    color: #fed7e2;
  }

  .xl\:hover\:text-pink-300:hover {
    color: #fbb6ce;
  }

  .xl\:hover\:text-pink-400:hover {
    color: #f687b3;
  }

  .xl\:hover\:text-pink-500:hover {
    color: #ed64a6;
  }

  .xl\:hover\:text-pink-600:hover {
    color: #d53f8c;
  }

  .xl\:hover\:text-pink-700:hover {
    color: #b83280;
  }

  .xl\:hover\:text-pink-800:hover {
    color: #97266d;
  }

  .xl\:hover\:text-pink-900:hover {
    color: #702459;
  }

  .xl\:focus\:text-grey-darkest:focus {
    color: #3d4852;
  }

  .xl\:focus\:text-grey-darker:focus {
    color: #606f7b;
  }

  .xl\:focus\:text-grey-dark:focus {
    color: #8795a1;
  }

  .xl\:focus\:text-grey:focus {
    color: #b8c2cc;
  }

  .xl\:focus\:text-grey-light:focus {
    color: #dae1e7;
  }

  .xl\:focus\:text-grey-lighter:focus {
    color: #f1f5f8;
  }

  .xl\:focus\:text-grey-lightest:focus {
    color: #f8fafc;
  }

  .xl\:focus\:text-grey-mid-light:focus {
    color: #f3f3f4;
  }

  .xl\:focus\:text-white-lightest:focus {
    color: #f4f4f4;
  }

  .xl\:focus\:text-red-darkest:focus {
    color: #3b0d0c;
  }

  .xl\:focus\:text-red-darker:focus {
    color: #621b18;
  }

  .xl\:focus\:text-red-dark:focus {
    color: #cc1f1a;
  }

  .xl\:focus\:text-red-light:focus {
    color: #ef5753;
  }

  .xl\:focus\:text-red-lighter:focus {
    color: #f9acaa;
  }

  .xl\:focus\:text-red-lightest:focus {
    color: #fcebea;
  }

  .xl\:focus\:text-orange-darkest:focus {
    color: #462a16;
  }

  .xl\:focus\:text-orange-darker:focus {
    color: #613b1f;
  }

  .xl\:focus\:text-orange-dark:focus {
    color: #de751f;
  }

  .xl\:focus\:text-orange-light:focus {
    color: #faad63;
  }

  .xl\:focus\:text-orange-lighter:focus {
    color: #fcd9b6;
  }

  .xl\:focus\:text-orange-lightest:focus {
    color: #fff5eb;
  }

  .xl\:focus\:text-yellow-darkest:focus {
    color: #453411;
  }

  .xl\:focus\:text-yellow-darker:focus {
    color: #684f1d;
  }

  .xl\:focus\:text-yellow-dark:focus {
    color: #f2d024;
  }

  .xl\:focus\:text-yellow-light:focus {
    color: #fff382;
  }

  .xl\:focus\:text-yellow-lighter:focus {
    color: #fff9c2;
  }

  .xl\:focus\:text-yellow-lightest:focus {
    color: #fcfbeb;
  }

  .xl\:focus\:text-green-darkest:focus {
    color: #0f2f21;
  }

  .xl\:focus\:text-green-darker:focus {
    color: #1a4731;
  }

  .xl\:focus\:text-green-dark:focus {
    color: #1f9d55;
  }

  .xl\:focus\:text-green-light:focus {
    color: #51d88a;
  }

  .xl\:focus\:text-green-lighter:focus {
    color: #a2f5bf;
  }

  .xl\:focus\:text-green-lightest:focus {
    color: #e3fcec;
  }

  .xl\:focus\:text-teal-darkest:focus {
    color: #0d3331;
  }

  .xl\:focus\:text-teal-darker:focus {
    color: #20504f;
  }

  .xl\:focus\:text-teal-dark:focus {
    color: #38a89d;
  }

  .xl\:focus\:text-teal-light:focus {
    color: #64d5ca;
  }

  .xl\:focus\:text-teal-lighter:focus {
    color: #a0f0ed;
  }

  .xl\:focus\:text-teal-lightest:focus {
    color: #e8fffe;
  }

  .xl\:focus\:text-blue-darkest:focus {
    color: #12283a;
  }

  .xl\:focus\:text-blue-darker:focus {
    color: #1c3d5a;
  }

  .xl\:focus\:text-blue-dark:focus {
    color: #2779bd;
  }

  .xl\:focus\:text-blue-light:focus {
    color: #6cb2eb;
  }

  .xl\:focus\:text-blue-lighter:focus {
    color: #bcdefa;
  }

  .xl\:focus\:text-blue-lightest:focus {
    color: #eff8ff;
  }

  .xl\:focus\:text-indigo-darkest:focus {
    color: #191e38;
  }

  .xl\:focus\:text-indigo-darker:focus {
    color: #2f365f;
  }

  .xl\:focus\:text-indigo-dark:focus {
    color: #5661b3;
  }

  .xl\:focus\:text-indigo-light:focus {
    color: #7886d7;
  }

  .xl\:focus\:text-indigo-lighter:focus {
    color: #b2b7ff;
  }

  .xl\:focus\:text-indigo-lightest:focus {
    color: #e6e8ff;
  }

  .xl\:focus\:text-purple-darkest:focus {
    color: #21183c;
  }

  .xl\:focus\:text-purple-darker:focus {
    color: #382b5f;
  }

  .xl\:focus\:text-purple-dark:focus {
    color: #794acf;
  }

  .xl\:focus\:text-purple-light:focus {
    color: #a779e9;
  }

  .xl\:focus\:text-purple-lighter:focus {
    color: #d6bbfc;
  }

  .xl\:focus\:text-purple-lightest:focus {
    color: #f3ebff;
  }

  .xl\:focus\:text-pink-darkest:focus {
    color: #451225;
  }

  .xl\:focus\:text-pink-darker:focus {
    color: #6f213f;
  }

  .xl\:focus\:text-pink-dark:focus {
    color: #eb5286;
  }

  .xl\:focus\:text-pink-light:focus {
    color: #fa7ea8;
  }

  .xl\:focus\:text-pink-lighter:focus {
    color: #ffbbca;
  }

  .xl\:focus\:text-pink-lightest:focus {
    color: #ffebef;
  }

  .xl\:focus\:text-nav:focus {
    color: #3F495E;
  }

  .xl\:focus\:text-side-nav:focus {
    color: #ECF0F1;
  }

  .xl\:focus\:text-nav-item:focus {
    color: #626b7a;
  }

  .xl\:focus\:text-light-border:focus {
    color: #dfe4e6;
  }

  .xl\:focus\:text-white-medium:focus {
    color: #FAFAFA;
  }

  .xl\:focus\:text-white-medium-dark:focus {
    color: #E5E9EB;
  }

  .xl\:focus\:text-red-vibrant:focus {
    color: #e46050;
  }

  .xl\:focus\:text-red-vibrant-dark:focus {
    color: #d64230;
  }

  .xl\:focus\:text-primary:focus {
    color: #51BE99;
  }

  .xl\:focus\:text-primary-dark:focus {
    color: #0e5f43;
  }

  .xl\:focus\:text-warning:focus {
    color: #f4ab43;
  }

  .xl\:focus\:text-warning-dark:focus {
    color: #c37c16;
  }

  .xl\:focus\:text-black-dark:focus {
    color: #272634;
  }

  .xl\:focus\:text-black-darkest:focus {
    color: #141418;
  }

  .xl\:focus\:text-info:focus {
    color: #52bcdc;
  }

  .xl\:focus\:text-info-dark:focus {
    color: #2cadd4;
  }

  .xl\:focus\:text-success:focus {
    color: #72b159;
  }

  .xl\:focus\:text-success-dark:focus {
    color: #5D9547;
  }

  .xl\:focus\:text-transparent:focus {
    color: transparent;
  }

  .xl\:focus\:text-black:focus {
    color: #000;
  }

  .xl\:focus\:text-white:focus {
    color: #fff;
  }

  .xl\:focus\:text-gray-100:focus {
    color: #f7fafc;
  }

  .xl\:focus\:text-gray-200:focus {
    color: #edf2f7;
  }

  .xl\:focus\:text-gray-300:focus {
    color: #e2e8f0;
  }

  .xl\:focus\:text-gray-400:focus {
    color: #cbd5e0;
  }

  .xl\:focus\:text-gray-500:focus {
    color: #a0aec0;
  }

  .xl\:focus\:text-gray-600:focus {
    color: #718096;
  }

  .xl\:focus\:text-gray-700:focus {
    color: #4a5568;
  }

  .xl\:focus\:text-gray-800:focus {
    color: #2d3748;
  }

  .xl\:focus\:text-gray-900:focus {
    color: #1a202c;
  }

  .xl\:focus\:text-red-100:focus {
    color: #fff5f5;
  }

  .xl\:focus\:text-red-200:focus {
    color: #fed7d7;
  }

  .xl\:focus\:text-red-300:focus {
    color: #feb2b2;
  }

  .xl\:focus\:text-red-400:focus {
    color: #fc8181;
  }

  .xl\:focus\:text-red-500:focus {
    color: #f56565;
  }

  .xl\:focus\:text-red-600:focus {
    color: #e53e3e;
  }

  .xl\:focus\:text-red-700:focus {
    color: #c53030;
  }

  .xl\:focus\:text-red-800:focus {
    color: #9b2c2c;
  }

  .xl\:focus\:text-red-900:focus {
    color: #742a2a;
  }

  .xl\:focus\:text-orange-100:focus {
    color: #fffaf0;
  }

  .xl\:focus\:text-orange-200:focus {
    color: #feebc8;
  }

  .xl\:focus\:text-orange-300:focus {
    color: #fbd38d;
  }

  .xl\:focus\:text-orange-400:focus {
    color: #f6ad55;
  }

  .xl\:focus\:text-orange-500:focus {
    color: #ed8936;
  }

  .xl\:focus\:text-orange-600:focus {
    color: #dd6b20;
  }

  .xl\:focus\:text-orange-700:focus {
    color: #c05621;
  }

  .xl\:focus\:text-orange-800:focus {
    color: #9c4221;
  }

  .xl\:focus\:text-orange-900:focus {
    color: #7b341e;
  }

  .xl\:focus\:text-yellow-100:focus {
    color: #fffff0;
  }

  .xl\:focus\:text-yellow-200:focus {
    color: #fefcbf;
  }

  .xl\:focus\:text-yellow-300:focus {
    color: #faf089;
  }

  .xl\:focus\:text-yellow-400:focus {
    color: #f6e05e;
  }

  .xl\:focus\:text-yellow-500:focus {
    color: #ecc94b;
  }

  .xl\:focus\:text-yellow-600:focus {
    color: #d69e2e;
  }

  .xl\:focus\:text-yellow-700:focus {
    color: #b7791f;
  }

  .xl\:focus\:text-yellow-800:focus {
    color: #975a16;
  }

  .xl\:focus\:text-yellow-900:focus {
    color: #744210;
  }

  .xl\:focus\:text-green-100:focus {
    color: #f0fff4;
  }

  .xl\:focus\:text-green-200:focus {
    color: #c6f6d5;
  }

  .xl\:focus\:text-green-300:focus {
    color: #9ae6b4;
  }

  .xl\:focus\:text-green-400:focus {
    color: #68d391;
  }

  .xl\:focus\:text-green-500:focus {
    color: #48bb78;
  }

  .xl\:focus\:text-green-600:focus {
    color: #38a169;
  }

  .xl\:focus\:text-green-700:focus {
    color: #2f855a;
  }

  .xl\:focus\:text-green-800:focus {
    color: #276749;
  }

  .xl\:focus\:text-green-900:focus {
    color: #22543d;
  }

  .xl\:focus\:text-teal-100:focus {
    color: #e6fffa;
  }

  .xl\:focus\:text-teal-200:focus {
    color: #b2f5ea;
  }

  .xl\:focus\:text-teal-300:focus {
    color: #81e6d9;
  }

  .xl\:focus\:text-teal-400:focus {
    color: #4fd1c5;
  }

  .xl\:focus\:text-teal-500:focus {
    color: #38b2ac;
  }

  .xl\:focus\:text-teal-600:focus {
    color: #319795;
  }

  .xl\:focus\:text-teal-700:focus {
    color: #2c7a7b;
  }

  .xl\:focus\:text-teal-800:focus {
    color: #285e61;
  }

  .xl\:focus\:text-teal-900:focus {
    color: #234e52;
  }

  .xl\:focus\:text-blue-100:focus {
    color: #ebf8ff;
  }

  .xl\:focus\:text-blue-200:focus {
    color: #bee3f8;
  }

  .xl\:focus\:text-blue-300:focus {
    color: #90cdf4;
  }

  .xl\:focus\:text-blue-400:focus {
    color: #63b3ed;
  }

  .xl\:focus\:text-blue-500:focus {
    color: #4299e1;
  }

  .xl\:focus\:text-blue-600:focus {
    color: #3182ce;
  }

  .xl\:focus\:text-blue-700:focus {
    color: #2b6cb0;
  }

  .xl\:focus\:text-blue-800:focus {
    color: #2c5282;
  }

  .xl\:focus\:text-blue-900:focus {
    color: #2a4365;
  }

  .xl\:focus\:text-indigo-100:focus {
    color: #ebf4ff;
  }

  .xl\:focus\:text-indigo-200:focus {
    color: #c3dafe;
  }

  .xl\:focus\:text-indigo-300:focus {
    color: #a3bffa;
  }

  .xl\:focus\:text-indigo-400:focus {
    color: #7f9cf5;
  }

  .xl\:focus\:text-indigo-500:focus {
    color: #667eea;
  }

  .xl\:focus\:text-indigo-600:focus {
    color: #5a67d8;
  }

  .xl\:focus\:text-indigo-700:focus {
    color: #4c51bf;
  }

  .xl\:focus\:text-indigo-800:focus {
    color: #434190;
  }

  .xl\:focus\:text-indigo-900:focus {
    color: #3c366b;
  }

  .xl\:focus\:text-purple-100:focus {
    color: #faf5ff;
  }

  .xl\:focus\:text-purple-200:focus {
    color: #e9d8fd;
  }

  .xl\:focus\:text-purple-300:focus {
    color: #d6bcfa;
  }

  .xl\:focus\:text-purple-400:focus {
    color: #b794f4;
  }

  .xl\:focus\:text-purple-500:focus {
    color: #9f7aea;
  }

  .xl\:focus\:text-purple-600:focus {
    color: #805ad5;
  }

  .xl\:focus\:text-purple-700:focus {
    color: #6b46c1;
  }

  .xl\:focus\:text-purple-800:focus {
    color: #553c9a;
  }

  .xl\:focus\:text-purple-900:focus {
    color: #44337a;
  }

  .xl\:focus\:text-pink-100:focus {
    color: #fff5f7;
  }

  .xl\:focus\:text-pink-200:focus {
    color: #fed7e2;
  }

  .xl\:focus\:text-pink-300:focus {
    color: #fbb6ce;
  }

  .xl\:focus\:text-pink-400:focus {
    color: #f687b3;
  }

  .xl\:focus\:text-pink-500:focus {
    color: #ed64a6;
  }

  .xl\:focus\:text-pink-600:focus {
    color: #d53f8c;
  }

  .xl\:focus\:text-pink-700:focus {
    color: #b83280;
  }

  .xl\:focus\:text-pink-800:focus {
    color: #97266d;
  }

  .xl\:focus\:text-pink-900:focus {
    color: #702459;
  }

  .xl\:text-xs {
    font-size: 0.75rem;
  }

  .xl\:text-sm {
    font-size: 0.875rem;
  }

  .xl\:text-base {
    font-size: 1rem;
  }

  .xl\:text-lg {
    font-size: 1.125rem;
  }

  .xl\:text-xl {
    font-size: 1.25rem;
  }

  .xl\:text-2xl {
    font-size: 1.5rem;
  }

  .xl\:text-3xl {
    font-size: 1.875rem;
  }

  .xl\:text-4xl {
    font-size: 2.25rem;
  }

  .xl\:text-5xl {
    font-size: 3rem;
  }

  .xl\:text-6xl {
    font-size: 4rem;
  }

  .xl\:italic {
    font-style: italic;
  }

  .xl\:not-italic {
    font-style: normal;
  }

  .xl\:uppercase {
    text-transform: uppercase;
  }

  .xl\:lowercase {
    text-transform: lowercase;
  }

  .xl\:capitalize {
    text-transform: capitalize;
  }

  .xl\:normal-case {
    text-transform: none;
  }

  .xl\:underline {
    text-decoration: underline;
  }

  .xl\:line-through {
    text-decoration: line-through;
  }

  .xl\:no-underline {
    text-decoration: none;
  }

  .xl\:hover\:underline:hover {
    text-decoration: underline;
  }

  .xl\:hover\:line-through:hover {
    text-decoration: line-through;
  }

  .xl\:hover\:no-underline:hover {
    text-decoration: none;
  }

  .xl\:focus\:underline:focus {
    text-decoration: underline;
  }

  .xl\:focus\:line-through:focus {
    text-decoration: line-through;
  }

  .xl\:focus\:no-underline:focus {
    text-decoration: none;
  }

  .xl\:antialiased {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }

  .xl\:subpixel-antialiased {
    -webkit-font-smoothing: auto;
    -moz-osx-font-smoothing: auto;
  }

  .xl\:tracking-tighter {
    letter-spacing: -0.05em;
  }

  .xl\:tracking-tight {
    letter-spacing: -0.025em;
  }

  .xl\:tracking-normal {
    letter-spacing: 0;
  }

  .xl\:tracking-wide {
    letter-spacing: 0.025em;
  }

  .xl\:tracking-wider {
    letter-spacing: 0.05em;
  }

  .xl\:tracking-widest {
    letter-spacing: 0.1em;
  }

  .xl\:select-none {
    user-select: none;
  }

  .xl\:select-text {
    user-select: text;
  }

  .xl\:select-all {
    user-select: all;
  }

  .xl\:select-auto {
    user-select: auto;
  }

  .xl\:align-baseline {
    vertical-align: baseline;
  }

  .xl\:align-top {
    vertical-align: top;
  }

  .xl\:align-middle {
    vertical-align: middle;
  }

  .xl\:align-bottom {
    vertical-align: bottom;
  }

  .xl\:align-text-top {
    vertical-align: text-top;
  }

  .xl\:align-text-bottom {
    vertical-align: text-bottom;
  }

  .xl\:visible {
    visibility: visible;
  }

  .xl\:invisible {
    visibility: hidden;
  }

  .xl\:whitespace-normal {
    white-space: normal;
  }

  .xl\:whitespace-no-wrap {
    white-space: nowrap;
  }

  .xl\:whitespace-pre {
    white-space: pre;
  }

  .xl\:whitespace-pre-line {
    white-space: pre-line;
  }

  .xl\:whitespace-pre-wrap {
    white-space: pre-wrap;
  }

  .xl\:break-normal {
    overflow-wrap: normal;
    word-break: normal;
  }

  .xl\:break-words {
    overflow-wrap: break-word;
  }

  .xl\:break-all {
    word-break: break-all;
  }

  .xl\:truncate {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
  }

  .xl\:w-0 {
    width: 0;
  }

  .xl\:w-1 {
    width: 0.25rem;
  }

  .xl\:w-2 {
    width: 0.5rem;
  }

  .xl\:w-3 {
    width: 0.75rem;
  }

  .xl\:w-4 {
    width: 1rem;
  }

  .xl\:w-5 {
    width: 1.25rem;
  }

  .xl\:w-6 {
    width: 1.5rem;
  }

  .xl\:w-8 {
    width: 2rem;
  }

  .xl\:w-10 {
    width: 2.5rem;
  }

  .xl\:w-12 {
    width: 3rem;
  }

  .xl\:w-16 {
    width: 4rem;
  }

  .xl\:w-20 {
    width: 5rem;
  }

  .xl\:w-24 {
    width: 6rem;
  }

  .xl\:w-32 {
    width: 8rem;
  }

  .xl\:w-40 {
    width: 10rem;
  }

  .xl\:w-48 {
    width: 12rem;
  }

  .xl\:w-56 {
    width: 14rem;
  }

  .xl\:w-64 {
    width: 16rem;
  }

  .xl\:w-auto {
    width: auto;
  }

  .xl\:w-px {
    width: 1px;
  }

  .xl\:w-1\/2 {
    width: 50%;
  }

  .xl\:w-1\/3 {
    width: 33.333333%;
  }

  .xl\:w-2\/3 {
    width: 66.666667%;
  }

  .xl\:w-1\/4 {
    width: 25%;
  }

  .xl\:w-2\/4 {
    width: 50%;
  }

  .xl\:w-3\/4 {
    width: 75%;
  }

  .xl\:w-1\/5 {
    width: 20%;
  }

  .xl\:w-2\/5 {
    width: 40%;
  }

  .xl\:w-3\/5 {
    width: 60%;
  }

  .xl\:w-4\/5 {
    width: 80%;
  }

  .xl\:w-1\/6 {
    width: 16.666667%;
  }

  .xl\:w-2\/6 {
    width: 33.333333%;
  }

  .xl\:w-3\/6 {
    width: 50%;
  }

  .xl\:w-4\/6 {
    width: 66.666667%;
  }

  .xl\:w-5\/6 {
    width: 83.333333%;
  }

  .xl\:w-1\/12 {
    width: 8.333333%;
  }

  .xl\:w-2\/12 {
    width: 16.666667%;
  }

  .xl\:w-3\/12 {
    width: 25%;
  }

  .xl\:w-4\/12 {
    width: 33.333333%;
  }

  .xl\:w-5\/12 {
    width: 41.666667%;
  }

  .xl\:w-6\/12 {
    width: 50%;
  }

  .xl\:w-7\/12 {
    width: 58.333333%;
  }

  .xl\:w-8\/12 {
    width: 66.666667%;
  }

  .xl\:w-9\/12 {
    width: 75%;
  }

  .xl\:w-10\/12 {
    width: 83.333333%;
  }

  .xl\:w-11\/12 {
    width: 91.666667%;
  }

  .xl\:w-full {
    width: 100%;
  }

  .xl\:w-screen {
    width: 100vw;
  }

  .xl\:z-0 {
    z-index: 0;
  }

  .xl\:z-10 {
    z-index: 10;
  }

  .xl\:z-20 {
    z-index: 20;
  }

  .xl\:z-30 {
    z-index: 30;
  }

  .xl\:z-40 {
    z-index: 40;
  }

  .xl\:z-50 {
    z-index: 50;
  }

  .xl\:z-auto {
    z-index: auto;
  }
}

</style>
<script src="{{ asset('js/main.js') }}" defer></script>
@endsection
</body>

</html>