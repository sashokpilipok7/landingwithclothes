<?php
session_start();
include "config/pixel.php";
include "site_info.php";
include "config/footer.php";
$period_cookie = 2592000; // 30 днів (2592000 секунд)
 
if($_GET){
setcookie("utm_source",$_GET['utm_source'],time()+$period_cookie);
setcookie("utm_medium", $_GET['utm_medium'],time()+$period_cookie);
setcookie("utm_term",$_GET['utm_term'],time()+$period_cookie);
setcookie("utm_content",$_GET['utm_content'],time()+$period_cookie);
setcookie("utm_campaign",$_GET['utm_campaign'],time()+$period_cookie);
}
 
if(!isset($_SESSION['utms'])) {
$_SESSION['utms'] = array();
$_SESSION['utms']['utm_source'] = '';
$_SESSION['utms']['utm_medium'] = '';
$_SESSION['utms']['utm_term'] = '';
$_SESSION['utms']['utm_content'] = '';
$_SESSION['utms']['utm_campaign'] = '';
}
$_SESSION['utms']['utm_source'] = $_GET['utm_source'] ? $_GET['utm_source'] : $_COOKIE['utm_source'];
$_SESSION['utms']['utm_medium'] = $_GET['utm_medium'] ? $_GET['utm_medium'] : $_COOKIE['utm_medium'];
$_SESSION['utms']['utm_term'] = $_GET['utm_term'] ? $_GET['utm_term'] : $_COOKIE['utm_term'];
$_SESSION['utms']['utm_content'] = $_GET['utm_content'] ? $_GET['utm_content'] : $_COOKIE['utm_content'];
$_SESSION['utms']['utm_campaign'] = $_GET['utm_campaign'] ? $_GET['utm_campaign'] : $_COOKIE['utm_campaign'];
?>

<!DOCTYPE html>
<html>

<!-- Mirrored from dellawer.com/products/vors/?utm_source=K1&utm_medium=1076&utm_campaign=KP8&utm_content=ABC&fbclid=IwAR33nl5tiKy3Z_2cxCE8WYf-4FatNKc48bs1izncFkdaOIz-6swPFS18Ocw_aem_ASgMrdPFec0_uHZa-4SGg0xZ_MtpRzR2p1lbW8Pr7h2Nwq4nF70G99z0jREud6XqEwKWYzk-psKjEeU07Ga1WVkmq4yB7VbJPE2IaLGDhxZWeysgVSHrsRwftL5lnKS7re8 by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Apr 2023 12:53:39 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

