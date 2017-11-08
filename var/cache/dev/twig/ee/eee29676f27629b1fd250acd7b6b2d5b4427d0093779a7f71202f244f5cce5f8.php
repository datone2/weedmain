<?php

/* FrontBundle::Listing/box.html.twig */
class __TwigTemplate_131e2bfcf17df418a4977c187aadb196c5df8289aff7793e746e6c24011e4347 extends Twig_Template
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
        $__internal_6b9f6e449c2e4a38a4303c7f08b6f97fed8e1a69e2d74d8a93d6f514a29e67c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b9f6e449c2e4a38a4303c7f08b6f97fed8e1a69e2d74d8a93d6f514a29e67c3->enter($__internal_6b9f6e449c2e4a38a4303c7f08b6f97fed8e1a69e2d74d8a93d6f514a29e67c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Listing/box.html.twig"));

        $__internal_f5ced5a12473a97297ab79bbe4257e3e9b689fa1dae5e8c3239cb040f98bbb36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5ced5a12473a97297ab79bbe4257e3e9b689fa1dae5e8c3239cb040f98bbb36->enter($__internal_f5ced5a12473a97297ab79bbe4257e3e9b689fa1dae5e8c3239cb040f98bbb36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Listing/box.html.twig"));

        // line 1
        echo "<div class=\"listing\">
    <div class=\"listing-inner\">
        <div
            ";
        // line 4
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 4, $this->getSourceContext()); })()), "getFeaturedImage", array(), "method")) {
            // line 5
            echo "                style=\"background-image: url('";
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 5, $this->getSourceContext()); })()), "getFeaturedImage", array(), "method"), "image"), "html", null, true);
            echo "');\"
            ";
        }
        // line 7
        echo "           class=\"listing-image\">

           <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listing_detail", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 9, $this->getSourceContext()); })()), "getSlug", array(), "method"))), "html", null, true);
        echo "\" class=\"listing-image-link\"></a>
            
            ";
        // line 16
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 16, $this->getSourceContext()); })()), "getIsFeatured", array(), "method")) {
            // line 17
            echo "                        <div class=\"listing-image-featured\">
                            ";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Featured"), "html", null, true);
            echo "
                        </div><!-- /.listing-image-featured -->
                    ";
        }
        // line 21
        echo "            <a class=\"listing-image-favorites\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("favorite_add", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 21, $this->getSourceContext()); })()), "getId", array(), "method"))), "html", null, true);
        echo "\">
                <i class=\"fa fa-heart-o\"></i> <span>";
        // line 22
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 22, $this->getSourceContext()); })()), "getFavorites", array(), "method")), "html", null, true);
        echo "</span>
            </a><!-- /.listing-image-favorites -->
\t\t\t<div class=\"listing-box-title\">
\t\t\t <h6 class=\"\">
                <a class=\"color-white text-decoration-none\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listing_detail", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 26, $this->getSourceContext()); })()), "getSlug", array(), "method"))), "html", null, true);
        echo "\">
                    ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 27, $this->getSourceContext()); })()), "getName", array(), "method"), "html", null, true);
        echo "
                </a>

                ";
        // line 30
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 30, $this->getSourceContext()); })()), "getIsVerified", array(), "method")) {
            // line 31
            echo "                    <i class=\"fa fa-check\"></i>
                ";
        }
        // line 33
        echo "            </h6>
\t\t\t";
        // line 34
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 34, $this->getSourceContext()); })()), "getIsFeatured", array(), "method") || twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 34, $this->getSourceContext()); })()), "getAddress", array(), "method"))) {
            // line 35
            echo "                <div class=\"listing-image-content1\">
                    

                    ";
            // line 38
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 38, $this->getSourceContext()); })()), "getAddress", array(), "method")) {
                // line 39
                echo "                        <address>";
                echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 39, $this->getSourceContext()); })()), "getAddress", array(), "method"), "html", null, true));
                echo "</address>
                    ";
            }
            // line 41
            echo "                </div><!-- /.listing-image-content -->
            ";
        }
        // line 43
        echo "\t\t\t";
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 43, $this->getSourceContext()); })()), "getRating", array(), "method")) {
            // line 44
            echo "                <div class=\"listing-rating-no color-white\">
                    ";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No ratings, yet."), "html", null, true);
            echo "
                </div>
            ";
        } else {
            // line 48
            echo "                <div class=\"listing-rating\">
                    ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 50
                echo "                        ";
                if (($context["i"] <= twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 50, $this->getSourceContext()); })()), "getRating", array(), "method"))) {
                    // line 51
                    echo "                            <i class=\"fa fa-star\"></i>
                        ";
                } else {
                    // line 53
                    echo "                            <i class=\"fa fa-star-o\"></i>
                        ";
                }
                // line 55
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                </div><!-- /.listing-rating -->
            ";
        }
        // line 58
        echo "\t\t\t</div>
        </div>
    </div><!-- /.listing-inner -->
