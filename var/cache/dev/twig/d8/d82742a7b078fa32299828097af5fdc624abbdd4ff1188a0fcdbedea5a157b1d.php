<?php

/* FrontBundle::Widget/opening_hours.html.twig */
class __TwigTemplate_0b852cd80008034091cb6cd94797ce83da67ace4697159201baa8797230e2f64 extends Twig_Template
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
        $__internal_66c0ece1ef9078e6b8a1557bece857956068ea551925264915d8c74291866453 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66c0ece1ef9078e6b8a1557bece857956068ea551925264915d8c74291866453->enter($__internal_66c0ece1ef9078e6b8a1557bece857956068ea551925264915d8c74291866453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Widget/opening_hours.html.twig"));

        $__internal_40e1211e4c95fc5ba67c28efa6455eff27889999620b76e7149a67d98afdbbe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40e1211e4c95fc5ba67c28efa6455eff27889999620b76e7149a67d98afdbbe5->enter($__internal_40e1211e4c95fc5ba67c28efa6455eff27889999620b76e7149a67d98afdbbe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Widget/opening_hours.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 1, $this->getSourceContext()); })()), "getOpeningHours", array(), "method")) {
            // line 2
            echo "    <div class=\"post-block\">
        <h3>";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Opening Hours"), "html", null, true);
            echo "</h3>

        <div class=\"opening-hours\">
            ";
            // line 6
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 6, $this->getSourceContext()); })()), "getOpeningHours", array(), "method"), "html", null, true));
            echo "
        </div><!-- /.opening-hours -->
    </div><!-- /.post-block -->
";
        }
        
        $__internal_66c0ece1ef9078e6b8a1557bece857956068ea551925264915d8c74291866453->leave($__internal_66c0ece1ef9078e6b8a1557bece857956068ea551925264915d8c74291866453_prof);

        
        $__internal_40e1211e4c95fc5ba67c28efa6455eff27889999620b76e7149a67d98afdbbe5->leave($__internal_40e1211e4c95fc5ba67c28efa6455eff27889999620b76e7149a67d98afdbbe5_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle::Widget/opening_hours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if listing.getOpeningHours() %}
    <div class=\"post-block\">
        <h3>{{ 'Opening Hours'|trans }}</h3>

        <div class=\"opening-hours\">
            {{ listing.getOpeningHours()|nl2br }}
        </div><!-- /.opening-hours -->
    </div><!-- /.post-block -->
{% endif %}", "FrontBundle::Widget/opening_hours.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Widget/opening_hours.html.twig");
    }
}
