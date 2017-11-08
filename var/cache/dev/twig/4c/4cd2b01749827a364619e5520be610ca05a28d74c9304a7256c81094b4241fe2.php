<?php

/* FrontBundle::Modal/login.html.twig */
class __TwigTemplate_91fb697dfce96c463e3f9db656cf5c50fc97d2b1646b51cdfae98ba2fd325f76 extends Twig_Template
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
        $__internal_723739a03a917a90b88d32625daf0f59eaf93ace301faa1294015bd8fcd74842 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_723739a03a917a90b88d32625daf0f59eaf93ace301faa1294015bd8fcd74842->enter($__internal_723739a03a917a90b88d32625daf0f59eaf93ace301faa1294015bd8fcd74842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Modal/login.html.twig"));

        $__internal_0c4771942c93a1980cc3026f2235a384d696aa752afc03a47e0d2622e54b537b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c4771942c93a1980cc3026f2235a384d696aa752afc03a47e0d2622e54b537b->enter($__internal_0c4771942c93a1980cc3026f2235a384d696aa752afc03a47e0d2622e54b537b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Modal/login.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"modal-login\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal-login\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Login"), "html", null, true);
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
        
        $__internal_723739a03a917a90b88d32625daf0f59eaf93ace301faa1294015bd8fcd74842->leave($__internal_723739a03a917a90b88d32625daf0f59eaf93ace301faa1294015bd8fcd74842_prof);

        
        $__internal_0c4771942c93a1980cc3026f2235a384d696aa752afc03a47e0d2622e54b537b->leave($__internal_0c4771942c93a1980cc3026f2235a384d696aa752afc03a47e0d2622e54b537b_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle::Modal/login.html.twig";
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
        return new Twig_Source("<div class=\"modal fade\" id=\"modal-login\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal-login\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">{{ 'Login'|trans }}</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <i class=\"fa fa-close\"></i>
        </button>
      </div>

      <div class=\"modal-body\">                  
      </div>
    </div>
  </div>
</div>", "FrontBundle::Modal/login.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Modal/login.html.twig");
    }
}