</div><!-- /.listing -->";
        
        $__internal_6b9f6e449c2e4a38a4303c7f08b6f97fed8e1a69e2d74d8a93d6f514a29e67c3->leave($__internal_6b9f6e449c2e4a38a4303c7f08b6f97fed8e1a69e2d74d8a93d6f514a29e67c3_prof);

        
        $__internal_f5ced5a12473a97297ab79bbe4257e3e9b689fa1dae5e8c3239cb040f98bbb36->leave($__internal_f5ced5a12473a97297ab79bbe4257e3e9b689fa1dae5e8c3239cb040f98bbb36_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle::Listing/box.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 58,  145 => 56,  139 => 55,  135 => 53,  131 => 51,  128 => 50,  124 => 49,  121 => 48,  115 => 45,  112 => 44,  109 => 43,  105 => 41,  99 => 39,  97 => 38,  92 => 35,  90 => 34,  87 => 33,  83 => 31,  81 => 30,  75 => 27,  71 => 26,  64 => 22,  59 => 21,  53 => 18,  50 => 17,  47 => 16,  42 => 9,  38 => 7,  32 => 5,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"listing\">
    <div class=\"listing-inner\">
        <div
            {% if listing.getFeaturedImage() %}
                style=\"background-image: url('{{ vich_uploader_asset(listing.getFeaturedImage(), 'image') }}');\"
            {% endif %}
           class=\"listing-image\">

           <a href=\"{{ path('listing_detail', {'slug': listing.getSlug()}) }}\" class=\"listing-image-link\"></a>
            
            {#{% if listing.getPrice() %}
                <div class=\"listing-image-price\">
                    {{ listing.getPrice()|localizedcurrency(currency) }}
                </div><!-- /.listing-image-price -->
            {% endif %}#}
\t\t\t{% if listing.getIsFeatured() %}
                        <div class=\"listing-image-featured\">
                            {{ 'Featured'|trans }}
                        </div><!-- /.listing-image-featured -->
                    {% endif %}
            <a class=\"listing-image-favorites\" href=\"{{ path('favorite_add', {'id': listing.getId()})}}\">
                <i class=\"fa fa-heart-o\"></i> <span>{{ listing.getFavorites()|length }}</span>
            </a><!-- /.listing-image-favorites -->
\t\t\t<div class=\"listing-box-title\">
\t\t\t <h6 class=\"\">
                <a class=\"color-white text-decoration-none\" href=\"{{ path('listing_detail', {slug: listing.getSlug()}) }}\">
                    {{ listing.getName() }}
                </a>

                {% if listing.getIsVerified() %}
                    <i class=\"fa fa-check\"></i>
                {% endif %}
            </h6>
\t\t\t{% if listing.getIsFeatured() or listing.getAddress() %}
                <div class=\"listing-image-content1\">
                    

                    {% if listing.getAddress() %}
                        <address>{{ listing.getAddress()|nl2br }}</address>
                    {% endif %}
                </div><!-- /.listing-image-content -->
            {% endif %}
\t\t\t{% if not listing.getRating() %}
                <div class=\"listing-rating-no color-white\">
                    {{ 'No ratings, yet.'|trans }}
                </div>
            {% else %}
                <div class=\"listing-rating\">
                    {% for i in range(1, 5) %}
                        {% if i <= listing.getRating() %}
                            <i class=\"fa fa-star\"></i>
                        {% else %}
                            <i class=\"fa fa-star-o\"></i>
                        {% endif %}
                    {% endfor %}
                </div><!-- /.listing-rating -->
            {% endif %}
\t\t\t</div>
        </div>
    </div><!-- /.listing-inner -->
</div><!-- /.listing -->", "FrontBundle::Listing/box.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Listing/box.html.twig");
    }
}
