<?php

/* FrontBundle::Helper/header.html.twig */
class __TwigTemplate_6d849d81462b20596649bbad1eca815d120561de16a1cf54a4067030dd275da8 extends Twig_Template
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
        if ((array_key_exists("menu_active", $context) && (($context["menu_active"] ?? null) == "home"))) {
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
        if ((array_key_exists("menu_active", $context) && (($context["menu_active"] ?? null) == "listings"))) {
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
        if ((array_key_exists("menu_active", $context) && (($context["menu_active"] ?? null) == "posts"))) {
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
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array())) {
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
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array())) {
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
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "profile", array()) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "profile", array()), "getAvatarName", array(), "method"))) {
                // line 88
                echo "                                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "profile", array()), "avatarImage"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "getProfile", array(), "method"), "getDisplayName", array(), "method"), "html", null, true);
                echo "\">
                                    ";
            } else {
                // line 90
                echo "                                        <div class=\"dropdown-avatar\">
                                            ";
                // line 91
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "profile", array())) {
                    // line 92
                    echo "                                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "profile", array()), "getInitials", array(), "method"), "html", null, true);
                    echo "
                                            ";
                } else {
                    // line 94
                    echo "                                                ";
                    echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "getUsername", array(), "method")), "html", null, true);
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
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "getProfile", array(), "method")) {
                // line 100
                echo "                                        <span>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "getProfile", array(), "method"), "getDisplayName", array(), "method"), "html", null, true);
                echo "</span>
                                    ";
            } else {
                // line 102
                echo "                                        <span>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "getUsername", array(), "method"), "html", null, true);
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
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "hasRole", array(0 => "ROLE_SUPER_ADMIN"), "method")) {
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
        return array (  312 => 139,  306 => 135,  297 => 129,  292 => 127,  286 => 124,  276 => 119,  270 => 118,  264 => 117,  258 => 116,  252 => 115,  246 => 114,  240 => 113,  234 => 112,  231 => 111,  223 => 109,  221 => 108,  216 => 105,  213 => 104,  207 => 102,  201 => 100,  199 => 99,  196 => 98,  192 => 96,  186 => 94,  180 => 92,  178 => 91,  175 => 90,  167 => 88,  164 => 87,  162 => 86,  156 => 82,  154 => 81,  145 => 75,  141 => 74,  137 => 72,  130 => 68,  126 => 67,  118 => 62,  114 => 61,  111 => 60,  109 => 59,  102 => 54,  95 => 35,  87 => 34,  79 => 29,  71 => 28,  63 => 23,  55 => 22,  37 => 9,  30 => 5,  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle::Helper/header.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Helper/header.html.twig");
    }
}
