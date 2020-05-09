<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/bon_voyage/templates/layout/page--node.html.twig */
class __TwigTemplate_b2a3a648a0cece097bad7877114aeb035ce6f60df536a86c64117a01889f1c59 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 90];
        $filters = ["escape" => 51, "t" => 73, "render" => 90, "without" => 96];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't', 'render', 'without'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 46
        echo "<div id=\"to-top\"></div>

<nav class=\"navbar\" id=\"top-nav-container\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            ";
        // line 51
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
        </div>

        <div id=\"top-navbar\">
            <div id=\"top-navbar-row-1\">
                ";
        // line 56
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "user_menu", [])), "html", null, true);
        echo "
        </div>
            <div id=\"top-navbar-row-2\">
                ";
        // line 59
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_navbar_row_2", [])), "html", null, true);
        echo "
            </div>
        </div>
    </div>
</nav>

<nav class=\"navbar navbar-static-top stickUpTop\" id=\"main-nav-container\" role=\"navigation\">
    <div class=\"container\">     
        <button class=\"navbar-toggle collapsed\" aria-expanded=\"false\" type=\"button\" data-toggle=\"collapse\" data-target=\"#main-navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>
        <div class=\"navbar-title\">";
        // line 73
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Categories"));
        echo "</div>
        
        <div class=\"collapse navbar-collapse\" id=\"main-navbar\">

            ";
        // line 77
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
        echo "
            ";
        // line 78
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "search", [])), "html", null, true);
        echo "
            
        </div>
    </div>
</nav>

<div id=\"header-bottom\" class=\"header-bottom-wrapper\">
    ";
        // line 85
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_bottom", [])), "html", null, true);
        echo "
</div>

<div class=\"container\" id=\"main-content\">
    
    ";
        // line 90
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "highlighted", []))) {
            // line 91
            echo "        <div id=\"highlighted\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "</div>
    ";
        }
        // line 93
        echo "
    ";
        // line 94
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
        echo "
    
    ";
        // line 96
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "page-title"), "html", null, true);
        echo "
    
</div>

<div id=\"featured\" class=\"featured-wrapper\">
    ";
        // line 101
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured", [])), "html", null, true);
        echo "
</div>

<div id=\"featured-2\">
    ";
        // line 105
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_2", [])), "html", null, true);
        echo "
</div>

";
        // line 108
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "featured_3", []))) {
            // line 109
            echo "<div id=\"featured-3\">
    <div class=\"container\">
        ";
            // line 111
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_3", [])), "html", null, true);
            echo "
    </div>
</div>
";
        }
        // line 115
        echo "
<div id=\"featured-4\">
    ";
        // line 117
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_4", [])), "html", null, true);
        echo "
</div>

<footer id=\"footer\">
    ";
        // line 121
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "footer_top", []))) {
            // line 122
            echo "    <div class=\"footer-top\">
        <div class=\"container\">
            ";
            // line 124
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top", [])), "html", null, true);
            echo "
        </div>
    </div>
    ";
        }
        // line 128
        echo "    
    ";
        // line 129
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "footer", []))) {
            // line 130
            echo "    <div class=\"middle-footer-wrapper\">
        <div class=\"container\">
            <div class=\"middle-footer\">
                ";
            // line 133
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
            </div>
        </div>
    </div>
    ";
        }
        // line 138
        echo "    
    <div class=\"bottom-footer-wrapper\">
        <div class=\"container\">
            <div class=\"bottom-footer\">
                Powered by <a href=\"http://www.saengo.com\">Saengo Inc.</a>
            </div>
        </div>
    </div>
</footer>
 ";
    }

    public function getTemplateName()
    {
        return "themes/bon_voyage/templates/layout/page--node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 138,  206 => 133,  201 => 130,  199 => 129,  196 => 128,  189 => 124,  185 => 122,  183 => 121,  176 => 117,  172 => 115,  165 => 111,  161 => 109,  159 => 108,  153 => 105,  146 => 101,  138 => 96,  133 => 94,  130 => 93,  124 => 91,  122 => 90,  114 => 85,  104 => 78,  100 => 77,  93 => 73,  76 => 59,  70 => 56,  62 => 51,  55 => 46,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/bon_voyage/templates/layout/page--node.html.twig", "C:\\wamp64\\www\\drupal8\\drupal-8.8.4\\themes\\bon_voyage\\templates\\layout\\page--node.html.twig");
    }
}
