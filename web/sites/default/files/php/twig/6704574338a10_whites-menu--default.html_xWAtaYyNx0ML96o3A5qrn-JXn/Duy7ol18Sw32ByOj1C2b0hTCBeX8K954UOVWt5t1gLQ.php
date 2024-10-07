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

/* themes/custom/white/tpl/menu-tpl/whites-menu--default.html.twig */
class __TwigTemplate_2a2fc73a33b751080e42e507045c1462 extends \Twig\Template
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
        echo "<header class=\"fixed-top scroll-change\" data-menu-anima=\"fade-in\">
    <div class=\"navbar navbar-default mega-menu-fullwidth navbar-fixed-top\" role=\"navigation\">
        <div class=\"navbar navbar-main\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\">
                        <i class=\"fa fa-bars\"></i>
                    </button>
                    <a class=\"navbar-brand\" href=\"";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        echo "\">
                        ";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_logo", [], "any", false, false, true, 10)) ? (t(twig_replace_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_logo", [], "any", false, false, true, 10), 10, $this->source)), "<img>"), ["<img src" => "<img class=\"logo-default\" src"]))) : ("")));
        echo "
                        <img class=\"logo-retina\" src=\"";
        // line 11
        ((($context["menu_retina_logo"] ?? null)) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_first($this->env, ($context["menu_retina_logo"] ?? null)), "html", null, true))) : (print ("")));
        echo "\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 11, $this->source), "html", null, true);
        echo "\" />
                    </a>
                </div>
                <div class=\"collapse navbar-collapse\">
                    ";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "
                    <div class=\"nav navbar-nav navbar-right\">
                        <div class=\"search-box-menu\">
                            <div class=\"search-box scrolldown\">
                                ";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_search", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "
                            </div>

                            <button type=\"button\" class=\"btn btn-default btn-search\">
                                <span class=\"fa fa-search\"></span>
                            </button>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/white/tpl/menu-tpl/whites-menu--default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 19,  66 => 15,  57 => 11,  53 => 10,  49 => 9,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/white/tpl/menu-tpl/whites-menu--default.html.twig", "/var/www/html/web/themes/custom/white/tpl/menu-tpl/whites-menu--default.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("t" => 10, "replace" => 10, "striptags" => 10, "render" => 10, "escape" => 11, "first" => 11);
        static $functions = array("path" => 9);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['t', 'replace', 'striptags', 'render', 'escape', 'first'],
                ['path']
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
