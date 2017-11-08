<?php

/* FrontBundle::Listing/detail.html.twig */
class __TwigTemplate_cccc45318711ec53ff70e20147631fb4b0b11b6a468060b3f33a728972db18e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::Layout/base.html.twig", "FrontBundle::Listing/detail.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::Layout/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["menu_active"] = "listings";
        // line 5
        $context["title"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getName", array(), "method");
        // line 7
        $context["actions"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Claim"), "link" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claim_create", array("id" => twig_get_attribute($this->env, $this->getSourceContext(),         // line 10
($context["listing"] ?? null), "getId", array(), "method")))), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Favorite"), "link" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("favorite_add", array("id" => twig_get_attribute($this->env, $this->getSourceContext(),         // line 14
($context["listing"] ?? null), "getId", array(), "method")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getHeader", array(), "method") == twig_constant("DirectoryPlatform\\AppBundle\\Entity\\Listing::HEADER_GALLERY"))) {
            // line 22
            echo "        ";
            $this->loadTemplate("FrontBundle::Listing/Header/gallery.html.twig", "FrontBundle::Listing/detail.html.twig", 22)->display($context);
            // line 23
            echo "    ";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getHeader", array(), "method") == twig_constant("DirectoryPlatform\\AppBundle\\Entity\\Listing::HEADER_SINGLE_IMAGE"))) {
            // line 24
            echo "        ";
            $this->loadTemplate("FrontBundle::Listing/Header/image.html.twig", "FrontBundle::Listing/detail.html.twig", 24)->display($context);
            // line 25
            echo "    ";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getHeader", array(), "method") == twig_constant("DirectoryPlatform\\AppBundle\\Entity\\Listing::HEADER_MAP"))) {
            // line 26
            echo "        ";
            $this->loadTemplate("FrontBundle::Listing/Header/map.html.twig", "FrontBundle::Listing/detail.html.twig", 26)->display($context);
            // line 27
            echo "    ";
        } else {
            // line 28
            echo "        <div class=\"container\">
            ";
            // line 29
            $this->loadTemplate("FrontBundle::Helper/content_title.html.twig", "FrontBundle::Listing/detail.html.twig", 29)->display($context);
            // line 30
            echo "        </div><!-- /.container -->
    ";
        }
        // line 32
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-7 col-lg-8\">
                <div class=\"content\">
                    ";
        // line 37
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getDescription", array(), "method")) {
            // line 38
            echo "                        <div class=\"post-block post-block-description\">
                            <h3>";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description"), "html", null, true);
            echo "</h3>

                            ";
            // line 41
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getDescription", array());
            echo "
                        </div><!-- /.post-block -->
                    ";
        }
        // line 44
        echo "
                    ";
        // line 45
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getAmenities", array(), "method"))) {
            // line 46
            echo "                        <div class=\"post-block post-block-amenities\">
                            <h3>";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Amenities"), "html", null, true);
            echo "</h3>

                            <ul>
                                ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getAmenities", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["amenity"]) {
                // line 51
                echo "                                    <li>
                                        <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("amenity_detail", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["amenity"], "getSlug", array(), "method"))), "html", null, true);
                echo "\">
                                            ";
                // line 53
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["amenity"], "getFontIcon", array(), "method")) {
                    // line 54
                    echo "                                                <i class=\"fa ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["amenity"], "getFontIcon", array(), "method"), "html", null, true);
                    echo "\"></i>
                                            ";
                }
                // line 56
                echo "                                            
                                            ";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["amenity"], "getName", array(), "method"), "html", null, true);
                echo "
                                        </a>
                                    </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['amenity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "                            </ul>
                        </div><!-- /.post-block -->
                    ";
        }
        // line 64
        echo "
                    ";
        // line 65
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getFields", array(), "method"))) {
            // line 66
            echo "                        <div class=\"post-block post-block-fields\">
                            <h3>";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Custom Fields"), "html", null, true);
            echo "</h3>

                            <ul>
                                ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getFields", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 71
                echo "                                    <li>
                                        <span>";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "getDataKey", array(), "method"), "html", null, true);
                echo "</span>
                                        <strong>";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "getDataValue", array(), "method"), "html", null, true);
                echo "</strong>
                                    </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "                            </ul>
                        </div><!-- /.post-block -->
                    ";
        }
        // line 79
        echo "\t\t\t\t\t
\t\t\t\t\t";
        // line 80
        if (twig_length_filter($this->env, ($context["products"] ?? null))) {
            echo "                       
\t\t\t\t\t\t<div class=\"post-block post-block-products\">
                            <h3>";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Products"), "html", null, true);
            echo "</h3>
                            ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 84
                echo "                                ";
                $this->loadTemplate("FrontBundle::Product/row.html.twig", "FrontBundle::Listing/detail.html.twig", 84)->display($context);
                // line 85
                echo "                            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "<style>
