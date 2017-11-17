<?php

/* @EJLove/Default/layout.html.twig */
class __TwigTemplate_b4e9eb3f5183f5b10ab23b0b54f491ae647224dd6d4b49df8315d4f589b6f730 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "@EJLove/Default/layout.html.twig", 3);
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
        $__internal_ae5945eeb51faddf200ab49be1307dbd055ab062c1caf22d958f7da35a1cab49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae5945eeb51faddf200ab49be1307dbd055ab062c1caf22d958f7da35a1cab49->enter($__internal_ae5945eeb51faddf200ab49be1307dbd055ab062c1caf22d958f7da35a1cab49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EJLove/Default/layout.html.twig"));

        $__internal_fa092c8a8d309e21726c4fda52fea7bfecca17e0ac5355225155f84ba634447f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa092c8a8d309e21726c4fda52fea7bfecca17e0ac5355225155f84ba634447f->enter($__internal_fa092c8a8d309e21726c4fda52fea7bfecca17e0ac5355225155f84ba634447f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EJLove/Default/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae5945eeb51faddf200ab49be1307dbd055ab062c1caf22d958f7da35a1cab49->leave($__internal_ae5945eeb51faddf200ab49be1307dbd055ab062c1caf22d958f7da35a1cab49_prof);

        
        $__internal_fa092c8a8d309e21726c4fda52fea7bfecca17e0ac5355225155f84ba634447f->leave($__internal_fa092c8a8d309e21726c4fda52fea7bfecca17e0ac5355225155f84ba634447f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e83bd2759bdf855a91e05f74e19b9b5626ec8d073582bd622f53d0b44299d2b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e83bd2759bdf855a91e05f74e19b9b5626ec8d073582bd622f53d0b44299d2b3->enter($__internal_e83bd2759bdf855a91e05f74e19b9b5626ec8d073582bd622f53d0b44299d2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d6cc4b7711748458658bf0b7a4d7a4a2c6cbdf94e9a111c9f3393ecd4add41e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6cc4b7711748458658bf0b7a4d7a4a2c6cbdf94e9a111c9f3393ecd4add41e5->enter($__internal_d6cc4b7711748458658bf0b7a4d7a4a2c6cbdf94e9a111c9f3393ecd4add41e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Partie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d6cc4b7711748458658bf0b7a4d7a4a2c6cbdf94e9a111c9f3393ecd4add41e5->leave($__internal_d6cc4b7711748458658bf0b7a4d7a4a2c6cbdf94e9a111c9f3393ecd4add41e5_prof);

        
        $__internal_e83bd2759bdf855a91e05f74e19b9b5626ec8d073582bd622f53d0b44299d2b3->leave($__internal_e83bd2759bdf855a91e05f74e19b9b5626ec8d073582bd622f53d0b44299d2b3_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6c5963d5c16f7579d3f4712df0254661cb1225b6d0dd00e19ca0cfa0612b161 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6c5963d5c16f7579d3f4712df0254661cb1225b6d0dd00e19ca0cfa0612b161->enter($__internal_a6c5963d5c16f7579d3f4712df0254661cb1225b6d0dd00e19ca0cfa0612b161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_514571f46b455cc8e01b8f0e0bf839902e180cf2307fd1ae91140bb507f62b71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_514571f46b455cc8e01b8f0e0bf839902e180cf2307fd1ae91140bb507f62b71->enter($__internal_514571f46b455cc8e01b8f0e0bf839902e180cf2307fd1ae91140bb507f62b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    ";
        // line 12
        echo "    ";
        $this->displayBlock('ll_body', $context, $blocks);
        // line 14
        echo "
";
        
        $__internal_514571f46b455cc8e01b8f0e0bf839902e180cf2307fd1ae91140bb507f62b71->leave($__internal_514571f46b455cc8e01b8f0e0bf839902e180cf2307fd1ae91140bb507f62b71_prof);

        
        $__internal_a6c5963d5c16f7579d3f4712df0254661cb1225b6d0dd00e19ca0cfa0612b161->leave($__internal_a6c5963d5c16f7579d3f4712df0254661cb1225b6d0dd00e19ca0cfa0612b161_prof);

    }

    // line 12
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_b6a00d40aaab3d541cbe3f15c06d11b841b2c51423c4f3b59375f9345d9057a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6a00d40aaab3d541cbe3f15c06d11b841b2c51423c4f3b59375f9345d9057a2->enter($__internal_b6a00d40aaab3d541cbe3f15c06d11b841b2c51423c4f3b59375f9345d9057a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_1681fb76062ecc43209a2d317bf827d928a7ad57cf654f29e088fdf1b5554f2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1681fb76062ecc43209a2d317bf827d928a7ad57cf654f29e088fdf1b5554f2f->enter($__internal_1681fb76062ecc43209a2d317bf827d928a7ad57cf654f29e088fdf1b5554f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        // line 13
        echo "    ";
        
        $__internal_1681fb76062ecc43209a2d317bf827d928a7ad57cf654f29e088fdf1b5554f2f->leave($__internal_1681fb76062ecc43209a2d317bf827d928a7ad57cf654f29e088fdf1b5554f2f_prof);

        
        $__internal_b6a00d40aaab3d541cbe3f15c06d11b841b2c51423c4f3b59375f9345d9057a2->leave($__internal_b6a00d40aaab3d541cbe3f15c06d11b841b2c51423c4f3b59375f9345d9057a2_prof);

    }

    public function getTemplateName()
    {
        return "@EJLove/Default/layout.html.twig";
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

{% endblock %}", "@EJLove/Default/layout.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\src\\EJ\\LoveBundle\\Resources\\views\\Default\\layout.html.twig");
    }
}
