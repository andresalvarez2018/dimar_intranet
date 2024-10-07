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

/* themes/custom/white/tpl/block/block--system-menu-block--main.html.twig */
class __TwigTemplate_6994ea1786be75f57a91fa3b8f0c7da8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
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
        // line 37
        echo "

\t";
        // line 39
        $this->displayBlock('content', $context, $blocks);
        // line 42
        echo "


";
    }

    // line 39
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "\t    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 40, $this->source), "html", null, true);
        echo "
\t";
    }

    public function getTemplateName()
    {
        return "themes/custom/white/tpl/block/block--system-menu-block--main.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  60 => 40,  56 => 39,  49 => 42,  47 => 39,  43 => 37,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/white/tpl/block/block--system-menu-block--main.html.twig", "/var/www/html/web/themes/custom/white/tpl/block/block--system-menu-block--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 39);
        static $filters = array("escape" => 40);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block'],
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
