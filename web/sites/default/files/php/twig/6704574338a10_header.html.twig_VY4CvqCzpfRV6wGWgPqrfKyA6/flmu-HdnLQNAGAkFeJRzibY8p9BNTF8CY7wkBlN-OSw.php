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

/* themes/custom/white/tpl/header/header.html.twig */
class __TwigTemplate_6865c7d6e54e36689dfae7b7dfd2cf73 extends \Twig\Template
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
        echo "  

    <i class=\"scroll-top scroll-top-mobile fa fa-sort-asc\"></i>
    <header class=\"header-base\">
        <div class=\"content\">
\t        <div class=\"row copy-row\">
\t            <div class=\"col-md-12 copy-text\">
        \t        <div class=\"col-md-4 copy-text\">
                \t\t";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "encabezado_1", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "
                \t</div>
                \t<div class=\"col-md-4 copy-text\">
                                ";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "encabezado_2", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "
                \t</div>
                \t<div class=\"col-md-4 copy-text\">
                                ";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "encabezado_3", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "
\t                </div>
                    </div>
                </div>
        </div>
    </header>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/white/tpl/header/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 15,  55 => 12,  49 => 9,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/white/tpl/header/header.html.twig", "/var/www/html/web/themes/custom/white/tpl/header/header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 9);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
