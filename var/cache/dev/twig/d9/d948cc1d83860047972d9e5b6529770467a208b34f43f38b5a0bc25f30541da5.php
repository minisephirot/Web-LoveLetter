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
        $__internal_0d16d9e0cc246063406af13ea5b09056ad2257fd78444c6a54266c8fa5d70b32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d16d9e0cc246063406af13ea5b09056ad2257fd78444c6a54266c8fa5d70b32->enter($__internal_0d16d9e0cc246063406af13ea5b09056ad2257fd78444c6a54266c8fa5d70b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EJLove/Default/index.html.twig"));

        $__internal_58597b6a82acb2e8bb8eb7620fa7429a52188d4ea4d62a8166b70150f951c178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58597b6a82acb2e8bb8eb7620fa7429a52188d4ea4d62a8166b70150f951c178->enter($__internal_58597b6a82acb2e8bb8eb7620fa7429a52188d4ea4d62a8166b70150f951c178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EJLove/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d16d9e0cc246063406af13ea5b09056ad2257fd78444c6a54266c8fa5d70b32->leave($__internal_0d16d9e0cc246063406af13ea5b09056ad2257fd78444c6a54266c8fa5d70b32_prof);

        
        $__internal_58597b6a82acb2e8bb8eb7620fa7429a52188d4ea4d62a8166b70150f951c178->leave($__internal_58597b6a82acb2e8bb8eb7620fa7429a52188d4ea4d62a8166b70150f951c178_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e4d48d801540e08d7a21586278d53bc2b590a3968be4ccf5fb9c7eb1b4a2ea88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4d48d801540e08d7a21586278d53bc2b590a3968be4ccf5fb9c7eb1b4a2ea88->enter($__internal_e4d48d801540e08d7a21586278d53bc2b590a3968be4ccf5fb9c7eb1b4a2ea88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3bb80148ba4346c29cf4f56a6a170eb9cf076e00c9599888106549cbbb30982d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bb80148ba4346c29cf4f56a6a170eb9cf076e00c9599888106549cbbb30982d->enter($__internal_3bb80148ba4346c29cf4f56a6a170eb9cf076e00c9599888106549cbbb30982d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Partie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3bb80148ba4346c29cf4f56a6a170eb9cf076e00c9599888106549cbbb30982d->leave($__internal_3bb80148ba4346c29cf4f56a6a170eb9cf076e00c9599888106549cbbb30982d_prof);

        
        $__internal_e4d48d801540e08d7a21586278d53bc2b590a3968be4ccf5fb9c7eb1b4a2ea88->leave($__internal_e4d48d801540e08d7a21586278d53bc2b590a3968be4ccf5fb9c7eb1b4a2ea88_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_41e526b428cf52bec2388a91641f7c243ea0ae31c44525da71a8f88287852a1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41e526b428cf52bec2388a91641f7c243ea0ae31c44525da71a8f88287852a1f->enter($__internal_41e526b428cf52bec2388a91641f7c243ea0ae31c44525da71a8f88287852a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_87edb9f359ed52c214a7617a743475cf0e9c536271cfa9d42d5be90a3ec746bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87edb9f359ed52c214a7617a743475cf0e9c536271cfa9d42d5be90a3ec746bf->enter($__internal_87edb9f359ed52c214a7617a743475cf0e9c536271cfa9d42d5be90a3ec746bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        // line 8
        echo "
    <div class=\"container\">
        <div id=\"header\"  class=\"jumbotron\">
            <h1>Love Letter Online</h1>
            <p>
                Ce projet utilise Symfony,
                et construit Jonathan Shmitt (un peu) et Elliot This.
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
        
        $__internal_87edb9f359ed52c214a7617a743475cf0e9c536271cfa9d42d5be90a3ec746bf->leave($__internal_87edb9f359ed52c214a7617a743475cf0e9c536271cfa9d42d5be90a3ec746bf_prof);

        
        $__internal_41e526b428cf52bec2388a91641f7c243ea0ae31c44525da71a8f88287852a1f->leave($__internal_41e526b428cf52bec2388a91641f7c243ea0ae31c44525da71a8f88287852a1f_prof);

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
                et construit Jonathan Shmitt (un peu) et Elliot This.
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
