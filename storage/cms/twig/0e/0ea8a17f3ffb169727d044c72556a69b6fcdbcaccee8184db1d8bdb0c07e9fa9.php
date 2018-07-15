<?php

/* /mnt/web317/a2/52/59113052/htdocs/neu-2018/themes/pachmann-2/partials/portrait.htm */
class __TwigTemplate_bc9374e8a5f99284326a59c8fc2e873ec4f1e11f658d2a030d1324897020045f extends Twig_Template
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
                    <img class=\"img-1\" src=\"";
        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/portraits/pachmann-web40.jpg");
        echo "\" alt=\"Hans-Georg Pachmann - Schauspieler & Sänger\">
                </div>
                <div class=\"carousel-cell\">
                    <img class=\"img-2\" src=\"";
        // line 7
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/portraits/pachmann-web36.jpg");
        echo "\" alt=\"Hans-Georg Pachmann - Schauspieler & Sänger\">
                </div>
    
                <div class=\"carousel-cell\">
                    <img class=\"img-3\" src=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/portraits/pachmann-web10.jpg");
        echo "\" alt=\"Hans-Georg Pachmann - Schauspieler & Sänger\">
                </div>
                <div class=\"carousel-cell\">
                    <img class=\"img-4\" src=\"";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/portraits/start4.jpg");
        echo "\" alt=\"Hans-Georg Pachmann - Schauspieler & Sänger\">
                </div>
                
                <div class=\"carousel-cell\">
                    <img class=\"img-5\" src=\"";
        // line 18
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/portraits/start6.jpg");
        echo "\" alt=\"Hans-Georg Pachmann - Schauspieler & Sänger\">
                </div>
                <div class=\"carousel-cell\">
                    <img class=\"img-5\" src=\"\" alt=\"\">
                </div>
               
            </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "/mnt/web317/a2/52/59113052/htdocs/neu-2018/themes/pachmann-2/partials/portrait.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 18,  43 => 14,  37 => 11,  30 => 7,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"content-pure\">
            <div class=\"carousel\">
                <div class=\"carousel-cell\">
                    <img class=\"img-1\" src=\"{{ 'assets/img/portraits/pachmann-web40.jpg'|theme }}\" alt=\"Hans-Georg Pachmann - Schauspieler & Sänger\">
                </div>
                <div class=\"carousel-cell\">
                    <img class=\"img-2\" src=\"{{ 'assets/img/portraits/pachmann-web36.jpg'|theme }}\" alt=\"Hans-Georg Pachmann - Schauspieler & Sänger\">
                </div>
    
                <div class=\"carousel-cell\">
                    <img class=\"img-3\" src=\"{{ 'assets/img/portraits/pachmann-web10.jpg'|theme }}\" alt=\"Hans-Georg Pachmann - Schauspieler & Sänger\">
                </div>
                <div class=\"carousel-cell\">
                    <img class=\"img-4\" src=\"{{ 'assets/img/portraits/start4.jpg'|theme }}\" alt=\"Hans-Georg Pachmann - Schauspieler & Sänger\">
                </div>
                
                <div class=\"carousel-cell\">
                    <img class=\"img-5\" src=\"{{ 'assets/img/portraits/start6.jpg'|theme }}\" alt=\"Hans-Georg Pachmann - Schauspieler & Sänger\">
                </div>
                <div class=\"carousel-cell\">
                    <img class=\"img-5\" src=\"\" alt=\"\">
                </div>
               
            </div>
        </div>", "/mnt/web317/a2/52/59113052/htdocs/neu-2018/themes/pachmann-2/partials/portrait.htm", "");
    }
}
