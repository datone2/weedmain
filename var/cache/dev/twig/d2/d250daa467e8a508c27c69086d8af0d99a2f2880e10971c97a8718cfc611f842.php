<?php

/* AdminBundle::Helper/sidebar.html.twig */
class __TwigTemplate_9788f50f7ad03927816eadd051c3fc1144aab8bfa97082e02cbc3178de05bf0f extends Twig_Template
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
        $__internal_a94065dfbd15ebf98874e2940640def197a1c2f2fa53ee45df6e723ba165d5e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a94065dfbd15ebf98874e2940640def197a1c2f2fa53ee45df6e723ba165d5e2->enter($__internal_a94065dfbd15ebf98874e2940640def197a1c2f2fa53ee45df6e723ba165d5e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::Helper/sidebar.html.twig"));

        $__internal_9addd9629d16c73f625a324a9049d8be59715f0746b1b0764d3b0cdd75360ef5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9addd9629d16c73f625a324a9049d8be59715f0746b1b0764d3b0cdd75360ef5->enter($__internal_9addd9629d16c73f625a324a9049d8be59715f0746b1b0764d3b0cdd75360ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::Helper/sidebar.html.twig"));

        // line 1
        echo "<div class=\"sidebar\">
    <div class=\"sidebar-title\">
        <strong>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Hello"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->getSourceContext()); })()), "user", array()), "getDisplayName", array(), "method"), "html", null, true);
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
        
        $__internal_a94065dfbd15ebf98874e2940640def197a1c2f2fa53ee45df6e723ba165d5e2->leave($__internal_a94065dfbd15ebf98874e2940640def197a1c2f2fa53ee45df6e723ba165d5e2_prof);

        
        $__internal_9addd9629d16c73f625a324a9049d8be59715f0746b1b0764d3b0cdd75360ef5->leave($__internal_9addd9629d16c73f625a324a9049d8be59715f0746b1b0764d3b0cdd75360ef5_prof);

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
        return array (  44 => 9,  42 => 8,  35 => 4,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"sidebar\">
    <div class=\"sidebar-title\">
        <strong>{{ 'Hello'|trans }} {{ app.user.getDisplayName() }}</strong>
        <h2>{{ 'Admin Area'|trans }}</h2>
    </div><!-- /.sidebar-title -->

    <div class=\"sidebar-content\">
        {% include 'AdminBundle::Helper/sidebar_navigation.html.twig' %}
    </div><!-- /.sidebar-content -->
</div><!-- /.sidebar -->", "AdminBundle::Helper/sidebar.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/AdminBundle/Resources/views/Helper/sidebar.html.twig");
    }
}
