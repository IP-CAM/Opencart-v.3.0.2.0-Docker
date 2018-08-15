<?php

/* materialize/template/common/sidenav.twig */
class __TwigTemplate_7760aec881db2fdb40113609fe11a4fa42a616e68bb2579eeca5128e5a359daf extends Twig_Template
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
        echo "<li>
\t<div class=\"user-view\">
\t\t<div class=\"background ";
        // line 3
        echo (isset($context["color_sidebar"]) ? $context["color_sidebar"] : null);
        echo "\"></div>
\t\t";
        // line 4
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 5
            echo "\t\t<img class=\"responsive-img lazyload\" src=\"";
            echo (isset($context["img_loader"]) ? $context["img_loader"] : null);
            echo "\" data-src=\"";
            echo (isset($context["logo"]) ? $context["logo"] : null);
            echo "\" title=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" alt=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\">
\t\t";
        } else {
            // line 7
            echo "\t\t<strong><a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "</a></strong>
\t\t";
        }
        // line 9
        echo "\t\t<nav class=\"search-wrapper z-depth-0 ";
        echo (isset($context["color_mobile_search"]) ? $context["color_mobile_search"] : null);
        echo "\">
\t\t\t<div class=\"nav-wrapper\">
\t\t\t\t<div id=\"search-side\" class=\"input-field\">
\t\t\t\t\t<input id=\"input-search-side\" class=\"search-input autocomplete\" type=\"search\" name=\"search\" value=\"";
        // line 12
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" autocomplete=\"off\">
\t\t\t\t\t<label class=\"label-icon search-buttons search-buttons__search waves-effect waves-circle\" for=\"input-search\"><i class=\"material-icons\">search</i></label>
\t\t\t\t\t<i class=\"material-icons search-buttons search-buttons__clear waves-effect waves-circle\">close</i>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t\t<div class=\"row\">
\t\t\t<div class=\"col s9 side-info no-padding\">
\t\t\t\t<a class=\"";
        // line 20
        echo (isset($context["color_sidebar_text"]) ? $context["color_sidebar_text"] : null);
        echo "\" href=\"tel:";
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "\" rel=\"nofollow\"><i class=\"material-icons left\">phone</i>";
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "</a>
\t\t\t\t<a class=\"";
        // line 21
        echo (isset($context["color_sidebar_text"]) ? $context["color_sidebar_text"] : null);
        echo "\" href=\"mailto:";
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" rel=\"nofollow\"><i class=\"material-icons left\">email</i>";
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "</a>
\t\t\t</div>
\t\t\t<div class=\"col s3 no-padding\">
\t\t\t\t";
        // line 24
        if (((isset($context["language"]) ? $context["language"] : null) || (isset($context["currency"]) ? $context["currency"] : null))) {
            // line 25
            echo "\t\t\t\t<div id=\"side-settings\" class=\"btn-floating waves-effect waves-light transparent z-depth-0 dropdown-trigger\" data-target=\"dropdown-side-settings\">
\t\t\t\t\t<i class=\"material-icons ";
            // line 26
            echo (isset($context["color_sidebar_text"]) ? $context["color_sidebar_text"] : null);
            echo "\">settings</i>
\t\t\t\t</div>
\t\t\t\t<ul id=\"dropdown-side-settings\" class=\"dropdown-content\">
\t\t\t\t\t";
            // line 29
            if ((isset($context["language"]) ? $context["language"] : null)) {
                echo "<li><a class=\"waves-effect waves-light modal-trigger\" href=\"#modal-language\" rel=\"nofollow\"><i class=\"material-icons\">language</i>";
                echo (isset($context["text_language"]) ? $context["text_language"] : null);
                echo "</a></li>";
            }
            // line 30
            echo "\t\t\t\t\t";
            if ((isset($context["currency"]) ? $context["currency"] : null)) {
                echo "<li><a class=\"waves-effect waves-light modal-trigger\" href=\"#modal-currency\" rel=\"nofollow\"><i class=\"material-icons\">monetization_on</i>";
                echo (isset($context["text_currency"]) ? $context["text_currency"] : null);
                echo "</a></li>";
            }
            // line 31
            echo "\t\t\t\t</ul>
\t\t\t\t";
        }
        // line 33
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</li>
";
        // line 37
        if ((isset($context["callback"]) ? $context["callback"] : null)) {
            echo "<li class=\"grey lighten-4\"><a class=\"waves-effect waves-default modal-trigger text-bold activator\" href=\"#callback__modal\" rel=\"nofollow\"><i class=\"material-icons black-text\">phone_in_talk</i>";
            echo (isset($context["callback_text"]) ? $context["callback_text"] : null);
            echo "</a></li>";
        }
        // line 38
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 39
            echo "<li>
