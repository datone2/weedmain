<?php

/* AdminBundle::Helper/toolbar.html.twig */
class __TwigTemplate_e4a7566b03f4d542b1ed5c2dcb798d25b509150828e2600cdfb0af8a2009931a extends Twig_Template
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
        $__internal_4986f8c0f3b3554d8f8c5ca49e7507f5ea54ac45d12ab241879ed0877e65d63c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4986f8c0f3b3554d8f8c5ca49e7507f5ea54ac45d12ab241879ed0877e65d63c->enter($__internal_4986f8c0f3b3554d8f8c5ca49e7507f5ea54ac45d12ab241879ed0877e65d63c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::Helper/toolbar.html.twig"));

        $__internal_6debfda1a423e2674a56cde9be10d60043288d01bcb228a735c58e51b39c0e58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6debfda1a423e2674a56cde9be10d60043288d01bcb228a735c58e51b39c0e58->enter($__internal_6debfda1a423e2674a56cde9be10d60043288d01bcb228a735c58e51b39c0e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::Helper/toolbar.html.twig"));

        // line 1
        echo "<div class=\"toolbar\">
    <div class=\"toolbar-inner\">
        <div class=\"toolbar-title\">
            <a class=\"toolbar-avatar\"
               ";
        // line 5
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->getSourceContext()); })()), "user", array()), "getProfile", array(), "method")) {
            echo "style=\"background-image: url('";
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->getSourceContext()); })()), "user", array()), "getProfile", array(), "method"), "avatarImage"), "html", null, true);
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
        
        $__internal_4986f8c0f3b3554d8f8c5ca49e7507f5ea54ac45d12ab241879ed0877e65d63c->leave($__internal_4986f8c0f3b3554d8f8c5ca49e7507f5ea54ac45d12ab241879ed0877e65d63c_prof);

        
        $__internal_6debfda1a423e2674a56cde9be10d60043288d01bcb228a735c58e51b39c0e58->leave($__internal_6debfda1a423e2674a56cde9be10d60043288d01bcb228a735c58e51b39c0e58_prof);

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
        return array (  58 => 17,  51 => 13,  46 => 10,  44 => 9,  37 => 6,  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"toolbar\">
    <div class=\"toolbar-inner\">
        <div class=\"toolbar-title\">
            <a class=\"toolbar-avatar\"
               {% if app.user.getProfile() %}style=\"background-image: url('{{ vich_uploader_asset(app.user.getProfile(), 'avatarImage') }}');\"{% endif %}
               href=\"{{ path('profile_update') }}\"></a>
        </div><!-- /.toolbar-title -->

        {% include 'AdminBundle::Helper/sidebar_navigation.html.twig' %}

        <ul class=\"nav nav-bottom flex-column\">
            <li class=\"nav-item\">
                <a href=\"{{ path('fos_user_change_password') }}\" class=\"nav-link\"><i class=\"fa fa-lock\"></i></a>
            </li>

            <li class=\"nav-item\">
                <a href=\"{{ path('fos_user_security_logout') }}\" class=\"nav-link\"><i class=\"fa fa-arrow-right\"></i></a>
            </li>
        </ul>
    </div><!-- /.toolbar-inner -->
</div><!-- /.toolbar -->", "AdminBundle::Helper/toolbar.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/AdminBundle/Resources/views/Helper/toolbar.html.twig");
    }
}
