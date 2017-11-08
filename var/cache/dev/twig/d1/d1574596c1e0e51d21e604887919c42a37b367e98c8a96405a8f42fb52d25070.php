<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_784f353b581d1ba10607ee44f03bc1c63d1783438c0c988fe8bc29cf53263f95 extends Twig_Template
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
        $__internal_229a9abc8e6ae9b1e2945c7f0a61a9af516437b1131bb3ab8e3729de28bd6d5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_229a9abc8e6ae9b1e2945c7f0a61a9af516437b1131bb3ab8e3729de28bd6d5a->enter($__internal_229a9abc8e6ae9b1e2945c7f0a61a9af516437b1131bb3ab8e3729de28bd6d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        $__internal_757b192f62480a2afd590c0715917e74ef14954c15ce2c43a7300abbb4de170b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_757b192f62480a2afd590c0715917e74ef14954c15ce2c43a7300abbb4de170b->enter($__internal_757b192f62480a2afd590c0715917e74ef14954c15ce2c43a7300abbb4de170b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 3, $this->getSourceContext()); })())) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 4, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 4, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
<form action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    ";
        // line 8
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 8, $this->getSourceContext()); })())) {
            // line 9
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />
    ";
        }
        // line 11
        echo "
    <div class=\"form-group\">
        <label for=\"username\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 14, $this->getSourceContext()); })()), "html", null, true);
        echo "\" required=\"required\" />
    </div><!-- /.form-group -->

    <div class=\"form-group\">
        <label for=\"password\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" />
    </div><!-- /.form-group -->

    <div class=\"clearfix\">
";
        // line 29
        echo "
        <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary\">
    </div>
</form>
";
        
        $__internal_229a9abc8e6ae9b1e2945c7f0a61a9af516437b1131bb3ab8e3729de28bd6d5a->leave($__internal_229a9abc8e6ae9b1e2945c7f0a61a9af516437b1131bb3ab8e3729de28bd6d5a_prof);

        
        $__internal_757b192f62480a2afd590c0715917e74ef14954c15ce2c43a7300abbb4de170b->leave($__internal_757b192f62480a2afd590c0715917e74ef14954c15ce2c43a7300abbb4de170b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 30,  74 => 29,  66 => 18,  59 => 14,  55 => 13,  51 => 11,  45 => 9,  43 => 8,  39 => 7,  36 => 6,  30 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
    {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    {% endif %}

    <div class=\"form-group\">
        <label for=\"username\">{{ 'security.login.username'|trans }}</label>
        <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />
    </div><!-- /.form-group -->

    <div class=\"form-group\">
        <label for=\"password\">{{ 'security.login.password'|trans }}</label>
        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" />
    </div><!-- /.form-group -->

    <div class=\"clearfix\">
{#         <div class=\"form-group\">
            <div class=\"checkbox\">
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
            </div><!-- /.checkbox -->
        </div><!-- /.form-group --> #}

        <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" class=\"btn btn-primary\">
    </div>
</form>
", "FOSUserBundle:Security:login_content.html.twig", "/home/weedmain/dispensary.weedmain.com/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
