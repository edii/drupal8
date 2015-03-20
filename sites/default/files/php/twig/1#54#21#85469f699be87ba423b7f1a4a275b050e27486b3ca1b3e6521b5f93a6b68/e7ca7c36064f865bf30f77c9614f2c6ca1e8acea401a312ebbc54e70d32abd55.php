<?php

/* themes/demo/templates/block.html.twig */
class __TwigTemplate_542185469f699be87ba423b7f1a4a275b050e27486b3ca1b3e6521b5f93a6b68 extends Twig_Template
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
        echo twig_drupal_escape_filter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
        echo "
    ";
        // line 8
        if ((isset($context["label"]) ? $context["label"] : null)) {
            // line 9
            echo "        <h2";
            echo twig_drupal_escape_filter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true);
            echo ">";
            echo twig_drupal_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</h2>
    ";
        }
        // line 11
        echo "    ";
        echo twig_drupal_escape_filter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
        echo "
    <div";
        // line 12
        echo twig_drupal_escape_filter($this->env, (isset($context["content_attributes"]) ? $context["content_attributes"] : null), "html", null, true);
        echo ">
        ";
        // line 13
        echo twig_drupal_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        echo "
    </div>";
    }

    public function getTemplateName()
    {
        return "themes/demo/templates/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 13,  38 => 12,  33 => 11,  25 => 9,  23 => 8,  19 => 7,);
    }
}
