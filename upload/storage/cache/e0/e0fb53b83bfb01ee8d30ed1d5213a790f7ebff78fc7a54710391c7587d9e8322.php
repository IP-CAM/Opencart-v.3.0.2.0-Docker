<?php

/* extension/shipping/ec_ship.twig */
class __TwigTemplate_14c0fccfb660aa5b1f16201ce475c298575c74c8868cd3b49fc9f5f2f178b6e3 extends Twig_Template
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
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-key\"><span data-toggle=\"tooltip\" title=\"";
        // line 29
        echo (isset($context["help_api_key"]) ? $context["help_api_key"] : null);
        echo "\">";
        echo (isset($context["entry_api_key"]) ? $context["entry_api_key"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_ec_ship_api_key\" value=\"";
        // line 31
        echo (isset($context["shipping_ec_ship_api_key"]) ? $context["shipping_ec_ship_api_key"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_api_key"]) ? $context["entry_api_key"] : null);
        echo "\" id=\"input-key\" class=\"form-control\" />
              ";
        // line 32
        if ((isset($context["error_api_key"]) ? $context["error_api_key"] : null)) {
            // line 33
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_api_key"]) ? $context["error_api_key"] : null);
            echo "</div>
              ";
        }
        // line 35
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-api_username\"><span data-toggle=\"tooltip\" title=\"";
        // line 38
        echo (isset($context["help_api_username"]) ? $context["help_api_username"] : null);
        echo "\">";
        echo (isset($context["entry_api_username"]) ? $context["entry_api_username"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_ec_ship_api_username\" value=\"";
        // line 40
        echo (isset($context["shipping_ec_ship_api_username"]) ? $context["shipping_ec_ship_api_username"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_api_username"]) ? $context["entry_api_username"] : null);
        echo "\" id=\"input-api_username\" class=\"form-control\" />
              ";
        // line 41
        if ((isset($context["error_api_username"]) ? $context["error_api_username"] : null)) {
            // line 42
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_api_username"]) ? $context["error_api_username"] : null);
            echo "</div>
              ";
        }
        // line 44
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-username\"><span data-toggle=\"tooltip\" title=\"";
        // line 47
        echo (isset($context["help_username"]) ? $context["help_username"] : null);
        echo "\">";
        echo (isset($context["entry_username"]) ? $context["entry_username"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_ec_ship_username\" value=\"";
        // line 49
        echo (isset($context["shipping_ec_ship_username"]) ? $context["shipping_ec_ship_username"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_username"]) ? $context["entry_username"] : null);
        echo "\" id=\"input-username\" class=\"form-control\" />
              ";
        // line 50
        if ((isset($context["error_username"]) ? $context["error_username"] : null)) {
            // line 51
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_username"]) ? $context["error_username"] : null);
            echo "</div>
              ";
        }
        // line 53
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 56
        echo (isset($context["help_test"]) ? $context["help_test"] : null);
        echo "\">";
        echo (isset($context["entry_test"]) ? $context["entry_test"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\">
                ";
        // line 59
        if ((isset($context["shipping_ec_ship_test"]) ? $context["shipping_ec_ship_test"] : null)) {
            // line 60
            echo "                <input type=\"radio\" name=\"shipping_ec_ship_test\" value=\"1\" checked=\"checked\" />
                ";
            // line 61
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                ";
        } else {
            // line 63
            echo "                <input type=\"radio\" name=\"shipping_ec_ship_test\" value=\"1\" />
                ";
            // line 64
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                ";
        }
        // line 66
        echo "              </label>
              <label class=\"radio-inline\">
                ";
        // line 68
        if ( !(isset($context["shipping_ec_ship_test"]) ? $context["shipping_ec_ship_test"] : null)) {
            // line 69
            echo "                <input type=\"radio\" name=\"shipping_ec_ship_test\" value=\"0\" checked=\"checked\" />
                ";
            // line 70
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                ";
        } else {
            // line 72
            echo "                <input type=\"radio\" name=\"shipping_ec_ship_test\" value=\"0\" />
                ";
            // line 73
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                ";
        }
        // line 75
        echo "              </label>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 79
        echo (isset($context["help_service"]) ? $context["help_service"] : null);
        echo "\">";
        echo (isset($context["entry_service"]) ? $context["entry_service"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <div id=\"service\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 84
        if ((isset($context["shipping_ec_ship_air_registered_mail"]) ? $context["shipping_ec_ship_air_registered_mail"] : null)) {
            // line 85
            echo "                      <input type=\"checkbox\" name=\"shipping_ec_ship_air_registered_mail\" value=\"1\" checked=\"checked\" />
                      ";
            // line 86
            echo (isset($context["text_air_registered_mail"]) ? $context["text_air_registered_mail"] : null);
            echo "
                      ";
        } else {
            // line 88
            echo "                      <input type=\"checkbox\" name=\"shipping_ec_ship_air_registered_mail\" value=\"1\" />
                      ";
            // line 89
            echo (isset($context["text_air_registered_mail"]) ? $context["text_air_registered_mail"] : null);
            echo "
                      ";
        }
        // line 91
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 95
        if ((isset($context["shipping_ec_ship_air_parcel"]) ? $context["shipping_ec_ship_air_parcel"] : null)) {
            // line 96
            echo "                      <input type=\"checkbox\" name=\"shipping_ec_ship_air_parcel\" value=\"1\" checked=\"checked\" />
                      ";
            // line 97
            echo (isset($context["text_air_parcel"]) ? $context["text_air_parcel"] : null);
            echo "
                      ";
        } else {
            // line 99
            echo "                      <input type=\"checkbox\" name=\"shipping_ec_ship_air_parcel\" value=\"1\" />
                      ";
            // line 100
            echo (isset($context["text_air_parcel"]) ? $context["text_air_parcel"] : null);
            echo "
                      ";
        }
        // line 102
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 106
        if ((isset($context["shipping_ec_ship_e_express_service_to_us"]) ? $context["shipping_ec_ship_e_express_service_to_us"] : null)) {
            // line 107
            echo "                      <input type=\"checkbox\" name=\"shipping_ec_ship_e_express_service_to_us\" value=\"1\" checked=\"checked\" />
                      ";
            // line 108
            echo (isset($context["text_e_express_service_to_us"]) ? $context["text_e_express_service_to_us"] : null);
            echo "
                      ";
        } else {
            // line 110
            echo "                      <input type=\"checkbox\" name=\"shipping_ec_ship_e_express_service_to_us\" value=\"1\" />
                      ";
            // line 111
            echo (isset($context["text_e_express_service_to_us"]) ? $context["text_e_express_service_to_us"] : null);
            echo "
                      ";
        }
        // line 113
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 117
        if ((isset($context["shipping_ec_ship_e_express_service_to_canada"]) ? $context["shipping_ec_ship_e_express_service_to_canada"] : null)) {
            // line 118
            echo "                      <input type=\"checkbox\" name=\"shipping_ec_ship_e_express_service_to_canada\" value=\"1\" checked=\"checked\" />
                      ";
            // line 119
            echo (isset($context["text_e_express_service_to_canada"]) ? $context["text_e_express_service_to_canada"] : null);
            echo "
                      ";
        } else {
            // line 121
            echo "                      <input type=\"checkbox\" name=\"shipping_ec_ship_e_express_service_to_canada\" value=\"1\" />
                      ";
            // line 122
            echo (isset($context["text_e_express_service_to_canada"]) ? $context["text_e_express_service_to_canada"] : null);
            echo "
                      ";
        }
        // line 124
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 128
        if ((isset($context["shipping_ec_ship_e_express_service_to_united_kingdom"]) ? $context["shipping_ec_ship_e_express_service_to_united_kingdom"] : null)) {
            // line 129
            echo "                      <input type=\"checkbox\" name=\"shipping_ec_ship_e_express_service_to_united_kingdom\" value=\"1\" checked=\"checked\" />
                      ";
            // line 130
            echo (isset($context["text_e_express_service_to_united_kingdom"]) ? $context["text_e_express_service_to_united_kingdom"] : null);
            echo "
                      ";
        } else {
            // line 132
            echo "                      <input type=\"checkbox\" name=\"shipping_ec_ship_e_express_service_to_united_kingdom\" value=\"1\" />
                      ";
            // line 133
            echo (isset($context["text_e_express_service_to_united_kingdom"]) ? $context["text_e_express_service_to_united_kingdom"] : null);
            echo "
                      ";
        }
        // line 135
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 139
        if ((isset($context["shipping_ec_ship_e_express_service_to_russia"]) ? $context["shipping_ec_ship_e_express_service_to_russia"] : null)) {
            // line 140
            echo "                      <input type=\"checkbox\" name=\"shipping_ec_ship_e_express_service_to_russia\" value=\"1\" checked=\"checked\" />
                      ";
            // line 141
            echo (isset($context["text_e_express_service_to_russia"]) ? $context["text_e_express_service_to_russia"] : null);
            echo "
                      ";
        } else {
            // line 143
            echo "                      <input type=\"checkbox\" name=\"shipping_ec_ship_e_express_service_to_russia\" value=\"1\" />
                      ";
            // line 144
            echo (isset($context["text_e_express_service_to_russia"]) ? $context["text_e_express_service_to_russia"] : null);
            echo "
                      ";
        }
        // line 146
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 150
        if ((isset($context["shipping_ec_ship_e_express_service_one"]) ? $context["shipping_ec_ship_e_express_service_one"] : null)) {
            // line 151
            echo "                      <input type=\"checkbox\" name=\"shipping_ec_ship_e_express_service_one\" value=\"1\" checked=\"checked\" />
                      ";
            // line 152
            echo (isset($context["text_e_express_service_one"]) ? $context["text_e_express_service_one"] : null);
            echo "
                      ";
        } else {
            // line 154
            echo "                      <input type=\"checkbox\" name=\"shipping_ec_ship_e_express_service_one\" value=\"1\" />
                      ";
            // line 155
            echo (isset($context["text_e_express_service_one"]) ? $context["text_e_express_service_one"] : null);
            echo "
                      ";
        }
        // line 157
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 161
        if ((isset($context["shipping_ec_ship_e_express_service_two"]) ? $context["shipping_ec_ship_e_express_service_two"] : null)) {
            // line 162
            echo "                      <input type=\"checkbox\" name=\"shipping_ec_ship_e_express_service_two\" value=\"1\" checked=\"checked\" />
                      ";
            // line 163
            echo (isset($context["text_e_express_service_two"]) ? $context["text_e_express_service_two"] : null);
            echo "
                      ";
        } else {
            // line 165
            echo "                      <input type=\"checkbox\" name=\"shipping_ec_ship_e_express_service_two\" value=\"1\" />
                      ";
            // line 166
            echo (isset($context["text_e_express_service_two"]) ? $context["text_e_express_service_two"] : null);
            echo "
                      ";
        }
        // line 168
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 172
        if ((isset($context["shipping_ec_ship_speed_post"]) ? $context["shipping_ec_ship_speed_post"] : null)) {
            // line 173
            echo "                      <input type=\"checkbox\" name=\"shipping_ec_ship_speed_post\" value=\"1\" checked=\"checked\" />
                      ";
            // line 174
            echo (isset($context["text_speed_post"]) ? $context["text_speed_post"] : null);
            echo "
                      ";
        } else {
            // line 176
            echo "                      <input type=\"checkbox\" name=\"shipping_ec_ship_speed_post\" value=\"1\" />
                      ";
            // line 177
            echo (isset($context["text_speed_post"]) ? $context["text_speed_post"] : null);
            echo "
                      ";
        }
        // line 179
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 183
        if ((isset($context["shipping_ec_ship_smart_post"]) ? $context["shipping_ec_ship_smart_post"] : null)) {
            // line 184
            echo "                      <input type=\"checkbox\" name=\"shipping_ec_ship_smart_post\" value=\"1\" checked=\"checked\" />
                      ";
            // line 185
            echo (isset($context["text_smart_post"]) ? $context["text_smart_post"] : null);
            echo "
                      ";
        } else {
            // line 187
            echo "                      <input type=\"checkbox\" name=\"shipping_ec_ship_smart_post\" value=\"1\" />
                      ";
            // line 188
            echo (isset($context["text_smart_post"]) ? $context["text_smart_post"] : null);
            echo "
                      ";
        }
        // line 190
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 194
        if ((isset($context["shipping_ec_ship_local_courier_post"]) ? $context["shipping_ec_ship_local_courier_post"] : null)) {
            // line 195
            echo "                      <input type=\"checkbox\" name=\"shipping_ec_ship_local_courier_post\" value=\"1\" checked=\"checked\" />
                      ";
            // line 196
            echo (isset($context["text_local_courier_post"]) ? $context["text_local_courier_post"] : null);
            echo "
                      ";
        } else {
            // line 198
            echo "                      <input type=\"checkbox\" name=\"shipping_ec_ship_local_courier_post\" value=\"1\" />
                      ";
            // line 199
            echo (isset($context["text_local_courier_post"]) ? $context["text_local_courier_post"] : null);
            echo "
                      ";
        }
        // line 201
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 205
        if ((isset($context["shipping_ec_ship_local_parcel"]) ? $context["shipping_ec_ship_local_parcel"] : null)) {
            // line 206
            echo "                      <input type=\"checkbox\" name=\"shipping_ec_ship_local_parcel\" value=\"1\" checked=\"checked\" />
                     ";
            // line 207
            echo (isset($context["text_local_parcel"]) ? $context["text_local_parcel"] : null);
            echo "
                      ";
        } else {
            // line 209
            echo "                     <input type=\"checkbox\" name=\"shipping_ec_ship_local_parcel\" value=\"1\" />
                    ";
            // line 210
            echo (isset($context["text_local_parcel"]) ? $context["text_local_parcel"] : null);
            echo "
                      ";
        }
        // line 212
        echo "                    </label>
                  </div>
              </div>
              <button type=\"button\" onclick=\"\$(this).parent().find(':checkbox').prop('checked', true);\" class=\"btn btn-link\">";
        // line 215
        echo (isset($context["text_select_all"]) ? $context["text_select_all"] : null);
        echo "</button> / <button type=\"button\" onclick=\"\$(this).parent().find(':checkbox').prop('checked', false);\" class=\"btn btn-link\">";
        echo (isset($context["text_unselect_all"]) ? $context["text_unselect_all"] : null);
        echo "</button></div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-weight-class\"><span data-toggle=\"tooltip\" title=\"";
        // line 218
        echo (isset($context["help_weight_class"]) ? $context["help_weight_class"] : null);
        echo "\">";
        echo (isset($context["entry_weight_class"]) ? $context["entry_weight_class"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_ec_ship_weight_class_id\" id=\"input-weight-class\" class=\"form-control\">
                ";
        // line 221
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["weight_classes"]) ? $context["weight_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 222
            echo "                ";
            if (($this->getAttribute($context["weight_class"], "weight_class_id", array(), "array") == (isset($context["shipping_ec_ship_weight_class_id"]) ? $context["shipping_ec_ship_weight_class_id"] : null))) {
                // line 223
                echo "                <option value=\"";
                echo $this->getAttribute($context["weight_class"], "weight_class_id", array(), "array");
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["weight_class"], "title", array(), "array");
                echo "</option>
                ";
            } else {
                // line 225
                echo "                <option value=\"";
                echo $this->getAttribute($context["weight_class"], "weight_class_id", array(), "array");
                echo "\">";
                echo $this->getAttribute($context["weight_class"], "title", array(), "array");
                echo "</option>
                ";
            }
            // line 227
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 228
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-tax-class\">";
        // line 232
        echo (isset($context["entry_tax_class"]) ? $context["entry_tax_class"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_ec_ship_tax_class_id\" id=\"input-tax-class\" class=\"form-control\">
                <option value=\"0\">";
        // line 235
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                ";
        // line 236
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tax_classes"]) ? $context["tax_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
            // line 237
            echo "                ";
            if (($this->getAttribute($context["tax_class"], "tax_class_id", array(), "array") == (isset($context["shipping_ec_ship_tax_class_id"]) ? $context["shipping_ec_ship_tax_class_id"] : null))) {
                // line 238
                echo "                <option value=\"";
                echo $this->getAttribute($context["tax_class"], "tax_class_id", array(), "array");
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["tax_class"], "title", array(), "array");
                echo "</option>
                ";
            } else {
                // line 240
                echo "                <option value=\"";
                echo $this->getAttribute($context["tax_class"], "tax_class_id", array(), "array");
                echo "\">";
                echo $this->getAttribute($context["tax_class"], "title", array(), "array");
                echo "</option>
                ";
            }
            // line 242
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 243
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-geo-zone\">";
        // line 247
        echo (isset($context["entry_geo_zone"]) ? $context["entry_geo_zone"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_ec_ship_geo_zone_id\" id=\"input-geo-zone\" class=\"form-control\">
                <option value=\"0\">";
        // line 250
        echo (isset($context["text_all_zones"]) ? $context["text_all_zones"] : null);
        echo "</option>
                ";
        // line 251
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["geo_zones"]) ? $context["geo_zones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 252
            echo "                ";
            if (($this->getAttribute($context["geo_zone"], "geo_zone_id", array(), "array") == (isset($context["shipping_ec_ship_geo_zone_id"]) ? $context["shipping_ec_ship_geo_zone_id"] : null))) {
                // line 253
                echo "                <option value=\"";
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array(), "array");
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["geo_zone"], "name", array(), "array");
                echo "</option>
                ";
            } else {
                // line 255
                echo "                <option value=\"";
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array(), "array");
                echo "\">";
                echo $this->getAttribute($context["geo_zone"], "name", array(), "array");
                echo "</option>
                ";
            }
            // line 257
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 258
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 262
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_ec_ship_status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 265
        if ((isset($context["shipping_ec_ship_status"]) ? $context["shipping_ec_ship_status"] : null)) {
            // line 266
            echo "                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\">";
            // line 267
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        } else {
            // line 269
            echo "                <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 270
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        }
        // line 272
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 276
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_ec_ship_sort_order\" value=\"";
        // line 278
        echo (isset($context["shipping_ec_ship_sort_order"]) ? $context["shipping_ec_ship_sort_order"] : null);
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
        // line 286
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/shipping/ec_ship.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  711 => 286,  698 => 278,  693 => 276,  687 => 272,  682 => 270,  677 => 269,  672 => 267,  667 => 266,  665 => 265,  659 => 262,  653 => 258,  647 => 257,  639 => 255,  631 => 253,  628 => 252,  624 => 251,  620 => 250,  614 => 247,  608 => 243,  602 => 242,  594 => 240,  586 => 238,  583 => 237,  579 => 236,  575 => 235,  569 => 232,  563 => 228,  557 => 227,  549 => 225,  541 => 223,  538 => 222,  534 => 221,  526 => 218,  518 => 215,  513 => 212,  508 => 210,  505 => 209,  500 => 207,  497 => 206,  495 => 205,  489 => 201,  484 => 199,  481 => 198,  476 => 196,  473 => 195,  471 => 194,  465 => 190,  460 => 188,  457 => 187,  452 => 185,  449 => 184,  447 => 183,  441 => 179,  436 => 177,  433 => 176,  428 => 174,  425 => 173,  423 => 172,  417 => 168,  412 => 166,  409 => 165,  404 => 163,  401 => 162,  399 => 161,  393 => 157,  388 => 155,  385 => 154,  380 => 152,  377 => 151,  375 => 150,  369 => 146,  364 => 144,  361 => 143,  356 => 141,  353 => 140,  351 => 139,  345 => 135,  340 => 133,  337 => 132,  332 => 130,  329 => 129,  327 => 128,  321 => 124,  316 => 122,  313 => 121,  308 => 119,  305 => 118,  303 => 117,  297 => 113,  292 => 111,  289 => 110,  284 => 108,  281 => 107,  279 => 106,  273 => 102,  268 => 100,  265 => 99,  260 => 97,  257 => 96,  255 => 95,  249 => 91,  244 => 89,  241 => 88,  236 => 86,  233 => 85,  231 => 84,  221 => 79,  215 => 75,  210 => 73,  207 => 72,  202 => 70,  199 => 69,  197 => 68,  193 => 66,  188 => 64,  185 => 63,  180 => 61,  177 => 60,  175 => 59,  167 => 56,  162 => 53,  156 => 51,  154 => 50,  148 => 49,  141 => 47,  136 => 44,  130 => 42,  128 => 41,  122 => 40,  115 => 38,  110 => 35,  104 => 33,  102 => 32,  96 => 31,  89 => 29,  84 => 27,  78 => 24,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
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
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-key"><span data-toggle="tooltip" title="{{ help_api_key }}">{{ entry_api_key }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="shipping_ec_ship_api_key" value="{{ shipping_ec_ship_api_key }}" placeholder="{{ entry_api_key }}" id="input-key" class="form-control" />*/
/*               {% if error_api_key %}*/
/*               <div class="text-danger">{{ error_api_key }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-api_username"><span data-toggle="tooltip" title="{{ help_api_username }}">{{ entry_api_username }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="shipping_ec_ship_api_username" value="{{ shipping_ec_ship_api_username }}" placeholder="{{ entry_api_username }}" id="input-api_username" class="form-control" />*/
/*               {% if error_api_username %}*/
/*               <div class="text-danger">{{ error_api_username }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-username"><span data-toggle="tooltip" title="{{ help_username }}">{{ entry_username }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="shipping_ec_ship_username" value="{{ shipping_ec_ship_username }}" placeholder="{{ entry_username }}" id="input-username" class="form-control" />*/
/*               {% if error_username %}*/
/*               <div class="text-danger">{{ error_username }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_test }}">{{ entry_test }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <label class="radio-inline">*/
/*                 {% if shipping_ec_ship_test %}*/
/*                 <input type="radio" name="shipping_ec_ship_test" value="1" checked="checked" />*/
/*                 {{ text_yes }}*/
/*                 {% else %}*/
/*                 <input type="radio" name="shipping_ec_ship_test" value="1" />*/
/*                 {{ text_yes }}*/
/*                 {% endif %}*/
/*               </label>*/
/*               <label class="radio-inline">*/
/*                 {% if not shipping_ec_ship_test %}*/
/*                 <input type="radio" name="shipping_ec_ship_test" value="0" checked="checked" />*/
/*                 {{ text_no }}*/
/*                 {% else %}*/
/*                 <input type="radio" name="shipping_ec_ship_test" value="0" />*/
/*                 {{ text_no }}*/
/*                 {% endif %}*/
/*               </label>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_service }}">{{ entry_service }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <div id="service" class="well well-sm" style="height: 150px; overflow: auto;">*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ec_ship_air_registered_mail %}*/
/*                       <input type="checkbox" name="shipping_ec_ship_air_registered_mail" value="1" checked="checked" />*/
/*                       {{ text_air_registered_mail }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ec_ship_air_registered_mail" value="1" />*/
/*                       {{ text_air_registered_mail }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ec_ship_air_parcel %}*/
/*                       <input type="checkbox" name="shipping_ec_ship_air_parcel" value="1" checked="checked" />*/
/*                       {{ text_air_parcel }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ec_ship_air_parcel" value="1" />*/
/*                       {{ text_air_parcel }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ec_ship_e_express_service_to_us %}*/
/*                       <input type="checkbox" name="shipping_ec_ship_e_express_service_to_us" value="1" checked="checked" />*/
/*                       {{ text_e_express_service_to_us }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ec_ship_e_express_service_to_us" value="1" />*/
/*                       {{ text_e_express_service_to_us }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ec_ship_e_express_service_to_canada %}*/
/*                       <input type="checkbox" name="shipping_ec_ship_e_express_service_to_canada" value="1" checked="checked" />*/
/*                       {{ text_e_express_service_to_canada }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ec_ship_e_express_service_to_canada" value="1" />*/
/*                       {{ text_e_express_service_to_canada }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ec_ship_e_express_service_to_united_kingdom %}*/
/*                       <input type="checkbox" name="shipping_ec_ship_e_express_service_to_united_kingdom" value="1" checked="checked" />*/
/*                       {{ text_e_express_service_to_united_kingdom }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ec_ship_e_express_service_to_united_kingdom" value="1" />*/
/*                       {{ text_e_express_service_to_united_kingdom }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ec_ship_e_express_service_to_russia %}*/
/*                       <input type="checkbox" name="shipping_ec_ship_e_express_service_to_russia" value="1" checked="checked" />*/
/*                       {{ text_e_express_service_to_russia }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ec_ship_e_express_service_to_russia" value="1" />*/
/*                       {{ text_e_express_service_to_russia }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ec_ship_e_express_service_one %}*/
/*                       <input type="checkbox" name="shipping_ec_ship_e_express_service_one" value="1" checked="checked" />*/
/*                       {{ text_e_express_service_one }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ec_ship_e_express_service_one" value="1" />*/
/*                       {{ text_e_express_service_one }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ec_ship_e_express_service_two %}*/
/*                       <input type="checkbox" name="shipping_ec_ship_e_express_service_two" value="1" checked="checked" />*/
/*                       {{ text_e_express_service_two }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ec_ship_e_express_service_two" value="1" />*/
/*                       {{ text_e_express_service_two }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ec_ship_speed_post %}*/
/*                       <input type="checkbox" name="shipping_ec_ship_speed_post" value="1" checked="checked" />*/
/*                       {{ text_speed_post }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ec_ship_speed_post" value="1" />*/
/*                       {{ text_speed_post }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ec_ship_smart_post %}*/
/*                       <input type="checkbox" name="shipping_ec_ship_smart_post" value="1" checked="checked" />*/
/*                       {{ text_smart_post }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ec_ship_smart_post" value="1" />*/
/*                       {{ text_smart_post }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ec_ship_local_courier_post %}*/
/*                       <input type="checkbox" name="shipping_ec_ship_local_courier_post" value="1" checked="checked" />*/
/*                       {{ text_local_courier_post }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ec_ship_local_courier_post" value="1" />*/
/*                       {{ text_local_courier_post }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ec_ship_local_parcel %}*/
/*                       <input type="checkbox" name="shipping_ec_ship_local_parcel" value="1" checked="checked" />*/
/*                      {{ text_local_parcel }}*/
/*                       {% else %}*/
/*                      <input type="checkbox" name="shipping_ec_ship_local_parcel" value="1" />*/
/*                     {{ text_local_parcel }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*               </div>*/
/*               <button type="button" onclick="$(this).parent().find(':checkbox').prop('checked', true);" class="btn btn-link">{{ text_select_all }}</button> / <button type="button" onclick="$(this).parent().find(':checkbox').prop('checked', false);" class="btn btn-link">{{ text_unselect_all }}</button></div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-weight-class"><span data-toggle="tooltip" title="{{ help_weight_class }}">{{ entry_weight_class }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <select name="shipping_ec_ship_weight_class_id" id="input-weight-class" class="form-control">*/
/*                 {% for weight_class in weight_classes %}*/
/*                 {% if weight_class['weight_class_id'] == shipping_ec_ship_weight_class_id %}*/
/*                 <option value="{{ weight_class['weight_class_id'] }}" selected="selected">{{ weight_class['title'] }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ weight_class['weight_class_id'] }}">{{ weight_class['title'] }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-tax-class">{{ entry_tax_class }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="shipping_ec_ship_tax_class_id" id="input-tax-class" class="form-control">*/
/*                 <option value="0">{{ text_none }}</option>*/
/*                 {% for tax_class in tax_classes %}*/
/*                 {% if tax_class['tax_class_id'] == shipping_ec_ship_tax_class_id %}*/
/*                 <option value="{{ tax_class['tax_class_id'] }}" selected="selected">{{ tax_class['title'] }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ tax_class['tax_class_id'] }}">{{ tax_class['title'] }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-geo-zone">{{ entry_geo_zone }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="shipping_ec_ship_geo_zone_id" id="input-geo-zone" class="form-control">*/
/*                 <option value="0">{{ text_all_zones }}</option>*/
/*                 {% for geo_zone in geo_zones %}*/
/*                 {% if geo_zone['geo_zone_id'] == shipping_ec_ship_geo_zone_id %}*/
/*                 <option value="{{ geo_zone['geo_zone_id'] }}" selected="selected">{{ geo_zone['name'] }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ geo_zone['geo_zone_id'] }}">{{ geo_zone['name'] }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="shipping_ec_ship_status" id="input-status" class="form-control">*/
/*                 {% if (shipping_ec_ship_status) %}*/
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
/*               <input type="text" name="shipping_ec_ship_sort_order" value="{{ shipping_ec_ship_sort_order }}" placeholder="{{ entry_sort_order }}" id="input-sort-order" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
/* */
