<?php

/* FrontBundle::Widget/position.html.twig */
class __TwigTemplate_46bc9ad5e31ed81e4fe641252357b8d8b1a0219468cef92c097a0867296d2f51 extends Twig_Template
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
        $__internal_5d0dae43ec577b56018d526c69c50cf7127582088f9498a2256c180156c0f9eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d0dae43ec577b56018d526c69c50cf7127582088f9498a2256c180156c0f9eb->enter($__internal_5d0dae43ec577b56018d526c69c50cf7127582088f9498a2256c180156c0f9eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Widget/position.html.twig"));

        $__internal_484f38eecb9aefeac44fe19bfc3c8fe8c6421af2d134986de2ed2bbabc34f5c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_484f38eecb9aefeac44fe19bfc3c8fe8c6421af2d134986de2ed2bbabc34f5c1->enter($__internal_484f38eecb9aefeac44fe19bfc3c8fe8c6421af2d134986de2ed2bbabc34f5c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Widget/position.html.twig"));

        // line 1
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 1, $this->getSourceContext()); })()), "getLatitude", array(), "method") && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 1, $this->getSourceContext()); })()), "getLongitude", array(), "method"))) {
            // line 2
            echo "    <div class=\"post-block\">
        ";
            // line 3
            ob_start();
            // line 4
            echo "            <div id=\"google-map-object\"
                 ";
            // line 5
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 5, $this->getSourceContext()); })()), "getFeaturedImage", array(), "method")) {
                echo "data-image=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 5, $this->getSourceContext()); })()), "getFeaturedImage", array(), "method"), "image"), "html", null, true);
                echo "\"";
            }
            // line 6
            echo "                 ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 6, $this->getSourceContext()); })()), "getLatitude", array(), "method")) {
                echo "data-latitude=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 6, $this->getSourceContext()); })()), "getLatitude", array(), "method"), "html", null, true);
                echo "\"";
            }
            // line 7
            echo "                 ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 7, $this->getSourceContext()); })()), "getLongitude", array(), "method")) {
                echo "data-longitude=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 7, $this->getSourceContext()); })()), "getLongitude", array(), "method"), "html", null, true);
                echo "\"";
            }
            // line 8
            echo "                 class=\"google-map-position\"></div>
        ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 10
            echo "
        <div class=\"google-map-content\">
            <div class=\"google-map-address\">
                ";
            // line 13
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 13, $this->getSourceContext()); })()), "getAddress", array(), "method")) {
                // line 14
                echo "                    <address>";
                echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 14, $this->getSourceContext()); })()), "getAddress", array(), "method"), "html", null, true));
                echo "</address>
                ";
            }
            // line 16
            echo "            </div><!-- /.google-map-address -->

            <div class=\"google-map-direction\">
                <a href=\"https://maps.google.com?daddr=";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 19, $this->getSourceContext()); })()), "getLatitude", array(), "method"), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 19, $this->getSourceContext()); })()), "getLongitude", array(), "method"), "html", null, true);
            echo "\" target=\"_blank\">
                    ";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Get Direction"), "html", null, true);
            echo " <i class=\"fa fa-long-arrow-right\"></i>
                </a>
            </div><!-- /.google-map-direction -->
        </div><!-- /.google-map-content -->
    </div><!-- /.post-block -->
";
        }
        
        $__internal_5d0dae43ec577b56018d526c69c50cf7127582088f9498a2256c180156c0f9eb->leave($__internal_5d0dae43ec577b56018d526c69c50cf7127582088f9498a2256c180156c0f9eb_prof);

        
        $__internal_484f38eecb9aefeac44fe19bfc3c8fe8c6421af2d134986de2ed2bbabc34f5c1->leave($__internal_484f38eecb9aefeac44fe19bfc3c8fe8c6421af2d134986de2ed2bbabc34f5c1_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle::Widget/position.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 20,  77 => 19,  72 => 16,  66 => 14,  64 => 13,  59 => 10,  55 => 8,  48 => 7,  41 => 6,  35 => 5,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if listing.getLatitude() and listing.getLongitude() %}
    <div class=\"post-block\">
        {% spaceless %}
            <div id=\"google-map-object\"
                 {% if listing.getFeaturedImage() %}data-image=\"{{ vich_uploader_asset(listing.getFeaturedImage(), 'image') }}\"{% endif %}
                 {% if listing.getLatitude() %}data-latitude=\"{{ listing.getLatitude() }}\"{% endif %}
                 {% if listing.getLongitude() %}data-longitude=\"{{ listing.getLongitude() }}\"{% endif %}
                 class=\"google-map-position\"></div>
        {% endspaceless %}

        <div class=\"google-map-content\">
            <div class=\"google-map-address\">
                {% if listing.getAddress() %}
                    <address>{{ listing.getAddress()|nl2br }}</address>
                {% endif %}
            </div><!-- /.google-map-address -->

            <div class=\"google-map-direction\">
                <a href=\"https://maps.google.com?daddr={{ listing.getLatitude() }},{{ listing.getLongitude() }}\" target=\"_blank\">
                    {{ 'Get Direction'|trans }} <i class=\"fa fa-long-arrow-right\"></i>
                </a>
            </div><!-- /.google-map-direction -->
        </div><!-- /.google-map-content -->
    </div><!-- /.post-block -->
{% endif %}", "FrontBundle::Widget/position.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Widget/position.html.twig");
    }
}
