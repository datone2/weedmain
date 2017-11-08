<?php

/* FrontBundle::Front/index.html.twig */
class __TwigTemplate_45f19d79ddefb70637953384f7418a31a0b74394a30fbec51b195147c59ed365 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::Layout/base.html.twig", "FrontBundle::Front/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body_class' => array($this, 'block_body_class'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::Layout/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc294a8b6cb7a128bdd2f73b0dc6324a3b8ccc91439a0b954e46df0c547a5929 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc294a8b6cb7a128bdd2f73b0dc6324a3b8ccc91439a0b954e46df0c547a5929->enter($__internal_bc294a8b6cb7a128bdd2f73b0dc6324a3b8ccc91439a0b954e46df0c547a5929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Front/index.html.twig"));

        $__internal_1d94ca51a1d8f14e66d3ba2a94bbf3ba3231344dd35bdb62801cb8c302e3e4d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d94ca51a1d8f14e66d3ba2a94bbf3ba3231344dd35bdb62801cb8c302e3e4d9->enter($__internal_1d94ca51a1d8f14e66d3ba2a94bbf3ba3231344dd35bdb62801cb8c302e3e4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Front/index.html.twig"));

        // line 3
        $context["menu_active"] = "home";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc294a8b6cb7a128bdd2f73b0dc6324a3b8ccc91439a0b954e46df0c547a5929->leave($__internal_bc294a8b6cb7a128bdd2f73b0dc6324a3b8ccc91439a0b954e46df0c547a5929_prof);

        
        $__internal_1d94ca51a1d8f14e66d3ba2a94bbf3ba3231344dd35bdb62801cb8c302e3e4d9->leave($__internal_1d94ca51a1d8f14e66d3ba2a94bbf3ba3231344dd35bdb62801cb8c302e3e4d9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_012a4012214b5f6d1f898a8bf26efe52138b18871549b8dd3ece27e389cf7ed6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_012a4012214b5f6d1f898a8bf26efe52138b18871549b8dd3ece27e389cf7ed6->enter($__internal_012a4012214b5f6d1f898a8bf26efe52138b18871549b8dd3ece27e389cf7ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_891c41432087d9c9f128b30d7fb6fe63d503f56bdd2740fab1e979da8ff43aa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_891c41432087d9c9f128b30d7fb6fe63d503f56bdd2740fab1e979da8ff43aa8->enter($__internal_891c41432087d9c9f128b30d7fb6fe63d503f56bdd2740fab1e979da8ff43aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Listing & Directory Application for Symfony"), "html", null, true);
        
        $__internal_891c41432087d9c9f128b30d7fb6fe63d503f56bdd2740fab1e979da8ff43aa8->leave($__internal_891c41432087d9c9f128b30d7fb6fe63d503f56bdd2740fab1e979da8ff43aa8_prof);

        
        $__internal_012a4012214b5f6d1f898a8bf26efe52138b18871549b8dd3ece27e389cf7ed6->leave($__internal_012a4012214b5f6d1f898a8bf26efe52138b18871549b8dd3ece27e389cf7ed6_prof);

    }

    // line 7
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_00ba0a33885578efda5a7678e5138a9893ccc20f3ad0fe3246ad55b037ebcccd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00ba0a33885578efda5a7678e5138a9893ccc20f3ad0fe3246ad55b037ebcccd->enter($__internal_00ba0a33885578efda5a7678e5138a9893ccc20f3ad0fe3246ad55b037ebcccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_8c14ddbe9c89d9a0fb1c55b0bc90616302d92594adb1d3fe57d804dc319e3ec0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c14ddbe9c89d9a0fb1c55b0bc90616302d92594adb1d3fe57d804dc319e3ec0->enter($__internal_8c14ddbe9c89d9a0fb1c55b0bc90616302d92594adb1d3fe57d804dc319e3ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "header-transparent";
        
        $__internal_8c14ddbe9c89d9a0fb1c55b0bc90616302d92594adb1d3fe57d804dc319e3ec0->leave($__internal_8c14ddbe9c89d9a0fb1c55b0bc90616302d92594adb1d3fe57d804dc319e3ec0_prof);

        
        $__internal_00ba0a33885578efda5a7678e5138a9893ccc20f3ad0fe3246ad55b037ebcccd->leave($__internal_00ba0a33885578efda5a7678e5138a9893ccc20f3ad0fe3246ad55b037ebcccd_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_5c251e9f7232506a5f9cb3ac2c11f0e69c61f0fb5f6d577243e8563b1daa3faa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c251e9f7232506a5f9cb3ac2c11f0e69c61f0fb5f6d577243e8563b1daa3faa->enter($__internal_5c251e9f7232506a5f9cb3ac2c11f0e69c61f0fb5f6d577243e8563b1daa3faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_64b0f6fa3f8cb573798d2d0affde0078a1f2a0a348b15e5872095949fef6faee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64b0f6fa3f8cb573798d2d0affde0078a1f2a0a348b15e5872095949fef6faee->enter($__internal_64b0f6fa3f8cb573798d2d0affde0078a1f2a0a348b15e5872095949fef6faee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    ";
        $this->loadTemplate("FrontBundle::Helper/hero.html.twig", "FrontBundle::Front/index.html.twig", 10)->display($context);
        // line 11
        echo "    <div class=\"listing\">
        <div class=\"container\">
            <div class=\"content mb-70\">

                ";
        // line 15
        if (twig_length_filter($this->env, (isset($context["listings"]) || array_key_exists("listings", $context) ? $context["listings"] : (function () { throw new Twig_Error_Runtime('Variable "listings" does not exist.', 15, $this->getSourceContext()); })()))) {
            // line 16
            echo "                    <span class=\"theme-color\">
                        ";
            // line 17
            $this->loadTemplate("FrontBundle::Helper/page_title.html.twig", "FrontBundle::Front/index.html.twig", 17)->display(array_merge($context, array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Most Recent Listings"), "description" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Find out most recent listings & classifieds added into our directory catalogue by our users."))));
            // line 18
            echo "                    </span>
                    <div class=\"listings-wrapper\">
                        <div class=\"row\">
                            ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listings"]) || array_key_exists("listings", $context) ? $context["listings"] : (function () { throw new Twig_Error_Runtime('Variable "listings" does not exist.', 21, $this->getSourceContext()); })()));
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
                // line 22
                echo "                                ";
                if (((twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()) == 1) || (twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()) == 6))) {
                    // line 23
                    echo "                                    <div class=\"col-md-6 p-l-0\">
                                    ";
                } else {
                    // line 25
                    echo "                                        <div class=\"col-md-3 p-l-0\">
                                        ";
                }
                // line 27
                echo "
                                        ";
                // line 28
                $this->loadTemplate("FrontBundle::Listing/box.html.twig", "FrontBundle::Front/index.html.twig", 28)->display($context);
                // line 29
                echo "                                    </div><!-- /.col-* -->
                                ";
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
            // line 31
            echo "                            </div><!-- /.row -->
                        </div><!-- /.listings-wrapper -->
                    ";
        }
        // line 34
        echo "                </div>
            </div>
        </div>
        <div id=\"location\">
            <div class=\"container\">
                <div class=\"content\">
                    ";
        // line 40
        if (twig_length_filter($this->env, (isset($context["locations"]) || array_key_exists("locations", $context) ? $context["locations"] : (function () { throw new Twig_Error_Runtime('Variable "locations" does not exist.', 40, $this->getSourceContext()); })()))) {
            // line 41
            echo "                        <span class=\"theme-color\">
                            ";
            // line 42
            $this->loadTemplate("FrontBundle::Helper/page_title.html.twig", "FrontBundle::Front/index.html.twig", 42)->display(array_merge($context, array("title" => "Discover Popular Locations", "description" => "Most visited locations in the directory platform. Missing your city? Feel free to let us know.")));
            // line 43
            echo "                        </span>
                        <div class=\"locations-wrapper\">
                            <div class=\"row\">
                                ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["locations"]) || array_key_exists("locations", $context) ? $context["locations"] : (function () { throw new Twig_Error_Runtime('Variable "locations" does not exist.', 46, $this->getSourceContext()); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 47
                echo "                                    <div class=\"col-md-4 p-l-0\">
                                        ";
                // line 48
                $this->loadTemplate("FrontBundle::Location/box.html.twig", "FrontBundle::Front/index.html.twig", 48)->display($context);
                // line 49
                echo "                                    </div><!-- /.col-* -->
                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                            </div><!-- /.row -->
                            <div class=\"col-md-12 text-center p-b-30 p-t-30\">
                                <a href=\"#\" class=\"btn btn-primary-outline\">";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show all"), "html", null, true);
            echo "</a>
                            </div>
                        </div><!-- /.locations-wrapper -->
                    ";
        }
        // line 57
        echo "
                </div>    
            </div>    
        </div>

        <div id=\"brand-logo\">
            <div class=\"contentRotation\">
                <div class=\"container\">
                    <h4 class=\"text-center color-white p-t-15\">Brand Logo's</h4>
                    <div class=\"row\">
                        <div class=\"col-md-12 heroSlider-fixed\">
                            <div class=\"overlay\">
                            </div>
                            <!-- Slider -->
                            <div class=\"slider responsive\">
                                <div>
                                    <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/brand-logo/1.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                </div>
                                <div>
                                    <img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/brand-logo/2.png"), "html", null, true);
        echo "\" alt=\"\" />
                                </div>

                                <div>
                                    <img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/brand-logo/6.jpeg"), "html", null, true);
        echo "\" alt=\"\" />
                                </div>
                                <div>
                                    <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/brand-logo/7.png"), "html", null, true);
        echo "\" alt=\"\" />
                                </div>
                                <div>
                                    <img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/brand-logo/8.png"), "html", null, true);
        echo "\" alt=\"\" />
                                </div>
                                <div>
                                    <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/brand-logo/3.png"), "html", null, true);
        echo "\" alt=\"\" />
                                </div>
                                <div>
                                    <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/brand-logo/4.png"), "html", null, true);
        echo "\" alt=\"\" />
                                </div>
                                <div>
                                    <img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/brand-logo/5.png"), "html", null, true);
        echo "\" alt=\"\" />
                                </div>
                                <div>
                                    <img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/brand-logo/9.png"), "html", null, true);
        echo "\" alt=\"\" />
                                </div>
                                <div>
                                    <img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/brand-logo/10.png"), "html", null, true);
        echo "\" alt=\"\" />
                                </div>
                            </div>
                            <!-- control arrows -->
                            <div class=\"prev\">
                                <span class=\"fa fa-chevron-left\" aria-hidden=\"true\"></span>
                            </div>
                            <div class=\"next\">
                                <span class=\"fa fa-chevron-right\" aria-hidden=\"true\"></span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class='color-white text-center'>
                    Lorem ipsum dolor sit amet, sed offendit ocurreret consectetuer in, fabulas tincidunt instructior vis te. Vis delicata conceptam complectitur ne. Ea oporteat volutpat consequat eam. Purto facete albucius ea usu, cum et quas meliore deserunt, cu nullam copiosae accusata vel. Vim animal deterruisset at. Exerci soluta postulant ex sed.

                    Mel suas audiam omittam in, oratio labore quo ei. Id aliquam facilis necessitatibus nam, vix dignissim conclusionemque cu. Qui graece malorum ex, ad habemus albucius tacimates cum, cu inani qualisque eum. 

                    
                </div>
            </div>
        </div>


        <div id=\"categoryInterest\">
            <div class=\"container\">
                <div class=\"content\">    

                    ";
        // line 130
        if (twig_length_filter($this->env, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 130, $this->getSourceContext()); })()))) {
            // line 131
            echo "                        <span class=\"theme-color\">
                            ";
            // line 132
            $this->loadTemplate("FrontBundle::Helper/page_title.html.twig", "FrontBundle::Front/index.html.twig", 132)->display(array_merge($context, array("title" => "Categories & Interests", "description" => "Most popular categories in system ordered by highest number of assigned listings.")));
            // line 133
            echo "                        </span>
                        <div class=\"categories-wrapper\">
                            <div class=\"row\">
                                <ul class=\"categories-ul\">
                                    ";
            // line 137
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 137, $this->getSourceContext()); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 138
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()) < 8)) {
                    // line 139
                    echo "                                            <li class=\"categories-li\">
                                                ";
                    // line 140
                    $this->loadTemplate("FrontBundle::Category/box.html.twig", "FrontBundle::Front/index.html.twig", 140)->display($context);
                    // line 141
                    echo "                                            </li><!-- /.col-* -->
                                        ";
                }
                // line 143
                echo "                                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "                                </ul>
                            </div><!-- /.row -->
                        </div><!-- /.categories-wrapper -->

                        <div class=\"btn-center\">
                            <a href=\"";
            // line 149
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category");
            echo "\" class=\"btn btn-primary\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show All Categories"), "html", null, true);
            echo "</a>
                        </div><!-- /.btn-center -->
                    ";
        }
        // line 152
        echo "
                    <div class=\"business\">
                        <div class=\"text-center p-b-50\">
                            <h3 class=\"theme-color\">Business Products</div>
                        <ul class=\"text-center\">
                            <li class=\"business-li\">
                                <img src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/revicon2.png"), "html", null, true);
        echo "\" width=\"100%\">
                                ";
        // line 162
        echo "                            </li>
                            <li class=\"business-li\">
                                <img src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/revicon1.png"), "html", null, true);
        echo "\" width=\"100%\">
                                ";
        // line 168
        echo "                            </li>
                            <li class=\"business-li\">
                                <img src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icon3.png"), "html", null, true);
        echo "\" width=\"100%\">
                                ";
        // line 174
        echo "                            </li>

                        </ul>
                    </div>
                    <div class=\"col-md-12 text-center p-t-30\">
                        <div class=\"container\">
                            <h3 class=\"theme-color p-b-30\">Finding Recreational Dispensary Near me</h3>
                            <p>
                                Lorem ipsum dolor sit amet, sed offendit ocurreret consectetuer in, fabulas tincidunt instructior vis te. Vis delicata conceptam complectitur ne. Ea oporteat volutpat consequat eam. Purto facete albucius ea usu, cum et quas meliore deserunt, cu nullam copiosae accusata vel. Vim animal deterruisset at. Exerci soluta postulant ex sed.
                            </p><p>
                                Mel suas audiam omittam in, oratio labore quo ei. Id aliquam facilis necessitatibus nam, vix dignissim conclusionemque cu. Qui graece malorum ex, ad habemus albucius tacimates cum, cu inani qualisque eum. Quo discere consulatu ex. Noster efficiantur te his, ne cum nibh porro voluptatum.
                            </p><p>
                                Eros platonem consequat nec ea, ex nihil invidunt prodesset mea. Pro in odio decore, tantas regione praesent ius ne, ius consul aperiri ocurreret ea. Ei utroque omnesque iracundia usu. Ea tota minim epicurei mea, eam dicit adolescens omittantur ei.
                            </p><p>
                                Qui laudem antiopam consulatu cu. Magna illud democritum sea id, sea ne duis movet delicata. Prodesset gloriatur honestatis est ut. Iudico dicant nemore ex usu. Ut soluta latine sit, ut percipit adversarium duo.
                            </p><p>
                                Eam tempor phaedrum facilisis te. Pro hinc meis laoreet eu, omnes gloriatur pertinacia cu nec. Nec no erant aeterno, cu per graecis inciderint mediocritatem, mel eu etiam molestie accusata. Ex meis affert vituperata sit, cu copiosae placerat vix, ne eum quod laudem. Menandri inimicus efficiendi mel at. Agam sententiae ne ius, mei at recteque persecuti definiebas. In iudico omnium apeirian sea, no sed odio alia zril.
                            </p>
                        </div>
                    </div>
                </div>

                <div class=\"upcoming-events\">
                    <div class=\"text-center upcoming-form\">
                        <h3 class=\"p-t-50 p-b-30\">Upcoming Events</h3>
                        <p class=\"p-t-30 p-b-30\">
                            Most popular categories in system ordered by
                            highest number of assigned listings.
                        </p>
                        <form class=\"p-t-50\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"what are you looking for?\">
                            </div>
                            <div class=\"form-group\">
                                <select class=\"form-control\">
                                    <option selected></option>
                                </select>
                            </div>
                            <button class=\"btn btn-primary searchBtn\"><i class=\"fa fa-search\"></i> SEARCH</button>
                        </form>
                    </div>
                </div>
                <div class=\"rotateDiv\"></div>
                <div class=\"col-md-12 text-center\">
                    <p>
                        Lorem ipsum dolor sit amet, sed offendit ocurreret consectetuer in, fabulas tincidunt instructior vis te. Vis delicata conceptam complectitur ne. Ea oporteat volutpat consequat eam. Purto facete albucius ea usu, cum et quas meliore deserunt, cu nullam copiosae accusata vel. Vim animal deterruisset at. Exerci soluta postulant ex sed.
                    </p><p>
                        Mel suas audiam omittam in, oratio labore quo ei. Id aliquam facilis necessitatibus nam, vix dignissim conclusionemque cu. Qui graece malorum ex, ad habemus albucius tacimates cum, cu inani qualisque eum. Quo discere consulatu ex. Noster efficiantur te his, ne cum nibh porro voluptatum.
                    </p><p>
                        Eros platonem consequat nec ea, ex nihil invidunt prodesset mea. Pro in odio decore, tantas regione praesent ius ne, ius consul aperiri ocurreret ea. Ei utroque omnesque iracundia usu. Ea tota minim epicurei mea, eam dicit adolescens omittantur ei.
                    </p><p>
                        Qui laudem antiopam consulatu cu. Magna illud democritum sea id, sea ne duis movet delicata. Prodesset gloriatur honestatis est ut. Iudico dicant nemore ex usu. Ut soluta latine sit, ut percipit adversarium duo.
                    </p><p>
                        Eam tempor phaedrum facilisis te. Pro hinc meis laoreet eu, omnes gloriatur pertinacia cu nec. Nec no erant aeterno, cu per graecis inciderint mediocritatem, mel eu etiam molestie accusata. Ex meis affert vituperata sit, cu copiosae placerat vix, ne eum quod laudem. Menandri inimicus efficiendi mel at. Agam sententiae ne ius, mei at recteque persecuti definiebas. In iudico omnium apeirian sea, no sed odio alia zril.
                    </p>

                </div>
            </div>
        </div>
    </div>
    <div class=\"browseArticles\">
        <div class=\"container\">
            <div class=\"content\">  
                <span class=\"theme-color\">
                    ";
        // line 238
        if (twig_length_filter($this->env, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 238, $this->getSourceContext()); })()))) {
            // line 239
            echo "                        ";
            $this->loadTemplate("FrontBundle::Helper/page_title.html.twig", "FrontBundle::Front/index.html.twig", 239)->display(array_merge($context, array("title" => "Browse Articles & Tips", "description" => "Read blog posts about our recommendations and experiences.", "class" => "border-top")));
            // line 244
            echo "                    </span>
                    <div class=\"posts-wrapper\">
                        <div class=\"row\">
                            <div class=\"col-md-10 push-md-1\">                    
                                ";
            // line 248
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 248, $this->getSourceContext()); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                echo "                    
                                    ";
                // line 249
                $this->loadTemplate("FrontBundle::Post/row.html.twig", "FrontBundle::Front/index.html.twig", 249)->display($context);
                // line 250
                echo "                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 251
            echo "                            </div><!-- /.col-* -->
                        </div><!-- /.row -->                    
                    </div><!-- /.posts-wrapper -->

                    <div class=\"btn-center\">
                        <a href=\"";
            // line 256
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post");
            echo "\" class=\"btn btn-primary\">
                            ";
            // line 257
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show All Blog Posts"), "html", null, true);
            echo "
                        </a>
                    </div><!-- /.btn-center -->
                ";
        }
        // line 261
        echo "            </div>
        </div><!-- /.content -->
    </div><!-- /.container -->
