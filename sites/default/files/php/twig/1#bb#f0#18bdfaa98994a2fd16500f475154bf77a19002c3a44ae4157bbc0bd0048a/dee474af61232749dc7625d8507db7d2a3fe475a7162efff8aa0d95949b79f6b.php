<?php

/* core/themes/classy/templates/system/checkboxes.html.twig */
class __TwigTemplate_bbf018bdfaa98994a2fd16500f475154bf77a19002c3a44ae4157bbc0bd0048a extends Twig_Template
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
        // line 17
        echo "<div";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "form-checkboxes"), "method"), "html", null, true);
        echo ">";
        echo twig_drupal_escape_filter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/system/checkboxes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 17,);
    }
}
