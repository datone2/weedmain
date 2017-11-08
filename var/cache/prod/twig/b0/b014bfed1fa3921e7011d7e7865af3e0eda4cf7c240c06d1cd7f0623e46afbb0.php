<?php

/* FrontBundle::Agent/index.html.twig */
class __TwigTemplate_ab76e60aae8302ce8236ca1f018a901a62b2465f245cac5fe0f71c36852d450b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::Layout/base.html.twig", "FrontBundle::Agent/index.html.twig", 1);
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
        // line 3
        $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Agent Listings");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"container\">
        ";
        // line 9
        $this->loadTemplate("FrontBundle::Helper/content_title.html.twig", "FrontBundle::Agent/index.html.twig", 9)->display($context);
        // line 10
        echo "
        <div class=\"content\">
            ";
        // line 12
        if (twig_length_filter($this->env, ($context["listings"] ?? null))) {
            // line 13
            echo "                <div class=\"row\">
                    ";
            // line 14
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
                // line 15
                echo "                        <div class=\"col-md-4\">
                            ";
                // line 16
                $this->loadTemplate("FrontBundle::Listing/box.html.twig", "FrontBundle::Agent/index.html.twig", 16)->display($context);
                // line 17
                echo "                        </div><!-- /.col-* -->
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
            // line 19
            echo "                </div><!-- /.row -->

                <div class=\"navigation\">
                    ";
            // line 22
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["listings"] ?? null));
            echo "
                </div><!-- /.navigation -->
            ";
        } else {
            // line 25
            echo "                ";
            $this->loadTemplate("AppBundle::Helper/empty.html.twig", "FrontBundle::Agent/index.html.twig", 25)->display($context);
            // line 26
            echo "            ";
        }
        // line 27
        echo "        </div><!-- /.content -->
    </div><!-- /.container -->
";
    }

    public function getTemplateName()
    {
        return "FrontBundle::Agent/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 27,  106 => 26,  103 => 25,  97 => 22,  92 => 19,  77 => 17,  75 => 16,  72 => 15,  55 => 14,  52 => 13,  50 => 12,  46 => 10,  44 => 9,  41 => 8,  38 => 7,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle::Agent/index.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Agent/index.html.twig");
    }
}
