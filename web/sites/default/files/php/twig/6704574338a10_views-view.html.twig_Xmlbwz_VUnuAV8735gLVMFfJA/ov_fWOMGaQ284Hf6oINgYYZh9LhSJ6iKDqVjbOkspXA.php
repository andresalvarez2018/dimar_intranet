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

/* themes/custom/white/tpl/view/views-view.html.twig */
class __TwigTemplate_2d86518a797e2a6c89d7ad106a46c816 extends \Twig\Template
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
        // line 35
        if ((($context["id"] ?? null) == "blog")) {
            // line 36
            echo "  ";
            if ((($context["blog_listing_style"] ?? null) == "grid")) {
                // line 37
                echo "    <div class=\"grid-box row\">
      ";
                // line 38
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 38, $this->source), "html", null, true);
                echo "
    </div>     
    ";
                // line 40
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 40, $this->source), "html", null, true);
                echo "
  ";
            } elseif ((            // line 41
($context["blog_listing_style"] ?? null) == "minimal")) {
                // line 42
                echo "    <div class=\"grid-box\">
      ";
                // line 43
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 43, $this->source), "html", null, true);
                echo "
    </div>
    ";
                // line 45
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 45, $this->source), "html", null, true);
                echo "
  ";
            } else {
                // line 47
                echo "    <div class=\"grid-box row\">
      ";
                // line 48
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 48, $this->source), "html", null, true);
                echo "                   
    </div>
    ";
                // line 50
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 50, $this->source), "html", null, true);
                echo "
  ";
            }
        } elseif ((        // line 52
($context["id"] ?? null) == "_whites_taxonomy_terms")) {
            // line 53
            echo "    ";
            if ((($context["display_id"] ?? null) == "sidebar_blog_categories")) {
                // line 54
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 54, $this->source), "html", null, true);
                echo "
    ";
            } elseif ((            // line 55
($context["display_id"] ?? null) == "sidebar_blog_tags")) {
                // line 56
                echo "      <div class=\"tagbox\">
        ";
                // line 57
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 57, $this->source), "html", null, true);
                echo "
        <div class=\"clear\"></div>
      </div>
    ";
            } elseif ((            // line 60
($context["display_id"] ?? null) == "block_portfolio_categories")) {
                // line 61
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 61, $this->source), "html", null, true);
                echo "
      ";
                // line 62
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 62, $this->source), "html", null, true);
                echo "    
    ";
            } else {
                // line 64
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 64, $this->source), "html", null, true);
                echo "
      <div id=\"filtro\"> ";
                // line 65
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 65, $this->source), "html", null, true);
                echo "</div>
      ";
                // line 66
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 66, $this->source), "html", null, true);
                echo "
      ";
                // line 67
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 67, $this->source), "html", null, true);
                echo "
      ";
                // line 68
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 68, $this->source), "html", null, true);
                echo "
      ";
                // line 69
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 69, $this->source), "html", null, true);
                echo "
      ";
                // line 70
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 70, $this->source), "html", null, true);
                echo "
    ";
            }
            // line 72
            echo "
