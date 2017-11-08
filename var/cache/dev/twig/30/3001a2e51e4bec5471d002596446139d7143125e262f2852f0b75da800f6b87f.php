<?php

/* FrontBundle::Helper/page_title.html.twig */
class __TwigTemplate_dfb32efc64721fd1767237a2f433db929c7479ef6f42a24b4bc183a2a399a6fe extends Twig_Template
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
        $__internal_101958840b76b6c486291104484742272fb29dacb1e1ead69d1afed7d7fff2a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_101958840b76b6c486291104484742272fb29dacb1e1ead69d1afed7d7fff2a5->enter($__internal_101958840b76b6c486291104484742272fb29dacb1e1ead69d1afed7d7fff2a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Helper/page_title.html.twig"));

        $__internal_7590d15c3d99999b294424611f07e2338f150fce398aa565f4606f8885b30da8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7590d15c3d99999b294424611f07e2338f150fce398aa565f4606f8885b30da8->enter($__internal_7590d15c3d99999b294424611f07e2338f150fce398aa565f4606f8885b30da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Helper/page_title.html.twig"));

        // line 1
        echo "<div class=\"page-title ";
        if (array_key_exists("class", $context)) {
            echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        }
        echo "\">    
    ";
        // line 2
        if (array_key_exists("title", $context)) {
            // line 3
            echo "        <h2>";
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
            echo "</h2>
    ";
        }
        // line 5
        echo "
    ";
        // line 6
        if (array_key_exists("description", $context)) {
            // line 7
            echo "        <p>";
            echo twig_escape_filter($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new Twig_Error_Runtime('Variable "description" does not exist.', 7, $this->getSourceContext()); })()), "html", null, true);
            echo "</p>
    ";
        }
        // line 9
        echo "</div><!-- /.page-title -->";
        
        $__internal_101958840b76b6c486291104484742272fb29dacb1e1ead69d1afed7d7fff2a5->leave($__internal_101958840b76b6c486291104484742272fb29dacb1e1ead69d1afed7d7fff2a5_prof);

        
        $__internal_7590d15c3d99999b294424611f07e2338f150fce398aa565f4606f8885b30da8->leave($__internal_7590d15c3d99999b294424611f07e2338f150fce398aa565f4606f8885b30da8_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle::Helper/page_title.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 9,  45 => 7,  43 => 6,  40 => 5,  34 => 3,  32 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"page-title {% if class is defined %}{{ class }}{% endif %}\">    
    {% if title is defined %}
        <h2>{{ title }}</h2>
    {% endif %}

    {% if description is defined %}
        <p>{{ description }}</p>
    {% endif %}
</div><!-- /.page-title -->", "FrontBundle::Helper/page_title.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Helper/page_title.html.twig");
    }
}
