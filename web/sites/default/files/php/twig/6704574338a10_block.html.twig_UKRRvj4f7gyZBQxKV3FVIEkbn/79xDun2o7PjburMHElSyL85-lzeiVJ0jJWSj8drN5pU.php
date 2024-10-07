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

/* themes/custom/white/tpl/block/block.html.twig */
class __TwigTemplate_77a6965f34f23783a85816dfe69ea143 extends \Twig\Template
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
        // line 28
        echo "

";
        // line 30
        if ((($context["region"] ?? null) == "section_content")) {
            // line 31
            echo "<div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 31, $this->source), "html", null, true);
            echo ">
  ";
            // line 32
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 32, $this->source), "html", null, true);
            echo "
  ";
            // line 33
            if (($context["content"] ?? null)) {
                // line 34
                echo "    ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 34, $this->source), "html", null, true);
                echo "
  ";
            }
            // line 35
            echo " 
</div>
";
        } elseif ((        // line 37
($context["region"] ?? null) == "slider")) {
            // line 38
            echo "<div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "whites-homeslider"], "method", false, false, true, 38), 38, $this->source), "html", null, true);
            echo ">
    ";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 39, $this->source), "html", null, true);
            echo "
    ";
            // line 40
            if (($context["content"] ?? null)) {
                // line 41
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 41, $this->source), "html", null, true);
                echo "
    ";
            }
            // line 42
            echo " 
</div>
";
        } elseif ((        // line 44
($context["region"] ?? null) == "breadcrumb")) {
            // line 45
            echo "
  ";
            // line 46
            if (($context["content"] ?? null)) {
                // line 47
                echo "    ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 47, $this->source), "html", null, true);
                echo "
  ";
            }
            // line 49
            echo "
";
        } elseif ((        // line 50
($context["region"] ?? null) == "header_search")) {
            // line 51
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 51, $this->source), "html", null, true);
            echo ">
    ";
            // line 52
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 52, $this->source), "html", null, true);
            echo "
    ";
            // line 53
            if (($context["content"] ?? null)) {
                // line 54
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 54, $this->source), "html", null, true);
                echo "
    ";
            }
            // line 56
            echo "  </div>
";
        } elseif ((        // line 57
($context["region"] ?? null) == "content")) {
            // line 58
            echo "  ";
            if (($context["content"] ?? null)) {
                // line 59
                echo "    ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 59, $this->source), "html", null, true);
                echo "
  ";
            }
        } elseif ((        // line 61
($context["region"] ?? null) == "sidebar")) {
            // line 62
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "list-group"], "method", false, false, true, 62), 62, $this->source), "html", null, true);
            echo ">
    ";
            // line 63
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 63, $this->source), "html", null, true);
            echo "
    ";
            // line 64
            if (($context["label"] ?? null)) {
                // line 65
                echo "      <p class=\"list-group-item active\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 65, $this->source), "html", null, true);
                echo "</p>
    ";
            }
            // line 67
            echo "    ";
            if (($context["content"] ?? null)) {
                // line 68
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 68, $this->source), "html", null, true);
                echo "
    ";
            }
            // line 70
            echo "  </div>
";
        } elseif (((((        // line 71
($context["region"] ?? null) == "footer_first") || (($context["region"] ?? null) == "footer_second")) || (($context["region"] ?? null) == "footer_fourth")) || (($context["region"] ?? null) == "footer_fifth"))) {
            // line 72
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 72, $this->source), "html", null, true);
            echo ">
    ";
            // line 73
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 73, $this->source), "html", null, true);
            echo "
    ";
            // line 74
            if (($context["label"] ?? null)) {
                // line 75
                echo "      <h3>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 75, $this->source), "html", null, true);
                echo "</h3>
    ";
            }
            // line 77
            echo "    ";
            ((($context["content"] ?? null)) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true))) : (print ("")));
            echo "
  </div>
";
        } elseif ((        // line 79
($context["region"] ?? null) == "footer_third")) {
            // line 80
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 80, $this->source), "html", null, true);
            echo ">
    ";
            // line 81
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 81, $this->source), "html", null, true);
            echo "
    ";
            // line 82
            if (($context["label"] ?? null)) {
                // line 83
                echo "      <h3>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 83, $this->source), "html", null, true);
                echo "</h3>
    ";
            }
            // line 85
            echo "    ";
            ((($context["content"] ?? null)) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true))) : (print ("")));
            echo "
  </div>
  <hr class=\"space s\" />
";
        } else {
            // line 89
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 89, $this->source), "html", null, true);
            echo ">
    ";
            // line 90
            if (($context["label"] ?? null)) {
                // line 91
                echo "      <h2";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 91, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 91, $this->source), "html", null, true);
                echo "</h2>
    ";
            }
            // line 93
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 93, $this->source), "html", null, true);
            echo "
    ";
            // line 94
            if (($context["content"] ?? null)) {
                // line 95
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 95, $this->source), "html", null, true);
                echo "
    ";
            }
            // line 97
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/white/tpl/block/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 97,  243 => 95,  241 => 94,  236 => 93,  228 => 91,  226 => 90,  221 => 89,  213 => 85,  207 => 83,  205 => 82,  201 => 81,  196 => 80,  194 => 79,  188 => 77,  182 => 75,  180 => 74,  176 => 73,  171 => 72,  169 => 71,  166 => 70,  160 => 68,  157 => 67,  151 => 65,  149 => 64,  145 => 63,  140 => 62,  138 => 61,  132 => 59,  129 => 58,  127 => 57,  124 => 56,  118 => 54,  116 => 53,  112 => 52,  107 => 51,  105 => 50,  102 => 49,  96 => 47,  94 => 46,  91 => 45,  89 => 44,  85 => 42,  79 => 41,  77 => 40,  73 => 39,  68 => 38,  66 => 37,  62 => 35,  56 => 34,  54 => 33,  50 => 32,  45 => 31,  43 => 30,  39 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/white/tpl/block/block.html.twig", "/var/www/html/web/themes/custom/white/tpl/block/block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 30);
        static $filters = array("escape" => 31);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
