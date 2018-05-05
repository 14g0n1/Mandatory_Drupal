<?php

/* core/themes/bartik/templates/comment.html.twig */
class __TwigTemplate_1fa46929ff83dc45fb8fc7190f3495e1337afeb4d0476f68af20002fa1d45e59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 68, "if" => 95);
        $filters = array("without" => 77);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('without'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 68
        $context["classes"] = array(0 => "comment", 1 => "js-comment", 2 => (((        // line 71
($context["status"] ?? null) != "published")) ? (("comment--" . ($context["status"] ?? null))) : ("")), 3 => (($this->getAttribute($this->getAttribute(        // line 72
($context["comment"] ?? null), "owner", array()), "anonymous", array())) ? ("by-anonymous") : ("")), 4 => (((        // line 73
($context["author_id"] ?? null) && (($context["author_id"] ?? null) == $this->getAttribute(($context["commented_entity"] ?? null), "getOwnerId", array(), "method")))) ? ((("by-" . $this->getAttribute(($context["commented_entity"] ?? null), "getEntityTypeId", array(), "method")) . "-author")) : ("")), 5 => "clearfix");
        // line 77
        echo "<article role=\"article\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "role"), "html", null, true));
        echo ">
  ";
        // line 83
        echo "  <span class=\"hidden\" data-comment-timestamp=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["new_indicator_timestamp"] ?? null), "html", null, true));
        echo "\"></span>

  <footer class=\"comment__meta\">
    ";
        // line 86
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["user_picture"] ?? null), "html", null, true));
        echo "
    <p class=\"comment__author\">";
        // line 87
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["author"] ?? null), "html", null, true));
        echo "</p>
    <p class=\"comment__time\">";
        // line 88
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["created"] ?? null), "html", null, true));
        echo "</p>
    <p class=\"comment__permalink\">";
        // line 89
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["permalink"] ?? null), "html", null, true));
        echo "</p>
    ";
        // line 95
        echo "    ";
        if (($context["parent"] ?? null)) {
            // line 96
            echo "      <p class=\"visually-hidden\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["parent"] ?? null), "html", null, true));
            echo "</p>
    ";
        }
        // line 98
        echo "  </footer>

  <div";
        // line 100
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => "comment__content"), "method"), "html", null, true));
        echo ">
    ";
        // line 101
        if (($context["title"] ?? null)) {
            // line 102
            echo "      ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
            echo "
      <h3";
            // line 103
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_attributes"] ?? null), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "</h3>
      ";
            // line 104
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
            echo "
    ";
        }
        // line 106
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 106,  106 => 104,  100 => 103,  95 => 102,  93 => 101,  89 => 100,  85 => 98,  79 => 96,  76 => 95,  72 => 89,  68 => 88,  64 => 87,  60 => 86,  53 => 83,  48 => 77,  46 => 73,  45 => 72,  44 => 71,  43 => 68,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/bartik/templates/comment.html.twig", "/Users/rasmuslagoni/MAMPWebRoot/drupal1/core/themes/bartik/templates/comment.html.twig");
    }
}
