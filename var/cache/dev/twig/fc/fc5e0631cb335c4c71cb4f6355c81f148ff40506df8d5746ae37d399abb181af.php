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
        $__internal_4d90b0efbed5b01086b1dad41ed1015921a6027ee809bface0fbafe94667f6d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d90b0efbed5b01086b1dad41ed1015921a6027ee809bface0fbafe94667f6d5->enter($__internal_4d90b0efbed5b01086b1dad41ed1015921a6027ee809bface0fbafe94667f6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_215bc60fa99356ee81b65f531321288453287dbd6aa3824da6929d018e77b04a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_215bc60fa99356ee81b65f531321288453287dbd6aa3824da6929d018e77b04a->enter($__internal_215bc60fa99356ee81b65f531321288453287dbd6aa3824da6929d018e77b04a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_4d90b0efbed5b01086b1dad41ed1015921a6027ee809bface0fbafe94667f6d5->leave($__internal_4d90b0efbed5b01086b1dad41ed1015921a6027ee809bface0fbafe94667f6d5_prof);

        
        $__internal_215bc60fa99356ee81b65f531321288453287dbd6aa3824da6929d018e77b04a->leave($__internal_215bc60fa99356ee81b65f531321288453287dbd6aa3824da6929d018e77b04a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ebc2dab132d9fe7e464be3b45491fd8951d1e92a011f4af0ffafa39897b61a36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebc2dab132d9fe7e464be3b45491fd8951d1e92a011f4af0ffafa39897b61a36->enter($__internal_ebc2dab132d9fe7e464be3b45491fd8951d1e92a011f4af0ffafa39897b61a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_259180ed5c71b5eabc0060e811b7e7b8d7745e6e68f6d8f1d856be60b3024783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_259180ed5c71b5eabc0060e811b7e7b8d7745e6e68f6d8f1d856be60b3024783->enter($__internal_259180ed5c71b5eabc0060e811b7e7b8d7745e6e68f6d8f1d856be60b3024783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_259180ed5c71b5eabc0060e811b7e7b8d7745e6e68f6d8f1d856be60b3024783->leave($__internal_259180ed5c71b5eabc0060e811b7e7b8d7745e6e68f6d8f1d856be60b3024783_prof);

        
        $__internal_ebc2dab132d9fe7e464be3b45491fd8951d1e92a011f4af0ffafa39897b61a36->leave($__internal_ebc2dab132d9fe7e464be3b45491fd8951d1e92a011f4af0ffafa39897b61a36_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_36ceee7a62e63707ffff927d5fcd6b103f8502a8a49c5c02b57a14732acbe356 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36ceee7a62e63707ffff927d5fcd6b103f8502a8a49c5c02b57a14732acbe356->enter($__internal_36ceee7a62e63707ffff927d5fcd6b103f8502a8a49c5c02b57a14732acbe356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_392d4c7dbacd8b68731a3f9fd1a6e4fd3ca061f9bdda9690d107386599375055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_392d4c7dbacd8b68731a3f9fd1a6e4fd3ca061f9bdda9690d107386599375055->enter($__internal_392d4c7dbacd8b68731a3f9fd1a6e4fd3ca061f9bdda9690d107386599375055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_392d4c7dbacd8b68731a3f9fd1a6e4fd3ca061f9bdda9690d107386599375055->leave($__internal_392d4c7dbacd8b68731a3f9fd1a6e4fd3ca061f9bdda9690d107386599375055_prof);

        
        $__internal_36ceee7a62e63707ffff927d5fcd6b103f8502a8a49c5c02b57a14732acbe356->leave($__internal_36ceee7a62e63707ffff927d5fcd6b103f8502a8a49c5c02b57a14732acbe356_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_6674b7e639655ae11d03b55549dbf346aa0cce32d7d361fe2cb09a11a27fda15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6674b7e639655ae11d03b55549dbf346aa0cce32d7d361fe2cb09a11a27fda15->enter($__internal_6674b7e639655ae11d03b55549dbf346aa0cce32d7d361fe2cb09a11a27fda15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3ae6ae886ca237aeac96af52160ea572ac6043871a087cccf51df9bec78f26fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ae6ae886ca237aeac96af52160ea572ac6043871a087cccf51df9bec78f26fa->enter($__internal_3ae6ae886ca237aeac96af52160ea572ac6043871a087cccf51df9bec78f26fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3ae6ae886ca237aeac96af52160ea572ac6043871a087cccf51df9bec78f26fa->leave($__internal_3ae6ae886ca237aeac96af52160ea572ac6043871a087cccf51df9bec78f26fa_prof);

        
        $__internal_6674b7e639655ae11d03b55549dbf346aa0cce32d7d361fe2cb09a11a27fda15->leave($__internal_6674b7e639655ae11d03b55549dbf346aa0cce32d7d361fe2cb09a11a27fda15_prof);

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
