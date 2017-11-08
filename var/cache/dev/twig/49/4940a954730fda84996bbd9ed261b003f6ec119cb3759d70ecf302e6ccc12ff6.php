<?php

/* FrontBundle::Listing/detail.html.twig */
class __TwigTemplate_e2e02f7be7b5e1c9061a7a352f9ea726bfdf8eb04d16206bf3471fb9e4bdfb3d extends Twig_Template
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
        $__internal_78fd211269e8f7a6305093b3b498ca0aa0a7fe41f61f326c62652f2f8fa98277 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78fd211269e8f7a6305093b3b498ca0aa0a7fe41f61f326c62652f2f8fa98277->enter($__internal_78fd211269e8f7a6305093b3b498ca0aa0a7fe41f61f326c62652f2f8fa98277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Listing/detail.html.twig"));

        $__internal_2e988d2b0d0a0e67e82a950e6cfedf9a0263c6d1571e72c81fc0845c57916639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e988d2b0d0a0e67e82a950e6cfedf9a0263c6d1571e72c81fc0845c57916639->enter($__internal_2e988d2b0d0a0e67e82a950e6cfedf9a0263c6d1571e72c81fc0845c57916639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Listing/detail.html.twig"));

        // line 3
        $context["menu_active"] = "listings";
        // line 5
        $context["title"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 5, $this->getSourceContext()); })()), "getName", array(), "method");
        // line 7
        $context["actions"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Claim"), "link" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claim_create", array("id" => twig_get_attribute($this->env, $this->getSourceContext(),         // line 10
(isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 10, $this->getSourceContext()); })()), "getId", array(), "method")))), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Favorite"), "link" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("favorite_add", array("id" => twig_get_attribute($this->env, $this->getSourceContext(),         // line 14
(isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 14, $this->getSourceContext()); })()), "getId", array(), "method")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78fd211269e8f7a6305093b3b498ca0aa0a7fe41f61f326c62652f2f8fa98277->leave($__internal_78fd211269e8f7a6305093b3b498ca0aa0a7fe41f61f326c62652f2f8fa98277_prof);

        
        $__internal_2e988d2b0d0a0e67e82a950e6cfedf9a0263c6d1571e72c81fc0845c57916639->leave($__internal_2e988d2b0d0a0e67e82a950e6cfedf9a0263c6d1571e72c81fc0845c57916639_prof);

    }

    // line 18
    public function block_title($context, array $blocks = array())
    {
        $__internal_40ed6f06b2263de53d015068753ff4de57bf281c3deed3bbfb343fad59e8e308 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40ed6f06b2263de53d015068753ff4de57bf281c3deed3bbfb343fad59e8e308->enter($__internal_40ed6f06b2263de53d015068753ff4de57bf281c3deed3bbfb343fad59e8e308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7c21fe06805d18dc168400a4d49f1399977030cbaf52c934f1b53e5f0741039c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c21fe06805d18dc168400a4d49f1399977030cbaf52c934f1b53e5f0741039c->enter($__internal_7c21fe06805d18dc168400a4d49f1399977030cbaf52c934f1b53e5f0741039c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 18, $this->getSourceContext()); })()), "html", null, true);
        
        $__internal_7c21fe06805d18dc168400a4d49f1399977030cbaf52c934f1b53e5f0741039c->leave($__internal_7c21fe06805d18dc168400a4d49f1399977030cbaf52c934f1b53e5f0741039c_prof);

        
        $__internal_40ed6f06b2263de53d015068753ff4de57bf281c3deed3bbfb343fad59e8e308->leave($__internal_40ed6f06b2263de53d015068753ff4de57bf281c3deed3bbfb343fad59e8e308_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_75428a7be81ff04398db40435844cb40db9c4808cbc9b1594765a7e1e7e131fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75428a7be81ff04398db40435844cb40db9c4808cbc9b1594765a7e1e7e131fa->enter($__internal_75428a7be81ff04398db40435844cb40db9c4808cbc9b1594765a7e1e7e131fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_4e2d8898073c10b14b3cae9efdc8a6dad3940b0e5400f973871338e7a1e50968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e2d8898073c10b14b3cae9efdc8a6dad3940b0e5400f973871338e7a1e50968->enter($__internal_4e2d8898073c10b14b3cae9efdc8a6dad3940b0e5400f973871338e7a1e50968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "    ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 21, $this->getSourceContext()); })()), "getHeader", array(), "method") == twig_constant("DirectoryPlatform\\AppBundle\\Entity\\Listing::HEADER_GALLERY"))) {
            // line 22
            echo "        ";
            $this->loadTemplate("FrontBundle::Listing/Header/gallery.html.twig", "FrontBundle::Listing/detail.html.twig", 22)->display($context);
            // line 23
            echo "    ";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 23, $this->getSourceContext()); })()), "getHeader", array(), "method") == twig_constant("DirectoryPlatform\\AppBundle\\Entity\\Listing::HEADER_SINGLE_IMAGE"))) {
            // line 24
            echo "        ";
            $this->loadTemplate("FrontBundle::Listing/Header/image.html.twig", "FrontBundle::Listing/detail.html.twig", 24)->display($context);
            // line 25
            echo "    ";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 25, $this->getSourceContext()); })()), "getHeader", array(), "method") == twig_constant("DirectoryPlatform\\AppBundle\\Entity\\Listing::HEADER_MAP"))) {
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
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 37, $this->getSourceContext()); })()), "getDescription", array(), "method")) {
            // line 38
            echo "                        <div class=\"post-block post-block-description\">
                            <h3>";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description"), "html", null, true);
            echo "</h3>

                            ";
            // line 41
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 41, $this->getSourceContext()); })()), "getDescription", array());
            echo "
                        </div><!-- /.post-block -->
                    ";
        }
        // line 44
        echo "
                    ";
        // line 45
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 45, $this->getSourceContext()); })()), "getAmenities", array(), "method"))) {
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
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 50, $this->getSourceContext()); })()), "getAmenities", array(), "method"));
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
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 65, $this->getSourceContext()); })()), "getFields", array(), "method"))) {
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
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 70, $this->getSourceContext()); })()), "getFields", array(), "method"));
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
        if (twig_length_filter($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new Twig_Error_Runtime('Variable "products" does not exist.', 80, $this->getSourceContext()); })()))) {
            echo "                       
\t\t\t\t\t\t<div class=\"post-block post-block-products\">
                            <h3>";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Products"), "html", null, true);
            echo "</h3>
                            ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new Twig_Error_Runtime('Variable "products" does not exist.', 83, $this->getSourceContext()); })()));
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
        if (twig_length_filter($this->env, (isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new Twig_Error_Runtime('Variable "reviews" does not exist.', 103, $this->getSourceContext()); })()))) {
            // line 104
            echo "                        <div class=\"post-block\">
                            <div class=\"review-stat\">
                                <div class=\"review-icon\">
                                </div><!-- /.review-icon -->

                                <div class=\"review-total\">
                                    <strong>";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 110, $this->getSourceContext()); })()), "getRatingPercent", array(), "method"), "html", null, true);
            echo "%</strong>
                                    <span>
                                        ";
            // line 112
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Rated by <b>%count%</b> users", array("%count%" => twig_length_filter($this->env, (isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new Twig_Error_Runtime('Variable "reviews" does not exist.', 112, $this->getSourceContext()); })()))), "messages");
            // line 114
            echo "                                 
                                    </span>
                                </div><!-- /.review-total -->

                                <div class=\"review-overview\">
                                    <ul>
                                        ";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 120, $this->getSourceContext()); })()), "getRatingOverview", array(), "method"));
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
            $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new Twig_Error_Runtime('Variable "reviews" does not exist.', 135, $this->getSourceContext()); })()));
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form_review"]) || array_key_exists("form_review", $context) ? $context["form_review"] : (function () { throw new Twig_Error_Runtime('Variable "form_review" does not exist.', 145, $this->getSourceContext()); })()), 'form_start');
        echo "
                            ";
        // line 146
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form_review"]) || array_key_exists("form_review", $context) ? $context["form_review"] : (function () { throw new Twig_Error_Runtime('Variable "form_review" does not exist.', 146, $this->getSourceContext()); })()), 'widget');
        echo "
                            ";
        // line 147
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form_review"]) || array_key_exists("form_review", $context) ? $context["form_review"] : (function () { throw new Twig_Error_Runtime('Variable "form_review" does not exist.', 147, $this->getSourceContext()); })()), 'form_end');
        echo "
                        </div><!-- /.review-form -->
                    </div><!-- /.post-block -->

                    <div class=\"report\">
                        <a href=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("report_create", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 152, $this->getSourceContext()); })()), "getId", array(), "method"))), "html", null, true);
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
        $this->loadTemplate("FrontBundle::Widget/agent.html.twig", "FrontBundle::Listing/detail.html.twig", 161)->display(array_merge($context, array("user" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 161, $this->getSourceContext()); })()), "getUser", array(), "method"))));
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
        $this->loadTemplate("FrontBundle::Widget/inquire.html.twig", "FrontBundle::Listing/detail.html.twig", 171)->display(array_merge($context, array("form" => (isset($context["form_inquire"]) || array_key_exists("form_inquire", $context) ? $context["form_inquire"] : (function () { throw new Twig_Error_Runtime('Variable "form_inquire" does not exist.', 171, $this->getSourceContext()); })()))));
        // line 172
        echo "                </div><!-- /.sidebar -->
            </div><!-- /.col-* -->
        </div><!-- /.row -->
    </div><!-- /.container -->
