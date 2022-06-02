
// Animation barre skills................................................................................
(function() {
  
	var SkillsBar = function( bars ) {
	  this.bars = document.querySelectorAll( bars );
	  if( this.bars.length > 0 ) {
		this.init();
	  } 
	};
	
	SkillsBar.prototype = {
	  init: function() {
		var self = this;
		self.index = -1;
		self.timer = setTimeout(function() {
		  self.action();
		}, 500);
		
		
	  },
	  select: function( n ) {
		var self = this,
		  bar = self.bars[n];
		  
		  if( bar ) {
			var width = bar.parentNode.dataset.percent;
		  
			bar.style.width = width;
			bar.parentNode.classList.add( "complete" ); 
		  }
	  },
	  action: function() {
		var self = this;
		self.index++;
		if( self.index == self.bars.length ) {
		  clearTimeout( self.timer );
		} else {
		  self.select( self.index );  
		}
		
		setTimeout(function() {
		  self.action();
		},500);
	  }
	};
	
	window.SkillsBar = SkillsBar;
	
  })();
  
  (function() {
	document.addEventListener( "DOMContentLoaded", function() {
	  var skills = new SkillsBar( ".skillbar-bar" );
	});
  })();


// ...................................................................................................
(function($) {

	var $window = $(window),
		$body = $('body'),
		$wrapper = $('#wrapper'),
		$main = $('#main'),
		$panels = $main.children('.panel'),
		$nav = $('#nav'), $nav_links = $nav.children('a');

	// Breakpoints Responsive
		breakpoints({
			xlarge:  [ '1281px',  '1680px' ],
			large:   [ '981px',   '1280px' ],
			medium:  [ '737px',   '980px'  ],
			small:   [ '361px',   '736px'  ],
			xsmall:  [ null,      '360px'  ]
		});

		// Transition affichage lors de l'affichage de la page d'Acceuil
		$window.on('load', function() {
			window.setTimeout(function() {
				$body.removeClass('is-preload');
			}, 2000); // Temps d'apparition (2000)
		});

		$nav_links
			.on('click', function(event) {

				var href = $(this).attr('href');

					if (href.charAt(0) != '#'
					||	$panels.filter(href).length == 0)
						return;

					event.preventDefault();
					event.stopPropagation();

					if (window.location.hash != href)
						window.location.hash = href;

			});

			(function() {

				var $panel, $link;

					if (window.location.hash) {

				 		$panel = $panels.filter(window.location.hash);
						$link = $nav_links.filter('[href="' + window.location.hash + '"]');

					}

					if (!$panel
					||	$panel.length == 0) {

						$panel = $panels.first();
						$link = $nav_links.first();

					}

					$panels.not($panel)
						.addClass('inactive')
						.hide();

					$link
						.addClass('active');

					$window.scrollTop(0);

			})();

			$window.on('hashchange', function(event) {

				var $panel, $link;

					if (window.location.hash) {

				 		$panel = $panels.filter(window.location.hash);
						$link = $nav_links.filter('[href="' + window.location.hash + '"]');

							if ($panel.length == 0)
								return;

					}

					else {

						$panel = $panels.first();
						$link = $nav_links.first();

					}

					$panels.addClass('inactive');

					$nav_links.removeClass('active');

					$link.addClass('active');

					$main
						.css('max-height', $main.height() + 'px')
						.css('min-height', $main.height() + 'px');

					setTimeout(function() {

							$panels.hide();

							$panel.show();

							$main
								.css('max-height', $panel.outerHeight() + 'px')
								.css('min-height', $panel.outerHeight() + 'px');

							$window.scrollTop(0);

							window.setTimeout(function() {

									$panel.removeClass('inactive');

									$main
										.css('max-height', '')
										.css('min-height', '');

									$window.triggerHandler('--refresh');

									locked = false;

							}, (breakpoints.active('small') ? 0 : 500));

					}, 250);

			});

		if (browser.name == 'ie') {


				$window.on('--refresh', function() {

					$wrapper.css('height', 'auto');

					window.setTimeout(function() {

						var h = $wrapper.height(),
							wh = $window.height();

						if (h < wh)
							$wrapper.css('height', '100vh');

					}, 0);

				});

				$window.on('resize load', function() {
					$window.triggerHandler('--refresh');
				});

				$('.panel.intro').each(function() {

					var $pic = $(this).children('.pic'),
						$img = $pic.children('img');

					$pic
						.css('background-image', 'url(' + $img.attr('src') + ')')
						.css('background-size', 'cover')
						.css('background-position', 'center');

					$img
						.css('visibility', 'hidden');

				});

		}

})(jQuery);


