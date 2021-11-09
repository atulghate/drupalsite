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

/* themes/custom/mytheme/templates/page.html.twig */
class __TwigTemplate_7514eac809ffa90c1d0f1afa6b16377bf5e65909733455df14f61f750544af74 extends \Twig\Template
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
        echo "<header aria-label=\"Site header\" class=\"header\" id=\"header\" role=\"banner\">
    ";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
        echo "

</header>
<section class=\"main\" id=\"main\">
    <main aria-label=\"Site main content\" class=\"content\" id=\"content\" role=\"main\">
        ";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "
    </main>
    <aside class=\"right--sidebar\" id=\"sidebar\" role=\"complementary\">
        ";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "right_sidebar", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "
    </aside>
</section>
<footer aria-label=\"Site footer\" class=\"footer\" id=\"footer\" role=\"contentinfo\">
    <div class=\"footer--top\">
        ";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "
    </div>
    <div class=\"footer--bottom\">
        ";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "themes/custom/mytheme/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 18,  64 => 15,  56 => 10,  50 => 7,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header aria-label=\"Site header\" class=\"header\" id=\"header\" role=\"banner\">
    {{ page.header }}

</header>
<section class=\"main\" id=\"main\">
    <main aria-label=\"Site main content\" class=\"content\" id=\"content\" role=\"main\">
        {{ page.content }}
    </main>
    <aside class=\"right--sidebar\" id=\"sidebar\" role=\"complementary\">
        {{ page.right_sidebar }}
    </aside>
</section>
<footer aria-label=\"Site footer\" class=\"footer\" id=\"footer\" role=\"contentinfo\">
    <div class=\"footer--top\">
        {{ page.footer_first }} {{ page.footer_second }} {{ page.footer_third }}
    </div>
    <div class=\"footer--bottom\">
        {{ page.footer_bottom }}
    </div>
</footer>", "themes/custom/mytheme/templates/page.html.twig", "C:\\xampp\\htdocs\\drupalsite\\themes\\custom\\mytheme\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 2);
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
