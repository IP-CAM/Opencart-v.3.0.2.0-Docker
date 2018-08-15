<?php

/* materialize/template/extension/module/account.twig */
class __TwigTemplate_7a0c6a6636a9a17cc4eda1e79a0103d7607cea8f86a2643798f29f3b811a489c extends Twig_Template
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
        echo "<div class=\"collection z-depth-1\">
\t";
        // line 2
        if ( !(isset($context["logged"]) ? $context["logged"] : null)) {
            // line 3
            echo "\t<a class=\"collection-item waves-effect blue-grey-text text-darken-4\" href=\"";
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\" rel=\"nofollow\">";
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "</a>
\t<a class=\"collection-item waves-effect blue-grey-text text-darken-4\" href=\"";
            // line 4
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "\" rel=\"nofollow\">";
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "</a>
\t<a class=\"collection-item waves-effect blue-grey-text text-darken-4\" href=\"";
            // line 5
            echo (isset($context["forgotten"]) ? $context["forgotten"] : null);
            echo "\" rel=\"nofollow\">";
            echo (isset($context["text_forgotten"]) ? $context["text_forgotten"] : null);
            echo "</a>
\t";
        }
        // line 7
        echo "\t<a class=\"collection-item waves-effect blue-grey-text text-darken-4\" href=\"";
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\" rel=\"nofollow\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</a>
\t";
        // line 8
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 9
            echo "\t<a class=\"collection-item waves-effect blue-grey-text text-darken-4\" href=\"";
            echo (isset($context["edit"]) ? $context["edit"] : null);
            echo "\" rel=\"nofollow\">";
            echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
            echo "</a>
\t<a class=\"collection-item waves-effect blue-grey-text text-darken-4\" href=\"";
            // line 10
            echo (isset($context["password"]) ? $context["password"] : null);
            echo "\" rel=\"nofollow\">";
            echo (isset($context["text_password"]) ? $context["text_password"] : null);
            echo "</a>
\t";
        }
        // line 12
        echo "\t<a class=\"collection-item waves-effect blue-grey-text text-darken-4\" href=\"";
        echo (isset($context["address"]) ? $context["address"] : null);
        echo "\" rel=\"nofollow\">";
        echo (isset($context["text_address"]) ? $context["text_address"] : null);
        echo "</a>
\t<a class=\"collection-item waves-effect blue-grey-text text-darken-4\" href=\"";
        // line 13
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\" rel=\"nofollow\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</a>
\t<a class=\"collection-item waves-effect blue-grey-text text-darken-4\" href=\"";
        // line 14
        echo (isset($context["order"]) ? $context["order"] : null);
        echo "\" rel=\"nofollow\">";
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</a>
\t<a class=\"collection-item waves-effect blue-grey-text text-darken-4\" href=\"";
        // line 15
        echo (isset($context["download"]) ? $context["download"] : null);
        echo "\" rel=\"nofollow\">";
        echo (isset($context["text_download"]) ? $context["text_download"] : null);
        echo "</a>
\t<a class=\"collection-item waves-effect blue-grey-text text-darken-4\" href=\"";
        // line 16
        echo (isset($context["recurring"]) ? $context["recurring"] : null);
        echo "\" rel=\"nofollow\">";
        echo (isset($context["text_recurring"]) ? $context["text_recurring"] : null);
        echo "</a>
\t<a class=\"collection-item waves-effect blue-grey-text text-darken-4\" href=\"";
        // line 17
        echo (isset($context["reward"]) ? $context["reward"] : null);
        echo "\" rel=\"nofollow\">";
        echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
        echo "</a>
\t<a class=\"collection-item waves-effect blue-grey-text text-darken-4\" href=\"";
        // line 18
        echo (isset($context["return"]) ? $context["return"] : null);
        echo "\" rel=\"nofollow\">";
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</a>
\t<a class=\"collection-item waves-effect blue-grey-text text-darken-4\" href=\"";
        // line 19
        echo (isset($context["transaction"]) ? $context["transaction"] : null);
        echo "\" rel=\"nofollow\">";
        echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
        echo "</a>
