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
        echo "<form class=\"rd-mailform rd-mailform-inline rd-mailform-dark footer\" data-request=\"";
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onFormSubmit\">
    ";
        // line 2
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), array("token"));
        echo "
    <!-- END RD Mailform Type -->
    <div class=\"form-group\">
        <input type=\"text\"  data-mask=\"+7(###)###-##-##\" id=\"phone\" name=\"phone\" class=\"form-control\" data-constraints=\"@NotEmpty\">
    </div>
    <div id=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "_forms_flash\"></div>
    <div>
        ";
        // line 9
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("@recaptcha"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 10
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
        return array (  41 => 10,  37 => 9,  32 => 7,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form class=\"rd-mailform rd-mailform-inline rd-mailform-dark footer\" data-request=\"{{ __SELF__ }}::onFormSubmit\">
    {{ form_token() }}
    <!-- END RD Mailform Type -->
    <div class=\"form-group\">
        <input type=\"text\"  data-mask=\"+7(###)###-##-##\" id=\"phone\" name=\"phone\" class=\"form-control\" data-constraints=\"@NotEmpty\">
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
