<?php

/* FrontBundle::Listing/index.html.twig */
class __TwigTemplate_b0fb91f6fde669b9cd1dcaa3f5c08fc28f7d9dcdc09df52b3de6d0de4789dae2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::Layout/base_fullwidth.html.twig", "FrontBundle::Listing/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::Layout/base_fullwidth.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["menu_active"] = "listings";
        // line 5
        $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Listings & Classifieds");
        // line 7
        $context["actions"] = array(0 => array("link" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search_create", array("entity" => "listing")), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save Search Query")));
        // line 14
        $context["breadcrumbs"] = array(0 => array("link" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home")), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Listings")));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        echo "\t    
\t<div class=\"content content-map-results\">
\t\t<div class=\"container-fluid\"> 
\t\t\t<div class=\"filter-wrapper\">
\t\t\t\t<div class=\"filter\">
\t\t\t        ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["filter"] ?? null), 'form_start');
        echo "
\t\t\t        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["filter"] ?? null), 'widget');
        echo "
\t\t\t        ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["filter"] ?? null), 'form_end');
        echo "
\t\t    \t</div><!-- /.filter -->
\t    \t</div><!-- /.filter-wrapper -->
\t            
\t        ";
        // line 36
        $this->loadTemplate("FrontBundle::Listing/options.html.twig", "FrontBundle::Listing/index.html.twig", 36)->display($context);
        echo " 

\t\t\t";
        // line 38
        if (twig_length_filter($this->env, ($context["listings"] ?? null))) {
            echo "\t\t\t\t
\t\t\t\t";
            // line 39
            if ((($context["display"] ?? null) == "grid")) {
                // line 40
                echo "\t\t\t\t\t<div class=\"row\">\t\t\t\t\t
\t\t\t\t\t\t";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["listings"] ?? null));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["listing"]) {
                    echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t";
                    // line 43
                    $this->loadTemplate("FrontBundle::Listing/box.html.twig", "FrontBundle::Listing/index.html.twig", 43)->display($context);
                    // line 44
                    echo "\t\t\t\t\t\t\t</div><!-- /.col-* -->\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listing'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "\t\t\t\t\t
\t\t\t\t\t</div><!-- /.row -->
\t\t\t\t";
            } elseif ((            // line 47
($context["display"] ?? null) == "row")) {
                echo "\t\t\t\t\t\t
\t\t\t\t\t";
                // line 48
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["listings"] ?? null));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["listing"]) {
                    // line 49
                    echo "\t\t\t\t\t\t";
                    $this->loadTemplate("FrontBundle::Listing/row.html.twig", "FrontBundle::Listing/index.html.twig", 49)->display($context);
                    echo "\t\t\t\t\t\t
\t\t\t\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listing'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "\t\t\t\t";
            }
            // line 52
            echo "\t\t\t";
        } else {
            // line 53
            echo "\t\t\t\t";
            $this->loadTemplate("AppBundle::Helper/empty.html.twig", "FrontBundle::Listing/index.html.twig", 53)->display($context);
            // line 54
            echo "\t\t\t";
        }
        // line 55
        echo "\t\t</div><!-- /.container -->
\t</div><!-- /.content -->\t

\t<div class=\"content-map\">
\t\t<div class=\"content-map-inner\">
\t\t\t<div id=\"google-map-markers\" 
\t\t\t\t";
        // line 61
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "get", array(0 => "place_latitude"), "method") && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "get", array(0 => "place_longitude"), "method"))) {
            // line 62
            echo "\t\t\t\t\tdata-latitude=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "get", array(0 => "place_latitude"), "method"), "html", null, true);
            echo "\"
\t\t\t\t\tdata-longitude=\"";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "get", array(0 => "place_longitude"), "method"), "html", null, true);
            echo "\"
\t\t\t\t";
        }
        // line 65
        echo "\t\t\t\t class=\"google-map-markers\">
