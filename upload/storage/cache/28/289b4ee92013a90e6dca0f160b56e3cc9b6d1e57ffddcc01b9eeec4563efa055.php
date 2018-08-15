<?php

/* extension/module/quickorder.twig */
class __TwigTemplate_5aa6c6c9d2347f890952840d768ab5e293c4eea4c5328146c855ef2566b33274 extends Twig_Template
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
\t\t\t<h1>";
        // line 5
        echo (isset($context["quickorder_title"]) ? $context["quickorder_title"] : null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
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
        // line 10
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t<form action=\"";
        // line 14
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-quickorder\" class=\"form-horizontal\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-12 col-md-8\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\"><h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 18
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3></div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<legend>";
        // line 21
        echo (isset($context["text_popup"]) ? $context["text_popup"] : null);
        echo "</legend>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 23
        echo (isset($context["entry_success"]) ? $context["entry_success"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 26
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
            // line 27
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\"/></span>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"module_quickorder[";
            // line 28
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][success]\" value=\"";
            echo (($this->getAttribute((isset($context["module_quickorder"]) ? $context["module_quickorder"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["module_quickorder"]) ? $context["module_quickorder"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "success", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_success"]) ? $context["entry_success"] : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
            // line 30
            if ($this->getAttribute((isset($context["error_success"]) ? $context["error_success"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                echo "<div class=\"text-danger\">";
                echo $this->getAttribute((isset($context["error_success"]) ? $context["error_success"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                echo "</div>";
            }
            // line 31
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 35
        echo (isset($context["entry_button"]) ? $context["entry_button"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 38
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
            // line 39
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\"/></span>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"module_quickorder[";
            // line 40
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][text_button]\" value=\"";
            echo (($this->getAttribute((isset($context["module_quickorder"]) ? $context["module_quickorder"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["module_quickorder"]) ? $context["module_quickorder"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "text_button", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_button"]) ? $context["entry_button"] : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
            // line 42
            if ($this->getAttribute((isset($context["error_text_button"]) ? $context["error_text_button"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                echo "<div class=\"text-danger\">";
                echo $this->getAttribute((isset($context["error_text_button"]) ? $context["error_text_button"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                echo "</div>";
            }
            // line 43
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 47
        echo (isset($context["entry_fields"]) ? $context["entry_fields"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<table class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\" style=\"width: 70%;\">";
        // line 52
        echo (isset($context["entry_fields"]) ? $context["entry_fields"] : null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\" style=\"width: 15%;\">";
        // line 53
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\" style=\"width: 15%;\">";
        // line 54
        echo (isset($context["entry_required"]) ? $context["entry_required"] : null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 59
        echo (isset($context["text_name"]) ? $context["text_name"] : null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 62
        if ((isset($context["module_quickorder_name"]) ? $context["module_quickorder_name"] : null)) {
            // line 63
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"module_quickorder_name\" id=\"quickorder-name\" class=\"quickorder-checkbox styled\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 65
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"module_quickorder_name\" id=\"quickorder-name\" class=\"quickorder-checkbox styled\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 67
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"quickorder-name\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 72
        if ((isset($context["module_quickorder_name_required"]) ? $context["module_quickorder_name_required"] : null)) {
            // line 73
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"module_quickorder_name_required\" id=\"quickorder-name-required\" class=\"quickorder-checkbox styled\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 75
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"module_quickorder_name_required\" id=\"quickorder-name-required\" class=\"quickorder-checkbox styled\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 77
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"quickorder-name-required\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 82
        echo (isset($context["text_email"]) ? $context["text_email"] : null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 85
        if ((isset($context["module_quickorder_email"]) ? $context["module_quickorder_email"] : null)) {
            // line 86
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"module_quickorder_email\" id=\"quickorder-email\" class=\"quickorder-checkbox styled\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 88
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"module_quickorder_email\" id=\"quickorder-email\" class=\"quickorder-checkbox styled\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 90
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"quickorder-email\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 95
        if ((isset($context["module_quickorder_email_required"]) ? $context["module_quickorder_email_required"] : null)) {
            // line 96
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"module_quickorder_email_required\" id=\"quickorder-email-required\" class=\"quickorder-checkbox styled\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 98
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"module_quickorder_email_required\" id=\"quickorder-email-required\" class=\"quickorder-checkbox styled\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 100
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"quickorder-email-required\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 105
        echo (isset($context["text_enquiry"]) ? $context["text_enquiry"] : null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 108
        if ((isset($context["module_quickorder_enquiry"]) ? $context["module_quickorder_enquiry"] : null)) {
            // line 109
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"module_quickorder_enquiry\" id=\"quickorder-enquiry\" class=\"quickorder-checkbox styled\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 111
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"module_quickorder_enquiry\" id=\"quickorder-enquiry\" class=\"quickorder-checkbox styled\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 113
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"quickorder-enquiry\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 118
        if ((isset($context["module_quickorder_enquiry_required"]) ? $context["module_quickorder_enquiry_required"] : null)) {
            // line 119
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"module_quickorder_enquiry_required\" id=\"quickorder-enquiry-required\" class=\"quickorder-checkbox styled\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 121
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"module_quickorder_enquiry_required\" id=\"quickorder-enquiry-required\" class=\"quickorder-checkbox styled\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 123
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"quickorder-enquiry-required\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 128
        echo (isset($context["text_call_time"]) ? $context["text_call_time"] : null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 131
        if ((isset($context["module_quickorder_calltime"]) ? $context["module_quickorder_calltime"] : null)) {
            // line 132
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"module_quickorder_calltime\" id=\"quickorder-calltime\" class=\"quickorder-checkbox styled\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 134
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"module_quickorder_calltime\" id=\"quickorder-calltime\" class=\"quickorder-checkbox styled\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 136
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"quickorder-calltime\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 141
        if ((isset($context["module_quickorder_calltime_required"]) ? $context["module_quickorder_calltime_required"] : null)) {
            // line 142
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"module_quickorder_calltime_required\" id=\"quickorder-calltime-required\" class=\"quickorder-checkbox styled\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 144
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"module_quickorder_calltime_required\" id=\"quickorder-calltime-required\" class=\"quickorder-checkbox styled\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 146
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"quickorder-calltime-required\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 155
        echo (isset($context["entry_button_color"]) ? $context["entry_button_color"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<select name=\"module_quickorder_color_btn\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["module_quickorder_colors"]) ? $context["module_quickorder_colors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 159
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["module_quickorder_color_btn"]) ? $context["module_quickorder_color_btn"] : null))) {
                // line 160
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 162
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 164
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t<select name=\"module_quickorder_color_btn_text\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["module_quickorder_colors_text"]) ? $context["module_quickorder_colors_text"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 168
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["module_quickorder_color_btn_text"]) ? $context["module_quickorder_color_btn_text"] : null))) {
                // line 169
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 171
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 173
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<legend>";
        // line 180
        echo (isset($context["text_settings"]) ? $context["text_settings"] : null);
        echo "</legend>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"quickorder-agreement\"><span data-toggle=\"tooltip\" title=\"";
        // line 182
        echo (isset($context["help_checkout"]) ? $context["help_checkout"] : null);
        echo "\">";
        echo (isset($context["entry_checkout"]) ? $context["entry_checkout"] : null);
        echo ":</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<select name=\"module_quickorder_agreement\" id=\"quickorder-agreement\" class=\"selectpicker show-tick\" data-width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 185
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 186
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 187
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["information"], "information_id", array()) == (isset($context["module_quickorder_agreement"]) ? $context["module_quickorder_agreement"] : null))) {
                // line 188
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 190
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 192
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"footer-appeal-users\" class=\"panel-footer text-center\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-12 col-md-4\">
\t\t\t\t\t<div class=\"panel panel-default\" id=\"panel-data\">
\t\t\t\t\t\t<div class=\"panel-heading\"><h3 class=\"panel-title\"><i class=\"fa fa-power-off\"></i> ";
        // line 203
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</h3></div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<select name=\"module_quickorder_status\" id=\"input-status\" class=\"selectpicker show-tick\" data-width=\"100%\">
\t\t\t\t\t\t\t\t";
        // line 206
        if ((isset($context["module_quickorder_status"]) ? $context["module_quickorder_status"] : null)) {
            // line 207
            echo "\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\" data-icon=\"fa-toggle-on\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\" data-icon=\"fa-toggle-off\">";
            // line 208
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        } else {
            // line 210
            echo "\t\t\t\t\t\t\t\t<option value=\"1\" data-icon=\"fa-toggle-on\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\" data-icon=\"fa-toggle-off\">";
            // line 211
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        // line 213
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 218
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i> ";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6 text-right\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" form=\"form-quickorder\" title=\"";
        // line 221
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" data-toggle=\"tooltip\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i> ";
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<input type=\"hidden\" name=\"module_quickorder_installed_appeal\" value=\"0\">
\t\t</form>
\t</div>
</div>
<script type=\"text/javascript\">
\tvar checkboxName = \$(\"#quickorder-name\"),
\t\tcheckboxEmail = \$(\"#quickorder-email\"),
\t\tcheckboxEnquiry = \$(\"#quickorder-enquiry\"),
\t\tcheckboxCalltime = \$(\"#quickorder-calltime\"),
\t\tcheckboxNameRequired = \$(\"#quickorder-name-required\"),
\t\tcheckboxEmailRequired = \$(\"#quickorder-email-required\"),
\t\tcheckboxEnquiryRequired = \$(\"#quickorder-enquiry-required\"),
\t\tcheckboxCalltimeRequired = \$(\"#quickorder-calltime-required\"),
\t\tquickorderCheckbox = \$(\".quickorder-checkbox\");

\tif (checkboxName.prop(\"checked\")) {
\t\tcheckboxNameRequired.attr(\"disabled\", false);
\t} else {
\t\tcheckboxNameRequired.attr(\"disabled\", true);
\t\tcheckboxNameRequired.removeAttr(\"checked\");
\t}
\tif (checkboxEmail.prop(\"checked\")) {
\t\tcheckboxEmailRequired.attr(\"disabled\", false);
\t} else {
\t\tcheckboxEmailRequired.attr(\"disabled\", true);
\t\tcheckboxEmailRequired.removeAttr(\"checked\");
\t}
\tif (checkboxEnquiry.prop(\"checked\")) {
\t\tcheckboxEnquiryRequired.attr(\"disabled\", false);
\t} else {
\t\tcheckboxEnquiryRequired.attr(\"disabled\", true);
\t\tcheckboxEnquiryRequired.removeAttr(\"checked\");
\t}
\tif (checkboxCalltime.prop(\"checked\")) {
\t\tcheckboxCalltimeRequired.attr(\"disabled\", false);
\t} else {
\t\tcheckboxCalltimeRequired.attr(\"disabled\", true);
\t\tcheckboxCalltimeRequired.removeAttr(\"checked\");
\t}

\tquickorderCheckbox.on(\"click\", function() {
\t\tif (checkboxName.prop(\"checked\")) {
\t\t\tcheckboxNameRequired.attr(\"disabled\", false);
\t\t} else {
\t\t\tcheckboxNameRequired.attr(\"disabled\", true);
\t\t\tcheckboxNameRequired.removeAttr(\"checked\");
\t\t}
\t\tif (checkboxEmail.prop(\"checked\")) {
\t\t\tcheckboxEmailRequired.attr(\"disabled\", false);
\t\t} else {
\t\t\tcheckboxEmailRequired.attr(\"disabled\", true);
\t\t\tcheckboxEmailRequired.removeAttr(\"checked\");
\t\t}
\t\tif (checkboxEnquiry.prop(\"checked\")) {
\t\t\tcheckboxEnquiryRequired.attr(\"disabled\", false);
\t\t} else {
\t\t\tcheckboxEnquiryRequired.attr(\"disabled\", true);
\t\t\tcheckboxEnquiryRequired.removeAttr(\"checked\");
\t\t}
\t\tif (checkboxCalltime.prop(\"checked\")) {
\t\t\tcheckboxCalltimeRequired.attr(\"disabled\", false);
\t\t} else {
\t\t\tcheckboxCalltimeRequired.attr(\"disabled\", true);
\t\t\tcheckboxCalltimeRequired.removeAttr(\"checked\");
\t\t}
\t});

\t// Selectpicker
\t\$('.selectpicker.selectpicker-live-search').selectpicker({
\t\tsize: 10,
\t\tliveSearch: true,
\t\ticonBase: 'fa',
\t\ttickIcon: 'fa-check'
\t});

\t";
        // line 303
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 304
            echo "\t\$.notify({
\t\ticon: 'fa fa-exclamation-circle',
\t\tmessage: '";
            // line 306
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "'
\t},{
\t\ttype: \"danger\"
\t});
\t";
        }
        // line 311
        echo "
\t";
        // line 312
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 313
            echo "\t\t";
            if ($this->getAttribute((isset($context["error_success"]) ? $context["error_success"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                // line 314
                echo "\t\t\$.notify({
\t\t\ticon: 'fa fa-exclamation-circle',
\t\t\tmessage: '";
                // line 316
                echo $this->getAttribute((isset($context["error_success"]) ? $context["error_success"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                echo "'
\t\t},{
\t\t\ttype: \"danger\"
\t\t});
\t\t";
            }
            // line 321
            echo "\t\t";
            if ($this->getAttribute((isset($context["error_text_button"]) ? $context["error_text_button"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                // line 322
                echo "\t\t\$.notify({
\t\t\ticon: 'fa fa-exclamation-circle',
\t\t\tmessage: '";
                // line 324
                echo $this->getAttribute((isset($context["error_text_button"]) ? $context["error_text_button"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                echo "'
\t\t},{
\t\t\ttype: \"danger\"
\t\t});
\t\t";
            }
            // line 329
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 330
        echo "
\t\$('#footer-appeal-users').load('index.php?route=extension/materialize/appeal/installed/footer&user_token=";
        // line 331
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "');

\t";
        // line 333
        if ((isset($context["module_quickorder_installed_appeal"]) ? $context["module_quickorder_installed_appeal"] : null)) {
            // line 334
            echo "\t\$.ajax({
\t\turl: 'index.php?route=extension/materialize/appeal/installed&modal_title=";
            // line 335
            echo (isset($context["quickorder_title"]) ? $context["quickorder_title"] : null);
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
        // line 349
        echo "</script>
";
        // line 350
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/quickorder.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  725 => 350,  722 => 349,  703 => 335,  700 => 334,  698 => 333,  693 => 331,  690 => 330,  684 => 329,  676 => 324,  672 => 322,  669 => 321,  661 => 316,  657 => 314,  654 => 313,  650 => 312,  647 => 311,  639 => 306,  635 => 304,  633 => 303,  546 => 221,  536 => 218,  529 => 213,  524 => 211,  519 => 210,  514 => 208,  509 => 207,  507 => 206,  501 => 203,  489 => 193,  483 => 192,  475 => 190,  467 => 188,  464 => 187,  460 => 186,  456 => 185,  448 => 182,  443 => 180,  435 => 174,  429 => 173,  417 => 171,  405 => 169,  402 => 168,  398 => 167,  394 => 165,  388 => 164,  376 => 162,  364 => 160,  361 => 159,  357 => 158,  351 => 155,  340 => 146,  336 => 144,  332 => 142,  330 => 141,  323 => 136,  319 => 134,  315 => 132,  313 => 131,  307 => 128,  300 => 123,  296 => 121,  292 => 119,  290 => 118,  283 => 113,  279 => 111,  275 => 109,  273 => 108,  267 => 105,  260 => 100,  256 => 98,  252 => 96,  250 => 95,  243 => 90,  239 => 88,  235 => 86,  233 => 85,  227 => 82,  220 => 77,  216 => 75,  212 => 73,  210 => 72,  203 => 67,  199 => 65,  195 => 63,  193 => 62,  187 => 59,  179 => 54,  175 => 53,  171 => 52,  163 => 47,  158 => 44,  152 => 43,  146 => 42,  137 => 40,  129 => 39,  126 => 38,  122 => 37,  117 => 35,  112 => 32,  106 => 31,  100 => 30,  91 => 28,  83 => 27,  80 => 26,  76 => 25,  71 => 23,  66 => 21,  60 => 18,  53 => 14,  47 => 10,  36 => 8,  32 => 7,  27 => 5,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/* 	<div class="page-header">*/
/* 		<div class="container-fluid">*/
/* 			<h1>{{ quickorder_title }}</h1>*/
/* 			<ul class="breadcrumb">*/
/* 				{% for breadcrumb in breadcrumbs %}*/
/* 				<li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/* 				{% endfor %}*/
/* 			</ul>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="container-fluid">*/
/* 		<form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-quickorder" class="form-horizontal">*/
/* 			<div class="row">*/
/* 				<div class="col-sm-12 col-md-8">*/
/* 					<div class="panel panel-default">*/
/* 						<div class="panel-heading"><h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3></div>*/
/* 						<div class="panel-body">*/
/* 							<fieldset>*/
/* 								<legend>{{ text_popup }}</legend>*/
/* 								<div class="form-group required">*/
/* 									<label class="col-sm-2 control-label">{{ entry_success }}:</label>*/
/* 									<div class="col-sm-10">*/
/* 										{% for language in languages %}*/
/* 										<div class="input-group">*/
/* 											<span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}"/></span>*/
/* 											<input type="text" name="module_quickorder[{{ language.language_id }}][success]" value="{{ module_quickorder[language.language_id] ? module_quickorder[language.language_id].success }}" placeholder="{{ entry_success }}" class="form-control" />*/
/* 										</div>*/
/* 										{% if error_success[language.language_id] %}<div class="text-danger">{{ error_success[language.language_id] }}</div>{% endif %}*/
/* 										{% endfor %}*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group required">*/
/* 									<label class="col-sm-2 control-label">{{ entry_button }}:</label>*/
/* 									<div class="col-sm-10">*/
/* 										{% for language in languages %}*/
/* 										<div class="input-group">*/
/* 											<span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}"/></span>*/
/* 											<input type="text" name="module_quickorder[{{ language.language_id }}][text_button]" value="{{ module_quickorder[language.language_id] ? module_quickorder[language.language_id].text_button }}" placeholder="{{ entry_button }}" class="form-control" />*/
/* 										</div>*/
/* 										{% if error_text_button[language.language_id] %}<div class="text-danger">{{ error_text_button[language.language_id] }}</div>{% endif %}*/
/* 										{% endfor %}*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="col-sm-2 control-label">{{ entry_fields }}:</label>*/
/* 									<div class="col-sm-10">*/
/* 										<table class="table table-striped table-bordered table-hover">*/
/* 											<thead>*/
/* 												<tr>*/
/* 													<td class="text-left" style="width: 70%;">{{ entry_fields }}</td>*/
/* 													<td class="text-center" style="width: 15%;">{{ entry_status }}</td>*/
/* 													<td class="text-center" style="width: 15%;">{{ entry_required }}</td>*/
/* 												</tr>*/
/* 											</thead>*/
/* 											<tbody>*/
/* 												<tr>*/
/* 													<td class="text-left">{{ text_name }}</td>*/
/* 													<td class="text-center">*/
/* 														<div class="checkbox checkbox-primary">*/
/* 															{% if module_quickorder_name %}*/
/* 															<input type="checkbox" name="module_quickorder_name" id="quickorder-name" class="quickorder-checkbox styled" value="1" checked="checked" />*/
/* 															{% else %}*/
/* 															<input type="checkbox" name="module_quickorder_name" id="quickorder-name" class="quickorder-checkbox styled" value="1" />*/
/* 															{% endif %}*/
/* 															<label for="quickorder-name"></label>*/
/* 														</div>*/
/* 													</td>*/
/* 													<td class="text-center">*/
/* 														<div class="checkbox checkbox-primary">*/
/* 															{% if module_quickorder_name_required %}*/
/* 															<input type="checkbox" name="module_quickorder_name_required" id="quickorder-name-required" class="quickorder-checkbox styled" value="1" checked="checked" />*/
/* 															{% else %}*/
/* 															<input type="checkbox" name="module_quickorder_name_required" id="quickorder-name-required" class="quickorder-checkbox styled" value="1" />*/
/* 															{% endif %}*/
/* 															<label for="quickorder-name-required"></label>*/
/* 														</div>*/
/* 													</td>*/
/* 												</tr>*/
/* 												<tr>*/
/* 													<td class="text-left">{{ text_email }}</td>*/
/* 													<td class="text-center">*/
/* 														<div class="checkbox checkbox-primary">*/
/* 															{% if module_quickorder_email %}*/
/* 															<input type="checkbox" name="module_quickorder_email" id="quickorder-email" class="quickorder-checkbox styled" value="1" checked="checked" />*/
/* 															{% else %}*/
/* 															<input type="checkbox" name="module_quickorder_email" id="quickorder-email" class="quickorder-checkbox styled" value="1" />*/
/* 															{% endif %}*/
/* 															<label for="quickorder-email"></label>*/
/* 														</div>*/
/* 													</td>*/
/* 													<td class="text-center">*/
/* 														<div class="checkbox checkbox-primary">*/
/* 															{% if module_quickorder_email_required %}*/
/* 															<input type="checkbox" name="module_quickorder_email_required" id="quickorder-email-required" class="quickorder-checkbox styled" value="1" checked="checked" />*/
/* 															{% else %}*/
/* 															<input type="checkbox" name="module_quickorder_email_required" id="quickorder-email-required" class="quickorder-checkbox styled" value="1" />*/
/* 															{% endif %}*/
/* 															<label for="quickorder-email-required"></label>*/
/* 														</div>*/
/* 													</td>*/
/* 												</tr>*/
/* 												<tr>*/
/* 													<td class="text-left">{{ text_enquiry }}</td>*/
/* 													<td class="text-center">*/
/* 														<div class="checkbox checkbox-primary">*/
/* 															{% if module_quickorder_enquiry %}*/
/* 															<input type="checkbox" name="module_quickorder_enquiry" id="quickorder-enquiry" class="quickorder-checkbox styled" value="1" checked="checked" />*/
/* 															{% else %}*/
/* 															<input type="checkbox" name="module_quickorder_enquiry" id="quickorder-enquiry" class="quickorder-checkbox styled" value="1" />*/
/* 															{% endif %}*/
/* 															<label for="quickorder-enquiry"></label>*/
/* 														</div>*/
/* 													</td>*/
/* 													<td class="text-center">*/
/* 														<div class="checkbox checkbox-primary">*/
/* 															{% if module_quickorder_enquiry_required %}*/
/* 															<input type="checkbox" name="module_quickorder_enquiry_required" id="quickorder-enquiry-required" class="quickorder-checkbox styled" value="1" checked="checked" />*/
/* 															{% else %}*/
/* 															<input type="checkbox" name="module_quickorder_enquiry_required" id="quickorder-enquiry-required" class="quickorder-checkbox styled" value="1" />*/
/* 															{% endif %}*/
/* 															<label for="quickorder-enquiry-required"></label>*/
/* 														</div>*/
/* 													</td>*/
/* 												</tr>*/
/* 												<tr>*/
/* 													<td class="text-left">{{ text_call_time }}</td>*/
/* 													<td class="text-center">*/
/* 														<div class="checkbox checkbox-primary">*/
/* 															{% if module_quickorder_calltime %}*/
/* 															<input type="checkbox" name="module_quickorder_calltime" id="quickorder-calltime" class="quickorder-checkbox styled" value="1" checked="checked" />*/
/* 															{% else %}*/
/* 															<input type="checkbox" name="module_quickorder_calltime" id="quickorder-calltime" class="quickorder-checkbox styled" value="1" />*/
/* 															{% endif %}*/
/* 															<label for="quickorder-calltime"></label>*/
/* 														</div>*/
/* 													</td>*/
/* 													<td class="text-center">*/
/* 														<div class="checkbox checkbox-primary">*/
/* 															{% if module_quickorder_calltime_required %}*/
/* 															<input type="checkbox" name="module_quickorder_calltime_required" id="quickorder-calltime-required" class="quickorder-checkbox styled" value="1" checked="checked" />*/
/* 															{% else %}*/
/* 															<input type="checkbox" name="module_quickorder_calltime_required" id="quickorder-calltime-required" class="quickorder-checkbox styled" value="1" />*/
/* 															{% endif %}*/
/* 															<label for="quickorder-calltime-required"></label>*/
/* 														</div>*/
/* 													</td>*/
/* 												</tr>*/
/* 											</tbody>*/
/* 										</table>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="col-sm-2 control-label">{{ entry_button_color }}:</label>*/
/* 									<div class="col-sm-4">*/
/* 										<select name="module_quickorder_color_btn" class="selectpicker selectpicker-live-search show-tick">*/
/* 											{% for color in module_quickorder_colors %}*/
/* 											{% if color.name == module_quickorder_color_btn %}*/
/* 											<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 											{% else %}*/
/* 											<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 											{% endif %}*/
/* 											{% endfor %}*/
/* 										</select>*/
/* 										<select name="module_quickorder_color_btn_text" class="selectpicker selectpicker-live-search show-tick">*/
/* 											{% for color in module_quickorder_colors_text %}*/
/* 											{% if color.name == module_quickorder_color_btn_text %}*/
/* 											<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 											{% else %}*/
/* 											<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 											{% endif %}*/
/* 											{% endfor %}*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 							</fieldset>*/
/* 							<br>*/
/* 							<fieldset>*/
/* 								<legend>{{ text_settings }}</legend>*/
/* 								<div class="form-group">*/
/* 									<label class="col-sm-2 control-label" for="quickorder-agreement"><span data-toggle="tooltip" title="{{ help_checkout }}">{{ entry_checkout }}:</span></label>*/
/* 									<div class="col-sm-10">*/
/* 										<select name="module_quickorder_agreement" id="quickorder-agreement" class="selectpicker show-tick" data-width="100%">*/
/* 											<option value="0">{{ text_none }}</option>*/
/* 											{% for information in informations %}*/
/* 											{% if information.information_id == module_quickorder_agreement %}*/
/* 											<option value="{{ information.information_id }}" selected="selected">{{ information.title }}</option>*/
/* 											{% else %}*/
/* 											<option value="{{ information.information_id }}">{{ information.title }}</option>*/
/* 											{% endif %}*/
/* 											{% endfor %}*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 							</fieldset>*/
/* 						</div>*/
/* 						<div id="footer-appeal-users" class="panel-footer text-center"></div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col-sm-12 col-md-4">*/
/* 					<div class="panel panel-default" id="panel-data">*/
/* 						<div class="panel-heading"><h3 class="panel-title"><i class="fa fa-power-off"></i> {{ entry_status }}</h3></div>*/
/* 						<div class="panel-body">*/
/* 							<select name="module_quickorder_status" id="input-status" class="selectpicker show-tick" data-width="100%">*/
/* 								{% if module_quickorder_status %}*/
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
/* 									<button type="submit" form="form-quickorder" title="{{ button_save }}" data-toggle="tooltip" class="btn btn-primary"><i class="fa fa-save"></i> {{ button_save }}</button>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<input type="hidden" name="module_quickorder_installed_appeal" value="0">*/
/* 		</form>*/
/* 	</div>*/
/* </div>*/
/* <script type="text/javascript">*/
/* 	var checkboxName = $("#quickorder-name"),*/
/* 		checkboxEmail = $("#quickorder-email"),*/
/* 		checkboxEnquiry = $("#quickorder-enquiry"),*/
/* 		checkboxCalltime = $("#quickorder-calltime"),*/
/* 		checkboxNameRequired = $("#quickorder-name-required"),*/
/* 		checkboxEmailRequired = $("#quickorder-email-required"),*/
/* 		checkboxEnquiryRequired = $("#quickorder-enquiry-required"),*/
/* 		checkboxCalltimeRequired = $("#quickorder-calltime-required"),*/
/* 		quickorderCheckbox = $(".quickorder-checkbox");*/
/* */
/* 	if (checkboxName.prop("checked")) {*/
/* 		checkboxNameRequired.attr("disabled", false);*/
/* 	} else {*/
/* 		checkboxNameRequired.attr("disabled", true);*/
/* 		checkboxNameRequired.removeAttr("checked");*/
/* 	}*/
/* 	if (checkboxEmail.prop("checked")) {*/
/* 		checkboxEmailRequired.attr("disabled", false);*/
/* 	} else {*/
/* 		checkboxEmailRequired.attr("disabled", true);*/
/* 		checkboxEmailRequired.removeAttr("checked");*/
/* 	}*/
/* 	if (checkboxEnquiry.prop("checked")) {*/
/* 		checkboxEnquiryRequired.attr("disabled", false);*/
/* 	} else {*/
/* 		checkboxEnquiryRequired.attr("disabled", true);*/
/* 		checkboxEnquiryRequired.removeAttr("checked");*/
/* 	}*/
/* 	if (checkboxCalltime.prop("checked")) {*/
/* 		checkboxCalltimeRequired.attr("disabled", false);*/
/* 	} else {*/
/* 		checkboxCalltimeRequired.attr("disabled", true);*/
/* 		checkboxCalltimeRequired.removeAttr("checked");*/
/* 	}*/
/* */
/* 	quickorderCheckbox.on("click", function() {*/
/* 		if (checkboxName.prop("checked")) {*/
/* 			checkboxNameRequired.attr("disabled", false);*/
/* 		} else {*/
/* 			checkboxNameRequired.attr("disabled", true);*/
/* 			checkboxNameRequired.removeAttr("checked");*/
/* 		}*/
/* 		if (checkboxEmail.prop("checked")) {*/
/* 			checkboxEmailRequired.attr("disabled", false);*/
/* 		} else {*/
/* 			checkboxEmailRequired.attr("disabled", true);*/
/* 			checkboxEmailRequired.removeAttr("checked");*/
/* 		}*/
/* 		if (checkboxEnquiry.prop("checked")) {*/
/* 			checkboxEnquiryRequired.attr("disabled", false);*/
/* 		} else {*/
/* 			checkboxEnquiryRequired.attr("disabled", true);*/
/* 			checkboxEnquiryRequired.removeAttr("checked");*/
/* 		}*/
/* 		if (checkboxCalltime.prop("checked")) {*/
/* 			checkboxCalltimeRequired.attr("disabled", false);*/
/* 		} else {*/
/* 			checkboxCalltimeRequired.attr("disabled", true);*/
/* 			checkboxCalltimeRequired.removeAttr("checked");*/
/* 		}*/
/* 	});*/
/* */
/* 	// Selectpicker*/
/* 	$('.selectpicker.selectpicker-live-search').selectpicker({*/
/* 		size: 10,*/
/* 		liveSearch: true,*/
/* 		iconBase: 'fa',*/
/* 		tickIcon: 'fa-check'*/
/* 	});*/
/* */
/* 	{% if error_warning %}*/
/* 	$.notify({*/
/* 		icon: 'fa fa-exclamation-circle',*/
/* 		message: '{{ error_warning }}'*/
/* 	},{*/
/* 		type: "danger"*/
/* 	});*/
/* 	{% endif %}*/
/* */
/* 	{% for language in languages %}*/
/* 		{% if error_success[language.language_id] %}*/
/* 		$.notify({*/
/* 			icon: 'fa fa-exclamation-circle',*/
/* 			message: '{{ error_success[language.language_id] }}'*/
/* 		},{*/
/* 			type: "danger"*/
/* 		});*/
/* 		{% endif %}*/
/* 		{% if error_text_button[language.language_id] %}*/
/* 		$.notify({*/
/* 			icon: 'fa fa-exclamation-circle',*/
/* 			message: '{{ error_text_button[language.language_id] }}'*/
/* 		},{*/
/* 			type: "danger"*/
/* 		});*/
/* 		{% endif %}*/
/* 	{% endfor %}*/
/* */
/* 	$('#footer-appeal-users').load('index.php?route=extension/materialize/appeal/installed/footer&user_token={{ user_token }}');*/
/* */
/* 	{% if module_quickorder_installed_appeal %}*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/materialize/appeal/installed&modal_title={{ quickorder_title }}&user_token={{ user_token }}',*/
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
