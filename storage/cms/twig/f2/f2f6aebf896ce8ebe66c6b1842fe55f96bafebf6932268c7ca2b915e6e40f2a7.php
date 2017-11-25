<?php

/* C:\Cloud\openServer\domains\bux-sait.loc/themes/b-s/partials/callbackFooter/default.htm */
class __TwigTemplate_2f09082e41234ec96fec0dc24e9da87fa9a66cba151dcadf5065692d69295865 extends Twig_Template
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
        echo "<form class=\"rd-mailform rd-mailform-inline rd-mailform-dark\" data-request=\"";
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onFormSubmit\">
    ";
        // line 2
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), array("token"));
        echo "
    <!-- END RD Mailform Type -->
    <div class=\"form-group\">
        <label data-add-placeholder class=\"form-label rd-input-label\" for=\"phone\">Ваш телефон</label>
        <input type=\"text\"  id=\"phone\" type=\"text\" name=\"phone\" class=\"form-control\" data-constraints=\"@NotEmpty\">
    </div>
    <div id=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "_forms_flash\"></div>
    <div>
        ";
        // line 10
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("@recaptcha"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "    </div>
    <div class=\"control-absolute\">
        <button id=\"simpleContactSubmitButton\" type=\"submit\"  class=\"btn btn-default-variant-1\">Перезвоните</button>
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "C:\\Cloud\\openServer\\domains\\bux-sait.loc/themes/b-s/partials/callbackFooter/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 11,  38 => 10,  33 => 8,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form class=\"rd-mailform rd-mailform-inline rd-mailform-dark\" data-request=\"{{ __SELF__ }}::onFormSubmit\">
    {{ form_token() }}
    <!-- END RD Mailform Type -->
    <div class=\"form-group\">
        <label data-add-placeholder class=\"form-label rd-input-label\" for=\"phone\">Ваш телефон</label>
        <input type=\"text\"  id=\"phone\" type=\"text\" name=\"phone\" class=\"form-control\" data-constraints=\"@NotEmpty\">
    </div>
    <div id=\"{{ __SELF__ }}_forms_flash\"></div>
    <div>
        {% partial '@recaptcha' %}
    </div>
    <div class=\"control-absolute\">
        <button id=\"simpleContactSubmitButton\" type=\"submit\"  class=\"btn btn-default-variant-1\">Перезвоните</button>
    </div>
</form>", "C:\\Cloud\\openServer\\domains\\bux-sait.loc/themes/b-s/partials/callbackFooter/default.htm", "");
    }
}
