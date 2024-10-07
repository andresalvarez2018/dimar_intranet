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

/* themes/custom/white/tpl/top/top.html.twig */
class __TwigTemplate_0a53e03ad6ed2cb6d238bc6615514b83 extends \Twig\Template
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
        echo "    <i class=\"scroll-top scroll-top-mobile fa fa-sort-asc\"></i>
    <top class=\"top-base\">
        <div class=\"content\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-4 top-center text-left\">
                        ";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_left", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "
                    </div>
                    <div class=\"col-md-4 top-center text-left\">
                        ";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_center", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "
                    </div>
                    <div class=\"col-md-4 top-right text-left\">
                        ";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_right", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row copy-row\">
                <div class=\"col-md-12 copy-text\">
                    ";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_left", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "
                </div>
            </div>
            <div class=\"row copy-row\">
                <div class=\"col-md-12 copy-text\">
                    ";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_center", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
        echo "
                </div>
            </div>
            <div class=\"row copy-row\">
                <div class=\"col-md-12 copy-text\">
                    ";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_right", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        echo "
                </div>
            </div>
        </div>
    </top>";
    }

    public function getTemplateName()
    {
        return "themes/custom/white/tpl/top/top.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 29,  76 => 24,  68 => 19,  59 => 13,  53 => 10,  47 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/white/tpl/top/top.html.twig", "/var/www/html/web/themes/custom/white/tpl/top/top.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 7);
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
