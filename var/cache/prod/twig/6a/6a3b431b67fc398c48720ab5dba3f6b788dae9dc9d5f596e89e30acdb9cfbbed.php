<?php

/* FrontBundle::Widget/opening_hours.html.twig */
class __TwigTemplate_42d646a6e9ee568f5b771b078d96fb9edb5c195e70d19120dd23b7f9696ac230 extends Twig_Template
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
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getOpeningHours", array(), "method")) {
            // line 2
            echo "    <div class=\"post-block\">
        <h3>";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Opening Hours"), "html", null, true);
            echo "</h3>

        <div class=\"opening-hours\">
            ";
            // line 6
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getOpeningHours", array(), "method"), "html", null, true));
            echo "
        </div><!-- /.opening-hours -->
    </div><!-- /.post-block -->
";
        }
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
        return array (  30 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle::Widget/opening_hours.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Widget/opening_hours.html.twig");
    }
}
