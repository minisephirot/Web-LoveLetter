<?php

/* base.html.twig */
class __TwigTemplate_7a336d6f07f7cdfede1cac18bf5cf5d8437940e5d16e2ab7f7822c2f5d01c73d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e270143c0e232036df7adca74e89e53822ac55e28ad1d078987185d813d3984e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e270143c0e232036df7adca74e89e53822ac55e28ad1d078987185d813d3984e->enter($__internal_e270143c0e232036df7adca74e89e53822ac55e28ad1d078987185d813d3984e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_3dc911235ca43f317afb46007c08ca05e91ebe6ab097dac5b9333a5cc6ccc341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dc911235ca43f317afb46007c08ca05e91ebe6ab097dac5b9333a5cc6ccc341->enter($__internal_3dc911235ca43f317afb46007c08ca05e91ebe6ab097dac5b9333a5cc6ccc341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_e270143c0e232036df7adca74e89e53822ac55e28ad1d078987185d813d3984e->leave($__internal_e270143c0e232036df7adca74e89e53822ac55e28ad1d078987185d813d3984e_prof);

        
        $__internal_3dc911235ca43f317afb46007c08ca05e91ebe6ab097dac5b9333a5cc6ccc341->leave($__internal_3dc911235ca43f317afb46007c08ca05e91ebe6ab097dac5b9333a5cc6ccc341_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e59c21be0ef98d1f4b25882648394a44ad61a24e174ed2ece19724848f69c417 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e59c21be0ef98d1f4b25882648394a44ad61a24e174ed2ece19724848f69c417->enter($__internal_e59c21be0ef98d1f4b25882648394a44ad61a24e174ed2ece19724848f69c417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d5fd9fdd915d5e39e0484f2b06babf8fcf04cac3ccebff5d061df3a830f9d623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5fd9fdd915d5e39e0484f2b06babf8fcf04cac3ccebff5d061df3a830f9d623->enter($__internal_d5fd9fdd915d5e39e0484f2b06babf8fcf04cac3ccebff5d061df3a830f9d623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d5fd9fdd915d5e39e0484f2b06babf8fcf04cac3ccebff5d061df3a830f9d623->leave($__internal_d5fd9fdd915d5e39e0484f2b06babf8fcf04cac3ccebff5d061df3a830f9d623_prof);

        
        $__internal_e59c21be0ef98d1f4b25882648394a44ad61a24e174ed2ece19724848f69c417->leave($__internal_e59c21be0ef98d1f4b25882648394a44ad61a24e174ed2ece19724848f69c417_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b1ce7e96ff3d9646dfea98e717cf3ee3be5db91b098e6a19b0c4ce267259227c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1ce7e96ff3d9646dfea98e717cf3ee3be5db91b098e6a19b0c4ce267259227c->enter($__internal_b1ce7e96ff3d9646dfea98e717cf3ee3be5db91b098e6a19b0c4ce267259227c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_299051c5c49967209fca23df1ebcf61d476fc6f485a0f43fec5aea7d87ef86dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_299051c5c49967209fca23df1ebcf61d476fc6f485a0f43fec5aea7d87ef86dd->enter($__internal_299051c5c49967209fca23df1ebcf61d476fc6f485a0f43fec5aea7d87ef86dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_299051c5c49967209fca23df1ebcf61d476fc6f485a0f43fec5aea7d87ef86dd->leave($__internal_299051c5c49967209fca23df1ebcf61d476fc6f485a0f43fec5aea7d87ef86dd_prof);

        
        $__internal_b1ce7e96ff3d9646dfea98e717cf3ee3be5db91b098e6a19b0c4ce267259227c->leave($__internal_b1ce7e96ff3d9646dfea98e717cf3ee3be5db91b098e6a19b0c4ce267259227c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_68073ecea96dcdbdcefd471722192a695b35272785f2a0810a8fffd328ea301d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68073ecea96dcdbdcefd471722192a695b35272785f2a0810a8fffd328ea301d->enter($__internal_68073ecea96dcdbdcefd471722192a695b35272785f2a0810a8fffd328ea301d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0ee29fdbc0d7aef751a6fd52c990333f326de0aee886f1d76aab8b79a2c2559c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ee29fdbc0d7aef751a6fd52c990333f326de0aee886f1d76aab8b79a2c2559c->enter($__internal_0ee29fdbc0d7aef751a6fd52c990333f326de0aee886f1d76aab8b79a2c2559c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0ee29fdbc0d7aef751a6fd52c990333f326de0aee886f1d76aab8b79a2c2559c->leave($__internal_0ee29fdbc0d7aef751a6fd52c990333f326de0aee886f1d76aab8b79a2c2559c_prof);

        
        $__internal_68073ecea96dcdbdcefd471722192a695b35272785f2a0810a8fffd328ea301d->leave($__internal_68073ecea96dcdbdcefd471722192a695b35272785f2a0810a8fffd328ea301d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_338b97fec56cdeb278baf58f1c364c79cfe3b6073275d66d8a08fdd45198705a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_338b97fec56cdeb278baf58f1c364c79cfe3b6073275d66d8a08fdd45198705a->enter($__internal_338b97fec56cdeb278baf58f1c364c79cfe3b6073275d66d8a08fdd45198705a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e85e7c4d92480f5e88afd75dc63619837908d7a1cb89e93bdcc62f2abb739803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e85e7c4d92480f5e88afd75dc63619837908d7a1cb89e93bdcc62f2abb739803->enter($__internal_e85e7c4d92480f5e88afd75dc63619837908d7a1cb89e93bdcc62f2abb739803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e85e7c4d92480f5e88afd75dc63619837908d7a1cb89e93bdcc62f2abb739803->leave($__internal_e85e7c4d92480f5e88afd75dc63619837908d7a1cb89e93bdcc62f2abb739803_prof);

        
        $__internal_338b97fec56cdeb278baf58f1c364c79cfe3b6073275d66d8a08fdd45198705a->leave($__internal_338b97fec56cdeb278baf58f1c364c79cfe3b6073275d66d8a08fdd45198705a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\app\\Resources\\views\\base.html.twig");
    }
}
