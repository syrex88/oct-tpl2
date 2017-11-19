<?php

/* C:\Cloud\openServer\domains\bux-sait.loc/plugins/samuell/contenteditor/components/contenteditor/default.htm */
class __TwigTemplate_a28fd004e9c0bdea5495e9936b990804c4d4ce6b2fc8592eb7c7ba1902abbaf0 extends Twig_Template
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
        echo "<";
        if ($this->getAttribute(($context["__SELF__"] ?? null), "fixture", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["__SELF__"] ?? null), "fixture", array()), "html", null, true);
        } else {
            echo "div";
        }
        // line 2
        echo "    ";
        if ($this->getAttribute(($context["__SELF__"] ?? null), "fixture", array())) {
            echo "data-fixture data-ce-tag=\"p\"";
        } else {
            echo "data-editable";
        }
        // line 3
        echo "    data-component=\"";
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onSave\"
    data-file=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["__SELF__"] ?? null), "file", array()), "html", null, true);
        echo "\"
    data-tools=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["__SELF__"] ?? null), "tools", array()), "html", null, true);
        echo "\">
    ";
        // line 6
        echo $this->getAttribute(($context["__SELF__"] ?? null), "content", array());
        echo "
</";
        // line 7
        if ($this->getAttribute(($context["__SELF__"] ?? null), "fixture", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["__SELF__"] ?? null), "fixture", array()), "html", null, true);
        } else {
            echo "div";
        }
        echo ">

";
        // line 9
        if (($this->getAttribute(($context["__SELF__"] ?? null), "renderCount", array()) == 1)) {
            // line 10
            echo "    ";
            echo $this->env->getExtension('CMS')->startBlock('scripts'            );
            // line 11
            echo "    <script type=\"text/javascript\">
    /* CONTENT EDITOR SCRIPT START */
    ContentTools.StylePalette.add([
        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["__SELF__"] ?? null), "palettes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
                // line 15
                echo "            new ContentTools.Style('";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["style"], "name", array())) ? ($this->getAttribute($context["style"], "name", array())) : ($this->getAttribute($context["style"], "class", array()))), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["style"], "class", array()), "html", null, true);
                echo "', ";
                echo twig_jsonencode_filter($this->getAttribute($context["style"], "allowed_tags", array()));
                echo "),
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "    ]);
    editor.toolbox().tools([
                                [
                                ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["__SELF__"] ?? null), "buttons", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 21
                echo "                                    '";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "',
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "                                ],
                                [
                                    'undo',
                                    'redo',
                                    'remove'
                                ]
                            ]);
    /* CONTENT EDITOR SCRIPT END */
    </script>
    ";
            // line 10
            echo $this->env->getExtension('CMS')->endBlock(true            );
            // line 33
            echo "    ";
            echo $this->env->getExtension('CMS')->startBlock('styles'            );
            // line 34
            echo "    <style title=\"contenteditor\" type=\"text/css\">
        ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute(($context["__SELF__"] ?? null), "additional_styles", array()), "html", null, true);
            echo "
    </style>
    ";
            // line 33
            echo $this->env->getExtension('CMS')->endBlock(true            );
        }
    }

    public function getTemplateName()
    {
        return "C:\\Cloud\\openServer\\domains\\bux-sait.loc/plugins/samuell/contenteditor/components/contenteditor/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 33,  123 => 35,  120 => 34,  117 => 33,  115 => 10,  104 => 23,  95 => 21,  91 => 20,  86 => 17,  73 => 15,  69 => 14,  64 => 11,  61 => 10,  59 => 9,  50 => 7,  46 => 6,  42 => 5,  38 => 4,  33 => 3,  26 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<{% if __SELF__.fixture %}{{ __SELF__.fixture }}{% else %}div{% endif %}
    {% if __SELF__.fixture %}data-fixture data-ce-tag=\"p\"{% else %}data-editable{% endif %}
    data-component=\"{{ __SELF__ }}::onSave\"
    data-file=\"{{ __SELF__.file }}\"
    data-tools=\"{{ __SELF__.tools }}\">
    {{ __SELF__.content|raw }}
</{% if __SELF__.fixture %}{{ __SELF__.fixture }}{% else %}div{% endif %}>

{% if __SELF__.renderCount == 1 %}
    {% put scripts %}
    <script type=\"text/javascript\">
    /* CONTENT EDITOR SCRIPT START */
    ContentTools.StylePalette.add([
        {% for style in __SELF__.palettes %}
            new ContentTools.Style('{{ style.name ? style.name : style.class }}', '{{ style.class }}', {{ style.allowed_tags|json_encode()|raw }}),
        {% endfor %}
    ]);
    editor.toolbox().tools([
                                [
                                {% for value in __SELF__.buttons %}
                                    '{{ value }}',
                                {% endfor %}
                                ],
                                [
                                    'undo',
                                    'redo',
                                    'remove'
                                ]
                            ]);
    /* CONTENT EDITOR SCRIPT END */
    </script>
    {% endput %}
    {% put styles  %}
    <style title=\"contenteditor\" type=\"text/css\">
        {{ __SELF__.additional_styles }}
    </style>
    {% endput %}
{% endif %}
", "C:\\Cloud\\openServer\\domains\\bux-sait.loc/plugins/samuell/contenteditor/components/contenteditor/default.htm", "");
    }
}