\t<a class=\"collection-item waves-effect blue-grey-text text-darken-4\" href=\"";
        // line 20
        echo (isset($context["newsletter"]) ? $context["newsletter"] : null);
        echo "\" rel=\"nofollow\">";
        echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
        echo "</a>
\t";
        // line 21
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 22
            echo "\t<a class=\"collection-item waves-effect blue-grey-text text-darken-4\" href=\"";
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\" rel=\"nofollow\">";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo "</a>
\t";
        }
        // line 24
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "materialize/template/extension/module/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 24,  124 => 22,  122 => 21,  116 => 20,  110 => 19,  104 => 18,  98 => 17,  92 => 16,  86 => 15,  80 => 14,  74 => 13,  67 => 12,  60 => 10,  53 => 9,  51 => 8,  44 => 7,  37 => 5,  31 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="collection z-depth-1">*/
/* 	{% if not logged %}*/
/* 	<a class="collection-item waves-effect blue-grey-text text-darken-4" href="{{ login }}" rel="nofollow">{{ text_login }}</a>*/
/* 	<a class="collection-item waves-effect blue-grey-text text-darken-4" href="{{ register }}" rel="nofollow">{{ text_register }}</a>*/
/* 	<a class="collection-item waves-effect blue-grey-text text-darken-4" href="{{ forgotten }}" rel="nofollow">{{ text_forgotten }}</a>*/
/* 	{% endif %}*/
/* 	<a class="collection-item waves-effect blue-grey-text text-darken-4" href="{{ account }}" rel="nofollow">{{ text_account }}</a>*/
/* 	{% if logged %}*/
/* 	<a class="collection-item waves-effect blue-grey-text text-darken-4" href="{{ edit }}" rel="nofollow">{{ text_edit }}</a>*/
/* 	<a class="collection-item waves-effect blue-grey-text text-darken-4" href="{{ password }}" rel="nofollow">{{ text_password }}</a>*/
/* 	{% endif %}*/
/* 	<a class="collection-item waves-effect blue-grey-text text-darken-4" href="{{ address }}" rel="nofollow">{{ text_address }}</a>*/
/* 	<a class="collection-item waves-effect blue-grey-text text-darken-4" href="{{ wishlist }}" rel="nofollow">{{ text_wishlist }}</a>*/
/* 	<a class="collection-item waves-effect blue-grey-text text-darken-4" href="{{ order }}" rel="nofollow">{{ text_order }}</a>*/
/* 	<a class="collection-item waves-effect blue-grey-text text-darken-4" href="{{ download }}" rel="nofollow">{{ text_download }}</a>*/
/* 	<a class="collection-item waves-effect blue-grey-text text-darken-4" href="{{ recurring }}" rel="nofollow">{{ text_recurring }}</a>*/
/* 	<a class="collection-item waves-effect blue-grey-text text-darken-4" href="{{ reward }}" rel="nofollow">{{ text_reward }}</a>*/
/* 	<a class="collection-item waves-effect blue-grey-text text-darken-4" href="{{ return }}" rel="nofollow">{{ text_return }}</a>*/
/* 	<a class="collection-item waves-effect blue-grey-text text-darken-4" href="{{ transaction }}" rel="nofollow">{{ text_transaction }}</a>*/
/* 	<a class="collection-item waves-effect blue-grey-text text-darken-4" href="{{ newsletter }}" rel="nofollow">{{ text_newsletter }}</a>*/
/* 	{% if logged %}*/
/* 	<a class="collection-item waves-effect blue-grey-text text-darken-4" href="{{ logout }}" rel="nofollow">{{ text_logout }}</a>*/
/* 	{% endif %}*/
/* </div>*/
