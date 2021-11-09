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

/* themes/electra/templates/node/node--view--frontpage.html.twig */
class __TwigTemplate_8da7367f2aba1b8768e3b2c7f70f2d1209ff71696009d02ae05d10003eeae61e extends \Twig\Template
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
        // line 75
        echo "
";
        // line 76
        $context["node_has_image"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_image", [], "any", false, false, true, 76), "entity", [], "any", false, false, true, 76), "uri", [], "any", false, false, true, 76), "value", [], "any", false, false, true, 76);
        // line 77
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 77, $this->source), "html", null, true);
        echo ">
  <div class=\"article-inner-wrapper\">
    ";
        // line 79
        if (($context["node_has_image"] ?? null)) {
            // line 80
            echo "      <div class=\"article-media\">
        ";
            // line 81
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 84
        echo "    <div class=\"article-info\">
      ";
        // line 85
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 85, $this->source), "html", null, true);
        echo "
      ";
        // line 86
        if ( !($context["page"] ?? null)) {
            // line 87
            echo "        <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 87, $this->source), "html", null, true);
            echo ">
          <a href=\"";
            // line 88
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 88, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 88, $this->source), "html", null, true);
            echo "</a>
        </h2>
      ";
        }
        // line 91
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 91, $this->source), "html", null, true);
        echo "
      ";
        // line 92
        if ((($context["display_submitted"] ?? null) &&  !($context["page"] ?? null))) {
            // line 93
            echo "        <footer class=\"article-author-info\">
          ";
            // line 94
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 94, $this->source), "html", null, true);
            echo "
          <div";
            // line 95
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_attributes"] ?? null), 95, $this->source), "html", null, true);
            echo ">
            ";
            // line 96
            echo t("by @author_name on @date", array("@author_name" => ($context["author_name"] ?? null), "@date" => ($context["date"] ?? null), ));
            // line 97
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 97, $this->source), "html", null, true);
            echo "
          </div>
        </footer>
      ";
        }
        // line 101
        echo "      <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 101, $this->source), "html", null, true);
        echo ">
        ";
        // line 102
        if (($context["node_has_image"] ?? null)) {
            // line 103
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 103, $this->source), "field_image"), "html", null, true);
            echo "
        ";
        } else {
            // line 105
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 105, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 107
        echo "      </div>
    </div>
  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/electra/templates/node/node--view--frontpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 107,  124 => 105,  118 => 103,  116 => 102,  111 => 101,  103 => 97,  101 => 96,  97 => 95,  93 => 94,  90 => 93,  88 => 92,  83 => 91,  75 => 88,  70 => 87,  68 => 86,  64 => 85,  61 => 84,  55 => 81,  52 => 80,  50 => 79,  44 => 77,  42 => 76,  39 => 75,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - node.getCreatedTime() will return the node creation timestamp.
 *   - node.hasField('field_example') returns TRUE if the node bundle includes
 *     field_example. (This does not indicate the presence of a value in this
 *     field.)
 *   - node.isPublished() will return whether the node is published or not.
 *   Calling other methods, such as node.delete(), will result in an exception.
 *   See \\Drupal\\node\\Entity\\Node for a full list of public properties and
 *   methods for the node object.
 * - label: The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: Themed creation date field.
 * - author_name: Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_node()
 *
 * @todo Remove the id attribute (or make it a class), because if that gets
 *   rendered twice on a page this is invalid CSS for example: two lists
 *   in different view modes.
 *
 * @ingroup themeable
 */
#}

{% set node_has_image = node.field_image.entity.uri.value %}
<article{{ attributes }}>
  <div class=\"article-inner-wrapper\">
    {% if node_has_image %}
      <div class=\"article-media\">
        {{ content.field_image }}
      </div>
    {% endif %}
    <div class=\"article-info\">
      {{ title_prefix }}
      {% if not page %}
        <h2{{ title_attributes }}>
          <a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a>
        </h2>
      {% endif %}
      {{ title_suffix }}
      {% if display_submitted and not page %}
        <footer class=\"article-author-info\">
          {{ author_picture }}
          <div{{ author_attributes }}>
            {% trans %} by {{ author_name }} on {{ date }}{% endtrans %}
            {{ metadata }}
          </div>
        </footer>
      {% endif %}
      <div{{ content_attributes }}>
        {% if node_has_image %}
          {{ content|without('field_image') }}
        {% else %}
          {{ content }}
        {% endif %}
      </div>
    </div>
  </div>
</article>
", "themes/electra/templates/node/node--view--frontpage.html.twig", "C:\\xampp\\htdocs\\drupalsite\\themes\\electra\\templates\\node\\node--view--frontpage.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 76, "if" => 79, "trans" => 96);
        static $filters = array("escape" => 77, "without" => 103);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['escape', 'without'],
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
