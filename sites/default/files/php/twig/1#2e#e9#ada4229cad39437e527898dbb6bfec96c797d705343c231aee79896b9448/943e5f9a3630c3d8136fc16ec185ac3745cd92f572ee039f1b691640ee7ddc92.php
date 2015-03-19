<?php

/* core/themes/bartik/templates/block--system-menu-block.html.twig */
class __TwigTemplate_2ee9ada4229cad39437e527898dbb6bfec96c797d705343c231aee79896b9448 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("@classy/system/block--system-menu-block.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@classy/system/block--system-menu-block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 10
        $context["show_anchor"] = ("show-" . \Drupal\Component\Utility\Html::getId($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "id", array())));
        // line 11
        $context["hide_anchor"] = ("hide-" . \Drupal\Component\Utility\Html::getId($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "id", array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "  ";
        // line 14
        echo "  ";
        if ($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label_display", array())) {
            // line 15
            echo "    <div";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "content"), "method"), "html", null, true);
            echo ">";
            echo twig_drupal_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
            echo "</div>
  ";
        } else {
            // line 17
            echo "    ";
            // line 18
            echo "    <div class=\"menu-toggle-target menu-toggle-target-show\" id=\"";
            echo twig_drupal_escape_filter($this->env, (isset($context["show_anchor"]) ? $context["show_anchor"] : null), "html", null, true);
            echo "\"></div>
    <div class=\"menu-toggle-target\" id=\"";
            // line 19
            echo twig_drupal_escape_filter($this->env, (isset($context["hide_anchor"]) ? $context["hide_anchor"] : null), "html", null, true);
            echo "\"></div>
    <a class=\"menu-toggle\" href=\"#";
            // line 20
            echo twig_drupal_escape_filter($this->env, (isset($context["show_anchor"]) ? $context["show_anchor"] : null), "html", null, true);
            echo "\">";
            echo twig_render_var(t("Menu"));
            echo "</a>
    <a class=\"menu-toggle menu-toggle--hide\" href=\"#";
            // line 21
            echo twig_drupal_escape_filter($this->env, (isset($context["hide_anchor"]) ? $context["hide_anchor"] : null), "html", null, true);
            echo "\">";
            echo twig_render_var(t("Menu"));
            echo "</a>
    ";
            // line 22
            echo twig_drupal_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
            echo "
  ";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/block--system-menu-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 22,  74 => 21,  68 => 20,  64 => 19,  59 => 18,  57 => 17,  49 => 15,  46 => 14,  44 => 13,  41 => 12,  37 => 1,  35 => 11,  33 => 10,  11 => 1,);
    }
}
