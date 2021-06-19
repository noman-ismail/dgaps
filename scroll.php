<style>
	html, body {
  margin: 0;
  padding: 0;
}
div, h1, h2, h3, h4, h5, h6, p, a {
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
.header {
  flex-direction: column;
  height: 111px;
  background-color: hsl(349.3, 100%, 61.6%);
}
.header-title {
  height: 70%;
  width: 100%;
  font-size: 30px;
  font-weight: bold;
  color: hsl(0, 0%, 93%);
}
.header-menu {
  height: 30%;
  width: 100%;
  color: hsl(0, 0%, 89%);
  background-color: hsl(0, 0%, 24.7%);
}
.header-menu.fixed {
  position: fixed;
  top: 0;
  left: 0; right: 0;
  height: 0;
  overflow: hidden;
}
.header-menu div {
  flex: 1;
  height: 100%;
  box-shadow: inset 0 0 1px 1px hsla(0, 0%, 100%, 0.1);
  cursor: pointer;
}
.header-menu div:hover {
  color: hsl(0, 0%, 6%);
  background-color: hsla(195, 93%, 52%, 0.8);
}
.main {
  align-items: flex-start;
  padding: 24px 24px;
  background-color: hsl(0, 3.4%, 59.4%);
}
.main-left {
  flex-direction: column;
  flex: 2;
  padding: 0 24px 0px 0;
}
.main-left-box {
  flex-direction: column;
  width: 100%;
  margin: 0 0 24px 0;
  padding: 0 0 10px 0;
  background-color: hsl(0, 0%, 93%);
  border-radius: 3px;
  overflow: hidden;
}
.main-left-box h3 {
  width: 100%;
  padding: 8px;
  font-size: 22px;
  color: hsl(0, 0%, 98.8%);
  background-color: hsl(190.9, 100%, 36.9%);
}
.main-left-box p {
  justify-content: flex-start;
  width: 100%;
  padding: 14px 20px;
}
.main-right {
  flex-direction: column;
  flex: 1;
  max-width: 300px;
}
.main-right-box {
  flex-direction: column;
  width: 100%;
  margin: 0 0 24px 0;
  background-color: hsl(349.3, 100%, 61.6%);
  border-radius: 3px;
  overflow: hidden;
}
.main-right-box h5 {
  width: 100%;
  padding: 8px;
  font-size: 18px;
  color: hsl(0, 0%, 98.8%);
}
.main-right-box a {
  justify-content: flex-start;
  text-align: left;
  width: 100%;
  padding: 10px 10px 10px 10%;
  text-decoration: none;
  font-size: 14px;
  color: hsla(0, 0%, 19%, 1);
  background-color: hsla(0, 0%, 94%, 0.8);
}
.main-right-box a:nth-child(even) {
  background-color: hsla(0, 0%, 94.1%, 0.7);
}
.main-right-box a:hover {
  color: hsl(0, 0%, 6%);
  background-color: hsla(195, 93%, 52%, 0.8);
}
.footer {
  flex-direction: column;
  background-color: dimgray;
}
.footer-sticky {
  height: 33px;
  width: 100%;
  font-weight: bold;
  color: hsl(0, 0%, 93%);
  text-shadow: 0px 1px 0 hsl(0, 0%, 50.6%);
  background-color: hsl(0, 0%, 10%);
}
.footer-more {
  min-height: 66px;
  width: 100%;
  background-color: hsl(0, 0%, 16.1%);
  color: hsl(0, 0%, 45.9%);
  font-size: 12px;
}
</style>

<div class="header">
  <div class="header-title">Sticky Sidebar</div>
  <div class="header-menu">
    <div>The</div>
    <div>Header</div>
    <div>Menu</div>
    <div>Bar</div>    
  </div>
</div>
<div class="main">
  <div class="main-left">
    <div class="main-left-box">
      <h3>What It Does</h3>
      <p>When scrolled to it sticks all or part of your sidebar in position at the top of screen, depending on how you use it.</p>
    </div>
    <div class="main-left-box">
      <h3>How To Use It</h3>
      <p>Add the class .stickthis to the element you want to stick. Works best if it is either the entire sidebar or the last item in your sidebar. In the example here we are sticking the 'More Cool Stuff' links block. It works great for keeping an important menu in view or a prominent advertisement or other information.</p>
    </div>
    <div class="main-left-box">
      <h3>Requirements</h3>
      <p>Javascript, JQuery, HTML</p>
    </div>
    <div class="main-left-box">
      <h3>Troubleshooting</h3>
      <p>Minor Size Differences After Sticking - Be sure to refresh page if you've changed the screen width at all as the width, height and distance to top are all measured and saved to variables on page load, not on scroll. If that's not the problem, check into the differences between JQuery's .width, .innerWidth and outerWidth. Also read up on CSS box-sizing. If you expect users to be adjusting their screen size while on page (flipping their devices from vert to horiz and viceversa) you can look into listening for the screen size change with Jquery's .resize and update the variables each time a screen resize is detected.</p>
    </div>
    <div class="main-left-box">
      <h3>Pirate Ipsum</h3>
      <p>Maroon Buccaneer mizzenmast nipperkin bucko log jolly boat coffer rum barkadeer. Cackle fruit wench Letter of Marque careen gibbet yardarm bilge rat Jolly Roger ye chandler. Booty snow loot Sail ho man-of-war lee yawl Barbary Coast take a caulk pink.</p>
      <p>Gold Road man-of-war bowsprit Yellow Jack crack Jennys tea cup Letter of Marque provost port Jack Tar jack. Holystone swing the lead Brethren of the Coast capstan ahoy crack Jennys tea cup belaying pin killick cable galleon. Code of conduct aye driver ahoy loot booty Nelsons folly spirits chase guns cable.</p>
      <p>Belaying pin cackle fruit Buccaneer galleon hearties Spanish Main keel Barbary Coast tackle yardarm. Jib long clothes scourge of the seven seas flogging lass plunder to go on account transom gally run a rig. Cutlass reef sails man-of-war boatswain belay case shot killick careen driver hang the jib.</p>
      <a href="https://pirateipsum.me/">pirateipsum.me</a>
    </div>
  </div>
  <div class="main-right">
    <div class="main-right-box">
      <h5>Sticky Pens</h5>
      <a href="https://codepen.io/nooble/pen/mpoyMX">Stinky Footer</a>
      <a href="https://codepen.io/nooble/pen/JMxvEb">Stick Up</a>
      <a href="https://codepen.io/nooble/pen/ppYBQM">Sticky Sidebar</a>
    </div>
    <div class="main-right-box stickthis">
      <h5>More Cool Stuff</h5>
      <a href="https://en.wikipedia.org/wiki/Bulk_box">Boxes</a>
      <a href="https://en.wikipedia.org/wiki/Rivet">Riveting Rivets</a>
    </div>
  </div>
</div>
<div class="footer">
  <div class="footer-sticky">The Footer Bar</div>
  <div class="footer-more">The kind of words and stuff you'd find in a footer.</div>
</div>
<script src="assets/js/jquery.min.js">
	
</script>
<script>
	var stickitLeft = $('.stickthis').offset.left;
var stickitWidth = $('.stickthis').width() + 'px';
var stickitHeight = $('.stickthis').height() + 'px';
var stickySidebarToTop = $('.stickthis').offset().top;
$(window).scroll(function() {
  var windowToTop = $(window).scrollTop();
  if (windowToTop + 10 > stickySidebarToTop) {
    $('.stickthis').css({
      'position': 'fixed',
      'top': '10px',
      'left': stickitLeft,
      'width': stickitWidth,
      'height': stickitHeight
    })
  } else {
    $('.stickthis').removeAttr('style');
  }
})
</script>