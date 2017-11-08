<?php

/* AppBundle::Helper/empty.html.twig */
class __TwigTemplate_42dc41dfd05d35b8799684c4aa7f4fdb7eb0d21a4c29b4865430227ddc249607 extends Twig_Template
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
        return array (  33 => 10,  29 => 9,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle::Helper/empty.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/AppBundle/Resources/views/Helper/empty.html.twig");
    }
}
