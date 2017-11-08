<?php

/* FrontBundle::Review/row.html.twig */
class __TwigTemplate_8785dba16bff4e9fb5a45481c67df9fb705c5342040078f456359a5bce49de76 extends Twig_Template
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
        echo "<div class=\"review\">
    <div class=\"review-author\">
        <div class=\"review-author-avatar\" 
             ";
        // line 4
        if (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["review"] ?? null), "getUser", array(), "method") && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["review"] ?? null), "getUser", array(), "method"), "getProfile", array(), "method")) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["review"] ?? null), "getUser", array(), "method"), "getProfile", array(), "method"), "getAvatarImage", array(), "method"))) {
            echo "style=\"background-image: url('";
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["review"] ?? null), "getUser", array(), "method"), "getProfile", array(), "method"), "avatarImage"), "html", null, true);
            echo "');\"";
        }
        echo ">
        </div><!-- /.review-author-avatar -->
    </div><!-- /.review-author -->

    <div class=\"review-content\">
        <div class=\"review-meta\">
            <div class=\"review-meta-author-name\">
                ";
        // line 11
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["review"] ?? null), "getUser", array(), "method")) {
            // line 12
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["review"] ?? null), "getUser", array(), "method"), "getDisplayName", array(), "method"), "html", null, true);
            echo "
                ";
        } else {
            // line 14
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["review"] ?? null), "getName", array(), "method"), "html", null, true);
            echo "
                ";
        }
        // line 16
        echo "            </div><!-- /.review-meta-author-name -->

            <div class=\"review-meta-date\">
                ";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["review"] ?? null), "getCreated", array(), "method")), "html", null, true);
        echo "
            </div><!-- /.review-meta-date -->
        </div><!-- /.review-meta -->

        <div class=\"review-description\">
            ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["review"] ?? null), "getDescription", array(), "method"), "html", null, true);
        echo "
        </div><!-- /.review-description -->
    </div><!-- /.review-content -->

    ";
        // line 28
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["review"] ?? null), "getRatings", array(), "method"))) {
            // line 29
            echo "        <div class=\"review-ratings\">
            <div class=\"row\">
                ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["review"] ?? null), "getRatings", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["rating"]) {
                // line 32
                echo "                    <div class=\"col-sm-4\">
                        <div class=\"rating-wrapper\">
                            <strong>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["rating"], "getLabel", array(), "method"), "html", null, true);
                echo "</strong>

                            <select class=\"rating\" data-value=\"";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["rating"], "getValue", array(), "method"), "html", null, true);
                echo "\" data-max=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["rating"], "getMax", array(), "method"), "html", null, true);
                echo "\">
                                ";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->getSourceContext(), $context["rating"], "getMax", array(), "method")));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 38
                    echo "                                    <option ";
                    if ((abs(twig_get_attribute($this->env, $this->getSourceContext(), $context["rating"], "getValue", array(), "method")) == $context["i"])) {
                        echo "selected";
                    }
                    echo " value=\"";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</option>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "                            </select>
                        </div><!-- /.rating-wrapper -->
                    </div><!-- /.col-* -->
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rating'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "            </div><!-- /.row -->
        </div><!-- /.ratings -->
    ";
        }
        // line 47
        echo "</div><!-- /.review -->";
    }

    public function getTemplateName()
    {
        return "FrontBundle::Review/row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 47,  125 => 44,  116 => 40,  101 => 38,  97 => 37,  91 => 36,  86 => 34,  82 => 32,  78 => 31,  74 => 29,  72 => 28,  65 => 24,  57 => 19,  52 => 16,  46 => 14,  40 => 12,  38 => 11,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle::Review/row.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Review/row.html.twig");
    }
}