\t<ul class=\"collapsible\">
\t";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 42
                echo "\t\t";
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 43
                    echo "\t\t<li class=\"arrow-rotate\">
\t\t\t<span class=\"collapsible-header waves-effect truncate text-bold\">";
                    // line 44
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</span>
\t\t\t";
                    // line 45
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($context["category"], "children", array()), twig_length_filter($this->env, $this->getAttribute($context["category"], "children", array()))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 46
                        echo "\t\t\t<div class=\"collapsible-body no-padding\">
\t\t\t\t<ul>
\t\t\t\t\t";
                        // line 48
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 49
                            echo "\t\t\t\t\t<li><a class=\"truncate\" href=\"";
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\" rel=\"nofollow\">";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a></li>
\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 51
                        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 54
                    echo "\t\t</li>
\t\t";
                } else {
                    // line 56
                    echo "\t\t<li><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"collapsible-header waves-effect truncate text-bold\" rel=\"nofollow\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a></li>
\t\t";
                }
                // line 58
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "\t</ul>
</li>
";
        }
        // line 62
        echo "<li class=\"divider\"></li>
<li>
\t<ul class=\"collapsible collapsible-accordion\" data-collapsible=\"accordion\">
\t\t<li class=\"arrow-rotate\">
\t\t\t<span class=\"collapsible-header waves-effect\"><i class=\"material-icons\">account_circle</i>";
        // line 66
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</span>
\t\t\t<div class=\"collapsible-body no-padding\">
\t\t\t\t<ul>
\t\t\t\t\t";
        // line 69
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 70
            echo "\t\t\t\t\t<li><a class=\"waves-effect\" href=\"";
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\" rel=\"nofollow\"><i class=\"material-icons\">assignment</i>";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</a></li>
\t\t\t\t\t<li><a class=\"waves-effect\" href=\"";
            // line 71
            echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
            echo "\" rel=\"nofollow\"><i class=\"material-icons\">favorite</i>";
            echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
            echo "</a></li>
\t\t\t\t\t<li><a class=\"waves-effect\" href=\"";
            // line 72
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\" rel=\"nofollow\"><i class=\"material-icons\">history</i>";
            echo (isset($context["text_order"]) ? $context["text_order"] : null);
            echo "</a></li>
\t\t\t\t\t<li><a class=\"waves-effect\" href=\"";
            // line 73
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\" rel=\"nofollow\"><i class=\"material-icons\">power_settings_new</i>";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo "</a></li>
\t\t\t\t\t";
        } else {
            // line 75
            echo "\t\t\t\t\t<li><a class=\"waves-effect\" href=\"";
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "\" rel=\"nofollow\">";
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "</a></li>
\t\t\t\t\t<li><a class=\"waves-effect\" href=\"";
            // line 76
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\" rel=\"nofollow\">";
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "</a></li>
\t\t\t\t\t";
        }
        // line 78
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</li>
\t</ul>
</li>
<li><a class=\"waves-effect\" href=\"";
        // line 83
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "\" rel=\"nofollow\"><i class=\"material-icons\">shopping_cart</i>";
        echo (isset($context["text_cart"]) ? $context["text_cart"] : null);
        echo "</a></li>
