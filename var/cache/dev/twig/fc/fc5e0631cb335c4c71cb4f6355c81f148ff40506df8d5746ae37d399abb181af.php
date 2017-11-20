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
        $__internal_891e690060c20356c9f6756e456147c987c01ce67695aab05f7b5cf7b574a0a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_891e690060c20356c9f6756e456147c987c01ce67695aab05f7b5cf7b574a0a5->enter($__internal_891e690060c20356c9f6756e456147c987c01ce67695aab05f7b5cf7b574a0a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_ed86213fb2b1c5ca2a9510ddb414f9e38e393956e4c07ddd5cf2725e6379bc83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed86213fb2b1c5ca2a9510ddb414f9e38e393956e4c07ddd5cf2725e6379bc83->enter($__internal_ed86213fb2b1c5ca2a9510ddb414f9e38e393956e4c07ddd5cf2725e6379bc83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_891e690060c20356c9f6756e456147c987c01ce67695aab05f7b5cf7b574a0a5->leave($__internal_891e690060c20356c9f6756e456147c987c01ce67695aab05f7b5cf7b574a0a5_prof);

        
        $__internal_ed86213fb2b1c5ca2a9510ddb414f9e38e393956e4c07ddd5cf2725e6379bc83->leave($__internal_ed86213fb2b1c5ca2a9510ddb414f9e38e393956e4c07ddd5cf2725e6379bc83_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_361c19d9047360897df4f8ccdc6d92999e251bfbba54a48a0d406b4b5c2d9300 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_361c19d9047360897df4f8ccdc6d92999e251bfbba54a48a0d406b4b5c2d9300->enter($__internal_361c19d9047360897df4f8ccdc6d92999e251bfbba54a48a0d406b4b5c2d9300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a6ed104762c831db992ce71fbe857296fccf074acdbd392e27eb785d879ee6d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6ed104762c831db992ce71fbe857296fccf074acdbd392e27eb785d879ee6d7->enter($__internal_a6ed104762c831db992ce71fbe857296fccf074acdbd392e27eb785d879ee6d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a6ed104762c831db992ce71fbe857296fccf074acdbd392e27eb785d879ee6d7->leave($__internal_a6ed104762c831db992ce71fbe857296fccf074acdbd392e27eb785d879ee6d7_prof);

        
        $__internal_361c19d9047360897df4f8ccdc6d92999e251bfbba54a48a0d406b4b5c2d9300->leave($__internal_361c19d9047360897df4f8ccdc6d92999e251bfbba54a48a0d406b4b5c2d9300_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_b558e6de9e4d2a23dfed98129aa790c66246646b0cfccc75fac790d3cec902b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b558e6de9e4d2a23dfed98129aa790c66246646b0cfccc75fac790d3cec902b2->enter($__internal_b558e6de9e4d2a23dfed98129aa790c66246646b0cfccc75fac790d3cec902b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_001392af8dda098be7965aa4e36f71e7d7c0e1968487c3b380fc3ac86eaae037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_001392af8dda098be7965aa4e36f71e7d7c0e1968487c3b380fc3ac86eaae037->enter($__internal_001392af8dda098be7965aa4e36f71e7d7c0e1968487c3b380fc3ac86eaae037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_001392af8dda098be7965aa4e36f71e7d7c0e1968487c3b380fc3ac86eaae037->leave($__internal_001392af8dda098be7965aa4e36f71e7d7c0e1968487c3b380fc3ac86eaae037_prof);

        
        $__internal_b558e6de9e4d2a23dfed98129aa790c66246646b0cfccc75fac790d3cec902b2->leave($__internal_b558e6de9e4d2a23dfed98129aa790c66246646b0cfccc75fac790d3cec902b2_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_06b4426181fb710056a17baf6943f48049aa1b7baf2adda3885fda6c9af2b544 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06b4426181fb710056a17baf6943f48049aa1b7baf2adda3885fda6c9af2b544->enter($__internal_06b4426181fb710056a17baf6943f48049aa1b7baf2adda3885fda6c9af2b544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_683f2ca41ee425e8f48a85dbc14bdd1574b57143b0666e45c0efa9cdd3f27b97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_683f2ca41ee425e8f48a85dbc14bdd1574b57143b0666e45c0efa9cdd3f27b97->enter($__internal_683f2ca41ee425e8f48a85dbc14bdd1574b57143b0666e45c0efa9cdd3f27b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_683f2ca41ee425e8f48a85dbc14bdd1574b57143b0666e45c0efa9cdd3f27b97->leave($__internal_683f2ca41ee425e8f48a85dbc14bdd1574b57143b0666e45c0efa9cdd3f27b97_prof);

        
        $__internal_06b4426181fb710056a17baf6943f48049aa1b7baf2adda3885fda6c9af2b544->leave($__internal_06b4426181fb710056a17baf6943f48049aa1b7baf2adda3885fda6c9af2b544_prof);

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
