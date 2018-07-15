<?php

/* /mnt/web317/a2/52/59113052/htdocs/neu-2018/themes/pachmann-2/layouts/default.htm */
class __TwigTemplate_d80012da63ddc2d987f26144188da8edd7dedf760e1ee71fc71e12678554388b extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>Hans-Georg Pachmann - ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"Annemarie Bich\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"AnnemarieBich\">
        
        <!--<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/october.png");
        echo "\">-->
        
        <link href=\"";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/normalize.css");
        echo "\" rel=\"stylesheet\">
        
        <link href=\"https://cdn.jsdelivr.net/npm/fullpage.js@3.0.1/dist/fullpage.min.css\">
        
        <link href=\"";
        // line 18
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/flickity.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 19
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/theme.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 20
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/platzhalter.css");
        echo "\" rel=\"stylesheet\">

        <link rel=\"stylesheet\" href=\"https://use.typekit.net/nfy1zuq.css\">
        
        ";
        // line 24
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 25
        echo "    </head>
    <body>

    ";
        // line 28
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("hamburgermenu"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 29
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("fmenu"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 30
        echo "    <div id=\"fullpage\"> 
        ";
        // line 31
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        echo "               
    </div>    
        

        <!-- Scripts -->
        
        
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/fullpage.js@3.0.1/vendors/scrolloverflow.min.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/fullpage.js@3.0.1/dist/fullpage.min.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/fullpage.js@3.0.1/dist/fullpage.extensions.min.js\"></script>
        <script src=\"";
        // line 42
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/modernizr-custom.js");
        echo "\"></script>
        <script src=\"";
        // line 43
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/flickity.pkgd.min.js");
        echo "\"></script>
        <script src=\"";
        // line 44
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/fitty.min.js");
        echo "\"></script>
        <script src=\"";
        // line 45
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/function.js");
        echo "\"></script>
        
        
        ";
        // line 48
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 49
        echo "        
        ";
        // line 50
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 51
        echo "        

    </body>
    
</html>";
    }

    public function getTemplateName()
    {
        return "/mnt/web317/a2/52/59113052/htdocs/neu-2018/themes/pachmann-2/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 51,  126 => 50,  123 => 49,  120 => 48,  114 => 45,  110 => 44,  106 => 43,  102 => 42,  88 => 31,  85 => 30,  80 => 29,  76 => 28,  71 => 25,  68 => 24,  61 => 20,  57 => 19,  53 => 18,  46 => 14,  41 => 12,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>Hans-Georg Pachmann - {{ this.page.title }}</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"author\" content=\"Annemarie Bich\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"AnnemarieBich\">
        
        <!--<link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\">-->
        
        <link href=\"{{ 'assets/css/normalize.css'|theme }}\" rel=\"stylesheet\">
        
        <link href=\"https://cdn.jsdelivr.net/npm/fullpage.js@3.0.1/dist/fullpage.min.css\">
        
        <link href=\"{{ 'assets/css/flickity.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/css/theme.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/css/platzhalter.css'|theme }}\" rel=\"stylesheet\">

        <link rel=\"stylesheet\" href=\"https://use.typekit.net/nfy1zuq.css\">
        
        {% styles %}
    </head>
    <body>

    {% partial 'hamburgermenu' %}
    {% partial 'fmenu' %}
    <div id=\"fullpage\"> 
        {% page %}               
    </div>    
        

        <!-- Scripts -->
        
        
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/fullpage.js@3.0.1/vendors/scrolloverflow.min.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/fullpage.js@3.0.1/dist/fullpage.min.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/fullpage.js@3.0.1/dist/fullpage.extensions.min.js\"></script>
        <script src=\"{{ 'assets/js/modernizr-custom.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/flickity.pkgd.min.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/fitty.min.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/function.js'|theme }}\"></script>
        
        
        {% scripts %}
        
        {% framework extras %}
        

    </body>
    
</html>", "/mnt/web317/a2/52/59113052/htdocs/neu-2018/themes/pachmann-2/layouts/default.htm", "");
    }
}