";
        } elseif ((        // line 73
($context["id"] ?? null) == "_whites_section_content")) {
            // line 74
            echo "  ";
            if ((($context["display_id"] ?? null) == "testimonials_activity")) {
                // line 75
                echo "    <div class=\"section-empty\">
      <div class=\"container content\">
        ";
                // line 77
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 77, $this->source), "html", null, true);
                echo "
        <hr class=\"space m\" />
        <div class=\"row\">
          <div class=\"col-md-8 col-center\">
            <div class=\"flexslider slider\" data-options=\"controlNav:true,directionNav:false\">
              <ul class=\"slides\">
                 ";
                // line 83
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 83, $this->source), "html", null, true);
                echo "
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  ";
            } elseif ((            // line 90
($context["display_id"] ?? null) == "partners_activity")) {
                // line 91
                echo "    <div class=\"section-bg-color\">
        <div class=\"container content\">
            <div class=\"flexslider carousel outer-navs png-over text-center\" data-options=\"numItems:5,minWidth:100,itemMargin:30,controlNav:false\">
                <ul class=\"slides\">
                  ";
                // line 95
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 95, $this->source), "html", null, true);
                echo "
                </ul>
            </div>
        </div>
    </div>
  ";
            } elseif ((            // line 100
($context["display_id"] ?? null) == "blog_posts_app")) {
                // line 101
                echo "    <div class=\"section-bg-color\">
      <div class=\"container content\">
        ";
                // line 103
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 103, $this->source), "html", null, true);
                echo "
        <div class=\"flexslider carousel outer-navs\" data-options=\"minWidth:200,itemMargin:15,numItems:2,controlNav:false,directionNav:true\">
          <ul class=\"slides\">
            ";
                // line 106
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 106, $this->source), "html", null, true);
                echo "
          </ul>
        </div>
      </div>
    </div>
  ";
            } elseif ((            // line 111
($context["display_id"] ?? null) == "blog_posts_business")) {
                // line 112
                echo "    <div class=\"section-empty\">
      <div class=\"container content\">
        <div class=\"row text-center\">
          <div class=\"col-md-8 col-center\">
            ";
                // line 116
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 116, $this->source), "html", null, true);
                echo "
          </div>
        </div>
        <hr class=\"space\" />
        <div class=\"flexslider outer-navs carousel\" data-options=\"minWidth:250,itemMargin:15,numItems:3,controlNav:true,directionNav:true\">
          <ul class=\"slides\">
            ";
                // line 122
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 122, $this->source), "html", null, true);
                echo "
          </ul>
        </div>
      </div>
    </div>
  ";
            } elseif ((            // line 127
($context["display_id"] ?? null) == "team_event")) {
                // line 128
                echo "    <div class=\"section-empty\">
      <div class=\"container content\">
        <div class=\"row\">
          ";
                // line 131
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 131, $this->source), "html", null, true);
                echo "
        </div>
        <hr class=\"space m\" />
        <div class=\"grid-list\">
          <div class=\"grid-box small-margins row\">
            ";
                // line 136
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 136, $this->source), "html", null, true);
                echo "
          </div>
        </div>
      </div>
    </div>
  ";
            } elseif ((            // line 141
($context["display_id"] ?? null) == "testimonials_main")) {
                // line 142
                echo "    <div class=\"container content\">
      <div class=\"row\">
          <div class=\"col-md-8 col-center text-center\">
              <div class=\"flexslider slider nav-inner-bottom-right\" data-options=\"controlNav:true,directionNav:false\">
                  <ul class=\"slides\">
                      ";
                // line 147
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 147, $this->source), "html", null, true);
                echo "
                  </ul>
              </div>
          </div>
      </div>
    </div>
  ";
            } elseif ((            // line 153
($context["display_id"] ?? null) == "blog_posts_main")) {
                // line 154
                echo "    <div class=\"section-empty\">
      <div class=\"container content\">
          <div class=\"flexslider carousel outer-navs\" data-options=\"minWidth:250,itemMargin:30,numItems:3,controlNav:true,directionNav:true\">
              <ul class=\"slides\">

                 ";
                // line 159
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 159, $this->source), "html", null, true);
                echo "
              </ul>
          </div>
      </div>
    </div>
  ";
            } elseif ((            // line 164
($context["display_id"] ?? null) == "services_management")) {
                // line 165
                echo "    <div class=\"container content text-center\">
      <hr class=\"space\" />
      ";
                // line 167
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 167, $this->source), "html", null, true);
                echo "
      <div class=\"maso-list\">
         
          <div class=\"maso-box row\">
              ";
                // line 171
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 171, $this->source), "html", null, true);
                echo "
              <div class=\"clear\"></div>
          </div>
      </div>
      <hr class=\"space l\" />
      ";
                // line 176
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 176, $this->source), "html", null, true);
                echo "
    </div>
  ";
            } elseif ((            // line 178
($context["display_id"] ?? null) == "testimonials_management")) {
                // line 179
                echo "    <div class=\"section-empty\">
      <div class=\"container content\">
          <div class=\"flexslider carousel outer-navs\" data-options=\"numItems:3,itemMargin:15,controlNav:true,directionNav:true\">
              <ul class=\"slides\">
                  ";
                // line 183
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 183, $this->source), "html", null, true);
                echo "
              </ul>
          </div>
      </div>
    </div>
  ";
            } elseif ((            // line 188
($context["display_id"] ?? null) == "team_members_marketplace")) {
                // line 189
                echo "    <div class=\"section-empty text-center\">
        <div class=\"container content\">
            ";
                // line 191
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 191, $this->source), "html", null, true);
                echo "
            <hr class=\"space m\" />
            <div class=\"flexslider carousel outer-navs\" data-options=\"minWidth:200,itemMargin:15,numItems:4,controlNav:true,directionNav:true\">
                <ul class=\"slides\">

                    ";
                // line 196
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 196, $this->source), "html", null, true);
                echo "
                </ul>
            </div>
        </div>
    </div>
  ";
            } elseif ((            // line 201
($context["display_id"] ?? null) == "testimonials_side_menu")) {
                // line 202
                echo "    <div class=\"section-bg-color\">
      <div class=\"container content\">
          <div class=\"flexslider slider outer-navs\" data-options=\"minWidth:250,controlNav:false\">
              <ul class=\"slides\">

                  ";
                // line 207
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 207, $this->source), "html", null, true);
                echo "
              </ul>
          </div>
      </div>
    </div>
  ";
            } elseif ((            // line 212
($context["display_id"] ?? null) == "blog_posts_side_menu")) {
                // line 213
                echo "    <div class=\"section-empty\">
      <div class=\"container content\">
          ";
                // line 215
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 215, $this->source), "html", null, true);
                echo "
          <hr class=\"space m\" />
          <div class=\"flexslider carousel\" data-options=\"numItems:3,minWidth:250,itemMargin:30,directionNav:false\">
              <ul class=\"slides\">
                  ";
                // line 219
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 219, $this->source), "html", null, true);
                echo "
              </ul>
          </div>
      </div>
    </div>
  ";
            } elseif ((            // line 224
($context["display_id"] ?? null) == "services_startup")) {
                // line 225
                echo "    <div class=\"container content text-center\">
      <hr class=\"space\" />
      ";
                // line 227
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 227, $this->source), "html", null, true);
                echo "
      <div class=\"maso-list\">
         
          <div class=\"maso-box row\">
              ";
                // line 231
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 231, $this->source), "html", null, true);
                echo "
              <div class=\"clear\"></div>
          </div>
      </div>
      <hr class=\"space l\" />
    </div>
  ";
            } elseif ((            // line 237
($context["display_id"] ?? null) == "testimonials_startup")) {
                // line 238
                echo "    <div class=\"section-empty\">
      <div class=\"container content\">
          <div class=\"row\">
              <div class=\"col-md-3\">
                  ";
                // line 242
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 242, $this->source), "html", null, true);
                echo "
              </div>
              ";
                // line 244
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 244, $this->source), "html", null, true);
                echo "
          </div>
      </div>
    </div>
  ";
            } elseif ((            // line 248
($context["display_id"] ?? null) == "testimonials_video")) {
                // line 249
                echo "    <div class=\"section-empty\">
      <div class=\"container content\">
          <div class=\"row\">
              <div class=\"col-md-9 col-sm-12 text-center-sm\">
                  <div class=\"flexslider slider nav-inner-bottom-right\" data-options=\"controlNav:true,directionNav:false\">
                      <ul class=\"slides\">
                          ";
                // line 255
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 255, $this->source), "html", null, true);
                echo "
                      </ul>
                  </div>
              </div>
              <div class=\"col-md-3 col-sm-12 text-center-sm\">
                  ";
                // line 260
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 260, $this->source), "html", null, true);
                echo "
              </div>
          </div>
      </div>
    </div>
  ";
            } elseif ((            // line 265
($context["display_id"] ?? null) == "blog_posts_video")) {
                // line 266
                echo "    <div class=\"section-empty section-item no-paddings\">
        <div class=\"flexslider carousel visible-dir-nav white\" data-options=\"minWidth:200,itemMargin:10,numItems:5,controlNav:false,directionNav:true\">
            <ul class=\"slides\">
              ";
                // line 269
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 269, $this->source), "html", null, true);
                echo "
            </ul>
        </div>
        <hr class=\"space m\" />
    </div>
  ";
            } elseif ((            // line 274
($context["display_id"] ?? null) == "testimonials_web_service")) {
                // line 275
                echo "    <div class=\"container content\">
      <div class=\"row\">
          <div class=\"col-md-8 col-center\">
              ";
                // line 278
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 278, $this->source), "html", null, true);
                echo "
              <div class=\"flexslider slider outer-navs white\" data-options=\"controlNav:true,directionNav:true\">
                  <ul class=\"slides\">
                      ";
                // line 281
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 281, $this->source), "html", null, true);
                echo "
                  </ul>
              </div>
          </div>
      </div>
    </div>
  ";
            } elseif ((            // line 287
($context["display_id"] ?? null) == "team_members_page")) {
                // line 288
                echo "    <div class=\"content-parallax\">
        <div class=\"section-empty section-item text-center\">
            <div class=\"container content\">
                ";
                // line 291
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 291, $this->source), "html", null, true);
                echo "
                <hr class=\"space m\" />
                <div class=\"row\">
                  ";
                // line 294
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 294, $this->source), "html", null, true);
                echo "
                </div>
                
            </div>
        </div>
    </div>
  ";
            } elseif ((            // line 300
($context["display_id"] ?? null) == "services_1")) {
                // line 301
                echo "    <div class=\"section-empty section-item\">
        <div class=\"container content\">
            <div class=\"grid-list gallery list-sm-6\">
                <div class=\"grid-box row\">
                    ";
                // line 305
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 305, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 307
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 307, $this->source), "html", null, true);
                echo "
            </div>
        </div>
    </div>
  ";
            } elseif ((            // line 311
($context["display_id"] ?? null) == "services_2")) {
                // line 312
                echo "    <div class=\"section-empty\">
      <div class=\"container content\">
          <div class=\"grid-list columns-list list-sm-6\">
              <div class=\"grid-box row\">
                ";
                // line 316
                if (($context["rows"] ?? null)) {
                    // line 317
                    echo "                  ";
                    $context["k"] = 1;
                    // line 318
                    echo "                  ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["rows"] ?? null), 0, [], "any", false, false, true, 318)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#rows"] ?? null) : null));
                    foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                        // line 319
                        echo "                    ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["row"], 319, $this->source), "html", null, true);
                        echo "
                    ";
                        // line 320
                        if ((($context["k"] ?? null) == 3)) {
                            // line 321
                            echo "                      <div class=\"clear\"></div>
                      ";
                            // line 322
                            $context["k"] = 0;
                            // line 323
                            echo "                    ";
                        }
                        // line 324
                        echo "                    ";
                        $context["k"] = (($context["k"] ?? null) + 1);
                        // line 325
                        echo "                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 326
                    echo "                ";
                }
                // line 327
                echo "                <div class=\"clear\"></div>
              </div>
              ";
                // line 329
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 329, $this->source), "html", null, true);
                echo "
          </div>
      </div>
    </div>
  ";
            } elseif ((            // line 333
($context["display_id"] ?? null) == "gallery_album")) {
                // line 334
                echo "    <div class=\"section-empty section-item\">
        <div class=\"container content\">
            <div class=\"album-main\" data-album-anima=\"fade-bottom\">
                <div class=\"album-list row\">
                    ";
                // line 338
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 338, $this->source), "html", null, true);
                echo "
                    <!-- INSERT OTHERS ALBUMS MENU ITEMS HERE -->
                </div>
                <div class=\"cont-album-box\">
                    <p class=\"album-title\">
                        <span>";
                // line 343
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("..."));
                echo "</span>
                        <a class=\"button-list btn btn-default btn-sm\">
                            <i class=\"fa fa-arrow-left\"></i> ";
                // line 345
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Albums list"));
                echo "
                        </a>
                    </p>
                    ";
                // line 348
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 348, $this->source), "html", null, true);
                echo "
                </div>
            </div>
        </div>
    </div>
  ";
            } else {
                // line 354
                echo "    ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 354, $this->source), "html", null, true);
                echo "
    <div id=\"filtro\"> ";
                // line 355
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 355, $this->source), "html", null, true);
                echo "</div>
    ";
                // line 356
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 356, $this->source), "html", null, true);
                echo "
    ";
                // line 357
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 357, $this->source), "html", null, true);
                echo "
    ";
                // line 358
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 358, $this->source), "html", null, true);
                echo "
    ";
                // line 359
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 359, $this->source), "html", null, true);
                echo "
    ";
                // line 360
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 360, $this->source), "html", null, true);
                echo "
  ";
            }
        } elseif ((        // line 362
($context["id"] ?? null) == "_whites_projects")) {
            // line 363
            echo "  ";
            if ((($context["display_id"] ?? null) == "block_1_gutted_boxed")) {
                // line 364
                echo "    <div class=\"section-empty section-item\">
        <div class=\"container content\">
            <div class=\"maso-list list-sm-6\">
                <div class=\"navbar navbar-inner\">
                    <div class=\"navbar-toggle\"><i class=\"fa fa-bars\"></i><span>";
                // line 368
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("MENU"));
                echo "</span><i class=\"fa fa-angle-down\"></i></div>
                    <div class=\"collapse navbar-collapse\">
                        <ul class=\"nav navbar-nav over ms-minimal inner maso-filters nav-center\">
                            ";
                // line 371
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 371, $this->source), "html", null, true);
                echo "
                            <li><a class=\"maso-order\" data-sort=\"asc\"><i class=\"fa fa-arrow-down\"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"maso-box row\" data-lightbox-anima=\"fade-top\">

                    ";
                // line 378
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 378, $this->source), "html", null, true);
                echo "
                    <div class=\"clear\"></div>
                </div>
                ";
                // line 381
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 381, $this->source), "html", null, true);
                echo "
            </div>
        </div>
    </div>
  ";
            } elseif ((            // line 385
($context["display_id"] ?? null) == "block_1_gutted_full_width")) {
                // line 386
                echo "    <div class=\"section-empty section-item\">
        <div class=\"content\">
            <div class=\"maso-list list-sm-6\">
                <div class=\"navbar navbar-inner\">
                    <div class=\"navbar-toggle\"><i class=\"fa fa-bars\"></i><span>";
                // line 390
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("MENU"));
                echo "</span><i class=\"fa fa-angle-down\"></i></div>
                    <div class=\"collapse navbar-collapse\">
                        <ul class=\"nav navbar-nav over ms-minimal inner maso-filters nav-center\">
                            ";
                // line 393
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 393, $this->source), "html", null, true);
                echo "
                            <li><a class=\"maso-order\" data-sort=\"asc\"><i class=\"fa fa-arrow-down\"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"maso-box row\" data-lightbox-anima=\"fade-top\">
                    ";
                // line 399
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 399, $this->source), "html", null, true);
                echo "
                    <div class=\"clear\"></div>
                </div>
                ";
                // line 402
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 402, $this->source), "html", null, true);
                echo "
            </div>
        </div>
    </div>
  ";
            } elseif ((            // line 406
($context["display_id"] ?? null) == "block_2_gutted_boxed")) {
                // line 407
                echo "    <div class=\"section-empty section-item\">
        <div class=\"container content\">
            <div class=\"maso-list maso-15 list-sm-6\">
                <div class=\"navbar navbar-inner\">
                    <div class=\"navbar-toggle\"><i class=\"fa fa-bars\"></i><span>";
                // line 411
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("MENU"));
                echo "</span><i class=\"fa fa-angle-down\"></i></div>
                    <div class=\"collapse navbar-collapse\">
                        <ul class=\"nav navbar-nav over inner ms-minimal maso-filters nav-center\">
                            ";
                // line 414
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 414, $this->source), "html", null, true);
                echo "
                            <li><a class=\"maso-order\" data-sort=\"asc\"><i class=\"fa fa-arrow-down\"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"maso-box row\">

                    ";
                // line 421
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 421, $this->source), "html", null, true);
                echo "
                    <!-- INSERT OTHERS GALLERY ITEMS HERE -->
                    <div class=\"clear\"></div>
                </div>
                ";
                // line 425
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 425, $this->source), "html", null, true);
                echo "
            </div>
        </div>
    </div>
  ";
            } elseif ((            // line 429
($context["display_id"] ?? null) == "block_2_gutted_full_width")) {
                // line 430
                echo "    <div class=\"section-empty section-item\">
        <div class=\"content\">
            <div class=\"maso-list maso-15 list-sm-6\">
                <div class=\"navbar navbar-inner\">
                    <div class=\"navbar-toggle\"><i class=\"fa fa-bars\"></i><span>";
                // line 434
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("MENU"));
                echo "</span><i class=\"fa fa-angle-down\"></i></div>
                    <div class=\"collapse navbar-collapse\">
                        <ul class=\"nav navbar-nav over inner ms-minimal maso-filters nav-center\">
                            ";
                // line 437
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 437, $this->source), "html", null, true);
                echo "
                            <li><a class=\"maso-order\" data-sort=\"asc\"><i class=\"fa fa-arrow-down\"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"maso-box row\">

                    ";
                // line 444
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 444, $this->source), "html", null, true);
                echo "
                    <!-- INSERT OTHERS GALLERY ITEMS HERE -->
                    <div class=\"clear\"></div>
                </div>
                ";
                // line 448
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 448, $this->source), "html", null, true);
                echo "
            </div>
        </div>
    </div>
  ";
            } elseif ((            // line 452
($context["display_id"] ?? null) == "block_3_gutted_boxed")) {
                // line 453
                echo "    <div class=\"section-empty section-item\">
        <div class=\"container content\">
            <div class=\"maso-list list-sm-6\">
                <div class=\"navbar navbar-inner\">
                    <div class=\"navbar-toggle\"><i class=\"fa fa-bars\"></i><span>";
                // line 457
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Menu"));
                echo "</span><i class=\"fa fa-angle-down\"></i></div>
                    <div class=\"collapse navbar-collapse\">
                        <ul class=\"nav navbar-nav nav-center over ms-rounded inner maso-filters\">
                            ";
                // line 460
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 460, $this->source), "html", null, true);
                echo "
                            <li><a class=\"maso-order\" data-sort=\"asc\"><i class=\"fa fa-arrow-down\"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"maso-box row\" data-lightbox-anima=\"fade-top\">
                    ";
                // line 466
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 466, $this->source), "html", null, true);
                echo "
                    <div class=\"clear\"></div>
                </div>
                ";
                // line 469
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 469, $this->source), "html", null, true);
                echo "
            </div>
        </div>
    </div>
  ";
            } elseif ((            // line 473
($context["display_id"] ?? null) == "block_3_gutted_full_width")) {
                // line 474
                echo "    <div class=\"section-empty section-item\">
        <div class=\"content\">
            <div class=\"maso-list list-sm-6\">
                <div class=\"navbar navbar-inner\">
                    <div class=\"navbar-toggle\"><i class=\"fa fa-bars\"></i><span>";
                // line 478
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Menu"));
                echo "</span><i class=\"fa fa-angle-down\"></i></div>
                    <div class=\"collapse navbar-collapse\">
                        <ul class=\"nav navbar-nav nav-center over ms-rounded inner maso-filters\">
                            ";
                // line 481
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 481, $this->source), "html", null, true);
                echo "
                            <li><a class=\"maso-order\" data-sort=\"asc\"><i class=\"fa fa-arrow-down\"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"maso-box row\" data-lightbox-anima=\"fade-top\">
                    ";
                // line 487
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 487, $this->source), "html", null, true);
                echo "
                    <div class=\"clear\"></div>
                </div>
                ";
                // line 490
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 490, $this->source), "html", null, true);
                echo "
            </div>
        </div>
    </div>
  ";
            } elseif ((            // line 494
($context["display_id"] ?? null) == "block_4_boxed")) {
                // line 495
                echo "    <div class=\"section-empty section-item\">
      <div class=\"content container\">
        <div class=\"maso-list gallery list-sm-6\">
          <div class=\"navbar navbar-inner\">
            <div class=\"navbar-toggle\"><i class=\"fa fa-bars\"></i><span>";
                // line 499
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Menu"));
                echo "</span><i class=\"fa fa-angle-down\"></i></div>
            <div class=\"collapse navbar-collapse\">
              <ul class=\"nav navbar-nav nav-center over inner maso-filters\">
                ";
                // line 502
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 502, $this->source), "html", null, true);
                echo "
                <li><a class=\"maso-order\" data-sort=\"asc\"><i class=\"fa fa-arrow-down\"></i></a></li>
              </ul>
            </div>
          </div>
          <div class=\"maso-box row\" data-lightbox-anima=\"fade-top\">
            ";
                // line 508
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 508, $this->source), "html", null, true);
                echo "
            <div class=\"clear\"></div>
          </div>
          ";
                // line 511
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 511, $this->source), "html", null, true);
                echo "
        </div>
        <hr class=\"space m\" />
      </div>
    </div>
  ";
            } elseif ((            // line 516
($context["display_id"] ?? null) == "block_4_full_width")) {
                // line 517
                echo "    <div class=\"section-empty section-item\">
      <div class=\"content\">
        <div class=\"maso-list list-sm-6 m er\">
          <div class=\"navbar navbar-inner\">
            <div class=\"navbar-toggle\"><i class=\"fa fa-bars\"></i><span>";
                // line 521
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Menu"));
                echo "</span><i class=\"fa fa-angle-down\"></i></div>
            <div class=\"collapse navbar-collapse\">
              <ul class=\"nav navbar-nav nav-center over ms-rounded  inner maso-filters\">
                ";
                // line 524
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 524, $this->source), "html", null, true);
                echo "
                <li><a class=\"maso-order\" data-sort=\"asc\"><i class=\"fa fa-arrow-down\"></i></a></li>
              </ul>
            </div>
          </div>
          <div class=\"maso-box row\" data-lightbox-anima=\"fade-top\">
            ";
                // line 530
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 530, $this->source), "html", null, true);
                echo "
            <div class=\"clear\"></div>
          </div>
          ";
                // line 533
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 533, $this->source), "html", null, true);
                echo "
        </div>
        <hr class=\"space m\" />
      </div>
    </div>
  ";
            } elseif ((            // line 538
($context["display_id"] ?? null) == "block_4_gutted_boxed")) {
                // line 539
                echo "    <div class=\"section-empty section-item\">
        <div class=\"container content\">
            <div class=\"maso-list list-sm-6\">
                <div class=\"navbar navbar-inner\">
                    <div class=\"navbar-toggle\"><i class=\"fa fa-bars\"></i><span>";
                // line 543
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Menu"));
                echo "</span><i class=\"fa fa-angle-down\"></i></div>
                    <div class=\"collapse navbar-collapse\">
                        <ul class=\"nav navbar-nav nav-center over inner maso-filters\">
                            ";
                // line 546
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 546, $this->source), "html", null, true);
                echo "
                            <li><a class=\"maso-order\" data-sort=\"asc\"><i class=\"fa fa-arrow-down\"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"maso-box row\" data-lightbox-anima=\"fade-top\">
                    ";
                // line 552
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 552, $this->source), "html", null, true);
                echo "
                    <div class=\"clear\"></div>
                </div>
                ";
                // line 555
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 555, $this->source), "html", null, true);
                echo "
            </div>
        </div>
    </div>
  ";
            } elseif ((            // line 559
($context["display_id"] ?? null) == "block_4_gutted_full_width")) {
                // line 560
                echo "    <div class=\"section-empty section-item\">
        <div class=\"content\">
            <div class=\"maso-list list-sm-12\">
                <div class=\"navbar navbar-inner\">
                    <div class=\"navbar-toggle\"><i class=\"fa fa-bars\"></i><span>";
                // line 564
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Menu"));
                echo "</span><i class=\"fa fa-angle-down\"></i></div>
                    <div class=\"collapse navbar-collapse\">
                        <ul class=\"nav navbar-nav nav-center over inner maso-filters\">
                            ";
                // line 567
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 567, $this->source), "html", null, true);
                echo "
                            <li><a class=\"maso-order\" data-sort=\"asc\"><i class=\"fa fa-arrow-down\"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"maso-box row\" data-lightbox-anima=\"fade-top\">
                    ";
                // line 573
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 573, $this->source), "html", null, true);
                echo "
                    <div class=\"clear\"></div>
                </div>
                ";
                // line 576
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 576, $this->source), "html", null, true);
                echo "
            </div>
        </div>
    </div>
  ";
            } elseif ((            // line 580
($context["display_id"] ?? null) == "portfolio_activity")) {
                // line 581
                echo "    <div class=\"section-empty\">
      <div class=\"container content\">
          <div class=\"maso-list\">
              <div class=\"navbar navbar-inner\">
                  <div class=\"navbar-toggle\"><i class=\"fa fa-bars\"></i><span>";
                // line 585
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Menu"));
                echo "</span><i class=\"fa fa-angle-down\"></i></div>
                  <div class=\"collapse navbar-collapse\">
                      <ul class=\"nav navbar-nav nav-center over inner maso-filters\">
                          ";
                // line 588
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 588, $this->source), "html", null, true);
                echo "
                          <li><a class=\"maso-order\" data-sort=\"asc\"><i class=\"fa fa-arrow-down\"></i></a></li>
                      </ul>
                  </div>
              </div>
              <div class=\"maso-box row\" data-lightbox-anima=\"fade-top\">
                  ";
                // line 594
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 594, $this->source), "html", null, true);
                echo "
                  <div class=\"clear\"></div>
              </div>
          </div>
      </div>
    </div>
  ";
            } elseif ((            // line 600
($context["display_id"] ?? null) == "portfolio_corporate")) {
                // line 601
                echo "    <div class=\"section-empty\">
      <div class=\"container content\">
        ";
                // line 603
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 603, $this->source), "html", null, true);
                echo "
        <div class=\"maso-list menu-outer\">
          <div class=\"navbar navbar-inner\">
            <div class=\"navbar-toggle\"><i class=\"fa fa-bars\"></i><span>Menu</span><i class=\"fa fa-angle-down\"></i></div>
            <div class=\"collapse navbar-collapse\">
              <ul class=\"nav navbar-nav nav-center over ms-rounded inner maso-filters\">
                  ";
                // line 609
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 609, $this->source), "html", null, true);
                echo "
                  <li><a class=\"maso-order\" data-sort=\"asc\"><i class=\"fa fa-arrow-down\"></i></a></li>
              </ul>
            </div>
          </div>
          <div class=\"maso-box row\">
            ";
                // line 615
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 615, $this->source), "html", null, true);
                echo "
            <div class=\"clear\"></div>
          </div>
        </div>
      </div>
    </div>
  ";
            } elseif ((            // line 621
($context["display_id"] ?? null) == "portfolio_event")) {
                // line 622
                echo "    <div class=\"container content\">
      <div class=\"grid-list gallery\">
          <div class=\"grid-box row\" data-lightbox-anima=\"fade-top\">
              ";
                // line 625
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 625, $this->source), "html", null, true);
                echo "
          </div>
      </div>
    </div>
  ";
            } elseif ((            // line 629
($context["display_id"] ?? null) == "portfolio_freelancer")) {
                // line 630
                echo "    <div class=\"section-empty\">
      <div class=\"container content\">
        <div class=\"maso-list\">
          <div class=\"navbar navbar-inner\">
            <div class=\"navbar-toggle\"><i class=\"fa fa-bars\"></i><span>Menu</span><i class=\"fa fa-angle-down\"></i></div>
            <div class=\"collapse navbar-collapse\">
              <ul class=\"nav navbar-nav nav-center over ms-rounded inner maso-filters\">
                ";
                // line 637
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 637, $this->source), "html", null, true);
                echo "
                <li><a class=\"maso-order\" data-sort=\"asc\"><i class=\"fa fa-arrow-down\"></i></a></li>
              </ul>
            </div>
          </div>
          <div class=\"maso-box row\" data-lightbox-anima=\"fade-top\">
            ";
                // line 643
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 643, $this->source), "html", null, true);
                echo "
            <div class=\"clear\"></div>
          </div>
        </div>
      </div>
    </div>
  ";
            } elseif ((            // line 649
($context["display_id"] ?? null) == "portfolio_management")) {
                // line 650
                echo "    <div class=\"section-empty section-item\">
      <div class=\"container content\">
        <div class=\"row\">
          ";
                // line 653
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 653, $this->source), "html", null, true);
                echo "
        </div>
        <hr class=\"space\" />
        <div class=\"row \">
          ";
                // line 657
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 657, $this->source), "html", null, true);
                echo "
        </div>
      </div>
    </div>
  ";
            } elseif ((            // line 661
($context["display_id"] ?? null) == "portfolio_frontpage")) {
                // line 662
                echo "    <div class=\"section-bg-color\">
      <div class=\"container content text-center\">
          <div class=\"row\">
              <div class=\"col-md-8 col-center\">
                ";
                // line 666
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 666, $this->source), "html", null, true);
                echo "
              </div>
          </div>
          <hr class=\"space m\" />
          <div class=\"maso-list gallery\">
              <div class=\"navbar navbar-inner\">
                  <div class=\"navbar-toggle\"><i class=\"fa fa-bars\"></i><span>";
                // line 672
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Menu"));
                echo "</span><i class=\"fa fa-angle-down\"></i></div>
                  <div class=\"collapse navbar-collapse\">
                      <ul class=\"nav navbar-nav over ms-rounded inner maso-filters nav-center\">
                          ";
                // line 675
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 675, $this->source), "html", null, true);
                echo "
                          <li><a class=\"maso-order\" data-sort=\"asc\"><i class=\"fa fa-arrow-down\"></i></a></li>
                      </ul>
                  </div>
              </div>
              <div class=\"maso-box row\" data-lightbox-anima=\"fade-left\">
                  ";
                // line 681
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 681, $this->source), "html", null, true);
                echo "
                  <div class=\"clear\"></div>
              </div>
          </div>
      </div>
    </div>
  ";
            } else {
                // line 688
                echo "    ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 688, $this->source), "html", null, true);
                echo "
    <div id=\"filtro\"> ";
                // line 689
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 689, $this->source), "html", null, true);
                echo "</div>
    ";
                // line 690
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 690, $this->source), "html", null, true);
                echo "
    ";
                // line 691
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 691, $this->source), "html", null, true);
                echo "
    ";
                // line 692
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 692, $this->source), "html", null, true);
                echo "
    ";
                // line 693
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 693, $this->source), "html", null, true);
                echo "
    ";
                // line 694
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 694, $this->source), "html", null, true);
                echo "
  ";
            }
        } else {
            // line 697
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 697, $this->source), "html", null, true);
            echo "
    <div id=\"filtro\"> ";
            // line 698
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 698, $this->source), "html", null, true);
            echo "</div>
    ";
            // line 699
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 699, $this->source), "html", null, true);
            echo "
    ";
            // line 700
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 700, $this->source), "html", null, true);
            echo "
    ";
            // line 701
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 701, $this->source), "html", null, true);
            echo "
    ";
            // line 702
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 702, $this->source), "html", null, true);
            echo "
    ";
            // line 703
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 703, $this->source), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/white/tpl/view/views-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1265 => 703,  1261 => 702,  1257 => 701,  1253 => 700,  1249 => 699,  1245 => 698,  1240 => 697,  1234 => 694,  1230 => 693,  1226 => 692,  1222 => 691,  1218 => 690,  1214 => 689,  1209 => 688,  1199 => 681,  1190 => 675,  1184 => 672,  1175 => 666,  1169 => 662,  1167 => 661,  1160 => 657,  1153 => 653,  1148 => 650,  1146 => 649,  1137 => 643,  1128 => 637,  1119 => 630,  1117 => 629,  1110 => 625,  1105 => 622,  1103 => 621,  1094 => 615,  1085 => 609,  1076 => 603,  1072 => 601,  1070 => 600,  1061 => 594,  1052 => 588,  1046 => 585,  1040 => 581,  1038 => 580,  1031 => 576,  1025 => 573,  1016 => 567,  1010 => 564,  1004 => 560,  1002 => 559,  995 => 555,  989 => 552,  980 => 546,  974 => 543,  968 => 539,  966 => 538,  958 => 533,  952 => 530,  943 => 524,  937 => 521,  931 => 517,  929 => 516,  921 => 511,  915 => 508,  906 => 502,  900 => 499,  894 => 495,  892 => 494,  885 => 490,  879 => 487,  870 => 481,  864 => 478,  858 => 474,  856 => 473,  849 => 469,  843 => 466,  834 => 460,  828 => 457,  822 => 453,  820 => 452,  813 => 448,  806 => 444,  796 => 437,  790 => 434,  784 => 430,  782 => 429,  775 => 425,  768 => 421,  758 => 414,  752 => 411,  746 => 407,  744 => 406,  737 => 402,  731 => 399,  722 => 393,  716 => 390,  710 => 386,  708 => 385,  701 => 381,  695 => 378,  685 => 371,  679 => 368,  673 => 364,  670 => 363,  668 => 362,  663 => 360,  659 => 359,  655 => 358,  651 => 357,  647 => 356,  643 => 355,  638 => 354,  629 => 348,  623 => 345,  618 => 343,  610 => 338,  604 => 334,  602 => 333,  595 => 329,  591 => 327,  588 => 326,  582 => 325,  579 => 324,  576 => 323,  574 => 322,  571 => 321,  569 => 320,  564 => 319,  559 => 318,  556 => 317,  554 => 316,  548 => 312,  546 => 311,  539 => 307,  534 => 305,  528 => 301,  526 => 300,  517 => 294,  511 => 291,  506 => 288,  504 => 287,  495 => 281,  489 => 278,  484 => 275,  482 => 274,  474 => 269,  469 => 266,  467 => 265,  459 => 260,  451 => 255,  443 => 249,  441 => 248,  434 => 244,  429 => 242,  423 => 238,  421 => 237,  412 => 231,  405 => 227,  401 => 225,  399 => 224,  391 => 219,  384 => 215,  380 => 213,  378 => 212,  370 => 207,  363 => 202,  361 => 201,  353 => 196,  345 => 191,  341 => 189,  339 => 188,  331 => 183,  325 => 179,  323 => 178,  318 => 176,  310 => 171,  303 => 167,  299 => 165,  297 => 164,  289 => 159,  282 => 154,  280 => 153,  271 => 147,  264 => 142,  262 => 141,  254 => 136,  246 => 131,  241 => 128,  239 => 127,  231 => 122,  222 => 116,  216 => 112,  214 => 111,  206 => 106,  200 => 103,  196 => 101,  194 => 100,  186 => 95,  180 => 91,  178 => 90,  168 => 83,  159 => 77,  155 => 75,  152 => 74,  150 => 73,  147 => 72,  142 => 70,  138 => 69,  134 => 68,  130 => 67,  126 => 66,  122 => 65,  117 => 64,  112 => 62,  107 => 61,  105 => 60,  99 => 57,  96 => 56,  94 => 55,  89 => 54,  86 => 53,  84 => 52,  79 => 50,  74 => 48,  71 => 47,  66 => 45,  61 => 43,  58 => 42,  56 => 41,  52 => 40,  47 => 38,  44 => 37,  41 => 36,  39 => 35,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/white/tpl/view/views-view.html.twig", "/var/www/html/web/themes/custom/white/tpl/view/views-view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 35, "set" => 317, "for" => 318);
        static $filters = array("escape" => 38, "t" => 343);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
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
