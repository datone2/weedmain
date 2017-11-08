<?php

/* FrontBundle::Modal/register.html.twig */
class __TwigTemplate_24fa399b076ce522af5ddb5d88eb0ef9f7c1c7466cc1b85ad1072c41f50216c5 extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"modal-register\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal-register\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create Account"), "html", null, true);
        echo "</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <i class=\"fa fa-close\"></i>
        </button>
      </div>

      <div class=\"modal-body\">                  
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "FrontBundle::Modal/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle::Modal/register.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Modal/register.html.twig");
    }
}
