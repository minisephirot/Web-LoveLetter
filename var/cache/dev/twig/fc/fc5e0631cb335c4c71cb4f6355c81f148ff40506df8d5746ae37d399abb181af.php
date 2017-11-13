<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_8e55104425ac4768b0f4a197a915138c03f4cc805841fdbc6b03de8a4ee9fa16 extends Twig_Template
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
        $__internal_6de3046b736429c7b13b52ba719b02afdc26259f407bdc3a53d271913cd2ea20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6de3046b736429c7b13b52ba719b02afdc26259f407bdc3a53d271913cd2ea20->enter($__internal_6de3046b736429c7b13b52ba719b02afdc26259f407bdc3a53d271913cd2ea20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_f07d4147bd9a051d77c0a17aee8e312eb157b4ba292873a894a361b98a4e4f6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f07d4147bd9a051d77c0a17aee8e312eb157b4ba292873a894a361b98a4e4f6d->enter($__internal_f07d4147bd9a051d77c0a17aee8e312eb157b4ba292873a894a361b98a4e4f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_6de3046b736429c7b13b52ba719b02afdc26259f407bdc3a53d271913cd2ea20->leave($__internal_6de3046b736429c7b13b52ba719b02afdc26259f407bdc3a53d271913cd2ea20_prof);

        
        $__internal_f07d4147bd9a051d77c0a17aee8e312eb157b4ba292873a894a361b98a4e4f6d->leave($__internal_f07d4147bd9a051d77c0a17aee8e312eb157b4ba292873a894a361b98a4e4f6d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c11f932e608a366a138f9bca48158e501ebe21b20c1e2506694a25c10bfe4ff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c11f932e608a366a138f9bca48158e501ebe21b20c1e2506694a25c10bfe4ff2->enter($__internal_c11f932e608a366a138f9bca48158e501ebe21b20c1e2506694a25c10bfe4ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_461f25577d769784939f6a6809b90c329cb0bf0a0395c959531476d7742714a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_461f25577d769784939f6a6809b90c329cb0bf0a0395c959531476d7742714a1->enter($__internal_461f25577d769784939f6a6809b90c329cb0bf0a0395c959531476d7742714a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_461f25577d769784939f6a6809b90c329cb0bf0a0395c959531476d7742714a1->leave($__internal_461f25577d769784939f6a6809b90c329cb0bf0a0395c959531476d7742714a1_prof);

        
        $__internal_c11f932e608a366a138f9bca48158e501ebe21b20c1e2506694a25c10bfe4ff2->leave($__internal_c11f932e608a366a138f9bca48158e501ebe21b20c1e2506694a25c10bfe4ff2_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_bd7aba71c2b2d67828103f46f291691cf957867fc584a6f2a301a6e10ec97fb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd7aba71c2b2d67828103f46f291691cf957867fc584a6f2a301a6e10ec97fb4->enter($__internal_bd7aba71c2b2d67828103f46f291691cf957867fc584a6f2a301a6e10ec97fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_946467cb912a2586b404407b48a4cb61c713c7b17188da5d0ab28152b1a65c79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_946467cb912a2586b404407b48a4cb61c713c7b17188da5d0ab28152b1a65c79->enter($__internal_946467cb912a2586b404407b48a4cb61c713c7b17188da5d0ab28152b1a65c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_946467cb912a2586b404407b48a4cb61c713c7b17188da5d0ab28152b1a65c79->leave($__internal_946467cb912a2586b404407b48a4cb61c713c7b17188da5d0ab28152b1a65c79_prof);

        
        $__internal_bd7aba71c2b2d67828103f46f291691cf957867fc584a6f2a301a6e10ec97fb4->leave($__internal_bd7aba71c2b2d67828103f46f291691cf957867fc584a6f2a301a6e10ec97fb4_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_65bf2e6bf899da14c2a40a58c8f8b786d5f0fd03664866491869aeb10d7a52ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65bf2e6bf899da14c2a40a58c8f8b786d5f0fd03664866491869aeb10d7a52ae->enter($__internal_65bf2e6bf899da14c2a40a58c8f8b786d5f0fd03664866491869aeb10d7a52ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e3ae729f60763a0b5192d1419c5e06cec361ff8a10030208f4bd4447af5c5101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3ae729f60763a0b5192d1419c5e06cec361ff8a10030208f4bd4447af5c5101->enter($__internal_e3ae729f60763a0b5192d1419c5e06cec361ff8a10030208f4bd4447af5c5101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e3ae729f60763a0b5192d1419c5e06cec361ff8a10030208f4bd4447af5c5101->leave($__internal_e3ae729f60763a0b5192d1419c5e06cec361ff8a10030208f4bd4447af5c5101_prof);

        
        $__internal_65bf2e6bf899da14c2a40a58c8f8b786d5f0fd03664866491869aeb10d7a52ae->leave($__internal_65bf2e6bf899da14c2a40a58c8f8b786d5f0fd03664866491869aeb10d7a52ae_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
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
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