// Effet d'écriture.......................................................................................
const htmlP = document.getElementById("taper");
const txt = htmlP.dataset.label;
let i 	= 0 ;
function showLetters()
{
  let timeOut ;
  if(i < txt.length)
	{
	  htmlP.innerHTML += `<span>${txt[i]}</span>` ;
	  timeOut = setTimeout(showLetters,500)
	  i++
	}
	else
	{
	  clearTimeout(timeOut);
	  console.log("end")
	}
}
showLetters();


// Effet curseur..........................................................................................
const cursor = document.querySelector(".cursorHelper")
const root = document.querySelector(':root')
const body = document.body

let cursorToggle = false
let isHovering = false
let color = "white"
let zIndexIsNegative = true
let blendmodeIsOff = true
let baseScale = 1

// Taille du curseur
const applyCursorPos = ({clientX, clientY}) => {
  const x = `${clientX - 5}px`
  const y = `${clientY - 10}px`

  if(!isHovering) {
    
 root.style.setProperty("--posX", x);
 root.style.setProperty("--posY", y);
  }
}

const increaseMouseSize = ({increase}) => {
  root.style.setProperty("--scaleX", increase ? "3" : baseScale);
    root.style.setProperty("--scaleY", increase ? "3" : baseScale);
}

const toggleCursor = () => {
  cursorToggle = !cursorToggle
  root.style.setProperty("--cursor", cursorToggle ? "auto" : "none");
}

cursorHoverState = (e, {hovering}) => { 
  isHovering = hovering
  const rect = e.target.getBoundingClientRect();
  body.classList.toggle("hovering")
  
  root.style.setProperty("--posX", rect.x + (rect.width / 2) - 25 + "px");
    root.style.setProperty("--posY", rect.y + (rect.height / 2) - 25 + "px");
      root.style.setProperty("--color", hovering ? "orange" : color); // Couleur border ORANGE
        root.style.setProperty("--scaleX", hovering ? (rect.width + 10) / 50 : 1 );
          root.style.setProperty("--scaleY", hovering ? (rect.height + 10) / 50 : 1 );
          root.style.setProperty("--br", hovering ? "0" : "25px")
}

document.body.addEventListener("mousemove", applyCursorPos)
	// Effet Grossissement Curseur
document.body.addEventListener("mousedown", () => {increaseMouseSize({increase: true})}) //true
document.body.addEventListener("mouseup", () => {increaseMouseSize({increase: false})}) //false

document.querySelector("button").addEventListener("click", toggleCursor)

document.querySelectorAll("button, a, input, select").forEach(btn => {
	// Effet Bordure Couleur
  btn.addEventListener("mouseover", (e) => {cursorHoverState(e, {hovering: false})}) //true
  btn.addEventListener("mouseout", (e) => {cursorHoverState(e, {hovering: false})}) //false
});

document.querySelector("input[type='color']").addEventListener("input", (e) => { 
  color = e.target.value
  root.style.setProperty("--color", color)
})

document.querySelector("#blend").addEventListener("click", () => {
  zIndexIsNegative = !zIndexIsNegative
  blendmodeIsOff = !blendmodeIsOff
  
  root.style.setProperty("--zIndex", zIndexIsNegative ? -2 : 0);
    root.style.setProperty("--blendMode", blendmodeIsOff ? "normal" : "difference")
})

document.querySelector("#ballToggle").addEventListener("click", () => {
  document.querySelectorAll(".cursorHelper:not(#one)").forEach(el => {
    el.classList.toggle("none")
  })
})