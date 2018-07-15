<?php

/* /mnt/web317/a2/52/59113052/htdocs/neu-2018/themes/pachmann-2/pages/home.htm */
class __TwigTemplate_a43cde5a029318d8d64c6a651d4692b4cc1f8f0f55d5f9dade0856b2ab084e37 extends Twig_Template
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
        echo "<!--SECTION 1----INTRO-->        
";
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("start"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "
<!--SECTIONS--WITH--CONTENT-->

<!--SECTION 2----PORTRAIT-->
<div class=\"section sec2\" data-anchor=\"portrait-2\">
    <div class=\"sec22\">   
        <!--SECTION 2----MENU-->       
        ";
        // line 10
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("portrait"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "    </div>    
</div>
<!--SECTION 3----VITA-->
<div class=\"section sec3\" data-anchor=\"vita\">
    <div class=\"sec33\">   
        <!--SECTION 4----PLATZHALTER statt MENU später-->
        <div class=\"space-left-transparent\"></div>
        ";
        // line 18
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("vita"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 19
        echo "    </div>    
</div>
<!--SECTION 4----TERMINE-->
<div class=\"section sec5\" data-anchor=\"aktuell\">
    <div class=\"sec55\">   
        <!------PLATZHALTER statt MENU später-->
        <div class=\"space-left-transparent\"></div>
        <div class=\"content-menu\">
            <div class=\"aktuell\">
                   <div class=\"main-title\">Aktuelle Termine</div>
                ";
        // line 29
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("eventList"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 30
        echo "            </div>
        </div>
    </div>    
</div>
<!--SECTION 5----PROFIL-->
<div class=\"section sec4\" data-anchor=\"profil\">
    <div class=\"sec44\">   
        <!--SECTION 5----PLATZHALTER statt MENU später-->
        <div class=\"space-left-transparent\"></div>
        ";
        // line 39
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("profil"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 40
        echo "    </div>    
</div>


<!--SECTION 6----REPERTOIRE-->
<div class=\"section sec6\" data-anchor=\"rep\">
    <div class=\"sec66\">   
        <!--SECTION 6----PLATZHALTER statt MENU später-->
        <div class=\"space-left-transparent\"></div>
        ";
        // line 49
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("repertoire"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 50
        echo "    </div>    
</div>

<!--SECTION 7----BÜHNE-->
<div class=\"section sec7\" data-anchor=\"buehne\">
    <div class=\"sec77\">   
        <!--SECTION 3----PLATZHALTER statt MENU später--> 
        ";
        // line 57
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("buehne"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 58
        echo "    </div>    
</div>


<!--SECTION 8----FOOTER-->
";
        // line 63
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("kontakt"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 64
        echo "

<!--ENDE-->";
    }

    public function getTemplateName()
    {
        return "/mnt/web317/a2/52/59113052/htdocs/neu-2018/themes/pachmann-2/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 64,  118 => 63,  111 => 58,  107 => 57,  98 => 50,  94 => 49,  83 => 40,  79 => 39,  68 => 30,  64 => 29,  52 => 19,  48 => 18,  39 => 11,  35 => 10,  26 => 3,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!--SECTION 1----INTRO-->        
{% partial 'start' %}

<!--SECTIONS--WITH--CONTENT-->

<!--SECTION 2----PORTRAIT-->
<div class=\"section sec2\" data-anchor=\"portrait-2\">
    <div class=\"sec22\">   
        <!--SECTION 2----MENU-->       
        {% partial 'portrait' %}
    </div>    
</div>
<!--SECTION 3----VITA-->
<div class=\"section sec3\" data-anchor=\"vita\">
    <div class=\"sec33\">   
        <!--SECTION 4----PLATZHALTER statt MENU später-->
        <div class=\"space-left-transparent\"></div>
        {% partial 'vita' %}
    </div>    
</div>
<!--SECTION 4----TERMINE-->
<div class=\"section sec5\" data-anchor=\"aktuell\">
    <div class=\"sec55\">   
        <!------PLATZHALTER statt MENU später-->
        <div class=\"space-left-transparent\"></div>
        <div class=\"content-menu\">
            <div class=\"aktuell\">
                   <div class=\"main-title\">Aktuelle Termine</div>
                {% component 'eventList' %}
            </div>
        </div>
    </div>    
</div>
<!--SECTION 5----PROFIL-->
<div class=\"section sec4\" data-anchor=\"profil\">
    <div class=\"sec44\">   
        <!--SECTION 5----PLATZHALTER statt MENU später-->
        <div class=\"space-left-transparent\"></div>
        {% partial 'profil' %}
    </div>    
</div>


<!--SECTION 6----REPERTOIRE-->
<div class=\"section sec6\" data-anchor=\"rep\">
    <div class=\"sec66\">   
        <!--SECTION 6----PLATZHALTER statt MENU später-->
        <div class=\"space-left-transparent\"></div>
        {% partial 'repertoire' %}
    </div>    
</div>

<!--SECTION 7----BÜHNE-->
<div class=\"section sec7\" data-anchor=\"buehne\">
    <div class=\"sec77\">   
        <!--SECTION 3----PLATZHALTER statt MENU später--> 
        {% partial 'buehne'%}
    </div>    
</div>


<!--SECTION 8----FOOTER-->
{% partial 'kontakt' %}


<!--ENDE-->", "/mnt/web317/a2/52/59113052/htdocs/neu-2018/themes/pachmann-2/pages/home.htm", "");
    }
}
