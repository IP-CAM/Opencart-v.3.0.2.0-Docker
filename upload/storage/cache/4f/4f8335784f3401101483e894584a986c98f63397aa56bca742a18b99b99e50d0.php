<?php

/* extension/shipping/parcelforce_48.twig */
class __TwigTemplate_11a365d652e28361bf8b4c4c730ee55d41caa6c96be506e4cf3c5b99c631007f extends Twig_Template
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
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-shipping\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-shipping\" class=\"form-horizontal\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-rate\"><span data-toggle=\"tooltip\" title=\"";
        // line 29
        echo (isset($context["help_rate"]) ? $context["help_rate"] : null);
        echo "\">";
        echo (isset($context["entry_rate"]) ? $context["entry_rate"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <textarea name=\"shipping_parcelforce_48_rate\" rows=\"5\" placeholder=\"";
        // line 31
        echo (isset($context["entry_rate"]) ? $context["entry_rate"] : null);
        echo "\" id=\"input-rate\" class=\"form-control\">";
        echo (isset($context["shipping_parcelforce_48_rate"]) ? $context["shipping_parcelforce_48_rate"] : null);
        echo "</textarea>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-insurance\"><span data-toggle=\"tooltip\" title=\"";
        // line 35
        echo (isset($context["help_insurance"]) ? $context["help_insurance"] : null);
        echo "\">";
        echo (isset($context["entry_insurance"]) ? $context["entry_insurance"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <textarea name=\"shipping_parcelforce_48_insurance\" rows=\"5\" placeholder=\"";
        // line 37
        echo (isset($context["entry_insurance"]) ? $context["entry_insurance"] : null);
        echo "\" id=\"input-insurance\" class=\"form-control\">";
        echo (isset($context["shipping_parcelforce_48_insurance"]) ? $context["shipping_parcelforce_48_insurance"] : null);
        echo "</textarea>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 41
        echo (isset($context["help_display_weight"]) ? $context["help_display_weight"] : null);
        echo "\">";
        echo (isset($context["entry_display_weight"]) ? $context["entry_display_weight"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\">
                ";
        // line 44
        if ((isset($context["shipping_parcelforce_48_display_weight"]) ? $context["shipping_parcelforce_48_display_weight"] : null)) {
            // line 45
            echo "                <input type=\"radio\" name=\"shipping_parcelforce_48_display_weight\" value=\"1\" checked=\"checked\" />
                ";
            // line 46
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                ";
        } else {
            // line 48
            echo "                <input type=\"radio\" name=\"shipping_parcelforce_48_display_weight\" value=\"1\" />
                ";
            // line 49
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                ";
        }
        // line 51
        echo "              </label>
              <label class=\"radio-inline\">
                ";
        // line 53
        if ( !(isset($context["shipping_parcelforce_48_display_weight"]) ? $context["shipping_parcelforce_48_display_weight"] : null)) {
            // line 54
            echo "                <input type=\"radio\" name=\"shipping_parcelforce_48_display_weight\" value=\"0\" checked=\"checked\" />
                ";
            // line 55
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                ";
        } else {
            // line 57
            echo "                <input type=\"radio\" name=\"shipping_parcelforce_48_display_weight\" value=\"0\" />
                ";
            // line 58
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                ";
        }
        // line 60
        echo "              </label>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-display-insurance\"><span data-toggle=\"tooltip\" title=\"";
        // line 64
        echo (isset($context["help_display_insurance"]) ? $context["help_display_insurance"] : null);
        echo "\">";
        echo (isset($context["entry_display_insurance"]) ? $context["entry_display_insurance"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\" id=\"input-display-insurance\">
                ";
        // line 67
        if ((isset($context["shipping_parcelforce_48_display_insurance"]) ? $context["shipping_parcelforce_48_display_insurance"] : null)) {
            // line 68
            echo "                <input type=\"radio\" name=\"shipping_parcelforce_48_display_insurance\" value=\"1\" checked=\"checked\" />
                ";
            // line 69
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                ";
        } else {
            // line 71
            echo "                <input type=\"radio\" name=\"shipping_parcelforce_48_display_insurance\" value=\"1\" />
                ";
            // line 72
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                ";
        }
        // line 74
        echo "              </label>
              <label class=\"radio-inline\">
                ";
        // line 76
        if ( !(isset($context["shipping_parcelforce_48_display_insurance"]) ? $context["shipping_parcelforce_48_display_insurance"] : null)) {
            // line 77
            echo "                <input type=\"radio\" name=\"shipping_parcelforce_48_display_insurance\" value=\"0\" checked=\"checked\" />
                ";
            // line 78
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                ";
        } else {
            // line 80
            echo "                <input type=\"radio\" name=\"shipping_parcelforce_48_display_insurance\" value=\"0\" />
                ";
            // line 81
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                ";
        }
        // line 83
        echo "              </label>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 87
        echo (isset($context["help_display_time"]) ? $context["help_display_time"] : null);
        echo "\">";
        echo (isset($context["entry_display_time"]) ? $context["entry_display_time"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\">
                ";
        // line 90
        if ((isset($context["shipping_parcelforce_48_display_time"]) ? $context["shipping_parcelforce_48_display_time"] : null)) {
            // line 91
            echo "                <input type=\"radio\" name=\"shipping_parcelforce_48_display_time\" value=\"1\" checked=\"checked\" />
                ";
            // line 92
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                ";
        } else {
            // line 94
            echo "                <input type=\"radio\" name=\"shipping_parcelforce_48_display_time\" value=\"1\" />
                ";
            // line 95
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                ";
        }
        // line 97
        echo "              </label>
              <label class=\"radio-inline\">
                ";
        // line 99
        if ( !(isset($context["shipping_parcelforce_48_display_time"]) ? $context["shipping_parcelforce_48_display_time"] : null)) {
            // line 100
            echo "                <input type=\"radio\" name=\"shipping_parcelforce_48_display_time\" value=\"0\" checked=\"checked\" />
                ";
            // line 101
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                ";
        } else {
            // line 103
            echo "                <input type=\"radio\" name=\"shipping_parcelforce_48_display_time\" value=\"0\" />
                ";
            // line 104
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                ";
        }
        // line 106
        echo "              </label>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-tax-class\">";
        // line 110
        echo (isset($context["entry_tax_class"]) ? $context["entry_tax_class"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_parcelforce_48_tax_class_id\" id=\"input-tax-class\" class=\"form-control\">
                <option value=\"0\">";
        // line 113
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tax_classes"]) ? $context["tax_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
            // line 115
            echo "                ";
            if (($this->getAttribute($context["tax_class"], "tax_class_id", array()) == (isset($context["shipping_parcelforce_48_tax_class_id"]) ? $context["shipping_parcelforce_48_tax_class_id"] : null))) {
                // line 116
                echo "                <option value=\"";
                echo $this->getAttribute($context["tax_class"], "tax_class_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["tax_class"], "title", array());
                echo "</option>
                ";
            } else {
                // line 118
                echo "                <option value=\"";
                echo $this->getAttribute($context["tax_class"], "tax_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["tax_class"], "title", array());
                echo "</option>
                ";
            }
            // line 120
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-geo-zone\">";
        // line 125
        echo (isset($context["entry_geo_zone"]) ? $context["entry_geo_zone"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_parcelforce_48_geo_zone_id\" id=\"input-geo-zone\" class=\"form-control\">
                <option value=\"0\">";
        // line 128
        echo (isset($context["text_all_zones"]) ? $context["text_all_zones"] : null);
        echo "</option>
                ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["geo_zones"]) ? $context["geo_zones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 130
            echo "                ";
            if (($this->getAttribute($context["geo_zone"], "geo_zone_id", array()) == (isset($context["shipping_parcelforce_48_geo_zone_id"]) ? $context["shipping_parcelforce_48_geo_zone_id"] : null))) {
                // line 131
                echo "                <option value=\"";
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>
                ";
            } else {
                // line 133
                echo "                <option value=\"";
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>
                ";
            }
            // line 135
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 140
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_parcelforce_48_status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 143
        if ((isset($context["shipping_parcelforce_48_status"]) ? $context["shipping_parcelforce_48_status"] : null)) {
            // line 144
            echo "                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\">";
            // line 145
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        } else {
            // line 147
            echo "                <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 148
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        }
        // line 150
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 154
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_parcelforce_48_sort_order\" value=\"";
        // line 156
        echo (isset($context["shipping_parcelforce_48_sort_order"]) ? $context["shipping_parcelforce_48_sort_order"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 164
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "extension/shipping/parcelforce_48.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  425 => 164,  412 => 156,  407 => 154,  401 => 150,  396 => 148,  391 => 147,  386 => 145,  381 => 144,  379 => 143,  373 => 140,  367 => 136,  361 => 135,  353 => 133,  345 => 131,  342 => 130,  338 => 129,  334 => 128,  328 => 125,  322 => 121,  316 => 120,  308 => 118,  300 => 116,  297 => 115,  293 => 114,  289 => 113,  283 => 110,  277 => 106,  272 => 104,  269 => 103,  264 => 101,  261 => 100,  259 => 99,  255 => 97,  250 => 95,  247 => 94,  242 => 92,  239 => 91,  237 => 90,  229 => 87,  223 => 83,  218 => 81,  215 => 80,  210 => 78,  207 => 77,  205 => 76,  201 => 74,  196 => 72,  193 => 71,  188 => 69,  185 => 68,  183 => 67,  175 => 64,  169 => 60,  164 => 58,  161 => 57,  156 => 55,  153 => 54,  151 => 53,  147 => 51,  142 => 49,  139 => 48,  134 => 46,  131 => 45,  129 => 44,  121 => 41,  112 => 37,  105 => 35,  96 => 31,  89 => 29,  84 => 27,  78 => 24,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-shipping" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-shipping" class="form-horizontal">*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-rate"><span data-toggle="tooltip" title="{{ help_rate }}">{{ entry_rate }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <textarea name="shipping_parcelforce_48_rate" rows="5" placeholder="{{ entry_rate }}" id="input-rate" class="form-control">{{ shipping_parcelforce_48_rate }}</textarea>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-insurance"><span data-toggle="tooltip" title="{{ help_insurance }}">{{ entry_insurance }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <textarea name="shipping_parcelforce_48_insurance" rows="5" placeholder="{{ entry_insurance }}" id="input-insurance" class="form-control">{{ shipping_parcelforce_48_insurance }}</textarea>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_display_weight }}">{{ entry_display_weight }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <label class="radio-inline">*/
/*                 {% if shipping_parcelforce_48_display_weight %}*/
/*                 <input type="radio" name="shipping_parcelforce_48_display_weight" value="1" checked="checked" />*/
/*                 {{ text_yes }}*/
/*                 {% else %}*/
/*                 <input type="radio" name="shipping_parcelforce_48_display_weight" value="1" />*/
/*                 {{ text_yes }}*/
/*                 {% endif %}*/
/*               </label>*/
/*               <label class="radio-inline">*/
/*                 {% if not shipping_parcelforce_48_display_weight %}*/
/*                 <input type="radio" name="shipping_parcelforce_48_display_weight" value="0" checked="checked" />*/
/*                 {{ text_no }}*/
/*                 {% else %}*/
/*                 <input type="radio" name="shipping_parcelforce_48_display_weight" value="0" />*/
/*                 {{ text_no }}*/
/*                 {% endif %}*/
/*               </label>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-display-insurance"><span data-toggle="tooltip" title="{{ help_display_insurance }}">{{ entry_display_insurance }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <label class="radio-inline" id="input-display-insurance">*/
/*                 {% if shipping_parcelforce_48_display_insurance %}*/
/*                 <input type="radio" name="shipping_parcelforce_48_display_insurance" value="1" checked="checked" />*/
/*                 {{ text_yes }}*/
/*                 {% else %}*/
/*                 <input type="radio" name="shipping_parcelforce_48_display_insurance" value="1" />*/
/*                 {{ text_yes }}*/
/*                 {% endif %}*/
/*               </label>*/
/*               <label class="radio-inline">*/
/*                 {% if not shipping_parcelforce_48_display_insurance %}*/
/*                 <input type="radio" name="shipping_parcelforce_48_display_insurance" value="0" checked="checked" />*/
/*                 {{ text_no }}*/
/*                 {% else %}*/
/*                 <input type="radio" name="shipping_parcelforce_48_display_insurance" value="0" />*/
/*                 {{ text_no }}*/
/*                 {% endif %}*/
/*               </label>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_display_time }}">{{ entry_display_time }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <label class="radio-inline">*/
/*                 {% if shipping_parcelforce_48_display_time %}*/
/*                 <input type="radio" name="shipping_parcelforce_48_display_time" value="1" checked="checked" />*/
/*                 {{ text_yes }}*/
/*                 {% else %}*/
/*                 <input type="radio" name="shipping_parcelforce_48_display_time" value="1" />*/
/*                 {{ text_yes }}*/
/*                 {% endif %}*/
/*               </label>*/
/*               <label class="radio-inline">*/
/*                 {% if not shipping_parcelforce_48_display_time %}*/
/*                 <input type="radio" name="shipping_parcelforce_48_display_time" value="0" checked="checked" />*/
/*                 {{ text_no }}*/
/*                 {% else %}*/
/*                 <input type="radio" name="shipping_parcelforce_48_display_time" value="0" />*/
/*                 {{ text_no }}*/
/*                 {% endif %}*/
/*               </label>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-tax-class">{{ entry_tax_class }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="shipping_parcelforce_48_tax_class_id" id="input-tax-class" class="form-control">*/
/*                 <option value="0">{{ text_none }}</option>*/
/*                 {% for tax_class in tax_classes %}*/
/*                 {% if tax_class.tax_class_id == shipping_parcelforce_48_tax_class_id %}*/
/*                 <option value="{{ tax_class.tax_class_id }}" selected="selected">{{ tax_class.title }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ tax_class.tax_class_id }}">{{ tax_class.title }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-geo-zone">{{ entry_geo_zone }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="shipping_parcelforce_48_geo_zone_id" id="input-geo-zone" class="form-control">*/
/*                 <option value="0">{{ text_all_zones }}</option>*/
/*                 {% for geo_zone in geo_zones %}*/
/*                 {% if geo_zone.geo_zone_id == shipping_parcelforce_48_geo_zone_id %}*/
/*                 <option value="{{ geo_zone.geo_zone_id }}" selected="selected">{{ geo_zone.name }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ geo_zone.geo_zone_id }}">{{ geo_zone.name }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="shipping_parcelforce_48_status" id="input-status" class="form-control">*/
/*                 {% if shipping_parcelforce_48_status %}*/
/*                 <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                 <option value="0">{{ text_disabled }}</option>*/
/*                 {% else %}*/
/*                 <option value="1">{{ text_enabled }}</option>*/
/*                 <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-sort-order">{{ entry_sort_order }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="shipping_parcelforce_48_sort_order" value="{{ shipping_parcelforce_48_sort_order }}" placeholder="{{ entry_sort_order }}" id="input-sort-order" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }} */
