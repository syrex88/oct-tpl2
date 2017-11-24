<?php

/* C:\Cloud\openServer\domains\bux-sait.loc/themes/b-s/partials/callback/default.htm */
class __TwigTemplate_bccd50b1bf674e3243f87d29735288d8fd0c43a7d8616a71b70333b603d8f654 extends Twig_Template
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
        echo "<form class=\"rd-mailform callbackform\" data-request=\"";
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onFormSubmit\">

    ";
        // line 3
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), array("token"));
        echo "
    <div class=\"form-group mfInput\">
        <label data-add-placeholder=\"\" class=\"form-label rd-input-label\" for=\"phone\">Ваш телефон</label>
        <input type=\"text\"  id=\"phone\" type=\"text\" name=\"phone\" class=\"form-control\" data-constraints=\"@NotEmpty\">
    </div>
    <div>
        ";
        // line 9
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("@recaptcha"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "    </div>
    <div id=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "_forms_flash\"></div>
    <button id=\"simpleContactSubmitButton\" type=\"submit\"  class=\"btn btn-primary btn-cons\">Получить консультацию</button>
</form>";
    }

    public function getTemplateName()
    {
        return "C:\\Cloud\\openServer\\domains\\bux-sait.loc/themes/b-s/partials/callback/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 11,  38 => 10,  34 => 9,  25 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form class=\"rd-mailform callbackform\" data-request=\"{{ __SELF__ }}::onFormSubmit\">

    {{ form_token() }}
    <div class=\"form-group mfInput\">
        <label data-add-placeholder=\"\" class=\"form-label rd-input-label\" for=\"phone\">Ваш телефон</label>
        <input type=\"text\"  id=\"phone\" type=\"text\" name=\"phone\" class=\"form-control\" data-constraints=\"@NotEmpty\">
    </div>
    <div>
        {% partial '@recaptcha' %}
    </div>
    <div id=\"{{ __SELF__ }}_forms_flash\"></div>
    <button id=\"simpleContactSubmitButton\" type=\"submit\"  class=\"btn btn-primary btn-cons\">Получить консультацию</button>
</form>", "C:\\Cloud\\openServer\\domains\\bux-sait.loc/themes/b-s/partials/callback/default.htm", "");
    }
}
