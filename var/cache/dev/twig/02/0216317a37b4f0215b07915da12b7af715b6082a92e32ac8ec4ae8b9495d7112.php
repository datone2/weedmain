<?php

/* AppBundle::Helper/messages.html.twig */
class __TwigTemplate_e032268ad8709adceaf1a9480d32e61a9e637b8760edd1e13a598142674d33df extends Twig_Template
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
        $__internal_80a287fcf2da850feb8687a65dd8ad9a9ed14f1a84365402371a98879561c3fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80a287fcf2da850feb8687a65dd8ad9a9ed14f1a84365402371a98879561c3fb->enter($__internal_80a287fcf2da850feb8687a65dd8ad9a9ed14f1a84365402371a98879561c3fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::Helper/messages.html.twig"));

        $__internal_95cc714ab8b849d15fd4df9eef626a28792bb375e2da2e4acd33a5c416ff0f1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95cc714ab8b849d15fd4df9eef626a28792bb375e2da2e4acd33a5c416ff0f1d->enter($__internal_95cc714ab8b849d15fd4df9eef626a28792bb375e2da2e4acd33a5c416ff0f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::Helper/messages.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["flashes"]) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 3
                echo "        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
        \t<div class=\"alert-inner\">
            \t";
                // line 5
                echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
                echo "
            </div><!-- /.alert-inner -->
        </div><!-- /.alert -->
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_80a287fcf2da850feb8687a65dd8ad9a9ed14f1a84365402371a98879561c3fb->leave($__internal_80a287fcf2da850feb8687a65dd8ad9a9ed14f1a84365402371a98879561c3fb_prof);

        
        $__internal_95cc714ab8b849d15fd4df9eef626a28792bb375e2da2e4acd33a5c416ff0f1d->leave($__internal_95cc714ab8b849d15fd4df9eef626a28792bb375e2da2e4acd33a5c416ff0f1d_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::Helper/messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 3,  29 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for type, flashes in app.session.flashbag.all %}
    {% for flash in flashes %}
        <div class=\"alert alert-{{ type }}\">
        \t<div class=\"alert-inner\">
            \t{{ flash }}
            </div><!-- /.alert-inner -->
        </div><!-- /.alert -->
    {% endfor %}
{% endfor %}", "AppBundle::Helper/messages.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/AppBundle/Resources/views/Helper/messages.html.twig");
    }
}
