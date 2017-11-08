<?php

/* AppBundle:Helper:pagination.html.twig */
class __TwigTemplate_57bae7b69545b69a1a78bc24d63b988e8e60753a6c7138bd97f34cf3e21118d7 extends Twig_Template
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
        if ((($context["pageCount"] ?? null) > 1)) {
            // line 2
            echo "    <nav aria-label=\"Page navigation\">
        <ul class=\"pagination\">

            ";
            // line 5
            if (array_key_exists("previous", $context)) {
                // line 6
                echo "                <li class=\"page-item\">
                    <a rel=\"prev\" class=\"page-link\" href=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), array(($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)))), "html", null, true);
                echo "\"><i class=\"fa fa-chevron-left\"></i>&nbsp;";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Previous"), "html", null, true);
                echo "</a>
                </li>
            ";
            } else {
                // line 10
                echo "                <li class=\"page-item disabled\">
                    <a class=\"page-link\"><span><i class=\"fa fa-chevron-left\"></i>&nbsp;";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Previous"), "html", null, true);
                echo "</span></a>
                </li>
            ";
            }
            // line 14
            echo "
            ";
            // line 15
            if ((($context["startPage"] ?? null) > 1)) {
                // line 16
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), array(($context["pageParameterName"] ?? null) => 1))), "html", null, true);
                echo "\">1</a>
                </li>
                ";
                // line 19
                if ((($context["startPage"] ?? null) == 3)) {
                    // line 20
                    echo "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
                    // line 21
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), array(($context["pageParameterName"] ?? null) => 2))), "html", null, true);
                    echo "\">2</a>
                    </li>
                ";
                } elseif ((                // line 23
($context["startPage"] ?? null) != 2)) {
                    // line 24
                    echo "                    <li class=\"page-item disabled\">
                        <a class=\"page-link\"><span>&hellip;</span></a>
                    </li>
                ";
                }
                // line 28
                echo "            ";
            }
            // line 29
            echo "
            ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 31
                echo "                ";
                if (($context["page"] != ($context["current"] ?? null))) {
                    // line 32
                    echo "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
                    // line 33
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), array(($context["pageParameterName"] ?? null) => $context["page"]))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                    </li>
                ";
                } else {
                    // line 36
                    echo "                    <li class=\"page-item active\">
                        <a class=\"page-link\"><span>";
                    // line 37
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</span></a>
                    </li>
                ";
                }
                // line 40
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "
            ";
            // line 43
            if ((($context["pageCount"] ?? null) > ($context["endPage"] ?? null))) {
                // line 44
                echo "                ";
                if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 1))) {
                    // line 45
                    echo "                    ";
                    if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 2))) {
                        // line 46
                        echo "                        <li class=\"page-item disabled\">
                            <a class=\"page-link\"><span>&hellip;</span></a>
                        </li>
                    ";
                    } else {
                        // line 50
                        echo "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                        // line 51
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), array(($context["pageParameterName"] ?? null) => (($context["pageCount"] ?? null) - 1)))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, (($context["pageCount"] ?? null) - 1), "html", null, true);
                        echo "</a>
                        </li>
                    ";
                    }
                    // line 54
                    echo "                ";
                }
                // line 55
                echo "                <li>
                    <a href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), array(($context["pageParameterName"] ?? null) => ($context["pageCount"] ?? null)))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["pageCount"] ?? null), "html", null, true);
                echo "</a>
                </li>
            ";
            }
            // line 59
            echo "
            ";
            // line 60
            if (array_key_exists("next", $context)) {
                // line 61
                echo "                <li class=\"page-item\">
                    <a rel=\"next\" class=\"page-link\" href=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), array(($context["pageParameterName"] ?? null) => ($context["next"] ?? null)))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Next"), "html", null, true);
                echo "&nbsp;<i class=\"fa fa-chevron-right\"></i></a>
                </li>
            ";
            } else {
                // line 65
                echo "                <li class=\"page-item disabled\">
                    <a class=\"page-link\"><span>";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Next"), "html", null, true);
                echo "&nbsp;<i class=\"fa fa-chevron-right\"></i></span></a>
                </li>
            ";
            }
            // line 69
            echo "        </ul>
    </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "AppBundle:Helper:pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 69,  180 => 66,  177 => 65,  169 => 62,  166 => 61,  164 => 60,  161 => 59,  153 => 56,  150 => 55,  147 => 54,  139 => 51,  136 => 50,  130 => 46,  127 => 45,  124 => 44,  122 => 43,  119 => 42,  112 => 40,  106 => 37,  103 => 36,  95 => 33,  92 => 32,  89 => 31,  85 => 30,  82 => 29,  79 => 28,  73 => 24,  71 => 23,  66 => 21,  63 => 20,  61 => 19,  56 => 17,  53 => 16,  51 => 15,  48 => 14,  42 => 11,  39 => 10,  31 => 7,  28 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Helper:pagination.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/AppBundle/Resources/views/Helper/pagination.html.twig");
    }
}
