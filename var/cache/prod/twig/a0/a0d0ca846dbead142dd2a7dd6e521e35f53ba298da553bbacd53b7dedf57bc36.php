<?php

/* FrontBundle::Front/index.html.twig */
class __TwigTemplate_a0121ecb574adc7a11dac87911355a92a13a6fb3413deba7cb41d660acd4f51a extends Twig_Template
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
        // line 3
        $context["menu_active"] = "home";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Listing & Directory Application for Symfony"), "html", null, true);
    }

    // line 7
    public function block_body_class($context, array $blocks = array())
    {
        echo "header-transparent";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->loadTemplate("FrontBundle::Helper/hero.html.twig", "FrontBundle::Front/index.html.twig", 10)->display($context);
        // line 11
        echo "    <div class=\"listing\">
        <div class=\"container\">
            <div class=\"content mb-70\">

                ";
        // line 15
        if (twig_length_filter($this->env, ($context["listings"] ?? null))) {
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
        if (twig_length_filter($this->env, ($context["locations"] ?? null))) {
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
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
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
        if (twig_length_filter($this->env, ($context["categories"] ?? null))) {
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
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
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
        if (twig_length_filter($this->env, ($context["posts"] ?? null))) {
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
            $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
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
        return array (  524 => 261,  517 => 257,  513 => 256,  506 => 251,  492 => 250,  490 => 249,  471 => 248,  465 => 244,  462 => 239,  460 => 238,  394 => 174,  390 => 170,  386 => 168,  382 => 164,  378 => 162,  374 => 158,  366 => 152,  358 => 149,  351 => 144,  337 => 143,  333 => 141,  331 => 140,  328 => 139,  325 => 138,  308 => 137,  302 => 133,  300 => 132,  297 => 131,  295 => 130,  263 => 101,  257 => 98,  251 => 95,  245 => 92,  239 => 89,  233 => 86,  227 => 83,  221 => 80,  214 => 76,  208 => 73,  190 => 57,  183 => 53,  179 => 51,  164 => 49,  162 => 48,  159 => 47,  142 => 46,  137 => 43,  135 => 42,  132 => 41,  130 => 40,  122 => 34,  117 => 31,  102 => 29,  100 => 28,  97 => 27,  93 => 25,  89 => 23,  86 => 22,  69 => 21,  64 => 18,  62 => 17,  59 => 16,  57 => 15,  51 => 11,  48 => 10,  45 => 9,  39 => 7,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle::Front/index.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Front/index.html.twig");
    }
}
