<?php

/* C:\Cloud\openServer\domains\bux-sait.loc/plugins/netsti/editor/components/editor/default.htm */
class __TwigTemplate_38c7144b14698445ccbfba669c2d1c47860b24a2c1cae757c2ce53795be41a4e extends Twig_Template
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
        echo "<div
    data-editable
    data-component=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onSave\"
    data-file=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["__SELF__"] ?? null), "file", array()), "html", null, true);
        echo "\">
    ";
        // line 5
        echo $this->getAttribute(($context["__SELF__"] ?? null), "content", array());
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "C:\\Cloud\\openServer\\domains\\bux-sait.loc/plugins/netsti/editor/components/editor/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div
    data-editable
    data-component=\"{{ __SELF__ }}::onSave\"
    data-file=\"{{ __SELF__.file }}\">
    {{ __SELF__.content|raw }}
</div>
", "C:\\Cloud\\openServer\\domains\\bux-sait.loc/plugins/netsti/editor/components/editor/default.htm", "");
    }
}
