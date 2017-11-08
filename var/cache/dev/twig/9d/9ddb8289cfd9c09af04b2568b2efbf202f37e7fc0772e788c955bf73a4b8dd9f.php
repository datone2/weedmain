<?php

/* FrontBundle::Widget/agent.html.twig */
class __TwigTemplate_b54ddb0cfd36ab18bded7e784f85305aeb159e94056d16510b90b9477a2c8456 extends Twig_Template
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
        $__internal_f16b9ea267284c26e21978ad0be64a25262634447d5282fdfe16593d4685ce02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f16b9ea267284c26e21978ad0be64a25262634447d5282fdfe16593d4685ce02->enter($__internal_f16b9ea267284c26e21978ad0be64a25262634447d5282fdfe16593d4685ce02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Widget/agent.html.twig"));

        $__internal_978a874ba8575773ddac7abb98e688173fb50a04fc92b0adae81380c1a4a5b47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_978a874ba8575773ddac7abb98e688173fb50a04fc92b0adae81380c1a4a5b47->enter($__internal_978a874ba8575773ddac7abb98e688173fb50a04fc92b0adae81380c1a4a5b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Widget/agent.html.twig"));

        // line 1
        echo "<div class=\"post-block\">
    <div ";
        // line 2
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 2, $this->getSourceContext()); })()), "getProfile", array(), "method")) {
            echo "style=\"background-image: url('";
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 2, $this->getSourceContext()); })()), "getProfile", array(), "method"), "avatarImage"), "html", null, true);
            echo "');\"";
        }
        // line 3
        echo "         class=\"post-user-avatar\">
    </div><!-- /.post-user-avatar -->

    <div class=\"post-user-name\">
        <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agent", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 7, $this->getSourceContext()); })()), "getId", array(), "method"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 7, $this->getSourceContext()); })()), "getDisplayName", array(), "method"), "html", null, true);
        echo "</a>
    </div><!-- /.post-user-name -->

    ";
        // line 10
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "getProfile", array(), "method")) {
            // line 11
            echo "        <div class=\"post-user-meta\">
            ";
            // line 12
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 12, $this->getSourceContext()); })()), "getProfile", array(), "method"), "getPhone", array(), "method")) {
                // line 13
                echo "                <div class=\"post-user-meta-item\">
                    ";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 14, $this->getSourceContext()); })()), "getProfile", array(), "method"), "getPhone", array(), "method"), "html", null, true);
                echo "
                </div><!-- /.post-user-meta-item -->
            ";
            }
            // line 17
            echo "
            ";
            // line 18
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 18, $this->getSourceContext()); })()), "getProfile", array(), "method"), "getWebsite", array(), "method")) {
                // line 19
                echo "                <div class=\"post-user-meta-item\">
                    <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 20, $this->getSourceContext()); })()), "getProfile", array(), "method"), "getWebsite", array(), "method"), "html", null, true);
                echo "\" target=\"_blank\">
                        ";
                // line 21
                echo twig_escape_filter($this->env, twig_trim_filter(twig_trim_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 21, $this->getSourceContext()); })()), "getProfile", array(), "method"), "getWebsite", array(), "method"), "https://"), "http://"), "html", null, true);
                echo "
                    </a>
                </div><!-- /.post-user-meta-item -->
            ";
            }
            // line 25
            echo "        </div><!-- /.post-user-meta -->

        ";
            // line 27
            if (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 27, $this->getSourceContext()); })()), "getProfile", array(), "method"), "getFacebook", array(), "method") || twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 27, $this->getSourceContext()); })()), "getProfile", array(), "method"), "getTwitter", array(), "method")) || twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 27, $this->getSourceContext()); })()), "getProfile", array(), "method"), "getLinkedin", array(), "method"))) {
                // line 28
                echo "            <div class=\"post-user-social\">
                ";
                // line 29
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 29, $this->getSourceContext()); })()), "getProfile", array(), "method"), "getFacebook", array(), "method")) {
                    // line 30
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 30, $this->getSourceContext()); })()), "getProfile", array(), "method"), "getFacebook", array(), "method"), "html", null, true);
                    echo "\">
                        <i class=\"fa fa-facebook\"></i>
                    </a>
                ";
                }
                // line 34
                echo "
                ";
                // line 35
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 35, $this->getSourceContext()); })()), "getProfile", array(), "method"), "getTwitter", array(), "method")) {
                    // line 36
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 36, $this->getSourceContext()); })()), "getProfile", array(), "method"), "getTwitter", array(), "method"), "html", null, true);
                    echo "\">
                        <i class=\"fa fa-twitter\"></i>
                    </a>
                ";
                }
                // line 40
                echo "
                ";
                // line 41
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 41, $this->getSourceContext()); })()), "getProfile", array(), "method"), "getLinkedin", array(), "method")) {
                    // line 42
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 42, $this->getSourceContext()); })()), "getProfile", array(), "method"), "getLinkedin", array(), "method"), "html", null, true);
                    echo "\">
                        <i class=\"fa fa-linkedin\"></i>
                    </a>
                ";
                }
                // line 46
                echo "            </div><!-- /.post-user-social -->
        ";
            }
            // line 48
            echo "    ";
        }
        // line 49
        echo "</div><!-- /.post-block -->";
        
        $__internal_f16b9ea267284c26e21978ad0be64a25262634447d5282fdfe16593d4685ce02->leave($__internal_f16b9ea267284c26e21978ad0be64a25262634447d5282fdfe16593d4685ce02_prof);

        
        $__internal_978a874ba8575773ddac7abb98e688173fb50a04fc92b0adae81380c1a4a5b47->leave($__internal_978a874ba8575773ddac7abb98e688173fb50a04fc92b0adae81380c1a4a5b47_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle::Widget/agent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 49,  132 => 48,  128 => 46,  120 => 42,  118 => 41,  115 => 40,  107 => 36,  105 => 35,  102 => 34,  94 => 30,  92 => 29,  89 => 28,  87 => 27,  83 => 25,  76 => 21,  72 => 20,  69 => 19,  67 => 18,  64 => 17,  58 => 14,  55 => 13,  53 => 12,  50 => 11,  48 => 10,  40 => 7,  34 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"post-block\">
    <div {% if user.getProfile() %}style=\"background-image: url('{{ vich_uploader_asset(user.getProfile(), 'avatarImage') }}');\"{% endif %}
         class=\"post-user-avatar\">
    </div><!-- /.post-user-avatar -->

    <div class=\"post-user-name\">
        <a href=\"{{ path('agent', {'id': user.getId()}) }}\">{{ user.getDisplayName() }}</a>
    </div><!-- /.post-user-name -->

    {% if user.getProfile() %}
        <div class=\"post-user-meta\">
            {% if user.getProfile().getPhone() %}
                <div class=\"post-user-meta-item\">
                    {{ user.getProfile().getPhone() }}
                </div><!-- /.post-user-meta-item -->
            {% endif %}

            {% if user.getProfile().getWebsite() %}
                <div class=\"post-user-meta-item\">
                    <a href=\"{{ user.getProfile().getWebsite() }}\" target=\"_blank\">
                        {{ user.getProfile().getWebsite()|trim('https://')|trim('http://') }}
                    </a>
                </div><!-- /.post-user-meta-item -->
            {% endif %}
        </div><!-- /.post-user-meta -->

        {% if user.getProfile().getFacebook() or user.getProfile().getTwitter() or user.getProfile().getLinkedin()%}
            <div class=\"post-user-social\">
                {% if user.getProfile().getFacebook() %}
                    <a href=\"{{ user.getProfile().getFacebook() }}\">
                        <i class=\"fa fa-facebook\"></i>
                    </a>
                {% endif %}

                {% if user.getProfile().getTwitter() %}
                    <a href=\"{{ user.getProfile().getTwitter() }}\">
                        <i class=\"fa fa-twitter\"></i>
                    </a>
                {% endif %}

                {% if user.getProfile().getLinkedin() %}
                    <a href=\"{{ user.getProfile().getLinkedin() }}\">
                        <i class=\"fa fa-linkedin\"></i>
                    </a>
                {% endif %}
            </div><!-- /.post-user-social -->
        {% endif %}
    {% endif %}
</div><!-- /.post-block -->", "FrontBundle::Widget/agent.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Widget/agent.html.twig");
    }
}
