<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_95d5e109dc50e2922524c20a5114fa79bce02f829845b842b1fcb6c79b6a005d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d67990fa1882e177dc193a883c9389779a2b7b5b00e378b7064f5b42bd17c01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d67990fa1882e177dc193a883c9389779a2b7b5b00e378b7064f5b42bd17c01->enter($__internal_1d67990fa1882e177dc193a883c9389779a2b7b5b00e378b7064f5b42bd17c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_f755d9d1a683c26910f5d75ebb6595f29f7649ed260a52bc5d1c2c76c296f26f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f755d9d1a683c26910f5d75ebb6595f29f7649ed260a52bc5d1c2c76c296f26f->enter($__internal_f755d9d1a683c26910f5d75ebb6595f29f7649ed260a52bc5d1c2c76c296f26f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_1d67990fa1882e177dc193a883c9389779a2b7b5b00e378b7064f5b42bd17c01->leave($__internal_1d67990fa1882e177dc193a883c9389779a2b7b5b00e378b7064f5b42bd17c01_prof);

        
        $__internal_f755d9d1a683c26910f5d75ebb6595f29f7649ed260a52bc5d1c2c76c296f26f->leave($__internal_f755d9d1a683c26910f5d75ebb6595f29f7649ed260a52bc5d1c2c76c296f26f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
