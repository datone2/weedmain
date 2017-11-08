<?php

/* FrontBundle::Helper/header.html.twig */
class __TwigTemplate_b712e21672e2dd9ce6b354f0e28f4ced35482bd0d4e1f16ecd1f3578f4fcf95e extends Twig_Template
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
        $__internal_3107cf88072f00ab12d4631942555cd7f77b5ef43894190127f053aa5d8304c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3107cf88072f00ab12d4631942555cd7f77b5ef43894190127f053aa5d8304c5->enter($__internal_3107cf88072f00ab12d4631942555cd7f77b5ef43894190127f053aa5d8304c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Helper/header.html.twig"));

        $__internal_c151e10c352cb2f49dbd798710750c81af45672ff466e8ff5af7029140d10e46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c151e10c352cb2f49dbd798710750c81af45672ff466e8ff5af7029140d10e46->enter($__internal_c151e10c352cb2f49dbd798710750c81af45672ff466e8ff5af7029140d10e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Helper/header.html.twig"));

        // line 1
        echo "<div class=\"header-wrapper\">
    <div class=\"header\">
        <div class=\"container";
        // line 3
        if (array_key_exists("fullwidth", $context)) {
            echo "-fluid";
        }
        echo "\">
            <div class=\"header-brand\">
                <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">
                    <span class=\"header-brand-image\">                        
                      
                       
                        <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home"), "html", null, true);
        echo "\" class=\"image-svg\">
                        
                    </span><!-- /.header-brand-image -->

                    <span class=\"header-brand-title\">
                        <strong>Directory</strong><span>Platform</span>
                    </span><!-- /.header-brand-title -->
                </a>
            </div><!-- /.header-brand -->

            <div class=\"header-nav-primary\">
                <ul class=\"nav\">
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"nav-link ";
        if ((array_key_exists("menu_active", $context) && ((isset($context["menu_active"]) || array_key_exists("menu_active", $context) ? $context["menu_active"] : (function () { throw new Twig_Error_Runtime('Variable "menu_active" does not exist.', 22, $this->getSourceContext()); })()) == "home"))) {
            echo "active";
        }
        echo "\">
                            ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home"), "html", null, true);
        echo "
                        </a> 
                    </li><!-- /.nav-item -->

                    <li class=\"nav-item\">
                        <a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listing");
        echo "\" class=\"nav-link ";
        if ((array_key_exists("menu_active", $context) && ((isset($context["menu_active"]) || array_key_exists("menu_active", $context) ? $context["menu_active"] : (function () { throw new Twig_Error_Runtime('Variable "menu_active" does not exist.', 28, $this->getSourceContext()); })()) == "listings"))) {
            echo "active";
        }
        echo "\">
                            ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Listings"), "html", null, true);
        echo "
                        </a> 
                    </li><!-- /.nav-item -->

                    <li class=\"nav-item\">
                        <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post");
        echo "\" class=\"nav-link ";
        if ((array_key_exists("menu_active", $context) && ((isset($context["menu_active"]) || array_key_exists("menu_active", $context) ? $context["menu_active"] : (function () { throw new Twig_Error_Runtime('Variable "menu_active" does not exist.', 34, $this->getSourceContext()); })()) == "posts"))) {
            echo "active";
        }
        echo "\">
                            ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Blog"), "html", null, true);
        echo "
                        </a> 
                    </li><!-- /.nav-item -->                    
                    
                    ";
        // line 54
        echo "                </ul><!-- /.nav -->
            </div><!-- /.header-nav-primary -->

            <div class=\"header-nav-secondary\">
                <ul class=\"nav\">
                    ";
        // line 59
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 59, $this->getSourceContext()); })()), "user", array())) {
            // line 60
            echo "                        <li class=\"nav-item hidden-sm-down\">
                            <a href=\"";
            // line 61
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" class=\"nav-link\" data-toggle=\"modal\" data-target=\"#modal-login\">
                                ";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Login"), "html", null, true);
            echo "
                            </a>
                        </li>

                        <li class=\"nav-item hidden-sm-down\">
                            <a href=\"";
            // line 67
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\" class=\"nav-link\" data-toggle=\"modal\" data-target=\"#modal-register\">
                                ";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Register"), "html", null, true);
            echo "
                            </a>
                        </li>
                    ";
        }
        // line 72
        echo "
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listing_create");
        echo "\" class=\"nav-link nav-btn color-white\">
                            + ";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add Listing"), "html", null, true);
        echo "
                        </a>
                    </li>
                </ul>
            </div><!-- /.header-nav-secondary -->

            ";
        // line 81
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 81, $this->getSourceContext()); })()), "user", array())) {
            // line 82
            echo "                <div class=\"header-nav-user\">
                    <ul class=\"nav\">
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                ";
            // line 86
            ob_start();
            // line 87
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 87, $this->getSourceContext()); })()), "user", array()), "profile", array()) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 87, $this->getSourceContext()); })()), "user", array()), "profile", array()), "getAvatarName", array(), "method"))) {
                // line 88
                echo "                                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 88, $this->getSourceContext()); })()), "user", array()), "profile", array()), "avatarImage"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 88, $this->getSourceContext()); })()), "user", array()), "getProfile", array(), "method"), "getDisplayName", array(), "method"), "html", null, true);
                echo "\">
                                    ";
            } else {
                // line 90
                echo "                                        <div class=\"dropdown-avatar\">
                                            ";
                // line 91
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 91, $this->getSourceContext()); })()), "user", array()), "profile", array())) {
                    // line 92
                    echo "                                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 92, $this->getSourceContext()); })()), "user", array()), "profile", array()), "getInitials", array(), "method"), "html", null, true);
                    echo "
                                            ";
                } else {
                    // line 94
                    echo "                                                ";
                    echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 94, $this->getSourceContext()); })()), "user", array()), "getUsername", array(), "method")), "html", null, true);
                    echo "
                                            ";
                }
                // line 96
                echo "                                        </div><!-- /.dropdown-avatar -->
                                    ";
            }
            // line 98
            echo "
                                    ";
            // line 99
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 99, $this->getSourceContext()); })()), "user", array()), "getProfile", array(), "method")) {
                // line 100
                echo "                                        <span>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 100, $this->getSourceContext()); })()), "user", array()), "getProfile", array(), "method"), "getDisplayName", array(), "method"), "html", null, true);
                echo "</span>
                                    ";
            } else {
                // line 102
                echo "                                        <span>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 102, $this->getSourceContext()); })()), "user", array()), "getUsername", array(), "method"), "html", null, true);
                echo "</span>
                                    ";
            }
            // line 104
            echo "                                ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 105
            echo "                            </a>

                            <div class=\"dropdown-menu\" aria-labelledby=\"header-dropdown\">
                                ";
            // line 108
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 108, $this->getSourceContext()); })()), "user", array()), "hasRole", array(0 => "ROLE_SUPER_ADMIN"), "method")) {
                // line 109
                echo "                                    <a class=\"dropdown-item\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_dashboard");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Admin Dashboard"), "html", null, true);
                echo "</a>
                                ";
            }
            // line 111
            echo "
                                <a class=\"dropdown-item\" href=\"";
            // line 112
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listing_my");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Listings"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 113
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_my");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Products"), "html", null, true);
            echo "</a>
                                <a class=\"dropdown-item\" href=\"";
            // line 114
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("favorite");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Favorites"), "html", null, true);
            echo "</a>
                                <a class=\"dropdown-item\" href=\"";
            // line 115
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Searches"), "html", null, true);
            echo "</a>
                                <a class=\"dropdown-item\" href=\"";
            // line 116
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Orders"), "html", null, true);
            echo "</a>                                
                                <a class=\"dropdown-item\" href=\"";
            // line 117
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile_update");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your Profile"), "html", null, true);
            echo "</a>                                
                                <a class=\"dropdown-item\" href=\"";
            // line 118
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Change Password"), "html", null, true);
            echo "</a>
                                <a class=\"dropdown-item\" href=\"";
            // line 119
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Logout"), "html", null, true);
            echo "</a>
                            </div>
                        </li>

                        <li class=\"nav-item shopping-cart\">
                            <a href=\"";
            // line 124
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cart");
            echo "\" class=\"nav-link\">
                                <i class=\"fa fa-shopping-cart\"></i>

                                <span class=\"shopping-cart-title\">";
            // line 127
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shopping cart"), "html", null, true);
            echo "</span>

                                <span class=\"badge\">";
            // line 129
            echo twig_escape_filter($this->env, $this->env->getExtension('DirectoryPlatform\AppBundle\Twig\CartExtension')->getCount($this->env), "html", null, true);
            echo "</span><!-- /.badge -->
                            </a><!-- /.nav-link -->
                        </li><!-- /.shopping-cart -->
                    </ul><!-- /.nav -->
                </div><!-- /.header-nav-user -->
            ";
        }
        // line 135
        echo "        </div><!-- /.container -->
    </div><!-- /.header -->

    <div class=\"header-toggle\">
        <span>";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Toggle Navigation"), "html", null, true);
        echo "</span>
    </div><!-- /.header-toggle -->
