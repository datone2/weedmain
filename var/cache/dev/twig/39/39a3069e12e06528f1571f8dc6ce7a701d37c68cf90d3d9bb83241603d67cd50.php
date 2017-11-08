<?php

/* FrontBundle::Modal/register.html.twig */
class __TwigTemplate_6eceaf905e5e3e49c57a8a0748c1b7b08a3a65b0024098d35a2bfbd5879b3241 extends Twig_Template
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
        $__internal_0af80dd7ecc3a326b803c245025410da6905559bbdf33b8a3242a476c46c54d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0af80dd7ecc3a326b803c245025410da6905559bbdf33b8a3242a476c46c54d0->enter($__internal_0af80dd7ecc3a326b803c245025410da6905559bbdf33b8a3242a476c46c54d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Modal/register.html.twig"));

        $__internal_3c369b97dfae8454062009c342ccc2d91e76e81a79c1135cc0d3398db59195de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c369b97dfae8454062009c342ccc2d91e76e81a79c1135cc0d3398db59195de->enter($__internal_3c369b97dfae8454062009c342ccc2d91e76e81a79c1135cc0d3398db59195de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Modal/register.html.twig"));

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
        
        $__internal_0af80dd7ecc3a326b803c245025410da6905559bbdf33b8a3242a476c46c54d0->leave($__internal_0af80dd7ecc3a326b803c245025410da6905559bbdf33b8a3242a476c46c54d0_prof);

        
        $__internal_3c369b97dfae8454062009c342ccc2d91e76e81a79c1135cc0d3398db59195de->leave($__internal_3c369b97dfae8454062009c342ccc2d91e76e81a79c1135cc0d3398db59195de_prof);

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
        return array (  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade\" id=\"modal-register\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal-register\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">{{ 'Create Account'|trans }}</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <i class=\"fa fa-close\"></i>
        </button>
      </div>

      <div class=\"modal-body\">                  
      </div>
    </div>
  </div>
</div>", "FrontBundle::Modal/register.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Modal/register.html.twig");
    }
}
