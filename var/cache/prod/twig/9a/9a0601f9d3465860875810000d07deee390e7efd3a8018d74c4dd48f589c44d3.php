<?php

/* FrontBundle::Listing/Header/content.html.twig */
class __TwigTemplate_c05cb6d1169ffa2651f3949136eac1c4b034d611a2abcdb3464d9ed434fb882c extends Twig_Template
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
        echo "<div class=\"listing-header-content\">
    <div class=\"container\">
        ";
        // line 3
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getIsVerified", array(), "method")) {
            // line 4
            echo "            <div class=\"listing-header-label\">
                ";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Verified Listing"), "html", null, true);
            echo "
            </div><!-- /.listing-header-label-->
        ";
        }
        // line 8
        echo "
        <h1>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getName", array(), "method"), "html", null, true);
        echo "</h1>

        ";
        // line 11
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getAddress", array(), "method")) {
            // line 12
            echo "            <address>";
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getAddress", array(), "method"), "html", null, true));
            echo "</address>
        ";
        }
        // line 14
        echo "
        ";
        // line 15
        if (array_key_exists("actions", $context)) {
            // line 16
            echo "            <div class=\"actions\">
                ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["actions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 18
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["action"], "link", array()), "html", null, true);
                echo "\" class=\"btn btn-primary\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["action"], "title", array()), "html", null, true);
                echo "</a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "            </div><!-- /.actions -->
        ";
        }
        // line 22
        echo "    </div><!-- /.container -->
</div><!-- /.listing-header-content -->   ";
    }

    public function getTemplateName()
    {
        return "FrontBundle::Listing/Header/content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 22,  73 => 20,  62 => 18,  58 => 17,  55 => 16,  53 => 15,  50 => 14,  44 => 12,  42 => 11,  37 => 9,  34 => 8,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle::Listing/Header/content.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Listing/Header/content.html.twig");
    }
}
