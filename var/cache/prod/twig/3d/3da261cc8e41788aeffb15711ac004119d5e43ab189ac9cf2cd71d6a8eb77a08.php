<?php

/* AppBundle:Form:bootstrap.html.twig */
class __TwigTemplate_a8d88d45174db71e0ad7c6ca633a7e3b963d7fc8d003d713c45b6b9707685625 extends Twig_Template
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
    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? null), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 14
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 15
        $this->displayParentBlock("textarea_widget", $context, $blocks);
    }

    // line 18
    public function block_button_widget($context, array $blocks = array())
    {
        // line 19
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 20
        $this->displayParentBlock("button_widget", $context, $blocks);
    }

    // line 23
    public function block_money_widget($context, array $blocks = array())
    {
        // line 24
        echo "<div class=\"input-group\">
        ";
        // line 25
        $context["append"] = (is_string($__internal_36df76c457d4bda1b567f5b1cae574089bb9b5364d4dcbfb0185ba50cc102f78 = ($context["money_pattern"] ?? null)) && is_string($__internal_d4521735a0c8a88ef043e921ff38253a449467f46f1c5e7bd1b2f956e9b46108 = "{{") && ('' === $__internal_d4521735a0c8a88ef043e921ff38253a449467f46f1c5e7bd1b2f956e9b46108 || 0 === strpos($__internal_36df76c457d4bda1b567f5b1cae574089bb9b5364d4dcbfb0185ba50cc102f78, $__internal_d4521735a0c8a88ef043e921ff38253a449467f46f1c5e7bd1b2f956e9b46108)));
        // line 26
        echo "        ";
        if ( !($context["append"] ?? null)) {
            // line 27
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? null), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 29
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 30
        if (($context["append"] ?? null)) {
            // line 31
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? null), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 33
        echo "    </div>";
    }

    // line 36
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 37
        echo "<div class=\"input-group\">";
        // line 38
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 39
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
    }

    // line 43
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 44
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 45
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 47
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 48
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "date", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "time", array()), 'errors');
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "date", array()), 'widget', array("datetime" => true));
            // line 52
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "time", array()), 'widget', array("datetime" => true));
            // line 53
            echo "</div>";
        }
    }

    // line 57
    public function block_date_widget($context, array $blocks = array())
    {
        // line 58
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 59
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 61
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 62
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 63
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 65
            echo twig_replace_filter(($context["date_pattern"] ?? null), array("{{ year }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "year", array()), 'widget'), "{{ month }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "month", array()), 'widget'), "{{ day }}" =>             // line 68
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "day", array()), 'widget')));
            // line 70
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 71
                echo "</div>";
            }
        }
    }

    // line 76
    public function block_time_widget($context, array $blocks = array())
    {
        // line 77
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 78
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 80
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 81
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 82
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 84
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? null)) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? null)) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "second", array()), 'widget');
            }
            // line 85
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 86
                echo "</div>";
            }
        }
    }

    // line 91
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 92
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 93
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
    }

    // line 96
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 97
        if (twig_in_filter("-inline", ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 99
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 100
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 101
($context["choice_translation_domain"] ?? null)));
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
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 107
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 108
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 109
($context["choice_translation_domain"] ?? null)));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "</div>";
        }
    }

    // line 116
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 117
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? null), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 119
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? null))) {
            // line 120
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 123
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks), "label_attr" => array("class" => "form-check-label")));
        }
    }

    // line 128
    public function block_radio_widget($context, array $blocks = array())
    {
        // line 129
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? null), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 130
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) {
            // line 131
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 133
            echo "<div class=\"radio\">";
            // line 134
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 135
            echo "</div>";
        }
    }

    // line 141
    public function block_form_label($context, array $blocks = array())
    {
        // line 142
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 143
        $this->displayParentBlock("form_label", $context, $blocks);
    }

    // line 146
    public function block_choice_label($context, array $blocks = array())
    {
        // line 148
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 149
        $this->displayBlock("form_label", $context, $blocks);
    }

    // line 152
    public function block_checkbox_label($context, array $blocks = array())
    {
        // line 153
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 156
    public function block_radio_label($context, array $blocks = array())
    {
        // line 157
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 160
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        // line 161
        echo "    ";
        // line 162
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 163
            echo "        ";
            if (($context["required"] ?? null)) {
                // line 164
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 165
                echo "        ";
            }
            // line 166
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 167
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? null)))));
                // line 168
                echo "        ";
            }
            // line 169
            echo "        ";
            if (( !(($context["label"] ?? null) === false) && twig_test_empty(($context["label"] ?? null)))) {
                // line 170
                if ( !twig_test_empty(($context["label_format"] ?? null))) {
                    // line 171
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? null), array("%name%" =>                     // line 172
($context["name"] ?? null), "%id%" =>                     // line 173
($context["id"] ?? null)));
                } else {
                    // line 176
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 179
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
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
            echo ($context["widget"] ?? null);
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? null) === false)) ? ((((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), array(), ($context["translation_domain"] ?? null))))) : ("")), "html", null, true);
            // line 181
            echo "</label>
    ";
        }
    }

    // line 187
    public function block_form_row($context, array $blocks = array())
    {
        // line 188
        echo "<div class=\"form-group ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "name", array()), "html", null, true);
        if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " has-error";
        }
        echo "\">";
        // line 189
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 190
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 191
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 192
        echo "</div>";
    }

    // line 195
    public function block_button_row($context, array $blocks = array())
    {
        // line 196
        echo "<div class=\"form-group button\">";
        // line 197
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 198
        echo "</div>";
    }

    // line 201
    public function block_choice_row($context, array $blocks = array())
    {
        // line 202
        $context["force_error"] = true;
        // line 203
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 206
    public function block_date_row($context, array $blocks = array())
    {
        // line 207
        $context["force_error"] = true;
        // line 208
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 211
    public function block_time_row($context, array $blocks = array())
    {
        // line 212
        $context["force_error"] = true;
        // line 213
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 216
    public function block_datetime_row($context, array $blocks = array())
    {
        // line 217
        $context["force_error"] = true;
        // line 218
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 221
    public function block_checkbox_row($context, array $blocks = array())
    {
        // line 222
        echo "<div class=\"form-check";
        if ( !($context["valid"] ?? null)) {
            echo " has-error";
        }
        echo "\">";
        // line 223
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 224
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 225
        echo "</div>";
    }

    // line 228
    public function block_radio_row($context, array $blocks = array())
    {
        // line 229
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? null)) {
            echo " has-error";
        }
        echo "\">";
        // line 230
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 231
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 232
        echo "</div>";
    }

    // line 237
    public function block_form_errors($context, array $blocks = array())
    {
        // line 238
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 239
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 240
            echo "        <ul class=\"list-unstyled\">";
            // line 241
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
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
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
    }

    public function getTemplateName()
    {
        return "AppBundle:Form:bootstrap.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  675 => 245,  672 => 244,  664 => 242,  660 => 241,  658 => 240,  652 => 239,  650 => 238,  647 => 237,  643 => 232,  641 => 231,  639 => 230,  633 => 229,  630 => 228,  626 => 225,  624 => 224,  622 => 223,  616 => 222,  613 => 221,  609 => 218,  607 => 217,  604 => 216,  600 => 213,  598 => 212,  595 => 211,  591 => 208,  589 => 207,  586 => 206,  582 => 203,  580 => 202,  577 => 201,  573 => 198,  571 => 197,  569 => 196,  566 => 195,  562 => 192,  560 => 191,  558 => 190,  556 => 189,  549 => 188,  546 => 187,  540 => 181,  536 => 180,  521 => 179,  517 => 176,  514 => 173,  513 => 172,  512 => 171,  510 => 170,  507 => 169,  504 => 168,  501 => 167,  498 => 166,  495 => 165,  492 => 164,  489 => 163,  486 => 162,  484 => 161,  481 => 160,  477 => 157,  474 => 156,  470 => 153,  467 => 152,  463 => 149,  461 => 148,  458 => 146,  454 => 143,  452 => 142,  449 => 141,  444 => 135,  442 => 134,  440 => 133,  437 => 131,  435 => 130,  433 => 129,  430 => 128,  425 => 123,  422 => 120,  420 => 119,  418 => 117,  415 => 116,  410 => 112,  404 => 109,  403 => 108,  402 => 107,  398 => 106,  394 => 105,  387 => 101,  386 => 100,  385 => 99,  381 => 98,  379 => 97,  376 => 96,  372 => 93,  370 => 92,  367 => 91,  361 => 86,  358 => 85,  348 => 84,  343 => 82,  341 => 81,  339 => 80,  336 => 78,  334 => 77,  331 => 76,  325 => 71,  323 => 70,  321 => 68,  320 => 67,  319 => 66,  318 => 65,  313 => 63,  311 => 62,  309 => 61,  306 => 59,  304 => 58,  301 => 57,  296 => 53,  294 => 52,  292 => 51,  290 => 50,  288 => 49,  284 => 48,  282 => 47,  279 => 45,  277 => 44,  274 => 43,  269 => 39,  267 => 38,  265 => 37,  262 => 36,  258 => 33,  252 => 31,  250 => 30,  248 => 29,  242 => 27,  239 => 26,  237 => 25,  234 => 24,  231 => 23,  227 => 20,  225 => 19,  222 => 18,  218 => 15,  216 => 14,  213 => 13,  209 => 10,  206 => 7,  204 => 6,  201 => 5,  197 => 237,  194 => 236,  191 => 234,  189 => 228,  186 => 227,  184 => 221,  181 => 220,  179 => 216,  176 => 215,  174 => 211,  171 => 210,  169 => 206,  166 => 205,  164 => 201,  161 => 200,  159 => 195,  156 => 194,  154 => 187,  151 => 186,  148 => 184,  146 => 160,  143 => 159,  141 => 156,  138 => 155,  136 => 152,  133 => 151,  131 => 146,  128 => 145,  126 => 141,  123 => 140,  120 => 138,  118 => 128,  115 => 127,  113 => 116,  110 => 115,  108 => 96,  105 => 95,  103 => 91,  100 => 90,  98 => 76,  95 => 75,  93 => 57,  90 => 56,  88 => 43,  85 => 42,  83 => 36,  80 => 35,  78 => 23,  75 => 22,  73 => 18,  70 => 17,  68 => 13,  65 => 12,  63 => 5,  60 => 4,  57 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Form:bootstrap.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/AppBundle/Resources/views/Form/bootstrap.html.twig");
    }
}
