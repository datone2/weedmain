<?php

/* AdminBundle::Helper/sidebar.html.twig */
class __TwigTemplate_cde4a5348a9906b1a6e5aa8ae82f02fefaef3256833dc42af35e3eb818da4ece extends Twig_Template
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
        echo "<div class=\"sidebar\">
    <div class=\"sidebar-title\">
        <strong>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Hello"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "getDisplayName", array(), "method"), "html", null, true);
        echo "</strong>
        <h2>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Admin Area"), "html", null, true);
        echo "</h2>
    </div><!-- /.sidebar-title -->

    <div class=\"sidebar-content\">
        ";
        // line 8
        $this->loadTemplate("AdminBundle::Helper/sidebar_navigation.html.twig", "AdminBundle::Helper/sidebar.html.twig", 8)->display($context);
        // line 9
        echo "    </div><!-- /.sidebar-content -->
</div><!-- /.sidebar -->";
    }

    public function getTemplateName()
    {
        return "AdminBundle::Helper/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 9,  36 => 8,  29 => 4,  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AdminBundle::Helper/sidebar.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/AdminBundle/Resources/views/Helper/sidebar.html.twig");
    }
}