\t\t\t\t \t";
        // line 66
        if (twig_length_filter($this->env, ($context["listings"] ?? null))) {
            // line 67
            echo "\t\t\t\t \t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["listings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["listing"]) {
                // line 68
                echo "\t\t\t\t \t\t\t";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getLatitude", array(), "method") && twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getLongitude", array(), "method"))) {
                    // line 69
                    echo "\t\t\t\t \t\t\t\t";
                    ob_start();
                    echo "<div data-latitude=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getLatitude", array(), "method"), "html", null, true);
                    echo "\" 
\t\t\t\t \t\t\t\t\t data-longitude=\"";
                    // line 70
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getLongitude", array(), "method"), "html", null, true);
                    echo "\"
\t\t\t\t \t\t\t\t\t data-link=\"";
                    // line 71
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listing_detail", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getSlug", array(), "method"))), "html", null, true);
                    echo "\"
\t\t\t\t \t\t\t\t\t data-id=\"";
                    // line 72
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getId", array(), "method"), "html", null, true);
                    echo "\"
\t\t\t\t \t\t\t\t\t ";
                    // line 73
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getPrice", array(), "method")) {
                        echo "data-price=\"";
                        echo twig_escape_filter($this->env, twig_localized_currency_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getPrice", array(), "method"), ($context["currency"] ?? null)), "html", null, true);
                        echo "\"";
                    }
                    // line 74
                    echo "\t\t\t\t \t\t\t\t\t ";
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getName", array(), "method")) {
                        echo "data-name=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getName", array(), "method"), "html", null, true);
                        echo "\"";
                    }
                    // line 75
                    echo "\t\t\t\t \t\t\t\t\t ";
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getAddress", array(), "method")) {
                        echo "data-address=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getAddress", array(), "method"), "html", null, true);
                        echo "\"";
                    }
                    // line 76
                    echo "\t\t\t\t \t\t\t\t     ";
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getFeaturedImage", array(), "method")) {
                        echo "data-image=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(twig_get_attribute($this->env, $this->getSourceContext(), $context["listing"], "getFeaturedImage", array(), "method"), "image"), "html", null, true);
                        echo "\"";
                    }
                    echo "></div>";
                    echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                    // line 77
                    echo "\t\t\t\t \t\t\t";
                }
                // line 78
                echo "\t\t\t\t \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listing'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "\t\t\t\t \t";
        }
        // line 80
        echo "\t\t\t</div><!-- /.google-map-markers -->
\t\t</div><!-- /.content-map-inner -->

\t\t<div class=\"content-map-actions\">
\t\t\t<div id=\"google-map-action-zoom-in\" class=\"content-map-action\">
\t\t\t\t<i class=\"fa fa-plus\"></i>
\t\t\t</div><!-- /.content-map-action -->

\t\t\t<div id=\"google-map-action-zoom-out\" class=\"content-map-action\">
\t\t\t\t<i class=\"fa fa-minus\"></i>
\t\t\t</div><!-- /.content-map-action -->\t\t\t\t
\t\t</div><!-- /.content-map-actions -->\t\t
\t</div><!-- /.content-map -->
";
    }

    public function getTemplateName()
    {
        return "FrontBundle::Listing/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 80,  263 => 79,  257 => 78,  254 => 77,  245 => 76,  238 => 75,  231 => 74,  225 => 73,  221 => 72,  217 => 71,  213 => 70,  206 => 69,  203 => 68,  198 => 67,  196 => 66,  193 => 65,  188 => 63,  183 => 62,  181 => 61,  173 => 55,  170 => 54,  167 => 53,  164 => 52,  161 => 51,  144 => 49,  127 => 48,  123 => 47,  119 => 45,  104 => 44,  102 => 43,  82 => 41,  79 => 40,  77 => 39,  73 => 38,  68 => 36,  61 => 32,  57 => 31,  53 => 30,  44 => 25,  38 => 23,  34 => 1,  32 => 14,  30 => 7,  28 => 5,  26 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle::Listing/index.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Listing/index.html.twig");
    }
}
