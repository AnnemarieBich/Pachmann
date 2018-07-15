<?php

/* /mnt/web317/a2/52/59113052/htdocs/neu-2018/themes/pachmann-2/partials/eventList/default.htm */
class __TwigTemplate_42c738a0f5a2dcee23bac0e032d4f07c3c0270a3f52f0ad27c3d479ee459c04b extends Twig_Template
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
        $context["devents"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "events", array());
        // line 2
        echo "
<table class=\"table\">

";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["devents"] ?? null));
        foreach ($context['_seq'] as $context["y"] => $context["eYear"]) {
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["eYear"]);
            foreach ($context['_seq'] as $context["m"] => $context["eMonth"]) {
                // line 7
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["eMonth"]);
                foreach ($context['_seq'] as $context["d"] => $context["eDay"]) {
                    // line 8
                    echo "        <tr data-request-data=\"year:";
                    echo twig_escape_filter($this->env, $context["y"], "html", null, true);
                    echo ",month:";
                    echo twig_escape_filter($this->env, $context["m"], "html", null, true);
                    echo ",day:";
                    echo twig_escape_filter($this->env, $context["d"], "html", null, true);
                    echo "\">
            <td class=\"list-icon\">
                <div class=\"holder\">
                   <div class=\"month ";
                    // line 11
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["MyM"] ?? null), "color", array()), "html", null, true);
                    echo "\">
                        <p>";
                    // line 12
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (($context["m"] . "/1/") . $context["y"]), "M"), "html", null, true);
                    echo "</p> 
                    </div>
                    <div class=\"day\">
                        <p>";
                    // line 15
                    echo twig_escape_filter($this->env, $context["d"], "html", null, true);
                    echo "</p>
                    </div>
                </div>
            </td>
            <td class=\"list-event\">                
";
                    // line 20
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["eDay"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["eEvent"]) {
                        // line 21
                        echo "    ";
                        $context['__cms_partial_params'] = [];
                        $context['__cms_partial_params']['ev'] = $context["eEvent"]                        ;
                        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@event"                        , $context['__cms_partial_params']                        , true                        );
                        unset($context['__cms_partial_params']);
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eEvent'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 23
                    echo "            </td>
        </tr>
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['d'], $context['eDay'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "<!-- eDay -->
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['m'], $context['eMonth'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "<!-- eMonth -->
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['y'], $context['eYear'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "<!-- eYear -->

</table>";
    }

    public function getTemplateName()
    {
        return "/mnt/web317/a2/52/59113052/htdocs/neu-2018/themes/pachmann-2/partials/eventList/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 27,  96 => 26,  89 => 25,  81 => 23,  71 => 21,  67 => 20,  59 => 15,  53 => 12,  49 => 11,  38 => 8,  34 => 7,  30 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set devents = __SELF__.events %}

<table class=\"table\">

{% for y,eYear in devents %}
{% for m,eMonth in eYear %}
{% for d,eDay in eMonth %}
        <tr data-request-data=\"year:{{ y }},month:{{ m }},day:{{ d }}\">
            <td class=\"list-icon\">
                <div class=\"holder\">
                   <div class=\"month {{ MyM.color }}\">
                        <p>{{ (m~'/1/'~y)|date('M') }}</p> 
                    </div>
                    <div class=\"day\">
                        <p>{{ d }}</p>
                    </div>
                </div>
            </td>
            <td class=\"list-event\">                
{% for eEvent in eDay %}
    {% partial '@event' ev = eEvent %}
{% endfor %}
            </td>
        </tr>
{% endfor %}<!-- eDay -->
{% endfor %}<!-- eMonth -->
{% endfor %}<!-- eYear -->

</table>", "/mnt/web317/a2/52/59113052/htdocs/neu-2018/themes/pachmann-2/partials/eventList/default.htm", "");
    }
}
