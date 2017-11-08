<?php

/* FrontBundle::Listing/Header/content.html.twig */
class __TwigTemplate_4f8d0f691ffe87137b45f3335affa95c1e0a83a630f07d613042b6326882346c extends Twig_Template
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
        $__internal_697c898b3148788eb801f9692d7391ed3b186aea365a3b9b6c2329fbbe9d80ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_697c898b3148788eb801f9692d7391ed3b186aea365a3b9b6c2329fbbe9d80ce->enter($__internal_697c898b3148788eb801f9692d7391ed3b186aea365a3b9b6c2329fbbe9d80ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Listing/Header/content.html.twig"));

        $__internal_19e897d60bfd617f92f37f475f375473345e3e17d990c6c3675f5ada42ce60e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19e897d60bfd617f92f37f475f375473345e3e17d990c6c3675f5ada42ce60e8->enter($__internal_19e897d60bfd617f92f37f475f375473345e3e17d990c6c3675f5ada42ce60e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Listing/Header/content.html.twig"));

        // line 1
        echo "<div class=\"listing-header-content\">
    <div class=\"container\">
        ";
        // line 3
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 3, $this->getSourceContext()); })()), "getIsVerified", array(), "method")) {
            // line 4
            echo "            <div class=\"listing-header-label\">
                ";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Verified Listing"), "html", null, true);
            echo "
            </div><!-- /.listing-header-label-->
        ";
        }
        // line 8
        echo "
        <h1>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 9, $this->getSourceContext()); })()), "getName", array(), "method"), "html", null, true);
        echo "</h1>

        ";
        // line 11
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 11, $this->getSourceContext()); })()), "getAddress", array(), "method")) {
            // line 12
            echo "            <address>";
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 12, $this->getSourceContext()); })()), "getAddress", array(), "method"), "html", null, true));
            echo "</address>
        ";
        }
        // line 14
        echo "
        ";
        // line 15
        if (array_key_exists("actions", $context)) {
            // line 16
            echo "            <div class=\"actions\">
                ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new Twig_Error_Runtime('Variable "actions" does not exist.', 17, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 18
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["action"], "link", array()), "html", null, true);
                echo "\" class=\"btn btn-primary\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["action"], "title", array()), "html", null, true);
                echo "</a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "            </div><!-- /.actions -->
        ";
        }
        // line 22
        echo "    </div><!-- /.container -->
</div><!-- /.listing-header-content -->   ";
        
        $__internal_697c898b3148788eb801f9692d7391ed3b186aea365a3b9b6c2329fbbe9d80ce->leave($__internal_697c898b3148788eb801f9692d7391ed3b186aea365a3b9b6c2329fbbe9d80ce_prof);

        
        $__internal_19e897d60bfd617f92f37f475f375473345e3e17d990c6c3675f5ada42ce60e8->leave($__internal_19e897d60bfd617f92f37f475f375473345e3e17d990c6c3675f5ada42ce60e8_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle::Listing/Header/content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 22,  79 => 20,  68 => 18,  64 => 17,  61 => 16,  59 => 15,  56 => 14,  50 => 12,  48 => 11,  43 => 9,  40 => 8,  34 => 5,  31 => 4,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"listing-header-content\">
    <div class=\"container\">
        {% if listing.getIsVerified() %}
            <div class=\"listing-header-label\">
                {{ 'Verified Listing'|trans }}
            </div><!-- /.listing-header-label-->
        {% endif %}

        <h1>{{ listing.getName() }}</h1>

        {% if listing.getAddress() %}
            <address>{{ listing.getAddress()|nl2br }}</address>
        {% endif %}

        {% if actions is defined %}
            <div class=\"actions\">
                {% for action in actions %}
                    <a href=\"{{ action.link }}\" class=\"btn btn-primary\">{{ action.title }}</a>
                {% endfor %}
            </div><!-- /.actions -->
        {% endif %}
    </div><!-- /.container -->
</div><!-- /.listing-header-content -->   ", "FrontBundle::Listing/Header/content.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Listing/Header/content.html.twig");
    }
}
