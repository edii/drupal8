<?php

/* core/themes/classy/templates/system/container.html.twig */
class __TwigTemplate_c7b8c0c7b98816816ef9deebdad371846f48bea29e58bbdc3dae5411efce0aa9 extends Twig_Template
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
        // line 20
        echo "<div";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (((isset($context["has_parent"]) ? $context["has_parent"] : null)) ? ("form-wrapper") : (""))), "method"), "html", null, true);
        echo ">";
        echo twig_drupal_escape_filter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/system/container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 20,);
    }
}
