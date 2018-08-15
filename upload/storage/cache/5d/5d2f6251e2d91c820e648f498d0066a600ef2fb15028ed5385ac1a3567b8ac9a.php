<?php

/* extension/materialize/appeal/installed.twig */
class __TwigTemplate_d3086ddfa371d59b13498daba064b5ccff161c8deaba5ce1e2100f608a8801e8 extends Twig_Template
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
        echo "<div id=\"modal-materialize-installed\" class=\"modal fade modal-materialize\" tabindex=\"-1\" role=\"dialog\">
\t<div class=\"modal-dialog\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header bg-primary\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t<h4 class=\"modal-title\">";
        // line 6
        echo (isset($context["modal_title"]) ? $context["modal_title"] : null);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div class=\"alert alert-info\" role=\"alert\">";
        // line 9
        echo (isset($context["modal_alert"]) ? $context["modal_alert"] : null);
        echo "</div>
\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t<a href=\"//goo.gl/WYB4yC\" target=\"_blank\" rel=\"noopener\" class=\"list-group-item\">
\t\t\t\t\t\t<h4 class=\"list-group-item-heading\"><i class=\"fa fa-comment-o shake\"></i> ";
        // line 12
        echo (isset($context["modal_review"]) ? $context["modal_review"] : null);
        echo "</h4>
\t\t\t\t\t\t<p class=\"list-group-item-text\">
\t\t\t\t\t\t\t<p>";
        // line 14
        echo (isset($context["appeal_marketplace"]) ? $context["appeal_marketplace"] : null);
        echo "</p>
\t\t\t\t\t\t</p>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"//goo.gl/4Myeis\" target=\"_blank\" rel=\"noopener\" class=\"list-group-item\">
\t\t\t\t\t\t<h4 class=\"list-group-item-heading\"><i class=\"fa fa-credit-card shake\"></i> ";
        // line 18
        echo (isset($context["modal_donations_title"]) ? $context["modal_donations_title"] : null);
        echo "</h4>
\t\t\t\t\t\t<p class=\"list-group-item-text\">";
        // line 19
        echo (isset($context["modal_donations_text"]) ? $context["modal_donations_text"] : null);
        echo "</p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script type=\"text/javascript\">
\t\$('#modal-materialize-installed').modal({
\t\tbackdrop: 'static',
\t\tkeyboard: false
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "extension/materialize/appeal/installed.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 19,  50 => 18,  43 => 14,  38 => 12,  32 => 9,  26 => 6,  19 => 1,);
    }
}
/* <div id="modal-materialize-installed" class="modal fade modal-materialize" tabindex="-1" role="dialog">*/
/* 	<div class="modal-dialog" role="document">*/
/* 		<div class="modal-content">*/
/* 			<div class="modal-header bg-primary">*/
/* 				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/* 				<h4 class="modal-title">{{ modal_title }}</h4>*/
/* 			</div>*/
/* 			<div class="modal-body">*/
/* 				<div class="alert alert-info" role="alert">{{ modal_alert }}</div>*/
/* 				<div class="list-group">*/
/* 					<a href="//goo.gl/WYB4yC" target="_blank" rel="noopener" class="list-group-item">*/
/* 						<h4 class="list-group-item-heading"><i class="fa fa-comment-o shake"></i> {{ modal_review }}</h4>*/
/* 						<p class="list-group-item-text">*/
/* 							<p>{{ appeal_marketplace }}</p>*/
/* 						</p>*/
/* 					</a>*/
/* 					<a href="//goo.gl/4Myeis" target="_blank" rel="noopener" class="list-group-item">*/
/* 						<h4 class="list-group-item-heading"><i class="fa fa-credit-card shake"></i> {{ modal_donations_title }}</h4>*/
/* 						<p class="list-group-item-text">{{ modal_donations_text }}</p>*/
/* 					</a>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <script type="text/javascript">*/
/* 	$('#modal-materialize-installed').modal({*/
/* 		backdrop: 'static',*/
/* 		keyboard: false*/
/* 	});*/
/* </script>*/