.colored{color: #d44727;}.pdr0{padding: 0;margin: 0;}
.item-heading--prices .item-heading--price span {white-space: nowrap;}
.item-heading--body .item-heading--prices .item-heading--price {padding: 0 0 0 10px;}
.copy--xxs, .user .login__social-button .social-button__sign-in-copy {
letter-spacing: -.2pt;font-weight:bold;}
.copy--upper {text-transform: uppercase;}
.bg-detail-pdl{background-color: transparent;}
</style>
<script>
function onclickBody(element){
\t\$(element).toggleClass('fa-minus-circle fa-plus-circle');
}
</script>
                        </div>
                    ";
        }
        // line 102
        echo "\t\t\t\t\t
                    ";
        // line 103
        if (twig_length_filter($this->env, ($context["reviews"] ?? null))) {
            // line 104
            echo "                        <div class=\"post-block\">
                            <div class=\"review-stat\">
                                <div class=\"review-icon\">
                                </div><!-- /.review-icon -->

                                <div class=\"review-total\">
                                    <strong>";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getRatingPercent", array(), "method"), "html", null, true);
            echo "%</strong>
                                    <span>
                                        ";
            // line 112
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Rated by <b>%count%</b> users", array("%count%" => twig_length_filter($this->env, ($context["reviews"] ?? null))), "messages");
            // line 114
            echo "                                 
                                    </span>
                                </div><!-- /.review-total -->

                                <div class=\"review-overview\">
                                    <ul>
                                        ";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getRatingOverview", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["rating"]) {
                // line 121
                echo "                                            <li>
                                                <span class=\"key\">";
                // line 122
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["rating"], "label", array()), "html", null, true);
                echo "</span>                                            
                                                <span class=\"divide\"></span>
                                                <span class=\"value\">";
                // line 124
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["rating"], "percent", array()), "html", null, true);
                echo "%</span>
                                            </li>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rating'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "                                    </ul>
                                </div><!-- /.review-overview -->
                            </div><!-- /.review-stat --> 
                        </div><!-- /.post-block -->

                        <div class=\"post-block post-block-reviews\">
                            <h3>";
            // line 133
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reviews"), "html", null, true);
            echo "</h3>

                            ";
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 136
                echo "                                ";
                $this->loadTemplate("FrontBundle::Review/row.html.twig", "FrontBundle::Listing/detail.html.twig", 136)->display($context);
                // line 137
                echo "                            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "                        </div><!-- /.post-block-->
                    ";
        }
        // line 140
        echo "
                    <div class=\"post-block post-block-review-form\">
                        <h3>";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Post New Review"), "html", null, true);
        echo "</h3>

                        <div class=\"review-form\">
                            ";
        // line 145
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form_review"] ?? null), 'form_start');
        echo "
                            ";
        // line 146
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form_review"] ?? null), 'widget');
        echo "
                            ";
        // line 147
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form_review"] ?? null), 'form_end');
        echo "
                        </div><!-- /.review-form -->
                    </div><!-- /.post-block -->

                    <div class=\"report\">
                        <a href=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("report_create", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getId", array(), "method"))), "html", null, true);
        echo "\">
                            ";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Report listing"), "html", null, true);
        echo "
                        </a>
                    </div><!-- /.report -->
                </div><!-- /.content -->
            </div><!-- /.col-* -->

            <div class=\"col-md-5 col-lg-4\">
                <div class=\"sidebar\">
                    ";
        // line 161
        $this->loadTemplate("FrontBundle::Widget/agent.html.twig", "FrontBundle::Listing/detail.html.twig", 161)->display(array_merge($context, array("user" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getUser", array(), "method"))));
        // line 162
        echo "
                    ";
        // line 163
        $this->loadTemplate("FrontBundle::Widget/position.html.twig", "FrontBundle::Listing/detail.html.twig", 163)->display($context);
        // line 164
        echo "
                    ";
        // line 165
        $this->loadTemplate("FrontBundle::Widget/share.html.twig", "FrontBundle::Listing/detail.html.twig", 165)->display($context);
        // line 166
        echo "
                    ";
        // line 167
        $this->loadTemplate("FrontBundle::Widget/gallery.html.twig", "FrontBundle::Listing/detail.html.twig", 167)->display($context);
        // line 168
        echo "
                    ";
        // line 169
        $this->loadTemplate("FrontBundle::Widget/opening_hours.html.twig", "FrontBundle::Listing/detail.html.twig", 169)->display($context);
        // line 170
        echo "
                    ";
        // line 171
        $this->loadTemplate("FrontBundle::Widget/inquire.html.twig", "FrontBundle::Listing/detail.html.twig", 171)->display(array_merge($context, array("form" => ($context["form_inquire"] ?? null))));
        // line 172
        echo "                </div><!-- /.sidebar -->
            </div><!-- /.col-* -->
        </div><!-- /.row -->
    </div><!-- /.container -->
";
    }

    public function getTemplateName()
    {
        return "FrontBundle::Listing/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  422 => 172,  420 => 171,  417 => 170,  415 => 169,  412 => 168,  410 => 167,  407 => 166,  405 => 165,  402 => 164,  400 => 163,  397 => 162,  395 => 161,  384 => 153,  380 => 152,  372 => 147,  368 => 146,  364 => 145,  358 => 142,  354 => 140,  350 => 138,  336 => 137,  333 => 136,  316 => 135,  311 => 133,  303 => 127,  294 => 124,  289 => 122,  286 => 121,  282 => 120,  274 => 114,  272 => 112,  267 => 110,  259 => 104,  257 => 103,  254 => 102,  236 => 86,  222 => 85,  219 => 84,  202 => 83,  198 => 82,  193 => 80,  190 => 79,  185 => 76,  176 => 73,  172 => 72,  169 => 71,  165 => 70,  159 => 67,  156 => 66,  154 => 65,  151 => 64,  146 => 61,  136 => 57,  133 => 56,  127 => 54,  125 => 53,  121 => 52,  118 => 51,  114 => 50,  108 => 47,  105 => 46,  103 => 45,  100 => 44,  94 => 41,  89 => 39,  86 => 38,  84 => 37,  77 => 32,  73 => 30,  71 => 29,  68 => 28,  65 => 27,  62 => 26,  59 => 25,  56 => 24,  53 => 23,  50 => 22,  47 => 21,  44 => 20,  38 => 18,  34 => 1,  32 => 14,  31 => 10,  30 => 7,  28 => 5,  26 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle::Listing/detail.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Listing/detail.html.twig");
    }
}
