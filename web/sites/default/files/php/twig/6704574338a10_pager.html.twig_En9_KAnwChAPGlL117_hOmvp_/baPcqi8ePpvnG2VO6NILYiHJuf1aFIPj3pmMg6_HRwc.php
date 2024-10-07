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

/* themes/custom/white/tpl/pager/pager.html.twig */
class __TwigTemplate_12894c77995027d2b75c626a7a7f9b14 extends \Twig\Template
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
";
        // line 33
        echo "
";
        // line 34
        if (($context["items"] ?? null)) {
            // line 35
            echo "  <div class=\"list-nav\">
    <ul class=\"pagination-lg pagination-grid pagination\">
      ";
            // line 38
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 38)) {
                // line 39
                echo "        <li class=\"first\"><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 39), "href", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to first page"));
                echo "\"><i class=\"fa fa-angle-double-left\"></i> <span>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("First"));
                echo "</span></a></li>
      ";
            }
            // line 41
            echo "      ";
            // line 42
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 42)) {
                // line 43
                echo "          <li class=\"prev\"><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 43), "href", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
                echo "\"> <i class=\"fa fa-angle-left\"></i> <span>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous"));
                echo "</span></a></li>
      ";
            }
            // line 45
            echo "      ";
            // line 46
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "pages", [], "any", false, false, true, 46));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 47
                echo "          ";
                if ((($context["current"] ?? null) == $context["key"])) {
                    // line 48
                    echo "            ";
                    $context["title"] = t("Current page");
                    // line 49
                    echo "          ";
                } else {
                    // line 50
                    echo "            ";
                    $context["title"] = t("Go to page @key", ["@key" => $context["key"]]);
                    // line 51
                    echo "          ";
                }
                // line 52
                echo "          ";
                if ((($context["current"] ?? null) == $context["key"])) {
                    // line 53
                    echo "            <li class=\"page active\" title=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 53, $this->source), "html", null, true);
                    echo "\"><a href=\"#\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 53, $this->source), "html", null, true);
                    echo "</a></li>
          ";
                } else {
                    // line 55
                    echo "            <li class=\"page\"><a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
                    echo "\" title=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 55, $this->source), "html", null, true);
                    echo "\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 55, $this->source), "html", null, true);
                    echo "</a></li>
          ";
                }
                // line 57
                echo "          
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "      ";
            // line 60
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 60)) {
                // line 61
                echo "        <li class=\"next\"><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 61), "href", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
                echo "\"><span>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next"));
                echo "</span> <i class=\"fa fa-angle-right\"></i></a></li>
      ";
            }
            // line 63
            echo "      ";
            // line 64
            echo "      
      ";
            // line 65
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 65)) {
                // line 66
                echo "        <li class=\"last\"><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 66), "href", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to last page"));
                echo "\"><span>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last"));
                echo "</span> <i class=\"fa fa-angle-double-right\"></i></a></li>
      ";
            }
            // line 68
            echo "    </ul>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/white/tpl/pager/pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 68,  151 => 66,  149 => 65,  146 => 64,  144 => 63,  134 => 61,  131 => 60,  129 => 59,  122 => 57,  112 => 55,  104 => 53,  101 => 52,  98 => 51,  95 => 50,  92 => 49,  89 => 48,  86 => 47,  81 => 46,  79 => 45,  69 => 43,  66 => 42,  64 => 41,  54 => 39,  51 => 38,  47 => 35,  45 => 34,  42 => 33,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/white/tpl/pager/pager.html.twig", "/var/www/html/web/themes/custom/white/tpl/pager/pager.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 34, "for" => 46, "set" => 48);
        static $filters = array("escape" => 39, "t" => 39);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape', 't'],
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