</div><!-- /.header-wrapper -->";
        
        $__internal_3107cf88072f00ab12d4631942555cd7f77b5ef43894190127f053aa5d8304c5->leave($__internal_3107cf88072f00ab12d4631942555cd7f77b5ef43894190127f053aa5d8304c5_prof);

        
        $__internal_c151e10c352cb2f49dbd798710750c81af45672ff466e8ff5af7029140d10e46->leave($__internal_c151e10c352cb2f49dbd798710750c81af45672ff466e8ff5af7029140d10e46_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle::Helper/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 139,  312 => 135,  303 => 129,  298 => 127,  292 => 124,  282 => 119,  276 => 118,  270 => 117,  264 => 116,  258 => 115,  252 => 114,  246 => 113,  240 => 112,  237 => 111,  229 => 109,  227 => 108,  222 => 105,  219 => 104,  213 => 102,  207 => 100,  205 => 99,  202 => 98,  198 => 96,  192 => 94,  186 => 92,  184 => 91,  181 => 90,  173 => 88,  170 => 87,  168 => 86,  162 => 82,  160 => 81,  151 => 75,  147 => 74,  143 => 72,  136 => 68,  132 => 67,  124 => 62,  120 => 61,  117 => 60,  115 => 59,  108 => 54,  101 => 35,  93 => 34,  85 => 29,  77 => 28,  69 => 23,  61 => 22,  43 => 9,  36 => 5,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"header-wrapper\">
    <div class=\"header\">
        <div class=\"container{% if fullwidth is defined %}-fluid{% endif %}\">
            <div class=\"header-brand\">
                <a href=\"{{ path('homepage') }}\">
                    <span class=\"header-brand-image\">                        
                      
                       
                        <img src=\"{{ asset('images/logo.png') }}\" alt=\"{{ 'Home'|trans }}\" class=\"image-svg\">
                        
                    </span><!-- /.header-brand-image -->

                    <span class=\"header-brand-title\">
                        <strong>Directory</strong><span>Platform</span>
                    </span><!-- /.header-brand-title -->
                </a>
            </div><!-- /.header-brand -->

            <div class=\"header-nav-primary\">
                <ul class=\"nav\">
                    <li class=\"nav-item\">
                        <a href=\"{{ path('homepage') }}\" class=\"nav-link {% if menu_active is defined and menu_active == 'home' %}active{% endif %}\">
                            {{ 'Home'|trans }}
                        </a> 
                    </li><!-- /.nav-item -->

                    <li class=\"nav-item\">
                        <a href=\"{{ path('listing') }}\" class=\"nav-link {% if menu_active is defined and menu_active == 'listings' %}active{% endif %}\">
                            {{ 'Listings'|trans }}
                        </a> 
                    </li><!-- /.nav-item -->

                    <li class=\"nav-item\">
                        <a href=\"{{ path('post') }}\" class=\"nav-link {% if menu_active is defined and menu_active == 'posts' %}active{% endif %}\">
                            {{ 'Blog'|trans }}
                        </a> 
                    </li><!-- /.nav-item -->                    
                    
                    {#
                    <li class=\"nav-item dropdown\">
                        <a href=\"{{ path('listing') }}\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                            {{ 'Locations'|trans }}
                        </a> 

                        <div class=\"dropdown-menu\">
                            <a href=\"#\" class=\"dropdown-item\">Item 1</a>
                            <a href=\"#\" class=\"dropdown-item\">Item 2</a>
                            <a href=\"#\" class=\"dropdown-item\">Item 3</a>
                            <a href=\"#\" class=\"dropdown-item\">Item 4</a>
                            <a href=\"#\" class=\"dropdown-item\">Item 5</a>
                        </div><!-- /.sub-menu -->
                    </li><!-- /.nav-item -->                    
                    #}
                </ul><!-- /.nav -->
            </div><!-- /.header-nav-primary -->

            <div class=\"header-nav-secondary\">
                <ul class=\"nav\">
                    {% if not app.user %}
                        <li class=\"nav-item hidden-sm-down\">
                            <a href=\"{{ path('fos_user_security_login') }}\" class=\"nav-link\" data-toggle=\"modal\" data-target=\"#modal-login\">
                                {{ 'Login'|trans }}
                            </a>
                        </li>

                        <li class=\"nav-item hidden-sm-down\">
                            <a href=\"{{ path('fos_user_registration_register') }}\" class=\"nav-link\" data-toggle=\"modal\" data-target=\"#modal-register\">
                                {{ 'Register'|trans }}
                            </a>
                        </li>
                    {% endif %}

                    <li class=\"nav-item\">
                        <a href=\"{{ path('listing_create')}}\" class=\"nav-link nav-btn color-white\">
                            + {{ 'Add Listing'|trans }}
                        </a>
                    </li>
                </ul>
            </div><!-- /.header-nav-secondary -->

            {% if app.user %}
                <div class=\"header-nav-user\">
                    <ul class=\"nav\">
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                {% spaceless %}
                                    {% if app.user.profile and app.user.profile.getAvatarName() %}
                                        <img src=\"{{ vich_uploader_asset(app.user.profile, 'avatarImage') }}\" alt=\"{{ app.user.getProfile().getDisplayName() }}\">
                                    {% else %}
                                        <div class=\"dropdown-avatar\">
                                            {% if app.user.profile %}
                                                {{ app.user.profile.getInitials() }}
                                            {% else %}
                                                {{ app.user.getUsername()|first }}
                                            {% endif %}
                                        </div><!-- /.dropdown-avatar -->
                                    {% endif %}

                                    {% if app.user.getProfile() %}
                                        <span>{{ app.user.getProfile().getDisplayName() }}</span>
                                    {% else %}
                                        <span>{{ app.user.getUsername() }}</span>
                                    {% endif %}
                                {% endspaceless %}
                            </a>

                            <div class=\"dropdown-menu\" aria-labelledby=\"header-dropdown\">
                                {% if app.user.hasRole('ROLE_SUPER_ADMIN') %}
                                    <a class=\"dropdown-item\" href=\"{{ path('admin_dashboard') }}\">{{ 'Admin Dashboard'|trans }}</a>
                                {% endif %}

                                <a class=\"dropdown-item\" href=\"{{ path('listing_my') }}\">{{ 'Listings'|trans }}</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('product_my') }}\">{{ 'Products'|trans }}</a>
                                <a class=\"dropdown-item\" href=\"{{ path('favorite') }}\">{{ 'Favorites'|trans }}</a>
                                <a class=\"dropdown-item\" href=\"{{ path('search') }}\">{{ 'Searches'|trans }}</a>
                                <a class=\"dropdown-item\" href=\"{{ path('order') }}\">{{ 'Orders'|trans }}</a>                                
                                <a class=\"dropdown-item\" href=\"{{ path('profile_update') }}\">{{ 'Your Profile'|trans }}</a>                                
                                <a class=\"dropdown-item\" href=\"{{ path('fos_user_change_password') }}\">{{ 'Change Password'|trans }}</a>
                                <a class=\"dropdown-item\" href=\"{{ path('fos_user_security_logout') }}\">{{ 'Logout'|trans }}</a>
                            </div>
                        </li>

                        <li class=\"nav-item shopping-cart\">
                            <a href=\"{{ path('cart') }}\" class=\"nav-link\">
                                <i class=\"fa fa-shopping-cart\"></i>

                                <span class=\"shopping-cart-title\">{{ 'Shopping cart'|trans }}</span>

                                <span class=\"badge\">{{ cart_get_count() }}</span><!-- /.badge -->
                            </a><!-- /.nav-link -->
                        </li><!-- /.shopping-cart -->
                    </ul><!-- /.nav -->
                </div><!-- /.header-nav-user -->
            {% endif %}
        </div><!-- /.container -->
    </div><!-- /.header -->

    <div class=\"header-toggle\">
        <span>{{ 'Toggle Navigation'|trans }}</span>
    </div><!-- /.header-toggle -->
</div><!-- /.header-wrapper -->", "FrontBundle::Helper/header.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Helper/header.html.twig");
    }
}
