<?php

/* EJLoveBundle:Default:layout.html.twig */
class __TwigTemplate_9014795f449f8dd1fe853e2c30baabfee5049fcb5c29361c53283272cc2d2c2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "EJLoveBundle:Default:layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'll_body' => array($this, 'block_ll_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c25c55f03200f0c6a3b1e6278af00abdbc32f9e851aa12958f41940ef045af5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c25c55f03200f0c6a3b1e6278af00abdbc32f9e851aa12958f41940ef045af5f->enter($__internal_c25c55f03200f0c6a3b1e6278af00abdbc32f9e851aa12958f41940ef045af5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:layout.html.twig"));

        $__internal_802cfcd6503dbb1e419b68eeb88752c0bacdcb3ef2b0e1ad3e9e05efabf0e93f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_802cfcd6503dbb1e419b68eeb88752c0bacdcb3ef2b0e1ad3e9e05efabf0e93f->enter($__internal_802cfcd6503dbb1e419b68eeb88752c0bacdcb3ef2b0e1ad3e9e05efabf0e93f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c25c55f03200f0c6a3b1e6278af00abdbc32f9e851aa12958f41940ef045af5f->leave($__internal_c25c55f03200f0c6a3b1e6278af00abdbc32f9e851aa12958f41940ef045af5f_prof);

        
        $__internal_802cfcd6503dbb1e419b68eeb88752c0bacdcb3ef2b0e1ad3e9e05efabf0e93f->leave($__internal_802cfcd6503dbb1e419b68eeb88752c0bacdcb3ef2b0e1ad3e9e05efabf0e93f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f527d886d0fabff17eb75477fe4f843bcc22222da83de7da8223eb8549e1caa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f527d886d0fabff17eb75477fe4f843bcc22222da83de7da8223eb8549e1caa->enter($__internal_4f527d886d0fabff17eb75477fe4f843bcc22222da83de7da8223eb8549e1caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bc1bf40ca09e2ee139868e06b731dc7539bb72fb850d7643a868427ead33c720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc1bf40ca09e2ee139868e06b731dc7539bb72fb850d7643a868427ead33c720->enter($__internal_bc1bf40ca09e2ee139868e06b731dc7539bb72fb850d7643a868427ead33c720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Partie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_bc1bf40ca09e2ee139868e06b731dc7539bb72fb850d7643a868427ead33c720->leave($__internal_bc1bf40ca09e2ee139868e06b731dc7539bb72fb850d7643a868427ead33c720_prof);

        
        $__internal_4f527d886d0fabff17eb75477fe4f843bcc22222da83de7da8223eb8549e1caa->leave($__internal_4f527d886d0fabff17eb75477fe4f843bcc22222da83de7da8223eb8549e1caa_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d86813414875986b1c33aa8546124ea47394cd1a96ba4ecea16b8bbd00c95e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d86813414875986b1c33aa8546124ea47394cd1a96ba4ecea16b8bbd00c95e3->enter($__internal_5d86813414875986b1c33aa8546124ea47394cd1a96ba4ecea16b8bbd00c95e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_63bf3925acba4c4089c869db3e14b82bc389f851e0312e8a71bea4f99816e03b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63bf3925acba4c4089c869db3e14b82bc389f851e0312e8a71bea4f99816e03b->enter($__internal_63bf3925acba4c4089c869db3e14b82bc389f851e0312e8a71bea4f99816e03b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    ";
        // line 12
        echo "    ";
        $this->displayBlock('ll_body', $context, $blocks);
        // line 14
        echo "
";
        
        $__internal_63bf3925acba4c4089c869db3e14b82bc389f851e0312e8a71bea4f99816e03b->leave($__internal_63bf3925acba4c4089c869db3e14b82bc389f851e0312e8a71bea4f99816e03b_prof);

        
        $__internal_5d86813414875986b1c33aa8546124ea47394cd1a96ba4ecea16b8bbd00c95e3->leave($__internal_5d86813414875986b1c33aa8546124ea47394cd1a96ba4ecea16b8bbd00c95e3_prof);

    }

    // line 12
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_14338403e69804045cd7d5e63df2e6f2005fd5c5c3afd29c3cf05f87a65147cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14338403e69804045cd7d5e63df2e6f2005fd5c5c3afd29c3cf05f87a65147cb->enter($__internal_14338403e69804045cd7d5e63df2e6f2005fd5c5c3afd29c3cf05f87a65147cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_84d8c134503b9242a2431ee3b2cab8ee9a18ceb04b65c29cd13ba76a5180e539 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84d8c134503b9242a2431ee3b2cab8ee9a18ceb04b65c29cd13ba76a5180e539->enter($__internal_84d8c134503b9242a2431ee3b2cab8ee9a18ceb04b65c29cd13ba76a5180e539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        // line 13
        echo "    ";
        
        $__internal_84d8c134503b9242a2431ee3b2cab8ee9a18ceb04b65c29cd13ba76a5180e539->leave($__internal_84d8c134503b9242a2431ee3b2cab8ee9a18ceb04b65c29cd13ba76a5180e539_prof);

        
        $__internal_14338403e69804045cd7d5e63df2e6f2005fd5c5c3afd29c3cf05f87a65147cb->leave($__internal_14338403e69804045cd7d5e63df2e6f2005fd5c5c3afd29c3cf05f87a65147cb_prof);

    }

    public function getTemplateName()
    {
        return "EJLoveBundle:Default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 13,  90 => 12,  79 => 14,  76 => 12,  73 => 10,  64 => 9,  51 => 6,  42 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ProjetWeb/TestBundle/Resources/views/layout.html.twig #}

{% extends \"::layout.html.twig\" %}

{% block title %}
    Partie - {{ parent() }}
{% endblock %}

{% block body %}

    {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
    {% block ll_body %}
    {% endblock %}

{% endblock %}", "EJLoveBundle:Default:layout.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\src\\EJ\\LoveBundle/Resources/views/Default/layout.html.twig");
    }
}
