<?php

/* common/reset.twig */
class __TwigTemplate_549cf24efac891c129bc39eed88642788736bc0ef617a2fcc2db263aed702990 extends Twig_Template
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
<div id=\"content\">
  <div class=\"container-fluid\"><br />
    <br />
    <div class=\"row\">
      <div class=\"col-sm-offset-4 col-sm-4\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h1 class=\"panel-title\"><i class=\"fa fa-repeat\"></i> ";
        // line 9
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
          </div>
          <div class=\"panel-body\">
            <form action=\"";
        // line 12
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
              <p>";
        // line 13
        echo (isset($context["text_password"]) ? $context["text_password"] : null);
        echo "</p>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-password\">";
        // line 15
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
                <input type=\"password\" name=\"password\" value=\"";
        // line 16
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\" id=\"input-password\" class=\"form-control\" />
                ";
        // line 17
        if ((isset($context["error_password"]) ? $context["error_password"] : null)) {
            // line 18
            echo "                <div class=\"text-danger\">";
            echo (isset($context["error_password"]) ? $context["error_password"] : null);
            echo "</div>
                ";
        }
        // line 20
        echo "              </div>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-confirm\">";
        // line 22
        echo (isset($context["entry_confirm"]) ? $context["entry_confirm"] : null);
        echo "</label>
                <input type=\"password\" name=\"confirm\" value=\"";
        // line 23
        echo (isset($context["confirm"]) ? $context["confirm"] : null);
        echo "\" id=\"input-confirm\" class=\"form-control\" />
                ";
        // line 24
        if ((isset($context["error_confirm"]) ? $context["error_confirm"] : null)) {
            // line 25
            echo "                <div class=\"text-danger\">";
            echo (isset($context["error_confirm"]) ? $context["error_confirm"] : null);
            echo "</div>
                ";
        }
        // line 27
        echo "              </div>
              <div class=\"text-right\">
                <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i> ";
        // line 29
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "</button>
                <a href=\"";
        // line 30
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 39
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "common/reset.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 39,  89 => 30,  85 => 29,  81 => 27,  75 => 25,  73 => 24,  69 => 23,  65 => 22,  61 => 20,  55 => 18,  53 => 17,  49 => 16,  45 => 15,  40 => 13,  36 => 12,  30 => 9,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="content">*/
/*   <div class="container-fluid"><br />*/
/*     <br />*/
/*     <div class="row">*/
/*       <div class="col-sm-offset-4 col-sm-4">*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h1 class="panel-title"><i class="fa fa-repeat"></i> {{ heading_title }}</h1>*/
/*           </div>*/
/*           <div class="panel-body">*/
/*             <form action="{{ action }}" method="post" enctype="multipart/form-data">*/
/*               <p>{{ text_password }}</p>*/
/*               <div class="form-group">*/
/*                 <label class="control-label" for="input-password">{{ entry_password }}</label>*/
/*                 <input type="password" name="password" value="{{ password }}" id="input-password" class="form-control" />*/
/*                 {% if error_password %}*/
/*                 <div class="text-danger">{{ error_password }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="control-label" for="input-confirm">{{ entry_confirm }}</label>*/
/*                 <input type="password" name="confirm" value="{{ confirm }}" id="input-confirm" class="form-control" />*/
/*                 {% if error_confirm %}*/
/*                 <div class="text-danger">{{ error_confirm }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*               <div class="text-right">*/
/*                 <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> {{ button_save }}</button>*/
/*                 <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a>*/
/*               </div>*/
/*             </form>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
