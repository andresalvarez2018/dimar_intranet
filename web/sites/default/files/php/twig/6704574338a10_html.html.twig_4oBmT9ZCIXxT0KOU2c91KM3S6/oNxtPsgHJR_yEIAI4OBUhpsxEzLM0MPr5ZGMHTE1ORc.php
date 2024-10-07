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

/* themes/custom/white/tpl/html/html.html.twig */
class __TwigTemplate_0fcef1a86c472e52f281613df916f192 extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_node"] ?? null), "field_menu_style", [], "any", false, false, true, 1), "value", [], "any", false, false, true, 1)) {
            // line 2
            echo "    ";
            $context["menu_style"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_node"] ?? null), "field_menu_style", [], "any", false, false, true, 2), "value", [], "any", false, false, true, 2);
        } else {
            // line 4
            echo "    ";
            $context["menu_style"] = ($context["theme_menu_style"] ?? null);
        }
        // line 6
        echo "
";
        // line 7
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_node"] ?? null), "field_layout", [], "any", false, false, true, 7), "value", [], "any", false, false, true, 7)) {
            // line 8
            echo "    ";
            $context["layout"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_node"] ?? null), "field_layout", [], "any", false, false, true, 8), "value", [], "any", false, false, true, 8);
        } else {
            // line 10
            echo "    ";
            $context["layout"] = ($context["theme_layout"] ?? null);
        }
        // line 13
        $context["body_classes"] = [0 => ((        // line 14
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), 1 => (( !        // line 15
($context["root_path"] ?? null)) ? ("path-frontpage home") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 15, $this->source))))), 2 => ((        // line 16
($context["node_type"] ?? null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 16, $this->source)))) : ("")), 3 => ((        // line 17
($context["db_offline"] ?? null)) ? ("db-offline") : ("")), 4 => (((        // line 18
($context["menu_style"] ?? null) == "side")) ? ("side-menu-container") : ("")), 5 => (((        // line 19
($context["layout"] ?? null) == "boxed")) ? ("boxed-layout") : (""))];
        // line 22
        echo "
<!DOCTYPE html>

<html";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 25, $this->source), "html", null, true);
        echo ">
<head>
    <title>";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 27, $this->source), " | "));
        echo "</title>
    <!-- Mobile Specific
        ================================================== -->
    <meta name=\"description\" content=\"";
        // line 30
        ((($context["current_title"] ?? null)) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["current_title"] ?? null), "html", null, true))) : (print ("")));
        echo "\">
    <head-placeholder token=\"";
        // line 31
        echo $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 31, $this->source);
        echo "\">
    <css-placeholder token=\"";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 32, $this->source));
        echo "\">
    <js-placeholder token=\"";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 33, $this->source));
        echo "\">
    ";
        // line 34
        if (($context["general_setting_tracking_code"] ?? null)) {
            // line 35
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t($this->sandbox->ensureToStringAllowed(($context["general_setting_tracking_code"] ?? null), 35, $this->source)));
            echo "
    ";
        }
        // line 37
        echo "    ";
        if (($context["custom_css"] ?? null)) {
            // line 38
            echo "      <style type=\"text/css\" media=\"all\">
        ";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t($this->sandbox->ensureToStringAllowed(($context["custom_css"] ?? null), 39, $this->source)));
            echo "
      </style>
    ";
        }
        // line 42
        echo "


    ";
        // line 45
        if (($context["high_contrast"] ?? null)) {
            // line 46
            echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"/themes/whites/css/high_contrast.css\">
    ";
        }
        // line 48
        echo "
</head>

<body";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method", false, false, true, 51), 51, $this->source), "html", null, true);
        echo ">
    <div id=\"preloader\"></div>
    <a href=\"#main-content\" class=\"visually-hidden focusable\">
        ";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        echo "
    </a>
    ";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 56, $this->source), "html", null, true);
        echo "
\t";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 57, $this->source), "html", null, true);
        echo "
\t";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 58, $this->source), "html", null, true);
        echo "
    <!-- JS Files
        ================================================== -->
    <js-bottom-placeholder token=\"";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 61, $this->source));
        echo "\">

    <script type=\"text/javascript\">
        jQuery(document).ready(function () {
            var complemento = \"/intranet\";
            var url = window.location.origin + complemento;
            jQuery(\"img\").each(function(key, item){
                if(jQuery(item).attr(\"src\") != undefined){
                    if(jQuery(item).attr(\"src\").indexOf(\"/sites/\") == 0){
                        var imagen = jQuery(item).attr(\"src\");
                        jQuery(item).attr(\"src\", url + imagen);
                    }
                }
            });

            jQuery(\"a\").each(function(key, item){
                if(jQuery(item).attr(\"href\") != undefined){
                    if(jQuery(item).attr(\"href\").indexOf(\"/sites/\") === 0){
                        var a = jQuery(item).attr(\"href\");
                        jQuery(item).attr(\"href\", url + a);
                    }

                    if(jQuery(item).attr(\"href\").indexOf(\"//\") === 0){
                        var a = jQuery(item).attr(\"href\");
                        jQuery(item).attr(\"href\", \"http:\" + a);
                    }
                }
            });
        });
    </script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/white/tpl/html/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 61,  157 => 58,  153 => 57,  149 => 56,  144 => 54,  138 => 51,  133 => 48,  129 => 46,  127 => 45,  122 => 42,  116 => 39,  113 => 38,  110 => 37,  104 => 35,  102 => 34,  98 => 33,  94 => 32,  90 => 31,  86 => 30,  80 => 27,  75 => 25,  70 => 22,  68 => 19,  67 => 18,  66 => 17,  65 => 16,  64 => 15,  63 => 14,  62 => 13,  58 => 10,  54 => 8,  52 => 7,  49 => 6,  45 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/white/tpl/html/html.html.twig", "/var/www/html/web/themes/custom/white/tpl/html/html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "set" => 2);
        static $filters = array("clean_class" => 15, "escape" => 25, "safe_join" => 27, "raw" => 31, "t" => 35);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['clean_class', 'escape', 'safe_join', 'raw', 't'],
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
