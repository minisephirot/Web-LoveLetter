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
        $__internal_981435e4e2b4819a5b68c544009b6446541c0006f7ff046fd2651f4fb81941a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_981435e4e2b4819a5b68c544009b6446541c0006f7ff046fd2651f4fb81941a6->enter($__internal_981435e4e2b4819a5b68c544009b6446541c0006f7ff046fd2651f4fb81941a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_339cee4c87aaaaf1eaa5fc283e4316d5949fb566d71dc8490537e0101a2da1a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_339cee4c87aaaaf1eaa5fc283e4316d5949fb566d71dc8490537e0101a2da1a6->enter($__internal_339cee4c87aaaaf1eaa5fc283e4316d5949fb566d71dc8490537e0101a2da1a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_981435e4e2b4819a5b68c544009b6446541c0006f7ff046fd2651f4fb81941a6->leave($__internal_981435e4e2b4819a5b68c544009b6446541c0006f7ff046fd2651f4fb81941a6_prof);

        
        $__internal_339cee4c87aaaaf1eaa5fc283e4316d5949fb566d71dc8490537e0101a2da1a6->leave($__internal_339cee4c87aaaaf1eaa5fc283e4316d5949fb566d71dc8490537e0101a2da1a6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_064607c144e6fb2ba7a78f38bac8e1df491fd545e18fc4aba57fd7c1664dc3ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_064607c144e6fb2ba7a78f38bac8e1df491fd545e18fc4aba57fd7c1664dc3ac->enter($__internal_064607c144e6fb2ba7a78f38bac8e1df491fd545e18fc4aba57fd7c1664dc3ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d0b5ab9e130b7cda832a6e384df6b68a48753c4d5f9a745cd93d7ddae0ac945d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0b5ab9e130b7cda832a6e384df6b68a48753c4d5f9a745cd93d7ddae0ac945d->enter($__internal_d0b5ab9e130b7cda832a6e384df6b68a48753c4d5f9a745cd93d7ddae0ac945d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d0b5ab9e130b7cda832a6e384df6b68a48753c4d5f9a745cd93d7ddae0ac945d->leave($__internal_d0b5ab9e130b7cda832a6e384df6b68a48753c4d5f9a745cd93d7ddae0ac945d_prof);

        
        $__internal_064607c144e6fb2ba7a78f38bac8e1df491fd545e18fc4aba57fd7c1664dc3ac->leave($__internal_064607c144e6fb2ba7a78f38bac8e1df491fd545e18fc4aba57fd7c1664dc3ac_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_f304d895756c991f914d5ad6dc801459000b64385317e72f2ddb4f45864748e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f304d895756c991f914d5ad6dc801459000b64385317e72f2ddb4f45864748e7->enter($__internal_f304d895756c991f914d5ad6dc801459000b64385317e72f2ddb4f45864748e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f64dcf130fea66a4b7aa2c0fa73f9cd1d08e2dba7831e41358cdc03aa2a1b83c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f64dcf130fea66a4b7aa2c0fa73f9cd1d08e2dba7831e41358cdc03aa2a1b83c->enter($__internal_f64dcf130fea66a4b7aa2c0fa73f9cd1d08e2dba7831e41358cdc03aa2a1b83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_f64dcf130fea66a4b7aa2c0fa73f9cd1d08e2dba7831e41358cdc03aa2a1b83c->leave($__internal_f64dcf130fea66a4b7aa2c0fa73f9cd1d08e2dba7831e41358cdc03aa2a1b83c_prof);

        
        $__internal_f304d895756c991f914d5ad6dc801459000b64385317e72f2ddb4f45864748e7->leave($__internal_f304d895756c991f914d5ad6dc801459000b64385317e72f2ddb4f45864748e7_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_555836957c4a68363b4c5ed4c956c4d66f974e700339ef375b555c0e5297c274 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_555836957c4a68363b4c5ed4c956c4d66f974e700339ef375b555c0e5297c274->enter($__internal_555836957c4a68363b4c5ed4c956c4d66f974e700339ef375b555c0e5297c274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_50589b83beb702a421e1be11c96ed1b7bd44afa57e31944ae3b0d105263ae33b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50589b83beb702a421e1be11c96ed1b7bd44afa57e31944ae3b0d105263ae33b->enter($__internal_50589b83beb702a421e1be11c96ed1b7bd44afa57e31944ae3b0d105263ae33b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_50589b83beb702a421e1be11c96ed1b7bd44afa57e31944ae3b0d105263ae33b->leave($__internal_50589b83beb702a421e1be11c96ed1b7bd44afa57e31944ae3b0d105263ae33b_prof);

        
        $__internal_555836957c4a68363b4c5ed4c956c4d66f974e700339ef375b555c0e5297c274->leave($__internal_555836957c4a68363b4c5ed4c956c4d66f974e700339ef375b555c0e5297c274_prof);

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
