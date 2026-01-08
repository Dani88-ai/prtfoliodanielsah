/*******************************************************
    Template Name    : Daniel SAH - Portfolio Professionnel
    Author           : Daniel SAH (Adapté de aam-developer)
    Version          : 2.0
    Created          : 2025
    File Description : Fichier JavaScript principal du portfolio
*******************************************************/
(function ($) {
	"use strict";

	var nav = $('nav');
	var navHeight = nav.outerHeight();

	$('.navbar-toggler').on('click', function () {
		if (!$('#mainNav').hasClass('navbar-reduce')) {
			$('#mainNav').addClass('navbar-reduce');
		}
	});
	
	// START PRELOADER
	$(window).on('load', function() {
		function preLoader() {
            setTimeout(function () {
                $('#preloader-wapper .loader-middle').addClass('loaded');
                setTimeout(function () {
                    $('#preloader-wapper').addClass('loaded');
                    setTimeout(function () {
                        $('#preloader-wapper').remove();
                    }, 400);
                }, 600);
            }, 1000);
        };
        preLoader();
	});
	
	// Portfolio isotope et filtres
    $(window).on('load', function() {
		var projectIsotope = $('.project-container').isotope({
			itemSelector: '.project-grid-item',
			layoutMode: 'fitRows',
			transitionDuration: '0.6s'
		});

		$('#project-flters li').on('click', function () {
			$("#project-flters li").removeClass('filter-active');
			$(this).addClass('filter-active');

			projectIsotope.isotope({
				filter: $(this).data('filter')
			});
			
			// Animation d'entrée pour les éléments filtrés
			setTimeout(function() {
				$('.project-grid-item').addClass('animate-in');
			}, 100);
		});
    });
	
	// Navbar Menu Reduce avec effet de transparence
	$(window).trigger('scroll');
	$(window).on('scroll', function () {
		var pixels = 50;
		var top = 1200;
		if ($(window).scrollTop() > pixels) {
			$('.navbar-expand-md').addClass('navbar-reduce');
			$('.navbar-expand-md').removeClass('navbar-trans');
		} else {
			$('.navbar-expand-md').addClass('navbar-trans');
			$('.navbar-expand-md').removeClass('navbar-reduce');
		}
		if ($(window).scrollTop() > top) {
			$('.scrolltop-mf').fadeIn(1000, "easeInOutExpo");
		} else {
			$('.scrolltop-mf').fadeOut(1000, "easeInOutExpo");
		}
	});

	// Bouton Back to Top avec animation améliorée
	$(window).on("scroll", function () {
		if ($(this).scrollTop() > 100) {
			$('.back-to-top').fadeIn('slow');
		} else {
			$('.back-to-top').fadeOut('slow');
		}
	});
	
	$('.back-to-top').on("click", function () {
		$('html, body').animate({
			scrollTop: 0
		}, 1500, 'easeInOutExpo');
		return false;
	});

	// ScrollTop alternatif
	$('.scrolltop-mf').on("click", function () {
		$('html, body').animate({
			scrollTop: 0
		}, 1000);
	});

	// Navigation par ancres avec smooth scroll
	$('a.js-scroll[href*="#"]:not([href="#"])').on("click", function () {
		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			if (target.length) {
				$('html, body').animate({
					scrollTop: (target.offset().top - navHeight + 30)
				}, 1000, "easeInOutExpo");
				return false;
			}
		}
	});

	// Fermer le menu responsive au clic sur un lien
	$('.js-scroll').on("click", function () {
		$('.navbar-collapse').collapse('hide');
	});

	// Activer scrollspy pour la navigation
	$('body').scrollspy({
		target: '#mainNav',
		offset: navHeight
	});
	
    // HOME TYPED JS - Animation du texte
    if ($('.element').length) {
        $('.element').each(function () {
            $(this).typed({
                strings: [
                    $(this).data('text1') , 
                    $(this).data('text2') , 
                    $(this).data('text3') 
                ], 
                loop: $(this).data('loop') !== false,
                backDelay: $(this).data('backdelay') || 1500,                
                typeSpeed: 50,
                backSpeed: 30,
                startDelay: 500
            });
        });
    }
	
	// Animation des barres de progression avec Waypoint
    if ($('.skill-item').length > 0) { 
		var waypoint = new Waypoint({
			element: document.getElementsByClassName('skill-item'),
			handler: function(direction) {
				$('.progress-bar').each(function() {
					var bar_value = $(this).attr('aria-valuenow') + '%';                
					$(this).animate({ 
						width: bar_value 
					}, { 
						duration: 1500,
						easing: 'swing',
						step: function(now) {
							$(this).css('width', now + '%');
						}
					});
				});
				this.destroy();
			},
			offset: '80%'
		});
    }
	
	// Odometer JS - Animation des compteurs
	$('.odometer').appear(function() {
		var odo = $(".odometer");
		odo.each(function() {
			var countNumber = $(this).attr("data-count");
			$(this).html(countNumber);
		});
	});
	
	// Carousel des témoignages avec Owl Carousel
	$('#testimonial-slide').owlCarousel({
		margin: 20,
		autoplay: true,
		center: true,
		autoplayTimeout: 5000,
		nav: false,
		smartSpeed: 1000,
		dots: true,
		autoplayHoverPause: true,
		loop: true,
		responsiveClass: true,
		responsive: {
			0: {
				items: 1,
				center: false
			},
			600: {
				items: 1,
				center: false
			},
			1000: {
				items: 2
			},
			1200: {
				items: 3
			}
		}
	});
	
	// Popup d'images avec Magnific Popup
	var magnifPopup = function () {
		$('.popup-img').magnificPopup({
			type: 'image',
			removalDelay: 300,
			mainClass: 'mfp-with-zoom',
			gallery: {
				enabled: true,
				navigateByImgClick: true,
				preload: [0,1]
			},
			zoom: {
				enabled: true,
				duration: 300,
				easing: 'ease-in-out',
				opener: function (openerElement) {
					return openerElement.is('img') ? openerElement : openerElement.find('img');
				}
			},
			callbacks: {
				beforeOpen: function() {
					// Ajouter une classe au body pour empêcher le scroll
					$('body').addClass('mfp-open');
				},
				close: function() {
					$('body').removeClass('mfp-open');
				}
			}
		});
	};

	// Appeler la fonction magnific popup
	magnifPopup();
	
	// FONCTIONNALITÉS ADDITIONNELLES POUR LE PORTFOLIO
	
	// Validation du formulaire de contact
	if ($('#contact-form').length) {
		$('#contact-form').on('submit', function(e) {
			e.preventDefault();
			
			var form = $(this);
			var formData = new FormData(this);
			var messageDiv = $('.form-message');
			var submitBtn = form.find('button[type="submit"]');
			
			// Désactiver le bouton pendant l'envoi
			submitBtn.prop('disabled', true).html('<i class="fa fa-spinner fa-spin"></i> Envoi en cours...');
			
			$.ajax({
				url: form.attr('action'),
				type: 'POST',
				data: formData,
				processData: false,
				contentType: false,
				success: function(response) {
					messageDiv.html('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + response + '</div>');
					form[0].reset();
					
					// Google Analytics event (si configuré)
					if (typeof gtag !== 'undefined') {
						gtag('event', 'form_submission', {
							'event_category': 'Contact',
							'event_label': 'Contact Form Submitted'
						});
					}
					
					// Masquer le message après 5 secondes
					setTimeout(function() {
						messageDiv.fadeOut('slow', function() {
							$(this).html('').show();
						});
					}, 5000);
				},
				error: function() {
					messageDiv.html('<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Une erreur est survenue. Veuillez réessayer.</div>');
				},
				complete: function() {
					// Réactiver le bouton
					submitBtn.prop('disabled', false).html('<span>Envoyer le Message</span>');
				}
			});
		});
	}
	
	// Animation d'entrée des sections au scroll
	$(window).on('scroll load', function() {
		$('.section-padding').each(function() {
			var elementTop = $(this).offset().top;
			var elementBottom = elementTop + $(this).outerHeight();
			var viewportTop = $(window).scrollTop();
			var viewportBottom = viewportTop + $(window).height();
			
			if (elementBottom > viewportTop && elementTop < viewportBottom) {
				$(this).addClass('section-visible');
			}
		});
	});
	
	// Suivi des clics sur les liens externes (Google Analytics)
	$('a[href^="http"]').not('a[href*="' + window.location.hostname + '"]').on('click', function() {
		var url = $(this).attr('href');
		if (typeof gtag !== 'undefined') {
			gtag('event', 'click', {
				'event_category': 'Outbound Link',
				'event_label': url
			});
		}
	});
	
	// Suivi des téléchargements de CV
	$('a[download], a[href$=".pdf"]').on('click', function() {
		var fileName = $(this).attr('href');
		if (typeof gtag !== 'undefined') {
			gtag('event', 'download', {
				'event_category': 'CV',
				'event_label': fileName
			});
		}
		console.log('Téléchargement du CV trackké');
	});
	
	// Lazy loading des images
	if ('loading' in HTMLImageElement.prototype) {
		const images = document.querySelectorAll('img[loading="lazy"]');
		images.forEach(img => {
			img.src = img.dataset.src;
		});
	} else {
		// Fallback pour les navigateurs qui ne supportent pas le lazy loading natif
		const script = document.createElement('script');
		script.src = 'https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js';
		document.body.appendChild(script);
	}
	
	// Protection anti-spam pour l'email (désobfuscation)
	$('.email-link').on('click', function(e) {
		e.preventDefault();
		var email = 'daniel.sah.pro@gmail.com';
		window.location.href = 'mailto:' + email;
	});
	
	// Console log personnalisé
	console.log('%c👨‍💻 Portfolio Daniel SAH', 'color: #007bff; font-size: 20px; font-weight: bold;');
	console.log('%cIngénieur Informaticien - Administration Systèmes & Réseaux', 'color: #6c757d; font-size: 14px;');
	console.log('%cSi vous êtes intéressé par une collaboration, contactez-moi :', 'color: #28a745; font-size: 12px;');
	console.log('%cdaniel.sah.pro@gmail.com', 'color: #007bff; font-size: 12px;');
	
})(jQuery);

// Fonction utilitaire pour détecter le type d'appareil
function detectDevice() {
	var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
	if (isMobile) {
		document.body.classList.add('mobile-device');
	} else {
		document.body.classList.add('desktop-device');
	}
}

// Appeler la fonction au chargement
detectDevice();

// Performance monitoring (optionnel)
window.addEventListener('load', function() {
	if (window.performance) {
		var loadTime = window.performance.timing.domContentLoadedEventEnd - window.performance.timing.navigationStart;
		console.log('⚡ Page chargée en ' + loadTime + 'ms');
		
		// Envoyer à Google Analytics si configuré
		if (typeof gtag !== 'undefined') {
			gtag('event', 'timing_complete', {
				'name': 'load',
				'value': loadTime,
				'event_category': 'Page Performance'
			});
		}
	}
});