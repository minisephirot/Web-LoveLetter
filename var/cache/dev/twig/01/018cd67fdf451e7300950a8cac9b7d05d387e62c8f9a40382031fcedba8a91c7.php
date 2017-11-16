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
        $__internal_fc461200f8dd1b168befc843fc0dc1cc32b673f64e7238a0263260398b4253a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc461200f8dd1b168befc843fc0dc1cc32b673f64e7238a0263260398b4253a0->enter($__internal_fc461200f8dd1b168befc843fc0dc1cc32b673f64e7238a0263260398b4253a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_aa1143bc41e3177d1f63feb77cafeea949f94575868d89383d628450b2827af7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa1143bc41e3177d1f63feb77cafeea949f94575868d89383d628450b2827af7->enter($__internal_aa1143bc41e3177d1f63feb77cafeea949f94575868d89383d628450b2827af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_fc461200f8dd1b168befc843fc0dc1cc32b673f64e7238a0263260398b4253a0->leave($__internal_fc461200f8dd1b168befc843fc0dc1cc32b673f64e7238a0263260398b4253a0_prof);

        
        $__internal_aa1143bc41e3177d1f63feb77cafeea949f94575868d89383d628450b2827af7->leave($__internal_aa1143bc41e3177d1f63feb77cafeea949f94575868d89383d628450b2827af7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_37b9266e5f7b350db8dbc732f98e6912b04b7438e0ac11060752fa129468c205 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37b9266e5f7b350db8dbc732f98e6912b04b7438e0ac11060752fa129468c205->enter($__internal_37b9266e5f7b350db8dbc732f98e6912b04b7438e0ac11060752fa129468c205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d736f2001e0f8bbaaed8a945f562615e475bb3838fb6189e0a10817e6b942289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d736f2001e0f8bbaaed8a945f562615e475bb3838fb6189e0a10817e6b942289->enter($__internal_d736f2001e0f8bbaaed8a945f562615e475bb3838fb6189e0a10817e6b942289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d736f2001e0f8bbaaed8a945f562615e475bb3838fb6189e0a10817e6b942289->leave($__internal_d736f2001e0f8bbaaed8a945f562615e475bb3838fb6189e0a10817e6b942289_prof);

        
        $__internal_37b9266e5f7b350db8dbc732f98e6912b04b7438e0ac11060752fa129468c205->leave($__internal_37b9266e5f7b350db8dbc732f98e6912b04b7438e0ac11060752fa129468c205_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_183febefec305dd940c3a9238563a7eb87c83860efaac20bc74bf3b24ec4671b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_183febefec305dd940c3a9238563a7eb87c83860efaac20bc74bf3b24ec4671b->enter($__internal_183febefec305dd940c3a9238563a7eb87c83860efaac20bc74bf3b24ec4671b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6a5d0262a4ac6ea0f5d9e2cd68c11117e7b2303671d0963d46570b6359b9b73f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a5d0262a4ac6ea0f5d9e2cd68c11117e7b2303671d0963d46570b6359b9b73f->enter($__internal_6a5d0262a4ac6ea0f5d9e2cd68c11117e7b2303671d0963d46570b6359b9b73f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6a5d0262a4ac6ea0f5d9e2cd68c11117e7b2303671d0963d46570b6359b9b73f->leave($__internal_6a5d0262a4ac6ea0f5d9e2cd68c11117e7b2303671d0963d46570b6359b9b73f_prof);

        
        $__internal_183febefec305dd940c3a9238563a7eb87c83860efaac20bc74bf3b24ec4671b->leave($__internal_183febefec305dd940c3a9238563a7eb87c83860efaac20bc74bf3b24ec4671b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a78645739f031483a936b9690d50bdc3883d00288d766085e4a3697c235d26c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a78645739f031483a936b9690d50bdc3883d00288d766085e4a3697c235d26c2->enter($__internal_a78645739f031483a936b9690d50bdc3883d00288d766085e4a3697c235d26c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3208e63031c09331780cc06e76ce50ea4aa9e5ba2f7dcec66017df22b68a3a68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3208e63031c09331780cc06e76ce50ea4aa9e5ba2f7dcec66017df22b68a3a68->enter($__internal_3208e63031c09331780cc06e76ce50ea4aa9e5ba2f7dcec66017df22b68a3a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3208e63031c09331780cc06e76ce50ea4aa9e5ba2f7dcec66017df22b68a3a68->leave($__internal_3208e63031c09331780cc06e76ce50ea4aa9e5ba2f7dcec66017df22b68a3a68_prof);

        
        $__internal_a78645739f031483a936b9690d50bdc3883d00288d766085e4a3697c235d26c2->leave($__internal_a78645739f031483a936b9690d50bdc3883d00288d766085e4a3697c235d26c2_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f10235f5e99e1f01c0846367a9f09670164c9ade3937931c4d9009a2782e5e5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f10235f5e99e1f01c0846367a9f09670164c9ade3937931c4d9009a2782e5e5c->enter($__internal_f10235f5e99e1f01c0846367a9f09670164c9ade3937931c4d9009a2782e5e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7d356e0ff0329bb3c2f72004f259bfd68768ba330030ef672a10869068a2d7c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d356e0ff0329bb3c2f72004f259bfd68768ba330030ef672a10869068a2d7c4->enter($__internal_7d356e0ff0329bb3c2f72004f259bfd68768ba330030ef672a10869068a2d7c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7d356e0ff0329bb3c2f72004f259bfd68768ba330030ef672a10869068a2d7c4->leave($__internal_7d356e0ff0329bb3c2f72004f259bfd68768ba330030ef672a10869068a2d7c4_prof);

        
        $__internal_f10235f5e99e1f01c0846367a9f09670164c9ade3937931c4d9009a2782e5e5c->leave($__internal_f10235f5e99e1f01c0846367a9f09670164c9ade3937931c4d9009a2782e5e5c_prof);

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
