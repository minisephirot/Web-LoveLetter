<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_d6d8bf321a7b87591a33bc98efee3737c3f1a5dbb11b9a4d4bb9c894567d6ea9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5879c89992a5cddbe91c0eca05bb70a6920bf463e23a5e1ef3330668abe517b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5879c89992a5cddbe91c0eca05bb70a6920bf463e23a5e1ef3330668abe517b->enter($__internal_f5879c89992a5cddbe91c0eca05bb70a6920bf463e23a5e1ef3330668abe517b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_afc0dda3b3a4c36b76c5575dbdb1f4f4bfa84db7e1e783cc0eeab09aef75decd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afc0dda3b3a4c36b76c5575dbdb1f4f4bfa84db7e1e783cc0eeab09aef75decd->enter($__internal_afc0dda3b3a4c36b76c5575dbdb1f4f4bfa84db7e1e783cc0eeab09aef75decd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_f5879c89992a5cddbe91c0eca05bb70a6920bf463e23a5e1ef3330668abe517b->leave($__internal_f5879c89992a5cddbe91c0eca05bb70a6920bf463e23a5e1ef3330668abe517b_prof);

        
        $__internal_afc0dda3b3a4c36b76c5575dbdb1f4f4bfa84db7e1e783cc0eeab09aef75decd->leave($__internal_afc0dda3b3a4c36b76c5575dbdb1f4f4bfa84db7e1e783cc0eeab09aef75decd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0cea5d8de9cb455db593d01f7e3b462531b2d2a9bfb9e25b522cd61156a7f3c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cea5d8de9cb455db593d01f7e3b462531b2d2a9bfb9e25b522cd61156a7f3c8->enter($__internal_0cea5d8de9cb455db593d01f7e3b462531b2d2a9bfb9e25b522cd61156a7f3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1625c79c9ba9803c29b98ff91406980279608aa47f72dcdf590d41ba3e4a4906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1625c79c9ba9803c29b98ff91406980279608aa47f72dcdf590d41ba3e4a4906->enter($__internal_1625c79c9ba9803c29b98ff91406980279608aa47f72dcdf590d41ba3e4a4906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_1625c79c9ba9803c29b98ff91406980279608aa47f72dcdf590d41ba3e4a4906->leave($__internal_1625c79c9ba9803c29b98ff91406980279608aa47f72dcdf590d41ba3e4a4906_prof);

        
        $__internal_0cea5d8de9cb455db593d01f7e3b462531b2d2a9bfb9e25b522cd61156a7f3c8->leave($__internal_0cea5d8de9cb455db593d01f7e3b462531b2d2a9bfb9e25b522cd61156a7f3c8_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_e9e15fb3480b18ab33654d3d29e30277c539134b27b332131a6e920a0a66bf71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9e15fb3480b18ab33654d3d29e30277c539134b27b332131a6e920a0a66bf71->enter($__internal_e9e15fb3480b18ab33654d3d29e30277c539134b27b332131a6e920a0a66bf71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2accd7fd45815b1050beee225f1aeec1229ec3c1ebc6acaa30a9613ec61b82ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2accd7fd45815b1050beee225f1aeec1229ec3c1ebc6acaa30a9613ec61b82ce->enter($__internal_2accd7fd45815b1050beee225f1aeec1229ec3c1ebc6acaa30a9613ec61b82ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_2accd7fd45815b1050beee225f1aeec1229ec3c1ebc6acaa30a9613ec61b82ce->leave($__internal_2accd7fd45815b1050beee225f1aeec1229ec3c1ebc6acaa30a9613ec61b82ce_prof);

        
        $__internal_e9e15fb3480b18ab33654d3d29e30277c539134b27b332131a6e920a0a66bf71->leave($__internal_e9e15fb3480b18ab33654d3d29e30277c539134b27b332131a6e920a0a66bf71_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9b238d0371587cb7021f7947af2800d871b4d74db40af2a233393185ce7865b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9b238d0371587cb7021f7947af2800d871b4d74db40af2a233393185ce7865b->enter($__internal_c9b238d0371587cb7021f7947af2800d871b4d74db40af2a233393185ce7865b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_08a600e6b939e3eb2422a4bec5791bdca2a40ec05e521d388d55a60409425790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08a600e6b939e3eb2422a4bec5791bdca2a40ec05e521d388d55a60409425790->enter($__internal_08a600e6b939e3eb2422a4bec5791bdca2a40ec05e521d388d55a60409425790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_08a600e6b939e3eb2422a4bec5791bdca2a40ec05e521d388d55a60409425790->leave($__internal_08a600e6b939e3eb2422a4bec5791bdca2a40ec05e521d388d55a60409425790_prof);

        
        $__internal_c9b238d0371587cb7021f7947af2800d871b4d74db40af2a233393185ce7865b->leave($__internal_c9b238d0371587cb7021f7947af2800d871b4d74db40af2a233393185ce7865b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
