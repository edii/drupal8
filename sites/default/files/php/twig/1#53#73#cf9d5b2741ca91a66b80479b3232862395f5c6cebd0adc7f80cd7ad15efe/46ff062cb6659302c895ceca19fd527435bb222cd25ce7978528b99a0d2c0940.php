<?php

/* themes/demo/templates/html.html.twig */
class __TwigTemplate_5373cf9d5b2741ca91a66b80479b3232862395f5c6cebd0adc7f80cd7ad15efe extends Twig_Template
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
        // line 7
        echo "<!DOCTYPE html>
    <!--[if IE 8]><html class=\"no-js lt-ie9\" ";
        // line 8
        echo twig_drupal_escape_filter($this->env, (isset($context["html_attributes"]) ? $context["html_attributes"] : null), "html", null, true);
        echo "><![endif]-->
    <html";
        // line 9
        echo twig_drupal_escape_filter($this->env, (isset($context["html_attributes"]) ? $context["html_attributes"] : null), "html", null, true);
        echo ">
        <head>
            ";
        // line 11
        echo twig_drupal_escape_filter($this->env, (isset($context["head"]) ? $context["head"] : null), "html", null, true);
        echo "
             <title>";
        // line 12
        echo twig_drupal_escape_filter($this->env, (isset($context["head_title"]) ? $context["head_title"] : null), "html", null, true);
        echo "</title>
            ";
        // line 13
        echo twig_drupal_escape_filter($this->env, (isset($context["styles"]) ? $context["styles"] : null), "html", null, true);
        echo "
            ";
        // line 14
        echo twig_drupal_escape_filter($this->env, (isset($context["scripts"]) ? $context["scripts"] : null), "html", null, true);
        echo "
        </head>
        
        <body";
        // line 17
        echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">
            ";
        // line 18
        echo twig_drupal_escape_filter($this->env, (isset($context["page_top"]) ? $context["page_top"] : null), "html", null, true);
        echo "
            ";
        // line 19
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true);
        echo "
            ";
        // line 20
        echo twig_drupal_escape_filter($this->env, (isset($context["page_bottom"]) ? $context["page_bottom"] : null), "html", null, true);
        echo "
            ";
        // line 21
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "scripts", array(0 => "footer"), "method"), "html", null, true);
        echo "
        </body>
</html>";
    }

    public function getTemplateName()
    {
        return "themes/demo/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 21,  61 => 20,  57 => 19,  53 => 18,  49 => 17,  43 => 14,  39 => 13,  35 => 12,  31 => 11,  26 => 9,  22 => 8,  19 => 7,);
    }
}
