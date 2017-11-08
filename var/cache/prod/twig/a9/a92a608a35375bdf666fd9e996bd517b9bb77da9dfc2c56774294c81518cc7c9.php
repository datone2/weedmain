<?php

/* FrontBundle::Post/index.html.twig */
class __TwigTemplate_e3a09fcd43e5e2a7548f46a9b81e0b01c19153d42ac2c26b6e0343b40805af4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::Layout/base.html.twig", "FrontBundle::Post/index.html.twig", 1);
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
        $context["menu_active"] = "posts";
        // line 5
        $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Blog Posts");
        // line 7
        $context["breadcrumbs"] = array(0 => array("link" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home")), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Posts")));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        echo "\t    
\t<div class=\"container\">
\t\t<div class=\"content\">
\t\t\t";
        // line 21
        $this->loadTemplate("FrontBundle::Helper/content_title.html.twig", "FrontBundle::Post/index.html.twig", 21)->display($context);
        // line 22
        echo "\t\t\t
\t\t\t";
        // line 23
        if (twig_length_filter($this->env, ($context["posts"] ?? null))) {
            // line 24
            echo "\t\t\t\t";
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
                // line 25
                echo "\t\t\t\t\t";
                $this->loadTemplate("FrontBundle::Post/row.html.twig", "FrontBundle::Post/index.html.twig", 25)->display($context);
                // line 26
                echo "\t\t\t\t";
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
            // line 27
            echo "\t\t\t";
        } else {
            // line 28
            echo "\t\t\t\t";
            $this->loadTemplate("AppBundle::Helper/empty.html.twig ", "FrontBundle::Post/index.html.twig", 28)->display($context);
            // line 29
            echo "\t\t\t";
        }
        // line 30
        echo "\t\t</div><!-- /.content -->
\t</div><!-- /.container -->
";
    }

    public function getTemplateName()
    {
        return "FrontBundle::Post/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 30,  97 => 29,  94 => 28,  91 => 27,  77 => 26,  74 => 25,  56 => 24,  54 => 23,  51 => 22,  49 => 21,  42 => 18,  36 => 16,  32 => 1,  30 => 7,  28 => 5,  26 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle::Post/index.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Post/index.html.twig");
    }
}
