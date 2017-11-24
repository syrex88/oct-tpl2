<?php

/* C:\Cloud\openServer\domains\bux-sait.loc/plugins/netsti/editor/components/editor/blocks.htm */
class __TwigTemplate_12e5a007830d9462400c13d2a75520a58dc61a22105aad010232cac99f915edf extends Twig_Template
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
        echo "<ul class=\"editor--blocks-list\">
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blocks"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 3
            echo "\t<li class=\"editor--block\" draggable=\"true\" id=\"block-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "id", array()), "html", null, true);
            echo "\">
\t\t";
            // line 4
            if ($this->getAttribute($context["block"], "icon", array())) {
                // line 5
                echo "\t\t\t<i class=\"fa fa-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "icon", array()), "html", null, true);
                echo "\"></i>
\t\t";
            } else {
                // line 7
                echo "\t\t\t<div class=\"editor--block-icon\">
\t\t\t\t<img src=\"";
                // line 8
                echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter($this->getAttribute($context["block"], "image", array()));
                echo "\" alt=\"\" width=\"26\">
\t\t\t</div>
\t\t";
            }
            // line 11
            echo "\t\t<h4>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "title", array()), "html", null, true);
            echo "</h4>
\t\t<p>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "description", array()), "html", null, true);
            echo "</p>
\t\t<div class=\"editor--block-content\">
\t\t\t";
            // line 14
            echo $this->getAttribute($context["block"], "markup", array());
            echo "
\t\t</div>
\t</li>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 18
            echo "\t\t<img src=\"";
            echo url("/plugins/netsti/editor/assets/images/placeholder.png");
            echo "\" alt=\"\">
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</ul>
<script>
\t\$(function() {
\t\t\$('.editor--block').on('dragstart', function (e) {
\t\t\te.originalEvent.dataTransfer.setData('Text', this.id);

\t\t\tvar element = e.target;
\t\t\tsetTimeout(function(){
\t\t\t\telement.classList.add('editor--ondrag');
\t\t\t});
\t\t}).on('dragend', function (e) {
\t\t\tvar element = e.originalEvent.srcElement;
\t\t\telement.classList.remove('editor--ondrag');
\t\t});
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "C:\\Cloud\\openServer\\domains\\bux-sait.loc/plugins/netsti/editor/components/editor/blocks.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 20,  68 => 18,  59 => 14,  54 => 12,  49 => 11,  43 => 8,  40 => 7,  34 => 5,  32 => 4,  27 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"editor--blocks-list\">
\t{% for block in blocks %}
\t<li class=\"editor--block\" draggable=\"true\" id=\"block-{{ block.id }}\">
\t\t{% if block.icon %}
\t\t\t<i class=\"fa fa-{{ block.icon }}\"></i>
\t\t{% else %}
\t\t\t<div class=\"editor--block-icon\">
\t\t\t\t<img src=\"{{ block.image|theme }}\" alt=\"\" width=\"26\">
\t\t\t</div>
\t\t{% endif %}
\t\t<h4>{{ block.title }}</h4>
\t\t<p>{{ block.description }}</p>
\t\t<div class=\"editor--block-content\">
\t\t\t{{ block.markup|raw }}
\t\t</div>
\t</li>
\t{% else %}
\t\t<img src=\"{{ url('/plugins/netsti/editor/assets/images/placeholder.png') }}\" alt=\"\">
\t{% endfor %}
</ul>
<script>
\t\$(function() {
\t\t\$('.editor--block').on('dragstart', function (e) {
\t\t\te.originalEvent.dataTransfer.setData('Text', this.id);

\t\t\tvar element = e.target;
\t\t\tsetTimeout(function(){
\t\t\t\telement.classList.add('editor--ondrag');
\t\t\t});
\t\t}).on('dragend', function (e) {
\t\t\tvar element = e.originalEvent.srcElement;
\t\t\telement.classList.remove('editor--ondrag');
\t\t});
\t});
</script>", "C:\\Cloud\\openServer\\domains\\bux-sait.loc/plugins/netsti/editor/components/editor/blocks.htm", "");
    }
}
