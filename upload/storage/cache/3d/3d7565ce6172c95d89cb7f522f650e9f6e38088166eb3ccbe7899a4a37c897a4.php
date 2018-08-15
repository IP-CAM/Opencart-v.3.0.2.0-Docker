<?php

/* materialize/template/extension/module/photoswipe.twig */
class __TwigTemplate_e9643a8f17300d84d2ba591e3b23e57ded1506619f30c20918976413400bbeaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"slider-for center photo-swipe\" itemscope itemtype=\"http://schema.org/ImageGallery\">
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 3
            echo "\t<figure itemprop=\"associatedMedia\" itemscope itemtype=\"http://schema.org/ImageObject\">
\t\t<a href=\"";
            // line 4
            echo $this->getAttribute($context["image"], "popup", array());
            echo "\" itemprop=\"contentUrl\" data-size=\"";
            echo (isset($context["data_size"]) ? $context["data_size"] : null);
            echo "\">
\t\t\t<img id=\"";
            // line 5
            echo $this->getAttribute($context["image"], "zoom_id", array());
            echo "\" class=\"responsive-img lazyload\" src=\"";
            echo (isset($context["img_loader"]) ? $context["img_loader"] : null);
            echo "\" data-src=\"";
            echo $this->getAttribute($context["image"], "preview", array());
            echo "\" itemprop=\"thumbnail\" title=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" alt=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\">
\t\t</a>
\t\t<figcaption class=\"center\" itemprop=\"caption description\">";
            // line 7
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</figcaption>
\t</figure>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</div>
";
        // line 11
        if ((isset($context["thumb_images"]) ? $context["thumb_images"] : null)) {
            // line 12
            echo "<div class=\"slider-nav\">
\t";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 14
                echo "\t<img class=\"responsive-img lazyload\" src=\"";
                echo (isset($context["img_loader"]) ? $context["img_loader"] : null);
                echo "\" data-src=\"";
                echo $this->getAttribute($context["image"], "thumb", array());
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\">
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "</div>
";
        }
        // line 18
        echo "
<div class=\"pswp\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
\t<div class=\"pswp__bg\"></div>
\t<div class=\"pswp__scroll-wrap\">
\t\t<div class=\"pswp__container\">
\t\t\t<div class=\"pswp__item\"></div>
\t\t\t<div class=\"pswp__item\"></div>
\t\t\t<div class=\"pswp__item\"></div>
\t\t</div>
\t\t<div class=\"pswp__ui pswp__ui--hidden\">
\t\t\t<div class=\"pswp__top-bar\">
\t\t\t\t<div class=\"pswp__counter\"></div>
\t\t\t\t<button class=\"pswp__button pswp__button--close\" title=\"";
        // line 30
        echo (isset($context["button_pswp_close"]) ? $context["button_pswp_close"] : null);
        echo "\"></button>
\t\t\t\t<button class=\"pswp__button pswp__button--share\" title=\"";
        // line 31
        echo (isset($context["button_share"]) ? $context["button_share"] : null);
        echo "\"></button>
\t\t\t\t<button class=\"pswp__button pswp__button--fs\" title=\"";
        // line 32
        echo (isset($context["button_pswp_toggle_fullscreen"]) ? $context["button_pswp_toggle_fullscreen"] : null);
        echo "\"></button>
\t\t\t\t<button class=\"pswp__button pswp__button--zoom\" title=\"";
        // line 33
        echo (isset($context["button_pswp_zoom"]) ? $context["button_pswp_zoom"] : null);
        echo "\"></button>
\t\t\t\t<div class=\"pswp__preloader\">
\t\t\t\t\t<div class=\"pswp__preloader__icn\">
\t\t\t\t\t\t<div class=\"pswp__preloader__cut\">
\t\t\t\t\t\t\t<div class=\"pswp__preloader__donut\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"pswp__share-modal pswp__share-modal--hidden pswp__single-tap\">
\t\t\t\t<div class=\"pswp__share-tooltip\"></div>
\t\t\t</div>
\t\t\t<button class=\"pswp__button pswp__button--arrow--left\" title=\"";
        // line 45
        echo (isset($context["button_pswp_prev"]) ? $context["button_pswp_prev"] : null);
        echo "\"></button>
\t\t\t<button class=\"pswp__button pswp__button--arrow--right\" title=\"";
        // line 46
        echo (isset($context["button_pswp_next"]) ? $context["button_pswp_next"] : null);
        echo "\"></button>
