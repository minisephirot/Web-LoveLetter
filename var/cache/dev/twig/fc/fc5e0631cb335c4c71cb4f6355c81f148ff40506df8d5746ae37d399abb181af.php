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
        $__internal_39607fa4724d6cc953054169a061f6e9e70070629f1f1a43e9c92547d6af17d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39607fa4724d6cc953054169a061f6e9e70070629f1f1a43e9c92547d6af17d5->enter($__internal_39607fa4724d6cc953054169a061f6e9e70070629f1f1a43e9c92547d6af17d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_38d82edc9cc80508bce900ed3a95794676d03ee864d38f1a189e6c50f5ff99bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38d82edc9cc80508bce900ed3a95794676d03ee864d38f1a189e6c50f5ff99bb->enter($__internal_38d82edc9cc80508bce900ed3a95794676d03ee864d38f1a189e6c50f5ff99bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_39607fa4724d6cc953054169a061f6e9e70070629f1f1a43e9c92547d6af17d5->leave($__internal_39607fa4724d6cc953054169a061f6e9e70070629f1f1a43e9c92547d6af17d5_prof);

        
        $__internal_38d82edc9cc80508bce900ed3a95794676d03ee864d38f1a189e6c50f5ff99bb->leave($__internal_38d82edc9cc80508bce900ed3a95794676d03ee864d38f1a189e6c50f5ff99bb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1ead7eadf5d1abef88fba2c35c5eb7d6064c9f831d3eca759c69c0d734fe35f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1ead7eadf5d1abef88fba2c35c5eb7d6064c9f831d3eca759c69c0d734fe35f->enter($__internal_e1ead7eadf5d1abef88fba2c35c5eb7d6064c9f831d3eca759c69c0d734fe35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7c666aa014369baed43ee1f188a51001b5a5d2f34727e83b83a02a48fd84f1cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c666aa014369baed43ee1f188a51001b5a5d2f34727e83b83a02a48fd84f1cf->enter($__internal_7c666aa014369baed43ee1f188a51001b5a5d2f34727e83b83a02a48fd84f1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_7c666aa014369baed43ee1f188a51001b5a5d2f34727e83b83a02a48fd84f1cf->leave($__internal_7c666aa014369baed43ee1f188a51001b5a5d2f34727e83b83a02a48fd84f1cf_prof);

        
        $__internal_e1ead7eadf5d1abef88fba2c35c5eb7d6064c9f831d3eca759c69c0d734fe35f->leave($__internal_e1ead7eadf5d1abef88fba2c35c5eb7d6064c9f831d3eca759c69c0d734fe35f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_fd2480b864761633701b28005f8051cd04599cc2e297d0264573a006310d4fea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd2480b864761633701b28005f8051cd04599cc2e297d0264573a006310d4fea->enter($__internal_fd2480b864761633701b28005f8051cd04599cc2e297d0264573a006310d4fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d15b6d099b16b969c66e21857d90e65f71797c2beecf1bd9fa80cbc7054cc6e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d15b6d099b16b969c66e21857d90e65f71797c2beecf1bd9fa80cbc7054cc6e9->enter($__internal_d15b6d099b16b969c66e21857d90e65f71797c2beecf1bd9fa80cbc7054cc6e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_d15b6d099b16b969c66e21857d90e65f71797c2beecf1bd9fa80cbc7054cc6e9->leave($__internal_d15b6d099b16b969c66e21857d90e65f71797c2beecf1bd9fa80cbc7054cc6e9_prof);

        
        $__internal_fd2480b864761633701b28005f8051cd04599cc2e297d0264573a006310d4fea->leave($__internal_fd2480b864761633701b28005f8051cd04599cc2e297d0264573a006310d4fea_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_aaacecad5dc8626a0c91e22e8235563c5a8e7ae250561f5c15bc265b21e5e717 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaacecad5dc8626a0c91e22e8235563c5a8e7ae250561f5c15bc265b21e5e717->enter($__internal_aaacecad5dc8626a0c91e22e8235563c5a8e7ae250561f5c15bc265b21e5e717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8845edf657715624708afba5e80de19c9311ef7f3d556e48714c29e33eba1d32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8845edf657715624708afba5e80de19c9311ef7f3d556e48714c29e33eba1d32->enter($__internal_8845edf657715624708afba5e80de19c9311ef7f3d556e48714c29e33eba1d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8845edf657715624708afba5e80de19c9311ef7f3d556e48714c29e33eba1d32->leave($__internal_8845edf657715624708afba5e80de19c9311ef7f3d556e48714c29e33eba1d32_prof);

        
        $__internal_aaacecad5dc8626a0c91e22e8235563c5a8e7ae250561f5c15bc265b21e5e717->leave($__internal_aaacecad5dc8626a0c91e22e8235563c5a8e7ae250561f5c15bc265b21e5e717_prof);

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
