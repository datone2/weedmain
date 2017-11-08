<?php

/* AdminBundle::Helper/page_title.html.twig */
class __TwigTemplate_31954d8c45f5f74df557cfd4d56d263ee40c7482dc7aea0ad38e3bc4c4343ccf extends Twig_Template
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
        $__internal_4afa6659c017b2c94f68afb5eedbb0bab6070b71e4c612856b641f36e9610ae5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4afa6659c017b2c94f68afb5eedbb0bab6070b71e4c612856b641f36e9610ae5->enter($__internal_4afa6659c017b2c94f68afb5eedbb0bab6070b71e4c612856b641f36e9610ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::Helper/page_title.html.twig"));

        $__internal_e1328d862dc5bb38425b3b9635990a655e0986789b030d3d57242c23fb3210e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1328d862dc5bb38425b3b9635990a655e0986789b030d3d57242c23fb3210e3->enter($__internal_e1328d862dc5bb38425b3b9635990a655e0986789b030d3d57242c23fb3210e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::Helper/page_title.html.twig"));

        // line 1
        echo "<div class=\"page-title ";
        if (array_key_exists("class", $context)) {
            echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        }
        echo "\">
    ";
        // line 2
        if (array_key_exists("breadcrumbs", $context)) {
            // line 3
            echo "        <ol class=\"breadcrumb\">
            ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new Twig_Error_Runtime('Variable "breadcrumbs" does not exist.', 4, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 5
                echo "                ";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["breadcrumb"], "link", array(), "any", true, true)) {
                    // line 6
                    echo "                    <li class=\"breadcrumb-item\"><a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["breadcrumb"], "link", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["breadcrumb"], "title", array()), "html", null, true);
                    echo "</a></li>
                ";
                } else {
                    // line 8
                    echo "                    <li class=\"breadcrumb-item active\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["breadcrumb"], "title", array()), "html", null, true);
                    echo "</li>
                ";
                }
                // line 10
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "        </ol>
    ";
        }
        // line 13
        echo "
    ";
        // line 14
        if (array_key_exists("title", $context)) {
            // line 15
            echo "        <h2>";
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
            echo "</h2>
    ";
        }
        // line 17
        echo "
    ";
        // line 18
        if (array_key_exists("actions", $context)) {
            // line 19
            echo "        <div class=\"page-title-actions\">
            ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new Twig_Error_Runtime('Variable "actions" does not exist.', 20, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 21
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["action"], "link", array()), "html", null, true);
                echo "\" class=\"btn btn-primary\">
                    ";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["action"], "title", array()), "html", null, true);
                echo "
                </a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "        </div><!-- /.page-title-actions -->
    ";
        }
        // line 27
        echo "</div>";
        
        $__internal_4afa6659c017b2c94f68afb5eedbb0bab6070b71e4c612856b641f36e9610ae5->leave($__internal_4afa6659c017b2c94f68afb5eedbb0bab6070b71e4c612856b641f36e9610ae5_prof);

        
        $__internal_e1328d862dc5bb38425b3b9635990a655e0986789b030d3d57242c23fb3210e3->leave($__internal_e1328d862dc5bb38425b3b9635990a655e0986789b030d3d57242c23fb3210e3_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle::Helper/page_title.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 27,  105 => 25,  96 => 22,  91 => 21,  87 => 20,  84 => 19,  82 => 18,  79 => 17,  73 => 15,  71 => 14,  68 => 13,  64 => 11,  58 => 10,  52 => 8,  44 => 6,  41 => 5,  37 => 4,  34 => 3,  32 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"page-title {% if class is defined %}{{ class }}{% endif %}\">
    {% if breadcrumbs is defined %}
        <ol class=\"breadcrumb\">
            {% for breadcrumb in breadcrumbs %}
                {% if breadcrumb.link is defined %}
                    <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.link }}\">{{ breadcrumb.title }}</a></li>
                {% else %}
                    <li class=\"breadcrumb-item active\">{{ breadcrumb.title }}</li>
                {% endif %}
            {% endfor  %}
        </ol>
    {% endif %}

    {% if title is defined %}
        <h2>{{ title }}</h2>
    {% endif %}

    {% if actions is defined %}
        <div class=\"page-title-actions\">
            {% for action in actions %}
                <a href=\"{{ action.link }}\" class=\"btn btn-primary\">
                    {{ action.title }}
                </a>
            {% endfor %}
        </div><!-- /.page-title-actions -->
    {% endif %}
</div>", "AdminBundle::Helper/page_title.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/AdminBundle/Resources/views/Helper/page_title.html.twig");
    }
}
