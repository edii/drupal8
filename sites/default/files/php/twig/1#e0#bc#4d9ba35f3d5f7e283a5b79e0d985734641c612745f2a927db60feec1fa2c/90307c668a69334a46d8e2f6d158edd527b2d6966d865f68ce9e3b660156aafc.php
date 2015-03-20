<?php

/* core/modules/system/templates/block--system-menu-block.html.twig */
class __TwigTemplate_e0bc4d9ba35f3d5f7e283a5b79e0d985734641c612745f2a927db60feec1fa2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 43
        $context["heading_id"] = ($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "id", array()) . \Drupal\Component\Utility\Html::getId("-menu"));
        // line 44
        echo "<nav";
        echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo " role=\"navigation\" aria-labelledby=\"";
        echo twig_drupal_escape_filter($this->env, (isset($context["heading_id"]) ? $context["heading_id"] : null), "html", null, true);
        echo "\">
  ";
        // line 46
        echo "  ";
        if ( !$this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label_display", array())) {
            // line 47
            echo "    ";
            $context["title_attributes"] = $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "visually-hidden"), "method");
            // line 48
            echo "  ";
        }
        // line 49
        echo "  ";
        echo twig_drupal_escape_filter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
        echo "
  <h2";
        // line 50
        echo twig_drupal_escape_filter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true);
        echo ">";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label", array()), "html", null, true);
        echo "</h2>
  ";
        // line 51
        echo twig_drupal_escape_filter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
        echo "

  ";
        // line 54
        echo "  ";
        $this->displayBlock('content', $context, $blocks);
        // line 57
        echo "</nav>
";
    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
        // line 55
        echo "    ";
        echo twig_drupal_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/block--system-menu-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 55,  62 => 54,  57 => 57,  54 => 54,  49 => 51,  43 => 50,  38 => 49,  35 => 48,  32 => 47,  29 => 46,  22 => 44,  20 => 43,);
    }
}
