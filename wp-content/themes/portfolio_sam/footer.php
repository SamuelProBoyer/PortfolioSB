<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Portfolio_SB
 */

?>
	
	<footer id="footer" class="site-footer reveal">
		<div class="site-info footer-section">
		
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Samuel Boyer</h2>
                </div>
            </div>
        </div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script type="text/javascript">
			// window.addEventListener('scroll', reveal);
			
			// La fonction reveal() sera appelée lorsque le document est chargé
			document.addEventListener('DOMContentLoaded', function() {
				window.addEventListener('scroll', reveal);
				window.addEventListener('scroll', revealFromLeft);
				window.addEventListener('scroll', revealFromRight);
				
				function reveal() {
					var reveals = document.querySelectorAll('.reveal');

				for (var i = 0; i < reveals.length; i++) {
					var windowheight = window.innerHeight;
					var revealtop = reveals[i].getBoundingClientRect().top;
					var revealpoint = 150;

					if(revealtop < windowheight - revealpoint) {
						reveals[i].classList.add('active');
					} else {
						reveals[i].classList.remove('active');
					}
				}
			}
				function revealFromRight() {
					var revealFromRights = document.querySelectorAll('.revealFromRight');

				for (var i = 0; i < revealFromRights.length; i++) {
					var windowheight = window.innerHeight;
					var revealFromRighttop = revealFromRights[i].getBoundingClientRect().top;
					var revealFromRightpoint = 150;

					if(revealFromRighttop < windowheight - revealFromRightpoint) {
						revealFromRights[i].classList.add('active');
					} else {
						revealFromRights[i].classList.remove('active');
					}
				}
			}
				function revealFromLeft() {
					var revealFromLefts = document.querySelectorAll('.revealFromLeft');

				for (var i = 0; i < revealFromLefts.length; i++) {
					var windowheight = window.innerHeight;
					var revealFromLefttop = revealFromLefts[i].getBoundingClientRect().top;
					var revealFromLeftpoint = 150;

					if(revealFromLefttop < windowheight - revealFromLeftpoint) {
						revealFromLefts[i].classList.add('active');
					} else {
						revealFromLefts[i].classList.remove('active');
					}
				}
			}
		});
			function revealFromLeft() {
				var revealFromLefts = document.querySelectorAll('.revealFromLeft');

				for (var i = 0; i < revealFromLefts.length; i++) {
					var windowheight = window.innerHeight;
					var revealFromLefttop = revealFromLefts[i].getBoundingClientRect().top;
					var revealFromLeftpoint = 150;

					if(revealFromLefttop < windowheight - revealFromLeftpoint) {
						revealFromLefts[i].classList.add('active');
					} else {
						revealFromLefts[i].classList.remove('active');
						
					}
					
				}
			}
			function revealFromRight() {
				var revealFromRights = document.querySelectorAll('.revealFromRight');

				for (var i = 0; i < revealFromRights.length; i++) {
					var windowheight = window.innerHeight;
					var revealFromRighttop = revealFromRights[i].getBoundingClientRect().top;
					var revealFromRightpoint = 150;

					if(revealFromRighttop < windowheight - revealFromRightpoint) {
						revealFromRights[i].classList.add('active');
					} else {
						revealFromRights[i].classList.remove('active');
						
					}
					
				}
			}
</script>



<script>
const scrollToTopBtn = document.querySelector("#scrollToTopBtn");

window.addEventListener("scroll", () => {
  // Show button after scrolling down a certain amount
  if (window.scrollY > 1000) {
    scrollToTopBtn.style.display = "block";
	// scrollToTopBtn.classList.add("active");
} else {
	scrollToTopBtn.style.display = "none";
	// scrollToTopBtn.classList.add("remove");
  }
});

scrollToTopBtn.addEventListener("click", () => {
  // Scroll to top when button is clicked
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
});
</script>

<script>
	const cursor = document.querySelector('.bg__gradient');

	let mouseX = 0;
	let mouseY = 0;

	let cursorX = 0;
	let cursorY = 0;

	let speed = 0.01;

	function animate() {
		let distX = mouseX - cursorX;
		let distY = mouseY - cursorY;

		cursorX = cursorX + (distX * speed);
		cursorY = cursorY + (distY * speed);

		cursor.style.left = cursorX + 'px';
		cursor.style.top = cursorY + 'px';

		requestAnimationFrame(animate);
	}


	animate();

	document.addEventListener('mousemove', (event) => {
		mouseX = event.pageX;
		mouseY = event.pageY;
	})



	( function( $ ) {

		"use strict";

	$(".card").tilt({
		maxTilt: 15,
		perspective: 1500,
		easing: "cubic-bezier(.03,.98,.52,.99)",
		speed: 500,
		glare: false,
		maxGlare: 0.2,
		scale: 1.01
	});
	
	}( jQuery ) );
</script>



</body>
</html>
