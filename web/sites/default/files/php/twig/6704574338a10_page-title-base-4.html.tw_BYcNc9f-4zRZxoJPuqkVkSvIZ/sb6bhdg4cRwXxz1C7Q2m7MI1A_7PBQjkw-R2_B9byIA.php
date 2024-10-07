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

/* themes/custom/white/tpl/page-title-tpl/page-title-base-4.html.twig */
class __TwigTemplate_e09f0310ddb1f3a1e2d75acfd13fc524 extends \Twig\Template
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
        // line 2
        if (($context["field_pt_image_backgroun"] ?? null)) {
            // line 3
            echo "    ";
            $context["bg_imgs"] = ($context["field_pt_image_backgroun"] ?? null);
        } else {
            // line 5
            echo "    ";
            $context["bg_imgs"] = ($context["background_page_title_image"] ?? null);
        }
        // line 8
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_subtitle", [], "any", false, false, true, 8), "value", [], "any", false, false, true, 8)) {
            // line 9
            echo "    ";
            $context["subtitle"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_subtitle", [], "any", false, false, true, 9), "value", [], "any", false, false, true, 9);
        } elseif ((        // line 10
($context["current_page"] ?? null) == "blog")) {
            // line 11
            echo "    ";
            $context["subtitle"] = ($context["blog_page_subtitle"] ?? null);
            // line 12
            echo "    ";
            $context["bg_imgs"] = ($context["blog_background_page_title_image"] ?? null);
        } else {
            // line 14
            echo "    ";
            $context["subtitle"] = ($context["page_subtitle"] ?? null);
        }
        // line 16
        echo "<div class=\"header-title white\" data-parallax=\"scroll\" data-position=\"top\" data-natural-height=\"650\" data-natural-width=\"1920\" data-image-src=\"";
        ((($context["bg_imgs"] ?? null)) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_first($this->env, ($context["bg_imgs"] ?? null)), "html", null, true))) : (print ("")));
        echo "\">
    <div class=\"container\">
        <div class=\"title-base\">
            <hr class=\"anima\" />
            <h1>";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_title"] ?? null), 20, $this->source), "html", null, true);
        echo "</h1>
            ";
        // line 21
        if (!twig_in_filter("Lorem ipsum dolor sit ame", ($context["subtitle"] ?? null))) {
            // line 22
            echo "                <p>";
            ((($context["subtitle"] ?? null)) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["subtitle"] ?? null), "html", null, true))) : (print ("")));
            echo "</p> 
            ";
        }
        // line 24
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/white/tpl/page-title-tpl/page-title-base-4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 24,  84 => 22,  82 => 21,  78 => 20,  70 => 16,  66 => 14,  62 => 12,  59 => 11,  57 => 10,  54 => 9,  52 => 8,  48 => 5,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/white/tpl/page-title-tpl/page-title-base-4.html.twig", "/var/www/html/web/themes/custom/white/tpl/page-title-tpl/page-title-base-4.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2, "set" => 3);
        static $filters = array("escape" => 16, "first" => 16);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 'first'],
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
