<?php

/* AppBundle:Form:bootstrap.html.twig */
class __TwigTemplate_8a7f76c3687e9bed9b2f25ca003bda68e75fb547d133522620458f5f3d967d4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "AppBundle:Form:bootstrap.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1db4a6929821121ab5225a7e9996617147b62254075251d12ae768a5cb9cc004 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1db4a6929821121ab5225a7e9996617147b62254075251d12ae768a5cb9cc004->enter($__internal_1db4a6929821121ab5225a7e9996617147b62254075251d12ae768a5cb9cc004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Form:bootstrap.html.twig"));

        $__internal_cfabdfab00e37d9081119bc5785802e8c9ab2962e8d77ded332b5e39ea92e9ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfabdfab00e37d9081119bc5785802e8c9ab2962e8d77ded332b5e39ea92e9ec->enter($__internal_cfabdfab00e37d9081119bc5785802e8c9ab2962e8d77ded332b5e39ea92e9ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Form:bootstrap.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('button_widget', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('money_widget', $context, $blocks);
        // line 35
        echo "
";
        // line 36
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 42
        echo "
";
        // line 43
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('date_widget', $context, $blocks);
        // line 75
        echo "
";
        // line 76
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        echo "
";
        // line 91
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 95
        echo "
";
        // line 96
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 115
        echo "
";
        // line 116
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 127
        echo "
";
        // line 128
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 138
        echo "
";
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('form_label', $context, $blocks);
        // line 145
        echo "
";
        // line 146
        $this->displayBlock('choice_label', $context, $blocks);
        // line 151
        echo "
";
        // line 152
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 155
        echo "
";
        // line 156
        $this->displayBlock('radio_label', $context, $blocks);
        // line 159
        echo "
";
        // line 160
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 184
        echo "
";
        // line 186
        echo "
";
        // line 187
        $this->displayBlock('form_row', $context, $blocks);
        // line 194
        echo "
";
        // line 195
        $this->displayBlock('button_row', $context, $blocks);
        // line 200
        echo "
";
        // line 201
        $this->displayBlock('choice_row', $context, $blocks);
        // line 205
        echo "
";
        // line 206
        $this->displayBlock('date_row', $context, $blocks);
        // line 210
        echo "
";
        // line 211
        $this->displayBlock('time_row', $context, $blocks);
        // line 215
        echo "
";
        // line 216
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 220
        echo "
";
        // line 221
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 227
        echo "
";
        // line 228
        $this->displayBlock('radio_row', $context, $blocks);
        // line 234
        echo "
";
        // line 236
        echo "
";
        // line 237
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_1db4a6929821121ab5225a7e9996617147b62254075251d12ae768a5cb9cc004->leave($__internal_1db4a6929821121ab5225a7e9996617147b62254075251d12ae768a5cb9cc004_prof);

        
        $__internal_cfabdfab00e37d9081119bc5785802e8c9ab2962e8d77ded332b5e39ea92e9ec->leave($__internal_cfabdfab00e37d9081119bc5785802e8c9ab2962e8d77ded332b5e39ea92e9ec_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_24a685f13228f920c5914b713836e7e86aede59673c87f8077b81d005fb77343 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24a685f13228f920c5914b713836e7e86aede59673c87f8077b81d005fb77343->enter($__internal_24a685f13228f920c5914b713836e7e86aede59673c87f8077b81d005fb77343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_2901ae4a2beb40b46b8747c3cad2ea2fa7cd92bb38ca906d00a76ce3fbbcf61e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2901ae4a2beb40b46b8747c3cad2ea2fa7cd92bb38ca906d00a76ce3fbbcf61e->enter($__internal_2901ae4a2beb40b46b8747c3cad2ea2fa7cd92bb38ca906d00a76ce3fbbcf61e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_2901ae4a2beb40b46b8747c3cad2ea2fa7cd92bb38ca906d00a76ce3fbbcf61e->leave($__internal_2901ae4a2beb40b46b8747c3cad2ea2fa7cd92bb38ca906d00a76ce3fbbcf61e_prof);

        
        $__internal_24a685f13228f920c5914b713836e7e86aede59673c87f8077b81d005fb77343->leave($__internal_24a685f13228f920c5914b713836e7e86aede59673c87f8077b81d005fb77343_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_1dd3ae8d6205b9270869fea5e725ac67f0c8739e6b7bbe14982744ca34370aaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dd3ae8d6205b9270869fea5e725ac67f0c8739e6b7bbe14982744ca34370aaf->enter($__internal_1dd3ae8d6205b9270869fea5e725ac67f0c8739e6b7bbe14982744ca34370aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_ffc7a9c226e08fd358f1c0d19bf950cb0b87c9960ad48e4a36b6e98a78c0460f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffc7a9c226e08fd358f1c0d19bf950cb0b87c9960ad48e4a36b6e98a78c0460f->enter($__internal_ffc7a9c226e08fd358f1c0d19bf950cb0b87c9960ad48e4a36b6e98a78c0460f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 14, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 15
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_ffc7a9c226e08fd358f1c0d19bf950cb0b87c9960ad48e4a36b6e98a78c0460f->leave($__internal_ffc7a9c226e08fd358f1c0d19bf950cb0b87c9960ad48e4a36b6e98a78c0460f_prof);

        
        $__internal_1dd3ae8d6205b9270869fea5e725ac67f0c8739e6b7bbe14982744ca34370aaf->leave($__internal_1dd3ae8d6205b9270869fea5e725ac67f0c8739e6b7bbe14982744ca34370aaf_prof);

    }

    // line 18
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_f9d74944b4e357c05b953f05718bca7eda3f359fda2e575028e8a42c4684171c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9d74944b4e357c05b953f05718bca7eda3f359fda2e575028e8a42c4684171c->enter($__internal_f9d74944b4e357c05b953f05718bca7eda3f359fda2e575028e8a42c4684171c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_e56a21d1656a150990a41e22e9f0b3fe30b714c86098d7d8d6327ff0b024e3fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e56a21d1656a150990a41e22e9f0b3fe30b714c86098d7d8d6327ff0b024e3fb->enter($__internal_e56a21d1656a150990a41e22e9f0b3fe30b714c86098d7d8d6327ff0b024e3fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 19
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 19, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 20
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_e56a21d1656a150990a41e22e9f0b3fe30b714c86098d7d8d6327ff0b024e3fb->leave($__internal_e56a21d1656a150990a41e22e9f0b3fe30b714c86098d7d8d6327ff0b024e3fb_prof);

        
        $__internal_f9d74944b4e357c05b953f05718bca7eda3f359fda2e575028e8a42c4684171c->leave($__internal_f9d74944b4e357c05b953f05718bca7eda3f359fda2e575028e8a42c4684171c_prof);

    }

    // line 23
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_d33449c47c25481ed0ea40565156245d65ae83dde5997d6dab4279ddc692373c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d33449c47c25481ed0ea40565156245d65ae83dde5997d6dab4279ddc692373c->enter($__internal_d33449c47c25481ed0ea40565156245d65ae83dde5997d6dab4279ddc692373c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_b9392c31e49542212ecffe8b4cb6a07cc305c144db39c8bf36fda1f56f3cf5fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9392c31e49542212ecffe8b4cb6a07cc305c144db39c8bf36fda1f56f3cf5fa->enter($__internal_b9392c31e49542212ecffe8b4cb6a07cc305c144db39c8bf36fda1f56f3cf5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 24
        echo "<div class=\"input-group\">
        ";
        // line 25
        $context["append"] = (is_string($__internal_f977e45abcbe0664a80e7054b0caa48c47faab1e2000380a2c55e07ceb3e2def = (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 25, $this->getSourceContext()); })())) && is_string($__internal_b7b19b8d7cb0d4421af2137cc55a78842f528c1583dc4eac2669fb59287e667e = "{{") && ('' === $__internal_b7b19b8d7cb0d4421af2137cc55a78842f528c1583dc4eac2669fb59287e667e || 0 === strpos($__internal_f977e45abcbe0664a80e7054b0caa48c47faab1e2000380a2c55e07ceb3e2def, $__internal_b7b19b8d7cb0d4421af2137cc55a78842f528c1583dc4eac2669fb59287e667e)));
        // line 26
        echo "        ";
        if ( !(isset($context["append"]) || array_key_exists("append", $context) ? $context["append"] : (function () { throw new Twig_Error_Runtime('Variable "append" does not exist.', 26, $this->getSourceContext()); })())) {
            // line 27
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 27, $this->getSourceContext()); })()), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 29
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 30
        if ((isset($context["append"]) || array_key_exists("append", $context) ? $context["append"] : (function () { throw new Twig_Error_Runtime('Variable "append" does not exist.', 30, $this->getSourceContext()); })())) {
            // line 31
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 31, $this->getSourceContext()); })()), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 33
        echo "    </div>";
        
        $__internal_b9392c31e49542212ecffe8b4cb6a07cc305c144db39c8bf36fda1f56f3cf5fa->leave($__internal_b9392c31e49542212ecffe8b4cb6a07cc305c144db39c8bf36fda1f56f3cf5fa_prof);

        
        $__internal_d33449c47c25481ed0ea40565156245d65ae83dde5997d6dab4279ddc692373c->leave($__internal_d33449c47c25481ed0ea40565156245d65ae83dde5997d6dab4279ddc692373c_prof);

    }

    // line 36
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_eb994d0fdc6864cfa7b19ba19becbe446d9363849c09d26a5ea2ad7b984bd220 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb994d0fdc6864cfa7b19ba19becbe446d9363849c09d26a5ea2ad7b984bd220->enter($__internal_eb994d0fdc6864cfa7b19ba19becbe446d9363849c09d26a5ea2ad7b984bd220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_d618912ba26a80d93d060ea528b4d3d46ff98c71098ea50a437d266acb5d7fcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d618912ba26a80d93d060ea528b4d3d46ff98c71098ea50a437d266acb5d7fcb->enter($__internal_d618912ba26a80d93d060ea528b4d3d46ff98c71098ea50a437d266acb5d7fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 37
        echo "<div class=\"input-group\">";
        // line 38
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 39
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_d618912ba26a80d93d060ea528b4d3d46ff98c71098ea50a437d266acb5d7fcb->leave($__internal_d618912ba26a80d93d060ea528b4d3d46ff98c71098ea50a437d266acb5d7fcb_prof);

        
        $__internal_eb994d0fdc6864cfa7b19ba19becbe446d9363849c09d26a5ea2ad7b984bd220->leave($__internal_eb994d0fdc6864cfa7b19ba19becbe446d9363849c09d26a5ea2ad7b984bd220_prof);

    }

    // line 43
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_41b8b09991f2b9fce552dab22dbd569472504574d506b9867f257539482382a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41b8b09991f2b9fce552dab22dbd569472504574d506b9867f257539482382a2->enter($__internal_41b8b09991f2b9fce552dab22dbd569472504574d506b9867f257539482382a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_79bc6fbe737e210790b9176ce19a5f4d6c28df005e6e32cc47facb817ae9f3c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79bc6fbe737e210790b9176ce19a5f4d6c28df005e6e32cc47facb817ae9f3c7->enter($__internal_79bc6fbe737e210790b9176ce19a5f4d6c28df005e6e32cc47facb817ae9f3c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 44
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 44, $this->getSourceContext()); })()) == "single_text")) {
            // line 45
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 47
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 47, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 48
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 49, $this->getSourceContext()); })()), "date", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), "time", array()), 'errors');
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->getSourceContext()); })()), "date", array()), 'widget', array("datetime" => true));
            // line 52
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 52, $this->getSourceContext()); })()), "time", array()), 'widget', array("datetime" => true));
            // line 53
            echo "</div>";
        }
        
        $__internal_79bc6fbe737e210790b9176ce19a5f4d6c28df005e6e32cc47facb817ae9f3c7->leave($__internal_79bc6fbe737e210790b9176ce19a5f4d6c28df005e6e32cc47facb817ae9f3c7_prof);

        
        $__internal_41b8b09991f2b9fce552dab22dbd569472504574d506b9867f257539482382a2->leave($__internal_41b8b09991f2b9fce552dab22dbd569472504574d506b9867f257539482382a2_prof);

    }

    // line 57
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_c9beb25d51a2d1fe0bef46b3b70dd91a739613a18eba567189c1d653ccd9810a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9beb25d51a2d1fe0bef46b3b70dd91a739613a18eba567189c1d653ccd9810a->enter($__internal_c9beb25d51a2d1fe0bef46b3b70dd91a739613a18eba567189c1d653ccd9810a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_dcbe65d0019f14bcdf0874010b793e05235e19a61e067682d068949b8f6fdd1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcbe65d0019f14bcdf0874010b793e05235e19a61e067682d068949b8f6fdd1e->enter($__internal_dcbe65d0019f14bcdf0874010b793e05235e19a61e067682d068949b8f6fdd1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 58
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 58, $this->getSourceContext()); })()) == "single_text")) {
            // line 59
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 61
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 61, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 62
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 62, $this->getSourceContext()); })()))) {
                // line 63
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 65
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "date_pattern" does not exist.', 65, $this->getSourceContext()); })()), array("{{ year }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 66, $this->getSourceContext()); })()), "year", array()), 'widget'), "{{ month }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 67, $this->getSourceContext()); })()), "month", array()), 'widget'), "{{ day }}" =>             // line 68
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 68, $this->getSourceContext()); })()), "day", array()), 'widget')));
            // line 70
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 70, $this->getSourceContext()); })()))) {
                // line 71
                echo "</div>";
            }
        }
        
        $__internal_dcbe65d0019f14bcdf0874010b793e05235e19a61e067682d068949b8f6fdd1e->leave($__internal_dcbe65d0019f14bcdf0874010b793e05235e19a61e067682d068949b8f6fdd1e_prof);

        
        $__internal_c9beb25d51a2d1fe0bef46b3b70dd91a739613a18eba567189c1d653ccd9810a->leave($__internal_c9beb25d51a2d1fe0bef46b3b70dd91a739613a18eba567189c1d653ccd9810a_prof);

    }

    // line 76
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_ec8fa935187af59de79240703116c4da8302cd98aca2929a5b1e78d00ca5a5f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec8fa935187af59de79240703116c4da8302cd98aca2929a5b1e78d00ca5a5f1->enter($__internal_ec8fa935187af59de79240703116c4da8302cd98aca2929a5b1e78d00ca5a5f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_e5574e71facf16a46e1b806cbc90d83b50a1dc9f7dc805763532fc71338067cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5574e71facf16a46e1b806cbc90d83b50a1dc9f7dc805763532fc71338067cb->enter($__internal_e5574e71facf16a46e1b806cbc90d83b50a1dc9f7dc805763532fc71338067cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 77
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 77, $this->getSourceContext()); })()) == "single_text")) {
            // line 78
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 80
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 80, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 81
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 81, $this->getSourceContext()); })())))) {
                // line 82
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 84
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 84, $this->getSourceContext()); })()), "hour", array()), 'widget');
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 84, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 84, $this->getSourceContext()); })()), "minute", array()), 'widget');
            }
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 84, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 84, $this->getSourceContext()); })()), "second", array()), 'widget');
            }
            // line 85
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 85, $this->getSourceContext()); })())))) {
                // line 86
                echo "</div>";
            }
        }
        
        $__internal_e5574e71facf16a46e1b806cbc90d83b50a1dc9f7dc805763532fc71338067cb->leave($__internal_e5574e71facf16a46e1b806cbc90d83b50a1dc9f7dc805763532fc71338067cb_prof);

        
        $__internal_ec8fa935187af59de79240703116c4da8302cd98aca2929a5b1e78d00ca5a5f1->leave($__internal_ec8fa935187af59de79240703116c4da8302cd98aca2929a5b1e78d00ca5a5f1_prof);

    }

    // line 91
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_e9a3ec99c1298698a3df23fccea79c622a8f376212337023cd5f8f3b110a0b33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9a3ec99c1298698a3df23fccea79c622a8f376212337023cd5f8f3b110a0b33->enter($__internal_e9a3ec99c1298698a3df23fccea79c622a8f376212337023cd5f8f3b110a0b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_cf8a673e8ebed1267d7a6c87ac0e8329b824a189ee90a4ff274fbfc064043dc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf8a673e8ebed1267d7a6c87ac0e8329b824a189ee90a4ff274fbfc064043dc8->enter($__internal_cf8a673e8ebed1267d7a6c87ac0e8329b824a189ee90a4ff274fbfc064043dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 92
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 92, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 93
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_cf8a673e8ebed1267d7a6c87ac0e8329b824a189ee90a4ff274fbfc064043dc8->leave($__internal_cf8a673e8ebed1267d7a6c87ac0e8329b824a189ee90a4ff274fbfc064043dc8_prof);

        
        $__internal_e9a3ec99c1298698a3df23fccea79c622a8f376212337023cd5f8f3b110a0b33->leave($__internal_e9a3ec99c1298698a3df23fccea79c622a8f376212337023cd5f8f3b110a0b33_prof);

    }

    // line 96
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_44d7e7397fb5336b50bd25e67896e2d54fb6685f88fe72427841714a8a164209 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44d7e7397fb5336b50bd25e67896e2d54fb6685f88fe72427841714a8a164209->enter($__internal_44d7e7397fb5336b50bd25e67896e2d54fb6685f88fe72427841714a8a164209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_aa1e43cdfb537e8895cf9a20fce2e73c97a74d134330547fd67dff12f6be9069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa1e43cdfb537e8895cf9a20fce2e73c97a74d134330547fd67dff12f6be9069->enter($__internal_aa1e43cdfb537e8895cf9a20fce2e73c97a74d134330547fd67dff12f6be9069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 97
        if (twig_in_filter("-inline", ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 98, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 99
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 100
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 101
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 101, $this->getSourceContext()); })())));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 105
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 106, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 107
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 108
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 109
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 109, $this->getSourceContext()); })())));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "</div>";
        }
        
        $__internal_aa1e43cdfb537e8895cf9a20fce2e73c97a74d134330547fd67dff12f6be9069->leave($__internal_aa1e43cdfb537e8895cf9a20fce2e73c97a74d134330547fd67dff12f6be9069_prof);

        
        $__internal_44d7e7397fb5336b50bd25e67896e2d54fb6685f88fe72427841714a8a164209->leave($__internal_44d7e7397fb5336b50bd25e67896e2d54fb6685f88fe72427841714a8a164209_prof);

    }

    // line 116
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_410771d291b4a5499f256008393c09fbff1543521e47129433f3f91dd7dd5701 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_410771d291b4a5499f256008393c09fbff1543521e47129433f3f91dd7dd5701->enter($__internal_410771d291b4a5499f256008393c09fbff1543521e47129433f3f91dd7dd5701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_248105aa99d5206a041012200e2968f63eca3f9239474f5ae2ef0c309cd90d55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_248105aa99d5206a041012200e2968f63eca3f9239474f5ae2ef0c309cd90d55->enter($__internal_248105aa99d5206a041012200e2968f63eca3f9239474f5ae2ef0c309cd90d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 117
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 117, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 119
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 119, $this->getSourceContext()); })()))) {
            // line 120
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 120, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 123
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 123, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks), "label_attr" => array("class" => "form-check-label")));
        }
        
        $__internal_248105aa99d5206a041012200e2968f63eca3f9239474f5ae2ef0c309cd90d55->leave($__internal_248105aa99d5206a041012200e2968f63eca3f9239474f5ae2ef0c309cd90d55_prof);

        
        $__internal_410771d291b4a5499f256008393c09fbff1543521e47129433f3f91dd7dd5701->leave($__internal_410771d291b4a5499f256008393c09fbff1543521e47129433f3f91dd7dd5701_prof);

    }

    // line 128
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_713c85556618c0324ce36da752a635a1c54872fbf31f41c90d0b3af8195a8ad9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_713c85556618c0324ce36da752a635a1c54872fbf31f41c90d0b3af8195a8ad9->enter($__internal_713c85556618c0324ce36da752a635a1c54872fbf31f41c90d0b3af8195a8ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_374c184750aa6c263887d4b7841ed34ee35ac52748461f91db759059b3ccae9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_374c184750aa6c263887d4b7841ed34ee35ac52748461f91db759059b3ccae9f->enter($__internal_374c184750aa6c263887d4b7841ed34ee35ac52748461f91db759059b3ccae9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 129
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 129, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 130
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 130, $this->getSourceContext()); })()))) {
            // line 131
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 131, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 133
            echo "<div class=\"radio\">";
            // line 134
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 134, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 135
            echo "</div>";
        }
        
        $__internal_374c184750aa6c263887d4b7841ed34ee35ac52748461f91db759059b3ccae9f->leave($__internal_374c184750aa6c263887d4b7841ed34ee35ac52748461f91db759059b3ccae9f_prof);

        
        $__internal_713c85556618c0324ce36da752a635a1c54872fbf31f41c90d0b3af8195a8ad9->leave($__internal_713c85556618c0324ce36da752a635a1c54872fbf31f41c90d0b3af8195a8ad9_prof);

    }

    // line 141
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_0675faf12b06eccf890aa2bba8d237b9ea51c7343473f75b77cf7cb743587047 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0675faf12b06eccf890aa2bba8d237b9ea51c7343473f75b77cf7cb743587047->enter($__internal_0675faf12b06eccf890aa2bba8d237b9ea51c7343473f75b77cf7cb743587047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_c98521b3f2609009a45adb6d581fff4211c9f5b31b0205edb9728df767300c8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c98521b3f2609009a45adb6d581fff4211c9f5b31b0205edb9728df767300c8a->enter($__internal_c98521b3f2609009a45adb6d581fff4211c9f5b31b0205edb9728df767300c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 142
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 142, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 143
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_c98521b3f2609009a45adb6d581fff4211c9f5b31b0205edb9728df767300c8a->leave($__internal_c98521b3f2609009a45adb6d581fff4211c9f5b31b0205edb9728df767300c8a_prof);

        
        $__internal_0675faf12b06eccf890aa2bba8d237b9ea51c7343473f75b77cf7cb743587047->leave($__internal_0675faf12b06eccf890aa2bba8d237b9ea51c7343473f75b77cf7cb743587047_prof);

    }

    // line 146
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_a161fb9740a1b4cde1569bec45936d209b4cfc7903a45c8592cad7d5c91fdeca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a161fb9740a1b4cde1569bec45936d209b4cfc7903a45c8592cad7d5c91fdeca->enter($__internal_a161fb9740a1b4cde1569bec45936d209b4cfc7903a45c8592cad7d5c91fdeca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_49d19b4abd8471b516a97a48010edbfb8b9fea92ff5b87ab55909ce51933bdd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49d19b4abd8471b516a97a48010edbfb8b9fea92ff5b87ab55909ce51933bdd0->enter($__internal_49d19b4abd8471b516a97a48010edbfb8b9fea92ff5b87ab55909ce51933bdd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 148
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 148, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 149
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_49d19b4abd8471b516a97a48010edbfb8b9fea92ff5b87ab55909ce51933bdd0->leave($__internal_49d19b4abd8471b516a97a48010edbfb8b9fea92ff5b87ab55909ce51933bdd0_prof);

        
        $__internal_a161fb9740a1b4cde1569bec45936d209b4cfc7903a45c8592cad7d5c91fdeca->leave($__internal_a161fb9740a1b4cde1569bec45936d209b4cfc7903a45c8592cad7d5c91fdeca_prof);

    }

    // line 152
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_0795f3f27df235c0faf613ca107c62493af4cfd0369db194a0033c8f9fcaa8f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0795f3f27df235c0faf613ca107c62493af4cfd0369db194a0033c8f9fcaa8f1->enter($__internal_0795f3f27df235c0faf613ca107c62493af4cfd0369db194a0033c8f9fcaa8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_2f8f56db76cb54e876bf83a421a9e8a73740c567a77292c42abb564d75716c2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f8f56db76cb54e876bf83a421a9e8a73740c567a77292c42abb564d75716c2d->enter($__internal_2f8f56db76cb54e876bf83a421a9e8a73740c567a77292c42abb564d75716c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 153
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_2f8f56db76cb54e876bf83a421a9e8a73740c567a77292c42abb564d75716c2d->leave($__internal_2f8f56db76cb54e876bf83a421a9e8a73740c567a77292c42abb564d75716c2d_prof);

        
        $__internal_0795f3f27df235c0faf613ca107c62493af4cfd0369db194a0033c8f9fcaa8f1->leave($__internal_0795f3f27df235c0faf613ca107c62493af4cfd0369db194a0033c8f9fcaa8f1_prof);

    }

    // line 156
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_02b502786ae21d069e18df1569069b887ef1e73f6718bb83ec856f304ff2e7e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02b502786ae21d069e18df1569069b887ef1e73f6718bb83ec856f304ff2e7e0->enter($__internal_02b502786ae21d069e18df1569069b887ef1e73f6718bb83ec856f304ff2e7e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_bce2af794d497f4fd1615cf6782f676bd49796938dfffcb0c778a5e312812f0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bce2af794d497f4fd1615cf6782f676bd49796938dfffcb0c778a5e312812f0f->enter($__internal_bce2af794d497f4fd1615cf6782f676bd49796938dfffcb0c778a5e312812f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 157
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_bce2af794d497f4fd1615cf6782f676bd49796938dfffcb0c778a5e312812f0f->leave($__internal_bce2af794d497f4fd1615cf6782f676bd49796938dfffcb0c778a5e312812f0f_prof);

        
        $__internal_02b502786ae21d069e18df1569069b887ef1e73f6718bb83ec856f304ff2e7e0->leave($__internal_02b502786ae21d069e18df1569069b887ef1e73f6718bb83ec856f304ff2e7e0_prof);

    }

    // line 160
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_bd1368b3e011d936e69811c7e85dd02fb5e54386b3c19b05f7034ca8f0e16f06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd1368b3e011d936e69811c7e85dd02fb5e54386b3c19b05f7034ca8f0e16f06->enter($__internal_bd1368b3e011d936e69811c7e85dd02fb5e54386b3c19b05f7034ca8f0e16f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_935a974c3240b80f959db202b3a8ae0f000cf14937c012fda0f52dbc45fb76ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_935a974c3240b80f959db202b3a8ae0f000cf14937c012fda0f52dbc45fb76ad->enter($__internal_935a974c3240b80f959db202b3a8ae0f000cf14937c012fda0f52dbc45fb76ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 161
        echo "    ";
        // line 162
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 163
            echo "        ";
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 163, $this->getSourceContext()); })())) {
                // line 164
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 164, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 165
                echo "        ";
            }
            // line 166
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 167
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 167, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 167, $this->getSourceContext()); })())))));
                // line 168
                echo "        ";
            }
            // line 169
            echo "        ";
            if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 169, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 169, $this->getSourceContext()); })())))) {
                // line 170
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 170, $this->getSourceContext()); })()))) {
                    // line 171
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 171, $this->getSourceContext()); })()), array("%name%" =>                     // line 172
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 172, $this->getSourceContext()); })()), "%id%" =>                     // line 173
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 173, $this->getSourceContext()); })())));
                } else {
                    // line 176
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 176, $this->getSourceContext()); })()));
                }
            }
            // line 179
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 179, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 180
            echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 180, $this->getSourceContext()); })());
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 180, $this->getSourceContext()); })()) === false)) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 180, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 180, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 180, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 180, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            // line 181
            echo "</label>
    ";
        }
        
        $__internal_935a974c3240b80f959db202b3a8ae0f000cf14937c012fda0f52dbc45fb76ad->leave($__internal_935a974c3240b80f959db202b3a8ae0f000cf14937c012fda0f52dbc45fb76ad_prof);

        
        $__internal_bd1368b3e011d936e69811c7e85dd02fb5e54386b3c19b05f7034ca8f0e16f06->leave($__internal_bd1368b3e011d936e69811c7e85dd02fb5e54386b3c19b05f7034ca8f0e16f06_prof);

    }

    // line 187
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_a6848bb26137b68b593557e02e3becd2e8de20a93ef23e4682e0e99d99d89d6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6848bb26137b68b593557e02e3becd2e8de20a93ef23e4682e0e99d99d89d6a->enter($__internal_a6848bb26137b68b593557e02e3becd2e8de20a93ef23e4682e0e99d99d89d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_c139aa13115ce295c80b6f651cd2a34fa9ea181696d9936b428800c6203ae1c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c139aa13115ce295c80b6f651cd2a34fa9ea181696d9936b428800c6203ae1c4->enter($__internal_c139aa13115ce295c80b6f651cd2a34fa9ea181696d9936b428800c6203ae1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 188
        echo "<div class=\"form-group ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 188, $this->getSourceContext()); })()), "vars", array()), "name", array()), "html", null, true);
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 188, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 188, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 188, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 189
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 189, $this->getSourceContext()); })()), 'label');
        // line 190
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 190, $this->getSourceContext()); })()), 'widget');
        // line 191
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 191, $this->getSourceContext()); })()), 'errors');
        // line 192
        echo "</div>";
        
        $__internal_c139aa13115ce295c80b6f651cd2a34fa9ea181696d9936b428800c6203ae1c4->leave($__internal_c139aa13115ce295c80b6f651cd2a34fa9ea181696d9936b428800c6203ae1c4_prof);

        
        $__internal_a6848bb26137b68b593557e02e3becd2e8de20a93ef23e4682e0e99d99d89d6a->leave($__internal_a6848bb26137b68b593557e02e3becd2e8de20a93ef23e4682e0e99d99d89d6a_prof);

    }

    // line 195
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_0e11c73540d051f86715d303daf2092282f0ab472e8224c25fe07370f93846a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e11c73540d051f86715d303daf2092282f0ab472e8224c25fe07370f93846a2->enter($__internal_0e11c73540d051f86715d303daf2092282f0ab472e8224c25fe07370f93846a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_d9b585fb9ed352289922e6d4c308233406a9491f6c82404f13a63f373fe80492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9b585fb9ed352289922e6d4c308233406a9491f6c82404f13a63f373fe80492->enter($__internal_d9b585fb9ed352289922e6d4c308233406a9491f6c82404f13a63f373fe80492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 196
        echo "<div class=\"form-group button\">";
        // line 197
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 197, $this->getSourceContext()); })()), 'widget');
        // line 198
        echo "</div>";
        
        $__internal_d9b585fb9ed352289922e6d4c308233406a9491f6c82404f13a63f373fe80492->leave($__internal_d9b585fb9ed352289922e6d4c308233406a9491f6c82404f13a63f373fe80492_prof);

        
        $__internal_0e11c73540d051f86715d303daf2092282f0ab472e8224c25fe07370f93846a2->leave($__internal_0e11c73540d051f86715d303daf2092282f0ab472e8224c25fe07370f93846a2_prof);

    }

    // line 201
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_d752408e7aff45c2637032701048ad0804f5e17965109cfcd93e54cb89127591 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d752408e7aff45c2637032701048ad0804f5e17965109cfcd93e54cb89127591->enter($__internal_d752408e7aff45c2637032701048ad0804f5e17965109cfcd93e54cb89127591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_f551240aa7eb38d3b2007125076031e572a8cce2c836c64442506b9770583abc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f551240aa7eb38d3b2007125076031e572a8cce2c836c64442506b9770583abc->enter($__internal_f551240aa7eb38d3b2007125076031e572a8cce2c836c64442506b9770583abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 202
        $context["force_error"] = true;
        // line 203
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f551240aa7eb38d3b2007125076031e572a8cce2c836c64442506b9770583abc->leave($__internal_f551240aa7eb38d3b2007125076031e572a8cce2c836c64442506b9770583abc_prof);

        
        $__internal_d752408e7aff45c2637032701048ad0804f5e17965109cfcd93e54cb89127591->leave($__internal_d752408e7aff45c2637032701048ad0804f5e17965109cfcd93e54cb89127591_prof);

    }

    // line 206
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_e10143455a1da7fb868e52901f9de26a99c8f9b0f21b28b891a3c68abe7bb269 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e10143455a1da7fb868e52901f9de26a99c8f9b0f21b28b891a3c68abe7bb269->enter($__internal_e10143455a1da7fb868e52901f9de26a99c8f9b0f21b28b891a3c68abe7bb269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_63ceefab99949dc5dc719f5052ab1b6cd4e32dcc98bacd641fbbc8f1068f6ae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63ceefab99949dc5dc719f5052ab1b6cd4e32dcc98bacd641fbbc8f1068f6ae4->enter($__internal_63ceefab99949dc5dc719f5052ab1b6cd4e32dcc98bacd641fbbc8f1068f6ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 207
        $context["force_error"] = true;
        // line 208
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_63ceefab99949dc5dc719f5052ab1b6cd4e32dcc98bacd641fbbc8f1068f6ae4->leave($__internal_63ceefab99949dc5dc719f5052ab1b6cd4e32dcc98bacd641fbbc8f1068f6ae4_prof);

        
        $__internal_e10143455a1da7fb868e52901f9de26a99c8f9b0f21b28b891a3c68abe7bb269->leave($__internal_e10143455a1da7fb868e52901f9de26a99c8f9b0f21b28b891a3c68abe7bb269_prof);

    }

    // line 211
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_d9ac7c27e85576a71b01adccf03d751c106542a25a323d4b92b96e632f871eaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9ac7c27e85576a71b01adccf03d751c106542a25a323d4b92b96e632f871eaf->enter($__internal_d9ac7c27e85576a71b01adccf03d751c106542a25a323d4b92b96e632f871eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_6702844cc1de457b4ac6b1f317ac3283d98ec3dd61cdcfb4641d0cf399d625ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6702844cc1de457b4ac6b1f317ac3283d98ec3dd61cdcfb4641d0cf399d625ba->enter($__internal_6702844cc1de457b4ac6b1f317ac3283d98ec3dd61cdcfb4641d0cf399d625ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 212
        $context["force_error"] = true;
        // line 213
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6702844cc1de457b4ac6b1f317ac3283d98ec3dd61cdcfb4641d0cf399d625ba->leave($__internal_6702844cc1de457b4ac6b1f317ac3283d98ec3dd61cdcfb4641d0cf399d625ba_prof);

        
        $__internal_d9ac7c27e85576a71b01adccf03d751c106542a25a323d4b92b96e632f871eaf->leave($__internal_d9ac7c27e85576a71b01adccf03d751c106542a25a323d4b92b96e632f871eaf_prof);

    }

    // line 216
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_6ef8fc453b294bf3c605f4a7442638bb20c44002c3455a1a9a7b8be83d5efb6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ef8fc453b294bf3c605f4a7442638bb20c44002c3455a1a9a7b8be83d5efb6e->enter($__internal_6ef8fc453b294bf3c605f4a7442638bb20c44002c3455a1a9a7b8be83d5efb6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_7f3b16e6f2b86b12ca53ea4300adc8348500e87dd6f470bfb324994607b1f94d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f3b16e6f2b86b12ca53ea4300adc8348500e87dd6f470bfb324994607b1f94d->enter($__internal_7f3b16e6f2b86b12ca53ea4300adc8348500e87dd6f470bfb324994607b1f94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 217
        $context["force_error"] = true;
        // line 218
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7f3b16e6f2b86b12ca53ea4300adc8348500e87dd6f470bfb324994607b1f94d->leave($__internal_7f3b16e6f2b86b12ca53ea4300adc8348500e87dd6f470bfb324994607b1f94d_prof);

        
        $__internal_6ef8fc453b294bf3c605f4a7442638bb20c44002c3455a1a9a7b8be83d5efb6e->leave($__internal_6ef8fc453b294bf3c605f4a7442638bb20c44002c3455a1a9a7b8be83d5efb6e_prof);

    }

    // line 221
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_9aa9bf6a631db88883299cb9540d9b37d9f481a9e3b68d5223fb972e2071e6f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aa9bf6a631db88883299cb9540d9b37d9f481a9e3b68d5223fb972e2071e6f8->enter($__internal_9aa9bf6a631db88883299cb9540d9b37d9f481a9e3b68d5223fb972e2071e6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_e969d2ed4079d99b54fb5bb6e313e2df70650ae278c5c452ff4b1172fbbb57ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e969d2ed4079d99b54fb5bb6e313e2df70650ae278c5c452ff4b1172fbbb57ac->enter($__internal_e969d2ed4079d99b54fb5bb6e313e2df70650ae278c5c452ff4b1172fbbb57ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 222
        echo "<div class=\"form-check";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 222, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 223
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 223, $this->getSourceContext()); })()), 'widget');
        // line 224
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 224, $this->getSourceContext()); })()), 'errors');
        // line 225
        echo "</div>";
        
        $__internal_e969d2ed4079d99b54fb5bb6e313e2df70650ae278c5c452ff4b1172fbbb57ac->leave($__internal_e969d2ed4079d99b54fb5bb6e313e2df70650ae278c5c452ff4b1172fbbb57ac_prof);

        
        $__internal_9aa9bf6a631db88883299cb9540d9b37d9f481a9e3b68d5223fb972e2071e6f8->leave($__internal_9aa9bf6a631db88883299cb9540d9b37d9f481a9e3b68d5223fb972e2071e6f8_prof);

    }

    // line 228
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_883945c66723221eb1fe8ad3df414dfbfc5aa26e8e2f9cd29a7f09f0adc6f505 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_883945c66723221eb1fe8ad3df414dfbfc5aa26e8e2f9cd29a7f09f0adc6f505->enter($__internal_883945c66723221eb1fe8ad3df414dfbfc5aa26e8e2f9cd29a7f09f0adc6f505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_2209e3c7a9ee61e1537c9fb672433727a67ff235f2f648ed88e7d2a08fc0ff35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2209e3c7a9ee61e1537c9fb672433727a67ff235f2f648ed88e7d2a08fc0ff35->enter($__internal_2209e3c7a9ee61e1537c9fb672433727a67ff235f2f648ed88e7d2a08fc0ff35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 229
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 229, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 230
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 230, $this->getSourceContext()); })()), 'widget');
        // line 231
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 231, $this->getSourceContext()); })()), 'errors');
        // line 232
        echo "</div>";
        
        $__internal_2209e3c7a9ee61e1537c9fb672433727a67ff235f2f648ed88e7d2a08fc0ff35->leave($__internal_2209e3c7a9ee61e1537c9fb672433727a67ff235f2f648ed88e7d2a08fc0ff35_prof);

        
        $__internal_883945c66723221eb1fe8ad3df414dfbfc5aa26e8e2f9cd29a7f09f0adc6f505->leave($__internal_883945c66723221eb1fe8ad3df414dfbfc5aa26e8e2f9cd29a7f09f0adc6f505_prof);

    }

    // line 237
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_a0bd42fd8344f2e4fa68c6a76d39de307c9cb59bd4293fd5a7ce1975e1e1aef0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0bd42fd8344f2e4fa68c6a76d39de307c9cb59bd4293fd5a7ce1975e1e1aef0->enter($__internal_a0bd42fd8344f2e4fa68c6a76d39de307c9cb59bd4293fd5a7ce1975e1e1aef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_49d69525bbc1b822aa8bdc8a60583b6db19a0dc9d18f2ad25922769f9d004096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49d69525bbc1b822aa8bdc8a60583b6db19a0dc9d18f2ad25922769f9d004096->enter($__internal_49d69525bbc1b822aa8bdc8a60583b6db19a0dc9d18f2ad25922769f9d004096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 238
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 238, $this->getSourceContext()); })())) > 0)) {
            // line 239
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 239, $this->getSourceContext()); })()), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 240
            echo "        <ul class=\"list-unstyled\">";
            // line 241
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 241, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 242
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 244
            echo "</ul>
        ";
            // line 245
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 245, $this->getSourceContext()); })()), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_49d69525bbc1b822aa8bdc8a60583b6db19a0dc9d18f2ad25922769f9d004096->leave($__internal_49d69525bbc1b822aa8bdc8a60583b6db19a0dc9d18f2ad25922769f9d004096_prof);

        
        $__internal_a0bd42fd8344f2e4fa68c6a76d39de307c9cb59bd4293fd5a7ce1975e1e1aef0->leave($__internal_a0bd42fd8344f2e4fa68c6a76d39de307c9cb59bd4293fd5a7ce1975e1e1aef0_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Form:bootstrap.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  993 => 245,  990 => 244,  982 => 242,  978 => 241,  976 => 240,  970 => 239,  968 => 238,  959 => 237,  949 => 232,  947 => 231,  945 => 230,  939 => 229,  930 => 228,  920 => 225,  918 => 224,  916 => 223,  910 => 222,  901 => 221,  891 => 218,  889 => 217,  880 => 216,  870 => 213,  868 => 212,  859 => 211,  849 => 208,  847 => 207,  838 => 206,  828 => 203,  826 => 202,  817 => 201,  807 => 198,  805 => 197,  803 => 196,  794 => 195,  784 => 192,  782 => 191,  780 => 190,  778 => 189,  771 => 188,  762 => 187,  750 => 181,  746 => 180,  731 => 179,  727 => 176,  724 => 173,  723 => 172,  722 => 171,  720 => 170,  717 => 169,  714 => 168,  711 => 167,  708 => 166,  705 => 165,  702 => 164,  699 => 163,  696 => 162,  694 => 161,  685 => 160,  675 => 157,  666 => 156,  656 => 153,  647 => 152,  637 => 149,  635 => 148,  626 => 146,  616 => 143,  614 => 142,  605 => 141,  594 => 135,  592 => 134,  590 => 133,  587 => 131,  585 => 130,  583 => 129,  574 => 128,  563 => 123,  560 => 120,  558 => 119,  556 => 117,  547 => 116,  536 => 112,  530 => 109,  529 => 108,  528 => 107,  524 => 106,  520 => 105,  513 => 101,  512 => 100,  511 => 99,  507 => 98,  505 => 97,  496 => 96,  486 => 93,  484 => 92,  475 => 91,  463 => 86,  460 => 85,  450 => 84,  445 => 82,  443 => 81,  441 => 80,  438 => 78,  436 => 77,  427 => 76,  415 => 71,  413 => 70,  411 => 68,  410 => 67,  409 => 66,  408 => 65,  403 => 63,  401 => 62,  399 => 61,  396 => 59,  394 => 58,  385 => 57,  374 => 53,  372 => 52,  370 => 51,  368 => 50,  366 => 49,  362 => 48,  360 => 47,  357 => 45,  355 => 44,  346 => 43,  335 => 39,  333 => 38,  331 => 37,  322 => 36,  312 => 33,  306 => 31,  304 => 30,  302 => 29,  296 => 27,  293 => 26,  291 => 25,  288 => 24,  279 => 23,  269 => 20,  267 => 19,  258 => 18,  248 => 15,  246 => 14,  237 => 13,  227 => 10,  224 => 7,  222 => 6,  213 => 5,  203 => 237,  200 => 236,  197 => 234,  195 => 228,  192 => 227,  190 => 221,  187 => 220,  185 => 216,  182 => 215,  180 => 211,  177 => 210,  175 => 206,  172 => 205,  170 => 201,  167 => 200,  165 => 195,  162 => 194,  160 => 187,  157 => 186,  154 => 184,  152 => 160,  149 => 159,  147 => 156,  144 => 155,  142 => 152,  139 => 151,  137 => 146,  134 => 145,  132 => 141,  129 => 140,  126 => 138,  124 => 128,  121 => 127,  119 => 116,  116 => 115,  114 => 96,  111 => 95,  109 => 91,  106 => 90,  104 => 76,  101 => 75,  99 => 57,  96 => 56,  94 => 43,  91 => 42,  89 => 36,  86 => 35,  84 => 23,  81 => 22,  79 => 18,  76 => 17,  74 => 13,  71 => 12,  69 => 5,  66 => 4,  63 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}

    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
        {{- date_pattern|replace({
            '{{ year }}': form_widget(form.year),
            '{{ month }}': form_widget(form.month),
            '{{ day }}': form_widget(form.day),
        })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}

    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        {#<div class=\"checkbox\">#}
            {{- form_label(form, null, { widget: parent(), label_attr: { class: 'form-check-label' } }) -}}
        {#</div>#}
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group {{ form.vars.name }}{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group button\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-check{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
        <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
        {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}", "AppBundle:Form:bootstrap.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/AppBundle/Resources/views/Form/bootstrap.html.twig");
    }
}
