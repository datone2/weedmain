<?php

/* PayumBundle:Profiler:payum.html.twig */
class __TwigTemplate_e455266169d0db9de9944d6d9a1da57dab475ac9d414082b7bad9a25f57417bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "PayumBundle:Profiler:payum.html.twig", 1);
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
        $__internal_8edcd462eab18a27dbe9ceddea1cec39d51a590ff69978fb76ac90262d1952ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8edcd462eab18a27dbe9ceddea1cec39d51a590ff69978fb76ac90262d1952ec->enter($__internal_8edcd462eab18a27dbe9ceddea1cec39d51a590ff69978fb76ac90262d1952ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PayumBundle:Profiler:payum.html.twig"));

        $__internal_15972c10b483b8e347bbd6aa7883c09b0a3583aebfc800977ad08fd08dc0077e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15972c10b483b8e347bbd6aa7883c09b0a3583aebfc800977ad08fd08dc0077e->enter($__internal_15972c10b483b8e347bbd6aa7883c09b0a3583aebfc800977ad08fd08dc0077e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PayumBundle:Profiler:payum.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8edcd462eab18a27dbe9ceddea1cec39d51a590ff69978fb76ac90262d1952ec->leave($__internal_8edcd462eab18a27dbe9ceddea1cec39d51a590ff69978fb76ac90262d1952ec_prof);

        
        $__internal_15972c10b483b8e347bbd6aa7883c09b0a3583aebfc800977ad08fd08dc0077e->leave($__internal_15972c10b483b8e347bbd6aa7883c09b0a3583aebfc800977ad08fd08dc0077e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bf2154b84079ced50cf95efb37d5f420fc7768ee57c1c376785aaf06dca4bec3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf2154b84079ced50cf95efb37d5f420fc7768ee57c1c376785aaf06dca4bec3->enter($__internal_bf2154b84079ced50cf95efb37d5f420fc7768ee57c1c376785aaf06dca4bec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3262efaa0f3533779f4e8d5ac3280a11e07115b30c734cfcde64833331ac199f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3262efaa0f3533779f4e8d5ac3280a11e07115b30c734cfcde64833331ac199f->enter($__internal_3262efaa0f3533779f4e8d5ac3280a11e07115b30c734cfcde64833331ac199f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["icon"] = ('' === $tmp = "        <span class=\"sf-toolbar-status\">Payum</span>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 7
        echo "
    ";
        // line 8
        ob_start();
        // line 9
        echo "        <div class=\"sf-toolbar-info-piece\">
            ";
        // line 11
        echo "        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 13
        echo "
    ";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => true));
        echo "
";
        
        $__internal_3262efaa0f3533779f4e8d5ac3280a11e07115b30c734cfcde64833331ac199f->leave($__internal_3262efaa0f3533779f4e8d5ac3280a11e07115b30c734cfcde64833331ac199f_prof);

        
        $__internal_bf2154b84079ced50cf95efb37d5f420fc7768ee57c1c376785aaf06dca4bec3->leave($__internal_bf2154b84079ced50cf95efb37d5f420fc7768ee57c1c376785aaf06dca4bec3_prof);

    }

    // line 17
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d2fb92f997371c51e0e174750dbd37c5a5e3eaa866b0000814ea6a221cc17bc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2fb92f997371c51e0e174750dbd37c5a5e3eaa866b0000814ea6a221cc17bc1->enter($__internal_d2fb92f997371c51e0e174750dbd37c5a5e3eaa866b0000814ea6a221cc17bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_23cee7e8e64e68506ab840fa7b41ed74d1f247348764208ad2ef11e103b8f98d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23cee7e8e64e68506ab840fa7b41ed74d1f247348764208ad2ef11e103b8f98d->enter($__internal_23cee7e8e64e68506ab840fa7b41ed74d1f247348764208ad2ef11e103b8f98d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 18
        echo "    ";
        // line 19
        echo "    <span class=\"label\">
        <strong>Payum</strong>
    </span>
";
        
        $__internal_23cee7e8e64e68506ab840fa7b41ed74d1f247348764208ad2ef11e103b8f98d->leave($__internal_23cee7e8e64e68506ab840fa7b41ed74d1f247348764208ad2ef11e103b8f98d_prof);

        
        $__internal_d2fb92f997371c51e0e174750dbd37c5a5e3eaa866b0000814ea6a221cc17bc1->leave($__internal_d2fb92f997371c51e0e174750dbd37c5a5e3eaa866b0000814ea6a221cc17bc1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_02a121b578a6b96683de12ce5e44ab56704f8f97c4fd10f76a0c63b6c0c17357 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02a121b578a6b96683de12ce5e44ab56704f8f97c4fd10f76a0c63b6c0c17357->enter($__internal_02a121b578a6b96683de12ce5e44ab56704f8f97c4fd10f76a0c63b6c0c17357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1217bf811b3e7dd8b3310721fdb8c622212ff9044afb64b3117b51fa6f44103d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1217bf811b3e7dd8b3310721fdb8c622212ff9044afb64b3117b51fa6f44103d->enter($__internal_1217bf811b3e7dd8b3310721fdb8c622212ff9044afb64b3117b51fa6f44103d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Gateway execution graph</h2>

    <pre>";
        // line 27
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "dump", array(), "method");
        echo "</pre>
";
        
        $__internal_1217bf811b3e7dd8b3310721fdb8c622212ff9044afb64b3117b51fa6f44103d->leave($__internal_1217bf811b3e7dd8b3310721fdb8c622212ff9044afb64b3117b51fa6f44103d_prof);

        
        $__internal_02a121b578a6b96683de12ce5e44ab56704f8f97c4fd10f76a0c63b6c0c17357->leave($__internal_02a121b578a6b96683de12ce5e44ab56704f8f97c4fd10f76a0c63b6c0c17357_prof);

    }

    public function getTemplateName()
    {
        return "PayumBundle:Profiler:payum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 27,  115 => 25,  106 => 24,  93 => 19,  91 => 18,  82 => 17,  70 => 14,  67 => 13,  63 => 11,  60 => 9,  58 => 8,  55 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        <span class=\"sf-toolbar-status\">Payum</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            {# ... #}
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { 'link': true }) }}
{% endblock %}

{% block menu %}
    {# This left-hand menu appears when using the full-screen profiler. #}
    <span class=\"label\">
        <strong>Payum</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Gateway execution graph</h2>

    <pre>{{ collector.dump()|raw }}</pre>
{% endblock %}", "PayumBundle:Profiler:payum.html.twig", "/home/weedmain/dispensary.weedmain.com/vendor/payum/payum-bundle/Resources/views/Profiler/payum.html.twig");
    }
}