<li><a class=\"waves-effect\" href=\"";
        // line 84
        echo (isset($context["delivery"]) ? $context["delivery"] : null);
        echo "\" rel=\"nofollow\"><i class=\"material-icons\">local_shipping</i>";
        echo (isset($context["text_delivery"]) ? $context["text_delivery"] : null);
        echo "</a></li>
<li><a class=\"waves-effect\" href=\"";
        // line 85
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\" rel=\"nofollow\"><i class=\"material-icons\">email</i>";
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</a></li>
";
        // line 86
        if ((isset($context["blog"]) ? $context["blog"] : null)) {
            echo "<li><a class=\"waves-effect\" href=\"";
            echo (isset($context["blog"]) ? $context["blog"] : null);
            echo "\" rel=\"nofollow\"><i class=\"material-icons\">chrome_reader_mode</i>";
            echo (isset($context["text_blog"]) ? $context["text_blog"] : null);
            echo "</a></li>";
        }
        // line 87
        echo "<li><a class=\"waves-effect\" href=\"";
        echo (isset($context["about"]) ? $context["about"] : null);
        echo "\" rel=\"nofollow\"><i class=\"material-icons\">store</i>";
        echo (isset($context["text_about"]) ? $context["text_about"] : null);
        echo "</a></li>
<script>
\tvar collapsible = \$('.collapsible'),
\t\tsideSettings = \$('#side-settings'),
\t\tinputSearchSidebar = \$('#input-search-side'),
\t\tsearchClear = \$('.search-buttons__clear');

\tcollapsible.collapsible();
\tsideSettings.dropdown({
\t\talignment: 'right',
\t\tconstrainWidth: false
\t});

\tinputSearchSidebar.parent().find('label').on('click', function() {
\t\tvar url = \$('base').attr('href') + 'index.php?route=product/search',
\t\t\tvalue = inputSearchSidebar.val();
\t\tif (value) {
\t\t\turl += '&search=' + encodeURIComponent(value);
\t\t}
\t\tlocation = url;
\t});

\tinputSearchSidebar.on('keydown', function(e) {
\t\tif (e.keyCode == 13) {
\t\t\tinputSearchSidebar.parent().find('label').trigger('click');
\t\t}
\t});

\tsearchClear.click(function() {searchClear.parent().find('input').val('');});