";
        
        $__internal_64b0f6fa3f8cb573798d2d0affde0078a1f2a0a348b15e5872095949fef6faee->leave($__internal_64b0f6fa3f8cb573798d2d0affde0078a1f2a0a348b15e5872095949fef6faee_prof);

        
        $__internal_5c251e9f7232506a5f9cb3ac2c11f0e69c61f0fb5f6d577243e8563b1daa3faa->leave($__internal_5c251e9f7232506a5f9cb3ac2c11f0e69c61f0fb5f6d577243e8563b1daa3faa_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle::Front/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  566 => 261,  559 => 257,  555 => 256,  548 => 251,  534 => 250,  532 => 249,  513 => 248,  507 => 244,  504 => 239,  502 => 238,  436 => 174,  432 => 170,  428 => 168,  424 => 164,  420 => 162,  416 => 158,  408 => 152,  400 => 149,  393 => 144,  379 => 143,  375 => 141,  373 => 140,  370 => 139,  367 => 138,  350 => 137,  344 => 133,  342 => 132,  339 => 131,  337 => 130,  305 => 101,  299 => 98,  293 => 95,  287 => 92,  281 => 89,  275 => 86,  269 => 83,  263 => 80,  256 => 76,  250 => 73,  232 => 57,  225 => 53,  221 => 51,  206 => 49,  204 => 48,  201 => 47,  184 => 46,  179 => 43,  177 => 42,  174 => 41,  172 => 40,  164 => 34,  159 => 31,  144 => 29,  142 => 28,  139 => 27,  135 => 25,  131 => 23,  128 => 22,  111 => 21,  106 => 18,  104 => 17,  101 => 16,  99 => 15,  93 => 11,  90 => 10,  81 => 9,  63 => 7,  45 => 5,  35 => 1,  33 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FrontBundle::Layout/base.html.twig' %}

{% set menu_active = 'home' %}

{% block title %}{{ 'Listing & Directory Application for Symfony'|trans }}{% endblock %}

{% block body_class %}header-transparent{% endblock %}

{% block content %}
    {% include 'FrontBundle::Helper/hero.html.twig' %}
    <div class=\"listing\">
        <div class=\"container\">
            <div class=\"content mb-70\">

                {% if listings|length %}
                    <span class=\"theme-color\">
                        {% include 'FrontBundle::Helper/page_title.html.twig' with {title: \"Most Recent Listings\"|trans, description: \"Find out most recent listings & classifieds added into our directory catalogue by our users.\"|trans} %}
                    </span>
                    <div class=\"listings-wrapper\">
                        <div class=\"row\">
                            {% for listing in listings %}
                                {% if loop.index == 1 or loop.index == 6%}
                                    <div class=\"col-md-6 p-l-0\">
                                    {% else %}
                                        <div class=\"col-md-3 p-l-0\">
                                        {% endif %}

                                        {% include 'FrontBundle::Listing/box.html.twig' %}
                                    </div><!-- /.col-* -->
                                {% endfor %}
                            </div><!-- /.row -->
                        </div><!-- /.listings-wrapper -->
                    {% endif %}
                </div>
            </div>
        </div>
        <div id=\"location\">
            <div class=\"container\">
                <div class=\"content\">
                    {% if locations|length %}
                        <span class=\"theme-color\">
                            {% include 'FrontBundle::Helper/page_title.html.twig' with {title: \"Discover Popular Locations\", description: \"Most visited locations in the directory platform. Missing your city? Feel free to let us know.\"} %}
                        </span>
                        <div class=\"locations-wrapper\">
                            <div class=\"row\">
                                {% for location in locations %}
                                    <div class=\"col-md-4 p-l-0\">
                                        {% include 'FrontBundle::Location/box.html.twig' %}
                                    </div><!-- /.col-* -->
                                {% endfor %}
                            </div><!-- /.row -->
                            <div class=\"col-md-12 text-center p-b-30 p-t-30\">
                                <a href=\"#\" class=\"btn btn-primary-outline\">{{ 'Show all'|trans }}</a>
                            </div>
                        </div><!-- /.locations-wrapper -->
                    {% endif %}

                </div>    
            </div>    
        </div>

        <div id=\"brand-logo\">
            <div class=\"contentRotation\">
                <div class=\"container\">
                    <h4 class=\"text-center color-white p-t-15\">Brand Logo's</h4>
                    <div class=\"row\">
                        <div class=\"col-md-12 heroSlider-fixed\">
                            <div class=\"overlay\">
                            </div>
                            <!-- Slider -->
                            <div class=\"slider responsive\">
                                <div>
                                    <img src=\"{{asset('images/brand-logo/1.jpg')}}\" alt=\"\" />
                                </div>
                                <div>
                                    <img src=\"{{asset('images/brand-logo/2.png')}}\" alt=\"\" />
                                </div>

                                <div>
                                    <img src=\"{{asset('images/brand-logo/6.jpeg')}}\" alt=\"\" />
                                </div>
                                <div>
                                    <img src=\"{{asset('images/brand-logo/7.png')}}\" alt=\"\" />
                                </div>
                                <div>
                                    <img src=\"{{asset('images/brand-logo/8.png')}}\" alt=\"\" />
                                </div>
                                <div>
                                    <img src=\"{{asset('images/brand-logo/3.png')}}\" alt=\"\" />
                                </div>
                                <div>
                                    <img src=\"{{asset('images/brand-logo/4.png')}}\" alt=\"\" />
                                </div>
                                <div>
                                    <img src=\"{{asset('images/brand-logo/5.png')}}\" alt=\"\" />
                                </div>
                                <div>
                                    <img src=\"{{asset('images/brand-logo/9.png')}}\" alt=\"\" />
                                </div>
                                <div>
                                    <img src=\"{{asset('images/brand-logo/10.png')}}\" alt=\"\" />
                                </div>
                            </div>
                            <!-- control arrows -->
                            <div class=\"prev\">
                                <span class=\"fa fa-chevron-left\" aria-hidden=\"true\"></span>
                            </div>
                            <div class=\"next\">
                                <span class=\"fa fa-chevron-right\" aria-hidden=\"true\"></span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class='color-white text-center'>
                    Lorem ipsum dolor sit amet, sed offendit ocurreret consectetuer in, fabulas tincidunt instructior vis te. Vis delicata conceptam complectitur ne. Ea oporteat volutpat consequat eam. Purto facete albucius ea usu, cum et quas meliore deserunt, cu nullam copiosae accusata vel. Vim animal deterruisset at. Exerci soluta postulant ex sed.

                    Mel suas audiam omittam in, oratio labore quo ei. Id aliquam facilis necessitatibus nam, vix dignissim conclusionemque cu. Qui graece malorum ex, ad habemus albucius tacimates cum, cu inani qualisque eum. 

                    
                </div>
            </div>
        </div>


        <div id=\"categoryInterest\">
            <div class=\"container\">
                <div class=\"content\">    

                    {% if categories|length %}
                        <span class=\"theme-color\">
                            {% include 'FrontBundle::Helper/page_title.html.twig' with {title: \"Categories & Interests\", description: \"Most popular categories in system ordered by highest number of assigned listings.\"} %}
                        </span>
                        <div class=\"categories-wrapper\">
                            <div class=\"row\">
                                <ul class=\"categories-ul\">
                                    {% for category in categories %}
                                        {% if loop.index < 8 %}
                                            <li class=\"categories-li\">
                                                {% include 'FrontBundle::Category/box.html.twig' %}
                                            </li><!-- /.col-* -->
                                        {% endif %}
                                    {% endfor %}
                                </ul>
                            </div><!-- /.row -->
                        </div><!-- /.categories-wrapper -->

                        <div class=\"btn-center\">
                            <a href=\"{{ path('category') }}\" class=\"btn btn-primary\">{{ 'Show All Categories'|trans }}</a>
                        </div><!-- /.btn-center -->
                    {% endif %}

                    <div class=\"business\">
                        <div class=\"text-center p-b-50\">
                            <h3 class=\"theme-color\">Business Products</div>
                        <ul class=\"text-center\">
                            <li class=\"business-li\">
                                <img src=\"{{asset('images/revicon2.png')}}\" width=\"100%\">
                                {#<span class=\"category-title\">
                                    Disipline
                                </span>#}
                            </li>
                            <li class=\"business-li\">
                                <img src=\"{{asset('images/revicon1.png')}}\" width=\"100%\">
                                {#<span class=\"category-title\">
                                    Delivery
                                </span>#}
                            </li>
                            <li class=\"business-li\">
                                <img src=\"{{asset('images/icon3.png')}}\" width=\"100%\">
                                {#<span class=\"category-title\">
                                    Medical
                                </span>#}
                            </li>

                        </ul>
                    </div>
                    <div class=\"col-md-12 text-center p-t-30\">
                        <div class=\"container\">
                            <h3 class=\"theme-color p-b-30\">Finding Recreational Dispensary Near me</h3>
                            <p>
                                Lorem ipsum dolor sit amet, sed offendit ocurreret consectetuer in, fabulas tincidunt instructior vis te. Vis delicata conceptam complectitur ne. Ea oporteat volutpat consequat eam. Purto facete albucius ea usu, cum et quas meliore deserunt, cu nullam copiosae accusata vel. Vim animal deterruisset at. Exerci soluta postulant ex sed.
                            </p><p>
                                Mel suas audiam omittam in, oratio labore quo ei. Id aliquam facilis necessitatibus nam, vix dignissim conclusionemque cu. Qui graece malorum ex, ad habemus albucius tacimates cum, cu inani qualisque eum. Quo discere consulatu ex. Noster efficiantur te his, ne cum nibh porro voluptatum.
                            </p><p>
                                Eros platonem consequat nec ea, ex nihil invidunt prodesset mea. Pro in odio decore, tantas regione praesent ius ne, ius consul aperiri ocurreret ea. Ei utroque omnesque iracundia usu. Ea tota minim epicurei mea, eam dicit adolescens omittantur ei.
                            </p><p>
                                Qui laudem antiopam consulatu cu. Magna illud democritum sea id, sea ne duis movet delicata. Prodesset gloriatur honestatis est ut. Iudico dicant nemore ex usu. Ut soluta latine sit, ut percipit adversarium duo.
                            </p><p>
                                Eam tempor phaedrum facilisis te. Pro hinc meis laoreet eu, omnes gloriatur pertinacia cu nec. Nec no erant aeterno, cu per graecis inciderint mediocritatem, mel eu etiam molestie accusata. Ex meis affert vituperata sit, cu copiosae placerat vix, ne eum quod laudem. Menandri inimicus efficiendi mel at. Agam sententiae ne ius, mei at recteque persecuti definiebas. In iudico omnium apeirian sea, no sed odio alia zril.
                            </p>
                        </div>
                    </div>
                </div>

                <div class=\"upcoming-events\">
                    <div class=\"text-center upcoming-form\">
                        <h3 class=\"p-t-50 p-b-30\">Upcoming Events</h3>
                        <p class=\"p-t-30 p-b-30\">
                            Most popular categories in system ordered by
                            highest number of assigned listings.
                        </p>
                        <form class=\"p-t-50\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"what are you looking for?\">
                            </div>
                            <div class=\"form-group\">
                                <select class=\"form-control\">
                                    <option selected></option>
                                </select>
                            </div>
                            <button class=\"btn btn-primary searchBtn\"><i class=\"fa fa-search\"></i> SEARCH</button>
                        </form>
                    </div>
                </div>
                <div class=\"rotateDiv\"></div>
                <div class=\"col-md-12 text-center\">
                    <p>
                        Lorem ipsum dolor sit amet, sed offendit ocurreret consectetuer in, fabulas tincidunt instructior vis te. Vis delicata conceptam complectitur ne. Ea oporteat volutpat consequat eam. Purto facete albucius ea usu, cum et quas meliore deserunt, cu nullam copiosae accusata vel. Vim animal deterruisset at. Exerci soluta postulant ex sed.
                    </p><p>
                        Mel suas audiam omittam in, oratio labore quo ei. Id aliquam facilis necessitatibus nam, vix dignissim conclusionemque cu. Qui graece malorum ex, ad habemus albucius tacimates cum, cu inani qualisque eum. Quo discere consulatu ex. Noster efficiantur te his, ne cum nibh porro voluptatum.
                    </p><p>
                        Eros platonem consequat nec ea, ex nihil invidunt prodesset mea. Pro in odio decore, tantas regione praesent ius ne, ius consul aperiri ocurreret ea. Ei utroque omnesque iracundia usu. Ea tota minim epicurei mea, eam dicit adolescens omittantur ei.
                    </p><p>
                        Qui laudem antiopam consulatu cu. Magna illud democritum sea id, sea ne duis movet delicata. Prodesset gloriatur honestatis est ut. Iudico dicant nemore ex usu. Ut soluta latine sit, ut percipit adversarium duo.
                    </p><p>
                        Eam tempor phaedrum facilisis te. Pro hinc meis laoreet eu, omnes gloriatur pertinacia cu nec. Nec no erant aeterno, cu per graecis inciderint mediocritatem, mel eu etiam molestie accusata. Ex meis affert vituperata sit, cu copiosae placerat vix, ne eum quod laudem. Menandri inimicus efficiendi mel at. Agam sententiae ne ius, mei at recteque persecuti definiebas. In iudico omnium apeirian sea, no sed odio alia zril.
                    </p>

                </div>
            </div>
        </div>
    </div>
    <div class=\"browseArticles\">
        <div class=\"container\">
            <div class=\"content\">  
                <span class=\"theme-color\">
                    {% if posts|length %}
                        {% include 'FrontBundle::Helper/page_title.html.twig' with {
                    title: \"Browse Articles & Tips\",
                    description: \"Read blog posts about our recommendations and experiences.\",
                    class: \"border-top\"
                } %}
                    </span>
                    <div class=\"posts-wrapper\">
                        <div class=\"row\">
                            <div class=\"col-md-10 push-md-1\">                    
                                {% for post in posts %}                    
                                    {% include 'FrontBundle::Post/row.html.twig' %}
                                {% endfor %}
                            </div><!-- /.col-* -->
                        </div><!-- /.row -->                    
                    </div><!-- /.posts-wrapper -->

                    <div class=\"btn-center\">
                        <a href=\"{{ path('post')}}\" class=\"btn btn-primary\">
                            {{ 'Show All Blog Posts'|trans }}
                        </a>
                    </div><!-- /.btn-center -->
                {% endif %}
            </div>
        </div><!-- /.content -->
    </div><!-- /.container -->
{% endblock %}", "FrontBundle::Front/index.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Front/index.html.twig");
    }
}
