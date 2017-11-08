<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_ed6c24b77f6f5d92962aba07aafaab41686abb78101efcd9714f6f8d8e11260c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2b997a950b0f72c9287a04748ec738b5ad19b889128c42ee7c8aed145d61dba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2b997a950b0f72c9287a04748ec738b5ad19b889128c42ee7c8aed145d61dba->enter($__internal_b2b997a950b0f72c9287a04748ec738b5ad19b889128c42ee7c8aed145d61dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_643740ea724d673f51446de1704b3e95e0d81bb6fd63e051db4a9b42776cf25e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_643740ea724d673f51446de1704b3e95e0d81bb6fd63e051db4a9b42776cf25e->enter($__internal_643740ea724d673f51446de1704b3e95e0d81bb6fd63e051db4a9b42776cf25e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2b997a950b0f72c9287a04748ec738b5ad19b889128c42ee7c8aed145d61dba->leave($__internal_b2b997a950b0f72c9287a04748ec738b5ad19b889128c42ee7c8aed145d61dba_prof);

        
        $__internal_643740ea724d673f51446de1704b3e95e0d81bb6fd63e051db4a9b42776cf25e->leave($__internal_643740ea724d673f51446de1704b3e95e0d81bb6fd63e051db4a9b42776cf25e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8a59f89c2ddeed0444692ff0d20b4af535bc693b60ddd3ed9c200addb4852915 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a59f89c2ddeed0444692ff0d20b4af535bc693b60ddd3ed9c200addb4852915->enter($__internal_8a59f89c2ddeed0444692ff0d20b4af535bc693b60ddd3ed9c200addb4852915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f3a8d85a310c914a33455aab2c7496468594817bd14acd1ee860888d651c74a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3a8d85a310c914a33455aab2c7496468594817bd14acd1ee860888d651c74a8->enter($__internal_f3a8d85a310c914a33455aab2c7496468594817bd14acd1ee860888d651c74a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_f3a8d85a310c914a33455aab2c7496468594817bd14acd1ee860888d651c74a8->leave($__internal_f3a8d85a310c914a33455aab2c7496468594817bd14acd1ee860888d651c74a8_prof);

        
        $__internal_8a59f89c2ddeed0444692ff0d20b4af535bc693b60ddd3ed9c200addb4852915->leave($__internal_8a59f89c2ddeed0444692ff0d20b4af535bc693b60ddd3ed9c200addb4852915_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/weedmain/dispensary.weedmain.com/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
