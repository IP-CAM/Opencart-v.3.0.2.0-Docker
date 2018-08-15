<?php

/* extension/theme/materialize.twig */
class __TwigTemplate_64abad8555b404deefd0382313e92bdbebf21e4177c666b1966fb751cf6fad05 extends Twig_Template
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
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"pull-right\">
\t\t\t\t<button type=\"button\" form=\"form-theme-materialize\" id=\"apply-btn\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_apply"]) ? $context["button_apply"] : null);
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-repeat\"></i></button>
\t\t\t</div>
\t\t\t<h1>";
        // line 8
        echo (isset($context["materialize_title"]) ? $context["materialize_title"] : null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "\t\t\t\t<li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t<form action=\"";
        // line 17
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" data-action=\"";
        echo (isset($context["apply"]) ? $context["apply"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-theme-materialize\" class=\"form-horizontal\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-12 col-md-8\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\"><h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 21
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3></div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<ul id=\"apply-tab\" class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-colors\" data-toggle=\"tab\">";
        // line 24
        echo (isset($context["text_colors"]) ? $context["text_colors"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 25
        echo (isset($context["text_image"]) ? $context["text_image"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#tab-product\" data-toggle=\"tab\">";
        // line 26
        echo (isset($context["text_product"]) ? $context["text_product"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#tab-footer\" data-toggle=\"tab\">";
        // line 27
        echo (isset($context["text_footer"]) ? $context["text_footer"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#tab-common\" data-toggle=\"tab\">";
        // line 28
        echo (isset($context["text_common"]) ? $context["text_common"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-colors\">
\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 33
        echo (isset($context["entry_colors"]) ? $context["entry_colors"] : null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i>&nbsp;";
        // line 34
        echo (isset($context["help_colors"]) ? $context["help_colors"] : null);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\" id=\"tab-colors-pills\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-color-common\" data-toggle=\"tab\">";
        // line 38
        echo (isset($context["text_common"]) ? $context["text_common"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-color-header\" data-toggle=\"tab\">";
        // line 39
        echo (isset($context["text_header"]) ? $context["text_header"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-color-footer\" data-toggle=\"tab\">";
        // line 40
        echo (isset($context["text_footer"]) ? $context["text_footer"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-color-common\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-color-common__buttons\" data-toggle=\"tab\">";
        // line 47
        echo (isset($context["text_buttons"]) ? $context["text_buttons"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-color-common__mobile\" data-toggle=\"tab\">";
        // line 48
        echo (isset($context["text_mobile"]) ? $context["text_mobile"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-color-common__buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 53
        echo (isset($context["entry_background"]) ? $context["entry_background"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_background\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors"]) ? $context["theme_materialize_colors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 57
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_background"]) ? $context["theme_materialize_color_background"] : null))) {
                // line 58
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 60
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 62
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 67
        echo (isset($context["entry_cart_btn"]) ? $context["entry_cart_btn"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_cart_btn\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors"]) ? $context["theme_materialize_colors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 71
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_cart_btn"]) ? $context["theme_materialize_color_cart_btn"] : null))) {
                // line 72
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 74
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 76
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_cart_btn_text\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors_text"]) ? $context["theme_materialize_colors_text"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 80
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_cart_btn_text"]) ? $context["theme_materialize_color_cart_btn_text"] : null))) {
                // line 81
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 83
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 85
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 90
        echo (isset($context["entry_total_btn"]) ? $context["entry_total_btn"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_total_btn\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors"]) ? $context["theme_materialize_colors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 94
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_total_btn"]) ? $context["theme_materialize_color_total_btn"] : null))) {
                // line 95
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 97
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 99
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_total_btn_text\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors_text"]) ? $context["theme_materialize_colors_text"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 103
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_total_btn_text"]) ? $context["theme_materialize_color_total_btn_text"] : null))) {
                // line 104
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 106
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 108
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 113
        echo (isset($context["entry_compare_btn"]) ? $context["entry_compare_btn"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_compare_btn\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors"]) ? $context["theme_materialize_colors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 117
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_compare_btn"]) ? $context["theme_materialize_color_compare_btn"] : null))) {
                // line 118
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 120
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 122
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_compare_btn_text\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors_text"]) ? $context["theme_materialize_colors_text"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 126
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_compare_btn_text"]) ? $context["theme_materialize_color_compare_btn_text"] : null))) {
                // line 127
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 129
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 131
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 136
        echo (isset($context["entry_tot_cmp_btn"]) ? $context["entry_tot_cmp_btn"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_compare_total_btn\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors"]) ? $context["theme_materialize_colors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 140
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_compare_total_btn"]) ? $context["theme_materialize_color_compare_total_btn"] : null))) {
                // line 141
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 143
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 145
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_compare_total_btn_text\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors_text"]) ? $context["theme_materialize_colors_text"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 149
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_compare_total_btn_text"]) ? $context["theme_materialize_color_compare_total_btn_text"] : null))) {
                // line 150
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 152
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 154
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 159
        echo (isset($context["entry_btt_btn"]) ? $context["entry_btt_btn"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_btt_btn\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors"]) ? $context["theme_materialize_colors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 163
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_btt_btn"]) ? $context["theme_materialize_color_btt_btn"] : null))) {
                // line 164
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 166
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 168
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_btt_btn_text\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors_text"]) ? $context["theme_materialize_colors_text"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 172
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_btt_btn_text"]) ? $context["theme_materialize_color_btt_btn_text"] : null))) {
                // line 173
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 175
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 177
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-color-common__mobile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 184
        echo (isset($context["entry_bar"]) ? $context["entry_bar"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_browser_bar\" id=\"select-color-browser-bar\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 187
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors"]) ? $context["theme_materialize_colors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 188
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_browser_bar"]) ? $context["theme_materialize_color_browser_bar"] : null))) {
                // line 189
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" data-hex=\"#";
                echo $this->getAttribute($context["color"], "hex", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 191
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" data-hex=\"#";
                echo $this->getAttribute($context["color"], "hex", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 193
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"theme_materialize_color_browser_bar_hex\" value=\"";
        // line 195
        echo (((isset($context["theme_materialize_color_browser_bar_hex"]) ? $context["theme_materialize_color_browser_bar_hex"] : null)) ? ((isset($context["theme_materialize_color_browser_bar_hex"]) ? $context["theme_materialize_color_browser_bar_hex"] : null)) : (""));
        echo "\" id=\"input-color-browser-bar-hex\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 199
        echo (isset($context["entry_nav_btn"]) ? $context["entry_nav_btn"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_nav_btn\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 202
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors"]) ? $context["theme_materialize_colors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 203
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_nav_btn"]) ? $context["theme_materialize_color_nav_btn"] : null))) {
                // line 204
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 206
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 208
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_nav_btn_text\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 211
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors_text"]) ? $context["theme_materialize_colors_text"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 212
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_nav_btn_text"]) ? $context["theme_materialize_color_nav_btn_text"] : null))) {
                // line 213
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 215
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 217
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 218
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-color-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-color-header__desktop\" data-toggle=\"tab\">";
        // line 226
        echo (isset($context["text_desktop"]) ? $context["text_desktop"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-color-header__mobile\" data-toggle=\"tab\">";
        // line 227
        echo (isset($context["text_mobile"]) ? $context["text_mobile"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-color-header__desktop\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 232
        echo (isset($context["entry_top_menu"]) ? $context["entry_top_menu"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_top_menu\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 235
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors"]) ? $context["theme_materialize_colors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 236
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_top_menu"]) ? $context["theme_materialize_color_top_menu"] : null))) {
                // line 237
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 239
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 241
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 242
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_top_menu_text\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 244
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors_text"]) ? $context["theme_materialize_colors_text"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 245
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_top_menu_text"]) ? $context["theme_materialize_color_top_menu_text"] : null))) {
                // line 246
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 248
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 250
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 251
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 255
        echo (isset($context["entry_header"]) ? $context["entry_header"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_header\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 258
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors"]) ? $context["theme_materialize_colors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 259
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_header"]) ? $context["theme_materialize_color_header"] : null))) {
                // line 260
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 262
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 264
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 265
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_header_text\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 267
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors_text"]) ? $context["theme_materialize_colors_text"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 268
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_header_text"]) ? $context["theme_materialize_color_header_text"] : null))) {
                // line 269
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 271
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 273
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 274
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 278
        echo (isset($context["entry_navigation"]) ? $context["entry_navigation"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_navigation\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 281
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors"]) ? $context["theme_materialize_colors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 282
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_navigation"]) ? $context["theme_materialize_color_navigation"] : null))) {
                // line 283
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 285
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 287
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 288
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_navigation_text\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 290
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors_text"]) ? $context["theme_materialize_colors_text"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 291
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_navigation_text"]) ? $context["theme_materialize_color_navigation_text"] : null))) {
                // line 292
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 294
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 296
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 297
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 301
        echo (isset($context["entry_search"]) ? $context["entry_search"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_search\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 304
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors"]) ? $context["theme_materialize_colors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 305
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_search"]) ? $context["theme_materialize_color_search"] : null))) {
                // line 306
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 308
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 310
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 311
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-color-header__mobile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 317
        echo (isset($context["entry_sidebar"]) ? $context["entry_sidebar"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_sidebar\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 320
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors"]) ? $context["theme_materialize_colors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 321
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_sidebar"]) ? $context["theme_materialize_color_sidebar"] : null))) {
                // line 322
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 324
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 326
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 327
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_sidebar_text\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 329
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors_text"]) ? $context["theme_materialize_colors_text"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 330
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_sidebar_text"]) ? $context["theme_materialize_color_sidebar_text"] : null))) {
                // line 331
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 333
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 335
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 336
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 340
        echo (isset($context["entry_mob_search"]) ? $context["entry_mob_search"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_mobile_search\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 343
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors"]) ? $context["theme_materialize_colors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 344
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_mobile_search"]) ? $context["theme_materialize_color_mobile_search"] : null))) {
                // line 345
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 347
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 349
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 350
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-color-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-color-footer__common\" data-toggle=\"tab\">";
        // line 358
        echo (isset($context["text_common"]) ? $context["text_common"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-color-footer__common\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 363
        echo (isset($context["entry_footer"]) ? $context["entry_footer"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_footer\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 366
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors"]) ? $context["theme_materialize_colors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 367
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_footer"]) ? $context["theme_materialize_color_footer"] : null))) {
                // line 368
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 370
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 372
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 373
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_footer_text\" id=\"input-color-footer-text\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 375
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors_text"]) ? $context["theme_materialize_colors_text"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 376
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_footer_text"]) ? $context["theme_materialize_color_footer_text"] : null))) {
                // line 377
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" data-hex=\"#";
                echo $this->getAttribute($context["color"], "hex", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 379
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" data-hex=\"#";
                echo $this->getAttribute($context["color"], "hex", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 381
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 382
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-image\">
\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 395
        echo (isset($context["text_image"]) ? $context["text_image"] : null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-zoom\">";
        // line 397
        echo (isset($context["text_imagezoom"]) ? $context["text_imagezoom"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_image_zoom\" id=\"input-image-zoom\" class=\"selectpicker show-tick\" data-width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 400
        if ((isset($context["theme_materialize_image_zoom"]) ? $context["theme_materialize_image_zoom"] : null)) {
            // line 401
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 402
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 404
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 405
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 407
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-category-width\">";
        // line 411
        echo (isset($context["entry_image_category"]) ? $context["entry_image_category"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_category_width\" value=\"";
        // line 415
        echo (isset($context["theme_materialize_image_category_width"]) ? $context["theme_materialize_image_category_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-category-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_category_height\" value=\"";
        // line 418
        echo (isset($context["theme_materialize_image_category_height"]) ? $context["theme_materialize_image_category_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 421
        if ((isset($context["error_image_category"]) ? $context["error_image_category"] : null)) {
            // line 422
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo (isset($context["error_image_category"]) ? $context["error_image_category"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 424
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-thumb-width\">";
        // line 427
        echo (isset($context["entry_image_thumb"]) ? $context["entry_image_thumb"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_thumb_width\" value=\"";
        // line 431
        echo (isset($context["theme_materialize_image_thumb_width"]) ? $context["theme_materialize_image_thumb_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-thumb-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_thumb_height\" value=\"";
        // line 434
        echo (isset($context["theme_materialize_image_thumb_height"]) ? $context["theme_materialize_image_thumb_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 437
        if ((isset($context["error_image_thumb"]) ? $context["error_image_thumb"] : null)) {
            // line 438
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo (isset($context["error_image_thumb"]) ? $context["error_image_thumb"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 440
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-popup-width\">";
        // line 443
        echo (isset($context["entry_image_popup"]) ? $context["entry_image_popup"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_popup_width\" value=\"";
        // line 447
        echo (isset($context["theme_materialize_image_popup_width"]) ? $context["theme_materialize_image_popup_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-popup-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_popup_height\" value=\"";
        // line 450
        echo (isset($context["theme_materialize_image_popup_height"]) ? $context["theme_materialize_image_popup_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 453
        if ((isset($context["error_image_popup"]) ? $context["error_image_popup"] : null)) {
            // line 454
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo (isset($context["error_image_popup"]) ? $context["error_image_popup"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 456
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-product-width\">";
        // line 459
        echo (isset($context["entry_image_product"]) ? $context["entry_image_product"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_product_width\" value=\"";
        // line 463
        echo (isset($context["theme_materialize_image_product_width"]) ? $context["theme_materialize_image_product_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-product-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_product_height\" value=\"";
        // line 466
        echo (isset($context["theme_materialize_image_product_height"]) ? $context["theme_materialize_image_product_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 469
        if ((isset($context["error_image_product"]) ? $context["error_image_product"] : null)) {
            // line 470
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo (isset($context["error_image_product"]) ? $context["error_image_product"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 472
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-additional-width\">";
        // line 475
        echo (isset($context["entry_image_additional"]) ? $context["entry_image_additional"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_additional_width\" value=\"";
        // line 479
        echo (isset($context["theme_materialize_image_additional_width"]) ? $context["theme_materialize_image_additional_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-additional-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_additional_height\" value=\"";
        // line 482
        echo (isset($context["theme_materialize_image_additional_height"]) ? $context["theme_materialize_image_additional_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 485
        if ((isset($context["error_image_additional"]) ? $context["error_image_additional"] : null)) {
            // line 486
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo (isset($context["error_image_additional"]) ? $context["error_image_additional"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 488
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-related\">";
        // line 491
        echo (isset($context["entry_image_related"]) ? $context["entry_image_related"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_related_width\" value=\"";
        // line 495
        echo (isset($context["theme_materialize_image_related_width"]) ? $context["theme_materialize_image_related_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-related\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_related_height\" value=\"";
        // line 498
        echo (isset($context["theme_materialize_image_related_height"]) ? $context["theme_materialize_image_related_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 501
        if ((isset($context["error_image_related"]) ? $context["error_image_related"] : null)) {
            // line 502
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo (isset($context["error_image_related"]) ? $context["error_image_related"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 504
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-compare\">";
        // line 507
        echo (isset($context["entry_image_compare"]) ? $context["entry_image_compare"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_compare_width\" value=\"";
        // line 511
        echo (isset($context["theme_materialize_image_compare_width"]) ? $context["theme_materialize_image_compare_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-compare\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_compare_height\" value=\"";
        // line 514
        echo (isset($context["theme_materialize_image_compare_height"]) ? $context["theme_materialize_image_compare_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 517
        if ((isset($context["error_image_compare"]) ? $context["error_image_compare"] : null)) {
            // line 518
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo (isset($context["error_image_compare"]) ? $context["error_image_compare"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 520
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-wishlist\">";
        // line 523
        echo (isset($context["entry_image_wishlist"]) ? $context["entry_image_wishlist"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_wishlist_width\" value=\"";
        // line 527
        echo (isset($context["theme_materialize_image_wishlist_width"]) ? $context["theme_materialize_image_wishlist_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-wishlist\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_wishlist_height\" value=\"";
        // line 530
        echo (isset($context["theme_materialize_image_wishlist_height"]) ? $context["theme_materialize_image_wishlist_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 533
        if ((isset($context["error_image_wishlist"]) ? $context["error_image_wishlist"] : null)) {
            // line 534
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo (isset($context["error_image_wishlist"]) ? $context["error_image_wishlist"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 536
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-cart\">";
        // line 539
        echo (isset($context["entry_image_cart"]) ? $context["entry_image_cart"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_cart_width\" value=\"";
        // line 543
        echo (isset($context["theme_materialize_image_cart_width"]) ? $context["theme_materialize_image_cart_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-cart\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_cart_height\" value=\"";
        // line 546
        echo (isset($context["theme_materialize_image_cart_height"]) ? $context["theme_materialize_image_cart_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 549
        if ((isset($context["error_image_cart"]) ? $context["error_image_cart"] : null)) {
            // line 550
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo (isset($context["error_image_cart"]) ? $context["error_image_cart"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 552
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-location\">";
        // line 555
        echo (isset($context["entry_image_location"]) ? $context["entry_image_location"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_location_width\" value=\"";
        // line 559
        echo (isset($context["theme_materialize_image_location_width"]) ? $context["theme_materialize_image_location_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-location\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_location_height\" value=\"";
        // line 562
        echo (isset($context["theme_materialize_image_location_height"]) ? $context["theme_materialize_image_location_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 565
        if ((isset($context["error_image_location"]) ? $context["error_image_location"] : null)) {
            // line 566
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo (isset($context["error_image_location"]) ? $context["error_image_location"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 568
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-product\">
\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 574
        echo (isset($context["text_product"]) ? $context["text_product"] : null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-catalog-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 576
        echo (isset($context["help_product_limit"]) ? $context["help_product_limit"] : null);
        echo "\">";
        echo (isset($context["entry_product_limit"]) ? $context["entry_product_limit"] : null);
        echo ":</span></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_product_limit\" value=\"";
        // line 578
        echo (isset($context["theme_materialize_product_limit"]) ? $context["theme_materialize_product_limit"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_product_limit"]) ? $context["entry_product_limit"] : null);
        echo "\" id=\"input-catalog-limit\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 579
        if ((isset($context["error_product_limit"]) ? $context["error_product_limit"] : null)) {
            // line 580
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo (isset($context["error_product_limit"]) ? $context["error_product_limit"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 582
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-description-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 585
        echo (isset($context["help_product_description_length"]) ? $context["help_product_description_length"] : null);
        echo "\">";
        echo (isset($context["entry_product_description_length"]) ? $context["entry_product_description_length"] : null);
        echo ":</span></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_product_description_length\" value=\"";
        // line 587
        echo (isset($context["theme_materialize_product_description_length"]) ? $context["theme_materialize_product_description_length"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_product_description_length"]) ? $context["entry_product_description_length"] : null);
        echo "\" id=\"input-description-limit\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 588
        if ((isset($context["error_product_description_length"]) ? $context["error_product_description_length"] : null)) {
            // line 589
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo (isset($context["error_product_description_length"]) ? $context["error_product_description_length"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 591
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 596
        echo (isset($context["entry_show_fields"]) ? $context["entry_show_fields"] : null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10 col-sm-push-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 602
        if ((isset($context["theme_materialize_show_model"]) ? $context["theme_materialize_show_model"] : null)) {
            // line 603
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_model\" value=\"1\" id=\"show-model\" class=\"styled\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 605
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_model\" value=\"1\" id=\"show-model\" class=\"styled\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 607
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"show-model\">";
        echo (isset($context["entry_model"]) ? $context["entry_model"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 610
        if ((isset($context["theme_materialize_show_sku"]) ? $context["theme_materialize_show_sku"] : null)) {
            // line 611
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_sku\" value=\"1\" id=\"show-sku\" class=\"styled\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 613
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_sku\" value=\"1\" id=\"show-sku\" class=\"styled\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 615
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"show-sku\">";
        echo (isset($context["entry_sku"]) ? $context["entry_sku"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 618
        if ((isset($context["theme_materialize_show_upc"]) ? $context["theme_materialize_show_upc"] : null)) {
            // line 619
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_upc\" value=\"1\" id=\"show-upc\" class=\"styled\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 621
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_upc\" value=\"1\" id=\"show-upc\" class=\"styled\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 623
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"show-upc\">";
        echo (isset($context["entry_upc"]) ? $context["entry_upc"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 626
        if ((isset($context["theme_materialize_show_ean"]) ? $context["theme_materialize_show_ean"] : null)) {
            // line 627
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_ean\" value=\"1\" id=\"show-ean\" class=\"styled\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 629
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_ean\" value=\"1\" id=\"show-ean\" class=\"styled\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 631
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"show-ean\">";
        echo (isset($context["entry_ean"]) ? $context["entry_ean"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 634
        if ((isset($context["theme_materialize_show_jan"]) ? $context["theme_materialize_show_jan"] : null)) {
            // line 635
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_jan\" value=\"1\" id=\"show-jan\" class=\"styled\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 637
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_jan\" value=\"1\" id=\"show-jan\" class=\"styled\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 639
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"show-jan\">";
        echo (isset($context["entry_jan"]) ? $context["entry_jan"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 644
        if ((isset($context["theme_materialize_show_isbn"]) ? $context["theme_materialize_show_isbn"] : null)) {
            // line 645
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_isbn\" value=\"1\" id=\"show-isbn\" class=\"styled\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 647
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_isbn\" value=\"1\" id=\"show-isbn\" class=\"styled\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 649
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"show-isbn\">";
        echo (isset($context["entry_isbn"]) ? $context["entry_isbn"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 652
        if ((isset($context["theme_materialize_show_mpn"]) ? $context["theme_materialize_show_mpn"] : null)) {
            // line 653
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_mpn\" value=\"1\" id=\"show-mpn\" class=\"styled\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 655
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_mpn\" value=\"1\" id=\"show-mpn\" class=\"styled\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 657
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"show-mpn\">";
        echo (isset($context["entry_mpn"]) ? $context["entry_mpn"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 660
        if ((isset($context["theme_materialize_show_location"]) ? $context["theme_materialize_show_location"] : null)) {
            // line 661
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_location\" value=\"1\" id=\"show-location\" class=\"styled\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 663
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_location\" value=\"1\" id=\"show-location\" class=\"styled\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 665
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"show-location\">";
        echo (isset($context["entry_location"]) ? $context["entry_location"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 668
        if ((isset($context["theme_materialize_show_dimensions"]) ? $context["theme_materialize_show_dimensions"] : null)) {
            // line 669
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_dimensions\" value=\"1\" id=\"show-dimensions\" class=\"styled\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 671
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_dimensions\" value=\"1\" id=\"show-dimensions\" class=\"styled\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 673
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"show-dimensions\">";
        echo (isset($context["entry_dimension"]) ? $context["entry_dimension"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 676
        if ((isset($context["theme_materialize_show_weight"]) ? $context["theme_materialize_show_weight"] : null)) {
            // line 677
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_weight\" value=\"1\" id=\"show-weight\" class=\"styled\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 679
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_weight\" value=\"1\" id=\"show-weight\" class=\"styled\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 681
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"show-weight\">";
        echo (isset($context["entry_weight"]) ? $context["entry_weight"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 690
        echo (isset($context["entry_show_remainder"]) ? $context["entry_show_remainder"] : null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-type-remainder\">";
        // line 692
        echo (isset($context["entry_type"]) ? $context["entry_type"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_remainder\" id=\"input-type-remainder\" class=\"selectpicker show-tick\" data-width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
        // line 695
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 696
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["remainders"]) ? $context["remainders"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["remainder"]) {
            // line 697
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["remainder"], "value", array()) == (isset($context["theme_materialize_remainder"]) ? $context["theme_materialize_remainder"] : null))) {
                // line 698
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["remainder"], "value", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["remainder"], "text", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 700
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["remainder"], "value", array());
                echo "\">";
                echo $this->getAttribute($context["remainder"], "text", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 702
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['remainder'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 703
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required progressbar-settings\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 707
        echo (isset($context["entry_calculation"]) ? $context["entry_calculation"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_percent_remainder\" value=\"";
        // line 709
        echo (isset($context["theme_materialize_percent_remainder"]) ? $context["theme_materialize_percent_remainder"] : null);
        echo "\" placeholder=\"\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 710
        if ((isset($context["error_percent_remainder"]) ? $context["error_percent_remainder"] : null)) {
            // line 711
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo (isset($context["error_percent_remainder"]) ? $context["error_percent_remainder"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 713
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 718
        echo (isset($context["entry_payment"]) ? $context["entry_payment"] : null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i>&nbsp;";
        // line 719
        echo (isset($context["help_payment"]) ? $context["help_payment"] : null);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 721
        echo (isset($context["entry_text"]) ? $context["entry_text"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 723
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 724
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
            // line 725
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\"/></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize[";
            // line 726
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][payment_text]\" value=\"";
            echo (($this->getAttribute((isset($context["theme_materialize"]) ? $context["theme_materialize"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["theme_materialize"]) ? $context["theme_materialize"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "payment_text", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_text"]) ? $context["entry_text"] : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 729
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 732
        echo (isset($context["entry_payment_image"]) ? $context["entry_payment_image"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-payment-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 734
        echo (isset($context["theme_materialize_payment_thumb"]) ? $context["theme_materialize_payment_thumb"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"theme_materialize_payment_image\" value=\"";
        // line 735
        echo (isset($context["theme_materialize_payment_image"]) ? $context["theme_materialize_payment_image"] : null);
        echo "\" id=\"input-payment-image\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 739
        echo (isset($context["help_image_size"]) ? $context["help_image_size"] : null);
        echo "\">";
        echo (isset($context["entry_payment_image"]) ? $context["entry_payment_image"] : null);
        echo ":</span></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_payment_image_width\" value=\"";
        // line 743
        echo (isset($context["theme_materialize_payment_image_width"]) ? $context["theme_materialize_payment_image_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_payment_width"]) ? $context["entry_payment_width"] : null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_payment_image_height\" value=\"";
        // line 746
        echo (isset($context["theme_materialize_payment_image_height"]) ? $context["theme_materialize_payment_image_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_payment_height"]) ? $context["entry_payment_height"] : null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-footer\">
\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 755
        echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"foter-descriptions-language\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 757
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 758
            echo "\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#foter-descriptions";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /> ";
            echo $this->getAttribute($context["language"], "name", array());
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 760
        echo "\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 762
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 763
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"foter-descriptions";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
            // line 765
            echo (isset($context["entry_footer_title"]) ? $context["entry_footer_title"] : null);
            echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize[";
            // line 767
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][footer_title]\" value=\"";
            echo (($this->getAttribute((isset($context["theme_materialize"]) ? $context["theme_materialize"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["theme_materialize"]) ? $context["theme_materialize"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "footer_title", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
            // line 771
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"theme_materialize[";
            // line 773
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][footer_description]\" placeholder=\"";
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "\" class=\"form-control textarea-resize-vertical\">";
            echo (($this->getAttribute((isset($context["theme_materialize"]) ? $context["theme_materialize"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["theme_materialize"]) ? $context["theme_materialize"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "footer_description", array())) : (""));
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 778
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10 col-sm-push-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 782
        if ((isset($context["theme_materialize_footer_contact"]) ? $context["theme_materialize_footer_contact"] : null)) {
            // line 783
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_footer_contact\" value=\"1\" id=\"show-footer-contact\" class=\"styled\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 785
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_footer_contact\" value=\"1\" id=\"show-footer-contact\" class=\"styled\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 787
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"show-footer-contact\">";
        echo (isset($context["entry_contact"]) ? $context["entry_contact"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 794
        echo (isset($context["entry_socials"]) ? $context["entry_socials"] : null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 796
        echo (isset($context["entry_text"]) ? $context["entry_text"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 798
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 799
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
            // line 800
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\"/></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize[";
            // line 801
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][sn_text]\" value=\"";
            echo (($this->getAttribute((isset($context["theme_materialize"]) ? $context["theme_materialize"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["theme_materialize"]) ? $context["theme_materialize"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "sn_text", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_text"]) ? $context["entry_text"] : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 804
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10 col-sm-push-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 809
        if ((isset($context["theme_materialize_sn_index"]) ? $context["theme_materialize_sn_index"] : null)) {
            // line 810
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_sn_index\" value=\"1\" id=\"dont-index-sn-links\" class=\"styled\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 812
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_sn_index\" value=\"1\" id=\"dont-index-sn-links\" class=\"styled\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 814
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"dont-index-sn-links\">";
        echo (isset($context["entry_not_index"]) ? $context["entry_not_index"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"social-icon-language\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 820
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 821
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#social-icon-language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /> ";
            echo $this->getAttribute($context["language"], "name", array());
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 823
        echo "\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 825
        $context["icon_row"] = 0;
        // line 826
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 827
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"social-icon-language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<table id=\"social-icons";
            // line 828
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 831
            echo (isset($context["entry_icon"]) ? $context["entry_icon"] : null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
            // line 832
            echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\" style=\"width: 50%\">";
            // line 833
            echo (isset($context["entry_link"]) ? $context["entry_link"] : null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\" style=\"width: 10%\">";
            // line 834
            echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 839
            if ($this->getAttribute((isset($context["theme_materialize_social_icons"]) ? $context["theme_materialize_social_icons"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                // line 840
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["theme_materialize_social_icons"]) ? $context["theme_materialize_social_icons"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["theme_materialize_social_icon"]) {
                    // line 841
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"icon-row";
                    echo (isset($context["icon_row"]) ? $context["icon_row"] : null);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image";
                    // line 843
                    echo (isset($context["icon_row"]) ? $context["icon_row"] : null);
                    echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
                    echo $this->getAttribute($context["theme_materialize_social_icon"], "thumb", array());
                    echo "\" alt=\"\" title=\"\" data-placeholder=\"";
                    echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
                    echo "\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"theme_materialize_social_icon[";
                    // line 844
                    echo $this->getAttribute($context["language"], "language_id", array());
                    echo "][";
                    echo (isset($context["icon_row"]) ? $context["icon_row"] : null);
                    echo "][icon]\" value=\"";
                    echo $this->getAttribute($context["theme_materialize_social_icon"], "icon", array());
                    echo "\" id=\"input-icon";
                    echo (isset($context["icon_row"]) ? $context["icon_row"] : null);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_social_icon[";
                    // line 847
                    echo $this->getAttribute($context["language"], "language_id", array());
                    echo "][";
                    echo (isset($context["icon_row"]) ? $context["icon_row"] : null);
                    echo "][title]\" value=\"";
                    echo $this->getAttribute($context["theme_materialize_social_icon"], "title", array());
                    echo "\" placeholder=\"";
                    echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
                    echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_social_icon[";
                    // line 850
                    echo $this->getAttribute($context["language"], "language_id", array());
                    echo "][";
                    echo (isset($context["icon_row"]) ? $context["icon_row"] : null);
                    echo "][link]\" value=\"";
                    echo $this->getAttribute($context["theme_materialize_social_icon"], "link", array());
                    echo "\" placeholder=\"";
                    echo (isset($context["entry_link"]) ? $context["entry_link"] : null);
                    echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_social_icon[";
                    // line 853
                    echo $this->getAttribute($context["language"], "language_id", array());
                    echo "][";
                    echo (isset($context["icon_row"]) ? $context["icon_row"] : null);
                    echo "][sort_order]\" value=\"";
                    echo $this->getAttribute($context["theme_materialize_social_icon"], "sort_order", array());
                    echo "\" placeholder=\"";
                    echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
                    echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#icon-row";
                    // line 856
                    echo (isset($context["icon_row"]) ? $context["icon_row"] : null);
                    echo ", .tooltip').remove();\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 859
                    $context["icon_row"] = ((isset($context["icon_row"]) ? $context["icon_row"] : null) + 1);
                    // line 860
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme_materialize_social_icon'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 861
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 862
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"4\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><button type=\"button\" onclick=\"addIcon('";
            // line 866
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "');\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_icon_add"]) ? $context["button_icon_add"] : null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 872
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-common\">
\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 877
        echo (isset($context["text_caching"]) ? $context["text_caching"] : null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10 col-sm-push-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 881
        if ((isset($context["theme_materialize_cache_css"]) ? $context["theme_materialize_cache_css"] : null)) {
            // line 882
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_cache_css\" value=\"1\" id=\"cache-css\" class=\"styled\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 884
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_cache_css\" value=\"1\" id=\"cache-css\" class=\"styled\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 886
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"cache-css\">";
        echo (isset($context["text_caching_css"]) ? $context["text_caching_css"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10 col-sm-push-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<a id=\"clear-css\" class=\"btn btn-danger\" href=\"";
        // line 892
        echo (isset($context["clear_css"]) ? $context["clear_css"] : null);
        echo "\"><i class=\"fa fa-eraser fa-lg\"></i> ";
        echo (isset($context["text_clear_cache"]) ? $context["text_clear_cache"] : null);
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"footer-appeal-users\" class=\"panel-footer text-center\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-12 col-md-4\">
\t\t\t\t\t<div class=\"panel panel-default\" id=\"panel-data\">
\t\t\t\t\t\t<div class=\"panel-heading\"><h3 class=\"panel-title\"><i class=\"fa fa-power-off\"></i> ";
        // line 904
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</h3></div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<select name=\"theme_materialize_status\" id=\"input-status\" class=\"selectpicker show-tick\" data-width=\"100%\">
\t\t\t\t\t\t\t\t";
        // line 907
        if ((isset($context["theme_materialize_status"]) ? $context["theme_materialize_status"] : null)) {
            // line 908
            echo "\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\" data-icon=\"fa-toggle-on\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\" data-icon=\"fa-toggle-off\">";
            // line 909
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        } else {
            // line 911
            echo "\t\t\t\t\t\t\t\t<option value=\"1\" data-icon=\"fa-toggle-on\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\" data-icon=\"fa-toggle-off\">";
            // line 912
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        // line 914
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 919
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i> ";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6 text-right\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" form=\"form-theme-materialize\" data-toggle=\"tooltip\" title=\"";
        // line 922
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i> ";
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<input type=\"hidden\" name=\"theme_materialize_installed_appeal\" value=\"0\">
\t\t</form>
\t</div>
</div>
<script type=\"text/javascript\">
\t\$('#language a:first').tab('show');
\t\$('#tab-colors-pills a:first').tab('show');
\t\$('#foter-descriptions-language a:first').tab('show');
\t\$('#social-icon-language a:first').tab('show');
\t\$('#maps-descriptions-language a:first').tab('show');

\tvar selectBrowserBar = \$(\"#select-color-browser-bar\"),
\t\tinputBrowserBar = \$(\"#input-color-browser-bar-hex\"),
\t\tinputFooterColorText = \$(\"#input-color-footer-text\"),
\t\tinputTypeRemainder = \$(\"#input-type-remainder\");

\tselectBrowserBar.change(function(){
\t\tselectBrowserBarOption = \$(\"#select-color-browser-bar option:selected\");
\t\tvalueHex = selectBrowserBarOption.data('hex');
\t\tinputBrowserBar.attr('value',valueHex);
\t});

\tif (inputTypeRemainder.val() != 'progressbar') {\$('.progressbar-settings').hide();}

\tinputTypeRemainder.change(function(){
\t\tif (inputTypeRemainder.val() != 'progressbar') {\$('.progressbar-settings').hide();}
\t\tif (inputTypeRemainder.val() == 'progressbar') {\$('.progressbar-settings').show();}
\t});

\t// Socials
\tvar icon_row = ";
        // line 959
        echo (isset($context["icon_row"]) ? $context["icon_row"] : null);
        echo ";

\tfunction addIcon(language_id) {
\t\thtml  = '<tr id=\"icon-row' + icon_row + '\">';
\t\thtml += '\t<td class=\"text-center\">';
\t\thtml += '\t\t<a href=\"\" id=\"thumb-image' + icon_row + '\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 964
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\"></a>';
\t\thtml += '\t\t<input type=\"hidden\" name=\"theme_materialize_social_icon[' + language_id + '][' + icon_row + '][icon]\" value=\"\" id=\"input-icon' + icon_row + '\">';
\t\thtml += '\t</td>';
\t\thtml += '\t<td class=\"text-left\">';
\t\thtml += '\t\t<input type=\"text\" name=\"theme_materialize_social_icon[' + language_id + '][' + icon_row + '][title]\" value=\"\" placeholder=\"";
        // line 968
        echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
        echo "\" class=\"form-control\">';
\t\thtml += '\t</td>';
\t\thtml += '\t<td class=\"text-left\">';
\t\thtml += '\t\t<input type=\"text\" name=\"theme_materialize_social_icon[' + language_id + '][' + icon_row + '][link]\" value=\"\" placeholder=\"";
        // line 971
        echo (isset($context["entry_link"]) ? $context["entry_link"] : null);
        echo "\" class=\"form-control\">';
\t\thtml += '\t</td>';
\t\thtml += '\t<td class=\"text-right\">';
\t\thtml += '\t\t<input type=\"text\" name=\"theme_materialize_social_icon[' + language_id + '][' + icon_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 974
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" class=\"form-control\">';
\t\thtml += '\t</td>';
\t\thtml += '\t<td class=\"text-center\">';
\t\thtml += '\t\t<button type=\"button\" onclick=\"\$(\\'#icon-row' + icon_row + ', .tooltip\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 977
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>';
\t\thtml += '\t</td>';
\t\thtml += '</tr>';

\t\t\$('#social-icons' + language_id + ' tbody').append(html);

\t\ticon_row++;
\t}

\t// Selectpicker
\t\$('.selectpicker.selectpicker-live-search').selectpicker({
\t\tsize: 10,
\t\tliveSearch: true,
\t\ticonBase: 'fa',
\t\ttickIcon: 'fa-check'
\t});

\t// Apply button
\tvar applyBtn = \$('#apply-btn'),
\t\tformMaterialize = \$('#form-theme-materialize'),
\t\tdataAction = formMaterialize.attr('data-action');

\tif (sessionStorage['index_p']) {
\t\tvar index_p = sessionStorage['index_p'];
\t} else {
\t\tvar index_p = 0;
\t}

\t\$('#apply-tab li:eq(' + index_p + ') a').tab('show');

\tsessionStorage['index_p'] = 0;

\tapplyBtn.click(function() {
\t\tsessionStorage['index_p'] = \$(\".nav-tabs .active\").index();

\t\tformMaterialize.attr({'action':dataAction});
\t\tformMaterialize.submit();

\t\te.preventDefault();
\t});

\tdocument.addEventListener(\"keydown\", function(event) {
\t\tif (event.keyCode == 83 && (navigator.platform.match(\"Mac\") ? event.metaKey : event.ctrlKey)) {
\t\t\tevent.preventDefault();
\t\t\tapplyBtn.trigger('click');
\t\t}
\t}, false);

\t// Notify
\t";
        // line 1026
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 1027
            echo "\t\$.notify({
\t\ticon: 'fa fa-exclamation-circle',
\t\tmessage: '";
            // line 1029
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "'
\t},{
\t\ttype: \"success\"
\t});
\t";
        }
        // line 1034
        echo "\t";
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 1035
            echo "\t\$.notify({
\t\ticon: 'fa fa-exclamation-circle',
\t\tmessage: '";
            // line 1037
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "'
\t},{
\t\ttype: \"danger\"
\t});
\t";
        }
        // line 1042
        echo "\t";
        if ((isset($context["error_product_limit"]) ? $context["error_product_limit"] : null)) {
            // line 1043
            echo "\t\$.notify({
\t\ticon: 'fa fa-exclamation-circle',
\t\tmessage: '";
            // line 1045
            echo (isset($context["error_product_limit"]) ? $context["error_product_limit"] : null);
            echo "'
\t},{
\t\ttype: \"danger\"
\t});
\t";
        }
        // line 1050
        echo "\t";
        if ((isset($context["error_product_description_length"]) ? $context["error_product_description_length"] : null)) {
            // line 1051
            echo "\t\$.notify({
\t\ticon: 'fa fa-exclamation-circle',
\t\tmessage: '";
            // line 1053
            echo (isset($context["error_product_description_length"]) ? $context["error_product_description_length"] : null);
            echo "'
\t},{
\t\ttype: \"danger\"
\t});
\t";
        }
        // line 1058
        echo "\t";
        if ((isset($context["error_image_category"]) ? $context["error_image_category"] : null)) {
            // line 1059
            echo "\t\$.notify({
\t\ticon: 'fa fa-exclamation-circle',
\t\tmessage: '";
            // line 1061
            echo (isset($context["error_image_category"]) ? $context["error_image_category"] : null);
            echo "'
\t},{
\t\ttype: \"danger\"
\t});
\t";
        }
        // line 1066
        echo "\t";
        if ((isset($context["error_image_thumb"]) ? $context["error_image_thumb"] : null)) {
            // line 1067
            echo "\t\$.notify({
\t\ticon: 'fa fa-exclamation-circle',
\t\tmessage: '";
            // line 1069
            echo (isset($context["error_image_thumb"]) ? $context["error_image_thumb"] : null);
            echo "'
\t},{
\t\ttype: \"danger\"
\t});
\t";
        }
        // line 1074
        echo "\t";
        if ((isset($context["error_image_popup"]) ? $context["error_image_popup"] : null)) {
            // line 1075
            echo "\t\$.notify({
\t\ticon: 'fa fa-exclamation-circle',
\t\tmessage: '";
            // line 1077
            echo (isset($context["error_image_popup"]) ? $context["error_image_popup"] : null);
            echo "'
\t},{
\t\ttype: \"danger\"
\t});
\t";
        }
        // line 1082
        echo "\t";
        if ((isset($context["error_image_product"]) ? $context["error_image_product"] : null)) {
            // line 1083
            echo "\t\$.notify({
\t\ticon: 'fa fa-exclamation-circle',
\t\tmessage: '";
            // line 1085
            echo (isset($context["error_image_product"]) ? $context["error_image_product"] : null);
            echo "'
\t},{
\t\ttype: \"danger\"
\t});
\t";
        }
        // line 1090
        echo "\t";
        if ((isset($context["error_image_additional"]) ? $context["error_image_additional"] : null)) {
            // line 1091
            echo "\t\$.notify({
\t\ticon: 'fa fa-exclamation-circle',
\t\tmessage: '";
            // line 1093
            echo (isset($context["error_image_additional"]) ? $context["error_image_additional"] : null);
            echo "'
\t},{
\t\ttype: \"danger\"
\t});
\t";
        }
        // line 1098
        echo "\t";
        if ((isset($context["error_image_related"]) ? $context["error_image_related"] : null)) {
            // line 1099
            echo "\t\$.notify({
\t\ticon: 'fa fa-exclamation-circle',
\t\tmessage: '";
            // line 1101
            echo (isset($context["error_image_related"]) ? $context["error_image_related"] : null);
            echo "'
\t},{
\t\ttype: \"danger\"
\t});
\t";
        }
        // line 1106
        echo "\t";
        if ((isset($context["error_image_compare"]) ? $context["error_image_compare"] : null)) {
            // line 1107
            echo "\t\$.notify({
\t\ticon: 'fa fa-exclamation-circle',
\t\tmessage: '";
            // line 1109
            echo (isset($context["error_image_compare"]) ? $context["error_image_compare"] : null);
            echo "'
\t},{
\t\ttype: \"danger\"
\t});
\t";
        }
        // line 1114
        echo "\t";
        if ((isset($context["error_image_wishlist"]) ? $context["error_image_wishlist"] : null)) {
            // line 1115
            echo "\t\$.notify({
\t\ticon: 'fa fa-exclamation-circle',
\t\tmessage: '";
            // line 1117
            echo (isset($context["error_image_wishlist"]) ? $context["error_image_wishlist"] : null);
            echo "'
\t},{
\t\ttype: \"danger\"
\t});
\t";
        }
        // line 1122
        echo "\t";
        if ((isset($context["error_image_cart"]) ? $context["error_image_cart"] : null)) {
            // line 1123
            echo "\t\$.notify({
\t\ticon: 'fa fa-exclamation-circle',
\t\tmessage: '";
            // line 1125
            echo (isset($context["error_image_cart"]) ? $context["error_image_cart"] : null);
            echo "'
\t},{
\t\ttype: \"danger\"
\t});
\t";
        }
        // line 1130
        echo "\t";
        if ((isset($context["error_image_location"]) ? $context["error_image_location"] : null)) {
            // line 1131
            echo "\t\$.notify({
\t\ticon: 'fa fa-exclamation-circle',
\t\tmessage: '";
            // line 1133
            echo (isset($context["error_image_location"]) ? $context["error_image_location"] : null);
            echo "'
\t},{
\t\ttype: \"danger\"
\t});
\t";
        }
        // line 1138
        echo "\t";
        if ((isset($context["error_percent_remainder"]) ? $context["error_percent_remainder"] : null)) {
            // line 1139
            echo "\t\$.notify({
\t\ticon: 'fa fa-exclamation-circle',
\t\tmessage: '";
            // line 1141
            echo (isset($context["error_percent_remainder"]) ? $context["error_percent_remainder"] : null);
            echo "'
\t},{
\t\ttype: \"danger\"
\t});
\t";
        }
        // line 1146
        echo "
\t\$('#footer-appeal-users').load('index.php?route=extension/materialize/appeal/installed/footer&user_token=";
        // line 1147
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "');

\t";
        // line 1149
        if ((isset($context["theme_materialize_installed_appeal"]) ? $context["theme_materialize_installed_appeal"] : null)) {
            // line 1150
            echo "\t\$.ajax({
\t\turl: 'index.php?route=extension/materialize/appeal/installed&modal_title=";
            // line 1151
            echo (isset($context["materialize_title"]) ? $context["materialize_title"] : null);
            echo "&user_token=";
            echo (isset($context["user_token"]) ? $context["user_token"] : null);
            echo "',
\t\tdataType: 'html',
\t\tsuccess: function(html) {
\t\t\t\$('#modal-materialize-installed').remove();

\t\t\t\$('body').prepend(html);

\t\t\t\$('#modal-materialize-installed').modal('show');
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
\t";
        }
        // line 1165
        echo "</script>
";
        // line 1166
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/theme/materialize.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3019 => 1166,  3016 => 1165,  2997 => 1151,  2994 => 1150,  2992 => 1149,  2987 => 1147,  2984 => 1146,  2976 => 1141,  2972 => 1139,  2969 => 1138,  2961 => 1133,  2957 => 1131,  2954 => 1130,  2946 => 1125,  2942 => 1123,  2939 => 1122,  2931 => 1117,  2927 => 1115,  2924 => 1114,  2916 => 1109,  2912 => 1107,  2909 => 1106,  2901 => 1101,  2897 => 1099,  2894 => 1098,  2886 => 1093,  2882 => 1091,  2879 => 1090,  2871 => 1085,  2867 => 1083,  2864 => 1082,  2856 => 1077,  2852 => 1075,  2849 => 1074,  2841 => 1069,  2837 => 1067,  2834 => 1066,  2826 => 1061,  2822 => 1059,  2819 => 1058,  2811 => 1053,  2807 => 1051,  2804 => 1050,  2796 => 1045,  2792 => 1043,  2789 => 1042,  2781 => 1037,  2777 => 1035,  2774 => 1034,  2766 => 1029,  2762 => 1027,  2760 => 1026,  2708 => 977,  2702 => 974,  2696 => 971,  2690 => 968,  2681 => 964,  2673 => 959,  2631 => 922,  2621 => 919,  2614 => 914,  2609 => 912,  2604 => 911,  2599 => 909,  2594 => 908,  2592 => 907,  2586 => 904,  2569 => 892,  2559 => 886,  2555 => 884,  2551 => 882,  2549 => 881,  2542 => 877,  2535 => 872,  2521 => 866,  2515 => 862,  2512 => 861,  2506 => 860,  2504 => 859,  2496 => 856,  2484 => 853,  2472 => 850,  2460 => 847,  2448 => 844,  2440 => 843,  2434 => 841,  2429 => 840,  2427 => 839,  2419 => 834,  2415 => 833,  2411 => 832,  2407 => 831,  2401 => 828,  2396 => 827,  2391 => 826,  2389 => 825,  2385 => 823,  2368 => 821,  2364 => 820,  2354 => 814,  2350 => 812,  2346 => 810,  2344 => 809,  2337 => 804,  2324 => 801,  2316 => 800,  2313 => 799,  2309 => 798,  2304 => 796,  2299 => 794,  2288 => 787,  2284 => 785,  2280 => 783,  2278 => 782,  2272 => 778,  2257 => 773,  2252 => 771,  2241 => 767,  2236 => 765,  2230 => 763,  2226 => 762,  2222 => 760,  2205 => 758,  2201 => 757,  2196 => 755,  2182 => 746,  2174 => 743,  2165 => 739,  2158 => 735,  2152 => 734,  2147 => 732,  2142 => 729,  2129 => 726,  2121 => 725,  2118 => 724,  2114 => 723,  2109 => 721,  2104 => 719,  2100 => 718,  2093 => 713,  2087 => 711,  2085 => 710,  2081 => 709,  2076 => 707,  2070 => 703,  2064 => 702,  2056 => 700,  2048 => 698,  2045 => 697,  2041 => 696,  2037 => 695,  2031 => 692,  2026 => 690,  2013 => 681,  2009 => 679,  2005 => 677,  2003 => 676,  1996 => 673,  1992 => 671,  1988 => 669,  1986 => 668,  1979 => 665,  1975 => 663,  1971 => 661,  1969 => 660,  1962 => 657,  1958 => 655,  1954 => 653,  1952 => 652,  1945 => 649,  1941 => 647,  1937 => 645,  1935 => 644,  1926 => 639,  1922 => 637,  1918 => 635,  1916 => 634,  1909 => 631,  1905 => 629,  1901 => 627,  1899 => 626,  1892 => 623,  1888 => 621,  1884 => 619,  1882 => 618,  1875 => 615,  1871 => 613,  1867 => 611,  1865 => 610,  1858 => 607,  1854 => 605,  1850 => 603,  1848 => 602,  1839 => 596,  1832 => 591,  1826 => 589,  1824 => 588,  1818 => 587,  1811 => 585,  1806 => 582,  1800 => 580,  1798 => 579,  1792 => 578,  1785 => 576,  1780 => 574,  1772 => 568,  1766 => 566,  1764 => 565,  1756 => 562,  1748 => 559,  1741 => 555,  1736 => 552,  1730 => 550,  1728 => 549,  1720 => 546,  1712 => 543,  1705 => 539,  1700 => 536,  1694 => 534,  1692 => 533,  1684 => 530,  1676 => 527,  1669 => 523,  1664 => 520,  1658 => 518,  1656 => 517,  1648 => 514,  1640 => 511,  1633 => 507,  1628 => 504,  1622 => 502,  1620 => 501,  1612 => 498,  1604 => 495,  1597 => 491,  1592 => 488,  1586 => 486,  1584 => 485,  1576 => 482,  1568 => 479,  1561 => 475,  1556 => 472,  1550 => 470,  1548 => 469,  1540 => 466,  1532 => 463,  1525 => 459,  1520 => 456,  1514 => 454,  1512 => 453,  1504 => 450,  1496 => 447,  1489 => 443,  1484 => 440,  1478 => 438,  1476 => 437,  1468 => 434,  1460 => 431,  1453 => 427,  1448 => 424,  1442 => 422,  1440 => 421,  1432 => 418,  1424 => 415,  1417 => 411,  1411 => 407,  1406 => 405,  1401 => 404,  1396 => 402,  1391 => 401,  1389 => 400,  1383 => 397,  1378 => 395,  1363 => 382,  1357 => 381,  1343 => 379,  1329 => 377,  1326 => 376,  1322 => 375,  1318 => 373,  1312 => 372,  1300 => 370,  1288 => 368,  1285 => 367,  1281 => 366,  1275 => 363,  1267 => 358,  1257 => 350,  1251 => 349,  1239 => 347,  1227 => 345,  1224 => 344,  1220 => 343,  1214 => 340,  1208 => 336,  1202 => 335,  1190 => 333,  1178 => 331,  1175 => 330,  1171 => 329,  1167 => 327,  1161 => 326,  1149 => 324,  1137 => 322,  1134 => 321,  1130 => 320,  1124 => 317,  1116 => 311,  1110 => 310,  1098 => 308,  1086 => 306,  1083 => 305,  1079 => 304,  1073 => 301,  1067 => 297,  1061 => 296,  1049 => 294,  1037 => 292,  1034 => 291,  1030 => 290,  1026 => 288,  1020 => 287,  1008 => 285,  996 => 283,  993 => 282,  989 => 281,  983 => 278,  977 => 274,  971 => 273,  959 => 271,  947 => 269,  944 => 268,  940 => 267,  936 => 265,  930 => 264,  918 => 262,  906 => 260,  903 => 259,  899 => 258,  893 => 255,  887 => 251,  881 => 250,  869 => 248,  857 => 246,  854 => 245,  850 => 244,  846 => 242,  840 => 241,  828 => 239,  816 => 237,  813 => 236,  809 => 235,  803 => 232,  795 => 227,  791 => 226,  781 => 218,  775 => 217,  763 => 215,  751 => 213,  748 => 212,  744 => 211,  740 => 209,  734 => 208,  722 => 206,  710 => 204,  707 => 203,  703 => 202,  697 => 199,  690 => 195,  687 => 194,  681 => 193,  667 => 191,  653 => 189,  650 => 188,  646 => 187,  640 => 184,  632 => 178,  626 => 177,  614 => 175,  602 => 173,  599 => 172,  595 => 171,  591 => 169,  585 => 168,  573 => 166,  561 => 164,  558 => 163,  554 => 162,  548 => 159,  542 => 155,  536 => 154,  524 => 152,  512 => 150,  509 => 149,  505 => 148,  501 => 146,  495 => 145,  483 => 143,  471 => 141,  468 => 140,  464 => 139,  458 => 136,  452 => 132,  446 => 131,  434 => 129,  422 => 127,  419 => 126,  415 => 125,  411 => 123,  405 => 122,  393 => 120,  381 => 118,  378 => 117,  374 => 116,  368 => 113,  362 => 109,  356 => 108,  344 => 106,  332 => 104,  329 => 103,  325 => 102,  321 => 100,  315 => 99,  303 => 97,  291 => 95,  288 => 94,  284 => 93,  278 => 90,  272 => 86,  266 => 85,  254 => 83,  242 => 81,  239 => 80,  235 => 79,  231 => 77,  225 => 76,  213 => 74,  201 => 72,  198 => 71,  194 => 70,  188 => 67,  182 => 63,  176 => 62,  164 => 60,  152 => 58,  149 => 57,  145 => 56,  139 => 53,  131 => 48,  127 => 47,  117 => 40,  113 => 39,  109 => 38,  102 => 34,  98 => 33,  90 => 28,  86 => 27,  82 => 26,  78 => 25,  74 => 24,  68 => 21,  59 => 17,  53 => 13,  42 => 11,  38 => 10,  33 => 8,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/* 	<div class="page-header">*/
/* 		<div class="container-fluid">*/
/* 			<div class="pull-right">*/
/* 				<button type="button" form="form-theme-materialize" id="apply-btn" data-toggle="tooltip" title="{{ button_apply }}" class="btn btn-success"><i class="fa fa-repeat"></i></button>*/
/* 			</div>*/
/* 			<h1>{{ materialize_title }}</h1>*/
/* 			<ul class="breadcrumb">*/
/* 				{% for breadcrumb in breadcrumbs %}*/
/* 				<li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/* 				{% endfor %}*/
/* 			</ul>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="container-fluid">*/
/* 		<form action="{{ action }}" data-action="{{ apply|raw }}" method="post" enctype="multipart/form-data" id="form-theme-materialize" class="form-horizontal">*/
/* 			<div class="row">*/
/* 				<div class="col-sm-12 col-md-8">*/
/* 					<div class="panel panel-default">*/
/* 						<div class="panel-heading"><h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3></div>*/
/* 						<div class="panel-body">*/
/* 							<ul id="apply-tab" class="nav nav-tabs">*/
/* 								<li class="active"><a href="#tab-colors" data-toggle="tab">{{ text_colors }}</a></li>*/
/* 								<li><a href="#tab-image" data-toggle="tab">{{ text_image }}</a></li>*/
/* 								<li><a href="#tab-product" data-toggle="tab">{{ text_product }}</a></li>*/
/* 								<li><a href="#tab-footer" data-toggle="tab">{{ text_footer }}</a></li>*/
/* 								<li><a href="#tab-common" data-toggle="tab">{{ text_common }}</a></li>*/
/* 							</ul>*/
/* 							<div class="tab-content">*/
/* 								<div class="tab-pane active" id="tab-colors">*/
/* 									<fieldset>*/
/* 										<legend>{{ entry_colors }}</legend>*/
/* 										<div class="alert alert-info"><i class="fa fa-exclamation-circle"></i>&nbsp;{{ help_colors }}</div>*/
/* 										<div class="row">*/
/* 											<div class="col-sm-2">*/
/* 												<ul class="nav nav-pills nav-stacked" id="tab-colors-pills">*/
/* 													<li><a href="#tab-color-common" data-toggle="tab">{{ text_common }}</a></li>*/
/* 													<li><a href="#tab-color-header" data-toggle="tab">{{ text_header }}</a></li>*/
/* 													<li><a href="#tab-color-footer" data-toggle="tab">{{ text_footer }}</a></li>*/
/* 												</ul>*/
/* 											</div>*/
/* 											<div class="col-sm-10">*/
/* 												<div class="tab-content">*/
/* 													<div class="tab-pane" id="tab-color-common">*/
/* 														<ul class="nav nav-tabs">*/
/* 															<li class="active"><a href="#tab-color-common__buttons" data-toggle="tab">{{ text_buttons }}</a></li>*/
/* 															<li><a href="#tab-color-common__mobile" data-toggle="tab">{{ text_mobile }}</a></li>*/
/* 														</ul>*/
/* 														<div class="tab-content">*/
/* 															<div class="tab-pane active" id="tab-color-common__buttons">*/
/* 																<div class="form-group">*/
/* 																	<label class="col-sm-2 control-label">{{ entry_background }}:</label>*/
/* 																	<div class="col-sm-4">*/
/* 																		<select name="theme_materialize_color_background" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors %}*/
/* 																			{% if color.name == theme_materialize_color_background %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																	</div>*/
/* 																</div>*/
/* 																<div class="form-group">*/
/* 																	<label class="col-sm-2 control-label">{{ entry_cart_btn }}:</label>*/
/* 																	<div class="col-sm-4">*/
/* 																		<select name="theme_materialize_color_cart_btn" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors %}*/
/* 																			{% if color.name == theme_materialize_color_cart_btn %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																		<select name="theme_materialize_color_cart_btn_text" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors_text %}*/
/* 																			{% if color.name == theme_materialize_color_cart_btn_text %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																	</div>*/
/* 																</div>*/
/* 																<div class="form-group">*/
/* 																	<label class="col-sm-2 control-label">{{ entry_total_btn }}:</label>*/
/* 																	<div class="col-sm-4">*/
/* 																		<select name="theme_materialize_color_total_btn" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors %}*/
/* 																			{% if color.name == theme_materialize_color_total_btn %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																		<select name="theme_materialize_color_total_btn_text" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors_text %}*/
/* 																			{% if color.name == theme_materialize_color_total_btn_text %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																	</div>*/
/* 																</div>*/
/* 																<div class="form-group">*/
/* 																	<label class="col-sm-2 control-label">{{ entry_compare_btn }}:</label>*/
/* 																	<div class="col-sm-4">*/
/* 																		<select name="theme_materialize_color_compare_btn" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors %}*/
/* 																			{% if color.name == theme_materialize_color_compare_btn %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																		<select name="theme_materialize_color_compare_btn_text" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors_text %}*/
/* 																			{% if color.name == theme_materialize_color_compare_btn_text %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																	</div>*/
/* 																</div>*/
/* 																<div class="form-group">*/
/* 																	<label class="col-sm-2 control-label">{{ entry_tot_cmp_btn }}:</label>*/
/* 																	<div class="col-sm-4">*/
/* 																		<select name="theme_materialize_color_compare_total_btn" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors %}*/
/* 																			{% if color.name == theme_materialize_color_compare_total_btn %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																		<select name="theme_materialize_color_compare_total_btn_text" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors_text %}*/
/* 																			{% if color.name == theme_materialize_color_compare_total_btn_text %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																	</div>*/
/* 																</div>*/
/* 																<div class="form-group">*/
/* 																	<label class="col-sm-2 control-label">{{ entry_btt_btn }}:</label>*/
/* 																	<div class="col-sm-4">*/
/* 																		<select name="theme_materialize_color_btt_btn" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors %}*/
/* 																			{% if color.name == theme_materialize_color_btt_btn %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																		<select name="theme_materialize_color_btt_btn_text" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors_text %}*/
/* 																			{% if color.name == theme_materialize_color_btt_btn_text %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																	</div>*/
/* 																</div>*/
/* 															</div>*/
/* 															<div class="tab-pane" id="tab-color-common__mobile">*/
/* 																<div class="form-group">*/
/* 																	<label class="col-sm-2 control-label">{{ entry_bar }}:</label>*/
/* 																	<div class="col-sm-4">*/
/* 																		<select name="theme_materialize_color_browser_bar" id="select-color-browser-bar" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors %}*/
/* 																			{% if color.name == theme_materialize_color_browser_bar %}*/
/* 																			<option value="{{ color.name }}" data-hex="#{{ color.hex }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" data-hex="#{{ color.hex }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																		<input type="hidden" name="theme_materialize_color_browser_bar_hex" value="{{ theme_materialize_color_browser_bar_hex ? theme_materialize_color_browser_bar_hex }}" id="input-color-browser-bar-hex" />*/
/* 																	</div>*/
/* 																</div>*/
/* 																<div class="form-group">*/
/* 																	<label class="col-sm-2 control-label">{{ entry_nav_btn }}:</label>*/
/* 																	<div class="col-sm-4">*/
/* 																		<select name="theme_materialize_color_nav_btn" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors %}*/
/* 																			{% if color.name == theme_materialize_color_nav_btn %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																		<select name="theme_materialize_color_nav_btn_text" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors_text %}*/
/* 																			{% if color.name == theme_materialize_color_nav_btn_text %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																	</div>*/
/* 																</div>*/
/* 															</div>*/
/* 														</div>*/
/* 													</div>*/
/* 													<div class="tab-pane" id="tab-color-header">*/
/* 														<ul class="nav nav-tabs">*/
/* 															<li class="active"><a href="#tab-color-header__desktop" data-toggle="tab">{{ text_desktop }}</a></li>*/
/* 															<li><a href="#tab-color-header__mobile" data-toggle="tab">{{ text_mobile }}</a></li>*/
/* 														</ul>*/
/* 														<div class="tab-content">*/
/* 															<div class="tab-pane active" id="tab-color-header__desktop">*/
/* 																<div class="form-group">*/
/* 																	<label class="col-sm-2 control-label">{{ entry_top_menu }}:</label>*/
/* 																	<div class="col-sm-4">*/
/* 																		<select name="theme_materialize_color_top_menu" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors %}*/
/* 																			{% if color.name == theme_materialize_color_top_menu %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																		<select name="theme_materialize_color_top_menu_text" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors_text %}*/
/* 																			{% if color.name == theme_materialize_color_top_menu_text %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																	</div>*/
/* 																</div>*/
/* 																<div class="form-group">*/
/* 																	<label class="col-sm-2 control-label">{{ entry_header }}:</label>*/
/* 																	<div class="col-sm-4">*/
/* 																		<select name="theme_materialize_color_header" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors %}*/
/* 																			{% if color.name == theme_materialize_color_header %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																		<select name="theme_materialize_color_header_text" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors_text %}*/
/* 																			{% if color.name == theme_materialize_color_header_text %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																	</div>*/
/* 																</div>*/
/* 																<div class="form-group">*/
/* 																	<label class="col-sm-2 control-label">{{ entry_navigation }}:</label>*/
/* 																	<div class="col-sm-4">*/
/* 																		<select name="theme_materialize_color_navigation" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors %}*/
/* 																			{% if color.name == theme_materialize_color_navigation %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																		<select name="theme_materialize_color_navigation_text" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors_text %}*/
/* 																			{% if color.name == theme_materialize_color_navigation_text %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																	</div>*/
/* 																</div>*/
/* 																<div class="form-group">*/
/* 																	<label class="col-sm-2 control-label">{{ entry_search }}:</label>*/
/* 																	<div class="col-sm-4">*/
/* 																		<select name="theme_materialize_color_search" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors %}*/
/* 																			{% if color.name == theme_materialize_color_search %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																	</div>*/
/* 																</div>*/
/* 															</div>*/
/* 															<div class="tab-pane" id="tab-color-header__mobile">*/
/* 																<div class="form-group">*/
/* 																	<label class="col-sm-2 control-label">{{ entry_sidebar }}:</label>*/
/* 																	<div class="col-sm-4">*/
/* 																		<select name="theme_materialize_color_sidebar" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors %}*/
/* 																			{% if color.name == theme_materialize_color_sidebar %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																		<select name="theme_materialize_color_sidebar_text" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors_text %}*/
/* 																			{% if color.name == theme_materialize_color_sidebar_text %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																	</div>*/
/* 																</div>*/
/* 																<div class="form-group">*/
/* 																	<label class="col-sm-2 control-label">{{ entry_mob_search }}:</label>*/
/* 																	<div class="col-sm-4">*/
/* 																		<select name="theme_materialize_color_mobile_search" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors %}*/
/* 																			{% if color.name == theme_materialize_color_mobile_search %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																	</div>*/
/* 																</div>*/
/* 															</div>*/
/* 														</div>*/
/* 													</div>*/
/* 													<div class="tab-pane" id="tab-color-footer">*/
/* 														<ul class="nav nav-tabs">*/
/* 															<li class="active"><a href="#tab-color-footer__common" data-toggle="tab">{{ text_common }}</a></li>*/
/* 														</ul>*/
/* 														<div class="tab-content">*/
/* 															<div class="tab-pane active" id="tab-color-footer__common">*/
/* 																<div class="form-group">*/
/* 																	<label class="col-sm-2 control-label">{{ entry_footer }}:</label>*/
/* 																	<div class="col-sm-4">*/
/* 																		<select name="theme_materialize_color_footer" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors %}*/
/* 																			{% if color.name == theme_materialize_color_footer %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																		<select name="theme_materialize_color_footer_text" id="input-color-footer-text" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors_text %}*/
/* 																			{% if color.name == theme_materialize_color_footer_text %}*/
/* 																			<option value="{{ color.name }}" data-hex="#{{ color.hex }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" data-hex="#{{ color.hex }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																	</div>*/
/* 																</div>*/
/* 															</div>*/
/* 														</div>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</fieldset>*/
/* 								</div>*/
/* 								<div class="tab-pane" id="tab-image">*/
/* 									<fieldset>*/
/* 										<legend>{{ text_image }}</legend>*/
/* 										<div class="form-group required">*/
/* 											<label class="col-sm-2 control-label" for="input-image-zoom">{{ text_imagezoom }}:</label>*/
/* 											<div class="col-sm-10">*/
/* 												<select name="theme_materialize_image_zoom" id="input-image-zoom" class="selectpicker show-tick" data-width="100%">*/
/* 													{% if theme_materialize_image_zoom %}*/
/* 													<option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 													<option value="0">{{ text_disabled }}</option>*/
/* 													{% else %}*/
/* 													<option value="1">{{ text_enabled }}</option>*/
/* 													<option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 													{% endif %}*/
/* 												</select>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group required">*/
/* 											<label class="col-sm-2 control-label" for="input-image-category-width">{{ entry_image_category }}:</label>*/
/* 											<div class="col-sm-10">*/
/* 												<div class="row">*/
/* 													<div class="col-sm-6">*/
/* 														<input type="text" name="theme_materialize_image_category_width" value="{{ theme_materialize_image_category_width }}" placeholder="{{ entry_width }}" id="input-image-category-width" class="form-control" />*/
/* 													</div>*/
/* 													<div class="col-sm-6">*/
/* 														<input type="text" name="theme_materialize_image_category_height" value="{{ theme_materialize_image_category_height }}" placeholder="{{ entry_height }}" class="form-control" />*/
/* 													</div>*/
/* 												</div>*/
/* 												{% if error_image_category %}*/
/* 												<div class="text-danger">{{ error_image_category }}</div>*/
/* 												{% endif %}*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group required">*/
/* 											<label class="col-sm-2 control-label" for="input-image-thumb-width">{{ entry_image_thumb }}:</label>*/
/* 											<div class="col-sm-10">*/
/* 												<div class="row">*/
/* 													<div class="col-sm-6">*/
/* 														<input type="text" name="theme_materialize_image_thumb_width" value="{{ theme_materialize_image_thumb_width }}" placeholder="{{ entry_width }}" id="input-image-thumb-width" class="form-control" />*/
/* 													</div>*/
/* 													<div class="col-sm-6">*/
/* 														<input type="text" name="theme_materialize_image_thumb_height" value="{{ theme_materialize_image_thumb_height }}" placeholder="{{ entry_height }}" class="form-control" />*/
/* 													</div>*/
/* 												</div>*/
/* 												{% if error_image_thumb %}*/
/* 												<div class="text-danger">{{ error_image_thumb }}</div>*/
/* 												{% endif %}*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group required">*/
/* 											<label class="col-sm-2 control-label" for="input-image-popup-width">{{ entry_image_popup }}:</label>*/
/* 											<div class="col-sm-10">*/
/* 												<div class="row">*/
/* 													<div class="col-sm-6">*/
/* 														<input type="text" name="theme_materialize_image_popup_width" value="{{ theme_materialize_image_popup_width }}" placeholder="{{ entry_width }}" id="input-image-popup-width" class="form-control" />*/
/* 													</div>*/
/* 													<div class="col-sm-6">*/
/* 														<input type="text" name="theme_materialize_image_popup_height" value="{{ theme_materialize_image_popup_height }}" placeholder="{{ entry_height }}" class="form-control" />*/
/* 													</div>*/
/* 												</div>*/
/* 												{% if error_image_popup %}*/
/* 												<div class="text-danger">{{ error_image_popup }}</div>*/
/* 												{% endif %}*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group required">*/
/* 											<label class="col-sm-2 control-label" for="input-image-product-width">{{ entry_image_product }}:</label>*/
/* 											<div class="col-sm-10">*/
/* 												<div class="row">*/
/* 													<div class="col-sm-6">*/
/* 														<input type="text" name="theme_materialize_image_product_width" value="{{ theme_materialize_image_product_width }}" placeholder="{{ entry_width }}" id="input-image-product-width" class="form-control" />*/
/* 													</div>*/
/* 													<div class="col-sm-6">*/
/* 														<input type="text" name="theme_materialize_image_product_height" value="{{ theme_materialize_image_product_height }}" placeholder="{{ entry_height }}" class="form-control" />*/
/* 													</div>*/
/* 												</div>*/
/* 												{% if error_image_product %}*/
/* 												<div class="text-danger">{{ error_image_product }}</div>*/
/* 												{% endif %}*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group required">*/
/* 											<label class="col-sm-2 control-label" for="input-image-additional-width">{{ entry_image_additional }}:</label>*/
/* 											<div class="col-sm-10">*/
/* 												<div class="row">*/
/* 													<div class="col-sm-6">*/
/* 														<input type="text" name="theme_materialize_image_additional_width" value="{{ theme_materialize_image_additional_width }}" placeholder="{{ entry_width }}" id="input-image-additional-width" class="form-control" />*/
/* 													</div>*/
/* 													<div class="col-sm-6">*/
/* 														<input type="text" name="theme_materialize_image_additional_height" value="{{ theme_materialize_image_additional_height }}" placeholder="{{ entry_height }}" class="form-control" />*/
/* 													</div>*/
/* 												</div>*/
/* 												{% if error_image_additional %}*/
/* 												<div class="text-danger">{{ error_image_additional }}</div>*/
/* 												{% endif %}*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group required">*/
/* 											<label class="col-sm-2 control-label" for="input-image-related">{{ entry_image_related }}:</label>*/
/* 											<div class="col-sm-10">*/
/* 												<div class="row">*/
/* 													<div class="col-sm-6">*/
/* 														<input type="text" name="theme_materialize_image_related_width" value="{{ theme_materialize_image_related_width }}" placeholder="{{ entry_width }}" id="input-image-related" class="form-control" />*/
/* 													</div>*/
/* 													<div class="col-sm-6">*/
/* 														<input type="text" name="theme_materialize_image_related_height" value="{{ theme_materialize_image_related_height }}" placeholder="{{ entry_height }}" class="form-control" />*/
/* 													</div>*/
/* 												</div>*/
/* 												{% if error_image_related %}*/
/* 												<div class="text-danger">{{ error_image_related }}</div>*/
/* 												{% endif %}*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group required">*/
/* 											<label class="col-sm-2 control-label" for="input-image-compare">{{ entry_image_compare }}:</label>*/
/* 											<div class="col-sm-10">*/
/* 												<div class="row">*/
/* 													<div class="col-sm-6">*/
/* 														<input type="text" name="theme_materialize_image_compare_width" value="{{ theme_materialize_image_compare_width }}" placeholder="{{ entry_width }}" id="input-image-compare" class="form-control" />*/
/* 													</div>*/
/* 													<div class="col-sm-6">*/
/* 														<input type="text" name="theme_materialize_image_compare_height" value="{{ theme_materialize_image_compare_height }}" placeholder="{{ entry_height }}" class="form-control" />*/
/* 													</div>*/
/* 												</div>*/
/* 												{% if error_image_compare %}*/
/* 												<div class="text-danger">{{ error_image_compare }}</div>*/
/* 												{% endif %}*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group required">*/
/* 											<label class="col-sm-2 control-label" for="input-image-wishlist">{{ entry_image_wishlist }}:</label>*/
/* 											<div class="col-sm-10">*/
/* 												<div class="row">*/
/* 													<div class="col-sm-6">*/
/* 														<input type="text" name="theme_materialize_image_wishlist_width" value="{{ theme_materialize_image_wishlist_width }}" placeholder="{{ entry_width }}" id="input-image-wishlist" class="form-control" />*/
/* 													</div>*/
/* 													<div class="col-sm-6">*/
/* 														<input type="text" name="theme_materialize_image_wishlist_height" value="{{ theme_materialize_image_wishlist_height }}" placeholder="{{ entry_height }}" class="form-control" />*/
/* 													</div>*/
/* 												</div>*/
/* 												{% if error_image_wishlist %}*/
/* 												<div class="text-danger">{{ error_image_wishlist }}</div>*/
/* 												{% endif %}*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group required">*/
/* 											<label class="col-sm-2 control-label" for="input-image-cart">{{ entry_image_cart }}:</label>*/
/* 											<div class="col-sm-10">*/
/* 												<div class="row">*/
/* 													<div class="col-sm-6">*/
/* 														<input type="text" name="theme_materialize_image_cart_width" value="{{ theme_materialize_image_cart_width }}" placeholder="{{ entry_width }}" id="input-image-cart" class="form-control" />*/
/* 													</div>*/
/* 													<div class="col-sm-6">*/
/* 														<input type="text" name="theme_materialize_image_cart_height" value="{{ theme_materialize_image_cart_height }}" placeholder="{{ entry_height }}" class="form-control" />*/
/* 													</div>*/
/* 												</div>*/
/* 												{% if error_image_cart %}*/
/* 												<div class="text-danger">{{ error_image_cart }}</div>*/
/* 												{% endif %}*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group required">*/
/* 											<label class="col-sm-2 control-label" for="input-image-location">{{ entry_image_location }}:</label>*/
/* 											<div class="col-sm-10">*/
/* 												<div class="row">*/
/* 													<div class="col-sm-6">*/
/* 														<input type="text" name="theme_materialize_image_location_width" value="{{ theme_materialize_image_location_width }}" placeholder="{{ entry_width }}" id="input-image-location" class="form-control" />*/
/* 													</div>*/
/* 													<div class="col-sm-6">*/
/* 														<input type="text" name="theme_materialize_image_location_height" value="{{ theme_materialize_image_location_height }}" placeholder="{{ entry_height }}" class="form-control" />*/
/* 													</div>*/
/* 												</div>*/
/* 												{% if error_image_location %}*/
/* 												<div class="text-danger">{{ error_image_location }}</div>*/
/* 												{% endif %}*/
/* 											</div>*/
/* 										</div>*/
/* 									</fieldset>*/
/* 								</div>*/
/* 								<div class="tab-pane" id="tab-product">*/
/* 									<fieldset>*/
/* 										<legend>{{ text_product }}</legend>*/
/* 										<div class="form-group required">*/
/* 											<label class="col-sm-2 control-label" for="input-catalog-limit"><span data-toggle="tooltip" title="{{ help_product_limit }}">{{ entry_product_limit }}:</span></label>*/
/* 											<div class="col-sm-10">*/
/* 												<input type="text" name="theme_materialize_product_limit" value="{{ theme_materialize_product_limit }}" placeholder="{{ entry_product_limit }}" id="input-catalog-limit" class="form-control" />*/
/* 												{% if error_product_limit %}*/
/* 												<div class="text-danger">{{ error_product_limit }}</div>*/
/* 												{% endif %}*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group required">*/
/* 											<label class="col-sm-2 control-label" for="input-description-limit"><span data-toggle="tooltip" title="{{ help_product_description_length }}">{{ entry_product_description_length }}:</span></label>*/
/* 											<div class="col-sm-10">*/
/* 												<input type="text" name="theme_materialize_product_description_length" value="{{ theme_materialize_product_description_length }}" placeholder="{{ entry_product_description_length }}" id="input-description-limit" class="form-control" />*/
/* 												{% if error_product_description_length %}*/
/* 												<div class="text-danger">{{ error_product_description_length }}</div>*/
/* 												{% endif %}*/
/* 											</div>*/
/* 										</div>*/
/* 									</fieldset>*/
/* 									<br>*/
/* 									<fieldset>*/
/* 										<legend>{{ entry_show_fields }}</legend>*/
/* 										<div class="form-group">*/
/* 											<div class="col-sm-10 col-sm-push-2">*/
/* 												<div class="row">*/
/* 													<div class="col-sm-6">*/
/* 														<div class="checkbox checkbox-primary">*/
/* 															{% if theme_materialize_show_model %}*/
/* 															<input type="checkbox" name="theme_materialize_show_model" value="1" id="show-model" class="styled" checked="checked" />*/
/* 															{% else %}*/
/* 															<input type="checkbox" name="theme_materialize_show_model" value="1" id="show-model" class="styled" />*/
/* 															{% endif %}*/
/* 															<label for="show-model">{{ entry_model }}</label>*/
/* 														</div>*/
/* 														<div class="checkbox checkbox-primary">*/
/* 															{% if theme_materialize_show_sku %}*/
/* 															<input type="checkbox" name="theme_materialize_show_sku" value="1" id="show-sku" class="styled" checked="checked" />*/
/* 															{% else %}*/
/* 															<input type="checkbox" name="theme_materialize_show_sku" value="1" id="show-sku" class="styled" />*/
/* 															{% endif %}*/
/* 															<label for="show-sku">{{ entry_sku }}</label>*/
/* 														</div>*/
/* 														<div class="checkbox checkbox-primary">*/
/* 															{% if theme_materialize_show_upc %}*/
/* 															<input type="checkbox" name="theme_materialize_show_upc" value="1" id="show-upc" class="styled" checked="checked" />*/
/* 															{% else %}*/
/* 															<input type="checkbox" name="theme_materialize_show_upc" value="1" id="show-upc" class="styled" />*/
/* 															{% endif %}*/
/* 															<label for="show-upc">{{ entry_upc }}</label>*/
/* 														</div>*/
/* 														<div class="checkbox checkbox-primary">*/
/* 															{% if theme_materialize_show_ean %}*/
/* 															<input type="checkbox" name="theme_materialize_show_ean" value="1" id="show-ean" class="styled" checked="checked" />*/
/* 															{% else %}*/
/* 															<input type="checkbox" name="theme_materialize_show_ean" value="1" id="show-ean" class="styled" />*/
/* 															{% endif %}*/
/* 															<label for="show-ean">{{ entry_ean }}</label>*/
/* 														</div>*/
/* 														<div class="checkbox checkbox-primary">*/
/* 															{% if theme_materialize_show_jan %}*/
/* 															<input type="checkbox" name="theme_materialize_show_jan" value="1" id="show-jan" class="styled" checked="checked" />*/
/* 															{% else %}*/
/* 															<input type="checkbox" name="theme_materialize_show_jan" value="1" id="show-jan" class="styled" />*/
/* 															{% endif %}*/
/* 															<label for="show-jan">{{ entry_jan }}</label>*/
/* 														</div>*/
/* 													</div>*/
/* 													<div class="col-sm-6">*/
/* 														<div class="checkbox checkbox-primary">*/
/* 															{% if theme_materialize_show_isbn %}*/
/* 															<input type="checkbox" name="theme_materialize_show_isbn" value="1" id="show-isbn" class="styled" checked="checked" />*/
/* 															{% else %}*/
/* 															<input type="checkbox" name="theme_materialize_show_isbn" value="1" id="show-isbn" class="styled" />*/
/* 															{% endif %}*/
/* 															<label for="show-isbn">{{ entry_isbn }}</label>*/
/* 														</div>*/
/* 														<div class="checkbox checkbox-primary">*/
/* 															{% if theme_materialize_show_mpn %}*/
/* 															<input type="checkbox" name="theme_materialize_show_mpn" value="1" id="show-mpn" class="styled" checked="checked" />*/
/* 															{% else %}*/
/* 															<input type="checkbox" name="theme_materialize_show_mpn" value="1" id="show-mpn" class="styled" />*/
/* 															{% endif %}*/
/* 															<label for="show-mpn">{{ entry_mpn }}</label>*/
/* 														</div>*/
/* 														<div class="checkbox checkbox-primary">*/
/* 															{% if theme_materialize_show_location %}*/
/* 															<input type="checkbox" name="theme_materialize_show_location" value="1" id="show-location" class="styled" checked="checked" />*/
/* 															{% else %}*/
/* 															<input type="checkbox" name="theme_materialize_show_location" value="1" id="show-location" class="styled" />*/
/* 															{% endif %}*/
/* 															<label for="show-location">{{ entry_location }}</label>*/
/* 														</div>*/
/* 														<div class="checkbox checkbox-primary">*/
/* 															{% if theme_materialize_show_dimensions %}*/
/* 															<input type="checkbox" name="theme_materialize_show_dimensions" value="1" id="show-dimensions" class="styled" checked="checked" />*/
/* 															{% else %}*/
/* 															<input type="checkbox" name="theme_materialize_show_dimensions" value="1" id="show-dimensions" class="styled" />*/
/* 															{% endif %}*/
/* 															<label for="show-dimensions">{{ entry_dimension }}</label>*/
/* 														</div>*/
/* 														<div class="checkbox checkbox-primary">*/
/* 															{% if theme_materialize_show_weight %}*/
/* 															<input type="checkbox" name="theme_materialize_show_weight" value="1" id="show-weight" class="styled" checked="checked" />*/
/* 															{% else %}*/
/* 															<input type="checkbox" name="theme_materialize_show_weight" value="1" id="show-weight" class="styled" />*/
/* 															{% endif %}*/
/* 															<label for="show-weight">{{ entry_weight }}</label>*/
/* 														</div>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</fieldset>*/
/* 									<br>*/
/* 									<fieldset>*/
/* 										<legend>{{ entry_show_remainder }}</legend>*/
/* 										<div class="form-group">*/
/* 											<label class="col-sm-2 control-label" for="input-type-remainder">{{ entry_type }}:</label>*/
/* 											<div class="col-sm-10">*/
/* 												<select name="theme_materialize_remainder" id="input-type-remainder" class="selectpicker show-tick" data-width="100%">*/
/* 													<option value="">{{ text_none }}</option>*/
/* 													{% for remainder in remainders %}*/
/* 													{% if remainder.value == theme_materialize_remainder %}*/
/* 													<option value="{{ remainder.value }}" selected="selected">{{ remainder.text }}</option>*/
/* 													{% else %}*/
/* 													<option value="{{ remainder.value }}">{{ remainder.text }}</option>*/
/* 													{% endif %}*/
/* 													{% endfor %}*/
/* 												</select>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group required progressbar-settings">*/
/* 											<label class="col-sm-2 control-label">{{ entry_calculation }}:</label>*/
/* 											<div class="col-sm-10">*/
/* 												<input type="text" name="theme_materialize_percent_remainder" value="{{ theme_materialize_percent_remainder }}" placeholder="" class="form-control" />*/
/* 												{% if error_percent_remainder %}*/
/* 												<div class="text-danger">{{ error_percent_remainder }}</div>*/
/* 												{% endif %}*/
/* 											</div>*/
/* 										</div>*/
/* 									</fieldset>*/
/* 									<br>*/
/* 									<fieldset>*/
/* 										<legend>{{ entry_payment }}</legend>*/
/* 										<div class="alert alert-info"><i class="fa fa-exclamation-circle"></i>&nbsp;{{ help_payment }}</div>*/
/* 										<div class="form-group">*/
/* 											<label class="col-sm-2 control-label">{{ entry_text }}:</label>*/
/* 											<div class="col-sm-10">*/
/* 												{% for language in languages %}*/
/* 												<div class="input-group">*/
/* 													<span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}"/></span>*/
/* 													<input type="text" name="theme_materialize[{{ language.language_id }}][payment_text]" value="{{ theme_materialize[language.language_id] ? theme_materialize[language.language_id].payment_text }}" placeholder="{{ entry_text }}" class="form-control" />*/
/* 												</div>*/
/* 												{% endfor %}*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group">*/
/* 											<label class="col-sm-2 control-label">{{ entry_payment_image }}:</label>*/
/* 											<div class="col-sm-10">*/
/* 												<a href="" id="thumb-payment-image" data-toggle="image" class="img-thumbnail"><img src="{{ theme_materialize_payment_thumb }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a>*/
/* 												<input type="hidden" name="theme_materialize_payment_image" value="{{ theme_materialize_payment_image }}" id="input-payment-image" />*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group">*/
/* 											<label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_image_size }}">{{ entry_payment_image }}:</span></label>*/
/* 											<div class="col-sm-10">*/
/* 												<div class="row">*/
/* 													<div class="col-sm-6">*/
/* 														<input type="text" name="theme_materialize_payment_image_width" value="{{ theme_materialize_payment_image_width }}" placeholder="{{ entry_payment_width }}" class="form-control" />*/
/* 													</div>*/
/* 													<div class="col-sm-6">*/
/* 														<input type="text" name="theme_materialize_payment_image_height" value="{{ theme_materialize_payment_image_height }}" placeholder="{{ entry_payment_height }}" class="form-control" />*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</fieldset>*/
/* 								</div>*/
/* 								<div class="tab-pane" id="tab-footer">*/
/* 									<fieldset>*/
/* 										<legend>{{ entry_description }}</legend>*/
/* 										<ul class="nav nav-tabs" id="foter-descriptions-language">*/
/* 											{% for language in languages %}*/
/* 											<li><a href="#foter-descriptions{{ language.language_id }}" data-toggle="tab"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /> {{ language.name }}</a></li>*/
/* 											{% endfor %}*/
/* 										</ul>*/
/* 										<div class="tab-content">*/
/* 											{% for language in languages %}*/
/* 											<div class="tab-pane fade" id="foter-descriptions{{ language.language_id }}">*/
/* 												<div class="form-group">*/
/* 													<label class="col-sm-2 control-label">{{ entry_footer_title }}:</label>*/
/* 													<div class="col-sm-10">*/
/* 														<input type="text" name="theme_materialize[{{ language.language_id }}][footer_title]" value="{{ theme_materialize[language.language_id] ? theme_materialize[language.language_id].footer_title }}" placeholder="{{ entry_title }}" class="form-control" />*/
/* 													</div>*/
/* 												</div>*/
/* 												<div class="form-group">*/
/* 													<label class="col-sm-2 control-label">{{ entry_description }}:</label>*/
/* 													<div class="col-sm-10">*/
/* 														<textarea name="theme_materialize[{{ language.language_id }}][footer_description]" placeholder="{{ entry_description }}" class="form-control textarea-resize-vertical">{{ theme_materialize[language.language_id] ? theme_materialize[language.language_id].footer_description }}</textarea>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											{% endfor %}*/
/* 										</div>*/
/* 										<div class="form-group">*/
/* 											<div class="col-sm-10 col-sm-push-2">*/
/* 												<div class="checkbox checkbox-primary">*/
/* 													{% if theme_materialize_footer_contact %}*/
/* 													<input type="checkbox" name="theme_materialize_footer_contact" value="1" id="show-footer-contact" class="styled" checked="checked" />*/
/* 													{% else %}*/
/* 													<input type="checkbox" name="theme_materialize_footer_contact" value="1" id="show-footer-contact" class="styled" />*/
/* 													{% endif %}*/
/* 													<label for="show-footer-contact">{{ entry_contact }}</label>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</fieldset>*/
/* 									<br>*/
/* 									<fieldset>*/
/* 										<legend>{{ entry_socials }}</legend>*/
/* 										<div class="form-group">*/
/* 											<label class="col-sm-2 control-label">{{ entry_text }}:</label>*/
/* 											<div class="col-sm-10">*/
/* 												{% for language in languages %}*/
/* 												<div class="input-group">*/
/* 													<span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}"/></span>*/
/* 													<input type="text" name="theme_materialize[{{ language.language_id }}][sn_text]" value="{{ theme_materialize[language.language_id] ? theme_materialize[language.language_id].sn_text }}" placeholder="{{ entry_text }}" class="form-control" />*/
/* 												</div>*/
/* 												{% endfor %}*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group">*/
/* 											<div class="col-sm-10 col-sm-push-2">*/
/* 												<div class="checkbox checkbox-primary">*/
/* 													{% if theme_materialize_sn_index %}*/
/* 													<input type="checkbox" name="theme_materialize_sn_index" value="1" id="dont-index-sn-links" class="styled" checked="checked" />*/
/* 													{% else %}*/
/* 													<input type="checkbox" name="theme_materialize_sn_index" value="1" id="dont-index-sn-links" class="styled" />*/
/* 													{% endif %}*/
/* 													<label for="dont-index-sn-links">{{ entry_not_index }}</label>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 										<br>*/
/* 										<ul class="nav nav-tabs" id="social-icon-language">*/
/* 											{% for language in languages %}*/
/* 												<li><a href="#social-icon-language{{ language.language_id }}" data-toggle="tab"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /> {{ language.name }}</a></li>*/
/* 											{% endfor %}*/
/* 										</ul>*/
/* 										<div class="tab-content">*/
/* 											{% set icon_row = 0 %}*/
/* 											{% for language in languages %}*/
/* 											<div class="tab-pane" id="social-icon-language{{ language.language_id }}">*/
/* 												<table id="social-icons{{ language.language_id }}" class="table table-striped table-bordered table-hover">*/
/* 													<thead>*/
/* 														<tr>*/
/* 															<td class="text-center">{{ entry_icon }}</td>*/
/* 															<td class="text-left">{{ entry_title }}</td>*/
/* 															<td class="text-left" style="width: 50%">{{ entry_link }}</td>*/
/* 															<td class="text-center" style="width: 10%">{{ entry_sort_order }}</td>*/
/* 															<td></td>*/
/* 														</tr>*/
/* 													</thead>*/
/* 													<tbody>*/
/* 														{% if theme_materialize_social_icons[language.language_id] %}*/
/* 														{% for theme_materialize_social_icon in theme_materialize_social_icons[language.language_id] %}*/
/* 														<tr id="icon-row{{ icon_row }}">*/
/* 															<td class="text-center">*/
/* 																<a href="" id="thumb-image{{ icon_row }}" data-toggle="image" class="img-thumbnail"><img src="{{ theme_materialize_social_icon.thumb }}" alt="" title="" data-placeholder="{{ placeholder }}"></a>*/
/* 																<input type="hidden" name="theme_materialize_social_icon[{{ language.language_id }}][{{ icon_row }}][icon]" value="{{ theme_materialize_social_icon.icon }}" id="input-icon{{ icon_row }}">*/
/* 															</td>*/
/* 															<td class="text-left">*/
/* 																<input type="text" name="theme_materialize_social_icon[{{ language.language_id }}][{{ icon_row }}][title]" value="{{ theme_materialize_social_icon.title }}" placeholder="{{ entry_title }}" class="form-control">*/
/* 															</td>*/
/* 															<td class="text-left">*/
/* 																<input type="text" name="theme_materialize_social_icon[{{ language.language_id }}][{{ icon_row }}][link]" value="{{ theme_materialize_social_icon.link }}" placeholder="{{ entry_link }}" class="form-control">*/
/* 															</td>*/
/* 															<td class="text-right">*/
/* 																<input type="text" name="theme_materialize_social_icon[{{ language.language_id }}][{{ icon_row }}][sort_order]" value="{{ theme_materialize_social_icon.sort_order }}" placeholder="{{ entry_sort_order }}" class="form-control">*/
/* 															</td>*/
/* 															<td class="text-center">*/
/* 																<button type="button" onclick="$('#icon-row{{ icon_row }}, .tooltip').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button>*/
/* 															</td>*/
/* 														</tr>*/
/* 														{% set icon_row = icon_row + 1 %}*/
/* 														{% endfor %}*/
/* 														{% endif %}*/
/* 													</tbody>*/
/* 													<tfoot>*/
/* 														<tr>*/
/* 															<td colspan="4"></td>*/
/* 															<td class="text-center"><button type="button" onclick="addIcon('{{ language.language_id }}');" data-toggle="tooltip" title="{{ button_icon_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/* 														</tr>*/
/* 													</tfoot>*/
/* 												</table>*/
/* 											</div>*/
/* 											{% endfor %}*/
/* 										</div>*/
/* 									</fieldset>*/
/* 								</div>*/
/* 								<div class="tab-pane" id="tab-common">*/
/* 									<fieldset>*/
/* 										<legend>{{ text_caching }}</legend>*/
/* 										<div class="form-group">*/
/* 											<div class="col-sm-10 col-sm-push-2">*/
/* 												<div class="checkbox checkbox-primary">*/
/* 													{% if theme_materialize_cache_css %}*/
/* 													<input type="checkbox" name="theme_materialize_cache_css" value="1" id="cache-css" class="styled" checked="checked" />*/
/* 													{% else %}*/
/* 													<input type="checkbox" name="theme_materialize_cache_css" value="1" id="cache-css" class="styled" />*/
/* 													{% endif %}*/
/* 													<label for="cache-css">{{ text_caching_css }}</label>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group">*/
/* 											<div class="col-sm-10 col-sm-push-2">*/
/* 												<a id="clear-css" class="btn btn-danger" href="{{ clear_css }}"><i class="fa fa-eraser fa-lg"></i> {{ text_clear_cache }}</a>*/
/* 											</div>*/
/* 										</div>*/
/* 									</fieldset>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div id="footer-appeal-users" class="panel-footer text-center"></div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col-sm-12 col-md-4">*/
/* 					<div class="panel panel-default" id="panel-data">*/
/* 						<div class="panel-heading"><h3 class="panel-title"><i class="fa fa-power-off"></i> {{ entry_status }}</h3></div>*/
/* 						<div class="panel-body">*/
/* 							<select name="theme_materialize_status" id="input-status" class="selectpicker show-tick" data-width="100%">*/
/* 								{% if theme_materialize_status %}*/
/* 								<option value="1" selected="selected" data-icon="fa-toggle-on">{{ text_enabled }}</option>*/
/* 								<option value="0" data-icon="fa-toggle-off">{{ text_disabled }}</option>*/
/* 								{% else %}*/
/* 								<option value="1" data-icon="fa-toggle-on">{{ text_enabled }}</option>*/
/* 								<option value="0" selected="selected" data-icon="fa-toggle-off">{{ text_disabled }}</option>*/
/* 								{% endif %}*/
/* 							</select>*/
/* 						</div>*/
/* 						<div class="panel-footer">*/
/* 							<div class="row">*/
/* 								<div class="col-sm-6">*/
/* 									<a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i> {{ button_cancel }}</a>*/
/* 								</div>*/
/* 								<div class="col-sm-6 text-right">*/
/* 									<button type="submit" form="form-theme-materialize" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i> {{ button_save }}</button>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<input type="hidden" name="theme_materialize_installed_appeal" value="0">*/
/* 		</form>*/
/* 	</div>*/
/* </div>*/
/* <script type="text/javascript">*/
/* 	$('#language a:first').tab('show');*/
/* 	$('#tab-colors-pills a:first').tab('show');*/
/* 	$('#foter-descriptions-language a:first').tab('show');*/
/* 	$('#social-icon-language a:first').tab('show');*/
/* 	$('#maps-descriptions-language a:first').tab('show');*/
/* */
/* 	var selectBrowserBar = $("#select-color-browser-bar"),*/
/* 		inputBrowserBar = $("#input-color-browser-bar-hex"),*/
/* 		inputFooterColorText = $("#input-color-footer-text"),*/
/* 		inputTypeRemainder = $("#input-type-remainder");*/
/* */
/* 	selectBrowserBar.change(function(){*/
/* 		selectBrowserBarOption = $("#select-color-browser-bar option:selected");*/
/* 		valueHex = selectBrowserBarOption.data('hex');*/
/* 		inputBrowserBar.attr('value',valueHex);*/
/* 	});*/
/* */
/* 	if (inputTypeRemainder.val() != 'progressbar') {$('.progressbar-settings').hide();}*/
/* */
/* 	inputTypeRemainder.change(function(){*/
/* 		if (inputTypeRemainder.val() != 'progressbar') {$('.progressbar-settings').hide();}*/
/* 		if (inputTypeRemainder.val() == 'progressbar') {$('.progressbar-settings').show();}*/
/* 	});*/
/* */
/* 	// Socials*/
/* 	var icon_row = {{ icon_row }};*/
/* */
/* 	function addIcon(language_id) {*/
/* 		html  = '<tr id="icon-row' + icon_row + '">';*/
/* 		html += '	<td class="text-center">';*/
/* 		html += '		<a href="" id="thumb-image' + icon_row + '" data-toggle="image" class="img-thumbnail"><img src="{{ placeholder }}" alt="" title="" data-placeholder="{{ placeholder }}"></a>';*/
/* 		html += '		<input type="hidden" name="theme_materialize_social_icon[' + language_id + '][' + icon_row + '][icon]" value="" id="input-icon' + icon_row + '">';*/
/* 		html += '	</td>';*/
/* 		html += '	<td class="text-left">';*/
/* 		html += '		<input type="text" name="theme_materialize_social_icon[' + language_id + '][' + icon_row + '][title]" value="" placeholder="{{ entry_title }}" class="form-control">';*/
/* 		html += '	</td>';*/
/* 		html += '	<td class="text-left">';*/
/* 		html += '		<input type="text" name="theme_materialize_social_icon[' + language_id + '][' + icon_row + '][link]" value="" placeholder="{{ entry_link }}" class="form-control">';*/
/* 		html += '	</td>';*/
/* 		html += '	<td class="text-right">';*/
/* 		html += '		<input type="text" name="theme_materialize_social_icon[' + language_id + '][' + icon_row + '][sort_order]" value="" placeholder="{{ entry_sort_order }}" class="form-control">';*/
/* 		html += '	</td>';*/
/* 		html += '	<td class="text-center">';*/
/* 		html += '		<button type="button" onclick="$(\'#icon-row' + icon_row + ', .tooltip\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button>';*/
/* 		html += '	</td>';*/
/* 		html += '</tr>';*/
/* */
/* 		$('#social-icons' + language_id + ' tbody').append(html);*/
/* */
/* 		icon_row++;*/
/* 	}*/
/* */
/* 	// Selectpicker*/
/* 	$('.selectpicker.selectpicker-live-search').selectpicker({*/
/* 		size: 10,*/
/* 		liveSearch: true,*/
/* 		iconBase: 'fa',*/
/* 		tickIcon: 'fa-check'*/
/* 	});*/
/* */
/* 	// Apply button*/
/* 	var applyBtn = $('#apply-btn'),*/
/* 		formMaterialize = $('#form-theme-materialize'),*/
/* 		dataAction = formMaterialize.attr('data-action');*/
/* */
/* 	if (sessionStorage['index_p']) {*/
/* 		var index_p = sessionStorage['index_p'];*/
/* 	} else {*/
/* 		var index_p = 0;*/
/* 	}*/
/* */
/* 	$('#apply-tab li:eq(' + index_p + ') a').tab('show');*/
/* */
/* 	sessionStorage['index_p'] = 0;*/
/* */
/* 	applyBtn.click(function() {*/
/* 		sessionStorage['index_p'] = $(".nav-tabs .active").index();*/
/* */
/* 		formMaterialize.attr({'action':dataAction});*/
/* 		formMaterialize.submit();*/
/* */
/* 		e.preventDefault();*/
/* 	});*/
/* */
/* 	document.addEventListener("keydown", function(event) {*/
/* 		if (event.keyCode == 83 && (navigator.platform.match("Mac") ? event.metaKey : event.ctrlKey)) {*/
/* 			event.preventDefault();*/
/* 			applyBtn.trigger('click');*/
/* 		}*/
/* 	}, false);*/
/* */
/* 	// Notify*/
/* 	{% if success %}*/
/* 	$.notify({*/
/* 		icon: 'fa fa-exclamation-circle',*/
/* 		message: '{{ success }}'*/
/* 	},{*/
/* 		type: "success"*/
/* 	});*/
/* 	{% endif %}*/
/* 	{% if error_warning %}*/
/* 	$.notify({*/
/* 		icon: 'fa fa-exclamation-circle',*/
/* 		message: '{{ error_warning }}'*/
/* 	},{*/
/* 		type: "danger"*/
/* 	});*/
/* 	{% endif %}*/
/* 	{% if error_product_limit %}*/
/* 	$.notify({*/
/* 		icon: 'fa fa-exclamation-circle',*/
/* 		message: '{{ error_product_limit }}'*/
/* 	},{*/
/* 		type: "danger"*/
/* 	});*/
/* 	{% endif %}*/
/* 	{% if error_product_description_length %}*/
/* 	$.notify({*/
/* 		icon: 'fa fa-exclamation-circle',*/
/* 		message: '{{ error_product_description_length }}'*/
/* 	},{*/
/* 		type: "danger"*/
/* 	});*/
/* 	{% endif %}*/
/* 	{% if error_image_category %}*/
/* 	$.notify({*/
/* 		icon: 'fa fa-exclamation-circle',*/
/* 		message: '{{ error_image_category }}'*/
/* 	},{*/
/* 		type: "danger"*/
/* 	});*/
/* 	{% endif %}*/
/* 	{% if error_image_thumb %}*/
/* 	$.notify({*/
/* 		icon: 'fa fa-exclamation-circle',*/
/* 		message: '{{ error_image_thumb }}'*/
/* 	},{*/
/* 		type: "danger"*/
/* 	});*/
/* 	{% endif %}*/
/* 	{% if error_image_popup %}*/
/* 	$.notify({*/
/* 		icon: 'fa fa-exclamation-circle',*/
/* 		message: '{{ error_image_popup }}'*/
/* 	},{*/
/* 		type: "danger"*/
/* 	});*/
/* 	{% endif %}*/
/* 	{% if error_image_product %}*/
/* 	$.notify({*/
/* 		icon: 'fa fa-exclamation-circle',*/
/* 		message: '{{ error_image_product }}'*/
/* 	},{*/
/* 		type: "danger"*/
/* 	});*/
/* 	{% endif %}*/
/* 	{% if error_image_additional %}*/
/* 	$.notify({*/
/* 		icon: 'fa fa-exclamation-circle',*/
/* 		message: '{{ error_image_additional }}'*/
/* 	},{*/
/* 		type: "danger"*/
/* 	});*/
/* 	{% endif %}*/
/* 	{% if error_image_related %}*/
/* 	$.notify({*/
/* 		icon: 'fa fa-exclamation-circle',*/
/* 		message: '{{ error_image_related }}'*/
/* 	},{*/
/* 		type: "danger"*/
/* 	});*/
/* 	{% endif %}*/
/* 	{% if error_image_compare %}*/
/* 	$.notify({*/
/* 		icon: 'fa fa-exclamation-circle',*/
/* 		message: '{{ error_image_compare }}'*/
/* 	},{*/
/* 		type: "danger"*/
/* 	});*/
/* 	{% endif %}*/
/* 	{% if error_image_wishlist %}*/
/* 	$.notify({*/
/* 		icon: 'fa fa-exclamation-circle',*/
/* 		message: '{{ error_image_wishlist }}'*/
/* 	},{*/
/* 		type: "danger"*/
/* 	});*/
/* 	{% endif %}*/
/* 	{% if error_image_cart %}*/
/* 	$.notify({*/
/* 		icon: 'fa fa-exclamation-circle',*/
/* 		message: '{{ error_image_cart }}'*/
/* 	},{*/
/* 		type: "danger"*/
/* 	});*/
/* 	{% endif %}*/
/* 	{% if error_image_location %}*/
/* 	$.notify({*/
/* 		icon: 'fa fa-exclamation-circle',*/
/* 		message: '{{ error_image_location }}'*/
/* 	},{*/
/* 		type: "danger"*/
/* 	});*/
/* 	{% endif %}*/
/* 	{% if error_percent_remainder %}*/
/* 	$.notify({*/
/* 		icon: 'fa fa-exclamation-circle',*/
/* 		message: '{{ error_percent_remainder }}'*/
/* 	},{*/
/* 		type: "danger"*/
/* 	});*/
/* 	{% endif %}*/
/* */
/* 	$('#footer-appeal-users').load('index.php?route=extension/materialize/appeal/installed/footer&user_token={{ user_token }}');*/
/* */
/* 	{% if theme_materialize_installed_appeal %}*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/materialize/appeal/installed&modal_title={{ materialize_title }}&user_token={{ user_token }}',*/
/* 		dataType: 'html',*/
/* 		success: function(html) {*/
/* 			$('#modal-materialize-installed').remove();*/
/* */
/* 			$('body').prepend(html);*/
/* */
/* 			$('#modal-materialize-installed').modal('show');*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* 	{% endif %}*/
/* </script>*/
/* {{ footer }}*/
