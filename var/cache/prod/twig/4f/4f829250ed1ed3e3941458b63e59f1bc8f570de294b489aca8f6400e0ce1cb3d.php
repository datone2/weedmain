<?php

/* FrontBundle::Listing/row.html.twig */
class __TwigTemplate_d8d059da748a1a82ec9937f91aa930bc4ca5b2c7b26595186302dc21491006d1 extends Twig_Template
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
        // line 1
        echo "<div class=\"listing-row\">
    <div class=\"listing-row-inner\">
        <div
            ";
        // line 4
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getFeaturedImage", array(), "method")) {
            // line 5
            echo "                style=\"background-image: url('";
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getFeaturedImage", array(), "method"), "image"), "html", null, true);
            echo "');\"
            ";
        }
        // line 7
        echo "           class=\"listing-row-image\">

           <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listing_detail", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getSlug", array(), "method"))), "html", null, true);
        echo "\" class=\"listing-row-image-link\"></a>

            ";
        // line 11
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getPrice", array(), "method")) {
            // line 12
            echo "                <div class=\"listing-row-image-price\">
                    ";
            // line 13
            echo twig_escape_filter($this->env, twig_localized_currency_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getPrice", array(), "method"), ($context["currency"] ?? null)), "html", null, true);
            echo "
                </div><!-- /.listing-row-image-price -->
            ";
        }
        // line 16
        echo "
            <div class=\"listing-row-image-favorites\">
                <i class=\"fa fa-heart\"></i> <span>";
        // line 18
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getFavorites", array(), "method")), "html", null, true);
        echo "</span>
            </div><!-- /.listing-row-image-favorites -->
        </div>

        <div class=\"listing-row-content\">
            ";
        // line 23
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getIsFeatured", array(), "method")) {
            // line 24
            echo "                <div class=\"listing-row-featured\">
                    ";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Featured"), "html", null, true);
            echo "
                </div><!-- /.listing-row-image-featured -->
            ";
        }
        // line 28
        echo "
            <h3>
                <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listing_detail", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getSlug", array(), "method"))), "html", null, true);
        echo "\">
                    ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getName", array(), "method"), "html", null, true);
        echo "
                </a>

                ";
        // line 34
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getIsVerified", array(), "method")) {
            // line 35
            echo "                    <i class=\"fa fa-check\"></i>
                ";
        }
        // line 37
        echo "            </h3>

            ";
        // line 39
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getDescription", array(), "method")) {
            // line 40
            echo "                <p>";
            echo twig_escape_filter($this->env, (twig_slice($this->env, strip_tags(twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getDescription", array(), "method")), 0, 240) . " ..."), "html", null, true);
            echo "</p>
            ";
        }
        // line 42
        echo "
            ";
        // line 43
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getRating", array(), "method")) {
            // line 44
            echo "                <div class=\"listing-row-rating no\">
                    ";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No ratings, yet."), "html", null, true);
            echo "
                </div>
            ";
        } else {
            // line 48
            echo "                <div class=\"listing-row-rating\">
                    ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 50
                echo "                        ";
                if (($context["i"] <= twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getRating", array(), "method"))) {
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
            echo "                </div><!-- /.listing-row-rating -->
            ";
        }
        // line 58
        echo "        </div><!-- /.listing-row-content -->
    </div><!-- /.listing-row-inner -->
</div><!-- /.listing-row -->";
    }

    public function getTemplateName()
    {
        return "FrontBundle::Listing/row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 58,  145 => 56,  139 => 55,  135 => 53,  131 => 51,  128 => 50,  124 => 49,  121 => 48,  115 => 45,  112 => 44,  110 => 43,  107 => 42,  101 => 40,  99 => 39,  95 => 37,  91 => 35,  89 => 34,  83 => 31,  79 => 30,  75 => 28,  69 => 25,  66 => 24,  64 => 23,  56 => 18,  52 => 16,  46 => 13,  43 => 12,  41 => 11,  36 => 9,  32 => 7,  26 => 5,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle::Listing/row.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Listing/row.html.twig");
    }
}
