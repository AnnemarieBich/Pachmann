<?php

/* /mnt/web317/a2/52/59113052/htdocs/neu-2018/plugins/kurtjensen/mycalendar/components/partials/event.htm */
class __TwigTemplate_7d8340c5f45e77e04572d34686f43f0da099742ca869f85bd0b2668ef488d3f5 extends Twig_Template
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
        // line 1
        echo "<li";
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["ev"] ?? null), "class", array())) {
            echo " class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["ev"] ?? null), "class", array()), "html", null, true);
            echo "\"";
        }
        echo " title=\"";
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["ev"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["ev"] ?? null), "title", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags(twig_get_attribute($this->env, $this->getSourceContext(), ($context["ev"] ?? null), "text", array())), 0, 50), "html", null, true);
            echo "...";
        }
        echo "\">
    ";
        // line 2
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["ev"] ?? null), "link", array())) {
            echo "<a href=\"";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["ev"] ?? null), "link", array());
            echo "\">";
        }
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["ev"] ?? null), "name", array());
        echo " ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["ev"] ?? null), "link", array())) {
            echo "</a>";
        }
        // line 3
        echo "</li>";
    }

    public function getTemplateName()
    {
        return "/mnt/web317/a2/52/59113052/htdocs/neu-2018/plugins/kurtjensen/mycalendar/components/partials/event.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 3,  35 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li{% if ev.class %} class=\"{{ ev.class }}\"{% endif %} title=\"{% if ev.title %}{{ ev.title }}{% else %}{{ ev.text|striptags|slice(0,50) }}...{% endif %}\">
    {% if ev.link %}<a href=\"{{ ev.link|raw }}\">{% endif %}{{ ev.name|raw }} {% if ev.link %}</a>{% endif %}
</li>", "/mnt/web317/a2/52/59113052/htdocs/neu-2018/plugins/kurtjensen/mycalendar/components/partials/event.htm", "");
    }
}
