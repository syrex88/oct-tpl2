<?php

/* C:\Cloud\openServer\domains\bux-sait.loc/themes/b-s/pages/registraciya-ooo.htm */
class __TwigTemplate_08579b179f191f38e3e4ecb95d9760893a770841a169e9098b54c7fc8ff6b862 extends Twig_Template
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
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "registraciya-ooo.htm"        ;
        $context['__cms_component_params']['fixture'] = "span"        ;
        echo $this->env->getExtension('CMS')->componentFunction("editor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\Cloud\\openServer\\domains\\bux-sait.loc/themes/b-s/pages/registraciya-ooo.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'editor' file=\"registraciya-ooo.htm\" fixture=\"span\" %}", "C:\\Cloud\\openServer\\domains\\bux-sait.loc/themes/b-s/pages/registraciya-ooo.htm", "");
    }
}
