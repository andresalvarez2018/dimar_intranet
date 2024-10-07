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

/* themes/custom/white/tpl/menu/menu--main.html.twig */
class __TwigTemplate_1b90b1fa288141a0f8ea5c1858d58cfc extends \Twig\Template
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
        // line 24
        echo "

";
        // line 26
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 31
        $context["node"] = ($context["menu__node"] ?? null);
        // line 32
        echo "
";
        // line 33
        $context["theme_menu_style__menu_style"] = ($context["theme_menu_style"] ?? null);
        // line 34
        echo "
";
        // line 35
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_menu_style", [], "any", false, false, true, 35), "value", [], "any", false, false, true, 35)) {
            // line 36
            echo "    ";
            $context["menu_style"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_menu_style", [], "any", false, false, true, 36), "value", [], "any", false, false, true, 36);
        } else {
            // line 38
            echo "    ";
            $context["menu_style"] = ($context["theme_menu_style__menu_style"] ?? null);
        }
        // line 40
        echo "
";
        // line 41
        $context["menu__site_name"] = ($context["site_name"] ?? null);
        // line 42
        echo "
";
        // line 43
        $context["m_middle_logo"] = ($context["menu_middle_logo"] ?? null);
        // line 44
        echo "
";
        // line 45
        $context["count_items_lv0"] = twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["items"] ?? null), 45, $this->source));
        // line 46
        $context["middle"] = ((int) floor((($context["count_items_lv0"] ?? null) / 2)) + 1);
        // line 47
        echo "
";
        // line 48
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0, false, false, ($context["middle"] ?? null), ($context["m_middle_logo"] ?? null), ($context["menu_style"] ?? null), ($context["menu__site_name"] ?? null)], 48, $context, $this->getSourceContext()));
        echo "

";
        // line 120
        echo "


