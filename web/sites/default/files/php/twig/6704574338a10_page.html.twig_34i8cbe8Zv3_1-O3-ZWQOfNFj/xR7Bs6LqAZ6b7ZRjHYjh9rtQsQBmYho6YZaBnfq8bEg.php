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

/* themes/custom/white/tpl/page/page.html.twig */
class __TwigTemplate_cf03dae22edeac378b94de96ae8c3386 extends \Twig\Template
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
<div id=\"resize\">

";
        // line 15
        $this->loadTemplate((($context["theme_path_no_base"] ?? null) . "/tpl/header/header.html.twig"), "themes/custom/white/tpl/page/page.html.twig", 15)->display($context);
        // line 16
        echo "
";
        // line 17
        $this->loadTemplate((((($context["theme_path_no_base"] ?? null) . "/tpl/menu-tpl/whites-menu--") . ($context["menu_style"] ?? null)) . ".html.twig"), "themes/custom/white/tpl/page/page.html.twig", 17)->display($context);
        // line 18
        echo "
";
        // line 19
        $this->loadTemplate((($context["theme_path_no_base"] ?? null) . "/tpl/top/top.html.twig"), "themes/custom/white/tpl/page/page.html.twig", 19)->display($context);
        // line 20
        echo "

";
        // line 22
        if ((($context["page_title_style"] ?? null) && (($context["page_title_style"] ?? null) != "none"))) {
            // line 23
            echo "\t";
            $this->loadTemplate((((($context["theme_path_no_base"] ?? null) . "/tpl/page-title-tpl/page-title-") . ($context["page_title_style"] ?? null)) . ".html.twig"), "themes/custom/white/tpl/page/page.html.twig", 23)->display($context);
        }
        // line 25
        echo "
  <div class=\"section-empty section-item\">
        <div class=\"container content\">
            <div class=\"row\">
                <div class=\"col-md-9 col-sm-12\">
                    <div class=\"grid-list whites-grid-list one-row-list\">
           \t\t\t<div class=\"bread\"> \t";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        echo " </div>
                        ";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
        echo "
                        ";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-12 widget\">
                   ";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
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
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/white/tpl/page/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 43,  109 => 37,  102 => 33,  98 => 32,  94 => 31,  86 => 25,  82 => 23,  80 => 22,  76 => 20,  74 => 19,  71 => 18,  69 => 17,  66 => 16,  64 => 15,  59 => 12,  55 => 10,  51 => 8,  49 => 7,  45 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/white/tpl/page/page.html.twig", "/var/www/html/web/themes/custom/white/tpl/page/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "set" => 2, "include" => 15);
        static $filters = array("escape" => 31);
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
