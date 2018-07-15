<?php

/* /mnt/web317/a2/52/59113052/htdocs/neu-2018/themes/pachmann-2/partials/buehne.htm */
class __TwigTemplate_fdec70eb75b50ae4920f28ab198db51a135ae8bcd467030c05c28460a289d0e1 extends Twig_Template
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
        echo "<div class=\"content-pure\">
            <div class=\"carousel\">
                <div class=\"carousel-cell\">
                    <img src=\"";
        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/buehne/weill.jpg");
        echo "\" alt=\"\">
                </div>
                <div class=\"carousel-cell\">
                    <img src=\"";
        // line 7
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/buehne/musical2.jpg");
        echo "\" alt=\"\">
                </div>
                <div class=\"carousel-cell\">
                    <img src=\"";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/buehne/krug.jpg");
        echo "\" alt=\"\">
                </div>
                <div class=\"carousel-cell\">
                    <img src=\"";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/buehne/operette.jpg");
        echo "\" alt=\"\">
                </div>
                <div class=\"carousel-cell\">
                    <img src=\"";
        // line 16
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/buehne/weill2.jpg");
        echo "\" alt=\"\">
                </div>
                <div class=\"carousel-cell\">
                    <img src=\"";
        // line 19
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/buehne/parasit_9.jpg");
        echo "\" alt=\"\">
                </div>
            </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "/mnt/web317/a2/52/59113052/htdocs/neu-2018/themes/pachmann-2/partials/buehne.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 19,  48 => 16,  42 => 13,  36 => 10,  30 => 7,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"content-pure\">
            <div class=\"carousel\">
                <div class=\"carousel-cell\">
                    <img src=\"{{ 'assets/img/buehne/weill.jpg'|theme }}\" alt=\"\">
                </div>
                <div class=\"carousel-cell\">
                    <img src=\"{{ 'assets/img/buehne/musical2.jpg'|theme }}\" alt=\"\">
                </div>
                <div class=\"carousel-cell\">
                    <img src=\"{{ 'assets/img/buehne/krug.jpg'|theme }}\" alt=\"\">
                </div>
                <div class=\"carousel-cell\">
                    <img src=\"{{ 'assets/img/buehne/operette.jpg'|theme }}\" alt=\"\">
                </div>
                <div class=\"carousel-cell\">
                    <img src=\"{{ 'assets/img/buehne/weill2.jpg'|theme }}\" alt=\"\">
                </div>
                <div class=\"carousel-cell\">
                    <img src=\"{{ 'assets/img/buehne/parasit_9.jpg'|theme }}\" alt=\"\">
                </div>
            </div>
        </div>", "/mnt/web317/a2/52/59113052/htdocs/neu-2018/themes/pachmann-2/partials/buehne.htm", "");
    }
}
