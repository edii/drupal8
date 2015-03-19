<?php

/* themes/demo/templates/page.html.twig */
class __TwigTemplate_78a5a285d16fcaefb8e4fbead46929dd906106cb09d3b140450e593076b7a542 extends Twig_Template
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
        // line 6
        echo "<div class=\"sidebar\">
    <div class=\"branding\">
        <a class=\"logo\" href=\"";
        // line 8
        echo twig_drupal_escape_filter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true);
        echo "\" title=\"";
        echo twig_render_var(t("Home"));
        echo "\" rel=\"home\">formata</a>
        ";
        // line 9
        if ((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) {
            // line 10
            echo "        <div class=\"slogan\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true);
            echo "</div>
        ";
        }
        // line 12
        echo "    </div>
    ";
        // line 13
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nav", array())) {
            // line 14
            echo "        ";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nav", array()), "html", null, true);
            echo "
    ";
        }
        // line 16
        echo "    <div class=\"social-links\">
        <a class=\"social\" href=\"https://twitter.com/\"><i class=\"fa fa-twitter\"></i></a>
        <a class=\"social\" href=\"https://github.com/ \"><i class=\"fa fa-github-alt\"></i></a>
        <a class=\"social\" href=\"http://www.linkedin.com/\"><i class=\"fa fa-linkedin-square\"></i></a>
    </div>
</div>
    
<div class=\"main-content\">
    ";
        // line 24
        if ((isset($context["messages"]) ? $context["messages"] : null)) {
            // line 25
            echo "    <div id=\"messages\">
        <div class=\"contain\">";
            // line 26
            echo twig_drupal_escape_filter($this->env, (isset($context["messages"]) ? $context["messages"] : null), "html", null, true);
            echo "</div>
    </div>
    ";
        }
        // line 29
        echo "    
    ";
        // line 30
        if ((isset($context["tabs"]) ? $context["tabs"] : null)) {
            // line 31
            echo "    <nav class=\"tabs\" role=\"navigation\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["tabs"]) ? $context["tabs"] : null), "html", null, true);
            echo "</nav>
    ";
        }
        // line 33
        echo "
    ";
        // line 34
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true);
        echo "
    
    ";
        // line 36
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 37
            echo "        <ul class=\"action-links\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true);
            echo "</ul>
    ";
        }
        // line 39
        echo "    
    <main class=\"content\" role=\"main\">
        ";
        // line 41
        echo twig_drupal_escape_filter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
        echo "
        ";
        // line 42
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 43
            echo "            <h1 class=\"title\" class=\"page-title\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</h1>
        ";
        }
        // line 45
        echo "        ";
        echo twig_drupal_escape_filter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
        echo "
        ";
        // line 46
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true);
        echo "
    </main>
    
    <footer footer=\"footer\">
        ";
        // line 50
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 51
            echo "            ";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true);
            echo "
        ";
        }
        // line 53
        echo "    </footer>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/demo/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 53,  126 => 51,  124 => 50,  117 => 46,  112 => 45,  106 => 43,  104 => 42,  100 => 41,  96 => 39,  90 => 37,  88 => 36,  83 => 34,  80 => 33,  74 => 31,  72 => 30,  69 => 29,  63 => 26,  60 => 25,  58 => 24,  48 => 16,  42 => 14,  40 => 13,  37 => 12,  31 => 10,  29 => 9,  23 => 8,  19 => 6,);
    }
}
