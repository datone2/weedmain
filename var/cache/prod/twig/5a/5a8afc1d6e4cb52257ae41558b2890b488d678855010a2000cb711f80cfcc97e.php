<?php

/* @VichUploader/Form/fields.html.twig */
class __TwigTemplate_c0aec3f5c374b54ed302891a081314c4cf0e49bc7fe4f534396863c93eaefdd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'vich_file_row' => array($this, 'block_vich_file_row'),
            'vich_file_widget' => array($this, 'block_vich_file_widget'),
            'vich_image_row' => array($this, 'block_vich_image_row'),
            'vich_image_widget' => array($this, 'block_vich_image_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('vich_image_widget', $context, $blocks);
    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        ob_start();
        // line 8
        echo "        <div class=\"vich-file\">
            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "file", array()), 'widget');
        echo "
            ";
        // line 10
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 11
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "delete", array()), 'row');
            echo "
            ";
        }
        // line 13
        echo "
            ";
        // line 14
        if (($context["download_uri"] ?? null)) {
            // line 15
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? (($context["download_label"] ?? null)) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["download_label"] ?? null), array(), ($context["translation_domain"] ?? null)))), "html", null, true);
            echo "</a>
            ";
        }
        // line 17
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        <div class=\"vich-image\">
            ";
        // line 29
        if ( !($context["image_uri"] ?? null)) {
            // line 30
            echo "                <div class=\"vich-placeholder\">
                    ";
            // line 31
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "file", array()), 'widget');
            echo "

                    <div class=\"vich-placeholder-label\">";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select File"), "html", null, true);
            echo "</div>
                </div>
            ";
        }
        // line 36
        echo "
            ";
        // line 37
        if (($context["image_uri"] ?? null)) {
            // line 38
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, ($context["image_uri"] ?? null), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, ($context["image_uri"] ?? null), "html", null, true);
            echo "\" alt=\"\" /></a>
            ";
        }
        // line 40
        echo "
            ";
        // line 41
        if (($context["download_uri"] ?? null)) {
            // line 42
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? (($context["download_label"] ?? null)) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["download_label"] ?? null), array(), ($context["translation_domain"] ?? null)))), "html", null, true);
            echo "</a>
            ";
        }
        // line 44
        echo "
            ";
        // line 45
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 46
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "delete", array()), 'row');
            echo "
            ";
        }
        // line 48
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "@VichUploader/Form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  162 => 48,  156 => 46,  154 => 45,  151 => 44,  143 => 42,  141 => 41,  138 => 40,  130 => 38,  128 => 37,  125 => 36,  119 => 33,  114 => 31,  111 => 30,  109 => 29,  106 => 28,  103 => 27,  100 => 26,  96 => 23,  94 => 22,  91 => 21,  85 => 17,  77 => 15,  75 => 14,  72 => 13,  66 => 11,  64 => 10,  60 => 9,  57 => 8,  54 => 7,  51 => 6,  47 => 3,  45 => 2,  42 => 1,  38 => 26,  35 => 25,  33 => 21,  30 => 20,  28 => 6,  25 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@VichUploader/Form/fields.html.twig", "/home/weedmain/dispensary.weedmain.com/app/Resources/VichUploaderBundle/views/Form/fields.html.twig");
    }
}
