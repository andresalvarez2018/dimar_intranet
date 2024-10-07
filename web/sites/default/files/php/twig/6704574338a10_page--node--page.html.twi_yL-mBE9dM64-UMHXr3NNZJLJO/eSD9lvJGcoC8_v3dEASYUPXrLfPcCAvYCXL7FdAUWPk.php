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

/* themes/custom/white/tpl/page/page--node--page.html.twig */
class __TwigTemplate_0f8f65d10e2fb37548a4dbb83ad6d598 extends \Twig\Template
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
        // line 7
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_pt_style", [], "any", false, false, true, 7), "value", [], "any", false, false, true, 7)) {
            // line 8
            echo "\t";
            $context["page_title_style"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_pt_style", [], "any", false, false, true, 8), "value", [], "any", false, false, true, 8);
        } else {
            // line 10
            echo "\t";
            $context["page_title_style"] = ($context["theme_page_title_style"] ?? null);
        }
        // line 12
        echo "
";
        // line 13
        $this->loadTemplate((($context["theme_path_no_base"] ?? null) . "/tpl/header/header.html.twig"), "themes/custom/white/tpl/page/page--node--page.html.twig", 13)->display($context);
        // line 14
        echo "
";
        // line 15
        $this->loadTemplate((((($context["theme_path_no_base"] ?? null) . "/tpl/menu-tpl/whites-menu--") . ($context["menu_style"] ?? null)) . ".html.twig"), "themes/custom/white/tpl/page/page--node--page.html.twig", 15)->display($context);
        // line 16
        echo "

";
        // line 18
        if ((($context["page_title_style"] ?? null) && (($context["page_title_style"] ?? null) != "none"))) {
            // line 19
            echo "    ";
            $this->loadTemplate((((($context["theme_path_no_base"] ?? null) . "/tpl/page-title-tpl/page-title-") . ($context["page_title_style"] ?? null)) . ".html.twig"), "themes/custom/white/tpl/page/page--node--page.html.twig", 19)->display($context);
        }
        // line 21
        echo "

<div class=\"section-empty section-item\">
        <div class=\"container content\">
            <div class=\"row\">
                <div class=\"col-md-9 col-sm-12\">
                    <div class=\"grid-list whites-grid-list one-row-list\">
           \t\t\t\t";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
        echo "
                    <div class=\"bread\">     ";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        echo " </div>
                        ";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-12 widget\">
                   ";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
        echo "
                </div>
            </div>
        </div>
    </div>
</div>



";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "section_content", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "themes/custom/white/tpl/page/page--node--page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 43,  103 => 34,  96 => 30,  92 => 29,  88 => 28,  79 => 21,  75 => 19,  73 => 18,  69 => 16,  67 => 15,  64 => 14,  62 => 13,  59 => 12,  55 => 10,  51 => 8,  49 => 7,  45 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/white/tpl/page/page--node--page.html.twig", "/var/www/html/web/themes/custom/white/tpl/page/page--node--page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "set" => 2, "include" => 13);
        static $filters = array("escape" => 28);
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