";
        
        $__internal_4e2d8898073c10b14b3cae9efdc8a6dad3940b0e5400f973871338e7a1e50968->leave($__internal_4e2d8898073c10b14b3cae9efdc8a6dad3940b0e5400f973871338e7a1e50968_prof);

        
        $__internal_75428a7be81ff04398db40435844cb40db9c4808cbc9b1594765a7e1e7e131fa->leave($__internal_75428a7be81ff04398db40435844cb40db9c4808cbc9b1594765a7e1e7e131fa_prof);

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
        return array (  452 => 172,  450 => 171,  447 => 170,  445 => 169,  442 => 168,  440 => 167,  437 => 166,  435 => 165,  432 => 164,  430 => 163,  427 => 162,  425 => 161,  414 => 153,  410 => 152,  402 => 147,  398 => 146,  394 => 145,  388 => 142,  384 => 140,  380 => 138,  366 => 137,  363 => 136,  346 => 135,  341 => 133,  333 => 127,  324 => 124,  319 => 122,  316 => 121,  312 => 120,  304 => 114,  302 => 112,  297 => 110,  289 => 104,  287 => 103,  284 => 102,  266 => 86,  252 => 85,  249 => 84,  232 => 83,  228 => 82,  223 => 80,  220 => 79,  215 => 76,  206 => 73,  202 => 72,  199 => 71,  195 => 70,  189 => 67,  186 => 66,  184 => 65,  181 => 64,  176 => 61,  166 => 57,  163 => 56,  157 => 54,  155 => 53,  151 => 52,  148 => 51,  144 => 50,  138 => 47,  135 => 46,  133 => 45,  130 => 44,  124 => 41,  119 => 39,  116 => 38,  114 => 37,  107 => 32,  103 => 30,  101 => 29,  98 => 28,  95 => 27,  92 => 26,  89 => 25,  86 => 24,  83 => 23,  80 => 22,  77 => 21,  68 => 20,  50 => 18,  40 => 1,  38 => 14,  37 => 10,  36 => 7,  34 => 5,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FrontBundle::Layout/base.html.twig' %}

{% set menu_active = 'listings' %}

{% set title = listing.getName() %}

{% set actions = [
    {
        'title': 'Claim'|trans,
        'link': path('claim_create', {'id': listing.getId()}),
    },
    {
        'title': 'Favorite'|trans,
        'link': path('favorite_add', {'id': listing.getId()}),
    },    
] %}

{% block title %}{{ title }}{% endblock %}

{% block content %}
    {% if listing.getHeader() == constant('DirectoryPlatform\\\\AppBundle\\\\Entity\\\\Listing::HEADER_GALLERY') %}
        {% include 'FrontBundle::Listing/Header/gallery.html.twig' %}
    {% elseif listing.getHeader() == constant('DirectoryPlatform\\\\AppBundle\\\\Entity\\\\Listing::HEADER_SINGLE_IMAGE') %}
        {% include 'FrontBundle::Listing/Header/image.html.twig' %}
    {% elseif listing.getHeader() == constant('DirectoryPlatform\\\\AppBundle\\\\Entity\\\\Listing::HEADER_MAP') %}
        {% include 'FrontBundle::Listing/Header/map.html.twig' %}
    {% else %}
        <div class=\"container\">
            {% include 'FrontBundle::Helper/content_title.html.twig' %}
        </div><!-- /.container -->
    {% endif %}

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-7 col-lg-8\">
                <div class=\"content\">
                    {% if listing.getDescription() %}
                        <div class=\"post-block post-block-description\">
                            <h3>{{ 'Description'|trans }}</h3>

                            {{ listing.getDescription|raw }}
                        </div><!-- /.post-block -->
                    {% endif %}

                    {% if listing.getAmenities()|length %}
                        <div class=\"post-block post-block-amenities\">
                            <h3>{{ 'Amenities'|trans }}</h3>

                            <ul>
                                {% for amenity in listing.getAmenities() %}
                                    <li>
                                        <a href=\"{{ path('amenity_detail', {'slug': amenity.getSlug()})}}\">
                                            {% if amenity.getFontIcon() %}
                                                <i class=\"fa {{ amenity.getFontIcon() }}\"></i>
                                            {% endif %}
                                            
                                            {{ amenity.getName() }}
                                        </a>
                                    </li>
                                {% endfor %}
                            </ul>
                        </div><!-- /.post-block -->
                    {% endif %}

                    {% if listing.getFields()|length %}
                        <div class=\"post-block post-block-fields\">
                            <h3>{{ 'Custom Fields'|trans }}</h3>

                            <ul>
                                {% for field in listing.getFields() %}
                                    <li>
                                        <span>{{ field.getDataKey() }}</span>
                                        <strong>{{ field.getDataValue() }}</strong>
                                    </li>
                                {% endfor %}
                            </ul>
                        </div><!-- /.post-block -->
                    {% endif %}
\t\t\t\t\t
\t\t\t\t\t{% if products|length %}                       
\t\t\t\t\t\t<div class=\"post-block post-block-products\">
                            <h3>{{ 'Products'|trans }}</h3>
                            {% for product in products %}
                                {% include 'FrontBundle::Product/row.html.twig' %}
                            {% endfor %}
<style>
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
                    {% endif %}
\t\t\t\t\t
                    {% if reviews|length %}
                        <div class=\"post-block\">
                            <div class=\"review-stat\">
                                <div class=\"review-icon\">
                                </div><!-- /.review-icon -->

                                <div class=\"review-total\">
                                    <strong>{{ listing.getRatingPercent() }}%</strong>
                                    <span>
                                        {% trans with {'%count%': reviews|length} %}
                                            Rated by <b>%count%</b> users
                                        {% endtrans %}                                 
                                    </span>
                                </div><!-- /.review-total -->

                                <div class=\"review-overview\">
                                    <ul>
                                        {% for rating in listing.getRatingOverview() %}
                                            <li>
                                                <span class=\"key\">{{ rating.label }}</span>                                            
                                                <span class=\"divide\"></span>
                                                <span class=\"value\">{{ rating.percent }}%</span>
                                            </li>
                                        {% endfor %}
                                    </ul>
                                </div><!-- /.review-overview -->
                            </div><!-- /.review-stat --> 
                        </div><!-- /.post-block -->

                        <div class=\"post-block post-block-reviews\">
                            <h3>{{ 'Reviews'|trans }}</h3>

                            {% for review in reviews %}
                                {% include 'FrontBundle::Review/row.html.twig' %}
                            {% endfor %}
                        </div><!-- /.post-block-->
                    {% endif %}

                    <div class=\"post-block post-block-review-form\">
                        <h3>{{ 'Post New Review'|trans }}</h3>

                        <div class=\"review-form\">
                            {{ form_start(form_review) }}
                            {{ form_widget(form_review) }}
                            {{ form_end(form_review) }}
                        </div><!-- /.review-form -->
                    </div><!-- /.post-block -->

                    <div class=\"report\">
                        <a href=\"{{ path('report_create', {'id': listing.getId() }) }}\">
                            {{ 'Report listing'|trans }}
                        </a>
                    </div><!-- /.report -->
                </div><!-- /.content -->
            </div><!-- /.col-* -->

            <div class=\"col-md-5 col-lg-4\">
                <div class=\"sidebar\">
                    {% include 'FrontBundle::Widget/agent.html.twig' with {'user': listing.getUser()} %}

                    {% include 'FrontBundle::Widget/position.html.twig' %}

                    {% include 'FrontBundle::Widget/share.html.twig' %}

                    {% include 'FrontBundle::Widget/gallery.html.twig' %}

                    {% include 'FrontBundle::Widget/opening_hours.html.twig' %}

                    {% include 'FrontBundle::Widget/inquire.html.twig' with {'form': form_inquire}%}
                </div><!-- /.sidebar -->
            </div><!-- /.col-* -->
        </div><!-- /.row -->
    </div><!-- /.container -->
{% endblock %}

", "FrontBundle::Listing/detail.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Listing/detail.html.twig");
    }
}