\t\t\t<div class=\"pswp__caption\">
\t\t\t\t<div class=\"pswp__caption__center\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<script>
\tvar initPhotoSwipeFromDOM = function(gallerySelector) {
\t\tvar parseThumbnailElements = function(el) {
\t\t\tvar thumbElements = el.childNodes,
\t\t\tnumNodes = thumbElements.length,
\t\t\titems = [], figureEl, linkEl, size, item;
\t\t\tfor(var i = 0; i < numNodes; i++) {
\t\t\t\tfigureEl = thumbElements[i];
\t\t\t\tif(figureEl.nodeType !== 1) {
\t\t\t\t\tcontinue;
\t\t\t\t}
\t\t\t\tlinkEl = figureEl.children[0];
\t\t\t\tsize = linkEl.getAttribute('data-size').split('x');
\t\t\t\titem = {
\t\t\t\t\tsrc: linkEl.getAttribute('href'),
\t\t\t\t\tw: parseInt(size[0], 10),
\t\t\t\t\th: parseInt(size[1], 10)
\t\t\t\t};
\t\t\t\tif(figureEl.children.length > 1) {
\t\t\t\t\titem.title = figureEl.children[1].innerHTML;
\t\t\t\t}
\t\t\t\tif(linkEl.children.length > 0) {
\t\t\t\t\titem.msrc = linkEl.children[0].getAttribute('src');
\t\t\t\t}
\t\t\t\titem.el = figureEl;
\t\t\t\titems.push(item);
\t\t\t}
\t\t\treturn items;
\t\t};
\t\tvar closest = function closest(el, fn) {
\t\t\treturn el && (fn(el) ? el : closest(el.parentNode, fn));
\t\t};
\t\tvar onThumbnailsClick = function(e) {
\t\t\te = e || window.event;
\t\t\te.preventDefault ? e.preventDefault() : e.returnValue = false;
\t\t\tvar eTarget = e.target || e.srcElement;
\t\t\tvar clickedListItem = closest(eTarget, function(el) {
\t\t\t\treturn (el.tagName && el.tagName.toUpperCase() === 'FIGURE');
\t\t\t});
\t\t\tif(!clickedListItem) {
\t\t\t\treturn;
\t\t\t}
\t\t\tvar clickedGallery = clickedListItem.parentNode,
\t\t\tchildNodes = clickedListItem.parentNode.childNodes,
\t\t\tnumChildNodes = childNodes.length,
\t\t\tnodeIndex = 0,
\t\t\tindex;
\t\t\tfor (var i = 0; i < numChildNodes; i++) {
\t\t\t\tif(childNodes[i].nodeType !== 1) {
\t\t\t\t\tcontinue;
\t\t\t\t}
\t\t\t\tif(childNodes[i] === clickedListItem) {
\t\t\t\t\tindex = nodeIndex;
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t\tnodeIndex++;
\t\t\t}
\t\t\tif(index >= 0) {
\t\t\t\topenPhotoSwipe( index, clickedGallery );
\t\t\t}
\t\t\treturn false;
\t\t};
\t\tvar photoswipeParseHash = function() {
\t\t\tvar hash = window.location.hash.substring(1),
\t\t\tparams = {};
\t\t\tif(hash.length < 5) {
\t\t\t\treturn params;
\t\t\t}
\t\t\tvar vars = hash.split('&');
\t\t\tfor (var i = 0; i < vars.length; i++) {
\t\t\t\tif(!vars[i]) {
\t\t\t\t\tcontinue;
\t\t\t\t}
\t\t\t\tvar pair = vars[i].split('=');
\t\t\t\t\tif(pair.length < 2) {
\t\t\t\t\t\tcontinue;
\t\t\t\t\t}
\t\t\t\tparams[pair[0]] = pair[1];
\t\t\t}
\t\t\tif(params.gid) {
\t\t\t\tparams.gid = parseInt(params.gid, 10);
\t\t\t}
\t\t\treturn params;
\t\t};
\t\tvar openPhotoSwipe = function(index, galleryElement, disableAnimation, fromURL) {
\t\t\tvar pswpElement = document.querySelectorAll('.pswp')[0],
\t\t\tgallery, options, items;
\t\t\titems = parseThumbnailElements(galleryElement);
\t\t\toptions = {
\t\t\t\tgalleryUID: galleryElement.getAttribute('data-pswp-uid'),
\t\t\t\tgetThumbBoundsFn: function(index) {
\t\t\t\t\tvar thumbnail = items[index].el.getElementsByTagName('img')[0],
\t\t\t\t\tpageYScroll = window.pageYOffset || document.documentElement.scrollTop,
\t\t\t\t\trect = thumbnail.getBoundingClientRect();
\t\t\t\t\treturn {x:rect.left, y:rect.top + pageYScroll, w:rect.width};
\t\t\t\t}
\t\t\t};
\t\t\tif(fromURL) {
\t\t\t\tif(options.galleryPIDs) {
\t\t\t\t\tfor(var j = 0; j < items.length; j++) {
\t\t\t\t\t\tif(items[j].pid == index) {
\t\t\t\t\t\t\toptions.index = j;
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\toptions.index = parseInt(index, 10) - 1;
\t\t\t\t}
\t\t\t} else {
\t\t\t\toptions.index = parseInt(index, 10);
\t\t\t}
\t\t\tif(isNaN(options.index)) {
\t\t\t\treturn;
\t\t\t}
\t\t\tif(disableAnimation) {
\t\t\t\toptions.showAnimationDuration = 0;
\t\t\t}
\t\t\tgallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
\t\t\tgallery.init();
\t\t};
\t\tvar galleryElements = document.querySelectorAll(gallerySelector);
\t\tfor(var i = 0, l = galleryElements.length; i < l; i++) {
\t\t\tgalleryElements[i].setAttribute('data-pswp-uid', i+1);
\t\t\tgalleryElements[i].onclick = onThumbnailsClick;
\t\t}
\t\tvar hashData = photoswipeParseHash();
\t\tif(hashData.pid && hashData.gid) {
\t\t\topenPhotoSwipe( hashData.pid ,  galleryElements[ hashData.gid - 1 ], true, true );
\t\t}
\t};
\tinitPhotoSwipeFromDOM('.photo-swipe');

\tdocument.addEventListener(\"DOMContentLoaded\", function(event) {
\t\t\$('.slider-for').not('.slick-initialized').slick({
\t\t\tslidesToShow: 1,
\t\t\tslidesToScroll: 1,
\t\t\tarrows: true,
\t\t\tfade: true,
\t\t\tmobileFirst: true,
\t\t\tasNavFor: '.slider-nav'
\t\t});

\t\t";
        // line 196
        if ((isset($context["thumb_images"]) ? $context["thumb_images"] : null)) {
            // line 197
            echo "\t\t\$('.slider-nav').not('.slick-initialized').slick({
\t\t\tslidesToShow: 4,
\t\t\tslidesToScroll: 4,
\t\t\tasNavFor: '.slider-for',
\t\t\tcenterMode: false,
\t\t\tarrows: false,
\t\t\tinfinite: false,
\t\t\tfocusOnSelect: true
\t\t});
\t\t";
        }
        // line 207
        echo "
\t\t";
        // line 208
        if ((isset($context["image_zoom"]) ? $context["image_zoom"] : null)) {
            // line 209
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 210
                echo "\t\t\t\$('#";
                echo $this->getAttribute($context["image"], "zoom_id", array());
                echo "').wrap('<span style=\"display:inline-block\"></span>').css('display', 'block').parent().zoom({
\t\t\t\turl: '";
                // line 211
                echo $this->getAttribute($context["image"], "popup", array());
                echo "'
\t\t\t});
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 214
            echo "\t\t";
        }
        // line 215
        echo "\t});
