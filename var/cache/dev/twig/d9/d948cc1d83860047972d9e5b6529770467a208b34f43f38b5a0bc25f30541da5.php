<?php

/* @EJLove/Default/index.html.twig */
class __TwigTemplate_4847e7a13d8a17ba53bfd1708d46c9cdfde4ac2b653e5e81f7d5c9b392d714b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EJLoveBundle:Default:layout.html.twig", "@EJLove/Default/index.html.twig", 1);
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
        $__internal_1f2065d23b7437429a12fde343a0f455fcb9229e695395236fcf0bf96c5c2921 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f2065d23b7437429a12fde343a0f455fcb9229e695395236fcf0bf96c5c2921->enter($__internal_1f2065d23b7437429a12fde343a0f455fcb9229e695395236fcf0bf96c5c2921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EJLove/Default/index.html.twig"));

        $__internal_27b9d8438fb826bd0c097cf63bcf8744a974d2fc5c661f2abc087687d3430ab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27b9d8438fb826bd0c097cf63bcf8744a974d2fc5c661f2abc087687d3430ab6->enter($__internal_27b9d8438fb826bd0c097cf63bcf8744a974d2fc5c661f2abc087687d3430ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EJLove/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f2065d23b7437429a12fde343a0f455fcb9229e695395236fcf0bf96c5c2921->leave($__internal_1f2065d23b7437429a12fde343a0f455fcb9229e695395236fcf0bf96c5c2921_prof);

        
        $__internal_27b9d8438fb826bd0c097cf63bcf8744a974d2fc5c661f2abc087687d3430ab6->leave($__internal_27b9d8438fb826bd0c097cf63bcf8744a974d2fc5c661f2abc087687d3430ab6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_83bed22887c766415b2bda4c69da670eea5ca17bee1ed21e5eb9cdd9d322957c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83bed22887c766415b2bda4c69da670eea5ca17bee1ed21e5eb9cdd9d322957c->enter($__internal_83bed22887c766415b2bda4c69da670eea5ca17bee1ed21e5eb9cdd9d322957c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d50df55c86f787aec30516a7881fa602f00b60ca4687ce13460f34548f2c1e4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d50df55c86f787aec30516a7881fa602f00b60ca4687ce13460f34548f2c1e4b->enter($__internal_d50df55c86f787aec30516a7881fa602f00b60ca4687ce13460f34548f2c1e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Partie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d50df55c86f787aec30516a7881fa602f00b60ca4687ce13460f34548f2c1e4b->leave($__internal_d50df55c86f787aec30516a7881fa602f00b60ca4687ce13460f34548f2c1e4b_prof);

        
        $__internal_83bed22887c766415b2bda4c69da670eea5ca17bee1ed21e5eb9cdd9d322957c->leave($__internal_83bed22887c766415b2bda4c69da670eea5ca17bee1ed21e5eb9cdd9d322957c_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_a2200909a615a9bba1a1c91a1fdd1de1ca9fff7e3ae3914cbbd0a7aa8e48c8d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2200909a615a9bba1a1c91a1fdd1de1ca9fff7e3ae3914cbbd0a7aa8e48c8d0->enter($__internal_a2200909a615a9bba1a1c91a1fdd1de1ca9fff7e3ae3914cbbd0a7aa8e48c8d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_96e2a9f1838c8a351fbe2b91f47b24a8fb4595e6729fe89081c8766ed7cb9725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96e2a9f1838c8a351fbe2b91f47b24a8fb4595e6729fe89081c8766ed7cb9725->enter($__internal_96e2a9f1838c8a351fbe2b91f47b24a8fb4595e6729fe89081c8766ed7cb9725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        // line 8
        echo "
    <div class=\"container\">
        <div id=\"header\"  class=\"jumbotron\">
            <h1>Love Letter Online</h1>
            <p>
                Ce projet utilise Symfony,
                et construit par Jonathan Shmitt (un peu) et Elliot This.
            </p>
            <p>
                <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("LoveBundle_view", array("gameid" => 1));
        echo "\">
                    Jouer !
                </a>
            </p>

            <div id=\"content\" class=\"col-md-9\">

            </div>
        </div>
        <hr>



        <footer style=\"color: white\">
            <p>Pas de Copyrights © ";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " .</p>
        </footer>
    </div>


";
        
        $__internal_96e2a9f1838c8a351fbe2b91f47b24a8fb4595e6729fe89081c8766ed7cb9725->leave($__internal_96e2a9f1838c8a351fbe2b91f47b24a8fb4595e6729fe89081c8766ed7cb9725_prof);

        
        $__internal_a2200909a615a9bba1a1c91a1fdd1de1ca9fff7e3ae3914cbbd0a7aa8e48c8d0->leave($__internal_a2200909a615a9bba1a1c91a1fdd1de1ca9fff7e3ae3914cbbd0a7aa8e48c8d0_prof);

    }

    public function getTemplateName()
    {
        return "@EJLove/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 31,  83 => 17,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EJLoveBundle:Default:layout.html.twig\" %}

{% block title %}
    Partie - {{ parent() }}
{% endblock %}

{% block ll_body %}

    <div class=\"container\">
        <div id=\"header\"  class=\"jumbotron\">
            <h1>Love Letter Online</h1>
            <p>
                Ce projet utilise Symfony,
                et construit par Jonathan Shmitt (un peu) et Elliot This.
            </p>
            <p>
                <a class=\"btn btn-primary btn-lg\" href=\"{{ path('LoveBundle_view',{'gameid': 1 }) }}\">
                    Jouer !
                </a>
            </p>

            <div id=\"content\" class=\"col-md-9\">

            </div>
        </div>
        <hr>



        <footer style=\"color: white\">
            <p>Pas de Copyrights © {{ 'now'|date('Y') }} .</p>
        </footer>
    </div>


{% endblock %}", "@EJLove/Default/index.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\src\\EJ\\LoveBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
