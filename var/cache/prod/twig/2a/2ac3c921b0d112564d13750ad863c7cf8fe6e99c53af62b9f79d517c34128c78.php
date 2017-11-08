<?php

/* AdminBundle::Helper/toolbar.html.twig */
class __TwigTemplate_ab969a60836feb38f3fdfee2d119e8f74d40e2bc1e399e14102ca33bb3c71630 extends Twig_Template
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
        echo "<div class=\"toolbar\">
    <div class=\"toolbar-inner\">
        <div class=\"toolbar-title\">
            <a class=\"toolbar-avatar\"
               ";
        // line 5
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "getProfile", array(), "method")) {
            echo "style=\"background-image: url('";
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "getProfile", array(), "method"), "avatarImage"), "html", null, true);
            echo "');\"";
        }
        // line 6
        echo "               href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile_update");
        echo "\"></a>
        </div><!-- /.toolbar-title -->

        ";
        // line 9
        $this->loadTemplate("AdminBundle::Helper/sidebar_navigation.html.twig", "AdminBundle::Helper/toolbar.html.twig", 9)->display($context);
        // line 10
        echo "
        <ul class=\"nav nav-bottom flex-column\">
            <li class=\"nav-item\">
                <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\" class=\"nav-link\"><i class=\"fa fa-lock\"></i></a>
            </li>

            <li class=\"nav-item\">
                <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\" class=\"nav-link\"><i class=\"fa fa-arrow-right\"></i></a>
            </li>
        </ul>
    </div><!-- /.toolbar-inner -->
</div><!-- /.toolbar -->";
    }

    public function getTemplateName()
    {
        return "AdminBundle::Helper/toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  45 => 13,  40 => 10,  38 => 9,  31 => 6,  25 => 5,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AdminBundle::Helper/toolbar.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/AdminBundle/Resources/views/Helper/toolbar.html.twig");
    }
}