</script>";
    }

    public function getTemplateName()
    {
        return "materialize/template/extension/module/photoswipe.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 215,  324 => 214,  315 => 211,  310 => 210,  305 => 209,  303 => 208,  300 => 207,  288 => 197,  286 => 196,  133 => 46,  129 => 45,  114 => 33,  110 => 32,  106 => 31,  102 => 30,  88 => 18,  84 => 16,  69 => 14,  65 => 13,  62 => 12,  60 => 11,  57 => 10,  48 => 7,  35 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="slider-for center photo-swipe" itemscope itemtype="http://schema.org/ImageGallery">*/
/* 	{% for image in images %}*/
/* 	<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">*/
/* 		<a href="{{ image.popup }}" itemprop="contentUrl" data-size="{{ data_size }}">*/
/* 			<img id="{{ image.zoom_id }}" class="responsive-img lazyload" src="{{ img_loader }}" data-src="{{ image.preview }}" itemprop="thumbnail" title="{{ heading_title }}" alt="{{ heading_title }}">*/
/* 		</a>*/
/* 		<figcaption class="center" itemprop="caption description">{{ heading_title }}</figcaption>*/
/* 	</figure>*/
/* 	{% endfor %}*/
/* </div>*/
/* {% if thumb_images %}*/
/* <div class="slider-nav">*/
/* 	{% for image in images %}*/
/* 	<img class="responsive-img lazyload" src="{{ img_loader }}" data-src="{{ image.thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}">*/
/* 	{% endfor %}*/
/* </div>*/
/* {% endif %}*/
/* */
/* <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">*/
/* 	<div class="pswp__bg"></div>*/
/* 	<div class="pswp__scroll-wrap">*/
/* 		<div class="pswp__container">*/
/* 			<div class="pswp__item"></div>*/
/* 			<div class="pswp__item"></div>*/
/* 			<div class="pswp__item"></div>*/
/* 		</div>*/
/* 		<div class="pswp__ui pswp__ui--hidden">*/
/* 			<div class="pswp__top-bar">*/
/* 				<div class="pswp__counter"></div>*/
/* 				<button class="pswp__button pswp__button--close" title="{{ button_pswp_close }}"></button>*/
/* 				<button class="pswp__button pswp__button--share" title="{{ button_share }}"></button>*/
/* 				<button class="pswp__button pswp__button--fs" title="{{ button_pswp_toggle_fullscreen }}"></button>*/
/* 				<button class="pswp__button pswp__button--zoom" title="{{ button_pswp_zoom }}"></button>*/
/* 				<div class="pswp__preloader">*/
/* 					<div class="pswp__preloader__icn">*/
/* 						<div class="pswp__preloader__cut">*/
/* 							<div class="pswp__preloader__donut"></div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">*/
/* 				<div class="pswp__share-tooltip"></div>*/
/* 			</div>*/
/* 			<button class="pswp__button pswp__button--arrow--left" title="{{ button_pswp_prev }}"></button>*/
/* 			<button class="pswp__button pswp__button--arrow--right" title="{{ button_pswp_next }}"></button>*/
/* 			<div class="pswp__caption">*/
/* 				<div class="pswp__caption__center"></div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <script>*/
/* 	var initPhotoSwipeFromDOM = function(gallerySelector) {*/
/* 		var parseThumbnailElements = function(el) {*/
/* 			var thumbElements = el.childNodes,*/
/* 			numNodes = thumbElements.length,*/
/* 			items = [], figureEl, linkEl, size, item;*/
/* 			for(var i = 0; i < numNodes; i++) {*/
/* 				figureEl = thumbElements[i];*/
/* 				if(figureEl.nodeType !== 1) {*/
/* 					continue;*/
/* 				}*/
/* 				linkEl = figureEl.children[0];*/
/* 				size = linkEl.getAttribute('data-size').split('x');*/
/* 				item = {*/
/* 					src: linkEl.getAttribute('href'),*/
/* 					w: parseInt(size[0], 10),*/
/* 					h: parseInt(size[1], 10)*/
/* 				};*/
/* 				if(figureEl.children.length > 1) {*/
/* 					item.title = figureEl.children[1].innerHTML;*/
/* 				}*/
/* 				if(linkEl.children.length > 0) {*/
/* 					item.msrc = linkEl.children[0].getAttribute('src');*/
/* 				}*/
/* 				item.el = figureEl;*/
/* 				items.push(item);*/
/* 			}*/
/* 			return items;*/
/* 		};*/
/* 		var closest = function closest(el, fn) {*/
/* 			return el && (fn(el) ? el : closest(el.parentNode, fn));*/
/* 		};*/
/* 		var onThumbnailsClick = function(e) {*/
/* 			e = e || window.event;*/
/* 			e.preventDefault ? e.preventDefault() : e.returnValue = false;*/
/* 			var eTarget = e.target || e.srcElement;*/
/* 			var clickedListItem = closest(eTarget, function(el) {*/
/* 				return (el.tagName && el.tagName.toUpperCase() === 'FIGURE');*/
/* 			});*/
/* 			if(!clickedListItem) {*/
/* 				return;*/
/* 			}*/
/* 			var clickedGallery = clickedListItem.parentNode,*/
/* 			childNodes = clickedListItem.parentNode.childNodes,*/
/* 			numChildNodes = childNodes.length,*/
/* 			nodeIndex = 0,*/
/* 			index;*/
/* 			for (var i = 0; i < numChildNodes; i++) {*/
/* 				if(childNodes[i].nodeType !== 1) {*/
/* 					continue;*/
/* 				}*/
/* 				if(childNodes[i] === clickedListItem) {*/
/* 					index = nodeIndex;*/
/* 					break;*/
/* 				}*/
/* 				nodeIndex++;*/
/* 			}*/
/* 			if(index >= 0) {*/
/* 				openPhotoSwipe( index, clickedGallery );*/
/* 			}*/
/* 			return false;*/
/* 		};*/
/* 		var photoswipeParseHash = function() {*/
/* 			var hash = window.location.hash.substring(1),*/
/* 			params = {};*/
/* 			if(hash.length < 5) {*/
/* 				return params;*/
/* 			}*/
/* 			var vars = hash.split('&');*/
/* 			for (var i = 0; i < vars.length; i++) {*/
/* 				if(!vars[i]) {*/
/* 					continue;*/
/* 				}*/
/* 				var pair = vars[i].split('=');*/
/* 					if(pair.length < 2) {*/
/* 						continue;*/
/* 					}*/
/* 				params[pair[0]] = pair[1];*/
/* 			}*/
/* 			if(params.gid) {*/
/* 				params.gid = parseInt(params.gid, 10);*/
/* 			}*/
/* 			return params;*/
/* 		};*/
/* 		var openPhotoSwipe = function(index, galleryElement, disableAnimation, fromURL) {*/
/* 			var pswpElement = document.querySelectorAll('.pswp')[0],*/
/* 			gallery, options, items;*/
/* 			items = parseThumbnailElements(galleryElement);*/
/* 			options = {*/
/* 				galleryUID: galleryElement.getAttribute('data-pswp-uid'),*/
/* 				getThumbBoundsFn: function(index) {*/
/* 					var thumbnail = items[index].el.getElementsByTagName('img')[0],*/
/* 					pageYScroll = window.pageYOffset || document.documentElement.scrollTop,*/
/* 					rect = thumbnail.getBoundingClientRect();*/
/* 					return {x:rect.left, y:rect.top + pageYScroll, w:rect.width};*/
/* 				}*/
/* 			};*/
/* 			if(fromURL) {*/
/* 				if(options.galleryPIDs) {*/
/* 					for(var j = 0; j < items.length; j++) {*/
/* 						if(items[j].pid == index) {*/
/* 							options.index = j;*/
/* 							break;*/
/* 						}*/
/* 					}*/
/* 				} else {*/
/* 					options.index = parseInt(index, 10) - 1;*/
/* 				}*/
/* 			} else {*/
/* 				options.index = parseInt(index, 10);*/
/* 			}*/
/* 			if(isNaN(options.index)) {*/
/* 				return;*/
/* 			}*/
/* 			if(disableAnimation) {*/
/* 				options.showAnimationDuration = 0;*/
/* 			}*/
/* 			gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);*/
/* 			gallery.init();*/
/* 		};*/
/* 		var galleryElements = document.querySelectorAll(gallerySelector);*/
/* 		for(var i = 0, l = galleryElements.length; i < l; i++) {*/
/* 			galleryElements[i].setAttribute('data-pswp-uid', i+1);*/
/* 			galleryElements[i].onclick = onThumbnailsClick;*/
/* 		}*/
/* 		var hashData = photoswipeParseHash();*/
/* 		if(hashData.pid && hashData.gid) {*/
/* 			openPhotoSwipe( hashData.pid ,  galleryElements[ hashData.gid - 1 ], true, true );*/
/* 		}*/
/* 	};*/
/* 	initPhotoSwipeFromDOM('.photo-swipe');*/
/* */
/* 	document.addEventListener("DOMContentLoaded", function(event) {*/
/* 		$('.slider-for').not('.slick-initialized').slick({*/
/* 			slidesToShow: 1,*/
/* 			slidesToScroll: 1,*/
/* 			arrows: true,*/
/* 			fade: true,*/
/* 			mobileFirst: true,*/
/* 			asNavFor: '.slider-nav'*/
/* 		});*/
/* */
/* 		{% if thumb_images %}*/
/* 		$('.slider-nav').not('.slick-initialized').slick({*/
/* 			slidesToShow: 4,*/
/* 			slidesToScroll: 4,*/
/* 			asNavFor: '.slider-for',*/
/* 			centerMode: false,*/
/* 			arrows: false,*/
/* 			infinite: false,*/
/* 			focusOnSelect: true*/
/* 		});*/
/* 		{% endif %}*/
/* */
/* 		{% if image_zoom %}*/
/* 			{% for image in images %}*/
/* 			$('#{{ image.zoom_id }}').wrap('<span style="display:inline-block"></span>').css('display', 'block').parent().zoom({*/
/* 				url: '{{ image.popup }}'*/
/* 			});*/
/* 			{% endfor %}*/
/* 		{% endif %}*/
/* 	});*/
/* </script>*/
