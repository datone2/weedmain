<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1688764cf63da73a22a376e7014bd3e68df0e83b3511e99734dbdcff99c072e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b8a4c589e75ba36dde75118005af22b2046ec8dbf7c5e702c1d61916be4c624 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b8a4c589e75ba36dde75118005af22b2046ec8dbf7c5e702c1d61916be4c624->enter($__internal_4b8a4c589e75ba36dde75118005af22b2046ec8dbf7c5e702c1d61916be4c624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c8695232633c511263dde3e84cbd32282c519d6ebb3700c3fa54f180b21e87a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8695232633c511263dde3e84cbd32282c519d6ebb3700c3fa54f180b21e87a2->enter($__internal_c8695232633c511263dde3e84cbd32282c519d6ebb3700c3fa54f180b21e87a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b8a4c589e75ba36dde75118005af22b2046ec8dbf7c5e702c1d61916be4c624->leave($__internal_4b8a4c589e75ba36dde75118005af22b2046ec8dbf7c5e702c1d61916be4c624_prof);

        
        $__internal_c8695232633c511263dde3e84cbd32282c519d6ebb3700c3fa54f180b21e87a2->leave($__internal_c8695232633c511263dde3e84cbd32282c519d6ebb3700c3fa54f180b21e87a2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f6ed7f47b163c458aa2a85892c9dbb93193226119aa6b70e860091b2eb9802ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6ed7f47b163c458aa2a85892c9dbb93193226119aa6b70e860091b2eb9802ea->enter($__internal_f6ed7f47b163c458aa2a85892c9dbb93193226119aa6b70e860091b2eb9802ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6c2a996d960a6f0ba07270a15aa1b83f1847f98741a0453e9c25f94bc308a3dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c2a996d960a6f0ba07270a15aa1b83f1847f98741a0453e9c25f94bc308a3dc->enter($__internal_6c2a996d960a6f0ba07270a15aa1b83f1847f98741a0453e9c25f94bc308a3dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6c2a996d960a6f0ba07270a15aa1b83f1847f98741a0453e9c25f94bc308a3dc->leave($__internal_6c2a996d960a6f0ba07270a15aa1b83f1847f98741a0453e9c25f94bc308a3dc_prof);

        
        $__internal_f6ed7f47b163c458aa2a85892c9dbb93193226119aa6b70e860091b2eb9802ea->leave($__internal_f6ed7f47b163c458aa2a85892c9dbb93193226119aa6b70e860091b2eb9802ea_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_296051382ae2e52cc229cdc2af84e3544186ad4b7e0e2931be16d026ceda1101 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_296051382ae2e52cc229cdc2af84e3544186ad4b7e0e2931be16d026ceda1101->enter($__internal_296051382ae2e52cc229cdc2af84e3544186ad4b7e0e2931be16d026ceda1101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d27291f3a8f2fcbc6738a3367d15d2594354cc55378cd161e45c0bb09ee1552b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d27291f3a8f2fcbc6738a3367d15d2594354cc55378cd161e45c0bb09ee1552b->enter($__internal_d27291f3a8f2fcbc6738a3367d15d2594354cc55378cd161e45c0bb09ee1552b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d27291f3a8f2fcbc6738a3367d15d2594354cc55378cd161e45c0bb09ee1552b->leave($__internal_d27291f3a8f2fcbc6738a3367d15d2594354cc55378cd161e45c0bb09ee1552b_prof);

        
        $__internal_296051382ae2e52cc229cdc2af84e3544186ad4b7e0e2931be16d026ceda1101->leave($__internal_296051382ae2e52cc229cdc2af84e3544186ad4b7e0e2931be16d026ceda1101_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3cb4c9c0de9d26fe40e953399c7c4b24abefff4e042ad98911247b4614ed8be1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cb4c9c0de9d26fe40e953399c7c4b24abefff4e042ad98911247b4614ed8be1->enter($__internal_3cb4c9c0de9d26fe40e953399c7c4b24abefff4e042ad98911247b4614ed8be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_83b7cc03549186c9422cda11f990032a53827487f61b31abef5ef5d404fafd24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83b7cc03549186c9422cda11f990032a53827487f61b31abef5ef5d404fafd24->enter($__internal_83b7cc03549186c9422cda11f990032a53827487f61b31abef5ef5d404fafd24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_83b7cc03549186c9422cda11f990032a53827487f61b31abef5ef5d404fafd24->leave($__internal_83b7cc03549186c9422cda11f990032a53827487f61b31abef5ef5d404fafd24_prof);

        
        $__internal_3cb4c9c0de9d26fe40e953399c7c4b24abefff4e042ad98911247b4614ed8be1->leave($__internal_3cb4c9c0de9d26fe40e953399c7c4b24abefff4e042ad98911247b4614ed8be1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/weedmain/dispensary.weedmain.com/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
