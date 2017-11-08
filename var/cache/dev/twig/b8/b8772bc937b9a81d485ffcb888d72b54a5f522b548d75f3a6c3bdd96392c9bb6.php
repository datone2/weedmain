<?php

/* AppBundle::Helper/empty.html.twig */
class __TwigTemplate_d5b9f73c5f8e9296d6502ddbec326c8bae9264975f5dbdc0adb98a3f51455ca2 extends Twig_Template
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
        $__internal_a3066d41dc9e22ecc97daf92d3a64181b9aeddeb1d1efb0ff03bdf44a2c2223c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3066d41dc9e22ecc97daf92d3a64181b9aeddeb1d1efb0ff03bdf44a2c2223c->enter($__internal_a3066d41dc9e22ecc97daf92d3a64181b9aeddeb1d1efb0ff03bdf44a2c2223c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::Helper/empty.html.twig"));

        $__internal_867826fc66f35e55ad6fc068d5264b5e838b430f1b77b460106df1836b631aff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_867826fc66f35e55ad6fc068d5264b5e838b430f1b77b460106df1836b631aff->enter($__internal_867826fc66f35e55ad6fc068d5264b5e838b430f1b77b460106df1836b631aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::Helper/empty.html.twig"));

        // line 1
        echo "<div class=\"empty\">
    <div class=\"empty-icon-wrapper\">
        <div class=\"empty-icon\">
            <i class=\"fa fa-question\"></i>
        </div><!-- /.empty-icon -->
    </div><!-- /.empty-icon-wrapper -->

    <div class=\"empty-content\">
\t    <h4>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No results found"), "html", null, true);
        echo "</h4>
\t    <p>";
        // line 10
        echo "Sorry about that, but there there are no results for your query.";
        echo "</p>
\t</div><!-- /.empty-content -->
</div><!-- /.empty -->";
        
        $__internal_a3066d41dc9e22ecc97daf92d3a64181b9aeddeb1d1efb0ff03bdf44a2c2223c->leave($__internal_a3066d41dc9e22ecc97daf92d3a64181b9aeddeb1d1efb0ff03bdf44a2c2223c_prof);

        
        $__internal_867826fc66f35e55ad6fc068d5264b5e838b430f1b77b460106df1836b631aff->leave($__internal_867826fc66f35e55ad6fc068d5264b5e838b430f1b77b460106df1836b631aff_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::Helper/empty.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 10,  35 => 9,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"empty\">
    <div class=\"empty-icon-wrapper\">
        <div class=\"empty-icon\">
            <i class=\"fa fa-question\"></i>
        </div><!-- /.empty-icon -->
    </div><!-- /.empty-icon-wrapper -->

    <div class=\"empty-content\">
\t    <h4>{{ 'No results found'|trans }}</h4>
\t    <p>{{ 'Sorry about that, but there there are no results for your query.' }}</p>
\t</div><!-- /.empty-content -->
</div><!-- /.empty -->", "AppBundle::Helper/empty.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/AppBundle/Resources/views/Helper/empty.html.twig");
    }
}
