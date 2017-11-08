<?php

/* FrontBundle::Helper/hero.html.twig */
class __TwigTemplate_947ef364ab9b28bde2109ab6317c8ab0aef411e7346636381247871297c067a7 extends Twig_Template
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
        echo "<div class=\"hero-wrapper\">
    <div class=\"hero\">
        <div class=\"container\">
            <h1>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search City Gems"), "html", null, true);
        echo "</h1>
            <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Find the best spots or places in your city by using our directory theme. Start listing anything today."), "html", null, true);
        echo "</p>

            ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["filter"] ?? null), 'form_start', array("name" => "filter-hero-form"));
        echo "
            ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["filter"] ?? null), 'widget');
        echo "
            ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["filter"] ?? null), 'form_end');
        echo "

            ";
        // line 11
        if (twig_length_filter($this->env, ($context["categories_popular"] ?? null))) {
            // line 12
            echo "                <div class=\"hero-categories text-center\">
                    <strong class=\"col-md-12\">";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Popular categories"), "html", null, true);
            echo "</strong>

                    <ul>
                        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories_popular"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 17
                echo "                            <li>
                                <a href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_detail", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "getSlug", array(), "method"))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t";
                // line 20
                $context["imagePath"] = "";
                // line 21
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "getName", array(), "method") == "Travel")) {
                    // line 22
                    echo "\t\t\t\t\t\t\t\t";
                    $context["imagePath"] = "airplane.png";
                    // line 23
                    echo "\t\t\t\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "getName", array(), "method") == "Dispensarys")) {
                    // line 24
                    echo "\t\t\t\t\t\t\t\t";
                    $context["imagePath"] = "disipline.png";
                    // line 25
                    echo "\t\t\t\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "getName", array(), "method") == "Delivery")) {
                    // line 26
                    echo "\t\t\t\t\t\t\t\t";
                    $context["imagePath"] = "delivery.png";
                    // line 27
                    echo "\t\t\t\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "getName", array(), "method") == "Doctor")) {
                    // line 28
                    echo "\t\t\t\t\t\t\t\t";
                    $context["imagePath"] = "doctor.png";
                    // line 29
                    echo "\t\t\t\t\t\t\t\t";
                } else {
                    // line 30
                    echo "\t\t\t\t\t\t\t\t";
                    $context["imagePath"] = "noimage.gif";
                    echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                }
                // line 32
                echo "\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . ($context["imagePath"] ?? null))), "html", null, true);
                echo "\" class=\"p-10\">
\t\t\t\t\t\t\t\t<div class='color-black'>
                                    ";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "getName", array(), "method"), "html", null, true);
                echo " ";
                // line 35
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                </a>";
                // line 37
                echo "</li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                    </ul>
                </div><!-- /.hero-categories -->
            ";
        }
        // line 42
        echo "        </div><!-- /.container -->
    </div><!-- /.hero -->
</div><!-- /.hero-wrapper -->";
    }

    public function getTemplateName()
    {
        return "FrontBundle::Helper/hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 42,  124 => 39,  117 => 37,  113 => 35,  110 => 34,  104 => 32,  98 => 30,  95 => 29,  92 => 28,  89 => 27,  86 => 26,  83 => 25,  80 => 24,  77 => 23,  74 => 22,  71 => 21,  69 => 20,  64 => 18,  61 => 17,  57 => 16,  51 => 13,  48 => 12,  46 => 11,  41 => 9,  37 => 8,  33 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle::Helper/hero.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Helper/hero.html.twig");
    }
}