<meta property="og:locale" content="uk_UA">
  <meta property="og:site_name" content="Natural Store">
  <meta property="og:title" content="Магазин">
  <meta property="og:url" content="index.html">
  <meta property="og:type" content="website">
  <meta property="og:description" content="Cloth Brush &#8211; щітка для чистки одягу">
  <meta property="og:image" content="./dellawer.com/wp-content/uploads/2021/08/Cloth-Brush-1.jpg">
  <meta property="og:image:url" content="./dellawer.com/wp-content/uploads/2021/08/Cloth-Brush-1.jpg">
  <meta property="og:image:secure_url" content="./dellawer.com/wp-content/uploads/2021/08/Cloth-Brush-1.jpg">   
  <meta property="fb:app_id" content="458866821907239">   
  <meta charset="utf-8" />
  <meta name="viewport" content="width=480">
  <meta charset="UTF-8">
  <meta name="description" content="Интeрнeт-мaгaзин,быстрaя дoстaвкa,кaчeствeнный тoвaр,дoвoльныe клиeнты,нa рынкe прoдaж 10 лeт">

    <!-- Facebook Pixel Code -->
        <script>
        !function (f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
        n.callMethod?
        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if(!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
        }(window,
        document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '<?= $pixel ?>'); // Insert your pixel ID here.
        fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=<?= $pixel?>&ev=PageView&noscript=1"
        /></noscript>
        <!-- DO NOT MODIFY -->

            <script src="../../../code.jquery.com/jquery-2.2.2.min.js"></script>

  <title>Cloth Brush &#8211; щітка для чистки одягу &#8211;</title>
<script>
window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/","svgExt":".svg","source":{"wpemoji":"https:\/\/dellawer.com\/wp-includes\/js\/wp-emoji.js?ver=6.0.3","twemoji":"https:\/\/dellawer.com\/wp-includes\/js\/twemoji.js?ver=6.0.3"}};
/**
 * @output wp-includes/js/wp-emoji-loader.js
 */

( function( window, document, settings ) {
	var src, ready, ii, tests;

	// Create a canvas element for testing native browser support of emoji.
	var canvas = document.createElement( 'canvas' );
	var context = canvas.getContext && canvas.getContext( '2d' );

	/**
	 * Checks if two sets of Emoji characters render the same visually.
	 *
	 * @since 4.9.0
	 *
	 * @private
	 *
	 * @param {number[]} set1 Set of Emoji character codes.
	 * @param {number[]} set2 Set of Emoji character codes.
	 *
	 * @return {boolean} True if the two sets render the same.
	 */
	function emojiSetsRenderIdentically( set1, set2 ) {
		var stringFromCharCode = String.fromCharCode;

		// Cleanup from previous test.
		context.clearRect( 0, 0, canvas.width, canvas.height );
		context.fillText( stringFromCharCode.apply( this, set1 ), 0, 0 );
		var rendered1 = canvas.toDataURL();

		// Cleanup from previous test.
		context.clearRect( 0, 0, canvas.width, canvas.height );
		context.fillText( stringFromCharCode.apply( this, set2 ), 0, 0 );
		var rendered2 = canvas.toDataURL();

		return rendered1 === rendered2;
	}

	/**
	 * Detects if the browser supports rendering emoji or flag emoji.
	 *
	 * Flag emoji are a single glyph made of two characters, so some browsers
	 * (notably, Firefox OS X) don't support them.
	 *
	 * @since 4.2.0
	 *
	 * @private
	 *
	 * @param {string} type Whether to test for support of "flag" or "emoji".
	 *
	 * @return {boolean} True if the browser can render emoji, false if it cannot.
	 */
	function browserSupportsEmoji( type ) {
		var isIdentical;

		if ( ! context || ! context.fillText ) {
			return false;
		}

		/*
		 * Chrome on OS X added native emoji rendering in M41. Unfortunately,
		 * it doesn't work when the font is bolder than 500 weight. So, we
		 * check for bold rendering support to avoid invisible emoji in Chrome.
		 */
		context.textBaseline = 'top';
		context.font = '600 32px Arial';

		switch ( type ) {
			case 'flag':
				/*
				 * Test for Transgender flag compatibility. This flag is shortlisted for the Emoji 13 spec,
				 * but has landed in Twemoji early, so we can add support for it, too.
				 *
				 * To test for support, we try to render it, and compare the rendering to how it would look if
				 * the browser doesn't render it correctly (white flag emoji + transgender symbol).
				 */
				isIdentical = emojiSetsRenderIdentically(
					[ 0x1F3F3, 0xFE0F, 0x200D, 0x26A7, 0xFE0F ],
					[ 0x1F3F3, 0xFE0F, 0x200B, 0x26A7, 0xFE0F ]
				);

				if ( isIdentical ) {
					return false;
				}

				/*
				 * Test for UN flag compatibility. This is the least supported of the letter locale flags,
				 * so gives us an easy test for full support.
				 *
				 * To test for support, we try to render it, and compare the rendering to how it would look if
				 * the browser doesn't render it correctly ([U] + [N]).
				 */
				isIdentical = emojiSetsRenderIdentically(
					[ 0xD83C, 0xDDFA, 0xD83C, 0xDDF3 ],
					[ 0xD83C, 0xDDFA, 0x200B, 0xD83C, 0xDDF3 ]
				);

				if ( isIdentical ) {
					return false;
				}

				/*
				 * Test for English flag compatibility. England is a country in the United Kingdom, it
				 * does not have a two letter locale code but rather an five letter sub-division code.
				 *
				 * To test for support, we try to render it, and compare the rendering to how it would look if
				 * the browser doesn't render it correctly (black flag emoji + [G] + [B] + [E] + [N] + [G]).
				 */
				isIdentical = emojiSetsRenderIdentically(
					[ 0xD83C, 0xDFF4, 0xDB40, 0xDC67, 0xDB40, 0xDC62, 0xDB40, 0xDC65, 0xDB40, 0xDC6E, 0xDB40, 0xDC67, 0xDB40, 0xDC7F ],
					[ 0xD83C, 0xDFF4, 0x200B, 0xDB40, 0xDC67, 0x200B, 0xDB40, 0xDC62, 0x200B, 0xDB40, 0xDC65, 0x200B, 0xDB40, 0xDC6E, 0x200B, 0xDB40, 0xDC67, 0x200B, 0xDB40, 0xDC7F ]
				);

				return ! isIdentical;
			case 'emoji':
				/*
				 * Why can't we be friends? Everyone can now shake hands in emoji, regardless of skin tone!
				 *
				 * To test for Emoji 14.0 support, try to render a new emoji: Handshake: Light Skin Tone, Dark Skin Tone.
				 *
				 * The Handshake: Light Skin Tone, Dark Skin Tone emoji is a ZWJ sequence combining 🫱 Rightwards Hand,
				 * 🏻 Light Skin Tone, a Zero Width Joiner, 🫲 Leftwards Hand, and 🏿 Dark Skin Tone.
				 *
				 * 0x1FAF1 == Rightwards Hand
				 * 0x1F3FB == Light Skin Tone
				 * 0x200D == Zero-Width Joiner (ZWJ) that links the code points for the new emoji or
				 * 0x200B == Zero-Width Space (ZWS) that is rendered for clients not supporting the new emoji.
				 * 0x1FAF2 == Leftwards Hand
				 * 0x1F3FF == Dark Skin Tone.
				 *
				 * When updating this test for future Emoji releases, ensure that individual emoji that make up the
				 * sequence come from older emoji standards.
				 */
				isIdentical = emojiSetsRenderIdentically(
					[0x1FAF1, 0x1F3FB, 0x200D, 0x1FAF2, 0x1F3FF],
					[0x1FAF1, 0x1F3FB, 0x200B, 0x1FAF2, 0x1F3FF]
				);

				return ! isIdentical;
		}

		return false;
	}

	/**
	 * Adds a script to the head of the document.
	 *
	 * @ignore
	 *
	 * @since 4.2.0
	 *
	 * @param {Object} src The url where the script is located.
	 * @return {void}
	 */
	function addScript( src ) {
		var script = document.createElement( 'script' );

		script.src = src;
		script.defer = script.type = 'text/javascript';
		document.getElementsByTagName( 'head' )[0].appendChild( script );
	}

	tests = Array( 'flag', 'emoji' );

	settings.supports = {
		everything: true,
		everythingExceptFlag: true
	};

	/*
	 * Tests the browser support for flag emojis and other emojis, and adjusts the
	 * support settings accordingly.
	 */
	for( ii = 0; ii < tests.length; ii++ ) {
		settings.supports[ tests[ ii ] ] = browserSupportsEmoji( tests[ ii ] );

		settings.supports.everything = settings.supports.everything && settings.supports[ tests[ ii ] ];

		if ( 'flag' !== tests[ ii ] ) {
			settings.supports.everythingExceptFlag = settings.supports.everythingExceptFlag && settings.supports[ tests[ ii ] ];
		}
	}

	settings.supports.everythingExceptFlag = settings.supports.everythingExceptFlag && ! settings.supports.flag;

	// Sets DOMReady to false and assigns a ready function to settings.
	settings.DOMReady = false;
	settings.readyCallback = function() {
		settings.DOMReady = true;
	};

	// When the browser can not render everything we need to load a polyfill.
	if ( ! settings.supports.everything ) {
		ready = function() {
			settings.readyCallback();
		};

		/*
		 * Cross-browser version of adding a dom ready event.
		 */
		if ( document.addEventListener ) {
			document.addEventListener( 'DOMContentLoaded', ready, false );
			window.addEventListener( 'load', ready, false );
		} else {
			window.attachEvent( 'onload', ready );
			document.attachEvent( 'onreadystatechange', function() {
				if ( 'complete' === document.readyState ) {
					settings.readyCallback();
				}
			} );
		}

		src = settings.source || {};

		if ( src.concatemoji ) {
			addScript( src.concatemoji );
		} else if ( src.wpemoji && src.twemoji ) {
			addScript( src.twemoji );
			addScript( src.wpemoji );
		}
	}

} )( window, document, window._wpemojiSettings );
</script>
<style>
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 0.07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel='stylesheet' id='wp-block-library-css'  href='./dellawer.com/wp-includes/css/dist/block-library/style1eb7.css?ver=6.0.3' media='all' />
<style id='global-styles-inline-css'>
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
</style>
<link rel='stylesheet' id='style-css'  href='./dellawer.com/wp-content/themes/aleestore/css/style1eb7.css?ver=6.0.3' media='all' />
<link rel='stylesheet' id='timer-css'  href='./dellawer.com/wp-content/themes/aleestore/css/timer1eb7.css?ver=6.0.3' media='all' />
<link rel='stylesheet' id='slick-css'  href='./dellawer.com/wp-content/themes/aleestore/css/slick1eb7.css?ver=6.0.3' media='all' />
<link rel='stylesheet' id='settings-css'  href='./dellawer.com/wp-content/themes/aleestore/css/settings1eb7.css?ver=6.0.3' media='all' />
<link rel='stylesheet' id='normalize-css'  href='./dellawer.com/wp-content/themes/aleestore/css/normalize1eb7.css?ver=6.0.3' media='all' />
<link rel='stylesheet' id='style-frontpage-css'  href='./dellawer.com/wp-content/themes/aleestore/css/style-frontpage1eb7.css?ver=6.0.3' media='all' />
<script src='./dellawer.com/wp-includes/js/jquery/jqueryaf6c.js?ver=3.6.0' id='jquery-core-js'></script>
<script src='./dellawer.com/wp-includes/js/jquery/jquery-migrated617.js?ver=3.3.2' id='jquery-migrate-js'></script>
<!-- <link rel="https://api.w.org/" href="https://dellawer.com/wp-json/" /><link rel="alternate" type="application/json" href="https://dellawer.com/wp-json/wp/v2/products/273" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://dellawer.com/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://dellawer.com/wp-includes/wlwmanifest.xml" />  -->
<meta name="generator" content="WordPress 6.0.3" />
<link rel="canonical" href="index.html" />
<!-- <link rel='shortlink' href='https://dellawer.com/?p=273' /> -->
<!-- <link rel="alternate" type="application/json+oembed" href="https://dellawer.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdellawer.com%2Fproducts%2Fvors%2F" /> -->
<!-- <link rel="alternate" type="text/xml+oembed" href="https://dellawer.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdellawer.com%2Fproducts%2Fvors%2F&amp;format=xml" /> -->
<link rel="shortcut icon" href="favicon.png" >
</head>
<div class="product-page">
    <!-- after_qbici -->
    <style>
            .sale{
        margin-top: 18%;
        margin-left: 15%;
    }
    </style>
    <div style="display:none">Array
(
    [utms] => Array
        (
            [utm_source] => K1
            [utm_medium] => 1076
            [utm_term] => 
            [utm_content] => ABC
            [utm_campaign] => KP8
        )

)
</div>
  <div class="wrap">
        <section class="b1" style="background-image: url('./dellawer.com/wp-content/uploads/2021/08/Cloth-Brush-1.jpg')">
            <div class="block1-pod"></div>
                        <h2 style="font-size: 30px; margin-bottom: px; color: #000000">Щітка для одягу</h2>
                        <h1 style ="-webkit-text-fill-color: #eeee22; font-size: px"></h1>
            <div class="sale" style ="background-color: #e8e820">Aкцiя! <p>-35%</p> знижка</div>



        </section>
        <div class="price clearfix">
                        <div class="old-cost"><span><?=$old?>грн</span></div>
            <div class="new-cost"><?=$price?>грн</div>
        </div>
        <div style ="font-size: 13px; margin-bottom: 20px; text-align: center;">*- Цiну знижено через випуск нової моделi. Додаткову iнформацiю Вам надасть наш менеджер. Ваша розмова може бути записана з метою покращення якостi обслуговування.</div>
        <div class="proposition" style ="font-size: 13px">*- Акція триває з 05.04.2023  по 09.04.2023</div>
        <a href="index.html#" class="button-m" style="top:-30px;">зробити замовлення</a>
        <p class="stock" style="top:-20px;color:#000;">Залишилось <span>5</span> одиниць</p>
        <!-- michael-k90 -->
                <div class="additional-sale">
            <h2 class="title"><span>Заощаджуй прямо зараз!</span></h2>
            <p>
                <b>2 шт </b>
                <span>= <?=$sale?>грн (знижка <b>10%</b>)</span>
                <b></b>
            </p>
            <p>
                <b>3 шт </b>
                <span>= 762грн(знижка <b>15%</b>)</span>
                <b></b>
            </p>
            <p>
                <b>4 шт </b>
                <span>= 956грн(знижка <b>20%</b>)</span>
                <b></b>
            </p>

        </div>
                

        <section class="b2">
                        <h2 class="title">ВIДНОВИ УЛЮБЛЕНИЙ ОДЯГ <span>ВСЬОГО ЗА ПАРУ ХВИЛИН</span></h2>
            <p>
            <picture>

                <img src="./dellawer.com/wp-content/uploads/2021/08/Cloth-Brush-2.jpg">
            </picture>
            </p>
            <p>Інструмент зроблений спеціально для кашеміру і тонкої вовни. Не викидайте свої улюблені светри, коли всього за кілька хвилин ви зможете видалити ворс, ковтунці, пух або шерсть домашніх улюбленців. Портативний ручний інструмент для видалення волокон на відміну від акумуляторних електричних машин, не витрачає та не потребує електроенергії, і використовувати його можна вручну, що просто і зручно. Для видалення будь-яких ворсинок використовується мідна голівка, міцна і потужна, забезпечує тривалий термін служби, легко видалить шерсть домашніх тварин, бавовняний оксамит тощо.</p>
<pre><video class="product" src="https://bandatips.com/wp-content/uploads/2021/08/Cloth-Brush-video.mp4" autoplay="autoplay" loop="loop" muted="" width="480" height="480"></video></pre>
<p class="center-justified"><b>Як користуватися:</b></p>
<ul>
<li class="tab3">1.Покладіть тканину яку хочете поголити на рівну поверхню.</li>
<li class="tab3">2.Проведіть щіткою в одну сторону з невеликим тиском</li>
<li class="tab3">3.Видаліть ковтунці, пух, ворс або шерсть.</li>
<li class="tab3">4.Вітаємо! Ваш одяг знову виглядає ідеально!</li>
</ul>
<p><img loading="lazy" class="aligncenter wp-image-283" src="../../../bandatips.com/wp-content/uploads/2021/08/Cloth-Brush-3.jpg" alt="" width="530" height="524" /><br />
Портативна бритва це друге життя для Вашого одягу. Унікально розроблена мідна головка Lint Remover видаляє ковтунці, шерсть та волосся не пошкоджуючи тканину. Тканина після гоління м&#8217;яка і як нова!</p>

        </section>

        <!-- bizlife_inc -->
        <section class="b3" style="margin-top: -10px;">
                    <h2 class="title">Легко та<span>Ефективно</span></h2>
            <p>

                <img src="./dellawer.com/wp-content/uploads/2021/08/Cloth-Brush-4.jpg">
            </p>
            <p class="center-justified"><b>Особливості</b></p>
<ul>
<li class="tab3">Дуже міцний</li>
<li class="tab3">Насадка легко знімається та чиститься</li>
<li class="tab3">Стійкий до вологи</li>
<li class="tab3">Портативний</li>
<li class="tab3">Відновлює будь-яку тканину</li>
<li class="tab3">Впорається навіть із піском</li>
<li class="tab3">Країна виробник: Польща</li>
</ul>
            <!-- <ul class="plus">
                            </ul> -->
            <a href="#buy" class="button-m" style="margin-top: 30px;">зробити замовлення</a>
        </section>
        <!-- owmen17 -->
        <style>
            /* benefits 2 */
                .b2>ul{
                    margin-left: 20px;
                    margin-right: 20px;
                }
                
            .benefits_list2 {
                margin: 0 10px;
                font-size: 0;
                line-height: 0;
                letter-spacing: -1px;
                text-align: center;
            }

            .benefits_list2 .benefit_item {
                display: inline-block;
                vertical-align: top;
                padding: 0 10px 30px;
                width: 50%;
                font-size: 15px;
                line-height: 22px;
                letter-spacing: normal;
            }

            .benefits_list2 .benefit_item img {
                display: block;
                margin: 0 auto 15px;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
            }

            .benefits_list2 .benefit_item h4 {
                font-weight: 700;
                font-size: 22px;
                line-height: 24px;
            }
            .m1-form select.input {
                position: relative;
                display: block;
                outline: 0;
                border: none;
                border-radius: 4px;
                -webkit-border-radius: 4px;
                width: 100%;
                height: 84px;
                line-height: 84px;
                margin: 0 auto 20px;
                padding: 0 20px;
                background: #fff;
                text-align: center;
                font-size: 18px;
                font-family: 'Open Sans', sans-serif;
                font-weight: 400;
                color: #222;
                -webkit-transition: all .2s;
                -moz-transition: all .2s;
                -o-transition: all .2s;
                -ms-transition: all .2s;
                transition: all .2s;
            }
        </style>
        <!-- after_qbici -->
        <section class="b5">
            <h2 class="title">як зробити <span style = "color: #fdd800">замовлення?</span></h2>
            <ul class="ship">
                <li><span></span>
                    <p>Залишаєте заявку на сайтi</p>
                </li>
                <li><span></span>
                    <p>Нaш мeнeджeр утoчнює деталi замовлення</p>
                </li>
                <li><span></span>
                    <p>Службa дoстaвки дoстaвляє Ваш товар</p>
                </li>
                <li><span></span>
                    <p>Оплачуєте при отриманнi</p>
                </li>
            </ul>
        </section>
        <!-- endzeit_____ -->
        <section class="b6">
            <h2 class="title">вiдгуки <span>пoкупцiв</span></h2>
            <div class="reviews">
                                <div>
                    <img src="./dellawer.com/wp-content/uploads/2021/08/Cloth-Brush-5.jpg">
                              <h3>Олександр Борисенко, 30 років</h3>
                    <p class="center">Я купив собі таку штукенцію аби спробувати на своєму улюбленному светрі. Купував його ще в далекі часи моєї молодості, тому він для мене дуже дорогий. Кілька хвилин зусиль і все готово, відчуваю себе знов на 20.</p>
                </div>
                                    <div>
                    <img src="./dellawer.com/wp-content/uploads/2021/08/Cloth-Brush-6.jpg">
                              <h3>Олена Петухова, 46 років</h3>
                    <p class="center">Відмінна Якість!! Все просто та легко у використанні. Чистить і відновлює. 100% рекомендую, в господарстві знадобиться кожному, я впевнена в цьому!</p>
                </div>
                                    <div>
                    <img src="./dellawer.com/wp-content/uploads/2021/08/Cloth-Brush-7.jpg">
                              <h3>Андрій Довбуш, 54 роки</h3>
                    <p class="center">Я з цим інструментом проблем не знаю. Від мого кота шерсті в квартирі повно, весь одяг в ній... Річ дуже корисна, я задоволений. Пару хвилин обробки і одяг виглядає як новий.</p>
                </div>
                                </div>
        </section>
        <!-- michael-k90 -->
        <section class="b7" >
            <h2>зaмовляйте прямo зараз</h2>
        </section>
        <!-- bizlife_inc -->
        <section class="b1 end" style="background-image: url('./dellawer.com/wp-content/uploads/2021/08/Cloth-Brush-1.jpg')">
            <div class="block1-pod"></div>
            <h2 style="font-size: 30px; margin-bottom: px; color: #000000">Щітка для одягу</h2>
            <h1 style ="-webkit-text-fill-color: #eeee22; font-size: px"></h1>
            
                        <div class="sale" style ="background-color: #e8e820">Aкцiя! <p>-35%</p> знижка</div>
  
        </section>
        <!-- endzeit_____ -->
        <section class="b8" >

            <div class="price clearfix" style="top:0px">
                            <div class="old-cost"><span><?=$old?>грн</span></div>
                <div class="new-cost"><?=$price?>грн</div>
            </div>
            <div style ="font-size: 13px; margin: 20px 0; text-align: center; color: white;">*- Цiну знижено через випуск нової моделi. Додаткову iнформацiю Вам надасть наш менеджер. Ваша розмова може бути записана з метою покращення якостi обслуговування.</div>
            <div class="proposition" style ="font-size: 13px; color: white; margin-bottom: 20px">*- Акція триває з 05.04.2023  по 09.04.2023</div>

                        <form id="buy" class="m1-form" action="rq.php" method="post" onsubmit="fbq('track', 'Lead'); return true;">
                <input class="field" name="name" type="text" placeholder="Ввeдіть Ваше ім'я" required>
                <input class="field" name="phone" type="tel" pattern="((\+38)?\(?\d{3}\)?[\s\.-]?(\d{7}|\d{3}[\s\.-]\d{2}[\s\.-]\d{2}|\d{3}-\d{4}))" placeholder="Ввeдіть Вaш тeлeфoн" required>
                <input type="hidden" name="product_id" value="<?=$product_id?>" />
                <input type="hidden" name="product_price" value="<?=$price?>" />
                <input type="hidden" name="product_name" value="<?=$product_name?>" />
                <input type="hidden" name="count" value="<?=$count?>" />
                <button class="button-m button-submit" onclick="return gtag_report_conversion('https://dellawer.com/dop' );">зробити замовлення</button>
            </form>
            
            
                                <br>
            <p class="stock">Залишилось<span>5</span> одиниць</p>
        </section>
        <div class="images">
        <img src="./dellawer.com/wp-content/uploads/2022/10/paymethod.jpg"  alt="Оплата при отриманні!" class="payment">
        <img src="./dellawer.com/wp-content/uploads/2021/11/Banner3.jpg" alt="Доставка Новою Поштою!" class="delivery">
        <img src="./dellawer.com/wp-content/uploads/2021/11/Banner-4.jpg" alt="Доставка Укрпоштою!" class="delivery">
    </div>
        <?=$footer?>
<!-- <footer class="footer">
            <p><a class="politics" href="https://dellawer.com/site">МАГАЗИН НАШИХ ТОВАРIВ</a></p>
<p>Інтернет-магазин &#8220;Media GoAds&#8221;</p>
<p>40000, Суми, Зарічний район</p>
<p>ЄДРПОУ: 3593303731</p>
<p>Телефон гарячої лінії: 380675029495</p>
<p>Електронна адреса для зв’язку: mediagoads@gmail.com</p>
<p><a class="politics" href="https://dellawer.com/politics" target="_blank" rel="noopener">Політика конфіденційності</a></p>
<p><a class="politics" href="https://dellawer.com/cookies" target="_blank" rel="noopener">Файли cookie</a></p>
<p><a class="politics" href="https://dellawer.com/oferta" target="_blank" rel="noopener">Публічна оферта</a></p>
<p><a class="politics" href="https://dellawer.com/oplata" target="_blank" rel="noopener">Оплата та доставка</a></p>
</footer> -->
</div>
    <div class="modal hide">
        <div class="modal-block">
            <h3>Почекайте, ваше замовлення обробляється</h3>
            <img src="./dellawer.com/wp-content/themes/aleestore/img/loading.gif" alt="">
        </div>
    </div>
    <script>
        let formField = document.querySelectorAll('.field');
            console.log(formField);
            window.addEventListener("pageshow", ()=>
            {
                formField.forEach(formField => {
                formField.value = '';
                })
            });
    </script>
    <script>
        document.querySelector('#buy').addEventListener('submit', () => {
            document.querySelector('.modal').classList.remove('hide')
            document.querySelector('html').classList.add('noscroll')
        })
    </script>
    <script id="ss-gadget" src="../../../customer.smartsender.eu/js/client/gd.min081a.js?v2.0.0" data-target="B6mDczTr" data-domain="mediagoads"></script>
    <script src='./dellawer.com/wp-content/themes/aleestore/js/navigation8a54.js?ver=1.0.0' id='aleestore-navigation-js'></script>
<script src='./dellawer.com/wp-content/themes/aleestore/js/count8a54.js?ver=1.0.0' id='count-js'></script>
<script src='./dellawer.com/wp-content/themes/aleestore/js/main8a54.js?ver=1.0.0' id='main-js'></script>
<script src='./dellawer.com/wp-content/themes/aleestore/js/maskedinput8a54.js?ver=1.0.0' id='maskedinput-js'></script>
<script src='./dellawer.com/wp-content/themes/aleestore/js/previewYouTube8a54.js?ver=1.0.0' id='previewYouTube-js'></script>
<script src='./dellawer.com/wp-content/themes/aleestore/js/slick.min8a54.js?ver=1.0.0' id='slick-js'></script>
</div>
</body>


<!-- Mirrored from dellawer.com/products/vors/?utm_source=K1&utm_medium=1076&utm_campaign=KP8&utm_content=ABC&fbclid=IwAR33nl5tiKy3Z_2cxCE8WYf-4FatNKc48bs1izncFkdaOIz-6swPFS18Ocw_aem_ASgMrdPFec0_uHZa-4SGg0xZ_MtpRzR2p1lbW8Pr7h2Nwq4nF70G99z0jREud6XqEwKWYzk-psKjEeU07Ga1WVkmq4yB7VbJPE2IaLGDhxZWeysgVSHrsRwftL5lnKS7re8 by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Apr 2023 12:53:47 GMT -->
</html><script>
    const buySection = document.getElementById("buy");
    const scrollButtons = document.querySelectorAll('.button-m:not(.button-submit)');

    scrollButtons.forEach(button => {
        button.addEventListener('click', () => {
            event.preventDefault();
            buySection.scrollIntoView();
        })
    })
</script>
<!-- Page generated by LiteSpeed Cache 5.3.3 on 2023-04-08 13:48:21 -->