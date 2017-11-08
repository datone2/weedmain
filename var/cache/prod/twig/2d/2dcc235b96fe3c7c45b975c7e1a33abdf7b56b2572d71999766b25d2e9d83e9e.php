<?php

/* FrontBundle::Listing/box.html.twig */
class __TwigTemplate_91698d508fe2bce41993932611e2b75a7bc12effac00e6fea5c0bb0fd2bf6195 extends Twig_Template
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
        echo "<div class=\"listing\">
    <div class=\"listing-inner\">
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
        echo "           class=\"listing-image\">

           <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listing_detail", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getSlug", array(), "method"))), "html", null, true);
        echo "\" class=\"listing-image-link\"></a>
            
            ";
        // line 16
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getIsFeatured", array(), "method")) {
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("favorite_add", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getId", array(), "method"))), "html", null, true);
        echo "\">
                <i class=\"fa fa-heart-o\"></i> <span>";
        // line 22
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getFavorites", array(), "method")), "html", null, true);
        echo "</span>
            </a><!-- /.listing-image-favorites -->
\t\t\t<div class=\"listing-box-title\">
\t\t\t <h6 class=\"\">
                <a class=\"color-white text-decoration-none\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listing_detail", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getSlug", array(), "method"))), "html", null, true);
        echo "\">
                    ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getName", array(), "method"), "html", null, true);
        echo "
                </a>

                ";
        // line 30
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getIsVerified", array(), "method")) {
            // line 31
            echo "                    <i class=\"fa fa-check\"></i>
                ";
        }
        // line 33
        echo "            </h6>
\t\t\t";
        // line 34
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getIsFeatured", array(), "method") || twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getAddress", array(), "method"))) {
            // line 35
            echo "                <div class=\"listing-image-content1\">
                    

                    ";
            // line 38
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getAddress", array(), "method")) {
                // line 39
                echo "                        <address>";
                echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getAddress", array(), "method"), "html", null, true));
                echo "</address>
                    ";
            }
            // line 41
            echo "                </div><!-- /.listing-image-content -->
            ";
        }
        // line 43
        echo "\t\t\t";
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getRating", array(), "method")) {
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
            echo "                </div><!-- /.listing-rating -->
            ";
        }
        // line 58
        echo "\t\t\t</div>
        </div>
    </div><!-- /.listing-inner -->
</div><!-- /.listing -->";
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
        return array (  143 => 58,  139 => 56,  133 => 55,  129 => 53,  125 => 51,  122 => 50,  118 => 49,  115 => 48,  109 => 45,  106 => 44,  103 => 43,  99 => 41,  93 => 39,  91 => 38,  86 => 35,  84 => 34,  81 => 33,  77 => 31,  75 => 30,  69 => 27,  65 => 26,  58 => 22,  53 => 21,  47 => 18,  44 => 17,  41 => 16,  36 => 9,  32 => 7,  26 => 5,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle::Listing/box.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Listing/box.html.twig");
    }
}
