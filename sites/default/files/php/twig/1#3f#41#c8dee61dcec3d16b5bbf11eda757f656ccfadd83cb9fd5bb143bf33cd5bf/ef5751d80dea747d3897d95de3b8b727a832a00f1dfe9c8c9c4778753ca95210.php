<?php

/* core/themes/classy/templates/system/progress-bar.html.twig */
class __TwigTemplate_3f41c8dee61dcec3d16b5bbf11eda757f656ccfadd83cb9fd5bb143bf33cd5bf extends Twig_Template
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
        // line 16
        echo "<div class=\"progress\" data-drupal-progress>
  ";
        // line 17
        if ((isset($context["label"]) ? $context["label"] : null)) {
            // line 18
            echo "    <div class=\"progress__label\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</div>
  ";
        }
        // line 20
        echo "  <div class=\"progress__track\"><div class=\"progress__bar\" style=\"width: ";
        echo twig_drupal_escape_filter($this->env, (isset($context["percent"]) ? $context["percent"] : null), "html", null, true);
        echo "%\"></div></div>
  <div class=\"progress__percentage\">";
        // line 21
        echo twig_drupal_escape_filter($this->env, (isset($context["percent"]) ? $context["percent"] : null), "html", null, true);
        echo "%</div>
  <div class=\"progress__description\">";
        // line 22
        echo twig_drupal_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/system/progress-bar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 22,  35 => 21,  30 => 20,  24 => 18,  22 => 17,  19 => 16,);
    }
}
