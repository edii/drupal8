<?php

/* core/themes/classy/templates/system/form-element-label.html.twig */
class __TwigTemplate_b726196ccba8ea4c6ba5fec883edfc58f5d11d7d469b696a20207804ba202626 extends Twig_Template
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
        // line 18
        $context["classes"] = array(0 => ((((isset($context["title_display"]) ? $context["title_display"] : null) == "after")) ? ("option") : ("")), 1 => ((((isset($context["title_display"]) ? $context["title_display"] : null) == "invisible")) ? ("visually-hidden") : ("")), 2 => (((isset($context["required"]) ? $context["required"] : null)) ? ("form-required") : ("")));
        // line 24
        if (( !twig_test_empty((isset($context["title"]) ? $context["title"] : null)) || (isset($context["required"]) ? $context["required"] : null))) {
            // line 25
            echo "<label";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
            echo ">";
            echo twig_drupal_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</label>";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/system/form-element-label.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 25,  21 => 24,  19 => 18,);
    }
}