\t\$('input[name=\\'search\\']').autocomplete({
\t\t'source': function(request, response) {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=common/search/autocomplete&filter_name=' + encodeURIComponent(request),
\t\t\t\tdataType: 'json',
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\treturn {
\t\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\t\timg: item['img'],
\t\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t\t}
\t\t\t\t\t}));
\t\t\t\t}
\t\t\t});
\t\t},
\t\t'select': function(item) {
\t\t\twindow.location = \"";
        // line 134
        echo (isset($context["product_path"]) ? $context["product_path"] : null);
        echo "&product_id=\"+item['value'];
\t\t}
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "materialize/template/common/sidenav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 134,  286 => 87,  278 => 86,  272 => 85,  266 => 84,  260 => 83,  253 => 78,  246 => 76,  239 => 75,  232 => 73,  226 => 72,  220 => 71,  213 => 70,  211 => 69,  205 => 66,  199 => 62,  194 => 59,  188 => 58,  180 => 56,  176 => 54,  168 => 51,  157 => 49,  153 => 48,  149 => 46,  145 => 45,  141 => 44,  138 => 43,  135 => 42,  131 => 41,  127 => 39,  125 => 38,  119 => 37,  113 => 33,  109 => 31,  102 => 30,  96 => 29,  90 => 26,  87 => 25,  85 => 24,  75 => 21,  67 => 20,  56 => 12,  49 => 9,  41 => 7,  29 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <li>*/
/* 	<div class="user-view">*/
/* 		<div class="background {{ color_sidebar }}"></div>*/
/* 		{% if logo %}*/
/* 		<img class="responsive-img lazyload" src="{{ img_loader }}" data-src="{{ logo }}" title="{{ name }}" alt="{{ name }}">*/
/* 		{% else %}*/
/* 		<strong><a href="{{ home }}">{{ name }}</a></strong>*/
/* 		{% endif %}*/
/* 		<nav class="search-wrapper z-depth-0 {{ color_mobile_search }}">*/
/* 			<div class="nav-wrapper">*/
/* 				<div id="search-side" class="input-field">*/
/* 					<input id="input-search-side" class="search-input autocomplete" type="search" name="search" value="{{ search }}" autocomplete="off">*/
/* 					<label class="label-icon search-buttons search-buttons__search waves-effect waves-circle" for="input-search"><i class="material-icons">search</i></label>*/
/* 					<i class="material-icons search-buttons search-buttons__clear waves-effect waves-circle">close</i>*/
/* 				</div>*/
/* 			</div>*/
/* 		</nav>*/
/* 		<div class="row">*/
/* 			<div class="col s9 side-info no-padding">*/
/* 				<a class="{{ color_sidebar_text }}" href="tel:{{ telephone }}" rel="nofollow"><i class="material-icons left">phone</i>{{ telephone }}</a>*/
/* 				<a class="{{ color_sidebar_text }}" href="mailto:{{ email }}" rel="nofollow"><i class="material-icons left">email</i>{{ email }}</a>*/
/* 			</div>*/
/* 			<div class="col s3 no-padding">*/
/* 				{% if language or currency %}*/
/* 				<div id="side-settings" class="btn-floating waves-effect waves-light transparent z-depth-0 dropdown-trigger" data-target="dropdown-side-settings">*/
/* 					<i class="material-icons {{ color_sidebar_text }}">settings</i>*/
/* 				</div>*/
/* 				<ul id="dropdown-side-settings" class="dropdown-content">*/
/* 					{% if language %}<li><a class="waves-effect waves-light modal-trigger" href="#modal-language" rel="nofollow"><i class="material-icons">language</i>{{ text_language }}</a></li>{% endif %}*/
/* 					{% if currency %}<li><a class="waves-effect waves-light modal-trigger" href="#modal-currency" rel="nofollow"><i class="material-icons">monetization_on</i>{{ text_currency }}</a></li>{% endif %}*/
/* 				</ul>*/
/* 				{% endif %}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </li>*/
/* {% if callback %}<li class="grey lighten-4"><a class="waves-effect waves-default modal-trigger text-bold activator" href="#callback__modal" rel="nofollow"><i class="material-icons black-text">phone_in_talk</i>{{ callback_text }}</a></li>{% endif %}*/
/* {% if categories %}*/
/* <li>*/
/* 	<ul class="collapsible">*/
/* 	{% for category in categories %}*/
/* 		{% if category.children %}*/
/* 		<li class="arrow-rotate">*/
/* 			<span class="collapsible-header waves-effect truncate text-bold">{{ category.name }}</span>*/
/* 			{% for children in category.children|batch(category.children|length) %}*/
/* 			<div class="collapsible-body no-padding">*/
/* 				<ul>*/
/* 					{% for child in children %}*/
/* 					<li><a class="truncate" href="{{ child.href }}" rel="nofollow">{{ child.name }}</a></li>*/
/* 					{% endfor %}*/
/* 				</ul>*/
/* 			</div>*/
/* 			{% endfor %}*/
/* 		</li>*/
/* 		{% else %}*/
/* 		<li><a href="{{ category.href }}" class="collapsible-header waves-effect truncate text-bold" rel="nofollow">{{ category.name }}</a></li>*/
/* 		{% endif %}*/
/* 	{% endfor %}*/
/* 	</ul>*/
/* </li>*/
/* {% endif %}*/
/* <li class="divider"></li>*/
/* <li>*/
/* 	<ul class="collapsible collapsible-accordion" data-collapsible="accordion">*/
/* 		<li class="arrow-rotate">*/
/* 			<span class="collapsible-header waves-effect"><i class="material-icons">account_circle</i>{{ text_account }}</span>*/
/* 			<div class="collapsible-body no-padding">*/
/* 				<ul>*/
/* 					{% if logged %}*/
/* 					<li><a class="waves-effect" href="{{ account }}" rel="nofollow"><i class="material-icons">assignment</i>{{ text_account }}</a></li>*/
/* 					<li><a class="waves-effect" href="{{ wishlist }}" rel="nofollow"><i class="material-icons">favorite</i>{{ text_wishlist }}</a></li>*/
/* 					<li><a class="waves-effect" href="{{ order }}" rel="nofollow"><i class="material-icons">history</i>{{ text_order }}</a></li>*/
/* 					<li><a class="waves-effect" href="{{ logout }}" rel="nofollow"><i class="material-icons">power_settings_new</i>{{ text_logout }}</a></li>*/
/* 					{% else %}*/
/* 					<li><a class="waves-effect" href="{{ register }}" rel="nofollow">{{ text_register }}</a></li>*/
/* 					<li><a class="waves-effect" href="{{ login }}" rel="nofollow">{{ text_login }}</a></li>*/
/* 					{% endif %}*/
/* 				</ul>*/
/* 			</div>*/
/* 		</li>*/
/* 	</ul>*/
/* </li>*/
/* <li><a class="waves-effect" href="{{ cart }}" rel="nofollow"><i class="material-icons">shopping_cart</i>{{ text_cart }}</a></li>*/
/* <li><a class="waves-effect" href="{{ delivery }}" rel="nofollow"><i class="material-icons">local_shipping</i>{{ text_delivery }}</a></li>*/
/* <li><a class="waves-effect" href="{{ contact }}" rel="nofollow"><i class="material-icons">email</i>{{ text_contact }}</a></li>*/
/* {% if blog %}<li><a class="waves-effect" href="{{ blog }}" rel="nofollow"><i class="material-icons">chrome_reader_mode</i>{{ text_blog }}</a></li>{% endif %}*/
/* <li><a class="waves-effect" href="{{ about }}" rel="nofollow"><i class="material-icons">store</i>{{ text_about }}</a></li>*/
/* <script>*/
/* 	var collapsible = $('.collapsible'),*/
/* 		sideSettings = $('#side-settings'),*/
/* 		inputSearchSidebar = $('#input-search-side'),*/
/* 		searchClear = $('.search-buttons__clear');*/
/* */
/* 	collapsible.collapsible();*/
/* 	sideSettings.dropdown({*/
/* 		alignment: 'right',*/
/* 		constrainWidth: false*/
/* 	});*/
/* */
/* 	inputSearchSidebar.parent().find('label').on('click', function() {*/
/* 		var url = $('base').attr('href') + 'index.php?route=product/search',*/
/* 			value = inputSearchSidebar.val();*/
/* 		if (value) {*/
/* 			url += '&search=' + encodeURIComponent(value);*/
/* 		}*/
/* 		location = url;*/
/* 	});*/
/* */
/* 	inputSearchSidebar.on('keydown', function(e) {*/
/* 		if (e.keyCode == 13) {*/
/* 			inputSearchSidebar.parent().find('label').trigger('click');*/
/* 		}*/
/* 	});*/
/* */
/* 	searchClear.click(function() {searchClear.parent().find('input').val('');});*/
/* */
/* 	$('input[name=\'search\']').autocomplete({*/
/* 		'source': function(request, response) {*/
/* 			$.ajax({*/
/* 				url: 'index.php?route=common/search/autocomplete&filter_name=' + encodeURIComponent(request),*/
/* 				dataType: 'json',*/
/* 				success: function(json) {*/
/* 					response($.map(json, function(item) {*/
/* 						return {*/
/* 							label: item['name'],*/
/* 							img: item['img'],*/
/* 							value: item['product_id']*/
/* 						}*/
/* 					}));*/
/* 				}*/
/* 			});*/
/* 		},*/
/* 		'select': function(item) {*/
/* 			window.location = "{{ product_path }}&product_id="+item['value'];*/
/* 		}*/
/* 	});*/
/* </script>*/
