<?php

/* FrontBundle::Widget/inquire.html.twig */
class __TwigTemplate_18b252942005f81b8dfe18cea0e13ac36415f76e2fe452ac6d422572873767c9 extends Twig_Template
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
        $__internal_f07b964e14a8a6067a6285d3595328486221349123e4cc1d2522de6d5b62a071 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f07b964e14a8a6067a6285d3595328486221349123e4cc1d2522de6d5b62a071->enter($__internal_f07b964e14a8a6067a6285d3595328486221349123e4cc1d2522de6d5b62a071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Widget/inquire.html.twig"));

        $__internal_1f5dc553072704e930d4a23810a0c7580b924de2e33e9ca38b8fd7de76f64bc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f5dc553072704e930d4a23810a0c7580b924de2e33e9ca38b8fd7de76f64bc7->enter($__internal_1f5dc553072704e930d4a23810a0c7580b924de2e33e9ca38b8fd7de76f64bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Widget/inquire.html.twig"));

        // line 1
        echo "<div class=\"post-block\">
    <h3>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Contact Owner"), "html", null, true);
        echo "</h3>

    ";
        // line 4
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'form_start');
        echo "
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), 'widget');
        echo "
    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_end');
        echo "
</div><!-- /.post-block -->";
        
        $__internal_f07b964e14a8a6067a6285d3595328486221349123e4cc1d2522de6d5b62a071->leave($__internal_f07b964e14a8a6067a6285d3595328486221349123e4cc1d2522de6d5b62a071_prof);

        
        $__internal_1f5dc553072704e930d4a23810a0c7580b924de2e33e9ca38b8fd7de76f64bc7->leave($__internal_1f5dc553072704e930d4a23810a0c7580b924de2e33e9ca38b8fd7de76f64bc7_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle::Widget/inquire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 6,  37 => 5,  33 => 4,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"post-block\">
    <h3>{{ 'Contact Owner'|trans }}</h3>

    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
</div><!-- /.post-block -->", "FrontBundle::Widget/inquire.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Widget/inquire.html.twig");
    }
}
