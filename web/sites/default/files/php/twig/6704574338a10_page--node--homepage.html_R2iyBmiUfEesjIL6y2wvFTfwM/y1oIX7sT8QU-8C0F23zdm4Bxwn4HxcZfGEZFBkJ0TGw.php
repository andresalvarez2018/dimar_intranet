<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/white/tpl/page/page--node--homepage.html.twig */
class __TwigTemplate_0a9a4a7f1453ec88a788d5f8bb1f15eb extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_menu_style", [], "any", false, false, true, 1), "value", [], "any", false, false, true, 1)) {
            // line 2
            echo "\t";
            $context["menu_style"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_menu_style", [], "any", false, false, true, 2), "value", [], "any", false, false, true, 2);
        } else {
            // line 4
            echo "\t";
            $context["menu_style"] = ($context["theme_menu_style"] ?? null);
        }
        // line 6
        echo "
";
        // line 7
        $this->loadTemplate((($context["theme_path_no_base"] ?? null) . "/tpl/header/header.html.twig"), "themes/custom/white/tpl/page/page--node--homepage.html.twig", 7)->display($context);
        // line 8
        echo "

";
        // line 10
        $this->loadTemplate((((($context["theme_path_no_base"] ?? null) . "/tpl/menu-tpl/whites-menu--") . ($context["menu_style"] ?? null)) . ".html.twig"), "themes/custom/white/tpl/page/page--node--homepage.html.twig", 10)->display($context);
        // line 11
        echo "
";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slider", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "
";
        // line 14
        echo "<div class=\"section-empty section-item\">
        <div class=\"container content\">
            <div class=\"row\">
                <div class=\"col-md-9 col-sm-12\">
                    <div class=\"grid-list whites-grid-list one-row-list\">
                        ";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-12 widget\">
                   ";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        echo "
                </div>
            </div>
        </div>
    </div>
";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "section_content", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
        echo "
";
        // line 30
        echo "






";
    }

    public function getTemplateName()
    {
        return "themes/custom/white/tpl/page/page--node--homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 30,  89 => 28,  81 => 23,  74 => 19,  67 => 14,  63 => 12,  60 => 11,  58 => 10,  54 => 8,  52 => 7,  49 => 6,  45 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/white/tpl/page/page--node--homepage.html.twig", "/var/www/html/web/themes/custom/white/tpl/page/page--node--homepage.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "set" => 2, "include" => 7);
        static $filters = array("escape" => 12);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'include'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
