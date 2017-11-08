<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_bb01f3aa83deeded78098d1bbc82fd28410b0544d681984c519d5a4aac13147d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::Layout/base_simple.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body_class' => array($this, 'block_body_class'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::Layout/base_simple.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a01e5915131bec74ef30a5c582ed30c19b04a052ff64415967b7f1c3ba8a8c89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a01e5915131bec74ef30a5c582ed30c19b04a052ff64415967b7f1c3ba8a8c89->enter($__internal_a01e5915131bec74ef30a5c582ed30c19b04a052ff64415967b7f1c3ba8a8c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_1b3e2fa6f3e35d3426db7c1bf823d812473a82b9a3b1e3e1f4f73ab7d98a07d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b3e2fa6f3e35d3426db7c1bf823d812473a82b9a3b1e3e1f4f73ab7d98a07d5->enter($__internal_1b3e2fa6f3e35d3426db7c1bf823d812473a82b9a3b1e3e1f4f73ab7d98a07d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a01e5915131bec74ef30a5c582ed30c19b04a052ff64415967b7f1c3ba8a8c89->leave($__internal_a01e5915131bec74ef30a5c582ed30c19b04a052ff64415967b7f1c3ba8a8c89_prof);

        
        $__internal_1b3e2fa6f3e35d3426db7c1bf823d812473a82b9a3b1e3e1f4f73ab7d98a07d5->leave($__internal_1b3e2fa6f3e35d3426db7c1bf823d812473a82b9a3b1e3e1f4f73ab7d98a07d5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_368942d8b3863a41ea6904fbaf9467a4cce6ed50f9b37f8826df29592ad81430 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_368942d8b3863a41ea6904fbaf9467a4cce6ed50f9b37f8826df29592ad81430->enter($__internal_368942d8b3863a41ea6904fbaf9467a4cce6ed50f9b37f8826df29592ad81430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_36ea8229c10becc3f2197383e7f75fe3cb1fe907263322098ea47bb1d7ea6c39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36ea8229c10becc3f2197383e7f75fe3cb1fe907263322098ea47bb1d7ea6c39->enter($__internal_36ea8229c10becc3f2197383e7f75fe3cb1fe907263322098ea47bb1d7ea6c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sign In"), "html", null, true);
        
        $__internal_36ea8229c10becc3f2197383e7f75fe3cb1fe907263322098ea47bb1d7ea6c39->leave($__internal_36ea8229c10becc3f2197383e7f75fe3cb1fe907263322098ea47bb1d7ea6c39_prof);

        
        $__internal_368942d8b3863a41ea6904fbaf9467a4cce6ed50f9b37f8826df29592ad81430->leave($__internal_368942d8b3863a41ea6904fbaf9467a4cce6ed50f9b37f8826df29592ad81430_prof);

    }

    // line 5
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_48a60dc191014dcf462e43b1ab217a5705c2c3bee9600ca6163063bbdffe4a22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48a60dc191014dcf462e43b1ab217a5705c2c3bee9600ca6163063bbdffe4a22->enter($__internal_48a60dc191014dcf462e43b1ab217a5705c2c3bee9600ca6163063bbdffe4a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_f13bfc5c12a40722f7af3f9a4749d0f7bf87137f131f62bbede3d59295b67293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f13bfc5c12a40722f7af3f9a4749d0f7bf87137f131f62bbede3d59295b67293->enter($__internal_f13bfc5c12a40722f7af3f9a4749d0f7bf87137f131f62bbede3d59295b67293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "page-center";
        
        $__internal_f13bfc5c12a40722f7af3f9a4749d0f7bf87137f131f62bbede3d59295b67293->leave($__internal_f13bfc5c12a40722f7af3f9a4749d0f7bf87137f131f62bbede3d59295b67293_prof);

        
        $__internal_48a60dc191014dcf462e43b1ab217a5705c2c3bee9600ca6163063bbdffe4a22->leave($__internal_48a60dc191014dcf462e43b1ab217a5705c2c3bee9600ca6163063bbdffe4a22_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_c28f2a3b2121b2160ae94a4f07e7ac4eb1a9217b76dce291c206cc788eccf551 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c28f2a3b2121b2160ae94a4f07e7ac4eb1a9217b76dce291c206cc788eccf551->enter($__internal_c28f2a3b2121b2160ae94a4f07e7ac4eb1a9217b76dce291c206cc788eccf551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a7feaacb688e0195a9120cdefc1259cc93160409d1797c51435729bec83bd7e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7feaacb688e0195a9120cdefc1259cc93160409d1797c51435729bec83bd7e5->enter($__internal_a7feaacb688e0195a9120cdefc1259cc93160409d1797c51435729bec83bd7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <div class=\"form-center\">
        <h1>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Login"), "html", null, true);
        echo "</h1>

        <p>
            ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Don't have an account? <a href=\"%link%\">Create new account</a>, it takes less than a minute.", array("%link%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register")), "messages");
        // line 15
        echo "        </p>

        ";
        // line 17
        $this->loadTemplate("FOSUserBundle:Security:login_content.html.twig", "@FOSUser/Security/login.html.twig", 17)->display($context);
        // line 18
        echo "
        <ul class=\"nav nav-pills\">
            <li class=\"nav-item\"><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"nav-link\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Return Back"), "html", null, true);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" class=\"nav-link\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Registration"), "html", null, true);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\" class=\"nav-link\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Forgot Password?"), "html", null, true);
        echo "</a></li>
        </ul>
    </div><!-- /.form-center -->
";
        
        $__internal_a7feaacb688e0195a9120cdefc1259cc93160409d1797c51435729bec83bd7e5->leave($__internal_a7feaacb688e0195a9120cdefc1259cc93160409d1797c51435729bec83bd7e5_prof);

        
        $__internal_c28f2a3b2121b2160ae94a4f07e7ac4eb1a9217b76dce291c206cc788eccf551->leave($__internal_c28f2a3b2121b2160ae94a4f07e7ac4eb1a9217b76dce291c206cc788eccf551_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 22,  114 => 21,  108 => 20,  104 => 18,  102 => 17,  98 => 15,  96 => 12,  90 => 9,  87 => 8,  78 => 7,  60 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FrontBundle::Layout/base_simple.html.twig\" %}

{% block title %}{{ 'Sign In'|trans }}{% endblock %}

{% block body_class %}page-center{% endblock %}

{% block content %}
    <div class=\"form-center\">
        <h1>{{ 'Login'|trans }}</h1>

        <p>
            {% trans with {'%link%': path('fos_user_registration_register')} %}
                Don't have an account? <a href=\"%link%\">Create new account</a>, it takes less than a minute.
            {% endtrans %}
        </p>

        {% include('FOSUserBundle:Security:login_content.html.twig') %}

        <ul class=\"nav nav-pills\">
            <li class=\"nav-item\"><a href=\"{{ path('homepage') }}\" class=\"nav-link\">{{ 'Return Back'|trans }}</a></li>
            <li class=\"nav-item\"><a href=\"{{ path('fos_user_registration_register') }}\" class=\"nav-link\">{{ 'Registration'|trans }}</a></li>
            <li class=\"nav-item\"><a href=\"{{ path('fos_user_resetting_request') }}\" class=\"nav-link\">{{ 'Forgot Password?'|trans }}</a></li>
        </ul>
    </div><!-- /.form-center -->
{% endblock %}", "@FOSUser/Security/login.html.twig", "/home/weedmain/dispensary.weedmain.com/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