";
    }

    // line 50
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__is_item_mega__ = null, $__mega_ul__ = null, $__middle__ = null, $__m_middle_logo__ = null, $__menu_style__ = null, $__menu__site_name__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "is_item_mega" => $__is_item_mega__,
            "mega_ul" => $__mega_ul__,
            "middle" => $__middle__,
            "m_middle_logo" => $__m_middle_logo__,
            "menu_style" => $__menu_style__,
            "menu__site_name" => $__menu__site_name__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 51
            echo "  ";
            $macros["menus"] = $this;
            // line 52
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 53
                echo "
    ";
                // line 54
                $context["bl"] = ($context["is_item_mega"] ?? null);
                // line 55
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 56
                    echo "      <ul";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "nav", 1 => "navbar-nav"], "method", false, false, true, 56), 56, $this->source), "html", null, true);
                    echo ">
    ";
                } else {
                    // line 58
                    echo "      ";
                    if ((($context["is_item_mega"] ?? null) == true)) {
                        // line 59
                        echo "        <div class=\"mega-menu dropdown-menu multi-level row bg-menu\">
          <div class=\"tab-box\" data-tab-anima=\"fade-left\">
            <div class=\"panel active\">
      ";
                    } else {
                        // line 63
                        echo "        ";
                        if ((($context["mega_ul"] ?? null) == true)) {
                            // line 64
                            echo "          <ul class=\"fa-ul text-s\">
        ";
                        } else {
                            // line 66
                            echo "          <ul class=\"dropdown-menu multi-level\">
        ";
                        }
                        // line 68
                        echo "      ";
                    }
                    // line 69
                    echo "    ";
                }
                // line 70
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 71
                    echo "      ";
                    if ((($context["menu_style"] ?? null) == "middle-logo")) {
                        // line 72
                        echo "        ";
                        if ((($context["menu_level"] ?? null) == 0)) {
                            // line 73
                            echo "          ";
                            $context["total"] = (($context["total"] ?? null) + 1);
                            // line 74
                            echo "        ";
                        }
                        // line 75
                        echo "      ";
                    }
                    // line 76
                    echo "
      ";
                    // line 77
                    $context["is_item_mega"] = false;
                    // line 78
                    echo "      ";
                    if (twig_in_filter("whites-mega-menu", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 78), "class", [], "any", false, false, true, 78))) {
                        // line 79
                        echo "        ";
                        $context["is_item_mega"] = true;
                        // line 80
                        echo "      ";
                    }
                    // line 81
                    echo "
      ";
                    // line 82
                    $context["item_classes"] = [0 => "dropdown", 1 => ((twig_in_filter("whites-mega-menu", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 82), "class", [], "any", false, false, true, 82))) ? ("mega-dropdown") : ("")), 2 => ((twig_in_filter("whites-mega-menu", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 82), "class", [], "any", false, false, true, 82))) ? ("mega-tabs") : ("")), 3 => ((((($context["menu_level"] ?? null) != 0) && twig_get_attribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 82))) ? ("dropdown-submenu") : (""))];
                    // line 83
                    echo "
      ";
                    // line 84
                    if (twig_in_filter("whites-mega-menu-child", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 84), "class", [], "any", false, false, true, 84))) {
                        // line 85
                        echo "        <div class=\"col\">
          <h5>";
                        // line 86
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
                        echo "</h5>
          ";
                        // line 87
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 87), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1), ($context["is_item_mega"] ?? null), true, ($context["middle"] ?? null), ($context["m_middle_logo"] ?? null), ($context["menu_style"] ?? null), ($context["menu__site_name"] ?? null)], 87, $context, $this->getSourceContext()));
                        echo "
        </div>
      ";
                    } else {
                        // line 90
                        echo "        
        <li";
                        // line 91
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 91), "addClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 91), 91, $this->source), "html", null, true);
                        echo ">
          <a href=\"";
                        // line 92
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
                        echo "\" class=\"menux";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 92)) ? (" active") : ("")));
                        echo "\" data-toggle=\"dropdown\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
                        if (((($context["menu_level"] ?? null) == 0) && twig_get_attribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 92))) {
                            echo " <span class=\"caret\"></span>";
                        }
                        echo "</a>
          ";
                        // line 93
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 93)) {
                            // line 94
                            echo "            ";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 94), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1), ($context["is_item_mega"] ?? null), false, ($context["middle"] ?? null), ($context["m_middle_logo"] ?? null), ($context["menu_style"] ?? null), ($context["menu__site_name"] ?? null)], 94, $context, $this->getSourceContext()));
                            echo "
          ";
                        }
                        // line 96
                        echo "        </li>
      ";
                    }
                    // line 98
                    echo "      ";
                    // line 99
                    echo "      ";
                    if ((($context["menu_style"] ?? null) == "middle-logo")) {
                        // line 100
                        echo "        ";
                        if ((($context["total"] ?? null) == ($context["middle"] ?? null))) {
                            // line 101
                            echo "          <li class=\"logo-item\"><a href=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
                            echo "\"><img src=\"";
                            ((($context["m_middle_logo"] ?? null)) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_first($this->env, ($context["m_middle_logo"] ?? null)), "html", null, true))) : (print ("")));
                            echo "\" alt=\"";
                            ((($context["menu__site_name"] ?? null)) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["menu__site_name"] ?? null), "html", null, true))) : (print ("Middle logo")));
                            echo "\"></a></li>
        ";
                        }
                        // line 103
                        echo "      ";
                    }
                    // line 104
                    echo "      ";
                    // line 105
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 106
                echo "
    ";
                // line 107
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 108
                    echo "      </ul>
    ";
                } else {
                    // line 110
                    echo "      ";
                    if (((($context["bl"] ?? null) == 1) || (($context["bl"] ?? null) == true))) {
                        // line 111
                        echo "          </div>
        </div>
      </div>
      ";
                    } else {
                        // line 115
                        echo "        </ul>
      ";
                    }
                    // line 117
                    echo "    ";
                }
                // line 118
                echo "  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/white/tpl/menu/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 118,  305 => 117,  301 => 115,  295 => 111,  292 => 110,  288 => 108,  286 => 107,  283 => 106,  277 => 105,  275 => 104,  272 => 103,  262 => 101,  259 => 100,  256 => 99,  254 => 98,  250 => 96,  244 => 94,  242 => 93,  231 => 92,  227 => 91,  224 => 90,  218 => 87,  214 => 86,  211 => 85,  209 => 84,  206 => 83,  204 => 82,  201 => 81,  198 => 80,  195 => 79,  192 => 78,  190 => 77,  187 => 76,  184 => 75,  181 => 74,  178 => 73,  175 => 72,  172 => 71,  167 => 70,  164 => 69,  161 => 68,  157 => 66,  153 => 64,  150 => 63,  144 => 59,  141 => 58,  135 => 56,  132 => 55,  130 => 54,  127 => 53,  124 => 52,  121 => 51,  100 => 50,  93 => 120,  88 => 48,  85 => 47,  83 => 46,  81 => 45,  78 => 44,  76 => 43,  73 => 42,  71 => 41,  68 => 40,  64 => 38,  60 => 36,  58 => 35,  55 => 34,  53 => 33,  50 => 32,  48 => 31,  46 => 26,  42 => 24,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/white/tpl/menu/menu--main.html.twig", "/var/www/html/web/themes/custom/white/tpl/menu/menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 26, "set" => 31, "if" => 35, "macro" => 50, "for" => 70);
        static $filters = array("length" => 45, "escape" => 56, "first" => 101);
        static $functions = array("path" => 101);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'set', 'if', 'macro', 'for'],
                ['length', 'escape', 'first'],
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
