<?php

/* materialize/template/product/search.twig */
class __TwigTemplate_6f0f26bfa74fc61dcae71b3270de5a7b813707d439a11638f6e4bc25d0cdc5e9 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
";
        // line 2
        ob_start();
        // line 3
        echo "<script type=\"application/ld+json\">
{
\t\"@context\": \"http://schema.org\",
\t\"@type\": \"BreadcrumbList\",
\t\"itemListElement\": [
\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["breadcrumb"]) {
            // line 9
            echo "\t\t";
            if (($context["key"] < (twig_length_filter($this->env, (isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null)) - 1))) {
                // line 10
                echo "\t\t\t";
                if (($context["key"] == 0)) {
                    // line 11
                    echo "\t\t\t";
                } else {
                    // line 12
                    echo "\t\t{
\t\t\t\"@type\": \"ListItem\",
\t\t\t\"position\": ";
                    // line 14
                    echo $context["key"];
                    echo ",
\t\t\t\"item\": {
\t\t\t\t\"@id\": \"";
                    // line 16
                    echo $this->getAttribute($context["breadcrumb"], "href", array());
                    echo "\",
\t\t\t\t\"name\": \"";
                    // line 17
                    echo $this->getAttribute($context["breadcrumb"], "text", array());
                    echo "\"
\t\t\t}
\t\t},
\t\t";
                }
                // line 21
                echo "\t\t";
            } else {
                // line 22
                echo "\t\t{
\t\t\t\"@type\": \"ListItem\",
\t\t\t\"position\": ";
                // line 24
                echo $context["key"];
                echo ",
\t\t\t\"item\": {
\t\t\t\t\"@id\": \"";
                // line 26
                echo $this->getAttribute($context["breadcrumb"], "href", array());
                echo "\",
\t\t\t\t\"name\": \"";
                // line 27
                echo $this->getAttribute($context["breadcrumb"], "text", array());
                echo "\"
\t\t\t}
\t\t}
\t\t";
            }
            // line 31
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t]
}
</script>
";
        // line 35
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 36
            echo "\t";
            list($context["main"], $context["goods"]) =             array("s12 l6", "s12");
        } elseif ((        // line 37
(isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 38
            echo "\t";
            list($context["main"], $context["goods"]) =             array("s12 l9", "s12 m6");
        } else {
            // line 40
            echo "\t";
            list($context["main"], $context["goods"]) =             array("s12", "s12 m6 xl4");
        }
        // line 42
        echo "<main>
\t<div class=\"container\">
\t\t<nav id=\"breadcrumbs\" class=\"breadcrumb-wrapper transparent z-depth-0\">
\t\t\t<span class=\"breadcrumb-blur hide-on-med-and-up\"></span>
\t\t\t<div class=\"nav-wrapper breadcrumb-wrap href-underline\">
\t\t\t\t";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["breadcrumb"]) {
            // line 48
            echo "\t\t\t\t\t";
            if (($context["key"] < (twig_length_filter($this->env, (isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null)) - 1))) {
                // line 49
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["breadcrumb"], "href", array());
                echo "\" class=\"breadcrumb waves-effect black-text\">";
                echo $this->getAttribute($context["breadcrumb"], "text", array());
                echo "</a>
\t\t\t\t\t";
            } else {
                // line 51
                echo "\t\t\t\t\t\t<span class=\"breadcrumb blue-grey-text text-darken-3\">";
                echo $this->getAttribute($context["breadcrumb"], "text", array());
                echo "</span>
\t\t\t\t\t";
            }
            // line 53
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "\t\t\t</div>
\t\t</nav>
\t\t<div class=\"row\">
\t\t\t";
        // line 57
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
\t\t\t<div id=\"content\" class=\"col ";
        // line 58
        echo (isset($context["main"]) ? $context["main"] : null);
        echo " section href-underline\">
\t\t\t\t";
        // line 59
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
\t\t\t\t<h1>";
        // line 60
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
\t\t\t\t<ul class=\"collapsible\" data-collapsible=\"expandable\">
\t\t\t\t\t<li class=\"arrow-rotate\">
\t\t\t\t\t\t<div class=\"collapsible-header text-bold\">";
        // line 63
        echo (isset($context["entry_search"]) ? $context["entry_search"] : null);
        echo "</div>
\t\t\t\t\t\t<div class=\"collapsible-body white\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col s6 input-field\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"search\" value=\"";
        // line 67
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_keyword"]) ? $context["text_keyword"] : null);
        echo "\" id=\"input-search\">
\t\t\t\t\t\t\t\t\t<label class=\"text-bold\">";
        // line 68
        echo (isset($context["text_searched"]) ? $context["text_searched"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col s6 input-field\">
\t\t\t\t\t\t\t\t\t<select name=\"category_id\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 72
        echo (isset($context["text_category"]) ? $context["text_category"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 74
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["category_1"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                // line 75
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["category_1"], "category_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["category_1"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 77
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["category_1"], "category_id", array());
                echo "\">";
                echo $this->getAttribute($context["category_1"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 79
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category_1"], "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 80
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["category_2"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                    // line 81
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["category_2"], "category_id", array());
                    echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo $this->getAttribute($context["category_2"], "name", array());
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 83
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["category_2"], "category_id", array());
                    echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo $this->getAttribute($context["category_2"], "name", array());
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 85
                echo "\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category_2"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 86
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["category_3"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                        // line 87
                        echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo $this->getAttribute($context["category_3"], "category_id", array());
                        echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo $this->getAttribute($context["category_3"], "name", array());
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 89
                        echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo $this->getAttribute($context["category_3"], "category_id", array());
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo $this->getAttribute($context["category_3"], "name", array());
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 91
                    echo "\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<label class=\"text-bold\">";
        // line 95
        echo (isset($context["text_refine"]) ? $context["text_refine"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col s12\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col s12 m6 switch\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col s8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-bold\">";
        // line 102
        echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
        echo ":</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col s4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 106
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 107
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"description\" value=\"1\" checked=\"checked\" id=\"search-in-description\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 109
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"description\" value=\"1\" id=\"search-in-description\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 111
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lever\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col s8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-bold\">";
        // line 117
        echo (isset($context["text_sub_category"]) ? $context["text_sub_category"] : null);
        echo ":</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col s4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 121
        if ((isset($context["sub_category"]) ? $context["sub_category"] : null)) {
            // line 122
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"sub_category\" value=\"1\"  checked=\"checked\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 124
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"sub_category\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 126
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lever\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"flex-reverse\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" value=\"";
        // line 133
        echo (isset($context["button_search"]) ? $context["button_search"] : null);
        echo "\" id=\"button-search\" class=\"btn waves-effect waves-light red\">";
        echo (isset($context["button_search"]) ? $context["button_search"] : null);
        echo "</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t";
        // line 140
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 141
            echo "\t\t\t\t<ul class=\"collapsible\" data-collapsible=\"expandable\">
\t\t\t\t\t<li class=\"arrow-rotate\">
\t\t\t\t\t\t<div class=\"collapsible-header text-bold\">";
            // line 143
            echo (isset($context["text_sort_short"]) ? $context["text_sort_short"] : null);
            echo "</div>
\t\t\t\t\t\t<div class=\"collapsible-body white\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col s6 m6 input-field inline\">
\t\t\t\t\t\t\t\t\t<select id=\"input-sort\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t\t\t\t";
            // line 148
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 149
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                    // line 150
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\" selected>";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 152
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 154
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<label class=\"text-bold\">";
            // line 156
            echo (isset($context["text_sort"]) ? $context["text_sort"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col s6 m6 input-field inline\">
\t\t\t\t\t\t\t\t\t<select id=\"input-limit\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t\t\t\t";
            // line 160
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 161
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                    // line 162
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\" selected>";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 164
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 166
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 167
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<label class=\"text-bold\">";
            // line 168
            echo (isset($context["text_limit"]) ? $context["text_limit"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
            // line 175
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 176
                echo "\t\t\t\t\t\t<div class=\"col ";
                echo (isset($context["goods"]) ? $context["goods"] : null);
                echo "\">
\t\t\t\t\t\t\t<div class=\"card sticky-action large hoverable href-underline\">
\t\t\t\t\t\t\t\t";
                // line 178
                if ($this->getAttribute($context["product"], "labels", array())) {
                    // line 179
                    echo "\t\t\t\t\t\t\t\t<ul class=\"labels-wrap\">
\t\t\t\t\t\t\t\t\t";
                    // line 180
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "labels", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
                        // line 181
                        echo "\t\t\t\t\t\t\t\t\t<li class=\"labels-wrap__item\"><span class=\"waves-effect badge ";
                        echo $this->getAttribute($context["label"], "color", array());
                        echo " ";
                        echo $this->getAttribute($context["label"], "color_text", array());
                        echo "\">";
                        echo $this->getAttribute($context["label"], "name", array());
                        echo "</span></li>
\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 183
                    echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t";
                }
                // line 185
                echo "\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["product"], "special", array())) {
                    echo "<span class=\"white-text badge red lighten-1 percent\">";
                    echo (isset($context["text_percent"]) ? $context["text_percent"] : null);
                    echo "&nbsp;";
                    echo $this->getAttribute($context["product"], "percent_discount", array());
                    echo "%</span>";
                }
                // line 186
                echo "\t\t\t\t\t\t\t\t<div class=\"card-image\">
\t\t\t\t\t\t\t\t\t<i class=\"material-icons waves-effect waves-circle close-icon activator\">more_vert</i>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 188
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><img class=\"responsive-img lazyload\" src=\"";
                echo (isset($context["img_loader"]) ? $context["img_loader"] : null);
                echo "\" data-src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-content center-align\">
\t\t\t\t\t\t\t\t\t<span class=\"card-title\"><a href=\"";
                // line 191
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" class=\"grey-text text-darken-4\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-action center-align grey lighten-5\">
\t\t\t\t\t\t\t\t\t";
                // line 194
                if ($this->getAttribute($context["product"], "add_cart", array())) {
                    // line 195
                    echo "\t\t\t\t\t\t\t\t\t<button class=\"btn btn-floating btn-large waves-effect waves-light red add-cart\" title=\"";
                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                    echo "\" onclick=\"cart.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\"><i class=\"material-icons\">add_shopping_cart</i></button>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 197
                    echo "\t\t\t\t\t\t\t\t\t<button class=\"btn btn-floating btn-large add-cart\" disabled=\"disabled\"><i class=\"material-icons\">add_shopping_cart</i></button>
\t\t\t\t\t\t\t\t\t";
                }
                // line 199
                echo "\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 200
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 201
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"card-price\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 203
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"card-price old-price grey-text\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"card-price red-text text-darken-2\">";
                        // line 204
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 206
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        // line 207
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 209
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                // line 210
                echo "\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t<span class=\"grey lighten-5\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 213
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 214
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 215
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            // line 216
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 218
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 220
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 221
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 222
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 228
                echo "\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 230
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" class=\"btn waves-effect waves-light red width-max\">";
                echo (isset($context["text_more_detailed"]) ? $context["text_more_detailed"] : null);
                echo "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-reveal\">
\t\t\t\t\t\t\t\t\t<span class=\"card-title\"><a href=\"";
                // line 233
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" class=\"grey-text text-darken-4\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a><i class=\"material-icons waves-effect waves-circle close-icon\">close</i></span>
\t\t\t\t\t\t\t\t\t<p>";
                // line 234
                echo $this->getAttribute($context["product"], "description", array());
                echo "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 239
            echo "\t\t\t\t</div>
\t\t\t\t";
            // line 240
            if ((isset($context["pagination"]) ? $context["pagination"] : null)) {
                // line 241
                echo "\t\t\t\t\t<div class=\"row\">";
                echo (isset($context["pagination"]) ? $context["pagination"] : null);
                echo "</div>
\t\t\t\t";
            }
            // line 243
            echo "\t\t\t\t";
        } else {
            // line 244
            echo "\t\t\t\t<div class=\"card-panel center\">
\t\t\t\t\t<p class=\"flow-text text-bold\">";
            // line 245
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
\t\t\t\t\t<img class=\"responsive-img lazyload\" src=\"";
            // line 246
            echo (isset($context["img_loader"]) ? $context["img_loader"] : null);
            echo "\" data-src=\"catalog/view/theme/materialize/image/search-empty.png\" alt=\"\">
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 249
        echo "\t\t\t\t";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
\t\t\t</div>
\t\t\t";
        // line 251
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
\t\t</div>
\t</div>
</main>
<script>
\tdocument.addEventListener(\"DOMContentLoaded\", function(event) {
\t\t\$('#button-search').bind('click', function() {
\t\t\turl = 'index.php?route=product/search';
\t\t\tvar search = \$('#content input[name=\\'search\\']').prop('value');
\t\t\tif (search) {
\t\t\t\turl += '&search=' + encodeURIComponent(search);
\t\t\t}
\t\t\tvar category_id = \$('#content select[name=\\'category_id\\']').prop('value');
\t\t\tif (category_id > 0) {
\t\t\t\turl += '&category_id=' + encodeURIComponent(category_id);
\t\t\t}
\t\t\tvar sub_category = \$('#content input[name=\\'sub_category\\']:checked').prop('value');
\t\t\tif (sub_category) {
\t\t\t\turl += '&sub_category=true';
\t\t\t}
\t\t\tvar filter_description = \$('#content input[name=\\'description\\']:checked').prop('value');
\t\t\tif (filter_description) {
\t\t\t\turl += '&description=true';
\t\t\t}
\t\t\tlocation = url;
\t\t});
\t\t\$('#content input[name=\\'search\\']').bind('keydown', function(e) {
\t\t\tif (e.keyCode == 13) {
\t\t\t\t\$('#button-search').trigger('click');
\t\t\t}
\t\t});
\t\t\$('select[name=\\'category_id\\']').on('change', function() {
\t\t\tif (this.value == '0') {
\t\t\t\t\$('input[name=\\'sub_category\\']').prop('disabled', true);
\t\t\t} else {
\t\t\t\t\$('input[name=\\'sub_category\\']').prop('disabled', false);
\t\t\t}
\t\t});
\t\t\$('select[name=\\'category_id\\']').trigger('change');
\t});
</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 293
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "materialize/template/product/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  723 => 293,  678 => 251,  672 => 249,  666 => 246,  662 => 245,  659 => 244,  656 => 243,  650 => 241,  648 => 240,  645 => 239,  634 => 234,  628 => 233,  620 => 230,  616 => 228,  608 => 222,  605 => 221,  599 => 220,  595 => 218,  591 => 216,  588 => 215,  583 => 214,  581 => 213,  576 => 210,  573 => 209,  565 => 207,  562 => 206,  557 => 204,  552 => 203,  546 => 201,  543 => 200,  540 => 199,  536 => 197,  528 => 195,  526 => 194,  518 => 191,  504 => 188,  500 => 186,  491 => 185,  487 => 183,  474 => 181,  470 => 180,  467 => 179,  465 => 178,  459 => 176,  455 => 175,  445 => 168,  442 => 167,  436 => 166,  428 => 164,  420 => 162,  417 => 161,  413 => 160,  406 => 156,  403 => 155,  397 => 154,  389 => 152,  381 => 150,  378 => 149,  374 => 148,  366 => 143,  362 => 141,  360 => 140,  348 => 133,  339 => 126,  335 => 124,  331 => 122,  329 => 121,  322 => 117,  314 => 111,  310 => 109,  306 => 107,  304 => 106,  297 => 102,  287 => 95,  284 => 94,  278 => 93,  272 => 92,  266 => 91,  258 => 89,  250 => 87,  247 => 86,  242 => 85,  234 => 83,  226 => 81,  223 => 80,  218 => 79,  210 => 77,  202 => 75,  199 => 74,  195 => 73,  191 => 72,  184 => 68,  178 => 67,  171 => 63,  165 => 60,  161 => 59,  157 => 58,  153 => 57,  148 => 54,  142 => 53,  136 => 51,  128 => 49,  125 => 48,  121 => 47,  114 => 42,  110 => 40,  106 => 38,  104 => 37,  101 => 36,  99 => 35,  94 => 32,  88 => 31,  81 => 27,  77 => 26,  72 => 24,  68 => 22,  65 => 21,  58 => 17,  54 => 16,  49 => 14,  45 => 12,  42 => 11,  39 => 10,  36 => 9,  32 => 8,  25 => 3,  23 => 2,  19 => 1,);
    }
}
/* {{ header }}*/
/* {% spaceless %}*/
/* <script type="application/ld+json">*/
/* {*/
/* 	"@context": "http://schema.org",*/
/* 	"@type": "BreadcrumbList",*/
/* 	"itemListElement": [*/
/* 	{% for key, breadcrumb in breadcrumbs %}*/
/* 		{% if key < breadcrumbs|length - 1 %}*/
/* 			{% if key == 0 %}*/
/* 			{% else %}*/
/* 		{*/
/* 			"@type": "ListItem",*/
/* 			"position": {{ key }},*/
/* 			"item": {*/
/* 				"@id": "{{ breadcrumb.href }}",*/
/* 				"name": "{{ breadcrumb.text }}"*/
/* 			}*/
/* 		},*/
/* 		{% endif %}*/
/* 		{% else %}*/
/* 		{*/
/* 			"@type": "ListItem",*/
/* 			"position": {{ key }},*/
/* 			"item": {*/
/* 				"@id": "{{ breadcrumb.href }}",*/
/* 				"name": "{{ breadcrumb.text }}"*/
/* 			}*/
/* 		}*/
/* 		{% endif %}*/
/* 	{% endfor %}*/
/* 	]*/
/* }*/
/* </script>*/
/* {% if column_left and column_right %}*/
/* 	{% set main, goods = 's12 l6', 's12' %}*/
/* {% elseif column_left or column_right %}*/
/* 	{% set main, goods = 's12 l9', 's12 m6' %}*/
/* {% else %}*/
/* 	{% set main, goods = 's12', 's12 m6 xl4' %}*/
/* {% endif %}*/
/* <main>*/
/* 	<div class="container">*/
/* 		<nav id="breadcrumbs" class="breadcrumb-wrapper transparent z-depth-0">*/
/* 			<span class="breadcrumb-blur hide-on-med-and-up"></span>*/
/* 			<div class="nav-wrapper breadcrumb-wrap href-underline">*/
/* 				{% for key, breadcrumb in breadcrumbs %}*/
/* 					{% if key < breadcrumbs|length - 1 %}*/
/* 						<a href="{{ breadcrumb.href }}" class="breadcrumb waves-effect black-text">{{ breadcrumb.text }}</a>*/
/* 					{% else %}*/
/* 						<span class="breadcrumb blue-grey-text text-darken-3">{{ breadcrumb.text }}</span>*/
/* 					{% endif %}*/
/* 				{% endfor %}*/
/* 			</div>*/
/* 		</nav>*/
/* 		<div class="row">*/
/* 			{{ column_left }}*/
/* 			<div id="content" class="col {{ main }} section href-underline">*/
/* 				{{ content_top }}*/
/* 				<h1>{{ heading_title }}</h1>*/
/* 				<ul class="collapsible" data-collapsible="expandable">*/
/* 					<li class="arrow-rotate">*/
/* 						<div class="collapsible-header text-bold">{{ entry_search }}</div>*/
/* 						<div class="collapsible-body white">*/
/* 							<div class="row">*/
/* 								<div class="col s6 input-field">*/
/* 									<input type="text" name="search" value="{{ search }}" placeholder="{{ text_keyword }}" id="input-search">*/
/* 									<label class="text-bold">{{ text_searched }}</label>*/
/* 								</div>*/
/* 								<div class="col s6 input-field">*/
/* 									<select name="category_id" class="form-control">*/
/* 										<option value="0">{{ text_category }}</option>*/
/* 										{% for category_1 in categories %}*/
/* 										{% if category_1.category_id == category_id %}*/
/* 										<option value="{{ category_1.category_id }}" selected="selected">{{ category_1.name }}</option>*/
/* 										{% else %}*/
/* 										<option value="{{ category_1.category_id }}">{{ category_1.name }}</option>*/
/* 										{% endif %}*/
/* 										{% for category_2 in category_1.children %}*/
/* 										{% if category_2.category_id == category_id %}*/
/* 										<option value="{{ category_2.category_id }}" selected="selected">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_2.name }}</option>*/
/* 										{% else %}*/
/* 										<option value="{{ category_2.category_id }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_2.name }}</option>*/
/* 										{% endif %}*/
/* 										{% for category_3 in category_2.children %}*/
/* 										{% if category_3.category_id == category_id %}*/
/* 										<option value="{{ category_3.category_id }}" selected="selected">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_3.name }}</option>*/
/* 										{% else %}*/
/* 										<option value="{{ category_3.category_id }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_3.name }}</option>*/
/* 										{% endif %}*/
/* 										{% endfor %}*/
/* 										{% endfor %}*/
/* 										{% endfor %}*/
/* 									</select>*/
/* 									<label class="text-bold">{{ text_refine }}</label>*/
/* 								</div>*/
/* 								<div class="col s12">*/
/* 									<div class="row">*/
/* 										<div class="col s12 m6 switch">*/
/* 											<div class="row">*/
/* 												<div class="col s8">*/
/* 													<span class="text-bold">{{ entry_description }}:</span>*/
/* 												</div>*/
/* 												<div class="col s4">*/
/* 													<label>*/
/* 														{% if description %}*/
/* 														<input type="checkbox" name="description" value="1" checked="checked" id="search-in-description">*/
/* 														{% else %}*/
/* 														<input type="checkbox" name="description" value="1" id="search-in-description">*/
/* 														{% endif %}*/
/* 														<span class="lever"></span>*/
/* 													</label>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="row">*/
/* 												<div class="col s8">*/
/* 													<span class="text-bold">{{ text_sub_category }}:</span>*/
/* 												</div>*/
/* 												<div class="col s4">*/
/* 													<label>*/
/* 														{% if sub_category %}*/
/* 														<input type="checkbox" name="sub_category" value="1"  checked="checked">*/
/* 														{% else %}*/
/* 														<input type="checkbox" name="sub_category" value="1">*/
/* 														{% endif %}*/
/* 														<span class="lever"></span>*/
/* 													</label>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="flex-reverse">*/
/* 										<button type="button" value="{{ button_search }}" id="button-search" class="btn waves-effect waves-light red">{{ button_search }}</button>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</li>*/
/* 				</ul>*/
/* 				{% if products %}*/
/* 				<ul class="collapsible" data-collapsible="expandable">*/
/* 					<li class="arrow-rotate">*/
/* 						<div class="collapsible-header text-bold">{{ text_sort_short }}</div>*/
/* 						<div class="collapsible-body white">*/
/* 							<div class="row">*/
/* 								<div class="col s6 m6 input-field inline">*/
/* 									<select id="input-sort" onchange="location = this.value;">*/
/* 										{% for sorts in sorts %}*/
/* 										{% if sorts.value == '%s-%s'|format(sort, order) %}*/
/* 										<option value="{{ sorts.href }}" selected>{{ sorts.text }}</option>*/
/* 										{% else %}*/
/* 										<option value="{{ sorts.href }}">{{ sorts.text }}</option>*/
/* 										{% endif %}*/
/* 										{% endfor %}*/
/* 									</select>*/
/* 									<label class="text-bold">{{ text_sort }}</label>*/
/* 								</div>*/
/* 								<div class="col s6 m6 input-field inline">*/
/* 									<select id="input-limit" onchange="location = this.value;">*/
/* 										{% for limits in limits %}*/
/* 										{% if limits.value == limit %}*/
/* 										<option value="{{ limits.href }}" selected>{{ limits.text }}</option>*/
/* 										{% else %}*/
/* 										<option value="{{ limits.href }}">{{ limits.text }}</option>*/
/* 										{% endif %}*/
/* 										{% endfor %}*/
/* 									</select>*/
/* 									<label class="text-bold">{{ text_limit }}</label>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</li>*/
/* 				</ul>*/
/* 				<div class="row">*/
/* 					{% for product in products %}*/
/* 						<div class="col {{ goods }}">*/
/* 							<div class="card sticky-action large hoverable href-underline">*/
/* 								{% if product.labels %}*/
/* 								<ul class="labels-wrap">*/
/* 									{% for label in product.labels %}*/
/* 									<li class="labels-wrap__item"><span class="waves-effect badge {{ label.color }} {{ label.color_text }}">{{ label.name }}</span></li>*/
/* 									{% endfor %}*/
/* 								</ul>*/
/* 								{% endif %}*/
/* 								{% if product.special %}<span class="white-text badge red lighten-1 percent">{{ text_percent }}&nbsp;{{ product.percent_discount }}%</span>{% endif %}*/
/* 								<div class="card-image">*/
/* 									<i class="material-icons waves-effect waves-circle close-icon activator">more_vert</i>*/
/* 									<a href="{{ product.href }}"><img class="responsive-img lazyload" src="{{ img_loader }}" data-src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}"></a>*/
/* 								</div>*/
/* 								<div class="card-content center-align">*/
/* 									<span class="card-title"><a href="{{ product.href }}" class="grey-text text-darken-4">{{ product.name }}</a></span>*/
/* 								</div>*/
/* 								<div class="card-action center-align grey lighten-5">*/
/* 									{% if product.add_cart %}*/
/* 									<button class="btn btn-floating btn-large waves-effect waves-light red add-cart" title="{{ button_cart }}" onclick="cart.add('{{ product.product_id }}');"><i class="material-icons">add_shopping_cart</i></button>*/
/* 									{% else %}*/
/* 									<button class="btn btn-floating btn-large add-cart" disabled="disabled"><i class="material-icons">add_shopping_cart</i></button>*/
/* 									{% endif %}*/
/* 									{% if product.price %}*/
/* 									{% if not product.special %}*/
/* 									<span class="card-price">{{ product.price }}</span>*/
/* 									{% else %}*/
/* 									<span class="card-price old-price grey-text">{{ product.price }}</span>*/
/* 									<span class="card-price red-text text-darken-2">{{ product.special }}</span>*/
/* 									{% endif %}*/
/* 									{% if product.tax %}*/
/* 									<span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/* 									{% endif %}*/
/* 									{% endif %}*/
/* 									<div class="rating">*/
/* 										<hr>*/
/* 										<span class="grey lighten-5">*/
/* 											{% if product.rating %}*/
/* 												{% for i in 1..5 %}*/
/* 													{% if product.rating < i %}*/
/* 													<i class="material-icons">star_border</i>*/
/* 													{% else %}*/
/* 													<i class="material-icons">star</i>*/
/* 													{% endif %}*/
/* 												{% endfor %}*/
/* 											{% else %}*/
/* 												<i class="material-icons">star_border</i>*/
/* 												<i class="material-icons">star_border</i>*/
/* 												<i class="material-icons">star_border</i>*/
/* 												<i class="material-icons">star_border</i>*/
/* 												<i class="material-icons">star_border</i>*/
/* 											{% endif %}*/
/* 										</span>*/
/* 									</div>*/
/* 									<a href="{{ product.href }}" class="btn waves-effect waves-light red width-max">{{ text_more_detailed }}</a>*/
/* 								</div>*/
/* 								<div class="card-reveal">*/
/* 									<span class="card-title"><a href="{{ product.href }}" class="grey-text text-darken-4">{{ product.name }}</a><i class="material-icons waves-effect waves-circle close-icon">close</i></span>*/
/* 									<p>{{ product.description }}</p>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						{% endfor %}*/
/* 				</div>*/
/* 				{% if pagination %}*/
/* 					<div class="row">{{ pagination }}</div>*/
/* 				{% endif %}*/
/* 				{% else %}*/
/* 				<div class="card-panel center">*/
/* 					<p class="flow-text text-bold">{{ text_empty }}</p>*/
/* 					<img class="responsive-img lazyload" src="{{ img_loader }}" data-src="catalog/view/theme/materialize/image/search-empty.png" alt="">*/
/* 				</div>*/
/* 				{% endif %}*/
/* 				{{ content_bottom }}*/
/* 			</div>*/
/* 			{{ column_right }}*/
/* 		</div>*/
/* 	</div>*/
/* </main>*/
/* <script>*/
/* 	document.addEventListener("DOMContentLoaded", function(event) {*/
/* 		$('#button-search').bind('click', function() {*/
/* 			url = 'index.php?route=product/search';*/
/* 			var search = $('#content input[name=\'search\']').prop('value');*/
/* 			if (search) {*/
/* 				url += '&search=' + encodeURIComponent(search);*/
/* 			}*/
/* 			var category_id = $('#content select[name=\'category_id\']').prop('value');*/
/* 			if (category_id > 0) {*/
/* 				url += '&category_id=' + encodeURIComponent(category_id);*/
/* 			}*/
/* 			var sub_category = $('#content input[name=\'sub_category\']:checked').prop('value');*/
/* 			if (sub_category) {*/
/* 				url += '&sub_category=true';*/
/* 			}*/
/* 			var filter_description = $('#content input[name=\'description\']:checked').prop('value');*/
/* 			if (filter_description) {*/
/* 				url += '&description=true';*/
/* 			}*/
/* 			location = url;*/
/* 		});*/
/* 		$('#content input[name=\'search\']').bind('keydown', function(e) {*/
/* 			if (e.keyCode == 13) {*/
/* 				$('#button-search').trigger('click');*/
/* 			}*/
/* 		});*/
/* 		$('select[name=\'category_id\']').on('change', function() {*/
/* 			if (this.value == '0') {*/
/* 				$('input[name=\'sub_category\']').prop('disabled', true);*/
/* 			} else {*/
/* 				$('input[name=\'sub_category\']').prop('disabled', false);*/
/* 			}*/
/* 		});*/
/* 		$('select[name=\'category_id\']').trigger('change');*/
/* 	});*/
/* </script>*/
/* {% endspaceless %}*/
/* {{ footer }}*/
