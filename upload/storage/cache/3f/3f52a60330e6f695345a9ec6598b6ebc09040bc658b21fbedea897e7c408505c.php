<?php

/* catalog/product_form.twig */
class __TwigTemplate_db2e6870462fe4441e5257b78a3137d89e2782524236d4f810d4a0e41d12c0dd extends Twig_Template
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
<button type=\"button\" form=\"form-product\" id=\"apply-btn\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["text_apply"]) ? $context["text_apply"] : null);
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-repeat\"></i></button>
        <button type=\"submit\" form=\"form-product\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 8
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 9
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
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
        // line 14
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\"> ";
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
        echo "
\t\t\t";
        // line 23
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 24
            echo "\t\t\t<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t</div>
\t\t\t";
        }
        // line 28
        echo "\t\t\t
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 31
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 34
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" data-action=\"";
        echo (isset($context["apply"]) ? $context["apply"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\" id=\"apply-tab\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 36
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
            <li><a href=\"#tab-data\" data-toggle=\"tab\">";
        // line 37
        echo (isset($context["tab_data"]) ? $context["tab_data"] : null);
        echo "</a></li>
            <li><a href=\"#tab-links\" data-toggle=\"tab\">";
        // line 38
        echo (isset($context["tab_links"]) ? $context["tab_links"] : null);
        echo "</a></li>
            <li><a href=\"#tab-attribute\" data-toggle=\"tab\">";
        // line 39
        echo (isset($context["tab_attribute"]) ? $context["tab_attribute"] : null);
        echo "</a></li>
            <li><a href=\"#tab-option\" data-toggle=\"tab\">";
        // line 40
        echo (isset($context["tab_option"]) ? $context["tab_option"] : null);
        echo "</a></li>
            <li><a href=\"#tab-recurring\" data-toggle=\"tab\">";
        // line 41
        echo (isset($context["tab_recurring"]) ? $context["tab_recurring"] : null);
        echo "</a></li>
            <li><a href=\"#tab-discount\" data-toggle=\"tab\">";
        // line 42
        echo (isset($context["tab_discount"]) ? $context["tab_discount"] : null);
        echo "</a></li>
            <li><a href=\"#tab-special\" data-toggle=\"tab\">";
        // line 43
        echo (isset($context["tab_special"]) ? $context["tab_special"] : null);
        echo "</a></li>
            <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 44
        echo (isset($context["tab_image"]) ? $context["tab_image"] : null);
        echo "</a></li>
            <li><a href=\"#tab-reward\" data-toggle=\"tab\">";
        // line 45
        echo (isset($context["tab_reward"]) ? $context["tab_reward"] : null);
        echo "</a></li>
            <li><a href=\"#tab-seo\" data-toggle=\"tab\">";
        // line 46
        echo (isset($context["tab_seo"]) ? $context["tab_seo"] : null);
        echo "</a></li>
            <li><a href=\"#tab-design\" data-toggle=\"tab\">";
        // line 47
        echo (isset($context["tab_design"]) ? $context["tab_design"] : null);
        echo "</a></li>

\t\t\t";
        // line 49
        if ((isset($context["module_customtabs"]) ? $context["module_customtabs"] : null)) {
            // line 50
            echo "\t\t\t\t<li><a href=\"#tab-customtabmain\" data-toggle=\"tab\">";
            echo (isset($context["text_customtab"]) ? $context["text_customtab"] : null);
            echo "</a></li>
\t\t\t";
        }
        // line 52
        echo "\t\t\t

\t\t\t";
        // line 54
        if ((isset($context["module_additionalfields"]) ? $context["module_additionalfields"] : null)) {
            // line 55
            echo "\t\t\t\t<li><a href=\"#tab-additionalfieldmain\" data-toggle=\"tab\">";
            echo (isset($context["text_additionalfield"]) ? $context["text_additionalfield"] : null);
            echo "</a></li>
\t\t\t";
        }
        // line 57
        echo "\t\t\t
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <ul class=\"nav nav-tabs\" id=\"language\">
                ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 63
            echo "                <li><a href=\"#language";
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
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "              </ul>
              <div class=\"tab-content\">";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 67
            echo "                <div class=\"tab-pane\" id=\"language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-name";
            // line 69
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"product_description[";
            // line 71
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][name]\" value=\"";
            echo (($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "name", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
            echo "\" id=\"input-name";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\" />
                      ";
            // line 72
            if ($this->getAttribute((isset($context["error_name"]) ? $context["error_name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                // line 73
                echo "                      <div class=\"text-danger\">";
                echo $this->getAttribute((isset($context["error_name"]) ? $context["error_name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                echo "</div>
                      ";
            }
            // line 74
            echo " </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-description";
            // line 77
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"product_description[";
            // line 79
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][description]\" placeholder=\"";
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "\" id=\"input-description";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo (isset($context["summernote"]) ? $context["summernote"] : null);
            echo "\" class=\"form-control\">";
            echo (($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "description", array())) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-title";
            // line 83
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"product_description[";
            // line 85
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_title]\" value=\"";
            echo (($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_title", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
            echo "\" id=\"input-meta-title";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\" />
                      ";
            // line 86
            if ($this->getAttribute((isset($context["error_meta_title"]) ? $context["error_meta_title"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                // line 87
                echo "                      <div class=\"text-danger\">";
                echo $this->getAttribute((isset($context["error_meta_title"]) ? $context["error_meta_title"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                echo "</div>
                      ";
            }
            // line 88
            echo " </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-description";
            // line 91
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"product_description[";
            // line 93
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_description]\" rows=\"5\" placeholder=\"";
            echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
            echo "\" id=\"input-meta-description";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\">";
            echo (($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_description", array())) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword";
            // line 97
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"product_description[";
            // line 99
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_keyword]\" rows=\"5\" placeholder=\"";
            echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
            echo "\" id=\"input-meta-keyword";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\">";
            echo (($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_keyword", array())) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-tag";
            // line 103
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\"><span data-toggle=\"tooltip\" title=\"";
            echo (isset($context["help_tag"]) ? $context["help_tag"] : null);
            echo "\">";
            echo (isset($context["entry_tag"]) ? $context["entry_tag"] : null);
            echo "</span></label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"product_description[";
            // line 105
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][tag]\" value=\"";
            echo (($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "tag", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_tag"]) ? $context["entry_tag"] : null);
            echo "\" id=\"input-tag";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\" />
                    </div>
                  </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "</div>
            </div>
            <div class=\"tab-pane\" id=\"tab-data\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-model\">";
        // line 113
        echo (isset($context["entry_model"]) ? $context["entry_model"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"model\" value=\"";
        // line 115
        echo (isset($context["model"]) ? $context["model"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_model"]) ? $context["entry_model"] : null);
        echo "\" id=\"input-model\" class=\"form-control\" />
                  ";
        // line 116
        if ((isset($context["error_model"]) ? $context["error_model"] : null)) {
            // line 117
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_model"]) ? $context["error_model"] : null);
            echo "</div>
                  ";
        }
        // line 118
        echo "</div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sku\"><span data-toggle=\"tooltip\" title=\"";
        // line 121
        echo (isset($context["help_sku"]) ? $context["help_sku"] : null);
        echo "\">";
        echo (isset($context["entry_sku"]) ? $context["entry_sku"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sku\" value=\"";
        // line 123
        echo (isset($context["sku"]) ? $context["sku"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sku"]) ? $context["entry_sku"] : null);
        echo "\" id=\"input-sku\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-upc\"><span data-toggle=\"tooltip\" title=\"";
        // line 127
        echo (isset($context["help_upc"]) ? $context["help_upc"] : null);
        echo "\">";
        echo (isset($context["entry_upc"]) ? $context["entry_upc"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"upc\" value=\"";
        // line 129
        echo (isset($context["upc"]) ? $context["upc"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_upc"]) ? $context["entry_upc"] : null);
        echo "\" id=\"input-upc\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-ean\"><span data-toggle=\"tooltip\" title=\"";
        // line 133
        echo (isset($context["help_ean"]) ? $context["help_ean"] : null);
        echo "\">";
        echo (isset($context["entry_ean"]) ? $context["entry_ean"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"ean\" value=\"";
        // line 135
        echo (isset($context["ean"]) ? $context["ean"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_ean"]) ? $context["entry_ean"] : null);
        echo "\" id=\"input-ean\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-jan\"><span data-toggle=\"tooltip\" title=\"";
        // line 139
        echo (isset($context["help_jan"]) ? $context["help_jan"] : null);
        echo "\">";
        echo (isset($context["entry_jan"]) ? $context["entry_jan"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"jan\" value=\"";
        // line 141
        echo (isset($context["jan"]) ? $context["jan"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_jan"]) ? $context["entry_jan"] : null);
        echo "\" id=\"input-jan\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-isbn\"><span data-toggle=\"tooltip\" title=\"";
        // line 145
        echo (isset($context["help_isbn"]) ? $context["help_isbn"] : null);
        echo "\">";
        echo (isset($context["entry_isbn"]) ? $context["entry_isbn"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"isbn\" value=\"";
        // line 147
        echo (isset($context["isbn"]) ? $context["isbn"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_isbn"]) ? $context["entry_isbn"] : null);
        echo "\" id=\"input-isbn\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-mpn\"><span data-toggle=\"tooltip\" title=\"";
        // line 151
        echo (isset($context["help_mpn"]) ? $context["help_mpn"] : null);
        echo "\">";
        echo (isset($context["entry_mpn"]) ? $context["entry_mpn"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"mpn\" value=\"";
        // line 153
        echo (isset($context["mpn"]) ? $context["mpn"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mpn"]) ? $context["entry_mpn"] : null);
        echo "\" id=\"input-mpn\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-location\">";
        // line 157
        echo (isset($context["entry_location"]) ? $context["entry_location"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"location\" value=\"";
        // line 159
        echo (isset($context["location"]) ? $context["location"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_location"]) ? $context["entry_location"] : null);
        echo "\" id=\"input-location\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-price\">";
        // line 163
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"price\" value=\"";
        // line 165
        echo (isset($context["price"]) ? $context["price"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "\" id=\"input-price\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-tax-class\">";
        // line 169
        echo (isset($context["entry_tax_class"]) ? $context["entry_tax_class"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"tax_class_id\" id=\"input-tax-class\" class=\"form-control\">
                    <option value=\"0\">";
        // line 172
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                    

                    ";
        // line 175
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tax_classes"]) ? $context["tax_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
            // line 176
            echo "                    ";
            if (($this->getAttribute($context["tax_class"], "tax_class_id", array()) == (isset($context["tax_class_id"]) ? $context["tax_class_id"] : null))) {
                // line 177
                echo "
                    
                    <option value=\"";
                // line 179
                echo $this->getAttribute($context["tax_class"], "tax_class_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["tax_class"], "title", array());
                echo "</option>
                    

                    ";
            } else {
                // line 183
                echo "
                    
                    <option value=\"";
                // line 185
                echo $this->getAttribute($context["tax_class"], "tax_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["tax_class"], "title", array());
                echo "</option>
                    

                    ";
            }
            // line 189
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "
                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-quantity\">";
        // line 196
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"quantity\" value=\"";
        // line 198
        echo (isset($context["quantity"]) ? $context["quantity"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "\" id=\"input-quantity\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-minimum\"><span data-toggle=\"tooltip\" title=\"";
        // line 202
        echo (isset($context["help_minimum"]) ? $context["help_minimum"] : null);
        echo "\">";
        echo (isset($context["entry_minimum"]) ? $context["entry_minimum"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"minimum\" value=\"";
        // line 204
        echo (isset($context["minimum"]) ? $context["minimum"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_minimum"]) ? $context["entry_minimum"] : null);
        echo "\" id=\"input-minimum\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-subtract\">";
        // line 208
        echo (isset($context["entry_subtract"]) ? $context["entry_subtract"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"subtract\" id=\"input-subtract\" class=\"form-control\">
                    

                    ";
        // line 213
        if ((isset($context["subtract"]) ? $context["subtract"] : null)) {
            // line 214
            echo "
                    
                    <option value=\"1\" selected=\"selected\">";
            // line 216
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                    <option value=\"0\">";
            // line 217
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                    

                    ";
        } else {
            // line 221
            echo "
                    
                    <option value=\"1\">";
            // line 223
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 224
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                    

                    ";
        }
        // line 228
        echo "
                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-stock-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 234
        echo (isset($context["help_stock_status"]) ? $context["help_stock_status"] : null);
        echo "\">";
        echo (isset($context["entry_stock_status"]) ? $context["entry_stock_status"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"stock_status_id\" id=\"input-stock-status\" class=\"form-control\">
                    

                    ";
        // line 239
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stock_statuses"]) ? $context["stock_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["stock_status"]) {
            // line 240
            echo "                    ";
            if (($this->getAttribute($context["stock_status"], "stock_status_id", array()) == (isset($context["stock_status_id"]) ? $context["stock_status_id"] : null))) {
                // line 241
                echo "
                    
                    <option value=\"";
                // line 243
                echo $this->getAttribute($context["stock_status"], "stock_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["stock_status"], "name", array());
                echo "</option>
                    

                    ";
            } else {
                // line 247
                echo "
                    
                    <option value=\"";
                // line 249
                echo $this->getAttribute($context["stock_status"], "stock_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["stock_status"], "name", array());
                echo "</option>
                    

                    ";
            }
            // line 253
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 254
        echo "
                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 260
        echo (isset($context["entry_shipping"]) ? $context["entry_shipping"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> ";
        // line 262
        if ((isset($context["shipping"]) ? $context["shipping"] : null)) {
            // line 263
            echo "                    <input type=\"radio\" name=\"shipping\" value=\"1\" checked=\"checked\" />
                    ";
            // line 264
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                    ";
        } else {
            // line 266
            echo "                    <input type=\"radio\" name=\"shipping\" value=\"1\" />
                    ";
            // line 267
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                    ";
        }
        // line 268
        echo " </label>
                  <label class=\"radio-inline\"> ";
        // line 269
        if ( !(isset($context["shipping"]) ? $context["shipping"] : null)) {
            // line 270
            echo "                    <input type=\"radio\" name=\"shipping\" value=\"0\" checked=\"checked\" />
                    ";
            // line 271
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                    ";
        } else {
            // line 273
            echo "                    <input type=\"radio\" name=\"shipping\" value=\"0\" />
                    ";
            // line 274
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                    ";
        }
        // line 275
        echo " </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-date-available\">";
        // line 279
        echo (isset($context["entry_date_available"]) ? $context["entry_date_available"] : null);
        echo "</label>
                <div class=\"col-sm-3\">
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"date_available\" value=\"";
        // line 282
        echo (isset($context["date_available"]) ? $context["date_available"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_date_available"]) ? $context["entry_date_available"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-available\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                    <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length\">";
        // line 289
        echo (isset($context["entry_dimension"]) ? $context["entry_dimension"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"row\">
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"length\" value=\"";
        // line 293
        echo (isset($context["length"]) ? $context["length"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_length"]) ? $context["entry_length"] : null);
        echo "\" id=\"input-length\" class=\"form-control\" />
                    </div>
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"width\" value=\"";
        // line 296
        echo (isset($context["width"]) ? $context["width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-width\" class=\"form-control\" />
                    </div>
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"height\" value=\"";
        // line 299
        echo (isset($context["height"]) ? $context["height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" id=\"input-height\" class=\"form-control\" />
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length-class\">";
        // line 305
        echo (isset($context["entry_length_class"]) ? $context["entry_length_class"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"length_class_id\" id=\"input-length-class\" class=\"form-control\">
                    

                    ";
        // line 310
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["length_classes"]) ? $context["length_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 311
            echo "                    ";
            if (($this->getAttribute($context["length_class"], "length_class_id", array()) == (isset($context["length_class_id"]) ? $context["length_class_id"] : null))) {
                // line 312
                echo "
                    
                    <option value=\"";
                // line 314
                echo $this->getAttribute($context["length_class"], "length_class_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["length_class"], "title", array());
                echo "</option>
                    

                    ";
            } else {
                // line 318
                echo "
                    
                    <option value=\"";
                // line 320
                echo $this->getAttribute($context["length_class"], "length_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["length_class"], "title", array());
                echo "</option>
                    

                    ";
            }
            // line 324
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 325
        echo "
                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight\">";
        // line 331
        echo (isset($context["entry_weight"]) ? $context["entry_weight"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"weight\" value=\"";
        // line 333
        echo (isset($context["weight"]) ? $context["weight"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_weight"]) ? $context["entry_weight"] : null);
        echo "\" id=\"input-weight\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">";
        // line 337
        echo (isset($context["entry_weight_class"]) ? $context["entry_weight_class"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"weight_class_id\" id=\"input-weight-class\" class=\"form-control\">
                    

                    ";
        // line 342
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["weight_classes"]) ? $context["weight_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 343
            echo "                    ";
            if (($this->getAttribute($context["weight_class"], "weight_class_id", array()) == (isset($context["weight_class_id"]) ? $context["weight_class_id"] : null))) {
                // line 344
                echo "
                    
                    <option value=\"";
                // line 346
                echo $this->getAttribute($context["weight_class"], "weight_class_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["weight_class"], "title", array());
                echo "</option>
                    

                    ";
            } else {
                // line 350
                echo "
                    
                    <option value=\"";
                // line 352
                echo $this->getAttribute($context["weight_class"], "weight_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["weight_class"], "title", array());
                echo "</option>
                    

                    ";
            }
            // line 356
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 357
        echo "
                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 363
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"status\" id=\"input-status\" class=\"form-control\">
                    

                    ";
        // line 368
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 369
            echo "
                    
                    <option value=\"1\" selected=\"selected\">";
            // line 371
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    <option value=\"0\">";
            // line 372
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                    

                    ";
        } else {
            // line 376
            echo "
                    
                    <option value=\"1\">";
            // line 378
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 379
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                    

                    ";
        }
        // line 383
        echo "
                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 389
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sort_order\" value=\"";
        // line 391
        echo (isset($context["sort_order"]) ? $context["sort_order"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-links\">

\t\t\t";
        // line 397
        if ((isset($context["module_sizechart"]) ? $context["module_sizechart"] : null)) {
            // line 398
            echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-sizechart\">";
            // line 399
            echo (isset($context["text_sizechart"]) ? $context["text_sizechart"] : null);
            echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t";
            // line 401
            if ((isset($context["product_sizechart"]) ? $context["product_sizechart"] : null)) {
                // line 402
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["product_sizechart"]) ? $context["product_sizechart"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["sizechart"]) {
                    // line 403
                    echo "\t\t\t\t\t\t<input type=\"text\" name=\"sizechart\" value=\"";
                    echo $this->getAttribute($context["sizechart"], "name", array());
                    echo "\" placeholder=\"";
                    echo (isset($context["text_sizechart"]) ? $context["text_sizechart"] : null);
                    echo "\" id=\"input-sizechart\" class=\"form-control\" />
\t\t\t\t\t\t<input type=\"hidden\" name=\"sizechart_id\" value=\"";
                    // line 404
                    echo $this->getAttribute($context["sizechart"], "sizechart_id", array());
                    echo "\" />
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sizechart'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 406
                echo "\t\t\t\t\t\t";
            } else {
                // line 407
                echo "\t\t\t\t\t\t<input type=\"text\" name=\"sizechart\" value=\"\" placeholder=\"";
                echo (isset($context["text_sizechart"]) ? $context["text_sizechart"] : null);
                echo "\" id=\"input-sizechart\" class=\"form-control\" />
\t\t\t\t\t\t<input type=\"hidden\" name=\"sizechart_id\" value=\"\" />
\t\t\t\t\t\t";
            }
            // line 410
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 413
        echo "\t\t\t

\t\t\t";
        // line 415
        if ((isset($context["module_label"]) ? $context["module_label"] : null)) {
            // line 416
            echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
            // line 417
            echo (isset($context["text_labels"]) ? $context["text_labels"] : null);
            echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t";
            // line 420
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["labels"]) ? $context["labels"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
                // line 421
                echo "\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t";
                // line 423
                if (twig_in_filter($this->getAttribute($context["label"], "label_id", array()), (isset($context["product_label"]) ? $context["product_label"] : null))) {
                    // line 424
                    echo "\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"product_label[]\" value=\"";
                    echo $this->getAttribute($context["label"], "label_id", array());
                    echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t";
                    // line 425
                    echo $this->getAttribute($context["label"], "name", array());
                    echo "
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 427
                    echo "\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"product_label[]\" value=\"";
                    echo $this->getAttribute($context["label"], "label_id", array());
                    echo "\" />
\t\t\t\t\t\t\t\t\t";
                    // line 428
                    echo $this->getAttribute($context["label"], "name", array());
                    echo "
\t\t\t\t\t\t\t\t\t";
                }
                // line 430
                echo "\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 433
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 437
        echo "\t\t\t
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-manufacturer\"><span data-toggle=\"tooltip\" title=\"";
        // line 439
        echo (isset($context["help_manufacturer"]) ? $context["help_manufacturer"] : null);
        echo "\">";
        echo (isset($context["entry_manufacturer"]) ? $context["entry_manufacturer"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"manufacturer\" value=\"";
        // line 441
        echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_manufacturer"]) ? $context["entry_manufacturer"] : null);
        echo "\" id=\"input-manufacturer\" class=\"form-control\" />
                  <input type=\"hidden\" name=\"manufacturer_id\" value=\"";
        // line 442
        echo (isset($context["manufacturer_id"]) ? $context["manufacturer_id"] : null);
        echo "\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-category\"><span data-toggle=\"tooltip\" title=\"";
        // line 446
        echo (isset($context["help_category"]) ? $context["help_category"] : null);
        echo "\">";
        echo (isset($context["entry_category"]) ? $context["entry_category"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 448
        echo (isset($context["entry_category"]) ? $context["entry_category"] : null);
        echo "\" id=\"input-category\" class=\"form-control\" />
                  <div id=\"product-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 449
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_categories"]) ? $context["product_categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_category"]) {
            // line 450
            echo "                    <div id=\"product-category";
            echo $this->getAttribute($context["product_category"], "category_id", array());
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo $this->getAttribute($context["product_category"], "name", array());
            echo "
                      <input type=\"hidden\" name=\"product_category[]\" value=\"";
            // line 451
            echo $this->getAttribute($context["product_category"], "category_id", array());
            echo "\" />
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 453
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-filter\"><span data-toggle=\"tooltip\" title=\"";
        // line 457
        echo (isset($context["help_filter"]) ? $context["help_filter"] : null);
        echo "\">";
        echo (isset($context["entry_filter"]) ? $context["entry_filter"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
        // line 459
        echo (isset($context["entry_filter"]) ? $context["entry_filter"] : null);
        echo "\" id=\"input-filter\" class=\"form-control\" />
                  <div id=\"product-filter\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 460
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_filters"]) ? $context["product_filters"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_filter"]) {
            // line 461
            echo "                    <div id=\"product-filter";
            echo $this->getAttribute($context["product_filter"], "filter_id", array());
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo $this->getAttribute($context["product_filter"], "name", array());
            echo "
                      <input type=\"hidden\" name=\"product_filter[]\" value=\"";
            // line 462
            echo $this->getAttribute($context["product_filter"], "filter_id", array());
            echo "\" />
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 464
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 468
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 470
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 471
            echo "                    <div class=\"checkbox\">
                      <label> ";
            // line 472
            if (twig_in_filter($this->getAttribute($context["store"], "store_id", array()), (isset($context["product_store"]) ? $context["product_store"] : null))) {
                // line 473
                echo "                        <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\" checked=\"checked\" />
                        ";
                // line 474
                echo $this->getAttribute($context["store"], "name", array());
                echo "
                        ";
            } else {
                // line 476
                echo "                        <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\" />
                        ";
                // line 477
                echo $this->getAttribute($context["store"], "name", array());
                echo "
                        ";
            }
            // line 478
            echo " </label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 480
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-download\"><span data-toggle=\"tooltip\" title=\"";
        // line 484
        echo (isset($context["help_download"]) ? $context["help_download"] : null);
        echo "\">";
        echo (isset($context["entry_download"]) ? $context["entry_download"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"download\" value=\"\" placeholder=\"";
        // line 486
        echo (isset($context["entry_download"]) ? $context["entry_download"] : null);
        echo "\" id=\"input-download\" class=\"form-control\" />
                  <div id=\"product-download\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 487
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_downloads"]) ? $context["product_downloads"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_download"]) {
            // line 488
            echo "                    <div id=\"product-download";
            echo $this->getAttribute($context["product_download"], "download_id", array());
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo $this->getAttribute($context["product_download"], "name", array());
            echo "
                      <input type=\"hidden\" name=\"product_download[]\" value=\"";
            // line 489
            echo $this->getAttribute($context["product_download"], "download_id", array());
            echo "\" />
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_download'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 491
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-related\"><span data-toggle=\"tooltip\" title=\"";
        // line 495
        echo (isset($context["help_related"]) ? $context["help_related"] : null);
        echo "\">";
        echo (isset($context["entry_related"]) ? $context["entry_related"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"related\" value=\"\" placeholder=\"";
        // line 497
        echo (isset($context["entry_related"]) ? $context["entry_related"] : null);
        echo "\" id=\"input-related\" class=\"form-control\" />
                  <div id=\"product-related\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 498
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_relateds"]) ? $context["product_relateds"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
            // line 499
            echo "                    <div id=\"product-related";
            echo $this->getAttribute($context["product_related"], "product_id", array());
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo $this->getAttribute($context["product_related"], "name", array());
            echo "
                      <input type=\"hidden\" name=\"product_related[]\" value=\"";
            // line 500
            echo $this->getAttribute($context["product_related"], "product_id", array());
            echo "\" />
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 502
        echo "</div>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-attribute\">
              <div class=\"table-responsive\">
                <table id=\"attribute\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 511
        echo (isset($context["entry_attribute"]) ? $context["entry_attribute"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 512
        echo (isset($context["entry_text"]) ? $context["entry_text"] : null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ";
        // line 518
        $context["attribute_row"] = 0;
        // line 519
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_attributes"]) ? $context["product_attributes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_attribute"]) {
            // line 520
            echo "                  <tr id=\"attribute-row";
            echo (isset($context["attribute_row"]) ? $context["attribute_row"] : null);
            echo "\">
                    <td class=\"text-left\" style=\"width: 40%;\"><input type=\"text\" name=\"product_attribute[";
            // line 521
            echo (isset($context["attribute_row"]) ? $context["attribute_row"] : null);
            echo "][name]\" value=\"";
            echo $this->getAttribute($context["product_attribute"], "name", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_attribute"]) ? $context["entry_attribute"] : null);
            echo "\" class=\"form-control\" />
                      <input type=\"hidden\" name=\"product_attribute[";
            // line 522
            echo (isset($context["attribute_row"]) ? $context["attribute_row"] : null);
            echo "][attribute_id]\" value=\"";
            echo $this->getAttribute($context["product_attribute"], "attribute_id", array());
            echo "\" /></td>
                    <td class=\"text-left\">";
            // line 523
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 524
                echo "                      <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\" /></span>
                        <textarea name=\"product_attribute[";
                // line 525
                echo (isset($context["attribute_row"]) ? $context["attribute_row"] : null);
                echo "][product_attribute_description][";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "][text]\" rows=\"5\" placeholder=\"";
                echo (isset($context["entry_text"]) ? $context["entry_text"] : null);
                echo "\" class=\"form-control\">";
                echo (($this->getAttribute($this->getAttribute($context["product_attribute"], "product_attribute_description", array()), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["product_attribute"], "product_attribute_description", array()), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "text", array())) : (""));
                echo "</textarea>
                      </div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 527
            echo "</td>
                    <td class=\"text-right\"><button type=\"button\" onclick=\"\$('#attribute-row";
            // line 528
            echo (isset($context["attribute_row"]) ? $context["attribute_row"] : null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                  </tr>
                  ";
            // line 530
            $context["attribute_row"] = ((isset($context["attribute_row"]) ? $context["attribute_row"] : null) + 1);
            // line 531
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 532
        echo "                    </tbody>
                  
                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-right\"><button type=\"button\" onclick=\"addAttribute();\" data-toggle=\"tooltip\" title=\"";
        // line 537
        echo (isset($context["button_attribute_add"]) ? $context["button_attribute_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-option\">
              <div class=\"row\">
                <div class=\"col-sm-2\">
                  <ul class=\"nav nav-pills nav-stacked\" id=\"option\">
                    ";
        // line 547
        $context["option_row"] = 0;
        // line 548
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_options"]) ? $context["product_options"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 549
            echo "                    <li><a href=\"#tab-option";
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('a[href=\\'#tab-option";
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "\\']').parent().remove(); \$('#tab-option";
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "').remove(); \$('#option a:first').tab('show');\"></i> ";
            echo $this->getAttribute($context["product_option"], "name", array());
            echo "</a></li>
                    ";
            // line 550
            $context["option_row"] = ((isset($context["option_row"]) ? $context["option_row"] : null) + 1);
            // line 551
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 552
        echo "                    <li>
                      <input type=\"text\" name=\"option\" value=\"\" placeholder=\"";
        // line 553
        echo (isset($context["entry_option"]) ? $context["entry_option"] : null);
        echo "\" id=\"input-option\" class=\"form-control\" />
                    </li>
                  </ul>
                </div>
                <div class=\"col-sm-10\">
                  <div class=\"tab-content\"> ";
        // line 558
        $context["option_row"] = 0;
        // line 559
        echo "                    ";
        $context["option_value_row"] = 0;
        // line 560
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_options"]) ? $context["product_options"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 561
            echo "                    <div class=\"tab-pane\" id=\"tab-option";
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "\">
                      <input type=\"hidden\" name=\"product_option[";
            // line 562
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "][product_option_id]\" value=\"";
            echo $this->getAttribute($context["product_option"], "product_option_id", array());
            echo "\" />
                      <input type=\"hidden\" name=\"product_option[";
            // line 563
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "][name]\" value=\"";
            echo $this->getAttribute($context["product_option"], "name", array());
            echo "\" />
                      <input type=\"hidden\" name=\"product_option[";
            // line 564
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "][option_id]\" value=\"";
            echo $this->getAttribute($context["product_option"], "option_id", array());
            echo "\" />
                      <input type=\"hidden\" name=\"product_option[";
            // line 565
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "][type]\" value=\"";
            echo $this->getAttribute($context["product_option"], "type", array());
            echo "\" />
                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-required";
            // line 567
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "\">";
            echo (isset($context["entry_required"]) ? $context["entry_required"] : null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"product_option[";
            // line 569
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "][required]\" id=\"input-required";
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "\" class=\"form-control\">
                            

                            ";
            // line 572
            if ($this->getAttribute($context["product_option"], "required", array())) {
                // line 573
                echo "
                            
                            <option value=\"1\" selected=\"selected\">";
                // line 575
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "</option>
                            <option value=\"0\">";
                // line 576
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "</option>
                            

                            ";
            } else {
                // line 580
                echo "
                            
                            <option value=\"1\">";
                // line 582
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "</option>
                            <option value=\"0\" selected=\"selected\">";
                // line 583
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "</option>
                            

                            ";
            }
            // line 587
            echo "
                          
                          </select>
                        </div>
                      </div>
                      ";
            // line 592
            if (($this->getAttribute($context["product_option"], "type", array()) == "text")) {
                // line 593
                echo "                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 594
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\">";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"product_option[";
                // line 596
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "][value]\" value=\"";
                echo $this->getAttribute($context["product_option"], "value", array());
                echo "\" placeholder=\"";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "\" id=\"input-value";
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" class=\"form-control\" />
                        </div>
                      </div>
                      ";
            }
            // line 600
            echo "                      ";
            if (($this->getAttribute($context["product_option"], "type", array()) == "textarea")) {
                // line 601
                echo "                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 602
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\">";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</label>
                        <div class=\"col-sm-10\">
                          <textarea name=\"product_option[";
                // line 604
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "][value]\" rows=\"5\" placeholder=\"";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "\" id=\"input-value";
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" class=\"form-control\">";
                echo $this->getAttribute($context["product_option"], "value", array());
                echo "</textarea>
                        </div>
                      </div>
                      ";
            }
            // line 608
            echo "                      ";
            if (($this->getAttribute($context["product_option"], "type", array()) == "file")) {
                // line 609
                echo "                      <div class=\"form-group\" style=\"display: none;\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 610
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\">";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"product_option[";
                // line 612
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "][value]\" value=\"";
                echo $this->getAttribute($context["product_option"], "value", array());
                echo "\" placeholder=\"";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "\" id=\"input-value";
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" class=\"form-control\" />
                        </div>
                      </div>
                      ";
            }
            // line 616
            echo "                      ";
            if (($this->getAttribute($context["product_option"], "type", array()) == "date")) {
                // line 617
                echo "                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 618
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\">";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</label>
                        <div class=\"col-sm-3\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_option[";
                // line 621
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "][value]\" value=\"";
                echo $this->getAttribute($context["product_option"], "value", array());
                echo "\" placeholder=\"";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value";
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" class=\"form-control\" />
                            <span class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                        </div>
                      </div>
                      ";
            }
            // line 628
            echo "                      ";
            if (($this->getAttribute($context["product_option"], "type", array()) == "time")) {
                // line 629
                echo "                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 630
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\">";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group time\">
                            <input type=\"text\" name=\"product_option[";
                // line 633
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "][value]\" value=\"";
                echo $this->getAttribute($context["product_option"], "value", array());
                echo "\" placeholder=\"";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "\" data-date-format=\"HH:mm\" id=\"input-value";
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" class=\"form-control\" />
                            <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                        </div>
                      </div>
                      ";
            }
            // line 640
            echo "                      ";
            if (($this->getAttribute($context["product_option"], "type", array()) == "datetime")) {
                // line 641
                echo "                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 642
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\">";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group datetime\">
                            <input type=\"text\" name=\"product_option[";
                // line 645
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "][value]\" value=\"";
                echo $this->getAttribute($context["product_option"], "value", array());
                echo "\" placeholder=\"";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value";
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" class=\"form-control\" />
                            <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                        </div>
                      </div>
                      ";
            }
            // line 652
            echo "                      ";
            if ((((($this->getAttribute($context["product_option"], "type", array()) == "select") || ($this->getAttribute($context["product_option"], "type", array()) == "radio")) || ($this->getAttribute($context["product_option"], "type", array()) == "checkbox")) || ($this->getAttribute($context["product_option"], "type", array()) == "image"))) {
                // line 653
                echo "                      <div class=\"table-responsive\">
                        <table id=\"option-value";
                // line 654
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" class=\"table table-striped table-bordered table-hover\">
                          <thead>
                            <tr>
                              <td class=\"text-left\">";
                // line 657
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</td>
                              <td class=\"text-right\">";
                // line 658
                echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
                echo "</td>
                              <td class=\"text-left\">";
                // line 659
                echo (isset($context["entry_subtract"]) ? $context["entry_subtract"] : null);
                echo "</td>
                              <td class=\"text-right\">";
                // line 660
                echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
                echo "</td>
                              <td class=\"text-right\">";
                // line 661
                echo (isset($context["entry_option_points"]) ? $context["entry_option_points"] : null);
                echo "</td>
                              <td class=\"text-right\">";
                // line 662
                echo (isset($context["entry_weight"]) ? $context["entry_weight"] : null);
                echo "</td>
                              <td></td>
                            </tr>
                          </thead>
                          <tbody>
                          
                          ";
                // line 668
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product_option"], "product_option_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["product_option_value"]) {
                    // line 669
                    echo "                          <tr id=\"option-value-row";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "\">
                            <td class=\"text-left\"><select name=\"product_option[";
                    // line 670
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][option_value_id]\" class=\"form-control\">
                                

                                  ";
                    // line 673
                    if ($this->getAttribute((isset($context["option_values"]) ? $context["option_values"] : null), $this->getAttribute($context["product_option"], "option_id", array()), array(), "array")) {
                        // line 674
                        echo "
                                  ";
                        // line 675
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["option_values"]) ? $context["option_values"] : null), $this->getAttribute($context["product_option"], "option_id", array()), array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 676
                            echo "
                                  ";
                            // line 677
                            if (($this->getAttribute($context["option_value"], "option_value_id", array()) == $this->getAttribute($context["product_option_value"], "option_value_id", array()))) {
                                // line 678
                                echo "
                                
                                <option value=\"";
                                // line 680
                                echo $this->getAttribute($context["option_value"], "option_value_id", array());
                                echo "\" selected=\"selected\">";
                                echo $this->getAttribute($context["option_value"], "name", array());
                                echo "</option>
                                

                                  ";
                            } else {
                                // line 684
                                echo "
                                
                                <option value=\"";
                                // line 686
                                echo $this->getAttribute($context["option_value"], "option_value_id", array());
                                echo "\">";
                                echo $this->getAttribute($context["option_value"], "name", array());
                                echo "</option>
                                

                                  ";
                            }
                            // line 690
                            echo "                                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 691
                        echo "                                  ";
                    }
                    // line 692
                    echo "
                              
                              </select>
                              <input type=\"hidden\" name=\"product_option[";
                    // line 695
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][product_option_value_id]\" value=\"";
                    echo $this->getAttribute($context["product_option_value"], "product_option_value_id", array());
                    echo "\" /></td>
                            <td class=\"text-right\"><input type=\"text\" name=\"product_option[";
                    // line 696
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][quantity]\" value=\"";
                    echo $this->getAttribute($context["product_option_value"], "quantity", array());
                    echo "\" placeholder=\"";
                    echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
                    echo "\" class=\"form-control\" /></td>
                            <td class=\"text-left\"><select name=\"product_option[";
                    // line 697
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][subtract]\" class=\"form-control\">
                                

                                  ";
                    // line 700
                    if ($this->getAttribute($context["product_option_value"], "subtract", array())) {
                        // line 701
                        echo "
                                
                                <option value=\"1\" selected=\"selected\">";
                        // line 703
                        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                        echo "</option>
                                <option value=\"0\">";
                        // line 704
                        echo (isset($context["text_no"]) ? $context["text_no"] : null);
                        echo "</option>
                                

                                  ";
                    } else {
                        // line 708
                        echo "
                                
                                <option value=\"1\">";
                        // line 710
                        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                        echo "</option>
                                <option value=\"0\" selected=\"selected\">";
                        // line 711
                        echo (isset($context["text_no"]) ? $context["text_no"] : null);
                        echo "</option>
                                

                                  ";
                    }
                    // line 715
                    echo "
                              
                              </select></td>
                            <td class=\"text-right\"><select name=\"product_option[";
                    // line 718
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][price_prefix]\" class=\"form-control\">
                                

                                  ";
                    // line 721
                    if (($this->getAttribute($context["product_option_value"], "price_prefix", array()) == "+")) {
                        // line 722
                        echo "
                                
                                <option value=\"+\" selected=\"selected\">+</option>
                                

                                  ";
                    } else {
                        // line 728
                        echo "
                                
                                <option value=\"+\">+</option>
                                

                                  ";
                    }
                    // line 734
                    echo "                                  ";
                    if (($this->getAttribute($context["product_option_value"], "price_prefix", array()) == "-")) {
                        // line 735
                        echo "
                                
                                <option value=\"-\" selected=\"selected\">-</option>
                                

                                  ";
                    } else {
                        // line 741
                        echo "
                                
                                <option value=\"-\">-</option>
                                

                                  ";
                    }
                    // line 747
                    echo "
                              
                              </select>
                              <input type=\"text\" name=\"product_option[";
                    // line 750
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][price]\" value=\"";
                    echo $this->getAttribute($context["product_option_value"], "price", array());
                    echo "\" placeholder=\"";
                    echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
                    echo "\" class=\"form-control\" /></td>
                            <td class=\"text-right\"><select name=\"product_option[";
                    // line 751
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][points_prefix]\" class=\"form-control\">
                                

                                  ";
                    // line 754
                    if (($this->getAttribute($context["product_option_value"], "points_prefix", array()) == "+")) {
                        // line 755
                        echo "
                                
                                <option value=\"+\" selected=\"selected\">+</option>
                                

                                  ";
                    } else {
                        // line 761
                        echo "
                                
                                <option value=\"+\">+</option>
                                

                                  ";
                    }
                    // line 767
                    echo "                                  ";
                    if (($this->getAttribute($context["product_option_value"], "points_prefix", array()) == "-")) {
                        // line 768
                        echo "
                                
                                <option value=\"-\" selected=\"selected\">-</option>
                                

                                  ";
                    } else {
                        // line 774
                        echo "
                                
                                <option value=\"-\">-</option>
                                

                                  ";
                    }
                    // line 780
                    echo "
                              
                              </select>
                              <input type=\"text\" name=\"product_option[";
                    // line 783
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][points]\" value=\"";
                    echo $this->getAttribute($context["product_option_value"], "points", array());
                    echo "\" placeholder=\"";
                    echo (isset($context["entry_points"]) ? $context["entry_points"] : null);
                    echo "\" class=\"form-control\" /></td>
                            <td class=\"text-right\"><select name=\"product_option[";
                    // line 784
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][weight_prefix]\" class=\"form-control\">
                                

                                  ";
                    // line 787
                    if (($this->getAttribute($context["product_option_value"], "weight_prefix", array()) == "+")) {
                        // line 788
                        echo "
                                
                                <option value=\"+\" selected=\"selected\">+</option>
                                

                                  ";
                    } else {
                        // line 794
                        echo "
                                
                                <option value=\"+\">+</option>
                                

                                  ";
                    }
                    // line 800
                    echo "                                  ";
                    if (($this->getAttribute($context["product_option_value"], "weight_prefix", array()) == "-")) {
                        // line 801
                        echo "
                                
                                <option value=\"-\" selected=\"selected\">-</option>
                                

                                  ";
                    } else {
                        // line 807
                        echo "
                                
                                <option value=\"-\">-</option>
                                

                                  ";
                    }
                    // line 813
                    echo "
                              
                              </select>
                              <input type=\"text\" name=\"product_option[";
                    // line 816
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][weight]\" value=\"";
                    echo $this->getAttribute($context["product_option_value"], "weight", array());
                    echo "\" placeholder=\"";
                    echo (isset($context["entry_weight"]) ? $context["entry_weight"] : null);
                    echo "\" class=\"form-control\" /></td>
                            <td class=\"text-right\"><button type=\"button\" onclick=\"\$(this).tooltip('destroy');\$('#option-value-row";
                    // line 817
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                          </tr>
                          ";
                    // line 819
                    $context["option_value_row"] = ((isset($context["option_value_row"]) ? $context["option_value_row"] : null) + 1);
                    // line 820
                    echo "                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 821
                echo "                            </tbody>
                          
                          <tfoot>
                            <tr>
                              <td colspan=\"6\"></td>
                              <td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue('";
                // line 826
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "');\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_option_value_add"]) ? $context["button_option_value_add"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                            </tr>
                          </tfoot>
                        </table>
                      </div>
                      <select id=\"option-values";
                // line 831
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" style=\"display: none;\">
                        

                        ";
                // line 834
                if ($this->getAttribute((isset($context["option_values"]) ? $context["option_values"] : null), $this->getAttribute($context["product_option"], "option_id", array()), array(), "array")) {
                    // line 835
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["option_values"]) ? $context["option_values"] : null), $this->getAttribute($context["product_option"], "option_id", array()), array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 836
                        echo "
                        
                        <option value=\"";
                        // line 838
                        echo $this->getAttribute($context["option_value"], "option_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "</option>
                        

                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 842
                    echo "                        ";
                }
                // line 843
                echo "
                      
                      </select>
                      ";
            }
            // line 846
            echo " </div>
                    ";
            // line 847
            $context["option_row"] = ((isset($context["option_row"]) ? $context["option_row"] : null) + 1);
            // line 848
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " </div>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-recurring\">
              <div class=\"table-responsive\">
                <table class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 857
        echo (isset($context["entry_recurring"]) ? $context["entry_recurring"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 858
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</td>
                      <td class=\"text-left\"></td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ";
        // line 864
        $context["recurring_row"] = 0;
        // line 865
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_recurrings"]) ? $context["product_recurrings"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_recurring"]) {
            // line 866
            echo "                  <tr id=\"recurring-row";
            echo (isset($context["recurring_row"]) ? $context["recurring_row"] : null);
            echo "\">
                    <td class=\"text-left\"><select name=\"product_recurring[";
            // line 867
            echo (isset($context["recurring_row"]) ? $context["recurring_row"] : null);
            echo "][recurring_id]\" class=\"form-control\">
                        

                          ";
            // line 870
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 871
                echo "                          ";
                if (($this->getAttribute($context["recurring"], "recurring_id", array()) == $this->getAttribute($context["product_recurring"], "recurring_id", array()))) {
                    // line 872
                    echo "
                        
                        <option value=\"";
                    // line 874
                    echo $this->getAttribute($context["recurring"], "recurring_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["recurring"], "name", array());
                    echo "</option>
                        

                          ";
                } else {
                    // line 878
                    echo "
                        
                        <option value=\"";
                    // line 880
                    echo $this->getAttribute($context["recurring"], "recurring_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["recurring"], "name", array());
                    echo "</option>
                        

                          ";
                }
                // line 884
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 885
            echo "
                      
                      </select></td>
                    <td class=\"text-left\"><select name=\"product_recurring[";
            // line 888
            echo (isset($context["recurring_row"]) ? $context["recurring_row"] : null);
            echo "][customer_group_id]\" class=\"form-control\">
                        

                          ";
            // line 891
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 892
                echo "                          ";
                if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == $this->getAttribute($context["product_recurring"], "customer_group_id", array()))) {
                    // line 893
                    echo "
                        
                        <option value=\"";
                    // line 895
                    echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["customer_group"], "name", array());
                    echo "</option>
                        

                          ";
                } else {
                    // line 899
                    echo "
                        
                        <option value=\"";
                    // line 901
                    echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["customer_group"], "name", array());
                    echo "</option>
                        

                          ";
                }
                // line 905
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 906
            echo "
                      
                      </select></td>
                    <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#recurring-row";
            // line 909
            echo (isset($context["recurring_row"]) ? $context["recurring_row"] : null);
            echo "').remove()\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                  </tr>
                  ";
            // line 911
            $context["recurring_row"] = ((isset($context["recurring_row"]) ? $context["recurring_row"] : null) + 1);
            // line 912
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 913
        echo "                    </tbody>
                  
                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addRecurring()\" data-toggle=\"tooltip\" title=\"";
        // line 918
        echo (isset($context["button_recurring_add"]) ? $context["button_recurring_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-discount\">
              <div class=\"table-responsive\">
                <table id=\"discount\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 929
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 930
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 931
        echo (isset($context["entry_priority"]) ? $context["entry_priority"] : null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 932
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 933
        echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 934
        echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ";
        // line 940
        $context["discount_row"] = 0;
        // line 941
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_discounts"]) ? $context["product_discounts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_discount"]) {
            // line 942
            echo "                  <tr id=\"discount-row";
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "\">
                    <td class=\"text-left\"><select name=\"product_discount[";
            // line 943
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "][customer_group_id]\" class=\"form-control\">
                        ";
            // line 944
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 945
                echo "                        ";
                if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == $this->getAttribute($context["product_discount"], "customer_group_id", array()))) {
                    // line 946
                    echo "                        <option value=\"";
                    echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["customer_group"], "name", array());
                    echo "</option>
                        ";
                } else {
                    // line 948
                    echo "                        <option value=\"";
                    echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["customer_group"], "name", array());
                    echo "</option>
                        ";
                }
                // line 950
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 951
            echo "                      </select></td>
                    <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 952
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "][quantity]\" value=\"";
            echo $this->getAttribute($context["product_discount"], "quantity", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
            echo "\" class=\"form-control\" /></td>
                    <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 953
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "][priority]\" value=\"";
            echo $this->getAttribute($context["product_discount"], "priority", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_priority"]) ? $context["entry_priority"] : null);
            echo "\" class=\"form-control\" /></td>
                    <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 954
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "][price]\" value=\"";
            echo $this->getAttribute($context["product_discount"], "price", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
            echo "\" class=\"form-control\" /></td>
                    <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\">
                        <input type=\"text\" name=\"product_discount[";
            // line 956
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "][date_start]\" value=\"";
            echo $this->getAttribute($context["product_discount"], "date_start", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" />
                        <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div></td>
                    <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\">
                        <input type=\"text\" name=\"product_discount[";
            // line 961
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "][date_end]\" value=\"";
            echo $this->getAttribute($context["product_discount"], "date_end", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" />
                        <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div></td>
                    <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#discount-row";
            // line 965
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                  </tr>
                  ";
            // line 967
            $context["discount_row"] = ((isset($context["discount_row"]) ? $context["discount_row"] : null) + 1);
            // line 968
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 969
        echo "                    </tbody>
                  
                  <tfoot>
                    <tr>
                      <td colspan=\"6\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addDiscount();\" data-toggle=\"tooltip\" title=\"";
        // line 974
        echo (isset($context["button_discount_add"]) ? $context["button_discount_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-special\">
              <div class=\"table-responsive\">
                <table id=\"special\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 985
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 986
        echo (isset($context["entry_priority"]) ? $context["entry_priority"] : null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 987
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 988
        echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 989
        echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ";
        // line 995
        $context["special_row"] = 0;
        // line 996
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_specials"]) ? $context["product_specials"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_special"]) {
            // line 997
            echo "                  <tr id=\"special-row";
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "\">
                    <td class=\"text-left\"><select name=\"product_special[";
            // line 998
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "][customer_group_id]\" class=\"form-control\">
                        

                          ";
            // line 1001
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1002
                echo "                          ";
                if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == $this->getAttribute($context["product_special"], "customer_group_id", array()))) {
                    // line 1003
                    echo "
                        
                        <option value=\"";
                    // line 1005
                    echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["customer_group"], "name", array());
                    echo "</option>
                        

                          ";
                } else {
                    // line 1009
                    echo "
                        
                        <option value=\"";
                    // line 1011
                    echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["customer_group"], "name", array());
                    echo "</option>
                        

                          ";
                }
                // line 1015
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1016
            echo "
                      
                      </select></td>
                    <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
            // line 1019
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "][priority]\" value=\"";
            echo $this->getAttribute($context["product_special"], "priority", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_priority"]) ? $context["entry_priority"] : null);
            echo "\" class=\"form-control\" /></td>
                    <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
            // line 1020
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "][price]\" value=\"";
            echo $this->getAttribute($context["product_special"], "price", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
            echo "\" class=\"form-control\" /></td>
                    <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\">
                        <input type=\"text\" name=\"product_special[";
            // line 1022
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "][date_start]\" value=\"";
            echo $this->getAttribute($context["product_special"], "date_start", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" />
                        <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div></td>
                    <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\">
                        <input type=\"text\" name=\"product_special[";
            // line 1027
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "][date_end]\" value=\"";
            echo $this->getAttribute($context["product_special"], "date_end", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" />
                        <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div></td>
                    <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#special-row";
            // line 1031
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                  </tr>
                  ";
            // line 1033
            $context["special_row"] = ((isset($context["special_row"]) ? $context["special_row"] : null) + 1);
            // line 1034
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_special'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1035
        echo "                    </tbody>
                  
                  <tfoot>
                    <tr>
                      <td colspan=\"5\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addSpecial();\" data-toggle=\"tooltip\" title=\"";
        // line 1040
        echo (isset($context["button_special_add"]) ? $context["button_special_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"table-responsive\">
                <table class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1051
        echo (isset($context["entry_image"]) ? $context["entry_image"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class=\"text-left\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1056
        echo (isset($context["thumb"]) ? $context["thumb"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a>
                        <input type=\"hidden\" name=\"image\" value=\"";
        // line 1057
        echo (isset($context["image"]) ? $context["image"] : null);
        echo "\" id=\"input-image\" /></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class=\"table-responsive\">
                <table id=\"images\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1066
        echo (isset($context["entry_additional_image"]) ? $context["entry_additional_image"] : null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1067
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ";
        // line 1073
        $context["image_row"] = 0;
        // line 1074
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_images"]) ? $context["product_images"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_image"]) {
            // line 1075
            echo "                  <tr id=\"image-row";
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "\">
                    <td class=\"text-left\"><a href=\"\" id=\"thumb-image";
            // line 1076
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            echo $this->getAttribute($context["product_image"], "thumb", array());
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
            echo "\" /></a>
                      <input type=\"hidden\" name=\"product_image[";
            // line 1077
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "][image]\" value=\"";
            echo $this->getAttribute($context["product_image"], "image", array());
            echo "\" id=\"input-image";
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "\" /></td>
                    <td class=\"text-right\"><input type=\"text\" name=\"product_image[";
            // line 1078
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "][sort_order]\" value=\"";
            echo $this->getAttribute($context["product_image"], "sort_order", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
            echo "\" class=\"form-control\" /></td>
                    <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#image-row";
            // line 1079
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                  </tr>
                  ";
            // line 1081
            $context["image_row"] = ((isset($context["image_row"]) ? $context["image_row"] : null) + 1);
            // line 1082
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1083
        echo "                    </tbody>
                  
                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addImage();\" data-toggle=\"tooltip\" title=\"";
        // line 1088
        echo (isset($context["button_image_add"]) ? $context["button_image_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-reward\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-points\"><span data-toggle=\"tooltip\" title=\"";
        // line 1096
        echo (isset($context["help_points"]) ? $context["help_points"] : null);
        echo "\">";
        echo (isset($context["entry_points"]) ? $context["entry_points"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"points\" value=\"";
        // line 1098
        echo (isset($context["points"]) ? $context["points"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_points"]) ? $context["entry_points"] : null);
        echo "\" id=\"input-points\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1105
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1106
        echo (isset($context["entry_reward"]) ? $context["entry_reward"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ";
        // line 1111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1112
            echo "                  <tr>
                    <td class=\"text-left\">";
            // line 1113
            echo $this->getAttribute($context["customer_group"], "name", array());
            echo "</td>
                    <td class=\"text-right\"><input type=\"text\" name=\"product_reward[";
            // line 1114
            echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
            echo "][points]\" value=\"";
            echo (($this->getAttribute((isset($context["product_reward"]) ? $context["product_reward"] : null), $this->getAttribute($context["customer_group"], "customer_group_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_reward"]) ? $context["product_reward"] : null), $this->getAttribute($context["customer_group"], "customer_group_id", array()), array(), "array"), "points", array())) : (""));
            echo "\" class=\"form-control\" /></td>
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1117
        echo "                    </tbody>
                  
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-seo\">
              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 1123
        echo (isset($context["text_keyword"]) ? $context["text_keyword"] : null);
        echo "</div>            
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1128
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</td>
\t\t      <td class=\"text-left\">";
        // line 1129
        echo (isset($context["entry_keyword"]) ? $context["entry_keyword"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                  ";
        // line 1133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1134
            echo "                  <tr>
                    <td class=\"text-left\">";
            // line 1135
            echo $this->getAttribute($context["store"], "name", array());
            echo "</td>
                    <td class=\"text-left\">";
            // line 1136
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1137
                echo "                      <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\" /></span>
                        <input type=\"text\" name=\"product_seo_url[";
                // line 1138
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "][";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute($this->getAttribute((isset($context["product_seo_url"]) ? $context["product_seo_url"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                    echo $this->getAttribute($this->getAttribute((isset($context["product_seo_url"]) ? $context["product_seo_url"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                }
                echo "\" placeholder=\"";
                echo (isset($context["entry_keyword"]) ? $context["entry_keyword"] : null);
                echo "\" class=\"form-control\" />
                      </div>
                      ";
                // line 1140
                if ($this->getAttribute($this->getAttribute((isset($context["error_keyword"]) ? $context["error_keyword"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                    // line 1141
                    echo "                      <div class=\"text-danger\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["error_keyword"]) ? $context["error_keyword"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                    echo "</div>
                      ";
                }
                // line 1142
                echo " 
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1143
            echo "</td>
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1146
        echo "                    </tbody>
                  
                </table>
              </div>
            </div>

\t\t\t";
        // line 1152
        if ((isset($context["module_additionalfields"]) ? $context["module_additionalfields"] : null)) {
            // line 1153
            echo "\t\t\t\t<div class=\"tab-pane\" id=\"tab-additionalfieldmain\">
\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\" id=\"additionalfield\">
\t\t\t\t\t\t\t";
            // line 1156
            $context["additionalfield_row"] = 0;
            // line 1157
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["product_additionalfields"]) ? $context["product_additionalfields"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product_additionalfield"]) {
                // line 1158
                echo "\t\t\t\t\t\t\t<li><a href=\"#tab-additionalfield";
                echo (isset($context["additionalfield_row"]) ? $context["additionalfield_row"] : null);
                echo "\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('a[href=\\'#tab-additionalfield";
                echo (isset($context["additionalfield_row"]) ? $context["additionalfield_row"] : null);
                echo "\\']').parent().remove(); \$('#tab-additionalfield";
                echo (isset($context["additionalfield_row"]) ? $context["additionalfield_row"] : null);
                echo "').remove(); \$('#additionalfield a:first').tab('show');\"></i> ";
                echo (isset($context["text_additionalfield"]) ? $context["text_additionalfield"] : null);
                echo " ";
                echo (isset($context["additionalfield_row"]) ? $context["additionalfield_row"] : null);
                echo "</a></li>
\t\t\t\t\t\t\t";
                // line 1159
                $context["additionalfield_row"] = ((isset($context["additionalfield_row"]) ? $context["additionalfield_row"] : null) + 1);
                // line 1160
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_additionalfield'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1161
            echo "\t\t\t\t\t\t\t<li id=\"additionalfield-add\"><a onclick=\"addadditionalfield();\"><i class=\"fa fa-plus-circle\"></i> ";
            echo (isset($context["text_add_additionalfield"]) ? $context["text_add_additionalfield"] : null);
            echo "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<div class=\"tab-content tab-content2\">
\t\t\t\t\t\t\t";
            // line 1166
            $context["additionalfield_row"] = 0;
            // line 1167
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["product_additionalfields"]) ? $context["product_additionalfields"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product_additionalfield"]) {
                // line 1168
                echo "\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-additionalfield";
                echo (isset($context["additionalfield_row"]) ? $context["additionalfield_row"] : null);
                echo "\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"clanguage";
                // line 1169
                echo (isset($context["additionalfield_row"]) ? $context["additionalfield_row"] : null);
                echo "\">
\t\t\t\t\t\t\t\t\t";
                // line 1170
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 1171
                    echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-additionalfield";
                    echo (isset($context["additionalfield_row"]) ? $context["additionalfield_row"] : null);
                    echo "-language";
                    echo $this->getAttribute($context["language"], "language_id", array());
                    echo "\" data-toggle=\"tab\"><img src=\"language/";
                    echo $this->getAttribute($context["language"], "code", array());
                    echo "/";
                    echo $this->getAttribute($context["language"], "code", array());
                    echo ".png\" title=\"";
                    echo $this->getAttribute($context["language"], "name", array());
                    echo "\" />  ";
                    echo $this->getAttribute($context["language"], "name", array());
                    echo "</a></li>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1173
                echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t";
                // line 1175
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 1176
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-additionalfield";
                    echo (isset($context["additionalfield_row"]) ? $context["additionalfield_row"] : null);
                    echo "-language";
                    echo $this->getAttribute($context["language"], "language_id", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-heading";
                    // line 1178
                    echo (isset($context["additionalfield_row"]) ? $context["additionalfield_row"] : null);
                    echo "-language";
                    echo $this->getAttribute($context["language"], "language_id", array());
                    echo "\">";
                    echo (isset($context["text_additionalfield_title"]) ? $context["text_additionalfield_title"] : null);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"product_additionalfield[";
                    // line 1180
                    echo (isset($context["additionalfield_row"]) ? $context["additionalfield_row"] : null);
                    echo "][product_additionalfield_text][";
                    echo $this->getAttribute($context["language"], "language_id", array());
                    echo "][title]\" placeholder=\"";
                    echo (isset($context["text_additionalfield_title"]) ? $context["text_additionalfield_title"] : null);
                    echo "\" value=\"";
                    echo (($this->getAttribute($this->getAttribute($context["product_additionalfield"], "product_additionalfield_text", array()), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["product_additionalfield"], "product_additionalfield_text", array()), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "title", array())) : (""));
                    echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-text";
                    // line 1184
                    echo (isset($context["additionalfield_row"]) ? $context["additionalfield_row"] : null);
                    echo "-language";
                    echo $this->getAttribute($context["language"], "language_id", array());
                    echo "\">";
                    echo (isset($context["entry_text"]) ? $context["entry_text"] : null);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"product_additionalfield[";
                    // line 1186
                    echo (isset($context["additionalfield_row"]) ? $context["additionalfield_row"] : null);
                    echo "][product_additionalfield_text][";
                    echo $this->getAttribute($context["language"], "language_id", array());
                    echo "][text]\" value=\"";
                    echo (($this->getAttribute($this->getAttribute($context["product_additionalfield"], "product_additionalfield_text", array()), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["product_additionalfield"], "product_additionalfield_text", array()), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "text", array())) : (""));
                    echo "\" placeholder=\"";
                    echo (isset($context["entry_text"]) ? $context["entry_text"] : null);
                    echo "\" id=\"input-text";
                    echo (isset($context["additionalfield_row"]) ? $context["additionalfield_row"] : null);
                    echo "-language";
                    echo $this->getAttribute($context["language"], "language_id", array());
                    echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1191
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-sort_order";
                // line 1193
                echo (isset($context["additionalfield_row"]) ? $context["additionalfield_row"] : null);
                echo "\">";
                echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
                echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"product_additionalfield[";
                // line 1195
                echo (isset($context["additionalfield_row"]) ? $context["additionalfield_row"] : null);
                echo "][sort_order]\" value=\"";
                echo $this->getAttribute($context["product_additionalfield"], "sort_order", array());
                echo "\" placeholder=\"";
                echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status";
                // line 1199
                echo (isset($context["additionalfield_row"]) ? $context["additionalfield_row"] : null);
                echo "\">";
                echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
                echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<select name=\"product_additionalfield[";
                // line 1201
                echo (isset($context["additionalfield_row"]) ? $context["additionalfield_row"] : null);
                echo "][status]\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 1202
                if ($this->getAttribute($context["product_additionalfield"], "status", array())) {
                    // line 1203
                    echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                    echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                    // line 1204
                    echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 1206
                    echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                    echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                    // line 1207
                    echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 1209
                echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                // line 1213
                $context["additionalfield_row"] = ((isset($context["additionalfield_row"]) ? $context["additionalfield_row"] : null) + 1);
                // line 1214
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_additionalfield'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1215
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 1219
        echo "\t\t\t

\t\t\t";
        // line 1221
        if ((isset($context["module_customtabs"]) ? $context["module_customtabs"] : null)) {
            // line 1222
            echo "\t\t\t\t<div class=\"tab-pane\" id=\"tab-customtabmain\">
\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\" id=\"customtab\">
\t\t\t\t\t\t\t";
            // line 1225
            $context["customtab_row"] = 0;
            // line 1226
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["product_customtabs"]) ? $context["product_customtabs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product_customtab"]) {
                // line 1227
                echo "\t\t\t\t\t\t\t<li><a href=\"#tab-customtab";
                echo (isset($context["customtab_row"]) ? $context["customtab_row"] : null);
                echo "\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('a[href=\\'#tab-customtab";
                echo (isset($context["customtab_row"]) ? $context["customtab_row"] : null);
                echo "\\']').parent().remove(); \$('#tab-customtab";
                echo (isset($context["customtab_row"]) ? $context["customtab_row"] : null);
                echo "').remove(); \$('#customtab a:first').tab('show');\"></i> ";
                echo (isset($context["text_customtab"]) ? $context["text_customtab"] : null);
                echo " ";
                echo (isset($context["customtab_row"]) ? $context["customtab_row"] : null);
                echo "</a></li>
\t\t\t\t\t\t\t";
                // line 1228
                $context["customtab_row"] = ((isset($context["customtab_row"]) ? $context["customtab_row"] : null) + 1);
                // line 1229
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_customtab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1230
            echo "\t\t\t\t\t\t\t<li id=\"customtab-add\"><a onclick=\"addCustomtab();\"><i class=\"fa fa-plus-circle\"></i> ";
            echo (isset($context["text_add_tab"]) ? $context["text_add_tab"] : null);
            echo "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<div class=\"tab-content tab-content2\">
\t\t\t\t\t\t\t";
            // line 1235
            $context["customtab_row"] = 0;
            // line 1236
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["product_customtabs"]) ? $context["product_customtabs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product_customtab"]) {
                // line 1237
                echo "\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-customtab";
                echo (isset($context["customtab_row"]) ? $context["customtab_row"] : null);
                echo "\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"clanguage";
                // line 1238
                echo (isset($context["customtab_row"]) ? $context["customtab_row"] : null);
                echo "\">
\t\t\t\t\t\t\t\t\t";
                // line 1239
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 1240
                    echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-customtab";
                    echo (isset($context["customtab_row"]) ? $context["customtab_row"] : null);
                    echo "-language";
                    echo $this->getAttribute($context["language"], "language_id", array());
                    echo "\" data-toggle=\"tab\"><img src=\"language/";
                    echo $this->getAttribute($context["language"], "code", array());
                    echo "/";
                    echo $this->getAttribute($context["language"], "code", array());
                    echo ".png\" title=\"";
                    echo $this->getAttribute($context["language"], "name", array());
                    echo "\" />  ";
                    echo $this->getAttribute($context["language"], "name", array());
                    echo "</a></li>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1242
                echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t";
                // line 1244
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 1245
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-customtab";
                    echo (isset($context["customtab_row"]) ? $context["customtab_row"] : null);
                    echo "-language";
                    echo $this->getAttribute($context["language"], "language_id", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-heading";
                    // line 1247
                    echo (isset($context["customtab_row"]) ? $context["customtab_row"] : null);
                    echo "-language";
                    echo $this->getAttribute($context["language"], "language_id", array());
                    echo "\">";
                    echo (isset($context["text_tab_title"]) ? $context["text_tab_title"] : null);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"product_customtab[";
                    // line 1249
                    echo (isset($context["customtab_row"]) ? $context["customtab_row"] : null);
                    echo "][product_customtab_description][";
                    echo $this->getAttribute($context["language"], "language_id", array());
                    echo "][title]\" placeholder=\"";
                    echo (isset($context["text_tab_title"]) ? $context["text_tab_title"] : null);
                    echo "\" value=\"";
                    echo (($this->getAttribute($this->getAttribute($context["product_customtab"], "product_customtab_description", array()), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["product_customtab"], "product_customtab_description", array()), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "title", array())) : (""));
                    echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-description";
                    // line 1253
                    echo (isset($context["customtab_row"]) ? $context["customtab_row"] : null);
                    echo "-language";
                    echo $this->getAttribute($context["language"], "language_id", array());
                    echo "\">";
                    echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"product_customtab[";
                    // line 1255
                    echo (isset($context["customtab_row"]) ? $context["customtab_row"] : null);
                    echo "][product_customtab_description][";
                    echo $this->getAttribute($context["language"], "language_id", array());
                    echo "][description]\" placeholder=\"";
                    echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
                    echo "\" id=\"input-description";
                    echo (isset($context["customtab_row"]) ? $context["customtab_row"] : null);
                    echo "-language";
                    echo $this->getAttribute($context["language"], "language_id", array());
                    echo "\" class=\"form-control\">";
                    echo (($this->getAttribute($this->getAttribute($context["product_customtab"], "product_customtab_description", array()), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["product_customtab"], "product_customtab_description", array()), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "description", array())) : (""));
                    echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1260
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-sort_order";
                // line 1262
                echo (isset($context["customtab_row"]) ? $context["customtab_row"] : null);
                echo "\">";
                echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
                echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"product_customtab[";
                // line 1264
                echo (isset($context["customtab_row"]) ? $context["customtab_row"] : null);
                echo "][sort_order]\" value=\"";
                echo $this->getAttribute($context["product_customtab"], "sort_order", array());
                echo "\" placeholder=\"";
                echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status";
                // line 1268
                echo (isset($context["customtab_row"]) ? $context["customtab_row"] : null);
                echo "\">";
                echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
                echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<select name=\"product_customtab[";
                // line 1270
                echo (isset($context["customtab_row"]) ? $context["customtab_row"] : null);
                echo "][status]\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 1271
                if ($this->getAttribute($context["product_customtab"], "status", array())) {
                    // line 1272
                    echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                    echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                    // line 1273
                    echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 1275
                    echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                    echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                    // line 1276
                    echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 1278
                echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                // line 1282
                $context["customtab_row"] = ((isset($context["customtab_row"]) ? $context["customtab_row"] : null) + 1);
                // line 1283
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_customtab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1284
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 1288
        echo "\t\t\t
            <div class=\"tab-pane\" id=\"tab-design\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1294
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1295
        echo (isset($context["entry_layout"]) ? $context["entry_layout"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                  ";
        // line 1299
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1300
            echo "                  <tr>
                    <td class=\"text-left\">";
            // line 1301
            echo $this->getAttribute($context["store"], "name", array());
            echo "</td>
                    <td class=\"text-left\"><select name=\"product_layout[";
            // line 1302
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" class=\"form-control\">
                        <option value=\"\"></option>
                        

                          ";
            // line 1306
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["layouts"]) ? $context["layouts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 1307
                echo "                          ";
                if (($this->getAttribute((isset($context["product_layout"]) ? $context["product_layout"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") && ($this->getAttribute((isset($context["product_layout"]) ? $context["product_layout"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == $this->getAttribute($context["layout"], "layout_id", array())))) {
                    // line 1308
                    echo "
                        
                        <option value=\"";
                    // line 1310
                    echo $this->getAttribute($context["layout"], "layout_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["layout"], "name", array());
                    echo "</option>
                        

                          ";
                } else {
                    // line 1314
                    echo "
                        
                        <option value=\"";
                    // line 1316
                    echo $this->getAttribute($context["layout"], "layout_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["layout"], "name", array());
                    echo "</option>
                        

                          ";
                }
                // line 1320
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1321
            echo "
                      
                      </select></td>
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1326
        echo "                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\" />
  <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
  <link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script> 
  <script type=\"text/javascript\"><!--
// Manufacturer
\$('input[name=\\'manufacturer\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/manufacturer/autocomplete&user_token=";
        // line 1349
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tjson.unshift({
\t\t\t\t\tmanufacturer_id: 0,
\t\t\t\t\tname: '";
        // line 1354
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "'
\t\t\t\t});

\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['manufacturer_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'manufacturer\\']').val(item['label']);
\t\t\$('input[name=\\'manufacturer_id\\']').val(item['value']);
\t}
});

// Category
\$('input[name=\\'category\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 1376
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['category_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'category\\']').val('');

\t\t\$('#product-category' + item['value']).remove();

\t\t\$('#product-category').append('<div id=\"product-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\" /></div>');
\t}
});

\$('#product-category').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});

// Filter
\$('input[name=\\'filter\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/filter/autocomplete&user_token=";
        // line 1405
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['filter_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter\\']').val('');

\t\t\$('#product-filter' + item['value']).remove();

\t\t\$('#product-filter').append('<div id=\"product-filter' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_filter[]\" value=\"' + item['value'] + '\" /></div>');
\t}
});

\$('#product-filter').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});

// Downloads
\$('input[name=\\'download\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/download/autocomplete&user_token=";
        // line 1434
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['download_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'download\\']').val('');

\t\t\$('#product-download' + item['value']).remove();

\t\t\$('#product-download').append('<div id=\"product-download' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_download[]\" value=\"' + item['value'] + '\" /></div>');
\t}
});

\$('#product-download').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});

// Related
\$('input[name=\\'related\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 1463
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'related\\']').val('');

\t\t\$('#product-related' + item['value']).remove();

\t\t\$('#product-related').append('<div id=\"product-related' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_related[]\" value=\"' + item['value'] + '\" /></div>');
\t}
});

\$('#product-related').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});
//--></script> 
  <script type=\"text/javascript\"><!--
var attribute_row = ";
        // line 1489
        echo (isset($context["attribute_row"]) ? $context["attribute_row"] : null);
        echo ";

function addAttribute() {
    html  = '<tr id=\"attribute-row' + attribute_row + '\">';
\thtml += '  <td class=\"text-left\" style=\"width: 20%;\"><input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"";
        // line 1493
        echo (isset($context["entry_attribute"]) ? $context["entry_attribute"] : null);
        echo "\" class=\"form-control\" /><input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" /></td>';
\thtml += '  <td class=\"text-left\">';
\t";
        // line 1495
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1496
            echo "\thtml += '<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /></span><textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][text]\" rows=\"5\" placeholder=\"";
            echo (isset($context["entry_text"]) ? $context["entry_text"] : null);
            echo "\" class=\"form-control\"></textarea></div>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1498
        echo "\thtml += '  </td>';
\thtml += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#attribute-row' + attribute_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1499
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
    html += '</tr>';

\t\$('#attribute tbody').append(html);

\tattributeautocomplete(attribute_row);

\tattribute_row++;
}

function attributeautocomplete(attribute_row) {
\t\$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').autocomplete({
\t\t'source': function(request, response) {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=catalog/attribute/autocomplete&user_token=";
        // line 1513
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\t\tdataType: 'json',
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\treturn {
\t\t\t\t\t\t\tcategory: item.attribute_group,
\t\t\t\t\t\t\tlabel: item.name,
\t\t\t\t\t\t\tvalue: item.attribute_id
\t\t\t\t\t\t}
\t\t\t\t\t}));
\t\t\t\t}
\t\t\t});
\t\t},
\t\t'select': function(item) {
\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').val(item['label']);
\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][attribute_id]\\']').val(item['value']);
\t\t}
\t});
}

\$('#attribute tbody tr').each(function(index, element) {
\tattributeautocomplete(index);
});
//--></script> 
  <script type=\"text/javascript\"><!--
var option_row = ";
        // line 1538
        echo (isset($context["option_row"]) ? $context["option_row"] : null);
        echo ";

\$('input[name=\\'option\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/option/autocomplete&user_token=";
        // line 1543
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tcategory: item['category'],
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['option_id'],
\t\t\t\t\t\ttype: item['type'],
\t\t\t\t\t\toption_value: item['option_value']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\thtml  = '<div class=\"tab-pane\" id=\"tab-option' + option_row + '\">';
\t\thtml += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_id]\" value=\"\" />';
\t\thtml += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][name]\" value=\"' + item['label'] + '\" />';
\t\thtml += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][option_id]\" value=\"' + item['value'] + '\" />';
\t\thtml += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][type]\" value=\"' + item['type'] + '\" />';

\t\thtml += '\t<div class=\"form-group\">';
\t\thtml += '\t  <label class=\"col-sm-2 control-label\" for=\"input-required' + option_row + '\">";
        // line 1566
        echo (isset($context["entry_required"]) ? $context["entry_required"] : null);
        echo "</label>';
\t\thtml += '\t  <div class=\"col-sm-10\"><select name=\"product_option[' + option_row + '][required]\" id=\"input-required' + option_row + '\" class=\"form-control\">';
\t\thtml += '\t      <option value=\"1\">";
        // line 1568
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "</option>';
\t\thtml += '\t      <option value=\"0\">";
        // line 1569
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "</option>';
\t\thtml += '\t  </select></div>';
\t\thtml += '\t</div>';

\t\tif (item['type'] == 'text') {
\t\t\thtml += '\t<div class=\"form-group\">';
\t\t\thtml += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1575
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</label>';
\t\t\thtml += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1576
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
\t\t\thtml += '\t</div>';
\t\t}

\t\tif (item['type'] == 'textarea') {
\t\t\thtml += '\t<div class=\"form-group\">';
\t\t\thtml += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1582
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</label>';
\t\t\thtml += '\t  <div class=\"col-sm-10\"><textarea name=\"product_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"";
        // line 1583
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\"></textarea></div>';
\t\t\thtml += '\t</div>';
\t\t}

\t\tif (item['type'] == 'file') {
\t\t\thtml += '\t<div class=\"form-group\" style=\"display: none;\">';
\t\t\thtml += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1589
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</label>';
\t\t\thtml += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1590
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
\t\t\thtml += '\t</div>';
\t\t}

\t\tif (item['type'] == 'date') {
\t\t\thtml += '\t<div class=\"form-group\">';
\t\t\thtml += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1596
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</label>';
\t\t\thtml += '\t  <div class=\"col-sm-3\"><div class=\"input-group date\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1597
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\thtml += '\t</div>';
\t\t}

\t\tif (item['type'] == 'time') {
\t\t\thtml += '\t<div class=\"form-group\">';
\t\t\thtml += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1603
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</label>';
\t\t\thtml += '\t  <div class=\"col-sm-10\"><div class=\"input-group time\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1604
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "\" data-date-format=\"HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\thtml += '\t</div>';
\t\t}

\t\tif (item['type'] == 'datetime') {
\t\t\thtml += '\t<div class=\"form-group\">';
\t\t\thtml += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1610
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</label>';
\t\t\thtml += '\t  <div class=\"col-sm-10\"><div class=\"input-group datetime\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1611
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\thtml += '\t</div>';
\t\t}

\t\tif (item['type'] == 'select' || item['type'] == 'radio' || item['type'] == 'checkbox' || item['type'] == 'image') {
\t\t\thtml += '<div class=\"table-responsive\">';
\t\t\thtml += '  <table id=\"option-value' + option_row + '\" class=\"table table-striped table-bordered table-hover\">';
\t\t\thtml += '  \t <thead>';
\t\t\thtml += '      <tr>';
\t\t\thtml += '        <td class=\"text-left\">";
        // line 1620
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</td>';
\t\t\thtml += '        <td class=\"text-right\">";
        // line 1621
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "</td>';
\t\t\thtml += '        <td class=\"text-left\">";
        // line 1622
        echo (isset($context["entry_subtract"]) ? $context["entry_subtract"] : null);
        echo "</td>';
\t\t\thtml += '        <td class=\"text-right\">";
        // line 1623
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "</td>';
\t\t\thtml += '        <td class=\"text-right\">";
        // line 1624
        echo (isset($context["entry_option_points"]) ? $context["entry_option_points"] : null);
        echo "</td>';
\t\t\thtml += '        <td class=\"text-right\">";
        // line 1625
        echo (isset($context["entry_weight"]) ? $context["entry_weight"] : null);
        echo "</td>';
\t\t\thtml += '        <td></td>';
\t\t\thtml += '      </tr>';
\t\t\thtml += '  \t </thead>';
\t\t\thtml += '  \t <tbody>';
\t\t\thtml += '    </tbody>';
\t\t\thtml += '    <tfoot>';
\t\t\thtml += '      <tr>';
\t\t\thtml += '        <td colspan=\"6\"></td>';
\t\t\thtml += '        <td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue(' + option_row + ');\" data-toggle=\"tooltip\" title=\"";
        // line 1634
        echo (isset($context["button_option_value_add"]) ? $context["button_option_value_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>';
\t\t\thtml += '      </tr>';
\t\t\thtml += '    </tfoot>';
\t\t\thtml += '  </table>';
\t\t\thtml += '</div>';

            html += '  <select id=\"option-values' + option_row + '\" style=\"display: none;\">';

            for (i = 0; i < item['option_value'].length; i++) {
\t\t\t\thtml += '  <option value=\"' + item['option_value'][i]['option_value_id'] + '\">' + item['option_value'][i]['name'] + '</option>';
            }

            html += '  </select>';
\t\t\thtml += '</div>';
\t\t}

\t\t\$('#tab-option .tab-content').append(html);

\t\t\$('#option > li:last-child').before('<li><a href=\"#tab-option' + option_row + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\" \$(\\'#option a:first\\').tab(\\'show\\');\$(\\'a[href=\\\\\\'#tab-option' + option_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-option' + option_row + '\\').remove();\"></i>' + item['label'] + '</li>');

\t\t\$('#option a[href=\\'#tab-option' + option_row + '\\']').tab('show');

\t\t\$('[data-toggle=\\'tooltip\\']').tooltip({
\t\t\tcontainer: 'body',
\t\t\thtml: true
\t\t});

\t\t\$('.date').datetimepicker({
\t\t\tlanguage: '";
        // line 1662
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t\t\tpickTime: false
\t\t});

\t\t\$('.time').datetimepicker({
\t\t\tlanguage: '";
        // line 1667
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t\t\tpickDate: false
\t\t});

\t\t\$('.datetime').datetimepicker({
\t\t\tlanguage: '";
        // line 1672
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t\t\tpickDate: true,
\t\t\tpickTime: true
\t\t});

\t\toption_row++;
\t}
});
//--></script> 
  <script type=\"text/javascript\"><!--
var option_value_row = ";
        // line 1682
        echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
        echo ";

function addOptionValue(option_row) {
\thtml  = '<tr id=\"option-value-row' + option_value_row + '\">';
\thtml += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][option_value_id]\" class=\"form-control\">';
\thtml += \$('#option-values' + option_row).html();
\thtml += '  </select><input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][product_option_value_id]\" value=\"\" /></td>';
\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1689
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][subtract]\" class=\"form-control\">';
\thtml += '    <option value=\"1\">";
        // line 1691
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "</option>';
\thtml += '    <option value=\"0\">";
        // line 1692
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "</option>';
\thtml += '  </select></td>';
\thtml += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price_prefix]\" class=\"form-control\">';
\thtml += '    <option value=\"+\">+</option>';
\thtml += '    <option value=\"-\">-</option>';
\thtml += '  </select>';
\thtml += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price]\" value=\"\" placeholder=\"";
        // line 1698
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points_prefix]\" class=\"form-control\">';
\thtml += '    <option value=\"+\">+</option>';
\thtml += '    <option value=\"-\">-</option>';
\thtml += '  </select>';
\thtml += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points]\" value=\"\" placeholder=\"";
        // line 1703
        echo (isset($context["entry_points"]) ? $context["entry_points"] : null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight_prefix]\" class=\"form-control\">';
\thtml += '    <option value=\"+\">+</option>';
\thtml += '    <option value=\"-\">-</option>';
\thtml += '  </select>';
\thtml += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight]\" value=\"\" placeholder=\"";
        // line 1708
        echo (isset($context["entry_weight"]) ? $context["entry_weight"] : null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(this).tooltip(\\'destroy\\');\$(\\'#option-value-row' + option_value_row + '\\').remove();\" data-toggle=\"tooltip\" rel=\"tooltip\" title=\"";
        // line 1709
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';

\t\$('#option-value' + option_row + ' tbody').append(html);
\t\$('[rel=tooltip]').tooltip();

\toption_value_row++;
}
//--></script> 
  <script type=\"text/javascript\"><!--
var discount_row = ";
        // line 1719
        echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
        echo ";

function addDiscount() {
\thtml  = '<tr id=\"discount-row' + discount_row + '\">';
    html += '  <td class=\"text-left\"><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-control\">';
    ";
        // line 1724
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1725
            echo "    html += '    <option value=\"";
            echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer_group"], "name", array()), "js");
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1727
        echo "    html += '  </select></td>';
    html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1728
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "\" class=\"form-control\" /></td>';
    html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1729
        echo (isset($context["entry_priority"]) ? $context["entry_priority"] : null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"";
        // line 1730
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "\" class=\"form-control\" /></td>';
    html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1731
        echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\thtml += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1732
        echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#discount-row' + discount_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1733
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';

\t\$('#discount tbody').append(html);

\t\$('.date').datetimepicker({
\t\tpickTime: false
\t});

\tdiscount_row++;
}
//--></script> 
  <script type=\"text/javascript\"><!--
var special_row = ";
        // line 1746
        echo (isset($context["special_row"]) ? $context["special_row"] : null);
        echo ";

function addSpecial() {
\thtml  = '<tr id=\"special-row' + special_row + '\">';
    html += '  <td class=\"text-left\"><select name=\"product_special[' + special_row + '][customer_group_id]\" class=\"form-control\">';
    ";
        // line 1751
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1752
            echo "    html += '      <option value=\"";
            echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer_group"], "name", array()), "js");
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1754
        echo "    html += '  </select></td>';
    html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1755
        echo (isset($context["entry_priority"]) ? $context["entry_priority"] : null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][price]\" value=\"\" placeholder=\"";
        // line 1756
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "\" class=\"form-control\" /></td>';
    html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1757
        echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\thtml += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1758
        echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#special-row' + special_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1759
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';

\t\$('#special tbody').append(html);

\t\$('.date').datetimepicker({
\t\tlanguage: '";
        // line 1765
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t\tpickTime: false
\t});

\tspecial_row++;
}
//--></script> 
  <script type=\"text/javascript\"><!--
var image_row = ";
        // line 1773
        echo (isset($context["image_row"]) ? $context["image_row"] : null);
        echo ";

function addImage() {
\thtml  = '<tr id=\"image-row' + image_row + '\">';
\thtml += '  <td class=\"text-left\"><a href=\"\" id=\"thumb-image' + image_row + '\"data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1777
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a><input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-image' + image_row + '\" /></td>';
\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 1778
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row  + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1779
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';

\t\$('#images tbody').append(html);

\timage_row++;
}
//--></script> 
  <script type=\"text/javascript\"><!--
var recurring_row = ";
        // line 1788
        echo (isset($context["recurring_row"]) ? $context["recurring_row"] : null);
        echo ";

function addRecurring() {
\thtml  = '<tr id=\"recurring-row' + recurring_row + '\">';
\thtml += '  <td class=\"left\">';
\thtml += '    <select name=\"product_recurring[' + recurring_row + '][recurring_id]\" class=\"form-control\">>';
\t";
        // line 1794
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
            // line 1795
            echo "\thtml += '      <option value=\"";
            echo $this->getAttribute($context["recurring"], "recurring_id", array());
            echo "\">";
            echo $this->getAttribute($context["recurring"], "name", array());
            echo "</option>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1797
        echo "\thtml += '    </select>';
\thtml += '  </td>';
\thtml += '  <td class=\"left\">';
\thtml += '    <select name=\"product_recurring[' + recurring_row + '][customer_group_id]\" class=\"form-control\">>';
\t";
        // line 1801
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1802
            echo "\thtml += '      <option value=\"";
            echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
            echo "\">";
            echo $this->getAttribute($context["customer_group"], "name", array());
            echo "</option>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1804
        echo "\thtml += '    <select>';
\thtml += '  </td>';
\thtml += '  <td class=\"left\">';
\thtml += '    <a onclick=\"\$(\\'#recurring-row' + recurring_row + '\\').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 1807
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>';
\thtml += '  </td>';
\thtml += '</tr>';

\t\$('#tab-recurring table tbody').append(html);

\trecurring_row++;
}
//--></script> 
  <script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 1818
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickTime: false
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 1823
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 1828
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: true,
\tpickTime: true
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('#language a:first').tab('show');
\$('#option a:first').tab('show');
//--></script></div>

\t\t\t";
        // line 1838
        if ((isset($context["module_sizechart"]) ? $context["module_sizechart"] : null)) {
            // line 1839
            echo "\t\t\t<script type=\"text/javascript\">
\t\t\t\t\$('input[name=\\'sizechart\\']').autocomplete({
\t\t\t\t\t'source': function(request, response) {
\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\turl: 'index.php?route=extension/materialize/sizechart/sizechart/autocomplete&user_token=";
            // line 1843
            echo (isset($context["user_token"]) ? $context["user_token"] : null);
            echo "&filter_name=' +  encodeURIComponent(request),
\t\t\t\t\t\t\tdataType: 'json',
\t\t\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\t\t\t\treturn {
\t\t\t\t\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\t\t\t\t\tvalue: item['sizechart_id']
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}));
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t},
\t\t\t\t\t'select': function(item) {
\t\t\t\t\t\t\$('input[name=\\'sizechart\\']').val(item['label']);
\t\t\t\t\t\t\$('input[name=\\'sizechart_id\\']').val(item['value']);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t</script>
\t\t\t";
        }
        // line 1862
        echo "\t\t\t

\t\t\t";
        // line 1864
        if ((isset($context["module_additionalfields"]) ? $context["module_additionalfields"] : null)) {
            // line 1865
            echo "\t\t\t\t<script type=\"text/javascript\"><!--
\t\t\t\t";
            // line 1866
            $context["additionalfield_row"] = 0;
            // line 1867
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["product_additionalfields"]) ? $context["product_additionalfields"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product_additionalfield"]) {
                // line 1868
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 1869
                    echo "\t\t\t\t\$('#input-text";
                    echo (isset($context["additionalfield_row"]) ? $context["additionalfield_row"] : null);
                    echo "-language";
                    echo $this->getAttribute($context["language"], "language_id", array());
                    echo "');
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1871
                echo "\t\t\t\t";
                $context["additionalfield_row"] = ((isset($context["additionalfield_row"]) ? $context["additionalfield_row"] : null) + 1);
                // line 1872
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_additionalfield'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1873
            echo "\t\t\t\t//--></script>

\t\t\t\t<script type=\"text/javascript\"><!--
\t\t\t\tvar additionalfield_row = ";
            // line 1876
            echo (isset($context["additionalfield_row"]) ? $context["additionalfield_row"] : null);
            echo ";

\t\t\t\tfunction addadditionalfield() {
\t\t\t\t\thtml  = '<div id=\"tab-additionalfield' + additionalfield_row + '\" class=\"tab-pane\">';
\t\t\t\t\thtml += '\t<ul class=\"nav nav-tabs\" id=\"clanguage' + additionalfield_row + '\">';
\t\t\t\t\t";
            // line 1881
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1882
                echo "\t\t\t\t\thtml += '\t\t<li><a href=\"#tab-additionalfield' + additionalfield_row + '-language";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\" /> ";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</a></li>';
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1884
            echo "\t\t\t\t\thtml += '\t</ul>';

\t\t\t\t\thtml += '\t<div class=\"tab-content\">';
\t\t\t\t\t";
            // line 1887
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1888
                echo "\t\t\t\t\thtml += '\t\t<div class=\"tab-pane\" id=\"tab-additionalfield' + additionalfield_row + '-language";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\">';
\t\t\t\t\thtml += '\t\t\t<div class=\"form-group\">';
\t\t\t\t\thtml += '\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-title' + additionalfield_row + '-language";
                // line 1890
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\">";
                echo (isset($context["text_additionalfield_title"]) ? $context["text_additionalfield_title"] : null);
                echo "</label>';
\t\t\t\t\thtml += '\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"product_additionalfield[' + additionalfield_row + '][product_additionalfield_text][";
                // line 1891
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "][title]\" placeholder=\"";
                echo (isset($context["text_additionalfield_title"]) ? $context["text_additionalfield_title"] : null);
                echo "\" id=\"input-title' + additionalfield_row + '-language";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\" value=\"\" class=\"form-control\"/></div>';
\t\t\t\t\thtml += '\t\t\t</div>';
\t\t\t\t\thtml += '\t\t\t<div class=\"form-group\">';
\t\t\t\t\thtml += '\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-text' + additionalfield_row + '-language";
                // line 1894
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\">";
                echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
                echo "</label>';
\t\t\t\t\thtml += '\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"product_additionalfield[' + additionalfield_row + '][product_additionalfield_text][";
                // line 1895
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "][text]\" value=\"\" id=\"input-text' + additionalfield_row + '-language";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\" class=\"form-control\"/></div>';
\t\t\t\t\thtml += '\t\t\t</div>';
\t\t\t\t\thtml += '\t\t</div>';
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1899
            echo "\t\t\t\t\thtml += '\t</div>';
\t\t\t\t\thtml += '\t\t<div class=\"form-group\">';
\t\t\t\t\thtml += '\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status' + additionalfield_row +'\">";
            // line 1901
            echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
            echo "</label>';
\t\t\t\t\thtml += '\t\t\t<div class=\"col-sm-10\"><select name=\"product_additionalfield[' + additionalfield_row + '][status]\" class=\"form-control\"><option value=\"1\">";
            // line 1902
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option><option value=\"0\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option></select></div>';
\t\t\t\t\thtml += '\t\t</div>';
\t\t\t\t\thtml += '\t<div class=\"form-group\">';
\t\t\t\t\thtml += '\t\t<label class=\"col-sm-2 control-label\" for=\"input-sort_order' + additionalfield_row +'\">";
            // line 1905
            echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
            echo "</label>';
\t\t\t\t\thtml += '\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"product_additionalfield[' + additionalfield_row + '][sort_order]\" value=\"\" class=\"form-control\" /></div>';
\t\t\t\t\thtml += '\t</div>';
\t\t\t\t\thtml += '</div>';

\t\t\t\t\t\$('#tab-additionalfieldmain .tab-content2').append(html);

\t\t\t\t\t";
            // line 1912
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1913
                echo "\t\t\t\t\t\$('#input-text' + additionalfield_row + '-language";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "');
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1915
            echo "
\t\t\t\t\t\$('#additionalfield a[href=\\'#tab-additionalfield' + additionalfield_row + '\\']').tab('show');

\t\t\t\t\t\$('#clanguage' + additionalfield_row + ' li:first-child a').tab('show');

\t\t\t\t\t\$('#additionalfield-add').before('<li><a href=\"#tab-additionalfield' + additionalfield_row + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$(\\'a[href=\\\\\\'#tab-additionalfield' + additionalfield_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-additionalfield' + additionalfield_row + '\\').remove(); \$(\\'#additionalfield li a:first\\').tab(\\'show\\');\"></i> ";
            // line 1920
            echo (isset($context["text_additionalfield"]) ? $context["text_additionalfield"] : null);
            echo " ' + additionalfield_row + '</a></li>');


\t\t\t\t\t\$('#additionalfield-' + additionalfield_row).trigger('click');

\t\t\t\t\tadditionalfield_row++;
\t\t\t\t}
\t\t\t\t//--></script>

\t\t\t\t<script type=\"text/javascript\"><!--
\t\t\t\t\$('#additionalfield li:first-child a').tab('show');
\t\t\t\t";
            // line 1931
            $context["additionalfield_row"] = 0;
            // line 1932
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["product_additionalfields"]) ? $context["product_additionalfields"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product_additionalfield"]) {
                // line 1933
                echo "\t\t\t\t\$('#clanguage";
                echo (isset($context["additionalfield_row"]) ? $context["additionalfield_row"] : null);
                echo " li:first-child a').tab('show');
\t\t\t\t";
                // line 1934
                $context["additionalfield_row"] = ((isset($context["additionalfield_row"]) ? $context["additionalfield_row"] : null) + 1);
                // line 1935
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_additionalfield'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1936
            echo "\t\t\t\t//--></script>
\t\t\t";
        }
        // line 1938
        echo "\t\t\t

\t\t\t";
        // line 1940
        if ((isset($context["module_customtabs"]) ? $context["module_customtabs"] : null)) {
            // line 1941
            echo "\t\t\t\t<script type=\"text/javascript\"><!--
\t\t\t\t";
            // line 1942
            $context["customtab_row"] = 0;
            // line 1943
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["product_customtabs"]) ? $context["product_customtabs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product_customtab"]) {
                // line 1944
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 1945
                    echo "\t\t\t\t\$('#input-description";
                    echo (isset($context["customtab_row"]) ? $context["customtab_row"] : null);
                    echo "-language";
                    echo $this->getAttribute($context["language"], "language_id", array());
                    echo "').summernote({
\t\t\t\t\theight: 300
\t\t\t\t});
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1949
                echo "\t\t\t\t";
                $context["customtab_row"] = ((isset($context["customtab_row"]) ? $context["customtab_row"] : null) + 1);
                // line 1950
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_customtab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1951
            echo "\t\t\t\t//--></script>

\t\t\t\t<script type=\"text/javascript\"><!--
\t\t\t\tvar customtab_row = ";
            // line 1954
            echo (isset($context["customtab_row"]) ? $context["customtab_row"] : null);
            echo ";

\t\t\t\tfunction addCustomtab() {
\t\t\t\t\thtml  = '<div id=\"tab-customtab' + customtab_row + '\" class=\"tab-pane\">';
\t\t\t\t\thtml += '\t<ul class=\"nav nav-tabs\" id=\"clanguage' + customtab_row + '\">';
\t\t\t\t\t";
            // line 1959
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1960
                echo "\t\t\t\t\thtml += '\t\t<li><a href=\"#tab-customtab' + customtab_row + '-language";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\" /> ";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</a></li>';
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1962
            echo "\t\t\t\t\thtml += '\t</ul>';

\t\t\t\t\thtml += '\t<div class=\"tab-content\">';
\t\t\t\t\t";
            // line 1965
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1966
                echo "\t\t\t\t\thtml += '\t\t<div class=\"tab-pane\" id=\"tab-customtab' + customtab_row + '-language";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\">';
\t\t\t\t\thtml += '\t\t\t<div class=\"form-group\">';
\t\t\t\t\thtml += '\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-title' + customtab_row + '-language";
                // line 1968
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\">";
                echo (isset($context["text_tab_title"]) ? $context["text_tab_title"] : null);
                echo "</label>';
\t\t\t\t\thtml += '\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"product_customtab[' + customtab_row + '][product_customtab_description][";
                // line 1969
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "][title]\" placeholder=\"";
                echo (isset($context["text_tab_title"]) ? $context["text_tab_title"] : null);
                echo "\" id=\"input-title' + customtab_row + '-language";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\" value=\"\" class=\"form-control\"/></div>';
\t\t\t\t\thtml += '\t\t\t</div>';
\t\t\t\t\thtml += '\t\t\t<div class=\"form-group\">';
\t\t\t\t\thtml += '\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-description' + customtab_row + '-language";
                // line 1972
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\">";
                echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
                echo "</label>';
\t\t\t\t\thtml += '\t\t\t\t<div class=\"col-sm-10\"><textarea name=\"product_customtab[' + customtab_row + '][product_customtab_description][";
                // line 1973
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "][description]\" id=\"input-description' + customtab_row + '-language";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\"></textarea></div>';
\t\t\t\t\thtml += '\t\t\t</div>';
\t\t\t\t\thtml += '\t\t</div>';
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1977
            echo "\t\t\t\t\thtml += '\t</div>';
\t\t\t\t\thtml += '\t\t<div class=\"form-group\">';
\t\t\t\t\thtml += '\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status' + customtab_row +'\">";
            // line 1979
            echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
            echo "</label>';
\t\t\t\t\thtml += '\t\t\t<div class=\"col-sm-10\"><select name=\"product_customtab[' + customtab_row + '][status]\" class=\"form-control\"><option value=\"1\">";
            // line 1980
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option><option value=\"0\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option></select></div>';
\t\t\t\t\thtml += '\t\t</div>';
\t\t\t\t\thtml += '\t<div class=\"form-group\">';
\t\t\t\t\thtml += '\t\t<label class=\"col-sm-2 control-label\" for=\"input-sort_order' + customtab_row +'\">";
            // line 1983
            echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
            echo "</label>';
\t\t\t\t\thtml += '\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"product_customtab[' + customtab_row + '][sort_order]\" value=\"\" class=\"form-control\" /></div>';
\t\t\t\t\thtml += '\t</div>';
\t\t\t\t\thtml += '</div>';

\t\t\t\t\t\$('#tab-customtabmain .tab-content2').append(html);

\t\t\t\t\t";
            // line 1990
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1991
                echo "\t\t\t\t\t\$('#input-description' + customtab_row + '-language";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "').summernote({
\t\t\t\t\t\theight: 300
\t\t\t\t\t});
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1995
            echo "
\t\t\t\t\t\$('#customtab a[href=\\'#tab-customtab' + customtab_row + '\\']').tab('show');

\t\t\t\t\t\$('#clanguage' + customtab_row + ' li:first-child a').tab('show');

\t\t\t\t\t\$('#customtab-add').before('<li><a href=\"#tab-customtab' + customtab_row + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$(\\'a[href=\\\\\\'#tab-customtab' + customtab_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-customtab' + customtab_row + '\\').remove(); \$(\\'#customtab li a:first\\').tab(\\'show\\');\"></i> ";
            // line 2000
            echo (isset($context["text_customtab"]) ? $context["text_customtab"] : null);
            echo " ' + customtab_row + '</a></li>');


\t\t\t\t\t\$('#customtab-' + customtab_row).trigger('click');

\t\t\t\t\tcustomtab_row++;
\t\t\t\t}
\t\t\t\t//--></script>

\t\t\t\t<script type=\"text/javascript\"><!--
\t\t\t\t\$('#customtab li:first-child a').tab('show');
\t\t\t\t";
            // line 2011
            $context["customtab_row"] = 0;
            // line 2012
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["product_customtabs"]) ? $context["product_customtabs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product_customtab"]) {
                // line 2013
                echo "\t\t\t\t\$('#clanguage";
                echo (isset($context["customtab_row"]) ? $context["customtab_row"] : null);
                echo " li:first-child a').tab('show');
\t\t\t\t";
                // line 2014
                $context["customtab_row"] = ((isset($context["customtab_row"]) ? $context["customtab_row"] : null) + 1);
                // line 2015
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_customtab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2016
            echo "\t\t\t\t//--></script>
\t\t\t";
        }
        // line 2018
        echo "\t\t\t

\t\t\t<script type=\"text/javascript\">
\t\t\t\tvar applyBtn = \$('#apply-btn'),
\t\t\t\t\tformProduct = \$('#form-product'),
\t\t\t\t\tdataAction = formProduct.attr('data-action');

\t\t\t\tif (sessionStorage['index_p']) {
\t\t\t\t\tvar index_p = sessionStorage['index_p'];
\t\t\t\t} else {
\t\t\t\t\tvar index_p = 0;
\t\t\t\t}

\t\t\t\t\$('#apply-tab li:eq(' + index_p + ') a').tab('show');
\t\t\t\tsessionStorage['index_p'] = 0;

\t\t\t\tapplyBtn.click(function() {
\t\t\t\t\tsessionStorage['index_p'] = \$(\".nav-tabs .active\").index();

\t\t\t\t\tformProduct.attr({'action':dataAction});
\t\t\t\t\tformProduct.submit();

\t\t\t\t\te.preventDefault();
\t\t\t\t});

\t\t\t\tdocument.addEventListener(\"keydown\", function(event) {
\t\t\t\t\tif (event.keyCode == 83 && (navigator.platform.match(\"Mac\") ? event.metaKey : event.ctrlKey)) {
\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\tapplyBtn.trigger('click');
\t\t\t\t\t}
\t\t\t\t}, false);
\t\t\t</script>
\t\t\t
";
        // line 2051
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "catalog/product_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4748 => 2051,  4713 => 2018,  4709 => 2016,  4703 => 2015,  4701 => 2014,  4696 => 2013,  4691 => 2012,  4689 => 2011,  4675 => 2000,  4668 => 1995,  4657 => 1991,  4653 => 1990,  4643 => 1983,  4635 => 1980,  4631 => 1979,  4627 => 1977,  4615 => 1973,  4609 => 1972,  4599 => 1969,  4593 => 1968,  4587 => 1966,  4583 => 1965,  4578 => 1962,  4561 => 1960,  4557 => 1959,  4549 => 1954,  4544 => 1951,  4538 => 1950,  4535 => 1949,  4522 => 1945,  4517 => 1944,  4512 => 1943,  4510 => 1942,  4507 => 1941,  4505 => 1940,  4501 => 1938,  4497 => 1936,  4491 => 1935,  4489 => 1934,  4484 => 1933,  4479 => 1932,  4477 => 1931,  4463 => 1920,  4456 => 1915,  4447 => 1913,  4443 => 1912,  4433 => 1905,  4425 => 1902,  4421 => 1901,  4417 => 1899,  4405 => 1895,  4399 => 1894,  4389 => 1891,  4383 => 1890,  4377 => 1888,  4373 => 1887,  4368 => 1884,  4351 => 1882,  4347 => 1881,  4339 => 1876,  4334 => 1873,  4328 => 1872,  4325 => 1871,  4314 => 1869,  4309 => 1868,  4304 => 1867,  4302 => 1866,  4299 => 1865,  4297 => 1864,  4293 => 1862,  4271 => 1843,  4265 => 1839,  4263 => 1838,  4250 => 1828,  4242 => 1823,  4234 => 1818,  4220 => 1807,  4215 => 1804,  4204 => 1802,  4200 => 1801,  4194 => 1797,  4183 => 1795,  4179 => 1794,  4170 => 1788,  4158 => 1779,  4154 => 1778,  4148 => 1777,  4141 => 1773,  4130 => 1765,  4121 => 1759,  4117 => 1758,  4113 => 1757,  4109 => 1756,  4105 => 1755,  4102 => 1754,  4091 => 1752,  4087 => 1751,  4079 => 1746,  4063 => 1733,  4059 => 1732,  4055 => 1731,  4051 => 1730,  4047 => 1729,  4043 => 1728,  4040 => 1727,  4029 => 1725,  4025 => 1724,  4017 => 1719,  4004 => 1709,  4000 => 1708,  3992 => 1703,  3984 => 1698,  3975 => 1692,  3971 => 1691,  3966 => 1689,  3956 => 1682,  3943 => 1672,  3935 => 1667,  3927 => 1662,  3896 => 1634,  3884 => 1625,  3880 => 1624,  3876 => 1623,  3872 => 1622,  3868 => 1621,  3864 => 1620,  3852 => 1611,  3848 => 1610,  3839 => 1604,  3835 => 1603,  3826 => 1597,  3822 => 1596,  3813 => 1590,  3809 => 1589,  3800 => 1583,  3796 => 1582,  3787 => 1576,  3783 => 1575,  3774 => 1569,  3770 => 1568,  3765 => 1566,  3739 => 1543,  3731 => 1538,  3703 => 1513,  3686 => 1499,  3683 => 1498,  3666 => 1496,  3662 => 1495,  3657 => 1493,  3650 => 1489,  3621 => 1463,  3589 => 1434,  3557 => 1405,  3525 => 1376,  3500 => 1354,  3492 => 1349,  3467 => 1326,  3457 => 1321,  3451 => 1320,  3442 => 1316,  3438 => 1314,  3429 => 1310,  3425 => 1308,  3422 => 1307,  3418 => 1306,  3411 => 1302,  3407 => 1301,  3404 => 1300,  3400 => 1299,  3393 => 1295,  3389 => 1294,  3381 => 1288,  3375 => 1284,  3369 => 1283,  3367 => 1282,  3361 => 1278,  3356 => 1276,  3351 => 1275,  3346 => 1273,  3341 => 1272,  3339 => 1271,  3335 => 1270,  3328 => 1268,  3317 => 1264,  3310 => 1262,  3306 => 1260,  3285 => 1255,  3276 => 1253,  3263 => 1249,  3254 => 1247,  3246 => 1245,  3242 => 1244,  3238 => 1242,  3219 => 1240,  3215 => 1239,  3211 => 1238,  3206 => 1237,  3201 => 1236,  3199 => 1235,  3190 => 1230,  3184 => 1229,  3182 => 1228,  3169 => 1227,  3164 => 1226,  3162 => 1225,  3157 => 1222,  3155 => 1221,  3151 => 1219,  3145 => 1215,  3139 => 1214,  3137 => 1213,  3131 => 1209,  3126 => 1207,  3121 => 1206,  3116 => 1204,  3111 => 1203,  3109 => 1202,  3105 => 1201,  3098 => 1199,  3087 => 1195,  3080 => 1193,  3076 => 1191,  3055 => 1186,  3046 => 1184,  3033 => 1180,  3024 => 1178,  3016 => 1176,  3012 => 1175,  3008 => 1173,  2989 => 1171,  2985 => 1170,  2981 => 1169,  2976 => 1168,  2971 => 1167,  2969 => 1166,  2960 => 1161,  2954 => 1160,  2952 => 1159,  2939 => 1158,  2934 => 1157,  2932 => 1156,  2927 => 1153,  2925 => 1152,  2917 => 1146,  2909 => 1143,  2902 => 1142,  2896 => 1141,  2894 => 1140,  2881 => 1138,  2872 => 1137,  2868 => 1136,  2864 => 1135,  2861 => 1134,  2857 => 1133,  2850 => 1129,  2846 => 1128,  2838 => 1123,  2830 => 1117,  2819 => 1114,  2815 => 1113,  2812 => 1112,  2808 => 1111,  2800 => 1106,  2796 => 1105,  2784 => 1098,  2777 => 1096,  2766 => 1088,  2759 => 1083,  2753 => 1082,  2751 => 1081,  2744 => 1079,  2736 => 1078,  2728 => 1077,  2720 => 1076,  2715 => 1075,  2710 => 1074,  2708 => 1073,  2699 => 1067,  2695 => 1066,  2683 => 1057,  2677 => 1056,  2669 => 1051,  2655 => 1040,  2648 => 1035,  2642 => 1034,  2640 => 1033,  2633 => 1031,  2622 => 1027,  2610 => 1022,  2601 => 1020,  2593 => 1019,  2588 => 1016,  2582 => 1015,  2573 => 1011,  2569 => 1009,  2560 => 1005,  2556 => 1003,  2553 => 1002,  2549 => 1001,  2543 => 998,  2538 => 997,  2533 => 996,  2531 => 995,  2522 => 989,  2518 => 988,  2514 => 987,  2510 => 986,  2506 => 985,  2492 => 974,  2485 => 969,  2479 => 968,  2477 => 967,  2470 => 965,  2459 => 961,  2447 => 956,  2438 => 954,  2430 => 953,  2422 => 952,  2419 => 951,  2413 => 950,  2405 => 948,  2397 => 946,  2394 => 945,  2390 => 944,  2386 => 943,  2381 => 942,  2376 => 941,  2374 => 940,  2365 => 934,  2361 => 933,  2357 => 932,  2353 => 931,  2349 => 930,  2345 => 929,  2331 => 918,  2324 => 913,  2318 => 912,  2316 => 911,  2309 => 909,  2304 => 906,  2298 => 905,  2289 => 901,  2285 => 899,  2276 => 895,  2272 => 893,  2269 => 892,  2265 => 891,  2259 => 888,  2254 => 885,  2248 => 884,  2239 => 880,  2235 => 878,  2226 => 874,  2222 => 872,  2219 => 871,  2215 => 870,  2209 => 867,  2204 => 866,  2199 => 865,  2197 => 864,  2188 => 858,  2184 => 857,  2168 => 848,  2166 => 847,  2163 => 846,  2157 => 843,  2154 => 842,  2142 => 838,  2138 => 836,  2133 => 835,  2131 => 834,  2125 => 831,  2115 => 826,  2108 => 821,  2102 => 820,  2100 => 819,  2093 => 817,  2083 => 816,  2078 => 813,  2070 => 807,  2062 => 801,  2059 => 800,  2051 => 794,  2043 => 788,  2041 => 787,  2033 => 784,  2023 => 783,  2018 => 780,  2010 => 774,  2002 => 768,  1999 => 767,  1991 => 761,  1983 => 755,  1981 => 754,  1973 => 751,  1963 => 750,  1958 => 747,  1950 => 741,  1942 => 735,  1939 => 734,  1931 => 728,  1923 => 722,  1921 => 721,  1913 => 718,  1908 => 715,  1901 => 711,  1897 => 710,  1893 => 708,  1886 => 704,  1882 => 703,  1878 => 701,  1876 => 700,  1868 => 697,  1858 => 696,  1850 => 695,  1845 => 692,  1842 => 691,  1836 => 690,  1827 => 686,  1823 => 684,  1814 => 680,  1810 => 678,  1808 => 677,  1805 => 676,  1801 => 675,  1798 => 674,  1796 => 673,  1788 => 670,  1783 => 669,  1779 => 668,  1770 => 662,  1766 => 661,  1762 => 660,  1758 => 659,  1754 => 658,  1750 => 657,  1744 => 654,  1741 => 653,  1738 => 652,  1722 => 645,  1714 => 642,  1711 => 641,  1708 => 640,  1692 => 633,  1684 => 630,  1681 => 629,  1678 => 628,  1662 => 621,  1654 => 618,  1651 => 617,  1648 => 616,  1635 => 612,  1628 => 610,  1625 => 609,  1622 => 608,  1609 => 604,  1602 => 602,  1599 => 601,  1596 => 600,  1583 => 596,  1576 => 594,  1573 => 593,  1571 => 592,  1564 => 587,  1557 => 583,  1553 => 582,  1549 => 580,  1542 => 576,  1538 => 575,  1534 => 573,  1532 => 572,  1524 => 569,  1517 => 567,  1510 => 565,  1504 => 564,  1498 => 563,  1492 => 562,  1487 => 561,  1482 => 560,  1479 => 559,  1477 => 558,  1469 => 553,  1466 => 552,  1460 => 551,  1458 => 550,  1447 => 549,  1442 => 548,  1440 => 547,  1427 => 537,  1420 => 532,  1414 => 531,  1412 => 530,  1405 => 528,  1402 => 527,  1387 => 525,  1378 => 524,  1374 => 523,  1368 => 522,  1360 => 521,  1355 => 520,  1350 => 519,  1348 => 518,  1339 => 512,  1335 => 511,  1324 => 502,  1315 => 500,  1308 => 499,  1304 => 498,  1300 => 497,  1293 => 495,  1287 => 491,  1278 => 489,  1271 => 488,  1267 => 487,  1263 => 486,  1256 => 484,  1250 => 480,  1242 => 478,  1237 => 477,  1232 => 476,  1227 => 474,  1222 => 473,  1220 => 472,  1217 => 471,  1213 => 470,  1208 => 468,  1202 => 464,  1193 => 462,  1186 => 461,  1182 => 460,  1178 => 459,  1171 => 457,  1165 => 453,  1156 => 451,  1149 => 450,  1145 => 449,  1141 => 448,  1134 => 446,  1127 => 442,  1121 => 441,  1114 => 439,  1110 => 437,  1104 => 433,  1096 => 430,  1091 => 428,  1086 => 427,  1081 => 425,  1076 => 424,  1074 => 423,  1070 => 421,  1066 => 420,  1060 => 417,  1057 => 416,  1055 => 415,  1051 => 413,  1046 => 410,  1039 => 407,  1036 => 406,  1028 => 404,  1021 => 403,  1016 => 402,  1014 => 401,  1009 => 399,  1006 => 398,  1004 => 397,  993 => 391,  988 => 389,  980 => 383,  973 => 379,  969 => 378,  965 => 376,  958 => 372,  954 => 371,  950 => 369,  948 => 368,  940 => 363,  932 => 357,  926 => 356,  917 => 352,  913 => 350,  904 => 346,  900 => 344,  897 => 343,  893 => 342,  885 => 337,  876 => 333,  871 => 331,  863 => 325,  857 => 324,  848 => 320,  844 => 318,  835 => 314,  831 => 312,  828 => 311,  824 => 310,  816 => 305,  805 => 299,  797 => 296,  789 => 293,  782 => 289,  770 => 282,  764 => 279,  758 => 275,  753 => 274,  750 => 273,  745 => 271,  742 => 270,  740 => 269,  737 => 268,  732 => 267,  729 => 266,  724 => 264,  721 => 263,  719 => 262,  714 => 260,  706 => 254,  700 => 253,  691 => 249,  687 => 247,  678 => 243,  674 => 241,  671 => 240,  667 => 239,  657 => 234,  649 => 228,  642 => 224,  638 => 223,  634 => 221,  627 => 217,  623 => 216,  619 => 214,  617 => 213,  609 => 208,  600 => 204,  593 => 202,  584 => 198,  579 => 196,  571 => 190,  565 => 189,  556 => 185,  552 => 183,  543 => 179,  539 => 177,  536 => 176,  532 => 175,  526 => 172,  520 => 169,  511 => 165,  506 => 163,  497 => 159,  492 => 157,  483 => 153,  476 => 151,  467 => 147,  460 => 145,  451 => 141,  444 => 139,  435 => 135,  428 => 133,  419 => 129,  412 => 127,  403 => 123,  396 => 121,  391 => 118,  385 => 117,  383 => 116,  377 => 115,  372 => 113,  366 => 109,  349 => 105,  340 => 103,  327 => 99,  320 => 97,  307 => 93,  300 => 91,  295 => 88,  289 => 87,  287 => 86,  277 => 85,  270 => 83,  255 => 79,  248 => 77,  243 => 74,  237 => 73,  235 => 72,  225 => 71,  218 => 69,  212 => 67,  208 => 66,  205 => 65,  188 => 63,  184 => 62,  177 => 57,  171 => 55,  169 => 54,  165 => 52,  159 => 50,  157 => 49,  152 => 47,  148 => 46,  144 => 45,  140 => 44,  136 => 43,  132 => 42,  128 => 41,  124 => 40,  120 => 39,  116 => 38,  112 => 37,  108 => 36,  101 => 34,  95 => 31,  90 => 28,  82 => 24,  80 => 23,  77 => 22,  69 => 18,  67 => 17,  62 => 14,  51 => 12,  47 => 11,  42 => 9,  36 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/* <button type="button" form="form-product" id="apply-btn" data-toggle="tooltip" title="{{ text_apply }}" class="btn btn-success"><i class="fa fa-repeat"></i></button>*/
/*         <button type="submit" form="form-product" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid"> {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/* */
/* 			{% if success %}*/
/* 			<div class="alert alert-success"><i class="fa fa-check-circle"></i> {{ success }}*/
/* 				<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 			</div>*/
/* 			{% endif %}*/
/* 			*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_form }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" data-action="{{ apply|raw }}" method="post" enctype="multipart/form-data" id="form-product" class="form-horizontal">*/
/*           <ul class="nav nav-tabs" id="apply-tab">*/
/*             <li class="active"><a href="#tab-general" data-toggle="tab">{{ tab_general }}</a></li>*/
/*             <li><a href="#tab-data" data-toggle="tab">{{ tab_data }}</a></li>*/
/*             <li><a href="#tab-links" data-toggle="tab">{{ tab_links }}</a></li>*/
/*             <li><a href="#tab-attribute" data-toggle="tab">{{ tab_attribute }}</a></li>*/
/*             <li><a href="#tab-option" data-toggle="tab">{{ tab_option }}</a></li>*/
/*             <li><a href="#tab-recurring" data-toggle="tab">{{ tab_recurring }}</a></li>*/
/*             <li><a href="#tab-discount" data-toggle="tab">{{ tab_discount }}</a></li>*/
/*             <li><a href="#tab-special" data-toggle="tab">{{ tab_special }}</a></li>*/
/*             <li><a href="#tab-image" data-toggle="tab">{{ tab_image }}</a></li>*/
/*             <li><a href="#tab-reward" data-toggle="tab">{{ tab_reward }}</a></li>*/
/*             <li><a href="#tab-seo" data-toggle="tab">{{ tab_seo }}</a></li>*/
/*             <li><a href="#tab-design" data-toggle="tab">{{ tab_design }}</a></li>*/
/* */
/* 			{% if module_customtabs %}*/
/* 				<li><a href="#tab-customtabmain" data-toggle="tab">{{ text_customtab }}</a></li>*/
/* 			{% endif %}*/
/* 			*/
/* */
/* 			{% if module_additionalfields %}*/
/* 				<li><a href="#tab-additionalfieldmain" data-toggle="tab">{{ text_additionalfield }}</a></li>*/
/* 			{% endif %}*/
/* 			*/
/*           </ul>*/
/*           <div class="tab-content">*/
/*             <div class="tab-pane active" id="tab-general">*/
/*               <ul class="nav nav-tabs" id="language">*/
/*                 {% for language in languages %}*/
/*                 <li><a href="#language{{ language.language_id }}" data-toggle="tab"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /> {{ language.name }}</a></li>*/
/*                 {% endfor %}*/
/*               </ul>*/
/*               <div class="tab-content">{% for language in languages %}*/
/*                 <div class="tab-pane" id="language{{ language.language_id }}">*/
/*                   <div class="form-group required">*/
/*                     <label class="col-sm-2 control-label" for="input-name{{ language.language_id }}">{{ entry_name }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="product_description[{{ language.language_id }}][name]" value="{{ product_description[language.language_id] ? product_description[language.language_id].name }}" placeholder="{{ entry_name }}" id="input-name{{ language.language_id }}" class="form-control" />*/
/*                       {% if error_name[language.language_id] %}*/
/*                       <div class="text-danger">{{ error_name[language.language_id] }}</div>*/
/*                       {% endif %} </div>*/
/*                   </div>*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-description{{ language.language_id }}">{{ entry_description }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <textarea name="product_description[{{ language.language_id }}][description]" placeholder="{{ entry_description }}" id="input-description{{ language.language_id }}" data-toggle="summernote" data-lang="{{ summernote }}" class="form-control">{{ product_description[language.language_id] ? product_description[language.language_id].description }}</textarea>*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group required">*/
/*                     <label class="col-sm-2 control-label" for="input-meta-title{{ language.language_id }}">{{ entry_meta_title }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="product_description[{{ language.language_id }}][meta_title]" value="{{ product_description[language.language_id] ? product_description[language.language_id].meta_title }}" placeholder="{{ entry_meta_title }}" id="input-meta-title{{ language.language_id }}" class="form-control" />*/
/*                       {% if error_meta_title[language.language_id] %}*/
/*                       <div class="text-danger">{{ error_meta_title[language.language_id] }}</div>*/
/*                       {% endif %} </div>*/
/*                   </div>*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-meta-description{{ language.language_id }}">{{ entry_meta_description }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <textarea name="product_description[{{ language.language_id }}][meta_description]" rows="5" placeholder="{{ entry_meta_description }}" id="input-meta-description{{ language.language_id }}" class="form-control">{{ product_description[language.language_id] ? product_description[language.language_id].meta_description }}</textarea>*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-meta-keyword{{ language.language_id }}">{{ entry_meta_keyword }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <textarea name="product_description[{{ language.language_id }}][meta_keyword]" rows="5" placeholder="{{ entry_meta_keyword }}" id="input-meta-keyword{{ language.language_id }}" class="form-control">{{ product_description[language.language_id] ? product_description[language.language_id].meta_keyword }}</textarea>*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-tag{{ language.language_id }}"><span data-toggle="tooltip" title="{{ help_tag }}">{{ entry_tag }}</span></label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="product_description[{{ language.language_id }}][tag]" value="{{ product_description[language.language_id] ? product_description[language.language_id].tag }}" placeholder="{{ entry_tag }}" id="input-tag{{ language.language_id }}" class="form-control" />*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 {% endfor %}</div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-data">*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-model">{{ entry_model }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="model" value="{{ model }}" placeholder="{{ entry_model }}" id="input-model" class="form-control" />*/
/*                   {% if error_model %}*/
/*                   <div class="text-danger">{{ error_model }}</div>*/
/*                   {% endif %}</div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-sku"><span data-toggle="tooltip" title="{{ help_sku }}">{{ entry_sku }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="sku" value="{{ sku }}" placeholder="{{ entry_sku }}" id="input-sku" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-upc"><span data-toggle="tooltip" title="{{ help_upc }}">{{ entry_upc }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="upc" value="{{ upc }}" placeholder="{{ entry_upc }}" id="input-upc" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-ean"><span data-toggle="tooltip" title="{{ help_ean }}">{{ entry_ean }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="ean" value="{{ ean }}" placeholder="{{ entry_ean }}" id="input-ean" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-jan"><span data-toggle="tooltip" title="{{ help_jan }}">{{ entry_jan }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="jan" value="{{ jan }}" placeholder="{{ entry_jan }}" id="input-jan" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-isbn"><span data-toggle="tooltip" title="{{ help_isbn }}">{{ entry_isbn }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="isbn" value="{{ isbn }}" placeholder="{{ entry_isbn }}" id="input-isbn" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-mpn"><span data-toggle="tooltip" title="{{ help_mpn }}">{{ entry_mpn }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="mpn" value="{{ mpn }}" placeholder="{{ entry_mpn }}" id="input-mpn" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-location">{{ entry_location }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="location" value="{{ location }}" placeholder="{{ entry_location }}" id="input-location" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-price">{{ entry_price }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="price" value="{{ price }}" placeholder="{{ entry_price }}" id="input-price" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-tax-class">{{ entry_tax_class }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="tax_class_id" id="input-tax-class" class="form-control">*/
/*                     <option value="0">{{ text_none }}</option>*/
/*                     */
/* */
/*                     {% for tax_class in tax_classes %}*/
/*                     {% if tax_class.tax_class_id == tax_class_id %}*/
/* */
/*                     */
/*                     <option value="{{ tax_class.tax_class_id }}" selected="selected">{{ tax_class.title }}</option>*/
/*                     */
/* */
/*                     {% else %}*/
/* */
/*                     */
/*                     <option value="{{ tax_class.tax_class_id }}">{{ tax_class.title }}</option>*/
/*                     */
/* */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/* */
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-quantity">{{ entry_quantity }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="quantity" value="{{ quantity }}" placeholder="{{ entry_quantity }}" id="input-quantity" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-minimum"><span data-toggle="tooltip" title="{{ help_minimum }}">{{ entry_minimum }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="minimum" value="{{ minimum }}" placeholder="{{ entry_minimum }}" id="input-minimum" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-subtract">{{ entry_subtract }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="subtract" id="input-subtract" class="form-control">*/
/*                     */
/* */
/*                     {% if subtract %}*/
/* */
/*                     */
/*                     <option value="1" selected="selected">{{ text_yes }}</option>*/
/*                     <option value="0">{{ text_no }}</option>*/
/*                     */
/* */
/*                     {% else %}*/
/* */
/*                     */
/*                     <option value="1">{{ text_yes }}</option>*/
/*                     <option value="0" selected="selected">{{ text_no }}</option>*/
/*                     */
/* */
/*                     {% endif %}*/
/* */
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-stock-status"><span data-toggle="tooltip" title="{{ help_stock_status }}">{{ entry_stock_status }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="stock_status_id" id="input-stock-status" class="form-control">*/
/*                     */
/* */
/*                     {% for stock_status in stock_statuses %}*/
/*                     {% if stock_status.stock_status_id == stock_status_id %}*/
/* */
/*                     */
/*                     <option value="{{ stock_status.stock_status_id }}" selected="selected">{{ stock_status.name }}</option>*/
/*                     */
/* */
/*                     {% else %}*/
/* */
/*                     */
/*                     <option value="{{ stock_status.stock_status_id }}">{{ stock_status.name }}</option>*/
/*                     */
/* */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/* */
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">{{ entry_shipping }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <label class="radio-inline"> {% if shipping %}*/
/*                     <input type="radio" name="shipping" value="1" checked="checked" />*/
/*                     {{ text_yes }}*/
/*                     {% else %}*/
/*                     <input type="radio" name="shipping" value="1" />*/
/*                     {{ text_yes }}*/
/*                     {% endif %} </label>*/
/*                   <label class="radio-inline"> {% if not shipping %}*/
/*                     <input type="radio" name="shipping" value="0" checked="checked" />*/
/*                     {{ text_no }}*/
/*                     {% else %}*/
/*                     <input type="radio" name="shipping" value="0" />*/
/*                     {{ text_no }}*/
/*                     {% endif %} </label>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-date-available">{{ entry_date_available }}</label>*/
/*                 <div class="col-sm-3">*/
/*                   <div class="input-group date">*/
/*                     <input type="text" name="date_available" value="{{ date_available }}" placeholder="{{ entry_date_available }}" data-date-format="YYYY-MM-DD" id="input-date-available" class="form-control" />*/
/*                     <span class="input-group-btn">*/
/*                     <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                     </span></div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-length">{{ entry_dimension }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="row">*/
/*                     <div class="col-sm-4">*/
/*                       <input type="text" name="length" value="{{ length }}" placeholder="{{ entry_length }}" id="input-length" class="form-control" />*/
/*                     </div>*/
/*                     <div class="col-sm-4">*/
/*                       <input type="text" name="width" value="{{ width }}" placeholder="{{ entry_width }}" id="input-width" class="form-control" />*/
/*                     </div>*/
/*                     <div class="col-sm-4">*/
/*                       <input type="text" name="height" value="{{ height }}" placeholder="{{ entry_height }}" id="input-height" class="form-control" />*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-length-class">{{ entry_length_class }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="length_class_id" id="input-length-class" class="form-control">*/
/*                     */
/* */
/*                     {% for length_class in length_classes %}*/
/*                     {% if length_class.length_class_id == length_class_id %}*/
/* */
/*                     */
/*                     <option value="{{ length_class.length_class_id }}" selected="selected">{{ length_class.title }}</option>*/
/*                     */
/* */
/*                     {% else %}*/
/* */
/*                     */
/*                     <option value="{{ length_class.length_class_id }}">{{ length_class.title }}</option>*/
/*                     */
/* */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/* */
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-weight">{{ entry_weight }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="weight" value="{{ weight }}" placeholder="{{ entry_weight }}" id="input-weight" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-weight-class">{{ entry_weight_class }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="weight_class_id" id="input-weight-class" class="form-control">*/
/*                     */
/* */
/*                     {% for weight_class in weight_classes %}*/
/*                     {% if weight_class.weight_class_id == weight_class_id %}*/
/* */
/*                     */
/*                     <option value="{{ weight_class.weight_class_id }}" selected="selected">{{ weight_class.title }}</option>*/
/*                     */
/* */
/*                     {% else %}*/
/* */
/*                     */
/*                     <option value="{{ weight_class.weight_class_id }}">{{ weight_class.title }}</option>*/
/*                     */
/* */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/* */
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="status" id="input-status" class="form-control">*/
/*                     */
/* */
/*                     {% if status %}*/
/* */
/*                     */
/*                     <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                     <option value="0">{{ text_disabled }}</option>*/
/*                     */
/* */
/*                     {% else %}*/
/* */
/*                     */
/*                     <option value="1">{{ text_enabled }}</option>*/
/*                     <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                     */
/* */
/*                     {% endif %}*/
/* */
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-sort-order">{{ entry_sort_order }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="sort_order" value="{{ sort_order }}" placeholder="{{ entry_sort_order }}" id="input-sort-order" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-links">*/
/* */
/* 			{% if module_sizechart %}*/
/* 				<div class="form-group">*/
/* 					<label class="col-sm-2 control-label" for="input-sizechart">{{ text_sizechart }}</label>*/
/* 					<div class="col-sm-10">*/
/* 						{% if product_sizechart %}*/
/* 						{% for sizechart in product_sizechart %}*/
/* 						<input type="text" name="sizechart" value="{{ sizechart.name }}" placeholder="{{ text_sizechart }}" id="input-sizechart" class="form-control" />*/
/* 						<input type="hidden" name="sizechart_id" value="{{ sizechart.sizechart_id }}" />*/
/* 						{% endfor %}*/
/* 						{% else %}*/
/* 						<input type="text" name="sizechart" value="" placeholder="{{ text_sizechart }}" id="input-sizechart" class="form-control" />*/
/* 						<input type="hidden" name="sizechart_id" value="" />*/
/* 						{% endif %}*/
/* 					</div>*/
/* 				</div>*/
/* 			{% endif %}*/
/* 			*/
/* */
/* 			{% if module_label %}*/
/* 				<div class="form-group">*/
/* 					<label class="col-sm-2 control-label">{{ text_labels }}</label>*/
/* 					<div class="col-sm-10">*/
/* 						<div class="well well-sm" style="height: 150px; overflow: auto;">*/
/* 							{% for label in labels %}*/
/* 							<div class="checkbox">*/
/* 								<label>*/
/* 									{% if label.label_id in product_label %}*/
/* 									<input type="checkbox" name="product_label[]" value="{{ label.label_id }}" checked="checked" />*/
/* 									{{ label.name }}*/
/* 									{% else %}*/
/* 									<input type="checkbox" name="product_label[]" value="{{ label.label_id }}" />*/
/* 									{{ label.name }}*/
/* 									{% endif %}*/
/* 								</label>*/
/* 							</div>*/
/* 							{% endfor %}*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			{% endif %}*/
/* 			*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-manufacturer"><span data-toggle="tooltip" title="{{ help_manufacturer }}">{{ entry_manufacturer }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="manufacturer" value="{{ manufacturer }}" placeholder="{{ entry_manufacturer }}" id="input-manufacturer" class="form-control" />*/
/*                   <input type="hidden" name="manufacturer_id" value="{{ manufacturer_id }}" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-category"><span data-toggle="tooltip" title="{{ help_category }}">{{ entry_category }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="category" value="" placeholder="{{ entry_category }}" id="input-category" class="form-control" />*/
/*                   <div id="product-category" class="well well-sm" style="height: 150px; overflow: auto;"> {% for product_category in product_categories %}*/
/*                     <div id="product-category{{ product_category.category_id }}"><i class="fa fa-minus-circle"></i> {{ product_category.name }}*/
/*                       <input type="hidden" name="product_category[]" value="{{ product_category.category_id }}" />*/
/*                     </div>*/
/*                     {% endfor %}</div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-filter"><span data-toggle="tooltip" title="{{ help_filter }}">{{ entry_filter }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="filter" value="" placeholder="{{ entry_filter }}" id="input-filter" class="form-control" />*/
/*                   <div id="product-filter" class="well well-sm" style="height: 150px; overflow: auto;"> {% for product_filter in product_filters %}*/
/*                     <div id="product-filter{{ product_filter.filter_id }}"><i class="fa fa-minus-circle"></i> {{ product_filter.name }}*/
/*                       <input type="hidden" name="product_filter[]" value="{{ product_filter.filter_id }}" />*/
/*                     </div>*/
/*                     {% endfor %}</div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">{{ entry_store }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="well well-sm" style="height: 150px; overflow: auto;"> {% for store in stores %}*/
/*                     <div class="checkbox">*/
/*                       <label> {% if store.store_id in product_store %}*/
/*                         <input type="checkbox" name="product_store[]" value="{{ store.store_id }}" checked="checked" />*/
/*                         {{ store.name }}*/
/*                         {% else %}*/
/*                         <input type="checkbox" name="product_store[]" value="{{ store.store_id }}" />*/
/*                         {{ store.name }}*/
/*                         {% endif %} </label>*/
/*                     </div>*/
/*                     {% endfor %}</div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-download"><span data-toggle="tooltip" title="{{ help_download }}">{{ entry_download }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="download" value="" placeholder="{{ entry_download }}" id="input-download" class="form-control" />*/
/*                   <div id="product-download" class="well well-sm" style="height: 150px; overflow: auto;"> {% for product_download in product_downloads %}*/
/*                     <div id="product-download{{ product_download.download_id }}"><i class="fa fa-minus-circle"></i> {{ product_download.name }}*/
/*                       <input type="hidden" name="product_download[]" value="{{ product_download.download_id }}" />*/
/*                     </div>*/
/*                     {% endfor %}</div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-related"><span data-toggle="tooltip" title="{{ help_related }}">{{ entry_related }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="related" value="" placeholder="{{ entry_related }}" id="input-related" class="form-control" />*/
/*                   <div id="product-related" class="well well-sm" style="height: 150px; overflow: auto;"> {% for product_related in product_relateds %}*/
/*                     <div id="product-related{{ product_related.product_id }}"><i class="fa fa-minus-circle"></i> {{ product_related.name }}*/
/*                       <input type="hidden" name="product_related[]" value="{{ product_related.product_id }}" />*/
/*                     </div>*/
/*                     {% endfor %}</div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-attribute">*/
/*               <div class="table-responsive">*/
/*                 <table id="attribute" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_attribute }}</td>*/
/*                       <td class="text-left">{{ entry_text }}</td>*/
/*                       <td></td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   */
/*                   {% set attribute_row = 0 %}*/
/*                   {% for product_attribute in product_attributes %}*/
/*                   <tr id="attribute-row{{ attribute_row }}">*/
/*                     <td class="text-left" style="width: 40%;"><input type="text" name="product_attribute[{{ attribute_row }}][name]" value="{{ product_attribute.name }}" placeholder="{{ entry_attribute }}" class="form-control" />*/
/*                       <input type="hidden" name="product_attribute[{{ attribute_row }}][attribute_id]" value="{{ product_attribute.attribute_id }}" /></td>*/
/*                     <td class="text-left">{% for language in languages %}*/
/*                       <div class="input-group"><span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span>*/
/*                         <textarea name="product_attribute[{{ attribute_row }}][product_attribute_description][{{ language.language_id }}][text]" rows="5" placeholder="{{ entry_text }}" class="form-control">{{ product_attribute.product_attribute_description[language.language_id] ? product_attribute.product_attribute_description[language.language_id].text }}</textarea>*/
/*                       </div>*/
/*                       {% endfor %}</td>*/
/*                     <td class="text-right"><button type="button" onclick="$('#attribute-row{{ attribute_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*                   </tr>*/
/*                   {% set attribute_row = attribute_row + 1 %}*/
/*                   {% endfor %}*/
/*                     </tbody>*/
/*                   */
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td colspan="2"></td>*/
/*                       <td class="text-right"><button type="button" onclick="addAttribute();" data-toggle="tooltip" title="{{ button_attribute_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-option">*/
/*               <div class="row">*/
/*                 <div class="col-sm-2">*/
/*                   <ul class="nav nav-pills nav-stacked" id="option">*/
/*                     {% set option_row = 0 %}*/
/*                     {% for product_option in product_options %}*/
/*                     <li><a href="#tab-option{{ option_row }}" data-toggle="tab"><i class="fa fa-minus-circle" onclick="$('a[href=\'#tab-option{{ option_row }}\']').parent().remove(); $('#tab-option{{ option_row }}').remove(); $('#option a:first').tab('show');"></i> {{ product_option.name }}</a></li>*/
/*                     {% set option_row = option_row + 1 %}*/
/*                     {% endfor %}*/
/*                     <li>*/
/*                       <input type="text" name="option" value="" placeholder="{{ entry_option }}" id="input-option" class="form-control" />*/
/*                     </li>*/
/*                   </ul>*/
/*                 </div>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="tab-content"> {% set option_row = 0 %}*/
/*                     {% set option_value_row = 0 %}*/
/*                     {% for product_option in product_options %}*/
/*                     <div class="tab-pane" id="tab-option{{ option_row }}">*/
/*                       <input type="hidden" name="product_option[{{ option_row }}][product_option_id]" value="{{ product_option.product_option_id }}" />*/
/*                       <input type="hidden" name="product_option[{{ option_row }}][name]" value="{{ product_option.name }}" />*/
/*                       <input type="hidden" name="product_option[{{ option_row }}][option_id]" value="{{ product_option.option_id }}" />*/
/*                       <input type="hidden" name="product_option[{{ option_row }}][type]" value="{{ product_option.type }}" />*/
/*                       <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-required{{ option_row }}">{{ entry_required }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <select name="product_option[{{ option_row }}][required]" id="input-required{{ option_row }}" class="form-control">*/
/*                             */
/* */
/*                             {% if product_option.required %}*/
/* */
/*                             */
/*                             <option value="1" selected="selected">{{ text_yes }}</option>*/
/*                             <option value="0">{{ text_no }}</option>*/
/*                             */
/* */
/*                             {% else %}*/
/* */
/*                             */
/*                             <option value="1">{{ text_yes }}</option>*/
/*                             <option value="0" selected="selected">{{ text_no }}</option>*/
/*                             */
/* */
/*                             {% endif %}*/
/* */
/*                           */
/*                           </select>*/
/*                         </div>*/
/*                       </div>*/
/*                       {% if product_option.type == 'text' %}*/
/*                       <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-value{{ option_row }}">{{ entry_option_value }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <input type="text" name="product_option[{{ option_row }}][value]" value="{{ product_option.value }}" placeholder="{{ entry_option_value }}" id="input-value{{ option_row }}" class="form-control" />*/
/*                         </div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if product_option.type == 'textarea' %}*/
/*                       <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-value{{ option_row }}">{{ entry_option_value }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <textarea name="product_option[{{ option_row }}][value]" rows="5" placeholder="{{ entry_option_value }}" id="input-value{{ option_row }}" class="form-control">{{ product_option.value }}</textarea>*/
/*                         </div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if product_option.type == 'file' %}*/
/*                       <div class="form-group" style="display: none;">*/
/*                         <label class="col-sm-2 control-label" for="input-value{{ option_row }}">{{ entry_option_value }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <input type="text" name="product_option[{{ option_row }}][value]" value="{{ product_option.value }}" placeholder="{{ entry_option_value }}" id="input-value{{ option_row }}" class="form-control" />*/
/*                         </div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if product_option.type == 'date' %}*/
/*                       <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-value{{ option_row }}">{{ entry_option_value }}</label>*/
/*                         <div class="col-sm-3">*/
/*                           <div class="input-group date">*/
/*                             <input type="text" name="product_option[{{ option_row }}][value]" value="{{ product_option.value }}" placeholder="{{ entry_option_value }}" data-date-format="YYYY-MM-DD" id="input-value{{ option_row }}" class="form-control" />*/
/*                             <span class="input-group-btn">*/
/*                             <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                             </span></div>*/
/*                         </div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if product_option.type == 'time' %}*/
/*                       <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-value{{ option_row }}">{{ entry_option_value }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <div class="input-group time">*/
/*                             <input type="text" name="product_option[{{ option_row }}][value]" value="{{ product_option.value }}" placeholder="{{ entry_option_value }}" data-date-format="HH:mm" id="input-value{{ option_row }}" class="form-control" />*/
/*                             <span class="input-group-btn">*/
/*                             <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                             </span></div>*/
/*                         </div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if product_option.type == 'datetime' %}*/
/*                       <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-value{{ option_row }}">{{ entry_option_value }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <div class="input-group datetime">*/
/*                             <input type="text" name="product_option[{{ option_row }}][value]" value="{{ product_option.value }}" placeholder="{{ entry_option_value }}" data-date-format="YYYY-MM-DD HH:mm" id="input-value{{ option_row }}" class="form-control" />*/
/*                             <span class="input-group-btn">*/
/*                             <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                             </span></div>*/
/*                         </div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if product_option.type == 'select' or product_option.type == 'radio' or product_option.type == 'checkbox' or product_option.type == 'image' %}*/
/*                       <div class="table-responsive">*/
/*                         <table id="option-value{{ option_row }}" class="table table-striped table-bordered table-hover">*/
/*                           <thead>*/
/*                             <tr>*/
/*                               <td class="text-left">{{ entry_option_value }}</td>*/
/*                               <td class="text-right">{{ entry_quantity }}</td>*/
/*                               <td class="text-left">{{ entry_subtract }}</td>*/
/*                               <td class="text-right">{{ entry_price }}</td>*/
/*                               <td class="text-right">{{ entry_option_points }}</td>*/
/*                               <td class="text-right">{{ entry_weight }}</td>*/
/*                               <td></td>*/
/*                             </tr>*/
/*                           </thead>*/
/*                           <tbody>*/
/*                           */
/*                           {% for product_option_value in product_option.product_option_value %}*/
/*                           <tr id="option-value-row{{ option_value_row }}">*/
/*                             <td class="text-left"><select name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][option_value_id]" class="form-control">*/
/*                                 */
/* */
/*                                   {% if option_values[product_option.option_id] %}*/
/* */
/*                                   {% for option_value in option_values[product_option.option_id] %}*/
/* */
/*                                   {% if option_value.option_value_id == product_option_value.option_value_id %}*/
/* */
/*                                 */
/*                                 <option value="{{ option_value.option_value_id }}" selected="selected">{{ option_value.name }}</option>*/
/*                                 */
/* */
/*                                   {% else %}*/
/* */
/*                                 */
/*                                 <option value="{{ option_value.option_value_id }}">{{ option_value.name }}</option>*/
/*                                 */
/* */
/*                                   {% endif %}*/
/*                                   {% endfor %}*/
/*                                   {% endif %}*/
/* */
/*                               */
/*                               </select>*/
/*                               <input type="hidden" name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][product_option_value_id]" value="{{ product_option_value.product_option_value_id }}" /></td>*/
/*                             <td class="text-right"><input type="text" name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][quantity]" value="{{ product_option_value.quantity }}" placeholder="{{ entry_quantity }}" class="form-control" /></td>*/
/*                             <td class="text-left"><select name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][subtract]" class="form-control">*/
/*                                 */
/* */
/*                                   {% if product_option_value.subtract %}*/
/* */
/*                                 */
/*                                 <option value="1" selected="selected">{{ text_yes }}</option>*/
/*                                 <option value="0">{{ text_no }}</option>*/
/*                                 */
/* */
/*                                   {% else %}*/
/* */
/*                                 */
/*                                 <option value="1">{{ text_yes }}</option>*/
/*                                 <option value="0" selected="selected">{{ text_no }}</option>*/
/*                                 */
/* */
/*                                   {% endif %}*/
/* */
/*                               */
/*                               </select></td>*/
/*                             <td class="text-right"><select name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][price_prefix]" class="form-control">*/
/*                                 */
/* */
/*                                   {% if product_option_value.price_prefix == '+' %}*/
/* */
/*                                 */
/*                                 <option value="+" selected="selected">+</option>*/
/*                                 */
/* */
/*                                   {% else %}*/
/* */
/*                                 */
/*                                 <option value="+">+</option>*/
/*                                 */
/* */
/*                                   {% endif %}*/
/*                                   {% if product_option_value.price_prefix == '-' %}*/
/* */
/*                                 */
/*                                 <option value="-" selected="selected">-</option>*/
/*                                 */
/* */
/*                                   {% else %}*/
/* */
/*                                 */
/*                                 <option value="-">-</option>*/
/*                                 */
/* */
/*                                   {% endif %}*/
/* */
/*                               */
/*                               </select>*/
/*                               <input type="text" name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][price]" value="{{ product_option_value.price }}" placeholder="{{ entry_price }}" class="form-control" /></td>*/
/*                             <td class="text-right"><select name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][points_prefix]" class="form-control">*/
/*                                 */
/* */
/*                                   {% if product_option_value.points_prefix == '+' %}*/
/* */
/*                                 */
/*                                 <option value="+" selected="selected">+</option>*/
/*                                 */
/* */
/*                                   {% else %}*/
/* */
/*                                 */
/*                                 <option value="+">+</option>*/
/*                                 */
/* */
/*                                   {% endif %}*/
/*                                   {% if product_option_value.points_prefix == '-' %}*/
/* */
/*                                 */
/*                                 <option value="-" selected="selected">-</option>*/
/*                                 */
/* */
/*                                   {% else %}*/
/* */
/*                                 */
/*                                 <option value="-">-</option>*/
/*                                 */
/* */
/*                                   {% endif %}*/
/* */
/*                               */
/*                               </select>*/
/*                               <input type="text" name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][points]" value="{{ product_option_value.points }}" placeholder="{{ entry_points }}" class="form-control" /></td>*/
/*                             <td class="text-right"><select name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][weight_prefix]" class="form-control">*/
/*                                 */
/* */
/*                                   {% if product_option_value.weight_prefix == '+' %}*/
/* */
/*                                 */
/*                                 <option value="+" selected="selected">+</option>*/
/*                                 */
/* */
/*                                   {% else %}*/
/* */
/*                                 */
/*                                 <option value="+">+</option>*/
/*                                 */
/* */
/*                                   {% endif %}*/
/*                                   {% if product_option_value.weight_prefix == '-' %}*/
/* */
/*                                 */
/*                                 <option value="-" selected="selected">-</option>*/
/*                                 */
/* */
/*                                   {% else %}*/
/* */
/*                                 */
/*                                 <option value="-">-</option>*/
/*                                 */
/* */
/*                                   {% endif %}*/
/* */
/*                               */
/*                               </select>*/
/*                               <input type="text" name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][weight]" value="{{ product_option_value.weight }}" placeholder="{{ entry_weight }}" class="form-control" /></td>*/
/*                             <td class="text-right"><button type="button" onclick="$(this).tooltip('destroy');$('#option-value-row{{ option_value_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*                           </tr>*/
/*                           {% set option_value_row = option_value_row + 1 %}*/
/*                           {% endfor %}*/
/*                             </tbody>*/
/*                           */
/*                           <tfoot>*/
/*                             <tr>*/
/*                               <td colspan="6"></td>*/
/*                               <td class="text-left"><button type="button" onclick="addOptionValue('{{ option_row }}');" data-toggle="tooltip" title="{{ button_option_value_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                             </tr>*/
/*                           </tfoot>*/
/*                         </table>*/
/*                       </div>*/
/*                       <select id="option-values{{ option_row }}" style="display: none;">*/
/*                         */
/* */
/*                         {% if option_values[product_option.option_id] %}*/
/*                         {% for option_value in option_values[product_option.option_id] %}*/
/* */
/*                         */
/*                         <option value="{{ option_value.option_value_id }}">{{ option_value.name }}</option>*/
/*                         */
/* */
/*                         {% endfor %}*/
/*                         {% endif %}*/
/* */
/*                       */
/*                       </select>*/
/*                       {% endif %} </div>*/
/*                     {% set option_row = option_row + 1 %}*/
/*                     {% endfor %} </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-recurring">*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_recurring }}</td>*/
/*                       <td class="text-left">{{ entry_customer_group }}</td>*/
/*                       <td class="text-left"></td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   */
/*                   {% set recurring_row = 0 %}*/
/*                   {% for product_recurring in product_recurrings %}*/
/*                   <tr id="recurring-row{{ recurring_row }}">*/
/*                     <td class="text-left"><select name="product_recurring[{{ recurring_row }}][recurring_id]" class="form-control">*/
/*                         */
/* */
/*                           {% for recurring in recurrings %}*/
/*                           {% if recurring.recurring_id == product_recurring.recurring_id %}*/
/* */
/*                         */
/*                         <option value="{{ recurring.recurring_id }}" selected="selected">{{ recurring.name }}</option>*/
/*                         */
/* */
/*                           {% else %}*/
/* */
/*                         */
/*                         <option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>*/
/*                         */
/* */
/*                           {% endif %}*/
/*                           {% endfor %}*/
/* */
/*                       */
/*                       </select></td>*/
/*                     <td class="text-left"><select name="product_recurring[{{ recurring_row }}][customer_group_id]" class="form-control">*/
/*                         */
/* */
/*                           {% for customer_group in customer_groups %}*/
/*                           {% if customer_group.customer_group_id == product_recurring.customer_group_id %}*/
/* */
/*                         */
/*                         <option value="{{ customer_group.customer_group_id }}" selected="selected">{{ customer_group.name }}</option>*/
/*                         */
/* */
/*                           {% else %}*/
/* */
/*                         */
/*                         <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/*                         */
/* */
/*                           {% endif %}*/
/*                           {% endfor %}*/
/* */
/*                       */
/*                       </select></td>*/
/*                     <td class="text-left"><button type="button" onclick="$('#recurring-row{{ recurring_row }}').remove()" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*                   </tr>*/
/*                   {% set recurring_row = recurring_row + 1 %}*/
/*                   {% endfor %}*/
/*                     </tbody>*/
/*                   */
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td colspan="2"></td>*/
/*                       <td class="text-left"><button type="button" onclick="addRecurring()" data-toggle="tooltip" title="{{ button_recurring_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-discount">*/
/*               <div class="table-responsive">*/
/*                 <table id="discount" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_customer_group }}</td>*/
/*                       <td class="text-right">{{ entry_quantity }}</td>*/
/*                       <td class="text-right">{{ entry_priority }}</td>*/
/*                       <td class="text-right">{{ entry_price }}</td>*/
/*                       <td class="text-left">{{ entry_date_start }}</td>*/
/*                       <td class="text-left">{{ entry_date_end }}</td>*/
/*                       <td></td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   */
/*                   {% set discount_row = 0 %}*/
/*                   {% for product_discount in product_discounts %}*/
/*                   <tr id="discount-row{{ discount_row }}">*/
/*                     <td class="text-left"><select name="product_discount[{{ discount_row }}][customer_group_id]" class="form-control">*/
/*                         {% for customer_group in customer_groups %}*/
/*                         {% if customer_group.customer_group_id == product_discount.customer_group_id %}*/
/*                         <option value="{{ customer_group.customer_group_id }}" selected="selected">{{ customer_group.name }}</option>*/
/*                         {% else %}*/
/*                         <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/*                         {% endif %}*/
/*                         {% endfor %}*/
/*                       </select></td>*/
/*                     <td class="text-right"><input type="text" name="product_discount[{{ discount_row }}][quantity]" value="{{ product_discount.quantity }}" placeholder="{{ entry_quantity }}" class="form-control" /></td>*/
/*                     <td class="text-right"><input type="text" name="product_discount[{{ discount_row }}][priority]" value="{{ product_discount.priority }}" placeholder="{{ entry_priority }}" class="form-control" /></td>*/
/*                     <td class="text-right"><input type="text" name="product_discount[{{ discount_row }}][price]" value="{{ product_discount.price }}" placeholder="{{ entry_price }}" class="form-control" /></td>*/
/*                     <td class="text-left" style="width: 20%;"><div class="input-group date">*/
/*                         <input type="text" name="product_discount[{{ discount_row }}][date_start]" value="{{ product_discount.date_start }}" placeholder="{{ entry_date_start }}" data-date-format="YYYY-MM-DD" class="form-control" />*/
/*                         <span class="input-group-btn">*/
/*                         <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                         </span></div></td>*/
/*                     <td class="text-left" style="width: 20%;"><div class="input-group date">*/
/*                         <input type="text" name="product_discount[{{ discount_row }}][date_end]" value="{{ product_discount.date_end }}" placeholder="{{ entry_date_end }}" data-date-format="YYYY-MM-DD" class="form-control" />*/
/*                         <span class="input-group-btn">*/
/*                         <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                         </span></div></td>*/
/*                     <td class="text-left"><button type="button" onclick="$('#discount-row{{ discount_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*                   </tr>*/
/*                   {% set discount_row = discount_row + 1 %}*/
/*                   {% endfor %}*/
/*                     </tbody>*/
/*                   */
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td colspan="6"></td>*/
/*                       <td class="text-left"><button type="button" onclick="addDiscount();" data-toggle="tooltip" title="{{ button_discount_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-special">*/
/*               <div class="table-responsive">*/
/*                 <table id="special" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_customer_group }}</td>*/
/*                       <td class="text-right">{{ entry_priority }}</td>*/
/*                       <td class="text-right">{{ entry_price }}</td>*/
/*                       <td class="text-left">{{ entry_date_start }}</td>*/
/*                       <td class="text-left">{{ entry_date_end }}</td>*/
/*                       <td></td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   */
/*                   {% set special_row = 0 %}*/
/*                   {% for product_special in product_specials %}*/
/*                   <tr id="special-row{{ special_row }}">*/
/*                     <td class="text-left"><select name="product_special[{{ special_row }}][customer_group_id]" class="form-control">*/
/*                         */
/* */
/*                           {% for customer_group in customer_groups %}*/
/*                           {% if customer_group.customer_group_id == product_special.customer_group_id %}*/
/* */
/*                         */
/*                         <option value="{{ customer_group.customer_group_id }}" selected="selected">{{ customer_group.name }}</option>*/
/*                         */
/* */
/*                           {% else %}*/
/* */
/*                         */
/*                         <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/*                         */
/* */
/*                           {% endif %}*/
/*                           {% endfor %}*/
/* */
/*                       */
/*                       </select></td>*/
/*                     <td class="text-right"><input type="text" name="product_special[{{ special_row }}][priority]" value="{{ product_special.priority }}" placeholder="{{ entry_priority }}" class="form-control" /></td>*/
/*                     <td class="text-right"><input type="text" name="product_special[{{ special_row }}][price]" value="{{ product_special.price }}" placeholder="{{ entry_price }}" class="form-control" /></td>*/
/*                     <td class="text-left" style="width: 20%;"><div class="input-group date">*/
/*                         <input type="text" name="product_special[{{ special_row }}][date_start]" value="{{ product_special.date_start }}" placeholder="{{ entry_date_start }}" data-date-format="YYYY-MM-DD" class="form-control" />*/
/*                         <span class="input-group-btn">*/
/*                         <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                         </span></div></td>*/
/*                     <td class="text-left" style="width: 20%;"><div class="input-group date">*/
/*                         <input type="text" name="product_special[{{ special_row }}][date_end]" value="{{ product_special.date_end }}" placeholder="{{ entry_date_end }}" data-date-format="YYYY-MM-DD" class="form-control" />*/
/*                         <span class="input-group-btn">*/
/*                         <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                         </span></div></td>*/
/*                     <td class="text-left"><button type="button" onclick="$('#special-row{{ special_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*                   </tr>*/
/*                   {% set special_row = special_row + 1 %}*/
/*                   {% endfor %}*/
/*                     </tbody>*/
/*                   */
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td colspan="5"></td>*/
/*                       <td class="text-left"><button type="button" onclick="addSpecial();" data-toggle="tooltip" title="{{ button_special_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-image">*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_image }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     <tr>*/
/*                       <td class="text-left"><a href="" id="thumb-image" data-toggle="image" class="img-thumbnail"><img src="{{ thumb }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a>*/
/*                         <input type="hidden" name="image" value="{{ image }}" id="input-image" /></td>*/
/*                     </tr>*/
/*                   </tbody>*/
/*                 </table>*/
/*               </div>*/
/*               <div class="table-responsive">*/
/*                 <table id="images" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_additional_image }}</td>*/
/*                       <td class="text-right">{{ entry_sort_order }}</td>*/
/*                       <td></td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   */
/*                   {% set image_row = 0 %}*/
/*                   {% for product_image in product_images %}*/
/*                   <tr id="image-row{{ image_row }}">*/
/*                     <td class="text-left"><a href="" id="thumb-image{{ image_row }}" data-toggle="image" class="img-thumbnail"><img src="{{ product_image.thumb }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a>*/
/*                       <input type="hidden" name="product_image[{{ image_row }}][image]" value="{{ product_image.image }}" id="input-image{{ image_row }}" /></td>*/
/*                     <td class="text-right"><input type="text" name="product_image[{{ image_row }}][sort_order]" value="{{ product_image.sort_order }}" placeholder="{{ entry_sort_order }}" class="form-control" /></td>*/
/*                     <td class="text-left"><button type="button" onclick="$('#image-row{{ image_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*                   </tr>*/
/*                   {% set image_row = image_row + 1 %}*/
/*                   {% endfor %}*/
/*                     </tbody>*/
/*                   */
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td colspan="2"></td>*/
/*                       <td class="text-left"><button type="button" onclick="addImage();" data-toggle="tooltip" title="{{ button_image_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-reward">*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-points"><span data-toggle="tooltip" title="{{ help_points }}">{{ entry_points }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="points" value="{{ points }}" placeholder="{{ entry_points }}" id="input-points" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_customer_group }}</td>*/
/*                       <td class="text-right">{{ entry_reward }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   */
/*                   {% for customer_group in customer_groups %}*/
/*                   <tr>*/
/*                     <td class="text-left">{{ customer_group.name }}</td>*/
/*                     <td class="text-right"><input type="text" name="product_reward[{{ customer_group.customer_group_id }}][points]" value="{{ product_reward[customer_group.customer_group_id] ? product_reward[customer_group.customer_group_id].points }}" class="form-control" /></td>*/
/*                   </tr>*/
/*                   {% endfor %}*/
/*                     </tbody>*/
/*                   */
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-seo">*/
/*               <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_keyword }}</div>            */
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_store }}</td>*/
/* 		      <td class="text-left">{{ entry_keyword }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   {% for store in stores %}*/
/*                   <tr>*/
/*                     <td class="text-left">{{ store.name }}</td>*/
/*                     <td class="text-left">{% for language in languages %}*/
/*                       <div class="input-group"><span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span>*/
/*                         <input type="text" name="product_seo_url[{{ store.store_id }}][{{ language.language_id }}]" value="{% if product_seo_url[store.store_id][language.language_id] %}{{ product_seo_url[store.store_id][language.language_id] }}{% endif %}" placeholder="{{ entry_keyword }}" class="form-control" />*/
/*                       </div>*/
/*                       {% if error_keyword[store.store_id][language.language_id] %}*/
/*                       <div class="text-danger">{{ error_keyword[store.store_id][language.language_id] }}</div>*/
/*                       {% endif %} */
/*                       {% endfor %}</td>*/
/*                   </tr>*/
/*                   {% endfor %}*/
/*                     </tbody>*/
/*                   */
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/* */
/* 			{% if module_additionalfields %}*/
/* 				<div class="tab-pane" id="tab-additionalfieldmain">*/
/* 					<div class="col-sm-2">*/
/* 						<ul class="nav nav-pills nav-stacked" id="additionalfield">*/
/* 							{% set additionalfield_row = 0 %}*/
/* 							{% for product_additionalfield in product_additionalfields %}*/
/* 							<li><a href="#tab-additionalfield{{ additionalfield_row }}" data-toggle="tab"><i class="fa fa-minus-circle" onclick="$('a[href=\'#tab-additionalfield{{ additionalfield_row }}\']').parent().remove(); $('#tab-additionalfield{{ additionalfield_row }}').remove(); $('#additionalfield a:first').tab('show');"></i> {{ text_additionalfield }} {{ additionalfield_row }}</a></li>*/
/* 							{% set additionalfield_row = additionalfield_row + 1 %}*/
/* 							{% endfor %}*/
/* 							<li id="additionalfield-add"><a onclick="addadditionalfield();"><i class="fa fa-plus-circle"></i> {{ text_add_additionalfield }}</a></li>*/
/* 						</ul>*/
/* 					</div>*/
/* 					<div class="col-sm-10">*/
/* 						<div class="tab-content tab-content2">*/
/* 							{% set additionalfield_row = 0 %}*/
/* 							{% for product_additionalfield in product_additionalfields %}*/
/* 							<div class="tab-pane" id="tab-additionalfield{{ additionalfield_row }}">*/
/* 								<ul class="nav nav-tabs" id="clanguage{{ additionalfield_row }}">*/
/* 									{% for language in languages %}*/
/* 									<li><a href="#tab-additionalfield{{additionalfield_row }}-language{{ language.language_id }}" data-toggle="tab"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" />  {{ language.name }}</a></li>*/
/* 									{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 									{% for language in languages %}*/
/* 										<div class="tab-pane" id="tab-additionalfield{{additionalfield_row }}-language{{ language.language_id }}">*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-2 control-label" for="input-heading{{additionalfield_row }}-language{{ language.language_id }}">{{ text_additionalfield_title }}</label>*/
/* 												<div class="col-sm-10">*/
/* 													<input type="text" name="product_additionalfield[{{additionalfield_row }}][product_additionalfield_text][{{ language.language_id }}][title]" placeholder="{{ text_additionalfield_title }}" value="{{ product_additionalfield.product_additionalfield_text[language.language_id] ? product_additionalfield.product_additionalfield_text[language.language_id].title }}" class="form-control"/>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-2 control-label" for="input-text{{additionalfield_row }}-language{{ language.language_id }}">{{ entry_text }}</label>*/
/* 												<div class="col-sm-10">*/
/* 													<input type="text" name="product_additionalfield[{{additionalfield_row }}][product_additionalfield_text][{{ language.language_id }}][text]" value="{{ product_additionalfield.product_additionalfield_text[language.language_id] ? product_additionalfield.product_additionalfield_text[language.language_id].text }}" placeholder="{{ entry_text }}" id="input-text{{additionalfield_row }}-language{{ language.language_id }}" class="form-control"/>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									{% endfor %}*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="col-sm-2 control-label" for="input-sort_order{{ additionalfield_row }}">{{ entry_sort_order }}</label>*/
/* 									<div class="col-sm-10">*/
/* 										<input type="text" name="product_additionalfield[{{ additionalfield_row }}][sort_order]" value="{{ product_additionalfield.sort_order }}" placeholder="{{ entry_sort_order }}" class="form-control" />*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="col-sm-2 control-label" for="input-status{{ additionalfield_row }}">{{ entry_status }}</label>*/
/* 									<div class="col-sm-10">*/
/* 										<select name="product_additionalfield[{{ additionalfield_row }}][status]" id="input-status" class="form-control">*/
/* 											{% if product_additionalfield.status %}*/
/* 											<option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 											<option value="0">{{ text_disabled }}</option>*/
/* 											{% else %}*/
/* 											<option value="1">{{ text_enabled }}</option>*/
/* 											<option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 											{% endif %}*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							{% set additionalfield_row = additionalfield_row + 1 %}*/
/* 							{% endfor %}*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			{% endif %}*/
/* 			*/
/* */
/* 			{% if module_customtabs %}*/
/* 				<div class="tab-pane" id="tab-customtabmain">*/
/* 					<div class="col-sm-2">*/
/* 						<ul class="nav nav-pills nav-stacked" id="customtab">*/
/* 							{% set customtab_row = 0 %}*/
/* 							{% for product_customtab in product_customtabs %}*/
/* 							<li><a href="#tab-customtab{{ customtab_row }}" data-toggle="tab"><i class="fa fa-minus-circle" onclick="$('a[href=\'#tab-customtab{{ customtab_row }}\']').parent().remove(); $('#tab-customtab{{ customtab_row }}').remove(); $('#customtab a:first').tab('show');"></i> {{ text_customtab }} {{ customtab_row }}</a></li>*/
/* 							{% set customtab_row = customtab_row + 1 %}*/
/* 							{% endfor %}*/
/* 							<li id="customtab-add"><a onclick="addCustomtab();"><i class="fa fa-plus-circle"></i> {{ text_add_tab }}</a></li>*/
/* 						</ul>*/
/* 					</div>*/
/* 					<div class="col-sm-10">*/
/* 						<div class="tab-content tab-content2">*/
/* 							{% set customtab_row = 0 %}*/
/* 							{% for product_customtab in product_customtabs %}*/
/* 							<div class="tab-pane" id="tab-customtab{{ customtab_row }}">*/
/* 								<ul class="nav nav-tabs" id="clanguage{{ customtab_row }}">*/
/* 									{% for language in languages %}*/
/* 									<li><a href="#tab-customtab{{customtab_row }}-language{{ language.language_id }}" data-toggle="tab"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" />  {{ language.name }}</a></li>*/
/* 									{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 									{% for language in languages %}*/
/* 										<div class="tab-pane" id="tab-customtab{{customtab_row }}-language{{ language.language_id }}">*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-2 control-label" for="input-heading{{customtab_row }}-language{{ language.language_id }}">{{ text_tab_title }}</label>*/
/* 												<div class="col-sm-10">*/
/* 													<input type="text" name="product_customtab[{{customtab_row }}][product_customtab_description][{{ language.language_id }}][title]" placeholder="{{ text_tab_title }}" value="{{ product_customtab.product_customtab_description[language.language_id] ? product_customtab.product_customtab_description[language.language_id].title }}" class="form-control"/>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-2 control-label" for="input-description{{customtab_row }}-language{{ language.language_id }}">{{ entry_description }}</label>*/
/* 												<div class="col-sm-10">*/
/* 													<textarea name="product_customtab[{{customtab_row }}][product_customtab_description][{{ language.language_id }}][description]" placeholder="{{ entry_description }}" id="input-description{{customtab_row }}-language{{ language.language_id }}" class="form-control">{{ product_customtab.product_customtab_description[language.language_id] ? product_customtab.product_customtab_description[language.language_id].description }}</textarea>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									{% endfor %}*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="col-sm-2 control-label" for="input-sort_order{{ customtab_row }}">{{ entry_sort_order }}</label>*/
/* 									<div class="col-sm-10">*/
/* 										<input type="text" name="product_customtab[{{ customtab_row }}][sort_order]" value="{{ product_customtab.sort_order }}" placeholder="{{ entry_sort_order }}" class="form-control" />*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="col-sm-2 control-label" for="input-status{{ customtab_row }}">{{ entry_status }}</label>*/
/* 									<div class="col-sm-10">*/
/* 										<select name="product_customtab[{{ customtab_row }}][status]" id="input-status" class="form-control">*/
/* 											{% if product_customtab.status %}*/
/* 											<option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 											<option value="0">{{ text_disabled }}</option>*/
/* 											{% else %}*/
/* 											<option value="1">{{ text_enabled }}</option>*/
/* 											<option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 											{% endif %}*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							{% set customtab_row = customtab_row + 1 %}*/
/* 							{% endfor %}*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			{% endif %}*/
/* 			*/
/*             <div class="tab-pane" id="tab-design">*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_store }}</td>*/
/*                       <td class="text-left">{{ entry_layout }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   {% for store in stores %}*/
/*                   <tr>*/
/*                     <td class="text-left">{{ store.name }}</td>*/
/*                     <td class="text-left"><select name="product_layout[{{ store.store_id }}]" class="form-control">*/
/*                         <option value=""></option>*/
/*                         */
/* */
/*                           {% for layout in layouts %}*/
/*                           {% if product_layout[store.store_id] and product_layout[store.store_id] == layout.layout_id %}*/
/* */
/*                         */
/*                         <option value="{{ layout.layout_id }}" selected="selected">{{ layout.name }}</option>*/
/*                         */
/* */
/*                           {% else %}*/
/* */
/*                         */
/*                         <option value="{{ layout.layout_id }}">{{ layout.name }}</option>*/
/*                         */
/* */
/*                           {% endif %}*/
/*                           {% endfor %}*/
/* */
/*                       */
/*                       </select></td>*/
/*                   </tr>*/
/*                   {% endfor %}*/
/*                   </tbody>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <link href="view/javascript/codemirror/lib/codemirror.css" rel="stylesheet" />*/
/*   <link href="view/javascript/codemirror/theme/monokai.css" rel="stylesheet" />*/
/*   <script type="text/javascript" src="view/javascript/codemirror/lib/codemirror.js"></script> */
/*   <script type="text/javascript" src="view/javascript/codemirror/lib/xml.js"></script> */
/*   <script type="text/javascript" src="view/javascript/codemirror/lib/formatting.js"></script> */
/*   <script type="text/javascript" src="view/javascript/summernote/summernote.js"></script>*/
/*   <link href="view/javascript/summernote/summernote.css" rel="stylesheet" />*/
/*   <script type="text/javascript" src="view/javascript/summernote/summernote-image-attributes.js"></script> */
/*   <script type="text/javascript" src="view/javascript/summernote/opencart.js"></script> */
/*   <script type="text/javascript"><!--*/
/* // Manufacturer*/
/* $('input[name=\'manufacturer\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/manufacturer/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				json.unshift({*/
/* 					manufacturer_id: 0,*/
/* 					name: '{{ text_none }}'*/
/* 				});*/
/* */
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['manufacturer_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'manufacturer\']').val(item['label']);*/
/* 		$('input[name=\'manufacturer_id\']').val(item['value']);*/
/* 	}*/
/* });*/
/* */
/* // Category*/
/* $('input[name=\'category\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/category/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['category_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'category\']').val('');*/
/* */
/* 		$('#product-category' + item['value']).remove();*/
/* */
/* 		$('#product-category').append('<div id="product-category' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="product_category[]" value="' + item['value'] + '" /></div>');*/
/* 	}*/
/* });*/
/* */
/* $('#product-category').delegate('.fa-minus-circle', 'click', function() {*/
/* 	$(this).parent().remove();*/
/* });*/
/* */
/* // Filter*/
/* $('input[name=\'filter\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/filter/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['filter_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'filter\']').val('');*/
/* */
/* 		$('#product-filter' + item['value']).remove();*/
/* */
/* 		$('#product-filter').append('<div id="product-filter' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="product_filter[]" value="' + item['value'] + '" /></div>');*/
/* 	}*/
/* });*/
/* */
/* $('#product-filter').delegate('.fa-minus-circle', 'click', function() {*/
/* 	$(this).parent().remove();*/
/* });*/
/* */
/* // Downloads*/
/* $('input[name=\'download\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/download/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['download_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'download\']').val('');*/
/* */
/* 		$('#product-download' + item['value']).remove();*/
/* */
/* 		$('#product-download').append('<div id="product-download' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="product_download[]" value="' + item['value'] + '" /></div>');*/
/* 	}*/
/* });*/
/* */
/* $('#product-download').delegate('.fa-minus-circle', 'click', function() {*/
/* 	$(this).parent().remove();*/
/* });*/
/* */
/* // Related*/
/* $('input[name=\'related\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/product/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['product_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'related\']').val('');*/
/* */
/* 		$('#product-related' + item['value']).remove();*/
/* */
/* 		$('#product-related').append('<div id="product-related' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="product_related[]" value="' + item['value'] + '" /></div>');*/
/* 	}*/
/* });*/
/* */
/* $('#product-related').delegate('.fa-minus-circle', 'click', function() {*/
/* 	$(this).parent().remove();*/
/* });*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* var attribute_row = {{ attribute_row }};*/
/* */
/* function addAttribute() {*/
/*     html  = '<tr id="attribute-row' + attribute_row + '">';*/
/* 	html += '  <td class="text-left" style="width: 20%;"><input type="text" name="product_attribute[' + attribute_row + '][name]" value="" placeholder="{{ entry_attribute }}" class="form-control" /><input type="hidden" name="product_attribute[' + attribute_row + '][attribute_id]" value="" /></td>';*/
/* 	html += '  <td class="text-left">';*/
/* 	{% for language in languages %}*/
/* 	html += '<div class="input-group"><span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span><textarea name="product_attribute[' + attribute_row + '][product_attribute_description][{{ language.language_id }}][text]" rows="5" placeholder="{{ entry_text }}" class="form-control"></textarea></div>';*/
/*     {% endfor %}*/
/* 	html += '  </td>';*/
/* 	html += '  <td class="text-right"><button type="button" onclick="$(\'#attribute-row' + attribute_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/*     html += '</tr>';*/
/* */
/* 	$('#attribute tbody').append(html);*/
/* */
/* 	attributeautocomplete(attribute_row);*/
/* */
/* 	attribute_row++;*/
/* }*/
/* */
/* function attributeautocomplete(attribute_row) {*/
/* 	$('input[name=\'product_attribute[' + attribute_row + '][name]\']').autocomplete({*/
/* 		'source': function(request, response) {*/
/* 			$.ajax({*/
/* 				url: 'index.php?route=catalog/attribute/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 				dataType: 'json',*/
/* 				success: function(json) {*/
/* 					response($.map(json, function(item) {*/
/* 						return {*/
/* 							category: item.attribute_group,*/
/* 							label: item.name,*/
/* 							value: item.attribute_id*/
/* 						}*/
/* 					}));*/
/* 				}*/
/* 			});*/
/* 		},*/
/* 		'select': function(item) {*/
/* 			$('input[name=\'product_attribute[' + attribute_row + '][name]\']').val(item['label']);*/
/* 			$('input[name=\'product_attribute[' + attribute_row + '][attribute_id]\']').val(item['value']);*/
/* 		}*/
/* 	});*/
/* }*/
/* */
/* $('#attribute tbody tr').each(function(index, element) {*/
/* 	attributeautocomplete(index);*/
/* });*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* var option_row = {{ option_row }};*/
/* */
/* $('input[name=\'option\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/option/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						category: item['category'],*/
/* 						label: item['name'],*/
/* 						value: item['option_id'],*/
/* 						type: item['type'],*/
/* 						option_value: item['option_value']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		html  = '<div class="tab-pane" id="tab-option' + option_row + '">';*/
/* 		html += '	<input type="hidden" name="product_option[' + option_row + '][product_option_id]" value="" />';*/
/* 		html += '	<input type="hidden" name="product_option[' + option_row + '][name]" value="' + item['label'] + '" />';*/
/* 		html += '	<input type="hidden" name="product_option[' + option_row + '][option_id]" value="' + item['value'] + '" />';*/
/* 		html += '	<input type="hidden" name="product_option[' + option_row + '][type]" value="' + item['type'] + '" />';*/
/* */
/* 		html += '	<div class="form-group">';*/
/* 		html += '	  <label class="col-sm-2 control-label" for="input-required' + option_row + '">{{ entry_required }}</label>';*/
/* 		html += '	  <div class="col-sm-10"><select name="product_option[' + option_row + '][required]" id="input-required' + option_row + '" class="form-control">';*/
/* 		html += '	      <option value="1">{{ text_yes }}</option>';*/
/* 		html += '	      <option value="0">{{ text_no }}</option>';*/
/* 		html += '	  </select></div>';*/
/* 		html += '	</div>';*/
/* */
/* 		if (item['type'] == 'text') {*/
/* 			html += '	<div class="form-group">';*/
/* 			html += '	  <label class="col-sm-2 control-label" for="input-value' + option_row + '">{{ entry_option_value }}</label>';*/
/* 			html += '	  <div class="col-sm-10"><input type="text" name="product_option[' + option_row + '][value]" value="" placeholder="{{ entry_option_value }}" id="input-value' + option_row + '" class="form-control" /></div>';*/
/* 			html += '	</div>';*/
/* 		}*/
/* */
/* 		if (item['type'] == 'textarea') {*/
/* 			html += '	<div class="form-group">';*/
/* 			html += '	  <label class="col-sm-2 control-label" for="input-value' + option_row + '">{{ entry_option_value }}</label>';*/
/* 			html += '	  <div class="col-sm-10"><textarea name="product_option[' + option_row + '][value]" rows="5" placeholder="{{ entry_option_value }}" id="input-value' + option_row + '" class="form-control"></textarea></div>';*/
/* 			html += '	</div>';*/
/* 		}*/
/* */
/* 		if (item['type'] == 'file') {*/
/* 			html += '	<div class="form-group" style="display: none;">';*/
/* 			html += '	  <label class="col-sm-2 control-label" for="input-value' + option_row + '">{{ entry_option_value }}</label>';*/
/* 			html += '	  <div class="col-sm-10"><input type="text" name="product_option[' + option_row + '][value]" value="" placeholder="{{ entry_option_value }}" id="input-value' + option_row + '" class="form-control" /></div>';*/
/* 			html += '	</div>';*/
/* 		}*/
/* */
/* 		if (item['type'] == 'date') {*/
/* 			html += '	<div class="form-group">';*/
/* 			html += '	  <label class="col-sm-2 control-label" for="input-value' + option_row + '">{{ entry_option_value }}</label>';*/
/* 			html += '	  <div class="col-sm-3"><div class="input-group date"><input type="text" name="product_option[' + option_row + '][value]" value="" placeholder="{{ entry_option_value }}" data-date-format="YYYY-MM-DD" id="input-value' + option_row + '" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></div>';*/
/* 			html += '	</div>';*/
/* 		}*/
/* */
/* 		if (item['type'] == 'time') {*/
/* 			html += '	<div class="form-group">';*/
/* 			html += '	  <label class="col-sm-2 control-label" for="input-value' + option_row + '">{{ entry_option_value }}</label>';*/
/* 			html += '	  <div class="col-sm-10"><div class="input-group time"><input type="text" name="product_option[' + option_row + '][value]" value="" placeholder="{{ entry_option_value }}" data-date-format="HH:mm" id="input-value' + option_row + '" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></div>';*/
/* 			html += '	</div>';*/
/* 		}*/
/* */
/* 		if (item['type'] == 'datetime') {*/
/* 			html += '	<div class="form-group">';*/
/* 			html += '	  <label class="col-sm-2 control-label" for="input-value' + option_row + '">{{ entry_option_value }}</label>';*/
/* 			html += '	  <div class="col-sm-10"><div class="input-group datetime"><input type="text" name="product_option[' + option_row + '][value]" value="" placeholder="{{ entry_option_value }}" data-date-format="YYYY-MM-DD HH:mm" id="input-value' + option_row + '" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></div>';*/
/* 			html += '	</div>';*/
/* 		}*/
/* */
/* 		if (item['type'] == 'select' || item['type'] == 'radio' || item['type'] == 'checkbox' || item['type'] == 'image') {*/
/* 			html += '<div class="table-responsive">';*/
/* 			html += '  <table id="option-value' + option_row + '" class="table table-striped table-bordered table-hover">';*/
/* 			html += '  	 <thead>';*/
/* 			html += '      <tr>';*/
/* 			html += '        <td class="text-left">{{ entry_option_value }}</td>';*/
/* 			html += '        <td class="text-right">{{ entry_quantity }}</td>';*/
/* 			html += '        <td class="text-left">{{ entry_subtract }}</td>';*/
/* 			html += '        <td class="text-right">{{ entry_price }}</td>';*/
/* 			html += '        <td class="text-right">{{ entry_option_points }}</td>';*/
/* 			html += '        <td class="text-right">{{ entry_weight }}</td>';*/
/* 			html += '        <td></td>';*/
/* 			html += '      </tr>';*/
/* 			html += '  	 </thead>';*/
/* 			html += '  	 <tbody>';*/
/* 			html += '    </tbody>';*/
/* 			html += '    <tfoot>';*/
/* 			html += '      <tr>';*/
/* 			html += '        <td colspan="6"></td>';*/
/* 			html += '        <td class="text-left"><button type="button" onclick="addOptionValue(' + option_row + ');" data-toggle="tooltip" title="{{ button_option_value_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>';*/
/* 			html += '      </tr>';*/
/* 			html += '    </tfoot>';*/
/* 			html += '  </table>';*/
/* 			html += '</div>';*/
/* */
/*             html += '  <select id="option-values' + option_row + '" style="display: none;">';*/
/* */
/*             for (i = 0; i < item['option_value'].length; i++) {*/
/* 				html += '  <option value="' + item['option_value'][i]['option_value_id'] + '">' + item['option_value'][i]['name'] + '</option>';*/
/*             }*/
/* */
/*             html += '  </select>';*/
/* 			html += '</div>';*/
/* 		}*/
/* */
/* 		$('#tab-option .tab-content').append(html);*/
/* */
/* 		$('#option > li:last-child').before('<li><a href="#tab-option' + option_row + '" data-toggle="tab"><i class="fa fa-minus-circle" onclick=" $(\'#option a:first\').tab(\'show\');$(\'a[href=\\\'#tab-option' + option_row + '\\\']\').parent().remove(); $(\'#tab-option' + option_row + '\').remove();"></i>' + item['label'] + '</li>');*/
/* */
/* 		$('#option a[href=\'#tab-option' + option_row + '\']').tab('show');*/
/* */
/* 		$('[data-toggle=\'tooltip\']').tooltip({*/
/* 			container: 'body',*/
/* 			html: true*/
/* 		});*/
/* */
/* 		$('.date').datetimepicker({*/
/* 			language: '{{ datepicker }}',*/
/* 			pickTime: false*/
/* 		});*/
/* */
/* 		$('.time').datetimepicker({*/
/* 			language: '{{ datepicker }}',*/
/* 			pickDate: false*/
/* 		});*/
/* */
/* 		$('.datetime').datetimepicker({*/
/* 			language: '{{ datepicker }}',*/
/* 			pickDate: true,*/
/* 			pickTime: true*/
/* 		});*/
/* */
/* 		option_row++;*/
/* 	}*/
/* });*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* var option_value_row = {{ option_value_row }};*/
/* */
/* function addOptionValue(option_row) {*/
/* 	html  = '<tr id="option-value-row' + option_value_row + '">';*/
/* 	html += '  <td class="text-left"><select name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][option_value_id]" class="form-control">';*/
/* 	html += $('#option-values' + option_row).html();*/
/* 	html += '  </select><input type="hidden" name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][product_option_value_id]" value="" /></td>';*/
/* 	html += '  <td class="text-right"><input type="text" name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][quantity]" value="" placeholder="{{ entry_quantity }}" class="form-control" /></td>';*/
/* 	html += '  <td class="text-left"><select name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][subtract]" class="form-control">';*/
/* 	html += '    <option value="1">{{ text_yes }}</option>';*/
/* 	html += '    <option value="0">{{ text_no }}</option>';*/
/* 	html += '  </select></td>';*/
/* 	html += '  <td class="text-right"><select name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][price_prefix]" class="form-control">';*/
/* 	html += '    <option value="+">+</option>';*/
/* 	html += '    <option value="-">-</option>';*/
/* 	html += '  </select>';*/
/* 	html += '  <input type="text" name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][price]" value="" placeholder="{{ entry_price }}" class="form-control" /></td>';*/
/* 	html += '  <td class="text-right"><select name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][points_prefix]" class="form-control">';*/
/* 	html += '    <option value="+">+</option>';*/
/* 	html += '    <option value="-">-</option>';*/
/* 	html += '  </select>';*/
/* 	html += '  <input type="text" name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][points]" value="" placeholder="{{ entry_points }}" class="form-control" /></td>';*/
/* 	html += '  <td class="text-right"><select name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight_prefix]" class="form-control">';*/
/* 	html += '    <option value="+">+</option>';*/
/* 	html += '    <option value="-">-</option>';*/
/* 	html += '  </select>';*/
/* 	html += '  <input type="text" name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight]" value="" placeholder="{{ entry_weight }}" class="form-control" /></td>';*/
/* 	html += '  <td class="text-left"><button type="button" onclick="$(this).tooltip(\'destroy\');$(\'#option-value-row' + option_value_row + '\').remove();" data-toggle="tooltip" rel="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/* 	html += '</tr>';*/
/* */
/* 	$('#option-value' + option_row + ' tbody').append(html);*/
/* 	$('[rel=tooltip]').tooltip();*/
/* */
/* 	option_value_row++;*/
/* }*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* var discount_row = {{ discount_row }};*/
/* */
/* function addDiscount() {*/
/* 	html  = '<tr id="discount-row' + discount_row + '">';*/
/*     html += '  <td class="text-left"><select name="product_discount[' + discount_row + '][customer_group_id]" class="form-control">';*/
/*     {% for customer_group in customer_groups %}*/
/*     html += '    <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name|escape('js') }}</option>';*/
/*     {% endfor %}*/
/*     html += '  </select></td>';*/
/*     html += '  <td class="text-right"><input type="text" name="product_discount[' + discount_row + '][quantity]" value="" placeholder="{{ entry_quantity }}" class="form-control" /></td>';*/
/*     html += '  <td class="text-right"><input type="text" name="product_discount[' + discount_row + '][priority]" value="" placeholder="{{ entry_priority }}" class="form-control" /></td>';*/
/* 	html += '  <td class="text-right"><input type="text" name="product_discount[' + discount_row + '][price]" value="" placeholder="{{ entry_price }}" class="form-control" /></td>';*/
/*     html += '  <td class="text-left" style="width: 20%;"><div class="input-group date"><input type="text" name="product_discount[' + discount_row + '][date_start]" value="" placeholder="{{ entry_date_start }}" data-date-format="YYYY-MM-DD" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></td>';*/
/* 	html += '  <td class="text-left" style="width: 20%;"><div class="input-group date"><input type="text" name="product_discount[' + discount_row + '][date_end]" value="" placeholder="{{ entry_date_end }}" data-date-format="YYYY-MM-DD" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></td>';*/
/* 	html += '  <td class="text-left"><button type="button" onclick="$(\'#discount-row' + discount_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/* 	html += '</tr>';*/
/* */
/* 	$('#discount tbody').append(html);*/
/* */
/* 	$('.date').datetimepicker({*/
/* 		pickTime: false*/
/* 	});*/
/* */
/* 	discount_row++;*/
/* }*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* var special_row = {{ special_row }};*/
/* */
/* function addSpecial() {*/
/* 	html  = '<tr id="special-row' + special_row + '">';*/
/*     html += '  <td class="text-left"><select name="product_special[' + special_row + '][customer_group_id]" class="form-control">';*/
/*     {% for customer_group in customer_groups %}*/
/*     html += '      <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name|escape('js') }}</option>';*/
/*     {% endfor %}*/
/*     html += '  </select></td>';*/
/*     html += '  <td class="text-right"><input type="text" name="product_special[' + special_row + '][priority]" value="" placeholder="{{ entry_priority }}" class="form-control" /></td>';*/
/* 	html += '  <td class="text-right"><input type="text" name="product_special[' + special_row + '][price]" value="" placeholder="{{ entry_price }}" class="form-control" /></td>';*/
/*     html += '  <td class="text-left" style="width: 20%;"><div class="input-group date"><input type="text" name="product_special[' + special_row + '][date_start]" value="" placeholder="{{ entry_date_start }}" data-date-format="YYYY-MM-DD" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></td>';*/
/* 	html += '  <td class="text-left" style="width: 20%;"><div class="input-group date"><input type="text" name="product_special[' + special_row + '][date_end]" value="" placeholder="{{ entry_date_end }}" data-date-format="YYYY-MM-DD" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></td>';*/
/* 	html += '  <td class="text-left"><button type="button" onclick="$(\'#special-row' + special_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/* 	html += '</tr>';*/
/* */
/* 	$('#special tbody').append(html);*/
/* */
/* 	$('.date').datetimepicker({*/
/* 		language: '{{ datepicker }}',*/
/* 		pickTime: false*/
/* 	});*/
/* */
/* 	special_row++;*/
/* }*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* var image_row = {{ image_row }};*/
/* */
/* function addImage() {*/
/* 	html  = '<tr id="image-row' + image_row + '">';*/
/* 	html += '  <td class="text-left"><a href="" id="thumb-image' + image_row + '"data-toggle="image" class="img-thumbnail"><img src="{{ placeholder }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a><input type="hidden" name="product_image[' + image_row + '][image]" value="" id="input-image' + image_row + '" /></td>';*/
/* 	html += '  <td class="text-right"><input type="text" name="product_image[' + image_row + '][sort_order]" value="" placeholder="{{ entry_sort_order }}" class="form-control" /></td>';*/
/* 	html += '  <td class="text-left"><button type="button" onclick="$(\'#image-row' + image_row  + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/* 	html += '</tr>';*/
/* */
/* 	$('#images tbody').append(html);*/
/* */
/* 	image_row++;*/
/* }*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* var recurring_row = {{ recurring_row }};*/
/* */
/* function addRecurring() {*/
/* 	html  = '<tr id="recurring-row' + recurring_row + '">';*/
/* 	html += '  <td class="left">';*/
/* 	html += '    <select name="product_recurring[' + recurring_row + '][recurring_id]" class="form-control">>';*/
/* 	{% for recurring in recurrings %}*/
/* 	html += '      <option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>';*/
/* 	{% endfor %}*/
/* 	html += '    </select>';*/
/* 	html += '  </td>';*/
/* 	html += '  <td class="left">';*/
/* 	html += '    <select name="product_recurring[' + recurring_row + '][customer_group_id]" class="form-control">>';*/
/* 	{% for customer_group in customer_groups %}*/
/* 	html += '      <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>';*/
/* 	{% endfor %}*/
/* 	html += '    <select>';*/
/* 	html += '  </td>';*/
/* 	html += '  <td class="left">';*/
/* 	html += '    <a onclick="$(\'#recurring-row' + recurring_row + '\').remove()" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></a>';*/
/* 	html += '  </td>';*/
/* 	html += '</tr>';*/
/* */
/* 	$('#tab-recurring table tbody').append(html);*/
/* */
/* 	recurring_row++;*/
/* }*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickTime: false*/
/* });*/
/* */
/* $('.time').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: false*/
/* });*/
/* */
/* $('.datetime').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: true,*/
/* 	pickTime: true*/
/* });*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* $('#language a:first').tab('show');*/
/* $('#option a:first').tab('show');*/
/* //--></script></div>*/
/* */
/* 			{% if module_sizechart %}*/
/* 			<script type="text/javascript">*/
/* 				$('input[name=\'sizechart\']').autocomplete({*/
/* 					'source': function(request, response) {*/
/* 						$.ajax({*/
/* 							url: 'index.php?route=extension/materialize/sizechart/sizechart/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 							dataType: 'json',*/
/* 							success: function(json) {*/
/* 								response($.map(json, function(item) {*/
/* 									return {*/
/* 										label: item['name'],*/
/* 										value: item['sizechart_id']*/
/* 									}*/
/* 								}));*/
/* 							}*/
/* 						});*/
/* 					},*/
/* 					'select': function(item) {*/
/* 						$('input[name=\'sizechart\']').val(item['label']);*/
/* 						$('input[name=\'sizechart_id\']').val(item['value']);*/
/* 					}*/
/* 				});*/
/* 			</script>*/
/* 			{% endif %}*/
/* 			*/
/* */
/* 			{% if module_additionalfields %}*/
/* 				<script type="text/javascript"><!--*/
/* 				{% set additionalfield_row = 0 %}*/
/* 				{% for product_additionalfield in product_additionalfields %}*/
/* 				{% for language in languages %}*/
/* 				$('#input-text{{ additionalfield_row }}-language{{ language.language_id }}');*/
/* 				{% endfor %}*/
/* 				{% set additionalfield_row = additionalfield_row + 1 %}*/
/* 				{% endfor %}*/
/* 				//--></script>*/
/* */
/* 				<script type="text/javascript"><!--*/
/* 				var additionalfield_row = {{ additionalfield_row }};*/
/* */
/* 				function addadditionalfield() {*/
/* 					html  = '<div id="tab-additionalfield' + additionalfield_row + '" class="tab-pane">';*/
/* 					html += '	<ul class="nav nav-tabs" id="clanguage' + additionalfield_row + '">';*/
/* 					{% for language in languages %}*/
/* 					html += '		<li><a href="#tab-additionalfield' + additionalfield_row + '-language{{ language.language_id }}" data-toggle="tab"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /> {{ language.name }}</a></li>';*/
/* 					{% endfor %}*/
/* 					html += '	</ul>';*/
/* */
/* 					html += '	<div class="tab-content">';*/
/* 					{% for language in languages %}*/
/* 					html += '		<div class="tab-pane" id="tab-additionalfield' + additionalfield_row + '-language{{ language.language_id }}">';*/
/* 					html += '			<div class="form-group">';*/
/* 					html += '				<label class="col-sm-2 control-label" for="input-title' + additionalfield_row + '-language{{ language.language_id }}">{{ text_additionalfield_title }}</label>';*/
/* 					html += '				<div class="col-sm-10"><input type="text" name="product_additionalfield[' + additionalfield_row + '][product_additionalfield_text][{{ language.language_id }}][title]" placeholder="{{ text_additionalfield_title }}" id="input-title' + additionalfield_row + '-language{{ language.language_id }}" value="" class="form-control"/></div>';*/
/* 					html += '			</div>';*/
/* 					html += '			<div class="form-group">';*/
/* 					html += '				<label class="col-sm-2 control-label" for="input-text' + additionalfield_row + '-language{{ language.language_id }}">{{ entry_description }}</label>';*/
/* 					html += '				<div class="col-sm-10"><input type="text" name="product_additionalfield[' + additionalfield_row + '][product_additionalfield_text][{{ language.language_id }}][text]" value="" id="input-text' + additionalfield_row + '-language{{ language.language_id }}" class="form-control"/></div>';*/
/* 					html += '			</div>';*/
/* 					html += '		</div>';*/
/* 					{% endfor %}*/
/* 					html += '	</div>';*/
/* 					html += '		<div class="form-group">';*/
/* 					html += '			<label class="col-sm-2 control-label" for="input-status' + additionalfield_row +'">{{ entry_status }}</label>';*/
/* 					html += '			<div class="col-sm-10"><select name="product_additionalfield[' + additionalfield_row + '][status]" class="form-control"><option value="1">{{ text_enabled }}</option><option value="0">{{ text_disabled }}</option></select></div>';*/
/* 					html += '		</div>';*/
/* 					html += '	<div class="form-group">';*/
/* 					html += '		<label class="col-sm-2 control-label" for="input-sort_order' + additionalfield_row +'">{{ entry_sort_order }}</label>';*/
/* 					html += '		<div class="col-sm-10"><input type="text" name="product_additionalfield[' + additionalfield_row + '][sort_order]" value="" class="form-control" /></div>';*/
/* 					html += '	</div>';*/
/* 					html += '</div>';*/
/* */
/* 					$('#tab-additionalfieldmain .tab-content2').append(html);*/
/* */
/* 					{% for language in languages %}*/
/* 					$('#input-text' + additionalfield_row + '-language{{ language.language_id }}');*/
/* 					{% endfor %}*/
/* */
/* 					$('#additionalfield a[href=\'#tab-additionalfield' + additionalfield_row + '\']').tab('show');*/
/* */
/* 					$('#clanguage' + additionalfield_row + ' li:first-child a').tab('show');*/
/* */
/* 					$('#additionalfield-add').before('<li><a href="#tab-additionalfield' + additionalfield_row + '" data-toggle="tab"><i class="fa fa-minus-circle" onclick="$(\'a[href=\\\'#tab-additionalfield' + additionalfield_row + '\\\']\').parent().remove(); $(\'#tab-additionalfield' + additionalfield_row + '\').remove(); $(\'#additionalfield li a:first\').tab(\'show\');"></i> {{ text_additionalfield }} ' + additionalfield_row + '</a></li>');*/
/* */
/* */
/* 					$('#additionalfield-' + additionalfield_row).trigger('click');*/
/* */
/* 					additionalfield_row++;*/
/* 				}*/
/* 				//--></script>*/
/* */
/* 				<script type="text/javascript"><!--*/
/* 				$('#additionalfield li:first-child a').tab('show');*/
/* 				{% set additionalfield_row = 0 %}*/
/* 				{% for product_additionalfield in product_additionalfields %}*/
/* 				$('#clanguage{{ additionalfield_row }} li:first-child a').tab('show');*/
/* 				{% set additionalfield_row = additionalfield_row + 1 %}*/
/* 				{% endfor %}*/
/* 				//--></script>*/
/* 			{% endif %}*/
/* 			*/
/* */
/* 			{% if module_customtabs %}*/
/* 				<script type="text/javascript"><!--*/
/* 				{% set customtab_row = 0 %}*/
/* 				{% for product_customtab in product_customtabs %}*/
/* 				{% for language in languages %}*/
/* 				$('#input-description{{ customtab_row }}-language{{ language.language_id }}').summernote({*/
/* 					height: 300*/
/* 				});*/
/* 				{% endfor %}*/
/* 				{% set customtab_row = customtab_row + 1 %}*/
/* 				{% endfor %}*/
/* 				//--></script>*/
/* */
/* 				<script type="text/javascript"><!--*/
/* 				var customtab_row = {{ customtab_row }};*/
/* */
/* 				function addCustomtab() {*/
/* 					html  = '<div id="tab-customtab' + customtab_row + '" class="tab-pane">';*/
/* 					html += '	<ul class="nav nav-tabs" id="clanguage' + customtab_row + '">';*/
/* 					{% for language in languages %}*/
/* 					html += '		<li><a href="#tab-customtab' + customtab_row + '-language{{ language.language_id }}" data-toggle="tab"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /> {{ language.name }}</a></li>';*/
/* 					{% endfor %}*/
/* 					html += '	</ul>';*/
/* */
/* 					html += '	<div class="tab-content">';*/
/* 					{% for language in languages %}*/
/* 					html += '		<div class="tab-pane" id="tab-customtab' + customtab_row + '-language{{ language.language_id }}">';*/
/* 					html += '			<div class="form-group">';*/
/* 					html += '				<label class="col-sm-2 control-label" for="input-title' + customtab_row + '-language{{ language.language_id }}">{{ text_tab_title }}</label>';*/
/* 					html += '				<div class="col-sm-10"><input type="text" name="product_customtab[' + customtab_row + '][product_customtab_description][{{ language.language_id }}][title]" placeholder="{{ text_tab_title }}" id="input-title' + customtab_row + '-language{{ language.language_id }}" value="" class="form-control"/></div>';*/
/* 					html += '			</div>';*/
/* 					html += '			<div class="form-group">';*/
/* 					html += '				<label class="col-sm-2 control-label" for="input-description' + customtab_row + '-language{{ language.language_id }}">{{ entry_description }}</label>';*/
/* 					html += '				<div class="col-sm-10"><textarea name="product_customtab[' + customtab_row + '][product_customtab_description][{{ language.language_id }}][description]" id="input-description' + customtab_row + '-language{{ language.language_id }}"></textarea></div>';*/
/* 					html += '			</div>';*/
/* 					html += '		</div>';*/
/* 					{% endfor %}*/
/* 					html += '	</div>';*/
/* 					html += '		<div class="form-group">';*/
/* 					html += '			<label class="col-sm-2 control-label" for="input-status' + customtab_row +'">{{ entry_status }}</label>';*/
/* 					html += '			<div class="col-sm-10"><select name="product_customtab[' + customtab_row + '][status]" class="form-control"><option value="1">{{ text_enabled }}</option><option value="0">{{ text_disabled }}</option></select></div>';*/
/* 					html += '		</div>';*/
/* 					html += '	<div class="form-group">';*/
/* 					html += '		<label class="col-sm-2 control-label" for="input-sort_order' + customtab_row +'">{{ entry_sort_order }}</label>';*/
/* 					html += '		<div class="col-sm-10"><input type="text" name="product_customtab[' + customtab_row + '][sort_order]" value="" class="form-control" /></div>';*/
/* 					html += '	</div>';*/
/* 					html += '</div>';*/
/* */
/* 					$('#tab-customtabmain .tab-content2').append(html);*/
/* */
/* 					{% for language in languages %}*/
/* 					$('#input-description' + customtab_row + '-language{{ language.language_id }}').summernote({*/
/* 						height: 300*/
/* 					});*/
/* 					{% endfor %}*/
/* */
/* 					$('#customtab a[href=\'#tab-customtab' + customtab_row + '\']').tab('show');*/
/* */
/* 					$('#clanguage' + customtab_row + ' li:first-child a').tab('show');*/
/* */
/* 					$('#customtab-add').before('<li><a href="#tab-customtab' + customtab_row + '" data-toggle="tab"><i class="fa fa-minus-circle" onclick="$(\'a[href=\\\'#tab-customtab' + customtab_row + '\\\']\').parent().remove(); $(\'#tab-customtab' + customtab_row + '\').remove(); $(\'#customtab li a:first\').tab(\'show\');"></i> {{ text_customtab }} ' + customtab_row + '</a></li>');*/
/* */
/* */
/* 					$('#customtab-' + customtab_row).trigger('click');*/
/* */
/* 					customtab_row++;*/
/* 				}*/
/* 				//--></script>*/
/* */
/* 				<script type="text/javascript"><!--*/
/* 				$('#customtab li:first-child a').tab('show');*/
/* 				{% set customtab_row = 0 %}*/
/* 				{% for product_customtab in product_customtabs %}*/
/* 				$('#clanguage{{ customtab_row }} li:first-child a').tab('show');*/
/* 				{% set customtab_row = customtab_row + 1 %}*/
/* 				{% endfor %}*/
/* 				//--></script>*/
/* 			{% endif %}*/
/* 			*/
/* */
/* 			<script type="text/javascript">*/
/* 				var applyBtn = $('#apply-btn'),*/
/* 					formProduct = $('#form-product'),*/
/* 					dataAction = formProduct.attr('data-action');*/
/* */
/* 				if (sessionStorage['index_p']) {*/
/* 					var index_p = sessionStorage['index_p'];*/
/* 				} else {*/
/* 					var index_p = 0;*/
/* 				}*/
/* */
/* 				$('#apply-tab li:eq(' + index_p + ') a').tab('show');*/
/* 				sessionStorage['index_p'] = 0;*/
/* */
/* 				applyBtn.click(function() {*/
/* 					sessionStorage['index_p'] = $(".nav-tabs .active").index();*/
/* */
/* 					formProduct.attr({'action':dataAction});*/
/* 					formProduct.submit();*/
/* */
/* 					e.preventDefault();*/
/* 				});*/
/* */
/* 				document.addEventListener("keydown", function(event) {*/
/* 					if (event.keyCode == 83 && (navigator.platform.match("Mac") ? event.metaKey : event.ctrlKey)) {*/
/* 						event.preventDefault();*/
/* 						applyBtn.trigger('click');*/
/* 					}*/
/* 				}, false);*/
/* 			</script>*/
/* 			*/
/* {{ footer }} */
/* */
