<?php

/* EJLoveBundle:Default:listParty.html.twig */
class __TwigTemplate_5b6b94929f5e4306c5c842a7b4d36c2e95c74169e0f2abc501a4638e99c56518 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EJLoveBundle:Default:layout.html.twig", "EJLoveBundle:Default:listParty.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'll_body' => array($this, 'block_ll_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EJLoveBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d4aa75a4a819f72319d98cf4bd9ba003b31d1a0e65cec9dff5b21171fcf7ee0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d4aa75a4a819f72319d98cf4bd9ba003b31d1a0e65cec9dff5b21171fcf7ee0->enter($__internal_3d4aa75a4a819f72319d98cf4bd9ba003b31d1a0e65cec9dff5b21171fcf7ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:listParty.html.twig"));

        $__internal_eb8ef8b94be95d528f650690c6aceb6135534a174b24508224c766422bf40a30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb8ef8b94be95d528f650690c6aceb6135534a174b24508224c766422bf40a30->enter($__internal_eb8ef8b94be95d528f650690c6aceb6135534a174b24508224c766422bf40a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:listParty.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d4aa75a4a819f72319d98cf4bd9ba003b31d1a0e65cec9dff5b21171fcf7ee0->leave($__internal_3d4aa75a4a819f72319d98cf4bd9ba003b31d1a0e65cec9dff5b21171fcf7ee0_prof);

        
        $__internal_eb8ef8b94be95d528f650690c6aceb6135534a174b24508224c766422bf40a30->leave($__internal_eb8ef8b94be95d528f650690c6aceb6135534a174b24508224c766422bf40a30_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a30858c7da4d0d039d84164f3a1c89fbe5038449340778713ddffc98f212b86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a30858c7da4d0d039d84164f3a1c89fbe5038449340778713ddffc98f212b86->enter($__internal_3a30858c7da4d0d039d84164f3a1c89fbe5038449340778713ddffc98f212b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_20104b310502d2e29dd03096ef161a9fbf805ae634d5c4c54db6aec220b090e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20104b310502d2e29dd03096ef161a9fbf805ae634d5c4c54db6aec220b090e4->enter($__internal_20104b310502d2e29dd03096ef161a9fbf805ae634d5c4c54db6aec220b090e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Partie en cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_20104b310502d2e29dd03096ef161a9fbf805ae634d5c4c54db6aec220b090e4->leave($__internal_20104b310502d2e29dd03096ef161a9fbf805ae634d5c4c54db6aec220b090e4_prof);

        
        $__internal_3a30858c7da4d0d039d84164f3a1c89fbe5038449340778713ddffc98f212b86->leave($__internal_3a30858c7da4d0d039d84164f3a1c89fbe5038449340778713ddffc98f212b86_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_8ab16cd2af85a79a7291e36f4b5c1e437a6c3b9b5385069c0edc66297139c5a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ab16cd2af85a79a7291e36f4b5c1e437a6c3b9b5385069c0edc66297139c5a8->enter($__internal_8ab16cd2af85a79a7291e36f4b5c1e437a6c3b9b5385069c0edc66297139c5a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_a78b5b24e530699d934035f2ae7ab40880e77fe141205db4d4fc85620471ad65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a78b5b24e530699d934035f2ae7ab40880e77fe141205db4d4fc85620471ad65->enter($__internal_a78b5b24e530699d934035f2ae7ab40880e77fe141205db4d4fc85620471ad65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        // line 8
        echo "    <link rel=\"stylesheet\"
          type=\"text/css\"
          href=\"http://localhost/WebLoveLetter/web/pulse.css\"
    />
    <div class=\"container\">
        <h1>Party list :</h1>
        
        
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new Twig_Error_Runtime('Variable "list" does not exist.', 16, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["party"]) {
            // line 17
            echo "        <li> <a href=\" ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("LoveBundle_joinParty", array("partyid" => twig_get_attribute($this->env, $this->getSourceContext(), $context["party"], "id", array()))), "html", null, true);
            echo "  \">Partie numéro ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["party"], "id", array()), "html", null, true);
            echo " de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["party"], "host", array()), "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['party'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        
        
         <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("LoveBundle_createParty");
        echo "\">
                    Créer une partie
            </a>
        
        
        
    </div>
      
      
";
        
        $__internal_a78b5b24e530699d934035f2ae7ab40880e77fe141205db4d4fc85620471ad65->leave($__internal_a78b5b24e530699d934035f2ae7ab40880e77fe141205db4d4fc85620471ad65_prof);

        
        $__internal_8ab16cd2af85a79a7291e36f4b5c1e437a6c3b9b5385069c0edc66297139c5a8->leave($__internal_8ab16cd2af85a79a7291e36f4b5c1e437a6c3b9b5385069c0edc66297139c5a8_prof);

    }

    public function getTemplateName()
    {
        return "EJLoveBundle:Default:listParty.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 21,  99 => 19,  86 => 17,  82 => 16,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EJLoveBundle:Default:layout.html.twig\" %}

{% block title %}
    Partie en cours - {{ parent() }}
{% endblock %}

{% block ll_body %}
    <link rel=\"stylesheet\"
          type=\"text/css\"
          href=\"http://localhost/WebLoveLetter/web/pulse.css\"
    />
    <div class=\"container\">
        <h1>Party list :</h1>
        
        
        {% for party in list %}
        <li> <a href=\" {{ path('LoveBundle_joinParty', {'partyid': party.id}) }}  \">Partie numéro {{ party.id }} de {{ party.host }}</a></li>
        {% endfor %}
        
        
         <a class=\"btn btn-primary btn-lg\" href=\"{{ path('LoveBundle_createParty') }}\">
                    Créer une partie
            </a>
        
        
        
    </div>
      
      
{% endblock %}", "EJLoveBundle:Default:listParty.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\src\\EJ\\LoveBundle/Resources/views/Default/listParty.html.twig");
    }
}
